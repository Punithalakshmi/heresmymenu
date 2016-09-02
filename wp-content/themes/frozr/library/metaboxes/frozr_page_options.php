<?php
/**
 * Frozr pages meta options
 *
 * Display the pages options meta box.
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
function call_FrozrPageOpt() {
    new FrozrPageOpt();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_FrozrPageOpt' );
    add_action( 'load-post-new.php', 'call_FrozrPageOpt' );
}

/** 
 * The Class.
 */
class FrozrPageOpt {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
	 	// Styles, and JavaScript
	 	add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
	 
	 	// Setup the meta box hooks
	 	add_action( 'add_meta_boxes', array( $this, 'page_opt_metabox' ) );
	 	add_action( 'save_post', array( $this, 'save' ) );
	}
	/*--------------------------------------------*
	 * Styles, and JavaScript
	 *--------------------------------------------*/
	
	/**
	 * Defines the admin styles.
	 */
	public function register_admin_styles() {
		wp_enqueue_style('pageopt',  get_template_directory_uri() . '/library/metaboxes/css/page_options.css');
	} // end register_admin_styles
	
	/*--------------------------------------------*
	 * Hooks
	 *--------------------------------------------*/
	
	/**
	 * Introduces the pages meta options box.
	 */ 
	public function page_opt_metabox() {
	
		add_meta_box(
			'frozr-page-opt',
			__( 'Frozr pages meta options', 'frozr' ),
			array( $this, 'page_options' ),
			'page',
			'side'
		);
	
	} // page_opt_metabox

	/**
	 * Save the meta when the page is saved.
	 *
	 * @param int $post_id The ID of the page being saved.
	 */
	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['frozr_page_opt_nonce'] ) )
			return $post_id;

		$nonce = $_POST['frozr_page_opt_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'fpo_nonce' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
        // so we don't want to do anything.
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
		if( isset( $_POST[ 'fro_page_thumb' ] ) ) {
			update_post_meta( $post_id, '_fro_page_thumb', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_page_thumb', '' );
		}
		if( isset( $_POST[ 'fro_page_subs' ] ) ) {
			update_post_meta( $post_id, '_fro_page_subs', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_page_subs', '' );
		}
		if( isset( $_POST[ 'fro_page_tags' ] ) ) {
			update_post_meta( $post_id, '_fro_page_tags', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_page_tags', '' );
		}
		if( isset( $_POST[ 'fro_page_socials' ] ) ) {
			update_post_meta( $post_id, '_fro_page_socials', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_page_socials', '' );
		}
	
	}

	 /* Adds the file input box for the page meta data.
	 *
	 * @param object $post The page to which this information is going to be saved.
	 */
	public function page_options( $post ) {
	
		global $pagenow;
		
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'fpo_nonce', 'frozr_page_opt_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$frozr_stored_meta = get_post_meta( $post->ID );
	
			
		?>
		<div class="page_opt_content">
			<label for="fro_page_thumb">
				<input type="checkbox" name="fro_page_thumb" id="fro_page_thumb" value="yes" <?php if ( $frozr_stored_meta['_fro_page_thumb'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show page thumbnail', 'frozr' )?>
			</label>
			<label for="fro_page_subs">
				<input type="checkbox" name="fro_page_subs" id="fro_page_subs" value="yes" <?php if ( $frozr_stored_meta['_fro_page_subs'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show sub-pages', 'frozr' )?>
			</label>
			<label for="fro_page_tags">
				<input type="checkbox" name="fro_page_tags" id="fro_page_tags" value="yes" <?php if ( $frozr_stored_meta['_fro_page_tags'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show pages tags. (if using a page tags plugin)', 'frozr' )?>
			</label>
			<label for="fro_page_socials">
				<input type="checkbox" name="fro_page_socials" id="fro_page_socials" value="yes" <?php if ( $frozr_stored_meta['_fro_page_socials'][0] == "yes" || 'post-new.php' == $pagenow ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Show page share socials', 'frozr' )?>
			</label>
		</div>
	<?php

	
	} // end page_options
}