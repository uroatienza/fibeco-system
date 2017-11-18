<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Queries extends CI_Controller {

					public function graphing()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->graphing($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('get_hidden_value',$data);
				}else{
					$this->load->view('get_hidden_value',$data);
					echo 'No results found!';
				}
	}
	
	
	
 	
	
	
	
					public function report_area()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->report_area();
				$data['list'] = $res;
				if($res){
					$this->load->view('report_grid',$data);
				}else{
					echo 'Error Occurred';
				}
	}

	// accomplishments
	
			public function search_accomplished()
	{
				
				$this->load->model('queries_model','model');
				$res =$this->model->search_accomplished($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('accomplished_grid',$data);
				}else{
					echo 'No Results found!';
				}
				
	}
	
	public function load_accomplished()
	{
				
				$this->load->model('queries_model','model');
				$res =$this->model->load_accomplished($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('accomplished_grid',$data);
				}else{
					echo 'No Results found!';
				}
				
	}
	
	//----------------------------------------------job order na nia----------------------------------------
		public function update_order()
	{
				
				$this->load->model('queries_model','model');
				$res =$this->model->update_order($_POST);
			
			/*	
				$data['list'] = $res;
				if($res){
					$this->load->view('order_grid',$data);
				}else{
					echo 'No Results found!';
				}
			*/
	}
		
	public function add_order()
	{
				
				$this->load->model('queries_model','model');
				$res =$this->model->add_order($_POST);
			
			/*	
				$data['list'] = $res;
				if($res){
					$this->load->view('order_grid',$data);
				}else{
					echo 'No Results found!';
				}
			*/
	}
		public function search_order()
	{
				
				$this->load->model('queries_model','model');
				$res =$this->model->search_order($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('order_grid',$data);
				}else{
					echo 'No Results found!';
				}
				
	}
	
	public function load_order()
	{
				
				$this->load->model('queries_model','model');
				$res =$this->model->load_order($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('order_grid',$data);
				}else{
					echo 'No Results found!';
				}
				
	}
	
	
	
	
					public function pop_complain_category()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->pop_complain_category();

				$data['list'] = $res;
				if($res){
					$this->load->view('pop_complain_category',$data);
				}else{
					echo 'No Results found!';
				}
				
	}
	
	//----------------------------------------------populate area dropbox----------------------------------------
					public function pop_area_update()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->pop_area_update();

	
				$data['list'] = $res;

				$data3['datum'] = array (
						'list'=>$data['list'],
						'passdata' =>$_POST
				);
				if($res){
					$this->load->view('pop_grid_update',$data3);
				}else{
					echo 'Error Occurred';
				}
	}
	
				public function pop_area()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->pop_area();
				$data['list'] = $res;
				if($res){
					$this->load->view('pop_grid',$data);
				}else{
					echo 'Error Occurred';
				}
	}
					public function reg_area()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->reg_area();
				$data['list'] = $res;
				if($res){
					$this->load->view('reg_grid',$data);
				}else{
					echo 'Error Occurred';
				}
	}
	//----------------------------------------------user management----------------------------------------		
	
	
			public function password_reset()
	{
				
				$this->load->model('queries_model','model');
				$res =$this->model->password_reset($_POST);
		
	
	}
	
	
	public function update_user()
	{
		
				$this->load->model('queries_model','model');

				$res =$this->model->update_user($_POST);
				
				$data['list'] = $res;
				if($res){
					$this->load->view('user_grid',$data);
				}else{
					echo 'Duplicate found or Error Occurred';
				}
				
			
			
	}
	
		public function disable_user()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->disable_user($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('user_grid',$data);
				}else{
					echo 'No results found';
				}
				
			
	}
			public function enable_user()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->enable_user($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('user_grid',$data);
				}else{
					echo 'No results found';
				}
			
	}
	public function search_user()
	{
			
				$this->load->model('queries_model','model');
				$res =$this->model->search_user($_POST);
				
			
				$data['list'] = $res;
				if($res){
					$this->load->view('user_grid',$data);
				}else{
					echo 'No results found';
				}		
	}
	
		public function add_user()
	{
			
		
				$this->load->model('queries_model','model');
			
				$res =$this->model->add_user($_POST);
		
				$data['list'] = $res;
				if($res){
					$this->load->view('user_grid',$data);
					
				}else{
					echo 'Duplicate found or Error Occurred';
				}
	
				
			
	}
	
		//---------------------------------------------update_profile-------------------------------------------------------
				public function update_profile()
	{
			$this->load->model('queries_model','model');
			$this->model->update_profile($_POST);
			
			
	}
	
	
	
	
	
	//---------------------------------------------category management	
				public function update_category()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->update_category($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('category_grid',$data);
				}else{
					echo 'Duplicate found or Error Occurred';
				}
			
	}
	
		public function disable_category()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->disable_category($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('category_grid',$data);
				}else{
					echo 'No results found';
				}
			
	}
			public function enable_category()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->enable_category($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('category_grid',$data);
				}else{
					echo 'No results found';
				}
			
	}
	public function search_category()
	{
			
				$this->load->model('queries_model','model');
				$res =$this->model->search_category($_POST);
			
				$data['list'] = $res;
				if($res){
					$this->load->view('category_grid',$data);
				}else{
					echo 'No results found';
				}
				
			
	}
	
		public function add_category()
	{
			
		
				$this->load->model('queries_model','model');
				$res =$this->model->add_category($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('category_grid',$data);
					
				}else{
					echo 'Duplicate found or Error Occurred';
				}
				
				
			
	}
	//---------------------------------------------area management------------------------------------------------
			public function update_area()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->update_area($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('area_grid',$data);
				}else{
					echo 'Duplicate found or Error Occurred';
				}
			
	}
	
		public function disable_area()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->disable_area($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('area_grid',$data);
				}else{
					echo 'No results found';
				}
			
	}
			public function enable_area()
	{
		
				$this->load->model('queries_model','model');
				$res =$this->model->enable_area($_POST);
				$data['list'] = $res;
				if($res){
					$this->load->view('area_grid',$data);
				}else{
					echo 'No results found';
				}
			
	}
	public function search_area()
	{
			
				$this->load->model('queries_model','model');
				$res =$this->model->search_area($_POST);
			
				$data['list'] = $res;
				if($res){
					$this->load->view('area_grid',$data);
				}else{
					echo 'No results found';
				}
				
			
	}
	
		public function add_area()
	{
			
		
				$this->load->model('queries_model','model');
				$res =$this->model->add_area($_POST);
			
				$data['list'] = $res;
				if($res){
					$this->load->view('area_grid',$data);
					
				}else{
					echo 'Duplicate found or Error Occurred';
				}
				
				
			
	}
	
}

