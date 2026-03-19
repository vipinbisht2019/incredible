<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php // echo $visa[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php // echo $visa[0]['meta_keyword']; ?>">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <?php include('includes/css.php'); ?>
	
<!----------------------------Start new css---------------------------------->	
<link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">	
<!--<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css" type="text/css'); ?>">
<!----------------------------End new css------------------------------------>
<style>
	.blk-fnt{ 
		color: #4f4e4e;
    font-size: 13px;
    font-weight: 600;
	}
</style>
  </head>
  <body class="not-front page-about">
    <div id="main">
      <?php include('includes/header.php'); ?>
      <div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="<?php echo base_url(); ?>userhome">Home</a><span>/</span>Booking</div>
        </div>
      </div>
	  
	<!-- <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb">
                                <a href="<?php //echo base_url('userhome') ?>"><i class="icon-home"></i> Home</a>
                                <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                                <span class="current"> Dashboard</span>
                                <h2 class="entry-title"> Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
	-->

     <div id="content" style="background-color: #f6f5f5;">
          <div class="container padding_top_padding_bottom">

    <div class="row">


        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
            <?php include"includes/userleft.php"; ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
           
           <div class="col-xs-12 col-md-12 col-xs-12 padding_opx">
           
                <div class="col-md-12 col-xs-12">  <?php
					if($error = $this->session->flashdata('cancle')){  ?>
					
						<div class="alert alert-danger alert-dismissable">
							<?= $error ?>
						</div>
					
					<?php  } ?>
                </div>



         <div class="panel">
                <div class="panel-heading hidden-xs hidden-sm"> <h3 style="font-size:20px;margin-top:0px;margin-bottom:0px;padding:5px;font-size: 18px;text-transform: capitalize;"> Booking View <?php  //echo $this->session->userdata('user_id'); ?> </h3>
         </div>

     
                
		<div class="panel-heading col-xs-12 padding_0px_mobile hidden-lg hidden-md">

			<div class="col-xs-12 col-md-12 padding_0px_mobile">
				
				<div class="col-xs-4" style="padding: 10px 0px;">
						<?php include"includes/userleft.php"; ?>       
				</div>

				<div class="col-xs-8" style="padding: 10px 4px; margin-top: 6px;">
				<h3 class="text-right"> Welcome : <?php // echo $username[0]['user_fname']; ?> <?php // echo $username[0]['user_lname']; ?>  </h3>      
				</div>

			</div>

		</div>
				
		<div class="panel-body overflow_x_scroll">


			<div class="row">
				<div class="col-md-12" style="border-bottom: 1px solid #ddd;">
					<h3>Cart Information: </h3>
				</div>
				<div class="col-md-4 details_cart">
					<p>Booking Id : <span class="blk-fnt">TJS102200107525</span></p>
					<p>Order Type : <span class="blk-fnt">Air</span></p>
					<p>LoggedIn User : <span class="blk-fnt">Stop N Shop Travel & Tours Pvt. Ltd. (311824)</span></p>
					<p>Booking Date : <span class="blk-fnt">Sep 10, 2021 1:56 PM</span></p>
					<p><a href="#">Booking Summary</a></p>
				</div>
				<div class="col-md-4 details_cart">
					<p>Amount : <span class="blk-fnt">  <i class="fa fa-inr"></i> 4,643.10</span></p>
					<p>Channel Type : <span class="blk-fnt">Air</span></p>
					<p>Booking User : <span class="blk-fnt">Stop N Shop Travel & Tours Pvt. Ltd. (311824)</span></p>
					<p><a href="#">Booking Logs</a></p>
				</div>
				<div class="col-md-4 details_cart">
					<p>Status : <span style="color: #5CB957;font-weight: bold;">Success</span></p>
					<p>CreatedOn : <span class="blk-fnt">Air</span></p>
					<p>Flow Type : <span class="blk-fnt">Stop N Shop Travel & Tours Pvt. Ltd. (311824)</span></p>
					<p><a href="#">History</a></p>
				</div>
			</div>

			

			

			<!--<table class="table">
				<?php //foreach ($booking_details as $key => $bookValue) { //echo "<pre>"; print_r($bookValue); ?>
				
				<tr>
					<td>
						<?php 
							// $date_created1 = $bookValue['travel_date'];  										
							// $date_created2 = new DateTime($date_created1);
							// echo $date_created2->format('d M'); 
						?>
					</td>
					<td>

						<?php 
							// $time = $bookValue['departure_date'];  										
							// $departureTime = new DateTime($time);
							// echo $departureTime->format('h:i'); 
						?>

					</td>
					<td>

						<?php 
						
							//echo $bookValue['user_name']; 
							
						?>

					</td>
					<td>
						Booking ID : 
						
						<a href="<?php //echo base_url('booking/details/');?><?php //echo $bookValue['booking_id']; ?>" style="text-decoration:none; color : #0079b1
