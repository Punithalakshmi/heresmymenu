<?php

/**
 * Sidebars Extensions
 *
 * @package FrozrCoreLibrary
 * @subpackage SidebarExtensions
 */

/**
 * Get the standard sidebar
 *
 * This includes the primary and secondary widget areas. 
 * The sidebar can be switched on or off using frozr_sidebar. <br>
 * Default: ON <br>
 * 
 * Filter: frozr_sidebar
 */
function frozr_sidebar() {
	$show = TRUE;
	$show = apply_filters('frozr_sidebar', $show);
	
	if ($show)
    	get_sidebar();
	
	return;
} // end frozr_sidebar

/* 
 * Main Aside Hooks
 */
/**
 * Register action hook: frozr_abovemainasides 
 *
 * Located in sidebar.php
 * Just before the main asides (commonly used as sidebars)
 */
function frozr_abovemainasides() {
    do_action('frozr_abovemainasides');
}

/**
 * Register action hook: widget_area_primary_aside 
 *
 * Located in sidebar.php
 * Regular hook for primary widget area
 */
function frozr_widget_area_primary_aside() {
    do_action('widget_area_primary_aside');
}

/**
 * Register action hook: frozr_belowmainasides 
 *
 * Located in sidebar.php
 * Just after the main asides (commonly used as sidebars)
 */
function frozr_belowmainasides() {
    do_action('frozr_belowmainasides');
}

/*
 * Index Aside Hooks
 */
/*	
 * Register action hook: frozr_abovesinglesidebar 
 *
 * Located in sidebar-single.php
 * Just above the 'single-sidebar' widget area
 */
function frozr_abovesinglesidebar() {
	do_action('frozr_abovesinglesidebar');
}

/**
 * Register action hook: widget_area_single_sidebar
 *
 * Located in sidebar-single.php
 * Regular hook for the 'single-sidebar' widget area
 */
function frozr_widget_area_single_sidebar() {
    do_action('widget_area_single_sidebar');
}

/**
 * Register action hook: frozr_belowsinglesidebar
 *
 * Located in sidebar-single.php
 * Just below the 'single-sidebar' widget area
 */
function frozr_belowsinglesidebar() {
    do_action('frozr_belowsinglesidebar');
}

/**
 * Register action hook: frozr_abovepagesidebar
 *
 * Located in sidebar-page.php
 * Just before the 'page-sidebar' widget area
 */
function frozr_abovepagesidebar() {
    do_action('frozr_abovepagesidebar');
}

/**
 * Register action hook: widget_area_page_sidebar
 * 
 * Located in sidebar-page.php
 * Regular hook for the 'page-sidebar' widget area
 */
function frozr_widget_area_page_sidebar() {
	do_action('widget_area_page_sidebar');
}

/**
 * Register action hook: frozr_belowpagesidebar 
 *
 * Located in sidebar-page.php
 * Just after the 'page-sidebar' widget area
 */
function frozr_belowpagesidebar() {
    do_action('frozr_belowpagesidebar');
}	

/**
 * Register action hook: frozr_aboveforumsidebar 
 *
 * Located in sidebar-forum.php
 * Just above the 'forum-sidebar' widget area
 */
function frozr_aboveforumsidebar() {
    do_action('frozr_aboveforumsidebar');
}

/**
 * Register action hook: widget_area_forum_sidebar 
 *
 * Located in sidebar-forum.php
 * Regular hook for the 'sidebar-forum' widget area
 */	
function frozr_widget_area_forum_sidebar() {
    do_action('widget_area_forum_sidebar');
}

/**
 * Register action hook: widget_area_forum_header
 *
 * Located in archive-forum.php
 * Regular hook for the 'archive-forum' widget area
 */	
function frozr_widget_area_forum_header() {
    do_action('widget_area_forum_header');
}

/**
 * Register action hook: frozr_belowforumsidebar 
 *
 * Located in sidebar-forum.php
 * Just below the 'forum-sidebar' widget area
 */	function frozr_belowforumsidebar() {
    do_action('frozr_belowforumsidebar');
}

/**
 * Register action hook: frozr_abovearchivesidebar 
 *
 * Located in sidebar-archive.php
 * Just above the 'archive-sidebar' widget area
 */
function frozr_abovearchivesidebar() {
    do_action('frozr_abovearchivesidebar');
}

/**
 * Register action hook: widget_area_archive 
 *
 * Located in sidebar-archive.php
 * Regular hook for the 'sidebar-archive' widget area
 */	
function frozr_widget_area_archive_sidebar() {
    do_action('widget_area_archive');
}

/**
 * Register action hook: frozr_belowarchivesidebar 
 *
 * Located in sidebar-archive.php
 * Just below the 'archive-sidebar' widget area
 */	function frozr_belowarchivesidebar() {
    do_action('frozr_belowarchivesidebar');
}

