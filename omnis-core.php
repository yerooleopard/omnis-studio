<?php

/**
 *
 * @link              loprd.pl
 * @since             1.0.0
 * @package           Omnis_Core
 *
 * Plugin Name:       omnis Core
 * Plugin URI:        loprd.pl
 * Description:       omnis Theme Core plugin.
 * Version:           1.0.0
 * Author:            Adrian Lampart
 * Author URI:        loprd.pl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       omnis-core
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
require plugin_dir_path( __FILE__ ) . 'includes/class-omnis-core.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_omnis_core() {

	$plugin = new Omnis_Core();
	$plugin->run();

}
run_omnis_core();
