/**
 * Scripts for the home page only
 *
 * @package Frozr
 * @subpackage FrozrScript
 */
jQuery.noConflict();
jQuery(document).ready(function(){
		if (!jQuery('body').hasClass('on-mobile')) {
			//calling the pfold script.
			if (jQuery('.uc-container').length > 0) {
				var opened = false;
				jQuery( 'div.uc-container' ).each( function test( i ) {
					var item = jQuery( this ), direction;
					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['right','top']; break;
						case 3 : direction = ['left','top']; break;
					}	
					var pfold = item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
					});
					item.find( 'span.icon-eye' ).on( 'click', function() {
						if( !opened ) {
							opened = true;
							pfold.unfold(); }
					}).end().find( 'span.icon-cancel' ).on( 'click', function() { pfold.fold(); });
				});
			}
			//opening the pfold post.
			jQuery('.uc-container').click(function(){
				jQuery('.f-c-c').addClass('f-c-c-front');
				jQuery('.f-c-c').removeClass('f-c-c-back');
			});
			//closing the pfold post.
			jQuery('.icon-cancel').click(function(){
				jQuery('.f-c-c').addClass('f-c-c-back');
				jQuery('.f-c-c').removeClass('f-c-c-front');
			});
		}
		//this will insure the pfold plugin will work fine in infinitscroll loaded posts.
		jQuery('#nav-below').click(function(){
			jQuery('.uc-container-infinit-scroll').addClass('uc-container').removeClass('uc-container-infinit-scroll');
			jQuery('.icon-eye-infinit-scroll').addClass('icon-eye').removeClass('icon-eye-infinit-scroll');
			jQuery('.icon-cancel-infinit-scroll').addClass('icon-cancel').removeClass('icon-cancel-infinit-scroll');
			jQuery('.audio-isa').removeClass('audio-isa');
		});
});