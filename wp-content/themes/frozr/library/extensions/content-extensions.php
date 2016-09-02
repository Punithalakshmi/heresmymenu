<?php
/**
 * Content Extensions
 *
 * @package FrozrCoreLibrary
 * @subpackage ContentExtensions
 * @todo revisit docblock desciptions & tags
 */
 

/**
 * Register action hook: frozr_abovecontainer
 * 
 * Located in 404.php, archive.php, archives.php, attachement.php, author.php, category.php index.php, 
 * links.php, page.php, search.php, single.php, tag.php
 * Just between #main and #container
 */
function frozr_abovecontainer() {
    do_action('frozr_abovecontainer');
} // end frozr_abovecontainer


/**
 * Register action hook: frozr_abovecontent
 *
 * Located in 404.php, archive.php, archives.php, attachement.php, author.php, category.php index.php,
 * links.php, page.php, search.php, single.php, tag.php
 * Just between #main and #container
 */
function frozr_abovecontent() {
    do_action('frozr_abovecontent');
} // end frozr_abovecontent


/**
 * Register action hook: frozr_abovepost 
 *
 * Located in 404.php, archives.php, attachment.php, links.php, page.php, search.php and template-page-fullwidth.php
 * Just above #post
 */
function frozr_abovepost() {
    do_action('frozr_abovepost');
} // end frozr_abovepost


/**
 * Register action hook: frozr_archives 
 *
 * Located in archives.php
 * Just after the content
 */
function frozr_archives() {
	do_action('frozr_archives');
} // end frozr_archives


/**
 * Register action hook: frozr_navigation_below 
 *
 * Located in archive.php, author.php, category.php, index.php, search.php, single.php, tag.php
 * Just after the content
 */
function frozr_navigation_below() {
	do_action('frozr_navigation_below');
} // end frozr_navigation_below


/**
 * Register action hook: frozr_above_indexloop 
 *
 * Located in index.php 
 * Just before the loop
 */
function frozr_above_indexloop() {
    do_action('frozr_above_indexloop');
} // end frozr_above_indexloop


/**
 * Register action hook: frozr_above_archiveloop 
 *
 * Located in archive.php 
 * Just before the loop
 */
function frozr_above_archiveloop() {
    do_action('frozr_above_archiveloop');
} // end frozr_above_archiveloop


/**
 * Register action hook: frozr_archiveloop 
 *
 * Located in archive.php
 * The Loop used on archive pages
 */
function frozr_archiveloop() {
	do_action('frozr_archiveloop');
} // end frozr_archiveloop


/**
 * Register action hook: frozr_authorloop 
 *
 * Located in author.pgp
 * The Loop used on author pages
 */
function frozr_authorloop() {
	do_action('frozr_authorloop');
} // end frozr_authorloop


/**
 * Register action hook: frozr_categoryloop 
 *
 * Located in category.php
 * The Loop used on category pages
 */
function frozr_categoryloop() {
	do_action('frozr_categoryloop');
} // end frozr_categoryloop


/**
 * Register action hook: frozr_indexloop 
 *
 * Located in index.php
 * The default loop
 */
function frozr_indexloop() {
	do_action('frozr_indexloop');
} // end frozr_indexloop


/**
 * Register action hook: frozr_searchloop 
 *
 * Located in search.php
 * The loop used on search result pages
 */
function frozr_searchloop() {
	do_action('frozr_searchloop');
} // end frozr_searchloop


/**
 * Register action hook: frozr_singlepost 
 *
 * Located in single.php
 * The Loop on single pages
 */
function frozr_singlepost() {
	do_action('frozr_singlepost');
} //end frozr_singlepost


/**
 * Register action hook: frozr_tagloop 
 *
 * Located in tag.php
 * The Loop on tag archive pages
 */
function frozr_tagloop() {
	do_action('frozr_tagloop');
} // end frozr_tagloop


/**
 * Register action hook: frozr_below_indexloop 
 *
 * Located in index.php
 * Just after the loop
 */
function frozr_below_indexloop() {
    do_action('frozr_below_indexloop');
} // end frozr_below_indexloop


/**
 * Register action hook: frozr_below_archiveloop 
 *
 * Located in archive.php
 * Just after the loop
 */
function frozr_below_archiveloop() {
    do_action('frozr_below_archiveloop');
} // end frozr_below_archiveloop


/**
 * Register action hook: frozr_above_categoryloop 
 *
 * Located in category.php
 * Just before the loop
 */
function frozr_above_categoryloop() {
    do_action('frozr_above_categoryloop');
} // end frozr_above_categoryloop


/**
 * Register action hook: frozr_below_categoryloop 
 *
 * Located in category.php
 * Just after the loop
 */
function frozr_below_categoryloop() {
    do_action('frozr_below_categoryloop');
} // end frozr_below_categoryloop


/**
 * Register action hook: frozr_above_searchloop 
 *
 * Located in search.php
 * Just before the loop
 */
function frozr_above_searchloop() {
    do_action('frozr_above_searchloop');
} // end frozr_above_searchloop


/**
 * Register action hook: frozr_below_searchloop 
 *
 * Located in search.php
 * Just after the loop
 */
function frozr_below_searchloop() {
    do_action('frozr_below_searchloop');
} // end frozr_below_searchloop


/**
 * Register action hook: frozr_above_tagloop 
 *
 * Located in tag.php
 * Just before the loop
 */
function frozr_above_tagloop() {
    do_action('frozr_above_tagloop');
} // end frozr_above_tagloop


/**
 * Register action hook: frozr_init 
 *
 * Located in tag.php
 * Just after the loop
 */
function frozr_below_tagloop() {
    do_action('frozr_below_tagloop');
} // end frozr_below_tagloop


/**
 * Register action hook: frozr_belowpost 
 *
 * Located in 404.php, archives.php, attachment.php, links.php, page.php, search.php and template-page-fullwidth.php
 * Just below #post
 */
function frozr_belowpost() {
    do_action('frozr_belowpost');
} // end frozr_belowpost


/**
 * Register action hook: frozr_belowcontent 
 *
 * Located in 404.php, archive.php, archives.php, attachement.php, author.php, category.php index.php, 
 * links.php, page.php, search.php, single.php, tag.php
 * Just below #content
 */
function frozr_belowcontent() {
    do_action('frozr_belowcontent');
} // end frozr_belowcontent


/**
 * Register action hook: frozr_belowcontainer 
 *
 * Located in 404.php, archive.php, archives.php, attachement.php, author.php, category.php index.php,
 * links.php, page.php, search.php, single.php, tag.php
 * Just below #container
 */
function frozr_belowcontainer() {
    do_action('frozr_belowcontainer');
} // end frozr_belowcontainer


if (function_exists('childtheme_override_page_title'))  {
	/**
	 * @ignore
	 */
	function frozr_page_title() {
		childtheme_override_page_title();
	}
} else {
	/**
	 * Create the page title.
	 * 
	 * Echoes the title of the webpage for specific queries. The markup is conditionally set using template tags.
	 * Located in templates: archive.php, attachement.php, author.php, category.php, search.php, tag.php
	 * 
	 * Override: childtheme_override_page_title <br>
	 * Filter: frozr_page_title 
	 * 
	 * @todo review and remove possiblity for displaying an empty div for archive-meta
	 */
	function frozr_page_title() {
		
		global $post;
		
		$content = "\t\t\t\t";
		if (is_attachment()) {
				$content .= '<h2 class="page-title"><a href="';
				$content .= apply_filters('the_permalink',get_permalink($post->post_parent));
				$content .= '" rev="attachment"><span class="meta-nav">&laquo;</span>';
				$content .= get_the_title($post->post_parent);
				$content .= '</a></h2>';
		} elseif (is_author()) {
				$content .= '<h1 class="page-title author">';
				$author = get_the_author_meta( 'display_name', $post->post_author );
				$content .= __('Author Archives:', 'frozr' );
				$content .= ' <span>' . $author .'</span>';
				$content .= '</h1>';
		} elseif (is_category()) {
				$content .= '<div class="author-page-head">';
				$content .= '<div class="page-title-wrapper"><div class="category-page-title">';
				$content .= '<h1 class="page-title-category">';
				$content .= ' <span>' . single_cat_title('', FALSE) .'</span>';
				$content .= '</h1></div>' . "\n";
				$content .= "\n\t\t\t\t" . '<div class="category-page-info">';
				if ( !(''== category_description()) ) : $content .= apply_filters('archive_meta', category_description()); endif;
				$cate	  = get_query_var('cat');
				$categories=  get_categories("child_of=$cate"); 
				$content .= $category->description;
				  foreach ($categories as $category) {
					$content .= '<ul class="sub-category">';
					$content .= '<li>';
					$content .= '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s", 'frozr' ), $category->name ) . '" ' . '>' . $category->name.'</a>';
					$content .= ' ('.$category->category_count.')';
					$content .= '</li>';
					$content .= '</ul>';
				  }
				$content .= '</div></div></div>';
		} elseif (is_search()) {
				$content .= '<div class="author-page-head">';
				$content .= '<div class="page-title-wrapper"><h1 class="page-title-search">';
				$content .= __('Search Results for:', 'frozr' );
				$content .= ' <span id="search-terms">' . get_search_query() .'</span>';
				$content .= '</h1>';
				$content .= '</div></div>';
		} elseif (is_tag()) {
				$content .= '<div class="archive-page-head">';
				$content .= '<div class="page-title-wrapper">';
				$content .= '<h1 class="page-title">';
				$content .= ' <span>';
				$content .= single_tag_title( '', false );
				$content .= '</span></h1></div></div>';
		} elseif (is_tax()) {
			    global $taxonomy;
				$content .= '<div class="archive-page-head">';
				$content .= '<div class="page-title-wrapper">';
				$content .= '<h1 class="page-title">';
				$tax = get_taxonomy($taxonomy);
				$content .= $tax->labels->singular_name . ' ';
				$content .= ' <span>' . frozr_get_term_name() .'</span>';
				$content .= '</h1></div></div>';
 		} elseif (is_post_type_archive()) { 
				$content .= '<div class="author-page-head">';
				$content .= '<div class="archive-title">';
				$content .= '<h1 class="page-title">';
				$post_type_obj = get_post_type_object( get_post_type() );
				$post_type_name = $post_type_obj->labels->singular_name;
				$content .= __('Archives:', 'frozr' );
				$content .= ' <span>' . $post_type_name . '</span>';
				$content .= '</h1></div></div>';	
		} elseif (is_day()) {
				$content .= '<div class="archive-page-head">';
				$content .= '<div class="archive-title">';
				$content .= '<h1 class="page-title">';
				$content .= sprintf( __('Daily Archives: %s', 'frozr' ), '<span>' . get_the_time( get_option('date_format') ) ) . '</span>';
				$content .= '</h1></div></div>';
		} elseif (is_month()) {
				$content .= '<div class="archive-page-head">';
				$content .= '<div class="archive-title">';
				$content .= '<h1 class="page-title">';
				$content .= sprintf( __('Monthly Archives: %s', 'frozr' ) , '<span>' . get_the_time('F Y') ) . '</span>';
				$content .= '</h1></div></div>';
		} elseif (is_year()) {
				$content .= '<div class="archive-page-head">';
				$content .= '<div class="archive-title">';
				$content .= '<h1 class="page-title">';
				$content .= sprintf( __('Yearly Archives: %s', 'frozr' ), '<span>' . get_the_time('Y') ) . '</span>';
				$content .= '</h1></div></div>';
		}
		$content .= "\n";
		echo apply_filters('frozr_page_title', $content);
	}
}

