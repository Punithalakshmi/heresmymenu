<?php
/**
 * using video as thumbnail
 *
 * Display the post video thumbnail meta box.
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
function call_FrozrVideoThumb() {
    new FrozrVideoThumb();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_FrozrVideoThumb' );
    add_action( 'load-post-new.php', 'call_FrozrVideoThumb' );
}

/** 
 * The Class.
 */
class FrozrVideoThumb {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
	 	// Styles, and JavaScript
	 	add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
	 	add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );
	 
	 	// Setup the meta box hooks
	 	add_action( 'add_meta_boxes', array( $this, 'video_thumbnail_metabox' ) );
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
		wp_enqueue_style('videothumb',  get_template_directory_uri() . '/library/metaboxes/css/video_thumbnail.css');
	} // end plugin_textdomain
	
	/**
	 * Addings the admin JavaScript
	 */
	public function register_admin_scripts() {
		wp_enqueue_script('media-upload');
	    wp_enqueue_script('thickbox');
		wp_enqueue_script('vidthumb',  get_template_directory_uri() . '/library/metaboxes/js/vidthumb.js', array('jquery'), false);
	} // end register_scripts

	/*--------------------------------------------*
	 * Hooks
	 *--------------------------------------------*/
	
	/**
	 * Introduces the file meta box for uploading the file to this post.
	 */ 
	public function video_thumbnail_metabox() {
	
		add_meta_box(
			'frozr-post-format-video',
			__( 'Frozr Video Thumbnail ', 'frozr' ),
			array( $this, 'post_video_thumbnail' ),
			'post',
			'side'
		);
	
	} // video_thumbnail_metabox

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['frozr_vid_thumb_nonce'] ) )
			return $post_id;

		$nonce = $_POST['frozr_vid_thumb_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'fvt_nonce' ) )
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
		update_post_meta( $post_id, '_fro_vid_url', $_POST['fro_video_url'] );
		update_post_meta( $post_id, '_fro_vid_embed', $_POST['fro_video_embed'] );
		update_post_meta( $post_id, '_fro_mp4_url', $_POST['fro_mp4_url'] );
		
		}


	 /* Adds the file input box for the post meta data.
	 *
	 * @param		object	$post	The post to which this information is going to be saved.
	 */
	public function post_video_thumbnail( $post ) {
	
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'fvt_nonce', 'frozr_vid_thumb_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$video_url = get_post_meta( $post->ID, '_fro_vid_url', true );
		$video_embed = get_post_meta( $post->ID, '_fro_vid_embed', true );
		$video_mp4 = get_post_meta( $post->ID, '_fro_mp4_url', true );
	
			
		?>
		<div id="post_video_thumbnail">
			<div class="insert_video_code">
				<span class="pv_title"><?php _e('Paste Video URL/Code','frozr'); ?></span>
				<span class="pv_desc"><?php _e('If you want to use an external video which might be on YouTube, vimeo or any other video sharing website that match the ','frozr'); ?><a href="http://codex.wordpress.org/Embeds" title="WordPress internal whitelist "><?php _e('WordPress Internal whitelist','frozr'); ?></a><?php _e(' past its URL or Embed code below.','frozr'); ?></span>
				<label for="fro_video_url"><?php _e( 'Paste the video URL here', 'frozr' ); ?></label>
				<input type="text" id="fro_video_url" name="fro_video_url" value="<?php echo esc_url( $video_url ); ?>" size="25" />
				<label for="fro_video_embed"><?php _e( 'Or Paste the video Embed code here', 'frozr' ); ?></label>
				<textarea id="fro_video_embed" name="fro_video_embed" rows="1"><?php echo esc_attr( $video_embed ); ?></textarea>
			</div>
			<div class="upload_video_code">
				<span class="pv_title"><?php _e('Or Upload Mp4 Video','frozr'); ?></span>
				<span class="pv_desc"><?php _e('If you have the video on your computer or in the WP media gallery, then use this option.','frozr'); ?></span>
				<label for="fro_mp4_url">Mp4</label>
				<input type="text" id="fro_mp4_url" name="fro_mp4_url" value="<?php echo esc_url( $video_mp4 ); ?>" size="25" />
				<a id="upload_mp4" href="#"><?php _e('Upload your Mp4','frozr'); ?></a>
			</div>
		</div>
		<?php

	
	} // end post_media
}