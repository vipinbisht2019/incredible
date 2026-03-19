<!doctype html>
	<html lang="en">
    <head>
        <title>Tour Total Cost</title>
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
										<h3 class="panel-title title_h3"><b> 
                                        	<i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Total Cost</b></h3>
									</div>
                                    <div class="col-md-6 padding_opx">
								  		<a href="<?php echo base_url('admin/tour_generalinfo/view'); ?>" 
                                        	class="btn btn-primary btn-primary1 pull-right margin_bottom">
                                            Return Back
                                        </a>
									</div>
								</div>
							</div>
						<div class="panel">
                        	<div class="panel-body">
                            	<div class="col-md-12 col-xs-12" style="margin-top: 23px;">
                                	<div class="panel panel-default text-center">
                    					<div class="panel-heading" style="padding-top: 8px; padding-bottom: 0px;">
                                        	<p>	Create Tour Package in 10 simple steps! </p>
                                        </div>
                                    </div>
                                    <div class="stepwizard">
                      					<div class="stepwizard-row">
                                            <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">1</button></a>
                                                <p>General Info ITI</p>
                                            </div>                   
                                          
            
                                            <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_itinerary/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >2</button></a>
                                                <p>Short Itinerary</p>
                                            </div>
                                            
                                            <div class="stepwizard-step col-md-1">
                                                 <a href="<?php echo base_url('admin/tour_itinerarydetails/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">3</button></a>
                                                <p>Operational Itinerary Detail</p>
                                            </div>
                    
                                            <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >4</button></a>
                                                <p>Hotel</p>
                                            </div>
                                            
                                            
                                              <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_transport/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >5</button></a>
                                                <p>Transport</p>
                                            </div>
                                            
                                              <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_driverhotel/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >6</button></a>
                                                <p>Driver Hotel</p>
                                            </div>
                                            
                                               <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_sightseeing/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >7</button></a>
                                                <p>Sight Seeing</p>
                                            </div>
                                            <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_meals/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >8</button></a>
                                                    <p>Meals</p>
                                            </div> 
                                            
                                             <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_totalcost/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">9</button></a>
                                                    <p>Total Cost </p>
                                            </div> 
                                            
                                             <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_inclusionexclusion/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >10</button></a>
                                                    <p>Inclusion<br>Exclusion</p>
                                            </div>
                                            
                                            
                						</div>
                					</div>
                    			</div>

           						<!--<div class="col-md-12 col-xs-12 margin_top">
								<?php

 
						/*	$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
							echo form_open_multipart('admin/tour_hotels/edit', $attributes);				
								$i=0;
							  foreach($itinerary_night as $val)
										  {	
													 $selected_0='';	
													 $selected_1=1;
							     ?>
							
		              

     <div class="col-md-12 padding_opx">
        
           <div class="col-md-12 form-group padding_opx">
              <div class="panel panel-default">
                 <div class="panel-heading" style="padding-top: 5px;">Day <?php echo $day=$val['ItenaryDay']; ?> : <?php echo $val['city_id']; ?>/<?php echo $val['category_id']; ?>   </div>
                     <div class="panel-body">
                     
                     
                                   
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Hotel</label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('HotelId'); ?></span>
									   <?php
                                    
                                                unset($options);									
                                                $options['']='Select Hotel';
                                                foreach($hotel_list as $hotelValue)
                                                   {
                                                       $options[$hotelValue['HotelId']] = $hotelValue['HotelName'];
                                                   }		
                                                	
												  $selected=$hotel_detail[$i]['HotelId'];		
                                                 echo form_dropdown('HotelId',  $options, $selected,'class="form-control margin_bottom"');
											
                                        ?>
		                		  	</div>
                               	</div>
                       			
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Check In Date</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                      
                                       <?php
									     
               $data = array('name'  => 'checkindate[]', 'id' => 'checkindate', 'type' => "date", 'value'=>$hotel_detail[$i]['checkindate'] , 'placeholder' => 'Check In Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
                                        <label class="col-md-2 text-left padding_opx">
                                            <span>Check Out Date</span></label>
                                           <div class="col-md-5 form-group padding_opx">
                                          
                                           <?php
                                              
                   $data = array('name'  => 'checkoutdate[]', 'id' => 'checkoutdate', 'type' => "date", 'value'=>$hotel_detail[$i]['checkoutdate'] , 'placeholder' => 'Check Out Date', 'class'=>"form-control margin_bottom");
                           echo form_input($data);
                                            ?>
                                          </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Room Type</label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error($data); ?></span>
									   <?php
                                    
                                           
												 
												 
											unset($options);									
									        $options['']='Select Room Type';
											foreach($roomtypelist as $val)
										       {
												   $options[$val['RoomId']] = $val['RoomTitle'];
											   }		
											 $selected=set_value('RoomId');	
										     echo form_dropdown('RoomId', $options,$selected,'class="form-control margin_bottom"');
											 
											 
												 
                                        ?>
		                		  	</div>
                               	</div>
                                
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Room Rate Type</label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error($data); ?></span>
									   <?php
                                    
                                                unset($options);									
                                                $options['']='Select Room Rate Type';
                                                foreach($roomratetypelist as $key => $roomRateValue)
												   {
													   $options[$roomRateValue['id']] = $roomRateValue['room_rate_type'];
												   }		
                                                 
												 $selected=$hotel_detail[$i]['room_rate_type'];	
                                                 echo form_dropdown('room_rate_type',  $options, $selected,'class="form-control margin_bottom"');
                                        ?>
		                		  	</div>
                               	</div>
                                
                                 <div class="col-md-12 padding_opx">
                                        <label class="col-md-2 text-left padding_opx">
                                            <span>Room Rate</span></label>
                                           <div class="col-md-5 form-group padding_opx">
                                          
                                           <?php
                                             
                   $data = array('name'  => 'room_rate_price[]', 'id' => 'room_rate_price', 'type' => "text", 'value' =>  $hotel_detail[$i]['room_rate_price'] , 'placeholder' => 'Room Rate', 'class'=>"form-control margin_bottom");
                           echo form_input($data);
                                            ?>
                                          </div>
		                		  </div>
                            
                                
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Select Tax Type</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                             <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                             
                                             <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                              <?php
										         $i=0;
											   foreach($tourtaxlist as $tax_val)
											     {
												   
												   $taxid[$i]=$tax_val['taxid'];
												   
												   $i++;
												 }
											
											 
											   foreach($taxtypelist as $val) { 
											   	
												
											   
											   ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                     <?php
										
                                                     
											 if(in_array($val['id'],$taxid))  
											      {
											        $data = array('name' => 'taxid[]', 'id' => 'taxid', 'value' => $val['id'],'checked' => TRUE);
												  }
												else
												  {
												      $data = array('name' => 'taxid[]', 'id' => 'taxid', 'value' => $val['id']);
												  }   
														 
                                                     echo form_checkbox($data);
													 echo $val['tax_type']; ?></div>
                                               
                                                <?php } ?>    
                                                 
                                                
                                             </div>
                                 
                                            </div>
                                            <p>&nbsp;</p>
                                  
                                      </div>
		                		  </div>
                                
                                <div class="row">
                                  <div class="col-md-6 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Tax</label>
		                			<div class="col-md-8 form-group padding_opx">
                                    
                              <?php
									     if(set_value('tax_type_per')=='P')   
										    {
											  $radio_is_checked_t = 1;
											}  
										elseif(set_value('tax_type_per')=='A')   
										    {
											  $radio_is_checked_h = 1;
											} 	
										 else
										   {
										     $radio_is_checked_t = 1;
										   }	
											
											echo form_radio('tax_type_per', 'P', $radio_is_checked_t, 'id=female');
											echo"&nbsp; Percentage(%) &nbsp;&nbsp;&nbsp;&nbsp;";
											
											echo form_radio('tax_type_per', 'A', $radio_is_checked_h, 'id=female');
											echo"&nbsp; Amount";
                                  ?>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div> 
                                  
                                     <div class="col-md-6 padding_opx">
                                     
                                           <div class="col-md-5 form-group padding_opx">
                                          
                                           <?php
                                             
                   $data = array('name'  => 'tax', 'id' => 'tax', 'type' => "text", $hotel_detail[$i]['tax'] , 'placeholder' => 'Value', 'class'=>"form-control margin_bottom");
                           echo form_input($data);
                                            ?>
                                          </div>
		                		  </div>
                        
                     </div>
               
                                            
                                            
                                              <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                  <label class="col-md-2 text-left padding_opx">
                                                  <span> Hotel Image </span></label>
                                                    <div class="col-md-5 form-group padding_opx">
														  <?php
                                                        
                                                            $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                                                            echo form_upload($data);
                                                          ?>
                                                      </div>
                                              		
                                                </div> 
                                                
                                                 <div class="col-md-12 padding_opx">
                                                    <label class="col-md-2 text-left padding_opx">
                                                        <span> Home Page Image (674 X 446)  </span></label>
                                                        <div class="col-md-3 form-group padding_opx">
                                                    
                                                             <?php
                                                              if($hotel_detail[0]['Image']!='') { ?>
                                                               <img src="<?php echo base_url('uploads/tourimage/'.$hotel_detail[0]['Image']) ?>" width="200px"> <br>
                                                              <?php } else { ?>
                                                               Image does not exist
                                                              <?php } ?>
                                                         <p>&nbsp;</p>
                                                      </div>
                                                        <?php
                                                              if($hotel_detail[0]['Image']!='') { ?>
                                                       <div class="col-md-1 ">  
                                                        <a href="javascript:void(0)" onClick="onRemove2(<?php echo $hotel_detail[0]['TourId']; ?>)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                                                           <?php } ?>
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
											
                                        $data = array('name'  => 'smt_enter', 'value' => 'Save',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
										
										 $data = array('name'  => 'smt_enter_nxt', 'value' => 'Save & Next',   'class'=>"btn btn-primary");
                                          echo form_submit($data);
                                    ?>
                                    
                            </div>
                            </div>
                                
						          <?php 
							          
							               echo form_close(); */
							       ?>
						</div>

				</div>
			</div>
		</div>
	</div>
  </div>
