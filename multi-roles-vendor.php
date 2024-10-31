<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpwiredin.github.io/plugins/
 * @since             1.1.0
 * @package           Multi_Roles_Vendor
 *
 * @wordpress-plugin
 * Plugin Name:       Multi Roles Vendor
 * Plugin URI:        https://wpwiredin.github.io/plugins/
 * Description:       User Role assigment Plugin for WooCommerce Multivendor Sites
 * Version:           1.1.0
 * Author:            WPWiredIn
 * Author URI:        https://wpwiredin.github.io/plugins/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       multi-roles-vendor
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MULTI_ROLES_VENDOR_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-multi-roles-vendor-activator.php
 */
function activate_multi_roles_vendor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-multi-roles-vendor-activator.php';
	Multi_Roles_Vendor_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-multi-roles-vendor-deactivator.php
 */
function deactivate_multi_roles_vendor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-multi-roles-vendor-deactivator.php';
	Multi_Roles_Vendor_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_multi_roles_vendor' );
register_deactivation_hook( __FILE__, 'deactivate_multi_roles_vendor' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-multi-roles-vendor.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.1.0
 */
function run_multi_roles_vendor() {

	$plugin = new Multi_Roles_Vendor();
	$plugin->run();

}

run_multi_roles_vendor();
