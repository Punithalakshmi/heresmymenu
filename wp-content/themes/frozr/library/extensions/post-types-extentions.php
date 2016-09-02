<?php
/**
 * Home recommended shop loop Extensions
 *
 *
 * This is used to display three recommended shops in the home page
 * you can choose three different sellers from the control panel

 * @package FrozrAddonLibrary
 * @subpackage FrozrExtensions
 */
 
/**
 * Create product posts dokkanplus.com
 * 
 */
if (function_exists('childtheme_override_posts_product'))  {
	/**
	 * @ignore
	 */
	function posts_product() {
		childtheme_override_posts_product();
	}
} else {
	/**
	 * Create the product posts
	 * 
	 * Override: childtheme_override_posts_product
	 */
	function posts_product($post_layout = 'short') {
	
	$show_product_price = get_theme_mod('product_show_price', true);
	$show_product_rating = get_theme_mod('product_show_rating', true);
	$show_product_atc_b = get_theme_mod('product_show_atc', true);
	$show_product_excerpt = get_theme_mod('product_show_excerpt', true);
	$products_per_row = get_theme_mod('products_per_row',3);
	
	if ($products_per_row == 3 || frozr_mobile()) {
		$nx=50;
	} elseif ($products_per_row == 1) {
		$nx=300;
	} else {
		$nx=150;
	}
	global  $post, $product, $ratings;
	$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
	$attachment_count = count( $product->get_gallery_attachment_ids() );
	$rating_count = $product->get_rating_count();

	?>
			<li id="item-<?php echo $post->ID; ?>" class="item-container <?php if ($products_per_row == 3 || frozr_mobile()) { echo 'grid-width';} elseif ($products_per_row == 1){ echo 'full-width';} ?>">
				<div class="item-content">
					<div class="item-header">
						<?php woocommerce_show_product_loop_sale_flash();
						if ( $attachment_count > 1 ) {
						/*Get the Thumbnail*/ gallery_thumbnail($post->ID, $productp = true);
						} else {
						/*Get the Thumbnail*/ frozr_blog_thumbnail( true );
						} ?>	
					</div><!-- .item-header -->
					<div class="flexy_short_details">
						<div class="item_short_det">
							<div class="item-title">
								<h6><a href="<?php the_permalink() ?>" title="View <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
							</div>
							<?php if ($show_product_excerpt == true) { ?>
							<div class="item-info">
							<?php echo apply_filters( 'woocommerce_short_description', frozr_limit_info($post->post_excerpt , $nx) ); ?>
							</div>
							<?php } ?>
						</div>
						<div class="item-options <?php if( !function_exists('zilla_likes') ){echo "no_zilla";} ?>">
							<?php if ($show_product_price == true) { ?>
							<div class ="item-price">
								<?php woocommerce_template_loop_price(); ?>
							</div>
							<?php } ?>
							<?php if( function_exists('zilla_likes') ){ ?>
							<div class="item-fav">
								<?php zilla_likes(); ?>
							</div> <?php } ?>
							<?php if ($show_product_rating == true) { ?>
							<div class="item-rating">
								<span>
									<?php if ( $rating_count > 0 ) {
										woocommerce_template_single_rating();
									} else { echo __('No ratings yet!', 'frozr'); } ?>
								</span>
							</div>
							<?php } ?>
							<?php if ($show_product_atc_b == true) { ?>
							<div class ="item-cart">
								<?php if (class_exists( 'Lazy_Eater' )) { ?>
									<a href="#le_makeorder" data-transition="fade" class="le_makeorder_button" data-rel="popup" data-position-to="window"><i class="fs-icon-shopping-cart"></i>&nbsp;<?php _e('Make Order','frozr'); ?></a>
									<div data-history="false" data-role="popup" id="le_makeorder" class="ui-content">
										<?php frozr_add_tocart($post); ?>
									</div>
								<?php } else {frozr_single_add_to_cart($post);} ?>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</li><!-- .item-container -->
	<?php
	}
}

/**
 * Create single product post dokkanplus.com
 * 
 */
if (function_exists('childtheme_override_single_product'))  {
	/**
	 * @ignore
	 */
	function single_product() {
		childtheme_override_single_product();
	}
} else {
	/**
	 * Create the single product
	 * 
	 * Override: childtheme_override_single_product
	 */
	function single_product() {
	
	require_once(ABSPATH . 'wp-admin/includes/file.php');
	if (class_exists( 'Lazy_Eater' )) {
		global $post, $product;

		$dish_type = get_post_meta($post->ID, '_dish_veg', true);
		$dish_spicy = ('' !== get_post_meta($post->ID, '_dish_spicy', true)) ? get_post_meta($post->ID, '_dish_spicy', true) : 'no';
		$dish_fat = get_post_meta($post->ID, '_dish_fat', true);
		$dish_fat_rate = get_post_meta($post->ID, '_dish_fat_rate', true);

	} else {
		if ( ! WP_Filesystem($creds) ) {
			request_filesystem_credentials($url, '', true, false, null);
			return;
		}
		global $post, $product, $wp_filesystem;
	}
	$product_add_image = get_theme_mod('product_add_img');
	$product_add_image_url = get_theme_mod('product_add_url');
	$product_add_image_link = get_theme_mod('product_add_link');
	$product_add_image_title = get_theme_mod('product_add_title');
	
	$product_add = !empty($product_add_image) ? $product_add_image :  $product_add_image_url;
	
	$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
	$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
	$rating_count = $product->get_rating_count();
	$pro_demo = get_post_meta($post->ID, '_download_details', true);
	$pro_demo_url_txt = (isset($pro_demo['demo_txt'])) ? esc_attr($pro_demo['demo_txt']) : __('Demo', 'fedp');
	
	if (!class_exists( 'Lazy_Eater' )) {
		//get the selling countries options value
		$all_countries = get_option('woocommerce_allowed_countries');
		
		//check and get the selling countries
		if ($all_countries == 'all') {
			$selling_countries = __('Worldwide','frozr');	
		} else {
		
		$allowed_countries = get_option('woocommerce_specific_allowed_countries');
		//get the user IP address using the geoplugin.net service
		$user_ip = getenv('REMOTE_ADDR'); 
		$geo = unserialize($wp_filesystem->get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
		$country = $geo["geoplugin_countryCode"];

			if (in_array($country,$allowed_countries)) {
				$selling_countries = __('Will sell to your country.','frozr');
			} else { 
				$selling_countries = __('Will NOT sell to your country.','frozr');
			}
		}
	}
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	*/
	do_action( 'woocommerce_before_single_product' );

	if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	} ?>
	<div class="woo_bread"><?php woocommerce_breadcrumb(); ?></div>
	<div class="product-header">
		<div class="pro-head">
		<?php woocommerce_template_single_title(); ?>
		<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
		</div>
		<div class="product-pricing <?php if (empty($pro_demo['demo'])) {echo 'no-demo';} else {echo 'with-demo';} ?>">
			<?php if (!empty($pro_demo['demo'])) { ?>
				<div class="p_demo_link">
					<a href="<?php echo esc_url($pro_demo['demo']); ?>" title="<?php echo $pro_demo_url_txt; ?>"><?php echo $pro_demo_url_txt; ?></a>
				</div>
			<?php } ?>
			<div class="ad_to_crt_wrapper <?php if ( $product->is_on_sale() ) {echo "del_pe";} ?>">
				<?php if (class_exists( 'Lazy_Eater' )) { ?>
					<a href="#le_makeorder" data-transition="fade" class="le_makeorder_button" data-rel="popup" data-position-to="window"><i class="fs-icon-shopping-cart"></i>&nbsp;<?php _e('Make Order','frozr'); ?></a>
					<div data-history="false" data-role="popup" id="le_makeorder" class="ui-content">
						<?php frozr_add_tocart($post); ?>
					</div>
				<?php } else {frozr_single_add_to_cart($post);} ?>
			</div>
		</div>
	</div>
	<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="single-product-image">
			<?php
				/**
				 * woocommerce_before_single_product_summary hook
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
	<div class="product-content-wrapper">
		<div class="product-left">
			<div class="product-details">
				<div class="product-info-left">
				<?php do_action( 'woocommerce_product_meta_start' ); ?>
					<span class="product-rating">
						<?php _e('Product Rating:', 'frozr'); ?>
						<span>
							<?php if ( $rating_count > 0 ) {
								woocommerce_template_single_rating();
							} else { echo __('No ratings yet!', 'frozr'); } ?>
						</span>
					</span>
					<?php if (class_exists( 'Lazy_Eater' )) {
					echo $product->get_categories( ', ', '<span class="posted_in">' . __('Recipe:','frozr') . '<span> ', '</span></span>' ); ?>
					<?php if (!empty($dish_type)) { ?>
					<span><?php _e('Dish Type:','frozr'); ?><span><?php echo $dish_type; ?></span></span>
					<?php } ?>
					<span><?php _e('Spicy:','frozr'); ?><span><?php echo $dish_spicy; ?></span></span>
					<?php if($dish_fat == 'yes') {?>
					<span><?php echo __('Fat:','frozr') . ' <span> &cong; ' . $dish_fat_rate . __(' Grams','frozr'); ?></span></span>
					<?php }
					} ?>
				</div>
				<div class="product-info-right">
					<?php if (frozr_mobile()) { ?>
					<span class="sku_wrapper_mobi"><?php _e( 'Item Number:', 'frozr' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'frozr' ); ?></span></span>			
					<?php } ?>
					<?php echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag:<span>', 'Tags:<span>', $tag_count, 'frozr' ) . ' ', '</span></span>' ); ?>
					<?php if (!class_exists( 'Lazy_Eater' )) {
						echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:<span>', 'Categories:<span>', $cat_count, 'frozr' ) . ' ', '</span></span>' ); ?>
						<span class="selling_to">
							<?php _e('Selling To:', 'frozr'); ?>
							<span><?php echo $selling_countries; ?></span>
						</span>
					<?php } ?>
				<?php do_action( 'woocommerce_product_meta_end' ); ?>
				</div>
			</div>
			<div class="product-summary">
				<div class="share-product">
					<?php do_action('frozr_social_sharing'); ?>
				</div>
				<?php if (!empty ($product_add) ) { ?>
				<div class="product_adds">
					<a title="<?php echo $product_add_image_title; ?>" href="<?php echo esc_url($product_add_image_link); ?>">
						<img alt="<?php echo $product_add_image_title; ?>" src="<?php echo esc_url($product_add); ?>"/>
					</a>
				</div> 
				<?Php } ?>
			</div><!-- .summary -->
		</div>
		<div class="product-body">
			<?php if (!frozr_mobile()) { ?>
				<span class="sku_wrapper"><?php _e( 'Item Number:', 'frozr' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'frozr' ); ?></span></span>
			<?php } ?>
			<?php woocommerce_output_product_data_tabs(); ?>
		</div>
	</div>
	<?php woocommerce_upsell_display(); ?>
	<?php woocommerce_related_products( $args = array('posts_per_page' => 6, 'columns' => 6, 'orderby' => 'rand'), true, true); ?>
	
	<meta itemprop="url" content="<?php the_permalink(); ?>" />

	</div><!-- #product-<?php the_ID(); ?> -->

	<?php do_action( 'woocommerce_after_single_product' );

	}
	 
	add_filter( 'woocommerce_product_tabs', 'frozr_product_tabs' );
	function frozr_product_tabs( $tabs = array() ) {
		global $product, $post;
		
		// Remove the additional information tab
		unset( $tabs['additional_information'] );
		if (frozr_mobile()) {
			$tabs['description']['title'] = __( 'Desc.', 'frozr' );
			$tabs['reviews']['title'] = __( 'Reviews', 'frozr' );
		}
		$tabs['description']['title'] = __( 'Description', 'frozr' );
		$tabs['description']['callback'] = 'frozr_custom_description_tab';
		$tabs['description']['priority'] = 1;

		return $tabs;
	
	}
	function frozr_custom_description_tab() {
		global $product;
		$adheading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional Information', 'frozr' ) );
		echo "<strong class=\"padinfo\">$adheading</strong>";
		if (get_the_term_list( $product->ID, 'ingredient' ) && class_exists( 'Lazy_Eater' )) { echo '<div class="dish_ing_single"><i class="fs-icon-leaf"></i>&nbsp;';
		the_terms( $product->ID, 'ingredient', 'ingredients: ', ', ' );
		echo '</div>'; }
		the_content();
		if ($product->get_attributes()) {
			$product->list_attributes();
		}
	}
}
//single dish add to cart
function frozr_single_add_to_cart($post) {
	global $product, $post; ?>
	<?php if ($product->product_type != 'variable' && $product->product_type != 'grouped' ) { ?><div class="p-price-wrapper"><?php woocommerce_template_single_price(); ?></div><?php } ?>
	<?php woocommerce_template_single_add_to_cart(); ?>
<?php }
if ( ! function_exists( 'frozr_up_re_product' ) ) :
/**
 * create the WooCommerce Up sells and related products body.
 */
function frozr_up_re_product($gross = false) {

	global $post;
	$the_post_thumbnail_test = get_the_post_thumbnail( $post->ID );

	// Set post thumbnail
	if ( $the_post_thumbnail_test ) {
		$the_post_thumbnail = true;
	} else {
		$the_post_thumbnail = false;
	} 
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "medium"); ?>

	<article id="post-<?php the_ID(); ?>" class="upre_product" >			
		<div class="upre_post_thumb">
			<div class="upre_thumbnail has_bg bg_hidden" style="<?php if (empty ($large_image_url)) { echo 'background-image: url( '. wc_placeholder_img_src() .'); background-position: center center;'; } else { echo 'background: url( '. $large_image_url[0] .') no-repeat center center; background-size: 100% auto;';} ?> ">
				<?php woocommerce_show_product_loop_sale_flash(); ?>
				<a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo $post->post_title; ?>"></a>
			</div>
			<?php if ($gross == true) { 
			/**
			 * woocommerce_after_shop_loop_item hook
			 *
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
			} ?>
		</div>
		
		<header class="upre_entry_header">
			<a class="upre_entry_title" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'frozr' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php frozr_limit_info(get_the_title(), 20); ?></a>
			<span class="upre_p_price"><?php woocommerce_template_loop_price(); ?></span>
		</header><!-- .upre_entry_header -->
	</article><!-- .upre_product -->

<?php }
endif; // upsells and related posts body.