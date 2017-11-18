<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {

	public function index()
	{
		
		if($this->session->userdata('logged_in')){
			$data['page'] = 'home';	
			$this->load->view('mainpage',$data); //added data variable
		}else{
			redirect(base_url('login'));
		}
	}
	
	// dani nagstart amung gibuhat ni donah sir
	
	public function home()
	{
		
		if($this->session->userdata('logged_in')){
		$data['page'] = 'home';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}
		
	}

	public function job_order()
	{
		if($this->session->userdata('logged_in')){
		$data['page'] = 'job_order';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}

	}
	public function user_management()
	{
		if($this->session->userdata('logged_in')){
		$data['page'] = 'user_management';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}
	}
	public function area_management()
	{	
		if($this->session->userdata('logged_in')){
		$data['page'] = 'area_management';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}
		
	}
	public function accomplishments()
	{
		if($this->session->userdata('logged_in')){
		$data['page'] = 'accomplishments';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}
	}
	public function reports()
	{
		if($this->session->userdata('logged_in')){
		$data['page'] = 'reports';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}
	}
	public function profile()
	{
		if($this->session->userdata('logged_in')){
		$data['page'] = 'profile';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}
	}
	
		public function category()
	{
		if($this->session->userdata('logged_in')){
		$data['page'] = 'category';	
		$this->load->view('mainpage', $data);
		}else{
			redirect(base_url('login'));
		}
	}

}
