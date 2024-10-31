<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpwiredin.github.io/plugins/
 * @since      1.1.0
 *
 * @package    Multi_Roles_Vendor
 * @subpackage Multi_Roles_Vendor/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.1.0
 * @package    Multi_Roles_Vendor
 * @subpackage Multi_Roles_Vendor/includes
 * @author     WPWiredIn <wpwiredin@gmail.com>
 */
class Multi_Roles_Vendor_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.1.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'multi-roles-vendor',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
