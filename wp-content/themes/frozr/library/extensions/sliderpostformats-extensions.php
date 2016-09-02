<?php
/**
 * Main Slider Post Format Extensions
 *
 * This includes posts formates for:
 * The homepage slider content.
 *
 *learn more about post formats at http://codex.wordpress.org/Post_Formats
 *
 * @package FrozrCoreLibrary
 * @subpackage PostFormatsExtensions
 */

/**
 * Register action hook: slider_meta_short
 */
function slider_meta_short() {
    do_action('slider_meta_short');
} // end slider_meta_short

/**
 * Register action hook: slider_meta_long
 */
function slider_meta_long() {
    do_action('slider_meta_long');
} // end slider_meta_long

/**
 * Main slider posts types test
 * 
 */
function content_posts_test() {
	if (has_post_format('aside')):
	do_action('frozr_post_aside');
	elseif (has_post_format('audio')): 
	do_action('frozr_post_audio');
	elseif (has_post_format('gallery')) : 
	do_action('frozr_post_gallery');
	elseif (has_post_format('link')) : 
	do_action('frozr_post_link');
	elseif (has_post_format('image')) : 
	do_action('frozr_post_image');
	elseif(has_post_format('quote')) : 
	do_action('frozr_post_quote');
	elseif(has_post_format('status')) : 
	do_action('frozr_post_status');
	elseif(has_post_format('video')) : 
	do_action('frozr_post_video');
	else : 
	do_action('frozr_post_standard');
	endif;
}

/**
 * Display the standard post format content
 * 
 * This file is used if the post formate = false. 
 */
if ( function_exists( "childtheme_slider_standard_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_standard_content() {
		childtheme_slider_standard_content();
	}
} else {
	/**
	 * Creates the Slider standard content
	 */
	 function frozr_slider_standard_content() {
	 
	 global $post;
	
	/**
	 * Return media if set or return post image thumbnail.
	 */	
	$the_post_thumbnail_test = get_the_post_thumbnail( $post->ID, "large" );
	// Set post thumbnail
	if ( $the_post_thumbnail_test ) {
		$the_post_thumbnail = true;
	} else {
		$the_post_thumbnail = false;
	}?>

	
		<div class="home-entry-content">
			<?php if ( $the_post_thumbnail ) : ?>
			<div class="blog-head-content">
				<div class="slider-head-img thumb_animi_p">
					<?php /*Get the Thumbnail*/ frozr_blog_thumbnail(); ?>
				</div>
				<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet thumb_animi_title'; else echo 'blog-head-title thumb_animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
				<?php slider_meta_short(); ?>
				<div class="blog-head-title-p thumb_animi_text"><p><?php if (!frozr_mobile() || frozr_tablet()) { echo custom_excerpt(200); } else { custom_excerpt(70); } ?></p></div>
			</div><!-- .blog-head-content -->
			<?php else : ?>
		
			<div class="blog-head-content">
				<div class="post-entry-no-img">
					<div class="p-e-n">
						<?php slider_meta_long(); ?>
					</div>
				</div><!-- .post-entry-no-img -->
				<div class="slider-meta-no-img">
					<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet animi_title'; else echo 'blog-head-title animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
					<div class="post-content">
						<div class="blog-p-title-p animi_text"><?php if (!frozr_mobile()) { echo the_excerpt(); } else { ?> <p><?php custom_excerpt(150); ?></p> <?php } ?></div>
					</div><!-- .post-content -->
				</div><!-- .slider-meta-no-img -->
			</div>
		<?php endif; // end post thumbnail and media check ?>
		</div><!-- .home-entry-content -->
		<?php

	 }
}
add_action('frozr_post_standard', 'frozr_slider_standard_content');

