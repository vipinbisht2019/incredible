<!doctype html>
	<html lang="en">
    <head>
        <title>Tour Meal Add</title>
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
                                        	<i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Meal Add</b></h3>
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
                                                <a href="<?php echo base_url('admin/tour_meals/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">8</button></a>
                                                    <p>Meals</p>
                                            </div> 
                                            
                                             <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_totalcost/edit?TourId='.$TourId); ?>"><button type="button"  class="btn btn-default btn-circle">9</button></a>
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
<link rel=File-List href="meals_files/filelist.xml">
<style id="Foram SIV-5556G-2020 TVL 2021 51 PAX_15524_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1515524
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
	white-space:nowrap;}
.xl6515524
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6615524
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6715524
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
	mso-number-format:"d\/mmm";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6815524
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
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl6915524
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
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7015524
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
	mso-number-format:"\[ENG\]\[$-409\]d\\-mmm\;\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7115524
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
	mso-number-format:"\[ENG\]\[$-409\]d\\-mmm\;\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7215524
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
	mso-number-format:"\[ENG\]\[$-409\]d\\-mmm\;\@";
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7315524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#953735;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EEECE1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7415524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#953735;
	font-size:11.0pt;
	font-weight:600;
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
.xl7515524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#953735;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]d\\-mmm\;\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EEECE1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7615524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7715524
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7815524
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
	background:yellow;
	mso-pattern:black none;
	white-space:normal;}
.xl7915524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:12pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8015524
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
	mso-number-format:"\[ENG\]\[$-409\]d\\-mmm\;\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D7E4BC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8115524
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
	mso-number-format:ddd;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D7E4BC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8215524
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
	mso-number-format:Standard;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8315524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
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
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8415524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
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
	background:#F2DDDC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8515524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#F2DDDC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8615524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:blue;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#E6B9B8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8715524
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
	background:#EAF1DD;
	mso-pattern:black none;
	white-space:normal;}
.xl8815524
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
	mso-number-format:"\[ENG\]\[$-409\]d\\-mmm\;\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8915524
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
	mso-number-format:ddd;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9015524
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
	mso-number-format:Standard;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9115524
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
	mso-number-format:Standard;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9215524
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
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBEEF3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9315524
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
	mso-number-format:Standard;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9415524
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
	mso-number-format:Standard;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9515524
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
	mso-number-format:Standard;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9615524
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
	mso-number-format:"d\/mmm";
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#FDE9D9;
	mso-pattern:black none;
	white-space:normal;}
.xl9715524
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
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#FDE9D9;
	mso-pattern:black none;
	white-space:normal;}
.xl9815524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#F79646;
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
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9915524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#F79646;
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
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10015524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#F79646;
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10115524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#F79646;
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
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10215524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#F79646;
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
	border-left:none;
	background:#DDD9C3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10315524
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
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10415524
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
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
	background:#E6B9B8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10515524
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
	background:#E6B9B8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10615524
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
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#E6B9B8;
	mso-pattern:black none;
	white-space:nowrap;}
-->
</style>
</head>

<body>

