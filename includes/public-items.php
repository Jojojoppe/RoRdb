<?php

function rordb_public_items_sidebar_createitems(){
    $ret = "";

    // Do actions
	if(!rordb_can_user_edit_items()){
		return $ret;
	}
    // Create database object to interact with
    $db = new RordbDatabase();

	wp_enqueue_script('rordb_public_items_js', plugin_dir_url(__FILE__)."../resources/js/settings_fields.js", array(), null, true);

    if(isset($_POST["rordb_create_img"])){

        if(isset($_POST["rordb_edit_item"])){

            $i = $db->db_query("select * where A=".$_GET['rordb_edit_item'], "Items")[0];
            $fid = $i[10];

            if($_POST["rordb_create_img"]!=""){
                // Upload image to drive
                $foldername = get_option('rordb_drive_id');
                $fid = $db->api->drive_upload_file($foldername, "img".uniqid(), $_POST['rordb_create_img']);
                $db->api->drive_share($fid, "", "reader");
            }

            if(!isset($_POST['rordb_create_hidden'])) $_POST['rordb_create_hidden'] = 0;
            elseif($_POST['rordb_create_hidden']=="off") $_POST['rordb_create_hidden'] = 0;
            else $_POST['rordb_create_hidden'] = 1;

            // Edit the item
            $db->update_item($_GET['rordb_edit_item'], $_POST['rordb_create_name'], $_POST['rordb_create_category'], $_POST['rordb_create_location'],
                $_POST['rordb_create_color'], $_POST['rordb_create_size'], $_POST['rordb_create_amount'],
                $_POST['rordb_create_comments'],
                $fid,
                $_POST['rordb_create_claimed'], $_POST['rordb_create_hidden']
            );

        }else{
            // Add item to database
            if($_POST["rordb_create_img"]!=""){
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
    }

    // EDIT ITEM FORM
    if(isset($_GET["rordb_edit_item"])){
        $items = $db->db_query("select * where A=".$_GET['rordb_edit_item'], "Items")[0];
        $ret .= '    
            <b>Edit RoRdb item</b>
            <form action="" method="post">
                <input type="hidden" name="rordb_edit_item" value=1>
                <table class="form-table" role="presentation"><tbody>
                    <tr>
                        <th scope="row">Item name</th>
                        <td><input type="text" name="rordb_create_name" value="<?php echo $items[1]?>"><td>
                    </tr>
                    <tr>
                        <th scope="row">Category</th>
                        <td>
                            <select name="rordb_create_category" value="">
        ';
        $db->categories_execute_recursive(function($c, $lvl, &$items, &$ret){
            $name = $c["name"];
            $id = $c["id"];
            $indent = str_repeat("----", $lvl);
            $ret .= "<option value='".$name."' ";
            if($name==$items[2]) $ret .= 'selected';
            $ret .= ">".$indent.$name."</option>";
        }, $items, $ret);
        $ret .= '
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Location</th>
                        <td>
                            <select name="rordb_create_location" value="">
        ';
        $db->locations_execute_recursive(function($c, $lvl, &$items, &$ret){
            $name = $c["name"];
            $id = $c["id"];
            $indent = str_repeat("----", $lvl);
            $ret .= "<option value='".$name."' ";
            if($name==$items[2]) $ret .= 'selected';
            $ret .= ">".$indent.$name."</option>";
        }, $items, $ret);
        $ret .= '
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Color</th>
                        <td><input type="text" name="rordb_create_color" value="'.$items[4].'"><td>
                    </tr>

                    <tr>
                        <th scope="row">Size</th>
                        <td><input type="text" name="rordb_create_size" value="'.$items[5].'"><td>
                    </tr>

                    <tr>
                        <th scope="row">Amount</th>
                        <td><input type="text" name="rordb_create_amount" value="'.$items[6].'"><td>
                    </tr>

                    <tr>
                        <th scope="row">Comments</th>
                        <td><textarea name="rordb_create_comments" value="" rows="10">'.$items[7].'</textarea><td>
                    </tr>

                    <tr>
                        <th scope="row">Claimed</th>
                        <td><input type="text" name="rordb_create_claimed" value="'.$items[11].'"></td>
                    </tr>

                    <tr>
                        <th scopw="row">Hidden</th>
                        <td><input type="checkbox" name="rordb_create_hidden" value="" 
        ';
        if($items[12]=='1') $ret .= "checked"; 
        $ret .= '></td>
                    </tr>

                    <tr>
                        <th scope="row">Image</th>
                        <td>
                            <input type="hidden" name="rordb_create_img" id="rordb_create_img" value="">
                            <img id="rordb_imgtest" width=200 src="https://drive.google.com/thumbnail?id=<?php echo $items[10]; ?>&sz=w200-h200"><br>
                            <input type="file" accept="image/*" id="rordb_file_imgtest" onchange=\'javscript:rordb_put_imgcontent_in_img("rordb_file_imgtest", "rordb_imgtest", "rordb_create_img")\'>
                        </td>
                    </tr>

                </tbody></table>
                <p class="submit"><input type="submit" value="Edit Item" class="button button-primary"></p>
            </form>
        ';

    // CREATE ITEM FORM
    }else{
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
    }

    return $ret;
}

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

    // Create item field
    $ret .= "<hr>";
    $ret .= rordb_public_items_sidebar_createitems();

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