if (function_exists('childtheme_override_archive_loop'))  {
	/**
	 * @ignore
	 */
	function frozr_archive_loop() {
		childtheme_override_archive_loop();
	}
} else {
	/**
	 * The Archive loop
	 * 
	 * Located in archive.php
	 * 
	 * Override: childtheme_override_archive_loop
	 */
	function frozr_archive_loop() {
		global $paged;
		$count = 1;		
		if (!$paged):
		while ( have_posts() && $count < 12 ) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost(); 
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		
		$count++;
		endwhile;
		else :
		while ( have_posts()) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost(); 
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-isa audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
						<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		
		endwhile;
		endif;
	}
} // end archive_loop

add_action('frozr_archiveloop', 'frozr_archive_loop');


if (function_exists('childtheme_override_author_loop'))  {
	/**
	 * @ignore
	 */
	function frozr_author_loop() {
		childtheme_override_author_loop();
	}
} else {
	/**
	 * The Author loop
	 * 
	 * Located in author.php
	 * 
	 * Override: childtheme_override_author_loop
	 */
	function frozr_author_loop() {
		rewind_posts();
		global $paged;
		$count = 1;		
		if (!$paged):
		while ( have_posts() && $count < 12) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost();
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		$count++;
		endwhile;
		else :
		while ( have_posts() ) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost();
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-isa audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		endwhile;
		endif;
	}
} // end author_loop

add_action('frozr_authorloop', 'frozr_author_loop');


if (function_exists('childtheme_override_category_loop'))  {
	/**
	 * @ignore
	 */
	function frozr_category_loop() {
		childtheme_override_category_loop();
	}
} else {
	/**
	 * The Category loop
	 * 
	 * Located in category.php
	 * 
	 * Override: childtheme_override_category_loop
	 */
	function frozr_category_loop() {
		global $paged;
		$count = 1;		
		if (!$paged):
		while ( have_posts() && $count < 12) : the_post(); 

				// action hook for inserting content above #post
				frozr_abovepost();
				?>
	
				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for inserting content below #post
				frozr_belowpost();
		
		$count++;		
		endwhile;
		else :
		while ( have_posts() ) : the_post(); 

				// action hook for inserting content above #post
				frozr_abovepost();
				?>
				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-isa audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for inserting content below #post
				frozr_belowpost();
		
		endwhile;
		endif;
	}
} // end category_loop

add_action('frozr_categoryloop', 'frozr_category_loop');

if (function_exists('childtheme_override_single_post'))  {
	/**
	 * @ignore
	 */
	function frozr_single_post() {
		childtheme_override_single_post();
	}
} else {
	/**
	 * The Single post loop
	 * 
	 * Located in single.php
	 * 
	 * Override: childtheme_override_single_post
	 */
	function frozr_single_post() {
	global $post;
	$frozr_stored_meta = get_post_meta( $post->ID );
	$single_show_share = $frozr_stored_meta['_fro_sing_share'][0];
	
	if ($frozr_stored_meta['_fro_quick_links'][0] == "yes") { ?>
		<div data-role="panel" id="panel<?php the_ID(); ?>" class="frozr_contents_table" data-position="right" data-display="overlay" data-ajax="false"><ul data-role="listview"><li data-role="list-divider" role="heading" class="fro_contents_title"><?php echo get_the_title(); ?></li></ul></div>
    <?php }
			// action hook for insterting content above #post
			frozr_abovepost();?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 

				<div class="post_entry_header">
				<?php echo frozr_postheader_posttitle();?>
				</div>
				<div class="post-cont-sing">
				
				<?php if (check_post_meta()) { ?>
					<div class="post-entry-utility">
					<?php
					
						// creating the post header
						frozr_postheader();
						
						//action hook to get the social icons
						if ($single_show_share == 'yes') { 
							do_action('frozr_social_sharing');
						}
					?>
					</div><!-- .post-entry-utility -->
				<?php } ?>
				
				<div class="single-post-content">
					<div class="sing_content">
					<?php frozr_content(); ?>
					</div>
					<?php
					wp_link_pages(array('before' => sprintf('<div class="page-link">%s', __('Pages:', 'frozr' )), 'after' => '</div>'));
					// create the navigation below the content
					frozr_navigation_below();
				
					// action hook for calling the comments_template ?>
					<div class="comments-container">
					<?php frozr_comments_template(); ?>
					</div>
						
				</div><!-- .single-post-content -->
				
				<?php // calling the widget area 'single-insert'
				get_sidebar('single-insert');?>
				
				</div>
				</div><!-- #post -->
				
				<?php
				if ($frozr_stored_meta['_fro_quick_links'][0] == "yes") { ?>
					<script>
						jQuery(document).ready(function($){
							
							if ($('.sing_content h1, .sing_content h2').length) {
								$('.post_entry_header').append('<a data-role="button" href="#panel<?php the_ID(); ?>" class="frozr-open-quicklink-panel" title="<?php _e('Quick Links' ,'frozr'); ?>" ><i class="fs-icon-list-alt"></i><?php _e(' Contents' ,'frozr'); ?></a>');
							}
							var nx = 0;
							$('.sing_content h1, .sing_content h2').each(function () {
								var content = $(this).text();
								$(this).attr('id','link-'+nx);
								$('#panel<?php the_ID(); ?> > .ui-panel-inner > ul').append('<li><a href="#link-'+nx+'" data-ajax="false" data-rel="close" >'+content+'</a></li>');
							nx++;
							});
							$( "#panel<?php the_ID(); ?>" ).trigger( "updatelayout" );
							
						} )( jQuery );
					</script>
			<?php }

			// action hook for insterting content below #post
			frozr_belowpost();
	}
} // end single_post

add_action('frozr_singlepost', 'frozr_single_post');

/*check to see if we have any post meta active*/
function check_post_meta() {
		global $post;
		$frozr_stored_meta = get_post_meta( $post->ID );
 	   	
		$single_show_meta = $frozr_stored_meta['_fro_sing_cat'][0];
		$single_show_meta .= $frozr_stored_meta['_fro_sing_bookmark'][0];
		$single_show_meta .= $frozr_stored_meta['_fro_sing_tags'][0];	
		$single_show_meta .= $frozr_stored_meta['_fro_sing_author'][0];
		$single_show_meta .= $frozr_stored_meta['_fro_sing_date'][0];	
		$single_show_meta .= $frozr_stored_meta['_fro_sing_archive'][0];	
		$single_show_meta .= $frozr_stored_meta['_fro_sing_comments'][0];	
		$single_show_meta .= $frozr_stored_meta['_fro_sing_share'][0];
	
	return $single_show_meta;

}
/*check to see if we have any page meta active*/
function check_page_meta() {
	global $post;
	$frozr_stored_meta = get_post_meta( $post->ID );
 	   	
	$page_show_meta = $frozr_stored_meta['_fro_page_thumb'][0];
	$page_show_meta .= $frozr_stored_meta['_fro_page_subs'][0];
	$page_show_meta .= $frozr_stored_meta['_fro_page_tags'][0];	
	$page_show_meta .= $frozr_stored_meta['_fro_page_socials'][0];
	
	return $page_show_meta;

}
if (function_exists('childtheme_override_search_loop'))  {
	/**
	 * @ignore
	 */
	function frozr_search_loop() {
		childtheme_override_search_loop();
	}
} else {
	/**
	 * The Search loop
	 * 
	 * Located in search.php
	 * 
	 * Override: childtheme_override_search_loop
	 */
	function frozr_search_loop() {
		global $paged;
		$count = 1;		
		if (!$paged):
		while ( have_posts() && $count < 12) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost();
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		
		$count++;		
		endwhile;
		else :
		while ( have_posts() ) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost();
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-isa audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		
		endwhile;
		endif;
	}
} // end search_loop

add_action('frozr_searchloop', 'frozr_search_loop');


