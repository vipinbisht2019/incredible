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
										//echo"<pre>";
										
										$data = array('DeckType1'  => 'L');
										echo form_hidden($data);
										$data = array('NumberOfSeats'  => $SeatTypeId_data[0]['TotalSeats']);
										echo form_hidden($data);
										$SeatSleeper = $SeatTypeId_data[0]['SeatSleeper'];
									// echo"------------".$SeatTypeId_data[0]['TotalSeats'];
                                   ?>
                        <table>
                            <tbody>
                             <tr>
                                <td><?php
								
								         if(in_array(1,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="1">
											  <?php 
                                              if($SeatSleeper=='Y')
                                               {
                                                  ?><input type="checkbox" name="IsLowerSleeper[1]"   value="Y"><?php
                                               }
										  } else { echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(2,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="2">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[2]"   value="Y"><?php
											   }
										  } else {echo"&nbsp;"; }   
								     ?>
								 </td>
                                <td><?php if(in_array(3,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="3">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[3]"   value="Y"><?php
											   }
										   } else {echo"&nbsp;"; }  
								     ?>
								
								</td>
                                <td><?php if(in_array(4,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="4">
								          <?php   
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[4]"   value="Y"><?php
											   }
										   } else {echo"&nbsp;"; }  
										   
								     ?>
								</td>
                                <td><?php if(in_array(5,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="5">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[5]"   value="Y"><?php
											   }
										   } else {echo"&nbsp;"; }  
								     ?>
								 
								</td>
                                <td><?php if(in_array(6,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="6">
								          <?php  
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[6]"   value="Y"><?php
											   }
										  } else {echo"&nbsp;"; }   
								     ?>
								
								</td>
                                <td><?php if(in_array(7,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="7">
								          <?php 
											  if($SeatSleeper=='Y')
											   {
												  ?><input type="checkbox" name="IsLowerSleeper[7]"   value="Y"><?php
											   }
										   } else { echo"&nbsp;"; }  
								     ?>
								 </td>
                                <td><?php if(in_array(8,$lower_deck_location_id)) { ?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="8">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[8]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
								     
								</td>
                                <td><?php if(in_array(9,$lower_deck_location_id)) {?>
                                          <input type="text" size="1" name="SeatNumber[]"  value="">
                                          <input type="hidden"  name="SeatLocationID[]"  value="9">
								          <?php
										  if($SeatSleeper=='Y')
										   {
											  ?> <input type="checkbox" name="IsLowerSleeper[9]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
										   
								     ?>
								  </td>
                                <td><?php if(in_array(10,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value=""> 
								 <input type="hidden"  name="SeatLocationID[]"  value="10">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[10]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(11,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value=""> 
								     <input type="hidden"  name="SeatLocationID[]"  value="11">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[11]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(12,$lower_deck_location_id)) {?>
                                 <input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="12">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[12]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(13,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								       <input type="hidden"  name="SeatLocationID[]"  value="13">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[13]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(14,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								   
                                    <input type="hidden"  name="SeatLocationID[]"  value="14">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[14]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                             </tr>

                             <tr>
                                <td><?php if(in_array(15,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								        
                                         <input type="hidden"  name="SeatLocationID[]"  value="15">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[15]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(16,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								           
                                            <input type="hidden"  name="SeatLocationID[]"  value="16">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[16]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(17,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                         <input type="hidden"  name="SeatLocationID[]"  value="17">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[17]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(18,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								        <input type="hidden"  name="SeatLocationID[]"  value="18">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[18]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                   
                                 </td>
                                <td><?php if(in_array(19,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								            <input type="hidden"  name="SeatLocationID[]"  value="19">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[19]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                                <td><?php if(in_array(20,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								         <input type="hidden"  name="SeatLocationID[]"  value="20">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[20]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(21,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								     <input type="hidden"  name="SeatLocationID[]"  value="21">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[21]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(22,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                      <input type="hidden"  name="SeatLocationID[]"  value="22">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[22]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(23,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								        <input type="hidden"  name="SeatLocationID[]"  value="23">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[23]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(24,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="24">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[24]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>                               
                                </td>
                                <td><?php if(in_array(25,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                   <input type="hidden"  name="SeatLocationID[]"  value="25">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[25]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(26,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                   <input type="hidden"  name="SeatLocationID[]"  value="26">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[26]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(27,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                
                                   <input type="hidden"  name="SeatLocationID[]"  value="27">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[27]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(28,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								       <input type="hidden"  name="SeatLocationID[]"  value="28">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[28]"   value="Y"><?php
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
                                <td><?php if(in_array(65,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								    <input type="hidden"  name="SeatLocationID[]"  value="65">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[65]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                                <td><?php if(in_array(64,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                
                                   <input type="hidden"  name="SeatLocationID[]"  value="64">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[64]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(63,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								      <input type="hidden"  name="SeatLocationID[]"  value="63">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[63]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(62,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                       <input type="hidden"  name="SeatLocationID[]"  value="62">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[62]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                                <td><?php if(in_array(61,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                        <input type="hidden"  name="SeatLocationID[]"  value="61">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[61]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(60,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                        <input type="hidden"  name="SeatLocationID[]"  value="60">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[60]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(59,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="59">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[59]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(58,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="58">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[58]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(57,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								      <input type="hidden"  name="SeatLocationID[]"  value="57">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[57]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                             </tr>


                            <tr>
                                <td><?php if(in_array(29,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                            <input type="hidden"  name="SeatLocationID[]"  value="29">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[29]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(30,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                        <input type="hidden"  name="SeatLocationID[]"  value="30">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[30]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                  
                                </td>
                                <td><?php if(in_array(31,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                      <input type="hidden"  name="SeatLocationID[]"  value="31">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[31]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(32,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="32">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[32]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(33,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="33">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[33]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(34,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="34">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[34]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td> 
                                <td><?php if(in_array(35,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								     <input type="hidden"  name="SeatLocationID[]"  value="35">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[35]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                 </td>
                                <td><?php if(in_array(36,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="36">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[36]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                                <td><?php if(in_array(37,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="37">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[37]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(38,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="38">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[38]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(39,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								           <input type="hidden"  name="SeatLocationID[]"  value="39">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[39]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(40,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                    <input type="hidden"  name="SeatLocationID[]"  value="40">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[40]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(41,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                    <input type="hidden"  name="SeatLocationID[]"  value="41">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[41]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                
                                </td>
                                <td><?php if(in_array(42,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								        <input type="hidden"  name="SeatLocationID[]"  value="42">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[42]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                             </tr>

                            <tr>
                                <td><?php if(in_array(43,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="43">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[43]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(44,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="44">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[44]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(45,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="45">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[45]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(46,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="46">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[46]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(47,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="47">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[47]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(48,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="48">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[48]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(49,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="49">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[49]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td> 
                                <td><?php if(in_array(50,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="50">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[50]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(51,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								 <input type="hidden"  name="SeatLocationID[]"  value="51">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[51]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(52,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                 <input type="hidden"  name="SeatLocationID[]"  value="52">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[52]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(53,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                        <input type="hidden"  name="SeatLocationID[]"  value="53">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[53]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(54,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								      <input type="hidden"  name="SeatLocationID[]"  value="54">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[54]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                 </td>
                                <td><?php if(in_array(55,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
								     <input type="hidden"  name="SeatLocationID[]"  value="55">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[55]"   value="Y"><?php
										   }
										  } else {echo"&nbsp;"; }   
								     ?>
                                </td>
                                <td><?php if(in_array(56,$lower_deck_location_id)) {?><input type="text" size="1" name="SeatNumber[]" value="">
                                
                                 <input type="hidden"  name="SeatLocationID[]"  value="56">
								          <?php 
										  if($SeatSleeper=='Y')
										   {
											  ?><input type="checkbox" name="IsLowerSleeper[56]"   value="Y"><?php
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

 <?php /*?> <p> <img src="<?php echo base_url('assets/img/seat-d.png'); ?>">  </p>

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
                                   ?>


                          <table>
                            <tbody>
                             <tr>
                                <td><?php if(in_array(66,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]"  value=""><input type="hidden"  name="SeatLocationSLID[]"  value="66"> <?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(67,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="67"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(68,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="68"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(69,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="69"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(70,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="70"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(71,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="71"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(72,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="72"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(73,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="73"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(74,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="74"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(75,$upper_deck_location_id)) {?><<input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="75"> <?php } else {echo"&nbsp;"; } ?></td>
                            
                             </tr>
    
                             <tr>
                                <td><?php if(in_array(76,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="76"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(77,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="77"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(78,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="78"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(79,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="79"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(80,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="80"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(81,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="81"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(82,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="82"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(83,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="83"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(84,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="84"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(85,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="85"><?php } else {echo"&nbsp;"; } ?></td>
                      
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
                                <td><?php if(in_array(86,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="86"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(87,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="87"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(88,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="88"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(89,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="89"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(90,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="90"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(91,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="91"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(92,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="92"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(93,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="93"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(94,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="94"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(95,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="95"><?php } else {echo"&nbsp;"; } ?></td>
                            
                             </tr>
    
                            <tr>
                                <td><?php if(in_array(96,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="96"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(97,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="97"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(98,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="98"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(99,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="99"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(100,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="100"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(101,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="101"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(102,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="102"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(103,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="103"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(104,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="104"><?php } else {echo"&nbsp;"; } ?></td>
                                <td><?php if(in_array(105,$upper_deck_location_id)) {?><input type="text" size="1" name="SeatNumberSL[]" value=""><input type="hidden"  name="SeatLocationSLID[]"  value="105"><?php } else {echo"&nbsp;"; } ?></td>
                    
                             </tr>
    
                             </tbody>
                          </table>

                                           <p>Please enter seat numbers for upper deck</p>
                                      
                                      </div>
		                		  </div>        
                      <?php } ?>            
                                  
                                  
                                  
                                  
                                  