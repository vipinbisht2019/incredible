<!doctype html>
<html lang="en">
  <head>
	<title>Tour Ticket Print</title>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Ticket Print</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/toursbooking/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>
                
                
                

                


			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->
              
      
                   <div class="col-md-12 col-xs-12 margin_top">
                     <?php if($AgentId > 0) { ?>
                        <div class="col-md-12 col-xs-12" >
                           <div class="col-md-12 col-xs-12" style="border: 1px ;">
                             <div class="panel panel-default">
                               <div class="panel-heading">
                               <?php echo $agent_info[0]['CompanyName'];  ?>
                                 </div>
                                 <div class="panel-body">
                                  <div class="col-md-4">
                                  <?php if($agent_info[0]['AgentLogo']) { ?>
                               	       <img style="width: 100%;padding: 20px;" src="<?php echo base_url('uploads/agents/'.$agent_info[0]['AgentLogo']); ?>">
                                       <?php } else {  echo"<span>".$agent_info[0]['CompanyName'].'</span>'; }  ?>
	    	                        </div>
                                <div class="col-md-3">
                               	   </div>
                                     <div class="col-md-5 text-right">

                               	    	<small> <b>Need help with your trip?</b> </small>

                               	    	<h6> <i class="fa fa-phone"></i> <?php echo $agent_info[0]['user_phone'] ?></h6>
                                        <h6> <i class="fa fa-envelope-o"></i> <?php echo $agent_info[0]['user_email'] ?></h6>
                                  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                <?php } else { 
                
                               include('ticket_header.php');
                 } ?>
               
                   	<!-- Tour Details Start ########################################-->

            <div class="col-lg-12 col-xs-12">

  <div class="col-lg-6">

    <div class="panel panel-default">

       <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-bus"></i> Tours </h5> </div>

       <div class="panel-body">
         <h5 class="font_16px"> <?php echo $toursbooking_details[0]['TourName']; ?> </h5>

         <p class="font_16px"> <?php if($toursbooking_details[0]['NoofNight'] > 0) { echo $toursbooking_details[0]['NoofNight']." Night / "; } if($toursbooking_details[0]['NoofDay']>0) { echo $toursbooking_details[0]['NoofDay']." Day"; } ?>  <!-- Single Day tours --></p>

     <?php /*?>    <p class="font_16px"> <i class="fa fa-clock-o"></i> Departure Time : <?php echo $toursbooking_details[0]['DepartureTime']; ?>  &nbsp; <i class="fa fa-clock-o"></i> Arrival Time : <?php echo $toursbooking_details[0]['ArivalTime']; ?>    </p><?php */?>

         <p class="font_16px"> Place Covered:  <?php echo $toursbooking_details[0]['TourTitle']; ?> </p>
         
                  <p class="font_16px">&nbsp;</p>
       </div>
      
    </div>
  
  </div>

    <div class="col-lg-6">

    <div class="panel panel-default">

       <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-user-o"></i> Traveller infomation </h5> </div>

       <div class="panel-body">

        <table class="table">
         
         <tbody>
            
            <tr>
               <td class="font_16px" style="border-top: 0px;"> <i class="fa fa-user-o"></i>  Name : </td>
               <td class="font_16px" style="border-top: 0px;"> <?php echo $toursbooking_details[0]['Name']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i> Email : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['Email']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-phone"></i> Phone No. : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['PhoneNo']; ?> &nbsp;/&nbsp; <?php echo $toursbooking_details[0]['AltPhoneNo']; ?> </td>
            </tr>
            
              <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i>  Address : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['Address']; ?> <br>
               
                 <?php echo $toursbooking_details[0]['City']; ?>  <?php echo $toursbooking_details[0]['State']; ?>,   <?php echo $toursbooking_details[0]['Country']; ?>
               
                </td>
            </tr>

         </tbody> 


        </table>


 <!--         <h5 class="font_16px">Agra - Mathura - Vrindavan Tour</h5>

         <p class="font_16px">Single Day tours</p>

         <p class="font_16px"> <i class="fa fa-clock-o"></i> Arrival Time : 6.00 Am  &nbsp; <i class="fa fa-clock-o"></i> Departure Time : 11.30 Pm  </p>

         <p class="font_16px"> Palace covered:  Agra, Mathura, Vrindavan</p> -->
       </div>
      
    </div>
  
  </div>
  
