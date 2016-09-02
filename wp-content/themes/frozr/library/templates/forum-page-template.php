<?php
/**
 * Forums page template Extensions
 * 

 * @package FrozrCoreLibrary
 * @subpackage FrozrPageTemplates
 */
 
/**
 * Register action hook: frozr_forum_page_announcement
 * 
 * Located in archive-forum.php.
 */
function frozr_forum_page_announcement() {
    do_action('frozr_forum_announcement');
} // end frozr_forum_announcement

/**
 * Register action hook: frozr_forum_page_statistics
 * 
 * Located in archive-forum.php.
 */
function frozr_forum_page_statisticst() {
    do_action('frozr_forum_statistics');
} // end frozr_forum_statistics

/**
 * Register action hook: frozr_forum_page_welcome_text
 * 
 * Located in archive-forum.php.
 */
function frozr_forum_page_welcome_text() {
    do_action('frozr_forum_welcome_text');
} // end frozr_forum_welcome_text

/**
 * Register action hook: frozr_forum_list
 * 
 * Located in archive-forum.php.
 */
function frozr_forum_page_forum_list() {
    do_action('frozr_forum_list');
} // end frozr_forum_list

/**
 * Register action hook: frozr_forum_topics_list
 * 
 * Located in archive-forum.php.
 */
function frozr_forum_page_forum_topics_list() {
    do_action('frozr_forum_topics_list');
} // end frozr_forum_topics_list

/**
 * Create the forum page announcement
 * 
 */
if (function_exists('childtheme_override_forum_announcement'))  {
	/**
	 * @ignore
	 */
	function forum_announcement() {
		childtheme_override_forum_announcement();
	}
} else {
	/**
	 * Create the forum page announcement
	 * 
	 * Override: childtheme_override_forum_announcement
	 */
	function forum_announcement() {
	$f_announcement = get_theme_mod('bbp_notice_text_1');
	$f_announcement_1 = get_theme_mod('bbp_notice_text_2');
?>
	
	<div class="forum-announcements-box">

	<?php if (  !empty ($f_announcement) ) : ?>		
			<div class="<?php echo get_theme_mod('bbp_notice_icon_1');?> forum_announcement_one">
				<?php echo apply_filters('archive_meta', $f_announcement);?>
			</div>
	<?php endif; ?>
	<?php if (  !empty ($f_announcement_1) ) : ?>				
			<div class="<?php echo get_theme_mod('bbp_notice_icon_2');?> forum_announcement_two">
				<?php echo apply_filters('archive_meta', $f_announcement_1);?>
			</div>
	<?php endif; ?>
	
	</div><!-- .forum-announcement-box -->
	<?php
	}
}
add_action('frozr_forum_announcement', 'forum_announcement');

/**
 * Create the forum page statistics
 * 
 */
if (function_exists('childtheme_override_forum_statistics'))  {
	/**
	 * @ignore
	 */
	function forum_statistics() {
		childtheme_override_forum_statistics();
	}
} else {
	/**
	 * Create the forum page statistics
	 * 
	 * Override: childtheme_override_forum_statistics
	 */
	function forum_statistics() {
	
	extract( bbp_get_statistics(), EXTR_SKIP );?>
	<div class="forums-left-column">
	<div id="bbp-statistics" class="bbp-statistics">
		<div class="entry-content">

			<?php echo '<span class="statics-title"><i class="fs-icon-bar-chart"></i><span class="s-t-t">' . __( 'Forums Statistics', 'frozr' ) . '</span></span>'; ?>

				<div class="statistics_main">

					<?php do_action( 'bbp_before_statistics' ); ?>

						<div class="statistics_item">
							<div class="dt-1"><?php _e( 'Users', 'frozr' ); ?></div>
							<div class="statistics_no">
								<strong><?php echo $user_count; ?></strong>
							</div>
						</div>
						<div class="statistics_item">								
							<div class="dt-2"><?php _e( 'Forums', 'frozr' ); ?></div>
							<div class="statistics_no">
								<strong><?php echo $forum_count; ?></strong>
							</div>
						</div>
						<div class="statistics_item">								
							<div class="dt-3"><?php _e( 'Topics', 'frozr' ); ?></div>
							<div class="statistics_no">
								<strong><?php echo $topic_count; ?></strong>
							</div>
						</div>
						<div class="statistics_item">								
							<div class="dt-4"><?php _e( 'Replies', 'frozr' ); ?></div>
							<div class="statistics_no">
								<strong><?php echo $reply_count; ?></strong>
							</div>
						</div>
						<div class="statistics_item">								
							<div class="dt-5"><?php _e( 'Topic Tags', 'frozr' ); ?></div>
							<div class="statistics_no">
								<strong><?php echo $topic_tag_count; ?></strong>
							</div>
						</div>
						<?php if ( !empty( $empty_topic_tag_count ) ) : ?>
						<div class="statistics_item">								
							<div class="dt-6"><?php _e( 'Empty Tags', 'frozr' ); ?></div>
							<div class="statistics_no">
								<strong><?php echo $empty_topic_tag_count; ?></strong>
							</div>
						</div>
						<?php endif; ?>
						<?php if ( !empty( $reply_count_hidden ) ) : ?>
						<div class="statistics_item">								
							<div class="dt-8"><?php _e( 'Hidden Replies', 'frozr' ); ?></div>
							<div class="statistics_no">
								<strong>
									<abbr title="<?php echo esc_attr( $hidden_reply_title ); ?>"><?php echo $reply_count_hidden; ?></abbr>
								</strong>
							</div>
						</div>
						<?php endif; ?>
				</div>

		</div>
	</div><!-- #bbp-statistics -->
	</div><!-- .forums-left-column -->
	<?php
	}
}
add_action('frozr_forum_statistics', 'forum_statistics');

