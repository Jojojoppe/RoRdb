<?php

function rordb_public_edititem_sidebar(){
    $ret = "";

    // MENU
    $ret .= rordb_public_render_menu('', '');

    // Display WIP notice
    $ret .= "<hr>WARNING: RoRdb is still WIP! Not everything will work as expected and not all planned functionality is implemented.";

    return $ret;
}

function rordb_public_edititem_main(){
    $ret = "";

    // Check for valid database
    if(!get_option("rordb_valid_database")){
        rordb_error("No valid database is loaded", "error");
        return rordb_show_errors();
    }

    // CHeck for right permissions
    if(!rordb_can_user_edit_items()){
        rordb_error("You don't have permission to edit items", "error");
        return rordb_show_errors();
    }

    // Load image compression and conversion script
	wp_enqueue_script('rordb_public_items_js', plugin_dir_url(__FILE__)."../resources/js/settings_fields.js", array(), null, true);

    // Create database object to interact with
    $db = new RordbDatabase();

    // Check if there is an item to edit
    if(!isset($_GET['rordb_edit_item'])){
        rordb_error("No item selected to edit");
        return rordb_show_errors();
    }

    // Do actions if needed
    // CHeck if item must be updated
    if(isset($_POST["rordb_edit_item"])){

        // COnvert hidden field to right format
        if(!isset($_POST['rordb_create_hidden'])) $_POST['rordb_create_hidden'] = 0;
        elseif($_POST['rordb_create_hidden']=="off") $_POST['rordb_create_hidden'] = 0;
        else $_POST['rordb_create_hidden'] = 1;

        $i = $db->db_query("select * where A=".$_GET['rordb_edit_item'], "Items")[0];
        $fid = $i[10];

        if($_POST["rordb_create_img"]!=""){
            // Upload image to drive
            $foldername = get_option('rordb_drive_id');
            $fid = $db->api->drive_upload_file($foldername, "img".uniqid(), $_POST['rordb_create_img']);
            $db->api->drive_share($fid, "", "reader");
        }

        // Edit the item
        $db->update_item($_GET['rordb_edit_item'], $_POST['rordb_create_name'], $_POST['rordb_create_category'], $_POST['rordb_create_location'],
            $_POST['rordb_create_color'], $_POST['rordb_create_size'], $_POST['rordb_create_amount'],
            $_POST['rordb_create_comments'],
            $fid,
            $_POST['rordb_create_claimed'], $_POST['rordb_create_hidden']
        );

        rordb_error("Item successfully updated", "message");
    }
        
    // Show errors if needed
    $ret .= rordb_show_errors();

    // Get item information
    $items = $db->db_query("select * where A=".$_GET['rordb_edit_item'], "Items")[0];

    // Render edit item form

    function add_field($field, $label){
        $ret = "<p><label>".$label."<br><span class='wpcf7-form-control-wrap'>".$field."</p>";
        return $ret;
    }

    $ret .= '<h2>Edit item</h2><div role="form" class="wpcf7"><form acttion="" method="post" class="wpcf7">
        <input type="hidden" name="rordb_edit_item" value=1>';

    // Start of creation form
    // ----------------------

    // Name
    $ret .= add_field('<input type="text" name="rordb_create_name" class="wpcf7-form-control wpcf7-text" value="'.$items[1].'">', "Item name");

    // Category
    $categories = '';
    $db->hier_execute_recursive("Categories", function($c, $lvl, &$items, &$ret){
        $name = $c["name"];
        $id = $c["id"];
        $indent = str_repeat("----", $lvl);
        $ret .= "<option value='".$name."' ";
        if($name==$items[9]) $ret .= 'selected';
        $ret .= ">".$indent.$name."</option>";
    }, $items, $categories);
    $ret .= add_field('<select name="rordb_create_category">'.$categories.'</select>', 'Category');

    // Location
    $locations = '';
    $db->hier_execute_recursive("Locations", function($c, $lvl, &$items, &$ret){
        $name = $c["name"];
        $id = $c["id"];
        $indent = str_repeat("----", $lvl);
        $ret .= "<option value='".$name."' ";
        if($name==$items[11]) $ret .= 'selected';
        $ret .= ">".$indent.$name."</option>";
    }, $items, $locations);
    $ret .= add_field('<select name="rordb_create_location">'.$locations.'</select>', 'Location');

    // Color
    $ret .= add_field('<input type="text" name="rordb_create_color" value="'.$items[2].'">', 'Color');

    // Size
    $ret .= add_field('<input type="text" name="rordb_create_size" value="'.$items[3].'">', 'Size');

    // Amount
    $ret .= add_field('<input type="text" name="rordb_create_amount" value="'.$items[4].'">', 'Amount');

    // Comments
    $ret .= add_field('<textarea name="rordb_create_comments" rows="10">'.$items[5].'</textarea>', 'Comments');

    // Claimed
    $claimgroups = '';
    $db->hier_execute_recursive("Claimgroups",function($c, $lvl, &$items, &$ret){
        $name = $c["name"];
        $id = $c["id"];
        $indent = str_repeat("----", $lvl);
        $ret .= "<option value='".$name."' ";
        if($name==$items[13]) $ret .= 'selected';
        $ret .= ">".$indent.$name."</option>";
    }, $items, $claimgroups);
    $ret .= add_field('<select name="rordb_create_claimed">'.$claimgroups.'</select>', 'Claimed');

    // Hidden
    $hidden = '';
    if($items[8]=='1') $hidden = 'checked';
    $ret .= add_field('<input type="checkbox" name="rordb_create_hidden" '.$hidden.'>', "Hidden");

    // Image
    $ret .= add_field('
        <input type="hidden" name="rordb_create_img" id="rordb_create_img">
                    <img id="rordb_imgtest" width=200 src="https://drive.google.com/thumbnail?id='.$items[6].'&sz=w200-h200"><br>
        <input type="file" accept="image/*" id="rordb_file_imgtest" onchange=\'javscript:rordb_put_imgcontent_in_img("rordb_file_imgtest", "rordb_imgtest", "rordb_create_img")\'>
    ', "Image");

    $ret .= '<p class="submit"><input type="submit" value="Edit Item" class="button button-primary"></p></form></div>';

    return $ret;
}