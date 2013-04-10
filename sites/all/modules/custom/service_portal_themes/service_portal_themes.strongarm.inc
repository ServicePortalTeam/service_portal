<?php
/**
 * @file
 * service_portal_themes.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function service_portal_themes_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'acquia_marina_responsive_css';
  $strongarm->value = 'acquia_marina.responsive.grid.css';
  $export['acquia_marina_responsive_css'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'acquia_marina_responsive_path';
  $strongarm->value = 'public://fusion';
  $export['acquia_marina_responsive_path'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'theme_acquia_marina_settings';
  $strongarm->value = array(
    'toggle_logo' => 1,
    'toggle_name' => 0,
    'toggle_slogan' => 1,
    'toggle_node_user_picture' => 1,
    'toggle_comment_user_picture' => 1,
    'toggle_favicon' => 1,
    'default_logo' => 0,
    'logo_path' => 'public://logo2.png',
    'default_favicon' => 1,
    'favicon_path' => '',
    'favicon_upload' => '',
    'sidebar_first_width' => '4',
    'sidebar_second_width' => '3',
    'theme_grid' => 'grid16-960',
    'fluid_grid_width' => 'fluid-100',
    'responsive_enabled' => '0',
    'responsive_columns' => '16',
    'responsive_ie_shim' => 1,
    'grid_mask' => 0,
    'sidebar_layout' => 'sidebars-split',
    'sidebar_enabled' => 1,
    'sidebar_grid_width' => '1200',
    'sidebar_gutter' => '30',
    'sidebar_mquery' => 'only screen and (min-width:1200px)',
    'theme_font' => 'none',
    'theme_font_size' => 'font-size-12',
    'breadcrumb_display' => 0,
    'search_snippet' => 1,
    'search_info_type' => 1,
    'search_info_user' => 1,
    'search_info_date' => 1,
    'search_info_comment' => 1,
    'search_info_upload' => 1,
    'sidebar_tablet_landscape_layout' => 'sidebars-split',
    'sidebar_tablet_landscape_enabled' => 1,
    'sidebar_tablet_landscape_grid_width' => '960',
    'sidebar_tablet_landscape_gutter' => '20',
    'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
    'sidebar_tablet_portrait_layout' => 'sidebars-split',
    'sidebar_tablet_portrait_enabled' => 1,
    'sidebar_tablet_portrait_grid_width' => '768',
    'sidebar_tablet_portrait_gutter' => '20',
    'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
    'sidebar_phone_landscape_layout' => 'sidebars-drop',
    'sidebar_phone_landscape_enabled' => 1,
    'sidebar_phone_landscape_grid_width' => 'mobile',
    'sidebar_phone_landscape_gutter' => '10',
    'sidebar_phone_landscape_mquery' => 'only screen and (max-width:759px)',
    'general_settings__active_tab' => 'edit-theme-grid-config',
  );
  $export['theme_acquia_marina_settings'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'theme_default';
  $strongarm->value = 'acquia_marina';
  $export['theme_default'] = $strongarm;

  return $export;
}
