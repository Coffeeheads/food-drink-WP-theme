<?php get_header();  ?>

<p>this is the custom_page.php</p>



<div class="main">

<h1>Custom Page Template</h1>
  <div class="container">

    <div class="content">
        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>
    </div>

    <div class="content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
      

    
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>