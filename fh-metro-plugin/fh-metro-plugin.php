<?php
/**
 * Plugin Name: Metro Report Custom Plugin
 * Author: Faruzan Halimi
 * Description: This custom plugin adds a custom message and shortcode for The Metro Report.
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// This is the add_action hook to Enqueue the plugin styles
function fh_metro_plugin_enqueue_assets() {
  wp_enqueue_style(
    'fh-metro-plugin-style',
    plugin_dir_url( __FILE__ ) . 'plugin.css'
  );
}
add_action( 'wp_enqueue_scripts', 'fh_metro_plugin_enqueue_assets' );


// This iis the add_filter hook for the custom message.
function fh_metro_append_post_message( $content ) {

  if ( is_single() && in_the_loop() && is_main_query() ) {
    $message = '<div class="metro-post-message">';
    $message .= '<p><strong>Stay Informed:</strong> Follow The Metro Report for more local news updates.</p>';
    $message .= '</div>';

    return $content . $message;
    
  }

  return $content;
}
add_filter( 'the_content', 'fh_metro_append_post_message' );


// This is the add_shortcode for the custom shortcode.
function fh_metro_alert_shortcode( $atts ) {

  $atts = shortcode_atts(
    array(
      'text' => 'Breaking News',
    ),
    $atts,
    'metro_alert'
  );

  $output  = '<div class="metro-alert">';
  $output .= esc_html( $atts['text'] );
  $output .= '</div>';
  return $output;
}
add_shortcode( 'metro_alert', 'fh_metro_alert_shortcode' );