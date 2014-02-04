<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requirejs_Test extends Test_Controller {

    function __construct ()
    {
      parent::__construct();
      $this->load->library('testing/users_lib', array(), 'users_lib');
      $this->lang->load('test', lang());
    }
    
	public function index()
	{
      //$this->add_css('kickstart.css', $this->view_data['res_kickstart']);
      //$this->add_css('test/kickstart.css');
      //$this->add_script('vendor/kickstart.js');
      
      $this->add_script('vendor/require.js', false, 'data-main="'.$this->view_data['res_js'].'/test/rqjs_list_main.js"');
      
      $this->view_data['site_title'] = 'Require.js';
      $this->view_data['site_body'] = $this->parse_in('_common/testing/requirejs_test_view');
      $this->parse_out('test_template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */