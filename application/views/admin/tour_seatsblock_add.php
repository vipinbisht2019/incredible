<!doctype html>
<html lang="en">
<head>
<title>Tours Seat Block  Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="<?php echo base_url('assets/css/ticket.css'); ?>">
<?php include('top.inc.php') ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var maxGroup = 10;
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Tours Seat BlockAdd</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/tour_seatsblock/view?id='.$TourId); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>
                



			<div class="panel">
		
				<div class="panel-body">




<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('locations')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                          
						     // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/tour_seatsblock/add', $attributes);
							     ?>

		                

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Tour Name </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TourName'); ?></span>
                                           <?php
									            echo $tours_details[0]['TourName'];
											    $data = array('TourId'  =>$tours_details[0]['TourId']);
                                                echo form_hidden($data);
                                           ?>
                                        
                                      </div>
		                		  </div>
                                  
                              
                                  
                                   <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">Select Bus * </label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TypeId'); ?></span>
                                        <?php
										  //echo"--------------".$bustype_id;  buses_seatmap
								
											/*unset($options);  									
									        $options['']='Select Bus';
											foreach($tour_buse_dropdown as $val)
										       {
												   $options[$val['TypeId']] = $val['CategoryName']." ".$val['TypeTitle'];
											   }													 $selected=$bustype_id;	
										    // echo form_dropdown('TypeId', $options,$selected,array('class="form-control margin_bottom"','onChange="buses_seatmap(1)"'););
											 */

											  $selected=$bustype_id;	
                                        ?> 
                                      <select name="TypeId" onChange="buses_seatmap(this.value)">
                                        <option value="">Select Bus</option>
                                        <?php
                                         foreach($tour_buse_dropdown as $val)
										       {
											     ?>
                                                     <option value="<?php echo $val['TypeId'] ?>" <?php if($val['TypeId']==$selected) echo"selected"; ?> ><?php echo $val['CategoryName']." ".$val['TypeTitle'] ?></option>
                                         <?php } ?>
                                      </select> 
                                        
		                		  </div>
                               </div> 
                                  
                               
                               <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Select Seats</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TourName'); ?></span>
                                              
                                     <div id="seatmap_replace">  
                                              
                                             <div class="col-md-11 col-xs-12" style="padding: 0px;">
                                            
                                             
                                                  <!-- Bus Seat ########################################################### -->
                                            
                                             <?php
                                                    // echo"<pre>";
                                                      // print_r($tour_seatmap_seatno);
                                                    //echo"</pre>"; 
                                                    //die();
                                                    $seatnumber_lower_arr=$tour_seatmap_seatno[0];
                                                    $lower_deck_location_id=$tour_seatmap_seatno[2];
                                                    $SeatStr=0;
                                            //--------------------------------------------------------- covert in array booked seat -----------------------------------------------
                                                   foreach($tour_busseatbooked as $bookedseat)
                                                      {
                                                          $SeatStr= $SeatStr.",".$bookedseat['SeatNo'];
                                                      }
                                            // -------------------------- string convert into array -----------------------------------------------
                                                     $SeatArr=explode(",",$SeatStr);
                                              ?>   
                                            <!-- Bus Seat End ########################################################### -->
                                            <div class="col-xs-12 col-md-12">
                                              
                                                 <table id="table_57seater">
                                              
                                              <tbody>
                                            
                                                <tr>
                                                        <td>
                                                      
                                                      
                                                         
                                                          <?php 
                                                             if(in_array(1,$lower_deck_location_id)) 
                                                               { 
                                                                  if(in_array($seatnumber_lower_arr[1],$SeatArr))
                                                                       {
                                                                       ?> 
                                                                          <input type="checkbox" id="input1" disabled />
                                                                           <label for="input1"><?php echo $seatnumber_lower_arr[1] ?></label>
                                                                   <?php } else { ?>
                                                                      <input type="checkbox" id="input1" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[1] ?>" ng-model="formData.<?php echo $seatnumber_lower_arr[1]; ?>">
                                                                     <label for="input1"><?php echo $seatnumber_lower_arr[1] ?></label>
                                                                       <? 
                                                                     }
                                                            } ?>     
                                                        </td>
                                            
                                                        <td>
                                                         <?php 
                                                             if(in_array(2,$lower_deck_location_id)) 
                                                               {  
                                                                     if(in_array($seatnumber_lower_arr[2],$SeatArr))
                                                                       {
                                                                  ?>
                                                                          <input type="checkbox" id="input2" disabled />
                                                                           <label for="input2"><?php echo $seatnumber_lower_arr[2] ?></label>
                                                                   <?php } else { ?>  
                                                                   <input type="checkbox" id="input2" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[2] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[2]; ?>">
                                                                    <label for="input2"><?php echo $seatnumber_lower_arr[2] ?></label>
                                                           <? } } ?>   
                                                        
                                                        </td>
                                            
                                                        <td>
                                                          <?php 
                                                             if(in_array(3,$lower_deck_location_id)) 
                                                               { 
                                                                   if(in_array($seatnumber_lower_arr[3],$SeatArr))
                                                                       {
                                                                  ?>
                                                                      <input type="checkbox" id="input3" disabled />
                                                                       <label for="input3"><?php echo $seatnumber_lower_arr[3] ?></label>
                                                                   <?php } else { ?>
                                                                   <input type="checkbox" id="input3" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[3] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[3]; ?>">
                                                                    <label for="input3"><?php echo $seatnumber_lower_arr[3] ?></label>
                                                           <?  } } ?>
                                                              <!--  <input type="checkbox" id="input3" />
                                                                <label for="input3">3</label>-->
                                                        </td>
                                            
                                                        <td>
                                                             <?php 
                                                                 if(in_array(4,$lower_deck_location_id)) 
                                                                   { 
                                                                       if(in_array($seatnumber_lower_arr[4],$SeatArr))
                                                                       {
                                                                   ?>
                                                                              <input type="checkbox" id="input4" disabled />
                                                                           <label for="input4"><?php echo $seatnumber_lower_arr[4] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input4" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[4] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[4]; ?>">
                                                                        <label for="input4"><?php echo $seatnumber_lower_arr[4] ?></label>
                                                               <?  } } ?>
                                                        
                                                               <!-- <input type="checkbox" id="input4"/>
                                                                <label for="input4">4</label>-->
                                                        </td>
                                            
                                                          <td>
                                                               <?php 
                                                                 if(in_array(5,$lower_deck_location_id)) 
                                                                   { 
                                                                       if(in_array($seatnumber_lower_arr[5],$SeatArr))
                                                                       {
                                                                     ?>
                                                                              <input type="checkbox" id="input5" disabled />
                                                                           <label for="input5"><?php echo $seatnumber_lower_arr[5] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input5" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[5] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[5]; ?>">
                                                                        <label for="input5"><?php echo $seatnumber_lower_arr[5] ?></label>
                                                               <? } } ?>
                                                            <!--  <input type="checkbox" id="input5"/>
                                                               <label for="input5">5</label>
                                                            -->            
                                                          </td>
                                            
                                            
                                                      <td>
                                                             <?php 
                                                                 if(in_array(6,$lower_deck_location_id)) 
                                                                   { 
                                                                      if(in_array($seatnumber_lower_arr[6],$SeatArr))
                                                                       {
                                                                    ?>
                                                                          <input type="checkbox" id="input6" disabled />
                                                                          <label for="input6"><?php echo $seatnumber_lower_arr[6] ?></label>
                                                                      <?php } else { ?>
                                                                       <input type="checkbox" id="input6" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[6] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[6]; ?>">
                                                                        <label for="input6"><?php echo $seatnumber_lower_arr[6] ?></label>
                                                               <?  } } ?>
                                                      
                                                              <!--  <input type="checkbox" id="input8"/>
                                                                <label for="input4">8</label>-->
                                                        </td>
                                            
                                                        <td>
                                                               <?php 
                                                                 if(in_array(7,$lower_deck_location_id)) 
                                                                   { 
                                                                      if(in_array($seatnumber_lower_arr[7],$SeatArr))
                                                                       {
                                                                     ?>
                                                                           <input type="checkbox" id="input7" disabled />
                                                                           <label for="input7"><?php echo $seatnumber_lower_arr[7] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input7" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[7] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[7]; ?>">
                                                                        <label for="input7"><?php echo $seatnumber_lower_arr[7] ?></label>
                                                               <?  } } ?>
                                                    
                                                        </td>
                                            
                                                        <td>
                                                           <?php 
                                                                 if(in_array(8,$lower_deck_location_id)) 
                                                                   {   
                                                                     if(in_array($seatnumber_lower_arr[8],$SeatArr))
                                                                       {
                                                                     ?>
                                                                           <input type="checkbox" id="input8" disabled />
                                                                           <label for="input8"><?php echo $seatnumber_lower_arr[8] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input8" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[8] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[8]; ?>">
                                                                        <label for="input8"><?php echo $seatnumber_lower_arr[8] ?></label>
                                                               <?  } } ?>
                                                                  
                                                                  
                                                                   <!-- <input type="checkbox" id="input8"/>
                                                                    <label for="input8">8</label>-->
                                                              </td>
                                            
                                                                <td>
                                                                    <?php 
                                                                     if(in_array(9,$lower_deck_location_id)) 
                                                                         { 
                                                                             if(in_array($seatnumber_lower_arr[9],$SeatArr))
                                                                                {
                                                                     ?>
                                                                           <input type="checkbox" id="input9" disabled />
                                                                           <label for="input9"><?php echo $seatnumber_lower_arr[9] ?></label>
                                                                   <?php } else { ?>
                                                                            
                                                                               <input type="checkbox" id="input9" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[9] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[9]; ?>">
                                                                                <label for="input9"><?php echo $seatnumber_lower_arr[9] ?></label>
                                                                       <?  } } ?>
                                                                  <!--  <input type="checkbox" id="input9"/>
                                                                    <label for="input9">9</label>-->
                                                        </td>
                                            
                                                                 <td>
                                                                       <?php 
                                                                         if(in_array(10,$lower_deck_location_id)) 
                                                                           {   
                                                                           
                                                                            if(in_array($seatnumber_lower_arr[10],$SeatArr))
                                                                               {
                                                                     ?>
                                                                           <input type="checkbox" id="input10" disabled />
                                                                           <label for="input10"><?php echo $seatnumber_lower_arr[10] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input10" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[10] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[10]; ?>">
                                                                                <label for="input10"><?php echo $seatnumber_lower_arr[10] ?></label>
                                                                       <?  } } ?>
                                                                  
                                                              
                                                        </td>
                                            
                                                                    <td>
                                                                         <?php 
                                                                             if(in_array(11,$lower_deck_location_id)) 
                                                                               { 
                                                                                    if(in_array($seatnumber_lower_arr[11],$SeatArr))
                                                                                     {
                                                                     ?>
                                                                           <input type="checkbox" id="input11" disabled />
                                                                           <label for="input11"><?php echo $seatnumber_lower_arr[11] ?></label>
                                                                   <?php } else { ?>
                                                                                
                                                                                   <input type="checkbox" id="input11" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[11] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[11]; ?>">
                                                                                    <label for="input11"><?php echo $seatnumber_lower_arr[11] ?></label>
                                                                           <?  } } ?>
                                                 
                                                               </td>
                                            
                                                                  <td>
                                                                            <?php 
                                                                     if(in_array(12,$lower_deck_location_id)) 
                                                                       { 
                                                                                if(in_array($seatnumber_lower_arr[12],$SeatArr))
                                                                                {
                                                                     ?>
                                                                           <input type="checkbox" id="input12" disabled />
                                                                           <label for="input12"><?php echo $seatnumber_lower_arr[12] ?></label>
                                                                   <?php } else { ?>
                                                                                  
                                                                                       <input type="checkbox" id="input12" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[12] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[12]; ?>">
                                                                                        <label for="input12"><?php echo $seatnumber_lower_arr[12] ?></label>
                                                                               <?  }} ?>
                                                                     
                                                               </td>
                                            
                                                                <td>
                                                                        <?php 
                                                                             if(in_array(13,$lower_deck_location_id)) 
                                                                               {    if(in_array($seatnumber_lower_arr[13],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input13" disabled />
                                                                           <label for="input13"><?php echo $seatnumber_lower_arr[13] ?></label>
                                                                   <?php } else { ?>
                                                                                   <input type="checkbox" id="input13" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[13] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[13]; ?>">
                                                                                    <label for="input13"><?php echo $seatnumber_lower_arr[13] ?></label>
                                                                           <?  } } ?>
                                                               
                                                                </td>
                                            
                                                                 <td>
                                                                          <?php 
                                                                             if(in_array(14,$lower_deck_location_id)) 
                                                                               {   
                                                                               
                                                                                if(in_array($seatnumber_lower_arr[14],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input14" disabled />
                                                                           <label for="input14"><?php echo $seatnumber_lower_arr[14] ?></label>
                                                                   <?php } else { ?>
                                                                                   <input type="checkbox" id="input14" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[14] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[14]; ?>">
                                                                                    <label for="input14"><?php echo $seatnumber_lower_arr[14] ?></label>
                                                                           <?  } } ?>
                                                                    <!--<input type="checkbox" id="input14"/>
                                                                    <label for="input14">14</label>-->
                                                        </td>
                                            
                                            
                                                </tr>
                                                   
                                            <!-- Second Row ########################################### -->
                                            
                                                  <tr>
                                                 
                                                     <td>
                                                          
                                                              <?php 
                                                                  if(in_array(15,$lower_deck_location_id)) 
                                                                   { 
                                                                    if(in_array($seatnumber_lower_arr[15],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input15" disabled />
                                                                           <label for="input15"><?php echo $seatnumber_lower_arr[14] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input15" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[15] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[15]; ?>">
                                                                        <label for="input15"><?php echo $seatnumber_lower_arr[15] ?></label>
                                                               <?  }} ?>
                                                       
                                                       
                                                        </td>
                                            
                                                        <td>
                                                              <?php 
                                                                  if(in_array(16,$lower_deck_location_id)) 
                                                                   { 
                                                                   if(in_array($seatnumber_lower_arr[16],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input16" disabled />
                                                                           <label for="input16"><?php echo $seatnumber_lower_arr[16] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input16" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[16] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[16]; ?>">
                                                                        <label for="input16"><?php echo $seatnumber_lower_arr[16] ?></label>
                                                               <? }  } ?>
                                                  
                                                        </td>
                                            
                                                        <td>
                                                              <?php 
                                                                  if(in_array(17,$lower_deck_location_id)) 
                                                                   { 
                                                                   if(in_array($seatnumber_lower_arr[17],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input17" disabled />
                                                                           <label for="input17"><?php echo $seatnumber_lower_arr[17] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input17" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[17] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[17]; ?>">
                                                                        <label for="input17"><?php echo $seatnumber_lower_arr[17] ?></label>
                                                               <? }  } ?>
                                                      
                                                        </td>
                                            
                                                        <td>
                                                                <?php 
                                                                  if(in_array(18,$lower_deck_location_id)) 
                                                                   { 
                                                                   if(in_array($seatnumber_lower_arr[18],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input18" disabled />
                                                                           <label for="input18"><?php echo $seatnumber_lower_arr[18] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input18" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[18] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[18]; ?>">
                                                                        <label for="input18"><?php echo $seatnumber_lower_arr[18] ?></label>
                                                               <? } } ?>
                                                             
                                                               <!-- <input type="checkbox" id="input4"/>
                                                                <label for="input4">4</label>-->
                                                        </td>
                                            
                                                          <td>
                                                                 <?php 
                                                                  if(in_array(19,$lower_deck_location_id)) 
                                                                   { 
                                                                    if(in_array($seatnumber_lower_arr[19],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input19" disabled />
                                                                           <label for="input19"><?php echo $seatnumber_lower_arr[19] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input19" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[19] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[19]; ?>">
                                                                        <label for="input19"><?php echo $seatnumber_lower_arr[19] ?></label>
                                                               <? } } ?>
                                                             <!--<input type="checkbox" id="input5"/>
                                                            <label for="input5">5</label>-->
                                                        </td>
                                            
                                            
                                                      <td>
                                                               <?php 
                                                                  if(in_array(20,$lower_deck_location_id)) 
                                                                   { 
                                                                   if(in_array($seatnumber_lower_arr[20],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input20" disabled />
                                                                           <label for="input20"><?php echo $seatnumber_lower_arr[20] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input20" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[20] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[20]; ?>">
                                                                        <label for="input20"><?php echo $seatnumber_lower_arr[20] ?></label>
                                                               <?  } } ?>
                                                                <!--<input type="checkbox" id="input6"/>
                                                                <label for="input4">6</label>-->
                                                        </td>
                                            
                                             
                                            
                                                                  <td>
                                                                        <?php 
                                                                              if(in_array(21,$lower_deck_location_id)) 
                                                                               { 
                                                                               if(in_array($seatnumber_lower_arr[21],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input21" disabled />
                                                                           <label for="input21"><?php echo $seatnumber_lower_arr[21] ?></label>
                                                                   <?php } else { ?>
                                                                                   <input type="checkbox" id="input21" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[21] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[21]; ?>">
                                                                                    <label for="input21"><?php echo $seatnumber_lower_arr[21] ?></label>
                                                                           <? } } ?>
                                                                    
                                                                           <!-- <input type="checkbox" id="input8"/>
                                                                            <label for="input8">8</label>-->
                                                            </td>
                                            
                                                                <td>
                                                                       <?php 
                                                                          if(in_array(22,$lower_deck_location_id)) 
                                                                           {
                                                                           if(in_array($seatnumber_lower_arr[22],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input22" disabled />
                                                                           <label for="input22"><?php echo $seatnumber_lower_arr[22] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input22" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[22] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[22]; ?>">
                                                                                <label for="input22"><?php echo $seatnumber_lower_arr[22] ?></label>
                                                                        <? } } ?>
                                                                        <!--<input type="checkbox" id="input9"/>
                                                                        <label for="input9">9</label>-->
                                                        </td>
                                            
                                                                 <td>
                                                                        <?php 
                                                                          if(in_array(23,$lower_deck_location_id)) 
                                                                           { 
                                                                           if(in_array($seatnumber_lower_arr[23],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input23" disabled />
                                                                           <label for="input23"><?php echo $seatnumber_lower_arr[23] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input23" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[23] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[23]; ?>">
                                                                                <label for="input23"><?php echo $seatnumber_lower_arr[23] ?></label>
                                                                       <? } } ?>
                                                                   <!-- <input type="checkbox" id="input10"/>
                                                                    <label for="input8">10</label>-->
                                                        </td>
                                            
                                                                  <td>
                                                                      <?php 
                                                                      if(in_array(24,$lower_deck_location_id)) 
                                                                       { 
                                                                       if(in_array($seatnumber_lower_arr[24],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input24" disabled />
                                                                           <label for="input24"><?php echo $seatnumber_lower_arr[24] ?></label>
                                                                   <?php } else { ?>
                                                                           <input type="checkbox" id="input24" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[24] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[24]; ?>">
                                                                            <label for="input24"><?php echo $seatnumber_lower_arr[24] ?></label>
                                                                   <? } } ?>
                                                                        <!--<input type="checkbox" id="input11"/>
                                                                        <label for="input11">11</label>-->
                                                            </td>
                                            
                                                                  <td>
                                                                          <?php 
                                                                              if(in_array(25,$lower_deck_location_id)) 
                                                                               { 
                                                                               if(in_array($seatnumber_lower_arr[25],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input25" disabled />
                                                                           <label for="input25"><?php echo $seatnumber_lower_arr[25] ?></label>
                                                                   <?php } else { ?>
                                                                                   <input type="checkbox" id="input25" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[25] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[25]; ?>">
                                                                                    <label for="input25"><?php echo $seatnumber_lower_arr[25] ?></label>
                                                                           <? } } ?>
                                                                        <!--<input type="checkbox" id="input12"/>
                                                                        <label for="input12">12</label>-->
                                                        </td>
                                            
                                                                <td>
                                                                           <?php 
                                                                              if(in_array(26,$lower_deck_location_id)) 
                                                                               { 
                                                                               if(in_array($seatnumber_lower_arr[26],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input26" disabled />
                                                                           <label for="input26"><?php echo $seatnumber_lower_arr[26] ?></label>
                                                                   <?php } else { ?>
                                                                                   <input type="checkbox" id="input26" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[26] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[26]; ?>">
                                                                                    <label for="input26"><?php echo $seatnumber_lower_arr[26] ?></label>
                                                                           <?  } } ?>
                                                                
                                                                    <!--<input type="checkbox" id="input13"/>
                                                                    <label for="input13">13</label>-->
                                                             </td>
                                                             
                                                                              <td>
                                                               <?php 
                                                                  if(in_array(27,$lower_deck_location_id)) 
                                                                   { 
                                                                   if(in_array($seatnumber_lower_arr[27],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input27" disabled />
                                                                           <label for="input27"><?php echo $seatnumber_lower_arr[27] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input27" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[27] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[27]; ?>">
                                                                        <label for="input27"><?php echo $seatnumber_lower_arr[27] ?></label>
                                                               <?  }} ?>
                                                            <!--<input type="checkbox" id="input7"/>
                                                            <label for="input7">7</label>-->
                                                        </td>
                                            
                                                                 <td>
                                                                        <?php 
                                                                          if(in_array(28,$lower_deck_location_id)) 
                                                                           {if(in_array($seatnumber_lower_arr[28],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input28" disabled />
                                                                           <label for="input28"><?php echo $seatnumber_lower_arr[28] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input28" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[28] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[28]; ?>">
                                                                                <label for="input28"><?php echo $seatnumber_lower_arr[28] ?></label>
                                                                       <? } } ?>
                                                                        <!--<input type="checkbox" id="input14"/>
                                                                        <label for="input14">14</label>-->
                                                        </td>
                                            
                                            
                                                </tr>
                                            
                                            
                                                   <!-- Second Row -->
                                                   
                                            
                                                <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp; </td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                            
                                                                 <td>
                                                                        <?php 
                                                                          if(in_array(65,$lower_deck_location_id)) 
                                                                           { 	 
                                                                             if(in_array($seatnumber_lower_arr[65],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input65" disabled />
                                                                           <label for="input65"><?php echo $seatnumber_lower_arr[65] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input65" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[65] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[1]; ?>">
                                                                                <label for="input65"><?php echo $seatnumber_lower_arr[65] ?></label>
                                                                       <?  } } ?>
                                                                 </td>
                                            
                                                              <td>
                                                                     <?php 
                                                                          if(in_array(64,$lower_deck_location_id)) 
                                                                           { 	
                                                                              if(in_array($seatnumber_lower_arr[64],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input64" disabled />
                                                                           <label for="input64"><?php echo $seatnumber_lower_arr[64] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input64" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[64] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[64]; ?>">
                                                                                <label for="input64"><?php echo $seatnumber_lower_arr[64] ?></label>
                                                                       <?  } } ?>
                                                    
                                                              </td>
                                            
                                                                  <td>
                                                                       <?php 
                                                                          if(in_array(63,$lower_deck_location_id)) 
                                                                           { 	 
                                                                             if(in_array($seatnumber_lower_arr[63],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input63" disabled />
                                                                           <label for="input63"><?php echo $seatnumber_lower_arr[63] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input63" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[63] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[63]; ?>">
                                                                                <label for="input63"><?php echo $seatnumber_lower_arr[63] ?></label>
                                                                       <?  } } ?>
                                            
                                                                <td>
                                                                      <?php 
                                                                          if(in_array(62,$lower_deck_location_id)) 
                                                                           { 	 
                                                                             if(in_array($seatnumber_lower_arr[62],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input62" disabled />
                                                                           <label for="input62"><?php echo $seatnumber_lower_arr[62] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input62" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[62] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[62]; ?>">
                                                                                <label for="input62"><?php echo $seatnumber_lower_arr[62] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                 <td>
                                                                    <?php 
                                                                          if(in_array(61,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[61],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input61" disabled />
                                                                           <label for="input61"><?php echo $seatnumber_lower_arr[61] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input61" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[61] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[61]; ?>">
                                                                                <label for="input61"><?php echo $seatnumber_lower_arr[61] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                    <td>
                                                                     <?php 
                                                                          if(in_array(60,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[60],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input60" disabled />
                                                                           <label for="input60"><?php echo $seatnumber_lower_arr[60] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input60" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[60] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[60]; ?>">
                                                                                <label for="input60"><?php echo $seatnumber_lower_arr[60] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                  <td>
                                                                           <?php 
                                                                          if(in_array(59,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[59],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input59" disabled />
                                                                           <label for="input59"><?php echo $seatnumber_lower_arr[59] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input59" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[59] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[59]; ?>">
                                                                                <label for="input59"><?php echo $seatnumber_lower_arr[59] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                <td>
                                                                        <?php 
                                                                          if(in_array(58,$lower_deck_location_id)) 
                                                                           { 	 
                                                                            if(in_array($seatnumber_lower_arr[58],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input58" disabled />
                                                                           <label for="input58"><?php echo $seatnumber_lower_arr[58] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input58" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[58] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[58]; ?>">
                                                                                <label for="input58"><?php echo $seatnumber_lower_arr[58] ?></label>
                                                                       <?  }} ?>
                                                        </td>
                                            
                                                                 <td>
                                                                       <?php 
                                                                          if(in_array(57,$lower_deck_location_id)) 
                                                                           {
                                                                               if(in_array($seatnumber_lower_arr[57],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input57" disabled />
                                                                           <label for="input57"><?php echo $seatnumber_lower_arr[57] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input57" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[57] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[57]; ?>">
                                                                                <label for="input57"><?php echo $seatnumber_lower_arr[57] ?></label>
                                                                       <?  }} ?>
                                                   
                                                                 </td>
                                            
                                            
                                                </tr> 
                                            
                                            <!-- Three ###############  -->
                                                  <tr>
                                                           <td>
                                                              <?php 
                                                                          if(in_array(29,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[29],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input29" disabled />
                                                                           <label for="input29"><?php echo $seatnumber_lower_arr[29] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input29" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[29] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[29]; ?>">
                                                                                <label for="input29"><?php echo $seatnumber_lower_arr[29] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                        <td>
                                                               <?php 
                                                                     if(in_array(30,$lower_deck_location_id)) 
                                                                           {
                                                                               if(in_array($seatnumber_lower_arr[30],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input30" disabled />
                                                                           <label for="input30"><?php echo $seatnumber_lower_arr[30] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input30" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[30] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[30]; ?>">
                                                                                <label for="input30"><?php echo $seatnumber_lower_arr[30] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                        <td>
                                                              <?php 
                                                                     if(in_array(31,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[31],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input31" disabled />
                                                                           <label for="input31"><?php echo $seatnumber_lower_arr[31] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input31" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[31] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[31]; ?>">
                                                                                <label for="input31"><?php echo $seatnumber_lower_arr[31] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                        <td>
                                                                    <?php 
                                                                     if(in_array(32,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[32],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input32" disabled />
                                                                           <label for="input32"><?php echo $seatnumber_lower_arr[32] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input32" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[32] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[32]; ?>">
                                                                                <label for="input32"><?php echo $seatnumber_lower_arr[32] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                          <td>
                                                                      <?php 
                                                                     if(in_array(33,$lower_deck_location_id)) 
                                                                           {
                                                                               if(in_array($seatnumber_lower_arr[33],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input33" disabled />
                                                                           <label for="input33"><?php echo $seatnumber_lower_arr[33] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input33" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[33] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[33]; ?>">
                                                                                <label for="input33"><?php echo $seatnumber_lower_arr[33] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                            
                                                      <td>
                                                                    <?php 
                                                                     if(in_array(34,$lower_deck_location_id)) 
                                                                           { 	   if(in_array($seatnumber_lower_arr[34],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input34" disabled />
                                                                           <label for="input34"><?php echo $seatnumber_lower_arr[34] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input34" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[34] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[34]; ?>">
                                                                                <label for="input34"><?php echo $seatnumber_lower_arr[34] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                        <td>
                                                                  <?php 
                                                                     if(in_array(35,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[35],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input35" disabled />
                                                                           <label for="input35"><?php echo $seatnumber_lower_arr[35] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input35" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[35] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[35]; ?>">
                                                                                <label for="input35"><?php echo $seatnumber_lower_arr[35] ?></label>
                                                                       <?  }}?>
                                                        </td>
                                            
                                                                  <td>
                                                                           <?php 
                                                                     if(in_array(36,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[36],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input36" disabled />
                                                                           <label for="input36"><?php echo $seatnumber_lower_arr[36] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input36" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[36] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[36]; ?>">
                                                                                <label for="input36"><?php echo $seatnumber_lower_arr[36] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                <td>
                                                                         <?php 
                                                                     if(in_array(37,$lower_deck_location_id)) 
                                                                           { 	   if(in_array($seatnumber_lower_arr[37],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input37" disabled />
                                                                           <label for="input37"><?php echo $seatnumber_lower_arr[37] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input37" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[37] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[37]; ?>">
                                                                                <label for="input37"><?php echo $seatnumber_lower_arr[37] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                 <td>
                                                                          <?php 
                                                                     if(in_array(38,$lower_deck_location_id)) 
                                                                           { 	   if(in_array($seatnumber_lower_arr[38],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input38" disabled />
                                                                           <label for="input38"><?php echo $seatnumber_lower_arr[38] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input38" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[38] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[38]; ?>">
                                                                                <label for="input38"><?php echo $seatnumber_lower_arr[38] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                    <td>
                                                                             <?php 
                                                                     if(in_array(39,$lower_deck_location_id)) 
                                                                           {
                                                                                   if(in_array($seatnumber_lower_arr[39],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input39" disabled />
                                                                           <label for="input39"><?php echo $seatnumber_lower_arr[39] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input39" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[39] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[39]; ?>">
                                                                                <label for="input39"><?php echo $seatnumber_lower_arr[39] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                  <td>
                                                                               <?php 
                                                                     if(in_array(40,$lower_deck_location_id)) 
                                                                           {  
                                                                           if(in_array($seatnumber_lower_arr[40],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input40" disabled />
                                                                           <label for="input40"><?php echo $seatnumber_lower_arr[40] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input40" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[40] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[40]; ?>">
                                                                                <label for="input40"><?php echo $seatnumber_lower_arr[40] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                <td>
                                                                    <?php 
                                                                     if(in_array(41,$lower_deck_location_id)) 
                                                                           { 	
                                                                           if(in_array($seatnumber_lower_arr[41],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input41" disabled />
                                                                           <label for="input41"><?php echo $seatnumber_lower_arr[41] ?></label>
                                                                   <?php } else { ?>
                                                                       <input type="checkbox" id="input41" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[41] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[41]; ?>">
                                                                        <label for="input41"><?php echo $seatnumber_lower_arr[41] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                 <td>
                                                                <?php 
                                                                          if(in_array(42,$lower_deck_location_id)) 
                                                                           { 	
                                                                              if(in_array($seatnumber_lower_arr[42],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input42" disabled />
                                                                           <label for="input42"><?php echo $seatnumber_lower_arr[42] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input42" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[42] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[42]; ?>">
                                                                                <label for="input42"><?php echo $seatnumber_lower_arr[42] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                            
                                                </tr>
                                            
                                            
                                            <!-- Second Row -->
                                            <!-- Three #end ################################# -->
                                            <!-- Four #################################################### -->
                                            
                                                  <tr>
                                                  <td>
                                                    <!--<input type="checkbox" id="input1" disabled />-->
                                                           <!-- <label for="input1">1</label>-->
                                                                  <?php 
                                                                     if(in_array(43,$lower_deck_location_id)) 
                                                                        { 
                                                                             if(in_array($seatnumber_lower_arr[43],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input43" disabled />
                                                                           <label for="input43"><?php echo $seatnumber_lower_arr[43] ?></label>
                                                                   <?php } else { ?>
                                                                         <input type="checkbox" id="input43" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[43] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[43]; ?>">
                                                                                <label for="input43"><?php echo $seatnumber_lower_arr[43] ?></label>
                                                                       <?  } }?>
                                                        </td>
                                            
                                                        <td>
                                                               <?php if(in_array(44,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[44],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input44" disabled />
                                                                           <label for="input44"><?php echo $seatnumber_lower_arr[44] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input44" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[44] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[44]; ?>">
                                                                                <label for="input44"><?php echo $seatnumber_lower_arr[44] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                        <td>
                                                                 <?php if(in_array(45,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[45],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input45" disabled />
                                                                           <label for="input45"><?php echo $seatnumber_lower_arr[45] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input45" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[45] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[45]; ?>">
                                                                                <label for="input45"><?php echo $seatnumber_lower_arr[45] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                        <td>
                                                                    <?php if(in_array(46,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[46],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input46" disabled />
                                                                           <label for="input46"><?php echo $seatnumber_lower_arr[46] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input46" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[46] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[46]; ?>">
                                                                                <label for="input46"><?php echo $seatnumber_lower_arr[46] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                          <td>
                                                                  <?php if(in_array(47,$lower_deck_location_id)) 
                                                                           {
                                                                               if(in_array($seatnumber_lower_arr[47],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input47" disabled />
                                                                           <label for="input47"><?php echo $seatnumber_lower_arr[47] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input47" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[47] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[47]; ?>">
                                                                                <label for="input47"><?php echo $seatnumber_lower_arr[47] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                            
                                                      <td>
                                                                     <?php if(in_array(48,$lower_deck_location_id)) 
                                                                           { 	
                                                                            if(in_array($seatnumber_lower_arr[48],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                               <input type="checkbox" id="input48" disabled />
                                                                               <label for="input48"><?php echo $seatnumber_lower_arr[48] ?></label>
                                                                      <?php } else { ?>
                                                                               <input type="checkbox" id="input48" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[48] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[48]; ?>">
                                                                                <label for="input48"><?php echo $seatnumber_lower_arr[48] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                        <td>
                                                                      <?php if(in_array(49,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[49],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input49" disabled />
                                                                           <label for="input49"><?php echo $seatnumber_lower_arr[49] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input49" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[49] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[49]; ?>">
                                                                                <label for="input49"><?php echo $seatnumber_lower_arr[49] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                  <td>
                                                                          <?php if(in_array(50,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[50],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input50" disabled />
                                                                           <label for="input50"><?php echo $seatnumber_lower_arr[50] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input50" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[50] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[50]; ?>">
                                                                                <label for="input50"><?php echo $seatnumber_lower_arr[50] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                <td>
                                                                <?php if(in_array(51,$lower_deck_location_id)) 
                                                                         { 
                                                                            if(in_array($seatnumber_lower_arr[51],$SeatArr))
                                                                                  {
                                                                       ?>
                                                                           <input type="checkbox" id="input51" disabled />
                                                                           <label for="input51"><?php echo $seatnumber_lower_arr[51] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input51" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[51] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[51]; ?>">
                                                                                <label for="input51"><?php echo $seatnumber_lower_arr[51] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                 <td>
                                                                        <?php if(in_array(52,$lower_deck_location_id)) 
                                                                           { 	  
                                                                            if(in_array($seatnumber_lower_arr[52],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input52" disabled />
                                                                           <label for="input52"><?php echo $seatnumber_lower_arr[52] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input52" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[52] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[52]; ?>">
                                                                                <label for="input52"><?php echo $seatnumber_lower_arr[52] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                    <td>
                                                                       <?php
                                                                        if(in_array(53,$lower_deck_location_id)) 
                                                                           { 	
                                                                              if(in_array($seatnumber_lower_arr[53],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input53" disabled />
                                                                           <label for="input53"><?php echo $seatnumber_lower_arr[53] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input53" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[53] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[53]; ?>">
                                                                                <label for="input53"><?php echo $seatnumber_lower_arr[53] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                  <td>
                                                                    <?php if(in_array(54,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[54],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input54" disabled />
                                                                           <label for="input54"><?php echo $seatnumber_lower_arr[54] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input54" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[54] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[54]; ?>">
                                                                                <label for="input54"><?php echo $seatnumber_lower_arr[54] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                                <td>
                                                                       <?php if(in_array(55,$lower_deck_location_id)) 
                                                                           { 
                                                                               if(in_array($seatnumber_lower_arr[55],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input55" disabled />
                                                                           <label for="input55"><?php echo $seatnumber_lower_arr[55] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input55" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[55] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[55]; ?>">
                                                                                <label for="input55"><?php echo $seatnumber_lower_arr[55] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                                         <td>
                                                                   <?php 
                                                                     if(in_array(56,$lower_deck_location_id)) 
                                                                           { 
                                                                            if(in_array($seatnumber_lower_arr[56],$SeatArr))
                                                                                  {
                                                                     ?>
                                                                           <input type="checkbox" id="input56" disabled />
                                                                           <label for="input56"><?php echo $seatnumber_lower_arr[56] ?></label>
                                                                   <?php } else { ?>
                                                                               <input type="checkbox" id="input56" name="SeatNo[]"  value="<?php echo $seatnumber_lower_arr[56] ?>"  ng-model="formData.<?php echo $seatnumber_lower_arr[56]; ?>">
                                                                                <label for="input56"><?php echo $seatnumber_lower_arr[56] ?></label>
                                                                       <?  } } ?>
                                                        </td>
                                            
                                            
                                                </tr>
                                            
                                            
                                                   <!-- Second Row -->
                                            
                                            
                                            
                                            <!-- Four End ################################################## -->
                                            
                                              </tbody>
                                            
                                            </table>
                                            
                                            
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                             </div>
                                                                                          
                                                  
                                         </div>  <!-- end div replace --> 
                                        
                                      </div>
		                		  </div>   
                           
                                
                              
                                 <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Block Date </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                            <input type="date" name="BlockDate[]"   value="<?php echo set_value('BlockDate') ?>">
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
                                
                              
                              
                           
                              
                               
                                  
                                

                               
                  
                            
                               <div class="col-md-12 padding_opx margin_top">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx margin_top">

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
                                        //-------------------------------------------------------------------------------------------------------------------			
                                        $data = array('name'  => 'smt_enter', 'value' => 'Save',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
										
										
                                    ?>
                                    
                            </div>
                            </div>
                                
						       <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
						</div>
                        
                        
                        
                        <div class="col-md-12 fieldGroupCopy margin_top" style="display: none;">
		                			<div class="col-md-2 text-left padding_opx">
		                				<span> Block Date  </span></div>
		                			   <div class="col-md-5 form-group padding_opx">
                             
                                      
                                         <input type="date" name="BlockDate[]" value="<?php echo set_value('BlockDate') ?>">
                                        
                                        
                                      </div>
                                       <div class="col-md-1 "> 
                          <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
            </div>
		                		</div>
                        

<!--Html ##################################################  -->   <!-- //southdelhitravel ,   Malik@2015  password@malik@2015 -->
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
     
     
<script>
function buses_seatmap(bustype)
 {

jQuery.ajax({
url:'<?php echo base_url(); ?>admin/tour_seatsblock/tour_buses_seatmap',
data:'bustype_id=' + bustype ,
	type:'POST',
	success:function(data){ $('#seatmap_replace').html(data);}
	
});
    			
}
	 
	
</script>	




        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>