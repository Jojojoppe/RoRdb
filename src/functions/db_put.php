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

function db_put_category($name, $parent){
	GLOBAL $sheet;
	GLOBAL $sheet_categories_name;
	GLOBAL $sheet_info_name;

	// Get ID of next category
	$next_id = sheets_get_range($sheet, $sheet_info_name, "B1")[0][0];
	$row = $next_id+2;
	// Get start cell of new row
	$range = "A".$row;
	// Put into sheet
	sheets_put_range($sheet, $sheet_categories_name, $range, [
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

function db_put_location($name, $parent){
	GLOBAL $sheet;
	GLOBAL $sheet_locations_name;
	GLOBAL $sheet_info_name;

	// Get ID of next category
	$next_id = sheets_get_range($sheet, $sheet_info_name, "B2")[0][0];
	$row = $next_id+2;
	// Get start cell of new row
	$range = "A".$row;
	// Put into sheet
	sheets_put_range($sheet, $sheet_locations_name, $range, [
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
