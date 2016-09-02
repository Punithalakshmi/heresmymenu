<?php
/**
 * Home standard posts loop Extensions
 *
 *
 * This is used to display latest blog posts in the home page
 * You can choose a category or display latest posts from all categories

 * @package FrozrCoreLibrary
 * @subpackage FrozrExtensions
 */
 
function frozr_st_home_posts_one() {
	
	if(get_theme_mod('use_posts_loop_1') == true) {
	$type = (class_exists( 'WooCommerce' ) && get_theme_mod('posts_loop_type_1') != null) ? get_theme_mod('posts_loop_type_1') : 'posts';
	$cat = ($type == 'posts') ? 'post_loop_cat_1' : 'product_loop_cat_1';
	$title = 'post_title_1';
	$desc = 'post_desc_1';
	$layout = 'post_loop_layout_1';
	$sticky = 'post_igno_sticky_1';
	$icon = 'loop_icon_1';
	$count = 'post_count_1';
	$thumb = 'post_loop_thumb_1';
	$cmt = 'post_loop_comt_1';
	$cats = 'post_loop_cats_1';
	$auth = 'post_loop_auth_1';

	do_action('frozr_home_st_posts_loop', 1, $type, $cat, $title, $desc, $layout, $sticky, $icon, $count, $thumb, $cmt, $cats, $auth);
	}
}
add_action('posts_loop_one','frozr_st_home_posts_one');
function frozr_st_home_posts_two() {
	
	if(get_theme_mod('use_posts_loop_2') == true) {
	$type = (class_exists( 'WooCommerce' ) && get_theme_mod('posts_loop_type_2') != null) ? get_theme_mod('posts_loop_type_2') : 'posts';
	$cat = ($type == 'posts') ? 'post_loop_cat_2' : 'product_loop_cat_2';
	$title = 'post_title_2';
	$desc = 'post_desc_2';
	$layout = 'post_loop_layout_2';
	$sticky = 'post_igno_sticky_2';
	$icon = 'loop_icon_2';
	$count = 'post_count_2';
	$thumb = 'post_loop_thumb_2';
	$cmt = 'post_loop_comt_2';
	$cats = 'post_loop_cats_2';
	$auth = 'post_loop_auth_2';

	do_action('frozr_home_st_posts_loop', 2, $type, $cat, $title, $desc, $layout, $sticky, $icon, $count, $thumb, $cmt, $cats, $auth);
	}
}
add_action('posts_loop_two','frozr_st_home_posts_two');
function frozr_st_home_posts_three() {
	
	if(get_theme_mod('use_posts_loop_3') == true) {
	$type = (class_exists( 'WooCommerce' ) && get_theme_mod('posts_loop_type_3') != null) ? get_theme_mod('posts_loop_type_3') : 'posts';
	$cat = ($type == 'posts') ? 'post_loop_cat_3' : 'product_loop_cat_3';
	$title = 'post_title_3';
	$desc = 'post_desc_3';
	$layout = 'post_loop_layout_3';
	$sticky = 'post_igno_sticky_3';
	$icon = 'loop_icon_3';
	$count = 'post_count_3';
	$thumb = 'post_loop_thumb_3';
	$cmt = 'post_loop_comt_3';
	$cats = 'post_loop_cats_3';
	$auth = 'post_loop_auth_3';

	do_action('frozr_home_st_posts_loop', 3, $type, $cat, $title, $desc, $layout, $sticky, $icon, $count, $thumb, $cmt, $cats, $auth);
	}
}
add_action('posts_loop_three','frozr_st_home_posts_three');
function frozr_st_home_posts_four() {
	
	if(get_theme_mod('use_posts_loop_4') == true) {
	$type = (class_exists( 'WooCommerce' ) && get_theme_mod('posts_loop_type_4') != null) ? get_theme_mod('posts_loop_type_4') : 'posts';
	$cat = ($type == 'posts') ? 'post_loop_cat_4' : 'product_loop_cat_4';
	$title = 'post_title_4';
	$desc = 'post_desc_4';
	$layout = 'post_loop_layout_4';
	$sticky = 'post_igno_sticky_4';
	$icon = 'loop_icon_4';
	$count = 'post_count_4';
	$thumb = 'post_loop_thumb_4';
	$cmt = 'post_loop_comt_4';
	$cats = 'post_loop_cats_4';
	$auth = 'post_loop_auth_4';

	do_action('frozr_home_st_posts_loop', 4, $type, $cat, $title, $desc, $layout, $sticky, $icon, $count, $thumb, $cmt, $cats, $auth);
	}
}
add_action('posts_loop_four','frozr_st_home_posts_four');
function frozr_st_home_posts_five() {
	
	if(get_theme_mod('use_posts_loop_5') == true) {
	$type = (class_exists( 'WooCommerce' ) && get_theme_mod('posts_loop_type_5') != null) ? get_theme_mod('posts_loop_type_5') : 'posts';
	$cat = ($type == 'posts') ? 'post_loop_cat_5' : 'product_loop_cat_5';
	$title = 'post_title_5';
	$desc = 'post_desc_5';
	$layout = 'post_loop_layout_5';
	$sticky = 'post_igno_sticky_5';
	$icon = 'loop_icon_5';
	$count = 'post_count_5';
	$thumb = 'post_loop_thumb_5';
	$cmt = 'post_loop_comt_5';
	$cats = 'post_loop_cats_5';
	$auth = 'post_loop_auth_5';

	do_action('frozr_home_st_posts_loop', 5, $type, $cat, $title, $desc, $layout, $sticky, $icon, $count, $thumb, $cmt, $cats, $auth);
	}
}
add_action('posts_loop_five','frozr_st_home_posts_five');

