<?php  

// Template Name: Front Page
// Template Post Type: page, post
get_header(); ?>


<section id="product_area">
    <div class="container">
      <div class="row">
        <?php 
        query_posts('post_type=custom_product&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-md-4">
          <div class="child_service">
          <h2><?php the_title(); ?></h2>
          <?php echo the_post_thumbnail('custom_product') ?>
          <?php the_excerpt(  ); ?>
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