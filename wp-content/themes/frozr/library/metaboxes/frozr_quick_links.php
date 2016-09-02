<?php
/**
 * Frozr Quick links check for posts and pages
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
function call_FrozrQuickLinks() {
    new FrozrQuickLinks();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_FrozrQuickLinks' );
    add_action( 'load-post-new.php', 'call_FrozrQuickLinks' );
}

/** 
 * The Class.
 */
class FrozrQuickLinks {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
	 	// Styles, and JavaScript
	 	add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
	 
	 	// Setup the meta box hooks
	 	add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
	 	add_action( 'save_post', array( $this, 'save' ) );
	}
	/*--------------------------------------------*
	 * Styles, and JavaScript
	 *--------------------------------------------*/
	
	/**
	 * Defines the admin styles.
	 */
	public function register_admin_styles() {
		wp_enqueue_style('quicklinks',  get_template_directory_uri() . '/library/metaboxes/css/quicklinks.css');
	} // end register_admin_styles
	
	/*--------------------------------------------*
	 * Hooks
	 *--------------------------------------------*/
	
	/**
	 * Introduces the Quick links meta box.
	 */ 
	public function add_meta_box( $post_type ) {
    $post_types = array('post', 'page');     //limit meta box to certain post types
    if ( in_array( $post_type, $post_types )) {
		add_meta_box(
			'frozr_quick_links',
			__( 'Frozr Content Quick Links', 'frozr' ),
			array( $this, 'quicklinks' ),
			$post_type,
			'side'
		);
    }
	} // quick_links_metabox

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['frozr_quicklinks_nonce'] ) )
			return $post_id;

		$nonce = $_POST['frozr_quicklinks_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'fql_nonce' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
                //     so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $post_id;

		// Check the user's permissions.
		if ( isset( $_POST['post_type'] ) &&'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;
	
		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		/* OK, its safe for us to save the data now. */
		
		// Update the meta field.
		if( isset( $_POST[ 'fro_quick_links' ] ) ) {
			update_post_meta( $post_id, '_fro_quick_links', 'yes' );
		} else {
			update_post_meta( $post_id, '_fro_quick_links', '' );
		}
		
	}

	 /* Adds the file input box for the post meta data.
	 *
	 * @param object $post The post to which this information is going to be saved.
	 */
	public function quicklinks( $post ) {
			
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'fql_nonce', 'frozr_quicklinks_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$frozr_stored_meta = get_post_meta( $post->ID );
			
		?>
		<div class="quick_links_content">
			<label for="fro_quick_links">
				<input type="checkbox" name="fro_quick_links" id="fro_quick_links" value="yes" <?php if ( $frozr_stored_meta['_fro_quick_links'][0] == "yes" ) {echo 'checked="checked"';} ?> />
				<?php _e( 'Use quick links for this post?', 'frozr' )?></br>
				<?php _e( 'Quick links let you easily navigate through post/page content using main headlines.', 'frozr' )?>
			</label>
		</div>
	<?php

	
	} // end post_link
}