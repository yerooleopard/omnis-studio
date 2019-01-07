(function($) {
	"use strict";

	var omnis_fields = {
		omnis_color_advanced: function() {
			var omnis_color_adv = $('.omnis-color-advanced-field'),
				clearText = omnis_color_adv.data('clear');

			omnis_color_adv.each(function() {
				var fieldInput = $(this).find('input');

				fieldInput.asColorPicker({
					mode: 'gradient',
			        clear: {
		                template: function(namespace) {
		                    return '<a href="#" class="' + namespace + '-clear button">'+ clearText +'</a>';
		                }
			        },
			        trigger: {
		                template: function(namespace) {
		                    return '<div class="' + namespace + '-trigger button"><span></span></div>';
		                }
			        },
			        onChange: function(value) {
                        // console.log(value)
			        	if (fieldTrigger !== undefined) {
							if (!value) {
								fieldTrigger.addClass('empty');
							} else {
								fieldTrigger.removeClass('empty');
							}
			        	}
			        },
			        // onClose: function(){
			        // 	$().asColorPicker('destroy');
			        // }
				});

				var fieldVal = fieldInput.val(),
					fieldTrigger = $(this).find('.asColorPicker-trigger');

				if (fieldTrigger !== undefined) {
					if (!fieldVal) {
						fieldTrigger.addClass('empty');
					} else {
						fieldTrigger.removeClass('empty');
					}
				}
			});
		},

		init: function() {
			this.omnis_color_advanced();
		}
	};

	omnis_fields.init();

})(jQuery);