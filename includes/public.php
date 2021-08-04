<?php

function rordb_public_render_menu(){
    $ret = "";

    // Menu bar
    $ret .= "<a href='?".http_build_query(array_merge($_GET, ["rordb_action"=>"home"]))."'>Home</a>  ";
    $ret .= "<a href='?".http_build_query(array_merge($_GET, ["rordb_action"=>"categories"]))."'>Categories</a>  ";
    $ret .= "<a href='?".http_build_query(array_merge($_GET, ["rordb_action"=>"locations"]))."'>Locations</a>  ";

    return $ret;
}

function rordb_public_render_sidebar(){
    $ret = "";

    $ret .= "sidebar here";

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
        // Home page
        $ret .= "Home page for RoRdb";

    }elseif($action=="categories"){
        // Categories page
        $ret .= "Categories page for RoRdb";

    }elseif($action=="locations"){
        // Locations page
        $ret .= "Locations page for RoRdb";

    }else{
        // Unknown page
        $ret .= "Unkown action!";
    }

    return $ret;
}