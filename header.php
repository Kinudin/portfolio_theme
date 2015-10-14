<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>-child/img/icons/favicon.png" rel="shortcut icon">
        <!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/foundation.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css"> <!-- Animate.css library -->
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.reveal.min.js"></script>
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
		<header class="header clear fixed" role="banner" data-options="sticky_on: large">
					<!-- logo -->
						<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
						    <div class='logo'>
						        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						    </div>
						<?php else : ?>
						    <hgroup>
						        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
						        <h2 class='site-description'><?php //bloginfo( 'description' ); ?></h2>
						    </hgroup>
						<?php endif; ?>
					<!-- /logo -->

					<!-- nav -->
						<nav class="responsive-nav">
							<?php echo do_shortcode( '[responsive-menu]' ); ?>
						</nav>
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav><!-- /nav -->
					</div> <!-- End Fixed nav-->
					
				<div class="clear-float"></div>
			</header>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			
			<!-- /header -->
