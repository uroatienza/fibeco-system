
<body onLoad="pop_category(); load_order()" >
<div  > <!-- Search and Add-->	
	<table >

		<tr>
			
			<td>	
		
				
					<div class="form-inline" >
						
						<input type="text" id="srchbox" onKeyup="search_order()" class="form-control" id="entry" placeholder="Search ..." required="true" autocomplete="off">
						<button type="submit" id="btnsearch" onClick="search_order()" class="btn btn-default" data-toggle="tooltip" data-placement="auto" title="Search Area"><span class="glyphicon glyphicon-search"></span></button>
				
					</div>
					
					 
			
			</td>
			
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="button"  onClick="clear_add_user()" data-toggle="modal" class="btn btn-success" id="savearea" data-target="#create_job_order" data-toggle="tooltip" data-placement="auto" title="Insert Entries">Create Job Order</button>
				<!-- Modal -->
					<div class="modal fade" id="create_job_order" name="create_job_order" role="dialog" >
					<div class="modal-dialog">
							  
				<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Create Job Order for <b>[<?php echo $this->session->userdata('accnt_area_desc'); ?>]</b> area</h4>
					</div>
									
					<div class="modal-body">
	
							<div class="form-group">
							<label for="complain"><b><font color="red" size="4px">*</font></b>&nbsp;Complain: </label>
							<textarea type="textarea" name="entrycomplain" class="form-control" id="entrycomplain" required="true" autocomplete="off"  ></textarea>
							</div>

							<div class="form-group" id="div_pop_category">
								<!-- xml target nia para sa inner html -->
							</div>

							</div>

						<div class="modal-footer">
						<p align="right">
								<button type="button" onClick="add_order()" class="btn btn-info" id="add_order" >Save</button>
							</p>
						<!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
						</div>
						</div>  
						</div>
						 
						 <!-- Modal -->
				</td>
			</tr>
			<tr>
				<td>
				
				<input type="checkbox" onChange="load_order()" id="all_orders" value="show"><font size="1">Display Cancelled Job Order/s</font>
				&nbsp;&nbsp;<input type="checkbox"  id="showmore" onChange="advance()" id="all_orders" value="show"><font size="1">Show Advance Search</font>
			
				</td>
				
			</tr>
	</table>
	<div id="advance_search" hidden="true">
		
	<span class="glyphicon glyphicon-wrench"></span>&nbsp;<strong>Feature still under construction. Sorry for inconvenience.</strong>
		
	</div>
</div>

<br>
<!-- HEADER-->
<div>

</div>

<!-- <div class="row">
	<div class="col-sm-1" style="background-color: rgb(163, 240, 193);"><font size="1"><b>Order #</b></font></div>
	<div class="col-sm-2" style="background-color: rgb(163, 240, 193);"><font size="1"><b>Category</b></font></div>
	<div class="col-sm-2" style="background-color: rgb(225, 225, 228);"><font size="1"><b>Area</b></font></div>
	<div class="col-sm-2" style="background-color: rgb(225, 225, 228);"><font size="1"><b>Complain</b></font></div>
	<div class="col-sm-2" style="background-color: rgb(225, 225, 228);"><font size="1"><b>Author</b></font></div>
	<div class="col-sm-2" style="background-color: rgb(225, 225, 228);"><font size="1"><b>Filed</b></font></div>

	<div class="col-sm-1" style="background-color: rgb(219, 219, 240);"><font size="1"><b>Status</b></font></div>
</div>  -->
	

<!-- query page loader-->
<div id="order_listing">


</div>

	
<!-- scripts starts here -->
<script>
	function search_order()  
			{ 	
									var x = document.getElementById("all_orders").checked;
									var entry=document.getElementById("srchbox").value;
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
								
								var url = "<?php echo base_url('queries/search_order');?>"
								var data = 'searchentry='+entry+chk;
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("order_listing").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
				
			}
</script>
<script>

	function advance(){
		
		
		var x = document.getElementById("showmore").checked;
		
		if(x)
		{
				
			$("#advance_search").show("true");
		}
		else{
			
			$("#advance_search").hide("true");			
			
		}
		
	}


	function pushUpdate(entry)  
			{ 
					temp = entry.split(",");
		
					document.getElementById("entryid").value=temp[0];
					document.getElementById("entryarea").value=temp[1];
					document.getElementById("entrycategory").value=temp[2];
					document.getElementById("entrycomp").value=temp[3];
					document.getElementById("entryfinding").value=temp[4];	
					document.getElementById("entryactivity").value=temp[5];
					document.getElementById("entrytwg").value=temp[6];
					
					document.getElementById("current_stat").innerHTML="Current Status is "+temp[7];					
					document.getElementById("orderheader").innerHTML="Job Order filed on: "+temp[8];


					if(temp[7]=="IN PROGRESS"){
					
							$("#hideandseek").show("true");
							$("#hideandseek2").show("true");
							$("#hideandseek3").show("true");
					}
					if(temp[7]=="CANCELLED"){
							$("#hideandseek").hide("true");
							$("#hideandseek2").hide("true");
							$("#hideandseek3").hide("true");
							
					}
					$("#accom_modal").modal("show");
				

			}
			

		function accomplish_order(){
			/*
					document.getElementById("entryid").value=temp[0];

					document.getElementById("entryfinding").value=temp[4];	
					document.getElementById("entryactivity").value=temp[5];
					document.getElementById("entrytwg").value=temp[6];
					document.getElementById("utype").value
			
			load_order();
			*/

			var entryfinding = document.getElementById("entryfinding").value;
			var entrystatus = document.getElementById("uptype").value;
			var entrytwg = document.getElementById("entrytwg").value;
			var entryactivity = document.getElementById("entryactivity").value;
			var entryid = document.getElementById("entryid").value;
			var data = 'entryid='+entryid+'&entryfinding='+entryfinding+'&entryactivity='+entryactivity+'&entrytwg='+entrytwg+'&entrystatus='+entrystatus;
			
		
			if(entrystatus=="CANCELLED"){
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								var url = "<?php echo base_url('queries/update_order');?>"
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  //document.getElementById("order_listing").innerHTML = xhr.responseText;  
								  load_order();
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
			}
			else{
						if(entryfinding=="" || entrystatus=="" || entrytwg=="" || entryactivity==""){
						alert("Please dont leave the required field/s empty");	
						}
						else{
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								var url = "<?php echo base_url('queries/update_order');?>"
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								 // document.getElementById("order_listing").innerHTML = xhr.responseText;  
								  load_order();
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
							}
		
			}
		}
		
		
		function clear_add_user(){
			document.getElementById("entrycomplain").value="";
			document.getElementById("cmb_comp_cat").value="";
			
		}
	function add_order()  
			{ 
					entrycomplain = document.getElementById("entrycomplain").value;
					entrycategory = document.getElementById("cmb_comp_cat").value;
					
				
					
					
					if(entrycomplain=="" || entrycategory=="")
					{
						alert("Please dont leave the required field/s emptry.")
					}
					else
					{					
									var x = document.getElementById("all_orders").checked;
								
									if(x)
									{chk = '&chk=yes';
								
									}
									else
									{chk = '&chk=no' ;}
								
								$("#create_job_order").modal("hide");

								var data = 'complain='+entrycomplain+'&category_id='+entrycategory;
								
								var xhr; 
								 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
									xhr = new XMLHttpRequest();  
								} else if (window.ActiveXObject) { // IE 8 and older  
									xhr = new ActiveXObject("Microsoft.XMLHTTP");  
								}  
									
									var url = "<?php echo base_url('queries/add_order');?>"
									
									 xhr.open("POST", url, true);   
									 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
									 xhr.send(data);  
									 xhr.onreadystatechange = display_data;  
									function display_data() {  
								
									 if (xhr.readyState == 4) {  
										
									  if (xhr.status == 200) {  
									   //alert(xhr.responseText);        
									   //document.getElementById("order_listing").innerHTML = xhr.responseText;
									  	load_order();
									  } else {  
										alert('There was a problem with the request.');  
									  }  
									 }  
									}
									
								
					}

			
			}
			

</script>
<script>
		function load_order()  
			{ 	
									var x = document.getElementById("all_orders").checked;
								
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
								
								var url = "<?php echo base_url('queries/load_order');?>"
								var data = chk;
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {
								
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("order_listing").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
				
			}
</script>
 
<script>
		function pop_category()  
			{ 
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								var url = "<?php echo base_url('queries/pop_complain_category');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send();  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("div_pop_category").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
				
			}
</script>
		


