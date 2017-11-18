<body onLoad="search_user(); pop_area() " >
<div  > <!-- Search and Add-->	
	<table >

		<tr>
			
			<td>	
		
				
					<div class="form-inline" >
						
						<input type="text" onKeyup="search_user()" class="form-control" id="entry" placeholder="Search ..." required="true" autocomplete="off">
						
						<button type="submit" id="btnsearch" onClick="search_user()" class="btn btn-default" data-toggle="tooltip" data-placement="auto" title="Search Area"><span class="glyphicon glyphicon-search"></span></button>
				
					</div>
					
					 
			
			</td>
			
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="button"  onClick="clear_add_user()" data-toggle="modal" class="btn btn-success" id="savearea" data-target="#add_user_modal" data-toggle="tooltip" data-placement="auto" title="Insert Entries">Add User</button>
				<!-- Modal -->
					<div class="modal fade" id="add_user_modal" name="add_user_modal" role="dialog" >
					<div class="modal-dialog">
							  
				<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add User</h4>
					</div>
									
					<div class="modal-body">
	
							<div class="form-group">
							<label for="fname"><b><font color="red" size="4px">*</font></b>&nbsp;First Name: </label>
							<input type="text" name="fname" class="form-control" id="namef" required="true" autocomplete="off"  placeholder="First name...">
							</div>
							<div class="form-group">
							<label for="lname"><b><font color="red" size="4px">*</font></b>&nbsp;Last Name: </label>
							<input type="text" name="lname" class="form-control" id="namel" required="true" autocomplete="off"  placeholder="Last name...">
							</div>
							<div class="form-group">
							<label for="mname">Middle Name: </label>
							<input type="text" name="mname" class="form-control" id="namem" required="true" autocomplete="off"  placeholder="Middle name...">
							</div>
							<div class="form-group">
							<label for="namex">Name Extension: </label>
							<select class="form-control" id="xname" name="xname" >
								<option></option>
								<option value ="JR"  >JR</option>
								<option value ="SR"  >SR</option>
								<option value ="I"  >I</option>
								<option value ="II" >II</option>
								<option value ="III" >III</option>
								</select>
							</div>
						
							<div class="form-group">
								<label for="areaid"><b><font color="red" size="4px">*</font></b>&nbsp;Username: </label>
								<input type="text" class="form-control" id="nameuser" required="true" autocomplete="off" placeholder="Username...">
							</div>		  

							<div class="form-group" id="div_pop_area">
							
								<!-- xml target here for inner html -->
							</div>
							
							<div class="form-group">
								<label for="areaid"><b><font color="red" size="4px">*</font></b>&nbsp;User Type: </label>
									<select class="form-control" required="true" name="cmb_user_type" id="cmb_user_type" placeholder="Select User Type...">
									 <option></option>
									<option value ="STAFF">Staff</option>
									<option value ="DATA ENCODER">Data Encoder</option>
									<option value ="ADMINISTRATOR">Administrator</option>
								</select>
								</div>
								<div class="alert alert-info">
								  <strong>Note :</strong> Password and Email address will be set to default. User is advised to change password and email as possible...
								</div>
							<p align="right">
								<button type="button" onClick="add_user()" class="btn btn-info" id="saveuser" >Save</button>
							</p>
						
						</div>
						</div>
						<div class="modal-footer">
									
						<!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
						</div>
						</div>  
						</div>
						 
						  <!-- Modal -->
				</td>
			</tr>
			<tr>
				<td>
				<p><input type="checkbox" onChange="search_user()" id="disabled_user" value="show"><font size="1">Display disabled accounts</font><p/>
				</td>
			</tr>
	</table>
	
</div>


<!-- HEADER-->
<!-- <div class="row">
	<div class="col-sm-2" style="background-color: rgb(163, 240, 193);"><h5><b>User ID</b></h5></div>
	<div class="col-sm-3" style="background-color: rgb(225, 225, 228);"><h5><b>Username</b></h5></div>
	<div class="col-sm-7" style="background-color: rgb(219, 219, 240);"><h5><b>Fullname</b></h5></div>
