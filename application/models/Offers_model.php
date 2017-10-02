<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Offers_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function listBycategory($cID)
    {
    	$this->db->select('*');
        $this->db->from('tbl_list AS tbl');
        $this->db->join('tbl_list_imgs AS tli', 'tbl.list_id = tli.list_id', 'INNER');
        $this->db->order_by("created_at", "desc");
        $this->db->where('is_active', 1);
        $this->db->where('tbl.category_id', $cID);

        $query = $this->db->get();
        $return = $query->result();
        return $return;
    }
}

?>