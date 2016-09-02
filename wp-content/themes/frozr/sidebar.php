<?php 
/**
 * Main Sidebar Template
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
    // action hook for placing content above the main asides
    frozr_abovemainasides();

    // action hook creating the primary aside
    frozr_widget_area_primary_aside();	
	
    // action hook for placing content below the main asides
    frozr_belowmainasides(); 

?>