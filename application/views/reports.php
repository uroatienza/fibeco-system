<body onLoad="report_area()">
	<div id="report_options">

		  <div class="row">
				<div class="col-sm-3" >
							<label for="report_type"></font></b>&nbsp; Select type of report: </label>
							<select class="form-control" onchange="dig()"  required="true" id="report_type" name="report_type" >
								 <option value="Accomplishments" selected>Accomplishments by Area</option> <!--accomplish and over cancelled/ over in progress -->
								 <option value="Complains">Complains by Categories</option>
								 <option value="Categories">Complain Categories by Area </option>
								
							</select>

							
				</div>
				<div class="col-sm-3" >
						<label for="report_grouping"></font></b>&nbsp; Report grouping: </label>
						<select class="form-control" required="true" id="report_grouping" name="report_grouping">

											
												  <option value="Range" selected>Date Range</option>
												  <option value="Monthly">Monthly</option>
												  <option value="Quarterly">Quarterly</option>
												  <option value="Annually">Annually</option>	  
						</select>
				</div>
				<div class="col-sm-3" >
						<div id="date1">
							<div class="container" id="sandbox-container" >
							<label for="startdate"></font></b>&nbsp; Start Date: </label>
							<div class="input-daterange input-group" id="datepicker">
							<input class="input-sm form-control" name="startdate" type="text" id="startdate" readOnly="true">
							<span class="input-group-addon" > <span class="glyphicon glyphicon-th " onClick="clickstart()" ></span></span>
							</input>
							
							</div>
							</div>
						</div>
				</div>

				<div class="col-sm-3" >
						<div id="date2">
							<div class="container" id="sandbox-container" >
							<label for="startdate"></font></b>&nbsp; End Date: </label>
							<div class="input-daterange input-group" id="datepicker">
							<input class="input-sm form-control" name="enddate" type="text" id="enddate" readOnly="true">
							<span class="input-group-addon"> <span class="glyphicon glyphicon-th" onClick="clickend()"></span></span>
							</div>
						</div>
				</div>
				</div>


		  </div>
			<div id="addoption" name="addoption" >	

			<!--query area via ajax-->
			</div>
	</div>
		
		<div id="datatarget" name="datatarget">
		
		</div>
		
		<br>
		<p align="right" >
		<button type="button" class="btn btn-success" onClick="get_query()">Generate Graph</button>
		</p>
		<br>
		


	
		<!--<div style="width:30%"> -->
		
			<div id="graphreport" style="width:100%">
				<canvas id="canvas" height="400" width="800"></canvas>
			</div>
	
		<!-- </div> -->




	<script>
		function clickstart(){
				$("#startdate").focus();
		}
		function clickend(){
				$("#enddate").focus();
		}	
	</script>
	<script>	
	function get_query(){
	
			
		
		var type = document.getElementById('report_type').value;
		var area = document.getElementById('report_area').value;
		var grouping = document.getElementById('report_grouping').value;
		var start = document.getElementById('startdate').value;
		var end = document.getElementById('enddate').value;
		
	


		
		
			if(end=="" || start=="")
				{
				alert("Please select required date fields!");
				}
			else
				{
					var temp = start.split("/");
					start = temp[2]+"-"+temp[0]+"-"+temp[1];
					temp = end.split("/");
					end = temp[2]+"-"+temp[0]+"-"+temp[1];
					
					var a = new Date(start);
					var b = new Date(end);
					
				   if (a > b) {
						alert("Please select proper date fields combination!");
					}else {
									var xhr; 
								 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
									xhr = new XMLHttpRequest();  
								} else if (window.ActiveXObject) { // IE 8 and older  
									xhr = new ActiveXObject("Microsoft.XMLHTTP");  
								}  
									
									var data = 'type='+type+'&area='+area+'&grouping='+grouping+'&start='+start+'&end='+end;
								
									var url = "<?php echo base_url('queries/graphing');?>"
									
									 xhr.open("POST", url, true);   
									 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
									 xhr.send(data);  
									 xhr.onreadystatechange = display_data;  
									function display_data() {  
									 if (xhr.readyState == 4) {  
									  if (xhr.status == 200) {  
									   //alert(xhr.responseText);        
									  document.getElementById("datatarget").innerHTML = xhr.responseText;  
									  create_graph(type);
									  } else {  
										alert('There was a problem with the request.');  
									  }  
									 }  
									}
					}
				}
		
}

		function create_graph(type){


		var labels = document.getElementById('labels').value;
		var data = document.getElementById('data').value;


		
		labels = labels.split(",");
		data = data.split(",");
		
	
		
		var x = document.getElementById('report_type').value;
	
		if(x=="Complains" || x =="Categories" ){
			
				var barChartData = {
					labels,
					datasets : [
						{
								label: type,
								fillColor : "rgba(151,187,205,0.2)",
								strokeColor : "rgba(151,187,205,1)",
								pointColor : "rgba(151,187,205,1)",
								pointStrokeColor : "#fff",
								pointHighlightFill : "#fff",
								pointHighlightStroke : "rgba(151,187,205,1)",
								data 
						}
					]

				}
				
						var ctx = document.getElementById("canvas").getContext("2d");
						window.myBar = new Chart(ctx).Bar(barChartData, {
						responsive : true
						});
							
			
		}
		else{
			
					var lineChartData = {

						labels,
						datasets : [
							{
								label: type,
								fillColor : "rgba(151,187,205,0.2)",
								strokeColor : "rgba(151,187,205,1)",
								pointColor : "rgba(151,187,205,1)",
								pointStrokeColor : "#fff",
								pointHighlightFill : "#fff",
								pointHighlightStroke : "rgba(151,187,205,1)",
								data
							},

						]
					}
						
						var ctx = document.getElementById("canvas").getContext("2d");
						window.myLine = new Chart(ctx).Line(lineChartData, {
						responsive: true
						});
				
		}

		
		

		
	}


	</script>

	
	
<script>
	function dig()
	{
		var x = document.getElementById('report_type').value;
		
		if(x=="Accomplishments" || x=="Categories")
		{
			$("#addoption").show("true");
			

			
				//report_area();
		}
		else{ 
	
			$("#addoption").hide("true");
		}
		
	}
		


</script>
<script>
		function report_area()  
			{ 
						// $("#addoption").hide("true");
						 
							var xhr; 
							 if (window.XMLHttpRequest) { // Mozilla, Safari, ...  
								xhr = new XMLHttpRequest();  
							} else if (window.ActiveXObject) { // IE 8 and older  
								xhr = new ActiveXObject("Microsoft.XMLHTTP");  
							}  
								
								
								var url = "<?php echo base_url('queries/report_area');?>"
								
								 xhr.open("POST", url, true);   
								 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                    
								 xhr.send();  
								 xhr.onreadystatechange = display_data;  
								function display_data() {  
								 if (xhr.readyState == 4) {  
								  if (xhr.status == 200) {  
								   //alert(xhr.responseText);        
								  document.getElementById("addoption").innerHTML = xhr.responseText;  
								 
								  } else {  
									alert('There was a problem with the request.');  
								  }  
								 }  
								}
				
			}
</script>