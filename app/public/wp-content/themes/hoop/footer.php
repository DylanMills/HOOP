<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hoop
 */

?>

<footer id="colophon" class="site-footer show-for-medium">
	<div class="grid-container">
		<div class="site-info grid-x">
			<nav id="site-navigation" class="main-navigation cell small-12 medium-12">
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
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>