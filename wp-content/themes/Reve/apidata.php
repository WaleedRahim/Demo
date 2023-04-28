<?php
/*  api data  */
// abc

?>



<?php

function register_apidata_cpt() {

$labels = array(
    'name' => _x( 'Dummy Posts', 'Post Type General Name', 'reve' ),
    'singular_name' => _x( 'Api Data', 'Post Type Singular Name', 'reve' ),
    'menu_name' => _x( 'Api Posts', 'Admin Menu text', 'reve' ),
    'name_admin_bar' => _x( 'Api Data', 'Add New on Toolbar', 'reve' ),
    'archives' => __( 'Api Data Archives', 'reve' ),
    'attributes' => __( 'Api Data Attributes', 'reve' ),
    'parent_item_colon' => __( 'Parent Api Data:', 'reve' ),
    'all_items' => __( 'All Api Posts', 'reve' ),
    'add_new_item' => __( 'Add New Api Data', 'reve' ),
    'add_new' => __( 'Add New', 'reve' ),
    'new_item' => __( 'New Api Data', 'reve' ),
    'edit_item' => __( 'Edit Api Data', 'reve' ),
    'update_item' => __( 'Update Api Data', 'reve' ),
    'view_item' => __( 'View Api Data', 'reve' ),
    'view_items' => __( 'View Api Posts', 'reve' ),
    'search_items' => __( 'Search Api Data', 'reve' ),
    'not_found' => __( 'Not found', 'reve' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'reve' ),
    'featured_image' => __( 'Featured Image', 'reve' ),
    'set_featured_image' => __( 'Set featured image', 'reve' ),
    'remove_featured_image' => __( 'Remove featured image', 'reve' ),
    'use_featured_image' => __( 'Use as featured image', 'reve' ),
    'insert_into_item' => __( 'Insert into Api Data', 'reve' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Api Data', 'reve' ),
    'items_list' => __( 'Api Posts list', 'reve' ),
    'items_list_navigation' => __( 'Api Posts list navigation', 'reve' ),
    'filter_items_list' => __( 'Filter Api Posts list', 'reve' ),
);
$args = array(
    'label' => __( 'Dummy Data', 'reve' ),
    'description' => __( 'This is the Data From Postman', 'reve' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-admin-network',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'Custom-fields'),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 6,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => false,
    'capability_type' => 'post',
);
register_post_type( 'dummy', $args );

}
add_action( 'init', 'register_apidata_cpt'); 