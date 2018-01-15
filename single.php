<?php get_header('blogpost'); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class("blogpost-article"); ?>>
			<?php setPostViews(get_the_ID()); ?>
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="thumbnail-container">
				<a class="thumbnail-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			</div>
			<?php endif; ?>

			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="blogpost-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="blogpost-author"><?php _e( 'By', 'html5blank' ); ?> <a href="<?php echo get_home_url()."/about"?>" title="Anupam Majhi" rel="author">Anupam Majhi</a></span>
			&#8226;
			<span class="blogpost-date"><?php the_time('F j, Y'); ?></span>
			&#8226;
			<span class="blogpost-views"><?php echo getPostViews(get_the_ID()); ?></span>
			<div class="blogpost-category"><?php the_category(' '); // Separated by commas ?></div>
			<!-- /post details -->
			<div class="blogpost-content">		
			<?php the_content(); // Dynamic Content ?>
			</div>

			<div class="blogpost-tags"><?php the_tags( __( 'Tagged with: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>
			
			<div class="blog-recommend">
				<div class="blogpost-recommend-prev"><?php echo previous_post_link('<span class="blogpost-prev-text">PREVIOUS POST</span><span class="blogpost-prev-next-link">%link</span>','%title',TRUE); ?></div>
				<div class="blogpost-recommend-next"><?php echo next_post_link('<span class="blogpost-next-text">NEXT POST</span><span class="blogpost-prev-next-link">%link</span>','%title',TRUE); ?></div>
			</div>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