if (function_exists('childtheme_override_tag_loop'))  {
	/**
	 * @ignore
	 */
	function frozr_tag_loop() {
		childtheme_override_tag_loop();
	}
} else {
	/**
	 * The Tag loop
	 * 
	 * Located in tag.php
	 * 
	 * Override: childtheme_override_tag_loop
	 */
	function frozr_tag_loop() {
		global $paged;
		$count = 1;		
		if (!$paged):
		while ( have_posts() && $count < 12) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost(); 
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
					<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		
		$count++;		
		endwhile;
		else :
		while ( have_posts() ) : the_post(); 

				// action hook for insterting content above #post
				frozr_abovepost(); 
				?>

				<div id="post-<?php the_ID(); ?>" class="<?php if (has_post_format('image')): echo 'brick image-bg'; elseif (has_post_format('gallery')): echo 'brick gallery-bg'; elseif (has_post_format('audio')): echo 'brick audio-isa audio-bg'; elseif (has_post_format('image')) : echo 'brick image-bg-2'; elseif(has_post_format('video')) : echo 'brick video-bg'; else : echo 'brick'; endif;?>">
						
						<?php frozr_content(); ?>

				</div><!-- #post -->

			<?php 
				// action hook for insterting content below #post
				frozr_belowpost();
		
		endwhile;
		endif;
	}
} // end tag_loop

add_action('frozr_tagloop', 'frozr_tag_loop');


/**
 * Filter: frozr_time_title
 * 
 * Create the time url title displayed in the post header
 */
function frozr_time_title() {

	$time_title = 'Y-m-d\TH:i:sO';
	
	// Filters should return correct 
	$time_title = apply_filters('frozr_time_title', $time_title);
	
	return $time_title;
} // end time_title


/**
 * Filter: frozr_time_display
 * 
 * Create the time displayed in the post header
 */
function frozr_time_display() {

	$time_display = get_option('date_format');
	
	// Filters should return correct 
	$time_display = apply_filters('frozr_time_display', $time_display);
	
	return $time_display;
} // end time_display


if (function_exists('childtheme_override_postheader'))  {
	/**
	 * @ignore
	 */
	function frozr_postheader() {
		childtheme_override_postheader();
	}
} else {
	/**
	 * Create the post header
	 * 
	 * Override: childtheme_override_postheader <br>
	 * Filter: frozr_postheader
	 */
	function frozr_postheader() {
 	   global $post;

 	   	$single_show_category = get_post_meta( $post->ID, '_fro_sing_cat', true);
		$single_show_bookmark = get_post_meta( $post->ID, '_fro_sing_bookmark', true);
		$single_show_tags = get_post_meta( $post->ID, '_fro_sing_tags', true);	
		$single_show_author = get_post_meta( $post->ID, '_fro_sing_author', true);
		$single_show_date = get_post_meta( $post->ID, '_fro_sing_date', true);
		$single_show_archive = get_post_meta( $post->ID, '_fro_sing_archive', true);
		$single_show_comments = get_post_meta( $post->ID, '_fro_sing_comments', true);

		$postheader = '';
		
		$post_type = get_post_type();
	    $post_type_obj = get_post_type_object($post_type);

 	   if ( is_404() || $post->post_type == 'page' || is_page_template('template-page-archives.php')) {
 	       $postheader = frozr_postheader_posttitle();        
 	   } elseif ( !is_single() ) {
 	       $postheader = frozr_postheader_posttitle() . frozr_postheader_postmeta();    
 	   }
		if ( is_single() ) {
				if ($single_show_category == 'yes') {
					if ( has_category()) {
					$postheader .= '<div class="single_category"><a>' . __('Category', 'frozr' ) .'</a>' .  "\n\n";
					$postheader .= frozr_postfooter_postcategory();
					$postheader .= '</div><!-- .single_category -->' . "\n";
					}
				}
				if ($single_show_bookmark =='yes') {
					$postheader .= '<div class="single_link"><a>' . __('Bookmark', 'frozr' ) .'</a>' .  "\n\n";
					$postheader .= '<span class="post-info-book">' . "\n\n";
					$postheader .= sprintf( _x('Bookmark the %1$spermalink%2$s.', '1s and 2s are the a href link wrappers, do not reverse them', 'frozr' ), sprintf('<a title="%s" href="%s">', sprintf( esc_attr__('Permalink to %s', 'frozr' ), the_title_attribute( 'echo=0' ) ), apply_filters('the_permalink', get_permalink())) , '</a>') . ' ';
					$postheader .= '</span><!-- .post-info-book -->' . "\n";
					$postheader .= '</div><!-- .single_link -->' . "\n";
				}			
				/* This is used to display custom taxonomy in single posts pages.
				   This is a default classification replace $my_tax with your custom taxonomy title
				   Also replace 'my tax name' and <strong>My Custom Taxonomy</strong> with your custom taxonomy title
				   this is just one taxonomy variable, you can add as many as you want. 
				   to make use of this un-comment and modify the custom taxonomy variables below
				   */
				
				//$my_tax	= get_the_term_list( $post->ID, 'frozr', 'My Custom Taxonomy', ', ', '' ); 
				//if ( '' != $my_tax ) { 
				
					//$postheader .= '<div class="single_tax"><a>' . __('Taxonomy', 'frozr' ) .'</a>' .  "\n\n";
					//$postheader .= '<span class="single_tax_info">' . "\n\n";
					//$postheader .= "$my_tax";  
					//$postheader .= '</span><!-- .single_tax_info -->' . "\n";
					//$postheader .= '</div><!-- .single_tax -->' . "\n";
				//}
				if ($single_show_tags =='yes') {
					if ( has_tag()) {
					$postheader .= '<div class="single_tag"><a>' . __('Tags', 'frozr' ) .'</a>' .  "\n\n";
					$postheader .= frozr_postfooter_posttags();
					$postheader .= '</div><!-- .single_tag -->' . "\n";
					}
				}
				
				if (current_user_can('edit_posts')) {
					$postheader .= '<div class="single_edit_link">' . "\n\n";
					$postheader .= frozr_postfooter_posteditlink();
					$postheader .= '</div><!-- .single_edit_link -->' . "\n";
				}
				if ($single_show_author =='yes') {
					$postheader .= '<div class="single_author_pic"><a>' . __('Author', 'frozr' ) .'</a>' . "\n\n";
					$postheader .= frozr_postmeta_authorlink();
					$postheader .= '</div><!-- .single_author_pic -->' . "\n";
				}
				if ($single_show_date =='yes') {
					$postheader .= '<div class="single_entry_date"><a>' . __('Date', 'frozr' ) .'</a>' . "\n\n";
					$postheader .= frozr_postmeta_entrydate();
					$postheader .= '</div><!-- .single_entry_date -->' . "\n";
				}
	        	$post_type_archive_link = ( function_exists( 'get_post_type_archive_link' )  ? get_post_type_archive_link( $post_type ) :  home_url( '/?post_type=' . $post_type ) );
	        	if ($single_show_archive =='yes') {
					if ( frozr_is_custom_post_type() && $post_type_obj->has_archive ) {
						$postheader .= '<div class="single_entry_archive"><a>' . __('Archive', 'frozr' ) .'</a><span class="single_archive">' . "\n\n";
						/* translators: %s is custom post type singular name, wrapped in link tags */
						$postheader .= sprintf( __( 'Browse the %s archive.', 'frozr' ), 
						/* translators: %s is custom post type singular name */
						' <a href="' . $post_type_archive_link . '" title="' . sprintf( esc_attr__( 'Permalink to %s Archive', 'frozr' ), $post_type_obj->labels->singular_name )  . '">' . $post_type_obj->labels->singular_name . '</a>'
						);
						$postheader .= '</span></div><!-- .single_entry_archive -->' . "\n";
					}
				}
	    		if ($single_show_comments =='yes') {
					if ( post_type_supports( $post_type, 'comments') ) {
						
						$postheader .= '<div class="single_comments_info"><a>' . __('Comments', 'frozr' ) .'</a><span class="single_comments">' . "\n\n";
						$postheader .= frozr_postfooter_postcomments();
						$postheader .= frozr_postfooter_postconnect();
						$postheader .= '</span></div><!-- .single_comments_info -->' . "\n";
					}
				}

	        }
 	   
 	   echo apply_filters( 'frozr_postheader', $postheader ); // Filter to override default post header
	}
}  // end postheader


if (function_exists('childtheme_override_postheader_posteditlink'))  {
	/**
	 * @ignore
	 */
	function frozr_postheader_posteditlink() {
		return childtheme_override_postheader_posteditlink(); 
	}
} else {
	/**
	 * Create the post edit link
	 * 
	 * Override: childtheme_override_postheader_posteditlink <br>
	 * Filter: frozr_postheader_posteditlink
	 */
	function frozr_postheader_posteditlink() {

    	$posteditlink = sprintf( '<a href="%s" title="%s" class="edit">%s</a>' , 

			    			get_edit_post_link(),
			    			esc_attr__('Edit post', 'frozr' ),
							/* translators: post edit link */
			    			__('Edit', 'frozr' ));
		
		return apply_filters('frozr_postheader_posteditlink', $posteditlink); 

	}
} // end postheader_posteditlink


