<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="post-thumb-img">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists 
							the_post_thumbnail('large');
					  else: //if no thumbnail?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/default-thumb.jpeg">
				<?php endif; ?>
			</a>
		</div>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2 class="blog-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<!-- /post details -->

		<div class="post-excerpt"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
