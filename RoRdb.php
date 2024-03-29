<?php
/*
Plugin Name: RoRdb
Plugin URI: https://github.com/Jojojoppe/RoRdb
Version: 0.1.2-5
License: BSD-2
Author: Joppe Blondel
Author URI: https://joppeb.nl
Description: Room of Requirements (RoR) database using Google drive and sheets
Requires PHP: 7

Copyright (c) 2022, Joppe Blondel

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

if(!defined('WPINC')){
	die;
}

define("RORDB_VERSION", "0.1.2-5");

// Updater
require_once plugin_dir_path(__FILE__)."includes/updater.php";

// Google stuff
require_once plugin_dir_path(__FILE__)."build/vendor/autoload.php";
require_once plugin_dir_path(__FILE__)."includes/googleapi/api.php";
// RoRdb database interface
require_once plugin_dir_path(__FILE__)."includes/database/database.php";

require_once plugin_dir_path(__FILE__)."includes/error.php";

// Settings
require_once plugin_dir_path(__FILE__)."includes/settings_fields.php";
require_once plugin_dir_path(__FILE__)."includes/settings.php";

// Users
require_once plugin_dir_path(__FILE__)."includes/users.php";

// Functionality wrappers
require_once plugin_dir_path(__FILE__)."includes/locations.php";

// Admin pages
require_once plugin_dir_path(__FILE__)."includes/admin-settings.php";

// Public pages
require_once plugin_dir_path(__FILE__)."includes/public.php";
require_once plugin_dir_path(__FILE__)."includes/public-home.php";
require_once plugin_dir_path(__FILE__)."includes/public-hier_edit.php";
require_once plugin_dir_path(__FILE__)."includes/public-categories.php";
require_once plugin_dir_path(__FILE__)."includes/public-locations.php";
require_once plugin_dir_path(__FILE__)."includes/public-claimgroups.php";
require_once plugin_dir_path(__FILE__)."includes/public-items.php";
require_once plugin_dir_path(__FILE__)."includes/public-createitem.php";
require_once plugin_dir_path(__FILE__)."includes/public-edititem.php";

// Shortcode parser
require_once plugin_dir_path(__FILE__)."includes/public-shortcodes.php";

// Updater
define( 'WP_GITHUB_FORCE_UPDATE', true );
if (is_admin()) { // note the use of is_admin() to double check that this is happening in the admin
   $config = array(
      'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
      'proper_folder_name' => __DIR__, // this is the name of the folder your plugin lives in
      'api_url' => 'https://api.github.com/repos/Jojojoppe/RoRdb', // the github API url of your github repo
      'raw_url' => 'https://raw.githubusercontent.com/Jojojoppe/RoRdb/master', // the github raw url of your github repo
      'github_url' => 'https://github.com/Jojojoppe/RoRdb', // the github url of your github repo
      'zip_url' => 'https://api.github.com/repos/Jojojoppe/RoRdb/zipball/master', // the zip url of the github repo
      'sslverify' => true, // wether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
      'requires' => '5.0', // which version of WordPress does your plugin require?
      'tested' => '5.9', // which version of WordPress is your plugin tested up to?
      'readme' => 'README.MD', // which file to use as the readme for the version number
      'access_token' => '', // Access private repositories by authorizing under Appearance > Github Updates when this example plugin is installed
   );
   new WP_GitHub_Updater($config);
}

// Activation hook
function rordb_activation(){
   rordb_users_init();
}
register_activation_hook(__FILE__, "rordb_activation");

// Deactivation hook
function rordb_deactivation(){
   rordb_users_deinit();
}
register_deactivation_hook(__FILE__, "rordb_deactivation");
