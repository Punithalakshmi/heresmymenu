<?php
/**
 * Gallery post-formats thumbnail
 *
 * Display the post gallery thumbnail meta box.
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
function call_FrozrGalleryThumb() {
    new FrozrGalleryThumb();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_FrozrGalleryThumb' );
    add_action( 'load-post-new.php', 'call_FrozrGalleryThumb' );
}

/** 
 * The Class.
 */
class FrozrGalleryThumb {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
	 	// Styles, and JavaScript
	 	add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
	 	add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );
	 
	 	// Setup the meta box hooks
	 	add_action( 'add_meta_boxes', array( $this, 'gallery_thumbnail_metabox' ) );
	 	add_action( 'save_post', array( $this, 'save' ) );
	}
	/*--------------------------------------------*
	 * Styles, and JavaScript
	 *--------------------------------------------*/
	
	/**
	 * Defines the admin styles.
	 */
	public function register_admin_styles() {
		wp_enqueue_style('gallerythumb',  get_template_directory_uri() . '/library/metaboxes/css/gallery_thumbnail.css');
		wp_enqueue_style('thickbox');
	} // end plugin_textdomain
	
	/**
	 * Addings the admin JavaScript
	 */
	public function register_admin_scripts() {
		wp_enqueue_script('media-upload');
	    wp_enqueue_script('thickbox');
		wp_enqueue_script('galthumb',  get_template_directory_uri() . '/library/metaboxes/js/galthumb.js', array('jquery'), false);
	} // end register_scripts

	/*--------------------------------------------*
	 * Hooks
	 *--------------------------------------------*/
	
	/**
	 * Introduces the file meta box for uploading the file to this post.
	 */ 
	public function gallery_thumbnail_metabox() {
	
		add_meta_box(
			'frozr-post-format-gallery',
			__( 'Frozr Image Gallery Thumbnail ', 'frozr' ),
			array( $this, 'post_gallery_thumbnail' ),
			'post',
			'normal'
		);
	
	} // gallery_thumbnail_metabox

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['frozr_gal_thumb_nonce'] ) )
			return $post_id;

		$nonce = $_POST['frozr_gal_thumb_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'fgt_nonce' ) )
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

		$attachment_ids = isset( $_POST['post_gallery_thumb'] ) ? array_filter( explode( ',', $_POST['post_gallery_thumb'] ) ) : array();
		update_post_meta( $post_id, '_fro_gal_thumb', implode( ',', $attachment_ids ) );
	}


	 /* Adds the file input box for the post meta data.
	 *
	 * @param		object	$post	The post to which this information is going to be saved.
	 */
	public function post_gallery_thumbnail( $post ) {
	
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'fgt_nonce', 'frozr_gal_thumb_nonce' );
		?>
		<div id="post_gallery_thumbnail">
			<ul class="fro_gal_thmb">
				<?php
					$post_gallery_thumb = get_post_meta( $post->ID, '_fro_gal_thumb', true );
					$attachments = array_filter( explode( ',', $post_gallery_thumb ) );

					if ( $attachments ) {
						foreach ( $attachments as $attachment_id ) {
							echo '<li class="image" data-attachment_id="' . esc_attr( $attachment_id ) . '">
								' . wp_get_attachment_image( $attachment_id, 'thumbnail' ) . '
								<ul class="actions">
									<li><a href="#" class="delete tips" title="' . __( 'Delete image', 'frozr' ) . '">' . __( 'Delete', 'frozr' ) . '</a></li>
								</ul>
							</li>';
						}
					}
				?>
			</ul>

			<input type="hidden" id="post_gallery_thumb" name="post_gallery_thumb" value="<?php echo esc_attr( $post_gallery_thumb ); ?>" />

		</div>
		<p class="add_thumb_images hide-if-no-js">
			<a href="#" data-choose="<?php _e( 'Add images', 'frozr' ); ?>" data-update="<?php _e( 'Add to gallery', 'frozr' ); ?>" data-delete="<?php _e( 'Delete image', 'frozr' ); ?>" data-text="<?php _e( 'Delete', 'frozr' ); ?>"><?php _e( 'Add images', 'frozr' ); ?></a>
		</p>
		<?php

	
	} // end post_media
}