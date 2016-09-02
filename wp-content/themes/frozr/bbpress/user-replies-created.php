<?php

/**
 * User Replies Created
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<?php do_action( 'bbp_template_before_user_replies' ); ?>

	<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>
	<div id="tabs-4" class="bbp-author-topics-started ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
	<?php else : ?>
	<div id="tabs-3" class="bbp-author-topics-started ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
	<?php endif; ?>

		<div class="bbp-user-section">

			<?php if ( bbp_get_user_replies_created() ) : ?>

				<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

				<?php bbp_get_template_part( 'loop',       'replies' ); ?>

				<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

			<?php else : ?>

				<p><?php bbp_is_user_home() ? _e( 'You have not replied to any topics.', 'frozr' ) : _e( 'This user has not replied to any topics.', 'frozr' ); ?></p>

			<?php endif; ?>

		</div>
	</div><!-- #bbp-user-replies-created -->

	<?php do_action( 'bbp_template_after_user_replies' ); ?>
