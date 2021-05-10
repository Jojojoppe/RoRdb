<?php

require_once __DIR__."/../../cfg/appconfig.php";
require_once __DIR__."/../utils.php";
require_once __DIR__."/../apiwrapper/sheets.php";
require_once __DIR__."/../apiwrapper/drive.php";

// Check if RoRdb.dat file exists and fill information, else generate it
$RoRdb_dat = array();
if(!file_exists(__DIR__."/../../RoRdb.dat")){
	require __DIR__."/create_database.php";
}else{
	echo "Already installed on the system. To do a forced reinstall delete RoRdb.dat";
}
