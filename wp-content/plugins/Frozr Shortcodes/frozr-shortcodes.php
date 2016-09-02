<?php
/*
Plugin name: Frozr Shortcode
Plugin URI: http://alamento.dokkanplus.com/?p=1891
Description: Frozr WP theme shortcode extension. You must activate Frozr WP Theme for this extension to work. visit the Plugin URL for more Information on usage.
Version: 0.1.0
Author: Mahmud Hamid
Author URI: http://alamento.dokkanplus.com/
License: GPL2

Copyright 2015 Mahmud Hamid (email : www770@gmail.com)
This is a free Frozr WP Theme extension.
@package FrozrCoreLibrary
@subpackage Shortcodes
*/
/** TODO: this should be able to work separately from Frozr.
 * Register all shortcodes.
 */
function shortcode_init() {
if (function_exists('frozr_theme_setup')) { 
	add_shortcode( 'button', 'button_shortcode' );
	add_shortcode( 'tabgroup', 'jquery_tab_group' );
	add_shortcode( 'tab', 'jquery_tab' );
	add_shortcode( 'style-box', 'style_box_shortcode' );
    add_shortcode( 'hidden-content', 'hidden_content_shortcode' );
    add_shortcode( 'toggle', 'toggle_box_shortcode' );
	add_shortcode( 'frozr_gallery' , 'frozr_gallary' );
}
}
add_action('init','shortcode_init');
/**
 * Display frozr gallery.
 */
function frozr_gallary($attr) {
    global $post;

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) )
			$attr['orderby'] = 'post__in';
		$attr['include'] = $attr['ids'];
	}

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}
	
	$selector = "gallery-{$instance}";
	
	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'title'      => $selector,
		'include'    => '',
		'size'       => 'gallery_size',
		'exclude'    => ''
	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( !empty($include) ) {
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
		return '';

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	foreach ( $attachments as $id => $attachment ) {
		$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_image($id, $size, false, false) : wp_get_attachment_image($id, $size, true, false);
		$img_uri = wp_get_attachment_url($id);
		
		$output .= "<li data-pile='$title' class='stapel_gallery galleryid-$id'><div class='spacer'></div>";
		if ( trim($attachment->post_excerpt) ) {
			$output .= "
				<span class='tp-info'><span>
				".wptexturize($attachment->post_excerpt)."
				</span></span>";
		}
		$output .= "<a class='pp_photo' rel='prettyPhoto[$selector]' href='$img_uri'>$link</a>";
		$output .= "</li>";
	}

	return $output;
}
/**
 * The button shortcode.
 */
function button_shortcode( $atts, $content = null ) {

	$atts = shortcode_atts(
	    array(
		'bgcolor' => '',
		'color' => '',
		'url' => ''
	    ), $atts);
	return '<div class="button short_button" style="background-color:'.$atts['bgcolor'] .';"><a style="color:'.$atts['color'].';" href="'.$atts['url'].'">'. $content .'</a></div>';
}
/**
 * Display tabs using jQuery.
 */
function jquery_tab_group( $atts, $content ){
	$GLOBALS['tab_count'] = 0;

	do_shortcode( $content );

	if( is_array( $GLOBALS['tabs'] ) ){
	$int = 1;
	foreach( $GLOBALS['tabs'] as $tab ){
		$tabs[] = '<li id="fro_tab_'.$int.'" ><a href="#tabs-'.$int.'" data-ajax="false">'.$tab['title'].'</a></li>';
		$panes[] = '<div id="tabs-'.$int.'">'.$tab['content'].'</div>';
		$int++;
	}
	$return = "\n".'<div data-role="tabs" id="tabs"><div data-role="navbar"><ul class="tabs frozr_cont_tabs">'.implode( "\n", $tabs ).'</ul></div>'."\n".' '.implode( "\n", $panes ).'</div>'."\n";
	}
	return $return;
}
/**
 * Display Tab.
 */
function jquery_tab( $atts, $content ){
	extract(shortcode_atts(array(
	'title' => 'Tab %d'), $atts));

	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' => $content );

	$GLOBALS['tab_count']++;
}
/**
 * Display info box.
 */
function style_box_shortcode( $atts, $content = null ) {
    global $post;

	static $shot_no = 0;
	$shot_no++;

	$atts = shortcode_atts(
	    array(
		'icon' => '',
		'icon_color' => '',
		'text_color' => '',
		'box_color' => '',
	    ), $atts);
	return '<style>.style_box_' . $post->ID . '_' . $shot_no . ' {background-color:' . $atts['box_color'] . ';} .style_box_' . $post->ID . '_' . $shot_no . ':before {color:' . $atts['icon_color'] . ';} .style_box_' . $post->ID . '_' . $shot_no . ' > *,.style_box_' . $post->ID . '_' . $shot_no . '  a,.style_box_' . $post->ID . '_' . $shot_no . '  a:hover,.style_box_' . $post->ID . '_' . $shot_no . '  a:focus {color:' . $atts['text_color'] . ';padding:2px 0;}  }</style><div class="style_box style_box_' . $post->ID . '_' . $shot_no . ' fs-icon-'. $atts['icon'] .'"><p>'. $content .'</p></div>';
}
/**
 * Display a protected content box.
 */
function hidden_content_shortcode( $atts, $content = null ) {
		if ( is_user_logged_in() )
	    $return = $content;
	else
	    $return = '<div class="hidden-content fs-icon-lock"><p><a class="login-link" href="' . esc_url( wp_login_url( site_url( $SERVER['REQUEST_URI'] ))) . '" title="' . esc_attr__( 'Log in', 'frozr' ) . '">' . __( 'Log in', 'frozr' ) . '</a> to view this content!</p></div>';
	return $return;
}
/**
 * Display a toggle box.
 */
function toggle_box_shortcode( $atts, $content = null ) {

	$atts = shortcode_atts(
	    array(
		'title' => 'Click me!',
	    ), $atts);
	    $return = '<div data-role="collapsible" class="toggle-title"><h4>'.$atts['title']. '</h4>
				  <p>'. $content .'</p></div>';
	return $return;
}