<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php do_action( 'woocommerce_before_mini_cart' ); ?>
	<div class="mini_cart <?php echo $args['list_class']; ?>">
		<div class="cart_order">
			<div class="cart_order_content">
				<?php if ( ! WC()->cart->is_empty() ) : ?>
					<table class="cart_summary" data-cart_items_count="<?php echo count(WC()->cart->get_cart()); ?>" >
						<thead>
							<tr><th><?php _e('Item/s','frozr'); ?></th><th class="cart_qty"><?php _e('Qty x Price','frozr'); ?></th></tr>
						</thead>
						<tfoot>
							<tr><th class="cart_subtotal" colspan="2"><?php _e( 'Subtotal', 'frozr' ); ?><span class="cart_total"><?php echo WC()->cart->get_cart_subtotal(); ?></span></th></tr>
						</tfoot>
						<tbody>
							<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
								$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
								$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

									if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

										$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
										$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
										$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
										?>
										<tr><td>
										<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" data-enhance="false" data-ajax="false" class="remove-cart-item" title="%s">&times;</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'frozr' ) ), $cart_item_key ); ?>
										<?php if ( ! $_product->is_visible() ) : ?>
											<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . frozr_limit_info($product_name, '10'); ?>
										<?php else : ?>
											<a data-enhance="false" data-ajax="false" href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>">
												<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . frozr_limit_info($product_name, '10'); ?>
											</a>
										<?php endif; ?>
										<?php echo WC()->cart->get_item_data( $cart_item ); ?>
										</td><td class="item-quantity">
										<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="cart-item-quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
										</td></tr>
									<?php
									}
								}
								?>
						</tbody>
					</table><!-- /checkout__summary -->
					<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
					<!--<p class="cart_buttons">
						<a href="<?php //echo esc_url( wc_get_cart_url() ); ?>" data-enhance="false" data-ajax="false" class="button wc-forward"><?php //echo __( 'View Cart', 'frozr' ); ?></a>
						<a href="<?php //echo esc_url( wc_get_checkout_url() ); ?>" data-enhance="false" data-ajax="false" class="button checkout wc-forward"><?php //echo __( 'Checkout', 'frozr' ); ?></a>
					</p>-->
					<a class="cart_cancel" href="#header" data-rel="close" data-enhance="false" data-ajax="false"><i class="fs-icon-angle-left"></i><?php _e('Continue Shopping','frozr'); ?></a>
					
					<?php else : ?>
						
						<span class="empty"><i class="fs-icon-exclamation-circle"></i><?php _e( 'No products in the cart.', 'frozr' ); ?></span>
						<span class="shop_now"><i class="fs-icon-cart-arrow-down"></i><?php _e( 'No Products yet,', 'frozr' ); ?><a href="<?php echo home_url(); ?>/?post_type=product" data-enhance="false" data-ajax="false" ><?php _e(' Shop Now!','frozr'); ?></a></span>
								
					<?php endif; ?>
			</div><!-- .cart_order-content -->
		</div><!-- .cart_order -->
	</div><!-- .mini_cart -->
<?php do_action( 'woocommerce_after_mini_cart' ); ?>