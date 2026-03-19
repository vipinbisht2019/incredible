<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking Hotel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $booking_hotels[0]['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $booking_hotels[0]['meta_keyword']; ?>">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

        <?php include('includes/css.php'); ?>
        <link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/calendar.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/smoothness/jquery-ui-1.10.0.custom.css');?>" rel="stylesheet">
        <style>
            #show-more, .show-less{ 
                color: grey;
                float: right;
                font-size: 12px;
                position: absolute;
                right: 25px;
                bottom: 10px;
             }
             .content {
                width: 100%;
                margin: 0 auto;
                margin-top: 0%;
                background-color: #fff0;
                border-left: 0px solid black;
                padding: 0px;
            }
            #cont {
              user-select: none;
              margin:10px auto;
              padding:60px 4px 30px 4px;
              background:#fff0;
              height:auto;
              width:100%;
              overflow:hidden;
              position: relative;
              border-radius:6px;
              cursor:
            }
            #cont:active{
              cursor:e-resize;
            }
            .close {
                font-size: 40px;
                font-weight: 300;
            }
            .covid-pos{ display: none }
            .tab-content{ margin-top: -15px;padding: 0px; }
        </style>
    </head>
    <body class="not-front page-post">

        <div id="main">
            <?php include('includes/header.php'); ?>
            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="<?php echo base_url('index.php')?>">Home</a><span>/</span>Pages<span>/</span>Hotels</div>
                </div>
            </div>

            <div style="background: #244082;padding: 20px;position: sticky;top: 0px;z-index: 3;padding-left: 0;">
        <div class="container">
          <form class="form-inline flight-flex" name="searchflight" id="searchflight" method="post" action="http://122.176.21.183/2020/projects/incredible/flights">
            <div class="form-group" style="padding: 5px;">
              <label for="text" class="flight-label">Area, Landmark or Hotel Name</label><br>
              <input type="text" class="form-control ui-autocomplete-input" name="departure" id="search_departure" value="<?php echo $hotelSubmitRequest['searchCriteria']['cityName']; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;" autocomplete="off">
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="date" class="flight-label">CheckIn</label><br>
              <input type="text" name="start-date" id="start-date" placeholder="Start date" value="<?php  echo $checkIn = date("d-m-Y",strtotime($hotelSubmitRequest['checkinDate']));  ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;width: 100%;"/>
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="date" class="flight-label">Checkout</label><br>
              <input type="text" name="end-date" id="end-date" value="<?php  echo $checkOut = date("d-m-Y",strtotime($hotelSubmitRequest['checkoutDate']));  ?>" placeholder="End date" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;width: 100%;"/>
              <!-- <input type="hidden" name="bookingType" id="bookingType" value="R"> -->
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="text" class="flight-label">Guest &amp; Rooms</label><br>
              <!--<input type="text" class="form-control" id="text" placeholder="Delhi" style="border-radius: 6px;background: #1958b6;border: #1958b6;">-->
              <input type="text" name="passenger" id="passenger" placeholder="2 Guest in Room" value="2 Guest in Room" onclick="toggle(this)" style="border-radius: 6px;background: #3658a9;border: #3658a9;width: 100%;color: #fff;" readonly="">
              <div class="traveller-count" id="cont">
                <div>
                  <div class="center">
                    <div class="row" style="display: grid;padding: 5px;">
                      <div class="col-md-6" style="width: 100%;">
                        <p style="font-weight: 500;font-size: 12px;">Rooms<span style="color: #969696;font-size: 10px;">(Max 8)</span>
                        </p>
                      </div><br>
                      <div class="col-md-6" style="margin-top: -30px;">
                      <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn" disabled="disabled" data-type="minus" data-field="adultPax">
                              <span class="glyphicon glyphicon-minus"></span>
                          </button>
                        </span>
                        <input type="text" name="adultPax" id="adultPax" class="form-control input-number" value="1" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="adultPax">
                              <span class="glyphicon glyphicon-plus"></span>
                          </button>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="display: grid;padding: 5px;">
                      <div class="col-md-6" style="width: 100%;">
                        <p style="font-weight: 500;font-size: 12px;">Adults<span style="color: #969696;font-size: 10px;">(12+ yr)</span>
                          </p>
                      </div><br>
                      <div class="col-md-6" style="margin-top: -30px;">
                        <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="minus" data-field="childPax">
                                <span class="glyphicon glyphicon-minus"></span>
                              </button>
                          </span>
                          <input type="text" name="childPax" id="childPax" class="form-control input-number" value="0" min="0" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="childPax">
                                  <span class="glyphicon glyphicon-plus"></span>
                              </button>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="display: grid;padding: 5px;">
                      <div class="col-md-6" style="width: 100%;">
                        <p style="font-weight: 500;font-size: 12px;">Children<span style="color: #969696;font-size: 10px;">(0-12 yr)</span>
                        </p>
                      </div><br>
                      <div class="col-md-6" style="margin-top: -30px;">
                        <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="minus" data-field="infantPax">
                              <span class="glyphicon glyphicon-minus"></span>
                            </button>
                          </span>
                          <input type="text" name="infantPax" id="infantPax" class="form-control input-number" value="0" min="0" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="infantPax">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <!--<div>
                      <label>Travel Class:</label>
                      <div>
                        <select class="economy-select" name="travelClass" id="travelClass" style="color: #444;">
                          <option value="ECONOMY" selected="">Economy</option>
                          <option value="Business">Business</option>
                          <option value="First Class">First Class</option>
                          <option value="Premium Economy">Premium Economy</option>
                        </select>
                      </div>
                    </div>-->
                  </div>
                  <div class="col-md-6">
                    <div>
                      <button type="button" name="updateTraveller" id="updateTraveller" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 26px;margin-bottom: 0;height: 38px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right">DONE</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" name="searchFlight" id="searchFlight" value="yes" class="btn btn-default" style="top: 26px;position: relative;padding: 9px 25px;text-transform: uppercase;font-weight: 500;color: #244082;background: #fff;border-radius: 5px;height: 38px;">Update Search</button>
          </form>
        </div>
      </div>
            <?php //echo '<pre>'; print_r($hotelSubmitRequest); ?>
            <div id="content">
                <div class="container">
                    <div class="row">

                        <?php //echo '<pre>';  print_r($hotelDetail); ?>
                        <!--<div class="blog_content">
                            <span class="star-rating">
                            <?php if($hotelDetail['rt'] == 1){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                            <?php }elseif($hotelDetail['rt'] == 2){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                            <?php }elseif($hotelDetail['rt'] == 3){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">

                            <?php }elseif($hotelDetail['rt'] == 4){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                            <?php }elseif($hotelDetail['rt'] == 5){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">

                            <?php } ?>

                            </span>
                            <h3 class="hch"><?php //echo $hotelDetail['name']; ?></h3>
                            
                        </div>
                        <div class="clearfix"></div>
                        <p class="address"><?php //echo $hotelDetail['ad']['adr']; ?>, <?php //echo $hotelDetail['ad']['city']['name']; ?> , </p>-->
                        <?php //echo '<pre>'; print_r($hotelDetail); ?>
                        <div class="col-sm-8">
                            <div>
                                <div class="post post-full">
                                    
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="post-header">
                                          <div class="post-slide">
                                            <div id="sl1">
                                              <a class="sl1_prev" href="#"></a>
                                              <a class="sl1_next" href="#"></a>
                                              <div class="carousel-box">
                                                <div class="inner">
                                                  <div class="carousel main">
                                                    <ul>
                                                      <?php foreach(@$hotelDetail['img'] as $key => $hotelValue){ ?>
                                                      <li>
                                                        <div class="sl1">
                                                          <div class="sl1_inner">
                                                            <img src="<?php echo @$hotelValue['tns']; ?>" alt="" class="img-responsive" style="height: auto;">
                                                          </div>
                                                        </div>
                                                      </li>
                                                      <?php } ?>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4" style="padding: 0px;">
                                        <div class="imageslider__firstimage">
                                          <img class="imageslider__image1" src="<?php echo $hotelDetail['img'][0]['tns']; ?>">
                                          <img class="imageslider__image2" src="<?php echo @$hotelDetail['img'][1]['tns']; ?>">
                                        </div>
                                        <!-- <img src="">
                                        <img src=""> -->
                                      </div>
                                    </div>

                                    <div class="body">
                                      <p><?php echo $hotelDetail['des'];?></p>
                                    <details>
                                     <summary>
                                       <!-- <span id="open">read more</span>  -->
                                       <!-- <button onclick="readMore()" id="myBtn">Read more</button> -->
                                       <!-- <span id="close">close</span>  -->
                                     </summary>
                                      <p>
                                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
                                       </p>
                                    </details>
                                    </div>

                                    <!-- <p style="font-size: 12px;font-weight: 300;"><?php //echo $hotelDetail['des'];?></p> -->
                                </div>
                            </div>
                            <nav id="select-other-room">
                              <ul id="mainNav">
                                <li><a href="#room">Room Options</a></li>
                                <li><a href="#amenities">Amenities</a></li>
                                <li><a href="#location">Location</a></li>
                              </ul>
                            </nav>
                            <section id="room" data-sr>
                                <div class="">
                                    <div class="">
                                        <!-- <div class="bg-2">
                                            <ul style="display: flex;">
                                                <li><input type="checkbox"> <span style="font-weight:500;">Room Only</span></li>&nbsp;
                                                <li><input type="checkbox"> <span style="font-weight:500;">Breakfast</span></li>
                                            </ul>
                                        </div> -->
                                        <table>
                                         <!-- <thead>
                                            <tr>
                                              <th>Room Type</th>
                                              <th>Room Options</th>
                                              <!-- <th>Inclusions</th> -->
                                            <!--  <th>Price</th>
                                            </tr>
                                          </thead>-->
                                          <tbody>
                                             <?php foreach ($hotelDetail['ops'] as $key => $roomValue) { 
                                                
                                             // echo '<pre>';  print_r($roomValue);
                                                 
                                            ?>
                                              
                                            
                                             <tr>
                                               <td style="position:sticky;top:0px;"><p style="font-size: 13px;font-weight: 500;"><?php echo $roomValue['ris'][0]['rc']; ?></p></td>
                                               <td>
                                                    
                                                    <div class="Layouts__Row-sc-1yzlivq-0 RoomInfoText__RoomTextInfoWrapperStyled-sc-1n5mobe-0 iwUOtq eLtUXz"><span color="#00B318" class="RoomInfoText__RoomInfoTextStyled-sc-1n5mobe-1 hPzpAm"><div class="RoomFlavorstyles__RoomOptionsIconContainer-sc-1btnl3r-30 bjDOBV"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2.5rem" height="2rem" fill="#00B318" class="FreeCancelIcon-sc-3axaxr-0 hpGlR"><path d="M21.448 5.88l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm0 3.806l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm-.006 1.04c.612-.002 1.15.4 1.326.984a.345.345 0 01-.266.436H22.5c-.735.143-1.378.335-1.994.58l.074-.026a.346.346 0 01-.272-.001l.002.001a.349.349 0 01-.181-.198l-.001-.002a1.143 1.143 0 01-.07-.392c0-.764.62-1.384 1.384-1.384zM13.3 21.446v-.002h.002c.19 0 .344.154.344.344l-.002.042v-.002a10.22 10.22 0 00-.037 2.048l-.002-.036a.346.346 0 01-.344.372H2.769a2.77 2.77 0 01-2.768-2.766V17.6a2.081 2.081 0 011.812-2.059l.01-.001a3.46 3.46 0 00.018-6.864l-.017-.002A2.083 2.083 0 01.002 6.616V2.768A2.77 2.77 0 012.77 0h27.678a2.77 2.77 0 012.77 2.768v3.848a2.08 2.08 0 01-1.822 2.06 3.468 3.468 0 00-3.028 3.436v.004a.344.344 0 01-.45.327l.002.001a10.484 10.484 0 00-1.936-.415l-.052-.005a.343.343 0 01-.305-.342l.001-.029v.001a6.245 6.245 0 014.516-5.541l.044-.011a.344.344 0 00.256-.333V3.111a.344.344 0 00-.344-.344H3.114a.344.344 0 00-.344.344v2.656c0 .156.104.29.254.332 2.665.745 4.587 3.152 4.587 6.008s-1.922 5.263-4.543 5.997l-.044.011a.344.344 0 00-.254.332v2.654c0 .19.154.346.344.346h10.188zm11.34-7.438c4.968 0 8.995 4.027 8.995 8.995s-4.027 8.995-8.995 8.995c-4.968 0-8.995-4.027-8.995-8.995s4.027-8.995 8.995-8.995zm4.532 7.202l.004-.006a1.04 1.04 0 00-1.659-1.247l-.001.001-3.784 5.046a.341.341 0 01-.52.04l-1.8-1.796a1.038 1.038 0 00-1.465 1.467l-.001-.001 2.074 2.074c.386.392.912.614 1.46.614.05 0 .102-.006.154-.006a2.057 2.057 0 001.516-.824l4.02-5.36z"></path></svg></div><div class="RoomFlavorstyles__CancellationPolicyContainer-sc-1btnl3r-31 dpbkmY"><span>Free Cancellation till 19 Aug'21</span>
                                                    <button type="button" onclick="getCancellation('<?php echo $hotelDetail['id']?>','<?php echo $roomValue['id'] ?>');"  data-toggle="modal" data-target="#modal-with-tab" style="text-align:left;"><a class="dwebCommonstyles__PrimaryLink-sc-112ty3f-8 npTjr">Cancellation Policy</a></button></div></span></div>

                                                    <div id="modal-with-tab" class="modal modal-with-tab fade" role="dialog">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                          <div class="modal-header" style="padding: 0;border: none;">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: relative;right: 10px;top: 2px;">×</button>
                                                          </div>
                                                          <div class="modal-body">
                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                <div class="panel with-nav-tabs panel-info">
                                                                  <div class="panel-heading">
                                                                    <ul class="nav nav-tabs">
                                                                      <li class="active"><a href="#tab1info" data-toggle="tab">Tabular</a></li>
                                                                      <li><a href="#tab2info" data-toggle="tab">Normal</a></li>
                                                                      <!--<li class="dropdown">
                                                                        <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                          <li><a href="#tab4info" data-toggle="tab">Info 4</a></li>
                                                                          <li><a href="#tab5info" data-toggle="tab">Info 5</a></li>
                                                                        </ul>
                                                                      </li>-->
                                                                    </ul>
                                                                  </div>
                                                                  <div class="panel-body">
                                                                    <div class="tab-content">
                                                                      <div class="tab-pane fade in active" id="tab1info">
                                                                        <table class="cancellation__content tabular"><tr class="tabular__row"><th class="tabular__row--heading">Cancellation on or After</th><th class="tabular__row--heading">Cancellation on or Before</th><th class="tabular__row--heading">Cancellation Charges/Comments</th></tr><tr class="tabular__row"><td class="tabular__row--text">Aug 27, 2021 1:05 PM</td><td class="tabular__row--text">Aug 28, 2021 12:00 PM</td><td class="tabular__row--text">₹419.53</td></tr></table>
                                                                      </div>
                                                                      <div class="tab-pane fade" id="tab2info">
                                                                        <p style="font-size:12px;padding: 15px 5px 0px;margin-bottom: 0;">Cancellation Charges of <i class="fa fa-inr"></i>419.53 applicable if cancelled between Aug 27, 2021 1:24 PM to Aug 28, 2021 12:00 PM.</p>
                                                                      </div>
                                                                      <!--<div class="tab-pane fade" id="tab3info">Info 3</div>
                                                                      <div class="tab-pane fade" id="tab4info">Info 4</div>
                                                                      <div class="tab-pane fade" id="tab5info">Info 5</div>-->
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>

                                                      </div>
                                                    </div>

                                               </td>
                                               <!-- <td>
                                                    <ul style="font-size: 13px;color: #6b6b6b;">
                                                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Special Offer for Vaccinated Guest</li>
                                                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free Breakfast and Dinner</li>
                                                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Buffet Breakfast is available.</li>
                                                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Buffet Lunch Or Dinner is available.</li>
                                                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Early Check in is available for up to 4 hours from the standard check-in time. This service is subject to availability.</li>
                                                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Late check-out is available for up to 3 hours after the standard check-out time. This service is subject to availability.</li>
                                                    </ul>
                                               </td> -->
                                               <td>
                                                    <!-- <span class="jteAVe">
                                                        <div class="dpFoBC">29% Off</div>
                                                        <span class="dvvgLR"></span>
                                                    </span> -->
                                                    <div>
                                                        <!-- <span class="eQHknX"><i class="fa fa-inr"></i> 4875</span> -->
                                                        <div class="dcHqnQ"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="#141823" width="1.4rem" height="1.4rem" class="guwrRX"><path d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z"></path></svg><?php echo $roomValue['ris'][0]['tp']; ?></div>
                                                        <p style="margin-bottom: 0;text-transform: capitalize;"><?php echo $roomValue['ris'][0]['mb']; ?></p>
                                                        <span style="font-size: 11px;"> for <?php echo $roomValue['ris'][0]['pis'][0]['day']; ?> Night(s) for <?php echo $roomValue['ris'][0]['adt']; ?> adult <?php echo $roomValue['ris'][0]['chd']; ?> child</span>
                                                        <!-- <span class="kahbAo">+ <i class="fa fa-inr"></i> 848 taxes &amp; fees</span><p class="cJSqKG">per room / night</p><div class="bCUylV"><a class="npTjr">EMI Starts at <i class="fa fa-inr"></i> 12866/month</a></div> -->
                                                    </div>
                                                    <div>

                                                      <a class="btn btn-primary" data-popup-open="popup-1" href="#"  style="font-size:12px;background: transparent;color: #357ebd;border: none;"><span class="roomtype__link--pernightPrice"> 
                                                        <svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                          <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
                                                        </svg><!-- <i class="fa fa-eye"></i> --> Per Night Price
                                                      </span></a>

                                                      <div class="popup" data-popup="popup-1">
                                                        <div class="popup-inner">
                                                            <h2>Per Night Price</h2>
                                                           <div class="popup-scroll">
                                                              <table class="cancellation__content tabular" style="margin-top:0px;">
                                                                <tr class="tabular__row">
                                                                  <th class="tabular__row--heading" style="text-align:center;">Date</th>
                                                                  <th class="tabular__row--heading" style="text-align:center;">Price</th>
                                                                </tr>
                                                                <tr class="tabular__row">
                                                                  <td class="tabular__row--text">29-08-2021</td>
                                                                  <td class="tabular__row--text">29-08-2021</td>
                                                                </tr>
                                                              </table>
                                                            </div>
                                                            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
                                                        </div>
                                                    </div>

                                                    <?php //echo $hotelDetail['ops'][0]['id']; ?>
                                                       
                                                        <?php if($hotelDetail['ops'][0]['id'] == $roomValue['id'] ){ ?>
                                                          <button class="KETBj bIgcAI active">Selected</button>
                                                        <?php }else{ ?>
                                                          <button class="KETBj bIgcAI" onclick="getSelectedRoom('<?php echo $hotelDetail['id']; ?>','<?php echo $roomValue['id']; ?>','<?php echo $roomValue['ris'][0]['tp']; ?>','<?php echo $roomValue['ris'][0]['rc']; ?>','<?php echo $roomValue['ris'][0]['mb']; ?>','<?php echo $hotelDetail['name']; ?>','<?php echo $hotelDetail['ad']['adr']; ?>, <?php echo $hotelDetail['ad']['city']['name']; ?> , <?php echo $hotelDetail['ad']['country']['name']; ?>','<?php echo $hotelDetail['rt']; ?>');">Select</button>  
                                                        <?php } ?>
                                                        <!-- <a class="npTjr">Login for more deals</a> -->
                                                    </div>
                                               </td>
                                             </tr>
                                             <?php } ?>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <?php //echo $hotelDetail['fl'][0];?>
                            <section id="amenities">
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="bg-3">
                                            <h2>Amenities at <?php echo $hotelDetail['name']; ?></h2>
                                            <div class="plr-15">
                                                <span class="poplr-amnts">
                                                    <span class="poplr-amnts-span">POPULAR AMENITIES</span>
                                                </span>
                                                <div class="content">
                                                    <ul class="cJfnDm" style="border-bottom: 1px solid #ddd;">
                                                        <svg viewBox="0 0 16 16" fill="#18A160" class="bMXVPP">
                                                       
                                                        </svg>
                                                        <span class="jMSGOV"> 
                                                            <?php  
                                                                                                  
                                                               echo @$hotelDetail['fl'][0];
                                                                                                 
                                                            ?></span>
                                                        <!-- <svg viewBox="0 0 16 16" fill="#18A160" class="bMXVPP">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="jMSGOV">Air Conditioning</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="#18A160" class="jgmDnG">
                                                            <path d="M17.333 10H15a.333.333 0 00-.333.333V15c0 .184.149.333.333.333h2.333a2.667 2.667 0 100-5.334z"></path>
                                                            <path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16C31.99 7.167 24.832.01 16 0zm1.333 18H15a.333.333 0 00-.333.333v6.333a1.333 1.333 0 01-2.666 0v-16c0-.736.597-1.333 1.333-1.333h4a5.333 5.333 0 110 10.666z"></path>
                                                        </svg>
                                                        <span class="jMSGOV">Parking Facility</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="#18A160" class="fZLLhr">
                                                            <path d="M16 32c14.267 0 15.801-2.763 15.801-3.951 0-.855 0-2.857-9.388-3.684a1.317 1.317 0 00-.231 2.623c1.691.128 3.372.376 5.028.743a.33.33 0 010 .642 52.015 52.015 0 01-11.211.995 51.924 51.924 0 01-11.208-.995.33.33 0 010-.642 35.53 35.53 0 014.975-.737 1.316 1.316 0 00-.232-2.622C.201 25.201.201 27.199.201 28.051.198 31.616 11.249 32.002 16 32.002z"></path>
                                                            <path d="M17.697 8.84a.333.333 0 01-.023-.621 4.28 4.28 0 10-3.349 0 .334.334 0 01-.022.622 5.275 5.275 0 00-3.569 4.987v3.951c0 .363.294.657.657.657h1.176c.172 0 .315.131.328.303l.475 5.679a.658.658 0 00.656.603h3.949a.658.658 0 00.656-.603l.475-5.679a.328.328 0 01.328-.303h1.176a.657.657 0 00.657-.657v-3.95a5.275 5.275 0 00-3.569-4.987zM6.372 10.149a.334.334 0 01-.029-.616 3.62 3.62 0 10-3.067 0 .334.334 0 01-.028.616 4.617 4.617 0 00-3.049 4.335v1.977c0 .363.294.657.657.657h1.093a.331.331 0 01.327.293l.56 5.048c.04.332.32.583.655.587h2.633a.66.66 0 00.655-.585l.561-5.049a.328.328 0 01.327-.293h1.091a.658.658 0 00.659-.656v-1.98a4.613 4.613 0 00-3.044-4.333zM28.756 10.149a.335.335 0 01-.028-.616 3.62 3.62 0 10-3.067 0 .334.334 0 01-.028.616 4.614 4.614 0 00-3.045 4.335v1.977c0 .363.294.657.657.657H24.337a.33.33 0 01.328.293l.56 5.048c.04.332.32.583.655.587h2.633a.66.66 0 00.655-.585l.561-5.049a.328.328 0 01.327-.293h1.091a.658.658 0 00.659-.656v-1.98a4.613 4.613 0 00-3.049-4.333z"></path>
                                                        </svg>
                                                        <span class="jMSGOV">Banquet hall</span> -->
                                                        <!--<a class="npTjr">View More</a>-->
                                                        
                                                    </ul>
                                                    <!-- <div id="show-more"><a class="npTjr" href="javascript:void(0)" style="text-decoration: none;">View More</a></div> -->
                                                    <div id="show-more-content" style="padding-top: 15px;">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <ul class="lst-ul">
                                                                    <li><b>Dining</b></li>
                                                                    <li><i class="fa fa-cutlery" aria-hidden="true"></i> Restaurant</li>
                                                                    <li><i class="fa fa-check-circle"></i> Special Diet Meals</li>
                                                                    <li><i class="fa fa-cutlery" aria-hidden="true"></i> Dining Area</li>
                                                                    <li><i class="fa fa-check-circle"></i> Lounge</li>
                                                                    <li><i class="fa fa-check-circle"></i> 24-hours Cafe</li>
                                                                    <li><i class="fa fa-check-circle"></i> 24-hours Coffee Shop</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <ul class="lst-ul">
                                                                    <li><b>Services</b></li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free Wi-Fi</li>
                                                                    <li><i class="fa fa-check-circle"></i> Childcare Services</li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Facilities for Guests with Disabilities</li>
                                                                    <li><i class="fa fa-check-circle"></i> Ticket/Tour Assistance</li>
                                                                    <li><i class="fa fa-check-circle"></i> Concierge</li>
                                                                    <li>
                                                                        <span class="ejpvWy"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="izAQxS"><path d="M30 15.056a3.333 3.333 0 00-3.333-3.333H24.83a.667.667 0 01-.471-.195l-6.473-6.473a2.667 2.667 0 00-3.769 0l-6.472 6.473a.665.665 0 01-.471.195h-1.84a3.333 3.333 0 00-3.333 3.333v9.333a3.333 3.333 0 003.333 3.333h21.333A3.333 3.333 0 0030 24.389zM9.667 18.923a4.173 4.173 0 012.133 3.4 2.737 2.737 0 01-2.733 2.733H7.334a1 1 0 010-2h1.733a.734.734 0 00.733-.733c0-.764-.457-1.143-1.333-1.8a4.172 4.172 0 01-2.133-3.399 2.737 2.737 0 012.733-2.735H10.8a1 1 0 010 2H9.067a.734.734 0 00-.733.735c.001.764.459 1.143 1.333 1.799zm5.6 2.653v2.48a1 1 0 01-2 0v-8.667a1 1 0 011-1h.867a3.6 3.6 0 01.133 7.187zm4.709-9.853h-7.951a.334.334 0 01-.236-.57l3.976-3.976a.333.333 0 01.471-.001l.001.001 3.976 3.976a.333.333 0 01-.236.569zm5.691 12.333a1 1 0 01-2 0v-2.133a.331.331 0 00-.331-.333h-.803a.331.331 0 00-.333.331v2.136a1 1 0 01-2 0v-6.933a2.733 2.733 0 115.466 0z"></path><path d="M15.723 16.523a.334.334 0 00-.455.311v2.313a.33.33 0 00.145.275.33.33 0 00.309.036 1.569 1.569 0 000-2.933zM22.933 16.389a.734.734 0 00-.733.735v2.133c0 .184.149.333.333.333h.8a.333.333 0 00.333-.333v-2.133a.735.735 0 00-.733-.735z"></path></svg></span>
                                                                     Spa</li>
                                                                    <li><i class="fa fa-check-circle"></i> Postal Services</li>
                                                                    <li><i class="fa fa-check-circle"></i> Paid Airport Transfers</li>
                                                                    <li><i class="fa fa-check-circle"></i> Mail Services</li>
                                                                    <li><i class="fa fa-check-circle"></i> ATM</li>
                                                                    <li><i class="fa fa-check-circle"></i> Massage</li>
                                                                    <li><i class="fa fa-check-circle"></i> Luggage Assistance</li>
                                                                    <li><i class="fa fa-check-circle"></i> Paid Bus Station Transfers</li>
                                                                    <li><i class="fa fa-check-circle"></i> Paid Pickup/Drop</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <ul class="lst-ul">
                                                                    <li><b>General</b></li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Kids Play Area</li>
                                                                    <li>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="ConferenceRoomIcon-sc-n8vzmu-0 NgtBO"><path d="M12.315 24.465a3.8 3.8 0 103.801-3.799h-.001a3.804 3.804 0 00-3.8 3.799zM6.259 28.267a3.8 3.8 0 10-3.8-3.801 3.804 3.804 0 003.8 3.801zM21.952 24.465a3.8 3.8 0 103.801-3.799h-.001a3.804 3.804 0 00-3.8 3.799z"></path><path d="M31.185 30.915a6.877 6.877 0 00-5.377-2.575 6.879 6.879 0 00-4.649 1.793.331.331 0 01-.444 0 7.095 7.095 0 00-9.428 0 .332.332 0 01-.445 0 6.878 6.878 0 00-4.648-1.795 6.877 6.877 0 00-5.379 2.576.667.667 0 00.519 1.085h29.333a.667.667 0 00.519-1.086zM11.525 12.667h8.964a.668.668 0 00.64-.849 5.218 5.218 0 00-3.373-3.532 4.331 4.331 0 10-3.493.012 5.363 5.363 0 00-3.377 3.52.667.667 0 00.639.855zM6.667 16c0 .736.597 1.333 1.333 1.333h.637a.332.332 0 01.327.267l.4 1.993a1.334 1.334 0 102.61-.526l-.267-1.333a.331.331 0 01.327-.4h7.933a.33.33 0 01.327.4l-.267 1.333a1.334 1.334 0 102.613.525l.4-1.993a.333.333 0 01.327-.267H24a1.333 1.333 0 000-2.666H8c-.736 0-1.333.597-1.333 1.333v.003z"></path></svg>
                                                                     Conference Room</li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Air Conditioning</li>
                                                                    <li><i class="fa fa-check-circle"></i> Gym</li>
                                                                    <li><i class="fa fa-check-circle"></i> Paid Valet Parking</li>
                                                                    <li><i class="fa fa-check-circle"></i> Outdoor Furniture</li>
                                                                    <li><i class="fa fa-check-circle"></i> Seating Area</li>
                                                                    <li><i class="fa fa-check-circle"></i> Public Restrooms</li>
                                                                    <li><i class="fa fa-check-circle"></i> Night Club</li>
                                                                    <li><i class="fa fa-check-circle"></i> Pool/ Beach towels</li>
                                                                    <li><i class="fa fa-check-circle"></i> Activity Centre</li>
                                                                    <li><i class="fa fa-check-circle"></i> Smoke alarms</li>
                                                                    <li><i class="fa fa-check-circle"></i> Multilingual Staff</li>
                                                                    <li><i class="fa fa-check-circle"></i> Security alarms</li>
                                                                    <li><i class="fa fa-check-circle"></i> Cooking Class</li>
                                                                    <li><i class="fa fa-check-circle"></i> Kids' Meals</li>
                                                                    <li><i class="fa fa-check-circle"></i> Reception</li>
                                                                    <li><i class="fa fa-check-circle"></i> Safety and Security</li>
                                                                    <li><i class="fa fa-check-circle"></i> Power Backup</li>
                                                                    <li><i class="fa fa-check-circle"></i> Yoga</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <ul class="lst-ul">
                                                                    <li><b>Room</b></li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Fax Service</li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Smoking Rooms</li>
                                                                    <li><i class="fa fa-check-circle"></i> Smoke Detector</li>
                                                                    <li><i class="fa fa-check-circle"></i> Ironing Service</li>
                                                                    <li><i class="fa fa-check-circle"></i> Wheelchair</li>
                                                                    <li><i class="fa fa-check-circle"></i> Bellboy Service</li>
                                                                    <li><i class="fa fa-check-circle"></i> Newspaper</li>
                                                                    <li><i class="fa fa-check-circle"></i> In-room Safe</li>
                                                                    <li>
                                                                        <span class="Amenitiesstyles__AmenityInnerItemIconStylingSpan-sc-10opy4a-1 ejpvWy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="TelephoneIcon-sc-qvbg53-0 hWezah"><path d="M8.167 3.167c.368 0 .666.298.666.666V5.5H9.5c.736 0 1.333.597 1.333 1.333V17.5c0 .736-.597 1.333-1.333 1.333H8.167A1.333 1.333 0 016.833 17.5V6.833c.001-.474.256-.912.667-1.148V3.833c0-.368.298-.666.667-.666zm10.666 4a1 1 0 011 1v8.666a1 1 0 01-1 1H12a.166.166 0 01-.167-.166V7.333A.166.166 0 0112 7.167zm-13.166 0c.092 0 .166.074.166.166v10.334a.167.167 0 01-.166.166h-.5a1 1 0 01-1-1V8.167a1 1 0 011-1zM16 14.833a.667.667 0 100 1.334.667.667 0 000-1.334zm-2.167 0a.667.667 0 100 1.334.667.667 0 000-1.334zm4.334 0a.667.667 0 100 1.334.667.667 0 000-1.334zM16 12.333a.667.667 0 100 1.334.667.667 0 000-1.334zm-2.167 0a.667.667 0 100 1.334.667.667 0 000-1.334zm4.334 0a.667.667 0 100 1.334.667.667 0 000-1.334zm-.361-3.5h-3.973a.348.348 0 00-.361.334V10.5c.008.192.17.34.361.333h3.973a.349.349 0 00.361-.333V9.167a.349.349 0 00-.361-.334z"></path></svg></span>
                                                                     Telephone</li>
                                                                    <li><i class="fa fa-check-circle"></i> Electronic Keycard</li>
                                                                    <li><i class="fa fa-check-circle"></i> Living Room</li>
                                                                    <li><i class="fa fa-check-circle"></i> Safety kit</li>
                                                                    <li><i class="fa fa-check-circle"></i> Hair Treatments</li>
                                                                    <li><i class="fa fa-check-circle"></i> Attached Bathroom</li>
                                                                    <li><i class="fa fa-check-circle"></i> Refrigerator</li>
                                                                    <li><i class="fa fa-check-circle"></i> Electrical Chargers</li>
                                                                    <li><i class="fa fa-check-circle"></i> 24-hour Room Service</li>
                                                                    <li><i class="fa fa-check-circle"></i> 24-hour Security</li>
                                                                    <li><i class="fa fa-check-circle"></i> TV</li>
                                                                    <li><i class="fa fa-check-circle"></i> Balcony/Terrace</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <ul class="lst-ul">
                                                                    <li><b>Safety & Hygiene</b></li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Hospital in the vicinity</li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Dispensors for disinfectants</li>
                                                                    <li><i class="fa fa-check-circle"></i> Staff Hygiene</li>
                                                                    <li><i class="fa fa-check-circle"></i> Sanitizers Installed</li>
                                                                    <li><i class="fa fa-check-circle"></i> Contactless room service</li>
                                                                    <li><i class="fa fa-check-circle"></i> Contactless check-in</li>
                                                                    <li><i class="fa fa-check-circle"></i> Safety authorization certificate</li>
                                                                    <li><i class="fa fa-check-circle"></i> Disinfection</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <ul class="lst-ul">
                                                                    <li><b>Others</b></li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Electrical Sockets</li>
                                                                    <li><i class="fa fa-check-circle" aria-hidden="true"></i> Bar</li>
                                                                    <li><i class="fa fa-check-circle"></i> Housekeeping</li>
                                                                    <li><i class="fa fa-check-circle"></i> Bakery</li>
                                                                    <li><i class="fa fa-check-circle"></i> Emergency Exit Map</li>
                                                                    <li>
                                                                        <span class="ejpvWy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="cQrfXH"><path d="M19.722 17.333a.166.166 0 01.164.194C19.64 19.06 18.312 20 16.278 20H7.61c-2.035 0-3.361-.938-3.609-2.473a.166.166 0 01.165-.194zM16.944 18a.5.5 0 100 1 .5.5 0 000-1zm-2 0a.5.5 0 100 1 .5.5 0 000-1zm2.313-7.5c.068 0 .13.041.155.105l2.333 5.833a.167.167 0 01-.155.229H4.298a.167.167 0 01-.154-.228l2.333-5.834a.167.167 0 01.155-.104zm-1.646 1.167H8.278a.333.333 0 00-.31.21L6.635 15.21a.333.333 0 00.31.457h10a.333.333 0 00.309-.458l-1.334-3.333a.333.333 0 00-.31-.21zM18.278 4a.333.333 0 01.325.406L17.5 9.367a.167.167 0 01-.162.134L6.55 9.503a.167.167 0 01-.163-.133L5.286 4.405A.333.333 0 015.61 4z"></path></svg></span>
                                                                     Photocopying</li>
                                                                    <li><i class="fa fa-check-circle"></i> Thermal Screening</li>
                                                                    <li><i class="fa fa-check-circle"></i> Pub</li>
                                                                    <li><i class="fa fa-check-circle"></i> Manicure/Pedicure</li>
                                                                    <li><i class="fa fa-check-circle"></i> Sun Deck</li>
                                                                    <li><i class="fa fa-check-circle"></i> Barbeque</li>
                                                                    <li><i class="fa fa-check-circle"></i> Fireplace</li>
                                                                    <li><i class="fa fa-check-circle"></i> Electrical Adapters</li>
                                                                    <li><i class="fa fa-check-circle"></i> Torch</li>
                                                                    <li><i class="fa fa-check-circle"></i> Intercom</li>
                                                                    <li><i class="fa fa-check-circle"></i> Printer</li>
                                                                    <li><i class="fa fa-check-circle"></i> Facial Treatments</li>
                                                                    <li><i class="fa fa-check-circle"></i> Umbrellas</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div id="show-less"> <a href="javascript:void(0)">Hide</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <section id="location">
                            <div class="container">
                                <div class="col-md-12">
                                    <div class="bg-3">
                                        <h2>Location of <?php echo $hotelDetail['name']; ?></h2>
                                        <div class="col-md-12 input-effect">
                                            <i class="fa fa-search icon" style="border-bottom: 1px solid #ececec;position: absolute;"></i>
                                            <input class="effect-16" type="text" placeholder="" style="background: transparent;border-bottom: 1px solid #ddd;border-top: none;border-left: none;border-right: none;">
                                            <label>Find other places near Hotel</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="input-container" style="padding: 15px;padding-top: 0px;">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.4526581157907!2d77.0977691143851!3d28.55616709428537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b85fc2a2d89%3A0xbef376182c43ed9d!2sIndira%20Gandhi%20International%20Airport!5e0!3m2!1sen!2sin!4v1629194121140!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-31">
                                                    <h2>Whats around?</h2>
                                                    
                                                    <ul style="height: 355px;">
                                                        <p style="margin-bottom: 0px;"><b style="font-weight: 600;font-size: 14px;">Nearby Places</b></p>
                                                        <li><a href="#">Qutub Minar</a><p>13.8 km</p></li>
                                                        <li><a href="#">Indian Air Force Museum</a><p>1.4 km</p></li>
                                                        <li><a href="#">Hauz Khas Fort</a><p>11.6 km</p></li>
                                                        <li><a href="#">Rajon Ki Baoli</a><p>14.9 km</p></li>
                                                        <li><a href="#">Tomb of Mohd. Quli Khan</a><p>15.1 km</p></li>
                                                        <li><a href="#">The Lodhi Art District</a><p>13.5 km</p></li>
                                                        <li><a href="#">Rajpath and Rashtrapati Bhawan</a><p>11.3 km</p></li>
                                                        <li><a href="#">Humayun's Tomb</a><p>17.7 km</p></li>
                                                        <li><a href="#">Gurudwara Bangla Sahib</a><p>14 Km</p></li>
                                                        <p style="margin-bottom: 0px;border-bottom: 1px solid #ddd;"><b style="font-weight: 600;font-size: 14px;">Nearby Transit</b></p>
                                                        <li><a href="#">Delhi Airport</a><p>650m</p></li>
                                                        <li><a href="#">Metro Hauz Khas</a><p>8.5 km</p></li>
                                                        <li><a href="#">Hazrat Nizammudin Railway Station</a><p>14.1 km</p></li>
                                                        <li><a href="#">Model Town Metro Station</a><p>19.1 km</p></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        </div>
                      <div id ="roomOption">
                        <div class="col-sm-4">
                          <div class="blog_content">                          
                            <h3 class="hch"><?php echo $hotelDetail['name']; ?></h3>                            
                          </div>
                          <div class="clearfix"></div>
                            <p class="address"><?php echo $hotelDetail['ad']['adr']; ?>, <?php echo $hotelDetail['ad']['city']['name']; ?> , <?php echo $hotelDetail['ad']['country']['name']; ?></p>
                            <span class="star-rating" style="margin-top:0px;">
                              <?php if($hotelDetail['rt'] == 1){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                              <?php }elseif($hotelDetail['rt'] == 2){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                              <?php }elseif($hotelDetail['rt'] == 3){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                              <?php }elseif($hotelDetail['rt'] == 4){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                              <?php }elseif($hotelDetail['rt'] == 5){ ?>
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                              <?php } ?>
                            </span>
                            <div class="row">
                              <div class="summarybox">
                                <h2 class="summarybox__price">₹ <?php echo $hotelDetail['ops'][0]['ris'][0]['tp']; ?> </h2>
                                <h4 class="summarybox__roomtype">
                                  <?php echo $hotelDetail['ops'][0]['ris'][0]['rc']; ?> 
                                  <span class="summarybox__roomtype--text"></span>
                                </h4>
                                <div class="summarybox__type">
                                  <div class="summarybox__type--content">
                                    <p class="summarybox__type--inclusion">
                                      <?php echo $hotelDetail['ops'][0]['ris'][0]['mb']; ?>
                                    </p>
                                  </div>
                                  <ul class="hidden summarybox__facilities">
                                    <li class="summarybox__facilities--list">
                                      <span class="summarybox__facilities--icon"><use xlink:href="icons.svg#air-conditioner"></use></span>
                                    </li>
                                  </ul>
                                  <p class="hidden summarybox__facilities--counter ">23+</p>
                                </div>
                                <p class="summarybox__select">
                                  <a href="#select-other-room" style="color:#e41d37">Select Other Room</a>
                                  <span class="summarybox__select--icon">
                                    <svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
                                  </svg>
                                  </span>
                                </p>
                              </div>
                            </div>

                            <a href="<?php echo base_url('hotels/booking/')?><?php echo $hotelDetail['id']; ?>/<?php echo $hotelDetail['ops'][0]['id']; ?>">

                                <button data-id="" type="button" class="hoteldetails__rightbox--bookbtn">Book this room<span class="sublabel-content"></span>
                                </button>
                            </a>                           
                          </div>
                        </div>
                      </div>

                </div>
                
            <!--<div class="container">
                <div class="col-md-12">
                    <main>
                        <div class="bg-3">
                            <h2 style="margin-bottom: 0px;">FAQ's About SHERATON Prague</h2>
                            <div class="topic">
                                <div class="open">
                                  <h2 class="question">1. Does Hotel SHERATON Prague offer any business services?</h2>
                                  <span class="faq-t"></span>
                                </div>
                                <p class="answer">Yes, it conveniently offers a business centre, meeting rooms and a banquet room.</p>
                            </div>
                            <div class="topic">
                                <div class="open">
                                    <h2 class="question">2. What are some popular amenities available in hotel SHERATON Prague?
                                    </h2>
                                    <span class="faq-t"></span>
                                </div>
                                <p class="answer">Some popular amenities available in SHERATON Prague are Luggage storage, Outdoor Activities, CCTV surveillance, Lounge, Dining.</p>
                          </div>
                          <div class="topic">
                            <div class="open">
                            <h2 class="question">3. Does Hotel SHERATON Prague have any swimming pool?
                        </h2><span class="faq-t"></span>
                            </div>
                            <p class="answer">Yes, Hotel SHERATON Prague has a swimming pool.</p>
                          </div>
                          <div class="topic">
                            <div class="open">
                            <h2 class="question">4. Does Hotel SHERATON Prague have a restaurant?
                        </h2><span class="faq-t"></span>
                            </div>
                            <p class="answer">Yes, they have restaurants where guests can enjoy breakfast, lunch and dinner.</p>
                          </div>
                          <div class="topic">
                            <div class="open">
                            <h2 class="question">5. Is bathtub available in the rooms of Hotel SHERATON Prague?
                        </h2><span class="faq-t"></span>
                            </div>
                            <p class="answer">Yes , Bathtub is available in Suite 1 Bed with bathtub and Airport transfers, Suite 1 Bed with bathtub and Airport transfers, Junior Suite with Bathtub and Airport Transfers, Junior Suite with Bathtub and Airport Transfers, Suite with Bathtub and Airport Transfers, Suite with Bathtub and Airport Transfers, Presidential Suite, Presidential Suite rooms.</p>
                          </div>
                          <div class="topic">
                            <div class="open">
                            <h2 class="question">6. What are the customer ratings for SHERATON Prague hotel?
                        </h2><span class="faq-t"></span>
                            </div>
                            <p class="answer">Overall rating for hotel SHERATON Prague is 4.3/5. This is based on the ratings given by 1723 guests on Incredible Vacations.You can read detailed reviews of guests and also check photos uploaded by the guests on Incredible Vacations.</p>
                          </div>
                          <div class="topic">
                            <div class="open">
                            <h2 class="question">7. How many types of rooms are available at Hotel SHERATON Prague?
                        </h2><span class="faq-t"></span>
                            </div>
                            <p class="answer">Hotel SHERATON Prague has 9 types of rooms : Presidential Suite, Deluxe Room, Business Class Room, Junior Suite, Superior Room.</p>
                          </div>
                          <div class="topic">
                            <div class="open">
                            <h2 class="question">8. Does Hotel SHERATON Prague have any parking facility?
                        </h2><span class="faq-t"></span>
                            </div>
                            <p class="answer">No, Hotel SHERATON Prague doesn't have parking facility.</p>
                          </div>
                          <div class="topic">
                            <div class="open">
                            <h2 class="question">9. Does Hotel SHERATON Prague have free parking facility?
                        </h2><span class="faq-t"></span>
                            </div>
                            <p class="answer">No, Hotel SHERATON Prague doesn't have free parking facility.</p>
                          </div>
                      </div>
                    </main>
                </div>
            </div>-->
        </div></div>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/js.php'); ?>
    </div>
    <script>
      $('.btn-number').click(function(e){
        e.preventDefault();
        
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        
        
    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
<script>
    var start_date = null, end_date = null;
    var timestamp_start_date = null, timestamp_end_date = null;
    var $input_start_date = null, $input_end_date = null;

    function getDateClass(date, start, end){
      if(end != null && start != null){
        if(date > start && date < end)
          return [ true, "sejour", "Séjour" ];
      }
      
      if(date == start)
        return [ true, "start", "Début de votre séjour" ];
      if(date == end)
        return [ true, "end", "Fin de votre séjour" ];
      
      return false;
    }

    function datepicker_draw_nb_nights(){
      var $datepicker = jQuery("#ui-datepicker-div");
      setTimeout(function(){
        if(start_date != null && end_date != null){
          var $qty_days_stay = jQuery("<div />", { class: "ui-datepicker-stay-duration" });
          var qty_nights_stay = get_days_difference(timestamp_start_date, timestamp_end_date);
          $qty_days_stay.text(qty_nights_stay + " nights stay");
          $qty_days_stay.appendTo($datepicker);
        }
      });
    }

    var options_start_date = {
      showAnim: false,
      constrainInput: true,
        numberOfMonths: 2,
      showOtherMonths: true,
      beforeShow: function(input, datepicker){
        datepicker_draw_nb_nights();
      },
      beforeShowDay: function(date){
        // 0: published
        // 1: class
        // 2: tooltip
        var timestamp_date = date.getTime();
        var result = getDateClass(timestamp_date, timestamp_start_date, timestamp_end_date);
        if(result != false)
          return result;
        
        return [true, "", ""];
        // return [ true, "chocolate", "Chocolate! " ];
      },
      onSelect: function(date_string, datepicker){
        // this => input
        start_date = $input_start_date.datepicker("getDate");
        timestamp_start_date = start_date.getTime();
      },
      onClose: function(){
        if(end_date != null){
          if(timestamp_start_date >= timestamp_end_date || end_date == null){
            $input_end_date.datepicker("setDate", null);
            end_date = null;
            timestamp_end_date = null;
            $input_end_date.datepicker("show");
            return;
          }
        }
        if(start_date != null && end_date == null)
          $input_end_date.datepicker("show");
      }
    };
    var options_end_date = {
      showAnim: false,
      constrainInput: true,
        numberOfMonths: 2,
      showOtherMonths: true,
      beforeShow: function(input, datepicker){
        datepicker_draw_nb_nights();
      },
      beforeShowDay: function(date){
        var timestamp_date = date.getTime();
        var result = getDateClass(timestamp_date, timestamp_start_date, timestamp_end_date);
        if(result != false)
          return result;
        
        return [ true, "", "Chocolate !" ];
      },
      onSelect: function(date_string, datepicker){
        // this => input
        end_date = $input_end_date.datepicker("getDate");
        timestamp_end_date = end_date.getTime();
      },
      onClose: function(){
        if(end_date == null)
          return;
        
        if(timestamp_end_date <= timestamp_start_date || start_date == null){
          $input_start_date.datepicker("setDate", null);
          start_date = null;
          timestamp_start_date = null;
          $input_start_date.datepicker("show");
        }
      }
    };

    $input_start_date = jQuery("#start-date");
    $input_end_date = jQuery("#end-date");

    $input_start_date.datepicker(options_start_date);
    $input_end_date.datepicker(options_end_date);

    function get_days_difference(start_date, end_date){
      return Math.floor(end_date - start_date) / (1000*60*60*24);
    }
</script>
<script>
    function toggle(ele) {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';

            document.getElementById(ele.id).value = '2 Guest in Room';
        }
        else {
            cont.style.display = 'block';
            document.getElementById(ele.id).value = '2 Guest in Room';
        }
    }
</script>
<script>
   // Cache selectors
    var lastId,
     topMenu = $("#mainNav"),
     topMenuHeight = topMenu.outerHeight()+1,
     // All list items
     menuItems = topMenu.find("a"),
     // Anchors corresponding to menu items
     scrollItems = menuItems.map(function(){
       var item = $($(this).attr("href"));
        if (item.length) { return item; }
     });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e){
      var href = $(this).attr("href"),
          offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
      $('html, body').stop().animate({ 
          scrollTop: offsetTop
      }, 850);
      e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function(){
       // Get container scroll position
       var fromTop = $(this).scrollTop()+topMenuHeight;
       
       // Get id of current scroll item
       var cur = scrollItems.map(function(){
         if ($(this).offset().top < fromTop)
           return this;
       });
       // Get the id of the current element
       cur = cur[cur.length-1];
       var id = cur && cur.length ? cur[0].id : "";
       
       if (lastId !== id) {
           lastId = id;
           // Set/remove active class
           menuItems
             .parent().removeClass("active")
             .end().filter("[href=#"+id+"]").parent().addClass("active");
       }                   
    });
