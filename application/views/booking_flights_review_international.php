<?php //echo "<pre>"; print_r($_SESSION); die;?>
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
                right: 20px;
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

                                                    </div>
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
                                                                <?php if((!empty(@$bagdesc))){ ?> 
                                                                <div class="art-tdfour">
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
                                                                </div>  
                                                                <!-- <div class="art-tdfour"><?php //echo $bagdescreturn; ?></div>                  
                                                                <p> <?php //echo $row_passengers['returndepartureCity']; ?> - <?php //echo $row_passengers['returnarrivalCity']; ?></p>                                        
                                                                <div class="art-tdfour"><?php //echo $mealdesc;  ?></div>
                                                                <div class="art-tdfour"><?php //echo $mealdescreturn; ?></div>  -->
                                                                <?php }else{

                                                                    echo "NA";

                                                                } ?>
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
                                    <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('baseFareTotal'),2); ?>                                            
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
                                                    <?php if($this->session->userdata('totalYQ') > 0){ ?>
                                                    <li class="tooltip-p lne-hgt">
                                                        <ul class="df-padd">
                                                            <li class="lne-hgt">YQ</li>
                                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $this->session->userdata('totalYQ'); ?></li>
                                                        </ul>
                                                    </li>
                                                    <?php } ?>
                                                    <?php if($this->session->userdata('totalYR') > 0){ ?>
                                                    <li class="tooltip-p lne-hgt">
                                                        <ul class="df-padd">
                                                            <li class="lne-hgt">YR</li>
                                                            <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $this->session->userdata('totalYR'); ?></li>
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
		