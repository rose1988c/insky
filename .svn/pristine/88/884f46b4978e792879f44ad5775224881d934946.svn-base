<?php
class Me extends CI_Controller {
	public function inc()
	{
		$this->load->view('inc/index.tpl.php', array(
					'base'		=> $this->config->item('base_url'),
	    			'css'		=> $this->config->item('css_test'),
	    			'mytitle'	=> 'Welcome to see Me',
	    			'mytext'	=> "Hello, I'am 陈韵文, waiting for you!",
	    ));

	}


	public function index()
	{
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array($this->config->item('css')),
	    			'title'	    => 'Cat',
		);



		$this->load->view('index', array(
    			   'header'	    => $this->load->view('header.tpl.php', $header_data, TRUE),
				   'imgurl'		=> $this->config->item('base_url') . '/' . $this->config->item('img_big_logo'),
		 		   'oh_url'		=> $this->config->item('oh_url'),
	    ));

	}

	public function import () {

	}

}