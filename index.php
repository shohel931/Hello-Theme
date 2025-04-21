<?php get_header(); ?>


<section id="contant_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post_meta">
                        <p>Posted on: <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
                    </div>
                <?php endwhile; else : ?>
                    <h2 id="sorry_for"><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>