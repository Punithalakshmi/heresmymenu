<?php
/**
 * Single Post Template
 *
 * …
 * 
 * @package Frozr
 * @subpackage Templates
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
				echo apply_filters( 'frozr_open_id_content', '<div id="content"><div class="post-container">' . "\n\n" );

	            // start the loop
	            while ( have_posts() ) : the_post();

    	        // action hook creating the single post
    	        frozr_singlepost();
    	         
				// end the loop
        		endwhile;
			?>
				</div><!-- .post-container -->
		
			</div><!-- #content -->
			
			<?php
				// action hook for placing content below #content
				frozr_belowcontent();
			?> 
		</div><!-- #container -->
		
<?php 
    // action hook for placing content below #container
    frozr_belowcontainer();

    // calling the widget area 'single'
    get_sidebar('single');
				    
    // calling footer.php
    get_footer();
?>