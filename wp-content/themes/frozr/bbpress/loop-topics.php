<?php

/**
 * Topics Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_topics_loop' ); ?>
<?php $titt = bbp_get_forum_id(); ?>
<ul id="bbp-forum-<?php bbp_forum_id(); ?>" class="bbp-topics">

	<li class="bbp-header">

		<ul class="forum-titles">
			<?php if ( $titt!=0 && !bbp_is_single_user() ) :?>
			<li class="bbp-topic-title"><?php bbp_forum_title(bbp_get_forum_id()) ?></li>
			<?php else :?>
			<li class="bbp-topic-title"><?php _e( 'Topics', 'frozr' ); ?></li>
			<?php endif; ?>
			<?php if (!frozr_mobile()) {
			$bbp_show_voices = get_theme_mod('bbp_show_voices', true);
			$bbp_show_count = get_theme_mod('bbp_show_count', true);
			$bbp_show_fresh = get_theme_mod('bbp_show_fresh', true); ?>
			<?php if ($bbp_show_voices == true) { ?>
			<li class="bbp-topic-voice-count"><?php _e( 'Voices', 'frozr' ); ?></li>
			<?php } if ($bbp_show_count == true) { ?>
			<li class="bbp-topic-reply-count"><?php bbp_show_lead_topic() ? _e( 'Replies', 'frozr' ) : _e( 'Posts', 'frozr' ); ?></li>
			<?php } if ($bbp_show_fresh == true) { ?>
			<li class="bbp-topic-freshness"><?php _e( 'Freshness', 'frozr' ); ?></li>
			<?php } } ?>
		</ul>

	</li>
<?php $formdec = get_the_content(); if ( !empty($formdec) && bbp_is_single_forum() ) echo apply_filters( 'meta_content', '<div class="forum-description"><span>' . $formdec . '</span></div>' ); ?>
	<li class="bbp-body">

		<?php while ( bbp_topics() ) : bbp_the_topic(); ?>

			<?php bbp_get_template_part( 'loop', 'single-topic' ); ?>

		<?php endwhile; ?>

	</li>
</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->

<?php do_action( 'bbp_template_after_topics_loop' ); ?>
