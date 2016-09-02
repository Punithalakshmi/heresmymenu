<?php
/**
 * Home topics Extensions
 *
 *
 * This uses bbpress to display latest topics in the home page
 * You cam choose a forum or display latest topics from all forums

 * @package FrozrCoreLibrary
 * @subpackage bbpressExtensions
 */
 
/**
 * Register action hook: frozr_home_topics
 * 
 * Located in index.php, just before the featured posts.
 */
function frozr_home_topics() {

	//Get option to show the home topics
	$show_topics = get_theme_mod('sh_home_topics', false);
	$get_home_forum_id = get_theme_mod('forums_id','0');
	$home_forum_id = bbp_get_forum_id ($get_home_forum_id);
	
	if ($show_topics == 1):
		if ($home_forum_id > 0) {
			do_action('frozr_home_topics_cat');
		}
	 elseif ($home_forum_id == 0 && bbp_has_topics()) {
			do_action('frozr_home_topics');
		}
	endif;
} // end frozr_home_topics
add_action('home_topics','frozr_home_topics');

/**
 * Create the home topics cat.
 * This will show if a forum id has been entered.
 */
if (function_exists('childtheme_override_home_topics_list_cat'))  {
	/**
	 * @ignore
	 */
	function home_topics_list_cat() {
		childtheme_override_home_topics_list_cat();
	}
} else {
	/**
	 * Create the home topics cat
	 * 
	 * Override: childtheme_override_home_topics_list_cat
	 */
	function home_topics_list_cat() {

	$topics_style = get_theme_mod('home_topics_layout','in');
	$home_forum_id_o = get_theme_mod('forums_id','0');
	$home_forum_id = bbp_get_forum_id ($home_forum_id_o);
	$forum_topics_icon = get_theme_mod('ht_icon','comments');
	$theme_layout = get_theme_mod('theme_layout','left');
	
	$forum_topics_posts_no = get_theme_mod('forums_count','3');
	?>
		<div class="topics-list-home">
			<div class="topics-list-cont<?php if ($forum_topics_posts_no == 1) { echo ' one_standard_post'; } ?>" >
			<?php do_action( 'bbp_template_before_topics_index' ); ?>
			
			<?php if ( bbp_has_topics(array( 'post_parent'=> $home_forum_id, 'posts_per_page'=>$forum_topics_posts_no, 'paged'=> false, 'show_stickies'=> false, 'max_num_pages'=> false)) ) : ?>

				<?php do_action( 'bbp_template_before_topics_loop' ); ?>
					<?php if ($forum_topics_posts_no != 1) { ?>
					<div class="bbp-header-home">
							<div class="bbp-forum-title-home<?php if ($theme_layout == 'right') {echo ' right_hand_ht';} ?>"><?php if ($forum_topics_icon != 'none' && $theme_layout == 'left') { ?> <i class="<?php echo $forum_topics_icon; ?>"></i> <?php } ?><span><?php printf( __( 'Latest topics in ', 'frozr' ) . '<a href="%1$s">%2$s</a>', bbp_get_forum_permalink( $home_forum_id ), bbp_get_forum_title( $home_forum_id ) ); ?></span><?php if ($forum_topics_icon != 'none' && $theme_layout == 'right') { ?> <i class="<?php echo $forum_topics_icon; ?>"></i> <?php } ?></div>
							<?php $home_formdec = bbp_get_forum_content( $home_forum_id ); if ( !empty($home_formdec) ) { echo apply_filters( 'meta_content', '<div class="forum-description-home"><span>' . $home_formdec . '</span></div>' );} ?>
							<?php if ($topics_style == 'in' && $forum_topics_posts_no != -1 && !frozr_mobile()) { ?>
							<span class="button topic-home-readmore"><?php printf( '<a href="%1$s" title="' . __( 'More Topics in ', 'frozr' ) . '%2$s">' . __( 'More Topics ', 'frozr' ) . '</a>', bbp_get_forum_permalink( $home_forum_id ), bbp_get_forum_title( $home_forum_id ) ); ?></span>
							<?php } ?>
					</div>
					<?php } ?>
					<div class="bbp-body-home">
						<?php frozr_home_topics_body(); ?>
							<?php if ($topics_style == 'full' && $forum_topics_posts_no != -1 && $forum_topics_posts_no !=  1 || frozr_mobile() && $forum_topics_posts_no != -1 && $forum_topics_posts_no !=  1 ) { ?>
							<span class="button topic-home-readmore"><?php printf( '<a href="%1$s" title="' . __( 'More Topics in ', 'frozr' ) . '%2$s">' . __( 'More Topics ', 'frozr' ) . '</a>', bbp_get_forum_permalink( $home_forum_id ), bbp_get_forum_title( $home_forum_id ) ); ?></span>
							<?php } ?>
					</div>

					<?php do_action( 'bbp_template_after_topics_loop' ); ?>
				
			<?php else : ?>
			
				<?php bbp_get_template_part( 'feedback',   'no-topics' ); ?>
				
			<?php endif; ?>
			
			<?php do_action( 'bbp_template_after_topics_index' ); ?>
			</div>
		</div><!--topics-list-home-->
	<?php
	}
}
add_action('frozr_home_topics_cat', 'home_topics_list_cat');

