<?php
/**
 * kento-blog functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package kento-blog
 */
if ( ! isset( $content_width ) ) $content_width = 900;
if ( ! function_exists( 'kento_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kento_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kento-blog, use a find and replace
	 * to change 'kento-blog' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'kento-blog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	add_image_size( 'kento-blog-thumbnail', 960, 450, true ); 	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'kento-blog' ),
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kento_blog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // kento_blog_setup
add_action( 'after_setup_theme', 'kento_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kento_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kento_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'kento_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kento_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kento-blog' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kento_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kento_blog_scripts() {
	
	wp_enqueue_style( 'kento_blog-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.css' );
	wp_enqueue_style( 'kento_blog-font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );	
	
	wp_enqueue_style( 'kento_blog-style', get_stylesheet_uri() );
	wp_enqueue_style( 'kento_blog-responsive', get_template_directory_uri() . '/css/responsive.css' );	

	

	
	wp_enqueue_script( 'kento_blog-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'kento_blog-bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.js', array('jquery'), '20120209', true );
	wp_enqueue_script( 'kento_blog-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '20120209', true );
	
	
	
	wp_enqueue_script( 'kento_blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kento_blog_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load navwalker file.
 */
require get_template_directory() . '/inc/kento_blog_navwalker.php';




