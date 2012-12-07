<?php

/*
 *  cat - account.php
 *
 *  Created on 2012-2-24 下午05:03:40
 *  Created by cyw
 *
 */

class Account extends CI_Controller {

	public function index() {

		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array($this->config->item('css_cat_oh')),
	    			   'js'		=> array(
										$this->config->item('js_cat_oh'),
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-Favorites',
	    			 'desc'	    => 'Cat,Cat网站导航,最优秀的网站导航',
		);

		$this->load->view('favorites/index.tpl.php', array(
    			   'header'	    => $this->load->view('header.tpl.php', $header_data, TRUE),
	    ));

	}

	public function login() {

		$this->load->helper('url_helper');
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array(
										$this->config->item('css'),
										$this->config->item('css_cat_account'),
									),
	    			   'js'		=> array(
										$this->config->item('jquery')
								    ),
	    			'title'	    => 'Cat-Login',
	    			 'desc'	    => 'Cat,登录,Login',
		);

		$this->load->library('session');
  		$auth = $this->session->userdata('username');
		$fromurl = $this->config->item('base_url') .$this->session->userdata('from');

  		if (!empty($auth)) {
			redirect($this->config->item('oh_url'));
  		}

		$msg = false;
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

			$username = trim ( $_POST['username'] );
			$password = trim ( $_POST['password'] );

			if (!empty($username) && !empty($password)) {

				$this->load->model('cat_users');
				$exits = $this->cat_users->cat_user_login($username,$password);

				if ($exits == false) {
					$msg = '用户名或密码错误';
				} else {
					if (!empty($fromurl)) {
						redirect($fromurl);
					} else {
						redirect($this->config->item('oh_url'));
					}
				}

			}

		}


		$this->load->view('account/login.tpl.php', array(
    			   'header'	    => $this->load->view('header.tpl.php', $header_data, TRUE),
	     			 'logo'	    => $this->load->view('logo_center_cat.tpl.php', array('base' => $this->config->item('base_url') ,'imgurl' => $this->config->item('base_url') . '/' . $this->config->item('img_big_logo') ) ,true),
					  'msg'		=> $msg
	    ));



	}


	public function register() {

		$this->load->helper('url_helper');
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
    	  			  'css'		=> array(
								$this->config->item('css'),
								$this->config->item('css_cat_account'),
							        ),
	    			   'js'		=> array(
										$this->config->item('jquery')
								    ),
	    			'title'	    => 'Cat-Regiter',
	    			 'desc'	    => 'Cat,注册,register',
		);

		$this->load->library('session');
  		$auth = $this->session->userdata('username');

  		if (!empty($auth)) {
			redirect($this->config->item('oh_url'));
  		}


		$msg = false;

		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

			$username = trim ( $_POST['username'] );
			$password = trim ( $_POST['password'] );

			if (!empty($username) && !empty($password)) {

				$data = array (
						'username'		=> $username,
						'password'		=> $password,
						'created_at'	=> date('Y-m-d H:i:s',time())
				);

				$this->load->model('cat_users');
				$exits = $this->cat_users->cat_add_user($data);

				if ($exits == false) {
					$msg = '用户名已存在！';
				}
				else {
					redirect($this->config->item('oh_url'));
				}

			}

		}

		$this->load->view('account/register.tpl.php', array(
    			   'header'	    => $this->load->view('header.tpl.php', $header_data, TRUE),
					 'logo'	    => $this->load->view('logo_center_cat.tpl.php', array('base' => $this->config->item('base_url') ,'imgurl' => $this->config->item('base_url') . '/' . $this->config->item('img_big_logo') ) ,true),
					  'msg'		=> $msg
	    ));
	}

	public function is_login() {

	}

	public function loginout(){

		$username = trim ( $_POST['username'] );

		$this->load->library('session');
  		$this->session->unset_userdata(array('username' => $username));

  		echo json_encode('true');
  		return;
	}


}