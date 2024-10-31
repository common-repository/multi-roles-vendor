<?php

/**
 * Fired during plugin activation
 *
 * @link       https://wpwiredin.github.io/plugins/
 * @since      1.1.0
 *
 * @package    Multi_Roles_Vendor
 * @subpackage Multi_Roles_Vendor/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.1.0
 * @package    Multi_Roles_Vendor
 * @subpackage Multi_Roles_Vendor/includes
 * @author     WPWiredIn <wpwiredin@gmail.com>
 */
class Multi_Roles_Vendor_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.1.0
	 */
	public static function activate() {

		/**
		 * Register default user role as a setting.
		 */
		function mrv_register_user_role_setting() {
			register_setting( 'mrv_options_group', 'mrv_user_role'); 
		} 
		add_action( 'admin init', 'mrv_register_user_role_setting' );
		update_option('mrv_user_role', 'dc_vendor');
	}

}
