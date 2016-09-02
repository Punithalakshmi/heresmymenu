<?php
/**
 * using Audio track as thumbnail
 *
 * Display the post audio thumbnail meta box.
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
function call_FrozrAudioThumb() {
    new FrozrAudioThumb();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_FrozrAudioThumb' );
    add_action( 'load-post-new.php', 'call_FrozrAudioThumb' );
}

/** 
 * The Class.
 */
class FrozrAudioThumb {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
	 	// Styles, and JavaScript
	 	add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
	 	add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );
	 
	 	// Setup the meta box hooks
	 	add_action( 'add_meta_boxes', array( $this, 'audio_thumbnail_metabox' ) );
	 	add_action( 'save_post', array( $this, 'save' ) );
	}
	/*--------------------------------------------*
	 * Styles, and JavaScript
	 *--------------------------------------------*/
	
	/**
	 * Defines the admin styles.
	 */
	public function register_admin_styles() {
		wp_enqueue_style('thickbox');
		wp_enqueue_style('audiothumb',  get_template_directory_uri() . '/library/metaboxes/css/audio_thumbnail.css');
	} // end register_admin_styles

	/**
	 * Addings the admin JavaScript
	 */
	public function register_admin_scripts() {
		wp_enqueue_script('media-upload');
	    wp_enqueue_script('thickbox');
		wp_enqueue_script('audthumb',  get_template_directory_uri() . '/library/metaboxes/js/audthumb.js', array('jquery'), false);
	} // end register_scripts
	
	/*--------------------------------------------*
	 * Hooks
	 *--------------------------------------------*/
	
	/**
	 * Introduces the audio thumbnail meta box.
	 */ 
	public function audio_thumbnail_metabox() {
	
		add_meta_box(
			'frozr-post-format-audio',
			__( 'Frozr Audio Thumbnail ', 'frozr' ),
			array( $this, 'post_audio_thumbnail' ),
			'post',
			'side'
		);
	
	} // audio_thumbnail_metabox

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['frozr_aud_thumb_nonce'] ) )
			return $post_id;

		$nonce = $_POST['frozr_aud_thumb_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'fat_nonce' ) )
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
		update_post_meta( $post_id, '_fro_aud_mp3', $_POST['fro_audio_mp3'] );
		update_post_meta( $post_id, '_fro_aud_oga', $_POST['fro_audio_oga'] );
		
		}

	 /* Adds the file input box for the post meta data.
	 *
	 * @param		object	$post	The post to which this information is going to be saved.
	 */
	public function post_audio_thumbnail( $post ) {
	
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'fat_nonce', 'frozr_aud_thumb_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$audio_mp3 = get_post_meta( $post->ID, '_fro_aud_mp3', true );
		$audio_oga = get_post_meta( $post->ID, '_fro_aud_oga', true );
	
			
		?>
		<div id="post_audio_thumbnail">
			<div class="insert_audio_mp3">
				<span class="pa_desc"><?php _e('If you\'d like to use an MP3/OGA-AGG audio track in the post thumbnail, upload or past your audio track URL below. Make sure you provide both .mp3 and .agg/.oga file formats in order for self hosted audio to function across all web browsers.','frozr'); ?></span>
				<label for="fro_audio_mp3"><?php _e( 'MP3 URL', 'frozr' ); ?></label>
				<input type="text" id="fro_audio_mp3" name="fro_audio_mp3" value="<?php echo esc_url( $audio_mp3 ); ?>" size="25" />
				<a id="upload_mp3" href="#"><?php _e('Upload','frozr'); ?></a>
			</div>
			<div class="upload_audio_oga">
				<label for="fro_audio_oga"><?php _e( 'OGA URL', 'frozr' ); ?></label>
				<input type="text" id="fro_audio_oga" name="fro_audio_oga" value="<?php echo esc_url( $audio_oga ); ?>" size="25" />
				<a id="upload_oga" href="#"><?php _e('Upload','frozr'); ?></a>

			</div>
		</div>
		<?php

	
	} // end post_media
}