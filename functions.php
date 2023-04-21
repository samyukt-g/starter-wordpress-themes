<?php
function simple_theme_setup() {
    // Featured Image Support
    add_theme_support('post-thumbnails');

    // Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'simple_theme_setup');

// Modifying Excerpt Length
function simple_set_excerpt_length() {
    return 60;
}
add_filter('excerpt_length', 'simple_set_excerpt_length');


// Enqueueing style sheets
function simple_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'simple_enqueue_styles' );


 ?>
