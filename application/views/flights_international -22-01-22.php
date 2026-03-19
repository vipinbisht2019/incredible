<?php //echo "<pre>"; print_r($flightArray); die; ?>
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
  border-radius: 50%;
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
     line-height: 15px;
}
 .pagination-tabs ul li a:hover, .pagination-tabs ul li a.current-tab{
     background: #6084da00;
     /* color: #6084da; */
     color:#e6374e;
     transition: 2s ease;
     -webkit-transition: 2s ease;
}
.pagination-tabs ul li a span{
  font-size: 12px;
    font-weight: 600;
    color: #939393;
    width: 100%;
}
 .pagination-contents{
     padding: 20px;
     padding-top: 0;
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
.myButton.active {
  color: #c13434;
  content: "\f0d7";
}
.tabr-links a:hover{ background: #3658a9; }
.tabsr {
  box-shadow: none;
}
.tabr-links li.active a, .tabr-links li.active a:hover{ background: #3658a9; border-radius: 18px;}
.tabr-links{ background: #dfe9ff; }
.tabr-links li{ background: #dfe9ff; }
.tabr-links-6{ font-size: 11px!important;padding: 5px 8px 5px 8px!important;width: auto!important;line-height: 13px; }
.tabr-links li.active a, .tabr-links li.active a:hover {
        background:#244082;
        color:#fff;
        border-radius: 30px;
    }
    .tabr-links a:hover {
            background:#244082;
            color: #EBEBEB;
            text-decoration:none;
            border-radius: 30px;
        }
        .tabr-links li:first-child{ margin-left:0px; }
        .tabr-links li {
        margin: 0;
        float:left;
        list-style:none;
        background: #fff0;
        margin: 0px 4px;
    }
    .price-list{
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      height: 125px;
      padding-top: 20px;
    }
    .flight-table .content a{
      left: 0px;
      margin-left: 0px;
      bottom: 28px;
    }
    </style>
  </head>
  <body class="not-front page-pages page-flights">
    <div id="main">
      <?php include('includes/header.php'); ?>
      <?php include('includes/flight_bluebar_search.php'); ?> 
      <section class="flight-destinations">
        <div class="container">
          <div class="row">
            <div class="col-lg-12"> 
              <?php  include('includes/flight_leftmenu.php'); ?>
            <div>
            <div class="col-lg-9">  
              <div id="flightdata">
                <div class="row">
                  <div class="col-md-12">
                    <p>Found 
                      <span><b><?php echo count($flightArray); ?> Flights</b></span>
                      From <?php echo preg_replace("/\([^)]+\)/","",$departure); ?> 
                      To <?php echo preg_replace("/\([^)]+\)/","",$destination); ?>
                    </p>
                  </div>
                </div>
          
                <div class="ars-listbtrow">
                  <div class="ars-listbt">
                    <div class="col-sm-2">
                      <button class="myButton ast-btnforfilter undefined">Sort By : Duration</button>
                    </div>
                    <div class="col-sm-2 no-padding" style="display: flex;justify-content: center;top: 7px;">
                      <button class="myButton ast-btnforfilter">Departure<i class="fa fa-caret-down filter-caret"></i></button>
                    </div>
                    <div class="col-sm-1 no-padding"></div>
                    <div class="col-sm-1 no-padding">
                      <button class="myButton ast-btnforfilter undefined" onclick="sortFlightList(0);">Arrival</button>                    
                    </div>
                    <div class="col-sm-2">
                      <button class="myButton ast-btnforfilter undefined active " onclick="sortFlightList(0);">Price <i class="fa fa-caret-up filter-caret"></i></button>
                    </div>
                    <div class="col-sm-4 no-padding"></div>
                  </div>
                </div>
                <div class="flight-table">
                  <table id="flightSortTable">
                    <tbody>
                      <?php foreach ($flightArray as $key => $flightArrayValue) { 

                             // echo "<pre>"; print_r($flightArrayValue['segmentListValOnward']);

                      ?>
                        <tr style="height: 160px;">
                          <td class="text-center">
                            <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                              <li><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $flightArrayValue['segmentListValOnward'][0]['flightCode']?>.png" alt=""></li>
                              <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightArrayValue['segmentListValOnward'][0]['flightName']?>
                                <br>
                                <?php foreach ($flightArrayValue['segmentListValOnward'] as $key => $onwardValue) { ?>
                                  <span style="font-size:11px;font-weight:400;"><?php echo $onwardValue['flightCode']?>-<?php echo $onwardValue['flightNumber'] ?>,</span>
                                <?php } ?>
                              </li>
                            </ul>
                            <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                              <li><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $flightArrayValue['segmentListValReturn'][2]['flightCode'] ?>.png" alt=""></li>
                              <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightArrayValue['segmentListValReturn'][2]['flightName']; ?>
                              <br>
                              <?php foreach ($flightArrayValue['segmentListValReturn'] as $key => $returnValue) { ?>
                                <span style="font-size:11px;font-weight:400;"><?php echo $returnValue['flightCode']?>-<?php echo $returnValue['flightNumber'] ?>,</span>
                              <?php } ?>
                              </li>
                            </ul>
                          </td>
                          <td>
                            <h6 style="font-size: 18px;color: #363636;font-weight: 600;"><?php $deptTime = date('H:i',strtotime($flightArrayValue['segmentListValOnward'][0]['departureDateNTime'])); echo $deptTime; ?></h6>                              
                            <p> <?php echo $flightArrayValue['segmentListValOnward'][0]['deptCityName']; ?> </p> 
                            <h6 style="font-size: 18px;color: #363636;font-weight: 600;"><?php $retdeptTime = date('H:i',strtotime($flightArrayValue['segmentListValReturn'][2]['departureDateNTime'])); echo $retdeptTime; ?></h6>                              
                            <p> <?php echo $flightArrayValue['segmentListValReturn'][2]['deptCityName']; ?>  </p>                              
                          </td>
                          <td>
                            <?php 
                                
                            ?>                  
                            <h6 style="display: flex;flex-direction: column;text-align: left;font-size: 13px;"><?php echo "1 Stops"; ?>                                
                            <div class="relative fliStopsSep">
                              <p class="fliStopsSepLine" style="border-top: 3px solid rgb(102, 137, 221);"></p>
                            </div>
                            <?php  $totalDuration = $flightArrayValue['segmentListValOnward'][0]['flightDuration'] + @$flightArrayValue['segmentListValOnward'][0]['flightConnectingTime'] + $flightArrayValue['segmentListValOnward'][1]['flightDuration']; ?>
                            <span style="font-size: 9px;"><?php $minutes = $totalDuration; $hours = floor($minutes / 60); $min = $minutes - ($hours * 60); echo $hours."h ".$min."m" ; ?> </span></h6>
                            <?php ?>


                            <h6 style="display: flex;flex-direction: column;text-align: left;font-size: 13px;">2h 20m                                
                            <div class="relative fliStopsSep">
                              <p class="fliStopsSepLine" style="border-top: 3px solid rgb(102, 137, 221);"></p>
                            </div>
                            <span style="font-size: 9px;">Non-Stop</span></h6>
                          </td>
                          <td>
                            <?php 

                                $onwardList[] = end($flightArrayValue['segmentListValOnward']);
                                $returnList[] = end($flightArrayValue['segmentListValReturn']);
                            
                            //foreach ($onwardList as $key => $onwardVal) { ?>
                              <h6 style="font-size: 18px;color: #363636;font-weight: 600;justify-content: center;"> <?php $onarriveTime = date('H:i',strtotime($onwardList[0]['arrivalDateNTime'])); echo $onarriveTime; ?></h6> 
                              <p style="text-align: left;"><?php echo $onwardList[0]['arivCityName']; ?></p>
                            <?php //} 
                           // foreach ($returnList as $key => $returnVal) { ?>
                              <h6 style="font-size: 18px;color: #363636;font-weight: 600;justify-content: center;"> <?php $retarriveTime = date('H:i',strtotime($returnList[0]['arrivalDateNTime'])); echo $retarriveTime; ?></h6> 
                              <p style="text-align: left;"><?php echo $returnList[0]['arivCityName']; ?></p>
                            <?php //}  ?>
                          </td>
                          <td>
                            <ul class="price-list">
                              <?php foreach ($flightArrayValue['pricelist']  as $key => $fareList) { ?>
                              <li>
                                <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                  <input type="radio" class="flightIdsnew" name="fav_language" id="pricecheck0" value="1-3490888382_6DELBOMG8338_23041188450517202" style="width: 18px;height: 18px;margin-top: 0px;" onclick="getlightDetails('1-3490888382_6DELBOMG8338_23041188450517202');getFlightDetails('1-3490888382_6DELBOMG8338_23041188450517202','3769.7','2200','1569.7','1','','','0','','','0'); getFlightBaggageInfo('15 Kg','','7 Kg','','','1-3490888382_6DELBOMG8338_23041188450517202','DEL','BOM'); getFlightFareRules('1-3490888382_6DELBOMG8338_23041188450517202','DEL','BOM'); ">&nbsp;&nbsp;
                                  <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList['totalFare'],2); ?></label>
                                </div>                                
                                <div class="row">
                                  <div class="col-md-12">
                                    <?php if($fareList['fareIdentifier'] == 'PUBLISHED'){ ?>
                                    <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;">SNS Saver</span>  
                                    <?php } ?>                                      
                                    <div class="atls-holder">
                                      <span class="ars-refunsleft ars-lastre">
                                        <?php echo $fareList['adultcabinClassFare']; ?>
                                        <span class="cursor-pointer"></span>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </li>  
                              <?php } ?>                                                          
                            </ul>                                
                          </td>
                          <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;"><button type="button" onclick="bookFlight();" id="priceids" value="" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button></td>
                        </tr>                        
                        <tr>
                          <td class="content" colspan="6">
                            <div id="show-more0" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
                              <div id="show-more-content0" style="display: none;">
                                <div id="show-less0" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
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
                                          <p class="flight-details-top-list"><b><span>Delhi</span><span class="ars-arright">→</span> <span>Mumbai</span></b><span class="graycolor "> Thu, Jan 20 2022</span></p><table>
                                          <tbody>
                                            <tr></tr>
                                            <tr>
                                              <td class="text-center" style="background: #dfe9ff;justify-content: flex-start;align-items: center;">
                                                <img src="http://122.176.21.183/2020/projects/incredible/uploads/flights/G8.png" alt=""> Go First G8 - 338                                                  
                                              </td>
                                              <td style="background: #dfe9ff;">
                                                <span style="font-size: 14px;">Jan 20 ,10:30</span>
                                                <p class="content-p">Delhi Indira Gandhi Intl , India</p>
                                              </td>
                                              <td style="background: #dfe9ff;">
                                                <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20">2h 20m</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                <p style="text-align:center;">Flight Duration</p>
                                              </td>
                                              <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                <span style="font-size: 14px;">Jan 21 , 12:50</span>
                                                <p class="content-p"> Chhatrapati Shivaji , India</p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>                                      
                                      <div id="tab2" class="tab">
                                        <div id="priceDetails">
                                          <table>
                                            <thead>
                                              <tr>
                                                <td><b>Type</b></td>
                                                <td><b>Fare</b></td>
                                                <td><b>Total</b></td>
                                              </tr>
                                            </thead>                                              
                                              <tbody>                                                
                                                
                                                  
                                                          <tr style="background: #dfe9ff;">
                                  
                                                            <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                            
                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> 2,164.00 * 1 </td>

                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> 2,164.00 </td>

                                                          </tr>

                                                          <tr style="background: #dfe9ff;">

                                                            <td style="border: 0px solid #e0e0e0;">Taxes &amp; Fee </td>

                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> 1,567.70  * 1</td>

                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> 1</td>
          
                                                          </tr>
                                                  
                                                                                  
                                                                                                            
                                                            <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                              <td style="border: 0px solid #e0e0e0;">
                                                                <b>Total Fare</b>
                                                              </td>
                                                              <td></td>
                                                              <td style="border: 0px solid #e0e0e0;">
                                                                <b><i class="fa fa-inr"></i> 3,731.70</b>
                                                              </td>

                                                            </tr>

                                                                                                      </tbody>                                             
                                          </table>
                                        </div>
                                      </div>                                  
                                      <div id="tab3" class="tab">
                                        <div id="baggageDetails">
                                          <table style="border: 1px solid #ddd;">
                                            <tbody>
                                              
                                              <tr style="background: #f7f9ff;height: 40px;">
                                                <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Sector</td>
                                                <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Check-In</td>
                                                <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Cabin</td>
                                              </tr>
                                                                                                  
                                              <tr style="background:#dfe9ff;height:40px;">

                                                <td style="border: 0px solid #e0e0e0;">DEL  - BOM</td>

                                                <td style="border: 0px solid #e0e0e0;">Adult: 15 Kg </td>

                                                <td style="border: 0px solid #e0e0e0;">Adult :  7 Kg  </td>

                                              </tr>
                                                                                            </tbody>
                                          </table>  
                                        </div>                                       
                                      </div>                                
                                      <div id="tab4" class="tab">

                                        <div id="farerules">
                                          <div id="divMsg" style="background-color: rgb(234 240 253); color: rgb(255, 255, 255); height: auto; width: 100%; text-align: center; display: block; border-radius: 4px;">
                                            <button class="ars-activelist fare-rules-tabs">DEL-BOM</button>
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
                                    </div>
                                  </section>
                                </div>
                          </td>
                        </tr> 
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                        <script>
                          $(document).ready(function() {
                            $('#show-more-content0').hide();

                            $('#show-more0').click(function(){
                              $('#show-more-content0').show(300);
                              $('#show-less0').show();
                              $('#show-more0').hide();
                            });

                            $('#show-less0').click(function(){
                              $('#show-more-content0').hide(150);
                              $('#show-more0').show();
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
                      <?php } die; //} ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </section>
      <?php include('includes/footer.php'); ?>
      <?php include('includes/js.php'); ?>
    </div>



<!----------------------------------- Start IInd multicity ---------------------------------------->

<script>
  $(document).ready(function() {
	  	  
	   $('#price_range1q').slider({
        range:true,
        min:500,
        max:<?php echo $twomaximumPrice; ?>,
        values:[500,"<?php echo $twomaximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show1q').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price1q').val(ui.values[0]);
            $('#hidden_maximum_price1q').val(ui.values[1]);
            getPageq2();
        }

    });  
	
	});
	
	
function getPageq2(){  	
  
  var airline_id = [];
  $.each($("input[name='airlineq2']:checked"), function(){            
      airline_id.push($(this).val());
  });
  var myairline_id=airline_id.join(", ");
  if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 

 //  alert("hello news22");

  var departure_id = [];
  $.each($("input[name='depatureIdq2']:checked"), function(){            
    departure_id.push($(this).val());
  });
  
  
 var mydiparture_id=departure_id.join(", ");
  if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 

  var arrival_id = [];
  $.each($("input[name='arrivalIdq2']:checked"), function(){            
    arrival_id.push($(this).val());
  });
  
  
 var myarrival_id=arrival_id.join(", ");
  if(myarrival_id!='') { var ArrivalID= myarrival_id; } else { var ArrivalID="0"; } 
  
  
  
   var return_id = [];
  $.each($("input[name='returnId']:checked"), function(){            
    return_id.push($(this).val());
  });
  
  var myreturn_id=return_id.join(", ");
  if(myreturn_id!='') { var ReturnID= myreturn_id; } else { var ReturnID="0"; } 
  

   var stop_id = [];
    $.each($("input[name='stopsq2']:checked"), function(){            
        stop_id.push($(this).val());
    });
	
   var mystop_id=stop_id.join(", ");
	if(mystop_id!='') { var stopId= mystop_id; } else { var stopId="0"; } 

   
   var departure11 	 = '<?php echo $departure1; ?>';
   var destination11 = '<?php echo $destination1; ?>';
   var bookingType11 = '<?php echo $bookingType ; ?>';
   var departureDate11 = '<?php echo $returnDate ; ?>';
   var travelClass11 = '<?php echo $travelClass ; ?>';
   var adultPax11 = '<?php echo $adultPax ; ?>';
   var childPax11 = '<?php echo $childPax ; ?>';   
   var infantPax11 = '<?php echo $infantPax ; ?>';
	   
   var max111=$('#hidden_minimum_price1q').val();
   var min111=$('#hidden_maximum_price1q').val();
   
  if(max111 != '') {   
   var minimum_price1 = $('#hidden_minimum_price1q').val();
  }
  else {
	  var minimum_price1 = '';
  }
  
   if(min111 != '') { 
   var maximum_price1 = $('#hidden_maximum_price1q').val();
   } else {
	    var maximum_price1 = '';
   }

  <?php if($bookingType == 'M'){ ?>
  $('#flightMultidata2').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php } ?>
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'ArrivalId':ArrivalID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'minimum_price':minimum_price1, 'maximum_price':maximum_price1},
          success: function( data ) {
              if(bookingType11 == 'M')	 
              {				
                  $("#flightMultidata2").html(data);
              }
          }
    });
	
}
	 

$(document).ready(function($){
		
    $('#directstopq').on('change', function(){
    	if($(this).is(':checked')){
           $("#directstq").css('background-color',"#244082");
           $("#directsttq").css('color',"#ffffff");
        } else {
            $("#directstq").css('background-color',"#f3f6f8");
            $("#directsttq").css('color',"#000000");
        }
    })

    $('#onestopq').on('change', function(){
    	if($(this).is(':checked')){
           $("#onestq").css('background-color',"#244082");
           $("#onesttq").css('color',"#ffffff");
        } else {
            $("#onestq").css('background-color',"#f3f6f8");
            $("#onesttq").css('color',"#000000");
        }
    })

    $('#twostopq').on('change', function(){
    	if($(this).is(':checked')){
           $("#twostq").css('background-color',"#244082");
           $("#twosttq").css('color',"#ffffff");
        } else {
            $("#twostq").css('background-color',"#f3f6f8");
            $("#twosttq").css('color',"#000000");
        }
    })

    $('#threestopq').on('change', function(){
    	if($(this).is(':checked')){
           $("#threestq").css('background-color',"#244082");
           $("#threesttq").css('color',"#ffffff");
        } else {
            $("#threestq").css('background-color',"#f3f6f8");
            $("#threesttq").css('color',"#000000");
        }
    })
	
	
	
	$('#before11q').on('change', function(){
    	if($(this).is(':checked')){
           $("#before111q").css('background-color',"#244082");
           $("#before1111q").css('color',"#ffffff");
        } else {
            $("#before111q").css('background-color',"#f3f6f8");
            $("#before1111q").css('color',"#000000");
        }
    });	
	
	$('#after11q').on('change', function(){
    	if($(this).is(':checked')){
           $("#after111q").css('background-color',"#244082");
           $("#after1111q").css('color',"#ffffff");
        } else {
            $("#after111q").css('background-color',"#f3f6f8");
            $("#after1111q").css('color',"#000000");
        }
    })
	
	$('#after5q').on('change', function(){
    	if($(this).is(':checked')){
           $("#after55q").css('background-color',"#244082");
           $("#after555q").css('color',"#ffffff");
        } else {
            $("#after55q").css('background-color',"#f3f6f8");
            $("#after555q").css('color',"#000000");
        }
    })
	
	$('#after9q').on('change', function(){
    	if($(this).is(':checked')){
           $("#after99q").css('background-color',"#244082");
           $("#after999q").css('color',"#ffffff");
        } else {
            $("#after99q").css('background-color',"#f3f6f8");
            $("#after999q").css('color',"#000000");
        }
    })
	
	 $('#arrival11q').on('change', function(){
    	if($(this).is(':checked')){
           $("#arrival111q").css('background-color',"#244082");
           $("#arrival1111q").css('color',"#ffffff");
        } else {
            $("#arrival111q").css('background-color',"#f3f6f8");
            $("#arrival1111q").css('color',"#000000");
        }
    })
	
	$('#aafter11q').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter111q").css('background-color',"#244082");
           $("#aafter1111q").css('color',"#ffffff");
        } else {
            $("#aafter111q").css('background-color',"#f3f6f8");
            $("#aafter1111q").css('color',"#000000");
        }
    })
	
	$('#aafter5q').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter555q").css('background-color',"#244082");
           $("#aafter5555q").css('color',"#ffffff");
        } else {
            $("#aafter555q").css('background-color',"#f3f6f8");
            $("#aafter5555q").css('color',"#000000");
        }
    })
	
	$('#aafter9q').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter99q").css('background-color',"#244082");
           $("#aafter999q").css('color',"#ffffff");
        } else {
            $("#aafter99q").css('background-color',"#f3f6f8");
            $("#aafter999q").css('color',"#000000");
        }
    })
    
   
	
 })	  

