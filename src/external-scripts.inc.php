<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public
 */

 // 4.1
 function chapel_cookies_public_scripts() {
   // Queue CSS
   wp_enqueue_style( 'chapel_cookies_public_css_main', plugins_url('public/assets/css/main.css', __FILE__), '1.0.2', null );
   wp_enqueue_script('chapel_cookies_public_css_main');

   // Queue JS
   wp_register_script('chapel_cookies_public_vendors_js-cookie_src_js-cookie', plugins_url('public/assets/vendors/js-cookie/src/js.cookie.js', __FILE__), array('jquery'), '2.2.0', true);
   wp_enqueue_script('chapel_cookies_public_vendors_js-cookie_src_js-cookie');

   wp_register_script('chapel_cookies_public_js_main', plugins_url('public/assets/js/main.js', __FILE__), array('jquery'), '1.0.2', true);
   wp_enqueue_script('chapel_cookies_public_js_main');
   $options = chapel_cookies_get_customise_current_options();
   wp_localize_script(
        'chapel_cookies_public_js_main',
        'chapel_cookies_public_js_main_notice',
        array(
          'privacy_enabled' => $options['chapel_cookies_customise_enable_privacy_page'],
          'privacy_label' => $options['chapel_cookies_customise_override_privacy_page_title'],
          'privacy_url' => $options['chapel_cookies_customise_override_privacy_page_url'],

          'cookie_enabled' => $options['chapel_cookies_customise_enable_cookie_page'],
          'cookie_label' => $options['chapel_cookies_customise_override_cookie_page_title'],
          'cookie_url' => $options['chapel_cookies_customise_override_cookie_page_url'],

          'title' => $options['chapel_cookies_customise_popup_title'],
          'message' => $options['chapel_cookies_customise_content_message'],
          'label' => $options['chapel_cookies_customise_content_button_label']
        )
    );
	// USE: var message = chapel_cookies_public_js_main_notice.message;

   // Add Google Analytics if enabled and if tracking code available
   $google_analytics_options = chapel_cookies_get_google_analytics_current_options();
   if($google_analytics_options['chapel_cookies_google_analytics_enabled'] && ( $google_analytics_options['chapel_cookies_google_analytics_tracking_code'] != "" ) ) {
     wp_register_script('chapel_cookies_public_google_analytics', 'https://www.google-analytics.com/analytics.js', array('jquery'), '1.0.0', true);
     wp_enqueue_script('chapel_cookies_public_google_analytics');
     wp_add_inline_script( 'chapel_cookies_public_google_analytics', "
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', '" . $google_analytics_options['chapel_cookies_google_analytics_tracking_code'] . "', 'auto');
            ga('send', 'pageview');
      " );
    }

   // Add Hotjar if enabled and if tracking code available
   $hotjar_options = chapel_cookies_get_hotjar_current_options();
   if($hotjar_options['chapel_cookies_hotjar_enabled'] && ( $hotjar_options['chapel_cookies_hotjar_site_id'] != "" ) ) {

     wp_add_inline_script( 'chapel_cookies_public_js_main', "
       <!-- Hotjar Tracking Code -->
          (function(h,o,t,j,a,r){
              h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
              h._hjSettings={hjid:" . $hotjar_options['chapel_cookies_hotjar_site_id'] . ",hjsv:6};
              a=o.getElementsByTagName('head')[0];
              r=o.createElement('script');r.async=1;
              r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
              a.appendChild(r);
          })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
      " );
    }
 }

 // 4.2
 function chapel_cookies_private_scripts() {

	// JS
	wp_register_script('chapel_cookies_private_js_main', plugins_url('private/assets/js/main.js', __FILE__), array('jquery'),'1.0.0',true);
	wp_enqueue_script('chapel_cookies_private_js_main');

}

// 4.3
function chapel_cookies_customise_notice () {
  $options = chapel_cookies_get_customise_current_options();
  echo '
      <style>
           #cc_status {
            color: ' . $options['chapel_cookies_customise_colours_text'] . ';
            background-color: ' . $options['chapel_cookies_customise_colours_background'] . ';
            border-left: 20px solid ' . $options['chapel_cookies_customise_colours_highlight'] . ';
          }
          #cc_status h4 {
            color: ' . $options['chapel_cookies_customise_colours_highlight'] . ';
          }
          #cc_status .exit {
            border: 2px solid ' . $options['chapel_cookies_customise_colours_button_text'] . ';
            color: ' . $options['chapel_cookies_customise_colours_button_text'] . ';
            background-color: ' . $options['chapel_cookies_customise_colours_highlight'] . ';
          }
          #cc_status .exit:focus,
          #cc_status .exit:hover {
            border: 2px solid ' . $options['chapel_cookies_customise_colours_highlight'] . ';
            color: ' . $options['chapel_cookies_customise_colours_highlight'] . ';
            background-color: ' . $options['chapel_cookies_customise_colours_button_text'] . ';
          }
          #cc_status span.small a {
            color: ' . $options['chapel_cookies_customise_colours_link'] . ';
          }
      </style>';
}
