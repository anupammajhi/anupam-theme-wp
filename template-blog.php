<?php /* Template Name: Blog Page Template */ get_header(); ?>
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
	.blog-box{
		margin-top:30px;
	}
	.blog-section{
		margin-top:2em;
	}
	.blog-cat-box{
		width:100%;
		display:inline-block;
		background: #444;
		background: rgba(0,0,0,0.5);
		margin: 20px auto;
	}
	.blog-cat-box a{
		 
	}
	.blog-cat-box a:hover{
		color: #fff;	 
	}
	.blog-cat-box ul{
		list-style-type: none; 
	}
	.blog-cat-box .iconworks{
		font-size:0.7em;
		display: inline-block; 
	}
	.blog-cat-box .blog-date,
	.blog-cat-box .blog-comments{
		padding-right:1.5em;
		font-size:0.6em; 
	}
	.blog-meta{
		display:block;
		margin-top:-7px;
		margin-bottom:20px;
	}
	.blog-post-all{
		display:block;
		text-align:center;
		padding: 0.5em;

	}
	.blog-post-all a{
		background : #888;
		background : rgba(255,255,255,0.4);
		padding : 0.7em;
		color : #000;
	}
	.blog-cat-name{
		width: 100%;
		background: 1565c0;
		background: rgba(21, 101, 192,0.7);
		color: #eee;
		text-align: center;
		font-size: 1.6em;
		padding:0.5em;
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
