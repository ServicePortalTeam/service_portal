<?php
/**
 * @file
 * service_portal_user_permissions.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function service_portal_user_permissions_user_default_roles() {
  $roles = array();

  // Exported role: editor.
  $roles['editor'] = array(
    'name' => 'editor',
    'weight' => '3',
  );

  return $roles;
}
