<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'aos-styles', get_stylesheet_directory_uri() . '/css/aos.css', array() );
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/custom.js', array() );
    wp_enqueue_script( 'aos-scripts', get_stylesheet_directory_uri() . '/js/aos.js', array() );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

function register_my_menu() {
    register_nav_menu('menu-footer',__( 'Menu Footer' ));
  }
  add_action( 'init', 'register_my_menu' );

function wpb_custom_new_menu() {
register_nav_menus(
    array(
    'menu-footer' => __( 'Menu Footer' ),
    'menu-contact' => __( 'Menu Contact' )
    )
);
}
add_action( 'init', 'wpb_custom_new_menu' );
