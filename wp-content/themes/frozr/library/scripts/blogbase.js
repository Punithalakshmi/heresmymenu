/**
 * Scripts for the blog page only
 *
 * @package Frozr
 * @subpackage FrozrScript
 */
	jQuery.noConflict();
	jQuery(document).ready(function(){
		//this will insure that the audio player plugin will work fine in infinitscroll.js loaded posts.
		jQuery('#nav-below').click(function(){
			jQuery('.audio-isa').removeClass('audio-isa');
		});
	});
	
