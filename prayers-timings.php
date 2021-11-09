<?php
/**
 * Plugin Name: Prayers Timings
 * Plugin URI: http://www.glowing-tips.com/
 * Description: This is the prayers timings plugin based on aladhan API.
 * Version: 1.0
 * Requires at least: 5.2
 * Author: Hafiz Abubakar Mehboob
 * Author URI: http://glowing-tips.com/
 * License: GPLv2 or later
 * Text Domain: prayers-timings 
 */
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

/* register_activation_hook(__FILE__,'my_plugin_activate');
  function my_plugin_activate(){


  } */
include_once 'includes/add-style-js.php';
function sample_admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('Thanks For Using Our Plugin', 'prayers-timings'); ?></p>
    </div>
    <?php
}
add_action('admin_notices', 'sample_admin_notice__success');
add_action('admin_menu', 'prayers_timings_plugin_create_menu');
function prayers_timings_plugin_create_menu() {
    add_menu_page('Prayers Timings',
            'Prayer Time',
            'administrator',
            sanitize_key('prayers-timings'),
            'my_cool_plugin_settings_page',
            plugin_dir_url(__FILE__) . 'images/islamic.png',
            20);
    add_action('admin_init', 'register_prayers_timings_plugin_settings');
}
function register_prayers_timings_plugin_settings(){
    register_setting('prayers-timings-settings-group','new_option_name');
    register_setting('prayers-timings-settings-group','select_country');
    register_setting('prayers-timings-settings-group','select_city');
}
function my_cool_plugin_settings_page(){
    ?>
    <div class="wrap">
        <h1>Prayers Timings</h1>
        <h2>Create Your Shortcode on City Base.</h2>
        <form method="post" action="options.php">
            <?php settings_fields('prayers-timings-settings-group'); ?>
            <?php do_settings_sections('prayers-timings-settings-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Select Country</th>
                    <td><?php include_once 'includes/countries-list.php'; ?></td>
                </tr>
                 <tr valign="top">
                    <th scope="row">Select City</th>
                    <td><select name="select_city" id="cities_names" class="cities_names">
                            <option value="" >City</option>
                        </select></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php 

} 
?>