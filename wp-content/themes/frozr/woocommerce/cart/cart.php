<?php
/**
 * Cart Page
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>

<table data-role="table" class="shop_table cart ui-responsive" cellspacing="0">
	<?php if (class_exists( 'Lazy_Eater' )) { ?>
	<thead>
		<tr>
			<th class="product-thumbnail"><?php _e('Restaurant','frozr'); ?></th>
			<th class="products-details"><?php _e('Items','frozr'); ?></th>
			<th class="shipping-subtotal"><?php _e( 'Delivery', 'frozr' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php do_action( 'woocommerce_before_cart_contents' );
		$cop_vals = array();
		$cop_auths = array();
		$por_authos = array();

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id	= apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
		
			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key )) {
				$auth = get_post_field('post_author', $product_id);
				$por_authos[$auth][] = $product_id;
			}
		}

		foreach ( WC()->cart->get_applied_coupons() as $code ) {
			$coupon = new WC_Coupon( $code );
			$cop_vals[$coupon->id] = get_post_field('post_author', $coupon->id);
			$cop_auths[get_post_field('post_author', $coupon->id)] = $coupon->id;
		}

		foreach ($por_authos as $por_autho => $pid) {
			$seller_info = frozr_get_store_info($por_autho);
			$div_total = array();
		?>
		<tr>
			<td class="product-seller">
				<?php echo $seller_info['store_name']; ?>
			</td>
			<td class="products-details">
			<table data-role="table" data-enhance="false" class="shop_table cart ui-responsive" cellspacing="0">
				<thead>
					<tr>
						<th class="product-remove">&nbsp;</th>
						<th class="product-thumbnail">&nbsp;</th>
						<th class="product-name"><?php _e( 'Item', 'frozr' );?></th>
						<th class="product-price"><?php _e( 'Price', 'frozr' ); ?></th>
						<th class="product-quantity"><?php _e( 'Quantity', 'frozr' ); ?></th>
						<th class="product-subtotal"><?php _e( 'Total', 'frozr' ); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product		= apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id		= apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				$pauth			= get_post_field('post_author', $product_id);
				if ($pauth == $por_autho) {
					$cop_val = get_post_field('post_author', $_product->id);
					$auth_cop_cal = (! empty ($cop_auths[$cop_val]) ) ? $cop_auths[$cop_val]: '';
					$delv_val = get_post_meta($auth_cop_cal, 'free_shipping', true);

					if ( empty ($cop_vals[$auth_cop_cal]) || $cop_vals[$auth_cop_cal] != $cop_val || $delv_val != 'yes' || !empty ($seller_info['shipping_fee'])) {
						if ($seller_info['deliveryby'] == 'item' && $cart_item['order_l_type'] == 'delivery') {
							$div_total[] = $cart_item['quantity'];					
						} elseif ($seller_info['deliveryby'] != 'item' && $cart_item['order_l_type'] == 'delivery') {
							$div_total[0] = 'bycart';
						}
					} else {
						$div_total[0] = 'free';
					}
					?>
					<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
						<td class="product-remove">
							<?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
								'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
								esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
								__( 'Remove this item', 'frozr' ),
								esc_attr( $product_id ),
								esc_attr( $_product->get_sku() )
							), $cart_item_key );
						?>
						</td>
						<td class="product-thumbnail">
							<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

								if ( ! $_product->is_visible() ) {
									echo $thumbnail;
								} else {
									printf( '<a href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), $thumbnail );
								}
							?>
						</td>
						<td class="product-name">
							<?php
								if ( ! $_product->is_visible() ) {
									echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
								} else {
									echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s </a>', esc_url( $_product->get_permalink( $cart_item ) ), $_product->get_title() ), $cart_item, $cart_item_key );
								}

								// Meta data
								echo WC()->cart->get_item_data( $cart_item );
								
								// Backorder notification
								if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
									echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'frozr' ) . '</p>';
								}
							?>
						</td>
						<td class="product-price">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
							?>
						</td>
						<td class="product-quantity">
							<?php
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input( array(
										'input_name'  => "cart[{$cart_item_key}][qty]",
										'input_value' => $cart_item['quantity'],
										'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
										'min_value'   => '0'
									), $_product, false );
								}

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
							?>
						</td>
						<td class="product-subtotal">
							<?php
							echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
							?>
						</td>
					</tr>
			<?php } } ?>
				</tbody>
			</table>
			</td>
			<td class="shipping-subtotal">
				<?php
					$total_div = array_sum($div_total);
					$default_shipping = (!empty ($seller_info['shipping_fee'])) ? $seller_info['shipping_fee'] : 0;
					$default_adl_shipping = (!empty ($seller_info['shipping_pro_adtl_cost'])) ? $seller_info['shipping_pro_adtl_cost'] : 0;
					if ($div_total[0] == 'free') {
						echo __('Free Delivery','frozr');
					} elseif ( $div_total[0] == 'bycart' || $total_div == 1) {
						echo wc_price( $default_shipping );
					} elseif ( $total_div == 0) {
						echo __('No delivery items found.','frozr');
					} elseif ($total_div > 1) {
						$_adl_fees_add = ($total_div - 1) * $default_adl_shipping;
						echo wc_price( $default_shipping + $_adl_fees_add );
					}
				?>
			</td>
		</tr>
		<?php
		}
	} else { ?>
	<thead>
		<tr>
			<th class="product-remove">&nbsp;</th>
			<th class="product-thumbnail">&nbsp;</th>
			<th class="product-name"><?php _e( 'Product', 'frozr' ); ?></th>
			<th class="product-price"><?php _e( 'Price', 'frozr' ); ?></th>
			<th class="product-quantity"><?php _e( 'Quantity', 'frozr' ); ?></th>
			<th class="product-subtotal"><?php _e( 'Total', 'frozr' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
				<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

					<td class="product-remove">
						<?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
								'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
								esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
								__( 'Remove this item', 'frozr' ),
								esc_attr( $product_id ),
								esc_attr( $_product->get_sku() )
							), $cart_item_key );
						?>
					</td>

					<td class="product-thumbnail">
						<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $_product->is_visible() ) {
								echo $thumbnail;
							} else {
								printf( '<a href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), $thumbnail );
							}
						?>
					</td>

					<td class="product-name">
						<?php
							if ( ! $_product->is_visible() ) {
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
							} else {
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s </a>', esc_url( $_product->get_permalink( $cart_item ) ), $_product->get_title() ), $cart_item, $cart_item_key );
							}

							// Meta data
							echo WC()->cart->get_item_data( $cart_item );

							// Backorder notification
							if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
								echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'frozr' ) . '</p>';
							}
						?>
					</td>

					<td class="product-price">
						<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						?>
					</td>

					<td class="product-quantity">
						<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input( array(
									'input_name'  => "cart[{$cart_item_key}][qty]",
									'input_value' => $cart_item['quantity'],
									'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
									'min_value'   => '0'
								), $_product, false );
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
						?>
					</td>
					<td class="product-subtotal">
						<?php
							echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
						?>
					</td>
				</tr>
				<?php
			}
		}
		}
		
		do_action( 'woocommerce_cart_contents' );
		?>
		<tr>
			<td colspan="<?php if (class_exists( 'Lazy_Eater' )) { echo '3'; } else {echo '6';} ?>" class="actions">

				<?php if ( WC()->cart->coupons_enabled() ) { ?>
					<div class="coupon">

						<label for="coupon_code"><?php _e( 'Coupon', 'frozr' ); ?>:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'frozr' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'frozr' ); ?>" />

						<?php do_action( 'woocommerce_cart_coupon' ); ?>
					</div>
				<?php } ?>

				<input type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update Cart', 'frozr' ); ?>" />

				<?php do_action( 'woocommerce_cart_actions' ); ?>

				<?php wp_nonce_field( 'woocommerce-cart' ); ?>
			</td>
		</tr>

		<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</tbody>
</table>

<?php do_action( 'woocommerce_after_cart_table' ); ?>

</form>

<div class="cart-collaterals">

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>

</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
