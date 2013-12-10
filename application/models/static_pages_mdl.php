<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_Pages_mdl extends Flx_Model
{  
  public function get_static_page($page_id)
  {  
    return $this->row_array($this->user, 'public_static_pages', 'static_page_id='.$page_id);
  }
  
}