if (function_exists('childtheme_override_postheader_posttitle'))  {
	/**
	 * @ignore
	 */
	function frozr_postheader_posttitle() {
		return childtheme_override_postheader_posttitle();
	}
} else {
	/**
	 * Create the post title
	 * 
	 * Override: childtheme_override_postheader_posttitle <br>
	 * Filter: frozr_postheader_posttitle
	 */
	function frozr_postheader_posttitle() {
	$post_meta = '';
	$post_sidebar = '';
	$page_sidebar = '';
	$single_sidebar = '';

	if (frozr_mobile()) { if (check_post_meta()) { $post_meta = '<i class="mobi-info fs-icon-info-circle"></i>'; } $post_sidebar = '<i class="mobi-sidebar fs-icon-th-large"></i>';
		if (is_active_sidebar( 'page-inset' )) {
			$page_sidebar = $post_sidebar;
		} if (is_active_sidebar( 'single-insert' )) {
			$single_sidebar = $post_sidebar;
		}
		?>
		<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.mobi-info').click(function(){
				jQuery('.post-entry-utility').toggleClass('active');
			});
			jQuery('.mobi-sidebar').click(function(){
				jQuery('.single-insert-sidebar, .single-post-content, .shop-sidebar, .page-inset-sidebar').toggleClass('active');
			});
		});
		</script>
		<?php
	}

		if (class_exists( 'WooCommerce' ) && is_woocommerce()) {
			$title_content = woocommerce_page_title(false);			
		} elseif ( !$title_content = get_the_title() )  {
			$title_content = '<a href="' . get_permalink() . '">' . _x('(Untitled)', 'Default title for untitled posts', 'frozr' ) . '</a>';
		}
		$posttitle = '';
	    if (class_exists( 'WooCommerce' ) && is_woocommerce()) {
			$posttitle = '<span class="dokkan_page_title">'. $title_content . $post_sidebar .'</span>';
		} elseif (is_page_template('template-page-archives.php')) {
	        $posttitle = '<div class="archive-entry-header"><h1 class="archive-entry-title">' . $title_content . '</h1></div>';
	    } elseif ( is_page_template('template-page-fullwidth.php')) {
	        $posttitle = '<div class="page-entry-header"><h1 class="page-entry-title">' . $title_content .'</h1></div>';
	    }  elseif ( is_page()) {
	        $posttitle = '<div class="page-entry-header"><h1 class="page-entry-title simple-page">' . $title_content . $page_sidebar .'</h1></div>';
	    } elseif (is_single()) {    
	        $posttitle = '<h1 class="post-entry-title">' . $title_content . $post_meta . $single_sidebar . '</h1>';
		} elseif (is_404()) {    
	        $posttitle .= '<div class="no-content"><h1 class="entry-title">' . __('Nothing Found!','frozr') . '</h1></div>';
	    } else {
	        $posttitle = '<h2 class="entry-title">';
	        $posttitle .= sprintf('<a href="%s" title="%s" rel="bookmark">%s</a>',
	        						apply_filters('the_permalink', get_permalink()),
									sprintf( esc_attr__('Permalink to %s', 'frozr' ), the_title_attribute( 'echo=0' ) ),
	        						get_the_title());   
	        $posttitle .= '</h2>';
	    }
	    
	    return apply_filters('frozr_postheader_posttitle',$posttitle); 
	
	}
} // end postheader_posttitle


if (function_exists('childtheme_override_postheader_postmeta'))  {
	/**
	 * @ignore
	 */
	function frozr_postheader_postmeta() {
		return childtheme_override_postheader_postmeta();
	}
} else {
	/**
	 * Create the post meta
	 * 
	 * Override: childtheme_override_postheader_postmeta <br>
	 * Filter: frozr_postheader_postmeta
	 */
	function frozr_postheader_postmeta() {
		
		$postmeta  = "\n\t\t\t\t\t";
	    $postmeta .= '<div class="entry-meta">' . "\n\n";
	    $postmeta .= "\t" . frozr_postmeta_authorlink() . "\n\n";
	    $postmeta .= "\t" . '<span class="meta-sep meta-sep-entry-date"> | </span>'. "\n\n";
	    $postmeta .= "\t" . frozr_postmeta_entrydate() . "\n\n";	                   
	    $postmeta .= '</div><!-- .entry-meta -->' . "\n";
	    
	    return apply_filters('frozr_postheader_postmeta',$postmeta); 
	
	}
} // end postheader_postmeta


if (function_exists('childtheme_override_postmeta_authorlink'))  {
	/**
	 * @ignore
	 */
	function frozr_postmeta_authorlink() {
		return childtheme_override_postmeta_authorlink();
	}
} else {
	/**
	 * Create the author link for post meta
	 * 
	 * Override: childtheme_override_postmeta_authorlink <br>
	 * Filter: frozr_postmeta_authorlink
	 */
	function frozr_postmeta_authorlink() {
		global $authordata;
		if ( !is_single() ) {
	    $author_prep = '<span class="meta-prep meta-prep-author">' . __('By', 'frozr' ) . ' </span>';
	    }
	    if ( frozr_is_custom_post_type() && !current_theme_supports( 'frozr_support_post_type_author_link' ) ) {
	    	$author_info  = '<span class="vcard"><span class="fn nickname">';
	    	$author_info .= get_the_author_meta( 'display_name' ) ;
	    	$author_info .= '</span></span>';
	    } elseif ( !is_single() ) {
	    	$author_info  = '<span class="author vcard">';
	    	$author_info .= sprintf('<a class="url fn n" href="%s" title="%s">%s</a>',
	    							get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
									/* translators: author name */
	    							sprintf( esc_attr__( 'View all posts by %s', 'frozr' ), get_the_author_meta( 'display_name' ) ),
	    							get_the_author_meta( 'display_name' ));
	    	$author_info .= '</span>';
	    }
	    if ( !is_single() ) {
	    $author_credit = $author_prep . $author_info ;
	    }
		if ( is_single() ) {
		
	    	$author_info  = '<div class="single-author-p"><div class="author_page_img" style="background: url('. get_avatar_url(get_the_author_meta('ID')) .') no-repeat center center; background-size: 100% auto;">';
	    	$author_info .= '</div><!-- .author_page_img -->';
	    	$author_info .= sprintf('<a class="url fn n" href="%s" title="%s">%s</a>',
	    							get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
									/* translators: author name */
	    							sprintf( esc_attr__( 'View all posts by %s', 'frozr' ), get_the_author_meta( 'display_name' ) ),
	    							get_the_author_meta( 'display_name' ));
	    	$author_info .= '<p>';
	    	$author_info .= get_the_author_meta( 'description' );
	    	$author_info .= '</p>';
	    	$author_info .= '</div><!-- .single-author-p -->';

	    $author_credit = $author_info;		
		}
	    return apply_filters('frozr_postmeta_authorlink', $author_credit);
	   
	}
} // end postmeta_authorlink


if (function_exists('childtheme_override_postmeta_entrydate'))  {
	/**
	 * @ignore
	 */
	function frozr_postmeta_entrydate() {
		return childtheme_override_postmeta_entrydate();
	}
} else {
	/**
	 * Create entry date for post meta
	 * 
	 * Override: childtheme_override_postmeta_entrydate <br>
	 * Filter: frozr_postmeta_entrydate
	 */ 
	function frozr_postmeta_entrydate() {
		if ( is_single() ) {
	    $entrydate = '<span class="meta-prep meta-prep-entry-date">' . __('Published:', 'frozr' );
		$entrydate .= '<abbr class="published" title="';
	    }
		else {
	    $entrydate = '<span class="meta-prep meta-prep-entry-date">' . __('Published:', 'frozr' ) . ' </span>';
		$entrydate .= '<span class="entry-date"><abbr class="published" title="';
		}
	    $entrydate .= get_the_time(frozr_time_title()) . '">';
	    $entrydate .= get_the_time(frozr_time_display());
	    $entrydate .= '</abbr></span>';

	    return apply_filters('frozr_postmeta_entrydate', $entrydate);
	   
	}
} // end postmeta_entrydate


if (function_exists('childtheme_override_postmeta_editlink'))  {
	/**
	 * @ignore
	 */
	function frozr_postmeta_editlink() {
		return childtheme_override_postmeta_editlink();
	}
} else {
	/**
	 * Create edit link for post meta
	 * 
	 * Override: childtheme_override_postmeta_editlink <br>
	 * Filter: frozr_postmeta_editlink
	 */
	function frozr_postmeta_editlink() {
    
	    // Display edit link
	    if (current_user_can('edit_posts')) {
	        $editlink = '<span class="meta-sep meta-sep-edit">|</span> ' . "\n\n\t\t\t\t\t\t" . frozr_postheader_posteditlink();
	        return apply_filters('frozr_postmeta_editlink', $editlink);
	    }               
	}
} // end postmeta_editlink


// Sets up the post content 
if (function_exists('childtheme_override_content_init'))  {
	/**
	 * @ignore
	 */
	function frozr_content_init() {
		childtheme_override_content_init();
	}
} else {
	/**
	 * Set up the post content to use excerpt or full posts
	 * 
	 * Uses conditional template tags to decide whether posts should be displayed using excerpts or the full content
	 * 
	 * Override: childtheme_override_content_init <br>
	 * Filter: frozr_content
	 */
	function frozr_content_init() {
		global $frozr_content_length;
		
		$content = '';
		$frozr_content_length = '';
		
		if (is_home() || is_front_page()) { 
			$content = 'full';
		} elseif (is_single()) {
			$content = 'full';
		} elseif (is_tag()) {
			$content = 'excerpt';
		} elseif (is_search()) {
			$content = 'excerpt';	
		} elseif (is_category()) {
			$content = 'excerpt';
		} elseif (is_author()) {
			$content = 'excerpt';
		} elseif (is_archive()) {
			$content = 'excerpt'; 
		}
		
		$frozr_content_length = apply_filters('frozr_content', $content);
		
	}
} // end content_init

add_action('frozr_abovepost','frozr_content_init');


if (function_exists('childtheme_override_content'))  {
	/**
	 * @ignore
	 */
	function frozr_content() {
		childtheme_override_content();
	}
} else {
	/**
	 * Create the post content
	 *
	 * Detects whether to use the full length or excerpt of a post and displays it. Post thumbnails are included on
	 * excerpt posts.
	 * 
	 */
	function frozr_content() {
		global $frozr_content_length;
		
		if ( strtolower($frozr_content_length) == 'full' ) {
			$post = get_the_content( frozr_more_text() );
			$post = apply_filters('the_content', $post);
			$post = str_replace(']]>', ']]&gt;', $post);
		} elseif ( strtolower($frozr_content_length) == 'excerpt') {
			$post = '';
			$post .= blog_posts_test();
		} elseif ( strtolower($frozr_content_length) == 'none') {
		} else {
			$post = get_the_content( frozr_more_text() );
			$post = apply_filters('the_content', $post);
			$post = str_replace(']]>', ']]&gt;', $post);
		}
		echo apply_filters('frozr_post', $post);
	} 
} // end content

