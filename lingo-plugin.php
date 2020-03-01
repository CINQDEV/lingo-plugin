<?php
/**
 * @package Linco Lingo
 * @version 1
 */
/*
Plugin Name: Linco Linco
Plugin URI: http://www.cinq.co.uk
Description: Linco Lingo Plugin for wordpress
Author: WRM
Version: 1.0 initial 
*/
if(!function_exists('wp_get_current_user')) {
    include(ABSPATH . "wp-includes/pluggable.php");
}





function enqueue_style_tmx_profiles()
{
    global $ver_num; // define global variable for the version number
    $ver_num = mt_rand(); // on each call/load of the style the $ver_num will get different value
 wp_enqueue_style('lingo-admin_css', plugins_url('assets/css/lingo-admin.css', __FILE__), false, $ver_num, 'all');
  //  wp_enqueue_script( 'evolok_js', plugins_url( 'assets/js/evolok.js', __FILE__ ), array('jquery'), $ver_num,  'all');

}

add_action('admin_enqueue_scripts', 'enqueue_style_tmx_profiles');

include("parts/acf.php");
include("parts/custom_posts.php");
include("parts/custom_tax.php");

?>