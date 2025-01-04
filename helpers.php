<?php

function _get_image_html($image_id, $size = 'full'){
    $image_data = wp_get_attachment_image_src( $image_id, $size );

    if ( $image_data ) {
        $image_url = $image_data[0];
        $image_width = $image_data[1];
        $image_height = $image_data[2];
        echo '<div class="image-wrapper"><img src="' . esc_url( $image_url ) . '" width="' . esc_attr( $image_width ) . '" height="' . esc_attr( $image_height ) . '" alt="Custom Alt Text"></div>';
    }
}