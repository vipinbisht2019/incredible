<?php // echo "<pre>"; print_r($_SESSION); die;?>
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
            .art-spnlist {
                display: grid;
                text-align: right;
                /* right: 20px; */
                position: relative;
            } 
            .art-spnlist{ text-align: center; }     
            .art-allperson li:nth-child(4) {
                text-align: center;
            } 
            .art-tdsecond{width: 20%;} 
            .dscrpton-cntnt ul li span img{ width: 30px;border-radius: 5px;height: 30px;margin-right: 10px; }               
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
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 12px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php //echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php //echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                    </p> -->
                                                    <i class="fa fa-suitcase"></i>
                                                    <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  ,<b>Cabin:</b> <?php echo $tripInfoResult['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> 
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                        <?php if(!empty($tripInfoResult['sI'][0]['cT'])){ ?>

                                            <div style="text-align:center;margin-bottom:30px;">
                                                <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;">
                                                    Require to change Plane    Layover Time - <?php  

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

                                        <?php } ?>

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

                                        <?php } ?>
                                            
                                    </div>
                                    
                                    <!---------------------------------Return Flights------------------------------------->	
                                    
                                    <?php if(!empty($tripInfoResultReturn)){ ?>
                                    
                                        <div class="dscrpton-cntnt detail-box">
                                            <div class="dF pad10 justifyBetween alignItemsCenter">
                                                <div class="dF alignItemsCenter font18">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                                    <?php if(empty($tripInfoResultReturn['sI'][0]['cT'])){  ?> 
                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultReturn['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultReturn['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;
                                                                <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?>
                                                                </span>
                                                        </span>
                                                    <?php }else if(!empty($tripInfoResultReturn['sI'][0]['cT']) && empty($tripInfoResultReturn['sI'][1]['cT'])){   ?>

                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultReturn['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultReturn['sI'][1]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?>
                                                            </span>

                                                        </span>
                                                    <?php }else if(!empty($tripInfoResultReturn['sI'][1]['cT'])){  ?>
                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultReturn['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultReturn['sI'][2]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?>
                                                            </span>

                                                        </span>
                                                    <?php }  ?>
                                                </div>
                                            </div>						
                                            <ul class="brdrBot">
                                                <li>
                                                    <span class="dsply">
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['code']; ?>.png">
                                                        <div>
                                                            <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['name']; ?></p>
                                                            <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>                                                            
                                                            <p class="flight-detl"><?php echo $tripInfoResultReturn['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultReturn['sI'][0]['fD']['fN']; ?> <i class="fa fa-plane"></i>: <?php echo $tripInfoResultReturn['sI'][0]['fD']['eT']; ?></p>
                                                        </div>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][0]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['da']['country']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][0]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;font-weight: 600;"><?php echo @$tripInfoResultReturn['sI'][0]['da']['terminal']; ?></span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultReturn['sI'][0]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        $stop = $tripInfoResultReturn['sI'][0]['stops'];
                                                        if($stop == 0){

                                                            $st= 'Non-Stop';

                                                        }else{

                                                            $st= $stop. ' Stops';

                                                        }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][0]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][0]['aa']['country']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;;font-weight: 600;"><?php echo @$tripInfoResultReturn['sI'][0]['aa']['terminal']; ?></span></p>
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
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><b>Check-In:</b> <?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?> ,<b>Cabin:</b><?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div>
                                            <?php if(!empty($tripInfoResultReturn['sI'][0]['cT'])){ ?>

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;">
                                                        Require to change Plane    Layover Time - <?php  

                                                            $connectminutes = $tripInfoResultReturn['sI'][0]['cT'] ;
                                                            $connecthours = floor($connectminutes / 60);
                                                            $connectmin = $connectminutes - ($connecthours * 60); 
                                                            
                                                            echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>

                                                <ul class="brdrBot">
                                                    <li>
                                                        <span class="dsply">
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultReturn['sI'][1]['fD']['aI']['code']; ?>.png">
                                                            <div>
                                                            <p class="flight-detl" style="font-weight:600;"><?php echo $tripInfoResultReturn['sI'][1]['fD']['aI']['name']; ?></p>
                                                            <p class="flight-detl" style="font-weight:600;"><?php echo ucfirst($tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                            <p class="flight-detl"><?php echo $tripInfoResultReturn['sI'][1]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultReturn['sI'][1]['fD']['fN']; ?></p>
                                                            <p class="flight-detl" style="font-weight: 500;"><i class="fa fa-plane"></i>: <?php echo $tripInfoResultReturn['sI'][1]['fD']['eT']; ?></p>
                                                            </div>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][1]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][1]['da']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][1]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][1]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultReturn['sI'][1]['da']['terminal']; ?>)</span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResultReturn['sI'][1]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResultReturn['sI'][1]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][1]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][1]['aa']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][1]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][1]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultReturn['sI'][1]['aa']['terminal']; ?>)</span></p>
                                                    </li>
                                                </ul>
                                                            
                                                <span><?php if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div> 

                                            <?php } ?>

                                            <?php 
                                            
                                            if(!empty($tripInfoResultReturn['sI'][1]['cT'])){  ?> 

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                        $connectminutes = $tripInfoResultReturn['sI'][1]['cT'] ;
                                                        $connecthours = floor($connectminutes / 60);
                                                        $connectmin = $connectminutes - ($connecthours * 60); 
                                                        
                                                        echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>
                                                <ul class="brdrBot">
                                                    <li>
                                                        <span>
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultReturn['sI'][2]['fD']['aI']['code']; ?>.png">
                                                        <p class="flight-detl"><?php echo $tripInfoResultReturn['sI'][2]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl"><?php echo ucfirst($tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResultReturn['sI'][2]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultReturn['sI'][2]['fD']['fN']; ?></p>
                                                        <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultReturn['sI'][2]['fD']['eT']; ?>)</p>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][2]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][2]['da']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][2]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][2]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultReturn['sI'][2]['da']['terminal']; ?>)</span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResultReturn['sI'][2]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResultReturn['sI'][2]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultReturn['sI'][2]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultReturn['sI'][2]['aa']['city']; ?>, <?php echo $tripInfoResultReturn['sI'][2]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultReturn['sI'][2]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultReturn['sI'][2]['aa']['terminal']; ?>)</span></p>
                                                    </li>
                                                </ul>
                                                <span><?php if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultReturn['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <i class="fa fa-suitcase"></i>
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultReturn['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div>                                       

                                            <?php } ?>
                                        </div>

                                    <?php } ?>              

			                         <?php //if(@$this->session->userdata('flightdepartureCity2') !='') { ?>                          

                                        <!-- <div class="dF pad10 justifyBetween alignItemsCenter">
                                            <div class="dF alignItemsCenter font18">
                                
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy">
                                                    <path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path>
                                                </svg>
                                                <span class="padL5"><?php echo $this->session->userdata('flightdepartureCity2');	?> - <?php echo $this->session->userdata('flightarrivalCity2'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime2'); ?></span>
                                            </div>
                                            <div class="dF alignItemsCenter">
                                                <span class="padR5"></span>
                                            </div>
                                        </div>						
						
                                        <ul class="brdrBot">
                                            <li>
                                                <span>
                                                    <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode2'); ?>.png" style="width: 25%;">
                                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName2'); ?></p>
                                                    <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC2'); ?></p>
                                                    <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode2'); ?> - <?php echo $this->session->userdata('flightNumber2'); ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber2'); ?>)</p>
                                                </span>
                                            </li>
                                            <li>
                                                <p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime2'); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode2');	?> <?php echo $this->session->userdata('flightdepartureTime2');	?></p>			
                                        
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName2'); ?>,
                                                <?php echo $this->session->userdata('flightdepartureCity2');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry2'); ?>  <br>
                                                    <span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal2'); ?>)</span>
                                                </p>
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

                                        </div>			 -->
										
				                    <?php //} ?>	
                                    <!---------------------------------Third Flights------------------------------------->	
                                    
                                    <?php if(!empty($tripInfoResultThird)){ ?>
                                    
                                        <div class="dscrpton-cntnt detail-box">
                                            <div class="dF pad10 justifyBetween alignItemsCenter">
                                                <div class="dF alignItemsCenter font18">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                                    <?php if(empty($tripInfoResultThird['sI'][0]['cT'])){  ?> 
                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultThird['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultThird['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;
                                                                <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultThird['sI'][0]['dt'])); ?>
                                                                </span>
                                                        </span>
                                                    <?php }else if(!empty($tripInfoResultThird['sI'][0]['cT']) && empty($tripInfoResultThird['sI'][1]['cT'])){   ?>

                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultThird['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultThird['sI'][1]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultThird['sI'][0]['dt'])); ?>
                                                            </span>

                                                        </span>
                                                    <?php }else if(!empty($tripInfoResultThird['sI'][1]['cT'])){  ?>
                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultThird['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultThird['sI'][2]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultThird['sI'][0]['dt'])); ?>
                                                            </span>

                                                        </span>
                                                    <?php }  ?>
                                                </div>
                                            </div>						
                                            <ul class="brdrBot">
                                                <li>
                                                    <span>
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultThird['sI'][0]['fD']['aI']['code']; ?>.png">
                                                    <p class="flight-detl"><?php echo $tripInfoResultThird['sI'][0]['fD']['aI']['name']; ?></p>
                                                    <p class="flight-detl"><?php echo ucfirst($tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                    <p class="flight-detl"><?php echo $tripInfoResultThird['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultThird['sI'][0]['fD']['fN']; ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultThird['sI'][0]['fD']['eT']; ?>)</p>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultThird['sI'][0]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultThird['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultThird['sI'][0]['da']['country']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultThird['sI'][0]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultThird['sI'][0]['da']['terminal']; ?>)</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultThird['sI'][0]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        $stop = $tripInfoResultThird['sI'][0]['stops'];
                                                        if($stop == 0){

                                                            $st= 'Non-Stop';

                                                        }else{

                                                            $st= $stop. ' Stops';

                                                        }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultThird['sI'][0]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultThird['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultThird['sI'][0]['aa']['country']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultThird['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultThird['sI'][0]['aa']['terminal']; ?>)</span></p>
                                                </li>
                                            </ul>
                                            <span><?php if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                            <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                            </path>
                                                        </svg> -->
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div>
                                            <?php if(!empty($tripInfoResultThird['sI'][0]['cT'])){ ?>

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;">
                                                        Require to change Plane    Layover Time - <?php  

                                                            $connectminutes = $tripInfoResultThird['sI'][0]['cT'] ;
                                                            $connecthours = floor($connectminutes / 60);
                                                            $connectmin = $connectminutes - ($connecthours * 60); 
                                                            
                                                            echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>

                                                <ul class="brdrBot">
                                                    <li>
                                                        <span>
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultThird['sI'][1]['fD']['aI']['code']; ?>.png">
                                                        <p class="flight-detl"><?php echo $tripInfoResultThird['sI'][1]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl"><?php echo ucfirst($tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResultThird['sI'][1]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultThird['sI'][1]['fD']['fN']; ?></p>
                                                        <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultThird['sI'][1]['fD']['eT']; ?>)</p>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultThird['sI'][1]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultThird['sI'][1]['da']['city']; ?>, <?php echo $tripInfoResultThird['sI'][1]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultThird['sI'][1]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultThird['sI'][1]['da']['terminal']; ?>)</span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResultThird['sI'][1]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResultThird['sI'][1]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultThird['sI'][1]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultThird['sI'][1]['aa']['city']; ?>, <?php echo $tripInfoResultThird['sI'][1]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultThird['sI'][1]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultThird['sI'][1]['aa']['terminal']; ?>)</span></p>
                                                    </li>
                                                </ul>
                                                            
                                                <span><?php if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <i class="fa fa-suitcase"></i>
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div> 

                                            <?php } ?>

                                            <?php 
                                            
                                            if(!empty($tripInfoResultThird['sI'][1]['cT'])){  ?> 

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                        $connectminutes = $tripInfoResultThird['sI'][1]['cT'] ;
                                                        $connecthours = floor($connectminutes / 60);
                                                        $connectmin = $connectminutes - ($connecthours * 60); 
                                                        
                                                        echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>
                                                <ul class="brdrBot">
                                                    <li>
                                                        <span>
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultThird['sI'][2]['fD']['aI']['code']; ?>.png">
                                                        <p class="flight-detl"><?php echo $tripInfoResultThird['sI'][2]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl"><?php echo ucfirst($tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResultThird['sI'][2]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultThird['sI'][2]['fD']['fN']; ?></p>
                                                        <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultThird['sI'][2]['fD']['eT']; ?>)</p>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultThird['sI'][2]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultThird['sI'][2]['da']['city']; ?>, <?php echo $tripInfoResultThird['sI'][2]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultThird['sI'][2]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultThird['sI'][2]['da']['terminal']; ?>)</span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResultThird['sI'][2]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResultThird['sI'][2]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultThird['sI'][2]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultThird['sI'][2]['aa']['city']; ?>, <?php echo $tripInfoResultThird['sI'][2]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultThird['sI'][2]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultThird['sI'][2]['aa']['terminal']; ?>)</span></p>
                                                    </li>
                                                </ul>
                                                <span><?php if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultThird['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <i class="fa fa-suitcase"></i>
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultThird['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div>                                       

                                            <?php } ?>
                                        </div>

                                    <?php } ?>            
			                        <?php //if(@$this->session->userdata('flightdepartureCity3') !='') { ?>

		                                <!-- <div class="dF pad10 justifyBetween alignItemsCenter">
                                            <div class="dF alignItemsCenter font18">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
				                                <span class="padL5"><?php echo $this->session->userdata('flightdepartureCity3');	?> - <?php echo $this->session->userdata('flightarrivalCity3'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime3'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"></span>
                                            </div>
						                </div>				
						                <ul class="brdrBot">
                                            <li>
                                                <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode3'); ?>.png" style="width: 25%;">
                                                <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName3'); ?></p>
                                                <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC3'); ?></p>
                                                <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode3'); ?> - <?php echo $this->session->userdata('flightNumber3'); ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber3'); ?>)</p>
                                            </li>
                                            <li>
                                                <p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime3'); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode3');	?> <?php echo $this->session->userdata('flightdepartureTime3');	?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName3'); ?>,
                                                <?php echo $this->session->userdata('flightdepartureCity3');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry3'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal3'); ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute3'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                            <li>
                                                <p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate3');?></p>
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
                                        </div>			 -->
										
				                    <?php //} ?>
                                    <!---------------------------------Forth Flights------------------------------------->

                                    <?php if(!empty($tripInfoResultForth)){ ?>
                                    
                                        <div class="dscrpton-cntnt detail-box">
                                            <div class="dF pad10 justifyBetween alignItemsCenter">
                                                <div class="dF alignItemsCenter font18">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                                    <?php if(empty($tripInfoResultForth['sI'][0]['cT'])){  ?> 
                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultForth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultForth['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;
                                                                <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultForth['sI'][0]['dt'])); ?>
                                                                </span>
                                                        </span>
                                                    <?php }else if(!empty($tripInfoResultForth['sI'][0]['cT']) && empty($tripInfoResultForth['sI'][1]['cT'])){   ?>

                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultForth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultForth['sI'][1]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultForth['sI'][0]['dt'])); ?>
                                                            </span>

                                                        </span>
                                                    <?php }else if(!empty($tripInfoResultForth['sI'][1]['cT'])){  ?>
                                                        <span class="padL5">

                                                            <?php echo $tripInfoResultForth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultForth['sI'][2]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultForth['sI'][0]['dt'])); ?>
                                                            </span>

                                                        </span>
                                                    <?php }  ?>
                                                </div>
                                            </div>						
                                            <ul class="brdrBot">
                                                <li>
                                                    <span>
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultForth['sI'][0]['fD']['aI']['code']; ?>.png">
                                                    <p class="flight-detl"><?php echo $tripInfoResultForth['sI'][0]['fD']['aI']['name']; ?></p>
                                                    <p class="flight-detl"><?php echo ucfirst($tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                    <p class="flight-detl"><?php echo $tripInfoResultForth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultForth['sI'][0]['fD']['fN']; ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultForth['sI'][0]['fD']['eT']; ?>)</p>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultForth['sI'][0]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultForth['sI'][0]['da']['country']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultForth['sI'][0]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultForth['sI'][0]['da']['terminal']; ?>)</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultForth['sI'][0]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        $stop = $tripInfoResultForth['sI'][0]['stops'];
                                                        if($stop == 0){

                                                            $st= 'Non-Stop';

                                                        }else{

                                                            $st= $stop. ' Stops';

                                                        }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultForth['sI'][0]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultForth['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultForth['sI'][0]['aa']['country']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultForth['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultForth['sI'][0]['aa']['terminal']; ?>)</span></p>
                                                </li>
                                            </ul>
                                            <span><?php if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                            <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                            </path>
                                                        </svg> -->
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div>
                                            <?php if(!empty($tripInfoResultForth['sI'][0]['cT'])){ ?>

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;">
                                                        Require to change Plane    Layover Time - <?php  

                                                            $connectminutes = $tripInfoResultForth['sI'][0]['cT'] ;
                                                            $connecthours = floor($connectminutes / 60);
                                                            $connectmin = $connectminutes - ($connecthours * 60); 
                                                            
                                                            echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>

                                                <ul class="brdrBot">
                                                    <li>
                                                        <span>
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultForth['sI'][1]['fD']['aI']['code']; ?>.png">
                                                        <p class="flight-detl"><?php echo $tripInfoResultForth['sI'][1]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl"><?php echo ucfirst($tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResultForth['sI'][1]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultForth['sI'][1]['fD']['fN']; ?></p>
                                                        <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultForth['sI'][1]['fD']['eT']; ?>)</p>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultForth['sI'][1]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultForth['sI'][1]['da']['city']; ?>, <?php echo $tripInfoResultForth['sI'][1]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultForth['sI'][1]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultForth['sI'][1]['da']['terminal']; ?>)</span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResultForth['sI'][1]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResultForth['sI'][1]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultForth['sI'][1]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultForth['sI'][1]['aa']['city']; ?>, <?php echo $tripInfoResultForth['sI'][1]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultForth['sI'][1]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultForth['sI'][1]['aa']['terminal']; ?>)</span></p>
                                                    </li>
                                                </ul>
                                                            
                                                <span><?php if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <i class="fa fa-suitcase"></i>
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div> 

                                            <?php } ?>

                                            <?php 
                                            
                                            if(!empty($tripInfoResultForth['sI'][1]['cT'])){  ?> 

                                                <div style="text-align:center;margin-bottom:30px;">
                                                    <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                        $connectminutes = $tripInfoResultForth['sI'][1]['cT'] ;
                                                        $connecthours = floor($connectminutes / 60);
                                                        $connectmin = $connectminutes - ($connecthours * 60); 
                                                        
                                                        echo  $connecthours."h ".$connectmin."m" ;?> 
                                                    </span> 
                                                </div>
                                                <ul class="brdrBot">
                                                    <li>
                                                        <span>
                                                            <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultForth['sI'][2]['fD']['aI']['code']; ?>.png">
                                                        <p class="flight-detl"><?php echo $tripInfoResultForth['sI'][2]['fD']['aI']['name']; ?></p>
                                                        <p class="flight-detl"><?php echo ucfirst($tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                        <p class="flight-detl"><?php echo $tripInfoResultForth['sI'][2]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultForth['sI'][2]['fD']['fN']; ?></p>
                                                        <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultForth['sI'][2]['fD']['eT']; ?>)</p>
                                                        </span>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultForth['sI'][2]['dt'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultForth['sI'][2]['da']['city']; ?>, <?php echo $tripInfoResultForth['sI'][2]['da']['country']; ?></p>
                                                        
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultForth['sI'][2]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultForth['sI'][2]['da']['terminal']; ?>)</span></p>
                                                    </li>
                                                    <li>
                                                        <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                            $minutes = $tripInfoResultForth['sI'][2]['duration'];
                                                            $hours = floor($minutes / 60);
                                                            $min = $minutes - ($hours * 60); 
                                                            
                                                            echo  $hours."h ".$min."m" ;

                                                            $stop = $tripInfoResultForth['sI'][2]['stops'];
                                                            if($stop == 0){

                                                                $st= 'Non-Stop';

                                                            }else{

                                                                $st= $stop. ' Stops';

                                                            }
                                                            
                                                            ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                    </li>
                                                    <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultForth['sI'][2]['at'])); ?></p>
                                                        <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultForth['sI'][2]['aa']['city']; ?>, <?php echo $tripInfoResultForth['sI'][2]['aa']['country']; ?></p>
                                                        <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultForth['sI'][2]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultForth['sI'][2]['aa']['terminal']; ?>)</span></p>
                                                    </li>
                                                </ul>
                                                <span><?php if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultForth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                                <div class="grey padT10 font12 padL20 padR20 dF">
                                                    <div class="flex1_5">
                                                        <span class="flexRow">
                                                            <i class="fa fa-suitcase"></i>
                                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                                <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                                </path>
                                                            </svg> -->
                                                            <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultForth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                            </p>
                                                        </span>
                                                    </div>
                                                    <div class="flex2"></div>
                                                </div>                                       

                                            <?php } ?>
                                        </div>

                                    <?php } ?> 
						
			                        <?php //if(@$this->session->userdata('flightdepartureCity4') !='') { ?>

                                        <!-- <div class="dF pad10 justifyBetween alignItemsCenter">
                                            <div class="dF alignItemsCenter font18">				
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                                <span class="padL5"><?php echo $this->session->userdata('flightdepartureCity4');	?> - <?php echo $this->session->userdata('flightarrivalCity4'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime4'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"></span>
                                            </div>
						                </div>						
						
                                        <ul class="brdrBot">
                                            <li>
                                                <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode4'); ?>.png" style="width: 25%;">
                                                <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName4'); ?></p>
                                                <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC4'); ?></p>
                                                <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode4'); ?> - <?php echo $this->session->userdata('flightNumber4'); ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber4'); ?>)</p>
                                            </li>
                                            <li>
                                                <p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime4'); ?></p>
				                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode4');	?> <?php echo $this->session->userdata('flightdepartureTime4');	?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName4'); ?>,
                                                <?php echo $this->session->userdata('flightdepartureCity4');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry4'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal4'); ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute4'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                            <li>
                                                <p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate4');?></p>
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
                                        </div>			 -->
										
				                    <?php //} ?>	

									
						            <!---------------------------------Fifth Flights------------------------------------->
                                    
                                    <?php if(!empty($tripInfoResultFifth)){ ?>
                                    
                                    <div class="dscrpton-cntnt detail-box">
                                        <div class="dF pad10 justifyBetween alignItemsCenter">
                                            <div class="dF alignItemsCenter font18">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                                <?php if(empty($tripInfoResultFifth['sI'][0]['cT'])){  ?> 
                                                    <span class="padL5">

                                                        <?php echo $tripInfoResultFifth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultFifth['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultFifth['sI'][0]['dt'])); ?>
                                                            </span>
                                                    </span>
                                                <?php }else if(!empty($tripInfoResultFifth['sI'][0]['cT']) && empty($tripInfoResultFifth['sI'][1]['cT'])){   ?>

                                                    <span class="padL5">

                                                        <?php echo $tripInfoResultFifth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultFifth['sI'][1]['aa']['city'] ?>&nbsp;&nbsp;
                                                        <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultFifth['sI'][0]['dt'])); ?>
                                                        </span>

                                                    </span>
                                                <?php }else if(!empty($tripInfoResultFifth['sI'][1]['cT'])){  ?>
                                                    <span class="padL5">

                                                        <?php echo $tripInfoResultFifth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultFifth['sI'][2]['aa']['city'] ?>&nbsp;&nbsp;
                                                        <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultFifth['sI'][0]['dt'])); ?>
                                                        </span>

                                                    </span>
                                                <?php }  ?>
                                            </div>
                                        </div>						
                                        <ul class="brdrBot">
                                            <li>
                                                <span>
                                                    <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultFifth['sI'][0]['fD']['aI']['code']; ?>.png">
                                                <p class="flight-detl"><?php echo $tripInfoResultFifth['sI'][0]['fD']['aI']['name']; ?></p>
                                                <p class="flight-detl"><?php echo ucfirst($tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                <p class="flight-detl"><?php echo $tripInfoResultFifth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultFifth['sI'][0]['fD']['fN']; ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultFifth['sI'][0]['fD']['eT']; ?>)</p>
                                                </span>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultFifth['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultFifth['sI'][0]['da']['country']; ?></p>
                                                
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultFifth['sI'][0]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultFifth['sI'][0]['da']['terminal']; ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutes = $tripInfoResultFifth['sI'][0]['duration'];
                                                    $hours = floor($minutes / 60);
                                                    $min = $minutes - ($hours * 60); 
                                                    
                                                    echo  $hours."h ".$min."m" ;

                                                    $stop = $tripInfoResultFifth['sI'][0]['stops'];
                                                    if($stop == 0){

                                                        $st= 'Non-Stop';

                                                    }else{

                                                        $st= $stop. ' Stops';

                                                    }
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultFifth['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultFifth['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultFifth['sI'][0]['aa']['country']; ?></p>
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultFifth['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultFifth['sI'][0]['aa']['terminal']; ?>)</span></p>
                                            </li>
                                        </ul>
                                        <span><?php if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <i class="fa fa-suitcase"></i>
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg> -->
                                                    <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                        <?php if(!empty($tripInfoResultFifth['sI'][0]['cT'])){ ?>

                                            <div style="text-align:center;margin-bottom:30px;">
                                                <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;">
                                                    Require to change Plane    Layover Time - <?php  

                                                        $connectminutes = $tripInfoResultFifth['sI'][0]['cT'] ;
                                                        $connecthours = floor($connectminutes / 60);
                                                        $connectmin = $connectminutes - ($connecthours * 60); 
                                                        
                                                        echo  $connecthours."h ".$connectmin."m" ;?> 
                                                </span> 
                                            </div>

                                            <ul class="brdrBot">
                                                <li>
                                                    <span>
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultFifth['sI'][1]['fD']['aI']['code']; ?>.png">
                                                    <p class="flight-detl"><?php echo $tripInfoResultFifth['sI'][1]['fD']['aI']['name']; ?></p>
                                                    <p class="flight-detl"><?php echo ucfirst($tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                    <p class="flight-detl"><?php echo $tripInfoResultFifth['sI'][1]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultFifth['sI'][1]['fD']['fN']; ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultFifth['sI'][1]['fD']['eT']; ?>)</p>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultFifth['sI'][1]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultFifth['sI'][1]['da']['city']; ?>, <?php echo $tripInfoResultFifth['sI'][1]['da']['country']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultFifth['sI'][1]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultFifth['sI'][1]['da']['terminal']; ?>)</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultFifth['sI'][1]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        $stop = $tripInfoResultFifth['sI'][1]['stops'];
                                                        if($stop == 0){

                                                            $st= 'Non-Stop';

                                                        }else{

                                                            $st= $stop. ' Stops';

                                                        }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultFifth['sI'][1]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultFifth['sI'][1]['aa']['city']; ?>, <?php echo $tripInfoResultFifth['sI'][1]['aa']['country']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultFifth['sI'][1]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultFifth['sI'][1]['aa']['terminal']; ?>)</span></p>
                                                </li>
                                            </ul>
                                                        
                                            <span><?php if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                            <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                            </path>
                                                        </svg> -->
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div> 

                                        <?php } ?>

                                        <?php 
                                        
                                        if(!empty($tripInfoResultFifth['sI'][1]['cT'])){  ?> 

                                            <div style="text-align:center;margin-bottom:30px;">
                                                <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                    $connectminutes = $tripInfoResultFifth['sI'][1]['cT'] ;
                                                    $connecthours = floor($connectminutes / 60);
                                                    $connectmin = $connectminutes - ($connecthours * 60); 
                                                    
                                                    echo  $connecthours."h ".$connectmin."m" ;?> 
                                                </span> 
                                            </div>
                                            <ul class="brdrBot">
                                                <li>
                                                    <span>
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultFifth['sI'][2]['fD']['aI']['code']; ?>.png">
                                                    <p class="flight-detl"><?php echo $tripInfoResultFifth['sI'][2]['fD']['aI']['name']; ?></p>
                                                    <p class="flight-detl"><?php echo ucfirst($tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                    <p class="flight-detl"><?php echo $tripInfoResultFifth['sI'][2]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultFifth['sI'][2]['fD']['fN']; ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultFifth['sI'][2]['fD']['eT']; ?>)</p>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultFifth['sI'][2]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultFifth['sI'][2]['da']['city']; ?>, <?php echo $tripInfoResultFifth['sI'][2]['da']['country']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultFifth['sI'][2]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultFifth['sI'][2]['da']['terminal']; ?>)</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultFifth['sI'][2]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        $stop = $tripInfoResultFifth['sI'][2]['stops'];
                                                        if($stop == 0){

                                                            $st= 'Non-Stop';

                                                        }else{

                                                            $st= $stop. ' Stops';

                                                        }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultFifth['sI'][2]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultFifth['sI'][2]['aa']['city']; ?>, <?php echo $tripInfoResultFifth['sI'][2]['aa']['country']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultFifth['sI'][2]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultFifth['sI'][2]['aa']['terminal']; ?>)</span></p>
                                                </li>
                                            </ul>
                                            <span><?php if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultFifth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                            <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                            </path>
                                                        </svg> -->
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultFifth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div>                                       

                                        <?php } ?>
                                    </div>

                                <?php } ?> 
						
			                        <?php //if(@$this->session->userdata('flightdepartureCity5') !='') { ?>

                                        <!-- <div class="dF pad10 justifyBetween alignItemsCenter">
                                            <div class="dF alignItemsCenter font18">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                                <span class="padL5"><?php echo $this->session->userdata('flightdepartureCity5');	?> - <?php echo $this->session->userdata('flightarrivalCity5'); ?>&nbsp;&nbsp;<?php echo $this->session->userdata('flightDateTime5'); ?></span></div><div class="dF alignItemsCenter"><span class="padR5"></span>
                                            </div>
                                        </div>						
                            
                                        <ul class="brdrBot">
                                            <li>
                                                <img src="<?php echo base_url("uploads/flights");?>/<?php echo $this->session->userdata('flightAirportCode5'); ?>.png" style="width: 25%;">
                                                <p class="flight-detl"><?php echo $this->session->userdata('flightAirportName5'); ?></p>
                                                <p class="flight-detl"><?php echo $this->session->userdata('Adult_CC5'); ?></p>
                                                <p class="flight-detl"><?php echo $this->session->userdata('flightAirportCode5'); ?> - <?php echo $this->session->userdata('flightNumber5'); ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $this->session->userdata('flightAircraftNumber5'); ?>)</p>
                                            </li>
                                            <li>
                                                <p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('flightDateTime5'); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $this->session->userdata('flightDepartureCode5');	?> <?php echo $this->session->userdata('flightdepartureTime5');	?></p>
                                                <p style="font-size: 14px;font-weight: 400;margin-bottom: 0;"><?php echo $this->session->userdata('flightdepartureCityFullName5'); ?>,
                                                    <?php echo $this->session->userdata('flightdepartureCity5');	?>,<br><?php echo $this->session->userdata('flightdepartureCountry5'); ?>  <br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo $this->session->userdata('flightdepartureTerminal5'); ?>)</span>
                                                </p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $this->session->userdata('HoursMinute5'); ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap">Flight Duration</span></div>
                                            </li>
                                            <li>
                                                <p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $this->session->userdata('FlightArrivalDate5');?></p>
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

                                        </div>			 -->
										
				                    <?php //} ?>

                                    <!---------------------------------- Sixth Flights ------------------------------------------->


                                    <?php if(!empty($tripInfoResultSixth)){ ?>
                                    
                                    <div class="dscrpton-cntnt detail-box">
                                        <div class="dF pad10 justifyBetween alignItemsCenter">
                                            <div class="dF alignItemsCenter font18">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg>
                                                <?php if(empty($tripInfoResultSixth['sI'][0]['cT'])){  ?> 
                                                    <span class="padL5">

                                                        <?php echo $tripInfoResultSixth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultSixth['sI'][0]['aa']['city'] ?>&nbsp;&nbsp;
                                                            <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultSixth['sI'][0]['dt'])); ?>
                                                            </span>
                                                    </span>
                                                <?php }else if(!empty($tripInfoResultSixth['sI'][0]['cT']) && empty($tripInfoResultSixth['sI'][1]['cT'])){   ?>

                                                    <span class="padL5">

                                                        <?php echo $tripInfoResultSixth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultSixth['sI'][1]['aa']['city'] ?>&nbsp;&nbsp;
                                                        <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultSixth['sI'][0]['dt'])); ?>
                                                        </span>

                                                    </span>
                                                <?php }else if(!empty($tripInfoResultSixth['sI'][1]['cT'])){  ?>
                                                    <span class="padL5">

                                                        <?php echo $tripInfoResultSixth['sI'][0]['da']['city'] ?> - <?php echo $tripInfoResultSixth['sI'][2]['aa']['city'] ?>&nbsp;&nbsp;
                                                        <span style="font-size:14px;color:#727272"><?php echo $arrivalDate = date("D, d M Y",strtotime($tripInfoResultSixth['sI'][0]['dt'])); ?>
                                                        </span>

                                                    </span>
                                                <?php }  ?>
                                            </div>
                                        </div>						
                                        <ul class="brdrBot">
                                            <li>
                                                <span>
                                                    <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultSixth['sI'][0]['fD']['aI']['code']; ?>.png">
                                                <p class="flight-detl"><?php echo $tripInfoResultSixth['sI'][0]['fD']['aI']['name']; ?></p>
                                                <p class="flight-detl"><?php echo ucfirst($tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                <p class="flight-detl"><?php echo $tripInfoResultSixth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultSixth['sI'][0]['fD']['fN']; ?></p>
                                                <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultSixth['sI'][0]['fD']['eT']; ?>)</p>
                                                </span>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultSixth['sI'][0]['dt'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResult['sI'][0]['da']['city']; ?>, <?php echo $tripInfoResultSixth['sI'][0]['da']['country']; ?></p>
                                                
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultSixth['sI'][0]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultSixth['sI'][0]['da']['terminal']; ?>)</span></p>
                                            </li>
                                            <li>
                                                <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                    $minutes = $tripInfoResultSixth['sI'][0]['duration'];
                                                    $hours = floor($minutes / 60);
                                                    $min = $minutes - ($hours * 60); 
                                                    
                                                    echo  $hours."h ".$min."m" ;

                                                    $stop = $tripInfoResultSixth['sI'][0]['stops'];
                                                    if($stop == 0){

                                                        $st= 'Non-Stop';

                                                    }else{

                                                        $st= $stop. ' Stops';

                                                    }
                                                    
                                                    ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                            </li>
                                            <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultSixth['sI'][0]['at'])); ?></p>
                                                <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultSixth['sI'][0]['aa']['city']; ?>, <?php echo $tripInfoResultSixth['sI'][0]['aa']['country']; ?></p>
                                                <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultSixth['sI'][0]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultSixth['sI'][0]['aa']['terminal']; ?>)</span></p>
                                            </li>
                                        </ul>
                                        <span><?php if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                        <div class="grey padT10 font12 padL20 padR20 dF">
                                            <div class="flex1_5">
                                                <span class="flexRow">
                                                    <i class="fa fa-suitcase"></i>
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                        <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                        </path>
                                                    </svg> -->
                                                    <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                    </p>
                                                </span>
                                            </div>
                                            <div class="flex2"></div>
                                        </div>
                                        <?php if(!empty($tripInfoResultSixth['sI'][0]['cT'])){ ?>

                                            <div style="text-align:center;margin-bottom:30px;">
                                                <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;">
                                                    Require to change Plane    Layover Time - <?php  

                                                        $connectminutes = $tripInfoResultSixth['sI'][0]['cT'] ;
                                                        $connecthours = floor($connectminutes / 60);
                                                        $connectmin = $connectminutes - ($connecthours * 60); 
                                                        
                                                        echo  $connecthours."h ".$connectmin."m" ;?> 
                                                </span> 
                                            </div>

                                            <ul class="brdrBot">
                                                <li>
                                                    <span>
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultSixth['sI'][1]['fD']['aI']['code']; ?>.png">
                                                    <p class="flight-detl"><?php echo $tripInfoResultSixth['sI'][1]['fD']['aI']['name']; ?></p>
                                                    <p class="flight-detl"><?php echo ucfirst($tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                    <p class="flight-detl"><?php echo $tripInfoResultSixth['sI'][1]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultSixth['sI'][1]['fD']['fN']; ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultSixth['sI'][1]['fD']['eT']; ?>)</p>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultSixth['sI'][1]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultSixth['sI'][1]['da']['city']; ?>, <?php echo $tripInfoResultSixth['sI'][1]['da']['country']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultSixth['sI'][1]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultSixth['sI'][1]['da']['terminal']; ?>)</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultSixth['sI'][1]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        $stop = $tripInfoResultSixth['sI'][1]['stops'];
                                                        if($stop == 0){

                                                            $st= 'Non-Stop';

                                                        }else{

                                                            $st= $stop. ' Stops';

                                                        }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultSixth['sI'][1]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultSixth['sI'][1]['aa']['city']; ?>, <?php echo $tripInfoResultSixth['sI'][1]['aa']['country']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultSixth['sI'][1]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultSixth['sI'][1]['aa']['terminal']; ?>)</span></p>
                                                </li>
                                            </ul>
                                                        
                                            <span><?php if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                            <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                            </path>
                                                        </svg> -->
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div> 

                                        <?php } ?>

                                        <?php 
                                        
                                        if(!empty($tripInfoResultSixth['sI'][1]['cT'])){  ?> 

                                            <div style="text-align:center;margin-bottom:30px;">
                                                <span style="background: #e3e2e2;padding: 5px 20px;border-radius: 20px;"> Require to change Plane    Layover Time - <?php    
                                                    $connectminutes = $tripInfoResultSixth['sI'][1]['cT'] ;
                                                    $connecthours = floor($connectminutes / 60);
                                                    $connectmin = $connectminutes - ($connecthours * 60); 
                                                    
                                                    echo  $connecthours."h ".$connectmin."m" ;?> 
                                                </span> 
                                            </div>
                                            <ul class="brdrBot">
                                                <li>
                                                    <span>
                                                        <img src="<?php echo base_url("uploads/flights/");?><?php echo $tripInfoResultSixth['sI'][2]['fD']['aI']['code']; ?>.png">
                                                    <p class="flight-detl"><?php echo $tripInfoResultSixth['sI'][2]['fD']['aI']['name']; ?></p>
                                                    <p class="flight-detl"><?php echo ucfirst($tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['cc']); ?></p>
                                                    <p class="flight-detl"><?php echo $tripInfoResultSixth['sI'][2]['fD']['aI']['code']; ?> - <?php echo $tripInfoResultSixth['sI'][2]['fD']['fN']; ?></p>
                                                    <p class="flight-detl" style="font-weight: 500;">(Aircraft: <?php echo $tripInfoResultSixth['sI'][2]['fD']['eT']; ?>)</p>
                                                    </span>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultSixth['sI'][2]['dt'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultSixth['sI'][2]['da']['city']; ?>, <?php echo $tripInfoResultSixth['sI'][2]['da']['country']; ?></p>
                                                    
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultSixth['sI'][2]['da']['name']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['city']; ?> <?php //echo $tripInfoResult['sI'][0]['da']['country']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultSixth['sI'][2]['da']['terminal']; ?>)</span></p>
                                                </li>
                                                <li>
                                                    <div class="common-elementsstyles__Wid25-sc-ilw4bs-16 sGaBo flexCol TxtCenter padR20 padL10"><div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php  
                                                        $minutes = $tripInfoResultSixth['sI'][2]['duration'];
                                                        $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60); 
                                                        
                                                        echo  $hours."h ".$min."m" ;

                                                        $stop = $tripInfoResultSixth['sI'][2]['stops'];
                                                        if($stop == 0){

                                                            $st= 'Non-Stop';

                                                        }else{

                                                            $st= $stop. ' Stops';

                                                        }
                                                        
                                                        ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div><span class="font12 grey padT5 txtCap"><?php  echo $st; ?> </span></div>
                                                </li>
                                                <li><p style="font-size: 14px;font-weight: 500;margin-bottom: 0;"><?php echo $arrivalDate = date("M d, D, H:i",strtotime($tripInfoResultSixth['sI'][2]['at'])); ?></p>
                                                    <p style="margin-bottom: 3px;font-size: 18px;font-weight: 500;"><?php echo $tripInfoResultSixth['sI'][2]['aa']['city']; ?>, <?php echo $tripInfoResultSixth['sI'][2]['aa']['country']; ?></p>
                                                    <p style="font-size: 13px;font-weight: 500;color: #8b8b8b;line-height: 15px;margin-bottom: 0;"><?php echo $tripInfoResultSixth['sI'][2]['aa']['name']; ?><br><span style="color: #000;font-size: 11px;color: #a7a7a7;">(<?php echo @$tripInfoResultSixth['sI'][2]['aa']['terminal']; ?>)</span></p>
                                                </li>
                                            </ul>
                                            <span><?php if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'LITE'){ echo "SNS PRO"; }else if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'PUBLISHED'){ echo "SNS Saver"; }else if($tripInfoResultSixth['totalPriceList'][0]['fareIdentifier'] == 'FLEXI_PLUS'){ echo "SNS Flexi"; } ?></span>
                                            <div class="grey padT10 font12 padL20 padR20 dF">
                                                <div class="flex1_5">
                                                    <span class="flexRow">
                                                        <i class="fa fa-suitcase"></i>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32" fill="#9B9B9B" class="BaggageSmall__BaggageIcon-sc-1i0w9mu-0 gjwiuR">
                                                            <path d="M6.411 29.988V6.852H4.352c-1.628.001-3.04 1.369-3.042 3.02l.001 8.527v8.504c.001 1.843 1.341 3.083 3.041 3.086h2.059zm.655 1.311H4.351C1.949 31.295.002 29.493 0 26.903v-1.256-3.142-4.106l-.001-8.504c.002-2.408 2.01-4.351 4.352-4.353H7.72v25.756h-.655zM29.791 5.584v25.757H8.248V5.584h4.949V2.726C13.194 1.11 14.603.002 16.359.004l.068-.001.17-.001.598-.001h1.815l1.263.002.977.002.385.001c1.771-.013 3.179 1.099 3.165 2.72v2.859h4.99zm-6.3 1.31V2.72c.007-.818-.746-1.413-1.852-1.405l-.391-.001-.977-.002-1.191-.001-2.706.004c-1.1-.008-1.869.593-1.867 1.41v4.169H9.558V30.03H28.48V6.894h-4.99zm-1.858-1.31V3.278h-5.309v2.306h5.309zm-6.62 1.31V1.967h7.93v4.927h-7.93zm15.285 24.405V5.542h3.37c2.332.002 4.336 1.95 4.326 4.284.007.063.007 1.38.006 8.573l-.001 4.106-.001 3.142v1.255c.006 2.586-1.938 4.393-4.33 4.397h-3.369zm3.368-1.311c1.689-.003 3.025-1.245 3.021-3.086v-1.256l.001-3.142.001-4.106c.001-3.398 0-8.452-.002-8.505.004-1.671-1.404-3.04-3.02-3.042h-2.059v23.136h2.058z">
                                                            </path>
                                                        </svg> -->
                                                        <p class="padL5" style="font-size: 12px;padding-top: 0px;font-weight: 500;color: #adadad;margin-bottom:0px;"><?php echo $tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['bI']['iB']; ?>  Check-In, <?php echo $tripInfoResultSixth['totalPriceList'][0]['fd']['ADULT']['bI']['cB']; ?> Cabin
                                                        </p>
                                                    </span>
                                                </div>
                                                <div class="flex2"></div>
                                            </div>                                       

                                        <?php } ?>
                                    </div>

                                <?php } ?> 
                                    

                                    <!-----------------------------------END---------------------------------------------------->

                                    
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
                                                        if((!empty($row_passengers['baggage'])) || (!empty($row_passengers['meals']))){ 
                                                            error_reporting(0);

                                                            list($bagcode, $bagamount, $bagdesc) = explode('~', $row_passengers['baggage']);
                                                            list($mealcode, $mealamount, $mealdesc) = explode('~', $row_passengers['meals']);
                                                            ///////////////////////////////////////////////////////////////////////////
                                                            list($bagcodereturn, $bagamountreturn, $bagdescreturn) = explode('~', $row_passengers['baggage_return']);
                                                            list($mealcodereturn, $mealamountreturn, $mealdescreturn) = explode('~', $row_passengers['meals_return']);
                                                            ///////////////////////////////////////////////////////////////////////////
                                                            list($bagcodethird, $bagamountthird, $bagdescthird) = explode('~', $row_passengers['baggage_third']);
                                                            list($mealcodethird, $mealamountthird, $mealdescthird) = explode('~', $row_passengers['meal_third']);
                                                            ///////////////////////////////////////////////////////////////////////////
                                                            list($bagcodeforth, $bagamountforth, $bagdescforth) = explode('~', $row_passengers['baggage_forth']);
                                                            list($mealcodeforth, $mealamountforth, $mealdescforth) = explode('~', $row_passengers['meal_forth']);
                                                            ///////////////////////////////////////////////////////////////////////////
                                                            list($bagcodefifth, $bagamountfifth, $bagdescfifth) = explode('~', $row_passengers['baggage_fifth']);
                                                            list($mealcodefifth, $mealamountfifth, $mealdescfifth) = explode('~', $row_passengers['meal_fifth']);
                                                            ///////////////////////////////////////////////////////////////////////////
                                                            list($bagcodesixth, $bagamountsixth, $bagdescsixth) = explode('~', $row_passengers['baggage_sixth']);
                                                            list($mealcodesixth, $mealamountsixth, $mealdescsixth) = explode('~', $row_passengers['meal_sixth']);
                                                        }
                                                         ?>
                                                        <ul class="art-tabody">
                                                            <li>
                                                                <div class="art-tdfirst graycolor"><?php echo $i; ?></div>
                                                                <div class="art-tdsecond">
                                                                    <span class="pax-detailsAll"><?php echo $row_passengers['title'];?> <?php echo $row_passengers['firstMiddlename'];?> <?php echo $row_passengers['lastName'];?>  </span> 
                                                                    <?php if($row_passengers['passport_number'] != "") { ?>
                                                                    <span class="pax-passportSize">PP:<span> </span> <?php echo $row_passengers['passport_number'];?> </span>
                                                                    <?php } ?>  <?php if($row_passengers['issuedate'] != "0000-00-00") { ?>
                                                                    <span class="pax-passportSize">ID:<span> </span> <?php echo $row_passengers['issuedate'];?> </span>
                                                                    <?php } ?>        
                                                                    <?php if($row_passengers['expirydate'] != "0000-00-00") { ?>
                                                                    <span class="pax-passportSize">ED:<span> </span> <?php echo $row_passengers['expirydate'];?> </span>
                                                                    <?php } ?>                                                                  <?php if($row_passengers['dob'] != "0000-00-00") { ?>
                                                                    <span class="pax-passportSize">DOB<span> </span> <?php echo $row_passengers['dob'];?> </span>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="art-tdthird"> 
                                                                    <span class="art-spnlist"> NA </span>
                                                                </div>
                                                                
                                                                <div class="art-tdfour">
                                                                <?php if((!empty(@$bagdesc))){ ?> 
                                                                    <div style="color: #6a6a6a;font-size: 13px;display: flex;align-items: center;justify-content: center;">
                                                                        <i class="fa fa-suitcase"></i> - 
                                                                        <span><b><?php echo $row_passengers['departureCity']; ?> - <?php echo $row_passengers['arrivalCity']; ?>:</b> <?php echo $bagdesc; ?></span>
                                                                        <!-------------------------------------------->
                                                                        &nbsp;&nbsp;<?php if(!empty($row_passengers['returndepartureCity'])) { ?><span><b> <?php echo $row_passengers['returndepartureCity']; ?> - <?php echo $row_passengers['returnarrivalCity']; ?>:</b> <?php echo $bagdescreturn; ?></span> <?php } ?>
                                                                        <!-------------------------------------------->
                                                                        &nbsp;&nbsp;<?php if(!empty($row_passengers['thirddepartureCity'])) { ?><span><b> <?php echo $row_passengers['thirddepartureCity']; ?> - <?php echo $row_passengers['thirdarrivalCity']; ?>:</b> <?php echo $bagdescthird; ?></span> <?php } ?>
                                                                        <!-------------------------------------------->
                                                                         &nbsp;&nbsp;<?php if(!empty($row_passengers['forthdepartureCity'])) { ?><span><b> <?php echo $row_passengers['forthdepartureCity']; ?> - <?php echo $row_passengers['fortharrivalCity']; ?>:</b> <?php echo $bagdescforth; ?></span> <?php } ?>
                                                                         <!-------------------------------------------->
                                                                         &nbsp;&nbsp;<?php if(!empty($row_passengers['fifthdepartureCity'])) { ?><span><b> <?php echo $row_passengers['fifthdepartureCity']; ?> - <?php echo $row_passengers['fiftharrivalCity']; ?>:</b> <?php echo $bagdescfifth; ?></span> <?php } ?>
                                                                         <!-------------------------------------------->
                                                                         &nbsp;&nbsp;<?php if(!empty($row_passengers['sixthdepartureCity'])) { ?><span><b> <?php echo $row_passengers['sixthdepartureCity']; ?> - <?php echo $row_passengers['sixtharrivalCity']; ?>:</b> <?php echo $bagdescsixth; ?></span> <?php } ?>
                                                                    </div>
                                                                    <?php } if((!empty(@$mealdesc))){ ?> 
                                                                    <div style="color: #6a6a6a;font-size: 13px;display: flex;align-items: center;justify-content: center;">
                                                                        <i class="fa fa-cutlery"></i> - 
                                                                        <span><b><?php echo $row_passengers['departureCity']; ?> - <?php echo $row_passengers['arrivalCity']; ?>:</b> <?php echo $mealdesc;  ?></span>
                                                                        <!-------------------------------------------->
                                                                        &nbsp;&nbsp;<?php if(!empty($row_passengers['returndepartureCity'])) { ?> <span><b><?php echo $row_passengers['returndepartureCity']; ?> - <?php echo $row_passengers['returnarrivalCity']; ?>:</b> <?php echo $mealdescreturn; ?></span> <?php } ?>
                                                                        <!-------------------------------------------->
                                                                        &nbsp;&nbsp;<?php if(!empty($row_passengers['thirddepartureCity'])) { ?> <span><b><?php echo $row_passengers['thirddepartureCity']; ?> - <?php echo $row_passengers['thirdarrivalCity']; ?>:</b> <?php echo $mealdescthird; ?></span> <?php } ?>
                                                                        <!-------------------------------------------->
                                                                        &nbsp;&nbsp;<?php if(!empty($row_passengers['forthdepartureCity'])) { ?> <span><b><?php echo $row_passengers['forthdepartureCity']; ?> - <?php echo $row_passengers['fortharrivalCity']; ?>:</b> <?php echo $mealdescforth; ?></span> <?php } ?>
                                                                        <!-------------------------------------------->
                                                                        &nbsp;&nbsp;<?php if(!empty($row_passengers['fifthdepartureCity'])) { ?> <span><b><?php echo $row_passengers['fifthdepartureCity']; ?> - <?php echo $row_passengers['fiftharrivalCity']; ?>:</b> <?php echo $mealdescfifth; ?></span> <?php } ?>
                                                                    </div>
                                                                    <?php }else{

                                                                        echo "NA";

                                                                        } ?>
                                                                </div>  
                                                                <!-- <div class="art-tdfour"><?php //echo $bagdescreturn; ?></div>                  
                                                                <p> <?php //echo $row_passengers['returndepartureCity']; ?> - <?php //echo $row_passengers['returnarrivalCity']; ?></p>                                        
                                                                <div class="art-tdfour"><?php //echo $mealdesc;  ?></div>
                                                                <div class="art-tdfour"><?php //echo $mealdescreturn; ?></div>  -->
                                                               
                                                            </li>														
                                                        </ul>
                                                        <?php 
                                                        $i++; 
                                                    } 
                                                } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="apt-btmborder pb-30">
                                    <div class="mt-20">
                                        <h4 class="apt-passdel pb-10">
                                            <span>Contact Details</span>
                                        </h4>
                                        <p style="padding-top: 10px;">Email : <span class="art-conemail"><?php echo $this->session->userdata('users_email'); ?></span>
                                                    </p>
                                        <p>Mobile : <span class="art-conemail"><?php echo $this->session->userdata('users_countryCode'); ?><?php echo $this->session->userdata('users_mobile'); ?></span></p>
                                    </div>
                                </div>
                                <?php if(!empty($passengersdetailsReview[0]['gst_registration_no'])){ ?>
                                        <div class="apt-btmborder pb-30">
                                            <div class="mt-20">
                                                <h4 class="apt-passdel pb-10">
                                                    <span>GST Details</span>
                                                </h4>
                                                <p style="padding-top: 10px;">Reg. Number : <span class="art-conemail"><?php echo $passengersdetailsReview[0]['gst_registration_no']; ?></span>
                                                            </p>
                                                <p>Reg. Company : <span class="art-conemail"><?php echo $passengersdetailsReview[0]['gst_company_name']; ?></span></p>
                                            </div>
                                        </div>

                                <?php } ?>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn-blue btn-red" style="border-radius:5px;margin-top: 10px;font-weight: 700;" href="javascript:window.history.go(-1);"><i class="fa fa-angle-double-left"></i> &nbsp;Back</a>
                                        </div>
                                        <div class="col-md-6">												
                                            <a class="btn-blue " style="border-radius:5px;margin-top: 10px;font-weight: 700;float: right;" href="<?php echo base_url();?>flights/booking_flights_payment"> PROCEED TO PAY &nbsp;<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 booking-row">
                        <div class="col-md-12 sidebar-item">
                            <div class="detail-title"><h3>Fare Summary<span class="fare-sumry"></span></h3></div>
                            <div class="input2_wrapper">
                                <label class="col-md-8">Base Fare</label>
                                <div class="col-md-4 pad-l-r">
                                    <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('baseFareReTotal'),2); ?>                                            
                                    <div class="tooltip-container">
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
                                    <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('totalTaxFare'),2); ?>   <div class="tooltip-container">
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
                                                    <!-- <li class="tooltip-p lne-hgt">
                                                        <ul class="df-padd">
                                                            <li class="lne-hgt">YQ</li>
                                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php // echo $this->session->userdata('totalYQ'); ?></li>
                                                        </ul>
                                                    </li>
                                                    <li class="tooltip-p lne-hgt">
                                                        <ul class="df-padd">
                                                            <li class="lne-hgt">YR</li>
                                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php // echo $this->session->userdata('totalYR'); ?></li>
                                                        </ul>
                                                    </li> -->
                                                </ul>
                                            </div>
                                            </div>
                                    </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <?php //echo "<pre>"; print_r($passengersdetailsReview); die;

                                
                                // foreach ($passengersdetailsReview as $key => $passengerInfo) {

                                //     list($bagcode, $bagamount, $bagdesc) = explode('~', $passengerInfo['baggage']);
                                //     list($mealcode, $mealamount, $mealdesc) = explode('~', $passengerInfo['meals']);

                                //     $totalBaggageAmount = 0;
                                //     $totalBaggageAmount = $totalBaggageAmount + $bagamount + $mealamount;
                                //     $passengersdetailsReview
                                // }
                            
                            ?>
                            <?php if(!empty($totalBaggageMeal)){ ?>
                            <div class="input2_wrapper">
                                <label class="col-md-8">Meal, Baggage </label>
                                <div class="col-md-4 pad-l-r">
                                    <span class="red"><i class="fa fa-inr"></i>&nbsp;<?php echo $totalBaggageMeal; ?>
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
                                <!-- <div class="col-md-4 pad-l-r">
                                    <span class="red"> <i class="fa fa-inr"></i>  <?php //echo $totalBaggageMeal; ?>
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
                                </div> -->
                                
                            </div>
                            <?php } ?>
                            <?php if(!empty($totalWithSeat)){ ?>
                            <div class="input2_wrapper">
                                    <label class="col-md-8">Seat </label>
                                <div class="col-md-4 pad-l-r" style="position: relative;right: 35px;">
                                    <span class="red"><i class="fa fa-inr"></i> <?php echo $totalWithSeat; ?></span>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                            <div class="border-2px"></div>
                            <div class="input2_wrapper">
                                <label class="col-md-6 mp"><h5 class="mp">Total Amount</h5></label>
                                <div class="col-md-6 pad-l-r">
                                    <?php if(!empty($totalGrossAmount)){ ?>
                                    <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo $totalGrossAmount; ?></span>
                                    <?php }else{  ?>
                                    <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('grossTotal'),2); ?></span>
                                    <?php } ?>
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
		