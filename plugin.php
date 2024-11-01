<?php
/*
Plugin Name: Sticky One-Many
Plugin URI: http://wordpress.org/plugins/sticky-one-many/
Description: Stick Your Elements, like header, sidebar one or multiple
Author: Nayeem Hyder
Version: 1.0
Author URI: http://www.nayeemriddhi.info/
*/


// For Content Settings 
include_once(plugin_dir_path( __FILE__ ) . '/library/csf/stm-framework.php');

// Stick Many Contents
include_once( plugin_dir_path( __FILE__ ) . '/stickmany-loop.php' );


//Load Js file for plugin
function stickmany_plugin_main_js() {

     wp_enqueue_script( 'stickmany-customjs', plugins_url( '/assets/js/jquery.jsticky.js', __FILE__ ), array('jquery'), time(), true);

}  add_action('init','stickmany_plugin_main_js');


//Load Css file for plugin
function stickmany_plugin_main_css() {
   
    wp_enqueue_style( 'stickymany-css', plugins_url( '/assets/css/style.css', __FILE__ ));
    
} add_action('init','stickmany_plugin_main_css');









