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
    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"rel="stylesheet" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
      background: #3658a9;
    }
    .ui-slider-horizontal .ui-slider-range{
      background: #5972af;
    }
    .ui-slider-horizontal{ width:70%!important }

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
    input[type="text"] {
      width: 100%;
      border: 1px solid #aaa;
      border-radius: 4px;
      margin: 8px 0;
      outline: none;
      padding: 8px;
      box-sizing: border-box;
      transition: 0.3s;
    }

    input[type="text"]:focus {
      border-color: #d0d0d0;
    }
     .text{ color: #444!important;
    padding-left: 9px; }
    .moreoption {
    position: absolute;
    z-index: 4;
    top: 20px;
    width: 150px;
    max-height: 250px;
    /*overflow-y: scroll;*/
    -ms-overflow-style: none;
    left: 0;
    border: 1px solid #e2e2e2;
    background-color: #fff;
    font-size: 14px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    box-shadow: 0 2px 4px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    color: #000;
    color: var(--defaultText-color);
    list-style: none;
    padding-left: 0;
    }
    .moreoption--list {
        padding: 5px 10px;
        position: relative;
    }
    .moreoption--list--checkbox {
        float: right;
    }
    .moreoption--list:hover {
        background-color: #fff;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }
    .open:hover {
        opacity: 1;
    }
    .showBtn {
      cursor: pointer;
    }
    .hideme {
      display: none;  
    }
    .searchbox{ 
      color: #fff;
      font-size: .85em;
    }
    .slider-labels {
  margin-top: 10px;
}

/* Functional styling;
 * These styles are required for noUiSlider to function.
 * You don't need to change these rules to apply your design.
 */
.noUi-target,.noUi-target * {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -ms-touch-action: none;
  touch-action: none;
  -ms-user-select: none;
  -moz-user-select: none;
  user-select: none;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.noUi-target {
  position: relative;
  direction: ltr;
}

.noUi-base {
  width: 100%;
  height: 100%;
  position: relative;
  z-index: 1;
/* Fix 401 */
}

.noUi-origin {
  position: absolute;
  right: 0;
  top: 0;
  left: 0;
  bottom: 0;
}

.noUi-handle {
  position: relative;
  z-index: 1;
}

.noUi-stacking .noUi-handle {
/* This class is applied to the lower origin when
   its values is > 50%. */
  z-index: 10;
}

.noUi-state-tap .noUi-origin {
  -webkit-transition: left 0.3s,top .3s;
  transition: left 0.3s,top .3s;
}

.noUi-state-drag * {
  cursor: inherit !important;
}

/* Painting and performance;
 * Browsers can paint handles in their own layer.
 */
.noUi-base,.noUi-handle {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

/* Slider size and handle placement;
 */
.noUi-horizontal {
  height: 4px;
}

.noUi-horizontal .noUi-handle {
  width: 18px;
  height: 18px;
  border-radius: 50%;
  left: -7px;
  top: -7px;
  background-color: #345DBB;
}

/* Styling;
 */
.noUi-background {
  background: #D6D7D9;
}

.noUi-connect {
  background: #345DBB;
  -webkit-transition: background 450ms;
  transition: background 450ms;
}

.noUi-origin {
  border-radius: 2px;
}

.noUi-target {
  border-radius: 2px;
}

.noUi-target.noUi-connect {
}

/* Handles and cursors;
 */
.noUi-draggable {
  cursor: w-resize;
}

.noUi-vertical .noUi-draggable {
  cursor: n-resize;
}

.noUi-handle {
  cursor: default;
  -webkit-box-sizing: content-box !important;
  -moz-box-sizing: content-box !important;
  box-sizing: content-box !important;
}

.noUi-handle:active {
  border: 8px solid #345DBB;
  border: 8px solid rgba(53,93,187,0.38);
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  left: -14px;
  top: -14px;
}

/* Disabled state;
 */
[disabled].noUi-connect,[disabled] .noUi-connect {
  background: #B8B8B8;
}

[disabled].noUi-origin,[disabled] .noUi-handle {
  cursor: not-allowed;
}
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
          <form class="form-inline flight-flex" name="searchhotel" id="searchhotel" method="post" action="<?php echo base_url('hotels'); ?>">
            <div class="form-group" style="padding: 5px;">
              <label for="text" class="flight-label">Area, Landmark or Hotel Name</label><br>
              <input type="text" class="form-control ui-autocomplete-input" name="city" id="search_city" value="<?php echo $cityName;?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;" autocomplete="off">
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="date" class="flight-label">CheckIn</label><br>
              <input type="text" name="start-date" id="start-date" placeholder="Start date" value="<?php echo $checkindate; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;"/>
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="date" class="flight-label">Checkout</label><br>
              <input type="text" name="end-date" id="end-date" placeholder="End date"  value="<?php echo $checkoutdate; ?>"  style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;"/>
              <input type="hidden" name="bookingType" id="bookingType" value="R">
            </div>
            <div class="form-group" style="padding: 5px;">
              <label for="text" class="flight-label">Guest &amp; Rooms</label><br>
              <!--<input type="text" class="form-control" id="text" placeholder="Delhi" style="border-radius: 6px;background: #1958b6;border: #1958b6;">-->
              <input type="text" name="passenger" id="passenger" value="<?php echo $guestInfo; ?>" onclick="toggle(this)" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;" readonly="">
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
                   
                  </div>
                  <div class="col-md-6">
                    <div>
                      <button type="button" name="updateTraveller" id="updateTraveller" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 26px;margin-bottom: 0;height: 38px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right">DONE</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" name="searchFlight" id="searchFlight" value="yes" class="btn btn-default" style="top: 35px;position: relative;padding: 7px 25px;text-transform: uppercase;font-weight: 500;color: #244082;background: #fff;border-radius: 5px;height: 36px;">Update Search</button>


            <p style="top: 35px;position: relative;padding: 5px 25px;text-transform: capitalize;font-weight: 500;color: #244082;background: #908b8b;border-radius: 0px;height: 36px;margin-left:5px;border: 3px solid #908b8b;box-shadow: inset 0 0 0 1px white;">
              <a class="toggle" href="#example1" style="color:#fff;text-decoration:none">Modify Search</a>
            </p>       

          </form>
          <div class="toggle-content" id="example1" style="display:none;">
                  <div class="col-md-12" style="padding: 10px;">
              <div class="row">
                
                <div class="col-md-2">
                  <span style="font-size: 13px;color: #fff;">More Options:</span>
                  <span style="font-size: 13px;color:#fff" class="showBtn"> Rating <i class="fa fa-angle-down" style="float: right;line-height: 22px;"></i>
                    
                  </span>
                  <div class="hideme">
                    <div class="container">

                      <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                              <form>
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <ul class="moreoption">
                                      <li class="moreoption--list">5 Star
                                        <input type="checkbox" name ="rating[]" value="5" class="moreoption--list--checkbox" id="0" checked>
                                      </li>
                                      <li class="moreoption--list">4 Star
                                        <input type="checkbox" name ="rating[]" value="4" class="moreoption--list--checkbox" id="1" checked></li>
                                        <li class="moreoption--list">3 Star
                                          <input type="checkbox" name ="rating[]" value="3"  class="moreoption--list--checkbox" id="2" checked>
                                        </li>
                                        <li class="moreoption--list">2 Star
                                          <input type="checkbox" name ="rating[]" value="2" class="moreoption--list--checkbox" id="3">
                                        </li>
                                        <li class="moreoption--list">1 Star
                                          <input type="checkbox" name ="rating[]" value="1" class="moreoption--list--checkbox" id="4">
                                        </li>
                                      </ul>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  </div>
                </div>
                <div class="col-md-3" style="color: #fff;">
                  <span style="font-size: 13px;" class="showBtn">Select Nationality: India <i class="fa fa-angle-down" style="float: right;line-height: 22px;"></i></span>
                  <div class="hideme">
                    <div class="container">

                      <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                              <form>
                                <div class="form-group row">
                                  <!--<label for="" class="col-sm-2 form-control-label">Country</label>-->
                                  <div class="col-sm-10">
                                    <select class="form-control selectpicker" name="nationality" id="select_country" data-live-search="true">
                                      <option data-tokens="india">India</option>                                             
                                    </select>

                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  </div>
                </div>
                <div class="col-md-3" style="color: #fff;">
                  <input type="checkbox" name="special_category" id="special_category"  checked style="height: 15px;"> <span style="font-size: 14px;color: #fff;padding-right: 15px;">Special Category</span>
                </div>
              </div>
              
            </div>
              </div>
        </div>
      </div>
          
      <?php //echo '<pre>'; print_r($hotelList); ?>

      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <aside class="detail-sidebar sidebar-wrapper">
              <div class="sidebar-item">
                <!--<div class="detail-title">
                  <h3>Deals</h3>
                </div>-->
                <div class="sidebar-content">
                  <div class="inputWithIcon">
                    <input type="text" placeholder="Search by Hotel name">
                    <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                  </div>
                  <div class="inputWithIcon">
                    <input type="text" placeholder="Search by Location">
                    <i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i>
                  </div>

                  <!--<p>
                    <label for="amount">Price range:</label>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                  </p>
                   
                  <div id="slider-range" style="width: 150px; margin: 0 auto;"></div>-->

                  <!--<form>
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
                  </form>-->
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Price</h3>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div id="slider-range"></div>
                    </div>
                  </div>
                  <div class="row slider-labels">
                    <div class="col-xs-4 caption">
                      <strong style="font-size:14px;font-weight:500;">Min:</strong> <span id="slider-range-value1"></span>
                    </div>
                    <div class="col-xs-4 text-right caption">
                      <strong style="font-size:14px;font-weight:500;">Max:</strong> <span id="slider-range-value2"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <form>
                        <input type="hidden" name="min-value" value="">
                        <input type="hidden" name="max-value" value="">
                      </form>
                    </div>
                  </div>
                </div>


                <div class="sidebar-content content" style="padding-top: 0;padding-left: 0;">
                  <p>
                    <!--<label for="amount">Price range:</label>-->
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:500;padding: 0!important;margin: 0!important;height: auto;">
                  </p>
                   
                  <div id="slider-range" style="width: 150px; margin: 0 auto;"></div>
                 <!-- <form>
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
                  </form>-->
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Star Rating</h3>
                </div>
                <div class="sidebar-content">
                  <p class="starrating">
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span class="starrating__value"> </span>
                    <span class="starrating__check" style="right:5px;">
                      <span class="checkmark">
                        <input type="checkbox" id="5_id" name="5" class="checkmark__input" value="5"><label for="5_id" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </p>
                  <p class="starrating">
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span class="starrating__value"> </span>
                    <span class="starrating__check" style="right:5px;">
                      <span class="checkmark">
                        <input type="checkbox" id="5_id" name="5" class="checkmark__input" value="5"><label for="5_id" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </p>
                  <p class="starrating">
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span class="starrating__value"> </span>
                    <span class="starrating__check" style="right:5px;">
                      <span class="checkmark">
                        <input type="checkbox" id="5_id" name="5" class="checkmark__input" value="5"><label for="5_id" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </p>
                  <p class="starrating">
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span>
                    <span class="starrating__value"> </span>
                    <span class="starrating__check" style="right:5px;">
                      <span class="checkmark">
                        <input type="checkbox" id="5_id" name="5" class="checkmark__input" value="5" disabled=""><label for="5_id" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </p>
                  <p class="starrating">
                    <span>
                      <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                    </span>
                    <span class="starrating__value"> </span>
                    <span class="starrating__check" style="right:5px;">
                      <span class="checkmark">
                        <input type="checkbox" id="5_id" name="5" class="checkmark__input" value="5" disabled=""><label for="5_id" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </p>
                  <p class="starrating">
                    <span>No Rating</span>
                    <span class="starrating__value"> </span>
                    <span class="starrating__check" style="right:5px;">
                      <span class="checkmark">
                        <input type="checkbox" id="0_id" name="0" class="checkmark__input" disabled="" value="0"><label for="0_id" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </p>
                  <p class="starrating">
                    <span>Special Category</span>
                    <span class="starrating__value"> </span>
                    <span class="starrating__check" style="right:5px;">
                      <span class="checkmark">
                        <input type="checkbox" id="sc_id" name="sc" class="checkmark__input" value="sc"><label for="sc_id" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </p>
                  <!--<form>
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
                  </form>-->
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Meal Basis</h3>
                </div>
                <div class="sidebar-content">
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Room Only (1214)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Breakfast (890)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Half Board (90)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Full Board (50)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> All Meals (11)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <!--<form>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Room Only(1214)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Breakfast(890) 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Half Board(80) 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Full Board(10)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">All Meals(12)
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Rewari
                      </label>
                    </div>
                  </form>-->
                </div>
              </div>

              <div class="sidebar-item">
                <div class="detail-title">
                  <h3>Property Type</h3>
                </div>
                <div class="sidebar-content">
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Hotel (1336)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Hostel (11)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Guest House (1)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Villa (18)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Homestay (3)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Resort (11)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <div class="mealBasis__filter">
                    <span class="mealBasis__value"> Appartments (5)</span>
                    <span class="starrating__check">
                      <span class="checkmark">
                        <input type="checkbox" id="room only" name="room only" class="checkmark__input" value="room only">
                        <label for="room only" class="checkmark__label"> </label>
                      </span>
                    </span>
                  </div>
                  <!--<form>
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
                  </form>-->
                </div>
              </div>
             <!-- <div class="sidebar-item">
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

              <!--  </ul>
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
              </div>-->

              
            </aside>
          </div>
         


         <!--<ul class="quickfilter">
          <li class="quickfilter__list">Sort By</li>
          <li class="quickfilter__list">
            <div class="quickfilter__list__item" data-id="starRating">
              <span class="arrow arrow-down"></span>
              <span class="arrow"></span>Rating
            </div>
          </li>
          <li class="quickfilter__list">
            <div class="quickfilter__list__item" data-id="prefHotel">
              <span class="arrow arrow-down"></span>
              <span class="arrow"></span>Preferred
            </div>
          </li>
          <li class="quickfilter__list">
            <div class="quickfilter__list__item" data-id="locationFilter"></div>
          </li>
          <li class="quickfilter__list">
            <div class="quickfilter__list__item quickfilter__list__item--selected" data-id="price">
              <span class="arrow arrow-down"></span>Price
            </div>
          </li>
        </ul>-->

          <div class="col-sm-9">
            <div style="position:sticky;top:123px;z-index: 2;background: #fff;">
          <span style="font-weight: 500;font-size: 14px;padding-top: 5px;padding-bottom: 5px;margin:15px;margin-top:30px;margin-bottom:30px;"> Found <?php echo count($hotelList); ?> hotels for <?php echo $cityName; ?></span>


         <ul style="list-style:none;display: flex;padding-top:2px;padding-bottom: 2px;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">
          <li style="flex:1;font-size:12px;">Sort By</li>
          <li style="flex:1;font-size:12px;">Rating <i class="fa fa-caret-down" id="rotate" aria-hidden="true"></i><!--<i class="fa fa-caret-up" aria-hidden="true"></i>--></li>
          <li style="flex:1;font-size:12px;">Preffered <i class="fa fa-caret-down" id="rotate1" aria-hidden="true"></i><!--<i class="fa fa-caret-up" aria-hidden="true"></i>--></li>
          <li style="flex:1;font-size:12px;">Price <i class="fa fa-caret-down" id="rotate2" aria-hidden="true"></i><!--<i class="fa fa-caret-up" aria-hidden="true"></i>--></li>
         </ul>
         </div>
            <div class="row">
              <?php 
               // echo '<pre>'; print_r($hotelList); 
              foreach($hotelList as $key => $hotelValue){ 
                  //echo '<pre>'; print_r($hotelValue); 
                ?>
              <div class="col-sm-12"> 
                <section class="popular-packages package-inner pad-bottom-80">
                  <div class="">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="room-main">
                          <div class="room-item mar-bottom-30">
                            <div class="row">
                              <div class="col-lg-3">
                                <!-- <span class="featured-hotel b ng-binding ng-scope" ng-if="hotel.showFeaturedHotel || hotel.sT">Featured</span> -->
                                <div class="row2Wrap">

                                  <!-- Slider 1 -->
                                  <div class="slider" id="slider3">
                                    <div style="background-image:url(<?php echo $hotelValue['img'][0]['tns']; ?>)">
                                        <!--<span>
                                          <h2>Title 1</h2>
                                      </span>-->
                                    </div>
                                    <!-- <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_110627-8240-Myst.jpg)">
                                       
                                    </div>
                                    <div style="background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/30256/1200_bodie-11.jpg)">
                                     
                                    </div> -->
                                    <!-- The Arrows -->
                                    <i class="left" class="arrows" style="z-index:2; position:absolute;display: none;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                    <i class="right" class="arrows" style="z-index:2; position:absolute;display: none;">
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
                                      <h3><a href="#"><?php echo $hotelValue['name']; ?></a></h3>
                                  <div class="deal-rating" style="margin-bottom: 0px;">
                                  <?php if($hotelValue['rt'] == 1){ ?> 
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                  <?php }elseif($hotelValue['rt'] == 2){ ?>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                    <?php }elseif($hotelValue['rt'] == 3){ ?>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                      <span class="fa fa-star-o"></span>
                                    <?php }elseif($hotelValue['rt'] == 4){ ?>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star-o"></span>
                                    <?php }elseif($hotelValue['rt'] == 5){ ?>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                    <?php } ?>
                                  </div>
                                  <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                    <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                    </path>
                                    </svg>
                                    <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                      <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                        <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span><?php echo $hotelValue['ad']['adr']; ?>, <?php echo $hotelValue['ad']['city']['name']; ?>, <?php echo $hotelValue['ad']['country']['name']; ?> </span></div>
                                      </span>
                                    </span>
                                  </div>
                                  <!-- <ul class="full hotel-amenities hotel-amenities-height-auto">
                                    
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
                                      <img src="<?php //echo base_url('assets/images/swimming-pool.png')?>" style="width: 18px;border: 1px solid #b3b3b3;padding: 1px;border-radius: 3px;">
                                      <i class="ytfi-SWMP fs-14"></i>
                                      <span class="ng-binding">Swimming pool</span>

                                    </li>
                                  </ul> -->
                                    <!-- <div class="tooltip-container">
                                      <img src="<?php //echo base_url('assets/images/pass.png')?>" style="width: 60px;">
                                      <div class="tooltip-content" style="top: -50px;">
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
                                            <!--</ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div> -->
                                    <!-- <div class="result-footer clearfix">
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
                                </div> -->
                                
                                   <!-- <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                </div>
                                  
                              
                              <div class="col-md-4">
                                <div class="fw-btns">
                                  <!-- <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
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
                                  </ul> -->
                                  <div class="tooltip-container">
                                    <div class="fw-price">
                                      <!-- <p>
                                        <span style="font-size: 15px;color:#ddd;"><del><i class="fa fa-inr"></i>750</del></span>
                                        </p> -->
                                        <p><b>Starts From</b></p>
                                        <p> 
                                          <!-- <span class="bold"><i class="fa fa-inr"></i>659</span> -->
                                          <span style="font-size: 20px;"><i class="fa fa-inr"></i><?php echo $hotelValue['pops'][0]['tpc']; ?></span>
                                        </p>
                                        <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope" style="width:100%;margin-bottom: 0px;">
                                          <li><span class="price-night fs-11 ng-binding" style="font-weight: 500;"><?php echo $hotelValue['pops'][0]['fc'][0]; ?></span></li>
                                        </ul>
                                        <p style="margin-bottom: 5px;"><?php echo $nights; ?> Night (s)</p>
                                    </div>
                                    <!-- <div class="tooltip-content">
                                      <ul class="pad-0">
                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                        <li class="tooltip-p lne-hgt">
                                          <ul class="df-padd">
                                            <li class="lne-hgt">Adult Base Fare</li>
                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;18282</li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </div> -->
                                  </div>
                                  <!--<ul class="price-value-holder txt-ar full srp-pah-theme ng-scope">
                                    <li><span class="price-night fs-11 ng-binding"><?php echo $hotelValue['pops'][0]['fc'][0]; ?></span></li>
                                  </ul>-->
                                  
                                  <a href="<?php echo base_url('hotels/booking_hotels/')?><?php echo $hotelValue['id']; ?>" class="btn btn-red btn-clr" tabindex="0" target="_blank">Select Room</a>
                                </div>
                              </div>
                            </div></div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <?php } ?>
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


$( "#search_city" ).autocomplete({
  source: function( request, response ) {
    // Fetch data
    $.ajax({
      url: "<?php echo base_url('hotels/getCityBySearch')?>",
      type: 'post',
      dataType: "json",
      data: {
        search: request.term
      },
      success: function( data ) {
        console.log(data);
        
        response( data );
      }
    });
  },
  select: function (event, ui) {
    $('#search_city').val(ui.item.label); // display the selected text
    $('#search_city').val(ui.item.value); // save selected id to input
    return false;
  }
});

</script>
<script>

 
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 200,
      max: 1000,
      step: 100
      ,
      values: [ 0, 1000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "£" + ui.values[ 0 ] + " to £" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "below £" + $( "#slider-range" ).slider( "values", 0 ) +
      " to + £" + $( "#slider-range" ).slider( "values", 1 ) );
  });
