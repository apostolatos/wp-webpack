<?php
/**
 * Functions and definitions
 *
 */
// register webpack stylesheet and js with theme
wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/build/main.min.css' );
wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/js/build/app.min.js' , null , null , true );

add_filter('excerpt_length', 'custom_excerpt_length', 999);

function custom_excerpt_length( $length ) {
    return 20;
}

add_filter('excerpt_more', 'excerpt_readmore');

function excerpt_readmore($more) {
    return '...';
}

remove_filter('the_excerpt', 'wpautop');


add_action("wp_ajax_contact_form" , "contact_form_handler");
add_action("wp_ajax_nopriv_contact_form" , "contact_form_handler");

function contact_form_handler() {
    //echo json_encode($_POST);

    print json_encode([
        'message' => 'This Form has been sent'
    ]);

    wp_die();
}

add_filter('allowed_http_origins', 'add_allowed_origins');

function add_allowed_origins($origins) {
    $origins[] = 'https://www.yourdomain.com';
    return $origins;
}