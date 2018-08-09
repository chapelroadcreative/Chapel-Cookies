<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public
 */

 // 10.1
 function chapel_cookies_register_google_analytics_options() {
 	// plugin options
 	register_setting('chapel_cookies_plugin_google_analytics_options', 'chapel_cookies_google_analytics_enabled');
 	register_setting('chapel_cookies_plugin_google_analytics_options', 'chapel_cookies_google_analytics_tracking_code');
 }

 // 10.2
 function chapel_cookies_register_hotjar_options() {
   // plugin options
   register_setting('chapel_cookies_plugin_hotjar_options', 'chapel_cookies_hotjar_enabled');
   register_setting('chapel_cookies_plugin_hotjar_options', 'chapel_cookies_hotjar_site_id');
 }

 // 10.3
 function chapel_cookies_register_customise_options() {
   // plugin options
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_enable_privacy_page');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_generate_privacy_page');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_override_privacy_page_title');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_override_privacy_page_url');

   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_enable_cookie_page');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_generate_cookie_page');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_override_cookie_page_title');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_override_cookie_page_url');

   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_popup_title');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_content_message');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_content_button_label');

   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_colours_text');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_colours_button_text');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_colours_background');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_colours_highlight');
   register_setting('chapel_cookies_plugin_customise_options', 'chapel_cookies_customise_colours_link');
 }
