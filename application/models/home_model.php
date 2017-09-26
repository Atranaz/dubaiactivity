<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	public function featListing() {

        $this->db->select('*');
        $this->db->from('tbl_list');
        //$this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        $featlisting = $query->result();

        if (!empty($featlisting)){
            return $featlisting;
        } else {
            return 'error';
        }
	}
}

?>