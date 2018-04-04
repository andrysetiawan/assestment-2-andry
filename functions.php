<?php

/**
 * This function use to register menu themes
 */
if(!function_exists('register_andry_theme_menu'))
{
	function register_andry_theme_menu() {
	  	register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_andry_theme_menu' );	
}

/**
 * This function use to enqueue the style/css file
 */
if(!function_exists("andry_theme_enqueue_style"))
{
	function andry_theme_enqueue_style() {
		wp_enqueue_style( 'core', get_template_directory_uri() .'/style.css', false ); 
	}
	add_action( 'wp_enqueue_scripts', 'andry_theme_enqueue_style' );
}

/**
 * This function use to enqueue the script/js file
 */
if(!function_exists('andry_theme_enqueue_script'))
{
	function andry_theme_enqueue_script() {
		wp_enqueue_script( 'my-js', get_template_directory_uri() .'/js/scripts.js', array( 'jquery' ), false, true );
	}
	add_action( 'wp_enqueue_scripts', 'andry_theme_enqueue_script' );
}




?>