if (function_exists('childtheme_override_archives_body'))  {
	/**
	 * @ignore
	 */
	function frozr_archives_body() {
		childtheme_override_archives_body();
	}
} else {
	/**
	 * Display archives body 
	 * 
	 * Added to the archive list on the page template Archives Page
	 * 
	 * Override: childtheme_override_archives_body
	 */
	function frozr_archives_body() { 
		$latest_archive = get_theme_mod('latest_archive', true);
		$monthly_archive = get_theme_mod('monthly_archive', true);
		$daily_archive = get_theme_mod('daily_archive', true);
		?>
		<ul id="archives-page" class="xoxo">
			<?php if ($latest_archive == true) { 
			$archive_posts_to_show = get_theme_mod('latest_counts','10');
			?>
			<li id="postbypost-archives" class="content-column">
				<h2><?php _e('Latest Posts', 'frozr' ) ?></h2>
				<ul>
					<?php wp_get_archives(array('type' => 'postbypost',
												'limit' => $archive_posts_to_show,
												'show_post_count' => true )); ?>
				</ul>
			</li>
			<?php } if ($monthly_archive == true) { 
			$archive_months_to_show = get_theme_mod('months_counts','10');
			?>
			<li id="monthly-archives" class="content-column">
				<h2><?php _e('Monthly Archive', 'frozr' ) ?></h2>
				<ul>
					<?php wp_get_archives(array('type' => 'monthly',
												'limit' => $archive_months_to_show,
												'show_post_count' => true )); ?>
				</ul>
			</li>
			<?php } if ($daily_archive == true) { 
			$archive_days_to_show = get_theme_mod('days_counts','10');
			?>
			<li id="daily-archives" class="content-column">
				<h2><?php _e('Daily Archives', 'frozr' ) ?></h2>
				<ul>
					<?php wp_get_archives(array('type' => 'daily',
												'limit' => $archive_days_to_show,
												'show_post_count' => true )); ?>
				</ul>
			</li>
			<?php } ?>
		</ul>
<?php }
} // end category_archives

add_action('frozr_archives', 'frozr_archives_body', 3);		

/**
 * Register action hook: frozr_404 
 *
 * Located in 404.php
 */
function frozr_404() {
	do_action('frozr_404');
} // end frozr_404


if ( function_exists('childtheme_override_404_content') )  {
	/**
	 * @ignore
	 */
	function frozr_404_content() {
		childtheme_override_404_content();
	}
} else {
	/**
	 * Create the content for the 404 Error page
	 * 
	 * Located in 404.php
	 * Override: childtheme_override_404_content
	 */
	function frozr_404_content() { ?>
	<div class="not-found-page-cont">
		<div class="not-found-img"></div>
		<div class="not-found-msg">
			<?php frozr_postheader(); ?>
			<form id="error404-searchform" method="get" action="<?php echo home_url(); ?>/">
				<div>
					<input id="error404-s" name="s" type="text" value="<?php the_search_query(); ?>" placeholder="<?php _e('Try search the website!','frozr'); ?>" size="40" />
					<input id="error404-searchsubmit" name="searchsubmit"  type="submit" value="<?php esc_attr_e( 'Find', 'frozr' ); ?>" />
				</div>
			</form>
		</div>
	</div>
<?php }
} // end 404_content

add_action( 'frozr_404','frozr_404_content' );


/**
 * Create the $more_link_text for the_content
 * 
 * Used on posts that are divided using the more tag in post editor
 * 
 * Filter: more_text
 *
 */
function frozr_more_text() {
	/* translators: %s is right angle brackets */
	$content = sprintf ( __('Read More %s', 'frozr' ), ' <span class="meta-nav">&raquo;</span>');
	return apply_filters('more_text', $content);
} // end frozr_more_text


/**
 * Create the arguments for wp_list_bookmarks in links.php
 * 
 * Filter: list_bookmarks_args
 *
 */
function frozr_list_bookmarks_args() {
	$content = array ( 'title_before' => '<h2>',
						'title_after' => '</h2>');
	return apply_filters('list_bookmarks_args', $content);
} // end frozr_list_bookmarks_args


