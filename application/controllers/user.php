<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
    }

    function index() 
    {

    	$this->load->helper('form');
    	//$date['user'] = '';
    	$this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('login_view');
		$this->load->view('global/footer');
    }


}

?>