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
if( !class_exists( 'ReduxFramework_omnis_fields' ) ) {

    /**
     * Main ReduxFramework_omnis_fields class
     *
     * @since       1.0.0
     */
    class ReduxFramework_omnis_fields extends ReduxFramework {

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
            $defaults = array(
                'fields' => array(),
            );
            $this->field = wp_parse_args( $this->field, $defaults );

            // $defaults = array(
            //     'fields' => array(),
            // );
            // $this->value = wp_parse_args( $this->value, $defaults );

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
            echo '<div class="redux-typography-container">';

            // var_dump($this->field);
            // var_dump($this->value);

            $fields = (isset($this->field['fields']) && !empty($this->field['fields'])) ? $this->field['fields'] : '';

            if ($fields) {
                foreach ($fields as $field_id => $field) {

                    $field_type = (isset($field['type'])) ? $field['type'] : '';
                    $field_label = (isset($field['label'])) ? $field['label'] : '';
                    $field_class = (isset($field['class'])) ? $field['class'] : '';

                    // if ($field_type == 'title') {
                    //     $input_title = (isset($field['title'])) ? $field['title'] : '';
                    //     echo '<div class="omnis_field omnis_fields_title ' . esc_attr($field_class) . '">';
                    //     echo esc_html($input_title);
                    //     echo '</div>';
                    // }

                    // echo $field;

                    // var_dump($this->value);

                    $get_value = (isset($this->value[$field_id])) ? $this->value[$field_id] : '';


                    if ($field_type == 'input') {
                        $input_regex = (isset($field['regex'])) ? $field['regex'] : '';
                        $input_prepend = (isset($field['prepend'])) ? $field['prepend'] : '';
                        $input_append = (isset($field['append'])) ? $field['append'] : '';
                        $input_placeholder = (isset($field['placeholder'])) ? $field['placeholder'] : esc_html__( 'Default', 'omnis' );;
                        echo '<div class="omnis_field omnis_fields_input ' . esc_attr($field_class) . '">';
                        if ($field_label) {
                            echo '<label>' . $field_label . '</label>';
                        }
                        echo '<div class="omnis-input-wrapper">';
                        if ($input_prepend && strpos($field_class, 'input-prepend') !== false) {
                            $check_icon = (strpos($input_prepend, 'el-')) ? '<i class="'. esc_attr( $input_prepend ) .'"></i>' : esc_html($input_prepend) ;
                            echo '<span class="add-on pre">'. $check_icon .'</span>';
                        }
                        echo '<input type="text" class="omnis_input" title="' . esc_attr($field_label) . '" data-regex="'. esc_attr($input_regex) .'" placeholder="' . esc_attr($input_placeholder) . '" id="' . esc_attr($field_label) . '" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '['. $field_id .']') . '" value="'. esc_attr($get_value) .'" data-value="'. esc_attr($get_value) .'">';
                        if ($input_append && strpos($field_class, 'input-append') !== false) {
                            $check_icon = (strpos($input_append, 'el-')) ? '<i class="'. esc_attr( $input_append ) .'"></i>' : esc_html($input_append) ;
                            echo '<span class="add-on app">'. $check_icon .'</span>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }

                    if ($field_type == 'select') {
                        $select_options = (isset($field['options'])) ? $field['options'] : '';
                        $select2 = (isset($field['select2'])) ? $field['select2'] : '';
                        if ( $select_options ) {
                            echo '<div class="omnis_field omnis_fields_select ' . esc_attr($field_class) . '">';
                            if ( $select2 ) { // if there are any let's pass them to js
                                $select2_params = json_encode( $select2 );
                                $select2_params = htmlspecialchars( $select2_params, ENT_QUOTES );
                                echo '<input type="hidden" class="select2_params" value="' . $select2_params . '">';
                            }
                            if ($field_label) {
                                echo '<label>' . $field_label . '</label>';
                            }
                            echo '<select data-placeholder="' . esc_attr($field_label) . '" class="omnis_select" id="' . esc_attr($field_label) . '" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '['. $field_id .']') . '" value="'. esc_attr($get_value) .'" data-value="'. esc_attr($get_value) .'" >';

                            $values = $select_options;

                            foreach ( $values as $k => $v ) {
                                echo '<option value="' . $k . '" ' . selected( esc_attr($get_value), $k, false ) . '>' . ucfirst( $v ) . '</option>';
                            }

                            echo '</select></div>';
                        }
                    }

                    if ($field_type == 'color') {
                        // $field_id = $this->field['id'];

                        $allow_empty = (isset($field['allow_empty'])) ? json_encode($field['allow_empty']) : 'true';

                        $color_alpha_default = (isset($this->value[$field_id.'-alpha'])) ? $this->value[$field_id.'-alpha'] : '';
                        $color_rgba_default = (isset($this->value[$field_id.'-rgba'])) ? $this->value[$field_id.'-rgba'] : '';

                        // Color picker container
                        echo '<div
                              class="omnis_field omnis_fields_color ' . $field_class . '"
                              data-id="' . $field_id . '"
                              data-allow-empty="'. esc_attr($allow_empty) .'"
                          >';

                        if ($field_label) {
                            echo '<label>' . $field_label . '</label>';
                        }
                        // echo '<div
                        //       class="redux-color-rgba-container ' . $field_class . '"
                        //       data-id="' . $field_id . '"
                        //       data-allow-empty="true"
                        //       data-show-input=""
                        //       data-show-initial=""
                        //       data-show-alpha="true"
                        //       data-show-palette=""
                        //       data-show-palette-only=""
                        //       data-show-selection-palette=""
                        //       data-max-palette-size=""
                        //       data-clickout-fires-change="true"
                        //       data-choose-text=""
                        //       data-cancel-text=""
                        //       data-input-text=""
                        //       data-show-buttons=""
                        //       data-palette=""
                        //   >';

                        if ( '' == esc_attr($get_value) || 'transparent' == esc_attr($get_value) ) {
                            $color = '';
                        } else {
                            $color = Redux_Helpers::hex2rgba( esc_attr($get_value), $color_alpha_default );
                        }

                        if ( $color_rgba_default == '' && esc_attr($get_value) != '' ) {
                            $color_rgba_default = Redux_Helpers::hex2rgba( esc_attr($get_value), $color_alpha_default );
                        }


                        echo '<input
                                name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '['. $field_id .']') . '"
                                id="' . $field_id . '-color"
                                class="omnis-color-rgba"
                                type="text"
                                value="'. esc_attr($get_value) .'"
                                data-color="' . $color . '"
                                data-id="' . $field_id . '"
                                data-current-color="' . esc_attr($get_value) . '"
                                data-block-id="' . $field_id . '"
                              />';

                        echo '<input
                                type="hidden"
                                class="omnis-hidden-color"
                                data-id="' . $field_id . '-color"
                                id="' . $field_id . '-color"
                                value="'. esc_attr($get_value) .'"
                              />';

                        // Hidden input for alpha channel
                        echo '<input
                                type="hidden"
                                class="omnis-hidden-alpha"
                                data-id="' . $field_id . '-alpha"
                                name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '['. $field_id .'-alpha]') . '"
                                id="' . $field_id . '-alpha"
                                value="' . $color_alpha_default . '"
                              />';

                        // Hidden input for rgba
                        echo '<input
                                type="hidden"
                                class="redux-hidden-rgba"
                                data-id="' . $field_id . '-rgba"
                                name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '['. $field_id .'-rgba]') . '"
                                id="' . $field_id . '-rgba"
                                value="' . $color_rgba_default . '"
                              />';

                        echo '</div>';
                    }
                }
            }

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

            $extension = ReduxFramework_extension_omnis_fields::getInstance();

            wp_enqueue_script('redux-spectrum-js');

            // if (!wp_style_is('select2-css')) {
            //     wp_enqueue_style( 'select2-css' );
            // }

            wp_enqueue_script(
                'omnis-fields-js',
                $this->extension_url . 'field_omnis_fields.js',
                array( 'jquery', 'redux-spectrum-js', 'select2-js' ),
                time(),
                true
            );

            wp_enqueue_style(
                'omnis-fields-css',
                $this->extension_url . 'field_omnis_fields.css',
                time(),
                true
            );

        }
    }
}
