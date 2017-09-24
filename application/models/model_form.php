<?php
Class Model_form extends CI_Model
{
	public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->database();
    }

function checkEmail($email){

	$this->db->select('*');
	$this->db->from('users');
	$this->db->where('email', $email); 
	$query = $this->db->get();
	$userData = $query->result();
	return $userData;
}

function checkUser($username){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('username', $username); 
    $query = $this->db->get();
    $userData = $query->result();
    return $userData;   
}

function requestForm($user_array,$request_array,$request_type,$request_file)
 {

 		$this->db->trans_start();
        $this->db->insert('users', $user_array);
        
        $user_id = $this->db->insert_id();

        $request_array['user_id'] = $user_id; 

        $this->db->insert('tbl_request', $request_array);

        $requst_id = $this->db->insert_id();

        $request_type['request_id'] = $requst_id;
        $request_file['request_id'] = $requst_id; 

        $this->db->insert('tbl_rtype', $request_type);

        $this->db->insert('tbl_rfiles', $request_file);
        
        $this->db->trans_complete();
        
        return $requst_id;

 }
function requestFormid($request_array,$request_type,$request_file)
 {

 		$this->db->trans_start();

 		$this->db->insert('tbl_request', $request_array);

        $requst_id = $this->db->insert_id();

        $request_type['request_id'] = $requst_id;
        $request_file['request_id'] = $requst_id; 

        $this->db->insert('tbl_rtype', $request_type);

        $this->db->insert('tbl_rfiles', $request_file);
        
        $this->db->trans_complete();
        
        return $requst_id;

 }

function saveMsg($msg_array)
{
	$this->db->insert('tbl_rmsg', $msg_array);

	$msg_id = $this->db->insert_id();
	return $msg_id;
}

}