<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_Lib extends Flx_Secured_Lib
{
    function __construct ()
    {
      parent::__construct();
      log_message('debug', 'Users Lib loaded');
    }

  public function auth_form ($url = false, $view_data = array())
  {
    $auth_form = Form_Builder::factory('auth_form', $url);
    
    if ($auth_form->validate() == true)
    {
      $auth_result = $this->user->do_auth($auth_form->user_email, $auth_form->user_pass);
      if ($auth_result->has_error === true) $auth_form->add_error('auth_error', $auth_result->error_text); 
    }
    if ($this->input->is_ajax_request())
    {
      $auth_form->xhr_answer->redirect = sub_url('testing/session_test');
      $auth_form->draw_form();
    }
    return $auth_form->draw_form('_common/testing/forms/auth_form', $view_data);
  }
  
  public function reg_form ($url = false, $view_data = array())
  {
    $reg_form = Form_Builder::factory('reg_form', $url);
    
    if ($reg_form->validate() === true)
    {
      $reg_result = $this->user->add_user($reg_form->user_email, $reg_form->user_pass);
      if ($reg_result->has_error === true) $reg_form->add_error('reg_error', $reg_result->error_text); 
      else 
      {
        $reg_form->xhr_answer->view = '<a href="'.sub_url('testing/session_test/reg_user/'.$reg_result->token).'">Reg</a>';
        if ($this->input->is_ajax_request()) $reg_form->draw_form();
        else return $reg_form->xhr_answer->view;
      }
    }
    
    if ($this->input->is_ajax_request()) $reg_form->draw_form();
    else return $reg_form->draw_form('_common/testing/forms/reg_form', $view_data);
  }
  
  public function reg_user($token)
  {
    $reg_result = $this->user->reg_user($token);
    if ($reg_result->has_error === true)
    {
      return false;
    }
    else return true;
  }
}