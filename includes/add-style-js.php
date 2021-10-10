<?php 
if ( !function_exists( 'get_current_screen' ) ) { 
    require_once ABSPATH . '/wp-admin/includes/screen.php'; 
 } 
add_action('admin_enqueue_scripts', 'callback_for_setting_up_scripts');
function callback_for_setting_up_scripts($hook_suffix) {
   if($hook_suffix == 'toplevel_page_prayers-timings'){ 
       wp_register_style( 'prayer-timings-admin', plugin_dir_url(__DIR__).'admin/css/admin-style.css' );
       wp_enqueue_style('prayer-timings-admin');
   }
}


?>