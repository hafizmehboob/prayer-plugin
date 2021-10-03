<?php
if(!defined('WP_UNINSTALL_PLUGIN')){
   die;
}
$option_name = 'prayers-timings';
delete_option($option_name);
?>