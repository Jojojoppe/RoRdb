<?php

require_once __DIR__."/../../cfg/appconfig.php";
require_once __DIR__."/../utils.php";
require_once __DIR__."/../apiwrapper/sheets.php";
require_once __DIR__."/../apiwrapper/drive.php";
require_once __DIR__."/../functions/db_query.php";

// Check if RoRdb.dat file exists and fill information, else generate it
if(!file_exists(__DIR__."/../../RoRdb.dat")){
	die("Run installer first");
}
$RoRdb_dat = json_decode(file_get_contents(__DIR__."/../../RoRdb.dat"), true);
$sheet = $RoRdb_dat["sheetId"];

	//function sheets_put_range($id, $sheet, $range, $values, $raw=FALSE)

function db_update_category($id, $name, $parent){
	GLOBAL $sheet;
	GLOBAL $sheet_categories_name;
	GLOBAL $sheet_info_name;
	GLOBAL $categories_flat;

	// Check if new name
	$newname = false;
	if($categories_flat[$id]["name"]!=$name) $newname=true;
	// Check if new parent
	$newparent = false;
	if($categories_flat[$id]["parent"]!=$parent) $newparent=true;

	// If new name update all the children with id as parent
	if($newname){
		$query = "select * where C='".$categories_flat[$id]["name"]."'";
		$ret = db_query($query, $sheet_categories_name);
		foreach($ret as $c){
			// Get starting range of category
			$range = "C".($c[0]+2);
			sheets_put_range($sheet, $sheet_categories_name, $range, [
				[$name]
			], false);	
		}
	}

	// Update category
	$range = "B".($id+2);
	sheets_put_range($sheet, $sheet_categories_name, $range, [
		[$name, $parent]
	], false);	
}

function db_update_location($id, $name, $parent){
	GLOBAL $sheet;
	GLOBAL $sheet_locations_name;
	GLOBAL $sheet_info_name;
	GLOBAL $locations_flat;

	// Check if new name
	$newname = false;
	if($locations_flat[$id]["name"]!=$name) $newname=true;
	// Check if new parent
	$newparent = false;
	if($locations_flat[$id]["parent"]!=$parent) $newparent=true;

	// If new name update all the children with id as parent
	if($newname){
		$query = "select * where C='".$locations_flat[$id]["name"]."'";
		$ret = db_query($query, $sheet_locations_name);
		foreach($ret as $c){
			// Get starting range of category
			$range = "C".($c[0]+2);
			sheets_put_range($sheet, $sheet_locationss_name, $range, [
				[$name]
			], false);	
		}
	}

	// Update category
	$range = "B".($id+2);
	sheets_put_range($sheet, $sheet_locations_name, $range, [
		[$name, $parent]
	], false);	
}

?>
