<?php
/*
Plugin Name: Seedsnpots Customer Gallery
Plugin URI: https://seedsnpots.com
Description: Allow customers to upload plant photos and display them on WooCommerce product pages.
Version: 1.0.0
Author: Seedsnpots
Author URI: https://seedsnpots.com
License: GPL2
Text Domain: seedsnpots-gallery
*/

if (!defined('ABSPATH')) {
    exit;
}

define('SPG_VERSION', '1.0.0');
define('SPG_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('SPG_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once SPG_PLUGIN_PATH . 'includes/class-database.php';
require_once SPG_PLUGIN_PATH . 'admin/class-admin.php';
require_once SPG_PLUGIN_PATH . 'includes/class-post-type.php';
require_once SPG_PLUGIN_PATH . 'includes/class-assets.php';
require_once SPG_PLUGIN_PATH . 'includes/class-upload-handler.php';
require_once SPG_PLUGIN_PATH . 'includes/class-shortcode.php';
require_once SPG_PLUGIN_PATH . 'public/class-upload-form.php';

register_activation_hook(__FILE__, array('SPG_Database', 'install'));

function spg_start_plugin() {
    new SPG_Admin();
    new SPG_Post_Type();
    new SPG_Shortcode();
    new SPG_Assets();
    new SPG_Upload_Handler();
    new SPG_Upload_Form();
}

add_action('plugins_loaded', 'spg_start_plugin');