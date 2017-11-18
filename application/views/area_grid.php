

               <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>Area ID</th>
                  <th>Description</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>

        <?php 
			foreach($list as $row){ ?>

                 <tr>
                  <td><?php echo $row->area_id;  ?></td>
                  <td><?php echo $row->area_desc;  ?></td>
                  <td>
                  	<div class="col-sm-4">
					  <button id="<?php echo $row->area_id ?>" data-toggle="modal" data-target="#updatearea" data-toggle="tooltip" data-placement="auto" title="<?php echo "Edit ".$row->area_desc;  ?>" onClick="update_area('<?php echo $row->area_id.",".$row->area_desc;?>')"><span class="glyphicon glyphicon-edit" ></span></button>
					
					<?php 
					  if($row->status==1){ ?>
						<button id="<?php echo $row->area_id ?>" data-toggle="tooltip" data-placement="auto" title="<?php echo "Disable ".$row->area_desc;  ?>" onClick="disable_area('<?php echo $row->area_id.",".$row->area_desc;?>')"><span class="glyphicon glyphicon-remove" ></span></button>
					 <?php }
					  else{ ?>
						<button id="<?php echo $row->area_id ?>" data-toggle="tooltip" data-placement="auto" title="<?php echo "Enable ".$row->area_desc;  ?>" onClick="enable_area('<?php echo $row->area_id.",".$row->area_desc;?>')"><span class="glyphicon glyphicon-ok" ></span></button>
					  <?php } ?>
				  </div>	
					</td>
                </tr>
         <?php	}    ?>
                </tbody>
                </table>

		
				<!-- Modal -->
			<div class="modal fade" id="updatearea" role="dialog">
					<div class="modal-dialog">
							  
				<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Update Area<h4>
					</div>
									
					<div class="modal-body" id="bgmod">
							
							<div class="form-group">
								<label for="areaid">Area ID : </label>
								<input type="text" class="form-control" id="update_id" required="true" autocomplete="off" placeholder="..." readonly="true"> 
							
								<label for="areadesc">Description : </label>
								<input type="text" class="form-control" id="update_desc" required="true" autocomplete="off" placeholder="..." readonly="true">
								
							</div>
						
						</div>
						
							<div class="modal-footer">
							<div class="form-group">
								<p align="left"><label for="areaname">New Description : </label></p>
								<input type="text" class="form-control" id="new_desc" required="true" autocomplete="off" placeholder="...">
							</div>
							
							<p align="right">
								<button type="submit" onClick="submit_area_update()" class="btn btn-info" id="savearea" class="close" data-dismiss="modal">Update</button>
							</p>
						<!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
							</div>
					</div>
					
				</div>  
			</div>
						 
				<!-- Modal -->

