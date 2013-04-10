<?php
/**
 * @file
 * service_portal_menus.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function service_portal_menus_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu:<front>
  $menu_links['main-menu:<front>'] = array(
    'menu_name' => 'main-menu',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Home',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'en',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '-50',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/en/Servicedesk Worklist Page
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/en/Servicedesk Worklist Page'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/en/Servicedesk Worklist Page',
    'router_path' => '',
    'link_title' => 'Service Desk',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(
        'title' => 'Servicedesk Worklist Page',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '1',
    'parent_path' => 'http://service-portal.cn.capgemini.com/en/itil-process',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/en/contractus
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/en/contractus'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/en/contractus',
    'router_path' => '',
    'link_title' => 'Contact Us',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-45',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/en/enco0101
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/en/enco0101'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/en/enco0101',
    'router_path' => '',
    'link_title' => 'Business Solution',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(
        'title' => 'business solution',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '-48',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/en/enmm0101
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/en/enmm0101'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/en/enmm0101',
    'router_path' => '',
    'link_title' => 'PTP',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(
        'title' => 'Procure-to-pay',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'http://landisgyr.cn.capgemini.com/en/enco0101',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/en/enpp0102
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/en/enpp0102'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/en/enpp0102',
    'router_path' => '',
    'link_title' => 'STP',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(
        'title' => 'Supply-to-Production',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'http://landisgyr.cn.capgemini.com/en/enco0101',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/en/ensd0101
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/en/ensd0101'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/en/ensd0101',
    'router_path' => '',
    'link_title' => 'OTC',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(
        'title' => 'Order-to-Cash',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'http://landisgyr.cn.capgemini.com/en/enco0101',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/en/faq-pp-en
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/en/faq-pp-en'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/en/faq-pp-en',
    'router_path' => '',
    'link_title' => 'Knowledge Management',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-46',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/zh-hans/Servicedesk Worklist Pagecn
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/zh-hans/Servicedesk Worklist Pagecn'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/zh-hans/Servicedesk Worklist Pagecn',
    'router_path' => '',
    'link_title' => '服务台',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'http://service-portal.cn.capgemini.com/zh-hans/itil-process',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/zh-hans/co0101
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/zh-hans/co0101'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/zh-hans/co0101',
    'router_path' => '',
    'link_title' => '财务与成本',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'zh-hans',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-50',
    'parent_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/co0101',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/zh-hans/contractus
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/zh-hans/contractus'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/zh-hans/contractus',
    'router_path' => '',
    'link_title' => '联系我们',
    'options' => array(
      'langcode' => 'zh-hans',
      'attributes' => array(),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '6',
  );
  // Exported menu link: main-menu:http://landisgyr.cn.capgemini.com/zh-hans/faq-pp
  $menu_links['main-menu:http://landisgyr.cn.capgemini.com/zh-hans/faq-pp'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://landisgyr.cn.capgemini.com/zh-hans/faq-pp',
    'router_path' => '',
    'link_title' => '知识管理',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'zh-hans',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '5',
  );
  // Exported menu link: main-menu:http://service-portal.cn.capgemini.com/en/itil-process
  $menu_links['main-menu:http://service-portal.cn.capgemini.com/en/itil-process'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://service-portal.cn.capgemini.com/en/itil-process',
    'router_path' => '',
    'link_title' => 'Management Process',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '-47',
  );
  // Exported menu link: main-menu:http://service-portal.cn.capgemini.com/itil-process
  $menu_links['main-menu:http://service-portal.cn.capgemini.com/itil-process'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://service-portal.cn.capgemini.com/itil-process',
    'router_path' => '',
    'link_title' => 'ITIL',
    'options' => array(
      'attributes' => array(
        'title' => 'itil',
        'target' => '_blank',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '0',
    'parent_path' => 'http://service-portal.cn.capgemini.com/en/itil-process',
  );
  // Exported menu link: main-menu:http://service-portal.cn.capgemini.com/otrs/index.pl
  $menu_links['main-menu:http://service-portal.cn.capgemini.com/otrs/index.pl'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://service-portal.cn.capgemini.com/otrs/index.pl',
    'router_path' => '',
    'link_title' => 'Ticket Management',
    'options' => array(
      'langcode' => 'en',
      'attributes' => array(
        'target' => '_blank',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '-49',
  );
  // Exported menu link: main-menu:http://service-portal.cn.capgemini.com/zh-hans/itil-process
  $menu_links['main-menu:http://service-portal.cn.capgemini.com/zh-hans/itil-process'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'http://service-portal.cn.capgemini.com/zh-hans/itil-process',
    'router_path' => '',
    'link_title' => '管理流程',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'zh-hans',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '4',
  );
  // Exported menu link: main-menu:https://landisgyr.cn.capgemini.com/zh-hans/co0101
  $menu_links['main-menu:https://landisgyr.cn.capgemini.com/zh-hans/co0101'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/co0101',
    'router_path' => '',
    'link_title' => '解决方案',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'zh-hans',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '3',
  );
  // Exported menu link: main-menu:https://landisgyr.cn.capgemini.com/zh-hans/mm0101
  $menu_links['main-menu:https://landisgyr.cn.capgemini.com/zh-hans/mm0101'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/mm0101',
    'router_path' => '',
    'link_title' => '物料管理',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'zh-hans',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-48',
    'parent_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/co0101',
  );
  // Exported menu link: main-menu:https://landisgyr.cn.capgemini.com/zh-hans/pp0102
  $menu_links['main-menu:https://landisgyr.cn.capgemini.com/zh-hans/pp0102'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/pp0102',
    'router_path' => '',
    'link_title' => ' 生产计划',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'zh-hans',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-47',
    'parent_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/co0101',
  );
  // Exported menu link: main-menu:https://landisgyr.cn.capgemini.com/zh-hans/sd0101
  $menu_links['main-menu:https://landisgyr.cn.capgemini.com/zh-hans/sd0101'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/sd0101',
    'router_path' => '',
    'link_title' => '销售与分销',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'langcode' => 'zh-hans',
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-49',
    'parent_path' => 'https://landisgyr.cn.capgemini.com/zh-hans/co0101',
  );
  // Exported menu link: main-menu:https://service-portal.cn.capgemini.com/zh-hans/CN-ITILV3-ALL
  $menu_links['main-menu:https://service-portal.cn.capgemini.com/zh-hans/CN-ITILV3-ALL'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'https://service-portal.cn.capgemini.com/zh-hans/CN-ITILV3-ALL',
    'router_path' => '',
    'link_title' => '信息技术基础架构',
    'options' => array(
      'langcode' => 'zh-hans',
      'attributes' => array(
        'target' => '_blank',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'http://service-portal.cn.capgemini.com/zh-hans/itil-process',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t(' 生产计划');
  t('Business Solution');
  t('Contact Us');
  t('Home');
  t('ITIL');
  t('Knowledge Management');
  t('Management Process');
  t('OTC');
  t('PTP');
  t('STP');
  t('Service Desk');
  t('Ticket Management');
  t('信息技术基础架构');
  t('服务台');
  t('物料管理');
  t('知识管理');
  t('管理流程');
  t('联系我们');
  t('解决方案');
  t('财务与成本');
  t('销售与分销');


  return $menu_links;
}
