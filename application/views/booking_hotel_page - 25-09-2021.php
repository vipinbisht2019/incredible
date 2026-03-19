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
                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                        </div>-->
                        <div id="content" class="col-lg-8">

                        <?php //echo '<pre>'; print_r($hotelSummary); ?>

                            <div class="bg-3" style="padding-bottom: 20px;">
                                <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">
                                    <div class="col-md-12">
                                        <h2 style="border-bottom: 0px;margin-bottom: 0px;">HOTEL Info</h2>
                                        
                                    </div>
                                </div>
                                <div class="row padd">
                                    <div class="col-md-3">
                                        <img src="<?php echo $hotelSummary['img'][0]['tns']; ?>" class="booking-img">
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
                                            <span class="location"><?php echo $hotelSummary['ad']['adr']; ?> , <?php echo $hotelSummary['ad']['city']['name']; ?> , <?php echo $hotelSummary['ad']['country']['name']; ?>
                                            </span>
                                        </div>
                                        <div class="rating_1">
                                            <span class="rating_2"><?php echo $hotelSummary['rt']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row bookinbg-padd">
                                        <div class="col-md-3">
                                            <span class="check-booking">Check In</span>
                                            <h5 class="check-head">Sunday, 22 Aug 2021</h5>
                                            <span class="check-booking">12:00 PM</span>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="check-booking">Check Out</span>
                                            <h5 class="check-head">Wed, 25 Aug 2021</h5>
                                            <span class="check-booking">12:00 PM</span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="check-booking">Guests</span>
                                            <h5 class="check-head">2 Guests | 1 Room</h5>
                                            <span class="check-booking">1 Night</span>
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

                            <div class="bg-3">
                                <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">
                                    <div class="col-md-12">
                                        <h2 style="border-bottom: 0px;margin-bottom: 0px;">Guest Details</h2>
                                        
                                    </div>
                                </div>
                                <div class="container">
                                    <form>
                                        <div class="row">
                                            <div class="customer_records">
                                                <div class="form-group col-lg-2">
                                                    <label>Title:</label>
                                                    <select>
                                                        <option selected>Mr.</option>
                                                        <option>Mrs.</option>
                                                        <option>Miss</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-5">
                                                    <label>First Name:</label>
                                                    <input type="text" class="form-control" id="Name" placeholder="Enter First Name">
                                                </div>
                                                <div class="form-group col-lg-5">
                                                    <label>Last Name:</label>
                                                    <input type="text" class="form-control" id="Name" placeholder="Enter Last Name">
                                                </div>
                                                <div class="col-lg-12"><a class="extra-fields-customer" href="javascript:;">Add Guest</a></div>
                                            </div>
                                            <div class="customer_records_dynamic"></div>
                                            <div class="form-group col-lg-7">
                                                <label>Email Address:</label>
                                                <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                                            </div>
                                            <div class="form-group col-lg-7 col-left-padding">
                                                <label>Mobile Number:</label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <select style="color: #444;height: 34px;">
                                                            <option>+91 India</option>
                                                            <option>+247 United Arab Emirates</option>
                                                            <option>+93 Afganistan</option>
                                                            <option>+355 Albania</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="phnumber" placeholder="Enter Phone Number">
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
                                        <button class="KETBj blGWwt"><span class="cpurHQ">Proceed To Payment Options</span></button>
                                    </form>
                                </div>
                            </div>



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

                        <div class="col-md-4 booking-row">

                            <div class="bg-3" style="padding-bottom: 20px;">
                                <div class="row" style="margin-left: 0;margin-right: 0;">
                                    <div class="col-md-12">
                                        <h2 style="margin-bottom: 0px;">Price Summary<span class="full-brekup"><a href="#">View Full Breakup</a></span></h2>
                                        <!--<span><a href="#">View Full Breakup</a></span>-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="col-md-9">
                                                    <div class="bIuXdW pt-10">Room Charges (1 room x 1 night)</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div color="#4f525a" class="fBYJFu pt-10">₹3720</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="col-md-9">
                                                    <div class="bIuXdW">Total Discounts
                                                        <span class="lfRzgp">
                                                            <div class="bzznNS"><b><span id="review-price-discount">53%</span></b>
                                                                <span>off</span>
                                                            </div>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="col-md-3">
                                            <div color="#18A160" class="eQOacg">-₹1986</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deaOyU"></div>
                                <div class="row">
                                    <div class="col-md-12 hyXXJv">
                                        <div class="col-md-9">
                                            <div class="bIuXdW">Price after discounts</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div color="#4f525a" class="fBYJFu">₹1734</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 hyXXJv">
                                        <div class="col-md-9">
                                            <div class="bIuXdW">Taxes & Fees</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div color="#4f525a" class="fBYJFu">₹295</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deaOyU"></div>
                                <div class="row">
                                    <div class="col-md-12 hyXXJv">
                                        <div class="col-md-9">
                                            <div class="gsyVjo">Pay Now</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div color="#141823" class="cWjYSc">₹2029</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="cisklD">
                                        <a class="npTjr">EMI Starts at ₹ 1150/month</a>
                                    </div>
                                </div>

                                <div class="jRkHbG">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="djPUGU">
                                            <path fill="#2276E3" d="M18.653 17.727a.277.277 0 01.273.293l-.281 3.933a1.916 1.916 0 01-1.904 1.774H13.94a.272.272 0 01-.273-.272V18c0-.15.122-.273.273-.273zm-6.896 0c.15 0 .272.122.272.273v5.455c0 .15-.122.272-.272.272H8.954c-1-.003-1.83-.776-1.903-1.774l-.282-3.933a.274.274 0 01.272-.293zM13.509 6.05a2.777 2.777 0 014.721 1.209 2.78 2.78 0 01-.794 2.718 7.22 7.22 0 01-2.51 1.206h3.922a1.911 1.911 0 011.909 1.909v1.09a1.924 1.924 0 01-1.91 1.91H13.94a.273.273 0 01-.273-.273v-4.636H12.03v4.636c0 .15-.122.273-.272.273h-4.91a1.924 1.924 0 01-1.908-1.91v-1.09c0-1.054.855-1.908 1.909-1.91h3.933a7.178 7.178 0 01-2.509-1.205 2.779 2.779 0 013.928-3.927c.275.32.496.683.654 1.075.159-.392.38-.755.655-1.075zM2.727 11.727a1.091 1.091 0 01.001 2.182H1.09a1.091 1.091 0 010-2.181zm21.945 0a1.09 1.09 0 010 2.182h-1.636a1.09 1.09 0 11-.001-2.182zm-8.777-4.144a.598.598 0 00-.845.006 6.22 6.22 0 00-.61 1.456 6.432 6.432 0 001.461-.618.597.597 0 00-.006-.844zm-5.26-.004a.597.597 0 00-.841.848c.46.266.95.474 1.46.618a6.246 6.246 0 00-.62-1.466zM3.781 3.763a1.092 1.092 0 011.53-.014l1.157 1.157a1.09 1.09 0 11-1.542 1.542L3.769 5.292a1.093 1.093 0 01.013-1.53zm16.67-.014a1.092 1.092 0 011.542 1.543l-1.158 1.156a1.09 1.09 0 01-1.542-1.543zM12.847 0c.602 0 1.09.488 1.09 1.09v1.637a1.09 1.09 0 11-2.181.001V1.09a1.09 1.09 0 011.09-1.091z"></path>
                                        </svg>
                                        <a class="npTjr" data-target="#login" data-toggle="modal" style="cursor: pointer;">Login now &amp; get at a lower price</a>
                                        <div id="login" class="modal fade" role="dialog">
                              
                                        <div class="cm__modalWraper centerMode ">
                                            <div class="cm__modal">
                                                <div class="cm__modalContent">
                                                    <div class="lgContainer">
                                                        <div class="lgBnr gr-hotels">
                                                            <div>
                                                                <h3 class="lgBnr__heading">
                                                                    <span class="gr-quickSandRegular">Comfy
                                                                    </span> Stays
                                                                </h3>
                                                                <ul class="benefitsList gr-appendTop15">
                                                                    <li class="benefitsList__item">
                                                                        <span class="logSprite icOrangeTick gr-appendRight10"></span>
                                                                        <span class="benefitsList__item--text">Enjoy exclusive deals</span>
                                                                    </li>
                                                                    <li class="benefitsList__item">
                                                                        <span class="logSprite icOrangeTick gr-appendRight10"></span>
                                                                        <span class="benefitsList__item--text">Save traveler details</span>
                                                                    </li>
                                                                    <li class="benefitsList__item">
                                                                        <span class="logSprite icOrangeTick gr-appendRight10"></span>
                                                                        <span class="benefitsList__item--text">Manage and modify bookings</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="ofrBnr">
                                                                <div class="ofrBnr__left">
                                                                    <span class="ofrBnr__left--icon logSprite icGift"></span>
                                                                </div>
                                                                <div class="ofrBnr__right">
                                                                    <p class="gr-font16 gr-greenText">
                                                                        <span>Get up to</span>
                                                                        <span class="lsPop__offer--discount">20% off</span>
                                                                    </p>
                                                                    <p class="gr-font12 gr-append-bottom3">on your first Hotel booking</p>
                                                                    <p class="gr-font14 gr-quicksand gr-quickSandBold gr-blueText">Use Coupon : WELCOME</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="lgRightSection ">
                                                            <button data-dismiss="modal" class="close" style="position: relative;bottom: 25px;">&times;</button>
                                                            <div class="loginCont">
                                                                <div>
                                                                    <h3 class="gr-quicksand gr-quickSandBold gr-blackText gr-append-bottom30 gr-font22">Login/Signup</h3>
                                                                    <form autocomplete="on">
                                                                        <div class="loginCont__inputwrap   ">
                                                                            <span class="loginCont__label">Enter your Mobile Number</span>
                                                                            <span class="loginCont__code">+91 -</span>
                                                                            <input class="loginCont__input" type="text" maxlength="10" name="phone" value="">
                                                                        </div>
                                                                    </form>
                                                                    <button class="loginCont__btn ">Continue</button>
                                                                    <!--<input class="loginCont__btn " type="button" value="Continue">-->
                                                                </div>
                                                                <div class="loginCont__tnc">
                                                                    <p class="gr-font12 gr-lineHight18">By proceeding, you agree to Incredible Vacations <a href="https://www.goibibo.com/info/privacy/" target="_blank">Privacy Policy</a>, <a href="https://www.goibibo.com/info/user-agreement/" target="_blank">User Agreement</a> and <a href="https://www.goibibo.com/info/terms-of-services/" target="_blank">Terms of Service</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cm__modalBackdrop" aria-hidden="true"></div>
                                        </div>



                                      <!--<div class="modal-dialog">
                                        
                                        <div class="modal-content">
                                          <div class="modal-body">
                                            <button data-dismiss="modal" class="close">&times;</button>
                                            <div class="container1" id="container">
                                                <div class="form-container sign-up-container">
                                                    <form action="#">
                                                        <h1>Create Account</h1>
                                                        <div class="social-container">
                                                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                                        </div> 
                                                        <span>or use your email for registration</span>
                                                        <input type="text" placeholder="Name" />
                                                        <input type="email" placeholder="Email" />
                                                        <input type="password" placeholder="Password" />
                                                        <button>Sign Up</button>
                                                    </form>
                                                </div>
                                                <div class="form-container sign-in-container">
                                                    <form action="#">
                                                        <h1>Sign in</h1>
                                                        <div class="social-container">
                                                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                        <span>or use your account</span>
                                                        <input type="email" placeholder="Email" />
                                                        <input type="password" placeholder="Password" />
                                                        <a href="#">Forgot your password?</a>
                                                        <button>Sign In</button>
                                                    </form>
                                                </div>
                                                <div class="overlay1-container">
                                                    <div class="overlay1">
                                                        <div class="overlay1-panel overlay1-left">
                                                            <h1>Welcome Back!</h1>
                                                            <p>To keep connected with us please login with your personal info</p>
                                                            <button class="ghost" id="signIn">Sign In</button>
                                                        </div>
                                                        <div class="overlay1-panel overlay1-right">
                                                            <h1>Hello, Friend!</h1>
                                                            <p>Enter your personal details and start journey with us</p>
                                                            <button class="ghost" id="signUp">Sign Up</button>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div> --> 
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="bg-3" style="padding-bottom: 10px;">
                                <div class="row" style="margin-left: 0;margin-right: 0;">
                                    <div class="col-md-12">
                                        <h2 style="margin-bottom: 0px;">Price Details<span class="full-brekup"><a href="#">View Full Breakup</a></span></h2>
                                        <!--<span><a href="#">View Full Breakup</a></span>-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="col-md-9">
                                                    <div class="bIuXdW pt-10">Room Charges (1 room x 1 night)</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div color="#4f525a" class="fBYJFu pt-10">₹3720</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="col-md-9">
                                                <div class="bIuXdW">Discount</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div color="#18A160" class="eQOacg">-₹1637</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="jUVhOj">
                                                    <div color="#141823" class="iAodGy">Base Price</div>
                                                    <div color="#141823" class="aroJS">₹2083</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="fNAiZG">- Offers</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="col-md-9">
                                                <div color="#0ea90e" class="ejDrcz">GETSETGO</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div color="#18A160" class="eQOacg">-₹1637</div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="jUVhOj">
                                                    <div color="#141823" class="iAodGy">Price after discounts</div>
                                                    <div color="#141823" class="aroJS">₹1236</div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="fNAiZG">+ Taxes & Fees</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="col-md-9">
                                                    <div class="bIuXdW">GST on base price</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div color="#4f525a" class="fBYJFu">₹249</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 hyXXJv">
                                            <div class="col-md-9">
                                                    <div class="bIuXdW">Service Fee</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div color="#4f525a" class="fBYJFu">₹46</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="jUVhOj">
                                                    <div color="#141823" class="HhIRm">Payable Now</div>
                                                    <div color="#141823" class="jpZNId">₹2029</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="cisklD">
                                            <a class="npTjr">EMI Starts at ₹ 1150/month</a>
                                        </div>
                                    </div>

                                    <div class="jRkHbG">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="djPUGU">
                                            <path fill="#2276E3" d="M18.653 17.727a.277.277 0 01.273.293l-.281 3.933a1.916 1.916 0 01-1.904 1.774H13.94a.272.272 0 01-.273-.272V18c0-.15.122-.273.273-.273zm-6.896 0c.15 0 .272.122.272.273v5.455c0 .15-.122.272-.272.272H8.954c-1-.003-1.83-.776-1.903-1.774l-.282-3.933a.274.274 0 01.272-.293zM13.509 6.05a2.777 2.777 0 014.721 1.209 2.78 2.78 0 01-.794 2.718 7.22 7.22 0 01-2.51 1.206h3.922a1.911 1.911 0 011.909 1.909v1.09a1.924 1.924 0 01-1.91 1.91H13.94a.273.273 0 01-.273-.273v-4.636H12.03v4.636c0 .15-.122.273-.272.273h-4.91a1.924 1.924 0 01-1.908-1.91v-1.09c0-1.054.855-1.908 1.909-1.91h3.933a7.178 7.178 0 01-2.509-1.205 2.779 2.779 0 013.928-3.927c.275.32.496.683.654 1.075.159-.392.38-.755.655-1.075zM2.727 11.727a1.091 1.091 0 01.001 2.182H1.09a1.091 1.091 0 010-2.181zm21.945 0a1.09 1.09 0 010 2.182h-1.636a1.09 1.09 0 11-.001-2.182zm-8.777-4.144a.598.598 0 00-.845.006 6.22 6.22 0 00-.61 1.456 6.432 6.432 0 001.461-.618.597.597 0 00-.006-.844zm-5.26-.004a.597.597 0 00-.841.848c.46.266.95.474 1.46.618a6.246 6.246 0 00-.62-1.466zM3.781 3.763a1.092 1.092 0 011.53-.014l1.157 1.157a1.09 1.09 0 11-1.542 1.542L3.769 5.292a1.093 1.093 0 01.013-1.53zm16.67-.014a1.092 1.092 0 011.542 1.543l-1.158 1.156a1.09 1.09 0 01-1.542-1.543zM12.847 0c.602 0 1.09.488 1.09 1.09v1.637a1.09 1.09 0 11-2.181.001V1.09a1.09 1.09 0 011.09-1.091z"></path>
                                        </svg>
                                        <a class="npTjr" data-target="#login" data-toggle="modal" style="cursor: pointer;">Login now &amp; get at a lower price</a>
                                        <div id="login" class="modal fade" role="dialog">
                              
                                        <div class="cm__modalWraper centerMode ">
                                            <div class="cm__modal">
                                                <div class="cm__modalContent">
                                                    <div class="lgContainer">
                                                        <div class="lgBnr gr-hotels">
                                                            <div>
                                                                <h3 class="lgBnr__heading">
                                                                    <span class="gr-quickSandRegular">Comfy
                                                                    </span> Stays
                                                                </h3>
                                                                <ul class="benefitsList gr-appendTop15">
                                                                    <li class="benefitsList__item">
                                                                        <span class="logSprite icOrangeTick gr-appendRight10"></span>
                                                                        <span class="benefitsList__item--text">Enjoy exclusive deals</span>
                                                                    </li>
                                                                    <li class="benefitsList__item">
                                                                        <span class="logSprite icOrangeTick gr-appendRight10"></span>
                                                                        <span class="benefitsList__item--text">Save traveler details</span>
                                                                    </li>
                                                                    <li class="benefitsList__item">
                                                                        <span class="logSprite icOrangeTick gr-appendRight10"></span>
                                                                        <span class="benefitsList__item--text">Manage and modify bookings</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="ofrBnr">
                                                                <div class="ofrBnr__left">
                                                                    <span class="ofrBnr__left--icon logSprite icGift"></span>
                                                                </div>
                                                                <div class="ofrBnr__right">
                                                                    <p class="gr-font16 gr-greenText">
                                                                        <span>Get up to</span>
                                                                        <span class="lsPop__offer--discount">20% off</span>
                                                                    </p>
                                                                    <p class="gr-font12 gr-append-bottom3">on your first Hotel booking</p>
                                                                    <p class="gr-font14 gr-quicksand gr-quickSandBold gr-blueText">Use Coupon : WELCOME</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="lgRightSection ">
                                                            <button data-dismiss="modal" class="close" style="position: relative;bottom: 25px;">&times;</button>
                                                            <div class="loginCont">
                                                                <div>
                                                                    <h3 class="gr-quicksand gr-quickSandBold gr-blackText gr-append-bottom30 gr-font22">Login/Signup</h3>
                                                                    <form autocomplete="on">
                                                                        <div class="loginCont__inputwrap   ">
                                                                            <span class="loginCont__label">Enter your Mobile Number</span>
                                                                            <span class="loginCont__code">+91 -</span>
                                                                            <input class="loginCont__input" type="text" maxlength="10" name="phone" value="">
                                                                        </div>
                                                                    </form>
                                                                    <button class="loginCont__btn ">Continue</button>
                                                                    <!--<input class="loginCont__btn " type="button" value="Continue">-->
                                                                </div>
                                                                <div class="loginCont__tnc">
                                                                    <p class="gr-font12 gr-lineHight18">By proceeding, you agree to Incredible Vacations <a href="https://www.goibibo.com/info/privacy/" target="_blank">Privacy Policy</a>, <a href="https://www.goibibo.com/info/user-agreement/" target="_blank">User Agreement</a> and <a href="https://www.goibibo.com/info/terms-of-services/" target="_blank">Terms of Service</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cm__modalBackdrop" aria-hidden="true"></div>
                                        </div>



                                      <!--<div class="modal-dialog">
                                        
                                        <div class="modal-content">
                                          <div class="modal-body">
                                            <button data-dismiss="modal" class="close">&times;</button>
                                            <div class="container1" id="container">
                                                <div class="form-container sign-up-container">
                                                    <form action="#">
                                                        <h1>Create Account</h1>
                                                        <div class="social-container">
                                                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                                        </div> 
                                                        <span>or use your email for registration</span>
                                                        <input type="text" placeholder="Name" />
                                                        <input type="email" placeholder="Email" />
                                                        <input type="password" placeholder="Password" />
                                                        <button>Sign Up</button>
                                                    </form>
                                                </div>
                                                <div class="form-container sign-in-container">
                                                    <form action="#">
                                                        <h1>Sign in</h1>
                                                        <div class="social-container">
                                                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                        <span>or use your account</span>
                                                        <input type="email" placeholder="Email" />
                                                        <input type="password" placeholder="Password" />
                                                        <a href="#">Forgot your password?</a>
                                                        <button>Sign In</button>
                                                    </form>
                                                </div>
                                                <div class="overlay1-container">
                                                    <div class="overlay1">
                                                        <div class="overlay1-panel overlay1-left">
                                                            <h1>Welcome Back!</h1>
                                                            <p>To keep connected with us please login with your personal info</p>
                                                            <button class="ghost" id="signIn">Sign In</button>
                                                        </div>
                                                        <div class="overlay1-panel overlay1-right">
                                                            <h1>Hello, Friend!</h1>
                                                            <p>Enter your personal details and start journey with us</p>
                                                            <button class="ghost" id="signUp">Sign Up</button>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div> --> 
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="bg-3" style="padding-bottom: 20px;">
                                <div class="row" style="margin-left: 0;margin-right: 0;">
                                    <div class="col-md-12">
                                        <h2 style="margin-bottom: 0px;">Offers</h2>
                                    </div>


                                    <div class="gYCDEC">
                                        <div class="lmGqWT">
                                            <div class="eHRHNU iXclNV">
                                                <div class="dOPDKv">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="jTxtvD gfkQyL">
                                                        <path d="M32 16a5.811 5.811 0 00-3.029-5.147.332.332 0 01-.16-.385 5.888 5.888 0 00-7.279-7.28.332.332 0 01-.385-.16 5.89 5.89 0 00-10.294 0 .332.332 0 01-.385.16 5.888 5.888 0 00-7.279 7.28.332.332 0 01-.16.385 5.887 5.887 0 000 10.293.335.335 0 01.16.387 5.888 5.888 0 007.279 7.279c.15-.044.31.023.385.16a5.89 5.89 0 0010.294 0 .332.332 0 01.385-.16 5.887 5.887 0 007.279-7.279.336.336 0 01.16-.387A5.805 5.805 0 0032 15.999zm-11.123 7.315a2.438 2.438 0 112.437-2.44v.003a2.438 2.438 0 01-2.437 2.437zm-10.438.133a1.333 1.333 0 01-1.881-1.881L21.562 8.563a1.333 1.333 0 111.881 1.881zm.685-14.763a2.439 2.439 0 11-2.439 2.439v-.001a2.439 2.439 0 012.439-2.437z"></path>
                                                    </svg>
                                                    <span class="kDBcQa">GETSETGO</span>
                                                </div>
                                                <div class="eHRHNU kYOZbD">
                                                    <span class="gOoXcC">APPLIED</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="eTMori jRuDuU">
                                                        <path d="M16 31.333c8.468 0 15.333-6.865 15.333-15.333S24.468.667 16 .667.667 7.532.667 16v-.001C.676 24.463 7.535 31.323 16 31.333zM9.4 11.287a1.333 1.333 0 011.852-1.918l.033.033 4.479 4.479c.13.13.341.13.471 0l4.479-4.479a1.333 1.333 0 011.918 1.852l-.033.033-4.479 4.479a.333.333 0 000 .471l4.479 4.479a1.333 1.333 0 01-1.852 1.918l-.033-.033-4.479-4.479a.333.333 0 00-.471 0l-4.479 4.479A1.332 1.332 0 019.4 20.715l4.479-4.479a.333.333 0 000-.471z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="fVGWFo dlvHvL">
                                                <p class="foWTiU">Congratulations! You have saved ₹349 with GETSETGO. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dnfaWu">
                                        <div class="lmGqWT">
                                            <div class="eHRHNU iXclNV">
                                                <div class="dOPDKv">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="jTxtvD gfkQyL">
                                                        <path d="M32 16a5.811 5.811 0 00-3.029-5.147.332.332 0 01-.16-.385 5.888 5.888 0 00-7.279-7.28.332.332 0 01-.385-.16 5.89 5.89 0 00-10.294 0 .332.332 0 01-.385.16 5.888 5.888 0 00-7.279 7.28.332.332 0 01-.16.385 5.887 5.887 0 000 10.293.335.335 0 01.16.387 5.888 5.888 0 007.279 7.279c.15-.044.31.023.385.16a5.89 5.89 0 0010.294 0 .332.332 0 01.385-.16 5.887 5.887 0 007.279-7.279.336.336 0 01.16-.387A5.805 5.805 0 0032 15.999zm-11.123 7.315a2.438 2.438 0 112.437-2.44v.003a2.438 2.438 0 01-2.437 2.437zm-10.438.133a1.333 1.333 0 01-1.881-1.881L21.562 8.563a1.333 1.333 0 111.881 1.881zm.685-14.763a2.439 2.439 0 11-2.439 2.439v-.001a2.439 2.439 0 012.439-2.437z"></path>
                                                    </svg>
                                                    <span class="kDBcQa">ENTER PROMO CODE</span>
                                                </div>
                                            </div>
                                            <div class="duJOra">
                                                <div class="eyiRrE">
                                                    <input type="text" placeholder="Enter Promo Code" class="hvNxbm">
                                                </div>
                                                <button class="KETBj QdsqI">APPLY</button>
                                                <a class="npTjr"> VIEW ALL PROMOCODES </a>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>

                            <!--<div class="detail-title"><h3>HOTEL SUMMARY</h3></div>
                            <div class="input2_wrapper">
                                <label class="col-md-6 booking-m5">Room</label>
                                <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                    <span class="red">Single Room</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="input2_wrapper">
                                <label class="col-md-6 booking-m5">Price per night</label>
                                <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                    <span class="red">$360</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="input2_wrapper">
                                <label class="col-md-6 booking-m5">Check in</label>
                                <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                    <span class="red">20 - Feb - 2017</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="input2_wrapper">
                                <label class="col-md-6 booking-m5">Check out</label>
                                <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                    <span class="red">22 - Feb - 2017</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <div class="detail-title"><h3>CHARGES</h3></div>
                            <div class="input2_wrapper">
                                <label class="col-md-6 booking-m5">10 Nights</label>
                                <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                    <span class="red">Single Room</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
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
                            </div>
                            <div class="clearfix"></div>
                            <div class="margin-top" style="margin-top:40px;"></div>
                            <div class="border-3px"></div>
                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <div class="detail-title"><h3>ACCEPT AND CONFIRM</h3></div>
                            <input type="checkbox"> <b style="color:#464646;padding-left:10px;font-weight: 400;">I agree to the booking conditions</b>
                            <div class="margin-top"></div>
                            <div class="clearfix"></div>
                            <div class="input2_wrapper">
                                <label class="col-md-6" style="padding-left:0;padding-top:18px;font-size:16px;">GRAND TOTAL:</label>
                                <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                    <span class="red" style="font-size:26px;">$680.00</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <a href="<?php echo base_url('hotels/success')?>" class="btn btn-default btn-cf-submit3">RESERVE NOW</a>-->
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