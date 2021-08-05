<?php
/*
Plugin Name: RoRdb
Plugin URI: https://github.com/Jojojoppe/RoRdb
Version: 0.0.3-a
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

define("RORDB_VERSION", "0.0.3-a");

// Google stuff
require_once plugin_dir_path(__FILE__)."third_party/google-api-php-client--PHP8.0/vendor/autoload.php";
require_once plugin_dir_path(__FILE__)."includes/googleapi/api.php";
// RoRdb database interface
require_once plugin_dir_path(__FILE__)."includes/database/database.php";

// Settings
require_once plugin_dir_path(__FILE__)."includes/settings_fields.php";
require_once plugin_dir_path(__FILE__)."includes/settings.php";

// Users
require_once plugin_dir_path(__FILE__)."includes/users.php";

// Admin pages
require_once plugin_dir_path(__FILE__)."includes/admin-page.php";
require_once plugin_dir_path(__FILE__)."includes/admin-settings.php";
require_once plugin_dir_path(__FILE__)."includes/admin-categories.php";
require_once plugin_dir_path(__FILE__)."includes/admin-locations.php";
require_once plugin_dir_path(__FILE__)."includes/admin-create_items.php";

// Public pages
require_once plugin_dir_path(__FILE__)."includes/public.php";

// Shortcode parser
require_once plugin_dir_path(__FILE__)."includes/public-shortcodes.php";

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