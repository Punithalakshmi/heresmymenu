/**
 * Scripts for pages
 *
 * @package Frozr
 * @subpackage FrozrScript
 */
 
	jQuery.noConflict();
	jQuery(document).on( "pagebeforecreate", function() {
		//mobile photos
		if (jQuery('body').hasClass('on-mobile')) {
			var nx = 0;
			jQuery('.entry-content-wrapper .entry-content img:not(.ajax-loader, .wp-post-image), .sing_content img:not(.ajax-loader, .wp-post-image)').each(function () {
				var imgids = 'img-'+nx,
				imgalt = jQuery(this).attr('alt');
				imgdiv = jQuery(this).parent().contents().unwrap().wrap('<div/>').removeClass().addClass('popphoto');
				jQuery('<a href="#'+imgids+'" data-rel="popup" data-position-to="window" class="cont_mobi_img" data-transition="fade"><i class="fs-icon-picture-o"></i>'+imgalt+'</a>').insertBefore( imgdiv.parent() );
				imgdiv.parent().attr({"id": imgids, "data-role": "popup", "data-corners": "false","data-overlay-theme": "a","data-tolerance": "30,15"}).addClass('photopopup');
			nx++;
			});
		}
		//this is to resize large images to fit the theme minimum space.
		jQuery('img.size-full, img.attachment-full').each(function(){
			var imgwid = jQuery(this).width(),imghei = jQuery(this).height(), imgn ='', imgn2='';
			while (imgwid > 600) {
			  imgn=imgwid/1.01;
			  imgn2=imghei/1.01;
			  imgwid=imgn;
			  imghei=imgn2;
			  }												
			jQuery(this).width(imgn);
			jQuery(this).height(imgn2);
		});
	});
	jQuery(document).on( "pagecreate", function(){
		//mobile photos
		jQuery( ".photopopup" ).on({
			popupbeforeposition: function() {
				var maxHeight = jQuery( window ).height() - 60 + "px";
				jQuery( ".photopopup img" ).css( "max-height", maxHeight );
			}
		});
		//content tabs
		jQuery('.frozr_cont_tabs').each(function(){
			var tabcls = ["a","b","c","d","e"];
			var i = 0;
			var z = -1;
			var n = 1;
			while (jQuery(this).children('#fro_tab_'+n).length > 0) {
				if (n == 1) {
				jQuery("#fro_tab_"+n).removeClass().addClass("ui-block-"+tabcls[i]+" ui-state-default ui-corner-top ui-tabs-active ui-state-active");
				} else if (n > 5) {
				jQuery(this).removeClass().addClass("tabs frozr_cont_tabs ui-grid-e ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");
				jQuery("#fro_tab_"+n).removeClass().addClass("ui-block-e ui-state-default ui-corner-top");
				} else {
				jQuery(this).removeClass().addClass("tabs frozr_cont_tabs ui-grid-"+tabcls[z]+" ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");
				jQuery("#fro_tab_"+n).removeClass().addClass("ui-block-"+tabcls[i]+" ui-state-default ui-corner-top");
				}
				i++;n++;z++;
			}
		});
		//toggle effect for the social icons.
		if (jQuery('body').hasClass('page-template-default')) {
			jQuery('.s-icons-page, .page-tags > p').hide();
		}
		jQuery('.s-title').click(function(){
			jQuery(this).toggleClass('active fs-icon-caret-down');
			jQuery('.s-icons-page').slideToggle(200);
			if (jQuery(this).hasClass('fs-icon-caret-right')) {jQuery(this).removeClass('fs-icon-caret-right');
			} else jQuery(this).addClass('fs-icon-caret-right');
		});
		//toggle effect for the page tags.
		jQuery('.page-tags > span').click(function(){
			jQuery(this).toggleClass('active fs-icon-caret-down');
			jQuery('.page-tags > p').slideToggle(200);
			if (jQuery(this).hasClass('fs-icon-caret-right')) {jQuery(this).removeClass('fs-icon-caret-right');
			} else jQuery(this).addClass('fs-icon-caret-right');
		});
		jQuery('li.pagenav ul').hide();
		//toggle effect for the page subpages.
		jQuery('.page-sub-pages-title').click(function(){
			jQuery(this).toggleClass('active fs-icon-caret-down');
			jQuery('li.pagenav ul').slideToggle(200);
			if (jQuery(this).hasClass('fs-icon-caret-right')) {jQuery(this).removeClass('fs-icon-caret-right');
			} else jQuery(this).addClass('fs-icon-caret-right');
		});
		jQuery(".owl-carousel").owlCarousel({
			items : 4,
			itemsScaleUp:true,
			navigation:true,
			navigationText:['<i class="fs-icon-chevron-circle-left"></i>','<i class="fs-icon-chevron-circle-right"></i>'],
			pagination:false
		});
	});
