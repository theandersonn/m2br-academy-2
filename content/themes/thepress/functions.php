<?php
    // Prevent file from being loaded directly
    if ( ! defined( 'ABSPATH' ) ) {
        die( '-1' );
    }

    // Classes
    // -------------------------------------------
    require get_template_directory() . '/inc/classes/class-odin-thumbnail-resizer.php';

    // Functions
    // -------------------------------------------
    require get_template_directory() . '/inc/functions/post-thumbnail.php';
    require get_template_directory() . '/inc/functions/scripts-and-styles.php';
    require get_template_directory() . '/inc/functions/theme-suport.php';
    require get_template_directory() . '/inc/functions/thumbnail-admin-columns.php';
