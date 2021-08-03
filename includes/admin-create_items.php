<?php

function rordb_create_items_options_menu(){
	add_submenu_page(
        "rordb",                                // parent slug
        "Create RoRdb item",                    // page title
        "Add item",                             // menu title
        "read",                                 // capability
        "rordb_create_items",                   // menu slug
        "rordb_create_items_options_page_html"  // callable
        // position
    );
}
add_action('admin_menu', 'rordb_create_items_options_menu');


function rordb_create_items_options_page_html(){
	if(!rordb_can_user_edit_items()){
        add_settings_error('rordb_messages', 'rordb_message',
            __('You do not have permission to view this page', 'rordb'), 'error');
        settings_errors('rordb_messages');
		return;
	}
    // Create database object to interact with
    $db = new RordbDatabase();

    if(isset($_POST["rordb_create_img"])){

        if(isset($_POST["rordb_edit_item"])){

            $i = $db->db_query("select * where A=".$_GET['rordb_edit_item'], "Items")[0];
            $fid = $i[10];

            if($_POST["rordb_create_img"]!=""){
                // Upload image to drive
                $foldername = get_option('rordb_drive_id');
                $fid = $db->api->drive_upload_file($foldername, "img".uniqid(), $_POST['rordb_create_img']);
                $db->api->drive_share($fid, "", "reader");

                add_settings_error('rordb_messages', 'rordb_message', __('Item image updated', 'rordb'), 'updated');
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

            add_settings_error('rordb_messages', 'rordb_message', __('Item edited', 'rordb'), 'updated');
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
                add_settings_error('rordb_messages', 'rordb_message', __('Item added', 'rordb'), 'updated');
            }else{
                add_settings_error('rordb_messages', 'rordb_message', __('No item image selected', 'rordb'), 'error');
            }
        }
    }

	// Show error/update messages
	settings_errors('rordb_messages');   

    // EDIT ITEM FORM
    if(isset($_GET["rordb_edit_item"])){

        $items = $db->db_query("select * where A=".$_GET['rordb_edit_item'], "Items")[0];

        ?>
        <div class="wrap">
            <h1>Edit RoRdb item</h1>
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
                            <?php 
                                $db->categories_execute_recursive(function($c, $lvl, $items){
                                    $name = $c["name"];
                                    $id = $c["id"];
                                    $indent = str_repeat("----", $lvl);
                                    echo "<option value='".$name."' ";
                                    if($name==$items[2]) echo 'selected';
                                    echo ">".$indent.$name."</option>";
                                }, $items);
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Location</th>
                        <td>
                            <select name="rordb_create_location" value="">
                            <?php 
                                $db->locations_execute_recursive(function($c, $lvl, $items){
                                    $name = $c["name"];
                                    $id = $c["id"];
                                    $indent = str_repeat("----", $lvl);
                                    echo "<option value='".$name."' ";
                                    if($name==$items[3]) echo 'selected';
                                    echo ">".$indent.$name."</option>";
                                }, $items);
                            ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Color</th>
                        <td><input type="text" name="rordb_create_color" value="<?php echo $items[4]; ?>"><td>
                    </tr>

                    <tr>
                        <th scope="row">Size</th>
                        <td><input type="text" name="rordb_create_size" value="<?php echo $items[5]; ?>"><td>
                    </tr>

                    <tr>
                        <th scope="row">Amount</th>
                        <td><input type="text" name="rordb_create_amount" value="<?php echo $items[6]; ?>"><td>
                    </tr>

                    <tr>
                        <th scope="row">Comments</th>
                        <td><textarea name="rordb_create_comments" value="" rows="10"><?php echo $items[7]; ?></textarea><td>
                    </tr>

                    <tr>
                        <th scope="row">Claimed</th>
                        <td><input type="text" name="rordb_create_claimed" value="<?php echo $items[11]; ?>"></td>
                    </tr>

                    <tr>
                        <th scopw="row">Hidden</th>
                        <td><input type="checkbox" name="rordb_create_hidden" value="" <?php if($items[12]=='1') echo "checked"; ?>></td>
                    </tr>

                    <tr>
                        <th scope="row">Image</th>
                        <td>
                            <input type='hidden' name='rordb_create_img' id='rordb_create_img' value=''>
                            <img id='rordb_imgtest' width=200 src="https://drive.google.com/thumbnail?id=<?php echo $items[10]; ?>&sz=w200-h200"><br>
                            <input type='file' accept="image/*" id='rordb_file_imgtest' onchange='javscript:rordb_put_imgcontent_in_img("rordb_file_imgtest", "rordb_imgtest", "rordb_create_img")'>
                        </td>
                    </tr>

                </tbody></table>
                <p class="submit"><input type="submit" value="Edit Item" class="button button-primary"></p>
            </form>
            <hr>
        </div>
        <?php

    // CREATE ITEM FORM
    }else{
    ?>
    <div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form acttion="" method="post">
            <table class="form-table" role="presentation"><tbody>
                <tr>
                    <th scope="row">Item name</th>
                    <td><input type="text" name="rordb_create_name" value=""><td>
                </tr>
                <tr>
                    <th scope="row">Category</th>
                    <td>
                        <select name="rordb_create_category" value="">
                        <?php 
                            $db->categories_execute_recursive(function($c, $lvl, $p){
                                $name = $c["name"];
                                $id = $c["id"];
                                $indent = str_repeat("----", $lvl);
                                echo "<option value='".$name."'>".$indent.$name."</option>";
                            });
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Location</th>
                    <td>
                        <select name="rordb_create_location" value="">
                        <?php 
                            $db->locations_execute_recursive(function($c, $lvl, $p){
                                $name = $c["name"];
                                $id = $c["id"];
                                $indent = str_repeat("----", $lvl);
                                echo "<option value='".$name."'>".$indent.$name."</option>";
                            });
                        ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Color</th>
                    <td><input type="text" name="rordb_create_color" value=""><td>
                </tr>

                <tr>
                    <th scope="row">Size</th>
                    <td><input type="text" name="rordb_create_size" value=""><td>
                </tr>

                <tr>
                    <th scope="row">Amount</th>
                    <td><input type="text" name="rordb_create_amount" value=""><td>
                </tr>

                <tr>
                    <th scope="row">Comments</th>
                    <td><textarea name="rordb_create_comments" value="" rows="10"></textarea><td>
                </tr>

                <tr>
                    <th scope="row">Claimed</th>
                    <td><input type="text" name="rordb_create_claimed" value=""></td>
                </tr>

                <tr>
                    <th scopw="row">Hidden</th>
                    <td><input type="checkbox" name="rordb_create_hidden" value=""></td>
                </tr>

                <tr>
                    <th scope="row">Image</th>
                    <td>
                        <input type='hidden' name='rordb_create_img' id='rordb_create_img' value=''>
                        <img id='rordb_imgtest' width=200><br>
                        <input type='file' accept="image/*" id='rordb_file_imgtest' onchange='javscript:rordb_put_imgcontent_in_img("rordb_file_imgtest", "rordb_imgtest", "rordb_create_img")'>
                    </td>
                </tr>

            </tbody></table>
            <p class="submit"><input type="submit" value="Create Item" class="button button-primary"></p>
        </form>
        <hr>

    </div>
    <?php
    }
}