</script>

<!----------------------------------- End IInd multicity ---------------------------------------->



<!----------------------------------- Start IIIrd multicity ---------------------------------------->

<script>
  $(document).ready(function() {
	  	  
	   $('#price_range3q').slider({
        range:true,
        min:500,
        max:<?php echo $thirdMaximumPrice; ?>,
        values:[500,"<?php echo $thirdMaximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show3q').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price3q').val(ui.values[0]);
            $('#hidden_maximum_price3q').val(ui.values[1]);
            getPageq3();
        }

    });  
	
	});
	
	
function getPageq3(){  	
  
 // alert("hello three news");
   
  var airline_id = [];
  $.each($("input[name='airlineq3']:checked"), function(){            
      airline_id.push($(this).val());
  });
  var myairline_id=airline_id.join(", ");
  if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 

 //  alert("hello news22");

  var departure_id = [];
  $.each($("input[name='depatureIdq3']:checked"), function(){            
    departure_id.push($(this).val());
  });
  
  
 var mydiparture_id=departure_id.join(", ");
  if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 

// alert("hello news33");
  var arrival_id = [];
  $.each($("input[name='arrivalIdq3']:checked"), function(){            
    arrival_id.push($(this).val());
  });
  
  
 var myarrival_id=arrival_id.join(", ");
  if(myarrival_id!='') { var ArrivalID= myarrival_id; } else { var ArrivalID="0"; } 
  
  
  
   var return_id = [];
  $.each($("input[name='returnId']:checked"), function(){            
    return_id.push($(this).val());
  });
  
  var myreturn_id=return_id.join(", ");
  if(myreturn_id!='') { var ReturnID= myreturn_id; } else { var ReturnID="0"; } 
  
 //  alert("hello news44");
  // alert(DipartureID);
  // alert(ReturnID);
  

   var stop_id = [];
    $.each($("input[name='stopsq3']:checked"), function(){            
        stop_id.push($(this).val());
    });
	
   var mystop_id=stop_id.join(", ");
	if(mystop_id!='') { var stopId= mystop_id; } else { var stopId="0"; } 
 // alert("hello news55");
   
   var departure11 	 = '<?php echo $departure13; ?>';
   var destination11 = '<?php echo $destination13; ?>';
   var bookingType11 = '<?php echo $bookingType ; ?>';
   var departureDate11 = '<?php echo $departureDate2 ; ?>';
   var travelClass11 = '<?php echo $travelClass ; ?>';
   var adultPax11 = '<?php echo $adultPax ; ?>';
   var childPax11 = '<?php echo $childPax ; ?>';   
   var infantPax11 = '<?php echo $infantPax ; ?>';   
	   
   var max111=$('#hidden_minimum_price3q').val();
   var min111=$('#hidden_maximum_price3q').val();
   
  if(max111 != '') {   
   var minimum_price1 = $('#hidden_minimum_price3q').val();
  }
  else {
	  var minimum_price1 = '';
  }
  
 // alert(minimum_price1);
//  alert("new minimum_price1");
  
  
   if(min111 != '') { 
   var maximum_price1 = $('#hidden_maximum_price3q').val();
   } else {
	    var maximum_price1 = '';
   }
   
  
  <?php if($bookingType == 'M'){ ?>
  $('#flightMultidata3').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php } ?>
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'ArrivalId':ArrivalID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'minimum_price':minimum_price1, 'maximum_price':maximum_price1},
          success: function( data ) {
            //console.log(data);
           // $("#flightdata").html(data);
			
              // if(bookingType11 == 'O')	
              // {
              //   $("#flightdata").html(data);
              // } else if(bookingType11 == 'R')	 
              // {				
                  //$("#flightSingleReturn").html(data);
              
                 // $("#flightDoubleReturn").html(data);
               
                
              //}else 
              if(bookingType11 == 'M')	 
              {				
                  $("#flightMultidata3").html(data);
              }
           // response( data );
          }
    });
	
}
	 

