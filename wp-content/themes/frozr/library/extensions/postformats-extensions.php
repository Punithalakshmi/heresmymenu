<?php
/**
 * Post Format Extensions
 *
 * This includes posts formates for:
 * The blog template page posts.
 *
 *learn more about post formats at http://codex.wordpress.org/Post_Formats
 *
 * @package FrozrCoreLibrary
 * @subpackage PostFormatsExtensions
 */


/**
 * Register action hook: blog_meta_thumb
 */
function blog_meta_thumb() {
    do_action('blog_meta_thumb');
} // end blog_meta_thumb

/**
 * Register action hook: blog_meta
 */
function blog_meta() {
    do_action('blog_meta');
} // end blog_meta


/**
 * Main posts types test
 * 
 */
function blog_posts_test() {
	if (has_post_format('aside')):
	do_action('frozr_blog_post_aside');
	elseif (has_post_format('audio')): 
	do_action('frozr_blog_post_audio');
	elseif (has_post_format('gallery')) : 
	do_action('frozr_blog_post_gallery');
	elseif (has_post_format('link')) : 
	do_action('frozr_blog_post_link');
	elseif (has_post_format('image')) : 
	do_action('frozr_blog_post_image');
	elseif(has_post_format('quote')) : 
	do_action('frozr_blog_post_quote');
	elseif(has_post_format('status')) : 
	do_action('frozr_blog_post_status');
	elseif(has_post_format('video')) : 
	do_action('frozr_blog_post_video');
	else : 
	do_action('frozr_blog_post_standard');
	endif;
}

/**
 * Display the standard post format content
 * 
 * This file is used if the post formate = false. 
 */
if ( function_exists( "childtheme_blog_standard_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_standard_content() {
		childtheme_blog_standard_content();
	}
} else {
	/**
	 * Creates the blog standard content
	 */
	 function frozr_blog_standard_content() {
		global $post;
		
		$the_post_thumbnail_test = get_the_post_thumbnail( $post->ID );

		// Set post thumbnail
		if ( $the_post_thumbnail_test ) {
			$the_post_thumbnail = true;
		} else {
			$the_post_thumbnail = false;
		}
		$blog_show_thumb = get_theme_mod('blog_show_thumb', true);
		$blog_posts_content_layout = get_theme_mod('blog_posts_content_layout',1);
		?>
		<div class="home-entry-content">
			<?php if ( $the_post_thumbnail && $blog_show_thumb == true) : ?>

			<?php blog_meta_thumb(); ?>
			<?php frozr_blog_thumbnail(); ?>
			<div class="slider-meta">
				<div class="post-content">
					<div class="<?php if (is_sticky())echo'blog-p-title sticky fs-icon-magnet'; else echo 'blog-p-title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
					<div class="blog-p-title-p"><p><?php if ($blog_posts_content_layout == 1) { echo get_the_excerpt(); } else { echo get_the_content(); } ?></p></div>
				</div><!-- .post-content -->
			</div><!-- .slider-meta -->				

			<?php else : ?>
			<div class="no-img-post">
				<?php blog_meta(); ?>
				<div class="post-content">
					<div class="<?php if (is_sticky())echo'blog-p-title sticky fs-icon-magnet'; else echo 'blog-p-title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
					<div class="blog-p-title-p"><p><?php if ($blog_posts_content_layout == 1) { echo get_the_excerpt(); } else { echo get_the_content(); } ?></p></div>
				</div><!-- .post-content -->
			</div><!-- .no-img-post-->	
							
		<?php endif; // end post thumbnail and media check ?>
		</div><!-- .home-entry-content--><?php

	 }
}
add_action('frozr_blog_post_standard', 'frozr_blog_standard_content');

