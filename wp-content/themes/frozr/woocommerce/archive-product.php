<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); 

global $wp_query;
$show_frozr_sidebar = get_theme_mod('froz_icon_sidebar', true);
?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) { ?>
			<div class="dokkan_page_title_content">
				<?php echo frozr_postheader_posttitle(); ?>
				<span class="dokkan_page_content"><?php do_action( 'woocommerce_archive_description' ); ?></span>
			</div>
		<?php }

			/**
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 */
			woocommerce_output_content_wrapper();

		do_action('before_product_archive_loop'); ?>

		<?php if ( have_posts() ) : ?>
		<div id="products-temp-wrapper" data-ajax="false">
			<div class="shop-sidebar <?php if ($show_frozr_sidebar == false) { echo 'no_froz_side'; } ?> ">
				<div class="woo-widget-wrapper shop-ordering">
					<i class="widget-icon fs-icon-plus"></i>
					<div id="woocommerce-ordering-2" class="woo-sidebar-widget widget_sort_products">
						<h5 class="widgettitle"><?php _e('Sort Products','frozr'); ?></h5>
						<?php woocommerce_catalog_ordering(); ?>
					</div>
				</div> <?php
				// calling the widget area 'shop'
				get_sidebar('shop-inset');
				?>
			</div>
				
				<div class="p_wrap">
					<?php do_action('before_dishes_list'); ?>
					<ul class="products<?php if (!frozr_mobile()) { echo ' js-masonry" data-masonry-options=\'{ "isAnimated": true, "itemSelector": ".item-container", "isOriginLeft": '.frozr_theme_layout().' }\'';} else { echo '"';} ?> >
					<?php
						woocommerce_product_subcategories();

						while ( have_posts() ) : the_post();
							posts_product();
						endwhile;
					?>
					</ul>
					<?php do_action('after_dishes_list');
				//get posts navigation
				$total_pages = $wp_query->max_num_pages;
					if ( $total_pages > 1 ) {
						frozr_navigation_below();
					} ?>
				</div> 
		</div>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) :

			wc_get_template( 'loop/no-products-found.php' );

		endif;
		wp_reset_query(); ?>
		
		<?php if ($show_frozr_sidebar == true) { ?>
		<script type="text/javascript">
				jQuery("body").on("click", function(e) {
				var target = jQuery( e.target );
					if (target.is(".widget-icon")) {
						var theWidget = target.parent(),
							prevallWidget = theWidget.prevAll(".active_woo_widget"),
							nextallWidget = theWidget.nextAll(".active_woo_widget");

						if (theWidget.hasClass("active_woo_widget")) {

							theWidget.removeClass("active_woo_widget");

						} else {			
							prevallWidget.removeClass("active_woo_widget");
							nextallWidget.removeClass("active_woo_widget");
							theWidget.addClass("active_woo_widget");
						}
					} 
					if (!target.is(".shop-sidebar *")) {
						jQuery(".woo-widget-wrapper").removeClass("active_woo_widget");
					}
				});
		</script>
		<?php }
		
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );

get_footer( 'shop' ); ?>