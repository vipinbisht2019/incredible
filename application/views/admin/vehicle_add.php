<!doctype html>
<html lang="en">
<head>
<title>Tours Vehicle Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div  class=" col-md-12 form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum ' + maxGroup + ' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Tours Vehicle Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/vehicle/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('vehicle')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                          
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/vehicle/add', $attributes);
							     ?>

		                

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Vehicle/Other Fare Title *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('VehicleName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
            $data = array('name'  => 'VehicleName', 'id' => 'VehicleName', 'value'=>set_value('VehicleName'), 'placeholder' => 'Vehicle Name', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Minimum Charges  *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('VehicleName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
            $data = array('name'  => 'MinimumFare', 'id' => 'MinimumFare', 'value'=>$set_value['MinimumFare'], 'placeholder' => '', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                    
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Is Vehicle </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('VehicleName'); ?></span>
                                       <?php
									   	 if($set_value['IsVehicle']=='Y' || $set_value['IsVehicle']=='')  
											      {
									      // ------------------------------ Login Id form open ---------------------------------
                                                     $data = array('name' => 'IsVehicle', 'id' => 'IsVehicle', 'value' => 'Y','checked' => TRUE);
												  }
												else
												 {
												      $data = array('name' => 'IsVehicle', 'id' => 'IsVehicle', 'value' => 'Y');
												 }   
														 
                                                     echo form_radio($data);
                                        ?> Yes &nbsp;&nbsp;&nbsp;
                                        <?php
                                        	if($set_value['IsVehicle']=='N')  
											      {
									      // ------------------------------ Login Id form open ---------------------------------
                                                     $data = array('name' => 'IsVehicle', 'id' => 'IsVehicle', 'value' => 'N','checked' => TRUE);
												  }
												else
												 {
												      $data = array('name' => 'IsVehicle', 'id' => 'IsVehicle', 'value' => 'N');
												 }   
														 
                                                     echo form_radio($data);
                                        ?> No 
                                        
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Total Seats </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('VehicleName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
            $data = array('name'  => 'MaxPerson', 'id' => 'MaxPerson', 'value'=>set_value('MaxPerson'), 'placeholder' => 'Total Seats', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Pax Option </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									       $data = array('name'  => 'NoPax[]', 'id' => 'NoPax',  'placeholder' => 'Pax Option', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
                                      
                                       <div class="col-md-1 "> 
                                         <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                                       </div>
		                		</div>
                                
                           <!-- ***************************** appending fields ************************************** -->              
                       
                           <div class="row">
                                 <div class="col-lg-12  fieldGroup">
                                  
                                  </div>
                            </div>
                              
                       <!-- ***************************** appending fields ************************************** -->  
                                  
                                  
                                  
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Sort Order </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
           $data = array('name'  => 'SortOrder', 'id' => 'SortOrder',  'placeholder' => 'Sort Order', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
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
											
										 $selected=set_value('VehicleName');							
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
                        
                        
                        
                        
                        <div class="col-md-12 fieldGroupCopy" style="display: none;">
		                			<div class="col-md-2 text-left padding_opx">
		                				<span> Pax Option  </span></div>
		                			   <div class="col-md-5 form-group padding_opx">
                             
                              
                                 <?php
                                       $data = array('name'  => 'NoPax[]', 'id' => 'SortOrder',  'placeholder' => 'Pax Option', 'class'=>"form-control margin_bottom");
                                       echo form_input($data);
                                  ?>
                                        
                                        
                                      </div>
                                       <div class="col-md-1 "> 
                          <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>Remove</a>
            </div>
		                		</div>
                        

<!--Html ##################################################  -->
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
     
     
		
        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>