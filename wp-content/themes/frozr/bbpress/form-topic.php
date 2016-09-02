<?php

/**
 * New/Edit Topic
 *
 * @package bbPress
 * @subpackage Theme
 */

if ( !bbp_is_single_forum() ) : ?>

<div id="bbpress-forums">

	<?php bbp_breadcrumb(); ?>

<?php endif; ?>

<?php if ( bbp_is_topic_edit() ) : ?>

	<?php bbp_topic_tag_list( bbp_get_topic_id() ); ?>

	<?php bbp_single_topic_description( array( 'topic_id' => bbp_get_topic_id() ) ); ?>

<?php endif; ?>

<?php if ( bbp_current_user_can_access_create_topic_form() ) : ?>
	<div id="new-topic-<?php bbp_topic_id(); ?>" class="bbp-topic-form">

	<?php if ( bbp_is_topic_edit() || is_page_template( 'page-create-topic.php')  ) {?>
	
		<form id="new-post" name="new-post" method="post" action="">

			<?php } else { ?>
			<form id="new-post" name="new-post" method="post" action="">
			<div class="forum-announcement-box create-new-topic">
			<?php $t_announcement = get_theme_mod('bbp_notice_text_3');
				$t_announcement_1 = get_theme_mod('bbp_notice_text_4'); ?>
			<?php if (  !empty ($t_announcement) ) : ?>		
				<div class="<?php echo get_theme_mod('bbp_notice_icon_3');?> topic_announcement_1">
					<p><?php echo apply_filters('meta_content', $t_announcement);?></p>
				</div>
			<?php endif; ?>
			<?php if (  !empty ($t_announcement_1) ) : ?>				
				<div class="<?php echo get_theme_mod('bbp_notice_icon_4');?> topic_announcement_2">
					<p><?php echo apply_filters('meta_content', $t_announcement_1);?></p>
				</div>
			<?php endif; ?>
			</div><!-- .create-new-topic -->
			
			<?php } ?>
			<?php do_action( 'bbp_theme_before_topic_form' ); ?>

			<fieldset class="bbp-form">
				<legend>

					<?php
						if ( bbp_is_topic_edit() )
							printf( __( 'Now Editing &ldquo;%s&rdquo;', 'frozr' ), bbp_get_topic_title() );
						else
							bbp_is_single_forum() ? printf( __( 'Create New Topic in &ldquo;%s&rdquo;', 'frozr' ), bbp_get_forum_title() ) : _e( 'Create New Topic', 'frozr' );
					?>

				</legend>

				<?php do_action( 'bbp_theme_before_topic_form_notices' ); ?>

				<?php if ( !bbp_is_topic_edit() && bbp_is_forum_closed() ) : ?>

					<div class="bbp-template-notice">
						<p><?php _e( 'This forum is marked as closed to new topics, however your posting capabilities still allow you to do so.', 'frozr' ); ?></p>
					</div>

				<?php endif; ?>

				<?php if ( current_user_can( 'unfiltered_html' ) ) : ?>

					<div class="bbp-template-notice">
						<p><?php _e( 'Your account has the ability to post unrestricted HTML content.', 'frozr' ); ?></p>
					</div>

				<?php endif; ?>

				<?php do_action( 'bbp_template_notices' ); ?>

				<div>

					<?php bbp_get_template_part( 'form', 'anonymous' ); ?>

					<?php do_action( 'bbp_theme_before_topic_form_title' ); ?>

					<p>
						<label for="bbp_topic_title"><?php printf( __( 'Topic Title (Maximum Length: %d):', 'frozr' ), bbp_get_title_max_length() ); ?></label><br />
						<input type="text" id="bbp_topic_title" value="<?php bbp_form_topic_title(); ?>" tabindex="<?php bbp_tab_index(); ?>" size="40" name="bbp_topic_title" maxlength="<?php bbp_title_max_length(); ?>" />
					</p>

					<?php do_action( 'bbp_theme_after_topic_form_title' ); ?>

					<?php do_action( 'bbp_theme_before_topic_form_content' ); ?>

					<?php if ( !function_exists( 'wp_editor' ) ) : ?>

						<p>
							<label for="bbp_topic_content"><?php _e( 'Topic:', 'frozr' ); ?></label><br />
							<textarea id="bbp_topic_content" tabindex="<?php bbp_tab_index(); ?>" name="bbp_topic_content" cols="60" rows="6"><?php bbp_form_topic_content(); ?></textarea>
						</p>

					<?php else : ?>

						<?php bbp_the_content( array( 'context' => 'topic' ) ); ?>

					<?php endif; ?>

					<?php do_action( 'bbp_theme_after_topic_form_content' ); ?>
					<div class="bb-codes"><span><?php _e( 'Use BB codes', 'frozr' ); ?></span></div>
					<div class="content-codes">
						<p>
						<span> <strong><?php _e( 'Bold', 'frozr' ); ?></strong>&emsp;<?php echo '[b]{content}[/b]'; ?></span>
						<span> <strong><?php _e( 'Italic', 'frozr' ); ?></strong>&emsp;<?php echo '[i]{content}[/i]'; ?></span>
						<span> <strong><?php _e( 'Underline', 'frozr' ); ?></strong>&emsp;<?php echo '[u]{content}[/u]'; ?></span>
						<span> <strong><?php _e( 'Strikethrough', 'frozr' ); ?></strong>&emsp;<?php echo '[s]{content}[/s]'; ?></span>
						<span> <strong><?php _e( 'Align: Center', 'frozr' ); ?></strong>&emsp;<?php echo '[center]{content}[/center]'; ?></span>
						<span> <strong><?php _e( 'Align: Right', 'frozr' ); ?></strong>&emsp;<?php echo '[right]{content}[/right]'; ?></span>
						<span> <strong><?php _e( 'Align: Left', 'frozr' ); ?></strong>&emsp;<?php echo '[left]{content}[/left]'; ?></span>
						<span> <strong><?php _e( 'Align: Justify', 'frozr' ); ?></strong>&emsp;<?php echo '[justify]{content}[/justify]'; ?></span>
						<span> <strong><?php _e( 'Horizontal Line', 'frozr' ); ?></strong>&emsp;<?php echo '[hr]'; ?></span>
						<span> <strong><?php _e( 'Subscript', 'frozr' ); ?></strong>&emsp;<?php echo '[sub]{content}[/sub]'; ?></span>
						<span> <strong><?php _e( 'Superscript', 'frozr' ); ?></strong>&emsp;<?php echo '[sup]{content}[/sup]'; ?></span>
						<span> <strong><?php _e( 'Reverse', 'frozr' ); ?></strong>&emsp;<?php echo '[reverse]{content}[/reverse]'; ?></span>
						<span> <strong><?php _e( 'Font Size', 'frozr' ); ?></strong>&emsp;<?php echo '[size={size}]{content}[/size]'; ?></span>
						<span> <strong><?php _e( 'Font Color', 'frozr' ); ?></strong>&emsp;<?php echo '[color={color}]{content}[/color]'; ?></span>
						<span> <strong><?php _e( 'Preformatted', 'frozr' ); ?></strong>&emsp;<?php echo '[pre]{content}[/pre]'; ?></span>
						<span> <strong><?php _e( 'Blockquote', 'frozr' ); ?></strong>&emsp;<?php echo '[blockquote]{content}[/blockquote]'; ?></span>
						<span> <strong><?php _e( 'Area', 'frozr' ); ?></strong>&emsp;<?php echo '[border]{content}[/border] or [area]{content}[/area] or [area={title}]{content}[/area]'; ?></span>
						<span> <strong><?php _e( 'Block', 'frozr' ); ?></strong>&emsp;<?php echo '[div]{content}[/div]'; ?></span>
						<span> <strong><?php _e( 'List: Ordered', 'frozr' ); ?></strong>&emsp;<?php echo '[list]{content}[/list] or [ol]{content}[/ol]'; ?></span>
						<span> <strong><?php _e( 'List: Unordered', 'frozr' ); ?></strong>&emsp;<?php echo '[ul]{content}[/ul]'; ?></span>
						<span> <strong><?php _e( 'List: Item', 'frozr' ); ?></strong>&emsp;<?php echo '[li]{content}[/li]'; ?></span>
						<span> <strong><?php _e( 'Quote', 'frozr' ); ?></strong>&emsp;<?php echo '[quote]{content}[/quote] or [quote={id}]{content}[/quote]'; ?></span>
						</p>
						<p>
						<span><strong><?php _e( 'List of Advanced BBCodes', 'frozr' ); ?></strong></span>
						<span><strong><?php _e( 'URL', 'frozr' ); ?></strong>&emsp;<?php echo '[url]{link}[/url] or [url=link]{text}[/url]'; ?></span>
						<span><strong><?php _e( 'Image', 'frozr' ); ?></strong>&emsp;<?php echo '[img]{image_url}[/img] or [img={width}x{height}]{image_url}[/img] or [img width={x} height={y}]{image_url}[/img]'; ?> </span>
						<span><strong><?php _e( 'YouTube Video', 'frozr' ); ?></strong>&emsp;<?php echo '[youtube]{id}[/youtube] or [youtube width={x} height={y}]{id}[/youtube]'; ?></span>
						<span><strong><?php _e( 'Vimeo Video', 'frozr' ); ?></strong>&emsp;<?php echo '[vimeo]{id}[/vimeo] or [vimeo width={x} height={y}]{id}[/vimeo]'; ?></span>
						<span><strong><?php _e( 'Google Search URL', 'frozr' ); ?></strong>&emsp;<?php echo '[google]{search}[/google]'; ?></span>
						<span><strong><?php _e( 'Note', 'frozr' ); ?></strong>&emsp;<?php echo '[note]{content}[/note]'; ?></span>
						</p>
					</div>
					<?php if ( !current_user_can( 'unfiltered_html' ) ) : ?>

						<p class="form-allowed-tags">
							<label><?php echo __( 'You may use these','frozr' ) . '<abbr title="HyperText Markup Language">HTML</abbr>' . __( 'tags and attributes:','frozr' ); ?></label><br />
							<code><?php bbp_allowed_tags(); ?></code>
						</p>

					<?php endif; ?>

					<?php do_action( 'bbp_theme_before_topic_form_tags' ); ?>

					<p>
						<label for="bbp_topic_tags"><?php _e( 'Topic Tags:', 'frozr' ); ?></label><br />
						<input type="text" value="<?php bbp_form_topic_tags(); ?>" tabindex="<?php bbp_tab_index(); ?>" size="40" name="bbp_topic_tags" id="bbp_topic_tags" <?php disabled( bbp_is_topic_spam() ); ?> />
					</p>

					<?php do_action( 'bbp_theme_after_topic_form_tags' ); ?>

					<?php if ( !bbp_is_single_forum() ) : ?>

						<?php do_action( 'bbp_theme_before_topic_form_forum' ); ?>

						<p>
							<label for="bbp_forum_id"><?php _e( 'Forum:', 'frozr' ); ?></label><br />
							<?php bbp_dropdown( array( 'selected' => bbp_get_form_topic_forum() ) ); ?>
						</p>

						<?php do_action( 'bbp_theme_after_topic_form_forum' ); ?>

					<?php endif; ?>

					<?php if ( current_user_can( 'moderate' ) ) : ?>

						<?php do_action( 'bbp_theme_before_topic_form_type' ); ?>

						<p>

							<label for="bbp_stick_topic"><?php _e( 'Topic Type:', 'frozr' ); ?></label><br />

							<?php bbp_topic_type_select(); ?>

						</p>

						<?php do_action( 'bbp_theme_after_topic_form_type' ); ?>

					<?php endif; ?>

					<?php if ( bbp_is_subscriptions_active() && !bbp_is_anonymous() && ( !bbp_is_topic_edit() || ( bbp_is_topic_edit() && !bbp_is_topic_anonymous() ) ) ) : ?>

						<?php do_action( 'bbp_theme_before_topic_form_subscriptions' ); ?>

						<p>
							<input name="bbp_topic_subscription" id="bbp_topic_subscription" type="checkbox" value="bbp_subscribe" <?php bbp_form_topic_subscribed(); ?> tabindex="<?php bbp_tab_index(); ?>" />

							<?php if ( bbp_is_topic_edit() && ( get_the_author_meta( 'ID' ) != bbp_get_current_user_id() ) ) : ?>

								<label for="bbp_topic_subscription"><?php _e( 'Notify the author of follow-up replies via email', 'frozr' ); ?></label>

							<?php else : ?>

								<label for="bbp_topic_subscription"><?php _e( 'Notify me of follow-up replies via email', 'frozr' ); ?></label>

							<?php endif; ?>
						</p>

						<?php do_action( 'bbp_theme_after_topic_form_subscriptions' ); ?>

					<?php endif; ?>

					<?php if ( bbp_allow_revisions() && bbp_is_topic_edit() ) : ?>

						<?php do_action( 'bbp_theme_before_topic_form_revisions' ); ?>

						<fieldset class="bbp-form">
							<legend><?php _e( 'Revision', 'frozr' ); ?></legend>
							<div>
								<input name="bbp_log_topic_edit" id="bbp_log_topic_edit" type="checkbox" value="1" <?php bbp_form_topic_log_edit(); ?> tabindex="<?php bbp_tab_index(); ?>" />
								<label for="bbp_log_topic_edit"><?php _e( 'Keep a log of this edit:', 'frozr' ); ?></label><br />
							</div>

							<div>
								<label for="bbp_topic_edit_reason"><?php printf( __( 'Optional reason for editing:', 'frozr' ), bbp_get_current_user_name() ); ?></label><br />
								<input type="text" value="<?php bbp_form_topic_edit_reason(); ?>" tabindex="<?php bbp_tab_index(); ?>" size="40" name="bbp_topic_edit_reason" id="bbp_topic_edit_reason" />
							</div>
						</fieldset>

						<?php do_action( 'bbp_theme_after_topic_form_revisions' ); ?>

					<?php endif; ?>

					<?php do_action( 'bbp_theme_before_topic_form_submit_wrapper' ); ?>

					<div class="bbp-submit-wrapper">

						<?php do_action( 'bbp_theme_before_topic_form_submit_button' ); ?>

						<button type="submit" tabindex="<?php bbp_tab_index(); ?>" id="bbp_topic_submit" name="bbp_topic_submit" class="button submit"><?php _e( 'Submit', 'frozr' ); ?></button>

						<?php do_action( 'bbp_theme_after_topic_form_submit_button' ); ?>

					</div>

					<?php do_action( 'bbp_theme_after_topic_form_submit_wrapper' ); ?>

				</div>

				<?php bbp_topic_form_fields(); ?>

			</fieldset>

			<?php do_action( 'bbp_theme_after_topic_form' ); ?>

		</form>
	</div>

<?php elseif ( bbp_is_forum_closed() ) : ?>

	<div id="no-topic-<?php bbp_topic_id(); ?>" class="bbp-no-topic">
		<div class="bbp-template-notice">
			<p><?php printf( __( 'The forum &#8216;%s&#8217; is closed to new topics and replies.', 'frozr' ), bbp_get_forum_title() ); ?></p>
		</div>
	</div>

<?php else : ?>

	<div id="no-topic-<?php bbp_topic_id(); ?>" class="bbp-no-topic">
	<div class="un-loged-in">
	<div class="bbp-template-notice">
			<p><?php is_user_logged_in() ? _e( 'You cannot create new topics at this time.', 'frozr' ) : _e( 'You must be logged in to create new topics.', 'frozr' ); ?></p>
		</div>
	</div>
	</div>
<?php endif; ?>

<?php if ( !bbp_is_single_forum() ) : ?>

</div>

<?php endif; ?>
