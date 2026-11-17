<?php

// CPT TAXONOMY

include( 'configure/cpt-taxonomy.php' );

// Utilities

include( 'configure/utilities.php' );

// CONFIG

include( 'configure/configure.php' );

// EDITOR

include( 'configure/editor.php' );

// JAVASCRIPT & CSS

include( 'configure/js-css.php' );

// SHORTCODES

include( 'configure/shortcodes.php' );

// ACF

include( 'configure/acf.php' );

// PLUGIN SETUP

include( 'configure/plugins.php' );

// HOOKS ADMIN

if(is_admin()) {
	include( 'configure/admin.php' );
}
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'TaleSwap Library',
        'menu_title'    => 'Library',
        'menu_slug'     => 'taleswap-books',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function taleswap_enqueue_fonts() {
    wp_enqueue_style(
        'taleswap-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Uncial+Antiqua&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'taleswap_enqueue_fonts');