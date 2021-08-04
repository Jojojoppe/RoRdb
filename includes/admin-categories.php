<?php

require_once('categories.php');

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
    // Check for correct database and permissions
    if(!rordb_categories_can_edit()) return;
    // Initialize database component
    $db = new RordbDatabase();
    // Do edit/create actions
    rordb_categories_do_action($_POST, $db);
    // Show messages
	settings_errors('rordb_messages');   
    // Render page
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <?php

            if(rordb_categories_if_editing($_GET)){
                rordb_categories_render_edit($db, $_GET);
                return;
            }else{
                rordb_categories_render_create($db);
            }

        ?>
        <hr>
        <h3>List of categories</h3>
        <?php

            // List the categories
            $db->categories_execute_recursive(function($c, $lvl, $p){
                $name = $c["name"];
                $id = $c["id"];
                $indent = str_repeat('----', $lvl);
                echo $indent."+ ".$name;
                if(rordb_categories_can_edit_category($id)){
                    echo " <a href='?";
                    echo rordb_categories_get_edit_url($_GET, $id);
                    echo "'>edit</a>";
                }
                echo "<br>";
            });

        ?>
    </div>
    <?php
}
