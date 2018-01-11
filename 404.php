<?php get_header('blogpost'); ?>
<style type="text/css">
	.am-bg{
		position: fixed;
		top:0;
		left:0;
		height: 100%;
		width:100%;
		background-image: url("<?php echo get_template_directory_uri(); ?>/img/404.jpeg");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		z-index:-10;
		opacity: 0.7;
		filter: blur(10);
	}
	.am-bg-overlay{
		position: fixed;
		top:0;
		left:0;
		height: 100%;
		width:100%;
		background: #000;
		z-index:-1;
		opacity: 0.2;
	}
	main{
		color: #444;
		font-size: 1.5em;
		text-align:center;
	}
	main .iconworks{
	text-align: center;
	font-size: 4em;
	font-style: normal;
	display: block;
	margin:0;
	}

	.text-404{
		font-size:5em;
		margin:0;
		line-height:0.7em;
	}
	.go-home{
		color:#ccc;
		background: #555;
		background: rgba(0,0,0,0.65);
		margin: 0.6em;
		padding:1em;
		display:inline-block;
		border-radius:0.4em;
	}
	.go-home:hover{
		background: #333;
		background: rgba(0,0,0,0.80);
		color:#fff;
	}

</style>
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
			<i class="iconworks" data-icon="&#228;"></i>
				<h1 class="text-404">404</h1>
				<h1>Not Sure What You Are Looking For?</h1>
				<h2>
					<a class="go-home" href="<?php echo home_url(); ?>"><?php _e( 'Go to HOME', 'html5blank' ); ?></a>
				</h2>
				<h2>
					<a class="go-home" href="<?php echo home_url(); ?>/blog"><?php _e( 'Go to BLOG', 'html5blank' ); ?></a>
				</h2>
				
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
