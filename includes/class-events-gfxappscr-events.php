<?php
/**
 * Example code for tutorial post on custom meta boxes:
 * https://wptheming.com/2010/08/custom-metabox-for-post-type/
 */

/**
 * Registers the Events post type.
 */
function wpt_Events_post_type() {

    $labels = array(
        'name'               => __( 'Events' ),
        'singular_name'      => __( 'Event' ),
        'add_new'            => __( 'Add New Event' ),
        'add_new_item'       => __( 'Add New Event' ),
        'edit_item'          => __( 'Edit Event' ),
        'new_item'           => __( 'Add New Event' ),
        'view_item'          => __( 'View Event' ),
        'search_items'       => __( 'Search Event' ),
        'not_found'          => __( 'No Event found' ),
        'not_found_in_trash' => __( 'No Event found in trash' )
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'comments',
        'revisions',
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'events' ),
        'has_archive'          => true,
        'menu_position'        => 2,
        'menu_icon'            => 'dashicons-calendar-alt',
    );

    register_post_type( 'Events', $args );

}
add_action( 'init', 'wpt_Events_post_type' );