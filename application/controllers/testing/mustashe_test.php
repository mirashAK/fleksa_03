<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mustashe_Test extends Test_Controller {

    function __construct ()
    {
      parent::__construct();
      $this->load->library('testing/users_lib', array(), 'users_lib');
      $this->lang->load('test', lang());
    }
    
	public function index()
	{
      $this->view_data['name'] = 'Петя';
      $this->view_data['value']  = 10000;
      $this->view_data['in_ca'] = true;
      $this->view_data['taxed_value'] = 4000;
      $this->view_data['site_body'] = $this->m_parse_in('_common/testing/mustashe_test_view');
      $this->view_data['taxed_value'] = '';
      $this->parse_out('test_template');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */