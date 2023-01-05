<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://anushka.pro
 * @since      1.0.0
 *
 * @package    Omni_Pro_Log_Handler
 * @subpackage Omni_Pro_Log_Handler/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Omni_Pro_Log_Handler
 * @subpackage Omni_Pro_Log_Handler/includes
 * @author     Anushka <anudevscs@gmail.com>
 */
class Omni_Pro_Log_Handler_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'omni-pro-log-handler',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
