<?php
Class List_model extends CI_Model
{
	public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it

        $this->load->database();
    }

    public function AddList($listarray) {

        $this->db->trans_start();
        $this->db->insert('tbl_list', $listarray);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    // function requestList($status){

    // 	$this->db->select('*');
    // 	$this->db->from('tbl_request AS re');
    // 	$this->db->join('tbl_rtype AS rt', 're.request_id = rt.request_id', 'INNER');
    // 	$this->db->join('tbl_rfiles AS rf', 're.request_id = rf.request_id', 'INNER');
    // 	$this->db->join('users AS us', 're.user_id = us.id', 'INNER');
    // 	$this->db->order_by("re.date_created", "desc");
    // 	$this->db->where('re.request_status', $status);
    
    // 	$query = $this->db->get();
    // 	$rlistData = $query->result();
    // 	return $rlistData;
    // }
    // function alltraveler()
    // {
    //     $this->db->select('*');
    //     $this->db->from('users');

    //     $query = $this->db->get();
    //     $userList = $query->result();

    //     return $userList;
    // }
    // function traveler($uId)
    // {
    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->where('id', $uId);
    //     $query = $this->db->get();
    //     $user = $query->result();

    //     return $user;   
    // }
    // function reqByuser($uId)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_request');
    //     $this->db->order_by("date_created", "desc");
    //     $this->db->where('user_id', $uId);

    //     $query = $this->db->get();
    //     $userreq = $query->result();

    //     return $userreq;  
    // }
    // function singleRequest($rId)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_request AS re');
    //     $this->db->join('tbl_rtype AS rt', 're.request_id = rt.request_id', 'INNER');
    //     $this->db->join('tbl_rfiles AS rf', 're.request_id = rf.request_id', 'INNER');
    //     $this->db->join('users AS us', 're.user_id = us.id', 'INNER');
    //     $this->db->where('re.request_id', $rId);
        
    //     $query = $this->db->get();
    //     $reqData = $query->result();
    //     return $reqData;
    // }

    // function delRequest($rId,$status_array)
    // {
    //     $this->db->where('request_id', $rId);
    //     $this->db->update('tbl_request', $status_array);
    // }

    // function getallMsgs($rId)
    // {
    //   $this->db->select('*');
    //   $this->db->from('tbl_rmsg');
    //   $this->db->where('request_id', $rId);
    //   $this->db->order_by('date_created', 'DESC');
    //   $query = $this->db->get();

    //   $msgData = $query->result();
    //   return $msgData;
    // }

    // function saveMsg($msg_array)
    // {
    //     $this->db->insert('tbl_rmsg', $msg_array);
    //     $msg_id = $this->db->insert_id();
    //     return $msg_id;
    // }

}

?>