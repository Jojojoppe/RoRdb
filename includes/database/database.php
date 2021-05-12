<?php

class RordbDatabase{

	public $api;
	public $folder;
	public $sheet;

	function __construct(){
		$this->api = new RordbGoogleApi();
		$this->sheet = get_option("rordb_sheet_id");
		$this->folder = get_option("rordb_drive_id");
	}

	function load_database(){
		// Search in service account root for folder RoRdb-UID
		$uid = get_option('rordb_app_uid');
		$foldername = "RoRdb".RORDB_VERSION.$uid;

		$files_in_root = $this->api->drive_ls("root");
		if(!array_key_exists($foldername, $files_in_root)){
			update_option('rordb_drive_id', '');
			update_option('rordb_valid_database', false);
			add_settings_error('rordb_messages', 'rordb_message',
				__('Folder not found', 'rordb'), 'error');
			return false;
		}

		// Get folder id and save
		$folderid = $files_in_root[$foldername]["id"];
		update_option('rordb_drive_id', $folderid);

		// Search for sheet in folder
		$files = $this->api->drive_ls($folderid);
		if(!array_key_exists("RoRdb", $files)){
			update_option('rordb_drive_id', '');
			update_option('rordb_sheet_id', '');
			update_option('rordb_valid_database', false);
			add_settings_error('rordb_messages', 'rordb_message',
				__('Database not found', 'rordb'), 'error');
			return false;
		}

		// Get sheet id and save
		$sheetid = $files["RoRdb"]["id"];
		update_option('rordb_sheet_id', $sheetid);

		// Check database version
		$version = $this->api->sheets_get_range($sheetid, "Info", "B4")[0][0];
		$majorexpectedversion = explode('.', RORDB_VERSION)[0];
		if($version!=$majorexpectedversion){
			update_option('rordb_drive_id', '');
			update_option('rordb_sheet_id', '');
			update_option('rordb_valid_database', false);
			add_settings_error('rordb_messages', 'rordb_message',
				__('Database version not mathing: '.$majorexpectedversion.'!='.$version, 'rordb'), 'error');
			return false;
		}

		$this->folder = $folderid;
		$this->sheet = $sheetid;
		update_option('rordb_valid_database', true);
		update_option('rordb_service_account_mail', $this->api->serviceaccount);
		return true;
	}

