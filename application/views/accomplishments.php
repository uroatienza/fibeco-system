
<body onLoad="load_order()" >
<div  > <!-- Search and Add-->	
	<table >

		<tr>
			
			<td>	
		
				
					<div class="form-inline" >
						
						<input type="text" id="srchbox" onKeyup="search_order()" class="form-control" id="entry" placeholder="Search ..." required="true" autocomplete="off">
						<button type="submit" id="btnsearch" onClick="search_order()" class="btn btn-default" data-toggle="tooltip" data-placement="auto" title="Search Area"><span class="glyphicon glyphicon-search"></span></button>
				
					</div>
					
				 	 
			
			</td>
			
			<td>
				
				</td>
			</tr>
			<tr>
				<td>
				
				<input type="checkbox"  id="showmore" onChange="advance()" id="all_orders" value="show"><font size="1">Show Advance Search</font>
			
				</td>
				
			</tr>
	</table>
	<div id="advance_search" hidden="true">
		
	<span class="glyphicon glyphicon-wrench"></span>&nbsp;<strong>Feature still under construction. Sorry for inconvenience.</strong>
		
	</div>
</div>
<br>
<!-- HEADER-->
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
									
									var entry=document.getElementById("srchbox").value;
								
							
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								var url = "<?php echo base_url('queries/search_accomplished');?>"
								var data = 'searchentry='+entry;
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



</script>
<script>
		function load_order()  
			{ 	
							
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								var url = "<?php echo base_url('queries/load_accomplished');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send();  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("order_listing").innerHTML = xhr.responseText;  
								  } else {  
									alert('There was a problem with the request.111');  
								  }  
								 }  
								}
				
			}
</script>




