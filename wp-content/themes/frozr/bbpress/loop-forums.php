<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_forums_loop' ); ?>
<ul id="forums-list-<?php bbp_forum_id(); ?>" class="bbp-forums">

	<li class="bbp-header">

		<ul class="forum-titles">
			<li class="bbp-forum-info"><?php 
			if (bbp_get_forum_id() == 0)
			 _e( 'Forums', 'frozr' );
			else
			bbp_forum_title(bbp_get_forum_id()) ?></li>
			<?php 
			$bbp_show_topic_count = get_theme_mod('bbp_show_topic_count', true);
			$bbp_show_count = get_theme_mod('bbp_show_count', true);
			$bbp_show_fresh = get_theme_mod('bbp_show_fresh', true);
			if (!frozr_mobile()) { ?>
			<?php if ($bbp_show_topic_count == true) { ?>
			<li class="bbp-forum-topic-count"><?php _e( 'Topics', 'frozr' ); ?></li>
			<?php } if ($bbp_show_count == true) { ?>
			<li class="bbp-forum-reply-count"><?php bbp_show_lead_topic() ? _e( 'Replies', 'frozr' ) : _e( 'Posts', 'frozr' ); ?></li>
			<?php } if ($bbp_show_fresh ==true) { ?>
			<li class="bbp-forum-freshness"><?php _e( 'Freshness', 'frozr' ); ?></li>
			<?php } } ?>
		</ul>
	</li><!-- .bbp-header -->
<?php $formdec = get_the_content(); if ( !empty($formdec) && bbp_is_forum_category() ) echo apply_filters( 'meta_content', '<div class="forum-description"><span>' . $formdec . '</span></div>' ); ?>
	<li class="bbp-body">

		<?php while ( bbp_forums() ) : bbp_the_forum(); ?>

			<?php bbp_get_template_part( 'loop', 'single-forum' ); ?>

		<?php endwhile; ?>

	</li><!-- .bbp-body -->
</ul><!-- .forums-directory -->
<?php do_action( 'bbp_template_after_forums_loop' ); ?>
