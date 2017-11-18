	<?php 
		$strxaxes = "";
		$stryaxes = "";
		if($list){	
			foreach($list as $row){ 
				$strxaxes = $strxaxes.",".$row->xaxes;
				$stryaxes = $stryaxes.",".$row->yaxes;

			}
			echo "<input type='hidden' id='labels' value='".$strxaxes."'> ";
			echo "<input type='hidden' id='data' value='".$stryaxes."'> ";
		}
		else
		{
			echo "<input type='hidden' id='labels' value=''> ";
			echo "<input type='hidden' id='data' value=''> ";
			
		}

		?>
  
				  
