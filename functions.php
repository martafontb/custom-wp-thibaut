<?php
/**
 * custom-wpgulp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package custom-wpgulp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'thibaut_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thibaut_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on custom-wpgulp, use a find and replace
		 * to change 'custom-wpgulp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thibaut', get_template_directory() . '/languages' );

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
		// Add featured image support
		
		add_image_size('small-thumbnail', 290, 290, true);
		add_image_size('medium-thumbnail', 450, 290, true);
		add_image_size('banner-image', 920, 210, array('center', 'center'));
		add_theme_support( 'widgets' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'thibaut' ),
				'footer' => esc_html__( 'Footer Menu Items', 'thibaut' ),
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
				'thibaut_custom_background_args',
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
add_action( 'after_setup_theme', 'thibaut_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thibaut_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thibaut_content_width', 640 );
}
add_action( 'after_setup_theme', 'thibaut_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thibaut_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'thibaut' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'thibaut' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'thibaut_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thibaut_scripts() {
	wp_enqueue_style( 'thibaut-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'thibaut-style', 'rtl', 'replace' );

	// CSS
	wp_enqueue_style( 'font-awesome-css', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css");
	wp_enqueue_style( 'thibaut-css', get_template_directory_uri() . '/dist/css/main.css');

	// JS
	wp_enqueue_script( 'thibaut-navigation', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" , array(), _S_VERSION, true );
	wp_enqueue_script( 'thibaut-navigation', "https://unpkg.com/splitting/dist/splitting.min.js", array(), _S_VERSION, true );
	
	//aos
	wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
	wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/dist/js/theme.js', array( 'AOS' ), null, true);

	//gsap	
	wp_enqueue_script('gsap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js", false, null, true);
	wp_enqueue_script('scrollTrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js", false, null, true);
	wp_enqueue_script('gsap-js', get_template_directory_uri() . '/dist/js/gsap.js', array('gsap'), null, true);
	wp_enqueue_script('blocks-js', get_template_directory_uri() . '/dist/js/blocks.js', null, true);

	wp_enqueue_script( 'thibaut-cursor', get_template_directory_uri() . '/dist/js/cursor.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'thibaut-navigation', get_template_directory_uri() . '/dist/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'thibaut-menu', get_template_directory_uri() . '/dist/js/menu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'thibaut-post', get_template_directory_uri() . '/dist/js/post.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thibaut_scripts' );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

/**
* If more than one page exists, return TRUE.
*/
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
	}

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

