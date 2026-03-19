<!doctype html>
<html lang="en">
<head>
<title>Promo Code Modify</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Promo Code Modify</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/promocode/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('promocode')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                          
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/promocode/edit', $attributes);
							     ?>

		                

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Coupon Title*</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CouponName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'CouponName', 'id' => 'CouponName', 'value'=>$edit_promocode[0]['CouponName'], 'placeholder' => 'Coupon Title', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Coupon Price <small>(INR)</small>*</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CouponPrice'); ?></span>
                                       <?php
				$data = array('name'  => 'CouponPrice', 'id' => 'CouponPrice', 'value'=>$edit_promocode[0]['CouponPrice'], 'placeholder' => 'Coupon Price', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Coupon Code *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CouponCode'); ?></span>
                                       <?php
				$data = array('name'  => 'CouponCode', 'id' => 'CouponCode', 'value'=>$edit_promocode[0]['CouponCode'], 'placeholder' => 'Coupon Code', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Start Date *</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('StartDate'); ?></span>
                                       <?php
									   
									   	$startDateArr=explode("-",$edit_promocode[0]['StartDate']); 
						                $startDateStr=$startDateArr['2']."-".$startDateArr['1']."-".$startDateArr['0'];
					
               $data = array('name'  => 'StartDate', 'id' => 'datepicker1', 'value'=>$startDateStr, 'placeholder' => 'Start Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>End Date *</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('EndDate'); ?></span>
                                       <?php
									   
									  	$EndDateArr=explode("-",$edit_promocode[0]['EndDate']);    
					    	            $EndDateArrStr=$EndDateArr['2']."-".$EndDateArr['1']."-".$EndDateArr['0'];
               $data = array('name'  => 'EndDate', 'id' => 'datepicker2', 'value'=>$EndDateArrStr, 'placeholder' => 'End Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                
                              
                               
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Description</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CouponDescription'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'CouponDescription', 'id' => 'CouponDescription', 'value'=>$edit_promocode[0]['CouponDescription'], 'placeholder' => 'Coupon Description', 'class'=>"form-control margin_bottom");
                       echo form_textarea($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                
                                 
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> 
		                				<span>Select Tour </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                                                 
                                        <select name="TourId"  class="form-control margin_bottom"> <!-- onChange="tour_buses(this.value)"-->
                                        <option value="">Select Tour</option>
                                        <?php
										 $selected=$edit_promocode[0]['TourId'];	
                                         foreach($edit_tours as $val)
										       {
											     ?>
                                                     <option value="<?php echo $val['TourId'] ?>" <?php if($val['TourId']==$selected) echo"selected"; ?> ><?php echo $val['TourName']." ".$val['TypeTitle'] ?></option>
                                         <?php } ?>
                                      </select> 
                                        
                                     </div>
		                		  </div>  
                                  
                                  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Select Coupon For *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                          <?php  $checked=$edit_promocode[0]['CouponFor'];	 ?>
                                          
                                             <p>
                                               <label>
                                                 <input type="radio" name="CouponFor" value="S" id="RadioGroup1_0" <?php if($checked=='S') { echo"checked"; } ?> >  For Booking</label>
                                               <br>
                                               <label>
                                                 <input type="radio" name="CouponFor" value="T" id="RadioGroup1_1" <?php if($checked=='T') { echo"checked"; } ?>>  For Tour</label>
                                               <br>
                                              <!-- <label>
                                                 <input type="radio" name="CouponFor" value="B"  id="RadioGroup1_2" <?php if($checked=='B') { echo"checked"; } ?>> For Bus</label>
                                               <br>-->
                                             </p>
                                        
                                      </div>
		                		  </div>  
                                  
                                   <?php /*?><div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Select Bus</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        
                                            <div id="bus_replace"> 
                                                <select name="TypeId" class="form-control margin_bottom">
                                                <option value="">.::Please Select Bus::.</option>
                                                
                                                <?php
													 $selected=$edit_promocode[0]['TypeId'];	
												
                                                foreach($TourBuses as $val)
                                                   {
                                                     ?>
                                                         <option value="<?php echo $val['TypeId'] ?>" <?php if($val['TypeId']==$selected) echo"selected"; ?> ><?php echo $val['CategoryName']." ".$val['TypeTitle'] ?></option>
                                                    <?php
                                                  } 
                                                ?>
                                                
                                                </select>  
                                              </div>  
                                                                          
                                      </div>
		                		  </div><?php */?>  
                                  
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Coupon For Booking</span></label>
		                			   <div class="col-md-5 form-group padding_opx"> 
                                         <p>
                           <?php
					 // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'SeatNo', 'id' => 'SeatNo', 'value'=>$edit_promocode[0]['SeatNo'], 'placeholder' => 'No.', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?> 
                                        </p>
                                        
                                      </div>
		                		  </div>    
                                  
                           
                               
                            

                               
                  
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> Status </label>
		                			<div class="col-md-2 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
										    	'Y'         => 'Active',
											    'N'           => 'Inactive',
											
											);
											$selected=$edit_promocode[0]['Status'];							
											echo form_dropdown('Status', $options, $selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>   
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										
										     
                                        $data = array('id'  => $edit_promocode[0]['CouponID']);
                                        echo form_hidden($data);
                                        //-------------------------------------------------------------------------------------------------------------------			
                                        $data = array('name'  => 'smt_enter', 'value' => 'Submit',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
                                    ?>
                                    
                            </div>
                            </div>
                                
						       <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
						</div>

<!--Html ##################################################  -->
				</div>
			</div>
		</div>
	</div>
  </div>
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
	
		$(function() {
		$( "#datepicker3" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker4" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker5" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
</script>

<script>
function tour_buses(tour_id)
 {

jQuery.ajax({
url:'<?php echo base_url(); ?>admin/promocode/tour_buses',
data:'tour_id=' + tour_id ,
	type:'POST',
	success:function(data){ $('#bus_replace').html(data);}
	
});
    			
}
	 
	
</script>   
		
        
		<div class="clearfix"></div>
		<?php //include('footer.inc.php') ?>	
	</div>
	

</body>
</html>