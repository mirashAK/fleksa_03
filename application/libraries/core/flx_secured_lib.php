<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Flx_Secured_Lib /*extends Front_Controller*/
{
  protected $CI = null;
  protected $xhr_answer = null;
  protected $is_xhr = false;
  
  protected $check_arr = array();

  public function __construct()
  {
    $this->CI =& get_instance();
//     
//     if ($this->CI->input->is_ajax_request() === true)
//     {
//       $this->is_xhr = true;
// //       $this->xhr_answer = $this->CI->xhr_answer;
//       
//     }
//     $this->user = $this->CI->user;
    log_message('debug', 'Flx Secured Lib loaded');
  }
  
  /**
    * __get
    *
    * Allows to access CI's loaded classes using the same
    * syntax as controllers.
    *
    * @param   string
    * @access private
    */
  public function __get($key)
  {
      return $this->CI->$key;
  }
    
    
  public function __call ( $method, $argv )
  {
    if (method_exists($this, $method)) 
    {
      if (!empty($this->check_arr))
      {
        foreach ($this->check_arr as $check_method=>$methods_arr)
        {
          if (in_array($method, $methods_arr) && (method_exists($this, $check_method))) 
          {
            if (call_user_func(array($this, $check_method)) === true) break;
            else return false;
          }
        }
        unset($check_method); unset($methods_arr); 
      }
      return call_user_func_array(array($this, $method), $argv);
    
//       if ($this->is_xhr == true)
//       {
//         if (true === $this->xhr_check($method, $argv)) return call_user_func_array(array($this, $method), $argv);
//       }
//       else 
//       {
//         if (true === $this->check($method, $argv)) return call_user_func_array(array($this, $method), $argv);
//       }
    }
    
    return false;
  }
  
}