<?php
/**
 * using Link track as thumbnail
 *
 * Display the post link thumbnail meta box.
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
function call_FrozrLinkThumb() {
    new FrozrLinkThumb();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_FrozrLinkThumb' );
    add_action( 'load-post-new.php', 'call_FrozrLinkThumb' );
}

/** 
 * The Class.
 */
class FrozrLinkThumb {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
	 	// Styles, and JavaScript
	 	add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
	 
	 	// Setup the meta box hooks
	 	add_action( 'add_meta_boxes', array( $this, 'link_thumbnail_metabox' ) );
	 	add_action( 'save_post', array( $this, 'save' ) );
	}
	/*--------------------------------------------*
	 * Styles, and JavaScript
	 *--------------------------------------------*/
	
	/**
	 * Defines the admin styles.
	 */
	public function register_admin_styles() {
		wp_enqueue_style('linkthumb',  get_template_directory_uri() . '/library/metaboxes/css/link_thumbnail.css');
	} // end register_admin_styles
	
	/*--------------------------------------------*
	 * Hooks
	 *--------------------------------------------*/
	
	/**
	 * Introduces the link thumbnail meta box.
	 */ 
	public function link_thumbnail_metabox() {
	
		add_meta_box(
			'frozr-post-format-link',
			__( 'Frozr Link Thumbnail ', 'frozr' ),
			array( $this, 'post_link_thumbnail' ),
			'post',
			'side'
		);
	
	} // link_thumbnail_metabox

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['frozr_link_thumb_nonce'] ) )
			return $post_id;

		$nonce = $_POST['frozr_link_thumb_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'flt_nonce' ) )
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
		update_post_meta( $post_id, '_fro_link_title', $_POST['fro_link_title'] );
		update_post_meta( $post_id, '_fro_link_url', $_POST['fro_link_url'] );
		
		}

	 /* Adds the file input box for the post meta data.
	 *
	 * @param		object	$post	The post to which this information is going to be saved.
	 */
	public function post_link_thumbnail( $post ) {
	
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'flt_nonce', 'frozr_link_thumb_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$link_title = get_post_meta( $post->ID, '_fro_link_title', true );
		$link_url = get_post_meta( $post->ID, '_fro_link_url', true );
	
			
		?>
		<div id="post_link_thumbnail">
			<div class="inset_link_title">
				<span class="pl_desc"><?php _e('Use this Metabox If you\'d like to include a link in the post thumbnail.','frozr'); ?></span>
				<label for="fro_link_title"><?php _e( 'Link Title', 'frozr' ); ?></label>
				<input type="text" id="fro_link_title" name="fro_link_title" value="<?php echo esc_attr( $link_title ); ?>" size="25" />

			</div>
			<div class="insert_link_url">
				<label for="fro_link_url"><?php _e( 'Link URL', 'frozr' ); ?></label>
				<input type="text" id="fro_link_url" name="fro_link_url" value="<?php echo esc_url( $link_url ); ?>" size="25" />
			</div>
		</div>
		<?php

	
	} // end post_link
}