<?php
/**
 * Our Team Extensions
 *
 *
 * This is used to display a team members bio section in the home page

 * @package FrozrCoreLibrary
 * @subpackage FrozrExtensions
 */
 
/*Display Team Members Section*/
function frozr_team_section_show() {
	if (get_theme_mod('show_team') == true) {
		do_action('frozr_team_section_act');
	}
}
add_action('sliding_box','frozr_team_section_show');
/*Write Team Members panels*/
function frozr_team_panel_show() {
	if (get_theme_mod('show_team') == true && get_theme_mod('team_count','3') != 1) {
		do_action('frozr_team_panel_act');
	}
}
add_action('after_theme_panels', 'frozr_team_panel_show', 2);

/**
 * Create the section body.
 */
if (function_exists('childtheme_override_frozr_team_section'))  {
	/**
	 * @ignore
	 */
	function frozr_team_section() {
		childtheme_override_frozr_team_section();
	}
} else {
	/**
	 * Override: childtheme_override_frozr_team_section
	 */
	function frozr_team_section() {
	//Get option to show the team section or not
	$mem_no = 1;
	$team_title = get_theme_mod('team_title', 'Our Team');
	$team_desc = get_theme_mod('team_desc', 'Few Lines about your great team');
	$team_link_title = get_theme_mod('team_link_title', 'Get in touch');
	$team_link = get_theme_mod('team_link');
	$team_count = get_theme_mod('team_count','3');
	$team_countt = get_theme_mod('team_count','3');
	$theme_layout = get_theme_mod('theme_layout','left');
	$msection_icon = get_theme_mod('msection_icon'); ?>

	<div id="team_member_section" <?php if ($team_count == 1) { echo 'class="one_mem"'; }?>>
		<div class="st_posts_list_home<?php if ($team_count == 1) { echo ' one_standard_post'; }?>">
			<?php if ( !empty($team_title) && $team_count != 1) { ?>
			<div class="st-header-home">
				<div class="st-posts-title-home<?php if ($theme_layout == 'right') {echo ' right_hand_st';} ?>"><?php if ($msection_icon != 'none' && $theme_layout == 'left') { ?> <i class="<?php echo $msection_icon; ?>"></i> <?php } ?><span><?php echo apply_filters( 'meta_content', $team_title ); ?></span><?php if ($msection_icon != 'none' && $theme_layout == 'right') { ?> <i class="<?php echo $msection_icon; ?>"></i> <?php } ?></div>
					<?php if ( !empty($team_desc) ) { echo apply_filters( 'meta_content', '<div class="st-description-home"><span>' . $team_desc . '</span></div>' );} ?>
			</div>
			<?php } ?>
			
			<div class="st-body-home"> <?php
			while ($team_count > 0) {
			
				$smlimg = get_theme_mod('tm_sml_img_'.$mem_no);
				$name = get_theme_mod('tm_m_name_'.$mem_no,'Mahmud Hamid');
				$position = get_theme_mod('tm_m_position_'.$mem_no,'GM');
				$bio = get_theme_mod('tm_m_bio_'.$mem_no, 'I do everything alone.');
				$face = get_theme_mod('tm_m_face_'.$mem_no);
				$twet = get_theme_mod('tm_m_twet_'.$mem_no);
				$inst = get_theme_mod('tm_m_inst_'.$mem_no);
				$yout = get_theme_mod('tm_m_youtube_'.$mem_no);
					
				frozr_team_section_body($mem_no, $smlimg, $name, $position, $bio, $face, $twet, $inst, $yout);
			
			$team_count--;$mem_no++; }
			
			if ($team_countt != 1 && !empty($team_link_title)) { ?>
				<span class="button st-home-readmore"><?php printf('<a href="%1$s" title="%2$s">%2$s</a>', $team_link, $team_link_title ); ?></span>		
			<?php } ?>
			</div>
		</div><!--st_posts_list_home-->
	</div><!--st_posts_wrapper-->
	<?php }
}
add_action('frozr_team_section_act', 'frozr_team_section', 10, 13);

