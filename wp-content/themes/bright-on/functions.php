<?php

function enqueue_myfiles() {
    if(is_front_page()){
        wp_enqueue_style('home-css', get_stylesheet_directory_uri(). '/css/home.css', array(), '1.0');
        wp_enqueue_style('menu-css', get_stylesheet_directory_uri(). '/css/top-menu.css', array(), '1.0');
        wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), time(), true);

        /***** Add common enqueues here *****/
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri(). '/assets/third-party-lib/css/bootstrap.min.css', array(), '1.0');
        wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() .'/assets/third-party-lib/js/bootstrap.js', array(), time(), true);
        wp_enqueue_script('jquery-min', get_stylesheet_directory_uri() .'/assets/third-party-lib/js/jquery-3.4.1.min.js', array('jquery'), time(), true);

        wp_enqueue_style('style-map', get_stylesheet_directory_uri(). '/assets/third-party-lib/css/style.css.map', array(), '1.0');
        wp_enqueue_style('responsive', get_stylesheet_directory_uri(). '/assets/css/responsive.css', array(), '1.0');
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_myfiles' );

/***** DEQUEUE WORDPRESS DEFAULT STYLES *****/
if (!function_exists("dequeue_parent_styles")) {
    function dequeue_parent_styles()
    {
        
        wp_dequeue_style('twenty-twenty-one-style');
        wp_deregister_style('twenty-twenty-one-style');
        wp_dequeue_style("wp-block-library");
        wp_dequeue_style("classic-theme-styles");
        wp_dequeue_style("global-styles");
        wp_dequeue_style("wc-blocks-vendors-style");
        wp_dequeue_style("wc-blocks-style");
        wp_dequeue_style("woocommerce-layout");
        wp_dequeue_style("woocommerce-smallscreen");
        wp_dequeue_style("woocommerce-general");
        wp_dequeue_style("twenty-twenty-one-print-style");
        wp_dequeue_style("dashicons");
    }
}
add_action('wp_print_styles', 'dequeue_parent_styles');

/***** REMOVE WP_HEAD UNUSED INDEX CSS *****/
function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
} 
add_action('get_header', 'my_filter_head');


// add theme options-----------------------------------------------------

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(

		'page_title' 	=> 'Theme Settings',

		'menu_title'	=> 'Theme Settings',

		'menu_slug' 	=> 'theme-general-settings',

		'capability'	=> 'edit_posts',

		'redirect'		=> false

	));

 }
 if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(

		'page_title' 	=> 'Theme Header Settings',

		'menu_title'	=> 'Header',

		'parent_slug'	=> 'theme-general-settings',

	));
    acf_add_options_sub_page(array(

		'page_title' 	=> 'Theme Footer Settings',

		'menu_title'	=> 'Footer',

		'parent_slug'	=> 'theme-general-settings',

	));
}    