<?php 
/**
 * Sidebar page Template
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

    // action hook for placing content above the 'page-sidebar' widget area
    frozr_abovepagesidebar();

    // action hook creating the 'page-sidebar' widget area
    frozr_widget_area_page_sidebar();

    // action hook for placing content below the 'page-sidebar' widget area
    frozr_belowpagesidebar();
?>