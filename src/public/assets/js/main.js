/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public\Assets\Js
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

        $privacy_enabled = chapel_cookies_public_js_main_notice.privacy_enabled;

        if(chapel_cookies_public_js_main_notice.privacy_label == '') {
          $privacy_title = "Read our privacy policy.";
        } else {
          $privacy_title = chapel_cookies_public_js_main_notice.privacy_label;
        }

        if(chapel_cookies_public_js_main_notice.privacy_url == '') {
          $privacy_url = document.location.protocol + "//" + document.location.host + "/privacy/";
        } else {
          $privacy_url = chapel_cookies_public_js_main_notice.privacy_url;
        }

        $cookie_enabled = chapel_cookies_public_js_main_notice.cookie_enabled;

        if(chapel_cookies_public_js_main_notice.cookie_label == '') {
          $cookie_title = "Find out how to manage cookies.";
        } else {
          $cookie_title = chapel_cookies_public_js_main_notice.cookie_label;
        }

        if(chapel_cookies_public_js_main_notice.privacy_url == '') {
          $cookie_url = document.location.protocol + "//" + document.location.host + "/cookies/";
        } else {
          $cookie_url = chapel_cookies_public_js_main_notice.privacy_url;
        }

        $title = chapel_cookies_public_js_main_notice.title;
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
            $o =  '<div id="cc_status" class="notice"><h4>' + $title + '</h4>';
              $o += '<p>' + $message + '</p>';
              $o += '<span class="exit">' + $label + '</span><br>';
              $o += '<span class="small">';
              if($privacy_enabled == "on") {
                $o += '<a href="' + $privacy_url + '" target="_blank">' + $privacy_title + '</a><br>';
              }
              if($cookie_enabled == "on") {
                $o += '<a href="' + $cookie_url + '" target="_blank">' + $cookie_title + '</a>';
              }
              $o += '</span>';
            $o += '</div>';
            $('body').append($o);
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
