<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		
		
		if($this->session->userdata('logged_in')){
			$data['page'] = 'home';	
			$this->load->view('mainpage',$data); //added data variable
		}else{
			//redirect(base_url('login'));
			$this->load->view('register');
		}
	}
	
	public function post()
	{
		//should save user data to db
		$this->load->model('user_model', 'reg_model');
		$r = $this->reg_model->insert_db($_POST);
		var_dump($_POST);
		if($r){
			redirect(base_url('login'));
		}else{
			echo 'Error';
		}
	}
}
