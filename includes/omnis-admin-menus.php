<?php 

function omnis_add_post_types_nav_menu() {
    add_meta_box('omnis_meta_box', 
        esc_html__( 'Omnis Items', 'omnis' ), 
        'omnis_render_nav_menu', 
        'nav-menus', 
        'side', 
        'low' );
}
add_action('admin_init', 'omnis_add_post_types_nav_menu');

function omnis_render_nav_menu() {
    $menu_items = array(
        (object) array(
            'type' => 'omnis-nav-items',
            'title' => esc_html__('Search', 'omnis'),
            'url' => '#search',
            'classes' => 'menu-item--search',
        ),
        (object) array(
            'type' => 'omnis-nav-items',
            'title' => esc_html__('Overlay Content Dots', 'omnis'),
            'url' => '#overlay-content',
            'classes' => 'menu-item--overlay-content menu-item--dots',
        ),
        (object) array(
            'type' => 'omnis-nav-items',
            'title' => esc_html__('Overlay Content', 'omnis'),
            'url' => '#overlay-content',
            'classes' => 'menu-item--overlay-content',
        ),
        (object) array(
            'type' => 'omnis-nav-items',
            'title' => esc_html__('Title Item', 'omnis'),
            'url' => '#',
            'classes' => 'menu-item--title-item',
        ),
    );

    if ( class_exists( 'WooCommerce' ) ) {

        $menu_items[] = (object) array(
            'type' => 'omnis-nav-items',
            'title' => esc_html__('Cart', 'omnis'),
            'url' => '#cart',
            'classes' => 'menu-item--cart',
        );

    }

    ?>
    <div id="omnis-nav" class="posttypediv">
        <ul class="omnis-nav-tabs add-menu-item-tabs">
            <li class="tabs" data-type="items"><?php esc_html_e( 'Items' ); ?></li>
        </ul>
        <div id="items" class="tabs-panel tabs-panel-active">
            <ul class="categorychecklist form-no-clear">
            <?php $i = 0; foreach ($menu_items as $menu_item ) : $i++; ?>
                <li>
                    <label class="menu-item-title"><input type="checkbox" class="menu-item-checkbox" name="menu-item[-<?php echo $i; ?>][menu-item-object-id]" value="<?php echo esc_attr($menu_item->title); ?>"> <?php echo esc_html($menu_item->title); ?></label>
                    <input type="hidden" class="menu-item-title" name="menu-item[-<?php echo $i; ?>][menu-item-title]" value="<?php echo esc_attr($menu_item->title); ?>">
                    <input type="hidden" class="menu-item-url" name="menu-item[-<?php echo $i; ?>][menu-item-url]" value="<?php echo esc_attr($menu_item->url); ?>">
                    <input type="hidden" value="custom" name="menu-item[-<?php echo $i; ?>][menu-item-type]">
                    <input type="hidden" name="menu-item[-<?php echo $i; ?>][menu-item-classes]" value="<?php echo esc_attr($menu_item->classes); ?>">
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <p class="button-controls">
            <span class="list-controls">
                <a href="/wp-admin/nav-menus.php?page-tab=all&amp;selectall=1#omnis-nav" class="select-all">Select All</a>
            </span>

            <span class="add-to-menu">
                <input type="submit" class="button-secondary submit-add-to-menu right" value="Add to Menu" name="add-post-type-menu-item" id="submit-omnis-nav">
                <span class="spinner"></span>
            </span>
        </p>
    </div>
    <?php
}



/**
 * Proof of concept for how to add new fields to nav_menu_item posts in the WordPress menu editor.
 * @author Weston Ruter (@westonruter), X-Team
 *
 *
 */
 
 
add_action( 'init', array( 'omnis_Nav_Menu_Item_Custom_Fields', 'setup' ) );
 
class omnis_Nav_Menu_Item_Custom_Fields {
 
    static $options = array();
    
