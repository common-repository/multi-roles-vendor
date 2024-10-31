<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://wpwiredin.github.io/plugins/
 * @since      1.1.0
 *
 * @package    Multi_Roles_Vendor
 * @subpackage Multi_Roles_Vendor/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Multi_Roles_Vendor
 * @subpackage Multi_Roles_Vendor/admin
 * @author     WPWiredIn <wpwiredin@gmail.com>
 */
class Multi_Roles_Vendor_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.1.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.1.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Multi_Roles_Vendor_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Multi_Roles_Vendor_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name.'-admin', plugin_dir_url( __FILE__ ) . 'css/multi-roles-vendor-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bulma', plugin_dir_url( __FILE__ ) . 'css/bulma.css', array(), '*', 'all' );
		wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'css/bulma.css', array(), '*', 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Multi_Roles_Vendor_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Multi_Roles_Vendor_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/multi-roles-vendor-admin.js', array( 'jquery' ), $this->version, false );

	}

	function create_menu() 
	{
		function mrv_register_menu_page() {
			add_menu_page(
				'Multi Roles Vendor',
				'Multi Roles Vendor',
				'manage_options',
				'multi_roles_vendor_main_menu',
				'main_menu_page',
				'dashicons-groups',
				72
			);
		}

		function main_menu_page() 
		{
			include("partials/multi-roles-vendor-admin-display.php"); 
		}
		add_action( 'admin_menu', 'mrv_register_menu_page' );
	}

}
