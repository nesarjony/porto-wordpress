<?php

/**
 * Theme Functions
 * 
 * @package porto
 * @author Hunky-dory <[info@codextree.com>]>
 * @link http://www.codextree.com/porto
 */


# Constant for theme directory uri
define( "THEME_URI", get_template_directory_uri() );
define( "THEME_DIR", get_template_directory() );

# Constant for theme name AND theme version
define( 'THEME_NAME', 'porto' );
define( 'THEME_VERSION', '1.0' ); 

# Theme libs folder and Admin directory
define( 'LIBS_DIR', THEME_DIR. '/inc/libs' );
define( 'ADMIN_DIR', THEME_DIR. '/inc/admin' );
define( 'ADMIN_URI', THEME_URI. '/inc/admin' );
define( 'TEMPLATE_DIR', THEME_DIR. '/templates' );
define( 'PLUGIN_DIR', THEME_DIR. '/inc/plugins');

# Constant for language directory and theme assets folder
define( 'LANGUAGE_DIR', THEME_DIR. '/languages' );
define( 'THEME_ASSETS', THEME_URI. '/assets' );

/**
 * Load Theme Text Domain
 * by default text domain are set as theme name
 *
*/

load_theme_textdomain( "porto", LANGUAGE_DIR );

//Debug Functions

// Load THEME options Extra Functions
require_once LIBS_DIR. '/theme-extra-functions.php';
require_once LIBS_DIR. '/theme-skin-default.php';

// Load Theme framework
require_once ADMIN_DIR. '/framework/codestar/cs-framework.php';

# Load Theme functions
require_once LIBS_DIR. '/theme-functions.php';

# load theme head funtionality
require_once LIBS_DIR. '/theme-head.php';
# load theme head funtionality
require_once LIBS_DIR. '/theme-footer.php';

function dis($param)
{
	//echo "<pre>";
	print_r($param);
	//echo "</pre>";
	echo "<br>";
} 
# Load theme Menus
require_once LIBS_DIR. '/theme-menus.php';

require_once LIBS_DIR. '/theme-nav-walker.php';

require_once LIBS_DIR. '/theme-menu-layout.php';

// Include Plugins FIle

require_once PLUGIN_DIR. '/plugins.php';

require_once LIBS_DIR. '/sidebars.php';

require_once LIBS_DIR. '/widget-functions.php';
require_once LIBS_DIR. '/widget-social-icon.php';
require_once LIBS_DIR. '/widget-text-box.php';
require_once LIBS_DIR. '/widget-contact-box.php';
require_once LIBS_DIR. '/widget-footer-menu-narrow.php';
