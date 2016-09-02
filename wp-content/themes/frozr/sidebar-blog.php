<?php
/**
 * Sidebar Blog page Template
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

    // action hook for placing content above the 'blog-sidebar' widget area
    frozr_aboveblogsidebar();

    // action hook for creating the 'blog-sidebar' widget area
    frozr_widget_area_blog_sidebar();

    // action hook for placing content below the 'blog-sidebar' widget area
    frozr_belowblogsidebar();
?>
