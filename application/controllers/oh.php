<?php

/*
 *  cat - oh.php  导航&收藏夹
 *
 *
 *  Created on 2012-2-24 上午11:53:56
 *  Created by cyw
 *
 */

class Oh extends CI_Controller {

	public function _init() {
		$this->load->helper('url_helper');
		$this->load->helper('url');
	    $this->load->database();
    	$this->load->library('session');
 	}

 	/*迅雷123 - index*/
	public function old()
	{
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

		//session
		$this->load->library('session');
  		$auth = $this->session->userdata('username');

  		$this->load->model('cat_favorites');

  		$per_page = 400;

  		$fav_mingzhan = $this->cat_favorites->cat_get_favorites(array('type_id' => 9), 20);

	    $results = $this->cat_favorites->cat_get_favorites_page(200, 0);
		$types = $this->cat_favorites->cat_get_favorites_type();

		$this->load->view('favorites/index.tpl.php', array(
    			   'header'	    		=> $this->load->view('header.tpl.php', $header_data, TRUE),
					 'auth'				=> $auth,
					 'base'     		=> $this->config->item('base_url'),
				   'oh_url'				=> $this->config->item('oh_url'),
				  'results'     		=> $results,
					'types'				=> $types,
			 'fav_mingzhan'				=> $fav_mingzhan,
			 	 'cat_menu'				=> 'Favorites',

	    ));

	}

	public function index()
	{
		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
	    			  'css'		=> array(
		                                $this->config->item('css_cat_oh'),
		                                $this->config->item('css_cat_oh_nav1')
		                            ),
	    			   'js'		=> array(
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-Favorites',
	    			 'desc'	    => 'Cat,Cat网站导航,最优秀的网站导航',
		);

		//session
		$this->load->library('session');
  		$auth = $this->session->userdata('username');

  		$this->load->model('cat_favorites');

  		$commend_urls = $this->cat_favorites->cat_get_favorites(array('type_id' => 9), 20);

	    $urls = $this->cat_favorites->cat_get_favorites_page(400, 0);
		$types = $this->cat_favorites->cat_get_favorites_type();

		$this->load->view('favorites/index2.tpl.php', array(
    			   'header'	    		=> $this->load->view('header.tpl.php', $header_data, TRUE),
    			 'cat_menu'	    		=> $this->load->view('layout/top.tpl.php', array('current' => 'Favorites','base'=> $this->config->item('base_url'), 'auth' => $auth ), TRUE),
					 'auth'				=> $auth,
					 'base'     		=> $this->config->item('base_url'),
				   'oh_url'				=> $this->config->item('oh_url'),
				     'urls'     		=> $urls,
					'types'				=> $types,
			 'commend_urls'				=> $commend_urls,

	    ));

	}

	public function lists(){

		$this->_init();
		$auth = is_login_on ($this);

		//加载头部
		$header_data = array (
		   	 'base'		=> $this->config->item('base_url'),
      		  'css'		=> array(
						$this->config->item('css_cat_skin_ccav1'),
						$this->config->item('css_cat_oh_nav1'),
					        ),
    		   'js'		=> array(
								$this->config->item('jquery'),
								$this->config->item('js_cat_manage')
						    ),
    		'title'	    => 'Cat-URL-lists',
    		 'desc'	    => '',
		);



		//$user_id = isset($getparam['user_id']) ? array('user_id' => $getparam['user_id']) : false;

		// load pagination class
	    $this->load->library('pagination');
	    $config['base_url'] = base_url().'index.php/oh/lists/';
	    $config['total_rows'] = $this->db->count_all('cat_favorites');
	    $config['per_page'] = '200';
	    $config['full_tag_open'] = '<p>';
	    $config['full_tag_close'] = '</p>';

	    $this->pagination->initialize($config);

	    //load the model and get results
		$this->load->model('cat_favorites');
	    $results = $this->cat_favorites->cat_get_favorites_page($config['per_page'], $this->uri->segment(3));
	    // load the view

		$types = $this->cat_favorites->cat_get_favorites_type();

		$dropdownarray = array ();
		foreach ($types as $type) {
			$dropdownarray [] = array( 'type_id' => $type->type_id,'type_name' => $type->name);
		}

		$json_drop = json_encode($dropdownarray);


	    $this->load->view('favorites/lists.tpl.php', array(
	    				'results'		=> $results,
	    				'link'			=> $this->pagination->create_links(),
	    				'tpl_header'	=> $this->load->view('header.tpl.php', $header_data, TRUE),
	    				'tpl_top'		=> $this->load->view('favorites/header.tpl.php', false, TRUE),
	    				'tpl_foot'		=> $this->load->view('favorites/foot.tpl.php', false, TRUE),
	    				'user'			=> $auth,
	    				'json_drop'		=> $json_drop,
	    				'types'			=> $types,
	    				'cat_menu'	    => $this->load->view('layout/top.tpl.php', array('current' => 'Lists','base'=> $this->config->item('base_url'), 'auth' =>  $this->session->userdata('username') ), TRUE),
	    ));

	}

