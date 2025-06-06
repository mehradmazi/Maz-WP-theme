<?php
function maz_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('woocommerce');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'maz-theme')
    ));
}
add_action('after_setup_theme', 'maz_theme_setup');

function maz_theme_enqueue_scripts() {
    wp_enqueue_style('maz-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('maz-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'maz_theme_enqueue_scripts');

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
?>
