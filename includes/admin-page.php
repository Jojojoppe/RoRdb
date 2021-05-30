<?php

// Load javascript files
function rordb_options_load_javascript(){
	wp_enqueue_script('rordb_settings_fields_js', plugin_dir_url(__FILE__)."../resources/js/settings_fields.js", array(), null, true);
}
add_action('admin_enqueue_scripts', 'rordb_options_load_javascript');

// Top level menu page
// -------------------
function rordb_admin_menu(){
	add_menu_page(
		"RoRdb",         				// page title
		"RoRdb",      	 				// menu title
		"read", 						// capability
		"rordb", 						// menu slug
		"rordb_admin_page_html",		// callable
		file_get_contents(plugin_dir_path(__FILE__)."../resources/images/nest_icon.wpico") // icon url
		// position
	);
}
add_action('admin_menu', 'rordb_admin_menu');

function rordb_admin_page_html(){
    // Create database object to interact with
    $db = new RordbDatabase();

	// Show error/update messages
	settings_errors('rordb_messages');   

    ?>
	<div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>

        <form action="" method="get">
            <input type="hidden" name="page" value="<?php echo $_GET['page'];?>">
            <input type="text" name="rordb_searchtag">
            <input type="submit" class="button button-primary" value="Search">
        </form>

        <table width="100%" border="1px"><tr>
        <td width="30%" style='padding-top:0'>
            <h4>Categories</h4>
            <?php
                // List the categories
                $db->categories_execute_recursive(function($c, $lvl, $p){
                    $name = $c["name"];
                    $id = $c["id"];
                    $indent = str_repeat('----', $lvl);
                    echo $indent."+ ";
                    echo " <a href='?";
                    echo http_build_query(array_merge($_GET, array("rordb_category"=>$name)));
                    echo "'>$name</a>";
                    echo "<br>";
                });
            ?>
        </td>
        
        <td width="50%" style='padding-top:0' height="100%">
            <h4>Items</h4>
            <?php
                if(!isset($_GET['rordb_category'])){
                    $_GET['rordb_category'] = NULL;
                }
                if(!isset($_GET['rordb_searchtag'])){
                    $_GET['rordb_searchtag'] = NULL;
                }

                $res = $db->items_search($_GET['rordb_searchtag'], ['Category_tree'=>$_GET['rordb_category']], []);
                foreach($res as $i){
                    ?>
                    <table width="100%" border="1px">
                    <tr>
                        <td width="200"><img src="https://drive.google.com/a/nest.utwente.nl/thumbnail?id=<?php echo $i[10];?>&sz=w200-h200"></td>
                        <td>
                            Name: <?php echo $i[1];?><br>
                            Category: <?php echo $i[2];?><br>
                            Location: <?php echo $i[3];?><br>
                            Color: <?php echo $i[4];?><br>
                            Size: <?php echo $i[5];?><br>
                            Amount: <?php echo $i[6];?><br>
                            Comments: <?php echo $i[7];?><br>
                        </td>
                    </tr>
                    </table>
                    <?php
                }
            ?>
        </td>
        <tr></table>
    </div>
    <?php
}