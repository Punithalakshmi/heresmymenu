<?php
/**
 * Comments Extensions
 *
 * @package FrozrCoreLibrary
 * @subpackage CommentsExtensions
 */

/**
 * Action Hook: frozr_abovecomments
 * 
 * Located in comments.php
 * Just before #comments
 */
function frozr_abovecomments() {
    do_action('frozr_abovecomments');
}

/**
 * Action Hook: frozr_abovecommentslist
 * 
 * Located in comments.php
 * Just before #comments-list
 */
function frozr_abovecommentslist() {
    do_action('frozr_abovecommentslist');
}

/**
 * Action Hook: frozr_belowcommentslist
 * 
 * Located in comments.php
 * Just after #comments-list
 */
function frozr_belowcommentslist() {
    do_action('frozr_belowcommentslist');
}

/**
 * Action Hook: frozr_abovetrackbackslist
 * 
 * Located in comments.php
 * Just before #trackbacks-list
 */
function frozr_abovetrackbackslist() {
    do_action('frozr_abovetrackbackslist');
}

/**
 * Action Hook: frozr_belowtrackbackslist
 * 
 * Located in comments.php
 * Just after #trackbacks-list
 */
function frozr_belowtrackbackslist() {
    do_action('frozr_belowtrackbackslist');
}

/**
 * Action Hook: frozr_abovecommentsform
 * 
 * Located in comments.php
 * Just before the comments form
 */
function frozr_abovecommentsform() {
    do_action('frozr_abovecommentsform');
}

/**
 * Provides Plugin Compatibility: Subscribe to Comments
 *
 * Adds the subscribe to comments button.
 *
 * @link http://wordpress.org/extend/plugins/subscribe-to-comments/ Subscribe to Comments Plugin Page
 */
function frozr_show_subscription_checkbox() {
    if(function_exists('show_subscription_checkbox')) { show_subscription_checkbox(); }
}
add_action('comment_form', 'frozr_show_subscription_checkbox', 98);

/**
 * Action Hook: frozr_belowcommentsform
 * 
 * Located in comments.php
 * Just after the comments form
 */
function frozr_belowcommentsform() {
    do_action('frozr_belowcommentsform');
}

/**
 * Provides Plugin Compatibility: Subscribe to Comments
 *
 * Adds the subscribe without commenting button
 *
 * @link http://wordpress.org/extend/plugins/subscribe-to-comments/ Subscribe to Comments Plugin Page
 */
function frozr_show_manual_subscription_form() {
    if(function_exists('show_manual_subscription_form')) { show_manual_subscription_form(); }
}
add_action('frozr_belowcommentsform', 'frozr_show_manual_subscription_form', 5);

/**
 * Action Hook: frozr_belowcomments
 * 
 * Located in comments.php
 * Just after #comments
 */
function frozr_belowcomments() {
    do_action('frozr_belowcomments');
}

/**
 * Filter: frozr_singlecomment_text
 *
 * Creates the standard text for one comment
 * Located in comments.php
 */
function frozr_singlecomment_text() {
    $content = sprintf( _x( '%1$sOne%2$s Comment' , 'One Comment, where %$1s and %$2s are "span" tags', 'frozr' ), '<span>' , '</span>' );
    return apply_filters( 'frozr_singlecomment_text', $content );
}

/**
 * Filter: frozr_multiplecomments_text
 *
 * Creates the standard text for more than one comment
 * Located in comments.php
 */
function frozr_multiplecomments_text() {
    $content = '<span>%d</span> ' . __('Comments', 'frozr' );
    return apply_filters( 'frozr_multiplecomments_text', $content );
}


/**
 * Filter: list_comments_arg
 * 
 * Creates the list comments arguments
 */
function frozr_list_comments_arg() {
	$content = 'type=comment&callback=frozr_comments';
	return apply_filters('list_comments_arg', $content);
}


/**
 * Filter: frozr_postcomment_text
 * 
 * Creates the standard text 'Post a Comment'
 * Located in comments.php
 */
