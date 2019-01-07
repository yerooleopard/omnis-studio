<?php 
		
/**
 * Register a custom menu page.
 */
function omnis_remove_menu_page(){
    remove_menu_page( 'edit.php?post_type=font' );
}


function omnis_register_menu_page(){
    add_menu_page(
        esc_html__( 'Omnis', 'omnis' ),
        esc_html__( 'Omnis', 'omnis' ),
        'manage_options',
        'omnis-theme',
        'omnis_menu_page',
        'dashicons-schedule',
        99
    );

    add_submenu_page(
        'omnis-theme',
        esc_html__( 'Templates', 'omnis' ),
        esc_html__( 'Templates', 'omnis' ),
        'manage_options',
        'edit.php?post_type=omnis_templates',
        NULL
    );

    add_submenu_page(
        'omnis-theme',
        esc_html__( 'Elements', 'omnis' ),
        esc_html__( 'Elements', 'omnis' ),
        'manage_options',
        'edit.php?post_type=omnis_elements',
        NULL
    );

    add_submenu_page(
        'omnis-theme',
        esc_html__( 'Fonto', 'omnis' ),
        esc_html__( 'Font Manager', 'omnis' ),
        'manage_options',
        'edit.php?post_type=font',
        NULL
    );
}


add_action( 'admin_menu', 'omnis_remove_menu_page' );
add_action( 'admin_menu', 'omnis_register_menu_page' );