/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
jQuery(document).ready(function( $ ){
	var bg = '<span class="cust_bg_opt_btn"><i class="fs-icon-cog"></i> Options</span>',
		adv = '<span class="cust_more_opt_btn"><i class="fs-icon-cog"></i> More Options</span>';
	/*Background Options*/	
   $('.bg_carry').each(function () {
		$(this).prepend(bg).prevAll('li').slice(0,3).addClass('bg_hide');	
	});
	$('.cust_bg_opt_btn').click(function() {
		$(this).closest('.bg_carry').prevAll('li').slice(0,3).toggleClass('bg_hide');
	});
	/*Advance Options*/	
   $('.adv_options').each(function () {
		var amount = $(this).data('amount');
		$(this).nextAll('li').slice(0,amount).addClass('advance_options');	
	});
	$('.cust_more_opt_btn').click(function() {
		$('.bg_carry').each(function () {$(this).prepend(bg);});
		var amount = $(this).closest('li').data('amount');
		$(this).closest('li').nextAll('li').slice(0,amount).toggleClass('advance_options');
	});
	/*Check Box*/
	$('.fro_checkbox_option input').each(function(){
		var amount = $(this).closest('li').data('amount');
		if(!$(this).is(':checked')){
			$(this).closest('li').nextAll('li').slice(0,amount).addClass('checkbox_hide');
		}
	});
	$('.fro_checkbox_option input').click(function(){
		var amount = $(this).closest('li').data('amount');
		if ($(this).closest('li').nextAll('li').slice(0,amount).hasClass('checkbox_hide')) {
			$(this).closest('li').nextAll('li').slice(0,amount).removeClass('checkbox_hide');
		} else {
			$(this).closest('li').nextAll('li').slice(0,amount).addClass('checkbox_hide');
		}
	});
	/*Select hide below*/
   $('.fro_select_option').each(function () {
        var option = $('option:selected', this),
			hclass = '.'+option.attr('data-class');
           $(hclass).removeClass('select_hide');
    });
    $('.fro_select_option').change(function () {
        var option = $('option:selected', this),
			hclass = '.'+option.attr('data-class');
			$('.'+$(this).attr('data-sclass')).addClass('select_hide');
			$(hclass).removeClass('select_hide');
    });
	/*Frozr color picker control*/
   $('.color-picker-fro').each(function () {
		var control = $(this);
		control.wpColorPicker({
			change: function() {
				var key = control.attr('data-customize-setting-link');
				wp.customize(key, function(to) {
					to.set( control.wpColorPicker('color') );
				});
			}
		});
    });
	/*Typography*/
	$('.cust_typo_opt_btn').click(function() {
		$(this).nextAll('label').slice(0,2).toggleClass('typo_hide');
	});

} )( jQuery );

/*Radio Image Select*/
function frozr_radio_img_select(relid, labelclass) {
	jQuery(this).prev('input[type="radio"]').prop('checked');
	jQuery('.fro_radio_img_' + labelclass).removeClass('fro-radio-img-selected');
	jQuery('label[for="' + relid + '"]').addClass('fro-radio-img-selected');
}
