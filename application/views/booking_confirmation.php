<?php //echo '<pre>'; print_r($hotelOrder); ?>
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
                .selected-room-wrapper {
                    border-bottom: 1px solid #e5e5e5;
                    padding: 10px;
                    margin: 0;
                    margin-top: 15px;
                }
                .selected__room {
                    margin: 0;
                    padding: 8px;
                    display: -ms-flexbox;
                    display: flex;
                    box-sizing: border-box;
                }
                .selected__room--category {
                    width: 35%;
                    float: left;
                    font-size: .9em;
                    position: relative;
                }
                .selected__room--category__roomname {
                    width: 65%;
                    float: left;
                }
                .selected__room--incl {
                    font-size: .7em;
                    margin-right: 5px;
                }
                .selected__room--category:after {
                    content: "";
                    position: absolute;
                    width: 1px;
                    height: 100%;
                    background: #ccc;
                    right: 0;
                    top: 0;
                }
                .selected__room--refundable {
                    padding: 0 0 0 10px;
                    position: relative;
                }
                .selected__room--breakfast {
                    font-size: .7em;
                    display: block;
                    color: #999;
                }
                .contact__details--list--paxdetails {
                    font-size: 1.1em;
                    color: #666;
                }
                .contact__details--list--details {
                    color: #666;
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


            <div class="confirmation__header" style="min-height: 100px; background-image: linear-gradient(rgb(240, 249, 255) 0px, rgb(255, 255, 255)); padding: 15px; border-bottom: 1px solid rgb(229, 229, 229);">
                <div class="hotel__container status__header" style="max-width: 1280px; width: 100%; margin: 0px auto; padding: 0px 15px; box-sizing: border-box;">
                    <img class="confirmation__header--successicon" src="<?php echo base_url("assets/images/booking.png")?>" alt="Success Icon" style="float: left;width: 80px;">
                        <span class="confirmation__header--heading" style="font-size: 1.5em; color: rgb(74, 163, 1); margin: 15px 0px 0px; display: inline-block; vertical-align: top;">
                                    <?php if($hotelOrder[0]['status'] == 'SUCCESS'){ 

                                                echo "Success";

                                     } ?>
                            <span class="confirmation__header--bookingid" style="display: block; font-size: 0.6em; color: rgb(134, 134, 134);">Bookingn ID : 
                                <a href="#"> 
                                    <span class="confirmation__header--number" style="color: rgb(51, 51, 51);"><?php echo $hotelOrder[0]['booking_id']; ?></span>
                                </a>
                            </span>
                        </span>
                         <div class="pull-right">
                            <div class="actions__wrapper">
                                <div class="dropdown">
                                  <button onclick="myFunction()" class="dropbtn actions__wrapper--button">More Options <img src="<?php echo base_url("assets/images/angledown.png")?>" style="width: 8px; vertical-align: middle;"></button>
                                  <div id="myDropdown" class="dropdown-content">
                                    <a href="#"><i class="fa fa-print" aria-hidden="true"></i> Print Voucher</a>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download as PDF</a>
                                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email Voucher</a>
                                    <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Invoice for Agency</a>
                                    <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Invoice for Customer</a>
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Go to cart Detail</a>
                                  </div>
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                </div>



            <section class="flight-destinations">
                <div class="container">
                    <div class="row">                        
                        <div id="content" class="col-lg-9 col-md-9">
                            <div class="bg-3" style="padding-bottom: 20px;">
                                <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">                                    
                                </div>
                                <div class="row padd">
                                   <!-- <div class="col-md-3">
                                        <!-- <img src="<?php //echo @$hotelSummary['img'][0]['tns']; ?>" class="booking-img"> -->
                                        <?php 
                                        // if($hotelOrder[0]['status'] == 'SUCCESS'){ 

                                        //     echo "Success";

                                        //  } 
                                         ?>
                                         <!-- <p>Bookingn ID : <?php //echo $hotelOrder[0]['booking_id']; ?></p> -->

                                    <!--</div>-->
                                    <div class="col-md-12">
                                        <div class="">
                                        <?php if($hotelOrder[0]['hotelOrderDetails']['hotel_rating']== 1){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            
                                        <?php }elseif($hotelOrder[0]['hotelOrderDetails']['hotel_rating'] == 2){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">


                                        <?php }elseif($hotelOrder[0]['hotelOrderDetails']['hotel_rating'] == 3){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">

                                        <?php }elseif($hotelOrder[0]['hotelOrderDetails']['hotel_rating'] == 4){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">

                                        <?php }elseif($hotelOrder[0]['hotelOrderDetails']['hotel_rating'] == 5){ ?> 

                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">
                                            <img src="<?php echo base_url('assets/images/star1.png')?>">

                                        <?php } ?>
                                        </div>
                                        <h5 class="hch"><?php echo $hotelOrder[0]['hotelOrderDetails']['hotel_name']; ?></h5>
                                        <div class="add_pin_1 add_pin" style="padding-bottom: 0px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="map_mark_1 map_mark_2">
                                                <path d="M22.301 24.38a1.334 1.334 0 10-.224 2.658 39.92 39.92 0 015.035.697.333.333 0 010 .651A53.38 53.38 0 0116 29.334a53.376 53.376 0 01-11.111-.948.333.333 0 010-.651 39.257 39.257 0 014.981-.693 1.333 1.333 0 00-.227-2.656c-9.644.815-9.644 2.815-9.644 3.673 0 3.557 11.089 3.941 16 3.941s16-.384 16-3.941c0-.859 0-2.859-9.699-3.679zM16 28.8c.455 0 .878-.232 1.123-.615 2.611-4.084 8.683-14.048 8.683-18.381 0-5.416-4.391-9.807-9.807-9.807S6.192 4.388 6.192 9.804c0 4.333 6.072 14.299 8.684 18.381.244.385.669.617 1.124.615zM11.333 9.333A4.667 4.667 0 1116 14a4.667 4.667 0 01-4.667-4.667z"></path>
                                            </svg>
                                            <span class="location"><?php echo $hotelOrder[0]['hotelOrderDetails']['hotel_address']; ?> ,<br> <?php echo $hotelOrder[0]['hotelOrderDetails']['hotel_city']; ?> , <?php echo $hotelOrder[0]['hotelOrderDetails']['hotel_country']; ?>
                                            </span>
                                            

                                            <?php //echo  $departureDate = date("D,d M",strtotime($completeResult[0]['departureTime']));?>
                                        </div>
                                        <span style="font-size:0.7em;">
                                            <strong>Last Cancellation Date : <?php echo $hotelCancelDate = date("D d, M h:i A",strtotime($hotelOrder[0]['hotelOrderRoomDetails']['hotel_room_deadline'])); ?></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row bookinbg-padd">
                                        <div class="col-md-3">
                                            <span class="check-booking">Check In</span>
                                            <h5 class="check-head"><?php echo $checkinDate = date("d/m/Y",strtotime($hotelOrder[0]['hotelOrderRoomDetails']['hotel_checkin_date'])); ?> </h5>
                                            <!-- <span class="check-booking">12:00 PM</span> -->
                                        </div>
                                        <div class="col-md-3">
                                            <span class="check-booking">Check Out</span>
                                            <h5 class="check-head"><?php echo $checkinDate = date("d/m/Y",strtotime($hotelOrder[0]['hotelOrderRoomDetails']['hotel_checkout_date'])); ?></h5>
                                            <!-- <span class="check-booking">12:00 PM</span> -->
                                        </div>
                                        <div class="col-md-6">
                                            <span class="check-booking">Guests</span>
                                            <h5 class="check-head">2 Guests | 1 Room</h5>
                                            <span class="check-booking">
                                            
                                            <?php 

                                                $checkinDate  = date("Y-m-d",strtotime($hotelOrder[0]['hotelOrderRoomDetails']['hotel_checkin_date']));
                                                $checkoutDate  = date("Y-m-d",strtotime($hotelOrder[0]['hotelOrderRoomDetails']['hotel_checkout_date']));

                                                $diff = abs(strtotime($checkoutDate) - strtotime($checkinDate));
                                                $years = floor($diff / (365*60*60*24));
                                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                            ?>
                                            
                                            <?php echo $days; ?> Night</span>
                                        </div>

                                    </div>

                                </div>
                                
                                
                                <div class="selected-room-wrapper" style="border: 1px solid rgb(229, 229, 229); padding: 10px; margin-right: 10px; margin-top: 15px;">
                                    <div class="selected__room" style="margin: 0px; padding: 8px; display: flex; box-sizing: border-box;">
                                        <div class="selected__room--category" style="width: 40%; float: left; font-size: 0.9em;">
                                            <div class="selected__room--category__roomname" style="width: 65%; display: inline-block; color: #000;    font-weight: 400;"><?php echo $hotelOrder[0]['hotelOrderRoomDetails']['hotel_room_type']; ?> </div>
                                            <div class="selected__room--incl" style="font-size: 0.8em;font-weight: 400; margin-right: 5px; color: #000; display: inline-block;">Incl : <?php echo $hotelOrder[0]['hotelOrderRoomDetails']['hotel_meal_bases']; ?></div>
                                        </div>
                                        <div class="selected__room--refundable" style="padding: 3px 0px 0px 10px; position: relative;">
                                            <span class="selected__room--breakfast">
                                                <ul class="contact__details--ullist" style="padding: 0px; list-style-type: none; margin: 0px; color: rgb(51, 51, 51);    font-weight: 400;">
                                                <?php 

                                                    //echo '<pre>'; print_r($hotelOrder[0]['roomTraveelerInfo']);

                                                foreach ($hotelOrder[0]['roomTraveelerInfo'] as $key => $travllerValue) { ?>
                                                    <li class="contact__details--list--paxdetails">
                                                        <span class="contact__details--list--details">Name : </span>
                                                        <span><?php echo $travllerValue['title']; ?> <?php echo $travllerValue['first_name']; ?> <?php echo $travllerValue['last_name']; ?>, </span>
                                                        <!-- <span>Ms bhanu bhanu </span> -->
                                                    </li>
                                                <?php  } ?>
                                                   
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <!--<div class="container" style="padding: 0;">
                                    <div class="bg-4">
                                        <!--<h4></h4>-->
                                    <!--    <div class="col-md-12 bg-4" style="margin: 0;">
                                            <p><?php echo $hotelOrder[0]['hotelOrderRoomDetails']['hotel_room_type']; ?>              <b> Incl:</b>  <?php echo $hotelOrder[0]['hotelOrderRoomDetails']['hotel_meal_bases']; ?> </p>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <div class="container" style="padding: 0;width: 100%;border-bottom: 1px solid rgb(229, 229, 229);">
                                <div class="bg-5">
                                    <h2 style="padding-bottom: 0px;border-bottom: 0px;margin-bottom: 5px;">Contact Details</h2>
                                    <div class="col-md-12 bg-4" style="margin: 0;">
                                        <p style="margin-bottom:0px;"><b>Email :</b> <?php echo $hotelOrder[0]['emails']; ?></p>
                                        <p><b>Mobile :</b> <?php echo $hotelOrder[0]['contacts']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="selected-room-wrapper contact__details--print pdf_cancellation" style="border-bottom: 1px solid rgb(229, 229, 229); padding: 10px 10px 20px; margin: 0px 0px 0px;">
                                <div class="contact__details">
                                    <h5 class="paxdetails__wrapper--heading" style="margin: 0px 0px 15px; font-weight: 500; font-size: 20px; color: rgb(51, 51, 51);">Cancellation Policy</h5>
                                    <table style="width: 100%; margin-bottom: 15px; border-collapse: collapse;">
                                        <tr class="tabular__row">
                                            <th>Cancellation on or After</th>
                                            <th>Cancellation on or Before</th>
                                            <th>Cancellation Charges/Comments</th>
                                        </tr>
                                        <tr class="tabular__row">
                                            <td>Sep 30, 2021 10:12 AM</td>
                                            <td>Sep 30, 2021 12:00 PM</td>
                                            <td><i class="fa fa-inr"></i> 1,341.78</td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="tabular-p">*Each booking is applicable of Rs.20 per room per night non-refundable service fees.</p>
                            </div>

                            <div class="row" style="border-bottom: 1px solid rgb(229, 229, 229);">
                                <div class="col-md-12">
                                    <h3 style="margin-bottom:0px;margin-top: 15px;">Booking Notes</h3>
                                    <span class="tabular-p">Bed Type Selection is not guaranteed.Note: Nightly rates might be calculated based on the average of Total RateAmenities:Free self parking, Free WiFiDeal: Private saleCheckin Start Time : 12:00 PMCheckin End Time : midnightMin Checkin Age : 18Checkout Time : 11:00 AMInstructions : Extra-person charges may apply and vary depending on property policyGovernment-issued photo identification and a credit card, debit card, or cash deposit may be required at check-in for incidental chargesSpecial requests are subject to availability upon check-in and may incur additional charges; special requests cannot be guaranteedThis property accepts Visa and Mastercard Special Instructions : This property doesn't offer after-hours check-in. Front desk staff will greet guests on arrival.The minimum age for a customer to be able to check-in at a property 18. Important Note : This Should be a part of package and should not sold as Standalone.</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="margin-bottom:0px;margin-top: 15px;">General Terms & Conditions</h3>
                                    <span class="tabular-p" style="color: #777;">
                                        <ul style="list-style: auto;">
                                            <li>Each country/state may have its own set of COVID-19 guidelines and restrictions. Please check with the hotel or visit the country’s/state's website for the same.</li>
                                            <li>Your booking is confirmed. However, your name will be listed in the hotel’s reservation system closer to your arrival date.</li>
                                            <li>Guest Photo Id must be presented at the time of check-in.</li>
                                            <li>Credit card or cash deposit may be required for extra services at the time of check-in.</li>
                                            <li>All extra charges will be borne by the guest directly prior to departure.</li>
                                            <li>In case of the guest arrival delayed or postponed due to any unforeseen occurrences, additional charges will be borne by the guest.</li>
                                        </ul>
                                    </span>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">
                                <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"><!--Travelers 1 Adult--></span></h3></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-8">Base Fare</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> &nbsp;538.06
                                        <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content" style="width: 350px;">
                                                    <ul class="pad-0">
                                                    
                                                    
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgts" style="width: 270px;">
                                                                KingBed Deluxe Double Room(Room Only)- Package Deal (1 King Bed) (ROOM ONLY)    
                                                                </li>
                                                                <li class="tooltip-infopos" style="left: 80%;"><i class="fa fa-inr"></i> &nbsp;538.06</li>
                                                            </ul>
                                                        </li>
                                                        
                                              
                                                    </ul>
                                                </div>
                                              </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-8">Fee &amp; Surcharge</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> &nbsp;11.80                                            <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Markup</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;0.00</li>
                                                            </ul>
                                                        </li>                                                       
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;10.00</li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">GST</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;1.80</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                              </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                               
                                <div class="clearfix"></div>
                                <div class="border-2px"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-6 mp"><h5 class="mp">Total Amount</h5></label>
                                    <div class="col-md-6 pad-l-r">
                                        <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;550.26</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <!--<div class="col-md-12 sidebar-item">
                                <div class="detail-title"><h3>Apply Discount<br><span class="fare-sumry">Have Discount/ Promo code to Redeem</span></h3></div>
                                <div class="input2_wrapper">
                                    <form class="form-inline">
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Promo Code" style="margin-top:0px;height: 35px;border-radius: 2px;">
                                      </div>
                                      <button type="submit" class="btn btn-success" style="background-color: #244082;border-color: #244082;">Send</button>
                                    </form>
                                
                                </div>
                              
                            </div>-->
                            <div class="clearfix"></div>                          
                            <div class="clearfix"></div>
                          
                        </div>
                       
                        </div></div></div>
						
						
						
						
						
                   




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
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
        </script>
		
		
 
    </body>
</html>