<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Canjs_Test extends Test_Controller {

    function __construct ()
    {
      parent::__construct();
      $this->load->library('testing/users_lib', array(), 'users_lib');
      $this->lang->load('test', lang());
    }
    
	public function index()
	{
      $this->add_css('test/bootstrap.min.css');
      $this->add_css('test/standard.css');
      $this->add_script('core/jquery.min.js');
      $this->add_script('core/can.custom.js');
      $this->add_script('core/handler_forms.js');
      $this->add_script('test/forms.js');
      $this->view_data['site_title'] = $this->lang->line('test_page_title');
      $this->view_data['site_body'] = $this->parse_in('_common/testing/canjs_test_view');
      $this->parse_out('test_template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */