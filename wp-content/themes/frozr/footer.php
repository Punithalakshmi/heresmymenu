<?php
/**
 * Footer Template
 *
 * This template closes #main div and displays the #footer div.
 * 
 * Frozr Action Hooks: frozr_abovefooter frozr_belowfooter frozr_after
 * Frozr Filters: frozr_close_wrapper can be used to remove the closing of the #wrapper div
 * 
 * @package Frozr
 * @subpackage Templates
 */
?>
		<?php // action hook for placing content above the closing of the #main div
			frozr_abovemainclose();

			// action hook for placing content above the footer
			frozr_abovefooter();
			
			if (get_theme_mod('sh_homepage',false) == false || !is_home()) {	

			// Filter provided for altering output of the footer opening element
    		echo ( apply_filters( 'frozr_open_footer', '<div id="footer">' ) );


        		// action hook creating the footer 
        		frozr_footer();

				//pop pages
				echo pop_pages();
			
			// Filter provided for altering output of the footer closing element
    		echo ( apply_filters( 'frozr_close_footer', '</div><!-- #footer --></div><!-- .footer-container --></div><!-- .ui-page -->' . "\n" ) );
			}
   			// action hook for placing content below the footer
			frozr_belowfooter();


		// action hook for placing content before closing the BODY tag
		frozr_after(); 
		
		// calling WordPress' footer action hook
		wp_footer();
	?>

</body>
</html>