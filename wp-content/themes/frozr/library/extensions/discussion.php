<?php
/**
 * Discussion
 *
 * @package FrozrCoreLibrary
 * @subpackage Discussion
 */
 
/**
 * Custom callback function to list comments in the Frozr style. 
 * 
 * If you want to use your own comments callback for wp_list_comments, filter list_comments_arg
 *
 * @param object $comment 
 * @param array $args 
 * @param int $depth 
 */
function frozr_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
	$GLOBALS['comment_depth'] = $depth;
?>
    
       	<li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
    	
    		<?php 
    			// action hook for inserting content above #comment
    			frozr_abovecomment();
    		?>
    		
    		<div class="comment-author vcard"><?php frozr_commenter_link() ?></div>
    		    		
    			<?php  
    				if ( $comment->comment_approved == '0' ) {
    					echo "\t\t\t\t\t" . '<span class="unapproved">';
    					_e( 'Your comment is awaiting moderation', 'frozr' );
    					echo ".</span>\n";
    				}
    			?>
    			
            <div class="comment-content"><?php
            	$commenter = get_comment_author_link();
					if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
						$commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
					} else {
						$commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
					}
				printf( __( '%1$s said:', 'frozr' ) . '</p>', sprintf( '<p class="fn">%s', $commenter ));
				comment_text();
				
    		frozr_commentmeta(TRUE);

			// echo the comment reply link with help from Justin Tadlock http://justintadlock.com/ and Will Norris http://willnorris.com/
				
				if( $args['type'] == 'all' || get_comment_type() == 'comment' ) :
					comment_reply_link( array_merge( $args, array(
						'reply_text' => __( 'Reply', 'frozr' ), 
						'login_text' => __( 'Log in to reply.', 'frozr' ),
						'depth'      => $depth,
						'before'     => '<div class="comment-reply fs-icon-reply"><div class="cr">', 
						'after'      => '</div></div>'
					)));
				endif;?>

    		</div><?php
			
				// action hook for inserting content above #comment
				frozr_belowcomment();

}

/**
 * Custom callback to list pings in the Frozr style
 *
 * @param object $comment 
 * @param array $args 
 * @param int $depth 
 */
function frozr_pings($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	?>

    		<li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
    			<div class="comment-author"><?php printf(_x('By %1$s on %2$s at %3$s', 'By {$authorlink} on {$date} at {$time}', 'frozr' ),
    					get_comment_author_link(),
    					get_comment_date(),
    					get_comment_time() );
    					edit_comment_link(__('Edit', 'frozr' ), ' <span class="meta-sep">|</span>' . "\n\n\t\t\t\t\t\t" . '<span class="edit-link">', '</span>'); ?>
    			</div>
    			
    			<?php 
    				if ($comment->comment_approved == '0') {
    				echo "\t\t\t\t\t" . '<span class="unapproved">';
    					_e( 'Your trackback is awaiting moderation', 'frozr' );
    					
    				echo ".</span>\n";
    				}
    			?>
    			
            	<div class="comment-content">
            	
    				<?php comment_text(); ?>
    				
				</div>
				

<?php }

