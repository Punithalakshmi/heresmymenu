<?php
/**
 * Featured Posts Extensions
 *
 *
 *
 * Featured posts are displayed in the homepage.
 * It uses jquery.pfold.js v1.0.0. Created by Codrops
 * License: http://tympanus.net/codrops/licensing/
 * learn more about pfold: http://tympanus.net/codrops/2012/10/17/pfold-paper-like-unfolding-effect/
 * 

 * @package FrozrCoreLibrary
 * @subpackage FeaturedExtensions
 */
 
/**
 * Register action hook: frozr_featured_posts
 * 
 * Located in index.php, just after the slider.
 */
function frozr_featured_posts() {
	//Get featured post options
	$show_featured = get_theme_mod('use_featured_posts', true);
	
	if ($show_featured == true){
	frozr_featured_posts_container();
    do_action('frozr_featured');
	frozr_featured_posts_container_closing();
	}
}
add_action('featured_posts','frozr_featured_posts');

/**
 * Create the featured posts container
 * 
 * Filter: frozr_featured_posts_container
 */
function frozr_featured_posts_container() {
    $content = '<div class="featured_post_cont">';
    echo apply_filters( 'frozr_featured_posts_container', $content );
}

/**
 * Create the featured posts header
 * 
 */
if (function_exists('childtheme_override_featured_posts_header'))  {
	/**
	 * @ignore
	 */
	function featured_posts_header() {
		childtheme_override_featured_posts_header();
	}
} else {
	/**
	 * Create the featured posts header
	 * 
	 * Override: childtheme_override_featured_posts_header
	 */
	function featured_posts_header() {	
	//Get featured post options
	$featured_cat_title = get_theme_mod('featured_post_title','Hand Picks!');
	$featured_posts_desc = get_theme_mod('featured_post_desc', 'Some more details here.');
	$featured_title_icon = get_theme_mod('featured_title_icon', 'none');
	$theme_layout = get_theme_mod('theme_layout','left');

	if ( !empty ($featured_cat_title) || !empty ($featured_posts_desc)) { ?>
	<div class="f-c-d">	
		<div class="fcd-c">
				<div class="featured-info">
					<div class="featured-cat-des"><span><?php if ($featured_title_icon != 'none' && $theme_layout == 'left') {echo '<i class="'. $featured_title_icon .'"></i>';} ?><?php echo $featured_cat_title; ?><?php if ($featured_title_icon != 'none' && $theme_layout == 'right') {echo '<i class="'. $featured_title_icon .'"></i>';} ?></span></div>
					<?php if ( !empty ($featured_posts_desc)):?>
					<div class="featured_posts_desc"><span><?php echo $featured_posts_desc; ?></span></div>
					<?php endif;?>
				</div>
		</div>
	</div>
	<?php }
	}
}
add_action('frozr_featured', 'featured_posts_header', 10);

/**
 * Create the featured posts body
 * 
 */
if (function_exists('childtheme_override_featured_posts_body'))  {
	/**
	 * @ignore
	 */
	function featured_posts_body() {
		childtheme_override_featured_posts_body();
	}
} else {
	/**
	 * Create the featured posts body
	 * 
	 * Override: childtheme_override_featured_posts_body
	 */
	function featured_posts_body() {
	global $wp_query, $post;

	//Get featured post options
	$feat_loop_type = get_theme_mod('feat_loop_type','posts');

	if ($feat_loop_type == 'products' && get_theme_mod('product_feat_loop') != null) {
	$featured_posts = get_theme_mod('product_feat_loop');
		$feat_type = 'product';
	} else {
	$featured_posts = get_theme_mod('post_feat_loop');
		$feat_type = 'post';
	}
	
	if (frozr_mobile()) {
	$featured_posts_num = "3";
	} else {
	$featured_posts_num = get_theme_mod('featured_posts_count','3');

	}
	$featured_posts_no = $featured_posts_num;
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	?>
	<div class="featured_post_wraapper"><div data-ajax="false" id="featured_post" class="js-masonry" data-masonry-options='{ "isAnimated": true, "isFitWidth": true, "itemSelector": ".view", "isOriginLeft": <?php echo frozr_theme_layout(); ?> }' >
	<?php query_posts( array ( 'post_type'=>$feat_type, 'post__in' =>$featured_posts, 'posts_per_page' =>$featured_posts_no, 'paged' => $paged, 'ignore_sticky_posts'=>1 ) );
		if ($paged == 1) :
			while ( have_posts() ) : the_post();?>
			    <div id="post-<?php the_ID(); ?>" class="view"><?php
					$format = get_post_format();
					if ( false == $format && $feat_type != 'product' ):
					featured_posts_first();
					elseif ($feat_type == 'product') :
					featured_posts_product();
					else :
					featured_posts_test();
					endif;						
			  echo "</div>";
			endwhile;
		else :
			while ( have_posts() ) : the_post();?>
			    <div id="post-<?php the_ID(); ?>" class="<?php if (get_post_format() == 'audio'): echo 'audio-isa view'; else : echo 'view'; endif; ?>"><?php

					if ($feat_type == 'product') :
					featured_posts_product();
					else :
					featured_posts_test();
					endif;
					
				echo "</div>";
			endwhile;
		endif;
	echo "</div></div>";
		//get posts navigation
		$total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) :
			frozr_nav_below(true);
		endif;
		wp_reset_query();
		wp_reset_postdata();	

	}
}
add_action('frozr_featured', 'featured_posts_body', 20);

