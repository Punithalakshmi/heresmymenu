<?php
/**
 * Blog page template Extensions
 * 

 * @package FrozrCoreLibrary
 * @subpackage FrozrPageTemplates
 */
 

/**
 * Register action hook: frozr_blog_body
 * 
 * Located in template-blog.php.
 */
function frozr_blog_page_body() {
    do_action('frozr_blog_body');
} // end frozr_blog_body

/**
 * Create the blog body
 * 
 */
if (function_exists('childtheme_override_blog_body'))  {
	/**
	 * @ignore
	 */
	function blog_header() {
		childtheme_override_blog_body();
	}
} else {
	/**
	 * Create the blog body
	 * 
	 * Override: childtheme_override_blog_body
	 */
	function blog_body() {
	$blog_posts_per_page = get_theme_mod('blog_posts_counts','10');
	$blog_sticky_post = (get_theme_mod('blog_sticky') == true) ? 0 : 1;
	global $wp_query, $post;
	if (is_front_page()){
	$pag = 'page';
	} else {
	$pag = 'paged';
	} 
	$paged =( get_query_var($pag) ) ? get_query_var($pag) : 1;

	?>
	<?php if (is_front_page()) {frozr_welcome_msg();} ?>
		<div class="two-thirds-cloumn transitions-enabled masonry js-masonry" data-masonry-options='{ "isAnimated": true, "stamp": "#p-post", "itemSelector": ".brick", "columnWidth": ".blog-bg", "isOriginLeft": <?php echo frozr_theme_layout(); ?> }'><div class="blog-bg"></div>
			<?php query_posts(array('posts_per_page' =>$blog_posts_per_page, 'paged' => $paged, 'ignore_sticky_posts'=>$blog_sticky_post));
				$count = 1;
			if ($paged == 1 && $pag == 'paged'):
				while ( have_posts() && $count == 1 ) : the_post();?>
					<div id="p-post" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						<?php echo content_posts_test(); ?>
					</div><!--#p-post post-<?php the_ID(); ?>--><?php
				$count++;
				endwhile;
				if ($blog_posts_per_page != -1) {
				while ( have_posts() && $count <= $blog_posts_per_page ) : the_post();?>
					<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						<?php blog_posts_test(); ?>
					</div><!--#post-<?php the_ID(); ?>--><?php				
				$count++;
				endwhile;
				} else {
				while ( have_posts() ) : the_post();?>
					<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						<?php blog_posts_test(); ?>
					</div><!--#post-<?php the_ID(); ?>--><?php				
				$count++;
				endwhile;
				}
			else :
				while ( have_posts()) : the_post();?>					
					<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-isa audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						<?php blog_posts_test(); ?>
					</div><!--#post-<?php the_ID(); ?>--><?php				
				endwhile;
			endif;		
		echo "</div><!--.two-thirds-cloumn-->";
		//get posts navigation
		$total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) {
			frozr_navigation_below();
		}
		wp_reset_query();
		wp_reset_postdata();	

	}
}
add_action('frozr_blog_body', 'blog_body');