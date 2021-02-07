<?php 
// Plugin name: name itffs 
// URI: -
// Description: -
// Author: @kujtoth
// Author URI: https://instagram.com/kujtoth Version: 1.0 



pluginF

add_action('admin_menu', 'pluginFunction' ); function pluginFunction(){$page_title = 'page title'; $menu_title = 'page title'; $capability = 'manage_options'; $menu_slug  = 'menu slug'; $function = 'pluginFunction_page'; $icon_url = 'dashicons-clock
 '; $position = 4; add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position); }


//create form

function pluginFunction_page(){
    ?>
    <h1>superheader</h1>
<form method="post" action="options.php">
<?php settings_fields( 'pluginFunction-settings' ); ?>
<?php do_settings_sections( 'pluginFunction-settings' ); ?>
    <table class="form-table">
    <tr valign="top">
    <th scope="row">heading</th>
    <tr>
    <td><label for="firstInput">label</label></td>
    <td><input type="date" name="firstInput" value="<?php echo get_option( 'pluginFunction' ); ?>"/></td></tr></tr>
    </table>
    

<?php submit_button(); ?>
</form>
<?php 
}



//register plugin

add_action( 'admin_init', 'update_plugin_function_value' );

//save data
if( !function_exists("update_plugin_function_value") ) { 
    function update_plugin_function_value() {   register_setting( 'pluginFunction-settings', 'pluginFunction' ); } }

//load data
    if( !function_exists("pluginFunction") ) {    
        function pluginFunction($content)   {     
        $value = get_option( 'pluginFunction' );     
        return $content . $value;   }  
        add_filter( 'the_content', 'pluginFunction' );  }



?>