">
							<?php //echo $bookValue['booking_id']; ?>
							
						</a>
					</td>
					<td>Summary : 
						
						<a href = "" style="text-decoration:none; color : #0079b1
">View</a>
					</td>
					<td>
						<?php 

							// echo $bookValue['flight_code'];
							// echo ' ';
							// echo $bookValue['departure_code'];
							// echo '-';
							// echo $bookValue['arrival_code'];
							// echo ' ';
							// echo $date_created2->format('d M'); 
							// echo ', x  ';
							// echo $totalPax =  $bookValue['total_adult'] + $bookValue['total_child'] + $bookValue['total_infant'];

							
						?>						
					</td>
					<td>
						<?php 

							// if($bookValue['booking_status'] == 1){

							// 	echo 'Success';

							// }else if($bookValue['booking_status'] == 2){

							// 	echo 'Pending';

							// }else if($bookValue['booking_status'] == 3){

							// 	echo 'Cancelled';

							// } 
						?>
					</td>
				</tr>

			<?php //} ?>
			</table>-->
		</div>

		<div class="panel-body overflow_x_scroll">
			<div class="row">
				<div class="col-md-12" style="border-bottom: 1px solid #ddd;margin-bottom: 10px;">
					<h3>Booking details </h3>
				</div>

				<div class="segment_body">
					<div class="segment_body-airlogo">
						<img class="airline-logo" src="//static.tripjack.com/img/airlineLogo/v1/SG.png">
						<p class="margin-zero">SpiceJet<span class="airline-code">SG-2871</span></p>
					</div>
					<div class="segment_body-flight-info">
						<p class="margin-zero">Delhi <span class="air_sourcr-none">India (Delhi Indira Gandhi Intl) - DEL</span></p>
						<p class="margin-zero">11:30, Tue 21-Sep</p>
					</div>
					<div class="segment_body-flight-stop">
						<span class="via-city-codes">1 stop(s)</span>
						<div class="arrow_right-sm"></div>
						<span class="via-city-codes">
							<span>Via:JLR</span>
						</span>
					</div>
					<div class="segment_body-flight-info">
						<p class="margin-zero">Mumbai <span class="air_sourcr-none">India (Chhatrapati Shivaji) - BOM</span></p>
						<p class="margin-zero">15:50, Tue 21-Sep</p>
					</div>
				</div>


			</div>

			<div class="row">
				<div class="col-md-12" style="box-shadow: 1px 1px 5px #ddd;border-radius: 8px;padding: 5px;width: 98%;margin: 10px;">
					<div class="col-md-4" style="padding-left: 0px;">
						<div class="amend_passenger_details">
							<span>Last Name/First Name Title</span>
							<p class="bold person-name clearfix">
								<span class="pull-left">1. kumar/vipin Mr. (A)</span> 
								<span class="pull-right">
									<div class="hoverInfo">
										<i class="fa fa-info hover_icon" aria-hidden="true"></i>
									</div>
								</span>
							</p>
							<span class="sm_font col-sm-6 padd-left-amendment">Fare Type : 
								<span class="bold">Published</span>
							</span>
						</div>
					</div>
					<div class="col-sm-8 passenger_faredetail">
						<div class="row">
							<div class="col-sm-2 col-xs-6 padd-left-amendment">
								<fieldset class="floating-label">
									<div class="floating-label-wrapper">
										<div class="[object Object] ">
											<fieldset class="floating-label">
												<input readonly="" type="text" placeholder="Base Fare" class="input-floating-lebel" id="undefined_" name="39581_0_BF" min="0" value="₹&nbsp;3,384.00">
												<label for="undefined_" class="select-lebel-class">Base Fare</label>
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-sm-2 col-xs-6 padd-left-amendment">
								<fieldset class="floating-label">
									<div class="floating-label-wrapper">
										<div class="[object Object] ">
											<fieldset class="floating-label">
												<input readonly="" type="text" placeholder="Taxes" class="input-floating-lebel" id="undefined_" name="39581_0_TAF" min="0" value="₹&nbsp;568.00">
												<label for="undefined_" class="select-lebel-class">Taxes</label>
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-sm-2 col-xs-6">
								<fieldset class="floating-label">
									<div class="floating-label-wrapper">
										<div class="[object Object] ">
											<fieldset class="floating-label">
												<input type="text" placeholder="Airline PNR" class="input-floating-lebel" id="undefined_" name="39581_0_PNR" min="0" value="TCDB4Q">
												<label for="undefined_" class="select-lebel-class">Airline PNR</label>
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-sm-2 col-xs-6">
								<fieldset class="floating-label">
									<div class="floating-label-wrapper">
										<div class="[object Object] ">
											<fieldset class="floating-label">
												<input type="text" placeholder="GDS PNR" class="input-floating-lebel" id="undefined_" name="39581_0_sBId" min="0" value="" style="border: none;border-bottom: 1px solid #ddd;">
												<!--<label for="undefined_" class="select-lebel-class">GDS PNR</label>-->
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-sm-2 col-xs-6">
								<fieldset class="floating-label">
									<div class="floating-label-wrapper">
										<div class="[object Object] ">
											<fieldset class="floating-label">
												<input type="text" placeholder="Ticket Number" class="input-floating-lebel" id="undefined_" name="39581_0_tknum" min="0" value="" style="border: none;border-bottom: 1px solid #ddd;">
												<!--<label for="undefined_" class="select-lebel-class">Ticket Number</label>-->
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-sm-2 col-xs-6 padd-left-amendment">
								<fieldset class="floating-label">
									<div class="floating-label-wrapper">
										<div class="[object Object] ">
											<fieldset class="floating-label">
												<input readonly="" type="text" placeholder="Net Fare" class="input-floating-lebel" id="undefined_" name="39581_0_NF" min="0" value="₹&nbsp;3,969.70">
												<label for="undefined_" class="select-lebel-class">Net Fare</label>
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
							<div class="col-sm-2 col-xs-6 padd-left-amendment">
								<fieldset class="floating-label">
									<div class="floating-label-wrapper">
										<div class="[object Object] ">
											<fieldset class="floating-label">
												<input readonly="" type="text" placeholder="Gross Fare" class="input-floating-lebel" id="undefined_" name="39581_0_TF" min="0" value="3969.7">
												<label for="undefined_" class="select-lebel-class">Gross Fare</label>
											</fieldset>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
			
 

		
        <!-- <div class="panel-body overflow_x_scroll" style="overflow-x:scroll;">
		 	<table class="table">
				<thead>
                    <tr>
						<th> No. </th>
						<th> PNR No.</th>														
						<th> Booking Date </th>
						<th> Travel Date </th>
						<th> Travel Return Date </th>		
						<th> Departure City </th>
						<th> Departure Return City </th>
						<th> Arrival City </th>
						<th> Arrival Return City </th>
						<th> Departure Date </th>
						<th> Departure Return Date </th>
						<th> Arrival Date </th>
						<th> Arrival Return Date </th>                                
						<th> Booking Status </th>								
						<th> Action  </th>
                    </tr>
                </thead>
				<tbody>
					<?php 
					
						// $i=1;
		   				// foreach($booking_details as $user_booking)
		          		// { 

					?>
                           	<tr>
								<td><?php echo $i; ; ?></td>
								<td><?php echo ''; ?></td> 
								<td><?php $date_created1 = $user_booking['date_created'];  										
										  $date_created2 = new DateTime($date_created1);
										  echo $date_created2->format('d-m-Y'); ?> </td>							
								<td><?php $travel_date1 = $user_booking['travel_date'];  										
										  $travel_dates2 = new DateTime($travel_date1);
										  echo $travel_dates2->format('d-m-Y'); ?> </td>
								<td><?php $travel_date_return1 = $user_booking['travel_date_return'];  										
										  $travel_date_return2 = new DateTime($travel_date_return1);
										  echo $travel_date_return2->format('d-m-Y'); ?> </td>
								<td><?php echo $user_booking['departure_city']; ?> </td>
								<td><?php echo $user_booking['departure_city_return']; ?> </td>
								<td><?php echo $user_booking['arrival_city'];;?></td>
								<td><?php echo $user_booking['arrival_city_return']; ?> </td>
								<td><?php $departure_date1 = $user_booking['departure_date'];  										
										  $departure_date2 = new DateTime($departure_date1);
										  echo $departure_date2->format('d-m-Y'); ?> </td>										  
								<td><?php $departure_date_return1 = $user_booking['departure_date_return']; 						
										  $departure_date_return2 = new DateTime($departure_date_return1);
										  echo $departure_date_return2->format('d-m-Y'); ?> </td>
								<td><?php $arrival_date1 = $user_booking['arrival_date'];  										
										  $arrival_date2 = new DateTime($arrival_date1);
										  echo $arrival_date2->format('d-m-Y'); ?> </td>								
								<td><?php $arrival_date_return1 = $user_booking['departure_date'];  										
										  $arrival_date_return2 = new DateTime($arrival_date_return1);
										  echo $arrival_date_return2->format('d-m-Y'); ?> </td>
										  
								<td><?php if($user_booking['booking_status']==1) { echo "Confirm"; } 
											elseif($user_booking['booking_status']==2) { echo "Unpaid"; }
											else { echo "Cancel"; }  ?> </td>
											
                                <td><a title="Delete" href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td>
                               
                                        <a title="Cancle" href="<?php // echo base_url('userorder/cancle/'.$oval['order_id']); ?>" class="btn btn-danger"> <i class="fa fa-ban"></i> </a>
                                   
									     <a  title="Cancle" href="#" class="btn btn-danger disabled" style="opacity:.5;"> <i class="fa fa-ban"></i> </a>
                                         
                                           	&nbsp;<a title="Invoice" data-toggle="modal" data-target="#myModal<?php // echo $i; ?>" href="#" class="btn btn-info"> <i class="fa fa-files-o"></i> </a> 
            								&nbsp;<a title="View Details" href="<?php // echo base_url('userorder/orderdetails/'.$oval['order_id']); ?>" class="btn btn-success"> <i class="fa fa-eye"></i> </a>  &nbsp;
             								&nbsp;<a title="Track Order" href="<?php // echo base_url('userorder/trackorder/'.$oval['order_id']); ?>" class="btn btn-success"> <i class="fa fa-truck"></i> </a> 
                                 
                                </td> 
                           </tr>
                           
                           
                       <tr><td colspan="5">        
                        <div id="myModal<?php // echo $i; ?>" class="modal fade" role="dialog">
                          <div class="modal-dialog" style="width:1000px;">
                        
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Invoice</h4>
                              </div>
                              <div class="modal-body">
                                     
                                     <div class="jumbotron" style="background-color: #f7f7f7;">
	<div class="container" style="border: 2px solid #eee;">
		<div class="col-lg-12" style="border-bottom: 2px solid #eee;">
			<div class="col-lg-4">
				<h4>Bill From</h4>
				<p>Tajmahal Collections <br>
				   18/160-B, Fatehabad road, Opposite R. K. Hospital<br>
                   Agra-282001 <br>U.P , India<br>
				   Mob: +91-8650184840<br>
				  
                       

				 </p>
			</div>
		    <div class="col-lg-4">
				
			</div>
		   <div class="col-lg-4 text-right">
				<img src="../assets/img/logo taj.png" style="width: 181px;margin-top: 26px;">
			</div>
		</div>
        
        
            
            <div class="col-lg-12">
			<div class="col-lg-4">
				<h4>Bill To</h4>
				<p>
                        <?php
						  
						//        echo $oval['CompanyName']."<br>";
						//		echo $oval['order_shipping_first_name'].$oval['order_shipping_last_name']."<br>";
						//		echo $oval['order_shipping_address1'].$oval['order_shipping_address2']."<br>";
						//		echo $oval['order_shipping_city']."<br>";
						//		echo $oval['order_shipping_state']."-".$oval['order_shipping_postal_code']."<br>";
						//		echo "Phone-".$oval['order_shipping_phone'];
								
		
		                ?>

				 </p>
			</div>
		    <div class="col-lg-4">
				
			</div>
		   <div class="col-lg-4">
				<table class="table">
					<tbody>
						<tr>
							<td><p> Invoice </p></td>
							<td> <p>INV-<?php // echo $oval['order_id']; ?> </p></td>
						</tr>
						<tr>
							<td><p>Invoice Date </p></td>
							<td> <p>  <?php // echo date("d-M-Y", strtotime($oval['order_date'])); ?></p></td>  
						</tr>

						<tr style="background-color: #eee;">
							<td><p> Amount Due </p></td>
							<td> <p> INR. <?php // echo $oval['TotalAmount']; ?></p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>


