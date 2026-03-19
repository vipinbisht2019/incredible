<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotels</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $hotels[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $hotels[0]['meta_keyword']; ?>">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <?php include('includes/css.php'); ?>
    <link href="<?php echo base_url('assets/css/calendar.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/fontawesome.css" integrity="sha512-NQCKOSsUyZsvf5ItxWh1bR2vlY0cgw1Rx9tJRLJr31GT9oxCno9uwtiVmVFgN2BlHo1jmwjtH8ivIaob4YF+jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .tooltip-container:hover .tooltip-content {
        visibility: visible;
        opacity: 1;
        transition: 0.25s all ease;
        transition-delay: 0s;
        top: 17px;
    }
    .tooltip-content{ right: 45px; }
    label{ color: #333; }
    </style>
  </head>
  
  <body class="not-front page-pages page-hotels">
    <div id="main">
      <?php include('includes/header.php'); ?>
      <div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="<?php echo base_url();?>">Home</a><span>/</span><a href="<?php echo base_url();?>">Pages</a><span>/</span>Hotels</div>
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
              <input type="text" name="start-date" id="start-date" placeholder="Start date" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;"/>
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="date" class="flight-label">Checkout</label><br>
              <input type="text" name="end-date" id="end-date" placeholder="End date" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;"/>
              <input type="hidden" name="bookingType" id="bookingType" value="R">
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="text" class="flight-label">Guest &amp; Rooms</label><br>
              <!--<input type="text" class="form-control" id="text" placeholder="Delhi" style="border-radius: 6px;background: #1958b6;border: #1958b6;">-->
              <input type="text" name="passenger" id="passenger" value="2 Guests in 1 Room" onclick="toggle(this)" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;" readonly="">
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


      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <aside class="detail-sidebar sidebar-wrapper">
              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Deals</h3>
                </div>
                <div class="sidebar-content">
                  <form>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Exclusive Deals 1
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Last Minute Deals 2
                      </label>
                    </div>
                  </form>
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Price for 2 Nights</h3>
                </div>
                <div class="sidebar-content">
                  <form>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Less than Rs. 1000
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Rs. 1001 to Rs. 2000
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Rs. 2001 to Rs. 4000
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Rs. 4001 to Rs. 7000
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Rs. 7001 to Rs. 10,000
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Greater than Rs. 10,001
                      </label>
                    </div>
                  </form>
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>City</h3>
                </div>
                <div class="sidebar-content">
                  <form>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Gurgaon
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Greater Noida 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Ghaziabad 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Manesar
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Faridabad
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Rewari
                      </label>
                    </div>
                  </form>
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Show Hotels With</h3>
                </div>
                <div class="sidebar-content">
                  <form>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Clean Pass
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Free Cancellation 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Free Breakfast 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Free WiFi
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Couple Friendly
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Quarantine and Self Isolation
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Longstay Hotels
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Pet Friendly
                      </label>
                    </div>
                  </form>
                </div>
              </div>
              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Amenities</h3>
                </div>
                <div class="sidebar-content content" style="padding-top: 0;padding-left: 0;">
                  <form>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Air Conditioning
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Airport Transfer (On Demand) 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Banquet Hall 
                      </label>
                    </div>

                    <div id="show-more" ><a href="javascript:void(0)">View all</a></div>
                    <div id="show-more-content">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Bar 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Bonfire 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Business Services 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">CCTV Surveillance 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Caretaker
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Conference Room 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Contactless Check-in
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Contactless Room Service 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Daily Housekeeing 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Disinfection 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Gloves 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Internet 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Mask 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Parking Facility 
                        </label>
                      </div>
                      
                      <div id="show-less"><a href="javascript:void(0)">View less</a></div>
                    </div>

                  </form>
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3 style="margin-top: 12px;margin-bottom: 12px;">Tripadvisor Rating</h3>
                </div>
                <ul class="start-rating-filter tabs theme-green txt-ac full trip-advisor-rating-filter">
                  <!-- ngRepeat: item in value.data --><li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="Rating: 0 to 1" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                          <p class="rating-label txt-greenNew ng-binding">0 - 1</p>
                            <p class="full"><i class="common-logo logo-ta"></i></p>
                            <span class="full rating-counter mr-tn ng-binding">11</span>
                        </label>
                    </li><!-- end ngRepeat: item in value.data --><li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="Rating: 1 to 2" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                          <p class="rating-label txt-greenNew ng-binding">1 - 2</p>
                            <p class="full"><i class="common-logo logo-ta"></i></p>
                            <span class="full rating-counter mr-tn ng-binding">21</span>
                        </label>
                    </li><!-- end ngRepeat: item in value.data --><li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="Rating: 2 to 3" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                          <p class="rating-label txt-greenNew ng-binding">2 - 3</p>
                            <p class="full"><i class="common-logo logo-ta"></i></p>
                            <span class="full rating-counter mr-tn ng-binding">108</span>
                        </label>
                    </li><!-- end ngRepeat: item in value.data --><li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="Rating: 3 to 4" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                          <p class="rating-label txt-greenNew ng-binding">3 - 4</p>
                            <p class="full"><i class="common-logo logo-ta"></i></p>
                            <span class="full rating-counter mr-tn ng-binding">287</span>
                        </label>
                    </li><!-- end ngRepeat: item in value.data --><li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="Rating: 4 to 5" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                          <p class="rating-label txt-greenNew ng-binding">4 - 5</p>
                            <p class="full"><i class="common-logo logo-ta"></i></p>
                            <span class="full rating-counter mr-tn ng-binding">193</span>
                        </label>
                    </li><!-- end ngRepeat: item in value.data -->

                </ul>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3 style="margin-top: 12px;margin-bottom: 12px;">Star Rating</h3>
                </div>
                <ul class="start-rating-filter tabs txt-ac full">
                  <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                    <label class="filter-label full" title="0, 1 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                      <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>0, 1</p>
                        <p class="full"><i class="star-filled single"></i></p>
                        <span class="full rating-counter ng-binding">134</span>
                    </label>
                  </li>
                  <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                    <label class="filter-label full" title="2 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                      <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>2</p>
                        <p class="full"><i class="star-filled single"></i></p>
                        <span class="full rating-counter ng-binding">95</span>
                    </label>
                  </li>
                  <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                    <label class="filter-label full" title="3 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                      <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>3</p>
                        <p class="full"><i class="star-filled single"></i></p>
                        <span class="full rating-counter ng-binding">363</span>
                    </label>
                  </li>
                  <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                    <label class="filter-label full" title="4 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                      <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>4</p>
                        <p class="full"><i class="star-filled single"></i></p>
                        <span class="full rating-counter ng-binding">74</span>
                    </label>
                  </li>
                  <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                    <label class="filter-label full" title="5 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                      <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>5</p>
                        <p class="full"><i class="star-filled single"></i></p>
                        <span class="full rating-counter ng-binding">60</span>
                    </label>
                  </li>
                </ul>
                <div class="sidebar-content clearfix">
                </div>
              </div>

              
            </aside>
          </div>
          <div class="col-sm-9">
            <div class="row">
              <div class="col-sm-12">
                <!-- Popular Packages --> 
                <section class="popular-packages package-inner pad-bottom-80">
                  <div class="">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="room-main">
                          <div class="room-item mar-bottom-30">
                            <div class="row">
                              <div class="col-lg-3">
                                <span class="featured-hotel b ng-binding ng-scope" ng-if="hotel.showFeaturedHotel || hotel.sT">Featured</span>
                                <div class="row2Wrap">

                                  <!-- Slider 1 -->
                                  <div class="slider" id="slider3">
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                        <!--<span>
                                          <h2>Title 1</h2>
                                      </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                        <!--<span>
                                          <h2>Title 2</h2>
                                        </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                        <!--<span>
                                          <h2>Title 3</h2>
                                        </span>-->
                                    </div>
                                    <!-- The Arrows -->
                                    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                    <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                    </i>
                                    <!-- Title Bar -->
                                    <!--     <span class="titleBar">
                                    <h1>I am like a leaf in the wind.</h1> 
                                    <p>Watch me soar!</p>
                                    </span> -->
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-9">
                                <div class="room-content">
                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                    <div class="col-md-8" style="padding: 0px;">
                                      <h3><a href="#">Luxury Room</a></h3>
                                  <div class="deal-rating" style="margin-bottom: 0px;">
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                  </div>
                                  <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                    <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                    </path>
                                    </svg>
                                    <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                      <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                        <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                      </span>
                                    </span>
                                  </div>
                                  <ul class="full hotel-amenities hotel-amenities-height-auto">
                                    
                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-check-square-o"></i>
                                      <span class="ng-binding">Free Cancellation</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-coffee"></i>
                                      <span class="ng-binding">Free Breakfast</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-wifi"></i>
                                      <span class="ng-binding">Free WiFi</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                      <i class="ytfi-SWMP fs-14"></i>
                                      <span class="ng-binding">Swimming pool</span>

                                    </li>
                                  </ul>
                                    <div class="tooltip-container">
                                      <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                      <div class="tooltip-content" style="top: -50px;">
                                        <ul class="pad-0" style="color: #333;">
                                          
                                          <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                          <li class="tooltip-p lne-hgt">
                                            <ul style="list-style: disc;">
                                              <li class="lne-hgt">Sanitized Room</li>
                                              <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                              <li class="lne-hgt">Sterilize Indoor</li>
                                              <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                <!--<li class="lne-hgt">Adult Base Fare</li>
                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="result-footer clearfix">
                                    <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                        <li class="tipsy-holder">     
                                        </li>
                                        <li class="tipsy-holder">
                                          <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                            <a href="" ng-click="login()" style="color: #244082;">Login
                                            </a>
                                            <span class="color-base ng-binding">
                                                &amp; get additional <span class="rs">Rs.</span>250 off using
                                                <span class="ecash-color"> eCash</span>
                                            </span>
                                        </div>
                                      </li>
                                   </ul>
                                </div>
                                
                                   <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                </div>
                                  
                              
                              <div class="col-md-4" style="padding-top: 20px;">
                                <div class="fw-btns">
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                      <span class="mr-5">
                                        <i class="common-logo logo-ta map-hide"></i>
                                        <span class="b ng-binding">4/5</span>
                                      </span>
                                      &nbsp;
                                      <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                      <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                        <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                      </span>
                                    </li>
                                    <li class="fs-11 three-dot">
                                      <span class="ng-binding">Wonderful &nbsp;Location</span>
                                      <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                    </li>
                                  </ul>
                                  <div class="tooltip-container">
                                    <div class="fw-price">
                                      <p>
                                        <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                        <span class="bold"><i class="fa fa-inr"></i>659</span>
                                      </p>
                                    </div>
                                    <div class="tooltip-content">
                                      <ul class="pad-0">
                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                        <li class="tooltip-p lne-hgt">
                                          <ul class="df-padd">
                                            <li class="lne-hgt">Adult Base Fare</li>
                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                  </ul>
                                  
                                  <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                </div>
                              </div></div></div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Popular Packages Ends -->
              </div>

              <div class="col-sm-12">
                <!-- Popular Packages --> 
                <section class="popular-packages package-inner pad-bottom-80">
                  <div class="">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="room-main">
                          <div class="room-item mar-bottom-30">
                            <div class="row">
                              <div class="col-lg-3">
                                <span class="featured-hotel b ng-binding ng-scope" ng-if="hotel.showFeaturedHotel || hotel.sT">Featured</span>
                                <div class="row2Wrap">

                                  <!-- Slider 1 -->
                                  <div class="slider" id="slider3">
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                        <!--<span>
                                          <h2>Title 1</h2>
                                      </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                        <!--<span>
                                          <h2>Title 2</h2>
                                        </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                        <!--<span>
                                          <h2>Title 3</h2>
                                        </span>-->
                                    </div>
                                    <!-- The Arrows -->
                                    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                    <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                    </i>
                                    <!-- Title Bar -->
                                    <!--     <span class="titleBar">
                                    <h1>I am like a leaf in the wind.</h1> 
                                    <p>Watch me soar!</p>
                                    </span> -->
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-9">
                                <div class="room-content">
                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                    <div class="col-md-8" style="padding: 0px;">
                                      <h3><a href="#">Luxury Room</a></h3>
                                  <div class="deal-rating" style="margin-bottom: 0px;">
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                  </div>
                                  <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                    <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                    </path>
                                    </svg>
                                    <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                      <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                        <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                      </span>
                                    </span>
                                  </div>
                                  <ul class="full hotel-amenities hotel-amenities-height-auto">
                                    
                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-check-square-o"></i>
                                      <span class="ng-binding">Free Cancellation</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-coffee"></i>
                                      <span class="ng-binding">Free Breakfast</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-wifi"></i>
                                      <span class="ng-binding">Free WiFi</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                      <i class="ytfi-SWMP fs-14"></i>
                                      <span class="ng-binding">Swimming pool</span>

                                    </li>
                                  </ul>
                                    <div class="tooltip-container">
                                      <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                      <div class="tooltip-content" style="top: -50px;">
                                        <ul class="pad-0" style="color: #333;">
                                          
                                          <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                          <li class="tooltip-p lne-hgt">
                                            <ul style="list-style: disc;">
                                              <li class="lne-hgt">Sanitized Room</li>
                                              <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                              <li class="lne-hgt">Sterilize Indoor</li>
                                              <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                <!--<li class="lne-hgt">Adult Base Fare</li>
                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="result-footer clearfix">
                                    <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                        <li class="tipsy-holder">     
                                        </li>
                                        <li class="tipsy-holder">
                                          <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                            <a href="" ng-click="login()" style="color: #244082;">Login
                                            </a>
                                            <span class="color-base ng-binding">
                                                &amp; get additional <span class="rs">Rs.</span>250 off using
                                                <span class="ecash-color"> eCash</span>
                                            </span>
                                        </div>
                                      </li>
                                   </ul>
                                </div>
                                
                                   <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                </div>
                                  
                              
                              <div class="col-md-4" style="padding-top: 20px;">
                                <div class="fw-btns">
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                      <span class="mr-5">
                                        <i class="common-logo logo-ta map-hide"></i>
                                        <span class="b ng-binding">4/5</span>
                                      </span>
                                      &nbsp;
                                      <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                      <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                        <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                      </span>
                                    </li>
                                    <li class="fs-11 three-dot">
                                      <span class="ng-binding">Wonderful &nbsp;Location</span>
                                      <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                    </li>
                                  </ul>
                                  <div class="tooltip-container">
                                    <div class="fw-price">
                                      <p>
                                        <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                        <span class="bold"><i class="fa fa-inr"></i>659</span>
                                      </p>
                                    </div>
                                    <div class="tooltip-content">
                                      <ul class="pad-0">
                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                        <li class="tooltip-p lne-hgt">
                                          <ul class="df-padd">
                                            <li class="lne-hgt">Adult Base Fare</li>
                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                  </ul>
                                  
                                  <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                </div>
                              </div></div></div></div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Popular Packages Ends -->
              </div>

              <div class="col-sm-12">
                <!-- Popular Packages --> 
                <section class="popular-packages package-inner pad-bottom-80">
                  <div class="">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="room-main">
                          <div class="room-item mar-bottom-30">
                            <div class="row">
                              <div class="col-lg-3">
                                <div class="pr percent-off ng-scope" ng-if="hotel.savingsPercentage &amp;&amp; !hotel.showFeaturedHotel &amp;&amp; !hotel.sT &amp;&amp; !hotel.tagName">
                                  <div class="flagwave"></div>
                                  <span class=" uppercase mt-10">
                                  <span class="fm-lsb txt-al b ng-binding">15% </span>
                                  <span class="fm-lsb txt-al">Off</span>

                                  <!-- <span class="percent-off-triangle"></span> -->
                                  </span>
                                </div>
                                <div class="row2Wrap">

                                  <!-- Slider 1 -->
                                  <div class="slider" id="slider3">
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                        <!--<span>
                                          <h2>Title 1</h2>
                                      </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                        <!--<span>
                                          <h2>Title 2</h2>
                                        </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                        <!--<span>
                                          <h2>Title 3</h2>
                                        </span>-->
                                    </div>
                                    <!-- The Arrows -->
                                    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                    <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                    </i>
                                    <!-- Title Bar -->
                                    <!--     <span class="titleBar">
                                    <h1>I am like a leaf in the wind.</h1> 
                                    <p>Watch me soar!</p>
                                    </span> -->
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-9">
                                <div class="room-content">
                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                    <div class="col-md-8" style="padding: 0px;">
                                      <h3><a href="#">Luxury Room</a></h3>
                                  <div class="deal-rating" style="margin-bottom: 0px;">
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                  </div>
                                  <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                    <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                    </path>
                                    </svg>
                                    <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                      <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                        <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                      </span>
                                    </span>
                                  </div>
                                  <ul class="full hotel-amenities hotel-amenities-height-auto">
                                    
                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-check-square-o"></i>
                                      <span class="ng-binding">Free Cancellation</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-coffee"></i>
                                      <span class="ng-binding">Free Breakfast</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-wifi"></i>
                                      <span class="ng-binding">Free WiFi</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                      <i class="ytfi-SWMP fs-14"></i>
                                      <span class="ng-binding">Swimming pool</span>

                                    </li>
                                  </ul>
                                    <div class="tooltip-container">
                                      <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                      <div class="tooltip-content" style="top: -50px;">
                                        <ul class="pad-0" style="color: #333;">
                                          
                                          <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                          <li class="tooltip-p lne-hgt">
                                            <ul style="list-style: disc;">
                                              <li class="lne-hgt">Sanitized Room</li>
                                              <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                              <li class="lne-hgt">Sterilize Indoor</li>
                                              <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                <!--<li class="lne-hgt">Adult Base Fare</li>
                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="result-footer clearfix">
                                    <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                        <li class="tipsy-holder">     
                                        </li>
                                        <li class="tipsy-holder">
                                          <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                            <a href="" ng-click="login()" style="color: #244082;">Login
                                            </a>
                                            <span class="color-base ng-binding">
                                                &amp; get additional <span class="rs">Rs.</span>250 off using
                                                <span class="ecash-color"> eCash</span>
                                            </span>
                                        </div>
                                      </li>
                                   </ul>
                                </div>
                                
                                   <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                </div>
                                  
                              
                              <div class="col-md-4" style="padding-top: 20px;">
                                <div class="fw-btns">
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                      <span class="mr-5">
                                        <i class="common-logo logo-ta map-hide"></i>
                                        <span class="b ng-binding">4/5</span>
                                      </span>
                                      &nbsp;
                                      <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                      <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                        <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                      </span>
                                    </li>
                                    <li class="fs-11 three-dot">
                                      <span class="ng-binding">Wonderful &nbsp;Location</span>
                                      <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                    </li>
                                  </ul>
                                  <div class="tooltip-container">
                                    <div class="fw-price">
                                      <p>
                                        <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                        <span class="bold"><i class="fa fa-inr"></i>659</span>
                                      </p>
                                    </div>
                                    <div class="tooltip-content">
                                      <ul class="pad-0">
                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                        <li class="tooltip-p lne-hgt">
                                          <ul class="df-padd">
                                            <li class="lne-hgt">Adult Base Fare</li>
                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                  </ul>
                                  
                                  <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                </div>
                              </div></div></div></div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Popular Packages Ends -->
              </div>

              <div class="col-sm-12">
                <!-- Popular Packages --> 
                <section class="popular-packages package-inner pad-bottom-80">
                  <div class="">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="room-main">
                          <div class="room-item mar-bottom-30">
                            <div class="row">
                              <div class="col-lg-3">
                                <span class="featured-hotel b ng-binding ng-scope" ng-if="hotel.showFeaturedHotel || hotel.sT">Featured</span>
                                <div class="row2Wrap">

                                  <!-- Slider 1 -->
                                  <div class="slider" id="slider3">
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                        <!--<span>
                                          <h2>Title 1</h2>
                                      </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                        <!--<span>
                                          <h2>Title 2</h2>
                                        </span>-->
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                        <!--<span>
                                          <h2>Title 3</h2>
                                        </span>-->
                                    </div>
                                    <!-- The Arrows -->
                                    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                    <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                    </i>
                                    <!-- Title Bar -->
                                    <!--     <span class="titleBar">
                                    <h1>I am like a leaf in the wind.</h1> 
                                    <p>Watch me soar!</p>
                                    </span> -->
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-9">
                                <div class="room-content">
                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                    <div class="col-md-8" style="padding: 0px;">
                                      <h3><a href="#">Luxury Room</a></h3>
                                  <div class="deal-rating" style="margin-bottom: 0px;">
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                  </div>
                                  <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                    <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                    </path>
                                    </svg>
                                    <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                      <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                        <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                      </span>
                                    </span>
                                  </div>
                                  <ul class="full hotel-amenities hotel-amenities-height-auto">
                                    
                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-check-square-o"></i>
                                      <span class="ng-binding">Free Cancellation</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-coffee"></i>
                                      <span class="ng-binding">Free Breakfast</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <i class="fa fa-wifi"></i>
                                      <span class="ng-binding">Free WiFi</span>
                                    </li>

                                    <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                      <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                      <i class="ytfi-SWMP fs-14"></i>
                                      <span class="ng-binding">Swimming pool</span>

                                    </li>
                                  </ul>
                                    <div class="tooltip-container">
                                      <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                      <div class="tooltip-content" style="top: -50px;">
                                        <ul class="pad-0" style="color: #333;">
                                          
                                          <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                          <li class="tooltip-p lne-hgt">
                                            <ul style="list-style: disc;">
                                              <li class="lne-hgt">Sanitized Room</li>
                                              <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                              <li class="lne-hgt">Sterilize Indoor</li>
                                              <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                <!--<li class="lne-hgt">Adult Base Fare</li>
                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="result-footer clearfix">
                                    <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                        <li class="tipsy-holder">     
                                        </li>
                                        <li class="tipsy-holder">
                                          <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                            <a href="" ng-click="login()" style="color: #244082;">Login
                                            </a>
                                            <span class="color-base ng-binding">
                                                &amp; get additional <span class="rs">Rs.</span>250 off using
                                                <span class="ecash-color"> eCash</span>
                                            </span>
                                        </div>
                                      </li>
                                   </ul>
                                </div>
                                
                                   <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                </div>
                                  
                              
                              <div class="col-md-4" style="padding-top: 20px;">
                                <div class="fw-btns">
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                      <span class="mr-5">
                                        <i class="common-logo logo-ta map-hide"></i>
                                        <span class="b ng-binding">4/5</span>
                                      </span>
                                      &nbsp;
                                      <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                      <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                        <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                      </span>
                                    </li>
                                    <li class="fs-11 three-dot">
                                      <span class="ng-binding">Wonderful &nbsp;Location</span>
                                      <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                    </li>
                                  </ul>
                                  <div class="tooltip-container">
                                    <div class="fw-price">
                                      <p>
                                        <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                        <span class="bold"><i class="fa fa-inr"></i>659</span>
                                      </p>
                                    </div>
                                    <div class="tooltip-content">
                                      <ul class="pad-0">
                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                        <li class="tooltip-p lne-hgt">
                                          <ul class="df-padd">
                                            <li class="lne-hgt">Adult Base Fare</li>
                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                  </ul>
                                  
                                  <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                </div>
                              </div></div></div></div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Popular Packages Ends -->
              </div>
              <!--<div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels02.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Hotel West-End <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Hotel West-End</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$349.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels03.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Chambiges Elysees <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Chambiges Elysees</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$360.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->
            </div>

            <!--<div class="hl1"></div>
            <div class="row">
              <div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels04.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Hamilton Hotel <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Hamilton Hotel</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$75.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels05.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Central Grand Hotel <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Central Grand Hotel</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$65.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels06.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Ambasador Premium <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Ambasador Premium</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$35.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="hl1"></div>
            <div class="row">
              <div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels07.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Grand Plaza <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Grand Plaza</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$450.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels08.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Grand Iberia <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Grand Iberia</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$255.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="thumb5">
                  <div class="thumbnail clearfix">
                    <figure>
                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels09.jpg" alt="" class="img-responsive">
                      <div class="over">
                        <div class="v1">Westminster Hotel <span>6.9 Review score</span></div>
                        <div class="v2">Twin / Double Room</div>
                      </div>
                    </figure>
                    <div class="caption">
                      <div class="txt1">Westminster Hotel</div>
                      <div class="txt2">Twin / Double Room</div>
                      <div class="txt3 clearfix">
                        <div class="left_side">
                          <div class="price">$275.00</div>
                          <div class="stars2">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                            <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                          </div>
                        </div>
                        <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->

            <div class="pager_wrapper">
              <ul class="pager clearfix">
                <li class="prev"><a href="#">Previous</a></li>
                <li class="li"><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li class="li"><a href="#">3</a></li>
                <li class="li"><a href="#">4</a></li>
                <li class="li"><a href="#">5</a></li>
                <li class="li"><a href="#">6</a></li>
                <li class="li"><a href="#">7</a></li>
                <li class="li"><a href="#">8</a></li>
                <li class="li"><a href="#">9</a></li>
                <li class="li"><a href="#">10</a></li>
                <li class="next"><a href="#">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


      <!--<div id="content">
        <div class="container">
          <div class="tabs_wrapper tabs1_wrapper">
            <div class="tabs tabs2">
              <div class="tabs_tabs tabs1_tabs">
                <ul>
                  <li class="flights"><a href="#tabs-1">Flights</a></li>
                  <li class="active hotels"><a href="#tabs-2">Hotels</a></li>
                  <li class="cars"><a href="#tabs-3">Cars</a></li>
                  <li class="cruises"><a href="#tabs-4">Cruises</a></li>
                </ul>
              </div>
              <div class="tabs_content tabs1_content">
                <div id="tabs-1">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Flying from:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">City or Airport</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>To:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">City or Airport</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Departing:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Returning:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-1">
                        <div class="select1_wrapper">
                          <label>Adult:</label>
                          <div class="select1_inner">
                            <select class="select2 select select3" style="width: 100%">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-1">
                        <div class="select1_wrapper">
                          <label>Child:</label>
                          <div class="select1_inner">
                            <select class="select2 select select3" style="width: 100%">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="button1_wrapper">
                          <button type="submit" class="btn-default btn-form1-submit">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row">
                   <div id="sidebar" class="col-lg-3">
              <aside class="detail-sidebar sidebar-wrapper">
                <!--<div class="sidebar-item sidebar-item-dark">
                  <div class="detail-title">
                    <h3>Flights</h3>
                  </div>
                  <form>
                    <div class="row">
                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="depart" placeholder="Flying from">
                      </div>
                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="return" placeholder="Flying To">
                      </div>
                      <div class="form-group col-lg-6">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" value="Return Date" />

                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                      </div>
                      <div class="form-group col-lg-6">
                        <div class='input-group date' id='datetimepicker2'>
                          <input type='text' class="form-control" value="Return Date" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                      <div class="form-group col-lg-6">
                        <select name="custom-select-1" class="selectpicker form-control" tabindex="1">
                          <option value="0">Adult</option>
                          <option value="1">0</option>
                          <option value="2">1</option>
                          <option value="3">2</option>
                          <option value="4">3</option>
                          <option value="5">4</option>
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
                        <select name="custom-select-2" class="selectpicker form-control" tabindex="1">
                          <option value="0">Child</option>
                          <option value="1">0</option>
                          <option value="2">1</option>
                          <option value="3">2</option>
                          <option value="4">3</option>
                          <option value="5">4</option>
                        </select>
                      </div>
                      <div class="col-lg-12">
                        <div class="comment-btn">
                            <a href="#" class="btn-blue btn-red">Search Now</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>-->
               <!-- <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Connection</h3>
                  </div>
                  <div class="sidebar-content">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Offers without connection (13)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Offers with connection (88)
                        </label>
                      </div>
                    </form>
                  </div>
                </div>

                

                <div class="sidebar-item" style="height: 135px;">
                  <div class="detail-title">
                    <h3>Price</h3>
                  </div>
                  <div id="slider"></div>
                </div>

                <div class="sidebar-item" style="height: 150px;">
                  <div class="detail-title">
                    <h3>Return Price</h3>
                  </div>
                  <section class="range-slider" id="facet-price-range-slider">
  
                  <input name="range-1" value="0" min="0" max="1250" step="1" type="range" style="border: none;">
                  
                  <input name="range-2" value="1250" min="0" max="1250" step="1" type="range" style="border: none;">
                  
                </section>
                </div>

                <!--<div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Departure</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Before 11am</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">11am - 5pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">5pm - 9pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">After 9pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="detail-title">
                    <h3>Return</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Before 11am</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">11am - 5pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">5pm - 9pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">After 9pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="detail-title">
                    <h3>Onward Stops</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Direct</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">1 Stop</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">2+ Stops</p>
                      </div>
                    </div>
                  </div>
                  <div class="detail-title">
                    <h3>Return Stops</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Direct</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">1 Stop</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">2+ Stops</p>
                      </div>
                    </div>
                  </div>
                </div>-->

                <!--<div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Rating</h3>
                  </div>
                  <div class="sidebar-content clearfix">
                    <fieldset class="rating">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star-o"></span>
                      <span class="fa fa-star-o"></span>
                      <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" checked/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                  </div>
                </div>
                  
                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Airlines</h3>
                  </div>
                  <div class="sidebar-content">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="<?php echo base_url('assets/images/flight/6E.gif')?>" style="width: 9%;padding-right: 2px;"> IndiGo
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="<?php echo base_url('assets/images/flight/AI.gif')?>" style="width: 9%;padding-right: 2px;"> Air India
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="<?php echo base_url('assets/images/flight/UK.gif')?>" style="width: 9%;padding-right: 2px;"> Vistara
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="<?php echo base_url('assets/images/flight/SG.gif')?>" style="width: 9%;padding-right: 2px;"> Spicejet
                        </label>
                      </div>
                    </form>
                  </div>
                </div>
                <!--<div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Categories</h3>
                  </div>
                  <ul class="event-list">
                    <li><a href="#">SEA TOURS (785)</a></li>
                    <li><a href="#">ROMANTIC TOURS (125)</a></li>
                    <li><a href="#">FOOD TOURS (85)</a></li>
                    <li><a href="#">HONEYMOON TOURS (70)</a></li>
                    <li><a href="#">MOUNTAIN TOURS (159)</a></li>
                  </ul>
                </div>-->
              <!--</aside>
            </div>
                    <div class="col-sm-9">

                      <!--<form action="javascript:;" class="form3 clearfix">
                        <div class="select1_wrapper txt">
                          <label>Sort by:</label>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Name</option>
                              <option value="2">Name2</option>
                              <option value="2">Name3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Price</option>
                              <option value="2">Price2</option>
                              <option value="2">Price3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Raiting</option>
                              <option value="2">Raiting2</option>
                              <option value="2">Raiting3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Popularity</option>
                              <option value="2">Popularity2</option>
                              <option value="2">Popularity3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper buttons">
                          <a href="#" class="btn-default s1"></a>
                          <a href="#" class="btn-default s2"></a>
                          <a href="#" class="btn-default s3"></a>
                        </div>
                      </form>-->

                      

                      <!--<div class="row">

                        <div class="col-sm-4">

                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights01.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Abudabi - Zurich</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$250.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights02.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Sydney - Berlin</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$849.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights03.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Ankara - Munich</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$849.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="hl1"></div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights04.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Zurich- Moscow</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$549.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights05.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Boston- Tbilisi</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$749.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights06.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Amsterdam- Viena</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$179.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="hl1"></div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights07.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Berlin- Warsaw</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$69.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights08.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">New York - Paris</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$539.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/flights09.jpg" alt="" class="img-responsive">
                              </figure>
                              <div class="caption">
                                <div class="txt1">Riga- Prague</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$49.00</div>
                                    <div class="nums">avg/person</div>
                                  </div>
                                  <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-flights.html" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="pager_wrapper">
                        <ul class="pager clearfix">
                          <li class="prev"><a href="#">Previous</a></li>
                          <li class="li"><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li class="li"><a href="#">3</a></li>
                          <li class="li"><a href="#">4</a></li>
                          <li class="li"><a href="#">5</a></li>
                          <li class="li"><a href="#">6</a></li>
                          <li class="li"><a href="#">7</a></li>
                          <li class="li"><a href="#">8</a></li>
                          <li class="li"><a href="#">9</a></li>
                          <li class="li"><a href="#">10</a></li>
                          <li class="next"><a href="#">Next</a></li>
                        </ul>
                      </div>


                    </div>
                  </div>
                </div>
                <div id="tabs-2">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-4">
                        <div class="select1_wrapper">
                          <label>City or Hotel Name:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Enter a destination or hotel name</option>
                              <option value="2">Lorem ipsum dolor sit amet</option>
                              <option value="3">Duis autem vel eum</option>
                              <option value="4">Ut wisi enim ad minim veniam</option>
                              <option value="5">Nam liber tempor cum</option>
                              <option value="6">At vero eos et accusam et</option>
                              <option value="7">Consetetur sadipscing elitr</option>
                              <option value="8">Sed diam nonumy</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Check-In:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Check-Out:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Adult:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Room  for  1  adult</option>
                              <option value="2">Room  for  2  adult</option>
                              <option value="3">Room  for  3  adult</option>
                              <option value="4">Room  for  4  adult</option>
                              <option value="5">Room  for  5  adult</option>
                              <option value="6">Room  for  6  adult</option>
                              <option value="7">Room  for  7  adult</option>
                              <option value="8">Room  for  8  adult</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="button1_wrapper">
                          <button type="submit" class="btn-default btn-form1-submit">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-sm-3">
                      <aside class="detail-sidebar sidebar-wrapper">
                <!--<div class="sidebar-item sidebar-item-dark">
                  <div class="detail-title">
                    <h3>Flights</h3>
                  </div>
                  <form>
                    <div class="row">
                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="depart" placeholder="Flying from">
                      </div>
                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="return" placeholder="Flying To">
                      </div>
                      <div class="form-group col-lg-6">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" value="Return Date" />

                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                      </div>
                      <div class="form-group col-lg-6">
                        <div class='input-group date' id='datetimepicker2'>
                          <input type='text' class="form-control" value="Return Date" />
                          <span class="input-group-addon">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                      <div class="form-group col-lg-6">
                        <select name="custom-select-1" class="selectpicker form-control" tabindex="1">
                          <option value="0">Adult</option>
                          <option value="1">0</option>
                          <option value="2">1</option>
                          <option value="3">2</option>
                          <option value="4">3</option>
                          <option value="5">4</option>
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
                        <select name="custom-select-2" class="selectpicker form-control" tabindex="1">
                          <option value="0">Child</option>
                          <option value="1">0</option>
                          <option value="2">1</option>
                          <option value="3">2</option>
                          <option value="4">3</option>
                          <option value="5">4</option>
                        </select>
                      </div>
                      <div class="col-lg-12">
                        <div class="comment-btn">
                            <a href="#" class="btn-blue btn-red">Search Now</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>-->
               <!-- <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Deals</h3>
                  </div>
                  <div class="sidebar-content">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Exclusive Deals 1
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Last Minute Deals 2
                        </label>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Price for 2 Nights</h3>
                  </div>
                  <div class="sidebar-content">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Less than Rs. 1000
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Rs. 1001 to Rs. 2000
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Rs. 2001 to Rs. 4000
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Rs. 4001 to Rs. 7000
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Rs. 7001 to Rs. 10,000
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Greater than Rs. 10,001
                        </label>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>City</h3>
                  </div>
                  <div class="sidebar-content">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Gurgaon
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Greater Noida 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Ghaziabad 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Manesar
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Faridabad
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Rewari
                        </label>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Show Hotels With</h3>
                  </div>
                  <div class="sidebar-content">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Clean Pass
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Free Cancellation 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Free Breakfast 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Free WiFi
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Couple Friendly
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Quarantine and Self Isolation
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Longstay Hotels
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Pet Friendly
                        </label>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Amenities</h3>
                  </div>
                  <div class="sidebar-content content" style="padding-top: 0;padding-left: 0;">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Air Conditioning
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Airport Transfer (On Demand) 
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Banquet Hall 
                        </label>
                      </div>

                      <div id="show-more" ><a href="javascript:void(0)">View all</a></div>
                      <div id="show-more-content">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Bar 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Bonfire 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Business Services 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">CCTV Surveillance 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Caretaker
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Conference Room 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Contactless Check-in
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Contactless Room Service 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Daily Housekeeing 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Disinfection 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Gloves 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Internet 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Mask 
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Parking Facility 
                          </label>
                        </div>
                        
                        <div id="show-less"><a href="javascript:void(0)">View less</a></div>
                      </div>

                    </form>
                  </div>
                </div>

                

                <!--<div class="sidebar-item" style="height: 135px;">
                  <div class="detail-title">
                    <h3>Price</h3>
                  </div>
                  <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 22.2222%; width: 33.3333%;"><span class="price-range-both value"><i>$3000 - </i>6000</span></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 22.2222%;"><span class="price-range-min value">$3000</span></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 55.5556%;"><span class="price-range-max value">$6000</span></a></div>
                </div>

                <div class="sidebar-item" style="height: 150px;">
                  <div class="detail-title">
                    <h3>Return Price</h3>
                  </div>
                  <section class="range-slider" id="facet-price-range-slider"><div class="slider-thumb" style="left: 100%; transform: translate(-100%, 0px);"></div><div class="slider-thumb" style="left: 0%; transform: translate(0%, 0px);"></div>
  
                  <input name="range-1" value="0" min="0" max="1250" step="1" type="range" style="border: none;">
                  
                  <input name="range-2" value="1250" min="0" max="1250" step="1" type="range" style="border: none;">
                  
                <div class="track track--full"></div><div class="track track--included" style="width: 100%; left: 0%;"></div><output style="left: 0%; transform: translate(0%, 0px);">0</output><output style="left: 100%; transform: translate(-100%, 0px);">1,250undefined</output></section>
                </div>

                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Departure</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Before 11am</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">11am - 5pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">5pm - 9pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">After 9pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="detail-title">
                    <h3>Return</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Before 11am</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">11am - 5pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">5pm - 9pm</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">After 9pm</p>
                      </div>
                    </div>
                  </div>
                  <div class="detail-title">
                    <h3>Onward Stops</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Direct</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">1 Stop</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">2+ Stops</p>
                      </div>
                    </div>
                  </div>
                  <div class="detail-title">
                    <h3>Return Stops</h3>
                  </div>
                  <div class="sidebar-content">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="filter-p">Direct</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">1 Stop</p>
                      </div>
                      <div class="col-md-6">
                        <p class="filter-p">2+ Stops</p>
                      </div>
                    </div>
                  </div>
                </div>-->

                <!--<div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Star Rating</h3>
                  </div>
                  <ul class="start-rating-filter tabs txt-ac full">
                    <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="0, 1 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                        <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>0, 1</p>
                          <p class="full"><i class="star-filled single"></i></p>
                          <span class="full rating-counter ng-binding">134</span>
                      </label>
                    </li>
                    <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="2 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                        <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>2</p>
                          <p class="full"><i class="star-filled single"></i></p>
                          <span class="full rating-counter ng-binding">95</span>
                      </label>
                    </li>
                    <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="3 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                        <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>3</p>
                          <p class="full"><i class="star-filled single"></i></p>
                          <span class="full rating-counter ng-binding">363</span>
                      </label>
                    </li>
                    <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="4 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                        <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>4</p>
                          <p class="full"><i class="star-filled single"></i></p>
                          <span class="full rating-counter ng-binding">74</span>
                      </label>
                    </li>
                    <li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                      <label class="filter-label full" title="5 star" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                        <p class="rating-label ng-binding"> <span ng-show="item.k === 0" class="ng-hide">Ø, </span>5</p>
                          <p class="full"><i class="star-filled single"></i></p>
                          <span class="full rating-counter ng-binding">60</span>
                      </label>
                    </li>
                  </ul>
                  <div class="sidebar-content clearfix">
                    <!--<div class="deal-rating" style="margin-bottom: 0px;">
                      <span class="fa fa-star checked" style="font-size: 20px;"></span>
                      <span class="fa fa-star checked" style="font-size: 20px;"></span>
                      <span class="fa fa-star checked" style="font-size: 20px;"></span>
                      <span class="fa fa-star-o" style="font-size: 20px;"></span>
                      <span class="fa fa-star-o" style="font-size: 20px;"></span>
                    </div>-->
                    <!--<fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half"><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4"><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half"><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3"><label class="full" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half"><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2"><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half"><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" checked=""><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half"><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>-->
                 <!-- </div>
                </div>

                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Tripadvisor Rating</h3>
                  </div>
                  <ul class="start-rating-filter tabs theme-green txt-ac full trip-advisor-rating-filter">
                    <!-- ngRepeat: item in value.data --><!--<li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                        <label class="filter-label full" title="Rating: 0 to 1" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                            <p class="rating-label txt-greenNew ng-binding">0 - 1</p>
                              <p class="full"><i class="common-logo logo-ta"></i></p>
                              <span class="full rating-counter mr-tn ng-binding">11</span>
                          </label>
                      </li><!-- end ngRepeat: item in value.data --><!--<li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                        <label class="filter-label full" title="Rating: 1 to 2" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                            <p class="rating-label txt-greenNew ng-binding">1 - 2</p>
                              <p class="full"><i class="common-logo logo-ta"></i></p>
                              <span class="full rating-counter mr-tn ng-binding">21</span>
                          </label>
                      </li><!-- end ngRepeat: item in value.data --><!--<li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                        <label class="filter-label full" title="Rating: 2 to 3" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                            <p class="rating-label txt-greenNew ng-binding">2 - 3</p>
                              <p class="full"><i class="common-logo logo-ta"></i></p>
                              <span class="full rating-counter mr-tn ng-binding">108</span>
                          </label>
                      </li><!-- end ngRepeat: item in value.data --><!--<li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                        <label class="filter-label full" title="Rating: 3 to 4" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                            <p class="rating-label txt-greenNew ng-binding">3 - 4</p>
                              <p class="full"><i class="common-logo logo-ta"></i></p>
                              <span class="full rating-counter mr-tn ng-binding">287</span>
                          </label>
                      </li><!-- end ngRepeat: item in value.data --><!--<li class="tabs-link tab-hover-none tab-active-bdr-top-in ng-scope" ng-class="{'active':isFilterSelected(value.key,item.v)}" ng-repeat="item in value.data">
                        <label class="filter-label full" title="Rating: 4 to 5" ng-class="{'disabled':item.c==0}" ng-click="getFilteredData(value.key, item,item.isTrue)">
                            <p class="rating-label txt-greenNew ng-binding">4 - 5</p>
                              <p class="full"><i class="common-logo logo-ta"></i></p>
                              <span class="full rating-counter mr-tn ng-binding">193</span>
                          </label>
                      </li><!-- end ngRepeat: item in value.data -->

                 <!-- </ul>
                </div>


                  
                <!--<div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Airlines</h3>
                  </div>
                  <div class="sidebar-content">
                    <form>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/6E.gif" style="width: 9%;padding-right: 2px;"> IndiGo
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/AI.gif" style="width: 9%;padding-right: 2px;"> Air India
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/UK.gif" style="width: 9%;padding-right: 2px;"> Vistara
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/SG.gif" style="width: 9%;padding-right: 2px;"> Spicejet
                        </label>
                      </div>
                    </form>
                  </div>
                </div>-->
                <!--<div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Categories</h3>
                  </div>
                  <ul class="event-list">
                    <li><a href="#">SEA TOURS (785)</a></li>
                    <li><a href="#">ROMANTIC TOURS (125)</a></li>
                    <li><a href="#">FOOD TOURS (85)</a></li>
                    <li><a href="#">HONEYMOON TOURS (70)</a></li>
                    <li><a href="#">MOUNTAIN TOURS (159)</a></li>
                  </ul>
                </div>-->
              <!--</aside>
                    </div>
                    <div class="col-sm-9">
                      <!--<form action="javascript:;" class="form3 clearfix">
                        <div class="select1_wrapper txt">
                          <label>Sort by:</label>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Name</option>
                              <option value="2">Name2</option>
                              <option value="2">Name3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Price</option>
                              <option value="2">Price2</option>
                              <option value="2">Price3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Raiting</option>
                              <option value="2">Raiting2</option>
                              <option value="2">Raiting3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Popularity</option>
                              <option value="2">Popularity2</option>
                              <option value="2">Popularity3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper buttons">
                          <a href="#" class="btn-default s1"></a>
                          <a href="#" class="btn-default s2"></a>
                          <a href="#" class="btn-default s3"></a>
                        </div>
                      </form>-->
                      <!--<div class="row">
                        <div class="col-sm-12">
                          <!-- Popular Packages --> 
                       <!--   <section class="popular-packages package-inner pad-bottom-80">
                            <div class="">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="room-main">
                                    <div class="room-item mar-bottom-30">
                                      <div class="row">
                                        <div class="col-lg-3">
                                          <span class="featured-hotel b ng-binding ng-scope" ng-if="hotel.showFeaturedHotel || hotel.sT">Featured</span>
                                          <div class="row2Wrap">

                                            <!-- Slider 1 -->
                                            <!--<div class="slider" id="slider3">
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                                  <!--<span>
                                                    <h2>Title 1</h2>
                                                </span>-->
                                             <!-- </div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                                  <!--<span>
                                                    <h2>Title 2</h2>
                                                  </span>-->
                                              <!--</div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                                  <!--<span>
                                                    <h2>Title 3</h2>
                                                  </span>-->
                                             <!-- </div>
                                              <!-- The Arrows -->
                                             <!-- <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                              <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                                <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                              </i>
                                              <!-- Title Bar -->
                                              <!--     <span class="titleBar">
                                              <h1>I am like a leaf in the wind.</h1> 
                                              <p>Watch me soar!</p>
                                              </span> -->
                                           <!-- </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="room-content">
                                            <h3><a href="#">Luxury Room</a></h3>
                                            <div class="deal-rating" style="margin-bottom: 0px;">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="fa fa-star-o"></span>
                                            </div>
                                            <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                              <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                              </path>
                                              </svg>
                                              <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                                <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                                  <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                                </span>
                                              </span>
                                            </div>
                                            <ul class="full hotel-amenities hotel-amenities-height-auto">
                                              
                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-check-square-o"></i>
                                                <span class="ng-binding">Free Cancellation</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-coffee"></i>
                                                <span class="ng-binding">Free Breakfast</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-wifi"></i>
                                                <span class="ng-binding">Free WiFi</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                                <i class="ytfi-SWMP fs-14"></i>
                                                <span class="ng-binding">Swimming pool</span>

                                              </li>
                                            </ul>
                                            <div class="col-md-12" style="padding: 0px;">
                                              <div class="tooltip-container">
                                                <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                                <div class="tooltip-content">
                                                  <ul class="pad-0" style="color: #333;">
                                                    
                                                    <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                                   <!-- <li class="tooltip-p lne-hgt">
                                                      <ul style="list-style: disc;">
                                                        <li class="lne-hgt">Sanitized Room</li>
                                                        <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                                        <li class="lne-hgt">Sterilize Indoor</li>
                                                        <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                          <!--<li class="lne-hgt">Adult Base Fare</li>
                                                          <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                                     <!-- </ul>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                          
                                             <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                         <!-- </div>
                                            <div class="result-footer clearfix">
                                              <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                                  <li class="tipsy-holder">     
                                                  </li>
                                                  <li class="tipsy-holder">
                                                    <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                                      <a href="" ng-click="login()" style="color: #244082;">Login
                                                      </a>
                                                      <span class="color-base ng-binding">
                                                          &amp; get additional <span class="rs">Rs.</span>250 off using
                                                          <span class="ecash-color"> eCash</span>
                                                      </span>
                                                  </div>
                                                </li>
                                             </ul>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="fw-btns">
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                                <span class="mr-5">
                                                  <i class="common-logo logo-ta map-hide"></i>
                                                  <span class="b ng-binding">4/5</span>
                                                </span>
                                                &nbsp;
                                                <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                                <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                                  <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                                </span>
                                              </li>
                                              <li class="fs-11 three-dot">
                                                <span class="ng-binding">Wonderful &nbsp;Location</span>
                                                <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                              </li>
                                            </ul>
                                            <div class="tooltip-container">
                                              <div class="fw-price">
                                                <p>
                                                  <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                                  <span class="bold"><i class="fa fa-inr"></i>659</span>
                                                </p>
                                              </div>
                                              <div class="tooltip-content">
                                                <ul class="pad-0">
                                                  <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                  <li class="tooltip-p lne-hgt">
                                                    <ul class="df-padd">
                                                      <li class="lne-hgt">Adult Base Fare</li>
                                                      <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                                    </ul>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                            </ul>
                                            
                                            <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <!-- Popular Packages Ends -->
                        <!--</div>

                        <div class="col-sm-12">
                          <!-- Popular Packages --> 
                      <!--    <section class="popular-packages package-inner pad-bottom-80">
                            <div class="">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="room-main">
                                    <div class="room-item mar-bottom-30">
                                      <div class="row">
                                        <div class="col-lg-3">
                                          <span class="featured-hotel b ng-binding ng-scope" ng-if="hotel.showFeaturedHotel || hotel.sT">Featured</span>
                                          <div class="row2Wrap">

                                            <!-- Slider 1 -->
                                           <!-- <div class="slider" id="slider3">
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                                  <!--<span>
                                                    <h2>Title 1</h2>
                                                </span>-->
                                            <!--  </div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                                  <!--<span>
                                                    <h2>Title 2</h2>
                                                  </span>-->
                                              <!--</div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                                  <!--<span>
                                                    <h2>Title 3</h2>
                                                  </span>-->
                                              <!--</div>
                                              <!-- The Arrows -->
                                             <!-- <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                              <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                                <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                              </i>
                                              <!-- Title Bar -->
                                              <!--     <span class="titleBar">
                                              <h1>I am like a leaf in the wind.</h1> 
                                              <p>Watch me soar!</p>
                                              </span> -->
                                           <!-- </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="room-content">
                                            <h3><a href="#">Luxury Room</a></h3>
                                            <div class="deal-rating" style="margin-bottom: 0px;">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="fa fa-star-o"></span>
                                            </div>
                                            <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                              <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                              </path>
                                              </svg>
                                              <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                                <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                                  <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                                </span>
                                              </span>
                                            </div>
                                            <ul class="full hotel-amenities hotel-amenities-height-auto">
                                              
                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-check-square-o"></i>
                                                <span class="ng-binding">Free Cancellation</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-coffee"></i>
                                                <span class="ng-binding">Free Breakfast</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-wifi"></i>
                                                <span class="ng-binding">Free WiFi</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                                <i class="ytfi-SWMP fs-14"></i>
                                                <span class="ng-binding">Swimming pool</span>

                                              </li>
                                            </ul>
                                            <div class="col-md-12" style="padding: 0px;">
                                              <div class="tooltip-container">
                                                <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                                <div class="tooltip-content">
                                                  <ul class="pad-0" style="color: #333;">
                                                    
                                                    <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                                    <!--<li class="tooltip-p lne-hgt">
                                                      <ul style="list-style: disc;">
                                                        <li class="lne-hgt">Sanitized Room</li>
                                                        <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                                        <li class="lne-hgt">Sterilize Indoor</li>
                                                        <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                          <!--<li class="lne-hgt">Adult Base Fare</li>
                                                          <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                                     <!-- </ul>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                          
                                             <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                          <!--</div>
                                            <div class="result-footer clearfix">
                                              <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                                  <li class="tipsy-holder">     
                                                  </li>
                                                  <li class="tipsy-holder">
                                                    <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                                      <a href="" ng-click="login()" style="color: #244082;">Login
                                                      </a>
                                                      <span class="color-base ng-binding">
                                                          &amp; get additional <span class="rs">Rs.</span>250 off using
                                                          <span class="ecash-color"> eCash</span>
                                                      </span>
                                                  </div>
                                                </li>
                                             </ul>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="fw-btns">
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                                <span class="mr-5">
                                                  <i class="common-logo logo-ta map-hide"></i>
                                                  <span class="b ng-binding">4/5</span>
                                                </span>
                                                &nbsp;
                                                <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                                <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                                  <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                                </span>
                                              </li>
                                              <li class="fs-11 three-dot">
                                                <span class="ng-binding">Wonderful &nbsp;Location</span>
                                                <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                              </li>
                                            </ul>
                                            <div class="tooltip-container">
                                              <div class="fw-price">
                                                <p>
                                                  <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                                  <span class="bold"><i class="fa fa-inr"></i>659</span>
                                                </p>
                                              </div>
                                              <div class="tooltip-content">
                                                <ul class="pad-0">
                                                  <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                  <li class="tooltip-p lne-hgt">
                                                    <ul class="df-padd">
                                                      <li class="lne-hgt">Adult Base Fare</li>
                                                      <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                                    </ul>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                            </ul>
                                            
                                            <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <!-- Popular Packages Ends -->
                        <!--</div>

                        <div class="col-sm-12">
                          <!-- Popular Packages --> 
                        <!--  <section class="popular-packages package-inner pad-bottom-80">
                            <div class="">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="room-main">
                                    <div class="room-item mar-bottom-30">
                                      <div class="row">
                                        <div class="col-lg-3">
                                          <div class="pr percent-off ng-scope" ng-if="hotel.savingsPercentage &amp;&amp; !hotel.showFeaturedHotel &amp;&amp; !hotel.sT &amp;&amp; !hotel.tagName">
                                            <div class="flagwave"></div>
                                            <span class=" uppercase mt-10">
                                            <span class="fm-lsb txt-al b ng-binding">15% </span>
                                            <span class="fm-lsb txt-al">Off</span>

                                            <!-- <span class="percent-off-triangle"></span> -->
                                          <!--  </span>
                                          </div>
                                          <div class="row2Wrap">

                                            <!-- Slider 1 -->
                                          <!--  <div class="slider" id="slider3">
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                                  <!--<span>
                                                    <h2>Title 1</h2>
                                                </span>-->
                                              <!--</div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                                  <!--<span>
                                                    <h2>Title 2</h2>
                                                  </span>-->
                                              <!--</div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                                  <!--<span>
                                                    <h2>Title 3</h2>
                                                  </span>-->
                                             <!-- </div>
                                              <!-- The Arrows -->
                                              <!--<i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                              <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                                <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                              </i>
                                              <!-- Title Bar -->
                                              <!--     <span class="titleBar">
                                              <h1>I am like a leaf in the wind.</h1> 
                                              <p>Watch me soar!</p>
                                              </span> -->
                                           <!-- </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="room-content">
                                            <h3><a href="#">Luxury Room</a></h3>
                                            <div class="deal-rating" style="margin-bottom: 0px;">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="fa fa-star-o"></span>
                                            </div>
                                            <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                              <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                              </path>
                                              </svg>
                                              <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                                <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                                  <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                                </span>
                                              </span>
                                            </div>
                                            <ul class="full hotel-amenities hotel-amenities-height-auto">
                                              
                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-check-square-o"></i>
                                                <span class="ng-binding">Free Cancellation</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-coffee"></i>
                                                <span class="ng-binding">Free Breakfast</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-wifi"></i>
                                                <span class="ng-binding">Free WiFi</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                                <i class="ytfi-SWMP fs-14"></i>
                                                <span class="ng-binding">Swimming pool</span>

                                              </li>
                                            </ul>
                                            <div class="col-md-12" style="padding: 0px;">
                                              <div class="tooltip-container">
                                                <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                                <div class="tooltip-content">
                                                  <ul class="pad-0" style="color: #333;">
                                                    
                                                    <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                                   <!-- <li class="tooltip-p lne-hgt">
                                                      <ul style="list-style: disc;">
                                                        <li class="lne-hgt">Sanitized Room</li>
                                                        <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                                        <li class="lne-hgt">Sterilize Indoor</li>
                                                        <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                          <!--<li class="lne-hgt">Adult Base Fare</li>
                                                          <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                                     <!-- </ul>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                          
                                             <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                          <!--</div>
                                            <div class="result-footer clearfix">
                                              <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                                  <li class="tipsy-holder">     
                                                  </li>
                                                  <li class="tipsy-holder">
                                                    <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                                      <a href="" ng-click="login()" style="color: #244082;">Login
                                                      </a>
                                                      <span class="color-base ng-binding">
                                                          &amp; get additional <span class="rs">Rs.</span>250 off using
                                                          <span class="ecash-color"> eCash</span>
                                                      </span>
                                                  </div>
                                                </li>
                                             </ul>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="fw-btns">
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                                <span class="mr-5">
                                                  <i class="common-logo logo-ta map-hide"></i>
                                                  <span class="b ng-binding">4/5</span>
                                                </span>
                                                &nbsp;
                                                <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                                <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                                  <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                                </span>
                                              </li>
                                              <li class="fs-11 three-dot">
                                                <span class="ng-binding">Wonderful &nbsp;Location</span>
                                                <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                              </li>
                                            </ul>
                                            <div class="tooltip-container">
                                              <div class="fw-price">
                                                <p>
                                                  <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                                  <span class="bold"><i class="fa fa-inr"></i>659</span>
                                                </p>
                                              </div>
                                              <div class="tooltip-content">
                                                <ul class="pad-0">
                                                  <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                  <li class="tooltip-p lne-hgt">
                                                    <ul class="df-padd">
                                                      <li class="lne-hgt">Adult Base Fare</li>
                                                      <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                                    </ul>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                            </ul>
                                            
                                            <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <!-- Popular Packages Ends -->
                        <!--</div>

                        <div class="col-sm-12">
                          <!-- Popular Packages --> 
                         <!-- <section class="popular-packages package-inner pad-bottom-80">
                            <div class="">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="room-main">
                                    <div class="room-item mar-bottom-30">
                                      <div class="row">
                                        <div class="col-lg-3">
                                          <span class="featured-hotel b ng-binding ng-scope" ng-if="hotel.showFeaturedHotel || hotel.sT">Featured</span>
                                          <div class="row2Wrap">

                                            <!-- Slider 1 -->
                                           <!-- <div class="slider" id="slider3">
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/jungle.jpg)">
                                                  <!--<span>
                                                    <h2>Title 1</h2>
                                                </span>-->
                                              <!--</div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                                  <!--<span>
                                                    <h2>Title 2</h2>
                                                  </span>-->
                                              <!--</div>
                                              <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                                  <!--<span>
                                                    <h2>Title 3</h2>
                                                  </span>-->
                                             <!-- </div>
                                              <!-- The Arrows -->
                                             <!-- <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                              <i class="right" class="arrows" style="z-index:2; position:absolute;">
                                                <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                              </i>
                                              <!-- Title Bar -->
                                              <!--     <span class="titleBar">
                                              <h1>I am like a leaf in the wind.</h1> 
                                              <p>Watch me soar!</p>
                                              </span> -->
                                          <!--  </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="room-content">
                                            <h3><a href="#">Luxury Room</a></h3>
                                            <div class="deal-rating" style="margin-bottom: 0px;">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="fa fa-star-o"></span>
                                            </div>
                                            <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                              <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                              </path>
                                              </svg>
                                              <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                                <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                                  <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span>Delhi Airport, Delhi</span></div>
                                                </span>
                                              </span>
                                            </div>
                                            <ul class="full hotel-amenities hotel-amenities-height-auto">
                                              
                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-check-square-o"></i>
                                                <span class="ng-binding">Free Cancellation</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-coffee"></i>
                                                <span class="ng-binding">Free Breakfast</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <i class="fa fa-wifi"></i>
                                                <span class="ng-binding">Free WiFi</span>
                                              </li>

                                              <li class="ng-scope" title="" ng-repeat="inc in getHotelDetailsItem(hotel, 'inclusn') track by $index" ng-if="$index<4">
                                                <img src="<?php echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                                <i class="ytfi-SWMP fs-14"></i>
                                                <span class="ng-binding">Swimming pool</span>

                                              </li>
                                            </ul>
                                            <div class="col-md-12" style="padding: 0px;">
                                              <div class="tooltip-container">
                                                <img src="<?php echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                                <div class="tooltip-content">
                                                  <ul class="pad-0" style="color: #333;">
                                                    
                                                    <!--<li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>-->
                                                  <!--  <li class="tooltip-p lne-hgt">
                                                      <ul style="list-style: disc;">
                                                        <li class="lne-hgt">Sanitized Room</li>
                                                        <li class="lne-hgt">Trained Staff - Personal Hygiene</li>
                                                        <li class="lne-hgt">Sterilize Indoor</li>
                                                        <li class="lne-hgt">Adherence to WHO Guidelines</li>
                                                          <!--<li class="lne-hgt">Adult Base Fare</li>
                                                          <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>-->
                                                     <!-- </ul>
                                                    </li>
                                                  </ul>
                                                </div>
                                              </div>
                                            </div>
                                          
                                             <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                         <!-- </div>
                                            <div class="result-footer clearfix">
                                              <ul class="full hotel-type-list ml10" data-tag="DEAL &nbsp; APPLIED">
                                                  <li class="tipsy-holder">     
                                                  </li>
                                                  <li class="tipsy-holder">
                                                    <div class="info theme-blue nowrap ng-scope" ng-if="hotel.avlEcashBurn &amp;&amp; !isLogin" ng-class="{'review-pipe' :hotel.totalDiscount>0}">
                                                      <a href="" ng-click="login()" style="color: #244082;">Login
                                                      </a>
                                                      <span class="color-base ng-binding">
                                                          &amp; get additional <span class="rs">Rs.</span>250 off using
                                                          <span class="ecash-color"> eCash</span>
                                                      </span>
                                                  </div>
                                                </li>
                                             </ul>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="fw-btns">
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li class="pr hs-size-22 icon-pos-left-center fs-13 trip-color ng-scope" ng-if="hotel.ta.rating">
                                                <span class="mr-5">
                                                  <i class="common-logo logo-ta map-hide"></i>
                                                  <span class="b ng-binding">4/5</span>
                                                </span>
                                                &nbsp;
                                                <span class="hidden-xs ng-binding ng-scope" ng-if="hotel.ta.rating > 3">Very Good </span>
                                                <span ng-if="hotel.ta &amp;&amp; hotel.ta.reviews &amp;&amp; hotel.ta.rating" class="ng-scope">
                                                  <a href="javascript:void(0)" class="ltr-gray fs-10 ng-binding" ng-click="goToDetails(hotel, $index, 'Choose Room',null,null,null,hotel.ta.reviews);">(4922)</a> 
                                                </span>
                                              </li>
                                              <li class="fs-11 three-dot">
                                                <span class="ng-binding">Wonderful &nbsp;Location</span>
                                                <span class="trip-color ng-binding">&nbsp; 4.5/5</span>
                                              </li>
                                            </ul>
                                            <div class="tooltip-container">
                                              <div class="fw-price">
                                                <p>
                                                  <span style="font-size: 17px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span> 
                                                  <span class="bold"><i class="fa fa-inr"></i>659</span>
                                                </p>
                                              </div>
                                              <div class="tooltip-content">
                                                <ul class="pad-0">
                                                  <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                  <li class="tooltip-p lne-hgt">
                                                    <ul class="df-padd">
                                                      <li class="lne-hgt">Adult Base Fare</li>
                                                      <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                                    </ul>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                            <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                              <li><span class="price-night fs-11 ng-binding">For 2 nights</span></li>
                                            </ul>
                                            
                                            <a href="#" class="btn btn-red btn-clr" tabindex="0">Choose Hotel</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <!-- Popular Packages Ends -->
                        </div>
                        <!--<div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels02.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Hotel West-End <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Hotel West-End</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$349.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels03.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Chambiges Elysees <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Chambiges Elysees</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$360.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>-->
                     <!-- </div>

                      <!--<div class="hl1"></div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels04.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Hamilton Hotel <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Hamilton Hotel</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$75.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels05.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Central Grand Hotel <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Central Grand Hotel</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$65.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels06.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Ambasador Premium <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Ambasador Premium</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$35.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="hl1"></div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels07.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Grand Plaza <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Grand Plaza</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$450.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels08.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Grand Iberia <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Grand Iberia</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$255.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb5">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/hotels09.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">Westminster Hotel <span>6.9 Review score</span></div>
                                  <div class="v2">Twin / Double Room</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">Westminster Hotel</div>
                                <div class="txt2">Twin / Double Room</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$275.00</div>
                                    <div class="stars2">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star1.png" alt="">
                                      <img src="https://demo.gridgum.com/templates/Travel-agency/images/star3.png" alt="">
                                    </div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>-->

                     <!-- <div class="pager_wrapper">
                        <ul class="pager clearfix">
                          <li class="prev"><a href="#">Previous</a></li>
                          <li class="li"><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li class="li"><a href="#">3</a></li>
                          <li class="li"><a href="#">4</a></li>
                          <li class="li"><a href="#">5</a></li>
                          <li class="li"><a href="#">6</a></li>
                          <li class="li"><a href="#">7</a></li>
                          <li class="li"><a href="#">8</a></li>
                          <li class="li"><a href="#">9</a></li>
                          <li class="li"><a href="#">10</a></li>
                          <li class="next"><a href="#">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tabs-3">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Country:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Please Select</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>City:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Please Select</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Location:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Please Select</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Pick up Date:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Drop off Date:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>


                      <div class="col-sm-4 col-md-2">
                        <div class="button1_wrapper">
                          <button type="submit" class="btn-default btn-form1-submit">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-sm-3">

                      <ul class="ul3">
                        <li><a href="#">Star Raiting</a></li>
                        <li><a href="#">Price Range</a></li>
                        <li><a href="#">Departure Ports</a></li>
                        <li><a href="#">Trip Duration</a></li>
                        <li><a href="#">Ships</a></li>
                      </ul>

                      <div class="sm_slider sm_slider3">
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

                    </div>
                    <div class="col-sm-9">

                      <form action="javascript:;" class="form3 clearfix">
                        <div class="select1_wrapper txt">
                          <label>Sort by:</label>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Premium</option>
                              <option value="2">Premium2</option>
                              <option value="2">Premium3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Automatic</option>
                              <option value="2">Automatic2</option>
                              <option value="2">Automatic3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Price</option>
                              <option value="2">Price2</option>
                              <option value="2">Price3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper sel">
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Fuel Type</option>
                              <option value="2">Fuel Type2</option>
                              <option value="2">Fuel Type3</option>
                            </select>
                          </div>
                        </div>
                        <div class="select1_wrapper buttons">
                          <a href="#" class="btn-default s1"></a>
                          <a href="#" class="btn-default s2"></a>
                          <a href="#" class="btn-default s3"></a>
                        </div>
                      </form>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars01.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">SMART FORFOUR 1.0 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">SMART FORFOUR 1.0</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$24.00</div>
                                    <div class="nums">per/Day</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars02.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">FIAT 500 1.2 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">FIAT 500 1.2</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$25.00</div>
                                    <div class="nums">per/Day</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars03.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">FIAT PANDA 1.2 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">FIAT PANDA 1.2</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$26.00</div>
                                    <div class="nums">per/Day</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="hl1"></div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars04.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">MERCEDES BENZ C200 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">MERCEDES BENZ C200</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$68.00</div>
                                    <div class="nums">per/person</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars05.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">MERCEDES BENZ E200 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">MERCEDES BENZ E200</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$75.00</div>
                                    <div class="nums">per/person</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars06.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">AUDI A4 2.0 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">AUDI A4 2.0</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$75.00</div>
                                    <div class="nums">per/person</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="hl1"></div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars07.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">PEUGEOT 2008 GPS <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">PEUGEOT 2008 GPS</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$58.00</div>
                                    <div class="nums">per/person</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars08.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">GM VIVARO 2.1 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">GM VIVARO 2.1</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$90.00</div>
                                    <div class="nums">per/person</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="thumb6">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="https://demo.gridgum.com/templates/Travel-agency/images/cars09.jpg" alt="" class="img-responsive">
                                <div class="over">
                                  <div class="v1">MERCEDES BENZ V 2.1 <span>or similar</span></div>
                                  <div class="v2">Mileage unlimited  4 / Manual transmission</div>
                                </div>
                              </figure>
                              <div class="caption">
                                <div class="txt1">MERCEDES BENZ V 2.1</div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price">$100.00</div>
                                    <div class="nums">per/person</div>
                                  </div>
                                  <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="pager_wrapper">
                        <ul class="pager clearfix">
                          <li class="prev"><a href="#">Previous</a></li>
                          <li class="li"><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li class="li"><a href="#">3</a></li>
                          <li class="li"><a href="#">4</a></li>
                          <li class="li"><a href="#">5</a></li>
                          <li class="li"><a href="#">6</a></li>
                          <li class="li"><a href="#">7</a></li>
                          <li class="li"><a href="#">8</a></li>
                          <li class="li"><a href="#">9</a></li>
                          <li class="li"><a href="#">10</a></li>
                          <li class="next"><a href="#">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                  <div id="tabs-4">
                    <form action="javascript:;" class="form1">
                      <div class="row">
                        <div class="col-sm-4 col-md-2">
                          <div class="select1_wrapper">
                            <label>Sail To:</label>
                            <div class="select1_inner">
                              <select class="select2 select" style="width: 100%">
                                <option value="1">All destinations</option>
                                <option value="2">Alaska</option>
                                <option value="3">Bahamas</option>
                                <option value="4">Bermuda</option>
                                <option value="5">Canada</option>
                                <option value="6">Caribbean</option>
                                <option value="7">Europe</option>
                                <option value="8">Hawaii</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                          <div class="select1_wrapper">
                            <label>Sail From:</label>
                            <div class="select1_inner">
                              <select class="select2 select" style="width: 100%">
                                <option value="1">All ports</option>
                                <option value="2">Alaska</option>
                                <option value="3">Bahamas</option>
                                <option value="4">Bermuda</option>
                                <option value="5">Canada</option>
                                <option value="6">Caribbean</option>
                                <option value="7">Europe</option>
                                <option value="8">Hawaii</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-4 col-md-2">
                          <div class="input1_wrapper">
                            <label>Start Date:</label>
                            <div class="input1_inner">
                              <input type="text" class="input datepicker" value="From any month">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                          <div class="input1_wrapper">
                            <label>End of Date:</label>
                            <div class="input1_inner">
                              <input type="text" class="input datepicker" value="To any month">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                          <div class="select1_wrapper">
                            <label>Cruise Ship:</label>
                            <div class="select1_inner">
                              <select class="select2 select" style="width: 100%">
                                <option value="1">All Ships</option>
                                <option value="2">Alaska</option>
                                <option value="3">Bahamas</option>
                                <option value="4">Bermuda</option>
                                <option value="5">Canada</option>
                                <option value="6">Caribbean</option>
                                <option value="7">Europe</option>
                                <option value="8">Hawaii</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                          <div class="button1_wrapper">
                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="row">
                      <div class="col-sm-3">
                        <form action="javascript:;" class="form2 form2_flights">
                          <div class="select1_wrapper clearfix">
                            <label>Passenger:</label>
                            <div class="select1_inner">
                              <select class="select2 select select3" style="width: 100%">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                              </select>
                            </div>
                          </div>
                        </form>

                        <ul class="ul3">
                          <li><a href="#">Star Raiting</a></li>
                          <li><a href="#">Price Range</a></li>
                          <li><a href="#">Departure Ports</a></li>
                          <li><a href="#">Trip Duration</a></li>
                          <li><a href="#">Ships</a></li>
                        </ul>

                        <div class="sm_slider sm_slider4">
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

                      </div>
                      <div class="col-sm-9">
                        <form action="javascript:;" class="form3 clearfix">
                          <div class="select1_wrapper txt">
                            <label>Sort by:</label>
                          </div>
                          <div class="select1_wrapper sel">
                            <div class="select1_inner">
                              <select class="select2 select" style="width: 100%">
                                <option value="1">Ships</option>
                                <option value="2">Ships2</option>
                                <option value="2">Ships3</option>
                              </select>
                            </div>
                          </div>
                          <div class="select1_wrapper sel">
                            <div class="select1_inner">
                              <select class="select2 select" style="width: 100%">
                                <option value="1">Duration</option>
                                <option value="2">Duration2</option>
                                <option value="2">Duration3</option>
                              </select>
                            </div>
                          </div>
                          <div class="select1_wrapper sel">
                            <div class="select1_inner">
                              <select class="select2 select" style="width: 100%">
                                <option value="1">Price</option>
                                <option value="2">Price2</option>
                                <option value="2">Price3</option>
                              </select>
                            </div>
                          </div>
                          <div class="select1_wrapper sel">
                            <div class="select1_inner">
                              <select class="select2 select" style="width: 100%">
                                <option value="1">Name</option>
                                <option value="2">Name2</option>
                                <option value="2">Name3</option>
                              </select>
                            </div>
                          </div>
                          <div class="select1_wrapper buttons">
                            <a href="#" class="btn-default s1"></a>
                            <a href="#" class="btn-default s2"></a>
                            <a href="#" class="btn-default s3"></a>
                          </div>
                        </form>

                        <div class="row">
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises01.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Bahamas <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">6 Days Bahamas</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$590.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises02.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Mediterranean <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">14 Days Mediterranean</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$999.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises03.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">5 Days Caribbean</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$360.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="hl1"></div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises04.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Greece <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">4 Days Greece</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$236.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises05.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Australia <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">9 Days Australia</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$990.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises06.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Mediterranean <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">12 Days Mediterranean</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$560.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="hl1"></div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises07.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">4 Day Caribbean</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$36.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises08.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">6 Day Caribbean</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$90.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="thumb6">
                              <div class="thumbnail clearfix">
                                <figure>
                                  <img src="https://demo.gridgum.com/templates/Travel-agency/images/cruises09.jpg" alt="" class="img-responsive">
                                  <div class="over">
                                    <div class="v1">Caribbean <span>17 Deal Offers</span></div>
                                    <div class="v2">Lorem ipsum dolor sit amet, concateus.</div>
                                  </div>
                                </figure>
                                <div class="caption">
                                  <div class="txt1">5 Day Caribbean</div>
                                  <div class="txt3 clearfix">
                                    <div class="left_side">
                                      <div class="price">$160.00</div>
                                      <div class="nums">per/Cabin</div>
                                    </div>
                                    <div class="right_side"><a href="#" class="btn-default btn1">Details</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="pager_wrapper">
                          <ul class="pager clearfix">
                            <li class="prev"><a href="#">Previous</a></li>
                            <li class="li"><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li class="li"><a href="#">3</a></li>
                            <li class="li"><a href="#">4</a></li>
                            <li class="li"><a href="#">5</a></li>
                            <li class="li"><a href="#">6</a></li>
                            <li class="li"><a href="#">7</a></li>
                            <li class="li"><a href="#">8</a></li>
                            <li class="li"><a href="#">9</a></li>
                            <li class="li"><a href="#">10</a></li>
                            <li class="next"><a href="#">Next</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
    <?php include('includes/footer.php'); ?>
    <?php include('includes/js.php'); ?>
    </div>
    <script>
      (function($) {
        "use strict";
        $.fn.sliderResponsive = function(settings) {
          
          var set = $.extend( 
            {
              slidePause: 5000,
              fadeSpeed: 800,
              autoPlay: "off",
              showArrows: "off", 
              hideDots: "off", 
              hoverZoom: "on",
              titleBarTop: "off"
            },
            settings
          ); 
          
          var $slider = $(this);
          var size = $slider.find("> div").length; //number of slides
          var position = 0; // current position of carousal
          var sliderIntervalID; // used to clear autoplay
            
          // Add a Dot for each slide
          $slider.append("<ul></ul>");
          $slider.find("> div").each(function(){
            $slider.find("> ul").append('<li></li>');
          });
            
          // Put .show on the first Slide
          $slider.find("div:first-of-type").addClass("show");
            
          // Put .showLi on the first dot
          $slider.find("li:first-of-type").addClass("showli")

           //fadeout all items except .show
          $slider.find("> div").not(".show").fadeOut();
          
          // If Autoplay is set to 'on' than start it
          if (set.autoPlay === "on") {
              startSlider(); 
          } 
          
          // If showarrows is set to 'on' then don't hide them
          if (set.showArrows === "on") {
              $slider.addClass('showArrows'); 
          }
          
          // If hideDots is set to 'on' then hide them
          if (set.hideDots === "on") {
              $slider.addClass('hideDots'); 
          }
          
          // If hoverZoom is set to 'off' then stop it
          if (set.hoverZoom === "off") {
              $slider.addClass('hoverZoomOff'); 
          }
          
          // If titleBarTop is set to 'on' then move it up
          if (set.titleBarTop === "on") {
              $slider.addClass('titleBarTop'); 
          }

          // function to start auto play
          function startSlider() {
            sliderIntervalID = setInterval(function() {
              nextSlide();
            }, set.slidePause);
          }
          
          // on mouseover stop the autoplay
          $slider.mouseover(function() {
            if (set.autoPlay === "on") {
              clearInterval(sliderIntervalID);
            }
          });
            
          // on mouseout starts the autoplay
          $slider.mouseout(function() {
            if (set.autoPlay === "on") {
              startSlider();
            }
          });

          //on right arrow click
          $slider.find("> .right").click(nextSlide)

          //on left arrow click
          $slider.find("> .left").click(prevSlide);
            
          // Go to next slide
          function nextSlide() {
            position = $slider.find(".show").index() + 1;
            if (position > size - 1) position = 0;
            changeCarousel(position);
          }
          
          // Go to previous slide
          function prevSlide() {
            position = $slider.find(".show").index() - 1;
            if (position < 0) position = size - 1;
            changeCarousel(position);
          }

          //when user clicks slider button
          $slider.find(" > ul > li").click(function() {
            position = $(this).index();
            changeCarousel($(this).index());
          });

          //this changes the image and button selection
          function changeCarousel() {
            $slider.find(".show").removeClass("show").fadeOut();
            $slider
              .find("> div")
              .eq(position)
              .fadeIn(set.fadeSpeed)
              .addClass("show");
            // The Dots
            $slider.find("> ul").find(".showli").removeClass("showli");
            $slider.find("> ul > li").eq(position).addClass("showli");
          }

          return $slider;
        };
      })(jQuery);


       
      //////////////////////////////////////////////
      // Activate each slider - change options
      //////////////////////////////////////////////
      $(document).ready(function() {
        
        $("#slider1").sliderResponsive({
        // Using default everything
          // slidePause: 5000,
          // fadeSpeed: 800,
          // autoPlay: "on",
          // showArrows: "off", 
          // hideDots: "off", 
          // hoverZoom: "on", 
          // titleBarTop: "off"
        });
        
        $("#slider2").sliderResponsive({
          fadeSpeed: 300,
          autoPlay: "off",
          showArrows: "on",
          hideDots: "on"
        });
        
        $("#slider3").sliderResponsive({
          hoverZoom: "off",
          hideDots: "on"
        });
        
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
    function toggle(ele) {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';

            document.getElementById(ele.id).value = '2 Guests in 1 Room';
        }
        else {
            cont.style.display = 'block';
            document.getElementById(ele.id).value = '2 Guests in 1 Room';
        }
    }
</script>
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
  </body>
</html>