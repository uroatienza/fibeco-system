		 <div class="row">
				<div class="col-sm-12" >
					&nbsp;&nbsp;<label for="report_area">Area:</label>
								<select class="form-control" required="true" id="report_area" name="report_area">
							
								  <?php foreach($list as $row){ ?>
								  <option value="<?php echo $row->area_id; ?>" <?php if(strcmp($row->area_id,$this->session->userdata('accnt_area_id'))==0){echo "selected";} ?>><?php echo $row->area_desc;  ?></option>
								  <?php } ?>

								</select>
			
							
					 </div>
					 			<div class="col-sm-7" style="background-color:lavender;">
				
			
								</div>
					 </div>
 
		</div>
	