if (function_exists('childtheme_override_postfooter'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter() {
		childtheme_override_postfooter();
	}
} else {
	/**
	 * Create the post footer
	 * 
	 * Override: childtheme_override_postfooter <br>
	 * Filter: frozr_postfooter
	 */
	function frozr_postfooter() {
	    	    
	    $post_type = get_post_type();
	    $post_type_obj = get_post_type_object($post_type);
	    
		// Check for "Page" post-type and logged in user to show edit link
	    if ( $post_type == 'page' && current_user_can('edit_posts') ) {
	        $postfooter = '<div class="entry-utility">' . frozr_postfooter_posteditlink();
	        $postfooter .= "</div><!-- .entry-utility -->\n";
	    // Display nothing for logged out users on a "Page" post-type 
	    } elseif ( $post_type == 'page' ) {
	        $postfooter = '';
	    // For post-types other than "Pages" press on
	    } else {
	    	$postfooter = '<div class="entry-utility">';
	        if ( post_type_supports( $post_type, 'comments') ) {
	        	$postfooter .= frozr_postfooter_posttax();
	            $postfooter .= frozr_postfooter_postcomments();
	        }
	       	// Display edit link
	    	if (current_user_can('edit_posts')) {
	    		if ( !is_single() && post_type_supports( $post_type, 'comments') ) {
	        		$postfooter .= "\n\n\t\t\t\t\t\t" . '<span class="meta-sep meta-sep-edit">|</span> ';
	        	} 
	        	$postfooter .= ' ' . frozr_postfooter_posteditlink();
	    	}   
	    	$postfooter .= "\n\n\t\t\t\t\t</div><!-- .entry-utility -->\n";    
	    }
	    // Put it on the screen
	    echo apply_filters( 'frozr_postfooter', $postfooter ); // Filter to override default post footer
    }
} // end postfooter


if (function_exists('childtheme_override_postfooter_posteditlink'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter_posteditlink() {
		return childtheme_override_postfooter_posteditlink();
	}
} else {
	/**
	 * Create the post edit link for the post footer
	 * 
	 * Override: childtheme_override_postfooter_posteditlink <br>
	 * Filter: frozr_postfooter_posteditlink
	 */
	function frozr_postfooter_posteditlink() {

	    $posteditlink = sprintf( '<a href="%s" title="%s" class="edit">%s</a>' , 
			    			get_edit_post_link(),
			    			esc_attr__('Edit post', 'frozr' ),
							/* translators: post edit link */
			    			__('Edit', 'frozr' ));


	    return apply_filters('frozr_postfooter_posteditlink',$posteditlink); 
	    
	} 
} // end postfooter_posteditlink


if (function_exists('childtheme_override_postfooter_posttax'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter_posttax() {
		return childtheme_override_postfooter_posttax();
	}
} else {
	/**
	 * Create the taxonomy list for the post footer
	 * 
	 * Lists categories, tags, and custom taxonomies
	 * 
	 * Override: childtheme_override_postfooter_posttax <br>
	 * Filter: frozr_postfooter_posttax
	 */
	function frozr_postfooter_posttax() {		
		
		$post_type_tax = get_post_taxonomies();
		$post_tax_list = ''; 
		
		if ( isset($post_type_tax) && $post_type_tax ) { 
	    	foreach ( $post_type_tax as $tax  )   {
	    		if ($tax  == 'category') {
	    			$post_tax_list .= frozr_postfooter_postcategory();
	    		} elseif ($tax  == 'post_tag') {
	    			$post_tax_list .= frozr_postfooter_posttags();
	    		} else {
	    			$post_tax_list .= frozr_postfooter_postterms($tax);
	    		}
	    	}
	    }
		return apply_filters('frozr_postfooter_posttax',$post_tax_list); // Filter for default post terms	
	}
}


if (function_exists('childtheme_override_postfooter_postterms'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter_postterms($tax) {
		return childtheme_override_postfooter_postterms($tax);
	}
} else {
	/**
	 * Create the list of custom taxonomy terms for post footer
	 *
	 * Override: childtheme_override_postfooter_postterms($tax) <br>
	 * Filter: frozr_postfooter_postterms
	 * 
	 * @param string $tax The taxonomy that the terms will be fetched from
	 */
	function frozr_postfooter_postterms($tax) {
		global $post;
		
		if ($tax == 'post_format') return;
		$tax_terms = '';	
		$tax_obj = get_taxonomy($tax);
		
		if ( wp_get_object_terms($post->ID, $tax) ) {
			$term_list = get_the_term_list( 0, $tax, '' , ', ', '' );		
			$tax_terms = '<span class="' . $tax . '-links">';
			
			if ( strpos( $term_list, ',' ) ) {
				$tax_terms .= $tax_obj->labels->name . ': ';
			} else {
				$tax_terms .= $tax_obj->labels->singular_name . ': ';
			}
			
			$tax_terms .= $term_list;

			if ( is_single() ) { 
		 		$tax_terms .= '. ';
		 		$tax_terms .= '</span>';
			} else {
				$tax_terms .= '</span>' . "\n\n\t\t\t\t\t\t" . '<span class="meta-sep meta-sep-tag-links">|</span> ';
			}
			
		}
		
		return apply_filters('frozr_postfooter_postterms', $tax_terms ); // Filter for custom taxonomy terms
	}
}


if (function_exists('childtheme_override_postfooter_postcategory'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter_postcategory() {
		return childtheme_override_postfooter_postcategory();
	}
} else {
	/**
	 * Create the category list for post footer
	 * 
	 * Override: childtheme_override_postfooter_postcategory <br>
	 * Filter: frozr_postfooter_postcategory
	 */
	function frozr_postfooter_postcategory() {
    
	    $postcategory = "\n\n\t\t\t\t\t\t" . '<span class="cat-links">';
	    if (is_single()) {
			/* translators: %s is postfooter categories */
	        $postcategory .= sprintf( __('This entry was posted in %s', 'frozr' ), get_the_category_list(', ') );
	        $postcategory .= '</span>';
	        $posttags = get_the_tags();
			if ( !$posttags ) {
				$postcategory .= '';
			} else {
				//$postcategory .= '';
			}

	    } elseif ( is_category() && $cats_meow = frozr_cats_meow(', ') ) { /* Returns categories other than the one queried */
			/* translators: %s is postfooter categories */
	        $postcategory .= sprintf( __('Also posted in %s', 'frozr' ), $cats_meow );
	        $postcategory .= '</span>' . "\n\n\t\t\t\t\t\t" . '<span class="meta-sep meta-sep-tag-links">|</span> ';
	    } else {
			/* translators: %s is postfooter categories */
	        $postcategory .= sprintf( __('Posted in %s', 'frozr' ), get_the_category_list(', ') );
	        $postcategory .= '</span>' . "\n\n\t\t\t\t\t\t" . '<span class="meta-sep meta-sep-tag-links">|</span> ';
	    }
	    return apply_filters('frozr_postfooter_postcategory',$postcategory); 
	    
	}
}  // end postfooter_postcategory

$query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => '-1',
    'post_status' => array(
        'publish',
        'pending',
        'draft',
        'private',
        'trash'
    )
) );
if (function_exists('childtheme_override_postfooter_posttags'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter_posttags() {
		return childtheme_override_postfooter_posttags();
	}
} else {
	/**
	 * Create the tags list for post footer
	 * 
	 * Override: childtheme_override_postfooter_posttags <br>
	 * Filter: frozr_postfooter_posttags
	 */
	function frozr_postfooter_posttags() {

	    if ( is_single() && !is_object_in_taxonomy( get_post_type(), 'category' ) ) {
	        $tagtext = __('This entry is tagged', 'frozr' ) . ' ';
	        $posttags = get_the_tag_list("<span class=\"tag-links\">$tagtext ",', ','</span>');
	    } elseif ( is_single() ) {
	        $posttags = get_the_tag_list("<span class=\"tag-links\">",', ','</span>');
	    } elseif ( is_tag() && $tag_ur_it = frozr_tag_ur_it(', ') ) { /* Returns tags other than the one queried */
	        $posttags = '<span class="tag-links">' . __('Also tagged', 'frozr' ) . ' ' . $tag_ur_it . '</span>' . "\n\n\t\t\t\t\t\t" . '<span class="meta-sep meta-sep-comments-link">|</span> ';
	    } else {
	        $tagtext = __('Tagged', 'frozr' ) . ' ';
	        $posttags = get_the_tag_list("<span class=\"tag-links\"> $tagtext ",', ','</span>' . "\n\n\t\t\t\t\t\t" . '<span class="meta-sep meta-sep-comments-link">|</span> ');
	    }
	    return apply_filters('frozr_postfooter_posttags',$posttags); 
	
	}
} // end postfooter_posttags


if (function_exists('childtheme_override_postfooter_postcomments'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter_postcomments() {
		return childtheme_override_postfooter_postcomments();
	}
} else {
	/**
	 * Create the comments link for the post footer on archive pages
	 * 
	 * Override: childtheme_override_postfooter_postcomments <br>
	 * Filter: frozr_postfooter_postcomments
	 */
	function frozr_postfooter_postcomments() {
			$postcomments = '';
	    if (comments_open()) {
	        $postcommentnumber = get_comments_number();

	        if ($postcommentnumber > '0') {
				if ( !is_single() ) {
	        	$postcomments = sprintf('<span class="comments-link"><a href="%s" title="%s" rel="bookmark">%s</a></span>',
	        						apply_filters('the_permalink', get_permalink()) . '#respond',
	        						sprintf( esc_attr__('Comment on %s', 'frozr' ), the_title_attribute( 'echo=0' ) ),
									/* translators: number of comments and trackbacks */
	        						sprintf( _n('%s Response', '%s Responses', $postcommentnumber, 'frozr'), number_format_i18n( $postcommentnumber ) ) );
			}
				elseif ( is_single() ) {
	        	$postcomments = sprintf('<a class="single_comments_info_response" href="%s" title="%s" rel="bookmark">%s</a>',
	        						apply_filters('the_permalink', get_permalink()) . '#respond',
	        						sprintf( esc_attr__('Comment on %s', 'frozr' ), the_title_attribute( 'echo=0' ) ),
									/* translators: number of comments and trackbacks */
	        						sprintf( _n('%s Response', '%s Responses', $postcommentnumber, 'frozr'), number_format_i18n( $postcommentnumber ) ) );
			}
			
			} elseif ( !is_single() ){
	            $postcomments = sprintf('<span class="comments-link"><a href="%s" title="%s" rel="bookmark">%s</a></span>',
	        						apply_filters('the_permalink', get_permalink()) . '#respond',
	        						sprintf( esc_attr__('Comment on %s', 'frozr' ), the_title_attribute( 'echo=0' ) ),
	        						__('Leave a comment', 'frozr' ));		
			}
	    } elseif ( !is_single() ) {
	        $postcomments = '<span class="comments-link comments-closed-link">' . __('Comments closed', 'frozr' ) .'</span>';
	    }            
	    return apply_filters('frozr_postfooter_postcomments',$postcomments); 
	}
} // end postfooter_postcomments


if (function_exists('childtheme_override_postfooter_postconnect'))  {
	/**
	 * @ignore
	 */
	function frozr_postfooter_postconnect() {
		return childtheme_override_postfooter_postconnect();
	}
} else {
	/**
	 * Create the comments link for the post footer on single posts
	 * 
	 * Override: childtheme_override_postfooter_postconnect <br>
	 * Filter: frozr_postfooter_postconnect
	 */
		function frozr_postfooter_postconnect() {
    
	    if ((comments_open()) && (pings_open())) { /* Comments are open */
	        $postconnect = sprintf( _x('%1$sPost a comment%2$s or leave a trackback: %3$s', '1s and 2s are the a href link wrappers, do not reverse them. 3s is trackback url.', 'frozr' ), 
								sprintf('<a class="comment-link" title="%s" href="#respond">', esc_attr__('Post a comment', 'frozr' )), 
								'</a>' ,
								sprintf('<a class="trackback-link" href="%s" title ="%s" rel="trackback">%s</a>.', 
									get_trackback_url(),
									esc_attr__('Trackback URL for your post', 'frozr' ),
						 			__('Trackback URL', 'frozr' ))
							);
	    } elseif (!(comments_open()) && (pings_open())) { /* Only trackbacks are open */
	        $postconnect = sprintf( _x('Comments are closed, but you can leave a trackback: %s', '%s is trackback url, wrapped in link tags', 'frozr' ),
							sprintf('<a class="trackback-link" href="%s" title="%s" rel="trackback">%s</a>.', 
								get_trackback_url(), 
								esc_attr__('Trackback URL for your post', 'frozr' ), 
								__('Trackback URL', 'frozr' ))
							);
	    } elseif ((comments_open()) && !(pings_open())) { /* Only comments open */
	        $postconnect = sprintf( _x('Trackbacks are closed, but you can %1$spost a comment%2$s.', '1s and 2s are the a href link wrappers, do not reverse them', 'frozr' ), sprintf('<a class="comment-link" title="%s" href="#respond">', esc_attr__('Post a comment', 'frozr' )), '</a>');
	    } elseif (!(comments_open()) && !(pings_open())) { /* Comments and trackbacks closed */
	        $postconnect = __('Both comments and trackbacks are currently closed.', 'frozr' );
	    }
	    return apply_filters('frozr_postfooter_postconnect',$postconnect); 
	}
} // end postfooter_postconnect


// Action to create the below navigation
if (function_exists('childtheme_override_nav_below'))  {
	/**
	 * @ignore
	 */
	function frozr_nav_below() {
		childtheme_override_nav_below();
	}
} else {
	/**
	 * Create the below navigation
	 * 
	 * Provides compatibility with WP-PageNavi plugin
	 * 
	 * Override: childtheme_override_nav_below
	 * 
	 * @link http://wordpress.org/extend/plugins/wp-pagenavi/ WP-PageNavi Plugin Page
	 */
	function frozr_nav_below($fea=false) {
	$featured_nav_arrow = get_theme_mod('featured_nav_arrow','fs-icon-angle-down');
	
		if (is_single()) { ?>
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><i class="fs-icon-angle-left"></i><?php frozr_previous_post_link() ?></div>
			<div class="nav-next"><?php frozr_next_post_link() ?><i class="fs-icon-angle-right"></i></div>
		</div>

	<?php } else { ?>

		<div id="nav-below" class="navigation">
			<div class="nav-previous ch-item-rm ch-img-rm-1 <?php if ($fea == true || get_theme_mod('blog_posts_load') == null ) { echo 'manual'; } else { echo get_theme_mod('blog_posts_load'); } ?>">				
				<div class="ch-info-wrap-rm">
					<div class="ch-info-rm">
						<div class="ch-info-front-rm ch-img-rm <?php echo $featured_nav_arrow; ?>"></div>
						<div class="ch-info-back-rm <?php echo $featured_nav_arrow; ?>">
							<div class="ch-img-rm-2"><?php next_posts_link('next'); ?></div>
						</div>	
					</div>
				</div>
			</div>
		</div><!-- #nav-below -->
	
<?php
		}
	}
} // end nav_below

add_action('frozr_navigation_below', 'frozr_nav_below', 2);


if (function_exists('childtheme_override_previous_post_link'))  {
	/**
	 * @ignore
	 */
	function frozr_previous_post_link() {
		childtheme_override_previous_post_link();
	}
} else {
	/**
	 * Create the previous post link on single pages
	 * 
	 * Override: childtheme_override_previous_post_link
	 * Filter: frozr_previous_post_link_args
	 */
	function frozr_previous_post_link() {
	
		$args = array ( 
			'format'              => '%link',
			'link'                => '<span class="meta-nav"></span> %title',
			'in_same_cat'         => FALSE,
			'excluded_categories' => ''
		);
						
		$args = apply_filters('frozr_previous_post_link_args', $args );
		
		previous_post_link($args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories']);
	}
} // end previous_post_link


if (function_exists('childtheme_override_next_post_link'))  {
	/**
	 * @ignore
	 */
	function frozr_next_post_link() {
		childtheme_override_next_post_link();
	}
} else {
	/**
	 * Create the next post link on single pages
	 * 
	 * Override: childtheme_override_next_post_link
	 * Filter: frozr_next_post_link_args
	 */
	function frozr_next_post_link() {
		$args = array (
			'format' => '%link',
			'link' => '%title <span class="meta-nav"></span>',
			'in_same_cat' => FALSE,
			'excluded_categories' => ''
		);
		
		$args = apply_filters('frozr_next_post_link_args', $args );
		
		next_post_link($args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories']);
	}
} // end next_post_link

if (function_exists('childtheme_override_cats_meow'))  {
	/**
	 * @ignore
	 */
	function frozr_cats_meow() {
		return childtheme_override_cats_meow();
	}
} else {
	/**
	 * Create a category list with all categories except the current one
	 * 
	 * Used in post footer on category archives (redundant)
	 * 
	 * Override: childtheme_override_cats_meow
	 */
	function frozr_cats_meow($glue) {
		$current_cat = single_cat_title( '', false );
		$separator = "\n";
		$cats = explode( $separator, get_the_category_list($separator) );
		foreach ( $cats as $i => $str ) {
			if ( strpos( $str, ">$current_cat<" ) > 0) {
				unset($cats[$i]);
				break;
			}
		}
		if ( empty($cats) )
			return false;
	
		return trim(join( $glue, $cats ));
	}
} // end cats_meow


if (function_exists('childtheme_override_tag_ur_it'))  {
	/**
	 * @ignore
	 */
	function frozr_tag_ur_it() {
		return childtheme_override_tag_ur_it();
	}
} else {
	/**
	 * Create a tag list with all tags except the current one
	 * 
	 * Used in post footer on tag archives (redundant)
	 * 
	 * Override: childtheme_override_tag_ur_it
	 */
	function frozr_tag_ur_it($glue) {
		$current_tag = single_tag_title( '', '',  false );
		$separator = "\n";
		$tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
		foreach ( $tags as $i => $str ) {
			if ( strpos( $str, ">$current_tag<" ) > 0 ) {
				unset($tags[$i]);
				break;
			}
		}
		if ( empty($tags) )
			return false;
		
		return trim( join( $glue, $tags ) );
	}
} // end frozr_tag_ur_it

if (function_exists('childtheme_override_frozr_no_post'))  {
	/**
	 * @ignore
	 */
	function frozr_no_post() {
		return childtheme_override_frozr_no_post();
	}
} else {
	/**
	 * Create No post Content
	 * 
	 * Override: childtheme_override_frozr_no_post
	 */
	function frozr_no_post() { ?>
	
		<div id="post-0" class="post noresults">
					
			<h1 class="entry-title"><?php _e('No Results','frozr'); ?></h1>
					
			<div class="entry-content">	
				<p><?php _e('Nothing Found!','frozr'); ?></p>		
			</div><!-- .entry-content -->
					
			<form id="noresults-searchform" method="get" action="<?php echo home_url() ?>/">
						
				<div>
					<input id="noresults-s" name="s" type="text" value="<?php the_search_query();  ?>" size="40" />			
					<input id="noresults-searchsubmit" name="searchsubmit" type="submit" value="<?php esc_attr_e( 'Find', 'frozr' ) ?>" />	
				</div>
					
			</form>
				
		</div><!-- #post -->
	<?php }
} // end frozr_no_post

if (function_exists('childtheme_override_page_thumbnail'))  {
	/**
	 * @ignore
	 */
	function frozr_page_thumbnail() {
		childtheme_override_pages_thumbnail();
	}
} else {
	/**
	 * Creates pages thumbnail
	 * 
	 * Override: childtheme_override_pages_thumbnail
	 */
	function frozr_page_thumbnail() {
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
		
		if ( $the_post_thumbnail ) :// Show the pages thumbnail if available
			echo'<figure class="page-entry-thumbnail">';
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size);
			echo '<div class="p-thumbnail" style="background: url( '.$large_image_url[0].') no-repeat center center;">';
			echo '<a href="' . get_permalink( $post->ID ) . '" title="' . esc_attr( $post->post_title ) . '"></a>';
			echo '</div>';
			echo '</figure><!-- .page-entry-thumbnail -->';
		endif; // end pages thumbnail check

 }
} // end posts_media_embid
add_action('frozr_pages_thumbnail','frozr_page_thumbnail');

if (function_exists('childtheme_override_posts_social_sharing'))  {
	/**
	 * @ignore
	 */
	function frozr_posts_social_sharing() {
		childtheme_override_posts_social_sharing();
	}
} else {
	/**
	 * Inserts social sharing icons to posts and pages
	 * 
	 * Override: childtheme_override_posts_social_sharing
	 */
	function frozr_posts_social_sharing() {

    global $post;

    $simplesocial_permlink = get_permalink($post->ID);
    $simplesocial_enclink = urlencode($simplesocial_permlink);
    $simplesocial_title = get_the_title($post->ID);
    $simplesocial_title_4url = urlencode($simplesocial_title);
    $single_face = get_theme_mod('single_face', true);
    $single_twitter = get_theme_mod('single_twitter', true);
    $single_email = get_theme_mod('single_email', true);
    $single_blogger = get_theme_mod('single_blogger', true);
    $single_delicious = get_theme_mod('single_delicious', true);
    $single_digg = get_theme_mod('single_digg', true);
    $single_google = get_theme_mod('single_google', true);
    $single_myspace = get_theme_mod('single_myspace', true);
    $single_stumbleupon = get_theme_mod('single_stumbleupon', true);
    $single_yahoo = get_theme_mod('single_yahoo', true);
    $single_reddit = get_theme_mod('single_reddit', true);
    $single_technorati = get_theme_mod('single_technorati', true);
    $single_rss = get_theme_mod('single_rss', true);
	
	if ($post->post_type == 'page') {
		echo "<div class=\"the-social-box-page\">";
		echo "<i class=\"fs-icon-share-alt\"></i><span class=\"s-title fs-icon-caret-right\"><span class=\"pages_meta\">" . __('Share this?', 'frozr' ) ."</span></span>";
		echo "<div class=\"s-icons-page\">";
	    } else {
		echo "<div class=\"the-social-box\">";
		echo "<a>" . __('Share', 'frozr' ) ."</a>";
		echo "<div class=\"s-icons\">";
		}
			// Facebook Button
			if ($single_face == true) {
				echo '<a class="simplesocial facebook" onclick="return simplesocial(this,812,420)" title="Share on Facebook"  href="http://www.facebook.com/share.php?u='.$simplesocial_enclink.'&t='.$simplesocial_title_4url.'"> </a>';
			}
			// Twitter Button
			if ($single_twitter == true) {
				echo '<a class="simplesocial twitter" onclick="return simplesocial(this,812,420)" title="Share on Twitter" href="http://twitter.com/home?status='.$simplesocial_enclink.'"></a>';
			}
			// Email Button
			if ($single_email == true) {
				echo '<a class="simplesocial email" onclick="return simplesocial(this,435,500)" title="Email a Friend" href="http://www.freetellafriend.com/tell/?heading=Share+This+Article&bg=1&option=email&url='.$simplesocial_enclink.'"></a>';
			}
			// Blogger Button
			if ($single_blogger == true) {
				echo '<a class="simplesocial blogger" onclick="return simplesocial(this,750,500)" title="Share on Blogger" href="http://www.blogger.com/blog_this.pyra?t&u='.$simplesocial_enclink.'&n='.$simplesocial_title_4url.'&pli=1"></a>';
			}
			// Delicious Button
			if ($single_delicious == true) {
				echo '<a class="simplesocial delicious" onclick="return simplesocial(this,890,550)" title="Share on Delicious" href="http://del.icio.us/post?url='.$simplesocial_enclink.'&title='.$simplesocial_title_4url.'"></a>';
			}
			// Digg Button
			if ($single_digg == true) {
				echo '<a class="simplesocial digg" onclick="return simplesocial(this,812,420)" title="Share on Digg" href="http://digg.com/submit?url='.$simplesocial_enclink.'&title='.$simplesocial_title_4url.'"></a>';
			}
			// Google Button
			if ($single_google == true) {
				echo '<a class="simplesocial google" onclick="return simplesocial(this,750,500)" title="Share on Google" href="http://www.google.com/bookmarks/mark?op=add&bkmk='.$simplesocial_enclink.'&title='.$simplesocial_title_4url.'"></a>';
			}
			// Myspace Button
			if ($single_myspace == true) {
				echo '<a class="simplesocial myspace" onclick="return simplesocial(this,812,420)" title="Share on Myspace" href="http://www.myspace.com/Modules/PostTo/Pages/?u='.$simplesocial_enclink.'&t='.$simplesocial_title_4url.'&c='.$simplesocial_enclink.'"></a>';
			}
			// StumbleUpon Button
			if ($single_stumbleupon == true) {
				echo '<a class="simplesocial stumbleupon" onclick="return simplesocial(this,750,500)" title="Share on StumbleUpon" href="http://www.stumbleupon.com/submit?url='.$simplesocial_enclink.'&title='.$simplesocial_title_4url.'"></a>';
			}
			// Yahoo Button
			if ($single_yahoo == true) {
				echo '<a class="simplesocial yahoo" onclick="return simplesocial(this,900,550)" title="Share on Yahoo" href="http://buzz.yahoo.com/buzz?targetUrl='.$simplesocial_enclink.'&headline='.$simplesocial_title_4url.'"></a>';
			}
			// Reddit Button
			if ($single_reddit == true) {
				echo '<a class="simplesocial reddit" onclick="return simplesocial(this,700,500)" title="Share on Reddit" href="http://reddit.com/submit?url='.$simplesocial_enclink.'&title='.$simplesocial_title_4url.'"></a>';
			}
			// Technorati Button
			if ($single_technorati == true) {
				echo '<a class="simplesocial technorati" onclick="return simplesocial(this,812,500)" title="Share on Technorati" href="http://technorati.com/faves?sub=favthis&add='.$simplesocial_enclink.'"></a>';
			}
			// RSS Button
			if ($single_rss == true) {
				echo '<a class="simplesocial rss" title="RSS Feed" href="'.home_url().'/?feed=rss2"></a>';
			}
		echo '</div>';
	echo '</div>';
 }
}
add_action('frozr_social_sharing','frozr_posts_social_sharing');

if (function_exists('childtheme_override_frozr_welcome_msg'))  {
	/**
	 * @ignore
	 */
	function frozr_welcome_msg() {
		childtheme_override_frozr_welcome_msg();
	}
} else {
	/**
	 * Inserts a welcome message below the header in the home page
	 * 
	 * Override: childtheme_override_frozr_welcome_msg
	 */
	function frozr_welcome_msg() {
	$show_welcome_msg = get_theme_mod('welcome_msg', false);
	$wel_msg_title = get_theme_mod('wel_msg_title');
	$welcome_msg_text = get_theme_mod('wel_msg_cont');
	$wel_msg_btn_txt_1 = get_theme_mod('wel_msg_btn_txt_1');
	$wel_msg_btn_txt_2 = get_theme_mod('wel_msg_btn_txt_2');
	$wel_msg_btn_1 = get_theme_mod('wel_msg_btn_1');
	$wel_msg_btn_2 = get_theme_mod('wel_msg_btn_2');
	$wel_btn_style_1 = get_theme_mod('wel_btn_style_1');
	$wel_btn_style_2 = get_theme_mod('wel_btn_style_2');
	$wel_btn_icon_1 = get_theme_mod('wel_btn_icon_1','fs-icon-heart');
	$wel_btn_icon_2 = get_theme_mod('wel_btn_icon_2','fs-icon-heart');
	$theme_layout = get_theme_mod('theme_layout','left');

	if ($show_welcome_msg == true) {
		do_action('before_welcome_msg'); ?>
		<div class="welcome_msg">
			<div class="wel_msg_text">
				<?php if (!empty($wel_msg_title)) { ?>
				<h1 class="wel_msg_title"><?php echo $wel_msg_title; ?></h1>
				<?php } ?>
				<?php if (!empty($welcome_msg_text)) { ?>
				<div class="wel_msg_content">
				<?php do_action('before_welcome_msg_content'); ?>
				<p><?php echo $welcome_msg_text; ?></p>
				<?php do_action('after_welcome_msg_content'); ?>
				</div>
				<?php } ?>
				<?php if (!empty ($wel_msg_btn_txt_1) ) { ?>
				<button id="wel_msg_button_1" class="wel_msg_button <?php echo $wel_btn_style_1; ?>"><?php if ($wel_btn_icon_1 != 'none' && $theme_layout == 'left') { ?> <i class="<?php echo $wel_btn_icon_1; ?>"></i> <?php } ?><a href="<?php echo $wel_msg_btn_1; ?>" title="<?php echo $wel_msg_title; ?>"><?php echo $wel_msg_btn_txt_1; ?></a><?php if ($wel_btn_icon_1 != 'none' && $theme_layout == 'right') { ?> <i class="<?php echo $wel_btn_icon_1; ?>"></i> <?php } ?></button>
				<?php } ?>
				<?php if (!empty ($wel_msg_btn_txt_2) ) { ?>
				<button id="wel_msg_button_2" class="wel_msg_button <?php echo $wel_btn_style_2; ?>"><?php if ($wel_btn_icon_2 != 'none' && $theme_layout == 'left') { ?> <i class="<?php echo $wel_btn_icon_2; ?>"></i> <?php } ?><a href="<?php echo $wel_msg_btn_2; ?>" title="<?php echo $wel_msg_title; ?>"><?php echo $wel_msg_btn_txt_2; ?></a><?php if ($wel_btn_icon_2 != 'none' && $theme_layout == 'right') { ?> <i class="<?php echo $wel_btn_icon_2; ?>"></i> <?php } ?></button>
				<?php } ?>
			</div>
		</div>
		<?php do_action('after_welcome_msg');
	}
 }
}
add_action('fro_wel_msg','frozr_welcome_msg');

if (function_exists('childtheme_override_frozr_img_grid'))  {
	/**
	 * @ignore
	 */
	function frozr_img_grid() {
		childtheme_override_frozr_img_grid();
	}
} else {
	/**
	 * Inserts a welcome message below the header in the home page
	 * 
	 * Override: childtheme_override_frozr_img_grid
	 */
	function frozr_img_grid() {
	$show_ig = get_theme_mod('show_ig', false);
	$ig_icon = get_theme_mod('ig_icon');
	$theme_layout = get_theme_mod('theme_layout','left');
	$ig_title = get_theme_mod('ig_title','Clients');
	$ig_desc = get_theme_mod('ig_desc','Some More details here');
	$ig_link_title = get_theme_mod('ig_link_title');
	$ig_link = get_theme_mod('ig_link');
	$ig_img_1 = get_theme_mod('ig_img_1');
	$ig_img_1_desc = get_theme_mod('ig_img_1_desc');
	$ig_img_2 = get_theme_mod('ig_img_2');
	$ig_img_2_desc = get_theme_mod('ig_img_2_desc');
	$ig_img_3 = get_theme_mod('ig_img_3');
	$ig_img_3_desc = get_theme_mod('ig_img_3_desc');
	$ig_img_4 = get_theme_mod('ig_img_4');
	$ig_img_4_desc = get_theme_mod('ig_img_4_desc');
	$ig_img_5 = get_theme_mod('ig_img_5');
	$ig_img_5_desc = get_theme_mod('ig_img_5_desc');
	$ig_img_6 = get_theme_mod('ig_img_6');
	$ig_img_6_desc = get_theme_mod('ig_img_6_desc');
	
	if ($show_ig == true) { ?>
		<div class="img_grd_wrapper">
			<div class="st_posts_list_home">
			<div class="st-header-home">
				<div class="st-posts-title-home<?php if ($theme_layout == 'right') {echo ' right_hand_st';} ?>"><?php if ($ig_icon != 'none' && $theme_layout == 'left') { ?> <i class="<?php echo $ig_icon; ?>"></i> <?php } ?><span><?php echo apply_filters( 'meta_content', $ig_title ); ?></span><?php if ($ig_icon != 'none' && $theme_layout == 'right') { ?> <i class="<?php echo $ig_icon; ?>"></i> <?php } ?></div>
					<?php if ( !empty($ig_desc) ) { echo apply_filters( 'meta_content', '<div class="st-description-home"><span>' . $ig_desc . '</span></div>' );} ?>
			</div>
			<div class="img_grids">
				<?php if(!empty($ig_img_1)) { ?>
				<a class="ig_img_1" href="<?php echo $ig_img_1_desc; ?>" title="Visit Me!"><img src="<?php echo $ig_img_1; ?>"></img></a>
				<?php } ?>
				<?php if(!empty($ig_img_2)) { ?>
				<a class="ig_img_2" href="<?php echo $ig_img_2_desc; ?>" title="Visit Me!"><img src="<?php echo $ig_img_2; ?>"></img></a>
				<?php } ?>
				<?php if(!empty($ig_img_3)) { ?>
				<a class="ig_img_3" href="<?php echo $ig_img_3_desc; ?>" title="Visit Me!"><img src="<?php echo $ig_img_3; ?>"></img></a>
				<?php } ?>
				<?php if(!empty($ig_img_4)) { ?>
				<a class="ig_img_4" href="<?php echo $ig_img_4_desc; ?>" title="Visit Me!"><img src="<?php echo $ig_img_4; ?>"></img></a>
				<?php } ?>
				<?php if(!empty($ig_img_5)) { ?>
				<a class="ig_img_5" href="<?php echo $ig_img_5_desc; ?>" title="Visit Me!"><img src="<?php echo $ig_img_5; ?>"></img></a>
				<?php } ?>
				<?php if(!empty($ig_img_6)) { ?>
				<a class="ig_img_6" href="<?php echo $ig_img_6_desc; ?>" title="Visit Me!"><img src="<?php echo $ig_img_6; ?>"></img></a>
				<?php } ?>
			</div>
			<?php if (!empty($ig_link_title)) { ?>
			<div class="img_grd_btn">
				<span class="button st-home-readmore"><?php printf('<a href="%1$s" title="%2$s">%2$s</a>', $ig_link, $ig_link_title ); ?></span>
			</div>
			<?php } ?>
			</div>
		</div>
	<?php }
 }
} add_action('images_grid','frozr_img_grid');
?>