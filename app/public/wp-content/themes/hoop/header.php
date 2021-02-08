<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hoop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'hoop'); ?></a>

		<header id="masthead" class="site-header">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell small-2 medium-1">					<div class="site-branding">
					
						<?php	the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$hoop_description = get_bloginfo('description', 'display');
						if ($hoop_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $hoop_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>

				<div class="cell small-10 medium-9">
					<nav id="site-navigation" class="main-navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'hoop'); ?></button> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="cell show-for-medium medium-2">
					<nav id="site-navigation" class="main-navigation">
						<!-- <button class="menu-toggle" aria-controls="socials-menu" aria-expanded="false"><?php esc_html_e('Socials Menu', 'hoop'); ?></button> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-socials',
								'menu_id'        => 'socials-menu',
								'item_spacing'   => 'discard', // default 'preserve'
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>

			</div>
	</div>






	</header><!-- #masthead -->