/*
 * WooCommerce Shop
 */
/**
 * Register action hook: frozr_above_shop_sidebar 
 *
 * Located in sidebar-shop.php
 */
function frozr_above_shop_sidebar() {
    do_action('frozr_above_shop_sidebar');
}
/**
 * Register action hook: widget_area_woo_shop
 *
 * Located in sidebar-shop.php
 * Regular hook for the 'woo-shop-sidebar' widget area
 */
function frozr_widget_area_shop() {
    do_action('widget_area_woo_shop');
}
/**
 * Register action hook: frozr_below_shop_sidebar 
 *
 * Located in sidebar-shop.php
 */
function frozr_below_shop_sidebar() {
    do_action('frozr_below_shop_sidebar');
}
/**
 * Register action hook: frozr_above_shop_inset_sidebar 
 *
 * Located in sidebar-shop-inset.php
 */
function frozr_above_shop_inset_sidebar() {
    do_action('frozr_above_shop_inset_sidebar');
}
/**
 * Register action hook: widget_area_woo_shop_inset
 *
 * Located in sidebar-shop-inset.php
 * Regular hook for the 'woo-shop-inset-sidebar' widget area
 */
function frozr_widget_area_shop_inset() {
    do_action('widget_area_woo_shop_inset');
}
/**
 * Register action hook: frozr_below_shop_inset_sidebar 
 *
 * Located in sidebar-shop-inset.php
 */
function frozr_below_shop_inset_sidebar() {
    do_action('frozr_below_shop_inset_sidebar');
}
/**
 * Register action hook: widget_area_lazy_inset
 *
 * Located in sidebar-lazy-inset.php
 * Regular hook for the 'woo-shop-inset-sidebar' widget area
 */
function frozr_widget_area_lazy_inset() {
    do_action('widget_area_lazy_inset');
}
/*
 * Single Post Asides
 */
/**
 * Register action hook: frozr_abovesingletop 
 *
 * Located in sidebar-single-top.php
 * Just above the 'single-top' widget area
 */
function frozr_abovesingletop() {
    do_action('frozr_abovesingletop');
}
/**
 * Register action hook: frozr_belowsingletop 
 *
 * Located in sidebar-single-top.php
 * Just below the 'single-top' widget area
 */
function frozr_belowsingletop() {
    do_action('frozr_belowsingletop');
}
/**
 * Register action hook: frozr_abovesingleinsert 
 *
 * Located in sidebar-single-insert.php
 * Just above the 'single-insert' widget area
 */
function frozr_abovesingleinsert() {
    do_action('frozr_abovesingleinsert');
}
/**
 * Register action hook: widget_area_single_insert 
 *
 * Located in sidebar-single-insert.php
 * Regular hook for the 'single-insert' widget area
 */
function frozr_widget_area_single_insert() {
    do_action('widget_area_single_insert');
}
/**
 * Register action hook: frozr_belowsingleinsert 
 *
 * Located in sidebar-single-insert.php
 * Just below the 'single-insert' widget area
 */
function frozr_belowsingleinsert() {
    do_action('frozr_belowsingleinsert');
}
/**
 * Register action hook: frozr_aboveblogsidebar
 *
 * Located in sidebar-blog.php
 * Just above the 'blog-sidebar' widget area
 */
function frozr_aboveblogsidebar() {
    do_action('frozr_aboveblogsidebar');
}
/**
 * Register action hook: widget_area_blog_sidebar 
 *
 * Located in sidebar-blog.php
 * Regular hook for the 'blog-sidebar' widget area
 */
function frozr_widget_area_blog_sidebar() {
    do_action('widget_area_blog_sidebar');
}
/**
 * Register action hook: frozr_belowblogsidebar
 *
 * Located in sidebar-blog.php
 * Just below the 'blog-sidebar' widget area
 */
function frozr_belowblogsidebar() {
    do_action('frozr_belowblogsidebar');
}
/*
 * Page Aside Hooks
 */
/**
 * Register action hook: frozr_abovepageinset 
 *
 * Located in sidebar-page-inset.php
 * Just above the 'page-inset' widget area
 */
function frozr_abovepageinset() {
    do_action('frozr_abovepageinset');
}
/**
 * Register action hook: widget_area_page_inset 
 *
 * Located in sidebar-page-inset.php
 * Regular hook for the 'page-inset' widget area
 */
function frozr_widget_area_page_inset() {
    do_action('widget_area_page_inset');
}
/**
 * Register action hook: frozr_belowpageinset 
 *
 * Located in sidebar-page-inset.php
 * Just below the 'page-inset' widget area
 */
function frozr_belowpageinset() {
    do_action('frozr_belowpageinset');
} // end frozr_belowpageinset
