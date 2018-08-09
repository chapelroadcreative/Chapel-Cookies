<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public
 */

 // 6.1
 function chapel_cookies_get_google_analytics_current_options() {

 	// setup our return variable
 	$current_options = array();

 	try {

 		// build our current options associative array
 		$current_options = array(
 			'chapel_cookies_google_analytics_enabled' => chapel_cookies_google_analytics_get_option('chapel_cookies_google_analytics_enabled'),
 			'chapel_cookies_google_analytics_tracking_code' => chapel_cookies_google_analytics_get_option('chapel_cookies_google_analytics_tracking_code'),
 		);

 	} catch( Exception $e ) {

 		// php error

 	}

 	// return current options
 	return $current_options;

 }

 // 6.2
 function chapel_cookies_google_analytics_get_option( $option_name ) {

	// setup return variable
	$option_value = '';


	try {

		// get default option values
		$defaults = chapel_cookies_get_google_analytics_default_options();

		// get the requested option
		switch( $option_name ) {
			case 'chapel_cookies_google_analytics_enabled':
				// Google Analytics status
				$option_value = (get_option('chapel_cookies_google_analytics_enabled')) ? get_option('chapel_cookies_google_analytics_enabled') : $defaults['chapel_cookies_google_analytics_enabled'];
				break;
			case 'chapel_cookies_google_analytics_tracking_code':
				// Google Analytics tracking code
				$option_value = (get_option('chapel_cookies_google_analytics_tracking_code')) ? get_option('chapel_cookies_google_analytics_tracking_code') : $defaults['chapel_cookies_google_analytics_tracking_code'];
				break;
		}

	} catch( Exception $e) {

		// php error

	}

	// return option value or it's default
	return $option_value;

}

// 6.3
function chapel_cookies_get_google_analytics_default_options() {

	$defaults = array();

	try {

		// setup defaults array
		$defaults = array(
			'chapel_cookies_google_analytics_enabled'=> 0,
			'chapel_cookies_google_analytics_tracking_code'=> '',
		);

	} catch( Exception $e) {

		// php error

	}

	// return defaults
	return $defaults;


}

// 6.4
function chapel_cookies_get_hotjar_current_options() {

 // setup our return variable
 $current_options = array();

 try {

   // build our current options associative array
   $current_options = array(
     'chapel_cookies_hotjar_enabled' => chapel_cookies_get_hotjar_option('chapel_cookies_hotjar_enabled'),
     'chapel_cookies_hotjar_site_id' => chapel_cookies_get_hotjar_option('chapel_cookies_hotjar_site_id'),
   );

 } catch( Exception $e ) {

   // php error

 }

 // return current options
 return $current_options;

}

// 6.5
function chapel_cookies_get_hotjar_option( $option_name ) {

 // setup return variable
 $option_value = '';


 try {

   // get default option values
   $defaults = chapel_cookies_get_hotjar_default_options();

   // get the requested option
   switch( $option_name ) {
     case 'chapel_cookies_hotjar_enabled':
       // Hotjar status
       $option_value = (get_option('chapel_cookies_hotjar_enabled')) ? get_option('chapel_cookies_hotjar_enabled') : $defaults['chapel_cookies_hotjar_enabled'];
       break;
     case 'chapel_cookies_hotjar_site_id':
       // Hotjar site id
       $option_value = (get_option('chapel_cookies_hotjar_site_id')) ? get_option('chapel_cookies_hotjar_site_id') : $defaults['chapel_cookies_hotjar_site_id'];
       break;
   }

 } catch( Exception $e) {

   // php error

 }

 // return option value or it's default
 return $option_value;

}

// 6.6
function chapel_cookies_get_hotjar_default_options() {

 $defaults = array();

 try {

   // setup defaults array
   $defaults = array(
     'chapel_cookies_hotjar_enabled'=> 0,
     'chapel_cookies_hotjar_site_id'=> '',
   );

 } catch( Exception $e) {

   // php error

 }

 // return defaults
 return $defaults;


}

