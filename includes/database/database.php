<?php

//TODO create database share everybody with link!!! WHEN ADDING IMAGES

class RordbDatabase{

	public $api;
	public $folder;
	public $sheet;

	function __construct(){
		try{
			$this->api = new RordbGoogleApi();
			$this->sheet = get_option("rordb_sheet_id");
			$this->folder = get_option("rordb_drive_id");
		}catch(exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
			$this->error('Could not connect with Google API. Check the service account key file! After correct key file is provided reload the database');
			update_option('rordb_valid_database', false);
		}
	}

	function error($msg){
		if(function_exists('add_settings_error')){
			add_settings_error('rordb_messages', 'rordb_message',
				__($msg, 'rordb'), 'error');
			settings_errors('rordb_messages');   
			GLOBAL $wp_settings_errors;
			$wp_settings_errors = array();
		}else{
			echo "<b>ERROR: ".$msg."</b>";
		}
	}

	// -----------------------------------------------
	// Database folder operations
	// -----------------------------------------------

	function load_database(){
		try{
			// Search in service account root for folder RoRdb-UID
			$uid = get_option('rordb_app_uid');
			$foldername = "RoRdb".$uid;

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
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function create_database(){
		try{
			// Search in service account root for folder RoRdb-UID
			$uid = get_option('rordb_app_uid');
			$foldername = "RoRdb".$uid;

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
				["ID", "Name", "Parent", "Parent ID", "Parent ID list", "Parent name list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
			]);
			$this->put_category("All", "");

			$this->api->sheets_put_range($sheetid, "Locations", "A1", [
				["ID", "Name", "Parent", "Parent ID", "Parent ID list", "Parent name list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
			]);
			$this->put_location("All", "");

			$this->api->sheets_put_range($sheetid, "Items", "A1", [
				["ID", "Name", "Category", "Location", "Color", "Size", "Amount", "Comments", "Category tags", "Location tags", "Image", "Claimed", "Hidden"]
			]);

			update_option('rordb_valid_database', true);
			update_option('rordb_service_account_mail', $this->api->serviceaccount);
			return true;
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function delete_database(){
		try{
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
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	// -----------------------------------------------


	// Categories
	// ----------

	function put_category($name, $parent){
		try{
			// Get ID of next category
			$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B1")[0][0];
			$row = $next_id+2;
			// Get start cell of new row
			$range = "A".$row;
			// Put into sheet
			$this->api->sheets_put_range($this->sheet, "Categories", $range, [
				[$next_id, $name, $parent,
					"=IFERROR(VLOOKUP(C$row, {B2:B, A2:A}, 2, FALSE), \"\")",											// Parent name
					"=IFERROR(CONCATENATE(A$row, \",\", VLOOKUP(D$row, A2:E, 5, TRUE)), A$row)",							// Parent ID list
					"=IFERROR(CONCATENATE(B$row, \",\", VLOOKUP(D$row, A2:F, 6, TRUE)), B$row)",							// Parent name list
					"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(B2:B, C2:C=B$row))), \",\"), \"\")",	// Child name list
					"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(A2:A, C2:C=B$row))), \",\"), \"\")",	// Child ID list
					"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:I, 9, TRUE), \"\"), \",\", B$row, \",\")",					// Search tags
					"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:J, 10, TRUE), \"\"), \",\", A$row, \",\")",				// Search tags ID
				]
			], false);
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function get_category($id){
		try{
			$row = $id+2;
			$range = "A$row:J";
			$cat = $this->api->sheets_get_range($this->sheet, "Categories", $range)[0];
			return [
				'id' => $cat[0],
				'name' => $cat[1],
				'parent' => $cat[2],
				'parentid' => $cat[3],
				'parents' => $cat[4]
			];
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function get_categories(){
		try{
			// Get ID of next category to get amount of categories
			$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B1")[0][0];
			// Get last row
			$row = $next_id+1;
			// Calculate range of table
			$range = "A2:J$row";
			$table = $this->api->sheets_get_range($this->sheet, "Categories", $range);

			$childlist = array();
			foreach($table as $row){
				// Skip deleted categories
				if(!array_key_exists(1, $row)) continue;
				$c = [
					'id'=>$row[0],
					'name'=>$row[1],
					'parent'=>$row[2],
					'parentId'=>$row[3],
					'childs'=>explode(',', $row[7]),
					'parents'=>explode(',', $row[4])
				];
				array_pop($c["childs"]);
				$childlist[$row[0]] =  $c;
			}

			$tree = [$this->generate_tree_categories_locations($childlist, 0)];

			return [$tree, $childlist];
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function update_category($id, $name, $parent){
		try{
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
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function delete_category($id){
		try{
			$res = $this->get_categories();
			$categories_flat = $res[1];

			// Update all the children with id as parent -> set to parent of deleted category
			$query = "select * where C='".$categories_flat[$id]["name"]."'";
			$ret = $this->db_query($query, "Categories");
			foreach($ret as $c){
				$this->update_category($c[0], $c[1], $categories_flat[$id]["parent"]);
			}
		
			// Update category
			$range = "B".($id+2);
			$this->api->sheets_put_range($this->sheet, "Categories", $range, [
				["", "", "", "", "", "", "", "", ""]
			], false);	
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	// Locations
	// ---------

	function put_location($name, $parent){
		try{
			// Get ID of next location
			$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B2")[0][0];
			$row = $next_id+2;
			// Get start cell of new row
			$range = "A".$row;
			// Put into sheet
			$this->api->sheets_put_range($this->sheet, "Locations", $range, [
				[$next_id, $name, $parent,
					"=IFERROR(VLOOKUP(C$row, {B2:B, A2:A}, 2, FALSE), \"\")",											// Parent name
					"=IFERROR(CONCATENATE(A$row, \",\", VLOOKUP(D$row, A2:E, 5, TRUE)), A$row)",							// Parent ID list
					"=IFERROR(CONCATENATE(B$row, \",\", VLOOKUP(D$row, A2:F, 6, TRUE)), B$row)",							// Parent name list
					"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(B2:B, C2:C=B$row))), \",\"), \"\")",	// Child name list
					"=IFERROR(CONCATENATE(TEXTJOIN(\",\", TRUE, TRANSPOSE(FILTER(A2:A, C2:C=B$row))), \",\"), \"\")",	// Child ID list
					"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:I, 9, TRUE), \"\"), \",\", B$row, \",\")",					// Search tags
					"=CONCATENATE(IFERROR(VLOOKUP(D$row, A$2:J, 10, TRUE), \"\"), \",\", A$row, \",\")",				// Search tags I
				]
			], false);
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function get_location($id){
		try{
			$row = $id+2;
			$range = "A$row:J";
			$cat = $this->api->sheets_get_range($this->sheet, "Locations", $range)[0];
			return [
				'id' => $cat[0],
				'name' => $cat[1],
				'parent' => $cat[2],
				'parentid' => $cat[3],
				'parents' => $cat[4]
			];
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function get_locations(){
		try{
			// Get ID of next location to get amount of locations
			$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B2")[0][0];
			// Get last row
			$row = $next_id+1;
			// Calculate range of table
			$range = "A2:J$row";
			$table = $this->api->sheets_get_range($this->sheet, "Locations", $range);

			$childlist = array();
			foreach($table as $row){
				// Skip deleted locations
				if(!array_key_exists(1, $row)) continue;
				$c = [
					'id'=>$row[0],
					'name'=>$row[1],
					'parent'=>$row[2],
					'parentId'=>$row[3],
					'childs'=>explode(',', $row[7]),
					'parents'=>explode(',', $row[4])
				];
				array_pop($c["childs"]);
				$childlist[$row[0]] =  $c;
			}

			$tree = [$this->generate_tree_categories_locations($childlist, 0)];

			return [$tree, $childlist];
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function update_location($id, $name, $parent){
		try{
			$res = $this->get_locations();
			$locations_flat = $res[1];
			
			// Check if new name
			$newname = false;
			if($locations_flat[$id]["name"]!=$name) $newname=true;
			// Check if new parent
			$newparent = false;
			if($locations_flat[$id]["parent"]!=$parent) $newparent=true;
		
			// If new name update all the children with id as parent
			if($newname){
				$query = "select * where C='".$locations_flat[$id]["name"]."'";
				$ret = $this->db_query($query, "Locations");
				foreach($ret as $c){
					// Get starting range of location
					$range = "C".($c[0]+2);
					$this->api->sheets_put_range($this->sheet, "Locations", $range, [
						[$name]
					], false);	
				}
			}
		
			// Update location
			$range = "B".($id+2);
			$this->api->sheets_put_range($this->sheet, "Locations", $range, [
				[$name, $parent]
			], false);	
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function delete_location($id){
		try{
			$res = $this->get_locations();
			$locations_flat = $res[1];

			// Update all the children with id as parent -> set to parent of deleted location
			$query = "select * where C='".$locations_flat[$id]["name"]."'";
			$ret = $this->db_query($query, "Locations");
			foreach($ret as $c){
				$this->update_location($c[0], $c[1], $locations_flat[$id]["parent"]);
			}
		
			// Update location
			$range = "B".($id+2);
			$this->api->sheets_put_range($this->sheet, "Locations", $range, [
				["", "", "", "", "", "", "", "", ""]
			], false);	
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	// Items
	// -----

	function put_item($name, $category, $location, $color, $size, $amount, $comments, $image, $claimed, $hidden){
		try{
			if($hidden) $hidden = "1"; else $hidden = "0";
			// Get ID of next item
			$next_id = $this->api->sheets_get_range($this->sheet, "Info", "B3")[0][0];
			$row = $next_id+2;
			// Get start cell of new row
			$range = "A".$row;
			// Put into sheet
			$this->api->sheets_put_range($this->sheet, "Items", $range, [
				[$next_id, $name, $category, $location, $color, $size, $amount, $comments,
					"=VLOOKUP(C$row, {Categories!B2:B, Categories!I2:I}, 2, FALSE)", 
					"=VLOOKUP(D$row, {Locations!B2:B, Locations!I2:I}, 2, FALSE)", 
					$image, $claimed, $hidden
				]
			], false);
		}catch(exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function update_item($id, $name, $category, $location, $color, $size, $amount, $comments, $image, $claimed, $hidden){
		try{
			$this->api->sheets_put_range($this->sheet, "Items", "A".((int)$id+2), [
				[$id, $name, $category, $location, $color, $size, $amount, $comments]
			], false);
			$this->api->sheets_put_range($this->sheet, "Items", "K".((int)$id+2), [
				[$image, $claimed, $hidden]
			], false);
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function delete_item($id){
		try{

		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	function items_search($searchtag, $specifics, $exc){

		// Used collumns
		$cols = [
			'ID' => 'A',
			'Name' => 'B',
			'Category' => 'C',
			'Location' => 'D',
			'Color' => 'E',
			'Size' => 'F',
			'Amount' => 'G',
			'Comments' => 'H',
			'Category_tree' => 'I',
			'Location_tree' => 'J',
			'Claimed' => 'L',
			'Hidden' => 'M'
		];

		// Build up search collumns
		$search_cols = [];
		foreach($cols as $i=>$v){
			if(!in_array($i, $exc)){
				array_push($search_cols, $cols[$i]);
			}
		}

		$query = "select * where ";

		// $this->api->preprint($specifics);

		// Add specifics
		foreach($specifics as $k => $v){

			echo $k." -> ".$v."<br>";

			if($k!="Onlyhidden"){
				$col = $cols[$k];
			}
			if(is_null($v)) continue;

			if($k=="Category_tree"){
				$query .= $col." contains ',".$v.",' and ";
			}elseif($k=="Category"){
				$query .= $col."='".$v."' and ";
			}elseif($k=="Location_tree"){
				$query .= $col." contains ',".$v.",' and ";
			}elseif($k=="Location"){
				$query .= $col."='".$v."' and ";
			}elseif($k=="Onlyhidden"){
				// TODO
			}elseif($k=="ID"){
				$query .= $col."='".$v."' and ";
			}else{
				$query .= $col." matches '(?i)(?:.*)$v(?:.*)' and ";
			}
		}

		// Add generic search tag
		if(!is_null($searchtag)){
			$query .= "(";
			foreach($search_cols as $i){
				$query .= $i." matches '(?i)(?:.*)$searchtag(?:.*)' or ";
			}
			$query .= "1=0) and ";
		}

		$query .= "0=0";

		echo $query;

		$res = $this->db_query($query, "Items");
		return $res;
	}

	// DB connection functions
	// -----------------------

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

	// Helper functions
	// ----------------

	function generate_tree_categories_locations($childlist, $id){
		$ret = [
			"id" => $id,
			"name" => $childlist[$id]["name"],
			"childs" => array(),
			"allchilds" => "$id",
			"parents" => $childlist[$id]["parents"]
		];
		foreach($childlist[$id]["childs"] as $c){
			$cret = $this->generate_tree_categories_locations($childlist, $c);
			array_push($ret["childs"], $cret);
			$ret['allchilds'] = $ret['allchilds'].",".$cret['allchilds'];
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
		try{
			$categories = $this->get_categories()[0];
			$this->execute_recursive_($categories, 0, $func, $e);
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

	// Traverses the locations recursively and calls func($location, $level)
	function locations_execute_recursive($func, $e=null){
		try{
			$locations = $this->get_locations()[0];
			$this->execute_recursive_($locations, 0, $func, $e);
		}catch(Exception $e){
			$this->error(__FUNCTION__.": ".$e->getMessage());
		}
	}

}