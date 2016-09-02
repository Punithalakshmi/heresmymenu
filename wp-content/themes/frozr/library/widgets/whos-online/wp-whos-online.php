<?php
/*
Plugin Name: Who's Online
Plugin URI: http://wordpress.org/extend/plugins/wp-whos-online/
Description: Sidebar widget to log when a user was last online
Version: 0.6
Author: Adam Backstrom
Author URI: http://sixohthree.com/
License: GPL2
*/


function wpwhosonline_enqueue() {
	add_action( 'wp_head', 'wpwhosonline_pageoptions_js', 20 );
	if (function_exists('bbpress') && is_bbpress() || is_page_template('archive-forum.php')) {
	wp_enqueue_script( 'wpwhosonline',  get_template_directory_uri().'/library/widgets/whos-online/wp-whos-online.js', array('jquery'), '0.6' );
	wp_enqueue_style(  'wpwhosonline_css', get_template_directory_uri().'/library/widgets/whos-online/wp-whos-online.css', null );
	}
	}
add_action('wp_enqueue_scripts', 'wpwhosonline_enqueue');

// our own ajax call
add_action( 'wp_ajax_wpwhosonline_ajax_update', 'wpwhosonline_ajax_update' );

// hook into p2 ajax calls, if they're there
add_action( 'wp_ajax_prologue_latest_posts', 'wpwhosonline_update' );
add_action( 'wp_ajax_prologue_latest_comments', 'wpwhosonline_update' );

/**
 * Update a user's "last online" timestamp.
 */
function wpwhosonline_update() {
	if( !is_user_logged_in() )
		return null;

	global $user_ID;

	update_user_meta( $user_ID, 'wpwhosonline_timestamp', time() );
}//end wpwhosonline_update
add_action('template_redirect', 'wpwhosonline_update');

/**
 * Echo json listing all authors who have had their "last online" timestamp updated
 * since the client's last update.
 */
function wpwhosonline_ajax_update() {
	global $wpdb;

	// update timestamp of user who is checking
	wpwhosonline_update();

	$load_time = strtotime($_GET['load_time'] . ' GMT');
	$users = wpwhosonline_recents( "meta_value=$load_time" );

	if( count($users) == 0 ) {
		die( '0' );
	}

	$now = time();

	$latest = 0;
	$return = array();
	foreach($users as $user) {
		$row = array();

		$last_online_ts = get_user_meta( $user->ID, 'wpwhosonline_timestamp', true );
		if( $last_online_ts > $latest )
			$latest = $last_online_ts;

		$row['user_id'] = $user->ID;
		$row['html'] = wpwhosonline_user( $last_online_ts, $user );
		$row['timestamp'] = $last_online_ts;

		$return[] = $row;
	}

	echo json_encode( array('users' => $return, 'latestupdate' => gmdate('Y-m-d H:i:s', $latest)) );
	exit;
}

function wpwhosonline_pageoptions_js() {
	global $page_options;
?><script type='text/javascript'>
// <![CDATA[
var wpwhosonline = {
	'ajaxUrl': "<?php echo esc_js( admin_url('admin-ajax.php') ); ?>",
	'wpwhosonlineLoadTime': "<?php echo gmdate( 'Y-m-d H:i:s' ); ?>",
	'getwpwhosonlineUpdate': '0',
	'isFirstFrontPage': "<?php echo is_home(); ?>"
};
// ]]>
</script><?php
}

function wpwhosonline_usersort( $a, $b ) {
	$ts_a = get_user_meta( $a->ID, 'wpwhosonline_timestamp', true );
	$ts_b = get_user_meta( $b->ID, 'wpwhosonline_timestamp', true );

	if( $ts_a == $ts_b ) {
		return 0;
	}

	return ($ts_a < $ts_b) ? 1 : -1;
}

function wpwhosonline_recents( $args = array() ) {
	$args = wp_parse_args( $args, array(
		'meta_key' => 'wpwhosonline_timestamp',
		'meta_value' => time() - 86400, // 1 week
		'meta_compare' => '>',
		'count_total' => false,
	));

	$users = get_users( $args );
	foreach( $users as $user ) {
		// grab all these values, or you'll anger usort by modifying
		// an array mid-execution.
		get_user_meta( $user->ID, 'wpwhosonline_timestamp', true );
	}
	usort( $users, 'wpwhosonline_usersort' );

	return $users;
}

function wpwhosonline_list_authors() {
	$users = wpwhosonline_recents();

	$html = '';

	foreach( $users as $user ) {
		$last_online_ts = get_user_meta( $user->ID, 'wpwhosonline_timestamp', true );
		$item = wpwhosonline_user( $last_online_ts, $user );
		$class = wpwhosonline_class( $last_online_ts );

		$item = '<li id="wpwhosonline-' . $user->ID . '" class="wpwhosonline-row ' . $class . '" data-wpwhosonline="' .
			esc_attr( $last_online_ts ) . '">' . $item . '</li>';
		$html .= $item;
	}

	echo $html;
}

/**
 * Return HTML for a single blog user for the widget.
 *
 * @uses apply_filters() Calls 'wpwhosonline_author_link' on the author link element
 * @return string HTML for the user row
 */
function wpwhosonline_user( $last_online_ts, $user ) {
	$avatar = get_avatar( $user->user_email, 40 );
	$name = $user->display_name;

	// this should always exist; we queried using this meta
	if ( ! $last_online_ts ) {
		continue;
	}

	$now = time();
	if ( $now - $last_online_ts < 60 ) {
		$last_online = ' is Online!';
		$wo_class = 'green';
	} else {
		$last_online = ' was online ' . human_time_diff( $now, $last_online_ts ) . ' ago';
		$wo_class = 'normal';
	}
	$link2 = '<a class="wo_user_link_'.$wo_class.'" href="' . get_author_posts_url( $user->ID, $user->user_nicename ) . '" title="' . esc_attr( $user->display_name ) . esc_attr( $last_online ) . '">' . $name . '</a>';
	$link2 = apply_filters( 'wpwhosonline_author_link', $link2, $user );
	
	$link = '<a class="wo_user_link_avatar" href="' . get_author_posts_url( $user->ID, $user->user_nicename ) . '" title="' . esc_attr( $user->display_name ) . esc_attr( $last_online ) . '"></a>';
	$link = apply_filters( 'wpwhosonline_author_link', $link, $user );

	$user_ava = $avatar;
	$doc = new DOMDocument();
	$doc->loadHTML($user_ava);
	$xpath = new DOMXPath($doc);
	$user_src = $xpath->evaluate("string(//img/@src)");	

	$wo_out_put = '<div class="wo_user_'.$wo_class.'" style="background: url( '.$user_src.') no-repeat center center;">'.$link.'</div>';
	
	$show_avatar = get_theme_mod('bbp_active_users_layout',true);
	if (  $show_avatar == 1) { 
	$return_u = $wo_out_put ;
	}
	else {
	$return_u = $link2 ;
	}
	return $return_u;
	}

function wpwhosonline_class( $lastonline ) {
	$diff = time() - $lastonline;
	if( $diff > 7200 ) {
		return 'wpwhosonline-ancient';
	} elseif( $diff > 600 ) {
		return 'wpwhosonline-recent';
	} else {
		return 'wpwhosonline-active';
	}
}