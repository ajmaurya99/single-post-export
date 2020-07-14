<?php
/*
Plugin Name: Single Post Export
Plugin URI: https://github.com/ajmaurya99/single-post-export
Description: This Plugin allows you to Export Single posts for classic editor.
Author: Ajay Maurya
Version: 1.0
TextDomain: single-post-export
Author URI: https://github.com/ajmaurya99
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}


if (!defined('PLUGIN_DIR')) {
  define('PLUGIN_DIR', plugin_dir_path(__FILE__));
}


include PLUGIN_DIR . 'includes/class-single-post-export.php';

// initializing the class
$spe = new Single_Post_Export();
