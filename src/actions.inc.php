<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public
 */

// 5.1
// on init register shortcodes
add_action('init', 'chapel_cookies_register_shortcodes');

// 5.2
// on init register front end pages
add_action('init', 'chapel_cookies_create_front_end_pages');
