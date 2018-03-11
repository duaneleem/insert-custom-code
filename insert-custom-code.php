<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://duaneleem.com
 * @since             1.0.0
 * @package           Insert_Custom_Code
 *
 * @wordpress-plugin
 * Plugin Name:       Insert Custom Code
 * Plugin URI:        https://github.com/duaneleem/insert-custom-code
 * Description:       This will give a WordPress administrator the ability to insert CSS/JS codes in the <head> or <body> of the whole WordPress site or to specific post type (posts or pages).
 * Version:           1.0.0
 * Author:            Duane Leem
 * Author URI:        https://duaneleem.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       insert-custom-code
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-insert-custom-code-activator.php
 */
function activate_insert_custom_code() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-insert-custom-code-activator.php';
	Insert_Custom_Code_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-insert-custom-code-deactivator.php
 */
function deactivate_insert_custom_code() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-insert-custom-code-deactivator.php';
	Insert_Custom_Code_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_insert_custom_code' );
register_deactivation_hook( __FILE__, 'deactivate_insert_custom_code' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-insert-custom-code.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_insert_custom_code() {
	$plugin = new Insert_Custom_Code();
	$plugin->run();
}
run_insert_custom_code();
