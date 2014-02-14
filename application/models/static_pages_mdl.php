<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_Pages_mdl extends Flx_Model
{  
  public function get_static_page($page_id)
  {  
    return $this->row_array($this->user, 'public_static_pages', 'static_page_id='.$page_id);
  }
  
  public function get_static_pages($page = 1, $per_page = 1, $filter = '', $search = '', $sort = '', $order = '')
  {  
    return $this->full_objects ($this->user, 'public_static_pages', $where = '', $order = 'static_page_id DESC', $limit = '3');
  }
  
  public function get_total_spages()
  {
    $result = $this->get_table_signature($this->user, 'public_static_pages');
    var_export($result);
  }
}