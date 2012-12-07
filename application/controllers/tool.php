<?php

/*
 * mcc - tool.php
 *
 * Created on 2012-8-10 下午04:55:47
 * Created by cyw
 *
 */

class Tool extends CI_Controller {

	public function _init() {
		$this->load->helper('url_helper');
		$this->load->helper('url');
	    $this->load->database();
    	$this->load->library('session');
 	}

	public function index() {
	    
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array($this->config->item('css_cat_ibox'),$this->config->item('css_cat_oh_nav1')),
	    			   'js'		=> array(
										$this->config->item('jquery'),
										$this->config->item('js_cat_ibox'),
								    ),
	    			'title'	    => 'Cat-在线工具',
	    			 'desc'	    => 'Cat,Cat网站导航,最优秀的网站导航',
		);
		
		//session
		$this->load->library('session');
  		$auth = $this->session->userdata('username');


		$this->load->view('tool/index.tpl.php', array(
    			   'header'	    		=> $this->load->view('header.tpl.php', $header_data, TRUE),
					 'base'     		=> $this->config->item('base_url'),
				   'oh_url'				=> $this->config->item('oh_url'),
				 'cat_menu'	    		=> $this->load->view('layout/top.tpl.php', array('current' => 'Tools','base'=> $this->config->item('base_url'), 'auth' => $auth ), TRUE),
				
	    ));

	}

}