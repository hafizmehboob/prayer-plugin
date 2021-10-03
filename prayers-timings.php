<?php
/**
* Plugin Name: Prayers Timings
* Plugin URI: http://www.glowing-tips.com/
* Description: This is the prayers timings plugin based on aladhan API.
* Version: 1.0
* Requires at least: 5.2
* Author: Hafiz Abubakar Mehboob
* Author URI: http://glowing-tips.com/
* Text Domain: prayers-timings
**/
register_activation_hook(__FILE__,'my_plugin_activate');
  function my_plugin_activate(){
    
    
  }
  function sample_admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Thanks For Using Our Plugin', 'prayers-timings' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );
?>