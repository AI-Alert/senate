<?php

/* -------------------------------------------------------------------------- */
/*	Регистрация миниатюр изображений
/* -------------------------------------------------------------------------- */

if( function_exists( 'add_image_size' )) {
    add_image_size( 'blur', 60, 60, true );
    add_image_size( 'middle', 650, 650, true );
    add_image_size( 'hero', 1920, 960, true );
    add_image_size( 'hero_laptop', 1366, 768, true );

    add_image_size( 'gallery', 330, 225, true );
    add_image_size( 'icon_adv', 40, 40, true );
    add_image_size( 'icon_programm', 60, 60, true );
    add_image_size( 'logo', 80, 80, true );
    add_image_size( 'teach', 570, 516, true );
    add_image_size( 'teach_back', 960, 560, true );
    add_image_size( 'review', 570, 330, true );
    add_image_size( 'about', 690, 383, true );
    add_image_size( 'banner_smart', 382, 527, true );
}



/* -------------------------------------------------------------------------- */
/*	Убираем лишние размеры миниатюр изображений
/* -------------------------------------------------------------------------- */


// function filter_image_sizes() {
//     foreach ( get_intermediate_image_sizes() as $size ) {
//         if ( in_array( $size, array( '1536x1536', '2048x2048', 'scaled' ) ) ) {
//             remove_image_size( $size );
//         }
//     }
// }
