<?php
/**
 * Functions and definitions
 *
 */

/*
 * Enqueue script for custom customize control.
 * Register webpack stylesheet and js with theme
 */
function epignosis_enqueue_front_page_scripts() {
    if ( !is_admin() ) {
        wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/build/main.min.css' );
        wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/js/build/app.min.js' , null , null , true );
    }
}

add_action( 'wp_enqueue_scripts', 'epignosis_enqueue_front_page_scripts' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 */
function epignosis_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'epignosis_post_thumbnails' );

/*
 * Filters the maximum number of words in a post excerpt.
 *
 */
function custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
 * Override the_excerpt readmore
 */
function excerpt_readmore($more) {
    return '...';
}

add_filter( 'excerpt_more', 'excerpt_readmore' );

/* 
 * Hook into the_content before the wpautop filter has been called.
 * 
 * Remove the wpautop filter, which is added in wp-includes/default-filters.php
 * 
 */
remove_filter( 'the_excerpt', 'wpautop' );

/*
 * Fires authenticated Ajax actions.
 * 
 */
add_action( 'wp_ajax_contact_form' , 'contact_form_handler' );
add_action( 'wp_ajax_nopriv_contact_form' , 'contact_form_handler' );

function contact_form_handler() {
    print json_encode([
        'message' => 'This Form has been sent',
        'data' => json_encode($_POST)
    ]);

    wp_die();
}

/**
 *  An example CORS-compliant method.  It will allow any GET, POST, or OPTIONS requests from any
 *  origin.
 *
 */
add_filter('allowed_http_origins', 'add_allowed_origins');

function add_allowed_origins($origins) {
    $origins[] = 'localhost';

    return $origins;
}

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu', 'epignosis' ),
        'about' => __( 'About Links Menu', 'epignosis' ),
        'terms' => __( 'Terms Links Menu', 'epignosis' ),
    )
);

add_theme_support( 'menus' );

/*
 * Filters the CSS classes applied to a menu item’s list item element.
 * 
 */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }

    return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/* 
 * Displays a navigation menu.
 * 
 * @params $classes
 * @params $item
 * 
 * @return (void|string|false) 
 */
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }

    return $classes;
}

add_filter( 'nav_menu_css_class' , 'special_nav_class' , 10 , 2 );