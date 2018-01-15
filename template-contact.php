<?php /* Template Name: Contact Page Template */ get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<style type="text/css">
	.am-bg{
		background-image: url('<?php echo $backgroundImg[0]; ?>');
	}
</style>
	<main role="main">
		<!-- section -->
		<section>

		<div class="contact-box">
		<i class="iconworks" data-icon="À"></i>
		<h1>contact</h1>
		</div>

		<div class="contact-social">
			<a href="https://www.facebook.com/majhi.anupam" class="fa fa-facebook"></a>
			<a href="https://twitter.com/anupamfx" class="fa fa-twitter"></a>
			<a href="https://github.com/anupammajhi" class="fa fa-github"></a>
			<a href="https://www.linkedin.com/in/anupammajhi/" class="fa fa-linkedin"></a>
			<a href="https://www.instagram.com/anupammajhi/" class="fa fa-instagram"></a>
		</div>


		<div class="contact-spec-box">
			<div class="contact-spec">
			<i class="iconworks" data-icon="&#36;"></i>
			<p>Bangalore, INDIA</p>
			</div>
			
			<div class="contact-spec">
			<i class="iconworks" data-icon="&#193;"></i>
			<p><a href="mailto:majhi.anupam@gmail.com">MAJHI.ANUPAM@GMAIL.COM</a></p>
			</div>

			<div class="contact-spec">
			<i class="iconworks" data-icon="&#92;"></i>
			<p>+91 8088421654</p>
			</div>
		</div>

		<div class="contact-twitter-timeline-box">
		<a class="twitter-timeline" data-width="500" data-height="800" href="https://twitter.com/anupamfx">Tweets by Anupam</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
