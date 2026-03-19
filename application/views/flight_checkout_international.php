<?php

  //  echo "<pre>"; print_r($flightCheckoutReviewList); die;

    $adult_Pax1 = $this->session->userdata('adult_user');
    $child_Pax1 = $this->session->userdata('child_user');    
    $infant_Pax1 = $this->session->userdata('infant_user');
    $flightId = $this->uri->segment(3);
    $flightIdReturn = $this->uri->segment(4);
    $flightIdmultiway_First = $this->uri->segment(5);
    $flightIdmultiway_second = $this->uri->segment(6);
    $flightIdmultiway_third = $this->uri->segment(7);
    $flightIdmultiway_forth = $this->uri->segment(8);

   // echo "<pre>"; print_r($tripInfoResult); die;
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
        <link href="<?php echo base_url('assets/css/flight-seat.css');?>" rel="stylesheet">

    <style>
        ::selection {
        color: #fff;
        background-color: #0ac229;
        }

        main {
        width: 95%;
        margin: 1em 1em;
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
            padding: 7px 10px;
        }
        .dscrpton-cntnt ul {
            display: flex;
            margin-top: 0px;
            align-items: center;
            margin-top:10px;
            padding-left: 0px;
            padding-bottom: 10px;
        }

        .dscrpton-cntnt ul li span img{ width: 30px;border-radius: 5px;height: 30px;margin-right: 10px; }

        .psng {
        color: rgb(255, 255, 255);
        font-size: 11px;
        text-transform: uppercase;
        margin-right: 10px;
        padding: 3px 7px 1px;
        border-radius: 3px;
        background: rgb(201, 96, 89);
        }
        @media (min-width: 320px) and (max-width: 991px){ .apt-section{ display:none; } }
        .apt-firstep::before{ background-color: #4aa301;color:#fff }
        .apt-second::before{ background-color:#333;color:#fff }			
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 6; /* Sit on top */
            padding-top: 25px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 60%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0} 
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c00;
            color: white;
        }

        .modal-header .close{ 
            color: #fff;
            font-size: 40px;
            font-weight: 200; 
            margin-top: -30px;
            left: 40px;
            position: relative;
            opacity: 1;
        }

        .modal-header h2{
            margin-bottom: 0px;
            padding: 0px;
            text-transform: capitalize;
            font-weight: 500;
            font-size: 24px;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }									
    </style>	
