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

class Asset_Management
{
  public function __construct()
  {
    add_action('wp_head', [$this, 'head_scripts']);
  }

  public function head_scripts()
  {
    echo '<script>console.log("hello world!")</script>';
  }
}

new Asset_Management(); // Instantiate the plugin class