/**
 * Create the featured posts navigation
 * 
 */
if (function_exists('childtheme_override_frozr_posts_navigation'))  {
	/**
	 * @ignore
	 */
	function frozr_posts_navigation() {
		childtheme_override_frozr_posts_navigation();
	}
} else {
	/**
	 * Create the featured posts navigation
	 * 
	 * Override: childtheme_override_frozr_posts_navigation
	 */
	function frozr_posts_navigation() {

	}
}
add_action('frozr_featured', 'frozr_posts_navigation', 30);

/**
 * Create the featured posts container closing
 * 
 * Filter: frozr_featured_posts_container_closing
 */
function frozr_featured_posts_container_closing() {
    $content = '</div>';
    echo apply_filters( 'frozr_featured_posts_container_closing', $content );
}
/**
 * Featured posts thumbnail setup
 * 
 */
if (function_exists('childtheme_override_featured_posts_thumbnail'))  {
	/**
	 * @ignore
	 */
	function featured_posts_thumbnail() {
		childtheme_override_featured_posts_thumbnail();
	}
} else {
	/**
	 * Create the featured posts thumbnail
	 * 
	 * Override: childtheme_override_featured_posts_thumbnail
	 */
	function featured_posts_thumbnail($product_post = false) {
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

		// Show thumbnail if there is a post thumbnail 
		if ( $the_post_thumbnail ) :

			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);
			echo '<div class="featured-thumb has_bg bg_hidden" style="background: url( '.$large_image_url[0].') no-repeat center center #f5f5f5; background-size: 100% auto;"></div>';
			
		else : 
			echo "<div class=\"featured-no-thumb\">";
				
				$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
				if ( $images ) :
					$total_images = count( $images );
					$image = array_shift( $images );
					$large_image_url = wp_get_attachment_image_src( $image->ID, $thumb_size);
					echo '<div class="featured-thumb has_bg bg_hidden" style="background: url( '.$large_image_url[0].') no-repeat center center; background-size: 100% auto;"></div>';
				elseif ($product_post = true && class_exists( 'WooCommerce' ) ) :
					echo '<div class="featured-thumb has_bg bg_hidden" style="background: url( '.wc_placeholder_img_src().') no-repeat center center;"></div>';
				endif;
			echo "</div><!--.featured-no-thumb-->";

	endif; // end featured post thumbnail and media check
	}
}

/**
 * Create the featured first set of posts
 * 
 */
if (function_exists('childtheme_override_featured_posts_first'))  {
	/**
	 * @ignore
	 */
	function featured_posts_first() {
		childtheme_override_featured_posts_first();
	}
} else {
	/**
	 * Create the featured posts first
	 * 
	 * Override: childtheme_override_featured_posts_first
	 */
	function featured_posts_first() {
		global $post;
		$f_show_author = get_theme_mod('featured_author', true);
		$f_show_date = get_theme_mod('featured_date', true);
		
		if (frozr_mobile() && !frozr_tablet()) {
			$thumb_size = "medium";
		} else {
			$thumb_size = "large";
		}
		
		$the_post_thumbnail_test = get_the_post_thumbnail( $post->ID, $thumb_size);

		// Set post thumbnail
		if ( $the_post_thumbnail_test ) {
			$the_post_thumbnail = true;
		} else {
			$the_post_thumbnail = false;
		}
		
		if ( $the_post_thumbnail && frozr_mobile() ) : ?>
		
			<?php do_action('frozr_featured_image'); ?>
		
		<?php elseif ($the_post_thumbnail) : ?>
			<section class="f-contnt">
				<div id="post-<?php the_ID(); ?>" class="uc-container">
					<div class="uc-initial-content">
						<?php featured_posts_thumbnail(); ?>
						<span class="icon-eye fs-icon-search"></span>
					</div>
					<div class="uc-final-content">
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);
						echo '<div class="featured-thumb-full has_bg bg_hidden" style="background: url( '.$large_image_url[0].') no-repeat center center; background-size: 100% auto;"></div>';?>
						<div class="f-c-c">
							<div class="f-c-c-n">
								<?php if ($f_show_author == true) { ?>
								<div class="f_info">
									<span class="f_author"><span><?php _e('by ', 'frozr' ); the_author_posts_link(); ?></span></span>
								</div>
								<?php } ?>
								<div class="f-p-title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
								<div class="f-title-p"><p><?php custom_excerpt(200); ?></p></div>
							</div>
						</div>
						<span class="icon-cancel fs-icon-remove"></span>
					</div>
				</div><!-- / uc-container -->
			</section>
		<?php else : ?>
			<div id="post-<?php the_ID(); ?>" class="view-second">
				<div class="mask">
					<div class="mask-h2">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="f-p"><p><?php custom_excerpt_2(100); ?></p></div>
						<?php if ($f_show_author == true || $f_show_date == true) { ?>
						<div class="post-entry-meta">
							<span><?php 
							if ($f_show_date == true) {
							the_time(get_option( 'date_format' )); _e(' at ', 'frozr' ); the_time(get_option( 'date_format' )); }
							if ($f_show_author == true) {
							_e(', by ', 'frozr' ); the_author_posts_link(); }?></span>
							<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .post-entry-meta -->
						<?php } ?>
					</div>
				</div><!--.mask-->
			</div><!--.view-->
							
		<?php endif;
	}
}

/******************************
 Start featured posts formats
 ******************************/

 
/**
 * Main featured posts types test
 * 
 */
function featured_posts_test() {
	if (has_post_format('aside')):
	do_action('frozr_featured_aside');
	elseif (has_post_format('audio')): 
	do_action('frozr_featured_audio');
	elseif (has_post_format('gallery')) : 
	do_action('frozr_featured_gallery');
	elseif (has_post_format('link')) : 
	do_action('frozr_featured_link');
	elseif (has_post_format('image')) : 
	do_action('frozr_featured_image');
	elseif(has_post_format('quote')) : 
	do_action('frozr_featured_quote');
	elseif(has_post_format('status')) : 
	do_action('frozr_featured_status');
	elseif(has_post_format('video')) : 
	do_action('frozr_featured_video');
	else : 
	do_action('frozr_featured_standard');
	endif;
}
 

/**
 * Create featured posts standard format
 * 
 */
if (function_exists('childtheme_override_featured_posts_standard'))  {
	/**
	 * @ignore
	 */
	function featured_posts_standard() {
		childtheme_override_featured_posts_standard();
	}
} else {
	/**
	 * Create the featured posts standard
	 * 
	 * Override: childtheme_override_featured_posts_standard
	 */
	function featured_posts_standard() {
		global $post;
		
		$f_show_author = get_theme_mod('featured_author', true);
		$f_show_date = get_theme_mod('featured_date', true);
		
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
		
		if ( $the_post_thumbnail && frozr_mobile() ) : ?>
		
			<?php do_action('frozr_featured_image'); ?>
		
		<?php elseif ($the_post_thumbnail) : ?>
			<section class="f-contnt">
				<div id="post-<?php the_ID(); ?>" class="uc-container-infinit-scroll">
					<div class="uc-initial-content">
						<?php featured_posts_thumbnail(); ?>
						<span class="icon-eye-infinit-scroll fs-icon-search"></span>
					</div>
					<div class="uc-final-content">
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);
						echo '<div class="featured-thumb-full has_bg bg_hidden" style="background: url( '.$large_image_url[0].') no-repeat center center; background-size: 100% auto;"></div>';?>
						<div class="f-c-c">
							<div class="f-c-c-n">
								<?php if ($f_show_author == true) { ?>
								<div class="f_info">
									<span class="f_author"><span><?php _e('by ', 'frozr' ); the_author_posts_link(); ?></span></span>
								</div>
								<?php } ?>
								<div class="f-p-title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
								<div class="f-title-p"><p><?php custom_excerpt(200); ?></p></div>
							</div>
						</div>
						<span class="icon-cancel-infinit-scroll fs-icon-remove"></span>
					</div>
				</div><!-- / uc-container -->
			</section>
		<?php else : ?>
			<div id="post-<?php the_ID(); ?>" class="view-second">
				<div class="mask">
					<div class="mask-h2">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="f-p"><p><?php custom_excerpt_2(100); ?></p></div>
						<?php if ($f_show_author == true || $f_show_date == true) { ?>
						<div class="post-entry-meta">
							<span><?php 
							if ($f_show_date == true) {
							the_time(get_option( 'date_format' )); _e(' at ', 'frozr' ); the_time(get_option( 'date_format' )); }
							if ($f_show_author == true) {
							 _e(', by ', 'frozr' ); the_author_posts_link(); }?></span>
							<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .post-entry-meta -->
						<?php } ?>
					</div>
				</div><!--.mask-->
			</div><!--.view-->
							
		<?php endif;
	}
}
add_action('frozr_featured_standard', 'featured_posts_standard');

