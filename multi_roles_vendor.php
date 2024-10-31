<?php

/**
 * Plugin Name: Multi Roles Vendor
 * Plugin URI: https://wpwiredin.github.io/plugins/
 * Author: WPWiredIn Studio
 * Description: User Role assigment Plugin for WooCommerce Multivendor Sites (Only WCMP Supported)
 * Version: 1.0.0
 * License: GPLv
 * Text Domain: multirolesvendor
 */


add_action( 'user_register', 'wpwirein_signup_roles');
 
function wpwirein_signup_roles( $user_id ) {
 
	$user = new WP_User( $user_id ); 
	
    if ( isset( $user ) )
        $user->add_role( 'dc_vendor' ); 
 
}

?>