$(document).ready(function($){
		
    $('#directstopq3').on('change', function(){
    	if($(this).is(':checked')){
           $("#directstq3").css('background-color',"#244082");
           $("#directsttq3").css('color',"#ffffff");
        } else {
            $("#directstq3").css('background-color',"#f3f6f8");
            $("#directsttq3").css('color',"#000000");
        }
    })

    $('#onestopq3').on('change', function(){
    	if($(this).is(':checked')){
           $("#onestq3").css('background-color',"#244082");
           $("#onesttq3").css('color',"#ffffff");
        } else {
            $("#onestq3").css('background-color',"#f3f6f8");
            $("#onesttq3").css('color',"#000000");
        }
    })

    $('#twostopq3').on('change', function(){
    	if($(this).is(':checked')){
           $("#twostq3").css('background-color',"#244082");
           $("#twosttq3").css('color',"#ffffff");
        } else {
            $("#twostq3").css('background-color',"#f3f6f8");
            $("#twosttq3").css('color',"#000000");
        }
    })

    $('#threestopq3').on('change', function(){
    	if($(this).is(':checked')){
           $("#threestq3").css('background-color',"#244082");
           $("#threesttq3").css('color',"#ffffff");
        } else {
            $("#threestq3").css('background-color',"#f3f6f8");
            $("#threesttq3").css('color',"#000000");
        }
    })
	
	
	
	$('#before11q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#before111q3").css('background-color',"#244082");
           $("#before1111q3").css('color',"#ffffff");
        } else {
            $("#before111q3").css('background-color',"#f3f6f8");
            $("#before1111q3").css('color',"#000000");
        }
    });	
	
	$('#after11q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#after111q3").css('background-color',"#244082");
           $("#after1111q3").css('color',"#ffffff");
        } else {
            $("#after111q3").css('background-color',"#f3f6f8");
            $("#after1111q3").css('color',"#000000");
        }
    })
	
	$('#after5q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#after55q3").css('background-color',"#244082");
           $("#after555q3").css('color',"#ffffff");
        } else {
            $("#after55q3").css('background-color',"#f3f6f8");
            $("#after555q3").css('color',"#000000");
        }
    })
	
	$('#after9q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#after99q3").css('background-color',"#244082");
           $("#after999q3").css('color',"#ffffff");
        } else {
            $("#after99q3").css('background-color',"#f3f6f8");
            $("#after999q3").css('color',"#000000");
        }
    })
	
	 $('#arrival11q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#arrival111q3").css('background-color',"#244082");
           $("#arrival1111q3").css('color',"#ffffff");
        } else {
            $("#arrival111q3").css('background-color',"#f3f6f8");
            $("#arrival1111q3").css('color',"#000000");
        }
    })
	
	$('#aafter11q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter111q3").css('background-color',"#244082");
           $("#aafter1111q3").css('color',"#ffffff");
        } else {
            $("#aafter111q3").css('background-color',"#f3f6f8");
            $("#aafter1111q3").css('color',"#000000");
        }
    })
	
	$('#aafter5q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter555q3").css('background-color',"#244082");
           $("#aafter5555q3").css('color',"#ffffff");
        } else {
            $("#aafter555q3").css('background-color',"#f3f6f8");
            $("#aafter5555q3").css('color',"#000000");
        }
    })
	
	$('#aafter9q3').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter99q3").css('background-color',"#244082");
           $("#aafter999q3").css('color',"#ffffff");
        } else {
            $("#aafter99q3").css('background-color',"#f3f6f8");
            $("#aafter999q3").css('color',"#000000");
        }
    })
    
   
	
 })	  


</script>

<!----------------------------------- End IIIrd multicity ---------------------------------------->



<!----------------------------------- Start Forth multicity ---------------------------------------->

<script>
  $(document).ready(function() {
	  	  
	   $('#price_range4q').slider({
        range:true,
        min:500,
        max:<?php echo $fourthMaximumPrice; ?>,
        values:[500,"<?php echo $fourthMaximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show4q').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price4q').val(ui.values[0]);
            $('#hidden_maximum_price4q').val(ui.values[1]);
            getPageq4();
        }

    });  
	
	});
	
	
function getPageq4(){  	
  
 // alert("hello forth news");
   
  var airline_id = [];
  $.each($("input[name='airlineq4']:checked"), function(){            
      airline_id.push($(this).val());
  });
  var myairline_id=airline_id.join(", ");
  if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 

 //  alert("hello news22");

  var departure_id = [];
  $.each($("input[name='depatureIdq4']:checked"), function(){            
    departure_id.push($(this).val());
  });
  
  
 var mydiparture_id=departure_id.join(", ");
  if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 

// alert("hello news33");
  var arrival_id = [];
  $.each($("input[name='arrivalIdq4']:checked"), function(){            
    arrival_id.push($(this).val());
  });
  
  
 var myarrival_id=arrival_id.join(", ");
  if(myarrival_id!='') { var ArrivalID= myarrival_id; } else { var ArrivalID="0"; } 
  
   var return_id = [];
  $.each($("input[name='returnId']:checked"), function(){            
    return_id.push($(this).val());
  });
  
  var myreturn_id=return_id.join(", ");
  if(myreturn_id!='') { var ReturnID= myreturn_id; } else { var ReturnID="0"; } 
  
 //  alert("hello news44");
  // alert(DipartureID);
  // alert(ReturnID);
  

   var stop_id = [];
    $.each($("input[name='stopsq4']:checked"), function(){            
        stop_id.push($(this).val());
    });
	
   var mystop_id=stop_id.join(", ");
	if(mystop_id!='') { var stopId= mystop_id; } else { var stopId="0"; } 
 // alert("hello news55");
   
   var departure11 	 = '<?php echo $departure14; ?>';
   var destination11 = '<?php echo $destination14; ?>';
   var bookingType11 = '<?php echo $bookingType ; ?>';
   var departureDate11 = '<?php echo $departureDate3 ; ?>';
   var travelClass11 = '<?php echo $travelClass ; ?>';
   var adultPax11 = '<?php echo $adultPax ; ?>';
   var childPax11 = '<?php echo $childPax ; ?>';   
   var infantPax11 = '<?php echo $infantPax ; ?>';
   
 /* 
  alert("hello multicity 4");
	
	  alert("hello multicity 3");
	
	alert(departure11);
	
	alert(destination11);
	alert(bookingType11);
	alert(departureDate11);
	alert(travelClass11);
	alert(" 4 forth done");
	alert(adultPax11);
	alert(childPax11);
	alert(infantPax11);
	
alert("start DipartureID");
	alert(DipartureID);
	alert("start ArrivalID");
	alert(ArrivalID);
	alert("start ReturnID");
	alert(ReturnID);
	alert("start stopId");
	alert(stopId);
	alert("airline start");
	alert(AirlineID);
	alert("airline end");
	
*/
	

   
  //  var returnDate = '';
   
  //  if(bookingType11 == 'R')	   
	//    {
	// 	   var returnDate ='<?php //echo $returnDate; ?>';
	//    } 
	   
	   
   var max111=$('#hidden_minimum_price4q').val();
   var min111=$('#hidden_maximum_price4q').val();
   
//	alert(max111);
   //   alert(min111);
   
  if(max111 != '') {   
   var minimum_price1 = $('#hidden_minimum_price4q').val();
  }
  else {
	  var minimum_price1 = '';
  }
  
 // alert(minimum_price1);
//  alert("new minimum_price1");
  
  
   if(min111 != '') { 
   var maximum_price1 = $('#hidden_maximum_price4q').val();
   } else {
	    var maximum_price1 = '';
   }
   
  //   alert(maximum_price1);
 // alert("new maximum_price1");
   
   
  //   alert(minimum_price);
  //   alert(maximum_price);
  <?php //if($bookingType == 'O'){ ?>
  //$('#flightdata').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php //}if($bookingType == 'R'){  ?>
 // $('#flightSingleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  //$('#flightDoubleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  
  
  
  <?php if($bookingType == 'M'){ ?>
  $('#flightMultidata4').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php } ?>
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'ArrivalId':ArrivalID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'minimum_price':minimum_price1, 'maximum_price':maximum_price1},
          success: function( data ) {
            //console.log(data);
           // $("#flightdata").html(data);
			
              // if(bookingType11 == 'O')	
              // {
              //   $("#flightdata").html(data);
              // } else if(bookingType11 == 'R')	 
              // {				
                  //$("#flightSingleReturn").html(data);
              
                 // $("#flightDoubleReturn").html(data);
               
                
              //}else 
              if(bookingType11 == 'M')	 
              {				
                  $("#flightMultidata4").html(data);
              }
           // response( data );
          }
    });
	
}
	 

$(document).ready(function($){
		
    $('#directstopq4').on('change', function(){
    	if($(this).is(':checked')){
           $("#directstq4").css('background-color',"#244082");
           $("#directsttq4").css('color',"#ffffff");
        } else {
            $("#directstq4").css('background-color',"#f3f6f8");
            $("#directsttq4").css('color',"#000000");
        }
    })

    $('#onestopq4').on('change', function(){
    	if($(this).is(':checked')){
           $("#onestq4").css('background-color',"#244082");
           $("#onesttq4").css('color',"#ffffff");
        } else {
            $("#onestq4").css('background-color',"#f3f6f8");
            $("#onesttq4").css('color',"#000000");
        }
    })

    $('#twostopq4').on('change', function(){
    	if($(this).is(':checked')){
           $("#twostq4").css('background-color',"#244082");
           $("#twosttq4").css('color',"#ffffff");
        } else {
            $("#twostq4").css('background-color',"#f3f6f8");
            $("#twosttq4").css('color',"#000000");
        }
    })

    $('#threestopq4').on('change', function(){
    	if($(this).is(':checked')){
           $("#threestq4").css('background-color',"#244082");
           $("#threesttq4").css('color',"#ffffff");
        } else {
            $("#threestq4").css('background-color',"#f3f6f8");
            $("#threesttq4").css('color',"#000000");
        }
    })
	
	
	
	$('#before11q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#before111q4").css('background-color',"#244082");
           $("#before1111q4").css('color',"#ffffff");
        } else {
            $("#before111q4").css('background-color',"#f3f6f8");
            $("#before1111q4").css('color',"#000000");
        }
    });	
	
	$('#after11q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#after111q4").css('background-color',"#244082");
           $("#after1111q4").css('color',"#ffffff");
        } else {
            $("#after111q4").css('background-color',"#f3f6f8");
            $("#after1111q4").css('color',"#000000");
        }
    })
	
	$('#after5q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#after55q4").css('background-color',"#244082");
           $("#after555q4").css('color',"#ffffff");
        } else {
            $("#after55q4").css('background-color',"#f3f6f8");
            $("#after555q4").css('color',"#000000");
        }
    })
	
	$('#after9q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#after99q4").css('background-color',"#244082");
           $("#after999q4").css('color',"#ffffff");
        } else {
            $("#after99q4").css('background-color',"#f3f6f8");
            $("#after999q4").css('color',"#000000");
        }
    })
	
	 $('#arrival11q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#arrival111q4").css('background-color',"#244082");
           $("#arrival1111q4").css('color',"#ffffff");
        } else {
            $("#arrival111q4").css('background-color',"#f3f6f8");
            $("#arrival1111q4").css('color',"#000000");
        }
    })
	
	$('#aafter11q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter111q4").css('background-color',"#244082");
           $("#aafter1111q4").css('color',"#ffffff");
        } else {
            $("#aafter111q4").css('background-color',"#f3f6f8");
            $("#aafter1111q4").css('color',"#000000");
        }
    })
	
	$('#aafter5q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter555q4").css('background-color',"#244082");
           $("#aafter5555q4").css('color',"#ffffff");
        } else {
            $("#aafter555q4").css('background-color',"#f3f6f8");
            $("#aafter5555q4").css('color',"#000000");
        }
    })
	
	$('#aafter9q4').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter99q4").css('background-color',"#244082");
           $("#aafter999q4").css('color',"#ffffff");
        } else {
            $("#aafter99q4").css('background-color',"#f3f6f8");
            $("#aafter999q4").css('color',"#000000");
        }
    })
    
   
	
 })	  


</script>

<!----------------------------------- End Forth multicity ---------------------------------------->



<!----------------------------------- Start Fifth multicity ---------------------------------------->

<script>
  $(document).ready(function() {
	  	  
	   $('#price_range5q').slider({
        range:true,
        min:500,
        max:<?php echo $fifthMaximumPrice; ?>,
        values:[500,"<?php echo $fifthMaximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show5q').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price5q').val(ui.values[0]);
            $('#hidden_maximum_price5q').val(ui.values[1]);
            getPageq5();
        }

    });  
	
	});
	
	
