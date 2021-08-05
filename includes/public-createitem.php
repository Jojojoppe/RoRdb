<?php

function rordb_public_createitem_sidebar(){
    $ret = "";

    // Display WIP notice
    $ret .= "<hr>WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_createitem_main(){
    $ret = "";

    // Check if right permissions
	if(!rordb_can_user_edit_items()){
        $ret .= "<i>ERROR: You dont have permission to edit RoRdb items!</i>";
        return $ret;
    }
    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        $ret .= "<i>ERROR: No valid database is loaded. Contact the dotCom!</i>";
        return $ret;
    }

    // Create database object to interact with
    $db = new RordbDatabase();
	wp_enqueue_script('rordb_public_items_js', plugin_dir_url(__FILE__)."../resources/js/settings_fields.js", array(), null, true);

    if(isset($_POST["rordb_create_img"])){
        // Add item to database
        if($_POST["rordb_create_img"]!=""){

            if(!isset($_POST['rordb_create_hidden'])) $_POST['rordb_create_hidden'] = 0;
            elseif($_POST['rordb_create_hidden']=="off") $_POST['rordb_create_hidden'] = 0;
            else $_POST['rordb_create_hidden'] = 1;

            // Upload image to drive
            $foldername = get_option('rordb_drive_id');
            $fid = $db->api->drive_upload_file($foldername, "img".uniqid(), $_POST['rordb_create_img']);
            $db->api->drive_share($fid, "", "reader");
            // Add item to database
            $db->put_item($_POST['rordb_create_name'], $_POST['rordb_create_category'], $_POST['rordb_create_location'],
                $_POST['rordb_create_color'], $_POST['rordb_create_size'], $_POST['rordb_create_amount'],
                $_POST['rordb_create_comments'],
                $fid,
                $_POST['rordb_create_claimed'], $_POST['rordb_create_hidden']
            );
        }else{
            $ret .= "<i>ERROR: No image for item selected</i><br>";
        }
    }

    $ret .= '
        <b>Create item</b><br>
        <form acttion="" method="post">
            <p>
                <label>Item name</label>
                <input type="text" name="rordb_create_name" value="">
            </p>
            <p>
                <label>Category</label>
                <select name="rordb_create_category" value="">
    ';
    $db->categories_execute_recursive(function($c, $lvl, &$p){
        $name = $c["name"];
        $id = $c["id"];
        $indent = str_repeat("----", $lvl);
        $p .= "<option value='".$name."'>".$indent.$name."</option>";
    }, $ret);
    $ret .= '
                </select>
            </p>
            <p>
                <label>Location</label>
                <select name="rordb_create_location" value="">
    ';
    $db->locations_execute_recursive(function($c, $lvl, &$p){
        $name = $c["name"];
        $id = $c["id"];
        $indent = str_repeat("----", $lvl);
        $p .= "<option value='".$name."'>".$indent.$name."</option>";
    }, $ret);
    $ret .= '
                </select>
            </p>

            <p>
                <label>Color</label>
                <input type="text" name="rordb_create_color" value="">
            </p>

            <p>
                <label>Size</label>
                <input type="text" name="rordb_create_size" value="">
            </p>

            <p>
                <label>Amount</label>
                <input type="text" name="rordb_create_amount" value="">
            </p>

            <p>
                <label>Comments</label>
                <textarea name="rordb_create_comments" value="" rows="10"></textarea>
            </p>

            <p>
                <label>Claimed</label>
                <input type="text" name="rordb_create_claimed" value="">
            </p>

            <p>
                <label>Hidden</label>
                <input type="checkbox" name="rordb_create_hidden" value="">
            </p>

            <p>
                <label>Image</label>

                    <input type="hidden" name="rordb_create_img" id="rordb_create_img" value="">
                    <img id="rordb_imgtest" width="200"><br>
                    <input type="file" accept="image/*" id="rordb_file_imgtest" onchange=\'javscript:rordb_put_imgcontent_in_img("rordb_file_imgtest", "rordb_imgtest", "rordb_create_img")\'>
            <p>

        <p class="submit"><input type="submit" value="Create Item" class="button button-primary"></p>
    </form>
    ';

    return $ret;
}