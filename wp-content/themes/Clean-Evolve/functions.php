<?php

//add your css to the page
//this function needs wp_head(); in the layout's head section in order to output the css to the browser

if(!function_exists('load_styles_and_scripts')){

	function load_styles_and_scripts(){
		
		wp_enqueue_style('responsive-nav.css', get_stylesheet_directory_uri() . '/css/responsive-nav.css');
		wp_enqueue_script('jQuery-v1.12.4.js', get_stylesheet_directory_uri() . '/js/jQuery-v1.12.4.js');
		wp_enqueue_script('responsive-nav.min.js', get_stylesheet_directory_uri() . '/js/responsive-nav.min.js');
		//wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	}

}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

function load_custom_styles_last() {
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() .'/style.css', array('responsive-nav.css'));
}

add_action('init', 'load_custom_styles_last', 99);

//adds the ability to allow the user to add or change the logo through WP's Customizer on the admin panel
//needs the_custom_logo(); in the place you want the logo to appear

if(!function_exists('add_logo')) {

 	function add_logo() {
     	add_theme_support( 'custom-logo', array(
         'height'      => 100,
         'width'       => 248,
         'flex-height' => true,));
 	}

 }

add_action( 'after_setup_theme', 'add_logo' );

add_theme_support( 'post-thumbnails', array( 'page' ) );

add_action( 'init', 'my_add_excerpts_to_pages' );

function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

//register menus so t

function register_menu() {

  register_nav_menu('header-menu',__('Header Menu'));

}

add_action('init', 'register_menu');


//In order to add widgets for the site, you'll need to 'register' the widget

if(!function_exists('register_widget_areas')){

	function register_widget_areas() {
 
    	// First footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
	        'name' => __('Header: Logo'),
	        'id' => 'header-logo',
	        'description' => __('The logo section of the header.'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	) );
	    
	 register_sidebar( array(
	        'name' => __('Header: Contact'),
	        'id' => 'header-contact',
	        'description' => __('The contact section of the header.'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	 ) );

	    register_sidebar( array(
	        'name' => __('Header: Mission'),
	        'id' => 'header-mission',
	        'description' => __('The mission section of the header.'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	    ) );

    	register_sidebar( array(
	        'name' => __('Menu: Social Media'),
	        'id' => 'menu-social-media',
	        'description' => __('The social media section of the menu.'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ) );

	    register_sidebar( array(
	        'name' => __('About Summary'),
	        'id' => 'about-summary',
	        'description' => __('The about summary section of the homepage.'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	    ) );

	    register_sidebar( array(
	        'name' => __('Testimonial Slider'),
	        'id' => 'testimonials',
	        'description' => __('The testimonial slider on the homepage.'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	    ) );

	    register_sidebar( array(
	        'name' => __('Footer Map'),
	        'id' => 'footer-map',
	        'description' => __('The map section of the footer'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ));

	    register_sidebar( array(
	        'name' => __('Footer Form'),
	        'id' => 'footer-form',
	        'description' => __('The form section of the footer'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ));

	    register_sidebar( array(
	        'name' => __('Residential Additional Services'),
	        'id' => 'res-additional-services',
	        'description' => __('The additional services section of the Residential page'),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ));
	}

}

add_action('widgets_init', 'register_widget_areas');

function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );
