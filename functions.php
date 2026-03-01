<?php
/**
 * khakehashi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package khakehashi
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Theme setup
 */
function khakehashi_setup() {
	load_theme_textdomain( 'khakehashi', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'khakehashi' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'khakehashi_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'khakehashi_setup' );

/**
 * Content width
 */
function khakehashi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'khakehashi_content_width', 640 );
}
add_action( 'after_setup_theme', 'khakehashi_content_width', 0 );

/**
 * Widgets
 */
function khakehashi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'khakehashi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'khakehashi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'khakehashi_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function khakehashi_scripts() {

	// Tailwind compiled CSS
	wp_enqueue_style(
		'khakehashi-tailwind',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/style.css' )
	);

	// Navigation JS (if you have one)
	wp_enqueue_script(
		'khakehashi-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		array(),
		_S_VERSION,
		true
	);

	// Main JS (mobile menu etc.)
	wp_enqueue_script(
		'khakehashi-main',
		get_template_directory_uri() . '/js/main.js',
		array(),
		filemtime( get_template_directory() . '/js/main.js' ),
		true
	);

	// Comment reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'khakehashi_scripts' );

/**
 * Include additional files
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ============================================
// CUSTOM POST TYPES
// ============================================

// Register Testimonial CPT
function khakehashi_testimonial_cpt() {

    $labels = array(
        'name'               => _x('Testimonials', 'post type general name', 'khakehashi'),
        'singular_name'      => _x('Testimonial', 'post type singular name', 'khakehashi'),
        'menu_name'          => _x('Testimonials', 'admin menu', 'khakehashi'),
        'name_admin_bar'     => _x('Testimonial', 'add new on admin bar', 'khakehashi'),
        'add_new'            => _x('Add New', 'testimonial', 'khakehashi'),
        'add_new_item'       => __('Add New Testimonial', 'khakehashi'),
        'new_item'           => __('New Testimonial', 'khakehashi'),
        'edit_item'          => __('Edit Testimonial', 'khakehashi'),
        'view_item'          => __('View Testimonial', 'khakehashi'),
        'all_items'          => __('All Testimonials', 'khakehashi'),
        'search_items'       => __('Search Testimonials', 'khakehashi'),
        'parent_item_colon'  => __('Parent Testimonials:', 'khakehashi'),
        'not_found'          => __('No testimonials found.', 'khakehashi'),
        'not_found_in_trash' => __('No testimonials found in Trash.', 'khakehashi')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonial'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true, // for Gutenberg
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'khakehashi_testimonial_cpt');


// Register Team CPT
function khakehashi_team_cpt() {

    $labels = array(
        'name'               => _x('Team Members', 'post type general name', 'khakehashi'),
        'singular_name'      => _x('Team Member', 'post type singular name', 'khakehashi'),
        'menu_name'          => _x('Team', 'admin menu', 'khakehashi'),
        'add_new'            => __('Add New', 'khakehashi'),
        'add_new_item'       => __('Add New Team Member', 'khakehashi'),
        'edit_item'          => __('Edit Team Member', 'khakehashi'),
        'view_item'          => __('View Team Member', 'khakehashi'),
        'all_items'          => __('All Team Members', 'khakehashi'),
        'search_items'       => __('Search Team Members', 'khakehashi'),
        'not_found'          => __('No team members found.', 'khakehashi'),
        'not_found_in_trash' => __('No team members found in Trash.', 'khakehashi')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'team'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('team', $args);
}
add_action('init', 'khakehashi_team_cpt');

// Register Why Japan CPT
function khakehashi_why_japan_cpt() {

    $labels = array(
        'name'               => __('Why Japan Cards', 'khakehashi'),
        'singular_name'      => __('Why Japan Card', 'khakehashi'),
        'menu_name'          => __('Why Japan', 'khakehashi'),
        'add_new_item'       => __('Add New Card', 'khakehashi'),
        'edit_item'          => __('Edit Card', 'khakehashi'),
        'all_items'          => __('All Cards', 'khakehashi'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'supports'           => array('title'),
        'has_archive'        => false,
    );

    register_post_type('why_japan', $args);
}
add_action('init', 'khakehashi_why_japan_cpt');


// Register Top Programs CPT
function khakehashi_top_programs_cpt() {

    $labels = array(
        'name'               => __('Top Programs', 'khakehashi'),
        'singular_name'      => __('Top Program', 'khakehashi'),
        'menu_name'          => __('Top Programs', 'khakehashi'),
        'add_new_item'       => __('Add New Program', 'khakehashi'),
        'edit_item'          => __('Edit Program', 'khakehashi'),
        'all_items'          => __('All Programs', 'khakehashi'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'supports'           => array('title'), 
        'has_archive'        => false,
    );

    register_post_type('top_programs', $args);
}
add_action('init', 'khakehashi_top_programs_cpt');

// Register Services CPT
function khakehashi_services_cpt() {
    $labels = array(
        'name'               => _x('Services', 'post type general name', 'khakehashi'),
        'singular_name'      => _x('Service', 'post type singular name', 'khakehashi'),
        'menu_name'          => _x('Services', 'admin menu', 'khakehashi'),
        'add_new'            => __('Add New', 'khakehashi'),
        'add_new_item'       => __('Add New Service', 'khakehashi'),
        'edit_item'          => __('Edit Service', 'khakehashi'),
        'view_item'          => __('View Service', 'khakehashi'),
        'all_items'          => __('All Services', 'khakehashi'),
        'search_items'       => __('Search Services', 'khakehashi'),
        'not_found'          => __('No services found.', 'khakehashi'),
        'not_found_in_trash' => __('No services found in Trash.', 'khakehashi')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('services', $args);
}
add_action('init', 'khakehashi_services_cpt');

// Faq CPT
// Register FAQ Custom Post Type
function khakehashi_register_faq_cpt() {
    register_post_type('faq', [
        'labels' => [
            'name' => 'FAQs',
            'singular_name' => 'FAQ',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-editor-help',
        'supports' => ['title'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'khakehashi_register_faq_cpt');

// Register Employee CPT
function kh_register_employee_cpt() {

    $labels = array(
        'name'               => 'Employees',
        'singular_name'      => 'Employee',
        'menu_name'          => 'Employees',
        'add_new'            => 'Add Employee',
        'add_new_item'       => 'Add New Employee',
        'edit_item'          => 'Edit Employee',
        'new_item'           => 'New Employee',
        'view_item'          => 'View Employee',
        'search_items'       => 'Search Employees',
        'not_found'          => 'No employees found',
        'not_found_in_trash' => 'No employees found in Trash'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id',
        'supports'           => array('title', 'thumbnail'),
        'rewrite'            => array('slug' => 'employee'),
        'has_archive'        => true, // Archive page enable
        'show_in_rest'       => true
    );

    register_post_type('employee', $args);
}
add_action('init', 'kh_register_employee_cpt');


// ============================================
// WORK IN JAPAN PAGE - CUSTOM POST TYPES
// ============================================

// Register Work Visa CPT (Main)
function register_work_visa_cpt() {
    $labels = array(
        'name'                  => 'Work Visas',
        'singular_name'         => 'Work Visa',
        'menu_name'             => 'Work Visas',
        'add_new'               => 'Add New Visa',
        'add_new_item'          => 'Add New Work Visa',
        'edit_item'             => 'Edit Work Visa',
        'new_item'              => 'New Work Visa',
        'view_item'             => 'View Work Visa',
        'search_items'          => 'Search Work Visas',
        'not_found'             => 'No work visas found',
        'not_found_in_trash'    => 'No work visas found in trash'
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'menu_icon'             => 'dashicons-id-alt',
        'supports'              => array('title', 'editor', 'page-attributes'),
        'rewrite'               => array('slug' => 'work-visa'),
    );

    register_post_type('work_visa', $args);
}
add_action('init', 'register_work_visa_cpt');

// Register SSW Sectors CPT
function register_ssw_sector_cpt() {
    $labels = array(
        'name'                  => 'SSW Sectors',
        'singular_name'         => 'SSW Sector',
        'menu_name'             => 'SSW Sectors',
        'add_new'               => 'Add New Sector',
        'add_new_item'          => 'Add New SSW Sector',
        'edit_item'             => 'Edit SSW Sector',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_menu'          => 'edit.php?post_type=work_visa',
        'menu_icon'             => 'dashicons-portfolio',
        'supports'              => array('title', 'editor', 'page-attributes'),
        'rewrite'               => array('slug' => 'ssw-sector'),
    );

    register_post_type('ssw_sector', $args);
}
add_action('init', 'register_ssw_sector_cpt');

// Register TITP Sectors CPT
function register_titp_sector_cpt() {
    $labels = array(
        'name'                  => 'TITP Sectors',
        'singular_name'         => 'TITP Sector',
        'menu_name'             => 'TITP Sectors',
        'add_new'               => 'Add New Sector',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_menu'          => 'edit.php?post_type=work_visa',
        'supports'              => array('title', 'editor', 'page-attributes'),
    );

    register_post_type('titp_sector', $args);
}
add_action('init', 'register_titp_sector_cpt');


// ============================================
// STUDY IN JAPAN PAGE - CUSTOM POST TYPES
// ============================================

// Register Study Programs CPT (Main)
function register_study_program_cpt() {
    $labels = array(
        'name'                  => 'Study Programs',
        'singular_name'         => 'Study Program',
        'menu_name'             => 'Study Programs',
        'add_new'               => 'Add New Program',
        'add_new_item'          => 'Add New Study Program',
        'edit_item'             => 'Edit Study Program',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'supports'              => array('title', 'editor', 'page-attributes'),
        'rewrite'               => array('slug' => 'study-program'),
    );

    register_post_type('study_program', $args);
}
add_action('init', 'register_study_program_cpt');

// Register Language Courses CPT
function register_language_course_cpt() {
    $labels = array(
        'name'                  => 'Language Courses',
        'singular_name'         => 'Language Course',
        'menu_name'             => 'Language Courses',
        'add_new'               => 'Add New Course',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_menu'          => 'edit.php?post_type=study_program',
        'supports'              => array('title', 'editor', 'page-attributes'),
    );

    register_post_type('language_course', $args);
}
add_action('init', 'register_language_course_cpt');

// Register Vocational Programs CPT
function register_vocational_program_cpt() {
    $labels = array(
        'name'                  => 'Vocational Programs',
        'singular_name'         => 'Vocational Program',
        'menu_name'             => 'Vocational Programs',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_menu'          => 'edit.php?post_type=study_program',
        'supports'              => array('title', 'editor', 'page-attributes'),
    );

    register_post_type('vocational_program', $args);
}
add_action('init', 'register_vocational_program_cpt');

// Register Scholarships CPT
function register_scholarship_cpt() {
    $labels = array(
        'name'                  => 'Scholarships',
        'singular_name'         => 'Scholarship',
        'menu_name'             => 'Scholarships',
        'add_new'               => 'Add New Scholarship',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'show_ui'               => true,
        'show_in_menu'          => 'edit.php?post_type=study_program',
        'menu_icon'             => 'dashicons-awards',
        'supports'              => array('title', 'editor', 'page-attributes'),
    );

    register_post_type('scholarship', $args);
}
add_action('init', 'register_scholarship_cpt');

add_filter( 'wpcf7_autop_or_not', '__return_true' );