function getPageq5(){  	
  
//  alert("hello fifth news");
   
  var airline_id = [];
  $.each($("input[name='airlineq5']:checked"), function(){            
      airline_id.push($(this).val());
  });
  var myairline_id=airline_id.join(", ");
  if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 

 //  alert("hello news22");

  var departure_id = [];
  $.each($("input[name='depatureIdq5']:checked"), function(){            
    departure_id.push($(this).val());
  });
  
  
 var mydiparture_id=departure_id.join(", ");
  if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 

// alert("hello news33");
  var arrival_id = [];
  $.each($("input[name='arrivalIdq5']:checked"), function(){            
    arrival_id.push($(this).val());
  });
  
  
 var myarrival_id=arrival_id.join(", ");
  if(myarrival_id!='') { var ArrivalID= myarrival_id; } else { var ArrivalID="0"; } 
  
   var return_id = [];
  $.each($("input[name='returnId']:checked"), function(){            
    return_id.push($(this).val());
  });
  
  var myreturn_id=return_id.join(", ");
  if(myreturn_id!='') { var ReturnID= myreturn_id; } else { var ReturnID="0"; } 
  
 //  alert("hello news44");
  // alert(DipartureID);
  // alert(ReturnID);
  

   var stop_id = [];
    $.each($("input[name='stopsq5']:checked"), function(){            
        stop_id.push($(this).val());
    });
	
   var mystop_id=stop_id.join(", ");
	if(mystop_id!='') { var stopId= mystop_id; } else { var stopId="0"; } 
 // alert("hello news55");
   
   var departure11 	 = '<?php echo $departure15; ?>';
   var destination11 = '<?php echo $destination15; ?>';
   var bookingType11 = '<?php echo $bookingType ; ?>';
   var departureDate11 = '<?php echo $departureDate4 ; ?>';
   var travelClass11 = '<?php echo $travelClass ; ?>';
   var adultPax11 = '<?php echo $adultPax ; ?>';
   var childPax11 = '<?php echo $childPax ; ?>';   
   var infantPax11 = '<?php echo $infantPax ; ?>';
   
 /* 
   alert("hello multicity 5");
		
	alert(departure11);
	
	alert(destination11);
	alert(bookingType11);
	alert(departureDate11);
	alert(travelClass11);
	alert(" 5 done");
	alert(adultPax11);
	alert(childPax11);
	alert(infantPax11);
	
	alert("start DipartureID");
	alert(DipartureID);
	alert("start ArrivalID");
	alert(ArrivalID);
	alert("start ReturnID");
	alert(ReturnID);
	alert("start stopId");
	alert(stopId);
	alert("airline start");
	alert(AirlineID);
	alert("airline end");
	
*/
	

   
  //  var returnDate = '';
   
  //  if(bookingType11 == 'R')	   
	//    {
	// 	   var returnDate ='<?php //echo $returnDate; ?>';
	//    } 
	   
	   
   var max111=$('#hidden_minimum_price5q').val();
   var min111=$('#hidden_maximum_price5q').val();
   
	//  alert(max111);
    //  alert(min111);
   
  if(max111 != '') {   
   var minimum_price1 = $('#hidden_minimum_price5q').val();
  }
  else {
	  var minimum_price1 = '';
  }
  
 // alert(minimum_price1);
//  alert("new minimum_price1");
  
  
   if(min111 != '') { 
   var maximum_price1 = $('#hidden_maximum_price5q').val();
   } else {
	    var maximum_price1 = '';
   }
   
  //   alert(maximum_price1);
 // alert("new maximum_price1");
   
   
  //   alert(minimum_price);
  //   alert(maximum_price);
  <?php //if($bookingType == 'O'){ ?>
  //$('#flightdata').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php //}if($bookingType == 'R'){  ?>
 // $('#flightSingleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  //$('#flightDoubleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  
  
  
  <?php if($bookingType == 'M'){ ?>
  $('#flightMultidata5').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php } ?>
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'ArrivalId':ArrivalID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'minimum_price':minimum_price1, 'maximum_price':maximum_price1},
          success: function( data ) {
            //console.log(data);
           // $("#flightdata").html(data);
			
              // if(bookingType11 == 'O')	
              // {
              //   $("#flightdata").html(data);
              // } else if(bookingType11 == 'R')	 
              // {				
                  //$("#flightSingleReturn").html(data);
              
                 // $("#flightDoubleReturn").html(data);
               
                
              //}else 
              if(bookingType11 == 'M')	 
              {				
                  $("#flightMultidata5").html(data);
              }
           // response( data );
          }
    });
	
}
	 

$(document).ready(function($){
		
    $('#directstopq5').on('change', function(){
    	if($(this).is(':checked')){
           $("#directstq5").css('background-color',"#244082");
           $("#directsttq5").css('color',"#ffffff");
        } else {
            $("#directstq5").css('background-color',"#f3f6f8");
            $("#directsttq5").css('color',"#000000");
        }
    })

    $('#onestopq5').on('change', function(){
    	if($(this).is(':checked')){
           $("#onestq5").css('background-color',"#244082");
           $("#onesttq5").css('color',"#ffffff");
        } else {
            $("#onestq5").css('background-color',"#f3f6f8");
            $("#onesttq5").css('color',"#000000");
        }
    })

    $('#twostopq5').on('change', function(){
    	if($(this).is(':checked')){
           $("#twostq5").css('background-color',"#244082");
           $("#twosttq5").css('color',"#ffffff");
        } else {
            $("#twostq5").css('background-color',"#f3f6f8");
            $("#twosttq5").css('color',"#000000");
        }
    })

    $('#threestopq5').on('change', function(){
    	if($(this).is(':checked')){
           $("#threestq5").css('background-color',"#244082");
           $("#threesttq5").css('color',"#ffffff");
        } else {
            $("#threestq5").css('background-color',"#f3f6f8");
            $("#threesttq5").css('color',"#000000");
        }
    })
	
	
	
	$('#before11q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#before111q5").css('background-color',"#244082");
           $("#before1111q5").css('color',"#ffffff");
        } else {
            $("#before111q5").css('background-color',"#f3f6f8");
            $("#before1111q5").css('color',"#000000");
        }
    });	
	
	$('#after11q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#after111q5").css('background-color',"#244082");
           $("#after1111q5").css('color',"#ffffff");
        } else {
            $("#after111q5").css('background-color',"#f3f6f8");
            $("#after1111q5").css('color',"#000000");
        }
    })
	
	$('#after5q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#after55q5").css('background-color',"#244082");
           $("#after555q5").css('color',"#ffffff");
        } else {
            $("#after55q5").css('background-color',"#f3f6f8");
            $("#after555q5").css('color',"#000000");
        }
    })
	
	$('#after9q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#after99q5").css('background-color',"#244082");
           $("#after999q5").css('color',"#ffffff");
        } else {
            $("#after99q5").css('background-color',"#f3f6f8");
            $("#after999q5").css('color',"#000000");
        }
    })
	
	 $('#arrival11q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#arrival111q5").css('background-color',"#244082");
           $("#arrival1111q5").css('color',"#ffffff");
        } else {
            $("#arrival111q5").css('background-color',"#f3f6f8");
            $("#arrival1111q5").css('color',"#000000");
        }
    })
	
	$('#aafter11q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter111q5").css('background-color',"#244082");
           $("#aafter1111q5").css('color',"#ffffff");
        } else {
            $("#aafter111q5").css('background-color',"#f3f6f8");
            $("#aafter1111q").css('color',"#000000");
        }
    })
	
	$('#aafter5q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter555q5").css('background-color',"#244082");
           $("#aafter5555q5").css('color',"#ffffff");
        } else {
            $("#aafter555q5").css('background-color',"#f3f6f8");
            $("#aafter5555q5").css('color',"#000000");
        }
    })
	
	$('#aafter9q5').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter99q5").css('background-color',"#244082");
           $("#aafter999q5").css('color',"#ffffff");
        } else {
            $("#aafter99q5").css('background-color',"#f3f6f8");
            $("#aafter999q5").css('color',"#000000");
        }
    })
    
   
	
 })	  


</script>

<!----------------------------------- End Fifth multicity ---------------------------------------->




<!----------------------------------- Start Sixth multicity ---------------------------------------->

<script>
  $(document).ready(function() {
	  	  
	   $('#price_range6q').slider({
        range:true,
        min:500,
        max:<?php echo $sixthMaximumPrice; ?>,
        values:[500,"<?php echo $sixthMaximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show6q').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price6q').val(ui.values[0]);
            $('#hidden_maximum_price6q').val(ui.values[1]);
            getPageq3();
        }

    });  
	
	});
	
	
function getPageq6(){  	
  
 // alert("hello sixth news");
   
  var airline_id = [];
  $.each($("input[name='airlineq6']:checked"), function(){            
      airline_id.push($(this).val());
  });
  var myairline_id=airline_id.join(", ");
  if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 

 //  alert("hello news22");

  var departure_id = [];
  $.each($("input[name='depatureIdq6']:checked"), function(){            
    departure_id.push($(this).val());
  });
  
  
 var mydiparture_id=departure_id.join(", ");
  if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 

// alert("hello news33");
  var arrival_id = [];
  $.each($("input[name='arrivalIdq6']:checked"), function(){            
    arrival_id.push($(this).val());
  });
  
  
 var myarrival_id=arrival_id.join(", ");
  if(myarrival_id!='') { var ArrivalID= myarrival_id; } else { var ArrivalID="0"; } 
  
   var return_id = [];
  $.each($("input[name='returnId']:checked"), function(){            
    return_id.push($(this).val());
  });
  
  var myreturn_id=return_id.join(", ");
  if(myreturn_id!='') { var ReturnID= myreturn_id; } else { var ReturnID="0"; } 
  
 //  alert("hello news44");
  // alert(DipartureID);
  // alert(ReturnID);
  

   var stop_id = [];
    $.each($("input[name='stopsq6']:checked"), function(){            
        stop_id.push($(this).val());
    });
	
   var mystop_id=stop_id.join(", ");
	if(mystop_id!='') { var stopId= mystop_id; } else { var stopId="0"; } 
 // alert("hello news55");
   
   var departure11 	 = '<?php echo $departure16; ?>';
   var destination11 = '<?php echo $destination16; ?>';
   var bookingType11 = '<?php echo $bookingType ; ?>';
   var departureDate11 = '<?php echo $departureDate5 ; ?>';
   var travelClass11 = '<?php echo $travelClass ; ?>';
   var adultPax11 = '<?php echo $adultPax ; ?>';
   var childPax11 = '<?php echo $childPax ; ?>';   
   var infantPax11 = '<?php echo $infantPax ; ?>';
   
 /* 
  alert("hello multicity 6");
		
	alert(departure11);
	
	alert(destination11);
	alert(bookingType11);
	alert(departureDate11);
	alert(travelClass11);
	alert(" 6th done");
	alert(adultPax11);
	alert(childPax11);
	alert(infantPax11);
	
	alert("start DipartureID");
	alert(DipartureID);
	alert("start ArrivalID");
	alert(ArrivalID);
	alert("start ReturnID");
	alert(ReturnID);
	alert("start stopId");
	alert(stopId);
	alert("airline start");
	alert(AirlineID);
	alert("airline end");
	
*/
   
  //  var returnDate = '';
   
  //  if(bookingType11 == 'R')	   
	//    {
	// 	   var returnDate ='<?php //echo $returnDate; ?>';
	//    } 
	   
	   
   var max111=$('#hidden_minimum_price6q').val();
   var min111=$('#hidden_maximum_price6q').val();
   
//	alert(max111);
   //   alert(min111);
   
  if(max111 != '') {   
   var minimum_price1 = $('#hidden_minimum_price6q').val();
  }
  else {
	  var minimum_price1 = '';
  }
  
 // alert(minimum_price1);
//  alert("new minimum_price1");
  
  
   if(min111 != '') { 
   var maximum_price1 = $('#hidden_maximum_price6q').val();
   } else {
	    var maximum_price1 = '';
   }
   
  //   alert(maximum_price1);
 // alert("new maximum_price1");
   
   
  //   alert(minimum_price);
  //   alert(maximum_price);
  <?php //if($bookingType == 'O'){ ?>
  //$('#flightdata').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php //}if($bookingType == 'R'){  ?>
 // $('#flightSingleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  //$('#flightDoubleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  
  
  
  <?php if($bookingType == 'M'){ ?>
  $('#flightMultidata6').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php } ?>
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'ArrivalId':ArrivalID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'minimum_price':minimum_price1, 'maximum_price':maximum_price1},
          success: function( data ) {
            //console.log(data);
           // $("#flightdata").html(data);
			
              // if(bookingType11 == 'O')	
              // {
              //   $("#flightdata").html(data);
              // } else if(bookingType11 == 'R')	 
              // {				
                  //$("#flightSingleReturn").html(data);
              
                 // $("#flightDoubleReturn").html(data);
               
                
              //}else 
              if(bookingType11 == 'M')	 
              {				
                  $("#flightMultidata6").html(data);
              }
           // response( data );
          }
    });
	
}
	 