/**
 * Create featured posts aside
 * 
 */
if (function_exists('childtheme_override_featured_posts_aside'))  {
	/**
	 * @ignore
	 */
	function featured_posts_aside() {
		childtheme_override_featured_posts_aside();
	}
} else {
	/**
	 * Create the featured posts aside
	 * 
	 * Override: childtheme_override_featured_posts_aside
	 */
	function featured_posts_aside() {

	echo "<div class=\"post-content-f-as\"><div class=\"f-as-p-title-p\"><p>";
	echo custom_excerpt_2(150);
	echo "</p></div></div><!-- .post-content -->";
	}
}
add_action('frozr_featured_aside', 'featured_posts_aside');

/**
 * Create featured posts audio
 * 
 */
if (function_exists('childtheme_override_featured_posts_audio'))  {
	/**
	 * @ignore
	 */
	function featured_posts_audio() {
		childtheme_override_featured_posts_audio();
	}
} else {
	/**
	 * Create the featured posts audio
	 * 
	 * Override: childtheme_override_featured_posts_audio
	 */
	function featured_posts_audio() {
	global $post;
	
	if (frozr_mobile() && !frozr_tablet()) {
		$thumb_size = "medium";
	} else {
		$thumb_size = "large";
	}

		$mp3 = get_post_meta( $post->ID, '_fro_aud_mp3', true );
		$ogg = get_post_meta( $post->ID, '_fro_aud_oga', true );

		$the_post_thumbnail_test = get_the_post_thumbnail( $post->ID, $thumb_size );

		// Set post thumbnail
		if ( $the_post_thumbnail_test ) {
			$the_post_thumbnail = true;
		} else {
			$the_post_thumbnail = false;
		}
		
		$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );

		// Show thumbnail if there is a post thumbnail 
		if ( $the_post_thumbnail ) {

			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);
			echo '<div class="post-content-f-a has_bg bg_hidden" style="height: 100%;width: 100%;border: medium none;box-shadow: none;background: url( '.$large_image_url[0].') no-repeat center center #f5f5f5;">';
			
		} elseif ( $images ){ 				
					$total_images = count( $images );
					$image = array_shift( $images );
					$large_image_url = wp_get_attachment_image_src( $image->ID, $thumb_size );
					echo '<div class="post-content-f-a has_bg bg_hidden" style="height: 100%;width: 100%;border: medium none;box-shadow: none;background: url( '.$large_image_url[0].') no-repeat center center;">';
		}else {
		
			echo '<div class="post-content-f-a audio-standard">';
		}
					
		?>		
			
	<div class="featured_audio_post_title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="f-p-title-p"><p><?php custom_excerpt_2(100); ?></p></div>
	
	<div class="featured_post_audio_standard">
	
	<audio controls="controls">
	  <source src="<?php echo esc_url( $ogg ); ?>" type="audio/ogg">
	  <source src="<?php echo esc_url( $mp3 ); ?>" type="audio/mpeg">
	  <?php _e('Your browser does not support the audio element.', 'frozr' ); ?>
	</audio>
	
	</div>
	
	</div><!-- .post-content-f-a -->
	<?php
	}
}
add_action('frozr_featured_audio', 'featured_posts_audio');


