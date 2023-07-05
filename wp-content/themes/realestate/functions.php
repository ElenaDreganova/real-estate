<?php
/**
 * RealEstate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RealEstate
 */


	function realestate_enqueue_style() {
		
		wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800', array(), '1.0.1',  'all' );

	    wp_enqueue_style( 'realestate-normalize', get_template_directory_uri() .  '/assets/css/normalize.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-font-awesome', get_template_directory_uri() .  '/assets/css/font-awesome.min.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-fontello', get_template_directory_uri() .  '/assets/css/fontello.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-pe-icon-7-stroke', get_template_directory_uri() .  '/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-pe-icon-7-stroke-helper', get_template_directory_uri() .  '/assets/fonts/icon-7-stroke/css/helper.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-animate', get_template_directory_uri() .  '/assets/css/animate.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() .  '/assets/css/bootstrap-select.min.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .  '/assets/css/bootstrap.min.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-icheck', get_template_directory_uri() .  '/assets/css/icheck.min_all.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-price-range', get_template_directory_uri() .  '/assets/css/price-range.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .  '/assets/css/owl.carousel.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'owl-theme', get_template_directory_uri() .  '/assets/css/owl.theme.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'owl-transitions', get_template_directory_uri() .  '/assets/css/owl.transitions.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-style', get_template_directory_uri() .  '/assets/css/style.css', array(), '1.0.1',  'all' );
	    wp_enqueue_style( 'realestate-responsive', get_template_directory_uri() .  '/assets/css/responsive.css', array(), '1.0.1',  'all' );
}

add_action( 'wp_enqueue_scripts', 'realestate_enqueue_style' );
 

function realestate_enqueue_scripts() {
    wp_enqueue_script( 'modernizr-2.6.2', get_template_directory_uri() .  '/assets/js/modernizr-2.6.2.min.js', array(), '1.0.1',  'all' );
    wp_enqueue_script( 'jquery-1.10.2', get_template_directory_uri() .  '/assets/js/jquery-1.10.2.min.js', array('modernizr-2.6.2'), '1.0.1',  'all' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .  '/assets/js/bootstrap.min.js', array('jquery-1.10.2','modernizr-2.6.2'), '1.0.1',  'all' );
    wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() .  '/assets/js/bootstrap-select.min.js', array('jquery-1.10.2','bootstrap'), '1.0.1',  'all' );
    wp_enqueue_script( 'bootstrap-hover-dropdown', get_template_directory_uri() .  '/assets/js/bootstrap-hover-dropdown.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select'), '1.0.1',  'all' );
    wp_enqueue_script( 'easypiechart', get_template_directory_uri() .  '/assets/js/easypiechart.min.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown'), '1.0.1',  'all' );
    wp_enqueue_script( 'jquery-easypiechart', get_template_directory_uri() .  '/assets/js/jquery.easypiechart.min.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart'), '1.0.1',  'all' );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() .  '/assets/js/owl.carousel.min.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart'), '1.0.1',  'all' );
    wp_enqueue_script( 'wow', get_template_directory_uri() .  '/assets/js/wow.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'owl-carousel'), '1.0.1',  'all' );
    wp_enqueue_script( 'icheck', get_template_directory_uri() .  '/assets/js/icheck.min.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'owl-carousel', 'wow'), '1.0.1',  'all' );
     wp_enqueue_script( 'price-range', get_template_directory_uri() .  '/assets/js/price-range.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'owl-carousel', 'wow', 'icheck'), '1.0.1',  'all' );
     wp_enqueue_script( 'realestate-main', get_template_directory_uri() .  '/assets/js/main.js', array('jquery-1.10.2','bootstrap', 'bootstrap-select', 'bootstrap-hover-dropdown', 'easypiechart', 'owl-carousel', 'wow', 'icheck', 'price-range'), '1.0.1',  'all' );
}


add_action( 'wp_enqueue_scripts', 'realestate_enqueue_scripts' );


function realestate_enqueue_links() {

	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">';
    echo '<link rel="icon" href="favicon.ico" type="image/x-icon">';
}
add_action( 'wp_head', 'realestate_enqueue_links' );

//все настройки темы
function realestate_theme_init() {
	register_nav_menus(array(
		'header_nav' => 'Header menu',
		'footer_nav' => 'Footer menu',
	));

	//load language directory
	load_theme_textdomain( 'realestate', get_template_directory() . '/lang' );
}

add_action('after_setup_theme', 'realestate_theme_init');



//добавление записей на сайт в разделе объекты недвижимости
function realestate_register_post_type_property() {

	

		$labels = array(
		'name'              => esc_html_x( 'Cities', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => esc_html_x( 'City', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => esc_html__( 'Search Cities', 'textdomain' ),
		'all_items'         => esc_html__( 'All Cities', 'textdomain' ),
		'parent_item'       => esc_html__( 'Parent City', 'textdomain' ),
		'parent_item_colon' => esc_html__( 'Parent City:', 'textdomain' ),
		'edit_item'         => esc_html__( 'Edit City', 'textdomain' ),
		'update_item'       => esc_html__( 'Update City', 'textdomain' ),
		'add_new_item'      => esc_html__( 'Add New City', 'textdomain' ),
		'new_item_name'     => esc_html__( 'New City Name', 'textdomain' ),
		'menu_name'         => esc_html__( 'Cities', 'textdomain' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'cities' ),
		'show_in_rest'      => true,
	);

	register_taxonomy('cities', array('property'), $args);

	unset($args);

	$labels = array(
		'name'              => esc_html_x( 'Features', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => esc_html_x( 'Feature', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => esc_html__( 'Search Features', 'textdomain' ),
		'all_items'         => esc_html__( 'All Features', 'textdomain' ),
		'parent_item'       => esc_html__( 'Parent Feature', 'textdomain' ),
		'parent_item_colon' => esc_html__( 'Parent Feature:', 'textdomain' ),
		'edit_item'         => esc_html__( 'Edit Feature', 'textdomain' ),
		'update_item'       => esc_html__( 'Update Feature', 'textdomain' ),
		'add_new_item'      => esc_html__( 'Add New Feature', 'textdomain' ),
		'new_item_name'     => esc_html__( 'New Feature Name', 'textdomain' ),
		'menu_name'         => esc_html__( 'Features', 'textdomain' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'features' ),
		'show_in_rest'      => true,
	);

	register_taxonomy('features', array('property'), $args);

	unset($args);

	/*$labels = array(
		'name'              => esc_html_x( 'Properties', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => esc_html_x( 'Property', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => esc_html__( 'Search Properties', 'textdomain' ),
		'all_items'         => esc_html__( 'All Properties', 'textdomain' ),
		'parent_item'       => esc_html__( 'Parent Property', 'textdomain' ),
		'parent_item_colon' => esc_html__( 'Parent Property:', 'textdomain' ),
		'edit_item'         => esc_html__( 'Edit Property', 'textdomain' ),
		'update_item'       => esc_html__( 'Update Property', 'textdomain' ),
		'add_new_item'      => esc_html__( 'Add New Property', 'textdomain' ),
		'new_item_name'     => esc_html__( 'New Property Name', 'textdomain' ),
		'menu_name'         => esc_html__( 'Properties', 'textdomain' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'properties' ),
		'show_in_rest'      => true,
	);

	register_taxonomy('properties', array('property'), $args);

	unset($args);*/
	

	$args = [
		'label' => esc_html__('Properties', 'realestate'),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => [
			'title',
			'editor', 
			'excerpt',
			'thumbnail',
			'custom-fields',

		],
		'rewrite' => array( 'slug' => 'properties'),
	];
	register_post_type('Property', $args);

}

add_action('init', 'realestate_register_post_type_property');




//создание таксономии и кастомных полей для добавления картинки без использования плагинов

/*function realestate_properties_add_custom_meta_field() {
    echo '<div class="form-field">
                <label for="term_meta[class_term_meta]">Image URL</label>
                <input type="text" name="term_meta[class_term_meta]" id="term_meta[class_term_meta]" value="">
                <p class="description">Enter a value for this field</p>
            </div>';
        }
    add_action('properties_add_form_fields', 'realestate_properties_add_custom_meta_field', 10, 2 );


function realestate_properties_edit_custom_meta_field($term) {
	
   $t_id = $term->term_id;
   $term_meta = get_option( "taxonomy_$t_id" ); 
   $value = esc_attr( $term_meta['class_term_meta'] ) ? esc_attr( $term_meta['class_term_meta'] ) : '';
	echo '<tr class="form-field">
			<th scope="row" valign="top"><label for="term_meta[class_term_meta]">Image URL</label></th>
		<td>
			<input type="text" name="term_meta[class_term_meta]" id="term_meta[class_term_meta]" value="' . $value . '">
			<p class="description">Enter a value for this field</p>
		</td>
		</tr>';    
   
    	}

	add_action( 'properties_edit_form_fields','realestate_properties_edit_custom_meta_field', 10, 2 );

function realestate_properties_save_taxonomy_custom_meta_field( $term_id ) {
        if ( isset( $_POST['term_meta'] ) ) {

            $t_id = $term_id;
            $term_meta = get_option( "taxonomy_$t_id" );
            $cat_keys = array_keys( $_POST['term_meta'] );
            foreach ( $cat_keys as $key ) {
                if ( isset ( $_POST['term_meta'][$key] ) ) {
                    $term_meta[$key] = $_POST['term_meta'][$key];
                }
            }
            // Save the option array.
            update_option( "taxonomy_$t_id", $term_meta );
        }

    }  
	add_action( 'edited_properties', 'realestate_properties_save_taxonomy_custom_meta_field', 10, 2 );  
	add_action( 'create_properties', 'realestate_properties_save_taxonomy_custom_meta_field', 10, 2 );*/




function realestate_cities_add_custom_meta_field() {
    echo '<div class="form-field">
                <label for="term_meta[class_term_meta]">Image URL</label>
                <input type="text" name="term_meta[class_term_meta]" id="term_meta[class_term_meta]" value="">
                <p class="description">Enter a value for this field</p>
            </div>';
        }
    add_action('cities_add_form_fields', 'realestate_cities_add_custom_meta_field', 10, 2 );

function realestate_cities_edit_custom_meta_field($term) {
	
		$t_id = $term->term_id;
		$term_meta = get_option( "taxonomy_$t_id" ); 
		$value = esc_attr( $term_meta['class_term_meta'] ) ? esc_attr( $term_meta['class_term_meta'] ) : '';
		 echo '<tr class="form-field">
				 <th scope="row" valign="top"><label for="term_meta[class_term_meta]">Image URL</label></th>
			 <td>
				 <input type="text" name="term_meta[class_term_meta]" id="term_meta[class_term_meta]" value="' . $value . '">
				 <p class="description">Enter a value for this field</p>
			 </td>
			 </tr>';    
		
			 }
	 
		 add_action( 'cities_edit_form_fields','realestate_cities_edit_custom_meta_field', 10, 2 );
	 
 function realestate_cities_save_taxonomy_custom_meta_field( $term_id ) {
			 if ( isset( $_POST['term_meta'] ) ) {
	 
				 $t_id = $term_id;
				 $term_meta = get_option( "taxonomy_$t_id" );
				 $cat_keys = array_keys( $_POST['term_meta'] );
				 foreach ( $cat_keys as $key ) {
					 if ( isset ( $_POST['term_meta'][$key] ) ) {
						 $term_meta[$key] = $_POST['term_meta'][$key];
					 }
				 }
				 // Save the option array.
				 update_option( "taxonomy_$t_id", $term_meta );
			 }
	 
		 }  
		 add_action( 'edited_cities', 'realestate_cities_save_taxonomy_custom_meta_field', 10, 2 );  
		 add_action( 'create_cities', 'realestate_cities_save_taxonomy_custom_meta_field', 10, 2 );



function realestate_features_add_custom_meta_field() {
    echo '<div class="form-field">
                <label for="term_meta[class_term_meta]">Image URL</label>
                <input type="text" name="term_meta[class_term_meta]" id="term_meta[class_term_meta]" value="">
                <p class="description">Enter a value for this field</p>
            </div>';
        }
    add_action('features_add_form_fields', 'realestate_features_add_custom_meta_field', 10, 2 );

function realestate_features_edit_custom_meta_field($term) {
	
		$t_id = $term->term_id;
		$term_meta = get_option( "taxonomy_$t_id" ); 
		$value = esc_attr( $term_meta['class_term_meta'] ) ? esc_attr( $term_meta['class_term_meta'] ) : '';
		 echo '<tr class="form-field">
				 <th scope="row" valign="top"><label for="term_meta[class_term_meta]">Image URL</label></th>
			 <td>
				 <input type="text" name="term_meta[class_term_meta]" id="term_meta[class_term_meta]" value="' . $value . '">
				 <p class="description">Enter a value for this field</p>
			 </td>
			 </tr>';    
		
			 }
	 
	add_action( 'features_edit_form_fields','realestate_features_edit_custom_meta_field', 10, 2 );
	 
 function realestate_features_save_taxonomy_custom_meta_field( $term_id ) {
			 if ( isset( $_POST['term_meta'] ) ) {
	 
				 $t_id = $term_id;
				 $term_meta = get_option( "taxonomy_$t_id" );
				 $cat_keys = array_keys( $_POST['term_meta'] );
				 foreach ( $cat_keys as $key ) {
					 if ( isset ( $_POST['term_meta'][$key] ) ) {
						 $term_meta[$key] = $_POST['term_meta'][$key];
					 }
				 }
				 // Save the option array.
				 update_option( "taxonomy_$t_id", $term_meta );
			 }
	 
		 }  
	 add_action( 'edited_features', 'realestate_features_save_taxonomy_custom_meta_field', 10, 2 );  
	 add_action( 'create_features', 'realestate_features_save_taxonomy_custom_meta_field', 10, 2 );
	




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function realestate_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on RealEstate, use a find and replace
		* to change 'realestate' to the name of your theme in all the template files.
		*/
	

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
			'realestate_custom_background_args',
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
add_action( 'after_setup_theme', 'realestate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function realestate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'realestate_content_width', 640 );
}
add_action( 'after_setup_theme', 'realestate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function realestate_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'realestate' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'realestate' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'realestate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function realestate_scripts() {
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'realestate_scripts' );

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

