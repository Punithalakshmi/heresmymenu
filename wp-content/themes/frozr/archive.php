<?php
/**
 * Archive Template 
 *
 * Displays an Archive index of post-type items. Other more specific archive templates 
 * may override the display of this template for example the category.php.
 *
 * @package Frozr
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Template_Hierarchy Codex: Template Hierarchy
 */

	// calling the header.php
	get_header();

	// action hook for placing content above #container
	frozr_abovecontainer();
?>

		<div id="container">

		<?php 
			// action hook for placing content above #content
			frozr_abovecontent();

			// filter for manipulating the element that wraps the content 
			echo apply_filters( 'frozr_open_id_content', '<div id="content">' . "\n\n" ); 

			// displays the page title
			frozr_page_title();

        	// action hook for placing content above the archive loop
        	frozr_above_archiveloop();?>
				<div class="blog-content">
					<?php if ( have_posts() ) { ?>

					<div class="two-thirds-cloumn transitions-enabled masonry js-masonry" data-masonry-options='{ "isAnimated": true, "itemSelector": ".brick", "columnWidth": ".blog-bg", "isOriginLeft": <?php echo frozr_theme_layout(); ?> }'>
						<div class="blog-bg"></div>
						<?php
						// action hook creating the archive loop
						frozr_archiveloop(); ?>
					</div><!--.two-thirds-cloumn-->
					<?php

					// action hook for placing content below the archive loop
					frozr_below_archiveloop();

					//get posts navigation
					global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) {
					frozr_navigation_below();
					}
					wp_reset_query();
					wp_reset_postdata();						
					} else {
						// get no post content
						frozr_no_post();
					}?>
				</div><!--.blog-content -->
		    </div><!-- #content -->

			<?php 
				// action hook for placing content below #content
		    	frozr_belowcontent(); 
		    ?> 

		</div><!-- #container -->

<?php 
	// action hook for placing content below #container
	frozr_belowcontainer();

	// calling the standard sidebar 
	frozr_sidebar();

	// calling footer.php
	get_footer();
?>