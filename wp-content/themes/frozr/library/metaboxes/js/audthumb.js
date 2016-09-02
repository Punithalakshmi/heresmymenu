/* <![CDATA[ */
jQuery(function($) {	
	//Create WP media frame.					
	var customMediaManager;
						
	var formlabel = 0;

	$('#upload_mp3, #upload_oga').live('click', function(e) {
		e.preventDefault();
							
		// If the frame already exists, re-open it.
		if ( customMediaManager ) {
			customMediaManager.open();
			return;
		}
							
		// Get our Button element
		formlabel = jQuery(this);
							
		// Get our Form element
		form = jQuery(this).parent();
							
		var customMediaManager = wp.media.frames.customMediaManager = wp.media({
			//Title of media manager frame
			title: "Upload media",
			library: {
				type: ''
			},
			frame: 'select',
			button: {
				//Set Button text
				text: formlabel.attr("data-update")
			},
			//Do not allow multiple files, if you want multiple, set true
			multiple: false
		});
		customMediaManager.on('select', function(){
			//Set text box value
			var media_attachment = customMediaManager.state().get('selection').first().toJSON();
			formlabel.prev('input').val(media_attachment.url);
		});
							
		customMediaManager.open();
	})
});
/* ]]> */