<?php
/**
 * Theme Functions
 *
 * This file is used by WordPress to initialize the theme.
 * Frozr is designed to be used as a theme framework and this file should not be modified.
 * You should use a Child Theme to make your customizations. A sample child theme is provided
 * as an example in root directory of this theme. You can move it into the wp-content/themes to
 * enable activation of the child theme. <br>
 *
 * Reference:  {@link http://codex.wordpress.org/Child_Themes Codex: Child Themes}
 * 
 * @package Frozr
 * @subpackage ThemeInit
 */
 

//call the mobile detector class
require_once ( get_template_directory() . '/Mobile_Detect.php');
require_once ( get_template_directory() . '/library/options/options.php');
require_once ( get_template_directory() . '/theme-update-checker.php');

//call the Frozr metaboxes
require_once ( get_template_directory() . '/library/metaboxes/frozr_gallery_thumb.php');
require_once ( get_template_directory() . '/library/metaboxes/frozr_media_embed.php');
require_once ( get_template_directory() . '/library/metaboxes/frozr_audio_thumb.php');
require_once ( get_template_directory() . '/library/metaboxes/frozr_link_thumb.php');
require_once ( get_template_directory() . '/library/metaboxes/frozr_single_options.php');
require_once ( get_template_directory() . '/library/metaboxes/frozr_page_options.php');
require_once ( get_template_directory() . '/library/metaboxes/frozr_quick_links.php');

/*Mobile devices check*/
function frozr_mobile() {
	$fmobi = new Mobile_Detect;
	if ($fmobi->isMobile()) {
	return true;
	} else {
	return false;
	}
}
/*Tablet devices check*/
function frozr_tablet() {
	$fmobi = new Mobile_Detect;
	if ($fmobi->isTablet()) {
	return true;
	} else {
	return false;
	}
}
if (frozr_mobile() && !frozr_tablet()) {
	add_filter( 'body_class', 'mobile_class' );
}
function mobile_class( $classes ) {
	// add 'class-name' to the $classes array
	$classes[] = 'on-mobile';
	// return the $classes array
	return $classes;
}
/**
 * frozr_theme_setup & childtheme_override_theme_setup
 *
 * Override: childtheme_override_theme_setup
 *
 * @since Frozr 1.0
 */
