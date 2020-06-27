<?php

add_action('wp_enqueue_scripts', 'thepress_load_scripts_style');

function thepress_load_scripts_style() {

	// version
	$version = rand(0,999);

	// Carrega jQuery nativo do WordPress
    wp_dequeue_script('jquery');
    wp_enqueue_script('jquery', false, array(), false, true);
    wp_enqueue_script('jquery-core', false, array(), false, true);
    wp_enqueue_script('jquery-migrate', false, array(), false, true);

	// Carrega os estilos CSS
	wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/static/css/estilos.css', 1, $version);

	// Carrega scripts JS
	wp_enqueue_script('app', get_stylesheet_directory_uri() . '/static/js/all.js', null, $version, true);

}
