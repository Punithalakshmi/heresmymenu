<?php
/**
 * Template Name: bbPress - Forums (Index)
 *
 * This is a custom Page template for displaying an index of Forums.
 * It will display the main / front page of Frozr forums.
 * Contains forums announcements, Statistics, Forum Menu, Forums list, Topics list. 
 * 
 *
 * @package Frozr
 * @subpackage Templates
 *
 */

	// calling the header.php
	get_header();

	// action hook for placing content above .in-container
	frozr_abovecontainer();
?>

		<div class="in-container">

			<?php
				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'frozr_open_id_content', '<div class="forums-container">' . "\n\n" );
				// action hook for placing forum header widgets
				frozr_widget_area_forum_header();
				// action hook for placing forum announcements
				frozr_forum_page_announcement();
				?>
				
				<div class="forum-content"><?php

					// action hook for placing forum statisticst
					frozr_forum_page_statisticst();
					?>
					<div class="forums-right-column">
					<?php
						// action hook for placing forum welcome msg
						frozr_forum_page_welcome_text();
						
						// forum menu
						frozr_forum_menus();
						
						// action hook for placing forums list
						frozr_forum_page_forum_list();
						
						// action hook for placing topics list
						frozr_forum_page_forum_topics_list();
					?>	
					</div><!-- .forums-right-column -->
					
					<?php $bbp_show_members_list = get_theme_mod('bbp_show_members_list', true);
					if ($bbp_show_members_list == true) {
					// action hook to show active users
					do_action('frozr_forum_active_users');
					} ?>
					
				</div><!-- .forum-content -->
			</div><!-- .forums-container -->

		</div><!-- .in-container -->

<?php 
	// action hook for placing content below .in-container
	frozr_belowcontainer();

    // calling the widget area 'forum'
    get_sidebar('forum');

	// calling footer.php
	get_footer();
?>