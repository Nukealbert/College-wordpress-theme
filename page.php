<?php get_header(); ?>


 
<!-- <div class="container">

      <div class="row">
        <section class="col">
       
          <?php while ( have_posts() ) : the_post(); ?>

            <article>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </article>

          <?php endwhile; ?>
        </section>
      </div>
</div> -->
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
      <div class="sidebar">
              <a class="active" href="#home">Home</a>
              <a href="#news">News</a>
              <a href="#contact">Contact</a>
              <a href="#about">About</a>
      </div> 
    </div>
 </div>
</div>



<?php get_footer(); ?>