<?php 
// Enqueue styles and scripts
function css_ja_file_calling() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('main', get_template_directory_uri().'/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main');
    
    
    // jQuary calling
    wp_enqueue_script( 'jquary');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
    
}
    add_action('wp_enqueue_scripts', 'css_ja_file_calling');
    
    
// Google fonts calling
function google_fonts(){
wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap', false);
wp_enqueue_style('font_awesoum', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', false);
}
add_action('wp_enqueue_scripts', 'google_fonts');



