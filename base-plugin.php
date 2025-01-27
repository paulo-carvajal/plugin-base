<?php
/**
 * Plugin Name: Base Plugin
 * Plugin URI: https://example.com/base-plugin
 * Description: A WordPress plugin.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * Text Domain: base-plugin
 * Domain Path: /languages
 *
 * @package Base Plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define plugin constants.
define( 'BASE_PLUGIN_VERSION', '1.0.0' );
define( 'BASE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'BASE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include the autoloader if you're using Composer.
// require_once MY_PLUGIN_DIR . 'vendor/autoload.php';.

// Include the main plugin class.
require_once BASE_PLUGIN_DIR . 'src/class-loader.php';