$(document).ready(function($){
		
    $('#directstopq6').on('change', function(){
    	if($(this).is(':checked')){
           $("#directstq6").css('background-color',"#244082");
           $("#directsttq6").css('color',"#ffffff");
        } else {
            $("#directstq6").css('background-color',"#f3f6f8");
            $("#directsttq6").css('color',"#000000");
        }
    })

    $('#onestopq6').on('change', function(){
    	if($(this).is(':checked')){
           $("#onestq6").css('background-color',"#244082");
           $("#onesttq6").css('color',"#ffffff");
        } else {
            $("#onestq6").css('background-color',"#f3f6f8");
            $("#onesttq6").css('color',"#000000");
        }
    })

    $('#twostopq6').on('change', function(){
    	if($(this).is(':checked')){
           $("#twostq6").css('background-color',"#244082");
           $("#twosttq6").css('color',"#ffffff");
        } else {
            $("#twostq6").css('background-color',"#f3f6f8");
            $("#twosttq6").css('color',"#000000");
        }
    })

    $('#threestopq6').on('change', function(){
    	if($(this).is(':checked')){
           $("#threestq6").css('background-color',"#244082");
           $("#threesttq6").css('color',"#ffffff");
        } else {
            $("#threestq6").css('background-color',"#f3f6f8");
            $("#threesttq6").css('color',"#000000");
        }
    })
	
	
	
	$('#before11q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#before111q6").css('background-color',"#244082");
           $("#before1111q6").css('color',"#ffffff");
        } else {
            $("#before111q6").css('background-color',"#f3f6f8");
            $("#before1111q6").css('color',"#000000");
        }
    });	
	
	$('#after11q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#after111q6").css('background-color',"#244082");
           $("#after1111q6").css('color',"#ffffff");
        } else {
            $("#after111q6").css('background-color',"#f3f6f8");
            $("#after1111q6").css('color',"#000000");
        }
    })
	
	$('#after5q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#after55q6").css('background-color',"#244082");
           $("#after555q6").css('color',"#ffffff");
        } else {
            $("#after55q6").css('background-color',"#f3f6f8");
            $("#after555q6").css('color',"#000000");
        }
    })
	
	$('#after9q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#after99q6").css('background-color',"#244082");
           $("#after999q6").css('color',"#ffffff");
        } else {
            $("#after99q6").css('background-color',"#f3f6f8");
            $("#after999q6").css('color',"#000000");
        }
    })
	
	 $('#arrival11q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#arrival111q6").css('background-color',"#244082");
           $("#arrival1111q6").css('color',"#ffffff");
        } else {
            $("#arrival111q6").css('background-color',"#f3f6f8");
            $("#arrival1111q6").css('color',"#000000");
        }
    })
	
	$('#aafter11q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter111q6").css('background-color',"#244082");
           $("#aafter1111q6").css('color',"#ffffff");
        } else {
            $("#aafter111q6").css('background-color',"#f3f6f8");
            $("#aafter1111q6").css('color',"#000000");
        }
    })
	
	$('#aafter5q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter555q6").css('background-color',"#244082");
           $("#aafter5555q6").css('color',"#ffffff");
        } else {
            $("#aafter555q6").css('background-color',"#f3f6f8");
            $("#aafter5555q6").css('color',"#000000");
        }
    })
	
	$('#aafter9q6').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter99q6").css('background-color',"#244082");
           $("#aafter999q6").css('color',"#ffffff");
        } else {
            $("#aafter99q6").css('background-color',"#f3f6f8");
            $("#aafter999q6").css('color',"#000000");
        }
    })
    
   
	
 })	  


</script>

