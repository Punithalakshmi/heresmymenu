<?php
/**
 * Template Name: Archives Page
 *
 * This is a custom Page template for displaying an index of Archives.
 * It will display the page content above an unordered list of the different 
 * post-type archives nested with an unordered list of thier post-type items.
 *
 * @package Frozr
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Creating_an_Archive_Index Codex: Creating an Archives Index
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

				// start the loop to get the page content
				the_post();
				
				// action hook for placing content above #post
				frozr_abovepost();
			?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 

				<?php

	            	// creating the post header
	            	frozr_postheader();
					
					// calling the widget area 'archive'
					get_sidebar('archive');
	            ?>
					<div class="archive-entry-content">
	                    <?php 
	                    // displays the "Page" content 
	                    the_content();

	                    // action hook for displaying a list of archive links
	                    frozr_archives();
				?>
					</div><!-- .entry-content -->			
				</div><!-- #post -->

	        <?php
	       		// action hook for placing contentbelow #post
	       		frozr_belowpost();
	        ?>

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