// Sets up the blog posts meta 
if (function_exists('childtheme_override_blog_post_meta_thumb'))  {
	/**
	 * @ignore
	 */
	function blog_post_meta_thumb() {
		childtheme_override_blog_post_meta_thumb();
	}
} else {
	/**
	 * 
	 * Override: childtheme_override_blog_post_meta_thumb
	 */
	function blog_post_meta_thumb() { global $post; 
	$blog_show_date = get_theme_mod('blog_show_date', true);
	$blog_show_author = get_theme_mod('blog_show_author', true);
	$blog_show_category = get_theme_mod('blog_show_category', true);
	$blog_show_comments = get_theme_mod('blog_show_comments', true);
	?>
			<div class="slider-meta">
				<div class="blog-author-p">
					<div class="post-entry-meta">
						<span><?php
						if ($blog_show_date == true) { the_time('F j, Y'); _e(' at ', 'frozr' ); the_time(); echo ', '; }
						if ($blog_show_author == true) { _e('by ', 'frozr' ); the_author_posts_link(); echo ', '; }
						if ($blog_show_category == true) { if ( $post->post_type != 'page' ) { _e( 'in ', 'frozr' ); $category = get_the_category(); if($category[0]) { echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; echo ', '; } } } 
						if ($blog_show_comments == true) { comments_popup_link( __( '0 Comments', 'frozr' ), __( '1 Comment', 'frozr' ), __( '% Comments', 'frozr' ) ); }
						?></span>
						<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .post-entry-meta -->
				</div><!-- .blog-author-p -->
			</div><!-- .slider-meta -->
	<?php
 }
} // end blog_meta_thumb
add_action('blog_meta_thumb','blog_post_meta_thumb');

if (function_exists('childtheme_override_blog_post_meta'))  {
	/**
	 * @ignore
	 */
	function blog_post_meta() {
		childtheme_override_blog_post_meta();
	}
} else {
	/**
	 * 
	 * Override: childtheme_override_blog_post_meta
	 */
	function blog_post_meta() { global $post; 
	$blog_show_date = get_theme_mod('blog_show_date', true);
	$blog_show_author = get_theme_mod('blog_show_author', true);
	$blog_show_category = get_theme_mod('blog_show_category', true);
	$blog_show_comments = get_theme_mod('blog_show_comments', true);
	?>
			<div class="blog-author-p">
				<div class="post-entry-meta">
						<span><?php
						if ($blog_show_date == true) { the_time('F j, Y'); _e(' at ', 'frozr' ); the_time(); echo ', '; }
						if ($blog_show_author == true) { _e('by ', 'frozr' ); the_author_posts_link(); echo ', '; }
						if ($blog_show_category == true) { if ( $post->post_type != 'page' ) { _e( 'in ', 'frozr' ); $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; echo ', '; } } }
						if ($blog_show_comments == true) { comments_popup_link( __( '0 Comments', 'frozr' ), __( '1 Comment', 'frozr' ), __( '% Comments', 'frozr' ) ); }
						?></span>
					<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .post-entry-meta -->
			</div><!-- .blog-author-p-->
		<?php
 }
} // end blog_meta
add_action('blog_meta','blog_post_meta');

/**
 * Blog aside post format
 * 
 */
if ( function_exists( "childtheme_blog_aside_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_aside_content() {
		childtheme_blog_aside_content();
	}
} else {
	/**
	 * Creates the blog aside content
	 */
	 function frozr_blog_aside_content() {?>
	 
		<div class="no-img-post">
			<div class="post-content">
				<?php the_content( '<div class="blog-p-title-p">' . __( 'Read more', 'frozr' ) . ' <span class="meta-nav">&rarr;</span></div>' ); ?>
			</div><!-- .post-content -->
		</div><!-- .no-img-post -->	
		
	<?php
	 }
}
add_action('frozr_blog_post_aside', 'frozr_blog_aside_content');

/**
 * blog audio post format
 * 
 */
if ( function_exists( "childtheme_blog_audio_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_audio_content() {
		childtheme_blog_audio_content();
	}
} else {
	/**
	 * Creates the blog audio content
	 */
	 function frozr_blog_audio_content() {

	 global $post;

		$mp3 = get_post_meta( $post->ID, '_fro_aud_mp3', true );
		$ogg = get_post_meta( $post->ID, '_fro_aud_oga', true );
		$blog_posts_content_layout = get_theme_mod('blog_posts_content_layout',1); ?>

	<?php blog_meta(); ?>
	
	<div class="audio_thumb">
	<?php /* Get the content*/ frozr_blog_thumbnail(); ?>
	<audio controls="controls">
	  <source src="<?php echo esc_url( $ogg ); ?>" type="audio/ogg">
	  <source src="<?php echo esc_url( $mp3 ); ?>" type="audio/mpeg">
	  <?php _e('Your browser does not support the audio element.', 'frozr' ); ?>
	</audio>
	</div>
	
	<div class="post-content">
		<div class="<?php if (is_sticky())echo'blog-p-title sticky fs-icon-magnet'; else echo 'blog-p-title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
		<div class="blog-p-title-p"><?php if ($blog_posts_content_layout == 1) { echo get_the_excerpt(); } else { echo get_the_content(); } ?></div>
	</div><!-- .post-content -->
	
	<?php
	 }
}
add_action('frozr_blog_post_audio', 'frozr_blog_audio_content');

