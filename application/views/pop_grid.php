  
				<label for="cmb_area"><b><font color="red" size="4px">*</font></b>&nbsp;Area: </label>
								<select class="form-control" required="true" id="cmb_area" name="cmb_area">

								  <option></option>
								  <?php foreach($list as $row){ ?>
								  <option value="<?php echo $row->area_id; ?>"><?php echo $row->area_desc;  ?></option>
								  <?php } ?>

				</select>
			

 