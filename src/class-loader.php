<?php
/**
 * MyPlugin class file.
 *
 * This file contains the MyPlugin class, which is the main class for the MyPlugin plugin.
 *
 * @package YourNamespace
 * @subpackage SubpackageName
 * @since 1.0.0
 */

namespace YourNamespace;

/**
 * Main plugin class that handles loading and basic functionality.
 *
 * This class is responsible for initializing the plugin and maintaining
 * core properties like plugin name and version.
 * It also provides getter methods to access these properties.
 *
 * @package Base Plugin
 * @since 1.0.0
 */
class Loader {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power the plugin.
	 *
	 * @since 1.0.0
	 * @access protected
	 * @var object $loader Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since 1.0.0
	 * @access protected
	 * @var string $plugin_name The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since 1.0.0
	 * @access protected
	 * @var string $version The current version of the plugin.
	 */
	protected $version;


	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->plugin_name = 'base-plugin';
		$this->version = '1.0.0';
	}


	/**
	 * Retrieve the plugin name.
	 *
	 * @since 1.0.0
	 * @return string The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}


	/**
	 * Retrieve the loader that's responsible for maintaining and registering all hooks that power the plugin.
	 *
	 * @since 1.0.0
	 * @return object Returns the loader instance.
	 */
	public function get_loader() {
		return $this->loader;
	}


	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since 1.0.0
	 * @return string The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}
}
