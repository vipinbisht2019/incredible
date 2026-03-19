<style>
        .mealBasis__filter {
        display: block;
        box-sizing: border-box;
        clear: both;
        line-height: 20px;
        margin: 10px 0 15px;
        }
        .mealBasis__value {
        font-size: 13px;
        color: #666;
        width: 85%;
        display: inline-block;
        vertical-align: top;
        }
        .starrating__check {
        float: right;
        position: absolute;
        right: 30px;
        }
        .checkmark__label {
        position: relative;
        cursor: pointer;
        }
        .checkmark__label:before {
        content: "";
        -webkit-appearance: none;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 3px;
        cursor: pointer;
        box-shadow: 0 2px 3px 0 rgb(0 0 0 / 6%), 0 2px 5px 0 rgb(0 0 0 / 12%);
        background: #fff;
        }

        #open-overlay{ display: none }
        .close { display:none;}

        @media (min-width: 320px) and (max-width: 996px){
        #open-overlay{
            display: inline-block;
        }
        #overlay {
            /* we set all of the properties for our overlay */
            height: 92vh;
            width: 80%;
            margin: 0 auto;
            background: white;
            color: black;
            padding: 10px;
            position: fixed;
            overflow-y: scroll;
            top: 5%;
            left: 10%;
            z-index: 1000;
            display: none;
            /* CSS 3 */
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -o-border-radius: 10px;
            border-radius: 10px;
        }

        #mask {
        /* create are mask */
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 500;
        width: 100%;
        height: 100%;
        display: none;
        }

        /* use :target to look for a link to the overlay then we find our mask */
        #overlay:target, #overlay:target + #mask {
        display: block;
        opacity: 1;
        }

        .close {
        /* to make a nice looking pure CSS3 close button */
        display: block;
        position: absolute;
        top: 0px;
        right: 0px;
        background: #fff0;
        color: #444;
        height: 40px;
        width: 40px;
        line-height: 40px;
        font-size: 45px;
        text-decoration: none;
        text-align: center;
        font-weight: 400;
        opacity: 1;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        -o-border-radius: 40px;
        border-radius: 40px;
        }

        #open-overlay {
            /* open the overlay */
            padding: 10px 5px;
            background: #e5253e;
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -o-border-radius: 10px;
            border-radius: 10px;
            position: fixed;
            bottom: 40px;
            right: 20px;
            z-index: 999;
            height: 50px;
            width: 50px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            font-size: 32px;
        }

    }

</style>

<!--------------------------------------------------- START CONTENT TAB -------------------------------------------------->
<div class="pagination-tabs">
    <ul>
        <li><a href="javascript:;" data-id="content1" class="current-tab"><?php echo $completeResult[0]['departureCity'];?> - <?php echo $completeResult[0]['arrivalCity'];?><br><span><?php echo date("d-m-Y",strtotime($departureDate));?></span></a></li>
        <li><a href="javascript:;" data-id="content2"><?php echo $completeResultReturn[0]['departureCity'];?> - <?php echo $completeResultReturn[0]['arrivalCity'];?><br><span><?php echo date("d-m-Y",strtotime($returnDate));?></span></a></li>
        <?php if(count($completeResultthird) > 0 ){ ?>
        <li><a href="javascript:;" data-id="content3"><?php echo $completeResultthird[0]['departureCity'];?> - <?php echo $completeResultthird[0]['arrivalCity'];?><br><span><?php echo date("d-m-Y",strtotime($departureDate2));?></span></a></li>
        <?php } if(count($completeResultforth) > 0 ){?>
        <li><a href="javascript:;" data-id="content4"><?php echo $completeResultforth[0]['departureCity'];?> - <?php echo $completeResultforth[0]['arrivalCity'];?><br><span><?php echo date("d-m-Y",strtotime($departureDate3));?></span></a></li>
        <?php } if(count($completeResultfifth) > 0 ){?>
        <li><a href="javascript:;" data-id="content5"><?php echo $completeResultfifth[0]['departureCity'];?> - <?php echo $completeResultfifth[0]['arrivalCity'];?><br><span><?php echo date("d-m-Y",strtotime($departureDate4));?></span></a></li>
        <?php } if(count($completeResultsixth) > 0 ){?>
        <li><a href="javascript:;" data-id="content6"><?php echo $completeResultsixth[0]['departureCity'];?> - <?php echo $completeResultsixth[0]['arrivalCity'];?><br><span><?php echo date("d-m-Y",strtotime($departureDate5));?></span></a></li>
        <?php }?>
    </ul>
</div>
<!--------------------------------------------------- END CONTENT TAB -------------------------------------------------->

