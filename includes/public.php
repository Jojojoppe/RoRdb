<?php

function rordb_public_render_menu(){
    $ret = "";

    $pageid = $_GET['page_id'];

    // Menu bar
    $ret .= "<table width='100%'><tr>";
    $ret .= "<td><a href='?page_id=".$pageid."&rordb_action=home'>Home</a></td>";
    $ret .= "<td><a href='?page_id=".$pageid."&rordb_action=items'>Items</a></td>";
    $ret .= "<td><a href='?page_id=".$pageid."&rordb_action=categories'>Categories</a></td>";
    $ret .= "<td><a href='?page_id=".$pageid."&rordb_action=locations'>Locations</a></td>";
    $ret .= "</tr></table>";

    return $ret;
}

function rordb_public_render_sidebar(){
    $ret = "";

    // Switch by action
    $action = "home";
    if(isset($_GET["rordb_action"])){
        $action = $_GET["rordb_action"];
    }
    if($action=="home"){
        $ret .= rordb_public_home_sidebar();

    }elseif($action=="categories"){
        $ret .= rordb_public_categories_sidebar();

    }elseif($action=="locations"){
        $ret .= rordb_public_locations_sidebar();

    }elseif($action=="items"){
        $ret .= rordb_public_items_sidebar();

    }elseif($action=="createitem"){
        $ret .= rordb_public_createitem_sidebar();

    }else{
        // Unknown page
        $ret .= "Unkown action!";
    }

    return $ret;
}

function rordb_public_render_main(){
    $ret = "";

    // Switch by action
    $action = "home";
    if(isset($_GET["rordb_action"])){
        $action = $_GET["rordb_action"];
    }
    if($action=="home"){
        $ret .= rordb_public_home_main();

    }elseif($action=="categories"){
        $ret .= rordb_public_categories_main();

    }elseif($action=="locations"){
        $ret .= rordb_public_locations_main();

    }elseif($action=="items"){
        $ret .= rordb_public_items_main();

    }elseif($action=="createitem"){
        $ret .= rordb_public_createitem_main();

    }else{
        // Unknown page
        $ret .= "Unkown action!";
    }

    return $ret;
}