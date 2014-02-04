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
      //$this->add_css('kickstart.css', $this->view_data['res_kickstart']);
      $this->add_css('base.css', $this->view_data['res_js'].'/test/canjs_todo/todomvc-common');

      //$this->add_script('vendor/can.custom.js');
      
      
      
      //$this->add_script('vendor/jquery.hashchange.min.js');
      $this->add_script('vendor/require.js', false, 'data-main="'.$this->view_data['res_js'].'/test/canjs_todo/app"');
      
      //$this->add_script('core/handler_forms.js');
      //$this->add_script('test/forms.js');
      
      $this->add_script('base.js', $this->view_data['res_js'].'/test/canjs_todo/todomvc-common');

      $this->view_data['site_title'] = 'CanJS + RequireJS • TodoMVC';
      $this->view_data['site_body'] = $this->parse_in('_common/testing/canjs_test_view');
      $this->parse_out('test_canjs_template');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */