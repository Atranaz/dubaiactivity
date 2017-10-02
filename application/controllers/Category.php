<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('offers_model');

    }

    public function index($cID = 0) 
    {
    	$this->load->view('global/header');
		$this->load->view('global/mainmenu');
    	
    	if ($cID < 1) {
    	
    		$data['catData'] = 0;
    		$data['catlist'] = 'No Offer Publish Yet!';
			$this->load->view('category_view', $data );	
    	} else 
    	{
    		$result = $this->offers_model->listBycategory($cID);
    		$countoffers = count($result);
			$data['catData'] = $countoffers;
			$data['catlist'] = $result;
			$this->load->view('category_view', $data );
    	}

    	$this->load->view('global/footer');	
    	
    }
}