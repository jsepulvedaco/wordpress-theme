<?php

function learningWordPress_resources() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'learningWordPress_resources' );

// Get top get top get top ancestor id

function get_top_ancestor_id () {

    global $post;

    if ( $post->post_parent ) {
        $ancestors = array_reverse( get_post_ancestors($post->ID) );
        return $ancestors[0];
    }

    return $post->ID;
}

// does page has children?

function has_children () {

        global $post;
        $pages = get_pages( 'child_of=' . $post->ID );
        return count( $pages );

}

// Customize excerpt word count length
function custom_excerpt_length () {
    return 25;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

// Theme setup
function learningWordpress_setup () {

    // Navigation Menus
    register_nav_menus (array(
        'primary' => __( 'Primary Menu' ),
        'footer' => __( 'Footer Menu' )
    ));

    // Add feature image support
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'small-thumbnail', 180, 120, true ); //width, tall, hard cropping true/soft cropping false
    add_image_size( 'banner-image', 920, 210, array('left', 'top') ); // array is for selecting the part of the image to be cropped

    // Add post format support
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link') );

}

add_action( 'after_setup_theme', 'learningWordpress_setup' );

/* Add our widget locations */
function ourWidgetsInit () {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">', // poner divs para remover los bullets
        'after_widget' => '</div>', // cerrar el div que abrimos
        'before_title' => '<h4>',
        'after_title' => '</h4>'

    ));

    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer1'
    ));

    register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer2'
    ));

    register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer3'
    ));

    register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer4'
    ));
}

add_action( 'widgets_init', 'ourWidgetsInit' );
