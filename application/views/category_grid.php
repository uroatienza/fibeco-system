

               <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>Complain Category</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>

        <?php 
			foreach($list as $row){ ?>

                 <tr>
                  <td><?php echo $row->cat_name;  ?></td>
                  <td>
		                  	<button id="<?php echo $row->cat_id ?>" data-toggle="modal" data-target="#updatecategory" data-toggle="tooltip" data-placement="auto" title="<?php echo "Edit ".$row->cat_name;  ?>" onClick="update_category('<?php echo $row->cat_id.",".$row->cat_name;?>')"><span class="glyphicon glyphicon-edit" ></span></button>
						
						<?php 
						  if($row->status==1){ ?>
							<button id="<?php echo $row->cat_id ?>" data-toggle="tooltip" data-placement="auto" title="<?php echo "Disable ".$row->cat_name;  ?>" onClick="disable_category('<?php echo $row->cat_id.",".$row->cat_name;?>')"><span class="glyphicon glyphicon-remove" ></span></button>
						 <?php }
						  else{ ?>
							<button id="<?php echo $row->cat_id ?>" data-toggle="tooltip" data-placement="auto" title="<?php echo "Enable ".$row->cat_name;  ?>" onClick="enable_category('<?php echo $row->cat_id.",".$row->cat_name;?>')"><span class="glyphicon glyphicon-ok" ></span></button>
						  <?php } ?>
                  </td>
                </tr>
         <?php	}    ?>
                </tbody>
                </table>

		
				<!-- Modal -->
			<div class="modal fade" id="updatecategory" role="dialog">
					<div class="modal-dialog">
							  
				<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Update Category<h4>
					</div>
									
					<div class="modal-body" id="bgmod">
							
							<div class="form-group">
								
								<label for="areaname">Category ID : </label>
								<input type="text" class="form-control" id="old_id" required="true" autocomplete="off" placeholder="..." readonly="true">
								<label for="areaname">Category Name: </label>
								<input type="text" class="form-control" id="old_name" required="true" autocomplete="off" placeholder="..." readonly="true">
								
							</div>
						
						</div>
						
							<div class="modal-footer">
							<div class="form-group">
								<p align="left"><label for="areaname">New Category Name : </label></p>
								<input type="text" class="form-control" id="new_category" required="true" autocomplete="off" placeholder="...">
							</div>
							
							<p align="right">
								<button type="submit" onClick="submit_category_update()" class="btn btn-info" id="savearea" class="close" data-dismiss="modal">Update</button>
							</p>
						<!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
							</div>
					</div>
					
				</div>  
			</div>
						 
				<!-- Modal -->

