<?php
/**
 * @file
 * Enables modules and site configuration for a minimal site installation.
 */

/**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the site configuration form.
 * Because we need the global arguments in 'alu_feeds' and 'alu_blocks' module to generate the default homepage and footer region block
 * We add a form submit function to enable those two modules 
 */
function service_portal_form_install_configure_form_alter(&$form, $form_state) {
  // Pre-populate the site name with the server name.
  $form['site_information']['site_name']['#default_value'] = $_SERVER['SERVER_NAME'];
  // Generate default homepage and block
  $form['#submit'][] = 'alcatel_lucent_form_submit';
}

/**
 * Implements hook_form_submit()
 * Enable two modules to generate default homepage and footer region block
 */
function alcatel_lucent_form_submit(&$form, $form_state){
  $module_list = array(
    '0'=> "service_portal_blocks",
  );
  module_enable($module_list,TRUE);
  $module_list = array(
      '0'=> "service_portal_menus",
  );
  module_enable($module_list,TRUE);  
  cache_clear_all();
}
