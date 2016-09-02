<?php
/**
 * Page Template
 *
 * …
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
    frozr_abovecontainer(); ?>
		
		<div id="container">
		
 		<?php if (function_exists('bbpress') && is_bbpress()) {
			
	            // start the loop
	            while ( have_posts() ) : the_post();?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content bbpress-bg">
							
							<?php the_content();
			
							// action hook to show active users
							do_action('frozr_forum_active_users');
							?>
							
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
	        	<?php
				// end loop
        		endwhile;
			
			} else {
				// action hook for placing content above #content
				frozr_abovecontent();

				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'frozr_open_id_content', '<div id="content">' . "\n" );
				
	            // start the loop
	            while ( have_posts() ) : the_post();
				
				// action hook for placing content above #post
	            frozr_abovepost(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 
					<div class="page-info">
					<?php    
					// creating the post header
					frozr_postheader();
					if (check_page_meta()) {
						$show_thumbnail = $frozr_stored_meta['_fro_page_thumb'][0];
						$show_sub_pages = $frozr_stored_meta['_fro_page_subs'][0];
						$show_tags = $frozr_stored_meta['_fro_page_tags'][0];	
						$show_socials = $frozr_stored_meta['_fro_page_socials'][0];
						
						if (!is_page_template('template-page-archives.php')) {
							if ($show_thumbnail == 'yes') {
							// action hook for placing pages thumbnail
							do_action('frozr_pages_thumbnail');
							}
							global $id, $date_format; $ptitlet= __( 'Page Tags ', 'frozr' ); $ptitle= __( 'Children Pages', 'frozr' ); $sub_pages=wp_list_pages("title_li=<span class='page-sub-pages-title fs-icon-caret-right'><span class=\"pages_meta\">$ptitle</span></span>&echo=0&child_of=$id&show_date=modified&date_format=$date_format"); 
							if ( !empty ($sub_pages) && $show_sub_pages == 'yes' ) :?><div class="page-subpages"><i class="fs-icon-list-ul"></i><?php echo $sub_pages;?></div><?php endif;
							
							if ($show_tags == 'yes') {
							// if the page has tags, show them
							the_tags('<div class="page-tags"><i class="fs-icon-tags"></i><span class="fs-icon-caret-right"><span class="pages_meta">'.$ptitlet.'</span></span><p>', '' ,'</p></div>' );
							}
							if ($show_socials == 'yes') {
							//action hook to get the social icons
							do_action('frozr_social_sharing');
							}
						}
					}
					?></div>
					<?php if (frozr_mobile()) { echo '<div class="entry-content-wrapper">'; } ?>
					<div class="entry-content">
						<?php the_content();
						
						wp_link_pages( "\t\t\t\t\t<div class='page-link'>" . __( 'Pages:', 'frozr' ), "</div>\n", 'number' );	

						// action hook for calling the comments_template
						echo "<div class=\"comments-container\">";
						frozr_comments_template();
						echo "</div>"; ?>
						
					</div><!-- .entry-content -->
					<?php
					// calling the widget area 'page-inset'
					get_sidebar( 'page-inset' ); 
					if (frozr_mobile()) { echo '</div>'; } 
					?>
				</div><!-- #post -->
				<?php
				if ($frozr_stored_meta['_fro_quick_links'][0] == "yes") { ?>
					<script>
						jQuery(document).ready(function($){
							if ($('.entry-content h1, .entry-content h2').length) {
								$('.page-entry-header').append('<a data-role="button" href="#panel<?php the_ID(); ?>" class="frozr-open-quicklink-panel" title="<?php _e('Quick Links' ,'frozr'); ?>" ><i class="fs-icon-list-alt"></i><?php _e(' Contents' ,'frozr'); ?></a>');
							}
							var nx = 0;
							$('.entry-content h1, .entry-content h2').each(function () {
								var content = $(this).text();
								$(this).attr('id','link-'+nx);
								$('#panel<?php the_ID(); ?> > .ui-panel-inner > ul').append('<li><a href="#link-'+nx+'" data-rel="close" >'+content+'</a></li>');
							nx++;
							});
							$( "#panel<?php the_ID(); ?>" ).trigger( "updatelayout" );
							
						} )( jQuery );
					</script>
			<?php }
				// action hook for inserting content below #post
	        	frozr_belowpost();

	        	// end loop
        		endwhile; ?>	
			</div><!-- #content -->
			
			<?php 
				// action hook for placing content below #content
				frozr_belowcontent(); 
			}
			?> 
			
		</div><!-- #container -->

<?php 
    // action hook for placing content below #container
    frozr_belowcontainer();

	if (function_exists('bbpress') && is_bbpress() ) {

    // calling the widget area 'forum'
    get_sidebar('forum');

	} else {
    // calling the widget area 'page'
    get_sidebar('page');
	}
	
    // calling footer.php
    get_footer();
?>