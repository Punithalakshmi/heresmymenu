<?php
/**
 * Footer Extensions
 *
 * @package FrozrCoreLibrary
 * @subpackage FooterExtensions
 */
 
/**
 * Register action hook: frozr_abovemainclose
 * 
 * Located in footer.php, just before the closing of the main div
 */
function frozr_abovemainclose() {
    do_action('frozr_abovemainclose');
} // end frozr_belowmainsidebar


/**
 * Register action hook: frozr_abovefooter
 * 
 * Located in footer.php, just before the footer div
 */
function frozr_abovefooter() {
    do_action('frozr_abovefooter');
} // end frozr_abovefooter


/**
 * Register action hook: frozr_footer
 * 
 * Located in footer.php, inside the footer div
 */
function frozr_footer() {
    do_action('frozr_footer');
} // end frozr_footer


/**
 * Register action hook: frozr_belowfooter
 * 
 * Located in footer.php, just after the footer div
 */
function frozr_belowfooter() {
    do_action('frozr_belowfooter');
} // end frozr_belowfooter


/**
 * Register action hook: frozr_after
 * 
 * Located in footer.php, just before the closing body tag, after everything else.
 */
function frozr_after() {
    do_action('frozr_after');
} // end frozr_after


if (function_exists('childtheme_override_siteinfoopen'))  {
	/**
	 * @ignore
	 */
	function frozr_siteinfoopen() {
		childtheme_override_siteinfoopen();
	}
} else {
	/**
	 * Open the #siteinfo div
	 * 
	 * Override: childtheme_override_siteinfoopen
	 */
	function frozr_siteinfoopen() {
    ?>
    
	<div id="site-info">        

   	<?php
   	}
}

add_action('frozr_footer', 'frozr_siteinfoopen', 10);
  
 
if (function_exists('childtheme_override_siteinfo'))  {
	/**
	 * @ignore
	 */
	function frozr_siteinfo() {
		childtheme_override_siteinfo();
	}
} else {
	/**
	 * Close the #siteinfo div
	 * 
	 * Override: childtheme_override_siteinfoclose
	 */
	function frozr_siteinfo() {
    $text_in_footer = get_theme_mod('footer_text','Powered by WordPress. Built on the Frozr Framework');
	// footer text set in theme options
	echo "<p class=\"copyright\">" . $text_in_footer . "</p>"; ?>
	<div class="top-links">
		<?php   $top_link_1 = get_theme_mod('social_link_one','http://');
				$top_link_1_img = get_theme_mod('social_link_one_icon', get_template_directory_uri() . '/library/images/facebook.png');
				$top_link_2 = get_theme_mod('social_link_two','http://');
				$top_link_2_img = get_theme_mod('social_link_two_icon', get_template_directory_uri() . '/library/images/twitter.png');
				$top_link_3 = get_theme_mod('social_link_three','http://');
				$top_link_3_img = get_theme_mod('social_link_three_icon', get_template_directory_uri() . '/library/images/dribbble.png');
				$top_link_4 = get_theme_mod('social_link_four','http://');
				$top_link_4_img = get_theme_mod('social_link_four_icon', get_template_directory_uri() . '/library/images/dribbble.png');?>

			<?php if ( !empty ($top_link_1) ) :?>
			<a class="foot_link_one" href="<?php echo $top_link_1;?>" style="background-image: url('<?php echo $top_link_1_img;?>'); background-size:contain; background-repeat:no-repeat; background-position:center center;"></a>
			<?php endif;?>
			<?php if ( !empty ($top_link_2) ) :?>
			<a class="foot_link_two" href="<?php echo $top_link_2;?>" style="background-image: url('<?php echo $top_link_2_img;?>'); background-size:contain; background-repeat:no-repeat; background-position:center center;"></a>
			<?php endif;?>
			<?php if ( !empty ($top_link_3) ) :?>
			<a class="foot_link_three" href="<?php echo $top_link_3;?>" style="background-image: url('<?php echo $top_link_3_img;?>'); background-size:contain; background-repeat:no-repeat; background-position:center center;"></a>
			<?php endif;?>
			<?php if ( !empty ($top_link_4) ) :?>
			<a class="foot_link_four" href="<?php echo $top_link_4;?>" style="background-image: url('<?php echo $top_link_4_img;?>'); background-size:contain; background-repeat:no-repeat; background-position:center center;"></a>
			<?php endif;?>
	</div>
   	<?php }
}

