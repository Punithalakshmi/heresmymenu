<?php
/**
 * Header Extensions
 *
 * @package FrozrCoreLibrary
 * @subpackage HeaderExtensions
 */
  
/**
 * Add cache control to site
 * 
 * Default: false
 * 
 * Filter: frozr_cache_support
 */
function frozr_cache_support($use = false) {
	$offset = 60 * 60 * 24 * 1;
	$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
	if ($use == true) {
		Header("Cache-Control: must-revalidate");
		Header($ExpStr);
	}
}

/**
 * Display the DOCTYPE
 * 
 * Filter: frozr_create_doctype
 */
function frozr_create_doctype() {
    $content = '<!DOCTYPE html>' . "\n";
    $content .= '<html data-ajax="false"';
    echo apply_filters( 'frozr_create_doctype', $content );
}

/**
 * Display the HEAD profile
 * 
 * Filter: frozr_head_profile
 */
function frozr_head_profile() {
    $content = '<head>' . "\n";
    echo apply_filters('frozr_head_profile', $content );
}

/**
 * Display the META content-type
 * 
 * Filter: frozr_create_contenttype
 */
function frozr_create_contenttype() {
    $content = "<meta http-equiv=\"Content-Type\" content=\"";
    $content .= get_bloginfo('html_type'); 
    $content .= "; charset=";
    $content .= get_bloginfo('charset');
    $content .= "\" />";
    $content .= "\n";
    echo apply_filters('frozr_create_contenttype', $content);
}

/**
 * Add proper rendering and touch zooming for mobile devices
 * 
 * Filter: frozr_viewport
 */
function frozr_viewport() {
    $content = "<meta name=\"viewport\" content=\"";
    $content .= "width=device-width, ";
    $content .= "initial-scale=1, ";
    $content .= "maximum-scale=1, ";
    $content .= "user-scalable=no";
    $content .= "\"/>";
    $content .= "\n";
    echo apply_filters('frozr_viewport', $content);
}

/**
 * Switch Frozr's SEO functions on or off
 * 
 * Provides compatibility with SEO plugins: All in One SEO Pack, HeadSpace, 
 * Platinum SEO Pack, wpSEO and Yoast SEO. Default: ON
 * 
 * Filter: frozr_seo
 */
function frozr_seo() {
	if ( class_exists('All_in_One_SEO_Pack') || class_exists('HeadSpace_Plugin') || class_exists('Platinum_SEO_Pack') || class_exists('wpSEO') || defined('WPSEO_VERSION') ) {
		$content = FALSE;
	} else {
		$content = true;
	}
		return apply_filters( 'frozr_seo', $content );
}


/**
 * Switch use of frozr_the_excerpt() in the meta-tag description
 * 
 * Default: ON
 * 
 * Filter: frozr_use_excerpt
 */
function frozr_use_excerpt() {
    $display = TRUE;
    $display = apply_filters('frozr_use_excerpt', $display);
    return $display;
}

/**
 * Switch use of frozr_use_autoexcerpt() in the meta-tag description
 * 
 * Default: OFF
 * 
 * Filter: frozr_use_autoexcerpt
 */
function frozr_use_autoexcerpt() {
    $display = FALSE;
    $display = apply_filters('frozr_use_autoexcerpt', $display);
    return $display;
}


/**
 * Display the meta-tag description
 * 
 * This can be switched on or off using frozr_show_description
 * 
 * Filter: frozr_create_description
 */
function frozr_create_description() {
	$content = '';
	if ( frozr_seo() ) {
    	if ( is_single() || is_page() ) {
      		if ( have_posts() ) {
          		while ( have_posts() ) {
            		the_post();
					if ( frozr_the_excerpt() == "" ) {
                        if ( frozr_use_autoexcerpt() ) {
                    		$desc = frozr_excerpt_rss();
                        }
                	} else {
                        if ( frozr_use_excerpt() ) {
                    		$desc = frozr_the_excerpt();
                        }
                	}
            	}
        	}
        } elseif ( is_home() || is_front_page() ) {
    		$desc = get_bloginfo( 'description', 'display' );
        }
		$content = '<meta name="description" content="';
		$content .= apply_filters('frozr_page_meta_description',$desc);
		$content .= '" />';
		$content .= "\n";

        echo apply_filters ('frozr_create_description', $content);
	}
} // end frozr_create_description


/**
 * Switch creating the meta-tag description
 * 
 * Default: ON
 * 
 * Filter: frozr_show_description
 */
function frozr_show_description() {

    $display = TRUE;
    $display = apply_filters('frozr_show_description', $display);
    if ( $display ) {
        frozr_create_description();
    }
} // end frozr_show_description


/**
 * Create the robots meta-tag
 * 
 * This can be switched on or off using frozr_show_robots
 * 
 * Filter: frozr_create_robots
 */
function frozr_create_robots() {
        global $paged;
		if ( frozr_seo() ) {
    		if ( ( is_home() && ( $paged < 2 ) ) || is_front_page() || is_single() || is_page() || is_attachment() ) {
				$content = '<meta name="robots" content="index,follow" />';
    		} elseif ( is_search() ) {
        		$content = '<meta name="robots" content="noindex,nofollow" />';
    		} else {	
        		$content = '<meta name="robots" content="noindex,follow" />';
    		}
    		$content .= "\n";
    		if ( get_option('blog_public') ) {
    				echo apply_filters('frozr_create_robots', $content);
    		}
		}
} // end frozr_create_robots

/**
 * Switch showing the theme favicon
 * 
 * Default: ON
 * 
 * Filter: frozr_show_favicon
 */
