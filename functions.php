<?php
/**
 * goldengirl-sassified functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goldengirl-sassified
 */

if ( ! function_exists( 'goldengirl_sassified_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function goldengirl_sassified_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on goldengirl-sassified, use a find and replace
	 * to change 'goldengirl-sassified' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'goldengirl-sassified', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'goldengirl-sassified' ),
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
	add_theme_support( 'custom-background', apply_filters( 'goldengirl_sassified_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'goldengirl_sassified_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function goldengirl_sassified_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'goldengirl_sassified_content_width', 640 );
}
add_action( 'after_setup_theme', 'goldengirl_sassified_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function goldengirl_sassified_scripts() {
	wp_enqueue_style( 'goldengirl-sassified-style', get_stylesheet_uri() );

	wp_enqueue_script( 'goldengirl-sassified-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'goldengirl-sassified-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap-3.3.6-dist/css/bootstrap.min.css');

	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/bootstrap-3.3.6-dist/js/bootstrap.min.js', array('jquery'), '', true );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Raleway:400,500,600,700,300|Playfair+Display:400italic,400,700|Lato:300,400|Old+Standard+TT:400italic', array(), null );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'goldengirl_sassified_scripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goldengirl_sassified_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'goldengirl-sassified' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'goldengirl_sassified_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
*Add Thmubnails
*/

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 200, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'category-thumb', 337.5, 225 ); //300 pixels wide (and unlimited height)

add_image_size( 'portolio-main', 680, 480, true ); //300 pixels wide (and unlimited height)
}

/************* REGISTER  SIDEBARS *****************/

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'footer-right' sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-right',
			'name' => __( 'Footer Right' ),
			'description' => __( 'Widget sidebar for right-hand side of footer.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'footer-left' sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-left',
			'name' => __( 'Footer Left' ),
			'description' => __( 'Widget sidebar for left-hand side of footer.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'footer-left' sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-center',
			'name' => __( 'Footer Center' ),
			'description' => __( 'Widget sidebar for center of footer.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}

/************* CUSTOM POST TYPES *****************/

function create_custom_post_types() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'portfolio' ),
            'taxonomies' => array('category'), 
        )
    );
}
add_action( 'init', 'create_custom_post_types' );


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Register Custom Fields - Portfolio
require_once('inc/custom-fields-portfolio.php');

// Register Library Custom Post Type
require_once('inc/library-custom-post-type.php');

// Custom Image Size for Landing Pages

add_image_size( 'section_image', 400, 400, true );

