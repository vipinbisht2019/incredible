<?php //echo error_reporting(0);?>
<?php

 $adult_Pax1 = $this->session->userdata('adult_user');
// echo "<br>";

 $child_Pax1 = $this->session->userdata('child_user');
// echo "<br>";

 $infant_Pax1 = $this->session->userdata('infant_user');

$flightId = $this->uri->segment(3);
// echo "<br>";

$flightIdReturn = $this->uri->segment(4);
//echo "<br>";

/*
echo $bookingId;
echo "<br>";
echo "<pre>";
print_r($tripInfoResult);
echo "<br>";

echo "<pre>";
print_r($tripInfoResultReturn);

*/

// echo $bookingId;
// echo $bookingType;
/*
 echo "<br>";
echo "<pre>";
 print_r($tripInfoResult);

echo "<br>";

 echo "<pre>";
 print_r($flights_checkout);
 */
 
// echo "<br>";

 // echo $tripInfoResult['sI'][0]['fD'][''];

 // $adultMF = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['bI'];
// echo count($adultMF);
                         //      echo  @$childMF = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF']; 
                         //      echo @$infantMF = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'];
								
 
// echo "<pre>";
// print_r($tripInfoResult['totalPriceList']);
// echo "<br>";

// die();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking Flight Details</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $flights_checkout[0]['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $flights_checkout[0]['meta_keyword']; ?>">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

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
  /*justify-content: end;*/
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
                        <div class="apt-common apt-third apt-active">
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
<?php //echo '<pre>'; print_r($tripInfoResult);?>
            <section class="flight-destinations">

                <div class="container">
                    <div class="row">
                        <div id="content" class="col-lg-9">
                            <div class="detail-content content-wrapper">   
                                <div class="description detail-box flight-book">
                                    <div class="detail-title"><h3>Ticket Details</h3></div>
                                    <div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg><span class="padL5"><?php echo $tripInfoResult['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResult['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResult['sI'][0]['dt'])); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"><!--<span class="flight-detailstyles__BaggageCancellationRulesSelection-sc-1i6unua-16 iytGnu">Baggage and Fare Rules</span>-->

                                        <!--<a href="#popup1" class="btn iytGnu" style="font-size: 15px;font-weight: 300;">Baggage and Fare Rules</a>
                                        <div id="popup1" class="popup">
                                          <a href="#" class="close">&times;</a>
                                          <h2>The Popup Has Arrived</h2>
                                          <p>This popup can be closed by clicking the fancy <b>×</b> in the top right corner or by clicking outside the popup box!</p>
                                        </div>
                                        <a href="#" class="close-popup"></a>-->

                                    </span><!--<div class="flight-detailstyles__Refundability-sc-1i6unua-15 edFviB  white">PARTIALLY REFUNDABLE</div>--></div></div>
									
                                    <div class="dscrpton-cntnt detail-box">
                                        <ul class="brdrBot">
                                            <li>
                                                <span>
													<img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResult['sI'][0]['fD']['aI']['code']; ?>.png" style="width: 25%;">
                                                <p class="flight-detl"><?php echo $tripInfoResult['sI'][0]['fD']['aI']['name']; ?></p>
                                                <p class="flight-detl"><?php echo ucfirst($tripInfoResult['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                <p class="flight-detl"><?php echo $tripInfoResult['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResult['sI'][0]['fD']['fN']; ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResult['sI'][0]['fD']['eT']; ?>)</p>
												</span>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResult['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][0]['da']['code']; ?> <?php echo  $departureTime = date("H:i",strtotime($tripInfoResult['sI'][0]['dt'])); ?></p>
												
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][0]['da']['name']; ?>, <?php echo $tripInfoResult['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResult['sI'][0]['da']['terminal']; ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutes = $tripInfoResult['sI'][0]['duration'];
                                                    $hours = floor($minutes / 60);
                                                    $min = $minutes - ($hours * 60); 
                                                    
                                                    echo  $hours."h ".$min."m" ;
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResult['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][0]['aa']['code']; ?> <?php echo  $arrivalTime = date("H:i",strtotime($tripInfoResult['sI'][0]['at'])); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][0]['aa']['name']; ?>, <?php echo $tripInfoResult['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResult['sI'][0]['aa']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResult['sI'][0]['aa']['terminal']; ?>)</span></p>
                                            </li>
                                        </ul>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 12px;font-weight: 500;color: #adadad;"><?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                    </div>
                                    <?php if(@$tripInfoResultReturn!=''){ ?>
                                    <div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy rotate180"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg><span class="padL5"><?php echo $tripInfoResultReturn['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultReturn['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?></span></div><div class="dF alignItemsCenter"><span class="padR5">
                                    </span></div></div>
                                    <div class="dscrpton-cntnt detail-box">
                                        <ul class="brdrBot">
                                            <li>
                                                <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['code']; ?>.png" style="width: 25%;">
                                                <p class="flight-detl"><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['name']; ?></p>
                                                <p class="flight-detl"><?php echo ucfirst($tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                <p class="flight-detl"><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultReturn['sI'][0]['fD']['fN']; ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultReturn['sI'][0]['fD']['eT']; ?>)</p>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][0]['da']['code']; ?> <?php echo  $departureTime = date("H:i",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][0]['da']['name']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultReturn['sI'][0]['da']['terminal']; ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutes = $tripInfoResultReturn['sI'][0]['duration'];
                                                    $hours = floor($minutes / 60);
                                                    $min = $minutes - ($hours * 60); 
                                                    
                                                    echo  $hours."h ".$min."m" ;
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultReturn['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][0]['aa']['code']; ?> <?php echo  $arrivalTime = date("H:i",strtotime($tripInfoResultReturn['sI'][0]['at'])); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][0]['aa']['name']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['aa']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $tripInfoResultReturn['sI'][0]['aa']['terminal']; ?>)</span></p>
                                            </li>
                                        </ul>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 12px;font-weight: 500;color: #adadad;"><?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <div class="detail-title"><h3>Your Personal Information</h3></div>
                                    <div class="description-content">
                        <form name="" action="<?php echo base_url('flights/flight_review');?>" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <label>Note: Please make sure you enter the Name as per your govt. photo id</label>
														
													 <div class="row">												 
													 
														<main>
      
	  
								<?php if(count($adult_Pax1) > 0) {
									$i=1;
								while($adult_Pax1 > 0) {	
									?>
									
								<div class="accordion__container">
									  <div class="accordion__question__container">
										<span class="accordion__question">Adult <?php echo $i; ?> </span>&nbsp;
										<span class="accordion__btn"><i class="fa fa-angle-down"></i>         </span>
										</div>
														  
								  <div class="accordion__answer__container active__accordion">
									<div class="col-md-2 form-group padding_5px " >
                                     <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult Name</span>
                                      </div>
										<div class="col-md-2 form-group ">
											<span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('title'); ?></span>
											<input type="hidden" name="paxType[]" value="ADULT" />
											<select name="title[]" id="title" required />
												<option value="">Title</option>
												<option value="Mr">Mr</option>
												<option value="Ms">Ms</option>
												<option value="Mrs">Mrs</option>
											</select>
										</div>								
													 
										<span style="text-align:left; color:#FF0000;font-size:12px;";>
										<?php echo form_error('first_middle_name'); ?> </span>
                                      
		                			   <div class="col-md-4 form-group padding_5px " >
                                      <?php
									      // ------------------------------ first Name form ---------------------------------
										  $val=set_value("first_middle_name");
                                            $data = array('name'  => 'first_middle_name[]', 'id' => 'first_middle_name', 'value' => $val, 'placeholder' => 'first middle name', 'class'=>"form-control margin_bottom" ,'required'=>'required');
                                            echo form_input($data);
                                        ?>
                                      </div>
									  
									   <div class="col-md-4 form-group padding_5px " >
                                      <?php
									      // ------------------------------ first Name form ---------------------------------
										  $val=set_value("last_name");
                                            $data = array('name'  => 'last_name[]', 'id' => 'last_name', 'value' => $val, 'placeholder' => 'last name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                            echo form_input($data);
                                        ?>
										<input type="hidden" name="dob[]" id="datepicker" placeholder="dob">
                                      </div>
									</div>
								</div>
								
								<?php 
								$adult_Pax1--;
								$i++;
								}
								} ?>
														
									
									
									
									
								<?php if(count($child_Pax1) > 0) {
									$j=1;
								while($child_Pax1 > 0) {	
								?>
									
														
									<div class="accordion__container">
												 <div class="accordion__question__container">
														<span class="accordion__question">Child <?php echo $j; ?> </span>&nbsp;
														<span class="accordion__btn"><i class="fa fa-angle-down"></i>         </span>
														  </div>
														  <div class="accordion__answer__container">
												 <div class="col-md-2 form-group padding_5px " >
											<span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child Name</span>
                                      </div>			  
														  
																<div class="col-md-2 form-group ">
                                      <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('title'); ?></span>
                                     
									 <input type="hidden" name="paxType[]" value="CHILD" />
									  <select name="title[]" id="title" style="color:black;" required />
											<option value="">Title</option>
											<option value="Ms">Ms</option>
											<option value="Master">Master</option>
									  </select>
										</div>								
													 
											<span style="text-align:left; color:#FF0000;font-size:12px;";> <?php echo form_error('first_middle_name'); ?> </span>
                                      
		                			   <div class="col-md-4 form-group padding_5px " >
                                      <?php
									      // ------------------------------ first Name form ---------------------------------
										  $val=set_value("first_middle_name");
                                            $data = array('name'  => 'first_middle_name[]', 'id' => 'first_middle_name', 'value' => $val, 'placeholder' => 'first middle name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                            echo form_input($data);
                                        ?>
                                      </div>
									  
									   <div class="col-md-4 form-group padding_5px " >
                                      <?php
									      // ------------------------------ first Name form ---------------------------------
										  $val=set_value("last_name");
                                            $data = array('name'  => 'last_name[]', 'id' => 'last_name', 'value' => $val, 'placeholder' => 'last name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                            echo form_input($data);
                                        ?>
										<input type="hidden" name="dob[]" id="datepicker" placeholder="dob">
                                      </div>
										</div>
									</div>	
									
								<?php 
								$child_Pax1--;
								$j++;
								}
								} ?>	
									
								<?php if(count($infant_Pax1) > 0) {
									$k=1;
								while($infant_Pax1 > 0) {	
								?>	
									<div class="accordion__container">
												 <div class="accordion__question__container">
														<span class="accordion__question">Infant <?php echo $k; ?> </span>&nbsp;
														<span class="accordion__btn"><i class="fa fa-angle-down"></i>         </span>
														  </div>
								 <div class="accordion__answer__container">
								 
								 
								 <div class="row">
								 <div class="col-md-12">
								 
									<div class="col-md-2 form-group padding_5px " >
											<span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Infant Name</span>
                                    </div>			  
														  
									 <div class="col-md-2 form-group ">
                                      <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('title'); ?></span>
                                       <input type="hidden" name="paxType[]" value="INFANT" />
									  <select name="title[]" id="title" style="color:black;" required />
											<option value="">Title</option>
											<option value="Ms">Ms</option>
											<option value="Master">Master</option>
									  </select>
									 </div>								
													 
											<span style="text-align:left; color:#FF0000;font-size:12px;";> <?php echo form_error('first_middle_name'); ?> </span>
                                      
		                			   <div class="col-md-4 form-group padding_5px " >
                                      <?php
									      // ------------------------------ first Name form ---------------------------------
										  $val=set_value("first_middle_name");
                                            $data = array('name'  => 'first_middle_name[]', 'id' => 'first_middle_name', 'value' => $val, 'placeholder' => 'first middle name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                            echo form_input($data);
                                        ?>
                                      </div>
									  
									   <div class="col-md-4 form-group padding_5px " >
                                      <?php
									      // ------------------------------ first Name form ---------------------------------
										  $val=set_value("last_name");
                                            $data = array('name'  => 'last_name[]', 'id' => 'last_name', 'value' => $val, 'placeholder' => 'last name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                            echo form_input($data);
                                        ?>
                                      </div>
									  
									</div>									  
									  
									   <div class="col-md-12">
									  <div class="col-md-2 form-group padding_5px " >
											<span style=" color:rgb(119, 119, 119);font-size:15px;";>Date of birth</span>
                                    </div>			  
														  
									 <div class="col-md-4 form-group ">
                                      <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('day'); ?></span>
                                       
									<input type="date" name="dob[]" id="datepicker" placeholder="dob" required /> 
									 </div>	

											
									  </div>									  
									  
									  </div>
									  
									  
									  
										</div>
									</div>	
									
									<?php 
								$infant_Pax1--;
								$k++;
								}
								} ?>								
														
														  
														</main>
																				  
									  </div>													
													
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Email Id*:</label>
                                       <input type="email" class="form-control" name="email" id="email" placeholder="abc@xyz.com" required />
                                                </div>
												
                                                <div class="form-group col-lg-6 col-left-padding">
                                                <!--    <label>Phone Number:</label> -->
													
													  <div class="row">
                               
										<div class="col-md-4 form-group ">
										 <label>Country Code:</label>
										
                              <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('countryCode'); ?></span>
                                      
									  <select name="countryCode" id="countryCode" style="width:120px;">
											<option value="91" style="width:120px;">India ( +91 )</option>
											<option value="93">Afghanistan ( +93 )</option>
											<option value="213">Algeria ( +213 )</option>
											<option value="1">American Samoa ( +1 )</option>
									  </select>
										</div>	
		                			  
									  <div class="col-md-6 form-group padding_5px offset-md-2">
									   <label>Mobile Number*:</label>
                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('mobile'); ?></span>
                                       <?php
									      // ------------------------------ mobile form ---------------------------------
                                            $data = array('name'  => 'mobile', 'id' => 'mobile',  'placeholder' => 'mobile', 'class'=>"form-control margin_bottom",'minlength'=>'10','maxlength'=>'10','required'=>'required');
                                            echo form_input($data);
                                        ?>
                                      </div>
									   
									  
									  </div>
													
													
                                                </div>
                                             
                                                <!--<div class="form-group col-lg-6">
                                                    <label>Arrival Date:</label>
                                                    <input type="date" class="form-control" id="arrival-date">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Departure Date:</label>
                                                    <input type="date" class="form-control" id="departure-date">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" id="date" placeholder="Select Date">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>No of Tickets:</label>
                                                    <input type="number" class="form-control" id="phnumber1" placeholder="Select a number">
                                                </div>
                                                
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Nationality:</label>
                                                    <select>
                                                        <option value="american">American</option>
                                                        <option value="opel">Malaysian</option>
                                                        <option value="audi">German</option>
                                                    </select>   
                                                </div>
                                                <div class="form-group textarea col-lg-12">
                                                    <label>Message:</label>
                                                    <textarea placeholder="Enter a message"></textarea>
                                                </div>-->



                                                <div class="col-lg-12">
                                                    <div class="checkbox-outer">
												
												<!--	<div>
														<span class="psng">Error:</span>You can't select two passengers with the same name
													</div> -->
                                                        <input type="checkbox" name="vehicle2" value="Car"> I want to receive <a href="#">Let’s Travel</a> promotional offers in the future terms and conditions.
                                                    </div>
													
													<div class="comment-btn">
													 <input type="hidden" name="flag" value="yes" />	

													<input type="hidden" name="flightId" value="<?php echo $flightId; ?>" />
	<input type="hidden" name="flightIdReturn" value="<?php  if(!empty($flightIdReturn)) { echo $flightIdReturn; } ?>" />
													<input type="hidden" name="bookingId" value="<?php echo $bookingId; ?>" />
													<input type="hidden" name="flightType" value="<?php echo $bookingType; ?>" />
													<input type="submit"class="btn btn-blue btn-red" name="submit" value="Proceed">
													<!--	<a href="#" class="btn-blue btn-red">Proceed</a> -->
													</div>
                                                </div>
																								
                                            </div>
                                        </form>
                                    </div>    
                                </div>
								
								
								
                        <!--    <div class="description detail-box flight-book">
                                    <div class="detail-title"><h3>Your Card Information</h3></div>
                                    <div class="description-content">
                                        <form>
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" id="Name" placeholder="Enter full name in card">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Card Number:</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Enter Card Number">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Booking ID:</label>
                                                    <input type="text" class="form-control" id="phnumber" placeholder="XXXXX">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Expiry Date:</label>
                                                    <input type="date" class="form-control" id="date">
                                                </div>
                                                <div class="form-group col-lg-6 col-left-padding">
                                                    <label>Card Type:</label>
                                                    <select>
                                                        <option value="male">MasterCard</option>
                                                        <option value="female">Paypal</option>
                                                        <option value="other">Visa</option>
                                                        <option value="other">Discover</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="checkbox-outer">
                                                        <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms and conditions.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>    
                                </div>
                                <div class="comment-btn">
                                    <a href="#" class="btn-blue btn-red">Confirm Booking</a>
                                </div> -->
								
								
                            </div>
                        </div>

                        <div class="col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">
                            <?php 

                                error_reporting(0);

                                $adultCount = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['TF'];
                                @$childCount = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['TF']; 
                                @$infantCount = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['TF']; 
                                $adultReCount = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['fC']['TF'];
                                @$childReCount = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['fC']['TF']; 
                                @$infantReCount = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['fC']['TF']; 
    
                                $grossTotal = $adultCount + $adultReCount + $childCount + $childReCount +  $infantCount + $infantReCount;

                              //  $adultCont = count($tripInfoResult['totalPriceList'][0]['fd']['ADULT']);

                                $adultBf = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
                                @$childBf = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['BF']; 
                                @$infantBf = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['BF']; 

                                $adulRetBf = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
                                @$childReBf = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['fC']['BF']; 
                                @$infantReBf = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['fC']['BF']; 

                                $adultTotalBaseFare = $adultBf + $adulRetBf;
                                $childTotalBaseFare = $childBf + $childReBf;
                                $infantTotalBaseFare = $infantBf + $infantReBf;

                                $baseFareTotal = $adultBf + $childBf + $infantBf;
                                $baseFareReTotal = $adultBf + $adulRetBf +  $childBf + $childReBf + $infantBf + $infantReBf;

                                

                                    
                                $adultTAF = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'];
                                @$childTAF = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['TAF']; 
                                @$infantTAF = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'];

                                $adultReTAF = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'];
                                @$childReTAF = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['fC']['TAF']; 
                                @$infantReTAF = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'];

                                $totalTaxFare = $adultTAF + $adultReTAF + $childTAF + $childReTAF + $infantTAF + $infantReTAF;
								
                                
                                $adultAGST = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'];
                                @$childAGST = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST']; 
                                @$infantAGST = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'];

                                $adultReAGST = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'];
                                @$childReAGST = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST']; 
                                @$infantReAGST = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'];

                                $totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childAGST + $infantAGST;
								

                                $adultMFT = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'];
                                @$childMFT = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT']; 
                                @$infantMFT = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'];

                                $adultReMFT = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'];
                                @$childReMFT = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT']; 
                                @$infantReMFT = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'];

                                $totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT;

                                $adultMF = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'];
                                @$childMF = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF']; 
                                @$infantMF = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'];

                                $adultReMF = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'];
                                @$childReMF = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF']; 
                                @$infantReMF = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'];

                                $totalMF = $adultAGST + $childAGST + $infantAGST + $adultReMF + $childReMF + $infantReMF;

                                $adultOT = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'];
                                @$childOT = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT']; 
                                @$infantOT = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'];

                                $adultReOT = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'];
                                @$childReOT = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT']; 
                                @$infantReOT = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'];

                                $totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT;


                            ?>
                                <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"><!--Travelers 1 Adult--></span></h3></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-8">Base Fare</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo $baseFareReTotal; ?>
                                            <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee & Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Adult Base Fare</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php //echo  $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];
                                                                echo $adultTotalBaseFare; 
                                                                ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php if($childTotalBaseFare > 0){ ?>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Child Base Fare</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php //echo  @$tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['BF'];
                                                                 echo $childTotalBaseFare; 
                                                                ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php } ?>
                                                        <?php if($infantTotalBaseFare > 0){ ?>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Infant Base Fare</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php //echo  @$tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['BF'];
                                                                echo $infantTotalBaseFare; 
                                                                ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php } ?>
                                                       <!-- <li class="tooltip-p">
                                                            <ul style="padding-left: 0px;">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Adult Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> <?php echo  $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['BF'];?></li>
                                                                </ul>
                                                                <?php if($tripInfoResult['totalPriceList'][0]['fd'] !=''){ ?>
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Child Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> <?php echo  @$tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['BF'];?></li>
                                                                </ul>
                                                                <?php } ?>
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Infant Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> <?php echo  @$tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['BF'];?></li>
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
                                    <label class="col-md-8">Fee & Surcharge</label>
                                    <div class="col-md-4 pad-l-r">
                                        <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo $totalTaxFare; ?>
                                            <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee & Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Airline GST</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $totalAGST; ?></li>
                                                            </ul>
                                                        </li> 
														 <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee Tax</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $totalMFT; ?></li>
                                                            </ul>
                                                        </li>
														<li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $totalMF; ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Other Taxes</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $totalOT;  ?></li>
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
                                        <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo $grossTotal ;?></span>
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
                                <a href="<?php echo base_url('flights/thankyou');?>" class="btn btn-default btn-cf-submit3">BOOKING NOW</a>

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