<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Xhr_Answer  
{
  public $answer_data = array();
  private $is_sent = false;

  public function __construct()
  {
    $this->answer_data['valid'] = true;
    $this->answer_data['errors'] = array();
    $this->answer_data['view'] = false;
    $this->answer_data['redirect']= false;
    $this->answer_data['update']= false;
    $this->answer_data['message']= false;
  }
  
  public function send($is_exit = false)
  {
    if ($this->is_sent === false)
    {
        $json_data = json_encode($this->answer_data);
        $json_data_length = strlen($json_data);

        if (ob_get_length()) ob_end_clean();
        header("Connection: close\r\n");
        header("Content-Encoding: utf-8\r\n");
        ignore_user_abort(true); // optional
        ob_start();
        echo($json_data);
        $size = ob_get_length();
        header("Content-Length: {$json_data_length}");
        ob_end_flush(); // Strange behaviour, will not work
        flush(); // Unless both are called !
        $this->is_sent = true;
    }
  }
  
  public function __set($name, $value)
  {
    $this->answer_data[$name] = $value;
  }
  
  public function __get($name)
  {
    if (array_key_exists($name, $this->answer_data)) return $this->answer_data[$name];
    else return false;
  }
    
}