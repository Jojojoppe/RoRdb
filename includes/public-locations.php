<?php

function rordb_public_locations_sidebar(){
    $ret = "";

    // MENU
    $ret .= rordb_public_render_menu('', '') . "<hr>";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    // CHeck for right permissions
    if(!rordb_can_user_view_locations()){
        rordb_error("You don't have permission to view locations", "error");
        return rordb_show_errors();
    }

    $ret .= rordb_public_hier_edit_sidebar("Locations",
        rordb_can_user_create_locations(),
        rordb_can_user_edit_locations(),
        "Locations");

    return $ret;
}

function rordb_public_locations_main(){
    $ret = "";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    $ret .= rordb_public_hier_main("Locations",
        rordb_can_user_edit_locations(),
        rordb_can_user_create_locations(),
        "Location", "Locations");

    return $ret;
}