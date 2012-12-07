<?php

/*
 *  cat - cat.php  旧收藏夹
 *
 *  Created on 2012-3-8 下午08:22:14
 *  Created by cyw
 *
 */

class Cat extends CI_Controller {

	public function _init() {

 	}
	public function index()
	{

		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array($this->config->item('css_cat_old_favrites')),
	    			   'js'		=> array(
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-Favorites',
	    			 'desc'	    => 'Cat,Cat网站导航,最优秀的网站导航',
		);

		$this->load->view('six/index.tpl.php', array(
    			   'header'	    => $this->load->view('header.tpl.php', $header_data, TRUE),
					 'base'     => $this->config->item('base_url'),
				   'oh_url'		=> $this->config->item('oh_url'),
	    ));

	}

}


?>