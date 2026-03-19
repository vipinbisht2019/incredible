<!doctype html>
<html lang="en">
 <head>
	<title>Flight View</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <?php include('top.inc.php') ?>
     <script language="JavaScript">
// Function to Select / DeSelect all the CheckBoxes........
// Function to Select / DeSelect all the CheckBoxes........
function checkall(objForm){
	len = objForm.elements.length;
	var i=0;
	for( i=0 ; i<len ; i++) {
		if (objForm.elements[i].type=='checkbox') {
			objForm.elements[i].checked=objForm.check_all.checked;
		}
	}
}

/////////////////////////////////////////////////
// Javascript Function Check that atlease one Checkbox is checked to delete..If no then alert with (Nothing to Delete) and If yes then (Are you sure you want to Delete) and then return true / false........
function confdel()
  {
			var fl = 0;
			for(i = 0; i < (document.form1.elements.length); i++)
			{
				if((document.form1.elements[i].type=="checkbox") && (document.form1.elements[i].checked==true))
				{
					fl = 1;
					break;
				}
			}
			if(fl == 1)
			{
				if(confirm("Are you sure you want to delete?"))
				{
					fl = 1;
				}
				else
				{
					fl = 0;
				}
			}
			else
			{
				alert("Nothing to delete.");
				fl = 0;
			}
			if(fl == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
  }


</script>
 </head>
<body>
	<div id="wrapper">
          <?php include('header.inc.php') ?>	
          <?php include('left.inc.php') ?>	
     <div class="main">
			<div class="main-content">
				<div class="container-fluid">
				<div class="col-md-12" style="width:auto;">
                
                <div class="panel-heading col-md-12 col-xs-12 padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3" style="margin-bottom: 14px;"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Flight View</strong></h3>
						</div>
				<!--    <div class="col-md-6 padding_opx">
                          <a href="<?php // echo base_url('admin/flights/add'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Add Flight </a>                             
						</div>  -->
						
					</div>
				</div>


			<div class="panel">		
                  
				<div class="panel-body">
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('flights')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?php echo $error; ?>
                                      </div>
                                    
                                    <?php        
                                      }
									 
									   // echo"<pre>"; 
									   // print_r($regions);
									   //echo"</pre>"; 
                                    ?>
                                    </div>
                  <?php                         
						  $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
						  echo form_open_multipart('admin/flights/bulk_action', $attributes); 
					?>                                
                
					<table class="table table-bordered table_margin_top">
						<thead>
							  <tr>
                                    <th>No</th>
                                    <th>Date Created</th>
                                    <th>Booking Id</th>
                                    <th>Booking Type</th>
                                    <th>Departure Code</th>									
                                    <th>Return Departure Code</th>									
                                    <th>Departure City</th>
                                    <th>Return Departure City</th>									
                                    <th>Arrival Code</th>
                                    <th>Return Arrival Code</th>									
                                    <th>Arrival City</th>
                                    <th>Return Arrival City</th>									
									<th>Departure Date</th>
                                    <th>Return Departure Date</th>									
                                    <th>Arrival Date</th>
                                    <th>Return Arrival Date</th>									
                                    <th>No of Stops</th>
                                    <th>Return No of Stops</th>									
                                    <th>Flight Name</th>
                                    <th>Return Flight Name</th>									
                                    <th>Flight Code</th>
                                    <th>Return Flight Code</th>									
                                    <th>Flight Id</th>
                                    <th>Flight No</th>
                                    <th>Total Duration</th>
                                    <th>Return Total Duration</th>									
                                    <th>Total Adult</th>
                                    <th>Total Child</th>
                                    <th>Total Infant</th>
                                    <th>Total Fare</th>									
                                    <th>Travel Date</th>
                                    <th>Return Travel Date</th>									
                                    <th>Class Type</th>
                                    <th>Cancel date</th>								
                                    <th>Status</th>
                                    <th></th>
                                    <th><?php	$js = 'onClick="checkall(this.form)"'; echo form_checkbox('check_all', '1', false, $js); ?></th>
							   </tr>
						</thead>
                        
						<tbody> 
                      
                 <?php 
				 $i=1;
					foreach($hoteles as $val) 
					   {
					   // var $css;
						@$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
							
								<td><?php echo $i; ?></td>
								<td><?php echo $val['date_created']; ?></td>
								<td><?php echo $val['booking_id']; ?></td>
                                <td><?php echo $val['booking_type']; ?></td>
                                <td><?php echo $val['departure_code']; ?></td>
                                <td><?php echo $val['departure_code_return']; ?></td>
                                <td><?php echo $val['departure_city']; ?></td>
                                <td><?php echo $val['departure_city_return']; ?></td>
                                <td><?php echo $val['arrival_code']; ?></td>
                                <td><?php echo $val['arrival_code_return']; ?></td>
                                <td><?php echo $val['arrival_city']; ?></td>
                                <td><?php echo $val['arrival_city_return']; ?></td>
                                <td><?php echo $val['departure_date']; ?></td>
                                <td><?php echo $val['departure_date_return']; ?></td>
                                <td><?php echo $val['arrival_date']; ?></td>
                                <td><?php echo $val['arrival_date_return']; ?></td>
                                <td><?php echo $val['no_of_stops']; ?></td>
                                <td><?php echo $val['no_of_stops_return']; ?></td>
                                <td><?php echo $val['flight_name']; ?></td>
                                <td><?php echo $val['flight_name_return'] ?></td>
                                <td><?php echo $val['flight_code']; ?></td>
                                <td><?php echo $val['flight_code_return']; ?></td>								
                                <td><?php echo $val['flight_id']; ?></td>
                                <td><?php echo $val['flight_no']; ?></td>
                                <td><?php echo $val['total_duration']; ?></td>
                                <td><?php echo $val['total_duration_return'] ?></td>
                                <td><?php echo $val['total_adult']; ?></td>
                                <td><?php echo $val['total_child']; ?></td>
                                <td><?php echo $val['total_infant']; ?></td>
                                <td><?php echo $val['total_fare']; ?></td>
                                <td><?php echo $val['travel_date']; ?></td>
                                <td><?php echo $val['travel_date_return']; ?></td>
                                <td><?php echo $val['class_type']; ?></td>
                                <td><?php echo $val['cancel_date']; ?></td>
                          
	<td><?php if($val['booking_status']==1) { echo "Confirm"; } elseif($val['booking_status']==2){ echo "Unpaid"; } else { echo "Cancel"; } ?>
		</td>
							
                                
								  <td> 
                                  
                                  
                                  
        <!--    <a href="<?php // echo base_url('admin/flights/edit')."?id=".$val['HotelId'];  ?>"><img src="<?php echo base_url('assets/admin/images/icon-edit.gif') ?>" alt="Edit"></a> | -->
            <a onClick="return confirm('Are you sure you want to delete?');" href="<?php  echo base_url('admin/flights/delete')."?id=".$val['id'] ?>"><img src="<?php echo base_url('assets/admin/images/icon-delete.gif') ?>"  alt="Delete"></a>

            <!-- 
            
            <a id="main3" onclick="cliCKMe();" href="#">Hiiiiiiiiiiiii</a> -->

<!--             <script type="text/javascript">
                
                function cliCKMe() {
                	
                }

            </script> 
            
            -->
            
                      </td>
                      
                      
                      <td> 
                                  <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'bb[]', 'id' => 'bb[]',   'value' =>$val['HotelId'],  'checked'=> false, 'class'=>" margin_bottom" );
                                            echo form_checkbox($data);
                                          ?></td>
                      
                      
                                  
        </tr>
                            
					<?php $i++; } ?>		
                            
							
                            
						</tbody>
					</table>
                    
                        
						     
                    
 <div class="col-lg-12 col-xs-12" style="padding:0px;">      
                    
       <?php 
					
			$data = array('name'  => 'Activate', 'value' => 'Activate',  'style' => 'padding:1px 17px !important;', 'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data);
			
			$data = array('name'  => 'Deactivate', 'value' => 'Deactivate', 'style' => 'padding:1px 17px !important;' ,   'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data);
			
			$js = 'onClick="return confdel()"'; 
			
			$data = array('name'  => 'Delete', 'value' => 'Delete', 'style' => 'padding:1px 17px !important;',   'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data,'',$js);
			// ------------------------------ admin form open  confdel() ---------------------------------
			echo form_close(); 
		 ?>
   </div> 
     <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
            <div class="col-lg-12 col-xs-12" style="padding:0px;">  
                    
                        <?php     echo $this->pagination->create_links();  ?>  
                     </div>   
				</div>
			</div>
			<!-- END BASIC TABLE  -->

		</div>
					<!-- END OVERVIEW -->



				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		
        
		<div class="clearfix"></div>
		
         <?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>