<?php

/*
 *  cat - oh.php  导航&收藏夹
 *
 *
 *  Created on 2012-2-24 上午11:53:56
 *  Created by cyw
 *
 */

class Other extends CI_Controller {

	public function _init() {
		$this->load->helper('url_helper');
		$this->load->helper('url');
	    $this->load->database();
    	$this->load->library('session');
 	}

	public function color()
	{
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array(),
	    			   'js'		=> array(
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-RGB颜色查询对照表',
	    			 'desc'	    => 'Cat,Cat网站导航,最优秀的网站导航',
		);

		$this->load->view('other/color.tpl.php', array(
    			   'header'	    		=> $this->load->view('header.tpl.php', $header_data, TRUE),
					 'base'     		=> $this->config->item('base_url'),
				   'oh_url'				=> $this->config->item('oh_url'),
	    ));

	}

	public function index()
	{
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array(),
	    			   'js'		=> array(
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-各种所需',
	    			 'desc'	    => 'Cat,Cat网站导航,最优秀的网站导航',
		);

		$this->load->view('other/index.tpl.php', array(
    			   'header'	    		=> $this->load->view('header.tpl.php', $header_data, TRUE),
					 'base'     		=> $this->config->item('base_url'),
				   'oh_url'				=> $this->config->item('oh_url'),
	    ));

	}


}