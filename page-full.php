<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section id = "about">
      <div class="center"><?php the_title(); ?></div>
      <?php the_content(); ?>
	</section>

    <?php endwhile; // end the loop?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>