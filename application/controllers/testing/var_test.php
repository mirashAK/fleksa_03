<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Var_Test extends Test_Controller {

	public function index()
	{
      $this->view_data['uri_lang'] = $this->uri->lang;
      $this->view_data['lang'] = lang();
      
      $this->lang->load('test', $this->config->item('language'));
      $this->lang->load('test', 'en');
      $this->lang->load('test', 'ru');
      $this->view_data['test_email_missing'] = $this->lang->line('test_email_missing'); 
      $this->view_data['en_test_email_missing'] = $this->lang->line('test_email_missing', 'en'); 
      $this->view_data['uk_test_email_missing'] = $this->lang->line('test_email_missing', 'uk'); 
      $this->view_data['ru_test_email_missing'] = $this->lang->line('test_email_missing', 'ru'); 
      
      $this->view_data['test_arr'] = array ( 'first' => 'Работа с задачами', 'second' => 'в вашей команде', 'third' => 'никогда не была', 'fourth' => 'такой простой');
      
      $this->add_script('vendor/jquery.min.js');
      $this->add_css('test/standard.css');
      $this->view_data['site_title'] = $this->lang->line('test_page_title');
      $this->view_data['site_body'] = $this->parse_in('_common/testing/var_test_view');
      $this->parse_out('test_template');
	}
}