// 6.7
function chapel_cookies_get_customise_current_options() {

 // setup our return variable
 $current_options = array();

 try {

   // build our current options associative array
   $current_options = array(
     // Privacy Page
     'chapel_cookies_customise_enable_privacy_page' => chapel_cookies_get_customise_option('chapel_cookies_customise_enable_privacy_page'),
     'chapel_cookies_customise_generate_privacy_page' => chapel_cookies_get_customise_option('chapel_cookies_customise_generate_privacy_page'),
     'chapel_cookies_customise_override_privacy_page_title' => chapel_cookies_get_customise_option('chapel_cookies_customise_override_privacy_page_title'),
     'chapel_cookies_customise_override_privacy_page_url' => chapel_cookies_get_customise_option('chapel_cookies_customise_override_privacy_page_url'),

     // Cookie Page
     'chapel_cookies_customise_enable_cookie_page' => chapel_cookies_get_customise_option('chapel_cookies_customise_enable_cookie_page'),
     'chapel_cookies_customise_generate_cookie_page' => chapel_cookies_get_customise_option('chapel_cookies_customise_generate_cookie_page'),
     'chapel_cookies_customise_override_cookie_page_title' => chapel_cookies_get_customise_option('chapel_cookies_customise_override_cookie_page_title'),
     'chapel_cookies_customise_override_cookie_page_url' => chapel_cookies_get_customise_option('chapel_cookies_customise_override_cookie_page_url'),

     // Copy
     'chapel_cookies_customise_popup_title' => chapel_cookies_get_customise_option('chapel_cookies_customise_popup_title'),
     'chapel_cookies_customise_content_message' => chapel_cookies_get_customise_option('chapel_cookies_customise_content_message'),
     'chapel_cookies_customise_content_button_label' => chapel_cookies_get_customise_option('chapel_cookies_customise_content_button_label'),

     // Styling
     'chapel_cookies_customise_colours_text' => chapel_cookies_get_customise_option('chapel_cookies_customise_colours_text'),
     'chapel_cookies_customise_colours_button_text' => chapel_cookies_get_customise_option('chapel_cookies_customise_colours_button_text'),
     'chapel_cookies_customise_colours_background' => chapel_cookies_get_customise_option('chapel_cookies_customise_colours_background'),
     'chapel_cookies_customise_colours_highlight' => chapel_cookies_get_customise_option('chapel_cookies_customise_colours_highlight'),
     'chapel_cookies_customise_colours_link' => chapel_cookies_get_customise_option('chapel_cookies_customise_colours_link'),
   );

 } catch( Exception $e ) {

   // php error

 }

 // return current options
 return $current_options;

}

// 6.8
function chapel_cookies_get_customise_option( $option_name ) {

 // setup return variable
 $option_value = '';


 try {

   // get default option values
   $defaults = chapel_cookies_get_customise_default_options();

   // get the requested option
   switch( $option_name ) {

     // Privacy Page
     case 'chapel_cookies_customise_enable_privacy_page':
       // enable privacy notice?
       $option_value = (get_option('chapel_cookies_customise_enable_privacy_page')) ? get_option('chapel_cookies_customise_enable_privacy_page') : $defaults['chapel_cookies_customise_enable_privacy_page'];
       break;
     case 'chapel_cookies_customise_generate_privacy_page':
       // auto generate privacy page?
       $option_value = (get_option('chapel_cookies_customise_generate_privacy_page')) ? get_option('chapel_cookies_customise_generate_privacy_page') : $defaults['chapel_cookies_customise_generate_privacy_page'];
       break;
     case 'chapel_cookies_customise_override_privacy_page_title':
       // Privacy link label (leave blank for default)
       $option_value = (get_option('chapel_cookies_customise_override_privacy_page_title')) ? get_option('chapel_cookies_customise_override_privacy_page_title') : $defaults['chapel_cookies_customise_override_privacy_page_title'];
       break;
     case 'chapel_cookies_customise_override_privacy_page_url':
       // URI to privacy page if not site root (leave blank for default location)
       $option_value = (get_option('chapel_cookies_customise_override_privacy_page_url')) ? get_option('chapel_cookies_customise_override_privacy_page_url') : $defaults['chapel_cookies_customise_override_privacy_page_url'];
       break;

     // Cookie Page
     case 'chapel_cookies_customise_enable_cookie_page':
       // enable cookie notice?
       $option_value = (get_option('chapel_cookies_customise_enable_cookie_page')) ? get_option('chapel_cookies_customise_enable_cookie_page') : $defaults['chapel_cookies_customise_enable_cookie_page'];
       break;
     case 'chapel_cookies_customise_generate_cookie_page':
       // auto generate cookie page?
       $option_value = (get_option('chapel_cookies_customise_generate_cookie_page')) ? get_option('chapel_cookies_customise_generate_cookie_page') : $defaults['chapel_cookies_customise_generate_cookie_page'];
       break;
     case 'chapel_cookies_customise_override_cookie_page_title':
       // Cookie link label (leave blank for default)
       $option_value = (get_option('chapel_cookies_customise_override_cookie_page_title')) ? get_option('chapel_cookies_customise_override_cookie_page_title') : $defaults['chapel_cookies_customise_override_cookie_page_title'];
       break;
     case 'chapel_cookies_customise_override_cookie_page_url':
       // URI to cookie page if not site root (leave blank for default location)
       $option_value = (get_option('chapel_cookies_customise_override_cookie_page_url')) ? get_option('chapel_cookies_customise_override_cookie_page_url') : $defaults['chapel_cookies_customise_override_cookie_page_url'];
       break;

     // Copy
     case 'chapel_cookies_customise_popup_title':
       // Pop up title (leave blank for default)
       $option_value = (get_option('chapel_cookies_customise_popup_title')) ? get_option('chapel_cookies_customise_popup_title') : $defaults['chapel_cookies_customise_popup_title'];
       break;
     case 'chapel_cookies_customise_content_message':
       // notice message
       $option_value = (get_option('chapel_cookies_customise_content_message')) ? get_option('chapel_cookies_customise_content_message') : $defaults['chapel_cookies_customise_content_message'];
       break;
     case 'chapel_cookies_customise_content_button_label':
       // notice button label
       $option_value = (get_option('chapel_cookies_customise_content_button_label')) ? get_option('chapel_cookies_customise_content_button_label') : $defaults['chapel_cookies_customise_content_button_label'];
       break;

     // Styling
     case 'chapel_cookies_customise_colours_text':
       // notice text colour
       $option_value = (get_option('chapel_cookies_customise_colours_text')) ? get_option('chapel_cookies_customise_colours_text') : $defaults['chapel_cookies_customise_colours_text'];
       break;
    case 'chapel_cookies_customise_colours_button_text':
       // notice button label colour
       $option_value = (get_option('chapel_cookies_customise_colours_button_text')) ? get_option('chapel_cookies_customise_colours_button_text') : $defaults['chapel_cookies_customise_colours_button_text'];
       break;
     case 'chapel_cookies_customise_colours_background':
       // notice background color
       $option_value = (get_option('chapel_cookies_customise_colours_background')) ? get_option('chapel_cookies_customise_colours_background') : $defaults['chapel_cookies_customise_colours_background'];
       break;
     case 'chapel_cookies_customise_colours_highlight':
       // notice highlight colour
       $option_value = (get_option('chapel_cookies_customise_colours_highlight')) ? get_option('chapel_cookies_customise_colours_highlight') : $defaults['chapel_cookies_customise_colours_highlight'];
       break;
     case 'chapel_cookies_customise_colours_link':
       // notice highlight colour
       $option_value = (get_option('chapel_cookies_customise_colours_link')) ? get_option('chapel_cookies_customise_colours_link') : $defaults['chapel_cookies_customise_colours_link'];
       break;
   }

 } catch( Exception $e) {

   // php error

 }

 // return option value or it's default
 return $option_value;

}

