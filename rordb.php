<?php
/*
Plugin Name: RoRdb
Plugin URI: https://github.com/Jojojoppe/RoRdb
Version: 0.0.9
License: BSD-2
Author: Joppe Blondel
Author URI: https://github.com/Jojojoppe
Description: Room of Requirements (RoR) database using Google drive and sheets
Requires PHP: 7

Copyright (c) 2021, Joppe Blondel

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

define("RORDB_VERSION", "0.0.9");

// Google stuff
require_once plugin_dir_path(__FILE__)."third_party/google-api-php-client--PHP8.0/vendor/autoload.php";
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
require_once plugin_dir_path(__FILE__)."includes/public-categories.php";
require_once plugin_dir_path(__FILE__)."includes/public-locations.php";
require_once plugin_dir_path(__FILE__)."includes/public-items.php";
require_once plugin_dir_path(__FILE__)."includes/public-createitem.php";
require_once plugin_dir_path(__FILE__)."includes/public-edititem.php";

// Shortcode parser
require_once plugin_dir_path(__FILE__)."includes/public-shortcodes.php";

// Auto updater
require_once plugin_dir_path(__FILE__)."includes/updater.php";

// Update hook
if(is_admin()){
   $config = array(
      'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
      'proper_folder_name' => basename(plugin_dir_path(__FILE__)), // this is the name of the folder your plugin lives in
      'api_url' => 'https://api.github.com/repos/Jojojoppe/RoRdb', // the GitHub API url of your GitHub repo
      'raw_url' => 'https://raw.github.com/Jojojoppe/RoRdb/master', // the GitHub raw url of your GitHub repo
      'github_url' => 'https://github.com/Jojojoppe/RoRdb', // the GitHub url of your GitHub repo
      'zip_url' => 'https://github.com/Jojojoppe/RoRdb/zipball/master', // the zip url of the GitHub repo
      'sslverify' => true, // whether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
      'requires' => '5.0', // which version of WordPress does your plugin require?
      'tested' => '5.7', // which version of WordPress is your plugin tested up to?
      'readme' => 'README.MD', // which file to use as the readme for the version number
      'access_token' => '', // Access private repositories by authorizing under Plugins > GitHub Updates when this example plugin is installed
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