<div class="pagination-contents">

    <!--------------------------------------------------- START CONTENT 1 TAB -------------------------------------------------->

    <div id="content1" class="pagecont current">

        <div class="row">

            <!----------------------------- FILTERS ------------------------------->

            <div class="col-lg-3"> 
                <a href="#overlay" id="open-overlay"><i class="fa fa-filter"></i></a>
                <div id="overlay">
                    <a href="#" class="close">&times;</a> 
                    <div id="sidebar" class="col-lg-12">                        
                        <aside class="detail-sidebar sidebar-wrapper">

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Price</h3>              
                                </div>
                                <input type="hidden" id="hidden_minimum_price" value="1" />
                                <input type="hidden" id="hidden_maximum_price" value="<?php echo $maximumPrice; ?>" />
                                <p id="price_show"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($maximumPrice); ?> </span></p>
                                <div id="price_range"></div>                                        
                            </div>

                            <div class="sidebar-item">
                                <div class="detail-title">
                                    <h3>Stops</h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="directst">
                                                <input type="checkbox" class="dep2" name="stops" id="directstop" onclick="getPage();" value="0">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="directstt">0</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="onest">
                                                <input type="checkbox" class="dep2" name="stops" id="onestop" onclick="getPage();" value="1">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="onestt">1</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="twost">
                                                <input type="checkbox" class="dep2" name="stops" id="twostop" onclick="getPage();" value="2">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="twostt">2</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="threest">
                                                <input type="checkbox" class="dep2" name="stops" id="threestop" onclick="getPage();" value="3">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="threestt">3+</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>                            
                            </div>

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Departure <?php  echo $completeResult[0]['departureCity']; ?></h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="before111">
                                                <input type="checkbox"  class="dep2" name="depatureId" id="before11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="before1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                                                <input type="checkbox" class="dep2"  name="depatureId"   id="after11" onclick="getPage();" value="6,7,8,9,10,     11:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                                                <input type="checkbox" class="dep2"  name="depatureId" id="after5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after99">
                                                <input type="checkbox" class="dep2"  name="depatureId" id="after9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Arrival <?php  echo $completeResult[0]['arrivalCity'] ?></h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="arrival111">
                                                <input type="checkbox"  class="dep2" name="arrivalId" id="arrival11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="arrival1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter111">
                                                <input type="checkbox" class="dep2"  name="arrivalId"   id="aafter11" onclick="getPage();" value="6,7,8,9,10, 11:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter555">
                                                <input type="checkbox" class="dep2"  name="arrivalId" id="aafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter5555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter99">
                                                <input type="checkbox" class="dep2"  name="arrivalId" id="aafter9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>

                            <div class="sidebar-item">
                                <div class="detail-title">
                                <h3>Preferred Airlines</h3>
                                </div>
                                <div class="sidebar-content">

                                    <?php foreach ($flightList as $key => $flightValue) { ?>

                                    <div class="mealBasis__filter" style="display: flex;align-items: center;">
                                        <span class="mealBasis__value"> 
                                            <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue['flightName'] ; ?>
                                        </span>
                                        <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                                            <span class="checkmark">
                                            <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue['flightCode'] ; ?>">
                                            <label for="airline" class="checkmark__label"> </label>
                                            </span>
                                        </span>
                                    </div>

                                    <?php } ?>

                            
                                </div>
                            </div>              
                        </aside>
                    </div>     
                </div>
                <div id="mask" onclick="document.location='#';"></div> 
            </div>          
            
            <!----------------------------- FILTERS ------------------------------->

            <div id="flightMultidata">
                <div class="col-lg-9">
                    <div class="flight-table">
                        <table id="flightSortTable">
                            <tbody>
                            <?php 
                                $totalOneWayFlights = count($completeResult);     
                                $i1 =0;

                                foreach($completeResult as $key => $flightValue) {

                                    $minutes = $flightValue['duration'];
                                    $hours = floor($minutes / 60);
                                    $min = $minutes - ($hours * 60);

                                    // depature time 

                                    $departureTime = $flightValue['departureTime'];
                                    $departureDate = date("D, M d Y",strtotime($flightValue['departureDate']));

                                    // arrival time 

                                    $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));
                                    $arrivalDate = date("D, M d Y",strtotime($flightValue['arrivalTime']));

                                    //stops 

                                    $stop = $flightValue['noOfStops'];
                                    if($stop == 0){

                                        $st= 'Non-Stop';

                                    }else{

                                        $st= $stop. ' Stops';

                                    } 
                                    
                                    ?>
                                    <tr style="height: 120px;">
                                        <td class="text-center">
                                            <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></li>
                                                <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue['flghtName'] ?>
                                                <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?></span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime; ?></h6>
                                            <p><?php echo $flightValue['departureCity']  ?></p>                        
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
                                            <p style="text-align: center;"><?php echo $flightValue['arrivalCity'] ?></p> 
                                        </td>
                                        <?php if($bookingType == 'M'){ ?>
                                        <td>
                                            <ul>
                                                <?php  
                                                $fp = 0; 
                                                
                                                foreach ($flightValue['pricelist'] as $key => $fareList) {
                                                    
                                                    if($fareList['fareIdentifier'] != 'CORPORATE'){ ?>
                                                    
                                                    <li>

                                                        <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                        <input type="radio" name="fav_language<?php echo $i1; ?>" id="pricecheck<?php echo $fp; ?>" value="<?php echo $fareList['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList['flightId'] == $flightValue['pricelist'][0]['flightId']){ echo "checked"; } ?> onClick="getlightDetails('<?php echo $fareList['flightId'] ; ?>');getFlightDetails('<?php echo $fareList['flightId'] ; ?>','<?php echo $fareList['totalFare'] ; ?>','<?php echo $fareList['adultBaseFare'] ; ?>','<?php echo $fareList['adultTaxFare'] ; ?>','<?php echo $fareList['countadultPax'] ; ?>','<?php echo @$fareList['childBaseFare'] ; ?>','<?php echo @$fareList['childTaxFare'] ; ?>','<?php echo @$fareList['countchildPax'] ; ?>','<?php echo @$fareList['infantBaseFare'] ; ?>','<?php echo @$fareList['infantTaxFare'] ; ?>','<?php echo @$fareList['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList['adultCheckInBaggage']; ?>','<?php echo $fareList['childCheckInBaggage']; ?>','<?php echo $fareList['adultCabinBaggage'];?>','<?php echo $fareList['childCabinBaggage'];?>','<?php echo $fareList['infantCabinBaggage'];?>','<?php echo $fareList['flightId'];?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList['flightId']; ?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); " >&nbsp;&nbsp;

                                                        <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList['totalFare'],2); ?></label>
                                                            
                                                        </div>                                    
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                        <?php  if($fareList['fareIdentifier'] == 'LITE' || $fareList['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList['fareIdentifier'] == 'FLEXI_PLUS' || $fareList['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php } else{  echo $fareList['fareIdentifier']; }  ?>
                                                            <div class="atls-holder">
                                                            <span class="ars-refunsleft ars-lastre">
                                                                <?php 
                                                                    if($fareList['adultcabinClassFare'] !=''){
                                                                        echo ucfirst(strtolower($fareList['adultcabinClassFare']));
                                                                    } 
                                                                ?>
                                                                <?php if($fareList['mealAdult'] == 'true'){ echo ", Free Meal"; }else if($fareList['mealAdult']== 'false'){ echo ", Paid Meal";  }else{ echo ""; } ?>
                                                                    <?php if($fareList['adultrefund'] =='1'){ echo ', Refundable';  }else if($fareList['adultrefund'] == '0'){ echo ', Non Refundable'; }else if($fareList['adultrefund'] == '2'){ echo ', Partial Refundable'; } ?>
                                                                <span class="cursor-pointer"></span>
                                                            </span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                <?php 
                                                    $fp++; 
                                                    } 
                                                } ?>                                
                                            </ul>                                   
                                        </td>
                                        <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;">
                                            <button  type="button" onClick="bookFlight();" id="priceids" value="<?php echo $fareList['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button>
                                        </td>
                                        <?php }else{ ?>
                                        <td>                        
                                            <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onClick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                        </td>
                                        <?php } ?>
                                        <tr>
                                            <td class="content" colspan="6">
                                                <div id="show-more<?php echo $i1; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
                                                <div id="show-more-content<?php echo $i1; ?>" style="display: none;">
                                                    <div id="show-less<?php echo $i1; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
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
                                                                        <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['departureDate'])); ?> ,<?php echo $departureTime; ?></span>
                                                                        <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>                                                     
                                                                    </td>
                                                                    <td style="background: #dfe9ff;">
                                                                        <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                                        <p style="text-align:center;">Flight Duration</p>
                                                                    </td>
                                                                    <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                                        <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['arrivalTime'])); ?> , <?php echo $arrivalTime; ?></span>                                                 
                                                                        <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                                    </td>
                                                                    </tr>
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
                                                                <?php 
                                                                    foreach ($flightValue['pricelist'] as $key => $fareValues) { 

                                                                    if($flightValue['pricelist'][0]['flightId'] == $fareValues['flightId'] ){  ?> 
                                                                        
                                                                        <tr style="background: #dfe9ff;">
                                                
                                                                        <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                                        
                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['adultBaseFare'],2); ?> * <?php echo $fareValues['countadultPax']; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Adult = $fareValues['adultBaseFare'] * $fareValues['countadultPax']; 
                                                                            echo number_format($basefares_Adult,2);?> </td>

                                                                        </tr>

                                                                        <tr style="background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2);?>  * <?php echo $fareValues['countadultPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2) * $fareValues['countadultPax']; ?></td>

                                                                        </tr>
                                                                        
                                                                        <?php 
                                                                        
                                                                        if(@$fareValues['countchildPax'] != 0) { ?>
                                                
                                                                        <tr style="background: #dfe9ff;">

                                                                            <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['childBaseFare'],2); ?>  * <?php echo  $fareValues['countchildPax'] ; ?> </td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child = $fareValues['childBaseFare'] * $fareValues['countchildPax'] ; echo number_format($basefares_Child,2);?> </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues['childTaxFare'],2); ?> * <?php echo $fareValues['countchildPax']; ?></td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child =  $fareValues['childTaxFare'] * $fareValues['countchildPax']; echo number_format($taxes_Child,2); ?></td>

                                                                        </tr>

                                                                        <?php } ?>
                                                
                                                                        <?php 
                                                                        
                                                                        if($fareValues['countinfantPax'] != 0) { ?>
                                                                                    
                                                                        <tr>

                                                                            <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantBaseFare'],2);?> * <?php echo $fareValues['countinfantPax']; ?> </td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_infant =  $fareValues['infantBaseFare'] *  $fareValues['countinfantPax']; echo number_format($basefares_infant,2); ?> </td>

                                                                        </tr>
                                                                        <tr>

                                                                            <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantTaxFare'],2); ?> * <?php echo $fareValues['countinfantPax']; ?></td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant = $fareValues['infantTaxFare'] * $fareValues['countinfantPax']; 
                                                                            
                                                                            echo number_format($taxes_Infant,2);
                                                                            
                                                                            ?></td>

                                                                        </tr>

                                                                        <?php } ?>
                                                                    
                                                                        <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                                            <td style="border: 0px solid #e0e0e0;">
                                                                            <b>Total Fare</b>
                                                                            </td>
                                                                            <td></td>
                                                                            <td style="border: 0px solid #e0e0e0;">
                                                                            <b><i class="fa fa-inr"></i> <?php echo number_format($fareValues['totalFare'],2); ?></b>
                                                                            </td>

                                                                        </tr>

                                                                    <?php } 
                                                                    } ?>
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
                                                            </div>                                    
                                                            <div id="tab4" class="tab">

                                                            <div id="farerules">
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
                                                        </div>
                                                    </section>
                                                </div>
                                            </td>
                                        </tr>
                                    </tr>                           
                                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                                    <script>
                                        $(document).ready(function() {                          
                                            $('#show-more-content<?php echo $i1; ?>').hide();
                                            $('#show-more<?php echo $i1; ?>').click(function(){
                                            $('#show-more-content<?php echo $i1; ?>').show(300);
                                            $('#show-less<?php echo $i1; ?>').show();
                                            $('#show-more<?php echo $i1; ?>').hide();
                                            });
                                            $('#show-less<?php echo $i1; ?>').click(function(){
                                            $('#show-more-content<?php echo $i1; ?>').hide(150);
                                            $('#show-more<?php echo $i1; ?>').show();
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
                                $i1++;
                                } ?>
                            </tbody>
                        </table>
                    </div> 
                </div> 
            </div>
        </div>               
    </div>

     <!--------------------------------------------------- END CONTENT 1 TAB -------------------------------------------------->
     <!--------------------------------------------------- START CONTENT 2 TAB -------------------------------------------------->

    <div id="content2" class="pagecont"> 
        
        <div class="row">

            <div class="col-lg-3">
                <a href="#overlay" id="open-overlay"><i class="fa fa-filter"></i></a>
                <div id="overlay">
                    <a href="#" class="close">&times;</a> 
                    <div id="sidebar" class="col-lg-12">                        
                        <aside class="detail-sidebar sidebar-wrapper">
                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Price</h3>              
                                </div>
                                <input type="hidden" id="hidden_minimum_price1" value="1" />
                                <input type="hidden" id="hidden_maximum_price1" value="<?php echo $twomaximumPrice; ?>" />
                                <p id="price_show1"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($twomaximumPrice); ?> </span></p>
                                <div id="price_range1"></div> 
                                        
                            </div>

                            <div class="sidebar-item">
                                <div class="detail-title">
                                <h3>Stops</h3>
                                </div>
                                <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="directst">
                                            <input type="checkbox" class="dep2" name="stops" id="directstop" onclick="getPage2();" value="0">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="directstt">0</span>
                                            </span>
                                        </label>
                                        <!--<p class="filter-p">Direct</p>-->
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="onest">
                                            <input type="checkbox" class="dep2" name="stops" id="onestop" onclick="getPage2();" value="1">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="onestt">1</span>
                                            </span>
                                        </label>
                                        <!--<p class="filter-p">1 Stop</p>-->
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="twost">
                                            <input type="checkbox" class="dep2" name="stops" id="twostop" onclick="getPage2();" value="2">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="twostt">2</span>
                                            </span>
                                        </label>
                                        <!--<p class="filter-p">2+ Stops</p>-->
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="threest">
                                            <input type="checkbox" class="dep2" name="stops" id="threestop" onclick="getPage2();" value="3">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="threestt">3+</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                </div>
                            
                            </div>

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Departure <?php  echo $completeResultReturn[0]['departureCity'] ?></h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="before111">
                                                <input type="checkbox"  class="dep2" name="depatureId" id="before11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="before1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                                                <input type="checkbox" class="dep2"  name="depatureId"   id="after11" onclick="getPage();" value="6,7,8,9,10,     11:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                                                <input type="checkbox" class="dep2"  name="depatureId" id="after5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after99">
                                                <input type="checkbox" class="dep2"  name="depatureId" id="after9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Arrival <?php  echo $completeResultReturn[0]['arrivalCity'] ?></h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="arrival111">
                                                <input type="checkbox"  class="dep2" name="arrivalId" id="arrival11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="arrival1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter111">
                                                <input type="checkbox" class="dep2"  name="arrivalId"   id="aafter11" onclick="getPage();" value="6,7,8,9,10, 11:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter555">
                                                <input type="checkbox" class="dep2"  name="arrivalId" id="aafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter5555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter99">
                                                <input type="checkbox" class="dep2"  name="arrivalId" id="aafter9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>

                            <div class="sidebar-item">
                                <div class="detail-title">
                                <h3>Preferred Airlines</h3>
                                </div>
                                <div class="sidebar-content">

                                    <?php foreach ($flightList2 as $key => $flightValue2) { ?>

                                    <div class="mealBasis__filter" style="display: flex;align-items: center;">
                                        <span class="mealBasis__value"> 
                                            <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue2['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue2['flightName'] ; ?>
                                        </span>
                                        <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                                            <span class="checkmark">
                                            <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue2['flightCode'] ; ?>">
                                            <label for="airline" class="checkmark__label"> </label>
                                            </span>
                                        </span>
                                    </div>

                                    <?php } ?>

                            
                                </div>
                            </div>              
                        </aside>
                    </div>
                </div>
                <div id="mask" onclick="document.location='#';"></div>
            </div>
            
            <div id="flightMultidata">
                <div class="col-lg-9">        
                    <div class="flight-table">
                        <table id="flightSortTable">
                            <tbody>
                            <?php 
                                $totalTwoWayFlights = count($completeResultReturn);     
                                $j2=0;                           

                                foreach($completeResultReturn as $key => $flightValue1) {

                                    $minutes1 = $flightValue1['duration'];
                                    $hours1 = floor($minutes1 / 60);
                                    $min1 = $minutes1 - ($hours1 * 60);

                                    // depature time 

                                    $departureTime1 = $flightValue1['departureTime'];
                                    $departureDate1 = date("D, M d Y",strtotime($flightValue1['departureDate']));

                                    // arrival time 
                                    $arrivalTime1 = date("H:i",strtotime($flightValue1['arrivalTime']));
                                    $arrivalDate1 = date("D, M d Y",strtotime($flightValue1['arrivalTime']));

                                    //stops 

                                    $stop1 = $flightValue1['noOfStops'];
                                    if($stop1 == 0){

                                        $st1 = 'Non-Stop';

                                    }else{

                                        $st1 = $stop1. ' Stops';

                                    } ?>
                                    <tr style="height: 120px;">
                                        <td class="text-center">
                                            <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" alt=""></li>
                                                <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue1['flghtName'] ?>
                                                <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue1['flghtCode'] ?> - <?php echo $flightValue1['flghtNumber']; ?></span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime1; ?></h6>
                                            <p><?php echo $flightValue1['departureCity']  ?></p>                        
                                        </td>
                                        <td>
                                            <h6 style="display: flex;flex-direction: column;text-align: center;font-size: 13px;"><?php echo $hours1."h ".$min1."m" ; ?>
                                            <div class="relative fliStopsSep">
                                                <p class="fliStopsSepLine" style="border-top: 3px solid rgb(102, 137, 221);"></p>
                                            </div>
                                            <span style="font-size: 9px;"><?php echo $st1; ?></span></h6>
                                        </td>
                                        <td>
                                            <h6 style="font-size: 18px;color: #363636;font-weight: 600;justify-content: center;"> <?php echo $arrivalTime1; ?></h6> 
                                            <p style="text-align: center;"><?php echo $flightValue1['arrivalCity'] ?></p> 
                                        </td>
                                        <?php if($bookingType == 'M'){ ?>
                                        <td>
                                            <ul>
                                                <?php  
                                                $fp2 = 0; 
                                                
                                                foreach ($flightValue1['pricelists'] as $key => $fareList1) {
                                                    
                                                    if($fareList1['fareIdentifier'] != 'CORPORATE'){ ?>
                                                    
                                                    <li>

                                                        <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                        <input type="radio" name="fav_language<?php echo $j2; ?>" id="pricecheck<?php echo $fp2; ?>" value="<?php echo $fareList1['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList1['flightId'] == $flightValue1['pricelists'][0]['flightId']){ echo "checked"; } ?> onClick="getlightDetails('<?php echo $fareList1['flightId'] ; ?>');getFlightDetails('<?php echo $fareList1['flightId'] ; ?>','<?php echo $fareList1['totalFare'] ; ?>','<?php echo $fareList1['adultBaseFare'] ; ?>','<?php echo $fareList1['adultTaxFare'] ; ?>','<?php echo $fareList1['countadultPax'] ; ?>','<?php echo @$fareList1['childBaseFare'] ; ?>','<?php echo @$fareList1['childTaxFare'] ; ?>','<?php echo @$fareList1['countchildPax'] ; ?>','<?php echo @$fareList1['infantBaseFare'] ; ?>','<?php echo @$fareList1['infantTaxFare'] ; ?>','<?php echo @$fareList1['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList1['adultCheckInBaggage']; ?>','<?php echo $fareList1['childCheckInBaggage']; ?>','<?php echo $fareList1['adultCabinBaggage'];?>','<?php echo $fareList1['childCabinBaggage'];?>','<?php echo $fareList1['infantCabinBaggage'];?>','<?php echo $fareList1['flightId'];?>','<?php echo $flightValue1['departureAirportCode']  ?>','<?php echo $flightValue1['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList1['flightId']; ?>','<?php echo $flightValue1['departureAirportCode']  ?>','<?php echo $flightValue1['arrivalAirportCode']; ?>'); " >&nbsp;&nbsp;

                                                        <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList1['totalFare'],2); ?></label>
                                                            
                                                        </div>                                    
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                        <?php  if($fareList1['fareIdentifier'] == 'LITE' || $fareList1['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList1['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList1['fareIdentifier'] == 'FLEXI_PLUS' || $fareList1['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php } else{  echo $fareList1['fareIdentifier']; }  ?>
                                                            <div class="atls-holder">
                                                            <span class="ars-refunsleft ars-lastre">
                                                                <?php 
                                                                    if($fareList1['adultcabinClassFare'] !=''){
                                                                        echo ucfirst(strtolower($fareList1['adultcabinClassFare']));
                                                                    } 
                                                                ?>
                                                                <?php if($fareList1['mealAdult'] == 'true'){ echo ", Free Meal"; }else if($fareList1['mealAdult']== 'false'){ echo ", Paid Meal";  }else{ echo ""; } ?>
                                                                    <?php if($fareList1['adultrefund'] =='1'){ echo ', Refundable';  }else if($fareList1['adultrefund'] == '0'){ echo ', Non Refundable'; }else if($fareList1['adultrefund'] == '2'){ echo ', Partial Refundable'; } ?>
                                                                <span class="cursor-pointer"></span>
                                                            </span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                <?php 
                                                    $fp2++; 
                                                    } 
                                                } ?>                                
                                            </ul>                                   
                                        </td>
                                        <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;">
                                            <button  type="button" onClick="bookFlight();" id="priceids" value="<?php echo $fareList1['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button>
                                        </td>
                                        <?php }else{ ?>
                                        <td>                        
                                            <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onClick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                        </td>
                                        <?php } ?>
                                        <tr>
                                            <td class="content" colspan="6">
                                                <div id="show-moret<?php echo $j2; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
                                                <div id="show-more-contentt<?php echo $j2; ?>" style="display: none;">
                                                    <div id="show-lesst<?php echo $j2; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
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
                                                                    <p class="flight-details-top-list"><b><span><?php echo $flightValue1['departureCity']  ?></span><span class="ars-arright">→</span> <span><?php echo $flightValue1['arrivalCity'] ?></span></b><span class="graycolor "> <?php echo $departureDate1;  ?></span></p>
                                                                    <td class="text-center" style="background: #dfe9ff;justify-content: flex-start;align-items: center;">
                                                                        <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" alt=""> <?php echo $flightValue1['flghtName'] ?> <?php echo $flightValue1['flghtCode'] ?> - <?php echo $flightValue1['flghtNumber']; ?>
                                                                    </td>
                                                                    <td style="background: #dfe9ff;">                                                     
                                                                        <span style="font-size: 14px;"><?php echo  $departureDate11 = date("M d",strtotime($flightValue1['departureDate'])); ?> ,<?php echo $departureTime1; ?></span>
                                                                        <p class="content-p"><?php echo $flightValue1['departureAirportName']  ?> , <?php echo $flightValue1['departureCountry']  ?></p>                                                     
                                                                    </td>
                                                                    <td style="background: #dfe9ff;">
                                                                        <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours1."h ".$min1."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                                        <p style="text-align:center;">Flight Duration</p>
                                                                    </td>
                                                                    <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                                        <span style="font-size: 14px;"><?php echo  $departureDate1 = date("M d",strtotime($flightValue1['arrivalTime'])); ?> , <?php echo $arrivalTime1; ?></span>                                                 
                                                                        <p class="content-p"> <?php echo $flightValue1['arrivalAirportName']  ?> , <?php echo $flightValue1['arrivalCountry']  ?></p>
                                                                    </td>
                                                                    </tr>
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
                                                                <?php 
                                                                    foreach ($flightValue1['pricelists'] as $key => $fareValues1) { 

                                                                    if($flightValue1['pricelists'][0]['flightId'] == $fareValues1['flightId'] ){  ?> 
                                                                        
                                                                        <tr style="background: #dfe9ff;">
                                                
                                                                        <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                                        
                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['adultBaseFare'],2); ?> * <?php echo $fareValues1['countadultPax']; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Adult1 = $fareValues1['adultBaseFare'] * $fareValues1['countadultPax']; 
                                                                            echo number_format($basefares_Adult1,2);?> </td>

                                                                        </tr>

                                                                        <tr style="background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues1['adultTaxFare'],2);?>  * <?php echo $fareValues1['countadultPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues1['adultTaxFare'],2) * $fareValues1['countadultPax']; ?></td>

                                                                        </tr>
                                                                        
                                                                        <?php 
                                                                        
                                                                        if(@$fareValues1['countchildPax'] != 0) { ?>
                                                
                                                                        <tr style="background: #dfe9ff;">

                                                                            <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['childBaseFare'],2); ?>  * <?php echo  $fareValues1['countchildPax'] ; ?> </td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child1 = $fareValues1['childBaseFare'] * $fareValues1['countchildPax'] ; echo number_format($basefares_Child1,2);?> </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues1['childTaxFare'],2); ?> * <?php echo $fareValues1['countchildPax']; ?></td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child =  $fareValues1['childTaxFare'] * $fareValues1['countchildPax']; echo number_format($taxes_Child,2); ?></td>

                                                                        </tr>

                                                                        <?php } ?>
                                                
                                                                        <?php 
                                                                        
                                                                        if($fareValues1['countinfantPax'] != 0) { ?>
                                                                                    
                                                                        <tr>

                                                                            <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['infantBaseFare'],2);?> * <?php echo $fareValues1['countinfantPax']; ?> </td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_infant1 =  $fareValues1['infantBaseFare'] *  $fareValues1['countinfantPax']; echo number_format($basefares_infant1,2); ?> </td>

                                                                        </tr>
                                                                        <tr>

                                                                            <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['infantTaxFare'],2); ?> * <?php echo $fareValues1['countinfantPax']; ?></td>

                                                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant1 = $fareValues1['infantTaxFare'] * $fareValues1['countinfantPax']; 
                                                                            
                                                                            echo number_format($taxes_Infant1,2);
                                                                            
                                                                            ?></td>

                                                                        </tr>

                                                                        <?php } ?>
                                                                    
                                                                        <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                                            <td style="border: 0px solid #e0e0e0;">
                                                                            <b>Total Fare</b>
                                                                            </td>
                                                                            <td></td>
                                                                            <td style="border: 0px solid #e0e0e0;">
                                                                            <b><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['totalFare'],2); ?></b>
                                                                            </td>

                                                                        </tr>

                                                                    <?php } 
                                                                    } ?>
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
                                                                    <?php foreach ($flightValue1['pricelists'] as $key => $baggageInfo1) {  
                                                                    
                                                                    if($flightValue1['pricelists'][0]['flightId'] == $baggageInfo1['flightId'] ){   
                                                                    ?>
                                                                    
                                                                    <tr style="background:#dfe9ff;height:40px;">

                                                                    <td style="border: 0px solid #e0e0e0;"><?php echo $flightValue1['departureAirportCode']  ?>  - <?php echo $flightValue1['arrivalAirportCode']  ?></td>

                                                                    <td style="border: 0px solid #e0e0e0;">Adult: <?php echo @$baggageInfo1['adultCheckInBaggage']; ?><?php if(@$baggageInfo1['childCheckInBaggage']!=''){?> , Child :   <?php echo @$baggageInfo1['childCheckInBaggage']; }?> <?php if(@$baggageInfo1['infantCheckInBaggage']!=''){ ?>, Infant :   <?php echo @$baggageInfo1['infantCheckInBaggage']; }?></td>

                                                                    <td style="border: 0px solid #e0e0e0;">Adult :  <?php echo @$baggageInfo1['adultCabinBaggage']; ?> <?php if($baggageInfo1['childCabinBaggage'] != ''){ ?>, Child :  <?php echo @$baggageInfo1['childCabinBaggage']; } ?> <?php if($baggageInfo1['infantCabinBaggage'] != ''){ ?>, Infant :  <?php echo @$baggageInfo1['infantCabinBaggage']; } ?></td>

                                                                    </tr>
                                                                    <?php } } ?>
                                                                </tbody>
                                                                </table>  
                                                            </div>                                       
                                                            </div>                                    
                                                            <div id="tab4" class="tab">

                                                            <div id="farerules">
                                                                <div id="divMsg" style="background-color: rgb(234 240 253); color: rgb(255, 255, 255); height: auto; width: 100%; text-align: center; display: block; border-radius: 4px;">
                                                                <button class="ars-activelist fare-rules-tabs"><?php echo $flightValue1['departureAirportCode']; ?>-<?php echo $flightValue1['arrivalAirportCode']; ?></button>
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
                                    </tr>                           
                                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                                    <script>
                                        $(document).ready(function() {                          
                                            $('#show-more-contentt<?php echo $j2; ?>').hide();
                                            $('#show-moret<?php echo $j2; ?>').click(function(){
                                            $('#show-more-contentt<?php echo $j2; ?>').show(300);
                                            $('#show-lesst<?php echo $j2; ?>').show();
                                            $('#show-moret<?php echo $j2; ?>').hide();
                                            });
                                            $('#show-lesst<?php echo $j2; ?>').click(function(){
                                            $('#show-more-contentt<?php echo $j; ?>').hide(150);
                                            $('#show-moret<?php echo $j2; ?>').show();
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
                                $j2++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------- END CONTENT 2 TAB -------------------------------------------------->
    <!--------------------------------------------------- START CONTENT 3 TAB -------------------------------------------------->

    <div id="content3" class="pagecont">

        <div class="row">

            <div class="col-lg-3">
                

                <a href="#overlay" id="open-overlay"><i class="fa fa-filter"></i></a>


                <div id="overlay">
                        <a href="#" class="close">&times;</a> 
                <div id="sidebar" class="col-lg-12">
                    
                    <aside class="detail-sidebar sidebar-wrapper">

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Price</h3>              
                            </div>
                            <input type="hidden" id="hidden_minimum_price" value="1" />
                            <input type="hidden" id="hidden_maximum_price" value="<?php echo $thirdMaximumPrice; ?>" />
                            <p id="price_show2"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($thirdMaximumPrice); ?> </span></p>
                            <div id="price_range2"></div> 
                                    
                        </div>

                        <div class="sidebar-item">
                            <div class="detail-title">
                            <h3>Stops</h3>
                            </div>
                            <div class="sidebar-content">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="directst">
                                        <input type="checkbox" class="dep2" name="stops" id="directstop" onclick="getPage();" value="0">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="directstt">0</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">Direct</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="onest">
                                        <input type="checkbox" class="dep2" name="stops" id="onestop" onclick="getPage();" value="1">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="onestt">1</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">1 Stop</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="twost">
                                        <input type="checkbox" class="dep2" name="stops" id="twostop" onclick="getPage();" value="2">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="twostt">2</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">2+ Stops</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="threest">
                                        <input type="checkbox" class="dep2" name="stops" id="threestop" onclick="getPage();" value="3">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="threestt">3+</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            </div>
                        
                        </div>

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Departure  <?php  echo $completeResultthird[0]['departureCity']; ?></h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="before111">
                                            <input type="checkbox"  class="dep2" name="depatureId" id="before11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="before1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                                            <input type="checkbox" class="dep2"  name="depatureId"   id="after11" onclick="getPage();" value="6,7,8,9,10,     11:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                                            <input type="checkbox" class="dep2"  name="depatureId" id="after5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after99">
                                            <input type="checkbox" class="dep2"  name="depatureId" id="after9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Arrival <?php  echo $completeResultthird[0]['arrivalCity'] ?></h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="arrival111">
                                            <input type="checkbox"  class="dep2" name="arrivalId" id="arrival11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="arrival1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter111">
                                            <input type="checkbox" class="dep2"  name="arrivalId"   id="aafter11" onclick="getPage();" value="6,7,8,9,10, 11:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter555">
                                            <input type="checkbox" class="dep2"  name="arrivalId" id="aafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter5555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter99">
                                            <input type="checkbox" class="dep2"  name="arrivalId" id="aafter9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>

                        <div class="sidebar-item">
                            <div class="detail-title">
                            <h3>Preferred Airlines</h3>
                            </div>
                            <div class="sidebar-content">

                                <?php foreach ($flightList3 as $key => $flightValue3) { ?>

                                <div class="mealBasis__filter" style="display: flex;align-items: center;">
                                    <span class="mealBasis__value"> 
                                        <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue3['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue3['flightName'] ; ?>
                                    </span>
                                    <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                                        <span class="checkmark">
                                        <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue3['flightCode'] ; ?>">
                                        <label for="airline" class="checkmark__label"> </label>
                                        </span>
                                    </span>
                                </div>

                                <?php } ?>

                        
                            </div>
                        </div>              
                    </aside>
                </div>

                    
                    
                </div>
                <div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
            </div>

            <div class="col-lg-9">

                <div class="flight-table">
                    <table id="flightSortTable">
                        <tbody>
                        <?php 
                            $totalOneWayFlights = count($completeResultthird);     
                            $k3=0;

                            foreach($completeResultthird as $key => $flightValue3) {

                                $minutes3 = $flightValue3['duration'];
                                $hours3 = floor($minutes3 / 60);
                                $min3 = $minutes3 - ($hours3 * 60);

                                // depature time 

                                $departureTime3 = $flightValue3['departureTime'];
                                $departureDate3 = date("D, M d Y",strtotime($flightValue3['departureTime']));

                                // arrival time 
                                $arrivalTime3 = date("H:i",strtotime($flightValue3['arrivalTime']));
                                $arrivalDate3 = date("D, M d Y",strtotime($flightValue3['arrivalTime']));

                                //stops 

                                $stop3 = $flightValue3['noOfStops'];
                                if($stop3 == 0){

                                    $st3= 'Non-Stop';

                                }else{

                                    $st3= $stop3. ' Stops';

                                } ?>
                                <tr style="height: 120px;">
                                    <td class="text-center">
                                        <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                                            <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue3['flghtCode'] ; ?>.png" alt=""></li>
                                            <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue3['flghtName'] ?>
                                            <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue3['flghtCode'] ?> - <?php echo $flightValue3['flghtNumber']; ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime3; ?></h6>
                                        <p><?php echo $flightValue3['departureCity']  ?></p>                        
                                    </td>
                                    <td>
                                        <h6 style="display: flex;flex-direction: column;text-align: center;font-size: 13px;"><?php echo $hours3."h ".$min3."m" ; ?>
                                        <div class="relative fliStopsSep">
                                            <p class="fliStopsSepLine" style="border-top: 3px solid rgb(102, 137, 221);"></p>
                                        </div>
                                        <span style="font-size: 9px;"><?php echo $st3; ?></span></h6>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 18px;color: #363636;font-weight: 600;justify-content: center;"> <?php echo $arrivalTime; ?></h6> 
                                        <p style="text-align: center;"><?php echo $flightValue3['arrivalCity'] ?></p> 
                                    </td>
                                    <?php if($bookingType == 'M'){ ?>
                                    <td>
                                        <ul>
                                            <?php  
                                            $fp3 = 0; 
                                            
                                            foreach ($flightValue3['pricelists'] as $key => $fareList3) {
                                                
                                                if($fareList3['fareIdentifier'] != 'CORPORATE'){ ?>
                                                
                                                <li>

                                                    <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                    <input type="radio" name="fav_language<?php echo $k3; ?>" id="pricecheck<?php echo $fp3; ?>" value="<?php echo $fareList3['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList3['flightId'] == $flightValue3['pricelists'][0]['flightId']){ echo "checked"; } ?> onClick="getlightDetails('<?php echo $fareList3['flightId'] ; ?>');getFlightDetails('<?php echo $fareList3['flightId'] ; ?>','<?php echo $fareList3['totalFare'] ; ?>','<?php echo $fareList3['adultBaseFare'] ; ?>','<?php echo $fareList3['adultTaxFare'] ; ?>','<?php echo $fareList3['countadultPax'] ; ?>','<?php echo @$fareList3['childBaseFare'] ; ?>','<?php echo @$fareList3['childTaxFare'] ; ?>','<?php echo @$fareList3['countchildPax'] ; ?>','<?php echo @$fareList3['infantBaseFare'] ; ?>','<?php echo @$fareList3['infantTaxFare'] ; ?>','<?php echo @$fareList3['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList3['adultCheckInBaggage']; ?>','<?php echo $fareList3['childCheckInBaggage']; ?>','<?php echo $fareList3['adultCabinBaggage'];?>','<?php echo $fareList3['childCabinBaggage'];?>','<?php echo $fareList3['infantCabinBaggage'];?>','<?php echo $fareList3['flightId'];?>','<?php echo $flightValue3['departureAirportCode']  ?>','<?php echo $flightValue3['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList3['flightId']; ?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue3['arrivalAirportCode']; ?>'); " >&nbsp;&nbsp;

                                                    <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList3['totalFare'],2); ?></label>
                                                        
                                                    </div>                                    
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                    <?php  if($fareList3['fareIdentifier'] == 'LITE' || $fareList3['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList3['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList3['fareIdentifier'] == 'FLEXI_PLUS' || $fareList3['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php } else{  echo $fareList3['fareIdentifier']; }  ?>
                                                        <div class="atls-holder">
                                                        <span class="ars-refunsleft ars-lastre">
                                                            <?php 
                                                                if($fareList3['adultcabinClassFare'] !=''){
                                                                    echo ucfirst(strtolower($fareList3['adultcabinClassFare']));
                                                                } 
                                                            ?>
                                                            <?php if($fareList3['mealAdult'] == 'true'){ echo ", Free Meal"; }else if($fareList3['mealAdult']== 'false'){ echo ", Paid Meal";  }else{ echo ""; } ?>
                                                                <?php if($fareList3['adultrefund'] =='1'){ echo ', Refundable';  }else if($fareList3['adultrefund'] == '0'){ echo ', Non Refundable'; }else if($fareList3['adultrefund'] == '2'){ echo ', Partial Refundable'; } ?>
                                                            <span class="cursor-pointer"></span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                            <?php 
                                                $fp++; 
                                                } 
                                            } ?>                                
                                        </ul>                                   
                                    </td>
                                    <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;">
                                        <button  type="button" onClick="bookFlight();" id="priceids" value="<?php echo $fareList3['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button>
                                    </td>
                                    <?php }else{ ?>
                                    <td>                        
                                        <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onClick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                    </td>
                                    <?php } ?>
                                    <tr>
                                        <td class="content" colspan="6">
                                            <div id="show-moretr<?php echo $k3; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
                                            <div id="show-more-contenttr<?php echo $k3; ?>" style="display: none;">
                                                <div id="show-lesstr<?php echo $k3; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
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
                                                                <p class="flight-details-top-list"><b><span><?php echo $flightValue3['departureCity']  ?></span><span class="ars-arright">→</span> <span><?php echo $flightValue3['arrivalCity'] ?></span></b><span class="graycolor "> <?php echo $departureDate3;  ?></span></p>
                                                                <td class="text-center" style="background: #dfe9ff;justify-content: flex-start;align-items: center;">
                                                                    <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue3['flghtCode'] ; ?>.png" alt=""> <?php echo $flightValue3['flghtName'] ?> <?php echo $flightValue3['flghtCode'] ?> - <?php echo $flightValue3['flghtNumber']; ?>
                                                                </td>
                                                                <td style="background: #dfe9ff;">                                                     
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate3 = date("M d",strtotime($flightValue3['departureTime'])); ?> ,<?php echo $departureTime3; ?></span>
                                                                    <p class="content-p"><?php echo $flightValue3['departureAirportName']  ?> , <?php echo $flightValue3['departureCountry']  ?></p>                                                     
                                                                </td>
                                                                <td style="background: #dfe9ff;">
                                                                    <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours3."h ".$min3."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                                    <p style="text-align:center;">Flight Duration</p>
                                                                </td>
                                                                <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate3 = date("M d",strtotime($flightValue3['arrivalTime'])); ?> , <?php echo $arrivalTime3; ?></span>                                                 
                                                                    <p class="content-p"> <?php echo $flightValue3['arrivalAirportName']  ?> , <?php echo $flightValue3['arrivalCountry']  ?></p>
                                                                </td>
                                                                </tr>
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
                                                            <?php 
                                                                foreach ($flightValue3['pricelists'] as $key => $fareValues3) { 

                                                                if($flightValue3['pricelists'][0]['flightId'] == $fareValues3['flightId'] ){  ?> 
                                                                    
                                                                    <tr style="background: #dfe9ff;">
                                            
                                                                    <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                                    
                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues3['adultBaseFare'],2); ?> * <?php echo $fareValues3['countadultPax']; ?> </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Adult3 = $fareValues3['adultBaseFare'] * $fareValues3['countadultPax']; 
                                                                        echo number_format($basefares_Adult3,2);?> </td>

                                                                    </tr>

                                                                    <tr style="background: #dfe9ff;">

                                                                    <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult3 = number_format($fareValues3['adultTaxFare'],2);?>  * <?php echo $fareValues3['countadultPax']; ?></td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult3 = number_format($fareValues3['adultTaxFare'],2) * $fareValues3['countadultPax']; ?></td>

                                                                    </tr>
                                                                    
                                                                    <?php 
                                                                    
                                                                    if(@$fareValues3['countchildPax'] != 0) { ?>
                                            
                                                                    <tr style="background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues3['childBaseFare'],2); ?>  * <?php echo  $fareValues3['countchildPax'] ; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child3 = $fareValues3['childBaseFare'] * $fareValues3['countchildPax'] ; echo number_format($basefares_Child3,2);?> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues3['childTaxFare'],2); ?> * <?php echo $fareValues3['countchildPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child3 =  $fareValues3['childTaxFare'] * $fareValues3['countchildPax']; echo number_format($taxes_Child3,2); ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                            
                                                                    <?php 
                                                                    
                                                                    if($fareValues3['countinfantPax'] != 0) { ?>
                                                                                
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues3['infantBaseFare'],2);?> * <?php echo $fareValues3['countinfantPax']; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_infant3 =  $fareValues3['infantBaseFare'] *  $fareValues3['countinfantPax']; echo number_format($basefares_infant3,2); ?> </td>

                                                                    </tr>
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues3['infantTaxFare'],2); ?> * <?php echo $fareValues3['countinfantPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant3 = $fareValues3['infantTaxFare'] * $fareValues3['countinfantPax']; 
                                                                        
                                                                        echo number_format($taxes_Infant3,2);
                                                                        
                                                                        ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                                                
                                                                    <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b>Total Fare</b>
                                                                        </td>
                                                                        <td></td>
                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b><i class="fa fa-inr"></i> <?php echo number_format($fareValues3['totalFare'],2); ?></b>
                                                                        </td>

                                                                    </tr>

                                                                <?php } 
                                                                } ?>
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
                                                                <?php foreach ($flightValue3['pricelists'] as $key => $baggageInfo3) {  
                                                                
                                                                if($flightValue3['pricelists'][0]['flightId'] == $baggageInfo3['flightId'] ){   
                                                                ?>
                                                                
                                                                <tr style="background:#dfe9ff;height:40px;">

                                                                <td style="border: 0px solid #e0e0e0;"><?php echo $flightValue3['departureAirportCode']  ?>  - <?php echo $flightValue3['arrivalAirportCode']  ?></td>

                                                                <td style="border: 0px solid #e0e0e0;">Adult: <?php echo @$baggageInfo3['adultCheckInBaggage']; ?><?php if(@$baggageInfo3['childCheckInBaggage']!=''){?> , Child :   <?php echo @$baggageInfo3['childCheckInBaggage']; }?> <?php if(@$baggageInfo3['infantCheckInBaggage']!=''){ ?>, Infant :   <?php echo @$baggageInfo3['infantCheckInBaggage']; }?></td>

                                                                <td style="border: 0px solid #e0e0e0;">Adult :  <?php echo @$baggageInfo3['adultCabinBaggage']; ?> <?php if($baggageInfo3['childCabinBaggage'] != ''){ ?>, Child :  <?php echo @$baggageInfo3['childCabinBaggage']; } ?> <?php if($baggageInfo3['infantCabinBaggage'] != ''){ ?>, Infant :  <?php echo @$baggageInfo3['infantCabinBaggage']; } ?></td>

                                                                </tr>
                                                                <?php } } ?>
                                                            </tbody>
                                                            </table>  
                                                        </div>                                       
                                                        </div>                                    
                                                        <div id="tab4" class="tab">

                                                        <div id="farerules">
                                                            <div id="divMsg" style="background-color: rgb(234 240 253); color: rgb(255, 255, 255); height: auto; width: 100%; text-align: center; display: block; border-radius: 4px;">
                                                            <button class="ars-activelist fare-rules-tabs"><?php echo $flightValue3['departureAirportCode']; ?>-<?php echo $flightValue3['arrivalAirportCode']; ?></button>
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
                                </tr>                           
                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {                          
                                        $('#show-more-contenttr<?php echo $k3; ?>').hide();
                                        $('#show-moretr<?php echo $k3; ?>').click(function(){
                                        $('#show-more-contenttr<?php echo $k3; ?>').show(300);
                                        $('#show-lesstr<?php echo $k3; ?>').show();
                                        $('#show-moretr<?php echo $k3; ?>').hide();
                                        });
                                        $('#show-lesstr<?php echo $k3; ?>').click(function(){
                                        $('#show-more-contenttr<?php echo $k3; ?>').hide(150);
                                        $('#show-moretr<?php echo $k3; ?>').show();
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
                            $k3++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
    <!--------------------------------------------------- END CONTENT 3 TAB -------------------------------------------------->
    <!--------------------------------------------------- START CONTENT 4 TAB ------------------------------------>

    <div id="content4" class="pagecont">

        <div class="row">

            <div class="col-lg-3">
                
            
                <a href="#overlay" id="open-overlay"><i class="fa fa-filter"></i></a>


                <div id="overlay">
                        <a href="#" class="close">&times;</a> 
                <div id="sidebar" class="col-lg-12">
                    
                    <aside class="detail-sidebar sidebar-wrapper">

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Price</h3>              
                            </div>
                            <input type="hidden" id="hidden_minimum_price" value="1" />
                            <input type="hidden" id="hidden_maximum_price" value="<?php echo $fourthMaximumPrice; ?>" />
                            <p id="price_show3"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($fourthMaximumPrice); ?> </span></p>
                            <div id="price_range3"></div> 
                                    
                        </div>

                        <div class="sidebar-item">
                            <div class="detail-title">
                            <h3>Stops</h3>
                            </div>
                            <div class="sidebar-content">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="directst">
                                        <input type="checkbox" class="dep2" name="stops" id="directstop" onclick="getPage();" value="0">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="directstt">0</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">Direct</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="onest">
                                        <input type="checkbox" class="dep2" name="stops" id="onestop" onclick="getPage();" value="1">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="onestt">1</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">1 Stop</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="twost">
                                        <input type="checkbox" class="dep2" name="stops" id="twostop" onclick="getPage();" value="2">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="twostt">2</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">2+ Stops</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="threest">
                                        <input type="checkbox" class="dep2" name="stops" id="threestop" onclick="getPage();" value="3">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="threestt">3+</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            </div>
                        
                        </div>

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Departure <?php  echo $completeResultforth[0]['departureCity']; ?></h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="before111">
                                            <input type="checkbox"  class="dep2" name="depatureId" id="before11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="before1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                                            <input type="checkbox" class="dep2"  name="depatureId"   id="after11" onclick="getPage();" value="6,7,8,9,10,     11:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                                            <input type="checkbox" class="dep2"  name="depatureId" id="after5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after99">
                                            <input type="checkbox" class="dep2"  name="depatureId" id="after9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Arrival <?php  echo $completeResultforth[0]['arrivalCity']; ?></h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="arrival111">
                                            <input type="checkbox"  class="dep2" name="arrivalId" id="arrival11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="arrival1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter111">
                                            <input type="checkbox" class="dep2"  name="arrivalId"   id="aafter11" onclick="getPage();" value="6,7,8,9,10, 11:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter555">
                                            <input type="checkbox" class="dep2"  name="arrivalId" id="aafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter5555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter99">
                                            <input type="checkbox" class="dep2"  name="arrivalId" id="aafter9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>

                        <div class="sidebar-item">
                            <div class="detail-title">
                            <h3>Preferred Airlines</h3>
                            </div>
                            <div class="sidebar-content">

                                <?php foreach ($flightList4 as $key => $flightValue4) { ?>

                                <div class="mealBasis__filter" style="display: flex;align-items: center;">
                                    <span class="mealBasis__value"> 
                                        <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue4['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue4['flightName'] ; ?>
                                    </span>
                                    <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                                        <span class="checkmark">
                                        <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue4['flightCode'] ; ?>">
                                        <label for="airline" class="checkmark__label"> </label>
                                        </span>
                                    </span>
                                </div>

                                <?php } ?>

                        
                            </div>
                        </div>              
                    </aside>
                </div>

                    
                    
                </div>
                <div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
            </div>

            <div class="col-lg-9">

                <div class="flight-table">
                    <table id="flightSortTable">
                        <tbody>
                        <?php 
                            $totalOneWayFlights = count($completeResultforth);     
                            $ii=0;

                            foreach($completeResultforth as $key => $flightValue) {

                                $minutes = $flightValue['duration'];
                                $hours = floor($minutes / 60);
                                $min = $minutes - ($hours * 60);

                                // depature time 

                                $departureTime = $flightValue['departureTime'];
                                $departureDate = date("D, M d Y",strtotime($flightValue['departureTime']));

                                // arrival time 
                                $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));
                                $arrivalDate = date("D, M d Y",strtotime($flightValue['arrivalTime']));

                                //stops 

                                $stop = $flightValue['noOfStops'];
                                if($stop == 0){

                                    $st= 'Non-Stop';

                                }else{

                                    $st= $stop. ' Stops';

                                } ?>
                                <tr style="height: 120px;">
                                    <td class="text-center">
                                        <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                                            <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></li>
                                            <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue['flghtName'] ?>
                                            <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime; ?></h6>
                                        <p><?php echo $flightValue['departureCity']  ?></p>                        
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
                                        <p style="text-align: center;"><?php echo $flightValue['arrivalCity'] ?></p> 
                                    </td>
                                    <?php if($bookingType == 'M'){ ?>
                                    <td>
                                        <ul>
                                            <?php  
                                            $fp = 0; 
                                            
                                            foreach ($flightValue['pricelist'] as $key => $fareList) {
                                                
                                                if($fareList['fareIdentifier'] != 'CORPORATE'){ ?>
                                                
                                                <li>

                                                    <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                    <input type="radio" name="fav_language<?php echo $ii; ?>" id="pricecheck<?php echo $fp; ?>" value="<?php echo $fareList['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList['flightId'] == $flightValue['pricelist'][0]['flightId']){ echo "checked"; } ?> onClick="getlightDetails('<?php echo $fareList['flightId'] ; ?>');getFlightDetails('<?php echo $fareList['flightId'] ; ?>','<?php echo $fareList['totalFare'] ; ?>','<?php echo $fareList['adultBaseFare'] ; ?>','<?php echo $fareList['adultTaxFare'] ; ?>','<?php echo $fareList['countadultPax'] ; ?>','<?php echo @$fareList['childBaseFare'] ; ?>','<?php echo @$fareList['childTaxFare'] ; ?>','<?php echo @$fareList['countchildPax'] ; ?>','<?php echo @$fareList['infantBaseFare'] ; ?>','<?php echo @$fareList['infantTaxFare'] ; ?>','<?php echo @$fareList['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList['adultCheckInBaggage']; ?>','<?php echo $fareList['childCheckInBaggage']; ?>','<?php echo $fareList['adultCabinBaggage'];?>','<?php echo $fareList['childCabinBaggage'];?>','<?php echo $fareList['infantCabinBaggage'];?>','<?php echo $fareList['flightId'];?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList['flightId']; ?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); " >&nbsp;&nbsp;

                                                    <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList['totalFare'],2); ?></label>
                                                        
                                                    </div>                                    
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                    <?php  if($fareList['fareIdentifier'] == 'LITE' || $fareList['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList['fareIdentifier'] == 'FLEXI_PLUS' || $fareList['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php } else{  echo $fareList['fareIdentifier']; }  ?>
                                                        <div class="atls-holder">
                                                        <span class="ars-refunsleft ars-lastre">
                                                            <?php 
                                                                if($fareList['adultcabinClassFare'] !=''){
                                                                    echo ucfirst(strtolower($fareList['adultcabinClassFare']));
                                                                } 
                                                            ?>
                                                            <?php if($fareList['mealAdult'] == 'true'){ echo ", Free Meal"; }else if($fareList['mealAdult']== 'false'){ echo ", Paid Meal";  }else{ echo ""; } ?>
                                                                <?php if($fareList['adultrefund'] =='1'){ echo ', Refundable';  }else if($fareList['adultrefund'] == '0'){ echo ', Non Refundable'; }else if($fareList['adultrefund'] == '2'){ echo ', Partial Refundable'; } ?>
                                                            <span class="cursor-pointer"></span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                            <?php 
                                                $fp++; 
                                                } 
                                            } ?>                                
                                        </ul>                                   
                                    </td>
                                    <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;">
                                        <button  type="button" onClick="bookFlight();" id="priceids" value="<?php echo $fareList['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button>
                                    </td>
                                    <?php }else{ ?>
                                    <td>                        
                                        <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onClick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                    </td>
                                    <?php } ?>
                                    <tr>
                                        <td class="content" colspan="6">
                                            <div id="show-moretf<?php echo $ii; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
                                            <div id="show-more-contenttf<?php echo $ii; ?>" style="display: none;">
                                                <div id="show-lesstf<?php echo $ii; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
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
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['departureTime'])); ?> ,<?php echo $departureTime; ?></span>
                                                                    <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>                                                     
                                                                </td>
                                                                <td style="background: #dfe9ff;">
                                                                    <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                                    <p style="text-align:center;">Flight Duration</p>
                                                                </td>
                                                                <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['arrivalTime'])); ?> , <?php echo $arrivalTime; ?></span>                                                 
                                                                    <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                                </td>
                                                                </tr>
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
                                                            <?php 
                                                                foreach ($flightValue['pricelist'] as $key => $fareValues) { 

                                                                if($flightValue['pricelist'][0]['flightId'] == $fareValues['flightId'] ){  ?> 
                                                                    
                                                                    <tr style="background: #dfe9ff;">
                                            
                                                                    <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                                    
                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['adultBaseFare'],2); ?> * <?php echo $fareValues['countadultPax']; ?> </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Adult = $fareValues['adultBaseFare'] * $fareValues['countadultPax']; 
                                                                        echo number_format($basefares_Adult,2);?> </td>

                                                                    </tr>

                                                                    <tr style="background: #dfe9ff;">

                                                                    <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2);?>  * <?php echo $fareValues['countadultPax']; ?></td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2) * $fareValues['countadultPax']; ?></td>

                                                                    </tr>
                                                                    
                                                                    <?php 
                                                                    
                                                                    if(@$fareValues['countchildPax'] != 0) { ?>
                                            
                                                                    <tr style="background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['childBaseFare'],2); ?>  * <?php echo  $fareValues['countchildPax'] ; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child = $fareValues['childBaseFare'] * $fareValues['countchildPax'] ; echo number_format($basefares_Child,2);?> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues['childTaxFare'],2); ?> * <?php echo $fareValues['countchildPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child =  $fareValues['childTaxFare'] * $fareValues['countchildPax']; echo number_format($taxes_Child,2); ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                            
                                                                    <?php 
                                                                    
                                                                    if($fareValues['countinfantPax'] != 0) { ?>
                                                                                
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantBaseFare'],2);?> * <?php echo $fareValues['countinfantPax']; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_infant =  $fareValues['infantBaseFare'] *  $fareValues['countinfantPax']; echo number_format($basefares_infant,2); ?> </td>

                                                                    </tr>
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantTaxFare'],2); ?> * <?php echo $fareValues['countinfantPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant = $fareValues['infantTaxFare'] * $fareValues['countinfantPax']; 
                                                                        
                                                                        echo number_format($taxes_Infant,2);
                                                                        
                                                                        ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                                                
                                                                    <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b>Total Fare</b>
                                                                        </td>
                                                                        <td></td>
                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b><i class="fa fa-inr"></i> <?php echo number_format($fareValues['totalFare'],2); ?></b>
                                                                        </td>

                                                                    </tr>

                                                                <?php } 
                                                                } ?>
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
                                                        </div>                                    
                                                        <div id="tab4" class="tab">

                                                        <div id="farerules">
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
                                                    </div>
                                                </section>
                                            </div>
                                        </td>
                                    </tr>
                                </tr>                           
                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {                          
                                        $('#show-more-contenttf<?php echo $ii; ?>').hide();
                                        $('#show-moretf<?php echo $ii; ?>').click(function(){
                                        $('#show-more-contenttf<?php echo $ii; ?>').show(300);
                                        $('#show-lesstf<?php echo $ii; ?>').show();
                                        $('#show-moretf<?php echo $ii; ?>').hide();
                                        });
                                        $('#show-lesstf<?php echo $ii; ?>').click(function(){
                                        $('#show-more-contenttf<?php echo $i; ?>').hide(150);
                                        $('#show-moretf<?php echo $ii; ?>').show();
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
                            $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        
    </div>

    <!--------------------------------------------------- END CONTENT 4 TAB -------------------------------------------------->
    <!--------------------------------------------------- START CONTENT 5 TAB ------------------------------------>

    <div id="content5" class="pagecont">

        <div class="row">

            <div class="col-lg-3">
                

                <a href="#overlay" id="open-overlay"><i class="fa fa-filter"></i></a>


                <div id="overlay">
                        <a href="#" class="close">&times;</a> 
                <div id="sidebar" class="col-lg-12">
                    
                    <aside class="detail-sidebar sidebar-wrapper">

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Price</h3>              
                            </div>
                            <input type="hidden" id="hidden_minimum_price" value="1" />
                            <input type="hidden" id="hidden_maximum_price" value="<?php echo $fifthMaximumPrice; ?>" />
                            <p id="price_show4"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($fifthMaximumPrice); ?> </span></p>
                            <div id="price_range4"></div> 
                                    
                        </div>

                        <div class="sidebar-item">
                            <div class="detail-title">
                            <h3>Stops</h3>
                            </div>
                            <div class="sidebar-content">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="directst">
                                        <input type="checkbox" class="dep2" name="stops" id="directstop" onclick="getPage();" value="0">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="directstt">0</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">Direct</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="onest">
                                        <input type="checkbox" class="dep2" name="stops" id="onestop" onclick="getPage();" value="1">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="onestt">1</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">1 Stop</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="twost">
                                        <input type="checkbox" class="dep2" name="stops" id="twostop" onclick="getPage();" value="2">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="twostt">2</span>
                                        </span>
                                    </label>
                                    <!--<p class="filter-p">2+ Stops</p>-->
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="threest">
                                        <input type="checkbox" class="dep2" name="stops" id="threestop" onclick="getPage();" value="3">
                                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                            <span class="black" id="threestt">3+</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            </div>
                        
                        </div>

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Departure <?php  echo $completeResultfifth[0]['departureCity'] ?></h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="before111">
                                            <input type="checkbox"  class="dep2" name="depatureId" id="before11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="before1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                                            <input type="checkbox" class="dep2"  name="depatureId"   id="after11" onclick="getPage();" value="6,7,8,9,10,     11:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                                            <input type="checkbox" class="dep2"  name="depatureId" id="after5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after99">
                                            <input type="checkbox" class="dep2"  name="depatureId" id="after9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="after999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>

                        <div class="sidebar-item" style="height: 135px;">
                            <div class="detail-title">
                                <h3>Arrival <?php  echo $completeResultfifth[0]['arrivalCity'] ?></h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="arrival111">
                                            <input type="checkbox"  class="dep2" name="arrivalId" id="arrival11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="arrival1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter111">
                                            <input type="checkbox" class="dep2"  name="arrivalId"   id="aafter11" onclick="getPage();" value="6,7,8,9,10, 11:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter555">
                                            <input type="checkbox" class="dep2"  name="arrivalId" id="aafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter5555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter99">
                                            <input type="checkbox" class="dep2"  name="arrivalId" id="aafter9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="aafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>

                        <div class="sidebar-item">
                            <div class="detail-title">
                            <h3>Preferred Airlines</h3>
                            </div>
                            <div class="sidebar-content">

                                <?php foreach ($flightList5 as $key => $flightValue5) { ?>

                                <div class="mealBasis__filter" style="display: flex;align-items: center;">
                                    <span class="mealBasis__value"> 
                                        <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue5['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue5['flightName'] ; ?>
                                    </span>
                                    <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                                        <span class="checkmark">
                                        <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue5['flightCode'] ; ?>">
                                        <label for="airline" class="checkmark__label"> </label>
                                        </span>
                                    </span>
                                </div>

                                <?php } ?>

                        
                            </div>
                        </div>              
                    </aside>
                </div>

                    
                    
                </div>
                <div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
            </div>

            <div class="col-lg-9">

                <div class="flight-table">
                    <table id="flightSortTable">
                        <tbody>
                        <?php 
                            $totalOneWayFlights = count($completeResultfifth);     
                            $i=0;

                            foreach($completeResultfifth as $key => $flightValue) {

                                $minutes = $flightValue['duration'];
                                $hours = floor($minutes / 60);
                                $min = $minutes - ($hours * 60);

                                // depature time 

                                $departureTime = $flightValue['departureTime'];
                                $departureDate = date("D, M d Y",strtotime($flightValue['departureTime']));

                                // arrival time 
                                $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));
                                $arrivalDate = date("D, M d Y",strtotime($flightValue['arrivalTime']));

                                //stops 

                                $stop = $flightValue['noOfStops'];
                                if($stop == 0){

                                    $st= 'Non-Stop';

                                }else{

                                    $st= $stop. ' Stops';

                                } ?>
                                <tr style="height: 120px;">
                                    <td class="text-center">
                                        <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                                            <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></li>
                                            <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue['flghtName'] ?>
                                            <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime; ?></h6>
                                        <p><?php echo $flightValue['departureCity']  ?></p>                        
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
                                        <p style="text-align: center;"><?php echo $flightValue['arrivalCity'] ?></p> 
                                    </td>
                                    <?php if($bookingType == 'M'){ ?>
                                    <td>
                                        <ul>
                                            <?php  
                                            $fp = 0; 
                                            
                                            foreach ($flightValue['pricelist'] as $key => $fareList) {
                                                
                                                if($fareList['fareIdentifier'] != 'CORPORATE'){ ?>
                                                
                                                <li>

                                                    <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                    <input type="radio" name="fav_language<?php echo $i; ?>" id="pricecheck<?php echo $fp; ?>" value="<?php echo $fareList['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList['flightId'] == $flightValue['pricelist'][0]['flightId']){ echo "checked"; } ?> onClick="getlightDetails('<?php echo $fareList['flightId'] ; ?>');getFlightDetails('<?php echo $fareList['flightId'] ; ?>','<?php echo $fareList['totalFare'] ; ?>','<?php echo $fareList['adultBaseFare'] ; ?>','<?php echo $fareList['adultTaxFare'] ; ?>','<?php echo $fareList['countadultPax'] ; ?>','<?php echo @$fareList['childBaseFare'] ; ?>','<?php echo @$fareList['childTaxFare'] ; ?>','<?php echo @$fareList['countchildPax'] ; ?>','<?php echo @$fareList['infantBaseFare'] ; ?>','<?php echo @$fareList['infantTaxFare'] ; ?>','<?php echo @$fareList['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList['adultCheckInBaggage']; ?>','<?php echo $fareList['childCheckInBaggage']; ?>','<?php echo $fareList['adultCabinBaggage'];?>','<?php echo $fareList['childCabinBaggage'];?>','<?php echo $fareList['infantCabinBaggage'];?>','<?php echo $fareList['flightId'];?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList['flightId']; ?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); " >&nbsp;&nbsp;

                                                    <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList['totalFare'],2); ?></label>
                                                        
                                                    </div>                                    
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                    <?php  if($fareList['fareIdentifier'] == 'LITE' || $fareList['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList['fareIdentifier'] == 'FLEXI_PLUS' || $fareList['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php } else{  echo $fareList['fareIdentifier']; }  ?>
                                                        <div class="atls-holder">
                                                        <span class="ars-refunsleft ars-lastre">
                                                            <?php 
                                                                if($fareList['adultcabinClassFare'] !=''){
                                                                    echo ucfirst(strtolower($fareList['adultcabinClassFare']));
                                                                } 
                                                            ?>
                                                            <?php if($fareList['mealAdult'] == 'true'){ echo ", Free Meal"; }else if($fareList['mealAdult']== 'false'){ echo ", Paid Meal";  }else{ echo ""; } ?>
                                                                <?php if($fareList['adultrefund'] =='1'){ echo ', Refundable';  }else if($fareList['adultrefund'] == '0'){ echo ', Non Refundable'; }else if($fareList['adultrefund'] == '2'){ echo ', Partial Refundable'; } ?>
                                                            <span class="cursor-pointer"></span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                            <?php 
                                                $fp++; 
                                                } 
                                            } ?>                                
                                        </ul>                                   
                                    </td>
                                    <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;">
                                        <button  type="button" onClick="bookFlight();" id="priceids" value="<?php echo $fareList['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button>
                                    </td>
                                    <?php }else{ ?>
                                    <td>                        
                                        <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onClick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                    </td>
                                    <?php } ?>
                                    <tr>
                                        <td class="content" colspan="6">
                                            <div id="show-moretfi<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
                                            <div id="show-more-contenttfi<?php echo $i; ?>" style="display: none;">
                                                <div id="show-lesstfi<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
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
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['departureTime'])); ?> ,<?php echo $departureTime; ?></span>
                                                                    <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>                                                     
                                                                </td>
                                                                <td style="background: #dfe9ff;">
                                                                    <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                                    <p style="text-align:center;">Flight Duration</p>
                                                                </td>
                                                                <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['arrivalTime'])); ?> , <?php echo $arrivalTime; ?></span>                                                 
                                                                    <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                                </td>
                                                                </tr>
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
                                                            <?php 
                                                                foreach ($flightValue['pricelist'] as $key => $fareValues) { 

                                                                if($flightValue['pricelist'][0]['flightId'] == $fareValues['flightId'] ){  ?> 
                                                                    
                                                                    <tr style="background: #dfe9ff;">
                                            
                                                                    <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                                    
                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['adultBaseFare'],2); ?> * <?php echo $fareValues['countadultPax']; ?> </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Adult = $fareValues['adultBaseFare'] * $fareValues['countadultPax']; 
                                                                        echo number_format($basefares_Adult,2);?> </td>

                                                                    </tr>

                                                                    <tr style="background: #dfe9ff;">

                                                                    <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2);?>  * <?php echo $fareValues['countadultPax']; ?></td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2) * $fareValues['countadultPax']; ?></td>

                                                                    </tr>
                                                                    
                                                                    <?php 
                                                                    
                                                                    if(@$fareValues['countchildPax'] != 0) { ?>
                                            
                                                                    <tr style="background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['childBaseFare'],2); ?>  * <?php echo  $fareValues['countchildPax'] ; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child = $fareValues['childBaseFare'] * $fareValues['countchildPax'] ; echo number_format($basefares_Child,2);?> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues['childTaxFare'],2); ?> * <?php echo $fareValues['countchildPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child =  $fareValues['childTaxFare'] * $fareValues['countchildPax']; echo number_format($taxes_Child,2); ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                            
                                                                    <?php 
                                                                    
                                                                    if($fareValues['countinfantPax'] != 0) { ?>
                                                                                
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantBaseFare'],2);?> * <?php echo $fareValues['countinfantPax']; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_infant =  $fareValues['infantBaseFare'] *  $fareValues['countinfantPax']; echo number_format($basefares_infant,2); ?> </td>

                                                                    </tr>
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantTaxFare'],2); ?> * <?php echo $fareValues['countinfantPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant = $fareValues['infantTaxFare'] * $fareValues['countinfantPax']; 
                                                                        
                                                                        echo number_format($taxes_Infant,2);
                                                                        
                                                                        ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                                                
                                                                    <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b>Total Fare</b>
                                                                        </td>
                                                                        <td></td>
                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b><i class="fa fa-inr"></i> <?php echo number_format($fareValues['totalFare'],2); ?></b>
                                                                        </td>

                                                                    </tr>

                                                                <?php } 
                                                                } ?>
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
                                                        </div>                                    
                                                        <div id="tab4" class="tab">

                                                        <div id="farerules">
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
                                                    </div>
                                                </section>
                                            </div>
                                        </td>
                                    </tr>
                                </tr>                           
                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {                          
                                        $('#show-more-contenttfi<?php echo $i; ?>').hide();
                                        $('#show-moretfi<?php echo $i; ?>').click(function(){
                                        $('#show-more-contenttfi<?php echo $i; ?>').show(300);
                                        $('#show-lesstfi<?php echo $i; ?>').show();
                                        $('#show-moretfi<?php echo $i; ?>').hide();
                                        });
                                        $('#show-lesstfi<?php echo $i; ?>').click(function(){
                                        $('#show-more-contenttfi<?php echo $i; ?>').hide(150);
                                        $('#show-moretfi<?php echo $i; ?>').show();
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
                            $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

    <!--------------------------------------------------- END CONTENT 5 TAB -------------------------------------------------->
    <!--------------------------------------------------- START CONTENT 6 TAB ------------------------------------>

    <div id="content6" class="pagecont">

        <div class="row">

                <div class="col-lg-3">
                    

                    <a href="#overlay" id="open-overlay"><i class="fa fa-filter"></i></a>


                    <div id="overlay">
                            <a href="#" class="close">&times;</a> 
                    <div id="sidebar" class="col-lg-12">
                        
                        <aside class="detail-sidebar sidebar-wrapper">

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Price</h3>              
                                </div>
                                <input type="hidden" id="hidden_minimum_price" value="1" />
                                <input type="hidden" id="hidden_maximum_price" value="<?php echo $sixthMaximumPrice; ?>" />
                                <p id="price_show5"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($sixthMaximumPrice); ?> </span></p>
                                <div id="price_range5"></div> 
                                        
                            </div>

                            <div class="sidebar-item">
                                <div class="detail-title">
                                <h3>Stops</h3>
                                </div>
                                <div class="sidebar-content">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="directst">
                                            <input type="checkbox" class="dep2" name="stops" id="directstop" onclick="getPage();" value="0">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="directstt">0</span>
                                            </span>
                                        </label>
                                        <!--<p class="filter-p">Direct</p>-->
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="onest">
                                            <input type="checkbox" class="dep2" name="stops" id="onestop" onclick="getPage();" value="1">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="onestt">1</span>
                                            </span>
                                        </label>
                                        <!--<p class="filter-p">1 Stop</p>-->
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="twost">
                                            <input type="checkbox" class="dep2" name="stops" id="twostop" onclick="getPage();" value="2">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="twostt">2</span>
                                            </span>
                                        </label>
                                        <!--<p class="filter-p">2+ Stops</p>-->
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="threest">
                                            <input type="checkbox" class="dep2" name="stops" id="threestop" onclick="getPage();" value="3">
                                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                <span class="black" id="threestt">3+</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                </div>
                            
                            </div>

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Departure <?php  echo $completeResultsixth[0]['departureCity'] ?></h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="before111">
                                                <input type="checkbox"  class="dep2" name="depatureId" id="before11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="before1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                                                <input type="checkbox" class="dep2"  name="depatureId"   id="after11" onclick="getPage();" value="6,7,8,9,10,     11:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                                                <input type="checkbox" class="dep2"  name="depatureId" id="after5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after99">
                                                <input type="checkbox" class="dep2"  name="depatureId" id="after9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="after999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>

                            <div class="sidebar-item" style="height: 135px;">
                                <div class="detail-title">
                                    <h3>Arrival <?php  echo $completeResultsixth[0]['arrivalCity'] ?></h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="arrival111">
                                                <input type="checkbox"  class="dep2" name="arrivalId" id="arrival11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="arrival1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter111">
                                                <input type="checkbox" class="dep2"  name="arrivalId"   id="aafter11" onclick="getPage();" value="6,7,8,9,10, 11:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter555">
                                                <input type="checkbox" class="dep2"  name="arrivalId" id="aafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter5555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-xs-3" style="padding: 5px;">
                                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter99">
                                                <input type="checkbox" class="dep2"  name="arrivalId" id="aafter9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                                    <span class="black" id="aafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>

                            <div class="sidebar-item">
                                <div class="detail-title">
                                <h3>Preferred Airlines</h3>
                                </div>
                                <div class="sidebar-content">

                                    <?php foreach ($flightList6 as $key => $flightValue6) { ?>

                                    <div class="mealBasis__filter" style="display: flex;align-items: center;">
                                        <span class="mealBasis__value"> 
                                            <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue6['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue6['flightName'] ; ?>
                                        </span>
                                        <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                                            <span class="checkmark">
                                            <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue6['flightCode'] ; ?>">
                                            <label for="airline" class="checkmark__label"> </label>
                                            </span>
                                        </span>
                                    </div>

                                    <?php } ?>

                            
                                </div>
                            </div>              
                        </aside>
                    </div>

                        
                        
                    </div>
                    <div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
                </div>

            <div class="col-lg-9">

                <div class="flight-table">
                    <table id="flightSortTable">
                        <tbody>
                        <?php 
                            $totalOneWayFlights = count($completeResultsixth);     
                            $i=0;

                            foreach($completeResultsixth as $key => $flightValue) {

                                $minutes = $flightValue['duration'];
                                $hours = floor($minutes / 60);
                                $min = $minutes - ($hours * 60);

                                // depature time 

                                $departureTime = $flightValue['departureTime'];
                                $departureDate = date("D, M d Y",strtotime($flightValue['departureTime']));

                                // arrival time 
                                $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));
                                $arrivalDate = date("D, M d Y",strtotime($flightValue['arrivalTime']));

                                //stops 

                                $stop = $flightValue['noOfStops'];
                                if($stop == 0){

                                    $st= 'Non-Stop';

                                }else{

                                    $st= $stop. ' Stops';

                                } ?>
                                <tr style="height: 120px;">
                                    <td class="text-center">
                                        <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                                            <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></li>
                                            <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue['flghtName'] ?>
                                            <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime; ?></h6>
                                        <p><?php echo $flightValue['departureCity']  ?></p>                        
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
                                        <p style="text-align: center;"><?php echo $flightValue['arrivalCity'] ?></p> 
                                    </td>
                                    <?php if($bookingType == 'M'){ ?>
                                    <td>
                                        <ul>
                                            <?php  
                                            $fp = 0; 
                                            
                                            foreach ($flightValue['pricelist'] as $key => $fareList) {
                                                
                                                if($fareList['fareIdentifier'] != 'CORPORATE'){ ?>
                                                
                                                <li>

                                                    <div style="display: flex;align-items: center;margin-bottom: 5px;">
                                                    <input type="radio" name="fav_language<?php echo $i; ?>" id="pricecheck<?php echo $fp; ?>" value="<?php echo $fareList['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList['flightId'] == $flightValue['pricelist'][0]['flightId']){ echo "checked"; } ?> onClick="getlightDetails('<?php echo $fareList['flightId'] ; ?>');getFlightDetails('<?php echo $fareList['flightId'] ; ?>','<?php echo $fareList['totalFare'] ; ?>','<?php echo $fareList['adultBaseFare'] ; ?>','<?php echo $fareList['adultTaxFare'] ; ?>','<?php echo $fareList['countadultPax'] ; ?>','<?php echo @$fareList['childBaseFare'] ; ?>','<?php echo @$fareList['childTaxFare'] ; ?>','<?php echo @$fareList['countchildPax'] ; ?>','<?php echo @$fareList['infantBaseFare'] ; ?>','<?php echo @$fareList['infantTaxFare'] ; ?>','<?php echo @$fareList['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList['adultCheckInBaggage']; ?>','<?php echo $fareList['childCheckInBaggage']; ?>','<?php echo $fareList['adultCabinBaggage'];?>','<?php echo $fareList['childCabinBaggage'];?>','<?php echo $fareList['infantCabinBaggage'];?>','<?php echo $fareList['flightId'];?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList['flightId']; ?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); " >&nbsp;&nbsp;

                                                    <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList['totalFare'],2); ?></label>
                                                        
                                                    </div>                                    
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                    <?php  if($fareList['fareIdentifier'] == 'LITE' || $fareList['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList['fareIdentifier'] == 'FLEXI_PLUS' || $fareList['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php } else{  echo $fareList['fareIdentifier']; }  ?>
                                                        <div class="atls-holder">
                                                        <span class="ars-refunsleft ars-lastre">
                                                            <?php 
                                                                if($fareList['adultcabinClassFare'] !=''){
                                                                    echo ucfirst(strtolower($fareList['adultcabinClassFare']));
                                                                } 
                                                            ?>
                                                            <?php if($fareList['mealAdult'] == 'true'){ echo ", Free Meal"; }else if($fareList['mealAdult']== 'false'){ echo ", Paid Meal";  }else{ echo ""; } ?>
                                                                <?php if($fareList['adultrefund'] =='1'){ echo ', Refundable';  }else if($fareList['adultrefund'] == '0'){ echo ', Non Refundable'; }else if($fareList['adultrefund'] == '2'){ echo ', Partial Refundable'; } ?>
                                                            <span class="cursor-pointer"></span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>
                                            <?php 
                                                $fp++; 
                                                } 
                                            } ?>                                
                                        </ul>                                   
                                    </td>
                                    <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;">
                                        <button  type="button" onClick="bookFlight();" id="priceids" value="<?php echo $fareList['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button>
                                    </td>
                                    <?php }else{ ?>
                                    <td>                        
                                        <h6><strong class="color-red-3"><i class="fa fa-inr"></i>&nbsp;<?php echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onClick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php echo $bookingType; ?>');"></h6>
                                    </td>
                                    <?php } ?>
                                    <tr>
                                        <td class="content" colspan="6">
                                            <div id="show-more<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
                                            <div id="show-more-content<?php echo $i; ?>" style="display: none;">
                                                <div id="show-less<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
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
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['departureTime'])); ?> ,<?php echo $departureTime; ?></span>
                                                                    <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>                                                     
                                                                </td>
                                                                <td style="background: #dfe9ff;">
                                                                    <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                                                    <p style="text-align:center;">Flight Duration</p>
                                                                </td>
                                                                <td style="background: #dfe9ff;display: flex;flex-direction: column;">
                                                                    <span style="font-size: 14px;"><?php echo  $departureDate = date("M d",strtotime($flightValue['arrivalTime'])); ?> , <?php echo $arrivalTime; ?></span>                                                 
                                                                    <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                                                </td>
                                                                </tr>
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
                                                            <?php 
                                                                foreach ($flightValue['pricelist'] as $key => $fareValues) { 

                                                                if($flightValue['pricelist'][0]['flightId'] == $fareValues['flightId'] ){  ?> 
                                                                    
                                                                    <tr style="background: #dfe9ff;">
                                            
                                                                    <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                                                    
                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['adultBaseFare'],2); ?> * <?php echo $fareValues['countadultPax']; ?> </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Adult = $fareValues['adultBaseFare'] * $fareValues['countadultPax']; 
                                                                        echo number_format($basefares_Adult,2);?> </td>

                                                                    </tr>

                                                                    <tr style="background: #dfe9ff;">

                                                                    <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2);?>  * <?php echo $fareValues['countadultPax']; ?></td>

                                                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($fareValues['adultTaxFare'],2) * $fareValues['countadultPax']; ?></td>

                                                                    </tr>
                                                                    
                                                                    <?php 
                                                                    
                                                                    if(@$fareValues['countchildPax'] != 0) { ?>
                                            
                                                                    <tr style="background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['childBaseFare'],2); ?>  * <?php echo  $fareValues['countchildPax'] ; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child = $fareValues['childBaseFare'] * $fareValues['countchildPax'] ; echo number_format($basefares_Child,2);?> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues['childTaxFare'],2); ?> * <?php echo $fareValues['countchildPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child =  $fareValues['childTaxFare'] * $fareValues['countchildPax']; echo number_format($taxes_Child,2); ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                            
                                                                    <?php 
                                                                    
                                                                    if($fareValues['countinfantPax'] != 0) { ?>
                                                                                
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantBaseFare'],2);?> * <?php echo $fareValues['countinfantPax']; ?> </td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_infant =  $fareValues['infantBaseFare'] *  $fareValues['countinfantPax']; echo number_format($basefares_infant,2); ?> </td>

                                                                    </tr>
                                                                    <tr>

                                                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantTaxFare'],2); ?> * <?php echo $fareValues['countinfantPax']; ?></td>

                                                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant = $fareValues['infantTaxFare'] * $fareValues['countinfantPax']; 
                                                                        
                                                                        echo number_format($taxes_Infant,2);
                                                                        
                                                                        ?></td>

                                                                    </tr>

                                                                    <?php } ?>
                                                                
                                                                    <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b>Total Fare</b>
                                                                        </td>
                                                                        <td></td>
                                                                        <td style="border: 0px solid #e0e0e0;">
                                                                        <b><i class="fa fa-inr"></i> <?php echo number_format($fareValues['totalFare'],2); ?></b>
                                                                        </td>

                                                                    </tr>

                                                                <?php } 
                                                                } ?>
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
                                                        </div>                                    
                                                        <div id="tab4" class="tab">

                                                        <div id="farerules">
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
                            $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>   
    
    <!--------------------------------------------------- END CONTENT 6 TAB -------------------------------------------------->
    
</div>  

