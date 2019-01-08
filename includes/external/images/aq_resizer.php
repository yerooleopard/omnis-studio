<?php

/**
 * Title         : Aqua Resizer
 * Description   : Resizes WordPress images on the fly
 * Version       : 1.2.0
 * Author        : Syamil MJ
 * Author URI    : http://aquagraphite.com
 * License       : WTFPL - http://sam.zoy.org/wtfpl/
 * Documentation : https://github.com/sy4mil/Aqua-Resizer/
 *
 * @param string  $url      - (required) must be uploaded using wp media uploader
 * @param int     $width    - (required)
 * @param int     $height   - (optional)
 * @param bool    $crop     - (optional) default to soft crop
 * @param bool    $single   - (optional) returns an array if false
 * @param bool    $upscale  - (optional) resizes smaller images
 * @uses  wp_upload_dir()
 * @uses  image_resize_dimensions()
 * @uses  wp_get_image_editor()
 *
 * @return str|array
 */

if(!class_exists('Aq_Resize')) {
    class Aq_Resize
    {
        /**
         * The singleton instance
         */
        static private $instance = null;

        /**
         * No initialization allowed
         */
        private function __construct() {}

        /**
         * No cloning allowed
         */
        private function __clone() {}

        /**
         * For your custom default usage you may want to initialize an Aq_Resize object by yourself and then have own defaults
         */
        static public function getInstance() {
            if(self::$instance == null) {
                self::$instance = new self;
            }

            return self::$instance;
        }

        /**
         * Run, forest.
         */
        public function process( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
            // Validate inputs.
            if ( ! $url || ( ! $width && ! $height ) ) return false;

            // Caipt'n, ready to hook.
            if ( true === $upscale ) add_filter( 'image_resize_dimensions', array($this, 'aq_upscale'), 10, 6 );

            // Define upload path & dir.
            $upload_info = wp_upload_dir();
            $upload_dir = $upload_info['basedir'];
            $upload_url = $upload_info['baseurl'];
            
            $http_prefix = "http://";
            $https_prefix = "https://";
            
            /* if the $url scheme differs from $upload_url scheme, make them match 
               if the schemes differe, images don't show up. */
            if(!strncmp($url,$https_prefix,strlen($https_prefix))){ //if url begins with https:// make $upload_url begin with https:// as well
                $upload_url = str_replace($http_prefix,$https_prefix,$upload_url);
            }
            elseif(!strncmp($url,$http_prefix,strlen($http_prefix))){ //if url begins with http:// make $upload_url begin with http:// as well
                $upload_url = str_replace($https_prefix,$http_prefix,$upload_url);      
            }
            

            // Check if $img_url is local.
            if ( false === strpos( $url, $upload_url ) ) return false;

            // Define path of image.
            $rel_path = str_replace( $upload_url, '', $url );
            $img_path = $upload_dir . $rel_path;

            // Check if img path exists, and is an image indeed.
            if ( ! file_exists( $img_path ) or ! getimagesize( $img_path ) ) return false;

            // Get image info.
            $info = pathinfo( $img_path );
            $ext = $info['extension'];
            list( $orig_w, $orig_h ) = getimagesize( $img_path );

            // Get image size after cropping.
            $dims = image_resize_dimensions( $orig_w, $orig_h, $width, $height, $crop );
            $dst_w = $dims[4];
            $dst_h = $dims[5];

            // Return the original image only if it exactly fits the needed measures.
            if ( ! $dims && ( ( ( null === $height && $orig_w == $width ) xor ( null === $width && $orig_h == $height ) ) xor ( $height == $orig_h && $width == $orig_w ) ) ) {
                $img_url = $url;
                $dst_w = $orig_w;
                $dst_h = $orig_h;
            } else {
                // Use this to check if cropped image already exists, so we can return that instead.
                $suffix = "{$dst_w}x{$dst_h}";
                $dst_rel_path = str_replace( '.' . $ext, '', $rel_path );
                $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";

                if ( ! $dims || ( true == $crop && false == $upscale && ( $dst_w < $width || $dst_h < $height ) ) ) {
                    // Can't resize, so return false saying that the action to do could not be processed as planned.
                    return false;
                }
                // Else check if cache exists.
                elseif ( file_exists( $destfilename ) && getimagesize( $destfilename ) ) {
                    $img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
                }
                // Else, we resize the image and return the new resized image url.
                else {

                    $editor = wp_get_image_editor( $img_path );

                    if ( is_wp_error( $editor ) || is_wp_error( $editor->resize( $width, $height, $crop ) ) )
                        return false;

                    $resized_file = $editor->save();

                    if ( ! is_wp_error( $resized_file ) ) {
                        $resized_rel_path = str_replace( $upload_dir, '', $resized_file['path'] );
                        $img_url = $upload_url . $resized_rel_path;
                    } else {
                        return false;
                    }

                }
            }

            // Okay, leave the ship.
            if ( true === $upscale ) remove_filter( 'image_resize_dimensions', array( $this, 'aq_upscale' ) );

            
            // RETINA Support --------------------------------------------------------------->  
            $retina_w = $dst_w*2;
            $retina_h = $dst_h*2;
            
            //get image size after cropping
            $dims_x2 = image_resize_dimensions($orig_w, $orig_h, $retina_w, $retina_h, $crop);
            $dst_x2_w = $dims_x2[4];
            $dst_x2_h = $dims_x2[5];
            
            // If possible lets make the @2x image
            if($dst_x2_h) {
            
                //@2x image url
                $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}@2x.{$ext}";

                //check if retina image exists
                if(file_exists($destfilename) && getimagesize($destfilename)) { 
                    // already exists, do nothing
                } else {
                    // doesnt exist, lets create it
                    $editor = wp_get_image_editor($img_path);
                    if ( ! is_wp_error( $editor ) ) {
                        $editor->resize( $retina_w, $retina_h, $crop );
                        $editor->set_quality( 100 );
                        $filename = $editor->generate_filename( $dst_w . 'x' . $dst_h . '@2x'  );
                        $editor = $editor->save($filename); 
                    }
                }

                $img_url_2x = $this->getRetina($img_url);
            
            }

            // Return the output.
            if ( $single ) {
                // str return.
                $image = $img_url;
            } else {
                // array return.
                $image = array (
                    0 => $img_url,
                    1 => $dst_w,
                    2 => $dst_h,
                    'retina2x' => ($dst_x2_h && $img_url_2x) ? $img_url_2x : false,
                );

            }

            return $image;
        }

        private function getRetina($img_url, $x = '@2x') {
            preg_match('/^(.+)\.([a-z]{3,4})$/i',$img_url,$m);

            if (!empty($m[1]) && !empty($m[2])) {
              return $m[1] . $x.'.'. $m[2];
            }
        }

        /**
         * Callback to overwrite WP computing of thumbnail measures
         */
        function aq_upscale( $default, $orig_w, $orig_h, $dest_w, $dest_h, $crop ) {
            if ( ! $crop ) return null; // Let the wordpress default function handle this.

            // Here is the point we allow to use larger image size than the original one.
            $aspect_ratio = $orig_w / $orig_h;
            $new_w = $dest_w;
            $new_h = $dest_h;

            if ( ! $new_w ) {
                $new_w = intval( $new_h * $aspect_ratio );
            }

            if ( ! $new_h ) {
                $new_h = intval( $new_w / $aspect_ratio );
            }

            $size_ratio = max( $new_w / $orig_w, $new_h / $orig_h );

            $crop_w = round( $new_w / $size_ratio );
            $crop_h = round( $new_h / $size_ratio );

            $s_x = floor( ( $orig_w - $crop_w ) / 2 );
            $s_y = floor( ( $orig_h - $crop_h ) / 2 );

            return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
        }
    }
}





