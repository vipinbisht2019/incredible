<!doctype html>
<html lang="en">
<head>
<title>Tours Costing Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Costing Add</b></h3>
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
            <a href="<?php echo base_url('admin/tour_bus/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >9</button></a>
                <p>Train</p>
            </div>
            
               <div class="stepwizard-step col-md-1">
              <a href="<?php echo base_url('admin/tour_bus/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >10</button></a>
                <p>Bus</p>
            </div>
            
          <div class="stepwizard-step col-md-1">
          <a href="<?php echo base_url('admin/tour_costing/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">11</button></a>
                <p>Costing</p>
            </div>
            
              <div class="stepwizard-step col-md-1">
                 <a href="<?php echo base_url('admin/tour_termscondition/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >12</button></a>
                        <p>Terms & Conditions</p>
                      </div> 
                      
     <div class="stepwizard-step col-md-1">
        	<a href="<?php echo base_url('admin/tour_infodetail/edit?TourId='.$TourId); ?>"><button type="button"  class="btn btn-default btn-circle">13</button></a>
                <p>Tour Info Detail</p>
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
			echo form_open_multipart('admin/tour_costing/edit', $attributes);
			 //$NoofDay=$tour_no_day[0]['NoofDay'];
			 $i=0;
		
						             $selected_0='';	
									 $selected_1=1;
							     ?>

	 <!-- ************************************************* Hotels  *****************************************************  -->  
     <!-- ************************************************* Hotels  *****************************************************  -->  	                

              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                      <div class="panel panel-default">
                         <div class="panel-heading" style="padding-top: 5px;">Hotels </div>
                             <div class="panel-body">
                     
                     
                          <!-- ************************************************* Hotels Table *****************************************************  -->    
                                          <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                               
                                               <div style="overflow-x:auto;">
                                              <table>
                                                <tr>
                                                  <th>Day</th>
                                                  <th>Hotels Name</th>
                                                  <th width="30%">Price</th>
                                               </tr>
                                             <?php foreach($hotels as $hval) { ?>  
                                                <tr>
                                                  <td>Day <?php echo $hval['SetNumber']; ?></td>
                                                  <td><?php echo $hval['HotelsName']; ?></td>
                                               
                                                  <td width="30%">
												  <?php
                                           // ------------------------------ Login Id form open ---------------------------------
                                                   $data = array('name'  => 'Title[]', 'id' => 'Title',  'size' =>'10','placeholder' => 'Enter Price', 'class'=>"form-control margin_bottom");
                                                    echo form_input($data);
                                                    ?>
                                                  </td>
                                               </tr>
                                              <?php  } ?> 
                                             </table>
                                            </div>    
                                         </div> 
                                                                          
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>
                  <!-- ************************************************* Sightseeings  *****************************************************  -->  
                  <!-- ************************************************* Sightseeings  *****************************************************  -->  	                

              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                      <div class="panel panel-default">
                         <div class="panel-heading" style="padding-top: 5px;">Sightseeings </div>
                             <div class="panel-body">
                     
                     
                          <!-- ************************************************* Sightseeings Table *****************************************************  -->    
                              <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                       
                                        <table>
                                                <tr>
                                                  <th>Day</th>
                                                  <th>Sightseeings Title</th>
                                                  <th width="30%">Price</th>
                                               </tr>
                                             <?php 
											
											 foreach($sightseeings as $sval) 
											     { 
												  if($sval['SightName']!='')
												   { 
												    ?>  
                                                <tr>
                                                  <td>Day <?php echo $sval['SetNumber']; ?></td>
                                                  <td><?php echo $sval['SightName']; ?></td>
                                                
                                                  <td width="30%">
												  <?php
                                           // ------------------------------ Login Id form open ---------------------------------
                                                   $data = array('name'  => 'Title[]', 'id' => 'Title',  'size' =>'10','placeholder' => 'Enter Price', 'class'=>"form-control margin_bottom");
                                                    echo form_input($data);
                                                    ?>
                                                  </td>
                                               </tr>
                                              <?php 
											     }
											   $i++; } ?> 
                                           </table> 
                                     
                                         
                                   </div> 
                                                      
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>               
                                
                  <!-- ************************************************* Transfers  *****************************************************  -->  
                  <!-- ************************************************* Transfers  *****************************************************  -->  	                

              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                      <div class="panel panel-default">
                         <div class="panel-heading" style="padding-top: 5px;">Transfers </div>
                             <div class="panel-body">
                                 <!-- ************************************************* Transfers Table *****************************************************  -->    
                                   <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                          
                                           <table>
                                                <tr>
                                                  <th>Day</th>
                                                  <th>Transfers</th>
                                                  <th width="30%">Price</th>
                                               </tr>
                                             <?php 
											
											 foreach($transfer as $tval) 
											     { 
												  if($sval['SightName']!='')
												   { 
												    ?>  
                                                <tr>
                                                  <td>Day <?php echo $tval['SetNumber']; ?></td>
                                                  <td><?php echo $tval['TransferName']; ?></td>
                                                
                                                  <td width="30%">
												  <?php
                                           // ------------------------------ Login Id form open ---------------------------------
                                                   $data = array('name'  => 'Title[]', 'id' => 'Title',  'size' =>'10','placeholder' => 'Enter Price', 'class'=>"form-control margin_bottom");
                                                    echo form_input($data);
                                                    ?>
                                                  </td>
                                               </tr>
                                              <?php 
											     }
											   $i++; } ?> 
                                           </table>          
                                                     
                                    </div> 
                                                                  
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>      
                       
                  <!-- ************************************************* Flight  *****************************************************  -->  
                  <!-- ************************************************* Flight  *****************************************************  -->  	                

              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                      <div class="panel panel-default">
                         <div class="panel-heading" style="padding-top: 5px;">Flights </div>
                             <div class="panel-body">
                     
                     
                          <!-- ************************************************* Flights Table *****************************************************  -->    
                                          <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                          
                                               <table>
                                                <tr>
                                                   <th>Day</th>
                                                   <th>AirlineName</th>
                                                   <th>From</th>
                                                   <th>To</th>
                                                   <th width="30%">Price</th>
                                               </tr>
                                             <?php 
											
											 foreach($flight as $fval) 
											     { 
												  if($fval['AirlineName']!='')
												   { 
												    ?>  
                                                <tr>
                                                    <td>Day <?php echo $fval['ForDay']; ?></td>
                                                    <td><?php echo $fval['AirlineName']; ?></td>
                                                    <td><?php echo $fval['FromCity']; ?></td>
                                                    <td><?php echo $fval['ToCity']; ?></td>
                                                
                                                  <td width="30%">
												  <?php
                                           // ------------------------------ Login Id form open ---------------------------------
                                                   $data = array('name'  => 'Title[]', 'id' => 'Title',  'size' =>'10','placeholder' => 'Enter Price', 'class'=>"form-control margin_bottom");
                                                    echo form_input($data);
                                                    ?>
                                                  </td>
                                               </tr>
                                              <?php 
											     }
											   $i++; } ?> 
                                           </table>          
                                                 
                                                     
                                           </div> 
                                                                          
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>                                     
                                
              <!-- ************************************************* Trains  *****************************************************  -->  
              <!-- ************************************************* Trains  *****************************************************  -->  	                

              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                      <div class="panel panel-default">
                         <div class="panel-heading" style="padding-top: 5px;">Trains </div>
                             <div class="panel-body">
                     
                     
                          <!-- ************************************************* Trains Table *****************************************************  -->    
                                      <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                      
                                       <table>
                                                <tr>
                                                   <th>Day</th>
                                                   <th>Train Name</th>
                                                   <th>From</th>
                                                   <th>To</th>
                                                   <th width="30%">Price</th>
                                               </tr>
                                             <?php 
											
											 foreach($trains as $tnval) 
											     { 
												  if($tnval['TrainName']!='')
												   { 
												    ?>  
                                                <tr>
                                                    <td>Day <?php echo $tnval['TrainDay']; ?></td>
                                                    <td><?php echo $tnval['TrainName']; ?></td>
                                                    <td><?php echo $tnval['PlaceFrom']; ?></td>
                                                    <td><?php echo $tnval['PlaceTo']; ?></td>
                                                
                                                  <td width="30%">
												  <?php
                                           // ------------------------------ Login Id form open ---------------------------------
                                                   $data = array('name'  => 'Title[]', 'id' => 'Title',  'size' =>'10','placeholder' => 'Enter Price', 'class'=>"form-control margin_bottom");
                                                    echo form_input($data);
                                                    ?>
                                                  </td>
                                               </tr>
                                              <?php 
											     }
											   $i++; } ?> 
                                           </table>         
                                             
                                                 
                                       </div> 
                                                                          
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>   
                   <!-- ************************************************* Buses  *****************************************************  -->  
                   <!-- ************************************************* Buses  *****************************************************  -->  	                

              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                      <div class="panel panel-default">
                         <div class="panel-heading" style="padding-top: 5px;">Buses </div>
                             <div class="panel-body">
                     
                     
                          <!-- ************************************************* Buses Table *****************************************************  -->    
                              <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                              
                                        <table>
                                                <tr>
                                                   <th>Day</th>
                                                   <th>Bus Name</th>
                                                   <th>From</th>
                                                   <th>To</th>
                                                   <th width="30%">Price</th>
                                               </tr>
                                             <?php 
											
											 foreach($buses as $bval) 
											     { 
												  if($bval['BusName']!='')
												   { 
												    ?>  
                                                <tr>
                                                    <td>Day <?php echo $bval['BusDay']; ?></td>
                                                    <td><?php echo $bval['BusName']; ?></td>
                                                    <td><?php echo $bval['PlaceFrom']; ?></td>
                                                    <td><?php echo $bval['PlaceTo']; ?></td>
                                                
                                                  <td width="30%">
												  <?php
                                           // ------------------------------ Login Id form open ---------------------------------
                                                   $data = array('name'  => 'Title[]', 'id' => 'Title',  'size' =>'10','placeholder' => 'Enter Price', 'class'=>"form-control margin_bottom");
                                                    echo form_input($data);
                                                    ?>
                                                  </td>
                                               </tr>
                                              <?php 
											     }
											   $i++; } ?> 
                                           </table>       
                                     
                                         
                               </div> 
                                                                          
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>     
                                  
                  <!-- ************************************************* Buses  *****************************************************  -->  
                   <!-- ************************************************* Buses  *****************************************************  -->  	                

              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                      <div class="panel panel-default">
                         <div class="panel-heading" style="padding-top: 5px;">Guides </div>
                             <div class="panel-body">
                     
                     
                          <!-- ************************************************* Guides Table *****************************************************  -->    
                                     <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                     
                                         <table>
                                                <tr>
                                                    <th>Day</th>
                                                    <th width="30%">Title</th>
                                                </tr>
                                             <?php 
											
											 foreach($guides as $bval) 
											     { ?>  
                                                <tr>
                                                    <td>Day <?php echo $bval['ItenaryDay']; ?></td>
                                                   
                                                  
                                                  <td width="30%">
												  <?php
                                           // ------------------------------ Login Id form open ---------------------------------
                                                   $data = array('name'  => 'Title[]', 'id' => 'Title',  'size' =>'10','placeholder' => 'Enter Price', 'class'=>"form-control margin_bottom");
                                                    echo form_input($data);
                                                    ?>
                                                  </td>
                                               </tr>
                                              <?php 
											   
											   $i++; } ?> 
                                           </table>       
                                     
                                                         
                                                             
                                      </div> 
                                                                          
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>                                                                                
                                
                                
                                
                           
                             <?php
							                    $data = array("ItenaryDay[]"  => $day);
										       echo form_hidden($data);
											   
											   
							        	
							          
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