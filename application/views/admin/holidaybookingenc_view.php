<!doctype html>
<html lang="en">
 <head>
	<title>Tours Unpaid Holiday Booking View</title>
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Holiday Unpaid Booking View</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                            <a href="#" class="btn btn-primary btn-primary1 pull-right margin_bottom">Holiday Unpaid Booking View</a>
                            
						 </div>
					</div>
				</div>


			<div class="panel">
		
                  
				<div class="panel-body">
                
                  <div class="col-lg-12 col-xs-12" style="border: 1px solid #eee; padding-top: 18px;">
            <?php 
			$attributes = array('name'=>'form1', 'id' => 'form1');
			echo form_open_multipart('admin/holidaybookingenc/search', $attributes);
	 ?>
        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                              <input type="text" name="keyword" class="form-control" value="<?php echo set_value('keyword') ?>" placeholder="Name/Email/Mobile..." style="height: 37px;">
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                               <input type="text" name="DepartureDate" class="form-control" value="<?php echo set_value('DepartureDate') ?>" id="datepicker2" placeholder="Journey Date..." style="height: 37px;">
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                               <input type="text" name="BookingDate" class="form-control" value="<?php echo set_value('BookingDate') ?>" id="datepicker" placeholder="Booking Date..." style="height: 37px;">
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
                                    
                                    <?php        
                                      }
									 
									   // echo"<pre>"; 
									   // print_r($regions);
									   //echo"</pre>"; 
                                    ?>
                                    </div>	
                  <?php                         
						  $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
						  echo form_open_multipart('admin/inclusion/bulk_action', $attributes); 
					?>                                
                
					<table class="table table-bordered table_margin_top">
						<thead>
							<tr>
                                <th>B.R.No. </th>
                                <th>Name </th>
                                <th>Email</th>
                                <th>Phone No. </th>
                                <th>Tour Name </th>
                                <th>Vehicle </th>
                                <th>Departure </th>
                                <th>Commission </th>
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
                            
                            	<td><?php echo $val['BookingRefrenceNo'] ?></td>
								<td><?php echo $val['Name'] ?></td>
                                <td><?php echo $val['Email'] ?></td>
							    <td><?php echo $val['PhoneNo'] ?></td>
                                <td><?php echo $val['TourName'] ?></td>
                                <td><?php echo $val['BusType'] ?> Car</td>
                                <td><?php echo $val['DepartureDate'] ?></td>
                                <td><?php echo (int) $val['AgentCommission'] ?></td>

                                <td><?php  if($val['BookingStatus']=='B'){ echo"Pending"; } else { echo"<font color=\"#FF0000\">Cancelled</font>"; } ?></td>
							   
<td style="width: 5%;"> <a href="<?php echo base_url('admin/holidaybookingenc/toursbookingdetails/').$val['BookingId']; ?>" class="db-done"> <i class="fa fa-info-circle"></i></a></td>
<!-- <td style="width: 5%;"> <a href="<?php echo base_url('admin/holidaybookingenc/toursticketprint/'.$val['BookingId']);?>" class="db-done"> <i class="fa fa-print"></i> </a></td>
<td style="width: 6%;"> <a onClick="return confirm('Are you sure you want to cancel?')"  href="<?php echo base_url('admin/holidaybookingenc/toursbookingcancle/').$val['BookingId']; ?>" class="db-done"> <i class="fa fa-window-close" aria-hidden="true"></i></a> </td> -->
                      
                      
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