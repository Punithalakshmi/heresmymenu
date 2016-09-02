/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {
	wp.customize( 'blogname', function( value ) {value.bind( function( to ) {$( '#blog-title a' ).text( to );});});
	wp.customize( 'blogdescription', function( value ) {value.bind( function( to ) {$( '#blog-description' ).text( to );});});
	wp.customize( 'main_bg_color', function( value ) {value.bind( function( to ) {$('body > .ui-page, .ui-panel-wrapper').css('background-color', to );});});
	wp.customize( 'main_bg_image', function( value ) {value.bind( function( to ) {$('body > .ui-page, .ui-panel-wrapper').css('background-image', 'url('+to+')' );});});
	wp.customize( 'main_bg_repeat', function( value ) {value.bind( function( to ) {$('body > .ui-page, .ui-panel-wrapper').css('background-repeat', to );});});
	wp.customize( 'main_bg_position', function( value ) {value.bind( function( to ) {$('body > .ui-page, .ui-panel-wrapper').css('background-position', to );});});
	wp.customize( 'main_bg_attchment', function( value ) {value.bind( function( to ) {$('body > .ui-page, .ui-panel-wrapper').css('background-attachment', to );});});
	wp.customize( 'site_logo', function( value ) {value.bind( function( to ) {$('#blog-title img').attr('src', to );});});
	wp.customize( 'logo_border', function( value ) {value.bind( function( to ) {
		if (to == false) {
		$('#masthead').css('border', 'none' );
		} else {
		$('#masthead').css('border', '' );			
	}});});
	wp.customize( 'logo_width', function( value ) {value.bind( function( to ) {$('#branding').css('width', to+'em' );});});
	wp.customize( 'logo_align', function( value ) {value.bind( function( to ) {$('#branding').css('text-align', to );});});
	wp.customize( 'logo_ty_color', function( value ) {value.bind( function( to ) {$('#blog-title a').css('color', to );});});
	wp.customize( 'tagline_ty_color', function( value ) {value.bind( function( to ) {$('#blog-description').css('color', to );});});
	wp.customize( 'top_user_menu_links_select', function( value ) {value.bind( function( to ) {
		if (to == '1') {
		if ($('.usr_cust_menu_5').length) { $('.usr_cust_menu_5').hide(); }
		if ($('.usr_cust_menu_4').length) { $('.usr_cust_menu_4').hide(); }
		if ($('.usr_cust_menu_3').length) { $('.usr_cust_menu_3').hide(); }
		if ($('.usr_cust_menu_2').length) { $('.usr_cust_menu_2').hide(); }
		if (!$('.usr_cust_menu_1').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_1" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_1').show(); }
		} else if (to == '2') {
		if ($('.usr_cust_menu_5').length) { $('.usr_cust_menu_5').hide(); }
		if ($('.usr_cust_menu_4').length) { $('.usr_cust_menu_4').hide(); }
		if ($('.usr_cust_menu_3').length) { $('.usr_cust_menu_3').hide(); }
		if (!$('.usr_cust_menu_1').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_1" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_1').show(); }
		if (!$('.usr_cust_menu_2').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_2" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_2').show(); }
		} else if (to == '3') {
		if ($('.usr_cust_menu_5').length) { $('.usr_cust_menu_5').hide(); }
		if ($('.usr_cust_menu_4').length) { $('.usr_cust_menu_4').hide(); }
		if (!$('.usr_cust_menu_1').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_1" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_1').show(); }
		if (!$('.usr_cust_menu_2').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_2" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_2').show(); }
		if (!$('.usr_cust_menu_3').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_3" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_3').show(); }
		} else if (to == '4') {
		if ($('.usr_cust_menu_5').length) { $('.usr_cust_menu_5').hide(); }
		if (!$('.usr_cust_menu_1').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_1" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_1').show(); }
		if (!$('.usr_cust_menu_2').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_2" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_2').show(); }
		if (!$('.usr_cust_menu_3').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_3" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_3').show(); }
		if (!$('.usr_cust_menu_4').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_4" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_4').show(); }
		} else if (to == '5') {
		if (!$('.usr_cust_menu_1').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_1" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_1').show(); }
		if (!$('.usr_cust_menu_2').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_2" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_2').show(); }
		if (!$('.usr_cust_menu_3').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_3" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_3').show(); }
		if (!$('.usr_cust_menu_4').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_4" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_4').show(); }
		if (!$('.usr_cust_menu_5').length) { $('.user_top_menu_footer').prepend('<a class="usr_cust_menu_5" title="Example: Logout!" href="#" data-ajax="false"><i></i></a>'); } else { $('.usr_cust_menu_5').show(); }
		} else {
			$('.usr_cust_menu_1,.usr_cust_menu_2,.usr_cust_menu_3,.usr_cust_menu_4,.usr_cust_menu_5').hide();
	}});});
	wp.customize( 'top_user_menu_link_icon_1', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_1 i').attr('class', to);});});
	wp.customize( 'top_user_menu_link_title_1', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_1').attr('title', to);});});
	wp.customize( 'top_user_menu_link_path_1', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_1').attr('href', to);});});
	wp.customize( 'top_user_menu_link_color_1', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_1').css('background-color', to);});});
	wp.customize( 'top_user_menu_link_icon_color_1', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_1').css('color', to);});});
	wp.customize( 'top_user_menu_link_icon_2', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_2 i').attr('class', to);});});
	wp.customize( 'top_user_menu_link_title_2', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_2').attr('title', to);});});
	wp.customize( 'top_user_menu_link_path_2', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_2').attr('href', to);});});
	wp.customize( 'top_user_menu_link_color_2', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_2').css('background-color', to);});});
	wp.customize( 'top_user_menu_link_icon_color_2', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_2').css('color', to);});});
	wp.customize( 'top_user_menu_link_icon_3', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_3 i').attr('class', to);});});
	wp.customize( 'top_user_menu_link_title_3', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_3').attr('title', to);});});
	wp.customize( 'top_user_menu_link_path_3', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_3').attr('href', to);});});
	wp.customize( 'top_user_menu_link_color_3', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_3').css('background-color', to);});});
	wp.customize( 'top_user_menu_link_icon_color_3', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_3').css('color', to);});});
	wp.customize( 'top_user_menu_link_icon_4', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_4 i').attr('class', to);});});
	wp.customize( 'top_user_menu_link_title_4', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_4').attr('title', to);});});
	wp.customize( 'top_user_menu_link_path_4', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_4').attr('href', to);});});
	wp.customize( 'top_user_menu_link_color_4', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_4').css('background-color', to);});});
	wp.customize( 'top_user_menu_link_icon_color_4', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_4').css('color', to);});});
	wp.customize( 'top_user_menu_link_icon_5', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_5 i').attr('class', to);});});
	wp.customize( 'top_user_menu_link_title_5', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_5').attr('title', to);});});
	wp.customize( 'top_user_menu_link_path_5', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_5').attr('href', to);});});
	wp.customize( 'top_user_menu_link_color_5', function( value ) {value.bind( function( to ) {$('.usr_cust_menu_5').css('background-color', to);});});
	wp.customize( 'show_main_menu', function( value ) {value.bind( function( to ) {
		if (to == true) {
			$('#mobi_menu').show();
		} else {
			$('#mobi_menu').hide();
	}});});
	wp.customize( 'main_main_icon', function( value ) {value.bind( function( to ) {$('#mobi_menu i').attr('class', to);});});
	wp.customize( 'main_icon_layout', function( value ) {value.bind( function( to ) {
		if (to == 'cir') {
		$('#mobi_menu').css('border-radius', '50%');
		} else {
		$('#mobi_menu').css('border-radius', '0');
	}});});
	wp.customize( 'header_height', function( value ) {value.bind( function( to ) {$('#header-container').css('padding', to+'em 0 '+to+'em 0');});});
	wp.customize( 'header_search_layout', function( value ) {value.bind( function( to ) {
		if (to == 'cir') {
		$('#search-home .searchbox-input').css('border-radius', '50%');
		} else {
		$('#search-home .searchbox-input').css('border-radius', '0');
	}});});
	wp.customize( 'header_image', function( value ) {value.bind( function( to ) {$('#header-container').css('background-image', 'url('+to+')');});});
	wp.customize( 'social_link_one', function( value ) {value.bind( function( to ) {$('.foot_link_one').attr('href', to);});});
	wp.customize( 'social_link_one_icon', function( value ) {value.bind( function( to ) {$('.foot_link_one').css('background-image', 'url('+to+')');});});
	wp.customize( 'social_link_two', function( value ) {value.bind( function( to ) {$('.foot_link_two').attr('href', to);});});
	wp.customize( 'social_link_two_icon', function( value ) {value.bind( function( to ) {$('.foot_link_two').css('background-image', 'url('+to+')');});});
	wp.customize( 'social_link_three', function( value ) {value.bind( function( to ) {$('.foot_link_three').attr('href', to);});});
	wp.customize( 'social_link_three_icon', function( value ) {value.bind( function( to ) {$('.foot_link_three').css('background-image', 'url('+to+')');});});
	wp.customize( 'social_link_four', function( value ) {value.bind( function( to ) {$('.foot_link_four').attr('href', to);});});
	wp.customize( 'social_link_four_icon', function( value ) {value.bind( function( to ) {$('.foot_link_four').css('background-image', 'url('+to+')');});});
	wp.customize( 'wel_msg_cont', function( value ) {value.bind( function( to ) {$('.wel_msg_content').text(to);});});
	wp.customize( 'wel_msg_title', function( value ) {value.bind( function( to ) {$('.wel_msg_title').text(to);});});
	wp.customize( 'wel_msg_btn_txt_1', function( value ) {value.bind( function( to ) {$('#wel_msg_button_1 a').text(to);});});
	wp.customize( 'wel_msg_btn_1', function( value ) {value.bind( function( to ) {$('#wel_msg_button_1 a').attr('href', to);});});
	wp.customize( 'wel_btn_icon_1', function( value ) {value.bind( function( to ) {$('#wel_msg_button_1 i').attr('class', to);});});
	wp.customize( 'wel_btn_style_1', function( value ) {value.bind( function( to ) {
		if (to == 'wlrnd') {
		$('#wel_msg_button_1').attr('class', 'wel_msg_button wlrnd ui-btn ui-shadow ui-corner-all');
		} else if(to == 'wlcir') {
		$('#wel_msg_button_1').attr('class', 'wel_msg_button wlcir ui-btn ui-shadow ui-corner-all');
	} else {
		$('#wel_msg_button_1').attr('class', 'wel_msg_button wlbox ui-btn ui-shadow ui-corner-all');
	}
	});});
	wp.customize( 'wel_msg_btn_txt_2', function( value ) {value.bind( function( to ) {$('#wel_msg_button_2 a').text(to);});});
	wp.customize( 'wel_msg_btn_2', function( value ) {value.bind( function( to ) {$('#wel_msg_button_2 a').attr('href', to);});});
	wp.customize( 'wel_btn_icon_2', function( value ) {value.bind( function( to ) {$('#wel_msg_button_2 i').attr('class', to);});});
	wp.customize( 'wel_btn_style_2', function( value ) {value.bind( function( to ) {
		if (to == 'wlrnd') {
		$('#wel_msg_button_2').attr('class', 'wel_msg_button wlrnd ui-btn ui-shadow ui-corner-all');
		} else if(to == 'wlcir') {
		$('#wel_msg_button_2').attr('class', 'wel_msg_button wlcir ui-btn ui-shadow ui-corner-all');
	} else {
		$('#wel_msg_button_2').attr('class', 'wel_msg_button wlbox ui-btn ui-shadow ui-corner-all');
	}
	});});
	wp.customize( 'wel_msg_bg_color', function( value ) {value.bind( function( to ) {$('.welcome_msg').css('background-color', to);});});
	wp.customize( 'wel_msg_bg_image', function( value ) {value.bind( function( to ) {$('.welcome_msg').css('background-image', 'url("'+to+'")');});});
	wp.customize( 'wel_msg_bg_position', function( value ) {value.bind( function( to ) {$('.welcome_msg').css('background-position', to);});});
	wp.customize( 'wel_msg_bg_repeat', function( value ) {value.bind( function( to ) {$('.welcome_msg').css('background-repeat', to);});});
	wp.customize( 'wel_msg_bg_attchment', function( value ) {value.bind( function( to ) {$('.welcome_msg').css('background-attachment', to);});});
	wp.customize( 'wel_msg_text_color', function( value ) {value.bind( function( to ) {$('.welcome_msg *, .welcome_msg a').css('color', to);});});
	wp.customize( 'wel_height', function( value ) {value.bind( function( to ) {$('.welcome_msg').css('padding', to+'em 0');});});
	wp.customize( 'featured_post_title', function( value ) {value.bind( function( to ) {$('.featured-cat-des span').text(to);});});
	wp.customize( 'featured_post_desc', function( value ) {value.bind( function( to ) {$('.featured_posts_desc span').text(to);});});
	wp.customize( 'featured_title_icon', function( value ) {value.bind( function( to ) {$('.featured-cat-des i').attr('class', to);});});
	wp.customize( 'featured_border', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('.featured_post_cont').css('border-top', '0.1em solid rgba(0,0,0,0.2)');
		} else {
		$('.featured_post_cont').css('border-top', 'none');
	}});});
	wp.customize( 'featured_posts_border', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('#featured_post').css('box-shadow', '0 0 0px 20px rgba(0,0,0,0.2)');
		} else {
		$('#featured_post').css('box-shadow', 'none');
	}});});
	wp.customize( 'post_title_1', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_1 .st-posts-title-home span').text(to);});});
	wp.customize( 'post_desc_1', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_1 .st-description-home span').text(to);});});
	wp.customize( 'loop_bg_color_1', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_1').css('background-color',to);});});
	wp.customize( 'loop_bg_image_1', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_1').css('background-image',to);});});
	wp.customize( 'loop_bg_repeat_1', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_1').css('background-repeat',to);});});
	wp.customize( 'loop_bg_position_1', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_1').css('background-position',to);});});
	wp.customize( 'loop_bg_attchment_1', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_1').css('background-attachment',to);});});
	wp.customize( 'loop_border_1', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('#st_posts_wrapper_1').css('border-top', '0.1em solid rgba(0,0,0,0.1)');
		} else {
		$('#st_posts_wrapper_1').css('border-top', 'none');
	}});});
	wp.customize( 'loop_icon_1', function( value ) {value.bind( function( to ) {
		if ($('#st_posts_wrapper_1 .st-posts-title-home').has('i')) { 
			$('#st_posts_wrapper_1 .st-posts-title-home i').attr('class',to);
		} else if ($('#st_posts_wrapper_1 .right_hand_st').length  > 0) {
			$('#st_posts_wrapper_1 .right_hand_st').append('<i class="'+to+'"></i>');
		} else {
			$('#st_posts_wrapper_1 .st-posts-title-home').prepend('<i class="'+to+'"></i>');
	}});});
	wp.customize( 'loop_title_ty_color_2', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_2 .st-posts-title-home').css('color',to);});});
	wp.customize( 'loop_desc_ty_color_2', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_2 .st-description-home *, #st_posts_wrapper_2 .st-description-home * a').css('color',to);});});
	wp.customize( 'loop_ptitle_ty_color_2', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_2 .st-body-home article .st_entry_title').css('color',to);});});
	wp.customize( 'loop_pexcerptm_ty_color_2', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_2 .st_entry_summary p, #st_posts_wrapper_2 .st_entry_summary p a, #st_posts_wrapper_2 .st-body-home article footer, #st_posts_wrapper_2 .st-body-home article footer a, #st_posts_wrapper_2 .st-body-home article footer a span').css('color',to);});});
	wp.customize( 'post_title_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3 .st-posts-title-home span').text(to);});});
	wp.customize( 'post_desc_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3 .st-description-home span').text(to);});});
	wp.customize( 'loop_bg_color_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3').css('background-color',to);});});
	wp.customize( 'loop_bg_image_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3').css('background-image',to);});});
	wp.customize( 'loop_bg_repeat_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3').css('background-repeat',to);});});
	wp.customize( 'loop_bg_position_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3').css('background-position',to);});});
	wp.customize( 'loop_bg_attchment_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3').css('background-attachment',to);});});
	wp.customize( 'loop_border_3', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('#st_posts_wrapper_3').css('border-top', '0.1em solid rgba(0,0,0,0.1)');
		} else {
		$('#st_posts_wrapper_3').css('border-top', 'none');
	}});});
	wp.customize( 'loop_icon_3', function( value ) {value.bind( function( to ) {
		if ($('#st_posts_wrapper_3 .st-posts-title-home').has('i')) { 
			$('#st_posts_wrapper_3 .st-posts-title-home i').attr('class',to);
		} else if ($('#st_posts_wrapper_3 .right_hand_st').length  > 0) {
			$('#st_posts_wrapper_3 .right_hand_st').append('<i class="'+to+'"></i>');
		} else {
			$('#st_posts_wrapper_3 .st-posts-title-home').prepend('<i class="'+to+'"></i>');
	}});});
	wp.customize( 'loop_title_ty_color_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3 .st-posts-title-home').css('color',to);});});
	wp.customize( 'loop_desc_ty_color_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3 .st-description-home *, #st_posts_wrapper_3 .st-description-home * a').css('color',to);});});
	wp.customize( 'loop_ptitle_ty_color_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3 .st-body-home article .st_entry_title').css('color',to);});});
	wp.customize( 'loop_pexcerptm_ty_color_3', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_3 .st_entry_summary p, #st_posts_wrapper_3 .st_entry_summary p a, #st_posts_wrapper_3 .st-body-home article footer, #st_posts_wrapper_3 .st-body-home article footer a, #st_posts_wrapper_3 .st-body-home article footer a span').css('color',to);});});
	wp.customize( 'post_title_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4 .st-posts-title-home span').text(to);});});
	wp.customize( 'post_desc_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4 .st-description-home span').text(to);});});
	wp.customize( 'loop_bg_color_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4').css('background-color',to);});});
	wp.customize( 'loop_bg_image_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4').css('background-image',to);});});
	wp.customize( 'loop_bg_repeat_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4').css('background-repeat',to);});});
	wp.customize( 'loop_bg_position_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4').css('background-position',to);});});
	wp.customize( 'loop_bg_attchment_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4').css('background-attachment',to);});});
	wp.customize( 'loop_border_4', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('#st_posts_wrapper_4').css('border-top', '0.1em solid rgba(0,0,0,0.1)');
		} else {
		$('#st_posts_wrapper_4').css('border-top', 'none');
	}});});
	wp.customize( 'loop_icon_4', function( value ) {value.bind( function( to ) {
		if ($('#st_posts_wrapper_4 .st-posts-title-home').has('i')) { 
			$('#st_posts_wrapper_4 .st-posts-title-home i').attr('class',to);
		} else if ($('#st_posts_wrapper_4 .right_hand_st').length  > 0) {
			$('#st_posts_wrapper_4 .right_hand_st').append('<i class="'+to+'"></i>');
		} else {
			$('#st_posts_wrapper_4 .st-posts-title-home').prepend('<i class="'+to+'"></i>');
	}});});
	wp.customize( 'loop_title_ty_color_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4 .st-posts-title-home').css('color',to);});});
	wp.customize( 'loop_desc_ty_color_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4 .st-description-home *, #st_posts_wrapper_4 .st-description-home * a').css('color',to);});});
	wp.customize( 'loop_ptitle_ty_color_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4 .st-body-home article .st_entry_title').css('color',to);});});
	wp.customize( 'loop_pexcerptm_ty_color_4', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_4 .st_entry_summary p, #st_posts_wrapper_4 .st_entry_summary p a, #st_posts_wrapper_4 .st-body-home article footer, #st_posts_wrapper_4 .st-body-home article footer a, #st_posts_wrapper_4 .st-body-home article footer a span').css('color',to);});});
	wp.customize( 'post_title_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5 .st-posts-title-home span').text(to);});});
	wp.customize( 'post_desc_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5 .st-description-home span').text(to);});});
	wp.customize( 'loop_bg_color_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5').css('background-color',to);});});
	wp.customize( 'loop_bg_image_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5').css('background-image',to);});});
	wp.customize( 'loop_bg_repeat_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5').css('background-repeat',to);});});
	wp.customize( 'loop_bg_position_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5').css('background-position',to);});});
	wp.customize( 'loop_bg_attchment_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5').css('background-attachment',to);});});
	wp.customize( 'loop_border_5', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('#st_posts_wrapper_5').css('border-top', '0.1em solid rgba(0,0,0,0.1)');
		} else {
		$('#st_posts_wrapper_5').css('border-top', 'none');
	}});});
	wp.customize( 'loop_icon_5', function( value ) {value.bind( function( to ) {
		if ($('#st_posts_wrapper_5 .st-posts-title-home').has('i')) { 
			$('#st_posts_wrapper_5 .st-posts-title-home i').attr('class',to);
		} else if ($('#st_posts_wrapper_5 .right_hand_st').length  > 0) {
			$('#st_posts_wrapper_5 .right_hand_st').append('<i class="'+to+'"></i>');
		} else {
			$('#st_posts_wrapper_5 .st-posts-title-home').prepend('<i class="'+to+'"></i>');
	}});});
	wp.customize( 'loop_title_ty_color_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5 .st-posts-title-home').css('color',to);});});
	wp.customize( 'loop_desc_ty_color_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5 .st-description-home *, #st_posts_wrapper_5 .st-description-home * a').css('color',to);});});
	wp.customize( 'loop_ptitle_ty_color_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5 .st-body-home article .st_entry_title').css('color',to);});});
	wp.customize( 'loop_pexcerptm_ty_color_5', function( value ) {value.bind( function( to ) {$('#st_posts_wrapper_5 .st_entry_summary p, #st_posts_wrapper_5 .st_entry_summary p a, #st_posts_wrapper_5 .st-body-home article footer, #st_posts_wrapper_5 .st-body-home article footer a, #st_posts_wrapper_5 .st-body-home article footer a span').css('color',to);});});
	wp.customize( 'product_add_link', function( value ) {value.bind( function( to ) {$('.product_adds a').arrt('href',to);});});
	wp.customize( 'product_add_title', function( value ) {value.bind( function( to ) {$('.product_adds a').arrt('title',to);$('.product_adds img').arrt('alt',to);});});
	wp.customize( 'bbp_notice_color_1', function( value ) {value.bind( function( to ) {$('.forum-announcements-box .forum_announcement_one').css('background-color',to);});});
	wp.customize( 'bbp_notice_icon_1', function( value ) {value.bind( function( to ) {$('.forum-announcements-box .forum_announcement_one').attr('class',to+' forum_announcement_one');});});
	wp.customize( 'bbp_notice_font_color_1', function( value ) {value.bind( function( to ) {$('.forum-announcements-box .forum_announcement_one p, .forum-announcements-box .forum_announcement_one a').css('color',to);});});
	wp.customize( 'bbp_notice_color_2', function( value ) {value.bind( function( to ) {$('.forum-announcements-box .forum_announcement_two').css('background-color',to);});});
	wp.customize( 'bbp_notice_icon_2', function( value ) {value.bind( function( to ) {$('.forum-announcements-box .forum_announcement_two').attr('class',to+' forum_announcement_two');});});
	wp.customize( 'bbp_notice_font_color_2', function( value ) {value.bind( function( to ) {$('.forum-announcements-box .forum_announcement_two p, .forum-announcements-box .forum_announcement_two a').css('color',to);});});
	wp.customize( 'bbp_notice_color_3', function( value ) {value.bind( function( to ) {$('.create-new-topic .topic_announcement_1').css('background-color',to);});});
	wp.customize( 'bbp_notice_icon_3', function( value ) {value.bind( function( to ) {$('.create-new-topic .topic_announcement_1').attr('class',to+' topic_announcement_1');});});
	wp.customize( 'bbp_notice_font_color_3', function( value ) {value.bind( function( to ) {$('.create-new-topic .topic_announcement_1 p, .create-new-topic .topic_announcement_1 a').css('color',to);});});
	wp.customize( 'bbp_notice_color_4', function( value ) {value.bind( function( to ) {$('.create-new-topic .topic_announcement_2').css('background-color',to);});});
	wp.customize( 'bbp_notice_icon_4', function( value ) {value.bind( function( to ) {$('.create-new-topic .topic_announcement_2').attr('class',to+' topic_announcement_2');});});
	wp.customize( 'bbp_notice_font_color_4', function( value ) {value.bind( function( to ) {$('.create-new-topic .topic_announcement_4 p, .create-new-topic .topic_announcement_4 a').css('color',to);});});
	wp.customize( 'froums_topics_title', function( value ) {value.bind( function( to ) {$('.bbp-forum-title-home > span').text(to);});});
	wp.customize( 'froums_topics_desc', function( value ) {value.bind( function( to ) {$('.forum-description-home span').text(to);});});
	wp.customize( 'ht_bg_color', function( value ) {value.bind( function( to ) {$('.topics-list-home').css('background-color',to);});});
	wp.customize( 'ht_bg_image', function( value ) {value.bind( function( to ) {$('.topics-list-home').css('background-image',to);});});
	wp.customize( 'ht_bg_repeat', function( value ) {value.bind( function( to ) {$('.topics-list-home').css('background-repeat',to);});});
	wp.customize( 'ht_bg_position', function( value ) {value.bind( function( to ) {$('.topics-list-home').css('background-position',to);});});
	wp.customize( 'ht_bg_attchment', function( value ) {value.bind( function( to ) {$('.topics-list-home').css('background-attachment',to);});});
	wp.customize( 'ht_border', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('.topics-list-home').css('border-top', '0.1em solid #eee');
		} else {
		$('.topics-list-home').css('border-top', 'none');
	}});});
	wp.customize( 'ht_border_color', function( value ) {value.bind( function( to ) {$('.topics-list-home').css('border-top','0.1em solid '+to);});});
	wp.customize( 'ht_icon', function( value ) {value.bind( function( to ) {
		if ($('.bbp-forum-title-home').has('i')) { 
			$('.bbp-forum-title-home i').attr('class',to);
		} else if ($('.bbp-forum-title-home.right_hand_ht').length  > 0) {
			$('.bbp-forum-title-home').append('<i class="'+to+'"></i>');
		} else {
			$('.bbp-forum-title-home').prepend('<i class="'+to+'"></i>');
	}});});
	wp.customize( 'ht_title_ty_color', function( value ) {value.bind( function( to ) {$('.bbp-forum-title-home').css('color',to);});});
	wp.customize( 'ht_desc_ty_color', function( value ) {value.bind( function( to ) {$('.forum-description-home *, .forum-description-home * a').css('color',to);});});
	wp.customize( 'ht_ptitle_ty_color', function( value ) {value.bind( function( to ) {$('.bbp-topic-permalink-home').css('color',to);});});
	wp.customize( 'ht_pexcerptm_ty_color', function( value ) {value.bind( function( to ) {$('.bbp-topic-count-home, .bbp-topic-count-home a').css('color',to);});});
	wp.customize( 'theme_style', function( value ) {value.bind( function( to ) {
			if (to == '1') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#5ed1c9');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#f6a357');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#4a515a');
			$('.welcome_msg .wel_msg_button *, .frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#eee');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#f6a357');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#26bf4d');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#4a515a');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#26bf4d');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#f6a357');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #f6a357');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #26bf4d');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '2') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#4ab64e');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#ff5433');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#3d3018');
			$('.welcome_msg .wel_msg_button *, .frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#ff5433');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#95763a');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#3d3018');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#95763a');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#ff5433');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #ff5433');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #95763a');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '3') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#473a3a');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#26bf4d');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#473a3a');
			$('.welcome_msg .wel_msg_button *, .frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#26bf4d');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#e6312d');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#473a3a');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#e6312d');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#26bf4d');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #26bf4d');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #e6312d');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '4') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#f71909');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#33d62b');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#676962');
			$('.welcome_msg .wel_msg_button *, .frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#33d62b');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#a3a59b');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#676962');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#a3a59b');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#33d62b');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #33d62b');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #a3a59b');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '5') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#696a6c');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#33d62b');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#696a6c');
			$('.welcome_msg .wel_msg_button *, .frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#33d62b');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#2286a5');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#696a6c');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#2286a5');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#33d62b');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #33d62b');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #2286a5');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '6') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#85054f');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#3c6fa8');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#1a181b');
			$('.welcome_msg .wel_msg_button *, .frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#3c6fa8');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#ebdba0');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#1a181b');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#ebdba0');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#3c6fa8');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #3c6fa8');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #ebdba0');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '7') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#2e6934');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#a0945a');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#1a181b');
			$('.welcome_msg .wel_msg_button *,.frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#a0945a');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#81ed9c');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#1a181b');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#81ed9c');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#a0945a');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #a0945a');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #81ed9c');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '8') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#34343d');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#4790c1');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#34343d');
			$('.welcome_msg .wel_msg_button *,.frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#4790c1');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#f96c13');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#34343d');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#f96c13');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#4790c1');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #4790c1');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #f96c13');	
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '9') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#5b4702');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#decd91');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#34343d');
			$('.welcome_msg .wel_msg_button *,.frotop-menu a, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#decd91');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#3f9001');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#34343d');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#3f9001');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#decd91');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #decd91');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #3f9001');
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#fff');
			} else if (to == '10') {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '#1ed760');
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '#4d4d4d');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '#34343d');
			$('.welcome_msg .wel_msg_button *,.frotop-menu a,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '#fff');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '#f7f7f7');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '#676962');
			$('a:hover,a:focus').css('color', '#1ed760');
			$('#mainpanel').css('background-color', '#fff');
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '#fafafa');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '#34343d');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color','#eee');
			$('#footer').css('background-color', '#000');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '#fafafa');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '#4d4d4d');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #4d4d4d');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #fafafa');	
			$('.usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', '#676962');
			$('.mini_cart a, .mini_cart a:focus, .mini_cart .amount, .mini_cart *').css('color', '#fff');
			} else {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', '');
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color','');
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', '');
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', '');
			$('.welcome_msg .wel_msg_button *,.frotop-menu a,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', '');
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', '');
			$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', '');
			$('a:hover,a:focus').css('color', '');
			$('#mainpanel').css('background-color', '');
			$('#wel_msg_button_1,.featured_post_cont,.fcd-c:before, .fcd-c:after, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', '');
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', '');
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color', '');
			$('#footer').css('background-color', '');
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', '');
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', '');
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 #f6a357');
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 #26bf4d');
			}
	});});
	wp.customize( 'theme_color_1', function( value ) {value.bind( function( to ) {
			$('.top-menu,.post-content-f-as, #toppanel').css('background-color', to);
			$('a:hover,a:focus').css('color', to);
	});});
	wp.customize( 'theme_color_2', function( value ) {value.bind( function( to ) {
			$('#wel_msg_button_1,.featured_post_cont, .statics-title, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('background-color', to);
			$('.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a').css('color', to);
			$('.woocommerce-message').css('box-shadow', '4px 4px 0 0 '+to);
	});});
	wp.customize( 'theme_color_3', function( value ) {value.bind( function( to ) {
			$('.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg').css('color', to);
			$('.welcome_msg .wel_msg_button *,.frotop-menu a,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus, .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a').css('color', to);
			$('#mainpanel').css('background-color', to);
	});});
	wp.customize( 'theme_color_4', function( value ) {value.bind( function( to ) {
			$('#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del').css('background-color', to);
			$('.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code').css('color', to);
			$('.woocommerce-error').css('box-shadow', '4px 4px 0 0 '+to);
	});});
	wp.customize( 'theme_color_5', function( value ) {value.bind( function( to ) {
			$('body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input').css('color', to);
			$('.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a').css('background-color', to);
	});});
	wp.customize( 'theme_color_6', function( value ) {value.bind( function( to ) {
			$('#header-container,input,.post-entry-utility,.full_width_page_meta').css('background-color', to);
			$('.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover').css('color', to);
	});});
	wp.customize( 'theme_color_7', function( value ) {value.bind( function( to ) {$('.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before').css('color', to);});});
	wp.customize( 'theme_color_8', function( value ) {value.bind( function( to ) {$('#footer').css('background-color', to);});});
	wp.customize( 'footer_layout', function( value ) {value.bind( function( to ) {
		if (to == '2') {
			$('.top-links a').css('display', 'inline-block');
			$('.copyright, .top-links').css({'display':'block','width':'100%'});
			$('.top-links').css('margin', '0 0 10px 0');
		} else {
			$('.copyright').css({'float':'left','margin-left':'10px','max-width':'50%','text-align':'left'});
			$('.top-links').css({'float':'right','padding':'0 90px 10px 0','width':'30%'});
			$('.top-links a').css('float', 'right');
		}
		});});
	wp.customize( 'footer_text', function( value ) {value.bind( function( to ) {$('.copyright').text(to);});});
	wp.customize( 'team_title', function( value ) {value.bind( function( to ) {$( '#team_member_section .st-posts-title-home span' ).text( to );});});
	wp.customize( 'team_desc', function( value ) {value.bind( function( to ) {$( '#team_member_section .st-description-home span' ).text( to );});});
	wp.customize( 'team_link', function( value ) {value.bind( function( to ) {$('#team_member_section .st-home-readmore a').attr('href', to);});});
	wp.customize( 'msection_bg_color', function( value ) {value.bind( function( to ) {$('#team_member_section, .ui-page .mem_panel_details').css('background-color',to);});});
	wp.customize( 'msection_bg_image', function( value ) {value.bind( function( to ) {$('#team_member_section').attr('style','background-image'+to);});});
	wp.customize( 'msection_bg_repeat', function( value ) {value.bind( function( to ) {$('#team_member_section').css('background-repeat',to);});});
	wp.customize( 'msection_bg_position', function( value ) {value.bind( function( to ) {$('#team_member_section').css('background-position',to);});});
	wp.customize( 'msection_bg_attachment', function( value ) {value.bind( function( to ) {$('#team_member_section').css('background-attachment',to);});});
	wp.customize( 'msection_border', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('#team_member_section').css('border-top', '0.1em solid rgba(0,0,0,0.1)');
		} else {
		$('#team_member_section').css('border-top', 'none');
	}});});
	wp.customize( 'msection_icon', function( value ) {value.bind( function( to ) {
		if ($('#team_member_section .st-posts-title-home').has('i')) { 
			$('#team_member_section .st-posts-title-home i').attr('class',to);
		} else if ($('#team_member_section .right_hand_st').length  > 0) {
			$('#team_member_section .right_hand_st').append('<i class="'+to+'"></i>');
		} else {
			$('#team_member_section .st-posts-title-home').prepend('<i class="'+to+'"></i>');
	}});});
	wp.customize( 'msection_ty_color', function( value ) {value.bind( function( to ) {$('#team_member_section .st-posts-title-home *, .ui-page .mem_panel .ui-panel-inner *').css('color',to);});});
	wp.customize( 'tm_sml_img_1', function( value ) {value.bind( function( to ) {$('#member-1 .st-thumbnail').css('background-image',to);});});
	wp.customize( 'tm_lrg_img_1', function( value ) {value.bind( function( to ) {$('.one_mem, .ui-page #mpanel_1 .panel_breaker').css('background-image',to);});});
	wp.customize( 'tm_m_name_1', function( value ) {value.bind( function( to ) {$('#member-1 .st_entry_title, .ui-page #mpanel_1 .mem_panel_details > h2').text(to);});});
	wp.customize( 'tm_m_position_1', function( value ) {value.bind( function( to ) {$('#member-1 .st_entry_summary > p:not(.mem_bio_text)').text(to);});});
	wp.customize( 'tm_m_bio_1', function( value ) {value.bind( function( to ) {$('.mem_bio_text, .ui-page #mpanel_1 .mem_panel_details > p').text(to);});});
	wp.customize( 'tm_m_face_1', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_1 .mfs, #member-1 .mfs').attr('href',to);});});
	wp.customize( 'tm_m_twet_1', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_1 .mtw, #member-1 .mtw').attr('href',to);});});
	wp.customize( 'tm_m_inst_1', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_1 .mins, #member-1 .mins').attr('href',to);});});
	wp.customize( 'tm_m_youtube_1', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_1 .myou, #member-1 .myou').attr('href',to);});});
	wp.customize( 'tm_sml_img_2', function( value ) {value.bind( function( to ) {$('#member-2 .st-thumbnail').css('background-image',to);});});
	wp.customize( 'tm_lrg_img_2', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_2 .panel_breaker').css('background-image',to);});});
	wp.customize( 'tm_m_name_2', function( value ) {value.bind( function( to ) {$('#member-2 .st_entry_title, .ui-page #mpanel_2 .mem_panel_details > h2').text(to);});});
	wp.customize( 'tm_m_position_2', function( value ) {value.bind( function( to ) {$('#member-2 .st_entry_summary > p').text(to);});});
	wp.customize( 'tm_m_bio_2', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_2 .mem_panel_details > p').text(to);});});
	wp.customize( 'tm_m_face_2', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_2 .mfs').attr('href',to);});});
	wp.customize( 'tm_m_twet_2', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_2 .mtw').attr('href',to);});});
	wp.customize( 'tm_m_inst_2', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_2 .mins').attr('href',to);});});
	wp.customize( 'tm_m_youtube_2', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_2 .myou').attr('href',to);});});
	wp.customize( 'tm_sml_img_3', function( value ) {value.bind( function( to ) {$('#member-3 .st-thumbnail').css('background-image',to);});});
	wp.customize( 'tm_lrg_img_3', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_3 .panel_breaker').css('background-image',to);});});
	wp.customize( 'tm_m_name_3', function( value ) {value.bind( function( to ) {$('#member-3 .st_entry_title, .ui-page #mpanel_3 .mem_panel_details > h2').text(to);});});
	wp.customize( 'tm_m_position_3', function( value ) {value.bind( function( to ) {$('#member-3 .st_entry_summary > p').text(to);});});
	wp.customize( 'tm_m_bio_3', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_3 .mem_panel_details > p').text(to);});});
	wp.customize( 'tm_m_face_3', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_3 .mfs').attr('href',to);});});
	wp.customize( 'tm_m_twet_3', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_3 .mtw').attr('href',to);});});
	wp.customize( 'tm_m_inst_3', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_3 .mins').attr('href',to);});});
	wp.customize( 'tm_m_youtube_3', function( value ) {value.bind( function( to ) {$('.ui-page #mpanel_3 .myou').attr('href',to);});});
	
	wp.customize( 'ig_title', function( value ) {value.bind( function( to ) {$( '.img_grd_wrapper .st-posts-title-home span' ).text( to );});});
	wp.customize( 'ig_desc', function( value ) {value.bind( function( to ) {$( '.img_grd_wrapper .st-description-home span' ).text( to );});});
	wp.customize( 'ig_link', function( value ) {value.bind( function( to ) {$('.img_grd_wrapper .st-home-readmore a').attr('href', to);});});
	wp.customize( 'ig_bg_color', function( value ) {value.bind( function( to ) {$('.img_grd_wrapper').css('background-color',to);});});
	wp.customize( 'ig_bg_image', function( value ) {value.bind( function( to ) {$('.img_grd_wrapper').attr('style','background-image'+to);});});
	wp.customize( 'ig_bg_repeat', function( value ) {value.bind( function( to ) {$('.img_grd_wrapper').css('background-repeat',to);});});
	wp.customize( 'ig_bg_position', function( value ) {value.bind( function( to ) {$('.img_grd_wrapper').css('background-position',to);});});
	wp.customize( 'ig_bg_attachment', function( value ) {value.bind( function( to ) {$('.img_grd_wrapper').css('background-attachment',to);});});
	wp.customize( 'ig_border', function( value ) {value.bind( function( to ) {
		if (to == true) {
		$('.img_grd_wrapper').css('border-top', '0.1em solid rgba(0,0,0,0.1)');
		} else {
		$('.img_grd_wrapper').css('border-top', 'none');
	}});});
	wp.customize( 'ig_icon', function( value ) {value.bind( function( to ) {
		if ($('.img_grd_wrapper .st-posts-title-home').has('i')) { 
			$('.img_grd_wrapper .st-posts-title-home i').attr('class',to);
		} else if ($('.img_grd_wrapper .right_hand_st').length  > 0) {
			$('.img_grd_wrapper .right_hand_st').append('<i class="'+to+'"></i>');
		} else {
			$('.img_grd_wrapper .st-posts-title-home').prepend('<i class="'+to+'"></i>');
	}});});
	wp.customize( 'ig_ty_color', function( value ) {value.bind( function( to ) {$('.img_grd_wrapper .st-posts-title-home *').css('color',to);});});
	wp.customize( 'ig_img_1_desc', function( value ) {value.bind( function( to ) {$('.ig_img_1').attr('href',to);});});
	wp.customize( 'ig_img_2_desc', function( value ) {value.bind( function( to ) {$('.ig_img_2').attr('href',to);});});
	wp.customize( 'ig_img_3_desc', function( value ) {value.bind( function( to ) {$('.ig_img_3').attr('href',to);});});
	wp.customize( 'ig_img_4_desc', function( value ) {value.bind( function( to ) {$('.ig_img_4').attr('href',to);});});
	wp.customize( 'ig_img_5_desc', function( value ) {value.bind( function( to ) {$('.ig_img_5').attr('href',to);});});
	wp.customize( 'ig_img_6_desc', function( value ) {value.bind( function( to ) {$('.ig_img_6').attr('href',to);});});
	
	//LazyEater
	wp.customize( 'rads_bg_color', function( value ) {value.bind( function( to ) {$('div#resturants_search_box').css('background-color', to );});});
	wp.customize( 'rads_bg_image', function( value ) {value.bind( function( to ) {$('div#resturants_search_box').css('background-image', 'url('+to+')' );});});
	wp.customize( 'rads_bg_repeat', function( value ) {value.bind( function( to ) {$('div#resturants_search_box').css('background-repeat', to );});});
	wp.customize( 'rads_bg_position', function( value ) {value.bind( function( to ) {$('div#resturants_search_box').css('background-position', to );});});
	wp.customize( 'rads_bg_attchment', function( value ) {value.bind( function( to ) {$('div#resturants_search_box').css('background-attachment', to );});});
	wp.customize( 'rest_adv_search_title', function( value ) {value.bind( function( to ) {$('.hom_src_main_title span').text(to);});});
	wp.customize( 'rest_adv_search_loc_title', function( value ) {value.bind( function( to ) {$('.hom_src_loc_title span').text(to);});});
	wp.customize( 'rest_adv_search_loc_desc', function( value ) {value.bind( function( to ) {$('.loc_inst').text(to);});});
	wp.customize( 'rest_adv_search_by_cusine_title', function( value ) {value.bind( function( to ) {$('.hom_src_cuisine_title span').text(to);});});
	wp.customize( 'rest_adv_search_by_location_title', function( value ) {value.bind( function( to ) {$('.hom_src_loc_filter_title span').text(to);});});
	wp.customize( 'rest_adv_search_loc_btn', function( value ) {value.bind( function( to ) {$('.rsb_loc_link').text(to);});});
	wp.customize( 'rest_adv_search_cus_icon', function( value ) {value.bind( function( to ) {$('.hom_src_main_title i, .hom_src_cuisine_title i, #loc_pop > i').attr('class', to);});});
	wp.customize( 'rest_adv_search_loc_icon', function( value ) {value.bind( function( to ) {$('.hom_src_loc_title i, .hom_src_loc_filter_title i').attr('class', to);});});
	wp.customize( 'radfs_bg_color', function( value ) {value.bind( function( to ) {$('div#resturants_advance_search_box').css('background-color', to );});});
	wp.customize( 'radfs_bg_image', function( value ) {value.bind( function( to ) {$('div#resturants_advance_search_box').css('background-image', 'url('+to+')' );});});
	wp.customize( 'radfs_bg_repeat', function( value ) {value.bind( function( to ) {$('div#resturants_advance_search_box').css('background-repeat', to );});});
	wp.customize( 'radfs_bg_position', function( value ) {value.bind( function( to ) {$('div#resturants_advance_search_box').css('background-position', to );});});
	wp.customize( 'radfs_bg_attchment', function( value ) {value.bind( function( to ) {$('div#resturants_advance_search_box').css('background-attachment', to );});});
	wp.customize( 'rest_adv_filters_ty_color', function( value ) {value.bind( function( to ) {$('h2.alei_h2').css('color', to );});});
	wp.customize( 'category_filter_image', function( value ) {value.bind( function( to ) {$('.ingsearch_img').css('background-image', 'url('+to+')' );});});
	wp.customize( 'ingredient_filter_image', function( value ) {value.bind( function( to ) {$('.spysearch_img').css('background-image', 'url('+to+')' );});});
	wp.customize( 'search_type_filter_image', function( value ) {value.bind( function( to ) {$('.catsearch_img').css('background-image', 'url('+to+')' );});});
	wp.customize( 'rest_adv_search_category_filter_title', function( value ) {value.bind( function( to ) {$('.cats_filter_text').text(to);});});
	wp.customize( 'rest_adv_search_ingredient_filter_title', function( value ) {value.bind( function( to ) {$('.ing_filter_text').text(to);});});
	wp.customize( 'rest_adv_search_type_filter_title', function( value ) {value.bind( function( to ) {$('.type_filter_text').text(to);});});

} )( jQuery );