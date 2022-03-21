<?php

// Initialize user stuff
function rordb_users_init(){
    // Create the RoRdb maintainer role
    wp_roles()->add_role("rordb", "RoRdb maintainer", [
        //"rordb_edit_settings"=>true,

        "rordb_view_items"=>true,
        "rordb_edit_items"=>true,
        "rordb_create_items"=>true,

        "rordb_view_categories"=>true,
        "rordb_edit_categories"=>true,
        "rordb_create_categories"=>true,

        "rordb_view_locations"=>true,
        "rordb_edit_locations"=>true,
        "rordb_create_locations"=>true,

        "rordb_view_claimgroups"=>true,
        "rordb_edit_claimgroups"=>true,
        "rordb_create_claimgroups"=>true,
    ]);

    wp_roles()->add_role("rordb_viewer", "RoRdb viewer", [
        "rordb_view_items"=>true,
        "rordb_view_categories"=>true,
        "rordb_view_locations"=>true,
        "rordb_view_claimgroups"=>true,
    ]);

    // Add capabilities to administrator
    $admin = wp_roles()->get_role("administrator");
    $admin->add_cap("rordb_edit_settings", true);

    $admin->add_cap("rordb_view_items", true);
    $admin->add_cap("rordb_edit_items", true);
    $admin->add_cap("rordb_create_items", true);

    $admin->add_cap("rordb_view_categories", true);
    $admin->add_cap("rordb_edit_categories", true);
    $admin->add_cap("rordb_create_categories", true);

    $admin->add_cap("rordb_view_locations", true);
    $admin->add_cap("rordb_edit_locations", true);
    $admin->add_cap("rordb_create_locations", true);

    $admin->add_cap("rordb_view_claimgroups", true);
    $admin->add_cap("rordb_edit_claimgroups", true);
    $admin->add_cap("rordb_create_claimgroups", true);
}

// Deinitialize user stuff
function rordb_users_deinit(){
    // Remove added capabilities
    $admin = wp_roles()->get_role("administrator");
    $admin->remove_cap("rordb_edit_settings");

    $admin->remove_cap("rordb_view_items");
    $admin->remove_cap("rordb_edit_items");
    $admin->remove_cap("rordb_create_items");

    $admin->remove_cap("rordb_view_categories");
    $admin->remove_cap("rordb_edit_categories");
    $admin->remove_cap("rordb_create_categories");

    $admin->remove_cap("rordb_view_locations");
    $admin->remove_cap("rordb_edit_locations");
    $admin->remove_cap("rordb_create_locations");

    $admin->remove_cap("rordb_view_claimgroups");
    $admin->remove_cap("rordb_edit_claimgroups");
    $admin->remove_cap("rordb_create_claimgroups");

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

                "rordb_view_items",
                "rordb_edit_items",
                "rordb_create_items",

                "rordb_view_categories",
                "rordb_edit_categories",
                "rordb_create_categories",

                "rordb_view_locations",
                "rordb_edit_locations",
                "rordb_create_locations",

                "rordb_view_claimgroups",
                "rordb_edit_claimgroups",
                "rordb_create_claimgroups",
            ),
			'icon'     => 'dashicons-database',
			'priority' => 10
		)
	);
}
add_action( 'members_register_cap_groups', 'rordb_register_cap_groups' );

// Callbacks to check if user can do stuff
// ---------------------------------------
function rordb_can_user_view_items(){
    return current_user_can('rordb_view_items');
}

function rordb_can_user_create_items(){
    return current_user_can('rordb_create_items');
}

function rordb_can_user_edit_items(){
    return current_user_can('rordb_edit_items');
}

function rordb_can_user_view_categories(){
    return current_user_can('rordb_view_categories');
}

function rordb_can_user_edit_categories(){
    return current_user_can('rordb_edit_categories');
}

function rordb_can_user_create_categories(){
    return current_user_can('rordb_create_categories');
}

function rordb_can_user_view_locations(){
    return current_user_can('rordb_view_locations');
}

function rordb_can_user_edit_locations(){
    return current_user_can('rordb_edit_locations');
}

function rordb_can_user_create_locations(){
    return current_user_can('rordb_create_locations');
}

function rordb_can_user_edit_settings(){
    return current_user_can('rordb_edit_settings');
}

function rordb_can_user_view_claimgroups(){
    return current_user_can('rordb_view_claimgroups');
}

function rordb_can_user_edit_claimgroups(){
    return current_user_can('rordb_edit_claimgroups');
}

function rordb_can_user_create_claimgroups(){
    return current_user_can('rordb_create_claimgroups');
}