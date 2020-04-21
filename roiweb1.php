<?php
/*
Plugin Name: roiweb1 
Plugin URI: http://roiweb.co
Description: roiweb1
Author: ROIWEB.CO
Author URI: http://roiweb.co
Version: 1.0.0
Text Domain: roiweb1
Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
function roiweb1_load_textdomain() {
  load_plugin_textdomain( 'roiweb1', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
add_action('plugins_loaded','roiweb1_load_textdomain');
//Add Hook 1