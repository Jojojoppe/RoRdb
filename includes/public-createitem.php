<?php

function rordb_public_createitem_sidebar(){
    $ret = "";

    // MENU
    $ret .= rordb_public_render_menu('', '') . "<hr>";

    // Display WIP notice
    $ret .= "WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_createitem_main(){
    $ret = "";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    // CHeck for right permissions
    if(!rordb_can_user_create_items()){
        rordb_error("You don't have permission to create items", "error");
        return rordb_show_errors();
    }

    // Load image compression and conversion script
	wp_enqueue_script('rordb_public_items_js', plugin_dir_url(__FILE__)."../resources/js/settings_fields.js", array(), null, true);

    // Create database object to interact with
    $db = new RordbDatabase();

    // Do actions if needed
    // Check if item must be added to database
    if(isset($_POST["rordb_create_img"])){
        // Add item to database
        if($_POST["rordb_create_img"]!=""){
            // Valid item addition

            // Convert hidden field to right format
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

            rordb_error("Item successfully added", "message");
        }else{
            // No image added
            rordb_error("No image added", "error");
        }
    }

    // Show errors if needed
    $ret .= rordb_show_errors();

    // Render create item form

    function add_field($field, $label){
        $ret = "<p><label>".$label."<br><span class='wpcf7-form-control-wrap'>".$field."</p>";
        return $ret;
    }

    $ret .= '<h2>Create item</h2><div role="form" class="wpcf7"><form acttion="" method="post" class="wpcf7">';

    $ret .= add_field('<input type="text" name="rordb_create_name" class="wpcf7-form-control wpcf7-text">', "Category name");

    $categories = '';
    $db->categories_execute_recursive(function($c, $lvl, &$p){
        $name = $c["name"];
        $id = $c["id"];
        $indent = str_repeat("----", $lvl);
        $p .= "<option value='".$name."'>".$indent.$name."</option>";
    }, $categories);
    $ret .= add_field('<select name="rordb_create_category">'.$categories.'</select>', 'Category');

    $locations = '';
    $db->locations_execute_recursive(function($c, $lvl, &$p){
        $name = $c["name"];
        $id = $c["id"];
        $indent = str_repeat("----", $lvl);
        $p .= "<option value='".$name."'>".$indent.$name."</option>";
    }, $locations);
    $ret .= add_field('<select name="rordb_create_location">'.$locations.'</select>', 'Location');

    $ret .= add_field('<input type="text" name="rordb_create_color">', 'Color');

    $ret .= add_field('<input type="text" name="rordb_create_size">', 'Size');

    $ret .= add_field('<input type="text" name="rordb_create_amount">', 'Amount');

    $ret .= add_field('<textarea name="rordb_create_comments" rows="10"></textarea>', 'Comments');

    $ret .= add_field('<input type="text" name="rordb_create_claimed">', 'Claimed');

    $ret .= add_field('<input type="checkbox" name="rordb_create_hidden">', "Hidden");

    $ret .= add_field('
        <input type="hidden" name="rordb_create_img" id="rordb_create_img">
        <img id="rordb_imgtest" width="200"><br>
        <input type="file" accept="image/*" id="rordb_file_imgtest" onchange=\'javscript:rordb_put_imgcontent_in_img("rordb_file_imgtest", "rordb_imgtest", "rordb_create_img")\'>
    ', "Image");

    $ret .= '<p class="submit"><input type="submit" value="Create Item" class="button button-primary"></p></form></div>';

    return $ret;
}