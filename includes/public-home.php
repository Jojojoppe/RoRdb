<?php

// use RoRdb\GuzzleHttp\ClientInterface;

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

    // $guzzleVersion = ClientInterface::MAJOR_VERSION;
    // $ret .= "Guzzle version: $guzzleVersion<br>";

    return $ret;
}