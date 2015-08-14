<?php

/*
  Template Name: Page Front
*/

get_header();  ?>
<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
<header style="background: url(<?php echo $src[0]; ?> ) no-repeat center; height: 800px; background-size: cover;">
  <div class="container" >
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->


<div class="main">
  <div class="container">


  <?php

  $onePageQuery = new WP_Query(
    array(
      'posts_per_page' => -1,
      'post_type' => 'page',
      'order' => 'ASC'
      )
  ); ?>

  <?php if ( $onePageQuery->have_posts() ) : ?>

    <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
    
      <section id="<?php echo $post->post_name; ?>">
        <div class="center"><?php the_title(); ?></div>
        <p><?php the_content(); ?></p>
      </section>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

  <?php else:  ?>
    [stuff that happens if there aren't any posts]
  <?php endif; ?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>