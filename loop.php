<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>


<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="post_wrap">
			
			<div class="entry-date">
				<p class = "date"><?php the_date("F j, o"); ?> by <?php the_author_posts_link(); ?>, 
				<?php comments_popup_link('Respond to this post &raquo;', '1 Response', 
				'% Responses'); ?></p>
			</div>
	
			<div class="post_content">
					<h2 class="entry-title">
	        			<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?>
	        			</a>
	      			</h2>

					<div class="entry-content">
						<?php the_post_thumbnail('big'); ?>
						<p><?php the_content('Continue Reading <span class="meta-nav">&hellip;</span>'); ?></p>
						<?php wp_link_pages( array(
		          		'before' => '<div class="page-link"> Pages:',
		          		'after' => '</div>'
		        			)); ?>
					</div><!-- .entry-content -->

			</div><!-- post_content -->
		</div><!-- post_wrap -->

	</article><!-- #post-## -->

	<?php comments_template( '', true ); ?>

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Posts'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;'); ?></p>
<?php endif; ?>
