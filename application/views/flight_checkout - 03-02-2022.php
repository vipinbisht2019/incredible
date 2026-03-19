<?php

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
<span class="BNA"></span>
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

                                    <div class="dscrpton-cntnt detail-box">
                                        <div class="dF pad10 justifyBetween alignItemsCenter" style="background: #efefef;border-radius: 5px;">
                                            <div class="dF alignItemsCenter font18">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy">
                                                    <path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path>
                                                </svg>
                                                <?php if(empty($tripInfoResult['sI'][0]['cT'])){  ?> 
                                                    <span class="padL5">
                                                        <?php echo $tripInfoResult['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResult['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResult['sI'][0]['dt'])); ?>
                                                            </span>
                                                    </span>
                                                <?php }else if(!empty($tripInfoResult['sI'][0]['cT']) && empty($tripInfoResult['sI'][1]['cT'])){   ?>

                                                    <span class="padL5">

                                                        <?php echo $tripInfoResult['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResult['sI'][1]['aa']['city'] ?>&nbsp;&nbsp;
                                                        <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResult['sI'][0]['dt'])); ?>
                                                        </span>

                                                    </span>
                                                <?php }else if(!empty($tripInfoResult['sI'][1]['cT'])){  ?>
                                                    <span class="padL5">

                                                        <?php echo $tripInfoResult['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResult['sI'][2]['aa']['city'] ?>&nbsp;&nbsp;
                                                        <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResult['sI'][0]['dt'])); ?>
                                                        </span>

                                                    </span>
                                                <?php }  ?>
                                            </div>
                                            <div class="dF alignItemsCenter">
                                                <span class="padR5"></span>
                                            </div>
                                        </div>    
                                        <ul class="brdrBot">
                                            <li>
                                                <span class="dsply">
                                                    <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResult['sI'][0]['fD']['aI']['code']; ?>.png">
                                                    <div>
                                                        <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResult['sI'][0]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResult['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResult['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResult['sI'][0]['fD']['fN']; ?> <i class="fa fa-plane"></i>: <?php echo $tripInfoResult['sI'][0]['fD']['eT']; ?></p>
                                                        <!-- <p class="flight-detl" style="font-weight: 500;"></p> -->
                                                    </div>
                                                </span>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResult['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResult['sI'][0]['da']['country']; ?></p>
                                                
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][0]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResult['sI'][0]['da']['terminal']; ?></span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutes = $tripInfoResult['sI'][0]['duration'];
                                                    $hours = floor($minutes / 60);
                                                    $min = $minutes - ($hours * 60); 
                                                    
                                                    echo  $hours."h ".$min."m" ;

                                                    $stop = $tripInfoResult['sI'][0]['stops'];
                                                    if($stop == 0){

                                                        $st= 'Non-Stop';

                                                    }else{

                                                        $st= $stop. ' Stops';

                                                    }
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResult['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResult['sI'][0]['aa']['country']; ?></p>
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResult['sI'][0]['aa']['terminal']; ?></span></p>
                                            </li>
                                        </ul>
                                        <div class="col-md-12" style="margin-top: 10px;padding-left: 0px;">
                                            <span class="label label-warning ars-flightlabel ars-refunsleft"><?php if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                        </div>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <i class="fa fa-suitcase"></i>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  ,<b>Cabin:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> 
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                        <?php 
                                            if(!empty($tripInfoResult['sI'][0]['cT'])){  ?> 

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                        $connectminutes = $tripInfoResult['sI'][0]['cT'] ;
                                                        $connecthours = floor($connectminutes / 60);
                                                        $connectmin = $connectminutes - ($connecthours * 60); 
                                                        
                                                        echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>
                                                <ul class="brdrBot">
                                                    <li>
                                                        <span class="dsply">
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResult['sI'][1]['fD']['aI']['code']; ?>.png">
                                                            <div>
                                                                <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResult['sI'][1]['fD']['aI']['name']; ?></p>
                                                                <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResult['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                                <p class="flight-detl"><?php echo $tripInfoResult['sI'][1]['fD']['aI']['code']; ?> - <?php echo $tripInfoResult['sI'][1]['fD']['fN']; ?> <i class="fa fa-plane"></i>: <?php echo $tripInfoResult['sI'][1]['fD']['eT']; ?></p>
                                                                <!-- <p class="flight-detl" style="font-weight: 500;"></p> -->
                                                            </div>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResult['sI'][1]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][1]['da']['city']; ?>, <?php echo $tripInfoResult['sI'][1]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][1]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResult['sI'][1]['da']['terminal']; ?></span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResult['sI'][1]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResult['sI'][1]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResult['sI'][1]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][1]['aa']['city']; ?>, <?php echo $tripInfoResult['sI'][1]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][1]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResult['sI'][1]['aa']['terminal']; ?></span></p>
                                                    </li>
                                                </ul>
                                                <div class="col-md-12" style="margin-top: 10px;padding-left: 0px;">
                                                    <span class="label label-warning ars-flightlabel ars-refunsleft"><?php if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                </div>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <i class="fa fa-suitcase"></i>
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  ,<b>Cabin:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> 
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div>                                      

                                        <?php 
                                            }
                                        ?>
                                        <?php 
                                        
                                            if(!empty($tripInfoResult['sI'][1]['cT'])){  ?> 

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                        $connectminutes = $tripInfoResult['sI'][1]['cT'] ;
                                                        $connecthours = floor($connectminutes / 60);
                                                        $connectmin = $connectminutes - ($connecthours * 60); 
                                                        
                                                        echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>
                                                <ul class="brdrBot">
                                                    <li>
                                                        <span class="dsply">
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResult['sI'][2]['fD']['aI']['code']; ?>.png">
                                                            <div>
                                                                <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResult['sI'][2]['fD']['aI']['name']; ?></p>
                                                                <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResult['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                                <p class="flight-detl"><?php echo $tripInfoResult['sI'][2]['fD']['aI']['code']; ?> - <?php echo $tripInfoResult['sI'][2]['fD']['fN']; ?> <i class="fa fa-plane"></i>: <?php echo $tripInfoResult['sI'][2]['fD']['eT']; ?></p>
                                                                <!-- <p class="flight-detl" style="font-weight: 500;"></p> -->
                                                            </div>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResult['sI'][2]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][2]['da']['city']; ?>, <?php echo $tripInfoResult['sI'][2]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][2]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResult['sI'][2]['da']['terminal']; ?></span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResult['sI'][2]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResult['sI'][2]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResult['sI'][2]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][2]['aa']['city']; ?>, <?php echo $tripInfoResult['sI'][2]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResult['sI'][2]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResult['sI'][2]['aa']['terminal']; ?></span></p>
                                                    </li>
                                                </ul>
                                                <div class="col-md-12" style="margin-top: 10px;padding-left: 0px;">
                                                    <span class="label label-warning ars-flightlabel ars-refunsleft"><?php if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResult['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                </div>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <i class="fa fa-suitcase"></i>
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  ,<b>Cabin:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> 
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div>                                      

                                        <?php 
                                            } 
                                        ?>

                                    </div>  
                                

                                    <!----------------------- ONE WAY END ------------------------------------------->

                                    <!-------------------------- RETURN TRIP START --------------------------------->
                                    
                                    
                                    <?php if(@$tripInfoResultReturn!=''){ ?>

                                                
                                            
                                                
                                            <div class="dscrpton-cntnt detail-box">
                                                <div class="dF pad10 justifyBetween alignItemsCenter" style="background: #efefef;border-radius: 5px;">
                                                    <div class="dF alignItemsCenter font18">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy">
                                                            <path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path>
                                                        </svg>
                                                        <span class="padL5"><?php echo $tripInfoResultReturn['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultReturn['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;<?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?></span>
                                                    </div>
                                                    <div class="dF alignItemsCenter">
                                                        <span class="padR5"></span>
                                                    </div>
                                                </div>
                                                <ul class="brdrBot">
                                                    <li>
                                                        <span class="dsply">
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['code']; ?>.png">
                                                            <div>
                                                                <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['name']; ?></p>
                                                                <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                                <p class="flight-detl"><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultReturn['sI'][0]['fD']['fN']; ?>
                                                                <i class="fa fa-plane"></i>:<?php echo $tripInfoResultReturn['sI'][0]['fD']['eT']; ?> 
                                                                </p>                                                               
                                                            </div>                                                            
                                                        </span>                                                       
                                                    </li>
                                                   
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?></p>                                        

                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['da']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][0]['da']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;">(<?php echo @$tripInfoResultReturn['sI'][0]['da']['terminal']; ?>)</span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  

                                                            $minutes = $tripInfoResultReturn['sI'][0]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stopreturn = $tripInfoResultReturn['sI'][0]['stops'];
                                                            if($stopreturn == 0){

                                                                $stret = 'Non-Stop';

                                                            }else{

                                                                $stret = $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php echo $stret; ?></span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][0]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['aa']['country']; ?></p>
                                                        <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;">(<?php echo @$tripInfoResultReturn['sI'][0]['aa']['terminal']; ?>)</span></p>
                                                    </li>
                                                </ul>
                                                <div class="col-md-12" style="margin-top: 10px;padding-left: 0px;">
                                                    <span class="label label-warning ars-flightlabel ars-refunsleft"><?php if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                </div>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <i class="fa fa-suitcase"></i>
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?> , <b>Cabin:</b> <?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?>
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div>
                                            </div>
                                    <?php } ?>
                                    
                                <!---------------------------------------------- RETURN TRIP END ---------------------------------------------------------------> 
     
                                        <!---------------------------------------------- MULTICITY START ---------------------------------------------------------------> 
                                    
                            <?php 
                                
                                //echo "<pre>"; print_r($tripInfoResultthird); die;
                                
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
                                                                            // ------------------------------ first Name form ---------------------------------
                                                                            $val=set_value("first_middle_name");
                                                                            $data = array('name'  => 'first_middle_name[]', 'id' => 'first_middle_name', 'value' => $val, 'placeholder' => 'First Name', 'class'=>"form-control margin_bottom",'required'=>'required');
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
                                                                                                    
                                                                                <div class="col-md-4 form-group ">
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('day'); ?></span>
																					<?php if(empty($tripConditions['pcs'])){ ?>
                                                                                    <input type="text" name="dob[]" id="infantdatepicker" placeholder="dob" required /> 
																					<?php } ?>
                                                                                </div>	
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

                                            $adultPax12 = $this->session->userdata('adult_user');
                                            $childPax12 = $this->session->userdata('child_user');

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
                                                    <!-------------------------ONE WAY----------------------------------------------->
                                                    <?php 
                                                        
                                                        if(empty($tripInfoResult['sI'][0]['cT'])){ 
                                                               // echo "bhanu";
                                                                ?> 

                                                                <p class="p-20"><b><span><?php echo $tripInfoResult['sI'][0]['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $tripInfoResult['sI'][0]['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($tripInfoResult['sI'][0]['dt'])); ?></span></p>

                                                                <?php 
                                                                
                                                                if(count($adultPax12) > 0) {
                                                                            
                                                                        $ib=1;

                                                                        while($adultPax12 > 0){ 
                                                                            
                                                                            ?>

                                                                            <div class="row">

                                                                                <div class="col-md-2 form-group padding_5px " >
                                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $ib; ?></span>
                                                                                    <input type="hidden" name="departureCity[]" value="<?php echo $tripInfoResult['sI'][0]['da']['code'] ?>">
                                                                                    <input type="hidden" name="arrivalCity[]" value="<?php echo $tripInfoResult['sI'][0]['aa']['code'] ?>">
                                                                                </div>
                                                                                
                                                                                    <?php 
                                                                                        if(!empty($tripInfoResult['sI'][0]['ssrInfo']['BAGGAGE'])){  ?>

                                                                                            <div class="col-md-5 form-group ">
                                                                                                <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>   
                                                                                                <select name="baggage[]" id="baggage<?php echo $ib; ?>" onchange="getBaggage('<?php echo $ib; ?>');">
                                                                                                    <option value="">Add Baggage</option>
                                                                                                    <?php foreach ($tripInfoResult['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalue) { ?> 

                                                                                                        <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                                    
                                                                                                    <?php } ?>
                                                                                                </select>
                                                                                            </div>

                                                                                    <?php }else{ ?> 

                                                                                            <div class="col-md-5 form-group ">
                                                                                                <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                            </div>

                                                                                    <?php } ?>	

                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>

                                                                                    <?php 
                                                                                        if(!empty($tripInfoResult['sI'][0]['ssrInfo']['MEAL'])){  ?>  

                                                                                            <div class="col-md-5 form-group padding_5px " >

                                                                                                <select name="meal[]" id="meal_adult<?php echo $ib; ?>" onchange="getBaggage('<?php echo $ib; ?>');">
                                                                                                    <option value="">Add Meal</option>
                                                                                                    <?php foreach ($tripInfoResult['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalue) { ?> 
                                                                                                    <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                                    <?php } ?>                                                        
                                                                                                </select>   
                                                                                            </div>

                                                                                    <?php }else{ ?>

                                                                                            <div class="col-md-5 form-group ">
                                                                                                <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                            </div>

                                                                                    <?php } ?>

                                                                            </div> 
                                                                            
                                                                            <?php 

                                                                                    $adultPax12--;                                                                   
                                                                                    $ib++;
                                                                                }
                                                                        } 
                                                                        ?>

                                                                        <?php 
                                                                        
                                                                        if(count($childPax12) > 0) {
                                                                            
                                                                            $jb=1; 
                                                                            
                                                                            while($childPax12 > 0) {  
                                                                                
                                                                                ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jb; ?></span>
                                                                                            <input type="hidden" name="departureCity[]" value="<?php echo $tripInfoResult['sI'][0]['da']['code'] ?>">
                                                                                            <input type="hidden" name="arrivalCity[]" value="<?php echo $tripInfoResult['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($tripInfoResult['sI'][0]['ssrInfo']['BAGGAGE'])){  ?>
                                                                                        <div class="col-md-5 form-group ">
                                                                                            <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                            <select name="baggage[]" id="baggage_child<?php echo $jb; ?>" onchange="getBaggage('<?php echo $jb; ?>');">
                                                                                                <option value="">Add Baggage</option>
                                                                                                <?php foreach ($tripInfoResult['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalue) { ?> 

                                                                                                    <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                                
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                                <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                            </div>
                                                                                    <?php } ?>					
                                                                                    
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>
                                                                                    <?php if(!empty($tripInfoResult['sI'][0]['ssrInfo']['MEAL'])){  ?>
                                                                                        <div class="col-md-5 form-group padding_5px " >

                                                                                            <select name="meal[]" id="meal_child<?php echo $jb; ?>" onchange="getBaggage('<?php echo $jb; ?>');">
                                                                                                <option value="">Add Meal</option>
                                                                                                <?php foreach ($tripInfoResult['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalue) { ?> 
                                                                                                <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                                <?php } ?>                                                        
                                                                                            </select>
                                                                                        </div>
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                                <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                            </div>
                                                                                    <?php } ?>
                                                                                </div>  
                                                                        
                                                                            <?php 

                                                                            $childPax12--; 
                                                                            $jb++;

                                                                            } 
                                                                        } 
                                                            } else{ 
                                                                            

                                                                            // foreach ($tripInfoResult as $key => $tripReviwvalue) {                                                            
                                                                              //  echo "bhanu"; 
                                                                                foreach($tripInfoResult['sI'] as $key1 => $segValue){ 

                                                                                    $adultPax12 = $this->session->userdata('adult_user');
                                                                                    $childPax12 = $this->session->userdata('child_user');

                                                                                
                                                                        ?> 
                                                                            
                                                                        
                                                                            <p class="p-20"><b><span><?php echo $segValue['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $segValue['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($segValue['dt'])); ?></span></p>

                                                                            

                                                                                <?php if(count($adultPax12) > 0) {

                                                                                    $iib=1; 
                                                                                    while($adultPax12 > 0) { ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $iib; ?></span>
                                                                                        <input type="hidden" name="departureCity[]" value="<?php echo $tripInfoResult['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="arrivalCity[]" value="<?php echo $tripInfoResult['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($segValue['ssrInfo']['BAGGAGE'])){ 
                                                                                        
                                                                                    ?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage[]" id="baggage<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($segValue['ssrInfo']['BAGGAGE'] as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo @$baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo @$baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div>
                                                                                <?php  } ?>							
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>

                                                                                <?php if(!empty($segValue['ssrInfo']['MEAL'])){ ?>
                                                                                        
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal[]" id="meal_adult<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($segValue['ssrInfo']['MEAL'] as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>

                                                                                <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                    </div>
                                                                                <?php  } ?>
                                                                                </div> 

                                                                                <?php 
                                                                                    $adultPax12--;                                                                   
                                                                                    $iib++;
                                                                                    }
                                                                                } ?>

                                                                                <?php if(count($childPax12) > 0) {
                                                                                
                                                                                $jjb=1; 
                                                                                
                                                                                while($childPax12 > 0) {  ?>

                                                                                <div class="row">
                                                                                <div class="col-md-2 form-group padding_5px " >
                                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jjb; ?></span>
                                                                                    <input type="hidden" name="departureCity[]" value="<?php echo $tripInfoResult['sI'][0]['da']['code'] ?>">
                                                                                    <input type="hidden" name="arrivalCity[]" value="<?php echo $tripInfoResult['sI'][0]['aa']['code'] ?>">
                                                                                </div>
                                                                                <?php if(!empty($segValue['ssrInfo']['BAGGAGE'])){  ?>
                                                                                <div class="col-md-5 form-group ">
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                    <select name="baggage[]" id="baggage_child<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                        <option value="">Add Baggage</option>
                                                                                        <?php foreach($segValue['ssrInfo']['BAGGAGE'] as $key => $baggagevalue) { ?> 

                                                                                            <option value="<?php echo $baggagevalue['code']; ?>~<?php echo @$baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo @$baggagevalue['amount']; ?></option>
                                                                                        
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                            <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                        </div>
                                                                                <?php  } ?>				
                                                                                    
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>
                                                                                <?php if(!empty($segValue['ssrInfo']['MEAL'])){  ?>
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal[]" id="meal_child<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($segValue['ssrInfo']['MEAL'] as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>
                                                                                    </div>
                                                                                <?php } else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                            <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                        </div>
                                                                                <?php  } ?>	
                                                                                </div>  

                                                                                <?php 
                                                                                    $childPax12--; 
                                                                                    $jjb++;
                                                                                } } ?>
                                                                        <?php }  } //} ?>
                                                            <!------------------------- Return Trip ------------------------------->                                         
                                                                        <?php if(!empty($tripInfoResultReturn)){ 
                                                                            //echo "<pre>"; print_r($tripInfoResultReturn);
                                                                            $adultPax12 = $this->session->userdata('adult_user');
                                                                            $childPax12 = $this->session->userdata('child_user');    
                                                                        ?>
                                                                        <?php if(empty($tripInfoResultReturn['sI'][0]['cT'])){ ?>                                                       
                                                                        <p class="p-20"><b><span><?php echo $tripInfoResultReturn['sI'][0]['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $tripInfoResultReturn['sI'][0]['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?></span></p>

                                                                            <?php if(count($adultPax12) > 0) {
                                                                            
                                                                            $ibr=1; 
                                                                        while($adultPax12 > 0) { ?>
                                                                        <div class="row">
                                                                            <div class="col-md-2 form-group padding_5px " >
                                                                                <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $ibr; ?></span>
                                                                                <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                            </div>
                                                                            <?php if(!empty($tripInfoResultReturn['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>
                                                                                <div class="col-md-5 form-group ">
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                    <select name="baggage_return[]" id="baggage_return<?php echo $ibr; ?>" onchange="getBaggage('<?php echo $ibr; ?>');">
                                                                                        <option value="">Add Baggage</option>
                                                                                        <?php foreach ($tripInfoResultReturn['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueSecond) { ?> 

                                                                                            <option value="<?php echo $baggagevalueSecond['code']; ?>~<?php echo $baggagevalueSecond['amount']; ?>~<?php echo $baggagevalueSecond['desc']; ?>"><?php echo $baggagevalueSecond['desc']; ?> <?php if(!empty($baggagevalueSecond['amount'])){ ?>   @ <?php echo $baggagevalueSecond['amount'];} ?></option>
                                                                                        
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>	
                                                                            <?php }else{ ?> 
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                            <?php  } ?>							
                                                                                
                                                                                <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                <?php echo form_error('first_middle_name'); ?> </span>
                                                                            <?php if(!empty($tripInfoResultReturn['sI'][0]['ssrInfo']['MEAL'])){ ?>
                                                                                <div class="col-md-5 form-group padding_5px " >

                                                                                    <select name="meal_return[]" id="meal_adult_return<?php echo $ibr; ?>" onchange="getBaggage('<?php echo $ibr; ?>');">
                                                                                        <option value="">Add Meal</option>
                                                                                        <?php foreach ($tripInfoResultReturn['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueSecond) { ?> 
                                                                                        <option value="<?php echo $mealvalueSecond['code']; ?>~<?php echo @$mealvalueSecond['amount']; ?>~<?php echo $mealvalueSecond['desc']; ?>"><?php echo $mealvalueSecond['desc']; ?> <?php if(!empty($mealvalueSecond['amount'])){ ?> @ <?php echo @$mealvalueSecond['amount'];  } ?></option>
                                                                                        <?php } ?>                                                        
                                                                                    </select>   
                                                                                </div>
                                                                            <?php }else{ ?> 
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                            <?php  } ?>	
                                                                        </div> 
                                                                        
                                                                        <?php 
                                                                            $adultPax12--;                                                                   
                                                                            $ibr++;
                                                                            }
                                                                        } ?>

                                                                        <?php if(count($childPax12) > 0) {
                                                                            
                                                                            $jbr=1; 
                                                                            
                                                                            while($childPax12 > 0) {  ?>

                                                                        <div class="row">
                                                                            <div class="col-md-2 form-group padding_5px " >
                                                                                <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jbr; ?></span>
                                                                                <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                            </div>
                                                                            <?php if(!empty($tripInfoResultReturn['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>
                                                                                <div class="col-md-5 form-group ">
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                    <select name="baggage_return[]" id="baggage_child_return<?php echo $jbr; ?>" onchange="getBaggage('<?php echo $jbr; ?>');">
                                                                                        <option value="">Add Baggage</option>
                                                                                        <?php foreach ($tripInfoResultReturn['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueSecond) { ?> 

                                                                                            <option value="<?php echo $baggagevalueSecond['code']; ?>~<?php echo $baggagevalueSecond['amount']; ?>~<?php echo $baggagevalueSecond['desc']; ?>"><?php echo $baggagevalueSecond['desc']; ?> @ <?php echo $baggagevalueSecond['amount']; ?></option>
                                                                                        
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            <?php }else{ ?> 
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                            <?php  } ?>				
                                                                                
                                                                                <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                <?php echo form_error('first_middle_name'); ?> </span>
                                                                            <?php if(!empty($tripInfoResultReturn['sI'][0]['ssrInfo']['MEAL'])){ ?>
                                                                                <div class="col-md-5 form-group padding_5px " >

                                                                                    <select name="meal_return[]" id="meal_child_return<?php echo $jbr; ?>" onchange="getBaggage('<?php echo $jbr; ?>');">
                                                                                        <option value="">Add Meal</option>
                                                                                        <?php foreach ($tripInfoResultReturn['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueSecond) { ?> 
                                                                                        <option value="<?php echo $mealvalueSecond['code']; ?>~<?php echo $mealvalueSecond['amount']; ?>~<?php echo $mealvalueSecond['desc']; ?>"><?php echo $mealvalueSecond['desc']; ?> @ <?php echo $mealvalueSecond['amount']; ?></option>
                                                                                        <?php } ?>                                                        
                                                                                    </select>
                                                                                </div>
                                                                            <?php }else{ ?> 
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <?php echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                            <?php  } ?>	
                                                                        </div>  
                                                                        
                                                                        <?php 
                                                                            $childPax12--; 
                                                                            $jbr++;
                                                                        } } } else{ 
                                                                            
                                                                            
                                                                            foreach ($tripInfoResultComplete as $key => $tripReviwvalue) {                                                            
                                                                            
                                                                                foreach($tripReviwvalue['sI'] as $key1 => $segValue){ 

                                                                                    $adultPax12 = $this->session->userdata('adult_user');
                                                                                    $childPax12 = $this->session->userdata('child_user');
                                                                        ?> 
                                                                            
                                                                        
                                                                            <p class="p-20"><b><span><?php echo $segValue['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $segValue['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($segValue['dt'])); ?></span></p>

                                                                            

                                                                                <?php if(count($adultPax12) > 0) {
                                                                                
                                                                                    $iib=1; 
                                                                                while($adultPax12 > 0) { ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $iib; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($SSRInfoBaggage)){?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage[]" id="baggage<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div>
                                                                                <?php  } ?>							
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                                
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal[]" id="meal_adult<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>
                                                                                </div> 

                                                                                <?php 
                                                                                    $adultPax12--;                                                                   
                                                                                    $iib++;
                                                                                    }
                                                                                } ?>

                                                                                <?php if(count($childPax12) > 0) {
                                                                                
                                                                                $jjb=1; 
                                                                                
                                                                                while($childPax12 > 0) {  ?>

                                                                                <div class="row">
                                                                                <div class="col-md-2 form-group padding_5px " >
                                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jb; ?></span>
                                                                                    <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                </div>
                                                                                <div class="col-md-5 form-group ">
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                    <select name="baggage_return[]" id="baggage_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                        <option value="">Add Baggage</option>
                                                                                        <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                            <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                        
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>				
                                                                                    
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>

                                                                                <div class="col-md-5 form-group padding_5px " >

                                                                                    <select name="meal_return[]" id="meal_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                        <option value="">Add Meal</option>
                                                                                        <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                        <option value="<?php echo $mealvalue['code']; ?>~<?php echo $mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo $mealvalue['amount']; ?></option>
                                                                                        <?php } ?>                                                        
                                                                                    </select>
                                                                                </div>
                                                                                </div>  

                                                                                <?php 
                                                                                    $childPax12--; 
                                                                                    $jjb++;
                                                                                } } ?>
                                                                        <?php }  } } ?>

                                                                <?php } ?>     
                                                            <!-------------------------Return Trip ----------------------------------------------->

                                                            <!-------------------------- Multicity ----------------------------------------------->

                                                    <?php 
                                                    
                                                        if(!empty($tripInfoResultthird)){ 
                                                                                                
                                                            $adultPax123 = $this->session->userdata('adult_user');
                                                            $childPax123 = $this->session->userdata('child_user'); 
                                                            
                                                            if(empty($tripInfoResultthird['sI'][0]['cT'])){ 

                                                                if(!empty($tripInfoResultthird['sI'][0]['ssrInfo'])){
                                                                
                                                                    ?>                                                       
                                                                    <p class="p-20"><b><span><?php echo $tripInfoResultthird['sI'][0]['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $tripInfoResultthird['sI'][0]['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($tripInfoResultthird['sI'][0]['dt'])); ?></span></p>

                                                                    <!------------------------------------- ADULT PAX --------------------------------------------->

                                                                    <?php 
                                                                
                                                                    if(count($adultPax123) > 0) {
                                                        
                                                                        $imb=1;                             
                                                                        while($adultPax123 > 0) { 
                                                                    ?>
                                                                            <div class="row">
                                                                                <div class="col-md-2 form-group padding_5px " >
                                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $imb; ?></span>
                                                                                    <input type="hidden" name="thirddepartureCity[]" value="<?php echo $tripInfoResultthird['sI'][0]['da']['code'] ?>">
                                                                                    <input type="hidden" name="thirdarrivalCity[]" value="<?php echo $tripInfoResultthird['sI'][0]['aa']['code'] ?>">
                                                                                </div>
                                                                                <?php if(!empty($tripInfoResultthird['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_third[]" id="baggage_third<?php echo $imb; ?>" onchange="getBaggage('<?php echo $imb; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($tripInfoResultthird['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueThird) { ?> 

                                                                                                <option value="<?php echo $baggagevalueThird['code']; ?>~<?php echo $baggagevalueThird['amount']; ?>~<?php echo $baggagevalueThird['desc']; ?>"><?php echo $baggagevalueThird['desc']; ?> <?php if(!empty($baggagevalueThird['amount'])){ ?>   @ <?php echo $baggagevalueThird['amount'];} ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>							
                                                                                    
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>
                                                                                <?php if(!empty($tripInfoResultthird['sI'][0]['ssrInfo']['MEAL'])){ ?>      
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_third[]" id="meal_adult_third<?php echo $imb; ?>" onchange="getBaggage('<?php echo $imb; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($tripInfoResultthird['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueThird) { ?> 
                                                                                            <option value="<?php echo $mealvalueThird['code']; ?>~<?php echo @$mealvalueThird['amount']; ?>~<?php echo $mealvalueThird['desc']; ?>"><?php echo $mealvalueThird['desc']; ?> <?php if(!empty($mealvalueThird['amount'])){ ?> @ <?php echo @$mealvalueThird['amount'];  } ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>	
                                                                                
                                                                            </div> 
                                                    
                                                                    <?php 

                                                                            $adultPax123--;                                                                   
                                                                            $imb++;
                                                                        }
                                                                    } 
                                                                    ?>

                                                                    <!------------------------------------- CHILD PAX --------------------------------------------->

                                                                    <?php 
                                                                    
                                                                    if(count($childPax123) > 0) {
                                                        
                                                                        $jmb=1; 
                                                        
                                                                        while($childPax123 > 0) {  
                                                                            
                                                                            ?>

                                                                            <div class="row">
                                                                                <div class="col-md-2 form-group padding_5px " >
                                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jmb; ?></span>
                                                                                    <input type="hidden" name="thirddepartureCity[]" value="<?php echo $tripInfoResultthird['sI'][0]['da']['code'] ?>">
                                                                                    <input type="hidden" name="thirdarrivalCity[]" value="<?php echo $tripInfoResultthird['sI'][0]['aa']['code'] ?>">
                                                                                </div>
                                                                                <?php if(!empty($tripInfoResultthird['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_third[]" id="baggage_child_third<?php echo $jmb; ?>" onchange="getBaggage('<?php echo $jmb; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($tripInfoResultthird['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueRet) { ?> 

                                                                                                <option value="<?php echo $baggagevalueThird['code']; ?>~<?php echo $baggagevalueThird['amount']; ?>~<?php echo $baggagevalueThird['desc']; ?>"><?php echo $baggagevalueThird['desc']; ?> @ <?php echo $baggagevalueThird['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>

                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>				
                                                                                    
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>
                                                                                <?php if(!empty($tripInfoResultthird['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_third[]" id="meal_child_third<?php echo $jmb; ?>" onchange="getBaggage('<?php echo $jmb; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($tripInfoResultthird['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueThird) { ?> 
                                                                                            <option value="<?php echo $mealvalueThird['code']; ?>~<?php echo $mealvalueThird['amount']; ?>~<?php echo $mealvalueThird['desc']; ?>"><?php echo $mealvalueThird['desc']; ?> @ <?php echo $mealvalueThird['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>
                                                                                    </div>
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>	
                                                                            </div>  
                                                    
                                                                            <?php 

                                                                            $childPax123--; 
                                                                            $jmb++;

                                                                        } 
                                                                    }
                                                                }else{

                                                                    echo "Baggae & Meal Info not applicable for this Itinerary!";

                                                                } 
                                                            }
                                                            else{ 
                                                        
                                                        
                                                                foreach ($tripInfoResultComplete as $key => $tripReviwvalue){                                                            
                                                        
                                                                    foreach($tripReviwvalue['sI'] as $key1 => $segValue){ 

                                                                        $adultPax123 = $this->session->userdata('adult_user');
                                                                        $childPax123 = $this->session->userdata('child_user');
                                                                ?> 
                                                        
                                                    
                                                                        <p class="p-20"><b><span><?php echo $segValue['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $segValue['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($segValue['dt'])); ?></span></p>

                                                        

                                                                <?php               if(count($adultPax123) > 0) {
                                                            
                                                                            $iimb=1;

                                                                            while($adultPax123 > 0) { 
                                                                ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $iib; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($SSRInfoBaggage)){?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage[]" id="baggage<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div>
                                                                                    <?php  } ?>							
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                                
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal[]" id="meal_adult<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>
                                                                                </div> 

                                                                <?php 
                                                                                $adultPax123--;                                                                   
                                                                                $iimb++;
                                                                            }
                                                                        } 
                                                                ?>

                                                                <?php               if(count($childPax123) > 0) {
                                                            
                                                                            $jjmb=1; 
                                                            
                                                                            while($childPax123 > 0) {  
                                                                                
                                                                ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jb; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                            <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_return[]" id="baggage_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>				
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>

                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_return[]" id="meal_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo $mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo $mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>
                                                                                    </div>
                                                                                </div>  

                                                                <?php 
                                                                                $childPax123--; 

                                                                                $jjmb++;
                                                                            
                                                                            } 
                                                                        }
                                                                ?>
                                                                <?php           }  
                                                                } 
                                                            } 
                                                            ?>

                                                            <?php 
                                                        
                                                        } 
                                                    
                                                    ?>       
                                            
                                                    <!-------------------------------------------------- Fourth Way ------------------------------------------------------->

                                                    <?php 
                                                    
                                                        if(!empty($tripInfoResultforth)){ 
                                                                                                
                                                            $adultPax124 = $this->session->userdata('adult_user');
                                                            $childPax124 = $this->session->userdata('child_user'); 
                                                            
                                                            if(empty($tripInfoResultforth['sI'][0]['cT'])){ 

                                                                if(!empty($tripInfoResultforth['sI'][0]['ssrInfo'])){
                                                                
                                                                    ?>                                                       
                                                                    <p class="p-20"><b><span><?php echo $tripInfoResultforth['sI'][0]['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $tripInfoResultforth['sI'][0]['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($tripInfoResultforth['sI'][0]['dt'])); ?></span></p>

                                                                    <!------------------------------------- ADULT PAX --------------------------------------------->

                                                                    <?php 
                                                                    
                                                                        if(count($adultPax124) > 0) {            
                                                                            $im4b=1;                             
                                                                            while($adultPax124 > 0) { 

                                                                                ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $im4b; ?></span>
                                                                                        <input type="hidden" name="forthdepartureCity[]" value="<?php echo $tripInfoResultforth['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="fortharrivalCity[]" value="<?php echo $tripInfoResultforth['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($tripInfoResultforth['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>

                                                                                        <div class="col-md-5 form-group ">
                                                                                            <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                            <select name="baggage_forth[]" id="baggage_forth<?php echo $im4b; ?>" onchange="getBaggage('<?php echo $im4b; ?>');">
                                                                                                <option value="">Add Baggage</option>
                                                                                                <?php foreach ($tripInfoResultforth['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueForth) { ?> 

                                                                                                    <option value="<?php echo $baggagevalueForth['code']; ?>~<?php echo $baggagevalueForth['amount']; ?>~<?php echo $baggagevalueForth['desc']; ?>"><?php echo $baggagevalueForth['desc']; ?> <?php if(!empty($baggagevalueForth['amount'])){ ?>   @ <?php echo $baggagevalueForth['amount'];} ?></option>
                                                                                                
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>	
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                        <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                                    <?php  } ?>							
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                    
                                                                                    <?php if(!empty($tripInfoResultforth['sI'][0]['ssrInfo']['MEAL'])){ ?>
                                                                                                
                                                                                        <div class="col-md-5 form-group padding_5px">

                                                                                            <select name="meal_forth[]" id="meal_adult_forth<?php echo $im4b; ?>" onchange="getBaggage('<?php echo $im4b; ?>');">
                                                                                                <option value="">Add Meal</option>
                                                                                                <?php foreach ($tripInfoResultforth['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueForth) { ?> 
                                                                                                <option value="<?php echo $mealvalueForth['code']; ?>~<?php echo @$mealvalueForth['amount']; ?>~<?php echo $mealvalueForth['desc']; ?>"><?php echo $mealvalueForth['desc']; ?> <?php if(!empty($mealvalueForth['amount'])){ ?> @ <?php echo @$mealvalueForth['amount'];  } ?></option>
                                                                                                <?php } ?>                                                        
                                                                                            </select>   
                                                                                        </div>

                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                        <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                                    <?php  } ?>
                                                                                </div> 
                                                        
                                                                                <?php 

                                                                                $adultPax124--;                                                                   
                                                                                $im4b++;
                                                                            }
                                                                        } 
                                                                    ?>

                                                                    <!------------------------------------- CHILD PAX --------------------------------------------->

                                                                    <?php 
                                                                        
                                                                        if(count($childPax124) > 0) {
                                                            
                                                                            $jm4b=1; 
                                                            
                                                                            while($childPax124 > 0) {  
                                                                                
                                                                                ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jm4b; ?></span>
                                                                                        <input type="hidden" name="forthdepartureCity[]" value="<?php echo $tripInfoResultforth['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="fortharrivalCity[]" value="<?php echo $tripInfoResultforth['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($tripInfoResultforth['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>
                                                                                        <div class="col-md-5 form-group ">
                                                                                            <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                            <select name="baggage_forth[]" id="baggage_child_forth<?php echo $jm4b; ?>" onchange="getBaggage('<?php echo $jm4b; ?>');">
                                                                                                <option value="">Add Baggage</option>
                                                                                                <?php foreach ($tripInfoResultforth['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueForth) { ?> 

                                                                                                    <option value="<?php echo $baggagevalueForth['code']; ?>~<?php echo $baggagevalueForth['amount']; ?>~<?php echo $baggagevalueForth['desc']; ?>"><?php echo $baggagevalueForth['desc']; ?> @ <?php echo $baggagevalueForth['amount']; ?></option>
                                                                                                
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                        <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                                    <?php  } ?>					
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                    <?php if(!empty($tripInfoResultforth['sI'][0]['ssrInfo']['MEAL'])){ ?>   
                                                                                        <div class="col-md-5 form-group padding_5px " >

                                                                                            <select name="meal_forth[]" id="meal_child_forth<?php echo $jm4b; ?>" onchange="getBaggage('<?php echo $jm4b; ?>');">
                                                                                                <option value="">Add Meal</option>
                                                                                                <?php foreach ($tripInfoResultforth['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueForth) { ?> 
                                                                                                <option value="<?php echo $mealvalueForth['code']; ?>~<?php echo $mealvalueForth['amount']; ?>~<?php echo $mealvalueForth['desc']; ?>"><?php echo $mealvalueForth['desc']; ?> @ <?php echo $mealvalueForth['amount']; ?></option>
                                                                                                <?php } ?>                                                        
                                                                                            </select>
                                                                                        </div>
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                        <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                    </div> 
                                                                                    <?php  } ?>	

                                                                                </div>  
                                                        
                                                                                <?php 

                                                                                $childPax124--; 
                                                                                $jm4b++;

                                                                            } 
                                                                        }
                                                                }else{

                                                                    echo "Baggage & Meal Info not applicable for this Itinerary!";

                                                                } 
                                                            }
                                                            else{            
                                                        
                                                                foreach ($tripInfoResultComplete as $key => $tripReviwvalue){                                                            
                                                        
                                                                    foreach($tripReviwvalue['sI'] as $key1 => $segValue){ 

                                                                        $adultPax123 = $this->session->userdata('adult_user');
                                                                        $childPax123 = $this->session->userdata('child_user');
                                                                ?> 
                                                        
                                                    
                                                                        <p class="p-20"><b><span><?php echo $segValue['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $segValue['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($segValue['dt'])); ?></span></p>

                                                        

                                                                <?php               if(count($adultPax123) > 0) {
                                                            
                                                                            $iimb=1;

                                                                            while($adultPax123 > 0) { 
                                                                ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $iib; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($SSRInfoBaggage)){?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage[]" id="baggage<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div>
                                                                                    <?php  } ?>							
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                                
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal[]" id="meal_adult<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>
                                                                                </div> 

                                                                <?php 
                                                                                $adultPax123--;                                                                   
                                                                                $iimb++;
                                                                            }
                                                                        } 
                                                                ?>

                                                                <?php               if(count($childPax123) > 0) {
                                                            
                                                                            $jjmb=1; 
                                                            
                                                                            while($childPax123 > 0) {  
                                                                                
                                                                ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jb; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                            <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_return[]" id="baggage_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>				
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>

                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_return[]" id="meal_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo $mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo $mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>
                                                                                    </div>
                                                                                </div>  

                                                                <?php 
                                                                                $childPax123--; 

                                                                                $jjmb++;
                                                                            
                                                                            } 
                                                                        }
                                                                ?>
                                                                <?php           }  
                                                                } 
                                                            } 
                                                            ?>

                                                            <?php 
                                                        
                                                        } 
                                                    
                                                    ?>  

                                                    <!-------------------------------------------------- Fifth Way -------------------------------------------------------->

                                                    <?php 
                                                    
                                                        if(!empty($tripInfoResultfifth)){ 
                                                                                                
                                                            $adultPax125 = $this->session->userdata('adult_user');
                                                            $childPax125 = $this->session->userdata('child_user'); 
                                                            
                                                            /////////////////////////////////////////////// Start Non Connecting Flights /////////////////////////////////////////////

                                                            if(empty($tripInfoResultfifth['sI'][0]['cT'])){ 

                                                                if(!empty($tripInfoResultfifth['sI'][0]['ssrInfo'])){ 
                                                                
                                                                    ?>                                                       
                                                                <p class="p-20"><b><span><?php echo $tripInfoResultfifth['sI'][0]['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $tripInfoResultfifth['sI'][0]['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($tripInfoResultfifth['sI'][0]['dt'])); ?></span></p>

                                                                <!------------------------------------- ADULT PAX --------------------------------------------->

                                                                <?php 
                                                                
                                                                    if(count($adultPax125) > 0) {
                                                        
                                                                        $im5b=1;                             
                                                                        while($adultPax125 > 0) {

                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-2 form-group padding_5px " >
                                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $im5b; ?></span>
                                                                                    <input type="hidden" name="fifthdepartureCity[]" value="<?php echo $tripInfoResultfifth['sI'][0]['da']['code'] ?>">
                                                                                    <input type="hidden" name="fiftharrivalCity[]" value="<?php echo $tripInfoResultfifth['sI'][0]['aa']['code'] ?>">
                                                                                </div>
                                                                                <?php if(!empty($tripInfoResultfifth['sI'][0]['ssrInfo']['BAGGAGE'])){  ?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_fifth[]" id="baggage_fifth<?php echo $im5b; ?>" onchange="getBaggage('<?php echo $im5b; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($tripInfoResultfifth['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevaluefifth) { ?> 

                                                                                                <option value="<?php echo $baggagevaluefifth['code']; ?>~<?php echo $baggagevaluefifth['amount']; ?>~<?php echo $baggagevaluefifth['desc']; ?>"><?php echo $baggagevaluefifth['desc']; ?> <?php if(!empty($baggagevaluefifth['amount'])){ ?>   @ <?php echo $baggagevaluefifth['amount'];} ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>							
                                                                                    
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>
                                                                                <?php if(!empty($tripInfoResultfifth['sI'][0]['ssrInfo']['MEAL'])){  ?>          
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_fifth[]" id="meal_adult_fifth<?php echo $im5b; ?>" onchange="getBaggage('<?php echo $im5b; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($tripInfoResultfifth['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueFifth) { ?> 
                                                                                            <option value="<?php echo $mealvalueFifth['code']; ?>~<?php echo @$mealvalueFifth['amount']; ?>~<?php echo $mealvalueFifth['desc']; ?>"><?php echo $mealvalueFifth['desc']; ?> <?php if(!empty($mealvalueFifth['amount'])){ ?> @ <?php echo @$mealvalueFifth['amount'];  } ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>	
                                                                            </div> 
                                                    
                                                                            <?php 

                                                                            $adultPax125--;                                                                   
                                                                            $im5b++;
                                                                        }
                                                                    } 
                                                                ?>

                                                                <!------------------------------------- CHILD PAX --------------------------------------------->

                                                                <?php 
                                                                    
                                                                    if(count($childPax125) > 0) {
                                                        
                                                                        $jm5b=1; 
                                                        
                                                                        while($childPax125 > 0) {  
                                                                            
                                                                        ?>

                                                                            <div class="row">
                                                                                <div class="col-md-2 form-group padding_5px " >
                                                                                    <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jm5b; ?></span>
                                                                                    <input type="hidden" name="fifthdepartureCity[]" value="<?php echo $tripInfoResultfifth['sI'][0]['da']['code'] ?>">
                                                                                    <input type="hidden" name="fiftharrivalCity[]" value="<?php echo $tripInfoResultfifth['sI'][0]['aa']['code'] ?>">
                                                                                </div>
                                                                                <?php if(!empty($tripInfoResultfifth['sI'][0]['ssrInfo']['BAGGAGE'])){  ?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_fifth[]" id="baggage_child_fifth<?php echo $jm5b; ?>" onchange="getBaggage('<?php echo $jm5b; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($tripInfoResultfifth['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevaluefifth) { ?> 

                                                                                                <option value="<?php echo $baggagevaluefifth['code']; ?>~<?php echo $baggagevaluefifth['amount']; ?>~<?php echo $baggagevaluefifth['desc']; ?>"><?php echo $baggagevaluefifth['desc']; ?> @ <?php echo $baggagevaluefifth['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>					
                                                                                    
                                                                                    <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                    <?php echo form_error('first_middle_name'); ?> </span>
                                                                                <?php if(!empty($tripInfoResultfifth['sI'][0]['ssrInfo']['MEAL'])){  ?>
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_fifth[]" id="meal_child_fifth<?php echo $jm5b; ?>" onchange="getBaggage('<?php echo $jm5b; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($tripInfoResultfifth['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueFifth) { ?> 
                                                                                            <option value="<?php echo $mealvalueFifth['code']; ?>~<?php echo $mealvalueFifth['amount']; ?>~<?php echo $mealvalueFifth['desc']; ?>"><?php echo $mealvalueFifth['desc']; ?> @ <?php echo $mealvalueFifth['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>
                                                                                    </div>
                                                                                <?php }else{ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                    <?php   echo "MEAL Info not applicable for this Itinerary!"; ?> 
                                                                                </div> 
                                                                                <?php  } ?>	
                                                                            </div>  
                                                    
                                                                        <?php 

                                                                            $childPax125--; 
                                                                            $jm5b++;

                                                                        } 
                                                                    }
                                                                }else{

                                                                    echo "Baggage & Meals Info not applicable for this Itinerary!";

                                                                } 
                                                            }

                                                            /////////////////////////////////////////////// Start Connecting Flights /////////////////////////////////////////////

                                                            else{ 
                                                        
                                                        
                                                                foreach ($tripInfoResultComplete as $key => $tripReviwvalue){                                                            
                                                        
                                                                    foreach($tripReviwvalue['sI'] as $key1 => $segValue){ 

                                                                        $adultPax123 = $this->session->userdata('adult_user');
                                                                        $childPax123 = $this->session->userdata('child_user');
                                                                ?> 
                                                        
                                                    
                                                                        <p class="p-20"><b><span><?php echo $segValue['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $segValue['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($segValue['dt'])); ?></span></p>

                                                        

                                                                <?php               if(count($adultPax123) > 0) {
                                                            
                                                                            $iimb=1;

                                                                            while($adultPax123 > 0) { 
                                                                ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $iib; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($SSRInfoBaggage)){?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage[]" id="baggage<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div>
                                                                                    <?php  } ?>							
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                                
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal[]" id="meal_adult<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>
                                                                                </div> 

                                                                <?php 
                                                                                $adultPax123--;                                                                   
                                                                                $iimb++;
                                                                            }
                                                                        } 
                                                                ?>

                                                                <?php               if(count($childPax123) > 0) {
                                                            
                                                                            $jjmb=1; 
                                                            
                                                                            while($childPax123 > 0) {  
                                                                                
                                                                ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jb; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                            <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_return[]" id="baggage_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>				
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>

                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_return[]" id="meal_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo $mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo $mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>
                                                                                    </div>
                                                                                </div>  

                                                                <?php 
                                                                                $childPax123--; 

                                                                                $jjmb++;
                                                                            
                                                                            } 
                                                                        }
                                                                ?>
                                                                <?php           }  
                                                                } 
                                                            }

                                                            ?>

                                                            <?php 
                                                        
                                                        } 
                                                    
                                                    ?>  

                                                    <!-------------------------------------------------- Sixth Way --------------------------------------------------------->

                                                    <?php 
                                                    
                                                        if(!empty($tripInfoResultsixth)){ 
                                                                                                
                                                            $adultPax126 = $this->session->userdata('adult_user');
                                                            $childPax126 = $this->session->userdata('child_user'); 

                                                            //echo "<pre>"; print_r($tripInfoResultsixth); 

                                                            /////////////////////////////////////////////// Start Non Connecting Flights /////////////////////////////////////////////
                                                            if(empty($tripInfoResultsixth['sI'][0]['cT'])){ 

                                                                if(!empty($tripInfoResultsixth['sI'][0]['ssrInfo'])){ 
                                                                
                                                                    ?>                                                       
                                                                    <p class="p-20"><b><span><?php echo $tripInfoResultsixth['sI'][0]['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $tripInfoResultsixth['sI'][0]['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($tripInfoResultsixth['sI'][0]['dt'])); ?></span></p>

                                                                        <!------------------------------------- ADULT PAX --------------------------------------------->

                                                                    <?php 

                                                                        
                                                                        if(count($adultPax126) > 0) {
                                                            
                                                                            $im6b=1;                             
                                                                            while($adultPax126 > 0) { 
                                                                                ?>
                                                                                
                                                                                    <div class="row">
                                                                                        <div class="col-md-2 form-group padding_5px " >
                                                                                            <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $im6b; ?></span>
                                                                                            <input type="hidden" name="sixthdepartureCity[]" value="<?php echo $tripInfoResultsixth['sI'][0]['da']['code'] ?>">
                                                                                            <input type="hidden" name="sixtharrivalCity[]" value="<?php echo $tripInfoResultsixth['sI'][0]['aa']['code'] ?>">
                                                                                        </div>
                                                                                        <?php if(!empty($tripInfoResultsixth['sI'][0]['ssrInfo']['BAGGAGE'])){ ?>
                                                                                        <div class="col-md-5 form-group ">
                                                                                            <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                            <select name="baggage_sixth[]" id="baggage_sixth<?php echo $im6b; ?>" onchange="getBaggage('<?php echo $im6b; ?>');">
                                                                                                <option value="">Add Baggage</option>
                                                                                                <?php foreach ($tripInfoResultsixth['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueSixth) { ?> 

                                                                                                    <option value="<?php echo $baggagevalueSixth['code']; ?>~<?php echo @$baggagevalueSixth['amount']; ?>~<?php echo $baggagevalueSixth['desc']; ?>"><?php echo $baggagevalueSixth['desc']; ?> <?php if(!empty($baggagevalueSixth['amount'])){ ?>   @ <?php echo $baggagevalueSixth['amount'];} ?></option>
                                                                                                
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>	
                                                                                        <?php }else{ ?> 
                                                                                                <div class="col-md-5 form-group ">
                                                                                            <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                        </div> 
                                                                                        <?php  } ?>							
                                                                                            
                                                                                            <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                            <?php echo form_error('first_middle_name'); ?> </span>
                                                                                        <?php if(!empty($tripInfoResultsixth['sI'][0]['ssrInfo']['MEAL'])){ ?>          
                                                                                        <div class="col-md-5 form-group padding_5px " >

                                                                                            <select name="meal_sixth[]" id="meal_adult_sixth<?php echo $im6b; ?>" onchange="getBaggage('<?php echo $im6b; ?>');">
                                                                                                <option value="">Add Meal</option>
                                                                                                <?php foreach ($tripInfoResultsixth['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueSixth) { ?> 
                                                                                                <option value="<?php echo $mealvalueSixth['code']; ?>~<?php echo @$mealvalueSixth['amount']; ?>~<?php echo $mealvalueSixth['desc']; ?>"><?php echo $mealvalueSixth['desc']; ?> <?php if(!empty($mealvalueSixth['amount'])){ ?> @ <?php echo @$mealvalueSixth['amount'];  } ?></option>
                                                                                                <?php } ?>                                                        
                                                                                            </select>   
                                                                                        </div>
                                                                                        <?php } else{  ?>
                                                                                            <div class="col-md-5 form-group ">
                                                                                                <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                            </div> 
                                                                                        <?php } ?>
                                                                                    </div> 
                                                        
                                                                                <?php 

                                                                                $adultPax126--;                                                                   
                                                                                $im6b++;
                                                                            }
                                                                        } 

                                                                    ?>

                                                                        <!------------------------------------- CHILD PAX --------------------------------------------->

                                                                    <?php 
                                                                        
                                                                        if(count($childPax126) > 0) {
                                                            
                                                                            $jm6b=1; 
                                                            
                                                                            while($childPax126 > 0) {  
                                                                                
                                                                                ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jm6b; ?></span>
                                                                                        <input type="hidden" name="sixthdepartureCity[]" value="<?php echo $tripInfoResultsixth['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="sixtharrivalCity[]" value="<?php echo $tripInfoResultsixth['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($tripInfoResultsixth['sI'][0]['ssrInfo']['BAGGAGE'])){ ?> 
                                                                                        <div class="col-md-5 form-group ">
                                                                                            <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                            <select name="baggage_sixth[]" id="baggage_child_sixth<?php echo $jm6b; ?>" onchange="getBaggage('<?php echo $jm6b; ?>');">
                                                                                                <option value="">Add Baggage</option>
                                                                                                <?php foreach ($tripInfoResultsixth['sI'][0]['ssrInfo']['BAGGAGE'] as $key => $baggagevalueSixth) { ?> 

                                                                                                    <option value="<?php echo $baggagevalueSixth['code']; ?>~<?php echo $baggagevalueSixth['amount']; ?>~<?php echo $baggagevalueSixth['desc']; ?>"><?php echo $baggagevalueSixth['desc']; ?> @ <?php echo $baggagevalueSixth['amount']; ?></option>
                                                                                                
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    <?php }else{ ?> 

                                                                                            <div class="col-md-5 form-group ">
                                                                                                <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                            </div> 

                                                                                    <?php } ?>

                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                    
                                                                                    <?php if(!empty($tripInfoResultsixth['sI'][0]['ssrInfo']['MEAL'])){ ?>

                                                                                        <div class="col-md-5 form-group padding_5px " >

                                                                                            <select name="meal_sixth[]" id="meal_child_sixth<?php echo $jm6b; ?>" onchange="getBaggage('<?php echo $jm6b; ?>');">
                                                                                                <option value="">Add Meal</option>
                                                                                                <?php foreach ($tripInfoResultsixth['sI'][0]['ssrInfo']['MEAL'] as $key => $mealvalueSixth) { ?> 
                                                                                                <option value="<?php echo $mealvalueSixth['code']; ?>~<?php echo $mealvalueSixth['amount']; ?>~<?php echo $mealvalueSixth['desc']; ?>"><?php echo $mealvalueSixth['desc']; ?> @ <?php echo $mealvalueSixth['amount']; ?></option>
                                                                                                <?php } ?>                                                        
                                                                                            </select>
                                                                                        </div>
                                                                                    <?php }else{ ?> 

                                                                                        <div class="col-md-5 form-group ">
                                                                                            <?php   echo "Meal Info not applicable for this Itinerary!"; ?> 
                                                                                        </div> 

                                                                                    <?php } ?>
                                                                                </div>  
                                                        
                                                                                <?php 

                                                                                $childPax126--; 
                                                                                $jm6b++;

                                                                            } 
                                                                        }
                                                                }else{

                                                                    echo "Baggage & Meals Info not applicable for this itineary!";

                                                                } 
                                                            }
                                                            /////////////////////////////////////////////// Start Connecting Flights /////////////////////////////////////////////

                                                            else{            
                                                        
                                                                foreach ($tripInfoResultComplete as $key => $tripReviwvalue){                                                            
                                                        
                                                                    foreach($tripReviwvalue['sI'] as $key1 => $segValue){ 

                                                                        $adultPax123 = $this->session->userdata('adult_user');
                                                                        $childPax123 = $this->session->userdata('child_user');
                                                                        ?> 
                                                        
                                                    
                                                                        <p class="p-20"><b><span><?php echo $segValue['da']['city'] ?></span><span class="ars-arright">→</span> <span><?php echo $segValue['aa']['city'] ?></span></b><span class="graycolor "> on <?php echo $arrivalDate = date("M d, Y",strtotime($segValue['dt'])); ?></span></p>

                                                        

                                                                        <?php               if(count($adultPax123) > 0) {
                                                            
                                                                            $iimb=1;

                                                                            while($adultPax123 > 0) { 
                                                                        ?>
                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Adult <?php  echo $iib; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                        <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <?php if(!empty($SSRInfoBaggage)){?>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage[]" id="baggage<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>	
                                                                                    <?php }else{ ?> 
                                                                                            <div class="col-md-5 form-group ">
                                                                                    <?php   echo "Baggage Info not applicable for this Itinerary!"; ?> 
                                                                                    </div>
                                                                                    <?php  } ?>							
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>
                                                                                                
                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal[]" id="meal_adult<?php echo $iib; ?>" onchange="getBaggage('<?php echo $iib; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo @$mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo @$mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>   
                                                                                    </div>
                                                                                </div> 

                                                                        <?php 
                                                                                $adultPax123--;                                                                   
                                                                                $iimb++;
                                                                            }
                                                                        } 
                                                                        ?>

                                                                        <?php               if(count($childPax123) > 0) {
                                                            
                                                                            $jjmb=1; 
                                                            
                                                                            while($childPax123 > 0) {  
                                                                                
                                                                        ?>

                                                                                <div class="row">
                                                                                    <div class="col-md-2 form-group padding_5px " >
                                                                                        <span style="text-align:left; color:rgb(119, 119, 119);font-size:15px;";>Child <?php echo $jb; ?></span>
                                                                                        <input type="hidden" name="returndepartureCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['da']['code'] ?>">
                                                                                            <input type="hidden" name="returnarrivalCity[]" value="<?php echo $tripInfoResultReturn['sI'][0]['aa']['code'] ?>">
                                                                                    </div>
                                                                                    <div class="col-md-5 form-group ">
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('baggage'); ?></span>
                                                                                        <select name="baggage_return[]" id="baggage_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Baggage</option>
                                                                                            <?php foreach ($SSRInfoBaggage as $key => $baggagevalue) { ?> 

                                                                                                <option value="<?php echo $baggagevalue['code']; ?>~<?php echo $baggagevalue['amount']; ?>~<?php echo $baggagevalue['desc']; ?>"><?php echo $baggagevalue['desc']; ?> @ <?php echo $baggagevalue['amount']; ?></option>
                                                                                            
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>				
                                                                                        
                                                                                        <span style="text-align:left; color:#FF0000;font-size:12px;";>
                                                                                        <?php echo form_error('first_middle_name'); ?> </span>

                                                                                    <div class="col-md-5 form-group padding_5px " >

                                                                                        <select name="meal_return[]" id="meal_child_return<?php echo $jjb; ?>" onchange="getBaggage('<?php echo $jjb; ?>');">
                                                                                            <option value="">Add Meal</option>
                                                                                            <?php foreach ($SSRInfoMeal as $key => $mealvalue) { ?> 
                                                                                            <option value="<?php echo $mealvalue['code']; ?>~<?php echo $mealvalue['amount']; ?>~<?php echo $mealvalue['desc']; ?>"><?php echo $mealvalue['desc']; ?> @ <?php echo $mealvalue['amount']; ?></option>
                                                                                            <?php } ?>                                                        
                                                                                        </select>
                                                                                    </div>
                                                                                </div>  

                                                                        <?php 
                                                                                $childPax123--; 

                                                                                $jjmb++;
                                                                            
                                                                            } 
                                                                        }
                                                                        ?>
                                                                        <?php           
                                                                    }  
                                                                } 
                                                            }

                                                            ?>

                                                            <?php 
                                                        
                                                        } 
                                                    
                                                    ?>  

                                                    <!-------------------------- Multicity ----------------------------------------------->
                                                            
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
                                                    <?php foreach ($tripInfoResult['sI'] as $key => $tripValue) { ?>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p class="p-20"><b><span><?php echo $tripValue['da']['city']; ?></span><span class="ars-arright">→</span> <span><?php echo $tripValue['aa']['city']; ?></span></b><span class="graycolor "> on <?php echo $date =  date('M d, Y',strtotime($tripValue['dt'])); ?></span></p>
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
                                                                    <button type="button" class="popUpBtn btn btn-warning asr-book" data-segmentid="378" data-modal="myModal1"> Show Seat Map </button>
                                                                <?php }else{

                                                                    echo "Seat Selection Not Applicable for this Itinerary";
                                                                } ?>
                                                                
                                                                <div id="myModal1" class="modal">
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
                                                                                        <img class="airline-logo search-logoallflight" src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResult['sI'][0]['fD']['aI']['code']; ?>.png">

                                                                                        <h5 class="search-flightsname"> <?php echo $tripInfoResult['sI'][0]['fD']['aI']['name']; ?> <span class="search-flightscode"><?php echo $tripInfoResult['sI'][0]['fD']['aI']['code']; ?>-<?php echo $tripInfoResult['sI'][0]['fD']['fN']; ?></span></h5>
                                                                                    </span>
                                                                                </li>
                                                                                <li class="seat-map__select-container__item">
                                                                                    <h5 class="search-flightsname"><?php echo $tripInfoResult['sI'][0]['da']['cityCode'] ?>-<?php echo $tripInfoResult['sI'][0]['aa']['cityCode'] ?></h5>
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

                                                                                        <li class="seat-map__seat-data adultseatselection<?php echo $ias; ?>" onclick="seatPassenger(this)">
                                                                                            <div class="seat-map__select-box__item seat-map--passenger paxname-ellipsis"> <span>ADULT-<?php echo $ias; ?></span></div>
                                                                                            <div class="seat-map__select-box__item seat-map--seatNo" id="seatadultno<?php echo $ias; ?>">NA</div>
                                                                                            <div class="seat-map__select-box__item seat-map--fee" id="seatadultamount<?php echo $ias; ?>"> <i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> 0.00 </div>
                                                                                        </li>
                                                                                        
                                                                                    <?php $adultPax--;  $ias++; } ?>
                                                                                
                                                                                
                                                                                <?php } ?>

                                                                                <?php if(count($childPax) > 0) {
                                                                                    $ics=1;
                                                                                    while($childPax > 0) { ?>
                                                                                    <li class="seat-map__seat-data childseatselection<?php echo $ics; ?>" onclick="seatPassengers(this)"><div class="seat-map__select-box__item seat-map--passenger paxname-ellipsis"> <span>CHILD-<?php echo $ics; ?></span> </div>
                                                                                    <div class="seat-map__select-box__item seat-map--seatNo sseatchildno<?php echo $ics; ?>" id="seatchildno<?php echo $ics; ?>" > NA </div>
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
                                                                                    //echo "<pre>"; print_r($amountSeatClass);
                                                                                    // echo "bhanu"; 
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
                                                                                                
                                                                                                <li class="seat " id="seatValue" onclick="getSeatSelect('<?php echo $seatValue1['seatNo']; ?>','<?php echo $seatValue1['amount']; ?>','A');"  >

                                                                                                <!-- seat-map__box--selected  -->
                                                                                                <input id="<?php echo $seatValue1['seatNo']; ?>" type="checkbox"  >
                                                                                                <label for="<?php echo $seatValue1['seatNo']; ?>" datas="flagnot" class="<?php echo $amountSeatClass[$seatValue1['amount']]; ?> <?php echo $seatValue1['seatNo']; ?>  B<?php echo $seatValue1['seatNo']; ?>"><?php echo $seatValue1['seatNo']; ?></label>
                                                                                                
                                                                                                
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

                                                    <?php } ?>
                                                
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

                        <!-------------------------------------------------- FARE SUMMARY ------------------------------------------------------------------->
                        <div class="col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">

                                <?php 

                                    error_reporting(0);

                                    $adultPax21 = $this->session->userdata('adult_user');
                                    $childPax21 = $this->session->userdata('child_user');
                                    $infantPax21 = $this->session->userdata('infant_user');
                                    

                                    $adultCount = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultPax21;
                                    @$childCount = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childPax21; 
                                    @$infantCount = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantPax21; 
                                    $adultReCount = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultPax21;
                                    @$childReCount = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childPax21 ; 
                                    @$infantReCount = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantPax21; 
                                    
                                    // Start Multiway

                                    @$adultMultithirdCount = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultPax21;
                                    @$childMultithirdCount = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childPax21 ; 
                                    @$infantMultithirdCount = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantPax21;

                                    @$adultMultiforthCount = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultPax21;
                                    @$childMultiforthCount = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childPax21 ; 
                                    @$infantMultiforthCount = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantPax21;

                                    @$adultMultififthCount = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultPax21;
                                    @$childMultififthCount = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childPax21 ; 
                                    @$infantMultififthCount = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantPax21;

                                    @$adultMultisixthCount = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultPax21;
                                    @$childMultisixthCount = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childPax21 ; 
                                    @$infantMultisixthCount = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantPax21;                           
                                
                                                                
                                    // End Multiway

                                    $grossTotal = $adultCount + $adultReCount + $adultMultithirdCount + $adultMultiforthCount + $adultMultififthCount + $adultMultisixthCount +  $childCount + $childReCount + $childMultithirdCount + $childMultiforthCount + $childMultififthCount + $childMultisixthCount + $infantCount + $infantReCount + $infantMultithirdCount + $infantMultiforthCount + $infantMultififthCount + $infantMultisixthCount;                          
                                    

                                    $adultBf = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['BF'] * $adultPax21 ;
                                    @$childBf = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['BF'] * $childPax21 ; 
                                    @$infantBf = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['BF'] * $infantPax21; 

                                    $adulRetBf = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['fC']['BF'] * $adultPax21;
                                    @$childReBf = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['fC']['BF'] * $childPax21; 
                                    @$infantReBf = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['fC']['BF'] * $infantPax21; 
                                    
                                    // Start Multiway
                                    @$adulMultithirdBf = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['fC']['BF'] * $adultPax21;
                                    @$childMultithirdBf = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['fC']['BF'] * $childPax21; 
                                    @$infantMultithirdBf = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['fC']['BF'] * $infantPax21;
                                                                    
                                    @$adulMultiforthBf = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['fC']['BF'] * $adultPax21;
                                    @$childMultiforthBf = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['fC']['BF'] * $childPax21; 
                                    @$infantMultiforthBf = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['fC']['BF'] * $infantPax21;
                                    
                                    @$adulMultififthBf = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['fC']['BF'] * $adultPax21;
                                    @$childMultififthBf = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['fC']['BF'] * $childPax21; 
                                    @$infantMultififthBf = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['fC']['BF'] * $infantPax21;

                                    @$adulMultisixthBf = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['fC']['BF'] * $adultPax21;
                                    @$childMultisixthBf = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['fC']['BF'] * $childPax21; 
                                    @$infantMultisixthBf = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['fC']['BF'] * $infantPax21;   
                                    
                                    // End Multiway

                                    $adultTotalBaseFare = $adultBf + $adulRetBf + $adulMultithirdBf + $adulMultiforthBf + $adulMultififthBf + $adulMultisixthBf;
                                    $childTotalBaseFare = $childBf + $childReBf + $childMultithirdBf + $childMultiforthBf + $childMultififthBf + $childMultisixthBf;
                                    $infantTotalBaseFare = $infantBf + $infantReBf + $infantMultithirdBf + $infantMultiforthBf + $infantMultififthBf + $infantMultisixthBf;

                                    $baseFareTotal = $adultBf + $childBf + $infantBf;
                                    $baseFareReTotal = $adultBf + $adulRetBf + $adulMultithirdBf  + $adulMultiforthBf + $adulMultififthBf + $adulMultisixthBf + $childBf + $childReBf + $childMultithirdBf + $childMultiforthBf + $childMultififthBf + $childMultisixthBf + $infantBf + $infantReBf + $infantMultithirdBf + $infantMultiforthBf + $infantMultififthBf + $infantMultisixthBf;                                

                                        
                                    $adultTAF = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'] * $adultPax21;
                                    @$childTAF = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'] * $childPax21; 
                                    @$infantTAF = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'] * $infantPax21;

                                    $adultReTAF = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'] * $adultPax21;
                                    @$childReTAF = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'] * $childPax21; 
                                    @$infantReTAF = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'] * $infantPax21;
                                    
                                    // Start Multiway

                                    @$adultMultithirdTAF = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'] * $adultPax21;
                                    @$childMultithirdTAF = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'] * $childPax21; 
                                    @$infantMultithirdTAF = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'] * $infantPax21;
                                    
                                    @$adultMultiforthTAF = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'] * $adultPax21;
                                    @$childMultiforthTAF = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'] * $childPax21; 
                                    @$infantMultiforthTAF = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'] * $infantPax21;
                                    
                                    @$adultMultififthTAF = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'] * $adultPax21;
                                    @$childMultififthTAF = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'] * $childPax21; 
                                    @$infantMultififthTAF = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'] * $infantPax21;

                                    @$adultMultisixthTAF = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['fC']['TAF'] * $adultPax21;
                                    @$childMultisixthTAF = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['fC']['TAF'] * $childPax21; 
                                    @$infantMultisixthTAF = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['fC']['TAF'] * $infantPax21;
                                    
                                    // End Multiway
                                    

                                    $totalTaxFare = $adultTAF + $adultReTAF + $adultMultithirdTAF + $adultMultiforthTAF + $adultMultififthTAF + $adultMultisixthTAF + $childTAF + $childReTAF + $childMultithirdTAF + $childMultiforthTAF + $childMultififthTAF + $childMultisixthTAF + $infantTAF + $infantReTAF + $infantMultithirdTAF + $infantMultiforthTAF + $infantMultififthTAF + $infantMultisixthTAF;
                                    
                                    
                                    $adultAGST = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adultPax21;
                                    @$childAGST = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST'] * $childPax21; 
                                    @$infantAGST = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infantPax21;

                                    $adultReAGST = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adultPax21;
                                    @$childReAGST = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST'] * $childPax21; 
                                    @$infantReAGST = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infantPax21;
                                    
                                    // Start Multiway
                                    @$adultMultithirdAGST = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adultPax21;
                                    @$childMultithirdAGST = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST'] * $childPax21; 
                                    @$infantMultithirdAGST = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infantPax21;
                                    
                                    @$adultMultiforthAGST = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adultPax21;
                                    @$childMultiforthAGST = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST'] * $childPax21; 
                                    @$infantMultiforthAGST = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infantPax21;
                                    
                                    @$adultMultififthAGST = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adultPax21;
                                    @$childMultififthAGST = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST'] * $childPax21; 
                                    @$infantMultififthAGST = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infantPax21;

                                    @$adultMultisixthAGST = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['AGST'] * $adultPax21;
                                    @$childMultisixthAGST = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['AGST'] * $childPax21; 
                                    @$infantMultisixthAGST = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['AGST'] * $infantPax21;

                                    // End Multiway

                                    $totalAGST = $adultAGST + $childAGST + $infantAGST + $adultReAGST + $childReAGST + $infantReAGST + $adultMultithirdAGST  + $childMultithirdAGST  + $infantMultithirdAGST + $adultMultiforthAGST +  $childMultiforthAGST + $infantMultiforthAGST + $adultMultififthAGST + $childMultififthAGST +  $infantMultififthAGST + $adultMultisixthAGST + $childMultisixthAGST + $infantMultisixthAGST;
                                    

                                    $adultMFT = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adultPax21;
                                    @$childMFT = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT'] * $childPax21;
                                    @$infantMFT = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infantPax21;

                                    $adultReMFT = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adultPax21;
                                    @$childReMFT = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT'] * $childPax21;
                                    @$infantReMFT = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infantPax21;
                                    
                                    // Start Multiway
                                    @$adultMultithirdMFT = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adultPax21;
                                    @$childMultithirdMFT = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT'] * $childPax21;
                                    @$infantMultithirdMFT = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infantPax21;
                                    
                                    @$adultMultiforthMFT = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adultPax21;
                                    @$childMultiforthMFT = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT'] * $childPax21;
                                    @$infantMultiforthMFT = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infantPax21;
                                    
                                    @$adultMultififthMFT = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adultPax21;
                                    @$childMultififthMFT = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT'] * $childPax21;
                                    @$infantMultififthMFT = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infantPax21;

                                    @$adultMultisixthMFT = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MFT'] * $adultPax21;
                                    @$childMultisixthMFT = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MFT'] * $childPax21;
                                    @$infantMultisixthMFT = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MFT'] * $infantPax21;
                                    // End Multiway

                                    $totalMFT = $adultMFT + $childMFT + $infantMFT + $adultReMFT + $childReMFT + $infantReMFT + $adultMultithirdMFT  +  $childMultithirdMFT  +  $infantMultithirdMFT + $adultMultiforthMFT  +  $childMultiforthMFT  +  $infantMultiforthMFT + $adultMultififthMFT  +  $childMultififthMFT  +  $infantMultififthMFT + $adultMultisixthMFT + $childMultisixthMFT + $infantMultisixthMFT;

                                    $adultMF = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'] * $adultPax21;
                                    @$childMF = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF'] * $childPax21;
                                    @$infantMF = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF']  * $infantPax21;

                                    $adultReMF = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'] * $adultPax21;
                                    @$childReMF = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF'] * $childPax21;
                                    @$infantReMF = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'] * $infantPax21;

                                    // Start Multiway
                                    @$adultMultithirdMF = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'] * $adultPax21;
                                    @$childMultithirdMF = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF'] * $childPax21;
                                    @$infantMultithirdMF = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'] * $infantPax21;
                                    
                                    @$adultMultiforthMF = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'] * $adultPax21;
                                    @$childMultiforthMF = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF'] * $childPax21;
                                    @$infantMultiforthMF = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'] * $infantPax21;
                                    
                                    @$adultMultififthMF = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'] * $adultPax21;
                                    @$childMultififthMF = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF'] * $childPax21;
                                    @$infantMultififthMF = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'] * $infantPax21;

                                    @$adultMultisixthMF = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['MF'] * $adultPax21;
                                    @$childMultisixthMF = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['MF'] * $childPax21;
                                    @$infantMultisixthMF = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['MF'] * $infantPax21;
                                    // End Multiway


                                    $totalMF = $adultMF + $childMF + $infantMF + $adultReMF + $childReMF + $infantReMF + $adultMultithirdMF  + $childMultithirdMF  + $infantMultithirdMF + $adultMultiforthMF  + $childMultiforthMF  + $infantMultiforthMF  + $adultMultififthMF  + $childMultififthMF + $infantMultififthMF + $adultMultisixthMF + $childMultisixthMF + $infantMultisixthMF;

                                    $adultOT = $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childOT = $tripInfoResult['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantOT = $tripInfoResult['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;

                                    $adultReOT = $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childReOT = $tripInfoResultReturn['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantReOT = $tripInfoResultReturn['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;
                                    
                                    // Start Multiway
                                    @$adultMultithirdOT = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultithirdOT = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultithirdOT = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;
                                    
                                    @$adultMultiforthOT = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultiforthOT = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultiforthOT = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;
                                    
                                    @$adultMultififthOT = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultififthOT = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultififthOT = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;

                                    @$adultMultisixthOT = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultisixthOT = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultisixthOT = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;
                                    // End Multiway
                                    
                                    $totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT + $adultMultithirdOT + $childMultithirdOT + $infantMultithirdOT + $adultMultiforthOT + $childMultiforthOT + $infantMultiforthOT + $adultMultififthOT + $childMultififthOT + $infantMultififthOT + $adultMultisixthOT + $childMultisixthOT + $infantMultisixthOT;

                                    // Start Multiway
                                    @$adultMultithirdOT = $tripInfoResultthird['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultithirdOT = $tripInfoResultthird['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultithirdOT = $tripInfoResultthird['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;
                                    
                                    @$adultMultiforthOT = $tripInfoResultforth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultiforthOT = $tripInfoResultforth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultiforthOT = $tripInfoResultforth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;
                                    
                                    @$adultMultififthOT = $tripInfoResultfifth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultififthOT = $tripInfoResultfifth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultififthOT = $tripInfoResultfifth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;

                                    @$adultMultisixthOT = $tripInfoResultsixth['totalPriceList'][0]['fd']['ADULT']['afC']['TAF']['OT'] * $adultPax21;;
                                    @$childMultisixthOT = $tripInfoResultsixth['totalPriceList'][0]['fd']['CHILD']['afC']['TAF']['OT'] * $childPax21;
                                    @$infantMultisixthOT = $tripInfoResultsixth['totalPriceList'][0]['fd']['INFANT']['afC']['TAF']['OT'] * $infantPax21;
                                    // End Multiway
                                    
                                    $totalOT = $adultOT + $childOT + $infantOT + $adultReOT + $childReOT + $infantReOT + $adultMultithirdOT + $childMultithirdOT + $infantMultithirdOT + $adultMultiforthOT + $childMultiforthOT + $infantMultiforthOT + $adultMultififthOT + $childMultififthOT + $infantMultififthOT + $adultMultisixthOT + $childMultisixthOT + $infantMultisixthOT;


                                ?>

                                <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"></span></h3></div>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Base Fare</label>
                                        <div class="col-md-4 pad-l-r">
                                            <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($baseFareReTotal,2); ?>
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Fee & Taxes</b></li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Adult Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php 
                                                                    echo $adultTotalBaseFare; 
                                                                    ?></li>
                                                                </ul>
                                                            </li>
                                                            <?php if($childTotalBaseFare > 0){ ?>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Child Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php
                                                                        echo $childTotalBaseFare; 
                                                                    ?></li>
                                                                </ul>
                                                            </li>
                                                            <?php } ?>
                                                            <?php if($infantTotalBaseFare > 0){ ?>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Infant Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php 
                                                                    echo $infantTotalBaseFare; 
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
                                            <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($totalTaxFare,2); ?>
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
                                            <span class="red total-amt mp" id="totAMount"><i class="fa fa-inr"></i> &nbsp;<?php echo number_format($grossTotal,2) ;?></span>
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
                //alert(id);
                var grossTotal = "<?php echo $grossTotal; ?>";

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

                //alert(totalBaggage);
              
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
        
			var newAmount;
			var newAmount_child;
			var mmm;

            function getSeatSelect(seatNo,seatAmount,paxType,autoId){

            //    console.log(paxType);

                var seatValue = $("#seatValue").val();
	
			 // var seatValue = $("#seatValue").val();
			//	alert(seatValue);
				
				$(function () {

					var kkkk = $(".seat-map__seat-data--selected").find(".seat-map--seatNo").text(); 
					

				
					
						if ($("#"+seatNo).is(":checked")) {

						alert(seatNo);
						alert("first");
						alert(kkkk);
						alert("second");

							if(seatNo == kkkk)
									{


							$("#"+seatNo).attr('disabled')

							}  else  { 
	
							

							 $(".B"+seatNo).css('background-color', '#bada55');
								
								$(".B"+seatNo).attr( 'datas','flagyes');

							}


						}
						else {
													
							 // $("."+seatNo).css("color", "white");
							  $(".B"+seatNo).css('background-color', '#bada55');
							  $(".B"+seatNo).attr( 'datas','flagyes');
							 
						
					}


											
					});
				

                var seatNo = seatNo;
                var seatAmount = seatAmount;
				var paxType= paxType;
				
			//	alert(seatNo);
			//	alert(seatAmount);
			//	alert(paxType);

                var grossTotal = "<?php echo $grossTotal; ?>";
			//	alert(grossTotal);
				
			//	alert(paxTypecheck);
	$(function () {
									
                if(paxTypecheck=='child'){
                    																		
						 mmm = $("#seatchildno"+autoIdcheck).text();				 
						//	alert(mmm);	
							
					
						if ($("#"+seatNo).is(":checked")) {
							
								 childSeatAmount = seatAmount;
								 
							$("#childSeatNo").val(seatNo);
							$("#seatchildno"+autoIdcheck).html(seatNo);
							$("#seatchildamount"+autoIdcheck).html('<i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> ' + seatAmount);
							$("#childseat"+autoIdcheck).html(seatNo);
							$("#adultchildseatselection").show();
														
						}
						
						else {
											
					
                 //   childSeatAmount = seatAmount;
			
			var seatNoS = "NA";
			var seatAmountS = "0.00";			
			
                    $("#childSeatNo").val(seatNoS);
                    $("#seatchildno"+autoIdcheck).html(seatNoS);
                    $("#seatchildamount"+autoIdcheck).html('<i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> ' + seatAmountS);
                    $("#childseat"+autoIdcheck).html(seatNoS);
                    $("#adultchildseatselection").show();
										 
						}
						
						var kkkknew = $(".seat-map__seat-data--selected").find(".seat-map--seatNo").text(); 
						
						if(mmm != "NA"){

							if(seatNo != kkkknew)
									{

alert("#"+seatNo);
							$("#"+seatNo).attr('disabled');

							}  else {

						//	alert("NOT NA");
							$(".B"+mmm).css({"background-color": ""});
									$(".B"+mmm).attr( 'datas','flagnot');
							}

						} 
					//	else {
					//	alert("YES NA");
					//	}

                }
								
				
                if(paxTypecheck=='adult'){
															
					 mmm = $("#seatadultno"+autoIdcheck).text();				 
						//	alert(mmm);	
							
					if ($("#"+seatNo).is(":checked")) {
						
                    adultSeatAmount = seatAmount;									
				
                    $("#adultSeatNo").val(seatNo);
                    $("#seatadultno"+autoIdcheck).html(seatNo);
                    $("#seatadultamount"+autoIdcheck).html('<i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> ' + seatAmount); 
                    $("#adultseat"+autoIdcheck).html(seatNo);
                    $("#adultchildseatselection").show();
					
					} else {
						
					var seatNoS = "NA";
					var seatAmountS = "0.00";	
						
					 $("#adultSeatNo").val(seatNoS);
                    $("#seatadultno"+autoIdcheck).html(seatNoS);
                    $("#seatadultamount"+autoIdcheck).html('<i class="fa fa-inr" style="margin-top:8px; margin-right:2px;"></i> ' + seatAmountS); 
                    $("#adultseat"+autoIdcheck).html(seatNoS);
                    $("#adultchildseatselection").show();	
												
					}
						
                    if(mmm != "NA"){
						//	alert("NOT NA");
							$(".B"+mmm).css({"background-color": ""});
							$(".B"+mmm).attr( 'datas','flagnot');
						} 
					// 	else {							 
					//	alert("YES NA");
					//	}
                    
					
                }
								
				
		});
				
				

                var adultPaxSeat = '<?php echo $_SESSION['adult_user']; ?>';
                var childPaxSeat = '<?php echo $_SESSION['child_user']; ?>';
                
                 //alert(adultPaxSeat);
                // alert(childSeatAmount);

                var totalSeatsAmount = 0;
				



                if(adultSeatAmount=='' || adultSeatAmount==null || adultSeatAmount==undefined){

                    totalSeatsAmount = totalSeatsAmount;

                }else{
					
					
					var ii;
					var adultCount = "<?php echo $_SESSION['adult_user']; ?>";
					var newAmount = 0;
				//	alert(adultCount);
					
					for(ii=1;ii<= parseInt(adultCount);ii++)
						{
							newAmount = parseInt(newAmount) + parseInt($("#seatadultamount"+ii).text()); 
						}
				//	alert(newAmount);
					
					

                    totalSeatsAmount = totalSeatsAmount + parseInt(newAmount);

                }
				               
                
                if(childSeatAmount=='' || childSeatAmount==null || childSeatAmount==undefined){

                    totalSeatsAmount = totalSeatsAmount;

                }else{
					
					var kk;
					var childCount = "<?php echo $_SESSION['child_user']; ?>";
					var newAmount_child = 0;
				//	alert(childCount);
					
					for(kk=1;kk<= parseInt(childCount);kk++)
						{
							newAmount_child = parseInt(newAmount_child) + parseInt($("#seatchildamount"+kk).text()); 
						}
				//	alert(newAmount_child);
					

                    totalSeatsAmount = totalSeatsAmount + parseInt(newAmount_child);

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
			
// default adult selected

$(document).ready(function () {
	
	
	var	paxtypes=$(".adultseatselection1").find('span').text();
			var str_lowercase =paxtypes.toLowerCase();
		//   alert(str_lowercase);
		   
			var paxType= str_lowercase.substr(0, str_lowercase.indexOf('-')); 								
		//	alert(paxType);
			
			var autoId = str_lowercase.substring(str_lowercase.indexOf('-') + 1);					
         //   alert(autoId); 
			
			   paxTypecheck = paxType;
                autoIdcheck = autoId;
	
		$(".adultseatselection1").addClass("seat-map__seat-data--selected");

});


            function seatPassenger(en){
          
				
			var	paxtypes=$(en).find('span').text();
			var str_lowercase =paxtypes.toLowerCase();
		//   alert(str_lowercase);
		   
			var paxType= str_lowercase.substr(0, str_lowercase.indexOf('-')); 								// get adult
		//	alert(paxType);
			
			var autoId = str_lowercase.substring(str_lowercase.indexOf('-') + 1);							// get id
         //   alert(autoId); 
			
			   paxTypecheck = paxType;
                autoIdcheck = autoId;
		   
		   
				
			//	alert("hello");
						$("ul li").removeClass("seat-map__seat-data--selected");
						$(en).closest('li').addClass("seat-map__seat-data--selected");
				
				
            /*     
                if(paxTypecheck == 'adult'){

                
                    $('.childseatselection'+autoId).removeClass('seat-map__seat-data--selected');
					
                    $('.adultseatselection'+autoId).addClass('seat-map__seat-data--selected');  
					
				//	$('.adultseatselection'+autoId).closest('li').removeClass('seat-map__seat-data--selected');					
                    



                }if(paxTypecheck == 'child'){

                    $('.adultseatselection'+autoId).removeClass('seat-map__seat-data--selected');
                    $('.childseatselection'+autoId).addClass('seat-map__seat-data--selected');

                }  
			*/

            }
			
			 function seatPassengers(en){
          
				
			var	paxtypes_child=$(en).find('span').text();
			var str_lowercase_child =paxtypes_child.toLowerCase();
		 //  alert(str_lowercase_child);
		   
			var paxType= str_lowercase_child.substr(0, str_lowercase_child.indexOf('-')); 								// get adult
		//	alert(paxType);
			
			var autoId = str_lowercase_child.substring(str_lowercase_child.indexOf('-') + 1);							// get id
         //   alert(autoId); 
			
			   paxTypecheck = paxType;
                autoIdcheck = autoId;
		   
					$("ul li").removeClass("seat-map__seat-data--selected");
					$(en).closest('li').addClass("seat-map__seat-data--selected");
				
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