<?php
/**
 * Chapel Cookies - shortcodes
 * Version: 1.0.12
 * Created: 19/04/2018
 * Last updated: 19/04/2018
 * Author: Derek O'Brien @ Chapel Road Creative
 * Author URI: http://chapelroadcreative.co.uk
 * Licence: GPL2
 * Licence URI: https://www.gnu.org/gpl-2.0.html
 */

// 2.1
function chapel_cookies_register_shortcodes () {
  add_shortcode('chapel_cookies_cookie_info', 'chapel_cookies_shortcode_cookie_info');
}

// 2.2
function chapel_cookies_shortcode_cookie_info( $args, $content="", $tag="") {

  // normalize attribute keys, lowercase
  $args = array_change_key_case((array)$args, CASE_LOWER);

  // override default attributes with user attributes
  $chapel_cookies_atts = shortcode_atts(
    [
     'classes' => 'chapel_cookies_cookie_info',
    ], $args, $tag
  );

  $o = '<div class="'. esc_html__($chapel_cookies_atts['classes'], 'chapel-cookies') . '">';

  // add content if provided in the shortcode by user
  if( strlen( $content ) ) :
    $o .= '<div class="chapel_cookies_cookie_content">' . wpautop( $content ) . '</div>';
  endif;

  $o .= '</div>';

  return $o;
}
