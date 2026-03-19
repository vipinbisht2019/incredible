<div class="col-md-12 padding_opx">
<label class="col-md-1 text-left padding_opx"></label>
<label class="col-md-2 text-left padding_opx">
    <span>Lower Deck </span></label>
  <hr> 
</div>  


<div class="col-md-12 padding_opx">
<label class="col-md-2 text-left padding_opx">
    <span>Lower Seat Map *</span></label>

<div class="col-md-1 form-group padding_opx">

<p> <img src="<?php echo base_url('assets/img/seat-d.png'); ?>">  </p>

<p style="margin: 76px 0px 0px 0px;  padding: 10px;"> <img src="<?php echo base_url('assets/img/seat-c.png'); ?>"> </p>

</div>	
<div class="col-md-9 form-group padding_opx">

	<style type="text/css">
        
        tr td  {
           padding: 0px 15px 25px 0px;
        }
        
    </style>

                                  <?php
								     //echo"<pre>";
									   //print_r($SeatTypeId_data);
									// echo"<pre>";
								  
                                         $data = array('DeckType1'  => 'L');
                                         echo form_hidden($data);
										 $SeatSleeper = $SeatTypeId_data[0]['SeatSleeper'];
										 
										 $data = array('NumberOfSeats'  => $SeatTypeId_data[0]['TotalSeats']);
										echo form_hidden($data);
										 
										$seatnumber_lower_arr=$lower_deck_seatno[0];
										$is_sleeper_arr=$lower_deck_seatno[1];
                                   ?>


                          <table>
                            <tbody>
                             <tr>
                                <td><?php
								
								         if(in_array(1,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[1] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="1">
											  <?php 
                                              if($SeatSleeper=='Y')
                                               {
                                                  ?><input type="checkbox" name="IsLowerSleeper[1]"  value="Y" <?php if($is_sleeper_arr[1]=='Y') { echo"checked"; } ?>><?php
                                               }
										  } else { echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(2,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[2] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="2">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[2]"   value="Y" <?php if($is_sleeper_arr[2]=='Y') { echo"checked"; } ?>><?php
											   }
										  } else {echo"&nbsp;"; }   
								     ?>
								 </td>
                                <td><?php if(in_array(3,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[3] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="3">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[3]"   value="Y" <?php if($is_sleeper_arr[1]=='Y') { echo"checked"; } ?>><?php
											   }
										   } else {echo"&nbsp;"; }  
								     ?>
								
								</td>
                                <td><?php if(in_array(4,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[4] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="4">
								          <?php   
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[4]"   value="Y" <?php if($is_sleeper_arr[4]=='Y') { echo"checked"; } ?>><?php
											   }
										   } else {echo"&nbsp;"; }  
										   
								     ?>
								</td>
                                <td><?php if(in_array(5,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[5] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="5">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[5]"   value="Y" <?php if($is_sleeper_arr[5]=='Y') { echo"checked"; } ?>><?php
											   }
										   } else {echo"&nbsp;"; }  
								     ?>
								 
								</td>
                                <td><?php if(in_array(6,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[6] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="6">
								          <?php  
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[6]"   value="Y" <?php if($is_sleeper_arr[6]=='Y') { echo"checked"; } ?>><?php
											   }
										  } else {echo"&nbsp;"; }   
								     ?>
								
								</td>
                                <td><?php if(in_array(7,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[7] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="7">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[7]"   value="Y" <?php if($is_sleeper_arr[7]=='Y') { echo"checked"; } ?>><?php
											   }
										   } else { echo"&nbsp;"; }  
								     ?>
								 </td>
                                <td><?php if(in_array(8,$lower_deck_location_id)) { ?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[8] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="8">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[8]"   value="Y" <?php if($is_sleeper_arr[8]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
								     
								</td>
                                <td><?php if(in_array(9,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="<?php echo $seatnumber_lower_arr[9] ?>">
                                          <input type="hidden"  name="SeatLocationID[]"  value="9">
								          <?php
										  if($SeatSleeper=='Y')
										   {
											  ?> <input type="checkbox" name="IsLowerSleeper[9]"   value="Y" <?php if($is_sleeper_arr[9]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
										   
								     ?>
								  </td>
                                <td><?php if(in_array(10,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[10] ?>"> 
								 <input type="hidden"  name="SeatLocationID[]"  value="10">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[10]"   value="Y" <?php if($is_sleeper_arr[10]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(11,$lower_deck_location_id)) {?>
                                      <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[11] ?>"> 
								     <input type="hidden"  name="SeatLocationID[]"  value="11">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[11]"   value="Y" <?php if($is_sleeper_arr[11]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(12,$lower_deck_location_id)) {?>
                                 <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[12] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="12">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[12]"   value="Y" <?php if($is_sleeper_arr[12]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(13,$lower_deck_location_id)) {?>
                                     <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[13] ?>">
								       <input type="hidden"  name="SeatLocationID[]"  value="13">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[13]"   value="Y" <?php if($is_sleeper_arr[13]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(14,$lower_deck_location_id)) {?>
                                    <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[14] ?>">
								   
                                    <input type="hidden"  name="SeatLocationID[]"  value="14">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[14]"   value="Y" <?php if($is_sleeper_arr[14]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                             </tr>
<!-- Second Row ########################################### -->
                             <tr>
                                <td><?php if(in_array(15,$lower_deck_location_id)) {?>
                                       <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[15] ?>">
								        
                                         <input type="hidden"  name="SeatLocationID[]"  value="15">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[15]"   value="Y" <?php if($is_sleeper_arr[15]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(16,$lower_deck_location_id)) {?>
                                           <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[16] ?>">
								           
                                            <input type="hidden"  name="SeatLocationID[]"  value="16">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[16]"   value="Y" <?php if($is_sleeper_arr[16]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(17,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[17] ?>">
                                         <input type="hidden"  name="SeatLocationID[]"  value="17">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[17]"   value="Y" <?php if($is_sleeper_arr[17]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(18,$lower_deck_location_id)) {?>
                                         <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[18] ?>">
								        <input type="hidden"  name="SeatLocationID[]"  value="18">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[18]"   value="Y" <?php if($is_sleeper_arr[18]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                   
                                 </td>
                                <td><?php if(in_array(19,$lower_deck_location_id)) {?>
                                            <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[19] ?>">
								            <input type="hidden"  name="SeatLocationID[]"  value="19">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[19]"   value="Y" <?php if($is_sleeper_arr[19]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                                <td><?php if(in_array(20,$lower_deck_location_id)) {?>
                                        <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[20] ?>">
								         <input type="hidden"  name="SeatLocationID[]"  value="20">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[20]"   value="Y" <?php if($is_sleeper_arr[20]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(21,$lower_deck_location_id)) {?>
                                      <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[21] ?>">
								     <input type="hidden"  name="SeatLocationID[]"  value="21">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[21]"   value="Y" <?php if($is_sleeper_arr[21]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(22,$lower_deck_location_id)) {?>
                                      <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[22] ?>">
                                      <input type="hidden"  name="SeatLocationID[]"  value="22">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[22]"   value="Y" <?php if($is_sleeper_arr[22]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(23,$lower_deck_location_id)) {?>
                                        <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[23] ?>">
								        <input type="hidden"  name="SeatLocationID[]"  value="23">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[23]"   value="Y" <?php if($is_sleeper_arr[23]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(24,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[24] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="24">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[24]"   value="Y" <?php if($is_sleeper_arr[24]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>                               
                                </td>
                                <td><?php if(in_array(25,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[25] ?>">
                                   <input type="hidden"  name="SeatLocationID[]"  value="25">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[25]"   value="Y" <?php if($is_sleeper_arr[25]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(26,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[26] ?>">
                                   <input type="hidden"  name="SeatLocationID[]"  value="26">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[26]"   value="Y" <?php if($is_sleeper_arr[26]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(27,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[27] ?>">
                                
                                   <input type="hidden"  name="SeatLocationID[]"  value="27">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[27]"   value="Y" <?php if($is_sleeper_arr[27]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(28,$lower_deck_location_id)) {?>
                                   <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[28] ?>">
								       <input type="hidden"  name="SeatLocationID[]"  value="28">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[28]"   value="Y" <?php if($is_sleeper_arr[28]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                             </tr>


                             <tr>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td><?php if(in_array(65,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[65] ?>">
								    <input type="hidden"  name="SeatLocationID[]"  value="65">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[65]"   value="Y" <?php if($is_sleeper_arr[65]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                                <td><?php if(in_array(64,$lower_deck_location_id)) {?>
                                  <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[64] ?>">
                                
                                   <input type="hidden"  name="SeatLocationID[]"  value="64">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[64]"   value="Y" <?php if($is_sleeper_arr[64]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(63,$lower_deck_location_id)) {?>
                                   <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[63] ?>">
								      <input type="hidden"  name="SeatLocationID[]"  value="63">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[63]"   value="Y" <?php if($is_sleeper_arr[63]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(62,$lower_deck_location_id)) {?>
                                   <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[62] ?>">
                                       <input type="hidden"  name="SeatLocationID[]"  value="62">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[62]"   value="Y" <?php if($is_sleeper_arr[62]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                                <td><?php if(in_array(61,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[61] ?>">
                                        <input type="hidden"  name="SeatLocationID[]"  value="61">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[61]"   value="Y" <?php if($is_sleeper_arr[61]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(60,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[60] ?>">
                                        <input type="hidden"  name="SeatLocationID[]"  value="60">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[60]"   value="Y" <?php if($is_sleeper_arr[60]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(59,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[59] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="59">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[59]"   value="Y" <?php if($is_sleeper_arr[59]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(58,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[58] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="58">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[58]"   value="Y" <?php if($is_sleeper_arr[58]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(57,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[57] ?>">
								      <input type="hidden"  name="SeatLocationID[]"  value="57">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[57]"   value="Y" <?php if($is_sleeper_arr[57]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                             </tr>


                            <tr>
                                <td><?php if(in_array(29,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[29] ?>">
                                            <input type="hidden"  name="SeatLocationID[]"  value="29">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[29]"   value="Y" <?php if($is_sleeper_arr[29]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(30,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[30] ?>">
                                        <input type="hidden"  name="SeatLocationID[]"  value="30">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[30]"   value="Y" <?php if($is_sleeper_arr[30]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                  
                                </td>
                                <td><?php if(in_array(31,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[31] ?>">
                                      <input type="hidden"  name="SeatLocationID[]"  value="31">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[31]"   value="Y" <?php if($is_sleeper_arr[31]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(32,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[32] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="32">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[32]"   value="Y" <?php if($is_sleeper_arr[32]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(33,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[33] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="33">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[33]"   value="Y" <?php if($is_sleeper_arr[33]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(34,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[34] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="34">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[34]"   value="Y" <?php if($is_sleeper_arr[34]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                                <td><?php if(in_array(35,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[35] ?>">
								     <input type="hidden"  name="SeatLocationID[]"  value="35">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[35]"   value="Y" <?php if($is_sleeper_arr[35]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(36,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[36] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="36">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[36]"   value="Y" <?php if($is_sleeper_arr[36]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                                <td><?php if(in_array(37,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[37] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="37">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[37]"   value="Y" <?php if($is_sleeper_arr[37]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(38,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[38] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="38">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[38]"   value="Y" <?php if($is_sleeper_arr[38]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(39,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[39] ?>">
								           <input type="hidden"  name="SeatLocationID[]"  value="39">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[39]"   value="Y" <?php if($is_sleeper_arr[39]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(40,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[40] ?>">
                                    <input type="hidden"  name="SeatLocationID[]"  value="40">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[40]"   value="Y" <?php if($is_sleeper_arr[40]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(41,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[41] ?>">
                                    <input type="hidden"  name="SeatLocationID[]"  value="41">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[41]"   value="Y" <?php if($is_sleeper_arr[41]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                                <td><?php if(in_array(42,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[42] ?>">
								        <input type="hidden"  name="SeatLocationID[]"  value="42">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[42]"   value="Y" <?php if($is_sleeper_arr[42]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                             </tr>

                            <tr>
                                <td><?php if(in_array(43,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[43] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="43">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[43]"   value="Y" <?php if($is_sleeper_arr[43]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(44,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[44] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="44">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[44]"   value="Y" <?php if($is_sleeper_arr[44]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(45,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[45] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="45">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[45]"   value="Y" <?php if($is_sleeper_arr[45]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(46,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[46] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="46">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[46]"   value="Y" <?php if($is_sleeper_arr[46]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(47,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[47] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="47">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[47]"   value="Y" <?php if($is_sleeper_arr[47]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(48,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[48] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="48">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[48]"   value="Y" <?php if($is_sleeper_arr[48]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(49,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[49] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="49">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[49]"   value="Y" <?php if($is_sleeper_arr[49]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(50,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[50] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="50">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[50]"   value="Y" <?php if($is_sleeper_arr[50]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(51,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[51] ?>">
								 <input type="hidden"  name="SeatLocationID[]"  value="51">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[51]"   value="Y" <?php if($is_sleeper_arr[52]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(52,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[52] ?>">
                                 <input type="hidden"  name="SeatLocationID[]"  value="52">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[52]"   value="Y" <?php if($is_sleeper_arr[52]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(53,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[53] ?>">
                                        <input type="hidden"  name="SeatLocationID[]"  value="53">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[53]"   value="Y" <?php if($is_sleeper_arr[53]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(54,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[54] ?>">
								      <input type="hidden"  name="SeatLocationID[]"  value="54">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[54]"   value="Y" <?php if($is_sleeper_arr[54]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(55,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[55] ?>">
								     <input type="hidden"  name="SeatLocationID[]"  value="55">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[55]"   value="Y" <?php if($is_sleeper_arr[55]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(56,$lower_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumber[]" value="<?php echo $seatnumber_lower_arr[56] ?>">
                                
                                 <input type="hidden"  name="SeatLocationID[]"  value="56">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[56]"   value="Y" <?php if($is_sleeper_arr[56]=='Y') { echo"checked"; } ?>><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                             </tr>

                             </tbody>
                          </table>
                                <p>Please enter seat numbers for lower deck</p>
                                      
                                      </div>
		                		  </div>
                                  
       
       <?php 
	          //print_r($SeatTypeId_data);    
	   
	         $SeatTypeId=$SeatTypeId_data[0]['SeatTypeId'];              
            if($SeatTypeId!=1) 
			   {
			  ?>                      
                     <div class="col-md-12 padding_opx">
                                  <label class="col-md-1 text-left padding_opx"></label>
                                    <label class="col-md-2 text-left padding_opx">
		                				<span>Upper Deck (Sleeper) </span></label>
		                	          <hr> 
		                		  </div>  
                                  
                          <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Upper Seat Map </span></label>

<div class="col-md-1 form-group padding_opx">

  <?php /*?><p> <img src="<?php echo base_url('assets/img/seat-d.png'); ?>">  </p>

  <p style="margin: 76px 0px 0px 0px;  padding: 10px;"> <img src="<?php echo base_url('assets/img/seat-c.png'); ?>"> </p><?php */?>

</div>	

		              <div class="col-md-9 form-group padding_opx">
							<style type="text/css">
                            
									tr td  {
										padding: 0px 15px 25px 0px;
									}
                            
                            </style>

                                  <?php
                                        $data = array('DeckType2'  => 'U');   //upper_deck_location_id
                                        echo form_hidden($data);
										$seatnumber_lower_arr=$upper_deck_seatno[0];
										 //print_r($seatnumber_lower_arr);
										
                                   ?>


                          <table>
                            <tbody>
                             <tr>
                                <td><?php if(in_array(66,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]"  value="<?php echo $seatnumber_lower_arr[66]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="66"> <?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(67,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[67]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="67"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(68,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[68]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="68"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(69,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[69]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="69"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(70,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[70]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="70"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(71,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[71]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="71"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(72,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[72]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="72"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(73,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[73]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="73"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(74,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[74]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="74"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(75,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[75]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="75"> <?php } else {echo"&nbsp;"; } ?></td>
                            
                             </tr>
    
                             <tr>
                                <td><?php if(in_array(76,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[76]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="76"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(77,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[77]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="77"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(78,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[78]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="78"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(79,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[79]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="79"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(80,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[80]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="80"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(81,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[81]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="81"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(82,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[82]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="82"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(83,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[83]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="83"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(84,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[84]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="84"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(85,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[85]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="85"><?php } else {echo"&nbsp;"; } ?></td>
                      
                             </tr>
    
    
                             <tr>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                                <td>&nbsp;  </td>
                        
                             </tr>
    
    
                            <tr>
                                <td><?php if(in_array(86,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[86]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="86"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(87,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[87]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="87"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(88,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[88]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="88"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(89,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[89]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="89"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(90,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[90]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="90"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(91,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[91]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="91"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(92,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[92]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="92"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(93,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[93]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="93"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(94,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[94]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="94"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(95,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[95]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="95"><?php } else {echo"&nbsp;"; } ?></td>
                            
                             </tr>
    
                            <tr>
                                <td><?php if(in_array(96,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[96]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="96"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(97,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[97]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="97"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(98,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[98]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="98"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(99,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[99]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="99"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(100,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[100]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="100"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(101,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[101]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="101"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(102,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[102]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="102"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(103,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[103]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="103"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(104,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[104]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="104"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(105,$upper_deck_location_id)) {?>
                                <input type="text" size="1" name="SeatNumberSL[]" value="<?php echo $seatnumber_lower_arr[105]; ?>">
                                <input type="hidden"  name="SeatLocationSLID[]"  value="105"><?php } else {echo"&nbsp;"; } ?></td>
                    
                             </tr>
    
                             </tbody>
                          </table>

                                           <p>Please enter seat numbers for upper deck</p>
                                      
                                      </div>
		                		  </div>        
                      <?php } ?>            
                                  
                                  
                                  
                                  
                                  