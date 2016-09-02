<?php
/**
 * Discussion Extensions
 *
 * @package FrozrCoreLibrary
 * @subpackage DiscussionExtensions
 */
 
if (function_exists('childtheme_override_commentmeta'))  {
	/**
	 * @ignore
	 */
	function frozr_commentmeta() {
		childtheme_override_commentmeta();
	}
} else {
	/**
	 * Create comment meta
	 * 
	 * Located in discussion.php
	 * 
	 * Override: childtheme_override_commentmeta <br>
	 * Filter: frozr_commentmeta
	 */
	function frozr_commentmeta($print = TRUE) {
		$content = '<div class="comment-meta"><p title="'. __('Comment meta', 'frozr' ) . '" class="comment_meta">' . 
					sprintf( _x('Posted %s at %s', 'Posted {$date} at {$time}', 'frozr' ) , 
						get_comment_date(),
						get_comment_time() );

		$content .= ' <span class="meta-sep">|</span> ' . sprintf( '<a href="%1$s" title="%2$s">%3$s</a>', '#comment-' . get_comment_ID() , __( 'Permalink to this comment', 'frozr' ), __( 'Permalink', 'frozr' ) );
							
		if ( get_edit_comment_link() ) {
			$content .=	sprintf(' <span class="meta-sep">|</span><span class="edit-link"> <a class="comment-edit-link" href="%1$s" title="%2$s">%3$s</a></span>',
						get_edit_comment_link(),
						__( 'Edit comment' , 'frozr' ),
						__( 'Edit', 'frozr' ) );
			}
		
		$content .= '</p></div>' . "\n";
			
		return $print ? print(apply_filters('frozr_commentmeta', $content)) : apply_filters('frozr_commentmeta', $content);

	} // end frozr_commentmeta
}

/**
 * Register action hook: frozr_abovecomment
 * 
 * Located in discussion.php, at the beginning of the li#comment-[id] element.
 * Note that this is *per comment*
 */
function frozr_abovecomment() {
	do_action('frozr_abovecomment');
}

/**
 * Register action hook: frozr_belowcomment
 * 
 * Located discussion.php, just after the comment reply link.
 * Note that this is *per comment*:
 */
function frozr_belowcomment() {
	do_action('frozr_belowcomment');
}

?>