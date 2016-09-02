<?php

/**
 * Widgets Extensions
 *
 * @package FrozrCoreLibrary
 * @subpackage WidgetsExtensions
 */

/**
 * Markup before the widget
 */
function frozr_before_widget() {
	$content = '<li id="%1$s" class="widgetcontainer %2$s">';
	return apply_filters('frozr_before_widget', $content);
}

/**
 * Markup after the widget
 */
function frozr_after_widget() {
	$content = '</li>';
	return apply_filters('frozr_after_widget', $content);
}


/**
 * Markup before the widget title
 */
function frozr_before_title() {
	$content = "<h3 class=\"widgettitle\">";
	return apply_filters('frozr_before_title', $content);
}

/**
 * Markup after the widget title
 */
function frozr_after_title() {
	$content = "</h3>\n";
	return apply_filters('frozr_after_title', $content);
}

/**
 * Displays a filterable Search Form
 *
 * This function is called from the searchform.php template. 
 * That template is called by the WP function get_search_form()
 *
 * Filter: search_field_value Controls the input element's size attribute <br>
 * Filter: frozr_search_submit Controls the form's "submit" input element <br>
 * Filters: frozr_search_form Controls the entire from output just before display <br>
 *
 * @link http://codex.wordpress.org/Function_Reference/get_search_form Codex: get_search_form()
 */
function frozr_search_form($type="fro") {

	$search_form_length = apply_filters('frozr_search_form_length', '32');
	if ($type == 'bbp') {
	$place = __('Search Forum','frozr');
	$s_value = esc_attr( bbp_get_search_terms() );
	} elseif ($type == 'woo') {
	$place = __('Search Products','frozr');
	$s_value = esc_attr( get_search_query() );
	} else {
	$place = __('Search','frozr');
	$s_value = esc_attr( get_search_query() );
	}
	$search_form = '<form role="search" id="searchform" data-ajax="false" autocomplete="off" method="get" action="' . home_url() .'/">';
	$search_form .= '<label for="s" class="ui-hidden-accessible">Search</label>';
	$search_form .= '<input  name="s" id="s" class="searchbox-input" type="text" data-type="search" required value="'. $s_value .'" placeholder="'. $place .'" size="'. $search_form_length .'" tabindex="1" />';
	if ($type == 'woo') {
	$search_form .= '<input type="hidden" name="post_type" value="product" />';
	} elseif ($type == 'bbp') {
	$search_form .= '<input type="hidden" name="action" value="bbp-search-request" />';
	}
	$search_form .= '</form>';
	
	echo apply_filters('frozr_search_form', $search_form);
}

/**
 * Defines the array for creating and displaying the widgetized areas
 * in the WP-Admin and front-end of the site.
 * 
 * Filter: frozr_widgetized_areas
 *
 * @uses frozr_before_widget()
 * @uses frozr_after_widget()
 * @uses frozr_before_title()
 * @uses frozr_after_title()
 * @return array
 */
