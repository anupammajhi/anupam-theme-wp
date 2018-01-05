<?php /* Template Name: About Page Template */ get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<style type="text/css">
	.am-bg{
		position: fixed;
		top:0;
		left:0;
		height: 100%;
		width:100%;
		background-image: url('<?php echo $backgroundImg[0]; ?>');
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
		opacity: 0.6;
	}
	main{
		color: #bbb;
		font-size: 1.5em;
	}
	main .iconworks{
	text-align: center;
	font-size: 3em;
	font-style: normal;
	display: block;
	margin:0;
	}
	main h1{
	text-align: center;
	font-size: 2em;
	font-style: normal;
	margin:0;
	font-weight:900;
	line-height:0.5;
	}
	.about-box{
		margin-top:30px;
	}
</style>
	<main role="main">
		<!-- section -->
		<section>

		<div class="about-box">
		<i class="iconworks" data-icon="P"></i>
		<h1>about me</h1>
		</div>

		

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
