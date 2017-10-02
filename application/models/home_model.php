<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	public function featListing() 
    {

        $this->db->select('*');
        $this->db->from('tbl_list AS tbl');
        $this->db->join('tbl_list_imgs AS tli', 'tbl.list_id = tli.list_id', 'INNER');
        $this->db->order_by("created_at", "desc");
        $this->db->where('is_active', 1);
        // $this->db->where('tbl.list_id', $lId);

        $query = $this->db->get();
        $List = $query->result();
        return $List;
	}

    public function listdetail($slug) 
    {
        $this->db->select('*');
        $this->db->from('tbl_list AS tbl');
        $this->db->join('tbl_list_imgs AS tli', 'tbl.list_id = tli.list_id', 'INNER');
        $this->db->order_by("created_at", "desc");
        $this->db->where('is_active', 1);
        $this->db->where('tbl.list_slug', $slug);

        $query = $this->db->get();
        $List = $query->result();
        return $List;
    }

    public function bookingNow($userInfo, $bookingdata)
    {
        $this->db->trans_start();
        
        $this->db->insert('tbl_fusers', $userInfo);
        
        $userID = $this->db->insert_id();

        //insert the last insert id in array
        $bookingdata['user_id'] = $userID;

        $this->db->insert('tbl_booking',$bookingdata );

        $booking_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $booking_id;
    }
}

?>