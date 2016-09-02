<?php

/**
 * Forums Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<ul id="bbp-forum-<?php bbp_forum_id(); ?>" <?php bbp_forum_class();?> >

	<li class="bbp-forum-info bbp-forum-thumb fs-icon-comments">

		<?php do_action( 'bbp_theme_before_forum_title' ); ?>

		<div class="bbp-forum-title-div"><a class="bbp-forum-title" href="<?php bbp_forum_permalink(); ?>" title="<?php bbp_forum_title(); ?>"><?php bbp_forum_title(); ?></a></div>

		<?php do_action( 'bbp_theme_after_forum_title' ); ?>

		<?php do_action( 'bbp_theme_before_forum_sub_forums' ); ?>

		<?php bbp_list_forums(); ?>

		<?php do_action( 'bbp_theme_after_forum_sub_forums' ); ?>

		<?php do_action( 'bbp_theme_before_forum_description' ); ?>

		<div class="bbp-forum-content"><?php the_content(); ?></div>

		<?php do_action( 'bbp_theme_after_forum_description' ); ?>

		<?php bbp_forum_row_actions(); ?>
	
	<?php if (!frozr_mobile()) { echo'</li>'; } 
	
	$bbp_show_topic_count = get_theme_mod('bbp_show_topic_count', true);
	$bbp_show_count = get_theme_mod('bbp_show_count', true);
	$bbp_show_fresh = get_theme_mod('bbp_show_fresh', true); ?>

	<?php if ($bbp_show_topic_count == true) { ?>
	<<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?> class="bbp-forum-topic-count"><?php if (frozr_mobile()) { _e( 'Topics: ', 'frozr' ); } bbp_forum_topic_count(); ?></<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?>>
	<?php } if ($bbp_show_count == true) { ?>
	<<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?> class="bbp-forum-reply-count"><?php if (frozr_mobile()) { bbp_show_lead_topic() ? _e( 'Replies: ', 'frozr' ) : _e( 'Posts: ', 'frozr' ); } bbp_show_lead_topic() ? bbp_forum_reply_count() : bbp_forum_post_count(); ?></<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?>>
	<?php } if ($bbp_show_fresh == true) { ?>
	<<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?> class="bbp-forum-freshness">
		
		<?php if (frozr_mobile()) { _e( 'Freshness: ', 'frozr' ); } ?>
		
		<?php do_action( 'bbp_theme_before_forum_freshness_link' ); ?>

		<?php bbp_forum_freshness_link(); ?>

		<?php do_action( 'bbp_theme_after_forum_freshness_link' ); ?>

		<p class="bbp-topic-meta">

			<?php do_action( 'bbp_theme_before_topic_author' ); ?>

			<span class="bbp-topic-freshness-author"><?php bbp_author_link( array( 'post_id' => bbp_get_forum_last_active_id(), 'size' => 14 ) ); ?></span>

			<?php do_action( 'bbp_theme_after_topic_author' ); ?>

		</p>
	</<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?>>
	<?php } ?>

	<?php if (frozr_mobile()) { echo'</li>'; } ?>
</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->