	//add
	public function add ( $param = false ) {

		$this->load->helper('url_helper');
		$auth = is_login_on ($this);

		$msg = '';

		if ($param) {
			$msg = $param;
		}

		$header_data = array (
				   	 'base'		=> $this->config->item('base_url'),
				   	'index'		=> $this->config->item('index_url'),
	    			  'css'		=> array($this->config->item('css_cat_skin_ccav1'),$this->config->item('css_cat_oh_nav1'),
		                ),
	    			   'js'		=> array(
										$this->config->item('jquery'),
								    ),
	    			'title'	    => 'Cat-Favorites_add',
	    			 'desc'	    => '',
		);


		//----------------------------------------------------------------
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

			$type = trim ( $_POST['type'] );

			switch ($type) {
				case 0://导入
					$file = $_FILES ['icon_file'] ['tmp_name'];
					$this->import_url($file);
					$msg = 'ok';
					break;
			}

		}
		//----------------------------------------------------------------

		$this->load->model('cat_favorites');
		$types = $this->cat_favorites->cat_get_favorites_type();

		//dropdown
		$this->load->helper('form');
		$dropdownarray = array ();
		foreach ($types as $type) {
			$dropdownarray [$type->type_id] = $type->name;
		}

		$dropdown = form_dropdown('url_type', $dropdownarray, '');

