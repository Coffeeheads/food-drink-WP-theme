<?php get_header(); ?>

<header>
  <div class="container" >
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <nav>
    <span class="fa fa-bars fa-2x" title="menu"></span>
    <ul class="dropdown">
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>
    </ul>
    </nav>
  </div> <!-- /.container -->
</header>


<div class="main">
  <div class="container">
    <div class="content_blog">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="entry-date">
            <p class = "date"><?php the_date("F j, o"); ?> by <?php the_author_posts_link(); ?>, 
            <?php comments_popup_link('Respond to this post &raquo;', '1 Response', 
            '% Responses'); ?></p>
          </div>

          <h1 class="entry-title"><?php the_title(); ?></h1>
          
         
          <div class="entry-content">
            <?php the_post_thumbnail('big'); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
    

        </div><!-- #post-## -->

            <div class="author_box">
                  <?php echo get_avatar( get_the_author_meta('ID'), 128); ?>
            

            <div class="author_details">
                  <p class = "comment_author"><?php the_author(); ?></p>
                  <?php the_author_meta('description'); ?> 
            </div>
        </div>
        

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>