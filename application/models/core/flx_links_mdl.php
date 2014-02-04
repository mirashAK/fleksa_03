<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flx_links_mdl extends Flx_Model
{  
  public function get_link_by_alias(&$user, $link_alias)
  {
    return $this->row_object ($user, 'public_menus', "`menu_item_name` LIKE '$link_alias'");
  }
}