</div>  -->
	

<!-- query page loader-->
<div id="userlisting">


</div>

	
<!-- scripts starts here -->
<script>
		function pass_reset()  
			{ 
					if(confirm("Are you sure that you will reset this account's password?"))
					{
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								
								var url = "<?php echo base_url('queries/password_reset');?>"
								var x = document.getElementById("upaccount_id").value;
								var data = 'account_id='+ x;
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   alert("Password was reset!");        
								  //document.getElementById("div_pop_update").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
					}
			}
</script>			
			
<script>
		function pop_area()  
			{ 
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								
								var url = "<?php echo base_url('queries/reg_area');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send();  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("div_pop_area").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
				
			}
</script>
		
<script>
		function clear_add_user()  
			{ 
			document.getElementById("namef").value=""; 
			document.getElementById("namel").value="";
			document.getElementById("namem").value="";
			document.getElementById("xname").value="";
			document.getElementById("nameuser").value="";
			document.getElementById("cmb_area").value="";
			document.getElementById("cmb_user_type").value="";
				
			}
</script>

<script>
		function update_user(entry)  
			{ 
				temp = entry.split(",");
				account_id =temp[0];
				fname = temp[1];
				lname = temp[2];
				mname = temp[3];
				namex = temp[4];
				username = temp[5];
				password = temp[6];
				email = temp[7];
				usertype =temp[8];
				area_id = temp[9];
				
			document.getElementById("upaccount_id").value = account_id;
			document.getElementById("upfname").value = fname;
			document.getElementById("uplname").value = lname;
			document.getElementById("upmname").value = mname;

		
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								
								var url = "<?php echo base_url('queries/pop_area_update');?>"
								var data = 'area_id='+ area_id+'&usertype='+usertype+'&username='+username+'&email='+email+'&namex='+namex;
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("div_pop_update").innerHTML = xhr.responseText; 
															
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}



			
			
			}
</script>

<script>
	function submit_user_update()  
			{ 
		
			
			entryaccount_id = document.getElementById("upaccount_id").value ;
			entryfname = document.getElementById("upfname").value;
			entrylname = document.getElementById("uplname").value;
			entrymname = document.getElementById("upmname").value;
			entrynamex = document.getElementById("upnamex").value;
			entryemail = document.getElementById("upemail").value;
			entryarea = document.getElementById("cmb_area_update").value;
			entrytype = document.getElementById("uptype").value;
			entryusername = document.getElementById("upusername").value;	
			
					
			if(entryfname=="" || entrylname=="" || entryusername=="" || entryarea=="" || entrytype=="")
			{
				alert("Please dont leave required field/s empty...");		
			}
			else
			{
				
						if(confirm("Are you sure that you want to UPDATE this profile?"))
				{
									var x = document.getElementById("disabled_user").checked;
									if(x)
									{chk = '&chk=yes';
								
									}
									else
									{chk = '&chk=no' ;}
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
						
								var data = 'entryaccount_id='+ entryaccount_id +"&entryfname="+ entryfname +"&entrylname="+ entrylname+"&entrymname="+ entrymname+"&entrynamex="+ entrynamex+"&entryemail="+ entryemail+"&entryarea="+ entryarea+"&entrytype="+ entrytype+"&entryusername="+ entryusername + chk ;  
								//var data = 'entryaccount_id='+ entryaccount_id ;
							
								$("#updateuser").modal("hide");
								var url = "<?php echo base_url('queries/update_user');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("userlisting").innerHTML = xhr.responseText;  
								 
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								} 
			
				}
			}
					
		}


