<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Fuser_model extends CI_Model
{

	function login($email,$password)
	{
		$this->db->select('userID, email, password, name, isActive, roleId');
        $this->db->from('tbl_fusers');
        $this->db->where('email', $email);
        $this->db->where('isActive', 1);
        $query = $this->db->get();
        
        $user = $query->result();

        if(!empty($user)){
            if(password_verify($password, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
	}
	
	function register($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_fusers', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function userDetail($uID){

    	$this->db->select('*');
    	$this->db->from('tbl_fusers');
    	$this->db->where('userID', $uID);

    	$query = $this->db->get();
    	$result = $query->result();

    	return $result;
    }
}