<?php

/*
 *  cat - help.php
 *
 *  Created on 2012-3-1 下午10:02:09
 *  Created by cyw
 *
 */

class Help extends CI_Controller {

	function __construct() {
	    parent::Controller();
	    $this->load->helper('url');
	    $this->load->database();
	}

	public function index()
	{
		$this->load->view('help/help.tpl.php');
	}

	private function help (){

		//is_login
		$this->load->helper('url_helper');
		$auth = is_login_on ($this);

		//load model
		$this->load->model('cat_favorites');
		$this->cat_favorites->cat_insert_favorites( array (
						'title' 		=> '',
						'url'			=> '',
						'created_at'	=> date('Y-m-d H:i:s',time())

		) );

		//load session
		$this->load->library('session');
		$this->session->set_userdata(array('username',''));
  		$auth = $this->session->userdata('username');

  		//$_GET
  		parse_str($_SERVER['QUERY_STRING'], $getparam);//$getparam
	}

}
?>