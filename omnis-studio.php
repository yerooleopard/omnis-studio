<?php

/**
 *
 * @link              loprd.pl
 * @since             0.1
 * @package           Omnis_Studio
 *
 * Plugin Name:       Omnis Studio
 * Plugin URI:        loprd.pl
 * Description:       Omnis Studio plugin.
 * Version:           0.6.1
 * Author:            Adrian Lampart
 * Author URI:        loprd.pl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       omnis-studio
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
require plugin_dir_path( __FILE__ ) . 'includes/class-omnis-studio.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_omnis_studio() {

	$plugin = new Omnis_Studio();
	$plugin->run();

}
run_omnis_studio();
