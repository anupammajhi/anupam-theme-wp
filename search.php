<?php get_header('blogpost'); ?>

<style type="text/css">
	main{
		color: #666;
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
	.head-box{
		margin-top:30px;
	}
	article{
		display:inline-block;
		width : 30.5%;
		padding: 5px;
		margin: 1%;
		vertical-align:top;
	}
	.category-box{
		margin-top: 2em; 
	}
	.post-excerpt p{
		margin-top : 7px;
	}
	.post-thumb{
	}
	.post-thumb-img{
		height:12em;
		overflow:hidden;
	}
	.post-thumb-img img{
		width:100%;
		min-height:100%;
	}
	.blog-title{
		font-size:1em;
		margin-bottom: 5px;
	}
	.date{
		font-size:0.8em;
		margin: -12px 0;;
	}
	.pagination{
		text-align:center;
	}
	.page-numbers{
		padding:5px 12px;
		color:#333;
		background: #ccc;
	}
	.page-numbers.current{
		color:#ccc;
		background: #333;
	}
	.next.page-numbers,
	.previous.page-numbers{
		padding:5px;
		margin:5px;
	}
	.pagination-box{
		margin:50px;
	}
	
</style>


	<main role="main">
	<!-- section -->
	<section>

		<div class="head-box">
		<i class="iconworks" data-icon="&#101;"></i>
		<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		</div>

		<div class="category-box">
			<?php get_template_part('loop'); ?>
		</div>
		<div class="pagination-box">
			<?php get_template_part('pagination'); ?>
		</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
