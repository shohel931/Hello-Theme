<?php 

// Widget Register
function hellotheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'hellotheme' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here.', 'hellotheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'hellotheme' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here.', 'hellotheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'hellotheme' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here.', 'hellotheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action('init','hellotheme_widgets_init');