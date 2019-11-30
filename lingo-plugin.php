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

include("parts/acf.php");
include("parts/custom_posts.php");

?>