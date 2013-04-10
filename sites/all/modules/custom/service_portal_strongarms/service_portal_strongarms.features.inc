<?php
/**
 * @file
 * service_portal_strongarms.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function service_portal_strongarms_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
