/*!
 * jQuery numberMask Plugin v1.0.0
 *
 * Licensed under the MIT License
 * Authors: Konstantin Krivlenia
 *          krivlenia@gmail.com
 * Site:  https://github.com/Mavrin/maskInput
 */
!function(e){if("function"==typeof define&&define.amd)define(["jquery"],e);else if("object"==typeof module&&module.exports){var t=require("jquery");module.exports=e(t)}else e(jQuery)}(function(e){return e.fn.numberMask=function(t){var n,r={type:"int",beforePoint:10,afterPoint:2,defaultValueInput:0,allowNegative:!1,decimalMark:["."],pattern:""},a=function(e){var t=e.which;if(e.ctrlKey||e.altKey||e.metaKey||32>t)return!0;if(t){var a=String.fromCharCode(t),i=e.target.value,l=o(e.target);return i=i.substring(0,l.start)+a+i.substring(l.end),r.allowNegative&&"-"===i||n.test(i)}},i=function(t){var n=e(t.currentTarget);n.val(l(n))},o=function(e){var t,n,r,a,i,o=0,l=0,c=!1;return"number"==typeof e.selectionStart&&"number"==typeof e.selectionEnd?(o=e.selectionStart,l=e.selectionEnd):(n=document.selection.createRange(),n&&n.parentElement()==e&&(a=e.value.length,t=e.value.replace(/\r\n/g,"\n"),r=e.createTextRange(),r.moveToBookmark(n.getBookmark()),i=e.createTextRange(),i.collapse(!1),r.compareEndPoints("StartToEnd",i)>-1?o=l=a:(o=-r.moveStart("character",-a),o+=t.slice(0,o).split("\n").length-1,r.compareEndPoints("EndToEnd",i)>-1?l=a:(l=-r.moveEnd("character",-a),l+=t.slice(0,l).split("\n").length-1)))),o-l!=0&&(c=!0),{start:o,end:l,statusSelection:c}},l=function(e){var t=e.val();return n.test(t)?t:r.defaultValueInput},c=function(){for(var e="(\\"+r.decimalMark[0],t=1;t<r.decimalMark.length;t++)e+="|\\"+r.decimalMark[t];return e+=")"};if(this.bind("keypress",a).bind("input",i),t&&(t.decimalMark&&"string"===e.type(t.decimalMark)&&(t.decimalMark=[t.decimalMark]),e.extend(r,t)),"object"==typeof r.pattern&&r.pattern instanceof RegExp)n=r.pattern;else{var u=r.allowNegative?"[-]?":"",d="^"+u+"\\d{1,"+r.beforePoint+"}$",s="^"+u+"\\d{1,"+r.beforePoint+"}"+c()+"\\d{0,"+r.afterPoint+"}$";n=new RegExp("int"==r.type?d:d+"|"+s)}return this},e});
//# sourceMappingURL=jquery.numberMask.min.js.map


/* global confirm, redux, redux_change */
(function($) {
	"use strict";

	$('.redux-container-omnis_fields').each(function(){
		var el = $( this ),
			default_params = '';

		var select = el.find('.omnis_fields_select'), 
			input = el.find('.omnis_input');

		select.each( function() {
			var select_field = $(this).find('.omnis_select'),
				select2_handle = $(this).find( '.select2_params' );

			if ( select2_handle.size() > 0 ) {
			    var select2_params = select2_handle.val();

			    select2_params = JSON.parse( select2_params );
			    default_params = $.extend( {}, default_params, select2_params );
			}
			select_field.select2( default_params );
		});


		input.each(function(el) {
			var regex = new RegExp($(this).data('regex'));
			$(this).numberMask({
				pattern: regex
			});
		});





        // // Color picker options
        // colorpickerInput.spectrum({
        //     color:                  currentColor, //'#ffffff',
        //     showAlpha:              showAlpha,
        //     showInput:              showInput,
        //     allowEmpty:             allowEmpty,
        //     className:              'redux-color-rgba',
        //     showInitial:            showInitial,
        //     showPalette:            showPalette,
        //     showSelectionPalette:   showSelectionPalette,
        //     maxPaletteSize:         maxPaletteSize,
        //     showPaletteOnly:        showPaletteOnly,
        //     clickoutFiresChange:    clickoutFiresChange,
        //     chooseText:             chooseText,
        //     cancelText:             cancelText,
        //     showButtons:            showButtons,
        //     containerClassName:     containerClass,
        //     replacerClassName:      replacerClass,
        //     preferredFormat:        'hex6',
        //     localStorageKey:        'redux.color-rgba.' + field_id,
        //     palette:                palette,
        //     inputText:              inputText,



		var hexToRGBA = function( hex, alpha ) {
	        var result;
	        
	        if (hex === null) {
	            result = '';
	        } else {
	            hex = hex.replace('#', '');
	            var r = parseInt(hex.substring(0, 2), 16);
	            var g = parseInt(hex.substring(2, 4), 16);
	            var b = parseInt(hex.substring(4, 6), 16);

	            result = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha + ')';
	        }
	        
	        return result;        
	    };

        var colorPicker = el.find('.omnis_fields_color');

   		colorPicker.each(function() {
	   		var el = $(this),
	   			input = el.find('.omnis-color-rgba'),
	   			allowEmpty = el.data('allow-empty');

		   	input.spectrum({
		   		color: colorPicker.data('current-color'),
		   		showAlpha: true,
		   		showInput: true,
		        preferredFormat: 'hex6',
		        clickoutFiresChange: true,
		        showButtons: false,
		        allowEmpty: allowEmpty,
		        maxPaletteSize: 10,
		        // inputText: 'Select Color',

		        change: function(color) {
		            var colorVal, alphaVal, rgbaVal;

		            if (color === null) {
		                colorVal = null;

		                alphaVal = null;
		            } else {
		                colorVal = color.toHexString();
		                alphaVal = color.alpha;
		            }

		            if (colorVal != 'transparent') {
		                rgbaVal     = hexToRGBA(colorVal, alphaVal);
		            } else {
		                rgbaVal     = 'transparent';
		            }
		            
		            var blockID = $(this).data('block-id');
		            
		            // Update HTML color value
		            el.find('input#' + blockID + '-color').val(colorVal);

		            // Update HTML alpha value
		            el.find('input#' + blockID + '-alpha').val(alphaVal);

		            // Update RGBA alpha value
		            el.find('input#' + blockID + '-rgba').val(rgbaVal);

		            redux_change(el);
		        }
		   	});
   		});




	});

})(jQuery);