if ( function_exists('childtheme_override_theme_setup') ) {
	/**
	 * @ignore
	 */
	function frozr_theme_setup() {
		childtheme_override_theme_setup();
	}
} else {
	/**
	 * frozr_theme_setup
	 *
	 * @todo review for impact of deprecations on child themes & fix comment blocks?
	 * @since Frozr 1.0?
	 */
	function frozr_theme_setup() {
		global $content_width, $wpdb;

		/**
		 * Set the content width based on the theme's design and stylesheet.
		 *
		 * Used to set the width of images and content. Should be equal to the width the theme
		 * is designed for, generally via the style.css stylesheet.
		 *
		 * @since Frozr 1.0
		 */
		if ( !isset($content_width) )
			$content_width = 980;
		
		// Path constants
		define( 'FROZR_DIR',  get_template_directory() .  '/' );
		define( 'FROZR_LIB',  get_template_directory() .  '/library' );

		// adds Post Format support
		// learn more: http://codex.wordpress.org/Post_Formats
		add_theme_support( 'post-formats', array( 'aside','gallery','link','image','quote','status','video','audio' ) );
		//adding support for bbpress
        if (function_exists('bbpress')) { add_theme_support( 'bbpress' ); }
		//add theme support for woocommerce
		add_theme_support('woocommerce'); 
		//adding support for Revolution Slider
        if (shortcode_exists("rev_slider")) { add_theme_support( 'revo' ); }

		// Legacy feed links handling - @to be removed eventually
		// If you add theme support for frozr_legacy_feedlinks, frozr_show_rss() and frozr_show_commentsrss() are used instead of add_theme_support( 'automatic-feed-links' )
		if ( defined( 'FROZR_COMPATIBLE_FEEDLINKS' ) ) add_theme_support( 'frozr_legacy_feedlinks' );

		// Legacy comments handling for pages, archives and links
		// If you add_theme_support for frozr_legacy_comment_handling, Frozr will only show comments on pages with a key/value of "comments"
		if ( defined( 'FROZR_COMPATIBLE_COMMENT_HANDLING' ) ) add_theme_support( 'frozr_legacy_comment_handling' );

		// Legacy body class handling - @to be removed eventually
		// If you add theme support for frozr_legacy_body_class, Frozr will use frozr_body_class instead of body_class()
		if ( defined( 'FROZR_COMPATIBLE_BODY_CLASS' ) ) add_theme_support( 'frozr_legacy_body_class' );

		// Legacy post class handling - @to be removed eventually
		// If you add theme support for frozr_legacy_post_class, Frozr will use frozr_body_class instead of post_class()
		if ( defined( 'FROZR_COMPATIBLE_POST_CLASS' ) ) add_theme_support( 'frozr_legacy_post_class' );

		// Legacy post class handling - @to be removed eventually
		// If you add theme support for frozr_legacy_post_class, Frozr will use it's legacy comment form
		if ( defined( 'FROZR_COMPATIBLE_COMMENT_FORM' ) ) add_theme_support( 'frozr_legacy_comment_form' );

		// Allow WordPress to manage the theme title
		add_theme_support( 'title-tag' );
		
		// Legacy custom background support handling
		add_theme_support( 'custom-background' );

		// Legacy custom header background support handling
		add_theme_support( 'custom-header' );

		// Check for MultiSite
		define( 'FROZR_MB', is_multisite()  );

		// Create the feedlinks
		if ( ! current_theme_supports( 'frozr_legacy_feedlinks' ) )
 			add_theme_support( 'automatic-feed-links' );
 
		if ( apply_filters( 'frozr_post_thumbs', true ) )
			add_theme_support( 'post-thumbnails' );
 
		add_image_size( 'gallery_size', 250, 250, true );
		add_editor_style('style.css');
						
		//Switch default core markup to valid html5
		add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

		// (Woocommerce) Load custom post types extensions
		require_once ( FROZR_LIB . '/extensions/post-types-extentions.php' );

		// Load custom header extensions
		require_once ( FROZR_LIB . '/extensions/header-extensions.php' );

		// Load custom content filters
		require_once ( FROZR_LIB . '/extensions/content-extensions.php' );

		// Load custom Comments filters
		require_once ( FROZR_LIB . '/extensions/comments-extensions.php' );

		// Load custom discussion filters
		require_once ( FROZR_LIB . '/extensions/discussion-extensions.php' );

		// Load custom Widgets
		require_once ( FROZR_LIB . '/extensions/widgets-extensions.php' );

		// Load Team members section
		require_once ( FROZR_LIB . '/extensions/our-team-extentions.php' );

		// Load news ticker extention
		require_once ( FROZR_LIB . '/extensions/news-ticker-extentions.php' );
		
		// Load the Comments Template functions and callbacks
		require_once ( FROZR_LIB . '/extensions/discussion.php' );

		// Load custom sidebar hooks
		require_once ( FROZR_LIB . '/extensions/sidebar-extensions.php' );

		// Load custom footer hooks
		require_once ( FROZR_LIB . '/extensions/footer-extensions.php' );

		// Add Dynamic Contextual Semantic Classes
		require_once ( FROZR_LIB . '/extensions/dynamic-classes.php' );

		// Need a little help from our helper functions
		require_once ( FROZR_LIB . '/extensions/helpers.php' );

		// load sliders
		require_once ( FROZR_LIB . '/extensions/slider-extensions.php' );

		// load featured posts
		require_once ( FROZR_LIB . '/extensions/featuredposts-extentions.php' );

		// load slider post formats
		require_once ( FROZR_LIB . '/extensions/sliderpostformats-extensions.php' );

		// load blog post formats
		require_once ( FROZR_LIB . '/extensions/postformats-extensions.php' );
				
		// load Frozr blog template
		require_once ( FROZR_LIB . '/templates/blog-page-template.php' );

		// load Frozr standard posts loop
		require_once ( FROZR_LIB . '/extensions/st-home-posts-extentions.php' );

		// load Frozr bbpress support files
		if (function_exists('bbpress')) {
		require_once ( FROZR_LIB . '/templates/forum-page-template.php' );
		require_once ( FROZR_LIB . '/extensions/hometopics-extentions.php' );
		require_once ( FROZR_LIB . '/widgets/whos-online/wp-whos-online.php' );
		}
		
		// Adds filters for the description/meta content in archive templates
		add_filter( 'archive_meta', 'wptexturize' );
		add_filter( 'archive_meta', 'convert_smilies' );
		add_filter( 'archive_meta', 'convert_chars' );
		add_filter( 'archive_meta', 'wpautop' );
		add_filter( 'use_default_gallery_style', '__return_false' );

		// Remove the WordPress Generator - via http://blog.ftwr.co.uk/archives/2007/10/06/improving-the-wordpress-generator/
		function frozr_remove_generators() {
 			return '';
 		}
 		if ( apply_filters( 'frozr_hide_generators', true ) )
 			add_filter( 'the_generator', 'frozr_remove_generators' );
 
		// Translate, if applicable
		load_theme_textdomain( 'frozr', FROZR_DIR . 'languages' );

		$locale = get_locale();
		$locale_file = FROZR_DIR . "languages/$locale.php";
		if ( is_readable($locale_file) )
			require_once ($locale_file);
	}
}