<div class="col-lg-12">
        	 <table class="table">
        	 	 <thead>
        	 	 	<tr style="background-color: #eee;">
        	 	 		<th>Item</th>
                        
        	 	 		<th>Unit Price</th>
        	 	 		<th>Quantity</th>
        	 	 		<th>Line Total</th>
        	 	 	</tr>
        	 	 </thead>
        	 	 <tbody>
<?php 
 //  $itemArr=$oval['ITEMS'];
// foreach($itemArr as $result)
//	{
	  //          $GST=18;
	//		$GSTdiv=100+$GST;
			?>     
        	 	 	<tr>
        	 	 		<td><?php // echo $result['ProductName'];?></td>
                        <td>
							<?php 
                          		//	$TotalUnitPrice=$result['Price'];
								//	$ProductUnitGST=$TotalUnitPrice*$GST/$GSTdiv;
								//	$ProductUnitGST=round($ProductUnitGST, 2);
								//	echo"INR ".$productUnitCost=$TotalUnitPrice-$ProductUnitGST;
                            ?>          
                         </td>
        	 	 		 <td><?php // echo $result['order_qty'];?></td>
        	 	 		 <td>
                               INR 
									<?php 
                                    
											//	$TotalPrice=$result['Price']*$result['order_qty'];
											//	$ProductGST=$TotalPrice*$GST/$GSTdiv;
											//	$ProductGST=round($ProductGST, 2);
											//	$totalGST=$totalGST+$ProductGST;
											//    echo $productCost=$TotalPrice-$ProductGST;
											//	$SubToatl=$SubToatl+$productCost;
											//	$CodCharge=$result['CODCharges']*$result['order_qty'];
							                //	$TotalCodCharge_1=$TotalCodCharge_1+$CodCharge;
                                   ?>
                        
                        </td>
        	 	 	</tr>
 <?php
                          // shiping and discount
						  
						//	$total=$total+($result['Price']*$result['order_qty']);
						//	$ship=$result['ShippingCharge'];//*$result['order_qty'];
						//	$Totalship=$ship+$Totalship;
						//	$TotalDiscount=0;//$TotalDiscount+$result['Discount'];
  
  //  }
 ?>                   
                    
                    <tr style="background-color: #eee;">
                            
                            <td colspan="2">&nbsp;</td>
                           
							<td><p> Subtotal </p></td>
							<td> <p> INR  <?php // echo $SubToatl; ?> </p></td>
						</tr>
						<tr>
                            
                            <td colspan="2">&nbsp;</td>
                           
							<td><p> GST </p></td>
							<td> <p> INR <?php // echo $totalGST; ?></p></td>
						</tr>
                        
                         <td colspan="2">&nbsp;</td>
                            
							<td><p> Total Price </p></td>
							<td> <p> INR <?php // $totalprice=$SubToatl+$totalGST; echo number_format($totalprice, 2); ?></p></td>
						</tr>
                        
                        <tr>
                            
                            <td colspan="2">&nbsp;</td>
                          
							<td><p> Shipping Cost </p></td>
							<td> <p> INR <?php // echo number_format($Totalship, 2);; ?></p></td>
						</tr>
                       
                       <?php // if($TotalCodCharge_1>0) { ?>    
                         <tr>
                            
                            <td colspan="2">&nbsp;</td>
                          
							<td><p>  COD Charge </p></td>
							<td> <p> INR <?php // echo $TotalCodCharge_1; ?>.00</p></td>
						</tr>
                       <?php // } ?> 
                        
                        

						<tr style="background-color: #eee;">
                        
                            <td colspan="2">&nbsp;</td>
                           
							<td><p> Total Amount </p></td>
							<td> <p> INR  <?php // echo  number_format($SubToatl+$Totalship+$totalGST+$TotalCodCharge_1-$TotalDiscount, 2);; ?></p></td>
						</tr>
        	 	 </tbody>
        	 </table>
  
			<!--<div class="col-lg-4">
				<h4>Notes / Memo</h4>
				<p>	For Shipping 30 days Money Back </p>
			</div>-->
		  
		
				<!--<table class="table">
					<tbody>
						
					</tbody>
				</table>
			
		</div>
        




	</div>
</div>
                                   
                                   
                                   
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>  
                        </td></tr>     
                  <?php   //$i++; } ?>
                 
                           

                      </tbody>
                  </table>          
                  </div>
					   -->
             </div>   
        </div>
                      
                      <div class="col-lg-12 col-xs-12" style="padding:0px; text-align:right;">   
                        <?php  //   echo $this->pagination->create_links();  ?>  
                      </div>  
                  
                   </div>
                </div> 
             </div>
                </div>
              





	 
	  
	  </div>  
	  
	  
      <?php include('includes/footer.php'); ?>
      <?php include('includes/js.php'); ?>
    </div>
  </body>
</html>