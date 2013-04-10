<?php
/**
 * @file
 * service_portal_images_style.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function service_portal_images_style_image_default_styles() {
  $styles = array();

  // Exported image style: slideshow.
  $styles['slideshow'] = array(
    'name' => 'slideshow',
    'effects' => array(
      1 => array(
        'label' => '比例缩放并裁切',
        'help' => '比例缩放将会保持原始图片的宽高比，然后裁切最大边。这通常对创建不拉伸的完美的方形缩略图是最有用的。',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '940',
          'height' => '150',
        ),
        'weight' => '1',
      ),
    ),
  );

  return $styles;
}
