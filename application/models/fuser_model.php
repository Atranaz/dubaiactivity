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
    function checkEmail($email){

      $this->db->select('*');
      $this->db->from('tbl_fusers');
      $this->db->where('email', $email); 
      $query = $this->db->get();
      $userData = $query->result();
      return $userData;
    }

    function userDetail($uID){

    	$this->db->select('*');
    	$this->db->from('tbl_fusers');
    	$this->db->where('userID', $uID);

    	$query = $this->db->get();
    	$result = $query->result();

    	return $result;
    }

    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->where('userId', $userId);        
        $this->db->where('isActive', 1);
        $query = $this->db->get('tbl_fusers');
        
        $user = $query->result();

        if(!empty($user)){
            if(password_verify($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

    function changePassword($userId, $usersData)
    {
        $this->db->where('userId', $userId);
        $this->db->where('isActive', 1);
        $this->db->update('tbl_fusers', $usersData);
        
        return $this->db->affected_rows();
    }

    function resetPaasword($usersData, $email)
    {
        $this->db->where('email', $email);
        $this->db->where('isActive', 1);
        $this->db->update('tbl_fusers', $usersData);
        
        return $this->db->affected_rows();
    }
}