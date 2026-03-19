<?php  if(count($completeResult) == 0){

echo "No Flights Available!";


}else{ ?>
<div class="row">
    <div class="col-md-12">
      <p> Found 
        <span><b><?php echo $totalFlight;?> Flights</b></span>
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
        <button  class="myButton ast-btnforfilter undefined"  onclick="sortFlightList(0);">Arrival</button>
        <!-- <a onclick="sortFlightList(0);">Arrival</a> -->
      </div>
      <div class="col-sm-2">
        <button class="myButton ast-btnforfilter undefined active "  onclick="sortFlightList(0);" >Price <i class="fa fa-caret-up filter-caret"></i></button>
        <!-- <a onclick="sortFlightList(0);">Price</a> -->
      </div>
      <div class="col-sm-4 no-padding"></div>
    </div>
  </div>
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
                    <!--<h6><?php //echo $flightValue['flghtName'] ?> <?php //echo $flightValue['flghtCode'] ?> - <?php //echo $flightValue['flghtNumber']; ?> (<?php //echo $st; ?>)</h6>-->
                    <p><!--<?php //echo $flightValue['departureAirportCode']  ?>-->  <?php echo $flightValue['departureCity']  ?> <!--, <?php //echo $flightValue['departureCountry'] ?>--></p>
                    
                  </td>
                  <td>
                    <h6 style="display: flex;flex-direction: column;text-align: left;font-size: 13px;"><?php echo $hours."h ".$min."m" ; ?>
                    <div class="relative fliStopsSep">
                      <p class="fliStopsSepLine" style="border-top: 3px solid rgb(102, 137, 221);"></p>
                    </div>
                    <span style="font-size: 9px;"><?php echo $st; ?></span></h6>
                  </td>
                  <td>
                    <h6 style="font-size: 18px;color: #363636;font-weight: 600;justify-content: center;"> <?php echo $arrivalTime; ?></h6> 
                    <p style="text-align: left;"><!--<?php //echo $flightValue['flightlist']['arrivalAirportCode']  ?> --> <?php echo $flightValue['arrivalCity'] ?><!--, <?php //echo $flightValue['arrivalCountry'] ?>--></p>
                  
                   
                  </td>
                  <?php if($bookingType == 'O'){ ?>
                  <td>

                    <ul>
                    <?php  $newflight_Id=array(); $fp = 0; foreach ($flightValue['pricelist'] as $key => $fareList) {
                      
                      //echo "<pre>"; print_r($fareList);
                      $newflight_Id[] = $fareList['flightId'];

                        if($fareList['fareIdentifier'] !='CORPORATE'  && $fareList['fareIdentifier'] != 'SPECIAL_RETURN' ){
                      
                    ?>
                      <li>
                        <div style="display: flex;align-items: center;margin-bottom: 5px;">
                          <input type="radio" class="flightIdsnew" name="fav_language" id="pricecheck<?php echo $fp; ?>" value="<?php echo $fareList['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php //if($fareList['flightId'] == $flightValue['pricelist'][0]['flightId']){ echo "checked"; } ?> onclick="getlightDetails('<?php echo $fareList['flightId'] ; ?>');">&nbsp;&nbsp;

                          <!-- <input type="radio" name="bookingType" value="O"   id="oneway"  <?php //if($fareList['flightId'] == $flightValue['flighPricetList'][0]['flightId']){ echo "checked"; } ?> style="height: 20px;width: 25px;">  -->

                          <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;">  <i class="fa fa-inr"></i> <?php echo number_format($fareList['totalFare'],2); ?></label>

                          <?php //if($fareList['flightId'] == $flightValue['flighPricetList'][0]['flightId']){ echo "checked"; } ?>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                          <?php  if($fareList['fareIdentifier'] == 'LITE' || $fareList['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList['fareIdentifier'] == 'FLEXI_PLUS' || $fareList['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php } else{  echo $fareList['fareIdentifier']; }  ?>
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
                    <?php $fp++; }} ?>
                  
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
                      
                      <?php //foreach ($flightValue['pricelist'] as $key => $fareList) { ?>
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
                        <?php //} ?>
                     
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

                  <!-- <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;"><button  type="button" onclick="bookFlight();" id="priceids" value="<?php //echo $fareList['flightId']; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button></td> -->

                  <td style="border: none;padding: 13px 5px;float: right;position: relative;top: 25px;"><button  type="button" onClick="bookFlight();" id="priceids" value="<?php //echo $newflight_Id[0]; ?>" style="background: #244082;border: 1px solid #244082;padding: 10px 32px;color: #fff;font-weight: 400;border-radius: 3px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;">BOOK</button></td>



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