<?php
/**
 * Author Template
 *
 * Displays an archive index of posts by a singular Author. 
 * It can display a micrformatted vCard for Author if option is selcted in the default Theme Options.
 *
 * @package Frozr
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Author_Templates Codex:Author Templates
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

				echo apply_filters( 'frozr_open_id_content', '<div id="content" class="author_archive">' . "\n\n" );
			?>
			<div class="page-title-wrapper">
    	    	<?php
    	    		// displays the page title
    	    		frozr_page_title();		

					// setup the first post to acess the Author's metadata
					the_post();
				?>

    	        <div id="author-info" class="vcard">
				   
  					<div class="author_info_photo" style="background: url('<?php echo get_avatar_url(get_the_author_meta( 'user_email' )); ?>') no-repeat center center; background-size: 100% auto;">
					</div>
					
					<?php if ( get_the_author_meta( 'first_name' ) || get_the_author_meta( 'last_name' )  ) {?>
					<h4 class="author-entry-title"><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></h4> 
					<?php } ?>
					
					
    	            <?php    	                    		
    	                // Display Author's discription if it exists
    	                if ( get_the_author_meta( 'user_description' ) ) {
							echo '<div class="author-bio note">';
   	                    // Filterable use the_author_user_description *or* get_the_author_user_description
    	                    the_author_meta( 'user_description' );
    	                echo '</div>'; }
    	            ?>

    				<div id="author-email">
    				
    	                <a class="author-email" title="<?php echo antispambot( get_the_author_meta( 'user_email' ) ); ?>" href="mailto:<?php echo antispambot( get_the_author_meta( 'user_email' ) ); ?>">
    	                	<?php _e( 'Email ', 'frozr' );
							
    	                if ( get_the_author_meta( 'first_name' ) || get_the_author_meta( 'last_name' )  ) {?>
							<span class="fn n">
							<?php if ( get_the_author_meta( 'first_name' ) ) { ?>
    	                		<span class="given-name"><?php the_author_meta( 'first_name' ); ?></span> 
    	                		<?php }
								if ( get_the_author_meta( 'last_name' ) ) { ?>
								<span class="family-name"><?php the_author_meta( 'last_name' ); ?></span>
								<?php } ?>
    	                	</span>
 						<?php } ?>
						
   	                </a>
    	                
    	                <a class="url"  style="display:none;" href="<?php echo home_url() ?>/"><?php bloginfo('name') ?></a>

    	            </div>

				</div><!-- #author-info -->
			</div><!-- .page-title-wrapper -->
			</div><!--#content-->
				<?php
					//end microformmatted vCard
					// Return to the beginning of the loop
					rewind_posts();
				?>
					
				<div class="blog-content">
					<?php if ( have_posts() ) { ?>

					<div class="two-thirds-cloumn transitions-enabled masonry js-masonry" data-masonry-options='{ "isAnimated": true, "itemSelector": ".brick", "columnWidth": ".blog-bg", "isOriginLeft": <?php echo frozr_theme_layout(); ?> }'>
						<div class="blog-bg"></div>
						<?php
						// action hook creating the author loop
						frozr_authorloop();?>
					</div><!--.two-thirds-cloumn-->
					<?php

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