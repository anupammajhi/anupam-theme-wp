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
	.about-text{
		width:68%;
		display:inline-block;
	}
</style>
	<main role="main">
		<!-- section -->
		<section>

		<div class="about-box">
		<i class="iconworks" data-icon="P"></i>
		<h1>about me</h1>
		</div>

		<div class="about-section">
			<div class="about-text">
				<p>Hey there!</p>
				
				<p>I'm <strong>Anupam Majhi</strong> <<a href="mailto:majhi.anupam@gmail.com">majhi.anupam@gmail.com</a>>, a Programmer by passion, an Automation engineer by profession,
					an aspiring Data Scientist and a lifelong Student. </p>
				
				<p>I'm <?php $date_today = date("Y-m-d"); $date_1 = date_create($date_today); $date_2 = date_create("1991-05-31");  echo date_diff($date_2,$date_1)->format("%y years");?> old.
				That's <?php echo date_diff($date_2,$date_1)->format("%a days");?> to be precise!</p>
				
				<p>I'm currently working as an <strong>Infrastructure Automation Engineer</strong>, which mainly involves automation and integration of several technologies programmatically
					so that they can work together to provide an enterprise with useful solutions. This involves working with multiple languages (e.g. Powershell, SQL) and tools (e.g. Orchestrator, Microsoft System Center products) to make everything work.
				</p>
				
				<p>I am a <strong>Computer Science and Engineering</strong> graduate (Visvesvaraya Technological University) from <strong>Bangalore,India.</strong>
				I have worked at <strong>Volvo</strong> and <strong>HCL Technologies.</strong></p>
				
				<p>I enjoy programming and love to work with "real world data and computing" - specifically Data analytics, Machine Learning and Artificial Intelligence.
					Data is from where a machine learns, and machine learning is what makes Artificial Intelligence possible. These interest me because of their possible
					real life applications. Automation is where the world is moving and this will be a great boon to humanity.
				</p>

				<p>My <a href="../resume">résumé</a> is available if you want to be all, like, formal and stuff, dude.</p>

			</div>
			<div class="about-img">

			</div>
		</div>

		

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
