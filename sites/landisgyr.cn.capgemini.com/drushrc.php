<?php 


$options['db_type'] = 'mysql';
$options['db_user'] = 'root';
$options['db_host'] = 'localhost';
$options['db_passwd'] = 'root770826';
$options['db_name'] = 'landisgyr';
$options['profile'] = 'standard';
$options['language'] = 'en';
$options['installed'] = true;
$options['aliases'] = array (
);
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.14',
      'description' => 'This platform is running Drupal 7.14',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => '/var/aegir/platforms/service/profiles/standard/standard.profile',
      'project' => 'drupal',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.14',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aaa_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/update/tests/aaa_update_test.module',
      'name' => 'aaa_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AAA Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'actions_loop_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/actions_loop_test.module',
      'name' => 'actions_loop_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions loop test',
        'description' => 'Support module for action loop testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'aggregator_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/aggregator/tests/aggregator_test.module',
      'name' => 'aggregator_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator module tests',
        'description' => 'Support module for aggregator related testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'ajax_forms_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/ajax_forms_test.module',
      'name' => 'ajax_forms_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX form test mock module',
        'description' => 'Test for AJAX form calls.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'ajax_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/ajax_test.module',
      'name' => 'ajax_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Test',
        'description' => 'Support module for AJAX framework tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'apachesolr' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/apachesolr/apachesolr.module',
      'name' => 'apachesolr',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7015',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr framework',
        'description' => 'Framework for searching with Solr',
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/settings',
        'files' => 
        array (
          0 => 'apachesolr.install',
          1 => 'apachesolr.module',
          2 => 'apachesolr.admin.inc',
          3 => 'apachesolr.index.inc',
          4 => 'apachesolr.interface.inc',
          5 => 'Drupal_Apache_Solr_Service.php',
          6 => 'Apache_Solr_Document.php',
          7 => 'Solr_Base_Query.php',
          8 => 'plugins/facetapi/adapter.inc',
          9 => 'plugins/facetapi/query_type_date.inc',
          10 => 'plugins/facetapi/query_type_term.inc',
          11 => 'plugins/facetapi/query_type_numeric_range.inc',
          12 => 'tests/Dummy_Solr.php',
          13 => 'tests/apachesolr_base.test',
          14 => 'tests/solr_index_and_search.test',
          15 => 'tests/solr_base_query.test',
          16 => 'tests/solr_base_subquery.test',
          17 => 'tests/solr_document.test',
        ),
        'version' => '7.x-1.0-rc3',
        'project' => 'apachesolr',
        'datestamp' => '1344627704',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.0-rc3',
    ),
    'apachesolr_access' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/apachesolr/apachesolr_access/apachesolr_access.module',
      'name' => 'apachesolr_access',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr Access',
        'description' => 'Integrates node access and other permissions with Apache Solr search',
        'dependencies' => 
        array (
          0 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'apachesolr_access.module',
          1 => 'tests/apachesolr_access.test',
        ),
        'version' => '7.x-1.0-rc3',
        'project' => 'apachesolr',
        'datestamp' => '1344627704',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.0-rc3',
    ),
    'apachesolr_attachments' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/apachesolr_attachments/apachesolr_attachments.module',
      'name' => 'apachesolr_attachments',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr search attachments',
        'description' => 'Search file attachments with Solr',
        'dependencies' => 
        array (
          0 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'apachesolr_attachments.admin.inc',
          1 => 'apachesolr_attachments.install',
          2 => 'apachesolr_attachments.module',
        ),
        'version' => '7.x-1.2',
        'project' => 'apachesolr_attachments',
        'datestamp' => '1341591675',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr_attachments',
      'version' => '7.x-1.2',
    ),
    'apachesolr_search' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/apachesolr/apachesolr_search.module',
      'name' => 'apachesolr_search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr search',
        'description' => 'Search with Solr',
        'dependencies' => 
        array (
          0 => 'search',
          1 => 'apachesolr',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'configure' => 'admin/config/search/apachesolr/search-pages',
        'files' => 
        array (
          0 => 'apachesolr_search.install',
          1 => 'apachesolr_search.module',
          2 => 'apachesolr_search.admin.inc',
          3 => 'apachesolr_search.pages.inc',
        ),
        'version' => '7.x-1.0-rc3',
        'project' => 'apachesolr',
        'datestamp' => '1344627704',
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.0-rc3',
    ),
    'apachesolr_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/apachesolr/tests/apachesolr_test/apachesolr_test.module',
      'name' => 'apachesolr_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Apache Solr helper module for tests',
        'description' => 'Support module for apachesolr module testing.',
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.x-1.0-rc3',
        'project' => 'apachesolr',
        'datestamp' => '1344627704',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'apachesolr',
      'version' => '7.x-1.0-rc3',
    ),
    'batch_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/batch_test.module',
      'name' => 'batch_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Batch API test',
        'description' => 'Support module for Batch API tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'bbb_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/update/tests/bbb_update_test.module',
      'name' => 'bbb_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BBB Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'block_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/block/tests/block_test.module',
      'name' => 'block_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test',
        'description' => 'Provides test blocks.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'ccc_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/update/tests/ccc_update_test.module',
      'name' => 'ccc_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCC Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'ckeditor' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ckeditor/ckeditor.module',
      'name' => 'ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CKEditor',
        'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/content/ckeditor',
        'files' => 
        array (
          0 => 'includes/ckeditor.user.inc',
        ),
        'version' => '7.x-1.9',
        'project' => 'ckeditor',
        'datestamp' => '1334745697',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ckeditor',
      'version' => '7.x-1.9',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'common_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/common_test.module',
      'name' => 'common_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test',
        'description' => 'Support module for Common tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'common_test.css',
          ),
          'print' => 
          array (
            0 => 'common_test.print.css',
          ),
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'common_test_cron_helper' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/common_test_cron_helper.module',
      'name' => 'common_test_cron_helper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test Cron Helper',
        'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'ctools_export_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/tests/ctools_export_test/ctools_export_test.module',
      'name' => 'ctools_export_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CTools export test',
        'description' => 'CTools export test module',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'hidden' => true,
        'files' => 
        array (
          0 => 'ctools_export.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'ctools_plugin_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/tests/ctools_plugin_test.module',
      'name' => 'ctools_plugin_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools plugins test',
        'description' => 'Provides hooks for testing ctools plugins.',
        'package' => 'Chaos tool suite',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'ctools.plugins.test',
          1 => 'object_cache.test',
          2 => 'css.test',
        ),
        'hidden' => true,
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'current_search' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/facetapi/contrib/current_search/current_search.module',
      'name' => 'current_search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Current Search Blocks',
        'description' => 'Provides an interface for creating blocks containing information about the current search.',
        'dependencies' => 
        array (
          0 => 'facetapi',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/current_search/item.inc',
          1 => 'plugins/current_search/item_active.inc',
          2 => 'plugins/current_search/item_group.inc',
          3 => 'plugins/current_search/item_text.inc',
          4 => 'tests/current_search.test',
        ),
        'configure' => 'admin/config/search/current_search',
        'version' => '7.x-1.1',
        'project' => 'facetapi',
        'datestamp' => '1343771560',
        'php' => '5.2.4',
      ),
      'project' => 'facetapi',
      'version' => '7.x-1.1',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.14',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'database_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/database_test.module',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Test',
        'description' => 'Support module for Database layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'date' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_api.test',
          1 => 'tests/date.test',
          2 => 'tests/date_field.test',
          3 => 'tests/date_validation.test',
          4 => 'tests/date_timezone.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_all_day' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_all_day/date_all_day.module',
      'name' => 'date_all_day',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date All Day',
        'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_api' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_sql.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_context' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
          1 => 'plugins/date_context_date_condition.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_migrate/date_migrate.module',
      'name' => 'date_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Migration',
        'description' => 'Provides support for importing into date fields with the Migrate module.',
        'core' => '7.x',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'migrate',
          1 => 'date',
        ),
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'date_migrate.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_repeat_field',
          3 => 'date_migrate',
          4 => 'features',
          5 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.6',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_popup' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_repeat' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_repeat.test',
          1 => 'tests/date_repeat_form.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_repeat_field/date_repeat_field.module',
      'name' => 'date_repeat_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat Field',
        'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
          2 => 'date_repeat',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date_repeat_field.css',
          ),
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_tools' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/tools',
        'files' => 
        array (
          0 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'date_views' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'includes/date_views_argument_handler.inc',
          1 => 'includes/date_views_argument_handler_simple.inc',
          2 => 'includes/date_views_filter_handler.inc',
          3 => 'includes/date_views_filter_handler_simple.inc',
          4 => 'includes/date_views.views_default.inc',
          5 => 'includes/date_views.views.inc',
          6 => 'includes/date_views_plugin_pager.inc',
        ),
        'version' => '7.x-2.6',
        'project' => 'date',
        'datestamp' => '1344850024',
      ),
      'project' => 'date',
      'version' => '7.x-2.6',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'drupalchat' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/drupalchat/drupalchat.module',
      'name' => 'drupalchat',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DrupalChat',
        'package' => 'DrupalChat',
        'description' => 'Allows users to communicate via instant chat messaging. Provides multiple AJAX implementations.',
        'core' => '7.x',
        'php' => '5.1',
        'files' => 
        array (
          0 => 'drupalchat-subpanel.tpl.php',
          1 => 'drupalchat.admin.inc',
          2 => 'drupalchat.install',
          3 => 'drupalchat.module',
          4 => 'drupalchat.tpl.php',
        ),
        'version' => '7.x-1.0-beta6',
        'project' => 'drupalchat',
        'datestamp' => '1344868027',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'drupalchat',
      'version' => '7.x-1.0-beta6',
    ),
    'drupalchat_nodejs' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/drupalchat/drupalchat_nodejs/drupalchat_nodejs.module',
      'name' => 'drupalchat_nodejs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DrupalChat Nodejs integration',
        'description' => 'Adds Node.js backend to DrupalChat',
        'package' => 'DrupalChat',
        'version' => '7.x-1.0-beta6',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'drupalchat_nodejs.module',
        ),
        'dependencies' => 
        array (
          0 => 'nodejs',
          1 => 'drupalchat',
        ),
        'project' => 'drupalchat',
        'datestamp' => '1344868027',
        'php' => '5.2.4',
      ),
      'project' => 'drupalchat',
      'version' => '7.x-1.0-beta6',
    ),
    'drupalchat_notifications' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/drupalchat/drupalchat_notifications/drupalchat_notifications.module',
      'name' => 'drupalchat_notifications',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DrupalChat Notifications',
        'package' => 'DrupalChat',
        'description' => 'An experimental module. DO NOT USE IT ON PRODUCTION SITES.',
        'core' => '7.x',
        'php' => '5.1',
        'dependencies' => 
        array (
          0 => 'drupalchat',
        ),
        'files' => 
        array (
          0 => 'drupalchat_notifications.install',
          1 => 'drupalchat_notifications.module',
        ),
        'version' => '7.x-1.0-beta6',
        'project' => 'drupalchat',
        'datestamp' => '1344868027',
      ),
      'project' => 'drupalchat',
      'version' => '7.x-1.0-beta6',
    ),
    'drupal_system_listing_compatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
      'name' => 'drupal_system_listing_compatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing compatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'drupal_system_listing_incompatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
      'name' => 'drupal_system_listing_incompatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing incompatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'elfinder' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/elfinder/elfinder.module',
      'name' => 'elfinder',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'elFinder',
        'description' => 'AJAX file manager with Wysiwyg API capable editors support.',
        'package' => 'User interface',
        'configure' => 'admin/config/elfinder',
        'core' => '7.x',
        'version' => '7.x-0.7',
        'project' => 'elfinder',
        'datestamp' => '1327272650',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'elfinder',
      'version' => '7.x-0.7',
    ),
    'elfinder_bueditor' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/elfinder/modules/elfinder_bueditor/elfinder_bueditor.module',
      'name' => 'elfinder_bueditor',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'elFinder BUEditor integration',
        'description' => 'Adding elFinder to BUEditor Insert Image dialog',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'bueditor',
          1 => 'elfinder',
        ),
        'version' => '7.x-0.7',
        'project' => 'elfinder',
        'datestamp' => '1327272650',
        'php' => '5.2.4',
      ),
      'project' => 'elfinder',
      'version' => '7.x-0.7',
    ),
    'elfinder_ffsel' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/elfinder/modules/elfinder_ffsel/elfinder_ffsel.module',
      'name' => 'elfinder_ffsel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'elFinder File Field Source',
        'description' => 'File Field Sources elFinder connector',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'filefield_sources',
          1 => 'elfinder',
        ),
        'version' => '7.x-0.7',
        'project' => 'elfinder',
        'datestamp' => '1327272650',
        'php' => '5.2.4',
      ),
      'project' => 'elfinder',
      'version' => '7.x-0.7',
    ),
    'entity_cache_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/entity_cache_test.module',
      'name' => 'entity_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test',
        'description' => 'Support module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_cache_test_dependency',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'entity_cache_test_dependency' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/entity_cache_test_dependency.module',
      'name' => 'entity_cache_test_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test dependency',
        'description' => 'Support dependency module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'entity_crud_hook_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/entity_crud_hook_test.module',
      'name' => 'entity_crud_hook_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD Hooks Test',
        'description' => 'Support module for CRUD hook tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'entity_query_access_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/entity_query_access_test.module',
      'name' => 'entity_query_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity query access test',
        'description' => 'Support module for checking entity query results.',
        'package' => 'Testing',
        'version' => '7.15',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1343839327',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.15',
    ),
    'error_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/error_test.module',
      'name' => 'error_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Error test',
        'description' => 'Support module for error and exception testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'facetapi' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/facetapi/facetapi.module',
      'name' => 'facetapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Facet API',
        'description' => 'An abstracted facet API that can be used by various search backends.',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Search Toolkit',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/facetapi/adapter.inc',
          1 => 'plugins/facetapi/dependency.inc',
          2 => 'plugins/facetapi/dependency_bundle.inc',
          3 => 'plugins/facetapi/dependency_role.inc',
          4 => 'plugins/facetapi/empty_behavior.inc',
          5 => 'plugins/facetapi/empty_behavior_text.inc',
          6 => 'plugins/facetapi/filter.inc',
          7 => 'plugins/facetapi/query_type.inc',
          8 => 'plugins/facetapi/url_processor.inc',
          9 => 'plugins/facetapi/url_processor_standard.inc',
          10 => 'plugins/facetapi/widget.inc',
          11 => 'plugins/facetapi/widget_links.inc',
          12 => 'tests/facetapi_test.plugins.inc',
          13 => 'tests/facetapi.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'facetapi',
        'datestamp' => '1343771560',
        'php' => '5.2.4',
      ),
      'project' => 'facetapi',
      'version' => '7.x-1.1',
    ),
    'facetapi_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/facetapi/tests/facetapi_test.module',
      'name' => 'facetapi_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Facet API Test',
        'description' => 'Provides a test adapter and plugins.',
        'dependencies' => 
        array (
          0 => 'facetapi',
        ),
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.x-1.1',
        'project' => 'facetapi',
        'datestamp' => '1343771560',
        'php' => '5.2.4',
      ),
      'project' => 'facetapi',
      'version' => '7.x-1.1',
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'features',
        'datestamp' => '1343240292',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'features',
      'version' => '7.x-1.0',
    ),
    'features_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/features/tests/features_test.module',
      'name' => 'features_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Features Tests',
        'description' => 'Test module for Features testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'php' => '5.2.0',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'image',
          2 => 'strongarm',
          3 => 'taxonomy',
          4 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:1',
          ),
          'field' => 
          array (
            0 => 'node-features_test-field_features_test',
          ),
          'filter' => 
          array (
            0 => 'features_test',
          ),
          'image' => 
          array (
            0 => 'features_test',
          ),
          'node' => 
          array (
            0 => 'features_test',
          ),
          'taxonomy' => 
          array (
            0 => 'taxonomy_features_test',
          ),
          'user_permission' => 
          array (
            0 => 'create features_test content',
          ),
          'views_view' => 
          array (
            0 => 'features_test',
          ),
        ),
        'hidden' => true,
        'version' => '7.x-1.0',
        'project' => 'features',
        'datestamp' => '1343240292',
      ),
      'project' => 'features',
      'version' => '7.x-1.0',
    ),
    'fe_block' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/features_extra/fe_block.module',
      'name' => 'fe_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE block',
        'description' => 'Build blocks and block settings as features.',
        'package' => 'Features extra',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1308442976',
        'php' => '5.2.4',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.x-dev',
    ),
    'fe_nodequeue' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/features_extra/fe_nodequeue.module',
      'name' => 'fe_nodequeue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE nodequeue',
        'description' => 'Build nodequeues as features.',
        'package' => 'Features extra',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodequeue',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1308442976',
        'php' => '5.2.4',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.x-dev',
    ),
    'fe_profile' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/features_extra/fe_profile.module',
      'name' => 'fe_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feature Extras Profle',
        'description' => 'Export profile field using features.',
        'package' => 'Ideup',
        'dependencies' => 
        array (
          0 => 'profile',
        ),
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1308442976',
        'php' => '5.2.4',
      ),
      'project' => 'features_extra',
      'version' => '7.x-1.x-dev',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'field_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/tests/field_test.module',
      'name' => 'field_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field API Test',
        'description' => 'Support module for the Field API tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'files' => 
        array (
          0 => 'field_test.entity.inc',
        ),
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'filefield_sources' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/filefield_sources/filefield_sources.module',
      'name' => 'filefield_sources',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File Field Sources',
        'description' => 'Extends File fields to allow referencing of existing files, remote files, and server files.',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'package' => 'Fields',
        'core' => '7.x',
        'version' => '7.x-1.4',
        'project' => 'filefield_sources',
        'datestamp' => '1304045215',
        'php' => '5.2.4',
      ),
      'project' => 'filefield_sources',
      'version' => '7.x-1.4',
    ),
    'file_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/file/tests/file_module_test.module',
      'name' => 'file_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Provides hooks for testing File module functionality.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'file_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/file_test.module',
      'name' => 'file_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Support module for file handling tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'filter_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/filter_test.module',
      'name' => 'filter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter test module',
        'description' => 'Tests filter hooks and functions.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'form_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/form_test.module',
      'name' => 'form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FormAPI Test',
        'description' => 'Support module for Form API tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'i18n' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n.module',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Internationalization',
        'description' => 'Extends Drupal support for multilingual features.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'variable',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n.install',
          1 => 'i18n.admin.inc',
          2 => 'i18n_object.inc',
          3 => 'i18n.test',
        ),
        'configure' => 'admin/config/regional/i18n',
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_block' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_block/i18n_block.module',
      'name' => 'i18n_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block languages',
        'description' => 'Enables language selector for blocks and optional block translation.',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_block.inc',
          1 => 'i18n_block.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_contact' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_contact/i18n_contact.module',
      'name' => 'i18n_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact translation',
        'description' => 'Makes contact categories and replies available for translation.',
        'dependencies' => 
        array (
          0 => 'contact',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_field' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_field/i18n_field.module',
      'name' => 'i18n_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field translation',
        'description' => 'Translate field properties',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_field.inc',
          1 => 'i18n_field.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_forum' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_forum/i18n_forum.module',
      'name' => 'i18n_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual forum',
        'description' => 'Enables multilingual forum, translates names and containers.',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'i18n_taxonomy',
          2 => 'i18n_node',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_forum.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_menu' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_menu/i18n_menu.module',
      'name' => 'i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Menu translation',
        'description' => 'Supports translatable custom menu items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'menu',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_menu.inc',
          1 => 'i18n_menu.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_node' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_node/i18n_node.module',
      'name' => 'i18n_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual content',
        'description' => 'Extended node options for multilingual content',
        'dependencies' => 
        array (
          0 => 'translation',
          1 => 'i18n',
          2 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/node',
        'files' => 
        array (
          0 => 'i18n_node.test',
          1 => 'i18n_node.variable.inc',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_path' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_path/i18n_path.module',
      'name' => 'i18n_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path translation',
        'description' => 'Define translations for generic paths',
        'dependencies' => 
        array (
          0 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_path.inc',
          1 => 'i18n_path.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_redirect' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_redirect/i18n_redirect.module',
      'name' => 'i18n_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation redirect',
        'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_select' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_select/i18n_select.module',
      'name' => 'i18n_select',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual select',
        'description' => 'API module for multilingual content selection',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/select',
        'files' => 
        array (
          0 => 'i18n_select.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_string' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_string/i18n_string.module',
      'name' => 'i18n_string',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'String translation',
        'description' => 'Provides support for translation of user defined strings.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_string.admin.inc',
          1 => 'i18n_string.inc',
          2 => 'i18n_string.test',
        ),
        'configure' => 'admin/config/regional/i18n/strings',
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_sync' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_sync/i18n_sync.module',
      'name' => 'i18n_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Synchronize translations',
        'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_sync.module',
          1 => 'i18n_sync.install',
          2 => 'i18n_sync.module.inc',
          3 => 'i18n_sync.node.inc',
          4 => 'i18n_sync.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_taxonomy/i18n_taxonomy.module',
      'name' => 'i18n_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '5',
      'info' => 
      array (
        'name' => 'Taxonomy translation',
        'description' => 'Enables multilingual taxonomy.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'i18n_string',
          2 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_taxonomy.inc',
          1 => 'i18n_taxonomy.pages.inc',
          2 => 'i18n_taxonomy.admin.inc',
          3 => 'i18n_taxonomy.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/tests/i18n_test.module',
      'name' => 'i18n_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Internationalization tests',
        'description' => 'Helper module for testing i18n (do not enable manually)',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'translation',
          2 => 'i18n',
        ),
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_translation' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_translation/i18n_translation.module',
      'name' => 'i18n_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation sets',
        'description' => 'Simple translation sets API for generic objects',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_translation.inc',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'i18n_variable' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/i18n/i18n_variable/i18n_variable.module',
      'name' => 'i18n_variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable translation',
        'description' => 'Multilingual variables that switch language depending on page language.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'variable_store (7.x-2.x)',
          2 => 'variable_realm (7.x-2.x)',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/variable',
        'files' => 
        array (
          0 => 'i18n_variable.class.inc',
          1 => 'i18n_variable.test',
        ),
        'version' => '7.x-1.7',
        'project' => 'i18n',
        'datestamp' => '1341236501',
        'php' => '5.2.4',
      ),
      'project' => 'i18n',
      'version' => '7.x-1.7',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'image_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/image/tests/image_module_test.module',
      'name' => 'image_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Provides hook implementations for testing Image module functionality.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_module_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'image_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/image_test.module',
      'name' => 'image_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Support module for image toolkit tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Updates jQuery to jQuery 1.5.2 and jQuery UI 1.8.11.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_update.module',
          1 => 'jquery_update.install',
        ),
        'configure' => 'admin/config/development/performance',
        'version' => '7.x-2.2',
        'project' => 'jquery_update',
        'datestamp' => '1301920269',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'jquery_update',
      'version' => '7.x-2.2',
    ),
    'languageicons' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/languageicons/languageicons.module',
      'name' => 'languageicons',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Language icons',
        'description' => 'Adds icons to language links.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'languageicons.module',
          1 => 'languageicons.admin.inc',
          2 => 'languageicons.install',
        ),
        'version' => '7.x-1.0',
        'project' => 'languageicons',
        'datestamp' => '1331734546',
        'php' => '5.2.4',
      ),
      'project' => 'languageicons',
      'version' => '7.x-1.0',
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version dependent and shared usage of external libraries.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/libraries.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'libraries',
        'datestamp' => '1343561873',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-2.0',
    ),
    'libraries_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/libraries/tests/libraries_test.module',
      'name' => 'libraries_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries test module',
        'description' => 'Tests library detection and loading.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'libraries',
        ),
        'hidden' => true,
        'version' => '7.x-2.0',
        'project' => 'libraries',
        'datestamp' => '1343561873',
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-2.0',
    ),
    'link' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'link.module',
          1 => 'link.install',
          2 => 'tests/link.test',
          3 => 'tests/link.attribute.test',
          4 => 'tests/link.crud.test',
          5 => 'tests/link.crud_browser.test',
          6 => 'tests/link.token.test',
          7 => 'tests/link.validate.test',
          8 => 'views/link_views_handler_argument_target.inc',
          9 => 'views/link_views_handler_filter_protocol.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'link',
        'datestamp' => '1319392535',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'link',
      'version' => '7.x-1.0',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'list_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/modules/list/tests/list_test.module',
      'name' => 'list_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List test',
        'description' => 'Support module for the List module tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'locale_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/locale/tests/locale_test.module',
      'name' => 'locale_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale Test',
        'description' => 'Support module for the locale layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'menu_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/menu_test.module',
      'name' => 'menu_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook menu tests',
        'description' => 'Support module for menu hook testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'module_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/module_test.module',
      'name' => 'module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module test',
        'description' => 'Support module for module system testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7013',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'nodejs' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs.module',
      'name' => 'nodejs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs integration',
        'description' => 'Adds Node.js support to Drupal',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'nodejs.module',
        ),
        'configure' => 'admin/config/nodejs',
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'nodejs_actions' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs_actions/nodejs_actions.module',
      'name' => 'nodejs_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs Actions',
        'description' => 'Provides actions that dispatch realtime user notifications via node.js.',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodejs',
          1 => 'trigger',
        ),
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'nodejs_ajax' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs_ajax/nodejs_ajax.module',
      'name' => 'nodejs_ajax',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs/AJAX framework integration',
        'description' => 'Adds support for the Drupal AJAX framework to the Nodejs module',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'nodejs_buddylist' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs_buddylist/nodejs_buddylist.module',
      'name' => 'nodejs_buddylist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs Buddylist',
        'description' => 'Allows for dynamic buddy list and user blocks',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodejs',
          1 => 'flag_friend',
        ),
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'nodejs_config' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs_config/nodejs_config.module',
      'name' => 'nodejs_config',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs Config',
        'description' => 'Helps to configure the nodejs module.',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodejs',
        ),
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'nodejs_notify' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs_notify/nodejs_notify.module',
      'name' => 'nodejs_notify',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs Notifications',
        'description' => 'Adds a client to pages for displaying realtime notification from node.js.',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodejs',
        ),
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'nodejs_subscribe' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs_subscribe/nodejs_subscribe.module',
      'name' => 'nodejs_subscribe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs subscribe',
        'description' => 'Adds realtime notifications for subscribed content.',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodejs',
        ),
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'nodejs_watchdog' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/nodejs/nodejs_watchdog/nodejs_watchdog.module',
      'name' => 'nodejs_watchdog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nodejs Watchdog',
        'description' => 'Adds watchdog messages to the dblog page in realtime.',
        'package' => 'Nodejs',
        'version' => '7.x-1.0',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'nodejs',
          1 => 'nodejs_ajax',
          2 => 'dblog',
        ),
        'project' => 'nodejs',
        'datestamp' => '1344654738',
        'php' => '5.2.4',
      ),
      'project' => 'nodejs',
      'version' => '7.x-1.0',
    ),
    'node_access_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/node/tests/node_access_test.module',
      'name' => 'node_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module access tests',
        'description' => 'Support module for node permission testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'node_export' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/node_export/node_export.module',
      'name' => 'node_export',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export',
        'description' => 'Allows users to export content and then import into another Drupal installation.',
        'dependencies' => 
        array (
          0 => 'uuid',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'configure' => 'admin/config/content/node_export',
        'files' => 
        array (
          0 => 'views/views_handler_field_node_link_export.inc',
        ),
        'version' => '7.x-3.0',
        'project' => 'node_export',
        'datestamp' => '1345435979',
        'php' => '5.2.4',
      ),
      'project' => 'node_export',
      'version' => '7.x-3.0',
    ),
    'node_export_dependency' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/node_export/modules/node_export_dependency/node_export_dependency.module',
      'name' => 'node_export_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export dependency (experimental)',
        'description' => 'Helps maintain relationships to dependent entities.  Intended to make Node export relation obsolete.',
        'dependencies' => 
        array (
          0 => 'node_export',
          1 => 'uuid',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'version' => '7.x-3.0',
        'project' => 'node_export',
        'datestamp' => '1345435979',
        'php' => '5.2.4',
      ),
      'project' => 'node_export',
      'version' => '7.x-3.0',
    ),
    'node_export_features' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/node_export/modules/node_export_features/node_export_features.module',
      'name' => 'node_export_features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export features',
        'description' => 'Adds Features support to Node export, so you can put your exports into Features modules.',
        'dependencies' => 
        array (
          0 => 'node_export',
          1 => 'uuid',
          2 => 'features',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'version' => '7.x-3.0',
        'project' => 'node_export',
        'datestamp' => '1345435979',
        'php' => '5.2.4',
      ),
      'project' => 'node_export',
      'version' => '7.x-3.0',
    ),
    'node_export_feeds' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/node_export/modules/node_export_feeds/node_export_feeds.module',
      'name' => 'node_export_feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export feeds',
        'description' => 'Node export feeds importer.  This is a more advanced importer than the one built into node export, but tricky to use.',
        'core' => '7.x',
        'package' => 'Node export',
        'dependencies' => 
        array (
          0 => 'feeds',
          1 => 'node_export',
        ),
        'files' => 
        array (
          0 => 'FeedsNodeExportParser.inc',
          1 => 'FeedsNodeExportProcessor.inc',
        ),
        'version' => '7.x-3.0',
        'project' => 'node_export',
        'datestamp' => '1345435979',
        'php' => '5.2.4',
      ),
      'project' => 'node_export',
      'version' => '7.x-3.0',
    ),
    'node_export_relation' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/node_export/modules/node_export_relation/node_export_relation.module',
      'name' => 'node_export_relation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node export relation (deprecated)',
        'description' => 'Helps maintain relationships.  Supports node references, taxonomy, and organic groups.',
        'dependencies' => 
        array (
          0 => 'node_export',
          1 => 'uuid',
        ),
        'core' => '7.x',
        'package' => 'Node export',
        'version' => '7.x-3.0',
        'project' => 'node_export',
        'datestamp' => '1345435979',
        'php' => '5.2.4',
      ),
      'project' => 'node_export',
      'version' => '7.x-3.0',
    ),
    'node_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/node/tests/node_test.module',
      'name' => 'node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module tests',
        'description' => 'Support module for node related testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'node_test_exception' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/node/tests/node_test_exception.module',
      'name' => 'node_test_exception',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module exception tests',
        'description' => 'Support module for node related exception testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.14',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'openid_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/openid/tests/openid_test.module',
      'name' => 'openid_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID dummy provider',
        'description' => 'OpenID provider used for testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '7.x',
        'package' => 'Panels',
        'configure' => 'admin/structure/panels',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'panels.module',
          1 => 'includes/common.inc',
          2 => 'includes/legacy.inc',
          3 => 'includes/plugins.inc',
          4 => 'plugins/views/panels_views_plugin_row_fields.inc',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/panels',
        'files' => 
        array (
          0 => 'panels_ipe.module',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/export_ui/panels_mini_ui.class.php',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '11',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'configure' => 'admin/structure/panels',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_node.module',
        ),
        'version' => '7.x-3.3',
        'project' => 'panels',
        'datestamp' => '1345319572',
        'php' => '5.2.4',
      ),
      'project' => 'panels',
      'version' => '7.x-3.3',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'path_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/path_test.module',
      'name' => 'path_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook path tests',
        'description' => 'Support module for path hook testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile.test',
        ),
        'configure' => 'admin/config/people/profile',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'rdf_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/rdf/tests/rdf_test.module',
      'name' => 'rdf_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF module tests',
        'description' => 'Support module for RDF module testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'requirements1_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/requirements1_test.module',
      'name' => 'requirements1_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 1 Test',
        'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'requirements2_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/requirements2_test.module',
      'name' => 'requirements2_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 2 Test',
        'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
        'dependencies' => 
        array (
          0 => 'requirements1_test',
          1 => 'comment',
        ),
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'search_embedded_form' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/search/tests/search_embedded_form.module',
      'name' => 'search_embedded_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search embedded form',
        'description' => 'Support module for search module testing of embedded forms.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'search_extra_type' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/search/tests/search_extra_type.module',
      'name' => 'search_extra_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test search type',
        'description' => 'Support module for search module testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'session_api' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/session_api/session_api.module',
      'name' => 'session_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session API',
        'description' => 'Provides an interface for storing session information.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'session_api.module',
          1 => 'session_api.admin.inc',
          2 => 'session_api.install',
          3 => 'session_api.test',
        ),
        'configure' => 'admin/config/development/session-api',
        'version' => '7.x-1.0-beta3',
        'project' => 'session_api',
        'datestamp' => '1331329247',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'session_api',
      'version' => '7.x-1.0-beta3',
    ),
    'session_api_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/session_api/tests/session_api_test.module',
      'name' => 'session_api_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session API test',
        'description' => 'Helper module for Session API testing.',
        'package' => 'Testing',
        'version' => '7.x-1.0-beta3',
        'dependencies' => 
        array (
          0 => 'session_api',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'session_api_test.module',
        ),
        'hidden' => true,
        'project' => 'session_api',
        'datestamp' => '1331329247',
        'php' => '5.2.4',
      ),
      'project' => 'session_api',
      'version' => '7.x-1.0-beta3',
    ),
    'session_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/session_test.module',
      'name' => 'session_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session test',
        'description' => 'Support module for session data testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'shadowbox' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/shadowbox/shadowbox.module',
      'name' => 'shadowbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shadowbox',
        'description' => 'Allows content to be displayed in a JavaScript modal media viewer application.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shadowbox.module',
          1 => 'shadowbox.admin.inc',
          2 => 'shadowbox.install',
        ),
        'configure' => 'admin/config/media/shadowbox',
        'version' => '7.x-3.0-beta8',
        'project' => 'shadowbox',
        'datestamp' => '1325619345',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'shadowbox',
      'version' => '7.x-3.0-beta8',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'simplesamlphp_auth' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/simplesamlphp_auth/simplesamlphp_auth.module',
      'name' => 'simplesamlphp_auth',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'simpleSAMLphp authentication',
        'description' => 'Allows users to authenticate to a remote SAML identity provider (IdP) via a locally configured SimpleSAMLphp service point (SP).',
        'php' => '5.1',
        'core' => '7.x',
        'configure' => 'admin/config/people/simplesamlphp_auth',
        'version' => '7.x-1.3',
        'project' => 'simplesamlphp_auth',
        'datestamp' => '1339444267',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'simplesamlphp_auth',
      'version' => '7.x-1.3',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/pager.test',
          22 => 'tests/password.test',
          23 => 'tests/path.test',
          24 => 'tests/registry.test',
          25 => 'tests/schema.test',
          26 => 'tests/session.test',
          27 => 'tests/tablesort.test',
          28 => 'tests/theme.test',
          29 => 'tests/unicode.test',
          30 => 'tests/update.test',
          31 => 'tests/xmlrpc.test',
          32 => 'tests/upgrade/upgrade.test',
          33 => 'tests/upgrade/upgrade.comment.test',
          34 => 'tests/upgrade/update.field.test',
          35 => 'tests/upgrade/upgrade.filter.test',
          36 => 'tests/upgrade/upgrade.forum.test',
          37 => 'tests/upgrade/upgrade.locale.test',
          38 => 'tests/upgrade/upgrade.menu.test',
          39 => 'tests/upgrade/upgrade.node.test',
          40 => 'tests/upgrade/upgrade.taxonomy.test',
          41 => 'tests/upgrade/upgrade.trigger.test',
          42 => 'tests/upgrade/upgrade.translatable.test',
          43 => 'tests/upgrade/update.trigger.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/update.user.test',
          46 => 'tests/upgrade/upgrade.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'standard' => 
    array (
      'filename' => '/var/aegir/platforms/service/profiles/standard/standard.profile',
      'name' => 'standard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7073',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/system_dependencies_test.module',
      'name' => 'system_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System dependency test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => '_missing_dependency',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_core_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
      'name' => 'system_incompatible_core_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_core_version_test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_core_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/system_incompatible_core_version_test.module',
      'name' => 'system_incompatible_core_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '5.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_module_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
      'name' => 'system_incompatible_module_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_module_version_test (>2.0)',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_module_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/system_incompatible_module_version_test.module',
      'name' => 'system_incompatible_module_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/system_test.module',
      'name' => 'system_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System test',
        'description' => 'Support module for system testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'taxonomy_manager' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/taxonomy_manager/taxonomy_manager.module',
      'name' => 'taxonomy_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Manager',
        'description' => 'Tool for administrating taxonomy terms.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'taxonomy_manager.admin.inc',
        ),
        'package' => 'Taxonomy',
        'version' => '7.x-1.0-beta3',
        'project' => 'taxonomy_manager',
        'datestamp' => '1340208114',
        'php' => '5.2.4',
      ),
      'project' => 'taxonomy_manager',
      'version' => '7.x-1.0-beta3',
    ),
    'taxonomy_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/taxonomy_test.module',
      'name' => 'taxonomy_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy test module',
        'description' => '"Tests functions and hooks not used in core".',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'theme_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/theme_test.module',
      'name' => 'theme_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme test',
        'description' => 'Support module for theme system testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'translation_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/translation/tests/translation_test.module',
      'name' => 'translation_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Translation Test',
        'description' => 'Support module for the content translation tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'trigger_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/trigger/tests/trigger_test.module',
      'name' => 'trigger_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger Test',
        'description' => 'Support module for Trigger tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.14',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_script_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/update_script_test.module',
      'name' => 'update_script_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update script test',
        'description' => 'Support module for update script testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/update/tests/update_test.module',
      'name' => 'update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test_1' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/update_test_1.module',
      'name' => 'update_test_1',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test_2' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/update_test_2.module',
      'name' => 'update_test_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test_3' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/update_test_3.module',
      'name' => 'update_test_3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'url_alter_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/url_alter_test.module',
      'name' => 'url_alter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Url_alter tests',
        'description' => 'A support modules for url_alter hook testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'user_form_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/user/tests/user_form_test.module',
      'name' => 'user_form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User module form tests',
        'description' => 'Support module for user form testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'uuid' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/uuid/uuid.module',
      'name' => 'uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Universally Unique ID',
        'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
        'core' => '7.x',
        'package' => 'UUID',
        'configure' => 'admin/config/system/uuid',
        'files' => 
        array (
          0 => 'uuid.test',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'uuid',
        'datestamp' => '1328017553',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'uuid',
      'version' => '7.x-1.0-alpha3',
    ),
    'uuid_services' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/uuid/uuid_services/uuid_services.module',
      'name' => 'uuid_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Services',
        'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
        'core' => '7.x',
        'package' => 'Services - resources',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'uuid',
          2 => 'entity',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'uuid',
        'datestamp' => '1328017553',
        'php' => '5.2.4',
      ),
      'project' => 'uuid',
      'version' => '7.x-1.0-alpha3',
    ),
    'uuid_services_example' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/uuid/uuid_services_example/uuid_services_example.module',
      'name' => 'uuid_services_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rest_server',
          1 => 'services',
          2 => 'uuid',
          3 => 'uuid_services',
        ),
        'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'services:services:3',
          ),
          'services_endpoint' => 
          array (
            0 => 'uuid_services_example',
          ),
        ),
        'name' => 'UUID Services Example',
        'package' => 'Features',
        'php' => '5.2.4',
        'version' => '7.x-1.0-alpha3',
        'project' => 'uuid',
        'datestamp' => '1328017553',
      ),
      'project' => 'uuid',
      'version' => '7.x-1.0-alpha3',
    ),
    'variable' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/variable/variable.module',
      'name' => 'variable',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable',
        'description' => 'Variable Information and basic variable API',
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/forum.variable.inc',
          1 => 'includes/locale.variable.inc',
          2 => 'includes/menu.variable.inc',
          3 => 'includes/node.variable.inc',
          4 => 'includes/system.variable.inc',
          5 => 'includes/taxonomy.variable.inc',
          6 => 'includes/translation.variable.inc',
          7 => 'includes/user.variable.inc',
          8 => 'variable.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'variable',
        'datestamp' => '1341236242',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.1',
    ),
    'variable_admin' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/variable/variable_admin/variable_admin.module',
      'name' => 'variable_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable admin',
        'description' => 'Variable Administration UI',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.1',
        'project' => 'variable',
        'datestamp' => '1341236242',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.1',
    ),
    'variable_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/variable/variable_advanced/variable_advanced.module',
      'name' => 'variable_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable advanced',
        'description' => 'Provides access to advanced low level variables. By using this you will be able to break your site badly.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.1',
        'project' => 'variable',
        'datestamp' => '1341236242',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.1',
    ),
    'variable_example' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/variable/variable_example/variable_example.module',
      'name' => 'variable_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable example',
        'description' => 'An example module showing how to use the Variable API and providing some variables.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'variable_store',
        ),
        'package' => 'Example modules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_example.variable.inc',
        ),
        'version' => '7.x-2.1',
        'project' => 'variable',
        'datestamp' => '1341236242',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.1',
    ),
    'variable_realm' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/variable/variable_realm/variable_realm.module',
      'name' => 'variable_realm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable realm',
        'description' => 'API to use variable realms from different modules',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.1',
        'files' => 
        array (
          0 => 'variable_realm.class.inc',
          1 => 'variable_realm_union.class.inc',
        ),
        'project' => 'variable',
        'datestamp' => '1341236242',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.1',
    ),
    'variable_store' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/variable/variable_store/variable_store.module',
      'name' => 'variable_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable store',
        'description' => 'Database storage for variable realms. This is an API module.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.1',
        'files' => 
        array (
          0 => 'variable_store.class.inc',
          1 => 'variable_store.test',
        ),
        'project' => 'variable',
        'datestamp' => '1341236242',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.1',
    ),
    'variable_views' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/variable/variable_views/variable_views.module',
      'name' => 'variable_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable views',
        'description' => 'Provides views integration for variable, included a default variable argument.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'views',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views_plugin_argument_default_variable.inc',
          1 => 'includes/views_handler_field_variable_title.inc',
          2 => 'includes/views_handler_field_variable_value.inc',
        ),
        'version' => '7.x-2.1',
        'project' => 'variable',
        'datestamp' => '1341236242',
        'php' => '5.2.4',
      ),
      'project' => 'variable',
      'version' => '7.x-2.1',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_result.inc',
          2 => 'handlers/views_handler_area_text.inc',
          3 => 'handlers/views_handler_area_text_custom.inc',
          4 => 'handlers/views_handler_area_view.inc',
          5 => 'handlers/views_handler_argument.inc',
          6 => 'handlers/views_handler_argument_date.inc',
          7 => 'handlers/views_handler_argument_formula.inc',
          8 => 'handlers/views_handler_argument_many_to_one.inc',
          9 => 'handlers/views_handler_argument_null.inc',
          10 => 'handlers/views_handler_argument_numeric.inc',
          11 => 'handlers/views_handler_argument_string.inc',
          12 => 'handlers/views_handler_argument_group_by_numeric.inc',
          13 => 'handlers/views_handler_field.inc',
          14 => 'handlers/views_handler_field_counter.inc',
          15 => 'handlers/views_handler_field_boolean.inc',
          16 => 'handlers/views_handler_field_contextual_links.inc',
          17 => 'handlers/views_handler_field_custom.inc',
          18 => 'handlers/views_handler_field_date.inc',
          19 => 'handlers/views_handler_field_entity.inc',
          20 => 'handlers/views_handler_field_markup.inc',
          21 => 'handlers/views_handler_field_math.inc',
          22 => 'handlers/views_handler_field_numeric.inc',
          23 => 'handlers/views_handler_field_prerender_list.inc',
          24 => 'handlers/views_handler_field_time_interval.inc',
          25 => 'handlers/views_handler_field_serialized.inc',
          26 => 'handlers/views_handler_field_machine_name.inc',
          27 => 'handlers/views_handler_field_url.inc',
          28 => 'handlers/views_handler_filter.inc',
          29 => 'handlers/views_handler_filter_boolean_operator.inc',
          30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          31 => 'handlers/views_handler_filter_combine.inc',
          32 => 'handlers/views_handler_filter_date.inc',
          33 => 'handlers/views_handler_filter_equality.inc',
          34 => 'handlers/views_handler_filter_entity_bundle.inc',
          35 => 'handlers/views_handler_filter_group_by_numeric.inc',
          36 => 'handlers/views_handler_filter_in_operator.inc',
          37 => 'handlers/views_handler_filter_many_to_one.inc',
          38 => 'handlers/views_handler_filter_numeric.inc',
          39 => 'handlers/views_handler_filter_string.inc',
          40 => 'handlers/views_handler_relationship.inc',
          41 => 'handlers/views_handler_relationship_groupwise_max.inc',
          42 => 'handlers/views_handler_sort.inc',
          43 => 'handlers/views_handler_sort_date.inc',
          44 => 'handlers/views_handler_sort_formula.inc',
          45 => 'handlers/views_handler_sort_group_by_numeric.inc',
          46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          47 => 'handlers/views_handler_sort_random.inc',
          48 => 'includes/base.inc',
          49 => 'includes/handlers.inc',
          50 => 'includes/plugins.inc',
          51 => 'includes/view.inc',
          52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          61 => 'modules/book/views_plugin_argument_default_book_root.inc',
          62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          63 => 'modules/comment/views_handler_field_comment.inc',
          64 => 'modules/comment/views_handler_field_comment_depth.inc',
          65 => 'modules/comment/views_handler_field_comment_link.inc',
          66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          70 => 'modules/comment/views_handler_field_comment_node_link.inc',
          71 => 'modules/comment/views_handler_field_comment_username.inc',
          72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          74 => 'modules/comment/views_handler_field_node_comment.inc',
          75 => 'modules/comment/views_handler_field_node_new_comments.inc',
          76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          79 => 'modules/comment/views_handler_filter_node_comment.inc',
          80 => 'modules/comment/views_handler_sort_comment_thread.inc',
          81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          83 => 'modules/comment/views_plugin_row_comment_rss.inc',
          84 => 'modules/comment/views_plugin_row_comment_view.inc',
          85 => 'modules/contact/views_handler_field_contact_link.inc',
          86 => 'modules/field/views_handler_field_field.inc',
          87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          88 => 'modules/field/views_handler_argument_field_list.inc',
          89 => 'modules/field/views_handler_argument_field_list_string.inc',
          90 => 'modules/field/views_handler_filter_field_list.inc',
          91 => 'modules/filter/views_handler_field_filter_format_name.inc',
          92 => 'modules/locale/views_handler_field_node_language.inc',
          93 => 'modules/locale/views_handler_filter_node_language.inc',
          94 => 'modules/locale/views_handler_argument_locale_group.inc',
          95 => 'modules/locale/views_handler_argument_locale_language.inc',
          96 => 'modules/locale/views_handler_field_locale_group.inc',
          97 => 'modules/locale/views_handler_field_locale_language.inc',
          98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          99 => 'modules/locale/views_handler_filter_locale_group.inc',
          100 => 'modules/locale/views_handler_filter_locale_language.inc',
          101 => 'modules/locale/views_handler_filter_locale_version.inc',
          102 => 'modules/node/views_handler_argument_dates_various.inc',
          103 => 'modules/node/views_handler_argument_node_language.inc',
          104 => 'modules/node/views_handler_argument_node_nid.inc',
          105 => 'modules/node/views_handler_argument_node_type.inc',
          106 => 'modules/node/views_handler_argument_node_vid.inc',
          107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          109 => 'modules/node/views_handler_field_node.inc',
          110 => 'modules/node/views_handler_field_node_link.inc',
          111 => 'modules/node/views_handler_field_node_link_delete.inc',
          112 => 'modules/node/views_handler_field_node_link_edit.inc',
          113 => 'modules/node/views_handler_field_node_revision.inc',
          114 => 'modules/node/views_handler_field_node_revision_link.inc',
          115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          117 => 'modules/node/views_handler_field_node_path.inc',
          118 => 'modules/node/views_handler_field_node_type.inc',
          119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          120 => 'modules/node/views_handler_filter_node_access.inc',
          121 => 'modules/node/views_handler_filter_node_status.inc',
          122 => 'modules/node/views_handler_filter_node_type.inc',
          123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          124 => 'modules/node/views_plugin_argument_default_node.inc',
          125 => 'modules/node/views_plugin_argument_validate_node.inc',
          126 => 'modules/node/views_plugin_row_node_rss.inc',
          127 => 'modules/node/views_plugin_row_node_view.inc',
          128 => 'modules/profile/views_handler_field_profile_date.inc',
          129 => 'modules/profile/views_handler_field_profile_list.inc',
          130 => 'modules/profile/views_handler_filter_profile_selection.inc',
          131 => 'modules/search/views_handler_argument_search.inc',
          132 => 'modules/search/views_handler_field_search_score.inc',
          133 => 'modules/search/views_handler_filter_search.inc',
          134 => 'modules/search/views_handler_sort_search_score.inc',
          135 => 'modules/search/views_plugin_row_search_view.inc',
          136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          137 => 'modules/system/views_handler_argument_file_fid.inc',
          138 => 'modules/system/views_handler_field_file.inc',
          139 => 'modules/system/views_handler_field_file_extension.inc',
          140 => 'modules/system/views_handler_field_file_filemime.inc',
          141 => 'modules/system/views_handler_field_file_uri.inc',
          142 => 'modules/system/views_handler_field_file_status.inc',
          143 => 'modules/system/views_handler_filter_file_status.inc',
          144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          160 => 'modules/system/views_handler_filter_system_type.inc',
          161 => 'modules/translation/views_handler_argument_node_tnid.inc',
          162 => 'modules/translation/views_handler_field_node_link_translate.inc',
          163 => 'modules/translation/views_handler_field_node_translation_link.inc',
          164 => 'modules/translation/views_handler_filter_node_tnid.inc',
          165 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          166 => 'modules/translation/views_handler_relationship_translation.inc',
          167 => 'modules/user/views_handler_argument_user_uid.inc',
          168 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          169 => 'modules/user/views_handler_field_user.inc',
          170 => 'modules/user/views_handler_field_user_language.inc',
          171 => 'modules/user/views_handler_field_user_link.inc',
          172 => 'modules/user/views_handler_field_user_link_cancel.inc',
          173 => 'modules/user/views_handler_field_user_link_edit.inc',
          174 => 'modules/user/views_handler_field_user_mail.inc',
          175 => 'modules/user/views_handler_field_user_name.inc',
          176 => 'modules/user/views_handler_field_user_permissions.inc',
          177 => 'modules/user/views_handler_field_user_picture.inc',
          178 => 'modules/user/views_handler_field_user_roles.inc',
          179 => 'modules/user/views_handler_filter_user_current.inc',
          180 => 'modules/user/views_handler_filter_user_name.inc',
          181 => 'modules/user/views_handler_filter_user_permissions.inc',
          182 => 'modules/user/views_handler_filter_user_roles.inc',
          183 => 'modules/user/views_plugin_argument_default_current_user.inc',
          184 => 'modules/user/views_plugin_argument_default_user.inc',
          185 => 'modules/user/views_plugin_argument_validate_user.inc',
          186 => 'modules/user/views_plugin_row_user_view.inc',
          187 => 'plugins/views_plugin_access.inc',
          188 => 'plugins/views_plugin_access_none.inc',
          189 => 'plugins/views_plugin_access_perm.inc',
          190 => 'plugins/views_plugin_access_role.inc',
          191 => 'plugins/views_plugin_argument_default.inc',
          192 => 'plugins/views_plugin_argument_default_php.inc',
          193 => 'plugins/views_plugin_argument_default_fixed.inc',
          194 => 'plugins/views_plugin_argument_default_raw.inc',
          195 => 'plugins/views_plugin_argument_validate.inc',
          196 => 'plugins/views_plugin_argument_validate_numeric.inc',
          197 => 'plugins/views_plugin_argument_validate_php.inc',
          198 => 'plugins/views_plugin_cache.inc',
          199 => 'plugins/views_plugin_cache_none.inc',
          200 => 'plugins/views_plugin_cache_time.inc',
          201 => 'plugins/views_plugin_display.inc',
          202 => 'plugins/views_plugin_display_attachment.inc',
          203 => 'plugins/views_plugin_display_block.inc',
          204 => 'plugins/views_plugin_display_default.inc',
          205 => 'plugins/views_plugin_display_embed.inc',
          206 => 'plugins/views_plugin_display_extender.inc',
          207 => 'plugins/views_plugin_display_feed.inc',
          208 => 'plugins/views_plugin_display_page.inc',
          209 => 'plugins/views_plugin_exposed_form_basic.inc',
          210 => 'plugins/views_plugin_exposed_form.inc',
          211 => 'plugins/views_plugin_exposed_form_input_required.inc',
          212 => 'plugins/views_plugin_localization_core.inc',
          213 => 'plugins/views_plugin_localization.inc',
          214 => 'plugins/views_plugin_localization_none.inc',
          215 => 'plugins/views_plugin_pager.inc',
          216 => 'plugins/views_plugin_pager_full.inc',
          217 => 'plugins/views_plugin_pager_mini.inc',
          218 => 'plugins/views_plugin_pager_none.inc',
          219 => 'plugins/views_plugin_pager_some.inc',
          220 => 'plugins/views_plugin_query.inc',
          221 => 'plugins/views_plugin_query_default.inc',
          222 => 'plugins/views_plugin_row.inc',
          223 => 'plugins/views_plugin_row_fields.inc',
          224 => 'plugins/views_plugin_row_rss_fields.inc',
          225 => 'plugins/views_plugin_style.inc',
          226 => 'plugins/views_plugin_style_default.inc',
          227 => 'plugins/views_plugin_style_grid.inc',
          228 => 'plugins/views_plugin_style_list.inc',
          229 => 'plugins/views_plugin_style_jump_menu.inc',
          230 => 'plugins/views_plugin_style_rss.inc',
          231 => 'plugins/views_plugin_style_summary.inc',
          232 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          233 => 'plugins/views_plugin_style_summary_unformatted.inc',
          234 => 'plugins/views_plugin_style_table.inc',
          235 => 'tests/handlers/views_handler_area_text.test',
          236 => 'tests/handlers/views_handler_argument_null.test',
          237 => 'tests/handlers/views_handler_argument_string.test',
          238 => 'tests/handlers/views_handler_field.test',
          239 => 'tests/handlers/views_handler_field_boolean.test',
          240 => 'tests/handlers/views_handler_field_custom.test',
          241 => 'tests/handlers/views_handler_field_counter.test',
          242 => 'tests/handlers/views_handler_field_date.test',
          243 => 'tests/handlers/views_handler_field_file_size.test',
          244 => 'tests/handlers/views_handler_field_math.test',
          245 => 'tests/handlers/views_handler_field_url.test',
          246 => 'tests/handlers/views_handler_field_xss.test',
          247 => 'tests/handlers/views_handler_filter_combine.test',
          248 => 'tests/handlers/views_handler_filter_date.test',
          249 => 'tests/handlers/views_handler_filter_equality.test',
          250 => 'tests/handlers/views_handler_filter_in_operator.test',
          251 => 'tests/handlers/views_handler_filter_numeric.test',
          252 => 'tests/handlers/views_handler_filter_string.test',
          253 => 'tests/handlers/views_handler_sort_random.test',
          254 => 'tests/handlers/views_handler_sort_date.test',
          255 => 'tests/handlers/views_handler_sort.test',
          256 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          257 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          258 => 'tests/plugins/views_plugin_display.test',
          259 => 'tests/styles/views_plugin_style_jump_menu.test',
          260 => 'tests/styles/views_plugin_style.test',
          261 => 'tests/styles/views_plugin_style_unformatted.test',
          262 => 'tests/views_access.test',
          263 => 'tests/views_analyze.test',
          264 => 'tests/views_basic.test',
          265 => 'tests/views_argument_default.test',
          266 => 'tests/views_argument_validator.test',
          267 => 'tests/views_exposed_form.test',
          268 => 'tests/field/views_fieldapi.test',
          269 => 'tests/views_glossary.test',
          270 => 'tests/views_groupby.test',
          271 => 'tests/views_handlers.test',
          272 => 'tests/views_module.test',
          273 => 'tests/views_pager.test',
          274 => 'tests/views_plugin_localization_test.inc',
          275 => 'tests/views_translatable.test',
          276 => 'tests/views_query.test',
          277 => 'tests/views_upgrade.test',
          278 => 'tests/views_test.views_default.inc',
          279 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          280 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          281 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          282 => 'tests/user/views_handler_field_user_name.test',
          283 => 'tests/user/views_user_argument_default.test',
          284 => 'tests/user/views_user_argument_validate.test',
          285 => 'tests/user/views_user.test',
          286 => 'tests/views_cache.test',
          287 => 'tests/views_view.test',
          288 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.4',
        'project' => 'views',
        'datestamp' => '1345559303',
      ),
      'project' => 'views',
      'version' => '7.x-3.4',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'ctools',
        'datestamp' => '1344463011',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.1',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow.module',
          1 => 'theme/views_slideshow.theme.inc',
          2 => 'views_slideshow.views.inc',
          3 => 'views_slideshow_plugin_style_slideshow.inc',
        ),
        'version' => '7.x-3.0',
        'project' => 'views_slideshow',
        'datestamp' => '1319589616',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.0',
    ),
    'views_slideshow_cycle' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
      'name' => 'views_slideshow_cycle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: Cycle',
        'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
          1 => 'libraries',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow_cycle.module',
          1 => 'views_slideshow_cycle.views_slideshow.inc',
          2 => 'theme/views_slideshow_cycle.theme.inc',
        ),
        'version' => '7.x-3.0',
        'project' => 'views_slideshow',
        'datestamp' => '1319589616',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.0',
    ),
    'views_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/views/tests/views_test.module',
      'name' => 'views_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Test',
        'description' => 'Test module for Views.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'hidden' => true,
        'version' => '7.x-3.4',
        'project' => 'views',
        'datestamp' => '1345559303',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.4',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.4',
        'project' => 'views',
        'datestamp' => '1345559303',
        'php' => '5.2.4',
      ),
      'project' => 'views',
      'version' => '7.x-3.4',
    ),
    'xmlrpc_test' => 
    array (
      'filename' => '/var/aegir/platforms/service/modules/simpletest/tests/xmlrpc_test.module',
      'name' => 'xmlrpc_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML-RPC Test',
        'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
  ),
  'themes' => 
  array (
    'acquia_marina' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/acquia_marina/acquia_marina.info',
      'name' => 'acquia_marina',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Acquia Marina',
        'description' => '<a href="http://www.acquia.com">Acquia</a> Marina is a bright and colorful grid-based theme with point-and-click theming. Requires the <a href="http://drupal.org/project/fusion">Fusion Core</a> base theme and the <a href="http://drupal.org/project/skinr">Skinr</a> module. Created by <a href="http://www.topnotchthemes.com">TopNotchThemes</a> and <a href="http://fusiondrupalthemes.com">Fusion Drupal Themes</a>.',
        'base theme' => 'fusion_core',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/fusion-acquia-marina-style.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/jquery.corner.js',
          1 => 'js/acquia-marina-script.js',
        ),
        'fusion' => 
        array (
          'api' => '2',
          'directory' => 'skins',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'header_top' => 'Header top',
          'header' => 'Header',
          'main_menu' => 'Main menu',
          'preface_top' => 'Preface top',
          'preface_bottom' => 'Preface bottom',
          'content' => 'Content',
          'postscript_top' => 'Postscript top',
          'postscript_bottom' => 'Postscript bottom',
          'footer' => 'Footer',
          'node_top' => 'Node top',
          'node_bottom' => 'Node bottom',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'favicon',
        ),
        'settings' => 
        array (
          'theme_grid' => 'grid16-960',
          'theme_grid_options' => 
          array (
            0 => 'grid16-960',
            1 => 'grid16-fluid',
            2 => 'grid12-960',
            3 => 'grid12-fluid',
          ),
          'fluid_grid_width' => 'fluid-100',
          'theme_font' => 'none',
          'theme_font_size' => 'font-size-12',
          'breadcrumb_display' => '1',
          'search_snippet' => '1',
          'search_info_type' => '1',
          'search_info_user' => '1',
          'search_info_date' => '1',
          'search_info_comment' => '1',
          'search_info_upload' => '1',
          'grid_mask' => '0',
          'responsive_enabled' => '1',
          'responsive_ie_shim' => '1',
          'responsive_columns' => '16',
          'responsive_displays' => 
          array (
            0 => 'sidebar',
            1 => 'sidebar_tablet_landscape',
            2 => 'sidebar_tablet_portrait',
            3 => 'sidebar_phone_landscape',
          ),
          'sidebar_enabled' => '1',
          'sidebar_layout' => 'sidebars-split',
          'sidebar_first_width' => '3',
          'sidebar_second_width' => '3',
          'sidebar_grid_width' => '1200',
          'sidebar_gutter' => '30',
          'sidebar_mquery' => 'only screen and (min-width:1200px)',
          'sidebar_mask' => 'rgba(0, 73, 225, .12)',
          'sidebar_tablet_landscape_enabled' => '1',
          'sidebar_tablet_landscape_layout' => 'sidebars-split',
          'sidebar_tablet_landscape_first_width' => '3',
          'sidebar_tablet_landscape_second_width' => '3',
          'sidebar_tablet_landscape_grid_width' => '960',
          'sidebar_tablet_landscape_gutter' => '20',
          'sidebar_tablet_landscape_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:landscape), only screen and (min-width:960px) and (max-width:1199px) and (min-device-width: 1100px)',
          'sidebar_tablet_landscape_mask' => 'rgba(213,95,28,.15)',
          'sidebar_tablet_portrait_enabled' => '1',
          'sidebar_tablet_portrait_layout' => 'sidebars-split',
          'sidebar_tablet_portrait_first_width' => '3',
          'sidebar_tablet_portrait_second_width' => '3',
          'sidebar_tablet_portrait_grid_width' => '768',
          'sidebar_tablet_portrait_gutter' => '20',
          'sidebar_tablet_portrait_mquery' => 'only screen and (max-device-width: 1024px) and (orientation:portrait), only screen and (min-width:768px) and (max-width:959px) and (min-device-width: 1100px)',
          'sidebar_tablet_portrait_mask' => 'rgba(11,186,40,.15)',
          'sidebar_phone_landscape_enabled' => '1',
          'sidebar_phone_landscape_layout' => 'sidebars-drop',
          'sidebar_phone_landscape_first_width' => '3',
          'sidebar_phone_landscape_second_width' => '3',
          'sidebar_phone_landscape_grid_width' => 'mobile',
          'sidebar_phone_landscape_gutter' => '10',
          'sidebar_phone_landscape_mquery' => 'only screen and (max-width:759px)',
          'sidebar_phone_landscape_mask' => 'rgba(220,220,70,.1)',
          'grid_nested_regions' => 
          array (
            0 => 'sidebar_first',
            1 => 'sidebar_second',
            2 => 'header',
            3 => 'preface_bottom',
            4 => 'content',
            5 => 'postscript_top',
            6 => 'node_top',
            7 => 'node_bottom',
            8 => 'help',
          ),
          'grid_adjusted_regions' => 
          array (
            'preface_bottom' => 
            array (
              0 => 'sidebar_first',
            ),
            'help' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
            ),
            'content' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
            ),
            'node_top' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
            ),
            'node_bottom' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
            ),
            'postscript_top' => 
            array (
              0 => 'sidebar_first',
            ),
          ),
          'grid_adjusted_groups' => 
          array (
            'main_group' => 
            array (
              0 => 'sidebar_first',
            ),
            'content_group' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
            ),
          ),
          'grid_adjusted_regions_fluid' => 
          array (
            'sidebar_second' => 
            array (
              0 => 'sidebar_first',
            ),
            'content' => 
            array (
              0 => 'sidebar_first',
              1 => 'sidebar_second',
            ),
          ),
          'grid_adjusted_groups_fluid' => 
          array (
            'content_group' => 
            array (
              0 => 'sidebar_second',
            ),
          ),
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'acquia_marina',
        'datestamp' => '1327206342',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'acquia_marina',
      'version' => '7.x-2.0-beta1',
    ),
    'adaptivetheme' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/adaptivetheme/at_core/adaptivetheme.info',
      'name' => 'adaptivetheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Core',
        'description' => 'AT Core is the framework that drives the responsive layout system and provides an extensive set of tools for theme development. You do not need to enable this theme. Use the provided AT Subtheme to get started.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/at.layout.css',
          ),
        ),
        'unset_core' => 
        array (
          'modules/aggregator/aggregator.css' => 'aggregator.css',
          'modules/block/block.css' => 'block.css',
          'modules/book/book.css' => 'book.css',
          'modules/color/color.css' => 'color.css',
          'modules/comment/comment.css' => 'comment.css',
          'modules/contextual/contextual.css' => 'contextual.css',
          'modules/dashboard/dashboard.css' => 'dashboard.css',
          'modules/dblog/dblog.css' => 'dblog.css',
          'modules/field/theme/field.css' => 'field.css',
          'modules/field_ui/field_ui.css' => 'field_ui.css',
          'modules/file/file.css' => 'file.css',
          'modules/filter/filter.css' => 'filter.css',
          'modules/forum/forum.css' => 'forum.css',
          'modules/help/help.css' => 'help.css',
          'modules/image/image.admin.css' => 'image.admin.css',
          'modules/image/image.css' => 'image.css',
          'modules/locale/locale.css' => 'locale.css',
          'modules/menu/menu.css' => 'menu.css',
          'modules/node/node.css' => 'node.css',
          'modules/openid/openid.css' => 'openid.css',
          'modules/poll/poll.css' => 'poll.css',
          'modules/profile/profile.css' => 'profile.css',
          'modules/search/search.css' => 'search.css',
          'modules/shortcut/shortcut.admin.css' => 'shortcut.admin.css',
          'modules/shortcut/shortcut.css' => 'shortcut.css',
          'modules/simpletest/simpletest.css' => 'simpletest.css',
          'modules/system/system.admin.css' => 'system.admin.css',
          'modules/system/system.base.css' => 'system.base.css',
          'modules/system/system.maintenance.css' => 'system.maintenance.css',
          'modules/system/system.menus.css' => 'system.menus.css',
          'modules/system/system.messages.css' => 'system.messages.css',
          'modules/system/system.theme.css' => 'system.theme.css',
          'modules/taxonomy/taxonomy.css' => 'taxonomy.css',
          'modules/toolbar/toolbar.css' => 'toolbar.css',
          'modules/tracker/tracker.css' => 'tracker.css',
          'modules/update/update.css' => 'update.css',
          'modules/user/user.css' => 'user.css',
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Main Content',
          'highlighted' => 'Highlighted',
          'content_aside' => 'Aside',
          'secondary_content' => 'Secondary',
          'tertiary_content' => 'Tertiary',
          'footer' => 'Footer',
          'leaderboard' => 'Leaderboard',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'plugins' => 
        array (
          'page_layout' => 
          array (
            'layouts' => 'layouts/core',
          ),
          'panels' => 
          array (
            'layouts' => 'layouts/panels',
          ),
        ),
        'settings' => 
        array (
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_max_width_unit' => 'px',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_set_max_width' => '0',
          'tablet_landscape_max_width' => '960',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one-col-vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_max_width_unit' => 'px',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_set_max_width' => '0',
          'tablet_portrait_max_width' => '780',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_max_width_unit' => 'px',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_set_max_width' => '0',
          'smartphone_landscape_max_width' => '520',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_onmediaqueryjs' => '0',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '0',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '0',
          'base_font_type' => '<none>',
          'site_name_font_type' => '<none>',
          'site_slogan_font_type' => '<none>',
          'page_title_font_type' => '<none>',
          'node_title_font_type' => '<none>',
          'comment_title_font_type' => '<none>',
          'block_title_font_type' => '<none>',
          'main_menu_font_type' => '<none>',
          'secondary_menu_font_type' => '<none>',
          'block_menu_font_type' => '<none>',
          'selectors_font_type' => '<none>',
          'base_font_size' => '<none>',
          'site_name_font_size' => '<none>',
          'site_slogan_font_size' => '<none>',
          'page_title_font_size' => '<none>',
          'node_title_font_size' => '<none>',
          'comment_title_font_size' => '<none>',
          'block_title_font_size' => '<none>',
          'main_menu_font_size' => '<none>',
          'secondary_menu_font_size' => '<none>',
          'block_menu_font_size' => '<none>',
          'content_headings_h1h4_font_type' => '<none>',
          'content_headings_h5h6_font_type' => '<none>',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-uc',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-l',
          'image_alignment_teaser' => 'iat-l',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => '',
          'apple_touch_icon_path_m' => '',
          'apple_touch_icon_path_h' => '',
          'custom_css' => '',
        ),
        'version' => '7.x-3.1',
        'project' => 'adaptivetheme',
        'datestamp' => '1346238662',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adaptivetheme',
      'version' => '7.x-3.1',
    ),
    'adaptivetheme_admin' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/adaptivetheme/at_admin/adaptivetheme_admin.info',
      'name' => 'adaptivetheme_admin',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Admin',
        'description' => 'A better admin theme for Drupal 7. Clean, calm, invisible. Includes left and right sidebars, Overlay support and all AT\'s theme setting goodies.',
        'core' => '7.x',
        'base theme' => 'adaptivetheme',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/at_admin.css',
          ),
        ),
        'regions' => 
        array (
          'content' => 'Main content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => 'px',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '180',
          'bigscreen_sidebar_second' => '180',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1330',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '0',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_onmediaqueryjs' => '0',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => '',
          'site_name_font_type' => '',
          'site_slogan_font_type' => '',
          'page_title_font_type' => '',
          'node_title_font_type' => '',
          'comment_title_font_type' => '',
          'block_title_font_type' => '',
          'base_font' => 'bf-sss',
          'site_name_font' => 'snf-sl',
          'site_slogan_font' => 'ssf-sl',
          'main_menu_font' => 'mmf-sl',
          'page_title_font' => 'ptf-sl',
          'node_title_font' => 'ntf-sl',
          'comment_title_font' => 'ctf-sl',
          'block_title_font' => 'btf-sl',
          'base_font_size' => '1em',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-uc',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-l',
          'image_alignment_teaser' => 'iat-l',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '1',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '1',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'favicon',
          3 => 'main_menu',
          4 => 'secondary_menu',
        ),
        'version' => '7.x-3.1',
        'project' => 'adaptivetheme',
        'datestamp' => '1346238662',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adaptivetheme',
      'version' => '7.x-3.1',
    ),
    'adaptivetheme_subtheme' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/adaptivetheme/at_subtheme/adaptivetheme_subtheme.info',
      'name' => 'adaptivetheme_subtheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AT Subtheme',
        'description' => 'Copy this subtheme to get started - see the <b><a href="http://adaptivethemes.com/documentation/adaptivethemes-documentation" target="_blank" title="Adaptivethemes.com - Rocking the hardest since 2006">documentation</a></b> for guidence or the included README. Drush users can generate a new theme using the command: drush adaptivetheme. If you need help please use the <b><a href="http://drupal.org/project/issues/adaptivetheme" target="_blank">issue queue</a></b> or ask in the IRC channel: <b><a href="irc://irc.freenode.net/drupal-adaptivetheme">#drupal-adaptivetheme</a></b>.',
        'core' => '7.x',
        'base theme' => 'adaptivetheme',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'css/global.base.css',
            1 => 'css/global.styles.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Main Content',
          'highlighted' => 'Highlighted',
          'content_aside' => 'Aside',
          'secondary_content' => 'Secondary',
          'tertiary_content' => 'Tertiary',
          'footer' => 'Footer',
          'leaderboard' => 'Leaderboard',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'main_menu',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '1',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '0',
          'enable_font_settings' => '0',
          'enable_heading_settings' => '0',
          'enable_image_settings' => '0',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '0',
          'base_font_type' => '<none>',
          'site_name_font_type' => '<none>',
          'site_slogan_font_type' => '<none>',
          'page_title_font_type' => '<none>',
          'node_title_font_type' => '<none>',
          'comment_title_font_type' => '<none>',
          'block_title_font_type' => '<none>',
          'main_menu_font_type' => '<none>',
          'secondary_menu_font_type' => '<none>',
          'block_menu_font_type' => '<none>',
          'selectors_font_type' => '<none>',
          'content_headings_h1h4_font_type' => '<none>',
          'content_headings_h5h6_font_type' => '<none>',
          'base_font_size' => '<none>',
          'site_name_font_size' => '<none>',
          'site_slogan_font_size' => '<none>',
          'page_title_font_size' => '<none>',
          'node_title_font_size' => '<none>',
          'comment_title_font_size' => '<none>',
          'block_title_font_size' => '<none>',
          'main_menu_font_size' => '<none>',
          'secondary_menu_font_size' => '<none>',
          'block_menu_font_size' => '<none>',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'rel_author' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
        ),
        'version' => '7.x-3.1',
        'project' => 'adaptivetheme',
        'datestamp' => '1346238662',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'adaptivetheme',
      'version' => '7.x-3.1',
    ),
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/service/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'bluemasters' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/bluemasters/bluemasters.info',
      'name' => 'bluemasters',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blue Masters',
        'description' => 'Theme based on Blue Masters PSD template',
        'version' => '7.x-1.3',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'regions' => 
        array (
          'header' => 'Header',
          'search_area' => 'Search area',
          'highlighted' => 'Highlighted',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar First',
          'banner' => 'Banner',
          'home_area_1' => 'Home area 1',
          'home_area_2' => 'Home area 2',
          'home_area_3' => 'Home area 3',
          'home_area_3_b' => 'Home area 3 b',
          'footer_left_1' => 'Footer left 1',
          'footer_left_2' => 'Footer left 2',
          'footer_center' => 'Footer center',
          'footer_right' => 'Footer right',
          'footer' => 'Footer',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
        ),
        'project' => 'bluemasters',
        'datestamp' => '1321351835',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'bluemasters',
      'version' => '7.x-1.3',
    ),
    'corolla' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/corolla/corolla.info',
      'name' => 'corolla',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Corolla',
        'description' => 'Corolla is a subtheme of <a href="http://drupal.org/project/adaptivetheme">Adaptivetheme 7.x-3.x</a>. To use this theme you must first download and install the 7.x-3.x version of Adaptivetheme. Corolla is colorable and has many theme settings for layout, fonts, headings and much more. Corolla also supports layouts for mobile devices such as tablets and smartphones.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'base theme' => 'adaptivetheme',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/html-elements.css',
            1 => 'css/forms.css',
            2 => 'css/tables.css',
            3 => 'css/page.css',
            4 => 'css/articles.css',
            5 => 'css/comments.css',
            6 => 'css/fields.css',
            7 => 'css/blocks.css',
            8 => 'css/navigation.css',
            9 => 'css/fonts.css',
            10 => 'css/corolla.settings.style.css',
            11 => 'color/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'ie_stylesheets' => 
        array (
          'screen' => 
          array (
            'lte IE 9' => 
            array (
              0 => 'css/ie-lte-9.css',
            ),
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'highlighted' => 'Highlighted',
          'content' => 'Main content',
          'content_aside' => 'Content bottom',
          'secondary_content' => 'Secondary content',
          'tertiary_content' => 'Tertiary content',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'three_33_top' => 'AT Three column 3x33 - top',
          'three_33_first' => 'AT Three column 3x33 - left',
          'three_33_second' => 'AT Three column 3x33 - center',
          'three_33_third' => 'AT Three column 3x33 - right',
          'three_33_bottom' => 'AT Three column 3x33 - bottom',
          'four_first' => 'AT Four column 4x25 - 1',
          'four_second' => 'AT Four column 4x25 - 2',
          'four_third' => 'AT Four column 4x25 - 3',
          'four_fourth' => 'AT Four column 4x25 - 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '1',
          'toggle_slogan' => '1',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '0',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '1',
          'enable_heading_settings' => '1',
          'enable_image_settings' => '1',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => '',
          'site_name_font_type' => '',
          'site_slogan_font_type' => '',
          'page_title_font_type' => '',
          'node_title_font_type' => '',
          'comment_title_font_type' => '',
          'block_title_font_type' => '',
          'base_font' => 'bf-sss',
          'site_name_font' => 'snf-sl',
          'site_slogan_font' => 'ssf-sl',
          'main_menu_font' => 'mmf-sl',
          'page_title_font' => 'ptf-sl',
          'node_title_font' => 'ntf-sl',
          'comment_title_font' => 'ctf-sl',
          'block_title_font' => 'btf-sl',
          'base_font_size' => '1em',
          'site_name_font_size' => '3.5em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
          'content_corner_radius' => 'rc-6',
          'tabs_corner_radius' => 'rct-6',
          'box_shadows' => 'bs-n',
          'body_background' => 'bb-n',
          'menu_bullets' => 'mb-dd',
          'menu_bar_position' => 'mbp-l',
        ),
        'version' => '7.x-3.0-rc1',
        'project' => 'corolla',
        'datestamp' => '1343717220',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'corolla',
      'version' => '7.x-3.0-rc1',
    ),
    'corporateclean' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/corporateclean/corporateclean.info',
      'name' => 'corporateclean',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CorporateClean',
        'description' => 'A flexible, recolorable theme with many regions supported by <a href="http://www.morethanthemes.com/" target="_blank">More Than (just) Themes</a>. If you like this theme, we encourage you to try also our other <a href="http://www.morethanthemes.com" target="_blank">Premium</a> and <a href="http://drupalizing.com" target="_blank">Free</a> Drupal themes.',
        'version' => '7.x-1.5',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
            1 => 'color/colors.css',
          ),
        ),
        'regions' => 
        array (
          'search_area' => 'Search area',
          'highlighted' => 'Highlighted',
          'content' => 'Content',
          'sidebar_first' => 'First sidebar',
          'banner' => 'Banner',
          'footer_first' => 'Footer first',
          'footer_second' => 'Footer second',
          'footer_third' => 'Footer third',
          'footer' => 'Footer',
          'footer_bottom_right' => 'Footer bottom right',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'breadcrumb_display' => '1',
          'slideshow_display' => '1',
          'slideshow_js' => '1',
          'slideshow_effect' => 'scrollHorz',
          'slideshow_effect_time' => '10',
        ),
        'project' => 'corporateclean',
        'datestamp' => '1337952655',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'corporateclean',
      'version' => '7.x-1.5',
    ),
    'danblog' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/danland/danblog/danblog.info',
      'name' => 'danblog',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Danblog',
        'description' => 'Danland sub theme. Danland with no frontpage image banner and slideshow.',
        'engine' => 'phptemplate',
        'base theme' => 'danland',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'danblog.css',
          ),
        ),
        'regions' => 
        array (
          'search_box' => 'Search region',
          'superfish_menu' => 'Superfish menu',
          'page_top' => 'Page top',
          'highlighted' => 'Highlighted',
          'preface_first' => 'Preface first',
          'preface_middle' => 'Preface middle',
          'preface_last' => 'Preface last',
          'sidebar_first' => 'Left sidebar',
          'sidebar_second' => 'Right sidebar',
          'content_top' => 'Content top',
          'help' => 'Help',
          'content' => 'Main content',
          'content_bottom' => 'Content bottom',
          'bottom_first' => 'Bottom first',
          'bottom_middle' => 'Bottom middle',
          'bottom_last' => 'Bottom last',
          'bottom_1' => 'Bottom 1',
          'bottom_2' => 'Bottom 2',
          'bottom_3' => 'Bottom 3',
          'bottom_4' => 'Bottom 4',
          'footer' => 'Footer',
          'page_bottom' => 'Page bottom',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'danland',
        'datestamp' => '1294312858',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'danland',
      'version' => '7.x-1.0',
    ),
    'danland' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/danland/danland.info',
      'name' => 'danland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Danland',
        'description' => 'Drupal Theme provided by <a href="http://www.danetsoft.com">Danetsoft</a> developed by <a href="http://www.danpros.com">Danang Probo Sayekti</a> inspired by <a href="http://www.maksimer.no">Maksimer</a>.',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
        ),
        'regions' => 
        array (
          'search_box' => 'Search region',
          'superfish_menu' => 'Superfish menu',
          'page_top' => 'Page top',
          'preface' => 'Preface top',
          'highlighted' => 'Highlighted',
          'preface_first' => 'Preface first',
          'preface_middle' => 'Preface middle',
          'preface_last' => 'Preface last',
          'sidebar_first' => 'Left sidebar',
          'sidebar_second' => 'Right sidebar',
          'content_top' => 'Content top',
          'help' => 'Help',
          'content' => 'Main content',
          'content_bottom' => 'Content bottom',
          'bottom_first' => 'Bottom first',
          'bottom_middle' => 'Bottom middle',
          'bottom_last' => 'Bottom last',
          'bottom_1' => 'Bottom 1',
          'bottom_2' => 'Bottom 2',
          'bottom_3' => 'Bottom 3',
          'bottom_4' => 'Bottom 4',
          'footer' => 'Footer',
          'page_bottom' => 'Page bottom',
        ),
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'scripts/hoverIntent.js',
          1 => 'scripts/superfish.js',
        ),
        'version' => '7.x-1.0',
        'project' => 'danland',
        'datestamp' => '1294312858',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'danland',
      'version' => '7.x-1.0',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/service/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'marinelli' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/marinelli/marinelli.info',
      'name' => 'marinelli',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Marinelli',
        'description' => 'A clean theme still usable over 4000m!',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/common.css',
            1 => 'css/links.css',
            2 => 'css/typography.css',
            3 => 'css/forms.css',
            4 => 'css/drupal.css',
            5 => 'css/layout.css',
            6 => 'css/primary-links.css',
            7 => 'css/slideshow.css',
            8 => 'css/secondary-links.css',
            9 => 'css/blocks.css',
            10 => 'css/node.css',
            11 => 'css/comments.css',
            12 => 'css/pages/maintenance-page.css',
          ),
          'print' => 
          array (
            0 => 'css/print/print.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/marinelli_marinelli.js',
          1 => 'js/topregion/marinelli_topregion.js',
        ),
        'regions' => 
        array (
          'topbar' => 'Topbar',
          'utility_top' => 'Utility Menu (top)',
          'utility_bottom' => 'Utility Menu (Bottom)',
          'search' => 'Search Region',
          'advertise' => 'Advertise',
          'overcontent' => 'Over Content',
          'overnode' => 'Over Node',
          'highlight' => 'Highlight',
          'content' => 'Content',
          'undernode' => 'Under Node',
          'sidebar_first' => 'First Sidebar',
          'sidebar_second' => 'Second Sidebar',
          'oversidebars' => 'Over Sidebars',
          'undersidebars' => 'Under Sidebars',
          'undercontent' => 'Under Content',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'bartext' => 'Slide Down',
          'bartext2' => 'Slide Up',
          'breadcrumb_title' => '1',
          'breadcrumb_title_length' => '50',
          'layout_width' => '1',
          'layout_type' => '1',
          'blocks' => '2',
          'outside_tags' => '0',
          'title_tags' => '0',
          'css' => '1',
          'css_typo' => '1',
          'sticky_text' => 'Sticky',
          'menu_type' => '1',
          'menu_element' => 'main-menu',
          'menu_alt_class' => '0',
          'menu_headings' => '1',
          'banner_usage' => '1',
          'banner_type' => '0',
          'banner_effect' => 'fade',
          'banner_speed' => '1000',
          'banner_delay' => '4000',
          'banner_pause' => '1',
          'banner_showtext' => '1',
          'banner_shownavigation' => '1',
          'default_banners' => 
          array (
            1 => 
            array (
              'image_path' => 'img/advertise/1.jpg',
              'image_title' => 'Title for image 1',
              'image_description' => 'Description for image 1',
              'image_published' => true,
            ),
            2 => 
            array (
              'image_path' => 'img/advertise/2.jpg',
              'image_title' => 'Title for image 2',
              'image_description' => 'Description for image 2',
              'image_published' => true,
            ),
            3 => 
            array (
              'image_path' => 'img/advertise/3.jpg',
              'image_title' => 'Title for image 3',
              'image_description' => 'Description for image 3',
              'image_published' => true,
            ),
            4 => 
            array (
              'image_path' => 'img/advertise/4.jpg',
              'image_title' => 'Title for image 4',
              'image_description' => 'Description for image 4',
              'image_published' => true,
            ),
            5 => 
            array (
              'image_path' => 'img/advertise/5.jpg',
              'image_title' => 'Title for image 5',
              'image_description' => 'Description for image 5',
              'image_published' => true,
            ),
            6 => 
            array (
              'image_path' => 'img/advertise/6.jpg',
              'image_title' => 'Title for image 6',
              'image_description' => 'Description for image 6',
              'image_published' => true,
            ),
          ),
        ),
        'version' => '7.x-3.0-beta11',
        'project' => 'marinelli',
        'datestamp' => '1307567519',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'marinelli',
      'version' => '7.x-3.0-beta11',
    ),
    'pixture_reloaded' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/pixture_reloaded/pixture_reloaded.info',
      'name' => 'pixture_reloaded',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pixture Reloaded',
        'description' => 'Pixture Reloaded is a recolorable, multi-column theme that supports both liquid and fixed width layouts. This is a subtheme - you must first download and install <a href="http://drupal.org/project/adaptivetheme">Adaptivetheme 7.x-3.x</a>. Once you have everything installed visit the settings page to change the colors, layout (width, sidebar widths, sidebar layout etc), fonts, rounded corners and many other settings. This theme also fully supports the <a href="http://drupal.org/project/noggin">Noggin</a> and <a href="http://drupal.org/project/superfish">Superfish</a> modules and includes special theme settings to help configure Noggin header images - note that you must first install the Noggin module to see these settings.',
        'core' => '7.x',
        'release' => '7.x-3.x',
        'engine' => 'phptemplate',
        'base theme' => 'adaptivetheme',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'color/colors.css',
            1 => 'css/pixture_reloaded.css',
            2 => 'css/pixture_reloaded.settings.style.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'header' => 'Header',
          'menu_bar' => 'Menu Bar',
          'help' => 'Help',
          'highlighted' => 'Highlighted',
          'content' => 'Main content',
          'content_aside' => 'Content bottom',
          'secondary_content' => 'Secondary content',
          'tertiary_content' => 'Tertiary content',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'three_33_top' => 'AT Three column 3x33 - top',
          'three_33_first' => 'AT Three column 3x33 - left',
          'three_33_second' => 'AT Three column 3x33 - center',
          'three_33_third' => 'AT Three column 3x33 - right',
          'three_33_bottom' => 'AT Three column 3x33 - bottom',
          'four_first' => 'AT Four column 4x25 - 1',
          'four_second' => 'AT Four column 4x25 - 2',
          'four_third' => 'AT Four column 4x25 - 3',
          'four_fourth' => 'AT Four column 4x25 - 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '1',
          'toggle_slogan' => '1',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'bigscreen_layout' => 'three_col_grail',
          'bigscreen_page_unit' => '%',
          'bigscreen_sidebar_unit' => '%',
          'bigscreen_max_width_unit' => 'px',
          'bigscreen_page_width' => '100',
          'bigscreen_sidebar_first' => '25',
          'bigscreen_sidebar_second' => '25',
          'bigscreen_set_max_width' => '1',
          'bigscreen_max_width' => '1140',
          'bigscreen_media_query' => 'only screen and (min-width:1025px)',
          'tablet_landscape_layout' => 'three_col_grail',
          'tablet_landscape_page_unit' => '%',
          'tablet_landscape_sidebar_unit' => '%',
          'tablet_landscape_page_width' => '100',
          'tablet_landscape_sidebar_first' => '20',
          'tablet_landscape_sidebar_second' => '20',
          'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
          'tablet_portrait_layout' => 'one_col_vert',
          'tablet_portrait_page_unit' => '%',
          'tablet_portrait_sidebar_unit' => '%',
          'tablet_portrait_page_width' => '100',
          'tablet_portrait_sidebar_first' => '50',
          'tablet_portrait_sidebar_second' => '50',
          'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
          'smartphone_landscape_layout' => 'one_col_vert',
          'smartphone_landscape_page_unit' => '%',
          'smartphone_landscape_sidebar_unit' => '%',
          'smartphone_landscape_page_width' => '100',
          'smartphone_landscape_sidebar_first' => '50',
          'smartphone_landscape_sidebar_second' => '50',
          'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
          'smartphone_portrait_layout' => 'one_col_stack',
          'smartphone_portrait_page_unit' => '%',
          'smartphone_portrait_sidebar_unit' => '%',
          'smartphone_portrait_page_width' => '100',
          'smartphone_portrait_sidebar_first' => '100',
          'smartphone_portrait_sidebar_second' => '100',
          'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
          'bigscreen_two_50' => 'two-50',
          'bigscreen_two_33_66' => 'two-33-66',
          'bigscreen_two_66_33' => 'two-66-33',
          'bigscreen_two_brick' => 'two-brick',
          'bigscreen_three_3x33' => 'three-3x33',
          'bigscreen_three_25_50_25' => 'three-25-50-25',
          'bigscreen_three_25_25_50' => 'three-25-25-50',
          'bigscreen_three_50_25_25' => 'three-50-25-25',
          'bigscreen_four_4x25' => 'four-4x25',
          'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
          'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
          'bigscreen_three_inset_left' => 'three-inset-left',
          'bigscreen_three_inset_right' => 'three-inset-right',
          'tablet_landscape_two_50' => 'two-50',
          'tablet_landscape_two_33_66' => 'two-33-66',
          'tablet_landscape_two_66_33' => 'two-66-33',
          'tablet_landscape_two_brick' => 'two-brick',
          'tablet_landscape_three_3x33' => 'three-3x33',
          'tablet_landscape_three_25_50_25' => 'three-25-50-25',
          'tablet_landscape_three_25_25_50' => 'three-25-25-50',
          'tablet_landscape_three_50_25_25' => 'three-50-25-25',
          'tablet_landscape_four_4x25' => 'four-4x25',
          'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
          'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
          'tablet_landscape_three_inset_left' => 'three-inset-left',
          'tablet_landscape_three_inset_right' => 'three-inset-right',
          'tablet_portrait_two_50' => 'two-50',
          'tablet_portrait_two_33_66' => 'two-33-66',
          'tablet_portrait_two_66_33' => 'two-66-33',
          'tablet_portrait_two_brick' => 'two-brick',
          'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
          'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
          'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
          'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
          'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
          'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
          'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
          'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
          'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
          'smartphone_landscape_two_50' => 'two-50-stack',
          'smartphone_landscape_two_33_66' => 'two-33-66-stack',
          'smartphone_landscape_two_66_33' => 'two-66-33-stack',
          'smartphone_landscape_two_brick' => 'two-brick-stack',
          'smartphone_landscape_three_3x33' => 'three-3x33-stack',
          'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
          'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
          'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
          'smartphone_landscape_four_4x25' => 'four-4x25-stack',
          'smartphone_landscape_five_5x20' => 'five-5x20-stack',
          'smartphone_landscape_six_6x16' => 'six-6x16-stack',
          'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
          'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
          'disable_responsive_styles' => '0',
          'enable_custom_media_queries' => '0',
          'global_default_layout' => 'smartphone-portrait',
          'global_default_layout_toggle' => '0',
          'global_files_path' => 'public_files',
          'load_html5js' => '1',
          'load_respondjs' => '0',
          'load_ltie8css' => '0',
          'load_scalefixjs' => '0',
          'expose_regions' => '0',
          'load_all_panels' => '0',
          'load_all_panels_no_sidebars' => '0',
          'show_window_size' => '0',
          'rebuild_theme_data' => '0',
          'enable_extensions' => '1',
          'enable_font_settings' => '1',
          'enable_heading_settings' => '1',
          'enable_image_settings' => '1',
          'enable_apple_touch_icons' => '0',
          'enable_exclude_css' => '0',
          'enable_custom_css' => '0',
          'enable_context_regions' => '0',
          'enable_float_region_blocks' => '0',
          'enable_markup_overides' => '1',
          'base_font_type' => '',
          'site_name_font_type' => '',
          'site_slogan_font_type' => '',
          'page_title_font_type' => '',
          'node_title_font_type' => '',
          'comment_title_font_type' => '',
          'block_title_font_type' => '',
          'base_font' => 'bf-sss',
          'site_name_font' => 'snf-sl',
          'site_slogan_font' => 'ssf-sl',
          'main_menu_font' => 'mmf-sl',
          'page_title_font' => 'ptf-sl',
          'node_title_font' => 'ntf-sl',
          'comment_title_font' => 'ctf-sl',
          'block_title_font' => 'btf-sl',
          'base_font_size' => '1em',
          'site_name_font_size' => '2em',
          'site_slogan_font_size' => '1.2em',
          'page_title_font_size' => '2em',
          'node_title_font_size' => '1.6em',
          'comment_title_font_size' => '1.4em',
          'block_title_font_size' => '1.4em',
          'h1_font_size' => '2em',
          'h2_font_size' => '1.6em',
          'h3_font_size' => '1.4em',
          'h4_font_size' => '1.2em',
          'h5_font_size' => '1em',
          'h6_font_size' => '1em',
          'page_title_case' => 'ptc-n',
          'page_title_weight' => 'ptw-b',
          'page_title_alignment' => 'pta-l',
          'page_title_shadow' => 'pts-n',
          'node_title_case' => 'ntc-n',
          'node_title_weight' => 'ntw-b',
          'node_title_alignment' => 'nta-l',
          'node_title_shadow' => 'nts-n',
          'comment_title_case' => 'ctc-n',
          'comment_title_weight' => 'ctw-b',
          'comment_title_alignment' => 'cta-l',
          'comment_title_shadow' => 'cts-n',
          'block_title_case' => 'btc-n',
          'block_title_weight' => 'btw-b',
          'block_title_alignment' => 'bta-l',
          'block_title_shadow' => 'bts-n',
          'image_alignment' => 'ia-n',
          'image_alignment_teaser' => 'iat-n',
          'image_caption_full' => '0',
          'image_caption_teaser' => '0',
          'image_teaser' => '0',
          'breadcrumb_display' => '1',
          'breadcrumb_home' => '0',
          'breadcrumb_label' => '0',
          'breadcrumb_title' => '0',
          'breadcrumb_separator' => ' &#187; ',
          'horizontal_login_block_enable' => 'on',
          'horizontal_login_block' => '0',
          'login_block_remove_links' => '0',
          'login_block_remove_openid' => '0',
          'global_gutter_width' => '',
          'page_full_width_wrappers' => '0',
          'page_content_type_suggestions' => '0',
          'menu_item_span_elements' => '0',
          'extra_page_classes' => '1',
          'extra_article_classes' => '1',
          'extra_comment_classes' => '1',
          'extra_block_classes' => '1',
          'extra_menu_classes' => '1',
          'extra_item_list_classes' => '1',
          'comments_hide_title' => '0',
          'feed_icons' => '0',
          'unset_block_system_main_front' => '0',
          'unset_menu_titles' => '0',
          'skip_link_target' => '#main-content',
          'adv_search_extra_fieldsets' => '0',
          'mobile_friendly_metatags' => '1',
          'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
          'adaptivetheme_meta_mobileoptimized' => 'width',
          'adaptivetheme_meta_handheldfriendly' => 'true',
          'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
          'chrome_edge' => '0',
          'clear_type' => '0',
          'apple_touch_icon_enable' => '0',
          'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
          'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
          'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
          'custom_css' => '',
          'content_corner_radius' => 'rc-6',
          'tabs_corner_radius' => 'rct-6',
          'box_shadows' => 'bs-n',
          'body_background' => 'bb-n',
          'menu_bullets' => 'mb-dd',
          'menu_bar_position' => 'mbp-l',
        ),
        'version' => '7.x-3.0-rc1',
        'project' => 'pixture_reloaded',
        'datestamp' => '1343716985',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'pixture_reloaded',
      'version' => '7.x-3.0-rc1',
    ),
    'rootcandy' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/rootcandy/rootcandy.info',
      'name' => 'rootcandy',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RootCandy',
        'description' => 'Administration theme.',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/reset.css',
            1 => 'css/typography.css',
            2 => 'css/global.css',
            3 => 'css/layout.css',
            4 => 'css/form.css',
            5 => 'css/table.css',
            6 => 'css/navigation.css',
            7 => 'css/misc.css',
            8 => 'css/icons.css',
            9 => 'css/default.css',
            10 => 'css/dev.css',
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
          'slider' => 'Sliding region',
          'slider_left' => 'Sliding region Left',
          'slider_middle' => 'Sliding region Middle',
          'slider_right' => 'Sliding region Right',
        ),
        'scripts' => 
        array (
          0 => 'scripts/core.js',
          1 => 'scripts/slide.js',
        ),
        'settings' => 
        array (
          'rootcandy_navigation_icons' => '0',
          'rootcandy_navigation_icons_size' => '24',
          'rootcandy_header_display' => '0',
          'rootcandy_navigation_custom_icons' => '',
          'rootcandy_help_display' => '0',
          'rootcandy_hide_author' => '0',
          'rootcandy_hide_panel' => '0',
          'rootcandy_hide_panel_overlay' => '1',
          'rootcandy_header_display_overlay' => '1',
          'rootcandy_navigation_source_admin' => '_rootcandy_default_navigation',
        ),
        'version' => '7.x-1.0-alpha1',
        'project' => 'rootcandy',
        'datestamp' => '1335611463',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'rootcandy',
      'version' => '7.x-1.0-alpha1',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/service/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/service/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'zen' => 
    array (
      'filename' => '/var/aegir/platforms/service/sites/all/themes/zen/zen.info',
      'name' => 'zen',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Zen',
        'description' => 'Zen sub-themes are the ultimate starting themes for Drupal 7. Read the <a href="http://drupal.org/node/873778">online docs</a> or the included README-FIRST.txt on how to create a theme with Zen.',
        'screenshot' => 'zen-internals/screenshot.png',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'system.menus.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'navigation' => 'Navigation bar',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First sidebar',
          'sidebar_second' => 'Second sidebar',
          'footer' => 'Footer',
          'bottom' => 'Page bottom',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'zen_breadcrumb' => 'yes',
          'zen_breadcrumb_separator' => ' › ',
          'zen_breadcrumb_home' => '1',
          'zen_breadcrumb_trailing' => '1',
          'zen_breadcrumb_title' => '0',
          'zen_layout' => 'zen-responsive-sidebars',
          'zen_skip_link_anchor' => 'main-menu',
          'zen_skip_link_text' => 'Jump to navigation',
          'zen_html5_respond_meta' => 
          array (
            0 => 'respond',
            1 => 'html5',
            2 => 'meta',
          ),
          'zen_rebuild_registry' => '0',
          'zen_wireframes' => '0',
        ),
        'version' => '7.x-5.1',
        'project' => 'zen',
        'datestamp' => '1337337097',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'zen',
      'version' => '7.x-5.1',
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '127.0.0.1',
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