function frozr_postcomment_text() {

	/* translators: comment form title */
    $content = __('Post Comment','frozr');
    return apply_filters( 'frozr_postcomment_text', $content );
}

/**
 * Filter: frozr_postreply_text
 * 
 * Creates the standard text 'Post a Reply to %s'
 * Located in comments.php
 */
function frozr_postreply_text() {
	/* translators: comment reply form title, %s is author of comment */
    $content = __('Post a Reply to %s', 'frozr' );
    return apply_filters( 'frozr_postreply_text', $content );
}

/**
 * Filter: frozr_commentbox_text
 * 
 * Creates the standard text 'Comment' for the text box
 * Located in comments.php
 */
function frozr_commentbox_text() {
	/* translators: label for comment form textarea */
	$content = _x('Comment', 'noun', 'frozr' );
    return apply_filters( 'frozr_commentbox_text', $content );
}

/**
 * Filter: frozr_cancelreply_text function.
 * 
 * Creates the standard text 'Cancel reply'
 * Located in comments-extensions.php
 */
function frozr_cancelreply_text() {
    $content = __('Cancel reply', 'frozr' );
    return apply_filters( 'frozr_cancelreply_text', $content );
}

/**
 * Filter: frozr_commentbutton_text
 * 
 * Creates the standard text 'Post Comment' for the send button
 * Located in comments.php
 */
function frozr_commentbutton_text() {
	/* translators: text of comment button */
    $content = __('Post Comment','frozr');
    return apply_filters( 'frozr_commentbutton_text', $content );
}

/**
 * Filter: frozr_commentfield_name_text
 * 
 * Creates the standard text 'Name' for the field input box
 * Located in comments.php
 */
function frozr_commentfield_name_text() {
	/* translators: label for comment author name field */
	$content = _x('Name', 'noun', 'frozr' );
    return apply_filters( 'frozr_commentfield_name_text', $content );
}

/**
 * Filter: frozr_commentfield_email_text
 * 
 * Creates the standard text 'Email' for the field input box
 * Located in comments.php
 */
function frozr_commentfield_email_text() {
	/* translators: label for comment author email field */
	$content = _x('Email', 'noun', 'frozr' );
    return apply_filters( 'frozr_commentfield_email_text', $content );
}

/**
 * Filter: frozr_commentfield_website_text
 * 
 * Creates the standard text 'Website' for the field input box
 * Located in comments.php
 */
function frozr_commentfield_website_text() {
	/* translators: label for comment author Website field */
	$content = _x('Website', 'noun', 'frozr' );
    return apply_filters( 'frozr_commentfield_website_text', $content );
}

/**
 * Function: frozr_comment_form_args
 * Filter: comment_form_default_fields
 * 
 * Creates the standard arguments for comment_form()
 * Located in comments.php
 */