function frozr_widgets_array() {
	$frozr_widgetized_areas = array(
		'Primary Aside' => array(
			'admin_menu_order' => 1,
			'args' => array (
				'name' => __( 'Primary Aside', 'frozr' ),
				'id' => 'primary-aside',
                'description' => __('The primary widget area, most often used as a sidebar.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_primary_aside',
			'function'		=> 'frozr_primary_aside',
			'priority'		=> 1,
			),
		'Single Sidebar' => array(
			'admin_menu_order' => 2,
			'args' => array (
				'name' => __( 'Single Post Sidebar', 'frozr' ),
				'id' => 'single-sidebar',
                'description' => __('The widget area displayed on the single post page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_single_sidebar',
			'function'		=> 'frozr_single_sidebar',
			'priority'		=> 2,
			),
		'Page Sidebar' => array(
			'admin_menu_order' => 3,
			'args' => array (
				'name' => __( 'Page Sidebar', 'frozr' ),
				'id' => 'page-sidebar',
                'description' => __('The widget area displayed on the single page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_page_sidebar',
			'function'		=> 'frozr_page_sidebar',
			'priority'		=> 3,
			),
		'Forum Sidebar' => array(
			'admin_menu_order' => 4,
			'args' => array (
				'name' => __( 'Forum Sidebar', 'frozr' ),
				'id' => 'forum-sidebar',
				'description' => __('The bottom widget area displayed on the forum page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_forum_sidebar',
			'function'		=> 'frozr_forum_sidebar',
			'priority'		=> 4,
			),
		'Forum Header' => array(
			'admin_menu_order' => 5,
			'args' => array (
				'name' => __( 'Forum Header', 'frozr' ),
				'id' => 'forum-header',
				'description' => __('The widget area displayed on the top of the forum page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_forum_header',
			'function'		=> 'frozr_forum_header',
			'priority'		=> 5,
			),
		'Single Insert' => array(
			'admin_menu_order' => 6,
			'args' => array (
				'name' => __( 'Single Insert', 'frozr' ),
				'id' => 'single-insert',
                'description' => __('The widget area inserted to the right of a single post page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_single_insert',
			'function'		=> 'frozr_single_insert',
			'priority'		=> 6,
			),
		'Blog Sidebar' => array(
			'admin_menu_order' => 7,
			'args' => array (
				'name' => __( 'Blog Sidebar', 'frozr' ),
				'id' => 'blog-sidebar',
                'description' => __('The bottom widget area displayed on a blog template page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_blog_sidebar',
			'function'		=> 'frozr_blog_sidebar',
			'priority'		=> 7,
			),
		'Page Inset' => array(
			'admin_menu_order' => 8,
			'args' => array (
				'name' => __( 'Page Inset', 'frozr' ),
				'id' => 'page-inset',
                'description' => __('The inset widget area displayed on a page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_page_inset',
			'function'		=> 'frozr_page_inset',
			'priority'		=> 8,
			),
		'Archive Sidebar' => array(
			'admin_menu_order' => 10,
			'args' => array (
				'name' => __( 'Archive Page Sidebar', 'frozr' ),
				'id' => 'archive-sidebar',
                'description' => __('The archive widget area displayed on the archive template page.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_archive',
			'function'		=> 'frozr_archive_sidebar',
			'priority'		=> 10,
			)
		);
	
	return apply_filters('frozr_widgetized_areas', $frozr_widgetized_areas);
	
}
/**
 * WooCommerce shop sidebar
 * 
 * Filter: frozr_widgetized_woo_area
 *
 * @uses frozr_before_widget()
 * @uses frozr_after_widget()
 * @uses frozr_before_title()
 * @uses frozr_after_title()
 * @return array
 */
function frozr_woo_shop_widgets() {

$frozr_widgetized_woo_area = array(
		'WooCommerce Shop inset' => array(
			'admin_menu_order' => 11,
			'args' => array (
				'name' => __( 'WooCommerce Shop Page inset', 'frozr' ),
				'id' => 'woo-shop-inset-sidebar',
                'description' => __('The Woocommerce Shop page inset area.', 'frozr' ),
				'before_widget' => '<div class="woo-widget-wrapper %2$s"><i class="widget-icon fs-icon-plus"></i><div id="%1$s" class="woo-sidebar-widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<h5 class="widgettitle">',
				'after_title' => '</h5>',
				),
			'action_hook'	=> 'widget_area_woo_shop_inset',
			'function'		=> 'frozr_woo_shop_inset',
			'priority'		=> 11,
			),
		'WooCommerce Shop sidebar' => array(
			'admin_menu_order' => 12,
			'args' => array (
				'name' => __( 'WooCommerce sidebar', 'frozr' ),
				'id' => 'woo-shop-sidebar',
                'description' => __('The WooCommerce pages sidebar.', 'frozr' ),
				'before_widget' => frozr_before_widget(),
				'after_widget' => frozr_after_widget(),
				'before_title' => frozr_before_title(),
				'after_title' => frozr_after_title(),
				),
			'action_hook'	=> 'widget_area_woo_shop',
			'function'		=> 'frozr_woo_shop',
			'priority'		=> 12,
			),
		'lazyeater inset sidebar' => array(
			'admin_menu_order' => 13,
			'args' => array (
				'name' => __( 'Restaurants lists sidebar', 'frozr' ),
				'id' => 'woo-lazy-inset-sidebar',
                'description' => __('Sidebar for Restaurants loops.', 'frozr' ),
				'before_widget' => '<div class="woo-widget-wrapper %2$s"><i class="widget-icon fs-icon-plus"></i><div id="%1$s" class="woo-sidebar-widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<h5 class="widgettitle">',
				'after_title' => '</h5>',
				),
			'action_hook'	=> 'widget_area_lazy_inset',
			'function'		=> 'frozr_lazy_eater_inset',
			'priority'		=> 13,
			)
		);
	
	return apply_filters('frozr_widgetized_woo_area', $frozr_widgetized_woo_area);
	
}

/**
 * Registers Widget Areas(Sidebars) and pre-sets default widgets
 *
 * @uses frozr_presetwidgets
 * @todo consider deprecating the widgets directory search this seems to have never been used
 */
function frozr_widgets_init() {

	$frozr_widgetized_areas = frozr_widgets_array();
	foreach ( $frozr_widgetized_areas as $key => $value ) {
		register_sidebar( $frozr_widgetized_areas[$key]['args'] );
	}
	if (class_exists( 'WooCommerce' )) {
		$frozr_widgetized_woo_area = frozr_woo_shop_widgets();
		foreach ( $frozr_widgetized_woo_area as $key => $value ) {
			register_sidebar( $frozr_widgetized_woo_area[$key]['args'] );
		}
	}

	// Pre-set Widgets
	$preset_widgets = array (
		'primary-aside'  => array( 'search-2', 'pages-2', 'categories-2', 'archives-2' ),
		'secondary-aside'  => array( 'links-2', 'rss-links-2', 'meta-2' )
		);

    if ( isset( $_GET['activated'] ) ) {
    	frozr_presetwidgets();
  		update_option( 'sidebars_widgets', apply_filters('frozr_preset_widgets',$preset_widgets ));
  	}

}

add_action( 'widgets_init', 'frozr_widgets_init' );

/**
 * Registers action hook.
 *
 * Action Hook: frozr_presetwidgets
 */
function frozr_presetwidgets() {
	do_action( 'frozr_presetwidgets' );
}

if ( function_exists( 'childtheme_override_init_presetwidgets') )  {
    /**
     * @ignore
     */
    function frozr_init_presetwidgets() {
    	childtheme_override_init_presetwidgets();
    }
} else {
	/**
	 * Sets the "pre-set" widgets in options table
	 */
	function frozr_init_presetwidgets() {
		update_option( 'widget_search', array( 2 => array( 'title' => '' ), '_multiwidget' => 1 ) );
		update_option( 'widget_pages', array( 2 => array( 'title' => ''), '_multiwidget' => 1 ) );
		update_option( 'widget_categories', array( 2 => array( 'title' => '', 'count' => 0, 'hierarchical' => 0, 'dropdown' => 0 ), '_multiwidget' => 1 ) );
		update_option( 'widget_archives', array( 2 => array( 'title' => '', 'count' => 0, 'dropdown' => 0 ), '_multiwidget' => 1 ) );
		update_option( 'widget_links', array( 2 => array( 'title' => ''), '_multiwidget' => 1 ) );
		update_option( 'widget_rss-links', array( 2 => array( 'title' => ''), '_multiwidget' => 1 ) );
		update_option( 'widget_meta', array( 2 => array( 'title' => ''), '_multiwidget' => 1 ) );
	}
}

add_action( 'frozr_presetwidgets', 'frozr_init_presetwidgets' );

/**
 * Add wigitized area functions to specific action hooks.
 *
 * @uses frozr_widgets_array to get function names and action hooks.
 */
function frozr_connect_functions() {

	$frozr_widgetized_areas = frozr_widgets_array();

	foreach ( $frozr_widgetized_areas as $key => $value ) {
		if ( !has_action( $frozr_widgetized_areas[$key]['action_hook'], $frozr_widgetized_areas[$key]['function'] ) )
			add_action( $frozr_widgetized_areas[$key]['action_hook'], $frozr_widgetized_areas[$key]['function'], $frozr_widgetized_areas[$key]['priority'] );	
	}

	if (class_exists( 'WooCommerce' )) {
		$frozr_widgetized_woo_area = frozr_woo_shop_widgets();

	foreach ( $frozr_widgetized_woo_area as $key => $value ) {
		if ( !has_action( $frozr_widgetized_woo_area[$key]['action_hook'], $frozr_widgetized_woo_area[$key]['function'] ) )
			add_action( $frozr_widgetized_woo_area[$key]['action_hook'], $frozr_widgetized_woo_area[$key]['function'], $frozr_widgetized_woo_area[$key]['priority'] );	
	}
	}

}

add_action( 'wp_head', 'frozr_connect_functions');


/**
 * Filters the order in which the Widget Areas (Sidebars) will be listed in the WP-Admin/Widgets
 * 
 * It sorts the array generated by frozr_widgetized_areas() by [admin_menu_order]
 * allowing for child themes to filter frozr_widgetized_areas to control
 * the sidebar list order in the WP-Admin/Widgets.
 * 
 * @see frozr_widgetized_areas
 * @param array
 * @return array
 */
function frozr_sort_widgetized_areas($content) {
	asort($content);
	return $content;
}
add_filter('frozr_widgetized_areas', 'frozr_sort_widgetized_areas', 100);


/**
 * Displays the Primary Aside
 * 
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_primary_aside() {	
	global $wp_customize;
	$args =	array(	
			'before_title' 	=> frozr_before_title(),
			'after_title' 	=> frozr_after_title()
			);
			
	if ( is_active_sidebar( 'primary-aside' ) ) { 
		echo frozr_before_widget_area( 'primary-aside' );
		dynamic_sidebar( 'primary-aside' );
		echo frozr_after_widget_area( 'primary-aside' );
	// WordPress 3.4
	} elseif ( method_exists ( $wp_customize,'is_preview' ) && $wp_customize->is_preview()  ){ 
		echo frozr_before_widget_area( 'primary-aside' );
		the_widget('frozr_Widget_Search', null , $args);
		the_widget('WP_Widget_Pages', null , $args);
		the_widget('WP_Widget_Categories', null , $args);
		the_widget('WP_Widget_Archives', null, $args);
		echo frozr_after_widget_area( 'primary-aside' );
	}
}

/**
 * Displays the single sidebar
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_single_sidebar() {
	if ( is_active_sidebar( 'single-sidebar' ) ) {
		echo frozr_before_widget_area( 'single-sidebar' );
		dynamic_sidebar('single-sidebar');
		echo frozr_after_widget_area( 'single-sidebar' );
	}
}

/**
 * Displays the Page sidebar
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_page_sidebar() {
	if ( is_active_sidebar( 'page-sidebar' ) ) {
		echo frozr_before_widget_area( 'page-sidebar' );
		dynamic_sidebar( 'page-sidebar' );
		echo frozr_after_widget_area( 'page-sidebar' );
	}
}

/**
 * Displays the Forum Sidebar
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_forum_sidebar() {
	if ( is_active_sidebar( 'forum-sidebar' ) ) {
		echo frozr_before_widget_area( 'forum-sidebar' );
		dynamic_sidebar( 'forum-sidebar' );
		echo frozr_after_widget_area( 'forum-sidebar' );
	}
}

/**
 * Displays the Forum Header
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_forum_header() {
	if ( is_active_sidebar( 'forum-header' ) ) {
		echo frozr_before_widget_area( 'forum-header' );
		dynamic_sidebar( 'forum-header' );
		echo frozr_after_widget_area( 'forum-header' );
	}
}

/**
 * Displays the Single Insert
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_single_insert() {
	if ( is_active_sidebar( 'single-insert' ) ) {
		echo frozr_before_widget_area( 'single-insert' );
		dynamic_sidebar( 'single-insert' );
		echo frozr_after_widget_area( 'single-insert' );
	}
}

/**
 * Displays the Blog Sidebar
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_blog_sidebar() {
	if ( is_active_sidebar( 'blog-sidebar' ) ) {
		echo frozr_before_widget_area( 'blog-sidebar' );
		dynamic_sidebar( 'blog-sidebar' );
		echo frozr_after_widget_area( 'blog-sidebar' );
	}
}

/**
 * Displays the Page Inset
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_page_inset() {
	if ( is_active_sidebar( 'page-inset' ) ) {
		echo frozr_before_widget_area( 'page-inset' );
		dynamic_sidebar( 'page-inset' );
		echo frozr_after_widget_area( 'page-inset' );
	}
}

/**
 * Displays the Archive sidebar
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_archive_sidebar() {
	if ( is_active_sidebar( 'archive-sidebar' ) ) {
		echo frozr_before_widget_area( 'archive-sidebar' );
		dynamic_sidebar( 'archive-sidebar' );
		echo frozr_after_widget_area( 'archive-sidebar' );
	}
}

/**
 * Displays the WooCommerce sidebar
 *
 * @uses frozr_before_widget_area
 * @uses frozr_after_widget_area
 */
function frozr_woo_shop() {
	if ( is_active_sidebar( 'woo-shop-sidebar' ) ) {
		echo frozr_before_widget_area( 'woo-sidebar' );
		dynamic_sidebar( 'woo-shop-sidebar' );
		echo frozr_after_widget_area( 'woo-sidebar' );
	}
}

/**
 * Displays the WooCommerce Shop sidebar
 *
 */
function frozr_woo_shop_inset() {
	if ( is_active_sidebar( 'woo-shop-inset-sidebar' ) ) {
		dynamic_sidebar( 'woo-shop-inset-sidebar' );
	}
}
/**
 * Displays the Lazy-eater inset
 *
 */
function frozr_lazy_eater_inset() {
	if ( is_active_sidebar( 'woo-lazy-inset-sidebar' ) ) {
		dynamic_sidebar( 'woo-lazy-inset-sidebar' );
	}
}

/**
 * Returns the opening CSS markup before the widget area
 *
 * Filter: frozr_before_widget_area
 * 
 * @param $hook determines the markup specific to the widget area
 * @return string 
 */
function frozr_before_widget_area($hook) {
	$content =  "\n\t\t";
	if ( $hook == 'primary-aside' ) {
		$content .= '<div id="primary" class="out-sidebar main-aside">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="xoxo" class="widgets-cout">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'single-insert' ) {
		$content .= '<div id="single-insert" class="single-insert-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="single-insert" class="widgets-cout">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'single-sidebar' ) {
		$content .= '<div id="single-sidebar" class="out-sidebar single-main-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="xoxo" class="widgets-cout">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'page-sidebar' ) {
		$content .= '<div id="page-sidebar" class="out-sidebar page-main-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="xoxo" class="widgets-cout" >' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'page-inset' ) {
		$content .= '<div id="page-inset" class="page-inset-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="page_inset_ul" class="widgets-cout">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'forum-sidebar' ) {
		$content .= '<div id="forum-sidebar" class="out-sidebar forum-main-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="xoxo" class="widgets-cout">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'forum-header' ) {
		$content .= '<div id="forum-header">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="f-h" class="forum-widgets">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'blog-sidebar' ) {
		$content .= '<div id="blog-sidebar" class="out-sidebar blog-main-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="xoxo" class="widgets-cout">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'archive-sidebar' ) {
		$content .= '<div id="archive-sidebar" class="archive-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="archive-ul" class="widgets-cout">' . "\n\n\t\t\t\t";
	} elseif ( $hook == 'woo-sidebar' ) {
		$content .= '<div id="woo-sidebar" class="out-sidebar woo-sidebar">' . "\n\n";
		$content .= "\t\t\t" . '<ul id="xoxo" class="widgets-cout">' . "\n\n\t\t\t\t";
	} else {
		$content .= '<div id="' . $hook . '" class="aside">' ."\n";
		$content .= "\t\t\t" . '<ul id="xoxo" class="widgets-cout">' . "\n\n\t\t\t\t";
	}
	return apply_filters( 'frozr_before_widget_area', $content, $hook );
}

/**
 * Returns the closing CSS markup before the widget area
 *
 * Filter: frozr_after_widget_area
 * 
 * @param $hook determines the markup specific to the widget area
 * @return string 
 */
function frozr_after_widget_area($hook) {
	$content = "\n\t\t\t\t" . '</ul>' ."\n\n\t\t";
	if ( $hook == 'primary-aside' ) {
		$content .= '</div><!-- #primary .aside -->' ."\n\n";
	} elseif ( $hook == 'single-insert' ) {
		$content .= '</div><!-- #single-insert .single-insert-sidebar -->' ."\n\n";
	} elseif ( $hook == 'single-sidebar' ) {
		$content .= '</div><!-- #single-sidebar .single-main-sidebar -->' ."\n\n";
	} elseif ( $hook == 'page-sidebar' ) {
		$content .= '</div><!-- #page-sidebar .page-main-sidebar -->' ."\n\n";
	} elseif ( $hook == 'page-inset' ) {
		$content .= '</div><!-- #page-inset .page-inset-sidebar -->' ."\n\n";
	} elseif ( $hook == 'forum-sidebar' ) {
		$content .= '</div><!-- #forum-sidebar .forum-main-sidebar -->' ."\n\n";
	} elseif ( $hook == 'forum-header' ) {
		$content .= '</div><!-- #forum-header -->' ."\n\n";
	} elseif ( $hook == 'blog-sidebar' ) {
		$content .= '</div><!-- #blog-sidebar .blog-main-sidebar -->' ."\n\n";
	} elseif ( $hook == 'archive-sidebar' ) {
		$content .= '</div><!-- #archive-sidebar .archive-sidebar -->' ."\n\n";
	} elseif ( $hook == 'woo-sidebar' ) {
		$content .= '</div><!-- #woo-sidebar .woo-sidebar -->' ."\n\n";
	} else {
		$content .= '</div><!-- #' . $hook . ' .aside -->' ."\n\n";
	} 
	return apply_filters( 'frozr_after_widget_area', $content, $hook );
}

?>