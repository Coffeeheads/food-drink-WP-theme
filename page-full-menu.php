<?php

/*
	Template Name: Full Page, No Sidebar, Menu
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="center"><?php the_title(); ?> </div>
      <?php the_content(); ?>

         <div class="load_button">
					<ul class="xoxo">
						<li>
				   		<?php dynamic_sidebar( 'Load_button-widget-area' ); ?>
				   		</li>
				   	</ul>
		</div>
      
    <?php endwhile; // end the loop?>


  </div> <!-- /.container -->
</div> <!-- /.main -->
