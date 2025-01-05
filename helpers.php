<?php

function _get_image_html($image_id, $classes = [], $size = 'full') {
    $image_data = wp_get_attachment_image_src($image_id, $size);
  
    if ($image_data) {
      $image_url = $image_data[0];
      $image_width = $image_data[1];
      $image_height = $image_data[2];
  
      // Add "image-wrapper" to the array of classes
      $classes[] = 'image-wrapper';
  
      // Use printf and implode to render the HTML
      printf(
        '<div class="%s"><img src="%s" width="%d" height="%d" alt="Custom Alt Text"></div>',
        esc_attr(implode(' ', $classes)),
        esc_url($image_url),
        esc_attr($image_width),
        esc_attr($image_height)
      );
    }
  }
  