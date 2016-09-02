<?php
/**
 * Error 404 Page Template
 *
 * Displays a "Not Found" message and a search form when a 404 Error is encountered.
 *
 * @package Frozr
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Creating_an_Error_404_Page Codex: Create a 404 Page
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

				// action hook for placing content above #post
				frozr_abovepost(); 
			?>

				<div id="post-0" class="post error404">

				<?php
		    		// action hook for placing the 404 content
    	        	frozr_404()
    	        ?>

				</div><!-- .post -->

				<?php 
					// action hook for placing content below #post
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