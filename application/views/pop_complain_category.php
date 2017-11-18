  
				<label for="cmb_comp_cat"><b><font color="red" size="4px">*</font></b>&nbsp;Complain Category: </label>
								<select class="form-control" required="true" id="cmb_comp_cat" name="cmb_comp_cat">

								  <option></option>
								  <?php foreach($list as $row){ ?>
								  <option value="<?php echo $row->cat_id; ?>"><?php echo $row->cat_name;  ?></option>
								  <?php } ?>

				</select>
			

 