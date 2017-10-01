<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('fuser_model');
        $this->load->library('session');
        $this->load->helper('form');
        date_default_timezone_set('Asia/Dubai');
        
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
                                            'name'=>$res->name,
                                            'email'=>$res->email,
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

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('user/login');
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
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('mobile','Mobile Number','required');

        if($this->form_validation->run() == FALSE)
        {
        	
        	$this->session->set_flashdata('error', 'Form Validation error must contact with administartor');
                redirect('user/register');

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

            $chkEmail = $this->fuser_model->checkEmail($email);

            if (!empty($chkEmail)) {
                $this->session->set_flashdata('error', 'This E-mail address is already exists :)');
                redirect('user/register');
            } else 
            {
                
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
                        redirect('user/register');
                    }

            }

            
                
                
        }
    }

    function passwordUpdate()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('old-password','Old password','required|max_length[20]');
        $this->form_validation->set_rules('new-password','New password','required|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('Validation Issues', 'From validation issues contact with administrator');
                redirect('user');
        }
        else
        {
            $oldPassword = $this->input->post('old-password');
            $newPassword = $this->input->post('new-password');
            $userId = $this->input->post('uID');
            
            $resultPas = $this->fuser_model->matchOldPassword($userId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('user');
            }
            else
            {
                $usersData = array('password'=>password_hash($newPassword, PASSWORD_DEFAULT), 'updateBy'=>$userId, 'updateAt'=>date('Y-m-d H:i:s'));
                
                $result = $this->fuser_model->changePassword($userId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('user');
            }
        }
    }

    function resetPassword()
    {

        $this->load->view('global/header');
        $this->load->view('global/mainmenu');
        $this->load->view('reset_view');
        $this->load->view('global/footer'); 
    }

    function resetPasswordnow(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->user();
        } else 
        {
            $email = $this->input->post('email');
            $chkEmail = $this->fuser_model->checkEmail($email);
        }

        if (empty($chkEmail)) 
        {
            $this->session->set_flashdata('error', 'This E-mail address is not exists :)');
            redirect('user/resetPassword');
        } else 
        {
            
            
            $temppass = $this->getRandomWord();
            $usersData = array('password'=>password_hash($temppass, PASSWORD_DEFAULT), 'updateAt'=>date('Y-m-d H:i:s'));

            $result = $this->fuser_model->resetPaasword($usersData, $email);

            if (empty($result)) {
                    $this->session->set_flashdata('error', 'Some error contact to administrator');
                    redirect('user/resetPassword');
            } else 
            {
                $this->session->set_flashdata('success', 'Check email for temporay password');

                $this->load->library('email');

                $this->email->from('atranaz@live.com', 'Zaheer Ahmad');
                $this->email->to('zaheerahmad.ae@gmail.com');
                //$this->email->cc('another@another-example.com');
                //$this->email->bcc('them@their-example.com');

                $this->email->subject('Your Password');
                $this->email->message('Testing the email class.'.$temppass);

                $this->email->send();

                redirect('user/resetPassword');
            }
        }

    }

    function getRandomWord($len = 10) {
        $word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
        shuffle($word);
        return substr(implode($word), 0, $len);
}




}
?>