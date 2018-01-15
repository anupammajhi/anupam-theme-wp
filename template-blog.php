<?php /* Template Name: Blog Page Template */ get_header('blog'); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<style type="text/css">
	.am-bg{
		background-image: url('<?php echo $backgroundImg[0]; ?>');
	}
</style>

	<main role="main">
		<!-- section -->
		<section>

		<div class="blog-box">
		<i class="iconworks" data-icon="n"></i>
		<h1>blog</h1>
		</div>

		<div class="blog-section">
			<div class="blog-cat-box"><div class="blog-cat-name">WINDOWS</div><?php echo am_postsbycategory_main('windows',5);?></div>
			<div class="blog-cat-box"><div class="blog-cat-name">LINUX</div><?php echo am_postsbycategory_main('linux',5);?></div>
			<div class="blog-cat-box"><div class="blog-cat-name">WEB</div><?php echo am_postsbycategory_main('web',5);?></div>
			<div class="blog-cat-box"><div class="blog-cat-name">SOCIAL MEDIA</div><?php echo am_postsbycategory_main('social-media',5);?></div>
		</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