/**
 * Create featured posts gallery
 * 
 */
if (function_exists('childtheme_override_featured_posts_gallery'))  {
	/**
	 * @ignore
	 */
	function featured_posts_gallery() {
		childtheme_override_featured_posts_gallery();
	}
} else {
	/**
	 * Create the featured posts gallery
	 * 
	 * Override: childtheme_override_featured_posts_gallery
	 */
	function featured_posts_gallery() {
	global $post;
	
	$meta = get_post_meta( $post->ID, '_fro_gal_thumb', true );
	$attachments = array_filter( explode( ',', $meta ) );

	if(!empty($attachments)) {
	
		do_action('get_gallery_thumbnail', $post->ID);
		
	} else { ?>
		<div class="view-first">
		<?php featured_posts_thumbnail(); ?>
		<div class="mask">
			<div class="mask-h2">
				<h2 class="ms-2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p><em><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php sprintf( esc_attr__( 'Permalink to %s', 'frozr' ), the_title_attribute() ); ?>" rel="bookmark">
					<?php frozr_post_total_gallery_images(); ?>
					</a></em></p>
			</div><!-- .mask-h2 -->
		</div>
	</div><!-- .view-first -->

	<?php }
	}
}
add_action('frozr_featured_gallery', 'featured_posts_gallery');

/**
 * Create featured posts link
 * 
 */
if (function_exists('childtheme_override_featured_posts_link'))  {
	/**
	 * @ignore
	 */
	function featured_posts_link() {
		childtheme_override_featured_posts_link();
	}
} else {
	/**
	 * Create the featured posts link
	 * 
	 * Override: childtheme_override_featured_posts_link
	 */
	function featured_posts_link() {

	global $post;
	
	if (frozr_mobile() && !frozr_tablet()) {
		$thumb_size = "medium";
	} else {
		$thumb_size = "large";
	}

		$title = get_post_meta( $post->ID, '_fro_link_title', true );
		$link = get_post_meta( $post->ID, '_fro_link_url', true );


		$the_post_thumbnail_test = get_the_post_thumbnail( $post->ID, $thumb_size );

		// Set post thumbnail
		if ( $the_post_thumbnail_test ) {
			$the_post_thumbnail = true;
		} else {
			$the_post_thumbnail = false;
		}
		
		$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );

		// Show thumbnail if there is a post thumbnail 
		if ( $the_post_thumbnail ) {

			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);
			echo '<div class="f-li-img-post has_bg bg_hidden" style="height: 100%;width: 100%;border: medium none;box-shadow: none;background: url( '.$large_image_url[0].') no-repeat center center #f5f5f5;">';
			
		} elseif ( $images ){ 				
					$total_images = count( $images );
					$image = array_shift( $images );
					$large_image_url = wp_get_attachment_image_src( $image->ID, $thumb_size);
					echo '<div class="f-li-img-post has_bg bg_hidden" style="height: 100%;width: 100%;border: medium none;box-shadow: none;background: url( '.$large_image_url[0].') no-repeat center center;">';
		}else {
		
			echo '<div class="f-li-img-post f-no-thumb">';
		}
					
		?>		
			
	<div class="f-post-content-link">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="f-p-title-p"><p><?php custom_excerpt_2(100); ?></p></div>
	
	<div class="featured_post_link">
		<a href="<?php echo esc_url( $link ); ?>" rel="bookmark" title="<?php echo esc_attr( $title, 'frozr' ); ?>"><i class="fs-icon-link"></i><?php echo $title; ?></a></h2>
	</div>
	
	</div><!-- .post-content-f-a -->
	<?php

	
	}
}
add_action('frozr_featured_link', 'featured_posts_link');

/**
 * Create featured posts image
 * 
 */
if (function_exists('childtheme_override_featured_posts_image'))  {
	/**
	 * @ignore
	 */
	function featured_posts_image() {
		childtheme_override_featured_posts_image();
	}
} else {
	/**
	 * Create the featured posts image
	 * 
	 * Override: childtheme_override_featured_posts_image
	 */
	function featured_posts_image() {
	global $post;
		
	if (frozr_mobile() && !frozr_tablet()) {
		$thumb_size = "medium";
	} else {
		$thumb_size = "large";
	}

	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);?>
							
	<a href="<?php the_permalink(); ?>" title="<?php __('Open', 'frozr' ); the_title_attribute(); ?>">
		<div class="featured-thumb">
			<div class="has_bg bg_hidden" style="background: url('<?php echo $large_image_url[0]; ?>') no-repeat center center;"></div>
		</div>
	</a>
	<?php
	}
}
add_action('frozr_featured_image', 'featured_posts_image');

