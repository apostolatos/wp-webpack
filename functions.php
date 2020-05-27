<?php
/**
 * Functions and definitions
 *
 */
// register webpack stylesheet and js with theme
wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/build/main.min.css' );
wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/js/build/app.min.js' , null , null , true );

add_filter('the_content', 'break_text');

function break_text($text) {
    $length = 300;
    if(strlen($text)<$length+10) return $text;

    $break_pos = strpos($text, ' ', $length);
    $visible = substr($text, 0, $break_pos);
    return balanceTags($visible) . " […]";
}