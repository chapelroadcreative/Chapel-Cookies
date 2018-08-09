<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public
 */

// 3.1
function chapel_cookies_admin_pages () {

  /* main menu */

  $top_menu_item = 'chapel_cookies_admin_page_dashboard';

  add_menu_page( '', 'Chapel Cookies', 'manage_options', 'chapel_cookies_admin_page_dashboard', 'chapel_cookies_admin_page_dashboard', 'dashicons-thumbs-up', 99 );

  /* submenu items */

  // dashboard
  add_submenu_page( $top_menu_item, '', 'Dashboard', 'manage_options', $top_menu_item, $top_menu_item );

  // Customise
  add_submenu_page( $top_menu_item, '', 'Customise', 'manage_options', 'chapel_cookies_admin_customise', 'chapel_cookies_admin_customise' );

  // Google Analytics
  add_submenu_page( $top_menu_item, '', 'Google Analytics', 'manage_options', 'chapel_cookies_admin_page_google_analytics', 'chapel_cookies_admin_page_google_analytics' );

  // Hotjar
  add_submenu_page( $top_menu_item, '', 'Hotjar', 'manage_options', 'chapel_cookies_admin_page_hotjar', 'chapel_cookies_admin_page_hotjar' );

}

// 3.2
function chapel_cookies_plugin_links ( $actions, $plugin_file ) {

 $action_links = array(

   'settings' => array(
      'label' => __('Settings', 'chapel-cookies'),
      'url'   => get_admin_url(null, 'options-general.php?page=chapel_cookies_admin_page_dashboard')
      )
    );

  return chapel_cookies_plugin_action_links( $actions, $plugin_file, $action_links, 'before');
}

// 3.3
function chapel_cookies_plugin_row_meta ( $actions, $plugin_file ) {

 $action_links = array(

   'contact' => array(
      'label' => __('Contact', 'chapel-cookies'),
      'url'   => 'http://chapelroadcreative.co.uk/contact---chapel-road-creative--marketing-agency-king-s-lynn-north-norfolk--branding-king-s-lynn-north-norfolk.html'
    ));

  return chapel_cookies_plugin_action_links( $actions, $plugin_file, $action_links, 'after');
}