// Sets up the slider post meta 
if (function_exists('childtheme_override_slider_post_meta_short'))  {
	/**
	 * @ignore
	 */
	function slider_post_meta_short() {
		childtheme_override_slider_post_meta_short();
	}
} else {
	/**
	 * 
	 * Override: childtheme_override_slider_post_meta_short
	 */
	function slider_post_meta_short() {
	$s_s_show_author = get_theme_mod('slider_show_author_tmb', true);
	$s_s_show_comments = get_theme_mod('slider_show_comt_tmb', true);
	
		if ($s_s_show_author == true || $s_s_show_comments == true || current_user_can('edit_post')) { ?>
		<div class="slider-post-meta">
			<?php if ($s_s_show_author == true ) { ?>
			<span class="entry-author <?php if (has_post_format('status')): echo 'status_p'; elseif (has_post_format('quote')): echo 'quote_p'; else : echo 'animi_t_author'; endif;?>"><span><?php _e('by ', 'frozr' ); the_author_posts_link(); ?></span></span>	
			<?php }
			if ($s_s_show_comments == true ) { ?>
			<span class="entry-comments-link <?php if (has_post_format('status')): echo 'status_p'; elseif (has_post_format('quote')): echo 'quote_p'; else : echo 'animi_t_comments'; endif;?>"><?php comments_popup_link( __( '0 Comments', 'frozr' ), __( '1 Comment', 'frozr' ), __( '% Comments', 'frozr' ) ) ?></span>
			<?php }
			edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
<?php	}
 }
} // end slider_post_meta_short
add_action('slider_meta_short','slider_post_meta_short');

