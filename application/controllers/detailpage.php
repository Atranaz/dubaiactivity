<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPage extends CI_Controller {

	
	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('detailpage');
		$this->load->view('global/footer');
	}
}
