<?php
/**
 * @file
 * service_portal_blocks.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function service_portal_blocks_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = '优化流程清单';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_10';
  $fe_block_boxes->body = '<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/co0101">CO-01-01费用分配流程</a></p>
<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/fi0102">FI-01-02应收票据处理流程</a></p>
<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/fi0201">FI-02-01预付账款处理流程</a></p>
';

  $export['block_10'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = '优化流程清单-2';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_11';
  $fe_block_boxes->body = '<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/sd0101">SD-01-01销售订单创建流程</a></p>
<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/sd0106">SD-01-06有价值退货流程</a></p>
';

  $export['block_11'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = '优化流程清单-3';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_12';
  $fe_block_boxes->body = '<div class="content clearfix">
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/sd0101">SD-01-01销售订单创建流程</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/sd0106">SD-01-06有价值退货流程</a></p>
</div>
<p>&nbsp;</p>
';

  $export['block_12'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = '优化流程清单-4';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_13';
  $fe_block_boxes->body = '<div class="pane-content content">
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/pp0102">PP-01-02生产计划流程</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/pp0201">PP-02-01生产执行流程</a></p>
</div>
<p>&nbsp;</p>
';

  $export['block_13'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = '服务台管理';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_14';
  $fe_block_boxes->body = '<div class="pane-content content">
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/Servicedesk%20Worklist%20Pagecn">AMS 工作清单</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/Servicedesk%20Process%20Flow%20Pagecn">服务台流程</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/Servicedesk%20Etiquette%20Pagecn">礼貌用语</a></p>
</div>
<p>&nbsp;</p>
';

  $export['block_14'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = '常见问题解答';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_15';
  $fe_block_boxes->body = '<div class="pane-content content">
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/faq-pp">生产计划常见问题</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/faq-mm">物料管理常见问题</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/faq-sd">销售与分销常见问题</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/faq-fico">财务与成本常见问题</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/faq-abap">ABAP常见问题</a></p>
	<p><a href="http://landisgyr.cn.capgemini.com/zh-hans/faq-basis">BASIS常见问题</a></p>
</div>
';

  $export['block_15'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Banner Bottom';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_16';
  $fe_block_boxes->body = '<p><img alt="" src="/sites/landisgyr.cn.capgemini.com/files/ph_CE30CC.jpg" style="width: 100%;" /></p>
';

  $export['block_16'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Service Desk';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'service_desk';
  $fe_block_boxes->body = '<p><span style="font-size: 11px;"><strong>Tel: </strong>86-0512-88848551</span></p>
<p><span style="font-size: 11px;"><strong>Email:</strong><a href="mailto:ams.cn@capgemini.com">ams.cn@capgemini.com</a></span></p>
';

  $export['service_desk'] = $fe_block_boxes;

  return $export;
}