function frozr_comment_form_args( $post_id = null ) {
	global $user_identity, $id;
	
	if ( null === $post_id )
          $post_id = $id;
      else
          $id = $post_id;
	
	$req = get_option( 'require_name_email' );
	
	$commenter = wp_get_current_commenter();
	
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$fields =  array(
		'author' => '<div class="form-input">' . '<input class="jq_watermark" placeholder="' . frozr_commentfield_name_text() . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' .  ' maxlength="20" tabindex="3"' . $aria_req . ' /></div>',
		'email'  => '<div class="form-input">' . '<input class="jq_watermark" placeholder="' . frozr_commentfield_email_text() . '" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="50" tabindex="4"' . $aria_req . ' /></div>',
		'url'    => '<div class="form-input">' . '<input class="jq_watermark" placeholder="' . frozr_commentfield_website_text() . '" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="50" tabindex="5" /></div>',
	);

	
	$args = array(
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'        => '<div class="form-textarea"><textarea class="jq_watermark" placeholder="' . frozr_commentbox_text() . '" id="comment" name="comment" cols="45" rows="8" tabindex="6" aria-required="true"></textarea></div>',

		'comment_notes_before' => '<p class="comment-notes">' . sprintf( _x('Your email is <em>never</em> published nor shared.', '%$1s and %$2s are "em" tags for emphasis on never', 'frozr' ), '<em>' , '</em>' ) . ( $req ? ' ' . sprintf( _x('Required fields are marked %1$s*%2$s', '%$1s and %$2s are "span" tags', 'frozr' ), '<span class="required">', '</span>' ) : '' ) . '</p>',

		'must_log_in'          => '<p id="login-req">' .  sprintf( __('You must be %1$slogged in%2$s to post a comment.', 'frozr' ), sprintf('<a href="%s" title ="%s">', esc_attr( wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ), esc_attr__( 'Log in', 'frozr' ) ), '</a>' ). '</p>',

		'logged_in_as'         => '<p id="login"><span class="loggedin">' . sprintf( __('Logged in as %s', 'frozr' ), sprintf( ' <a href="%1$s" title="%2$s">%3$s</a>', admin_url( 'profile.php' ), sprintf( esc_attr__('Logged in as %s', 'frozr' ), $user_identity ) , $user_identity ) ) .'</span> <span class="logout">' . sprintf('<a href="%s" title="%s">%s</a>' , esc_attr( wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ), esc_attr__('Log out of this account', 'frozr' ) , __('Log out?', 'frozr' ) ) . '</span></p>',
		
		'comment_notes_after'  => '<div id="form-allowed-tags" class="form-section"><p><span>' . sprintf( _x('You may use these %1$sHTML%2$s tags and attributes', '%$1s and %$2s are "abbr" tags', 'frozr' ), '<abbr title="HyperText Markup Language">', '</abbr>' ) . '</span> <code>' . allowed_tags() . '</code></p></div>',

		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'title_reply'          => frozr_postcomment_text(),
		'title_reply_to'       => frozr_postreply_text(),
		'cancel_reply_link'    => frozr_cancelreply_text(),
		'label_submit'         => frozr_commentbutton_text(),

	);
	return apply_filters( 'frozr_comment_form_args', $args );	
}

/**
 * Produces an avatar image with the hCard-compliant photo class
 */
function frozr_commenter_link() {
	$avatar_email = get_comment_author_email();
	$avatar_size = apply_filters( 'avatar_size', '40' ); // Available filter: avatar_size
	$avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, $avatar_size ) );
	echo $avatar;
} 

/**
 * ActionHook: frozr_comments_template
 */
function frozr_comments_template() {
	do_action('frozr_comments_template');
}

/**
 *  Outputs the standard comments template
 */
function frozr_include_comments() {
	// Checking for defined constant to enable conditional comment display for Pages
    if (  current_theme_supports( 'frozr_legacy_comment_handling' ) && is_page() ) {
    	// Needs post-meta key/value of "comments" to call comments template on Pages!
       	if ( get_post_custom_values('comments') )
			comments_template('', true);	    	
	// WordPress standard comment handling is the default if constant is not set
	} else {
		comments_template('', true);
	}
}

add_action('frozr_comments_template','frozr_include_comments', 5);

function frozr_get_comment_link( $link , $comment, $args ) {
	global  $wp_rewrite; 

	$args['type'] = 'comment';
	$args['page'] = get_page_of_comment( $comment->comment_ID, $args );
	
	if ( $args['per_page'] ) {
		if ( '' == $args['page'] )
			$args['page'] = ( !empty($in_comment_loop) ) ? get_query_var('cpage') : get_page_of_comment( $comment->comment_ID, $args );

		if ( $wp_rewrite->using_permalinks() )
			$link = user_trailingslashit( trailingslashit( get_permalink( $comment->comment_post_ID ) ) . 'comment-page-' . $args['page'], 'comment' );
		else
			$link = add_query_arg( 'cpage', $args['page'], get_permalink( $comment->comment_post_ID ) );
	} else {
		$link = get_permalink( $comment->comment_post_ID );
	}

	return $link . '#comment-' . $comment->comment_ID; 
}
add_filter( 'get_comment_link', 'frozr_get_comment_link', 10, 3 );

?>