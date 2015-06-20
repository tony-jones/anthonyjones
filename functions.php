<?php
/**
 * anthonyjones functions and definitions
 *
 * @package anthonyjones
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'anthonyjones_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function anthonyjones_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on anthonyjones, use a find and replace
	 * to change 'anthonyjones' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'anthonyjones', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add thumbnails to blog posts.
  add_theme_support( 'post-thumbnails' ); 

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

  // Add support for a site logo upload.
	$args = array(
	'width'         => 180.5,
	'height'        => 170,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true, 
  );
  add_theme_support( 'custom-header', $args );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'anthonyjones' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'anthonyjones_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // anthonyjones_setup
add_action( 'after_setup_theme', 'anthonyjones_setup' );

/**
 * Register the caption from post thumbnail to display below feature image.
 *
 */
function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
  }
}

/**
 * Add the flow text class to all excerpts in WordPress
 *
 */

 add_filter( "the_excerpt", "add_class_to_excerpt" );
 
 function add_class_to_excerpt( $excerpt ) {
   return str_replace('<p', '<p class="grey-text text-darken-1"', $excerpt);
 }

/**
 * Display the post likes for count.
 *
 */
function display_post_likes( $post_id = null ) {
	$value = '';
	if( is_null( $post_id ) ) {
		global $post;
		$value = get_post_meta( $post->ID, 'my-post-likes', true );
		
	} else {
		$value = get_post_meta( $post_id, 'my-post-likes', true );	
	}
	
	echo $value;
}

/**
 * update the post with the like.
 *
 */
function update_like_count() {
		
	  $post_id = intval( $_GET['post_id'] );
		
	  if( filter_var( $post_id, FILTER_VALIDATE_INT ) ) {
	  
	  	$article = get_post( $post_id );
	  	$output_count = 0;
	  	
	  	if( !is_null( $article ) ) {
			$count = get_post_meta( $post_id, 'my-post-likes', true );
			if( $count == '' ) {
				update_post_meta( $post_id, 'my-post-likes', '1' );
				$output_count = 1;
			} else {
				$n = intval( $count );
				$n++;
				update_post_meta( $post_id, 'my-post-likes', $n );
				$output_count = $n;
			}
		}
		
	  }
	  $output = array( 'count' => $output_count );
	  echo json_encode( $output );
	  exit();
}
add_action( 'wp_ajax_my_update_likes', 'update_like_count' );
add_action( 'wp_ajax_nopriv_my_update_likes', 'update_like_count' );

//[foobar]
function foobar_func( $atts ){
	return "foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );

function custom_theme_setup() {
    add_theme_support( 'advanced-image-compression' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function anthonyjones_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'anthonyjones' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'anthonyjones_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function anthonyjones_scripts() {
	wp_enqueue_style( 'anthonyjones-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'anthonyjones-main', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '20150415', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'anthonyjones_scripts' );

/**
 * Load Enqueued Scripts in the Footer
 *
 * Automatically move JavaScript code to page footer, speeding up page loading time.
 */


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

