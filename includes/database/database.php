<?php

class RordbDatabase{

	public $api;
	public $folder;
	public $sheet;

	function __construct(){
		$this->api = new RordbGoogleApi();
	}

	function load_database(){
		// Search in service account root for folder RoRdb-UID
		$uid = get_option('rordb_app_uid');
		$foldername = "RoRdbv".RORDB_VERSION.$uid;

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
		if($version!=RORDB_VERSION){
			update_option('rordb_drive_id', '');
			update_option('rordb_sheet_id', '');
			update_option('rordb_valid_database', false);
			add_settings_error('rordb_messages', 'rordb_message',
				__('Database version not mathing: '.RORDB_VERSION.'!='.$version, 'rordb'), 'error');
			return false;
		}

		$this->folder = $folderid;
		$this->sheet = $sheetid;
		update_option('rordb_valid_database', true);
		return true;
	}

	function create_database(){
		// Search in service account root for folder RoRdb-UID
		$uid = get_option('rordb_app_uid');
		$foldername = "RoRdbv".RORDB_VERSION.$uid;

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

		$this->api->sheets_put_range($sheetid, "Info", "A1",[
			["Nr categories", "=COUNT(Categories!A2:A)"],
			["Nr locations", "=COUNT(Locations!A2:A)"],
			["Nr items", "=COUNT(Items!A2:A)"],
			["Database version", RORDB_VERSION]
		]);

		$this->api->sheets_put_range($sheetid, "Categories", "A1", [
			["ID", "Name", "Parent", "Parent ID", "Parent name list", "Parent ID list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
		]);

		$this->api->sheets_put_range($sheetid, "Locations", "A1", [
			["ID", "Name", "Parent", "Parent ID", "Parent name list", "Parent ID list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
		]);

		update_option('rordb_valid_database', true);
		return true;
	}

	function delete_database(){
		// Search in service account root for folder RoRdb-UID
		$uid = get_option('rordb_app_uid');
		$foldername = "RoRdbv".RORDB_VERSION.$uid;

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
		$next_id = $api->sheets_get_range($this->sheet, "Info", "B1")[0][0];
		// Get last row
		$row = $next_id+1;
		// Calculate range of table
		$range = "A2:J:$row";
		$table = $api->sheets_get_range($this->sheet, "Categories", $range);

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
		$next_id = $api->sheets_get_range($this->sheet, "Info", "B2")[0][0];
		// Get last row
		$row = $next_id+1;
		// Calculate range of table
		$range = "A2:J:$row";
		$table = $api->sheets_get_range($this->sheet, "Locations", $range);

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

}