<?php /* Template Name: Home Page Template */ get_header(); ?>
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
		opacity: 0.9;
	}
	.bg-video{
		position:fixed;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		min-width:100%;
		min-height:100%;
		width:auto;
		height:auto;
		opacity:0.9;
		z-index:10;
	}
	#home-intro{
		font-family: 'Montserrat', sans-serif;
		position:fixed;
		z-index:100;
		bottom:10%;
		left:50%;
		transform: translate(-50%,-50%);
		test-align:center;
		line-height:4em;
		color:#eee;
	}
	#home-intro h1 {
		text-align:center;
		font-size:5em;
		font-weight:600;
		margin:0;
	}
	#home-intro h2{
		text-align:center;
		font-size:2em;
		margin:20px 0 0 0;
		font-weight:400;
	}
	#skills{
		font-weight:600;
		color:#1b7ee8;
	}
	.selectedText { /*For Typist js*/
  		display: none;
	}
	.blinking-cursor {
		font-weight: 100;
		font-size: 30px;
		color: #ddd;
		-webkit-animation: 0.5s blink step-end infinite;
		-moz-animation: 0.5s blink step-end infinite;
		-ms-animation: 0.5s blink step-end infinite;
		-o-animation: 0.5s blink step-end infinite;
		animation: 0.5s blink step-end infinite;
	}

	@keyframes "blink" {
		from, to {
			color: transparent;
		}
		50% {
			color: white;
		}
	}

	@-moz-keyframes blink {
		from, to {
			color: transparent;
		}
		50% {
			color: white;
		}
	}

	@-webkit-keyframes "blink" {
		from, to {
			color: transparent;
		}
		50% {
			color: white;
		}
	}

	@-ms-keyframes "blink" {
		from, to {
			color: transparent;
		}
		50% {
			color: white;
		}
	}

	@-o-keyframes "blink" {
		from, to {
			color: transparent;
		}
		50% {
			color: white;
		}
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
				typist = document.querySelector("#skills");
				new Typist(typist, {
				letterInterval: 60,
				textInterval: 3000
				});
			});
		</script>
		<h2>I am <span id="skills" data-typist="an Automation Engineer.,a Data Scientist.,a Geek.">a Developer.</span><span class="blinking-cursor">|</span></h2>
		</div>
		
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