    static function setup() {
        // @todo we can do some merging of provided options from WP options for from config
        self::$options['fields'] = array(
            'mega' =>array(
                'name'              => 'megamenu',
                'label'             => esc_html__('Mega Menu', 'omnis'),
                'container_class'   => 'mega-menu',
                'input_type'        => 'checkbox'
            ),
            'shortcode' =>array(
                'name'              => 'menu_shortcode',
                'label'             => esc_html__('Shortcodes (advanced)', 'omnis'),
                'container_class'   => 'menu_shortcode',
                'input_type'        => 'textarea'
            )
        );
 
        add_filter( 'wp_edit_nav_menu_walker', function () {
            return 'omnis_Walker_Nav_Menu_Edit';
        });
        add_filter( 'omnis_nav_menu_item_additional_fields', array( __CLASS__, '_add_fields' ), 10, 5 );
        add_action( 'save_post', array( __CLASS__, '_save_post' ) );
    }
 
    static function get_fields_schema() {
        $schema = array();
        foreach(self::$options['fields'] as $name => $field) {
            if (empty($field['name'])) {
                $field['name'] = $name;
            }
            $schema[] = $field;
        }
        return $schema;
    }
 
    static function get_menu_item_postmeta_key($name) {
        return '_menu_item_' . $name;
    }
 
    /**
     * Inject the 
     * @hook {action} save_post
     */
    static function _add_fields($new_fields, $item_output, $item, $depth, $args) {
        
        $schema = self::get_fields_schema($item->ID);
        
        $new_fields = '';       
        
        foreach($schema as $field) {
            
            $field['value'] = get_post_meta($item->ID, self::get_menu_item_postmeta_key($field['name']), true);
            $field['id'] = $item->ID;

                       
            $new_fields .= '<p class="additional-menu-field-'.$field['name'].' description description-wide custom-menu-field"><label for="edit-menu-item-'.$field['name'].'-'.$field['id'].'">'.$field['label'].'<br />';
            if( $field['input_type'] == 'textarea'){
                $new_fields .= '<textarea rows="3" ';
            } else {
                $new_fields .= '<input type="'.$field['input_type'].'" ';
            }
            $new_fields .= 'id="edit-menu-item-'.$field['name'].'-'.$field['id'].'"';
            $new_fields .= 'class="widefat code edit-menu-item-'.$field['name'].'"';
            $new_fields .= 'name="menu-item-'.$field['name'].'['.$field['id'].']"';
            if( $field['input_type'] == 'checkbox'){
                $new_fields .= 'value="1" '. checked( $field['value'], 1, false) .'';
            }else{
                $new_fields .= 'value="'.$field['value'].'" ';
            }
            if( $field['input_type'] == 'textarea'){
                $new_fields .= ' />'. $field['value'] .'</textarea></label></p>';
            } else {
                $new_fields .= ' /></label></p>';
            }
            
        }
        return $new_fields;
    }
 
    /**
     * Save the newly submitted fields
     * @hook {action} save_post
     */
    static function _save_post($post_id) {
        if (get_post_type($post_id) !== 'nav_menu_item') {
            return;
        }
        $fields_schema = self::get_fields_schema($post_id);
        foreach($fields_schema as $field_schema) {
            $form_field_name = 'menu-item-' . $field_schema['name'];
            $key = self::get_menu_item_postmeta_key($field_schema['name']);
            $value = isset( $_POST[$form_field_name][$post_id] ) ? stripslashes($_POST[$form_field_name][$post_id]) : '';                   
            update_post_meta($post_id, $key, $value);
        }
    }
 
}
 
require_once ABSPATH . 'wp-admin/includes/nav-menu.php';
class omnis_Walker_Nav_Menu_Edit extends Walker_Nav_Menu_Edit {
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $item_output = '';
        parent::start_el($item_output, $item, $depth, $args);
        $new_fields = apply_filters( 'omnis_nav_menu_item_additional_fields', '', $item_output, $item, $depth, $args );
        // if ($new_fields && $depth == 0) {
        if ($new_fields) {
            $item_output = preg_replace('/(?=<fieldset[^>]+class="[^"]*field-move)/', $new_fields, $item_output);
            // $item_output = preg_replace('/(?=<div[^>]+class="[^"]*submitbox)/', $new_fields, $item_output);
        }
        $output .= $item_output;
    }
}