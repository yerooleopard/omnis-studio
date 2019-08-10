<?php 

/**
 *
 * @package    Omnis_Core
 * @subpackage Omnis_Core/omnis-studio
 * @author     Leopard Themes <adr.lampart@gmail.com>
 */
class Omnis_VC_Studio {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		    
    add_action( 'vc_get_all_templates', array( $this, 'omnis_vc_studio_in_templates' ));
    add_action( 'vc_templates_render_template', array( $this, 'omnis_vc_studio_render_template' ), 10, 2 );
    add_action( 'vc_templates_render_category', array( $this, 'omnis_vc_studio_render_category' ), 10, 1 );

		require_once plugin_dir_path( __FILE__ ) . 'templates/omnis-vc-studio-templates-array.php';
  }
  
  function omnis_vc_studio_in_templates( $data ) {
    $studio_elements = omnis_vc_studio_elements();

    if ( ! empty( $studio_elements ) ) {
      $arr_category = array(
        'category' => 'omnis_studio',
        'category_name' => esc_html__( 'Omnis Studio', 'omnis' ),
        'category_description' => esc_html__( 'Append theme elements to the current layout.', 'omnis' ),
        'category_weight' => 2,
      );
      $category_templates = array();
      foreach ( $studio_elements as $template_id => $template_data ) {
        if ( isset( $template_data['disabled'] ) && $template_data['disabled'] ) {
          continue;
        }
        $category_templates[] = array(
          'unique_id' => $template_data['id'],
          'name' => $template_data['name'],
          'type' => 'omnis_studio',
          'image' => isset( $template_data['image'] ) ? $template_data['image'] : false,
          'custom_class' => isset( $template_data['custom_class'] ) ? $template_data['custom_class'] : false,
          'category' => isset( $template_data['category'] ) ? $template_data['category'] : false,
        );
      }
      if ( ! empty( $category_templates ) ) {
        $arr_category['templates'] = $category_templates;
        $data[] = $arr_category;
      }
    }

    return $data;
  }
  
  function omnis_vc_studio_render_template($name, $template) {
    if ('omnis_studio' === $template['type'] ) {
      return $this->omnis_studio_renderTemplateWindowDefaultTemplates($name, $template);
    }
    return $name;
  }

  function omnis_vc_studio_render_category( $category ) {
    if ( 'omnis_studio' === $category['category'] ) {
      $category['output'] = '';
      $category['output'] .= '<div class="omnis-studio">';
  
      $_elements_categories_list = array();
  
      if ( ! empty( $category['templates'] ) ) {
        foreach ( $category['templates'] as $template ) {
          if (!empty($template['category'])) {
            $_el_cats = explode(',', $template['category']);
            $_el_cats_count = 0;
  
            foreach($_el_cats as $_el_cat) {
              $_el_cat = str_replace(' ', '', $_el_cat);
              if (array_key_exists($_el_cat, $_elements_categories_list)) {
                $_elements_categories_list[$_el_cat]++;
              } else {
                $_elements_categories_list[$_el_cat] = 1;
              }
            }
          }
        }
      }
  
      ksort($_elements_categories_list);
  
      $category['output'] .= '<div class="vc_column vc_col-md-3 omnis-studio__categories-column"><div class="omnis-studio__categories">';
      $category['output'] .= '<ul class="omnis-studio__categories-list">';
      if (!empty($_elements_categories_list)) {
        $category['output'] .= '<li class="omnis-studio__categories-el active"><a data-name="none" href="#none"><strong>'. esc_html__('Categories', 'omnis') .'</strong></a><span class="omnis-studio__categories-count">'. count($category['templates']) .' '. esc_html('Items', 'omnis') .'</span></li>';
  
        foreach ($_elements_categories_list as $_cat_key => $_cat_count) {
          $_cat_key_unslug = str_replace('-', ' ', $_cat_key);
          $_cat_key_unslug = ucwords($_cat_key_unslug);
          $category['output'] .= '<li class="omnis-studio__categories-el"><a data-name="'. esc_attr($_cat_key) .'" href="#'. esc_attr($_cat_key) .'">'. esc_html($_cat_key_unslug) .'</a><span class="omnis-studio__categories-count">'. intval($_cat_count) .'</span></li>';
        }
      }
      $category['output'] .= '</ul>';
      $category['output'] .= '</div></div>';
  
      $category['output'] .= '
      <div class="vc_column vc_col-sm-9 omnis-studio__templates-column">
        <div class="omnis-studio__templates vc_row vc_ui-template-list vc_templates-list-default_templates vc_ui-list-bar" data-vc-action="collapseAll">';
      if ( ! empty( $category['templates'] ) ) {
        foreach ( $_elements_categories_list as $_category_name => $_cat_count) {
          $_category_name_display = str_replace('-', ' ', $_category_name);
          $_category_name_display = str_replace(',', ', ', $_category_name_display);
          $_category_name_display = ucwords($_category_name_display);

          $category['output'] .= '<div class="omnis-studio__template omnis-studio__template-categories" data-filter-category="none"><div class="vc_ui-list-bar-item omnis-studio__template-inner"><a href="#" data-name="'. esc_attr($_category_name) .'">'. esc_html($_category_name_display) .'<span>'. intval($_cat_count) .'</span></a></div></div>';
        }

        foreach ( $category['templates'] as $template ) {
          $category['output'] .= $this->omnis_studio_renderTemplateListItem( $template );
        }
      }
      $category['output'] .= '
      </div>
    </div>';
  
    $category['output'] .= '<div class="omnis-studio__preview">';
    $category['output'] .= '
    <div class="omnis-studio__preview-header">
      <button type="button" class="vc_general vc_ui-control-button vc_ui-panel-back-button omnis-studio__preview-back">
        <i class="vc-composer-icon vc-c-icon-arrow_back"></i>
      </button>
      <h3 class="vc_ui-panel-title omnis-studio__preview-title">Template</h3>
    </div>
    <div class="omnis-studio__preview-content"><img class="omnis-studio__preview-image" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Preview" /></div>';
    $category['output'] .= '</div>';
    $category['output'] .= '</div>';
    }
  
    return $category;
  }

  private function omnis_studio_renderTemplateWindowDefaultTemplates( $template_name, $template_data ) {
    $output = '';
    $template_id = esc_attr( $template_data['unique_id'] );
    $template_id_hash = md5( $template_id ); // needed for jquery target for TTA
    $template_name = esc_html( $template_name );
    $add_template_title = esc_attr__( 'Add template', 'omnis' );
    $_template_categories = (!empty($template_data['category'])) ? $template_data['category'] : '';
    if ($_template_categories) {
      $_template_categories = str_replace('-', ' ', $_template_categories);
      $_template_categories = str_replace(',', ', ', $_template_categories);
      $_template_categories = ucwords($_template_categories);
    }
    $template_image = (!empty($template_data['image'])) ? $template_data['image'] : '';

    $_template_thumb = plugin_dir_url( dirname( __FILE__ ) ) . 'omnis-vc-studio/templates/'. $template_image;
    $_template_preview = plugin_dir_url( dirname( __FILE__ ) ) . 'omnis-vc-studio/templates/'. $template_image;

    if ($template_image) {
      $output .= '<div class="omnis-studio__template-thumb">';
      $output .= '<a href="#" data-image-preview="'. esc_attr($_template_preview) .'" data-title="'. esc_attr($template_name) .'"><img src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAABCAQAAACx6dw/AAAADUlEQVR42mNk4GEAAgAASgAO9LvNeQAAAABJRU5ErkJggg==" data-src="'. esc_url($_template_thumb) .'" alt="'. esc_attr($template_name) .'" /></a>';
      $output .= '</div>';
    }
    $output .= '<div class="omnis-studio__template-content">';
    $output .= '<div class="omnis-studio__template-title">';
    $output .= esc_html($template_name);
    $output .= ($_template_categories) ? '<span class="omnis-studio__template-cats">'. esc_html($_template_categories) .'</span>' : '';
    $output .= '</div>';
    $output .= '<div class="omnis-studio__template-add"><a href="#" class="vc_ui-list-bar-item-trigger" data-template-handler="" title="'. esc_html($add_template_title) .'">'. esc_html($add_template_title) .'</a></div>';
    $output .= '</div>';

    return $output;
  }

  private function omnis_studio_renderTemplateListItem( $template ) {
    $name = isset( $template['name'] ) ? esc_html( $template['name'] ) : esc_html__( 'No title', 'omnis' );
    $template_id = esc_attr( $template['unique_id'] );
    $template_id_hash = md5( $template_id ); // needed for jquery target for TTA
    $template_name = esc_html( $name );
    $template_name_lower = esc_attr( vc_slugify( $template_name ) );
    $template_type = esc_attr( isset( $template['type'] ) ? $template['type'] : 'custom' );
    $custom_class = esc_attr( isset( $template['custom_class'] ) ? $template['custom_class'] : '' );
    $_template_category = esc_attr( isset( $template['category'] ) ? str_replace(',', ' ', $template['category']) : 'content' );
  
    $output = <<<HTML
          <div class="omnis-studio__template vc_ui-template filter--hidden vc_templates-template-type-$template_type $custom_class"
            data-template_id="$template_id"
            data-template_id_hash="$template_id_hash"
            data-category="$template_type"
            data-template_unique_id="$template_id"
            data-template_name="$template_name_lower"
            data-template_type="$template_type"
            data-vc-content=".vc_ui-template-content"
            data-filter-category="$_template_category">
            <div class="vc_ui-list-bar-item omnis-studio__template-inner">
HTML;
    $output .= apply_filters( 'vc_templates_render_template', $name, $template );
    $output .= <<<HTML
            </div>
          </div>
HTML;
  
    return $output;
  }

  /**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
    wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/omnis_vc_studio.css', array('js_composer'), $this->version, 'all' );
    wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/omnis_vc_studio.css', array('vc_inline_css'), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/omnis_vc_studio.js', array( 'jquery' ), $this->version, true );

	}

}