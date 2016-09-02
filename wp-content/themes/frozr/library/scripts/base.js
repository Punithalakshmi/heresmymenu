/**
 * Scripts core
 *
 * @package Frozr
 * @subpackage FrozrScript
 */
 
	jQuery.noConflict();
	jQuery(document).on( "pagebeforecreate", function() {
		
		jQuery(".page .entry-content select,.single-post-content select").attr("data-native-menu","false").prepend('<option>Choose options</option>');
		jQuery("a:not(.cont_mobi_img, [data-rel=popup]), form, button:not(.single_add_to_cart_button), input:not(.submit-frozr-settings input), .ui-link").attr({"data-enhance": "false", "data-ajax": "false"});
		jQuery("#place_order, .ad_to_crt_wrapper .variations *, .dish-info .variations *, .admin-bar-search form *").attr("data-role","none");
		if (jQuery(".ui-checkbox label").length > 0){jQuery(this).removeClass().addClass('frozr-checkbox');}
		jQuery(".fr-smenu li:has(ul), .usr-top-menu li:has(ul), .frotop_mobi_menu li:has(ul)").attr({"data-role": "collapsible", "data-iconpos": "right", "data-inset": "false"});
		jQuery(".fr-smenu ul, .usr-top-menu ul, .frotop_mobi_menu ul").attr("data-role", "listview");
		jQuery('.fr-smenu li:has(ul) > a, .usr-top-menu li:has(ul) > a, .frotop_mobi_menu li:has(ul) > a').contents().unwrap().wrap('<h2/>').removeAttr( "href" );
		//lazyeater
		jQuery(".search_adv_wrapper ul.products, .rsb-boxes ul.products").attr({"data-role": "listview", "data-filter": "true", "data-filter-reveal": "true", "data-filter-placeholder": "e.g. drinks, fruits...", "data-inset":"true"});

		//show nothing if using IE browser.
		if (jQuery(".msie").length) {
			jQuery("#frozr, #back-top").remove();
		}
		//Back to top button.
		jQuery("#back-top").hide();

		//call the audioplayer.js script 
		jQuery(function() {
		if (!jQuery('audio').parent('.mejs-mediaelement').length) {
			jQuery('audio').audioPlayer();
			}
		});

		//this is to add wmode=opaque to videos.
		jQuery("iframe[src], embed[src]").each(function () {
			var url = jQuery(this).prop("src");
			if(url.search(/\?/) === -1) {
				jQuery(this).prop("src", url + "?wmode=opaque");
			} else {
				var splittedUrl = url.split("?");
				jQuery(this).prop("src", splittedUrl[0] + "?wmode=opaque&" + splittedUrl[1]);
			}
		});
		//this is to add wmode=opaque to <objects>.
		jQuery("object").each(function () {
            jQuery(this).attr("wmode", 'opaque');
		});
		//this is to make the logined user avater as a background image.
		var usr_img_src = jQuery('a.user-submit > img, .tml-user-avatar > img').attr('src');
		jQuery('a.user-submit, .tml-user-avatar').css('background','url(' + usr_img_src +') no-repeat scroll center center transparent');
		//this adds icons to the login inputs.
		jQuery('div.bbp-username > label').addClass('fs-icon-user');
		jQuery('div.bbp-password > label').addClass('fs-icon-key');
		jQuery('div.bbp-email > label').addClass('fs-icon-envelope');
		
			
	});
	jQuery(document).ready(function(){
		jQuery.mobile.ignoreContentEnabled = false;
		/*Back to top button*/
		jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 150) {
					jQuery('#back-top').fadeIn();
				} else {
					jQuery('#back-top').fadeOut();
				}
			});
		jQuery('.back-to-top').click(function () {
			jQuery('html, body').animate({
				scrollTop: 0
			}, 'slow');
		});
		jQuery(".user_top_menu, .top_crt, #mobi_menu").click(function(){
			jQuery("html, body").animate({
				scrollTop: jQuery('#header').offset().top 
			}, 300);
		});
		jQuery('.home-search').click(function() {
			jQuery("div#search-home .searchbox-input").focus()
		});
		jQuery('.fro_woo_notices i').click(function() {
			jQuery('.fro_woo_notices').remove()
		});		
		jQuery('.has_bg').laziestloader({
			setSourceMode: false // this is the important bit!
		}, function(){
			jQuery(this).removeClass("bg_hidden");
		});
		jQuery('.welcome_msg,#revslider-input-one,#revslider-input-two,.topics-list-home,.featured_post_cont,#st_posts_wrapper_1,#st_posts_wrapper_2,#st_posts_wrapper_3,#st_posts_wrapper_4,#st_posts_wrapper_5,#team_member_section,.img_grd_wrapper,.footer-container > *').laziestloader({
			setSourceMode: false // this is the important bit!
		}, function(){
			jQuery(this).css('visibility','visible').addClass("frocontfadeIn");
		});
		//team panels
		jQuery( ".mem_panel" ).on( "panelopen", function( event, ui ) {
			event.preventDefault();
			jQuery('body').addClass('team_Panel_visible');
		});
		jQuery( ".mem_panel" ).on( "panelclose", function( event, ui ) {
			event.preventDefault();
			jQuery('body').removeClass('team_Panel_visible');
		});
		//masonry for footer
		jQuery('#xoxo').imagesLoaded( function() {
		  jQuery('#xoxo').masonry({
			  isAnimated: true,
			  isFitWidth: true,
			  itemSelector: "#xoxo > *",
			  isOriginLeft: frozr_theme.masonry_rtl
		  });
		});
		//count cart items
		if (jQuery('.cart_summary', document.body).data('cart_items_count') > 0) {
			jQuery('.frozr_top_cart_count').text(jQuery('.cart_summary', document.body).data('cart_items_count')).show();
		}
	});