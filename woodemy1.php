<?php
/*
Plugin Name: Polylang Notices
Plugin URI: https://woodemy.com
Description: Show custom notices per langue in polylang
Author: Woodemy
Author URI: https://woodemy.com
Version: 1.0.1
Text Domain: woodemy1
Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
function woodemy1_load_textdomain() {
  load_plugin_textdomain( 'woodemy1', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
add_action('plugins_loaded','woodemy1_load_textdomain');
//Add Hook 1
function woodemy1_frontend_notice(){
	if (pll_current_language() == "es"){		
		?>
		<div id="wzr-notices">
			<p><span id="wzr-mandatory">IMPORTANTE</span> - Debido al Covid-19, todos nuestros vuelos están suspendidos temporalmente<p>
		</div>	
		<?php
	}elseif (pll_current_language() == "fr"){		
		?>
		<div id="wzr-notices">
			<p><span id="wzr-mandatory">IMPORTANT</span> - En raison du Covid-19, tous nos vols sont temporairement suspendus<p>
		</div>	
		<?php
	}elseif (pll_current_language() == "en"){		
		?>
		<div id="wzr-notices">
			<p><span id="wzr-mandatory">IMPORTANT</span> - Due to the Covid-19, all our flights are temporarily suspended<p>
		</div>	
		<?php
	}
}
add_action('wp_footer', 'woodemy1_frontend_notice');
//Notice
function woodemy1_admin_notice(){
    if (!class_exists('Polylang') && current_user_can('manage_options')){
        $msg = create_function('', 'echo "<div class=\"updated\"><p>Polylang Notices requires Polylang plugin</p></div>";');
        add_action('admin_notices', $msg);
    }else{
		add_action('wp_footer','woodemy1');
	}
}
add_action('admin_init', 'woodemy1_admin_notice');
//Css
function woodemy1_frontend_notice_css(){
    ?>
	<style>
		#wzr-notices {
			position: fixed;
			bottom: 0;
			background: white;
			padding: 20px 15px;
			box-shadow: 1px 1px 10px grey;
			width: 100%!important;
			text-align: left;
			display: block;
			box-sizing: border-box;
		}
		#wzr-mandatory {
			font-weight: 900;
		}
		#wzr-notices p{
			margin:0;
		}
	</style>
	<?php
}
add_action('wp_footer', 'woodemy1_frontend_notice_css');