		$this->load->view('favorites/add.tpl.php', array(
    			   'header'	    => $this->load->view('header.tpl.php', $header_data, TRUE),
					 'auth'		=> $auth,
					 'base'     => $this->config->item('base_url'),
				     'msg'		=> $msg,
				     'types'	=> $types,
				     'dropdown'	=> $dropdown,
					 'cat_menu'	    => $this->load->view('layout/top.tpl.php', array('current' => 'Add','base'=> $this->config->item('base_url'), 'auth' => $this->session->userdata('username') ), TRUE),
	    ));

	}

	//hover edit
	function ajax_edit_url (){

			$this->load->library('session');
			$user = $this->session->userdata('user');

			if ($user->roles == 100) {
				//----------------------------------------------------------------
				if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

					$title = trim ( $_POST['title'] );
					$url = trim ( $_POST['url'] );
					$type_id = trim ( $_POST['type_id'] );
					$id = trim ( $_POST['hdid'] );
					$icon_url = trim ( $_POST['e_icon_url'] );


					$updatearray = array (
									'url' 			=> $url,
									'title' 		=> $title,
									'type_id' 		=> $type_id,
					);

					if ($icon_url != null && $icon_url != '') {
						$updatearray = array_merge($updatearray, array('icon_url' => $icon_url));
					}


					//update
					$this->load->model('cat_favorites');
					$result = $this->cat_favorites->cat_favorites_update( DB_CAT_FAVORITES, $updatearray, array('id' => $id));

					echo json_encode(array('state' => 'ok','title' => $title, 'type_id' => $type_id, 'url' => $url, 'icon_url' => $icon_url));
					return ;
				}
			}
			echo json_encode(array('state' => 'error'));
			return ;
	}


	//hover type
	function ajax_edit_type (){

			$this->load->library('session');
			$user = $this->session->userdata('user');

			if ($user->roles == 100) {
				//----------------------------------------------------------------
				if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

					$name = trim ( $_POST['name'] );
					$level = trim ( $_POST['level'] );
					$type_id = trim ( $_POST['type_id'] );

					$updatearray = array (
									'name' 			=> $name,
									'level' 		=> $level
					);

					//update
					$this->load->model('cat_favorites');
					$result = $this->cat_favorites->cat_favorites_update( DB_CAT_FAVORITES_TYPE, $updatearray, array('type_id' => $type_id));

					echo json_encode(array('state' => 'ok','name' => $name, 'level' => $level));
					return ;
				}
			}
			echo json_encode(array('state' => 'error'));
			return ;
	}

	function ajax_delete_url (){

			$this->load->library('session');
			$user = $this->session->userdata('user');

			if ($user->roles == 100) {
				//----------------------------------------------------------------
				if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

					$id = trim ( $_POST['id'] );

					//update
					$this->load->model('cat_favorites');
					$result = $this->cat_favorites->cat_favorites_delete( DB_CAT_FAVORITES,array('id' => $id));
					echo json_encode(array('state' => 'ok'));
					return ;
				}
			}
			echo json_encode(array('state' => 'error'));
			return ;
	}


	//HTML 导入 MYSQL
	private function import_url ($file) {
		//从收藏夹文件中提取链接
		$ar_str=@file($file);//Microsoft 导出的书签文件
		for($i=0;$i<count($ar_str);$i++) {
		$h3=strtolower($ar_str[$i]);//提取类别
		$b=strpos($h3,"<h");//标签定位开始
		    if($b) {
		        $sort=trim(substr($h3,$b));
		        $mo_start=strpos($sort,"FOLDED");
		        $mo_end=strpos($sort,'>');
		        $mo_str=substr($sort,$mo_start,$mo_end-$mo_start+1);
		        $sort=str_replace($mo_str,'<h3>',$sort);
			}

		    $line=strtolower($ar_str[$i]);//提取超级连接
			$k=strpos($line,"<a");//超级连接定位开始
		    if($k) {
		        $url=trim(substr($line,$k));

		        //计算href
//		        $href_start = strpos($url,"href=\"") + 6;
//		        $href_end = strpos($url,'add_date');
//		        $href = substr($url,$href_start,$href_end-$href_start-2);

		        //Title
		        $r_start=strpos($url,"add_date");
		        $r_end=strpos($url,'">');
		        $r_str=substr($url,$r_start,$r_end-$r_start+1);
		        $url=str_replace($r_str,'',$url);
		        $urlreg = '/<a(.*?)href="(.*?)"(.*?)>(.*?)<\/a>/i';
				preg_match_all($urlreg, $url, $m);

				if (!empty($m[0][0])){
					//insert mysql
					$title = $m[4][0];
					$url = $m[2][0];

					$this->load->model('cat_favorites');
					$this->cat_favorites->cat_insert_favorites( array (
									'title' 		=> $title,
									'url'			=> $url,
									'created_at'	=> date('Y-m-d H:i:s',time())

					) );

				}

		    }
		}

	}

	/**
	 * 添加 - 收藏夹 url 的类型
	 */
	public function add_type(){

		$url = $this->config->item('index_url') .  '/oh/add/';
		//----------------------------------------------------------------
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

			$name = trim ( $_POST['type_name'] );
			$level = trim ( $_POST['level'] );

			$this->load->model('cat_favorites');
			$type = $this->cat_favorites->cat_insert_favorites_type( array (
							'name' 			=> $name,
							'level' 			=> $level,
							'created_at'	=> date('Y-m-d H:i:s',time())
			) );

			if ($type == false) {
				$url = $url . 'repeat/';
			}
		}
		$this->load->helper('url_helper');
		redirect( $url );
		//----------------------------------------------------------------

	}

	/**
	 * add url
	 */
	public function add_url(){

			$this->load->helper('url_helper');
			$this->load->library('session');
			$user = $this->session->userdata('user');

			$from_url = $this->config->item('index_url') .  '/oh/add/';
			//----------------------------------------------------------------
			if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

				$url = trim ( $_POST['url'] );

				//if empty
				if (empty($url)) {
					$from_url = $from_url . 'repeat/';
					redirect( $from_url );
				}
				$type_id = trim ( $_POST['url_type'] );

				$title = trim ( $_POST['title'] );
				$icon_url=trim ( $_POST['ico_url'] );
			    $created_at= date('Y-m-d H:i:s',time());
			    $user_id=$user->user_id;
			    $status = 1;

			    //is repeat
				$this->load->model('cat_favorites');
				$url_exits = $this->cat_favorites->cat_favorites_get(DB_CAT_FAVORITES,array(
						'url' => $url
				));

				/*验证重复
				if (is_array($url_exits) && !empty($url_exits)){
					$from_url = $from_url . 'repeat/';
					redirect( $from_url );
				}
				 * */

				//insert
				$this->cat_favorites->cat_favorites_insert( DB_CAT_FAVORITES, array (
								'url' 			=> $url,
								'title' 		=> $title,
								'icon_url' 		=> $icon_url,
								'user_id' 		=> $user_id,
								'type_id' 		=> $type_id,
								'status' 		=> $status,
								'created_at'	=> $created_at
				) );

			}

			redirect( $from_url );
			//----------------------------------------------------------------

	}

	//get title
	public function get_url_title(){

		$this->load->helper('url_helper');
		$url = trim ( $_POST['url'] );

		preg_match('/[\w]*\.[\w][\w-]*\.(?:com\.cn|com|cn|co|net|org|gov|cc|biz|info)(\/|$)/isU', $url, $domain);
		$url_ico = rtrim($domain[0], '/');

		$url_name = '';
		if ($url != null && $url != '') {
			$f = file_get_contents ($url);
		 	preg_match_all( '/<title>(.*?)<\/title>/',$f,$m);
			$title = $m[0][0];
            $title = preg_replace("/\<title\>/",'', $title);
		    $title = trim(preg_replace("/\<\/title\>/",'', $title));
		    $url_name = is_utf8($title);
	  		echo json_encode(array (
	  					'status' 	=> 'ok',
	  					'title' 	=> $url_name,
	  					'url_ico'	=> $url_ico
	  		));
		} else {
	  		echo json_encode(array ('status' => 'error','title' => '','url_ico' => ''));
		}

  		return;
	}

}