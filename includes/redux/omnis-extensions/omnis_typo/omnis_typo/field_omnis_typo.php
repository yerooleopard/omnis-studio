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
if( !class_exists( 'ReduxFramework_omnis_typo' ) ) {

    /**
     * Main ReduxFramework_omnis_typo class
     *
     * @since       1.0.0
     */
    class ReduxFramework_omnis_typo extends ReduxFramework {
    
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
                'fonts'           => array(),
                'font-weight'     => array(),
                'font-size'       => false,
                'line-height'     => false,
                'letter-spacing'  => false,
                'text-transform'  => false,
                'placeholder'     => false,
            );

            $this->field = wp_parse_args( $this->field, $defaults );     
            $defaults_def = array(
                'font-family'     => '',
                'google-font'     => '',
                'font-weight'     => '',
                'font-size'       => '',
                'line-height'     => '',
                'letter-spacing'  => '',
                'text-transform'  => '',
                'font-style'     => '',
            );
            $this->value = wp_parse_args( $this->value, $defaults_def );   

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
            echo '<div class="redux-typography-container">';

            if ( empty( $this->field['fonts'] ) ) {
                $this->field['fonts'] = array();
            }
            $fonts = $this->field['fonts'];

            if ( empty( $this->field['font-weight'] ) ) {
                $this->field['font-weight'] = array();
            }
            $font_weights = (!empty($this->field['font-weight'])) ? $this->field['font-weight'] : '';
            $text_transform = (!empty($this->field['text-transform'])) ? $this->field['text-transform'] : '';
            $font_style = (!empty($this->field['font-style'])) ? $this->field['font-style'] : '';

            if ( isset( $this->field['select2'] ) ) { // if there are any let's pass them to js
                $select2_params = json_encode( $this->field['select2'] );
                $select2_params = htmlspecialchars( $select2_params, ENT_QUOTES );

                echo '<input type="hidden" class="select2_params" value="' . $select2_params . '">';
            }

            $placeholder = (!empty($this->field['placeholder'])) ? $this->field['placeholder'] : esc_attr__( 'Default', 'omnis' );

            /* Font Family */
            if ( $fonts ) {
                echo '<div class="select_wrapper typography-transform tooltip" original-title="' . esc_html__( 'Font Family', 'omnis' ) . '">';
                echo '<label>' . esc_html__( 'Font Family', 'omnis' ) . '</label>';
                echo '<select data-placeholder="' . esc_html__( 'Font Family', 'omnis' ) . '" class="omnis-typo-family redux-typography redux-typography-family ' . esc_attr($this->field['class']) . '" original-title="' . esc_html__( 'Font Family', 'omnis' ) . '"  id="' . esc_attr($this->field['id']) . '-transform" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '[font-family]') . '" data-value="' . esc_attr($this->value['font-family']) . '" data-id="' . esc_attr($this->field['id']) . '" >';

                echo '<optgroup label="'. esc_attr__( 'Theme Fonts', 'omnis' ) .'">';
                $values = $fonts;

                foreach ( $values as $k => $v ) {
                    echo '<option value="' . $k . '" ' . selected( esc_attr($this->value['font-family']), $v, false ) . '>' . ucfirst( $v ) . '</option>';
                }
                echo '</optgroup>';

                if (isset($this->field['google']) && $this->field['google'] === true ) {
                    $google_fonts = omnis_googleFonts();
                    echo '<optgroup label="Google">';
                    if ($google_fonts) {
                        foreach ($google_fonts as $k => $font) {
                            echo '<option value="' . $font['family'] . '" ' . selected( esc_attr($this->value['font-family']), $font['family'], false ) . '>' . ucfirst( $font['family'] ) . '</option>';
                        }
                    }
                    echo '</optgroup>';
                } 

                echo '</select></div>';

                if (isset($this->field['google']) && $this->field['google'] === true ) {
                    echo '<input type="hidden" class="omnis-typo-google-enable" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '[google-font]') . '" value="'. esc_attr($this->value['google-font']) .'">';
                }
            }

            /* Font Weight */
            if ( $font_weights ) {
                echo '<div class="select_wrapper typography-transform tooltip" original-title="' . esc_html__( 'Font Weight', 'omnis' ) . '">';
                echo '<label>' . esc_html__( 'Font Weight', 'omnis' ) . '</label>';
                echo '<select data-placeholder="' . esc_html__( 'Font Weight', 'omnis' ) . '" class="omnis-typo-select redux-typography redux-typography-styles ' . esc_attr($this->field['class']) . '" original-title="' . esc_html__( 'Font Weight', 'omnis' ) . '"  id="' . esc_attr($this->field['id']) . '-transform" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '[font-weight]') . '" data-value="' . esc_attr($this->value['font-weight']) . '" data-id="' . esc_attr($this->field['id']) . '" >';
                // echo '<option value=""></option>';

                $values = $font_weights;

                foreach ( $values as $k => $v ) {
                    echo '<option value="' . $k . '" ' . selected( esc_attr($this->value['font-weight']), $k, false ) . '>' . ucfirst( $v ) . '</option>';
                }

                echo '</select></div>';
            }


            $unit = 'px';

            /* Font Size */
            if ( isset($this->field['font-size']) && $this->field['font-size'] != false ) {
                echo '<div class="input_wrapper font-size redux-container-typography">';
                echo '<label>' . esc_html__( 'Font Size', 'omnis' ) . '</label>';
                echo '<input type="text" class="span2 redux-typography mini typography-input omnis-typo-size ' . esc_attr($this->field['class']) . '" title="' . esc_html__( 'Font Size', 'omnis' ) . '" placeholder="' . esc_attr($placeholder) . '" id="' . esc_attr($this->field['id']) . '-size" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '[font-size]') . '" value="' . esc_attr($this->value['font-size']) . '" data-value="' . esc_attr($this->value['font-size']) . '">';
                echo '</div>';
            }

            /* Line Height */
            if ( isset($this->field['line-height']) && $this->field['line-height'] != false ) {
                echo '<div class="input_wrapper line-height redux-container-typography">';
                echo '<label>' . esc_html__( 'Line Height', 'omnis' ) . '</label>';
                echo '<input type="text" class="span2 redux-typography redux-typography-size mini typography-input omnis-typo-size ' . esc_attr($this->field['class']) . '" title="' . esc_html__( 'Line Height', 'omnis' ) . '" placeholder="' . esc_attr($placeholder) . '" id="' . esc_attr($this->field['id']) . '-size" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '[line-height]') . '" value="' . esc_attr($this->value['line-height']) . '" data-value="' . esc_attr($this->value['line-height']) . '">';
                echo '</div>';
            }

            /* Letter Spacing */
            if ( isset($this->field['letter-spacing']) && $this->field['letter-spacing'] != false ) {
                echo '<div class="input_wrapper letter-spacing redux-container-typography">';
                echo '<label>' . esc_html__( 'Letter Spacing', 'omnis' ) . '</label>';
                echo '<input type="text" class="span2 redux-typography redux-typography-size mini typography-input omnis-typo-size ' . esc_attr($this->field['class']) . '" title="' . esc_html__( 'Letter Spacing', 'omnis' ) . '" placeholder="' . esc_attr($placeholder) . '" id="' . esc_attr($this->field['id']) . '-size" name="' . esc_attr($this->field['name'] . $this->field['name_suffix']) . '[letter-spacing]' . '" value="' . esc_attr($this->value['letter-spacing']) . '" data-value="' . esc_attr($this->value['letter-spacing']) . '">';
                echo '</div>';
            }

            /* Text Transform */
            if ( isset($this->field['text-transform']) && $this->field['text-transform'] != false ) {
                echo '<div class="input_wrapper typography-transform tooltip" original-title="' . esc_html__( 'Text Transform', 'omnis' ) . '">';
                echo '<label>' . esc_html__( 'Text Transform', 'omnis' ) . '</label>';
                echo '<select data-placeholder="' . esc_html__( 'Text Transform', 'omnis' ) . '" class="omnis-typo-select redux-typography redux-typography-transform ' . esc_attr($this->field['class']) . '" original-title="' . esc_html__( 'Text Transform', 'omnis' ) . '"  id="' . esc_attr($this->field['id']) . '-transform" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '[text-transform]') . '" data-value="' . esc_attr($this->value['text-transform']) . '" data-id="' . esc_attr($this->field['id']) . '" >';
                // echo '<option value=""></option>';

                if ($text_transform) {
                    $values = $text_transform;

                    foreach ( $values as $k => $v ) {
                        echo '<option value="' . $k . '" ' . selected( esc_attr($this->value['text-transform']), $k, false ) . '>' . ucfirst( $v ) . '</option>';
                    }
                }

                echo '</select></div>';
            }

            /* Font Style */
            if ( isset($this->field['font-style']) && $this->field['font-style'] != false ) {
                echo '<div class="input_wrapper typography-style tooltip" original-title="' . esc_html__( 'Font Style', 'omnis' ) . '">';
                echo '<label>' . esc_html__( 'Font Style', 'omnis' ) . '</label>';
                echo '<select data-placeholder="' . esc_html__( 'Font Style', 'omnis' ) . '" class="omnis-typo-select redux-typography redux-typography-style ' . esc_attr($this->field['class']) . '" original-title="' . esc_html__( 'Font Style', 'omnis' ) . '"  id="' . esc_attr($this->field['id']) . '-style" name="' . esc_attr($this->field['name'] . $this->field['name_suffix'] . '[font-style]') . '" data-value="' . esc_attr($this->value['font-style']) . '" data-id="' . esc_attr($this->field['id']) . '" >';
                // echo '<option value=""></option>';

                if ($font_style) {
                    $values = $font_style;

                    foreach ( $values as $k => $v ) {
                        echo '<option value="' . $k . '" ' . selected( esc_attr($this->value['font-style']), $k, false ) . '>' . ucfirst( $v ) . '</option>';
                    }
                }

                echo '</select></div>';
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

            $extension = ReduxFramework_extension_omnis_typo::getInstance();

            wp_enqueue_script(
                'omnis-field-typo-js', 
                $this->extension_url . 'field_omnis_typo.js', 
                array( 'jquery' ),
                time(),
                true
            );

            wp_enqueue_style(
                'omnis-field-typo-css', 
                $this->extension_url . 'field_omnis_typo.css',
                time(),
                true
            );
        
        }
 
        
    }
}
