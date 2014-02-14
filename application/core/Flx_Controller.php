<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

  require_once APPPATH.'libraries/common/safe_class.php';
  require_once APPPATH.'libraries/common/xhr_answer.php';
  
class Flx_Controller extends CI_Controller 
{
  public $view_data = array();
  protected $Mustashe;
  
  function __construct ($db_alias = 'default')
  {
    parent::__construct();
    $this->view_data['scripts'] = array();
    $this->view_data['styles'] = array();
    
    $this->load->database($db_alias);
    $this->load->library('core/flx_user_lib', array(), 'user');
    $this->load->library('core/flx_links_lib', array(), 'flx_links_lib');
    $this->xhr_answer = new Xhr_Answer();
    $this->set_language(isset($this->user->user_public->u_lang)?$this->user->user_public->u_lang:null);
    $this->view_data['lang'] = lang();
    
    $this->view_data['base_url'] = base_url();
    $this->view_data['sub_url'] = sub_url();
    $this->view_data['res_url'] = res_url();
      
    $this->view_data['res_js'] = res_url('resources/js/');
    $this->view_data['res_css'] = res_url('resources/css/');
    $this->view_data['res_img'] = res_url('resources/img/');
    $this->view_data['res_require_js'] = res_url('resources/js/vendor/require.js');
    $this->view_data['res_btstp'] = sub_url('resources/css/vendor/bootstrap', false);
    $this->view_data['res_kickstart'] = sub_url('resources/css/vendor/kickstart', false);
    
    $this->Mustashe = new Mustache_Engine;
  }
  
  protected function parse_in ($view_name, $custom_data = null)
  {
    if (!empty($this->parser))
      if (!empty($custom_data)) return $this->parser->parse($view_name, $custom_data, TRUE);
      else return $this->parser->parse($view_name, $this->view_data, TRUE);
  }

  protected function m_parse_in ($view_name, $custom_data = null)
  {
      if (!empty($custom_data))
      {
          $view = $this->load->view($view_name, $custom_data, true);
          return $this->Mustashe->render($view, $custom_data);
      }
      else
      {
          $view = $this->load->view($view_name, $this->view_data, true);
          return $this->Mustashe->render($view, $this->view_data);
      }
  }
  
  protected function parse_out ($view_name)
  {
    if (!empty($this->parser))
      $this->parser->parse($view_name, $this->view_data);
  }

  protected function set_language ($user_lang = null)
  {
    $this->config->load('languages');
    $lang = '';
    if (empty($user_lang))
    {
      if (empty($this->uri->lang))
      {
        if ($this->config->item('lang_check_browser')) $lang =  get_browser_lang();
      } 
      else $lang = $this->uri->lang;
    
      if (!in_array($lang, $this->config->item('lang_supported')))
      {
        $ru_regions = $this->config->item('lang_ru_region');
        if (!empty($ru_regions) && in_array($lang, $ru_regions)) $lang = 'ru';
        else $lang = $this->config->item('language');
      }
      $this->config->set_item('language', $lang);
    
      if ($this->config->item('lang_redirect') && (empty($this->uri->lang) || $lang !== $this->uri->lang))
        redirect(sub_url((!$this->config->item('lang_url_include')?$lang.'/':'').uri_string()), 'refresh');
    }
    else
    {
    $this->config->set_item('language', $user_lang);
    
    if ($this->config->item('lang_redirect') && (empty($this->uri->lang) || $user_lang !== $this->uri->lang))
        redirect(sub_url((!$this->config->item('lang_url_include')?$user_lang.'/':'').uri_string()), 'refresh');
    }
  }
  
  protected function add_require_js($config_name, $trigger_params = array())
  {
    if (!empty($this->view_data['res_require_js']))
    {
      if (!empty($trigger_params))
      {  
        $script = '<script type="text/javascript">';
        foreach($trigger_params as $var=>$value)
        {
          if (gettype($value) == 'string') $value = "'$value'";
          $script.= "var $var = $value;";
        }
        $script.= '</script>';
      }
      $this->view_data['scripts'][] = array('script'=>$script);
      $this->view_data['scripts'][] = array('script'=>'<script type="text/javascript" src="'.$this->view_data['res_require_js'].'" data-main="'.$this->view_data['res_js'].'/'.$config_name.'"></script>');
    }
  }
  
  protected function add_script($script_name, $custom_path = false, $custom_attrs = '')
  {
    if (!empty($this->view_data['res_js']) && ($custom_path === false)) $script_name = $this->view_data['res_js'].'/'.trim( $script_name,'/');
    else $script_name = $custom_path.'/'.trim( $script_name,'/');
    $this->view_data['scripts'][] = array('script'=>'<script type="text/javascript" src="'.$script_name.'" '.$custom_attrs.'></script>');
  }
  
  protected function add_css($css_name, $custom_path = false, $media = 'all')
  {
    if (!empty($this->view_data['res_css']) && ($custom_path === false)) $css_name = $this->view_data['res_css'].'/'.trim( $css_name, '/');
    else $css_name = $custom_path.'/'.trim( $css_name, '/');
    $this->view_data['styles'][] = array('style'=>'<link rel="stylesheet" type="text/css" href="'.$css_name.'" media="'.$media.'">');
  }

  protected function redirect($url, $type = 'refresh')
  {
    $this->user_session->save();
    //$this->user->save_public(); //TODO
    redirect($url, $type);
  }
}

  require_once APPPATH.'controllers/core/front_controller.php';
  require_once APPPATH.'controllers/core/test_controller.php';

  require_once APPPATH.'libraries/core/flx_secured_lib.php';
  require_once APPPATH.'libraries/core/flx_form_builder_lib.php';
  
  require_once APPPATH.'third_party/Mustache/Autoloader.php';
  Mustache_Autoloader::register();

/* End of file Flx_Controller.php */
/* Location: ./application/core/Flx_Controller.php */