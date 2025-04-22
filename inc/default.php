<?php 
//Logo Customize
function logo_customize($wp_customize){
    $wp_customize->add_section('Logo_section', array(
        'title' =>__('Logo Update', 'hellotheme'),
        'priority' => 30,
        'description' => 'If you want to change the logo, you can do it from here',
    ));

    $wp_customize->add_setting('logo_setting', array(
        'default' => get_template_directory_uri(). '/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_setting', array(
        'label' => __("Logo Upload", 'hellotheme'),
        'section' => 'Logo_section',
        'settings' => 'logo_setting',
        'description' => 'Upload your logo here',
    )));

    

    //Copyright Customize
    $wp_customize->add_section('coppyright_section', array(
        'title' =>__('Coppyright', 'hellotheme'),
    ));

    $wp_customize->add_setting('coppyright_setting', array(
        'default' =>'&copy; Coppyright 2025 All Rights Reserved',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'coppyright_setting', array(
        'label' => __('Coppyright', 'hellotheme'),
        'section' => 'coppyright_section',
        'settings' => 'coppyright_setting',
        'description' => 'Coppyright Update',
    )));







}
add_action('customize_register', 'logo_customize');


// Thumbnail Image Area
add_theme_support('post-thumbnails', array('page', 'post', 'custom_product'));