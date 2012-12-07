<?php
class Manage extends CI_Controller {
	public function __construct() {

		parent::__construct();

		$this->load->library('session');
		$this->load->database();
 	}

 	//manage
	public function index() {

		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array(
										$this->config->item('css_cat_manage_reset'),
										$this->config->item('css_cat_manage_style'),
										$this->config->item('css_cat_manage_invalid')
									),
	    			   'js'		=> array(
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-Admin',
	    			 'desc'	    => '',
		);

		//session
		$this->load->library('session');
  		$auth = $this->session->userdata('username');

		$this->load->view('manage/index.tpl.php', array(
    			   'header'	    		=> $this->load->view('header.tpl.php', $header_data, TRUE),
					 'auth'				=> $auth,
					 'base'     		=> $this->config->item('base_url'),
				   'oh_url'				=> $this->config->item('oh_url'),

	    ));

	}

	//后台登录
	public function login() {
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array(
										$this->config->item('css_cat_manage_reset'),
										$this->config->item('css_cat_manage_style'),
										$this->config->item('css_cat_manage_invalid')
									),
	    			   'js'		=> array(
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-Admin',
	    			 'desc'	    => '',
		);

		//session
		$this->load->library('session');
  		$auth = $this->session->userdata('username');

		$this->load->view('manage/login.tpl.php', array(
    			   'header'	    		=> $this->load->view('header.tpl.php', $header_data, TRUE),
					 'auth'				=> $auth,
					 'base'     		=> $this->config->item('base_url'),
				   'oh_url'				=> $this->config->item('oh_url'),

	    ));
	}
}