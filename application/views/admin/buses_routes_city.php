<?php
   
   //echo"<pre>";
   // print_r($route_city);
  //echo"</pre>";
  
  	
$i=0; $j=0;$k=1;
$totalstap=count($route_city)-1;
foreach($route_city as $val)
	 {  
	   
			$data = array('CityId[]'  => $val['CityId']);
			echo form_hidden($data);
  ?>

           <?php if($i > 0) { ?> 
               <div class="col-md-12 form-group padding_opx">
                 <div class="col-md-2 form-group padding_opx"><span><?php echo $val['CityName']; ?></span></div>
                  <div class="col-md-2 form-group padding_opx"> <span><small>Arrival Time</small></span></div>
                 
                 
               <div class="col-md-3 form-group padding_opx">
					  <?php
                  $data = array('name'  => 'ArrivalTime['.$k.']', 'id' => 'ArrivalTime', 'value'=>set_value('DepartureTime'), 'placeholder' => '', 'class'=>"form-control margin_bottom");
                         echo form_input($data);
                        ?>
                     </div>
          <?php 
		          $k++;
		     }  
		   if($totalstap!=$i)
		     {
		  ?>
        
     
           
              <div class="col-md-12 form-group padding_opx">
                <div class="col-md-2 form-group padding_opx"> <?php if($i == 0) { echo $val['CityName']; } ?> </div>
                
                  <div class="col-md-2 form-group padding_opx"> <span><small>Departure Time</small></span></div>
              
                     <div class="col-md-3 form-group padding_opx">
					  <?php
             $data = array('name'  => 'DepartureTime['.$j.']', 'id' => 'DepartureTime', 'value'=>set_value('DepartureTime'), 'placeholder' => '', 'class'=>"form-control margin_bottom");
                         echo form_input($data);
                        ?>
                     </div>
              </div>
              
             
            
              
        
 <?php } $i++; $j++; } ?>        