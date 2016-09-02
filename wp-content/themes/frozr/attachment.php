<?php
/**
 * Attachments Template
 *
 * Displays singular WordPress Media Library items.
 *
 * @package Frozr
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Using_Image_and_File_Attachments Codex:Using Attachments
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
				echo apply_filters( 'frozr_open_id_content', '<div id="attachment_content">' . "\n\n" );

	            // start the loop
	            while ( have_posts() ) : the_post();

	        	// displays the page title
				frozr_page_title();

				// action hook for placing content above #post
				frozr_abovepost();
			?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 

					<div class="entry-content">

						<div class="entry-attachment"><?php the_attachment_link( $post->ID, true ) ?></div>

	                        <?php 
	                        	the_content( frozr_more_text() );

	                        	wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'frozr' ) . '&after=</div>' );
	                        ?>

					</div><!-- .entry-content -->

					<?php
	                	// creating the post footer
	                	frozr_postfooter();
	                ?>

				</div><!-- #post -->

	            <?php
					// action hook for placing contentbelow #post
					frozr_belowpost();
					
       				// action hook for calling the comments_template
					frozr_comments_template();
					
					// end loop
        			endwhile;
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