if(!function_exists('aq_resize')) {

    /**
     * This is just a tiny wrapper function for the class above so that there is no
     * need to change any code in your own WP themes. Usage is still the same :)
     */
    function aq_resize( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
        $aq_resize = Aq_Resize::getInstance();
        return $aq_resize->process( $url, $width, $height, $crop, $single, $upscale );
    }
}




if (!function_exists('omnis_image_resize')) {
    function omnis_image_resize( $attachment_id, $width, $height, $crop = true, $single = false ) {
        $path = get_attached_file( $attachment_id );
        if ( ! file_exists( $path ) ) {
            return false;
        }

        $upload    = wp_upload_dir();
        $path_info = pathinfo( $path );
        $base_url  = $upload['baseurl'] . str_replace( $upload['basedir'], '', $path_info['dirname'] );
        
        // Return original if fails
        $_img_url = "{$base_url}/{$path_info['basename']}";
        $_img_width = $_img_height = null;

        $meta = wp_get_attachment_metadata( $attachment_id );
        
        $_img_width = (!empty($meta['width'])) ? $meta['width'] : null;
        $_img_height = (!empty($meta['height'])) ? $meta['height'] : null;

        foreach ( $meta['sizes'] as $key => $size ) {
            if ( $size['width'] == $width && $size['height'] == $height ) {
                $_img_url = "{$base_url}/{$size['file']}";
            }
        }
        
        // Generate new size
        if ($meta['width'] >= $width && $meta['height'] >= $height) {
            $key  = sprintf( 'resized-%dx%d', $width, $height );

            if (empty($meta['sizes'][$key])) {
                $resized = image_make_intermediate_size( $path, $width, $height, $crop );
                if ( $resized && ! is_wp_error( $resized ) ) {
                    // Let metadata know about our new size.
                    $key                 = sprintf( 'resized-%dx%d', $width, $height );
                    $meta['sizes'][$key] = $resized;
                    wp_update_attachment_metadata( $attachment_id, $meta );
                    $_img_url = "{$base_url}/{$resized['file']}";

                    $_img_width = $resized['width'];
                    $_img_height = $resized['height'];
                }
            } else if (!empty($meta['sizes'][$key])) {
                $resized = $meta['sizes'][$key];
                
                $_img_url = "{$base_url}/{$resized['file']}";
                $_img_width = $resized['width'];
                $_img_height = $resized['height'];
            }
            
            $retina_w = intval($_img_width)*2;
            $retina_h = intval($_img_height)*2;

            if ($meta['width'] >= $retina_w && $meta['height'] >= $retina_h) {

                $key_2x  = sprintf( 'resized-%dx%d', $retina_w, $retina_h );

                if (empty($meta['sizes'][$key_2x])) {
                    $resized_x2 = image_make_intermediate_size( $path, $retina_w, $retina_h, $crop );
                    
                    if ( $resized_x2 && ! is_wp_error( $resized_x2 ) ) {
                        // Let metadata know about our new size.
                        $meta['sizes'][$key_2x] = $resized_x2;
                        wp_update_attachment_metadata( $attachment_id, $meta );
                        $_img_url_x2 = "{$base_url}/{$resized_x2['file']}";
                    }
                } else if (!empty($meta['sizes'][$key_2x])) {
                    $resized = $meta['sizes'][$key_2x];
                    
                    $_img_url_x2 = "{$base_url}/{$resized['file']}";
                }
            }
        }
        
        // Return the output.
        if ( $single ) {
            // str return.
            $image = $_img_url;
        } else {
            // array return.
            $image = array (
                0 => $_img_url,
                1 => $_img_width,
                2 => $_img_height,
                'retina2x' => (!empty($_img_url_x2)) ? $_img_url_x2 : false,
            );
        }

        return $image;
    }
}




