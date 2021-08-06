<?php

function rordb_public_render_menu($button_class){
    $ret = "";

    $pageid = "";
    if(isset($_GET['page_id'])) $pageid = $_GET['page_id'];

    function add_button($href, $title, $button_class){
        $ret = "<a href='".$href."' >";
        $ret .= "<div class='".$button_class."'>";
        $ret .= $title;
        $ret .= "</div></a>";
        return $ret;
    }

    // Menu bar
    $ret .= add_button("?page_id=".$pageid."&rordb_action=home", "Home", $button_class);
    $ret .= add_button("?page_id=".$pageid."&rordb_action=items", "Items", $button_class);
    $ret .= add_button("?page_id=".$pageid."&rordb_action=categories", "Categories", $button_class);
    $ret .= add_button("?page_id=".$pageid."&rordb_action=locations", "Locations", $button_class);


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

    }elseif($action=="edititem"){
        $ret .= rordb_public_edititem_sidebar();

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

    }elseif($action=="edititem"){
        $ret .= rordb_public_edititem_main();

    }else{
        // Unknown page
        $ret .= "Unkown action!";
    }

    return $ret;
}