/**
 * Create the home standard loop body.
 */
if (function_exists('childtheme_override_home_st_posts_loop'))  {
	/**
	 * @ignore
	 */
	function home_posts_st_loop() {
		childtheme_override_home_st_posts_loop();
	}
} else {
	/**
	 * Create the home standard posts
	 * 
	 * Override: childtheme_override_home_st_posts_loop
	 */
	function home_posts_st_loop($stn, $looptype, $loopcat, $looptitle, $loopdesc, $looplayout, $loopsticky, $loopicon, $loopcount, $loopthumb, $loopcmt, $loopcats, $loopauth ) {
	$st_posts_category = get_theme_mod($loopcat);
	$st_more_posts_llink_url = get_category_link( $st_posts_category );
	$feat_loop_type = get_theme_mod('feat_loop_type','posts');

	//get the main loop options
	if ($looptype == 'products' && class_exists( 'WooCommerce' )) {
		if (get_theme_mod('use_featured_posts') == true && $feat_loop_type == 'products' ) {
		$featured_posts = get_theme_mod('product_feat_loop');
		}
		$get_stand_category =  get_theme_mod($loopcat);
		$get_shop_link =  get_category_link( get_theme_mod($loopcat) );
		$st_category = get_term_by('name', $get_stand_category , 'product_cat');
		$st_cat_name = ( get_theme_mod($loopcat) != null ) ? $st_category->name :  __('Our Shop', 'frozr' );
		$st_cat_link = ( get_theme_mod($loopcat) != null ) ? get_term_link( $get_stand_category , 'product_cat') : esc_url($get_shop_link);
		$post_type = 'product';
		$cat = 'product_cat';
		$more_text = __('More Products', 'frozr' );
	} elseif (get_theme_mod('use_featured_posts') == true) {
		$featured_posts = get_theme_mod('post_feat_loop');
		$get_stand_category = ( !empty ($st_posts_category) ) ? $st_posts_category : '';
		$post_type = 'post';
		$cat = 'category_name';
		$st_category = get_category_by_slug( $get_stand_category );
		$st_cat_name = ( !empty ($st_posts_category) ) ? $st_category->name : __('Our Blog', 'frozr' );
		$st_cat_link = ( !empty ($st_posts_category) ) ? get_category_link($st_category->term_id ) : esc_url($st_more_posts_llink_url);
		$more_text = __('More Posts', 'frozr' );
	} else {
		$get_stand_category = ( !empty ($st_posts_category) ) ? $st_posts_category : '';
		$post_type = 'post';
		$cat = 'category_name';
		$st_category = get_category_by_slug( $get_stand_category );
		$st_cat_name = ( !empty ($st_posts_category) ) ? $st_category->name : __('Our Blog', 'frozr' );
		$st_cat_link = ( !empty ($st_posts_category) ) ? get_category_link($st_category->term_id ) :  esc_url($st_more_posts_llink_url);
		$more_text = __('More Posts', 'frozr' );
	}

	$st_posts_title = get_theme_mod($looptitle, 'Loop Title Here');
	$st_posts_desc = get_theme_mod($loopdesc, 'Loop Description Here');
	$standard_style = get_theme_mod($looplayout,'in');
	$standard_no_sticky = (get_theme_mod($loopsticky) == true) ? 0 : 1;;
	$standard_title_icon = get_theme_mod($loopicon,'none');
	$theme_layout = get_theme_mod('theme_layout','left');

	$standard_posts_no = get_theme_mod($loopcount,'3'); ?>
	
	<?php if ( have_posts() ) : ?>
	<div id="st_posts_wrapper_<?php echo $stn; ?>">
		<div class="st_posts_list_home<?php if ($standard_posts_no == 1) { echo ' one_standard_post'; }?>">
			<?php if ( !empty($st_posts_title) && $standard_posts_no != 1) { ?>
			<div class="st-header-home">
				<div class="st-posts-title-home<?php if ($theme_layout == 'right') {echo ' right_hand_st';} ?>"><?php if ($standard_title_icon != 'none' && $theme_layout == 'left') { ?> <i class="<?php echo $standard_title_icon; ?>"></i> <?php } ?><span><?php echo apply_filters( 'meta_content', $st_posts_title ); ?></span><?php if ($standard_title_icon != 'none' && $theme_layout == 'right') { ?> <i class="<?php echo $standard_title_icon; ?>"></i> <?php } ?></div>
				<?php if ( !empty($st_posts_desc) ) { echo apply_filters( 'meta_content', '<div class="st-description-home"><span>' . $st_posts_desc . '</span></div>' );} ?>
				<?php if ($standard_style != 'full' && $standard_posts_no != -1 && !frozr_mobile()) { ?>
					<span class="button st-home-readmore"><?php printf('<a href="%1$s" title="' . $more_text . __(' in ','frozr') . '%2$s">' . $more_text . '</a>', $st_cat_link, $st_cat_name ); ?></span>		
				<?php } ?>
			</div>
			<?php } ?>
			
			<div class="st-body-home">
			<?php $stp_query = new WP_Query( array('post_type' =>$post_type, 'posts_per_page'=>$standard_posts_no, 'post__not_in' =>$featured_posts, $cat=>$get_stand_category, 'ignore_sticky_posts'=>$standard_no_sticky));
				
				while ( $stp_query->have_posts() ) : $stp_query->the_post();?>
				<?php frozr_home_st_posts_body($post_type, $looplayout, $loopthumb, $loopcmt, $loopcats, $loopauth, $loopcount, $more_text, $st_cat_link, $st_cat_name ); ?>				
				<?php endwhile; ?>
				<?php if ($standard_style == 'full' && $standard_posts_no != -1 && $standard_posts_no != 1 || frozr_mobile() && $standard_posts_no != -1 && $standard_posts_no != 1 ) { ?>
					<span class="button st-home-readmore"><?php printf('<a href="%1$s" title="' . $more_text . __(' in ','frozr') . '%2$s">' . $more_text . '</a>', $st_cat_link, $st_cat_name ); ?></span>		
				<?php } ?>
			</div>
			<?php wp_reset_query(); ?>
		</div><!--st_posts_list_home-->
	</div><!--st_posts_wrapper-->
	<?php endif; 
	}
}
add_action('frozr_home_st_posts_loop', 'home_posts_st_loop', 10, 13);

