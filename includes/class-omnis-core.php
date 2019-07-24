<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       loprd.pl
 * @since      1.0.0
 *
 * @package    Omnis_Core
 * @subpackage Omnis_Core/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Omnis_Core
 * @subpackage Omnis_Core/includes
 */
class Omnis_Core {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Omnis_Core_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'omnis-core';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		
		$this->define_public_hooks();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Omnis_Core_Loader. Orchestrates the hooks of the plugin.
	 * - Omnis_Core_i18n. Defines internationalization functionality.
	 * - Omnis_Core_Admin. Defines all hooks for the admin area.
	 * - Omnis_Core_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-omnis-core-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-omnis-core-i18n.php';

	
		require_once plugin_dir_path( __FILE__ ) . 'omnis-admin-menu.php';
		require_once plugin_dir_path( __FILE__ ) . 'omnis-menus-custom.php';
		
		require_once plugin_dir_path( __FILE__ ) . 'omnis-admin-page.php';

		require_once plugin_dir_path( __FILE__ ) . 'omnis-post-types.php';
		require_once plugin_dir_path( __FILE__ ) . 'omnis-shortcodes.php';
		require_once plugin_dir_path( __FILE__ ) . 'omnis-breadcrumbs.php';

		require_once plugin_dir_path( __FILE__ ) . 'tinymce/insert-component.php';
		
		require_once plugin_dir_path( __FILE__ ) . 'external/images/aq_resizer.php';
		require_once plugin_dir_path( __FILE__ ) . 'external/images/fastimage.php';

		if (apply_filters( 'omnis_filter__vc_studio', true )) {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'omnis-vc-studio/class-omnis-vc-studio.php';
		}
		
		if ( is_plugin_active( 'redux-framework/redux-framework.php' ) ) {
			require_once plugin_dir_path( __FILE__ ) . 'redux/loader.php';
		
			/**
			 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
			 */
			if ( ! function_exists( 'remove_demo' ) ) {
				function remove_demo() {
					// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
					if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
						remove_filter( 'plugin_row_meta', array(
							ReduxFrameworkPlugin::instance(),
							'plugin_metalinks'
						), null, 2 );
		
						// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
						remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
					}
				}
			}
		
			if (!function_exists('omnis_removeDemoModeLink')) {
				function omnis_removeDemoModeLink() { // Be sure to rename this function to something more unique
					if ( class_exists('ReduxFrameworkPlugin') ) {
						remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
					}
					if ( class_exists('ReduxFrameworkPlugin') ) {
						remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );
					}
				}
				
				add_action('init', 'omnis_removeDemoModeLink');
			}
		}
		
  
		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */

		$this->loader = new Omnis_Core_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Omnis_Core_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Omnis_Core_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	private function define_public_hooks() {
		if (apply_filters( 'omnis_filter__vc_studio', true )) {
			$plugin_public = new Omnis_VC_Studio( $this->get_plugin_name(), $this->get_version() );

			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_public, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		}
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Omnis_Core_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
