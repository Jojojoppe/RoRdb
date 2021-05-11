<?php

require_once __DIR__."/../../cfg/appconfig.php";
require_once __DIR__."/../utils.php";
require_once __DIR__."/../apiwrapper/sheets.php";
require_once __DIR__."/../apiwrapper/drive.php";

// Check if RoRdb.dat file exists and fill information, else generate it
if(!file_exists(__DIR__."/../../RoRdb.dat")){
	require __DIR__."/create_drive.php";
}
$RoRdb_dat = json_decode(file_get_contents(__DIR__."/../../RoRdb.dat"), true);

// Check if there is already a database spreadsheet
$files = drive_ls($RoRdb_dat["folderId"]);
if(array_key_exists($database_filename, $files)){
	echo "Database spreadsheet already exists, delete it\r\n<br>";
	drive_delete_file($files[$database_filename]["id"]);
}
echo "Create database spreadsheet\r\n<br>";
$sheet_id = drive_create_spreadsheet($RoRdb_dat["folderId"], $database_filename);
// Share with anyone with link
drive_share($sheet_id, "", "reader");
$RoRdb_dat["sheetId"] = $sheet_id;
sheets_create_sheet($sheet_id, $sheet_info_name);
sheets_delete_sheet($sheet_id, 0);
sheets_create_sheet($sheet_id, $sheet_categories_name);
sheets_create_sheet($sheet_id, $sheet_locations_name);
sheets_create_sheet($sheet_id, $sheet_items_name);

// Save settings in RoRdb.dat and load database functions
file_put_contents(__DIR__."/../../RoRdb.dat", json_encode($RoRdb_dat));
require_once __DIR__."/../functions/db_put.php";

// Fill Info tab
sheets_put_range($sheet_id, $sheet_info_name, "A1", [
	["Nr $sheet_categories_name", "=COUNT($sheet_categories_name!A2:A)"],
	["Nr $sheet_locations_name", "=COUNT($sheet_locations_name!A2:A)"],
	["Nr $sheet_items_name", "=COUNT($sheet_items_name!A2:A)"]
]);

// Fill Categories tab
sheets_put_range($sheet_id, $sheet_categories_name, "A1", [
	["ID", "Name", "Parent", "Parent ID", "Parent name list", "Parent ID list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
]);
db_put_category("All", "");

// Fill Locations tab
sheets_put_range($sheet_id, $sheet_locations_name, "A1", [
	["ID", "Name", "Parent", "Parent ID", "Parent name list", "Parent ID list", "Child name list", "Child ID list", "Search tags", "Search tags ID"]
]);
db_put_location("All", "");

// Fill Items tab
sheets_put_range($sheet_id, $sheet_items_name, "A1", [
	["ID", "Name", "Category", "Location"]
]);

?>
