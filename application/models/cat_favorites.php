<?php

define("DB_CAT_FAVORITES","cat_favorites");
define("DB_CAT_FAVORITES_TYPE","cat_favorites_type");

class Cat_favorites extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->library('session');
		$this->load->database();
 	}

	function cat_get_favorites ($query = false, $limt = false) {
		$this->load->database();

		if ($query != false && is_array($query)) {
			foreach ($query as $key => $value) {
				$this->db->where($key, $value);
			}
		}

		if ($limt === false) {
			$query = $this->db->get('cat_favorites')->result();
		} else {
			$query = $this->db->get('cat_favorites', $limt)->result();
		}

		return $query;
	}

	function cat_get_favorites_page ($limt, $offset, $where = false) {

		$this->load->database();

		if ($where !== false && is_array($where)) {
			foreach ($where as $key => $value) {
				$this->db->where( $key . ' !=', $value);
				$this->db->where( $key . ' !=', $value);
			}
		}
		$this->db->order_by('created_at', 'desc');
		$query = $this->db->get('cat_favorites',$limt,$offset)->result();
		return $query;
	}

	function cat_insert_favorites ($data) {

		if (is_array($data)) {

		 $this->load->library('session');
		 $user = $this->session->userdata('user');

		 $data['user_id'] = $user->user_id;

		 $this->load->database();

		 $cat_favorite = $this->db->insert( DB_CAT_FAVORITES, $data);
		 return $cat_favorite;

		}
	}

	/**
	 * -----type-------
	 */
	function cat_insert_favorites_type($data){
		if (is_array($data)) {

			//是否重复
			$query = $this->cat_get_favorites_type(array ('name' => $data['name']) );
			if (is_array($query) && !empty($query)){
				return false;
			}
			$user = $this->session->userdata('user');
			$data['user_id'] = $user->user_id;
			$result = $this->db->insert( DB_CAT_FAVORITES_TYPE, $data);
		 	return $result;
		}
	}

	function cat_get_favorites_type ($query = false) {
		$this->load->database();
		if ($query != false && is_array($query)) {
			foreach ($query as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		$this->db->order_by("level", "desc");
		$result = $this->db->get(DB_CAT_FAVORITES_TYPE)->result();
		return $result;
	}

	//common function
	function cat_favorites_get ($datebase, $query = false, $order_by = false){
		//where
		if ($query != false && is_array($query)) {
			foreach ($query as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		//order by
		if ($order_by != false && is_array($order_by)) {
			foreach ($order_by as $key => $value) {
				$this->db->order_by($key, $value);
			}
		}

		$result = $this->db->get($datebase)->result();
		return $result;
	}

	function cat_favorites_insert ($datebase, $data){
		if (is_array($data)) {
			$result = $this->db->insert( $datebase, $data);
		 	return $result;
		}
	}
	function cat_favorites_update ($datebase, $data, $where ){
		if (is_array($data)) {
			foreach ($where as $key => $value) {
				$this->db->where($key, $value);
			}
			$this->db->update($datebase, $data);
			$result = $this->db->affected_rows();
		 	return $result;
		}
	}

	function cat_favorites_delete ($datebase, $where ){
		if (is_array($where)) {
			foreach ($where as $key => $value) {
				$this->db->where($key, $value);
			}
			$this->db->delete($datebase);
			$result = $this->db->affected_rows();
		 	return $result;
		}
	}



}