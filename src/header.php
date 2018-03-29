<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>

		<?php 
			/* Fetching menu object to get ACF-felds from wordpress menu page

				TO-DO: Not sure if this is the best way. I hardcoded menu ID.. in this current form
					   menu object is not wordpress installation agnostic. Need more work here.
			*/
			$menu_object = wp_get_nav_menu_object( 2 );
		?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header clear header-scroll-handler <?php if ( get_field('header_css_class') ) : ?> <?php echo get_field('header_css_class'); ?> <?php endif; ?>" role="banner" style="<?php if ( get_field('header_color') ) : ?> background:<?php echo get_field('header_color'); ?>; <?php endif; ?>">
			<div class="container">
				<div class="logo">
					<a href="<?php echo esc_url( home_url() ); ?>">
						<!--<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img"> -->
						Budi<span>Online</span>
					</a>
				</div>
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
					<div class="mobile-cta">
						<?php if ( get_field('cta_text', $menu_object) || get_field('log_in_text', $menu_object) ) : ?>
							<div class="cta-menu-holder">
						<?php endif; ?>
								<?php if ( get_field('cta_text', $menu_object) ) : ?>
									<a class="header-login-link" href="<?php echo the_field('log_in_link', $menu_object); ?>" title="<?php echo the_field('log_in_text', $menu_object); ?>"><?php echo the_field('log_in_text', $menu_object); ?></a>
								<?php endif; ?>
								<?php if ( get_field('log_in_text', $menu_object) ) : ?>
									<a class="header-cta-link" href="<?php echo the_field('cta_link', $menu_object); ?>" title="<?php echo the_field('cta_text', $menu_object); ?>"><?php echo the_field('cta_text', $menu_object); ?></a>
								<?php endif; ?>
						<?php if ( get_field('cta_text', $menu_object) || get_field('log_in_text', $menu_object) ) : ?>
							</div>
						<?php endif; ?>
					</div>
				</nav>
				<i id="menu_icon"></i>
				<?php if ( get_field('cta_text', $menu_object) || get_field('log_in_text', $menu_object) ) : ?>
					<div class="cta-menu-holder">
				<?php endif; ?>
						<?php if ( get_field('cta_text', $menu_object) ) : ?>
							<a class="header-login-link" href="<?php echo the_field('log_in_link', $menu_object); ?>" title="<?php echo the_field('log_in_text', $menu_object); ?>"><?php echo the_field('log_in_text', $menu_object); ?></a>
						<?php endif; ?>
						<?php if ( get_field('log_in_text', $menu_object) ) : ?>
							<a class="header-cta-link" href="<?php echo the_field('cta_link', $menu_object); ?>" title="<?php echo the_field('cta_text', $menu_object); ?>"><?php echo the_field('cta_text', $menu_object); ?></a>
						<?php endif; ?>
				<?php if ( get_field('cta_text', $menu_object) || get_field('log_in_text', $menu_object) ) : ?>
					</div>
				<?php endif; ?>
			</div>
		</header>

		<!-- wrapper 
		<div class="wrapper">
		-->

			


<!-- Marka icon example. Only awailable Bars and Times for hamburger menu 


-->
<!--  Example for fancybox and slick slider 
<div class="your-class">
	<div>your content</div>
	<div>your content</div>
	<div>your content</div>
</div>

<a data-fancybox="gallery" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"></a>
<a data-fancybox="gallery" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"></a>
-->