if ( function_exists( 'childtheme_override_frozr_team_section_body' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_team_section_body() {
		childtheme_override_frozr_team_section_body();
	}
} else {
	/**
	 * Creates team members body.
	 */
	function frozr_team_section_body($mem_no, $smlimg, $name, $position, $bio, $face, $twet, $inst, $yout) { 
	$team_count = get_theme_mod('team_count','3');
	
	if($team_count ==1) {
	$coutcls = 't-one';
	} elseif($team_count ==2) {
	$coutcls = 't-two';
	} else {
	$coutcls = 't-three';
	} ?>
	
	<article id="member-<?php echo $mem_no; ?>" class="<?php echo $coutcls; if ($team_count != 1) {echo " twocol";} ?>">
		<div class="mem_article_content">
		<div id="st_post_thumb_<?php echo $mem_no; ?>" class="st_thumb">
			<div class="st-thumbnail has_bg bg_hidden" <?php if (!empty ($smlimg)){ echo 'style="background: url('. $smlimg .') no-repeat center center; background-size: auto 100%;"';} ?>>
				<?php if ($team_count != 1 ) { ?>
				<a href="#mpanel_<?php echo $mem_no; ?>" title="<?php _e('view Biography', 'frozr'); ?>"></a>
				<?php } ?>
				<?php if (empty ($smlimg)) { echo '<i class="fs-icon-picture-o"></i>'; } ?>
			</div>
		</div>

		<div class="entry-header">
			<?php if ($team_count == 1 ) { ?>
			<div class="st_entry_summary">
				<span class="st_entry_title"><?php echo $name; ?></span>
				<p><?php echo $position; ?></p>
				<p class="mem_bio_text"><?php echo frozr_limit_info($bio, 220); ?></p>
				<?php if (!empty ($face)) { ?>
					<a class="mfs" href="<?php echo $face; ?>" title="Follow him on Facebook"><i class="fs-icon-facebook"></i></a>
				<?php }
				if (!empty ($twet)) { ?>
					<a class="mtw" href="<?php echo $twet; ?>" title="Follow him on Twitter"><i class="fs-icon-twitter"></i></a>
				<?php }
				if (!empty ($inst)) { ?>
					<a class="mins" href="<?php echo $inst; ?>" title="Follow him on Instagram"><i class="fs-icon-instagram"></i></a>
				<?php }
				if (!empty ($yout)) { ?>
					<a class="myou" href="<?php echo $yout; ?>" title="Follow him on Youtube"><i class="fs-icon-youtube"></i></a>
				<?php } ?>
			</div><!-- .entry-summary -->
			<?php } else { ?>
			<a class="st_entry_title" href="#mpanel_<?php echo $mem_no; ?>" title="<?php _e('view Biography', 'frozr'); ?>"><?php echo $name; ?></a>
			<div class="st_entry_summary">
				<p><?php echo $position; ?></p>
			</div><!-- .entry-summary -->
			<?php } ?>
		</div><!-- .entry-header -->
		</div><!-- .mem_article_content -->
	</article><!-- #post -->
	
<?php } }

if ( function_exists( 'childtheme_override_frozr_team_panels_body' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_team_panels_body() {
		childtheme_override_frozr_team_panels_body();
	}
} else {
	/**
	 * Creates team slide panels.
	 */
	function frozr_team_panels_body() {
	$team_count = get_theme_mod('team_count','3');
	$mem_no = 1;
	
	if($team_count ==1) {
	$coutcls = 't-one';
	} elseif($team_count ==2) {
	$coutcls = 't-two';
	} else {
	$coutcls = 't-three';
	} 
		while ($team_count > 0) {

		$name = get_theme_mod('tm_m_name_'.$mem_no,'Mahmud Hamid');
		$position = get_theme_mod('tm_m_position_'.$mem_no,'GM');
		$bio = get_theme_mod('tm_m_bio_'.$mem_no, 'I do everything alone.');
		$face = get_theme_mod('tm_m_face_'.$mem_no);
		$twet = get_theme_mod('tm_m_twet_'.$mem_no);
		$inst = get_theme_mod('tm_m_inst_'.$mem_no);
		$yout = get_theme_mod('tm_m_youtube_'.$mem_no); ?>

		<div  data-role="panel" id="mpanel_<?php echo $mem_no; ?>" class="mem_panel" data-position="right" data-display="overlay" data-position-fixed="true" data-ajax="false">
			<div class="mim_close_btn"><a class="mem_cancel" data-rel="close" href="#team_member_section"><?php echo __('Close','frozr'); ?></a></div>
			<div class="panel_breaker"></div>
			<div class="mem_panel_details">
				<div class="mem_socio_pnl">
					<?php if (!empty ($face)) { ?>
					<a class="mfs" href="<?php echo $face; ?>" title="Follow him on Facebook"><i class="fs-icon-facebook"></i></a>
					<?php }
					if (!empty ($twet)) { ?>
					<a class="mtw" href="<?php echo $twet; ?>" title="Follow him on Twitter"><i class="fs-icon-twitter"></i></a>
					<?php }
					if (!empty ($inst)) { ?>
					<a class="mins" href="<?php echo $inst; ?>" title="Follow him on Instagram"><i class="fs-icon-instagram"></i></a>
					<?php }
					if (!empty ($yout)) { ?>
					<a class="myou" href="<?php echo $yout; ?>" title="Follow him on Youtube"><i class="fs-icon-youtube"></i></a>
					<?php } ?>
				</div>
				<h2><?php echo $name; ?></h2>
				<p><?php echo $bio; ?></p>
			</div>
		</div>
		<?php
		$team_count--;$mem_no++; } ?>

<?php } }
add_action('frozr_team_panel_act', 'frozr_team_panels_body', 10, 13);