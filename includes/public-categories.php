<?php

function rordb_public_categories_sidebar(){
    $ret = "";

    // MENU
    $ret .= rordb_public_render_menu('', '') . "<hr>";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    // CHeck for right permissions
    if(!rordb_can_user_view_categories()){
        rordb_error("You don't have permission to view categories", "error");
        return rordb_show_errors();
    }

    $ret .= rordb_public_hier_edit_sidebar("Categories",
        rordb_can_user_create_categories(),
        rordb_can_user_edit_categories(),
        "Categories");

    return $ret;
}

function rordb_public_categories_main(){
    $ret = "";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    $ret .= rordb_public_hier_main("Categories",
        rordb_can_user_edit_categories(),
        rordb_can_user_create_categories(),
        "Category", "Categories");

    return $ret;
}