/**
 * Create featured posts quote
 * 
 */
if (function_exists('childtheme_override_featured_posts_quote'))  {
	/**
	 * @ignore
	 */
	function featured_posts_quote() {
		childtheme_override_featured_posts_quote();
	}
} else {
	/**
	 * Create the featured posts quote
	 * 
	 * Override: childtheme_override_featured_posts_quote
	 */
	function featured_posts_quote() {?>
							
	<div class="mb-wrap-cont">
		<div class="mb-wrap-3 mb-style-4">
			<blockquote>
				<p><?php custom_excerpt_2(160); ?></p>
			</blockquote>
			<cite><?php the_author_posts_link(); ?></cite>
		</div><!-- .mb-wrap -->
	</div>
	<?php
	}
}
add_action('frozr_featured_quote', 'featured_posts_quote');

/**
 * Create featured posts status
 * 
 */
if (function_exists('childtheme_override_featured_posts_status'))  {
	/**
	 * @ignore
	 */
	function featured_posts_status() {
		childtheme_override_featured_posts_status();
	}
} else {
	/**
	 * Create the featured posts status
	 * 
	 * Override: childtheme_override_featured_posts_status
	 */
	function featured_posts_status() {?>
							
	<div class="post-content-status">
		<div class="p-cs">
			<div class="author-p status-pic-2" style="background:url('<?php echo get_avatar_url(get_the_author_meta('ID')); ?>') no-repeat center center; background-size: 100% auto;"></a></div>
			<div class="status-2">
				<span class="author-vcard status-2-a"><?php the_author_posts_link(); ?></span>
				<div class="blog-p-title-p status-2-p"><p><?php custom_excerpt_2(160); ?></p></div>
				<span class="entry-date"><abbr class="published" title="<?php the_time(get_option( 'date_format' )); ?>"><?php the_time(get_option( 'date_format' ) ); ?></abbr></span>
				<?php edit_post_link( __( 'Edit', 'frozr' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .status -->
		</div>
	</div><!-- .post-content-status -->
	<?php
	}
}
add_action('frozr_featured_status', 'featured_posts_status');

/**
 * Create featured posts video
 * 
 */
if (function_exists('childtheme_override_featured_posts_video'))  {
	/**
	 * @ignore
	 */
	function featured_posts_video() {
		childtheme_override_featured_posts_video();
	}
} else {
	/**
	 * Create the featured posts video
	 * 
	 * Override: childtheme_override_featured_posts_video
	 */
	function featured_posts_video() {
	
	global  $post;
	?>
	<div class="featured_video_post_title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="featured_post_embid">
		<figure class="f-video">
			<?php do_action( 'get_media', $post->ID, '300', '300', true ); ?>
		</figure>
	</div><!-- .featured_post_embid -->
	
	<?php }

}
add_action('frozr_featured_video', 'featured_posts_video');

/**
 * Create featured posts product
 * 
 */
if (function_exists('childtheme_override_featured_posts_product'))  {
	/**
	 * @ignore
	 */
	function featured_posts_product() {
		childtheme_override_featured_posts_product();
	}
} else {
	/**
	 * Create the featured posts product
	 * 
	 * Override: childtheme_override_featured_posts_product
	 */
	function featured_posts_product() {
		
		global $post, $woocommerce, $product;
		$attachment_count = count( $product->get_gallery_attachment_ids() );
		?>
		<div class="feat_product">
			<?php if ( $product->is_on_sale() ) : ?>
				<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . __( 'Sale!', 'frozr' ) . '</span>', $post, $product ); ?>
			<?php endif;
			if ( $attachment_count > 1 ) {
			/*Get the Thumbnail*/ gallery_thumbnail($post->ID, $productp = true);
			} else {
			/*Get the Thumbnail*/ featured_posts_thumbnail( true ); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" class="icon-eye-infinit-scroll fs-icon-search" title="<?php _e('View product details','frozr'); ?>"></a>
			<?php } ?>
			<div class="ad_to_crt">
				<span class="p_price"><?php woocommerce_template_loop_price(); ?></span>
			</div>
		</div>

	<?php }
	}
