<?php
/**
 * Chapel Cookies - actions
 * Version: 1.0.12
 * Created: 19/04/2018
 * Last updated: 19/04/2018
 * Author: Derek O'Brien @ Chapel Road Creative
 * Author URI: http://chapelroadcreative.co.uk
 * Licence: GPL2
 * Licence URI: https://www.gnu.org/gpl-2.0.html
 */

// 5.1
// on init register shortcodes
add_action('init', 'chapel_cookies_register_shortcodes');

// 5.2
// on init register front end pages
add_action('init', 'chapel_cookies_create_front_end_pages');
