<?php

function rordb_public_render_menu(){
    $ret = "";

    // Menu bar
    $ret .= "<table width='100%'><tr>";
    $ret .= "<td><a href='?".http_build_query(array_merge($_GET, ["rordb_action"=>"home"]))."'>Home</a></td>";
    $ret .= "<td><a href='?".http_build_query(array_merge($_GET, ["rordb_action"=>"categories"]))."'>Categories</a></td>";
    $ret .= "<td><a href='?".http_build_query(array_merge($_GET, ["rordb_action"=>"locations"]))."'>Locations</a></td>";
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
        // Locations page
        $ret .= "Locations page for RoRdb";

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
        // Locations page
        $ret .= "Locations page for RoRdb";

    }else{
        // Unknown page
        $ret .= "Unkown action!";
    }

    return $ret;
}