<?php
/**
 * Index Template
 *
 * This file is required by WordPress to recoginze Frozr as a valid theme.
 * It is also the default template WordPress will use to display your web site,
 * when no other applicable templates are present in this theme's root directory
 * that apply to the query made to the site.
 * 
 * WP Codex Reference: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Frozr
 * @subpackage Templates
 */

	// calling the header.php
	get_header();

	// action hook for placing content above #container
	frozr_abovecontainer();
	
	if (get_theme_mod('sh_homepage',false) == false || !is_home() ) { ?>

		<div id="container"  data-ajax="false">

			<?php
		    	// action hook for placing content above #content
				frozr_abovecontent();
				
				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'frozr_open_id_content', '<div id="content">' . "\n\n" );
								
            	// action hook for placing content above the index loop
            	frozr_above_indexloop();
				$first_sec = get_theme_mod('first_sec','fro_wel_msg');
				$second_sec = get_theme_mod('second_sec','revo_one');
				$third_sec = get_theme_mod('third_sec','revo_two');
				$fourth_sec = get_theme_mod('fourth_sec','home_topics');
				$fiveth_sec = get_theme_mod('fiveth_sec','posts_loop_one');
				$sixth_sec = get_theme_mod('sixth_sec','posts_loop_two');
				$seventh_sec = get_theme_mod('seventh_sec','posts_loop_three');
				$eighth_sec = get_theme_mod('eighth_sec','posts_loop_four');
				$nine_sec = get_theme_mod('nine_sec','posts_loop_five');
				$tenth_sec = get_theme_mod('tenth_sec','featured_posts');
				$eleventh_sec = get_theme_mod('eleventh_sec','sliding_box');
				$twelevth_sec = get_theme_mod('twelevth_sec','images_grid');
				do_action('before_first_sec');
				if($first_sec != 'none') {
				do_action($first_sec);
				}
				do_action('after_first_sec');
  				if($second_sec != 'none') {
				do_action($second_sec);
 				}
				do_action('after_second_sec');
 				if($third_sec != 'none') {
				do_action($third_sec);
 				}
				do_action('after_third_sec');
  				if($fourth_sec != 'none') {
				do_action($fourth_sec);
  				}
				do_action('after_fourth_sec');
 				if($fiveth_sec != 'none') {
				do_action($fiveth_sec);
  				}
 				do_action('after_fiveth_sec');
 				if($sixth_sec != 'none') {
				do_action($sixth_sec);
   				}
   				do_action('after_sixth_sec');
 				if($seventh_sec != 'none') {
				do_action($seventh_sec);
   				}
				do_action('after_seventh_sec');
  				if($eighth_sec != 'none') {
				do_action($eighth_sec);
   				}
				do_action('after_eighth_sec');
  				if($nine_sec != 'none') {
				do_action($nine_sec);
    			}
				do_action('after_nine_sec');
 				if($tenth_sec != 'none') {
				do_action($tenth_sec);
   				}
				do_action('after_tenth_sec');
  				if($eleventh_sec != 'none') {
				do_action($eleventh_sec);
    			}
				do_action('after_eleventh_sec');
 				if($twelevth_sec != 'none') {
				do_action($twelevth_sec);
   				}
				do_action('after_twelevth_sec');
							
				// action hook for placing content below the index loop
            	frozr_below_indexloop();
				
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
	
	//calling sidebar
	frozr_sidebar();
	} else {

		//get the top slide
		revo_slider_top();

	}
	// calling footer.php
	get_footer();
