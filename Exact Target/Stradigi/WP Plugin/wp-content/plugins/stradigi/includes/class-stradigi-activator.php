<?php

/**
 * Fired during plugin activation
 *
 * @link       http://stradigi.ca
 * @since      1.0.0
 *
 * @package    Stradigi
 * @subpackage Stradigi/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Stradigi
 * @subpackage Stradigi/includes
 * @author     Stradigi Web Team
 */
class Stradigi_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		flush_rewrite_rules();
	}

}
