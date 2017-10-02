<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('home_model');
        $this->load->library('session');
    }
	public function index()
	{
		
		$result = $this->home_model->featListing();
		$data['featlist'] = $result;
		$this->global['pageTitle'] = 'Welcome to UAE ACTIVITY';
		$this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('home_message', $data );
		$this->load->view('global/footer');
	}

	function bookOffer()
	{
		$this->load->model('fuser_model');

		$this->load->library('form_validation'); // Including Validation Library.
		//$this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div
		$this->form_validation->set_rules('totalseat', 'Total Seats', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required'); //  
		// Validation for Name Field
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); // Validation for E-mail field.
		$this->form_validation->set_rules('mobile', 'Contact No.', 'required'); // Validation for Contact Field.
		$this->form_validation->set_rules('offerid', 'offer title', 'required');
		$this->form_validation->set_rules('price', 'offer Price', 'required');
			
		if ($this->form_validation->run() == FALSE) 
		{
			http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
		}else 
		{
			
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$userID = '';

			$offerID = $this->input->post('offerid');
			$totalseat = $this->input->post('totalseat');
			$price = $this->input->post('price');
			$bookingstatus = 2;
			$payID = 3676;
			$offerprice = $price * $totalseat; 

			$word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
        	shuffle($word);
        	$password = substr(implode($word), 0, 10);

			$userInfo = array(
			'name' => $name,
			'email' => $email,
			'mobile' => $mobile,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'isActive' => 1,
			'createBy' => 11,
			'CreateAt' => date('Y-m-d H:i:s')
			);

			$bookingdata = array(
			'booking_id' => $offerID,
			'user_id' => $userID,
			'offer_id' => $offerID,
			'payment_id' => $payID,
			'offer_price' => $offerprice,
			'seats' => $totalseat, 
			'status' => $bookingstatus,
			'created_by' => 11,
			'created_at' => date('Y-m-d H:i:s')
			);
			
			
			
			$result = $this->home_model->bookingNow($userInfo, $bookingdata); 

			if ($result) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your booking message has been sent.";
        	} else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message1.";
        	}
			
		}
	}

	// public function listdetail($slug)
	// {
		
	// }
}
