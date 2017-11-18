<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		
	
		
		if($this->session->userdata('logged_in')){
			$data['page'] = 'home';	
			$this->load->view('mainpage',$data); //added data variable
		}else{
			//redirect(base_url('login'));
			$this->load->view('login');
		}
	}
	
	public function loguser()
	{
			

					
		$this->load->model('user_model', 'model');
		$res = $this->model->login_user($_POST);
		if($res){
			
		
			
			
					$logindata = array(
							'fname'	=> $res->fname,
							'lname'	=> $res->lname,
							'mname'	=> $res->mname,
							'namex'	=> $res->namex,
							'username'  => $res->user_id,
							'account_id'  => $res->account_id,
							'type'  => $res->type, 
							'email'	=> $res->email,
							'password'  => $res->password,
							'accnt_area_desc' => $res->area_desc,
							'accnt_area_id' => $res->area_id,
							'logged_in' => TRUE
						);
			$this->session->set_userdata($logindata);//added array to a session	
			redirect(base_url('mainpage'));
			
			
		
		}else{

			redirect(base_url('login'));
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
