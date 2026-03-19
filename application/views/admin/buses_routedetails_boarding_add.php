<!doctype html>
<html lang="en">
<head>
<title>Routes & Buses Boarding Points Add</title>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Routes & Buses Boarding Points Add
                            </b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/boardingpoints/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						     </div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('boardingpoints')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									  
								
                          
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/busesroutes_broading/add', $attributes);
										
									
							               $data = array("RoutesId"  => $rid);
										   echo form_hidden($data);
										    $data = array("BusesRoutsId"  => $bid);
										   echo form_hidden($data);
							
						  
						  $i=0;
						  $j=1;
						  $totalcity=count($route_cities); 
						foreach($route_cities as $vcities) 
							 { 
							          $CityId=$vcities['CityId'];
							          $data = array("CityId[$i]"  => $CityId);
                                      echo form_hidden($data);
							    ?>
                            <div class="col-md-12 padding_opx">
                                <label class="col-md-2 text-left padding_opx">
                                    <span> <?php echo $vcities['CityName']; ?></span></label>
                                      <div class="col-md-5 form-group padding_opx">
                                        <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                            <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                          
										  <?php
										    $k=0;
										   foreach($vcities['BoardingPoint'] as $val) 
											     {
														$BoardingId=$val['BoardingId'];
														$data = array("BoardingId[$CityId][$k]"  => $BoardingId);
														echo form_hidden($data); 
												      
												   ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
													  <?php         
													   if(in_array($val['TourInclusionsId'],set_value('CityId')))  
														  {
															$data = array('name' => "SBoardingId[$CityId][$BoardingId]", 'id' => 'BoardingId', 'value' => $val['BoardingId'],'checked' => TRUE);
														  }
														 else
														  {
															  $data = array('name' => "SBoardingId[$CityId][$BoardingId]", 'id' => 'BoardingId', 'value' => $val['BoardingId']);
														  }   
																 echo form_checkbox($data);
																 echo $val['BoardingPointName']; 
													   
													   ?>
                                                    </div>
                                                    <div class="col-md-3 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													if($j < $totalcity)
													  {
													   
   $data = array('name'  => "DepartureTime[$CityId][$BoardingId]", 'id' => 'DepartureTime', 'value'=>set_value('DepartureTime'),    'placeholder' => 'Departure Time ', 'class'=>"form-control margin_bottom");
                                                         echo form_input($data);
										            }
                                    ?>
											 
											         </div>
                                                     
                                                     
                                                  <div class="col-md-3 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													  if($i>0)
													    {
													   
	  $data = array('name'  => "ArrivalTime[$CityId][$BoardingId]", 'id' => 'ArrivalTime', 'value'=>set_value('ArrivalTime'),    'placeholder' => 'Arrival Time', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
										            }
                                    ?>
											 
											         </div>
                                                     
                                                     
                                                     
                                               
                                                <?php $k++; } ?>    
                                             </div>
                                          
                                       </div>
                                            
                                           
                                            
                                          </div>
                                      </div>
                             <?php $j++; $i++; } ?>     
                                   
                               
                    
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