<!doctype html>
<html lang="en">
 <head>
	<title>Tours Booking View</title>
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
				<div class="col-md-12">
                
                <div class="panel-heading col-md-12 col-xs-12 padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Tours Booking View</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                            <a href="#" class="btn btn-primary btn-primary1 pull-right margin_bottom">Tours Booking View</a>
                            
						 </div>
					</div>
				</div>


			<div class="panel " style="overflow-x:scroll;">
            
            
		
                  
				<div class="panel-body">
                
                  <div class="col-lg-12 col-xs-12" style="border: 1px solid #eee; padding-top: 18px;">

     <?php 
			$attributes = array('name'=>'form1', 'id' => 'form1');
			echo form_open_multipart('admin/toursbooking/search', $attributes);
			
			//echo"<pre>";
			 // print_r($tours_list);
			//echo"</pre>";  
	 ?>
        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                             
                             
                              
                              <select name="TourId" class="form-control">
                                <option value="">Select Tour</option>
                                 <?php foreach($tours_list as $tval) { ?>
                                 <option value="<?php echo $tval['TourId']; ?>" <?php if($tval['TourId']==set_value('TourId')){ echo"selected";} ?> ><?php echo $tval['TourName']; ?></option>
                                 <?php } ?>  
                              </select>
                            
                             
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                               <input type="text" name="StartDate" class="form-control" readonly value="<?php echo set_value('StartDate') ?>" id="datepicker1" placeholder="Start Date" style="height: 37px;">
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                               <input type="text" name="EndDate" class="form-control" readonly value="<?php echo set_value('EndDate') ?>" id="datepicker2" placeholder="End Date" style="height: 37px;">
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Search <i class="fa fa-search"></i> </button>
                            </div>
                        </div>
                        <?php
						  
						       $data = array('flag'  => 'yes');
                                          echo form_hidden($data);
										   echo form_close(); 
						?>
				
		     	</div>
                
                   <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('booking')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?=$error ?>
                                      </div>
                                    
                                    <?php  } ?>
                                    </div>	
                  <?php                         
						  $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
						  echo form_open_multipart('admin/inclusion/bulk_action', $attributes); 
					?>                                
                
					<table class="table table-bordered table_margin_top">
						<thead>
							<tr>
                                <th>T.No.</th>
                                <th>Name </th>
                                
                                <th>Phone No. </th>
                                <th>Tour Name </th>
                                <th>BusType</th>
                                <th>Departure Date</th>
                                 <th>Total Seats</th>
                                 <th>Seat No.</th>
                                 <th>Boarding Points</th>
                                
                                <th>Commission</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                               <!-- <th><?php	$js = 'onClick="checkall(this.form)"'; echo form_checkbox('check_all', '1', false, $js); ?></th>-->
							</tr>
						</thead>
                        
						<tbody> 
                      
                 <?php 
					foreach($toursbooking as $val) 
					   {
					   // var $css;
						@$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                            
                            	<td nowrap><?php echo $val['BookingRefrenceNo'] ?></td>
								<td><?php echo $val['Name'] ?></td>
                               
							    <td><?php echo $val['PhoneNo'] ?></td>
                                <td><?php echo $val['TourName'] ?></td>
                                <td nowrap><?php echo $val['BusType'] ?></td>
                                <td nowrap><?php echo date("d-M-Y",strtotime($val['DepartureDate'])) ?> </td>
                                <td><?php echo $val['TotalTravellar']; ?></td>
                                <td><?php echo $val['SeatNo'] ?></td>
                                <td><?php echo $val['BoardingPoint'] ?> [<?php echo $val['ArivalTime'] ?> ]</td> 
                                
                                <td><?php echo $val['AgentCommission'] ?></td>
                                
                                
                                <td><?php  if($val['BookingStatus']=='B'){ echo"Confirmed"; } else { echo"<font color=\"#FF0000\">Cancelled</font>"; } ?></td>
<td style="width: 5%;"> <a href="<?php echo base_url('admin/toursbooking/toursbookingdetails/').$val['BookingId']; ?>" class="db-done"> <i class="fa fa-info-circle"></i></a></td>
<td style="width: 5%;"> <a href="<?php echo base_url('admin/toursbooking/tourticketprint/'.$val['BookingId']);?>" class="db-done"> <i class="fa fa-print"></i> </a></td>

 <td style="width: 6%;">
 <a onClick="return confirm('Are you sure you want to cancel?')" href="<?php echo base_url('admin/toursbooking/toursbookingcancle/').$val['BookingId']; ?>" class="db-done"> <i class="fa fa-window-close" aria-hidden="true"></i></a>
 </td>
                                
							

                      
                      
                    <?php /*?>   <td> 
                                  <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'bb[]', 'id' => 'bb[]',   'value' =>$val['BookingId'],  'checked'=> false, 'class'=>" margin_bottom" );
                                            echo form_checkbox($data);
                                          ?></td><?php */?>
                      
                      
                                  
        </tr>
                            
					<?php } ?>		
                            
							
                            
						</tbody>
					</table>
                    
                        
						     
                    
 <?php /*?><div class="col-lg-12 col-xs-12" style="padding:0px;">      
                    
       <?php 
					
			$data = array('name'  => 'Activate', 'value' => 'Activate',  'style' => 'padding:1px 17px !important;', 'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data);
			
			$data = array('name'  => 'Deactivate', 'value' => 'Deactivate', 'style' => 'padding:1px 17px !important;' ,   'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data);
			
			$js = 'onClick="return confdel()"'; 
			
			$data = array('name'  => 'Delete', 'value' => 'Delete', 'style' => 'padding:1px 17px !important;',   'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data,'',$js);
			// ------------------------------ admin form open     confdel() ---------------------------------
			echo form_close(); 
		 ?>
   </div><?php */?> 
                              <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							         ?>
                       <div class="col-lg-12 col-xs-12" style="padding:0px;">  
                       <?php echo $this->pagination->create_links();  ?>  
                     </div>   
				</div>
			</div>
            
         <a href="<?php echo base_url() ?>admin/toursbooking/export"><button type="submit" class="btn-btn-common" style="float:right;background-color: #00AAFF;color: #fff;border: none;padding: 4px;">Export CSV</button></a>
         
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
    
    
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
	$(function() {
	$('#datepicker').datepicker('setDate', new Date());
		$( "#datepicker1" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	$(function() {
		$( "#datepicker2" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});

		
</script>

	

</body>
</html>