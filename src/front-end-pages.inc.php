<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public
 */

 require_once plugin_dir_path( __FILE__ ) . 'data/cookies.inc.php';
 require_once plugin_dir_path( __FILE__ ) . 'data/privacy.inc.php';

// 9.1
function chapel_cookies_create_front_end_pages () {

  $cookies_options = chapel_cookies_get_customise_current_options();

  if($cookies_options['chapel_cookies_customise_generate_cookie_page']) {

    // Create cookie page
    $cookie_page = array (
      'slug' => sanitize_title('Cookies'),
      'title' => 'Cookies',
      'content' => wp_kses_post( balanceTags( chapel_cookies_get_cookie_page_data(), true ) ),
      'template' => ''
    );

    // Get page data if available
    $page_check = null;
    $page_check = get_page_by_title( $cookie_page['title'] );

    // Prepare new page data
    $new_page = array (
      'post_type' 	=> 'page',
      'post_title' => $cookie_page['title'],
      'post_name'	 => $cookie_page['slug'],
      'post_content' => $cookie_page['content'],
      'post_author' => 1,
      'post_status' => 'publish',
      'comment_status' => 'closed',
      'ping_status' => 'closed',
      'menu_order' => 0
    );

    // Create page if page not already exists
    if( !isset( $page_check->ID ) ) {
      $new_page_id = wp_insert_post( $new_page );
      // Apply template if one associated
      if(!empty( $cookie_page['template'] ) )
      {
        update_post_meta($new_page_id, '_wp_page_template', $cookie_page['template']);
      }
    }

  }

  if($cookies_options['chapel_cookies_customise_generate_privacy_page']) {
    // Create privacy policy page
    $privacy_page = array (
      'slug' => sanitize_title('Privacy Policy'),
      'title' => 'Privacy Policy',
      'content' => wp_kses_post( balanceTags( chapel_cookies_get_privacy_page_data(), true ) ),
      'template' => ''
    );


    // Get page data if available
    $page_check = null;
    $page_check = get_page_by_title( $privacy_page['title'] );

    // Prepare new page data
    $new_page = array (
      'post_type' 	=> 'page',
      'post_title' => $privacy_page['title'],
      'post_name'	 => $privacy_page['slug'],
      'post_content' => $privacy_page['content'],
      'post_author' => 1,
      'post_status' => 'publish',
      'comment_status' => 'closed',
      'ping_status' => 'closed',
      'menu_order' => 0
    );

    // Create page if page not already exists
    if( !isset( $page_check->ID ) ) {
      $new_page_id = wp_insert_post( $new_page );
      // Apply template if one associated
      if(!empty( $privacy_page['template'] ) )
      {
        update_post_meta($new_page_id, '_wp_page_template', $privacy_page['template']);
      }
    }

  }
}
