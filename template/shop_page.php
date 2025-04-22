<?php
/**
 * Template Name: Shop Page
 */

get_header(); ?>

<div class="shop-page">
    <h1><?php the_title(); ?></h1>
    
    <div class="products">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="product">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p><?php echo wc_get_product(get_the_ID())->get_price_html(); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'No products found', 'hellotheme' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>