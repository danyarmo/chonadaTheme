<?php
function chonada_resources() {
    wp_enqueue_style('bootstrap-min-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css', array());
    wp_enqueue_style('font-roboto-condensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed');
    wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,900');
    wp_enqueue_style( 'style', get_stylesheet_uri(  ));
    wp_enqueue_script('jquery.min.js', get_template_directory_uri(  ).'/jquery.min' );
    wp_enqueue_script('main.js', get_template_directory_uri(  ).'/main.js',array(), null, true);
    wp_enqueue_script('popper.min.js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap.min.js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js' );
}
require_once('class-wp-bootstrap-navwalker.php');

add_action('wp_enqueue_scripts', 'chonada_resources');

function chonada_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'chonada_setup');

function custom_excerpt_length($length) {
    return 22;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function wpdocs_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');
?>