<?php

function rordb_public_items_sidebar(){
    $ret = "";

    // MENU
    $ret .= rordb_public_render_menu('', '') . "<hr>";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    // CHeck for right permissions
    if(!rordb_can_user_view_items()){
        rordb_error("You don't have permission to view items", "error");
        return rordb_show_errors();
    }

    // Show search field
    $action_url = http_build_query($_GET);
    $ret .= "<form action='?".$action_url."' method='post'>";
    $ret .= "<input type='text' name='rordb_searchtag'";
    if(isset($_POST['rordb_searchtag'])) $ret .= " value='".$_POST['rordb_searchtag']."'";
    $ret .= ">";
    $ret .= "<input type='submit' class='button button-primary' value='Search'>";
    $ret .= "</form>";

    // Display WIP notice
    $ret .= "<hr>WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_items_main(){
    $ret = "";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    // CHeck for right permissions
    if(!rordb_can_user_view_items()){
        rordb_error("You don't have permission to view items", "error");
        return rordb_show_errors();
    }


    $ret .= "<h2>Items</h2>";

    if(!isset($_POST['rordb_searchtag'])){
        $ret .= "No search word is entered. Search on empty string to show all items";
        return $ret;
    }

    // Perform search
    $db = new RoRdb\RordbDatabase();

    // Perform search
    $searchresults = $db->items_search($_POST['rordb_searchtag'], [], []);

    // Show errors if needed
    $ret .= rordb_show_errors();

    foreach($searchresults as $i){
        $ret .= "<div class='wp-block-columns' style='background-color:#d6c2d6'>";
            $ret .= "<div class='wp-block-column' style='flex-basis:50%;'>";
                $ret .= "<img height='100%' src='https://drive.google.com/thumbnail?id=".$i[6]."&sz=w200-h200'>";
            $ret .= "</div>";
            $ret .= "<div class='wp-block-column' style='flex-basis:50%;'>";
                        $pageid = ''; //$_GET['page_id'];
                        $ret .= "<a href='?page_id=".$pageid."&rordb_action=edititem&rordb_edit_item=".$i[0]."'>Edit item</a><br>";
                        // $ret .= "<a href=''>Edit item</a><br>";
                        $ret .= "Name: " . $i[1] . "<br>";
                        $ret .= "Category: " . $i[9] . "<br>";
                        $ret .= "Location: " . $i[11] . "<br>";
                        $ret .= "Color: " . $i[2] . "<br>";
                        $ret .= "Size: " . $i[3] . "<br>";
                        $ret .= "Amount: " . $i[4] . "<br>";
                        $ret .= "Comments: " . $i[5] . "<br>";
                        $ret .= "Claimed: " . $i[13] . "<br>";
                        $ret .= "Hidden: " . $i[8] . "<br>";
            $ret .= "</div>";
        $ret .= "</div>";
    }

    return $ret;
}