/**
 * Scripts for the bbpress only
 *
 * @package Frozr
 * @subpackage FrozrScript
 */
	jQuery.noConflict();
	jQuery(document).on( "pagebeforecreate", function() {
		//this is to remove the page h1 from bbpress pages.
		jQuery('.bbp-topic-wrapper h1.entry-title, .bbp-forum-content h1.entry-title').remove();
		//if user can use bb-codes add toggle effect.
		jQuery('.content-codes').hide();
	});
    jQuery(document).on( "pagecreate", function(){
		
		//if user can use bb-codes add toggle effect.
		jQuery('.bb-codes').click(function(){
			jQuery('.content-codes').slideToggle();
		});
	});