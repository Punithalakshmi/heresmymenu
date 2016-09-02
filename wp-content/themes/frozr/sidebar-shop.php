<?php
/**
 * Sidebar Shop Template
 *
 * …
 * 
 * @package Frozr
 * @subpackage Templates
 */
 	?>
	</div><!-- #main -->
	<div class="footer-container" data-role="footer">
	<?php

    // action hook for placing content above the 'woo-shop-sidebar' widget area
    frozr_above_shop_sidebar();

    // action hook for creating the 'woo-shop-sidebar' widget area
    frozr_widget_area_shop();

    // action hook for placing content below the 'woo-shop-sidebar' widget area
    frozr_below_shop_sidebar();
?>  