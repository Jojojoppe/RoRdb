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
		"RoRdb",          				// page title
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

        <h4>Categories</h4>
        <?php
            $db->categories_execute_recursive(function($c, $lvl, $p){
                $name = $c["name"];
                $id = $c["id"];
                $indent = str_repeat('----', $lvl);
                echo $indent."+ ";
                echo " <a href='?";
                echo http_build_query(["page"=>"rordb", "rordb_category"=>$name]);
                echo "'>$name</a>";
                echo "<br>";
            });
        ?>

        <hr>
        <h4>Search</h4>

        <script type="text/javascript">
            function rordb_hide_div(id, checkbox){
                var hidden = document.getElementsByName(checkbox)[0].checked;
                if(!hidden){
                    document.getElementById(id).style.display = 'none';
                }else{
                    document.getElementById(id).style.display = 'block';
                }
            }
        </script>
        <form action="" method="get">
            <input type="hidden" name="page" value="<?php echo $_GET['page'];?>">
            <input type="text" name="rordb_searchtag"><br>
            Advanced search: <input type="checkbox" onChange="rordb_hide_div('rordb_search_advanced', 'rordb_search_advanced_checkbox')" name="rordb_search_advanced_checkbox"><br>

            <div id="rordb_search_advanced" style="display:none;">
                Show hidden items: <input type="checkbox" name="rordb_search_showhidden"><br>
                Only hidden items: <input type="checkbox" name="rordb_search_onlyhidden"><br>
                Exclude from search: <select name="rordb_search_exclude[]" multiple>
                    <option>Name</option>
                    <option>Category</option>
                    <option>Location</option>
                    <option>Color</option>
                    <option>Size</option>
                    <option>Amount</option>
                    <option>Comments</option>
                    <option>Claimed</option>
                </select><br>
                Specifics:<br>
                Category: <select name="rordb_search_category">
                        <?php 
                            $db->categories_execute_recursive(function($c, $lvl, $p){
                                $name = $c["name"];
                                $id = $c["id"];
                                $indent = str_repeat("----", $lvl);
                                echo "<option value='".$name."'>".$indent.$name."</option>";
                            });
                        ?>
                    </select><br>
                Location: <select name="rordb_search_location">
                        <?php 
                            $db->locations_execute_recursive(function($c, $lvl, $p){
                                $name = $c["name"];
                                $id = $c["id"];
                                $indent = str_repeat("----", $lvl);
                                echo "<option value='".$name."'>".$indent.$name."</option>";
                            });
                        ?>
                    </select><br>
                Color: <input type="text" name="rordb_search_color"><br>
                Size: <input type="text" name="rordb_search_size"><br>
            </div>

            <input type="submit" class="button button-primary" value="Search">
        </form>

        <hr>
        <h4>Items</h4>

        <?php
            if(!isset($_GET['rordb_category'])){
                $_GET['rordb_category'] = NULL;
            }
            if(!isset($_GET['rordb_searchtag'])){
                $_GET['rordb_searchtag'] = NULL;
            }

            if(isset($_GET['rordb_search_advanced_checkbox']) && $_GET['rordb_search_advanced_checkbox']=="on"){
                $category = $_GET['rordb_search_category'];
                $location = $_GET['rordb_search_location'];

                if(isset($_GET['rordb_search_exclude'])){
                    $exclude = $_GET['rordb_search_exclude'];
                }else{
                    $exclude = [];
                }

                $specifics = [
                    'Category_tree'=>$category,
                    'Location_tree'=>$location
                ];

                if(isset($_GET['rordb_search_color']) && $_GET['rordb_search_color']!=""){
                    $specifics['Color'] = $_GET['rordb_search_color'];
                }

                if(isset($_GET['rordb_search_size']) && $_GET['rordb_search_size']!=""){
                    $specifics['Size'] = $_GET['rordb_search_size'];
                }

                if(!isset($_GET['rordb_search_showhidden']) || $_GET['rordb_search_showhidden']=="off"){
                    $specifics['Hidden'] = '0';
                }

                if(!isset($_GET['rordb_search_onlyhidden']) || $_GET['rordb_search_onlyhidden']=="on"){
                    $specifics['Onlyhidden'] = '1';
                }

                $res = $db->items_search($_GET['rordb_searchtag'], $specifics, $exclude);
            }else{
                $res = $db->items_search($_GET['rordb_searchtag'], ['Category_tree'=>$_GET['rordb_category'], 'Hidden'=>'0'], []);
            }

            foreach($res as $i){
                ?>
                <table width="100%" border="1px">
                <tr>
                    <td width="200"><img src="https://drive.google.com/thumbnail?id=<?php echo $i[10];?>&sz=w200-h200"></td>
                    <td>
                        <a href="<?php echo "admin.php?page=rordb_create_items&rordb_edit_item=".$i[0]; ?>">Edit item</a><br>
                        Name: <?php echo $i[1];?><br>
                        Category: <?php echo $i[2];?><br>
                        Location: <?php echo $i[3];?><br>
                        Color: <?php echo $i[4];?><br>
                        Size: <?php echo $i[5];?><br>
                        Amount: <?php echo $i[6];?><br>
                        Comments: <pre><?php echo $i[7];?></pre><br>
                        Claimed: <?php echo $i[11]; ?><br>
                        Hidden: <?php echo $i[12]; ?><br>
                    </td>
                </tr>
                </table>
                <?php
            }
        ?>
    </div>
    <?php
}