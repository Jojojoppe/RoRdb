<?php

// Initialize user stuff
function rordb_users_init(){
    // Create the RoRdb maintainer role
    wp_roles()->add_role("rordb", "RoRdb maintainer", [
        //"rordb_edit_settings"=>true,
        "rordb_edit_categories"=>true,
        "rordb_edit_locations"=>true,
        "rordb_edit_items"=>true
    ]);
    // Create RoRdb viewer role
    wp_roles()->add_role("rordb_viewer", "RoRdb viewer", [
        "rordb_edit_items"=>true
    ]);

    // Add capabilities to administrator
    $admin = wp_roles()->get_role("administrator");
    $admin->add_cap("rordb_edit_settings", true);
    $admin->add_cap("rordb_edit_categories", true);
    $admin->add_cap("rordb_edit_locations", true);
    $admin->add_cap("rordb_edit_items", true);
}

// Deinitialize user stuff
function rordb_users_deinit(){
    // Remove added capabilities
    $admin = wp_roles()->get_role("administrator");
    $admin->remove_cap("rordb_edit_settings");
    $admin->remove_cap("rordb_edit_categories");
    $admin->remove_cap("rordb_edit_locations");
    $admin->remove_cap("rordb_edit_items");
    wp_roles()->remove_role("rordb");
    wp_roles()->remove_role("rordb_viewer");
}

// Register cap groups with the Members plugin (if used)
function rordb_register_cap_groups() {
	members_register_cap_group(
		'rordb',
		array(
			'label'    => __( 'RoRdb', 'rordb-textdomain' ),
			'caps'     => array(
                "rordb_edit_settings",
                "rordb_edit_categories",
                "rordb_edit_locations",
                "rordb_edit_items"
            ),
			'icon'     => 'dashicons-database',
			'priority' => 10
		)
	);
}
add_action( 'members_register_cap_groups', 'rordb_register_cap_groups' );

// Callbacks to check if user can do stuff
// ---------------------------------------
function rordb_can_user_view(){
    return true;
}

function rordb_can_user_edit_settings(){
    return current_user_can('rordb_edit_settings') or current_user_can('manage_settings');
}

function rordb_can_user_edit_categories(){
    return current_user_can('rordb_edit_categories');
}

function rordb_can_user_edit_locations(){
    return current_user_can('rordb_edit_locations');
}

function rordb_can_user_edit_items(){
    return current_user_can('rordb_edit_items');
}