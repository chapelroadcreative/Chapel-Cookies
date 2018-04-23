/**
* Chapel Cookies - public JS
* Version: 1.0.6
* Created: 19/04/2018
* Last updated: 19/04/2018
* Author: Derek O'Brien @ Chapel Road Creative
* Author URI: http://chapelroadcreative.co.uk
* Licence: GPL2
* Licence URI: https://www.gnu.org/gpl-2.0.html
*
* Dependancies:
* jQuery - http://jquery.com/
* jQuery Cookies PLugin - https://github.com/js-cookie/js-cookie
*
* Variables:
* $DBug - debug status (removes cookie after updating)
* $privacy - URL to site privacy policy.
* $cookies - URL to site cookie policy.
* $message - Privacy/Cookie notice message.
* $label - Privacy/Cookie notice agreement button label.
*/

    var $ = jQuery.noConflict();
    $( document ).ready(function() {

        $DBug = false;
        $privacy = document.location.protocol + "//" + document.location.host + "/privacy/";
        $cookies = document.location.protocol + "//" + document.location.host + "/cookies/";
        $message = chapel_cookies_public_js_main_notice.message;
        $label = chapel_cookies_public_js_main_notice.label;
        $h = $('#cc_status').height() - 15;

        $( window ).resize(function() {
          doCC();
        });
        doCC();

        function doCC() {
          if(Cookies.get('cc_status') != 'true') {
              addCC();
          } else {
              Cookies.set('cc_status', 'true', { expires: 365, path: '/' });
              if($DBug) { Cookies.remove('cc_status'); }
          }
        }

        function addCC () {
            removeCC(); // if exists

            $('body').append(
                '<div id="cc_status" class="notice"><h4>Privacy and cookies</h4><p>' + $message + '</p><span class="exit">' + $label + '</span><br><span class="small"><a href="' + $privacy + '" target="_blank">Read our privacy policy</a><br><a href="' + $cookies + '" target="_blank">Find out how to manage cookies.</a></span></div>'
            );
            $('#cc_status span.exit').on('click', closeCC);
            $h = $('#cc_status').height() - 15;

            $('#cc_status').css( { 'opacity': 0, bottom: -$h } ).stop( true, true ).delay(3000).animate({
                opacity: 1,
                }, 300,
                function() {
                $('#cc_status').off(); // remove all events if exist and set up new
                $('#cc_status').hover(
                    function () {
                    $('#cc_status').stop( true, true ).delay(300).animate({
                        bottom: 0,
                        }, 300);
                }).mouseleave(
                    function() {
                    $('#cc_status').stop( true, true ).delay(300).animate({
                        bottom: -$h,
                        }, 300);
                });
            });
        }

        function removeCC () {
            $('#cc_status').remove();
        }

        function closeCC () {
            Cookies.set('cc_status', 'true', { expires: 365, path: '/' });
            removeCC();
            $('body').append('<div id="cc_status" class="accepted"><h4>Cookies accepted</h4>Thank you, please enjoy the website.</div>');
            $('#cc_status').delay(2000).fadeOut(function () {
               removeCC();
            });
        }
    });
