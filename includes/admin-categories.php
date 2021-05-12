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

    // Add error/update messages


	// Show error/update messages
	settings_errors('rordb_messages');   

    ?>
    <div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    </div>
    <?php
}