add_action('after_setup_theme', 'frozr_theme_setup', 10);
$updateChecker = new ThemeUpdateChecker('frozr','http://updater.mahmudhamid.com/?action=get_metadata&slug=frozr');
/**
 * Registers action hook: frozr_child_init
 * 
 * @since Frozr 1.0
 */
function frozr_child_init() {
	do_action('frozr_child_init');
}

add_action('after_setup_theme', 'frozr_child_init', 20);
function add_pop_menu_atts( $atts, $item, $args ) {
    // only check pages
    if( 'page' == $item->object ){
        // if this page has a template assigned
        if( $slug = get_page_template_slug( $item->object_id ) ){
            // get the array of filenames => template names in the current theme
            $templates = wp_get_theme()->get_page_templates();
            // if there is a template with key matching our filename
            if( $templates[$slug] == "popup" ){
				$atts['href'] = "#pop_$item->object_id";
				$atts['data-rel'] = "popup";
				$atts['data-position-to'] = "window";
 				$atts['data-transition'] = "fade";
           }
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_pop_menu_atts', 10, 3 );

if ( function_exists('childtheme_override_init_navmenu') )  {
	/**
	 * @ignore
	 */
	 function frozr_init_navmenu() {
    	childtheme_override_init_navmenu();
    }
} else {
	/**
	 * Register primary nav menu
	 * 
	 * Override: childtheme_override_init_navmenu
	 * Filter: frozr_primary_menu_id
	 * Filter: frozr_primary_menu_name
	 */
    function frozr_init_navmenu() {
		register_nav_menu( apply_filters('frozr_above_menu_menu_id', 'top-menu'), apply_filters('frozr_primary_menu_name', __( 'The Top Menu', 'frozr' ) ) );
		register_nav_menu( apply_filters('frozr_user_top_menu_id', 'user-top-menu'), apply_filters('frozr_primary_menu_name', __( 'The user menu in the Top Menu', 'frozr' ) ) );
		register_nav_menu( apply_filters('frozr_primary_menu_id', 'primary-menu'), apply_filters('frozr_primary_menu_name', __( 'Primary Menu', 'frozr' ) ) );
		if (function_exists('bbpress') ) {
		register_nav_menu( apply_filters('frozr_forum_menu_id', 'forum-menu'), apply_filters('frozr_forum_menu_name', __( 'Forum Menu', 'frozr' ) ) );
		}
	}
}
add_action('init', 'frozr_init_navmenu');
$thm_key = get_theme_mod('theme_key_txt');
if (is_admin() && empty($thm_key)) {
add_action( 'admin_notices', 'my_admin_error_notice');
}
function my_admin_error_notice() {
	$class = "error notice is-dismissible";
	$message = __( 'Please enter your Frozr key using WordPress Customizer to get important updates for Frozr. If you don\'t have one, ', 'frozr').'<a href="http://mahmudhamid.com/forums/forum/general-forum/frozr-key-requests/">'.__('Request','frozr') .'</a>'. __(' your key now!','frozr');
        echo"<div class=\"$class\"> <p>$message</p></div>"; 
}