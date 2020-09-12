<?php
/**
 * gikspirit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gikspirit
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gikspirit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gikspirit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gikspirit, use a find and replace
		 * to change 'gikspirit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gikspirit', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'gikspirit' ),
				'footer-menu' => esc_html__( 'Footer menu', 'gikspirit' ),
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
				'gikspirit_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
	}
endif;
add_action( 'after_setup_theme', 'gikspirit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gikspirit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gikspirit_content_width', 640 );
}
add_action( 'after_setup_theme', 'gikspirit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gikspirit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gikspirit' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gikspirit' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget__title-text">',
			'after_title'   => '</h4>',
		)

	);



	
}
add_action( 'widgets_init', 'gikspirit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gikspirit_scripts() {
	wp_enqueue_style( 'gikspirit-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'gikspirit-style', 'rtl', 'replace' );

	wp_enqueue_script( 'gikspirit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gikspirit_scripts' );

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
require_once get_template_directory() . '/inc/bootstrap-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Ajoute le CSS et le JavaScript pour utiliser bootstrap
function enqueue_assets() {
	wp_enqueue_style('bootstrap-css',  get_template_directory_uri() .'/css/bootstrap.min.css' );
	wp_enqueue_style('fontawesome',  get_template_directory_uri() .'/css/font-awesome.min.css' );
	wp_enqueue_style('aos-css',  get_template_directory_uri() .'/css/aos.css' );

	// Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
	wp_enqueue_script('jquery');
	//wp_enqueue_script('tawk-js',  get_template_directory_uri() . '/vendor/tawk/js/tawk.js', 'jquery' );

   	wp_enqueue_script('typed-js',  get_template_directory_uri() . '/js/typed.min.js', 'jquery' );
	wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery' );
	wp_enqueue_script('vendors-js',  get_template_directory_uri() . '/js/vendors.js', 'jquery' );
	wp_enqueue_script('scripts-js',  get_template_directory_uri() . '/js/scripts.js', 'jquery' );
	wp_enqueue_script('dle_js-js',  get_template_directory_uri() . '/js/dle_js.js', 'jquery' );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_assets' );

  function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );