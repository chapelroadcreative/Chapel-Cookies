<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Main
 * @copyright Copyright (C) 2018, Derek O'Brien @ Chapel Road Creative - plugins@chapelroadcreative.co.uk
 * @license https://www.gnu.org/gpl-2.0.html GNU General Public License, version 3 or higher
 *
 Plugin Name: Chapel Cookies
 Plugin URI: http://plugins.chapelroadcreative.co.uk/chapel-cookies
 Description: Plugin to assist with EU cookie law compliance, displays cookie notice with links to privacy notice and cookie management information.
 Version: 1.0.13
 Author: Derek O'Brien @ Chapel Road Creative
 Author URI: http://chapelroadcreative.co.uk
 Text Domain: chapel-cookies
 Domain Path: /languages
 Licence: GPL2
 Licence URI: https://www.gnu.org/gpl-2.0.html
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/*  !0. Table of contents
    ====================================
    1. Hooks
      1.1 - load scripts & stylesheets to public website
      1.2 - load scripts & stylesheets to wp control panel
      1.3 - generate front end pages
      1.4 - register admin pages
      1.5 - register google analytics options
      1.6 - register hotjar options
      1.7 - register plugin options
      1.8 - register custom css styles for privacy & cookie notice
      1.9 - register optional links to plugin page
    2. Shortcodes
      2.1 - chapel_cookies_register_shortcodes();
      2.2 - chapel_cookies_shortcode_cookie_info();
    3. Filters
      3.1 - chapel_cookies_admin_pages();
      3.2 - chapel_cookies_plugin_links( $actions, $plugin_file );
      3.3 - chapel_cookies_plugin_row_meta ( $actions, $plugin_file );
    4. External scripts
      4.1 - chapel_cookies_public_scripts();
      4.2 - chapel_cookies_private_scripts();
    5. Actions
      5.1 - on init register shortcodes
      5.2 - on init register front end pages
    6. Helpers
      6.1 - chapel_cookies_get_google_analytics_current_options();
      6.2 - chapel_cookies_google_analytics_get_option( $option_name );
      6.3 - chapel_cookies_get_google_analytics_default_options();
      6.4 - chapel_cookies_get_hotjar_current_options();
      6.5 - chapel_cookies_get_hotjar_option( $option_name );
      6.6 - chapel_cookies_get_hotjar_default_options();
      6.7 - chapel_cookies_get_customise_current_options();
      6.8 - chapel_cookies_get_customise_option( $option_name );
      6.9 - chapel_cookies_get_customise_default_options();
      6.10 - chapel_cookies_plugin_action_links ( $actions, $plugin_file,  $action_links = array(), $position = 'after' );
    7. Custom post types
    8. Admin pages
      8.1 - chapel_cookies_admin_page_dashboard();
      8.2 - chapel_cookies_admin_page_oogle_analytics();
      8.3 - chapel_cookies_admin_page_hotjar();
      8.4 - chapel_cookies_admin_customise();
    9. Front end pages
      9.1 - chapel_cookies_create_front_end_pages();
    10. Settings
      10.1 - chapel_cookies_register_google_analytics_options();
      10.2 - chapel_cookies_register_hotjar_options();
      10.3 - chapel_cookies_register_customise_options();

    ====================================
*/

/* !1. Hooks */
include( plugin_dir_path( __FILE__ ) . 'src/hooks.inc.php');
/* !2. Shortcodes */
include( plugin_dir_path( __FILE__ ) . 'src/shortcodes.inc.php');
/* !3. Filters */
include( plugin_dir_path( __FILE__ ) . 'src/filters.inc.php');
/* !4. External scripts */
include( plugin_dir_path( __FILE__ ) . 'src/external-scripts.inc.php');
/* !5. Actions */
include( plugin_dir_path( __FILE__ ) . 'src/actions.inc.php');
/* !6. Helpers */
include( plugin_dir_path( __FILE__ ) . 'src/helpers.inc.php');
/* !7. Custom post types */
include( plugin_dir_path( __FILE__ ) . 'src/custom-post-types.inc.php');
/* !8. Admin pages */
include( plugin_dir_path( __FILE__ ) . 'src/admin-pages.inc.php');
/* !9. Front end pages */
include( plugin_dir_path( __FILE__ ) . 'src/front-end-pages.inc.php');
/* !10. Settings */
include( plugin_dir_path( __FILE__ ) . 'src/settings.inc.php');
