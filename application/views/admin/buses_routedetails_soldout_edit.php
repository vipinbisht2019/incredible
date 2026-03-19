<!doctype html>
<html lang="en">
  <head>
	<title>One way bus seat block</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ticket.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ticket_sleeper.css'); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

              	<div class="panel-heading col-md-12 col-xs-12  padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>One way bus seat block</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/busesroutesdetails/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>   

			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('seatsblock')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
							
							      // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/busesroutes_soldout/edit', $attributes);
							     ?>
                                 
                                 
               
                                 

                           
                            <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Route Title * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                               <?php
											    // echo"<pre>";
												   //print_r($buses_routesdeatils);
												 //echo"</pre>";
												 echo $buses_routesdeatils[0]['RoutesName'];
											   ?>
                                      </div>
		                		</div>
                           
                            <div class="col-md-12 padding_opx">        
                               <p>&nbsp;</p> 
                            </div>  
                             
                  <div style=" margin-top:20ox;" class="col-md-12 padding_opx ">
                              
                              
                              <div class="col-md-12 col-xs-12 padding_0_mobile padding_0_mob_px ">
                 <div class="panel panel-default col-xs-12 padding_0_mob_px">

                 <div class="panel-heading" style="background-color: #ffffff; border-bottom: 2px solid #ed8323;">
                      <h4 style="font-weight: 500;margin: 0px;"> <i class="fa fa-bed"></i> Lower Deck </h4>
                 </div>

             <div class="panel-body">  

      <!-- *************************** seat Map *********************** -->  
      <!-- *************************** seat Map *********************** -->  



            
<?php
		$discountArr=$buss_seatno_discount[0];
		$TotalDiscount=$discountArr['FareDiscount'];
		$SeatNoDiscount=$discountArr['SeatNo_Discount'];
       //die();
		$seatnumber_lower_arr=$tour_seatmap_seatno[0];
		$seatnumber_is_slepper_arr=$tour_seatmap_seatno[1];
		$lower_deck_location_id=$tour_seatmap_seatno[2];
		$SeatStr=0;
	
		$SeatNoBlocked=$block_seats[0]['SeatNo'];
		 
//--------------------------------------------------------- covert in array booked seat -----------------------------------------------
       foreach($buses_seatbooked as $bookedseat)
	      {
		      $SeatStr=$SeatStr.','.$bookedseat['SeatNo'];
		  }
// -------------------------- string convert into array ---------------------------------------------------------------------------------
         $BookedSeatStr=$SeatStr;
          $SeatStr=$SeatStr.",".trim($SeatNoBlocked);
  
	  $SeatNoArr=explode(",",$SeatStr);
	  for($s=0;$s<count($SeatNoArr);$s++) // loop due to remove space in seat number
	   {
	      $SeatArr[$s]= trim($SeatNoArr[$s]); 
	   }	 

  ?> 
