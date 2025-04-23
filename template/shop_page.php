<?php
/**
 * Template Name: Shop Page
 */

get_header(); ?>

<section id="product_area">
    <div class="container">
      <div class="row">
        <?php 
        query_posts('post_type=custom_product&post_status=publish&posts_per_page=0&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-md-4">
          <div class="child_service">
          <h2><?php the_title(); ?></h2>
          <?php echo the_post_thumbnail('custom_product') ?>
          <?php the_excerpt(  ); ?>
            <div class="price"><?php echo get_post_meta(get_the_ID(), 'product_price', true); ?></div>
            <div class="button_area">
              <a href="<?php echo get_post_meta(get_the_ID(), 'product_link', true); ?>" class="btn btn-primary">Buy Now</a>
          </div>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>


<?php get_footer(); ?>