<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>






<section id="home_area2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <h2 class="section-title">Categories</h2>
    <div class="categories">
      <div class="card">🥬 Vegetables</div>
      <div class="card">🍎 Fruits</div>
      <div class="card">🥛 Dairy</div>
      <div class="card">🍞 Bakery</div>
    </div>
            </div>
            <div class="col-md-9">
                <h2>Shop By Category</h2>
            <div class="main_card">
                <div class="sub_card">
                    <a href=""><img src="<?php echo get_template_directory_uri(). '/img/smapl.jpg' ?>" alt=""></a>
                    <p>Fruits</p>
                </div>
                <div class="sub_card">
                <a href=""><img src="<?php echo get_template_directory_uri(). '/img/smapl.jpg' ?>" alt=""></a>
                    <p>Fruits</p>
                </div>
                <div class="sub_card">
                <a href=""><img src="<?php echo get_template_directory_uri(). '/img/smapl.jpg' ?>" alt=""></a>
                    <p>Fruits</p>
                </div>
                <div class="sub_card">
                <a href=""><img src="<?php echo get_template_directory_uri(). '/img/smapl.jpg' ?>" alt=""></a>
                    <p>Fruits</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section id="home_area3"></section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Featured Products</h2>
                <div class="product-grid">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                    ?>
                            <div class="product-card">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo wc_placeholder_img_src(); ?>" alt="Placeholder">
                                    <?php endif; ?>
                                </a>
                                <h3><?php the_title(); ?></h3>
                                <p class="price"><?php echo $product->get_price_html(); ?></p>
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="button add-to-cart">Add to Cart</a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No products found</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>