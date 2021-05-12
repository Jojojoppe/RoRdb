<?php

function rordb_categories_options_menu(){
	add_submenu_page(
        "rordb",                                // parent slug
        "RoRdb categories",                     // page title
        "Categories",                           // menu title
        "manage_options",                       // capability
        "rordb_categories",                     // menu slug
        "rordb_categories_options_page_html"    // callable
        // position
    );
}
add_action('admin_menu', 'rordb_categories_options_menu');


function rordb_categories_options_page_html(){
	if(!current_user_can('manage_options')){
		return;
	}
    // Create database object to interact with
    $db = new RordbDatabase();


    if(isset($_POST["rordb_create_name"])){
        $db->put_category($_POST["rordb_create_name"], $_POST["rordb_create_parent"]);
        add_settings_error('rordb_messages', 'rordb_message',
            __('Added category \''.$_POST["rordb_create_name"].'\'', 'rordb'), 'updated');
    }

	// Show error/update messages
	settings_errors('rordb_messages');   

    ?>
    <div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>

        <?php
            if(isset($_GET["rordb_edit"])){
                $category = $db->get_category($_GET["rordb_edit"]);
                unset($_GET["rordb_edit"]);
                $action_url = http_build_query($_GET);
                ?>
                <hr>
                <h3>Edit a category</h3>
                <form action="?<?php echo $action_url; ?>" method="post">
                    <input type="hidden" name="rordb_edit_id" value="<?php echo $category["id"]; ?>">
                    <table class="form-table" role="presentation"><tbody>
                        <tr>
                            <th scope="row">Category name</th>
                            <td><input type="text" name="rordb_edit_name" value="<?php echo $category["name"]; ?>"></td>
                        </tr>
                    </tbody></table>
                    <p class="submit"><input type="submit" value="Update category" class="button button-primary"></p>
                </form>
                <?php
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
                            $listlevel = "";
                            $listlevellength = 0;
                            $db->categories_execute_recursive(function($c, $lvl){
                                GLOBAL $listlevel;
                                GLOBAL $listlevellength;
                                $name = $c["name"];
                                $id = $c["id"];

                                if($lvl > $listlevellength/4){ 
                                    $listlevel = $listlevel."----";
                                    $listlevellength += 2;
                                }else if($lvl < $listlevellength/4){
                                    $listlevel = substr($listlevel, 0, $listlevellength-4);
                                    $listlevellength -= 4;
                                }
                                echo "<option value='".$name."'>".$listlevel.$name."</option>";
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
            $listlevel = "";
            $listlevellength = 0;
            $db->categories_execute_recursive(function($c, $lvl){
                GLOBAL $listlevel;
                GLOBAL $listlevellength;
                $name = $c["name"];
                $id = $c["id"];

                if($lvl > $listlevellength/4){ 
                    $listlevel = $listlevel."----";
                    $listlevellength += 4;
                }else if($lvl < $listlevellength/4){
                    $listlevel = substr($listlevel, 0, $listlevellength-4);
                    $listlevellength -= 4;
                }

                echo $listlevel."+ ".$name." <a href='?";
                echo http_build_query(array_merge($_GET, array("rordb_edit"=>$id)));
                echo "'>edit</a><br>";
            });
        ?>
    </div>
    <?php
}