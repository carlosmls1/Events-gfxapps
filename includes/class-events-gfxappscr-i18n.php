<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       gfxappscr.com
 * @since      1.0.0
 *
 * @package    Events_Gfxappscr
 * @subpackage Events_Gfxappscr/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Events_Gfxappscr
 * @subpackage Events_Gfxappscr/includes
 * @author     GFX apps <gfxappscr@gmail.com>
 */
class Events_Gfxappscr_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'events-gfxappscr',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
