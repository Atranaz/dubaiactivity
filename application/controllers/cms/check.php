<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Zaheer Ahmad
 * @version : 1.1
 * @since : 19 Sep 2017
 */
class Check extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('login_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
     //$this->load->view('includes/wp-header');
     $this->load->view('cms/check');
     //$this->load->view('includes/wp-footer');
    }

}

?>