</script>
<script>
    $('#show-more-content').hide();

    $('#show-more').click(function(){
        $('#show-more-content').show(300);
        $('#show-less').show();
        $('#show-more').hide();
    });

    $('#show-less').click(function(){
        $('#show-more-content').hide(150);
        $('#show-more').show();
        $(this).hide();
    });
</script>
<script>
    var rating = $('.rating-histogram');
    var totalVotes = 0;
    var secondaryVotes = 0;
    var totalVotesInc = 0;
    var averageScore = 0;
    var array = [];
    var highest = 0;

    $('.rating-bar-container').each(function() {
      $(this).attr('valuemax', Number($(this).children('.bar-label').html()) * Number($(this).attr('valuenow')));
      totalVotes += Number($(this).attr('valuenow'));
      array.push(Number($(this).attr('valuenow')));
      highest = Math.max.apply(Math, array);
      totalVotesInc += Number($(this).children('.bar-label').html()) * Number($(this).attr('valuenow'))
      if ( $(this).attr('valuenow') == highest ) {
        $(this).children('.bar').width('100%');
      } else {
        secondaryVotes += Number($(this).attr('valuenow'));
      }
      $(this).children('.bar-number').html(Number($(this).attr('valuenow')).toLocaleString('ru'));
    });
    averageScore = (totalVotesInc/totalVotes).toFixed(1).toString().replace(".", ",");
    rating.attr({
      'valuemax': totalVotes,
      'secvaluemax': secondaryVotes
    });
    $('.rating-bar-container').each(function() {
      if ( $(this).attr('valuenow') == highest ) {
        $(this).children('.bar').width('100%');
      } else {
        // console.log(1);
        console.log($(this).attr('valuenow'));
        $(this).children('.bar').width($(this).attr('valuenow') * 200 / rating.attr('valuemax') + '%');
      }
    });

    $('.reviews-num').html(' ' + Number(rating.attr('valuemax')).toLocaleString('ru'));
    $('.score-container .score').html(averageScore);
