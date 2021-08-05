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

    // Show search field
    $action_url = http_build_query($_GET);
    $ret .= "<form action='?".$action_url."' method='post'>";
    $ret .= "<input type='text' name='rordb_searchtag'";
    if(isset($_POST['rordb_searchtag'])) $ret .= " value='".$_POST['rordb_searchtag']."'";
    $ret .= ">";
    $ret .= "<input type='submit' class='button button-primary' value='Search'>";
    $ret .= "</form>";

    // Create item button
    $ret .= "<hr>";
    $pageid = $_GET['page_id'];
    $ret .= "<a href='?page_id=".$pageid."&rordb_action=createitem'>Create new item</a>";

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

    if(!isset($_POST['rordb_searchtag'])) return $ret;

    // Perform search
    $db = new RordbDatabase();
    $searchresults = $db->items_search($_POST['rordb_searchtag'], [], []);

    // $ret .= "<pre>".var_export($searchresults, true)."</pre>";

    foreach($searchresults as $i){
        $ret .= "<div class='wp-block-columns' style='background-color:#d6c2d6'>";
            $ret .= "<div class='wp-block-column' style='flex-basis:50%;'>";
                $ret .= "<img height='100%' src='https://drive.google.com/thumbnail?id=".$i[10]."&sz=w200-h200'>";
            $ret .= "</div>";
            $ret .= "<div class='wp-block-column' style='flex-basis:50%;'>";
                        $ret .= "Name: " . $i[1] . "<br>";
                        $ret .= "Category: " . $i[2] . "<br>";
                        $ret .= "Location: " . $i[3] . "<br>";
                        $ret .= "Color: " . $i[4] . "<br>";
                        $ret .= "Size: " . $i[5] . "<br>";
                        $ret .= "Amount: " . $i[6] . "<br>";
                        $ret .= "Comments: " . $i[7] . "<br>";
                        $ret .= "Claimed: " . $i[11] . "<br>";
                        $ret .= "Hidden: " . $i[12] . "<br>";
            $ret .= "</div>";
        $ret .= "</div>";
    }

    return $ret;
}