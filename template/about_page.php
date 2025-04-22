<?php
/**
 * Template Name: About Page
 */

get_header(); ?>



  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #fefefc;
      color: #222;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background: white;
    }
    header h1 {
      color: green;
      font-size: 24px;
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: black;
      font-weight: 500;
    }
    section {
      padding: 40px;
    }
    .story {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
    }
    .story img {
      width: 300px;
      border-radius: 12px;
    }
    .story-text {
      flex: 1;
    }
    .story-text h2 {
      font-size: 28px;
      margin-bottom: 10px;
    }
    .story-text p {
      border-left: 3px solid #999;
      padding-left: 15px;
      font-size: 16px;
    }

    .who-we-are {
      display: flex;
      justify-content: space-between;
      gap: 40px;
      padding-top: 20px;
    }
    .who-we-are div {
      flex: 1;
    }
    .values {
      background: white;
      border-radius: 16px;
      padding: 40px;
    }
    .values h2 {
      text-align: left;
      margin-bottom: 30px;
    }
    .value-cards {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }
    .value-card {
      text-align: center;
      flex: 1;
    }
    .value-card img {
      width: 60px;
      height: 60px;
      margin-bottom: 10px;
    }
    .value-card h3 {
      margin-bottom: 10px;
    }
  </style>
<div class="container"></div>
    <div class="row">
        <div class="col-md-12">
  <header>
    <h1>Organic</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Shop</a>
      <a href="#">Contact</a>
      <a href="#">🛒</a>
    </nav>
  </header>

  <section class="story">
    <div class="story-text">
      <h2>Our Story</h2>
      <p><strong>Lorem ipsum</strong> dolor amet, consectetur adipiscing elit. Nullam ac ultrices ut feugiat lorem.</p>
    </div>
    <img src="https://cdn.pixabay.com/photo/2017/06/02/18/24/vegetables-2365958_1280.jpg" alt="Fruits and Vegetables">
  </section>

  <section class="who-we-are">
    <div>
      <h2>Who We Are</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare.</p>
    </div>
    <div>
      <h2>Who We Are</h2>
      <p>Vestibulum posuere, sapien et gravida tincidunt, lorem nisi sollicitudin odio. In consequat odio metus ac justo.</p>
    </div>
  </section>

  <section class="values">
    <h2>Our Values</h2>
    <div class="value-cards">
      <div class="value-card">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Quality">
        <h3>Quality</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="value-card">
        <img src="https://cdn-icons-png.flaticon.com/512/2913/2913464.png" alt="Sustainability">
        <h3>Sustainability</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="value-card">
        <img src="https://cdn-icons-png.flaticon.com/512/126/126122.png" alt="Community">
        <h3>Community</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </section>

  </div>
    </div>
</div>









<div class="about-page">
    <section class="hero">
        <h1><?php the_title(); ?></h1>
    </section>

    <section class="content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </section>
</div>

<?php get_footer(); ?>