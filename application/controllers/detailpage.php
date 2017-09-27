<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPage extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('home_model');
    }
	
	public function index($slug = 0)
	{
		
		$result = $this->home_model->listdetail($slug);
		$data['singlelist'] = $result;
		$this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('detailpage', $data );
		$this->load->view('global/footer');
	}
}
