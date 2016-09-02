<?php
/**
 * Helper Functions
 *
 * @package FrozrCoreLibrary
 * @subpackage Helpers
 */
 
 

/**
 * Create bullet-proof excerpt for meta name="description"
 * 
 * @param mixed $text
 * @return $text
 */
function frozr_trim_excerpt($text = '', $length = 55, $more = true) {
	if ( '' == $text ) {
		$text = get_the_content('');
	}
		$text = strip_shortcodes( $text );

		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text);
		$text = str_replace('"', '\'', $text);
		$excerpt_length = apply_filters('excerpt_length', $length);
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			if ($more == true) {
			array_push($words, '[...]');
			}
			$text = implode(' ', $words);
		}
	return $text;
}


/**
 * frozr_the_excerpt function.
 * 
 * @param string $deprecated (default: '')
 * @return $output
 */
function frozr_the_excerpt( $deprecated = '' ) {
	global $post;
	$output = '';
	$output = strip_tags( get_the_excerpt() );
	$output = str_replace( '"', '\'', $output );
	if ( post_password_required($post) ) {
		$output = __( 'There is no excerpt because this is a protected post.', 'frozr' );
		return $output;
	}

	return $output;
	
}

/**
 * frozr_the_excerpt_custom_1 function.
 * 
 * @return $output
 */
function custom_excerpt($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;
	if ( strlen($excerpt)>$charlength ) {
		$subex = substr($excerpt,0,$charlength-5);
		$exwords = explode(" ",$subex);
		$excut = -(strlen($exwords[count($exwords)-1]));
	if ( $excut<0 ) {
		echo substr($subex,0,$excut);
	}
	else {
		echo $subex;
	}
		echo '...';
		echo frozr_continue_reading_link();
	}
	else {
		echo $excerpt;
	}
}

/**
 * frozr_limit_info function.
 * 
 * @return $info
 */
function frozr_limit_info( $info, $charlength ) {
	$charlength++;
	if ( strlen($info)>$charlength ) {
		$subex = substr($info,0,$charlength);
		$exwords = explode(" ",$subex);
		$excut = -(strlen($exwords[count($exwords)-1]));
	if ( $excut<0 ) {
		echo substr($subex,0,$excut);
	}
	else {
		echo $subex;
	}
		echo '...';
	}
	else {
		echo $info;
	}
}

/**
 * frozr_the_excerpt_custom_2 function.
 * 
 * @return $output
 */
function custom_excerpt_2($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;
	if(strlen($excerpt)>$charlength) {
		$subex = substr($excerpt,0,$charlength-5);
		$exwords = explode(" ",$subex);
		$excut = -(strlen($exwords[count($exwords)-1]));
	if($excut<0) {
		echo substr($subex,0,$excut);
	}
	else {
		echo $subex;
	}
		echo '...';
		echo '<a href="'. esc_url( get_permalink() ) . '">' . __( 'Read more', 'frozr' ) . ' <span class="meta-nav">&rarr;</span></a>';
	}
	else {
		echo $excerpt;
	}
}

/**
 * frozr_continue_reading_link function.
 * 
 * @return $output
 */
function frozr_continue_reading_link() {
	return '<div class="button rm"> <a href="'. esc_url( get_permalink() ) . '">' . __( 'Read More', 'frozr' ) . '</a></div>';
}

/**
 * frozr_auto_excerpt_more filter.
 * 
 * @return $output
 */
add_filter( 'excerpt_more', 'frozr_auto_excerpt_more' );
function frozr_auto_excerpt_more( $more ) {
	return ' &hellip;' . frozr_continue_reading_link();
}

/**
 * frozr_excerpt_rss function.
 *
 * @return $output
 */
function frozr_excerpt_rss() {
	global $post;
	$output = '';
	$output = strip_tags( $post->post_excerpt );
	if ( post_password_required( $post ) ) {
		$output = __( 'There is no excerpt because this is a protected post.', 'frozr' );
		return $output;
}

	return apply_filters( 'frozr_excerpt_rss', $output );

}
add_filter( 'frozr_excerpt_rss', 'frozr_trim_excerpt' );

/**
 * Create nice multi_tag_title
 */
function frozr_tag_query() {
	$nice_tag_query = get_query_var( 'tag' ); // tags in current query
	$nice_tag_query = str_replace(' ', '+', $nice_tag_query); // get_query_var returns ' ' for AND, replace by +
	$tag_slugs = preg_split('%[,+]%', $nice_tag_query, -1, PREG_SPLIT_NO_EMPTY); // create array of tag slugs
	$tag_ops = preg_split('%[^,+]*%', $nice_tag_query, -1, PREG_SPLIT_NO_EMPTY); // create array of operators

	$tag_ops_counter = 0;
	$nice_tag_query = '';

	foreach ($tag_slugs as $tag_slug) { 
		$tag = get_term_by('slug', $tag_slug ,'post_tag');
		// prettify tag operator, if any
		if ( isset($tag_ops[$tag_ops_counter])  &&  $tag_ops[$tag_ops_counter] == ',') {
			$tag_ops[$tag_ops_counter] = ', ';
		} elseif ( isset( $tag_ops[$tag_ops_counter])  &&  $tag_ops[$tag_ops_counter] == '+') {
			$tag_ops[$tag_ops_counter] = ' + ';
		}
		// concatenate display name and prettified operators
		if ( isset( $tag_ops[$tag_ops_counter] ) ) {
			$nice_tag_query = $nice_tag_query.$tag->name.$tag_ops[$tag_ops_counter];
			$tag_ops_counter += 1;
		} else {
			$nice_tag_query = $nice_tag_query.$tag->name;
			$tag_ops_counter += 1;
		}
	}
	return $nice_tag_query;
}

/**
 * Gets the term name of the current post
 *
 * @todo deprcate when frozr_body_class becomes a filter of body_class
 * @return $term->name
 */
function frozr_get_term_name() {
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
	return $term->name;
}

/**
 * Check to see if the current post is a custom post type
 * 
 * @return bool
 */
function frozr_is_custom_post_type() {
	global $post; 

	if ( !in_array(  $post->post_type , get_post_types( array( '_builtin' => true ) ) ) ) {
		return true;
 	}
 	return false;
 }

/**
 * counting all gallery images in a post
 * 
 * @printf $output
 */
function frozr_post_total_gallery_images(){
	global $post; 
	$galleries = get_post_galleries( $post->ID, false );
	$total_gal = count( $galleries );

	$key = 0;
	$src = 0;
	while ( $key < count( $galleries ) ){
		$src += count( $galleries[$key]['src'] );
		$key++;
	}
	$total_img = intval( $src );
	$total_images = number_format_i18n( $total_img );
	
	if ( $total_gal > 1 ) {
		$output = 'This post contains %2$s galleries with %1$s images.';
	} else {
		$output = 'This gallery contains %1$s images.';
	}
	printf ( $output, $total_images, $total_gal );
}
