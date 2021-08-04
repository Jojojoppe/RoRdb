<?php

require_once('locations.php');

function rordb_locations_options_menu(){
	add_submenu_page(
        "rordb",                                // parent slug
        "RoRdb locations",                      // page title
        "Locations",                            // menu title
        "read",                                 // capability
        "rordb_locations",                      // menu slug
        "rordb_locations_options_page_html"     // callable
        // position
    );
}
add_action('admin_menu', 'rordb_locations_options_menu');

function rordb_locations_options_page_html(){
    // Check for correct database and permissions
    if(!rordb_locations_can_edit()) return;
    // Initialize database component
    $db = new RordbDatabase();
    // Do edit/create actions
    rordb_locations_do_action($_POST, $db);
    // Show messages
	settings_errors('rordb_messages');   
    // Render page
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <?php

            if(rordb_locations_if_editing($_GET)){
                rordb_locations_render_edit($db, $_GET);
                return;
            }else{
                rordb_locations_render_create($db);
            }

        ?>
        <hr>
        <h3>List of Locations</h3>
        <?php

            // List the locations
            $db->locations_execute_recursive(function($c, $lvl, $p){
                $name = $c["name"];
                $id = $c["id"];
                $indent = str_repeat('----', $lvl);
                echo $indent."+ ".$name;
                if(rordb_locations_can_edit_location($id)){
                    echo " <a href='?";
                    echo rordb_locations_get_edit_url($_GET, $id);
                    echo "'>edit</a>";
                }
                echo "<br>";
            });

        ?>
    </div>
    <?php
}
