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
function roiweb1(){
	if (pll_current_language() == "es"){		
		?>
		<div id="wzr-notices">
			<p><span id="wzr-mandatory">IMPORTANTE</span> Debido al Covid-19, todos nuestros vuelos están suspendidos temporalmente<p>
		</div>	
		<?php
	}elseif (pll_current_language() == "fr"){		
		?>
		<div id="wzr-notices">
			<p><span id="wzr-mandatory">IMPORTANT</span> En raison du Covid-19, tous nos vols sont temporairement suspendus<p>
		</div>	
		<?php
	}elseif (pll_current_language() == "en"){		
		?>
		<div id="wzr-notices">
			<p><span id="wzr-mandatory">IMPORTANT</span> Due to the Covid-19, all our flights are temporarily suspended<p>
		</div>	
		<?php
	}
}
add_action('wp_footer','roiweb1');