function frozr_show_favicon() {
    $site_favicon = get_theme_mod('site_favicon');
    $display = TRUE;
    $display = apply_filters('frozr_show_favicon', $display);
    if ($display) {
        $content = '<link type="image/x-icon" rel="shortcut icon" href="';
        $content .= $site_favicon;
        $content .= '" />';
        $content .= "\n";
        echo apply_filters('frozr_favicon', $content);
    }
}

/**
 * Switch creating the robots meta-tag
 * 
 * Default: ON
 * 
 * Filter: frozr_show_robots
 */
function frozr_show_robots() {
    $display = TRUE;
    $display = apply_filters('frozr_show_robots', $display);
    if ( $display ) {
        frozr_create_robots();
    }
} // end frozr_show_robots

/**
 * Display links to RSS feed
 * 
 * This can be switched on or off using frozr_show_rss. Default: ON
 * 
 * Filter: frozr_show_rss
 * Filter: frozr_rss
 */
function frozr_show_rss() {
    $display = TRUE;
    $display = apply_filters('frozr_show_rss', $display);
    if ($display) {
        $content = '<link rel="alternate" type="application/rss+xml" href="';
        $content .= get_feed_link( get_default_feed() );
        $content .= '" title="';
        $content .= esc_attr( get_bloginfo('name', 'display') );
        $content .= ' ' . __('Posts RSS feed', 'frozr' );
        $content .= '" />';
        $content .= "\n";
        echo apply_filters('frozr_rss', $content);
    }
}


/**
 * Display links to RSS feed for comments
 * 
 * This can be switched on or off using frozr_show_commentsrss. Default: ON
 * 
 * Filter: frozr_show_commentsrss
 * Filter: frozr_commentsrss
 */
function frozr_show_commentsrss() {
    $display = TRUE;
    $display = apply_filters('frozr_show_commentsrss', $display);
    if ($display) {
        $content = '<link rel="alternate" type="application/rss+xml" href="';
        $content .= get_feed_link( 'comments_' . get_default_feed() );
        $content .= '" title="';
        $content .= esc_attr( get_bloginfo('name') );
        $content .= ' ' . __('Comments RSS feed', 'frozr' );
        $content .= '" />';
        $content .= "\n";
        echo apply_filters('frozr_commentsrss', $content);
    }
}


/**
 * Display pingback link
 * 
 * This can be switched on or off using frozr_show_pingback. Default: ON
 * 
 * Filter: frozr_show_pingback
 * Filter: frozr_pingback_url
 */
function frozr_show_pingback() {
    $display = TRUE;
    $display = apply_filters('frozr_show_pingback', $display);
    if ($display) {
        $content = '<link rel="pingback" href="';
        $content .= get_bloginfo('pingback_url');
        $content .= '" />';
        $content .= "\n";
        echo apply_filters('frozr_pingback_url',$content);
    }
}

if ( function_exists('childtheme_override_head_scripts') )  {
    /**
     * @ignore
     */
    function frozr_head_scripts() {
    	childtheme_override_head_scripts();
    }
} else {
    /**
     * Adds the theme functional scripts to the head & footer of the document.
     *
     * Child themes should use wp_dequeue_scripts to remove individual scripts.
     * Larger changes can be made using the override.
     *
     * Override: childtheme_override_head_scripts <br>
     *
     */
    function frozr_head_scripts() {
    	
    	// load comment reply script on posts and pages when option is set and check for deprecated filter
    	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			has_filter( 'frozr_show_commentreply' ) ? frozr_show_commentreply() : wp_enqueue_script( 'comment-reply' );
		
		// load jquery and associated plugins when theme support is active

			$scriptdir = get_template_directory_uri();
			$scriptdir .= '/library/scripts/';

			// enqueue scripts
			wp_enqueue_script('jquery');
			wp_enqueue_script('jquery_mobile',  $scriptdir. 'jquery.mobile-1.4.5.min.js','', '2.6.1');
			wp_enqueue_script('modernizr',  $scriptdir. 'modernizr.custom.79639.js','', '2.6.1');
			wp_enqueue_script('yepnop',  $scriptdir. 'yepnope.1.5.4-min.js','', '1.5.4');
			wp_enqueue_script('lazyload',  $scriptdir. 'lazyload.js','','0.5.1');
			wp_enqueue_script('imagesloaded',  $scriptdir. 'imagesloaded.js','','3.1.8');
			wp_enqueue_script('masonry',  $scriptdir. 'masonry.min.js','','3.1.5');
			wp_enqueue_script('audio_player',  $scriptdir . 'audioplayer.min.js', array('jquery'), false);
			$params = array(
				'masonry_rtl' => frozr_theme_layout(),
			);
			wp_localize_script( 'jquery', 'frozr_theme', $params );
			
			if (get_theme_mod('show_nt',true) == true) {
				wp_enqueue_script('newsticker',  $scriptdir. 'jquery.newsTicker.min.js', array('jquery'),'1.0.11');				
			}
			if ( is_home() ) {
				wp_enqueue_script('frontpagescripts',  $scriptdir . 'homebase.js', array('jquery'), false, true);
				if (!frozr_mobile() || frozr_tablet()) {
					wp_enqueue_script('pfold',  $scriptdir . 'jquery.pfold.js', array('jquery'), '1.0.0', true);
				}
			}
			if ( is_tag() || is_category() || is_archive() || is_author() || is_search() || is_page_template('template-blog.php') ) {
				wp_enqueue_script('blogbase',  $scriptdir . 'blogbase.js', array('jquery'), false, true);
			}
			if (function_exists('bbpress')) {
				if (is_bbpress() || is_page_template('archive-forum.php') ) {
				wp_enqueue_script('bbpbase',  $scriptdir . 'bbpbase.js', array('jquery'), false, true);
				}
			}
			if ( is_page() || is_single() ) {
				wp_enqueue_script('pagebase',  $scriptdir . 'pagebase.js', array('jquery'), false, true);
			}
			if  (class_exists( 'WooCommerce' )) {
				wp_enqueue_script('owl-carousel',  $scriptdir . 'owl.carousel.min.js', array('jquery'), false, true);
			}
			
			wp_enqueue_script('base',  $scriptdir . 'base.js', array('jquery'), false, true);
 	}
 }

