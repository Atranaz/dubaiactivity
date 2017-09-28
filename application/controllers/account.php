<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// not using yet if you want to use delete this comment first
class Account extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('fuser_model');
    }

    function index()
    {
    	$this->isLoggedIn();
    }

    function isLoggedIn()
    {
        $this->load->library('session');
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
           
            redirect('user');
        }
        else
        {
        $this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('account_view');
		$this->load->view('global/footer');
        }
    }

}