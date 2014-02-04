<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session_Test extends Test_Controller {

    function __construct ()
    {
      parent::__construct();
      $this->load->library('testing/users_lib', array(), 'users_lib');
      $this->lang->load('test', lang());
    }
    
	public function index()
	{
      $this->view_data['auth_form'] = $this->users_lib->auth_form(sub_url('testing/session_test/auth'));
      $this->view_data['reg_form'] = $this->users_lib->reg_form(sub_url('testing/session_test/add_user'));
      
      if ($this->user_session->get_params)
      {
        $this->view_data['get_params'] = $this->user_session->get_params;
        $this->view_data['reg_form'] = $this->parse_in('_common/testing/forms/success_view');
      }
      
      $this->view_data['user_token'] = $this->user->user_token;
      $this->view_data['user_ip'] = $this->user->user_ip;
      $this->view_data['sess_last_activity'] = $this->user_session->sess_last_activity;
      $this->view_data['user_dump'] = var_export($this->user, true);
      $this->view_data['session_dump'] = var_export($this->user_session->get_full_sess_data(), true);

      $this->add_css('test/standard.css');
      
      $this->add_script('vendor/jquery.hashchange.min.js');
      //$this->add_script('vendor/require.js', false, 'data-main="'.$this->view_data['res_js'].'/test/rqjs_config.js"');
      $this->add_script('vendor/require.js');
      $this->add_script('test/rqjs_config.js');
      $this->add_script('test/rqjs_forms.js');
      $this->add_script('test/rqjs_math.js');

      $this->view_data['site_title'] = $this->lang->line('test_page_title');
      $this->view_data['site_body'] = $this->parse_in('_common/testing/session_test_view');
      $this->parse_out('test_template');
	}
	
	public function auth()
    {
      $this->users_lib->auth_form(sub_url('testing/session_test/auth'));
    }
    
    public function add_user()
    {
      $this->users_lib->reg_form(sub_url('testing/session_test/add_user'));
    }
    
    public function reg_user($token = null)
    {
      if (!empty($token))
      {
        $result = $this->users_lib->reg_user($token);
        if ($result === true) redirect(sub_url('testing/session_test'), 'refresh');
      }
    }
    
    public function logout()
    {
      if ($this->user->logout() == true) redirect(sub_url('testing/session_test'), 'refresh');
    }
}