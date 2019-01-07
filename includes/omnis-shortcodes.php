<?php 

// [omnis_title]
function omnis_shortcode_title( $atts ) {
    global $post;
    $omnis_options = (function_exists('omnis_opts')) ? omnis_opts() : ''; 
    
    $atts = shortcode_atts( array(
        'anchor' => 'false',
        'class' => '',
        'force' => 'false'
    ), $atts );
    
    extract($atts);
    $_title = '';
    $output = '';

    if (is_singular() || is_page()) {
        $_title = (!empty($omnis_options['post_omnis__page-title-custom'])) ? $omnis_options['post_omnis__page-title-custom'] : get_the_title();
    } else if (is_archive()) {
        $_title = esc_html__( 'Archive', 'omnis' );
    } else if (is_tag()) {
        $_title = esc_html__( 'Tag', 'omnis' );
    } else if (is_author()) {
        $_title = esc_html(get_the_author_meta('display_name', $post->post_author));
    } else if (is_search()) {
        $_title = esc_html__( 'Search', 'omnis' );
    }

    if ($force == 'true' && !is_admin()) {
        $_title = get_the_title();
    }

    $_custom_url = get_post_meta(get_the_ID(), 'post_omnis__post-custom-url', true);
    $_custom_url = (filter_var($_custom_url, FILTER_VALIDATE_URL) !== false) ? $_custom_url : false;
    $_post_url = ($_custom_url && in_the_loop()) ? $_custom_url : get_permalink();

    $_shortcode_classes = array('post-meta--title');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $output = '';    
    if (!empty($_title) && !is_admin()) {
        $output = '<span class="'. esc_attr($_shortcode_classes) .'">';
        $output .= ($anchor == 'true') ? '<a href="'. esc_url($_post_url) .'">' : '';
        $output .= wp_kses_post($_title);
        $output .= ($anchor == 'true') ? '</a>' : '';
        $output .= '</span>';
    }

    return apply_filters( 'omnis_core_filter__shortcode_title_output', $output );
    
}
add_shortcode( 'omnis_title', 'omnis_shortcode_title' );

// [omnis_subtitle]
function omnis_shortcode_subtitle( $atts ) {   
    $atts = shortcode_atts( array(
        'class' => '',
    ), $atts );
    
    extract($atts);

    $_shortcode_classes = array('post-meta--subtitle');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $omnis_options = (function_exists('omnis_opts')) ? omnis_opts() : '';
    $_subtitle = (!empty($omnis_options['post_omnis__page-subtitle'])) ? $omnis_options['post_omnis__page-subtitle'] : '';
    $output = ($_subtitle) ? '<div class="'. esc_attr($_shortcode_classes) .'">'. wp_kses_post(wpautop($_subtitle)) .'</div>' : false;

    return apply_filters( 'omnis_core_filter__shortcode_subtitle_output', $output );
}
add_shortcode( 'omnis_subtitle', 'omnis_shortcode_subtitle' );

