<?php
class Display extends CI_Controller{

/*create the array to pass to the views*/
    var $data = array();
/*two other class variables*/
    var $base;
    var $status = '';
/*the constructor function: this calls the 'model' parent class, loads
other CI libraries and helpers it requires, and dynamically sets
variables*/
    function Display()
    {
        $this->load->helper('form');
        $this->load->library('user_agent');
        $this->load->library('errors');
        $this->load->library('menu');
        $this->load->library('session');
/*now set the standard parts of the array*/
        $this->data['css'] = $this->config->item('css');
        $this->data['base'] = $this->config->item('base_url');
        $this->base         = $this->config->item('base_url');
        $this->data['myrobots'] = '<meta name="robots" content="noindex,nofollow" />';
/*note that CI's session stuff doesn't automatically recall the extra
variables you have added, so you have to look up the user's status in
the ci_sessions table*/
        $sessionid = $this->session->userdata('session_id');
        $this->db->select('status');
        $this->db->where('session_id', $sessionid);
        $query = $this->db->get('ci_sessions');
        if ($query->num_rows() > 0)
        {
            $row = $query->row();
            $this->status = $row->status;
        }
    }
/*function to assemble a standard page. Any controller can call this.
Just supply as $mydata an array, of key/value pairs for the contents
you want the view to display. Available variables in this view are:
mytitle. menu, mytext, diagnostic
*/
    function mainpage($mydata)
    {
    	Display();
        $this->data['title'] = 'Monitoring website';
        foreach($mydata as $key => $variable)
        {
            $this->data[$key] = $variable;
        }
		/*here's the menu class we looked at in Chapter 3*/
        $fred = new menu;
        $this->load->library('session');
        $mysess = $this->session->userdata('session_id');
        if(isset($this->status) && $this->status > 0)
        {
            $this->data['menu'] = $fred->show_menu($this->status);
        }
        $this->load->view('header.tpl.php', $this->data);
    }
}
?>