(function($) {
    "use strict";
    
    var omnisStudio = $('.omnis-studio'),
        omnisStudioTemplatesCol = omnisStudio.children('.omnis-studio__templates-column'),
        omnisStudioCategoriesCol = omnisStudio.children('.omnis-studio__categories-column'),

        omnisStudioTemplates = omnisStudio.find('.omnis-studio__templates'),
        addTemplateButton = omnisStudioTemplates.find('.vc_ui-list-bar-item-trigger'),
        omnisThumbA = omnisStudioTemplates.find('.omnis-studio__template-thumb a'),
        
        omnisPreviewBack = omnisStudio.find('.omnis-studio__preview-back'),
        omnisPreviewTitle = omnisStudio.find('.omnis-studio__preview-title'),
        omnisPreviewImage = omnisStudio.find('.omnis-studio__preview-image');

    $(document).on('click', '#vc_templates-editor-button, #vc_templates-more-layouts', function(){
        addTemplateButton.removeClass('loading');
        omnisStudio.removeClass('loading');
    });

    addTemplateButton.on('click', function(){
        $(this).addClass('loading');
        omnisStudio.addClass('loading');
    });

    var panelContainer = $('.vc_ui-panel-content-container'),
        currentPanelPosition = 0,
        panelContainerScrollPosition = null;

    $('.vc_ui-panel-content-container').on('scroll', function(){
        currentPanelPosition = $(this).scrollTop();
    });

    omnisThumbA.on('click', function(e){
        e.preventDefault();

        panelContainerScrollPosition = currentPanelPosition;
        panelContainer.scrollTop(0);

        var templatePrev = $(this).data('image-preview'),
            templateName = $(this).data('title');

        if (templatePrev !== 'undefined' && templateName !== 'undefined') {
            omnisPreviewTitle.html(templateName);
            omnisPreviewImage.attr('src', templatePrev);
            omnisStudio.addClass('show-preview');
        }
    });

    omnisPreviewBack.on('click', function(){
        omnisStudio.removeClass('show-preview');

        panelContainer.scrollTop(panelContainerScrollPosition);
    });
    
    omnisStudio.on( 'click', '.omnis-studio__categories a', function(e) {
        e.preventDefault();

        var filterValue = $(this).data('name'),
            getFilter = '[data-filter-category*="'+ filterValue +'"]';
        
        if (!filterValue) {
            getFilter = '*';
        }
        
        var filterHiddenClass = 'filter--hidden',
            filterVisibleClass = '';

        var $items = omnisStudioTemplates.find('.omnis-studio__template');
        var $visible = $items.filter( getFilter );
        var $hidden = $items.not( getFilter );
        // reveal visible
        $visible.removeClass(filterHiddenClass).addClass(filterVisibleClass);
        // hide hidden
        $hidden.addClass(filterHiddenClass).removeClass(filterVisibleClass);

        $(this).closest('.omnis-studio__categories-list').children('.omnis-studio__categories-el').removeClass('active');
        $(this).closest('.omnis-studio__categories-el').addClass('active');
    });


})(jQuery);