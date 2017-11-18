 


	<?php 

		foreach($list as $row){ ?>
		
				<?php	$str = $row->comp_id."#".$row->area_desc."#".$row->cat_name."#".$row->complain."#".$row->field_finding."#".$row->activity."#".$row->twg."#".$row->orderstatus."#".$row->stamp_filed."#".$row->stamp_accomplished;
		?>	
		<font size=2>
			<div class="row">		

				  <a href='#' onClick="pushUpdate('<?php echo $str; ?>')" title="<?php echo $row->orderstatus; ?>">
				  <div class="col-sm-1"><?php echo $row->comp_id;  ?></div>
				  <div class="col-sm-2"><?php echo strtolower(substr($row->cat_name,0,20));  ?></div>
				  <div class="col-sm-2"><?php echo strtolower($row->area_desc); ?></div>
				  <div class="col-sm-2"><?php echo substr($row->complain,0,20);  ?></div>
				  <div class="col-sm-2"><?php echo strtolower($row->lname.'.'.substr($row->fname,0,1).substr($row->mname,0,1));  ?></div>
				  <div class="col-sm-2"><?php echo $row->stamp_filed;  ?></div>
			
				  <div class="col-sm-1">
				  <?php if(strcmp($row->orderstatus,"IN PROGRESS")==0){echo "<span class='glyphicon glyphicon-repeat'></span>";}
				  if(strcmp($row->orderstatus,"CANCELLED")==0){echo "<span class='glyphicon glyphicon-ban-circle'></span>";}
				  if(strcmp($row->orderstatus,"ACCOMPLISHED")==0){echo "<span class='glyphicon glyphicon-check'></span>";}
				  ?></div>
				  </a>
		    </div>		
			 </font>
	<?php	}    ?>
	
<!-- Modal -->
  <div class="modal fade" id="accom_modal" name="accom_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><div class="modal-title "  id="orderheader" name="orderheader"></div>[<span name="current_stat" id="current_stat"></span>]</h4>
         
		  </div>
        <div class="modal-body">
		  					<div class="form-group">
							<label for="complain">Order #: </label>
							<input type="text" name="entryid" readOnly="true"  class="form-control" id="entryid" required="true" autocomplete="off"  >
							</div>
							<div class="form-group">
							<label for="complain">Area: </label>
							<input type="text" name="entryarea" readOnly="true"  class="form-control" id="entryarea" required="true" autocomplete="off"  >
							</div>
							<div class="form-group">
							<label for="complain">Category: </label>
							<input type="text" name="entrycategory" readOnly="true"  class="form-control" id="entrycategory" required="true" autocomplete="off"  >
							</div>
							<div class="form-group">
							<label for="complain">Complain: </label>
							<input type="text" name="entrycomp" readOnly="true"  class="form-control" id="entrycomp" required="true" autocomplete="off"  >
							</div>
							
							<div id="hideandseek3">
								<div class="form-group">
								<label for="complain"><b><font color="red" size="4px">*</font></b>&nbsp;Field Findings: </label>
								<textarea type="textarea"  readOnly="true" name="entryfinding" class="form-control" id="entryfinding" required="true" autocomplete="off"  placeholder="..."></textarea>
								</div>
								<div class="form-group">
								<label for="complain"><b><font color="red" size="4px">*</font></b>&nbsp;Activity: </label>
								<textarea type="textarea"  readOnly="true" name="entryactivity" class="form-control" id="entryactivity" required="true" autocomplete="off"  placeholder="..."></textarea>
								</div>
								<div class="form-group" >
								<label for="complain"><b><font color="red" size="4px">*</font></b>&nbsp;Technical Working Group: </label>
								<textarea type="text" readOnly="true" name="entrytwg" class="form-control" id="entrytwg" required="true" autocomplete="off" ></textarea>
								</div>
							</div>
	

        </div>
		
        <div class="modal-footer">
			
        </div>
      </div>
      
    </div>
  </div>