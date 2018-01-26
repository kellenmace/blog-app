<?php
/*
 *  Blog App Functions
 */

function blogapp_enqueue_scripts() {

	wp_enqueue_style( 'wds-training', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

	wp_enqueue_script( 'wds-training', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

	//wp_localize_script( 'wds-training', 'WDSTTrainingData', $this->get_app_data() );
}
add_action( 'wp_enqueue_scripts', 'blogapp_enqueue_scripts' );
