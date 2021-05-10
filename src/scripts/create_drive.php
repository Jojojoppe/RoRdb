<?php

require_once __DIR__."/../../cfg/appconfig.php";
require_once __DIR__."/../utils.php";
require_once __DIR__."/../apiwrapper/sheets.php";
require_once __DIR__."/../apiwrapper/drive.php";

// Check if RoRdb.dat file exists and fill information, else generate it
$RoRdb_dat = array();
if(!file_exists(__DIR__."/../../RoRdb.dat")){
	// Generate dirname for service account
	$RoRdb_dat["dirname"] = $app_name.$app_version.$app_uid;
}else{
	$RoRdb_dat = json_decode(file_get_contents(__DIR__."/../../RoRdb.dat"), true);	
}

// Check if directory already exists on drive of service account
$files_in_root = drive_ls("root");
if(array_key_exists($RoRdb_dat["dirname"], $files_in_root)){
	echo "App directory already in drive: Delete all and recreate\r\n<br>";
	drive_delete_file($files_in_root[$RoRdb_dat["dirname"]]["id"]);
}
// Create folder
echo "Create folders\r\n<br>";
$folder_id = drive_create_folder("root", $RoRdb_dat["dirname"]);
echo "Share folder with $admin_email with rights '$admin_rights'\r\n<br>";
drive_share($folder_id, $admin_email, $admin_rights);
$RoRdb_dat["folderId"] = $folder_id;
$imgdir_id = drive_create_folder($folder_id, $imgdir_name);
$RoRdb_dat["imgdir"] = $imgdir_id;

// Save settings in RoRdb.dat
file_put_contents(__DIR__."/../../RoRdb.dat", json_encode($RoRdb_dat));

?>
