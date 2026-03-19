<!doctype html>
<html lang="en">
<head>
<title>Tours Trains Add</title>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Trains Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/tour_generalinfo/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">
                
                 <div class="col-md-12 col-xs-12" style="margin-top: 23px;">
                 
                   <div class="panel panel-default text-center">
                    <div class="panel-heading" style="padding-top: 8px; padding-bottom: 0px;">
                
                    <p>	Create Tour Package in 12 simple steps! </p>
                
                    </div>
                 
                    
                  </div>
                    
                    <div class="stepwizard">
                      <div class="stepwizard-row">
                    <div class="stepwizard-step col-md-1">
                        <a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">1</button></a>
                        <p>General<br>Info</p>
                    </div>
            
                    <div class="stepwizard-step col-md-1">
                     <a href="<?php echo base_url('admin/tour_pricedestination/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >2</button></a>
                        <p>Destination Info</p>
                    </div>
            
                    <div class="stepwizard-step col-md-1">
                   <a href="<?php echo base_url('admin/tour_inclusionexclusion/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >3</button></a>
                        <p>Inclusion<br>Exclusion</p>
                    </div>
            
                    <div class="stepwizard-step col-md-1">
                   <a href="<?php echo base_url('admin/tour_itinerary/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >4</button></a>
                        <p>Itinerary</p>
                    </div>
                    
                      <div class="stepwizard-step col-md-1">
                 <a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >5</button></a>
                        <p>Hotel</p>
                    </div>
                    
                    <div class="stepwizard-step col-md-1">
                    <a href="<?php echo base_url('admin/tour_sightseeing/edit?TourId='.$TourId); ?>"> <button type="button" class="btn btn-primary btn-circle">6</button></a>
                        <p>Sightseeings</p>
                    </div>
                    
                   <div class="stepwizard-step col-md-1">
             <a href="<?php echo base_url('admin/tour_transfers/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">7</button></a>
                <p>Transfers</p>
            </div>
            
           <div class="stepwizard-step col-md-1">
          <a href="<?php echo base_url('admin/tour_flight/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">8</button></a>
                <p>Flight</p>
            </div>
            
         <div class="stepwizard-step col-md-1">
            <a href="<?php echo base_url('admin/tour_train/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">9</button></a>
                <p>Train</p>
            </div>
            
               <div class="stepwizard-step col-md-1">
              <a href="<?php echo base_url('admin/tour_bus/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle">10</button></a>
                <p>Bus</p>
            </div>
            
          <div class="stepwizard-step col-md-1">
          <a href="<?php echo base_url('admin/tour_costing/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle">11</button></a>
                <p>Costing</p>
            </div>
            
                       <div class="stepwizard-step col-md-1">
                 <a href="<?php echo base_url('admin/tour_termscondition/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >12</button></a>
                        <p>Term Conditions</p>
                      </div> 
                </div>
                </div>
                    
                </div>

<!-- Html ##################################################### -->
           <div class="col-md-12 col-xs-12 margin_top">
<?php
					//echo"<pre>";
					 // print_r($flight_detail);
					//echo"</pre>";
 // ------------------------------ admin form open ---------------------------------
			$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
			echo form_open_multipart('admin/tour_train/edit', $attributes);
							
			  //$NoofDay=$tour_no_day[0]['NoofDay'];
			    $i=0;
			  foreach($itinerary_night as $val)
						  {	
						             $selected_0='';	
									 $selected_1=1;
							     ?>

		                

     <div class="col-md-12 padding_opx">
        <div class="col-md-12 form-group padding_opx">
              <div class="panel panel-default">
                 <div class="panel-heading" style="padding-top: 5px;">Day <?php echo $day=$val['ItenaryDay']; ?>  <?php //echo $val['city_id']; ?><?php //echo $val['category_id']; ?>   </div>
                     <div class="panel-body">
                     
                     
                          <!-- ************************************************* Train Name *****************************************************  -->    
                                          <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> Train Name </span></label>
                                                              <div class="col-md-5 form-group padding_opx">
														 <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
              $data = array('name'  => 'TrainName[]', 'id' => 'TrainName', 'value'=>$train_detail[$i]['TrainName'],    'placeholder' => 'Train Name', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
										 
									
                                    ?>
                                       
                                                              </div>
                                                       </div> 
                                                       
                          <!-- ************************************************* Train Number *****************************************************  -->    
                                          <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> Train Number </span></label>
                                                              <div class="col-md-5 form-group padding_opx">
														 <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
              $data = array('name'  => 'TrainNumber[]', 'id' => 'TrainNumber', 'value'=>$train_detail[$i]['TrainNumber'],    'placeholder' => 'Train Number', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
										 
									
                                    ?>
                                       
                                                              </div>
                                                       </div>                                 
                     
                       <!-- *************************************************From City ***************************************************** -->  
                     
                              <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> From City  </span></label>
                                                              <div class="col-md-5 form-group padding_opx">
                                                              <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                $data = array('name'  => 'PlaceFrom[]', 'id' => 'PlaceFrom', 'value'=>$train_detail[$i]['PlaceFrom'],    'placeholder' => 'Place From', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
										 
									
                                    ?>
                                       
                                                              </div>
                                                       </div> 
                                            
                  <!-- *************************************************To City***************************************************** -->  
                     
                              <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> To City  </span></label>
                                                              <div class="col-md-5 form-group padding_opx">
                                                              <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                $data = array('name'  => 'PlaceTo[]', 'id' => 'ToCity', 'value'=>$train_detail[$i]['PlaceTo'],    'placeholder' => 'Place To', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
										 
									
                                    ?>
                                       
                                                              </div>
                                                       </div>                             
                             
                                                     
                                
                                                       
                                                       
                                                    <!-- *********************************************Hotel********************************************************* -->        
                                           <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> Note (<small>If any</small>) </span></label>
                                                              <div class="col-md-8 form-group padding_opx">
                                                              <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'OtherDeatils[]', 'id' => 'OtherDeatils', 'value'=>$train_detail[$i]['OtherDeatils'],    'placeholder' => 'Description ', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
										 
										 $i++;
                                    ?>
                                       
                                                              </div>
                                                       </div>                                          
                                                                                                 
                             
                                        
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>
                                
                             <?php
							                    $data = array("ItenaryDay[]"  => $day);
										       echo form_hidden($data);
											   
											   
							        	
							             } 
							  ?>   
                                
                                  
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx"> 

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										
										$data = array('TourId'  => $TourId);
										echo form_hidden($data);
										
									//  echo $TourId;
                                        //-------------------------------------------------------------------------------------------------------------------			
                                        $data = array('name'  => 'smt_enter', 'value' => 'Save',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
										
										 $data = array('name'  => 'smt_enter_nxt', 'value' => 'Save & Next',   'class'=>"btn btn-primary");
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
     
     
		
        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>