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

<div class="banner_logo">
	<img src="http://localhost/food-drink-WP-theme/wp-content/uploads/2015/08/custom-bg18.jpg">
	<img src="http://localhost/food-drink-WP-theme/wp-content/uploads/2015/08/our-blog1.png">
</div>

<div class="main">
  <div class="container">
    <div class="content_blog">
    	<?php get_template_part( 'loop', 'index' );	?>
	</div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
