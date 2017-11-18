<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	// Added by Uro

	// public function ajax_load_data(){
	// 	$this->load->helper('url');
	// 	$res = $this->db->get('tbl_complains')->result();
	// 	$data_arr = array();
	// 	$i = 0;
	// 	foreach($res as $r){
	// 		$data_arr[$i]['comp_id'] = $r->comp_id;
	// 		$data_arr[$i]['cat_id'] = $r->cat_id;
	// 		$data_arr[$i]['area_id'] = $r->area_id;
	// 		$data_arr[$i]['complain'] = $r->complain;
	// 		$data_arr[$i]['stamp_filed'] = $r->stamp_filed;
	// 		$data_arr[$i]['status'] = $r->status;
	// 		$i++;
	// 	}
	// 		echo json_encode($data_arr);
	// }

}
