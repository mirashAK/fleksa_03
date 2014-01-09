<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lib_Test extends Test_Controller
{ 

  function __construct ()
  {
    parent::__construct();
    $this->load->library('testing/users_lib', array(), 'users_lib');
    $this->load->library('testing/test_secured_lib', array(), 'test_secured_lib');
    $this->lang->load('test', lang());
  }
  
  public function index()
  {
      $this->view_data['get_user_info'] = var_export($this->test_secured_lib->get_user_info(), true);
      $this->view_data['get_other_user_info'] = var_export($this->test_secured_lib->get_other_user_info(), true);
      $this->view_data['get_static_page'] = var_export($this->test_secured_lib->get_static_page(), true);
      $this->view_data['get_some_info'] = var_export($this->test_secured_lib->get_some_info(), true);
      
      $this->add_css('test/standard.css');
      $this->view_data['site_title'] = $this->lang->line('test_page_title');
      $this->view_data['site_body'] = $this->parse_in('_common/testing/lib_test_view');
      $this->parse_out('test_template');
  }
  
}