</div>

  


    <div class="col-lg-12 col-xs-12">

   <div class="col-lg-12 col-xs-12">
  
  <div class="panel panel-default">
   
   <div class="panel-heading">

   <h5 style="margin: 0px; font-size: 18px;"> <i class="fa fa-ticket"></i>  Booking Overviews </h5>

   </div>

    <div class="panel-body">

  <table class="table">
    
    <tbody>
       
       <tr>
            
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Tour Name  </th>

           <th class="font_16px" style="width: 10%;border-top: 0px;"> Bus Type </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Total Traveller  </th>
             <th class="font_16px" style="width: 10%;border-top: 0px;"> Seat No. </th>

           
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Journey Date   </th>

           <th class="font_16px" style="width: 10%;border-top: 0px;"> Return Date  </th>

           <th class="font_16px" style="width: 10%;border-top: 0px;"> Boarding Point  </th>

        </tr>


       <tr>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['TourName']; ?>  </td>

          <td class="font_16px"> <?php echo $toursbooking_details[0]['BusType']; ?>   </td>
           <td class="font_16px">  <?php echo $toursbooking_details[0]['TotalTravellar']; ?>    </td>
           <td class="font_16px">  <?php echo $toursbooking_details[0]['SeatNo']; ?>  </td>
          
         

         
 

          <td class="font_16px"> <?php //echo   $yrdata= strtotime('DepartureDate');
   

    $yrdata = $toursbooking_details[0]['DepartureDate'];  echo date('d-M-Y', strtotime($yrdata));   ?>   </td>

          <td class="font_16px"> <?php //echo   $yrdata= strtotime('DepartureDate');
   

    $yrdata = $toursbooking_details[0]['DepartureDate'];     echo date('d-M-Y', strtotime($yrdata. ' + '.$toursbooking_details[0]['NoofNight'].' days'));  ?>   </td>

          <td class="font_16px"> <?php echo $toursbooking_details[0]['BoardingPoint']; ?>  : <?php echo $toursbooking_details[0]['ArivalTime']; ?> </td>


       </tr> 

    </tbody>

  </table>

            <?php echo $toursbooking_details[0]['BookingNote']; ?>
  </div>

</div>

</div>

<div class="col-lg-12">
  
    <div class="panel panel-default">
   
   <div class="panel-heading">
   <h5 style="margin: 0px; font-size: 18px;"> <i class="fa fa-inr"></i>  Price </h5>
   </div>

    <div class="panel-body">


  <table class="table">
    <tbody>
      <tr>
         <th class="font_16px" style="width: 10%;border-top: 0px;"> Ticket No. </th>
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Booking Amount </th>
          
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Pickup Charges    </th>
          <th class="font_16px" style="width: 10%;border-top: 0px;"> GST  </th>
           <?php if($toursbooking_details[0]['CouponPrice'] > 0) { ?>   
                   <th class="font_16px" style="width: 10%;border-top: 0px;"> Coupon Amount  </th>
                <?php } ?>   
          
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Total Paid Amount  </th>
      </tr>


       <tr>
       
         <td class="font_16px">  <?php echo $toursbooking_details[0]['BookingRefrenceNo']; ?>  </td>
          <td class="font_16px"> <i class="fa fa-inr"></i> 
      <?php
               $CouponPrice=0;
              $IsSingel=$toursbooking_details[0]['IsSingel'];
          
         if($IsSingel=='Y') 
            {
                  echo $totalfare=$toursbooking_details[0]['BusFare']*$toursbooking_details[0]['TotalTravellar']; 
          } 
          else
           {
              echo $totalfare=$toursbooking_details[0]['BusFare']; 
           }  
       
       ?>    </td>
           
             <td class="font_16px"> <i class="fa fa-inr"></i>  <?php echo $totalpickupcharge=$toursbooking_details[0]['TotalPrice']; ?>  </td>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $totalgst=$toursbooking_details[0]['TotalGst']; ?>  </td>
          
         <?php if($toursbooking_details[0]['CouponPrice'] > 0) { ?> 
                   <td class="font_16px"> <i class="fa fa-inr"></i> -<?php   echo $CouponPrice= $toursbooking_details[0]['CouponPrice']  ?>  </td>
                 <?php } ?>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $garndtotal = $totalfare+$totalgst+$totalpickupcharge-$CouponPrice;  ?>   </td>
       </tr> 

    </tbody>

  </table>


       
            <div class="col-lg-12 col-xs-12">
                   <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" style="margin-left: 30px;">Print Ticket</button>
               </div> 
       

    </div>

   </div>   



</div> 



</div>


                  


                    <!-- Tour Details End ########################################### -->
      
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

<!-- Modal -->

<!-- Print Tickets ###################################################### -->

<style type="text/css">
  
  @media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
	 visibility:visible;
  }
}




</style>


<div id="printThis">
<div class="col-md-12 col-xs-12">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
     <div class="modal-content col-md-12 col-xs-12">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ticket No. <?php echo $toursbooking_details[0]['BookingRefrenceNo']; ?></h4>
          </div>
     

<div style="width:100%;" >
  <div class="table1" style="float: left;width: 50%;">
    <table class="table" style=" width: 100%;max-width: 100%;">
   <tbody>
     <tr>
       <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="<?php base_url() ?>assets/img/logo.png" style="width: 100%;"></td>
     </tr>
     <tr>
<!--         <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: none;text-align: center;"> <small> Fleet Owner & Travel Agents </small></td> -->
     </tr>
   </tbody>
 </table>
  </div>
 <div class="table2" style="float: right;width: 40%;margin-top: 0%;text-align: right;">
  <table class="table" style="margin-bottom: 0px;">
    <tbody>
       <tr>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;padding: 0px;"> <small> Shop no.3 Block B-1 G/F Main Road Massodpur Mkt. </small> </td>
      </tr>
      <tr>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;padding: 0px;"><small>Vasant Kunj, New Delhi - 110070</small> </td>
      </tr>
       
   
     <tr>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;    padding: 11px 0px 0px 0px;"><small>Mobile : +91-9311181111</small></td>
     </tr>
     <tr>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none; padding: 0px;"><small>Phone : 011-26136611,26138811,26137711</small></td>
     </tr>
     <tr>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;padding: 0px;"><small>GST No : 07AAIFT3303P1ZW </small></td>
     </tr>
    </tbody>
  </table>
  
   
 </div>
     
</div>

<div style="width:100%;">
  <h2></h2>
  <p></p>            
  <table class="table" style="margin-bottom: 0px;">
    <thead>
      <tr>
        <th >Journey Ticket</th>
        <th >&nbsp;</th>
        <th >Ticket No. <?php echo $toursbooking_details[0]['BookingRefrenceNo']; ?> </th>
        
      </tr>
    </thead>
    <tbody>
      <tr>

        <td >Booking Date: <?php echo $toursbooking_details[0]['BookingDate']; ?> 14:55:38</td>
         <td>&nbsp;</td>
        <td > Date of Journey : <?php     $yrdata = $toursbooking_details[0]['DepartureDate'];  echo date('d-M-Y', strtotime($yrdata));   ?> </td>
       
      </tr>
      <tr>
        <td ><span >Tour To </span>: <span> <?php echo $toursbooking_details[0]['TourName']; ?>  </span></td>
          <td>&nbsp;</td>
        <td > <span >Seat No </span>: <span> <?php echo $toursbooking_details[0]['SeatNo']; ?>  </span></td>
       
      </tr>
      <tr>
        <td><span >Name </span>:<span> <?php echo $toursbooking_details[0]['Name']; ?>  </span> </td>
           <td>&nbsp;</td>
        <td><span >Phone  <?php echo $toursbooking_details[0]['PhoneNo']; ?> &nbsp;/&nbsp; <?php echo $toursbooking_details[0]['AltPhoneNo']; ?> </span></td>
        
      </tr>
      <tr>
        <td>
          <span >Address </span>: <span> <?php echo $toursbooking_details[0]['Address']; ?> <?php echo $toursbooking_details[0]['City']; ?>  <?php echo $toursbooking_details[0]['State']; ?>,   <?php echo $toursbooking_details[0]['Country']; ?> </span></td>
          <td>&nbsp;</td> 

        <td><span>Bus Type </span>: <span><?php echo $toursbooking_details[0]['BusType']; ?>  </span></td>
        
      </tr>
      <tr>
<!--         <td style="padding: 12px 10px 4px 68px;line-height: 1.42857143;vertical-align: top;border-top: none;">
          <span style="margin-left: 56px;">Plan </span>: </td> -->

        <td ><span >Message </span>:   <?php echo $toursbooking_details[0]['BookingNote']; ?></td>
          <td>&nbsp;</td>
            <td><span> Total No. of Pax   </span>:   <?php echo $toursbooking_details[0]['TotalTravellar']; ?></td>
      </tr>
      <tr>
        <td> <span >Pickup Point & Time </span>:&nbsp; <span> <?php echo $toursbooking_details[0]['BoardingPoint']; ?>  : <?php echo $toursbooking_details[0]['ArivalTime']; ?> </span></td>
            <td>&nbsp;</td>
        <td>  <span>For Ticket Support </span>:&nbsp; <span>+91-9311181111</span></td>
        

      </tr>
    
    </tbody>
  </table>

  <table class="table" style="margin-bottom: 0px;">
    <tbody>
      <tr>
     
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Booking Amount </th>
          
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Pickup Charges    </th>
          <th class="font_16px" style="width: 10%;border-top: 0px;"> GST  </th>
           <?php if($toursbooking_details[0]['CouponPrice'] > 0) { ?>   
                   <th class="font_16px" style="width: 10%;border-top: 0px;"> Coupon Amount  </th>
                <?php } ?>   
          
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Total Paid Amount  </th>
      </tr>


       <tr>
       
       
          <td class="font_16px"> <i class="fa fa-inr"></i> 
      <?php
               $CouponPrice=0;
              $IsSingel=$toursbooking_details[0]['IsSingel'];
          
         if($IsSingel=='Y') 
            {
                  echo $totalfare=$toursbooking_details[0]['BusFare']*$toursbooking_details[0]['TotalTravellar']; 
          } 
          else
           {
              echo $totalfare=$toursbooking_details[0]['BusFare']; 
           }  
       
       ?>    </td>
           
             <td class="font_16px"> <i class="fa fa-inr"></i>  <?php echo $totalpickupcharge=$toursbooking_details[0]['TotalPrice']; ?>  </td>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $totalgst=$toursbooking_details[0]['TotalGst'] ; ?>  </td>
          
         <?php if($toursbooking_details[0]['CouponPrice'] > 0) { ?> 
                   <td class="font_16px"> <i class="fa fa-inr"></i> -<?php   echo $CouponPrice= $toursbooking_details[0]['CouponPrice']  ?>  </td>
                 <?php } ?>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $garndtotal = $totalfare+$totalgst+$totalpickupcharge-$CouponPrice;  ?>   </td>
       </tr> 

    </tbody>

  </table>


       
       
       
 



  <!-- <p>Nither refundable nor transferable Issued by</span> For <b> Travel House Delhi </b> </p> -->
  <!-- <p><span></p> -->

  <p><strong>Term & Condition</strong></p>
  <ul style="font-size: 12px;">

  <?php 
  
  foreach ($tour_termcondition as $termcondition) {
  
  

  ?>

      <li style="list-style: disc;"> <?php echo $termcondition['Title']; ?> .</li>

<?php } ?>

  </ul>
  <p style="text-align: center;font-size: 13px">Copy Right 2018-19,All Right Reserved By <span style="border-bottom: 1px solid gray">Travel House Delhi</span></p>
</div>


      <div class="modal-footer">
         <button type="button" id="btnPrint" class="btn btn-default" style="float: left;"> Print</button>
         <button type="button" class="btn btn-default" style="float: right;" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
</div>

<script type="text/javascript">
  
  document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("printThis"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}

</script>


</div> 