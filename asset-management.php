<?php
/*
 * Plugin Name:       Asset Management
 * Description:       A plugin to manage and optimize assets in WordPress, improving website performance and user experience.
 * Version:           1.0.0
 * Requires at least: 6.8
 * Requires PHP:      8.0
 * Author:            Subas Roy
 * Author URI:        https://github.com/subas-roy/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       asset-management
 */

defined('ABSPATH') or die(''); // Prevent direct access to the plugin file

define('PLUGIN_ASSETS', plugin_dir_url(__FILE__) . 'assets/'); // Define a constant for the plugin's assets directory
define('AM_VERSION', '1.0.0');
class Asset_Management
{
  public function __construct()
  {
    add_action('wp_enqueue_scripts', [$this, 'load_assets']);
  }

  public function load_assets()
  {
    wp_enqueue_style('asset-management-css', PLUGIN_ASSETS . 'css/style.css', [], AM_VERSION);
    wp_enqueue_script('asset-management-js', PLUGIN_ASSETS . 'js/script.js', [], AM_VERSION, true);
  }
}

new Asset_Management(); // Instantiate the plugin class