if (function_exists('childtheme_override_slider_post_meta_long'))  {
	/**
	 * @ignore
	 */
	function slider_post_meta_long() {
		childtheme_override_slider_post_meta_long();
	}
} else {
	/**
	 * 
	 * Override: childtheme_override_slider_post_meta_long
	 */
	function slider_post_meta_long() {
	$s_l_show_author = get_theme_mod('slider_show_author_no_tmb', true);
	$s_l_show_date = get_theme_mod('slider_show_date_no_tmb', true);
	$s_l_show_cat = get_theme_mod('slider_show_cat_no_tmb', true);
	$s_l_show_comments = get_theme_mod('slider_show_comt_no_tmb', true);
		
		if ($s_l_show_author == true) { ?>
		<span class="entry-no-img-author <?php if (has_post_format('status')): echo 'status_p'; elseif (has_post_format('quote')): echo 'quote_p'; else : echo 'animi_author'; endif;?>">
			<span><?php _e('by ', 'frozr' ); the_author_posts_link(); ?></span>
		</span>
		<?php }
		if ($s_l_show_date == true) { ?>
		<span class="entry-no-img-date <?php if (has_post_format('status')): echo 'status_p'; elseif (has_post_format('quote')): echo 'quote_p'; else : echo 'animi_date'; endif;?>">
			<span><?php the_time('F j, Y');?></span>
		</span>
		<?php }
		if ($s_l_show_cat == true) { ?>
		<span class="entry-no-img-cat <?php if (has_post_format('status')): echo 'status_p'; elseif (has_post_format('quote')): echo 'quote_p'; else : echo 'animi_cat'; endif;?>">
			<span><?php _e( 'in ', 'frozr' ); ?></span>
			<?php $category = get_the_category(); if($category[0]){ echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?>
		</span>
		<?php } 
		if ($s_l_show_comments == true) { ?>
		<span class="entry-no-img-comments-link <?php if (has_post_format('status')): echo 'status_p'; elseif (has_post_format('quote')): echo 'quote_p'; else : echo 'animi_comments'; endif;?>"><?php comments_popup_link( __( '0 Comments', 'frozr' ), __( '1 Comment', 'frozr' ), __( '% Comments', 'frozr' ) ) ?></span>
		<?php }
		edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' );
 }
} // end slider_post_meta_long
add_action('slider_meta_long','slider_post_meta_long');

/**
 * Slider aside post format
 * 
 */
if ( function_exists( "childtheme_slider_aside_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_aside_content() {
		childtheme_slider_aside_content();
	}
} else {
	/**
	 * Creates the Slider aside content
	 */
	 function frozr_slider_aside_content() {?>
	 
	
	<div class="home-entry-content">
		<div class="blog-head-content">
			<div class="post-entry-no-img">	
				<div class="p-e-n">
					<?php slider_meta_long(); ?>
				</div>
			</div><!-- .post-entry-no-img -->
			<div class="slider-meta-no-img">
				<div class="<?php if (is_sticky())echo'content-post-title sticky_p fs-icon-magnet animi_title'; else echo 'content-post-title animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>						
				<div class="post-content">
					<div class="blog-p-title-p animi_text"><?php if (!frozr_mobile()) { echo the_excerpt(); } else { ?> <p><?php custom_excerpt(150); ?></p> <?php } ?></div>
				</div><!-- .post-content -->
			</div><!-- .slider-meta-no-img -->
		</div>
	</div><!-- .home-entry-content -->
	
	<?php
	 }
}
add_action('frozr_post_aside', 'frozr_slider_aside_content');
/**
 * Slider audio post format
 * 
 */
if ( function_exists( "childtheme_slider_audio_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_audio_content() {
		childtheme_slider_audio_content();
	}
} else {
	/**
	 * Creates the Slider audio content
	 */
	 function frozr_slider_audio_content() {
	 global $post;

		$mp3 = get_post_meta( $post->ID, '_fro_aud_mp3', true );
		$ogg = get_post_meta( $post->ID, '_fro_aud_oga', true );
?>
		
		<div class="home-entry-content">
			<div class="blog-head-content">
				<div class="slider-head-img audio-p thumb_animi_p">
					<?php /*Get the Thumbnail*/ frozr_blog_thumbnail(); ?>
					<audio controls="controls">
					  <source src="<?php echo esc_url( $ogg ); ?>" type="audio/ogg">
					  <source src="<?php echo esc_url( $mp3 ); ?>" type="audio/mpeg">
					  <?php _e('Your browser does not support the audio element.', 'frozr' ); ?>
					</audio>
				</div>
				<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet thumb_animi_title'; else echo 'blog-head-title thumb_animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
					<?php slider_meta_short(); ?>
				<div class="blog-head-title-p thumb_animi_text"><p><?php if (!frozr_mobile() || frozr_tablet()) { echo custom_excerpt(200); } else { custom_excerpt(70); } ?></p></div>
			</div><!-- .blog-head-content -->
		</div>

	<?php
	 }
}
add_action('frozr_post_audio', 'frozr_slider_audio_content');

/**
 * Slider gallery post format
 * 
 */
if ( function_exists( "childtheme_slider_gallery_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_gallery_content() {
		childtheme_slider_gallery_content();
	}
} else {
	/**
	 * Creates the Slider gallery content
	 */
	 function frozr_slider_gallery_content() {
		
		// Set variables
	global $post;
	
	$meta = get_post_meta( $post->ID, '_fro_gal_thumb', true );
	$attachments = array_filter( explode( ',', $meta ) );

	if(!empty($attachments)) {?>

		<div class="home-entry-content">
			<div class="blog-head-content">
				<div class="slider-head-img thumb_animi_p">
					<?php /* Get the Thumbnail*/ do_action('get_gallery_thumbnail', $post->ID); ?>
				</div>
				<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet thumb_animi_title'; else echo 'blog-head-title thumb_animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
					<?php slider_meta_short(); ?>
				<div class="blog-head-title-p thumb_animi_text"><p><?php if (!frozr_mobile() || frozr_tablet()) { echo custom_excerpt(200); } else { custom_excerpt(70); } ?></p></div>
			</div><!-- .blog-head-content -->
		</div>
		
	<?php } else { ?>

		<div class="home-entry-content">
			<div class="blog-head-content">
				<div class="slider-head-img thumb_animi_p">
					<?php /*Get the Thumbnail*/ frozr_blog_thumbnail(); ?>
				</div>
				<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet thumb_animi_title'; else echo 'blog-head-title thumb_animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
				<?php slider_meta_short(); ?>
				<div class="blog-head-title-p thumb_animi_text"><p>
					<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php sprintf( esc_attr__( 'Permalink to %s', 'frozr' ), the_title_attribute() ); ?>" rel="bookmark">
					<?php frozr_post_total_gallery_images(); ?>
					</a>
					</p>
					<div class="button"><a href="<?php the_permalink() ?>" title="Go to gallery <?php the_title_attribute(); ?>"><?php _e('Open Gallery', 'frozr' ); ?></a></div>
				</div>
			</div><!-- .blog-head-content -->
		</div><!-- .home-entry-content -->

	<?php
	 }
	 }
}
add_action('frozr_post_gallery', 'frozr_slider_gallery_content');

/**
 * Slider image post format
 * 
 */
if ( function_exists( "childtheme_slider_image_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_image_content() {
		childtheme_slider_image_content();
	}
} else {
	/**
	 * Creates the Slider image content
	 */
	function frozr_slider_image_content() {
		global $post;	
		if (frozr_mobile() && !frozr_tablet()) {
			$thumb_size = "medium";
		} else {
			$thumb_size = "large";
		}
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);?>
		
		<div class="home-entry-content image_p">
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">	
			<div class="image-post-home has_bg bg_hidden" style="background: url('<?php echo $large_image_url[0]; ?>') no-repeat center center;background-size:auto 100%;<?php if (!frozr_mobile()) {echo 'background-size: 100% auto;';} ?>"></div></a>
		</div> <?php
	}
}
add_action('frozr_post_image', 'frozr_slider_image_content');

