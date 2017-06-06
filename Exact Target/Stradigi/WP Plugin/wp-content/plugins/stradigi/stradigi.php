<?php

/**
 * The plugin bootstrap file: This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function that starts the plugin.
 *
 * @link              http://stradigi.ca
 * @since             1.0.0
 * @package           Stradigi
 *
 * @wordpress-plugin
 * Plugin Name:       Stradigi
 * Plugin URI:        http://stradigi.ca
 * Description:       The plugin creates dynamic dashoboard menu by queries WordPress database.
 * Version:           1.0.0
 * Author:            Stradigi Web Team
 * Author URI:        http://stradigi.ca
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       stradigi
 * Domain Path:       /languages
 **/

// If this file is called directly, abort.
if(!defined('WPINC')){
	die;}


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-stradigi-activator.php
 */
function activate_stradigi(){
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-stradigi-activator.php';
	Stradigi_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_stradigi' );


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-stradigi-deactivator.php
 */
function deactivate_stradigi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-stradigi-deactivator.php';
	Stradigi_Deactivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_stradigi' );



/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-stradigi.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_stradigi() {

	$plugin = new Stradigi();
	$plugin->run();

}
run_stradigi();
