<?php
/**
 * Comments Template
 *
 * Lists the comments and displays the comments form. 
 * 
 * @package Frozr
 * @subpackage Templates
 *
 * @todo chase the invalid counts & pagination for comments/trackbacks
 * @todo remove the THEMATIC_COMPATIBLE_COMMENT_FORM condition to a legacy function for template berevity
 */
?>
				<?php
					// action hook for inserting content above #comments
					frozr_abovecomments() 
				?>
				
				<div id="comments">
	
				<?php 
					// Disable direct access to the comments script
					if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
					    die ( __('Please do not load this page directly.', 'frozr' )  );
										
					// Check post password and cookies
					if ( post_password_required() ) :
				?>
	
					<div class="nopassword"><?php __('This post is password protected. Enter the password to view any comments.', 'frozr' ) ?></div>
				
				</div><!-- #comments -->
	
				<?php 
						return;
					endif; 
				
				?>
	
				<?php if ( have_comments() ) : ?>
	
					<?php
						// Collect the comments and pings
						$frozr_comments = $wp_query->comments_by_type['comment'];
						$frozr_pings = $wp_query->comments_by_type['pings'];
						
						// Calculate the total number of each
						$frozr_comment_count = count( $frozr_comments );
						$frozr_ping_count = count( $frozr_pings );
						
						// Get the page count for each
						$frozr_comment_pages = get_comment_pages_count( $frozr_comments );
						$frozr_ping_pages = get_comment_pages_count( $frozr_pings );
						
						// Determine which is the greater pagination number between the two (comment,ping) paginations
						$frozr_max_response_pages = ( $frozr_ping_pages > $frozr_comment_pages ) ? $frozr_ping_pages : $frozr_comment_pages;
						
						// Reset the query var to use our calculation for the maximum page (newest/oldest)
						if ( $overridden_cpage )
							set_query_var( 'cpage', 'newest' == get_option('default_comments_page') ? $frozr_comment_pages : 1 );
					?>
					
					<?php if ( ! empty( $comments_by_type['comment'] ) ) : ?>
							
					<?php
						// action hook for inserting content above #comments-list
						frozr_abovecommentslist() ;
					?>

						<?php if ( get_query_var('cpage') <= $frozr_comment_pages )  : ?>
					
					<div id="comments-list-wrapper" class="comments">

						<h3><?php printf( $frozr_comment_count > 1 ? frozr_multiplecomments_text() : frozr_singlecomment_text(), $frozr_comment_count ) ?></h3>
	
						<ol id="comments-list" >
							<?php wp_list_comments( frozr_list_comments_arg() ); ?>
						</ol>
										
					</div><!-- #comments-list-wrapper .comments -->
					
						<?php endif; ?>
						
					<?php 
						// action hook for inserting content below #comments-list
						frozr_belowcommentslist() 
					?>
					
					<?php endif; ?>
					
					<div id="comments-nav-below" class="comment-navigation">
	        		
	        			<div class="paginated-comments-links"><?php paginate_comments_links( 'total=' . $frozr_max_response_pages ); ?></div>
	                
	                </div>	
	                	                  
					<?php if ( ! empty( $comments_by_type['pings'] ) ) : ?>
	
					<?php 
						// action hook for inserting content above #trackbacks-list-wrapper
						frozr_abovetrackbackslist();
					?>
						
						<?php if ( get_query_var('cpage') <= $frozr_ping_pages ) : ?>
						
					<div id="pings-list-wrapper" class="pings">
						
						<h3><?php printf( $frozr_ping_count > 1 ? '<span>%d</span> ' . __( 'Trackbacks', 'frozr' ) : sprintf( _x( '%1$sOne%2$s Trackback', '%1$ and %2$s are <span> tags', 'frozr' ), '<span>', '</span>' ), $frozr_ping_count ) ?></h3>
	
						<ul id="trackbacks-list">
							<?php wp_list_comments( 'type=pings&callback=frozr_pings' ); ?>
						</ul>				
	
					</div><!-- #pings-list-wrapper .pings -->			
						
						<?php endif; ?>
						
					<?php
						// action hook for inserting content below #trackbacks-list
						frozr_belowtrackbackslist();
					?>
									
					<?php endif; ?>

				<?php endif; ?>
							
			<?php
				if ( 'open' == $post->comment_status ) : 
					if ( current_theme_supports( 'frozr_legacy_comment_form' ) ) {
						
						frozr_legacy_comment_form();

					} else {

						// action hook for inserting content above #commentform
						frozr_abovecommentsform();
						
						comment_form( frozr_comment_form_args() );

						// action hook for inserting content below #commentform
						frozr_belowcommentsform();
								
					}
				endif /* if ( 'open' == $post->comment_status ) */ 
						?>
	
				</div><!-- #comments -->
				
				<?php
					// action hook for inserting content below #comments
					frozr_belowcomments()
				?>