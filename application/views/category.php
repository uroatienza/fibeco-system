
<body onLoad="search_category()">
<div  > <!-- Search and Add-->	
	<table >

		<tr>
			
			<td>	
		
				
					<div class="form-inline" >
						
						<input type="text" onKeyup="search_category()" class="form-control" id="entry" placeholder="Search ..." required="true" autocomplete="off">
						
						<button type="submit" id="btnsearch" onClick="search_category()" class="btn btn-default" data-toggle="tooltip" data-placement="auto" title="Search Category"><span class="glyphicon glyphicon-search"></span></button>
				
					</div>
					
					 
			
			</td>
			
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="button"  onClick="clear_category()" data-toggle="modal" class="btn btn-success" data-target="#addcategory" data-toggle="tooltip" data-placement="auto" title="Insert Entries">Add Category</button>
			<!-- Modal -->
					<div class="modal fade" id="addcategory" role="dialog" >
					<div class="modal-dialog">
							  
				<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add Category</h4>
					</div>
									
					<div class="modal-body">
							
										  
							<div class="form-group">
								<label for="areaname">Category Name : </label>
								<input type="text" class="form-control" id="category_name" required="true" autocomplete="off" placeholder="...">
							</div>
							
							<p align="right">
								<button type="submit" onClick="add_category()" class="btn btn-info" id="savearea" class="close" data-dismiss="modal">Save</button>
							</p>
						
						</div>
						</div>
						<div class="modal-footer">
									
						<!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
						</div>
						</div>  
						</div>
						 
						  <!-- Modal old-->
						  
						  
						 
				</td>
			</tr>
			<tr>
				<td>
				<p><input type="checkbox" onChange="search_category()" id="disabled_category" value="show"><font size="1">Display disabled category</font><p/>
				</td>
			</tr>
	</table>
	
</div>


<!-- HEADER-->

<!-- <div class="row"  >
	
	<div class="col-sm-4" style="background-color: rgb(163, 240, 193);"><h5><b>Complain Category</b></h5></div>
	<div class="col-sm-8" style="background-color: rgb(225, 225, 228);"><h5><b>&nbsp;</b></h5></div> 
	
</div> -->
<!-- query page loader-->
<div id="categorylisting">

</div>
	
	
<!-- scripts starts here -->
<script>
		function clear_category()  
			{ 

				document.getElementById("category_name").value = "";
				
			}
</script>

<script>
		function update_category(entry)  
			{ 
				temp = entry.split(",");
				var entryid = temp[0];
				var catname = temp[1];
				document.getElementById("old_id").value = entryid;
				document.getElementById("old_name").value = catname;
				
			}
</script>

<script>
	function submit_category_update()  
			{ 
				entryid = document.getElementById("old_id").value;
				entryname = document.getElementById("old_name").value;
				newname = document.getElementById("new_category").value;
			
			if(newname!=""){
				if(confirm("Are you sure that you want to UPDATE "+entryname+" Category with category ID of "+entryid+" ?"))
								{
									var x = document.getElementById("disabled_category").checked;
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
								var data = 'entryid='+ entryid +"&newname="+ newname + chk ;  
								
								var url = "<?php echo base_url('queries/update_category');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("categorylisting").innerHTML = xhr.responseText;  
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
		function disable_category(entry)  
			{ 
	
				temp = entry.split(",");
				var entryid = temp[0];
				if(confirm("Are you sure that you want to DISABLE "+temp[1]+" Category ?"))
				{
								var x = document.getElementById("disabled_category").checked;
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
								
								var url = "<?php echo base_url('queries/disable_category');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("categorylisting").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								} 
				}
			
			}

	</script>
	
	<script>
		function enable_category(entry)  
			{ 
	
				temp = entry.split(",");
				var entryid = temp[0];
				if(confirm("Are you sure that you want to ENABLE "+temp[1]+" Category ?"))
				{
								var x = document.getElementById("disabled_category").checked;
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
								
								var url = "<?php echo base_url('queries/enable_category');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send(data);  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("categorylisting").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								} 
				}
			
			}

	</script>

<script>
		


		function add_category()  
			{  
		
					var x = document.getElementById("disabled_category").checked;
					if(x)
					{chk = '&chk=yes';
				
					}
					else
					{chk = '&chk=no' ;}
		
			var entry = document.getElementById("category_name").value; 	
		
			var xhr;  
					if(entry!="")
					{
						 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
							xhr = new XMLHttpRequest();  
						} else if (window.ActiveXObject) { // IE 8 and older  
							xhr = new ActiveXObject("Microsoft.XMLHTTP");  
						}  
							var data = 'entry='+ entry + chk;
							var url = "<?php echo base_url('queries/add_category');?>"
							 xhr.open("POST", url, true);   
							 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
							 xhr.send(data);  
							 xhr.onreadystatechange = display_data;  
							function display_data() {  
							 if (xhr.readyState == 4) {  
							  if (xhr.status == 200) {  
							   //alert(xhr.responseText);  					   
							  document.getElementById("categorylisting").innerHTML = xhr.responseText; 
							  } else {  
								alert('There was a problem with the request.');  
							  }  
							 }  
							}  
						
					}
				
			}

</script>
<script>
		function search_category()  
			{  
			
			var x = document.getElementById("disabled_category").checked;
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
					
					var url = "<?php echo base_url('queries/search_category');?>"
					
					 xhr.open("POST", url, true);   
					 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
					 xhr.send(data);  
					 xhr.onreadystatechange = display_data;  
					function display_data() {  
					 if (xhr.readyState == 4) {  
					  if (xhr.status == 200) {  
					   //alert(xhr.responseText);        
					  document.getElementById("categorylisting").innerHTML = xhr.responseText;  
					  } else {  
						alert('There was a problem with the request.');  
					  }  
					 }  
					}  
			}

</script>


