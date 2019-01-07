<?php
/**
 * Redux Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Redux Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Redux Framework. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     ReduxFramework
 * @author      Dovy Paukstys
 * @version     3.1.5
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

// Don't duplicate me!
if( !class_exists( 'ReduxFramework_omnis_color_advanced' ) ) {

    /**
     * Main ReduxFramework_omnis_color_advanced class
     *
     * @since       1.0.0
     */
    class ReduxFramework_omnis_color_advanced extends ReduxFramework {
    
        /**
         * Field Constructor.
         *
         * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        function __construct( $field = array(), $value ='', $parent ) {
        
            
            $this->parent = $parent;
            $this->field = $field;
            $this->value = $value;

            if ( empty( $this->extension_dir ) ) {
                $this->extension_dir = trailingslashit( str_replace( '\\', '/', dirname( __FILE__ ) ) );
                $this->extension_url = site_url( str_replace( trailingslashit( str_replace( '\\', '/', ABSPATH ) ), '', $this->extension_dir ) );
            }    



            // Set default args for this field to avoid bad indexes. Change this to anything you use.
            // $defaults = array();
            // $this->field = wp_parse_args( $this->field, $defaults );     
            // $defaults_def = array(
            //     // 'color' => '',
            // );
            // $this->value = wp_parse_args( $this->value, $defaults_def );   

            // $this->getGoogleArray();      
        
        }

        /**
         * Field Render Function.
         *
         * Takes the vars and outputs the HTML for the field in the settings
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        public function render() {
            if (isset($this->value['rgba'])) {
                $this->value = $this->value['rgba'];
            }

            // var_dump($this->value);

            echo '<div class="redux-color-advanced-container">';
            echo '<div class="omnis-color-advanced-field" data-clear="'. esc_attr__( 'Clear', 'omnis' ) .'">';
            echo '<input id="' . esc_attr($this->field['id']) . '" name="' . esc_attr($this->field['name']) . '" class="button wpb_vc_param_value color-advanced ' .  esc_attr($this->field['name']) . '" type="text" value="'. esc_attr($this->value) .'" placeholder="'. esc_attr__( 'Select Color', 'omnis' ) .'" />';
            // $output .= '<input type="text" class="color-advanced button" value="'. esc_attr( $value ) .'" placeholder="'. esc_attr__( 'Select Color', 'omnis' ) .'" />';
            echo '</div>';
            echo '</div>';
        }

        /**
         * Enqueue Function.
         *
         * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
         *
         * @since       1.0.0
         * @access      public
         * @return      void
         */
        public function enqueue() {

            $extension = ReduxFramework_extension_omnis_color_advanced::getInstance();

            // wp_enqueue_script(
            //     'omnis-ascolorpicker-js', 
            //     get_template_directory_uri() . '/js/vendor/omnis_asColorPicker.js', 
            //     array( 'jquery' ),
            //     time(),
            //     true
            // );
            wp_enqueue_script(
                'omnis-field-color-advanced-js', 
                $this->extension_url . 'field_omnis_color_advanced.js', 
                array( 'jquery', 'omnis-ascolorpicker-js' ),
                time(),
                true
            );

            wp_enqueue_style(
                'omnis-field-color-advanced-css', 
                $this->extension_url . 'field_omnis_color_advanced.css',
                time(),
                true
            );
        
        }
 
        
    }
}
