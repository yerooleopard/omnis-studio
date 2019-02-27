(function() {
	var components_list = omnis_components_list.map(function(component){return {text: component.name, value: component.id}; });
	var dialogBody = '<p>Whatever you want here</p>';

	// Register buttons
	tinymce.create('tinymce.plugins.insertComponentButton', {
		init: function( editor, url ) {
			
			editor.addButton( 'insert_component', {
				title: 'Insert Component',
				icon: false,
				onclick: function() {

					editor.windowManager.open({
						title: 'Insert Component',
						minWidth: 400,
						minHeight: 100,
						classes: 'omnis-insert-component-modal',
						layout: 'fit',
						body: [{
							type: 'listbox',
							name: 'component',
							label: 'Component',
							values: components_list,
							value: ''
						}],
						onsubmit: function( e ) {
							var component_id = (e.data.component) ? e.data.component : null;
							if (component_id) {
								var component_content = omnis_components_list.filter(function(component) {
									if (component.id == component_id) {
										return component;
									}
								});

								component_content = (component_content[0].content) ? component_content[0].content : null;
								
								if (component_content) {
									editor.insertContent(component_content);
								}
							}
						}
					});
				}
			});
		},
		createControl: function( n, cm ) {
			return null;
		}
	});

	tinymce.PluginManager.add( 'insert_component_script', tinymce.plugins.insertComponentButton );
})();