/**
 * Create the forum page welcome msg
 * 
 */
if (function_exists('childtheme_override_forum_welcome_text'))  {
	/**
	 * @ignore
	 */
	function forum_welcome_text() {
		childtheme_override_forum_welcome_text();
	}
} else {
	/**
	 * Create the forum page welcome msg
	 * 
	 * Override: childtheme_override_forum_welcome_text
	 */
	function forum_welcome_text() {
	$welcome_text = get_theme_mod('bbp_welcome');
	
	if (  !empty ($welcome_text) ) :									
		echo "<div class=\"welcome_text\"><i class=\"fs-icon-home\"></i>";
		echo apply_filters('archive_meta', $welcome_text);
		echo "</div><!-- .welcome_text -->";
	endif; 
	}
}
add_action('frozr_forum_welcome_text', 'forum_welcome_text');

/**
 * Return the forum menu
 * 
 * Filter: frozr_forum_menu
 *
 * @return array
 */
function frozr_forum_menus() {
	$args = array (
		'theme_location'	=> apply_filters('frozr_forum_menu_id', 'forum-menu'),
		'menu'				=> '',
		'container'			=> 'div',
		'container_class'	=> 'forum_menu_cont',
		'menu_class'		=> 'fr-menu',
		'fallback_cb'		=> false,
		'items_wrap'		=> '<ul class="fr-menu">%3$s</ul>',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'depth'				=> 0,
		'walker'			=> '',
		'echo'				=> true
	);
	$forum_menu = wp_nav_menu( $args ); 
	
	return apply_filters('frozr_forum_menus', $forum_menu );
}

/**
 * Create the forum page forums list
 * 
 */
if (function_exists('childtheme_override_forum_list'))  {
	/**
	 * @ignore
	 */
	function forum_list() {
		childtheme_override_forum_list();
	}
} else {
	/**
	 * Create the forum page forums list
	 * 
	 * Override: childtheme_override_forum_list
	 */
	function forum_list() {
	$showforums = get_theme_mod('bbp_show_forums_list', true);

	if ( $showforums == true) :
		echo "<div class=\"forum-list-cout\">";
		echo "<div id=\"bbpress-forums\">";

		do_action( 'bbp_template_before_forums_index' );

			if ( bbp_has_forums() ) :
				bbp_get_template_part( 'bbpress/loop', 'forums' );
			else :
				bbp_get_template_part( 'bbpress/feedback', 'no-forums' );
			endif;

		do_action( 'bbp_template_after_forums_index' );

		echo "</div><!-- #bbpress-forums -->";
		echo "</div><!-- .forum-list-cout -->";
	endif;
	}
}
add_action('frozr_forum_list', 'forum_list');

/**
 * Create the forum page topics list
 * 
 */
if (function_exists('childtheme_override_forum_topics_list'))  {
	/**
	 * @ignore
	 */
	function forum_topics_list() {
		childtheme_override_forum_topics_list();
	}
} else {
	/**
	 * Create the forum page topics list
	 * 
	 * Override: childtheme_override_forum_topics_list
	 */
	function forum_topics_list() {
	$showtopics = get_theme_mod('bbp_show_topics_list', true);
	// Topics Query defaults
	$topics_query = array( 'show_stickies'  => false);

	if ( $showtopics == true) :
	
		echo "<div class=\"forum-list-cout\">";
		echo "<div id=\"bbpress-forums\">";

		do_action( 'bbp_template_before_topics_index' );
		
			if ( bbp_has_topics($topics_query) ) :
		
				bbp_get_template_part( 'bbpress/loop', 'topics' );

			else :
			
				bbp_get_template_part( 'bbpress/feedback',   'no-topics' );
				
			endif;
		
		do_action( 'bbp_template_after_topics_index' );
		
		echo "</div><!-- #bbpress-forums -->";
		echo "</div><!-- .forum-list-cout -->";
	endif;
	}
}
add_action('frozr_forum_topics_list', 'forum_topics_list');

/**
 * Show active users
 * 
 */
if (function_exists('childtheme_override_forum_active_users'))  {
	/**
	 * @ignore
	 */
	function forum_active_users() {
		childtheme_override_forum_active_users();
	}
} else {
	/**
	 * Create the forum active users
	 * 
	 * Override: childtheme_override_forum_active_users
	 */
	function forum_active_users() { ?>
		<div class="whos-online">
			<span class="online-users"><span class="online-users-icon"><i class="fs-icon-users"></i></span><span class="o-u-t"><?php _e('Active Members', 'frozr' ); ?></span></span>
				<ul class="wpwhosonline-list">
					<?php wpwhosonline_list_authors(); ?>
				</ul>
		</div><!--.whos-online-->
	<?php
	}
}
add_action('frozr_forum_active_users', 'forum_active_users');