add_action('wp_enqueue_scripts','frozr_head_scripts');

function frozr_options_scripts($hook) {
	$scriptdir = get_template_directory_uri();
	$scriptdir .= '/library/scripts/';
	$styledir = get_template_directory_uri();
	$styledir .= '/library/styles/';

	wp_enqueue_script('prettyphoto',  $scriptdir . 'prettyPhoto.js', array('jquery'), '3.1.5', true);

	wp_enqueue_style( 'fontawesome2', $styledir . 'font-awesome.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'prettyphotocss', $styledir . 'prettyPhoto.css', array(), '3.1.5', 'all' );
	
}
add_action( 'admin_enqueue_scripts', 'frozr_options_scripts' );

/**
 * IE warning
 */
function ie_warning() {
$ie_warning_msg = get_theme_mod('ie_message','We\'re Sorry, but Frozr just doesn\'t work with Internet Explorer. Yeah, sucks. Get mad at Steve Ballmer. Or just get on chrome. Or Firefox. Or Safari. Or Opera. Or Flock. Or RockMelt. Or iOS. Or Android. Or, well, anything that exists other than Internet Explorer. This isn\'t 1995.');
?>
	<div class="note-ie">
		<p><?php echo $ie_warning_msg; ?></p>
	</div>
<?php }
/**
 * Register styles
 */
function frozr_styles() {
	$selectslider = get_theme_mod('select_slider','1');
	$submenuani = get_theme_mod('sub_menu_ani','1');
	$styledir = get_template_directory_uri();
	$styledir .= '/library/styles/';
	$slider_animation_name = get_theme_mod('seq_ani_select','1');
	$slider_custom_css = get_theme_mod('seq_custom_css');
	$typo_style = get_theme_mod('theme_typography',1);

		//add the main stylesheet.
		wp_enqueue_style( 'frozr_style', get_stylesheet_uri() );

		// enqueue styles
		wp_enqueue_style( 'shortcodes', $styledir . 'shortcodes.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'cssgallery', $styledir . 'css-gallery.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'audioplayer', $styledir . 'audioplayer.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'fontawesome2', $styledir . 'font-awesome.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'base', $styledir . 'base.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'font', $styledir . 'font.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'mainstyle', $styledir . 'main_style.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'top-menu', $styledir . 'top_menu.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'main_responsive_desk', $styledir . 'main_responsive_desk.css', array(), '1.0', 'all' );
		if (frozr_mobile()) {
			wp_enqueue_style( 'main_responsive_mobi', $styledir . 'main_responsive_mobi.css', array(), '1.0', 'all' );
		}
		if ( is_home() ) {
			wp_enqueue_style( 'stcss', $styledir . 'standard_home_posts_loop.css', array(), '1.0', 'all' );	
			if (function_exists('bbpress') ) {
			wp_enqueue_style( 'hometopicstyle', $styledir . 'home_topics.css', array(), '1.0', 'all' );
			}
			wp_enqueue_style( 'featuredstyle', $styledir . 'featured.css', array(), '1.0', 'all' );
			if (!frozr_mobile() || frozr_tablet()) {
			wp_enqueue_style( 'pfoldstyle', $styledir . 'pfold.css', array(), '1.0', 'all' );
			}
		}
		wp_enqueue_style( 'menu', $styledir . 'menu.css', array(), '1.0', 'all' );
		if ($submenuani == 2) {
		wp_enqueue_style( 'blind_menu', $styledir . 'menu_ani/blind_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 3) {
		wp_enqueue_style( 'bounce_menu', $styledir . 'menu_ani/bounce_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 4) {
		wp_enqueue_style( 'fan_menu', $styledir . 'menu_ani/fan_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 5) {
		wp_enqueue_style( 'fence_menu', $styledir . 'menu_ani/fence_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 6) {
		wp_enqueue_style( 'fly_menu', $styledir . 'menu_ani/fly_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 7) {
		wp_enqueue_style( 'helix_menu', $styledir . 'menu_ani/helix_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 8) {
		wp_enqueue_style( 'jaws_menu', $styledir . 'menu_ani/jaws_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 9) {
		wp_enqueue_style( 'papercut_menu', $styledir . 'menu_ani/papercut_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 10) {
		wp_enqueue_style( 'pop_menu', $styledir . 'menu_ani/pop_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 11) {
		wp_enqueue_style( 'radial_menu', $styledir . 'menu_ani/radial_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 12) {
		wp_enqueue_style( 'shield_menu', $styledir . 'menu_ani/shield_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 13) {
		wp_enqueue_style( 'venitian_menu', $styledir . 'menu_ani/venitian_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 14) {
		wp_enqueue_style( 'wave_menu', $styledir . 'menu_ani/wave_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 15) {
		wp_enqueue_style( 'winding_menu', $styledir . 'menu_ani/winding_menu.css', array(), '1.0', 'all' );
		} elseif ($submenuani == 16) {
		wp_enqueue_style( 'zipper_menu', $styledir . 'menu_ani/zipper_menu.css', array(), '1.0', 'all' );
		} else {
		wp_enqueue_style( 'standard_menu', $styledir . 'standard_menu.css', array(), '1.0', 'all' );
		}
	if ($typo_style == 1) { 
		wp_enqueue_style( 'font_1', $styledir . 'fonts/font_1.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 2) {
		wp_enqueue_style( 'font_2', $styledir . 'fonts/font_2.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 3) {
		wp_enqueue_style( 'font_3', $styledir . 'fonts/font_3.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 4) {
		wp_enqueue_style( 'font_4', $styledir . 'fonts/font_4.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 5) {
		wp_enqueue_style( 'font_5', $styledir . 'fonts/font_5.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 6) {
		wp_enqueue_style( 'font_6', $styledir . 'fonts/font_6.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 7) {
		wp_enqueue_style( 'font_7', $styledir . 'fonts/font_7.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 8) {
		wp_enqueue_style( 'font_8', $styledir . 'fonts/font_8.css', array(), '1.0', 'all' );
	} elseif ($typo_style == 9) {
		wp_enqueue_style( 'font_9', $styledir . 'fonts/font_9.css', array(), '1.0', 'all' );
	} else {
		wp_enqueue_style( 'font_10', $styledir . 'fonts/font_10.css', array(), '1.0', 'all' );
	}

	if  (class_exists( 'WooCommerce' )) {
		wp_enqueue_style( 'dokkan', $styledir . 'custom_dokkan/dokkan.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'owl-carousel', $styledir . 'owl.carousel.css', array(), '1.0', 'all' );
	}
	if (function_exists('bbpress') ) {
		if (is_bbpress() || is_page_template('archive-forum.php') ) {
		wp_enqueue_style( 'bbp_user_profile', $styledir . 'bbp_user_profile.css', array(), '1.0', 'all' );
		}
	}
	if (is_page_template('template-page-fullwidth.php') ) {
		wp_enqueue_style( 'fullwidth', $styledir . 'fullwidth.css', array(), '1.0', 'all' );
	}
	if ( is_page() || is_single() ) {
		wp_enqueue_style( 'singlepagestyle', $styledir . 'single_page.css', array(), '1.0', 'all' );	
	}
	if ( is_attachment() ) {
		wp_enqueue_style( 'attachments', $styledir . 'attachments.css', array(), '1.0', 'all' );	
	}
}

add_action('wp_enqueue_scripts','frozr_styles');

/**
 * Return the default arguments for wp_page_menu()
 * 
 * This is used as fallback when the user has not created a custom nav menu in wordpress admin
 * 
 * Filter: frozr_page_menu_args
 *
 * @return array
 */
function frozr_page_menu_args() {
	$mobi_menu = get_theme_mod('main_menu_option','fro');
	
	if ($mobi_menu == 'fro' || frozr_mobile()) { 
		$container_class = 'main-menu ui-panel-inner';
	} else {
		$container_class = 'main-menu';
	}

	$args = array (
		'sort_column' => 'menu_order',
		'menu_class'  => $container_class,
		'include'     => '',
		'exclude'     => '',
		'echo'        => FALSE,
		'show_home'   => TRUE,
		'link_before' => '',
		'link_after'  => ''

	);
	return apply_filters('frozr_page_menu_args', $args);
}

/**
 * Return the default arguments for wp_nav_menu
 * 
 * Filter: frozr_primary_menu_id <br>
 * Filter: frozr_nav_menu_args
 *
 * @return array
 */
function frozr_nav_menu_args($top_menu = false) {
	$mobi_menu = get_theme_mod('main_menu_option','fro');
	
	if ($top_menu == true) {
		$menu_location = apply_filters('frozr_above_menu_menu_id', 'top-menu');
		$fallback = '';
		if ( frozr_mobile() ) {
			$menu_style_class = 'frotop_mobi_menu';
			$container_class = 'main-menu ui-panel-inner';
			$items_wrap = '<ul id="%1$s" data-role="listview" class="%2$s">%3$s</ul>';
		} else {
			$menu_style_class = 'frotop-menu';	 
			$container_class = 'main-menu';
			$items_wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>';
		}
	} else {
		$menu_location = apply_filters('frozr_primary_menu_id', 'primary-menu');
		$fallback = 'wp_page_menu';
		if ($mobi_menu == 'fro' || frozr_mobile()) { 
			$menu_style_class = 'fr-smenu';
			$container_class = 'main-menu ui-panel-inner';
			$items_wrap = '<ul id="%1$s" data-role="listview" class="%2$s">%3$s</ul>';
		} else {
			$menu_style_class = 'fr-menu';
			$container_class = 'main-menu';
			$items_wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>';
		}
	}

	$args = array (
		'theme_location'	=> $menu_location,
		'menu'				=> '',
		'container'			=> 'div',
		'container_class'	=> $container_class,
		'menu_class'		=> $menu_style_class,
		'fallback_cb'		=> $fallback,
		'before'			=> '',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'items_wrap'      	=> $items_wrap,
		'depth'				=> 0,
		'walker'			=> '',
		'echo'				=> false
	);
	
	return apply_filters('frozr_nav_menu_args', $args);
	
	
}

/**
 * Create the above header menu 
 * 
 * @return array
 */
if ( function_exists( 'childtheme_override_top_menu' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_top_menu() {
		childtheme_override_top_menu();
	}
} else {
	/**
	 * Creates the top menu
	 */
	 function frozr_top_menu() {
	 $top_user_menu_sh = get_theme_mod('top_user_menu_sh', true);
	 $top_menu_cart_sh = get_theme_mod('show_top_cart', true);

	 global $current_user;
     get_currentuserinfo();
	 
	 ?>
	<?php if ( $top_menu_cart_sh == true && class_exists( 'WooCommerce' ) || $top_user_menu_sh == true && is_user_logged_in() || $top_user_menu_sh == true && class_exists( 'WooCommerce' ) || has_nav_menu('top-menu')) { ?>
	<div class="top-menu">
		<div class="fr-top-menu">
			<?php do_action('before_top_menu'); ?>
			<?php if ( $top_menu_cart_sh == true && class_exists( 'WooCommerce' )) { ?>
			<!--
<div class="top_crt">
				<a data-role="button" href="#topcart" class="frozr_top_cart_count" style="display:none;" title="<?php //echo __('View Cart', 'frozr'); ?>" ></a>
				<a data-role="button" href="#topcart" class="cart_button" title="<?php //echo __('View Cart', 'frozr'); ?>" ><i class="fs-icon-shopping-cart"></i></a>
			</div>
-->		
			<?php } ?>
			<?php if (has_nav_menu('top-menu')) { ?>
				<?php if ( frozr_mobile() ) { ?>
					<a data-role="button" href="#toppanel" class="top_mobi_menu" title="<?php echo __('Top Menu', 'frozr'); ?>" ><i class="fs-icon-list"></i></a>
				<?php } else {
					frozr_menus(true, true);
				} ?>
			<?php } ?>
			<?php if ($top_user_menu_sh == true) { ?>
			<?php if (is_user_logged_in() || class_exists( 'WooCommerce' ) ) { ?>
			<div class="user_top_menu">
				<a data-role="button" class="usr_menu_button" href="#usrmenu">
				<?php if (is_user_logged_in()) {
					echo get_avatar( $current_user->ID, 32 ); 
					} ?>
				</a>
			</div>
			<?php } } ?>
			<?php do_action('after_top_menu'); ?>
		</div>
	</div>
	<?php }
	}
}
/**
 * Create the user WooCommerce login/register form 
 * 
 * @return array
 */
if ( function_exists( 'childtheme_override_top_menu_login_form' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_top_menu_login_form() {
		childtheme_override_top_menu_login_form();
	}
} else {
	/**
	 * Creates the top menu login/register form
	 */
	 function frozr_top_menu_login_form() { ?>

		<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
		
		<div id="top_usr_login">

			<form data-ajax="false" method="post" class="login">

				<?php do_action( 'woocommerce_login_form_start' ); ?>

				<p class="form-row form-row-wide">
					<label for="username"><?php _e( 'Username or email address', 'frozr' ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</p>
				<p class="form-row form-row-wide">
					<label for="password"><?php _e( 'Password', 'frozr' ); ?> <span class="required">*</span></label>
					<input class="input-text" type="password" name="password" id="password" />
				</p>

				<?php do_action( 'woocommerce_login_form' ); ?>

				<p class="form-row">
					<?php wp_nonce_field( 'woocommerce-login' ); ?>
					<input type="submit" class="button" name="login" value="<?php _e( 'Login', 'frozr' ); ?>"  />
					<label for="rememberme" class="inline">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'frozr' ); ?>
					</label>
				</p>
				<p class="lost_password">
					<a href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'frozr' ); ?></a>
				</p>

				<?php do_action( 'woocommerce_login_form_end' ); ?>

			</form>

		</div>
		
		<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

		<div id="top_usr_reg">

			<form data-ajax="false" method="post" class="register">

				<?php do_action( 'woocommerce_register_form_start' ); ?>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

					<p class="form-row form-row-wide">
						<label for="reg_username"><?php _e( 'Username', 'frozr' ); ?> <span class="required"></span></label>
						<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
					</p>

				<?php endif; ?>

				<p class="form-row form-row-wide">
					<label for="reg_email"><?php _e( 'Email address', 'frozr' ); ?> <span class="required">*</span></label>
					<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
				</p>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

					<p class="form-row form-row-wide">
						<label for="reg_password"><?php _e( 'Password', 'frozr' ); ?> <span class="required">*</span></label>
						<input type="password" class="input-text" name="password" id="reg_password" />
					</p>

				<?php endif; ?>

				<!-- Spam Trap -->
				<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'frozr' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

				<?php do_action( 'woocommerce_register_form' ); ?>

				<p class="form-row">
					<?php wp_nonce_field( 'woocommerce-register' ); ?>
					<input type="submit" class="button" name="register" value="<?php _e( 'Register', 'frozr' ); ?>" />
				</p>

				<?php do_action( 'woocommerce_register_form_end' ); ?>

			</form>

		</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_customer_login_form' );
	}
}
// Custom redirect for users after logging in
add_filter('woocommerce_login_redirect', 'wcs_login_redirect');
function wcs_login_redirect( $redirect ) {
	$location = $_SERVER['HTTP_REFERER'];
	wp_safe_redirect($location);
	exit();
}
/**
 * Create the top cart panel
 * 
 * @return array
 */
if ( function_exists( 'childtheme_override_top_cart_panel' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_top_cart_panel() {
		childtheme_override_top_cart_panel();
	}
} else {
	/**
	 * Creates the top cart panel
	 */
	 function frozr_top_cart_panel() {
	 $top_menu_cart_sh = get_theme_mod('show_top_cart', true);

	 if ( $top_menu_cart_sh == true && class_exists( 'WooCommerce' )) { ?>
		 <div  data-role="panel" id="topcart" data-position="right" data-display="push" data-ajax="false">		
			<?php woocommerce_mini_cart(); ?>
		 </div>
	 <?php }

	 }
}
add_action('after_theme_panels', 'frozr_top_cart_panel', 3);

/**
 * Create woocommerce notices bar
 * 
 * @return array
 */
if ( function_exists( 'childtheme_override_frozr_woo_notices' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_woo_notices() {
		childtheme_override_frozr_woo_notices();
	}
} else {
	/**
	 * Creates woocommerce notices bar
	 */
	function frozr_woo_notices() { ?>
	<?php if (class_exists( 'WooCommerce' )) { ?>
	 <div class="fro_woo_notices">
			<?php wc_print_notices(); ?>
		 </div>
	 <?php }
	 }
}
add_action('frozr_aboveheader','frozr_woo_notices');
/**
 * Create the user menu panel
 * 
 * @return array
 */
if ( function_exists( 'childtheme_override_user_top_menu_panel' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_user_top_menu_panel() {
		childtheme_override_user_top_menu_panel();
	}
} else {
	/**
	 * Creates the user top menu panel
	 */
	 function frozr_user_top_menu_panel() {
	 $c_links_count = get_theme_mod('top_user_menu_links_select','0');
	 $top_user_menu_sh = get_theme_mod('top_user_menu_sh', true);
	 $top_user_woo_menu_sh = get_theme_mod('top_user_woo_menu_sh', true);
	 $n = 1;
	 global $current_user;
     get_currentuserinfo();

	if ($top_user_menu_sh == true) {
	if (is_user_logged_in() || class_exists( 'WooCommerce' ) ) { ?>
	<div  data-role="panel" id="usrmenu" data-display="reveal" data-position="right" data-display="push">
		<div class="usr_info_temp">
			<div class="usr_avatar" <?php if (is_user_logged_in()) { ?> style="background: url('<?php echo get_avatar_url($current_user->ID); ?>') no-repeat center center; background-size: 100% auto;" <?php } ?>></div>
			<span class="usr_name"><?php if (!is_user_logged_in() && class_exists( 'WooCommerce' ) ) { _e('My Account','frozr'); } else { echo $current_user->display_name; } ?></span>
		</div>

		<div class="usr_top_menu_content">
			<?php if (!is_user_logged_in() && class_exists( 'WooCommerce' ) ) { ?>
			<div data-role="tabs" id="tabs">
				<?php frozr_top_menu_login_form(); ?>
				<div data-role="navbar">
					<ul class="tabs">
						<li><a href="#top_usr_login" data-ajax="false"><?php _e('Login','frozr'); ?></a></li>
						<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) { ?>
						<li><a href="#top_usr_reg" data-ajax="false"><?php _e('Register','frozr'); ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php } else { ?>
					
			<div class="user_top_menu_footer">
					<a class="usr_cust_menu_0" title="<?php _e('Logout!','frozr') ?>" href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fs-icon-power-off"></i></a>
				<?php while ($c_links_count > 0) { ?>
					<a class="usr_cust_menu_<?php echo $n; ?>" title="<?php echo esc_attr(get_theme_mod('top_user_menu_link_title_'.$n)); ?>" href="<?php echo esc_url(get_theme_mod('top_user_menu_link_path_'.$n)); ?>"><i class="<?php echo get_theme_mod('top_user_menu_link_icon_'.$n); ?>"></i></a>
				<?php $n++; $c_links_count--; } ?>
			</div>
			<div class="usr_top_menu_items">
				<?php
				if (has_nav_menu('user-top-menu')) {
					wp_nav_menu( array( 'theme_location' => apply_filters('frozr_user_top_menu_id', 'user-top-menu'), 'menu_class' => 'usr-top-menu', 'items_wrap' => '<ul id="%1$s" data-role="listview" class="%2$s">%3$s</ul>' ) );			
				} ?>
				<?php if ( $top_user_woo_menu_sh == true && class_exists( 'WooCommerce' ) ) { ?>
					<div data-role="collapsible" data-iconpos="right" data-collapsed-icon="shop" data-expanded-icon="minus" class="usr_woo_menu_content">
						<h2><?php _e('WooCommerce','frozr'); ?></h2>
						<ul data-role="listview">
						  <li><a class="ui-btn ui-btn-icon-right ui-icon-user" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('My Account','frozr'); ?></a></li>
						  <li><a class=" ui-btn ui-btn-icon-right ui-icon-edit" href="<?php echo wc_customer_edit_account_url(); ?>"><?php _e('Edit Account','frozr'); ?></a></li>
						  <li><a class="ui-btn ui-btn-icon-right ui-icon-mail" href="<?php echo wc_get_endpoint_url( 'edit-address', 'billing', wc_get_page_permalink( 'myaccount' ) ); ?>"><?php _e('Edit Billing Address','frozr'); ?></a></li>
						  <li><a class="ui-btn ui-btn-icon-right ui-icon-location" href="<?php echo wc_get_endpoint_url( 'edit-address', 'shipping', wc_get_page_permalink( 'myaccount' ) ); ?>"><?php _e('Edit Shipping Address','frozr'); ?></a></li>
						</ul>
					</div>
				<?php } ?>
				<?php do_action('frozr_add_user_top_menu_item'); ?>
			</div>
			<?php } ?>
		</div>
	</div>
	 <?php } }
	}
}
add_action('after_theme_panels', 'frozr_user_top_menu_panel', 1);
/**
 * This adds a css class of "fr-menu" to the first <ul> of wp_page_menu for layout compatibility.
 *
 * @param string
 * @return string
 */
function frozr_add_menuclass($ulclass) {
	$mobi_menu = get_theme_mod('main_menu_option','fro');

	if ($mobi_menu == 'fro' || frozr_mobile()) { 
		$menu_style_class = 'fr-smenu';
		$data_role = 'data-role="listview"';
	} else {
		$menu_style_class = 'fr-menu';
		$data_role = '';
	}

		return preg_replace( '/<ul>/', '<ul '. $data_role .' class="' . $menu_style_class . '">', $ulclass, 1 );
}

if ( function_exists( 'childtheme_override_body' ) )  {
	/**
	 * @ignore
	 */
	 function frozr_body() {
		childtheme_override_body();
	}
} else {
	/**
	 * Creates the body tag
	 */
	 function frozr_body() {
    	if ( apply_filters( 'frozr_show_bodyclass',TRUE ) ) { 
        	// Creating the body class
    		echo '<body ';
    		body_class();
    		echo ' data-ajax="false">' . "\n\n";
    	} else {
    		echo '<body>' . "\n\n";
    	}
	}
}

/**
 * Register action hook: frozr_before
 * 
 * Located in header.php, just after the body tag, before anything else.
 */
function frozr_before() {
    do_action( 'frozr_before' );
}


/**
 * Register action hook: frozr_abovefooter
 * 
 * Located in header.php, inside the header div
 */
function frozr_aboveheader() {
    do_action( 'frozr_aboveheader' );
}


/**
 * Register action hook: frozr_abovefooter
 * 
 * Located in header.php, inside the header div
 */
function frozr_header() {
    do_action( 'frozr_header' );
}


if ( function_exists( 'childtheme_override_brandingopen' ) )  {
	/**
	 * @ignore
	 */
	function frozr_brandingopen() {
		childtheme_override_brandingopen();
		}
	} else {
	/**
	 * Display the opening of the #branding div
	 * 
	 * Override: childtheme_override_brandingopen
	 */
    function frozr_brandingopen() {
	$logo_option = get_theme_mod('logo_option','text');
	if ($logo_option != 'none') {
    	echo "\t<div id=\"masthead\">\n";
    	echo "\t<div id=\"branding\">\n";
    }
	}
}
add_action( 'frozr_header','frozr_brandingopen',1 );

if ( function_exists( 'childtheme_override_blogtitle' ) )  {
	/**
	 * @ignore
	 */
    function frozr_blogtitle() {
    	childtheme_override_blogtitle();
    }
} else {
    /**
     * Display the blog title within the #branding div
     * 
     * Override: childtheme_override_blogtitle
     */    
    function frozr_blogtitle() {
		$logo_option = get_theme_mod('logo_option','text');
		$site_logo_img = get_theme_mod('site_logo');
		$header_style = get_theme_mod('header_layout','in');
		$logo_width = get_theme_mod('logo_width','15');
	?>
    	<?php if ( $logo_option == 'img' ) :?>
            <div id="blog-title"><h1><a href="<?php echo home_url(); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="home"><img width="auto" height="auto" alt="<?php bloginfo( 'name' ); ?>" style="max-width:79%;" src="<?php echo $site_logo_img;?>"/></a></h1></div>
		<?php elseif ($logo_option == 'text' && get_bloginfo('name') != null) :?>
            <div id="blog-title"><h1><a href="<?php echo home_url(); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1></div>
		<?php endif;?>
    
    <?php
    }
}
add_action('frozr_header','frozr_blogtitle',3);

if ( function_exists('childtheme_override_blogdescription') )  {
	/**
	 * @ignore
	 */
    function frozr_blogdescription() {
    	childtheme_override_blogdescription();
    }
} else {
    /**
     * Display the blog description within the #branding div
     * 
     * Override: childtheme_override_blogdescription
     */
    function frozr_blogdescription() {
		$logo_option = get_theme_mod('logo_option','text');
		
		if ($logo_option != 'none' && $logo_option == 'text' && get_bloginfo('description') != null):
			$blogdesc = '"blog-description">' . get_bloginfo('description', 'display');
			echo "\t<span id=$blogdesc</span>";
		endif;
    }
}
add_action('frozr_header','frozr_blogdescription',5);

if ( function_exists('childtheme_override_brandingclose') )  {
	/**
	 * @ignore
	 */
	 function frozr_brandingclose() {
    	childtheme_override_brandingclose();
    }
} else {
    /**
     * Display the closing of the #branding div
     * 
     * Override: childtheme_override_brandingclose
     */    
    function frozr_brandingclose() {
	$logo_option = get_theme_mod('logo_option','text');
	if ($logo_option != 'none') {
    	echo "\t\t</div><!--  #branding -->\n";
    	echo "\t\t</div><!--  #masthead -->\n";
    }
	}
}
add_action('frozr_header','frozr_brandingclose',7);

if ( function_exists('childtheme_override_access') )  {
    /**
	 * @ignore
	 */
	 function frozr_access() {
    	childtheme_override_access();
    }
} else {
    /**
     * Display the #access div
     * 
     * Override: childtheme_override_access
     */    
    function frozr_access() {
	$show_main_menu = get_theme_mod('show_main_menu', true);
	$show_search_box = get_theme_mod('sh_header_search', true);
	$mobi_menu = get_theme_mod('main_menu_option','fro');
	$fro_menu_icon = get_theme_mod('main_main_icon','fs-icon-navicon');
	$header_search_type = get_theme_mod('header_search_type', 'fro');
	if ($header_search_type == 'woo' && class_exists( 'WooCommerce' )) {
	$head_search_type = 'woo';
	} elseif ($header_search_type == 'bbp' && function_exists('bbpress')) {
	$head_search_type = 'bbp';
	} else {
	$head_search_type = 'fro';
	}
	if ($show_main_menu == true || $show_search_box == true) { ?>    
    <div id="access">
    
    	<div class="skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip navigation to the content', 'frozr' ); ?>"><?php _e('Skip to content', 'frozr' ); ?></a></div><!-- .skip-link -->
    	<div class="menu_flex">
    	<?php if ($show_main_menu == true) {
			if ($mobi_menu == 'fro' || frozr_mobile() ) {
				echo '<a id="mobi_menu" data-role="button" href="#mainpanel" class="mobi_menu';
				if (frozr_mobile()) { echo ' mobi_menu_hov';}
				echo '" title="' . __('Menu','frozr') . '">';
				echo '<i class="'. $fro_menu_icon .'"></i></a>';
			} else {
				frozr_menus(true);
			}
		} ?>

		<?php if ($show_search_box == true && !frozr_mobile() ) { ?>
		<div id="search-home" <?php if (!frozr_mobile()) { echo 'class="home-search"';} ?> >
			<?php frozr_search_form($head_search_type); ?>
		</div>
		<?php } ?>

		</div>
    </div><!-- #access -->

    <?php }
    }
}
add_action('frozr_header','frozr_access',9);

/*get the theme menus
 * Located in header.php
*/
function frozr_menus($not_mob = false, $top_menu = false) {
	$mobi_menu = get_theme_mod('main_menu_option','fro');
	$menu_show = get_theme_mod('main_menu_style','showleftov');
	$show_search_box = get_theme_mod('sh_header_search', true);
	$header_search_type = get_theme_mod('header_search_type', 'fro');
	if ($header_search_type == 'woo' && class_exists( 'WooCommerce' )) {
	$head_search_type = 'woo';
	} elseif ($header_search_type == 'bbp' && function_exists('bbpress')) {
	$head_search_type = 'bbp';
	} else {
	$head_search_type = 'fro';
	}
	if ($top_menu == true) {
		if (frozr_mobile() ) {
			echo '<div data-role="panel" id="toppanel" data-display="overlay">';
		}
		if (frozr_mobile() || $not_mob == true) {
			if ( ( function_exists("has_nav_menu") ) && ( has_nav_menu( apply_filters('frozr_primary_menu_id', 'primary-menu') ) ) ) {
				echo  wp_nav_menu(frozr_nav_menu_args(true));
			}
		}
		if (frozr_mobile() ) {
			echo '</div><!--#toppanel-->';
		}

	} else {
		if ($mobi_menu == 'fro' || frozr_mobile()) { 
			if ($menu_show == 'showrightpu') {
				$menu_style_class = 'data-position="right" data-display="push"';
			} elseif ($menu_show == 'showleftre') {
				$menu_style_class = 'data-display="reveal"';		
			} elseif ($menu_show == 'showleftpu' ) {
				$menu_style_class = 'data-display="push"';		
			} elseif ($menu_show == 'showrightov' ) {
				$menu_style_class = 'data-position="right" data-display="overlay"';		
			} elseif ($menu_show == 'showrightre' ) {
				$menu_style_class = 'data-position="right" data-display="reveal"';		
			} else {
				$menu_style_class = 'data-display="overlay"';		
			}
		}

		if ($mobi_menu == 'fro' || frozr_mobile() ) {
			echo '<div data-role="panel" id="mainpanel"'. $menu_style_class . '><span class="mobi_menu_title">'. __("Menu","frozr") .'</span>';
			if ($show_search_box == true && frozr_mobile()) { ?>
				<div id="search-home" class="mobile_search_home">
					<?php frozr_search_form($head_search_type); ?>
				</div>
			<?php }
		}
		if ($mobi_menu == 'fro' || frozr_mobile() || $not_mob == true) {
			if ( ( function_exists("has_nav_menu") ) && ( has_nav_menu( apply_filters('frozr_primary_menu_id', 'primary-menu') ) ) ) {
				echo  wp_nav_menu(frozr_nav_menu_args());
			} else {
				echo frozr_add_menuclass(wp_page_menu(frozr_page_menu_args()));	
			}
		}
		if ($mobi_menu == 'fro' || frozr_mobile() ) {
			echo '</div><!--#mainpanel-->';
		}
	}
}
/* print popup pages */
function pop_pages() {
$args =  array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'template-page-dilog.php'
);
$pages = get_posts( $args );
foreach ( $pages as $page ) : ?>
	<div data-role="popup" id="pop_<?php echo $page->ID; ?>" class="pop_pages">
		<div class="pop_pg_title">
			<h2><?php echo $page->post_title; ?></h2>
		</div>
		<div class="single-post-content">
			<?php echo apply_filters('the_content', $page->post_content); ?> 
		</div>
	</div>   
<?php endforeach;
}

/**
 * Register action hook: frozr_belowheader
 * 
 * Located in header.php, just after the header div
 */
function frozr_belowheader() {
    do_action('frozr_belowheader');
} // end frozr_belowheader


/**
 * Back to top button
 * 
 * Located in header.php, just after frozr_body(); action hook
 */
function back_to_top() { ?>
	<div class="back-to-top" id="back-top">
	<a href="javascript:void(0)" class="back-to-top fs-icon-chevron-up"></a>
	</div>
<?php }
add_action('frozr_before','back_to_top');

/**
 * Echo the theme layout status
 * Return boolean
 */
function frozr_theme_layout() {
	$theme_layout = get_theme_mod('theme_layout','left');
	$theme_layout_val = ($theme_layout == 'left') ? 'true' : 'false';
	
	return $theme_layout_val;
}

?>