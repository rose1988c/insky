<?php

define("db_users","cat_users");

class Cat_users extends CI_Controller {

//	function cat_add_user ($obj,$data) {
//		$obj->load->database();
//		$obj->db->insert('cat_users', $data);
//	}

	function cat_add_user ($data) {
		$this->load->database();

		$isexits = $this->cat_get_user($data['username']);

		if ($isexits) {
			$this->load->library('session');
			$this->session->set_userdata(array('username' => $data['username']));

			$data['ip'] = $this->session->userdata('ip_address');

			$this->db->insert( db_users, $data);
			return $isexits;
		} else {
			return false;
		}
	}

	function cat_user_login ($username, $password) {

		$this->load->database();
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get( db_users )->result();


		if (!is_array($query) || count($query) == 0) {
			 return false;
		} else {
			 $query = $query [0];
			 unset($query->password);
			 $this->load->library('session');
			 $this->session->set_userdata(array('username' => $username));
			 $this->session->set_userdata(array('user' => $query));

			 return true;
		}
	}


	function cat_get_user ($username) {

		$this->db->where('username', $username);
		$query = $this->db->get( db_users )->result();

		return empty($query);
	}



}