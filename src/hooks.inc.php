<?php
/**
 * Chapel Cookies - hooks
 * Version: 1.0.8
 * Created: 19/04/2018
 * Last updated: 19/04/2018
 * Author: Derek O'Brien @ Chapel Road Creative
 * Author URI: http://chapelroadcreative.co.uk
 * Licence: GPL2
 * Licence URI: https://www.gnu.org/gpl-2.0.html
 */



 // 1.1
 // load scripts & stylesheets to public website
 add_action('wp_enqueue_scripts', 'chapel_cookies_public_scripts');

 // 1.2
 // load scripts & stylesheets to wp control panel
 add_action('wp_enqueue_scripts', 'chapel_cookies_private_scripts');

 // 1.3
 // generate front end pages
 register_activation_hook(__FILE__, 'chapel_cookies_create_front_end_pages');

 // 1.4
 // register admin pages
 add_action('admin_menu', 'chapel_cookies_admin_pages');

 // 1.5
 // register google analytics options
 add_action('admin_init', 'chapel_cookies_register_google_analytics_options');

 // 1.6
 // register hotjar options
 add_action('admin_init', 'chapel_cookies_register_hotjar_options');

 // 1.7
 // register plugin options
 add_action('admin_init', 'chapel_cookies_register_customise_options');

 // 1.8
 // register custom css styles for privacy & cookie notice
 add_action('wp_head', 'chapel_cookies_customise_notice');

 //1.9
 // register optional links to plugin page
 add_filter( 'plugin_action_links', 'chapel_cookies_plugin_links', 10, 5 );
 add_filter( 'plugin_row_meta',     'chapel_cookies_plugin_row_meta', 10, 2 );
