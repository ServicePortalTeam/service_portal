<?php
/**
 * @file
 * service_portal_user_permissions.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function service_portal_user_permissions_user_default_permissions() {
  $permissions = array();

  // Exported permission: access administration menu.
  $permissions['access administration menu'] = array(
    'name' => 'access administration menu',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: access administration pages.
  $permissions['access administration pages'] = array(
    'name' => 'access administration pages',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'system',
  );

  // Exported permission: access all views.
  $permissions['access all views'] = array(
    'name' => 'access all views',
    'roles' => array(
      0 => 'administrator',
      1 => 'authenticated user',
      2 => 'editor',
    ),
    'module' => 'views',
  );

  // Exported permission: access comments.
  $permissions['access comments'] = array(
    'name' => 'access comments',
    'roles' => array(
      0 => 'administrator',
      1 => 'anonymous user',
      2 => 'authenticated user',
      3 => 'editor',
    ),
    'module' => 'comment',
  );

  // Exported permission: access content.
  $permissions['access content'] = array(
    'name' => 'access content',
    'roles' => array(
      0 => 'administrator',
      1 => 'anonymous user',
      2 => 'authenticated user',
      3 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: access content overview.
  $permissions['access content overview'] = array(
    'name' => 'access content overview',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: access contextual links.
  $permissions['access contextual links'] = array(
    'name' => 'access contextual links',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'contextual',
  );

  // Exported permission: access dashboard.
  $permissions['access dashboard'] = array(
    'name' => 'access dashboard',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'dashboard',
  );

  // Exported permission: access drupalchat.
  $permissions['access drupalchat'] = array(
    'name' => 'access drupalchat',
    'roles' => array(
      0 => 'administrator',
      1 => 'authenticated user',
      2 => 'editor',
    ),
    'module' => 'drupalchat',
  );

  // Exported permission: access rules debug.
  $permissions['access rules debug'] = array(
    'name' => 'access rules debug',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'rules',
  );

  // Exported permission: access site in maintenance mode.
  $permissions['access site in maintenance mode'] = array(
    'name' => 'access site in maintenance mode',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'system',
  );

  // Exported permission: access site reports.
  $permissions['access site reports'] = array(
    'name' => 'access site reports',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'system',
  );

  // Exported permission: access user profiles.
  $permissions['access user profiles'] = array(
    'name' => 'access user profiles',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: add files to archive.
  $permissions['add files to archive'] = array(
    'name' => 'add files to archive',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: administer actions.
  $permissions['administer actions'] = array(
    'name' => 'administer actions',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'system',
  );

  // Exported permission: administer advanced pane settings.
  $permissions['administer advanced pane settings'] = array(
    'name' => 'administer advanced pane settings',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: administer comments.
  $permissions['administer comments'] = array(
    'name' => 'administer comments',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'comment',
  );

  // Exported permission: administer content translations.
  $permissions['administer content translations'] = array(
    'name' => 'administer content translations',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'i18n_node',
  );

  // Exported permission: administer content types.
  $permissions['administer content types'] = array(
    'name' => 'administer content types',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: administer drupalchat.
  $permissions['administer drupalchat'] = array(
    'name' => 'administer drupalchat',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'drupalchat',
  );

  // Exported permission: administer feeds.
  $permissions['administer feeds'] = array(
    'name' => 'administer feeds',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'feeds',
  );

  // Exported permission: administer file manager.
  $permissions['administer file manager'] = array(
    'name' => 'administer file manager',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: administer filters.
  $permissions['administer filters'] = array(
    'name' => 'administer filters',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'filter',
  );

  // Exported permission: administer forums.
  $permissions['administer forums'] = array(
    'name' => 'administer forums',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'forum',
  );

  // Exported permission: administer fusion.
  $permissions['administer fusion'] = array(
    'name' => 'administer fusion',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'fusion_apply_ui',
  );

  // Exported permission: administer fusion labels.
  $permissions['administer fusion labels'] = array(
    'name' => 'administer fusion labels',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'fusion_labels',
  );

  // Exported permission: administer image styles.
  $permissions['administer image styles'] = array(
    'name' => 'administer image styles',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'image',
  );

  // Exported permission: administer languages.
  $permissions['administer languages'] = array(
    'name' => 'administer languages',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'locale',
  );

  // Exported permission: administer lightbox2.
  $permissions['administer lightbox2'] = array(
    'name' => 'administer lightbox2',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'lightbox2',
  );

  // Exported permission: administer mini panels.
  $permissions['administer mini panels'] = array(
    'name' => 'administer mini panels',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels_mini',
  );

  // Exported permission: administer module filter.
  $permissions['administer module filter'] = array(
    'name' => 'administer module filter',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'module_filter',
  );

  // Exported permission: administer modules.
  $permissions['administer modules'] = array(
    'name' => 'administer modules',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'system',
  );

  // Exported permission: administer nodes.
  $permissions['administer nodes'] = array(
    'name' => 'administer nodes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: administer page manager.
  $permissions['administer page manager'] = array(
    'name' => 'administer page manager',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'page_manager',
  );

  // Exported permission: administer pane access.
  $permissions['administer pane access'] = array(
    'name' => 'administer pane access',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: administer panel-nodes.
  $permissions['administer panel-nodes'] = array(
    'name' => 'administer panel-nodes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels_node',
  );

  // Exported permission: administer panels layouts.
  $permissions['administer panels layouts'] = array(
    'name' => 'administer panels layouts',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: administer panels styles.
  $permissions['administer panels styles'] = array(
    'name' => 'administer panels styles',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: administer permissions.
  $permissions['administer permissions'] = array(
    'name' => 'administer permissions',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: administer quant.
  $permissions['administer quant'] = array(
    'name' => 'administer quant',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'quant',
  );

  // Exported permission: administer rules.
  $permissions['administer rules'] = array(
    'name' => 'administer rules',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'rules',
  );

  // Exported permission: administer search.
  $permissions['administer search'] = array(
    'name' => 'administer search',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'search',
  );

  // Exported permission: administer shadowbox.
  $permissions['administer shadowbox'] = array(
    'name' => 'administer shadowbox',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'shadowbox',
  );

  // Exported permission: administer shortcuts.
  $permissions['administer shortcuts'] = array(
    'name' => 'administer shortcuts',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'shortcut',
  );

  // Exported permission: administer simpleSAMLphp authentication.
  $permissions['administer simpleSAMLphp authentication'] = array(
    'name' => 'administer simpleSAMLphp authentication',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'simplesamlphp_auth',
  );

  // Exported permission: administer site configuration.
  $permissions['administer site configuration'] = array(
    'name' => 'administer site configuration',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'system',
  );

  // Exported permission: administer skinr.
  $permissions['administer skinr'] = array(
    'name' => 'administer skinr',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'skinr_ui',
  );

  // Exported permission: administer smtp module.
  $permissions['administer smtp module'] = array(
    'name' => 'administer smtp module',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'smtp',
  );

  // Exported permission: administer software updates.
  $permissions['administer software updates'] = array(
    'name' => 'administer software updates',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'system',
  );

  // Exported permission: administer taxonomy.
  $permissions['administer taxonomy'] = array(
    'name' => 'administer taxonomy',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: administer themes.
  $permissions['administer themes'] = array(
    'name' => 'administer themes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'system',
  );

  // Exported permission: administer url aliases.
  $permissions['administer url aliases'] = array(
    'name' => 'administer url aliases',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'path',
  );

  // Exported permission: administer users.
  $permissions['administer users'] = array(
    'name' => 'administer users',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: administer uuid.
  $permissions['administer uuid'] = array(
    'name' => 'administer uuid',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'uuid',
  );

  // Exported permission: administer views.
  $permissions['administer views'] = array(
    'name' => 'administer views',
    'roles' => array(
      0 => 'administrator',
      1 => 'authenticated user',
      2 => 'editor',
    ),
    'module' => 'views',
  );

  // Exported permission: block IP addresses.
  $permissions['block IP addresses'] = array(
    'name' => 'block IP addresses',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'system',
  );

  // Exported permission: bypass node access.
  $permissions['bypass node access'] = array(
    'name' => 'bypass node access',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: bypass rules access.
  $permissions['bypass rules access'] = array(
    'name' => 'bypass rules access',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'rules',
  );

  // Exported permission: cancel account.
  $permissions['cancel account'] = array(
    'name' => 'cancel account',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: change layouts in place editing.
  $permissions['change layouts in place editing'] = array(
    'name' => 'change layouts in place editing',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: change own username.
  $permissions['change own username'] = array(
    'name' => 'change own username',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: clear node feeds.
  $permissions['clear node feeds'] = array(
    'name' => 'clear node feeds',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'feeds',
  );

  // Exported permission: clear node_export feeds.
  $permissions['clear node_export feeds'] = array(
    'name' => 'clear node_export feeds',
    'roles' => array(),
    'module' => 'feeds',
  );

  // Exported permission: clear user feeds.
  $permissions['clear user feeds'] = array(
    'name' => 'clear user feeds',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'feeds',
  );

  // Exported permission: create article content.
  $permissions['create article content'] = array(
    'name' => 'create article content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: create book content.
  $permissions['create book content'] = array(
    'name' => 'create book content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: create faq content.
  $permissions['create faq content'] = array(
    'name' => 'create faq content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: create forum content.
  $permissions['create forum content'] = array(
    'name' => 'create forum content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: create mini panels.
  $permissions['create mini panels'] = array(
    'name' => 'create mini panels',
    'roles' => array(
      0 => 'administrator',
      1 => 'anonymous user',
      2 => 'authenticated user',
      3 => 'editor',
    ),
    'module' => 'panels_mini',
  );

  // Exported permission: create new directories.
  $permissions['create new directories'] = array(
    'name' => 'create new directories',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: create new files.
  $permissions['create new files'] = array(
    'name' => 'create new files',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: create page content.
  $permissions['create page content'] = array(
    'name' => 'create page content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: create panel content.
  $permissions['create panel content'] = array(
    'name' => 'create panel content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: create panel-nodes.
  $permissions['create panel-nodes'] = array(
    'name' => 'create panel-nodes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels_node',
  );

  // Exported permission: create slideshow content.
  $permissions['create slideshow content'] = array(
    'name' => 'create slideshow content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: create url aliases.
  $permissions['create url aliases'] = array(
    'name' => 'create url aliases',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'path',
  );

  // Exported permission: customize shortcut links.
  $permissions['customize shortcut links'] = array(
    'name' => 'customize shortcut links',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'shortcut',
  );

  // Exported permission: delete any article content.
  $permissions['delete any article content'] = array(
    'name' => 'delete any article content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any book content.
  $permissions['delete any book content'] = array(
    'name' => 'delete any book content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete any faq content.
  $permissions['delete any faq content'] = array(
    'name' => 'delete any faq content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete any forum content.
  $permissions['delete any forum content'] = array(
    'name' => 'delete any forum content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete any page content.
  $permissions['delete any page content'] = array(
    'name' => 'delete any page content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any panel content.
  $permissions['delete any panel content'] = array(
    'name' => 'delete any panel content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any panel-nodes.
  $permissions['delete any panel-nodes'] = array(
    'name' => 'delete any panel-nodes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels_node',
  );

  // Exported permission: delete any slideshow content.
  $permissions['delete any slideshow content'] = array(
    'name' => 'delete any slideshow content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete files and directories.
  $permissions['delete files and directories'] = array(
    'name' => 'delete files and directories',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: delete own article content.
  $permissions['delete own article content'] = array(
    'name' => 'delete own article content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own book content.
  $permissions['delete own book content'] = array(
    'name' => 'delete own book content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete own faq content.
  $permissions['delete own faq content'] = array(
    'name' => 'delete own faq content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete own forum content.
  $permissions['delete own forum content'] = array(
    'name' => 'delete own forum content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete own page content.
  $permissions['delete own page content'] = array(
    'name' => 'delete own page content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own panel content.
  $permissions['delete own panel content'] = array(
    'name' => 'delete own panel content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own panel-nodes.
  $permissions['delete own panel-nodes'] = array(
    'name' => 'delete own panel-nodes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels_node',
  );

  // Exported permission: delete own slideshow content.
  $permissions['delete own slideshow content'] = array(
    'name' => 'delete own slideshow content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete revisions.
  $permissions['delete revisions'] = array(
    'name' => 'delete revisions',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: delete terms in 1.
  $permissions['delete terms in 1'] = array(
    'name' => 'delete terms in 1',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: delete terms in 2.
  $permissions['delete terms in 2'] = array(
    'name' => 'delete terms in 2',
    'roles' => array(),
    'module' => 'taxonomy',
  );

  // Exported permission: display drupal links.
  $permissions['display drupal links'] = array(
    'name' => 'display drupal links',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: download original image.
  $permissions['download original image'] = array(
    'name' => 'download original image',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'lightbox2',
  );

  // Exported permission: duplicate files.
  $permissions['duplicate files'] = array(
    'name' => 'duplicate files',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: edit advanced skin settings.
  $permissions['edit advanced skin settings'] = array(
    'name' => 'edit advanced skin settings',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'skinr_ui',
  );

  // Exported permission: edit any article content.
  $permissions['edit any article content'] = array(
    'name' => 'edit any article content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any book content.
  $permissions['edit any book content'] = array(
    'name' => 'edit any book content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit any faq content.
  $permissions['edit any faq content'] = array(
    'name' => 'edit any faq content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit any forum content.
  $permissions['edit any forum content'] = array(
    'name' => 'edit any forum content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit any page content.
  $permissions['edit any page content'] = array(
    'name' => 'edit any page content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any panel content.
  $permissions['edit any panel content'] = array(
    'name' => 'edit any panel content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any panel-nodes.
  $permissions['edit any panel-nodes'] = array(
    'name' => 'edit any panel-nodes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels_node',
  );

  // Exported permission: edit any slideshow content.
  $permissions['edit any slideshow content'] = array(
    'name' => 'edit any slideshow content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit files.
  $permissions['edit files'] = array(
    'name' => 'edit files',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: edit own article content.
  $permissions['edit own article content'] = array(
    'name' => 'edit own article content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own book content.
  $permissions['edit own book content'] = array(
    'name' => 'edit own book content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit own comments.
  $permissions['edit own comments'] = array(
    'name' => 'edit own comments',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'comment',
  );

  // Exported permission: edit own faq content.
  $permissions['edit own faq content'] = array(
    'name' => 'edit own faq content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit own forum content.
  $permissions['edit own forum content'] = array(
    'name' => 'edit own forum content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit own page content.
  $permissions['edit own page content'] = array(
    'name' => 'edit own page content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own panel content.
  $permissions['edit own panel content'] = array(
    'name' => 'edit own panel content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own panel-nodes.
  $permissions['edit own panel-nodes'] = array(
    'name' => 'edit own panel-nodes',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels_node',
  );

  // Exported permission: edit own slideshow content.
  $permissions['edit own slideshow content'] = array(
    'name' => 'edit own slideshow content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit skin settings.
  $permissions['edit skin settings'] = array(
    'name' => 'edit skin settings',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'skinr_ui',
  );

  // Exported permission: edit terms in 1.
  $permissions['edit terms in 1'] = array(
    'name' => 'edit terms in 1',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: edit terms in 2.
  $permissions['edit terms in 2'] = array(
    'name' => 'edit terms in 2',
    'roles' => array(),
    'module' => 'taxonomy',
  );

  // Exported permission: export nodes.
  $permissions['export nodes'] = array(
    'name' => 'export nodes',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node_export',
  );

  // Exported permission: export own nodes.
  $permissions['export own nodes'] = array(
    'name' => 'export own nodes',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node_export',
  );

  // Exported permission: extract files from archive.
  $permissions['extract files from archive'] = array(
    'name' => 'extract files from archive',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: file uploads.
  $permissions['file uploads'] = array(
    'name' => 'file uploads',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: flush caches.
  $permissions['flush caches'] = array(
    'name' => 'flush caches',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: import node feeds.
  $permissions['import node feeds'] = array(
    'name' => 'import node feeds',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'feeds',
  );

  // Exported permission: import node_export feeds.
  $permissions['import node_export feeds'] = array(
    'name' => 'import node_export feeds',
    'roles' => array(),
    'module' => 'feeds',
  );

  // Exported permission: import user feeds.
  $permissions['import user feeds'] = array(
    'name' => 'import user feeds',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'feeds',
  );

  // Exported permission: manage features.
  $permissions['manage features'] = array(
    'name' => 'manage features',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'features',
  );

  // Exported permission: paste from clipboard.
  $permissions['paste from clipboard'] = array(
    'name' => 'paste from clipboard',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: post comments.
  $permissions['post comments'] = array(
    'name' => 'post comments',
    'roles' => array(
      0 => 'administrator',
      1 => 'authenticated user',
      2 => 'editor',
    ),
    'module' => 'comment',
  );

  // Exported permission: rename files and directories.
  $permissions['rename files and directories'] = array(
    'name' => 'rename files and directories',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: resize images.
  $permissions['resize images'] = array(
    'name' => 'resize images',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: revert revisions.
  $permissions['revert revisions'] = array(
    'name' => 'revert revisions',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: search content.
  $permissions['search content'] = array(
    'name' => 'search content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'search',
  );

  // Exported permission: select account cancellation method.
  $permissions['select account cancellation method'] = array(
    'name' => 'select account cancellation method',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'user',
  );

  // Exported permission: skip comment approval.
  $permissions['skip comment approval'] = array(
    'name' => 'skip comment approval',
    'roles' => array(
      0 => 'administrator',
      1 => 'authenticated user',
      2 => 'editor',
    ),
    'module' => 'comment',
  );

  // Exported permission: switch shortcut sets.
  $permissions['switch shortcut sets'] = array(
    'name' => 'switch shortcut sets',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'shortcut',
  );

  // Exported permission: translate admin strings.
  $permissions['translate admin strings'] = array(
    'name' => 'translate admin strings',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'i18n_string',
  );

  // Exported permission: translate content.
  $permissions['translate content'] = array(
    'name' => 'translate content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'translation',
  );

  // Exported permission: translate interface.
  $permissions['translate interface'] = array(
    'name' => 'translate interface',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'locale',
  );

  // Exported permission: translate user-defined strings.
  $permissions['translate user-defined strings'] = array(
    'name' => 'translate user-defined strings',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'i18n_string',
  );

  // Exported permission: unlock node feeds.
  $permissions['unlock node feeds'] = array(
    'name' => 'unlock node feeds',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'feeds',
  );

  // Exported permission: unlock node_export feeds.
  $permissions['unlock node_export feeds'] = array(
    'name' => 'unlock node_export feeds',
    'roles' => array(),
    'module' => 'feeds',
  );

  // Exported permission: unlock user feeds.
  $permissions['unlock user feeds'] = array(
    'name' => 'unlock user feeds',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'feeds',
  );

  // Exported permission: use PHP to import nodes.
  $permissions['use PHP to import nodes'] = array(
    'name' => 'use PHP to import nodes',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'node_export',
  );

  // Exported permission: use advanced search.
  $permissions['use advanced search'] = array(
    'name' => 'use advanced search',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'search',
  );

  // Exported permission: use file manager.
  $permissions['use file manager'] = array(
    'name' => 'use file manager',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'elfinder',
  );

  // Exported permission: use page manager.
  $permissions['use page manager'] = array(
    'name' => 'use page manager',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'page_manager',
  );

  // Exported permission: use panels caching features.
  $permissions['use panels caching features'] = array(
    'name' => 'use panels caching features',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: use panels dashboard.
  $permissions['use panels dashboard'] = array(
    'name' => 'use panels dashboard',
    'roles' => array(
      0 => 'administrator',
      1 => 'authenticated user',
      2 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: use panels in place editing.
  $permissions['use panels in place editing'] = array(
    'name' => 'use panels in place editing',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: use panels locks.
  $permissions['use panels locks'] = array(
    'name' => 'use panels locks',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: use text format filtered_html.
  $permissions['use text format filtered_html'] = array(
    'name' => 'use text format filtered_html',
    'roles' => array(
      0 => 'administrator',
      1 => 'anonymous user',
      2 => 'authenticated user',
    ),
    'module' => 'filter',
  );

  // Exported permission: use text format full_html.
  $permissions['use text format full_html'] = array(
    'name' => 'use text format full_html',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'filter',
  );

  // Exported permission: view analytics page.
  $permissions['view analytics page'] = array(
    'name' => 'view analytics page',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'quant',
  );

  // Exported permission: view own unpublished content.
  $permissions['view own unpublished content'] = array(
    'name' => 'view own unpublished content',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: view pane admin links.
  $permissions['view pane admin links'] = array(
    'name' => 'view pane admin links',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'panels',
  );

  // Exported permission: view revisions.
  $permissions['view revisions'] = array(
    'name' => 'view revisions',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'node',
  );

  // Exported permission: view the administration theme.
  $permissions['view the administration theme'] = array(
    'name' => 'view the administration theme',
    'roles' => array(
      0 => 'administrator',
      1 => 'editor',
    ),
    'module' => 'system',
  );

  return $permissions;
}
