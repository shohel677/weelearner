<?php

function _welearner_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
	add_image_size( 'course-thumb', 308, 161 );
	add_image_size( 'testimonial-thumb', 70, 70 );
	add_image_size( 'blog-thumb', 350, 204 );
	add_image_size( 'creator-thumb', 354, 354, true );
    add_theme_support( 'automatic-feed-links' );
	add_theme_support( "custom-background", $args );
	add_theme_support( "custom-header", $args );
	add_editor_style();
    add_theme_support( 'html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption') );
	add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-logo', array(
        'height' => 200,
        'width' => 600,
        'flex-height' => true,
        'flex-width' => true
    ) );

}

add_action( 'after_setup_theme', '_welearner_theme_support' );




       
