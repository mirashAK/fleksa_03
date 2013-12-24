<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Flx_User_Lib
{
  public $user_token = null;
  public $user_ip = null;
  public $user_last_activity = null;
  
  public function __construct()
  {
    $this->load->model('core/flx_session_mdl', 'user_session');
    $this->load->model('core/flx_user_mdl', 'flx_user_mdl');
    $this->_set_values();
     var_export($this->flx_user_mdl->get_public_users_table($this));
  }
  
  public function do_auth ($email, $pass)
  {
    $pass = $this->_encrypt_pass($pass);
    $new_token = $this->flx_user_mdl->do_auth($this, $email, $pass);
    if ($this->flx_user_mdl->check_error($new_token, 'flx_do_auth') == true)
    {
      $this->user_session->sess_token = $new_token;
      $this->input->set_cookie('user_token', $new_token, 31536000);
      $this->_set_values();
      return new Safe_Class(array('has_error'=>false));
    }
    else return new Safe_Class(array('has_error'=>true, 'error_code'=>$new_token, 'error_text'=>$this->flx_user_mdl->get_error_text($new_token, 'flx_do_auth')));
  }
  
  public function add_user ($email, $pass, $login = '', $user_data = array())
  {
    $pass = $this->_encrypt_pass($pass);
    $user_data = $this->encrypt->encode(json_encode($user_data));
    $token = $this->flx_user_mdl->add_user($email, $pass, $login, $user_data);
    if ($this->flx_user_mdl->check_error($token, 'flx_add_user') == true) return new Safe_Class(array('has_error'=>false, 'token'=>$token));
    else return new Safe_Class(array('has_error'=>true, 'error_code'=>$token, 'error_text'=>$this->flx_user_mdl->get_error_text($token, 'flx_add_user')));
  }
  
  public function reg_user ($token)
  {
    if (!empty($token))
    {
      $result = $this->flx_user_mdl->reg_user($this, $token);
      if ($this->flx_user_mdl->check_error($result, 'flx_reg_user') == true)
      {
        $this->user_session->sess_token = $result['user_token'];
        $this->input->set_cookie('user_token', $result['user_token'], 31536000);
        $this->_set_values();
        
        $public_user_table = Form_Builder::factory('public_user_table');
        $public_user_table->form_data = $this->flx_user_mdl->get_public_users_table($this);
        $public_user_table->u_f_user_id = $this->user_id;
        $this->flx_user_mdl->save_table($this, 'public_users', $public_user_table);
        $this->user_public = new Safe_Class($this->flx_user_mdl->get_public_user_data($this));
        
        return new Safe_Class(array('has_error'=>false, 'user_data'=>json_decode($this->encrypt->decode($result['user_data']),true)));
      }
      else return new Safe_Class(array('has_error'=>true, 'error_code'=>$result, 'error_text'=>$this->flx_user_mdl->get_error_text($result, 'flx_reg_user')));
    }
    else return false;
  }
  
  public function logout ()
  {
    $new_token = $this->flx_user_mdl->logout($this);
    if (!empty($new_token))
    {
      $this->user_session->sess_token = $new_token;
      $this->input->set_cookie('user_token', $new_token, 31536000);
      $this->_set_values();
      return true;
    }
    else return false;
  }
  
  public function token_passwd ($email)
  {
    $new_token = $this->flx_user_mdl->token_passwd($email);
    if ($this->flx_user_mdl->check_error($new_token, 'flx_token_passwd') == true)
    {
      return $new_token;
    }
    else return new Safe_Class(array('has_error'=>true, 'error_code'=>$new_token, 'error_text'=>$this->flx_user_mdl->get_error_text($new_token, 'flx_token_passwd')));
  }
  
  public function reset_passwd ($token, $new_passwd)
  {
    if (!empty($token) && !empty($new_passwd))
    {
      $new_passwd = $this->_encrypt_pass($new_passwd);
      $new_token = $this->flx_user_mdl->reset_passwd($this, $token, $new_passwd);
      if ($this->flx_user_mdl->check_error($new_token, 'flx_reset_passwd') == true)
      {
        $this->user_session->sess_token = $new_token;
        $this->input->set_cookie('user_token', $new_token, 31536000);
        $this->_set_values();
        return true;
      }
      else return new Safe_Class(array('has_error'=>true, 'error_code'=>$new_token, 'error_text'=>$this->flx_user_mdl->get_error_text($new_token, 'flx_reset_passwd')));
    }
    else return false;
  }
  
  protected function _encrypt_pass ($passwd)
  {
    return $this->encrypt->sha1($passwd);
  }
  
  protected function _set_values()
  { 
    $result = $this->user_session->get_user();

    if ($this->user_session->sess_status !== -1)
      foreach ($result as $key=>$value)
      {
        if ($key!=='last_ip') $this->$key = $value;
        if ($key=='user_id') $this->$key = (int)$value;
        if ($key=='reg_date') $this->$key = $value;
      }
    $this->user_token = $this->user_session->sess_token;
    $this->user_ip = $this->user_session->sess_ip;
    $this->user_last_activity = $this->user_session->sess_last_activity;
    $this->user_public = new Safe_Class($this->flx_user_mdl->get_public_user_data($this));
    unset($result);
  }
  
  /**
    * __get
    *
    * Allows models to access CI's loaded classes using the same
    * syntax as controllers.
    *
    * @param   string
    * @access private
    */
  function __get($key)
  {
      $CI =& get_instance();
      return $CI->$key;
  }
  
}