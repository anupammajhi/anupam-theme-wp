<?php get_header('blogpost'); ?>
<style type="text/css">
	.am-bg{
		background-image: url("<?php echo get_template_directory_uri(); ?>/img/404.jpeg");
	}
	.am-bg-overlay{
		opacity: 0.2;
	}
	
	main .iconworks{
	text-align: center;
	font-size: 4em;
	font-style: normal;
	display: block;
	margin:0;
	color:#CC2329;
	}
</style>
<div class="am-bg"></div>
	<div class="am-bg-overlay"></div> <!-- For Background as per featured image -->
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
			<i class="iconworks" data-icon="&#228;"></i>
				<h1 class="text-404">404</h1>
				<h1>Not Sure What You Are Looking For?</h1>
				<h2>
					<a class="go-home-404" href="<?php echo home_url(); ?>"><?php _e( 'Go to HOME', 'html5blank' ); ?></a>
				</h2>
				<h2>
					<a class="go-home-404" href="<?php echo home_url(); ?>/blog"><?php _e( 'Go to BLOG', 'html5blank' ); ?></a>
				</h2>
				
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