</script>
<script>
    $(".Click-here").on('click', function() {
      $(".custom-model-main").addClass('model-open');
    }); 
    $(".close-btn, .bg-overlay").click(function(){
      $(".custom-model-main").removeClass('model-open');
    });
</script>
<!--<script>
    $(".show-more").click(function () {
        if($(".text").hasClass("show-more-height")) {
            $(this).text("Hide");
        } else {
            $(this).text("More");
        }

        $(".text").toggleClass("show-more-height");
    });
</script>-->
<script>
    $(document).ready(function(){
      var firstName = $('#firstName').text();
      var lastName = $('#lastName').text();
      var intials = firstName.charAt(0) + lastName.charAt(0);
      var profileImage = $('#profileImage').text(intials);
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function(){
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
      mainClass: 'mfp-with-zoom', 
      gallery:{
                enabled:true
            },

      zoom: {
        enabled: true, 

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        opener: function(openerElement) {

          return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }

    });

    });
</script>
<script>
    window.onload = function(){
      var paginationPage = parseInt($('.cdp').attr('actpage'), 10);
      $('.cdp_i').on('click', function(){
        var go = $(this).attr('href').replace('#!', '');
        if (go === '+1') {
          paginationPage++;
        } else if (go === '-1') {
          paginationPage--;
        }else{
          paginationPage = parseInt(go, 10);
        }
        $('.cdp').attr('actpage', paginationPage);
      });
    };
