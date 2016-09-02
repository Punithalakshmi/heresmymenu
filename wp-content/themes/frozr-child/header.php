<?php
/**
 * Header Template
 *
 * This template calls a series of functions that output the head tag of the document.
 * The body and div #main elements are opened at the end of this file. 
 * 
 * @package Frozr
 * @subpackage Templates
 */
	//add cache control - its off to use add "true" to the below function
	frozr_cache_support();
	
	// Create doctype
	frozr_create_doctype();
	echo " ";
	language_attributes();
	echo ">\n";
	
	// Opens the head tag 
	frozr_head_profile();
	
	// Create the meta content type
	frozr_create_contenttype();
		
	// Create the meta description
	frozr_show_description();

	// mobile support  
	frozr_viewport();

	// Create the tag <meta name="robots"  
	frozr_show_robots();
	
	// Legacy feedlink handling
	if ( current_theme_supports( 'frozr_legacy_feedlinks' ) ) {    
		// Creating the internal RSS links
		frozr_show_rss();
	
		// Create comments RSS links
		frozr_show_commentsrss();
	}
	
	// Create pingback address
	frozr_show_pingback();

	//Show Theme Favicon
	frozr_show_favicon();
	?>
	<!--[if IE]><link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/ie-only.css" /><![endif]-->
	<?php
	
	/* The function wp_head() loads Frozr's stylesheet and scripts.
	 * Calling wp_head() is required to provide plugins and child themes
	 * the ability to insert markup within the <head> tag.
	 */
	wp_head();

?>
</head>

<?php 
	// Create the body element and dynamic body classes
	frozr_body();

if (get_theme_mod('sh_homepage',false) == false || !is_home()) { ?>	
<!--[if IE]>
<?php
	//IE warning message.
	ie_warning();
?>
<![endif]-->
<?php
	// Action hook to place content before opening #wrapper
	frozr_before(); 

		// Action hook for placing content above the theme header
		frozr_aboveheader();
			
			echo ( apply_filters( 'frozr_open_header', '<div data-role="page">' ) );

			do_action('before_theme_panels');
			
			//get the mobile menu if mobile
			frozr_menus();
			
			//get the top menu if mobile
			frozr_menus(false, true);
			
			if (frozr_mobile()) { do_action('frozr_dash_sidebar'); }
			
			do_action('after_theme_panels');			
			
			echo ( apply_filters( 'frozr_open_header', '<div id="header" data-role="header">' ) );
			
			//Display the above header menu
			echo frozr_top_menu();
						
			// Filter provided for altering output of the header opening element
			echo ( apply_filters( 'frozr_open_header', '<div id="header-container"><div class="header-wrap">'));

			// Action hook creating the theme header
			frozr_header();
	
    		// Filter provided for altering output of the header closing element
			echo ( apply_filters( 'frozr_close_header', '</div><!-- .header-wrap--></div><!-- #header-container-->' ) );
			
			//get the top slide
			revo_slider_top();

			echo ('</div><!-- #header-->' );

		// Action hook for placing content below the theme header
		frozr_belowheader();
    	?>
 
<div id="main" role="main" class="ui-content">
<?php }