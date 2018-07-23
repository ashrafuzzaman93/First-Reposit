<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('is-preload'); ?>>

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<?php  
						if ( is_home() && (!empty( get_theme_mod( 'header_custom_title' ) ) || !empty( get_theme_mod( 'header_custom_description' ) ) ) ) :
					?>
					<div id="intro">
						<h1><?php echo !empty( get_theme_mod( 'header_custom_title' ) ) ? get_theme_mod( 'header_custom_title' ) : '' ; ?></h1>
						<p><?php echo !empty( get_theme_mod( 'header_custom_description' ) ) ? get_theme_mod( 'header_custom_description' ) : '' ; ?></p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>
					<?php endif; ?>
				<!-- Header -->
					<header id="header">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">Massively</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<?php  

							$args = array(
								'theme_location'	=> 'mainmenu',
								'container'			=> 'ul',
								'menu_class'		=> 'links',
							);
							if (has_nav_menu('mainmenu')) {
								wp_nav_menu($args);
							} else {
								echo '<ul class="links">
										<li class="current-menu-item"><a href="">Home</a></li>
									  </ul>';
							}
						?>
						<ul class="icons">
							<?php if ( !empty( get_theme_mod('massively_fb_text') ) ) : ?>
								<li><a href="http://<?php echo get_theme_mod('massively_fb_text'); ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<?php endif; ?>

							<?php if ( !empty( get_theme_mod('massively_twitter_text') ) ) : ?>
								<li><a href="http://<?php echo get_theme_mod('massively_twitter_text'); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<?php endif; ?>

							<?php if ( !empty( get_theme_mod('massively_ins_text') ) ) : ?>
								<li><a href="http://<?php echo get_theme_mod('massively_ins_text'); ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<?php endif; ?>

							<?php if ( !empty( get_theme_mod('massively_git_text') ) ) : ?>
								<li><a href="http://<?php echo get_theme_mod('massively_git_text'); ?>" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<?php endif; ?>
						</ul>
					</nav>
