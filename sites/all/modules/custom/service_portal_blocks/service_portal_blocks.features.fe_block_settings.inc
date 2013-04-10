<?php
/**
 * @file
 * service_portal_blocks.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function service_portal_blocks_default_fe_block_settings() {
  $export = array();

  // acquia_marina
  $theme = array();

  $theme['block-block_10'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-28',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/91',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_10',
  );

  $theme['block-block_11'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-27',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/92',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_11',
  );

  $theme['block-block_12'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-26',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/93',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_12',
  );

  $theme['block-block_13'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-25',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/94',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_13',
  );

  $theme['block-block_14'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-23',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/95',
    'title' => '服务台管理',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_14',
  );

  $theme['block-block_15'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-24',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/96',
    'title' => '常见问题解答',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_15',
  );

  $theme['block-block_16'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-36',
    'region' => 'postscript_top',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
    'machine_name' => 'block_16',
  );

  $theme['block-service_desk'] = array(
    'module' => 'block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-34',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => 'Service Desk',
    'cache' => -1,
    'i18n_mode' => '0',
    'machine_name' => 'service_desk',
  );

  $theme['book-navigation'] = array(
    'module' => 'book',
    'delta' => 'navigation',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '0',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => 5,
    'i18n_mode' => '1',
  );

  $theme['locale-language'] = array(
    'module' => 'locale',
    'delta' => 'language',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-37',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => 'Language',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['search-form'] = array(
    'module' => 'search',
    'delta' => 'form',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-1',
    'region' => 'header',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['superfish-1'] = array(
    'module' => 'superfish',
    'delta' => '1',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '0',
    'region' => 'main_menu',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['system-main'] = array(
    'module' => 'system',
    'delta' => 'main',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '1',
    'region' => 'content',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['user-login'] = array(
    'module' => 'user',
    'delta' => 'login',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-35',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-landis_introduction-block'] = array(
    'module' => 'views',
    'delta' => 'landis_introduction-block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-33',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-lightbox_sample-block'] = array(
    'module' => 'views',
    'delta' => 'lightbox_sample-block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-37',
    'region' => 'postscript_top',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-slideshow_eva-block'] = array(
    'module' => 'views',
    'delta' => 'slideshow_eva-block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '0',
    'region' => 'preface_top',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-user_sample-block'] = array(
    'module' => 'views',
    'delta' => 'user_sample-block',
    'theme' => 'acquia_marina',
    'status' => '1',
    'weight' => '-36',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $export['acquia_marina'] = $theme;

  // bartik
  $theme = array();

  $theme['block-block_10'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/91',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_10',
  );

  $theme['block-block_11'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/92',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_11',
  );

  $theme['block-block_12'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/93',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_12',
  );

  $theme['block-block_13'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/94',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_13',
  );

  $theme['block-block_14'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/95',
    'title' => '服务台管理',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_14',
  );

  $theme['block-block_15'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/96',
    'title' => '常见问题解答',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_15',
  );

  $theme['block-block_16'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
    'machine_name' => 'block_16',
  );

  $theme['block-service_desk'] = array(
    'module' => 'block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => 'Service Desk',
    'cache' => -1,
    'i18n_mode' => '0',
    'machine_name' => 'service_desk',
  );

  $theme['book-navigation'] = array(
    'module' => 'book',
    'delta' => 'navigation',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => 5,
    'i18n_mode' => '1',
  );

  $theme['locale-language'] = array(
    'module' => 'locale',
    'delta' => 'language',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => 'Language',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['search-form'] = array(
    'module' => 'search',
    'delta' => 'form',
    'theme' => 'bartik',
    'status' => '1',
    'weight' => '-1',
    'region' => 'header',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['superfish-1'] = array(
    'module' => 'superfish',
    'delta' => '1',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['system-main'] = array(
    'module' => 'system',
    'delta' => 'main',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['user-login'] = array(
    'module' => 'user',
    'delta' => 'login',
    'theme' => 'bartik',
    'status' => '1',
    'weight' => '0',
    'region' => 'sidebar_first',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-landis_introduction-block'] = array(
    'module' => 'views',
    'delta' => 'landis_introduction-block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-lightbox_sample-block'] = array(
    'module' => 'views',
    'delta' => 'lightbox_sample-block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-slideshow_eva-block'] = array(
    'module' => 'views',
    'delta' => 'slideshow_eva-block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-user_sample-block'] = array(
    'module' => 'views',
    'delta' => 'user_sample-block',
    'theme' => 'bartik',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $export['bartik'] = $theme;

  // seven
  $theme = array();

  $theme['block-block_10'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/91',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_10',
  );

  $theme['block-block_11'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/92',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_11',
  );

  $theme['block-block_12'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/93',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_12',
  );

  $theme['block-block_13'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/94',
    'title' => '优化流程清单',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_13',
  );

  $theme['block-block_14'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/95',
    'title' => '服务台管理',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_14',
  );

  $theme['block-block_15'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '1',
    'pages' => 'node/96',
    'title' => '常见问题解答',
    'cache' => -1,
    'i18n_mode' => '1',
    'machine_name' => 'block_15',
  );

  $theme['block-block_16'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
    'machine_name' => 'block_16',
  );

  $theme['block-service_desk'] = array(
    'module' => 'block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => 'Service Desk',
    'cache' => -1,
    'i18n_mode' => '0',
    'machine_name' => 'service_desk',
  );

  $theme['book-navigation'] = array(
    'module' => 'book',
    'delta' => 'navigation',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => 5,
    'i18n_mode' => '1',
  );

  $theme['locale-language'] = array(
    'module' => 'locale',
    'delta' => 'language',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => 'Language',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['search-form'] = array(
    'module' => 'search',
    'delta' => 'form',
    'theme' => 'seven',
    'status' => '1',
    'weight' => '0',
    'region' => 'dashboard_sidebar',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['superfish-1'] = array(
    'module' => 'superfish',
    'delta' => '1',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['system-main'] = array(
    'module' => 'system',
    'delta' => 'main',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['user-login'] = array(
    'module' => 'user',
    'delta' => 'login',
    'theme' => 'seven',
    'status' => '1',
    'weight' => '10',
    'region' => 'content',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-landis_introduction-block'] = array(
    'module' => 'views',
    'delta' => 'landis_introduction-block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-lightbox_sample-block'] = array(
    'module' => 'views',
    'delta' => 'lightbox_sample-block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-slideshow_eva-block'] = array(
    'module' => 'views',
    'delta' => 'slideshow_eva-block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '<none>',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $theme['views-user_sample-block'] = array(
    'module' => 'views',
    'delta' => 'user_sample-block',
    'theme' => 'seven',
    'status' => 0,
    'weight' => '0',
    'region' => '',
    'custom' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => -1,
    'i18n_mode' => '0',
  );

  $export['seven'] = $theme;

  $theme_default = variable_get('theme_default', 'garland');
  $themes = list_themes();
  foreach ($export as $theme_key => $settings) {
    if ($theme_key != $theme_default && empty($themes[$theme_key]->status)) {
      unset($export[$theme_key]);
    }
  }
  return $export;
}
