<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_Secured_Lib extends Flx_Secured_Lib
{
  function __construct ()
  {
    parent::__construct();
    log_message('debug', 'Test Secured Lib loaded');
  }
  
  protected $check_arr = array
  (
    'check_user'=>array('get_user_info'),
    'check_user_group'=>array('get_other_user_info'),
    'check_custom'=>array('get_static_page')
  );
  
  protected function check_user()
  {
      return false;
  }
  
  protected function check_user_group()
  {
      return true;
  }
  
  protected function check_custom()
  {
      return false;
  }
  
  
  
  protected function get_user_info()
  {
    return 'get_user_info';
  }
  
  protected function get_other_user_info()
  {
    return 'get_other_user_info';
  }
  
  protected function get_static_page()
  {
    return 'get_static_page';
  }
  
  public function get_some_info()
  {
    return 'get_some_info';
  }
}