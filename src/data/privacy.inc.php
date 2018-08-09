<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Data
 */

function chapel_cookies_get_privacy_page_data() {

  // Prepare cookie page url
  $page_check = get_page_by_title( 'cookies' );
  $cookies_url = ( isset( $page_check->ID ) ? $cookies_url = get_the_permalink($page_check->ID) : $cookies_url = site_url('/cookies/', 'http://') );

  // return privacy page content
  return <<<EOD
<p>The policy: This privacy policy is for this website; [www.websitename.co.uk] and served by [### COMPANY NAME AND FULL ADDRESS ###] and governs the privacy of its users who choose to use it. It explains how we comply with the GDPR (General Data Protection Regulation), the DPA (Data Protection Act) [pre GDPR enforcement] and the PECR (Privacy and Electronic Communications Regulations).</p>
<p>This policy will explain areas of this website that may affect your privacy and personal details, how we process, collect, manage and store those details and how your rights under the GDPR, DPA &amp; PECR are adhere to. Additionally it will explain the use of cookies or software, advertising or commercial sponsorship from third parties and the download of any documents, files or software made available to you (if any) on this website. Further explanations may be provided for specific pages or features of this website in order to help you understand how we, this website and its third parties (if any) interact with you and your computer / device in order to serve it to you. Our contact information is provided if you have any questions.</p>
<h2>The DPA &amp; GDPR May 2018</h2>
<p>We and this website complies to the DPA (Data Protection Act 1998) and already complies to the GDPR (General Data Protection Regulation) which comes into affect from May 2018. We will update this policy accordingly after the completion of the UK's exit from the European Union.</p>
<h2>Use of cookies</h2>
<p>This website uses cookies to better the users experience while visiting the website. As required by legislation, where applicable this website uses a cookie control system, allowing the user to give explicit permission or to deny the use of /saving of cookies on their computer / device.</p>
<p>More information on the cookies we use can be found on our <a href="$cookies_url">cookies</a> page.</p>
<h2>Adverts and sponsored links</h2>
<p>This website may contain sponsored links and adverts. These will typically be served through our advertising partners, to whom may have detailed privacy policies relating directly to the adverts they serve.</p>
<p>Clicking on any such adverts will send you to the advertisers website through a referral program which may use cookies and will track the number of referrals sent from this website. This may include the use of cookies which may in turn be saved on your computers hard drive. Users should therefore note they click on sponsored external links at their own risk and we cannot be held liable for any damages or implications caused by visiting any external links mentioned.</p>
<h2>Downloads &amp; media files</h2>
<p>Any downloadable documents, files or media made available on this website are provided to users at their own risk. While all precautions have been undertaken to ensure only genuine downloads are available users are advised to verify their authenticity using third party anti virus software or similar applications. We accept no responsibility for third party downloads and downloads provided by external third party websites and advise users to verify their authenticity using third party anti virus software or similar applications.</p>
<h2>Contact &amp; communication with us</h2>
<p>Users contacting this us through this website do so at their own discretion and provide any such personal details requested at their own risk. Your personal information is kept private and stored securely until a time it is no longer required or has no use.</p>
<p>Where we have clearly stated and made you aware of the fact, and where you have given your express permission, we may use your details to send you products/services information through a mailing list system. This is done in accordance with the regulations named in 'The policy' above.</p>
<h2>Email mailing list &amp; marketing messages</h2>
<p>We operate an email mailing list program, used to inform subscribers about products, services and/or news we supply/publish. Users can subscribe through an online automated process where they have given their explicit permission. Subscriber personal details are collected, processed, managed and stored in accordance with the regulations named in 'The policy' above. Subscribers can unsubscribe at any time through an automated online service, or if not available, other means as detailed in the footer of sent marketing messages. The type and content of marketing messages subscribers receive, and if it may contain third party content, is clearly outlined at the point of subscription.</p>
<p>Email marketing messages may contain tracking beacons / tracked clickable links or similar server technologies in order to track subscriber activity within email marketing messages. Where used, such marketing messages may record a range of subscriber data relating to engagement, geographic, demographics and already stored subscriber data.
Our EMS (email marketing service) provider is; [EMS provider] and you can read their privacy policy in the resources section.</p>
<h2>External website links &amp; third parties</h2>
<p>Although we only look to include quality, safe and relevant external links, users are advised to adopt a policy of caution before clicking any external web links mentioned throughout this website. (External links are clickable text / banner / image links to other websites)</p>
<p>Shortened URL's; URL shortening is a technique used on the web to shorten URL's (Uniform Resource Locators) to something substantially shorter. This technique is especially used in social media and looks similar to this (example: http://bit.ly/zyVUBo). Users should take caution before clicking on shortened URL links and verify their authenticity before proceeding.</p>
We cannot guarantee or verify the contents of any externally linked website despite our best efforts. Users should therefore note they click on external links at their own risk and we cannot be held liable for any damages or implications caused by visiting any external links mentioned.</p>
<h2>Social media policy &amp; usage</h2>
<p>We adopt a Social Media Policy to ensure our business and our staff conduct themselves accordingly online. While we may have official profiles on social media platforms users are advised to verify authenticity of such profiles before engaging with, or sharing information with such profiles. We will never ask for user passwords or personal details on social media platforms. Users are advised to conduct themselves appropriately when engaging with us on social media.</p>
<p>There may be instances where our website features social sharing buttons, which help share web content directly from web pages to the respective social media platforms. You use social sharing buttons at your own discretion and accept that doing so may publish content to your social media profile feed or page. You can find further information about some social media privacy and usage policies in the resources section below.</p>
<h2>Resources &amp; further information</h2>
<ul>
    <li><a href="https://ico.org.uk/for-organisations/data-protection-reform/overview-of-the-gdpr/" target="_blank">Overview of the GDPR - General Data Protection Regulation</a></li>
    <li><a href="https://www.legislation.gov.uk/ukpga/1998/29/contents" target="_blank">Data Protection Act 1998</li>
    <li><a href="https://ico.org.uk/for-organisations/guide-to-pecr/" target="_blank">Privacy and Electronic Communications Regulations 2003</a></li>
    <li><a href="https://twitter.com/privacy" target="_blank">Twitter Privacy Policy</a></li>
    <li><a href="https://www.facebook.com/about/privacy/" target="_blank">Facebook Privacy Policy</a></li>
    <li><a href="" target="_blank">Instagram Privacy Policy</a></li>
    <li><a href="https://www.google.com/privacy.html" target="_blank">Google Privacy Policy</a></li>
    <li><a href="https://www.linkedin.com/static?key=privacy_policy" target="_blank">Linkedin Privacy Policy</a></li>
    <li><a href="https://campaignmonitor.com/policies/" target="_blank">Campaign Monitor Privacy Policy</a></li>
</ul>
<h2>Contact information</h2>
<p>Any enquiries about our privacy policy should be directed to:</p>
<dl>
    <dt>Name:</dt>
    <dd>[### COMPANY CONTACT NAME ###]</dd>
    <dt>Address:</dt>
    <dd>[### COMPANY FULL ADDRESS ###]</dd>
    <dt>Email:</dt>
    <dd>[### COMPANY CONTACT EMAIL ###]</dd>
    <dt>Telephone:</dt>
    <dd>[### COMPANY CONTACT EMAIL ###]</dd>
</dl>
<p class="small">v1.0.4 April 2018</p>
EOD;
}
