<?php /* Template Name: Home Page Template */ get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<style type="text/css">
	.am-bg{
		background-image: url('<?php echo $backgroundImg[0]; ?>');
	}
</style>
	<main role="main">
		<!-- section -->
		<section>

		<video class="bg-video" poster="<?php echo get_template_directory_uri(); ?>/img/bg-home.png" autoplay loop>
		<source src="<?php echo get_template_directory_uri(); ?>/img/bg-home.mp4" type="video/mp4">
		<source src="<?php echo get_template_directory_uri(); ?>/img/bg-home.mp4" type="video/mp4">
		</video>
		<div id="home-intro">
		<h2>Hi, I am</h2>
		<h1>Anupam Majhi</h1>
		

		<script type="text/javascript">
			jQuery(document).ready(function( $ ) {
				var typist;
				typist = document.querySelector("#home-skills");
				new Typist(typist, {
				letterInterval: 60,
				textInterval: 3000
				});
			});
		</script>
		<h2>I am <span id="home-skills" data-typist="an Automation Engineer.,a Data Scientist.,a Geek.">a Developer.</span><span class="blinking-cursor">|</span></h2>
		</div>
		
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