</div>-->
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 12">
<link rel=File-List href="total_cost_files/filelist.xml">
<style id="Foram SIV-5556G-2020 TVL 2021 51 PAX_12767_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font512767
	{color:green;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.font612767
	{color:red;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.font712767
	{color:green;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.font812767
	{color:red;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.xl6412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#4F6228;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C2D69A;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#4F6228;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C2D69A;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:green;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C2D69A;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:green;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#C2D69A;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:white;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#339966;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#92D050;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:0;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#92D050;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#DBE5F1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#FFC000;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;

	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#FCD5B4;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C2D69A;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EEECE1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#538ED5;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#FCD5B4;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C2D69A;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DDD9C3;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DDD9C3;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DDD9C3;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#FFC000;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:blue;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:blue;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:blue;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#CCC0DA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	background:#CCC0DA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#9BBB59;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#9BBB59;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#9BBB59;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#9BBB59;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl12412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl12512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl12612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EEECE1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EEECE1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl13312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl13412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl13512767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl13612767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#4F6228;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#C2D69A;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13712767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#4F6228;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#C2D69A;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13812767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#4F6228;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#C2D69A;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13912767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#92D050;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14012767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#92D050;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14112767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#92D050;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14212767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14312767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#4F6228;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14412767
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#F79646;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
-->
</style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Office Excel's Publish
as Web Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Foram SIV-5556G-2020 TVL 2021 51 PAX_12767" align=center
x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=829 class=xl7012767
 style='border-collapse:collapse;table-layout:fixed;width:620pt'>
 <col class=xl7012767 width=88 style='mso-width-source:userset;mso-width-alt:
 3218;width:66pt'>
 <col class=xl7012767 width=83 style='mso-width-source:userset;mso-width-alt:
 3035;width:62pt'>
 <col class=xl7012767 width=108 style='mso-width-source:userset;mso-width-alt:
 3949;width:81pt'>
 <col class=xl7012767 width=59 span=3 style='mso-width-source:userset;
 mso-width-alt:2157;width:44pt'>
 <col class=xl7012767 width=56 style='mso-width-source:userset;mso-width-alt:
 2048;width:42pt'>
 <col class=xl7012767 width=60 style='mso-width-source:userset;mso-width-alt:
 2194;width:45pt'>
 <col class=xl7012767 width=64 style='width:48pt'>
 <col class=xl7012767 width=67 style='mso-width-source:userset;mso-width-alt:
 2450;width:50pt'>
 <col class=xl7012767 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:44pt'>
 <col class=xl7012767 width=67 style='mso-width-source:userset;mso-width-alt:
 2450;width:50pt'>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl8312767 width=88 style='height:18.75pt;width:66pt'><a
  name="RANGE!A1">FILE NO</a></td>
  <td colspan=2 class=xl10812767 width=191 style='width:143pt'><?php echo $getTourGeneralInfo['FileNo']; ?></td>
  <td class=xl8412767 width=59 style='width:44pt'></td>
  <td colspan=8 class=xl11712767 width=491 style='border-left:none;width:367pt'><?php echo $getTourGeneralInfo['ItineraryTitle']; ?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl10712767 style='height:15.0pt;border-top:none'></td>
  <td class=xl8512767 align=right style='border-top:none;border-left:none'></td>
  <td class=xl8612767 style='border-top:none'>&nbsp;</td>
  <td class=xl8612767 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
  <td class=xl8612767 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8712767 style='height:15.0pt;border-top:none'>Total Pax</td>
  <td class=xl8812767 style='border-top:none;border-left:none'>Free Pax</td>
  <td class=xl8912767 style='border-top:none;border-left:none'>CHILDREN</td>
  <td class=xl9012767 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9012767 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9012767 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9112767 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9112767 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=2 class=xl9712767 style='border-left:none'>Part of Group</td>
  <td colspan=2 class=xl9712767 style='border-left:none'>Addition to Group</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl9212767 style='height:15.0pt;border-top:none'><?php echo $getTourGeneralInfo['PayingPax']; ?></td>
  <td class=xl9312767 style='border-top:none;border-left:none'><?php echo $getTourGeneralInfo['FreePax']; ?></td>
  <td class=xl8912767 style='border-top:none;border-left:none'>0</td>
  <td class=xl9412767 style='border-top:none;border-left:none'>SGL</td>
  <td class=xl9412767 style='border-top:none;border-left:none'>DBL</td>
  <td class=xl9412767 style='border-top:none;border-left:none'>TWN</td>
  <td class=xl9512767 style='border-top:none;border-left:none'>TPL</td>
  <td class=xl9612767 style='border-top:none;border-left:none'>QUD</td>
  <td class=xl9712767 style='border-top:none'>CH/WB</td>
  <td class=xl9712767 style='border-top:none;border-left:none'>CH/WOB</td>
  <td class=xl9712767 style='border-top:none;border-left:none'>CH/WB</td>
  <td class=xl9712767 style='border-top:none;border-left:none'>CH/WOB</td>
 </tr>
 
 <?php 
 $totalChwb = (($totalCost['hotel'][0]['twnFinalTotal'] *20)/100);
 $totalChwob = (($totalCost['hotel'][0]['twnFinalTotal'] *15)/100); 
 $totalChwib = (($totalCost['hotel'][0]['twnFinalTotal'] *25)/100);
 $totalChwiob = (($totalCost['hotel'][0]['twnFinalTotal'] *20)/100); 
 ?>
 
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=3 height=26 class=xl11412767 style='border-right:.5pt solid black;
  height:20.1pt'><a href="#HTL!A1"><span style='color:blue;font-weight:400;
  text-decoration:underline;text-underline-style:single'>Cost of Accommodation:</span></a></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php echo $totalCost['hotel'][0]['sglFinalTotal']; ?></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php echo $totalCost['hotel'][0]['dblFinalTotal']; ?></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php echo $totalCost['hotel'][0]['twnFinalTotal']; ?></td>
  <td class=xl10012767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['hotel'][0]['trpFinaltotal'],2); ?></td>
  <td class=xl10112767 align=right style='border-top:none;border-left:none'><?php echo $totalCost['hotel'][0]['qudFinalTotal']; ?></td>
  <td class=xl6812767 align=right style='border-top:none'><?php echo $totalChwb; ?></td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'><?php echo $totalChwob;  ?></td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'><?php echo $totalChwib;  ?></td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'><?php echo $totalChwiob;  ?></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=3 height=26 class=xl11412767 style='border-right:.5pt solid black;
  height:20.1pt'><a href="#'Transport+Guide'!A1">Cost of Transport &amp; Guide:</a></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl10012767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl10112767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl10212767 align=right style='border-top:none'>409.65</td>
  <td class=xl6812767 align=right style='border-top:none'>409.65</td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'>0.00</td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'>0.00</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=3 height=26 class=xl11412767 style='border-right:.5pt solid black;
  height:20.1pt'><a href="#'Driver HTL'!A1">Cost of Accommodation for driver</a></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php //echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php ///echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl6912767 align=right style='border-top:none;border-left:none'><?php //echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl10012767 align=right style='border-top:none;border-left:none'><?php //echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl10012767 align=right style='border-top:none;border-left:none'>19.88</td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'>19.88</td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'>19.88</td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'>0.00</td>
  <td class=xl6812767 align=right style='border-top:none;border-left:none'>0.00</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=3 height=26 class=xl11412767 style='border-right:.5pt solid black;
  height:20.1pt'><a href="#'Sight Seeing'!A1">Cost of Sight Seeing:</a></td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl10412767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl10412767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['AdultPrice'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['ChildPrice'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['ChildPrice'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['ChildPrice'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['sightSeeing'][0]['ChildPrice'],2)?></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=3 height=26 class=xl11412767 style='border-right:.5pt solid black;
  height:20.1pt'><a href="#Meals!A1">Cost of Meals B + L + D:</a></td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10412767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10412767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'><?php echo number_format($totalCost['totalMealCost'],2)?></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=3 height=26 class=xl12312767 style='border-right:.5pt solid black;
  height:20.1pt'>Cost of Tips @ USD6/Day/Pax:</td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10312767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10412767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10412767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10512767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10612767 align=right style='border-top:none;border-left:none'>0</td>
  <td class=xl10512767 align=right style='border-top:none'>0</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=3 height=26 class=xl12912767 style='border-right:.5pt solid black;
  height:20.1pt'>Total Cost:</td>
  <td class=xl9812767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalCost['hotel'][0]['sglFinalTotal'],2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9812767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalCost['hotel'][0]['dblFinalTotal'],2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9812767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalCost['hotel'][0]['twnFinalTotal'],2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9812767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalCost['hotel'][0]['trpFinaltotal'],2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9912767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalCost['hotel'][0]['qudFinalTotal'],2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9812767 align=right style='border-top:none'><?php echo $totalSGLCost = number_format($totalChwb,2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9812767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalChwob,2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9812767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalChwib) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
  <td class=xl9812767 align=right style='border-top:none;border-left:none'><?php echo $totalSGLCost = number_format($totalChwiob,2) + number_format($totalCost['totalMealCost'],2) + number_format($totalCost['sightSeeing'][0]['AdultPrice'],2) + number_format($totalCost['transport'][0]['totalTransGuide'],2)?></td>
 </tr>
</table>

</div>

</body>

</html>
