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

.tab-content{ padding: 0px; }

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
  border-radius: 15%;
  font-size:.9em;
  /*border: 1px solid rgb(217, 217, 217) !important;
  box-shadow: rgb(255 255 255) 0px 0px 1px inset, rgb(235 235 235) 0px 1px 7px inset, rgb(187 187 187) 0px 3px 6px -3px;*/
  top: -0.2em;z-index: 1;
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
 .pagination-tabs ul{
    margin: 0; padding-left: 0px;
}
 .pagination-tabs ul li{
     display: inline-block;
     margin: 0 5px;
}
 .pagination-tabs ul li a{
     display: block;
     text-decoration: none;
     color: #fff;
     padding: 8px 15px;
     border-radius: 5px 5px 0 0;
     -webkit-border-radius: 5px 5px 0 0;
     background: #24408200;
     color: #244082;
     font-weight: bold;
}
 .pagination-tabs ul li a:hover, .pagination-tabs ul li a.current-tab{
     background: #6084da00;
     color: #6084da;
     transition: 2s ease;
     -webkit-transition: 2s ease;
}
 .pagination-contents{
     padding: 20px;
     padding-top: 0;
    /* border: 2px solid #2da4ac;
     border-radius: 10px;*/
}
 .pagecont{
     font-weight: bold;
     display: none;
}
 .current{
     display: block;
}
 ul{
     padding-left: 25px;
}
 .aligncenter{
     text-align: center;
}
 .blue{
     color: #006cc5;
}
 .top{
     margin: 50px auto 25px;
}
 .table{
     background: grey;
     width: 100%;
     max-width: 450px;
     border-spacing: 6px;
     font-weight: bold;
     margin: 0 auto 0;
}
 .table tr td{
     padding: 8px;
     background: #fff;
}
 .overflowhidden{
     overflow: hidden;
}
 .hover:hover{
     cursor: pointer;
     background: #74D4F8;
     color: #fff;
     transition: 1s ease;
     padding: 8px;
     font-size: 30px;
}
 .hover{
     display:inline-block;
}
 .animation{
     display:inline-block;
     animation: animate 10s infinite;
     -webkit-animation: animate 10s infinite;
     -moz-animation: animate 10s infinite;
     left: -100%;
     position: relative;
}
 @keyframes animate{
     0%{
         left: 0%;
    }
     100%{
         left: 100%;
    }
}
 .effects{
     width: 180px;
     height: 180px;
     animation: bg 5s infinite;
     background: red;
     color: #fff;
     padding: 10px;
}
 @keyframes bg{
     0%{
         background: green;
         color: orange;
    }
     30%{
         background: blue;
    }
     50%{
         background: skyblue;
    }
     80%{
         background: yellow;
         color: #000;
    }
     100%{
         background: orange;
    }
}
@media (min-width: 601px) and (max-width: 1920px){ .d-btn{ display:none; } }
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 1px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }

  .content { height: 30px; }
  
  table td {
    /*border-bottom: 1px solid #ddd;*/
    display: block;
    font-size: .8em;
    text-align: left;
    margin-bottom: 5px;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
  .flight-table td img{ 
      float: left;
      position: relative;
      top: 15px;
      margin-right: 20px;
  }
  .flight-table p{ text-align:left }
  .scnd-stcky{ display:none; }
}
input[type=radio]:checked ~ .check::before {
    background: #444;
}
.farerules__contain--data .farerule__innercontent{ max-width: 225px; }
    </style>
  </head>
  <body class="not-front page-pages page-flights">
    <div id="main">
      <?php include('includes/header.php'); ?>
 <!--     <div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="<?php echo base_url('assets/index.php')?>">Home</a><span>/</span><a href="<?php echo base_url('assets/index.php')?>">Pages</a><span>/</span>Flights</div>
        </div>
      </div> -->
      
     
      <div style="background: #244082;padding: 20px;position: sticky;top: 0px;z-index: 3;padding-left: 0;">      
        <form class="form-inline flight-flex" name="searchflight" id="searchflight"  method="post" action="<?php echo base_url('flights'); ?>">
        <div class="container">
        <ul style="display: flex;padding-left: 0px;">
          <li style="color: #fff;"><input type="radio" name="bookingType" value="O"   id="oneway"  <?php if($bookingType == 'O'){ echo "checked" ; } ?> style="height: 20px;width: 25px;"> <span style="position: relative;bottom: 5px;">One Way</span></li>&nbsp;&nbsp;
          <li style="color: #fff;"><input type="radio"name="bookingType" value="R"  id="returnway" <?php if($bookingType == 'R'){ echo "checked" ; } ?> style="height: 20px;width: 25px;"> <span style="position: relative;bottom: 5px;">Round Trip</span></li>&nbsp;&nbsp;
          <li style="color: #fff;"><input type="radio"name="bookingType" value="M"  id="returnway" <?php if($bookingType == 'M'){ echo "checked" ; } ?> style="height: 20px;width: 25px;"> <span style="position: relative;bottom: 5px;">Multi City</span></li>
        </ul>
        <div class="form-group" style="padding: 5px;">
          <label for="text" class="flight-label">From</label><br>
          <input type="text" class="form-control" name="departure" id="search_departure" value="<?php echo $departure; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
        </div>
        <div class="form-group" style="position: relative;top: 15px;flex: 0;">
          <svg xmlns="http://www.w3.org/2000/svg" onclick="exchangeCity();" width="14" height="14" fill="#ffffff" class="round-arrow-icon__RoundArrowIcon-sc-1768vww-0 cvXHzb"><path fill="#FFF" d="M10.656 6.46l3.14 3.172a.71.71 0 010 .997l-3.14 3.173a.692.692 0 01-.978-.009.71.71 0 01-.008-.988l1.65-1.669a.178.178 0 00.036-.19.174.174 0 00-.16-.109H7.28a.701.701 0 01-.698-.705c0-.389.313-.705.698-.705h3.918c.07 0 .134-.043.161-.108a.178.178 0 00-.038-.193l-1.65-1.67a.71.71 0 01.008-.988.692.692 0 01.978-.008zM3.344 7.54L.204 4.368a.71.71 0 010-.997L3.344.198a.692.692 0 01.978.009.71.71 0 01.008.988L2.68 2.864a.178.178 0 00-.036.19c.027.065.09.108.16.109H6.72c.385 0 .698.315.698.705a.702.702 0 01-.698.705H2.803a.174.174 0 00-.161.108.178.178 0 00.038.193l1.65 1.67a.71.71 0 01-.008.988.692.692 0 01-.978.008z"></path></svg>
        </div>
        <div class="form-group" style="padding: 5px;">
          <label for="text" class="flight-label">To</label><br>
          <input type="text" class="form-control" name="destination" id="search_destination"  value="<?php echo $destination; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
        </div>
        <div class="form-group" style="padding: 5px;">
        <?php  $departureDate = date("d M y",strtotime($departureDate)); ?>
          <label for="date" class="flight-label">Departure Date</label><br>
          <input type="text" class="form-control" name="departure_date" id="departure_date" value="<?php echo $departureDate; ?>"  style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
        </div>
        <?php //if($bookingType=='R') { ?>
        <div class="form-group" style="padding: 5px;">
        <?php $returnDate = date("d M y",strtotime(@$returnDate)); ?>
          <label for="date" class="flight-label">Return Date</label><br>
          <input type="text" class="form-control" name="return_date" id="return_date" value="<?php if($bookingType=='R') {  echo @$returnDate; } ?>" onclick="exchangeDate();" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;" >
          <!-- <input type="hidden" name="bookingType" id="bookingType" value="R"> -->
        </div>
        <?php //}  ?>
        <?php //if($bookingType=='O') { ?>
          <!-- <input type="hidden" name="bookingType" id="bookingType" value="O"> -->
          <?php //}  ?>
        <div class="form-group" style="padding: 5px;">
          <label for="text" class="flight-label">Passenger & Class</label><br>
          <!--<input type="text" class="form-control" id="text" placeholder="Delhi" style="border-radius: 6px;background: #1958b6;border: #1958b6;">-->
          <input type="text" name="passenger" id="passenger" value="1 Traveller(s), <?php echo $travelClass; ?>" id="bt" onclick="toggle(this)" style="border-radius: 6px;background: #3658a9;border: #3658a9;width: auto;color: #fff;" readonly>
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
                          <button type="button" class="btn btn-default btn-number plus-minus-btn" disabled="disabled" data-type="minus" data-field="adultPax">
                              <span class="glyphicon glyphicon-minus"></span>
                          </button>
                      </span>
                      <input type="text" name="adultPax" id="adultPax" class="form-control input-number" value="1" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                      <span class="input-group-btn">
                          <button type="button"  class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="adultPax">
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
                          <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="childPax">
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
              <div class="row" style="display: grid;padding: 0px;">
                  <div class="col-md-6" style="width: 100%;">
              <p style="font-weight: 500;font-size: 12px;">Infant<span style="color: #969696;font-size: 10px;">(below 2 yrs)</span>
                  </p>
                </div><br>
                <div class="col-md-6" style="margin-top: -30px;">
                  <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="infantPax">
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
                                            <option value="BUSINESS">Business</option>
                                            <option value="FIRST">First Class</option>
                                            <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                          </select>
                                </div>
                                </div>
                              </div>
                            <div class="col-md-6">
                              <div>
                                <button type = "button"  name="updateTraveller" id="updateTraveller" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 26px;margin-bottom: 0;height: 38px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right">DONE</button>
                              </div>
                            </div>
                          </div>
                      </div>
                      </div>
                      <button type="submit" name="searchFlight" id="searchFlight" value="yes" class="btn btn-default" style="top: 12px;position: relative;padding: 9px 25px;text-transform: uppercase;font-weight: 500;color: #244082;background: #fff;border-radius: 5px;height: 35px;line-height: 15px;">Update Search</button>
                      </div>
                    </form>
                    </div>
      

      <section class="flight-destinations">
        <div class="container">
          <div class="row">
          <?php if($bookingType != 'M' && $bookingType != 'R' ){ 
           include('includes/flight_leftmenu.php'); }  ?>

          <?php 

            if($bookingType != 'M' && $bookingType != 'O'){ 

              include('includes/flight_returnmenu.php');
          
            } 
          ?>
            		
			
            <div class="col-lg-9">
            <?php if($bookingType != 'O'  && $bookingType != 'M'){ 
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
                          <?php //echo base_url('uploads/flights/');?><?php //echo $completeResult[$i]['sI'][$j]['fD']['aI']['code'] ; ?>
                         <?php  

                       //  echo '<pre>'; print_r($completeResult); die;
                         $i=0;
                       //  foreach($completeResult as $key => $flightValue) { 
                        //  echo '<pre>'; print_r($completeResult[$i]['sI'][0]['fD']['aI']['code']);
                     
                          ?>
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResult[0]['flghtCode']; ?>.png"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;"><?php echo  $departureDate = date("D,d M",strtotime($completeResult[0]['departureTime']));?></p>
                                <p style="margin-bottom: 3px;"><?php echo $completeResult[0]['departureAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo $depatureTime = date("H:i",strtotime($completeResult[0]['departureTime'])); ?></h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;">  <?php $minutes = $completeResult[0]['duration'];
                              $hours = floor($minutes / 60);
                              $min = $minutes - ($hours * 60); 
                              
                              echo $hours."h ".$min."m" ;

                              ?><br><?php $stop = $completeResult[0]['noOfStops'];
                              if($stop == 0){
    
                                $st= 'Non-Stop';
    
                              }else{
    
                                 $st= $stop. ' Stops';
    
                              }
                              
                              echo $st;
                              ?></p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;"><?php echo $completeResult[0]['arrivalAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo $depatureTime = date("H:i",strtotime($completeResult[0]['arrivalTime'])); ?></h6>
                              </td>
                            </tr>
                            <?php //$i++; } ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <table>
                          <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn[0]['flghtCode']; ?>.png"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;"><?php echo  $arrivalDate = date("D,d M",strtotime($completeResultReturn[0]['departureTime']));?></p>
                                <p style="margin-bottom: 3px;"><?php echo $completeResultReturn[0]['departureAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['departureTime']));?></h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;"><?php $minutes = $completeResultReturn[0]['duration'];
                              $hours = floor($minutes / 60);
                              $min = $minutes - ($hours * 60); 
                              
                              echo $hours."h ".$min."m" ;

                              ?><br><?php $stop = $completeResultReturn[0]['noOfStops'];
                              if($stop == 0){
    
                               $st1 = 'Non-Stop';
    
                              }else{
    
                               $st1 = $stop. ' Stops';
    
                              } 
                              echo $st1;
                              
                              ?> </p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;"><?php echo $completeResultReturn[0]['arrivalAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['arrivalTime']));?></h6>
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
                              <td style="border: none;padding: 0px 5px;"><h3 style="margin-top: 35px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600"><i class="fa fa-inr"></i><?php echo $totaFare = $completeResultReturn[0]['pricelist'][0]['totalFare'] + $completeResult[0]['pricelist'][0]['totalFare']; ?></h3></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-5" style="padding-left: 0;">
                        <table>
                          <tbody>
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 43px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsreturn/")?><?php echo  $completeResult[0]['pricelist'][0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['pricelist'][0]['flightId']; ?>" style="color: #fff">BOOK</a></button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="d-btn" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-bottom: 0;height: 35px;line-height: 10px;position: fixed;bottom: 0px;width: 90%;"><a href ="<?php echo base_url("flights/detailsreturn/")?><?php echo  $completeResult[0]['pricelist'][0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['pricelist'][0]['flightId']; ?>" style="color: #fff">BOOK for <i class="fa fa-inr"></i> <?php echo $totaFare = $completeResultReturn[0]['pricelist'][0]['totalFare'] + $completeResult[0]['pricelist'][0]['totalFare']; ?></a></button>
            </div><?php } ?>
			
			
			 <?php if($bookingType != 'O'  && $bookingType != 'R'){ 
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
                          <?php //echo base_url('uploads/flights/');?><?php //echo $completeResult[$i]['sI'][$j]['fD']['aI']['code'] ; ?>
                         <?php  

                        // echo '<pre>'; print_r($completeResult); die;
                         $i=0;
                       //  foreach($completeResult as $key => $flightValue) { 
                        //  echo '<pre>'; print_r($completeResult[$i]['sI'][0]['fD']['aI']['code']);
                     
                          ?>
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResult[0]['flghtCode']; ?>.png"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;"><?php echo  $departureDate = date("D,d M",strtotime($completeResult[0]['departureTime']));?></p>
                                <p style="margin-bottom: 3px;"><?php echo $completeResult[0]['departureCity']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo $depatureTime = date("H:i",strtotime($completeResult[0]['departureTime'])); ?></h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;">  <?php $minutes = $completeResult[0]['duration'];
                              $hours = floor($minutes / 60);
                              $min = $minutes - ($hours * 60); 
                              
                              echo $hours."h ".$min."m" ;

                              ?><br><?php $stop = $completeResult[0]['noOfStops'];
                              if($stop == 0){
    
                                $st= 'Non-Stop';
    
                              }else{
    
                                 $st= $stop. ' Stops';
    
                              }
                              
                              echo $st;
                              ?></p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;"><?php echo $completeResult[0]['arrivalAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo $depatureTime = date("H:i",strtotime($completeResult[0]['arrivalTime'])); ?></h6>
                              </td>
                            </tr>
                            <?php //$i++; } ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <table>
                          <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn[0]['flghtCode']; ?>.png"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;"><?php echo  $arrivalDate = date("D,d M",strtotime($completeResultReturn[0]['departureTime']));?></p>
                                <p style="margin-bottom: 3px;"><?php echo $completeResultReturn[0]['departureAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['departureTime']));?></h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;"><?php $minutes = $completeResultReturn[0]['duration'];
                              $hours = floor($minutes / 60);
                              $min = $minutes - ($hours * 60); 
                              
                              echo $hours."h ".$min."m" ;

                              ?><br><?php $stop = $completeResultReturn[0]['noOfStops'];
                              if($stop == 0){
    
                               $st1 = 'Non-Stop';
    
                              }else{
    
                               $st1 = $stop. ' Stops';
    
                              } 
                              echo $st1;
                              
                              ?> </p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;"><?php echo $completeResultReturn[0]['arrivalAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['arrivalTime']));?></h6>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
					  
					  
					  <?php if($count_multiways > 2) { ?>
					   <div class="col-md-6">
                        <table>
                          <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultthird[0]['flghtCode']; ?>.png"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;"><?php echo  $arrivalDate11 = date("D,d M",strtotime($completeResultthird[0]['departureTime']));?></p>
                                <p style="margin-bottom: 3px;"><?php echo $completeResultthird[0]['departureAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate11 = date("H:i",strtotime($completeResultthird[0]['departureTime']));?></h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;"><?php $minutes = $completeResultthird[0]['duration'];
                              $hours = floor($minutes / 60);
                              $min = $minutes - ($hours * 60); 
                              
                              echo $hours."h ".$min."m" ;

                              ?><br><?php $stop = $completeResultthird[0]['noOfStops'];
                              if($stop == 0){
    
                               $st1 = 'Non-Stop';
    
                              }else{
    
                               $st1 = $stop. ' Stops';
    
                              } 
                              echo $st1;
                              
                              ?> </p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;"><?php echo $completeResultthird[0]['arrivalAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate11 = date("H:i",strtotime($completeResultthird[0]['arrivalTime']));?></h6>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
					  
					  <?php } ?>
					  
					  
					  <?php if($count_multiways > 3) { ?>
					   <div class="col-md-6">
                        <table>
                          <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultforth[0]['flghtCode']; ?>.png"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;"><?php echo  $arrivalDate22 = date("D,d M",strtotime($completeResultforth[0]['departureTime']));?></p>
                                <p style="margin-bottom: 3px;"><?php echo $completeResultforth[0]['departureAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate22 = date("H:i",strtotime($completeResultforth[0]['departureTime']));?></h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;"><?php $minutes = $completeResultforth[0]['duration'];
                              $hours = floor($minutes / 60);
                              $min = $minutes - ($hours * 60); 
                              
                              echo $hours."h ".$min."m" ;

                              ?><br><?php $stop = $completeResultforth[0]['noOfStops'];
                              if($stop == 0){
    
                               $st1 = 'Non-Stop';
    
                              }else{
    
                               $st1 = $stop. ' Stops';
    
                              } 
                              echo $st1;
                              
                              ?> </p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;"><?php echo $completeResultforth[0]['arrivalAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate22 = date("H:i",strtotime($completeResultforth[0]['arrivalTime']));?></h6>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
					  
					  <?php } ?>
					  
					  
					   <?php if($count_multiways > 4) { ?>
					   <div class="col-md-6">
                        <table>
                          <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                            <tr>
                              <td style="border: none;padding: 0px 5px;"><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultfifth[0]['flghtCode']; ?>.png"></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;"><?php echo  $arrivalDate33 = date("D,d M",strtotime($completeResultfifth[0]['departureTime']));?></p>
                                <p style="margin-bottom: 3px;"><?php echo $completeResultfifth[0]['departureAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate33 = date("H:i",strtotime($completeResultfifth[0]['departureTime']));?></h6>
                              </td>
                              <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #ababab;margin-bottom: 0;"><?php $minutes = $completeResultfifth[0]['duration'];
                              $hours = floor($minutes / 60);
                              $min = $minutes - ($hours * 60); 
                              
                              echo $hours."h ".$min."m" ;

                              ?><br><?php $stop = $completeResultfifth[0]['noOfStops'];
                              if($stop == 0){
    
                               $st1 = 'Non-Stop';
    
                              }else{
    
                               $st1 = $stop. ' Stops';
    
                              } 
                              echo $st1;
                              
                              ?> </p></td>
                              <td style="border: none;padding: 0px 5px;">
                                <p style="margin-bottom: 3px;"><?php echo $completeResultfifth[0]['arrivalAirportCode']; ?></p>
                                <h6 style="font-size: 15px;"><?php echo  $arrivalDate33 = date("H:i",strtotime($completeResultfifth[0]['arrivalTime']));?></h6>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
					  
					  <?php } ?>
					  
					  
                    </div>
                  </div>
                  <div class="col-md-4">
				  
					<ul style="display:inline-block;padding-left:0px;left: 50%;position: relative;">  
					<?php if($count_multiways > 4) { ?>
						<li>
							<h3 style="margin-top: 35px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600"><i class="fa fa-inr"></i><?php echo $totaFare = $completeResultReturn[0]['totalFare'] + $completeResult[0]['totalFare'] + $completeResultthird[0]['totalFare'] + $completeResultforth[0]['totalFare']+ $completeResultfifth[0]['totalFare']; ?></h3>
						</li>
					
					<?php } elseif($count_multiways > 3) { ?>
						<li>
							<h3 style="margin-top: 35px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600"><i class="fa fa-inr"></i><?php echo $totaFare = $completeResultReturn[0]['totalFare'] + $completeResult[0]['totalFare'] + $completeResultthird[0]['totalFare'] + $completeResultforth[0]['totalFare']; ?></h3>
						</li>
						
					<?php } elseif($count_multiways > 2) { ?>
						<li>
							<h3 style="margin-top: 35px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600"><i class="fa fa-inr"></i><?php echo $totaFare = $completeResultReturn[0]['totalFare'] + $completeResult[0]['totalFare'] + $completeResultthird[0]['totalFare']; ?></h3>
						</li>
					<?php } else { ?>	
						<li>
							<h3 style="margin-top: 35px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600"><i class="fa fa-inr"></i><?php echo $totaFare = $completeResultReturn[0]['totalFare'] + $completeResult[0]['totalFare']; ?></h3>
						</li>
					<?php } ?>
						
					
					
					 <?php if($count_multiways > 4) { ?>
						<li>
							<button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 43px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsmultiway/")?><?php echo  $completeResult[0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['flightId']; ?>/<?php echo  $completeResultthird[0]['flightId']; ?>/<?php echo  $completeResultforth[0]['flightId']; ?>/<?php echo  $completeResultfifth[0]['flightId']; ?>" style="color: #fff">BOOK</a></button>
						</li>
					 
					 <?php } elseif($count_multiways > 3) { ?>
						<li>
							<button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 43px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsmultiway/")?><?php echo  $completeResult[0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['flightId']; ?>/<?php echo  $completeResultthird[0]['flightId']; ?>/<?php echo  $completeResultforth[0]['flightId']; ?>" style="color: #fff">BOOK</a></button>
						</li>
						
					<?php } elseif($count_multiways > 2) { ?>
						<li>
							<button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 43px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsmultiway/")?><?php echo  $completeResult[0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['flightId']; ?>/<?php echo  $completeResultthird[0]['flightId']; ?>" style="color: #fff">BOOK</a></button>
						</li>
					 <?php } else { ?>
					 	<li>
							<button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 43px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsmultiway/")?><?php echo  $completeResult[0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['flightId']; ?>" style="color: #fff">BOOK</a></button>
						</li>
					 <?php } ?>
					 
					 
					</ul>
				  
				  
                    
					
					
                  </div>
                </div>
              </div>
            </div><?php } ?>

            <!-------------------------------One Way Search List----------------------------->
			
              <div class="ars-listbtrow">
                <div class="ars-listbt">
                  <div class="col-sm-2">
                    <button class="ast-btnforfilter undefined">Sort By : Duration</button>
                  </div>
                  <div class="col-sm-2 no-padding" style="display: flex;justify-content: center;top: 7px;">
                    <button class="ast-btnforfilter ast-activefilter">Departure<i class="fa fa-caret-down filter-caret"></i></button>
                  </div>
                  <div class="col-sm-1 no-padding"></div>
                  <div class="col-sm-1 no-padding">
                    <button class="ast-btnforfilter undefined">Arrival</button>
                  </div>
                  <div class="col-sm-2">
                    <button class="ast-btnforfilter undefined">Price</button>
                  </div>
                  <div class="col-sm-4 no-padding"></div>
                </div>
              </div>

              <?php //echo '<pre>'; print_r($completeResult);?>
              <?php if($bookingType != 'R' && $bookingType != 'M'){ ?>
              <div id="flightdata">

            <?php  if(count($completeResult) == 0){

              echo "No Flights Available!";


            }else{ ?>
              <div class="flight-table">
                <table>
                  <!--<thead>
                    <tr>
                      <th>Airlines</th>
                      <th>Departure</th>
                      <th>Duration</th>
                      <th>Arrival</th>
                      <th>Price</th>
                      <th></th>
                    </tr>    
                  </thead>-->
                  <tbody>
                  <?php 
                      
                    // if(count($completeResult) == 0){

                    //     echo "No Flights Available!";


                    // }else{

               //   echo '<pre>'; print_r($completeResult); die;
                      $totalOneWayFlights = count($completeResult);

                      $i=0;
                      foreach($completeResult as $key => $flightValue) { 

                       // echo '<pre>'; print_r($flightValue); die;
                        //echo '<pre>';  print_r($completeResult[$i]['totalPriceList']); die;
                       // echo '<pre>'; print_r($completeResult[$i]['sI']);
                       //$j=0;
                        //foreach ($completeResult[$i]['sI'] as $key => $flightSIValue) {

                          //error_reporting(0);
                        //echo '<pre>'; print_r($completeResult[$i]['sI'][$j]['fD']['aI']['code']);

                        //$SICount =   count($completeResult[$i]['sI']);

                          // get duration 

                          $minutes = $flightValue['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60);

                          // depature time 

                           $departureTime = date("H:i",strtotime($flightValue['departureTime']));
                           $departureDate = date("D, M d Y",strtotime($flightValue['departureTime']));

                          // arrival time 
                          $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));
                          $arrivalDate = date("D, M d Y",strtotime($flightValue['arrivalTime']));

                          //  //stops 

                          $stop = $flightValue['noOfStops'];
                          if($stop == 0){

                            $st= 'Non-Stop';

                          }else{

                            $st= $stop. ' Stops';

                          }


                          // fare details 

                          // $adultCount = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TF'];
                          // @$childCount = $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']; 
                          // @$infantCount = $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['fC']['TF']; 

                        //  $grossTotal = $flightValue['totalFare']; 

                       //   $uniqueFlightId = $$flightValue['flightlist']['flightId'];
                          //echo $uniqueFlightId; die; 


                          // taxes and fares 

                          // $adultTaxes = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TAF'];
                          // $adultbase = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['BF'];



                       // echo   '<pre>'; print_r($completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']); die;

                    ?>


                            <tr style="height: 120px;">
                              <td class="text-center">

                                <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                                  <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></li>
                                  <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue['flghtName'] ?>
                                    <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> <!--(<?php //echo $st; ?>)--></span>
                                  </li>
                                </ul>

                                <!--<img src="<?php //echo base_url('uploads/flights/');?><?php //echo $flightValue['flightlist']['flghtCode'] ; ?>.png" alt="">--></td>
                                <td>
                                  <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime; ?></h6>
                                  <!--<h6><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php //echo $st; ?>)</h6>-->
                                  <p><!--<?php echo $flightValue['departureAirportCode']  ?>-->  <?php echo $flightValue['departureCity']  ?> <!--, <?php echo $flightValue['departureCountry'] ?>--></p>
                                  
                                </td>
                                <td>
                                  <h6 style="display: flex;flex-direction: column;text-align: center;font-size: 13px;"><?php echo $hours."h ".$min."m" ; ?>
                                  <div class="relative fliStopsSep">
                                    <p class="fliStopsSepLine" style="border-top: 3px solid rgb(102, 137, 221);"></p>
                                  </div>
                                  <span style="font-size: 9px;"><?php echo $st; ?></span></h6>
                                </td>
                                <td>
                                  <h6 style="font-size: 18px;color: #363636;font-weight: 600;justify-content: center;"> <?php echo $arrivalTime; ?></h6> 
                                  <p style="text-align: center;"><!--<?php //echo $flightValue['flightlist']['arrivalAirportCode']  ?> --> <?php echo $flightValue['arrivalCity'] ?><!--, <?php echo $flightValue['arrivalCountry'] ?>--></p>
                                
                                 
                                </td>
                                <?php if($bookingType == 'O'){ ?>
                                <td>

                                  <ul>
                                  <?php  $fp = 0; foreach ($flightValue['pricelist'] as $key => $fareList) {
                                    
                                    //echo "<pre>"; print_r($fareList);
                                    
                                  ?>
                                    <li>
                                      <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                        <input type="radio" name="fav_language<?php echo $i; ?>" id="pricecheck<?php echo $fp; ?>" value="<?php echo $fareList['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList['flightId'] == $flightValue['pricelist'][0]['flightId']){ echo "checked"; } ?> onclick="getlightDetails('<?php echo $fareList['flightId'] ; ?>');">&nbsp;&nbsp;

                                        <!-- <input type="radio" name="bookingType" value="O"   id="oneway"  <?php //if($fareList['flightId'] == $flightValue['flighPricetList'][0]['flightId']){ echo "checked"; } ?> style="height: 20px;width: 25px;">  -->

                                        <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> ₹ <?php echo $fareList['totalFare']; ?></label>

                                        <?php //if($fareList['flightId'] == $flightValue['flighPricetList'][0]['flightId']){ echo "checked"; } ?>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <span class="label label-warning ars-flightlabel ars-refunsleft"><?php echo $fareList['fareIdentifier']; //echo $fareList['flightId'];  echo "bhanu";  echo $flightValue['flighPricetList'][0]['flightId']; ?></span>
                                          <div class="atls-holder">
                                            <span class="ars-refunsleft ars-lastre">
                                                <?php 
                                                  if($fareList['adultcabinClassFare'] !=''){
                                                      //echo ucwords($fareList['adultcabinClassFare']);  
                                                      echo ucfirst(strtolower($fareList['adultcabinClassFare']));
                                                    } 
                                                ?>
                                                <?php if($fareList['mealAdult']!= ''){ echo $fareList['mealAdult']; } ?>
                                                  <?php if($fareList['adultrefund'] =='1'){ echo 'Refundable';  }else if($fareList['adultrefund'] == '0'){ echo 'Non Refundable'; }else if($fareList['adultrefund'] == '2'){ echo 'Partial Refundable'; } ?>
                                              <span class="cursor-pointer"></span>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                  <?php $fp++; } ?>
                                
                                    <!-- <li>
                                      <input type="radio" id="html" name="fav_language" value="flight-published">&nbsp;&nbsp;
                                      <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> ₹ <?php //echo $fareList['totalFare']; ?></label>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <span class="label label-warning ars-flightlabel ars-refunsleft"><?php //echo $fareList['fareIdentifier']; ?></span>
                                          <div class="atls-holder">
                                            <span class="ars-refunsleft ars-lastre">Economy,Free 
                                              <span class="cursor-pointer"></span>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </li> -->
                                  </ul>

                                  <!-- <ul class="ars-radiolist">
                                    
                                    <?php foreach ($flightValue['pricelist'] as $key => $fareList) { ?>
                                      <li>
                                        <input type="radio" id="html" name="fav_language" value="flight-published">
                                        <!--<p class="ars-specialfare"><span>311824</span> </p>-->
                                       <!-- <label class="sort-labelfill">
                                          <div>
                                            <span data-price="2582.7" data-markup="0">₹ <?php //echo $fareList['totalFare']; ?></span>
                                          </div>
                                        </label>
                                        <div class="check"></div>
                                        <span class="label label-warning ars-flightlabel ars-refunsleft"><?php //echo $fareList['fareIdentifier']; ?></span>
                                        <div class="atls-holder">
                                          <span class="ars-refunsleft ars-lastre">Economy,Free 
                                            <span class="cursor-pointer"></span>
                                          </span>
                                        </div>
                                      </li>
                                      <?php } ?>
                                   
                                      <!-- <li>
                                        <input type="radio" id="html" name="fav_language" value="flight-published">
                                        <label class="sort-labelfill">
                                          <div>
                                            <span data-price="2582.7" data-markup="0">₹2,582.70 </span>
                                          </div>
                                        </label>
                                        <div class="check"></div>
                                        <span class="label label-warning ars-flightlabel ars-refunsleft">Published</span>
                                        <div class="atls-holder"><span class="ars-refunsleft ars-lastre">Economy,Free <span class="cursor-pointer"></span></span></div>
                                      </li>
                                      <li>
                                        <input type="radio" id="html" name="fav_language" value="flight-flexi">
                                        <label class="sort-labelfill">
                                          <div>
                                            <span data-price="2582.7" data-markup="0">₹2,582.70 </span>
                                          </div>
                                        </label>
                                        <div class="check"></div>
                                        <span class="label label-warning ars-flightlabel ars-refunsleft">Flexi Plus</span>
                                        <div class="atls-holder"><span class="ars-refunsleft ars-lastre">Economy,Free Meal<span class="cursor-pointer">, Refundable</span></span></div>
                                      </li> -->
                                  <!--</ul> -->
                                  <!--<h6 style="justify-content: flex-end;"><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php //echo $grossTotal; ?></strong></h6>-->
                                </td>

                                <!-- <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;"><button  id="priceids11"  style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php //echo base_url("flights/details/")?><?php //echo $fareList['flightId']; ?>" style="color:#fff">BOOK </a></button></td> -->
                                    
                                  <?php //if($fareList['flightId'] == $flightValue['pricelist'][0]['flightId']){ ?>

                                <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;"><button  type="button" onclick="bookFlight();" id="priceids" value="<?php echo $fareList['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button></td>



                                <!-- <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;"><button  type="button" onclick="bookFlight();" id="priceids" value="<?php //echo $fareList['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button></td> -->

                                <?php }else{?>
                                <td>
                                 
                                  <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onclick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                </td>
                                <?php } ?>
                                <tr>

                                  <!----------------One way flight detail-------------------->

                              <td class="content" colspan="6">
                                <div id="show-more<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">Flight Details</a></div>
                                <div id="show-more-content<?php echo $i; ?>" style="display: none;">
                                  <div id="show-less<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">View Details</a></div>
                                  <section style="margin-bottom: 30px;background: #fff;">
                                    <div class="tabs">
                                      <ul class="tab-links">
                                          <li class="active"><a href="#tab1"> Flight Details</a></li>
                                          <li><a href="#tab2"> Fare Details</a></li>
                                          <li><a href="#tab3"> Baggage Information</a></li>
                                          <li><a href="#tab4"> Fare Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tbody>

                                                <tr>
                                                    <tr>

                                                      <p class="flight-details-top-list"><b><span><?php echo $flightValue['departureCity']  ?></span><span class="ars-arright">→</span> <span><?php echo $flightValue['arrivalCity'] ?></span></b><span class="graycolor "> <?php echo $departureDate;  ?></span></p>

                                                    <td class="text-center" style="background: #dfe9ff;justify-content: flex-start;align-items: center;">
                                                      <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""> <?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?>
                                                    </td>
                                                    <td style="background: #dfe9ff;">
                                                      <!--<h6 style="display: block;"><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>-->
                                                      <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['departureTime'])); ?> ,<?php echo $departureTime; ?></span>
                                                      <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>
                                                      <!--<h6 style="display: block;"><p> <?php //echo $departureTime; ?></p></h6>-->
                                                    </td>
                                                    <td style="background: #dfe9ff;">
                                                      <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                      <p style="text-align:center;">Flight Duration</p>
                                                    </td>
                                                    <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                      <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['arrivalTime'])); ?> , <?php echo $arrivalTime; ?></span>
                                                      <!--<h6><?php echo $flightValue['arrivalAirportCode']  ?> , <?php echo $flightValue['arrivalCountry']  ?><b> <?php echo $arrivalTime; ?> </b></h6>-->
                                                      <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                    </td>
                                                  </tr>


                                              </tr>


                                            </tbody></table>
                                          </div>
                                     
                                          <div id="tab2" class="tab">
                                            <table>
                                              <thead>
                                                <tr>
                                                  <td><b>Type</b></td>
                                                  <td><b>Fare</b></td>
                                                  <td><b>Total</b></td>
                                                </tr>
                                              </thead>
                                              <tbody>                                                
                                                <?php foreach ($flightValue['pricelist'] as $key => $fareValues) { 

                                                        if($flightValue['pricelist'][0]['flightId'] == $fareValues['flightId'] ){  ?> 
                                                  
                                                          <tr style="background: #dfe9ff;">
                                  
                                                            <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                            
                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $fareValues['adultBaseFare']; ?> * <?php echo $fareValues['countadultPax']; ?> </td>

                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $basefares_Adult = $fareValues['adultBaseFare'] * $fareValues['countadultPax']; ?> </td>

                                                          </tr>

                                                          <tr style="background: #dfe9ff;">

                                                            <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = $fareValues['adultTaxFare'];?>  * <?php echo $fareValues['countadultPax']; ?></td>

                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = $fareValues['adultTaxFare'] * $fareValues['countadultPax']; ?></td>
          
                                                          </tr>
                                                  
                                                          <?php 
                                                          
                                                              if(@$fareValues['countchildPax'] != 0) { ?>
                        
                                                                  <tr style="background: #dfe9ff;">

                                                                    <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $fareValues['childBaseFare'] ?>  * <?php echo  $fareValues['countchildPax'] ; ?> </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $basefares_Child = $fareValues['childBaseFare'] * $fareValues['countchildPax'] ; ?> </td>

                                                                  </tr>
                                                                  <tr>
                                                                    <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  $fareValues['childTaxFare'] ?> * <?php echo $fareValues['countchildPax']; ?></td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Child =  $fareValues['childTaxFare'] * $fareValues['countchildPax']; ?></td>

                                                                  </tr>

                                                              <?php } ?>
                        
                                                              <?php if($fareValues['countinfantPax'] != 0) { ?>
                                                              
                                                              <tr>

                                                                <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                                                <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $fareValues['infantBaseFare'];?> * <?php echo $fareValues['countinfantPax']; ?> </td>

                                                                <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $fareValues['infantBaseFare'] * $fareValues['countinfantPax']; ?> </td>

                                                              </tr>
                                                              <tr>

                                                                <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $fareValues['infantTaxFare']; ?> * <?php echo $fareValues['countinfantPax']; ?></td>

                                                                <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Infant = $fareValues['infantTaxFare'] * $fareValues['countinfantPax']; ?></td>

                                                              </tr>

                                                            <?php } ?>
                                              
                                                            <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                              <td style="border: 0px solid #e0e0e0;">
                                                                <b>Total Fare</b>
                                                              </td>
                                                              <td></td>
                                                              <td style="border: 0px solid #e0e0e0;">
                                                                <b><i class="fa fa-inr"></i> <?php echo $fareValues['totalFare']; ?></b>
                                                              </td>

                                                            </tr>

                                                        <?php } 
                                                      } ?>
                                              </tbody>
                                            </table>
                                          </div>
                                     
                                            <div id="tab3" class="tab">
                                              <!--<ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?>  (<?php echo $flightValue['flghtCode'] ?>-<?php echo $flightValue['flghtNumber']; ?>)</h6></li>
                                              </ul>-->
                                              <table style="border: 1px solid #ddd;">
                                                <tbody>
                                                  
                                                  <tr style="background: #f7f9ff;height: 40px;">
                                                    <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Sector</td>
                                                    <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Check-In</td>
                                                    <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Cabin</td>
                                                  </tr>
                                                  <?php foreach ($flightValue['pricelist'] as $key => $baggageInfo) {  
                                                    
                                                    if($flightValue['pricelist'][0]['flightId'] == $baggageInfo['flightId'] ){   
                                                  ?>
                                                    
                                                  <tr style="background:#dfe9ff;height:40px;">

                                                    <td style="border: 0px solid #e0e0e0;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?></td>

                                                    <td style="border: 0px solid #e0e0e0;">Adult: <?php echo @$baggageInfo['adultCheckInBaggage']; ?><?php if(@$baggageInfo['childCheckInBaggage']!=''){?> , Child :   <?php echo @$baggageInfo['childCheckInBaggage']; }?> <?php if(@$baggageInfo['infantCheckInBaggage']!=''){ ?>, Infant :   <?php echo @$baggageInfo['infantCheckInBaggage']; }?></td>

                                                    <td style="border: 0px solid #e0e0e0;">Adult :  <?php echo @$baggageInfo['adultCabinBaggage']; ?> <?php if($baggageInfo['childCabinBaggage'] != ''){ ?>, Child :  <?php echo @$baggageInfo['childCabinBaggage']; } ?> <?php if($baggageInfo['infantCabinBaggage'] != ''){ ?>, Infant :  <?php echo @$baggageInfo['infantCabinBaggage']; } ?></td>

                                                  </tr>
                                                  <?php } } ?>
                                              </tbody>
                                            </table>                                         
                                            </div>
                                     
                                            <div id="tab4" class="tab">


                                              <div id="divMsg" style="background-color: rgb(234 240 253); color: rgb(255, 255, 255); height: auto; width: 100%; text-align: center; display: block; border-radius: 4px;">
                                                <button class="ars-activelist fare-rules-tabs"><?php echo $flightValue['departureAirportCode']; ?>-<?php echo $flightValue['arrivalAirportCode']; ?></button>
                                                <div class="farerules__contain--data">
                                                    <div class="star-text">Mentioned fees are Per Pax Per Sector</div>
                                                    <div class="star-text">Apart from airline charges, GST + RAF + applicable charges if any, will be charged.</div>
                                                    <div class="farerule__innercontent">
                                                        <h5 class="mb-20">Type</h5>
                                                        <p class="apt-paradult">ALL</p>
                                                    </div>
                                                    <div class="farerule__innercontent">
                                                        <h5 class="mb-20">Cancellation Fee</h5>
                                                        <p class="apt-paradult">
                                                            <span>
                                                                <span>
                                                                    <span>₹3,500&nbsp;</span>+<span><span>₹50&nbsp;</span></span>
                                                                </span>
                                                                <span>
                                                                    <br>Cancellation permitted 06 Hrs before scheduled departure <br> Within 06-96 hrs Rs 3,500 <br> Before 96 hrs Rs 3,000
                                                                </span>
                                                            </span>
                                                        </p>
                                                    </div>
                                                        <div class="farerule__innercontent">
                                                            <h5 class="mb-20">Date Changes Fee</h5>
                                                            <p class="apt-paradult">
                                                                <span>
                                                                    <span>
                                                                        <span>₹3,000&nbsp;</span>+<span><span>₹50&nbsp;</span></span>
                                                                    </span>
                                                                    <span>
                                                                        <br>Changes permitted 06 Hrs before scheduled departure  <br> Within 06-96 hrs Rs 3,000 + Fare Difference <br> Before 96 hrs Rs 2,500 + Fare Difference
                                                                    </span>
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="farerule__innercontent">
                                                            <h5 class="mb-20">No Show</h5>
                                                            <p class="apt-paradult">
                                                                <span>If Cancelled within 6 hrs of scheduled departure only statutory taxes will be Refunded.</span>
                                                            </p>
                                                        </div>
                                                        <div class="farerule__innercontent">
                                                            <h5 class="mb-20">Seat Chargeable</h5>
                                                            <p class="apt-paradult">
                                                                <span>Paid Seat</span>
                                                            </p>
                                                        </div>
                                                </div>
                                            </div>


                                              
                                            </div>

                                        </div>

                                    </div>

                                    </section>
                                  
                                  
                                  </div>
                              </td>
                            </tr>
                            </tr>
                            
                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                            <script>
                         $(document).ready(function() {
                            $('#show-more-content<?php echo $i; ?>').hide();

                          $('#show-more<?php echo $i; ?>').click(function(){
                            $('#show-more-content<?php echo $i; ?>').show(300);
                            $('#show-less<?php echo $i; ?>').show();
                            $('#show-more<?php echo $i; ?>').hide();
                          });

                          $('#show-less<?php echo $i; ?>').click(function(){
                            $('#show-more-content<?php echo $i; ?>').hide(150);
                            $('#show-more<?php echo $i; ?>').show();
                            $(this).hide();
                          });
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
                      <?php 
                       //$j++; 
                          $i++;
                          }
                          
                        }
                      ?>
                  </tbody>
                </table>
              </div>
              </div>

            <?php }if($bookingType == 'M'){ ?>

              <div class="pagination-tabs">
                <ul>
                  <li><a href="javascript:;" data-id="content1" class="current-tab"><?php echo $completeResult[0]['departureAirportCode'];?> - <?php echo $completeResult[0]['arrivalAirportCode'];?></a></li>
                  <li><a href="javascript:;" data-id="content2"><?php echo $completeResultReturn[0]['departureAirportCode'];?> - <?php echo $completeResultReturn[0]['arrivalAirportCode'];?></a></li>
                 <!-- <li><a href="javascript:;" data-id="content3">JAVASCRIPT</a></li>-->
                </ul>
              </div>
              <div class="pagination-contents">
                <div id="content1" class="pagecont current">
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
                  <?php 
                      
                    if(count($completeResult) == 0){

                        echo "No Flights Available!";


                    }else{

                      //echo '<pre>'; print_r(($completeResult)); die;
                      $totalOneWayFlights = count($completeResult);

                      $i=0;
                      foreach($completeResult as $key => $flightValue) { 

                       // echo '<pre>'; print_r(($flightValue)); die;

                       // echo '<pre>'; print_r($flightValue); die;
                        //echo '<pre>';  print_r($completeResult[$i]['totalPriceList']); die;
                       // echo '<pre>'; print_r($completeResult[$i]['sI']);
                       //$j=0;
                        //foreach ($completeResult[$i]['sI'] as $key => $flightSIValue) {

                          //error_reporting(0);
                        //echo '<pre>'; print_r($completeResult[$i]['sI'][$j]['fD']['aI']['code']);

                        //$SICount =   count($completeResult[$i]['sI']);

                          // get duration 

                          $minutes = $flightValue['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60);

                          // depature time 

                           $departureTime = date("H:i",strtotime($flightValue['departureTime']));

                          // arrival time 
                          $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));

                          //  //stops 

                          $stop = $flightValue['noOfStops'];
                          if($stop == 0){

                            $st= 'Non-Stop';

                          }else{

                            $st= $stop. ' Stops';

                          }


                          // fare details 

                          // $adultCount = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TF'];
                          // @$childCount = $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']; 
                          // @$infantCount = $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['fC']['TF']; 

                          $grossTotal = $flightValue['totalFare']; 

                          $uniqueFlightId = $flightValue['flightId'];
                          //echo $uniqueFlightId; die; 


                          // taxes and fares 

                          // $adultTaxes = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TAF'];
                          // $adultbase = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['BF'];



                       // echo   '<pre>'; print_r($completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']); die;

                    ?>


                            <tr>
                              <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></td>
                                <td>
                                  <h6><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                  <p><?php echo $flightValue['departureAirportCode']  ?>  <?php echo $flightValue['departureCity']  ?> , <?php echo $flightValue['departureCountry'] ?></p>
                                  <h6><p> <?php echo $departureTime; ?></p></h6>
                                </td>
                                <td>
                                  <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                                </td>
                                <td>
                                  
                                <P><?php echo $flightValue['arrivalAirportCode']  ?>  <?php echo $flightValue['arrivalCity'] ?>, <?php echo $flightValue['arrivalCountry'] ?></P>
                                <h6> <?php echo $arrivalTime; ?></h6>
                                 
                                </td>
                                <?php if($bookingType == 'O'){ ?>
                                <td>
                                  <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong></h6>
                                </td>
                                <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/details/")?><?php echo $uniqueFlightId; ?>">BOOK</a></button></td>
                                <?php }else{?>
                                <td>
                                 
                                  <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onclick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                </td>
                                <?php } ?>
                            </tr>
                            <tr>
                              <td class="content" colspan="6">
                                <div id="show-more<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">Flight Details</a></div>
                                <div id="show-more-content<?php echo $i; ?>" style="display: none;">
                                  <div id="show-less<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">Flight Details</a></div>
                                  <section>
                                    <div class="tabs">
                                      <ul class="tab-links">
                                          <li class="active"><a href="#tab1"> Flight Information</a></li>
                                          <li><a href="#tab2"> Fare Details</a></li>
                                          <li><a href="#tab3"> Baggage Rules</a></li>
                                          <li><a href="#tab4"> Fare Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tbody><tr>
                                                <td class="text-center">
                                                  <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt="">
                                                </td>
                                                <td style="text-align: right;">
                                                  <h6 style="display: block;"><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                                  <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>
                                                  <h6 style="display: block;"><p> <?php echo $departureTime; ?></p></h6>
                                                </td>
                                                <td>
                                                  <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                  <p style="text-align:center;">Flight Duration</p>
                                                </td>
                                                <td>
                                                  <h6><?php echo $flightValue['arrivalAirportCode']  ?> , <?php echo $flightValue['arrivalCountry']  ?><b> <?php echo $arrivalTime; ?> </b></h6>
                                                  <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                </td>
                                              </tr>
                                            </tbody></table>
                                          </div>
                                     
                                            <div id="tab2" class="tab">
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare(<?php echo count($flightValue['adultBaseFare']); ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $flightValue['adultBaseFare']; ?> </td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fees( <?php echo count($flightValue['adultBaseFare']); ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $flightValue['adultTaxFare']; ?></td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare( <?php echo count($flightValue['adultBaseFare']); ?> Adult )</b></td>
                                                  <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> <?php echo $flightValue['adultTotalFare']; ?></b></td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                     
                                            <div id="tab3" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flightCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?>  (<?php echo $flightValue['flghtCode'] ?>-<?php echo $flightValue['flghtNumber']; ?>)</h6></li>
                                              </ul>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                  <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue['adultCheckInBaggage']; ?> (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['adultCabinBaggage']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <?php error_reporting(0); if($flightValue['childCheckInBaggage']!= ''){ ?>
                                            <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Child</td>
                                                  <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue['childCheckInBaggage']; ?> (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['childCabinBaggage']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                              </table>
                                              <?php }if($flightValue['infantCabinBaggage'] != ''){ ?>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Infant</td>
                                                  <!-- <td style="border: 1px solid #e0e0e0;"><?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['iB']; ?> (1 piece only)</td> -->
                                                  <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['infantCabinBaggage']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <?php } ?>
                                              <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                            </div>
                                     
                                            <div id="tab4" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                <li>
                                                  <h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']; ?>  - <?php echo $flightValue['arrivalAirportCode'] ; ?> </h6>
                                              </li>
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
                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                            <script>
                         $(document).ready(function() {
                            $('#show-more-content<?php echo $i; ?>').hide();

                          $('#show-more<?php echo $i; ?>').click(function(){
                            $('#show-more-content<?php echo $i; ?>').show(300);
                            $('#show-less<?php echo $i; ?>').show();
                            $('#show-more<?php echo $i; ?>').hide();
                          });

                          $('#show-less<?php echo $i; ?>').click(function(){
                            $('#show-more-content<?php echo $i; ?>').hide(150);
                            $('#show-more<?php echo $i; ?>').show();
                            $(this).hide();
                          });
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
                      <?php 
                       //$j++; 
                          $i++;
                          }
                          
                        }
                      ?>
                  </tbody>
                </table>
              </div>                
            </div>
            <div id="content2" class="pagecont">
                
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
                  <?php 
                      
                    if(count($completeResultReturn) == 0){

                        echo "No Flights Available!";


                    }else{

                 //   echo '<pre>'; print_r(($completeResultReturn)); die;
                      $totalTwoWayFlights = count($completeResultReturn);

                      $i=0;
                      foreach($completeResultReturn as $key => $flightValue) { 

                       // echo '<pre>'; print_r($flightValue); die;
                        //echo '<pre>';  print_r($completeResult[$i]['totalPriceList']); die;
                       // echo '<pre>'; print_r($completeResult[$i]['sI']);
                       //$j=0;
                        //foreach ($completeResult[$i]['sI'] as $key => $flightSIValue) {

                          //error_reporting(0);
                        //echo '<pre>'; print_r($completeResult[$i]['sI'][$j]['fD']['aI']['code']);

                        //$SICount =   count($completeResult[$i]['sI']);

                          // get duration 

                          $minutes = $flightValue['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60);

                          // depature time 

                           $departureTime = date("H:i",strtotime($flightValue['departureTime']));

                          // arrival time 
                          $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));

                          //  //stops 

                          $stop = $flightValue['noOfStops'];
                          if($stop == 0){

                            $st= 'Non-Stop';

                          }else{

                            $st= $stop. ' Stops';

                          }


                          // fare details 

                          // $adultCount = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TF'];
                          // @$childCount = $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']; 
                          // @$infantCount = $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['fC']['TF']; 

                          $grossTotal = $flightValue['totalFare']; 

                          $uniqueFlightId = $flightValue['flightId'];
                          //echo $uniqueFlightId; die; 


                          // taxes and fares 

                          // $adultTaxes = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TAF'];
                          // $adultbase = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['BF'];



                       // echo   '<pre>'; print_r($completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']); die;

                    ?>


                            <tr>
                              <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></td>
                                <td>
                                  <h6><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                  <p><?php echo $flightValue['departureAirportCode']  ?>  <?php echo $flightValue['departureCity']  ?> , <?php echo $flightValue['departureCountry'] ?></p>
                                  <h6><p> <?php echo $departureTime; ?></p></h6>
                                </td>
                                <td>
                                  <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                                </td>
                                <td>
                                  
                                <P><?php echo $flightValue['arrivalAirportCode']  ?>  <?php echo $flightValue['arrivalCity'] ?>, <?php echo $flightValue['arrivalCountry'] ?></P>
                                <h6> <?php echo $arrivalTime; ?></h6>
                                 
                                </td>
                                <?php if($bookingType == 'O'){ ?>
                                <td>
                                  <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong></h6>
                                </td>
                                <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/details/")?><?php echo $uniqueFlightId; ?>">BOOK</a></button></td>
                                <?php }else{?>
                                <td>
                                 
                                  <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onclick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                </td>
                                <?php } ?>
                            </tr>
                            <tr>
                              <td class="content" colspan="6">
                                <div id="show-more<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">Flight Details</a></div>
                                <div id="show-more-content<?php echo $i; ?>" style="display: none;">
                                  <div id="show-less<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">Flight Details</a></div>
                                  <section>
                                    <div class="tabs">
                                      <ul class="tab-links">
                                          <li class="active"><a href="#tab1"> Flight Information</a></li>
                                          <li><a href="#tab2"> Fare Details</a></li>
                                          <li><a href="#tab3"> Baggage Rules</a></li>
                                          <li><a href="#tab4"> Fare Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tbody><tr>
                                                <td class="text-center">
                                                  <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt="">
                                                </td>
                                                <td style="text-align: right;">
                                                  <h6 style="display: block;"><?php //echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                                  <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>
                                                  <h6 style="display: block;"><p> <?php echo $departureTime; ?></p></h6>
                                                </td>
                                                <td>
                                                  <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                  <p style="text-align:center;">Flight Duration</p>
                                                </td>
                                                <td>
                                                  <h6><?php echo $flightValue['arrivalAirportCode']  ?> , <?php echo $flightValue['arrivalCountry']  ?><b> <?php echo $arrivalTime; ?> </b></h6>
                                                  <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                </td>
                                              </tr>
                                            </tbody></table>
                                          </div>
                                     
                                            <div id="tab2" class="tab">
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare(<?php echo count($flightValue['adultBaseFare']); ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $flightValue['adultBaseFare']; ?> </td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fess( <?php echo count($flightValue['adultBaseFare']); ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $flightValue['adultTaxFare']; ?></td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare( <?php echo count($flightValue['adultBaseFare']); ?> Adult )</b></td>
                                                  <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> <?php echo $flightValue['adultTotalFare']; ?></b></td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                     
                                            <div id="tab3" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?>  (<?php echo $flightValue['flghtCode'] ?>-<?php echo $flightValue['flghtNumber']; ?>)</h6></li>
                                              </ul>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                  <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue['adultCheckInBaggage']; ?> (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['adultCabinBaggage']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <?php error_reporting(0); if($flightValue['childCheckInBaggage']!= ''){ ?>
                                            <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Child</td>
                                                  <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue['childCheckInBaggage']; ?> (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['childCabinBaggage']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                              </table>
                                              <?php }if($flightValue['infantCabinBaggage'] != ''){ ?>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Infant</td>
                                                  <!-- <td style="border: 1px solid #e0e0e0;"><?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['iB']; ?> (1 piece only)</td> -->
                                                  <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['infantCabinBaggage']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <?php } ?>
                                              <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                            </div>
                                     
                                            <div id="tab4" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;"><?php //echo $completeResult[$i]['sI'][$j]['da']['code']  ?>  - <?php //echo $completeResult[$i]['sI'][$j]['aa']['code']  ?> </h6></li>
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
                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                            <script>
                         $(document).ready(function() {
                            $('#show-more-content<?php echo $i; ?>').hide();

                          $('#show-more<?php echo $i; ?>').click(function(){
                            $('#show-more-content<?php echo $i; ?>').show(300);
                            $('#show-less<?php echo $i; ?>').show();
                            $('#show-more<?php echo $i; ?>').hide();
                          });

                          $('#show-less<?php echo $i; ?>').click(function(){
                            $('#show-more-content<?php echo $i; ?>').hide(150);
                            $('#show-more<?php echo $i; ?>').show();
                            $(this).hide();
                          });
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
                      <?php 
                       //$j++; 
                          $i++;
                          }
                          
                        }
                      ?>
                  </tbody>
                </table>
              </div>
                  
              </div>
                <div id="content3" class="pagecont">

                <b class="blue">JAVASCRIPT</b> is the programming language of HTML and the Web.<br/></p>
                   <p> <b class="blue">JAVASCRIPT</b> to program the behavior of web pages. It is most well-known as the scripting language for Web pages and is a computer programming language commonly used to create interactive effects within web browsers.</p>


              <h3>Example:</h3>

              <!-- credits to w3schools -->
              <button onclick="document.getElementById('myImage').src='https://s13.postimg.org/fzpmy7snb/pic_bulbon.gif'">Turn on the light</button>

              <img id="myImage" src="https://s17.postimg.org/j929mofi7/pic_bulboff.gif" style="width:100px">

              <button onclick="document.getElementById('myImage').src='https://s17.postimg.org/j929mofi7/pic_bulboff.gif'">Turn off the light</button>
                  
              </div>
                  
              </div>  


          <?php } if($bookingType != 'O' && $bookingType != 'M'){ ?>
              <div class="row">
                <div id="flightSingleReturn"> 
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
                          <?php 
                        $i=0;
                        foreach($completeResult as $key => $flightValue) { 
                        
                        
                          $minutes = $flightValue['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60);
                          
                          
                          $departureTime = date("H:i",strtotime($flightValue['departureTime']));

                          // arrival time 
                          $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));

                          //  //stops 

                          $stop = $flightValue['noOfStops'];
                          if($stop == 0){

                            $st= 'Non-Stop';

                          }else{

                            $st= $stop. ' Stops';

                          }

                      
                          $grossTotal = $flightValue['pricelist'][0]['totalFare']; 

                          $uniqueFlightId = $flightValue['pricelist'][0]['flightId'];
                      
                          ?>
                          <?php 

                          
                          
                          ?>
                          <tr>
                            <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></td>
                              <td>
                                <h6><?php echo $flightValue['flghtName']; ?> <?php echo $departureTime; ?>(<?php echo $st; ?>)</h6>
                                <p><?php echo $flightValue['departureAirportCode'] ?>, <?php echo $flightValue['departureCountry'] ?></p>
                              </td>
                              <td>
                                <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                              </td>
                              <td>
                                <h6><?php echo $arrivalTime; ?></h6>
                                <P><?php echo $flightValue['departureAirportCode'] ?>, <?php echo $flightValue['departureCountry'] ?></P>
                              </td>
                            
                              <td>
                                <input type ="hidden" name="flightId" id="flightId" value="<?php echo $uniqueFlightId; ?>">
                                <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" <?php if($completeResult[0] == $flightValue){ echo "checked"; } ?> style="height: 16px;width: 20px;margin-top: 0px;"  onclick="getFlight1('<?php echo $uniqueFlightId; ?>');"></h6>
                              
                              </td>
                            </tr> 
                            <tr>
                                <td class="content" colspan="6">
                                  <div id="show-more<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">Flight Details</a></div>
                                  <div id="show-more-content<?php echo $i; ?>" style="display: none;">
                                    <div id="show-less<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">Flight Details</a></div>
                                    <section>
                                      <div class="tabs">
                                        <ul class="tab-links">
                                            <li class="active"><a href="#tab1"> Flight Information</a></li>
                                            <li><a href="#tab2"> Fare Details</a></li>
                                            <li><a href="#tab3"> Baggage Rules</a></li>
                                            <li><a href="#tab4"> Fare Rules</a></li>
                                        </ul>
                                      
                                          <div class="tab-content">
                                            <div id="tab1" class="tab active">
                                              <table>
                                                <tbody><tr>
                                                  <td class="text-center">
                                                    <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt="">
                                                  </td>
                                                  <td style="text-align: right;">
                                                    <h6 style="display: block;"><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                                    <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>
                                                    <h6 style="display: block;"><p> <?php echo $departureTime; ?></p></h6>
                                                  </td>
                                                  <td>
                                                    <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                    <p style="text-align:center;">Flight Duration</p>
                                                  </td>
                                                  <td>
                                                    <h6><?php echo $flightValue['arrivalAirportCode']  ?> , <?php echo $flightValue['arrivalCountry']  ?><b> <?php echo $arrivalTime; ?> </b></h6>
                                                    <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                  </td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                      
                                              <div id="tab2" class="tab">
                                                <table>
                                                  <tbody>
												  
												  <tr>
												
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare(<?php echo $flightValue['countadultPax']; ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $basefares_Adult = $flightValue['adultBaseFare'] * $flightValue['countadultPax']; ?> </td>
                                                </tr>
												<tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fees( <?php echo $flightValue['countadultPax']; ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = $flightValue['adultTaxFare'] * $flightValue['countadultPax']; ?></td>
                                                </tr>
												
												
												<?php if($flightValue['countchildPax'] != 0) { ?>
												
												<tr>
                                                  <td style="border: 1px solid #e0e0e0;">Child Fare(<?php echo $flightValue['countchildPax']; ?> Child )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $basefares_Child = $flightValue['childBaseFare'] * $flightValue['countchildPax']; ?> </td>
                                                </tr>
												<tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fees( <?php echo $flightValue['countchildPax']; ?> Child )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Child =  $flightValue['childTaxFare'] * $flightValue['countchildPax']; ?></td>
                                                </tr>
												<?php } ?>
												
												<?php if($flightValue['countinfantPax'] != 0) { ?>
												
												<tr>
                                                  <td style="border: 1px solid #e0e0e0;">Infant Fare(<?php echo $flightValue['countinfantPax']; ?> Infant )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $basefares_Inafant = $flightValue['infantBaseFare'] * $flightValue['countinfantPax']; ?> </td>
                                                </tr>
												<tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fees( <?php echo $flightValue['countinfantPax']; ?> Infant )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Infant = $flightValue['infantTaxFare'] * $flightValue['countinfantPax']; ?></td>
                                                </tr>
												<?php } ?>
												
                                                
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare</b></td>
                                              <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> <?php echo $basefares_Adult  + $taxes_Adult + @$basefares_Child + @$taxes_Child  + @$basefares_Inafant + @$taxes_Infant; ?></b></td>
                                                </tr>
                                                </tbody></table>
                                              </div>
                                      
                                              <div id="tab3" class="tab">
                                                <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                  <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                  <li><h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?>  (<?php echo $flightValue['flghtCode'] ?>-<?php echo $flightValue['flghtNumber']; ?>)</h6></li>
                                                </ul>
                                                <table>
                                                  <tbody><tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                    <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue['adultCheckInBaggage']; ?> (1 piece only)</td>
                                                    <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['adultCabinBaggage']; ?> (1 piece only)</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <?php error_reporting(0); if($flightValue['childCheckInBaggage'] != ''){ ?>
                                              <table>
                                                  <tbody><tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Child</td>
                                                    <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue['childCheckInBaggage']; ?> (1 piece only)</td>
                                                    <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['childCabinBaggage']; ?> (1 piece only)</td>
                                                  </tr>
                                                </tbody>
                                                </table>
                                                <?php }if($flightValue['infantCabinBaggage'] != ''){ ?>
                                                <table>
                                                  <tbody><tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Infant</td>
                                                    <!-- <td style="border: 1px solid #e0e0e0;"><?php //echo $flightValue['infantCheckInBaggage']; ?> (1 piece only)</td> -->
                                                    <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue['infantCabinBaggage']; ?> (1 piece only)</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <?php } ?>
                                                <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                              </div>
                                      
                                              <div id="tab4" class="tab">
                                                <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                  <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                  <li><h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?> </h6></li>
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
                              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                              <script>
                          $(document).ready(function() {
                              $('#show-more-content<?php echo $i; ?>').hide();

                            $('#show-more<?php echo $i; ?>').click(function(){
                              $('#show-more-content<?php echo $i; ?>').show(300);
                              $('#show-less<?php echo $i; ?>').show();
                              $('#show-more<?php echo $i; ?>').hide();
                            });

                            $('#show-less<?php echo $i; ?>').click(function(){
                              $('#show-more-content<?php echo $i; ?>').hide(150);
                              $('#show-more<?php echo $i; ?>').show();
                              $(this).hide();
                            });
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
                            <?php //} ?>
                            <?php $i++;} ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
          
                <div id="flightDoubleReturn">
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
                        <?php //echo '<pre>';  print_r($completeResultReturn); die;

                          $ii=0;
                          foreach($completeResultReturn  as $key => $flightValue1) { 
                          // $jj=0;

                          // $return = @$flightValue1[$ii]['sI'][$jj]['isRs'];


                            $minutes = $flightValue1['duration'];
                            $hours = floor($minutes / 60);
                            $min = $minutes - ($hours * 60);
                            
                            // depature time 

                            $departureTime = date("H:i",strtotime($flightValue1['departureTime']));

                            // arrival time 
                            $arrivalTime = date("H:i",strtotime($flightValue1['arrivalTime']));

                            //  //stops 

                            $stop = $flightValue1['stops'];
                            if($stop == 0){

                              $st= 'Non-Stop';

                            }else{

                              $st= $stop. ' Stops';

                            }

                            // fare details 

                            // $adultCount = $completeResultReturn[$ii]['totalPriceList'][$jj]['fd']['ADULT']['fC']['TF'];
                            // @$childCount = $completeResultReturn[$ii]['totalPriceList'][$jj]['fd']['CHILD']['fC']['TF']; 
                            // @$infantCount = $completeResultReturn[$ii]['totalPriceList'][$jj]['fd']['INFANT']['fC']['TF']; 

                            $grossTotal = $flightValue1['totalFare'];

                            $uniqueFlightIds = $flightValue1['flightId'];

                            ?>
                            <tr>
                              <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" alt=""></td>
                                <td>
                                  <h6><?php echo $flightValue1['flghtCode']; ?> <?php echo $departureTime; ?>(<?php echo $st; ?>)</h6>
                                  <p><?php echo $flightValue1['departureAirportCode'] ?>, <?php echo $flightValue1['departureCountry'] ?></p>
                                </td>
                                <td>
                                  <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                                </td>
                                <td>
                                  <h6><?php echo $arrivalTime; ?></h6>
                                  <P><?php echo $flightValue1['arrivalAirportCode'] ?>, <?php echo $flightValue1['arrivalCountry'] ?></P>
                                </td>
                                <td>
                                  <input type ="hidden" name="flightIds" id="flightIds" value="<?php echo $uniqueFlightIds; ?>">
                                  <h6><strong class="color-red-3"><i class="fa fa-inr"></i> &nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price1" <?php if($completeResultReturn[0] == $flightValue1){ echo "checked"; } ?>  style="height: 16px;width: 20px;margin-top: 0px;"  onclick="getFlight2('<?php echo $uniqueFlightIds; ?>');"></h6>
                                  <!--<p class="emi">EMI $99/Month</p>-->
                                </td>
                              </tr> 
                              <tr>
                                <td class="content" colspan="6">
                                  <div id="show-more<?php echo $ii; ?>" style="display: block;"><a href="javascript:void(0)">Flight Details</a></div>
                                  <div id="show-more-content<?php echo $ii; ?>" style="display: none;">
                                    <div id="show-less<?php echo $ii; ?>" style="display: none;"><a href="javascript:void(0)">Flight Details</a></div>
                                    <section>
                                      <div class="tabs">
                                        <ul class="tab-links">
                                            <li class="active"><a href="#tab1"> Flight Information</a></li>
                                            <li><a href="#tab2"> Fare Details</a></li>
                                            <li><a href="#tab3"> Baggage Rules</a></li>
                                            <li><a href="#tab4"> Fare Rules</a></li>
                                        </ul>
                                      
                                          <div class="tab-content">
                                            <div id="tab1" class="tab active">
                                              <table>
                                                <tbody><tr>
                                                  <td class="text-center">
                                                    <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" alt="">
                                                  </td>
                                                  <td style="text-align: right;">
                                                    <h6 style="display: block;"><?php echo $flightValue1['flghtName'] ?> <?php echo $flightValue1['flghtCode'] ?> - <?php echo $flightValue1['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                                    <p class="content-p"><?php echo $flightValue1['departureAirportCode']  ?> , <?php echo $flightValue1['departureCountry']  ?></p>
                                                    <h6 style="display: block;"><p> <?php echo $departureTime; ?></p></h6>
                                                  </td>
                                                  <td>
                                                    <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                    <p style="text-align:center;">Flight Duration</p>
                                                  </td>
                                                  <td>
                                                    <h6><?php echo $flightValue1['arrivalAirportCode']  ?> , <?php echo $flightValue1['arrivalCountry']  ?><b> <?php echo $arrivalTime; ?> </b></h6>
                                                    <p class="content-p"> <?php echo $flightValue1['arrivalAirportName']  ?> , <?php echo $flightValue1['arrivalCountry']  ?></p>
                                                  </td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                      
                                              <div id="tab2" class="tab">
                                                <table>
                                                  <tbody><tr>
                                                    <td style="border: 1px solid #e0e0e0;">Base Fare(<?php echo count($flightValue1['adultBaseFare']); ?> Adult )</td>
                                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $flightValue1['adultBaseFare']; ?> </td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Taxes and Fess( <?php echo count($flightValue1['adultBaseFare']); ?> Adult )</td>
                                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $flightValue1['adultTaxFare']; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;"><b>Total Fare( <?php echo count($flightValue1['adultBaseFare']); ?> Adult )</b></td>
                                                    <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> <?php echo $flightValue1['adultTotalFare']; ?></b></td>
                                                  </tr>
                                                </tbody></table>
                                              </div>
                                      
                                              <div id="tab3" class="tab">
                                                <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                  <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                  <li><h6 style="line-height:25px;"><?php echo $flightValue1['departureAirportCode']  ?>  - <?php echo $flightValue1['arrivalAirportCode']  ?>  (<?php echo $flightValue1['flghtCode'] ?>-<?php echo $flightValue1['flghtNumber']; ?>)</h6></li>
                                                </ul>
                                                <table>
                                                  <tbody>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                    <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue1['adultCheckInBaggage']; ?> (1 piece only)</td>
                                                    <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue1['adultCabinBaggage']; ?> (1 piece only)</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Child</td>
                                                    <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue1['childCheckInBaggage']; ?> (1 piece only)</td>
                                                    <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue1['childCabinBaggage']; ?> (1 piece only)</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Infant</td>
                                                    <td style="border: 1px solid #e0e0e0;"><?php echo $flightValue1['infantCheckInBaggage']; ?> (1 piece only)</td>
                                                    <td style="border: 1px solid #e0e0e0;"> <?php echo $flightValue1['infantCabinBaggage']; ?> (1 piece only)</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <?php error_reporting(0); //if($completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['bI']['iB'] != ''){ ?>
                                              <table>
                                                  <tbody><tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Child</td>
                                                    <td style="border: 1px solid #e0e0e0;"><?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['bI']['iB']; ?> (1 piece only)</td>
                                                    <td style="border: 1px solid #e0e0e0;"> <?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['bI']['cB']; ?> (1 piece only)</td>
                                                  </tr>
                                                </tbody>
                                                </table>
                                                <?php //}if($completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['iB'] != ''){ ?>
                                                <table>
                                                  <tbody><tr>
                                                    <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                    <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                    <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="border: 1px solid #e0e0e0;">Infant</td>
                                                    <td style="border: 1px solid #e0e0e0;"><?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['iB']; ?> (1 piece only)</td>
                                                    <td style="border: 1px solid #e0e0e0;"> <?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['cB']; ?> (1 piece only)</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <?php //} ?>
                                                <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                              </div>
                                      
                                              <div id="tab4" class="tab">
                                                <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                  <li><img src="<?php echo base_url('uploads/flights/');?><?php //echo $completeResult[$i]['sI'][$j]['fD']['aI']['code'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                  <li><h6 style="line-height:25px;"><?php //echo $completeResult[$i]['sI'][$j]['da']['code']  ?>  - <?php //echo $completeResult[$i]['sI'][$j]['aa']['code']  ?> </h6></li>
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
                              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                              <script>
                          $(document).ready(function() {
                              $('#show-more-content<?php echo $ii; ?>').hide();

                            $('#show-more<?php echo $ii; ?>').click(function(){
                              $('#show-more-content<?php echo $ii; ?>').show(300);
                              $('#show-less<?php echo $ii; ?>').show();
                              $('#show-more<?php echo $ii; ?>').hide();
                            });

                            $('#show-less<?php echo $ii; ?>').click(function(){
                              $('#show-more-content<?php echo $ii; ?>').hide(150);
                              $('#show-more<?php echo $ii; ?>').show();
                              $(this).hide();
                            });
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
                              <?php  $ii++;} ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>

              

        <!--      <div class="pagination-content text-center">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                </ul>
              </div> -->
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


     // var fid = $("#flightId").val();
      var fids = $("#flightIds").val();
      //alert(fids);

      var flightId = id;
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

    function getFlight2(id){    

     var fid = $("#flightId").val();
     // var fids = $("#flightIds").val();

      var flightId = fid;
      var flightIds = id;     

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
        //return false;
      }
      }).data("ui-autocomplete")._renderItem = function( ul, item ) {
    return $( "<li class='ui-autocomplete-row'></li>" )
    .data( "item.autocomplete", item )
    .append( item.label )
    .appendTo( ul );
    };

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
       //return false;
      }
      }).data("ui-autocomplete")._renderItem = function( ul, item ) {
    return $( "<li class='ui-autocomplete-row'></li>" )
    .data( "item.autocomplete", item )
    .append( item.label )
    .appendTo( ul );
    };

  });

</script>


<script>
  $(".form-control")
.datepicker({
  dateFormat: "d M y",
    onSelect: function(dateText) {
        console.log("Selected date: " + dateText + "; input's current value: " + this.value);
    }
    beforeShow: function() {
        $(this).datepicker('option', 'minDate', $('#departure_date').val());
        if ($('#departure_date').val() === '') $(this).datepicker('option', 'minDate', 0);                             
      }
})
.on("change", function() {
    console.log("Got change event from field");
});
</script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script>
  function exchangeDate(){   

    $("#returnway").prop("checked", true);


  }


  $(document).ready(function() {

    <?php if($bookingType == 'O'){ ?>

    $("#return_date").prop('disabled', true);

    <?php } ?>

    $('#oneway').on('click', function()  {

      $("#return_date").prop('disabled', true);

    });

    $('#returnway').on('click', function()  {

      $("#return_date").prop('disabled', false);

    });

  });

  $("#updateTraveller").on("click",function(){ 

    var adultPax = $("#adultPax").val();
    var childPax = $("#childPax").val();
    var infantPax = $("#infantPax").val();
    var travelClass = $("#travelClass").val();

    var totalPax = parseInt(adultPax)+parseInt(childPax)+parseInt(infantPax);          

    var finalPassenger = totalPax + ' ' + 'Traveller(s),' +  travelClass; 

    $('#passenger').val(finalPassenger);

    var cont = document.getElementById('cont');
    cont.style.display = 'none';

  });

  $(function() {
        $("form[name='searchflight']").validate({
         // $('#myTextarea').prop('required',true);

    
      rules: {
       
          departure: {

          required : true,
          minlength: 3

          },      
          destination: {

          required: true,
          minlength: 3       
           
          },
          
          departure_date: {

            required: true,

          }
        
        },
    
      messages: {
        departure:{ 
        required : "Please enter Origin",
        minlength : "Origin should be 3 Letters. "
        },
        destination: {
        required: "Please enter destination",
        minlength : "Destination should be 3 Letters. "
        },
        departure_date: {

        required: "Please select departure date."

        },
      },
      
      submitHandler: function(form) {
        form.submit();
      }
    
   });
  });

function exchangeCity(){
  
  var pickup = $('#search_departure').val();
  $('#search_departure').val($('#search_destination').val());
  $('#search_destination').val(pickup);

}


 $('#price_range').slider({
        range:true,
        min:0,
        max:<?php echo $maximumPrice; ?>,
        values:[0,65000],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            getPage();
        }

    });

    $('#price_rangee').slider({
        range:true,
        min:500,
        max:65000,
        values:[500,65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_showw').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_reminimum_price').val(ui.values[0]);
            $('#hidden_remaximum_price').val(ui.values[1]);
            getPage1();
        }

    });

jQuery(document).ready(function($){
	$('#before11').on('change', function(){
    	if($(this).is(':checked')){
           $("#before111").css('background-color',"#244082");
           $("#before1111").css('color',"#ffffff");
        } else {
            $("#before111").css('background-color',"#f3f6f8");
            $("#before1111").css('color',"#000000");
        }
    })
    $('#after11').on('change', function(){
    	if($(this).is(':checked')){
           $("#after111").css('background-color',"#244082");
           $("#after1111").css('color',"#ffffff");
        } else {
            $("#after111").css('background-color',"#f3f6f8");
            $("#after1111").css('color',"#000000");
        }
    })
    $('#after5').on('change', function(){
    	if($(this).is(':checked')){
           $("#after55").css('background-color',"#244082");
           $("#after555").css('color',"#ffffff");
        } else {
            $("#after55").css('background-color',"#f3f6f8");
            $("#after555").css('color',"#000000");
        }
    })
    $('#after9').on('change', function(){
    	if($(this).is(':checked')){
           $("#after99").css('background-color',"#244082");
           $("#after999").css('color',"#ffffff");
        } else {
            $("#after99").css('background-color',"#f3f6f8");
            $("#after999").css('color',"#000000");
        }
    })

    $('#directstop').on('change', function(){
    	if($(this).is(':checked')){
           $("#directst").css('background-color',"#244082");
           $("#directstt").css('color',"#ffffff");
        } else {
            $("#directst").css('background-color',"#f3f6f8");
            $("#directstt").css('color',"#000000");
        }
    })

    $('#onestop').on('change', function(){
    	if($(this).is(':checked')){
           $("#onest").css('background-color',"#244082");
           $("#onestt").css('color',"#ffffff");
        } else {
            $("#onest").css('background-color',"#f3f6f8");
            $("#onestt").css('color',"#000000");
        }
    })

    $('#twostop').on('change', function(){
    	if($(this).is(':checked')){
           $("#twost").css('background-color',"#244082");
           $("#twostt").css('color',"#ffffff");
        } else {
            $("#twost").css('background-color',"#f3f6f8");
            $("#twostt").css('color',"#000000");
        }
    })

    $('#retbefore11').on('change', function(){
    	if($(this).is(':checked')){
           $("#retbefore111").css('background-color',"#244082");
           $("#retbefore1111").css('color',"#ffffff");
        } else {
            $("#retbefore111").css('background-color',"#f3f6f8");
            $("#retbefore1111").css('color',"#000000");
        }
    })

    $('#retafter11').on('change', function(){
    	if($(this).is(':checked')){
           $("#retafter111").css('background-color',"#244082");
           $("#reafter1111").css('color',"#ffffff");
        } else {
            $("#retafter111").css('background-color',"#f3f6f8");
            $("#reafter1111").css('color',"#000000");
        }
    })
    $('#reafter5').on('change', function(){
    	if($(this).is(':checked')){
           $("#reafter55").css('background-color',"#244082");
           $("#reafter555").css('color',"#ffffff");
        } else {
            $("#reafter55").css('background-color',"#f3f6f8");
            $("#reafter555").css('color',"#000000");
        }
    })
    $('#reafter9').on('change', function(){
    	if($(this).is(':checked')){
           $("#reafter99").css('background-color',"#244082");
           $("#reafter999").css('color',"#ffffff");
           
         
        } else {
            $("#reafter99").css('background-color',"#f3f6f8");
           $("#reafter999").css('color',"#00000");

        }
    })
    $('#redirectstop').on('change', function(){
    	if($(this).is(':checked')){
           $("#redirectst").css('background-color',"#244082");
           $("#redirectstt").css('color',"#ffffff");
           
         
        } else {
            $("#redirectst").css('background-color',"#f3f6f8");
           $("#redirectstt").css('color',"#00000");

        }
    })

    $('#reonestop').on('change', function(){
    	if($(this).is(':checked')){
           $("#reonest").css('background-color',"#244082");
           $("#reonestt").css('color',"#ffffff");
           
         
        } else {
            $("#reonest").css('background-color',"#f3f6f8");
           $("#reonestt").css('color',"#00000");

        }
    })

    $('#retwostop').on('change', function(){
    	if($(this).is(':checked')){
           $("#retwost").css('background-color',"#244082");
           $("#retwostt").css('color',"#ffffff");
           
         
        } else {
            $("#retwost").css('background-color',"#f3f6f8");
           $("#retwostt").css('color',"#00000");

        }
    })
})

function getPage(){
  
// alert("hello");
  var airline_id = [];
  $.each($("input[name='airline']:checked"), function(){            
      airline_id.push($(this).val());
  });
  var myairline_id=airline_id.join(", ");
  if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 

  var departure_id = [];
  $.each($("input[name='depatureId']:checked"), function(){            
    departure_id.push($(this).val());
  });
  
  
 var mydiparture_id=departure_id.join(", ");
  if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 
  
   var return_id = [];
  $.each($("input[name='returnId']:checked"), function(){            
    return_id.push($(this).val());
  });
  
  var myreturn_id=return_id.join(", ");
  if(myreturn_id!='') { var ReturnID= myreturn_id; } else { var ReturnID="0"; } 
  
  
  // alert(DipartureID);
  // alert(ReturnID);
  

   var stop_id = [];
    $.each($("input[name='stops']:checked"), function(){            
        stop_id.push($(this).val());
    });
	
   var mystop_id=stop_id.join(", ");
	if(mystop_id!='') { var stopId= mystop_id; } else { var stopId="0"; } 

   
   var departure11 	 = '<?php echo $departure; ?>';
   var destination11 = '<?php echo $destination; ?>';
   var bookingType11 = '<?php echo $bookingType ; ?>';
   var departureDate11 = '<?php echo $departureDate ; ?>';
   var travelClass11 = '<?php echo $travelClass ; ?>';
   var adultPax11 = '<?php echo $adultPax ; ?>';
   var childPax11 = '<?php echo $childPax ; ?>';   
   var infantPax11 = '<?php echo $infantPax ; ?>';
   
   
   
   var returnDate = '';
   
   if(bookingType11 == 'R')	   
	   {
		   var returnDate ='<?php echo $returnDate; ?>';
	   } 
	   //alert(returnDate);
	   
   var max11=$('#hidden_minimum_price').val();
   var min11=$('#hidden_maximum_price').val();
   
  if(max11 != '') {   
   var minimum_price = $('#hidden_minimum_price').val();
  }
  else {
	  var minimum_price = '';
  }
  
   if(min11 != '') { 
   var maximum_price = $('#hidden_maximum_price').val();
   } else {
	    var maximum_price = '';
   }
//   alert(minimum_price);
//   alert(maximum_price);

  $('#flightdata').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>');  
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'returnDate':returnDate,'minimum_price':minimum_price, 'maximum_price':maximum_price},
          success: function( data ) {
            //console.log(data);
            $("#flightdata").html(data);
			
              if(bookingType11 == 'O')	
              {
                $("#flightdata").html(data);
              } else if(bookingType11 == 'R')	 
              {				
                  $("#flightSingleReturn").html(data);
              
                 // $("#flightDoubleReturn").html(data);
               
                
              }
           // response( data );
          }
    });


}

function getPage1(){
  
  // alert("hello");
    var airline_id = [];
    $.each($("input[name='airline']:checked"), function(){            
        airline_id.push($(this).val());
    });
    var myairline_id=airline_id.join(", ");
    if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 
  
    var departure_id = [];
    $.each($("input[name='depatureId']:checked"), function(){            
      departure_id.push($(this).val());
    });
    
     var return_id = [];
    $.each($("input[name='returnId']:checked"), function(){            
      return_id.push($(this).val());
    });
    
    
   var mydiparture_id=departure_id.join(", ");
    if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 
    
    
    var myreturn_id=return_id.join(", ");
    if(myreturn_id!='') { var ReturnID= myreturn_id; } else { var ReturnID="0"; } 
    
    
    // alert(DipartureID);
    // alert(ReturnID);
    
  
     var stop_id = [];
      $.each($("input[name='restops']:checked"), function(){            
          stop_id.push($(this).val());
      });
    
     var mystop_id=stop_id.join(", ");
    if(mystop_id!='') { var stopId= mystop_id; } else { var stopId="0"; } 

    
  
     
     var departure11 	 = '<?php echo $departure; ?>';
     var destination11 = '<?php echo $destination; ?>';
     var bookingType11 = '<?php echo $bookingType ; ?>';
     var departureDate11 = '<?php echo $departureDate ; ?>';
     var travelClass11 = '<?php echo $travelClass ; ?>';
     var adultPax11 = '<?php echo $adultPax ; ?>';
     var childPax11 = '<?php echo $childPax ; ?>';   
     var infantPax11 = '<?php echo $infantPax ; ?>';
     
     
     
     var returnDate = '';
     
     if(bookingType11 == 'R')	   
       {
         var returnDate ='<?php echo $returnDate; ?>';
       } 
       //alert(returnDate);
       
     var max11=$('#hidden_reminimum_price').val();
     var min11=$('#hidden_remaximum_price').val();
     
    if(max11 != '') {   
     var minimum_price = $('#hidden_reminimum_price').val();
    }
    else {
      var minimum_price = '';
    }
    
     if(min11 != '') { 
     var maximum_price = $('#hidden_remaximum_price').val();
     } else {
        var maximum_price = '';
     }
  //   alert(minimum_price);
  //   alert(maximum_price);
     
    $('#flightDoubleReturn').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>');  
    jQuery.ajax({
       url: "<?php echo base_url('flights/flight_filter_return')?>",
            type: 'post',
            dataType: "html",
            data: {'AirlineID':AirlineID,'departureId':DipartureID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'returnDate':returnDate,'minimum_price':minimum_price, 'maximum_price':maximum_price},
            success: function( data ) {
              //console.log(data);
              $("#flightdata").html(data);
        
                if(bookingType11 == 'R')	 
                {				
                   // $("#flightSingleReturn").html(data);
                
                    $("#flightDoubleReturn").html(data);
                 
                  
                }
				else if(bookingType11 == 'O')	
                {
                  $("#flightdata").html(data);
                }
             // response( data );
            }
      });
  
  
  }

</script>


<script>
  $(document).ready(function() {
    $('.pagination-tabs ul li a').click(function() {
        var tab = $(this).attr('data-id');
        $('.pagination-tabs ul li a').removeClass('current-tab');
        $(this).addClass('current-tab');
        $('.pagination-contents .pagecont').each(function() {
            if ($(this).attr('id') == tab) {
                $('.pagecont').removeClass('current');
                $(this).addClass('current');
            };
        });
    });
});


  $(document).ready(function(){

  //  / $("#pricecheck").val();

    $("#pricecheck").attr('checked', 'checked');
  
    //alert(priceIds);

  });


  function getlightDetails(id){

    $("#priceids").val(id);  
    
  }


  function bookFlight(){

    var id = $("#priceids").val();
    $(document).ready(function(){

      var id = $("#priceids").val();
      window.location.href= "<?php echo base_url("flights/details/")?>"+id;

    });

   
   
   

    window.location.href= "<?php echo base_url("flights/details/")?>"+id;

  }


// $(document).ready(function(){

//   $('#priceids11').show();
//   $('#priceids').hide();

//   $('#priceids').click(function(){
//     $('#priceids11').show();

//   });
  

// });



</script>


  </body>
</html>