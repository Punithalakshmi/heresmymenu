/*Thanks for WooCommerce*/
jQuery(function($) {
	var customMediaManager;
	var $thumb_gallery_ids = $('#post_gallery_thumb');
	var $thumb_images = $('#post_gallery_thumbnail ul.fro_gal_thmb');

	jQuery('.add_thumb_images').on( 'click', 'a', function( event ) {
		var $el = $(this);
		var attachment_ids = $thumb_gallery_ids.val();

		event.preventDefault();

		// If the media frame already exists, reopen it.
		if ( customMediaManager ) {
			customMediaManager.open();
			return;
		}

		// Create the media frame.
		customMediaManager = wp.media.frames.customMediaManager = wp.media({
			// Set the title of the modal.
			title: $el.data('choose'),
			button: {
				text: $el.data('update'),
			},
			states : [
				new wp.media.controller.Library({
					title: $el.data('choose'),
					filterable :	'all',
					multiple: true,
				})
			]
		});

		// When an image is selected, run a callback.
		customMediaManager.on( 'select', function() {

			var selection = customMediaManager.state().get('selection');

			selection.map( function( attachment ) {

				attachment = attachment.toJSON();

				if ( attachment.id ) {
				attachment_ids = attachment_ids ? attachment_ids + "," + attachment.id : attachment.id;

				$thumb_images.append('\
					<li class="image" data-attachment_id="' + attachment.id + '">\
						<img src="' + attachment.sizes.thumbnail.url + '" />\
						<ul class="actions">\
							<li><a href="#" class="delete" title="' + $el.data('delete') + '">' + $el.data('text') + '</a></li>\
						</ul>\
					</li>');
				}

			});

			$thumb_gallery_ids.val( attachment_ids );
		});

		// Finally, open the modal.
		customMediaManager.open();
	});

	// Image ordering
	$thumb_images.sortable({
		items: 'li.image',
		cursor: 'move',
		scrollSensitivity:40,
		forcePlaceholderSize: true,
		forceHelperSize: false,
		helper: 'clone',
		opacity: 0.65,
		start:function(event,ui){
			ui.item.css('background-color','#f6f6f6');
		},
		stop:function(event,ui){
			ui.item.removeAttr('style');
		},
		update: function(event, ui) {
			var attachment_ids = '';

			$('#post_gallery_thumbnail ul li.image').css('cursor','default').each(function() {
				var attachment_id = jQuery(this).attr( 'data-attachment_id' );
				attachment_ids = attachment_ids + attachment_id + ',';
			});

			$thumb_gallery_ids.val( attachment_ids );
		}
	});

	// Remove images
	$('#post_gallery_thumbnail').on( 'click', 'a.delete', function() {
		$(this).closest('li.image').remove();

		var attachment_ids = '';

		$('#post_gallery_thumbnail ul li.image').css('cursor','default').each(function() {
			var attachment_id = jQuery(this).attr( 'data-attachment_id' );
			attachment_ids = attachment_ids + attachment_id + ',';
		});

		$thumb_gallery_ids.val( attachment_ids );

		return false;
	});
});