<div id="Foram SIV-5556G-2020 TVL 2021 51 PAX_15524" align=center
x:publishsource="Excel">
<form name="meals" id="meals" method="POST" action="<?php base_url();?>submitMeals">
<table border=0 cellpadding=0 cellspacing=0 width=1270 style='border-collapse:
 collapse;table-layout:fixed;width:951pt'>
 <col width=28 style='mso-width-source:userset;mso-width-alt:1024;width:21pt'>
 <col class=xl7215524 width=57 style='mso-width-source:userset;mso-width-alt:
 2084;width:100pt'>
 <col class=xl7215524 width=39 style='mso-width-source:userset;mso-width-alt:
 1426;width:55pt'>
 <col width=123 style='mso-width-source:userset;mso-width-alt:4498;width:92pt'>
 <col width=179 style='mso-width-source:userset;mso-width-alt:6546;width:123pt'>
 <col width=60 style='mso-width-source:userset;mso-width-alt:2194;width:45pt'>
 <col class=xl1515524 width=123 style='mso-width-source:userset;mso-width-alt:
 4498;width:92pt'>
 <col width=179 style='mso-width-source:userset;mso-width-alt:6546;width:123pt'>
 <col width=60 style='mso-width-source:userset;mso-width-alt:2194;width:45pt'>
 <col class=xl1515524 width=123 style='mso-width-source:userset;mso-width-alt:
 4498;width:92pt'>
 <col width=179 style='mso-width-source:userset;mso-width-alt:6546;width:134pt'>
 <col width=60 span=2 style='mso-width-source:userset;mso-width-alt:2194;
 width:45pt'>
 <tr height=20 style='height:15.0pt'>
  <td colspan=3 height=20 class=xl7615524 width=124 style='height:15.0pt;
  width:93pt'><a name="RANGE!A1"><?php echo $getTourGeneralInfo['FileNo']; ?></a></td>
  <td class=xl8415524 width=123 style='width:92pt'></td>
  <td class=xl8515524 width=179 style='width:134pt'></td>
  <td class=xl8615524 width=60 style='border-left:none;width:45pt'><a
  href="#'Total Cost'!A1">MEALS</a></td>
  <td colspan=7 class=xl10415524 width=784 style='border-right:.5pt solid black;
  border-left:none;width:587pt'><?php echo $getTourGeneralInfo['ItineraryTitle']; ?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=3 height=20 class=xl10115524 style='border-right:.5pt solid black;
  height:15.0pt'>Meal Plan</td>
  <td colspan=3 class=xl9815524 style='border-right:.5pt solid black;
  border-left:none'>Breakfast</td>
  <td colspan=3 class=xl10115524 style='border-right:.5pt solid black;
  border-left:none'>Lunch</td>
  <td colspan=3 class=xl10115524 style='border-right:.5pt solid black;
  border-left:none'>Dinner</td>
  <td class=xl8315524 style='border-top:none;border-left:none'>Total</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7315524 style='height:15.0pt;border-top:none'>Day</td>
  <td class=xl7515524 style='border-top:none;border-left:none'>Date</td>
  <td class=xl7515524 style='border-top:none;border-left:none'>DOW</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>City</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>Cuisine /
  Restaurant</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>Cost</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>City</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>Cuisine /
  Restaurant</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>Cost</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>City</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>Cuisine /
  Restaurant</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>Cost</td>
  <td class=xl7415524 style='border-top:none;border-left:none'>Cost/Pax</td>
 </tr>
 <?php 
 
		$i=0;
		//print_r($getMealsDetail);
		foreach($getItineraryCities as $key => $cityValue){ 
		
	?>
     <tr height=26 style='mso-height-source:userset;height:20.1pt'>
      <td height=26 class=xl7915524 style='height:20.1pt;border-top:none'><?php echo $cityValue['ItenaryDay']; ?></td>
      <td class=xl8015524 style='border-top:none;border-left:none;background: #f9f9f9;'>
      <input type="date" value="<?php echo $cityValue['ItenaryDate'];?>" style="width: 128px;font-family: inherit;" disabled> </td>
      <td class=xl8115524 style='border-top:none;border-left:none;background: #f9f9f9;'><?php echo $cityValue['ItenaryDow']?> </td>
      <td class=xl9715524 width=123 style='border-top:none;border-left:none;
      width:92pt'><?php echo $cityValue['city_name']; ?></td>
      <td class=xl7715524 width=179 style='border-top:none;border-left:none;
      width:134pt;background: #f9f9f9;'><input type="text" name="restaurant_breakfast[]" id="restaurant_breakfast<?php echo $i;?>" value="<?php echo $getMealsDetail[$i]['restaurant_breakfast'];?>" style="width: 160px;"></td>
      <td class=xl9015524 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="breakfast_cost[]" id="breakfast_cost<?php echo $i;?>"  style="width: 57px;" value="<?php echo $getMealsDetail[$i]['breakfast_cost'];?>" onChange="getTotalMealCost(<?php echo $i;?>);"></td>
      <td class=xl9615524 width=123 style='border-top:none;border-left:none;
      width:92pt;background: #f9f9f9;'><?php echo $cityValue['city_name']; ?></td>
      <td class=xl7715524 width=179 style='border-top:none;border-left:none;
      width:134pt;background: #f9f9f9;'><input type="text" name="restaurant_lunch[]" id="restaurant_lunch<?php echo $i;?>" value="<?php echo $getMealsDetail[$i]['restaurant_lunch'];?>" style="width: 160px;"></td>
      <td class=xl9015524 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="lunch_cost[]" id="lunch_cost<?php echo $i;?>" style="width: 57px;" value="<?php echo $getMealsDetail[$i]['lunch_cost'];?>" onChange="getTotalMealCost(<?php echo $i;?>);"></td>
      <td class=xl9615524 width=123 style='border-top:none;border-left:none;
      width:92pt;background: #f9f9f9;'><?php echo $cityValue['city_name']; ?></td>
      <td class=xl7715524 width=179 style='border-top:none;border-left:none;
      width:134pt;background: #f9f9f9;'><input type="text" name="restaurant_dinner[]" id="restaurant_dinner<?php echo $i;?>" value="<?php echo $getMealsDetail[$i]['restaurant_dinner'];?>" style="width: 175px;"></td>
      <td class=xl9215524 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="dinner_cost[]" id="dinner_cost<?php echo $i;?>" style="width: 57px;" value="<?php echo $getMealsDetail[$i]['dinner_cost'];?>" onChange="getTotalMealCost(<?php echo $i;?>);">
      
      	 <input type="hidden" name="tour_id[]" id="tour_id" value="<?php echo $TourId; ?>">
         <input type="hidden" name="city_name[]" id="city_name" value="<?php echo $cityValue['city_name'];?>">
      
      </td>
      <td class=xl9315524 align=right style='border-top:none;border-left:none'><span name="total_meal_cost[]" id="total_meal_cost<?php echo $i; ?>"><?php echo $getMealsDetail[$i]['total_cost'];?></span>
      
      
      </td>
     </tr>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
     <script>
	 	
		function getTotalMealCost(id){
		
			var costBreakfast = document.getElementById("breakfast_cost"+id).value;
			var costLunch = document.getElementById("lunch_cost"+id).value;
			var costDinner = document.getElementById("dinner_cost"+id).value;
			
			
			if((costBreakfast!= '' || costBreakfast!=0) || (costLunch!= '' || costLunch!=0) || (costDinner!= '' || costDinner!=0)){
			
				var totalMeal = (parseInt(costBreakfast) + parseInt(costLunch) +  parseInt(costDinner));
				$('#total_meal_cost'+id).text(totalMeal);
			
			}
		
		}
	 
	 </script>
<?php 
$i++;
} ?>
</table>
<button type="submit" name="smt_enter" value="Save">Save</button>
<button type="submit" name="smt_enter_nxt" value="Save & Next">Save & Next</button>
</form>
</div>

</body>

</html>