/**
 * Slider link post format
 * 
 */
if ( function_exists( "childtheme_slider_link_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_link_content() {
		childtheme_slider_link_content();
	}
} else {
	/**
	 * Creates the Slider link content
	 */
	 function frozr_slider_link_content() {
		global $post;
	 
		$title = get_post_meta( $post->ID, '_fro_link_title', true );
		$link = get_post_meta( $post->ID, '_fro_link_url', true );
?>
		
		<div class="home-entry-content">
			<div class="blog-head-content">
				<div class="slider-head-img link-p thumb_animi_p">
						<?php /*Get the Thumbnail*/ frozr_blog_thumbnail(); ?>
					<div class="slider_link link">
						<a href="<?php echo esc_url( $link ); ?>" rel="bookmark" title="<?php echo esc_attr( $title, 'frozr' ); ?>"><i class="fs-icon-link"></i><?php echo $title; ?></a></h2>
					</div><!-- .post-content -->
				</div>
				<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet thumb_animi_title'; else echo 'blog-head-title thumb_animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
					<?php slider_meta_short(); ?>
				<div class="blog-head-title-p thumb_animi_text"><p><?php if (!frozr_mobile() || frozr_tablet()) { echo custom_excerpt(200); } else { custom_excerpt(70); } ?></p></div>
			</div><!-- .blog-head-content -->
		</div>
	
	<?php
	 }
}
add_action('frozr_post_link', 'frozr_slider_link_content');

/**
 * Slider quote post format
 * 
 */
if ( function_exists( "childtheme_slider_quote_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_quote_content() {
		childtheme_slider_quote_content();
	}
} else {
	/**
	 * Creates the Slider quote format
	 */
	 function frozr_slider_quote_content() {
	?>
	
	<div class="home-entry-content">
		<div class="blog-head-content">
			<div class="quote-container">
				<div class="mb-wrap mb-style-3">
					<blockquote class="quote_p">
					<div>
					<p><?php if (!frozr_mobile()) { custom_excerpt_2(300); } else { custom_excerpt_2(150); } ?></p>
					</div>
					</blockquote>
					<div class="mb-attribution quote_p">
						<cite><?php the_author_posts_link(); ?></cite>
						
						<div class="mb-thumb" style="background: url('<?php echo get_avatar_url(get_the_author_meta('ID')); ?>') no-repeat center center; background-size: 100% auto;"></div>
					</div><!-- .mb-attribution -->
				</div><!-- .mb-wrap -->
			</div><!-- .quote-container -->
		</div>
	</div>
		<?php
	 }
}
add_action('frozr_post_quote', 'frozr_slider_quote_content');

