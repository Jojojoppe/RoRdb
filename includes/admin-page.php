<?php

// Settings initialization
// -----------------------
function rordb_settings_init(){
	// Register section
	add_settings_section('rordb_section_main', __('Main settings of RoRdb', 'rordb'),
		'rordb_section_header_callback', 'rordb');

	// General settings
	register_setting('rordb', 'rordb_app_uid', ['default'=>'00-00-00']);
	add_settings_field('rordb_field_app_uid', __('App UID', 'rordb'),
		'rordb_field_text', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_app_uid',
			'description'			=> 'Unique ID within one service account'
		]);
	register_setting('rordb', 'rordb_admin_mail', ['default'=>'someone@example.com']);
	add_settings_field('rordb_field_admin_mail', __('Admin main', 'rordb'),
		'rordb_field_text', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_admin_mail',
			'description'			=> 'E-mail address to which the service account drive is shared. Affects only database when being created'
		]);
	register_setting('rordb', 'rordb_service_account_key', ['default'=>'']);
	add_settings_field('rordb_field_service_account_key', __('Service account key', 'rordb'),
		'rordb_field_textarea', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_service_account_key',
			'description'			=> 'Service account key JSON file content'
	]);
	register_setting('rordb', 'rordb_service_account_mail', ['default'=>'']);
	add_settings_field('rordb_field_service_account_mail', __('Service account mail', 'rordb'),
		'rordb_field_text_disabled', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_service_account_mail',
			'description'			=> 'E-mail address of the used service account'
	]);

	// Service account settings
	register_setting('rordb', 'rordb_drive_id', ['default'=>'']);
	add_settings_field('rordb_field_drive_id', __('Service account Drive', 'rordb'),
		'rordb_field_text_disabled', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_drive_id',
			'description'			=> 'Service account Drive folder ID'
		]);
	register_setting('rordb', 'rordb_sheet_id', ['default'=>'']);
	add_settings_field('rordb_field_sheet_id', __('Database sheet', 'rordb'),
		'rordb_field_text_disabled', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_sheet_id',
			'description'			=> 'Database sheet ID'
	]);
	register_setting('rordb', 'rordb_action', ['default'=>'']);
	add_settings_field('rordb_field_action', __('Database action', 'rordb'),
		'rordb_field_select', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_action',
			'description'			=> 'Do a descructive action on the database',
			'options'				=> ['', 'Load database', '(Re)create database', 'Delete database']
	]);

	register_setting('rordb', 'rordb_valid_database', ['default'=>false]);
	add_settings_field('rordb_field_valid_database', __('Valid database', 'rordb'),
		'rordb_field_checkbox_disabled', 'rordb', 'rordb_section_main', [
			'label_for'				=> 'rordb_valid_database',
			'description'			=> 'Are the database settings valid'
	]);
}
add_action('admin_init', 'rordb_settings_init');

// Settings section header callback
// ------------------------------
function rordb_section_header_callback($args){
	echo "<p id=\"".esc_attr($args["id"])."\">";
}

// Field callbacks
// ---------------
function rordb_field_text($args){
	$option = get_option($args['label_for']);
	echo "<input type='text' id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."' ";
	echo "value='".$option."'>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_text_disabled($args){
	$option = get_option($args['label_for']);
	echo "<input disabled type='text' id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."' ";
	echo "value='".$option."'>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_textarea($args){
	$option = get_option($args['label_for']);
	echo "<textarea id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."'>";
	echo $option."</textarea>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_textarea_disabled($args){
	$option = get_option($args['label_for']);
	echo "<textarea id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."'>";
	echo $option."</textarea>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_select($args){
	$option = get_option($args['label_for']);
	$selectoptions = $args['options'];
	echo "<select id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."'>";
	foreach($selectoptions as $o){
		echo "<option value='".$o."' ";
		if($option==$o) echo "selected";
		echo ">".$o;
		echo "</option>";
	}
	echo "</select>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}
function rordb_field_checkbox_disabled($args){
	$option = get_option($args['label_for']);
	echo "<input disabled type='checkbox' id='".esc_attr($args['label_for'])."' ";
	echo "name='".esc_attr($args['label_for'])."' ";
	if($option) echo "checked ";
	echo "value='".$option."'>";
	echo "<p class='description'>";
	echo esc_html_e($args['description']);
	echo "</p>";
}

// Top level menu page
// -------------------
function rordb_options_menu(){
	add_menu_page(
		"RoRdb settings", 				// page title
		"RoRdb", 						// menu title
		"manage_options", 				// capability
		"rordb", 						// menu slug
		"rordb_options_page_html",		// callable
		file_get_contents(plugin_dir_path(__FILE__)."../admin/images/nest_icon.wpico") // icon url
		// position
	);
}
add_action('admin_menu', 'rordb_options_menu');

// Top level menu page callback
// ----------------------------
function rordb_options_page_html(){
	if(!current_user_can('manage_options')){
		return;
	}

	// Add error/update messages

	// Check for descructive database action
	if(isset($_GET['settings-updated'])){
		$action = get_option('rordb_action');
		if($action=="Load database"){
			add_settings_error('rordb_messages', 'rordb_message',
				__('Loading database', 'rordb'), 'updated');

			$db = new RordbDatabase();
			if(!$db->load_database()){
				add_settings_error('rordb_messages', 'rordb_message',
					__('While loading the database an error occured: maybe the database does not exist yet', 'rordb'), 'error');		
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
