<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('home_model');
    }
	public function index()
	{
		
		$result = $this->home_model->featListing();
		$this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('home_message');
		$this->load->view('global/footer');
	}
}