/**
 * Create the home topics.
 * This will show if a forum id = 0 or is empty.
 */
if (function_exists('childtheme_override_home_topics_list'))  {
	/**
	 * @ignore
	 */
	function home_topics_list() {
		childtheme_override_home_topics_list();
	}
} else {
	/**
	 * Create the home topics
	 * 
	 * Override: childtheme_override_home_topics_list
	 */
	function home_topics_list() {
	$topics_style = get_theme_mod('home_topics_layout','in');
	$topics_title = get_theme_mod('froums_topics_title','Latest Topics');
	$forum_topics_icon = get_theme_mod('ht_icon','comments');
	$theme_layout = get_theme_mod('theme_layout','left');

	$forum_topics_posts_no = get_theme_mod('forums_count','3');
	?>
		<div class="topics-list-home">
			<div class="topics-list-cont<?php if ($forum_topics_posts_no == 1) { echo ' one_standard_post'; } ?>">
			<?php do_action( 'bbp_template_before_topics_index' ); ?>
			
			<?php if ( bbp_has_topics(array( 'posts_per_page'=> $forum_topics_posts_no, 'paged'=> false, 'show_stickies'=> false, 'max_num_pages'=> false)) ) : ?>

				<?php do_action( 'bbp_template_before_topics_loop' ); ?>
				
					<?php if ($forum_topics_posts_no != 1) { ?>
					<div class="bbp-header-home">
						<div class="bbp-forum-title-home<?php if ($theme_layout == 'right') {echo ' right_hand_ht';} ?>"><?php if ($forum_topics_icon != 'none' && $theme_layout == 'left') { ?> <i class="<?php echo $forum_topics_icon; ?>"></i> <?php } ?><span><?php echo $topics_title; ?></span><?php if ($forum_topics_icon != 'none' && $theme_layout == 'right') { ?> <i class="<?php echo $forum_topics_icon; ?>"></i> <?php } ?></div>
						<?php $topic_desc = get_theme_mod('froums_topics_desc','Here are the latest topics in our forums'); echo apply_filters( 'meta_content', '<div class="forum-description-home"><span>' . $topic_desc . '</span></div>' ); ?>
						<?php if ($topics_style == 'in' && $forum_topics_posts_no != -1 && !frozr_mobile()) { ?>
						<span class="button topic-home-readmore"><a href="<?php echo home_url(); ?>/?post_type=forum" title="More Topics"><?php _e('More Topics', 'frozr' ); ?></a></span>		
						<?php } ?>
					</div>
					<?php } ?>
					<div class="bbp-body-home">
						<?php frozr_home_topics_body(); ?>
						<?php if ($topics_style == 'full' && $forum_topics_posts_no != -1 && $forum_topics_posts_no !=  1 || frozr_mobile() && $forum_topics_posts_no != -1 && $forum_topics_posts_no !=  1) { ?>
						<span class="button topic-home-readmore"><a href="<?php echo home_url(); ?>/?post_type=forum" title="More Topics"><?php _e('More Topics', 'frozr' ); ?></a></span>		
						<?php } ?>
					</div>
				<?php do_action( 'bbp_template_after_topics_loop' ); ?>
				
			<?php else : ?>
			
				<?php bbp_get_template_part( 'feedback',   'no-topics' ); ?>
				
			<?php endif; ?>
			
			<?php do_action( 'bbp_template_after_topics_index' ); ?>
			</div>
		</div><!-- .topics-list-home -->
	<?php
	}
}
add_action('frozr_home_topics', 'home_topics_list');

