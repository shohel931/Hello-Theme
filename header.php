<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header_area">
    <div class="main_header">
        <div class="logo_area">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('logo_setting'); ?>" alt=""></a>
        </div>
        <div class="menu_area">
             <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav'));  ?>
        </div>
        <div class="icon_box">
        <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
        <span></span>
        <i class="fa-solid fa-cart-shopping" id="cart_icon"></i>
        </div>

        <div class="search_area">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <input type="text" name="s" placeholder="Search..." required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="cart_area">
            <p>Cart is empty</p>
            <button class="close_cart">X</button>
            <div class="cart_items">
                <p>No items in cart</p>
    </div>
</header>
    





<?php wp_footer(); ?>
</body>
</html>