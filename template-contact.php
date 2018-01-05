<?php /* Template Name: Contact Page Template */ get_header(); ?>
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
		opacity: 0.7;
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
	.contact-box{
		margin-top:30px;
	}
	.contact-spec-box{
		text-align:center;
		margin: 1.5em 1em;
	}
	.contact-spec{
		text-align:center;
		display:inline-block;
		padding: 1em 4em;
	}
	.contact-spec .iconworks{
	}
	.contact-spec p{
		margin:0;
		word-wrap: break-word;
	}
	.contact-spec a{
		text-decoration:none;
		color:#bbb;
		
	}
	.contact-social{
		text-align:center;
		margin: 4em 1em 0 1em;
	}
	.twitter-timeline-box{
		text-align:center;
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

		<div class="twitter-timeline-box">
		<a class="twitter-timeline" data-width="500" data-height="800" href="https://twitter.com/anupamfx">Tweets by Anupam</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
