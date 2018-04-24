/**
 * Chapel Cookies - private JS
 * Version: 1.0.8
 * Created: 19/04/2018
 * Last updated: 19/04/2018
 * Author: Derek O'Brien @ Chapel Road Creative
 * Author URI: http://chapelroadcreative.co.uk
 * Licence: GPL2
 * Licence URI: https://www.gnu.org/gpl-2.0.html
 */

// wait until the page and jQuery have loaded before running the code below
jQuery(document).ready(function($){

	// stop our admin menus from collapsing
	if( $('body[class*=" chapel_cookies_"]').length || $('body[class*=" post-type-chapel_cookies_"]').length ) {

		$slb_menu_li = $('#toplevel_page_chapel_cookies_admin_page_dashboard');

		$slb_menu_li
		.removeClass('wp-not-current-submenu')
		.addClass('wp-has-current-submenu')
		.addClass('wp-menu-open');

		$('a:first',$slb_menu_li)
		.removeClass('wp-not-current-submenu')
		.addClass('wp-has-submenu')
		.addClass('wp-has-current-submenu')
		.addClass('wp-menu-open');

	}

});
