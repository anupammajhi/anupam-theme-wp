<?php get_header('blogpost'); ?>
<style type="text/css">
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
			<i class="iconworks" data-icon="&#99;"></i>
			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
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
