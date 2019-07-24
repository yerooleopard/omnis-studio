(function( $ ) {
	'use strict';

	var templateSelect = $('.omnis-demo-templates-switcher__options select'),
		templateSelectSubmit = $('.omnis-demo-templates-switcher__options .btn[type="submit"]'),
		templateSelectReset = $('.omnis-demo-templates-switcher__options .btn[type="reset"]');

	var templateSwitcher = $('.omnis-demo-templates-switcher'),
		templateDemoOptions = $('.omnis-demo-templates-options'),
		templateSwitcherData = templateSwitcher.data('type');

	var selectedVal = templateSelect.val(),
		pickedVal = null;

	var urlTemplate = location.search.split('omnis_template=')[1];

	if (urlTemplate == selectedVal) {
		templateSelectSubmit.prop('disabled', false);
	}

	templateSelect.on('change', function(){
		var currentVal = $(this).val();

		if (currentVal != selectedVal || urlTemplate == selectedVal) {
			templateSelectSubmit.prop('disabled', false);
		} else {
			templateSelectSubmit.prop('disabled', true);
		}

		pickedVal = currentVal;
	});


	var templatesCookiesName = 'omnis_template',
		templatesCookies = Cookies.getJSON(templatesCookiesName) || {},
		cookiesExpiration = 14; // days

	templateSelectSubmit.on('click', function(e){
		e.preventDefault();

		if (!pickedVal && urlTemplate) {
			pickedVal = parseInt(urlTemplate);
		}

		templateSwitcher.addClass('reloading');

		templatesCookies[templateSwitcherData] = parseInt(pickedVal);
		Cookies.set(templatesCookiesName, templatesCookies, { expires: cookiesExpiration });
		
		history.replaceState(null, null, removeURLParameter(location.href, templatesCookiesName));
		location.reload();
	});

	templateSelectReset.on('click', function(e){
		e.preventDefault();

		templateSwitcher.addClass('reloading');
		
		delete templatesCookies[templateSwitcherData];
		Cookies.set(templatesCookiesName, templatesCookies, { expires: cookiesExpiration });

		history.replaceState(null, null, removeURLParameter(location.href, templatesCookiesName));
		location.reload();
	});

	//Switcher visibility
	var openSwitcherBTN = $('.omnis-demo-templates-options__open-btn a'),
		closeSwitcherBTN = $('.omnis-demo-templates-switcher__close-btn a');

	var visibleClass = 'switcher-opened',
		hiddenClass = 'switcher-closed';

	openSwitcherBTN.on('click', function(){
		if (templateDemoOptions.hasClass(hiddenClass)) {
			templateSwitcher.stop().show(200);
			templateDemoOptions.removeClass(hiddenClass).addClass(visibleClass);
		}
	});

	closeSwitcherBTN.on('click', function(){
		if (templateDemoOptions.hasClass(visibleClass)) {
			templateSwitcher.stop().hide(200);
			templateDemoOptions.removeClass(visibleClass).addClass(hiddenClass);
		}
	});
	
	$(document).on('click touch touchstart', function(e) {
		if (templateDemoOptions.hasClass(visibleClass)) {
			if (!templateDemoOptions.is(e.target) && templateDemoOptions.has(e.target).length === 0) {
				templateSwitcher.stop().hide(200);
				templateDemoOptions.removeClass(visibleClass).addClass(hiddenClass);
			}
		}
	});

})( jQuery );


function removeURLParameter(url, parameter) {
    //prefer to use l.search if you have a location/link object
    var urlparts = url.split('?');   
    if (urlparts.length >= 2) {

        var prefix = encodeURIComponent(parameter) + '=';
        var pars = urlparts[1].split(/[&;]/g);

        //reverse iteration as may be destructive
        for (var i = pars.length; i-- > 0;) {    
            //idiom for string.startsWith
            if (pars[i].lastIndexOf(prefix, 0) !== -1) {  
                pars.splice(i, 1);
            }
        }

        return urlparts[0] + (pars.length > 0 ? '?' + pars.join('&') : '');
    }
    return url;
}