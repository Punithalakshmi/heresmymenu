<?php
/**
 * Template Name: Frozr - Blog Template Page
 *
 * This is a custom Page template for displaying Frozr Blog Page.
 * 
 *
 * @package Frozr
 * @subpackage Templates
 *
 */

	// calling the header.php
	get_header();

	// action hook for placing content above .blog-content
	frozr_abovecontainer();
?>

		<div class="blog-content">

			<?php
				// action hook for placing content above .two-thirds-cloumn 
				frozr_abovecontent();
			if (have_posts()) { 
				// action hook for placing blog body
				frozr_blog_page_body();
			} else {
				// get no post content
				frozr_no_post();
			}
				// action hook for placing content below .two-thirds-cloumn 
				frozr_belowcontent();
			?> 

		</div><!-- .blog-content -->

<?php 
	// action hook for placing content below .blog-content
	frozr_belowcontainer();

    // calling the widget area 'blog'
    get_sidebar('blog');

	// calling footer.php
	get_footer();
?>