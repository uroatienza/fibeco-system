
<body onLoad="search_area()">
<div  > <!-- Search and Add-->	
	<table >

		<tr>
			
			<td>	
		
				
					<div class="form-inline" >
						
						<input type="text" onKeyup="search_area()" class="form-control" id="entry" placeholder="Search ..." required="true" autocomplete="off">
						
						<button type="submit" id="btnsearch" onClick="search_area()" class="btn btn-default" data-toggle="tooltip" data-placement="auto" title="Search Area"><span class="glyphicon glyphicon-search"></span></button>
				
					</div>
					
					 
			
			</td>
			
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="button"  onClick="clear_area()" data-toggle="modal" class="btn btn-success" id="savearea" data-target="#addarea" data-toggle="tooltip" data-placement="auto" title="Insert Entries">Add Area</button>
				<!-- Modal -->
					<div class="modal fade" id="addarea" role="dialog" >
					<div class="modal-dialog">
							  
				<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add Area</h4>
					</div>
									
					<div class="modal-body">
							
							<div class="form-group">
								<label for="areaid">Area ID : </label>
								<input type="text" class="form-control" id="area_id" required="true" autocomplete="off" placeholder="...">
							</div>
										  
							<div class="form-group">
								<label for="areaname">Description : </label>
								<input type="text" class="form-control" id="area_desc" required="true" autocomplete="off" placeholder="...">
							</div>
							
							<p align="right">
								<button type="submit" onClick="add_area()" class="btn btn-info" id="savearea" class="close" data-dismiss="modal">Save</button>
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
				<p><input type="checkbox" onChange="search_area()" id="disabled_area" value="show"><font size="1">Display disabled area</font><p/>
				</td>
			</tr>
	</table>
	
</div>


<!-- HEADER-->
<!-- <div class="row">
	<div class="col-sm-4" style="background-color: rgb(163, 240, 193);"><h5><b>Area ID</b></h5></div>
	<div class="col-sm-8" style="background-color: rgb(225, 225, 228);"><h5><b>Description</b></h5></div>
</div>  -->
	

<!-- query page loader-->
<div id="arealisting">

</div>
	
	
<!-- scripts starts here -->
<script>
		function clear_area()  
			{ 

				document.getElementById("area_id").value = "";
				document.getElementById("area_desc").value = "";
				
			}
</script>

<script>
		function update_area(entry)  
			{ 
				temp = entry.split(",");
				var entryid = temp[0];
				var entrydesc = temp[1];
				document.getElementById("update_id").value = entryid;
				document.getElementById("update_desc").value = entrydesc;
				
			}
</script>

<script>
	function submit_area_update()  
			{ 
				entryid = document.getElementById("update_id").value;
				entrydesc = document.getElementById("update_desc").value;
				newdesc = document.getElementById("new_desc").value;
			if(newdesc!=""){
				if(confirm("Are you sure that you want to UPDATE "+entrydesc+" Area with area ID of "+entryid+" ?"))
								{
									var x = document.getElementById("disabled_area").checked;
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
								var data = 'entryid='+ entryid +"&newdesc="+ newdesc + chk ;  
								
								var url = "<?php echo base_url('queries/update_area');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("arealisting").innerHTML = xhr.responseText;  
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
		function disable_area(entry)  
			{ 
	
				temp = entry.split(",");
				var entryid = temp[0];
				if(confirm("Are you sure that you want to DISABLE "+temp[1]+" Area ?"))
				{
								var x = document.getElementById("disabled_area").checked;
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
								
								var url = "<?php echo base_url('queries/disable_area');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("arealisting").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								} 
				}
			
			}

	</script>
	
	<script>
		function enable_area(entry)  
			{ 
	
				temp = entry.split(",");
				var entryid = temp[0];
				if(confirm("Are you sure that you want to ENABLE "+temp[1]+" Area ?"))
				{
								var x = document.getElementById("disabled_area").checked;
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
								
								var url = "<?php echo base_url('queries/enable_area');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("arealisting").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								} 
				}
			
			}

	</script>

<script>
		


		function add_area()  
			{  
		
					var x = document.getElementById("disabled_area").checked;
					if(x)
					{chk = '&chk=yes';
				
					}
					else
					{chk = '&chk=no' ;}
		
			var entryid = document.getElementById("area_id").value; 	
			var entrydesc = document.getElementById("area_desc").value;
			var xhr;  
					if(entryid!="" && entrydesc!="")
					{
						 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
							xhr = new XMLHttpRequest();  
						} else if (window.ActiveXObject) { // IE 8 and older  
							xhr = new ActiveXObject("Microsoft.XMLHTTP");  
						}  
							var data = 'entryid='+ entryid + '&entrydesc='+ entrydesc+ chk;
							var url = "<?php echo base_url('queries/add_area');?>"
							 xhr.open("POST", url, true);   
							 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
							 xhr.send(data);  
							 xhr.onreadystatechange = display_data;  
							function display_data() {  
							 if (xhr.readyState == 4) {  
							  if (xhr.status == 200) {  
							   //alert(xhr.responseText);  					   
							  document.getElementById("arealisting").innerHTML = xhr.responseText; 
							  } else {  
								alert('There was a problem with the request.');  
							  }  
							 }  
							}  
						
					}
				
			}

</script>
<script>
		function search_area()  
			{  
			
			var x = document.getElementById("disabled_area").checked;
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
					
					var url = "<?php echo base_url('queries/search_area');?>"
					
					 xhr.open("POST", url, true);   
					 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
					 xhr.send(data);  
					 xhr.onreadystatechange = display_data;  
					function display_data() {  
					 if (xhr.readyState == 4) {  
					  if (xhr.status == 200) {  
					   //alert(xhr.responseText);        
					  document.getElementById("arealisting").innerHTML = xhr.responseText;  
					  } else {  
						alert('There was a problem with the request.');  
					  }  
					 }  
					}  
			}

</script>


