<?php

/**
 * Hoop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hoop
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('hoop_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hoop_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hoop, use a find and replace
		 * to change 'hoop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('hoop', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-primary' => esc_html__('Primary', 'hoop'),	'menu-socials' => esc_html__('Socials', 'hoop'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'hoop_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		/**
		 *  Add support for the default block styles.
		 **/
		add_theme_support('wp-block-styles');

		/**
		 *  Add support for wide alignment.
		 **/
		add_theme_support('align-wide');

		/**
		 *  Add support for color palette.
		 **/

		add_theme_support('editor-color-palette', array(
			array(
				'name' => esc_attr__('Green', 'themeLangDomain'),
				'slug' => 'green',
				'color' => '#274b40',
			),			array(
				'name' => esc_attr__('Orange', 'themeLangDomain'),
				'slug' => 'orange',
				'color' => '#f8bd3b',
			),			array(
				'name' => esc_attr__('Black', 'themeLangDomain'),
				'slug' => 'black',
				'color' => '#000000',
			),			array(
				'name' => esc_attr__('White', 'themeLangDomain'),
				'slug' => 'white',
				'color' => '#ffffff',
			),
		));

		/**
		 *  Add support for color gradients.
		 **/
		add_theme_support(
			'editor-gradient-presets',
			array()
		);

		/**
		 *  Add support for font sizes.
		 **/
		add_theme_support('editor-font-sizes', array(
			array(
				'name' => esc_attr__('Small', 'themeLangDomain'),
				'size' => 12,
				'slug' => 'small'
			)
		));

		/**
		 *  Disable theme supports.
		 **/
		add_theme_support('disable-custom-font-sizes');
		add_theme_support('disable-custom-colors');
		add_theme_support('disable-custom-gradients');

		/**
		 *  Remove core block patterns.
		 **/
		remove_theme_support('core-block-patterns');
	}
endif;
add_action('after_setup_theme', 'hoop_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hoop_content_width()
{
	$GLOBALS['content_width'] = apply_filters('hoop_content_width', 640);
}
add_action('after_setup_theme', 'hoop_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hoop_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'hoop'),
			'id'            => 'sidebar',
			'description'   => esc_html__('Add widgets here.', 'hoop'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'hoop_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function hoop_scripts()
{
	wp_enqueue_style('hoop-style', get_stylesheet_uri(), array(), _S_VERSION);

	//* Foundation
	wp_enqueue_style('foundation-style', get_template_directory_uri() . '/assets/css/vendor/foundation.css');
	wp_enqueue_script('foundation-script', get_template_directory_uri() . '/assets/js/vendor/foundation.js',array(),'6.6.3',true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'hoop_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Enqueuing block editor assets.
 */
function hoop_enqueue_block_editor_assets()
{
	wp_enqueue_script(
		'editor-script',
		get_template_directory_uri() . '/assets/js/editor.js',
		array('wp-blocks', 'wp-dom-ready', 'wp-edit-post')
	);
}

add_action('enqueue_block_editor_assets', 'hoop_enqueue_block_editor_assets');


/**
 * Enqueuing block assets.
 */

function hoop_enqueue_block_assets()
{
	wp_enqueue_style(
		'blocks-style',
		get_template_directory_uri() . '/assets/css/blocks.css'
	);
}
add_action('enqueue_block_assets', 'hoop_enqueue_block_assets');