// [omnis_permalink]
function omnis_shortcode_permalink( $atts ) {    
    $atts = shortcode_atts( array(
        'title' => esc_html__('Read more', 'omnis'),
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--permalink');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $_custom_url = get_post_meta(get_the_ID(), 'post_omnis__post-custom-url', true);
    $_custom_url = (filter_var($_custom_url, FILTER_VALIDATE_URL) !== false) ? $_custom_url : false;
    $_post_url = ($_custom_url && in_the_loop()) ? $_custom_url : get_permalink();

    $output = '<span class="'. esc_attr($_shortcode_classes) .'"><a href="'. esc_url($_post_url) .'">'. esc_html($title) .'</a></span>';

    return apply_filters( 'omnis_core_filter__shortcode_permalink_output', $output );
    
}
add_shortcode( 'omnis_permalink', 'omnis_shortcode_permalink' );

// [omnis_comments_area]
function omnis_shortcode_comments_area( $atts ) {    
    $atts = shortcode_atts( array(
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('comments-area');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);
    
    $output = '';

    if ((is_singular() || is_page()) && comments_open()) {
        $output = '<div class="'. esc_attr($_shortcode_classes) .'" id="comments">';
        ob_start();
        comments_template('', true);
        $output .= ob_get_clean();
        $output .= '</div> <!-- end comments-area -->';
    }
    
    return apply_filters( 'omnis_core_filter__shortcode_comments_area_output', $output );
}
add_shortcode( 'omnis_comments_area', 'omnis_shortcode_comments_area' );

// [omnis_content]
function omnis_shortcode_content( $atts ) {
    $atts = shortcode_atts( array(
        'content_behavior' => '',
    ), $atts );

    return '<div class="loprd-content"></div>';
}
add_shortcode( 'omnis_content', 'omnis_shortcode_content' );

// [omnis_cats]
function omnis_shortcode_meta_cats( $atts ) {
    $atts = shortcode_atts( array(
        'separator' => apply_filters( 'omnis_filter__cats_separator', ' - '),
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--cats');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $taxonomy = get_object_taxonomies(get_post_type(get_the_ID()));
    $taxonomy_categories = preg_grep(apply_filters( 'omnis_filter__taxonomy_category_name', '/(cat|category)/i' ), $taxonomy);
    $taxonomy_category = (!empty(reset($taxonomy_categories))) ? reset($taxonomy_categories) : '';

    $output = '';
    $tax_output = array();

    if ($taxonomy_category) {
        $taxonomies = get_the_terms(get_the_ID(), apply_filters('omnis_filter__taxonomy_category_term', $taxonomy_category));

        if ($taxonomies) {
            foreach ($taxonomies as $taxo) {
                $taxo = '<a href="'. get_term_link( $taxo ) .'">'. esc_html($taxo->name) .'</a>';
                $tax_output[] = $taxo;
            }

            $output = ($taxonomies) ? '<span class="'. esc_attr($_shortcode_classes) .'">'.implode($separator, $tax_output).'</span>' : '';
        }
    }

    return apply_filters( 'omnis_core_filter__shortcode_cats_output', $output );
}
add_shortcode( 'omnis_cats', 'omnis_shortcode_meta_cats' );

// [omnis_tags]
function omnis_shortcode_meta_tags( $atts ) { 

    $omnis_options = (function_exists('omnis_opts')) ? omnis_opts() : '';

    $atts = shortcode_atts( array(
        'separator' => apply_filters( 'omnis_filter__tags_separator', ', '),
        'btn' => 'true',
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--tags');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes[] = ($btn == 'true') ? 'tags-btn' : 'tags-simple';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $taxonomy = get_object_taxonomies(get_post_type(get_the_ID()));
    $taxonomy_tags = preg_grep(apply_filters( 'omnis_filter__taxonomy_category_name', '/(tag)/i' ), $taxonomy);
    $taxonomy_tag = (!empty(reset($taxonomy_tags))) ? reset($taxonomy_tags) : '';

    $_tax_anchor_classes = array('tags-anchor');

    $_button_args = array(
        'color' => 'btn-light',
        'size' => 'btn-xs',
    );

    if (function_exists('omnis_button_classes')) {
        $_tax_anchor_classes[] = ($btn == 'true') ? omnis_button_classes($_button_args) : '';
    }

    $output = '';
    $tax_output = array();

    if ($btn == 'true') {
        $separator = '';
    }

    $_tax_anchor_classes = implode(' ', $_tax_anchor_classes);

    if ($taxonomy_tag) {
        $taxonomies = get_the_terms(get_the_ID(), apply_filters('omnis_filter__taxonomy_tag_term', $taxonomy_tag));

        if ($taxonomies) {
            foreach ($taxonomies as $taxo) {
                $taxo = '<a class="'. esc_attr($_tax_anchor_classes) .'" href="'. esc_url(get_term_link( $taxo )) .'">'. esc_html($taxo->name) .'</a>';
                $tax_output[] = $taxo;
            }

            $output = ($taxonomies) ? '<span class="'. esc_attr($_shortcode_classes) .'">'.implode($separator, $tax_output).'</span>' : '';
        }
    }

    return apply_filters( 'omnis_core_filter__shortcode_tags_output', $output );
}
add_shortcode( 'omnis_tags', 'omnis_shortcode_meta_tags' );

// [omnis_date]
function omnis_shortcode_date( $atts ) {
    global $post;
    $atts = shortcode_atts( array(
        'time' => 'false',
        'anchor' => 'true',
        'ago' => 'false',
        'prepend' => '',
        'append' => '',
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--date');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $_custom_url = get_post_meta(get_the_ID(), 'post_omnis__post-custom-url', true);
    $_custom_url = (filter_var($_custom_url, FILTER_VALIDATE_URL) !== false) ? $_custom_url : false;
    $_post_url = ($_custom_url && in_the_loop()) ? $_custom_url : get_permalink();

    $date_format = get_option('date_format');
    if ($time === 'true') {
        $date_separator = esc_html__('\a\t', 'omnis');
        $date_format .= ' '. apply_filters( 'omnis_filter__date_separator', $date_separator ) .' '. get_option('time_format');
    }

    $_date_standard = get_the_time($date_format, $post->ID);
    $_date_human = apply_filters('omnis_filter__human_date_format', 
        human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) )
    );

    $__ago_title = ($ago === 'true') ? 'title="'. esc_attr( $_date_standard ) .'"' : '';

    $output = '<span class="'. esc_attr($_shortcode_classes) .'" '. $__ago_title .'>';
    $output .= ($anchor === 'true') ? '<a href="'. esc_url($_post_url) .'">' : '';
    $output .= ($prepend) ? esc_html( $prepend ) : '';
    $output .= ($ago === 'true') ? $_date_human : $_date_standard;
    if ($ago === 'true' && $append == false) {
        $output .= ($append) ? esc_html( $append ) : esc_html__( ' ago', 'omnis' );
    } else {
        $output .= ($append) ? esc_html( $append ) : '';
    }
    $output .= ($anchor === 'true') ? '</a>' : '';
    $output .= '</span>';
    
    return apply_filters( 'omnis_core_filter__shortcode_tags_output', $output );
}
add_shortcode( 'omnis_date', 'omnis_shortcode_date' );

// [omnis_comments]
function omnis_shortcode_comments( $atts ) {
    global $post;

    $atts = shortcode_atts( array(
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--comments');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    if (comments_open() && !post_password_required()) {
        $comments_count = get_comment_count($post->ID);
        $output = '<span class="'. esc_attr($_shortcode_classes) .'"><a href="'. esc_url(get_comments_link($post->ID)) .'">Comments: '. esc_html($comments_count['total_comments']) .' </a></span>';
    } else {
        $output = '';
    }

    return apply_filters( 'omnis_core_filter__shortcode_comments_output', $output );
}
add_shortcode( 'omnis_comments', 'omnis_shortcode_comments' );

// [omnis_author]
// optional attr anchor="false"
function omnis_shortcode_author( $atts ) {
    global $post;
    $atts = shortcode_atts( array(
        'anchor' => 'true',
        'avatar' => 'true',
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--author');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $output = '<span class="'. esc_attr($_shortcode_classes) .'">';
    if ($avatar == 'true') {
        $output .= get_avatar($post->post_author, 150);
    }
    if ($anchor == 'true') {
	    $output .= '<a href="'. esc_url(get_author_posts_url($post->post_author)) .'">';
    }
    $output .= esc_html(get_the_author_meta('display_name', $post->post_author));
    if ($anchor == 'true') {
	    $output .= '</a>';
    }
    $output .= '</span>';

    return apply_filters( 'omnis_core_filter__shortcode_author_output', $output );
}
add_shortcode( 'omnis_author', 'omnis_shortcode_author' );


// [omnis_author_meta]
function omnis_shortcode_author_meta( $atts ) {
    global $post;
    $atts = shortcode_atts( array(
        'field' => 'description',
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('omnis-author-meta');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $output = '';

    if (!empty(get_the_author_meta( $field, $post->post_author ))) {
        $output .= '<div class="'. esc_attr($_shortcode_classes) .'">';
        $output .= wp_kses_post(wpautop(get_the_author_meta( $field, $post->post_author )));
        $output .= '</div>';
    }

    return apply_filters( 'omnis_core_filter__shortcode_meta_output', $output );
}
add_shortcode( 'omnis_author_meta', 'omnis_shortcode_author_meta' );

// [omnis_avatar]
function omnis_shortcode_avatar( $atts ) {
    global $post;
    $atts = shortcode_atts( array(
        'size' => 150,
        'anchor' => 'true',
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--author-avatar custom-size');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $output = '<span class="'. esc_attr($_shortcode_classes) .'">';
    if ($anchor == 'true') {
	    $output .= '<a class="anchor-w-content" href="'. esc_url(get_author_posts_url($post->post_author)) .'">';
    }
    $output .= get_avatar($post->post_author, $size);    
    if ($anchor == 'true') {
	    $output .= '</a>';
    }
    $output .= '</span>';

    return apply_filters( 'omnis_core_filter__shortcode_avatar_output', $output );
}
add_shortcode( 'omnis_avatar', 'omnis_shortcode_avatar' );

// [omnis_current_year]
function omnis_shortcode_current_year( $atts ) {
	return date('Y');
}
add_shortcode( 'omnis_current_year', 'omnis_shortcode_current_year' );

// [omnis_site_info]
function omnis_shortcode_site_info( $atts ) {
    $atts = shortcode_atts( array(
        'show' => 'name',
    ), $atts );
	$output = get_bloginfo($atts['show']);
	
    return apply_filters( 'omnis_core_filter__shortcode_site_info_output', $output );
}
add_shortcode( 'omnis_site_info', 'omnis_shortcode_site_info' );

// [omnis_theme_info]
function omnis_shortcode_theme_info( $atts ) {
    $atts = shortcode_atts( array(
        'show' => 'name',
    ), $atts );
	$get_theme = wp_get_theme();
    $output = $get_theme->$atts['show'];
    
    return apply_filters( 'omnis_core_filter__shortcode_theme_info_output', $output );
}
add_shortcode( 'omnis_theme_info', 'omnis_shortcode_theme_info' );

// [omnis_reading_time]
function omnis_shortcode_reading_time( $atts ) {
    global $post;
    $atts = shortcode_atts( array(
        'prepend' => '',
        'class' => ''
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('post-meta--reading-time');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $prepend = ($prepend) ? esc_html($prepend) : '';

    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = $word_count / 200;
    $time = ceil($readingtime);
    $time_output = '';
    if ($readingtime < 0.6) {
    	$time_output = esc_html__( '< 1 min', 'omnis' );
    } else if ($readingtime >= 0.6 && $readingtime < 1.1) {
    	$time_output = esc_html__( '1 min', 'omnis' );
    } else if ($readingtime >= 1.1 && $readingtime < 4) {
    	$time_output = $time . ' ' . esc_html__( 'min', 'omnis' );
    } else {
    	$time_output = $time . ' ' . esc_html__( 'min', 'omnis' );
    } 
    $output = '<span class="'. esc_attr($_shortcode_classes) .'">'. esc_html($prepend) . $time_output .'</span>';

    return apply_filters( 'omnis_core_filter__shortcode_reading_time_output', $output );
}
add_shortcode( 'omnis_reading_time', 'omnis_shortcode_reading_time' );

// [omnis_prevnext]
function omnis_shortcode_prevnext( $atts ) {
    $atts = shortcode_atts( array(
        'layout' => 'horizontal',
        'alignment' => 'left',
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('prevnext');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes[] = ($layout) ? 'prevnext--'. esc_attr($layout) : 'prevnext--horizontal';
    $_shortcode_classes[] = ($alignment) ? 'prevnext--align-'. esc_attr($alignment) : 'prevnext--align-left';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    wp_enqueue_script('tooltipster');

    $next_post = get_next_post();
    $previous_post = get_previous_post(); 

    $output = '';

    if ($next_post || $previous_post) {
        $output = '<div class="'. esc_attr($_shortcode_classes) .'"><ul class="prevnext__wrapper">';
        $output .= '<li class="prevnext__prev">';
        if ($previous_post) {
            $image_id = get_post_thumbnail_id( $previous_post->ID );
            $image_url = wp_get_attachment_image_src( $image_id, 'thumbnail');
            $output .= '<span class="prevnext__label font-size-small"><a href="'. get_permalink($previous_post->ID) .'">'. esc_html__('Previous', 'creativa') .'</a></span>';
            $output .= '<h4 class="prevnext__title">';
            $output .= '<a href="'. get_permalink($previous_post->ID) .'" data-tooltip-content=".tooltip-prev">';
            $output .= wp_kses_post($previous_post->post_title);
            $output .= '</a>';
            $output .= '</h4>';
            $output .= ($image_id) ? '<div class="prevnext__thumb tooltip-prev"><img src="'. esc_url($image_url[0]) .'" alt=""></div>' : '';
        }
        $output .= '</li>';
        $output .= '<li class="prevnext__next">';
        if ($next_post) {
            $image_id = get_post_thumbnail_id( $next_post->ID );
            $image_url = wp_get_attachment_image_src( $image_id, 'thumbnail');
            $output .= '<span class="prevnext__label font-size-small"><a href="'. get_permalink($next_post->ID) .'">'. esc_html__('Next', 'creativa') .'</a></span>';
            $output .= '<h4 class="prevnext__title">';
            $output .= '<a href="'. get_permalink($next_post->ID) .'" data-tooltip-content=".tooltip-next">';
            $output .= wp_kses_post($next_post->post_title);
            $output .= '</a>';
            $output .= '</h4>';
            $output .= ($image_id) ? '<div class="prevnext__thumb tooltip-next"><img src="'. esc_url($image_url[0]) .'" alt=""></div>' : '';
        }
        $output .= '</li>';
        $output .= '</ul></div>';
    }

    return apply_filters( 'omnis_core_filter__shortcode_prevnext_output', $output );
}
add_shortcode( 'omnis_prevnext', 'omnis_shortcode_prevnext' );

// [omnis_breadcrumbs]
function omnis_shortcode_breadcrumbs( $atts ) {
    $atts = shortcode_atts( array(
        'home' => esc_html__('Home', 'omnis'),
        'blog' => esc_html__('Blog', 'omnis'),
        'archive' => esc_html__('Archive', 'omnis'),
        'search' => esc_html__('Search', 'omnis'),
        'separator' => ' / ',
        'class' => 'omnis-breadcrumbs',
        'element' => 'ul' 
    ), $atts );

    $atts = apply_filters( 'omnis_filter__breadcrumbs_defaults', $atts );

    $output_escaped = get_crumbs($atts);
    
    if (class_exists( 'WooCommerce' )) {
        if (is_shop() || is_product() || is_product_category()) {
            $_woo_args = array();
            if (!empty($atts['separator'])) {
                $_woo_args['delimeter'] = $atts['separator'];
            }
            if (!empty($atts['home'])) {
                $_woo_args['home'] = $atts['home'];
            }
            ob_start();
            woocommerce_breadcrumb($_woo_args);
            $output_escaped = ob_get_clean();
        }
    }
    
    return $output_escaped;
}
add_shortcode( 'omnis_breadcrumbs', 'omnis_shortcode_breadcrumbs' );

// [omnis_price]
function omnis_shortcode_price( $atts ) {
    $atts = shortcode_atts( array(
        'price' => esc_html__('$19.00', 'omnis'),
        'billing' => '',
        'class' => '',
    ), $atts );

    extract($atts);

    $_shortcode_classes = array('omnis-price');
    $_shortcode_classes[] = ($class) ? esc_attr($class) : '';
    $_shortcode_classes = implode(' ', $_shortcode_classes);

    $output = '';

    if (is_singular('product')) {
        $price = true;
    }

    if ($price) {

        $output = '<span class="'. esc_attr($_shortcode_classes) .'">';

        if (is_singular('product')) {
            global $product;

            $price_html = $product->get_price_html();

            $output .= '<span class="omnis-price__price-holder">'. $price_html .'</span>';
        } else {
            $price_c[] = '';

            if (strcspn($price, '0123456789') != strlen($price)) {
                preg_match("/^(\D*)\s*([\d,\.]+)\s*(\D*)$/", $atts['price'], $price_c);
            }
            else {
                $price_c[2] = $price;
            }

            $output .= (!empty($price_c[1])) ? '<span class="omnis-price__addon price-prefix">'. esc_html($price_c[1]) .'</span>' : '';
            $output .=  '<span class="omnis-price__price-holder">'. esc_html( $price_c[2] ) .'</span>';
            $output .= (!empty($price_c[3])) ? '<span class="omnis-price__addon price-suffix">'. esc_html($price_c[3]) .'</span>' : '';
            $output .= ($billing) ? '<span class="omnis-price__billing">'. esc_html($billing) .'</span>' : '';
            $output .= '</span>';
        }
    }

    return apply_filters( 'omnis_core_filter__shortcode_price_output', $output );
}
add_shortcode( 'omnis_price', 'omnis_shortcode_price' );

// [omnis_share]
function omnis_shortcode_share( $atts ) {
    $omnis_options = (function_exists('omnis_opts')) ? omnis_opts() : '';

    $atts = shortcode_atts( array(
        'type' => 'box', // box, list
        'box_text' => '',
        'list_type' => 'icons', // icons, text
        'list_direction' => 'horizontal', // horizontal, vertical
        'list_colors' => 'true',
        'hide' => '',
        'class' => '',
    ), $atts );

    extract($atts);

    if (in_the_loop()) {
        $share_list = array(
            'facebook' => array(
                'name' => esc_html__('Facebook', 'omnis'),
                'share_url' => 'https://www.facebook.com/sharer/sharer.php?u='. esc_url(get_the_permalink()),
            ),
            'twitter' => array(
                'name' => esc_html__('Twitter', 'omnis'),
                'share_url' => 'https://twitter.com/intent/tweet?text='. esc_url(get_the_title()) .' – '. esc_url(wp_get_shortlink()),
            ),
            'pinterest' => array(
                'name' => esc_html__('Pinterest', 'omnis'),
                'share_url' => 'https://pinterest.com/pin/create/button/?url='. esc_url(get_the_permalink()),
            ),
            'reddit' => array(
                'name' => esc_html__('Reddit', 'omnis'),
                'share_url' => 'https://www.reddit.com/submit?url='. esc_url(get_the_permalink()) .'&title=' . esc_url(get_the_title()),
            ),
            'copy-to-clipboard' => array(
                'name' => esc_html__('Copy URL To Clipboard', 'omnis'),
                'share_url' => esc_url(get_the_permalink()),
            ),
            'email' => array(
                'name' => esc_html__('Email', 'omnis'),
                'share_url' => 'mailto:?subject='. esc_url(get_the_permalink()). '&body='. esc_url(get_the_title()).' – '. esc_url(get_the_permalink()),
            ),
        );

        $share_list = apply_filters( 'omnis_filter__shortcode_share_list', $share_list );

        if ($hide) {
            $hide = explode(',', $hide);

            foreach($hide as $hide_share) {
                if (isset($share_list[$hide_share])) {
                    unset($share_list[$hide_share]);
                }
            }
        }

        $output = '';

        $_share_box_classes = array('omnis-share');
        $_share_box_classes[] = ($type == 'list') ? 'omnis-share--list' : 'omnis-share--box';
        $_share_box_classes[] = ($type == 'box') ? 'share-box-hidden' : '';
        $_share_box_classes[] = ($class) ? esc_attr($class) : '';

        $_share_box_list_classes = array('omnis-share__list');
        $_share_box_list_classes[] = ($list_type == 'text') ? 'list-text' : 'list-icons';
        $_share_box_list_classes[] = ($list_direction == 'vertical') ? 'list-vertical' : 'list-horizontal';
        $_share_box_list_classes[] = ($list_colors == 'false') ? '' : 'list-colors';
        $_share_box_list_classes[] = ($type == 'box') ? 'drop-shadow' : '';

        $_share_box_list_anchor_classes = array('omnis-share__anchor');

        $_button_args = array(
            'color' => 'btn-dark',
            'size' => 'btn-xs',
        );

        if (function_exists('omnis_button_classes')) {
            $_share_box_list_anchor_classes[] = omnis_button_classes($_button_args);
        }

        $box_text = ($type == 'box' && $box_text) ? esc_html($box_text) : esc_html__('Share', 'omnis');

        $_share_box_classes = implode(' ', $_share_box_classes);
        $_share_box_list_classes = implode(' ', $_share_box_list_classes);
        $_share_box_list_anchor_classes = implode(' ', $_share_box_list_anchor_classes);

        $output .= '<div class="'. esc_attr($_share_box_classes) .'">';
        $output .= ($type == 'box') ? '<a class="omnis-share__box-anchor" href="#">'. esc_html($box_text) .'</a>' : '';
        $output .= '<div class="omnis-share__box-holder">';
        $output .= '<ul class="'. esc_attr($_share_box_list_classes) .'">';
        foreach ($share_list as $share_key => $share) {
            $_share_name = (!empty($share['name'])) ? $share['name'] : $share_key;
            $_share_url = (!empty($share['share_url'])) ? $share['share_url'] : '#';

            $output .= '<li class="omnis-share__el share-'. esc_attr($share_key) .'">';
            $output .= '<a title="'. esc_attr($_share_name) .'" href="'. esc_url($_share_url) .'" class="'. esc_attr($_share_box_list_anchor_classes) .'" target="_blank" rel="noopener noreferrer">'. esc_html($_share_name) .'</a>';
            $output .= '</li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
        $output .= '</div>';

        return apply_filters( 'omnis_core_filter__shortcode_share_output', $output );
    }

}
add_shortcode( 'omnis_share', 'omnis_shortcode_share' );