/**
 * blog gallery post format
 * 
 */
if ( function_exists( "childtheme_blog_gallery_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_gallery_content() {
		childtheme_blog_gallery_content();
	}
} else {
	/**
	 * Creates the blog gallery content
	 */
	 function frozr_blog_gallery_content() {
	 
	global $post;
	
	$meta = get_post_meta( $post->ID, '_fro_gal_thumb', true );
	$attachments = array_filter( explode( ',', $meta ) );
	$blog_posts_content_layout = get_theme_mod('blog_posts_content_layout',1);

	if(!empty($attachments)) {?>
	
	
		<?php blog_meta_thumb(); ?>
		<div class="blog-thumb">
		<?php /* Get the Thumbnail*/ do_action('get_gallery_thumbnail', $post->ID); ?>
		</div>
		<div class="slider-meta">
			<div class="post-content">
				<div class="<?php if (is_sticky())echo'blog-p-title sticky fs-icon-magnet'; else echo 'blog-p-title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
				<div class="blog-p-title-p"><p><?php if ($blog_posts_content_layout== 1) { echo get_the_excerpt(); } else { echo get_the_content(); } ?></p></div>
			</div><!-- .post-content -->
		</div><!-- .slider-meta -->				
		
	<?php } else { ?>
		
		<?php blog_meta_thumb(); ?>
		<?php /* Get the Thumbnail*/ frozr_blog_thumbnail(); ?>
		<div class="slider-meta">
			<div class="post-content">
				<div class="<?php if (is_sticky())echo'blog-p-title sticky fs-icon-magnet'; else echo 'blog-p-title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
				<div class="blog-p-title-p">
					<p><em><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php sprintf( esc_attr__( 'Permalink to %s', 'frozr' ), the_title_attribute() ); ?>" rel="bookmark">
					<?php frozr_post_total_gallery_images(); ?>
					</a></em></p>
					<p><?php custom_excerpt_2(200); ?></p>
				</div><!-- .blog-p-title-p -->
				<div class="button"><a href="<?php the_permalink() ?>" title="Go to gallery <?php the_title_attribute(); ?>"><?php _e('Open gallery --', 'frozr' ); ?></a></div>		
			</div><!-- .post-content -->
		</div><!-- .slider-meta --><?php
	 }
	 }
}
add_action('frozr_blog_post_gallery', 'frozr_blog_gallery_content');

/**
 * blog image post format
 * 
 */
if ( function_exists( "childtheme_blog_image_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_image_content() {
		childtheme_blog_image_content();
	}
} else {
	/**
	 * Creates the blog image content
	 */
	 function frozr_blog_image_content() {
		global $post;
		
		if (frozr_mobile() && !frozr_tablet()) {
			$thumb_size = "medium";
		} else {
			$thumb_size = "large";
		}
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);?>
								
		<a href="<?php the_permalink() ?>" title="Open <?php the_title_attribute(); ?>">
		<?php	echo '<div class="b-image-post has_bg bg_hidden"><div style="background: url( '.$large_image_url[0].') no-repeat center center #f5f5f5;">
					  </div></div></a>';
	 }
}
add_action('frozr_blog_post_image', 'frozr_blog_image_content');

/**
 * blog link post format
 * 
 */
