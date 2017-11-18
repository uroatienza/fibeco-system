<?php
class User_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	public function insert_db($postdata)
	{	
		/* for trapping
		$this->db->select('*');
		$this->db->from('tbl_user_accnt');
		$this->db->where('user_id', $entryusername); 
		$query = $this->db->get()->result_object();
		*/
		return $this->db->insert('tbl_user_accnt',$postdata);
		//return false;
	}
	
	public function login_user($user)
	{
		//$query = $this->db->where($user)->get('tbl_user_accnt')->result_object();
		
		$this->db->select('*');
		$this->db->from('tbl_user_accnt');
		$this->db->join('tbl_area', 'tbl_area.area_id = tbl_user_accnt.area_id');
		$this->db->where($user);
		$this->db->where('active',1);
		$query = $this->db->get()->result_object();
		
		if(count($query) > 0){
			return $query[0];
		}else{
			return false;
		}

	}
}


