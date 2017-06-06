<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://stradigi.ca
 * @since      1.0.0
 *
 * @package    Stradigi
 * @subpackage Stradigi/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Stradigi
 * @subpackage Stradigi/includes
 * @author     Stradigi Web Team
 */
class Stradigi_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}

}
