<?php

function rordb_create_options_menu(){
	add_submenu_page(
        "rordb",                                // parent slug
        "Settings",   		                    // page title
        "Settings",                             // menu title
        "read",                                 // capability
        "rordb_settings",	                    // menu slug
        "rordb_options_page_html"  				// callable
        // position
    );
}
add_action('admin_menu', 'rordb_create_options_menu');

function rordb_options_page_html(){
	if(!rordb_can_user_edit_settings()){
        add_settings_error('rordb_messages', 'rordb_message',
            __('You do not have permission to view this page', 'rordb'), 'error');
        settings_errors('rordb_messages');
		return;
	}

	// Check for descructive database action
	if(isset($_GET['settings-updated'])){
		$action = get_option('rordb_action');
		if($action=="Load database"){
			add_settings_error('rordb_messages', 'rordb_message',
				__('Loading database', 'rordb'), 'updated');

			$db = new RordbDatabase();
			if(!$db->load_database()){
				add_settings_error('rordb_messages', 'rordb_message',
					__('While loading the database an error occured', 'rordb'), 'error');		
			}

			update_option('rordb_action', '');
		}else if($action=="(Re)create database"){
			add_settings_error('rordb_messages', 'rordb_message',
				__('(Re)create database', 'rordb'), 'updated');

			$db = new RordbDatabase();
			if(!$db->create_database()){
				add_settings_error('rordb_messages', 'rordb_message',
					__('While (re)creating the database an error occured', 'rordb'), 'error');		
			}

			update_option('rordb_action', '');
		}else if($action=="Delete database"){
			add_settings_error('rordb_messages', 'rordb_message',
				__('Delete database', 'rordb'), 'updated');

			$db = new RordbDatabase();
			if(!$db->delete_database()){
				add_settings_error('rordb_messages', 'rordb_message',
					__('While deleting the database an error occured', 'rordb'), 'error');		
			}

			update_option('rordb_action', '');
		}

	}

	// Validate settings
	//$db = new RordbDatabase();

	// Check if settings are updated
	if(isset($_GET['settings-updated'])){
		add_settings_error('rordb_messages', 'rordb_message',
			__('Settings saved', 'rordb'), 'updated');
	}

	// Show error/update messages
	settings_errors('rordb_messages');

	?>
	<div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
		RoRdb (v<?php echo RORDB_VERSION; ?>) needs a Google service account to work. Create a cloud app on <a href='http://console.cloud.google.com'>console.cloud.google.com</a> and 
		create a service account in it. Create a key for that service account and download it as JSON file. Copy the content of that file and paste it
		in the dedicated box below. On one service account multiple instances of RoRdb can be ran. Each instance MUST have another UID since a folder
		is created in the root of the drive of the service account. This UID keeps the folders speratated. You must provide an administrator email which
		is used to share the created folder with in case you need access to the database directly. Note: Not specifying any email will cause the folder to
		be visible for anyone with the link (currently a bug which is worked upon).
		There are several actions you can do from this settings page, namely 'Load database', '(Re)create database' and 'Delete database'. The first one will
		search in the service account drive for a valid installation of RoRdb with the set UID. If it is found, the RoRdb wordpress plugin will automatically
		load all the settings. The second one will create a new installation of RoRdb (and deletes the previous one if it exists). The last will delete the
		installation of RoRdb.
		<form action="options.php" method="post">
			<?php
			settings_fields('rordb');
			do_settings_sections('rordb');
			submit_button('Save settings');
			?>
		</form>
	</div>
	<?php
}
