<?php

function rordb_public_items_sidebar(){
    $ret = "";

    // Check if right permissions
    if(!rordb_can_user_view()){
        $ret .= "<i>ERROR: You dont have permission to view RoRdb items!</i>";
        return $ret;
    }
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        $ret .= "<i>ERROR: No valid database is loaded. Contact the dotCom!</i>";
        return $ret;
    }

    // Display WIP notice
    $ret .= "<hr>WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_items_main(){
    $ret = "";

    // Check if right permissions
    if(!rordb_can_user_view()){
        $ret .= "<i>ERROR: You dont have permission to view RoRdb items!</i>";
        return $ret;
    }
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        $ret .= "<i>ERROR: No valid database is loaded. Contact the dotCom!</i>";
        return $ret;
    }

    $ret .= "<h2>Items</h2>";

    return $ret;
}