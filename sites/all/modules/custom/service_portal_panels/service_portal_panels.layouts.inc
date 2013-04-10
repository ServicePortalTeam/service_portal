<?php
/**
 * @file
 * service_portal_panels.layouts.inc
 */

/**
 * Implements hook_default_panels_layout().
 */
function service_portal_panels_default_panels_layout() {
  $export = array();

  $layout = new stdClass();
  $layout->disabled = FALSE; /* Edit this to true to make a default layout disabled initially */
  $layout->api_version = 1;
  $layout->name = 'businesssolution';
  $layout->admin_title = 'Business Solution';
  $layout->admin_description = 'Business Solution';
  $layout->category = '';
  $layout->plugin = 'flexible';
  $layout->settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 'main',
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => 100,
        'width_type' => '%',
        'children' => array(
          0 => 2,
          1 => 1,
          2 => 3,
        ),
        'parent' => 'canvas',
      ),
      1 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'left',
          1 => 'right',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      2 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'top',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      3 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'bottom',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      'bottom' => array(
        'type' => 'region',
        'title' => 'Bottom',
        'width' => 100,
        'width_type' => '%',
        'parent' => '3',
        'class' => '',
      ),
      'left' => array(
        'type' => 'region',
        'title' => 'Left',
        'width' => '22.881900806480846',
        'width_type' => '%',
        'parent' => '1',
        'class' => '',
      ),
      'right' => array(
        'type' => 'region',
        'title' => 'Right',
        'width' => '77.11809919351916',
        'width_type' => '%',
        'parent' => '1',
        'class' => '',
      ),
      'top' => array(
        'type' => 'region',
        'title' => 'Top',
        'width' => 100,
        'width_type' => '%',
        'parent' => '2',
        'class' => '',
      ),
    ),
  );
  $export['businesssolution'] = $layout;

  $layout = new stdClass();
  $layout->disabled = FALSE; /* Edit this to true to make a default layout disabled initially */
  $layout->api_version = 1;
  $layout->name = 'knowledge_management';
  $layout->admin_title = 'Knowledge Management Form';
  $layout->admin_description = 'Knowledge Management Form';
  $layout->category = 'Knowledge Management Form';
  $layout->plugin = 'flexible';
  $layout->settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 'main',
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => 100,
        'width_type' => '%',
        'children' => array(
          0 => 11,
          1 => 8,
        ),
        'parent' => 'canvas',
      ),
      8 => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 10,
          1 => 9,
        ),
        'parent' => 'main',
        'class' => '',
      ),
      9 => array(
        'type' => 'column',
        'width' => '78.32959058107707',
        'width_type' => '%',
        'parent' => '8',
        'children' => array(
          0 => 15,
        ),
        'class' => '',
      ),
      10 => array(
        'type' => 'column',
        'width' => '21.67040941892294',
        'width_type' => '%',
        'parent' => '8',
        'children' => array(
          0 => 13,
          1 => 12,
          2 => 14,
        ),
        'class' => '',
      ),
      11 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'top_region',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      12 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'user_manual_',
        ),
        'parent' => '10',
        'class' => '',
      ),
      13 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'faq_',
        ),
        'parent' => '10',
        'class' => '',
      ),
      'faq_' => array(
        'type' => 'region',
        'title' => 'FAQ',
        'width' => 100,
        'width_type' => '%',
        'parent' => '13',
        'class' => '',
      ),
      14 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(),
        'parent' => '10',
        'class' => '',
      ),
      'user_manual_' => array(
        'type' => 'region',
        'title' => 'User Manual',
        'width' => 100,
        'width_type' => '%',
        'parent' => '12',
        'class' => '',
      ),
      15 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'center',
        ),
        'parent' => '9',
        'class' => 'Center',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => '15',
        'class' => '',
      ),
      'top_region' => array(
        'type' => 'region',
        'title' => 'Top Region',
        'width' => 100,
        'width_type' => '%',
        'parent' => '11',
        'class' => '',
      ),
    ),
  );
  $export['knowledge_management'] = $layout;

  $layout = new stdClass();
  $layout->disabled = FALSE; /* Edit this to true to make a default layout disabled initially */
  $layout->api_version = 1;
  $layout->name = 'layout_set_by_olivia';
  $layout->admin_title = 'Layout set by Olivia';
  $layout->admin_description = '一个新的布局';
  $layout->category = '';
  $layout->plugin = 'flexible';
  $layout->settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 1,
          1 => 'main',
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => 75,
        'width_type' => '%',
        'children' => array(
          0 => 3,
          1 => 2,
          2 => 'main-row',
        ),
        'parent' => 'canvas',
      ),
      'main-row' => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'center',
        ),
        'parent' => 'main',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
        'class' => '',
      ),
      1 => array(
        'type' => 'column',
        'width' => '190',
        'width_type' => 'px',
        'parent' => 'canvas',
        'children' => array(
          0 => 4,
        ),
        'class' => '',
      ),
      2 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'left_',
          1 => 'left',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      'left' => array(
        'type' => 'region',
        'title' => 'right',
        'width' => 50,
        'width_type' => '%',
        'parent' => '2',
        'class' => '',
      ),
      3 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'top_region',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      'left_' => array(
        'type' => 'region',
        'title' => 'left',
        'width' => 50,
        'width_type' => '%',
        'parent' => '2',
        'class' => '',
      ),
      'top_region' => array(
        'type' => 'region',
        'title' => 'top region',
        'width' => 100,
        'width_type' => '%',
        'parent' => '3',
        'class' => '',
      ),
      4 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'total_left',
        ),
        'parent' => '1',
        'class' => '',
      ),
      'total_left' => array(
        'type' => 'region',
        'title' => 'total left',
        'width' => 100,
        'width_type' => '%',
        'parent' => '4',
        'class' => '',
      ),
    ),
  );
  $export['layout_set_by_olivia'] = $layout;

  $layout = new stdClass();
  $layout->disabled = FALSE; /* Edit this to true to make a default layout disabled initially */
  $layout->api_version = 1;
  $layout->name = 'management_process';
  $layout->admin_title = 'management process';
  $layout->admin_description = 'management process by emily';
  $layout->category = '';
  $layout->plugin = 'flexible';
  $layout->settings = array(
    'items' => array(
      'canvas' => array(
        'type' => 'row',
        'contains' => 'column',
        'children' => array(
          0 => 'main',
        ),
        'parent' => NULL,
      ),
      'main' => array(
        'type' => 'column',
        'width' => 100,
        'width_type' => '%',
        'children' => array(
          0 => 2,
          1 => 1,
          2 => 'main-row',
        ),
        'parent' => 'canvas',
      ),
      'main-row' => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'center',
        ),
        'parent' => 'main',
      ),
      'center' => array(
        'type' => 'region',
        'title' => 'Center',
        'width' => 100,
        'width_type' => '%',
        'parent' => 'main-row',
      ),
      1 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'left',
          1 => 'right',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      2 => array(
        'type' => 'row',
        'contains' => 'region',
        'children' => array(
          0 => 'top',
        ),
        'parent' => 'main',
        'class' => '',
      ),
      'left' => array(
        'type' => 'region',
        'title' => 'left',
        'width' => '20.312938979694113',
        'width_type' => '%',
        'parent' => '1',
        'class' => '',
      ),
      'right' => array(
        'type' => 'region',
        'title' => 'right',
        'width' => '79.68706102030589',
        'width_type' => '%',
        'parent' => '1',
        'class' => '',
      ),
      'top' => array(
        'type' => 'region',
        'title' => 'top',
        'width' => 100,
        'width_type' => '%',
        'parent' => '2',
        'class' => '',
      ),
    ),
  );
  $export['management_process'] = $layout;

  return $export;
}
