<?php
/**
 * Chapel Cookies - admin pages
 * Version: 1.0.7
 * Created: 19/04/2018
 * Last updated: 19/04/2018
 * Author: Derek O'Brien @ Chapel Road Creative
 * Author URI: http://chapelroadcreative.co.uk
 * Licence: GPL2
 * Licence URI: https://www.gnu.org/gpl-2.0.html
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
             <label for="chapel_cookies_customise_colours_highlight">Notice Highlight Colour</label>
             <p>Edit the colour of the privacy &amp; cookie notice highlight colour (Notice title, right border and button colour).</p>
             </th>
             <td>
               <input type="text" name="chapel_cookies_customise_colours_highlight" value=" ' . $options['chapel_cookies_customise_colours_highlight'] . '">
             </td>
           </tr>

         </tbody>

       </table>');

       @submit_button();

       echo('
     </form>

   </div>');
 }
