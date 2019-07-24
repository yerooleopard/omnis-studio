<?php

add_action( 'vc_load_default_templates_action','omnis_vc_studio_elements' ); // Hook in
 
function omnis_vc_studio_elements() {
  $studio_elements_data = array(
    array(
      'id' => 'counter_blocks_3col_color_bg',
      'name' => 'Counter Blocks 3 Columns w/ Color BG',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/3"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#a6eac8" el_overfow="hidden" css=".vc_custom_1536838144116{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="2.7" decimals="1" counter_typography="size-class:h1-size" suffix="k+"][vc_column_text css=".vc_custom_1536837758044{margin-top: 0px !important;}"]
      <p class="leading-size">+600</p>
      [/vc_column_text][vc_custom_heading heading_text="Happy Customers" heading_container="h5" css=".vc_custom_1536837620853{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#a6c1ea" el_overfow="hidden" css=".vc_custom_1536838170191{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="12.5" decimals="1" counter_typography="size-class:h1-size" suffix="k+"][vc_column_text css=".vc_custom_1536837948111{margin-top: 0px !important;}"]
      <p class="leading-size">+2000</p>
      [/vc_column_text][vc_custom_heading heading_text="Users" heading_container="h5" css=".vc_custom_1536837953779{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#eaa6e0" el_overfow="hidden" css=".vc_custom_1536838163076{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="3.5" decimals="1" counter_typography="size-class:h1-size" suffix="M+"][vc_column_text css=".vc_custom_1536838048725{margin-top: 0px !important;}"]
      <p class="leading-size">+1M</p>
      [/vc_column_text][vc_custom_heading heading_text="Revenue" heading_container="h5" css=".vc_custom_1536838073101{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'counter, colorful',
      'image' => '0.1/counter_blocks_3col_color_bg.jpg',
    ),
    array(
      'id' => 'counter_blocks_3col_white',
      'name' => 'Counter - Blocks - 3 Cols - White BG',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/3"][vc_row_inner row_content_txt_skin="txt--dark" row_background_color="#ffffff" row_shadow="drop-shadow" el_overfow="hidden" css=".vc_custom_1536838747328{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="2.7" decimals="1" counter_typography="size-class:h1-size" suffix="k+" number_color="#a6eac8"][vc_column_text css=".vc_custom_1536837758044{margin-top: 0px !important;}"]
      <p class="leading-size">+600</p>
      [/vc_column_text][vc_custom_heading heading_text="Happy Customers" heading_container="h5" css=".vc_custom_1536837620853{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner row_content_txt_skin="txt--dark" row_background_color="#ffffff" row_shadow="drop-shadow" el_overfow="hidden" css=".vc_custom_1536838757916{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="12.5" decimals="1" counter_typography="size-class:h1-size" suffix="k+" number_color="#a6c1ea"][vc_column_text css=".vc_custom_1536837948111{margin-top: 0px !important;}"]
      <p class="leading-size">+2000</p>
      [/vc_column_text][vc_custom_heading heading_text="Users" heading_container="h5" css=".vc_custom_1536837953779{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner row_content_txt_skin="txt--dark" row_background_color="#ffffff" row_shadow="drop-shadow" el_overfow="hidden" css=".vc_custom_1536838770715{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="3.5" decimals="1" counter_typography="size-class:h1-size" suffix="M+" number_color="#eaa6e0"][vc_column_text css=".vc_custom_1536838048725{margin-top: 0px !important;}"]
      <p class="leading-size">+1M</p>
      [/vc_column_text][vc_custom_heading heading_text="Revenue" heading_container="h5" css=".vc_custom_1536838073101{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'counter',
      'image' => '0.1/counter_blocks_3col_white.jpg',
    ),
    array(
      'id' => 'counter_blocks_4col_color_bg',
      'name' => 'Counter Blocks 4 Columns w/ Color BG',
      'content' => '[vc_row row_columns_gap="quarter" row_rows_gap="quarter"][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#a6eac8" el_overfow="hidden" css=".vc_custom_1536838144116{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="2.7" decimals="1" counter_typography="size-class:h1-alt" suffix="k+"][vc_column_text css=".vc_custom_1536837758044{margin-top: 0px !important;}"]
      <p class="leading-size">+600</p>
      [/vc_column_text][vc_custom_heading heading_text="Happy Customers" heading_container="h5" css=".vc_custom_1536837620853{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#a6c1ea" el_overfow="hidden" css=".vc_custom_1536838170191{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="12.5" decimals="1" counter_typography="size-class:h1-alt" suffix="k+"][vc_column_text css=".vc_custom_1536837948111{margin-top: 0px !important;}"]
      <p class="leading-size">+2000</p>
      [/vc_column_text][vc_custom_heading heading_text="Users" heading_container="h5" css=".vc_custom_1536837953779{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#eaa6e0" el_overfow="hidden" css=".vc_custom_1536838163076{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="3.5" decimals="1" counter_typography="size-class:h1-alt" suffix="M+"][vc_column_text css=".vc_custom_1536838048725{margin-top: 0px !important;}"]
      <p class="leading-size">+1M</p>
      [/vc_column_text][vc_custom_heading heading_text="Revenue" heading_container="h5" css=".vc_custom_1536838073101{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#eaa6a6" el_overfow="hidden" css=".vc_custom_1536838416016{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="1" end_value="60" counter_typography="size-class:h1-alt" suffix="+"][vc_column_text css=".vc_custom_1536838290518{margin-top: 0px !important;}"]
      <p class="leading-size">+30%</p>
      [/vc_column_text][vc_custom_heading heading_text="Our Team" heading_container="h5" css=".vc_custom_1536838305303{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(10,10,10,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'counter, colorful',
      'image' => '0.1/counter_blocks_4col_color_bg.jpg',
    ),
    array(
      'id' => 'counter_blocks_4col_dark',
      'name' => 'Counter Blocks 4 Columns - Dark BG',
      'content' => '[vc_row row_columns_gap="quarter" row_rows_gap="quarter"][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#1a1a1a" el_overfow="hidden" css=".vc_custom_1536838972769{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="2.7" decimals="1" counter_typography="size-class:h1-alt" suffix="k+" number_color="#a6eac8"][vc_column_text css=".vc_custom_1536837758044{margin-top: 0px !important;}"]
      <p class="leading-size">+600</p>
      [/vc_column_text][vc_custom_heading heading_text="Happy Customers" heading_container="h5" css=".vc_custom_1536839022677{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(255,255,255,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#1a1a1a" el_overfow="hidden" css=".vc_custom_1536839108161{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="12.5" decimals="1" counter_typography="size-class:h1-alt" suffix="k+" number_color="#a6c1ea"][vc_column_text css=".vc_custom_1536837948111{margin-top: 0px !important;}"]
      <p class="leading-size">+2000</p>
      [/vc_column_text][vc_custom_heading heading_text="Users" heading_container="h5" css=".vc_custom_1536839073357{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(255,255,255,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#1a1a1a" el_overfow="hidden" css=".vc_custom_1536839096087{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="0.1" end_value="3.5" decimals="1" counter_typography="size-class:h1-alt" suffix="M+" number_color="#eaa6e0"][vc_column_text css=".vc_custom_1536838048725{margin-top: 0px !important;}"]
      <p class="leading-size">+1M</p>
      [/vc_column_text][vc_custom_heading heading_text="Revenue" heading_container="h5" css=".vc_custom_1536839150440{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(255,255,255,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_content_txt_skin="txt--light" row_background_color="#1a1a1a" el_overfow="hidden" css=".vc_custom_1536839120590{border-radius: 5px !important;}"][vc_column_inner][loprd_counter start_value="1" end_value="60" counter_typography="size-class:h1-alt" suffix="+" number_color="#eaa6a6"][vc_column_text css=".vc_custom_1536838290518{margin-top: 0px !important;}"]
      <p class="leading-size">+30%</p>
      [/vc_column_text][vc_custom_heading heading_text="Our Team" heading_container="h5" css=".vc_custom_1536839141371{border-top-width: 1px !important;padding-top: 20px !important;border-top-color: rgba(255,255,255,0.1) !important;border-top-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'counter, dark-bg',
      'image' => '0.1/counter_blocks_4col_dark.jpg',
    ),
    array(
      'id' => 'icons_text_3col_bg-white',
      'name' => 'Icons w/ White BG and Text - 3 Columns',
      'content' => '[vc_row row_columns_gap="double" row_background_color="#fafafa"][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="fas fa-paint-brush" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" animation="from-left" icon_bg_color="#ffffff"][vc_column_text]
      <h4>Web Design.</h4>
      Sed maximus, tellus quis sagittis sagittis, diam neque accumsan neque, sed feugiat risus turpis nec orci. Nullam libero magna, sodales ac neque nec, accumsan mollis lorem.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-keyboard" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" animation="from-left" animation_delay="200" icon_bg_color="#ffffff"][vc_column_text]
      <h4>Web Development.</h4>
      Placerat mauris elementum, mollis ligula. Sed porta, lectus ut bibendum facilisis, purus sapien rutrum erat, congue porttitor tellus justo vel eros.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-user" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" animation="from-left" animation_delay="400" icon_bg_color="#ffffff"][vc_column_text]
      <h4>Web Analytics.</h4>
      Integer cursus dui vel accumsan consequat. Quisque enim urna, convallis a finibus ut, commodo quis felis. Proin rhoncus diam nunc, vel cursus arcu maximus at.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'icon, text',
      'image' => '0.1/icons_text_3col_bg-white.jpg',
    ),
    array(
      'id' => 'icons_text_3col_bg-color',
      'name' => 'Icons w/ Color BG and Text - 3 Columns',
      'content' => '[vc_row row_columns_gap="double"][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-hand-rock" icon_text_skin="txt--light" icon_style="bg" icon_bg_padding_size="3x" icon_bg_color="#a6eac8"][vc_column_text]
      <h4>Ut ac lobortis nulla.</h4>
      Sed maximus, tellus quis sagittis sagittis, diam neque accumsan neque, sed feugiat risus turpis nec orci. Nullam libero magna, sodales ac neque nec, accumsan mollis lorem.[/vc_column_text][vc_button2 title="Read more" button_color="btn-light" button_size="" alignment="left" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-comment" icon_text_skin="txt--light" icon_style="bg" icon_bg_padding_size="3x" icon_bg_color="#a6c1ea"][vc_column_text]
      <h4>Aenean et leo lobortis.</h4>
      Placerat mauris elementum, mollis ligula. Sed porta, lectus ut bibendum facilisis, purus sapien rutrum erat, congue porttitor tellus justo vel eros.[/vc_column_text][vc_button2 title="Read more" button_color="btn-light" button_size="" alignment="left" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="fas fa-key" icon_text_skin="txt--light" icon_style="bg" icon_bg_padding_size="3x" icon_bg_color="#eaa6e0"][vc_column_text]
      <h4>Phasellus euismod a dui ac tincidunt.</h4>
      Integer cursus dui vel accumsan consequat. Quisque enim urna, convallis a finibus ut, commodo quis felis. Proin rhoncus diam nunc, vel cursus arcu maximus at.[/vc_column_text][vc_button2 title="Read more" button_color="btn-light" button_size="" alignment="left" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'icon, text, colorful, button',
      'image' => '0.1/icons_text_3col_bg-color.jpg',
    ),
    array(
      'id' => 'hero_testimonial_bottom-left',
      'name' => 'Hero Testimonial w/ Bg & Gradient Overlay',
      'content' => '[vc_row row_section_padding="padding-side:double" row_section_container_width="stretched" row_container_height_custom="80vh" row_container_alignment_v="bottom" row_content_txt_skin="txt--light" row_background_image_overlay="linear-gradient(0deg, #1a1a1a 20%, transparent 100%)" row_background_image_effect="parallax parallax-v" row_background_image_parallax_level="4" row_background_image_external="https://source.unsplash.com/jEqyV_rumuU/2000x1900"][vc_column width="1/3"][vc_column_text]</p>
      <blockquote>
      <h3>Quisque erat enim, posuere at lorem id, eleifend gravida sem. Phasellus eget purus libero.</h3>
      </blockquote>
      <p><strong>Adam Smith</strong> Art Director[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'hero, dark-bg, testimonial, full-width',
      'image' => '0.1/hero_testimonial_bottom-left.jpg',
    ),
    array(
      'id' => 'tabs_centered-slim',
      'name' => 'Tabs Centered Slim',
      'content' => '[vc_row][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_tabs interval="0" tabs_nav_h_alignment="center"][vc_tab title="Who we are" tab_id="1535984176-1-11"][vc_column_text]
      <p style="text-align: center;">Vestibulum eu pharetra metus. Nulla euismod porttitor erat lacinia imperdiet. Etiam at nibh lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at ullamcorper purus. Nam sed enim vitae velit iaculis faucibus eu at purus. Aliquam sollicitudin iaculis ornare. Ut sit amet cursus quam, ornare pellentesque justo. Maecenas porta augue condimentum nibh fermentum laoreet.</p>
      [/vc_column_text][/vc_tab][vc_tab title="What we do" tab_id="1535984176-2-59"][vc_column_text]
      <p style="text-align: center;">Nullam placerat odio porttitor, luctus quam nec, fermentum purus. Nullam vitae tortor a est lacinia sagittis. Morbi accumsan et lacus eget sollicitudin. Quisque vitae imperdiet massa. Vestibulum rhoncus dui dolor. Quisque porta porttitor nulla sit amet sodales. Donec ante nisl, placerat id erat ut, placerat faucibus justo.</p>
      [/vc_column_text][/vc_tab][vc_tab title="Where we are" tab_id="1535984453722-2-0"][vc_column_text]
      <p style="text-align: center;">Sed ut iaculis tortor, rutrum porttitor felis. Nunc ut tincidunt orci, id varius odio. Nullam gravida mauris elit, sed tempor lectus posuere ut. Aenean eu elementum ex. Etiam dolor tellus, sodales sit amet vehicula luctus, mollis sit amet risus. Aliquam eu ligula vitae elit porttitor aliquam eu sed ex. Vivamus aliquam, est non semper congue, tortor odio blandit sapien, et pellentesque eros ligula nec felis. Praesent sit amet lacus neque. Proin pulvinar blandit felis.</p>
      [/vc_column_text][/vc_tab][/vc_tabs][/vc_column][/vc_row]',
      'category' => 'tabs, text',
      'image' => '0.1/tabs_centered-slim.jpg',
    ),
    array(
      'id' => 'text-side-header_2col_single',
      'name' => 'Text with Side Header',
      'content' => '[vc_row][vc_column width="1/4"][vc_column_text]
      <h4>Our Mission</h4>
      [/vc_column_text][/vc_column][vc_column width="3/4"][vc_column_text]Proin porta magna neque, sit amet ornare nulla mollis in. Vivamus malesuada mauris lectus, sed dictum quam rutrum at.Morbi sagittis urna vitae purus rutrum, et semper nisl ultrices. Ut non odio sed nisi ultricies eleifend. Duis consectetur ullamcorper tortor nec gravida.Suspendisse viverra sed nibh non finibus. Donec in egestas lorem.
      
      Curabitur convallis sapien vel purus semper, sed pharetra leo interdum. In molestie purus vitae urna laoreet, id lobortis lectus consequat.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.1/text-side-header_2col_single.jpg',
    ),
    array(
      'id' => 'text-side-header_2col_two',
      'name' => 'Text with Side Header - Two',
      'content' => '[vc_row][vc_column width="1/4"][vc_column_text]
      <h4>Our Mission</h4>
      [/vc_column_text][/vc_column][vc_column width="3/4"][vc_column_text]Proin porta magna neque, sit amet ornare nulla mollis in. Vivamus malesuada mauris lectus, sed dictum quam rutrum at.Morbi sagittis urna vitae purus rutrum, et semper nisl ultrices. Ut non odio sed nisi ultricies eleifend. Duis consectetur ullamcorper tortor nec gravida.Suspendisse viverra sed nibh non finibus. Donec in egestas lorem.
      
      Curabitur convallis sapien vel purus semper, sed pharetra leo interdum. In molestie purus vitae urna laoreet, id lobortis lectus consequat.[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/4"][vc_column_text]
      <h4>Our Vision</h4>
      [/vc_column_text][/vc_column][vc_column width="3/4"][vc_column_text]Aenean accumsan venenatis blandit. Fusce risus erat, tincidunt non risus quis, luctus tempor lacus. Duis risus neque, porta quis arcu vel, malesuada sodales velit. Aenean ut dictum lectus. Etiam placerat lacus lorem, at pellentesque lectus posuere id. Cras aliquet sed metus at feugiat. Nunc aliquam odio posuere auctor dapibus.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.1/text-side-header_2col_two.jpg',
    ),
    array(
      'id' => 'images21-w-text_3col',
      'name' => 'Images (2:1) with Text',
      'content' => '[vc_row row_columns_gap="none"][vc_column width="1/3"][vc_single_image image_width="1000" image_ratio="2:1" image_external="https://source.unsplash.com/-IXrvHg5iRE/1000x500"][vc_column_text css=".vc_custom_1536157116680{padding-right: 40px !important;}"]</p>
      <h4>Fusce eget viverra neque.</h4>
      <p>Ut id lobortis felis. Vestibulum ultrices ex ac nisi vulputate congue vel in dolor. Sed varius condimentum porta. Nullam nisi est, vestibulum id velit eget, consectetur convallis enim.[/vc_column_text][vc_button2 title="Learn more" button_color="btn-light" button_size="" alignment="left" link="url:%23|||"][/vc_column][vc_column width="1/3"][vc_single_image image_width="1000" image_ratio="2:1" image_external="https://source.unsplash.com/xOLhD-qfoRI/1000x500"][vc_column_text css=".vc_custom_1536157153260{padding-right: 40px !important;}"]</p>
      <h4>Cras in convallis diam.</h4>
      <p>Donec magna ipsum, placerat at justo quis, vulputate faucibus mauris.[/vc_column_text][vc_button2 title="Learn more" button_color="btn-light" button_size="" alignment="left" link="url:%23|||"][/vc_column][vc_column width="1/3"][vc_single_image image_width="1000" image_ratio="2:1" image_external="https://source.unsplash.com/G4fPRLboREI/1000x500"][vc_column_text css=".vc_custom_1536157164704{padding-right: 40px !important;}"]</p>
      <h4>Nam consequat lectus et mattis consectetur.</h4>
      <p>In rhoncus non sem vulputate varius. Integer vel dictum enim. Nulla facilisi. Nam fringilla mi vitae laoreet congue.[/vc_column_text][vc_button2 title="Learn more" button_color="btn-light" button_size="" alignment="left" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'image, text, button',
      'image' => '0.1/images21-w-text_3col.jpg',
    ),
    array(
      'id' => 'testimonial-blocks_offset_2col_bg',
      'name' => 'Testimonial Blocks Offseted - 2 Columns',
      'content' => '[vc_section][vc_row row_section_padding="padding-top:none|padding-bottom:hepta" el_visibility="phone:hidden"][vc_column][/vc_column][/vc_row][vc_row row_section_padding="padding-bottom:triple|padding-top:triple" row_container_width_custom="1720" row_columns_gap="triple" row_rows_gap="triple" row_background_image_effect="parallax parallax-v" row_background_image_parallax_level="2" row_background_image_external="https://source.unsplash.com/jU9VAZDGMzs/2000x1400"][vc_column width="1/2" column_advanced_v_offset="desktop:pull-deca-margin|tablet:pull-deca-margin"][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_content_txt_skin="txt--dark" row_background_color="#ffffff" row_shadow="drop-shadow"][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="fas fa-quote-right" alignment="right"][vc_column_text]
      <p class="leading-size">In pharetra, turpis vel rhoncus sagittis, nunc eros venenatis arcu, vel malesuada dui mi dictum diam. Etiam quam velit, fermentum id mollis ut, bibendum vitae nibh.</p>
      <strong>Adam Johnson</strong> Jns.
      
      [/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space empty_height="triple"][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_content_txt_skin="txt--dark" row_background_color="#ffffff" row_shadow="drop-shadow"][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="fas fa-quote-right" alignment="right"][vc_column_text]
      <p class="leading-size">Nullam scelerisque dictum tellus, et bibendum quam malesuada et. Nam quis metus a velit faucibus lobortis.</p>
      <strong>Katie Morrison</strong> Yus\'d Inc.
      
      [/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" column_advanced_v_offset="desktop:pull-nona-margin|tablet:pull-nona-margin"][vc_row_inner el_visibility="phone:hidden"][vc_column_inner][vc_custom_heading heading_text="Testimonials." heading_container="h5"][vc_custom_heading heading_text="Proin porta magna neque.
      Sit amet ornare nulla mollis in." heading_container="h2" css=".vc_custom_1537280433041{margin-top: 20px !important;}"][vc_empty_space empty_height="triple"][/vc_column_inner][/vc_row_inner][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_content_txt_skin="txt--dark" row_background_color="#ffffff" row_shadow="drop-shadow"][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="fas fa-quote-right" alignment="right"][vc_column_text]
      <p class="leading-size">Nam maximus sagittis quam eu pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam ac urna ut lacus varius viverra nec ut leo.</p>
      <strong>Eric Walters</strong> WW Design
      
      [/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]',
      'category' => 'testimonial',
      'image' => '0.1/testimonial-blocks_offset_2col_bg.jpg',
    ),
    array(
      'id' => 'single-images-collage_2col_100_left',
      'name' => 'Single Images Collage - 100% Height',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_columns_gap="none" row_rows_gap="none"  row_force_as_bg="as-background"][vc_column width="1/2"][vc_single_image image_link="full" image_container_width="block" image_container_height="100vh" image_width="1300" image_ratio="1:1" image_external="https://source.unsplash.com/b0XSjnITSoA/1300x1300"][/vc_column][vc_column width="1/2"][vc_single_image image_link="full" image_container_width="block" image_container_height="50vh" image_width="1300" image_ratio="2:1" image_external="https://source.unsplash.com/-Lkcn1IU-tA/1300x650"][vc_single_image image_link="full" image_container_width="block" image_container_height="50vh" image_width="1300" image_ratio="2:1" css=".vc_custom_1536847328167{margin-top: 0px !important;}" image_external="https://source.unsplash.com/nVTvfzmEytM/1300x650"][/vc_column][/vc_row]',
      'category' => 'image, full-width',
      'image' => '0.1/single-images-collage_2col_100_left.jpg',
    ),
    array(
      'id' => 'testimonial_images-collage_2col_fullwidth',
      'name' => 'Testimonial w/ Images Collage',
      'content' => '[vc_row row_section_container_width="stretched" row_column_content_alignment_v="center"][vc_column el_zindex="2" width="1/2" column_advanced_h_offset="desktop:push-double"][vc_column_text]</p>
      <blockquote>
      <h3>Fusce nec nisl eu elit luctus iaculis. Sed erat erat, consectetur vehicula urna non, venenatis fermentum urna. Quisque at nunc quis urna blandit dapibus condimentum non turpis. Integer orci nibh, tristique at ante eu, sollicitudin lobortis tellus.</h3>
      </blockquote>
      <strong>Ed Lando</strong> Msof[/vc_column_text][/vc_column][vc_column el_zindex="1" width="1/2"][vc_single_image image_link="full" image_link_hover="" image_overlay="rgba(255, 255, 255, 0.7)" image_overlay_hover="hover-out" image_width="1300" image_ratio="1:1" el_zindex="1" el_advanced_h_offset="desktop:pull-triple|tablet:pull-triple" image_link_hover_overlay="rgba(214, 214, 214, 0.6)" image_external="https://source.unsplash.com/EQZ1vmGV9iQ/1300x1300"][vc_single_image image_link="full" image_link_hover="" image_alignment="right" image_overlay="rgba(255, 255, 255, 0.7)" image_overlay_hover="hover-on" image_width="500" image_ratio="1:1" el_zindex="2" el_advanced_v_offset="desktop:pull-nona-margin|tablet:pull-deca-margin" image_external="https://source.unsplash.com/c799FLTXm0I/500x500"][/vc_column][/vc_row]',
      'category' => 'testimonial, image, full-width',
      'image' => '0.1/testimonial_images-collage_2col_fullwidth.jpg',
    ),
    array(
      'id' => 'text_2col',
      'name' => 'Text - 2 Columns',
      'content' => '[vc_row row_columns_gap="double" row_rows_gap="single"][vc_column width="1/2"][vc_custom_heading heading_text="About us." heading_container="h5"][vc_custom_heading heading_text="Ut mollis venenatis egestas. Fusce faucibus felis porta, molestie nisl et, posuere massa. Suspendisse ac lobortis diam." heading_container="h2" css=".vc_custom_1537280185039{margin-top: 20px !important;}"][vc_custom_heading heading_text="Sed eu dolor maximus, varius tellus sit amet, venenatis." heading_typography="size-class:leading-size"][/vc_column][vc_column width="1/2"][vc_column_text]Etiam sagittis mattis diam vitae elementum. Duis accumsan pellentesque pellentesque. Etiam vestibulum, ex et hendrerit iaculis, leo felis vulputate dui, vitae vestibulum mauris neque id odio.

      Morbi eget maximus massa. In hac habitasse platea dictumst. Donec orci ante, sodales non nisi vitae, pretium vehicula libero. Nam imperdiet vulputate ante, et gravida sem consectetur nec. Aenean viverra felis id auctor mattis. Vivamus tincidunt malesuada scelerisque.
      
      Vivamus mattis massa eget tincidunt dapibus. Nullam non est purus. Quisque semper tortor ipsum, eget dignissim augue tempor sit amet. Nullam eu risus ac lacus ornare varius. Maecenas ornare eros risus, porta vehicula diam molestie lobortis.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.1/text_2col.jpg',
    ),
    array(
      'id' => 'counter_large_2col',
      'name' => 'Counter Large - 2 Columns',
      'content' => '[vc_row][vc_column width="1/2"][vc_row_inner][vc_column_inner][loprd_counter end_value="60" counter_typography="font-family:Barlow Condensed|google-font:true|font-weight:600|font-size:350|line-height:0.7em" suffix="+" number_color="rgba(10,10,10,0.05)" el_class="omnis-text-one-line"][vc_custom_heading heading_text="Projects we made." heading_container="h3" heading_advanced_v_offset="desktop:pull-single-margin|tablet:pull-single-margin|phone:pull-single-margin" css=".vc_custom_1537271647225{margin-top: 0px !important;}"][vc_custom_heading heading_text="Etiam porta lacinia tincidunt." heading_container="p" heading_h_alignment="inline"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_row_inner][vc_column_inner][loprd_counter end_value="40" counter_typography="font-family:Barlow Condensed|google-font:true|font-weight:600|font-size:350|line-height:0.7em" suffix="+" number_color="rgba(10,10,10,0.05)" el_class="omnis-text-one-line"][vc_custom_heading heading_text="Our happy team." heading_container="h3" heading_advanced_v_offset="desktop:pull-single-margin|tablet:pull-single-margin|phone:pull-single-margin" css=".vc_custom_1537271656501{margin-top: 0px !important;}"][vc_custom_heading heading_text="Nulla feugiat, magna at cursus vulputa." heading_container="p" heading_h_alignment="inline"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'counter',
      'image' => '0.1/counter_large_2col.jpg',
    ),
    array(
      'id' => 'hero-headings_centered',
      'name' => 'Hero Headings - Centered',
      'content' => '[vc_row row_column_alignment_h="center"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_custom_heading heading_text="I am a big feature." heading_container="h5"][vc_custom_heading heading_text="Quisque placerat arcu id lacinia pulvinar." heading_container="h2" heading_typography="size-class:h1-size"][vc_custom_heading heading_text="Quisque placerat arcu id lacinia pulvinar." heading_typography="size-class:leading-size"][vc_text_separator style="wave" separator_size="large" separator_width="small"][/vc_column][/vc_row]',
      'category' => 'hero, titlebar',
      'image' => '0.1/hero-headings_centered.jpg',
    ),
    array(
      'id' => 'hero-headings-alt-size',
      'name' => 'Hero Headings - Default',
      'content' => '[vc_row][vc_column width="2/3"][vc_custom_heading heading_text="I am a quite big feature." heading_container="h5"][vc_custom_heading heading_text="Donec faucibus, mi vitae pulvinar scelerisque, urna velit pharetra tortor." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Pellentesque dictum lobortis enim, non ultrices tortor euismod ut." heading_typography="size-class:leading-size"][vc_text_separator style="wave" separator_size="large" separator_width="small"][/vc_column][/vc_row]',
      'category' => 'hero, titlebar',
      'image' => '0.1/hero-headings-alt-size.jpg',
    ),
    array(
      'id' => 'hero-headings_gradient',
      'name' => 'Hero Headings - Gradient',
      'content' => '[vc_row][vc_column width="5/6"][vc_custom_heading heading_text="Suspendisse neque." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Aliquam sed eros malesuada, bibendum risus at, bibendum turpis. Suspendisse potenti." heading_container="h2" heading_h_alignment="inline" heading_typography="size-class:h1-alt" heading_color="linear-gradient(323deg, #b4e8b8 0%, #b6eae8 100%)" heading_color_backup="#b4e8b8"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]',
      'category' => 'hero, colorful, titlebar',
      'image' => '0.1/hero-headings_gradient.jpg',
    ),
    array(
      'id' => 'hero-headings_stroke',
      'name' => 'Hero Headings - Text Stroke',
      'content' => '[vc_row][vc_column width="5/6"][vc_custom_heading heading_text="We do stuff." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Donec lacinia eros vitae leo semper ullamcorper nulla quis tincidunt purus." heading_container="h2" heading_h_alignment="inline" heading_typography="size-class:h1-alt" heading_color="transparent" heading_color_stroke="#1a1a1a"][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]',
      'category' => 'hero',
      'image' => '0.1/hero-headings_stroke.jpg',
    ),
    array(
      'id' => 'hero-headings_shifted',
      'name' => 'Hero Headings - Shifted',
      'content' => '[vc_section][vc_row row_section_padding="padding-bottom:none"][vc_column][vc_custom_heading heading_text="Suspendisse neque nisl." heading_container="h2" heading_typography="size-class:h1-size"][/vc_column][/vc_row][vc_row row_section_padding="padding-top:single"][vc_column width="5/6" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_text_separator style="zigzag" separator_size="large" separator_width="small"][vc_custom_heading heading_text="Phasellus scelerisque pharetra ex, nec tempor mauris bibendum quis. Donec pharetra sem et enim rhoncus convallis. Ut scelerisque ante eget nunc maximus congue." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][/vc_row][/vc_section]',
      'category' => 'hero, titlebar',
      'image' => '0.1/hero-headings_shifted.jpg',
    ),
    array(
      'id' => 'hero-headings_w-full-width-rounded-image',
      'name' => 'Hero Headings w/ Full Width Rounded Image',
      'content' => '[vc_row row_column_alignment_v="bottom" row_columns_gap="double"][vc_column width="5/12"][vc_custom_heading heading_text="We are omnis." heading_container="h5"][vc_custom_heading heading_text="In aliquet vel felis vitae mattis." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Maecenas lobortis sapien." heading_typography="size-class:leading-size"][/vc_column][vc_column width="7/12"][vc_single_image image_link="full" image_link_hover="opacity" image_container_width="full" image_style="rounded" image_shadow="drop-shadow" image_width="800" image_ratio="1:1" image_external="https://source.unsplash.com/suZ05I3r-fw/800x800"][/vc_column][/vc_row]',
      'category' => 'hero, image, titlebar',
      'image' => '0.1/hero-headings_w-full-width-rounded-image.jpg',
    ),
    array(
      'id' => 'hero-headings_w-full-width-windowed-image',
      'name' => 'Hero Headings w/ Full Width Windowed Image',
      'content' => '[vc_row row_column_alignment_v="center" row_columns_gap="double"][vc_column width="5/12"][vc_custom_heading heading_text="Choose our app." heading_container="h5"][vc_custom_heading heading_text="Phasellus scelerisque pharetra." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Nullam vel placerat tellus aliquam congue elit eros, at bibendum." heading_typography="size-class:leading-size"][/vc_column][vc_column width="7/12"][vc_single_image image_link="full" image_link_hover="opacity" image_container_width="full" image_style="browser" image_shadow="drop-shadow" image_width="1300" image_external="https://source.unsplash.com/l82NzBSYbj0/1300x700"][/vc_column][/vc_row]',
      'category' => 'hero, image',
      'image' => '0.1/hero-headings_w-full-width-windowed-image.jpg',
    ),
    array(
      'id' => 'hero-headings-splited-section_bg-image',
      'name' => 'Hero Headings Splited w/ BG Image',
      'content' => '[vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="85vh" row_container_alignment_v="stretch" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background" row_background_color="rgba(0, 0, 0, 0.03)"][vc_column width="7/12" column_background_image_external="https://source.unsplash.com/vKnRYW-mtek/1300x1300"][vc_empty_space empty_height="_custom" empty_height_custom="height:50vh"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="5/12"][vc_custom_heading heading_text="Biggest Feature." heading_container="h5"][vc_custom_heading heading_text="Donec eleifend justo nunc." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Nulla feugiat, magna at cursus vulputate, erat magna posuere nulla, sed efficitur lectus massa vel felis." heading_typography="size-class:leading-size"][vc_text_separator style="zigzag" separator_size="large" separator_width="small"][vc_button2 title="Read more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'hero, image, full-width, button',
      'image' => '0.1/hero-headings-splited-section_bg-image.jpg',
    ),
    array(
      'id' => 'hero-headings-splited-section_bg-image_colorful',
      'name' => 'Hero Headings Splited Color w/ BG Image',
      'content' => '[vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="85vh" row_container_alignment_v="stretch" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_content_txt_skin="txt--light" row_background_color="#f25037"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="5/12"][vc_custom_heading heading_text="Biggest Feature." heading_container="h5"][vc_custom_heading heading_text="Vivamus pulvinar, nulla in ornare varius." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Nulla feugiat, magna at cursus vulputate, erat magna posuere nulla, sed efficitur lectus massa vel felis." heading_typography="size-class:leading-size"][vc_text_separator style="zigzag" separator_size="large" separator_width="small"  separator_line_color="rgba(255,255,255,0.2)"][vc_button2 title="Read more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][vc_column width="7/12" column_background_image_external="https://source.unsplash.com/J1elbTf7En8/1300x1300"][vc_empty_space empty_height="_custom" empty_height_custom="height:50vh"][/vc_column][/vc_row]',
      'category' => 'hero, image, full-width, colorful, button',
      'image' => '0.1/hero-headings-splited-section_bg-image_colorful.jpg',
    ),
    array(
      'id' => 'hero-headings-splited-section_bg-image_dark',
      'name' => 'Hero Headings Splited Dark w/ BG Image',
      'content' => '[vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="85vh" row_container_alignment_v="stretch" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_content_txt_skin="txt--light" row_background_color="#1a1a1a"][vc_column width="5/12" column_background_image_external="https://source.unsplash.com/zAQoZwidDbs/1300x1300"][vc_empty_space empty_height="_custom" empty_height_custom="height:50vh"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="7/12" el_class="padding-right-quad"][vc_custom_heading heading_text="Biggest Feature." heading_container="h5"][vc_custom_heading heading_text="Sed pharetra ultrices purus, sed dapibus nisi porttitor nec." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Nulla feugiat, magna at cursus vulputate, erat magna posuere nulla, sed efficitur lectus massa vel felis." heading_typography="size-class:leading-size"][vc_text_separator style="zigzag" separator_size="large" separator_width="small" separator_line_color="rgba(255,255,255,0.2)"][vc_button2 title="Read more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'hero, image, full-width, dark-bg, button',
      'image' => '0.1/hero-headings-splited-section_bg-image_dark.jpg',
    ),
    array(
      'id' => 'hero-headings-splited-section_bg-image_gradient-text',
      'name' => 'Hero Headings Gradient Splited w/ BG Image',
      'content' => '[vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="85vh" row_container_alignment_v="stretch" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="7/12" el_class="padding-right-quad"][vc_custom_heading heading_text="Biggest Feature." heading_container="h5"][vc_custom_heading heading_text="Sed fermentum est ac suscipit molestie." heading_container="h2" heading_typography="size-class:h1-alt" heading_color="linear-gradient(296deg, #fecc87 0%, #fd9649 100%)" heading_color_backup="#fecc87"][vc_custom_heading heading_text="Nulla feugiat, magna at cursus vulputate, erat magna posuere nulla, sed efficitur lectus massa vel felis." heading_typography="size-class:leading-size"][vc_text_separator style="zigzag" separator_size="large" separator_width="small"][vc_button2 title="Read more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][vc_column width="5/12" column_background_image_external="https://source.unsplash.com/EhesAwz2wNw/1300x1300"][vc_empty_space empty_height="_custom" empty_height_custom="height:50vh"][/vc_column][/vc_row]',
      'category' => 'hero, image, full-width, dark-bg, button',
      'image' => '0.1/hero-headings-splited-section_bg-image_gradient-text.jpg',
    ),
    array(
      'id' => 'separator-small-thick_row_centered',
      'name' => 'Row Separator - Centered Thick Small',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:none" row_force_as_bg="as-background"][vc_column][vc_text_separator style="zigzag" separator_size="large" separator_width="small" separator_h_alignment="center"][/vc_column][/vc_row]',
      'category' => 'separator',
      'image' => '0.1/separator-small-thick_row_centered.jpg',
    ),
    array(
      'id' => 'text-blocks_3col-w-heading_colorful',
      'name' => 'Text Boxes - Services - 2x3Col',
      'content' => '[vc_row row_columns_gap="double"][vc_column width="1/4"][vc_text_separator style="stripes"][vc_custom_heading heading_text="Donec condimentum ipsum." heading_container="h2" css=".vc_custom_1537199144429{margin-top: 20px !important;}"][/vc_column][vc_column width="3/4"][vc_row_inner row_section_padding="padding-bottom:single" row_column_content_alignment_v="bottom" columns_animation="from-bottom" columns_animation_delay="200"][vc_column_inner column_background_color="transparent" column_shadow="drop-shadow" width="1/3" css=".vc_custom_1537026080244{border-radius: 5px !important;}"][vc_empty_space][vc_column_text]
      <h4>Pellentesque ac nibh et massa maximus ornare.</h4>
      <p class="font-size-small">Sed fermentum est ac suscipit molestie.</p>
      [/vc_column_text][/vc_column_inner][vc_column_inner column_content_txt_skin="txt--light" column_background_color="linear-gradient(0deg, #d8fee1 0%, #bbecde 100%)" column_shadow="drop-shadow" width="1/3" column_advanced_v_offset="desktop:push-single|tablet:push-single" css=".vc_custom_1537027507457{border-radius: 5px !important;}"][vc_empty_space][vc_column_text]
      <h4>Nulla feugiat, magna at cursus vulputat.</h4>
      <p class="font-size-small"><span style="color: rgba(0, 0, 0, 0.45);">Maecenas orci lorem, commodo quis mattis at, lacinia eget risus.</span></p>
      [/vc_column_text][/vc_column_inner][vc_column_inner column_background_color="transparent" column_shadow="drop-shadow" width="1/3" css=".vc_custom_1537026080244{border-radius: 5px !important;}"][vc_empty_space][vc_column_text]
      <h4>Sed quis bibendum mauris.</h4>
      <p class="font-size-small">Nullam accumsan luctus porttitor.</p>
      [/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner row_column_content_alignment_v="bottom" columns_animation="from-bottom" columns_animation_delay="200"][vc_column_inner column_content_txt_skin="txt--light" column_background_color="linear-gradient(0deg, #c7ebfb 0%, #b8cdf2 100%)" column_shadow="drop-shadow" width="1/3" column_advanced_v_offset="desktop:pull-single|tablet:pull-single" css=".vc_custom_1537027496790{border-radius: 5px !important;}"][vc_empty_space][vc_column_text]
      <h4>Aliquam sodales, felis sit amet cursus.</h4>
      <p class="font-size-small"><span style="color: rgba(0, 0, 0, 0.45);">Fusce commodo facilisis nisi, eget ultrices leo mattis vel.</span></p>
      [/vc_column_text][/vc_column_inner][vc_column_inner column_background_color="transparent" column_shadow="drop-shadow" width="1/3" css=".vc_custom_1537026080244{border-radius: 5px !important;}"][vc_empty_space][vc_column_text]
      <h4>Maecenas venenatis nec.</h4>
      <p class="font-size-small">Cras orci urna, hendrerit quis lobortis a.</p>
      [/vc_column_text][/vc_column_inner][vc_column_inner column_content_txt_skin="txt--light" column_background_color="linear-gradient(0deg, #f1defb 0%, #f3c8f3 100%)" column_shadow="drop-shadow" width="1/3" column_advanced_v_offset="desktop:pull-single|tablet:pull-single" css=".vc_custom_1537027485044{border-radius: 5px !important;}"][vc_empty_space][vc_column_text]
      <h4>Vestibulum vitae magna ut nibh.</h4>
      <p class="font-size-small"><span style="color: rgba(0, 0, 0, 0.45);">Phasellus ultricies feugiat lacus, nec imperdiet turpis gravida id.</span></p>
      [/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text, colorful, services',
      'image' => '0.1/text-blocks_3col-w-heading_colorful.jpg',
    ),
    array(
      'id' => 'text-about_w-image_multicolumn',
      'name' => 'Text - About us w/ Image',
      'content' => '[vc_row row_rows_gap="single"][vc_column column_padding="padding-bottom:single"][vc_single_image image_shadow="drop-shadow" image_width="1000" image_ratio="2:1" image_external="https://source.unsplash.com/gPvqQOAOXCw/1000x500"][/vc_column][vc_column width="2/3"][vc_custom_heading heading_text="About us." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Fusce et enim feugiat, auctor nunc eget, tempus nunc. Ut non enim nec augue bibendum cursus eget at felis. Etiam ac tortor sed augue rutrum pellentesque et eget metus." heading_typography="size-class:leading-size"][vc_text_separator style="wave" separator_size="large" separator_width="small"][/vc_column][vc_column width="1/2"][vc_column_text]Aliquam erat volutpat. Sed lacinia elit tellus, ac porttitor sem pellentesque efficitur. Nunc mollis luctus nisi sit amet scelerisque. Nam sodales erat a ligula gravida, eget imperdiet ligula rhoncus. Nulla facilisi. Sed massa quam, volutpat sit amet consectetur a, ornare sed est. Praesent orci ipsum, tempor in massa sit amet, tempor viverra elit. Pellentesque congue libero non velit imperdiet, vulputate convallis lorem laoreet.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text]Proin pellentesque neque ut imperdiet dapibus. Integer eu malesuada odio. Sed suscipit consequat justo ut placerat. Vivamus suscipit lorem enim, eu ultrices ipsum vehicula vel. Nam sit amet risus sed arcu consectetur auctor non sit amet tellus. Morbi facilisis tristique aliquet. Donec pulvinar lectus et aliquet viverra. Integer vehicula condimentum accumsan.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text, image',
      'image' => '0.1/text-about_w-image_multicolumn.jpg',
    ),
    array(
      'id' => 'text-block-shifted_w-image_multicolumn',
      'name' => 'Text Block Shifted w/ Image',
      'content' => '[vc_row row_rows_gap="single"][vc_column][vc_single_image image_shadow="drop-shadow" image_width="1000" image_ratio="2:1" image_external="https://source.unsplash.com/ozUE27aLsas/1000x500"][/vc_column][vc_column column_padding="padding-bottom:none|padding-side:double|padding-top:double" column_content_txt_skin="txt--dark" column_background_color="#ffffff" width="4/5" column_advanced_v_offset="desktop:pull-hepta-margin|tablet:pull-hepta-margin|phone:pull-quad-margin" offset="vc_col-lg-offset-1/5 vc_col-sm-offset-1/5"][vc_custom_heading heading_text="About us." heading_container="h5"][vc_custom_heading heading_text="Fusce et enim feugiat, auctor nunc eget, tempus nunc. Ut non enim nec augue bibendum cursus eget at felis. Etiam ac tortor sed augue rutrum pellentesque et eget metus." heading_container="p" heading_typography="size-class:leading-size"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text]Nulla arcu felis, ultrices vel sollicitudin a, maximus mattis lorem. Cras aliquam est non justo efficitur, ac lobortis dolor pharetra. Sed eget consequat diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec faucibus feugiat semper. Mauris non molestie mauris. Suspendisse lorem mauris, bibendum sed placerat nec, porta et mi.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]Ut iaculis sodales purus, in porta nibh finibus vitae. Morbi ornare commodo consectetur. Sed in sapien purus. Integer varius iaculis faucibus. Quisque eu gravida nulla. Vivamus rhoncus tellus id orci molestie, a tincidunt ipsum ultricies. Curabitur sed arcu enim.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text, image',
      'image' => '0.1/text-block-shifted_w-image_multicolumn.jpg',
    ),
    array(
      'id' => 'text-block-shifted-shadow_w-image_multicolumn',
      'name' => 'Text Block Shifted & Shadow w/ Image',
      'content' => '[vc_row row_rows_gap="single"][vc_column column_alignment_h="right"][vc_single_image image_shadow="drop-shadow" image_width="1000" image_ratio="2:1" image_external="https://source.unsplash.com/82QS7yNaGGM/1000x500"][/vc_column][vc_column column_padding="padding-bottom:double|padding-side:double|padding-top:double" column_content_txt_skin="txt--dark" column_background_color="#ffffff" column_shadow="drop-shadow" width="4/5" column_advanced_v_offset="desktop:pull-hepta-margin|tablet:pull-hepta-margin|phone:pull-quad-margin"][vc_custom_heading heading_text="What we do." heading_container="h5"][vc_custom_heading heading_text="Mauris dolor nisl, tincidunt ut dapibus congue, convallis eu lorem. Praesent rutrum lacus ac massa elementum pretium." heading_container="p" heading_typography="size-class:leading-size"][vc_row_inner row_rows_gap="single"][vc_column_inner width="1/2"][vc_column_text]Aenean finibus porttitor neque, at elementum diam pellentesque at. Nunc ac semper elit. Integer fringilla odio vel viverra laoreet. Donec augue nulla, tempus vel scelerisque ac, pulvinar vitae sapien. Fusce consequat justo pulvinar, placerat lectus id, congue nunc.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]Cras fermentum, nunc eget semper feugiat, elit urna ullamcorper turpis, ac tincidunt lacus ante eu arcu. Donec imperdiet magna et ex lacinia elementum.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text, image',
      'image' => '0.1/text-block-shifted-shadow_w-image_multicolumn.jpg',
    ),
    array(
      'id' => 'text-blocks-masonry_2col_960px',
      'name' => 'Text Blocks Masonry - 2 Columns (960px)',
      'content' => '[vc_row row_container_width_custom="960px" row_rows_gap="single"][vc_column width="1/2"][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(0, 0, 0, 0.03)" columns_animation="from-bottom"][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-heart" icon_text_skin="txt--dark" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#ffffff"][vc_custom_heading heading_text="Morbi turpis nunc." heading_container="h2"][vc_column_text]Phasellus tempor ligula quis lectus gravida vehicula. Pellentesque sapien sapien, finibus ac sa.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(0, 0, 0, 0.03)" columns_animation="from-bottom"][vc_column_inner][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="120" image_ratio="1:1" image_external="https://source.unsplash.com/tg3D9i1Ir_0/120x120"][vc_custom_heading heading_text="Orci varius natoque penatibus." heading_container="h2"][vc_column_text]Morbi turpis nunc, rhoncus eu bibendum vel, vestibulum eget ante.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(0, 0, 0, 0.03)" columns_animation="from-bottom"][vc_column_inner column_hover_options="hide-content" column_hover_url_button_style="color:btn-light|size:btn-lg" column_hover_url="url:%23|title:Learn%20more||"][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-question-circle" icon_text_skin="txt--dark" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#ffffff"][vc_custom_heading heading_text="Aliquam ut sodales ligula." heading_container="h2"][vc_column_text]In laoreet pharetra nibh. Nullam sit amet elit sit amet ex ullamcorper.[/vc_column_text][vc_icon type="material" icon_material="vc-material vc-material-arrow_forward" icon_typography="font-size:24px" icon_text_skin="txt--dark" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(0, 0, 0, 0.03)" columns_animation="from-bottom"][vc_column_inner column_hover_options="hide-content" column_hover_url_button_style="color:btn-light|size:btn-lg" column_hover_url="url:%23|title:Learn%20more||"][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="120" image_ratio="1:1" image_external="https://source.unsplash.com/E00df0gHljE/120x120"][vc_custom_heading heading_text="Nullam egestas quis." heading_container="h2"][vc_column_text]Proin et ipsum vel nunc tincidunt elementum ac vel enim. Aliquam a luctus purus[/vc_column_text][vc_icon type="material" icon_material="vc-material vc-material-arrow_forward" icon_typography="font-size:24px" icon_text_skin="txt--dark" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#ffffff"][/vc_column_inner][/vc_row_inner][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(0, 0, 0, 0.03)" columns_animation="from-bottom"][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-clock" icon_text_skin="txt--dark" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#ffffff"][vc_custom_heading heading_text="Curabitur at commodo." heading_container="h2"][vc_column_text]Mauris sollicitudin nunc eros, eget vestibulum mi eleifend vitae.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text, image, icon',
      'image' => '0.1/text-blocks-masonry_2col_960px.jpg',
    ),
    array(
      'id' => 'text-small-headings_2col',
      'name' => 'Text w/ Simple Headings - 2 Columns',
      'content' => '[vc_row row_columns_gap="double" row_rows_gap="single"][vc_column column_alignment_h="right" width="1/3" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_custom_heading heading_text="About us." heading_container="h5"][vc_custom_heading heading_text="Ut non enim nec augue bibendum cursus eget at felis." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][vc_column width="1/2"][vc_column_text]Vivamus eros nibh, eleifend non dolor vitae, pharetra volutpat turpis. Duis lorem eros, malesuada sit amet leo ac, dictum fermentum diam. Vivamus et suscipit metus. Proin a laoreet massa, ut porta risus. Aliquam erat volutpat. In et pulvinar dolor, quis blandit tellus. In ligula mauris, pulvinar a dui eu, maximus tincidunt libero.[/vc_column_text][/vc_column][/vc_row][vc_row row_columns_gap="double" row_rows_gap="single"][vc_column column_alignment_h="right" width="1/2"][vc_column_text]Aliquam erat volutpat. Maecenas viverra euismod justo a ultrices. Curabitur vel arcu elementum, sagittis leo ultricies, pharetra ante. Ut cursus scelerisque ipsum. Curabitur eget elit leo. Morbi fermentum lectus sed mi tristique hendrerit.[/vc_column_text][/vc_column][vc_column width="1/3"][vc_custom_heading heading_text="Services." heading_container="h5"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.1/text-small-headings_2col.jpg',
    ),
    array(
      'id' => 'hero_text-blocks-masonry_2col_960px_dark-bg',
      'name' => 'Hero w/ Text Blocks Masonry - Dark',
      'content' => '[vc_section section_content_txt_skin="txt--light" section_background_color="#1a1a1a"][vc_row row_column_alignment_h="center"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_custom_heading heading_text="Features." heading_container="h5"][vc_custom_heading heading_text="Aliquam erat volutpat." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus. Vestibulum sed semper diam." heading_typography="size-class:leading-size"][vc_text_separator style="stripes" separator_size="large" separator_width="small" separator_h_alignment="center"][/vc_column][/vc_row][vc_row row_container_width_custom="960px" row_rows_gap="single"][vc_column width="1/2"][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(255, 255, 255, 0.1)" columns_animation="from-bottom"][vc_column_inner column_hover_options="hide-content" column_hover_url_button_style="color:btn-dark|size:btn-lg" column_hover_url="url:%23|title:Learn%20more||"][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="120" image_ratio="1:1" image_external="https://source.unsplash.com/asRF73W3fdY/120x120"][vc_custom_heading heading_text="Cras sollicitudin." heading_container="h2"][vc_column_text]Maecenas gravida tellus vel eros pharetra sit amet fermentum.[/vc_column_text][vc_icon type="material" icon_material="vc-material vc-material-arrow_forward" icon_typography="font-size:24px" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#1a1a1a"][/vc_column_inner][/vc_row_inner][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(255, 255, 255, 0.1)" columns_animation="from-bottom"][vc_column_inner][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-sun" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#1a1a1a"][vc_custom_heading heading_text="Praesent volutpat posuere posuere." heading_container="h2"][vc_column_text]Curabitur vel arcu elementum, sagittis leo ultricies.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(255, 255, 255, 0.1)" columns_animation="from-bottom"][vc_column_inner column_hover_options="hide-content" column_hover_url_button_style="color:btn-dark|size:btn-lg" column_hover_url="url:%23|title:Learn%20more||"][vc_icon type="fontawesomenew" icon_fontawesomenew="far fa-check-circle" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#1a1a1a"][vc_custom_heading heading_text="Curabitur vel arcu elementum." heading_container="h2"][vc_column_text]Nam interdum urna velit, non auctor nunc.[/vc_column_text][vc_icon type="material" icon_material="vc-material vc-material-arrow_forward" icon_typography="font-size:24px" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#1a1a1a"][/vc_column_inner][/vc_row_inner][vc_row_inner row_section_padding="padding-top:double|padding-bottom:double|padding-side:double" row_background_color="rgba(255, 255, 255, 0.1)" columns_animation="from-bottom"][vc_column_inner][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="120" image_ratio="1:1" image_external="https://source.unsplash.com/PyGo1QBz5cI/120x120"][vc_custom_heading heading_text="Praesent rutrum lacus." heading_container="h2"][vc_column_text]Curabitur egestas leo eget est posuere.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]',
      'category' => 'hero, text, icon, image, dark-bg',
      'image' => '0.1/hero_text-blocks-masonry_2col_960px_dark-bg.jpg',
    ),
    array(
      'id' => 'hero-extended_w-windowed-image',
      'name' => 'Hero App Windowed',
      'content' => '[vc_row row_column_alignment_h="center" row_rows_gap="double"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_custom_heading heading_text="Phasellus tempor ligula quis lectus gravida vehicula." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Ut non enim nec augue bibendum cursus eget at felis." heading_typography="size-class:leading-size"][vc_empty_space empty_height="single"][vc_button2 title="Start with our product →" button_color="btn-light" button_size="" alignment="inline" link="url:%23|||"][vc_button2 title="Learn more →" button_color="btn-light" button_type="btn-link" button_size="" alignment="inline" link="url:%23|||" css=".vc_custom_1537355020370{margin-left: 40px !important;}"][/vc_column][vc_column][vc_single_image image_style="browser" image_shadow="drop-shadow" image_width="1300" image_external="https://source.unsplash.com/asRF73W3fdY/1300x700"][/vc_column][/vc_row]',
      'category' => 'hero, text, image, button',
      'image' => '0.1/hero-extended_w-windowed-image.jpg',
    ),
    array(
      'id' => 'hero-heading-leading',
      'name' => 'Hero - Leading Text',
      'content' => '[vc_row][vc_column width="2/3"][vc_custom_heading heading_text="Services we do." heading_container="h5"][vc_custom_heading heading_text="Nam sit amet finibus magna. Etiam nulla arcu, posuere ut varius id, condimentum sit amet augue. Pellentesque mollis sem eget felis scelerisque consectetur." heading_container="p" heading_typography="size-class:leading-size"][vc_text_separator style="stripes" separator_size="large" separator_width="small"][/vc_column][/vc_row]',
      'category' => 'hero, text',
      'image' => '0.1/hero-heading-leading.jpg',
    ),
    array(
      'id' => 'hero-large-centered_w-bg_video',
      'name' => 'Hero - Large Centered w/ BG - Video',
      'content' => '[vc_row row_section_padding="padding-top:triple|padding-bottom:triple" row_container_height_custom="80vh" row_column_alignment_h="center" row_content_txt_skin="txt--light" row_background_color="#1a1a1a" row_background_image_overlay="rgba(0, 0, 0, 0.55)" row_background_image_effect="parallax parallax-v" row_background_image_external="https://source.unsplash.com/reCcJhzeM9U/2000x1600"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_custom_heading heading_text="Video." heading_container="h5"][vc_custom_heading heading_text="Aliquam erat volutpat." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Aliquam erat volutpat. Maecenas viverra euismod justo a ultrices. Curabitur vel arcu elementum, sagittis leo ultricies, pharetra ante. Ut cursus scelerisque ipsum." heading_typography="size-class:leading-size"][vc_text_separator style="zigzag" separator_size="large" separator_width="small"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-vimeo-v" alignment="center" icon_typography="font-size:32" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_link_transition="to-bottom" icon_link="url:https%3A%2F%2Fvimeo.com%2F290556837||target:%20_blank|" icon_bg_color="#1ab7ea"][vc_column_text css=".vc_custom_1537369978068{margin-top: 10px !important;}"]
      <p class="font-size-small">Click icon to watch video.</p>
      [/vc_column_text][/vc_column][/vc_row]',
      'category' => 'hero, dark-bg',
      'image' => '0.1/hero-large-centered_w-bg_video.jpg',
    ),
    array(
      'id' => 'hero-large-left-bottom_w-bg',
      'name' => 'Hero - Large Left Bottom w/ BG',
      'content' => '[vc_row row_section_padding="padding-top:triple" row_container_height_custom="80vh" row_container_alignment_v="bottom" row_column_alignment_v="bottom" row_content_txt_skin="txt--light" row_background_color="#1a1a1a" row_background_image_overlay="rgba(0, 0, 0, 0.55)" row_background_image_effect="parallax parallax-v" row_background_image_external="https://source.unsplash.com/7ckybxQTYhI/2000x1600"][vc_column width="2/3"][vc_custom_heading heading_text="Features." heading_container="h5"][vc_custom_heading heading_text="In auctor pellentesque magna." heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="In malesuada maximus mattis. Etiam interdum vulputate pulvinar. Mauris egestas libero non nisl accumsan sagittis. Etiam nulla quam, aliquet sit amet tempus ac." heading_typography="size-class:leading-size"][vc_text_separator style="zigzag" separator_size="large" separator_width="small"][/vc_column][/vc_row]',
      'category' => 'hero, dark-bg, titlebar',
      'image' => '0.1/hero-large-left-bottom_w-bg.jpg',
    ),
    array(
      'id' => 'image-w-sticky-text_2col',
      'name' => 'Image w/ Sticky Text Column',
      'content' => '[vc_row row_columns_gap="triple"][vc_column column_sticky="enabled" width="5/12"][vc_text_separator][vc_custom_heading heading_text="Our goal." heading_container="h5"][vc_custom_heading heading_text="Etiam nulla arcu, posuere ut varius id, condimentum sit amet augue." heading_container="p" heading_typography="size-class:leading-size"][vc_text_separator style="wave" separator_size="large" separator_width="small"][vc_column_text]Curabitur tincidunt, ipsum vitae scelerisque lacinia, elit odio iaculis mauris, ac dignissim ipsum nibh sed velit. Nam ut orci ut tortor porta sagittis. Phasellus arcu enim, elementum ut imperdiet et, mollis nec ligula.[/vc_column_text][/vc_column][vc_column width="7/12"][vc_single_image image_width="1300" image_external="https://source.unsplash.com/EQZ1vmGV9iQ/"][/vc_column][/vc_row]',
      'category' => 'text, image',
      'image' => '0.1/image-w-sticky-text_2col.jpg',
    ),
    array(
      'id' => 'text_w-tiny-heading_1col-2col',
      'name' => 'Text w/ Tiny Heading - 1Col + 2Cols',
      'content' => '[vc_row row_rows_gap="single"][vc_column][vc_custom_heading heading_text="The process." heading_container="h5"][/vc_column][vc_column width="5/12"][vc_column_text]In hac habitasse platea dictumst. Morbi auctor justo ante, et malesuada nunc fringilla eget. Curabitur risus urna, sagittis ac placerat non, feugiat eu magna. In hac habitasse platea dictumst. Cras velit erat, fringilla dapibus est sed, rutrum vulputate metus.

      Maecenas euismod purus eget nunc tristique, nec sodales quam lacinia. Cras consectetur elit ut metus bibendum, quis venenatis ipsum ullamcorper. Cras mi lorem, molestie id tortor eu, pretium consequat nibh. Vestibulum non vulputate justo.[/vc_column_text][/vc_column][vc_column width="5/12"][vc_column_text]Aenean tristique ex vitae condimentum malesuada. Duis nibh arcu, eleifend non accumsan quis, feugiat in diam. Maecenas in velit ornare erat malesuada sagittis ac et orci. Sed malesuada congue eros vel iaculis.
      
      Curabitur tincidunt, ipsum vitae scelerisque lacinia, elit odio iaculis mauris, ac dignissim ipsum nibh sed velit. Nam ut orci ut tortor porta sagittis. Phasellus arcu enim, elementum ut imperdiet et, mollis nec ligula.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.1/text_w-tiny-heading_1col-2col.jpg',
    ),
    array(
      'id' => 'text-block-shifted-shadow_w-image_multicolumn_top',
      'name' => 'Text Block Shifted & Shadow w/ Image - Top',
      'content' => '[vc_row row_rows_gap="single"][vc_column column_padding="padding-bottom:double|padding-side:double|padding-top:double" column_content_txt_skin="txt--dark" column_background_color="#ffffff" column_shadow="drop-shadow" el_zindex="2" width="3/4" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_custom_heading heading_text="Who we are." heading_container="h5"][vc_custom_heading heading_text="Nunc ac semper elit. Integer fringilla odio vel viverra laoreet. Donec augue nulla, tempus vel scelerisque ac, pulvinar vitae sapien." heading_container="p" heading_typography="size-class:leading-size"][vc_row_inner row_rows_gap="single"][vc_column_inner width="1/2"][vc_column_text]Curabitur vel arcu elementum, sagittis leo ultricies, pharetra ante. Ut cursus scelerisque ipsum. Curabitur eget elit leo. Morbi fermentum lectus sed mi tristique hendrerit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]Curabitur eu tempor lectus. Mauris et eleifend ex. Nullam iaculis, sem quis tincidunt commodo, augue metus pulvinar massa, non laoreet urna tellus sed nisl.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_advanced_v_offset="desktop:pull-nona-margin|tablet:pull-nona-margin|phone:pull-triple-margin"][vc_single_image image_shadow="drop-shadow" image_width="1000" image_ratio="2:1" image_external="https://source.unsplash.com/ACt8ycSzpdE/1000x500"][/vc_column][/vc_row]',
      'category' => 'text, image',
      'image' => '0.1/text-block-shifted-shadow_w-image_multicolumn_top.jpg',
    ),
    array(
      'id' => 'text-centered-w-dropcap_1col-slim',
      'name' => 'Text Centered Slim w/ Dropcap',
      'content' => '[vc_row][vc_column width="1/2" offset="vc_col-lg-offset-3 vc_col-sm-offset-3"][vc_custom_heading heading_text="M." heading_container="h2" heading_type="as-background" heading_typography="font-family:Barlow Condensed|google-font:true|font-weight:600|font-size:250|line-height:1em" heading_color="linear-gradient(341deg, transparent 0%, rgba(0, 0, 0, 0.08) 100%)" heading_color_backup="rgba(0,0,0,0.08)" heading_advanced_h_offset="desktop:pull-single|tablet:pull-single|phone:pull-half" heading_advanced_v_offset="desktop:pull-double|tablet:pull-single|phone:pull-single"][vc_custom_heading heading_text="Moving forward." heading_container="h4"][vc_column_text]Maecenas accumsan ipsum et vehicula venenatis. Vivamus finibus interdum eros. Donec nec nulla non nisl scelerisque consectetur et vel quam. Pellentesque blandit id tellus a euismod.

      Donec elementum, neque nec fringilla commodo, ipsum turpis bibendum magna, id vestibulum ipsum purus nec mi. Fusce suscipit hendrerit dolor, id fermentum justo scelerisque et. Integer hendrerit magna tortor, nec eleifend arcu interdum ac. Sed auctor ipsum imperdiet, scelerisque ex ac, dictum libero. Nunc eu aliquet purus. Integer enim libero, malesuada quis sagittis at, feugiat et massa.
      
      Aenean ut ornare sem, nec vestibulum ligula. Nunc egestas enim scelerisque risus sodales sagittis. Cras vitae mauris porta nibh suscipit pretium vel dignissim turpis. Quisque sodales tellus sit amet felis placerat, sed auctor magna dictum. Curabitur tincidunt est ut nisi eleifend ullamcorper.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.1/text-centered-w-dropcap_1col-slim.jpg',
    ),
    array(
      'id' => 'text-columns-services_bottom_4col',
      'name' => 'Text Columns - Services - Bottom Align - 4Col',
      'content' => '[vc_row row_column_content_alignment_v="bottom" row_rows_gap="single"][vc_column width="1/4"][vc_custom_heading heading_text="Ut mollis venenatis egestas." heading_container="h4"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus. Vestibulum sed semper diam." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="wave" separator_size="large" separator_width="small" css=".vc_custom_1537437409702{margin-top: 20px !important;}"][/vc_column][vc_column width="1/4"][vc_custom_heading heading_text="Fusce faucibus felis porta, molestie." heading_container="h4" heading_color="linear-gradient(307deg, #99c9ec 0%, #99ecdc 100%)" heading_color_backup="#99c9ec"][vc_custom_heading heading_text="Mauris dolor nisl, tincidunt ut dapibus congue, convallis eu lorem. Praesent rutrum lacus ac massa elementum pretium." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="wave" separator_size="large" separator_width="small" separator_line_color="#d4eef6" css=".vc_custom_1537437416319{margin-top: 20px !important;}"][/vc_column][vc_column width="1/4"][vc_custom_heading heading_text="Mauris consequat urna sit varius natoque penatibus" heading_container="h4"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="wave" separator_size="large" separator_width="small" css=".vc_custom_1537437422319{margin-top: 20px !important;}"][/vc_column][vc_column width="1/4"][vc_custom_heading heading_text="Curabitur eu tempor lectus." heading_container="h4"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus. Vestibulum sed semper diam." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="wave" separator_size="large" separator_width="small" css=".vc_custom_1537437428547{margin-top: 20px !important;}"][/vc_column][/vc_row]',
      'category' => 'text, services',
      'image' => '0.1/text-columns-services_bottom_4col.jpg',
    ),
    array(
      'id' => 'text-columns-services_bottom_5col',
      'name' => 'Text Columns - Services - Bottom Align - 5Col',
      'content' => '[vc_row row_column_content_alignment_v="bottom" row_rows_gap="single"][vc_column width="1/5"][vc_custom_heading heading_text="Curabitur vel erat eget est iaculis iaculis sit." heading_container="h4"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus. Vestibulum sed semper diam." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="stripes" separator_size="large" separator_width="small" css=".vc_custom_1537441786079{margin-top: 20px !important;}"][/vc_column][vc_column width="1/5"][vc_custom_heading heading_text="Aenean elementum quam ut magna eleifend molestie." heading_container="h4"][vc_custom_heading heading_text="Mauris dolor nisl, tincidunt ut dapibus congue, convallis eu lorem. Praesent rutrum lacus ac massa elementum pretium." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="stripes" separator_size="large" separator_width="small" css=".vc_custom_1537441793769{margin-top: 20px !important;}"][/vc_column][vc_column width="1/5"][vc_custom_heading heading_text="Duis convallis suscipit lacus, eget viverra mi pharetra eu." heading_container="h4"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="stripes" separator_size="large" separator_width="small" css=".vc_custom_1537441800399{margin-top: 20px !important;}"][/vc_column][vc_column width="1/5"][vc_custom_heading heading_text="Etiam vestibulum, ex et hendrerit iaculis, leo felis." heading_container="h4" heading_color="linear-gradient(312deg, #b3efa9 0%, #a9efd3 100%)" heading_color_backup="#a9efd3"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus. Vestibulum sed semper diam." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="stripes" separator_size="large" separator_width="small" separator_line_color="#a9efd3" css=".vc_custom_1537441807513{margin-top: 20px !important;}"][/vc_column][vc_column width="1/5"][vc_custom_heading heading_text="Integer ante dui." heading_container="h4"][vc_custom_heading heading_text="Sed nulla massa, mattis porta augue non, consequat semper lacus." heading_container="p" heading_typography="size-class:font-size-small"][vc_text_separator style="stripes" separator_size="large" separator_width="small" css=".vc_custom_1537441812709{margin-top: 20px !important;}"][/vc_column][/vc_row]',
      'category' => 'text, services',
      'image' => '0.1/text-columns-services_bottom_5col.jpg',
    ),
    array(
      'id' => 'text-columns-services_w-img_3col',
      'name' => 'Text Columns - Services - w/ Img - 3Col',
      'content' => '[vc_row row_columns_gap="double" row_rows_gap="single"][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="120" image_ratio="1:1" image_external="https://source.unsplash.com/raDgOau5K6c/120x120"][vc_custom_heading heading_text="Etiam sagittis mattis diam vitae elementum placerat lectus." heading_container="h3" link="|||"][vc_column_text]In malesuada maximus mattis. Etiam interdum vulputate pulvinar.[/vc_column_text][vc_text_separator style="zigzag" separator_size="large" separator_width="small" css=".vc_custom_1537438317525{margin-top: 20px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="120" image_ratio="1:1" image_external="https://source.unsplash.com/8jQbkGwVnAk/120x120"][vc_custom_heading heading_text="Morbi eget maximus massa." heading_container="h3" link="|||"][vc_column_text]Mauris dolor nisl, tincidunt ut dapibus congue, convallis eu lorem. Praesent rutrum lacus ac massa elementum pretium.[/vc_column_text][vc_text_separator style="zigzag" separator_size="large" separator_width="small" css=".vc_custom_1537438317525{margin-top: 20px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="120" image_ratio="1:1" image_external="https://source.unsplash.com/PyGo1QBz5cI/120x120"][vc_custom_heading heading_text="In pharetra velit at purus hendrerit, a consequat ante." heading_container="h3" link="|||"][vc_column_text]Sed nulla massa, mattis porta augue non, consequat semper lacus.[/vc_column_text][vc_text_separator style="zigzag" separator_size="large" separator_width="small" css=".vc_custom_1537438317525{margin-top: 20px !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text, services, image',
      'image' => '0.1/text-columns-services_w-img_3col.jpg',
    ),
    array(
      'id' => 'hero-social-centered_w-bg',
      'name' => 'Hero - Social - Centered w/ BG',
      'content' => '[vc_row row_section_padding="padding-top:triple|padding-bottom:triple" row_column_alignment_h="center" row_rows_gap="single" row_content_txt_skin="txt--light" row_background_color="#1a1a1a" row_background_image_overlay="rgba(0, 0, 0, 0.55)" row_background_image_effect="parallax parallax-v" row_background_image_external="https://source.unsplash.com/2FPjlAyMQTA/2000x1600"][vc_column][vc_custom_heading heading_text="Get connected." heading_container="h5"][/vc_column][vc_column][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-facebook-f" alignment="inline" icon_typography="font-size:32" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_link_transition="to-bottom" icon_link="url:https%3A%2F%2Ffacebook.com||target:%20_blank|" icon_bg_color="#3b5998"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-twitter" alignment="inline" icon_typography="font-size:32" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_link_transition="to-bottom" icon_link="url:https%3A%2F%2Ftwitter.com||target:%20_blank|" icon_bg_color="#1da1f2"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-dribbble" alignment="inline" icon_typography="font-size:32" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_link_transition="to-bottom" icon_link="url:https%3A%2F%2Fdribbble.com||target:%20_blank|" icon_bg_color="#ea4c89"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-instagram" alignment="inline" icon_typography="font-size:32" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_link_transition="to-bottom" icon_link="url:https%3A%2F%2Finstagram.com||target:%20_blank|" icon_bg_color="#405de6"][/vc_column][/vc_row]',
      'category' => 'dark-bg, social, icon',
      'image' => '0.1/hero-social-centered_w-bg.jpg',
    ),
    array(
      'id' => 'content-grid-square_3col_full-width',
      'name' => 'Content Grid - Squared - 3 Columns Full',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_column_alignment_h="center" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" column_content_txt_skin="txt--light" column_background_color="#1a1a1a" width="1/3"][vc_icon type="material" icon_material="vc-material vc-material-local_cafe" icon_text_skin="txt--dark" icon_style="bg" icon_bg_style="radius" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#ffffff"][vc_text_separator style="wave" separator_width="small"][vc_custom_heading heading_text="Phasellus convallis." heading_container="h3"][vc_column_text]Cras commodo finibus auctor. Nullam luctus iaculis ipsum, vel fringilla odio faucibus sit amet. Maecenas molestie quam non dapibus vehicula.[/vc_column_text][/vc_column][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" width="1/3" column_background_image_external="https://source.unsplash.com/09x-xdAXUrs/1000x1000"][vc_empty_space empty_height="single" css=".vc_custom_1537542528114{padding-bottom: 100% !important;}"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="1/3"][vc_custom_heading heading_text="01." heading_container="h2" heading_typography="font-size:150|line-height:1em|font-weight:400|font-family:Permanent Marker|google-font:true"][vc_custom_heading heading_text="Contact us." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][/vc_row]',
      'category' => 'text, image, full-width, services',
      'image' => '0.1/content-grid-square_3col_full-width.jpg',
    ),
    array(
      'id' => 'content-grid-square_3col_full-width_x3',
      'name' => 'Content Grid - Squared - 3 Columns Full - x3',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_column_alignment_h="center" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" column_content_txt_skin="txt--light" column_background_color="#1a1a1a" width="1/3"][vc_icon type="material" icon_material="vc-material vc-material-local_cafe" icon_text_skin="txt--dark" icon_style="bg" icon_bg_style="radius" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#ffffff"][vc_text_separator style="wave" separator_width="small"][vc_custom_heading heading_text="Phasellus convallis." heading_container="h3"][vc_column_text]Cras commodo finibus auctor. Nullam luctus iaculis ipsum, vel fringilla odio faucibus sit amet. Maecenas molestie quam non dapibus vehicula.[/vc_column_text][/vc_column][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" width="1/3" column_background_image_external="https://source.unsplash.com/09x-xdAXUrs/1000x1000"][vc_empty_space empty_height="single" css=".vc_custom_1537542528114{padding-bottom: 100% !important;}"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="1/3"][vc_custom_heading heading_text="01." heading_container="h2" heading_typography="font-size:150|line-height:1em|font-weight:400|font-family:Permanent Marker|google-font:true"][vc_custom_heading heading_text="Contact us." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][/vc_row][vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_column_alignment_h="center" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="1/3"][vc_custom_heading heading_text="02." heading_container="h2" heading_typography="font-size:150|line-height:1em|font-weight:400|font-family:Permanent Marker|google-font:true"][vc_custom_heading heading_text="Design process." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" column_content_txt_skin="txt--light" column_background_color="#1a1a1a" width="1/3"][vc_icon type="material" icon_material="vc-material vc-material-brush" icon_text_skin="txt--dark" icon_style="bg" icon_bg_style="radius" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#ffffff"][vc_text_separator style="wave" separator_width="small"][vc_custom_heading heading_text="Ut bibendum." heading_container="h3"][vc_column_text]Nullam luctus iaculis ipsum, vel fringilla odio. Phasellus bibendum nisl vitae orci tincidunt, vel rhoncus tortor scelerisque.[/vc_column_text][/vc_column][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" width="1/3" column_background_image_external="https://source.unsplash.com/rSeSXpQe0qI/1000x1000"][vc_empty_space empty_height="single" css=".vc_custom_1537542528114{padding-bottom: 100% !important;}"][/vc_column][/vc_row][vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_column_alignment_h="center" row_column_content_alignment_v="center" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" width="1/3" column_background_image_external="https://source.unsplash.com/eA2z1JSzZFI/1000x1000"][vc_empty_space empty_height="single" css=".vc_custom_1537542528114{padding-bottom: 100% !important;}"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="1/3"][vc_custom_heading heading_text="03." heading_container="h2" heading_typography="font-size:150|line-height:1em|font-weight:400|font-family:Permanent Marker|google-font:true"][vc_custom_heading heading_text="Optimize." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" column_content_txt_skin="txt--light" column_background_color="#1a1a1a" width="1/3"][vc_icon type="material" icon_material="vc-material vc-material-people_outline" icon_text_skin="txt--dark" icon_style="bg" icon_bg_style="radius" icon_bg_shadow="drop-shadow" icon_bg_padding_size="3x" icon_bg_color="#ffffff"][vc_text_separator style="wave" separator_width="small"][vc_custom_heading heading_text="Nam efficitur eget." heading_container="h3"][vc_column_text]Vestibulum eleifend erat in euismod feugiat.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text, image, full-width, services',
      'image' => '0.1/content-grid-square_3col_full-width_x3.jpg',
    ),
    array(
      'id' => 'content-split_w-bg_full-width',
      'name' => 'Content Splited w/ BG Image',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="1/3"][vc_custom_heading heading_text="01." heading_container="h2" heading_typography="size-class:h1-size|font-weight:400|font-family:Permanent Marker|google-font:true" heading_color="rgba(0, 0, 0, 0.05)"][vc_text_separator][vc_custom_heading heading_text="Our goal." heading_container="h5"][vc_custom_heading heading_text="Etiam nulla arcu, posuere ut varius id, condimentum sit amet augue." heading_container="p" heading_typography="size-class:leading-size"][vc_button2 title="Learn more" link="url:%23|||"][/vc_column][vc_column width="2/3" column_background_image_external="https://source.unsplash.com/JG6zxTsRoIM/1300x900"][vc_empty_space empty_height="penta"][/vc_column][/vc_row]',
      'category' => 'text, image, full-width, services, button',
      'image' => '0.1/content-split_w-bg_full-width.jpg',
    ),
    array(
      'id' => 'content-split_w-bg_full-width_x2',
      'name' => 'Content Splited w/ BG Image - x2',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="1/3"][vc_custom_heading heading_text="01." heading_container="h2" heading_typography="size-class:h1-size|font-weight:400|font-family:Permanent Marker|google-font:true" heading_color="rgba(0, 0, 0, 0.05)"][vc_text_separator][vc_custom_heading heading_text="Our goal." heading_container="h5"][vc_custom_heading heading_text="Etiam nulla arcu, posuere ut varius id, condimentum sit amet augue." heading_container="p" heading_typography="size-class:leading-size"][vc_button2 title="Learn more" link="url:%23|||"][/vc_column][vc_column width="2/3" column_background_image_external="https://source.unsplash.com/JG6zxTsRoIM/1300x900"][vc_empty_space empty_height="penta"][/vc_column][/vc_row][vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_section_container_width="stretched" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column width="2/3" column_background_image_external="https://source.unsplash.com/EQZ1vmGV9iQ/1300x900"][vc_empty_space empty_height="penta"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="1/3"][vc_custom_heading heading_text="02." heading_container="h2" heading_typography="size-class:h1-size|font-weight:400|font-family:Permanent Marker|google-font:true" heading_color="rgba(0, 0, 0, 0.05)"][vc_text_separator][vc_custom_heading heading_text="We love writing." heading_container="h5"][vc_custom_heading heading_text="Morbi vitae lacus porttitor, accumsan ligula eu, euismod odio." heading_container="p" heading_typography="size-class:leading-size"][vc_button2 title="Learn more" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'text, image, full-width, services, button',
      'image' => '0.1/content-split_w-bg_full-width_x2.jpg',
    ),
    array(
      'id' => 'hero-cta_w-button',
      'name' => 'Hero - Call to Action',
      'content' => '[vc_row row_column_alignment_v="center" row_columns_gap="double" row_rows_gap="single"][vc_column width="3/4"][vc_custom_heading heading_text="Praesent magna massa, ultricies." heading_container="h2"][vc_custom_heading heading_text="Cras commodo finibus auctor. Nullam luctus iaculis ipsum, vel fringilla odio faucibus sit amet." heading_container="p" heading_typography="size-class:leading-size"][/vc_column][vc_column column_alignment_h="right" width="1/4"][vc_button2 title="Read more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'hero, call-to-action, button',
      'image' => '0.1/hero-cta_w-button.jpg',
    ),
    array(
      'id' => 'hero-simple_w-bg',
      'name' => 'Hero Simple - Centered - CTA',
      'content' => '[vc_row row_section_padding="padding-top:quad|padding-bottom:quad" row_column_alignment_h="center" row_content_txt_skin="txt--light" row_background_color="#1a1a1a" row_background_image_overlay="rgba(0, 0, 0, 0.4)" row_background_image_effect="parallax parallax-v" row_background_image_external="https://source.unsplash.com/9l_326FISzk/2000x1600"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-sm-offset-2"][vc_custom_heading heading_text="Nulla sed eros id libero faucibus auctor vehicula justo sed nibh molestie maximus." heading_container="h2"][vc_button2 title="Learn more" button_color="btn-light" button_type="btn-outlined" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'hero, call-to-action, button',
      'image' => '0.1/hero-simple_w-bg.jpg',
    ),
    array(
      'id' => 'testimonials-split_full-width',
      'name' => 'Testimonials Split w/ BG',
      'content' => '[vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_columns_gap="none" row_rows_gap="none" row_force_as_bg="as-background"][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" column_content_txt_skin="txt--light" column_background_color="linear-gradient(349deg, #99e4da 0%, #b4e8c5 100%)" width="1/2"][vc_single_image image_alignment="right" image_style="rounded" image_shadow="drop-shadow" image_width="100" image_ratio="1:1" image_external="https://source.unsplash.com/sMar22CK6sM/100x100"][vc_column_text]
        <blockquote>
        <p class="heading-color">Phasellus molestie dolor eu tellus convallis fringilla. Ut vel orci eu quam bibendum elementum eu sed neque. Suspendisse potenti. Nulla vitae metus et lorem gravida dignissim sit amet sit amet turpis.</p>
        </blockquote>
        <strong>Steven Monk</strong> Monk &amp; Monk Design[/vc_column_text][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" column_content_txt_skin="txt--light" column_background_color="#1a1a1a" width="1/2"][vc_single_image image_alignment="right" image_style="rounded" image_shadow="drop-shadow" image_width="100" image_ratio="1:1" image_external="https://source.unsplash.com/vengTQDuneY/100x100"][vc_column_text]
        <blockquote>
        <p class="heading-color">Morbi vitae lacus porttitor, accumsan ligula eu, euismod odio. Morbi tincidunt fringilla quam at volutpat.</p>
        </blockquote>
        <b>Amanda Johnes</b> JJS Inc.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'testimonial, full-width',
      'image' => '0.1/testimonials-split_full-width.jpg',
    ),
    array(
      'id' => 'content-block-hero-w-images_2col_full-width',
      'name' => 'Content - Hero w/ Large Images and text - Full Width',
      'content' => '[vc_row row_section_container_width="stretched" row_columns_gap="double"][vc_column width="1/2"][vc_custom_heading heading_text="We are omnis." heading_container="h5"][vc_custom_heading heading_text="Interdum et malesuada fames ac ante ipsum primis in faucibus." heading_container="h2" heading_typography="size-class:h1-alt" heading_color="linear-gradient(327deg, #f6d27e 0%, #f6b37e 100%)" heading_color_backup="#f6d27e"][vc_empty_space][vc_single_image image_width="1300" image_external="https://source.unsplash.com/hrhjn6ZTgrM/1300x1300"][/vc_column][vc_column width="1/2"][vc_single_image image_width="1300" image_ratio="1:1" image_external="https://source.unsplash.com/XLm6-fPwK5Q/1300x1300"][vc_empty_space][vc_text_separator style="zigzag" separator_size="large" separator_width="small"][vc_custom_heading heading_text="Duis nibh odio, pharetra non tristique ac, porta et velit. Quisque sit amet purus at mi cursus finibus in id lorem. Pellentesque at nisi eget quam viverra consectetur." heading_typography="size-class:leading-size"][vc_button2 title="Read more" button_type="btn-outlined" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'hero, full-width, image, text, colorful, button',
      'image' => '0.1/content-block-hero-w-images_2col_full-width.jpg',
    ),
    array(
      'id' => 'content-block-hero-w-images_2col',
      'name' => 'Content - Hero w/ Large Images and text.',
      'content' => '[vc_row row_columns_gap="double"][vc_column width="1/2"][vc_single_image image_width="1300" image_ratio="1:1" image_external="https://source.unsplash.com/KPBG8BaKJQ4/1300x1300"][vc_empty_space][vc_custom_heading heading_text="Phasellus non enim vel elit tincidunt interdum. Phasellus et porttitor est, sit amet luctus metus." heading_typography="size-class:leading-size"][vc_button2 title="Read more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][vc_column width="1/2"][vc_text_separator style="stripes" separator_size="large" separator_width="small"][vc_custom_heading heading_text="We are omnis." heading_container="h5"][vc_empty_space empty_height="half"][vc_custom_heading heading_text="Maecenas at ipsum ullamcorper, lobortis tellus." heading_container="h2"][vc_empty_space][vc_single_image image_width="1300" image_external="https://source.unsplash.com/Jenh_W-2kpQ/1300x1300"][/vc_column][/vc_row]',
      'category' => 'hero, image, text, button',
      'image' => '0.1/content-block-hero-w-images_2col.jpg',
    ),
    array(
      'id' => 'cta-box_bg-image-left',
      'name' => 'Call to Action Box w/ Image on Left.',
      'content' => '[vc_section section_padding="padding-top:double|padding-bottom:double" section_container_width="limited"][vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_columns_gap="none" row_rows_gap="none" row_content_txt_skin="txt--dark" row_background_color="#ffffff" row_shadow="drop-shadow" css=".vc_custom_1537973293209{border-radius: 10px !important;}"][vc_column width="1/4" column_background_image_external="https://source.unsplash.com/zwe--GYIZtc/900x1200"][vc_empty_space empty_height="penta"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="2/3"][vc_custom_heading heading_text="Find us there." heading_container="h5"][vc_empty_space empty_height="half"][vc_custom_heading heading_text="Orci varius natoque penatibus et magni, nascetur ridiculus mus." heading_container="h2"][vc_custom_heading heading_text="Hendrerit felis ac, lobortis tellus. Cras consequat eget eros nec euismod." heading_typography="size-class:leading-size"][vc_text_separator style="wave" separator_size="large" separator_width="small"][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'call-to-action, image, button',
      'image' => '0.1/cta-box_bg-image-left.jpg',
    ),
    array(
      'id' => 'gallery-logos_5cols',
      'name' => 'Gallery 5 Columns - for Logos (300x120)',
      'content' => '[vc_row][vc_column][vc_gallery images_anchor_full="" images_columns_span="desktop:1/5|tablet:4|phone:6" images_container_width="" images_columns_gap="none" images_rows_gap="quarter" images_alignment_v="center" image_lazy_dominant="disable" animation="from-bottom" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'gallery, image',
      'image' => '0.1/gallery-logos_5cols.jpg',
    ),
    array(
      'id' => 'testimonial-slider_slim-centered',
      'name' => 'Testimonial Slider - Centered',
      'content' => '[vc_row][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" column_background_image_settings="position:center center|size:contain|repeat:no-repeat" width="1/2" offset="vc_col-lg-offset-3 vc_col-sm-offset-3"][loprd_carousel carousel_columns_gap="hexa" carousel_autoplay="10000" carousel_column_alignment_h="center" carousel_column_content_alignment_v="center" animation="from-right" animation_delay="200"][loprd_carousel_column][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="100" image_ratio="1:1" image_external="https://source.unsplash.com/6UEyVsw_1lU/100x100"][vc_column_text]
      <blockquote>What i like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.</blockquote>
      <strong>Karl Lagerfeld</strong> Creative Director[/vc_column_text][/loprd_carousel_column][loprd_carousel_column][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="100" image_ratio="1:1" image_external="https://source.unsplash.com/sMar22CK6sM/100x100"][vc_column_text]
      <blockquote>A common mistake that people make when trying to design something completely foolproof is to underestimate the ingenuity of complete fools.</blockquote>
      <strong>Douglas Adams</strong> Mostly Harmless[/vc_column_text][/loprd_carousel_column][loprd_carousel_column][vc_single_image image_style="rounded" image_shadow="drop-shadow" image_width="100" image_ratio="1:1" image_external="https://source.unsplash.com/5aGUyCW_PJw/100x100"][vc_column_text]
      <blockquote>Every child is an artist. The problem is how to remain an artist once he grows up</blockquote>
      <strong>Pablo Picasso</strong>[/vc_column_text][/loprd_carousel_column][/loprd_carousel][/vc_column][/vc_row]',
      'category' => 'testimonial, slider',
      'image' => '0.1/testimonial-slider_slim-centered.jpg',
    ),
    array(
      'id' => 'loop_simple-single-large-image_w-hero',
      'name' => 'Loop - Simple Single Large Image - w/ Hero',
      'content' => '[vc_row row_columns_gap="triple"][vc_column width="1/3"][vc_custom_heading heading_text="Journal." heading_container="h2" heading_type="as-background" heading_typography="font-size:120|line-height:1em|font-weight:700" heading_color="rgba(0, 0, 0, 0.03)" heading_advanced_h_offset="desktop:pull-2|tablet:pull-double" heading_advanced_v_offset="desktop:pull-single|tablet:pull-single|phone:pull-single"][vc_row_inner el_zindex="1"][vc_column_inner][vc_custom_heading heading_text="Thoughts from our studio." heading_container="h4"][vc_custom_heading heading_text="Sed id rhoncus lorem, sed eleifend lacus." heading_container="p" heading_typography="size-class:leading-size"][vc_button2 title="More articles" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][loprd_loop loop="size:1|order_by:date" _grid_columns="desktop:12|tablet:12" post_layout_ratio="3:1" post_thumb_border_radius="10" post_drop_shadow="" post_content_padding="padding-bottom:none|padding-side:none" post_title_typo="size-class:h3-size"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_simple-single-large-image_w-hero.jpg',
    ),
    array(
      'id' => 'loop_grid-overlay-simple_3-col',
      'name' => 'Loop - Grid Overlay Simple - 3 Columns',
      'content' => '[vc_row][vc_column][vc_row_inner row_column_alignment_v="center" row_rows_gap="single"][vc_column_inner width="1/2"][vc_column_text]
      <h2>Latest news.</h2>
      [/vc_column_text][/vc_column_inner][vc_column_inner column_alignment_h="right" width="1/2" column_hover_options=""][vc_button2 title="More articles →" button_type="btn-outlined" link="url:%23|||"][/vc_column_inner][/vc_row_inner][loprd_loop loop="size:3|order_by:date" grid_columns_gap="one" grid_rows_gap="one" post_layout="img" post_content_layout="title,meta" post_meta="`{`omnis_date ago=``true```}`" post_alignment_v="top" post_hover_thumb="hover-thumb--scale-up" post_hover_post="hover--post-scale-down" post_image_overlay_color="rgba(0, 0, 0, 0.35)" post_content_padding="padding-top:double|padding-bottom:double|padding-side:double" post_content_el_padding="meta:single" animation="scale-up" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_grid-overlay-simple_3-col.jpg',
    ),
    array(
      'id' => 'loop_lateral-grid-w-wide-thumb_1-col',
      'name' => 'Loop - Lateral Grid w/ Wide Thumbnail - Full Width',
      'content' => '[vc_row row_section_container_width="stretched"][vc_column][loprd_loop loop="size:4|order_by:date" _grid_columns="desktop:12|tablet:12" grid_rows_gap="double" post_layout="lateral" post_layout_ratio="4:1" post_layout_lateral_thumb="right" post_layout_lateral_ratio="3-1" post_layout_lateral_gap="double" post_content_layout="meta2" post_meta2="`{`omnis_title anchor=``true`` force=``true`` class=``heading```}``{`omnis_date ago=``true`` anchor=``false```}`" post_drop_shadow="" post_content_padding="padding-side:none" post_meta_typo="size-class:h4-size" animation="scale-up" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop',
      'image' => '0.1/loop_lateral-grid-w-wide-thumb_1-col.jpg',
    ),
    array(
      'id' => 'loop_lateral-small-grid_2-col',
      'name' => 'Loop - Grid Lateral Small - 2x2 Columns',
      'content' => '[vc_row row_section_padding="padding-top:single"][vc_column css=".vc_custom_1532776604858{border-top-width: 1px !important;border-top-color: rgba(0,0,0,0.05) !important;border-top-style: solid !important;}"][vc_column_text]
      <h5>News from studio.</h5>
      [/vc_column_text][loprd_loop loop="size:4|order_by:date" _grid_columns="desktop:6" post_layout="lateral" post_layout_lateral_thumb="left" post_content_layout="title,meta" post_meta="`{`omnis_cats`}`" post_content_skin_custom_meta="#c7c7c7" post_title_typo="font-size:18" animation="from-right" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_lateral-small-grid_2-col.jpg',
    ),
    array(
      'id' => 'loop_masonry-w-sticky-featured',
      'name' => 'Loop - Masonry w/ Sticky Featured Post',
      'content' => '[vc_row row_section_container_width="stretched" row_columns_gap="double" row_rows_gap="double"][vc_column column_sticky="enabled" width="5/12"][loprd_loop loop="size:1|order_by:date" grid_layout="masonry" _grid_columns="desktop:12|tablet:12" grid_columns_gap="none" grid_rows_gap="none" post_layout_ratio="" post_content_layout="title,content|excerpt,separator,meta" post_meta="`{`omnis_author`}``{`omnis_cats`}``{`omnis_date`}``{`omnis_permalink`}`" post_thumb_border_radius="5" post_drop_shadow="" post_read_more_button_style="size:btn-sm|color:btn-light" post_content_el_padding="separator:single" post_title_typo="size-class:h2-size" animation="from-bottom"][/vc_column][vc_column width="7/12"][loprd_loop loop="size:6|order_by:date" _loop_advanced_options="true" loop_offset="1" grid_layout="masonry" _grid_columns="desktop:4|tablet:6" grid_columns_gap="double" grid_rows_gap="double" post_layout_ratio="" post_content_layout="title,content|excerpt,separator,meta" post_meta="`{`omnis_date`}``{`omnis_permalink`}`" post_thumb_border_radius="5" post_drop_shadow="" post_read_more_button_style="size:btn-sm|type:btn-link" animation="from-bottom" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop',
      'image' => '0.1/loop_masonry-w-sticky-featured.jpg',
    ),
    array(
      'id' => 'loop_simple-grid-w-no-gaps_3-col',
      'name' => 'Loop - Simple Grid w/ no gaps - 3 Columns',
      'content' => '[vc_row][vc_column][vc_column_text]
      <h5>We love writing.</h5>
      [/vc_column_text][loprd_loop loop="size:3|order_by:date" _grid_columns="desktop:4|tablet:4" grid_columns_gap="none" grid_alignment_v="top" post_layout_ratio="2:1" post_content_layout="meta,title" post_meta="`{`omnis_author avatar=``false```}``{`omnis_date ago=``true```}`" post_drop_shadow="" post_content_padding="padding-bottom:none|padding-side:none|padding-top:half" post_content_max_width="80" post_title_typo="size-class:h4-size" animation="fade-in" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_simple-grid-w-no-gaps_3-col.jpg',
    ),
    array(
      'id' => 'loop_simple-no-thumb_w-vertical-hero_3-col',
      'name' => 'Loop - Simple No Thumbnails - Vertical Hero - 3 Columns',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/6"][vc_row_inner el_visibility="phone:hidden"][vc_column_inner][vc_custom_heading heading_text="Journal." heading_container="h2" heading_type_bg_direction="vertical" heading_color="rgba(0, 0, 0, 0.1)" css=".vc_custom_1539425682313{margin-top: 10px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner el_visibility="desktop:hidden|tablet:hidden"][vc_column_inner][vc_custom_heading heading_text="Journal" heading_container="h2" heading_color="rgba(0, 0, 0, 0.1)"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="5/6"][loprd_loop loop="size:3|order_by:date" _grid_columns="desktop:4|tablet:4" grid_columns_gap="double" grid_rows_gap="double" grid_alignment_v="top" post_layout_thumb="0" post_content_layout="title,meta,content|excerpt,more" post_drop_shadow="" post_read_more_button_style="size:btn-sm|type:btn-link|color:btn-light" post_content_padding="padding-top:none|padding-bottom:none|padding-side:none" post_content_el_padding="content:single|more:single" animation="from-top" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_simple-no-thumb_w-vertical-hero_3-col.jpg',
    ),
    array(
      'id' => 'loop_slider-bordered-squared_3-col',
      'name' => 'Loop - Slider Squared Bordered - 3 Columns',
      'content' => '[vc_section][vc_row row_section_padding="padding-bottom:single"][vc_column width="1/2"][vc_custom_heading heading_text="Latest news from our studio." heading_container="h4"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row][vc_row][vc_column column_padding="padding-top:one|padding-bottom:one|padding-side:one" column_background_color="#1a1a1a"][loprd_loop grid_layout="slider" grid_layout_slider_style="contained overflow-hidden" grid_layout_slider_pagination="" grid_layout_slider_autoplay="10000" grid_columns_gap="one" post_layout="img" post_layout_ratio="1:1" post_content_layout="title,meta" post_meta="`{`omnis_date ago=``true`` prepend=``added ```}`" post_alignment_h="center" post_hover_img_content="hover-content--bottom hover--out hover--el-overflow" post_image_overlay_color="#ffffff" post_content_skin_color="txt--dark" post_content_skin_custom_meta="#cccccc" post_drop_shadow="" post_content_padding="padding-top:double|padding-bottom:double|padding-side:double" post_content_el_padding="meta:single" animation="from-right" animation_delay="200"][/vc_column][/vc_row][/vc_section]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_slider-bordered-squared_3-col.jpg',
    ),
    array(
      'id' => 'loop_slider-large_full-width_3col-overlapped',
      'name' => 'Loop - Slider Large - Full Width - 3 Columns Overlapped',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:single|padding-side:none" row_section_container_width="stretched" row_force_as_bg="as-background"][vc_column][loprd_loop loop="size:6|order_by:date" grid_layout="slider" grid_layout_slider_style="full overflow-hidden" carousel_loop="enabled" carousel_pagination_padding="padding:single" _grid_columns="desktop:2/5|tablet:3/5|phone:10" grid_columns_gap="quarter" post_layout="img" post_layout_ratio="10:11" post_content_layout="meta,title,content|excerpt,meta2" post_meta="`{`omnis_cats`}`" post_meta2="`{`omnis_date ago=``true```}``{`omnis_permalink`}`" post_alignment_v="bottom" post_hover_img_content="hover-content--left hover--out" post_image_overlay_color="rgba(0, 0, 0, 0.45)" post_drop_shadow="" post_content_padding="padding-top:double|padding-bottom:double|padding-side:double" post_content_el_padding="title:half|content:single|meta-2:single" post_content_max_width="70" post_title_typo="size-class:h2-size" animation="from-right" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_slider-large_full-width_3col-overlapped.jpg',
    ),
    array(
      'id' => 'loop_slider-large-gaps_3col-overlapped',
      'name' => 'Loop - Slider Large Gaps Simple - 3 Columns Overlapped',
      'content' => '[vc_row][vc_column][vc_custom_heading heading_text="omnis. studio — latest news." heading_container="h3" heading_color="#e8e8e8"][loprd_loop loop="size:6|order_by:date" grid_layout="slider" carousel_pagination_padding="padding:double" _grid_columns="desktop:2/5|tablet:7" grid_columns_gap="quad" grid_alignment_v="baseline" post_layout_ratio="2:1" post_content_layout="title,meta" post_meta="`{`omnis_date ago=``true```}``{`omnis_comments`}`" post_hover_thumb="hover-thumb--scale-up" post_drop_shadow="" post_drop_shadow_thumbnail="drop-shadow" post_content_padding="padding-top:half" post_content_max_width="70" post_title_typo="size-class:h4-size" animation="from-bottom" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related, slider',
      'image' => '0.1/loop_slider-large-gaps_3col-overlapped.jpg',
    ),
    array(
      'id' => 'loop_slim-grid-centered_2-col',
      'name' => 'Loop - Simple Slim Centered - 2x3 Columns',
      'content' => '[vc_row][vc_column width="5/6" offset="vc_col-lg-offset-1 vc_col-sm-offset-1"][vc_custom_heading heading_text="Thoughts from omnis." heading_container="h2" heading_h_alignment="center" heading_typography="size-class:h1-alt" heading_color="transparent" heading_color_stroke="rgba(0,0,0,0.2)"][vc_empty_space][loprd_loop loop="size:6|order_by:date" _grid_columns="desktop:6" grid_columns_gap="double" grid_rows_gap="double" grid_alignment_v="center" post_layout_ratio="5:3" post_content_layout="title,meta" post_meta="`{`omnis_date ago=``true```}``{`omnis_permalink`}`" post_alignment_v="top" post_content_skin_custom_meta="#c7c7c7" post_drop_shadow="" post_content_max_width="80" post_meta_typo="size-class:body-size" animation="from-bottom" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop',
      'image' => '0.1/loop_slim-grid-centered_2-col.jpg',
    ),
    array(
      'id' => 'loop_textual-splited',
      'name' => 'Loop - Textual - Splited',
      'content' => '[vc_row][vc_column css=".vc_custom_1539438880699{border-top-width: 1px !important;border-top-color: rgba(0,0,0,0.05) !important;border-top-style: solid !important;}"][vc_row_inner row_rows_gap="single"][vc_column_inner width="1/4"][vc_custom_heading heading_text="We write." heading_container="h5" heading_color="#cccccc"][/vc_column_inner][vc_column_inner width="3/4"][loprd_loop loop="size:5|order_by:date" grid_layout="textual" grid_layout_textual_style="block" grid_rows_gap="quarter" grid_alignment_v="baseline" post_layout_ratio="1:1" post_content_layout="title,meta" post_meta="`{`omnis_date`}`" post_thumb_border_radius="9999"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_textual-splited.jpg',
    ),
    array(
      'id' => 'loop_simple-top-alignment_2col',
      'name' => 'Loop - Simple Top Aligned - 2 Columns',
      'content' => '[vc_row][vc_column][loprd_loop loop="size:2|order_by:date" _grid_columns="desktop:6" grid_alignment_v="top" post_layout_ratio="" post_content_layout="title,meta" post_meta="`{`omnis_date ago=``true```}``{`omnis_cats`}`" post_alignment_h="center" post_hover_thumb="hover-thumb--scale-up" post_content_skin_custom_meta="#cccccc" post_drop_shadow="" post_content_max_width="80"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.1/loop_simple-top-alignment_2col.jpg',
    ),
    array(
      'id' => 'text_ext-side-hero',
      'name' => 'Text w/ Extended Side Hero',
      'content' => '[vc_row row_columns_gap="triple"][vc_column width="1/3"][vc_custom_heading heading_text="About." heading_container="h2" heading_type="as-background" heading_typography="font-size:120|line-height:1em|font-weight:700" heading_color="rgba(0, 0, 0, 0.03)" heading_advanced_h_offset="desktop:pull-2|tablet:pull-double" heading_advanced_v_offset="desktop:pull-single|tablet:pull-single|phone:pull-single"][vc_row_inner el_zindex="1"][vc_column_inner][vc_custom_heading heading_text="We are omnis." heading_container="h4"][vc_custom_heading heading_text="Nunc sit amet ornare elit." heading_container="p" heading_typography="size-class:leading-size"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][vc_column_text]Quisque sagittis neque neque, ut posuere mi commodo ac. Morbi vitae odio at massa egestas gravida ut vel urna. Morbi tristique consequat dui, sit amet accumsan arcu scelerisque sit amet. Curabitur porta felis vitae mauris dignissim facilisis. Nunc nec tincidunt mauris, at sollicitudin tortor.

      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit justo ut mattis congue. Suspendisse vehicula, libero ac pellentesque ornare, urna augue congue risus, a varius metus nisi at lorem.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text, hero',
      'image' => '0.1/text_ext-side-hero.jpg',
    ),
    array(
      'id' => 'text_ext-side-hero-stroke',
      'name' => 'Text w/ Extended Side Hero Stroke',
      'content' => '[vc_row row_columns_gap="triple"][vc_column width="1/3"][vc_custom_heading heading_text="Work." heading_container="h2" heading_type="as-background" heading_typography="font-size:120|line-height:1em|font-weight:700" heading_color="transparent" heading_color_stroke="#f1f1f1" heading_advanced_h_offset="desktop:pull-2|tablet:pull-double" heading_advanced_v_offset="desktop:pull-single|tablet:pull-single|phone:pull-single"][vc_row_inner el_zindex="1"][vc_column_inner][vc_custom_heading heading_text="What we do." heading_container="h4"][vc_custom_heading heading_text="Mauris ultrices vitae." heading_container="p" heading_typography="size-class:leading-size"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3"][vc_column_text]Nunc sit amet ornare elit. Nulla at sollicitudin ipsum. Cras feugiat vehicula massa. Proin ut euismod purus. Proin dictum malesuada est ut malesuada. Quisque suscipit dapibus rutrum. Ut sit amet tellus id ante pharetra elementum vitae ac felis. Sed sit amet tempor elit. Curabitur lacinia vitae nulla eu sagittis. Nunc efficitur pellentesque neque sed vestibulum. Morbi elementum cursus neque commodo blandit. Pellentesque tempor ut dolor eu malesuada. Phasellus urna ipsum, varius ut neque non, ullamcorper dapibus est.

      Aenean feugiat ac turpis sed finibus. Donec quis risus in dolor pellentesque pulvinar. Suspendisse at tellus ut justo egestas fringilla. Proin ac sem augue. Fusce vulputate semper tristique. Phasellus at diam convallis quam dapibus scelerisque. Curabitur vehicula, tellus a scelerisque commodo, erat mi dictum metus, eu ullamcorper sapien ante viverra tortor. Phasellus congue ex a eleifend euismod. Nulla aliquam erat porta orci convallis sodales.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text, hero',
      'image' => '0.1/text_ext-side-hero-stroke.jpg',
    ),
    array(
      'id' => 'text_simple-side-hero_w-top-border',
      'name' => 'Text - Simple Side Hero - Top Border',
      'content' => '[vc_row][vc_column css=".vc_custom_1539438880699{border-top-width: 1px !important;border-top-color: rgba(0,0,0,0.05) !important;border-top-style: solid !important;}"][vc_row_inner row_rows_gap="single"][vc_column_inner width="1/4"][vc_custom_heading heading_text="Who we are." heading_container="h5" heading_color="#cccccc"][/vc_column_inner][vc_column_inner width="3/4"][vc_column_text]Etiam suscipit risus purus, quis maximus mi viverra id. Fusce ornare est lectus, ac consequat purus placerat a. Duis non diam est. Suspendisse sit amet scelerisque est. Suspendisse congue, orci at suscipit semper, metus sapien pretium libero, mollis volutpat enim felis a enim.

      Vivamus eu nunc volutpat, venenatis arcu quis, fringilla massa. Duis tempor vel ante quis accumsan. Pellentesque eu volutpat neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text, hero',
      'image' => '0.1/text_simple-side-hero_w-top-border.jpg',
    ),
    array(
      'id' => 'text-side-vertical-header_1+2col',
      'name' => 'Text - Vertical Hero - 1Col + 2Col',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/6"][vc_row_inner el_visibility="phone:hidden"][vc_column_inner][vc_custom_heading heading_text="Our vision." heading_container="h2" heading_type_bg_direction="vertical" heading_color="rgba(0, 0, 0, 0.1)" css=".vc_custom_1539613169296{margin-top: 10px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner el_visibility="desktop:hidden|tablet:hidden"][vc_column_inner][vc_custom_heading heading_text="Our vision." heading_container="h2" heading_color="rgba(0, 0, 0, 0.1)"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="5/6"][vc_row_inner row_rows_gap="single"][vc_column_inner width="1/2"][vc_column_text]Aliquam lacinia urna massa, vel aliquet tellus rutrum ac. In scelerisque suscipit ipsum. Nulla auctor laoreet risus eget pellentesque. Integer eu dapibus massa, sed dictum augue. Phasellus vulputate risus at justo suscipit mollis. Nam at ipsum nec sem ullamcorper tempor. Ut sit amet ligula purus. Vivamus ex ante, tempus vitae tortor in, auctor hendrerit lectus. Suspendisse lacinia pharetra ornare. Ut scelerisque sapien non scelerisque mollis. Donec ex nulla, lobortis egestas sollicitudin a, tincidunt sit amet odio.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]Duis ac mauris pretium ipsum vestibulum placerat. Aliquam congue orci vitae lorem ultrices, at tempus quam gravida. Donec vitae erat ante. Quisque posuere turpis ac magna viverra molestie. Nulla ultricies est tortor, eget cursus nulla tincidunt non. Morbi malesuada lorem magna. Sed molestie sapien vel odio volutpat sagittis.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text, hero',
      'image' => '0.1/text-side-vertical-header_1+2col.jpg',
    ),
    array(
      'id' => 'hero_h1-alt+h5',
      'name' => 'Hero - Small Title w/ Large Subtitle ',
      'content' => '[vc_row row_section_padding="padding-top:triple" columns_animation="scale-up" columns_animation_duration="1000" columns_animation_delay="500"][vc_column width="2/3"][vc_custom_heading heading_text="`{`omnis_title`}`" heading_container="h1" heading_typography="size-class:h3-size"][vc_custom_heading heading_text="`{`omnis_subtitle`}`" heading_container="h2" heading_typography="size-class:h1-alt"][/vc_column][/vc_row]',
      'category' => 'text, hero, titlebar',
      'image' => '0.2/hero_h1-alt+h5.jpg',
    ),
    array(
      'id' => 'hero_h1-alt+h5',
      'name' => 'Hero - Small Title w/ Large Subtitle ',
      'content' => '[vc_section][vc_row row_container_height_custom="80vh" row_content_txt_skin="txt--light" row_background_color="#d8d8d8" row_background_image_effect="parallax parallax-v" row_background_image_external="https://source.unsplash.com/fotKKqWNMQ4/2000x1300"][vc_column][/vc_column][/vc_row][/vc_section]',
      'category' => 'image, full-width',
      'image' => '0.2/hero_h1-alt+h5.jpg',
    ),
    array(
      'id' => 'hero_text_w-radius-image-centered',
      'name' => 'Hero - Text Centered - Radius Image ',
      'content' => '[vc_row row_columns_gap="quad" row_background_color="#fafafa"][vc_column width="1/2"][vc_empty_space empty_height="single" el_visibility="phone:hidden"][vc_custom_heading heading_text="Our Story." heading_container="h2"][vc_text_separator separator_size="large" separator_width="small"][vc_column_text]
      <p class="leading-size">Mauris malesuada facilisis rutrum. Fusce venenatis nibh nec lectus rutrum, eget interdum ipsum dapibus. Vivamus in sem feugiat, mattis purus in, consequat eros. Cras ornare pulvinar mi vitae interdum. Nam quam urna, pretium sit amet suscipit eu, pulvinar quis nisi.</p>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][vc_column column_content_alignment_v="center" width="1/2"][vc_single_image image_border_radius="10" image_overlay_hover="hover-out" image_shadow="drop-shadow" image_width="1300" image_ratio="4:3" el_zindex="1" image_external="https://source.unsplash.com/ayAiC1mY13I/1300x900"][/vc_column][/vc_row]',
      'category' => 'image, text, hero, button',
      'image' => '0.2/hero_text_w-radius-image-centered.jpg',
    ),
    array(
      'id' => 'hero_text_w-radius-image-centered_dark',
      'name' => 'Hero - Text Centered - Radius Image ',
      'content' => '[vc_row row_columns_gap="quad" row_content_txt_skin="txt--light" row_background_color="#1a1a1a"][vc_column width="1/2"][vc_empty_space empty_height="single" el_visibility="phone:hidden"][vc_custom_heading heading_text="Our Story." heading_container="h2"][vc_text_separator separator_size="large" separator_width="small"][vc_column_text]
      <p class="leading-size">Mauris malesuada facilisis rutrum. Fusce venenatis nibh nec lectus rutrum, eget interdum ipsum dapibus. Vivamus in sem feugiat, mattis purus in, consequat eros. Cras ornare pulvinar mi vitae interdum. Nam quam urna, pretium sit amet suscipit eu, pulvinar quis nisi.</p>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][vc_column column_content_alignment_v="center" width="1/2"][vc_single_image image_border_radius="10" image_overlay_hover="hover-out" image_shadow="drop-shadow" image_width="1300" image_ratio="4:3" el_zindex="1" image_external="https://source.unsplash.com/0J5_6JCYXJ0/1300x900"][/vc_column][/vc_row]',
      'category' => 'image, text, hero, dark-bg, button',
      'image' => '0.2/hero_text_w-radius-image-centered_dark.jpg',
    ),
    array(
      'id' => 'team_bio-above_full-width_4-cols',
      'name' => 'Team - Bio Above - Full Width',
      'content' => '[vc_section][vc_row row_section_padding="padding-top:single|padding-bottom:double" row_columns_gap="double" row_force_as_bg="as-background"][vc_column width="1/4"][vc_row_inner el_visibility="desktop:hidden|tablet:hidden"][vc_column_inner][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_custom_heading heading_text="Oscar Briar" heading_container="h4" heading_h_alignment="inline"][vc_custom_heading heading_text="CEO & Founder" heading_container="span" heading_h_alignment="inline" heading_typography="size-class:h4-size"][vc_empty_space empty_height="half"][vc_column_text]Suspendisse ornare eros ut sapien suscipit, et semper purus lacinia. Nam tempor elit at odio consectetur, nec consequat enim sagittis.[/vc_column_text][vc_text_separator][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-facebook-f" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-twitter" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-linkedin-in" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner el_visibility="desktop:hidden|tablet:hidden"][vc_column_inner][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_custom_heading heading_text="Hailey Fields" heading_container="h4" heading_h_alignment="inline"][vc_custom_heading heading_text="CTO" heading_container="span" heading_h_alignment="inline" heading_typography="size-class:h4-size"][vc_empty_space empty_height="half"][vc_column_text]Aenean lacus ante, fringilla tincidunt nulla nec, ullamcorper mattis neque. Nunc et convallis sem.[/vc_column_text][vc_text_separator][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-twitter" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-linkedin-in" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner el_visibility="desktop:hidden|tablet:hidden"][vc_column_inner][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_custom_heading heading_text="Trace Roscoe" heading_container="h4" heading_h_alignment="inline"][vc_custom_heading heading_text="Dev Lead" heading_container="span" heading_h_alignment="inline" heading_typography="size-class:h4-size"][vc_empty_space empty_height="half"][vc_column_text]Sed ut porttitor velit, sit amet ornare sapien. Vivamus ante augue, efficitur ac tincidunt ut, lobortis nec odio.[/vc_column_text][vc_text_separator][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-github" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-twitter" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-linkedin-in" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner el_visibility="desktop:hidden|tablet:hidden"][vc_column_inner][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][vc_custom_heading heading_text="Terrie Strickland" heading_container="h4" heading_h_alignment="inline"][vc_custom_heading heading_text="Design Lead" heading_container="span" heading_h_alignment="inline" heading_typography="size-class:h4-size"][vc_empty_space empty_height="half"][vc_column_text]Sed quam tortor, varius sit amet diam ut, rutrum bibendum ex. Suspendisse malesuada vel dui eu molestie. Nullam ac aliquet elit, vel consectetur diam.[/vc_column_text][vc_text_separator][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-dribbble" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-twitter" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][vc_icon type="fontawesomenew" icon_fontawesomenew="fab fa-linkedin-in" icon_typography="font-size:15" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_columns_gap="none" el_visibility="phone:hidden"][vc_column width="1/4"][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column][vc_column width="1/4"][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column][vc_column width="1/4"][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column][vc_column width="1/4"][vc_single_image image_external="https://source.unsplash.com/RPKmkxJw_a0/1000x1000" image_width="1000" image_ratio="1:1"][/vc_column][/vc_row][/vc_section]',
      'category' => 'team, image, full-width',
      'image' => '0.2/team_bio-above_full-width_4-cols.jpg',
    ),
    array(
      'id' => 'hero_text_video-radius',
      'name' => 'Hero - Text Centered - Radius Video',
      'content' => '[vc_row row_column_content_alignment_v="center" row_columns_gap="quad" row_content_txt_skin="txt--light" row_background_color="#1a1a1a"][vc_column width="2/3"][vc_video link="https://vimeo.com/306258963" css=".vc_custom_1549134564368{border-radius: 10px !important;}" el_class="overflow-hidden"][/vc_column][vc_column width="1/3"][vc_custom_heading heading_text="There is plenty of possibilities." heading_container="h2"][vc_column_text]
      <p class="leading-size">Phasellus at est non lacus ullamcorper bibendum. Praesent enim tellus, dignissim non metus et, sagittis efficitur diam.</p>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'video, text, hero, dark-bg, button',
      'image' => '0.2/hero_text_video-radius.jpg',
    ),
    array(
      'id' => 'services_rounded-images_2x3',
      'name' => 'Services - Rounded Images - 2x3',
      'content' => '[vc_section][vc_row row_columns_gap="triple" row_rows_gap="triple" columns_animation="from-left" columns_animation_delay="200"][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_width="200" image_ratio="1:1" image_external="https://source.unsplash.com/GDP_CXFHiuI/200x200"][vc_custom_heading heading_text="Front-End Development" heading_container="h3" link="|||"][vc_column_text]In malesuada maximus mattis. Etiam interdum vulputate pulvinar.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_width="200" image_ratio="1:1" image_external="https://source.unsplash.com/8jQbkGwVnAk/200x200"][vc_custom_heading heading_text="Back-End Development" heading_container="h3" link="|||"][vc_column_text]Mauris dolor nisl, tincidunt ut dapibus congue, convallis eu lorem. Praesent rutrum lacus ac massa elementum pretium.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_width="200" image_ratio="1:1" image_external="https://source.unsplash.com/PyGo1QBz5cI/200x200"][vc_custom_heading heading_text="iOS & Android" heading_container="h3" link="|||"][vc_column_text]Sed nulla massa, mattis porta augue non, consequat semper lacus.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_width="200" image_ratio="1:1" image_external="https://source.unsplash.com/du8AbwM5z2g/200x200"][vc_custom_heading heading_text="E-commerce" heading_container="h3" link="|||"][vc_column_text]In malesuada maximus mattis. Etiam interdum vulputate pulvinar.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_width="200" image_ratio="1:1" image_external="https://source.unsplash.com/mxPiMiz7KCo/200x200"][vc_custom_heading heading_text="UI & UX" heading_container="h3" link="|||"][vc_column_text]Mauris dolor nisl, tincidunt ut dapibus congue, convallis eu lorem. Praesent rutrum lacus ac massa elementum pretium.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_row_inner][vc_column_inner][vc_single_image image_style="rounded" image_width="200" image_ratio="1:1" image_external="https://source.unsplash.com/DZ0MfTX_9sQ/200x200"][vc_custom_heading heading_text="Creative Direction" heading_container="h3" link="|||"][vc_column_text]Sed nulla massa, mattis porta augue non, consequat semper lacus.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]',
      'category' => 'services, text, image',
      'image' => '0.2/services_rounded-images_2x3.jpg',
    ),
    array(
      'id' => 'hero_titlebar_alt-subtitle_colorful',
      'name' => 'Hero - Titlebar - Alt Subtitle',
      'content' => '[vc_section][vc_row row_container_height_custom="50vh" row_container_alignment_v="bottom" row_column_content_alignment_v="bottom" row_background_color="rgb(86, 49, 226)"][vc_column width="2/3"][vc_custom_heading heading_text="`{`omnis_title`}`" heading_container="h1" heading_typography="size-class:h1-alt" heading_color="#ffffff" heading_text_shadow="drop-shadow-text"][vc_empty_space empty_height="none"][vc_custom_heading heading_text="`{`omnis_subtitle`}`" heading_container="h2" heading_typography="size-class:h1-alt|font-family:Playfair Display|google-font:true|font-weight:400" heading_color="#ffffff" heading_text_shadow="drop-shadow-text"][/vc_column][/vc_row][/vc_section]',
      'category' => 'hero, titlebar, colorful',
      'image' => '0.2/hero_titlebar_alt-subtitle_colorful.jpg',
    ),
    array(
      'id' => 'tabs_left_leading-text',
      'name' => 'Tabs - Leading Text',
      'content' => '[vc_row][vc_column width="2/3"][vc_tabs interval="0" tabs_nav_h_alignment="left" tabs_nav_active_indicator="" tabs_nav_typography="font-family:Playfair Display|google-font:true|font-weight:400"][vc_tab title="Who we are" tab_id="1535984176-1-112c33-3549"][vc_column_text]
      <p class="leading-size">Etiam ornare, massa id tempor volutpat, eros tortor maximus dolor, ac auctor urna nibh eget arcu. Sed sagittis ex arcu, id interdum quam mattis sed. Sed pulvinar massa vitae tellus lobortis pellentesque. Sed libero risus, suscipit non urna nec, accumsan pulvinar elit.</p>
      <p class="leading-size">Sed sit amet dignissim leo. Phasellus interdum magna metus, quis facilisis nulla gravida id. Suspendisse potenti. Nam id congue leo, eu pulvinar nibh. Sed sit amet purus non augue efficitur varius.</p>
      [/vc_column_text][/vc_tab][vc_tab title="What we do" tab_id="1535984176-2-592c33-3549"][vc_column_text]
      <p class="leading-size">Aliquam condimentum finibus dolor, at lacinia libero tristique nec. Nam non ultrices velit. Curabitur ultricies rutrum leo non mattis. Aenean a tincidunt neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut ac arcu commodo, ultricies nisi consequat, molestie diam. Etiam varius urna lectus. Mauris in imperdiet enim. Morbi tellus sem, finibus id justo porta, varius rutrum nisl.</p>
      [/vc_column_text][/vc_tab][vc_tab title="Where we are" tab_id="1535984453722-2-02c33-3549"][vc_column_text]
      <p class="leading-size">Etiam ornare, massa id tempor volutpat, eros tortor maximus dolor, ac auctor urna nibh eget arcu. Sed sagittis ex arcu, id interdum quam mattis sed. Sed pulvinar massa vitae tellus lobortis pellentesque. Sed libero risus, suscipit non urna nec, accumsan pulvinar elit. Sed sit amet dignissim leo. Phasellus interdum magna metus, quis facilisis nulla gravida id. Suspendisse potenti. Nam id congue leo, eu pulvinar nibh. Sed sit amet purus non augue efficitur varius.</p>
      [/vc_column_text][/vc_tab][/vc_tabs][/vc_column][/vc_row]',
      'category' => 'tabs, text',
      'image' => '0.2/tabs_left_leading-text.jpg',
    ),
    array(
      'id' => 'row-separator_full-width_border',
      'name' => 'Row Separator - Full Width - Border',
      'content' => '[vc_row row_force_as_bg="as-simple" css=".vc_custom_1563374970188{border-top-width: 1px !important;border-top-style: solid !important;}"][vc_column][/vc_column][/vc_row]',
      'category' => 'separator, full-width',
      'image' => '0.2/row-separator_full-width_border.jpg',
    ),
    array(
      'id' => 'masonry-gallery_accordion_alt-typo',
      'name' => 'Gallery Masonry - Accordion - Alt Typo',
      'content' => '[vc_row row_columns_gap="quad"][vc_column width="1/2"][vc_gallery images_anchor_full="" images_layout="masonry" images_columns_span="desktop:4|tablet:4|phone:4" images_columns_gap="quarter" images_rows_gap="quarter" image_width="1000" animation="from-bottom" animation_delay="200"][/vc_column][vc_column width="1/2"][vc_accordion accordion_styling_layout="header" accordion_header_padding="padding-side:none" accordion_content_padding="padding-side:none" accordion_content_shadow="" accordion_header_typography="size-class:h2-size|font-weight:400|font-family:Playfair Display|google-font:true"][vc_accordion_tab title="01. Brand Strategy"][vc_column_text]Etiam sit amet quam urna. Suspendisse mattis orci nunc, vel suscipit eros ornare eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus arcu dolor, facilisis et mi in, vestibulum ultrices odio.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="02. Identity Design"][vc_column_text]Fusce cursus mi nulla. Donec vestibulum posuere turpis rutrum blandit. Aenean non imperdiet magna. Proin placerat eros et tempor condimentum. Aenean semper finibus odio, non porttitor nisl sagittis nec.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="03. Web Development"][vc_column_text]Sed lectus neque, dictum id hendrerit id, suscipit ac quam. Vestibulum et mauris eu arcu mollis faucibus. Curabitur malesuada sit amet magna quis sodales. Nulla et velit vitae justo semper maximus. Nullam placerat, ligula vel accumsan laoreet, nunc orci mollis mauris, eu sagittis elit augue vitae ante.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="04. Campaigns"][vc_column_text]Etiam sit amet quam urna. Suspendisse mattis orci nunc, vel suscipit eros ornare eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus arcu dolor, facilisis et mi in, vestibulum ultrices odio. Suspendisse sodales ipsum id turpis lobortis, id consequat velit egestas.[/vc_column_text][/vc_accordion_tab][/vc_accordion][/vc_column][/vc_row]',
      'category' => 'gallery, accordion, text',
      'image' => '0.2/masonry-gallery_accordion_alt-typo.jpg',
    ),
    array(
      'id' => 'gallery_masonry-full-width_w-hero',
      'name' => 'Gallery Masonry - Full Width - w/Hero',
      'content' => '[vc_section section_content_txt_skin="txt--light" section_background_color="#1a1a1a"][vc_row row_columns_gap="quad"][vc_column width="2/3"][vc_column_text]
      <h2 class="h1-alt">Inside studio.
      <span style="font-family: \'Playfair Display\';">Donec a <em>faucibus</em> turpis.</span></h2>
      [/vc_column_text][/vc_column][/vc_row][vc_row row_section_padding="padding-bottom:none|padding-side:none" row_section_container_width="stretched"][vc_column][vc_gallery images_anchor_full="" images_layout="masonry" images_columns_span="desktop:6" images_columns_gap="double" images_rows_gap="double" image_width="1300"][/vc_column][/vc_row][/vc_section]',
      'category' => 'gallery, hero, full-width, dark-bg',
      'image' => '0.2/gallery_masonry-full-width_w-hero.jpg',
    ),
    array(
      'id' => 'hero_w-modal-video',
      'name' => 'Hero - modal Video',
      'content' => '[vc_row row_section_padding="padding-top:quad|padding-bottom:quad" row_column_content_alignment_v="center" row_background_color="#fafafa"][vc_column width="2/3"][vc_custom_heading heading_text="Interested in a collaboration?" heading_container="h2"][vc_custom_heading heading_text="See how it works." heading_container="h2" heading_color="linear-gradient(333deg, #5631e2 0%, #bf31e2 100%)" css=".vc_custom_1548781024055{margin-top: 0px !important;}"][/vc_column][vc_column column_alignment_h="right" width="1/3"][vc_video link="https://www.youtube.com/watch?v=RBDxZYLi630" video_lightbox="enabled" video_lighbox_icon_color="#ffffff" video_lighbox_icon_bg="#5631e2" video_lighbox_icon_size="40"][/vc_column][/vc_row]',
      'category' => 'hero, video, call-to-action',
      'image' => '0.2/hero_w-modal-video.jpg',
    ),
    array(
      'id' => 'services_bg-text_single',
      'name' => 'Services - BG text - Icon - Single',
      'content' => '[vc_row][vc_column width="2/3"][vc_custom_heading heading_text="Dev" heading_type="as-background" heading_type_bg_oneline="true" heading_typography="font-size:350|line-height:1em|font-weight:700" heading_color="rgba(49, 159, 226, 0.05)" heading_advanced_h_offset="desktop:pull-double|tablet:pull-half" heading_advanced_v_offset="desktop:pull-double"][vc_empty_space empty_height="quad"][vc_row_inner row_columns_gap="double" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_icon type="material" icon_material="vc-material vc-material-dashboard" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
      <p class="leading-size">Etiam ornare dui sit amet fermentum cursus. Nullam eget sem eros. Sed sed posuere sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce risus lacus, tempor nec auctor sed, ultrices eget nulla. Donec sed lacus in dui semper tincidunt quis et velit. Morbi at tellus sed libero ultrices accumsan.</p>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'services, icon, text, button',
      'image' => '0.2/services_bg-text_single.jpg',
    ),
    array(
      'id' => 'services_bg-text_section',
      'name' => 'Services - BG text - Icon',
      'content' => '[vc_section][vc_row columns_animation="from-left"][vc_column width="2/3"][vc_custom_heading heading_text="Dev" heading_type="as-background" heading_type_bg_oneline="true" heading_typography="font-size:350|line-height:1em|font-weight:700" heading_color="rgba(49, 159, 226, 0.05)" heading_advanced_h_offset="desktop:pull-double|tablet:pull-half" heading_advanced_v_offset="desktop:pull-double"][vc_empty_space empty_height="quad"][vc_row_inner row_columns_gap="double" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_icon type="material" icon_material="vc-material vc-material-dashboard" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
      <p class="leading-size">Etiam ornare dui sit amet fermentum cursus. Nullam eget sem eros. Sed sed posuere sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce risus lacus, tempor nec auctor sed, ultrices eget nulla. Donec sed lacus in dui semper tincidunt quis et velit. Morbi at tellus sed libero ultrices accumsan.</p>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row row_force_as_bg="as-simple" css=".vc_custom_1549388995095{border-top-width: 1px !important;border-top-color: rgba(0,0,0,0.05) !important;border-top-style: solid !important;}"][vc_column][/vc_column][/vc_row][vc_row columns_animation="from-right"][vc_column width="2/3" offset="vc_col-sm-offset-4"][vc_custom_heading heading_text="Art" heading_type="as-background" heading_type_bg_oneline="true" heading_typography="font-size:350|line-height:1em|font-weight:700" heading_color="rgba(49, 226, 64, 0.05)" heading_advanced_h_offset="desktop:pull-double|tablet:pull-half" heading_advanced_v_offset="desktop:pull-double"][vc_empty_space empty_height="quad"][vc_row_inner row_columns_gap="double" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_icon type="material" icon_material="vc-material vc-material-brush" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
      <p class="leading-size">Ut consequat, massa sit amet porttitor ultrices, odio magna malesuada nisl, in tincidunt magna ex vel erat. Vivamus malesuada dolor est, in consequat nisi volutpat quis. Phasellus nec accumsan dolor. Maecenas vehicula dui magna, at ullamcorper risus lobortis id. Praesent nec efficitur enim, id tempus tortor.</p>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row row_force_as_bg="as-simple" css=".vc_custom_1549389000166{border-top-width: 1px !important;border-top-color: rgba(0,0,0,0.05) !important;border-top-style: solid !important;}"][vc_column][/vc_column][/vc_row][vc_row columns_animation="from-left"][vc_column width="2/3" offset="vc_col-sm-offset-2"][vc_custom_heading heading_text="SEO" heading_type="as-background" heading_type_bg_oneline="true" heading_typography="font-size:350|line-height:1em|font-weight:700" heading_color="rgba(226, 49, 49, 0.05)" heading_advanced_h_offset="desktop:pull-double|tablet:pull-half" heading_advanced_v_offset="desktop:pull-double"][vc_empty_space empty_height="quad"][vc_row_inner row_columns_gap="double" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_icon type="material" icon_material="vc-material vc-material-search" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#ffffff"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
      <p class="leading-size">Cras imperdiet ligula a maximus elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec quis arcu ultrices, laoreet libero nec, porta erat. Nam blandit odio nec congue volutpat. Sed porta elementum faucibus. Quisque est sem, scelerisque at vehicula eu, tempor sit amet sem. Fusce eget lobortis neque.</p>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]',
      'category' => 'services, icon, text, button',
      'image' => '0.2/services_bg-text_section.jpg',
    ),
    array(
      'id' => 'counter_white-bg_alt-section_top-border',
      'name' => 'Counter - White BG Blocks - 4 Cols',
      'content' => '[vc_section][vc_row row_rows_gap="single" row_background_color="#fafafa"][vc_column][vc_text_separator][vc_empty_space empty_height="half"][vc_custom_heading heading_text="#omnis in numbers"][vc_empty_space empty_height="single"][/vc_column][vc_column width="1/4"][vc_row_inner row_background_color="#ffffff" el_overfow="hidden"][vc_column_inner][vc_custom_heading heading_text="Happy Customers" heading_container="h5"][vc_empty_space empty_height="half"][loprd_counter start_value="100" end_value="600" counter_typography="size-class:h1-alt" suffix="+"][vc_empty_space empty_height="_custom" empty_height_custom="height:10vh" el_visibility="phone:hidden"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_background_color="#ffffff" el_overfow="hidden"][vc_column_inner][vc_custom_heading heading_text="Users" heading_container="h5"][vc_empty_space empty_height="half"][loprd_counter start_value="0.1" end_value="12.5" decimals="1" counter_typography="size-class:h1-alt" suffix="k+"][vc_empty_space empty_height="_custom" empty_height_custom="height:10vh" el_visibility="phone:hidden"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_background_color="#ffffff" el_overfow="hidden"][vc_column_inner][vc_custom_heading heading_text="Revenue" heading_container="h5"][vc_empty_space empty_height="half"][loprd_counter start_value="0.1" end_value="3.5" decimals="1" counter_typography="size-class:h1-alt" suffix="M+"][vc_empty_space empty_height="_custom" empty_height_custom="height:10vh" el_visibility="phone:hidden"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/4"][vc_row_inner row_background_color="#ffffff" el_overfow="hidden"][vc_column_inner][vc_custom_heading heading_text="Our Team" heading_container="h5"][vc_empty_space empty_height="half"][loprd_counter start_value="1" end_value="60" counter_typography="size-class:h1-alt" suffix="+"][vc_empty_space empty_height="_custom" empty_height_custom="height:10vh" el_visibility="phone:hidden"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]',
      'category' => 'counter',
      'image' => '0.2/counter_white-bg_alt-section_top-border.jpg',
    ),
    array(
      'id' => 'loop_masonry-full-width-over-img_2cols_w-color',
      'name' => 'Loop - Masonry Full Width - 2 Cols - w/ Hero',
      'content' => '[vc_section section_content_txt_skin="txt--light" section_background_color="#1a1a1a"][vc_row row_columns_gap="quad"][vc_column width="2/3"][vc_column_text]
      <h2 class="h1-alt">Our realisations.
      <span style="font-family: \'Playfair Display\';">Nunc sit <em>amet faucibus</em> leo.</span></h2>
      [/vc_column_text][/vc_column][/vc_row][vc_row row_section_padding="padding-side:none|padding-bottom:none" row_section_container_width="stretched" el_overfow="hidden"][vc_column][loprd_loop loop="size:4|order_by:rand" grid_layout="masonry" _grid_columns="desktop:6|tablet:6" grid_columns_gap="double" grid_rows_gap="double" post_layout="img" post_layout_ratio="" post_alignment_v="bottom" post_hover_img_content="hover-content--bottom hover--in hover--el-overflow" post_styling_setting="content" post_content_bg_color="#5631e2" post_image_overlay_color="transparent" post_drop_shadow="" post_content_el_padding="meta:single" post_content_max_width="80" post_title_typo="size-class:h3-size" animation="from-bottom-long" animation_delay="200" grid_images_max_width="1300"][/vc_column][/vc_row][/vc_section]',
      'category' => 'loop, dark-bg, full-width',
      'image' => '0.2/loop_masonry-full-width-over-img_2cols_w-color.jpg',
    ),
    array(
      'id' => 'hero-separator_w-line_icon',
      'name' => 'Hero - Separator - w/ Icon',
      'content' => '[vc_row row_column_content_alignment_v="top"][vc_column][vc_row_inner row_column_alignment_v="center" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_custom_heading heading_text="Who we are." heading_container="h2" heading_type_bg_oneline="true"][/vc_column_inner][vc_column_inner][vc_text_separator][/vc_column_inner][vc_column_inner width="auto"][vc_icon type="material" icon_material="vc-material vc-material-arrow_downward" alignment="right" icon_typography="font-size:20" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#4a4a4a"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'hero, separator, icon',
      'image' => '0.2/hero-separator_w-line_icon.jpg',
    ),
    array(
      'id' => 'hero-separator_w-line_icon_pinned',
      'name' => 'Hero - Separator - w/ Icon - Pinned',
      'content' => '[vc_row row_container_height_custom="50vh" row_column_content_alignment_v="top"][vc_column column_sticky="enabled"][vc_row_inner row_column_alignment_v="center" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_custom_heading heading_text="What we do." heading_container="h2" heading_type_bg_oneline="true"][/vc_column_inner][vc_column_inner][vc_text_separator][/vc_column_inner][vc_column_inner width="auto"][vc_icon type="material" icon_material="vc-material vc-material-arrow_downward" alignment="right" icon_typography="font-size:20" icon_text_skin="txt--light" icon_style="bg" icon_bg_shadow="drop-shadow" icon_bg_color="#4a4a4a"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'hero, separator, icon',
      'image' => '0.2/hero-separator_w-line_icon_pinned.jpg',
    ),
    array(
      'id' => 'text_pinned-fade-out',
      'name' => 'Text - Pinned - Fade Out',
      'content' => '[vc_section section_background_color="transparent" section_scroll_pin="enabled" section_content_animation="fade-out"][vc_row row_section_padding="padding-bottom:none" row_container_height_custom="100vh" row_rows_gap="single" columns_animation="from-bottom-long" columns_animation_duration="1200" columns_animation_delay="600"][vc_column column_padding="padding-bottom:double|padding-side:double|padding-top:double" column_background_color="linear-gradient(0deg, transparent 0%, #f5f5f5 65%)" el_zindex="2" width="3/4" offset="vc_col-sm-offset-3"][vc_custom_heading heading_text="Our Story." heading_container="h4" heading_typography="font-weight:400|font-family:Playfair Display|google-font:true"][vc_column_text]
      <p class="leading-size">Nunc ac semper elit. Integer fringilla odio vel viverra laoreet. Donec augue nulla, tempus vel scelerisque ac, pulvinar vitae sapien. Integer ut mollis urna, non blandit metus. Nulla ex orci, dictum sit amet eleifend non, ornare et tortor. Ut volutpat nisi sed diam iaculis, id iaculis nisl imperdiet. Quisque ullamcorper, magna vel imperdiet porttitor, felis nibh feugiat tortor, id aliquam erat libero non dolor. Nam dapibus iaculis nisi sit amet tincidunt.</p>
      <p class="leading-size">Aenean imperdiet vehicula elit sit amet pretium. Pellentesque tincidunt nibh ac sem mattis, ut fringilla eros pharetra. Praesent sit amet posuere orci. Nunc porttitor ac velit in egestas. Mauris vitae libero vel ex lacinia iaculis. Donec quis metus quis tellus iaculis tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
      [/vc_column_text][/vc_column][/vc_row][/vc_section]',
      'category' => 'text',
      'image' => '0.2/text_pinned-fade-out.jpg',
    ),
    array(
      'id' => 'team_square-images_4cols',
      'name' => 'Team - No gap Squared Images',
      'content' => '[vc_row row_rows_gap="single"][vc_column el_zindex="2"][vc_custom_heading heading_text="Our team." heading_container="h4" heading_typography="font-weight:400|font-family:Playfair Display|google-font:true"][vc_row_inner row_columns_gap="none" row_rows_gap="none" columns_animation="from-bottom" columns_animation_delay="200"][vc_column_inner width="1/4"][vc_single_image image_external="https://source.unsplash.com/tidSLv-UaNs/1000x1000" image_link="custom-url" image_link_hover="opacity" image_width="1000" image_ratio="1:1" image_link_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image_external="https://source.unsplash.com/tidSLv-UaNs/1000x1000" image_link="custom-url" image_link_hover="opacity" image_width="1000" image_ratio="1:1" image_link_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image_external="https://source.unsplash.com/tidSLv-UaNs/1000x1000" image_link="custom-url" image_link_hover="opacity" image_width="1000" image_ratio="1:1" image_link_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image_external="https://source.unsplash.com/tidSLv-UaNs/1000x1000" image_link="custom-url" image_link_hover="opacity" image_width="1000" image_ratio="1:1" image_link_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image_external="https://source.unsplash.com/tidSLv-UaNs/1000x1000" image_link="custom-url" image_link_hover="opacity" image_width="1000" image_ratio="1:1" image_link_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image_external="https://source.unsplash.com/tidSLv-UaNs/1000x1000" image_link="custom-url" image_link_hover="opacity" image_width="1000" image_ratio="1:1" image_link_url="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'team, image',
      'image' => '0.2/team_square-images_4cols.jpg',
    ),
    array(
      'id' => 'loop_slider-overlapped_over-img_tall',
      'name' => 'Loop - Slider Overlapped - Tall (10:11)',
      'content' => '[vc_row][vc_column][loprd_loop loop="size:6|order_by:date" grid_layout="slider" grid_layout_slider_style="full" grid_layout_slider_pagination="" _grid_columns="desktop:2/5|tablet:3/5|phone:10" grid_columns_gap="quarter" post_layout="img" post_layout_ratio="10:11" post_content_layout="meta,title" post_meta="`{`omnis_cats`}`" post_meta2="`{`omnis_date ago=``true```}``{`omnis_permalink`}`" post_alignment_v="bottom" post_hover_img_content="hover-content--right hover--in" post_image_overlay_color="rgba(0, 0, 0, 0.45)" post_drop_shadow="" post_content_padding="padding-top:double|padding-bottom:double|padding-side:double" post_content_el_padding="title:half|content:single|meta-2:single" post_content_max_width="70" post_title_typo="size-class:h2-size" animation="from-right" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop, slider, loop-related',
      'image' => '0.2/loop_slider-overlapped_over-img_tall.jpg',
    ),
    array(
      'id' => 'hero_blur_alt-typo_fade-bg',
      'name' => 'Hero - Blur - Fade out BG - Alt Typo',
      'content' => '[vc_section section_background_color="#1a1a1a" section_content_animation="blur-out"][vc_row row_section_padding="padding-top:quad" row_background_color="transparent" row_background_image_settings="position:center top|size:contain|repeat:no-repeat" row_background_image_overlay="linear-gradient(0deg, transparent 0%, #1a1a1a 100%)" columns_animation="blur-out" row_force_as_bg="as-background"][vc_column width="2/3"][vc_custom_heading heading_text="We are omnis." heading_container="h2" heading_typography="size-class:h5-size"][vc_custom_heading heading_text="Pellentesque dignissim congue ex in feugiat cras hendrerit." heading_container="h2" heading_typography="size-class:h1-size|font-family:Playfair Display|google-font:true|font-weight:400"][/vc_column][/vc_row][/vc_section]',
      'category' => 'hero, dark-bg, titlebar',
      'image' => '0.2/hero_blur_alt-typo_fade-bg.jpg',
    ),
    array(
      'id' => 'hero_bottom-left_w-inline-icon',
      'name' => 'Hero - Bottom Left - w/ Inline Icon',
      'content' => '[vc_row row_container_height_custom="50vh" row_column_alignment_v="bottom" row_content_txt_skin="txt--light" row_background_image_external="https://source.unsplash.com/jEqyV_rumuU/2000x1300" row_background_image_overlay="rgba(0, 0, 0, 0.2)"][vc_column][vc_row_inner row_column_content_alignment_v="center" columns_animation="scale-up" columns_animation_delay="200" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_icon type="material" icon_material="vc-material vc-material-link" icon_typography="font-size:30" icon_style="bg" icon_text_color="#1a1a1a" icon_bg_color="#ffffff"][/vc_column_inner][vc_column_inner][vc_custom_heading heading_text="Check what we do" heading_container="h1" heading_typography="size-class:h2-size" link="url:#|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'hero, dark-bg, titlebar',
      'image' => '0.2/hero_bottom-left_w-inline-icon.jpg',
    ),
    array(
      'id' => 'services_slider-overlapped_w-wide-img',
      'name' => 'Services - Slider Overlapped - Wide Img',
      'content' => '[vc_row][vc_column][loprd_carousel width="3/5" carousel_columns_gap="quarter" carousel_style="full" carousel_loop="" carousel_pagination="" animation="from-right" animation_delay="200" offset="vc_col-lg-2/5 vc_col-xs-10"][loprd_carousel_column column_background_color="linear-gradient(0deg, transparent 0%, #f5f5f5 100%)"][vc_single_image image_width="1000" image_ratio="3:1" image_external="https://source.unsplash.com/m_HRfLhgABo/1000"][vc_custom_heading heading_text="Web Development" heading_container="h2"][vc_custom_heading heading_text="Fusce ultricies, urna sit amet ornare ultricies, lacus nibh laoreet erat, vel lobortis eros mi eget justo. Donec tristique tristique magna quis placerat. Integer pellentesque purus vitae orci finibus facilisis. Nulla facilisi. Aliquam ut gravida velit, molestie ullamcorper metus."][vc_empty_space][vc_empty_space empty_height="_custom" empty_height_custom="height:5vw"][/loprd_carousel_column][loprd_carousel_column column_background_color="linear-gradient(0deg, transparent 0%, #f5f5f5 100%)"][vc_single_image image_width="1000" image_ratio="3:1" image_external="https://source.unsplash.com/wL6FgkncWDs/1000"][vc_custom_heading heading_text="Art Direction" heading_container="h2"][vc_custom_heading heading_text="Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nec enim ex. Suspendisse ac ultrices sapien. Sed interdum, arcu a sodales auctor, nisl est rhoncus neque, a facilisis nunc quam in metus. Ut pharetra eu diam vel iaculis. Interdum et malesuada."][vc_empty_space][/loprd_carousel_column][loprd_carousel_column column_background_color="linear-gradient(0deg, transparent 0%, #f5f5f5 100%)"][vc_single_image image_width="1000" image_ratio="3:1" image_external="https://source.unsplash.com/W1B2LpQOBxA/1000"][vc_custom_heading heading_text="Ecommerce" heading_container="h2"][vc_custom_heading heading_text="Curabitur volutpat lectus non justo condimentum egestas. Vivamus massa sem, sollicitudin posuere pretium non, laoreet vitae massa. Vivamus non nulla imperdiet risus molestie pellentesque. Nulla in arcu vitae sapien vehicula interdum quis ut orci."][vc_empty_space][/loprd_carousel_column][loprd_carousel_column column_background_color="linear-gradient(0deg, transparent 0%, #f5f5f5 100%)"][vc_single_image image_width="1000" image_ratio="3:1" image_external="https://source.unsplash.com/2FPjlAyMQTA/1000"][vc_custom_heading heading_text="Marketing &amp; SEO" heading_container="h2"][vc_custom_heading heading_text="Aliquam scelerisque, magna ut mollis sollicitudin, eros mauris faucibus nisi, quis imperdiet dolor metus sed dui. Sed rutrum at libero vestibulum tincidunt. Proin nisi sapien, faucibus vitae metus eu, ultrices maximus massa. Praesent ut diam eu felis scelerisque malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus."][vc_empty_space][/loprd_carousel_column][/loprd_carousel][/vc_column][/vc_row]',
      'category' => 'services, slider, text, image',
      'image' => '0.2/services_slider-overlapped_w-wide-img.jpg',
    ),
    array(
      'id' => 'gallery_clients-grid_w-border',
      'name' => 'Gallery - Clients Grid - Bordered - 5 Cols',
      'content' => '[vc_row row_rows_gap="single" row_force_as_bg="as-background"][vc_column el_zindex="2" css=".vc_custom_1563380067796{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-style: solid !important;border-right-style: solid !important;border-top-style: solid !important;border-bottom-style: solid !important;}"][vc_gallery images_anchor_full="" images_columns_span="desktop:1/5|tablet:4|phone:6" images_container_width="" images_columns_gap="none" images_rows_gap="quarter" images_alignment_v="center" image_lazy_dominant="disable" animation="from-bottom" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'gallery',
      'image' => '0.2/gallery_clients-grid_w-border.jpg',
    ),
    array(
      'id' => 'text_v-bottom_image-windowed',
      'name' => 'Text - Contact - V-Bottom - Image Windowed',
      'content' => '[vc_row row_column_alignment_v="bottom"][vc_column width="7/12"][vc_row_inner][vc_column_inner width="1/2"][vc_text_separator][vc_custom_heading heading_text="Location" heading_container="h5" heading_typography="font-family:Playfair Display|google-font:true|font-weight:400"][vc_empty_space empty_height="none"][vc_custom_heading heading_text="Warsaw" heading_typography="size-class:leading-size"][/vc_column_inner][vc_column_inner width="1/2"][vc_text_separator][vc_custom_heading heading_text="Contact" heading_container="h5" heading_typography="font-family:Playfair Display|google-font:true|font-weight:400"][vc_empty_space empty_height="none"][vc_custom_heading heading_text="contact@omnisstudio.com" heading_typography="size-class:leading-size" link="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="5/12"][vc_single_image image_style="browser" image_shadow="drop-shadow" image_width="1000" image_ratio="1:1" image_external="https://source.unsplash.com/fAmj2spOqxc/1000x1000"][/vc_column][/vc_row]',
      'category' => 'text, image, contact',
      'image' => '0.2/text_v-bottom_image-windowed.jpg',
    ),
    array(
      'id' => 'image_80vh-bg',
      'name' => 'Image Separator (80vh)',
      'content' => '[vc_section][vc_row row_container_height_custom="80vh" row_content_txt_skin="txt--light" row_background_color="#d8d8d8" row_background_image_effect="parallax parallax-v" row_background_image_external="https://source.unsplash.com/fotKKqWNMQ4/2000x1300"][vc_column][/vc_column][/vc_row][/vc_section]',
      'category' => 'image, separator, full-width',
      'image' => '0.2/image_80vh-bg.jpg',
    ),
    array(
      'id' => 'hero_splitted_v-bottom_full-window',
      'name' => 'Hero - Splitted V-Bottom - Full Window',
      'content' => '[vc_section section_content_txt_skin="txt--light" section_background_color="#252525" section_scroll_pin="enabled"][vc_row row_section_padding="padding-side:none|padding-bottom:none|padding-top:none" row_container_height_custom="100vh" row_column_content_alignment_v="bottom" row_columns_gap="none" row_rows_gap="none" row_section_container_width="stretched"][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" offset="vc_col-lg-6"][vc_empty_space empty_height="triple"][vc_row_inner][vc_column_inner][vc_custom_heading heading_text="`{`omnis_title`}`" heading_container="h1"][vc_custom_heading heading_text="`{`omnis_subtitle`}`" heading_typography="size-class:leading-size"][vc_empty_space empty_height="triple"][vc_button2 title="Learn more" button_color="btn-light" button_type="btn-outlined" button_size="btn-lg" link="url:%23more|||"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" templates__column_background_source="both-page-image" column_background_image_overlay="linear-gradient(0deg, transparent 0%, rgba(0, 0, 0, 0.1) 100%)" column_background_image_external="https://source.unsplash.com/hxkduwR6BuE/1300" offset="vc_col-lg-6"][vc_empty_space empty_height="none" el_visibility="desktop:hidden|tablet:hidden" css=".vc_custom_1549122624294{padding-bottom: 100% !important;}"][/vc_column][/vc_row][/vc_section]',
      'category' => 'image, hero, titlebar, full-width, dark-bg, button',
      'image' => '0.2/hero_splitted_v-bottom_full-window.jpg',
    ),
    array(
      'id' => 'toggle-text_bordered_splitted-full-width',
      'name' => 'Toggle bordered - Splited - Full Width',
      'content' => '[vc_section section_content_txt_skin="txt--dark" section_background_color="#ffffff" el_id="more"][vc_row row_section_padding="padding-side:none|padding-bottom:none|padding-top:none" row_columns_gap="none" row_rows_gap="none" row_section_container_width="stretched"][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" column_background_color="#b2ada7" column_background_image_effect="parallax parallax-v" column_background_image_parallax_level="2" column_background_image_external="https://source.unsplash.com/KQAH8FvPBtQ/1300" offset="vc_col-lg-6"][vc_empty_space empty_height="none" el_visibility="desktop:hidden" css=".vc_custom_1549538273560{padding-bottom: 70% !important;}"][/vc_column][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" offset="vc_col-lg-6"][vc_row_inner css=".vc_custom_1563460829184{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-style: solid !important;border-right-style: solid !important;border-top-style: solid !important;border-bottom-style: solid !important;}"][vc_column_inner][vc_toggle title="Our vision" toggle_default_state="open" toggle_icon_position="before" toggle_header_typography="size-class:h2-size"]
      <p class="leading-size">Sed malesuada convallis orci, et lobortis lacus tincidunt sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum feugiat rhoncus euismod. Nulla facilisi. In non velit a lacus consectetur gravida sed egestas urna.</p>
      [/vc_toggle][vc_text_separator][vc_toggle title="Our mission" toggle_icon_position="before" toggle_header_typography="size-class:h2-size"]
      <p class="leading-size">Proin efficitur semper maximus. Integer mattis maximus tellus, dignissim semper nibh faucibus ut. Praesent ullamcorper nec elit ac mattis. Mauris auctor eu elit eu facilisis.</p>
      [/vc_toggle][/vc_column_inner][/vc_row_inner][vc_empty_space empty_height="_custom" empty_height_custom="height:15vw"][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][vc_row_inner][vc_column_inner offset="vc_col-lg-8"][vc_custom_heading heading_text="Vivamus vel diam mattis, auctor nibh et, commodo orci. Vivamus purus massa, imperdiet suscipit tellus a, eleifend vestibulum augue. Suspendisse potenti." heading_typography="size-class:font-size-small"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][/vc_section]',
      'category' => 'image, toggle, text, full-width, button',
      'image' => '0.2/toggle-text_bordered_splitted-full-width.jpg',
    ),
    array(
      'id' => 'toggle-text_bordered_splitted-full-width_dark',
      'name' => 'Toggle bordered - Splited - Full Width - Dark',
      'content' => '[vc_section section_content_txt_skin="txt--light" section_background_color="#252525" css=".vc_custom_1549465704083{border-bottom-width: 1px !important;border-bottom-color: rgba(255,255,255,0.1) !important;border-bottom-style: solid !important;}"][vc_row row_section_padding="padding-side:none|padding-bottom:none|padding-top:none" row_column_content_alignment_v="bottom" row_columns_gap="none" row_rows_gap="none" row_section_container_width="stretched"][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" offset="vc_col-lg-6" el_class="padding-col-custom"][vc_custom_heading heading_text="Join us!" heading_container="h2" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Suspendisse sit amet bibendum purus, ut consequat tortor. Sed et nibh dictum, commodo diam eu." heading_typography="size-class:leading-size"][vc_empty_space][vc_button2 title="Find more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][vc_empty_space empty_height="_custom" empty_height_custom="height:10vw"][vc_row_inner row_column_alignment_h="left" css=".vc_custom_1563460670607{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-style: solid !important;border-right-style: solid !important;border-top-style: solid !important;border-bottom-style: solid !important;}"][vc_column_inner][vc_toggle title="Senior Front-End Developer" toggle_icon_position="before" toggle_header_typography="font-weight:400"]Quisque elementum velit in nibh volutpat, ac aliquam augue posuere. Praesent commodo, lectus et cursus eleifend, arcu velit tristique turpis, quis maximus nibh est non nulla.[/vc_toggle][vc_text_separator][vc_toggle title="Product Engineer" toggle_icon_position="before" toggle_header_typography="font-weight:400"]Sed feugiat, urna sit amet elementum sodales, ipsum augue ultrices ante, in ullamcorper turpis mi ac augue. Vestibulum convallis auctor maximus.[/vc_toggle][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" column_background_image_effect="parallax parallax-v" column_background_image_parallax_level="2" column_background_image_external="https://source.unsplash.com/ayAiC1mY13I/1300" offset="vc_col-lg-6"][vc_empty_space empty_height="none" el_visibility="desktop:hidden" css=".vc_custom_1549538282024{padding-bottom: 70% !important;}"][/vc_column][/vc_row][/vc_section]',
      'category' => 'image, toggle, text, full-width, dark-bg, button',
      'image' => '0.2/toggle-text_bordered_splitted-full-width_dark.jpg',
    ),
    array(
      'id' => 'hero_call-to-action_separator_dark',
      'name' => 'Hero - Call to Action - Dark',
      'content' => '[vc_section section_content_txt_skin="txt--light" section_background_color="#252525"][vc_row row_column_content_alignment_v="center" row_section_container_width="stretched"][vc_column width="1/2"][vc_custom_heading heading_text="News" heading_container="h2" heading_typography="size-class:h1-alt"][/vc_column][vc_column column_alignment_h="right" width="1/2"][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'hero, separator, call-to-action, full-width, dark-bg, button',
      'image' => '0.2/hero_call-to-action_separator_dark.jpg',
    ),
    array(
      'id' => 'loop_2cols_over-img_overlay-dark_one-gap',
      'name' => 'Loop - Dark Overlay - 1px Gap - 2 Cols',
      'content' => '[vc_row row_section_padding="padding-bottom:one|padding-top:none|padding-side:none" row_columns_gap="none" row_rows_gap="none" row_section_container_width="stretched"][vc_column][loprd_loop loop="size:2" _grid_columns="desktop:6" grid_columns_gap="one" grid_rows_gap="one" post_layout="img" post_meta="`{`omnis_date`}`" post_alignment_v="top" post_hover_thumb="" post_image_overlay_color="#1a1a1a" post_content_skin_custom_meta="rgba(255,255,255,0.6)" post_drop_shadow="" post_content_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" post_content_el_padding="meta:fluid-double" post_title_typo="size-class:h2-size" post_meta_typo="size-class:leading-size" grid_images_max_width="1300"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related, full-width',
      'image' => '0.2/loop_2cols_over-img_overlay-dark_one-gap.jpg',
    ),
    array(
      'id' => 'loop_2cols_over-img_overlay-dark-on-hover_one-gap',
      'name' => 'Loop - Dark Overlay on Hover - 1px Gap - 2 Cols',
      'content' => '[vc_row row_section_padding="padding-bottom:none|padding-top:none|padding-side:none" row_columns_gap="none" row_rows_gap="none" row_section_container_width="stretched"][vc_column][loprd_loop loop="size:2" _grid_columns="desktop:6" grid_columns_gap="none" grid_rows_gap="none" post_layout="img" post_meta="`{`omnis_cats`}`" post_alignment_v="top" post_hover_img_content="hover--in" post_image_overlay_color="#1a1a1a" post_content_skin_custom_meta="rgba(255,255,255,0.6)" post_drop_shadow="" post_content_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" post_content_el_padding="meta:fluid-double" post_title_typo="size-class:h2-size" post_meta_typo="size-class:leading-size" grid_images_max_width="1300"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related, full-width',
      'image' => '0.2/loop_2cols_over-img_overlay-dark-on-hover_one-gap.jpg',
    ),
    array(
      'id' => 'accordion_splitted_dark-and-colorful_full-width',
      'name' => 'Accordions Splitted - Dark & Colorful - Full Width',
      'content' => '[vc_section section_content_txt_skin="txt--light" section_background_color="#1a1a1a"][vc_row row_section_padding="padding-side:none|padding-bottom:none|padding-top:none" row_section_container_width="stretched" row_columns_gap="none" row_rows_gap="none"][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" offset="vc_col-lg-6" el_class="padding-col-custom"][vc_accordion accordion_styling_layout="header" accordion_header_padding="padding-side:none" accordion_content_padding="padding-side:none" accordion_content_shadow="" accordion_header_typography="size-class:h3-size"][vc_accordion_tab title="Websites"][vc_column_text]Quisque sodales consequat nulla ac iaculis. Suspendisse tempus quam magna. Phasellus sit amet eros ultricies leo laoreet placerat id eget sapien. Pellentesque et suscipit justo.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Ecommerce"][vc_column_text]Suspendisse sit amet suscipit erat. Sed elementum ornare quam, vitae ullamcorper mi laoreet a. Cras sit amet tincidunt est. Suspendisse ut turpis vehicula, dapibus nulla at, tincidunt nulla.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="iOS &amp; Android Apps"][vc_column_text]Vestibulum massa erat, sodales non imperdiet nec, venenatis eget enim. Donec sagittis dui nec consequat pretium. Suspendisse congue arcu sed ex condimentum, et mollis ex bibendum. Nullam tempor aliquam leo in aliquam.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="UI &amp; UX"][vc_column_text]Vivamus ut elementum ligula, et dignissim mauris. Proin fringilla lectus ac odio laoreet, et luctus urna luctus. Ut nibh mi, blandit ac augue ac, sagittis tristique elit.[/vc_column_text][/vc_accordion_tab][/vc_accordion][/vc_column][vc_column column_padding="padding-bottom:none|padding-side:none|padding-top:none" column_background_color="#dedede" column_background_image_effect="parallax parallax-v" column_background_image_parallax_level="2" column_background_image_external="https://source.unsplash.com/-WBYxmW4yuw/1300" offset="vc_col-lg-6"][vc_empty_space empty_height="none" css=".vc_custom_1549471751910{padding-bottom: 70% !important;}"][/vc_column][/vc_row][/vc_section][vc_section section_content_txt_skin="txt--light" section_background_color="#f44336"][vc_row row_section_padding="padding-side:none|padding-bottom:none|padding-top:none" row_section_container_width="stretched" row_columns_gap="none" row_rows_gap="none"][vc_column column_padding="padding-top:none|padding-bottom:none|padding-side:none" column_background_color="#cd011c" column_background_image_effect="parallax parallax-v" column_background_image_parallax_level="2" column_background_image_external="https://source.unsplash.com/164_6wVEHfI/1300" offset="vc_col-lg-6"][vc_empty_space empty_height="none" css=".vc_custom_1549471748110{padding-bottom: 70% !important;}"][/vc_column][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" column_background_image_effect="parallax parallax-v" column_background_image_parallax_level="2" offset="vc_col-lg-6" el_class="padding-col-custom"][vc_accordion accordion_styling_layout="header" accordion_header_padding="padding-side:none" accordion_content_padding="padding-side:none" accordion_content_shadow="" accordion_header_typography="size-class:h3-size"][vc_accordion_tab title="Brand Identity"][vc_column_text]Donec lobortis, libero at fringilla lacinia, turpis ligula porta mi, in laoreet turpis leo eget arcu. Cras vulputate vulputate aliquam. Suspendisse potenti.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Creative Direction"][vc_column_text]Vestibulum ac ultrices augue, sed sodales sapien. Sed neque quam, eleifend non nisi et, dignissim eleifend leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse pellentesque suscipit magna ac mollis.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Art Direction"][vc_column_text]Duis rutrum dui a ultrices lobortis. Mauris posuere felis id lectus rhoncus dignissim. Vestibulum vel viverra lorem ras vitae sodales odio. Fusce tincidunt fringilla urna, id pellentesque ante semper quis.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Illustrations"][vc_column_text]Sed luctus mi quis magna imperdiet congue. Curabitur egestas, enim ac rhoncus dapibus, nunc libero blandit mi, non iaculis quam purus ac libero. Integer semper eu tortor non posuere.[/vc_column_text][/vc_accordion_tab][/vc_accordion][/vc_column][/vc_row][/vc_section]',
      'category' => 'accordion, full-width, dark-bg, colorful',
      'image' => '0.2/accordion_splitted_dark-and-colorful_full-width.jpg',
    ),
    array(
      'id' => 'text_content-splitted_images_full-width',
      'name' => 'Text - Splitted Content - Full Width',
      'content' => '[vc_section][vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="100vh" row_columns_gap="none" row_rows_gap="none"][vc_column column_padding="padding-bottom:triple|padding-side:fluid-triple|padding-top:triple" column_sticky="enabled" column_content_txt_skin="txt--light" column_background_color="#d4d4d6" column_background_image_settings="attachment:fixed" width="1/2" column_background_image_external="https://source.unsplash.com/EIH4dHgb6Tg/2000x1300"][vc_text_separator separator_size="large"][vc_custom_heading heading_text="Meet us." heading_container="h1" heading_typography="size-class:h1-alt"][/vc_column][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" column_sticky="enabled" width="1/2"][vc_row_inner row_columns_gap="none" row_rows_gap="single"][vc_column_inner width="1/2"][vc_single_image image_width="1000" image_ratio="1:1" image_external="https://source.unsplash.com/emxAxutgt-A/1000x1000"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image_width="1000" image_ratio="1:1" image_external="https://source.unsplash.com/PQeoQdkU9jQ/1000x1000"][/vc_column_inner][/vc_row_inner][vc_empty_space][vc_column_text]
      <h5>Our Story.</h5>
      <p class="leading-size">Integer facilisis lacus est. Proin eu diam vel sem blandit imperdiet nec ac quam. Mauris euismod et quam sit amet cursus. Nunc quam tellus, ultrices vel auctor sed, porta non tortor. Mauris quis ornare risus.</p>
      [/vc_column_text][vc_empty_space empty_height="triple"][vc_button2 title="Our Founders" button_size="btn-lg" link="url:%23more|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'text, full-width, button',
      'image' => '0.2/text_content-splitted_images_full-width.jpg',
    ),
    array(
      'id' => 'text-width-counter_content-splitted_images_full-width',
      'name' => 'Text with Counter - Splitted Content - Full Width',
      'content' => '[vc_section][vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="100vh" row_columns_gap="none" row_rows_gap="none" el_id="more"][vc_column column_padding="padding-bottom:triple|padding-side:fluid-triple|padding-top:triple" column_sticky="enabled" column_content_txt_skin="txt--light" column_background_color="#c4c4c2" column_background_image_settings="attachment:fixed" width="1/2" column_background_image_external="https://source.unsplash.com/4YY8wHDuU5M/2000x1300"][vc_text_separator separator_size="large"][vc_custom_heading heading_text="Our Founders." heading_container="h1" heading_typography="size-class:h1-alt"][/vc_column][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" column_sticky="enabled" width="1/2"][vc_single_image image_width="1300" image_ratio="3:1" image_external="https://source.unsplash.com/UzPbvwqvKNE/1300x900"][loprd_counter start_value="1960" end_value="2011" thousand_sep="none" counter_typography="size-class:h1-alt"][vc_empty_space empty_height="quarter"][vc_column_text]
      <p class="leading-size">Omnis was founded by John Smiths &amp; Edwin Larrson.</p>
      [/vc_column_text][vc_empty_space empty_height="triple"][vc_button2 title="Our values" button_color="btn-light" button_size="btn-lg" link="url:%23values|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'text, counter, full-width, button',
      'image' => '0.2/text-width-counter_content-splitted_images_full-width.jpg',
    ),
    array(
      'id' => 'accordion_content-splitted_full-width',
      'name' => 'Text in Accordion - Splitted Content - Full Width',
      'content' => '[vc_section][vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="100vh" row_columns_gap="none" row_rows_gap="none" el_id="values"][vc_column column_padding="padding-bottom:triple|padding-side:fluid-triple|padding-top:triple" column_sticky="enabled" column_content_txt_skin="txt--light" column_background_color="#edeef0" column_background_image_settings="attachment:fixed" width="1/2" column_background_image_external="https://source.unsplash.com/TamMbr4okv4/2000x1300"][vc_text_separator separator_size="large"][vc_custom_heading heading_text="Our Values." heading_container="h1" heading_typography="size-class:h1-alt"][/vc_column][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" column_sticky="enabled" width="1/2"][vc_accordion accordion_styling_layout="header" accordion_header_padding="padding-side:none|padding-top:quarter|padding-bottom:quarter" accordion_content_padding="padding-side:none" accordion_content_shadow="" accordion_header_typography="size-class:h2-size|font-weight:500"][vc_accordion_tab title="Genuine."][vc_column_text]Etiam sit amet quam urna. Suspendisse mattis orci nunc, vel suscipit eros ornare eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus arcu dolor, facilisis et mi in, vestibulum ultrices odio.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Exceptional."][vc_column_text]Fusce cursus mi nulla. Donec vestibulum posuere turpis rutrum blandit. Aenean non imperdiet magna. Proin placerat eros et tempor condimentum. Aenean semper finibus odio, non porttitor nisl sagittis nec.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Innovative."][vc_column_text]Sed lectus neque, dictum id hendrerit id, suscipit ac quam. Vestibulum et mauris eu arcu mollis faucibus. Curabitur malesuada sit amet magna quis sodales. Nulla et velit vitae justo semper maximus. Nullam placerat, ligula vel accumsan laoreet, nunc orci mollis mauris, eu sagittis elit augue vitae ante.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Involved."][vc_column_text]Etiam sit amet quam urna. Suspendisse mattis orci nunc, vel suscipit eros ornare eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus arcu dolor, facilisis et mi in, vestibulum ultrices odio. Suspendisse sodales ipsum id turpis lobortis, id consequat velit egestas.[/vc_column_text][/vc_accordion_tab][/vc_accordion][vc_empty_space empty_height="triple"][vc_button2 title="Our Team Members" button_color="btn-light" button_size="btn-lg" link="url:%23members|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'text, accordion, full-width, button',
      'image' => '0.2/accordion_content-splitted_full-width.jpg',
    ),
    array(
      'id' => 'services-text-w-icon_content-splitted_full-width',
      'name' => 'Services Text w/ Icons - Splitted Content - Full Width',
      'content' => '[vc_section][vc_row row_section_padding="padding-side:none|padding-top:none|padding-bottom:none" row_section_container_width="stretched" row_container_height_custom="100vh" row_columns_gap="none" row_rows_gap="none" el_id="values"][vc_column column_padding="padding-bottom:triple|padding-side:fluid-triple|padding-top:triple" column_sticky="enabled" column_content_txt_skin="txt--light" column_background_color="#edeef0" column_background_image_settings="attachment:fixed" width="1/2" column_background_image_external="https://source.unsplash.com/TamMbr4okv4/2000x1300"][vc_text_separator separator_size="large"][vc_custom_heading heading_text="Our Values." heading_container="h1" heading_typography="size-class:h1-alt"][/vc_column][vc_column column_padding="padding-top:triple|padding-bottom:triple|padding-side:fluid-triple" column_sticky="enabled" width="1/2"][vc_accordion accordion_styling_layout="header" accordion_header_padding="padding-side:none|padding-top:quarter|padding-bottom:quarter" accordion_content_padding="padding-side:none" accordion_content_shadow="" accordion_header_typography="size-class:h2-size|font-weight:500"][vc_accordion_tab title="Genuine."][vc_column_text]Etiam sit amet quam urna. Suspendisse mattis orci nunc, vel suscipit eros ornare eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus arcu dolor, facilisis et mi in, vestibulum ultrices odio.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Exceptional."][vc_column_text]Fusce cursus mi nulla. Donec vestibulum posuere turpis rutrum blandit. Aenean non imperdiet magna. Proin placerat eros et tempor condimentum. Aenean semper finibus odio, non porttitor nisl sagittis nec.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Innovative."][vc_column_text]Sed lectus neque, dictum id hendrerit id, suscipit ac quam. Vestibulum et mauris eu arcu mollis faucibus. Curabitur malesuada sit amet magna quis sodales. Nulla et velit vitae justo semper maximus. Nullam placerat, ligula vel accumsan laoreet, nunc orci mollis mauris, eu sagittis elit augue vitae ante.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Involved."][vc_column_text]Etiam sit amet quam urna. Suspendisse mattis orci nunc, vel suscipit eros ornare eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus arcu dolor, facilisis et mi in, vestibulum ultrices odio. Suspendisse sodales ipsum id turpis lobortis, id consequat velit egestas.[/vc_column_text][/vc_accordion_tab][/vc_accordion][vc_empty_space empty_height="triple"][vc_button2 title="Our Team Members" button_color="btn-light" button_size="btn-lg" link="url:%23members|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'text, icon, services, full-width, button',
      'image' => '0.2/services-text-w-icon_content-splitted_full-width.jpg',
    ),
    array(
      'id' => 'hero_h-pushed_w-icon',
      'name' => 'Hero - HPushed - w/ Icon',
      'content' => '[vc_row][vc_column width="1/3"][/vc_column][vc_column width="2/3"][vc_custom_heading heading_text="Next-gen creative agency." heading_container="h1" heading_typography="size-class:h1-alt"][vc_custom_heading heading_text="Duis leo nibh, condimentum eget hendrerit ut, efficitur at ipsum. Cras quis mauris sed ante sodales dictum. Sed quis sem commodo orci ultricies fermentum egestas at arcu." heading_typography="size-class:leading-size" css=".vc_custom_1563465642374{margin-top: 80px !important;}"][vc_empty_space][vc_icon type="material" icon_material="vc-material vc-material-arrow_drop_down" icon_typography="font-size:30" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="" icon_bg_color="rgba(0, 0, 0, 0.03)"][/vc_column][/vc_row]',
      'category' => 'hero, text, icon',
      'image' => '0.2/hero_h-pushed_w-icon.jpg',
    ),
    array(
      'id' => 'hero-w-small-header_h-pushed_w-icon',
      'name' => 'Hero w/ Side Header - HPushed - w/ Icon',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/3"][vc_empty_space empty_height="half"][vc_custom_heading heading_text="Our studio in a nutshell." heading_container="h5" heading_color="rgb(150, 150, 150)"][/vc_column][vc_column width="2/3"][vc_custom_heading heading_text="Nunc mollis urna eget volutpat vehicula." heading_container="h2" heading_typography="size-class:h1-alt"][vc_empty_space][vc_custom_heading heading_text="Etiam ut enim pulvinar, scelerisque arcu sit amet, maximus dui. Donec nulla quam, eleifend non dui et, porttitor vulputate dolor. Maecenas dictum rhoncus nunc ut aliquet. Suspendisse vitae purus lorem. Fusce ac metus odio. Sed semper erat in nisi congue fermentum." heading_typography="size-class:leading-size"][vc_empty_space][vc_icon type="material" icon_material="vc-material vc-material-arrow_drop_down" icon_typography="font-size:30" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="" icon_bg_color="rgba(0, 0, 0, 0.03)"][/vc_column][/vc_row]',
      'category' => 'hero, text, icon',
      'image' => '0.2/hero-w-small-header_h-pushed_w-icon.jpg',
    ),
    array(
      'id' => 'image-w-text-under_splitted_side-header',
      'name' => 'Image w/ Text under - Splited Side Header',
      'content' => '[vc_row][vc_column][vc_single_image image_container_width="block" image_width="1700" image_ratio="2:1" image_external="https://source.unsplash.com/m0oSTE_MjsI/1700x1000"][/vc_column][/vc_row][vc_row row_rows_gap="single"][vc_column width="1/3"][vc_empty_space empty_height="quarter"][vc_custom_heading heading_text="Our main goals." heading_container="h5" heading_color="rgb(150, 150, 150)"][/vc_column][vc_column width="2/3"][vc_custom_heading heading_text="Vestibulum consectetur dui at tempus gravida. Aliquam maximus mauris non metus aliquam, ultrices consequat sem euismod. Vivamus volutpat ullamcorper arcu, sed dictum nisl tristique quis. Morbi ornare diam a sapien aliquam, congue cursus quam dapibus." heading_typography="size-class:leading-size"][/vc_column][/vc_row]',
      'category' => 'image, text',
      'image' => '0.2/image-w-text-under_splitted_side-header.jpg',
    ),
    array(
      'id' => 'services-list_w-side-header',
      'name' => 'Services List - Side Header',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/3"][vc_empty_space empty_height="quarter"][vc_custom_heading heading_text="Services." heading_container="h5" heading_color="rgb(150, 150, 150)"][/vc_column][vc_column width="2/3"][vc_row_inner row_text_typo="size-class:leading-size"][vc_column_inner width="1/2"][vc_custom_heading heading_text="Development" heading_container="h3"][vc_column_text]
      <ul class="simple separated">
           <li>Back-End Development</li>
           <li>Front-End Development</li>
           <li>E-commerce</li>
           <li>Websites</li>
           <li>iOS &amp; Android Apps</li>
           <li>UI &amp; UX</li>
      </ul>
      [/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading heading_text="Design" heading_container="h3"][vc_column_text]
      <ul class="simple separated">
           <li>Brand Identity</li>
           <li>Creative Direction</li>
           <li>Art Direction</li>
      </ul>
      [/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'services, text',
      'image' => '0.2/services-list_w-side-header.jpg',
    ),
    array(
      'id' => 'separator_zigzag_full-width',
      'name' => 'Separator - ZigZag - Full Width',
      'content' => '[vc_row row_section_padding="padding-side:none|padding-top:none" row_section_container_width="stretched"][vc_column][vc_text_separator style="zigzag" separator_size="large"][/vc_column][/vc_row]',
      'category' => 'separator, full-width',
      'image' => '0.2/separator_zigzag_full-width.jpg',
    ),
    array(
      'id' => 'loop_1-col-lateral_side-header',
      'name' => 'Loop - One Column Lateral - Side Header',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/3"][vc_custom_heading heading_text="Our thoughts." heading_container="h5" heading_color="rgb(150, 150, 150)"][/vc_column][vc_column width="2/3"][loprd_loop loop="size:4|order_by:date" _grid_columns="desktop:12|tablet:12" grid_rows_gap="half" post_layout="lateral" post_layout_lateral_thumb="left" post_layout_lateral_ratio="1-2" post_layout_lateral_gap="single" post_meta="`{`omnis_author avatar=``false```}``{`omnis_date`}`" post_alignment_v="top" post_drop_shadow="" post_content_padding="padding-side:none|padding-top:none|padding-bottom:single" post_content_el_padding="meta:half" post_title_typo="font-size:22"][vc_button2 title="Read more articles →" button_type="btn-simple" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.2/loop_1-col-lateral_side-header.jpg',
    ),
    array(
      'id' => 'text_side-header_h-pushed',
      'name' => 'Text w/ Side Header',
      'content' => '[vc_row row_rows_gap="single" row_background_color="#fafafa"][vc_column width="1/3"][vc_empty_space empty_height="quarter"][vc_custom_heading heading_text="Contact us." heading_container="h5"][/vc_column][vc_column width="2/3"][vc_column_text]
      <h3>Etiam ut enim pulvinar, scelerisque arcu sit amet, maximus dui. Donec nulla quam, eleifend non dui et, porttitor vulputate dolor.</h3>
      [/vc_column_text][vc_empty_space][vc_button2 title="Contact us →" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'text, contact, call-to-action, button',
      'image' => '0.2/text_side-header_h-pushed.jpg',
    ),
    array(
      'id' => 'text_side-header_h-pushed_dark-bg',
      'name' => 'Text w/ Side Header',
      'content' => '[vc_row row_rows_gap="single" row_content_txt_skin="txt--light" row_background_color="#1a1a1a"][vc_column width="1/3"][vc_empty_space empty_height="quarter"][vc_custom_heading heading_text="Contact us." heading_container="h5"][/vc_column][vc_column width="2/3"][vc_column_text]
      <h3>Etiam ut enim pulvinar, scelerisque arcu sit amet, maximus dui. Donec nulla quam, eleifend non dui et, porttitor vulputate dolor.</h3>
      [/vc_column_text][vc_empty_space][vc_button2 title="Contact us →" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'text, contact, call-to-action, dark-bg, button',
      'image' => '0.2/text_side-header_h-pushed_dark-bg.jpg',
    ),
    array(
      'id' => 'services-list_content-block',
      'name' => 'Services List - Content Block',
      'content' => '[vc_section section_container_width="limited"][vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_columns_gap="none" row_rows_gap="none" row_background_color="rgba(0, 0, 0, 0.03)" row_shadow="drop-shadow" css=".vc_custom_1563466943067{border-radius: 5px !important;}"][vc_column column_background_color="#002b3c" width="1/3" column_background_image_external="https://source.unsplash.com/n0mabeJj6_s/1000"][vc_empty_space empty_height="penta"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="2/3"][vc_custom_heading heading_text="Web Development" heading_container="h2" heading_typography="size-class:h1-alt|font-weight:700" heading_color="transparent" heading_color_stroke="#1a1a1a"][vc_empty_space][vc_column_text]
      <ul class="simple separated leading-size">
           <li>Back-End Development</li>
           <li>Front-End Development</li>
           <li>E-commerce</li>
           <li>Websites</li>
           <li>iOS &amp; Android Apps</li>
           <li>UI &amp; UX</li>
      </ul>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'services, text, button',
      'image' => '0.2/services-list_content-block.jpg',
    ),
    array(
      'id' => 'services-list_content-block_dark-bg',
      'name' => 'Services List - Content Block - Dark BG',
      'content' => '[vc_section section_container_width="limited"][vc_row row_section_padding="padding-top:none|padding-bottom:none|padding-side:none" row_columns_gap="none" row_rows_gap="none" row_content_txt_skin="txt--light" row_background_color="#252525" row_shadow="drop-shadow" css=".vc_custom_1550147472703{border-radius: 5px !important;}"][vc_column column_background_color="#e8e8e8" width="1/3" column_background_image_external="https://source.unsplash.com/Q9Lxkwdvg0g/1000"][vc_empty_space empty_height="penta"][/vc_column][vc_column column_padding="padding-top:double|padding-bottom:double|padding-side:double" width="2/3"][vc_custom_heading heading_text="Art Direction" heading_container="h2" heading_typography="size-class:h1-alt|font-weight:700" heading_color="transparent" heading_color_stroke="#ffffff"][vc_empty_space][vc_column_text]
      <ul class="simple separated leading-size">
           <li>Brand Identity</li>
           <li>Creative Direction</li>
           <li>Art Direction</li>
      </ul>
      [/vc_column_text][vc_empty_space][vc_button2 title="Learn more" button_color="btn-light" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row][/vc_section]',
      'category' => 'services, text, dark-bg, button',
      'image' => '0.2/services-list_content-block_dark-bg.jpg',
    ),
    array(
      'id' => 'loop_mixed-col-grid_over-image_side-header',
      'name' => 'Loop - Mixed Columns Grid - Side Header',
      'content' => '[vc_row row_rows_gap="single"][vc_column width="1/3"][vc_custom_heading heading_text="Our selected projects." heading_container="h5" heading_color="rgb(150, 150, 150)"][/vc_column][vc_column width="2/3"][loprd_loop loop="size:4" _grid_columns="desktop:6|tablet:12" grid_columns_gap="half" grid_rows_gap="half" post_layout="img" post_layout_ratio="1:1" post_content_layout="meta,title" post_meta="`{`omnis_cats`}`" post_alignment_h="center" post_hover_img_content="hover-content--bottom hover--in hover--el-overflow" post_content_skin_custom_meta="rgba(255,255,255,0.6)" post_drop_shadow="" post_title_typo="font-size:22" post_meta_typo="size-class:body-size" grid_selector_pattern="3n+1" _selector_grid_columns="tablet:12|desktop:12" grid_selector_post_layout_ratio="2:1"][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.2/loop_mixed-col-grid_over-image_side-header.jpg',
    ),
    array(
      'id' => 'hero_stroke_w-wide-image_leading-subtitle',
      'name' => 'Hero - Color Stroke - w/ Wide (4:1) Image above',
      'content' => '[vc_row row_rows_gap="none" el_zindex="1"][vc_column width="5/6"][vc_single_image image_external="https://source.unsplash.com/Nod1nQ0i5a0/1000x500" templates__image_source="both-page-image" image_shadow="drop-shadow" image_width="1000" image_ratio="4:1" css=".vc_custom_1549372880203{margin-bottom: 80px !important;}"][/vc_column][vc_column width="2/3"][vc_custom_heading heading_text="About us." heading_container="h1" heading_typography="size-class:h1-alt" heading_color="transparent" heading_color_stroke="#1a1a1a"][vc_custom_heading heading_text="In hac habitasse platea dictumst. Quisque mattis euismod laoreet. Donec finibus, ipsum eget mattis maximus, felis nisi vehicula urna, a hendrerit felis ante a nisl." heading_typography="size-class:leading-size" heading_text_highlight="light"][/vc_column][/vc_row]',
      'category' => 'hero, text, image, titlebar',
      'image' => '0.2/hero_stroke_w-wide-image_leading-subtitle.jpg',
    ),
    array(
      'id' => 'text_w-side-header_1+2cols',
      'name' => 'Text - w/ Side Header - 1+2 Columns',
      'content' => '[vc_row row_columns_gap="triple" row_rows_gap="single"][vc_column width="1/4"][vc_custom_heading heading_text="Story" heading_container="h4"][/vc_column][vc_column el_zindex="2" width="3/4"][vc_row_inner row_rows_gap="single"][vc_column_inner width="1/2"][vc_column_text]Aliquam erat volutpat. Sed lacinia elit tellus, ac porttitor sem pellentesque efficitur. Nunc mollis luctus nisi sit amet scelerisque. Nam sodales erat a ligula gravida, eget imperdiet ligula rhoncus. Nulla facilisi. Sed massa quam, volutpat sit amet consectetur a, ornare sed est. Praesent orci ipsum, tempor in massa sit amet, tempor viverra elit. Pellentesque congue libero non velit imperdiet, vulputate convallis lorem laoreet.[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]Proin pellentesque neque ut imperdiet dapibus. Integer eu malesuada odio. Sed suscipit consequat justo ut placerat. Vivamus suscipit lorem enim, eu ultrices ipsum vehicula vel. Nam sit amet risus sed arcu consectetur auctor non sit amet tellus. Morbi facilisis tristique aliquet. Donec pulvinar lectus et aliquet viverra. Integer vehicula condimentum accumsan.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.2/text_w-side-header_1+2cols.jpg',
    ),
    array(
      'id' => 'progress-bar_simple-one-px_w-side-header',
      'name' => 'Progress Bar - Simple (1px) - w/ Side Header',
      'content' => '[vc_row row_columns_gap="triple" row_rows_gap="single"][vc_column width="1/4"][vc_custom_heading heading_text="Skills" heading_container="h4"][/vc_column][vc_column el_zindex="2" width="3/4"][vc_progress_bar values="%5B%7B%22label%22%3A%22Development%22%2C%22value%22%3A%2290%22%7D%2C%7B%22label%22%3A%22Design%22%2C%22value%22%3A%2280%22%7D%2C%7B%22label%22%3A%22iOS%20%26%20Android%20Apps%22%2C%22value%22%3A%2275%22%7D%2C%7B%22label%22%3A%22SEO%22%2C%22value%22%3A%2270%22%7D%5D" value_display="" progressbar_height_custom="height:1"][/vc_column][/vc_row]',
      'category' => 'progress-bar',
      'image' => '0.2/progress-bar_simple-one-px_w-side-header.jpg',
    ),
    array(
      'id' => 'testimonial_large-text-stroke',
      'name' => 'Testimonial - Large Stroke Text',
      'content' => '[vc_row][vc_column width="5/6"][vc_row_inner row_column_alignment_v="center" row_flex_wrap="nowrap"][vc_column_inner width="auto"][vc_single_image image_external="https://source.unsplash.com/rriAI0nhcbc/80x80 image_style="rounded" image_width="80" image_ratio="1:1"][/vc_column_inner][vc_column_inner width="5/6"][vc_column_text]
      <h4>John Smith</h4>
      <div class="font-size-small">CEO &amp; Founder</div>
      [/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space empty_height="single"][vc_custom_heading heading_text="Donec lacinia eros vitae leo semper ullamcorper nulla quis tincidunt purus." heading_container="h2" heading_h_alignment="inline" heading_typography="size-class:h1-alt" heading_color="transparent" heading_color_stroke="#1a1a1a"][/vc_column][/vc_row]',
      'category' => 'testimonial',
      'image' => '0.2/testimonial_large-text-stroke.jpg',
    ),
    array(
      'id' => 'separator_arrow-icon',
      'name' => 'Separator - Arrow Down Icon',
      'content' => '[vc_row row_section_padding="padding-top:none|padding-bottom:none" row_force_as_bg="as-background"][vc_column el_zindex="2"][vc_icon type="material" icon_material="vc-material vc-material-arrow_downward" icon_style="bg" icon_bg_shadow="drop-shadow" icon_link_transition="to-bottom" icon_text_color="#1a1a1a" icon_bg_color="#ffffff" icon_link="url:%23news|||"][/vc_column][/vc_row]',
      'category' => 'separator, icon',
      'image' => '0.2/separator_arrow-icon.jpg',
    ),
    array(
      'id' => 'gallery_slider-loop_v-centered_w-bg-text',
      'name' => 'Gallery - Looped Slider - w/ BG Text',
      'content' => '[vc_row row_background_color="#fafafa"][vc_column][vc_custom_heading heading_text="#omnis" heading_container="h2" heading_type="as-background" heading_type_bg_oneline="true" heading_typography="font-size:400|line-height:1em|font-weight:700" heading_color="#ffffff" el_zindex="1" heading_advanced_h_offset="desktop:pull-2-margin|tablet:pull-1-margin|phone:pull-2" heading_advanced_v_offset="desktop:pull-penta-margin|tablet:pull-triple-margin|phone:pull-double-margin"][vc_empty_space][vc_gallery images_layout="slider" images_layout_slider_style="full" carousel_loop="enabled" images_columns_span="desktop:6" images_alignment_v="center" animation="from-bottom" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'gallery, slider',
      'image' => '0.2/gallery_slider-loop_v-centered_w-bg-text.jpg',
    ),
    array(
      'id' => 'loop_textual-h2_side-header',
      'name' => 'Loop - Textutal - Large Title (h2) - w/ Side Header',
      'content' => '[vc_row row_columns_gap="triple" row_rows_gap="single"][vc_column column_padding="padding-top:quarter" width="1/4"][vc_custom_heading heading_text="Latest news." heading_container="h4"][/vc_column][vc_column el_zindex="2" width="3/4"][loprd_loop loop="size:7|order_by:date" grid_layout="textual" grid_layout_textual_style="block" grid_rows_gap="quarter" grid_alignment_v="baseline" post_layout_ratio="1:1" post_meta="`{`omnis_date`}`" post_title_typo="size-class:h2-size" undefined=""][/vc_column][/vc_row]',
      'category' => 'loop, loop-related',
      'image' => '0.2/loop_textual-h2_side-header.jpg',
    ),
    array(
      'id' => 'call-to-action_text-stroke_dark',
      'name' => 'Call to Action - Text Stroke Hero - Dark BG',
      'content' => '[vc_row row_column_content_alignment_v="center" row_rows_gap="single" row_content_txt_skin="txt--light" row_background_color="#1a1a1a"][vc_column width="2/3"][vc_custom_heading heading_text="We are recruiting!" heading_container="h2" heading_typography="size-class:h1-alt" heading_color="transparent" heading_color_stroke="#ffffff"][vc_empty_space empty_height="quarter"][vc_custom_heading heading_text="Join our team today!" heading_container="h2"][/vc_column][vc_column column_alignment_h="right" width="1/3"][vc_button2 title="Learn more" button_color="btn-light" button_type="btn-outlined" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'call-to-action, hero, text, button',
      'image' => '0.2/call-to-action_text-stroke_dark.jpg',
    ),
    array(
      'id' => 'services_bordered-blocks_w-side-header',
      'name' => 'Services - Bordered Blocks - w/ Side Header',
      'content' => '[vc_row row_columns_gap="triple" row_rows_gap="single"][vc_column column_padding="padding-top:quarter" width="1/4"][vc_custom_heading heading_text="What we do" heading_container="h4"][/vc_column][vc_column el_zindex="2" width="3/4"][vc_row_inner row_column_content_alignment_v="bottom" row_rows_gap="single"][vc_column_inner column_background_color="#ffffff" width="1/2" css=".vc_custom_1550076986406{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-color: #1a1a1a !important;border-left-style: solid !important;border-right-color: #1a1a1a !important;border-right-style: solid !important;border-top-color: #1a1a1a !important;border-top-style: solid !important;border-bottom-color: #1a1a1a !important;border-bottom-style: solid !important;}"][vc_empty_space][vc_custom_heading heading_text="Front-End Development" heading_container="h3"][vc_column_text]Donec scelerisque quis nisl et rhoncus. Pellentesque auctor pulvinar enim. Vivamus blandit sit amet ante ac facilisis.[/vc_column_text][/vc_column_inner][vc_column_inner column_background_color="#ffffff" width="1/2" css=".vc_custom_1550076993293{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-color: #1a1a1a !important;border-left-style: solid !important;border-right-color: #1a1a1a !important;border-right-style: solid !important;border-top-color: #1a1a1a !important;border-top-style: solid !important;border-bottom-color: #1a1a1a !important;border-bottom-style: solid !important;}"][vc_empty_space][vc_custom_heading heading_text="Back-End Development" heading_container="h3"][vc_column_text]Nullam lobortis nisi sed tortor venenatis porttitor. Suspendisse quis laoreet eros.[/vc_column_text][/vc_column_inner][vc_column_inner column_background_color="#ffffff" width="1/2" css=".vc_custom_1550076998262{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-color: #1a1a1a !important;border-left-style: solid !important;border-right-color: #1a1a1a !important;border-right-style: solid !important;border-top-color: #1a1a1a !important;border-top-style: solid !important;border-bottom-color: #1a1a1a !important;border-bottom-style: solid !important;}"][vc_empty_space][vc_custom_heading heading_text="Ecommerce" heading_container="h3"][vc_column_text]Morbi accumsan tellus a turpis pretium, vitae imperdiet dui suscipit.[/vc_column_text][/vc_column_inner][vc_column_inner column_background_color="#ffffff" width="1/2" css=".vc_custom_1550077003263{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;border-left-color: #1a1a1a !important;border-left-style: solid !important;border-right-color: #1a1a1a !important;border-right-style: solid !important;border-top-color: #1a1a1a !important;border-top-style: solid !important;border-bottom-color: #1a1a1a !important;border-bottom-style: solid !important;}"][vc_empty_space][vc_custom_heading heading_text="iOS &amp; Android" heading_container="h3"][vc_column_text]Suspendisse maximus risus a odio accumsan consectetur. Nunc ultrices metus condimentum orci fermentum, in malesuada sapien viverra.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'services',
      'image' => '0.2/services_bordered-blocks_w-side-header.jpg',
    ),
    array(
      'id' => 'loop_looped-slider_v-centered_w-bg-text',
      'name' => 'Loop - Looped Slider - V-Centered - w/ BG Text',
      'content' => '[vc_row row_background_color="#fafafa"][vc_column][vc_custom_heading heading_text="#work" heading_container="h2" heading_type="as-background" heading_type_bg_oneline="true" heading_typography="font-size:400|line-height:1em|font-weight:700" heading_color="#ffffff" el_zindex="1" heading_advanced_h_offset="desktop:pull-2-margin|tablet:pull-1-margin|phone:pull-2" heading_advanced_v_offset="desktop:pull-penta-margin|tablet:pull-triple-margin|phone:pull-double-margin"][vc_empty_space][loprd_loop loop="order_by:date" grid_layout="slider" grid_layout_slider_style="full" carousel_loop="enabled" _grid_columns="desktop:6" grid_alignment_v="center" post_layout="img" post_layout_ratio="" post_content_layout="title" post_alignment_h="center" post_hover_img_content="hover-content--bottom hover--in" post_image_overlay_color="#ffffff" post_content_skin_color="txt--dark" post_drop_shadow="" post_content_max_width="80" animation="from-bottom" animation_delay="200"][/vc_column][/vc_row]',
      'category' => 'loop',
      'image' => '0.2/loop_looped-slider_v-centered_w-bg-text.jpg',
    ),
    array(
      'id' => 'hero-w-line_pinned_w-large-image',
      'name' => 'Hero Pinned - w/ Line - Large Image',
      'content' => '[vc_section section_background_color="transparent" section_scroll_pin="enabled" section_content_animation="fade-out-5"][vc_row row_column_alignment_h="center"][vc_column][vc_custom_heading heading_text="About us" heading_container="h1"][/vc_column][/vc_row][/vc_section][vc_row row_section_padding="padding-top:none|padding-bottom:none" row_column_alignment_h="center" row_background_color="transparent"][vc_column][vc_custom_heading heading_text="︱" heading_container="h6" heading_typography="size-class:h1-size|font-weight:100" heading_color="transparent" heading_color_stroke="#1a1a1a"][vc_single_image image_external="https://source.unsplash.com/GANqCr1BRTU/1500x1000 image_container_width="block" image_width="1500" image_ratio="5:3" css=".vc_custom_1563549575604{margin-top: 120px !important;}"][/vc_column][/vc_row]',
      'category' => 'loop',
      'image' => '0.2/hero-w-line_pinned_w-large-image.jpg',
    ),
    array(
      'id' => 'text_leading_centered',
      'name' => 'Text - Leading - H-Centered',
      'content' => '[vc_row row_column_alignment_h="center" row_text_typo="size-class:leading-size"][vc_column][vc_column_text]Praesent finibus ex tincidunt ultrices tempus. Nunc eu nibh nisi. Proin eget tortor felis. Aenean dui ex, auctor ac sapien sit amet, tempor pulvinar libero. In interdum, nibh in aliquet gravida, enim dui consectetur ante, in malesuada diam elit eget elit. Integer eu pharetra lorem, eu tincidunt ex. Integer turpis nulla, eleifend et est id, cursus suscipit nibh. Etiam sit amet enim eros. Praesent lacinia eleifend erat et tincidunt.

      Aliquam erat volutpat. Suspendisse aliquet lorem nunc, nec placerat sem dictum at. Mauris tincidunt pulvinar sapien. Mauris condimentum, purus sit amet vulputate volutpat, ante nisl fringilla nibh, a aliquet metus libero non arcu.
      
      Phasellus dignissim tortor sit amet pellentesque eleifend. Morbi venenatis metus porttitor ante ornare tincidunt. Sed commodo felis non orci ornare molestie.[/vc_column_text][/vc_column][/vc_row]',
      'category' => 'text',
      'image' => '0.2/text_leading_centered.jpg',
    ),
    array(
      'id' => 'separator_vertical-line',
      'name' => 'Text - Leading - H-Centered',
      'content' => '[vc_row row_column_alignment_h="center"][vc_column][vc_custom_heading heading_text="︱" heading_container="h6" heading_typography="size-class:h1-size|font-weight:100" heading_color="transparent" heading_color_stroke="#1a1a1a"][/vc_column][/vc_row]',
      'category' => 'separator',
      'image' => '0.2/separator_vertical-line.jpg',
    ),
    array(
      'id' => 'loop_textual-h2_h-centered',
      'name' => 'Loop - Textual H2 - H-Centered',
      'content' => '[vc_row row_column_alignment_h="center"][vc_column][loprd_loop grid_layout="textual" grid_layout_textual_style="block" grid_rows_gap="quarter" grid_alignment_v="baseline" grid_textual_alignment_h="center" post_layout_ratio="" post_content_layout="meta,title" post_meta="`{`omnis_date`}`" post_title_typo="size-class:h2-size" post_meta_typo="size-class:h3-size|font-weight:400"][/vc_column][/vc_row]',
      'category' => 'separator',
      'image' => '0.2/loop_textual-h2_h-centered.jpg',
    ),
    array(
      'id' => 'services-w-images_2cols_pushed_1100px',
      'name' => 'Services w/ Image - Pushed - 2Cols (1100px)',
      'content' => '[vc_row row_container_width_custom="1101" row_columns_gap="triple" row_rows_gap="triple"][vc_column width="1/2"][vc_row_inner][vc_column_inner][vc_single_image image_width="1000" image_ratio="4:3" image_external="https://source.unsplash.com/_3Q3tsJ01nc/1000"][vc_custom_heading heading_text="E-commerce" heading_container="h4"][vc_column_text]In orci lorem, mollis vel tincidunt at, finibus vitae libero. Suspendisse maximus dolor sit amet est finibus tincidunt. Maecenas vel aliquam urna. Morbi faucibus rhoncus augue.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space empty_height="triple"][vc_row_inner][vc_column_inner][vc_single_image image_width="1000" image_ratio="4:3" image_external="https://source.unsplash.com/_xhZcNsqPhQ/1000"][vc_custom_heading heading_text="UI &amp; UX" heading_container="h4"][vc_column_text]Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vitae neque in dui facilisis porttitor. Etiam facilisis lacus a imperdiet pharetra. Vestibulum ac ultricies lectus.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space empty_height="triple"][vc_row_inner][vc_column_inner][vc_single_image image_width="1000" image_ratio="4:3" image_external="https://source.unsplash.com/n31x0hhnzOs/1000"][vc_custom_heading heading_text="iOS &amp; Android Apps" heading_container="h4"][vc_column_text]Ut eget porttitor magna, id venenatis odio. In risus nisi, placerat eget ornare vel, pretium vitae sem. Pellentesque sed mauris nisl.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_empty_space empty_height="triple" el_visibility="phone:hidden"][vc_row_inner][vc_column_inner][vc_single_image image_width="1000" image_ratio="4:3" image_external="https://source.unsplash.com/r3iAqHb7JWs/1000"][vc_custom_heading heading_text="Brand Identity" heading_container="h4"][vc_column_text]Vestibulum at convallis ex. Suspendisse hendrerit quis neque quis commodo. Maecenas vulputate laoreet magna eget sagittis.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space empty_height="triple"][vc_row_inner][vc_column_inner][vc_single_image image_width="1000" image_ratio="4:3" image_external="https://source.unsplash.com/o2TRWThve_I/1000"][vc_custom_heading heading_text="Creative Direction" heading_container="h4"][vc_column_text]Pellentesque nibh justo, venenatis non augue sed, ultrices gravida ipsum. Nunc posuere tellus vitae lectus fringilla, ut sodales tortor lacinia.[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]',
      'category' => 'services, text, image',
      'image' => '0.2/services-w-images_2cols_pushed_1100px.jpg',
    ),
    array(
      'id' => 'separator_star',
      'name' => 'Separator - Star',
      'content' => '[vc_row row_column_alignment_h="center"][vc_column][vc_custom_heading heading_text="∗" heading_container="h6" heading_typography="size-class:h1-size|font-weight:100" heading_color="transparent" heading_color_stroke="#1a1a1a"][/vc_column][/vc_row]',
      'category' => 'services, text, image',
      'image' => '0.2/separator_star.jpg',
    ),
    array(
      'id' => 'text-w-button_leading_centered',
      'name' => 'Text w/ Button - H-Centered',
      'content' => '[vc_row row_column_alignment_h="center" row_text_typo="size-class:leading-size"][vc_column][vc_column_text]Aenean finibus mauris id libero laoreet convallis. Donec eget diam lacus. Aliquam feugiat odio nec lacus molestie, ut ullamcorper ante auctor. Aliquam pretium mauris at justo congue dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus.[/vc_column_text][/vc_column][/vc_row][vc_row row_container_width_custom="1300" row_column_alignment_h="center"][vc_column][vc_button2 title="Contact us" button_size="btn-lg" link="url:%23|||"][/vc_column][/vc_row]',
      'category' => 'text, call-to-action, button',
      'image' => '0.2/text-w-button_leading_centered.jpg',
    ),
  );

  return $studio_elements_data;
}