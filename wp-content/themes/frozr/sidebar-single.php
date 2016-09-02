<?php
/**
 * Sidebar single Template
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

    // action hook for placing content above the 'single-sidebar' widget area
    frozr_abovesinglesidebar();

    // action hook for creating the 'single-sidebar' widget area
    frozr_widget_area_single_sidebar();

    // action hook for placing content below the 'single-sidebar' widget area
    frozr_belowsinglesidebar();
?>  