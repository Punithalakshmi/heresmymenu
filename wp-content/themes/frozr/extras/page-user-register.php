<?php

/**
 * Template Name: bbPress - User Register
 *
 * @package bbPress
 * @subpackage bbpressTemplates
 */

// No logged in users
bbp_logged_in_redirect();

// Begin Template
get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<?php do_action( 'bbp_template_notices' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="bbp-register" class="bbp-register">
						<div class="entry-content-temp-page">
							<div class="bbp-temp-page-content"><p><?php the_content(); ?></p></div>
							<?php bbp_breadcrumb(); ?>
							<?php bbp_get_template_part( 'bbpress/form', 'user-register' ); ?>
						</div><!-- .entry-content-temp-page -->
					</div><!-- #bbp-register -->

				<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php
	// calling the widget area 'forum'
    get_sidebar('forum');
	
	get_footer(); ?>
