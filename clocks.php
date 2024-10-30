<?php
/**
 * Plugin Name: Clocks
 * Plugin URI: https://clock.wtf/wordpress-plugin
 * Description: Clocks with Shortcode - [lcd-clock] [analog-clock] [flip-clock]
 * Version: 1.1
 * Text Domain: clock.wtf
 * Author: Clock.wtf
 * Author URI: https://clock.wtf/
 */
 
 function wtf_lcdclock($atts) {
	$Content .= '<iframe scrolling="no" style="border: none; border-radius:7px; width:200px;height:60px;" src="https://clock.wtf/lcd-clock-in-black-widget"></iframe>';
	 
    return $Content;
}

add_shortcode('lcd-clock', 'wtf_lcdclock');

 function wtf_analogclock($atts) {
	$Content .= '<iframe scrolling="no" style="border: none; border-radius:7px; width:200px;height:200px;" src="https://clock.wtf/analog-clock-widget"></iframe>';
	 
    return $Content;
}

add_shortcode('analog-clock', 'wtf_analogclock');

 function wtf_flipclock($atts) {
	$Content .= '<iframe scrolling="no" style="border: none; border-radius:7px; width:300px;height:100px;" src="https://clock.wtf/flip-clock-black-widget"></iframe>';
	 
    return $Content;
}

add_shortcode('flip-clock', 'wtf_flipclock');