// 6.9
function chapel_cookies_get_customise_default_options() {

 $defaults = array();

 try {

   // setup defaults array
   $defaults = array(

     'chapel_cookies_customise_enable_privacy_page'=> 0,
     'chapel_cookies_customise_generate_privacy_page'=> 0,
     'chapel_cookies_customise_override_privacy_page_title'=> 'Read our privacy policy.',
     'chapel_cookies_customise_override_privacy_page_url'=> '',

     'chapel_cookies_customise_enable_cookie_page'=> 0,
     'chapel_cookies_customise_generate_cookie_page'=> 0,
     'chapel_cookies_customise_override_cookie_page_title'=> 'Find out how to manage cookies.',
     'chapel_cookies_customise_override_cookie_page_url'=> '',

     'chapel_cookies_customise_popup_title'=> 'Privacy and cookies',
     'chapel_cookies_customise_content_message'=> 'We use cookies (“cookies”) to help give you the best experience on our site.<br>If you continue to use this site, we’ll assume that you’re happy for us to use cookies.',
     'chapel_cookies_customise_content_button_label'=> 'agree and close',

     'chapel_cookies_customise_colours_highlight'=> '#cccccc',
     'chapel_cookies_customise_colours_text'=> '#4a4a4a',
     'chapel_cookies_customise_colours_background'=> '#ffffff',
     'chapel_cookies_customise_colours_button_text'=> '#ffffff',
     'chapel_cookies_customise_colours_link'=> '#cccccc',
   );

 } catch( Exception $e) {

   // php error

 }

 // return defaults
 return $defaults;


}

//6.10
function  chapel_cookies_plugin_action_links ( $actions, $plugin_file,  $action_links = array(), $position = 'after' ) {

  static $plugin;

  if( !isset($plugin) ) {
      $plugin = 'chapel-cookies/chapel-cookies.php';
  }

  if( $plugin == $plugin_file && !empty( $action_links ) ) {

     foreach( $action_links as $key => $value ) {

        $link = array( $key => '<a href="' . $value['url'] . '">' . $value['label'] . '</a>' );

         if( $position == 'after' ) {

            $actions = array_merge( $actions, $link );

         } else {

            $actions = array_merge( $link, $actions );
         }


      } //foreach

  } // if

  return $actions;

}
