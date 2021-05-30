<?php

function rordb_create_items_options_menu(){
	add_submenu_page(
        "rordb",                                // parent slug
        "Create RoRdb item",                    // page title
        "Add item",                             // menu title
        "read",                                 // capability
        "rordb_cretate_items",                  // menu slug
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
        // Add item to database
        // Upload image to drive
        $foldername = get_option('rordb_drive_id');
        $fid = $db->api->drive_upload_file($foldername, "img".uniqid(), $_POST['rordb_create_img']);
        // Add item to database
        $db->put_item($_POST['rordb_create_name'], $_POST['rordb_create_category'], $_POST['rordb_create_location'],
            $_POST['rordb_create_color'], $_POST['rordb_create_size'], $_POST['rordb_create_amount'],
            $_POST['rordb_create_comments'],
            $fid
        );
    }

	// Show error/update messages
	settings_errors('rordb_messages');   

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