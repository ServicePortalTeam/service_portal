<?php

class ChartsOpenFlash extends ChartCanvas {

function set_data($rows, $x_labels) {
    
    $this->series = $rows;
    $this->x_labels = $x_labels;
}

/**
* @param $cid
*   cache_id from which cache to retrieve the data
*/
function get_data_from_cache($cid=null) {
  
  $cache = cache_get($cid);
  if (!$cache) {
    drupal_not_found();
    exit();
  }
  $canvas = $cache->data;
  
  if (empty($canvas) || !is_object($canvas) || 
      !is_array($canvas->series) || empty($canvas->type)) {
    drupal_not_found();
    exit();
  }
  
  $this->title = new stdClass();
  $this->title->text = $canvas->title;
  $this->title->style="font-size: 20px; color:#0000ff; font-family: Verdana; text-align: center;";

  $this->type = $canvas->type;

  $this->y_legend = new stdClass();  
  $this->y_legend->text = $canvas->y_legend;
  $this->y_legend->style = "{color: #736AFF; font-size: 12px;}";
  
  $y = new stdClass();
  $y->grid_colour = "#00ff00";
  $y->offset = 50;
  $this->y_axis = $y;
  
  $x = new stdClass();
  $x->colour = "#909090";
  $x->grid_colour="#00ff00";
  $x->labels->labels  = $canvas->x_labels;
  $this->x_axis = $x;
  
  $series_colors = ChartsOpenFlash::series_colors();
  
  /**
  * Initializing max_value with some really small value
  * and max_value with large value, respectively so that
  * they get thrown away at the very first comparision.
  */
  $max_value = -10e10; //some really small value
  $min_value = $canvas->y_min; //some really large value  

  $i=0; // for colours
  foreach ( $canvas->series as $key => $val ) {
    $obj = new stdClass();
    $val = $this->_preprocess_values($val);
    $obj->values = $val;
     // Determine max
     $arr_tmp_max = array_merge ($val, array($max_value));
     $arr_tmp_min = array_merge ($val, array($min_value));     
     $max_value = max($arr_tmp_max);
     $min_value = min($arr_tmp_min);
      if ($this->type == 'pie' ) {
        $obj->tip = '#label# #val# (#percent#)';
        $obj->{label-colour} = '#432BAF';        
      }    
    $obj->text = $key;
    $obj->alpha = .5;
    $obj->type = $canvas->type;
    $obj->colour = $series_colors[$i];
    $this->elements[] = $obj;
    $i++;
  }

  $y_step = abs(($max_value - $min_value)/10);
  
  $this->x_axis->{'3d'} = 5;
  $this->y_axis->max = $max_value + $max_value/10;
  if ($this->y_axis->max > 10) {
    $this->y_axis->max = (int) $this->y_axis->max;
  }
  $this->y_axis->min = $min_value;  
  if ($y_step > 5)  {
    $y_step = (int) $y_step;
  }
  $this->y_axis->steps = $y_step; 

}

/**
* Pie-chart has different format for $values array than bar chart etc. 
* This method deals with permutations across chart types. Sigh.
*
* <p> We also remove items with no label, while we are at it, since
* those can cause problems to Flash renderer.
*/
function _preprocess_values($values) {

  $labels = $this->x_axis->labels->labels;
  $i = 0;
  
  switch ($this->type) {
    case 'pie': 
      $new_vals = array();
      foreach ($values as $val) {
        if (!empty($labels[$i]) && $labels[$i] != 'null') { // An accidental empty label causes SWF to go nuts
          $obj = new stdClass();
          $obj->value = $val;
          $obj->label = $labels[$i];
          $arr = array('value'=>$val, 'label'=>$labels[$i]);
          $new_vals[] = $obj;
        }
        $i++;
      }
      return $new_vals;
    default: // Default action is just filtering values with nulled labels (leftovers from out joins)
      $new_vals = array(); $new_labels = array();
      foreach ($values as $val) {
        if (!empty($labels[$i]) && $labels[$i] != 'null') { // An accidental empty label causes SWF to go nuts
          $new_vals[] = $val;
          $new_labels[] = $labels[$i];
        }
        $i++;
      }
      $this->x_axis->labels->labels = $new_labels;
      return $new_vals;
  }

}

function get_chart() {
  
  
 $unique = chart_graphs_random_hash();
  // Make current object a StdClass() for easier de-serialization
  $arr = (array) $this; $generic = (object) $arr;
 cache_set( $unique, $generic, 'cache', time() + 30 ); //Keep for at least 30 seconds;
  
 $mod_path = drupal_get_path('module', $this->getModuleName());
 $openflash_swf_uri = base_path() . $mod_path . '/open-flash-chart.swf';
 
 $data_URI = base_path() . 'charts_openflash/data/' . $unique ;
 $data_URL = url($data_URI, array('absolute' => TRUE ) );
 
 /** For debugging 
 $ret = drupal_http_request( $data_URL ); 
 echo "<pre>".print_r ( $ret,true)."</pre>";
 exit();
 **/
  
 $swfobj_mod_path = drupal_get_path('module', 'swfobject_api');
 $swfobj_js = $swfobj_mod_path . '/swfobject.js';
 $expressInst =  base_path() . $swfobj_mod_path . '/expressInstall.swf'; 
  
 $chart_div_id = "drp_charts_graphs_" . $this->getUnique_ID(); 
 
 drupal_add_js( $swfobj_js,1 );
  
return <<<HTML

<script type="text/javascript">
swfobject.embedSWF(
  "${openflash_swf_uri}", "${chart_div_id}", "$this->width", "$this->height",
  "9.0.0", "${expressInst}",
  {"data-file":"$data_URI"}
  );
</script>

<div id="${chart_div_id}"></div>

HTML;

}


}