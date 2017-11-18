 <?php 

extract($datum);
extract($passdata);

 ?>				
 
					
								<div class="form-group">
							<label for="upnamex">Name Extension: </label>
							<select class="form-control" id="upnamex" name="upnamex" >
								<option></option>
								<option value ="JR"  <?php if(strcmp($namex,"JR")==0){echo "selected";} ?> >JR</option>
								<option value ="SR"  <?php if(strcmp($namex,"SR")==0){echo "selected";} ?>>SR</option>
								<option value ="I"  <?php if(strcmp($namex,"I")==0){echo "selected";} ?>>I</option>
								<option value ="II" <?php if(strcmp($namex,"II")==0){echo "selected";} ?>>II</option>
								<option value ="III" <?php if(strcmp($namex,"III")==0){echo "selected";} ?>>III</option>
								</select>
							</div>
							<div class="form-group">
							<label for="upusername"><b><font color="red" size="4px">*</font></b>&nbsp;Username: </label>
							<input type="text" name="upusername" value = "<?php echo $username;?>" class="form-control" id="upusername" required="true" autocomplete="off"  placeholder="Username...">
							</div>
							<div class="form-group">
							<label for="upemail">Email: </label>
							<input type="text" name="upemail" value = "<?php echo $email;?>" class="form-control" id="upemail" required="true" autocomplete="off"  placeholder="Username...">
							</div>
							
							<div class="form-group">
							<label for="cmb_area"><b><font color="red" size="4px">*</font></b>&nbsp;Area: </label>
											<select class="form-control" required="true" id="cmb_area_update" name="cmb_area_update">

											  <option></option>
											  <?php foreach($list as $row){ ?>
											  <option value="<?php echo $row->area_id; ?>" <?php if(strcmp($row->area_id,$area_id)==0){echo "selected";} ?> ><?php echo $row->area_desc;  ?></option>
											  <?php } ?>

											</select>
							</div>

								<div class="form-group">
								<label for="uptype"><b><font color="red" size="4px">*</font></b>&nbsp;User Type: </label>
									<select class="form-control" required="true" name="uptype" id="uptype" placeholder="Select User Type...">
									 <option></option>
									<option value ="STAFF" <?php if(strcmp($usertype,"STAFF")==0){echo "selected";} ?>>STAFF</option>
									<option value ="DATA ENCODER" <?php if(strcmp($usertype,"DATA ENCODER")==0){echo "selected";} ?>>DATA ENCODER</option>
									<option value ="ADMINISTRATOR" <?php if(strcmp($usertype,"ADMINISTRATOR")==0){echo "selected";} ?>>ADMINISTRATOR</option>
								</select>
								</div>