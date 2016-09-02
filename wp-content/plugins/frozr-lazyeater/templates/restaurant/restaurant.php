<?php
/**
 * The Template for displaying a single restaurants.
 *
 * @package FrozrCoreLibrary
 * @subpackage Frozrmarketlibrary
 */
 
require_once FROZR_WOO_TMP . '/restaurant/restaurant-header.php'; ?>

<div id="primary_store" class="content-area cf">

	<?php do_action('frozr_before_restaurant_store'); ?>

    <div class="site-content store-page-wrap woocommerce transitions-enabled masonry js-masonry" data-masonry-options='{ "isAnimated": true, "itemSelector": ".seller-items", "isOriginLeft": <?php echo frozr_theme_layout(); ?> }'>

		<?php store_loop($store_user->ID); ?>
        
    </div><!-- #content .site-content -->
    <div class="custom_mini_cart fl" id="cartitems">
		<?php woocommerce_mini_cart(); ?>
	</div>
	<?php do_action('frozr_after_restaurant_store'); ?>

</div><!-- #primary .content-area -->
<div>
	<div class="custom_checkout">
		<?php echo do_shortcode('[woocommerce_checkout]'); ?>
	</div>
</div>
<?php get_footer(); ?>

<style>
	.test { }
	.custom_checkout { padding:15px; background-color:rgba(0, 0, 0, 0.1)}
	.custom_checkout #customer_details,
	.custom_checkout #order_review,
	.custom_checkout .woocommerce-info	{ max-width:850px; margin:0 auto !important;}
	.custom_checkout #order_review_heading { text-transform:uppercase; text-align:center}
	.custom_checkout #customer_details .col-1, #customer_details .col-2 { width:100%}
	.site-content  {  max-width:65vw; float:left; border-right:1px solid #ccc}
	.fl { float:left}
	.custom_mini_cart { width:25vw; padding-left:15px;}
	
	.seller-items { width:48%; background-color: rgba(204,204,204, 0.3); min-height:250px }
	.seller-items table { padding:0 5px; }
	.seller-items { }
	/*.seller-items:nth-child(even) { background-color:olive}
	.seller-items:nth-child(even) { background-color:olive}*/
	
	
	.cf:before,
	.cf:after {
		content: " ";
		display: table;
	}

	.cf:after {
		clear: both;
	}

	.cf {
		*zoom: 1;
	}
</style>