if ( function_exists( "childtheme_blog_link_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_link_content() {
		childtheme_blog_link_content();
	}
} else {
	/**
	 * Creates the blog link content
	 */
	 function frozr_blog_link_content() {
		global $post;

		$title = get_post_meta( $post->ID, '_fro_link_title', true );
		$link = get_post_meta( $post->ID, '_fro_link_url', true );
		$blog_posts_content_layout = get_theme_mod('blog_posts_content_layout',1); ?>
	
	<div class="no-img-post">
		<div class="post-content link">
			<a href="<?php echo esc_url( $link ); ?>" rel="bookmark" title="<?php echo esc_attr( $title, 'frozr' ); ?>"><i class="fs-icon-link"></i><?php echo $title; ?></a></h2>
		</div><!-- .post-content -->
	</div><!-- .no-img-post -->

	<div class="post-content">
		<div class="<?php if (is_sticky())echo'blog-p-title sticky fs-icon-magnet'; else echo 'blog-p-title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
		<div class="blog-p-title-p"><?php if ($blog_posts_content_layout == 1) { echo get_the_excerpt(); } else { echo get_the_content(); } ?></div>
	</div><!-- .post-content -->
	
	<?php
	 }
}
add_action('frozr_blog_post_link', 'frozr_blog_link_content');

/**
 * blog quote post format
 * 
 */
if ( function_exists( "childtheme_blog_quote_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_quote_content() {
		childtheme_blog_quote_content();
	}
} else {
	/**
	 * Creates the blog quote format+
	 */
	 function frozr_blog_quote_content() {?>
	 
		<div class="mb-wrap mb-style-3">
			<blockquote>
				<p><?php custom_excerpt_2(300); ?></p>
			</blockquote>
			<div class="mb-attribution">
				<cite><?php the_author_posts_link(); ?></cite>
				<div class="mb-thumb" style="background: url('<?php echo get_avatar_url(get_the_author_meta('ID')); ?>') no-repeat center center; background-size: 100% auto;"></div>
			</div><!-- .mb-attribution -->
		</div><!-- .mb-wrap -->
		<?php
	 }
}
add_action('frozr_blog_post_quote', 'frozr_blog_quote_content');

/**
 * blog status post format
 * 
 */
if ( function_exists( "childtheme_blog_status_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_status_content() {
		childtheme_blog_status_content();
	}
} else {
	/**
	 * Creates the blog status content
	 */
	 function frozr_blog_status_content() {?>

		<div class="post-content">
			<div id="blog_s" class="author-p c-status-pic" style="background:url('<?php echo get_avatar_url(get_the_author_meta('ID')); ?>') no-repeat center center; background-size: 100% auto;"></a></div>
			<div class="status">
				<span class="author-vcard status-a"><?php the_author_posts_link(); ?></span>
				<div class="blog-p-title-p status-p"><p><?php custom_excerpt_2(200); ?></p></div>
				<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .status -->
		</div><!-- .post-content -->
	<?php
	 }
}
add_action('frozr_blog_post_status', 'frozr_blog_status_content');

/**
 * blog video post format
 * 
 */
