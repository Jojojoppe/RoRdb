<?php

function rordb_public_locations_sidebar(){
    $ret = "";

    // Check if right permissions
    if(!rordb_can_user_edit_locations()){
        $ret .= "<i>ERROR: You dont have permission to edit locations!</i>";
        return $ret;
    }
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        $ret .= "<i>ERROR: No valid database is loaded. Contact the dotCom!</i>";
        return $ret;
    }

    // Show list of locations
    $ret .= "<b>List of locations</b><br>";

    $db = new RordbDatabase();
    rordb_locations_do_action($_POST, $db);

    $db->locations_execute_recursive(function($cat, $level, &$ret){
        $indent = str_repeat("---", $level);
        $ret .= "+ ".$indent.$cat["name"];
        if(rordb_locations_can_edit_location($cat["id"])){
            $ret .= " <a href='?";
            $ret .= rordb_locations_get_edit_url($_GET, $cat["id"]);
            $ret .= "'>edit</a>";
        }
        $ret .= "<br>";
    }, $ret);

    // Display WIP notice
    $ret .= "<hr>WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_locations_main(){
    $ret = "";

    // Check if right permissions
    if(!rordb_can_user_edit_categories()){
        $ret .= "<i>ERROR: You dont have permission to edit locations!</i>";
        return $ret;
    }
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        $ret .= "<i>ERROR: No valid database is loaded. Contact the dotCom!</i>";
        return $ret;
    }

    $ret .= "<h2>Locations</h2>";

    $db = new RordbDatabase();
    if(rordb_locations_if_editing($_GET)){
        $category = $db->get_location($_GET["rordb_edit"]);
        $currentcatid = $category["id"];
        $currentcatname = $category["name"];
        unset($_GET["rordb_edit"]);
        $action_url = http_build_query($_GET);
        $ret .= '
            <h5>Edit a location</h5>
            <form action="?'.$action_url.'" method="post">
                <input type="hidden" name="rordb_edit_id" value="'.$currentcatid.'">
                <p>
                    <label>Location name</label>
                    <input type="text" name="rordb_edit_name" value="'.$currentcatname.'">
                </p>
                <p>
                    <label>Location parent</label>
                    <select name="rordb_edit_parent">
        ';

        $db->locations_execute_recursive(function($c, $lvl, $category, &$ret){
            $name = $c["name"];
            $id = $c["id"];
            // Check if circular dependency will occur if this is set as parent
            if(in_array($category['id'], $c['parents'])) return;
            $indent = str_repeat("----", $lvl);
            $ret .= "<option value='".$name."' ";
            if($id==$category["parentid"]) $ret .= "selected";
            $ret .= ">".$indent.$name;
            $ret .= "</option>";
        }, $category, $ret);

        $ret .= '
                    </select>
                </p>
                <p>
                    <label>Delete location</label>
                    <input type="checkbox" name="rordb_edit_delete">
                </p>
                <br
                <p class="submit"><input type="submit" value="Update location" class="button button-primary"></p>
            </form>
        ';
    }else{
        // Create form
        $ret .= '
            <h5>Create a Location</h5>
            <form action="" method="post">
                <p>
                    <label>Location name</label>
                    <input type="text" name="rordb_create_name" value="">
                </p>
                <p>
                    <label>Location parent</label>
                    <select name="rordb_create_parent" value="">
        ';

        $db->locations_execute_recursive(function($c, $lvl, &$ret){
            $name = $c["name"];
            $id = $c["id"];
            $indent = str_repeat("---", $lvl);
            $ret .= "<option value='".$name."'>".$indent.$name."</option>";
        }, $ret);

        $ret .= '
                    </select>
                </p>
                <br>
                <p class="submit"><input type="submit" value="Create location" class="button button-primary"></p>
            </form>
        ';
    }

    return $ret;
}