</script>


	<script>
		function disable_user(entry)  
			{ 
	
				temp = entry.split(",");
				var entryid = temp[0];
			
			
				if(confirm("Are you sure that you want to DISABLE "+temp[1]+" "+temp[3]+" "+temp[2]+"'s Account ?"))
				{
					
							
								var x = document.getElementById("disabled_user").checked;
									if(x)
									{chk = '&chk=yes';
								
									}
									else
									{chk = '&chk=no' ;}
							
							var xhr;  
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								var data = 'entryid='+ entryid +chk ;  
									
								var url = "<?php echo base_url('queries/disable_user');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("userlisting").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
										
				}
			
			
			}

	</script>
	
	<script>

		function enable_user(entry)  
			{ 
	
				temp = entry.split(",");
				var entryid = temp[0];
			
			
				if(confirm("Are you sure that you want to ENABLE "+temp[1]+" "+temp[3]+" "+temp[2]+"'s Account ?"))
				{
					
							
								var x = document.getElementById("disabled_user").checked;
									if(x)
									{chk = '&chk=yes';
								
									}
									else
									{chk = '&chk=no' ;}
							
							var xhr;  
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								var data = 'entryid='+ entryid +chk ;  
									
								var url = "<?php echo base_url('queries/enable_user');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("userlisting").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
										
				}
			}

	</script>

<script>
		


		function add_user()  
			{  
			
					
					var x = document.getElementById("disabled_user").checked;
					if(x)
					{chk = '&chk=yes';
				
					}
					else
					{chk = '&chk=no' ;}
			

			var entryfname = document.getElementById("namef").value; 
						
			var entrylname = document.getElementById("namel").value;
		
			var entrymname = document.getElementById("namem").value;
		
			var entrynamex = document.getElementById("xname").value;
			
			var entryusername = document.getElementById("nameuser").value
		
			var entryarea = document.getElementById("area_id").value;
					
			var entrytype = document.getElementById("cmb_user_type").value;
	
			var data = 'entryfname='+ entryfname +'&entrylname='+ entrylname+'&entrymname='+ entrymname+'&entrynamex='+ entrynamex+ '&entryusername='+ entryusername+ '&entryarea='+ entryarea + '&entrytype='+ entrytype +chk;
					
		
			
					if(entryfname=="" || entrylname=="" || entryusername=="" || entryarea=="" || entrytype=="")
					{
						alert("Please dont leave required field/s empty...");
								
					}
					else
					{
							
							//	$("#add_user_modal").modal({show: false});
								$("#add_user_modal").modal("hide");
								var xhr;  
							
								 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
									xhr = new XMLHttpRequest();  
								} else if (window.ActiveXObject) { // IE 8 and older  
									xhr = new ActiveXObject("Microsoft.XMLHTTP");  
								}  
									
									var url = "<?php echo base_url('queries/add_user');?>"
									 xhr.open("POST", url, true);   
									 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
									 xhr.send(data);  
									 xhr.onreadystatechange = display_data;  
									function display_data() {  
									 if (xhr.readyState == 4) {  
									  if (xhr.status == 200) {  
									   //alert(xhr.responseText);  					   
									  document.getElementById("userlisting").innerHTML = xhr.responseText; 
									  } else {  
										alert('There was a problem with the request.');  
									  }  
									 }  
									}  
								
							
						
					}
			}

</script>
<script>
		function search_user()  
			{  
		
			var x = document.getElementById("disabled_user").checked;
			if(x)
			{chk = '&chk=yes';
		
			}
			else
			{chk = '&chk=no' ;}
			var entry = document.getElementById("entry").value; 
			var xhr;  
				
				 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
					xhr = new XMLHttpRequest();  
				} else if (window.ActiveXObject) { // IE 8 and older  
					xhr = new ActiveXObject("Microsoft.XMLHTTP");  
				}  
					var data = "entry=" + entry + chk ;  
					
					var url = "<?php echo base_url('queries/search_user');?>"
					
					 xhr.open("POST", url, true);   
					 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
					 xhr.send(data);  
					 xhr.onreadystatechange = display_data;  
					function display_data() {  
					 if (xhr.readyState == 4) {  
					  if (xhr.status == 200) {  
					   //alert(xhr.responseText);        
					  document.getElementById("userlisting").innerHTML = xhr.responseText;  
					  } else {  
						alert('There was a problem with the request.');  
					  }  
					 }  
					}  
			}

</script>


