<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kickstart_Test extends Test_Controller {

    function __construct ()
    {
      parent::__construct();
      $this->load->library('testing/users_lib', array(), 'users_lib');
      $this->lang->load('test', lang());
    }
    
	public function index()
	{
      $this->add_css('kickstart.css', $this->view_data['res_kickstart']);
      $this->add_css('test/kickstart.css');
      
      //$this->add_script('vendor/jquery.min.js');
      $this->add_script('vendor/can.custom.js');
      $this->add_script('vendor/kickstart.js');
      $this->add_script('core/handler_forms.js');
      $this->add_script('test/forms.js');
      $this->add_script('test/kickstart.js');
      
      $this->view_data['site_title'] = 'HTML KickStart Elements';
      $this->view_data['site_body'] = $this->parse_in('_common/testing/kickstart_test_view');
      $this->parse_out('test_template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */