<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Класс для обеспечения работы с системой меню
class Flx_links_Lib
{

  function __construct()
  {
    $this->load->model('core/flx_links_mdl', 'model');
    //$this->lang->load('links', lang());
  }
  
  /**
  * __get
  *
  * Allows models to access CI's loaded classes using the same
  * syntax as controllers.
  *
  * @param   string
  * @access private
  */
  function __get($key)
  {
      $CI =& get_instance();
      return $CI->$key;
  }

  // ----------------------------------- Create URL`s --------------------------------------- //
  public function base_link($alias = null, $include_lang = true)
  {
    if (!empty($alias))
    {
      $result = $this->model->get_link_by_alias($this->user, $alias);
      if (!empty($result->value->menu_item_link)) return $this->config->base_url($result->value->menu_item_link, $include_lang);
    }
    return $this->config->base_url('', $include_lang);
  }
  
  public function sub_link($alias = null, $include_lang = true)
  {
    if (!empty($alias))
    {
      $result = $this->model->get_link_by_alias($this->user, $alias);
      if (!empty($result->value->menu_item_link)) return $this->config->sub_url($result->value->menu_item_link, $include_lang);
    }
    return $this->config->sub_url('', $include_lang);
  }
  // ----------------------------------- Create URL`s --------------------------------------- //
 
  
}