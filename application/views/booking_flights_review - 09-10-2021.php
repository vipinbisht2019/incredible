<?php

 // echo "<pre>";
 // print_r($passengersdetailsReview);

?>

<html lang="en">
<head>
<title>Booking Flight Review</title>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">

<?php include('includes/css.php'); ?>
<link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");

?>
<style>
            ::selection {
  color: #fff;
  background-color: #0ac229;
}

main {
  width: 95%;
  margin: 2em auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.accordion__container {
  margin-bottom: 10px;
  background-repeat: no-repeat;
  padding: 0.5em 0.5em;
  /*box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);*/
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 5px;
}
.accordion__container.default {display: block;}
.accordion__container:last-type {
  margin-bottom: 0;
}
.accordion__question__container {
  display: flex;
  flex-direction: row;
  justify-content: end;
  align-items: center;
  margin-bottom: 0em;
}
.accordion__question {
  color: black;
}
.accordion__btn {
  display: inline-block;
  background: none;
  border: none;
  /*border: 2px solid currentColor;*/
  border-radius: 3px;
  color: #b3b3b3;
  cursor: pointer;
}
.accordion__btn i {
  font-size: 1.2em;
  padding: 0.15em;
}
.accordion__answer__container {
  display: none;
}

.active__accordion {
  display: block;
}
input, select, textarea {
    color: #404040;
}
select {
    padding: 10px 10px;
}

.psng {
color: rgb(255, 255, 255);
font-size: 11px;
text-transform: uppercase;
margin-right: 10px;
padding: 3px 7px 1px;
border-radius: 3px;
background: rgb(201, 96, 89);
}
.apt-firstep::before{ background-color: #4aa301;color:#fff }
.apt-second::before{ background-color:#4aa301;color:#fff }      
.apt-third::before{ background-color:#333;color:#fff }    
@media (min-width: 320px) and (max-width: 991px){ .apt-section{ display:none; } }                            
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
			
				<div class="apt-section">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-3 booking-top-btn no-padding">
                        <div class="apt-common apt-firstep apt-active">
                          <span class="graycolor">
                            <span>FIRST STEP</span>
                          </span>
                          <h4 class="apt-flightiti">
                            <span>Flight Itinerary</span>
                          </h4>
                        </div>
                      </div>
                      <div class="col-sm-3 booking-top-btn no-padding">
                        <div class="apt-common apt-second apt-active">
                          <span class="graycolor">
                            <span>SECOND STEP</span>
                          </span>
                          <h4 class="apt-flightiti">
                            <span>Passenger Details</span>
                          </h4>
                        </div>
                      </div>
                      <div class="col-sm-3 booking-top-btn no-padding">
                        <div class="apt-common apt-third apt-active">
                          <span class="graycolor">
                            <span>THIRD STEP</span>
                          </span>
                          <h4 class="apt-flightiti">
                            <span>Review</span>
                          </h4>
                        </div>
                      </div>
                      <div class="col-sm-3 booking-top-btn no-padding">
                        <div class="apt-common apt-forth apt-active">
                          <span class="graycolor">
                            <span>FINISH STEP</span>
                          </span>
                          <h4 class="apt-flightiti">
                            <span>Payments</span>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				
            <section class="flight-destinations">
                <div class="container">
                    <div class="row">
                        <div id="content" class="col-lg-9">
                            <div class="detail-content content-wrapper">   
                                <div class="description detail-box flight-book">
                                    <div class="detail-title"><h3>Booking Flight Review</h3></div>
                                    
																	
									
									
						<div class="dscrpton-cntnt detail-box">
						
						<!---------------------------------Onwards Flights------------------------------------->	
						
						<div class="dF pad10 justifyBetween alignItemsCenter">
						<div class="dF alignItemsCenter font18">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
							<span class="padL5"><?php echo $this->session->userdata('flightdepartureCity');	?> - <?php echo $this->session->userdata('flightarrivalCity'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"><!--<span class="flight-detailstyles__BaggageCancellationRulesSelection-sc-1i6unua-16 iytGnu">Baggage and Fare Rules</span>-->

                                        <!--<a href="#popup1" class="btn iytGnu" style="font-size: 15px;font-weight: 300;">Baggage and Fare Rules</a>
                                        <div id="popup1" class="popup">
                                          <a href="#" class="close">&times;</a>
                                          <h2>The Popup Has Arrived</h2>
                                          <p>This popup can be closed by clicking the fancy <b>×</b> in the top right corner or by clicking outside the popup box!</p>
                                        </div>
                                        <a href="#" class="close-popup"></a>-->

                                    </span><!--<div class="flight-detailstyles__Refundability-sc-1i6unua-15 edFviB  white">PARTIALLY REFUNDABLE</div>--></div>
						</div>						
						
                        <ul class="brdrBot">
                                            <li>
                          <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode'); ?>.png" style="width: 25%;">
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode'); ?> - <?php echo $this->session->userdata('flightNumber'); ?></p>
<p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber'); ?>)</p>
                                            </li>
                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime'); ?></p>
				<p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode');	?> <?php echo $this->session->userdata('flightdepartureTime');	?></p>			
                           
      <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName'); ?>,
<?php echo $this->session->userdata('flightdepartureCity');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal'); ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                      <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate');?></p>
                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('FlightArrivalCode'); ?> <?php echo $this->session->userdata('FlightArrivalTime'); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"> <?php echo $this->session->userdata('flightarrivalCityFullName'); ?>, <?php echo $this->session->userdata('flightarrivalCity'); ?>, <?php echo $this->session->userdata('flightarrivalCountry'); ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightarrivalTerminal'); ?>)</span></p>
                                            </li>
                        </ul>
										
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 12px;font-weight: 500;color: #adadad;">15 Kg  Check-In, 7 Kg Cabin
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>

                                        </div>
					
						
						<!---------------------------------Return Flights------------------------------------->		
			<?php if(@$this->session->userdata('flightdepartureCity2') !='') { ?>

		<div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18">
				
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
				<span class="padL5"><?php echo $this->session->userdata('flightdepartureCity2');	?> - <?php echo $this->session->userdata('flightarrivalCity2'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime2'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"><!--<span class="flight-detailstyles__BaggageCancellationRulesSelection-sc-1i6unua-16 iytGnu">Baggage and Fare Rules</span>-->

                                        <!--<a href="#popup1" class="btn iytGnu" style="font-size: 15px;font-weight: 300;">Baggage and Fare Rules</a>
                                        <div id="popup1" class="popup">
                                          <a href="#" class="close">&times;</a>
                                          <h2>The Popup Has Arrived</h2>
                                          <p>This popup can be closed by clicking the fancy <b>×</b> in the top right corner or by clicking outside the popup box!</p>
                                        </div>
                                        <a href="#" class="close-popup"></a>-->

                                    </span><!--<div class="flight-detailstyles__Refundability-sc-1i6unua-15 edFviB  white">PARTIALLY REFUNDABLE</div>--></div>
						</div>						
						
                        <ul class="brdrBot">
                                            <li>
                          <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode2'); ?>.png" style="width: 25%;">
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName2'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC2'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode2'); ?> - <?php echo $this->session->userdata('flightNumber2'); ?></p>
<p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber2'); ?>)</p>
                                            </li>
                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime2'); ?></p>
				<p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode2');	?> <?php echo $this->session->userdata('flightdepartureTime2');	?></p>			
                           
      <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName2'); ?>,
<?php echo $this->session->userdata('flightdepartureCity2');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry2'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal2'); ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute2'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                      <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate2');?></p>
                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('FlightArrivalCode2'); ?> <?php echo $this->session->userdata('FlightArrivalTime2'); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"> <?php echo $this->session->userdata('flightarrivalCityFullName2'); ?>, <?php echo $this->session->userdata('flightarrivalCity2'); ?>, <?php echo $this->session->userdata('flightarrivalCountry2'); ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightarrivalTerminal2'); ?>)</span></p>
                                            </li>
                        </ul>
										
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 12px;font-weight: 500;color: #adadad;">15 Kg  Check-In, 7 Kg Cabin
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>

                                        </div>			
										
				<?php } ?>						
										
										
										
                                        <div class="apt-btmborder pax-fordesktop">
                                                <div class="mt-20">
                                                    <h4 class="apt-passdel">
                                                        <span>Passenger Details</span> 
                                                        <span>(<?php echo count($passengersdetailsReview); ?>)</span>
                                                    </h4>
                                                    <ul class="art-allperson mt-20">
                                                        <li class="graycolor">Sr.</li>
                                                        <li class="graycolor">Name, Age &amp; Passport</li>
                                                        <li class="graycolor for-reviewpage">PNR &amp; Ticket No.</li>
                                                        <li class="graycolor">Seat Booking</li>
                                                        <li class="graycolor">Meal &amp; Baggage Preference</li>
                                                    </ul>
                                                    <div class="art-tablelist">
													<?php 
													
													if($passengersdetailsReview > 0) {
														$i=1;
													foreach($passengersdetailsReview as $row_passengers) 
															{
															?>
                                                        <ul class="art-tabody">
														
														
														
                                                            <li>
                                                                <div class="art-tdfirst graycolor"><?php echo $i; ?></div>
                                                                <div class="art-tdsecond">
        <span class="pax-detailsAll"><?php echo $row_passengers['title'];?> <?php echo $row_passengers['firstMiddlename'];?> <?php echo $row_passengers['lastName'];?>  </span> 
		<?php if($row_passengers['dob'] != "0000-00-00") { ?>
        <span class="pax-passportSize"><span> </span> <?php echo $row_passengers['dob'];?> </span>
		<?php } ?>
                                                                </div>
                                                                <div class="art-tdthird"> 
                                                                    <span class="art-spnlist"> NA </span>
                                                                </div>
                                                                <div class="art-tdfour">NA</div>
                                                            </li>
														
                                                        </ul>
													<?php $i++; } } ?>
                                                    </div>
																										
													
                                                </div>
                                            </div>

                                            <div class="apt-btmborder pb-30">
                                                <div class="mt-20">
                                                    <h4 class="apt-passdel pb-10">
                                                        <span>Contact Details</span>
                                                    </h4>
                                        <p>Email : <span class="art-conemail"><?php echo $this->session->userdata('users_email'); ?></span>
                                                    </p>
                                        <p>Mobile : <span class="art-conemail"><?php echo $this->session->userdata('users_countryCode'); ?><?php echo $this->session->userdata('users_mobile'); ?></span></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                 <!--   <button type="button" class="btn btn-warning asr-book"><i class="fa fa-angle-double-left"></i> &nbsp;   <span>Back</span></button> -->
													
<a class="btn-blue btn-red" style="border-radius:5px;margin-top: 10px;font-weight: 700;" href="javascript:window.history.go(-1);"><i class="fa fa-angle-double-left"></i> &nbsp;Back</a>
                                                </div>
                                                <div class="col-md-6">
												
	<a class="btn-blue " style="border-radius:5px;margin-top: 10px;font-weight: 700;float: right;" href="<?php echo base_url();?>flights/booking_flights_payment"> PROCEED TO PAY &nbsp;<i class="fa fa-angle-double-right"></i></a>

	
            <!--    <button type="button" class="btn btn-warning asr-book" style="float: right;"><span>PROCEED TO PAY</span> &nbsp;  <i class="fa fa-angle-double-right"></i></button> -->
				
				
                                                </div>
                                            </div>
                                    </div>
                                    
                                      
                                </div>                         					
								
                            </div>
                        </div>
						
						
						
						
						
						

                        <div class="col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">
                                                            <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"><!--Travelers 1 Adult--></span></h3></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-8">Base Fare</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('baseFareReTotal'); ?>                                            <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Adult Base Fare</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('adultTotalBaseFare'); ?></li>
                                                            </ul>
                                                        </li>
														
														 <?php if($this->session->userdata('childTotalBaseFare')  > 0){ ?>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Child Base Fare</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('childTotalBaseFare'); ?></li>
                                                            </ul>
                                                        </li>
														 <?php } ?>
																	
														<?php if($this->session->userdata('infantTotalBaseFare') > 0){ ?>
														<li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Infant Base Fare</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('infantTotalBaseFare'); ?></li>
                                                            </ul>
                                                        </li>
														<?php } ?>
                                                                                                               <!-- <li class="tooltip-p">
                                                            <ul style="padding-left: 0px;">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Adult Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> 3284</li>
                                                                </ul>
                                                                                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Child Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> 3284</li>
                                                                </ul>
                                                                                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Infant Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> 1429</li>
                                                                </ul>
                                                            </ul>
                                                        </li>-->
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
                                <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalTaxFare'); ?>   <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Airline GST</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalAGST'); ?></li>
                                                            </ul>
                                                        </li>   
														<li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee Tax</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalMFT'); ?></li>
                                                            </ul>
                                                        </li>                                                   
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalMF'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Other Taxes</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalOT'); ?></li>
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
                                        <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('grossTotal'); ?></span>
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
            const btns = document.querySelectorAll('.accordion__btn');
            const answers = document.querySelectorAll('.accordion__answer__container');
            const icons= document.querySelectorAll('.fa');



            for(let i=0;i < btns.length;i++) {
              
              btns[i].addEventListener('click', function () {
                for(let j=0;j < btns.length;j++) {
                  if(j !== i){
                    answers[j].classList.remove('active__accordion');
                    icons[j].classList.add('fa-plus');
                    icons[j].classList.remove('fa-minus');  } 
                }
                answers[i].classList.toggle('active__accordion');
                icons[i].classList.toggle('fa-plus');
                icons[i].classList.toggle('fa-minus');
                });
            }
        </script>
  </body>
</html>		
		