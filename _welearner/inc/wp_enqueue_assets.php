<?php

function _welearner_assets() {
	
    wp_enqueue_style( '_welearner-bootstrap-stylesheet', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( '_welearner-fontawesome-stylesheet', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );

	
    wp_enqueue_style( '_welearner-slick-stylesheet', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_welearner-meanmenu-stylesheet', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( '_welearner-style-stylesheet', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_welearner-responsive-stylesheet', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
	

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( '_welearner-bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( '_welearner-popper-scripts', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( '_welearner-waypoints-scripts', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( '_welearner-counter-scripts', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( '_welearner-meanmenu-scripts', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( '_welearner-slick-scripts', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( '_welearner-main-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
   
}
add_action('wp_enqueue_scripts', '_welearner_assets');





       
