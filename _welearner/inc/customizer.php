<?php
/**
 * Welearner Theme Customizer
 *
 * @package Welearner
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _welearner_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'welearner_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'welearner_customize_partial_blogdescription',
			)
		);
		
	}
	$wp_customize->selective_refresh->add_partial( '_welearner_header_login', array(
    'selector' => 'a.login-btn', 
	));
	$wp_customize->selective_refresh->add_partial( '_welearner_header_getstarted', array(
    'selector' => 'a.header-btn',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_first_text', array(
        'selector' => 'a.first-button',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_second_text', array(
        'selector' => 'a.second-button',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_third_text', array(
        'selector' => 'a.third-button',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_fourth_text', array(
        'selector' => 'a.fourth-button',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_fifth_text', array(
        'selector' => 'a.fifth-button',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_sixth_text', array(
        'selector' => 'a.sixth-button',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_seventh_text', array(
        'selector' => 'a.seventh-button',
    ));
    $wp_customize->selective_refresh->add_partial( '_welearner_popilar_topic_eighth_text', array(
        'selector' => 'a.eighth-button',
    ));
	
	/*################## HEADER SETTINGS ########################*/

    $wp_customize->add_section('_welearner_general_options', array(
        'title' => esc_html__( 'Header Section', '_welearner' ),
        'description' => esc_html__( 'You can change header options from here.', '_welearner' ),
        'priority'       => 21,
    ));
	 $wp_customize->add_setting('_welearner_header_login', array(
        'default' => 'Login',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_header_login', array(
        'type' => 'text',
        'label' => esc_html__( 'Login Button Text', '_welearner' ),
        'section' => '_welearner_general_options'
    ));
	$wp_customize->add_setting('_welearner_header_login_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_header_login_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Login Button URL', '_welearner' ),
        'section' => '_welearner_general_options'
    ));	
	
	$wp_customize->add_setting('_welearner_header_getstarted', array(
        'default' => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_header_getstarted', array(
        'type' => 'text',
        'label' => esc_html__( 'Get Started Button Text', '_welearner' ),
        'section' => '_welearner_general_options'
    ));
	$wp_customize->add_setting('_welearner_header_getstarted_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_header_getstarted_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Get Started Button URL', '_welearner' ),
        'section' => '_welearner_general_options'
    ));	
	
	
	/*################## HEADER SETTINGS ########################*/

    $wp_customize->add_section('_welearner_slider_options', array(
        'title' => esc_html__( 'Slide Section', '_welearner' ),
        'description' => esc_html__( 'You can change slider options from here.', '_welearner' ),
        'priority'       => 22,
    ));
	$wp_customize->add_setting('_welearner_slider_background', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_slider_background_control', array(
        'label'             => esc_html__('Hero Background Image', '_welearner'),
        'section'           => '_welearner_slider_options',
        'settings'          => '_welearner_slider_background'
	)));
	
	$wp_customize->add_setting('_welearner_slider_header_text', array(
        'default' => '',
        'sanitize_callback' => '_welearner_sanitize_site_info',
    ));

    $wp_customize->add_control('_welearner_slider_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Slide Header text', '_welearner' ),
        'section' => '_welearner_slider_options'
    ));
	
	
	
	
	$wp_customize->add_setting('_welearner_slider_small_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_slider_small_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Slide small text', '_welearner' ),
        'section' => '_welearner_slider_options'
    ));
	$wp_customize->add_setting('_welearner_slider_image', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_slider_image_control', array(
        'label'             => esc_html__('Hero  Image', '_welearner'),
        'section'           => '_welearner_slider_options',
        'settings'          => '_welearner_slider_image'
    )));
    

    /*################## Popular SETTINGS ########################*/
    $wp_customize->add_panel( 'panel_popular_option', array(
        'priority'       => 150,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __('Popular Topics', '_welearner'),
         'description'    => __('Several settings pertaining my theme', '_welearner'),
         'priority'       => 23,
       ) );
    $wp_customize->add_section('_welearner_popular_topic_header', array(
        'title' => esc_html__( 'Popular Topic section header text', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
    $wp_customize->add_setting('_welearner_popular_topic_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popular_topic_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic section header', '_welearner' ),
        'section' => '_welearner_popular_topic_header'
    ));
    $wp_customize->add_section('_welearner_popular_first_options', array(
        'title' => esc_html__( 'Popular Topic First Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_first_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_first_img_control', array(
        'label'             => esc_html__('Popular Topic First Button Image', '_welearner'),
        'section'           => '_welearner_popular_first_options',
        'settings'          => '_welearner_popilar_topic_first_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_first_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_first_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic first button text', '_welearner' ),
        'section' => '_welearner_popular_first_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_first_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_first_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic first button url', '_welearner' ),
        'section' => '_welearner_popular_first_options'
    ));
    $wp_customize->add_section('_welearner_popular_second_options', array(
        'title' => esc_html__( 'Popular Topic second Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_second_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_second_img_control', array(
        'label'             => esc_html__('Popular Topic second Button Image', '_welearner'),
        'section'           => '_welearner_popular_second_options',
        'settings'          => '_welearner_popilar_topic_second_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_second_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_second_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic second button text', '_welearner' ),
        'section' => '_welearner_popular_second_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_second_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_second_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic second button url', '_welearner' ),
        'section' => '_welearner_popular_second_options'
    ));
	$wp_customize->add_section('_welearner_popular_third_options', array(
        'title' => esc_html__( 'Popular Topic third Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_third_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_third_img_control', array(
        'label'             => esc_html__('Popular Topic third Button Image', '_welearner'),
        'section'           => '_welearner_popular_third_options',
        'settings'          => '_welearner_popilar_topic_third_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_third_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_third_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic third button text', '_welearner' ),
        'section' => '_welearner_popular_third_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_third_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_third_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic third button url', '_welearner' ),
        'section' => '_welearner_popular_third_options'
    ));
	$wp_customize->add_section('_welearner_popular_fourth_options', array(
        'title' => esc_html__( 'Popular Topic fourth Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_fourth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_fourth_img_control', array(
        'label'             => esc_html__('Popular Topic fourth Button Image', '_welearner'),
        'section'           => '_welearner_popular_fourth_options',
        'settings'          => '_welearner_popilar_topic_fourth_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_fourth_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_fourth_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic fourth button text', '_welearner' ),
        'section' => '_welearner_popular_fourth_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_fourth_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_fourth_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic fourth button url', '_welearner' ),
        'section' => '_welearner_popular_fourth_options'
    ));
	$wp_customize->add_section('_welearner_popular_fifth_options', array(
        'title' => esc_html__( 'Popular Topic fifth Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_fifth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_fifth_img_control', array(
        'label'             => esc_html__('Popular Topic fifth Button Image', '_welearner'),
        'section'           => '_welearner_popular_fifth_options',
        'settings'          => '_welearner_popilar_topic_fifth_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_fifth_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_fifth_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic fifth button text', '_welearner' ),
        'section' => '_welearner_popular_fifth_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_fifth_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_fifth_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic fifth button url', '_welearner' ),
        'section' => '_welearner_popular_fifth_options'
    ));
	$wp_customize->add_section('_welearner_popular_sixth_options', array(
        'title' => esc_html__( 'Popular Topic sixth Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_sixth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_sixth_img_control', array(
        'label'             => esc_html__('Popular Topic sixth Button Image', '_welearner'),
        'section'           => '_welearner_popular_sixth_options',
        'settings'          => '_welearner_popilar_topic_sixth_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_sixth_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_sixth_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic sixth button text', '_welearner' ),
        'section' => '_welearner_popular_sixth_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_sixth_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_sixth_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic sixth button url', '_welearner' ),
        'section' => '_welearner_popular_sixth_options'
    ));
	$wp_customize->add_section('_welearner_popular_seventh_options', array(
        'title' => esc_html__( 'Popular Topic seventh Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_seventh_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_seventh_img_control', array(
        'label'             => esc_html__('Popular Topic seventh Button Image', '_welearner'),
        'section'           => '_welearner_popular_seventh_options',
        'settings'          => '_welearner_popilar_topic_seventh_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_seventh_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_seventh_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic seventh button text', '_welearner' ),
        'section' => '_welearner_popular_seventh_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_seventh_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_seventh_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic seventh button url', '_welearner' ),
        'section' => '_welearner_popular_seventh_options'
    ));
	$wp_customize->add_section('_welearner_popular_eighth_options', array(
        'title' => esc_html__( 'Popular Topic eighth Button', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
        'panel'  => 'panel_popular_option',
    ));
	$wp_customize->add_setting('_welearner_popilar_topic_eighth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_popilar_topic_eighth_img_control', array(
        'label'             => esc_html__('Popular Topic eighth Button Image', '_welearner'),
        'section'           => '_welearner_popular_eighth_options',
        'settings'          => '_welearner_popilar_topic_eighth_img'
    )));
    $wp_customize->add_setting('_welearner_popilar_topic_eighth_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_eighth_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic eighth button text', '_welearner' ),
        'section' => '_welearner_popular_eighth_options'
    ));
    $wp_customize->add_setting('_welearner_popilar_topic_eighth_url', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_popilar_topic_eighth_url', array(
        'type' => 'text',
        'label' => esc_html__( 'Popular topic eighth button url', '_welearner' ),
        'section' => '_welearner_popular_eighth_options'
    ));
	/*################## TRENDING COURSE SETTINGS ########################*/

    $wp_customize->add_section('_welearner_trending_course_header', array(
        'title' => esc_html__( 'Trending course section', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
		'priority'       => 24,

    ));
    $wp_customize->add_setting('_welearner_trending_course_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_trending_course_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Trending course section header text', '_welearner' ),
        'section' => '_welearner_trending_course_header'
    ));
		/*################## TOP RATED COURSE SETTINGS ########################*/

    $wp_customize->add_section('_welearner_top_course_header', array(
        'title' => esc_html__( 'Top rated course section', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
		'priority'       => 25,

    ));
    $wp_customize->add_setting('_welearner_top_course_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_top_course_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Top rated course section header text', '_welearner' ),
        'section' => '_welearner_top_course_header'
    ));
	
		/*#################TESTIMONIAL SETTINGS ########################*/

    $wp_customize->add_section('_welearner_testimonial_header', array(
        'title' => esc_html__( 'Testimonial section', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
		'priority'       => 26,

    ));
    $wp_customize->add_setting('_welearner_testimonial_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_testimonial_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Testimonial section header text', '_welearner' ),
        'section' => '_welearner_testimonial_header'
    ));
	$wp_customize->add_setting('_welearner_testimonial_header_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_testimonial_header_img_control', array(
        'label'             => esc_html__('Quote Image', '_welearner'),
        'section'           => '_welearner_testimonial_header',
        'settings'          => '_welearner_testimonial_header_img'
	)));
	$wp_customize->add_setting('_welearner_testimonial_header_slogan', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_testimonial_header_slogan', array(
        'type' => 'text',
        'label' => esc_html__( 'Testimonial section header slogan', '_welearner' ),
        'section' => '_welearner_testimonial_header'
    ));
	$wp_customize->add_setting('_welearner_testimonial_background_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_testimonial_background_img_control', array(
        'label'             => esc_html__('Testimonial Background Image', '_welearner'),
        'section'           => '_welearner_testimonial_header',
        'settings'          => '_welearner_testimonial_background_img'
	)));
	/*#################CREATOR SETTINGS ########################*/

    $wp_customize->add_section('_welearner_creator_header', array(
        'title' => esc_html__( 'Creator section', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
		'priority'       => 26,

    ));
    $wp_customize->add_setting('_welearner_creator_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_creator_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Creator section header text', '_welearner' ),
        'section' => '_welearner_creator_header'
    ));
	$wp_customize->add_setting('_welearner_creator_header_slogan', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_creator_header_slogan', array(
        'type' => 'text',
        'label' => esc_html__( 'Creator section header slogan', '_welearner' ),
        'section' => '_welearner_creator_header'
    ));
	/*#################BLOG SETTINGS ########################*/

    $wp_customize->add_section('_welearner_blog_option', array(
        'title' => esc_html__( 'Blog section', '_welearner' ),
        'description' => esc_html__( 'Make changes from here.', '_welearner' ),
		'priority'       => 26,

    ));
		$wp_customize->add_setting('_welearner_blog_background_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_blog_background_img_control', array(
        'label'             => esc_html__('Blog and creator background', '_welearner'),
        'section'           => '_welearner_blog_option',
        'settings'          => '_welearner_blog_background_img'
    )));

    $wp_customize->add_setting('_welearner_blog_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_blog_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Blog section header text', '_welearner' ),
        'section' => '_welearner_blog_option'
    ));
	/*################## CLIENT SETTINGS ########################*/

    $wp_customize->add_section('_welearner_brand_options', array(
        'title' => esc_html__( 'Client Logo Section', '_welearner' ),
        'description' => esc_html__( 'You can change client logo from here.', '_welearner' ),
        'priority'       => 27,
    ));
	$wp_customize->add_setting('_welearner_brand_header_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('_welearner_brand_header_text', array(
        'type' => 'text',
        'label' => esc_html__( 'Brand upper text', '_welearner' ),
        'section' => '_welearner_brand_options'
    ));
	$wp_customize->add_setting('_welearner_brand_first_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_first_img_control', array(
        'label'             => esc_html__('Client first logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_first_img'
	)));
	$wp_customize->add_setting('_welearner_brand_second_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_second_img_control', array(
        'label'             => esc_html__('Client second logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_second_img'
	)));
	$wp_customize->add_setting('_welearner_brand_third_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_third_img_control', array(
        'label'             => esc_html__('Client third logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_third_img'
	)));
	$wp_customize->add_setting('_welearner_brand_fourth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_fourth_img_control', array(
        'label'             => esc_html__('Client fourth logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_fourth_img'
	)));
	$wp_customize->add_setting('_welearner_brand_fifth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_fifth_img_control', array(
        'label'             => esc_html__('Client fifth logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_fifth_img'
	)));
	$wp_customize->add_setting('_welearner_brand_sixth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_sixth_img_control', array(
        'label'             => esc_html__('Client sixth logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_sixth_img'
	)));
	$wp_customize->add_setting('_welearner_brand_seventh_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_seventh_img_control', array(
        'label'             => esc_html__('Client seventh logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_seventh_img'
	)));
	$wp_customize->add_setting('_welearner_brand_eighth_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_brand_eighth_img_control', array(
        'label'             => esc_html__('Client eighth logo', '_welearner'),
        'section'           => '_welearner_brand_options',
        'settings'          => '_welearner_brand_eighth_img'
	)));
	/*################## FOOTER SETTINGS ########################*/

    $wp_customize->add_section('_welearner_footer_options', array(
        'title' => esc_html__( 'Footer Section', '_welearner' ),
        'description' => esc_html__( 'You can change client logo from here.', '_welearner' ),
        'priority'       => 28,
	));
    
	$wp_customize->add_setting('_welearner_footer_background_img', array(
        'transport'         => 'refresh',
        'height'         => 325,
		'sanitize_callback' => '_welearner_sanitize_image',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_welearner_footer_background_img_control', array(
        'label'             => esc_html__('Footer background image', '_welearner'),
        'section'           => '_welearner_footer_options',
        'settings'          => '_welearner_footer_background_img'
	)));
    $wp_customize->add_setting('_welearner_footer_layout', array(
        'default' => '4,2,2,2,2',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => '_welearner_validate_footer_layout'
    ));

    $wp_customize->add_control('_welearner_footer_layout', array(
        'type' => 'text',
        'label' => esc_html__( 'Footer Layout', '_welearner' ),
        'section' => '_welearner_footer_options'
    ));
    
	

	
	
	
}
add_action( 'customize_register', '_welearner_customize_register' );
function _welearner_validate_footer_layout( $validity, $value) {
    if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
        $validity->add('invalid_footer_layout', esc_html__( 'Footer layout is invalid', '_welearner' ));
    }
    return $validity;
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function welearner_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function welearner_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function welearner_customize_preview_js() {
	wp_enqueue_script( 'welearner-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}

add_action( 'customize_preview_init', 'welearner_customize_preview_js' );

function _welearner_sanitize_site_info( $input ) {
    $allowed = array(
        'br' => array(),
        'span' => array()
    );
    return wp_kses($input, $allowed);
}

function _welearner_sanitize_image( $input, $setting ) {
	return esc_url_raw( _welearner_validate_image( $input, $setting->default ) );
}

/**
 * Validation: image
 * Control: text, WP_Customize_Image_Control
 *
 * @uses	wp_check_filetype()		https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @uses	in_array()				http://php.net/manual/en/function.in-array.php
 */
 
function _welearner_validate_image( $input, $default = '' ) {
	// Array of valid image file types
	// The array includes image mime types
	// that are included in wp_get_mime_types()
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension
	// and mime_type
	$file = wp_check_filetype( $input, $mimes );
	// If $input has a valid mime_type,
	// return it; otherwise, return
	// the default.
	return ( $file['ext'] ? $input : $default );
}
