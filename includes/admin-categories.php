<?php

function rordb_categories_options_menu(){
	add_submenu_page(
        "rordb",                                // parent slug
        "RoRdb categories",                     // page title
        "Categories",                           // menu title
        "read",                                 // capability
        "rordb_categories",                     // menu slug
        "rordb_categories_options_page_html"    // callable
        // position
    );
}
add_action('admin_menu', 'rordb_categories_options_menu');


function rordb_categories_options_page_html(){
	if(!rordb_can_user_edit_categories()){
        add_settings_error('rordb_messages', 'rordb_message',
            __('You do not have permission to view this page', 'rordb'), 'error');
        settings_errors('rordb_messages');
		return;
	}
    // Create database object to interact with
    $db = new RordbDatabase();

    // Check if valid database is loaded
    if(!get_option("rordb_valid_database")){
        add_settings_error('rordb_messages', 'rordb_message',
            __('No valid database loaded', 'rordb'), 'error');
        settings_errors('rordb_messages');   
        return;
    }

    if(isset($_POST["rordb_create_name"])){
        $db->put_category($_POST["rordb_create_name"], $_POST["rordb_create_parent"]);
        add_settings_error('rordb_messages', 'rordb_message',
            __('Added category \''.$_POST["rordb_create_name"].'\'', 'rordb'), 'updated');
    }

    if(isset($_POST["rordb_edit_name"])){
        // Check if must delete
        if(isset($_POST["rordb_edit_delete"]) and $_POST["rordb_edit_delete"]==true){
            $db->delete_category($_POST["rordb_edit_id"]);
            add_settings_error('rordb_messages', 'rordb_message',
                __('Deleted category \''.$_POST["rordb_edit_name"].'\'', 'rordb'), 'updated');
        }else{
            $db->update_category($_POST["rordb_edit_id"], $_POST["rordb_edit_name"], $_POST["rordb_edit_parent"]);
            add_settings_error('rordb_messages', 'rordb_message',
                __('Edited category \''.$_POST["rordb_edit_name"].'\'', 'rordb'), 'updated');
        }
    }

	// Show error/update messages
	settings_errors('rordb_messages');   

    ?>
    <div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>

        <?php
            if(isset($_GET["rordb_edit"])){
                $category = $db->get_category($_GET["rordb_edit"]);
                $currentcatid = $category["id"];
                $currentcatname = $category["name"];
                unset($_GET["rordb_edit"]);
                $action_url = http_build_query($_GET);
                ?>
                <hr>
                <h3>Edit a category</h3>
                <form action="?<?php echo $action_url; ?>" method="post">
                    <input type="hidden" name="rordb_edit_id" value="<?php echo $currentcatid; ?>">
                    <table class="form-table" role="presentation"><tbody>
                        <tr>
                            <th scope="row">Category name</th>
                            <td><input type="text" name="rordb_edit_name" value="<?php echo $currentcatname; ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Category parent</th>
                            <td>
                                <select name="rordb_edit_parent">
                                <?php 
                                    $db->categories_execute_recursive(function($c, $lvl, $category){
                                        $name = $c["name"];
                                        $id = $c["id"];
                                        // Check if circular dependency will occur if this is set as parent
                                        if(in_array($category['id'], $c['parents'])) return;
                                        $indent = str_repeat("----", $lvl);
                                        echo "<option value='".$name."' ";
                                        if($id==$category["parentid"]) echo "selected";
                                        echo ">".$indent.$name;
                                        echo "</option>";
                                    }, $category);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"> Delete category</th>
                            <td><input type="checkbox" name="rordb_edit_delete"></td>
                        </tr>
                    </tbody></table>
                    <p class="submit"><input type="submit" value="Update category" class="button button-primary"></p>
                </form>
                <?php
                return;
            }

                ?>
        <hr>
        <h3>Create a category</h3>
        <form action="" method="post">
            <table class="form-table" role="presentation"><tbody>
                <tr>
                    <th scope="row">Category name</th>
                    <td><input type="text" name="rordb_create_name" value=""></td>
                </tr>
                <tr>
                    <th scope="row">Category parent</th>
                    <td>
                        <select name="rordb_create_parent" value="">
                        <?php 
                            $db->categories_execute_recursive(function($c, $lvl, $p){
                                $name = $c["name"];
                                $id = $c["id"];
                                $indent = str_repeat("----", $lvl);
                                echo "<option value='".$name."'>".$indent.$name."</option>";
                            });
                        ?>
                    </td>
                </tr>
            </tbody></table>
            <p class="submit"><input type="submit" value="Create category" class="button button-primary"></p>
        </form>

        <hr>
        <h3>List of categories</h3>
        <?php
            // List the categories
            $db->categories_execute_recursive(function($c, $lvl, $p){
                $name = $c["name"];
                $id = $c["id"];
                $indent = str_repeat('----', $lvl);
                echo $indent."+ ".$name;
                if($c["id"]!=0){
                    echo " <a href='?";
                    echo http_build_query(array_merge($_GET, array("rordb_edit"=>$id)));
                    echo "'>edit</a>";
                }
                echo "<br>";
            });
        ?>
    </div>
    <?php
}