	function create_database(){
		// Search in service account root for folder RoRdb-UID
		$uid = get_option('rordb_app_uid');
		$foldername = "RoRdbv".$uid;

		$files_in_root = $this->api->drive_ls("root");
		if(array_key_exists($foldername, $files_in_root)){
			// Folder already exists: delete it
			$this->api->drive_delete_file($files_in_root[$foldername]["id"]);
		}
		// Create folder
		$folderid = $this->api->drive_create_folder("root", $foldername);
		update_option('rordb_drive_id', $folderid);
		// Share with email
		$mail = get_option('rordb_admin_mail');
		$this->api->drive_share($folderid, $mail, "writer");

		// Create sheet
		$sheetid = $this->api->drive_create_spreadsheet($folderid, "RoRdb");
		update_option('rordb_sheet_id', $sheetid);
		// Share drive with everyone with link
		$this->api->drive_share($sheetid, "", "reader");

		$this->folder = $folderid;
		$this->sheet = $sheetid;

		// Create info tab
		$this->api->sheets_create_sheet($sheetid, "Info");
		$this->api->sheets_delete_sheet($sheetid, 0);
		$this->api->sheets_create_sheet($sheetid, "Categories");
		$this->api->sheets_create_sheet($sheetid, "Locations");
		$this->api->sheets_create_sheet($sheetid, "Items");

		$majorexpectedversion = explode('.', RORDB_VERSION)[0];
		$this->api->sheets_put_range($sheetid, "Info", "A1",[
			["Nr categories", "=COUNT(Categories!A2:A)"],
			["Nr locations", "=COUNT(Locations!A2:A)"],
			["Nr items", "=COUNT(Items!A2:A)"],
			["Database version", $majorexpectedversion]
		]);

		$this->api->sheets_put_range($sheetid, "Categories", "A1", [
			["ID", "Name", "Parent", "Parent ID", "Parent name list", "Parent ID list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
		]);
		$this->put_category("All", "");

		$this->api->sheets_put_range($sheetid, "Locations", "A1", [
			["ID", "Name", "Parent", "Parent ID", "Parent name list", "Parent ID list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
		]);

		update_option('rordb_valid_database', true);
		update_option('rordb_service_account_mail', $this->api->serviceaccount);
		return true;
	}

	function delete_database(){
		// Search in service account root for folder RoRdb-UID
		$uid = get_option('rordb_app_uid');
		$foldername = "RoRdb".$uid;

		$files_in_root = $this->api->drive_ls("root");
		if(array_key_exists($foldername, $files_in_root)){
			// Folder already exists: delete it
			$this->api->drive_delete_file($files_in_root[$foldername]["id"]);
		}
		update_option('rordb_drive_id', '');
		update_option('rordb_sheet_id', '');
		update_option('rordb_valid_database', false);
		return true;
	}

	function get_categories(){
		// Get ID of next category to get amount of categories
		$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B1")[0][0];
		// Get last row
		$row = $next_id+1;
		// Calculate range of table
		$range = "A2:J$row";
		$table = $this->api->sheets_get_range($this->sheet, "Categories", $range);

		$childlist = array();
		foreach($table as $row){
			$c = [
				'id'=>$row[0],
				'name'=>$row[1],
				'parent'=>$row[2],
				'parentId'=>$row[3],
				'childs'=>explode(',', $row[7])
			];
			array_pop($c["childs"]);
			array_push($childlist, $c);
		}

		$tree = [$this->generate_tree_categories_locations($childlist, 0)];

		return [$tree, $childlist];
	}

	function get_locations(){
		// Get ID of next location to get amount of locations
		$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B2")[0][0];
		// Get last row
		$row = $next_id+1;
		// Calculate range of table
		$range = "A2:J$row";
		$table = $this->api->sheets_get_range($this->sheet, "Locations", $range);

		$childlist = array();
		foreach($table as $row){
			$c = [
				'id'=>$row[0],
				'name'=>$row[1],
				'parent'=>$row[2],
				'parentId'=>$row[3],
				'childs'=>explode(',', $row[7])
			];
			array_pop($c["childs"]);
			array_push($childlist, $c);
		}

		$tree = [$this->generate_tree_categories_locations($childlist, 0)];

		return [$tree, $childlist];
	}

	function generate_tree_categories_locations($childlist, $id){
		$ret = [
			"id" => $id,
			"name" => $childlist[$id]["name"],
			"childs" => array()
		];
		foreach($childlist[$id]["childs"] as $c){
			$cret = $this->generate_tree_categories_locations($childlist, $c);
			array_push($ret["childs"], $cret);
		}
		return $ret;
	}

	function execute_recursive_($cats, $level, $func, $e){
		foreach($cats as $c){
			$func($c, $level, $e);
			$this->execute_recursive_($c["childs"], $level+1, $func, $e);
		}
	}

	// Traverses the categories recursively and calls func($category, $level)
	function categories_execute_recursive($func, $e=null){
		$categories = $this->get_categories()[0];
		$this->execute_recursive_($categories, 0, $func, $e);
	}

	// Traverses the locations recursively and calls func($location, $level)
	function locations_execute_recursive($func, $e=null){
		$locations = $this->get_locations()[0];
		$this->execute_recursive_($locations, 0, $func, $e);
	}

	function put_category($name, $parent){
		// Get ID of next category
		$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B1")[0][0];
		$row = $next_id+2;
		// Get start cell of new row
		$range = "A".$row;
		// Put into sheet
		$this->api->sheets_put_range($this->sheet, "Categories", $range, [
			[$next_id, $name, $parent,
				"=IFERROR(VLOOKUP(C$row, {B2:B, A2:A}, 2, FALSE), \"\")",											// Parent name
				"=IFERROR(CONCATENATE(B$row, \",\", VLOOKUP(D$row, A2:E, 4, TRUE)), \"\")",							// Parent name list
				"=IFERROR(CONCATENATE(B$row, \",\", VLOOKUP(D$row, A2:F, 5, TRUE)), \"\")",							// Parent ID list
				"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(B2:B, C2:C=B$row))), \",\"), \"\")",	// Child name list
				"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(A2:A, C2:C=B$row))), \",\"), \"\")",	// Child ID list
				"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:I, 9, TRUE), \"\"), \",\", B$row, \",\")",					// Search tags
				"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:J, 10, TRUE), \"\"), \",\", A$row, \",\")",				// Search tags ID
			]
		], false);
	}

	function get_category($id){
		$row = $id+2;
		$range = "A$row:J";
		$cat = $this->api->sheets_get_range($this->sheet, "Categories", $range)[0];
		return [
			'id' => $cat[0],
			'name' => $cat[1],
			'parent' => $cat[2],
			'parentid' => $cat[3]
		];
	}

	function update_category($id, $name, $parent){
		$res = $this->get_categories();
		$categories_flat = $res[1];
		
		// Check if new name
		$newname = false;
		if($categories_flat[$id]["name"]!=$name) $newname=true;
		// Check if new parent
		$newparent = false;
		if($categories_flat[$id]["parent"]!=$parent) $newparent=true;
	
		// If new name update all the children with id as parent
		if($newname){
			$query = "select * where C='".$categories_flat[$id]["name"]."'";
			$ret = $this->db_query($query, "Categories");
			foreach($ret as $c){
				// Get starting range of category
				$range = "C".($c[0]+2);
				$this->api->sheets_put_range($this->sheet, "Categories", $range, [
					[$name]
				], false);	
			}
		}
	
		// Update category
		$range = "B".($id+2);
		$this->api->sheets_put_range($this->sheet, "Categories", $range, [
			[$name, $parent]
		], false);	
	}

	function encodeURIComponent($str){
		$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
		return strtr(rawurlencode($str), $revert);
	}
	
	function dbLookup($query, $sheetid, $sheet){
		$databaseURL = "https://docs.google.com/a/google.com/spreadsheets/d/".$sheetid."/gviz/tq?tq=";
		$url = $databaseURL.$this->encodeURIComponent($query)."&sheet=".$sheet;
		$response = file_get_contents($url);
		$response = explode(");", explode("setResponse(", $response)[1])[0];
		return json_decode($response, TRUE);
	}

	function db_query($query, $sheetname){
		$res = $this->dbLookup($query, $this->sheet, $sheetname);
	
		// Check for errors
		if($res["status"]!="ok"){
			return array();
		}
	
		$rows = $res["table"]["rows"];
		$retval = array();
		foreach($rows as $r){
			$cr = $r["c"];
			$c = array();
			foreach($cr as $cell){
				if(is_null($cell)){
					array_push($c, "");
				}else{
					array_push($c, $cell["v"]);
				}
			}
			array_push($retval, $c);
		}
	
		return $retval;
	}

}