if ( function_exists( "childtheme_blog_video_content" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_video_content() {
		childtheme_blog_video_content();
	}
} else {
	/**
	 * Creates the blog video content
	 */
	 function frozr_blog_video_content() {

	global  $post;
	$blog_posts_content_layout = get_theme_mod('blog_posts_content_layout',1); 
	
	if (frozr_mobile() && !frozr_tablet()) {
		$wid = '260'; $hig = '220';
	} else {
		$wid = '425'; $hig = '240';
	} ?>

		<?php blog_meta_thumb(); ?>
		
		<figure class="b-video">
				<?php do_action( 'get_media', $post->ID, $wid, $hig, true ); ?>
		</figure>
		
		<div class="slider-meta">
			<div class="post-content">
				<div class="<?php if (is_sticky())echo'blog-p-title sticky fs-icon-magnet'; else echo 'blog-p-title';?>"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
				<div class="blog-p-title-p"><p><?php if ($blog_posts_content_layout == 1) { echo get_the_excerpt(); } else { echo get_the_content(); } ?></p></div>
			</div><!-- .post-content -->
		</div><!-- .slider-meta -->				

	<?php }
}
add_action('frozr_blog_post_video', 'frozr_blog_video_content');

/**
 * Blog thumbnail check
 * 
 * this function is responsibe to check and get every blog post content thumbnail 
 */
if ( function_exists( "childtheme_blog_thumbnail" ) )  {
	/**
	 * @ignore
	 */
	 function frozr_blog_thumbnail() {
		childtheme_blog_thumbnail();
	}
} else {
	/**
	 * Creates the blog thumbnail
	 */
	 function frozr_blog_thumbnail( $product_post = false ) {
	 
	/**
	 * Return media if set or return post image thumbnail.
	 * 
	 * Used in posts to set posts thumbnail.
	 */
	 
	// Get global metabox options
	global $post;
	
	if (frozr_mobile() && !frozr_tablet()) {
		$thumb_size = "medium";
	} else {
		$thumb_size = "large";
	}

	$the_post_thumbnail_test = get_the_post_thumbnail( $post->ID, $thumb_size );

	// Set post thumbnail
	if ( $the_post_thumbnail_test ) {
		$the_post_thumbnail = true;
	} else {
		$the_post_thumbnail = false;
	}

		// Show the post thumbnail if available	
		if ( $the_post_thumbnail ) :
		
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size); ?>
			
			<div class="blog-thumb">
				<div class="c-thumbnail has_bg bg_hidden" style="background: url( '<?php echo $large_image_url[0]; ?>') no-repeat center center;">
					<a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo $post->post_title;?>"></a>
				</div>
			</div>	
		<?php	
		// if no post thumbnail is available check post attachments		
		else :
			$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
				
				if ( $images ) :
						$image = array_shift( $images );
						$large_image_url = wp_get_attachment_image_src( $image->ID, $thumb_size ); ?>

						<div class="blog-thumb">
							<div class="g-thumbnail has_bg bg_hidden" style="background: url('<?php echo $large_image_url[0]; ?>') no-repeat center center #f5f5f5; background-size: 100% auto;"></div>
						</div>
				<?php
				elseif ($product_post == true) : ?>
						<div class="blog-thumb">
							<div class="g-thumbnail has_bg bg_hidden" style="background: url('<?php echo wc_placeholder_img_src(); ?>') no-repeat center center;"></div>
						</div>			
				<?php 
				endif;
				
		 // end post thumbnail check
		 endif; 
	 }
}

/**
 * Create gallery posts thumbnail
 * 
 */
