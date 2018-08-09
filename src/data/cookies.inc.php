<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Data
 */

function chapel_cookies_get_cookie_page_data() {
  return <<<EOD
<p>This website uses cookies to better the users experience while visiting the website. As required by legislation, this website requests the user to give explicit permission for saving cookies on their computer / device.</p>
<h2>What are cookies</h2>
<p>Cookies are small files saved to the user's computers hard drive that track, save and store information about the user's interactions and usage of the website. This allows the website, through its server to provide the users with a tailored experience within this website. Users are advised that if they wish to deny the use and saving of cookies from this website on to their computers hard drive they should take necessary steps within their web browsers security settings to block all cookies from this website and its external serving vendors or use the cookie control system if available upon their first visit.</p>
<h2>Website visitor tracking</h2>
<p>This website uses tracking software to monitor its visitors to better understand how they use it. The software will save a cookie to your computers hard drive in order to track and monitor your engagement and usage of the website, but will not store, save or collect personal information.</p>
<h3>Google analytics</h3>
<p>We use Google Analytics to anonymously record user data that helps us to understand how our website is used. This data may include your location, the time and duration of your visit, your behaviour on the site, the type of device you’re using and its operating system.</p>
<p>Information about our use of the Google Analytics service and how this data is processed by Google is available here: www.google.com/policies/privacy/partners/</p>
<p>You can opt out of Google Analytics tracking by clicking the link below: </p>
<p>Opt out of Google Analytics tracking</p>
<h3>Hotjar</h3>
<p>We use Hotjar (www.hotjar.com) in order to better understand our users’ needs and to optimise this service and experience. Hotjar is a technology service that helps us better understand our users experience (e.g. how much time they spend on which pages, which links they choose to click, what users do and don’t like, etc.) and this enables us to build and maintain our service with user feedback. Hotjar uses cookies and other technologies to collect data on our users’ behavior and their devices (in particular device's IP address (captured and stored only in anonymised form), device screen size, device type (unique device identifiers), browser information, geographic location (country only), preferred language used to display our website). Hotjar stores this information in a pseudonymised user profile. Neither Hotjar nor we will ever use this information to identify individual users or to match it with further data on an individual user. For further details, please see Hotjar’s privacy policy by clicking on this link: https://www.hotjar.com/legal/policies/privacy.</p>
<p>You can opt-out to the creation of a user profile, Hotjar’s storing of data about your usage of our site and Hotjar’s use of tracking cookies on other websites by following this opt-out link: https://www.hotjar.com/legal/compliance/opt-out.</p>
<h2>Managing cookies</h2>
<p>You can manage cookies used by websites by editing your web browser settings.</p>
<p><strong>Note:</strong> Disabling cookies will prevent some websites from working correctly, and may mean that you are prompted to re-enter information that would normally have been stored in a cookie such as your login status or prevent features from working if they rely on information stored in a cookie that remembers data that is required on another page, for example a shopping cart.</p>
<h4>Google Chrome</h4>
<p>Click the 'parallel bars' menu button, choose the 'Settings' option, then scroll down and click the 'Advanced' link. Alternatively for older versions of Chrome choose 'Options' on the 'Customize and control' menu, then open the 'Under the Bonnet' tab. In the 'Privacy and security' section, click on the 'Content settings...' button and then the 'Cookies' option. Set the required cookie behaviour - add URLs to the 'Block', Clear on Exit' and 'Allow' sections to configure cookie behavior for specific websites.</p>
<h4>Microsoft Edge (Windows 10)</h4>
<p>In Edge, click the three dots/lines button in the top right corner, then select 'settings' and 'view advanced settings'. In the Cookies section you can choose whether to allow or block cookies from various sources.</p>
<h4>Microsoft Internet Explorer 8.0 - 11.0</h4>
<p>Select the 'Tools->Internet Options' menu item, and then open the 'Privacy' tab - you can then adjust the slider to block or allow various categories of cookie. Alternatively by clicking 'Advanced...' you can exercise finer control over the browser's behavior, choosing whether to accept, block, or prompt for cookies originating either on the website you are visiting (first party cookies) or originating from websites other than the one you are visiting (third party cookies, typically used by banner advertisements hosted on an advertiser's website).</p>
<h4>Apple Safari</h4>
<p>Choose 'Preferences...' on the 'Settings' or 'Edit' menu (Windows) or the Safari menu (MacOS), then open the 'Privacy' tab. Now set the required cookie behaviour.</p>
<h4>Firefox 7.0 and newer</h4>
<p>Use the 'Tools->Options' menu item (may be under the Firefox button or 'parallel lines' menu button), then choose the 'Privacy' tab. Set the 'Firefox will:' option to 'Use custom settings for history'. Now you can choose whether cookies are enabled for websites you visit and third party websites, and if so how long they will persist. You can also use the 'Exceptions' button to override the settings for particular websites.</p>
<h4>Firefox 3.0</h4>
<p>Use the 'Tools->Options' menu item, then choose the 'Privacy' tab. Here you can choose whether cookies are enabled, and if so how long they will persist. You can also use the 'Exceptions' button to override the settings for particular websites.</p>
<h4>Apple iOS (iPhone, iPad)</h4>
<p>From the home screen tap the 'Settings' icon, then choose 'Safari'. Find the 'Accept Cookies' option and set the required cookie behaviour.</p>
<h4>Android browser</h4>
<p>Tap the 'Internet' icon to start the browser, then press the phone's menu button. From the list of options, choose 'More', and then select 'Settings', then 'Privacy and Security'. Scroll down the resulting list and check or uncheck the 'Accept Cookies' item.</p>
<h4>Android Chrome</h4>
<p>Start Chrome, then open the options menu and scroll down to 'Settings', followed by 'Site setttings'. You can now choose whether to allow sites to save and read cookie data.</p>
<h4>Windows Phone 10</h4>
<p>In the Edge Browser, tap '...' then 'Settings'. Click on 'View advanced settings' then scroll down to the Cookies section, where you can select the required cookie behaviour.</p>
<h4>Windows Phone 7/8</h4>
<p>In Internet Explorer, tap 'More...' then 'Settings'. Check or clear the 'Allow cookies on my phone' item to set the required cookie behaviour.</p>
<h4>Blackberry</h4>
<p>Open the browser from the home screen, then press the Menu key, followed by 'Options'. Under 'Privacy &amp; Security' you can choose whether or not to 'Accept Cookies'. Press the Menu key and select 'Save' to save your selection.</p>
<h2>Cookie extentions &amp; plugins</h2>
<p>Third party extentions and plugins are available to manage cookies on a per site basis. There are currently too many to list and to provide support for each. If you or someone with access to your computer has installed a cookie managing extention or plugin we advise contacting the original extention/plugin developer for support.</p>
<h4>Example: Disable Cookies by singleclickapps.com</h4>
<p>A Google Chrome browser extention to disable/enable cookies on the current site.  It's a simple switch: click to disable, click to enable.</p>
<p><a href="https://chrome.google.com/webstore/detail/disable-cookies/lkmjmficaoifggpfapbffkggecbleang" target="_blank">Get Disable Cookies for Chrome</a></p>
<h4>Example: Cookie AutoDelete by Kenny Do</h4>
<p>A Mozilla Firefox browser plugin to manage cookies. When a tab closes, any cookies not being used are automatically deleted. Whitelist the ones you trust while deleting the rest. Support for Container Tabs.</p>
<p><a href="https://addons.mozilla.org/en-US/firefox/addon/cookie-autodelete/" target="_blank">Get Cookie AutoDelete for Firefox</a></p>
<p class="small">v1.0.4 April 2018</p>
EOD;
}
