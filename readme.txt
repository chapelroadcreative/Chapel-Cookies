=== Chapel Cookies ===
Contributors: chapelroadcreative
Tags: EU, cookies, privacy, regulations, law.
Requires at least: 4.0
Tested up to: 4.9.8
Requires PHP: 5.6
Stable tag: 1.0.13
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin to help assist in compliance with EU cookie regulations by implementing info pages and a user notice.

== Description ==

Plugin to help assist in compliance with EU cookie regulations by implementing info pages and a user notice.

The plugin can dynamically creates two pages within generic privacy information and user support for cookie management.
Both these pages are linked to within the cookie notice to provide relevant information and support for the website user, either can be hidden if required.

You can also enable Google Analytics and Hotjar tracking within this plugin if required.

Pages:

*   "Privacy Policy" - http://site-domain.com/privacy
*   "Cookies" - http://site-domain/cookies

    Note that some editing of the privacy and cookie pages is required to add relevant information about your website.
    If the privacy or cookie page already exists prior to activating the plugin the original pages will not be overwritten,
    however should you wish to use the pages provided by the plugin you can safely delete your privacy and cookie pages ensuring
    to empty the trash and the plugin will auto generate the plugin pages for you.

    Do not enable Google Analytics or Hotjar in this plugin if they are already enabled on your website whether hardcoded or via another plugins
    as this will cause code conflicts.


== Installation ==

No advanced experience required to install this plugin, install as you would any other simple plugin and edit the privacy and cookie page content to suit.
You can also style the notice should you wish.

e.g.

1. Upload the plugin zip archive to the plugin folder of your website.
2. Unarchive the zip file to expand the plugin.
3. Activate the plugin through the 'Plugins' menu in WordPress by clicking activate.
4. Configure settings in the 'Chapel Cookies - Customise' page where required.
5. If applicable enable and enter codes to enable Google Analytics and Hotjar if required.

== Frequently Asked Questions ==

= Do I have to use Google Analytics or Hotjar? =

No, these are optional and available to allow easy implementation of these services without having to install yet another plugin if you are already using this plugin.

== Support ==

Please direct all support via the support system from where you acquired this plugin, for example if you downloaded this plugin via Wordpress plugin repository please use the plugin page support forum.
If you acquired the plugin directly from Chapel Road Creative please email us at plugins@chapelroadcreative.co.uk referencing your support ID or company name.

== Changelog ==

= 1.0.13 =
* edits made based on WP plugin submission review - modified headers and readme

= 1.0.12 =
* added new setting to style colour of small print links
* restructured order of default settings for css styles
* restyled default settings to be more neutral

= 1.0.11 =
* removed script tags in 'wp_add_inline_script()' in 'inc/external-scripts.php' which were originally added by mistake

= 1.0.10 =
* Added option to change button text colour as highlight colour sometimes clashed with text colour

= 1.0.9 =
* Added option to change pop up title
* Added option to change privacy and cookie link labels

= 1.0.8 =
* Added option to generate front end pages (Privacy and Cookies)
* Added option to display links in notice to front end pages.
* Added option to change link url to front end pages.

= 1.0.7 =
* Added Chapel Cookies logo to plugin and styled plugin dashboard add links to sections.

= 1.0.6 =
* Added links to plugin listing on the plugins page.

= 1.0.5 =
* Added ability to style the Privacy and Cookie notice.

= 1.0.4 =
* Fixed bug where Privacy and Cookie notice would reappear after accepting cookies.

= 1.0.3 =
* Added ability to modify the Privacy and Cookie notice.

= 1.0.2 =
* Added support to add Hotjar to the website.

= 1.0.1 =
* Added support to add Google Analytics to the website.

= 1.0.0 =
* Initial release
