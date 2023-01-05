<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://anushka.pro
 * @since             1.0.0
 * @package           Omni_Pro_Log_Handler
 *
 * @wordpress-plugin
 * Plugin Name:       Omni-pro Log Handler
 * Plugin URI:        https://anushka.pro/wp/plugins/omni-pro-log-handler
 * Description:       Omni-pro Log Handler
 * Version:           1.0.0
 * Author:            Anushka
 * Author URI:        https://anushka.pro
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       omni-pro-log-handler
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'OMNI_PRO_LOG_HANDLER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-omni-pro-log-handler-activator.php
 */
function activate_omni_pro_log_handler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-omni-pro-log-handler-activator.php';
	Omni_Pro_Log_Handler_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-omni-pro-log-handler-deactivator.php
 */
function deactivate_omni_pro_log_handler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-omni-pro-log-handler-deactivator.php';
	Omni_Pro_Log_Handler_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_omni_pro_log_handler' );
register_deactivation_hook( __FILE__, 'deactivate_omni_pro_log_handler' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-omni-pro-log-handler.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_omni_pro_log_handler() {

	$plugin = new Omni_Pro_Log_Handler();
	$plugin->run();

}
run_omni_pro_log_handler();