</script>
<script>
    // JavaScript for label effects only
    $(window).load(function(){
        $(".col-md-12 input").val("");
        
        $(".input-effect input").focusout(function(){
            if($(this).val() != ""){
                $(this).addClass("has-content");
            }else{
                $(this).removeClass("has-content");
            }
        })
    });

</script>
<script>
    var nextButton = $("#right-btn");
    var backButton = $("#left-btn");
    var con = $("#cont");
    var sliderCont = $("#slider-container");

    var sldElm = $(".item-image-wrapper img");
    var i = 0;
    while (i<sldElm.length) {
      sldElm[i].setAttribute("draggable", false);
      i++
    }

    var mL = 0, maxX = 200, diff = 0 ;

    function slide() {
       mL-=100;
      if( mL < -maxX ){ mL = 0 ;}
      sliderCont.animate({"margin-left" : mL + "%"}, 800);
    }

    function slideBack() {
      mL += 100;
      if ( mL > 0 ) { mL = -200 ; }
      sliderCont.animate({"margin-left" : mL + "%"}, 800);
    }

    nextButton.click(slide);
    backButton.click(slideBack);

    $(document).on("mousedown touchstart", con, function(e) {
      
      var startX = e.pageX || e.originalEvent.touches[0].pageX;
      diff = 0;

      $(document).on("mousemove touchmove", function(e) {
        
          var xt = e.pageX || e.originalEvent.touches[0].pageX;
          diff = (xt - startX) * 100 / window.innerWidth;
        if( mL == 0 && diff > 10 ) { 
          event.preventDefault() ;
        } else if (  mL == -maxX && diff < -10 ) {
           event.preventDefault();   
        } else {
          sliderCont.css("margin-left", mL + diff + "%");
        }
      });
    });

    $(document).on("mouseup touchend", function(e) {
      $(document).off("mousemove touchmove");
      if(  mL == 0 && diff > 4 ) { 
          sliderCont.animate({"margin-left" :  0 + "%"},100);
       } else if (  mL == -maxX  && diff < 4 ){
           sliderCont.animate({"margin-left" : -maxX  + "%"},100);  
       } else {
          if (diff < -10) {
            slide();
          } else if (diff > 10) {
            slideBack();
          } else {
            sliderCont.animate({"margin-left" :  mL + "%"},300);
          }
      }
    });
