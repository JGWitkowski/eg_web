<?php
/**
 * evil-genius functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package evil-genius
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function my_custom_menu() {
    register_nav_menu('hamburger-menu',__( 'Hamburger Menu' ));
}

/*
* Creating a function to create our CPT
*/
  
function beer_custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Beers', 'Post Type General Name', 'evil-genius' ),
			'singular_name'       => _x( 'Beer', 'Post Type Singular Name', 'evil-genius' ),
			'menu_name'           => __( 'Beers', 'evil-genius' ),
			'parent_item_colon'   => __( 'Parent Beer', 'evil-genius' ),
			'all_items'           => __( 'All Beers', 'evil-genius' ),
			'view_item'           => __( 'View Beer', 'evil-genius' ),
			'add_new_item'        => __( 'Add New Beer', 'evil-genius' ),
			'add_new'             => __( 'Add New', 'evil-genius' ),
			'edit_item'           => __( 'Edit Beer', 'evil-genius' ),
			'update_item'         => __( 'Update Beer', 'evil-genius' ),
			'search_items'        => __( 'Search Beer', 'evil-genius' ),
			'not_found'           => __( 'Not Found', 'evil-genius' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'evil-genius' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'beers', 'evil-genius' ),
			'description'         => __( 'Beer news and reviews', 'evil-genius' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'   => 'beer',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'beers', $args );
	  
}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
add_action( 'init', 'beer_custom_post_type', 0 );

function hours_custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Hours', 'Post Type General Name', 'evil-genius' ),
			'singular_name'       => _x( 'Hour', 'Post Type Singular Name', 'evil-genius' ),
			'menu_name'           => __( 'Hours', 'evil-genius' ),
			'parent_item_colon'   => __( 'Parent Hour', 'evil-genius' ),
			'all_items'           => __( 'All Hours', 'evil-genius' ),
			'view_item'           => __( 'View Hour', 'evil-genius' ),
			'add_new_item'        => __( 'Add New Hour', 'evil-genius' ),
			'add_new'             => __( 'Add New', 'evil-genius' ),
			'edit_item'           => __( 'Edit Hour', 'evil-genius' ),
			'update_item'         => __( 'Update Hour', 'evil-genius' ),
			'search_items'        => __( 'Search Hour', 'evil-genius' ),
			'not_found'           => __( 'Not Found', 'evil-genius' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'evil-genius' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'hours', 'evil-genius' ),
			'description'         => __( 'Hour news and reviews', 'evil-genius' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'   => 'clock',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'hours', $args );
	  
}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
add_action( 'init', 'hours_custom_post_type', 0 );

function wholesaler_custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Wholesaler States', 'Post Type General Name', 'evil-genius' ),
			'singular_name'       => _x( 'Wholesaler State', 'Post Type Singular Name', 'evil-genius' ),
			'menu_name'           => __( 'Wholesaler States', 'evil-genius' ),
			'parent_item_colon'   => __( 'Parent Wholesaler State', 'evil-genius' ),
			'all_items'           => __( 'All Wholesaler States', 'evil-genius' ),
			'view_item'           => __( 'View Wholesaler State', 'evil-genius' ),
			'add_new_item'        => __( 'Add New Wholesaler State', 'evil-genius' ),
			'add_new'             => __( 'Add New', 'evil-genius' ),
			'edit_item'           => __( 'Edit Wholesaler State', 'evil-genius' ),
			'update_item'         => __( 'Update Wholesaler State', 'evil-genius' ),
			'search_items'        => __( 'Search Wholesaler State', 'evil-genius' ),
			'not_found'           => __( 'Not Found', 'evil-genius' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'evil-genius' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'wholesalers', 'evil-genius' ),
			'description'         => __( 'Wholesaler State news and reviews', 'evil-genius' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'   => 'clock',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'wholesalers', $args );
	  
}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
add_action( 'init', 'wholesaler_custom_post_type', 0 );


add_action( 'init', 'create_beer_types_nonhierarchical_taxonomy', 0 );
  
function create_beer_types_nonhierarchical_taxonomy() {
  
// Labels part for the GUI
  
  $labels = array(
    'name' => _x( 'Beer Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Beer Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Beer Types' ),
    'popular_items' => __( 'Popular Beer Types' ),
    'all_items' => __( 'All Beer Types' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Beer Type' ), 
    'update_item' => __( 'Update Beer Type' ),
    'add_new_item' => __( 'Add New Beer Type' ),
    'new_item_name' => __( 'New Beer Type Name' ),
    'separate_items_with_commas' => __( 'Separate beer types with commas' ),
    'add_or_remove_items' => __( 'Add or remove beer types' ),
    'choose_from_most_used' => __( 'Choose from the most used beer types' ),
    'menu_name' => __( 'Beer Types' ),
  ); 
  
// Now register the non-hierarchical taxonomy like tag
  
  register_taxonomy('beer_types','beers',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'beer_types' ),
  ));
}

add_action( 'wp_enqueue_scripts', 'add_my_beer_filter_script' );
function add_my_beer_filter_script() {
    wp_enqueue_script(
        'filter-beer', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/filter-beer.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function evil_genius_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on evil-genius, use a find and replace
		* to change 'evil-genius' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'evil-genius', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'evil-genius' ),
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
			'evil_genius_custom_background_args',
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
add_action( 'after_setup_theme', 'evil_genius_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function evil_genius_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'evil_genius_content_width', 640 );
}
add_action( 'after_setup_theme', 'evil_genius_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function evil_genius_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'evil-genius' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'evil-genius' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'evil_genius_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function evil_genius_scripts() {
	wp_enqueue_style( 'evil-genius-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'evil-genius-style', 'rtl', 'replace' );

	wp_enqueue_script( 'evil-genius-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'evil_genius_scripts' );

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

