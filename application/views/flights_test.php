<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Flights</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php //echo $flights[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php //echo $flights[0]['meta_keyword']; ?>">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <?php include('includes/css.php'); ?>
    <link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .page-pages #content {
        padding-top: 30px;
    }
      .bootstrap-select>select.bs-select-hidden, select.bs-select-hidden, select.selectpicker {
      display: block!important;
    }
    #slider{
  margin: 0px;height: 8px;background: #fafafa;border: 1px solid rgb(211, 211, 211);
}
.value {
  position: absolute;
  top: 30px;
  left: 50%;
  margin: 0 0 0 -20px;
  width: 40px;
  text-align: center;
  display: block;
  
  /* optional */
  
  font-weight: normal;
  font-family:'Poppins',sans-serif;
  font-size: 14px;
  color: #333;
}

.price-range-both.value {
  width: 100px;
  margin: 0 0 0 -50px;
  top: 26px;
}

.price-range-both {
  display: none; 
}

.value i {
  font-style: normal;
}
body div.ui-slider-range.ui-widget-header {
    background: #F44336;
}
.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus{
  background: #2ecaf9 !important;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
  background: #fff !important;
  border-radius: 50%;
  font-size:.9em;
  /*border: 1px solid rgb(217, 217, 217) !important;
  box-shadow: rgb(255 255 255) 0px 0px 1px inset, rgb(235 235 235) 0px 1px 7px inset, rgb(187 187 187) 0px 3px 6px -3px;*/
  top: -0.5em;z-index: 1;
  &:focus{
    outline: none;
  }
}
.ui-slider-handle{
  border: 1px solid rgb(217, 217, 217) !important;
  box-shadow: rgb(255 255 255) 0px 0px 1px inset, rgb(235 235 235) 0px 1px 7px inset, rgb(187 187 187) 0px 3px 6px -3px;
  font-size:25px!important;
}
.ui-datepicker{ top: 260.79px!important;z-index: 2!important; }
.ui-state-highlight{ color: #555555!important; }
span.ui-slider-handle.ui-corner-all.ui-state-default:focus {
    outline: none;
}
.range-slider {
  *zoom: 1;
  z-index: 1;
  margin: 20px 0;
  padding-top: 3.5em;
  position: relative;
  text-align: center;
}
.range-slider:before, .range-slider:after {
  content: " ";
  display: table;
}
.range-slider:after {
  clear: both;
}
@media (min-width: 640px) {
  .range-slider {
    padding-top: 3.5em;
  }
}
@media (min-width: 1024px) {
  .range-slider {
    padding-top: 0em;
  }
}
.range-slider .track {
  bottom: 15px;
  height: 6px;
  left: 0;
  margin-bottom: -3px;
  position: absolute;
  width: 0;
  z-index: 50;
}
@media (min-width: 640px) {
  .range-slider .track {
    bottom: 15px;
  }
}
@media (min-width: 1024px) {
  .range-slider .track {
    bottom: 15px;
  }
}
.range-slider .track--full {
  background: #fafafa;
  border: 1px solid #ddd;
  width: 100%;
  border-radius: 4px;

}
.range-slider .track--included {
  background: #f44336;
  border-radius: 3px;
}
.range-slider .slider-thumb {
  background: #fff;
  border-radius: 50%;
  cursor: pointer;
  display: none;
  display: block\9;
  height: 30px;
  left: 0;
  position: absolute;
  width: 30px;
  z-index: 101;
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .range-slider .slider-thumb {
    display: block;
  }
}
@media (min-width: 640px) {
  .range-slider .slider-thumb {
    height: 30px;
    width: 30px;
  }
}
@media (min-width: 1024px) {
  .range-slider .slider-thumb {
    height: 30px;
    width: 30px;
  }
}
.range-slider [type=range] {
  -webkit-appearance: none;
  background: none;
  height: 30px;
  margin: 0;
  outline: none;
  padding: 0;
  pointer-events: none;
  position: relative;
  width: 100%;
  z-index: 75;
}
@media (min-width: 640px) {
  .range-slider [type=range] {
    height: 30px;
  }
}
@media (min-width: 1024px) {
  .range-slider [type=range] {
    height: 30px;
  }
}
.range-slider [type=range]:focus {
  outline: none;
}
.range-slider [type=range]::-moz-focus-outer {
  border: 0;
}
.range-slider [type=range]:first-of-type {
  float: left;
  margin-bottom: -30px;
}
@media (min-width: 640px) {
  .range-slider [type=range]:first-of-type {
    margin-bottom: -30px;
  }
}
@media (min-width: 1024px) {
  .range-slider [type=range]:first-of-type {
    margin-bottom: -30px;
  }
}
.range-slider [type=range]:last-of-type {
  float: right;
  margin-bottom: 0;
}
.range-slider [type=range]::-webkit-slider-runnable-track {
  background: none;
  border: 0;
  height: 6px;
  z-index: -1;
}
.range-slider [type=range]::-ms-fill-lower {
  background: none;
  border: 0;
}
.range-slider [type=range]::-ms-fill-upper {
  background: none;
  border: 0;
}
.range-slider [type=range]::-ms-track {
  background: transparent;
  border: 0;
  border-color: transparent;
  color: transparent;
  height: 6px;
  z-index: -1;
}
.range-slider [type=range]:focus::-ms-fill-lower {
  background: none;
  border: 0;
}
.range-slider [type=range]:focus::-ms-fill-upper {
  background: none;
  border: 0;
}
.range-slider [type=range]::-moz-range-track {
  -moz-appearance: none;
  background: none;
  border: 0;
  height: 6px;
  z-index: -1;
}
.range-slider [type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid rgb(217, 217, 217) !important;
    box-shadow: rgb(255 255 255) 0px 0px 1px inset, rgb(235 235 235) 0px 1px 7px inset, rgb(187 187 187) 0px 3px 6px -3px;
  border-radius: 50%;
  cursor: pointer;
  height: 18px;
  margin-top: -12px;
  outline: 0;
  pointer-events: all;
  position: relative;
  width: 18px;
  z-index: 100;
}
@media (min-width: 640px) {
  .range-slider [type=range]::-webkit-slider-thumb {
    height: 30px;
    margin-top: -12px;
    width: 30px;
  }
}
@media (min-width: 1024px) {
  .range-slider [type=range]::-webkit-slider-thumb {
    height: 30px;
    margin-top: -12px;
    width: 30px;
  }
}
.range-slider [type=range]::-ms-thumb {
  background: #555;
  border: 0;
  border-radius: 50%;
  cursor: pointer;
  height: 18px;
  margin-top: 0;
  pointer-events: all;
  position: relative;
  width: 18px;
  z-index: 100;
}
@media (min-width: 640px) {
  .range-slider [type=range]::-ms-thumb {
    height: 30px;
    width: 30px;
  }
}
@media (min-width: 1024px) {
  .range-slider [type=range]::-ms-thumb {
    height: 30px;
    width: 30px;
  }
}
.range-slider [type=range]::-moz-range-thumb {
  -moz-appearance: none;
  background: #fff;
  border: 0;
  border-radius: 50%;
  cursor: pointer;
  height: 18px;
  margin-top: -12px;
  pointer-events: all;
  position: relative;
  width: 18px;
  z-index: 100;
}
@media (min-width: 640px) {
  .range-slider [type=range]::-moz-range-thumb {
    height: 18px;
    margin-top: -12px;
    width: 318px;
  }
}
@media (min-width: 1024px) {
  .range-slider [type=range]::-moz-range-thumb {
    height: 18px;
    margin-top: -12px;
    width: 18px;
  }
}
.range-slider .output,
.range-slider output {
  background: #fff0;
  border: none;
  border-radius: 4px;
  color: #333;
  display: inline-block;
  height: 2.5em;
  left: 50%;
  line-height: 2.5em;
  padding: 0 0.75em;
  position: absolute;
  text-align: center;
  bottom: -35px;
  transform: translate(-50%, 0);font-weight: 500;
}
@media screen and (min-device-width: 481px) and (max-device-width: 768px) {
  .range-slider [type=range]{ height: 20px; }
}
@media only screen and (max-device-width: 480px) {
  .range-slider [type=range]{ height: 20px; }
}
    </style>
  </head>
  <body class="not-front page-pages page-flights">
    <div id="main">
      <?php include('includes/header.php'); ?>
      <div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="<?php echo base_url('assets/index.php')?>">Home</a><span>/</span><a href="<?php echo base_url('assets/index.php')?>">Pages</a><span>/</span>Flights</div>
        </div>
      </div>
      
      <!-- <div>
        <div>
          <input type="radio" <?php if($bookingType == 'O'){ echo "checked" ; } ?>>One Way
        <div>
        <div>
          <input type="radio">Round Trip
        <div>
      </div> -->
      <div style="background: #244082;padding: 20px;position: sticky;top: 0px;z-index: 3;padding-left: 0;">
        <div class="container">
        <ul style="display: flex;padding-left: 0px;">
          <li style="color: #fff;"><input type="radio" <?php if($bookingType == 'O'){ echo "checked" ; } ?> style="height: 20px;width: 25px;"> <span style="position: relative;bottom: 5px;">One Way</span></li>&nbsp;&nbsp;
          <li style="color: #fff;"><input type="radio" <?php if($bookingType == 'R'){ echo "checked" ; } ?> style="height: 20px;width: 25px;"> <span style="position: relative;bottom: 5px;">Round Trip</span></li>
        </ul>
        <form class="form-inline flight-flex">
        <div class="form-group" style="padding: 5px;">
          <label for="text" class="flight-label">From</label><br>
          <input type="text" class="form-control" id="search_departure" value="<?php echo $departure; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
        </div>
        <div class="form-group" style="position: relative;top: 40px;flex: 0;">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#ffffff" class="round-arrow-icon__RoundArrowIcon-sc-1768vww-0 cvXHzb"><path fill="#FFF" d="M10.656 6.46l3.14 3.172a.71.71 0 010 .997l-3.14 3.173a.692.692 0 01-.978-.009.71.71 0 01-.008-.988l1.65-1.669a.178.178 0 00.036-.19.174.174 0 00-.16-.109H7.28a.701.701 0 01-.698-.705c0-.389.313-.705.698-.705h3.918c.07 0 .134-.043.161-.108a.178.178 0 00-.038-.193l-1.65-1.67a.71.71 0 01.008-.988.692.692 0 01.978-.008zM3.344 7.54L.204 4.368a.71.71 0 010-.997L3.344.198a.692.692 0 01.978.009.71.71 0 01.008.988L2.68 2.864a.178.178 0 00-.036.19c.027.065.09.108.16.109H6.72c.385 0 .698.315.698.705a.702.702 0 01-.698.705H2.803a.174.174 0 00-.161.108.178.178 0 00.038.193l1.65 1.67a.71.71 0 01-.008.988.692.692 0 01-.978.008z"></path></svg>
        </div>
        <div class="form-group" style="padding: 5px;">
          <label for="text" class="flight-label">To</label><br>
          <input type="text" class="form-control" id="search_destination"  value="<?php echo $destination; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
        </div>
        <div class="form-group" style="padding: 5px;">
        <?php  $departureDate = date("d M y",strtotime($departureDate)); ?>
          <label for="date" class="flight-label">Departure Date</label><br>
          <input type="text" class="form-control" id="departure_date" value="<?php echo $departureDate; ?>"  style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
        </div>
        <div class="form-group" style="padding: 5px;">
        <?php  $returnDate = date("d M y",strtotime(@$returnDate)); ?>
          <label for="date" class="flight-label">Return Date</label><br>
          <input type="text" class="form-control" id="return_date" value="<?php echo @$returnDate; ?>"  style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
        </div>
        <div class="form-group" style="padding: 5px;">
          <label for="text" class="flight-label">Passenger & Class</label><br>
          <!--<input type="text" class="form-control" id="text" placeholder="Delhi" style="border-radius: 6px;background: #1958b6;border: #1958b6;">-->
          <input type="text" value="1 Traveller(s), <?php echo $travelClass; ?>" id="bt" onclick="toggle(this)" style="border-radius: 6px;background: #3658a9;border: #3658a9;width: auto;color: #fff;" readonly>
          <div class="traveller-count" id="cont">
            <div>
              <div class="center">
                <div class="row" style="display: grid;padding: 0px;">
                  <div class="col-md-6" style="width: 100%;">
                <p style="font-weight: 500;font-size: 12px;">Adult<span style="color: #969696;font-size: 10px;">(12+ yrs)</span>
                  </p>
                </div><br>
                <div class="col-md-6" style="margin-top: -30px;">
                <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn" disabled="disabled" data-type="minus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-minus"></span>
                          </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number" value="8" min="8" max="30" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="quant[1]">
                              <span class="glyphicon glyphicon-plus"></span>
                          </button>
                      </span>
                  </div></div></div>
                <div class="row" style="display: grid;padding: 0px;">
                  <div class="col-md-6" style="width: 100%;">
                <p style="font-weight: 500;font-size: 12px;">Child<span style="color: #969696;font-size: 10px;">(2-12 yrs)</span>
                  </p>
                </div><br>
                <div class="col-md-6" style="margin-top: -30px;">
                  <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="quant[2]">
                            <span class="glyphicon glyphicon-minus"></span>
                          </button>
                      </span>
                      <input type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="quant[2]">
                              <span class="glyphicon glyphicon-plus"></span>
                          </button>
                      </span>
                  </div>
                </div>
              </div>
              <div class="row" style="display: grid;padding: 0px;">
                  <div class="col-md-6" style="width: 100%;">
              <p style="font-weight: 500;font-size: 12px;">Infant<span style="color: #969696;font-size: 10px;">(below 2 yrs)</span>
                  </p>
                </div><br>
                <div class="col-md-6" style="margin-top: -30px;">
                  <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="quant[3]">
                            <span class="glyphicon glyphicon-minus"></span>
                          </button>
                      </span>
                      <input type="text" name="quant[3]" class="form-control input-number" value="10" min="1" max="100" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="quant[3]">
                              <span class="glyphicon glyphicon-plus"></span>
                          </button>
                      </span>
                  </div>
                </div></div>
            </div>
            </div>
            <div class="row">
                            <div class="col-md-6">
                              <div>
                                  <label>Travel Class:</label>
                                  <div>
                                    <select class="economy-select" name="travelClass" id="travelClass" style="color: #444;">
                                            <option value="ECONOMY" selected>Economy</option>
                                            <option value="Business">Business</option>
                                            <option value="First Class">First Class</option>
                                            <option value="Premium Economy">Premium Economy</option>
                                          </select>
                                </div>
                                </div>
                              </div>
                            <div class="col-md-6">
                              <div>
                                <button type = "button" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 26px;margin-bottom: 0;height: 38px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right">DONE</button>
                              </div>
                            </div>
                          </div>
        </div>
        </div>
        <button type="submit" class="btn btn-default" style="top: 26px;position: relative;padding: 9px 25px;text-transform: uppercase;font-weight: 500;color: #244082;background: #fff;border-radius: 5px;height: 38px;">Update Search</button>
      </form>
      </div>
      </div>

      <section class="flight-destinations">
        <div class="container">
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
                <div class="sidebar-item">
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
                </div>

                <div class="sidebar-item">
                  <div class="detail-title">
                    <h3>Rating</h3>
                  </div>
                  <div class="sidebar-content clearfix">
                    <fieldset class="rating">
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
              </aside>
            </div>
            <div class="col-lg-9">
            <?php if($bookingType != 'O'){ 

                //echo '<pre>'; print_r($tripInfoResult); 

            ?>
              <div id="flightSelection">
              <div class="flight-head scnd-stcky">                
                <div class="row" style="display: flex;overflow-x: auto;">
                  <div class="col-md-8">
                    <p style="font-size: 12px;font-weight: 600;margin-bottom: 0;">Your Selection</p>
                    <div class="row" style="display: flex;">
                      
                      <div class="col-md-6">
                        <table>
                          <tbody style="border-right: 1px solid #e6e6e6;">
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('assets/images/flight/SG.gif')?>"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;">Mon, 26 Jul</p>
                                <p style="margin-bottom: 3px;">DEL</p>
                                <h6 style="font-size: 15px;">11:30</h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;">2h 30m<br>Non-Stop</p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;">BOM</p>
                                <h6 style="font-size: 15px;">01:30</h6>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <table>
                          <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('assets/images/flight/G8.gif')?>"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;">Wed, 28 Jul</p>
                                <p style="margin-bottom: 3px;">BOM</p>
                                <h6 style="font-size: 15px;">01:30</h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;">2h 35m<br>Non-Stop</p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;">DEL</p>
                                <h6 style="font-size: 15px;">03:30</h6>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row" style="display: flex">
                      <div class="col-md-6" style="padding-right: 0;">
                        <table>
                          <tbody>
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><h3 style="margin-top: 35px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600"><i class="fa fa-inr"></i> 10,230</h3></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-5" style="padding-left: 0;">
                        <table>
                          <tbody>
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 43px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/details/")?>" style="color: #fff">BOOK</a></button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><?php } ?>
              <?php //echo '<pre>'; print_r($completeResult);?>
              <?php if($bookingType != 'R'){ ?>

                <div class="flight-table">
                <table>
                  <thead>
                    <tr>
                      <th>Airlines</th>
                      <th>Departure</th>
                      <th>Duration</th>
                      <th>Arrival</th>
                      <th>Price</th>
                      <th></th>
                    </tr>    
                  </thead>
                  <tbody>
                    

                            <tr>
                              <td class="text-center"><img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt=""></td>
                                <td>
                                  <h6>Go First G8 - 530 (Non-Stop)</h6>
                                  <p>DEL  Delhi , India</p>
                                  <h6><p> 06:50</p></h6>
                                </td>
                                <td>
                                  <h6>2h 5m</h6>
                                </td>
                                <td>
                                <p>BOM  Mumbai, India</p>
                                <h6> 08:55</h6>
                                 
                                </td>
                                                                <td>
                                  <h6><strong class="color-red-3">10479.7</strong></h6>
                                </td>
                                <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href="http://122.176.21.183/2020/projects/incredible/flights/details/1-0264044375_0DELBOMG8530_8954605516827717">BOOK</a></button></td>
                                                            </tr>
                            
                            <tr>
                              <td class="content" colspan="6">
                                <div id="show-more" style="display: block;"><a href="javascript:void(0)">Show Flight Details</a></div>
                                <div id="show-more-content" style="display: none;">
                                  <div id="show-less" style="display: none;"><a href="javascript:void(0)">Hide Flight Details</a></div>
                                  <section>
                                    <div class="tabs">
                                      <ul class="tab-links">
                                          <li class="active"><a href="#tab1"> Flight Information</a></li>
                                          <li><a href="#tab2"> Fare Details</a></li>
                                          <li><a href="#tab3"> Baggage Rules</a></li>
                                          <li><a href="#tab4"> Cancellation Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tbody><tr>
                                                <td class="text-center">
                                                  <img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt="">
                                                </td>
                                                <td style="text-align: right;">
                                                  <h6 style="display: block;">Go First G8 - 2609 (Non-Stop)</h6>
                                                  <p class="content-p">Indira Gandhi International Airport, India</p>
                                                  <h6 style="display: block;"><p> 21:40</p></h6>
                                                </td>
                                                <td>
                                                  <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20">2h 5m</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                  <p style="text-align:center;">Flight Duration</p>
                                                </td>
                                                <td>
                                                  <h6>LKO  Lucknow, India <b>22:40</b></h6>
                                                  <p class="content-p"> Chhatrapati Shivaji International Airport India</p>
                                                </td>
                                              </tr>
                                            </tbody></table>
                                          </div>
                                     
                                            <div id="tab2" class="tab">
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 4,578</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fess( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 780</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare( 1 Adult )</b></td>
                                                  <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> 5,350</b></td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                     
                                            <div id="tab3" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/SG.gif" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM (SG-611)</h6></li>
                                              </ul>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                  <td style="border: 1px solid #e0e0e0;">15 Kgs (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> 7 Kgs (1 piece only)</td>
                                                </tr>
                                              </tbody></table>
                                              <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                            </div>
                                     
                                            <div id="tab4" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/SG.gif" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM </h6></li>
                                              </ul>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p><b>Cancellation Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>3,450</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,900</td>
                                                    </tr>
                                                  </tbody></table>
                                                </div>
                                                <div class="col-md-6">
                                                  <p><b>Reschedule Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,960</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,300</td>
                                                    </tr>
                                                  </tbody></table>
                                                </div>
                                              </div>
                                            </div>

                                        </div>

                                    </div>

                                    </section>
                                  
                                  
                                  </div>
                              </td>
                            </tr>

                      
                      

                                        </tbody>
                </table>
              </div>


              <div class="row">
                <div class="col-md-6">
                  <div class="flight-table">
                    <table>
                      <thead>
                        <tr>
                          <th>Airlines</th>
                          <th>Departure</th>
                          <th>Duration</th>
                          <th>Arrival</th>
                          <th>Price</th>
                        </tr>    
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center"><img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt=""></td>
                            <td>
                              <h6>Go First 06:50(Non-Stop)</h6>
                              <p>DEL, India</p>
                            </td>
                            <td>
                              <h6>2h 5m</h6>
                            </td>
                            <td>
                              <h6>08:55</h6>
                              <p>BOM, India</p>
                            </td>
                            <td>
                              <input type="hidden" name="flightId" id="flightId" value="1-1936075204_0DELBOMG8530_8954958575906363">
                              <h6><strong class="color-red-3"><i class="fa fa-inr"></i> &nbsp;11979.4</strong> <input type="radio" name="choose-price" style="height: 16px;width: 20px;margin-top: 0px;" onclick="getFlight1('1-1936075204_0DELBOMG8530_8954958575906363');"></h6>
                              <!--<p class="emi">EMI $99/Month</p>-->
                            </td>
                          </tr> 
                          <tr>
                          <td class="text-center"><img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt=""></td>
                            <td>
                              <h6>Go First 06:50(Non-Stop)</h6>
                              <p>DEL, India</p>
                            </td>
                            <td>
                              <h6>2h 5m</h6>
                            </td>
                            <td>
                              <h6>08:55</h6>
                              <p>BOM, India</p>
                            </td>
                            <td>
                              <input type="hidden" name="flightId" id="flightId" value="1-1936075204_0DELBOMG8530_8954958575906363">
                              <h6><strong class="color-red-3"><i class="fa fa-inr"></i> &nbsp;11979.4</strong> <input type="radio" name="choose-price" style="height: 16px;width: 20px;margin-top: 0px;" onclick="getFlight1('1-1936075204_0DELBOMG8530_8954958575906363');"></h6>
                              <!--<p class="emi">EMI $99/Month</p>-->
                            </td>
                          </tr> 
                          <tr>
                              <td class="content" colspan="6">
                                <div id="show-more" style="display: block;"><a href="javascript:void(0)">Show Flight Details</a></div>
                                <div id="show-more-content" style="display: none;">
                                  <div id="show-less" style="display: none;"><a href="javascript:void(0)">Hide Flight Details</a></div>
                                  <section>
                                    <div class="tabs">
                                      <ul class="tab-links tab-flex">
                                          <li class="active"><a href="#tab1" class="tab-links-6"> Flight Information</a></li>
                                          <li><a href="#tab2" class="tab-links-6"> Fare Details</a></li>
                                          <li><a href="#tab3" class="tab-links-6"> Baggage Rules</a></li>
                                          <li><a href="#tab4" class="tab-links-6"> Cancellation Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tbody><tr>
                                                <td class="text-center">
                                                  <img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt="">
                                                </td>
                                                <td style="text-align: right;">
                                                  <h6 style="display: block;">Go First G8 - 2609 (Non-Stop)</h6>
                                                  <p class="content-p">Indira Gandhi International Airport, India</p>
                                                  <h6 style="display: block;"><p> 21:40</p></h6>
                                                </td>
                                                <td>
                                                  <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20">2h 5m</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                  <p style="text-align:center;">Flight Duration</p>
                                                </td>
                                                <td>
                                                  <h6>LKO  Lucknow, India <b>22:40</b></h6>
                                                  <p class="content-p"> Chhatrapati Shivaji International Airport India</p>
                                                </td>
                                              </tr>
                                            </tbody></table>
                                          </div>
                                     
                                            <div id="tab2" class="tab">
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 4,578</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fess( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 780</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare( 1 Adult )</b></td>
                                                  <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> 5,350</b></td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                     
                                            <div id="tab3" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/SG.gif" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM (SG-611)</h6></li>
                                              </ul>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                  <td style="border: 1px solid #e0e0e0;">15 Kgs (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> 7 Kgs (1 piece only)</td>
                                                </tr>
                                              </tbody></table>
                                              <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                            </div>
                                     
                                            <div id="tab4" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/SG.gif" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM </h6></li>
                                              </ul>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p><b>Cancellation Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>3,450</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,900</td>
                                                    </tr>
                                                  </tbody></table>
                                                </div>
                                                <div class="col-md-6">
                                                  <p><b>Reschedule Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,960</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,300</td>
                                                    </tr>
                                                  </tbody></table>
                                                </div>
                                              </div>
                                            </div>

                                        </div>

                                    </div>

                                    </section>
                                  
                                  
                                  </div>
                              </td>
                            </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="flight-table">
                    <table>
                      <thead>
                        <tr>
                          <th>Airlines</th>
                          <th>Departure</th>
                          <th>Duration</th>
                          <th>Arrival</th>
                          <th>Price</th>
                        </tr>    
                      </thead>
                      <tbody>
                          <tr>
                            <td class="text-center"><img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt=""></td>
                              <td>
                                <h6>Go First 06:00(Non-Stop)</h6>
                                <p>BOM, India</p>
                              </td>
                              <td>
                                <h6>2h 5m</h6>
                              </td>
                              <td>
                                <h6>08:05</h6>
                                <p>DEL, India</p>
                              </td>
                              <td>
                              <input type="hidden" name="flightIds" id="flightIds" value="1-1936075204_0BOMDELG8329_8954958559861456">
                                <h6><strong class="color-red-3"><i class="fa fa-inr"></i> &nbsp;8884.4</strong> <input type="radio" name="choose-price1" style="height: 16px;width: 20px;margin-top: 0px;" onclick="getFlight2('22-1936075204_0DELBOMI5559_8954959097659682,1-1936075204_0BOMDELG8329_8954958559861456');"></h6>
                                <!--<p class="emi">EMI $99/Month</p>-->
                              </td>
                            </tr> 
                            <tr>
                              <td class="content" colspan="6">
                                <div id="show-more" style="display: block;"><a href="javascript:void(0)">Show Flight Details</a></div>
                                <div id="show-more-content" style="display: none;">
                                  <div id="show-less" style="display: none;"><a href="javascript:void(0)">Hide Flight Details</a></div>
                                  <section>
                                    <div class="tabs">
                                      <ul class="tab-links tab-flex">
                                          <li class="active"><a href="#tab1" class="tab-links-6"> Flight Information</a></li>
                                          <li><a href="#tab2" class="tab-links-6"> Fare Details</a></li>
                                          <li><a href="#tab3" class="tab-links-6"> Baggage Rules</a></li>
                                          <li><a href="#tab4" class="tab-links-6"> Cancellation Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tbody><tr>
                                                <td class="text-center">
                                                  <img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt="">
                                                </td>
                                                <td style="text-align: right;">
                                                  <h6 style="display: block;">Go First G8 - 2609 (Non-Stop)</h6>
                                                  <p class="content-p">Indira Gandhi International Airport, India</p>
                                                  <h6 style="display: block;"><p> 21:40</p></h6>
                                                </td>
                                                <td>
                                                  <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20">2h 5m</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                  <p style="text-align:center;">Flight Duration</p>
                                                </td>
                                                <td>
                                                  <h6>LKO  Lucknow, India <b>22:40</b></h6>
                                                  <p class="content-p"> Chhatrapati Shivaji International Airport India</p>
                                                </td>
                                              </tr>
                                            </tbody></table>
                                          </div>
                                     
                                            <div id="tab2" class="tab">
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 4,578</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fess( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 780</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare( 1 Adult )</b></td>
                                                  <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> 5,350</b></td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                     
                                            <div id="tab3" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/SG.gif" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM (SG-611)</h6></li>
                                              </ul>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                  <td style="border: 1px solid #e0e0e0;">15 Kgs (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> 7 Kgs (1 piece only)</td>
                                                </tr>
                                              </tbody></table>
                                              <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                            </div>
                                     
                                            <div id="tab4" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="http://122.176.21.183/2020/projects/incredible/assets/images/flight/SG.gif" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM </h6></li>
                                              </ul>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p><b>Cancellation Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>3,450</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,900</td>
                                                    </tr>
                                                  </tbody></table>
                                                </div>
                                                <div class="col-md-6">
                                                  <p><b>Reschedule Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,960</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,300</td>
                                                    </tr>
                                                  </tbody></table>
                                                </div>
                                              </div>
                                            </div>

                                        </div>

                                    </div>

                                    </section>
                                  
                                  
                                  </div>
                              </td>
                            </tr>
                                                      <tr>
                            <td class="text-center"><img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt=""></td>
                              <td>
                                <h6>Go First 06:00(Non-Stop)</h6>
                                <p>BOM, India</p>
                              </td>
                              <td>
                                <h6>2h 5m</h6>
                              </td>
                              <td>
                                <h6>08:05</h6>
                                <p>DEL, India</p>
                              </td>
                              <td>
                              <input type="hidden" name="flightIds" id="flightIds" value="1-1936075204_0BOMDELG8329_8954958559861456">
                                <h6><strong class="color-red-3"><i class="fa fa-inr"></i> &nbsp;8884.4</strong> <input type="radio" name="choose-price1" style="height: 16px;width: 20px;margin-top: 0px;" onclick="getFlight2('22-1936075204_0DELBOMI5559_8954959097659682,1-1936075204_0BOMDELG8329_8954958559861456');"></h6>
                                <!--<p class="emi">EMI $99/Month</p>-->
                              </td>
                            </tr> 
                                                      <tr> 
                                                  </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <!--<div class="flight-table">
                <table>
                  <thead>
                    <tr>
                      <th>Airlines</th>
                      <th>Departure</th>
                      <th>Duration</th>
                      <th>Arrival</th>
                      <th>Price</th>
                      <th></th>
                    </tr>    
                  </thead>
                  <tbody>
                    <?php 
                     //echo '<pre>';  print_r($completeResult); die;
                     $i=0;
                      foreach($completeResult as $key => $flightValue) { 
                        //echo '<pre>';  print_r($completeResult[$i]['totalPriceList']); die;
                       // echo '<pre>'; print_r($completeResult[$i]['sI']);
                       $j=0;
                        //foreach ($completeResult[$i]['sI'] as $key => $flightSIValue) {

                          //error_reporting(0);
                        //echo '<pre>'; print_r($completeResult[$i]['sI'][$j]['fD']['aI']['code']);
                          // get duration 

                          $minutes = $completeResult[$i]['sI'][$j]['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60);

                          // depature time 

                           $departureTime = date("H:i",strtotime($completeResult[$i]['sI'][$j]['dt']));

                          // arrival time 
                          $arrivalTime = date("H:i",strtotime($completeResult[$i]['sI'][$j]['at']));

                          //  //stops 

                          $stop = $completeResult[$i]['sI'][$j]['stops'];
                          if($stop == 0){

                            $st= 'Non-Stop';

                          }else{

                            $st= $stop. ' Stops';

                          }


                          // fare details 

                          $adultCount = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TF'];
                          @$childCount = $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']; 
                          @$infantCount = $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['fC']['TF']; 

                          $grossTotal = $adultCount + $childCount + $infantCount; 

                          $uniqueFlightId = $completeResult[$i]['totalPriceList'][$j]['id'];
                          //echo $uniqueFlightId; die; 



                       // echo   '<pre>'; print_r($completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']); die;

                    ?>


                            <tr>
                              <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $completeResult[$i]['sI'][$j]['fD']['aI']['code'] ; ?>.png" alt=""></td>
                                <td>
                                  <h6><?php echo $completeResult[$i]['sI'][$j]['fD']['aI']['name'] ?> <?php echo $completeResult[$i]['sI'][$j]['fD']['aI']['code'] ?> - <?php echo $completeResult[$i]['sI'][$j]['fD']['fN']; ?> (<?php echo $st; ?>)</h6>
                                  <p><?php echo $completeResult[$i]['sI'][$j]['da']['code']  ?>  <?php echo $completeResult[$i]['sI'][$j]['da']['city']  ?> , <?php echo $completeResult[$i]['sI'][$j]['da']['country'] ?></p>
                                  <h6><p> <?php echo $departureTime; ?></p></h6>
                                </td>
                                <td>
                                  <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                                </td>
                                <td>
                                <P><?php echo $completeResult[$i]['sI'][$j]['aa']['code']  ?>  <?php echo $completeResult[$i]['sI'][$j]['aa']['city'] ?>, <?php echo $completeResult[$i]['sI'][$j]['aa']['country'] ?></P>
                                <h6> <?php echo $arrivalTime; ?></h6>
                                 
                                </td>
                                <?php if($bookingType == 'O'){ ?>
                                <td>
                                  <h6><strong class="color-red-3"><?php echo $grossTotal; ?></strong></h6>
                                </td>
                                <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/details/")?><?php echo $uniqueFlightId; ?>">BOOK</a></button></td>
                                <?php }else{?>
                                <td>
                                 
                                  <h6><strong class="color-red-3"><?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onclick="getFlight('<?php echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                </td>
                                <?php } ?>
                            </tr>

                            <tr>
                              <td class="content" colspan="6">
                                <div id="show-more" ><a href="javascript:void(0)">Flight Details</a></div>
                                <div id="show-more-content">
                                  <div id="show-less"><a href="javascript:void(0)">View less</a></div>
                                  <section>
                                    <div class="tabs">
                                      <ul class="tab-links">
                                          <li class="active"><a href="#tab1"> Flight Information</a></li>
                                          <li><a href="#tab2"> Fare Details</a></li>
                                          <li><a href="#tab3"> Baggage Rules</a></li>
                                          <li><a href="#tab4"> Cancellation Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tr>
                                                <td class="text-center">
                                                  <img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt="">
                                                </td>
                                                <td style="text-align: right;">
                                                  <h6 style="display: block;">Go First G8 - 2609 (Non-Stop)</h6>
                                                  <p>DEL  Delhi , India</p>
                                                  <h6 style="display: block;"><p> 21:40</p></h6>
                                                </td>
                                                <td>
                                                  <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20">2h 5m</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                  <p style="text-align:center;">Flight Duration</p>
                                                </td>
                                                <td>
                                                  <p>LKO  Lucknow, India</p>
                                                  <h6> 22:40</h6>
                                                </td>
                                              </tr>
                                            </table>
                                          </div>
                                     
                                            <div id="tab2" class="tab">
                                              <table>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 4,578</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fess( 1 Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> 780</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare( 1 Adult )</b></td>
                                                  <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> 5,350</b></td>
                                                </tr>
                                              </table>
                                            </div>
                                     
                                            <div id="tab3" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('assets/images/flight/SG.gif')?>" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM (SG-611)</h6></li>
                                              </ul>
                                              <table>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                  <td style="border: 1px solid #e0e0e0;">15 Kgs (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> 7 Kgs (1 piece only)</td>
                                                </tr>
                                              </table>
                                              <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                            </div>
                                     
                                            <div id="tab4" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('assets/images/flight/SG.gif')?>" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;">DEL-BOM </h6></li>
                                              </ul>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p><b>Cancellation Charges</b></p>
                                                  <table>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>3,450</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">>96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,900</td>
                                                    </tr>
                                                  </table>
                                                </div>
                                                <div class="col-md-6">
                                                  <p><b>Reschedule Charges</b></p>
                                                  <table>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">0-2</td>
                                                      <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">2-96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,960</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="border: 1px solid #e0e0e0;">>96</td>
                                                      <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,300</td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </div>

                                        </div>

                                    </div>

                                    </section>
                                  
                                  
                                  </div>
                              </td>
                            </tr>

                      <?php 
                       $j++; 
                          $i++;
                          }
                      ?>
                  </tbody>
                </table>
              </div>
              <?php } if($bookingType != 'O'){ ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="flight-table">
                    <table>
                      <thead>
                        <tr>
                          <th>Airlines</th>
                          <th>Departure</th>
                          <th>Duration</th>
                          <th>Arrival</th>
                          <th>Price</th>
                        </tr>    
                      </thead>
                      <tbody>
                        <?php //echo '<pre>';  print_r($completeResult); die;
                      
                      $i=0;
                      foreach($completeResult as $key => $flightValue) { 
                        $j=0;

                         $return = @$completeResult[$i]['sI'][$j]['isRs'];

                      // echo '<pre>'; print_r($return);
                       
                        $minutes = $completeResult[$i]['sI'][$j]['duration'];
                        $hours = floor($minutes / 60);
                        $min = $minutes - ($hours * 60);
                        
                        // depature time 

                        $departureTime = date("H:i",strtotime($completeResult[$i]['sI'][$j]['dt']));

                        // arrival time 
                        $arrivalTime = date("H:i",strtotime($completeResult[$i]['sI'][$j]['at']));

                        //  //stops 

                        $stop = $completeResult[$i]['sI'][$j]['stops'];
                        if($stop == 0){

                          $st= 'Non-Stop';

                        }else{

                          $st= $stop. ' Stops';

                        }

                        // fare details 

                        $adultCount = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TF'];
                        @$childCount = $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']; 
                        @$infantCount = $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['fC']['TF']; 

                        $grossTotal = $adultCount + $childCount + $infantCount; 

                        $uniqueFlightId = $completeResult[$i]['totalPriceList'][$j]['id'];
                    
                        ?>
                        <?php 

                         //if($return  == 1){
                        
                        ?>
                        <tr>
                          <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $completeResult[$i]['sI'][$j]['fD']['aI']['code'] ; ?>.png" alt=""></td>
                            <td>
                              <h6><?php echo $completeResult[$i]['sI'][$j]['fD']['aI']['name']; ?> <?php echo $departureTime; ?>(<?php echo $st; ?>)</h6>
                              <p><?php echo $completeResult[$i]['sI'][$j]['da']['code'] ?>, <?php echo $completeResult[$i]['sI'][$j]['da']['country'] ?></p>
                            </td>
                            <td>
                              <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                            </td>
                            <td>
                              <h6><?php echo $arrivalTime; ?></h6>
                              <P><?php echo $completeResult[$i]['sI'][$j]['aa']['code'] ?>, <?php echo $completeResult[$i]['sI'][$j]['aa']['country'] ?></P>
                            </td>
                            <td>
                              <input type ="hidden" name="flightId" id="flightId" value="<?php echo $uniqueFlightId?>">
                              <h6><strong class="color-red-3"><i class="fa fa-inr"></i> &nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" style="height: 16px;width: 20px;margin-top: 0px;"  onclick="getFlight1('<?php echo $uniqueFlightId; ?>');"></h6>
                              <!--<p class="emi">EMI $99/Month</p>-->
                            <!--</td>
                          </tr> 

                          <?php //} ?>
                          <?php $j++; $i++;} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="flight-table">
                    <table>
                      <thead>
                        <tr>
                          <th>Airlines</th>
                          <th>Departure</th>
                          <th>Duration</th>
                          <th>Arrival</th>
                          <th>Price</th>
                        </tr>    
                      </thead>
                      <tbody>
                      <?php //echo '<pre>';  print_r($completeResult); die;

                        $ii=0;
                        foreach($completeResultReturn  as $key => $flightValue1) { 
                          $jj=0;

                          $return = @$completeResultReturn[$ii]['sI'][$jj]['isRs'];


                          $minutes = $completeResultReturn[$ii]['sI'][$jj]['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60);
                          
                          // depature time 

                          $departureTime = date("H:i",strtotime($completeResultReturn[$ii]['sI'][$jj]['dt']));

                          // arrival time 
                          $arrivalTime = date("H:i",strtotime($completeResultReturn[$ii]['sI'][$jj]['at']));

                          //  //stops 

                          $stop = $completeResultReturn[$ii]['sI'][$jj]['stops'];
                          if($stop == 0){

                            $st= 'Non-Stop';

                          }else{

                            $st= $stop. ' Stops';

                          }

                          // fare details 

                          $adultCount = $completeResultReturn[$ii]['totalPriceList'][$jj]['fd']['ADULT']['fC']['TF'];
                          @$childCount = $completeResultReturn[$ii]['totalPriceList'][$jj]['fd']['CHILD']['fC']['TF']; 
                          @$infantCount = $completeResultReturn[$ii]['totalPriceList'][$jj]['fd']['INFANT']['fC']['TF']; 

                          $grossTotal = $adultCount + $childCount + $infantCount; 

                          $uniqueFlightIds = $completeResultReturn[$ii]['totalPriceList'][$jj]['id'];

                          ?>
                          <tr>
                            <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $completeResultReturn[$ii]['sI'][$jj]['fD']['aI']['code'] ; ?>.png" alt=""></td>
                              <td>
                                <h6><?php echo $completeResultReturn[$ii]['sI'][$jj]['fD']['aI']['name']; ?> <?php echo $departureTime; ?>(<?php echo $st; ?>)</h6>
                                <p><?php echo $completeResultReturn[$ii]['sI'][$jj]['da']['code'] ?>, <?php echo $completeResultReturn[$ii]['sI'][$jj]['da']['country'] ?></p>
                              </td>
                              <td>
                                <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                              </td>
                              <td>
                                <h6><?php echo $arrivalTime; ?></h6>
                                <P><?php echo $completeResultReturn[$ii]['sI'][$jj]['aa']['code'] ?>, <?php echo $completeResultReturn[$ii]['sI'][$jj]['aa']['country'] ?></P>
                              </td>
                              <td>
                              <input type ="hidden" name="flightIds" id="flightIds" value="<?php echo $uniqueFlightIds; ?>">
                                <h6><strong class="color-red-3"><i class="fa fa-inr"></i> &nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" style="height: 16px;width: 20px;margin-top: 0px;"  onclick="getFlight2('<?php echo $uniqueFlightId; ?>,<?php echo $uniqueFlightIds; ?>');"></h6>
                                <!--<p class="emi">EMI $99/Month</p>-->
                             <!-- </td>
                            </tr> 
                            <?php $jj++; $ii++;} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>-->

              <?php } ?>

              

              <div class="pagination-content text-center">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>    
            
          </div>
        </div>
      </section>
      <?php include('includes/footer.php'); ?>
      <?php include('includes/js.php'); ?>
    </div>
    <script>

    $(document).ready(function() { 

      $("#selectFlight").on("click",function(){ 
          

          
        });

    });

      function collision($div1, $div2) {
    var x1 = $div1.offset().left;
    var w1 = 40;
    var r1 = x1 + w1;
    var x2 = $div2.offset().left;
    var w2 = 40;
    var r2 = x2 + w2;

    if (r1 < x2 || x1 > r2)
        return false;
    return true;
}
// Fetch Url value 
var getQueryString = function (parameter) {
    var href = window.location.href;
    var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
    var string = reg.exec(href);
    return string ? string[1] : null;
};
// End url 
// // slider call
$('#slider').slider({
    range: true,
    min: 1000,
    max: 10000,
    step: 1,
    values: [getQueryString('minval') ? getQueryString('minval') : 3000, getQueryString('maxval') ? getQueryString('maxval') : 6000],

    slide: function (event, ui) {

        $('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
        $('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
        $('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ]);

        // get values of min and max
        $("#minval").val(ui.values[0]);
        $("#maxval").val(ui.values[1]);
        
        if (ui.values[0] == ui.values[1]) {
            $('.price-range-both i').css('display', 'none');
        } else {
            $('.price-range-both i').css('display', 'inline');
        }

        if (collision($('.price-range-min'), $('.price-range-max')) == true) {
            $('.price-range-min, .price-range-max').css('opacity', '0');
            $('.price-range-both').css('display', 'block');
        } else {
            $('.price-range-min, .price-range-max').css('opacity', '1');
            $('.price-range-both').css('display', 'none');
        }

    }
});

$('.ui-slider-range').append('<span class="price-range-both value"><i>$' + $('#slider').slider('values', 0) + ' - </i>' + $('#slider').slider('values', 1) + '</span>');

$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">$' + $('#slider').slider('values', 0) + '</span>');

$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">$' + $('#slider').slider('values', 1) + '</span>');
    </script>


  <script>
    (function($) {
    
    "use strict";
    
    var DEBUG = false, // make true to enable debug output
      PLUGIN_IDENTIFIER = "RangeSlider";
  
    var RangeSlider = function( element, options ) {
      this.element = element;
      this.options = options || {};
      this.defaults = {
        output: {
          prefix: '', // function or string
          suffix: '', // function or string
          format: function(output){
            return output;
          }
        },
        change: function(event, obj){}
      };
      // This next line takes advantage of HTML5 data attributes
      // to support customization of the plugin on a per-element
      // basis.
      this.metadata = $(this.element).data('options');
    };

    RangeSlider.prototype = {

      ////////////////////////////////////////////////////
      // Initializers
      ////////////////////////////////////////////////////
      
      init: function() {
        if(DEBUG && console) console.log('RangeSlider init');
        this.config = $.extend( true, {}, this.defaults, this.options, this.metadata );

        var self = this;
        // Add the markup for the slider track
        this.trackFull = $('<div class="track track--full"></div>').appendTo(self.element);
        this.trackIncluded = $('<div class="track track--included"></div>').appendTo(self.element);
        this.inputs = [];
        
        $('input[type="range"]', this.element).each(function(index, value) {
          var rangeInput = this;
          // Add the ouput markup to the page.
          rangeInput.output = $('<output>').appendTo(self.element);
          // Get the current z-index of the output for later use
          rangeInput.output.zindex = parseInt($(rangeInput.output).css('z-index')) || 1;
          // Add the thumb markup to the page.
          rangeInput.thumb = $('<div class="slider-thumb">').prependTo(self.element);
          // Store the initial val, incase we need to reset.
          rangeInput.initialValue = $(this).val();
          // Method to update the slider output text/position
          rangeInput.update = function() {
            if(DEBUG && console) console.log('RangeSlider rangeInput.update');
            var range = $(this).attr('max') - $(this).attr('min'),
              offset = $(this).val() - $(this).attr('min'),
              pos = offset / range * 100 + '%',
              transPos = offset / range * -100 + '%',
              prefix = typeof self.config.output.prefix == 'function' ? self.config.output.prefix.call(self, rangeInput) : self.config.output.prefix,
              format = self.config.output.format($(rangeInput).val()),
              suffix = typeof self.config.output.suffix == 'function' ? self.config.output.suffix.call(self, rangeInput) : self.config.output.suffix;
            
            // Update the HTML
            $(rangeInput.output).html(prefix + '' + format + '' + suffix);
            $(rangeInput.output).css('left', pos);
            $(rangeInput.output).css('transform', 'translate('+transPos+',0)');
            
            // Update the IE hack thumbs
            $(rangeInput.thumb).css('left', pos);
            $(rangeInput.thumb).css('transform', 'translate('+transPos+',0)');
            
            // Adjust the track for the inputs
            self.adjustTrack();
          };
          
          // Send the current ouput to the front for better stacking
          rangeInput.sendOutputToFront = function() {
            $(this.output).css('z-index', rangeInput.output.zindex + 1);
          };
          
          // Send the current ouput to the back behind the other
          rangeInput.sendOutputToBack = function() {
            $(this.output).css('z-index', rangeInput.output.zindex);
          };
          
          ///////////////////////////////////////////////////
          // IE hack because pointer-events:none doesn't pass the 
          // event to the slider thumb, so we have to make our own.
          ///////////////////////////////////////////////////
          $(rangeInput.thumb).on('mousedown', function(event){
            // Send all output to the back
            self.sendAllOutputToBack();
            // Send this output to the front
            rangeInput.sendOutputToFront();
            // Turn mouse tracking on
            $(this).data('tracking', true);
            $(document).one('mouseup', function() {
              // Turn mouse tracking off
              $(rangeInput.thumb).data('tracking', false);
              // Trigger the change event
              self.change(event);
            });
          });
          
          // IE hack - track the mouse move within the input range
          $('body').on('mousemove', function(event){
            // If we're tracking the mouse move
            if($(rangeInput.thumb).data('tracking')) {
              var rangeOffset = $(rangeInput).offset(),
                relX = event.pageX - rangeOffset.left,
                rangeWidth = $(rangeInput).width();
              // If the mouse move is within the input area
              // update the slider with the correct value
              if(relX <= rangeWidth) {
                var val = relX/rangeWidth;
                $(rangeInput).val(val * $(rangeInput).attr('max'));
                rangeInput.update();
              }
            }
          });
          
          // Update the output text on slider change
          $(this).on('mousedown input change touchstart', function(event) {
            if(DEBUG && console) console.log('RangeSlider rangeInput, mousedown input touchstart');
            // Send all output to the back
            self.sendAllOutputToBack();
            // Send this output to the front
            rangeInput.sendOutputToFront();
            // Update the output
            rangeInput.update();
          });
          
          // Fire the onchange event 
          $(this).on('mouseup touchend', function(event){
            if(DEBUG && console) console.log('RangeSlider rangeInput, change');
            self.change(event);
          });
          
          // Add this input to the inputs array for use later
          self.inputs.push(this);
        });
        
        // Reset to set to initial values
        this.reset();
        
        // Return the instance
        return this;
      },
      
      sendAllOutputToBack: function() {
        $.map(this.inputs, function(input, index) {
          input.sendOutputToBack();
        });
      },
      
      change: function(event) {
        if(DEBUG && console) console.log('RangeSlider change', event);
        // Get the values of each input
        var values = $.map(this.inputs, function(input, index) {
          return {
            value: parseInt($(input).val()),
            min: parseInt($(input).attr('min')),
            max: parseInt($(input).attr('max'))
          };
        });
        
        // Sort the array by value, if we have 2 or more sliders
        values.sort(function(a, b) {
          return a.value - b.value;
        });
        
        // call the on change function in the context of the rangeslider and pass the values
        this.config.change.call(this, event, values);
      },
      
      reset: function() {
        if(DEBUG && console) console.log('RangeSlider reset');
        $.map(this.inputs, function(input, index) {
          $(input).val(input.initialValue);
          input.update();
        });
      },
      
      adjustTrack: function() {
        if(DEBUG && console) console.log('RangeSlider adjustTrack');
        var valueMin = Infinity,
          rangeMin = Infinity,
          valueMax = 0,
          rangeMax = 0;
        
        // Loop through all input to get min and max
        $.map(this.inputs, function(input, index) {
          var val = parseInt($(input).val()),
            min = parseInt($(input).attr('min')),
            max = parseInt($(input).attr('max'));
          
          // Get the min and max values of the inputs
          valueMin = (val < valueMin) ? val : valueMin;
          valueMax = (val > valueMax) ? val : valueMax;
          // Get the min and max possible values
          rangeMin = (min < rangeMin) ? min : rangeMin;
          rangeMax = (max > rangeMax) ? max : rangeMax;
        });
        
        // Get the difference if there are 2 range input, use max for one input.
        // Sets left to 0 for one input and adjust for 2 inputs
        if(this.inputs.length > 1) {
          this.trackIncluded.css('width', (valueMax - valueMin) / (rangeMax - rangeMin) * 100 + '%');
          this.trackIncluded.css('left', (valueMin - rangeMin) / (rangeMax - rangeMin) * 100 + '%');
        } else {
          this.trackIncluded.css('width', valueMax / (rangeMax - rangeMin) * 100 + '%');
          this.trackIncluded.css('left', '0%');
        }
      }
    };
  
    RangeSlider.defaults = RangeSlider.prototype.defaults;
    
    $.fn.RangeSlider = function(options) {
      if(DEBUG && console) console.log('$.fn.RangeSlider', options);
      return this.each(function() {
        var instance = $(this).data(PLUGIN_IDENTIFIER);
        if(!instance) {
          instance = new RangeSlider(this, options).init();
          $(this).data(PLUGIN_IDENTIFIER,instance);
        }
      });
    };
  
  }
)(jQuery);


var rangeSlider = $('#facet-price-range-slider');
if(rangeSlider.length > 0) {
  rangeSlider.RangeSlider({
    output: {
      format: function(output){
        return output.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      },
      suffix: function(input){
        return parseInt($(input).val()) == parseInt($(input).attr('max')) ? this.config.maxSymbol : '';
      }
    }
  });
}
  </script>
  <script>
    function toggle(ele) {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';

            document.getElementById(ele.id).value = '1 Traveller(s), Economy';
        }
        else {
            cont.style.display = 'block';
            document.getElementById(ele.id).value = '1 Traveller(s), Economy';
        }
    }
</script>

<script>
  const rangeInput = document.querySelector('input');
const rangeInputStep = Number(rangeInput.step);
var currentRangeValue = Number(rangeInput.value);
const output = document.querySelector('output');
const rangeText = document.querySelector('.quantity-widget__text');

function updateRangeText() {
  if (currentRangeValue === 0) {
    rangeText.innerHTML = "Add to Cart"
  }
  else {
    rangeText.innerHTML = rangeInput.value + ' in cart'
  }
}

rangeInput.addEventListener('change', function() {
  eventValue = Number(this.value);
  this.setAttribute('value', eventValue);
  max = Number(this.max);
  if (eventValue > currentRangeValue) {
    newMax = max + rangeInputStep;
  }
  else {
    newMax = max - rangeInputStep;
  }
  this.max = newMax;
  if (eventValue === 0) {
    this.min = 0; 
  }
  else {
    this.min = newMax - (rangeInputStep + rangeInputStep);
  }
  currentRangeValue = Number(this.value);
  updateRangeText();
});
updateRangeText();
</script>

<!--<script>
  //Number Picker Plugin - TobyJ
(function ($) {
  $.fn.numberPicker = function() {
    var dis = 'disabled';
    return this.each(function() {
      var picker = $(this),
          p = picker.find('button:last-child'),
          m = picker.find('button:first-child'),
          input = picker.find('input'),                 
          min = parseInt(input.attr('min'), 10),
          max = parseInt(input.attr('max'), 10),
          inputFunc = function(picker) {
            var i = parseInt(input.val(), 10);
            if ( (i <= min) || (!i) ) {
              input.val(min);
              p.prop(dis, false);
              m.prop(dis, true);
            } else if (i >= max) {
              input.val(max);
              p.prop(dis, true); 
              m.prop(dis, false);
            } else {
              p.prop(dis, false);
              m.prop(dis, false);
            }
          },
          changeFunc = function(picker, qty) {
            var q = parseInt(qty, 10),
                i = parseInt(input.val(), 10);
            if ((i < max && (q > 0)) || (i > min && !(q > 0))) {
              input.val(i + q);
              inputFunc(picker);
            }
          };
      m.on('click', function(){changeFunc(picker,-1);});
      p.on('click', function(){changeFunc(picker,1);});
      input.on('change', function(){inputFunc(picker);});
      inputFunc(picker); //init
    });
  };
}(jQuery));


$(document).on('ready', function(){
  
  $('.plusminus').numberPicker();
  
  //add dynamically:
  $('<div class="plusminus horiz"><button></button><input type="number" name="qty" value="1" min="1" max="5"><button></button></div>').numberPicker().appendTo('body');
  
});
</script>-->

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

    function getFlight(id,ids){

     

      var flightId = id;

    $.ajax({
        url: "<?php echo base_url('flights/review')?>",
        type: 'post',
        dataType: "json",
        data: {'flightId':flightId },
        success: function( data ) {
          console.log(data);
        
          $('#flightSelection').html(data);
          // response( data );
        }
      });

    }

    function getFlight1(id){    


      var fid = $("#flightId").val();
      var fids = $("#flightIds").val();

      var flightId = fid;
      var flightIds = fids;

      $.ajax({
        url: "<?php echo base_url('flights/reviewreturn')?>",
        type: 'post',
        dataType: "HTML",
        data: {'flightId':flightId,'flightIds':flightIds},
        success: function( data ) {
          console.log(data);
        
          $('#flightSelection').html(data);
          // response( data );
        }
      });

      }

  $(document).ready(function () {
  
    $('#departure_date').datepicker({ 

      minDate: 0,
      dateFormat: "dd-mm-yy",
      beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#return_date').val());
      }

    });

    $('#return_date').datepicker({

      defaultDate: "+1D",
      dateFormat: "dd-mm-yy",
      beforeShow: function() {
        $(this).datepicker('option', 'minDate', $('#departure_date').val());
        if ($('#departure_date').val() === '') $(this).datepicker('option', 'minDate', 0);                             
      }
    });

    $( "#search_departure" ).autocomplete({
      source: function( request, response ) {
        // Fetch data
        $.ajax({
          url: "<?php echo base_url('welcome/getCityBySearch')?>",
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
        $('#search_departure').val(ui.item.label); // display the selected text
        $('#search_departure').val(ui.item.value); // save selected id to input
        return false;
      }
    });

    $( "#search_destination" ).autocomplete({
      source: function( request, response ) {
        // Fetch data
        $.ajax({
          url: "<?php echo base_url('welcome/getCityBySearch')?>",
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
        $('#search_destination').val(ui.item.label); // display the selected text
        $('#search_destination').val(ui.item.value); // save selected id to input
        return false;
      }
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
  $(document).ready(function() {
    $('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');
 
        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
        
        
    });
});
</script>

<script>
  $(".form-control")
.datepicker({
    onSelect: function(dateText) {
        console.log("Selected date: " + dateText + "; input's current value: " + this.value);
    }
})
.on("change", function() {
    console.log("Got change event from field");
});
</script>

  </body>
</html>