<?php
        require_once('wp-load.php');
        // echo $_POST['user-role'];
        // global $wpdb;
        $user_role = sanitize_text_field($_POST['user-role']);
        update_site_option('mrv_user_role', $user_role);

?>