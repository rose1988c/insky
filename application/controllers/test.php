<?php
class Test extends CI_Controller {
	var $base;
    var $css;
	public function index($name = false)
	{
	   	$this->css = $this->config->item('css_test');
		$this->base = $this->config->item('base_url');

		$name = $name ? $name : '';

		//load help 扩展
		$a1 = array('1');
		$a2 = array('1','2','3');
		$this->load->helper('array'); //$this->load->helper( array('helper1', 'helper2', 'helper3') );
		any_in_array ($a1,$a2);
		//----------------------

	   	$data['css'] = $this->css;
	    $data['base'] = $this->base;
	    $data['mytitle'] = 'Welcome to this site';
	    $data['mytext'] = "Hello, $name, now we're getting dynamic!";

	    $this->load->view('help/test.tpl.php', array(
	    			'css'		=> $this->css,
	    			'base'		=> $this->base,
	    			'mytitle'	=> 'Welcome to this site',
	    			'mytext'	=> "Hello, $name, now we're getting dynamic!",
	    ));
	}

	/*mysql*/
	public function mysql(){

		$this->css = $this->config->item('css_test');
		$this->base = $this->config->item('base_url');

		//$this->load->database();
		//$query = $this->db->get('vote_details');

		$this->load->model('cat_favorites');
		$query = $this->cat_favorites->cat_get_favorites();


		$data['css'] = $this->css;
	    $data['base'] = $this->base;
	    $data['datebase'] = $query->result();

		$this->load->view('help/test.tpl.php', $data);
	}

	/*template*/   /*no all*/
	public function template(){

		$html = new Html();

	    define('WEB_ROOT',  '');
	    define('MEDIA_ROOT', '');

	    // Initialize template
	    $tpl = new Template();
	    // Set global template variables
	    $tpl->set('auth',       '');
	    $tpl->set('html',       $html);
	    $tpl->set('msg',        '');
	    $tpl->set('web_root',   WEB_ROOT);
	    $tpl->set('media_root', MEDIA_ROOT);
	}

	/*demo*/
	public function demo (){


	}

}
?>