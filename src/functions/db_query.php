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

function db_query($query, $sheetname){
	GLOBAL $sheet;
	$res = dbLookup($query, $sheet, $sheetname);

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

?>
