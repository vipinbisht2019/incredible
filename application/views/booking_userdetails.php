<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Hotel Booking </title>
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
									<div class="panel-heading hidden-xs hidden-sm"> <h3 style="font-size:20px;margin-top:0px;margin-bottom:0px;padding:5px;font-size: 18px;text-transform: capitalize;"> Hotel Booking Detail - <?php echo $bookingHotelDetails['orderList']['booking_id'] ?></h3>
								</div>
								<div class="panel-heading col-xs-12 padding_0px_mobile hidden-lg hidden-md">

									<div class="col-xs-12 col-md-12 padding_0px_mobile">
										
										<div class="col-xs-4" style="padding: 10px 0px;">
												<?php include"includes/userleft.php"; ?>       
										</div>

										<div class="col-xs-8" style="padding: 10px 4px; margin-top: 6px;">
										<h3 class="text-right"> Welcome :  </h3>      
										</div>

									</div>

								</div>
								<div class="panel-body overflow_x_scroll">


									<div class="row">
										<div class="col-md-12" style="border-bottom: 1px solid #ddd;">
											<h3>Cart Information: </h3>				</div>
										<div class="col-md-4 details_cart">
											<p>Booking Id : <span class="blk-fnt"><?php echo $bookingHotelDetails['orderList']['booking_id'] ?></span></p>
											<p>Booking Date : <span class="blk-fnt"><?php echo $bookingDate = date("M d, Y h:i A",strtotime($bookingHotelDetails['orderList']['created_on'])); ?></span></p>
										</div> 
										<div class="col-md-4 details_cart">
											<p>Amount : <span class="blk-fnt">  <i class="fa fa-inr"></i> <?php echo $bookingHotelDetails['orderList']['total_amount'] ?></span></p>
											
										</div>
										<div class="col-md-4 details_cart">
											<p>Status : <span style="color: #5CB957;font-weight: bold;"><?php echo $bookingHotelDetails['orderList']['status'] ?></span></p>
										</div>
									</div>

								</div>

								<div class="panel-body overflow_x_scroll">
									<div class="row">
										<div class="col-md-12" style="border-bottom: 1px solid #ddd;margin-bottom: 10px;">
											<h3>Booking details </h3>
										</div>

										<div class="segment_body">
											<div class="hotel__info">
												<div class="hotel__info--detail">
													<p class="margin-zero hotel__info--hotelname"><?php echo $bookingHotelDetails['hotelDetails']['hotel_name']; ?> 
														<div class="deal-rating" style="margin-bottom: 0px;">

															<?php if($bookingHotelDetails['hotelDetails']['hotel_rating'] == '1'){  ?>
																<span class="fa fa-star checked"></span>
															<?php }else if($bookingHotelDetails['hotelDetails']['hotel_rating'] == '2'){ ?>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
															<?php }else if($bookingHotelDetails['hotelDetails']['hotel_rating'] == '3'){ ?>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
															<?php }else if($bookingHotelDetails['hotelDetails']['hotel_rating'] == '4'){ ?>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
															<?php }else if($bookingHotelDetails['hotelDetails']['hotel_rating'] == '5'){ ?>
																<span class="fa fa-star checked"></span>								
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
															<?php } ?>

														</div>
													</p>
													<p class="margin-zero hotel__info--name"></p>
												</div>
											</div>
											<div class="hotel__check">
												<div class="hotel__check--in">
													<p class="margin-zero">Check in</p>
													<p class="margin-zero">September 30, 2021</p>
												</div>
												<div class="hotel__check--out">
													<p class="margin-zero">Check out</p>
													<p class="margin-zero">October 3, 2021</p>
												</div>
											</div>
											<div class="hotel__room">
												<p class="margin-zero">RoomInfo </p>
												<p class="margin-zero">1 Room(s) 2 Adult(s) 0 Child</p>
											</div>
										</div>

										<div class="detail-box">
											<?php foreach ($bookingHotelDetails['roomDetails'] as $key => $roomValue) { ?>				
											
												<h3 class="roomtype heading"><?php echo $roomValue['hotel_room_type']; ?></h3>
												<div class="row">
													<div class="col-md-6 mealbasis__container">
														<span class="roomtype__guest--name">
															<h5 class="mealbasis--heading">Meal Basis:</h5> <?php echo $roomValue['hotel_meal_bases']; ?>
														</span>
													</div>
												</div>

											<?php } 
												
												foreach ($bookingHotelDetails['guestsDetails'] as $key => $guestValue) { ?>
													<div class="row">
														<div class="col-md-6 roomtype__guest">
															<p class="roomtype__guest--name"><?php echo $guestValue['title']; ?> <?php echo $guestValue['first_name']; ?> <?php echo $guestValue['last_name']; ?>  (<?php echo $guestValue['pax_type']; ?>) </p>
														</div>                		
													</div>
											<?php } ?>
										</div>

										<div class="detail-box">
											<h3 class="heading">Cancellation Policy</h3>
											<div class="policy">
												<div>
													<table class="table table-bordered">
														<thead class="cancellation-border">
															<tr>
																<th>Cancellation on or After </th>
																<th>Cancellation on or Before </th>
																<th>Cancellation Charges/Comments</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td style="font-size: 12px;">Sep 30, 2021 10:12 AM</td>
																<td style="font-size: 12px;">Sep 30, 2021 12:00 PM</td>
																<td style="font-size: 12px;"><i class="fa fa-inr"></i> 1,341.78 </td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>

										<div class="detail-box">
											<h3 class="heading">Terms & Conditions</h3>
											<ul style="padding-left: 20px;">
												<li style="list-style: auto;padding-left: 10px;line-height: 20px;font-size:13px;">Each country/state may have its own set of COVID-19 guidelines and restrictions. Please check with the hotel or visit the country’s/state's website for the same.</li>
												<li style="list-style: auto;padding-left: 10px;line-height: 20px;font-size:13px;">Each booking is applicable of Rs.20 per room per night non-refundable service fees.</li>
												<li style="list-style: auto;padding-left: 10px;line-height: 20px;font-size:13px;">Your booking is confirmed. However, your name will be listed in the hotel’s reservation system closer to your arrival date.</li>
												<li style="list-style: auto;padding-left: 10px;line-height: 20px;font-size:13px;">Guest Photo Id must be presented at the time of check-in.</li>
												<li style="list-style: auto;padding-left: 10px;line-height: 20px;font-size:13px;">Credit card or cash deposit may be required for extra services at the time of check-in.</li>
												<li style="list-style: auto;padding-left: 10px;line-height: 20px;font-size:13px;">All extra charges will be borne by the guest directly prior to departure.</li>
												<li style="list-style: auto;padding-left: 10px;line-height: 20px;font-size:13px;">In case of the guest arrival delayed or postponed due to any unforeseen occurrences, additional charges will be borne by the guest.</li>
											</ul>
										</div>


									</div>

									

								</div>
			
 
             				</div>   
       					</div>
                      
                      <div class="col-lg-12 col-xs-12" style="padding:0px; text-align:right;">   
                        
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