</head>
    <body class="not-front page-post">
        <div id="main">
            <?php include('includes/header.php'); ?>     
            
            <!----------------------------------------------- WIZARD START ------------------------------------------>
            
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

            <!----------------------------------------------- WIZARD END ------------------------------------------>

            <section class="flight-destinations">
                <div class="container">
                    <div class="row">
                        <div id="content" class="col-lg-9">
                            <div class="detail-content content-wrapper">   
                                <div class="description detail-box flight-book">
                                    <div class="detail-title"><h3>Flight Details </h3></div>
                                    
                                    <!------------------------ ONE WAY START ----------------------------------------->
                                    <?php if(@$bookingType == 'international'){ ?>

                                        <?php foreach ($flightCheckoutReviewList  as $key => $flightReviewVal) { ?>

                                        <div class="dscrpton-cntnt detail-box">
                                            
                                            <?php foreach ($flightReviewVal['segmentLists'] as $key => $segmentVal) { ?>
                                     
                                                <div class="dF pad10 justifyBetween alignItemsCenter" style="background: #efefef;border-radius: 5px;">
                                                
                                                    <div class="dF alignItemsCenter font18">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy">
                                                            <path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path>
                                                        </svg>
                                                    
                                                            <span class="padL5">
                                                                <?php echo $segmentVal['segmentdeptCityName']; ?> - <?php echo $segmentVal['segmentArriveCityName']; ?>&nbsp;&nbsp;
                                                                    <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($segmentVal['segmentdeptDateNTime'])); ?>
                                                                    </span>
                                                            </span>   
                                                                                            
                                                    </div>
                                                    <div class="dF alignItemsCenter">
                                                        <span class="padR5"></span>
                                                    </div>
                                                
                                                </div>    

                                            <ul class="brdrBot">
                                                <li>
                                                    <span class="dsply">
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $segmentVal['segmentCode']; ?>.png">
                                                        <div>
                                                            <p class="flight-detl" style="font-weight:600;"><?php echo $segmentVal['segmentName']; ?></p>
                                                            <p class="flight-detl" style="font-weight:600;"><?php //echo ucfirst($segmentVal['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                            <p class="flight-detl"><?php echo $segmentVal['segmentCode']; ?> - <?php echo $segmentVal['segmentNumber']; ?> <i class="fa fa-plane"></i>: <?php echo $segmentVal['segmentEtNo']; ?></p>
                                                            <!-- <p class="flight-detl" style="font-weight: 500;"></p> -->
                                                        </div>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($segmentVal['segmentdeptDateNTime'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $segmentVal['segmentdeptCityName']; ?>, <?php echo $segmentVal['segmentdeptCountry']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $segmentVal['segmentdeptAirName']; ?> <br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$segmentVal['segmentdeptTerminal']; ?></span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $segmentVal['segmentDuration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        // $stop = $minutes['sI'][0]['stops'];
                                                        // if($stop == 0){

                                                        //     $st= 'Non-Stop';

                                                        // }else{

                                                        //     $st= $stop. ' Stops';

                                                        // }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  // echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($segmentVal['segmentArriveDateNTime'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $segmentVal['segmentArriveCityName']; ?>, <?php echo $segmentVal['segmentArriveCountry']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $segmentVal['segmentArriveAirName']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$segmentVal['segmentArriveTerminal']; ?></span></p>
                                                </li>
                                            </ul>
                                            <?php foreach ($flightReviewVal['priceList'] as $key => $priceVal) { ?>
                                            <div class="col-md-12" style="margin-top: 10px;padding-left: 0px;">
                                                <span class="label label-warning ars-flightlabel ars-refunsleft"><?php if($priceVal['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($priceVal['fareIdentifier']  == 'PUBLISHED'){ echo "SNS Saver"; }else if($priceVal['fareIdentifier']  == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                            </div>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $priceVal['adultBaggageInfo']; ?>  ,<b>Cabin:</b> <?php echo $priceVal['adultBaggageCabin']; ?> 
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div>
                                            <?php } ?>
                                         
                                            <?php  if(!empty($segmentVal['segmentConnectingTime'])){ ?> 

                                                    <div style="text-align:center;margin-bottom:30px;">
                                                        <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                            $connectminutes = $segmentVal['segmentConnectingTime'] ;
                                                            $connecthours = floor($connectminutes / 60);
                                                            $connectmin = $connectminutes - ($connecthours * 60); 
                                                            
                                                            echo  $connecthours."h ".$connectmin."m" ;?> 
                                                        </span> 
                                                    </div>

                                            <?php } } ?>
                                      

                                        </div>  
                                    <?php } }  ?>

                                    <!----------------------- ONE WAY END ------------------------------------------->

                                    <!-------------------------- RETURN TRIP START --------------------------------->
                                    
                                    
                                 
                                    
                                <!---------------------------------------------- RETURN TRIP END -------------------------------------> 
     
                                <!---------------------------------------------- MULTICITY START -------------------------------> 
                                <?php if(@$bookingType == 'international'){?>
                                <?php 
                                if(@$tripInfoResultthird!=''){
                                        
                                    if($countMultiways > 2) { ?>
                                    
                                    <div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg><span class="padL5"><?php echo $tripInfoResultthird['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultthird['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultthird['sI'][0]['dt'])); ?></span></div><div class="dF alignItemsCenter"><span class="padR5">
                                    </span></div></div>
                                    <div class="dscrpton-cntnt detail-box">
                                        <ul class="brdrBot">
                                            <li>
                                                <span class="dsply">
                                                    <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultthird['sI'][0]['fD']['aI']['code']; ?>.png">
                                                    <div>
                                                        <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResultthird['sI'][0]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResultthird['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultthird['sI'][0]['fD']['fN']; ?> <i class="fa fa-plane"></i>: <?php echo $tripInfoResultthird['sI'][0]['fD']['eT']; ?></p>
                                                        <!-- <p class="flight-detl" style="font-weight: 500;"></p> -->
                                                    </div>
                                                </span>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultthird['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultthird['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultthird['sI'][0]['da']['country']; ?> <?php //echo  $departureTime = date("H:i",strtotime($tripInfoResultthird['sI'][0]['dt'])); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultthird['sI'][0]['da']['name']; ?><!--,--> <?php //echo $tripInfoResultthird['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResultthird['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResultthird['sI'][0]['da']['terminal']; ?></span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutes = $tripInfoResultthird['sI'][0]['duration'];
                                                    $hours = floor($minutes / 60);
                                                    $min = $minutes - ($hours * 60); 
                                                    
                                                    echo  $hours."h ".$min."m" ;

                                                    $stopreturn = $tripInfoResultthird['sI'][0]['stops'];
                                                    if($stopreturn == 0){

                                                        $stthird = 'Non-Stop';

                                                    }else{

                                                        $stthird = $stop. ' Stops';

                                                    }
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php echo $stthird; ?></span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultthird['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultthird['sI'][0]['aa']['city']; ?> ,<?php echo $tripInfoResultthird['sI'][0]['aa']['country']; ?> <?php //echo  $arrivalTime = date("H:i",strtotime($tripInfoResultthird['sI'][0]['at'])); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultthird['sI'][0]['aa']['name']; ?> <?php //echo $tripInfoResultthird['sI'][0]['aa']['city']; ?> <?php //echo $tripInfoResultthird['sI'][0]['aa']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResultthird['sI'][0]['aa']['terminal']; ?></span></p>
                                            </li>
                                        </ul>
                                        <div class="col-md-12" style="margin-top: 10px;padding-left: 0px;">
                                            <span class="label label-warning ars-flightlabel ars-refunsleft"><?php if($tripInfoResultthird['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultthird['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultthird['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                        </div>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg> -->
                                                    <i class="fa fa-suitcase"></i>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  ,<b>Cabin:</b> <?php echo $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> 
                                                    </p>
                                                    
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                    </div>
                                    <?php } 
                                } ?>
                                    
                                <?php 
                                if(@$tripInfoResultforth!=''){
                                    
                                    if($countMultiways > 3) { ?>
                                    
                                    <div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg><span class="padL5"><?php echo $tripInfoResultforth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultforth['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultforth['sI'][0]['dt'])); ?></span></div><div class="dF alignItemsCenter"><span class="padR5">
                                    </span></div></div>
                                    <div class="dscrpton-cntnt detail-box">
                                        <ul class="brdrBot">
                                            <li>
                                                <span class="dsply">
                                                    <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultforth['sI'][0]['fD']['aI']['code']; ?>.png">
                                                    <div>
                                                        <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResultforth['sI'][0]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResultforth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultforth['sI'][0]['fD']['fN']; ?> <i class="fa fa-plane"></i>: <?php echo $tripInfoResultforth['sI'][0]['fD']['eT']; ?></p>
                                                        <!-- <p class="flight-detl" style="font-weight: 500;"></p> -->
                                                    </div>
                                                </span>
                                            </li>                                               
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultforth['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultforth['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultforth['sI'][0]['da']['country']; ?></p>
                                                
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultforth['sI'][0]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResultforth['sI'][0]['da']['terminal']; ?></span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutesforth = $tripInfoResultforth['sI'][0]['duration'];
                                                    $hoursforth = floor($minutesforth / 60);
                                                    $minforth = $minutesforth - ($hoursforth * 60); 
                                                    
                                                    echo  $hoursforth."h ".$minutesforth."m" ;

                                                    $stopforth = $tripInfoResultforth['sI'][0]['stops'];
                                                    if($stopforth == 0){

                                                        $stforth= 'Non-Stop';

                                                    }else{

                                                        $stforth= $stopforth. ' Stops';

                                                    }
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php echo $stforth; ?></span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultforth['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultforth['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultforth['sI'][0]['aa']['country']; ?></p>
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultforth['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResultforth['sI'][0]['aa']['terminal']; ?></span></p>
                                            </li>
                                        </ul>
                                        <div class="col-md-12" style="margin-top: 10px;padding-left: 0px;">
                                            <span class="label label-warning ars-flightlabel ars-refunsleft"><?php if($tripInfoResultforth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultforth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultforth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                        </div>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg> -->
                                                    <i class="fa fa-suitcase"></i>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  ,<b>Cabin:</b> <?php echo $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> 
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                    </div>
                                    <?php } 
                                } ?>
                                
                                
                                <?php 
                                if(@$tripInfoResultfifth!=''){
                                    
                                    if($countMultiways > 4) { 
                                        
                                    ?>
                                    
                                        
                                        
                                    <div class="dF pad10 justifyBetween alignItemsCenter" style="background: #efefef;border-radius: 5px;">
                                            <div class="dF alignItemsCenter font18">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy">
                                                    <path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path>
                                                </svg>
                                                <span class="padL5"><?php echo $tripInfoResultfifth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultfifth['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultfifth['sI'][0]['dt'])); ?></span>
                                            </div>
                                            <div class="dF alignItemsCenter">
                                                <span class="padR5"></span>
                                            </div>
                                        </div>
                                    
                                        <!-- <div class="dF pad10 justifyBetween alignItemsCenter">
                                            <div class="dF alignItemsCenter font18">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy">
                                                    <path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path>
                                                </svg>
                                                <span class="padL5"><?php //echo $tripInfoResultfifth['sI'][0]['da']['city'] ?> - <?php //echo $tripInfoResultfifth['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php //echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultfifth['sI'][0]['dt'])); ?>
                                                </span>
                                            </div>
                                            <div class="dF alignItemsCenter">
                                                <span class="padR5"></span>
                                            </div>
                                        </div> -->
                                        <div class="dscrpton-cntnt detail-box">
                                            <ul class="brdrBot">
                                                <li>
                                                    <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultfifth['sI'][0]['fD']['aI']['code']; ?>.png" style="width: 25%;">
                                                    <p class="flight-detl"><?php echo $tripInfoResultfifth['sI'][0]['fD']['aI']['name']; ?></p>
                                                    <p class="flight-detl"><?php echo ucfirst($tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                    <p class="flight-detl"><?php echo $tripInfoResultfifth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultfifth['sI'][0]['fD']['fN']; ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultfifth['sI'][0]['fD']['eT']; ?>)</p>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultfifth['sI'][0]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultfifth['sI'][0]['da']['code']; ?> <?php echo  $departureTime = date("H:i",strtotime($tripInfoResultfifth['sI'][0]['dt'])); ?></p>
                                                    <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultfifth['sI'][0]['da']['name']; ?>, <?php echo $tripInfoResultfifth['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultfifth['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultfifth['sI'][0]['da']['terminal']; ?>)</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultfifth['sI'][0]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultfifth['sI'][0]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultfifth['sI'][0]['aa']['code']; ?> <?php echo  $arrivalTime = date("H:i",strtotime($tripInfoResultfifth['sI'][0]['at'])); ?></p>
                                                    <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultfifth['sI'][0]['aa']['name']; ?>, <?php echo $tripInfoResultfifth['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultfifth['sI'][0]['aa']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultfifth['sI'][0]['aa']['terminal']; ?>)</span></p>
                                                </li>
                                            </ul>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                            <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                            </path>
                                                        </svg>
                                                        <p class="padL5" style="font-size: 12px;padding-top: 12px;font-weight: 500;color: #adadad;"><?php echo $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div>
                                        </div>
                                    <?php } 
                                } ?>

                                <?php 
                                if(@$tripInfoResultsixth!=''){
                                    
                                    if($countMultiways > 5) { 
                                    
                                    ?>
                                
                                    <div class="dF pad10 justifyBetween alignItemsCenter"><div class="dF alignItemsCenter font18"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg><span class="padL5"><?php echo $tripInfoResultsixth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultsixth['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultsixth['sI'][0]['dt'])); ?></span></div><div class="dF alignItemsCenter"><span class="padR5">
                                    </span></div></div>
                                    <div class="dscrpton-cntnt detail-box">
                                        <ul class="brdrBot">
                                            <li>
                                                <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultsixth['sI'][0]['fD']['aI']['code']; ?>.png" style="width: 25%;">
                                                <p class="flight-detl"><?php echo $tripInfoResultsixth['sI'][0]['fD']['aI']['name']; ?></p>
                                                <p class="flight-detl"><?php echo ucfirst($tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                <p class="flight-detl"><?php echo $tripInfoResultsixth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultsixth['sI'][0]['fD']['fN']; ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultsixth['sI'][0]['fD']['eT']; ?>)</p>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultsixth['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultsixth['sI'][0]['da']['code']; ?> <?php echo  $departureTime = date("H:i",strtotime($tripInfoResultsixth['sI'][0]['dt'])); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultsixth['sI'][0]['da']['name']; ?>, <?php echo $tripInfoResultsixth['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultsixth['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultsixth['sI'][0]['da']['terminal']; ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutes = $tripInfoResultsixth['sI'][0]['duration'];
                                                    $hours = floor($minutes / 60);
                                                    $min = $minutes - ($hours * 60); 
                                                    
                                                    echo  $hours."h ".$min."m" ;
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultsixth['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultsixth['sI'][0]['aa']['code']; ?> <?php echo  $arrivalTime = date("H:i",strtotime($tripInfoResultsixth['sI'][0]['at'])); ?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultsixth['sI'][0]['aa']['name']; ?>, <?php echo $tripInfoResultsixth['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultsixth['sI'][0]['aa']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultsixth['sI'][0]['aa']['terminal']; ?>)</span></p>
                                            </li>
                                        </ul>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 12px;font-weight: 500;color: #adadad;"><?php echo $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                    </div>
                                    <?php } 
                                } ?>
                                <?php } ?>
                                    
                                    
                                    

                            <div class="detail-title"><h3>Your Personal Information</h3></div>
                            <div class="description-content">
                                <form name="" action="<?php echo base_url('flights/flight_review');?>" method="post">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label style="color:#ff0000; ">Enter name as mentioned on your passport or Government approved IDs.</label>
                                                        
                                            <div class="row">
                                                <main>
                                                    <?php if(count($adult_Pax1) > 0) {
                                                             $i=1;
                                                            while($adult_Pax1 > 0) {	
                                                            ?>
                                    
                                                            <div class="accordion__container">
                                                                <div class="accordion__question__container">
                                                                    <span class="accordion__btn">
                                                                    <span class="accordion__question">Adult <?php echo $i; ?> </span>&nbsp;
                                                                    <i class="fa fa-angle-down"></i>         </span>
                                                                </div>
                                                                                        
                                                                <div class="accordion__answer__container active__accordion">
                                                                <div class="col-md-2 form-group padding_5px " >
                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult Name</span>
                                                                    </div>
                                                                    <div class="col-md-2 form-group ">
                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('title'); ?></span>
                                                                        <input type="hidden" name="totalGrossAmount" id="totalGrossAmount">
                                                                        <input type="hidden" name="totalBaggageMeal" id="totalBaggageMeal">
                                                                        <input type="hidden" name="totalWithSeat" id="totalWithSeat">
                                                                        <input type="hidden" name="adultSeatNo" id="adultSeatNo">
                                                                        <input type="hidden" name="childSeatNo" id="childSeatNo">
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
                                                                        $data = array('name'  => 'first_middle_name[]', 'id' => 'first_middle_name', 'value' => $val, 'placeholder' => 'First Name', 'class'=>"form-control margin_bottom" ,'required'=>'required');
                                                                        echo form_input($data);
                                                                    ?>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 form-group padding_5px " >
                                                                        <?php
                                                                        // ------------------------------ first Name form ---------------------------------
                                                                        $val=set_value("last_name");
                                                                            $data = array('name'  => 'last_name[]', 'id' => 'last_name', 'value' => $val, 'placeholder' => 'Last Name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                                                            echo form_input($data);
                                                                        ?>
                                                                        <?php if(empty($tripConditions['pcs'])){ ?>     
                                                                        <input type="hidden" name="dob[]" id="datepicker" placeholder="dob">
                                                                        <?php } ?> 
                                                                    </div>

                                                                    <?php if(!empty($tripConditions['pcs'])){ ?>

                                                                    <div style="width: 95%;">
                                                                        <span>ADD PASSPORT INFORMATION</span>
                                                                        <div class="row">
                                                                            <div class="col-sm-2">
                                                                                <select name="passport_nationality[]" id="nationality">                                                       
                                                                                    <option>Select Nationality</option>
                                                                                    <?php foreach ($getCountryList as $key => $cityList) { ?>

                                                                                        <option value="<?php echo $cityList['countrycode'] ?>"><?php echo $cityList['CountryName'] ?></option>
                                                                                        
                                                                                    <?php }?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <input type="text" name="passport_number[]" id="passport_number" placeholder="Passport Number">
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <input type="text" name="issuedate[]" id="issuedate<?php echo $i; ?>" placeholder="Issue Date">
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <input type="text" name="expirydate[]" id="expirydate<?php echo $i; ?>" placeholder="Expiry Date">
                                                                            </div>

                                                                            <div class="col-sm-2">
                                                                                <input type="text" name="dob[]" id="dob<?php echo $i; ?>" placeholder="Date of Birth">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                

                                                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


                                                            <script>

                                                                $(document).ready(function () {

                                                                    $("#issuedate<?php echo $i; ?>").datepicker({ 

                                                                        maxDate: 0,
                                                                        dateFormat: "yy-mm-dd",                  
                                                                        changeMonth: true,
                                                                        changeYear: true,
                                                                        yearRange: "-100:+0",  

                                                                    });

                                                                    $("#expirydate<?php echo $i; ?>").datepicker({ 

                                                                        minDate: 0,
                                                                        dateFormat: "yy-mm-dd", 
                                                                        changeMonth: true,
                                                                        changeYear: true,  
                                                                        yearRange: "-0:+50",                 

                                                                    });

                                                                    $("#dob<?php echo $i; ?>").datepicker({ 

                                                                        maxDate: 0,
                                                                        dateFormat: "yy-mm-dd",  
                                                                        changeMonth: true,
                                                                        changeYear: true,
                                                                        yearRange: "-100:+0",              

                                                                    });

                                                                });

                                                            </script>

                                
                                
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
                                                                        <span class="accordion__btn">
                                                                            <span class="accordion__question">Child <?php echo $j; ?></span>&nbsp;
                                                                                <i class="fa fa-angle-down"></i>         
                                                                        </span>
                                                                    </div>
                                                                    <div class="accordion__answer__container">
                                                                        <div class="col-md-2 form-group padding_5px">
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
                                                                            $val=set_value("first_middle_name");
                                                                            $data = array('name'  => 'first_middle_name[]', 'id' => 'first_middle_name', 'value' => $val, 'placeholder' => 'First Name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                                                            echo form_input($data);
                                                                        ?>
                                                                        </div>
                                                        
                                                                        <div class="col-md-4 form-group padding_5px " >
                                                                            <?php
                                                                                $val=set_value("last_name");
                                                                                $data = array('name'  => 'last_name[]', 'id' => 'last_name', 'value' => $val, 'placeholder' => 'Last Name', 'class'=>"form-control margin_bottom",'required'=>'required');
                                                                                echo form_input($data);
                                                                            ?>
                                                                            <?php if(empty($tripConditions['pcs'])){ ?>     
                                                                            <input type="hidden" name="dob[]" id="datepicker" placeholder="dob">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <?php if(!empty($tripConditions['pcs'])){ ?>
                                                                                <div style="width: 95%;">
                                                                                    <span>ADD PASSPORT INFORMATION</span>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-2">
                                                                                            <select name="passport_nationality[]" id="nationality">                                                       
                                                                                                <option>Select Nationality</option>
                                                                                                <?php foreach ($getCountryList as $key => $cityList) { ?>

                                                                                                    <option value="<?php echo $cityList['countrycode'] ?>"><?php echo $cityList['CountryName'] ?></option>
                                                                                                
                                                                                                <?php }?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-sm-2">
                                                                                            <input type="text" name="passport_number[]" placeholder="Passport Number">
                                                                                        </div>
                                                                                        <div class="col-sm-3">
                                                                                            <input type="text" name="issuedate[]" id="childissuedate<?php echo $j; ?>" placeholder="Issue Date">
                                                                                        </div>
                                                                                        <div class="col-sm-3">
                                                                                            <input type="text" name="expirydate[]" id="childexpirydate<?php echo $j; ?>" placeholder="Expiry Date">
                                                                                        </div>
                                                                                        <div class="col-sm-2">
                                                                                            <input type="text" name="dob[]" id="childdob<?php echo $j; ?>" placeholder="Date of Birth">
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                        <?php } ?>

                                                                    </div>
                                                                </div>	
                                                                <script>

                                                                    $(document).ready(function () {

                                                                        $("#childissuedate<?php echo $j; ?>").datepicker({ 

                                                                            maxDate: 0,
                                                                            dateFormat: "yy-mm-dd",                  
                                                                            changeMonth: true,
                                                                            changeYear: true,
                                                                            yearRange: "-100:+0",                  

                                                                        });

                                                                        $("#childexpirydate<?php echo $j; ?>").datepicker({ 
                                                                            
                                                                            minDate: 0,
                                                                            dateFormat: "yy-mm-dd", 
                                                                            changeMonth: true,
                                                                            changeYear: true,  
                                                                            yearRange: "-0:+50",                    

                                                                        });

                                                                        $("#childdob<?php echo $j; ?>").datepicker({ 

                                                                            maxDate: 0,
                                                                            dateFormat: "yy-mm-dd",  
                                                                            changeMonth: true,
                                                                            changeYear: true,
                                                                            yearRange: "-100:+0",               

                                                                        });

                                                                    });

                                                                </script>

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
                                                                        <span class="accordion__btn">
                                                                            <span class="accordion__question">Infant <?php echo $k; ?> </span>&nbsp;
                                                                                <i class="fa fa-angle-down"></i>         
                                                                        </span>
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
                                                                                        $data = array('name'  => 'first_middle_name[]', 'id' => 'first_middle_name', 'value' => $val, 'placeholder' => 'first name', 'class'=>"form-control margin_bottom",'required'=>'required');
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
                                                                                <?php if(empty($tripConditions['pcs'])){ ?>                  
                                                                                <div class="col-md-4 form-group ">
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('day'); ?></span>
                                                                                    <input type="text" name="dob[]" id="infantdatepicker" placeholder="dob" required /> 
                                                                                </div>	
                                                                                <?php } ?>
                                                                            </div>	
                                                                            <?php if(!empty($tripConditions['pcs'])){ ?>

                                                                                    <div style="width: 95%;">
                                                                                        <span>ADD PASSPORT INFORMATION</span>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-2">
                                                                                                <select name="passport_nationality[]" id="nationality">                                                       
                                                                                                    <option>Select Nationality</option>
                                                                                                    <?php foreach ($getCountryList as $key => $cityList) { ?>

                                                                                                        <option value="<?php echo $cityList['countrycode'] ?>"><?php echo $cityList['CountryName'] ?></option>
                                                                                                    
                                                                                                    <?php }?>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <input type="text" name="passport_number[]" placeholder="Passport Number">
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <input type="text" name="issuedate[]" id="infantissuedate<?php echo $k; ?>" placeholder="Issue Date">
                                                                                            </div>
                                                                                            <div class="col-sm-3">
                                                                                                <input type="text" name="expirydate[]" id="infantexpirydate<?php echo $k; ?>" placeholder="Expiry Date">
                                                                                            </div>
                                                                                            <div class="col-sm-2">
                                                                                                <input type="text" name="dob[]" id="infantdob<?php echo $k; ?>" placeholder="Date of Birth">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    
                                                                                    <?php 
                                                                                } ?>
                                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>	
                                                                <script>

                                                                    $(document).ready(function () {

                                                                        $("#infantissuedate<?php echo $k; ?>").datepicker({ 

                                                                            maxDate: 0,
                                                                            dateFormat: "yy-mm-dd", 
                                                                            changeMonth: true,
                                                                            changeYear: true,
                                                                            yearRange: "-100:+0",                 

                                                                        });

                                                                        $("#infantexpirydate<?php echo $k; ?>").datepicker({ 

                                                                            minDate: 0,
                                                                            dateFormat: "yy-mm-dd",
                                                                            changeMonth: true,
                                                                            changeYear: true,  
                                                                            yearRange: "-0:+50",                   

                                                                        });

                                                                        $("#infantdob<?php echo $k; ?>").datepicker({ 

                                                                            maxDate: 0,
                                                                            dateFormat: "yy-mm-dd",  
                                                                            changeMonth: true,
                                                                            changeYear: true,
                                                                            yearRange: "-100:+0",                    

                                                                        });

                                                                    });

                                                                </script>
                                                                <?php 

                                                                $infant_Pax1--;
                                                                $k++;
                                                            }
                                                        } 
                                                    ?>	
                                                </main>																				  
                                            </div>	
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Email Id <span style=color:#ff0000;font-size:20px;> * </span>:</label>
                                            <input type="email" class="form-control" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="abc@xyz.com"  required />
                                        </div>
                                                
                                        <div class="form-group col-lg-6 col-left-padding">
                                            <div class="row">
                                                <div class="col-md-4 form-group ">
                                                    <label>Country Code:</label>
                                                
                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('countryCode'); ?></span>
                                                
                                                    <select name="countryCode" id="countryCode" style="width:120px;">
                                                        <option value="+91" style="width:120px;">India ( +91 )</option>
                                                        <option value="+93">Afghanistan ( +93 )</option>
                                                        <option value="+213">Algeria ( +213 )</option>
                                                        <option value="+1">American Samoa ( +1 )</option>
                                                    </select>
                                                </div>	
                                                
                                                <div class="col-md-6 form-group padding_5px offset-md-2">
                                                    <label>Mobile Number <span style=color:#ff0000;font-size:20px;> * </span>:</label>
                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('mobile'); ?></span>
                                                    <?php
                                                        // ------------------------------ mobile form ---------------------------------
                                                        $data = array('name'  => 'mobile', 'id' => 'mobile',  'placeholder' => 'mobile', 'class'=>"form-control margin_bottom",'minlength'=>'10','maxlength'=>'10','required'=>'required');
                                                        echo form_input($data);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <?php 

                                          

                                            // echo "<pre>"; print_r($SSRInfoBaggage); die;
                                        
                                        ?>

                                        <!-------------------------------- Baggages & Meals Infos ------------------------------------------>

                                        <div class="col-lg-12">
                                            <div class="accordion__container">
                                                <div class="accordion__question__container">
                                                    <span class="accordion__btn">   
                                                        <span class="accordion__question">Add Baggage, Meal & Other Services to Your Travel</span>&nbsp;
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </div>
                                                <div class="accordion__answer__container">  

                                                    <?php foreach($flightCheckoutReviewList as $key => $segmentVal){ 
                                                        
                                                        foreach ($segmentVal['segmentLists'] as $key => $segmentListVal) {
                                                          
                                                           // echo "<pre>"; print_r($segmentListVal['baggageInfo']);
                                                           $adultPax12 = $this->session->userdata('adult_user');
                                                           $childPax12 = $this->session->userdata('child_user');
                                                    ?>    

                                                        <p class="p-20"><b><span><?php echo $segmentListVal['segmentdeptCityName']; ?></span><span class="ars-arright">→</span> <span><?php echo $segmentListVal['segmentArriveCityName']; ?></span></b><span class="graycolor "> on <?php echo date('M d, Y',strtotime($segmentListVal['segmentdeptDateNTime'])); ?></span></p>

                                                        <?php if($segmentListVal['baggageInfo'] > 0 || $segmentListVal['mealInfo']){ ?>
                                                        <div class="row">

                                                            <?php if($adultPax12 > 0){ 
                                                                
                                                                    $ap = 1;

                                                                    while($adultPax12 > 0){

                                                                        if(empty($segmentListVal['segmentisRs'])){
                                                            ?>
                                                                
                                                            <div class="col-md-2 form-group padding_5px ">
                                                                <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;" ;="">Adult <?php echo $ap; ?></span>
                                                                <input type="hidden" name="departureCity[]" value="<?php echo $segmentListVal['segmentdeptCityCode']; ?>">
                                                                <input type="hidden" name="arrivalCity[]" value="<?php echo $segmentListVal['segmentArriveAirCode']; ?>">
                                                            
                                                            </div>
                                                              

                                                            <div class="col-md-5 form-group ">
                                                                <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span>   
                                                                <select name="baggage[]" id="baggage<?php echo $ap; ?>" class="baggage<?php echo $ap; ?>" onchange="getBaggage('<?php echo $ap; ?>');">
                                                                    <option value="">Add Baggage</option>
                                                                        
                                                                    <?php foreach ($segmentListVal['baggageInfo'] as $key => $baggagevalue) { ?>

                                                                        <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                    
                                                                    <?php } ?>
                                                                    
                                                                                                                                                                                                            </select>
                                                            </div>
                                                            <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span> 

                                                            <div class="col-md-5 form-group padding_5px ">

                                                                <select name="meal[]" id="meal_adult<?php echo $ap; ?>" onchange="getBaggage('<?php echo $ap; ?>');">
                                                                    <option value="">Add Meal</option>
                                                                        
                                                                    <?php foreach ($segmentListVal['mealInfo'] as $key => $mealValue) { ?>

                                                                        <option value="<?php echo $mealValue['code']; ?>~<?php echo $mealValue['amount']; ?>~<?php echo $mealValue['desc']; ?>"><?php echo $mealValue['desc']; ?> @ <?php echo $mealValue['amount']; ?></option>

                                                                    <?php } ?>
                                                                                                                            
                                                                </select>   
                                                            </div>
                                                            <?php }else{ ?>  

                                                            <div class="col-md-2 form-group padding_5px ">

                                                                <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;" ;="">Adult <?php echo $ap; ?></span>
                                                                <input type="hidden" name="departureCity[]" value="<?php echo $segmentListVal['segmentdeptCityCode']; ?>">
                                                                <input type="hidden" name="arrivalCity[]" value="<?php echo $segmentListVal['segmentArriveAirCode']; ?>">
                                                            
                                                            </div>
                                                              

                                                            <div class="col-md-5 form-group ">
                                                                <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span>   
                                                                <select name="baggage_return[]" id="baggage_return<?php echo $ap; ?>"  onchange="getBaggage('<?php echo $ap; ?>');">
                                                                    <option value="">Add Baggage</option>
                                                                        
                                                                    <?php foreach ($segmentListVal['baggageInfo'] as $key => $baggagevalue) { ?>

                                                                        <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                    
                                                                    <?php } ?>
                                                                    
                                                                                                                                                                                                            </select>
                                                            </div>
                                                            <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span> 

                                                            <div class="col-md-5 form-group padding_5px ">

                                                                <select name="meal_return[]" id="meal_adult_return<?php echo $ap; ?>" onchange="getBaggage('<?php echo $ap; ?>');">
                                                                    <option value="">Add Meal</option>
                                                                        
                                                                    <?php foreach ($segmentListVal['mealInfo'] as $key => $mealValue) { ?>

                                                                        <option value="<?php echo $mealValue['code']; ?>~<?php echo $mealValue['amount']; ?>~<?php echo $mealValue['desc']; ?>"><?php echo $mealValue['desc']; ?> @ <?php echo $mealValue['amount']; ?></option>

                                                                    <?php } ?>
                                                                                                                            
                                                                </select>   
                                                            </div>
                                                            <?php } ?>
                                                            <?php   
                                                                        $adultPax12--;                                                                   
                                                                        $ap++; 
                                                                
                                                            } 
                                                            
                                                            } ?>
                                                            <?php if($childPax12 > 0){ 
                                                                
                                                                $cp = 1;

                                                                while($childPax12 > 0){

                                                                    if(empty($segmentListVal['segmentisRs'])){
                                                            ?>
                                                                <div class="col-md-2 form-group padding_5px ">
                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;" ;="">Child <?php echo $cp; ?></span>
                                                                    <input type="hidden" name="departureCity[]" value="<?php echo $segmentListVal['segmentdeptCityCode']; ?>">
                                                                    <input type="hidden" name="arrivalCity[]" value="<?php echo $segmentListVal['segmentArriveAirCode']; ?>">
                                                                </div>  
                                                                <div class="col-md-5 form-group ">
                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span>   
                                                                    <select name="baggage_child[]" id="baggage_child<?php echo $cp; ?>" onchange="getBaggage('<?php echo $cp; ?>');">
                                                                        <option value="">Add Baggage</option>
                                                                            
                                                                        <?php foreach ($segmentListVal['baggageInfo'] as $key => $baggagevalue) { ?>

                                                                            <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                        
                                                                        <?php } ?>
                                                                        
                                                                                                                                                                                                                </select>
                                                                </div>
                                                                <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span> 

                                                                <div class="col-md-5 form-group padding_5px ">

                                                                    <select name="meal_child[]" id="meal_child<?php echo $cp; ?>" onchange="getBaggage('<?php echo $cp; ?>');">
                                                                        <option value="">Add Meal</option>
                                                                            
                                                                        <?php foreach ($segmentListVal['mealInfo'] as $key => $mealValue) { ?>

                                                                            <option value="<?php echo $mealValue['code']; ?>~<?php echo $mealValue['amount']; ?>~<?php echo $mealValue['desc']; ?>"><?php echo $mealValue['desc']; ?> @ <?php echo $mealValue['amount']; ?></option>

                                                                        <?php } ?>
                                                                                                                                
                                                                    </select>   
                                                                </div>
                                                                <?php }else{ ?>
                                                                <div class="col-md-2 form-group padding_5px ">
                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;" ;="">Child <?php echo $cp; ?></span>
                                                                    <input type="hidden" name="departureCity[]" value="<?php echo $segmentListVal['segmentdeptCityCode']; ?>">
                                                                    <input type="hidden" name="arrivalCity[]" value="<?php echo $segmentListVal['segmentArriveAirCode']; ?>">
                                                                </div>  
                                                                <div class="col-md-5 form-group ">
                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span>   
                                                                    <select name="baggage_child_return[]" id="baggage_child_return<?php echo $cp; ?>" onchange="getBaggage('<?php echo $cp; ?>');">
                                                                        <option value="">Add Baggage</option>
                                                                            
                                                                        <?php foreach ($segmentListVal['baggageInfo'] as $key => $baggagevalue) { ?>

                                                                            <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                        
                                                                        <?php } ?>
                                                                        
                                                                                                                                                                                                                </select>
                                                                </div>
                                                                <span style="text-align:left; color:#FF0000;font-size:12px;" ;=""></span> 

                                                                <div class="col-md-5 form-group padding_5px ">

                                                                    <select name="meal_child_return[]" id="meal_child_return<?php echo $cp; ?>" onchange="getBaggage('<?php echo $cp; ?>');">
                                                                        <option value="">Add Meal</option>
                                                                            
                                                                        <?php foreach ($segmentListVal['mealInfo'] as $key => $mealValue) { ?>

                                                                            <option value="<?php echo $mealValue['code']; ?>~<?php echo $mealValue['amount']; ?>~<?php echo $mealValue['desc']; ?>"><?php echo $mealValue['desc']; ?> @ <?php echo $mealValue['amount']; ?></option>

                                                                        <?php } ?>
                                                                                                                                
                                                                    </select>   
                                                                </div>
                                                                <?php } ?>

                                                            <?php                   $childPax12--;                                                                   
                                                            $cp++; 
                                                                
                                                            }  } ?>
                                                                
                                                        </div> 
                                                        <?php }else{

                                                            echo "Baggage Or Meal Meal Info Not Applicable for this Itineary.";

                                                        } ?>
                                                    <?php } } ?>
                                                
                                    </div>     
                                            </div>
                                            <div class="accordion__container">
                                                <div class="accordion__question__container">
                                                    <span class="accordion__btn">
                                                        <span class="accordion__question">Select Seats (Optional) </span>&nbsp;
                                                        <i class="fa fa-angle-down"></i>
                                                    </span>
                                                </div>                                                                            
                                                <div class="accordion__answer__container">
                                                <?php foreach($flightCheckoutReviewList as $key => $segmentVal){ 
                                                        
                                                        foreach ($segmentVal['segmentLists'] as $key => $segmentListVal) { ?>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p class="p-20"><b><span><?php echo $segmentListVal['segmentdeptCityName']; ?></span><span class="ars-arright">→</span> <span><?php echo $segmentListVal['segmentArriveCityName']; ?></span></b><span class="graycolor "> on <?php echo $date =  date('M d, Y',strtotime($segmentListVal['segmentdeptDateNTime'])); ?></span></p>
                                                            </div>
                                                            <div class="col-md-4" id="adultchildseatselection">
                                                                <p>
                                                                <?php  
                                                                    
                                                                    $totalAdultUser = $_SESSION['adult_user'];
                                                                    $totalChildUser = $_SESSION['child_user'];
                                                                
                                                                    if($totalAdultUser > 0){

                                                                        $ias1=1;
                                                                        while($totalAdultUser > 0){
                                                                ?> 

                                                                        Adult <?php echo $ias1; ?> <span id="adultseat<?php echo $ias1; ?>"></span>
                                                                <?php $totalAdultUser--;  $ias1++; }} 
                                                                
                                                                    if($totalChildUser > 0){
                                                                        $ics1=1;
                                                                        while($totalChildUser > 0){
                                                                    ?>
                                                                         Child  <?php echo $ics1; ?> <span id="childseat<?php echo $ics1; ?>"> </span>

                                                                <?php $totalChildUser--;  $ics1++; }}  ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <?php if(count(@$tripSeatRowcolumn)>0){ ?>
                                                                    <button type="button" class="popUpBtn btn btn-warning asr-book" data-segmentid="<?php echo $segmentListVal['segmentId']; ?>" data-modal="myModal<?php echo $segmentListVal['segmentId']; ?>"> Show Seat Map </button>
                                                                <?php }else{

                                                                    echo "Seat Selection Not Applicable for this Itinerary";
                                                                } ?>
                                                                

                                                                <div id="myModal<?php echo $segmentListVal['segmentId']; ?>" class="modal">
                                                                    <?php 
                                                                        
                                                                        $adultPax = $this->session->userdata('adult_user');
                                                                        $childPax = $this->session->userdata('child_user');
                                                                    
                                                                    ?>
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <span class="close">×</span>
                                                                            <h2>Select Seats</h2>
                                                                        </div>
                                                                        <div class="seat-map__select-container">
                                                                            <ul class="seat-map__select-container__header">
                                                                                <li class="seat-map__select-container__item">
                                                                                    <span class="search-inlinecontent">
                                                                                        <img class="airline-logo search-logoallflight" src="<?php echo base_url("uploads/flights/");?><?php echo $segmentListVal['segmentCode']; ?>.png">

                                                                                        <h5 class="search-flightsname"> <?php echo $segmentListVal['segmentName']; ?> <span class="search-flightscode"><?php echo $segmentListVal['segmentCode']; ?>-<?php echo $segmentListVal['segmentNumber']; ?></span></h5>
                                                                                    </span>
                                                                                </li>
                                                                                <li class="seat-map__select-container__item">
                                                                                    <h5 class="search-flightsname"><?php echo $segmentListVal['segmentdeptAirCode']; ?>-<?php echo $segmentListVal['segmentArriveAirCode']; ?></h5>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="seat-map__select-box">
                                                                                <li class="seat-map__select-box__item seat-map--passenger">Passenger</li>
                                                                                <li class="seat-map__select-box__item seat-map--seatNo">Seat</li>
                                                                                <li class="seat-map__select-box__item seat-map--fee">Fee</li>
                                                                            </ul>
                                                                            <ul class="seat-map__select-box">
                                                                                <?php 
                                                                            
                                                                                    if(count($adultPax) > 0){

                                                                                            $ias=1;
                                                                                            while($adultPax > 0){
                                                                                                    ?>

                                                                                        <li class="seat-map__seat-data adultseatselection<?php echo $ias; ?>" onclick="seatPassenger('adult','<?php echo $ias; ?>')">
                                                                                            <div class="seat-map__select-box__item seat-map--passenger paxname-ellipsis"> ADULT-<?php echo $ias; ?></div>
                                                                                            <div class="seat-map__select-box__item seat-map--seatNo" id="seatadultno<?php echo $ias; ?>">NA</div>
                                                                                            <div class="seat-map__select-box__item seat-map--fee" id="seatadultamount<?php echo $ias; ?>"> <i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> 0.00 </div>
                                                                                        </li>
                                                                                        
                                                                                    <?php $adultPax--;  $ias++; } ?>
                                                                                
                                                                                
                                                                                <?php } ?>

                                                                                <?php if(count($childPax) > 0) {
                                                                                    $ics=1;
                                                                                    while($childPax > 0) { ?>
                                                                                    <li class="seat-map__seat-data childseatselection<?php echo $ics; ?>" onclick="seatPassenger('child','<?php echo $ics; ?>')";><div class="seat-map__select-box__item seat-map--passenger paxname-ellipsis"> CHILD-<?php echo $ics; ?> </div>
                                                                                    <div class="seat-map__select-box__item seat-map--seatNo" id="seatchildno<?php echo $ics; ?>" > NA </div>
                                                                                    <div class="seat-map__select-box__item seat-map--fee" id="seatchildamount<?php echo $ics; ?>"> <i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> 0.00 </div>
                                                                                </li>
                                                                                <?php $childPax--;$ics++; }  } ?>
                                                                                
                                                                                <li class="seat-map__seat-data">
                                                                                    <div class="seat-map__select-box__item seat-map--passenger"> Total </div>
                                                                                    <div class="seat-map__select-box__item seat-map--seatNo"></div>
                                                                                    <div class="seat-map__select-box__item seat-map--fee" id="totalSeatAmount"> <i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> 0.00 </div>
                                                                                </li>
                                                                                <ul class="seat-map__select-box">
                                                                                    <li class="seat-map__select-box__item seat-map__select-box__item--proceed" onclick="submitSeatRequest();" >Proceed</li>
                                                                                    <li class="seat-map__seat-data">
                                                                                        <div class="seat-map__select-box__item seat-map--proceedLabel"> Proceed Without Seats </div>
                                                                                    </li>
                                                                                    <li class="seat-map__select-box__item seat-map--termsAndConditions">* Conditions apply. We will try our best to accomodate your seat preferences, however due to operational considerations we can't guarantee this selection. The seat map shown may not be the exact replica of flight layout, we shall not responsible for losses arising from the same. Thank you for your understanding</li>
                                                                                </ul>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="grid-layout seat-map__mapper">
                                                                            <div class="plane">
                                                                                <ol class="cabin fuselage">
                                                                                <?php 
                                                                                    $seat = 1;
                                                                                    $amountSeatClass = [];
                                                                                    foreach ($tripSeatAmount as $key => $seatamount) { 
                                                                                        
                                                                                        $amountSeatClass[$seatamount['amount']] = 'seatsel'.$seat;
                                                                                    
                                                                                    $seat++; } 
                                                                                    ?>
                                                                                        
                                                                                    <?php 
                                                                                    $flightSeat = 0;
                                                                                    foreach ($tripSeatRowcolumn as $key => $seatValue) { 

                                                                                        ?> 
                                                                                        <li class="row row--1">  
                                                                                            <ol class="seats" type="A">
                                                                                            <?php  foreach ($seatValue as $key => $seatValue1) { 
                                                                                                    
                                                                                            ?>

                                                                                            <?php if($seatValue1['isBooked'] == 1){ ?>

                                                                                                <li class="seat " id="seatValue">                         
                                                                                                <input type="checkbox" disabled>
                                                                                                <label for="1A" class="clr-1"><?php echo $seatValue1['seatNo']; ?></label>
                                                                                                
                                                                                                </li>

                                                                                            <?php }else{ 
                                                                                                
                                                                                            error_reporting(0);    
                                                                                            ?>
                                                                                                
                                                                                                <li class="seat" id="seatValue" onclick="getSeatSelect('<?php echo $seatValue1['seatNo']; ?>','<?php echo $seatValue1['amount']; ?>','A');"  >

                                                                                                <!-- seat-map__box--selected  -->
                                                                                                <input id="<?php echo $seatValue1['seatNo']; ?>" type="checkbox">
                                                                                                <label for="<?php echo $seatValue1['seatNo']; ?>" class="<?php echo $amountSeatClass[$seatValue1['amount']]; ?> <?php echo $seatValue1['seatNo']; ?>"><?php echo $seatValue1['seatNo']; ?></label>
                                                                                                
                                                                                                
                                                                                                </li>
                                                                                            
                                                                                            <?php  }
                                                                                            } ?>  
                                                                                            </ol>
                                                                                    
                                                                                        </li>
                                                                                    <?php 
                                                                                    $flightSeat++; 
                                                                                    } ?>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="seat-map__legend">
                                                                            <li class="seat-map__legend__item">
                                                                                <span class="graycolor faresummery__heading-box">Flight Orientation</span>
                                                                                <i class="fa fa-plane flight-orientation" aria-hidden="true"></i>
                                                                            </li>
                                                                            <li class="seat-map__legend__item">
                                                                                <span class="graycolor faresummery__heading-box">Seat Status</span>
                                                                                <p class="seat-map__box__row">
                                                                                    <span class="seat-map__box seat-map__box--selected"></span>
                                                                                    <span> - Selected </span>
                                                                                </p>
                                                                                <p class="seat-map__box__row">
                                                                                    <span class="seat-map__box seat-map__box--booked"></span>
                                                                                    <span> - Booked </span>
                                                                                </p>
                                                                            </li>
                                                                            <li class="seat-map__legend__item">
                                                                                <span class="graycolor faresummery__heading-box">Seat Fees</span>
                                                                                <?php 
                                                                                    $seat = 1;
                                                                                    foreach ($tripSeatAmount as $key => $seatamount) { ?>
                                                                                        <p class="seat-map__box__row">

                                                                                            <span class="seat-map__box seatsel<?php echo $seat; ?>"></span>
                                                                                            <span> <i class="fa fa-inr"></i> <?php echo $seatamount['amount']; ?> </span>

                                                                                        </p>
                                                                                    
                                                                                <?php $seat++; } ?>
                                                                            </li>
                                                                        </ul>                                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  

                                                    <?php } } ?>
                                                
                                            </div>
                                        </div>

                                                    <!---------------------------- Baggages & Meals Infos ------------------------------>                          


                                        <?php if(@$tripConditions['gst']['gstappl'] == 'true' ){ ?>
                                            <div class="accordion__container">
                                                <div class="accordion__question__container">
                                                    <span class="accordion__btn">
                                                    <span class="accordion__question">GST Number for  Business Travel (Optional) </span>&nbsp;
                                                    <i class="fa fa-angle-down"></i></span>
                                                </div>
                                                                        
                                                <div class="accordion__answer__container">
                                                    <div class="row">
                                                        <div class="col-md-12">    
                                                            <p style="color:#ff0000;">To claim credit of GST charged by airlines, Please enter your company's GST number</p>
                                                        </div>
                                                        <div class="col-md-3 form-group padding_5px " >
                                                            <input type="text" class="form-control" name="gst_registration_num" id="gst_registration_num" placeholder="Registration Number">                                                    
                                                        </div>
                                                        <div class="col-md-3 form-group ">
                                                            <input type="text" class="form-control" name="gst_registration_company" id="gst_registration_company" placeholder="Registered Company Name">                                                      
                                                        </div>
                                                            <span style="text-align:left; color:#FF0000;font-size:12px;";></span>
                                                        <div class="col-md-3 form-group padding_5px " >
                                                            <input type="text" class="form-control" name="gst_email" id="gst_email" placeholder="Registered Email">                                                                           
                                                        </div>
                                                        <div class="col-md-3 form-group padding_5px " >
                                                            <input type="text" class="form-control" name="gst_phoneno" id="gst_phoneno" placeholder="Registered Phone">     
                                                        </div>
                                                        <div class="col-md-3 form-group padding_5px " >
                                                            <input type="text" class="form-control" name="gst_address" id="gst_address" placeholder="Registered Address">
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div> 
                                        <?php } ?>
                                    </div>
                                                                

                                    <div class="col-lg-12">
                                        <div class="checkbox-outer">                                                                
                                            <input type="checkbox" name="vehicle2" value="Car"> I want to receive &nbsp;<b> Incredible </b> &nbsp;promotional offers in the future &nbsp;<a href="<?php echo base_url('terms_condition');?>"> terms and conditions</a>.
                                        </div>                                                                    
                                        <div class="comment-btn">
                                            <input type="hidden" name="flag" value="yes" />	
                                            <input type="hidden" name="flightId" value="<?php echo $flightId; ?>" />
                                            <input type="hidden" name="flightIdReturn" value="<?php  if(!empty($flightIdReturn)) { echo $flightIdReturn; } ?>" />
                                            <input type="hidden" name="flightIdmultiway_First" value="<?php  if(!empty($flightIdmultiway_First)) { echo $flightIdmultiway_First; } ?>" />
                                            <input type="hidden" name="flightIdmultiway_second" value="<?php  if(!empty($flightIdmultiway_second)) { echo $flightIdmultiway_second; } ?>" />
                                            <input type="hidden" name="flightIdmultiway_third" value="<?php  if(!empty($flightIdmultiway_third)) { echo $flightIdmultiway_third; } ?>" />
                                            <input type="hidden" name="flightIdmultiway_forth" value="<?php  if(!empty($flightIdmultiway_forth)) { echo $flightIdmultiway_forth; } ?>" />
                                            <input type="hidden" name="bookingId" value="<?php echo $bookingId; ?>" />
                                            <input type="hidden" name="flightType" value="<?php echo $bookingType; ?>" />
                                            <input type="submit"class="btn btn-blue btn-red" name="submit" value="Proceed">
                                        </div>
                                    </div>
                                                                                                                
                                    </div>
                                </form>
                            </div>    
                        </div> 
                    </div>
                </div>

                        <!-------------------------------------------------- FARE SUMMARY ----------------------------------------->
                        <div class="col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">

                                <?php 

                                    $totalBaseFare =0;
                                    $totaladultBF = 0;
                                    $totalchildBF = 0;
                                    $totalinfantBF = 0;
                                    $totalFinalAmount = $flighttotalPriceInfo['totalFareDetail']['fC']['TF'];

                                    foreach($flightCheckoutReviewList as $key => $reviewVal){

                                        $adultBF = 0;
                                        $childBF = 0;
                                        $infantBF = 0;

                                        foreach ($reviewVal['priceList'] as $key => $fareVal) {

                                            // echo "<pre>"; print_r($fareVal);
                                            
                                            $adultBF = $adultBF + $fareVal['adultBaseFare'] ;
                                            $childBF = $childBF + $fareVal['childBaseFare'];
                                            $infantBF = $infantBF + $fareVal['infantBaseFare'];

                                        }
                                        // echo $adultBF; echo "<br>";  

                                        $totalBaseFare = $adultBF+ $childBF + $infantBF;
                                        $totaladultBF = $totaladultBF + $adultBF ;
                                        $totalchildBF = $totalchildBF + $childBF;
                                        $totalinfantBF =  $totalinfantBF + $infantBF;

                                    }      
                                    // echo $totalBaseFare;
                                     // echo $totaladultBF;
                                     //die;

                                  //   echo "<pre>"; print_r($flighttotalPriceInfo); die;
                               ?>
                                <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"></span></h3></div>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Base Fare</label>
                                        <div class="col-md-4 pad-l-r">
                                            <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($flighttotalPriceInfo['totalFareDetail']['fC']['BF'],2); ?>
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Base Fare</b></li>
                                                            <?php if($totaladultBF > 0){ ?>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Adult Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php 
                                                                    echo $totaladultBF; 
                                                                    ?></li>
                                                                </ul>
                                                            </li>
                                                            <?php } ?>
                                                            <?php if($totalchildBF > 0){ ?>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Child Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php
                                                                        echo $totalchildBF * $childPax; 
                                                                    ?></li>
                                                                </ul>
                                                            </li>
                                                            <?php } ?>
                                                            <?php if($totalinfantBF > 0){ ?>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Infant Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php 
                                                                    echo $totalinfantBF * $infantPax; 
                                                                    ?></li>
                                                                </ul>
                                                            </li>
                                                            <?php } ?>
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
                                            <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($flighttotalPriceInfo['totalFareDetail']['fC']['TAF'],2); ?>
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Fee & Taxes</b></li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Airline GST</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $flighttotalPriceInfo['totalFareDetail']['afC']['TAF']['AGST']; ?></li>
                                                                </ul>
                                                            </li> 
                                                                <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Management Fee Tax</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $flighttotalPriceInfo['totalFareDetail']['afC']['TAF']['MFT']; ?></li>
                                                                </ul>
                                                            </li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Management Fee</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $flighttotalPriceInfo['totalFareDetail']['afC']['TAF']['MF']; ?></li>
                                                                </ul>
                                                            </li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Other Taxes</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $flighttotalPriceInfo['totalFareDetail']['afC']['TAF']['OT'];  ?></li>
                                                                </ul>
                                                            </li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">YQ</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $flighttotalPriceInfo['totalFareDetail']['afC']['TAF']['YQ'];  ?></li>
                                                                </ul>
                                                            </li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">YR</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $flighttotalPriceInfo['totalFareDetail']['afC']['TAF']['YR'];  ?></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input2_wrapper" id="meal_baggage">
                                        <label class="col-md-8">Meal, Baggage</label>
                                        <div class="col-md-4 pad-l-r">
                                            <span class="red"><i class="fa fa-inr"></i><input id="baggage_meal" readonly style="border: 0px;color: #e41d37;font-size: 15px;font-weight: 500;padding: 5px;display: flex;line-height: 15px;float: right;width: 71px;height: 15px;">
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Meals, Baggage</b></li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Baggage</li>
                                                                    <li class="tooltip-infopos" id="totalBagAmount"> </li>
                                                                </ul>
                                                            </li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Meals</li>
                                                                    <li class="tooltip-infopos" id="totalMMealAmount"> </li>
                                                                </ul>
                                                            </li>
                                                            <!-- <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Seat</li>
                                                                    <li class="tooltip-infopos" id="totalSSeatAmount"></i> </li>
                                                                </ul>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input2_wrapper" id="seat_price">
                                        <label class="col-md-8">Seat </label>
                                        <div class="col-md-4 pad-l-r" style="position: relative;right: 35px;">
                                            <span class="red" id="totalSSeatAmount"><i class="fa fa-inr"></i> 0.00 </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                    <div class="border-2px"></div>
                                    
                                    <div class="input2_wrapper"> 
                                        <label class="col-md-6 mp"><h5 class="mp">Total Amount</h5></label>
                                        <div class="col-md-6 pad-l-r">
                                            <span class="red total-amt mp" id="totAMount"><i class="fa fa-inr"></i> &nbsp;<?php echo number_format($flighttotalPriceInfo['totalFareDetail']['fC']['TF'],2) ;?></span>
                                            <span class="red total-amt mp" id="totSSRAMount"><i class="fa fa-inr"></i> &nbsp;<input id="totalVal" readonly style="border: 0px;color: #244082;font-size: 15px;font-weight: 500;padding: 5px;display: flex;line-height: 15px; float: right;width: 80px;height: 15px;"></span>
                                            
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
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-------------------------------------------------- FARE SUMMARY ------------------------------------------------------------------->
                </div>
            </section>

            <!-- <center class="session-timer"><div class="alertstrip-main pt-20 pb-20 stripe-timer"><i class="fa fa-clock-o tgs-clock"></i>Your Session will expire in <span class="timer-content"> <b>12 mins : 44 secs</b></span></div></center> -->
                
                <?php include('includes/footer.php'); ?>
                <?php include('includes/js.php'); ?>
        </div>
            

        <!--------------------------------------------------- SCRIPT START --------------------------------------------> 

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
                
                $(document).ready(function(){

                    $('.popUpBtn').on('click', function(){
                        $('#'+$(this).data('modal')).css('display','block');
                    })


                    $('span.close').on('click', function(){
                        $('.modal').css('display','none');
                    })


                    $(window).on('click', function(event){
                        if (jQuery.inArray( event.target, $('.modal') ) != "-1") {
                            $('.modal').css('display','none');
                        }
                    })

                })


                $(document).ready(function(){


                    $('.popUpBtn').on('click', function(){
                        $('#'+$(this).data('modal')).css('display','block');
                    })


                    $('span.close').on('click', function(){
                        $('.modal').css('display','none');
                    })


                    $(window).on('click', function(event){
                        if (jQuery.inArray( event.target, $('.modal') ) != "-1") {
                            $('.modal').css('display','none');
                        }
                    })

                })

            var finalTotal = 0;
            function getBaggage(id){    
               // alert(id);
                var grossTotal = "<?php echo $totalFinalAmount; ?>";

                var bookingType = "<?php echo $bookingType; ?>";

                //alert(bookingType);

                

                var totalBaggage = 0;
                var totalBagAmount = 0;
                var totalSSeatAmount = 0;
                var totalMMealAmount = 0;
                

                var adultPax = '<?php echo $_SESSION['adult_user']; ?>';
                for (let index = 1; index <= adultPax; index++) {

                    // One Way //
                   
                    var baggageAdult = $("#baggage"+index).val();   
                    var mealAdult = $("#meal_adult"+index).val();      

                   // alert(mealAdult);           

                    if(baggageAdult=='' || baggageAdult==undefined || baggageAdult=='null'){

                        totalBaggage = totalBaggage;

                    }else{
                    
                        const [bagAdultCode, bagAdultAmount, bagAdultDesc] = baggageAdult.split('~');
                        
                        totalBagAmount = totalBagAmount + parseFloat(bagAdultAmount);
                        totalBaggage = totalBaggage + parseFloat(bagAdultAmount);
                    }   

                    if(mealAdult=='' || mealAdult==undefined || mealAdult==null){

                        totalBaggage = totalBaggage;

                    }
                    else{
                    
                        const [mealAdultCode, mealAdultAmount, mealAdultDesc] = mealAdult.split('~');
                        // alert(mealAdultAmount);
                       
                        if(mealAdultAmount=='' || mealAdultAmount==undefined || mealAdultAmount=='null'){
                            
                            totalMMealAmount = totalMMealAmount;

                        }else{
                           
                            totalMMealAmount = totalMMealAmount + parseFloat(mealAdultAmount);
                            totalBaggage = totalBaggage + parseFloat(mealAdultAmount);

                        }
                    }

                    // Return Trip //

                    var baggageAdultReturn = $("#baggage_return"+index).val();   
                    var mealAdultReturn = $("#meal_adult_return"+index).val();

                    if(baggageAdultReturn=='' || baggageAdultReturn==undefined || baggageAdultReturn=='null'){

                        totalBaggage = totalBaggage;

                    }else{

                        const [bagAdultReturnCode, bagAdultReturnAmount, bagAdultReturnDesc] = baggageAdultReturn.split('~');
                        totalBagAmount = totalBagAmount + parseFloat(bagAdultReturnAmount);
                        totalBaggage = totalBaggage + parseFloat(bagAdultReturnAmount);
                    }  

                    if(mealAdultReturn=='' || mealAdultReturn==undefined || mealAdultReturn==null){

                        totalBaggage = totalBaggage;

                    }
                    else{

                        const [mealAdultReturnCode, mealAdultReturnAmount, mealAdultReturnDesc] = mealAdultReturn.split('~');
                        totalMMealAmount = totalMMealAmount + parseFloat(mealAdultReturnAmount);
                        totalBaggage = totalBaggage + parseFloat(mealAdultReturnAmount);

                    }
                    
                }
                var childPax = '<?php echo $_SESSION['child_user']; ?>';

                for (let index1 = 1; index1 <= childPax; index1++) {

                    // one way 

                    var baggageChild = $("#baggage_child"+index1).val(); 
                    var mealChild = $("#meal_child"+index1).val();          

                    if(baggageChild==null || baggageChild==undefined ||  baggageChild==''){
                
                        totalBaggage = totalBaggage;           
                    }
                    else{

                        const [bagChildCode, bagChildAmount, bagChildDesc] = baggageChild.split('~');
                        totalBagAmount = totalBagAmount + parseFloat(bagChildAmount);
                        totalBaggage = totalBaggage + parseFloat(bagChildAmount);          

                    }         


                    if(mealChild=='' || mealChild==undefined || mealChild==null){

                        totalBaggage = totalBaggage;

                    }
                    else{
                        
                        const [mealChildCode, mealChildAmount, mealChildDesc] = mealChild.split('~');
                        totalMMealAmount = totalMMealAmount + parseFloat(mealChildAmount);
                        totalBaggage = totalBaggage + parseFloat(mealChildAmount);

                    }

                    // Return Trip

                    var baggageChildReturn = $("#baggage_child_return"+index1).val(); 
                    var mealChildReturn = $("#meal_child_return"+index1).val();          

                    if(baggageChildReturn==null || baggageChildReturn==undefined ||  baggageChildReturn==''){
                
                        totalBaggage = totalBaggage;           
                    }
                    else{

                        const [bagChildReturnCode, bagChildReturnAmount, bagChildReturnDesc] = baggageChildReturn.split('~');
                        totalBagAmount = totalBagAmount + parseFloat(bagChildReturnAmount);
                        totalBaggage = totalBaggage + parseFloat(bagChildReturnAmount);          

                    }         


                    if(mealChildReturn=='' || mealChildReturn==undefined || mealChildReturn==null){

                        totalBaggage = totalBaggage;

                    }
                    else{
                        
                        const [mealChildReturnCode, mealChildReturnAmount, mealChildReturnDesc] = mealChildReturn.split('~');
                        totalMMealAmount = totalMMealAmount + parseFloat(mealChildReturnAmount);
                        totalBaggage = totalBaggage + parseFloat(mealChildReturnAmount);

                    }

                   
                    
                }

             //   alert(grossTotal);
              
                $("#totalBagAmount").html('<i class="fa fa-inr"></i> '+ totalBagAmount);
                $("#totalMMealAmount").html('<i class="fa fa-inr"></i> '+ totalMMealAmount);
                var mealBaggageTotal = parseFloat(totalBaggage).toFixed(2);
                $("#baggage_meal").val(mealBaggageTotal);
                
                var totalValues = parseFloat(grossTotal) + parseFloat(totalBaggage);
                finalTotal = parseFloat(totalValues).toFixed(2);

                $("#totalVal").val(finalTotal);
                $("#totalBaggageMeal").val(totalBaggage);
                $("#totalGrossAmount").val(finalTotal);


                if(finalTotal ==''){
                
                    $("#totSSRAMount").hide();         

                }else{

                    $("#totSSRAMount").show();
                    $("#meal_baggage").show();
                    $("#totAMount").hide();
                }
            }



            $(document).ready(function(){     

                // /var id= 1;   

                $("#totSSRAMount").hide();
                $("#meal_baggage").hide();
                $("#seat_price").hide();
                $("#adultchildseatselection").hide();
                //$('.adultseatselection'+id).addClass('seat-map__seat-data--selected');

                $('#infantdatepicker').datepicker({ 

                    maxDate: 0,
                    dateFormat: "dd-mm-yy",           

                });

            });


            var seatNo;
            var seatAmount;
            var paxTypecheck;
            var adultSeatAmount;
            var childSeatAmount;
            var autoIdcheck;
        

            function getSeatSelect(seatNo,seatAmount,paxType,autoId){

                console.log(paxType);

                var seatValue = $("#seatValue").val();
	
			//	alert(seatValue);
				
				$(function () {
					
						if ($("#"+seatNo).is(":checked")) {
							// alert("color changed");
							 $("."+seatNo).css("color", "red");
						}
						else {
							 $("."+seatNo).css("color", "white");
						}
					
					});
				/*
				  $("input[type=checkbox]").each({
						if($("#seatValue").is(':checked')) {
							$("#3A").css('background-color', 'red');
						 } 
					});
					*/
				
				
				

                // var seat123  = document.getElementById(seatNo);
                // alert(seat123);
              

                // if (seat123.checked == true){
                //     alert("checked");
                // } if (seat123.checked == false){
                //     alert("unchecked");
                // }



                var seatNo = seatNo;
                var seatAmount = seatAmount;

                var grossTotal = "<?php echo $grossTotal; ?>";

                if(paxTypecheck=='child'){
                    
                    childSeatAmount = seatAmount;

                    $("#childSeatNo").val(seatNo);
                    $("#seatchildno"+autoIdcheck).html(seatNo);
                    $("#seatchildamount"+autoIdcheck).html('<i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> ' + seatAmount);
                    $("#childseat"+autoIdcheck).html(seatNo);
                    $("#adultchildseatselection").show();


                

                }
                if(paxTypecheck=='adult'){

                    adultSeatAmount = seatAmount;
                    //alert(adultSeatAmount);
                    $("#adultSeatNo").val(seatNo);
                    $("#seatadultno"+autoIdcheck).html(seatNo);
                    $("#seatadultamount"+autoIdcheck).html('<i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> ' + seatAmount); 
                    $("#adultseat"+autoIdcheck).html(seatNo);
                    $("#adultchildseatselection").show();
                    
                    //$('.seatsel').addClass('seat-map__box seat-map__box--selected'); 
                }

                var adultPaxSeat = '<?php echo $_SESSION['adult_user']; ?>';
                var childPaxSeat = '<?php echo $_SESSION['child_user']; ?>';
                
                 //alert(adultPaxSeat);
                // alert(childSeatAmount);

                var totalSeatsAmount = 0;

                if(adultSeatAmount=='' || adultSeatAmount==null || adultSeatAmount==undefined){

                    totalSeatsAmount = totalSeatsAmount;

                }else{

                    totalSeatsAmount = totalSeatsAmount + parseInt(adultSeatAmount);

                }
                
                
                if(childSeatAmount=='' || childSeatAmount==null || childSeatAmount==undefined){

                    totalSeatsAmount = totalSeatsAmount;

                }else{

                    totalSeatsAmount = totalSeatsAmount + parseInt(childSeatAmount);

                }
              
              var totalSeatsAmount1 = parseFloat(totalSeatsAmount) + parseFloat(grossTotal);

                $("#totalSSeatAmount").html('<i class="fa fa-inr" style="margin-top:0px; margin-right:5px;"></i> ' + totalSeatsAmount)
                $("#totalSeatAmount").html('<i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> ' + totalSeatsAmount);

                if(finalTotal==0){

                    var totalFinalAmountWithSeats =  parseFloat(totalSeatsAmount1).toFixed(2);
                    $("#totalVal").val(totalFinalAmountWithSeats);
                    //$("#totSSRAMount").hide();
                    $("#totSSRAMount").show();
                    $("#meal_baggage").hide();
                    $("#totAMount").hide();
                    $("#seat_price").show();
                    $("#totalWithSeat").val(totalFinalAmountWithSeats);
                    $("#totalGrossAmount").val(totalFinalAmountWithSeats);


                }else{

                    var totalSeatsAmount2 = parseFloat(finalTotal) + parseFloat(totalSeatsAmount);

                    var totalFinalAmountWithAllExpensive =  parseFloat(totalSeatsAmount2).toFixed(2);
                   

                    $("#totalVal").val(totalFinalAmountWithAllExpensive);
                    $("#totalGrossAmount").val(totalFinalAmountWithAllExpensive);
                    $("#totalWithSeat").val(totalSeatsAmount);
                    $("#totSSRAMount").show();
                    $("#meal_baggage").show();
                    $("#seat_price").show();
                    $("#totAMount").hide();
                    
                }

                // if(totalSeatsAmount1 != ''){

                //     $("#seat_price").show();
                //     $("#totSSRAMount").show();
                //     $("#meal_baggage").show();
                    
                // }else{

                //     $("#seat_price").hide();
                //     $("#meal_baggage").hide();
                //     $("#totAMount").hide();


                // }    

            }


            function seatPassenger(paxType,autoId){

                paxTypecheck = paxType;
                autoIdcheck = autoId;
                 
                if(paxTypecheck == 'adult'){

                
                    $('.childseatselection'+autoId).removeClass('seat-map__seat-data--selected');
					
                    $('.adultseatselection'+autoId).addClass('seat-map__seat-data--selected');  
					
				//	$('.adultseatselection'+autoId).closest('li').removeClass('seat-map__seat-data--selected');					
                    



                }if(paxTypecheck == 'child'){

                    $('.adultseatselection'+autoId).removeClass('seat-map__seat-data--selected');
                    $('.childseatselection'+autoId).addClass('seat-map__seat-data--selected');

                }      

            }

            function submitSeatRequest(){
                
                $("#myModal1").css("display", "none");

            } 

            $(document).ready(function(){

                $("span.edit").on('click', function() {
               
                    var value = $(this).parent().find(":checkbox").val();
               
                    
                });
            });

        </script>     

         <!--------------------------------------------------- SCRIPT END -------------------------------------------->
        
    </body>
</html>