<?php
/**
 * A News ticker front page fixed section
 *
 * @package FrozrCoreLibrary
 * @subpackage FrozrExtensions
 */
 
/**
 * Create ticker loop body.
 */
if (function_exists('childtheme_override_frozr_ticker'))  {
	/**
	 * @ignore
	 */
	function frozr_ticker() {
		childtheme_override_frozr_ticker();
	}
} else {
	/**
	 * Create the home standard posts
	 * 
	 * Override: childtheme_override_frozr_ticker
	 */
	function frozr_ticker() { 
	$show_nt = get_theme_mod('show_nt',false);
	$nt_title = get_theme_mod('nt_title','Breaking News');
	$nt_cat = get_theme_mod('nt_cat'); ?>
	
	<?php if ( $show_nt == true && have_posts() ) :
			$nt_query = new WP_Query( array('post_type' =>'post', 'posts_per_page'=>-1, 'category_name'=>$nt_cat, 'ignore_sticky_posts'=>1)); ?>
			<div class="n_ticker">
				<span class="nt_cont_title"><?php echo $nt_title; ?></span>
	    		<ul id="fro-nt-title">
				<?php while ( $nt_query->have_posts() ) : $nt_query->the_post();?>
		    	<li>
		    		<a class="nt_entry_title" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Read more about %s', 'frozr' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php if (frozr_mobile() && !frozr_tablet()) {frozr_limit_info(get_the_title(), 50);} else { the_title(); } ?></a>
		    	</li>
				<?php endwhile; ?>
				</ul>
				<i class="fs-icon-chevron-left" id="nt-prev"></i>
				<i class="fs-icon-chevron-right" id="nt-next"></i>
			</div>
			<?php wp_reset_query(); ?>
	<script>
	jQuery(document).ready(function(){
	    var fro_nt = jQuery('#fro-nt-title').newsTicker({
        row_height: 30,
        max_rows: 1,
        duration: 4000,
        prevButton: jQuery('#nt-prev'),
        nextButton: jQuery('#nt-next')
        });
	});
	</script>
	<?php endif; 
	}
}
add_action('frozr_belowheader', 'frozr_ticker', 10, 0);