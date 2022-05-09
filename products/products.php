<?php
/**
 * @since             1.0.0
 * @package           Products
 *
 * @wordpress-plugin
 * Plugin Name:       Products
 * Plugin URI:        http://jefferson.omegainc.com.br/
 * Description:       Test plugin and template for new wordpress plugins
 * Version:           1.0.0
 * Author:            Jefferson Mello Olynyki
 * Author URI:        https://github.com/jeffersonmello
 * License:           MIT
 * Text Domain:       products
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
const products_test = '1.0.0';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-products-activator.php';
    Products_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-products-deactivator.php';
    Products_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_products');
register_deactivation_hook(__FILE__, 'deactivate_products');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-products.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_products()
{
    $plugin = new Products();
    $plugin->run();
}

run_products();