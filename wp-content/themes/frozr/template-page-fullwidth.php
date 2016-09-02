<?php
/**
 * Template Name: Full Width
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 * 
 * @package Frozr
 * @subpackage Templates
 */

    // calling the header.php
    get_header();
	
	global $post; $frozr_stored_meta = get_post_meta( $post->ID );
	
	if ($frozr_stored_meta['_fro_quick_links'][0] == "yes") { ?>
		<div data-role="panel" id="panel<?php the_ID(); ?>" class="frozr_contents_table" data-position="right" data-display="overlay" data-ajax="false"><ul data-role="listview"><li data-role="list-divider" role="heading" class="fro_contents_title"><?php echo get_the_title(); ?></li></ul></div>
    <?php }

    // action hook for placing content above #container
    frozr_abovecontainer();
?>
		<div id="container">
		
			<?php
				// action hook for inserting content above #content
				frozr_abovecontent();		
		
				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'frozr_open_id_content', '<div id="content" class="page-fullwidth">' . "\n\n" );

	            // start the loop
	            while ( have_posts() ) : the_post();
	            
	            // action hook for inserting content above #post
	            frozr_abovepost();
				
				// creating the post header
	            frozr_postheader(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
				<?php if (check_page_meta()) { ?>
				<div class="full_width_page_meta">
				<?php
					$show_thumbnail = $frozr_stored_meta['_fro_page_thumb'][0];
					$show_sub_pages = $frozr_stored_meta['_fro_page_subs'][0];
					$show_tags = $frozr_stored_meta['_fro_page_tags'][0];	
					$show_socials = $frozr_stored_meta['_fro_page_socials'][0];

					if (!is_page_template('template-page-archives.php')) {
						if ($show_thumbnail == 'yes') {
						// action hook for placing pages thumbnail
						do_action('frozr_pages_thumbnail'); }

						global $id, $date_format; $ptitle= __('Sub-Pages', 'frozr' ); $sub_pages=wp_list_pages("title_li=<span class='page-sub-pages-title fs-icon-caret-right'><span class=\"pages_meta\">$ptitle</span></span>&echo=0&child_of=$id&show_date=modified&date_format=$date_format"); 
						if ( !empty ($sub_pages) && $show_sub_pages == 'yes') :?><div class="page-subpages"><?php echo $sub_pages;?></div><?php endif;
						if ($show_tags == 'yes') {
							// if the page has tags, show them
							the_tags('<div class="page-tags"><span class="fs-icon-caret-right"><span class="pages_meta">'. __( 'Page Tags ', 'frozr' ) .'</span></span><p>', ', ' ,'</p></div>' );
						}
						if ($show_socials == 'yes') {
							//action hook to get the social icons
							do_action('frozr_social_sharing');
						}
					}
	                ?> </div>
				<?php } ?>
				<div class="full_width_page_content">
					<?php the_content();
				
				// calls the do_action for inserting content below #post
	        	frozr_belowpost();
	        		        
	        	// action hook for calling the comments_template
       			frozr_comments_template(); ?>
 				</div>
				</div><!-- .post -->
				<?php
	        	// end loop
        		endwhile;
	        ?>
	
			</div><!-- #content -->
			
			<?php 
				if ($frozr_stored_meta['_fro_quick_links'][0] == "yes") { ?>
					<script>
						jQuery(document).ready(function($){
							
							if ($('.full_width_page_content h1, .full_width_page_content h2').length) {
								$('.page-entry-header').append('<a data-role="button" href="#panel<?php the_ID(); ?>" class="frozr-open-quicklink-panel" title="<?php _e('Quick Links' ,'frozr'); ?>" ><i class="fs-icon-list-alt"></i><?php _e(' Contents' ,'frozr'); ?></a>');
							}
							var nx = 0;
							$('.full_width_page_content h1, .full_width_page_content h2').each(function () {
								var content = $(this).text();
								$(this).attr('id','link-'+nx);
								$('#panel<?php the_ID(); ?> > .ui-panel-inner > ul').append('<li><a href="#link-'+nx+'" data-rel="close" >'+content+'</a></li>');
							nx++;
							});
							$( "#panel<?php the_ID(); ?>" ).trigger( "updatelayout" );
							
						} )( jQuery );
					</script>
			<?php }

				// action hook for inserting content below #content
				frozr_belowcontent(); 
			?> 
		</div><!-- #container -->

<?php 
    // action hook for placing content below #container
    frozr_belowcontainer();

	//calling sidebar
	frozr_sidebar();
    
    // calling footer.php
    get_footer();
?>