add_action('frozr_footer', 'frozr_siteinfo', 20);

   
if (function_exists('childtheme_override_siteinfoclose'))  {
	/**
	 * @ignore
	 */
	function frozr_siteinfoclose() {
		childtheme_override_siteinfoclose();
	}
} else {
	/**
	 * Close the #siteinfo div
	 * 
	 * Override: childtheme_override_siteinfoclose
	 */
	function frozr_siteinfoclose() { ?>

	</div><!-- #siteinfo -->
	
   	<?php
   	}
}
add_action('frozr_footer', 'frozr_siteinfoclose', 30);

if (function_exists('childtheme_override_conditional_scripts'))  {
	/**
	 * @ignore
	 */
	function frozr_conditional_scripts() {
		childtheme_override_conditional_scripts();
	}
} else {
	/**
	 * Load scripts conditionally
	 * 
	 * Override: childtheme_override_conditional_scripts
	 */
	function frozr_conditional_scripts() {
		$styledir = get_template_directory_uri();
		$styledir .= '/library/styles/';
		$scriptdir = get_template_directory_uri();
		$scriptdir .= '/library/scripts/';

		?>
		<script>
		yepnope([{
			test : jQuery(".stapel_gallery").length > 0,  
			yep : ['<?php echo $scriptdir . 'jquery.stapel.js' ?>', '<?php echo $styledir . 'stapel.css' ?>', '<?php echo $scriptdir . 'conditional/con-2.js' ?>']
		}, {
			test : jQuery(".gallery, .stapel_gallery").length > 0,  
			yep : ['<?php echo $scriptdir. 'prettyPhoto.js' ?>', '<?php echo $styledir . 'prettyPhoto.css' ?>']
		}, {
			test : jQuery(".ch-item-rm").length > 0,  
			yep : '<?php echo $scriptdir. 'jquery.infinitescroll.min.js' ?>'
		}, {
			test : jQuery(".ch-item-rm.manual").length > 0,  
			yep : '<?php echo $scriptdir. 'manual-trigger.js' ?>'
		}, {
			test : jQuery(".comments-container").length > 0,  
			yep : '<?php echo $scriptdir. 'jquery.watermark.min.js' ?>'
		}, {
			test : jQuery(".gallery, .stapel_gallery, .ch-item-rm").length > 0,  
			yep : '<?php echo $scriptdir. 'conditional/con-1.js' ?>'	
		}]);
		</script>
		<?php
   	}
}
add_action('frozr_footer', 'frozr_conditional_scripts', 40);

function display_metaboxes() {
    if ( get_post_type() == "post" ) :
        ?>
    <script type="text/javascript">// <![CDATA[
	jQuery(document).ready(function () {
		jQuery('#frozr-post-format-video, #frozr-post-format-audio, #frozr-post-format-link, #frozr-post-format-gallery').hide();
	   
		jQuery('#post-formats-select input').each(function () {
			var option = jQuery('.post-format:checked'),
				hclass = '#frozr-'+option.attr('id');
			   jQuery(hclass).show();
		});
		jQuery('#post-formats-select input').on('click', function () {
			var option = jQuery(this).attr('id');
			
			if ( option === 'post-format-audio' ) {
				jQuery('#frozr-post-format-audio').show();
				jQuery('#frozr-post-format-video, #frozr-post-format-link, #frozr-post-format-gallery').hide();
			} else if (option === 'post-format-video') {
				jQuery('#frozr-post-format-video').show();
				jQuery('#frozr-post-format-audio, #frozr-post-format-link, #frozr-post-format-gallery').hide();
			} else if (option === 'post-format-link') {
				jQuery('#frozr-post-format-link').show();
				jQuery('#frozr-post-format-audio, #frozr-post-format-video, #frozr-post-format-gallery').hide();
			} else if (option === 'post-format-gallery') {
				jQuery('#frozr-post-format-gallery').show();
				jQuery('#frozr-post-format-audio, #frozr-post-format-video, #frozr-post-format-link').hide();		
			} else {
			jQuery('#frozr-post-format-video, #frozr-post-format-audio, #frozr-post-format-link, #frozr-post-format-gallery').hide();
			}
		});
	});
    // ]]></script>
        <?php
    endif;
}
add_action( 'admin_print_scripts', 'display_metaboxes', 1000 );
