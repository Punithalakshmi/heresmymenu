<?php

/**
 * Single User Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php bbp_get_template_part( 'user', 'details' ); 
	if ( !bbp_is_single_user_edit() ) : ?>
	<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all" data-role="tabs">
	<div class="bbp_user_prof_ul" data-role="navbar" role="navigation">
		<ul class="bbp_user_prof tabs ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
		
			<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>
			<li class="bbp_user_prof_li ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
				<a id="bbp_user_prof_li_a" href="#tabs-1"><?php _e( 'Subscribeds', 'frozr' ); ?></a>
			</li>
			<li class="bbp_user_prof_li ui-state-default ui-corner-top">
				<a id="bbp_user_prof_li_a" href="#tabs-2"><?php _e( 'Favorites ', 'frozr' ); ?></a>
			</li>
			<li class="bbp_user_prof_li ui-state-default ui-corner-top">
				<a id="bbp_user_prof_li_a" href="#tabs-3"><?php _e( 'Topics Created', 'frozr' ); ?></a>
			</li>
			<li class="bbp_user_prof_li ui-state-default ui-corner-top">
				<a id="bbp_user_prof_li_a" href="#tabs-4"><?php _e( 'Replies Created', 'frozr' ); ?></a>
			</li>
			
			<?php else : ?>
			
			<li class="bbp_user_prof_li ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
				<a id="bbp_user_prof_li_a" href="#tabs-1"><?php _e( 'Favorites ', 'frozr' ); ?></a>
			</li>
			<li class="bbp_user_prof_li ui-state-default ui-corner-top">
				<a id="bbp_user_prof_li_a" href="#tabs-2"><?php _e( 'Topics Created', 'frozr' ); ?></a>
			</li>
			<li class="bbp_user_prof_li ui-state-default ui-corner-top">
				<a id="bbp_user_prof_li_a" href="#tabs-3"><?php _e( 'Replies Created', 'frozr' ); ?></a>
			</li>
			
			<?php endif; ?>
			
		</ul>
	</div>
	<?php endif;
		
		if ( !bbp_is_single_user_edit() ) {
			bbp_get_template_part( 'user', 'favorites'       ); 
			bbp_get_template_part( 'user', 'topics-created'  ); 
			bbp_get_template_part( 'user', 'replies-created' );			
			if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) {
			bbp_get_template_part( 'user', 'subscriptions' );
			}
		} 	
		if ( bbp_is_single_user_edit() ) bbp_get_template_part( 'form', 'user-edit'); ?>
	</div>

</div>
