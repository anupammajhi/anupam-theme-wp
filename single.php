<?php get_header('blogpost'); ?>

<style type="text/css">
	article{
		text-align:center;
	}
	.blog-title{
		margin: 1em 0 0.7em 0;
		padding-bottom:4px;
		border-bottom: 1px solid #ddd;
	}
	.post-content{
		text-align:left;
		padding:2em 0;
		font-size:1.4em;
	}
	.author,
	.date,
	.views{
		padding : 8px;
	}
	.blog-category{
		margin : 10px;
	}
	.blog-category a{
		background: #000;
		color: #eee;
		padding: 3px 5px;
		margin: 5px; 
		font-weight:bold;
	}
	.blog-category a:hover{
		background: #555;
	}
	.comments{
		margin: 30px auto;
	}
	.the_champ_sharing_container{
		padding:2em;
		transform: translate(30px,0);
	}
	.the_champ_sharing_title{
		text-align:center;
	}
	.blog-recommend-prev,
	.blog-recommend-next{
		display: inline-block;
		padding:1em;
		margin:1em;
		background:#bbb;
		background:rgba(0,0,0,0.1);
		text-align:center;
		font-size:1.2em;
		width:30%;
	}
	.prev-next{
		font-weight:bold;
		display:inline-block;
		width:23%;
		vertical-align:middle;
	}
	.prev-next-link{
		font-weight:bold;
		display:inline-block;
		width:73%;
		vertical-align:middle;
	}
</style>


	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
			<h1 class="blog-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="author"><?php _e( 'By', 'html5blank' ); ?> <a href="<?php echo get_home_url()."/about"?>" title="Anupam Majhi" rel="author">Anupam Majhi</a></span>
			&#8226;
			<span class="date"><?php the_time('F j, Y'); ?></span>
			&#8226;
			<span class="views"><?php echo getPostViews(get_the_ID()); ?></span>
			<div class="blog-category"><?php the_category(' '); // Separated by commas ?></div>
			<!-- /post details -->
			<div class="post-content">		
			<?php the_content(); // Dynamic Content ?>
			</div>

			<div class="blog-tags"><?php the_tags( __( 'Tagged with: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>

			<div class="blog-recommend">
				<div class="blog-recommend-prev"><?php echo previous_post_link('<span class="prev-next">PREV</span><span class="prev-next-link">%link</span>','%title',TRUE); ?></div>
				<div class="blog-recommend-next"><?php echo next_post_link('<span class="prev-next-link">%link</span><span class="prev-next">NEXT</span>','%title',TRUE); ?></div>
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
