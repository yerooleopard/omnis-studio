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

	$('.redux-container-omnis_typo').each(function(){
		var el = $( this ),
			default_params = '';

		var select2_handle = el.find( '.select2_params' );
		if ( select2_handle.size() > 0 ) {
		    var select2_params = select2_handle.val();

		    select2_params = JSON.parse( select2_params );
		    default_params = $.extend( {}, default_params, select2_params );
		}

		el.find('.omnis-typo-select').select2({minimumResultsForSearch: -1});
		el.find('.omnis-typo-family').select2(default_params);

		// var storedVal = '';

		// el.find('.omnis-typo-size').each(function() {
		// 	$(this).on('keyup', function (e) {
		// 		var valid = /^(\-)?\d*(\.)?(\d+)?([a-z%]{1,3})?$/g;
		// 		var val = this.value;
		// 		var match = val.match(valid);

		// 		if (val) {
		// 			if (match) {
		// 				storedVal = this.value;
		// 			} else {
		// 				this.value = storedVal;
		// 			}
		// 		}
		// 	});

		// });

		// var element = document.getElementById('optionList');
		// 	console.log(element.options[element.selectedIndex].parentNode.label);

		el.find('.omnis-typo-family').on('change', function(){
			var label = $(this.options[this.selectedIndex]).closest('optgroup').prop('label'),
				input_google = el.find('.omnis-typo-google-enable');

			if (label == 'Google') {
				input_google.val('true');
			} else {
				input_google.val('');
			}
		});

		el.find('.omnis-typo-size').numberMask({
			// pattern: /^(\-)?\d*(\.)?(\d+)?([a-z%]{1,3})?$/
			pattern: /^(\-)?\d*(\.)?(\d+)?(px|em|pt|pc|cm|in|mm|rem|vh|vw|ch|ex|%|p|e|c|i|m|r|v|re)?$/
		});


	});

})(jQuery);