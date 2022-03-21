<?php

function rordb_public_home_sidebar(){
    $ret = "";

    // MENU
    $ret .= rordb_public_render_menu('', '') . "<hr>";

    // List capabilities of current logged in user
    $ret .= "You're currently logged in and have the following permissions:<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_edit_items()) $ret .= " checked";
    $ret .= "> Edit RoRdb items<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_view_items()) $ret .= " checked";
    $ret .= "> View RoRdb items<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_create_items()) $ret .= " checked";
    $ret .= "> Create RoRdb items<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_edit_items()) $ret .= " checked";
    $ret .= "> Edit RoRdb items<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_view_categories()) $ret .= " checked";
    $ret .= "> View RoRdb categories<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_create_categories()) $ret .= " checked";
    $ret .= "> Create RoRdb categories<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_edit_categories()) $ret .= " checked";
    $ret .= "> Edit RoRdb categories<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_view_locations()) $ret .= " checked";
    $ret .= "> View RoRdb locations<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_create_locations()) $ret .= " checked";
    $ret .= "> Create RoRdb locations<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_edit_locations()) $ret .= " checked";
    $ret .= "> Edit RoRdb locations<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_view_claimgroups()) $ret .= " checked";
    $ret .= "> View RoRdb claim groups<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_create_claimgroups()) $ret .= " checked";
    $ret .= "> Create RoRdb claim groups<br>";

    $ret .= "<input type='checkbox' disabled";
    if(rordb_can_user_edit_claimgroups()) $ret .= " checked";
    $ret .= "> Edit RoRdb claim groups<br>";

    // Display WIP notice
    $ret .= "<hr>WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_home_main(){
    $ret = "";

    $ret .= "<h2>Home</h2>";
    $ret .= "RoRdb (v".RORDB_VERSION.") needs a Google service account to work. Create a cloud app on <a href='http://console.cloud.google.com'>console.cloud.google.com</a> and 
		create a service account in it. Create a key for that service account and download it as JSON file and upload it to the dedicated box below. On one service account multiple instances of RoRdb can be ran. Each instance MUST have another UID since a folder
		is created in the root of the drive of the service account. This UID keeps the folders speratated. You must provide an administrator email which
		is used to share the created folder with in case you need access to the database directly. Note: Not specifying any email will cause the folder to
		be visible for anyone with the link (currently a bug which is worked upon).
		There are several actions you can do from this settings page, namely 'Load database', '(Re)create database' and 'Delete database'. The first one will
		search in the service account drive for a valid installation of RoRdb with the set UID. If it is found, the RoRdb wordpress plugin will automatically
		load all the settings. The second one will create a new installation of RoRdb (and deletes the previous one if it exists). The last will delete the
		installation of RoRdb";

    $ret .= "<p><a href='https://github.com/Jojojoppe/RoRdb/issues'>Report an issue</a></p>";

    // Print licence
    $ret .= "<hr><h3>Licence</h3><pre>";
    $ret .= file_get_contents(plugin_dir_path(__FILE__)."/../LICENCE");
    $ret .= "</pre>";

    return $ret;
}