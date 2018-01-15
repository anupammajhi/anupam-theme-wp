<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/img/icons/icon-works_v1/stylesheet.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
	<div class="loading loader"></div>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/dp.jpg" alt="Logo" class="logo-img">
							<p>ANUPAM MAJHI</p>
						</a>
					</div>
					<!-- /logo -->
					
					<!-- nav -->
					<nav class="nav" role="navigation">
						<ul>
							<li><a href="<?php echo get_home_url(); ?>"><i class="iconworks" data-icon="Ç"></i><p>HOME</p></a></li>
							<li><a href="<?php echo get_home_url()."/blog"; ?>"><i class="iconworks" data-icon="n"></i><p>BACK TO BLOG</p></a></li>
							<li><i class="iconworks" data-icon="&#75;"></i><p>SEARCH</p><?php get_search_form(); ?></li>
						</ul>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
