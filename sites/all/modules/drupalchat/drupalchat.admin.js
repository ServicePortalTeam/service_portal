jQuery(document).ready(function() {
    jQuery('#drupalchat-colorpicker1').farbtastic('#edit-drupalchat-chat-topbar-color');
	jQuery('#drupalchat-colorpicker2').farbtastic('#edit-drupalchat-chat-topbar-text-color');
	jQuery('#drupalchat-colorpicker3').farbtastic('#edit-drupalchat-font-color');
	jQuery('#edit-drupalchat-css').hide();
	jQuery("input[name=drupalchat_polling_method]").change(function() {
	    jQuery('#edit-drupalchat-external-api-key').attr('disabled', 'disabled');
	    jQuery('.form-item-drupalchat-external-api-key').hide();
		jQuery('#edit-drupalchat-css').hide();
		jQuery('.form-item-drupalchat-user-latency').show();
		jQuery('.form-item-drupalchat-refresh-rate').show();
		jQuery('.form-item-drupalchat-send-rate').show();
		jQuery('.form-item-drupalchat-rel').show();
		jQuery('.form-item-drupalchat-ur-name').show();
		if (jQuery("input[name=drupalchat_polling_method]:checked").val() == '0') {
	    	jQuery('#edit-drupalchat-refresh-rate').removeAttr('disabled');
	    	jQuery('#edit-drupalchat-send-rate').removeAttr('disabled');
	    	jQuery('#edit-drupalchat-refresh-rate-wrapper').fadeIn();
	    	jQuery('#edit-drupalchat-send-rate-wrapper').fadeIn();	    	
	    }
	    else if (jQuery("input[@name=drupalchat_polling_method]:checked").val() == '1') {
	    	jQuery('#edit-drupalchat-refresh-rate').attr('disabled', 'disabled');
	    	jQuery('#edit-drupalchat-send-rate').attr('disabled', 'disabled');
	    	jQuery('#edit-drupalchat-refresh-rate-wrapper').hide();
	    	jQuery('#edit-drupalchat-send-rate-wrapper').hide();
	    }
		else if(jQuery("input[@name=drupalchat_polling_method]:checked").val() == '3') {
		  jQuery('#edit-drupalchat-external-api-key').removeAttr('disabled');
	      jQuery('.form-item-drupalchat-external-api-key').fadeIn();
		  jQuery('#edit-drupalchat-css').fadeIn();
		  jQuery('.form-item-drupalchat-user-latency').hide();
		  jQuery('.form-item-drupalchat-refresh-rate').hide();
		  jQuery('.form-item-drupalchat-send-rate').hide();
		  jQuery('.form-item-drupalchat-rel').hide();
		  jQuery('.form-item-drupalchat-ur-name').hide();
		}
	});

  jQuery("input[name=drupalchat_rel]").change(function() {
      if (jQuery("input[name=drupalchat_rel]:checked").val() == '1') {
        jQuery('#edit-drupalchat-ur-name').removeAttr('disabled');
		jQuery('#edit-drupalchat-ur-name').attr('required', 'true');
        jQuery('#edit-drupalchat-ur-name-wrapper').fadeIn();     
      }
      else {
        jQuery('#edit-drupalchat-ur-name').attr('disabled', 'disabled');
        jQuery('#edit-drupalchat-ur-name').removeAttr('required');
		jQuery('#edit-drupalchat-ur-name-wrapper').hide();
      }
  });	
	
	jQuery("input[name=drupalchat_polling_method]").change();
	jQuery("input[name=drupalchat_rel]").change();
});

