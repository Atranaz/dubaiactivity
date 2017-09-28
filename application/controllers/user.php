<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('fuser_model');
        $this->load->library('session');
        
    }
    // main user area
    function index() 
    {

    	$this->isLoggedIn();
    }

    // check is user login or not
    function isLoggedIn()
    {
        
        

        $isLoggedIn = $this->session->userdata('isLoggedIn');
        $uID = $this->session->userdata('userId');
  		
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
           
            redirect('user/login');
        }
        else
        {


        $result = $this->fuser_model->userDetail($uID);
        $data['user'] = $result;
        $this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('account_view', $data);
		$this->load->view('global/footer');
        }
    }
    // view login
    function login()
    {
    	
    	$isLoggedIn = $this->session->userdata('isLoggedIn');

    	if ($isLoggedIn > 0) {
    		redirect('user');
    	} else {
    		$this->load->helper('form');
    	$this->load->view('global/header');
		$this->load->view('global/mainmenu');
		$this->load->view('login_view');
		$this->load->view('global/footer');	
    	}
    }
    // login perform function 
    function loginMe()
    {
    	$this->load->library('form_validation');

    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    	$this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');

    	if ($this->form_validation->run() == FALSE) {
    		$this->user();
    	} else 
    	{
    		$email = $this->input->post('email');
    		$password = $this->input->post('password');

    		$result = $this->fuser_model->login($email, $password);

    		if(count($result) > 0)
            {
                foreach ($result as $res)
                {
                    $sessionArray = array('userId'=>$res->userID,                    
                                            'role'=>$res->roleId,
                                            'roleText'=>$res->role,
                                            'name'=>$res->name,
                                            'email'=>$res->email,
                                            'mobile'=>$res->mobile,
                                            'country'=>$res->country,
                                            'isLoggedIn' => TRUE
                                    );
                                    
                    $this->session->set_userdata($sessionArray);
                    
                    redirect('user');
                }
            }
            else
            {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                
                redirect('user');
            }
    	}
    }
    // register view 
    function register()
    {
    	$isLoggedIn = $this->session->userdata('isLoggedIn');

    	if ($isLoggedIn > 0) {
    		redirect('user');
    	} else {

    		$this->load->helper('form');
	    	$this->load->view('global/header');
			$this->load->view('global/mainmenu');
			$this->load->view('register_view');
			$this->load->view('global/footer');		
    	}
    }
    // register perform function 
    function registerME()
    {
    	$this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Full Name','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required|is_unique[tbl_fusers.email]|valid_email');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('mobile','Mobile Number','required');

        if($this->form_validation->run() == FALSE)
        {
        	
        	$this->register();

        }
        else
        {
        	$name = ucwords(strtolower($this->input->post('name')));
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $mobile = $this->input->post('mobile');
            $country = $this->input->post('country');
            $roleId = '2';
            $createdBy = '11';

            $userInfo = array('email'=>$email, 'password'=>password_hash($password, PASSWORD_DEFAULT), 'name'=> $name,'mobile'=>$mobile, 'country'=>$country, 'roleId'=>$roleId, 'createBy'=>$createdBy, 'createat'=>date('Y-m-d H:i:s'));

            $result = $this->fuser_model->register($userInfo);

            if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Thanks for joining us - Sig In');
                    redirect('user');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ops, Having some issue try once again or contact us!');
                    $this->register();
                }
                
                
        }
    }

    function passwordUpdate(){

    }

    function resetPassword(){

    }

    function resetPasswordnow(){

    }




}
?>