<?php

/**
 * User Details
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<?php do_action( 'bbp_template_before_user_details' ); ?>
	<div class="bbp_user_profile">
		<div class="bbp_user_info">
			
			<div class="bbp_user_avatar">
				<div class="bbp_user_avatar_img" style="background:url('<?php echo get_avatar_url(get_avatar( bbp_get_displayed_user_field( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 100 ))); ?>');"></div>
			</div>

			<div class="bbp_user_desc">
				<h1><?php printf( __( '%s', 'frozr' ), "<a class='url fn n' href='" . bbp_get_user_profile_url() . "' title='" . esc_attr( bbp_get_displayed_user_field( 'display_name' ) ) . "' rel='me'>" . bbp_get_displayed_user_field( 'display_name' ) . "</a>");?></h1>
				<span class="bbp_user_bio"><?php bbp_displayed_user_field( 'description' ); ?></span>

				<div class="bbp_user_det">
					<div class="statistics_item">								
						<div class="bbp_user_topics"><?php _e( 'Topics', 'frozr' ); ?></div>
						<div class="bbp_statistics_no">
							<strong><?php echo bbp_get_user_topic_count_raw( 'user_email' ); ?></strong>
						</div>
					</div>
					
					<div class="statistics_item">								
						<div class="bbp_user_replies"><?php _e( 'Replies', 'frozr' ); ?></div>
						<div class="bbp_statistics_no">
							<strong><?php echo bbp_get_user_reply_count_raw( 'user_email' ); ?></strong>
						</div>
					</div>

					<div class="statistics_item">								
						<div class="bbp_user_role"><?php _e( 'Role', 'frozr' ); ?></div>
						<div class="bbp_user_role_p">
							<strong><?php echo bbp_get_user_display_role(); ?></strong>
						</div>
					</div>

					<div class="statistics_item">								
						<div class="bbp_user_id"><?php _e( 'User ID', 'frozr' ); ?></div>
						<div class="bbp_statistics_no">
							<strong><?php echo bbp_get_displayed_user_id(); ?></strong>
						</div>
					</div>
					
					<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>
					<div class="statistics_item_edit">								
						<a class="bbp_user_edit fs-icon-wrench"href="<?php bbp_user_profile_edit_url(); ?>" title="<?php printf( __( 'Edit Profile of User %s', 'frozr' ), esc_attr( bbp_get_displayed_user_field( 'display_name' ) ) ); ?>"></a>
					</div>
					<?php endif; ?>

				</div>

			</div>			
		</div><!-- #author-description	-->
	</div><!-- #entry-author-info -->
<?php do_action( 'bbp_template_after_user_details' ); ?>