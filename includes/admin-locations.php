<?php

function rordb_locations_options_menu(){
	add_submenu_page(
        "rordb",                                // parent slug
        "RoRdb locations",                      // page title
        "Locations",                           // menu title
        "manage_options",                       // capability
        "rordb_locations",                      // menu slug
        "rordb_locations_options_page_html"     // callable
        // position
    );
}
add_action('admin_menu', 'rordb_locations_options_menu');


function rordb_locations_options_page_html(){
	if(!current_user_can('manage_options')){
		return;
	}
    // Create database object to interact with
    $db = new RordbDatabase();


    if(isset($_POST["rordb_create_name"])){
        $db->put_location($_POST["rordb_create_name"], $_POST["rordb_create_parent"]);
        add_settings_error('rordb_messages', 'rordb_message',
            __('Added location \''.$_POST["rordb_create_name"].'\'', 'rordb'), 'updated');
    }

    if(isset($_POST["rordb_edit_name"])){
        $db->update_location($_POST["rordb_edit_id"], $_POST["rordb_edit_name"], $_POST["rordb_edit_parent"]);
        add_settings_error('rordb_messages', 'rordb_message',
            __('Edited location \''.$_POST["rordb_edit_name"].'\'', 'rordb'), 'updated');
    }

	// Show error/update messages
	settings_errors('rordb_messages');   

    ?>
    <div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>

        <?php
            if(isset($_GET["rordb_edit"])){
                $location = $db->get_location($_GET["rordb_edit"]);
                $currentcatid = $location["id"];
                $currentcatname = $location["name"];
                unset($_GET["rordb_edit"]);
                $action_url = http_build_query($_GET);
                ?>
                <hr>
                <h3>Edit a location</h3>
                <form action="?<?php echo $action_url; ?>" method="post">
                    <input type="hidden" name="rordb_edit_id" value="<?php echo $currentcatid; ?>">
                    <table class="form-table" role="presentation"><tbody>
                        <tr>
                            <th scope="row">Location name</th>
                            <td><input type="text" name="rordb_edit_name" value="<?php echo $currentcatname; ?>"></td>
                        </tr>
                        <tr>
                            <th scope="row">Location parent</th>
                            <td>
                                <select name="rordb_edit_parent">
                                <?php 
                                    unset($listlevel);
                                    unset($listlevellength);
                                    $listlevel = "";
                                    $listlevellength = 0;
                                    $db->locations_execute_recursive(function($c, $lvl, $location){
                                        GLOBAL $listlevel;
                                        GLOBAL $listlevellength;
                                        $name = $c["name"];
                                        $id = $c["id"];

                                        if($id==$location["id"]) return;

                                        if($lvl > $listlevellength/4){ 
                                            $listlevel = $listlevel."----";
                                            $listlevellength += 4;
                                        }else if($lvl < $listlevellength/4){
                                            $listlevel = substr($listlevel, 0, $listlevellength-4);
                                            $listlevellength -= 4;
                                        }
                                        echo "<option value='".$name."' ";
                                        if($id==$location["parentid"]) echo "selected";
                                        echo ">".$listlevel.$name."</option>";
                                    }, $location);
                                ?>
                            </td>
                        </tr>
                    </tbody></table>
                    <p class="submit"><input type="submit" value="Update location" class="button button-primary"></p>
                </form>
                <?php
            }

                ?>
        <hr>
        <h3>Create a location</h3>
        <form action="" method="post">
            <table class="form-table" role="presentation"><tbody>
                <tr>
                    <th scope="row">Location name</th>
                    <td><input type="text" name="rordb_create_name" value=""></td>
                </tr>
                <tr>
                    <th scope="row">Location parent</th>
                    <td>
                        <select name="rordb_create_parent" value="">
                        <?php 
                            unset($listlevel);
                            unset($listlevellength);
                            $listlevel = "";
                            $listlevellength = 0;
                            $db->locations_execute_recursive(function($c, $lvl){
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
                                echo "<option value='".$name."'>".$listlevel.$name."</option>";
                            });
                        ?>
                    </td>
                </tr>
            </tbody></table>
            <p class="submit"><input type="submit" value="Create location" class="button button-primary"></p>
        </form>

        <hr>
        <h3>List of locations</h3>
        <?php
            // List the locations
            unset($listlevel);
            unset($listlevellength);
            $listlevel = "";
            $listlevellength = 0;
            $db->locations_execute_recursive(function($c, $lvl){
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

                echo $listlevel."+ ".$name;
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