if ( ! function_exists( 'frozr_home_topics_body' ) ) :
/**
 * create the home topics latest topics body.
 */
function frozr_home_topics_body() {
	$topics_style = get_theme_mod('home_topics_layout','in');
	$home_forum_id_o = get_theme_mod('forums_id','0');
	$home_forum_id = bbp_get_forum_id ($home_forum_id_o);

	$forum_topics_posts_no = get_theme_mod('forums_count','3');
	if($forum_topics_posts_no ==1) {
	$coutcls = 't-one';
	} elseif($forum_topics_posts_no ==2) {
	$coutcls = 't-two';
	} else {
	$coutcls = 't-three';
	}
	$count =1;
	
	while ( bbp_topics() ) : bbp_the_topic();

			bbp_topic_row_actions(); ?>
			
			<div class="bbp-body-topics-home <?php echo $coutcls; if ($topics_style == "full") { echo ' twocol';} echo ' topic-'.$count;?>">	
				<?php do_action( 'bbp_theme_before_topic_title' ); ?>
					
				<div class="bbp-topic-title-home">
					<a class="bbp-topic-permalink-home" href="<?php bbp_topic_permalink(); ?>" title="<?php bbp_topic_title(); ?>"><?php frozr_limit_info( bbp_get_topic_title(), 20); ?></a>
					<?php do_action( 'bbp_theme_after_topic_title' ); ?>
					<?php bbp_topic_pagination(); ?>
					<?php do_action( 'bbp_theme_before_topic_meta' ); ?>
				</div>
					
				<div class="bbp-topic-count-home">
					<?php do_action( 'bbp_theme_before_topic_freshness_author' ); ?>
					<?php do_action( 'bbp_theme_before_topic_freshness_link' ); ?>
				<span>
					<?php bbp_show_lead_topic() ? _e( 'Replies', 'frozr' ) : _e( 'Posts', 'frozr' ); ?> <?php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?>, <?php _e( 'Voices', 'frozr' ); ?> <?php bbp_topic_voice_count(); ?>, 
					<?php _e( 'last post by', 'frozr' ); ?> <?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'size' => 14 ) ); ?>
					<?php bbp_topic_freshness_link(); ?>
				</span>
					<?php do_action( 'bbp_theme_after_topic_freshness_link' ); ?>
					<?php do_action( 'bbp_theme_after_topic_freshness_author' ); ?>
				</div>
				<?php if ($forum_topics_posts_no == 1 ) { ?>
				<span class="button topic-home-readmore"><?php printf( '<a href="%1$s" title="' . __( 'More Topics in ', 'frozr' ) . '%2$s">' . __( 'More Topics ', 'frozr' ) . '</a>', bbp_get_forum_permalink( $home_forum_id ), bbp_get_forum_title( $home_forum_id ) ); ?></span>
				<?php } ?>
				</div>
		<?php $count++;
	endwhile;
}
endif; // latest posts.


/*Hooks into the loop-topic.php output to print image*/
add_action( 'bbp_theme_before_topic_title', 'bee_insert_thumbnail' );
function bee_insert_thumbnail() {
$sh_thumbs = get_theme_mod('ht_thumbnails', false);
if ($sh_thumbs == 1) {
	if((!bee_catch_image() == '')){
		echo('<a class="ht_thumb" href="'); 
		echo(bbp_topic_permalink() . '"><span class="bbp-topic-thumbnail has_bg bg_hidden"  style="background: url('. bee_catch_image() .')no-repeat center center;"></span></a>');
	} else {
		echo('<a class="ht_thumb" href="'); 
		echo(bbp_topic_permalink() . '"><span class="bbp-topic-no-thumbnail has_bg bg_hidden"  style="background-image: url('. get_template_directory_uri() . '/images/bb_no_thumb.png' .');"></span></a>');
	}
}
}
/*Many thanks to Shane Gowland - http://shanegowland.com */
/*Function that retrieves the first image associated with the topic*/
function bee_catch_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  return $first_img;
}