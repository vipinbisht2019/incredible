<?php // echo "<pre>"; print_r($tripInfoResult); die;?>



<html lang="en">
<head>
<title>Booking Flight success</title>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">

<?php include('includes/css.php'); ?>
<link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">

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
.art-allperson li:last-child {
    width: 59%;
    float: right;
    text-align: center;
}
 .panel-title{ font-size:13px;padding: 0;display: flex; }
 .panel-group .panel + .panel {
    margin-top: 0px;
}
.panel{ border: 0px solid transparent; }  
.panel-default > .panel-heading {
    color: #333;
    background-color: #f5f5f500;
    border-color: #ddd;
    border-bottom: 1px solid #ddd;
    padding: 15px;
}
.panel-group {
    margin-bottom: 20px;
    background: #fff;
    box-shadow: 0px 0px 20px #e0e0e0;
    border-radius: 8px;
}   
.panel-default > .panel-heading + .panel-collapse > .panel-body{ border-bottom: 1px solid #ddd; }
.faresummery__heading-box {
    background: #e5e5e5;
    display: inline-block;
    width: 100%;
    padding: 10px;
    color: #000;
    font-weight: bold;
    font-size: 14px;
    border-radius: 6px 6px 0 0;
}      
.faresummery__heading-box span { color: #444 }    
.panel-title > a {
    text-decoration: none;
}   
.apt-firstep::before{ background-color: #4aa301;color:#fff }
.apt-second::before{ background-color:#4aa301;color:#fff }      
.apt-third::before{ background-color:#4aa301;color:#fff }      
 .apt-forth::before{ background-color:#4aa301;color:#fff }      
 @media (min-width: 320px) and (max-width: 991px){ .apt-section{ display:none; } }                            
</style>        
        
	
</head>
<body class="not-front page-post">       
    
<div id="main">
   <?php include('includes/header.php'); ?>
   

			<div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Pages<span>/</span>Success</div>
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
                            <span>FINISH</span>
                          </span>
                          <h4 class="apt-flightiti">
                            <span>Payments</span>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				<?php //echo "<pre>"; print_r($bookingDetails); die;?>
            <section class="flight-destinations">
                <div class="container">
                    <div class="row">
                        <div id="content" class="col-lg-12">
                            <div class="detail-content content-wrapper">   
                                <div class="description detail-box flight-book">
                                    <div class="detail-title">
                                        <?php if($bookingDetails['booking_status'] == 'SUCCESS'){ ?>
                                            <h3>Booking Status : <span style="color:#008000;"><?php echo $bookingDetails['booking_status']; ?></span></h3><br>
                                        <?php }else if( $bookingDetails['booking_status'] == 'PENDING'){ ?>
                                            <h3>Booking Status : <span style="color:#ff0000;"><?php echo $bookingDetails['booking_status']; ?></span></h3><br>
                                        <?php } ?>
                                        <h3>Booking ID : <span style="color:#008000;"><?php echo $bookingDetails['booking_id']; ?></span></h3>
                                    </div>									
								
								
						<!---------------------------------Onwards Flights------------------------------------->	
								
                        <div class="dF pad10 justifyBetween alignItemsCenter">
                            <div class="dF alignItemsCenter font18">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                <span class="padL5"><?php echo $this->session->userdata('flightdepartureCity');	?> - <?php echo $this->session->userdata('flightarrivalCity'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime'); ?></span>
                            </div>
                            <div class="dF alignItemsCenter">
                                <span class="padR5"></span>
                            </div>
					    </div>
                                    <div class="dscrpton-cntnt detail-box">
									
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



                                    <div class="dscrpton-cntnt detail-box">
									
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
                                    </div>
										
									
					<?php } ?>	


				<!---------------------------------Third Flights------------------------------------->	

						<?php if(@$this->session->userdata('flightdepartureCity3') !='') { ?>			
								
								<div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
				<span class="padL5"><?php echo $this->session->userdata('flightdepartureCity3');	?> - <?php echo $this->session->userdata('flightarrivalCity3'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime3'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"><!--<span class="flight-detailstyles__BaggageCancellationRulesSelection-sc-1i6unua-16 iytGnu">Baggage and Fare Rules</span>-->

                                        <!--<a href="#popup1" class="btn iytGnu" style="font-size: 15px;font-weight: 300;">Baggage and Fare Rules</a>
                                        <div id="popup1" class="popup">
                                          <a href="#" class="close">&times;</a>
                                          <h2>The Popup Has Arrived</h2>
                                          <p>This popup can be closed by clicking the fancy <b>×</b> in the top right corner or by clicking outside the popup box!</p>
                                        </div>
                                        <a href="#" class="close-popup"></a>-->

                                    </span><!--<div class="flight-detailstyles__Refundability-sc-1i6unua-15 edFviB  white">PARTIALLY REFUNDABLE</div>--></div>
									</div>



                                    <div class="dscrpton-cntnt detail-box">
									
                                         <ul class="brdrBot">
                                            <li>
                          <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode3'); ?>.png" style="width: 25%;">
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName3'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC3'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode3'); ?> - <?php echo $this->session->userdata('flightNumber3'); ?></p>
<p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber3'); ?>)</p>
                                            </li>
                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime3'); ?></p>
				<p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode3');	?> <?php echo $this->session->userdata('flightdepartureTime3');	?></p>			
                           
      <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName3'); ?>,
<?php echo $this->session->userdata('flightdepartureCity3');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry3'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal3'); ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute3'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                      <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate3');?></p>
                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('FlightArrivalCode3'); ?> <?php echo $this->session->userdata('FlightArrivalTime3'); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"> <?php echo $this->session->userdata('flightarrivalCityFullName3'); ?>, <?php echo $this->session->userdata('flightarrivalCity3'); ?>, <?php echo $this->session->userdata('flightarrivalCountry3'); ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightarrivalTerminal3'); ?>)</span></p>
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
                                    </div>
										
									
					<?php } ?>			
					
							
					<!---------------------------------Forth Flights------------------------------------->	

						<?php if(@$this->session->userdata('flightdepartureCity4') !='') { ?>			
								
								<div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
				<span class="padL5"><?php echo $this->session->userdata('flightdepartureCity4');	?> - <?php echo $this->session->userdata('flightarrivalCity4'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime4'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"><!--<span class="flight-detailstyles__BaggageCancellationRulesSelection-sc-1i6unua-16 iytGnu">Baggage and Fare Rules</span>-->

                                        <!--<a href="#popup1" class="btn iytGnu" style="font-size: 15px;font-weight: 300;">Baggage and Fare Rules</a>
                                        <div id="popup1" class="popup">
                                          <a href="#" class="close">&times;</a>
                                          <h2>The Popup Has Arrived</h2>
                                          <p>This popup can be closed by clicking the fancy <b>×</b> in the top right corner or by clicking outside the popup box!</p>
                                        </div>
                                        <a href="#" class="close-popup"></a>-->

                                    </span><!--<div class="flight-detailstyles__Refundability-sc-1i6unua-15 edFviB  white">PARTIALLY REFUNDABLE</div>--></div>
									</div>



                                    <div class="dscrpton-cntnt detail-box">
									
                                         <ul class="brdrBot">
                                            <li>
                          <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode4'); ?>.png" style="width: 25%;">
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName4'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC4'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode4'); ?> - <?php echo $this->session->userdata('flightNumber4'); ?></p>
<p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber4'); ?>)</p>
                                            </li>
                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime4'); ?></p>
				<p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode4');	?> <?php echo $this->session->userdata('flightdepartureTime4');	?></p>			
                           
      <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName4'); ?>,
<?php echo $this->session->userdata('flightdepartureCity4');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry4'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal4'); ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute4'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                      <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate4');?></p>
                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('FlightArrivalCode4'); ?> <?php echo $this->session->userdata('FlightArrivalTime4'); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"> <?php echo $this->session->userdata('flightarrivalCityFullName4'); ?>, <?php echo $this->session->userdata('flightarrivalCity4'); ?>, <?php echo $this->session->userdata('flightarrivalCountry4'); ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightarrivalTerminal4'); ?>)</span></p>
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
                                    </div>
										
									
					<?php } ?>			
					
							
						<!---------------------------------Fifth Flights------------------------------------->	

						<?php if(@$this->session->userdata('flightdepartureCity5') !='') { ?>			
								
								<div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
				<span class="padL5"><?php echo $this->session->userdata('flightdepartureCity5');	?> - <?php echo $this->session->userdata('flightarrivalCity5'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime5'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"><!--<span class="flight-detailstyles__BaggageCancellationRulesSelection-sc-1i6unua-16 iytGnu">Baggage and Fare Rules</span>-->

                                        <!--<a href="#popup1" class="btn iytGnu" style="font-size: 15px;font-weight: 300;">Baggage and Fare Rules</a>
                                        <div id="popup1" class="popup">
                                          <a href="#" class="close">&times;</a>
                                          <h2>The Popup Has Arrived</h2>
                                          <p>This popup can be closed by clicking the fancy <b>×</b> in the top right corner or by clicking outside the popup box!</p>
                                        </div>
                                        <a href="#" class="close-popup"></a>-->

                                    </span><!--<div class="flight-detailstyles__Refundability-sc-1i6unua-15 edFviB  white">PARTIALLY REFUNDABLE</div>--></div>
									</div>



                                    <div class="dscrpton-cntnt detail-box">
									
                                         <ul class="brdrBot">
                                            <li>
                          <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode5'); ?>.png" style="width: 25%;">
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName5'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC5'); ?></p>
                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode5'); ?> - <?php echo $this->session->userdata('flightNumber5'); ?></p>
<p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber5'); ?>)</p>
                                            </li>
                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime5'); ?></p>
				<p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode5');	?> <?php echo $this->session->userdata('flightdepartureTime5');	?></p>			
                           
      <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName5'); ?>,
<?php echo $this->session->userdata('flightdepartureCity5');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry5'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal5'); ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute5'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                      <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate5');?></p>
                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('FlightArrivalCode5'); ?> <?php echo $this->session->userdata('FlightArrivalTime5'); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"> <?php echo $this->session->userdata('flightarrivalCityFullName5'); ?>, <?php echo $this->session->userdata('flightarrivalCity5'); ?>, <?php echo $this->session->userdata('flightarrivalCountry5'); ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightarrivalTerminal5'); ?>)</span></p>
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
                                    </div>
										
									
					<?php } ?>			
					
								
															
									
                                </div>





                                <div>
                                    <input type="button" value="Fare Rules" onClick="showHideDiv('divMsg')" style="font-size: 16px;padding-right: 40px;background: #244082;color: #fff;font-weight: 500;border-radius: 3px;"/> 
                                    <i class="fa fa-plus" style="position: relative;right: 38px;padding-left: 5px;color: #fff;"></i> 
                                    <br><br>
                                    <div id="divMsg" style="background-color: rgb(236 236 236); color: #ffffff;height: auto; width: 100%; text-align: center; display:none;border-radius: 4px;">
                                            <button class="ars-activelist fare-rules-tabs"><?php echo $this->session->userdata('flightDepartureCode');	?>-<?php echo $this->session->userdata('FlightArrivalCode'); ?></button>
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


                                <div class="confirm_pasenger-details">
                                    <div class="">
                                        <div class="row fill-mobiledata">
                                            <div class="col-xs-12">
                                                <h4 class="apt-passdel pax-detailhead">
                                                    <span>Passenger Details</span> 
                                                    <span>(1)</span>
                                                </h4>
                                                <div class="fill-paxdetail">
                                                    <ul class="fill-paxleft">
                                                        <li class="fill-datalist">
                                                            <div class="pax-contenteft">
                                                                <h6 class="pax-fillheading">PNR No.</h6>
                                                            </div>
                                                            <div class="pax-tdthird">
                                                                <div>
                                                                    <b>BLR-CCU</b>:
                                                                    <span class="art-pnrstatus"> TESTPNR </span>
                                                                </div>
                                                                <div>
                                                                    <b>CCU-BOM</b>:
                                                                    <span class="art-pnrstatus"> TESTPNR </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fill-datalist">
                                                            <div class="pax-contenteft">
                                                                <h6 class="pax-fillheading">Seat Pref.</h6>
                                                            </div>
                                                            <div class="pax-tdfour">
                                                                <div>
                                                                    <h6 class="pax-datafill">NA </h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fill-datalist">
                                                            <div class="pax-contenteft">
                                                                <h6 class="pax-fillheading">Meal Pref.</h6>
                                                            </div>
                                                            <div class="pax-tdfifth">
                                                                <div>
                                                                    <h6 class="pax-datafill">NA </h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fill-datalist">
                                                            <div class="pax-contenteft">
                                                                <h6 class="pax-fillheading">Baggage Pref.</h6>
                                                            </div>
                                                            <div class="pax-tdfifth">
                                                                <div>
                                                                    <h6 class="pax-datafill">NA </h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fill-datalist">
                                                        </li>
                                                        <li class="fill-datalist">
                                                            <div class="pax-contenteft">
                                                                <h6 class="pax-fillheading">Extra Sevice</h6>
                                                            </div>
                                                            <div class="pax-tdfifth">
                                                                <div>
                                                                    <h6 class="pax-datafill">NA </h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-20">
                                    <div class="apt-btmborder pax-fordesktop pax_container">
                                        <h4 class="apt-passdel" style="margin-bottom:0px;">
                                            <span>Passenger Details</span> 
                                            <span>(<?php echo count($passengersdetailsSuccess); ?>)</span>
                                        </h4>
                                        <ul class="art-allperson">
                                            <li class="graycolor">Sr.</li>
                                            <li class="graycolor">Name, Age &amp; Passport</li>
                                            <li class="graycolor for-reviewpage">PNR &amp; Ticket No.</li>
                                            <li class="graycolor">PNR, Ticket No. & Status</li>
                                            <li class="graycolor">Meal &amp; Baggage Preference</li>
                                        </ul>
										
                                         <div class="art-tablelist">
													<?php 
													
													if($passengersdetailsSuccess > 0) {
														$i=1;
													foreach($passengersdetailsSuccess as $row_passengers) 
															{
															?>
                                                        <ul class="art-tabody">
														
														
														
                                                            <li>
                                                                <div class="art-tdfirst graycolor"><?php echo $i; ?></div>
                                                                <div class="art-tdsecond">
                                                                <span class="pax-detailsAll"><?php echo $row_passengers['title'];?> <?php echo $row_passengers['firstMiddlename'];?> <?php echo $row_passengers['lastName'];?>  </span> 
                                                                <?php if($row_passengers['dob'] != "0000-00-00") { ?>
                                                                <span class="pax-passportSize"><span> </span>DOB:  <?php echo date('d-m-Y',strtotime($row_passengers['dob']));?> </span>
                                                                <?php } ?>
                                                                </div>
                                                                <?php $citiesCode = $this->session->userdata('flightDepartureCode').'-'.$this->session->userdata('FlightArrivalCode'); ?>
                                                               
                                                                <div class="art-tdthird"> 
                                                                    <?php if(!empty($bookingDetails['booking_pnr'])){ ?>

                                                                        <span class="art-spnlist"><?php echo $citiesCode; ?> : <?php echo $bookingDetails['booking_pnr']; ?> </span>

                                                                    <?php }else{  ?>

                                                                        <span class="art-spnlist"> NA </span>

                                                                    <?php } ?>
                                                                </div>
                                                                    
                                                                <?php if((!empty($row_passengers['baggage'])) || (!empty($row_passengers['meals']))){ ?>

                                                                    <div class="art-tdfour"><?php echo $citiesCode; ?> : <?php echo $row_passengers['baggage']; ?></div>
                                                                    <div class="art-tdfour"><?php echo $citiesCode; ?> : <?php echo $row_passengers['meals']; ?></div>

                                                                <?php }else{ ?>

                                                                    <div class="art-tdfour">NA</div>

                                                                <?php  } ?>
                                                            </li>
														
                                                        </ul>
													<?php $i++; } } ?>
                                                    </div>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="container">
                    <div class="col-md-8" style="padding:0px;">
                        <span class="graycolor faresummery__heading-box"><span>FARE SUMMARY</span></span>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Base Fare
                                </a>
                                <p class="confirm-rate"><i class="fa fa-inr"></i> <?php echo $this->session->userdata('baseFareReTotal'); ?></p>
                              </h4>
                            </div>
                            <!--<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                Content 1.
                              </div>
                            </div>-->
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Taxes and Fees
                                </a>
                                <p class="confirm-rate"><i class="fa fa-inr"></i> <?php echo $this->session->userdata('totalTaxFare'); ?></p>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            Airline GST 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php echo $this->session->userdata('totalAGST'); ?></div>
                                    </div> 
									<div class="row">
                                        <div class="col-md-3">
                                            Management Fee Tax
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php echo $this->session->userdata('totalMFT'); ?></div>
                                    </div>                                   
                                    <div class="row">
                                        <div class="col-md-3">
                                            Management Fee  
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php echo $this->session->userdata('totalMF'); ?></div>
                                    </div>
									 <div class="row">
                                        <div class="col-md-3">
                                            Other Tax 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php echo $this->session->userdata('totalOT'); ?></div>
                                    </div>
									
									
                                <!--    <div class="row">
                                        <div class="col-md-3">
                                            Airline Tax 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 259.00</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            UDF 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 211.00</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            RCF 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 50.00</div>
                                    </div>
									-->
                              </div>
                            </div>
                          </div>
                    <?php if(!empty($this->session->userdata('totalBaggageMeal'))){ ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Meals, Baggage and Seat
                                </a>
                                <p class="confirm-rate"><i class="fa fa-inr"></i> <?php echo $this->session->userdata('totalBaggageMeal'); ?></p>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                          Baggae
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php //echo $this->session->userdata('totalAGST'); ?></div>
                                    </div> 
									<div class="row">
                                        <div class="col-md-3">
                                            Meals
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php //echo $this->session->userdata('totalMFT'); ?></div>
                                    </div>                                   
                                    <div class="row">
                                        <div class="col-md-3">
                                            Seat  
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php //echo $this->session->userdata('totalMF'); ?></div>
                                    </div>
									<!-- <div class="row">
                                        <div class="col-md-3">
                                            Other Tax 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> <?php //echo $this->session->userdata('totalOT'); ?></div>
                                    </div> -->
									
									
                                <!--    <div class="row">
                                        <div class="col-md-3">
                                            Airline Tax 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 259.00</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            UDF 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 211.00</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            RCF 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 50.00</div>
                                    </div>
									-->
                              </div>
                            </div>
                        </div>
                        <?php } ?>

                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Total
                                </a>
                                <?php if(empty($this->session->userdata('totalGrossAmount'))){ ?>
                                <p class="confirm-rate"><i class="fa fa-inr"></i><?php echo $this->session->userdata('grossTotal'); ?></p>
                                <?php } else{ ?>
                                <p class="confirm-rate"><i class="fa fa-inr"></i><?php echo $this->session->userdata('totalGrossAmount'); ?></p>
                                <?php } ?>
                              </h4>
                            </div>
                        <!--    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                <div class="row">
                                        <div class="col-md-3">
                                            Commission 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 150.00</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            TDS 
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 15.00</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            Net Price
                                        </div>
                                        <div class="col-md-9"><i class="fa fa-inr"></i> 2.70</div>
                                    </div>
                              </div>
                            </div> -->
                          </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="abt-mwsg mt-20 false">
                                <h5>
                                    <span>IMPORTANT INFORMATION</span>
                                </h5>
                                <ul class="abt-infolist">
                                    <li>You should carry a print-out of your booking and present for check-in.</li>
                                    <li>Date &amp; Time is calculated based on the local time of city/destination.</li>
                                    <li>Use the Reference Number for all Correspondence with us.</li><li>Use the Airline PNR for all Correspondence directly with the Airline</li>
                                    <li>For departure terminal please check with airline first.</li>
                                    <li>Please CheckIn atleast 2 hours prior to the departure for domestic flight and 3 hours prior to the departure of international flight.</li>
                                    <li>For rescheduling/cancellation within 4 hours of departure time contact the airline directly</li>
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
        <script>
             function showHideDiv(ele) {
                var srcElement = document.getElementById(ele);
                if (srcElement != null) {
                    if (srcElement.style.display == "block") {
                        srcElement.style.display = 'none';
                    }
                    else {
                        srcElement.style.display = 'block';
                    }
                    return false;
                }
            }
        </script>
  </body>
</html>		
		