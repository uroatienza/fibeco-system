

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FIBECO INC.</title>

    <!-- Bootstrap -->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
	<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon"/>
	
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onLoad="pop_area()">
  	<div id="webpage-container">
	
		<div id="banner-container">				
			<p align="center"><img id="fibeco-logo" src="<?php echo base_url('assets/images/fibeco.png'); ?>">	 </p>							
		</div>
		<br><br>
			  <div id="form_bg">
				<div class="form-container">

					<div id="form-holder">
    <h1>Registration Form</h1>
	<div class="form-container">
		<form action="<?php echo base_url('register/post'); ?>" method="POST">
	<!--	<div class="combobox">
			<label for="exampleInputAddress">Area</label> <br>
			<select class ="selector" name="area_id" id="exampleInputArea">
				<option value="01">Valencia</option>
				<option value="02">Maramag</option>
				<option value="03">Kalilangan</option>
				<option value="04">Quezon</option>	
				<option value="05">Kibawe</option>				
				<option value="06">Don Carlos</option>				
			</select>
		</div>
		-->
		  <div class="form-group" id="div_pop_area">
								<!-- xml target nia para sa inner html -->
		  </div>
		  
		  <div class="form-group">
			<label for="exampleInputName">Fullname</label>
			<input required="true" type="text" class="form-control" name="fullname" id="exampleInputName" placeholder="Enter fullname">
		  </div>
		  <div class="form-group">
			<label for="exampleInputName">Username</label>
			<input required="true" type="text" class="form-control" name="user_id" id="exampleInputName" placeholder="Enter username">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input required="true" type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
		  <input required="true" type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
		  </div>	  
		  <p align="right">
		  <button type="submit" class="btn btn-info">Submit</button>
		  </p>
		  <br />
		  <br>
		  <p align="left">
		  <a  href='login'>Click Here Login</a>
			</p>
		</form>
				</div>
				</div>
			</div>
	</div>
					<div id="footer-container">
					
						<div >
							
							<br>
							<p id="footdetails-login">
							
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-phone-alt"></span>&nbsp;088-356-1026
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope"></span>&nbsp;fibeco_inc_maramag@yahoo.com.ph
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.google.com.ph/maps/place/FIBECO/@7.777494,125.007715,14z/data=!4m2!3m1!1s0x0:0x29fae7570a1cff73?sa=X&ei=ce1OVe7gNsbamAXAvoGADw&ved=0CHEQ_BIwCw" target="_blank">
							<span class="glyphicon glyphicon-map-marker"></span>&nbsp;Anahawon, Maramag, Bukidnon</a>
							<br><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-copyright-mark"></span> 2015 <b>FIBECO INC.</b>
						
							
							<p>
						</div>	
					
					</div>
			
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--script src="js/bootstrap.min.js"></script-->
		<script src="<?php echo base_url('assets/jquery-1.11.3.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
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
  </body>
</html>