<!----------------------------------- End Sixth multicity ---------------------------------------->








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

   function getFlightSelectionBhanu(id,fn){

      var flightId = id;
	    var flightIds = $("#flightsIds").val();
      //var flightIds =  $("#pricecheck"+fn).val();
  		//alert(flightIds);
	    //	alert(flightId); 

      $.ajax({
        url: "<?php echo base_url('flights/reviewreturn')?>",
        type: 'post',
        dataType: "HTML",
        data: {'flightId':flightId,'flightIds':flightIds},
        success: function( data ) {
          console.log(data);
        
          $('#flightSelectionBhanu').html(data);
          // response( data ); 
        }
      });  


    }

    function getFlightSelectionBhanu1(id,fn){

    var flightIds = id;
    var flightId =  $("#pricecheck"+fn).val();
      // alert(flightIds);
     //  alert(flightIds);

    $.ajax({
      url: "<?php echo base_url('flights/reviewreturn')?>",
      type: 'post',
      dataType: "HTML",
      data: {'flightId':flightId,'flightIds':flightIds},
      success: function( data ) {
        console.log(data);
      
        $('#flightSelectionBhanu').html(data);
        // response( data ); 
      }
    });  


    }
    

    function getFlightSelectList(id,fnName,fnCode,deptCode,arrivCode,deptTime,arrivTime,duration,noofstops,totalFare){
         
     // alert("hi");
      var flightId = id;
      var fnName = fnName;
      var fnCode = fnCode;
      var deptCode = deptCode;
      var arrivCode = arrivCode;
      var stops = noofstops;
      var duration = duration;
      var depatureTime = deptTime;
      var arrivalTime = arrivTime;
      var totalFare = totalFare;


    $.ajax({
        url: "<?php echo base_url('flights/review')?>",
        type: 'post',
        dataType: "html",
        data: {'flightId':flightId,'fnName':fnName,'fnCode':fnCode,'deptCode':deptCode,'arrivCode':arrivCode,'depatureTime':depatureTime,'arrivalTime':arrivalTime,'stops':stops,'duration':duration,'totalFare':totalFare },
        success: function( data ) {
          console.log(data);
        
          $('#flightSelection').html(data);
          // response( data );
        }
      });

    }

    function getFlightSelectList1(id,fnName,fnCode,deptCode,arrivCode,deptTime,arrivTime,duration,noofstops,totalFare){
         
         // alert("hi");
          var flightId = id;
          var fnName = fnName;
          var fnCode = fnCode;
          var deptCode = deptCode;
          var arrivCode = arrivCode;
          var stops = noofstops;
          var duration = duration;
          var depatureTime = deptTime;
          var arrivalTime = arrivTime;
          var totalFare = totalFare;
    
    
        $.ajax({
            url: "<?php echo base_url('flights/review')?>",
            type: 'post',
            dataType: "html",
            data: {'flightId1':flightId,'fnName1':fnName,'fnCode1':fnCode,'deptCode1':deptCode,'arrivCode1':arrivCode,'depatureTime1':depatureTime,'arrivalTime1':arrivalTime,'stops1':stops,'duration1':duration,'totalFare1':totalFare },
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


    function getFlightSelectionMultiCity(id,fn){

      var flightId = id;
      var flightIds = $("#flightsIds").val();

      // alert(flightId);
      // alert(flightIds);

      $.ajax({
        url: "<?php echo base_url('flights/multireturn')?>",
        type: 'post',
        dataType: "HTML",
        data: {'flightId':flightId,'flightIds':flightIds},
        success: function( data ) {
          console.log(data);
        
          $('#flightSelectionBhanu').html(data);
          // response( data ); 
        }
      });  


    }

    function getFlightSelectionMultiCity2(id,fn){

      var flightIds = id;
      var flightId = $("#flightsId").val();

      // alert(flightId);
      // alert(flightIds);

      $.ajax({
        url: "<?php echo base_url('flights/multireturn')?>",
        type: 'post',
        dataType: "HTML",
        data: {'flightId':flightId,'flightIds':flightIds},
        success: function( data ) {
          console.log(data);
        
          $('#flightSelectionBhanu').html(data);
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
        min:500,
        max:<?php echo $maximumPrice; ?>,
        values:[500,"<?php echo $maximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            getPage();
        }

    });
/********************************************************* Multicity Filters *******************************************/
    $('#price_range1').slider({
        range:true,
        min:0,
        max:<?php echo $maximumPrice; ?>,
        values:[0,"<?php echo $maximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show1').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price1').val(ui.values[0]);
            $('#hidden_maximum_price1').val(ui.values[1]);
            getPage2();
        }

    });
	
	

    $('#price_range2').slider({
        range:true,
        min:0,
        max:<?php echo $maximumPrice; ?>,
        values:[0,"<?php echo $maximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show2').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            getPage();
        }

    });

    $('#price_range3').slider({
        range:true,
        min:0,
        max:<?php echo $maximumPrice; ?>,
        values:[0,"<?php echo $maximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show3').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            getPage();
        }

    });

    $('#price_range4').slider({
        range:true,
        min:0,
        max:<?php echo $maximumPrice; ?>,
        values:[0,"<?php echo $maximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show4').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            getPage();
        }

    });

    $('#price_range5').slider({
        range:true,
        min:0,
        max:<?php echo $maximumPrice; ?>,
        values:[0,"<?php echo $maximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_show5').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            getPage();
        }

    });


function getPage2(){
  
  // alert("hello new");
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


  var arrival_id = [];
  $.each($("input[name='arrivalId']:checked"), function(){            
    arrival_id.push($(this).val());
  });
  
  
 var myarrival_id=arrival_id.join(", ");
  if(myarrival_id!='') { var ArrivalID= myarrival_id; } else { var ArrivalID="0"; } 
  
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
   
   
   
  //  var returnDate = '';
   
  //  if(bookingType11 == 'R')	   
	//    {
	// 	   var returnDate ='<?php //echo $returnDate; ?>';
	//    } 
	   
	   
   var max111=$('#hidden_minimum_price1').val();
   var min111=$('#hidden_maximum_price1').val();
   
  if(max111 != '') {   
   var minimum_price1 = $('#hidden_minimum_price1').val();
  }
  else {
	  var minimum_price1 = '';
  }
  
   if(min111 != '') { 
   var maximum_price1 = $('#hidden_maximum_price1').val();
   } else {
	    var maximum_price1 = '';
   }
  //   alert(minimum_price);
  //   alert(maximum_price);
  <?php //if($bookingType == 'O'){ ?>
  //$('#flightdata').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php //}if($bookingType == 'R'){  ?>
 // $('#flightSingleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  //$('#flightDoubleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  
  
  
  <?php if($bookingType == 'M'){ ?>
  $('#flightMultidata').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php } ?>
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'ArrivalId':ArrivalID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'minimum_price':minimum_price1, 'maximum_price':maximum_price1},
          success: function( data ) {
            //console.log(data);
           // $("#flightdata").html(data);
			
              // if(bookingType11 == 'O')	
              // {
              //   $("#flightdata").html(data);
              // } else if(bookingType11 == 'R')	 
              // {				
                  //$("#flightSingleReturn").html(data);
              
                 // $("#flightDoubleReturn").html(data);
               
                
              //}else 
              if(bookingType11 == 'M')	 
              {				
                  $("#flightMultidata").html(data);
              }
           // response( data );
          }
    });
	
	
	


}








/********************************************************* Multicity Filters *******************************************/
  
<?php if(!empty($returnMaximumPrice)){ ?>
    $('#price_rangee').slider({
        range:true,
        min:0,
        max:<?php echo $returnMaximumPrice; ?>,
        values:[0,"<?php echo $returnMaximumPrice; ?>"],
        step:0,
        stop:function(event, ui)
        {
            $('#price_showw').html('<span class="fa fa-rupee"> ' + ui.values[0] +'</span>  -  <span class="fa fa-rupee"> ' + ui.values[1]+ '</span>');
            $('#hidden_reminimum_price').val(ui.values[0]);
            $('#hidden_remaximum_price').val(ui.values[1]);
            getPage1();
        }

    });
    <?php } ?>
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
    $('#rbefore11').on('change', function(){
    	if($(this).is(':checked')){
           $("#rbefore111").css('background-color',"#244082");
           $("#rbefore1111").css('color',"#ffffff");
        } else {
            $("#rbefore111").css('background-color',"#f3f6f8");
            $("#rbefore1111").css('color',"#000000");
        }
    })
    $('#arrival11').on('change', function(){
    	if($(this).is(':checked')){
           $("#arrival111").css('background-color',"#244082");
           $("#arrival1111").css('color',"#ffffff");
        } else {
            $("#arrival111").css('background-color',"#f3f6f8");
            $("#arrival1111").css('color',"#000000");
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

    $('#rafter11').on('change', function(){
    	if($(this).is(':checked')){
           $("#rafter111").css('background-color',"#244082");
           $("#rafter1111").css('color',"#ffffff");
        } else {
            $("#rafter111").css('background-color',"#f3f6f8");
            $("#rafter1111").css('color',"#000000");
        }
    })

    $('#aafter11').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter111").css('background-color',"#244082");
           $("#aafter1111").css('color',"#ffffff");
        } else {
            $("#aafter111").css('background-color',"#f3f6f8");
            $("#aafter1111").css('color',"#000000");
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
    $('#rafter5').on('change', function(){
    	if($(this).is(':checked')){
           $("#rafter55").css('background-color',"#244082");
           $("#rafter555").css('color',"#ffffff");
        } else {
            $("#rafter55").css('background-color',"#f3f6f8");
            $("#rafter555").css('color',"#000000");
        }
    })
    $('#aafter5').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter555").css('background-color',"#244082");
           $("#aafter5555").css('color',"#ffffff");
        } else {
            $("#aafter555").css('background-color',"#f3f6f8");
            $("#aafter5555").css('color',"#000000");
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
    $('#rafter9').on('change', function(){
    	if($(this).is(':checked')){
           $("#rafter99").css('background-color',"#244082");
           $("#rafter999").css('color',"#ffffff");
        } else {
            $("#rafter99").css('background-color',"#f3f6f8");
            $("#rafter999").css('color',"#000000");
        }
    })
    $('#aafter9').on('change', function(){
    	if($(this).is(':checked')){
           $("#aafter99").css('background-color',"#244082");
           $("#aafter999").css('color',"#ffffff");
        } else {
            $("#aafter99").css('background-color',"#f3f6f8");
            $("#aafter999").css('color',"#000000");
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
            $("#reafter999").css('color',"#000000");
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

    $('#threestop').on('change', function(){
    	if($(this).is(':checked')){
           $("#threest").css('background-color',"#244082");
           $("#threestt").css('color',"#ffffff");
        } else {
            $("#threest").css('background-color',"#f3f6f8");
            $("#threestt").css('color',"#000000");
        }
    })
		 $('#ddethreestop').on('change', function(){
    	if($(this).is(':checked')){
           $("#ddethreest").css('background-color',"#244082");
           $("#ddethreestt").css('color',"#ffffff");
        } else {
            $("#ddethreest").css('background-color',"#f3f6f8");
            $("#ddethreestt").css('color',"#000000");
        }
    })

    $('#rethreesttt').on('change', function(){
    	if($(this).is(':checked')){
           $("#rethreestt").css('background-color',"#244082");
           $("#rethreestttt").css('color',"#ffffff");
        } else {
            $("#rethreestt").css('background-color',"#f3f6f8");
            $("#rethreestttt").css('color',"#000000");
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

    $('#redirectstop').on('change', function(){
      //alert("ji");
    	if($(this).is(':checked')){
           $("#redirectst").css('background-color',"#244082");
           $("#redirectstt").css('color',"#ffffff");
        } else {
            $("#redirectst").css('background-color',"#f3f6f8");
            $("#redirectstt").css('color',"#000000");
        }
    })

    $('#retwostop').on('change', function(){
      
    	if($(this).is(':checked')){
           $("#retwost").css('background-color',"#244082");
           $("#retwostt").css('color',"#ffffff");
        } else {
            $("#retwost").css('background-color',"#f3f6f8");
            $("#retwostt").css('color',"#000000");
        }
    })

    $('#retthreest12').on('change', function(){
      //alert("3");
    	if($(this).is(':checked')){
           $("#retthreest1").css('background-color',"#244082");
           $("#retthreestt12").css('color',"#ffffff");
        } else {
            $("#retthreest1").css('background-color',"#244082");
            $("#retthreestt12").css('color',"#ffffff");
        }
    })
	
	$('#dethreest').on('change', function(){
      //alert("3");
    	if($(this).is(':checked')){
           $("#dethreest").css('background-color',"#244082");
           $("#dethreestt").css('color',"#ffffff");
        } else {
            $("#dethreest").css('background-color',"#f3f6f8");
            $("#dethreestt").css('color',"#000000");
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

    $('#retabefore11').on('change', function(){
    	if($(this).is(':checked')){
           $("#retabefore111").css('background-color',"#244082");
           $("#retabefore1111").css('color',"#ffffff");
        } else {
            $("#retabefore111").css('background-color',"#f3f6f8");
            $("#retabefore1111").css('color',"#000000");
        }
    })

    $('#retaafter11').on('change', function(){
    	if($(this).is(':checked')){
           $("#retaafter111").css('background-color',"#244082");
           $("#reaafter1111").css('color',"#ffffff");
        } else {
            $("#retaafter111").css('background-color',"#f3f6f8");
            $("#reaafter1111").css('color',"#000000");
        }
    })
    $('#reaafter5').on('change', function(){
    	if($(this).is(':checked')){
           $("#reaafter55").css('background-color',"#244082");
           $("#reaafter555").css('color',"#ffffff");
        } else {
            $("#reaafter55").css('background-color',"#f3f6f8");
            $("#reaafter555").css('color',"#000000");
        }
    })
    $('#reaafter9').on('change', function(){
    	if($(this).is(':checked')){
           $("#reaafter99").css('background-color',"#244082");
           $("#reaafter999").css('color',"#ffffff");
           
         
        } else {
            $("#reaafter99").css('background-color',"#f3f6f8");
           $("#reaafter999").css('color',"#00000");

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


  var arrival_id = [];
  $.each($("input[name='arrivalId']:checked"), function(){            
    arrival_id.push($(this).val());
  });
  
  
 var myarrival_id=arrival_id.join(", ");
  if(myarrival_id!='') { var ArrivalID= myarrival_id; } else { var ArrivalID="0"; } 
  
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
  <?php if($bookingType == 'O'){ ?>
  $('#flightdata').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php }if($bookingType == 'R'){  ?>
  $('#flightSingleReturn').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  //$('#flightDoubleReturn').html('<center> <img src="<?php //echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php }if($bookingType == 'M'){ ?>
  $('#flightMultidata').html('<center> <img src="<?php echo base_url('assets/images/loadanimation.gif') ?>"></center>'); 
  <?php } ?>
  jQuery.ajax({
     url: "<?php echo base_url('flights/flight_filter')?>",
          type: 'post',
          dataType: "html",
          data: {'AirlineID':AirlineID,'departureId':DipartureID,'ArrivalId':ArrivalID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'returnDate':returnDate,'minimum_price':minimum_price, 'maximum_price':maximum_price},
          success: function( data ) {
            //console.log(data);
            //$("#flightdata").html(data);
			
              if(bookingType11 == 'O')	
              {
                $("#flightdata").html(data);
              } else if(bookingType11 == 'R')	 
              {				
                  $("#flightSingleReturn").html(data);
              
                 // $("#flightDoubleReturn").html(data);
               
                
              }else if(bookingType11 == 'M')	 
              {				
                  $("#flightMultidata").html(data);
              }
           // response( data );
          }
    });


}

function getPage1(){
  
 //  alert("hello");
    var airline_id = [];
    $.each($("input[name='airline']:checked"), function(){            
        airline_id.push($(this).val());
    });
    var myairline_id=airline_id.join(", ");
    if(myairline_id!='') { var AirlineID=myairline_id; } else { var AirlineID="0"; } 

    var rairline_id = [];
    $.each($("input[name='airline_return']:checked"), function(){            
      rairline_id.push($(this).val());
    });
    var myrairline_id=rairline_id.join(", ");
    if(myrairline_id!='') { var RAirlineID=myrairline_id; } else { var RAirlineID="0"; } 
  
    var departure_id = [];
    $.each($("input[name='rdepatureId']:checked"), function(){            
      departure_id.push($(this).val());
    });

    var mydiparture_id=departure_id.join(", ");
    if(mydiparture_id!='') { var DipartureID= mydiparture_id; } else { var DipartureID="0"; } 
    
     var return_id = [];
    $.each($("input[name='rreturnId']:checked"), function(){            
      return_id.push($(this).val());
    });

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
            data: {'AirlineID':AirlineID,'RAirlineID':RAirlineID,'departureId':DipartureID,'returnId':ReturnID,'stopId':stopId,'departure':departure11,'destination':destination11,'bookingType':bookingType11,'departureDate':departureDate11,'travelClass':travelClass11,'adultPax':adultPax11,'childPax':childPax11,'infantPax':infantPax11,'returnDate':returnDate,'minimum_price':minimum_price, 'maximum_price':maximum_price},
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



  function getlightDetails(id){

    //alert(id);
    $("#priceids").val(id);  
    
  }

//   function bookFlight(ids){

//     var id = $("#priceids").val();	

//         //alert(id);
	
//         /*	if($(".flightIdsnew").is(':checked')) 
//         { 
//             var ids = $("#priceids").val();			
//             var flightIds = ids;
//             alert("book id");
//         }
//         */
	
		
// 	    //alert(flightIds);
//     $(document).ready(function(){

//       var id = $("#priceids").val();
//       window.location.href= "<?php //echo base_url("flights/details/")?>"+ids;

//     });  
      
//     window.location.href= "<?php //echo base_url("flights/details/")?>"+ids;

//   }

    function bookFlight(){

        var id = $("#priceids").val();

        if(id==null || id==''){

            alert("Please select Flight Price!");
            return false(); 

        }

        $(document).ready(function(){

        var id = $("#priceids").val();
        window.location.href= "<?php echo base_url("flights/details/")?>"+id;

        });  
        
        window.location.href= "<?php echo base_url("flights/details/")?>"+id;

    }

  function getFlightDetails(priceid,adultTotalFare,adultBaseFare,adultTaxFare,totalAdult,childBaseFare,childTaxFare,totalChild,infantBaseFare,infantTaxFare,totalInfant){

      var priceId = priceid; 
      var adultTotalFare = adultTotalFare; 
      var adultBaseFare = adultBaseFare; 
      var adultTaxFare = adultTaxFare;
      var totalAdult = totalAdult;
      var childBaseFare = childBaseFare; 
      var childTaxFare = childTaxFare;
      var totalChild = totalChild;
      var infantBaseFare = infantBaseFare; 
      var infantTaxFare = infantTaxFare;
      var totalInfant = totalInfant;

      jQuery.ajax({
      url: "<?php echo base_url('flights/getFlightDetailsByPriceId')?>",
          type: 'post',
          dataType: "html",
          data: {'priceId':priceId,'adultTotalFare':adultTotalFare,'adultBaseFare':adultBaseFare,'adultTaxFare':adultTaxFare,'totalAdult':totalAdult,'childBaseFare':childBaseFare,'childTaxFare':childTaxFare,'totalChild':totalChild,'infantBaseFare':infantBaseFare,'infantTaxFare':infantTaxFare,'totalInfant':totalInfant},
          success: function( data ) {
            console.log(data);
            $("#priceDetails").html(data);
            $("#priceDetails1").html(data);
           
          }
    });

  }


  function getFlightBaggageInfo(adultCheckinBaggage,childCheckinBaggage,adultCabinBaggage,childCabinBaggage,infantCabinBaggage,priceId,departureCode,airportCode){

    var adultCheckinBaggage = adultCheckinBaggage;
    var childCheckinBaggage = childCheckinBaggage;
    var adultCabinBaggage = adultCabinBaggage;
    var childCabinBaggage = childCabinBaggage;
    var infantCabinBaggage = infantCabinBaggage;
    var priceId = priceId;
    var departureCode = departureCode;
    var airportCode = airportCode;

    jQuery.ajax({
      url: "<?php echo base_url('flights/getFlightBaggageInfoByPriceId')?>",
          type: 'post',
          dataType: "html",
          data: {'priceId':priceId,'adultCheckinBaggage':adultCheckinBaggage,'childCheckinBaggage':childCheckinBaggage,'adultCabinBaggage':adultCabinBaggage,'childCabinBaggage':childCabinBaggage,'infantCabinBaggage':infantCabinBaggage,'airportCode':airportCode,'departureCode':departureCode},
          success: function( data ) {
            console.log(data);
            $("#baggageDetails").html(data);
            $("#baggageDetails1").html(data);
           
          }
    });


  }

  function getFlightFareRules(priceId,deptCity,arriveCity){

    var priceId = priceId;
    var departureCity = deptCity;
    var arrivalCity = arriveCity;

    jQuery.ajax({
      url: "<?php echo base_url('flights/getFlightFareRuleByPriceId')?>",
          type: 'post',
          dataType: "html",
          data: {'priceId':priceId,'departureCity':departureCity,'arrivalCity':arrivalCity},
          success: function( data ) {
            console.log(data);
            $("#farerules").html(data);
            $("#farerules1").html(data);
           
          }
    });

  }

  // function sortFlightList(n){
  //   //alert("n");
  //   var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  //   table = document.getElementById("flightSortTable");
  //   //alert(table);
  //   switching = true;
  //   //Set the sorting direction to ascending:
  //   dir = "asc"; 
  //   /*Make a loop that will continue until
  //   no switching has been done:*/
  //   while (switching) {
  //     //start by saying: no switching is done:
  //     switching = false;
  //     rows = table.rows;
  //     // alert("hlo");
  //     // alert(rows.length);
  //     /*Loop through all table rows (except the
  //     first, which contains table headers):*/
  //     for (i = 1; i < (rows.length - 1); i++) {
  //       //start by saying there should be no switching:
  //       shouldSwitch = false;
  //       /*Get the two elements you want to compare,
  //       one from current row and one from the next:*/
  //       x = rows[i].getElementsByTagName("TD")[n];
  //       y = rows[i + 1].getElementsByTagName("TD")[n];
  //       /*check if the two rows should switch place,
  //       based on the direction, asc or desc:*/
  //       if (dir == "asc") {
  //         //alert("asc");
  //         if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
  //           //if so, mark as a switch and break the loop:
  //           shouldSwitch= true;
  //           break;
  //         }
  //       } else if (dir == "desc") {
  //        // alert("desc");
  //         if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
  //           //if so, mark as a switch and break the loop:
  //           shouldSwitch = true;
  //           break;
  //         }
  //       }
  //     }
  //     if (shouldSwitch) {
  //       /*If a switch has been marked, make the switch
  //       and mark that a switch has been done:*/
  //       rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
  //       switching = true;
  //       //Each time a switch is done, increase this count by 1:
  //       switchcount ++;      
  //     } else {
  //       /*If no switching has been done AND the direction is "asc",
  //       set the direction to "desc" and run the while loop again.*/
  //       if (switchcount == 0 && dir == "asc") {
  //         dir = "desc";
  //         switching = true;
  //       }
  //     }
  //   }

  // }



    // function sortFlightList(id){

    //   alert("hlo");

    // }


</script>

<script>
  function buttonClicked() {
  document.querySelectorAll('.myButton').forEach(button => {
    button.classList.remove('active', );
  });
  
  this.classList.add('active');
}

document.querySelectorAll('.myButton').forEach(button => {
  button.onclick = buttonClicked;
});
</script>

<script>
  function getLeftFilter(id){

    if(id == '1' ){

     // alert("hlo");

      "<?php include("includes/flight_multimenu"); ?>"

    }
    if(id == '2'){

      //alert("bhanu");


    }

  }
</script>


  </body>
</html>