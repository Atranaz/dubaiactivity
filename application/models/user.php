<?php
Class User extends CI_Model
{
 function login($email, $password)
 {
   $this -> db -> select('id, username, fname, email, phone, mobile, country, city, password');
   $this -> db -> from('users');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 /**
* This function used to get user information by id
* @param number $userId : This is user id
* @return array $result : This is user information
*/
  function getUserInfo($userId)
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('userId', $userId);
    $query = $this->db->get();
    
    return $query->result();
  }

/**
* This function is used to update the user information
* @param array $userInfo : This is users updated information
* @param number $userId : This is user id
*/
function editUser($userInfo, $userId)
{
    $this->db->where('id', $userId);
    $this->db->update('users', $userInfo);
    
    return TRUE;
}

function getallRequest($uID){

  $this->db->select('*');
  $this->db->from('tbl_request');
  //$where = '(wrk_dlvrd_sts="open" or wrk_cl_sts = "Success")';
  $this->db->where('request_status', 1);
  $this->db->where('user_id', $uID);
  $query = $this->db->get();
  $formData = $query->result();
  return $formData;

}
function closeRequest($uID){

  $this->db->select('*');
  $this->db->from('tbl_request');
  //$where = '(wrk_dlvrd_sts="open" or wrk_cl_sts = "Success")';
  $this->db->where('request_status', 0);
  $this->db->where('user_id', $uID);
  $query = $this->db->get();
  $formData = $query->result();
  return $formData;

}
function gettriprequest($tID){

    $this->db->select('*');
    $this->db->from('tbl_request AS re');
    $this->db->join('tbl_rtype AS rt', 're.request_id = rt.request_id', 'INNER');
    $this->db->join('tbl_rfiles AS rf', 're.request_id = rf.request_id', 'INNER');
    $this->db->where('re.request_id', $tID);
    
    $query = $this->db->get();
    $formData = $query->result();
    return $formData;
 }
function delTrip($tID)
{
  $tables = array('tbl_request', 'tbl_rtype', 'tbl_rfiles', 'tbl_rmsg');
  $this->db->where('request_id', $tID);
  $this->db->delete($tables);
}
 

function getallMsgs($tID)
{
  $this->db->select('*');
  $this->db->from('tbl_rmsg');
  $this->db->where('request_id', $tID);
  $this->db->order_by('date_created', 'DESC');
  $query = $this->db->get();

  $msgData = $query->result();
  return $msgData;
}
function checkEmail($email){

  $this->db->select('*');
  $this->db->from('users');
  $this->db->where('email', $email); 
  $query = $this->db->get();
  $userData = $query->result();
  return $userData;
}

function register($user_array){

    $this->db->trans_start();
    $this->db->insert('users', $user_array);        
    $insert_id = $this->db->insert_id();
    $this->db->trans_complete();
    return $insert_id;
}

function updatePass($password_array,$email){

  $this->db->where('email', $email);
  $this->db->update('users', $password_array);

}

}
?>