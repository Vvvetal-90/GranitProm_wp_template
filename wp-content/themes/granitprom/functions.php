<?php
/**
 * GranitProm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GranitProm
 */

if ( ! function_exists( 'granitprom_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function granitprom_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on GranitProm, use a find and replace
	 * to change 'granitprom' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'granitprom', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
			'mein-menu' => esc_html__( 'Main', 'granitprom' ),
		) 
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
/*	add_theme_support( 'custom-background', apply_filters( 'granitprom_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'granitprom_setup' );

/**
 * Register widget area.
 *
 * https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function granitprom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 1', 'granitprom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add first widgets in footer', 'granitprom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title h3">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2', 'granitprom' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add second widgets in footer', 'granitprom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title h3">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 3', 'granitprom' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add third widgets in footer', 'granitprom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title h3">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'granitprom_widgets_init' );

/* Add the following code in the theme's functions.php and disable any unset function as required */
function remove_default_image_sizes( $sizes ) {
  
  /* Default WordPress */
//  unset( $sizes[ 'medium' ]);          // Remove Thumbnail (150 x 150 hard cropped)
//  unset( $sizes[ 'medium' ]);          // Remove Medium resolution (300 x 300 max height 300px)
  unset( $sizes[ 'medium_large' ]);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
  unset( $sizes[ 'large' ]);           // Remove Large resolution (1024 x 1024 max height 1024px)
  
  /* With WooCommerce */
/*  unset( $sizes[ 'shop_thumbnail' ]);  // Remove Shop thumbnail (180 x 180 hard cropped)
  unset( $sizes[ 'shop_catalog' ]);    // Remove Shop catalog (300 x 300 hard cropped)
  unset( $sizes[ 'shop_single' ]);     // Shop single (600 x 600 hard cropped)*/
  
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );

