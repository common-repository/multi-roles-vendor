<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://wpwiredin.github.io/plugins/
 * @since      1.1.0
 *
 * @package    Multi_Roles_Vendor
 * @subpackage Multi_Roles_Vendor/admin/partials
 */
?>

<?php 
    $marketplace_providers = [
        'wcmp' => 'WCMP', 'wcfm' => 'WCFM', 'dokan' => 'Dokan'
    ];

    $wcmp_roles = [
        'dc_vendor' => 'Vendor', 
        'dc_pending_vector' => 'Pending Vendor'
    ];

    $wcfm_roles = [
        'wcfm_vendor' => 'Vendor'
    ];

    $dokan_roles = [
        'seller' => 'Seller'
    ];

    $mp_provider = 'wcmp';

    $role_options = array_replace([], $wcmp_roles);

    $selected = '';
?>

<!-- Main Admin Menu Page -->
<div class="container mt-5 is-mobile">
  <div class="notification is-primary centered is-mobile">
    You have activated <strong>Multi Roles Vendor</strong> plugin, you can now customize your options.
  </div>
</div>
<fieldset>
<div class="container is-mobile main-section">
  <div class="centered is-mobile">
  <section class="section is-medium is-mobile">
  <h1 class="title">Vendor User Roles Settings</h1>
  <h2 class="subtitle">
    The Settings in this Section Will determine what roles will be assigned to new Users upon Registration.
  </h2>
  <hr />
  <form method="POST" target="_self" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" >
  <div class="menu-items mb-5 px-5">
 
      <div class="provider-menu mr-5">
      
        <label class="mr-5"><strong>Choose Marketplace Provider</strong></label>
        
        <select class="" id="dropdown-menu-providers" role="menu">
        <?php foreach($marketplace_providers as $provider => $label) : ?>     
                <option value="<?php echo $provider; $mp_provider = $provider; ?>" 
                <?php echo $provider == 'wcmp' ? "selected" : ""; ?> class="dropdown-item">
                    <?php echo $label; ?>
                </option>
        <?php endforeach; ?>
        </select>
      </div>
      <?php //$user_role_setting = get_option('mrv_user_role', false); echo $user_role_setting; ?>
      <?php 
         // global $wpdb;
         // $results = $wpdb->get_results("SELECT option_value FROM wp_options WHERE option_name = 'mrv_user_role' LIMIT 1");
         // echo var_dump($results);
      ?>
      <div class="role-menu">
      <label class="mr-5"><strong>Select Default Role</strong></label>
            <select class="" id="dropdown-menu-roles" role="menu" name="user-role">
            <?php foreach($role_options as $role_option => $label) : ?>
                <option value="<?php echo $role_option; ?>" class="dropdown-item">
                    <?php echo $label; ?>
                </option>
            <?php endforeach; ?>
   </select>        
      </div>
  </div>
  <input type="hidden" name="action" value="mrv_form">
  <button type="submit" class="button is-medium is-mobile is-primary mt-5 btn-save">Save Options</button>
  <div id="save-alert"></div>
</form>
</section>
  </div>
</div>
</fieldset>

<script type="text/javascript">
    var providers_menu = document.getElementById('dropdown-menu-providers');
    var roles_menu = document.getElementById('dropdown-menu-roles');
  
    providers_menu.onchange = function() {
        if(providers_menu.value ==='wcmp') {
          console.log(providers_menu.value);
          window.location.reload();
        } else if (providers_menu.value === 'wcfm') {
          console.log(providers_menu.value);
          roles_menu[0].value = "wcfm_vendor";
          roles_menu[1].remove();
          roles_menu[2].remove();
        } else if (providers_menu.value === 'dokan') {
          console.log(providers_menu.value);
          roles_menu[0].value = "seller";
          roles_menu[1].remove();
          roles_menu[2].remove();
        }
    }


</script>