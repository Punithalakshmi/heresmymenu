<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<ul id="topic-<?php bbp_topic_id(); ?>" <?php bbp_topic_class();?> >

	<li class="bbp-topic-title bbp-topic-thumb">
			
		<span class="bbp-topic-author-ava"><?php bbp_topic_author_link( array( 'size' => '40', 'type' => 'avatar' ) ); ?></span>
		
		<?php do_action( 'bbp_theme_before_topic_title' ); ?>

		<div class="bbp-topic-permalink-div"><a class="bbp-topic-permalink" href="<?php bbp_topic_permalink(); ?>" title="<?php bbp_topic_title(); ?>"><?php bbp_topic_title(); ?></a></div>

		<?php do_action( 'bbp_theme_after_topic_title' ); ?>

		<?php bbp_topic_pagination(); ?>

		<?php do_action( 'bbp_theme_before_topic_meta' ); ?>

		<p class="bbp-topic-meta">

			<?php do_action( 'bbp_theme_before_topic_started_by' ); ?>

			<span class="bbp-topic-started-by"><?php printf( __( 'Started by: %1$s', 'frozr' ), bbp_get_topic_author_link( array( 'type' => 'name' ) ) ); ?></span>

			<?php do_action( 'bbp_theme_after_topic_started_by' ); ?>

			<?php if ( !bbp_is_single_forum() || ( bbp_get_topic_forum_id() != bbp_get_forum_id() ) ) : ?>

				<?php do_action( 'bbp_theme_before_topic_started_in' ); ?>

				<span class="bbp-topic-started-in"><?php printf( __( 'in:', 'frozr' ) . '<a href="%1$s">%2$s</a>', bbp_get_forum_permalink( bbp_get_topic_forum_id() ), bbp_get_forum_title( bbp_get_topic_forum_id() ) ); ?></span>

				<?php do_action( 'bbp_theme_after_topic_started_in' ); ?>

			<?php endif; ?>

		</p>

		<?php do_action( 'bbp_theme_after_topic_meta' ); ?>

		<?php bbp_topic_row_actions(); ?>

	<?php if (!frozr_mobile()) { echo'</li>'; } 
	$bbp_show_voices = get_theme_mod('bbp_show_voices', true);
	$bbp_show_count = get_theme_mod('bbp_show_count', true);
	$bbp_show_fresh = get_theme_mod('bbp_show_fresh', true); ?>
	<?php if ($bbp_show_voices == true) { ?>
	<<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?> class="bbp-topic-voice-count"><?php if (frozr_mobile()) { _e( 'Voices: ', 'frozr' ); } bbp_topic_voice_count(); ?></<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?>>
	<?php } if ($bbp_show_count == true) { ?>
	<<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?> class="bbp-topic-reply-count"><?php if (frozr_mobile()) { bbp_show_lead_topic() ? _e( 'Replies: ', 'frozr' ) : _e( 'Posts: ', 'frozr' ); } bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?></<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?>>
	<?php } if ($bbp_show_fresh == true) { ?>
	<<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?> class="bbp-topic-freshness">
		
		<?php if (frozr_mobile()) { _e( 'Freshness: ', 'frozr' ); } ?>

			<?php do_action( 'bbp_theme_before_topic_freshness_link' ); ?>

			<?php bbp_topic_freshness_link(); ?>

			<?php do_action( 'bbp_theme_after_topic_freshness_link' ); ?>

		<p class="bbp-topic-meta">

			<?php do_action( 'bbp_theme_before_topic_freshness_author' ); ?>

			<span class="bbp-topic-freshness-author"><?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'size' => 30 ) ); ?></span>

			<?php do_action( 'bbp_theme_after_topic_freshness_author' ); ?>

		</p>
	</<?php if (frozr_mobile()) { echo'div'; } else { echo'li'; } ?>>
	<?php  } ?>
	
	<?php if (frozr_mobile()) { echo'</li>'; } ?>

	<?php if ( bbp_is_user_home() ) : ?>

		<?php if ( bbp_is_favorites() ) : ?>

			<li class="bbp-topic-action">

				<?php do_action( 'bbp_theme_before_topic_favorites_action' ); ?>

				<?php bbp_user_favorites_link( array( 'mid' => '+', 'post' => '' ), array( 'pre' => '', 'mid' => '&times;', 'post' => '' ) ); ?>

				<?php do_action( 'bbp_theme_after_topic_favorites_action' ); ?>

			</li>

		<?php elseif ( bbp_is_subscriptions() ) : ?>

			<li class="bbp-topic-action">

				<?php do_action( 'bbp_theme_before_topic_subscription_action' ); ?>

				<?php bbp_user_subscribe_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); ?>

				<?php do_action( 'bbp_theme_after_topic_subscription_action' ); ?>

			</li>

		<?php endif; ?>

	<?php endif; ?>

</ul><!-- #topic-<?php bbp_topic_id(); ?> -->
