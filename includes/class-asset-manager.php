<?php

class Asset_Manager
{
  public function __construct()
  {
    add_action('wp_enqueue_scripts', [$this, 'load_assets']);
  }

  public function load_assets()
  {
    wp_enqueue_style('asset-management-css', PLUGIN_ASSETS . 'css/style.css', [], AM_VERSION);
    wp_enqueue_script('asset-management-js', PLUGIN_ASSETS . 'js/script.js', [], AM_VERSION, true);
    wp_enqueue_script('asset-management2-js', PLUGIN_ASSETS . 'js/script2.js', [], AM_VERSION, true);
    wp_enqueue_script('asset-management-jQuery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], AM_VERSION, true);
  }
}