/**
 * Slider status post format
 * 
 */
if ( function_exists( "childtheme_slider_status_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_status_content() {
		childtheme_slider_status_content();
	}
} else {
	/**
	 * Creates the Slider status content
	 */
	 function frozr_slider_status_content() {?>
	
	<div class="home-entry-content">
		<div class="blog-head-content">
			<div class="status-container">
				<div class="status-post-content">
					<div class="author-p c-status-pic status_p" style="background:url('<?php echo get_avatar_url(get_the_author_meta('ID')); ?>') no-repeat center center; background-size: 100% auto;"></a></div>
					<div class="status">
						<span class="author-vcard status-a status_p"><?php _e('by ', 'frozr' ); the_author_posts_link(); ?></span>
						<div class="blog-p-title-p status-p status_p"><p><?php if (!frozr_mobile() || frozr_tablet()) { echo custom_excerpt(200); } else { custom_excerpt(70); } ?></p></div>
						<span class="entry-date status_p"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .status -->
				</div><!-- .status-post-content -->
			</div><!-- .status-container -->
		</div>
	</div>
	<?php
	 }
}
add_action('frozr_post_status', 'frozr_slider_status_content');

/**
 * Slider video post format
 * 
 */
if ( function_exists( "childtheme_slider_video_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_video_content() {
		childtheme_slider_video_content();
	}
} else {
	/**
	 * Creates the Slider video content
	 */
	 function frozr_slider_video_content() {

		global $post; 
		if (frozr_mobile() && !frozr_tablet()) {
		$wid = '260'; $hig = '220';
		} else {
		$wid = '425'; $hig = '240';
		}
		?>
		<div class="home-entry-content">
			<div class="blog-head-content">
				<div class="slider-head-img thumb_animi_p">
				<?php do_action( 'get_media', $post->ID, $wid, $hig, true ); ?>
				</div>
				<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet thumb_animi_title'; else echo 'blog-head-title thumb_animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
				<?php slider_meta_short(); ?>
				<div class="blog-head-title-p thumb_animi_text"><p><?php if (!frozr_mobile() || frozr_tablet()) { echo custom_excerpt(200); } else { custom_excerpt(70); } ?></p></div>
			</div><!-- .blog-head-content -->
		</div>
		
<?php
	 }
}
add_action('frozr_post_video', 'frozr_slider_video_content');

/**
 * This function is to support the woocommerce products in the sliders.
 * Slider woocommerce products
 * 
 */
if ( function_exists( "childtheme_slider_product_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_slider_product_content() {
		childtheme_slider_product_content();
	}
} else {
	/**
	 * Creates the Slider product content
	 */
	 function frozr_slider_product_content() {

		global $post, $woocommerce, $product;
		$attachment_count = count( $product->get_gallery_attachment_ids() );
		?>
		
			<div class="blog-head-content">
				<div class="slider-head-img thumb_animi_p">
				<?php if ( $product->is_on_sale() ) : ?>
					<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . __( 'Sale!', 'frozr' ) . '</span>', $post, $product ); ?>
				<?php endif;
				if ( $attachment_count > 1 ) {
				/*Get the Thumbnail*/ gallery_thumbnail($post->ID, $productp = true);
				} else {
				/*Get the Thumbnail*/ frozr_blog_thumbnail( true );
				} ?>
					
				</div>
				<div class="<?php if (is_sticky())echo'blog-head-title sticky fs-icon-magnet thumb_animi_title'; else echo 'blog-head-title thumb_animi_title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php frozr_limit_info(get_the_title(), 20); ?></a></h2></div>
				<div class="ad_to_crt thumb_animi_title">
				<span class="p_price"><?php woocommerce_template_loop_price(); ?></span>
					<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
				</div>
				<div class="blog-head-title-p thumb_animi_text"><p><?php if (!frozr_mobile() || frozr_tablet()) { echo custom_excerpt(200); } else { custom_excerpt(70); } ?></p></div>
			</div><!-- .blog-head-content -->		
<?php
	 }
}