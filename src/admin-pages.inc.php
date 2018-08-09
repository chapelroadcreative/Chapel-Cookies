<?php
/*
 * ChapelCookies plugin file
 *
 * @package ChapelCookies\Public
 */

  // 8.1
 function chapel_cookies_admin_page_dashboard () {
   $o = '
    <div class="wrap">
      <h2>Chapel Cookies - Dashboard</h2>
      <p><em>EU cookie law compliance plugin, displays cookie notice with links to privacy notice and cookie management information.</em></p>

      <table class="form-table">

        <tbody>

          <tr>
            <td colspan="3"><hr></td>
          </tr>

          <tr>
            <td style="text-align: center;">
              <a href="' . site_url('/', 'http') . 'wp-admin/admin.php?page=chapel_cookies_admin_customise' . '" style="display:inline-block; outline: 0; box-shadow: none;"><img src="' . esc_url( plugins_url( 'private/assets/gfx/chapel-cookies-500x350.png', __FILE__ ) ) . '" alt="Hotjar logo" style="width: 75%; height: auto;"></a>
            </td>
            <td style="text-align: center;">
              <a href="' . site_url('/', 'http') . 'wp-admin/admin.php?page=chapel_cookies_admin_page_google_analytics' . '" style="display:inline-block; outline: 0; box-shadow: none;"><img src="' . esc_url( plugins_url( 'private/assets/gfx/google-analytic-500x350.png', __FILE__ ) ) . '" alt="Google Analytics logo" style="width: 75%; height: auto;"></a>
            </td>
            <td style="text-align: center;">
              <a href="' . site_url('/', 'http') . 'wp-admin/admin.php?page=chapel_cookies_admin_page_hotjar' . '" style="display:inline-block; outline: 0; box-shadow: none;"><img src="' . esc_url( plugins_url( 'private/assets/gfx/hotjar-500x350.png', __FILE__ ) ) . '" alt="Hotjar logo" style="width: 75%; height: auto;"></a>
            </td>
          </tr>

          <tr>
            <td colspan="3"><hr></td>
          </tr>

        <tbody>
      </tbody>
    </div>
   ';
   echo $o;
 }

  // 8.2
 function chapel_cookies_admin_page_google_analytics () {
   $options = chapel_cookies_get_google_analytics_current_options();
   echo('
   <div class="wrap">
   <h2>Chapel Cookies - Google Analytics</h2>
   <p><em>Google Analytics is a free tool used to track information about the way visitors to a site interact with it and analyze visitor traffic and paints a complete picture of who your audience is, and what their needs are.</em></p>


     <form action="options.php" method="post">');
        settings_fields('chapel_cookies_plugin_google_analytics_options');
        @do_settings_fields('chapel_cookies_plugin_google_analytics_options','');

     echo('
       <table class="form-table">

         <tbody>

           <tr>
             <th scope="row"><label for="chapel_cookies_google_analytics_enabled">Enable Google Analytics?</label></th>
             <td>
               <input type="checkbox" name="chapel_cookies_google_analytics_enabled"');
               if($options['chapel_cookies_google_analytics_enabled']) { echo ' checked'; }
               echo('
               > Tick to enable Google Analytics
             </td>
           </tr>

           <tr>
             <th scope="row"><label for="chapel_cookies_google_analytics_tracking_code">Google Analytics tracking code</label></th>
             <td>
               <input type="text" name="chapel_cookies_google_analytics_tracking_code" value="' . $options['chapel_cookies_google_analytics_tracking_code'] . '" required> Get your Google Analytics tracking code from the <a href="https://analytics.google.com" target="_blank">Google Analytics website</a>
             </td>
           </tr>

         </tbody>

       </table>');

       @submit_button();

       echo('
     </form>

   </div>');
 }

  // 8.3
 function chapel_cookies_admin_page_hotjar () {
   $options = chapel_cookies_get_hotjar_current_options();
   echo('
   <div class="wrap">
     <h2>Chapel Cookies - Hotjar</h2>
     <p><em>Hotjar is a powerful tool that reveals the online behavior and voice of your users. By combining both analysis and feedback tools, giving you the \'big picture\' of how to improve your site\'s user experience and performance/conversion rates.</em></p>

     <form action="options.php" method="post">');
        settings_fields('chapel_cookies_plugin_hotjar_options');
        @do_settings_fields('chapel_cookies_plugin_hotjar_options','');

     echo('
       <table class="form-table">

         <tbody>

           <tr>
             <th scope="row"><label for="chapel_cookies_hotjar_enabled">Enable Hotjar?</label></th>
             <td>
               <input type="checkbox" name="chapel_cookies_hotjar_enabled"');
               if($options['chapel_cookies_hotjar_enabled']) { echo ' checked'; }
               echo('
               > Tick to enable Hotjar
             </td>
           </tr>

           <tr>
             <th scope="row"><label for="chapel_cookies_hotjar_site_id">Hotjar Site ID</label></th>
             <td>
               <input type="text" name="chapel_cookies_hotjar_site_id" value="' . $options['chapel_cookies_hotjar_site_id'] . '" required> Get your Hotjar Site ID from the <a href="http://hotjar.com" target="_blank">Hotjar website</a>
             </td>
           </tr>

         </tbody>

       </table>');

       @submit_button();

       echo('
     </form>

   </div>');
 }

 // 8.4
 function chapel_cookies_admin_customise () {
   $options = chapel_cookies_get_customise_current_options();
   echo('
   <div class="wrap">
     <h2>Chapel Cookies - Customise</h2>
     <p><em>Customise the look and feel of the privacy and cookie notice.</em></p>

     <form action="options.php" method="post">');
        settings_fields('chapel_cookies_plugin_customise_options');
        @do_settings_fields('chapel_cookies_plugin_customise_options','');

     echo('
       <table class="form-table">

         <tbody>
           <tr>
              <th colspan="2"><h3>Privacy Setup</h3></th>
           </tr>
           <tr>
             <th scope="row">
                <label for="chapel_cookies_customise_enable_privacy_page">Display a link to a privacy page within the notice?</label>
                <p>When enabled this plugin display a link to a privacy page at the bottom of the privacy notice.</p>
             </th>
             <td>
               <input type="checkbox" name="chapel_cookies_customise_enable_privacy_page"');
               if($options['chapel_cookies_customise_enable_privacy_page']) { echo ' checked'; }
               echo('
               > Tick to enable a link to a privacy page within the notice.
             </td>
           </tr>

           <tr>
             <th scope="row">
                <label for="chapel_cookies_customise_generate_privacy_page">Enable auto-generation of a privacy page?</label>
                <p>When enabled this plugin will check if a page with the slug \'privacy\' is created, if not it will create one with generic privacy information.</p>
             </th>
             <td>
               <input type="checkbox" name="chapel_cookies_customise_generate_privacy_page"');
               if($options['chapel_cookies_customise_generate_privacy_page']) { echo ' checked'; }
               echo('
               > Tick to enable auto-generation of a privacy page.
             </td>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_override_privacy_page_title">Privacy Link Label</label>
             <p>Short link label such as \'Privacy\', \'Privacy Policy\' etc..</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_override_privacy_page_title" placeholder="/" value=" ' . $options['chapel_cookies_customise_override_privacy_page_title'] . '">
             </td>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_override_privacy_page_url">Privacy page URI if not in root folder</label>
             <p>Enter the full valid url to a privacy page (leave blank for default URI).</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_override_privacy_page_url" placeholder="/" value=" ' . $options['chapel_cookies_customise_override_privacy_page_url'] . '">
             </td>
           </tr>

           <tr>
              <td colspan="2"><hr></td>
           </tr>

           <tr>
              <th colspan="2"><h3>Cookies Setup</h3></th>
           </tr>

           <tr>
             <th scope="row">
                <label for="chapel_cookies_customise_enable_cookie_page">Display a link to a cookies page within the notice?</label>
                <p>When enabled this plugin display a link to a cookies page at the bottom of the privacy notice.</p>
             </th>
             <td>
               <input type="checkbox" name="chapel_cookies_customise_enable_cookie_page"');
               if($options['chapel_cookies_customise_enable_cookie_page']) { echo ' checked'; }
               echo('
               > Tick to enable a link to a cookie page within the notice.
             </td>
           </tr>

           <tr>
             <th scope="row">
                <label for="chapel_cookies_customise_generate_cookie_page">Enable auto-generation of a cookies page?</label>
                <p>When enabled this plugin will check if a page with the slug \'cookies\' is created, if not it will create one with generic cookie manangement information.</p>
             </th>
             <td>
               <input type="checkbox" name="chapel_cookies_customise_generate_cookie_page"');
               if($options['chapel_cookies_customise_generate_cookie_page']) { echo ' checked'; }
               echo('
               > Tick to enable auto-generation of a cookies page.
             </td>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_override_cookie_page_title">Cookies Link Label</label>
             <p>Short link label such as \'Cookies\', \'Cookie Policy\' etc..</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_override_cookie_page_title" placeholder="/" value=" ' . $options['chapel_cookies_customise_override_cookie_page_title'] . '">
             </td>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_override_cookie_page_url">Cookies page URI if not in root folder</label>
             <p>Enter the full valid url to a cookies page (leave blank for default URI).</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_override_cookie_page_url" placeholder="/" value=" ' . $options['chapel_cookies_customise_override_cookie_page_url'] . '">
             </td>
           </tr>

           <tr>
              <td colspan="2"><hr></td>
           </tr>

           <tr>
              <th colspan="2"><h3>Pop Up Content</h3></th>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_popup_title">Pop Up Title</label>
             <p>Short title such as \'Privacy & Cookies\', \'Cookies\' etc..</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_popup_title" placeholder="/" value=" ' . $options['chapel_cookies_customise_popup_title'] . '">
             </td>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_colours_text">Notice Message</label>
             <p>Edit the privacy &amp; cookie notice message.</p>
             </th>
             <td>');

               wp_editor( $options['chapel_cookies_customise_content_message'], 'chapel_cookies_customise_content_message', array( 'textarea_rows'=>8, 'media_buttons' => false, 'teeny'=>true ) );

            echo('
             </td>
           </tr>

            <tr>
              <th scope="row">
              <label for="chapel_cookies_customise_content_button_label">Notice Button Label</label>
              <p>Enter text for the notice agreement button label.</p>
              </th>
              <td>
                <input type="text" name="chapel_cookies_customise_content_button_label" value=" ' . $options['chapel_cookies_customise_content_button_label'] . '">
              </td>
            </tr>

            <tr>
               <td colspan="2"><hr></td>
            </tr>

            <tr>
               <th colspan="2"><h3>Pop Up Styles</h3></th>
            </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_colours_highlight">Notice Highlight Colour</label>
             <p>Edit the colour of the privacy &amp; cookie notice highlight colour (Notice title, right border and button colour).</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_colours_highlight" value=" ' . $options['chapel_cookies_customise_colours_highlight'] . '">
             </td>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_colours_text">Notice Text Colour</label>
             <p>Edit the colour of the text in the privacy &amp; cookie notice.</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_colours_text" value=" ' . $options['chapel_cookies_customise_colours_text'] . '">
             </td>
           </tr>

           <tr>
             <th scope="row">
             <label for="chapel_cookies_customise_colours_background">Notice Background Colour</label>
             <p>Edit the colour of the privacy &amp; cookie notice background.</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_colours_background" value=" ' . $options['chapel_cookies_customise_colours_background'] . '">
             </td>
           </tr>

          <tr>
            <th scope="row">
            <label for="chapel_cookies_customise_colours_button_text">Notice Button Label Colour</label>
            <p>Edit the colour of the text label on the notice button.</p>
            </th>
            <td>
              <input type="text" name="chapel_cookies_customise_colours_button_text" value=" ' . $options['chapel_cookies_customise_colours_button_text'] . '">
            </td>
          </tr>

         <tr>
           <th scope="row">
           <label for="chapel_cookies_customise_colours_link">Small Print Link Colour</label>
           <p>Edit the colour of the small print links.</p>
           </th>
           <td>
             <input type="text" name="chapel_cookies_customise_colours_link" value=" ' . $options['chapel_cookies_customise_colours_link'] . '">
           </td>
         </tr>

         </tbody>

       </table>');

       @submit_button();

       echo('
     </form>

   </div>');
 }
