<?php
/*
 * Plugin Name:       3D Coming Soon by ContrixLab
 * Plugin URI:        http://www.contrixlab.com
 * Description:       The 3D Coming Soon Page for WordPress.
 * Version:           1.0.0
 * Author:            ContrixLab
 * Author URI:        http://www.contrixlab.com
 * Text Domain:       coming-soon
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

/**
 * Default Constants
 */
define( 'CONTRIX_CSP_SHORTNAME', 'contrix_csp' ); // Used to reference namespace functions.
define( 'CONTRIX_CSP_SLUG', 'contrix-3d-coming-soon/contrix-3d-coming-soon.php' ); // Used for settings link.
define( 'CONTRIX_CSP_TEXTDOMAIN', 'coming-soon' ); // Your textdomain
define( 'CONTRIX_CSP_PLUGIN_NAME', __( '3D Coming Soon by Contrix Lab', 'contrix-coming-soon' ) ); // Plugin Name shows up on the admin settings screen.
define( 'CONTRIX_CSP_VERSION', '1.0.0'); // Plugin Version Number. Recommend you use Semantic Versioning http://semver.org/
define( 'CONTRIX_CSP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); // Example output: /Applications/MAMP/htdocs/wordpress/wp-content/plugins/contrix-3d-coming-soon/
define( 'CONTRIX_CSP_PLUGIN_URL', plugin_dir_url( __FILE__ ) ); // Example output: http://localhost:8888/wordpress/wp-content/plugins/contrix-3d-coming-soon/


/**
 * Load Translation
 */

//function contrix_csp_load_textdomain() {
    load_plugin_textdomain( 'coming-soon', false,  dirname( plugin_basename( __FILE__ ) )  . '/languages/' );
//}
//add_action('plugins_loaded', 'contrix_csp_load_textdomain');


/**
 * Upon activation of the plugin, see if we are running the required version and deploy theme in defined.
 *
 * @since 0.1.0
 */
/*
function contrix_csp_activation(){
	require_once( 'inc/default-settings.php' );
	add_option('contrix_csp_settings_content',unserialize($contrix_csp_settings_defaults['contrix_csp_settings_content']));
	add_option('contrix_csp_settings_design',unserialize($contrix_csp_settings_defaults['contrix_csp_settings_design']));
	add_option('contrix_csp_settings_advanced',unserialize($contrix_csp_settings_defaults['contrix_csp_settings_advanced']));
 
 
}
register_activation_hook( __FILE__, 'contrix_csp_activation' );
*/

/***************************************************************************
 * Load Required Files
 ***************************************************************************/

// Global

// Global
global $contrix_csp_settings;

require_once( 'inc/get-settings.php' );
$contrix_csp_settings = contrix_csp_get_settings();

require_once( 'inc/class-contrix-csp.php' );
add_action( 'plugins_loaded', array( 'CONTRIX_CSP', 'get_instance' ) );



if( is_admin() ) {
// Admin Only
	
	require_once( 'admin-folder/admin/admin-init.php' );
    
	//require_once( 'inc/config-settings.php' );
    //require_once( 'framework/framework.php' );
    //add_action( 'plugins_loaded', array( 'CONTRIX_CSP_ADMIN', 'get_instance' ) );
} else {
// Public only

}
