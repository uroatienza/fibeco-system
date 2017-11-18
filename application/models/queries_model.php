<?php
class Queries_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	
			public function graphing($entry)
	{
			
				$query = "";
				extract($entry);
			
			
				if(strcmp($type,'Accomplishments')==0){
					
						if(strcmp($grouping,'Range')==0){
								$this->db->select('date(stamp_accomplished) as xaxes,count(comp_id) as yaxes');
								 $this->db->from('tbl_complains');
								 $this->db->where('status','ACCOMPLISHED');
								 $this->db->where('area_id',$area);
								 $this->db->where('date(stamp_accomplished)  >=', $start);
								 $this->db->where('date(stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
						}
						
						if(strcmp($grouping,'Monthly')==0){
								 $this->db->select("CONCAT(YEAR(stamp_accomplished),'- Month:',MONTH(stamp_accomplished)) as xaxes,count(comp_id) as yaxes");
								 $this->db->from('tbl_complains');
								 $this->db->where('status','ACCOMPLISHED');
								 $this->db->where('area_id',$area);
								 $this->db->where('date(stamp_accomplished)  >=', $start);
								 $this->db->where('date(stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
								 	
						}
						if(strcmp($grouping,'Quarterly')==0){
								 $this->db->select("CONCAT(YEAR(stamp_accomplished),'- Quarter:',QUARTER(stamp_accomplished)) as xaxes,count(comp_id) as yaxes");
								 $this->db->from('tbl_complains');
								 $this->db->where('status','ACCOMPLISHED');
								 $this->db->where('area_id',$area);
								 $this->db->where('date(stamp_accomplished)  >=', $start);
								 $this->db->where('date(stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
					
						}
						if(strcmp($grouping,'Annually')==0){
								 $this->db->select("YEAR(stamp_accomplished) as xaxes,count(comp_id) as yaxes");
								 $this->db->from('tbl_complains');
								 $this->db->where('status','ACCOMPLISHED');
								 $this->db->where('area_id',$area);
								 $this->db->where('date(stamp_accomplished)  >=', $start);
								 $this->db->where('date(stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
						}
					

					
					
					
				} // accomplished --------------------------------------
				
				if(strcmp($type,'Complains')==0){
					
						if(strcmp($grouping,'Range')==0){
							
								 $this->db->select("CONCAT(b.cat_name,' - Date:',DATE(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('b.cat_id'); 
								 $query = $this->db->get()->result_object();
								 

						}
						
						if(strcmp($grouping,'Monthly')==0){
						
								 $this->db->select("CONCAT(b.cat_name,' / ',YEAR(a.stamp_accomplished),'- Month:',MONTH(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
								
						}
						if(strcmp($grouping,'Quarterly')==0){
								 $this->db->select("CONCAT(b.cat_name,' / ',YEAR(a.stamp_accomplished),'- Quarter:',QUARTER(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
						}
						if(strcmp($grouping,'Annually')==0){
								 $this->db->select("CONCAT(b.cat_name,' / Year:',YEAR(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
								
						}
	
					
				} // complains ------------------------------------------------
				
						if(strcmp($type,'Categories')==0){
							

							
							
						if(strcmp($grouping,'Range')==0){
								 $this->db->select("CONCAT(b.cat_name,' - Date:',DATE(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								 $this->db->where('a.area_id',$area);
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
							 
						}
						
						if(strcmp($grouping,'Monthly')==0){
								 $this->db->select("CONCAT(b.cat_name,' / ',YEAR(a.stamp_accomplished),'- Month:',MONTH(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								 $this->db->where('a.area_id',$area);
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
								
						}
						if(strcmp($grouping,'Quarterly')==0){
								 $this->db->select("CONCAT(b.cat_name,' / ',YEAR(a.stamp_accomplished),'- Quarter:',QUARTER(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								 $this->db->where('a.area_id',$area);
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
								
						}
						if(strcmp($grouping,'Annually')==0){
								 $this->db->select("CONCAT(b.cat_name,' / Year:',YEAR(a.stamp_accomplished)) as xaxes,count(a.comp_id) as yaxes");
								 $this->db->from('tbl_complains as a');
								 $this->db->join('tbl_complain_category as b', 'a.cat_id = b.cat_id');
								 $this->db->where('a.status','ACCOMPLISHED');
								  $this->db->where('a.area_id',$area);
								 $this->db->where('date(a.stamp_accomplished)  >=', $start);
								 $this->db->where('date(a.stamp_accomplished)  <=', $end);			 
								 $this->db->group_by('xaxes'); 
								 $query = $this->db->get()->result_object();
								
						}
	
					
				} // Categories -------------------------------------
									
			
	
					
		
					if($query){
						return $query;
					}
					else
					{
						return false;
					}
				

	} // end of function graphin	
	
	
	
			public function report_area()
	{
				$this->db->select('*');
				$this->db->from('tbl_area');
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}	
	
	// accomplishments ------------------------
	
	public function search_accomplished($entry)
	{
				extract($entry);
			
				$this->db->select('*,a.status as orderstatus');
				$this->db->from('tbl_complains as a');
				$this->db->join('tbl_area as b', 'a.area_id = b.area_id');
				$this->db->join('tbl_complain_category as c', 'a.cat_id = c.cat_id');
				#$this->db->join('tbl_attended_complains as d', 'a.comp_id = d.comp_id');
				#$this->db->join('tbl_user_accnt as e', 'd.account_id = e.account_id');
				$this->db->join('tbl_user_accnt as e', 'a.account_id = e.account_id');
				$this->db->like('a.comp_id', $searchentry,'both');
				$this->db->where('a.status','ACCOMPLISHED');
				
				$this->db->limit('30');
				if(strcmp($this->session->userdata('type'),"DATA ENCODER")==0)
				{
				$this->db->where('a.area_id',$this->session->userdata('accnt_area_id'));	
				}
				
				 $this->db->order_by("a.stamp_filed","desc");
				$query = $this->db->get()->result_object();
				
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
	
		public function load_accomplished($entry)
	{
				extract($entry);
				$this->db->select('*,a.status as orderstatus');
				$this->db->from('tbl_complains as a');
				$this->db->join('tbl_area as b', 'a.area_id = b.area_id');
				$this->db->join('tbl_complain_category as c', 'a.cat_id = c.cat_id');
				#$this->db->join('tbl_attended_complains as d', 'a.comp_id = d.comp_id');
				#$this->db->join('tbl_user_accnt as e', 'd.account_id = e.account_id');
				$this->db->join('tbl_user_accnt as e', 'a.account_id = e.account_id');
				$this->db->where('a.status','ACCOMPLISHED');
				
				$this->db->limit('30');
				if(strcmp($this->session->userdata('type'),"DATA ENCODER")==0)
				{
				$this->db->where('a.area_id',$this->session->userdata('accnt_area_id'));	
				}
				 $this->db->order_by("a.stamp_filed","desc");
				$query = $this->db->get()->result_object();
					
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}

	
	
		//----------------------------------------------job order na nia----------------------------------------
			public function update_order($entry)
	{

		
				extract($entry);
				var_dump($entry);
			if(strcmp($entrystatus,"ACCOMPLISHED")==0){
					$data = array(
					'field_finding' => $entryfinding,
					'activity' => $entryactivity,
					'status' => $entrystatus,
					'twg' =>$entrytwg
					);
				$this->db->set('stamp_accomplished', 'NOW()', FALSE);
			}
			else{
					$data = array(
					'status' => $entrystatus
					);
				
			}

				$this->db->where('comp_id', $entryid);
				$this->db->update('tbl_complains', $data); 
				 

	}
	public function add_order($entry)
	{
			
			//var_dump($entry);
			extract($entry);
		
			//insert data to complains
				
				$data = array(
					'complain' => $complain,
					'area_id' => $this->session->userdata('accnt_area_id'),
					#'client_account' => $client_account,
					'account_id' => $this->session->userdata('account_id'),
					'cat_id' => $category_id		
					);
					
				$this->db->insert('tbl_complains', $data); 
			
			//select the complains by latest and get comp_id
		
				#$this->db->select('comp_id');
				#$this->db->from('tbl_complains ');
				#$this->db->order_by("comp_id","desc");
				#$this->db->limit('1');
				#$query = $this->db->get()->result_object();
				
				#foreach($query as $row){
				#$x = $row->comp_id;
				#}


			//update attended complain with new comp id
			#		$data = array(
			#		'account_id' => $this->session->userdata('account_id'),
			#		'comp_id' => $x
			#		);
			#		$this->db->insert('tbl_attended_complains', $data); 
	}
	
	public function search_order($entry)
	{
				extract($entry);
			
				$this->db->select('*,a.status as orderstatus');
				$this->db->from('tbl_complains as a');
				$this->db->join('tbl_area as b', 'a.area_id = b.area_id');
				$this->db->join('tbl_complain_category as c', 'a.cat_id = c.cat_id');
				#$this->db->join('tbl_attended_complains as d', 'a.comp_id = d.comp_id');
				#$this->db->join('tbl_user_accnt as e', 'd.account_id = e.account_id');
				$this->db->like('a.comp_id', $searchentry,'both');
				if(strcmp($chk,"no")==0){
				$this->db->where('a.status','IN PROGRESS');
				}
				else{
				$this->db->where('a.status <>','ACCOMPLISHED');
				}
				$this->db->limit('30');
				if(strcmp($this->session->userdata('type'),"ADMINISTRATOR")<>0)
				{
				$this->db->where('a.area_id',$this->session->userdata('accnt_area_id'));	
				}
				
				 $this->db->order_by("a.stamp_filed","desc");
				$query = $this->db->get()->result_object();
				
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
	
		public function load_order($entry)
	{
				extract($entry);
				#$chk = 'yes';
				$this->db->select('*,a.status as orderstatus');
				$this->db->from('tbl_complains as a');
				$this->db->join('tbl_area as b', 'a.area_id = b.area_id');
				$this->db->join('tbl_complain_category as c', 'a.cat_id = c.cat_id');
				#$this->db->join('tbl_attended_complains as d', 'a.comp_id = d.comp_id');
				$this->db->join('tbl_user_accnt as e', 'a.account_id = e.account_id');
				if(strcmp($chk,"no")==0){
				$this->db->where('a.status','IN PROGRESS');
				}
				else{
				$this->db->where('a.status <>','ACCOMPLISHED');
				}
				$this->db->limit('30');
				if(strcmp($this->session->userdata('type'),"ADMINISTRATOR")<>0)
				{
				$this->db->where('a.area_id',$this->session->userdata('accnt_area_id'));	
				}
				 $this->db->order_by("a.stamp_filed","desc");
				$query = $this->db->get()->result_object();
					
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}



	}
	
	public function pop_complain_category()
	{
				$this->db->select('*');
				$this->db->from('tbl_complain_category');
				$this->db->where('status','1');
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}	
	

	//----------------------------------------------populate area dropbox----------------------------------------
			public function pop_area_update()
	{
				$this->db->select('*');
				$this->db->from('tbl_area');
				$this->db->where('status','1');
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}		
		public function reg_area()
	{
				$this->db->select('*');
				$this->db->from('tbl_area');
				$this->db->where('status','1');
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}	
	public function pop_area()
	{
				$this->db->select('*');
				$this->db->from('tbl_area');
				$this->db->where('status','1');
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}		
	
//------------------------------------------ User management-----------------------------------------------------------------------------------------------------
		public function password_reset($entry)
	{

		
				extract($entry);
			
				$data = array(
					'password' => 123 
					);
				$this->db->where('account_id', $account_id);
				$this->db->update('tbl_user_accnt', $data); 
				

	}
		public function update_user($entry)
	{

		extract($entry);

		$this->db->select('*');
		$this->db->from('tbl_user_accnt');
		$this->db->where('user_id', $entryusername); 
		$this->db->where('account_id !=', $entryaccount_id);
		$query = $this->db->get()->result_object();
		

	
			if(count($query) > 0){
				
				return false;
			}
			else{
					
					$data = array(
						'fname' => $entryfname,
						'lname' => $entrylname,
						'mname' => $entrymname,
						'namex' => $entrynamex,
						'email' => $entryemail,
						'area_id' => $entryarea,
						'user_id' => $entryusername,
						'type' => $entrytype
						);
					$this->db->where('account_id', $entryaccount_id);
					$x = $this->db->update('tbl_user_accnt', $data); 
				
			
					$this->db->select('*');
					$this->db->from('tbl_user_accnt');
					if(strcmp($chk,'no')==0)
					{
						$this->db->where('active','1');
					}
					$query = $this->db->get()->result_object();
					if($query){
						return $query;
					}
					else
					{
						return false;
					}
					
			}

	}
	
		public function disable_user($entry)
	{

		
				extract($entry);
				$data = array(
					'active' => 0 
					);
				$this->db->where('account_id', $entryid);
				$this->db->update('tbl_user_accnt', $data); 
		
		
				$this->db->select('*');
				$this->db->from('tbl_user_accnt');
				if(strcmp($chk,'no')==0)
				{
					$this->db->where('active','1');
				}
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
		public function enable_user($entry)
	{
				extract($entry);
				$data = array(
					'active' => 1 
					);
				$this->db->where('account_id', $entryid);
				$this->db->update('tbl_user_accnt', $data); 
		
		
				$this->db->select('*');
				$this->db->from('tbl_user_accnt');
				if(strcmp($chk,'no')==0)
				{
					$this->db->where('active','1');
				}
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
	
	public function search_user($entry)
	{
		extract($entry);
		$entry1 = strtoupper($entry);
		
		
		$this->db->select('*');
		$this->db->from('tbl_user_accnt');

		$this->db->where("(fname LIKE '%$entry1%' OR lname LIKE '%$entry1%' OR mname LIKE '%$entry1%' OR user_id LIKE '%$entry%')");
		if(strcmp($chk,'no')==0)
			{
				$this->db->where('active',1);
			}

		$query = $this->db->get()->result_object();
	
		
			if($query){
						return $query;
					}
					else
					{
						return false;
					}
		
	}
		
		public function add_user($entry)
	{
		extract($entry);
	
		

		$this->db->select('*');
		$this->db->from('tbl_user_accnt');
		$this->db->where('user_id', $entryusername); 
		$query = $this->db->get()->result_object();
		
		if(count($query) > 0){
			return false;
		}else{
			
				$data = array(
					'fname' => strtoupper($entryfname),
					'lname' => strtoupper($entrylname),
					'mname' => strtoupper($entrymname),
					'namex' => $entrynamex,
					'user_id' => $entryusername,
					'area_id' => $entryarea,
					'type' =>$entrytype,
					'active' => '1'					
					);
				
		
					$this->db->insert('tbl_user_accnt', $data); 
				
					$this->db->select('*');
					$this->db->from('tbl_user_accnt');
					if(strcmp($chk,'no')==0)
					{
						$this->db->where('active',1);
					}
					$query = $this->db->get()->result_object();
					if($query){
					return $query;	
					}
					else
					{
					return false;
					}
				
		}

			
	

	}



	
	//------------------------------------------ Profile management-------------------------------------------------------------------------------------------------
				public function update_profile($entry)
	{

		
			extract($entry);

			$entryaccount_id = $account_id;
			$entryfname = strtoupper($fname);
			$entrylname = strtoupper($lname);
			$entrymname = strtoupper($mname);
			$entrynamex = $namex;
			$entryusername = $username;
			$entrypassword = $password;
			$entryemail = $email;
			$entry_authpassword = $authpassword;

			
			$this->db->select('*');
			$this->db->from('tbl_user_accnt');
			$this->db->limit('1');
			$this->db->where('user_id', $username);
			$this->db->where('account_id !=',$entryaccount_id );
			
		
			if(strcasecmp($this->session->userdata('password'),$entry_authpassword)==0)
			{
				
				$query = $this->db->get()->result_object();
			
				if((count($query) > 0) ){
					
						$data['page'] = 'error';
						$this->load->view('mainpage',$data);
	
				}
				else{
								$data = array(
								'fname' => $entryfname,
								'lname' => $entrylname,
								'mname' => $entrymname,
								'namex' => $entrynamex,
								'user_id' => $entryusername,
								'password' => $entrypassword,
								'email' => $entryemail
								);
							
							$this->db->where('account_id', $entryaccount_id);
							$query = $this->db->update('tbl_user_accnt', $data);
	
						if($query){
							
							$logindata = array(
							'fname' => $entryfname,
							'lname' => $entrylname,
							'mname' => $entrymname,
							'namex' => $entrynamex,
							'username'  => $entryusername,
							'account_id'  => $entryaccount_id,
							'type'  => $this->session->userdata('type'), 
							'email'	=> $entryemail,
							'password'  => $entrypassword,
							'accnt_area_desc' => $this->session->userdata('accnt_area_desc'),
							'accnt_area_id' => $this->session->userdata('account_area_id'),
							'logged_in' => TRUE
									);
								$this->session->set_userdata($logindata);//added array to a session	
								redirect(base_url('mainpage'));
								
						}
						else
						{	
							$data['page'] = 'error';
							$this->load->view('mainpage',$data);
						}
						
							
					}
				
			}
			else
				{
					
				 $data['page'] = 'error';
				 $this->load->view('mainpage',$data);
				}
		
		
	}
	
	
	//---------------------------------------------category management
			public function update_category($entry)
	{

		extract($entry);
		$newname = strtoupper($newname);
		$this->db->select('*');
		$this->db->from('tbl_complain_category');
		$this->db->where('cat_name', $newname);
		$query = $this->db->get()->result_object();
		
			if(count($query) > 0){
				return false;
			}
			else{
					
					$data = array(
						'cat_name' => $newname
						);
					$this->db->where('cat_id', $entryid);
					$this->db->update('tbl_complain_category', $data); 
			
			
					$this->db->select('*');
					$this->db->from('tbl_complain_category');
					if(strcmp($chk,'no')==0)
					{
						$this->db->where('status','1');
					}
					$query = $this->db->get()->result_object();
					if($query){
						return $query;
					}
					else
					{
						return false;
					}
					
			}

	}
	
		public function disable_category($entry)
	{

		
				extract($entry);
				$data = array(
					'status' => 0 
					);
				$this->db->where('cat_id', $entryid);
				$this->db->update('tbl_complain_category', $data); 
		
		
				$this->db->select('*');
				$this->db->from('tbl_complain_category');
				if(strcmp($chk,'no')==0)
				{
					$this->db->where('status','1');
				}
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
		public function enable_category($entry)
	{
				extract($entry);
				$data = array(
					'status' => 1 
					);
				$this->db->where('cat_id', $entryid);
				$this->db->update('tbl_complain_category', $data); 
		
		
				$this->db->select('*');
				$this->db->from('tbl_complain_category');
				if(strcmp($chk,'no')==0)
				{
					$this->db->where('status','1');
				}
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
	
	public function search_category($entry)
	{

		
		extract($entry);
		$entry = strtoupper($entry);
	
		$this->db->select('*');
		$this->db->from('tbl_complain_category');
		if(strcmp($chk,'no')==0)
		{
			$this->db->where('status',1);
		}
		$this->db->like('cat_name', $entry,'both');

		$query = $this->db->get()->result_object();
		
			if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
		
		public function add_category($entry)
	{
		extract($entry);
		$entry = strtoupper($entry);
		
		$this->db->select('*');
		$this->db->from('tbl_complain_category');
		$this->db->where('cat_name', $entry); 
		$query = $this->db->get()->result_object();
		
		if(count($query) > 0){
			return false;
		}else{

				$data = array(
					'cat_name' => $entry
					);
				
				$this->db->insert('tbl_complain_category', $data); 
				
					$this->db->select('*');
					$this->db->from('tbl_complain_category');
					if(strcmp($chk,'no')==0)
					{
						$this->db->where('status',1);
					}
					$query = $this->db->get()->result_object();
					if($query){
					return $query;	
					}
					else
					{
					return false;
					}
		}


	

	}	
	
	
	
	
	
	
	
	
	
	
	//---------------------------------------------area management------------------------------------------------------------------
			public function update_area($entry)
	{

		extract($entry);
		$newdesc = strtoupper($newdesc);
		$this->db->select('*');
		$this->db->from('tbl_area');
		$this->db->where('area_desc', $newdesc);
		$query = $this->db->get()->result_object();
		
			if(count($query) > 0){
				return false;
			}
			else{
					
					$data = array(
						'area_desc' => $newdesc
						);
					$this->db->where('area_id', $entryid);
					$this->db->update('tbl_area', $data); 
			
			
					$this->db->select('*');
					$this->db->from('tbl_area');
					if(strcmp($chk,'no')==0)
					{
						$this->db->where('status','1');
					}
					$query = $this->db->get()->result_object();
					if($query){
						return $query;
					}
					else
					{
						return false;
					}
					
			}

	}
	
		public function disable_area($entry)
	{

		
				extract($entry);
				$data = array(
					'status' => 0 
					);
				$this->db->where('area_id', $entryid);
				$this->db->update('tbl_area', $data); 
		
		
				$this->db->select('*');
				$this->db->from('tbl_area');
				if(strcmp($chk,'no')==0)
				{
					$this->db->where('status','1');
				}
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
		public function enable_area($entry)
	{
				extract($entry);
				$data = array(
					'status' => 1 
					);
				$this->db->where('area_id', $entryid);
				$this->db->update('tbl_area', $data); 
		
		
				$this->db->select('*');
				$this->db->from('tbl_area');
				if(strcmp($chk,'no')==0)
				{
					$this->db->where('status','1');
				}
				$query = $this->db->get()->result_object();
				
					if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
	
	public function search_area($entry)
	{

		
		extract($entry);
		$entry = strtoupper($entry);
	
		$this->db->select('*');
		$this->db->from('tbl_area');
		if(strcmp($chk,'no')==0)
		{
			$this->db->where('status',1);
		}
		$this->db->like('area_desc', $entry,'both');

		$query = $this->db->get()->result_object();
		
			if($query){
						return $query;
					}
					else
					{
						return false;
					}

	}
		
		public function add_area($entry)
	{
		extract($entry);
		$entryid = strtoupper($entryid);
		$entrydesc = strtoupper($entrydesc);
		
		$this->db->select('*');
		$this->db->from('tbl_area');
		$this->db->where('area_id', $entryid); 
		$this->db->or_where('area_desc', $entrydesc);
		$query = $this->db->get()->result_object();
		
		if(count($query) > 0){
			return false;
		}else{

				$data = array(
					'area_id' => $entryid,
					'area_desc' =>$entrydesc 
					);
				
				$this->db->insert('tbl_area', $data); 
				
					$this->db->select('*');
					$this->db->from('tbl_area');
					if(strcmp($chk,'no')==0)
					{
						$this->db->where('status',1);
					}
					$query = $this->db->get()->result_object();
					if($query){
					return $query;	
					}
					else
					{
					return false;
					}
		}


	

	}

}