</script>
<script>
  $("#rotate").click(function () {
    $(this).toggleClass("down");
})
</script>
<script>
  $("#rotate1").click(function () {
    $(this).toggleClass("down");
})
</script>
<script>
  $("#rotate2").click(function () {
    $(this).toggleClass("down");
})
</script>
<script>
    $('.showBtn').click(function() {
      //$('.hideme').hide();  
      if ($(this).hasClass('active')) {    
        $(this).removeClass('active');
        $('.hideme').slideUp();
      } else {
        $('.hideme').slideUp();
        $('.showBtn').removeClass('active');
        $(this).addClass('active');
        $(this).next().filter('.hideme').slideDown();
      }
    });
  </script>

  <script>
    var x, i, j, l, ll, selElmnt, a, b, c;
      /*look for any elements with the class "newselectbox":*/
      x = document.getElementsByClassName("newselectbox");
      l = x.length;
      for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
          /*for each option in the original select element,
          create a new DIV that will act as an option item:*/
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
              /*when an item is clicked, update the original select box,
              and the selected item:*/
              var y, i, k, s, h, sl, yl;
              s = this.parentNode.parentNode.getElementsByTagName("select")[0];
              sl = s.length;
              h = this.parentNode.previousSibling;
              for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                  s.selectedIndex = i;
                  h.innerHTML = this.innerHTML;
                  y = this.parentNode.getElementsByClassName("same-as-selected");
                  yl = y.length;
                  for (k = 0; k < yl; k++) {
                    y[k].removeAttribute("class");
                  }
                  this.setAttribute("class", "same-as-selected");
                  break;
                }
              }
              h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
          });
      }
      function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i)
          } else {
            y[i].classList.remove("select-arrow-active");
          }
        }
        for (i = 0; i < xl; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
          }
        }
      }
      /*if the user clicks anywhere outside the select box,
      then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);



  </script>
  <script>
  $(function() {
    $('.selectpicker').selectpicker();
  });
</script>
<script>
  $(".header").click(function () {

    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $header.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "Collapse" : "Expand";
        });
    });

});
</script>
<script>
var show=function(t){t.style.display="block"},hide=function(t){t.style.display="none"},toggle=function(t){"block"!==window.getComputedStyle(t).display?show(t):hide(t)};document.addEventListener("click",function(t){if(t.target.classList.contains("toggle")){t.preventDefault();var e=document.querySelector(t.target.hash);e&&toggle(e)}},!1);
</script>

<script>
  // Requires jQuery

// Initialize slider:
$(document).ready(function() {
  $('.noUi-handle').on('click', function() {
    $(this).width(50);
  });
  var rangeSlider = document.getElementById('slider-range');
  var moneyFormat = wNumb({
    decimals: 0,
    thousand: ',',
    prefix: '$'
  });
  noUiSlider.create(rangeSlider, {
    start: [500000, 1000000],
    step: 1,
    range: {
      'min': [100000],
      'max': [1000000]
    },
    format: moneyFormat,
    connect: true
  });
  
  // Set visual min and max values and also update value hidden form inputs
  rangeSlider.noUiSlider.on('update', function(values, handle) {
    document.getElementById('slider-range-value1').innerHTML = values[0];
    document.getElementById('slider-range-value2').innerHTML = values[1];
    document.getElementsByName('min-value').value = moneyFormat.from(
      values[0]);
    document.getElementsByName('max-value').value = moneyFormat.from(
      values[1]);
  });
});



// https://refreshless.com/nouislider/
/*! nouislider - 8.3.0 - 2016-02-14 17:37:19 */
(function(factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define([], factory);
  } else if (typeof exports === 'object') {
    // Node/CommonJS
    module.exports = factory();
  } else {
    // Browser globals
    window.noUiSlider = factory();
  }
}(function() {
  'use strict';
  // Removes duplicates from an array.
  function unique(array) {
      return array.filter(function(a) {
        return !this[a] ? this[a] = true : false;
      }, {});
    }
    // Round a value to the closest 'to'.

  function closest(value, to) {
      return Math.round(value / to) * to;
    }
    // Current position of an element relative to the document.

  function offset(elem) {
      var rect = elem.getBoundingClientRect(),
        doc = elem.ownerDocument,
        docElem = doc.documentElement,
        pageOffset = getPageOffset();
      // getBoundingClientRect contains left scroll in Chrome on Android.
      // I haven't found a feature detection that proves this. Worst case
      // scenario on mis-match: the 'tap' feature on horizontal sliders breaks.
      if (/webkit.*Chrome.*Mobile/i.test(navigator.userAgent)) {
        pageOffset.x = 0;
      }
      return {
        top: rect.top + pageOffset.y - docElem.clientTop,
        left: rect.left + pageOffset.x - docElem.clientLeft
      };
    }
    // Checks whether a value is numerical.

  function isNumeric(a) {
      return typeof a === 'number' && !isNaN(a) && isFinite(a);
    }
    // Rounds a number to 7 supported decimals.

  function accurateNumber(number) {
      var p = Math.pow(10, 7);
      return Number((Math.round(number * p) / p).toFixed(7));
    }
    // Sets a class and removes it after [duration] ms.

  function addClassFor(element, className, duration) {
      addClass(element, className);
      setTimeout(function() {
        removeClass(element, className);
      }, duration);
    }
    // Limits a value to 0 - 100

  function limit(a) {
      return Math.max(Math.min(a, 100), 0);
    }
    // Wraps a variable as an array, if it isn't one yet.

  function asArray(a) {
      return Array.isArray(a) ? a : [a];
    }
    // Counts decimals

  function countDecimals(numStr) {
      var pieces = numStr.split(".");
      return pieces.length > 1 ? pieces[1].length : 0;
    }
    // http://youmightnotneedjquery.com/#add_class

  function addClass(el, className) {
      if (el.classList) {
        el.classList.add(className);
      } else {
        el.className += ' ' + className;
      }
    }
    // http://youmightnotneedjquery.com/#remove_class

  function removeClass(el, className) {
      if (el.classList) {
        el.classList.remove(className);
      } else {
        el.className = el.className.replace(new RegExp('(^|\\b)' +
          className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
      }
    }
    // https://plainjs.com/javascript/attributes/adding-removing-and-testing-for-classes-9/

  function hasClass(el, className) {
      return el.classList ? el.classList.contains(className) : new RegExp(
        '\\b' + className + '\\b').test(el.className);
    }
    // https://developer.mozilla.org/en-US/docs/Web/API/Window/scrollY#Notes

  function getPageOffset() {
      var supportPageOffset = window.pageXOffset !== undefined,
        isCSS1Compat = ((document.compatMode || "") === "CSS1Compat"),
        x = supportPageOffset ? window.pageXOffset : isCSS1Compat ?
        document.documentElement.scrollLeft : document.body.scrollLeft,
        y = supportPageOffset ? window.pageYOffset : isCSS1Compat ?
        document.documentElement.scrollTop : document.body.scrollTop;
      return {
        x: x,
        y: y
      };
    }
    // Shorthand for stopPropagation so we don't have to create a dynamic method

  function stopPropagation(e) {
      e.stopPropagation();
    }
    // todo

  function addCssPrefix(cssPrefix) {
    return function(className) {
      return cssPrefix + className;
    };
  }
  var
  // Determine the events to bind. IE11 implements pointerEvents without
  // a prefix, which breaks compatibility with the IE10 implementation.
  /** @const */
    actions = window.navigator.pointerEnabled ? {
      start: 'pointerdown',
      move: 'pointermove',
      end: 'pointerup'
    } : window.navigator.msPointerEnabled ? {
      start: 'MSPointerDown',
      move: 'MSPointerMove',
      end: 'MSPointerUp'
    } : {
      start: 'mousedown touchstart',
      move: 'mousemove touchmove',
      end: 'mouseup touchend'
    },
    defaultCssPrefix = 'noUi-';
  // Value calculation
  // Determine the size of a sub-range in relation to a full range.
  function subRangeRatio(pa, pb) {
      return (100 / (pb - pa));
    }
    // (percentage) How many percent is this value of this range?

  function fromPercentage(range, value) {
      return (value * 100) / (range[1] - range[0]);
    }
    // (percentage) Where is this value on this range?

  function toPercentage(range, value) {
      return fromPercentage(range, range[0] < 0 ? value + Math.abs(range[0]) :
        value - range[0]);
    }
    // (value) How much is this percentage on this range?

  function isPercentage(range, value) {
      return ((value * (range[1] - range[0])) / 100) + range[0];
    }
    // Range conversion

  function getJ(value, arr) {
      var j = 1;
      while (value >= arr[j]) {
        j += 1;
      }
      return j;
    }
    // (percentage) Input a value, find where, on a scale of 0-100, it applies.

  function toStepping(xVal, xPct, value) {
      if (value >= xVal.slice(-1)[0]) {
        return 100;
      }
      var j = getJ(value, xVal),
        va, vb, pa, pb;
      va = xVal[j - 1];
      vb = xVal[j];
      pa = xPct[j - 1];
      pb = xPct[j];
      return pa + (toPercentage([va, vb], value) / subRangeRatio(pa, pb));
    }
    // (value) Input a percentage, find where it is on the specified range.

  function fromStepping(xVal, xPct, value) {
      // There is no range group that fits 100
      if (value >= 100) {
        return xVal.slice(-1)[0];
      }
      var j = getJ(value, xPct),
        va, vb, pa, pb;
      va = xVal[j - 1];
      vb = xVal[j];
      pa = xPct[j - 1];
      pb = xPct[j];
      return isPercentage([va, vb], (value - pa) * subRangeRatio(pa, pb));
    }
    // (percentage) Get the step that applies at a certain value.

  function getStep(xPct, xSteps, snap, value) {
      if (value === 100) {
        return value;
      }
      var j = getJ(value, xPct),
        a, b;
      // If 'snap' is set, steps are used as fixed points on the slider.
      if (snap) {
        a = xPct[j - 1];
        b = xPct[j];
        // Find the closest position, a or b.
        if ((value - a) > ((b - a) / 2)) {
          return b;
        }
        return a;
      }
      if (!xSteps[j - 1]) {
        return value;
      }
      return xPct[j - 1] + closest(value - xPct[j - 1], xSteps[j - 1]);
    }
    // Entry parsing

  function handleEntryPoint(index, value, that) {
    var percentage;
    // Wrap numerical input in an array.
    if (typeof value === "number") {
      value = [value];
    }
    // Reject any invalid input, by testing whether value is an array.
    if (Object.prototype.toString.call(value) !== '[object Array]') {
      throw new Error("noUiSlider: 'range' contains invalid value.");
    }
    // Covert min/max syntax to 0 and 100.
    if (index === 'min') {
      percentage = 0;
    } else if (index === 'max') {
      percentage = 100;
    } else {
      percentage = parseFloat(index);
    }
    // Check for correct input.
    if (!isNumeric(percentage) || !isNumeric(value[0])) {
      throw new Error("noUiSlider: 'range' value isn't numeric.");
    }
    // Store values.
    that.xPct.push(percentage);
    that.xVal.push(value[0]);
    // NaN will evaluate to false too, but to keep
    // logging clear, set step explicitly. Make sure
    // not to override the 'step' setting with false.
    if (!percentage) {
      if (!isNaN(value[1])) {
        that.xSteps[0] = value[1];
      }
    } else {
      that.xSteps.push(isNaN(value[1]) ? false : value[1]);
    }
  }

  function handleStepPoint(i, n, that) {
      // Ignore 'false' stepping.
      if (!n) {
        return true;
      }
      // Factor to range ratio
      that.xSteps[i] = fromPercentage([
        that.xVal[i], that.xVal[i + 1]
      ], n) / subRangeRatio(that.xPct[i], that.xPct[i + 1]);
    }
    // Interface
    // The interface to Spectrum handles all direction-based
    // conversions, so the above values are unaware.

  function Spectrum(entry, snap, direction, singleStep) {
    this.xPct = [];
    this.xVal = [];
    this.xSteps = [singleStep || false];
    this.xNumSteps = [false];
    this.snap = snap;
    this.direction = direction;
    var index, ordered = [ /* [0, 'min'], [1, '50%'], [2, 'max'] */ ];
    // Map the object keys to an array.
    for (index in entry) {
      if (entry.hasOwnProperty(index)) {
        ordered.push([entry[index], index]);
      }
    }
    // Sort all entries by value (numeric sort).
    if (ordered.length && typeof ordered[0][0] === "object") {
      ordered.sort(function(a, b) {
        return a[0][0] - b[0][0];
      });
    } else {
      ordered.sort(function(a, b) {
        return a[0] - b[0];
      });
    }
    // Convert all entries to subranges.
    for (index = 0; index < ordered.length; index++) {
      handleEntryPoint(ordered[index][1], ordered[index][0], this);
    }
    // Store the actual step values.
    // xSteps is sorted in the same order as xPct and xVal.
    this.xNumSteps = this.xSteps.slice(0);
    // Convert all numeric steps to the percentage of the subrange they represent.
    for (index = 0; index < this.xNumSteps.length; index++) {
      handleStepPoint(index, this.xNumSteps[index], this);
    }
  }
  Spectrum.prototype.getMargin = function(value) {
    return this.xPct.length === 2 ? fromPercentage(this.xVal, value) :
      false;
  };
  Spectrum.prototype.toStepping = function(value) {
    value = toStepping(this.xVal, this.xPct, value);
    // Invert the value if this is a right-to-left slider.
    if (this.direction) {
      value = 100 - value;
    }
    return value;
  };
  Spectrum.prototype.fromStepping = function(value) {
    // Invert the value if this is a right-to-left slider.
    if (this.direction) {
      value = 100 - value;
    }
    return accurateNumber(fromStepping(this.xVal, this.xPct, value));
  };
  Spectrum.prototype.getStep = function(value) {
    // Find the proper step for rtl sliders by search in inverse direction.
    // Fixes issue #262.
    if (this.direction) {
      value = 100 - value;
    }
    value = getStep(this.xPct, this.xSteps, this.snap, value);
    if (this.direction) {
      value = 100 - value;
    }
    return value;
  };
  Spectrum.prototype.getApplicableStep = function(value) {
    // If the value is 100%, return the negative step twice.
    var j = getJ(value, this.xPct),
      offset = value === 100 ? 2 : 1;
    return [this.xNumSteps[j - 2], this.xVal[j - offset], this.xNumSteps[
      j - offset]];
  };
  // Outside testing
  Spectrum.prototype.convert = function(value) {
    return this.getStep(this.toStepping(value));
  };
  /*  Every input option is tested and parsed. This'll prevent
  endless validation in internal methods. These tests are
  structured with an item for every option available. An
  option can be marked as required by setting the 'r' flag.
  The testing function is provided with three arguments:
    - The provided value for the option;
    - A reference to the options object;
    - The name for the option;

  The testing function returns false when an error is detected,
  or true when everything is OK. It can also modify the option
  object, to make sure all values can be correctly looped elsewhere. */
  var defaultFormatter = {
    'to': function(value) {
      return value !== undefined && value.toFixed(2);
    },
    'from': Number
  };

  function testStep(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'step' is not numeric.");
    }
    // The step option can still be used to set stepping
    // for linear sliders. Overwritten if set in 'range'.
    parsed.singleStep = entry;
  }

  function testRange(parsed, entry) {
    // Filter incorrect input.
    if (typeof entry !== 'object' || Array.isArray(entry)) {
      throw new Error("noUiSlider: 'range' is not an object.");
    }
    // Catch missing start or end.
    if (entry.min === undefined || entry.max === undefined) {
      throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
    }
    // Catch equal start or end.
    if (entry.min === entry.max) {
      throw new Error(
        "noUiSlider: 'range' 'min' and 'max' cannot be equal.");
    }
    parsed.spectrum = new Spectrum(entry, parsed.snap, parsed.dir, parsed
      .singleStep);
  }

  function testStart(parsed, entry) {
    entry = asArray(entry);
    // Validate input. Values aren't tested, as the public .val method
    // will always provide a valid location.
    if (!Array.isArray(entry) || !entry.length || entry.length > 2) {
      throw new Error("noUiSlider: 'start' option is incorrect.");
    }
    // Store the number of handles.
    parsed.handles = entry.length;
    // When the slider is initialized, the .val method will
    // be called with the start options.
    parsed.start = entry;
  }

  function testSnap(parsed, entry) {
    // Enforce 100% stepping within subranges.
    parsed.snap = entry;
    if (typeof entry !== 'boolean') {
      throw new Error("noUiSlider: 'snap' option must be a boolean.");
    }
  }

  function testAnimate(parsed, entry) {
    // Enforce 100% stepping within subranges.
    parsed.animate = entry;
    if (typeof entry !== 'boolean') {
      throw new Error("noUiSlider: 'animate' option must be a boolean.");
    }
  }

  function testConnect(parsed, entry) {
    if (entry === 'lower' && parsed.handles === 1) {
      parsed.connect = 1;
    } else if (entry === 'upper' && parsed.handles === 1) {
      parsed.connect = 2;
    } else if (entry === true && parsed.handles === 2) {
      parsed.connect = 3;
    } else if (entry === false) {
      parsed.connect = 0;
    } else {
      throw new Error(
        "noUiSlider: 'connect' option doesn't match handle count.");
    }
  }

  function testOrientation(parsed, entry) {
    // Set orientation to an a numerical value for easy
    // array selection.
    switch (entry) {
      case 'horizontal':
        parsed.ort = 0;
        break;
      case 'vertical':
        parsed.ort = 1;
        break;
      default:
        throw new Error("noUiSlider: 'orientation' option is invalid.");
    }
  }

  function testMargin(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'margin' option must be numeric.");
    }
    // Issue #582
    if (entry === 0) {
      return;
    }
    parsed.margin = parsed.spectrum.getMargin(entry);
    if (!parsed.margin) {
      throw new Error(
        "noUiSlider: 'margin' option is only supported on linear sliders."
      );
    }
  }

  function testLimit(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'limit' option must be numeric.");
    }
    parsed.limit = parsed.spectrum.getMargin(entry);
    if (!parsed.limit) {
      throw new Error(
        "noUiSlider: 'limit' option is only supported on linear sliders."
      );
    }
  }

  function testDirection(parsed, entry) {
    // Set direction as a numerical value for easy parsing.
    // Invert connection for RTL sliders, so that the proper
    // handles get the connect/background classes.
    switch (entry) {
      case 'ltr':
        parsed.dir = 0;
        break;
      case 'rtl':
        parsed.dir = 1;
        parsed.connect = [0, 2, 1, 3][parsed.connect];
        break;
      default:
        throw new Error(
          "noUiSlider: 'direction' option was not recognized.");
    }
  }

  function testBehaviour(parsed, entry) {
    // Make sure the input is a string.
    if (typeof entry !== 'string') {
      throw new Error(
        "noUiSlider: 'behaviour' must be a string containing options.");
    }
    // Check if the string contains any keywords.
    // None are required.
    var tap = entry.indexOf('tap') >= 0,
      drag = entry.indexOf('drag') >= 0,
      fixed = entry.indexOf('fixed') >= 0,
      snap = entry.indexOf('snap') >= 0,
      hover = entry.indexOf('hover') >= 0;
    // Fix #472
    if (drag && !parsed.connect) {
      throw new Error(
        "noUiSlider: 'drag' behaviour must be used with 'connect': true."
      );
    }
    parsed.events = {
      tap: tap || snap,
      drag: drag,
      fixed: fixed,
      snap: snap,
      hover: hover
    };
  }

  function testTooltips(parsed, entry) {
    var i;
    if (entry === false) {
      return;
    } else if (entry === true) {
      parsed.tooltips = [];
      for (i = 0; i < parsed.handles; i++) {
        parsed.tooltips.push(true);
      }
    } else {
      parsed.tooltips = asArray(entry);
      if (parsed.tooltips.length !== parsed.handles) {
        throw new Error(
          "noUiSlider: must pass a formatter for all handles.");
      }
      parsed.tooltips.forEach(function(formatter) {
        if (typeof formatter !== 'boolean' && (typeof formatter !==
          'object' || typeof formatter.to !== 'function')) {
          throw new Error(
            "noUiSlider: 'tooltips' must be passed a formatter or 'false'."
          );
        }
      });
    }
  }

  function testFormat(parsed, entry) {
    parsed.format = entry;
    // Any object with a to and from method is supported.
    if (typeof entry.to === 'function' && typeof entry.from ===
      'function') {
      return true;
    }
    throw new Error(
      "noUiSlider: 'format' requires 'to' and 'from' methods.");
  }

  function testCssPrefix(parsed, entry) {
      if (entry !== undefined && typeof entry !== 'string') {
        throw new Error("noUiSlider: 'cssPrefix' must be a string.");
      }
      parsed.cssPrefix = entry;
    }
    // Test all developer settings and parse to assumption-safe values.

  function testOptions(options) {
    // To prove a fix for #537, freeze options here.
    // If the object is modified, an error will be thrown.
    // Object.freeze(options);
    var parsed = {
        margin: 0,
        limit: 0,
        animate: true,
        format: defaultFormatter
      },
      tests;
    // Tests are executed in the order they are presented here.
    tests = {
      'step': {
        r: false,
        t: testStep
      },
      'start': {
        r: true,
        t: testStart
      },
      'connect': {
        r: true,
        t: testConnect
      },
      'direction': {
        r: true,
        t: testDirection
      },
      'snap': {
        r: false,
        t: testSnap
      },
      'animate': {
        r: false,
        t: testAnimate
      },
      'range': {
        r: true,
        t: testRange
      },
      'orientation': {
        r: false,
        t: testOrientation
      },
      'margin': {
        r: false,
        t: testMargin
      },
      'limit': {
        r: false,
        t: testLimit
      },
      'behaviour': {
        r: true,
        t: testBehaviour
      },
      'format': {
        r: false,
        t: testFormat
      },
      'tooltips': {
        r: false,
        t: testTooltips
      },
      'cssPrefix': {
        r: false,
        t: testCssPrefix
      }
    };
    var defaults = {
      'connect': false,
      'direction': 'ltr',
      'behaviour': 'tap',
      'orientation': 'horizontal'
    };
    // Run all options through a testing mechanism to ensure correct
    // input. It should be noted that options might get modified to
    // be handled properly. E.g. wrapping integers in arrays.
    Object.keys(tests).forEach(function(name) {
      // If the option isn't set, but it is required, throw an error.
      if (options[name] === undefined && defaults[name] === undefined) {
        if (tests[name].r) {
          throw new Error("noUiSlider: '" + name + "' is required.");
        }
        return true;
      }
      tests[name].t(parsed, options[name] === undefined ? defaults[
        name] : options[name]);
    });
    // Forward pips options
    parsed.pips = options.pips;
    // Pre-define the styles.
    parsed.style = parsed.ort ? 'top' : 'left';
    return parsed;
  }

  function closure(target, options) {
      // All variables local to 'closure' are prefixed with 'scope_'
      var scope_Target = target,
        scope_Locations = [-1, -1],
        scope_Base,
        scope_Handles,
        scope_Spectrum = options.spectrum,
        scope_Values = [],
        scope_Events = {},
        scope_Self;
      var cssClasses = [
        /*  0 */
        'target'
        /*  1 */
        , 'base'
        /*  2 */
        , 'origin'
        /*  3 */
        , 'handle'
        /*  4 */
        , 'horizontal'
        /*  5 */
        , 'vertical'
        /*  6 */
        , 'background'
        /*  7 */
        , 'connect'
        /*  8 */
        , 'ltr'
        /*  9 */
        , 'rtl'
        /* 10 */
        , 'draggable'
        /* 11 */
        , ''
        /* 12 */
        , 'state-drag'
        /* 13 */
        , ''
        /* 14 */
        , 'state-tap'
        /* 15 */
        , 'active'
        /* 16 */
        , ''
        /* 17 */
        , 'stacking'
        /* 18 */
        , 'tooltip'
        /* 19 */
        , ''
        /* 20 */
        , 'pips'
        /* 21 */
        , 'marker'
        /* 22 */
        , 'value'
      ].map(addCssPrefix(options.cssPrefix || defaultCssPrefix));
      // Delimit proposed values for handle positions.
      function getPositions(a, b, delimit) {
          // Add movement to current position.
          var c = a + b[0],
            d = a + b[1];
          // Only alter the other position on drag,
          // not on standard sliding.
          if (delimit) {
            if (c < 0) {
              d += Math.abs(c);
            }
            if (d > 100) {
              c -= (d - 100);
            }
            // Limit values to 0 and 100.
            return [limit(c), limit(d)];
          }
          return [c, d];
        }
        // Provide a clean event with standardized offset values.

      function fixEvent(e, pageOffset) {
          // Prevent scrolling and panning on touch events, while
          // attempting to slide. The tap event also depends on this.
          e.preventDefault();
          // Filter the event to register the type, which can be
          // touch, mouse or pointer. Offset changes need to be
          // made on an event specific basis.
          var touch = e.type.indexOf('touch') === 0,
            mouse = e.type.indexOf('mouse') === 0,
            pointer = e.type.indexOf('pointer') === 0,
            x, y, event = e;
          // IE10 implemented pointer events with a prefix;
          if (e.type.indexOf('MSPointer') === 0) {
            pointer = true;
          }
          if (touch) {
            // noUiSlider supports one movement at a time,
            // so we can select the first 'changedTouch'.
            x = e.changedTouches[0].pageX;
            y = e.changedTouches[0].pageY;
          }
          pageOffset = pageOffset || getPageOffset();
          if (mouse || pointer) {
            x = e.clientX + pageOffset.x;
            y = e.clientY + pageOffset.y;
          }
          event.pageOffset = pageOffset;
          event.points = [x, y];
          event.cursor = mouse || pointer; // Fix #435
          return event;
        }
        // Append a handle to the base.

      function addHandle(direction, index) {
          var origin = document.createElement('div'),
            handle = document.createElement('div'),
            additions = ['-lower', '-upper'];
          if (direction) {
            additions.reverse();
          }
          addClass(handle, cssClasses[3]);
          addClass(handle, cssClasses[3] + additions[index]);
          addClass(origin, cssClasses[2]);
          origin.appendChild(handle);
          return origin;
        }
        // Add the proper connection classes.

      function addConnection(connect, target, handles) {
          // Apply the required connection classes to the elements
          // that need them. Some classes are made up for several
          // segments listed in the class list, to allow easy
          // renaming and provide a minor compression benefit.
          switch (connect) {
            case 1:
              addClass(target, cssClasses[7]);
              addClass(handles[0], cssClasses[6]);
              break;
            case 3:
              addClass(handles[1], cssClasses[6]);
              /* falls through */
            case 2:
              addClass(handles[0], cssClasses[7]);
              /* falls through */
            case 0:
              addClass(target, cssClasses[6]);
              break;
          }
        }
        // Add handles to the slider base.

      function addHandles(nrHandles, direction, base) {
          var index, handles = [];
          // Append handles.
          for (index = 0; index < nrHandles; index += 1) {
            // Keep a list of all added handles.
            handles.push(base.appendChild(addHandle(direction, index)));
          }
          return handles;
        }
        // Initialize a single slider.

      function addSlider(direction, orientation, target) {
        // Apply classes and data to the target.
        addClass(target, cssClasses[0]);
        addClass(target, cssClasses[8 + direction]);
        addClass(target, cssClasses[4 + orientation]);
        var div = document.createElement('div');
        addClass(div, cssClasses[1]);
        target.appendChild(div);
        return div;
      }

      function addTooltip(handle, index) {
          if (!options.tooltips[index]) {
            return false;
          }
          var element = document.createElement('div');
          element.className = cssClasses[18];
          return handle.firstChild.appendChild(element);
        }
        // The tooltips option is a shorthand for using the 'update' event.

      function tooltips() {
        if (options.dir) {
          options.tooltips.reverse();
        }
        // Tooltips are added with options.tooltips in original order.
        var tips = scope_Handles.map(addTooltip);
        if (options.dir) {
          tips.reverse();
          options.tooltips.reverse();
        }
        bindEvent('update', function(f, o, r) {
          if (tips[o]) {
            tips[o].innerHTML = options.tooltips[o] === true ? f[o] :
              options.tooltips[o].to(r[o]);
          }
        });
      }

      function getGroup(mode, values, stepped) {
        // Use the range.
        if (mode === 'range' || mode === 'steps') {
          return scope_Spectrum.xVal;
        }
        if (mode === 'count') {
          // Divide 0 - 100 in 'count' parts.
          var spread = (100 / (values - 1)),
            v, i = 0;
          values = [];
          // List these parts and have them handled as 'positions'.
          while ((v = i++ * spread) <= 100) {
            values.push(v);
          }
          mode = 'positions';
        }
        if (mode === 'positions') {
          // Map all percentages to on-range values.
          return values.map(function(value) {
            return scope_Spectrum.fromStepping(stepped ?
              scope_Spectrum.getStep(value) : value);
          });
        }
        if (mode === 'values') {
          // If the value must be stepped, it needs to be converted to a percentage first.
          if (stepped) {
            return values.map(function(value) {
              // Convert to percentage, apply step, return to value.
              return scope_Spectrum.fromStepping(scope_Spectrum.getStep(
                scope_Spectrum.toStepping(value)));
            });
          }
          // Otherwise, we can simply use the values.
          return values;
        }
      }

      function generateSpread(density, mode, group) {
        function safeIncrement(value, increment) {
          // Avoid floating point variance by dropping the smallest decimal places.
          return (value + increment).toFixed(7) / 1;
        }
        var originalSpectrumDirection = scope_Spectrum.direction,
          indexes = {},
          firstInRange = scope_Spectrum.xVal[0],
          lastInRange = scope_Spectrum.xVal[scope_Spectrum.xVal.length -
            1],
          ignoreFirst = false,
          ignoreLast = false,
          prevPct = 0;
        // This function loops the spectrum in an ltr linear fashion,
        // while the toStepping method is direction aware. Trick it into
        // believing it is ltr.
        scope_Spectrum.direction = 0;
        // Create a copy of the group, sort it and filter away all duplicates.
        group = unique(group.slice().sort(function(a, b) {
          return a - b;
        }));
        // Make sure the range starts with the first element.
        if (group[0] !== firstInRange) {
          group.unshift(firstInRange);
          ignoreFirst = true;
        }
        // Likewise for the last one.
        if (group[group.length - 1] !== lastInRange) {
          group.push(lastInRange);
          ignoreLast = true;
        }
        group.forEach(function(current, index) {
          // Get the current step and the lower + upper positions.
          var step, i, q,
            low = current,
            high = group[index + 1],
            newPct, pctDifference, pctPos, type,
            steps, realSteps, stepsize;
          // When using 'steps' mode, use the provided steps.
          // Otherwise, we'll step on to the next subrange.
          if (mode === 'steps') {
            step = scope_Spectrum.xNumSteps[index];
          }
          // Default to a 'full' step.
          if (!step) {
            step = high - low;
          }
          // Low can be 0, so test for false. If high is undefined,
          // we are at the last subrange. Index 0 is already handled.
          if (low === false || high === undefined) {
            return;
          }
          // Find all steps in the subrange.
          for (i = low; i <= high; i = safeIncrement(i, step)) {
            // Get the percentage value for the current step,
            // calculate the size for the subrange.
            newPct = scope_Spectrum.toStepping(i);
            pctDifference = newPct - prevPct;
            steps = pctDifference / density;
            realSteps = Math.round(steps);
            // This ratio represents the ammount of percentage-space a point indicates.
            // For a density 1 the points/percentage = 1. For density 2, that percentage needs to be re-devided.
            // Round the percentage offset to an even number, then divide by two
            // to spread the offset on both sides of the range.
            stepsize = pctDifference / realSteps;
            // Divide all points evenly, adding the correct number to this subrange.
            // Run up to <= so that 100% gets a point, event if ignoreLast is set.
            for (q = 1; q <= realSteps; q += 1) {
              // The ratio between the rounded value and the actual size might be ~1% off.
              // Correct the percentage offset by the number of points
              // per subrange. density = 1 will result in 100 points on the
              // full range, 2 for 50, 4 for 25, etc.
              pctPos = prevPct + (q * stepsize);
              indexes[pctPos.toFixed(5)] = ['x', 0];
            }
            // Determine the point type.
            type = (group.indexOf(i) > -1) ? 1 : (mode === 'steps' ?
              2 : 0);
            // Enforce the 'ignoreFirst' option by overwriting the type for 0.
            if (!index && ignoreFirst) {
              type = 0;
            }
            if (!(i === high && ignoreLast)) {
              // Mark the 'type' of this point. 0 = plain, 1 = real value, 2 = step value.
              indexes[newPct.toFixed(5)] = [i, type];
            }
            // Update the percentage count.
            prevPct = newPct;
          }
        });
        // Reset the spectrum.
        scope_Spectrum.direction = originalSpectrumDirection;
        return indexes;
      }

      function addMarking(spread, filterFunc, formatter) {
        var style = ['horizontal', 'vertical'][options.ort],
          element = document.createElement('div'),
          out = '';
        addClass(element, cssClasses[20]);
        addClass(element, cssClasses[20] + '-' + style);

        function getSize(type) {
          return ['-normal', '-large', '-sub'][type];
        }

        function getTags(offset, source, values) {
          return 'class="' + source + ' ' + source + '-' + style + ' ' +
            source + getSize(values[1]) + '" style="' + options.style +
            ': ' + offset + '%"';
        }

        function addSpread(offset, values) {
            if (scope_Spectrum.direction) {
              offset = 100 - offset;
            }
            // Apply the filter function, if it is set.
            values[1] = (values[1] && filterFunc) ? filterFunc(values[0],
              values[1]) : values[1];
            // Add a marker for every point
            out += '<div ' + getTags(offset, cssClasses[21], values) +
              '></div>';
            // Values are only appended for points marked '1' or '2'.
            if (values[1]) {
              out += '<div ' + getTags(offset, cssClasses[22], values) +
                '>' + formatter.to(values[0]) + '</div>';
            }
          }
          // Append all points.
        Object.keys(spread).forEach(function(a) {
          addSpread(a, spread[a]);
        });
        element.innerHTML = out;
        return element;
      }

      function pips(grid) {
          var mode = grid.mode,
            density = grid.density || 1,
            filter = grid.filter || false,
            values = grid.values || false,
            stepped = grid.stepped || false,
            group = getGroup(mode, values, stepped),
            spread = generateSpread(density, mode, group),
            format = grid.format || {
              to: Math.round
            };
          return scope_Target.appendChild(addMarking(spread, filter, format));
        }
        // Shorthand for base dimensions.

      function baseSize() {
          var rect = scope_Base.getBoundingClientRect(),
            alt = 'offset' + ['Width', 'Height'][options.ort];
          return options.ort === 0 ? (rect.width || scope_Base[alt]) : (
            rect.height || scope_Base[alt]);
        }
        // External event handling

      function fireEvent(event, handleNumber, tap) {
          if (handleNumber !== undefined && options.handles !== 1) {
            handleNumber = Math.abs(handleNumber - options.dir);
          }
          Object.keys(scope_Events).forEach(function(targetEvent) {
            var eventType = targetEvent.split('.')[0];
            if (event === eventType) {
              scope_Events[targetEvent].forEach(function(callback) {
                callback.call(
                  // Use the slider public API as the scope ('this')
                  scope_Self,
                  // Return values as array, so arg_1[arg_2] is always valid.
                  asArray(valueGet()),
                  // Handle index, 0 or 1
                  handleNumber,
                  // Unformatted slider values
                  asArray(inSliderOrder(Array.prototype.slice.call(
                    scope_Values))),
                  // Event is fired by tap, true or false
                  tap || false,
                  // Left offset of the handle, in relation to the slider
                  scope_Locations);
              });
            }
          });
        }
        // Returns the input array, respecting the slider direction configuration.

      function inSliderOrder(values) {
          // If only one handle is used, return a single value.
          if (values.length === 1) {
            return values[0];
          }
          if (options.dir) {
            return values.reverse();
          }
          return values;
        }
        // Handler for attaching events trough a proxy.

      function attach(events, element, callback, data) {
          // This function can be used to 'filter' events to the slider.
          // element is a node, not a nodeList
          var method = function(e) {
              if (scope_Target.hasAttribute('disabled')) {
                return false;
              }
              // Stop if an active 'tap' transition is taking place.
              if (hasClass(scope_Target, cssClasses[14])) {
                return false;
              }
              e = fixEvent(e, data.pageOffset);
              // Ignore right or middle clicks on start #454
              if (events === actions.start && e.buttons !== undefined && e.buttons >
                1) {
                return false;
              }
              // Ignore right or middle clicks on start #454
              if (data.hover && e.buttons) {
                return false;
              }
              e.calcPoint = e.points[options.ort];
              // Call the event handler with the event [ and additional data ].
              callback(e, data);
            },
            methods = [];
          // Bind a closure on the target for every event type.
          events.split(' ').forEach(function(eventName) {
            element.addEventListener(eventName, method, false);
            methods.push([eventName, method]);
          });
          return methods;
        }
        // Handle movement on document for handle and range drag.

      function move(event, data) {
          // Fix #498
          // Check value of .buttons in 'start' to work around a bug in IE10 mobile (data.buttonsProperty).
          // https://connect.microsoft.com/IE/feedback/details/927005/mobile-ie10-windows-phone-buttons-property-of-pointermove-event-always-zero
          // IE9 has .buttons and .which zero on mousemove.
          // Firefox breaks the spec MDN defines.
          if (navigator.appVersion.indexOf("MSIE 9") === -1 && event.buttons ===
            0 && data.buttonsProperty !== 0) {
            return end(event, data);
          }
          var handles = data.handles || scope_Handles,
            positions, state = false,
            proposal = ((event.calcPoint - data.start) * 100) / data.baseSize,
            handleNumber = handles[0] === scope_Handles[0] ? 0 : 1,
            i;
          // Calculate relative positions for the handles.
          positions = getPositions(proposal, data.positions, handles.length >
            1);
          state = setHandle(handles[0], positions[handleNumber], handles.length ===
            1);
          if (handles.length > 1) {
            state = setHandle(handles[1], positions[handleNumber ? 0 : 1],
              false) || state;
            if (state) {
              // fire for both handles
              for (i = 0; i < data.handles.length; i++) {
                fireEvent('slide', i);
              }
            }
          } else if (state) {
            // Fire for a single handle
            fireEvent('slide', handleNumber);
          }
        }
        // Unbind move events on document, call callbacks.

      function end(event, data) {
          // The handle is no longer active, so remove the class.
          var active = scope_Base.querySelector('.' + cssClasses[15]),
            handleNumber = data.handles[0] === scope_Handles[0] ? 0 : 1;
          if (active !== null) {
            removeClass(active, cssClasses[15]);
          }
          // Remove cursor styles and text-selection events bound to the body.
          if (event.cursor) {
            document.body.style.cursor = '';
            document.body.removeEventListener('selectstart', document.body.noUiListener);
          }
          var d = document.documentElement;
          // Unbind the move and end events, which are added on 'start'.
          d.noUiListeners.forEach(function(c) {
            d.removeEventListener(c[0], c[1]);
          });
          // Remove dragging class.
          removeClass(scope_Target, cssClasses[12]);
          // Fire the change and set events.
          fireEvent('set', handleNumber);
          fireEvent('change', handleNumber);
          // If this is a standard handle movement, fire the end event.
          if (data.handleNumber !== undefined) {
            fireEvent('end', data.handleNumber);
          }
        }
        // Fire 'end' when a mouse or pen leaves the document.

      function documentLeave(event, data) {
          if (event.type === "mouseout" && event.target.nodeName === "HTML" &&
            event.relatedTarget === null) {
            end(event, data);
          }
        }
        // Bind move events on document.

      function start(event, data) {
          var d = document.documentElement;
          // Mark the handle as 'active' so it can be styled.
          if (data.handles.length === 1) {
            addClass(data.handles[0].children[0], cssClasses[15]);
            // Support 'disabled' handles
            if (data.handles[0].hasAttribute('disabled')) {
              return false;
            }
          }
          // Fix #551, where a handle gets selected instead of dragged.
          event.preventDefault();
          // A drag should never propagate up to the 'tap' event.
          event.stopPropagation();
          // Attach the move and end events.
          var moveEvent = attach(actions.move, d, move, {
              start: event.calcPoint,
              baseSize: baseSize(),
              pageOffset: event.pageOffset,
              handles: data.handles,
              handleNumber: data.handleNumber,
              buttonsProperty: event.buttons,
              positions: [
                scope_Locations[0],
                scope_Locations[scope_Handles.length - 1]
              ]
            }),
            endEvent = attach(actions.end, d, end, {
              handles: data.handles,
              handleNumber: data.handleNumber
            });
          var outEvent = attach("mouseout", d, documentLeave, {
            handles: data.handles,
            handleNumber: data.handleNumber
          });
          d.noUiListeners = moveEvent.concat(endEvent, outEvent);
          // Text selection isn't an issue on touch devices,
          // so adding cursor styles can be skipped.
          if (event.cursor) {
            // Prevent the 'I' cursor and extend the range-drag cursor.
            document.body.style.cursor = getComputedStyle(event.target).cursor;
            // Mark the target with a dragging state.
            if (scope_Handles.length > 1) {
              addClass(scope_Target, cssClasses[12]);
            }
            var f = function() {
              return false;
            };
            document.body.noUiListener = f;
            // Prevent text selection when dragging the handles.
            document.body.addEventListener('selectstart', f, false);
          }
          if (data.handleNumber !== undefined) {
            fireEvent('start', data.handleNumber);
          }
        }
        // Move closest handle to tapped location.

      function tap(event) {
          var location = event.calcPoint,
            total = 0,
            handleNumber, to;
          // The tap event shouldn't propagate up and cause 'edge' to run.
          event.stopPropagation();
          // Add up the handle offsets.
          scope_Handles.forEach(function(a) {
            total += offset(a)[options.style];
          });
          // Find the handle closest to the tapped position.
          handleNumber = (location < total / 2 || scope_Handles.length ===
            1) ? 0 : 1;
          // Check if handler is not disablet if yes set number to the next handler
          if (scope_Handles[handleNumber].hasAttribute('disabled')) {
            handleNumber = handleNumber ? 0 : 1;
          }
          location -= offset(scope_Base)[options.style];
          // Calculate the new position.
          to = (location * 100) / baseSize();
          if (!options.events.snap) {
            // Flag the slider as it is now in a transitional state.
            // Transition takes 300 ms, so re-enable the slider afterwards.
            addClassFor(scope_Target, cssClasses[14], 300);
          }
          // Support 'disabled' handles
          if (scope_Handles[handleNumber].hasAttribute('disabled')) {
            return false;
          }
          // Find the closest handle and calculate the tapped point.
          // The set handle to the new position.
          setHandle(scope_Handles[handleNumber], to);
          fireEvent('slide', handleNumber, true);
          fireEvent('set', handleNumber, true);
          fireEvent('change', handleNumber, true);
          if (options.events.snap) {
            start(event, {
              handles: [scope_Handles[handleNumber]]
            });
          }
        }
        // Fires a 'hover' event for a hovered mouse/pen position.

      function hover(event) {
          var location = event.calcPoint - offset(scope_Base)[options.style],
            to = scope_Spectrum.getStep((location * 100) / baseSize()),
            value = scope_Spectrum.fromStepping(to);
          Object.keys(scope_Events).forEach(function(targetEvent) {
            if ('hover' === targetEvent.split('.')[0]) {
              scope_Events[targetEvent].forEach(function(callback) {
                callback.call(scope_Self, value);
              });
            }
          });
        }
        // Attach events to several slider parts.

      function events(behaviour) {
          var i, drag;
          // Attach the standard drag event to the handles.
          if (!behaviour.fixed) {
            for (i = 0; i < scope_Handles.length; i += 1) {
              // These events are only bound to the visual handle
              // element, not the 'real' origin element.
              attach(actions.start, scope_Handles[i].children[0], start, {
                handles: [scope_Handles[i]],
                handleNumber: i
              });
            }
          }
          // Attach the tap event to the slider base.
          if (behaviour.tap) {
            attach(actions.start, scope_Base, tap, {
              handles: scope_Handles
            });
          }
          // Fire hover events
          if (behaviour.hover) {
            attach(actions.move, scope_Base, hover, {
              hover: true
            });
            for (i = 0; i < scope_Handles.length; i += 1) {
              ['mousemove MSPointerMove pointermove'].forEach(function(
                eventName) {
                scope_Handles[i].children[0].addEventListener(eventName,
                  stopPropagation, false);
              });
            }
          }
          // Make the range draggable.
          if (behaviour.drag) {
            drag = [scope_Base.querySelector('.' + cssClasses[7])];
            addClass(drag[0], cssClasses[10]);
            // When the range is fixed, the entire range can
            // be dragged by the handles. The handle in the first
            // origin will propagate the start event upward,
            // but it needs to be bound manually on the other.
            if (behaviour.fixed) {
              drag.push(scope_Handles[(drag[0] === scope_Handles[0] ? 1 : 0)]
                .children[0]);
            }
            drag.forEach(function(element) {
              attach(actions.start, element, start, {
                handles: scope_Handles
              });
            });
          }
        }
        // Test suggested values and apply margin, step.

      function setHandle(handle, to, noLimitOption) {
          var trigger = handle !== scope_Handles[0] ? 1 : 0,
            lowerMargin = scope_Locations[0] + options.margin,
            upperMargin = scope_Locations[1] - options.margin,
            lowerLimit = scope_Locations[0] + options.limit,
            upperLimit = scope_Locations[1] - options.limit;
          // For sliders with multiple handles,
          // limit movement to the other handle.
          // Apply the margin option by adding it to the handle positions.
          if (scope_Handles.length > 1) {
            to = trigger ? Math.max(to, lowerMargin) : Math.min(to,
              upperMargin);
          }
          // The limit option has the opposite effect, limiting handles to a
          // maximum distance from another. Limit must be > 0, as otherwise
          // handles would be unmoveable. 'noLimitOption' is set to 'false'
          // for the .val() method, except for pass 4/4.
          if (noLimitOption !== false && options.limit && scope_Handles.length >
            1) {
            to = trigger ? Math.min(to, lowerLimit) : Math.max(to,
              upperLimit);
          }
          // Handle the step option.
          to = scope_Spectrum.getStep(to);
          // Limit to 0/100 for .val input, trim anything beyond 7 digits, as
          // JavaScript has some issues in its floating point implementation.
          to = limit(parseFloat(to.toFixed(7)));
          // Return false if handle can't move
          if (to === scope_Locations[trigger]) {
            return false;
          }
          // Set the handle to the new position.
          // Use requestAnimationFrame for efficient painting.
          // No significant effect in Chrome, Edge sees dramatic
          // performace improvements.
          if (window.requestAnimationFrame) {
            window.requestAnimationFrame(function() {
              handle.style[options.style] = to + '%';
            });
          } else {
            handle.style[options.style] = to + '%';
          }
          // Force proper handle stacking
          if (!handle.previousSibling) {
            removeClass(handle, cssClasses[17]);
            if (to > 50) {
              addClass(handle, cssClasses[17]);
            }
          }
          // Update locations.
          scope_Locations[trigger] = to;
          // Convert the value to the slider stepping/range.
          scope_Values[trigger] = scope_Spectrum.fromStepping(to);
          fireEvent('update', trigger);
          return true;
        }
        // Loop values from value method and apply them.

      function setValues(count, values) {
          var i, trigger, to;
          // With the limit option, we'll need another limiting pass.
          if (options.limit) {
            count += 1;
          }
          // If there are multiple handles to be set run the setting
          // mechanism twice for the first handle, to make sure it
          // can be bounced of the second one properly.
          for (i = 0; i < count; i += 1) {
            trigger = i % 2;
            // Get the current argument from the array.
            to = values[trigger];
            // Setting with null indicates an 'ignore'.
            // Inputting 'false' is invalid.
            if (to !== null && to !== false) {
              // If a formatted number was passed, attemt to decode it.
              if (typeof to === 'number') {
                to = String(to);
              }
              to = options.format.from(to);
              // Request an update for all links if the value was invalid.
              // Do so too if setting the handle fails.
              if (to === false || isNaN(to) || setHandle(scope_Handles[
                trigger], scope_Spectrum.toStepping(to), i === (3 -
                options.dir)) === false) {
                fireEvent('update', trigger);
              }
            }
          }
        }
        // Set the slider value.

      function valueSet(input) {
          var count, values = asArray(input),
            i;
          // The RTL settings is implemented by reversing the front-end,
          // internal mechanisms are the same.
          if (options.dir && options.handles > 1) {
            values.reverse();
          }
          // Animation is optional.
          // Make sure the initial values where set before using animated placement.
          if (options.animate && scope_Locations[0] !== -1) {
            addClassFor(scope_Target, cssClasses[14], 300);
          }
          // Determine how often to set the handles.
          count = scope_Handles.length > 1 ? 3 : 1;
          if (values.length === 1) {
            count = 1;
          }
          setValues(count, values);
          // Fire the 'set' event for both handles.
          for (i = 0; i < scope_Handles.length; i++) {
            // Fire the event only for handles that received a new value, as per #579
            if (values[i] !== null) {
              fireEvent('set', i);
            }
          }
        }
        // Get the slider value.

      function valueGet() {
          var i, retour = [];
          // Get the value from all handles.
          for (i = 0; i < options.handles; i += 1) {
            retour[i] = options.format.to(scope_Values[i]);
          }
          return inSliderOrder(retour);
        }
        // Removes classes from the root and empties it.

      function destroy() {
          cssClasses.forEach(function(cls) {
            if (!cls) {
              return;
            } // Ignore empty classes
            removeClass(scope_Target, cls);
          });
          while (scope_Target.firstChild) {
            scope_Target.removeChild(scope_Target.firstChild);
          }
          delete scope_Target.noUiSlider;
        }
        // Get the current step size for the slider.

      function getCurrentStep() {
          // Check all locations, map them to their stepping point.
          // Get the step point, then find it in the input list.
          var retour = scope_Locations.map(function(location, index) {
            var step = scope_Spectrum.getApplicableStep(location),
              // As per #391, the comparison for the decrement step can have some rounding issues.
              // Round the value to the precision used in the step.
              stepDecimals = countDecimals(String(step[2])),
              // Get the current numeric value
              value = scope_Values[index],
              // To move the slider 'one step up', the current step value needs to be added.
              // Use null if we are at the maximum slider value.
              increment = location === 100 ? null : step[2],
              // Going 'one step down' might put the slider in a different sub-range, so we
              // need to switch between the current or the previous step.
              prev = Number((value - step[2]).toFixed(stepDecimals)),
              // If the value fits the step, return the current step value. Otherwise, use the
              // previous step. Return null if the slider is at its minimum value.
              decrement = location === 0 ? null : (prev >= step[1]) ?
              step[2] : (step[0] || false);
            return [decrement, increment];
          });
          // Return values in the proper order.
          return inSliderOrder(retour);
        }
        // Attach an event to this slider, possibly including a namespace

      function bindEvent(namespacedEvent, callback) {
          scope_Events[namespacedEvent] = scope_Events[namespacedEvent] || [];
          scope_Events[namespacedEvent].push(callback);
          // If the event bound is 'update,' fire it immediately for all handles.
          if (namespacedEvent.split('.')[0] === 'update') {
            scope_Handles.forEach(function(a, index) {
              fireEvent('update', index);
            });
          }
        }
        // Undo attachment of event

      function removeEvent(namespacedEvent) {
          var event = namespacedEvent.split('.')[0],
            namespace = namespacedEvent.substring(event.length);
          Object.keys(scope_Events).forEach(function(bind) {
            var tEvent = bind.split('.')[0],
              tNamespace = bind.substring(tEvent.length);
            if ((!event || event === tEvent) && (!namespace ||
              namespace === tNamespace)) {
              delete scope_Events[bind];
            }
          });
        }
        // Updateable: margin, limit, step, range, animate, snap

      function updateOptions(optionsToUpdate) {
          var v = valueGet(),
            i, newOptions = testOptions({
              start: [0, 0],
              margin: optionsToUpdate.margin,
              limit: optionsToUpdate.limit,
              step: optionsToUpdate.step,
              range: optionsToUpdate.range,
              animate: optionsToUpdate.animate,
              snap: optionsToUpdate.snap === undefined ? options.snap : optionsToUpdate
                .snap
            });
          ['margin', 'limit', 'step', 'range', 'animate'].forEach(function(
            name) {
            if (optionsToUpdate[name] !== undefined) {
              options[name] = optionsToUpdate[name];
            }
          });
          // Save current spectrum direction as testOptions in testRange call
          // doesn't rely on current direction
          newOptions.spectrum.direction = scope_Spectrum.direction;
          scope_Spectrum = newOptions.spectrum;
          // Invalidate the current positioning so valueSet forces an update.
          scope_Locations = [-1, -1];
          valueSet(v);
          for (i = 0; i < scope_Handles.length; i++) {
            fireEvent('update', i);
          }
        }
        // Throw an error if the slider was already initialized.
      if (scope_Target.noUiSlider) {
        throw new Error('Slider was already initialized.');
      }
      // Create the base element, initialise HTML and set classes.
      // Add handles and links.
      scope_Base = addSlider(options.dir, options.ort, scope_Target);
      scope_Handles = addHandles(options.handles, options.dir, scope_Base);
      // Set the connect classes.
      addConnection(options.connect, scope_Target, scope_Handles);
      if (options.pips) {
        pips(options.pips);
      }
      if (options.tooltips) {
        tooltips();
      }
      scope_Self = {
        destroy: destroy,
        steps: getCurrentStep,
        on: bindEvent,
        off: removeEvent,
        get: valueGet,
        set: valueSet,
        updateOptions: updateOptions,
        options: options, // Issue #600
        target: scope_Target, // Issue #597
        pips: pips // Issue #594
      };
      // Attach user events.
      events(options.events);
      return scope_Self;
    }
    // Run the standard initializer

  function initialize(target, originalOptions) {
      if (!target.nodeName) {
        throw new Error('noUiSlider.create requires a single element.');
      }
      // Test the options and create the slider environment;
      var options = testOptions(originalOptions, target),
        slider = closure(target, options);
      // Use the public value method to set the start values.
      slider.set(options.start);
      target.noUiSlider = slider;
      return slider;
    }
    // Use an object instead of a function for future expansibility;
  return {
    create: initialize
  };
}));
// wNumb number formatter: https://refreshless.com/wnumb/
(function() {
  'use strict';
  var
  /** @const */
    FormatOptions = ['decimals', 'thousand', 'mark', 'prefix', 'postfix',
    'encoder', 'decoder', 'negativeBefore', 'negative', 'edit', 'undo'
  ];
  // General
  // Reverse a string
  function strReverse(a) {
      return a.split('').reverse().join('');
    }
    // Check if a string starts with a specified prefix.

  function strStartsWith(input, match) {
      return input.substring(0, match.length) === match;
    }
    // Check is a string ends in a specified postfix.

  function strEndsWith(input, match) {
      return input.slice(-1 * match.length) === match;
    }
    // Throw an error if formatting options are incompatible.

  function throwEqualError(F, a, b) {
      if ((F[a] || F[b]) && (F[a] === F[b])) {
        throw new Error(a);
      }
    }
    // Check if a number is finite and not NaN

  function isValidNumber(input) {
      return typeof input === 'number' && isFinite(input);
    }
    // Provide rounding-accurate toFixed method.

  function toFixed(value, decimals) {
      var scale = Math.pow(10, decimals);
      return (Math.round(value * scale) / scale).toFixed(decimals);
    }
    // Formatting
    // Accept a number as input, output formatted string.

  function formatTo(decimals, thousand, mark, prefix, postfix, encoder,
      decoder, negativeBefore, negative, edit, undo, input) {
      var originalInput = input,
        inputIsNegative, inputPieces, inputBase, inputDecimals = '',
        output = '';
      // Apply user encoder to the input.
      // Expected outcome: number.
      if (encoder) {
        input = encoder(input);
      }
      // Stop if no valid number was provided, the number is infinite or NaN.
      if (!isValidNumber(input)) {
        return false;
      }
      // Rounding away decimals might cause a value of -0
      // when using very small ranges. Remove those cases.
      if (decimals !== false && parseFloat(input.toFixed(decimals)) === 0) {
        input = 0;
      }
      // Formatting is done on absolute numbers,
      // decorated by an optional negative symbol.
      if (input < 0) {
        inputIsNegative = true;
        input = Math.abs(input);
      }
      // Reduce the number of decimals to the specified option.
      if (decimals !== false) {
        input = toFixed(input, decimals);
      }
      // Transform the number into a string, so it can be split.
      input = input.toString();
      // Break the number on the decimal separator.
      if (input.indexOf('.') !== -1) {
        inputPieces = input.split('.');
        inputBase = inputPieces[0];
        if (mark) {
          inputDecimals = mark + inputPieces[1];
        }
      } else {
        // If it isn't split, the entire number will do.
        inputBase = input;
      }
      // Group numbers in sets of three.
      if (thousand) {
        inputBase = strReverse(inputBase).match(/.{1,3}/g);
        inputBase = strReverse(inputBase.join(strReverse(thousand)));
      }
      // If the number is negative, prefix with negation symbol.
      if (inputIsNegative && negativeBefore) {
        output += negativeBefore;
      }
      // Prefix the number
      if (prefix) {
        output += prefix;
      }
      // Normal negative option comes after the prefix. Defaults to '-'.
      if (inputIsNegative && negative) {
        output += negative;
      }
      // Append the actual number.
      output += inputBase;
      output += inputDecimals;
      // Apply the postfix.
      if (postfix) {
        output += postfix;
      }
      // Run the output through a user-specified post-formatter.
      if (edit) {
        output = edit(output, originalInput);
      }
      // All done.
      return output;
    }
    // Accept a sting as input, output decoded number.

  function formatFrom(decimals, thousand, mark, prefix, postfix, encoder,
      decoder, negativeBefore, negative, edit, undo, input) {
      var originalInput = input,
        inputIsNegative, output = '';
      // User defined pre-decoder. Result must be a non empty string.
      if (undo) {
        input = undo(input);
      }
      // Test the input. Can't be empty.
      if (!input || typeof input !== 'string') {
        return false;
      }
      // If the string starts with the negativeBefore value: remove it.
      // Remember is was there, the number is negative.
      if (negativeBefore && strStartsWith(input, negativeBefore)) {
        input = input.replace(negativeBefore, '');
        inputIsNegative = true;
      }
      // Repeat the same procedure for the prefix.
      if (prefix && strStartsWith(input, prefix)) {
        input = input.replace(prefix, '');
      }
      // And again for negative.
      if (negative && strStartsWith(input, negative)) {
        input = input.replace(negative, '');
        inputIsNegative = true;
      }
      // Remove the postfix.
      // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/slice
      if (postfix && strEndsWith(input, postfix)) {
        input = input.slice(0, -1 * postfix.length);
      }
      // Remove the thousand grouping.
      if (thousand) {
        input = input.split(thousand).join('');
      }
      // Set the decimal separator back to period.
      if (mark) {
        input = input.replace(mark, '.');
      }
      // Prepend the negative symbol.
      if (inputIsNegative) {
        output += '-';
      }
      // Add the number
      output += input;
      // Trim all non-numeric characters (allow '.' and '-');
      output = output.replace(/[^0-9\.\-.]/g, '');
      // The value contains no parse-able number.
      if (output === '') {
        return false;
      }
      // Covert to number.
      output = Number(output);
      // Run the user-specified post-decoder.
      if (decoder) {
        output = decoder(output);
      }
      // Check is the output is valid, otherwise: return false.
      if (!isValidNumber(output)) {
        return false;
      }
      return output;
    }
    // Framework
    // Validate formatting options

  function validate(inputOptions) {
      var i, optionName, optionValue,
        filteredOptions = {};
      for (i = 0; i < FormatOptions.length; i += 1) {
        optionName = FormatOptions[i];
        optionValue = inputOptions[optionName];
        if (optionValue === undefined) {
          // Only default if negativeBefore isn't set.
          if (optionName === 'negative' && !filteredOptions.negativeBefore) {
            filteredOptions[optionName] = '-';
            // Don't set a default for mark when 'thousand' is set.
          } else if (optionName === 'mark' && filteredOptions.thousand !==
            '.') {
            filteredOptions[optionName] = '.';
          } else {
            filteredOptions[optionName] = false;
          }
          // Floating points in JS are stable up to 7 decimals.
        } else if (optionName === 'decimals') {
          if (optionValue >= 0 && optionValue < 8) {
            filteredOptions[optionName] = optionValue;
          } else {
            throw new Error(optionName);
          }
          // These options, when provided, must be functions.
        } else if (optionName === 'encoder' || optionName === 'decoder' ||
          optionName === 'edit' || optionName === 'undo') {
          if (typeof optionValue === 'function') {
            filteredOptions[optionName] = optionValue;
          } else {
            throw new Error(optionName);
          }
          // Other options are strings.
        } else {
          if (typeof optionValue === 'string') {
            filteredOptions[optionName] = optionValue;
          } else {
            throw new Error(optionName);
          }
        }
      }
      // Some values can't be extracted from a
      // string if certain combinations are present.
      throwEqualError(filteredOptions, 'mark', 'thousand');
      throwEqualError(filteredOptions, 'prefix', 'negative');
      throwEqualError(filteredOptions, 'prefix', 'negativeBefore');
      return filteredOptions;
    }
    // Pass all options as function arguments

  function passAll(options, method, input) {
      var i, args = [];
      // Add all options in order of FormatOptions
      for (i = 0; i < FormatOptions.length; i += 1) {
        args.push(options[FormatOptions[i]]);
      }
      // Append the input, then call the method, presenting all
      // options as arguments.
      args.push(input);
      return method.apply('', args);
    }
    /** @constructor */

  function wNumb(options) {
      if (!(this instanceof wNumb)) {
        return new wNumb(options);
      }
      if (typeof options !== "object") {
        return;
      }
      options = validate(options);
      // Call 'formatTo' with proper arguments.
      this.to = function(input) {
        return passAll(options, formatTo, input);
      };
      // Call 'formatFrom' with proper arguments.
      this.from = function(input) {
        return passAll(options, formatFrom, input);
      };
    }
    /** @export */
  window.wNumb = wNumb;
}());
</script>
  </body>
</html>