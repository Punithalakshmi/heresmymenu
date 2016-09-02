<?php
/**
 * Frozr Single post meta options
 *
 * Display the single post options meta box.
 *
 * @author      Frozr
 * @category    Metaboxes
 * @package     Frozr/Meta Boxes
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Calls the class on the post edit screen.
 */
function call_FrozrSingOpt() {
    new FrozrSingOpt();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_FrozrSingOpt' );
    add_action( 'load-post-new.php', 'call_FrozrSingOpt' );
}

/** 
 * The Class.
 */
class FrozrSingOpt {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
	 	// Styles, and JavaScript
	 	add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
	 
	 	// Setup the meta box hooks
	 	add_action( 'add_meta_boxes', array( $this, 'sing_opt_metabox' ) );
	 	add_action( 'save_post', array( $this, 'save' ) );
	}
	/*--------------------------------------------*
	 * Styles, and JavaScript
	 *--------------------------------------------*/
	
	/**
	 * Defines the admin styles.
	 */
	public function register_admin_styles() {
		wp_enqueue_style('singopt',  get_template_directory_uri() . '/library/metaboxes/css/sing_options.css');
	} // end register_admin_styles
	
	/*--------------------------------------------*
	 * Hooks
	 *--------------------------------------------*/
	
	/**
	 * Introduces the single options meta box.
	 */ 
	public function sing_opt_metabox() {
	
		add_meta_box(
			'frozr-sing-opt',
			__( 'Frozr post meta options', 'frozr' ),
			array( $this, 'sing_options' ),
			'post',
			'side'
		);
	
	} // sing_opt_metabox

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['frozr_sing_opt_nonce'] ) )
			return $post_id;

		$nonce = $_POST['frozr_sing_opt_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'fso_nonce' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
                //     so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $post_id;

		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;
	
		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		/* OK, its safe for us to save the data now. */
		
		// Update the meta field.
		if( isset( $_POST[ 'fro_sing_cat' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_cat', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_cat', '' );
		}
		if( isset( $_POST[ 'fro_sing_bookmark' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_bookmark', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_bookmark', '' );
		}
		if( isset( $_POST[ 'fro_sing_tags' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_tags', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_tags', '' );
		}
		if( isset( $_POST[ 'fro_sing_author' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_author', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_author', '' );
		}
		if( isset( $_POST[ 'fro_sing_date' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_date', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_date', '' );
		}
		if( isset( $_POST[ 'fro_sing_archive' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_archive', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_archive', '' );
		}
		if( isset( $_POST[ 'fro_sing_comments' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_comments', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_comments', '' );
		}
		if( isset( $_POST[ 'fro_sing_share' ] ) ) {
			update_post_meta( $post_id, '_fro_sing_share', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_sing_share', '' );
		}
		
		}

	 /* Adds the file input box for the post meta data.
	 *
	 * @param object $post The post to which this information is going to be saved.
	 */
	public function sing_options( $post ) {
	
		global $pagenow;
		
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'fso_nonce', 'frozr_sing_opt_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$frozr_stored_meta = get_post_meta( $post->ID );
	
			
		?>
		<div class="sing_opt_content">
			<label for="fro_sing_cat">
				<input type="checkbox" name="fro_sing_cat" id="fro_sing_cat" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_cat'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show Category', 'frozr' )?>
			</label>
			<label for="fro_sing_bookmark">
				<input type="checkbox" name="fro_sing_bookmark" id="fro_sing_bookmark" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_bookmark'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show Bookmark link', 'frozr' )?>
			</label>
			<label for="fro_sing_tags">
				<input type="checkbox" name="fro_sing_tags" id="fro_sing_tags" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_tags'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show post tags', 'frozr' )?>
			</label>
			<label for="fro_sing_author">
				<input type="checkbox" name="fro_sing_author" id="fro_sing_author" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_author'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show post author', 'frozr' )?>
			</label>
			<label for="fro_sing_date">
				<input type="checkbox" name="fro_sing_date" id="fro_sing_date" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_date'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show post date', 'frozr' )?>
			</label>
			<label for="fro_sing_archive">
				<input type="checkbox" name="fro_sing_archive" id="fro_sing_archive" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_archive'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show post archive', 'frozr' )?>
			</label>
			<label for="fro_sing_comments">
				<input type="checkbox" name="fro_sing_comments" id="fro_sing_comments" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_comments'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show comments count', 'frozr' )?>
			</label>
			<label for="fro_sing_share">
				<input type="checkbox" name="fro_sing_share" id="fro_sing_share" value="yes" <?php if ( $frozr_stored_meta['_fro_sing_share'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show post share', 'frozr' )?>
			</label>
		</div>
	<?php

	
	} // end post_link
}