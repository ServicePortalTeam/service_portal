<?php
/**
 * @file
 * basesite.apachesolr_environments.inc
 */

/**
 * Implements hook_apachesolr_environments().
 */
function basesite_apachesolr_environments() {
  $export = array();

  $environment = new stdClass();
  $environment->api_version = 1;
  $environment->env_id = 'solr';
  $environment->name = 'localhost server';
  $environment->url = 'http://localhost:8983/solr';
  $environment->service_class = '';
  $environment->conf = array(
    'apachesolr_read_only' => '0',
  );
  $environment->index_bundles = array(
    'node' => array(
      0 => 'article',
      1 => 'faq',
      2 => 'page',
      3 => 'ticket',
    ),
    'file' => array(
      0 => 'file',
    ),
  );
  $export['solr'] = $environment;

  return $export;
}
