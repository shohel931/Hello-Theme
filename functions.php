<?php 


// Widget Register
include_once('inc/widgets_register.php');

// Default Register
include_once('inc/default.php');

// Menu Register
include_once('inc/menu_register.php');

// Enqueue Register
include_once('inc/enqueue.php');



function custom_register_product_post_type() {
    register_post_type('custom_product', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
            'add_new_item' => 'Add New Product'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-cart'
    ));
}
add_action('init', 'custom_register_product_post_type');