if ( ! function_exists( 'frozr_home_st_posts_body' ) ) :
/**
 * create the home standard posts body.
 */
function frozr_home_st_posts_body($pt = '', $looplayout, $loopthumb, $loopcmt, $loopcats, $loopauth, $loopcount, $more_text, $st_cat_link, $st_cat_name) {
	$standard_style = get_theme_mod($looplayout,'in');
	$standard_thumb = get_theme_mod($loopthumb, true);
	$standard_posts_num = get_theme_mod($loopcount,'3');
	$standard_posts_cmt = get_theme_mod($loopcmt, true);
	$standard_posts_cat = get_theme_mod($loopcats, true);
	$standard_posts_aut = get_theme_mod($loopauth, true);

	global $post; 	
	
	if (frozr_mobile() && !frozr_tablet()) {
		$thumb_size = "medium";
	} else {
		$thumb_size = "large";
	}
	if($standard_posts_num ==1) {
	$coutcls = 't-one';
	} elseif($standard_posts_num ==2) {
	$coutcls = 't-two';
	} else {
	$coutcls = 't-three';
	} ?>

	<article id="post-<?php the_ID(); ?>" class="<?php echo $coutcls; if ($standard_style == "full") { echo " twocol"; } if ($pt == 'product') { echo ' st_product_item'; } ?>" >
		<?php
		// Show the post thumbnail if available	
		if ( $standard_thumb == true ) :
		
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size); ?>
			<div id="st_post_thumb_<?php the_ID(); ?>" class="st_thumb">
				<div class="st-thumbnail has_bg bg_hidden" <?php if (!empty ($large_image_url)){ echo 'style="background: url('. $large_image_url[0] .') no-repeat center center; background-size: 100% auto;"';} ?>>
					<?php if ($pt == 'product') { woocommerce_show_product_loop_sale_flash(); } ?>
					<a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo $post->post_title; ?>"></a>
					<?php if (empty ($large_image_url)) { echo '<i class="fs-icon-picture-o"></i>'; } ?>
				</div>
			</div>
		<?php endif; ?>
		
		<header class="entry-header">
			<a class="<?php if ($pt == 'product') echo 'st_p_title '; ?>st_entry_title" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'frozr' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php frozr_limit_info(get_the_title(), 20); ?></a>
			<?php if ($pt == 'product') { ?>
			<span class="st_p_price"><?php woocommerce_template_loop_price(); ?></span>
			<?php } ?>
			<?php if ($pt == 'post' || $standard_posts_num == 1 ) { ?>
			<div class="st_entry_summary">
				<p><?php if ($standard_posts_num == 1) { echo custom_excerpt_2(170); } else { custom_excerpt_2(60); } ?></p>
			</div><!-- .entry-summary -->
			<?php } ?>
		</header><!-- .entry-header -->
		
		<?php if ($pt == 'post') { ?>
		<?php if ($standard_posts_cmt == true && comments_open() || $standard_posts_cat == true || $standard_posts_aut == true) { ?>
		<footer class="st_entry_meta">
			<?php if ( $standard_posts_cmt == true && comments_open() ) : ?><span class="st_comments_link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'frozr' ) . '</span>', __( '1 Reply', 'frozr' ), __( '% Replies', 'frozr' ) ); ?></span><!-- .comments-link -->
			<?php endif; // comments_open() ?>
			<?php if ($standard_posts_cat == true) {  
			$category = get_the_category(); 
				if($category[0]){
				echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
			} } ?>
			<?php if ($standard_posts_aut == true) { printf ( sprintf( '<span class="st_author"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), esc_attr( sprintf( __( 'View all posts by %s', 'frozr' ), get_the_author() ) ), get_the_author())); }?>
			<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .st_entry_meta -->
		<?php if ($standard_posts_num == 1) { ?>
		<span class="button st-home-readmore"><?php printf('<a href="%1$s" title="' . $more_text . __(' in ','frozr') . '%2$s">' . $more_text . '</a>', $st_cat_link, $st_cat_name ); ?></span>		
		<?php } ?>

		<?php } }?>

	</article><!-- #post -->

<?php }
endif; // standards posts body.