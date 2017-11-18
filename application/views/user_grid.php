



               <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>

        <?php 
			foreach($list as $row){ ?>

					<?php $passdata = $row->account_id.",".$row->fname.",".$row->lname.",".$row->mname.",".$row->namex.",".$row->user_id.",".$row->password.",".$row->email.",".$row->type.",".$row->area_id.",".$row->active; ?>

                 <tr>
                  <td><?php echo $row->account_id;  ?></td>
                  <td><?php echo $row->user_id;  ?></td>
                  <td><?php if(strcmp($row->mname,"")==0){$middle=" ";}else{$middle=substr($row->mname,0,1).". ";}?>
				   <div class="col-sm-3"><?php echo $row->fname." ".$middle.$row->lname;  ?></div></td>
                  <td><?php 
							$passdata = $row->account_id.",".$row->fname.",".$row->lname.",".$row->mname.",".$row->namex.",".$row->user_id.",".$row->password.",".$row->email.",".$row->type.",".$row->area_id.",".$row->active;
						?>
					  <button id="<?php echo $row->account_id ?>" data-toggle="modal" data-target="#updateuser" data-toggle="tooltip" data-placement="auto" title="<?php echo "Edit ".$row->fname." ".$row->lname;  ?>" onClick="update_user('<?php echo $passdata; ?>')"><span class="glyphicon glyphicon-edit" ></span></button>
					
					<?php 
					  if($row->active==1){ ?>
						<button id="<?php echo $row->account_id ?>" data-toggle="tooltip" data-placement="auto" title="<?php echo "Disable ".$row->fname." ".$row->lname;  ?>" onClick="disable_user('<?php echo $row->account_id.",".$row->fname.",".$row->lname.",".$row->mname;?>')"><span class="glyphicon glyphicon-remove" ></span></button>
					 <?php }
					  else{ ?>
						<button id="<?php echo $row->account_id ?>" data-toggle="tooltip" data-placement="auto" title="<?php echo "Enable ".$row->fname." ".$row->lname;  ?>" onClick="enable_user('<?php echo $row->account_id.",".$row->fname.",".$row->lname.",".$row->mname;?>')"><span class="glyphicon glyphicon-ok" ></span></button>
					  <?php } ?>
					</td>
                </tr>
         <?php	}    ?>
                </tbody>
                </table>


		
				<!-- Modal -->
			<div class="modal fade" id="updateuser" role="dialog">
					<div class="modal-dialog">
							  
				<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit User Profile<h4>
					</div>
									
					<div class="modal-body" id="bgmod">
							
							<div class="form-group">
							<input type="hidden" name="upaccount_id" id="upaccount_id" ">
						
							<label for="upfname"><b><font color="red" size="4px">*</font></b>&nbsp;First Name: </label>
							<input type="text" name="upfname" class="form-control" id="upfname" required="true" autocomplete="off"  placeholder="First name...">
							</div>
							<div class="form-group">
							<label for="uplname"><b><font color="red" size="4px">*</font></b>&nbsp;Last Name: </label>
							<input type="text" name="uplname" class="form-control" id="uplname" required="true" autocomplete="off"  placeholder="Last name...">
							</div>
							<div class="form-group">
							<label for="upmname">Middle Name: </label>
							<input type="text" name="upmname" class="form-control" id="upmname" required="true" autocomplete="off"  placeholder="Middle name...">
							</div>
						
							<div class="form-group" id="div_pop_update">
							
								<!-- xml target here for inner html -->
							</div>
					
							
						</div>
							<div class="modal-footer">

							
							<p align="right">
							<button onClick="pass_reset()" class="btn btn-warning">Reset Password</button>
								<button type="button" onClick="submit_user_update()" class="btn btn-info" id="saveupdate" ">Update Profile</button>
							</p>
						<!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
							</div>
					
					
				</div>  
			</div>
						 
				<!-- Modal -->

