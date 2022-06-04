<?php
/*
Plugin Name: Update MetaData for Posts
Description: Enable this plugin to update the metadata for all the posts
Author: Daniel Yarmolenko
Version: 1.0
Author URI: http://example.com
*/
// Run the loop when the plugin is activated
register_activation_hook(__FILE__, 'update_my_metadata');
function update_my_metadata(){
    $args = array(
        'post_type' => 'post', // Only get the posts
        'post_status' => 'publish', // Only the posts that are published
        'posts_per_page'   => -1 // Get every post
    );
    $posts = get_posts($args);
    foreach ( $posts as $post ) {
        // Run a loop and update every meta data
        update_post_meta( $post->ID, 'link', '#' );
        update_post_meta( $post->ID, 'name_of_site', 'View on Web' );
        update_post_meta( $post->ID, 'price', '$123.45' );
    }
}
?>