if (function_exists('childtheme_override_gallery_thumbnail'))  {
	/**
	 * @ignore
	 */
	function gallery_thumbnail() {
		childtheme_override_gallery_thumbnail();
	}
} elseif ( !function_exists( 'gallery_thumbnail' ) ) {

	/**
	 * Create gallery posts thumbnail
	 * 
	 * Override: childtheme_override_gallery_thumbnail
	 */
	function gallery_thumbnail($post_id, $productp = false) {
			 
		global $gallery_thumb, $product;
		
		if ($productp == true) {
			$attachment_ids = $product->get_gallery_attachment_ids();
			$attachment_count_fg = count( $product->get_gallery_attachment_ids() );
			$attachment_count_sd = count( $product->get_gallery_attachment_ids() );
			$attachment_count_st = count( $product->get_gallery_attachment_ids() );

		} else {
			// get the meta data for the current post
			$post_gallery_thumb = get_post_meta( $post_id, '_fro_gal_thumb', true );
			$attachments = array_filter( explode( ',', $post_gallery_thumb ) );
			$attachment_count_fg = count( $attachments );
			$attachment_count_sd = count( $attachments );
			$attachment_count_st = count( $attachments );
		}
	
		$npx = 1;
		$npnx = 1;
		$npax = 1;
		$npcx = 0;
		$npcxl = 0;
		?>
	
	<div id="content-slider-<?php echo $post_id; ?>" class="content-slider">
	
	<?php

		// loop a set of field groups
		while($attachment_count_fg > 0) 
		{
			if ($npx == 1) {
			echo "<input data-role=\"none\" id=\"slide1-$post_id\" type=\"radio\" name=\"slider\" class=\"slide1\" checked >";
			}else {
			echo "<input data-role=\"none\" id=\"slide$npx-$post_id\" type=\"radio\" name=\"slider\" class=\"slide$npx\" >";
			}
			$npx++; $attachment_count_fg--;
		}
	?>
		<!-- The Slider -->
		
		<div id="slides_<?php echo $post_id; ?>" class="f_slides">
		
			<div class="overflow">
			
				<div class="inner">
				<?php if ($productp == true) {
					foreach ( $attachment_ids as $attachment_id ) { 
					
					$image_link = wp_get_attachment_url( $attachment_id );
					$image_title = esc_attr( get_the_title( $attachment_id ) );

					?>
					<article>
						<div class="info"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo $image_title; ?></a></div>
						<div class="gallery_slider_img has_bg bg_hidden" style="background-image: url(<?php echo esc_url($image_link); ?>); background-position: center center; background-size: 100% auto;"></div>
					</article>
					
				<?php } } else {
				
				if ( $attachments ) {
					foreach ( $attachments as $attachment_id ) {
					$image_title = get_post( $attachment_id ); // Get post by ID
					$image_link = wp_get_attachment_image_src( $attachment_id, 'medium');
					?>
					<article>							
						<div class="info"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo $image_title->post_excerpt; ?></a></div>
						<div class="gallery_slider_img has_bg bg_hidden" style="background-image: url(<?php echo esc_url($image_link[0]); ?>); background-position: center center; background-size: 100% auto;"></div>
					</article>
					<?php
					}
				}
				}?>
	
				</div> <!-- .inner -->
			</div> <!-- #overflow -->
		</div> <!-- #slides -->
	
		<!-- Active Slide Display -->
				
		<div id="active_<?php echo $post_id; ?>" class="slider-active">

		<?php while( $attachment_count_sd > 0)
		{
		
			echo "<label id=\"active$npax-$post_id\" for=\"slide$npax-$post_id\"></label>";
		
		$npax++; $attachment_count_sd--;
		}?>
		
		</div> <!-- #active -->
		
		
		
		<style type="text/css">
		
		/* Slider Setup */

		<?php
		$npcxp = 100;

		while( $attachment_count_st > 0)
		{
		$npcx++;
		
			if ($npcx == 1){
			echo "#slide$npcx-$post_id:checked ~ #slides_$post_id .inner { margin-left:0%; }\n";
			}else{
			echo "#slide$npcx-$post_id:checked ~ #slides_$post_id .inner { margin-left:-$npcxl%; }\n";			
			}
		
		$npcxl = $npcx * $npcxp; $attachment_count_st--;
		}
?>

		#slides_<?php echo $post_id; ?> .inner {
			width: <?php echo $npcxl; ?>%;
			line-height: 0;
		}
		
		#slides_<?php echo $post_id; ?> article {
			width: <?php echo 100 / $npcx; ?>%;
			float: left;
		}
		
		</style>
		
	</div>
	<?php
	}
}
add_action('get_gallery_thumbnail', 'gallery_thumbnail');

/**
 * Video post thumbnail
 * Return media if media embed code or media source
 * 
 * This is the main function for the media metabox.
 * It will check to see is the users has entered a media embed code,
 * or a media source and returns the media.
 */
function to_get_media( $post_id, $default_width = '', $default_height = '', $echo = true ) {
		
	$the_media = false;

		$media_source     = get_post_meta( $post_id, '_fro_vid_url', true );
		$media_embed_code = get_post_meta( $post_id, '_fro_vid_embed', true );
		$media_upload_mp4 = get_post_meta( $post_id, '_fro_mp4_url', true );
		$media_width  = $default_width;
		$media_height = $default_height;
		
	if ( ! empty( $media_embed_code ) ) {
		$the_media = $media_embed_code;
	}
	
	elseif ( ! empty( $media_source ) ) {
		$wp_embed = new WP_Embed();
		$the_media = $wp_embed->run_shortcode( '[embed width=' . $media_width . ' height=' . $media_height . ']' . $media_source . '[/embed]' );
	}
	
	elseif ( ! empty( $media_upload_mp4 ) ) {
		$the_media  = '<div class="media_mp4">';
		$the_media .= '<video width="' . $media_width . '" height="' . $media_height . '" controls="controls">';
		$the_media .= '<source src="' . esc_url($media_upload_mp4) . '" type="video/mp4">';
		$the_media .= __('Your browser does not support the video tag', 'frozr' );
		$the_media .= '</video></div>';

	} 
	
	if ( $echo ) :
		echo $the_media;
	else :
		return $the_media;
	endif;
}
add_action( 'get_media','to_get_media', 10, 4);

?>