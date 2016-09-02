<?php
/**
 * Category Template
 *
 * Displays an archive index of posts assigned to a Category. 
 *
 * @package Frozr
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Category_Templates Codex: Category Templates
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

	        	// action hook for placing content above the category loop
	        	frozr_above_categoryloop();?>		
				<div class="blog-content">
					<?php if ( have_posts() ) { ?>

					<div class="two-thirds-cloumn transitions-enabled masonry js-masonry" data-masonry-options='{ "isAnimated": true, "itemSelector": ".brick", "columnWidth": ".blog-bg", "isOriginLeft": <?php echo frozr_theme_layout(); ?> }'>
						<div class="blog-bg"></div>
						<?php
						// action hook creating the category loop
						frozr_categoryloop();
						?>
					</div><!--.two-thirds-cloumn-->
					<?php

					// action hook for placing content below the category loop
					frozr_below_categoryloop();			

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