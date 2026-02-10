<?php
/**
 * functions.php
 * 
 * This file is used for setting up the WordPress theme functionalities,
 * including enqueueing styles and scripts, custom theme support, etc.
 */

// Enqueue styles and scripts
function harmonics_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // Add other stylesheets or scripts here
}
add_action('wp_enqueue_scripts', 'harmonics_enqueue_scripts');

// Add theme support for post thumbnails
add_theme_support('post-thumbnails');

// Register nav menus
function harmonics_register_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('init', 'harmonics_register_menus');

// Other theme custom functions can be added below
