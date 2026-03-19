<?php // echo '<pre>'; print_r($_SESSION); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking Hotel Detail</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $hotel_reservation[0]['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $hotel_reservation[0]['meta_keyword']; ?>">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

        <?php include('includes/css.php'); ?>
        <link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/calendar.css');?>" rel="stylesheet">
            <style>
                img {
                    width: inherit;
                }
                section{ padding-top:10px; }
                ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
                    color:    #444;
                }
                :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
                   color:    #444;
                   opacity:  1;
                }
                ::-moz-placeholder { /* Mozilla Firefox 19+ */
                   color:    #444;
                   opacity:  1;
                }
                :-ms-input-placeholder { /* Internet Explorer 10-11 */
                   color:    #444;
                }
                ::-ms-input-placeholder { /* Microsoft Edge */
                   color:    #444;
                }

                ::placeholder { /* Most modern browsers support this now. */
                   color:    #444;
                }
            </style>
    </head>

    <body class="not-front page-post">
        <div id="main">
           <?php include('includes/header.php'); ?>
            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Pages<span>/</span>Booking</div>
                </div>
            </div>
            <section class="flight-destinations">
                <div class="container">
                    <div class="row">
                        <!--<h3 class="text-center hch2">SHERATON Prague</h3>
                        <div class="clearfix"></div>
                        <p class="address text-center">Na Strzi 32, Prague, 14000, Czech Republic</p>
                        <div class="text-center">
                            <img src="<?php //echo base_url('assets/images/star1.png')?>">
                            <img src="<?php //echo base_url('assets/images/star1.png')?>">
                            <img src="<?php //echo base_url('assets/images/star1.png')?>">
                            <img src="<?php //echo base_url('assets/images/star1.png')?>">
                            <img src="<?php //echo base_url('assets/images/star1.png')?>">
                        </div>-->
                        <div id="content" class="col-lg-8">

                        <?php //echo '<pre>'; print_r($hotelSummary); die; ?>

                            <div class="bg-3" style="padding-bottom: 20px;">
                                <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">
                                    <!-- <div class="col-md-12">
                                        <h2 style="border-bottom: 0px;margin-bottom: 0px;">HOTEL Info</h2>
                                        
                                    </div> -->
                                </div>
                                <div class="row padd">
                                    <div class="col-md-3">
                                        <img src="<?php echo @$hotelSummary['img'][0]['tns']; ?>" class="booking-img">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="">
                                        <?php if($hotelSummary['rt'] == 1){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            
                                        <?php }elseif($hotelSummary['rt'] == 2){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">


                                        <?php }elseif($hotelSummary['rt'] == 3){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">

                                        <?php }elseif($hotelSummary['rt'] == 4){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">

                                        <?php }elseif($hotelSummary['rt'] == 5){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">

                                        <?php } ?>
                                        </div>
                                        <h5 class="hch"><?php echo $hotelSummary['name']; ?></h5>
                                        <div class="add_pin_1 add_pin">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="map_mark_1 map_mark_2">
                                                <path d="M22.301 24.38a1.334 1.334 0 10-.224 2.658 39.92 39.92 0 015.035.697.333.333 0 010 .651A53.38 53.38 0 0116 29.334a53.376 53.376 0 01-11.111-.948.333.333 0 010-.651 39.257 39.257 0 014.981-.693 1.333 1.333 0 00-.227-2.656c-9.644.815-9.644 2.815-9.644 3.673 0 3.557 11.089 3.941 16 3.941s16-.384 16-3.941c0-.859 0-2.859-9.699-3.679zM16 28.8c.455 0 .878-.232 1.123-.615 2.611-4.084 8.683-14.048 8.683-18.381 0-5.416-4.391-9.807-9.807-9.807S6.192 4.388 6.192 9.804c0 4.333 6.072 14.299 8.684 18.381.244.385.669.617 1.124.615zM11.333 9.333A4.667 4.667 0 1116 14a4.667 4.667 0 01-4.667-4.667z"></path>
                                            </svg>
                                            <span class="location"><?php echo $hotelSummary['ad']['adr']; ?> ,<br> <?php echo $hotelSummary['ad']['city']['name']; ?> , <?php echo $hotelSummary['ad']['country']['name']; ?>
                                            </span>
                                        </div>
                                        <!-- <div class="rating_1">
                                            <span class="rating_2"><?php //echo $hotelSummary['rt']; ?></span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="container">
                                    <?php //echo '<pre>'; print_r($hotelSummary);?>
                                    <div class="row bookinbg-padd">
                                        <div class="col-md-3">
                                            <span class="check-booking">Check In</span>
                                            <h5 class="check-head"><?php echo $checkInDate = date("d/m/Y",strtotime($hotelSummary['ops'][0]['ris'][0]['checkInDate'])); ?></h5>
                                            <!-- <span class="check-booking"><?php //echo $checkInDate = date("h:i a",strtotime($hotelSummary['ops'][0]['ris'][0]['checkInDate'])); ?></span> -->
                                        </div>
                                        <div class="col-md-3">
                                            <span class="check-booking">Check Out</span>
                                            <h5 class="check-head"><?php echo $checkInDate = date("d/m/Y",strtotime($hotelSummary['ops'][0]['ris'][0]['checkOutDate'])); ?></h5>
                                            <!-- <span class="check-booking"><?php //echo $checkInDate = date("h:i a",strtotime($hotelSummary['ops'][0]['ris'][0]['checkOutDate'])); ?></span> -->
                                        </div>
                                        <div class="col-md-6">
                                            <span class="check-booking">Guests</span>
                                            <h5 class="check-head"><?php echo $totalGuest; ?> Guests | <?php echo $totalRoom; ?> Room</h5>
                                            <?php 

                                                $checkinDate  = date("Y-m-d",strtotime($hotelSummary['ops'][0]['ris'][0]['checkInDate']));
                                                $checkoutDate  = date("Y-m-d",strtotime($hotelSummary['ops'][0]['ris'][0]['checkOutDate']));

                                                $diff = abs(strtotime($checkoutDate) - strtotime($checkinDate));
                                                $years = floor($diff / (365*60*60*24));
                                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                            ?>
                                            <span class="check-booking"><?php echo $days; ?> Night</span>
                                        </div>

                                    </div>

                                </div>
                                <!-- <div class="container" style="padding: 0;">
                                    <div class="bg-4">
                                        <h4><?php //echo $hotelSummary['ops'][0]['ris'][0]['rc']; ?></h4>
                                        <div class="col-md-12 bg-4" style="margin: 0;">
                                            <span class="sup">Price Includes</span>
                                            <ul class="sup-ul">
                                                <li><i class="fa fa-check-circle"></i> Special Offer for Vaccinated Guest : Get 1 complimentary Cocktail per guest per stay at time of arrival if the guest is COVID-19 vaccinated even with first dose. To avail this offer please show your vaccination certificate during the time of check-in. Offer valid for check-in till 21st September 2021.</li>
                                                <li><i class="fa fa-check-circle"></i> Complimentary Early Check in is available for up to 4 hours from the standard check-in time. This service is subject to availability.</li>
                                                <li><i class="fa fa-check-circle"></i> Complimentary Late check-out is available for up to 3 hours after the standard check-out time. This service is subject to availability.</li>
                                            </ul>
                                            <div class="iwUOtq eLtUXz">
                                                <span color="#00B318" class="hPzpAm">
                                                    <div class="bjDOBV">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2.5rem" height="2rem" fill="#00B318" class="FreeCancelIcon-sc-3axaxr-0 hpGlR"><path d="M21.448 5.88l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm0 3.806l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm-.006 1.04c.612-.002 1.15.4 1.326.984a.345.345 0 01-.266.436H22.5c-.735.143-1.378.335-1.994.58l.074-.026a.346.346 0 01-.272-.001l.002.001a.349.349 0 01-.181-.198l-.001-.002a1.143 1.143 0 01-.07-.392c0-.764.62-1.384 1.384-1.384zM13.3 21.446v-.002h.002c.19 0 .344.154.344.344l-.002.042v-.002a10.22 10.22 0 00-.037 2.048l-.002-.036a.346.346 0 01-.344.372H2.769a2.77 2.77 0 01-2.768-2.766V17.6a2.081 2.081 0 011.812-2.059l.01-.001a3.46 3.46 0 00.018-6.864l-.017-.002A2.083 2.083 0 01.002 6.616V2.768A2.77 2.77 0 012.77 0h27.678a2.77 2.77 0 012.77 2.768v3.848a2.08 2.08 0 01-1.822 2.06 3.468 3.468 0 00-3.028 3.436v.004a.344.344 0 01-.45.327l.002.001a10.484 10.484 0 00-1.936-.415l-.052-.005a.343.343 0 01-.305-.342l.001-.029v.001a6.245 6.245 0 014.516-5.541l.044-.011a.344.344 0 00.256-.333V3.111a.344.344 0 00-.344-.344H3.114a.344.344 0 00-.344.344v2.656c0 .156.104.29.254.332 2.665.745 4.587 3.152 4.587 6.008s-1.922 5.263-4.543 5.997l-.044.011a.344.344 0 00-.254.332v2.654c0 .19.154.346.344.346h10.188zm11.34-7.438c4.968 0 8.995 4.027 8.995 8.995s-4.027 8.995-8.995 8.995c-4.968 0-8.995-4.027-8.995-8.995s4.027-8.995 8.995-8.995zm4.532 7.202l.004-.006a1.04 1.04 0 00-1.659-1.247l-.001.001-3.784 5.046a.341.341 0 01-.52.04l-1.8-1.796a1.038 1.038 0 00-1.465 1.467l-.001-.001 2.074 2.074c.386.392.912.614 1.46.614.05 0 .102-.006.154-.006a2.057 2.057 0 001.516-.824l4.02-5.36z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="dpbkmY">
                                                        <span>Free Cancellation till 19 Aug'21</span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="container" style="padding: 0;">
                                    <div class="bg-4">
                                        <h4><?php echo $bookType = str_replace('_',' ',$hotelSummary['ops'][0]['inst'][0]['type']); ?></h4>
                                        <div class="col-md-12 bg-4" style="margin: 0;">
                                            <p><?php echo $hotelSummary['ops'][0]['inst'][0]['msg']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php //echo '<pre>'; print_r($_SESSION); ?>         
                            <div class="bg-3">
                                <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">
                                    <div class="col-md-12">
                                        <h2 style="border-bottom: 0px;margin-bottom: 0px;">Guest Details</h2>
                                        
                                    </div>
                                </div>
                                <div class="container">
                                    <form name="guestdetails" method="post" action="<?php echo base_url('hotels/guestDetails'); ?>"> 
                                        <div class="row">

                                            <?php
                                           // $a=3;
                                            while($totalGuest > 0) { ?>

                                            <div class="customer_records">

                                                <div class="form-group col-lg-2">
                                                    <label>Title:</label>
                                                    <select name="title[]">
                                                        <option value="Mr">Mr</option>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Ms">Ms</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-lg-5">
                                                    <label>First Name:</label>
                                                    <input type="text" class="form-control" id="firstname" name="first_name[]" placeholder="Enter First Name">
                                                </div>                                              
                                             

                                                <div class="form-group col-lg-5">
                                                    <label>Last Name:</label>
                                                    <input type="text" class="form-control" id="lastname" name="last_name[]" placeholder="Enter Last Name">
                                                  
                                                </div>


                                                <div class="col-lg-12" ></div>
                                            </div>
                                            <?php $totalGuest --;
                                            } ?>


                                            <div class="customer_records_dynamic"></div>
                                            <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Email Address:</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="abc@xyz.com">
                                            </div>
                                            <div class="form-group col-lg-6 col-left-padding">
                                                <label>Mobile Number:</label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <select style="color: #444;height: 34px; padding: 5px;" name="codes">
                                                            <option value="+91">+91</option>
                                                            <!-- <option>+247 United Arab Emirates</option>
                                                            <option>+93 Afganistan</option>
                                                            <option>+355 Albania</option> -->
                                                        </select>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="phone_no" id="phnumber" placeholder="Enter Phone Number" maxlength="10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group col-lg-12">
                                                <label for="chkPassport">
                                                    <input type="checkbox" id="chkPassport" />
                                                    Enter GST Details<span class="check-booking">(Optional)</span>
                                                </label>
                                                <hr />
                                                <div id="dvPassport" style="display: none">
                                                    <div class="bg-5">
                                                        <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">
                                                            <h2 style="border-bottom: 0px;margin-bottom: 0px;">Business Profile</h2>
                                                        </div>
                                                        <div class="container">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="form-group col-lg-5">
                                                                        <label>GST Number</label>
                                                                        <input type="text" class="form-control" id="EG:15dfsdfd" placeholder="Enter First Name">
                                                                    </div>
                                                                    <div class="form-group col-lg-5">
                                                                        <label>Company Name</label>
                                                                        <input type="text" class="form-control" id="Name" placeholder="Enter Company Name">
                                                                    </div>
                                                                    <div class="customer_records_dynamic"></div>
                                                                <div class="form-group col-lg-7">
                                                                    <label>Business Email ID</label>
                                                                    <input type="email" class="form-control" id="email" placeholder="Enyter Email Address">
                                                                </div>
                                                                <div class="form-group col-lg-7">
                                                                    <label>Company Address</label>
                                                                    <input type="email" class="form-control" id="email" placeholder="Enyter Company Address">
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <label>Company Phone Number</label>
                                                                    <input type="email" class="form-control" id="email" placeholder="Enyter Company Address">
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <label>Admin Email ID</label>
                                                                    <input type="email" class="form-control" id="email" placeholder="Enter Email ID">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        <input type="hidden" name="hotel_id" value="<?php echo $hotel_id; ?>">
                                        <input type="hidden" name="option_id" value="<?php echo $option_id; ?>">
                                        <input type="hidden" name="bookingId" value="<?php echo $bookingId; ?>">
                                        <input type="hidden" name="amount" value="<?php echo $hotelSummary['ops'][0]['ris'][0]['tp']; ?>">

                                        <button class="KETBj blGWwt" type="submit"><span class="cpurHQ">Proceed To Payment Options</span></button>
                                    </form>
                                </div>
                            </div>
                        <?php //} ?>


                            <!--<div class="detail-content content-wrapper">   
                                <div class="description detail-box flight-book">
                                    <div class="detail-title"><h3>Your Personal Information</h3></div>
                                    <div class="description-content">
                                        <form>
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" id="Name" placeholder="Enter full name">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Email:</label>
                                                    <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Phone Number:</label>
                                                    <input type="text" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Arrival Date:</label>
                                                    <input type="date" class="form-control" id="arrival-date">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Departure Date:</label>
                                                    <input type="date" class="form-control" id="departure-date">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" id="date" placeholder="Select Date">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>No of Tickets:</label>
                                                    <input type="number" class="form-control" id="phnumber1" placeholder="Select a number">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Gender:</label>
                                                    <select>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Nationality:</label>
                                                    <select>
                                                        <option value="american">American</option>
                                                        <option value="opel">Malaysian</option>
                                                        <option value="audi">German</option>
                                                    </select>   
                                                </div>
                                                <div class="form-group textarea col-lg-12">
                                                    <label>Message:</label>
                                                    <textarea placeholder="Enter a message"></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="checkbox-outer">
                                                        <input type="checkbox" name="vehicle2" value="Car"> I want to receive <a href="#">Let’s Travel</a> promotional offers in the future terms and conditions.
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>    
                                </div>
                                <div class="description detail-box flight-book">
                                    <div class="detail-title"><h3>Your Card Information</h3></div>
                                    <div class="description-content">
                                        <form>
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" id="Name" placeholder="Enter full name in card">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Card Number:</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Enter Card Number">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Booking ID:</label>
                                                    <input type="text" class="form-control" id="phnumber" placeholder="XXXXX">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Expiry Date:</label>
                                                    <input type="date" class="form-control" id="date">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Card Type:</label>
                                                    <select>
                                                        <option value="male">MasterCard</option>
                                                        <option value="female">Paypal</option>
                                                        <option value="other">Visa</option>
                                                        <option value="other">Discover</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="checkbox-outer">
                                                        <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms and conditions.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>    
                                </div>
                                <div class="comment-btn">
                                    <a href="#" class="btn-blue btn-red">Confirm Booking</a>
                                </div>
                            </div>-->
                        </div></div></div>
						<?php //echo '<pre>'; print_r($hotelSummary);?>
						
						<div class="col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">
                                <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"><!--Travelers 1 Adult--></span></h3></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-8">Base Fare</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php $option = count($hotelSummary['ops'][0]['ris']); echo $hotelSummary['ops'][0]['ris'][0]['tfcs']['BF'] * $option; ?>
										<div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content" style="width: 350px;">
                                                    <ul class="pad-0">
													
													
                                                        <!-- <li class="tooltip-heading"><b class="tooltip-b">Taxes &amp; Taxes</b></li> -->
                                                        <li class="tooltip-p lne-hgt">

                                                        <?php foreach ($hotelSummary['ops'][0]['ris'] as $key => $optionvalue) { ?>

                                                            <ul class="df-padd" style="display: flex;align-items: center;border-bottom: 1px solid #ddd;margin-bottom: 10px;">
                                                                
                                                                <li class="lne-hgts" style="width: 270px;border-right: 1px dashed #ddd;">
																<?php
                                                                 echo $optionvalue['rc'];
                                                               // } 
                                                                 ?>	
																</li>
                                                                <li class="tooltip-infopos" style=" left: 80%; font-weight: 600; color: #e41d37;font-size: 15px;padding-left: 8px;"><i class="fa fa-inr"></i> &nbsp;<?php //foreach ($hotelSummary['ops'][0]['ris'] as $key => $optionvalue) {
                                                                     echo $optionvalue['tfcs']['BF']; 
                                                               // }?></li>
                                                            </ul>
                                                            <?php } ?>
                                                        </li>
														
                                               
                                                    </ul>
                                                </div>
                                              </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-8">Taxes &amp; Fees</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php $option = count($hotelSummary['ops'][0]['ris']); echo $hotelSummary['ops'][0]['ris'][0]['tfcs']['TAF'] * $option; ?>
                                        <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Markup</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php //echo $hotelSummary['ops'][0]['ris'][0]['tfcs']['TAF']; ?></li>
                                                            </ul>
                                                        </li> 														
														<li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fees</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php $option = count($hotelSummary['ops'][0]['ris']); echo $hotelSummary['ops'][0]['ris'][0]['tafcs']['TAF']['MF']* $option; ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">GST</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php $option = count($hotelSummary['ops'][0]['ris']); echo $hotelSummary['ops'][0]['ris'][0]['tafcs']['TAF']['MFT']*$option; ?></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                              </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- <div class="input2_wrapper">
                                    <label class="col-md-8">Addons</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> 10
                                            <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Addons</b></li>
                                                        <li class="tooltip-p">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Charity Donation</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> 10</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                              </div>
                                        </span>
                                    </div>
                                </div> -->
                                <div class="clearfix"></div>
                                <div class="border-2px"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-6 mp"><h5 class="mp">Total Amount</h5></label>
                                    <div class="col-md-6 pad-l-r">
                                        <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php  $option = count($hotelSummary['ops'][0]['ris']); echo $hotelSummary['ops'][0]['ris'][0]['tp'] * $option; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <div class="col-md-12 sidebar-item">
                                <div class="detail-title"><h3>Apply Discount<br><span class="fare-sumry">Have Discount/ Promo code to Redeem</span></h3></div>
                                <div class="input2_wrapper">
                                    <form class="form-inline">
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Promo Code" style="margin-top:0px;height: 35px;border-radius: 2px;">
                                      </div>
                                      <button type="submit" class="btn btn-success" style="background-color: #244082;border-color: #244082;">Send</button>
                                    </form>
                                    <!--<label class="col-md-6 booking-m5">Cabin:</label>
                                    <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                        <span class="red">Economy</span>
                                    </div>-->
                                </div>
                                <!--<div class="clearfix"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-6 booking-m5">Fees</label>
                                    <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                        <span class="red">Included</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-6 booking-m5">TOTAL</label>
                                    <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                        <span class="red">$680</span>
                                    </div>
                                </div>-->
                            </div>
                            <div class="clearfix"></div>
                            <!--<div class="margin-top"></div>
                            <div class="border-3px"></div>-->
                            <div class="clearfix"></div>
                            <!--<div class="margin-top"></div>
                            <!--<div class="col-md-12 sidebar-item">
                                <div class="detail-title"><h3>Accept & Confirm</h3></div>
                                <input type="checkbox"> <b style="color:#464646;padding-left:10px;font-weight: 400;">I agree to the booking conditions</b>
                                <div class="clearfix"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:18px;font-size:16px;">GRAND TOTAL:</label>
                                    <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                        <span class="red" style="font-size:26px;">$680.00</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="margin-top"></div>
                                <a href="http://122.176.21.183/2020/projects/incredible/flights/thankyou" class="btn btn-default btn-cf-submit3">BOOKING NOW</a>

                            </div>-->
                        </div>
						
						
						
                   




				   </div>
                </div>
            </section>
            <?php include('includes/footer.php'); ?>
            <?php include('includes/js.php'); ?>
        </div>
        <script>
            $('.extra-fields-customer').click(function() {
              $('.customer_records').clone().appendTo('.customer_records_dynamic');
              $('.customer_records_dynamic .customer_records').addClass('single remove');
              $('.single .extra-fields-customer').remove();
              $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');
              $('.customer_records_dynamic > .single').attr("class", "remove");

              $('.customer_records_dynamic input').each(function() {
                var count = 0;
                var fieldname = $(this).attr("name");
                $(this).attr('name', fieldname + count);
                count++;
              });

            });

            $(document).on('click', '.remove-field', function(e) {
              $(this).parent('.remove').remove();
              e.preventDefault();
            });
        </script>
        <script>
            $(function () {
                $("#chkPassport").click(function () {
                    if ($(this).is(":checked")) {
                        $("#dvPassport").show();
                        $("#AddPassport").hide();
                    } else {
                        $("#dvPassport").hide();
                        $("#AddPassport").show();
                    }
                });
            });
        </script>
        <script>
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
        </script>
        <script>

        </script>
		
		
 
    </body>
</html>