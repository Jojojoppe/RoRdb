<?php

function rordb_can_user_view(){
    return true;
}

function rordb_can_user_edit_settings(){
    return current_user_can('manage_options');
}

function rordb_can_user_edit_categories(){
    return true;
}

function rordb_can_user_edit_locations(){
    return true;
}

function rordb_can_user_edit_items(){
    return true;
}