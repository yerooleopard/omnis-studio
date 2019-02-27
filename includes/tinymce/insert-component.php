<?php 

function omnis_tinymce_insert_component_btn() {
	if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
		add_filter( 'mce_buttons', 'omnis_tinymce_insert_component_btn_register' );
		add_filter( 'mce_external_plugins', 'omnis_tinymce_insert_component_btn_script' );
	}
}
add_action( 'admin_init', 'omnis_tinymce_insert_component_btn' );
 
function omnis_tinymce_insert_component_btn_register( $buttons ) {
	array_push( $buttons, 'insert_component' );
	return $buttons;
}
 
function omnis_tinymce_insert_component_btn_script( $plugin_array ) {
	$plugin_array['insert_component_script'] = plugin_dir_url( __FILE__ ) . 'insert-component.js';  // Change this to reflect the path/filename to your js file
	return $plugin_array;
}
 
function omnis_tinymce_insert_component_btn_icon() {
	?>
	<style type="text/css">
	.mce-i-insert_component:before {
		content: '\f479';
		display: inline-block;
		-webkit-font-smoothing: antialiased;
		font: normal 16px/1 'dashicons';
		vertical-align: top;
	}
	</style>
	<?php
}
add_action( 'admin_head', 'omnis_tinymce_insert_component_btn_icon' );


function omnis_components_data() {
    $elements_post_type = 'omnis_elements';
    $elements_args = array(
      'post_type' => $elements_post_type,
      'posts_per_page' => -1,
      'post_status' => 'publish',
    );
    $elements_query = get_posts( $elements_args );
    $omnis_elements = array();
    $omnis_elements[] = array(
		'name' => esc_attr__('None', 'omnis'),
		'content' => '',
	);
    if (!empty($elements_query)) {
        foreach ($elements_query as $post) {
            $omnis_elements[] = array(
				'name' => $post->post_title,
				'content' => $post->post_content,
				'id' => $post->ID
			);
        }
	}
	
	$output = '';

	$output .= "<script type='text/javascript'>\n";
	$output .= 'var omnis_components_list = '. json_encode($omnis_elements) .'';
	$output .= "\n</script>";

	echo ''.$output;
}
add_action( 'admin_print_scripts', 'omnis_components_data' );