</script>
<script>
    $(".open").click( function () {
      var container = $(this).parents(".topic");
      var answer = container.find(".answer");
      var trigger = container.find(".faq-t");
      
      answer.slideToggle(200);
      
      if (trigger.hasClass("faq-o")) {
        trigger.removeClass("faq-o");
      }
      else {
        trigger.addClass("faq-o");
      }
      
      if (container.hasClass("expanded")) {
        container.removeClass("expanded");
      }
      else {
        container.addClass("expanded");
      }
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


    function getSelectedRoom(hotelId,optionId,price,roomName,roomType,hotelName,address,rating){

      $.ajax({
        url: "<?php echo base_url('hotels/getRoomOptions')?>",
        type: 'post',
        dataType: "HTML",
        data: {'optionId':optionId,'hotelId':hotelId,'totalPrice':price,'roomName':roomName,'roomType':roomType,'hotelName':hotelName,'address':address,'rating':rating},
        success: function( data ) {
          console.log(data);
        
          $('#roomOption').html(data);
          var x = document.getElementsByClassName("KETBj bIgcAI Active");
          x.style.backgroundColor  = '#4aa301';
          
        }
      });

    }

</script>
<script>
  var start_date = null, end_date = null;
var timestamp_start_date = null, timestamp_end_date = null;
var $input_start_date = null, $input_end_date = null;

function getDateClass(date, start, end){
  if(end != null && start != null){
    if(date > start && date < end)
      return [ true, "sejour", "Séjour" ];
  }
  
  if(date == start)
    return [ true, "start", "Début de votre séjour" ];
  if(date == end)
    return [ true, "end", "Fin de votre séjour" ];
  
  return false;
}

function datepicker_draw_nb_nights(){
  var $datepicker = jQuery("#ui-datepicker-div");
  setTimeout(function(){
    if(start_date != null && end_date != null){
      var $qty_days_stay = jQuery("<div />", { class: "ui-datepicker-stay-duration" });
      var qty_nights_stay = get_days_difference(timestamp_start_date, timestamp_end_date);
      $qty_days_stay.text(qty_nights_stay + " nights stay");      
      $qty_days_stay.appendTo($datepicker);
    
    }
  });
}

var options_start_date = {
  showAnim: false,
  constrainInput: true,
    numberOfMonths: 2,
  showOtherMonths: true,
  beforeShow: function(input, datepicker){
    datepicker_draw_nb_nights();
  },
  beforeShowDay: function(date){
    // 0: published
    // 1: class
    // 2: tooltip
    var timestamp_date = date.getTime();
    var result = getDateClass(timestamp_date, timestamp_start_date, timestamp_end_date);
    if(result != false)
      return result;
    
    return [true, "", ""];
    // return [ true, "chocolate", "Chocolate! " ];
  },
  onSelect: function(date_string, datepicker){
    // this => input
    start_date = $input_start_date.datepicker("getDate");
    timestamp_start_date = start_date.getTime();
  },
  onClose: function(){
    if(end_date != null){
      if(timestamp_start_date >= timestamp_end_date || end_date == null){
        $input_end_date.datepicker("setDate", null);
        end_date = null;
        timestamp_end_date = null;
        $input_end_date.datepicker("show");
        return;
      }
    }
    if(start_date != null && end_date == null)
      $input_end_date.datepicker("show");
  }
};
var options_end_date = {
  showAnim: false,
  constrainInput: true,
    numberOfMonths: 2,
  showOtherMonths: true,
  beforeShow: function(input, datepicker){
    datepicker_draw_nb_nights();
  },
  beforeShowDay: function(date){
    var timestamp_date = date.getTime();
    var result = getDateClass(timestamp_date, timestamp_start_date, timestamp_end_date);
    if(result != false)
      return result;
    
    return [ true, "", "Chocolate !" ];
  },
  onSelect: function(date_string, datepicker){
    // this => input
    end_date = $input_end_date.datepicker("getDate");
    timestamp_end_date = end_date.getTime();
  },
  onClose: function(){
    if(end_date == null)
      return;
    
    if(timestamp_end_date <= timestamp_start_date || start_date == null){
      $input_start_date.datepicker("setDate", null);
      start_date = null;
      timestamp_start_date = null;
      $input_start_date.datepicker("show");
    }
  }
};

// $('#start_date').datepicker({ 

//   minDate: 0,
//   dateFormat: "dd-mm-yy",
//   beforeShow: function() {
//     $(this).datepicker('option', 'maxDate', $('#return_date2').val());
//   }
// });


$input_start_date = jQuery("#checkindate");
$input_end_date = jQuery("#checkoutdate");

$input_start_date.datepicker(options_start_date);
$input_end_date.datepicker(options_end_date);

function get_days_difference(start_date, end_date){
  return Math.floor(end_date - start_date) / (1000*60*60*24);
}
</script>
<script>
  $(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
 
        e.preventDefault();
    });
 
    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });
});

</script>

<script>
function readMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


function getCancellation(hid,oid){

  $.ajax({
        url: "<?php echo base_url('hotels/getCancellationDetail')?>",
        type: 'post',
        dataType: "HTML",
        data: {'optionId':oid,'hotelId':hid},
        success: function( data ) {
          console.log(data);
        
          $('#roomOption').html(data);
          var x = document.getElementsByClassName("KETBj bIgcAI Active");
          x.style.backgroundColor  = '#4aa301';
          
        }
      });

}

</script>
</body>
</html>