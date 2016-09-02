<?php

/**
 * User Topics Created
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<?php do_action( 'bbp_template_before_user_topics_created' ); ?>

	<?php bbp_set_query_name( 'bbp_user_profile_topics_created' ); ?>
	
	<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>
	<div id="tabs-3" class="bbp-author-topics-started ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
	<?php else : ?>
	<div id="tabs-2" class="bbp-author-topics-started ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
	<?php endif; ?>

		<div class="bbp-user-section">

			<?php if ( bbp_get_user_topics_started() ) : ?>

				<?php bbp_get_template_part( 'pagination', 'topics' ); ?>

				<?php bbp_get_template_part( 'loop',       'topics' ); ?>

				<?php bbp_get_template_part( 'pagination', 'topics' ); ?>

			<?php else : ?>

				<p><?php bbp_is_user_home() ? _e( 'You have not created any topics.', 'frozr' ) : _e( 'This user has not created any topics.', 'frozr' ); ?></p>

			<?php endif; ?>

		</div>
	</div><!-- #bbp-author-topics-started -->

	<?php bbp_reset_query_name(); ?>

	<?php do_action( 'bbp_template_after_user_topics_created' ); ?>
