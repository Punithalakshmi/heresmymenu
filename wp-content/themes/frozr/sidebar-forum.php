<?php 
/**
 * Sidebar Forum Template
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

    // action hook for placing content above the 'forum-sidebar' widget area
    frozr_aboveforumsidebar();

    // action hook creating the 'forum-sidebar' widget area
    frozr_widget_area_forum_sidebar();

    // action hook for placing content below the 'forum-sidebar' widget area
    frozr_belowforumsidebar();
?>