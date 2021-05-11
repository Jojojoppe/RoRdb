<?php

require_once __DIR__."/../../cfg/appconfig.php";
require_once __DIR__."/../utils.php";
require_once __DIR__."/../apiwrapper/sheets.php";
require_once __DIR__."/../apiwrapper/drive.php";

// Check if RoRdb.dat file exists and fill information, else generate it
if(!file_exists(__DIR__."/../../RoRdb.dat")){
	die("Run installer first");
}
$RoRdb_dat = json_decode(file_get_contents(__DIR__."/../../RoRdb.dat"), true);
$sheet = $RoRdb_dat["sheetId"];

function generate_tree_categories($childlist, $id){
	$ret = [
		"id" => $id,
		"name" => $childlist[$id]["name"],
		"childs" => array()
	];
	foreach($childlist[$id]["childs"] as $c){
		$cret = generate_tree_categories($childlist, $c);
		array_push($ret["childs"], $cret);
	}
	return $ret;
}

function db_get_categories(){
	GLOBAL $sheet;
	GLOBAL $sheet_info_name;
	GLOBAL $sheet_categories_name;

	// Get ID of next category
	$next_id = sheets_get_range($sheet, $sheet_info_name, "B1")[0][0];
	// Get last row
	$row = $next_id+1;
	// Calculate range of table
	$range = "A2:J$row";
	$table = sheets_get_range($sheet, $sheet_categories_name, $range);

	$childlist = array();
	foreach($table as $row){
		$c = [
			"id" => $row[0],
			"name" => $row[1],
			"parent" => $row[2],
			"parentId" => $row[3],
			"childs" => explode(",", $row[7])
		];
		array_pop($c["childs"]);
		array_push($childlist, $c);
	}

	$tree = [generate_tree_categories($childlist, 0)];
	return [$tree, $childlist];
}

function generate_tree_locations($childlist, $id){
	$ret = [
		"id" => $id,
		"name" => $childlist[$id]["name"],
		"childs" => array()
	];
	foreach($childlist[$id]["childs"] as $c){
		$cret = generate_tree_locations($childlist, $c);
		array_push($ret["childs"], $cret);
	}
	return $ret;
}

function db_get_locations(){
	GLOBAL $sheet;
	GLOBAL $sheet_info_name;
	GLOBAL $sheet_locations_name;

	// Get ID of next location
	$next_id = sheets_get_range($sheet, $sheet_info_name, "B2")[0][0];
	// Get last row
	$row = $next_id+1;
	// Calculate range of table
	$range = "A2:J$row";
	$table = sheets_get_range($sheet, $sheet_locations_name, $range);

	$childlist = array();
	foreach($table as $row){
		$c = [
			"id" => $row[0],
			"name" => $row[1],
			"parent" => $row[2],
			"parentId" => $row[3],
			"childs" => explode(",", $row[7])
		];
		array_pop($c["childs"]);
		array_push($childlist, $c);
	}

	$tree = [generate_tree_locations($childlist, 0)];
	return [$tree, $childlist];
}

?>
