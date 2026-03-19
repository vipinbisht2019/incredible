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
              <input type="text" class="form-control ui-autocomplete-input" name="departure" id="search_departure" value="DEL" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;" autocomplete="off">
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="date" class="flight-label">CheckIn</label><br>
              <input type="text" name="start-date" id="start-date" placeholder="Start date" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;width: 100%;"/>
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="date" class="flight-label">Checkout</label><br>
              <input type="text" name="end-date" id="end-date" placeholder="End date" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;width: 100%;"/>
              <input type="hidden" name="bookingType" id="bookingType" value="R">
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

            <div id="content">
                <div class="container">
                    <div class="row">
                        <!--<div class="col-sm-3">
                            <div class="sidebar-block" style="margin-top:40px;">
                                <form action="javascript;">
                                    <h3>SHERATON HOTEL</h3>
                                    <span class="star-rating-left">
                                        <img src="<?php //echo base_url('assets/images/star1.png')?>">
                                        <img src="<?php //echo base_url('assets/images/star1.png')?>">
                                        <img src="<?php //echo base_url('assets/images/star1.png')?>">
                                        <img src="<?php //echo base_url('assets/images/star1.png')?>">
                                        <img src="<?php //echo base_url('assets/images/star1.png')?>">
                                    </span>
                                    <span class="location">
                                        Prague, Czech
                                    </span>
                                    <div class="clearfix"></div>
                                    <div style="margin-top:10px;"></div>

                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label>Check-In:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input" value="16/07/2014" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label>Check-Out:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input" value="26/07/2014" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <span class="nights">10-night stay</span>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label class="col-md-6 booking-m5">Rooms:</label>
                                            <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                                <input type="text" class="input" value="1" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input2_wrapper">
                                            <label class="col-md-6 booking-m5">Adults:</label>
                                            <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                                <input type="text" class="input" value="2" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label class="col-md-6 booking-m5">Children:</label>
                                            <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                                <input type="text" class="input" value="0" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label class="col-md-6 booking-m5" style="font-weight:500;color:#d2cccc;font-size:13px;">Price:</label>
                                            <div class="col-md-6 price-left" style="padding-right:0;padding-left:0;">
                                                <span class="red">$150</span><span style="color: #ddd;">/</span><span class="blue">night</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label class="col-md-6 booking-m5" style="font-weight:500;color:#d2cccc;font-size:13px;">Total Booking:</label>
                                            <div class="col-md-6 price-total-left" style="padding-right:0;padding-left:0;">
                                                <span class="red">$1500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="no-padding margin-top text-center" style="margin-top:30px;">
                                        <a href="https://demo.gridgum.com/templates/Travel-agency/booking-hotel-page.html" class="btn btn-default btn-cf-submit3" style="width:100%;">RESERVE NOW</a>
                                    </div>
                                    <div class="clearfix"></div>

                                </form>
                            </div>

                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <div class="sm_slider sm_slider1">
                                <a class="sm_slider_prev" href="#"></a>
                                <a class="sm_slider_next" href="#"></a>
                                <div class="">
                                    <div class="carousel-box">
                                        <div class="inner">
                                            <div class="carousel main">
                                                <ul>
                                                    <li>
                                                        <div class="sm_slider_inner">
                                                            <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
                                                            <div class="txt2">George Smith</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sm_slider_inner">
                                                            <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
                                                            <div class="txt2">Adam Parker</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <?php //echo '<pre>';  print_r($hotelDetail); ?>
                        <div class="blog_content">
                            <span class="star-rating">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                                <img src="<?php echo base_url('assets/images/star1.png')?>">
                            </span>
                            <h3 class="hch"><?php echo $hotelDetail['name']; ?></h3>
                            
                        </div>
                        <div class="clearfix"></div>
                        <p class="address"><?php echo $hotelDetail['ad']['adr']; ?>, <?php echo $hotelDetail['ad']['city']['name']; ?> , <?php echo $hotelDetail['ad']['country']['name']; ?></p>
                        <div class="col-sm-6">
                            <div>
                                <div class="post post-full">
                                    
                                    <div class="post-header">
                                        <div class="post-slide">
                                            <div id="sl1">
                                                <a class="sl1_prev" href="#"></a>
                                                <a class="sl1_next" href="#"></a>
                                                <!--<div class="sl1_pagination"></div>-->
                                                <div class="carousel-box">
                                                    <div class="inner">
                                                        <div class="carousel main">
                                                            <ul>
                                                                <?php foreach($hotelDetail['img'] as $key => $hotelValue){ ?>
                                                                <li>
                                                                    <div class="sl1">
                                                                        <div class="sl1_inner">
                                                                            <img src="<?php echo $hotelValue['url']; ?>" alt="" class="img-responsive" style="height: auto;">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <?php } ?>
                                                                <!-- <li>
                                                                    <div class="sl1">
                                                                        <div class="sl1_inner">
                                                                            <img src="<?php //echo base_url('assets/images/ht02.jpg')?>" alt="" class="img-responsive" style="height: auto;">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="sl1">
                                                                        <div class="sl1_inner">
                                                                            <img src="<?php //echo base_url('assets/images/ht03.jpg')?>" alt="" class="img-responsive"
                                                                            style="height: auto;">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="sl1">
                                                                        <div class="sl1_inner">
                                                                            <img src="<?php //echo base_url('assets/images/ht04.jpg')?>" alt="" class="img-responsive" style="height: auto;">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="sl1">
                                                                        <div class="sl1_inner">
                                                                            <img src="<?php //echo base_url('assets/images/ht05.jpg')?>" alt="" class="img-responsive" style="height: auto;">
                                                                        </div>
                                                                    </div>
                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="post-story">
                                        <div class="post-story-info margin-top">
                                            <div class="date12">Most Popular Facilities:</div>
                                            <div class="by">
                                                <span class="option-booking">
                                                    <i class="free-wifi"></i> <span>Free WIFI</span>
                                                    <i class="breakfast"></i> <span>Breakfast included</span>
                                                    <i class="airport-shuttle"></i> <span>Airport shuttle</span>
                                                    <i class="parking"></i> <span>Parking</span>
                                                    <i class="no-smoking"></i> <span>No smoking room</span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="post-story-body clearfix">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.
                                            </p>
                                            <p>
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum.
                                            </p>
                                            <p>
                                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                            </p>
                                        </div>
                                        <div class="post-story-tags clearfix">
                                            <div class="tags_wrapper"><b>Tags</b>: <a href="#">Travel</a>, <a href="#">Flights</a>, <a href="#">Early Booking</a>, <a href="#">Cruises</a> </div>

                                            <div class="share_post clearfix">
                                                <div class="txt1">Share Post:</div>
                                                <div class="social4_wrapper">
                                                    <ul class="social4 clearfix">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <!--<div class="live-comment">
                                    <div class="live-comment-title">Leave a Comment</div>
                                    <div class="live-comment-form">
                                        <div id="note3"></div>
                                        <div id="fields3">
                                            <form id="ajax-contact-form3" class="form-horizontal" action="javascript:;">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="inputName">Your Name</label>
                                                            <input type="text" class="form-control" id="inputName" name="name" value="Full Name" onBlur="if(this.value=='') this.value='Full Name'" onFocus="if(this.value =='Full Name' ) this.value=''">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="inputEmail">Email</label>
                                                            <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="inputEmail">Website</label>
                                                            <input type="text" class="form-control" id="inputEmail" name="email" value="Website" onBlur="if(this.value=='') this.value='Website'" onFocus="if(this.value =='Website' ) this.value=''">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="inputMessage">Your Message</label>
                                                            <textarea class="form-control" rows="9" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message'"
                                                                onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn-default btn-cf-submit3">Send Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="crv-brdr">
                                        <h5>Amenities & Services</h5>
                                        <ul>
                                            <li><i class="fa fa-cutlery" aria-hidden="true"></i> Restaurant</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Special Diet Meals</li>
                                            <li><i class="fa fa-cutlery" aria-hidden="true"></i> Dining Area</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Lounge</li>
                                            <li><a href="#">View all amenities</a></li>
                                        </ul>
                                        <div class="row" style="border-top: 1px solid #ddd;margin: 0;">
                                            <div class="col-md-6">
                                                <p>Check-in</p>
                                                <h4>10:00 PM</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Check-out</p>
                                                <h4>09:00 AM</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <aside class="ikXvVZ">
                                        <div color="#2bac36" type="" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 cBIBLs">
                                            <span class="PersuasionHoverTextstyles__TextLabelIconContainer-sc-1c06rw1-19 iWHTRO">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" height="1.6rem" width="1.6rem" fill="#2bac36" class="FreeBreakfast__FreeBreakfastIcon-sc-5mryup-0 emCTpD">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path d="M-4-4h24v24H-4z"></path>
                                                        <path fill="#2bac36" d="M13.667 14.667a.667.667 0 010 1.333h-13a.667.667 0 010-1.333zm-9-9.334c.092 0 .166.075.166.167v1.16a.168.168 0 01-.092.15A1.325 1.325 0 004 8v1.667c0 .184.15.333.333.333h2c.184 0 .334-.15.334-.333V8a1.335 1.335 0 00-.741-1.192.167.167 0 01-.093-.15V5.5c0-.092.075-.167.167-.167h6.333a3.333 3.333 0 110 6.667h-1.786a.167.167 0 00-.12.051 5.182 5.182 0 01-3.406 1.604 5.333 5.333 0 01-5.688-5.322V6c0-.368.299-.667.667-.667zm7.664 1.334a.333.333 0 00-.333.333v1.15c0 .787-.165 1.564-.483 2.283a.167.167 0 00.152.234h.664a2 2 0 100-4zM3.191.204a.667.667 0 01.935-.009 1.849 1.849 0 010 2.61c-.2.2-.2.524 0 .724a.667.667 0 01-.943.942 1.847 1.847 0 010-2.609c.2-.2.2-.524 0-.724a.667.667 0 01.008-.934zm3 0a.667.667 0 01.935-.009 1.849 1.849 0 010 2.61c-.2.2-.2.524 0 .724a.667.667 0 01-.943.942 1.847 1.847 0 010-2.609c.2-.2.2-.524 0-.724a.667.667 0 01.008-.934zM9.183.195c.26-.26.683-.26.943 0a1.849 1.849 0 010 2.61c-.2.2-.2.524 0 .724a.667.667 0 01-.943.942 1.847 1.847 0 010-2.609.514.514 0 000-.724.667.667 0 010-.943z"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span>Free BreakFast Available</span>
                                        </div>
                                        <div class="PriceNBookingButtonNPersuasionstyles__ColorBackgroundFromHermes-sc-9xv89l-4 PriceNBookingButtonNPersuasionstyles__FBOFCADDealText-sc-9xv89l-6 hWVVWz ixSGS">
                                            <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                                <span type="contentPersuasion2" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 gBeoQG">
                                                    <div color="#ffffff" type="contentPersuasion2" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 qvdrJ">
                                                        <span>SPL DEAL</span>
                                                    </div>
                                                </span>
                                                <span type="contentPersuasion2" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 gBeoQG">
                                                    <div color="#4f525a" type="contentPersuasion2" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 lfNwnS">
                                                        <span>Special Deal for Vaccinated Guests</span>
                                                    </div>
                                                </span>
                                            </span>
                                        </div>
                                    </aside>
                                    <div>
                                        <div class="LocationPersuasionWithoutPricestyles__Container-sc-c8zeco-0 cvxvQJ">
                                            <div class="LocationPersuasionWithoutPricestyles__IconWrap-sc-c8zeco-1 kpJnCn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.8rem" height="1.8rem" fill="white" class="OfferIcon-sc-hzz5jm-0 ihAnPn">
                                                    <path d="M32 16a5.811 5.811 0 00-3.029-5.147.332.332 0 01-.16-.385 5.888 5.888 0 00-7.279-7.28.332.332 0 01-.385-.16 5.89 5.89 0 00-10.294 0 .332.332 0 01-.385.16 5.888 5.888 0 00-7.279 7.28.332.332 0 01-.16.385 5.887 5.887 0 000 10.293.335.335 0 01.16.387 5.888 5.888 0 007.279 7.279c.15-.044.31.023.385.16a5.89 5.89 0 0010.294 0 .332.332 0 01.385-.16 5.887 5.887 0 007.279-7.279.336.336 0 01.16-.387A5.805 5.805 0 0032 15.999zm-11.123 7.315a2.438 2.438 0 112.437-2.44v.003a2.438 2.438 0 01-2.437 2.437zm-10.438.133a1.333 1.333 0 01-1.881-1.881L21.562 8.563a1.333 1.333 0 111.881 1.881zm.685-14.763a2.439 2.439 0 11-2.439 2.439v-.001a2.439 2.439 0 012.439-2.437z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="LocationPersuasionWithoutPricestyles__SignUpStaticText-sc-c8zeco-2 hENrtk">Login &amp; Get</p><p class="LocationPersuasionWithoutPricestyles__DealsPersuasionText-sc-c8zeco-3 byWEN">The Best Deals &amp; Prices</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="BookingWidgetstyles__BookingWidgetStyleContainer-sc-1tsb1-0 dgYyfz"><p class="BookingWidgetstyles__PriceStartsAtText-sc-1tsb1-1 kUvMXU">price starts at</p><div class="BookingWidgetstyles__PriceInfo-sc-1tsb1-2 jyqvHA"><div class="BookingWidgetstyles__Column-sc-1tsb1-3 eHNNyP"><div class="dwebCommonstyles__FlexCentered-sc-112ty3f-4 fkOjQZ"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.4rem" height="1.4rem" fill="#141823" class="RupeeIcon-sc-5hlwf0-0 guwrRX"><path d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z"></path></svg><p class="BookingWidgetstyles__PriceValueStyled-sc-1tsb1-4 gpxhWi">3074</p></div><div class="dwebCommonstyles__FlexCentered-sc-112ty3f-4 fkOjQZ">+<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width=".8rem" height=".8rem" fill="#141823" class="RupeeIcon-sc-5hlwf0-0 kjxuYv"><path d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z"></path></svg><p class="BookingWidgetstyles__PlusPriceValueText-sc-1tsb1-5 kXa-DyS">758 taxes &amp; fees</p></div><p class="BookingWidgetstyles__PerRoomPerNightLabel-sc-1tsb1-6 kaZjev">per room / night</p></div><div class="BookingWidgetstyles__Column-sc-1tsb1-3 eHNNyP"><div class="dwebCommonstyles__FlexCentered-sc-112ty3f-4 BookingWidgetstyles__NoOfGuestsContainer-sc-1tsb1-7 fkOjQZ hSjZuk"><svg viewBox="0 0 32 32" width="2rem" height="2rem" fill="#777777" class="UserIcon__UserIconSVG-sc-xqeqn3-0 bEvPce"><path d="M21.185 3.148a7.333 7.333 0 11-10.37 10.371 7.333 7.333 0 0110.37-10.371zM16 17.667c-6.992.008-12.659 5.674-12.667 12.667 0 .368.298.667.667.667h24a.667.667 0 00.667-.667C28.659 23.342 22.993 17.675 16 17.667z"></path></svg><p class="BookingWidgetstyles__NoOfGuestsAndRoomsTextStyles-sc-1tsb1-8 krdDso">2 x Guests</p></div><div class="dwebCommonstyles__FlexCentered-sc-112ty3f-4 BookingWidgetstyles__NoOfGuestsContainer-sc-1tsb1-7 fkOjQZ hSjZuk"><svg viewBox="0 0 32 32" width="2rem" height="2rem" fill="#777777" class="DoubleBedIcon__DoubledBedIconSVG-sc-1hxyafg-0 jZiQuq"><path d="M30 15.667H2a2 2 0 00-2 2V23a1.998 1.998 0 001.5 1.933.667.667 0 01.5.644V27a1.333 1.333 0 002.666 0v-1.333c0-.368.298-.667.667-.667h21.333c.368 0 .667.298.667.667V27a1.333 1.333 0 002.666 0v-1.419a.667.667 0 01.5-.644 2 2 0 001.5-1.937v-5.333a2 2 0 00-2-2zm-26.667-2c0 .368.298.667.667.667h24a.667.667 0 00.667-.667V7a3.333 3.333 0 00-3.333-3.333H6.667A3.333 3.333 0 003.334 7zm5.334-4h2.667c1.191 0 2.292.635 2.888 1.667a.667.667 0 01-.577 1H6.357a.667.667 0 01-.578-1 3.335 3.335 0 012.888-1.667zm12 0h2.667c1.191 0 2.292.635 2.888 1.667a.667.667 0 01-.577 1h-7.288a.667.667 0 01-.578-1 3.335 3.335 0 012.888-1.667z"></path></svg><p class="BookingWidgetstyles__NoOfGuestsAndRoomsTextStyles-sc-1tsb1-8 krdDso">1 x Room</p></div></div></div><button class="dwebCommonstyles__ButtonBase-sc-112ty3f-10 BookingWidgetstyles__ViewRoomOptionsButton-sc-1tsb1-10 KETBj iiLDmi"><div class="TextFieldExpt__Tag-sc-7a7pro-0 bxWEDo"><span>VIEW 14 ROOM OPTIONS</span><div class="BookingWidgetstyles__RightDoubleArrowIconContainer-sc-1tsb1-9 duCWZw"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 15" width="2rem" height="2rem" fill="#FFFFFF" class="RightDoubleArrow__RightDoubleArrowIcon-sc-1tk0dpe-0 fvCjGY"><g fill="none" fill-rule="evenodd"><path d="M-6-5h24v24H-6z"></path><path fill="#2276E3" fill-rule="nonzero" d="M6.345 14.399l-.114-.003a.864.864 0 01-.637-1.354l3.95-5.678a.288.288 0 000-.329l-3.95-5.68A.864.864 0 017.013.37l3.949 5.678c.479.692.479 1.61 0 2.302l-3.95 5.678a.864.864 0 01-.781.367zm-5.77-.288a.576.576 0 01-.472-.902l3.95-5.678a.579.579 0 000-.66L.103 1.193A.576.576 0 01.576.288h1.928c.188 0 .365.092.472.247l3.95 5.678c.411.594.411 1.38 0 1.973l-3.95 5.678a.576.576 0 01-.472.247z"></path></g></svg></div></div></button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <nav>
                  <ul id="mainNav">
                    <li class="active"><a href="#safety">Safety & Hygiene</a></li>
                    <li><a href="#room">Room Options</a></li>
                    <li><a href="#amenities">Amenities</a></li>
                    <li><a href="#guest">Guest Reviews</a></li>
                    <li><a href="#hotel">Hotel Policies</a></li> 
                    <li><a href="#location">Location</a></li>
                    <li><a href="#property">About Property</a></li>
                    <li><a href="#qna">Questions & Answers</a></li>  
                    <li><a href="#similar_hotel">Similar Hotels</a></li>    
                  </ul>
                </nav>
                <section id="safety">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="bg-1">
                                <h2>Safety & Hygiene</h2>
                            </div>
                            <div class="service-1 click1">
                                <div class="row">
                                    <input type="checkbox" id="expend" />
                                    <div class="medium-12 small-12 columns smalldesc">
                                        <h5 style="padding: 0px;margin-bottom: 5px;">SHERATON Prague</h5>
                                        <p>Our in-depth cleanliness and disinfection protocol is designed to ensure your safety and peace of mind from check-in to check-out.
                                        </p>
                                        <ul>
                                            <li>Physical distancing measures throughout the hotel</li>
                                            <li>Increase cleaning and disinfecting frequency throughout the hotel, especially high-touch items</li>
                                            <li>Alcohol-based hand sanitizing and glove stations near the front entrance and public areas</li>
                                            <li>Food safety -Adhere to the strict safety procedures while serving all food and beverages</li>
                                        </ul>
                                    </div>
                                    <label for="expend" style="padding-left: 15px;padding-right: 15px;">Read More</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="room" data-sr>
                    <!--<h2>Room Options</h2>-->
                    <div class="container">
                        <div class="col-md-12">
                            <div class="bg-2">
                                <ul style="display: flex;">
                                    <li><input type="checkbox"> <span style="font-weight:500;">Free Cancellation</span></li>&nbsp;
                                    <li><input type="checkbox"> <span style="font-weight:500;">Free Breakfast</span></li>
                                </ul>
                            </div>
                            <table>
                              <thead>
                                <tr>
                                  <th>Room Type</th>
                                  <th>Room Options</th>
                                  <th>Inclusions</th>
                                  <th>Price</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <!-- <tr>
                                   <td style="position:sticky;top:0px;"><p><b>Superior Room</b></p></td>
                                   <td>
                                        <p><b>Superior Room</b></p>
                                        <div class="Layouts__Row-sc-1yzlivq-0 RoomInfoText__RoomTextInfoWrapperStyled-sc-1n5mobe-0 iwUOtq eLtUXz"><span color="#00B318" class="RoomInfoText__RoomInfoTextStyled-sc-1n5mobe-1 hPzpAm"><div class="RoomFlavorstyles__RoomOptionsIconContainer-sc-1btnl3r-30 bjDOBV"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2.5rem" height="2rem" fill="#00B318" class="FreeCancelIcon-sc-3axaxr-0 hpGlR"><path d="M21.448 5.88l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm0 3.806l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm-.006 1.04c.612-.002 1.15.4 1.326.984a.345.345 0 01-.266.436H22.5c-.735.143-1.378.335-1.994.58l.074-.026a.346.346 0 01-.272-.001l.002.001a.349.349 0 01-.181-.198l-.001-.002a1.143 1.143 0 01-.07-.392c0-.764.62-1.384 1.384-1.384zM13.3 21.446v-.002h.002c.19 0 .344.154.344.344l-.002.042v-.002a10.22 10.22 0 00-.037 2.048l-.002-.036a.346.346 0 01-.344.372H2.769a2.77 2.77 0 01-2.768-2.766V17.6a2.081 2.081 0 011.812-2.059l.01-.001a3.46 3.46 0 00.018-6.864l-.017-.002A2.083 2.083 0 01.002 6.616V2.768A2.77 2.77 0 012.77 0h27.678a2.77 2.77 0 012.77 2.768v3.848a2.08 2.08 0 01-1.822 2.06 3.468 3.468 0 00-3.028 3.436v.004a.344.344 0 01-.45.327l.002.001a10.484 10.484 0 00-1.936-.415l-.052-.005a.343.343 0 01-.305-.342l.001-.029v.001a6.245 6.245 0 014.516-5.541l.044-.011a.344.344 0 00.256-.333V3.111a.344.344 0 00-.344-.344H3.114a.344.344 0 00-.344.344v2.656c0 .156.104.29.254.332 2.665.745 4.587 3.152 4.587 6.008s-1.922 5.263-4.543 5.997l-.044.011a.344.344 0 00-.254.332v2.654c0 .19.154.346.344.346h10.188zm11.34-7.438c4.968 0 8.995 4.027 8.995 8.995s-4.027 8.995-8.995 8.995c-4.968 0-8.995-4.027-8.995-8.995s4.027-8.995 8.995-8.995zm4.532 7.202l.004-.006a1.04 1.04 0 00-1.659-1.247l-.001.001-3.784 5.046a.341.341 0 01-.52.04l-1.8-1.796a1.038 1.038 0 00-1.465 1.467l-.001-.001 2.074 2.074c.386.392.912.614 1.46.614.05 0 .102-.006.154-.006a2.057 2.057 0 001.516-.824l4.02-5.36z"></path></svg></div><div class="RoomFlavorstyles__CancellationPolicyContainer-sc-1btnl3r-31 dpbkmY"><span>Free Cancellation till 19 Aug'21</span><a class="dwebCommonstyles__PrimaryLink-sc-112ty3f-8 npTjr">Cancellation Policy</a></div></span></div>
                                   </td>
                                   <td>
                                        <ul style="font-size: 13px;color: #6b6b6b;">
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Special Offer for Vaccinated Guest</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free Breakfast and Dinner</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Buffet Breakfast is available.</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Buffet Lunch Or Dinner is available.</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Early Check in is available for up to 4 hours from the standard check-in time. This service is subject to availability.</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Late check-out is available for up to 3 hours after the standard check-out time. This service is subject to availability.</li>
                                        </ul>
                                   </td>
                                   <td>
                                        <span class="jteAVe">
                                            <div class="dpFoBC">29% Off</div>
                                            <span class="dvvgLR"></span>
                                        </span>
                                        <div>
                                            <span class="eQHknX"><i class="fa fa-inr"></i> 4875</span><div class="dcHqnQ"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="#141823" width="1.4rem" height="1.4rem" class="guwrRX"><path d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z"></path></svg>3440</div><span class="kahbAo">+ <i class="fa fa-inr"></i> 848 taxes &amp; fees</span><p class="cJSqKG">per room / night</p><div class="bCUylV"><a class="npTjr">EMI Starts at <i class="fa fa-inr"></i> 12866/month</a></div>
                                        </div>
                                        <div>
                                            <button class="KETBj bIgcAI">Select  Room</button>
                                            <a class="npTjr">Login for more deals</a>
                                        </div>
                                   </td>
                                 </tr> -->
                                 <?php foreach ($hotelDetail['ops'] as $key => $roomValue) { ?>
                                  
                                
                                 <tr>
                                   <td style="position:sticky;top:0px;"><p><b><?php echo $roomValue['ris'][0]['rt']?></b></p></td>
                                   <td>
                                        <p><b>Deluxe Room with free Breakfast and Dinner</b></p>
                                        <div class="Layouts__Row-sc-1yzlivq-0 RoomInfoText__RoomTextInfoWrapperStyled-sc-1n5mobe-0 iwUOtq eLtUXz"><span color="#00B318" class="RoomInfoText__RoomInfoTextStyled-sc-1n5mobe-1 hPzpAm"><div class="RoomFlavorstyles__RoomOptionsIconContainer-sc-1btnl3r-30 bjDOBV"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2.5rem" height="2rem" fill="#00B318" class="FreeCancelIcon-sc-3axaxr-0 hpGlR"><path d="M21.448 5.88l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm0 3.806l-.053.001a1.384 1.384 0 11.055-2.767h-.003a1.384 1.384 0 01.002 2.766h-.003zm-.006 1.04c.612-.002 1.15.4 1.326.984a.345.345 0 01-.266.436H22.5c-.735.143-1.378.335-1.994.58l.074-.026a.346.346 0 01-.272-.001l.002.001a.349.349 0 01-.181-.198l-.001-.002a1.143 1.143 0 01-.07-.392c0-.764.62-1.384 1.384-1.384zM13.3 21.446v-.002h.002c.19 0 .344.154.344.344l-.002.042v-.002a10.22 10.22 0 00-.037 2.048l-.002-.036a.346.346 0 01-.344.372H2.769a2.77 2.77 0 01-2.768-2.766V17.6a2.081 2.081 0 011.812-2.059l.01-.001a3.46 3.46 0 00.018-6.864l-.017-.002A2.083 2.083 0 01.002 6.616V2.768A2.77 2.77 0 012.77 0h27.678a2.77 2.77 0 012.77 2.768v3.848a2.08 2.08 0 01-1.822 2.06 3.468 3.468 0 00-3.028 3.436v.004a.344.344 0 01-.45.327l.002.001a10.484 10.484 0 00-1.936-.415l-.052-.005a.343.343 0 01-.305-.342l.001-.029v.001a6.245 6.245 0 014.516-5.541l.044-.011a.344.344 0 00.256-.333V3.111a.344.344 0 00-.344-.344H3.114a.344.344 0 00-.344.344v2.656c0 .156.104.29.254.332 2.665.745 4.587 3.152 4.587 6.008s-1.922 5.263-4.543 5.997l-.044.011a.344.344 0 00-.254.332v2.654c0 .19.154.346.344.346h10.188zm11.34-7.438c4.968 0 8.995 4.027 8.995 8.995s-4.027 8.995-8.995 8.995c-4.968 0-8.995-4.027-8.995-8.995s4.027-8.995 8.995-8.995zm4.532 7.202l.004-.006a1.04 1.04 0 00-1.659-1.247l-.001.001-3.784 5.046a.341.341 0 01-.52.04l-1.8-1.796a1.038 1.038 0 00-1.465 1.467l-.001-.001 2.074 2.074c.386.392.912.614 1.46.614.05 0 .102-.006.154-.006a2.057 2.057 0 001.516-.824l4.02-5.36z"></path></svg></div><div class="RoomFlavorstyles__CancellationPolicyContainer-sc-1btnl3r-31 dpbkmY"><span>Free Cancellation till 19 Aug'21</span><a class="dwebCommonstyles__PrimaryLink-sc-112ty3f-8 npTjr">Cancellation Policy</a></div></span></div>
                                   </td>
                                   <td>
                                        <ul style="font-size: 13px;color: #6b6b6b;">
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Special Offer for Vaccinated Guest</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Free Breakfast and Dinner</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Buffet Breakfast is available.</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Buffet Lunch Or Dinner is available.</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Early Check in is available for up to 4 hours from the standard check-in time. This service is subject to availability.</li>
                                            <li><i class="fa fa-check-circle" aria-hidden="true"></i> Complimentary Late check-out is available for up to 3 hours after the standard check-out time. This service is subject to availability.</li>
                                        </ul>
                                   </td>
                                   <td>
                                        <span class="jteAVe">
                                            <div class="dpFoBC">29% Off</div>
                                            <span class="dvvgLR"></span>
                                        </span>
                                        <div>
                                            <span class="eQHknX"><i class="fa fa-inr"></i> 4875</span><div class="dcHqnQ"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="#141823" width="1.4rem" height="1.4rem" class="guwrRX"><path d="M21.482 7.945h3.536c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.786 1.818h-3.536a9.429 9.429 0 01-2.625 5.109 9.509 9.509 0 01-6.75 2.891h-.679l9.661 9.255c0 .018.018.018.036.036.679.673.696 1.782.036 2.473a1.742 1.742 0 01-2.518.091L5.714 19a1.78 1.78 0 01-.554-1.364c.036-.964.839-1.727 1.786-1.691h5.179a5.902 5.902 0 004.214-1.836 6.327 6.327 0 001.482-2.527H6.946c-.982 0-1.786-.818-1.786-1.818s.804-1.818 1.786-1.818h10.875C17 5.455 14.714 3.782 12.125 3.764H6.946c-.982 0-1.786-.818-1.786-1.818S5.964.128 6.946.128h18.071c.982 0 1.786.818 1.786 1.818s-.804 1.818-1.804 1.818h-5.464a8.504 8.504 0 011.946 4.182z"></path></svg>3440</div><span class="kahbAo">+ <i class="fa fa-inr"></i> 848 taxes &amp; fees</span><p class="cJSqKG">per room / night</p><div class="bCUylV"><a class="npTjr">EMI Starts at <i class="fa fa-inr"></i> 12866/month</a></div>
                                        </div>
                                        <div>
                                            <button class="KETBj bIgcAI">Select  Room</button>
                                            <a class="npTjr">Login for more deals</a>
                                        </div>
                                   </td>
                                 </tr>
                                 <?php } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <section id="amenities">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="bg-3">
                                <h2>Amenities at SHERATON Prague</h2>
                                <div class="plr-15">
                                    <span class="poplr-amnts">
                                        <span class="poplr-amnts-span">POPULAR AMENITIES</span>
                                    </span>
                                    <div class="content">
                                        <ul class="cJfnDm" style="border-bottom: 1px solid #ddd;">
                                            <svg viewBox="0 0 16 16" fill="#18A160" class="bMXVPP">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path d="M-4-4h24v24H-4z"></path>
                                                    <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                </g>
                                            </svg>
                                            <span class="jMSGOV">Doctor On Call</span>
                                            <svg viewBox="0 0 16 16" fill="#18A160" class="bMXVPP">
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
                                            <span class="jMSGOV">Banquet hall</span>
                                            <!--<a class="npTjr">View More</a>-->
                                            
                                        </ul>
                                        <div id="show-more"><a class="npTjr" href="javascript:void(0)" style="text-decoration: none;">View More</a></div>
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
            <section id="guest">
                <div class="container">
                        <div class="col-md-12">
                            <div class="bg-3">
                                <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">
                                    <div class="col-md-6">
                                        <h2 style="border-bottom: 0px;margin-bottom: 0px;">Guest Reviews & Rating for SHERATON Prague</h2>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <ul class="menu">
                                            <li class="dropdown">
                                                <div style="display: flex;">
                                                    <b style="font-size: 14px;font-weight: 600;">Filter By:</b> 
                                                    <a href="#">
                                                        Most Helpful First&nbsp;
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                </div>
                                            <!--Start of Dropdown-->
                                                <ul class="dropdown-nav">
                                                    <li class="lst-brder"><b>Filter By</b></li>
                                                    <li class="lst-brder"><input type="radio" name="filter" value="See All Reviews" checked> See All Reviews</li>
                                                    <li class="lst-brder"><input type="radio" name="filter" value="Experienced Traveller Only"> Experienced Traveller Only</li>
                                                    <li class="lst-brder"><input type="radio" name="filter" value="Photo Reviews"> Photo Reviews</li>
                                                    <li class="lst-brder"><input type="radio" name="filter" value="Positive Reviews"> Positive Reviews</li>
                                                    <li class="lst-brder"><input type="radio" name="filter" value="Negative Reviews"> Negative Reviews</li>
                                                    <li class="lst-brder"><input type="radio" name="filter" value="Featured Reviews"> Featured Reviews</li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="menu">
                                            <li class="dropdown">
                                                <div style="font-size: 14px;display: flex;">
                                                    <b style="font-weight: 600;">Sort By:</b> 
                                                    <a href="#">
                                                        Most Helpful First&nbsp;
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                </div>
                                            <!--Start of Dropdown-->
                                                <ul class="dropdown-nav">
                                                    <li class="lst-brder"><b>Sort By</b></li>
                                                    <li class="lst-brder"><input type="radio" name="sort" value="most helpful first" checked> Most Helpful First</li>
                                                    <li class="lst-brder"><input type="radio" name="sort" value="Most Recent First"> Most rececnt First</li>
                                                    <li class="lst-brder"><input type="radio" name="sort" value="Most Favourable First"> Most Favourable First</li>
                                                    <li class="lst-brder"><input type="radio" name="sort" value="Most Critical First"> Most Critical First</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="rating-box">
                                            <div class="score-container">
                                                <div class="score"></div>
                                                <div class="score-container-star-rating">
                                                    <div class="current-rating"></div>
                                                </div>
                                                <div class="reviews-stats">
                                                    <span class="reviewers-small">Votes:</span>
                                                    <span class="reviews-num"></span>
                                                </div>
                                            </div>
                                            <div class="rating-histogram">
                                                <div class="rating-bar-container five" valuenow="45975">
                                                    <span class="bar-label">5 <i class="fa fa-star"></i></span>
                                                    <span class="bar"></span>
                                                    <span class="bar-number"></span>
                                                </div>
                                                <div class="rating-bar-container four" valuenow="97979">
                                                    <span class="bar-label">4 <i class="fa fa-star"></i></span>
                                                    <span class="bar"></span>
                                                    <span class="bar-number"></span>
                                                </div>
                                                <div class="rating-bar-container three" valuenow="4697">
                                                    <span class="bar-label">3 <i class="fa fa-star"></i></span>
                                                    <span class="bar"></span>
                                                    <span class="bar-number"></span>
                                                </div>
                                                <div class="rating-bar-container two" valuenow="3032">
                                                    <span class="bar-label">2 <i class="fa fa-star"></i></span>
                                                    <span class="bar"></span>
                                                    <span class="bar-number"></span>
                                                </div>
                                                <div class="rating-bar-container one" valuenow="9480">
                                                    <span class="bar-label">1 <i class="fa fa-star"></i></span>
                                                    <span class="bar"></span>
                                                    <span class="bar-number"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="brdr-1">
                                            <h4>What our Guests says?</h4>
                                            <div class="plr-15">
                                                <ul class="gust-dsply">
                                                    <li>
                                                        <span class="gust-brdr">Cooperative Staff( 103 )</span>
                                                    </li>
                                                    <li>
                                                        <span class="gust-brdr">comfortable Stays( 80 )</span>
                                                    </li>
                                                    <li>
                                                        <span class="gust-brdr">good rooms( 100 )</span>
                                                    </li>
                                                    <li>
                                                        <span class="gust-brdr">delicious food( 50 )</span>
                                                    </li>
                                                    <li>
                                                        <span class="gust-brdr Click-here">+8 more</span>
                                                    </li>
                                                </ul>
                                                <div class="custom-model-main">
                                                    <div class="custom-model-inner">        
                                                        <div class="close-btn">Show Reviews</div>
                                                        <div class="custom-model-wrap">
                                                            <div class="pop-up-content-wrap">
                                                                <h4>What our Guests says?</h4>
                                                                <ul class="gust-dsply">
                                                                    <li>
                                                                        <span class="gust-brdr">Cooperative Staff( 103 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">comfortable Stays( 80 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">good rooms( 100 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">delicious food( 50 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">Great Place( 42 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">nice location( 60 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">nice breakfast( 18 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">near delhi airport( 13 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">fast buffet( 6 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">business class( 11 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">room dining( 6 )</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="gust-brdr">luxurious facility( 5 )</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>  
                                                    </div>  
                                                    <div class="bg-overlay"></div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="brdr-1">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="<?php echo base_url('assets/images/')?>">
                                            </div>
                                            <div class="col-md-11">
                                                <div class="kVHBSW iwUOtq">
                                                    <div class="fzWoxL">
                                                        <div>
                                                            <span class="kuXsVz">Mukesh</span>
                                                            <span class="cOnxwt">(Stayed 10 July, 2021)</span>
                                                        </div>
                                                        <p class="gVCyop">Solo Traveller | 5 Reviews Written</p>
                                                    </div>
                                                    <div class="jgEWxQ">
                                                        <span class="jrJdRf">3</span>
                                                        <span class="jrJdRf">/5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>            
                                    </div>-->
                                </div>
                                <div style="background: #f5f5f5;border-top: 1px solid #ddd;margin-top: 20px;">
                                    <div class="row mt-30">
                                        <div class="col-md-1">
                                            <span id="firstName" style="display: none;">Mukesh</span>
                                            <span id="lastName" style="display: none;"></span>
                                            <div id="profileImage"></div>
                                            <!--img src="<?php echo base_url('assets/images/')?>">-->
                                        </div>
                                        <div class="col-md-11">
                                            <div class="kVHBSW iwUOtq">
                                                <div class="fzWoxL">
                                                    <div>
                                                        <span class="kuXsVz">Mukesh</span>
                                                        <span class="cOnxwt">(Stayed 10 July, 2021)</span>
                                                    </div>
                                                    <p class="gVCyop">Solo Traveller | 5 Reviews Written</p>
                                                </div>
                                                <div class="jgEWxQ">
                                                    <span class="jrJdRf">3</span>
                                                    <span class="jrJdRf">/5</span>
                                                </div>
                                            </div>
                                            <span class="cHVFbF">
                                                <div class="body">
                                                    <p>Near airport, ok hotel. just missing the wow factor u expect from a 5 star hotel. some staff are nice but mostly staff are not trained properly,</p>
                                                    <details>
                                                        <summary>
                                                            <span id="open">read more</span> 
                                                            <span id="close">close</span> 
                                                        </summary>
                                                        <p>
                                                          they just dont care about guests around them. Buffet food was good but normally so crowded and noisy that staff are normally overwhelmed and running around like a popular dhaba restaurant. Buffet food is normally repeated, but fine for 1-2 days stay. Housekeeping staff dont wear mask properly and cleaning was normally unsatisfactory. Towels had yellow/red spots. Overall average hotel but can be good option to unwind for a day for flight stopover as its near airport. I enqiured the hotel manager for extension of my stay but she didnt call back despite promising to do so. This tells you the attitude of the hotel. Food is not allowed from outside and in room dining is very expensive. Beverages are sold at 5 times the market price.
                                                       </p>
                                                       
                                                    </details>
                                                    <p><section class="img-gallery-magnific">
                                                        <div class="magnific-img">
                                                            <a class="image-popup-vertical-fit" href="https://unsplash.it/974/?random" title="">
                                                                <img src="https://unsplash.it/974/?random" alt="" />
                                                                <!--<i class="fa fa-search-plus" aria-hidden="true"></i>-->
                                                            </a>
                                                        </div>
                                                        <div class="magnific-img">
                                                            <a class="image-popup-vertical-fit" href="https://unsplash.it/900/?random" title="">
                                                                <img src="https://unsplash.it/900/?random" alt="" />
                                                                <!--<i class="fa fa-search-plus" aria-hidden="true"></i>-->
                                                            </a>
                                                        </div>
                                                        <div class="magnific-img">
                                                            <a class="image-popup-vertical-fit" href="https://unsplash.it/902" title="">
                                                                <img src="https://unsplash.it/902/" alt="" />
                                                                <!--<i class="fa fa-search-plus" aria-hidden="true"></i>-->
                                                            </a>
                                                        </div>
                                                        <div class="magnific-img">
                                                            <a class="image-popup-vertical-fit" href="https://unsplash.it/901" title="">
                                                                <img src="https://unsplash.it/901" alt="" />
                                                                <!--<i class="fa fa-search-plus" aria-hidden="true"></i>-->
                                                            </a>
                                                        </div>
                                                        <div class="magnific-img">
                                                            <a class="image-popup-vertical-fit" href="https://unsplash.it/888/?random" title="">
                                                                <img src="https://unsplash.it/888/?random" alt="" />
                                                                <!--<i class="fa fa-search-plus" aria-hidden="true"></i>-->
                                                            </a>
                                                        </div>
                                                    </section>
                                                    <div class="clear"></div>
                                                </p>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <span id="firstName" style="display: none;">Animesh</span>
                                            <span id="lastName" style="display: none;">Mishra</span>
                                            <div id="profileImage"></div>
                                            <!--<img src="<?php echo base_url('assets/images/')?>">-->
                                        </div>
                                        <div class="col-md-11">
                                            <div class="kVHBSW iwUOtq">
                                                <div class="fzWoxL">
                                                    <div>
                                                        <span class="kuXsVz">Animesh Mishra</span>
                                                        <span class="cOnxwt">(Stayed 10 July, 2021)</span>
                                                    </div>
                                                    <p class="gVCyop">Solo Traveller | 5 Reviews Written</p>
                                                </div>
                                                <div class="jgEWxQ">
                                                    <span class="jrJdRf">3</span>
                                                    <span class="jrJdRf">/5</span>
                                                </div>
                                            </div>
                                            <span class="cHVFbF">
                                                <div class="body">
                                                    <p>Near airport, ok hotel. just missing the wow factor u expect from a 5 star hotel. some staff are nice but mostly staff are not trained properly,</p>
                                                    <details>
                                                        <summary>
                                                            <span id="open">read more</span> 
                                                            <span id="close">close</span> 
                                                        </summary>
                                                        <p>
                                                          they just dont care about guests around them. Buffet food was good but normally so crowded and noisy that staff are normally overwhelmed and running around like a popular dhaba restaurant. Buffet food is normally repeated, but fine for 1-2 days stay. Housekeeping staff dont wear mask properly and cleaning was normally unsatisfactory. Towels had yellow/red spots. Overall average hotel but can be good option to unwind for a day for flight stopover as its near airport. I enqiured the hotel manager for extension of my stay but she didnt call back despite promising to do so. This tells you the attitude of the hotel. Food is not allowed from outside and in room dining is very expensive. Beverages are sold at 5 times the market price.
                                                       </p>
                                                    </details>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="content_detail__pagination cdp" actpage="1">
                                        <a href="#!-1" class="cdp_i">prev</a>
                                        <a href="#!1" class="cdp_i">1</a>
                                        <a href="#!2" class="cdp_i">2</a>
                                        <a href="#!3" class="cdp_i">3</a>
                                        <a href="#!4" class="cdp_i">4</a>
                                        <a href="#!5" class="cdp_i">5</a>
                                        <a href="#!6" class="cdp_i">6</a>
                                        <a href="#!7" class="cdp_i">7</a>
                                        <a href="#!8" class="cdp_i">8</a>
                                        <a href="#!9" class="cdp_i">9</a>
                                        <a href="#!10" class="cdp_i">10</a>
                                        <a href="#!11" class="cdp_i">11</a>
                                        <a href="#!12" class="cdp_i">12</a>
                                        <a href="#!13" class="cdp_i">13</a>
                                        <a href="#!14" class="cdp_i">14</a>
                                        <a href="#!15" class="cdp_i">15</a>
                                        <a href="#!16" class="cdp_i">16</a>
                                        <a href="#!17" class="cdp_i">17</a>
                                        <a href="#!18" class="cdp_i">18</a>
                                        <a href="#!19" class="cdp_i">19</a>
                                        <a href="#!+1" class="cdp_i">next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="hotel">
                <div class="container">
                    <div class="col-md-12">
                        <div class="bg-3">
                            <h2>Hotel Policies</h2>
                            <div class="body" style="max-width: 100%;background: transparent;box-shadow: none;border: none;">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> According to government regulations, a valid Photo ID has to be carried by every person above the age of 18 staying at SHERATON Prague. The identification proofs accepted are Drivers License, Voters Card, Passport, Ration Card. Without valid ID the guest will not be allowed to check in.</li>
                                </ul>
                                <details>
                                    <summary>
                                        <span id="open">read more</span> 
                                        <span id="close">close</span> 
                                    </summary>
                                    <ul>
                                        
                                        <li><i class="fa fa-check-circle"></i> The primary guest checking in to the hotel must be at least 18 years of age.</li>
                                        <li><i class="fa fa-check-circle"></i> The standard check-in time is 3:00 PM and the standard check-out time is 12:00 PM. After booking you will be sent an email confirmation with hotel phone number. You can contact the hotel directly for early check-in or late check-out. Early check-in or late check-out is subject to availability and may be chargeable by SHERATON Prague.</li>
                                        <li><i class="fa fa-check-circle"></i> This is a couple friendly property. Unmarried/Unrelated couples are allowed to check-in. Local Ids can be presented as proof of identification. Final rights of admission/check-in remain reserved with the hotel management & refund can be denied in-case any misconduct is observed by the hotel management.</li>
                                        <li><i class="fa fa-check-circle"></i> Customers with Local IDs will not be allowed to check-in. SHERATON Prague reserves the right of admission for local residents. Accommodation can be denied to guests residing in the same city.</li>
                                        <li><i class="fa fa-check-circle"></i> The room tariff includes all taxes. The amount paid for the room does not include charges for optional services and facilities (such as room service, mini bar, snacks or telephone calls). These will be charged by the hotel at the time of check-out from the hotel.</li>
                                        <li><i class="fa fa-check-circle"></i>
                                         For any update, the customer shall pay applicable cancellation/modification charges.</li>
                                         <li><i class="fa fa-check-circle"></i> Modified bookings will be subject to availability and revised booking policy of the hotel.</li>
                                         <li><i class="fa fa-check-circle"></i> The cancellation/modification charges are standard and any waiver is entirely on the hotel's discretion.</li>

                                    </ul>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="location">
                <div class="container">
                    <div class="col-md-12">
                        <div class="bg-3">
                            <h2>Location of SHERATON Prague</h2>
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
                <h2>Location</h2>
            </section>
            <section id="property">
                <div class="container">
                    <div class="col-md-12">
                        <div class="bg-3">
                            <h2>About Property</h2>
                            <div class="body" style="max-width: 100%;background: transparent;box-shadow: none;border: none;">
                                <p><b>Overview</b></p>
                                <p>SHERATON Prague is a great choice for travellers looking for a 5 star hotel in Delhi. It is located in Delhi Airport.This Hotel stands out as one of the highly recommended hotel in Delhi and is recommended by 89% of our guests. Hotel is rated 4.3 out of 5, which is considered as very good. Some of the popular transit points from SHERATON Prague are Palam Railway Station (5.4 kms), Metro Station Hauz Khas (8.5 kms), Hazrat Nizammudin Railway Station (14.1 kms) and Delhi </p>
                                <details>
                                    <summary>
                                        <span id="open">read more</span> 
                                        <span id="close">close</span> 
                                    </summary>
                                    <p>Airport (650 mtrs). The Hotel is in proximity to some popular tourist attractions and other places of interest in Delhi. Some of the tourist attractions near SHERATON Prague Temple of All Gods (150 mtrs), Jwala Mata Mandir (150 mtrs), Hanumaan Mandir Gali No 14 (350 mtrs), Maa Durga Mandir (450 mtrs), Sanatan Dharm Mandir, Mahipalpur Park Lane - 4 (700 mtrs), Ambience Mall Vasant Kunj (3.4 kms) and Ambience Mall, Gurugram (5.0 kms).</p>
                                    <p>From all the 5 Star hotels in Delhi, SHERATON Prague is very much popular among the tourists. A smooth check-in/check-out process, flexible policies and friendly management garner great customer satisfaction for this property. The Hotel has standard Check-In time as 03:00 PM and Check-Out time as 12:00 PM.</p>
                                    <p style="margin-top: 20px;"><b>What our guests think</b></p>
                                    <p>Cooperative staff, comfortable stay, good room, delicious food and great place are some highly appreciated and talked about aspects of the SHERATON Prague. With an overall rating of 4.3 out of 5 (1709 Ratings), the property is rated very good by 60% of the guests, 21% have rated it good, 7% have rated it average and 12% have rated it as bad. Also, we recommend that guests must go through traveller reviews and ratings posted by fellow travellers on the Incredible Vacations platform to ensure that SHERATON Prague is best suited for them. For more detailed information about this hotel, you can check the Questions & Answers section as well on Incredible Vacations. There you can find the answers of the questions asked by some of our users about this property.</p>
                                    <p>You can find numerous hotels in Delhi under different categories and SHERATON Prague is one the best hotel under its category.</p>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="qna">
                <div class="container">
                    <div class="col-md-12">
                        <div class="bg-3">
                            <div class="row" style="border-bottom: 1px solid #ddd;margin-left: 0;margin-right: 0;">
                                <div class="col-md-6">
                                    <h2 style="border-bottom: 0px;margin-bottom: 0px;">Questions & Answers</h2>
                                </div>
                            
                                <div class="col-md-6">
                                    <ul class="menu">
                                        <li class="dropdown">
                                            <div style="display: flex;">
                                                <b style="font-size: 14px;font-weight: 600;">Filter By:</b> 
                                                <a href="#">
                                                    Most Helpful First&nbsp;
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </div>
                                        <!--Start of Dropdown-->
                                            <ul class="dropdown-nav">
                                                <li class="lst-brder"><b>Filter By</b></li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="See All Reviews" checked> Fliter By Category</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Experienced Traveller Only"> Unmarried Couple</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Photo Reviews"> Others</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Positive Reviews"> Amenities & Services</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Negative Reviews"> Booking Related</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Featured Reviews"> Dining</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Featured Reviews"> Distance from Places</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Featured Reviews"> Hotel Location</li>
                                                <li class="lst-brder"><input type="checkbox" name="filter" value="Featured Reviews"> Hotel Transfer</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="menu">
                                        <li class="dropdown">
                                            <div style="font-size: 14px;display: flex;">
                                                <b style="font-weight: 600;">Sort By:</b> 
                                                <a href="#">
                                                    Most Helpful First&nbsp;
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </div>
                                        <!--Start of Dropdown-->
                                            <ul class="dropdown-nav">
                                                <li class="lst-brder"><b>Sort By</b></li>
                                                <li class="lst-brder"><input type="radio" name="sort" value="most helpful first" checked> Most Relevant</li>
                                                <li class="lst-brder"><input type="radio" name="sort" value="Most Recent First"> Recently Asked</li>
                                                <li class="lst-brder"><input type="radio" name="sort" value="Most Favourable First"> Recently Answered</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p style="padding-left: 15px;"><b>Have a Question? Search for Answers</b></p>
                            <input class="mainLoginInput" type="text" placeholder="&#61442;" style="width: 75%;"/>
                            <button class="qns-btn login-trigger" href="#" data-target="#login" data-toggle="modal"><i class="fa fa-comments-o" aria-hidden="true"></i> 
                                <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="frncCW dEzxVl">
                                    <path d="M28.8 6.4h-1.6v12.8c0 .88-.72 1.6-1.6 1.6H6.4v1.6c0 1.76 1.44 3.2 3.2 3.2h16L32 32V9.6c0-1.76-1.44-3.2-3.2-3.2zm-4.8 8V3.2C24 1.44 22.56 0 20.8 0H3.2A3.21 3.21 0 000 3.2V24l6.4-6.4h14.4c1.76 0 3.2-1.44 3.2-3.2z"></path>
                                </svg>-->
                            Ask Question</button>

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

                            <div class="col-md-12"><p style="font-size: 12px;">Didn't find your answer? Ask a Question!</p></div>

                            <div style="background: #f5f5f5;border-top: 1px solid #ddd;margin-top: 20px;">
                                
                                <div class="col-md-12">
                                    <div class="qna-brder">
                                        <div class="mt-10">
                                            <div class="col-md-12">
                                                <span style="font-size: 11px; padding: 4px 10px;background: #ddd;border-radius: 10px;"><a href="#">Amenities and Services</a></span>
                                                <span style="font-size: 11px; padding: 4px 10px;background: #ddd;border-radius: 10px;"><a href="#">Dining</a></span>
                                                <p>I need to know whether swimming pool will be available during this time?</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="iwUOtq kboXxG">
                                                        <div class="fzWoxL gImomH">
                                                            <div class="fzWoxL dceZXM">
                                                                <span class="eIKWym">6</span>
                                                            </div>
                                                        </div>
                                                        <div class="fzWoxL dHvmVz">
                                                            <div class="iwUOtq hKldjj">
                                                                <div class="fzWoxL">
                                                                    <div class="iwUOtq jLyBlk">
                                                                        <span class="etySna">65077858 </span>
                                                                        <div class="fzWoxL hWHqTb bYTRvc">Asked 9 days ago</div>
                                                                    </div>
                                                                    <div class="fzWoxL cfcopx">Re-Asked by 7 more</div>
                                                                </div>
                                                                <div class="iwUOtq dnaUsB">
                                                                    <div class="fzWoxL erlmuu">
                                                                        <button class="iWjCiX">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="frncCW dEzxVl">
                                                                                <path d="M28.8 6.4h-1.6v12.8c0 .88-.72 1.6-1.6 1.6H6.4v1.6c0 1.76 1.44 3.2 3.2 3.2h16L32 32V9.6c0-1.76-1.44-3.2-3.2-3.2zm-4.8 8V3.2C24 1.44 22.56 0 20.8 0H3.2A3.21 3.21 0 000 3.2V24l6.4-6.4h14.4c1.76 0 3.2-1.44 3.2-3.2z"></path>
                                                                            </svg>
                                                                            <span class="kRNYyd">Re-Ask</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="fzWoxL">
                                                                        <button class="iWjCiX">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fhffKp bGmNpy">
                                                                                <path d="M20.089 5.315a.668.668 0 00-.944-.001L4.582 19.881a.668.668 0 000 .943l6.597 6.597c.26.26.682.26.943 0l14.556-14.556a.667.667 0 000-.941zM3.24 22.4a.668.668 0 00-1.12.316L.112 31.085a.667.667 0 00.177.627.677.677 0 00.627.176l8.363-2a.667.667 0 00.316-1.12zM30.933 3.899l-2.831-2.832a3.332 3.332 0 00-4.709 0l-1.891 1.889a.668.668 0 000 .943l6.6 6.599c.26.26.682.26.943 0l1.888-1.892a3.333 3.333 0 000-4.707z"></path>
                                                                            </svg>
                                                                            <span class="kRNYyd">Answer</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <span id="firstName" style="display: none;">Mukesh</span>
                                                <span id="lastName" style="display: none;"></span>
                                                <div id="profileImage"></div>
                                                <!--img src="<?php echo base_url('assets/images/')?>">-->
                                            </div>
                                            <div class="col-md-11">
                                                
                                                <span class="cHVFbF">
                                                    <div class="body">
                                                        <div class="kVHBSW iwUOtq">
                                                            <div class="fzWoxL">
                                                                <div>
                                                                    <span class="kuXsVz">Mukesh</span>
                                                                </div>
                                                                <p class="gVCyop answered">Answered 3 months ago</p>
                                                            </div>
                                                        </div>
                                                        <p style="border-bottom: 1px solid #ddd;padding-bottom: 20px;">Near airport, ok hotel. just missing the wow factor u expect from a 5 star hotel. some staff are nice but mostly staff are not trained properly,</p>
                                                        <details>
                                                            <summary>
                                                                <span id="open">read more</span> 
                                                                <span id="close">close</span> 
                                                            </summary>
                                                            <div class="kVHBSW iwUOtq" style="padding-top: 20px;">
                                                            <div class="fzWoxL">
                                                                <div>
                                                                    <span class="kuXsVz">Animesh Mishra</span>
                                                                </div>
                                                                <p class="gVCyop answered">Answered 9 months ago</p>
                                                            </div>
                                                        </div>
                                                            <p>
                                                              In this pandemic you won’t be allowed to have access to swimming pool. You can dine in at restaurants available there but if you’re staying there they’ll recommend you to order contactless at your doorstep. Thank you
                                                           </p>
                                                           
                                                        </details>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-10">
                                    <div class="qna-brder">
                                        <div class="mt-10">
                                            <div class="col-md-12">
                                                <span style="font-size: 11px; padding: 4px 10px;background: #ddd;border-radius: 10px;"><a href="#">Amenities and Services</a></span>
                                                <span style="font-size: 11px; padding: 4px 10px;background: #ddd;border-radius: 10px;"><a href="#">Dining</a></span>
                                                <p>I need to know whether swimming pool will be available during this time?</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="iwUOtq kboXxG">
                                                        <div class="fzWoxL gImomH">
                                                            <div class="fzWoxL dceZXM">
                                                                <span class="eIKWym">6</span>
                                                            </div>
                                                        </div>
                                                        <div class="fzWoxL dHvmVz">
                                                            <div class="iwUOtq hKldjj">
                                                                <div class="fzWoxL">
                                                                    <div class="iwUOtq jLyBlk">
                                                                        <span class="etySna">65077858 </span>
                                                                        <div class="fzWoxL hWHqTb bYTRvc">Asked 9 days ago</div>
                                                                    </div>
                                                                    <div class="fzWoxL cfcopx">Re-Asked by 7 more</div>
                                                                </div>
                                                                <div class="iwUOtq dnaUsB">
                                                                    <div class="fzWoxL erlmuu">
                                                                        <button class="iWjCiX">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="frncCW dEzxVl">
                                                                                <path d="M28.8 6.4h-1.6v12.8c0 .88-.72 1.6-1.6 1.6H6.4v1.6c0 1.76 1.44 3.2 3.2 3.2h16L32 32V9.6c0-1.76-1.44-3.2-3.2-3.2zm-4.8 8V3.2C24 1.44 22.56 0 20.8 0H3.2A3.21 3.21 0 000 3.2V24l6.4-6.4h14.4c1.76 0 3.2-1.44 3.2-3.2z"></path>
                                                                            </svg>
                                                                            <span class="kRNYyd">Re-Ask</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="fzWoxL">
                                                                        <button class="iWjCiX">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fhffKp bGmNpy">
                                                                                <path d="M20.089 5.315a.668.668 0 00-.944-.001L4.582 19.881a.668.668 0 000 .943l6.597 6.597c.26.26.682.26.943 0l14.556-14.556a.667.667 0 000-.941zM3.24 22.4a.668.668 0 00-1.12.316L.112 31.085a.667.667 0 00.177.627.677.677 0 00.627.176l8.363-2a.667.667 0 00.316-1.12zM30.933 3.899l-2.831-2.832a3.332 3.332 0 00-4.709 0l-1.891 1.889a.668.668 0 000 .943l6.6 6.599c.26.26.682.26.943 0l1.888-1.892a3.333 3.333 0 000-4.707z"></path>
                                                                            </svg>
                                                                            <span class="kRNYyd">Answer</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <span id="firstName" style="display: none;">Animesh</span>
                                                <span id="lastName" style="display: none;">Mishra</span>
                                                <div id="profileImage"></div>
                                                <!--img src="<?php echo base_url('assets/images/')?>">-->
                                            </div>
                                            <div class="col-md-11">
                                                
                                                <span class="cHVFbF">
                                                    <div class="body">
                                                        <div class="kVHBSW iwUOtq">
                                                            <div class="fzWoxL">
                                                                <div>
                                                                    <span class="kuXsVz">Animesh Mishra</span>
                                                                </div>
                                                                <p class="gVCyop answered">Answered 5 months ago</p>
                                                            </div>
                                                        </div>
                                                        <p style="border-bottom: 1px solid #ddd;padding-bottom: 20px;">Near airport, ok hotel. just missing the wow factor u expect from a 5 star hotel. some staff are nice but mostly staff are not trained properly,</p>
                                                        <details>
                                                            <summary>
                                                                <span id="open">read more</span> 
                                                                <span id="close">close</span> 
                                                            </summary>
                                                            <div class="kVHBSW iwUOtq" style="padding-top: 20px;">
                                                            <div class="fzWoxL">
                                                                <div>
                                                                    <span class="kuXsVz">Mukesh</span>
                                                                </div>
                                                                <p class="gVCyop answered">Answered 6 months ago</p>
                                                            </div>
                                                        </div>
                                                            <p>
                                                              In this pandemic you won’t be allowed to have access to swimming pool. You can dine in at restaurants available there but if you’re staying there they’ll recommend you to order contactless at your doorstep. Thank you
                                                           </p>
                                                           
                                                        </details>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <span id="firstName" style="display: none;">Mukesh</span>
                                        <span id="lastName" style="display: none;"></span>
                                        <div id="profileImage"></div>
                                        <!--<img src="<?php echo base_url('assets/images/')?>">-->
                                    </div>
                                    <div class="col-md-11">
                                        <div class="kVHBSW iwUOtq">
                                            <div class="fzWoxL">
                                                <div>
                                                    <span class="kuXsVz">Mukesh</span>
                                                </div>
                                                <p class="gVCyop answered">Answered 6 months ago</p>
                                            </div>
                                        </div>
                                        <span class="cHVFbF">
                                            <div class="body">
                                                <p>Near airport, ok hotel. just missing the wow factor u expect from a 5 star hotel. some staff are nice but mostly staff are not trained properly,</p>
                                                <details>
                                                    <summary>
                                                        <span id="open">read more</span> 
                                                        <span id="close">close</span> 
                                                    </summary>
                                                    <p>
                                                      they just dont care about guests around them. Buffet food was good but normally so crowded and noisy that staff are normally overwhelmed and running around like a popular dhaba restaurant. Buffet food is normally repeated, but fine for 1-2 days stay. Housekeeping staff dont wear mask properly and cleaning was normally unsatisfactory. Towels had yellow/red spots. Overall average hotel but can be good option to unwind for a day for flight stopover as its near airport. I enqiured the hotel manager for extension of my stay but she didnt call back despite promising to do so. This tells you the attitude of the hotel. Food is not allowed from outside and in room dining is very expensive. Beverages are sold at 5 times the market price.
                                                   </p>
                                                </details>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                    <div class="content_detail__pagination cdp" actpage="1">
                                        <a href="#!-1" class="cdp_i">prev</a>
                                        <a href="#!1" class="cdp_i">1</a>
                                        <a href="#!2" class="cdp_i">2</a>
                                        <a href="#!3" class="cdp_i">3</a>
                                        <a href="#!4" class="cdp_i">4</a>
                                        <a href="#!5" class="cdp_i">5</a>
                                        <a href="#!6" class="cdp_i">6</a>
                                        <a href="#!7" class="cdp_i">7</a>
                                        <a href="#!8" class="cdp_i">8</a>
                                        <a href="#!9" class="cdp_i">9</a>
                                        <a href="#!10" class="cdp_i">10</a>
                                        <a href="#!11" class="cdp_i">11</a>
                                        <a href="#!12" class="cdp_i">12</a>
                                        <a href="#!13" class="cdp_i">13</a>
                                        <a href="#!14" class="cdp_i">14</a>
                                        <a href="#!15" class="cdp_i">15</a>
                                        <a href="#!16" class="cdp_i">16</a>
                                        <a href="#!17" class="cdp_i">17</a>
                                        <a href="#!18" class="cdp_i">18</a>
                                        <a href="#!19" class="cdp_i">19</a>
                                        <a href="#!+1" class="cdp_i">next</a>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </section>
            <section id="similar_hotel">
                <div class="container">
                    <div class="col-md-3" style="padding-top: 70px;">
                        <div class="item-container" style="width: 100%;background: #ecf0f9;">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-1.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>
                    </div>
                    <div class="col-md-9">
                        <div id="cont">
                          <div id="slider-container">
                            
                            <span id="right-btn" class="fa fa-arrow-circle-right" aria-hidden="true">
                            </span>
                            <span id="left-btn" class="fa fa-arrow-circle-left" aria-hidden="true">
                            </span>
                            
                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-1.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>

                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-2.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>

                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-1.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>
                            
                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-2.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>

                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-1.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>

                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-2.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>
                            
                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-1.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>

                            <div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="<?php echo base_url('assets/images/hotel-2.jpg')?>" alt="" />
                              </div>
                              <div class="row">
                                <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <p class="sldr-brdr item-link">Hotel</p>
                              </div>
                              <h2 class="item-title"><a href="#">First Item</a>
                                <br><span class="title-span">Delhi Airport</span>
                              </h2>

                              <div class="keuPwx"><div class="dLfDAf"><span class="hAjHet">3.8/5</span></div><span class="hcMbSx">1735 reviews</span></div>

                              <div class="fpsJVN">
                                <div class="ioxuNx">
                                    <span class="idkooe">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bBrmED">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M-4-4h24v24H-4z"></path>
                                                <path fill="#898B91" d="M.333 11h15.334c.16 0 .295.114.326.266l.007.067V13.5a1.502 1.502 0 01-1.5 1.5.167.167 0 00-.158.114l-.009.053v.333a.5.5 0 01-.992.09l-.008-.09v-.167a.333.333 0 00-.266-.326L13 15H3a.333.333 0 00-.327.266l-.006.067v.167a.5.5 0 01-.992.09l-.008-.09v-.333A.167.167 0 001.5 15a1.502 1.502 0 01-1.493-1.356L0 13.5v-2.167c0-.16.114-.295.266-.326L.333 11h15.334zM1.51 4.333h12.98c.138 0 .258.084.309.208l.019.064.992 5.334a.333.333 0 01-.255.386l-.073.008H.517a.333.333 0 01-.334-.321l.006-.073.992-5.334a.333.333 0 01.26-.265l.068-.007H14.49zM13.167 0a1.502 1.502 0 011.5 1.5v1.833c0 .184-.15.334-.334.334h-1.05a.333.333 0 01-.33-.279l-.24-1.443a.333.333 0 00-.329-.278h-3.05A.333.333 0 009 2v1.333c0 .184-.15.334-.333.334H7.333A.333.333 0 017 3.333V2a.333.333 0 00-.333-.333H3.616a.333.333 0 00-.33.278l-.24 1.443a.333.333 0 01-.329.279h-1.05a.333.333 0 01-.334-.334V1.5a1.502 1.502 0 011.5-1.5z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span title="Standard Double Room" class="jGDxXz">Standard Double Room</span>
                                </div>
                            </div>

                            <div class="gAwAkr">
                                <div class="donHoW">
                                    <div class="hLjAKB">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="jwJkjF">
                                            <path d="M20.667 0a1 1 0 00-1 1v29.667a1.333 1.333 0 002.666 0V20c0-.368.298-.667.667-.667h2.333A1.658 1.658 0 0027 17.685V17.657C26.915 8.073 23.776 0 20.667 0zM14.333 0C13.597 0 13 .597 13 1.333V8a2.66 2.66 0 01-.761 1.867.334.334 0 01-.572-.234v-8.3a1.333 1.333 0 00-2.666 0V9.63a.334.334 0 01-.572.233 2.657 2.657 0 01-.761-1.864V1.332a1.333 1.333 0 00-2.666 0v6.667a5.344 5.344 0 003.556 5.029.666.666 0 01.444.628v17.009a1.333 1.333 0 002.666 0V13.656c0-.282.178-.534.444-.628a5.345 5.345 0 003.556-5.029V1.332c0-.736-.597-1.333-1.333-1.333z"></path>
                                        </svg>
                                    </div>Restaurant</div>
                                    <div class="donHoW">
                                        <div class="hLjAKB">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="feqdDA">
                                                <path d="M9.431 18.767a2.813 2.813 0 001.983 1.165 3.723 3.723 0 002.517-1.356 3.333 3.333 0 015.716.52c.295.499.823.813 1.401.836a2.49 2.49 0 001.969-1.128c.198-.34.46-.639.772-.879a.333.333 0 00.065-.456l-6.145-8.605a2 2 0 011.142-3.103l5.232-1.309a2 2 0 00-.971-3.88L17.879 1.88a5.999 5.999 0 00-3.425 9.31l.393.551-7.333 5.04a.333.333 0 00.091.593 3.265 3.265 0 011.825 1.393z"></path>
                                                <path d="M26.906 8.006a3.166 3.166 0 11-4.478 4.478 3.166 3.166 0 114.478-4.478zM11.413 24.597a7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.37 6.37 0 004.881 1.976 1.333 1.333 0 001.241-1.419 1.363 1.363 0 00-1.424-1.239 4.483 4.483 0 01-3.567-2.092 1.4 1.4 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.739 3.739 0 01-3.2-1.975 1.39 1.39 0 00-2.29-.209 5.735 5.735 0 01-4.133 2.184 4.74 4.74 0 01-3.68-2.107 1.39 1.39 0 00-2.184-.122c-.017.024-1.956 2.427-4.145 2.267a1.307 1.307 0 00-1.414 1.192l-.004.073a1.332 1.332 0 001.261 1.401c.101 0 .199.008.296.008a7.776 7.776 0 004.976-2.143 6.977 6.977 0 004.88 2.096zM30.573 28.759a4.515 4.515 0 01-3.567-2.092 1.398 1.398 0 00-2.288.029 4.496 4.496 0 01-3.671 2.077 3.733 3.733 0 01-3.2-1.976 1.393 1.393 0 00-2.29-.208 5.735 5.735 0 01-4.133 2.184 4.746 4.746 0 01-3.692-2.107 1.388 1.388 0 00-2.184-.122c-.017.024-1.853 2.275-3.989 2.275h-.156a1.304 1.304 0 00-1.401 1.199l-.003.057a1.335 1.335 0 001.26 1.403h.001c.101 0 .199.008.296.008a7.788 7.788 0 004.976-2.143 6.985 6.985 0 004.88 2.096 7.812 7.812 0 005.08-2 6.1 6.1 0 004.555 2 6.868 6.868 0 004.829-2 6.425 6.425 0 004.881 1.976 1.333 1.333 0 001.241-1.416 1.353 1.353 0 00-1.427-1.241z"></path>
                                            </svg>
                                        </div>Swimming Pool</div>
                                        <div class="donHoW">
                                            <div class="hLjAKB">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="1.5rem" height="1.5rem" class="RoomServiceIcon-sc-cq049u-0 kFmynl">
                                                    <path d="M30.387 15.6c-.375-5.737-4.975-10.35-10.813-10.887.05-.125.075-.263.075-.412a1.213 1.213 0 00-2.424 0c0 .15.025.287.075.412C11.475 5.25 6.875 9.863 6.5 15.6H4.888c0 .813.662 1.463 1.462 1.463h1.313c-1.525.775-3.625 2.837-3.625 2.837l4.813 4.863 1.725-1.025h9.8l6.675-6.675h3.475c.813 0 1.462-.663 1.462-1.463h-1.6zM19.8 20.575h-4.575c-.65 0-2.175-1.425-2.175-1.425h4.063c1.85 0 2.788-1.462 3.1-2.087h4.275c-1.688.95-4.688 3.512-4.688 3.512zM2.9 19.6l6.412 6.413-2.9 2.9L0 22.5l2.9-2.9z"></path>
                                                </svg>
                                            </div>Room Service</div>
                                            <div class="donHoW">
                                                <div class="hLjAKB">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="1.5rem" height="1.5rem" class="HappyWifiIcon-sc-9vspjr-0 bPgJKy">
                                                        <path d="M8 11.295a1.794 1.794 0 110 3.588 1.794 1.794 0 010-3.588zM4.322 8.693A5.203 5.203 0 019.71 7.465c.74.254 1.411.673 1.965 1.225a.897.897 0 01-.634 1.531l-.117-.007a.895.895 0 01-.515-.254l-.067-.055-.069-.056a3.408 3.408 0 00-4.683.111.894.894 0 01-.634.264l-.12-.008a.898.898 0 01-.514-1.523zM2.293 5.947a8.081 8.081 0 0111.412 0 .89.89 0 01.262.633v.021a.89.89 0 01-.893.876l-.118-.008a.892.892 0 01-.516-.254 6.286 6.286 0 00-8.878 0 .898.898 0 01-1.268-1.268zM.263 3.2c4.276-4.267 11.198-4.267 15.474 0a.894.894 0 01-.402 1.5.894.894 0 01-.866-.232 9.162 9.162 0 00-12.939 0A.897.897 0 01.262 3.2z"></path>
                                                    </svg>
                                                </div>Free Internet</div>
                                                <div class="donHoW">
                                                    <div class="hLjAKB">
                                                        <svg viewBox="0 0 16 16" width="1.5rem" height="1.5rem" class="RoundedCheckbox-sc-4skzta-0 bXdlCp">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path d="M-4-4h24v24H-4z"></path>
                                                                <path fill="#898B91" d="M7.68 0a7.68 7.68 0 110 15.36A7.68 7.68 0 017.68 0zm4.335 3.922l-6.233 6.702-2.454-2.26a.436.436 0 00-.622.021.452.452 0 00.022.632l2.556 2.358c.295.28.76.26 1.039-.032l6.326-6.8a.452.452 0 00-.011-.632.436.436 0 00-.623.011z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>Gym/Spa</div>
                                                </div>
                              
                                <div class="row">
                                    <div class="iOIxqe">
                                    <div class="IjYwn"><i class="fa fa-inr"></i> 2399</div>
                                    <div class="jmlNNO"><i class="fa fa-inr"></i> 2376</div>
                                    <div class="dxMlkC">per room/night</div>
                                </div>
                                <a href="#" class="item-link">Book Now</a>  
                                </div>
                            </div>

                            <!--<div class="item-container">
                              <div class="item-image-wrapper">
                                <img src="http://www.freeimageslive.com/galleries/workplace/education/preview/university_certificate.jpg" alt="" />
                              </div>
                              <h2 class="item-title"><a href="#">Ninth Item</a></h2>
                              <p class="item-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              </p>
                              <div class="item-stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <a href="#" class="item-link">Submit</a>
                            </div>-->
                            
                          </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
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
            </div>
        </div>
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
</script>
</body>
</html>