<div class="col-xs-12 col-md-11 padding_0_mobile seat_rotate">
<table id="table_mix">
  <tbody>
    <tr>
      <td <?php if($seatnumber_is_slepper_arr[1]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
          
           <?php 
			  
			 if(in_array(1,$lower_deck_location_id)) 
			      { 
				
				       if(in_array($seatnumber_lower_arr[1],$SeatArr))
						   {
						   ?> 
                              <input  type="checkbox" id="input1" name="SeatNoSelect[]"  checked  value="<?php echo $seatnumber_lower_arr[1] ?>">
                               <label for="input1" <?php if($seatnumber_is_slepper_arr[1]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[1] ?></label>
				       <?php } else { ?>
                          <input  type="checkbox" id="input1" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[1] ?>">
                         <label for="input1" <?php if($seatnumber_is_slepper_arr[1]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[1] ?></label>
                           <? 
			             }
					   }
					
			 ?>     
            </td>

            <td <?php if($seatnumber_is_slepper_arr[2]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
             <?php 
			     if(in_array(2,$lower_deck_location_id)) 
			       {  
				         if(in_array($seatnumber_lower_arr[2],$SeatArr))
						   {
				             ?>
                                <input   type="checkbox" id="input2" name="SeatNoSelect[]" checked  value="<?php echo $seatnumber_lower_arr[2] ?>" >
                               <label for="input2" <?php if($seatnumber_is_slepper_arr[2]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[2] ?></label>
				            <?php } else { ?>  
                       <input   type="checkbox" id="input2" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[2] ?>" >
                        <label for="input2" <?php if($seatnumber_is_slepper_arr[2]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[2] ?></label>
               <? } } ?>   
            
            </td>

            <td <?php if($seatnumber_is_slepper_arr[2]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
              <?php 
			     if(in_array(3,$lower_deck_location_id)) 
			       { 
				       if(in_array($seatnumber_lower_arr[3],$SeatArr))
						   {
					  ?>
                          <input   type="checkbox" id="input3" name="SeatNoSelect[]" checked  value="<?php echo $seatnumber_lower_arr[3] ?>"  >
                           <label for="input3" <?php if($seatnumber_is_slepper_arr[3]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[3] ?></label>
				       <?php } else { ?>
                       <input   type="checkbox" id="input3" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[3] ?>"  >
                        <label for="input3" <?php if($seatnumber_is_slepper_arr[3]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[3] ?></label>
               <?  } } ?>
                  <!--  <input type="checkbox" id="input3" />
                    <label for="input3">3</label>-->
            </td>

            <td  <?php if($seatnumber_is_slepper_arr[4]=='Y') { ?> id="sleepernine"  <?php } ?>>
				 <?php 
                     if(in_array(4,$lower_deck_location_id)) 
                       { 
					     
					       if(in_array($seatnumber_lower_arr[4],$SeatArr))
						   {
					   ?>
                                   <input   type="checkbox" id="input4" name="SeatNoSelect[]" checked  value="<?php echo $seatnumber_lower_arr[4] ?>">
                                 <label for="input4" <?php if($seatnumber_is_slepper_arr[4]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[4] ?></label>
				      
                      <?php } else { ?>
                           <input   type="checkbox" id="input4" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[4] ?>">
                            <label  for="input4" <?php if($seatnumber_is_slepper_arr[4]=='Y') { ?> id="sleepernine" <?php } ?> > &nbsp;  <?php echo $seatnumber_lower_arr[4] ?></label>
                   <?  } } ?>
            
               
            </td>
 
              <td <?php if($seatnumber_is_slepper_arr[5]=='Y') { ?> id="sleepernine"  <?php } ?>>
                   <?php 
                     if(in_array(5,$lower_deck_location_id)) 
                       { 
					       if(in_array($seatnumber_lower_arr[5],$SeatArr))
						   {
						 ?>
                                <input   type="checkbox" id="input5" name="SeatNoSelect[]" checked  value="<?php echo $seatnumber_lower_arr[5] ?>">
                               <label for="input5" <?php if($seatnumber_is_slepper_arr[5]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[5] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input5" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[5] ?>">
                            <label for="input5" <?php if($seatnumber_is_slepper_arr[5]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[5] ?></label>
                   <? } } ?>
                <!--  <input type="checkbox" id="input5"/>
                   <label for="input5">5</label>
                -->            
              </td>


          <td <?php if($seatnumber_is_slepper_arr[6]=='Y') { ?> id="sleepernine"  <?php } ?>>
                 <?php 
                     if(in_array(6,$lower_deck_location_id)) 
                       { 
					      if(in_array($seatnumber_lower_arr[6],$SeatArr))
						   {
						?>
                              <input   type="checkbox" id="input6" name="SeatNoSelect[]"  checked value="<?php echo $seatnumber_lower_arr[6] ?>">
                              <label for="input6" <?php if($seatnumber_is_slepper_arr[6]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[1] ?></label>
				          <?php } else { ?>
                           <input   type="checkbox" id="input6" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[6] ?>">
                            <label for="input6" <?php if($seatnumber_is_slepper_arr[6]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[6] ?></label>
                   <?  } } ?>
          
                  <!--  <input type="checkbox" id="input8"/>
                    <label for="input4">8</label>-->
            </td>

            <td <?php if($seatnumber_is_slepper_arr[7]=='Y') { ?> id="sleepernine"  <?php } ?>>
                   <?php 
                     if(in_array(7,$lower_deck_location_id)) 
                       { 
					      if(in_array($seatnumber_lower_arr[7],$SeatArr))
						   {
					     ?>
                               <input type="checkbox" id="input7" disabled />
                               <label for="input7" <?php if($seatnumber_is_slepper_arr[7]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[7] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input7" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[7] ?>"  >
                            <label for="input7" <?php if($seatnumber_is_slepper_arr[7]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[7] ?></label>
                   <?  } } ?>
               <!-- <input type="checkbox" id="input7"/>
                <label for="input7">7</label>-->
            </td>

            <td <?php if($seatnumber_is_slepper_arr[8]=='Y') { ?> id="sleepernine"  <?php } ?>>
               <?php 
                     if(in_array(8,$lower_deck_location_id)) 
                       {   
					     if(in_array($seatnumber_lower_arr[8],$SeatArr))
						   {
					     ?>
                               <input type="checkbox" id="input8" disabled />
                               <label for="input8" <?php if($seatnumber_is_slepper_arr[8]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[8] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input8" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[8] ?>">
                            <label for="input8" <?php if($seatnumber_is_slepper_arr[8]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[8] ?></label>
                   <?  } } ?>
                      
                      
                       <!-- <input type="checkbox" id="input8"/>
                        <label for="input8">8</label>-->
                  </td>

                    <td <?php if($seatnumber_is_slepper_arr[9]=='Y') { ?> id="sleepernine"  <?php } ?>>
						<?php 
                         if(in_array(9,$lower_deck_location_id)) 
                             { 
							     if(in_array($seatnumber_lower_arr[9],$SeatArr))
						            {
					     ?>
                               <input type="checkbox" id="input9" disabled />
                               <label for="input9" <?php if($seatnumber_is_slepper_arr[9]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[9] ?></label>
				       <?php } else { ?>
								
                                   <input   type="checkbox" id="input9" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[9] ?>">
                                    <label for="input9" <?php if($seatnumber_is_slepper_arr[9]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[9] ?></label>
                           <?  } } ?>
                      <!--  <input type="checkbox" id="input9"/>
                        <label for="input9">9</label>-->
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[10]=='Y') { ?> id="sleepernine"  <?php } ?>>
						   <?php 
                             if(in_array(10,$lower_deck_location_id)) 
                               {   
							   
							    if(in_array($seatnumber_lower_arr[10],$SeatArr))
						           {
					     ?>
                               <input type="checkbox" id="input10" disabled />
                               <label for="input10" <?php if($seatnumber_is_slepper_arr[10]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[10] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input10" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[10] ?>">
                                    <label for="input10" <?php if($seatnumber_is_slepper_arr[10]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[10] ?></label>
                           <?  } } ?>
                           
                   
                          
                      
                      
                      <!-- $TotalSeatDiscountFare -->
                  
            </td>

                        <td <?php if($seatnumber_is_slepper_arr[11]=='Y') { ?> id="sleepernine"  <?php } ?>>
							 <?php 
                                 if(in_array(11,$lower_deck_location_id)) 
                                   { 
								        if(in_array($seatnumber_lower_arr[11],$SeatArr))
						                 {
					     ?>
                               <input type="checkbox" id="input11" disabled />
                               <label for="input11" <?php if($seatnumber_is_slepper_arr[11]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[11] ?></label>
				       <?php } else { ?>
									
                                       <input   type="checkbox" id="input11" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[11] ?>">
                                        <label for="input11" <?php if($seatnumber_is_slepper_arr[11]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[11] ?></label>
                               <?  } } ?>
     
                   </td>

                      <td <?php if($seatnumber_is_slepper_arr[12]=='Y') { ?> id="sleepernine"  <?php } ?>>
							    <?php 
						 if(in_array(12,$lower_deck_location_id)) 
						   { 
									if(in_array($seatnumber_lower_arr[12],$SeatArr))
									{
					     ?>
                               <input type="checkbox" id="input12" disabled />
                               <label for="input12" <?php if($seatnumber_is_slepper_arr[12]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[12] ?></label>
				       <?php } else { ?>
									  
                                           <input   type="checkbox" id="input12" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[12] ?>">
                                            <label for="input12" <?php if($seatnumber_is_slepper_arr[12]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[12] ?></label>
                                   <?  }} ?>
                         
                   </td>

                    <td <?php if($seatnumber_is_slepper_arr[13]=='Y') { ?> id="sleepernine"  <?php } ?>>
							<?php 
                                 if(in_array(13,$lower_deck_location_id)) 
                                   {    if(in_array($seatnumber_lower_arr[13],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input13" disabled />
                               <label for="input13" <?php if($seatnumber_is_slepper_arr[13]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[13] ?></label>
				       <?php } else { ?>
                                       <input   type="checkbox" id="input13" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[13] ?>">
                                        <label for="input13" <?php if($seatnumber_is_slepper_arr[13]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[13] ?></label>
                               <?  } } ?>
                   
                    </td>

                     <td <?php if($seatnumber_is_slepper_arr[14]=='Y') { ?> id="sleepernine"  <?php } ?>>
							  <?php 
                                 if(in_array(14,$lower_deck_location_id)) 
                                   {   
								   
								    if(in_array($seatnumber_lower_arr[14],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input14" disabled />
                               <label for="input14" <?php if($seatnumber_is_slepper_arr[14]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[14] ?></label>
				       <?php } else { ?>
                                       <input   type="checkbox" id="input14" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[14] ?>">
                                        <label for="input14" <?php if($seatnumber_is_slepper_arr[14]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[14] ?></label>
                               <?  } } ?>
                        <!--<input type="checkbox" id="input14"/>

                        <label for="input14">14</label>-->
            </td>


    </tr>
       
<!-- Second Row ########################################### -->

      <tr>
     
               <td <?php if($seatnumber_is_slepper_arr[15]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
              
				  <?php 
                      if(in_array(15,$lower_deck_location_id)) 
                       { 
					    if(in_array($seatnumber_lower_arr[15],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input15" disabled />
                               <label for="input15" <?php if($seatnumber_is_slepper_arr[15]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[15] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input15" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[15] ?>" >
                            <label for="input15" <?php if($seatnumber_is_slepper_arr[15]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[15] ?></label>
                   <?  }} ?>
           
           
            </td>

            <td <?php if($seatnumber_is_slepper_arr[16]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                  <?php 
                      if(in_array(16,$lower_deck_location_id)) 
                       { 
					   if(in_array($seatnumber_lower_arr[16],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input16" disabled />
                               <label for="input16" <?php if($seatnumber_is_slepper_arr[16]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[16] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input16" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[16] ?>" >
                            <label for="input16" <?php if($seatnumber_is_slepper_arr[16]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[16] ?></label>
                   <? }  } ?>
      
            </td>

            <td <?php if($seatnumber_is_slepper_arr[17]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                  <?php 
                      if(in_array(17,$lower_deck_location_id)) 
                       { 
					   if(in_array($seatnumber_lower_arr[17],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input17" disabled />
                               <label for="input17" <?php if($seatnumber_is_slepper_arr[17]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[17] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input17" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[17] ?>" >
                            <label for="input17" <?php if($seatnumber_is_slepper_arr[17]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[17] ?></label>
                   <? }  } ?>
          
            </td>

            <td <?php if($seatnumber_is_slepper_arr[18]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                    <?php 
                      if(in_array(18,$lower_deck_location_id)) 
                       { 
					   if(in_array($seatnumber_lower_arr[18],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input18" disabled />
                               <label for="input18" <?php if($seatnumber_is_slepper_arr[18]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[18] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input18" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[18] ?>"  >
                            <label for="input18" <?php if($seatnumber_is_slepper_arr[18]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[18] ?></label>
                   <? } } ?>
                 
                   <!-- <input type="checkbox" id="input4"/>
                    <label for="input4">4</label>-->
            </td>

              <td <?php if($seatnumber_is_slepper_arr[19]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                     <?php 
                      if(in_array(19,$lower_deck_location_id)) 
                       { 
					    if(in_array($seatnumber_lower_arr[19],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input19" disabled />
                               <label for="input19" <?php if($seatnumber_is_slepper_arr[19]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[19] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input19" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[19] ?>" >
                            <label for="input19" <?php if($seatnumber_is_slepper_arr[19]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[19] ?></label>
                   <? } } ?>
                 <!--<input type="checkbox" id="input5"/>
                <label for="input5">5</label>-->
            </td>


          <td <?php if($seatnumber_is_slepper_arr[20]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                   <?php 
                      if(in_array(20,$lower_deck_location_id)) 
                       { 
					   if(in_array($seatnumber_lower_arr[20],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input20" disabled />
                               <label for="input20" <?php if($seatnumber_is_slepper_arr[20]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[20] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input20" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[20] ?>" >
                            <label for="input20" <?php if($seatnumber_is_slepper_arr[20]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[20] ?></label>
                   <?  } } ?>
                    <!--<input type="checkbox" id="input6"/>
                    <label for="input4">6</label>-->  
					
            </td>

 

                      <td <?php if($seatnumber_is_slepper_arr[21]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
							<?php 
                                  if(in_array(21,$lower_deck_location_id)) 
                                   { 
								   if(in_array($seatnumber_lower_arr[21],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input21" disabled />
                               <label for="input21" <?php if($seatnumber_is_slepper_arr[21]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[21] ?></label>
				       <?php } else { ?>
                                       <input   type="checkbox" id="input21" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[21] ?>"  >
                                        <label for="input21" <?php if($seatnumber_is_slepper_arr[21]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[21] ?></label>
                               <? } } ?>
                        
                               <!-- <input type="checkbox" id="input8"/>
                                <label for="input8">8</label>-->
                </td>

                    <td <?php if($seatnumber_is_slepper_arr[22]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
						   <?php 
                              if(in_array(22,$lower_deck_location_id)) 
                               {
							   if(in_array($seatnumber_lower_arr[22],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input22" disabled />
                               <label for="input22" <?php if($seatnumber_is_slepper_arr[22]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[22] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input22" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[22] ?>">
                                    <label for="input22" <?php if($seatnumber_is_slepper_arr[22]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[22] ?></label>
                            <? } } ?>
                            <!--<input type="checkbox" id="input9"/>
                            <label for="input9">9</label>-->
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[23]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
							<?php 
                              if(in_array(23,$lower_deck_location_id)) 
                               { 
							   if(in_array($seatnumber_lower_arr[23],$SeatArr))
						              {
					     ?>
                               <input  type="checkbox" id="input23" disabled />
                               <label for="input23" <?php if($seatnumber_is_slepper_arr[23]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[23] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input23" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[23] ?>">
                                    <label for="input23" <?php if($seatnumber_is_slepper_arr[23]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[23] ?></label>
                           <? } } ?>
                       <!-- <input type="checkbox" id="input10"/>
                        <label for="input8">10</label>-->
            </td>

                      <td <?php if($seatnumber_is_slepper_arr[24]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                          <?php 
                          if(in_array(24,$lower_deck_location_id)) 
                           { 
						   if(in_array($seatnumber_lower_arr[24],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input24" disabled />
                               <label for="input24" <?php if($seatnumber_is_slepper_arr[24]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[24] ?></label>
				       <?php } else { ?>
                               <input   type="checkbox" id="input24" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[24] ?>">
                                <label for="input24" <?php if($seatnumber_is_slepper_arr[24]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[24] ?></label>
                       <? } } ?>
                            <!--<input type="checkbox" id="input11"/>
                            <label for="input11">11</label>-->
                </td>

                      <td <?php if($seatnumber_is_slepper_arr[25]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
							  <?php 
                                  if(in_array(25,$lower_deck_location_id)) 
                                   { 
								   if(in_array($seatnumber_lower_arr[25],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input25" disabled />
                               <label for="input25" <?php if($seatnumber_is_slepper_arr[25]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[25] ?></label>
				       <?php } else { ?>
                                       <input   type="checkbox" id="input25" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[25] ?>" >
                                        <label for="input25" <?php if($seatnumber_is_slepper_arr[25]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[25] ?></label>
                               <? } } ?>
                            <!--<input type="checkbox" id="input12"/>
                            <label for="input12">12</label>-->
            </td>

                    <td <?php if($seatnumber_is_slepper_arr[26]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
							   <?php 
                                  if(in_array(26,$lower_deck_location_id)) 
                                   { 
								   if(in_array($seatnumber_lower_arr[26],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input26" disabled />
                               <label for="input26" <?php if($seatnumber_is_slepper_arr[26]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[26] ?></label>
				       <?php } else { ?>
                                       <input   type="checkbox" id="input26" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[26] ?>"  >
                                        <label for="input26" <?php if($seatnumber_is_slepper_arr[26]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[26] ?></label>
                               <?  } } ?>
                    
                        <!--<input type="checkbox" id="input13"/>
                        <label for="input13">13</label>-->
                 </td>
                 
              <td <?php if($seatnumber_is_slepper_arr[27]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                   <?php 
                      if(in_array(27,$lower_deck_location_id)) 
                       { 
					   if(in_array($seatnumber_lower_arr[27],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input27" disabled />
                               <label for="input27" <?php if($seatnumber_is_slepper_arr[27]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[27] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input27" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[27] ?>" >
                            <label for="input27" <?php if($seatnumber_is_slepper_arr[27]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[27] ?></label>
                   <?  }} ?>
                <!--<input type="checkbox" id="input7"/>
                <label for="input7">7</label>-->
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[28]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
							<?php 
                              if(in_array(28,$lower_deck_location_id)) 
                               {if(in_array($seatnumber_lower_arr[28],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input28" disabled />
                               <label for="input28" <?php if($seatnumber_is_slepper_arr[28]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[28] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input28" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[28] ?>">
                                    <label for="input28" <?php if($seatnumber_is_slepper_arr[28]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[28] ?></label>
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

                     <td <?php if($seatnumber_is_slepper_arr[65]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                            <?php 
                              if(in_array(65,$lower_deck_location_id)) 
                               { 	 
							     if(in_array($seatnumber_lower_arr[65],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input65" disabled />
                               <label for="input65" <?php if($seatnumber_is_slepper_arr[65]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[65] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input65" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[65] ?>">
                                    <label for="input65" <?php if($seatnumber_is_slepper_arr[65]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[65] ?></label>
                           <?  } } ?>
                     </td>

                  <td <?php if($seatnumber_is_slepper_arr[64]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                         <?php 
                              if(in_array(64,$lower_deck_location_id)) 
                               { 	
							      if(in_array($seatnumber_lower_arr[64],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input64" disabled />
                               <label for="input64" <?php if($seatnumber_is_slepper_arr[64]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[64] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input64" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[64] ?>"  >
                                    <label for="input64" <?php if($seatnumber_is_slepper_arr[64]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[64] ?></label>
                           <?  } } ?>
        
                  </td>

                      <td <?php if($seatnumber_is_slepper_arr[63]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                           <?php 
                              if(in_array(63,$lower_deck_location_id)) 
                               { 	 
							     if(in_array($seatnumber_lower_arr[63],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input63" disabled />
                               <label for="input63" <?php if($seatnumber_is_slepper_arr[63]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[63] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input63" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[63] ?>">
                                    <label for="input63" <?php if($seatnumber_is_slepper_arr[63]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[63] ?></label>
                           <?  } } ?>

                    <td <?php if($seatnumber_is_slepper_arr[62]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                          <?php 
                              if(in_array(62,$lower_deck_location_id)) 
                               { 	 
							     if(in_array($seatnumber_lower_arr[62],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input62" disabled />
                               <label for="input62" <?php if($seatnumber_is_slepper_arr[62]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[62] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input62" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[62] ?>" >
                                    <label for="input62" <?php if($seatnumber_is_slepper_arr[62]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[62] ?></label>
                           <?  } } ?>
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[61]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                        <?php 
                              if(in_array(61,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[61],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input61" disabled />
                               <label for="input61" <?php if($seatnumber_is_slepper_arr[61]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[61] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input61" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[61] ?>" >
                                    <label for="input61" <?php if($seatnumber_is_slepper_arr[61]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[61] ?></label>
                           <?  } } ?>
            </td>

                        <td <?php if($seatnumber_is_slepper_arr[60]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                         <?php 
                              if(in_array(60,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[60],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input60" disabled />
                               <label for="input60" <?php if($seatnumber_is_slepper_arr[60]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[60] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input60" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[60] ?>">
                                    <label for="input60" <?php if($seatnumber_is_slepper_arr[60]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[60] ?></label>
                           <?  } } ?>
            </td>

                      <td <?php if($seatnumber_is_slepper_arr[59]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                               <?php 
                              if(in_array(59,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[59],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input59" disabled />
                               <label for="input59" <?php if($seatnumber_is_slepper_arr[59]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[59] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input59" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[59] ?>"  >
                                    <label for="input59" <?php if($seatnumber_is_slepper_arr[59]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[59] ?></label>
                           <?  } } ?>
            </td>

                    <td <?php if($seatnumber_is_slepper_arr[58]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                            <?php 
                              if(in_array(58,$lower_deck_location_id)) 
                               { 	 
							    if(in_array($seatnumber_lower_arr[58],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input58" disabled />
                               <label for="input58" <?php if($seatnumber_is_slepper_arr[58]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[58] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input58" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[58] ?>"  >
                                    <label for="input58" <?php if($seatnumber_is_slepper_arr[58]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[58] ?></label>
                           <?  }} ?>
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[57]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                           <?php 
                              if(in_array(57,$lower_deck_location_id)) 
                               {
							   	   if(in_array($seatnumber_lower_arr[57],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input57" disabled />
                               <label for="input57" <?php if($seatnumber_is_slepper_arr[57]=='Y') { ?> id="sleepernine" <?php } ?>><?php echo $seatnumber_lower_arr[57] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input57" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[57] ?>" >
                                    <label for="input57" <?php if($seatnumber_is_slepper_arr[57]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[57] ?></label>
                           <?  }} ?>
       
                     </td>


    </tr> 

<!-- Three ############### 

                    
 -->
      <tr>
               <td <?php if($seatnumber_is_slepper_arr[29]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                  <?php 
                              if(in_array(29,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[29],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input29" disabled />
                               <label for="input29" <?php if($seatnumber_is_slepper_arr[29]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[29] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input29" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[29] ?>"  >
                                    <label for="input29" <?php if($seatnumber_is_slepper_arr[29]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[29] ?></label>
                           <?  } } ?>
            </td>

            <td <?php if($seatnumber_is_slepper_arr[30]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                   <?php 
                         if(in_array(30,$lower_deck_location_id)) 
                               {
							   	   if(in_array($seatnumber_lower_arr[30],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input30" disabled />
                               <label for="input30" <?php if($seatnumber_is_slepper_arr[30]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[30] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input30" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[30] ?>" >
                                    <label for="input30" <?php if($seatnumber_is_slepper_arr[20]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[30] ?></label>
                           <?  } } ?>
            </td>

            <td <?php if($seatnumber_is_slepper_arr[31]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                  <?php 
                         if(in_array(31,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[31],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input31" disabled />
                               <label for="input31" <?php if($seatnumber_is_slepper_arr[31]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[31] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input31" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[31] ?>" >
                                    <label for="input31" <?php if($seatnumber_is_slepper_arr[31]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[31] ?></label>
                           <?  } } ?>
            </td>

            <td <?php if($seatnumber_is_slepper_arr[32]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                        <?php 
                         if(in_array(32,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[32],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input32" disabled />
                               <label for="input32" <?php if($seatnumber_is_slepper_arr[32]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[32] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input32" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[32] ?>" >
                                    <label for="input32"> &nbsp; <?php echo $seatnumber_lower_arr[32] ?></label>
                           <?  } } ?>
            </td>

              <td <?php if($seatnumber_is_slepper_arr[33]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                          <?php 
                         if(in_array(33,$lower_deck_location_id)) 
                               {
							   	   if(in_array($seatnumber_lower_arr[33],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input33" disabled />
                               <label for="input33" <?php if($seatnumber_is_slepper_arr[33]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[33] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input33" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[33] ?>" >
                                    <label for="input33" <?php if($seatnumber_is_slepper_arr[33]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[33] ?></label>
                           <?  } } ?>
            </td>


          <td <?php if($seatnumber_is_slepper_arr[34]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                        <?php 
                         if(in_array(34,$lower_deck_location_id)) 
                               { 	   if(in_array($seatnumber_lower_arr[34],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input34" disabled />
                               <label for="input34" <?php if($seatnumber_is_slepper_arr[34]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[34] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input34" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[34] ?>" >
                                    <label for="input34" <?php if($seatnumber_is_slepper_arr[34]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[34] ?></label>
                           <?  } } ?>
            </td>

            <td  <?php if($seatnumber_is_slepper_arr[35]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                      <?php 
                         if(in_array(35,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[35],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input35" disabled />
                               <label for="input35" <?php if($seatnumber_is_slepper_arr[35]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[35] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input35" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[35] ?>" >
                                    <label for="input35" <?php if($seatnumber_is_slepper_arr[35]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[35] ?></label>
                           <?  }}?>
            </td>

                      <td <?php if($seatnumber_is_slepper_arr[36]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                               <?php 
                         if(in_array(36,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[36],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input36" disabled />
                               <label for="input36" <?php if($seatnumber_is_slepper_arr[36]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[36] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input36" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[36] ?>" >
                                    <label for="input36" <?php if($seatnumber_is_slepper_arr[36]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[36] ?></label>
                           <?  } } ?>
            </td>

                    <td <?php if($seatnumber_is_slepper_arr[37]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                             <?php 
                         if(in_array(37,$lower_deck_location_id)) 
                               { 	   if(in_array($seatnumber_lower_arr[37],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input37" disabled />
                               <label for="input37" <?php if($seatnumber_is_slepper_arr[37]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[37] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input37" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[37] ?>"  >
                                    <label for="input37" <?php if($seatnumber_is_slepper_arr[37]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[37] ?></label>
                           <?  } } ?>
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[38]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                              <?php 
                         if(in_array(38,$lower_deck_location_id)) 
                               { 	   if(in_array($seatnumber_lower_arr[38],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input38" disabled />
                               <label for="input38" <?php if($seatnumber_is_slepper_arr[38]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[38] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input38" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[38] ?>" >
                                    <label for="input38" <?php if($seatnumber_is_slepper_arr[38]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[38] ?></label>
                           <?  } } ?>
            </td>

                        <td <?php if($seatnumber_is_slepper_arr[39]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                                 <?php 
                         if(in_array(39,$lower_deck_location_id)) 
                               {
							     	   if(in_array($seatnumber_lower_arr[39],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input39" disabled />
                               <label for="input39" <?php if($seatnumber_is_slepper_arr[39]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[39] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input39" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[39] ?>" >
                                    <label for="input39" <?php if($seatnumber_is_slepper_arr[20]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[39] ?></label>
                           <?  } } ?>
            </td>

                      <td <?php if($seatnumber_is_slepper_arr[40]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                                   <?php 
                         if(in_array(40,$lower_deck_location_id)) 
                               {  
							   if(in_array($seatnumber_lower_arr[40],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input40" disabled />
                               <label for="input40" <?php if($seatnumber_is_slepper_arr[40]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[40] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input40" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[40] ?>"  >
                                    <label for="input40" <?php if($seatnumber_is_slepper_arr[40]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[40] ?></label>
                           <?  } } ?>
            </td>

                    <td <?php if($seatnumber_is_slepper_arr[41]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                        <?php 
                         if(in_array(41,$lower_deck_location_id)) 
                               { 	   if(in_array($seatnumber_lower_arr[41],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input41" disabled />
                               <label for="input41" <?php if($seatnumber_is_slepper_arr[41]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[41] ?></label>
				       <?php } else { ?>
                           <input   type="checkbox" id="input41" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[41] ?>" >
                            <label for="input41" <?php if($seatnumber_is_slepper_arr[41]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[41] ?></label>
                           <?  } } ?>
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[42]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                    <?php 
                              if(in_array(42,$lower_deck_location_id)) 
                               { 	
							      if(in_array($seatnumber_lower_arr[42],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input42" disabled />
                               <label for="input42" <?php if($seatnumber_is_slepper_arr[42]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[42] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input42" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[42] ?>" >
                                    <label for="input42" <?php if($seatnumber_is_slepper_arr[42]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[42] ?></label>
                           <?  } } ?>
            </td>


    </tr>


       <!-- Second Row -->


<!-- Three #end ################################# -->
    
<!-- Four #################################################### -->

      <tr>
      <td <?php if($seatnumber_is_slepper_arr[43]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>

                      <?php 
                         if(in_array(43,$lower_deck_location_id)) 
                            { 
							     if(in_array($seatnumber_lower_arr[43],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input43" disabled />
                               <label for="input43" <?php if($seatnumber_is_slepper_arr[43]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[43] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input43" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[43] ?>">
                                    <label for="input43" <?php if($seatnumber_is_slepper_arr[43]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[43] ?></label>
                           <?  } }?>
            </td>

            <td <?php if($seatnumber_is_slepper_arr[43]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                   <?php if(in_array(44,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[44],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input44" disabled />
                               <label for="input44" <?php if($seatnumber_is_slepper_arr[44]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[44] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input44" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[44] ?>">
                                    <label for="input44" <?php if($seatnumber_is_slepper_arr[44]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[44] ?></label>
                           <?  } } ?>
            </td>

            <td <?php if($seatnumber_is_slepper_arr[45]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                     <?php if(in_array(45,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[45],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input45" disabled />
                               <label for="input45" <?php if($seatnumber_is_slepper_arr[45]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[45] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input45" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[45] ?>">
                                    <label for="input45" <?php if($seatnumber_is_slepper_arr[45]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[45] ?></label>
                           <?  } } ?>
            </td>

            <td <?php if($seatnumber_is_slepper_arr[46]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                        <?php if(in_array(46,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[46],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input46" disabled />
                               <label for="input46" <?php if($seatnumber_is_slepper_arr[46]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[46] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input46" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[46] ?>">
                                    <label for="input46" <?php if($seatnumber_is_slepper_arr[46]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[46] ?></label>
                           <?  } } ?>
            </td>

              <td <?php if($seatnumber_is_slepper_arr[47]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                      <?php if(in_array(47,$lower_deck_location_id)) 
                               {
							   	   if(in_array($seatnumber_lower_arr[47],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input47" disabled />
                               <label for="input47" <?php if($seatnumber_is_slepper_arr[47]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[47] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input47" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[47] ?>">
                                    <label for="input47" <?php if($seatnumber_is_slepper_arr[47]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[47] ?></label>
                           <?  } } ?>
            </td>


          <td <?php if($seatnumber_is_slepper_arr[48]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                         <?php if(in_array(48,$lower_deck_location_id)) 
                               { 	
							    if(in_array($seatnumber_lower_arr[48],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input48" disabled />
                               <label for="input48" <?php if($seatnumber_is_slepper_arr[48]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[48] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input48" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[48] ?>">
                                    <label for="input48" <?php if($seatnumber_is_slepper_arr[48]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[48] ?></label>
                           <?  } } ?>
            </td>

            <td <?php if($seatnumber_is_slepper_arr[49]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                          <?php if(in_array(49,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[49],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input49" disabled />
                               <label for="input49" <?php if($seatnumber_is_slepper_arr[49]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[49] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input49" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[49] ?>">
                                    <label for="input49" <?php if($seatnumber_is_slepper_arr[49]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[49] ?></label>
                           <?  } } ?>
            </td>

                      <td <?php if($seatnumber_is_slepper_arr[50]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                              <?php if(in_array(50,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[50],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input50" disabled />
                               <label for="input50" <?php if($seatnumber_is_slepper_arr[50]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[50] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input50" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[50] ?>">
                                    <label for="input50" <?php if($seatnumber_is_slepper_arr[50]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[50] ?></label>
                           <?  } } ?>
            </td>

                    <td <?php if($seatnumber_is_slepper_arr[51]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                    <?php if(in_array(51,$lower_deck_location_id)) 
                             { 
							    if(in_array($seatnumber_lower_arr[51],$SeatArr))
						              {
					       ?>
                               <input type="checkbox" id="input51" disabled />
                               <label for="input51" <?php if($seatnumber_is_slepper_arr[51]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[51] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input51" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[51] ?>">
                                    <label for="input51" <?php if($seatnumber_is_slepper_arr[51]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[51] ?></label>
                           <?  } } ?>
            </td>

                     <td <?php if($seatnumber_is_slepper_arr[52]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                            <?php if(in_array(52,$lower_deck_location_id)) 
                               { 	  
							    if(in_array($seatnumber_lower_arr[52],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input52" disabled />
                               <label for="input52" <?php if($seatnumber_is_slepper_arr[52]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[52] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input52" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[52] ?>">
                                    <label for="input52" <?php if($seatnumber_is_slepper_arr[52]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[52] ?></label>
                           <?  } } ?>
            </td>

                        <td <?php if($seatnumber_is_slepper_arr[53]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                           <?php
						    if(in_array(53,$lower_deck_location_id)) 
                               { 	
							      if(in_array($seatnumber_lower_arr[53],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input53" disabled />
                               <label for="input53" <?php if($seatnumber_is_slepper_arr[53]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[53] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input53" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[53] ?>">
                                    <label for="input53" <?php if($seatnumber_is_slepper_arr[53]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[53] ?></label>
                           <?  } } ?>
            </td>

                      <td <?php if($seatnumber_is_slepper_arr[54]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                        <?php if(in_array(54,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[54],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input54" disabled />
                               <label for="input54" <?php if($seatnumber_is_slepper_arr[54]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[54] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input54" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[54] ?>">
                                    <label for="input54" <?php if($seatnumber_is_slepper_arr[54]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[54] ?></label>
                           <?  } } ?>
            </td>

                    <td <?php if($seatnumber_is_slepper_arr[55]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                           <?php if(in_array(55,$lower_deck_location_id)) 
                               { 
							   	   if(in_array($seatnumber_lower_arr[55],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input55" disabled />
                               <label for="input55" <?php if($seatnumber_is_slepper_arr[55]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[55] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input55" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[55] ?>">
                                    <label for="input55" <?php if($seatnumber_is_slepper_arr[55]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[55] ?></label>
                           <?  } } ?>
            </td>

             <td <?php if($seatnumber_is_slepper_arr[56]=='Y') { ?> id="sleepernine" class="checkmok" <?php } ?>>
                       <?php 
                         if(in_array(56,$lower_deck_location_id)) 
                               { 
							    if(in_array($seatnumber_lower_arr[56],$SeatArr))
						              {
					     ?>
                               <input type="checkbox" id="input56" disabled />
                               <label for="input56" <?php if($seatnumber_is_slepper_arr[56]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[56] ?></label>
				       <?php } else { ?>
                                   <input   type="checkbox" id="input56" name="SeatNoSelect[]"  value="<?php echo $seatnumber_lower_arr[56] ?>">
                                    <label for="input56" <?php if($seatnumber_is_slepper_arr[56]=='Y') { ?> id="sleepernine" <?php } ?>> &nbsp; <?php echo $seatnumber_lower_arr[56] ?></label>
                           <?  } } ?>
            </td>


    </tr>


       <!-- Second Row -->



<!-- Four End ################################################## -->

  </tbody>

</table>




</div>



</div>
</div>
</div>


<!--Sleeper -->
<?php
   
   
       // echo"<pre>";
		 //  print_r($tour_seatmap_seatno_upper);
		// echo"</pre>";
		$upperdeck_seatno_arr=$tour_seatmap_seatno_upper[0];	
		$upper_deck_location_id=$tour_seatmap_seatno_upper[2];
	
	// echo"<pre>";
	  //print_r($upper_deck_location_id);
	//echo"</pre>";	

 if($map_details[0]['SeatTypeId']!=1) { ?>
<div class="col-md-12 col-xs-12" style="padding:0px;">



 <div class="col-md-1 col-xs-12" ><!-- style="padding: 0px; border: 1px solid #e1dddd;margin-right: -18px;" -->
            <?php /*?> <p style="padding: 8px;"> <img src="<?php echo base_url(); ?>assets/img/seat-d.png"> </p>
              <p style="margin: 80px 0px 0px 10px;  padding: 10px;">  <img src="<?php echo base_url(); ?>assets/img/seat-c.png"> </p><?php */?>
        </div>
<div class="col-md-12 col-xs-12 padding_0_mob_px ">

          <div class="panel panel-default col-xs-12 padding_0_mob_px">

                 <div class="panel-heading" style="background-color: #ffffff; border-bottom: 2px solid #ed8323;">
                      <h4 style="font-weight: 500;margin: 0px;"> <i class="fa fa-bed"></i> Upper Deck </h4>
                 </div>

             <div class="panel-body seat_rotate col-xs-12"> 

<table id="table_mix">
	
	<tbody>

		<tr>
        
         <td id="sleepernine" class="checkmok" >
          <?php 
              if(in_array(66, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[66],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper66" disabled />
                           <label for="sleeper66"> &nbsp; <?php echo $upperdeck_seatno_arr[66] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper66" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[66] ?>" />
                  <label  for="sleeper66" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[66] ?></label>
               <?php
                } 
             }	
            ?>   
         </td>

         <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(67, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[67],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper67" disabled />
                           <label for="sleeper67"> &nbsp; <?php echo $upperdeck_seatno_arr[67] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper67" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[67] ?>" />
                  <label  for="sleeper67" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[67] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

           <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(68, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[68],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper68" disabled />
                           <label for="sleeper68"> &nbsp; <?php echo $upperdeck_seatno_arr[68] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper68" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[68] ?>" />
                  <label  for="sleeper68" id="sleepernine"> &nbsp;  <?php echo $upperdeck_seatno_arr[68] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

         <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(69, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[69],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper69" disabled />
                           <label for="sleeper69"> &nbsp; <?php echo $upperdeck_seatno_arr[69] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper69" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[69] ?>" />
                  <label  for="sleeper69" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[69] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(70, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[70],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper70" disabled />
                           <label for="sleeper70"> &nbsp; <?php echo $upperdeck_seatno_arr[70] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper70" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[70] ?>" />
                  <label  for="sleeper70" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[70] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" >
			 <?php 
              if(in_array(71, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[71],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper71" disabled />
                           <label for="sleeper71"> &nbsp; <?php echo $upperdeck_seatno_arr[71] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper71" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[71] ?>" />
                  <label  for="sleeper71" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[71] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

          <td id="sleepernine" >
			 <?php 
              if(in_array(72, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[72],$SeatArr))
						{
						   //$DiscountedSeatArr $TotalSleeperDiscountFare
                       ?>
                           <input type="checkbox" id="sleeper72" disabled />
                           <label for="sleeper72"> &nbsp; <?php echo $upperdeck_seatno_arr[72] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper72" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[72] ?>" />
                  <label  for="sleeper72" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[72] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

              <td id="sleepernine" >
			 <?php 
              if(in_array(73, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[1],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper73" disabled />
                           <label for="sleeper73"> &nbsp; <?php echo $upperdeck_seatno_arr[73] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper73" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[73] ?>" />
                  <label  for="sleeper73" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[73] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

            <td id="sleepernine" >
			 <?php 
              if(in_array(74, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[74],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper74" disabled />
                           <label for="sleeper74"> &nbsp; <?php echo $upperdeck_seatno_arr[74] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper74" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[74] ?>" />
                  <label  for="sleeper74" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[74] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

               <td id="sleepernine" >
			 <?php 
              if(in_array(75, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[75],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper75" disabled />
                           <label for="sleeper75"> &nbsp; <?php echo $upperdeck_seatno_arr[75] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper75" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[75] ?>" />
                  <label  for="sleeper75" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[75] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>
		</tr>
       
<!-- Second Row ########################################### -->

		<tr>
		 <td id="sleepernine" class="checkmok">
				  <?php 
              if(in_array(76, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[76],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper76" disabled />
                           <label for="sleeper76"> &nbsp; <?php echo $upperdeck_seatno_arr[76] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper76" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[76] ?>" />
                  <label  for="sleeper76" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[76] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				  <?php 
              if(in_array(77, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[77],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper77" disabled />
                           <label for="sleeper77"> &nbsp; <?php echo $upperdeck_seatno_arr[77] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper77" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[77] ?>" />
                  <label  for="sleeper77" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[77] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

 <td id="sleepernine" class="checkmok">
				  <?php 
              if(in_array(78, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[78],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper78" disabled />
                           <label for="sleeper78"> &nbsp; <?php echo $upperdeck_seatno_arr[78] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper78" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[78] ?>" />
                  <label  for="sleeper78" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[78] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

         <td id="sleepernine" class="checkmok">
				  <?php 
              if(in_array(79, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[79],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper79" disabled />
                           <label for="sleeper79"> &nbsp; <?php echo $upperdeck_seatno_arr[79] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper79" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[79] ?>" />
                  <label  for="sleeper79" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[79] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				  <?php 
              if(in_array(80, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[80],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper80" disabled />
                           <label for="sleeper80"> &nbsp; <?php echo $upperdeck_seatno_arr[80] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper80" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[80] ?>" />
                  <label  for="sleeper80" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[80] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" >
			  <?php 
              if(in_array(81, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[81],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper81" disabled />
                           <label for="sleeper81"> &nbsp; <?php echo $upperdeck_seatno_arr[81] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper81" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[81] ?>" />
                  <label  for="sleeper81" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[81] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

          <td id="sleepernine" >
			  <?php 
              if(in_array(82, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[82],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper82" disabled />
                           <label for="sleeper82"> &nbsp; <?php echo $upperdeck_seatno_arr[82] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper82" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[82] ?>" />
                  <label  for="sleeper82" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[82] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

              <td id="sleepernine" >
			  <?php 
              if(in_array(83, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[83],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper83" disabled />
                           <label for="sleeper83"> &nbsp; <?php echo $upperdeck_seatno_arr[83] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper83" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[83] ?>" />
                  <label  for="sleeper83" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[83] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

            <td id="sleepernine" >
			  <?php 
              if(in_array(84, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[84],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper84" disabled />
                           <label for="sleeper84"> &nbsp; <?php echo $upperdeck_seatno_arr[84] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper84" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[84] ?>" />
                  <label  for="sleeper84" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[84] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

               <td id="sleepernine" >
			  <?php 
              if(in_array(85, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[85],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper85" disabled />
                           <label for="sleeper85"> &nbsp; <?php echo $upperdeck_seatno_arr[85] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper85" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[85] ?>" />
                  <label  for="sleeper85" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[85] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>
		</tr>


       <!-- Second Row -->
       

     		<tr>

			<td>&nbsp;

           

            </td>

            <td>&nbsp;
            	 

            </td>

            <td>&nbsp;

            

            </td>

            <td>&nbsp;


              

            </td>

            <td>&nbsp;
		
                
            </td>

            <td>&nbsp;
			  
            </td>

            <td>&nbsp;
			  
            </td>

            <td>&nbsp;
			  
            </td>

            <td>&nbsp;
				  
            </td>

            
		</tr>  

<!-- Three ###############  -->
		<tr>
		      <td id="sleepernine" class="checkmok">
			 <?php 
              if(in_array(86, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[86],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper86" disabled />
                           <label for="sleeper86"> &nbsp; <?php echo $upperdeck_seatno_arr[86] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper86" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[86] ?>" />
                  <label  for="sleeper86" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[86] ?></label>
               <?php
                } 
             }	
            ?>   
              </td>

            <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(87, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[87],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper87" disabled />
                           <label for="sleeper87"> &nbsp; <?php echo $upperdeck_seatno_arr[87] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper87" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[87] ?>" />
                  <label  for="sleeper87" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[87] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(88, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[88],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper88" disabled />
                           <label for="sleeper88"> &nbsp; <?php echo $upperdeck_seatno_arr[88] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper88" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[88] ?>" />
                  <label  for="sleeper88" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[88] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

             <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(89, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[89],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper89" disabled />
                           <label for="sleeper89"> &nbsp; <?php echo $upperdeck_seatno_arr[89] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper89" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[89] ?>" />
                  <label  for="sleeper89" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[89] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				 <?php 
              if(in_array(90, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[90],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper90" disabled />
                           <label for="sleeper90"> &nbsp; <?php echo $upperdeck_seatno_arr[90] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper90" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[90] ?>" />
                  <label  for="sleeper90" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[90] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" >
			 <?php 
              if(in_array(91, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[91],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper91" disabled />
                           <label for="sleeper91"> &nbsp; <?php echo $upperdeck_seatno_arr[91] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper91" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[91] ?>" />
                  <label  for="sleeper91" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[91] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

          <td id="sleepernine" >
			 <?php 
              if(in_array(92, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[92],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper92" disabled />
                           <label for="sleeper92"> &nbsp; <?php echo $upperdeck_seatno_arr[92] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper92" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[92] ?>" />
                  <label  for="sleeper92" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[92] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

              <td id="sleepernine" >
			 <?php 
              if(in_array(93, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[93],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper93" disabled />
                           <label for="sleeper93"> &nbsp; <?php echo $upperdeck_seatno_arr[93] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper93" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[93] ?>" />
                  <label  for="sleeper93" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[93] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

            <td id="sleepernine" >
			 <?php 
              if(in_array(94, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[94],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper94" disabled />
                           <label for="sleeper94"> &nbsp; <?php echo $upperdeck_seatno_arr[94] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper94" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[94] ?>" />
                  <label  for="sleeper94" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[94] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

          <td id="sleepernine" >
			 <?php 
              if(in_array(95, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[95],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper95" disabled />
                           <label for="sleeper95"> &nbsp; <?php echo $upperdeck_seatno_arr[95] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper95" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[95] ?>" />
                  <label  for="sleeper95" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[95] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>
		</tr>


       <!-- Second Row -->


<!-- Three #end ################################# -->
    
<!-- Four #################################################### -->

		<tr>
            <td id="sleepernine" class="checkmok">
			<?php 
              if(in_array(96, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[96],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper96" disabled />
                           <label for="sleeper96"> &nbsp; <?php echo $upperdeck_seatno_arr[96] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper96" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[96] ?>" />
                  <label  for="sleeper96" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[96] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				<?php 
              if(in_array(97, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[97],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper97" disabled />
                           <label for="sleeper97"> &nbsp; <?php echo $upperdeck_seatno_arr[97] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper97" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[97] ?>" />
                  <label  for="sleeper97" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[97] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
			<?php 
              if(in_array(98, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[98],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper98" disabled />
                           <label for="sleeper98"> &nbsp; <?php echo $upperdeck_seatno_arr[98] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper98" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[98] ?>" />
                  <label  for="sleeper98" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[98] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				<?php 
              if(in_array(99, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[99],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper99" disabled />
                           <label for="sleeper99"> &nbsp; <?php echo $upperdeck_seatno_arr[99] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper99" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[99] ?>" />
                  <label  for="sleeper99" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[99] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" class="checkmok">
				<?php 
              if(in_array(100, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[100],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper100" disabled />
                           <label for="sleeper100"> &nbsp; <?php echo $upperdeck_seatno_arr[100] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper100" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[100] ?>" />
                  <label  for="sleeper100" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[100] ?></label>
               <?php
                } 
             }	
            ?>   
             </td>

            <td id="sleepernine" >
			<?php 
              if(in_array(101, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[101],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper101" disabled />
                           <label for="sleeper101"> &nbsp; <?php echo $upperdeck_seatno_arr[101] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper101" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[101] ?>" />
                  <label  for="sleeper101" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[101] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

          <td id="sleepernine" >
			<?php 
              if(in_array(102, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[102],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper102" disabled />
                           <label for="sleeper102"> &nbsp; <?php echo $upperdeck_seatno_arr[102] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper102" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[102] ?>" />
                  <label  for="sleeper102" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[102] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

              <td id="sleepernine" >
			<?php 
              if(in_array(103, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[103],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper103" disabled />
                           <label for="sleeper103"> &nbsp; <?php echo $upperdeck_seatno_arr[103] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper103" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[103] ?>" />
                  <label  for="sleeper103" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[103] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

            <td id="sleepernine" >
			<?php 
              if(in_array(104, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[104],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper104" disabled />
                           <label for="sleeper104"> &nbsp; <?php echo $upperdeck_seatno_arr[104] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper104" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[104] ?>" />
                  <label  for="sleeper104" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[104] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>

           <td id="sleepernine" >
			<?php 
              if(in_array(105, $upper_deck_location_id)) 
               { 
			       if(in_array($upperdeck_seatno_arr[105],$SeatArr))
						{
                ?>
                           <input type="checkbox" id="sleeper105" disabled />
                           <label for="sleeper105"> &nbsp; <?php echo $upperdeck_seatno_arr[105] ?></label>
                   <?php } else { ?>
              <input  type="checkbox" id="sleeper105" name="SeatNoSelect[]"   value="<?php echo $upperdeck_seatno_arr[105] ?>" />
                  <label  for="sleeper105" id="sleepernine"> &nbsp; <?php echo $upperdeck_seatno_arr[105] ?></label>
               <?php
                } 
             }	
            ?>   
            </td>
		</tr>


       <!-- Second Row -->



<!-- Four End ################################################## -->

	</tbody>

</table>


  

</div>

  
</div>

</div>
  

  
  </div>
  <?php } ?>
  
		                			
</div>
                           
      		
                                
                           <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Block Date </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                            <input readonly type="text" name="BlockDate[]"   value="<?php echo $block_seats[0]['BlockDate']; ?>">
                                      </div>
                                      
                                       <div class="col-md-1 ">  &nbsp;
                                   <!--  <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>-->
                                       </div>
		                		</div>
                                
                           <!-- ***************************** appending fields ************************************** -->              
                       
                           <div class="row">
                                 <div class="col-lg-12  fieldGroup">
                                  
                                  </div>
                            </div>
                              
                       <!-- ***************************** appending fields ************************************** -->  
             
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
							
											$data = array('flag'  => 'yes');
											echo form_hidden($data);
											$data = array('BusesRoutsId'  => $BusesRoutsId);
											echo form_hidden($data);
											$data = array('RoutsId'  => $RoutsId);
											echo form_hidden($data);
										    $data = array('BlockId'  => $block_seats[0]['BlockId']);
											echo form_hidden($data);
											
											    $data = array('BookedSeatStr'  => $BookedSeatStr);
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
                        
                        
                        <div class="col-md-12 fieldGroupCopy margin_top" style="display: none;">
                                
		                			<div style=" margin-top:5px;" class="col-md-2 text-left padding_opx">
		                				<span> Block Date  </span></div>
		                			   <div style=" margin-top:5px;" class="col-md-5 form-group padding_opx">
                                           <input type="date" name="BlockDate[]" value="<?php echo set_value('BlockDate') ?>">
                                        </div>
                                       <div style=" margin-top:5px;" class="col-md-1 "> 
                          <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
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