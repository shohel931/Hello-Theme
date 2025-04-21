<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>


<section id="home_area1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_area">
                <div class="text_area">
                <h1>Eat Fresh. Live Healthy.</h1>
                <p>100% Organic & Farm-fresh products</p>
            <button>Shop Now</button>
                </div>
            <div class="image_are">
                <img src="<?php echo get_template_directory_uri(). '/img/bol.jpg' ?>" alt="">
            </div>
            </div>
            </div>
        </div>
    </div>
</section>



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
            
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>