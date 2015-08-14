<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="center"><?php the_title(); ?> </div>
      <?php the_content(); ?>
      
    <?php endwhile; // end the loop?>


  </div> <!-- /.container -->
</div> <!-- /.main -->
