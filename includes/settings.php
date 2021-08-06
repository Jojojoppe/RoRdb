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
			'description'			=> 'E-mail address to which the service account drive is shared. Affects database only when being created'
		]);
	register_setting('rordb', 'rordb_service_account_key', ['default'=>'']);
	add_settings_field('rordb_field_service_account_key', __('Service account key', 'rordb'),
		'rordb_field_filecontent', 'rordb', 'rordb_section_main', [
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