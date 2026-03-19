<div class="col-md-6">
    <div class="flight-table">
      <table>
        <thead>
          <tr>
            <th>Airlines</th>
            <th>Departure</th>
            <th>Duration</th>
            <th>Arrival</th>
            <th>Price</th>
          </tr>    
        </thead>
        <tbody>
          <?php $i=0; foreach($completeResult as $key => $flightValue) {                        
        
            $minutes = $flightValue['duration'];
            $hours = floor($minutes / 60);
            $min = $minutes - ($hours * 60);
    
    
            $departureTime = date("H:i",strtotime($flightValue['departureTime']));
            $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));

            $stop = $flightValue['noOfStops'];
            if($stop == 0){

              $st= 'Non-Stop';

            }else{

              $st= $stop. ' Stops';

            }


            $grossTotal = $flightValue['pricelist'][0]['totalFare']; 
            $uniqueFlightId = $flightValue['pricelist'][0]['flightId'];
      
          ?>
          <tr style="height: 120px;">
            <td class="text-center">
              <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></li>
                <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue['flghtName']; ?>
                <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']?></span>
                  </li>
                </ul>

            </td>
            <td>
              <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime; ?></h6>
                <p><?php echo $flightValue['departureCity'] ?></p>	
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
            <td>
              <ul>
                  <?php  $fp = 0; 
                    foreach ($flightValue['pricelist'] as $key => $fareList) { 
                      // echo "<pre>"; print_r($fareList);
                      if($fareList['fareIdentifier'] != 'CORPORATE'  && $fareList['fareIdentifier'] != 'SPECIAL_RETURN' ){
                      ?>
                    <li>
                      <div style="display: flex;align-items: center;margin-bottom: 5px;">
                      <input type = "hidden" name="flightsId" id="flightsId" value="<?php echo $fareList['flightId']; ?>" <?php if($fareList['flightId'] == $completeResult[0]['pricelist'][0]['flightId']){ echo "checked"; } ?> >
                        <input type="radio" name="fav_language" id="pricecheck<?php echo $fp; ?>" value="<?php echo $fareList['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($completeResult[0]['pricelist'][0]['flightId'] == $fareList['flightId']){ echo "checked"; } ?> onclick="getFlightSelectionBhanu('<?php echo $fareList['flightId'] ; ?>');getFlightSelectList('<?php echo $fareList['flightId'] ; ?>','<?php echo $flightValue['flightName'] ; ?>','<?php echo $flightValue['flghtCode'] ; ?>','<?php echo $flightValue['departureAirportCode'] ; ?>','<?php echo $flightValue['arrivalAirportCode'] ; ?>','<?php echo $flightValue['departureTime'] ; ?>','<?php echo $flightValue['arrivalTime'] ; ?>','<?php echo $flightValue['duration'] ; ?>','<?php echo $flightValue['noOfStops'] ; ?>','<?php echo $fareList['totalFare'] ; ?>');getlightDetails('<?php echo $fareList['flightId'] ; ?>');getFlightDetails('<?php echo $fareList['flightId'] ; ?>','<?php echo $fareList['totalFare'] ; ?>','<?php echo $fareList['adultBaseFare'] ; ?>','<?php echo $fareList['adultTaxFare'] ; ?>','<?php echo $fareList['countadultPax'] ; ?>','<?php echo @$fareList['childBaseFare'] ; ?>','<?php echo @$fareList['childTaxFare'] ; ?>','<?php echo @$fareList['countchildPax'] ; ?>','<?php echo @$fareList['infantBaseFare'] ; ?>','<?php echo @$fareList['infantTaxFare'] ; ?>','<?php echo @$fareList['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList['adultCheckInBaggage']; ?>','<?php echo $fareList['childCheckInBaggage']; ?>','<?php echo $fareList['adultCabinBaggage'];?>','<?php echo $fareList['childCabinBaggage'];?>','<?php echo $fareList['infantCabinBaggage'];?>','<?php echo $fareList['flightId'];?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList['flightId']; ?>','<?php echo $flightValue['departureAirportCode']  ?>','<?php echo $flightValue['arrivalAirportCode']; ?>');">&nbsp;&nbsp;

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
                              <?php if($fareList['mealAdult']!= ''){ echo $fareList['mealAdult']; } ?>
                                <?php if($fareList['adultrefund'] =='1'){ echo 'Refundable';  }else if($fareList['adultrefund'] == '0'){ echo 'Non Refundable'; }else if($fareList['adultrefund'] == '2'){ echo 'Partial Refundable'; } ?>
                              <span class="cursor-pointer"></span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </li>
                  <?php $fp++; }} ?>
              </ul>
            </td>
          </tr> 
          <tr>
            <td class="content" colspan="6">
              <div id="show-more<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
              <div id="show-more-content<?php echo $i; ?>" style="display: none;">
                <div id="show-less<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
                  <section>
                    <div class="tabs">
                      <ul class="tab-links">
                        <li class="active"><a href="#tab1"> Flight Information</a></li>
                        <li><a href="#tab2"> Fare Details</a></li>
                        <li><a href="#tab3"> Baggage Rules</a></li>
                        <li><a href="#tab4"> Fare Rules</a></li>
                      </ul>                                      
                      <div class="tab-content">
                        <div id="tab1" class="tab active">
                          <table>
                            <tbody>                                                
                              <tr>
                                <td class="text-center">
                                  <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt="">
                                </td>
                                <td style="text-align: right;">
                                  <h6 style="display: block;"><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                  <p class="content-p"><?php echo $flightValue['departureAirportName']  ?> , <?php echo $flightValue['departureCountry']  ?></p>
                                  <h6 style="display: block;"><p> <?php echo $departureTime; ?></p></h6>
                                </td>
                                <td>
                                  <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                                  <p style="text-align:center;">Flight Duration</p>
                                </td>
                                <td>
                                  <h6><?php echo $flightValue['arrivalAirportCode']  ?> , <?php echo $flightValue['arrivalCountry']  ?><b> <?php echo $arrivalTime; ?> </b></h6>
                                  <p class="content-p"> <?php echo $flightValue['arrivalAirportName']  ?> , <?php echo $flightValue['arrivalCountry']  ?></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>                                      
                        <div id="tab2" class="tab">
                          <table>
                            <tbody>                                                
                              <?php 
                                foreach ($flightValue['pricelist'] as $key => $fareValues) { 

                                  if($flightValue['pricelist'][0]['flightId'] == $fareValues['flightId'] ){  ?> 
                                
                                    <tr style="background: #dfe9ff;">
                
                                      <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                          
                                      <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['adultBaseFare'],2); ?> * <?php echo $fareValues['countadultPax']; ?> </td>

                                      <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> 
                                        <?php  
                                          $basefares_Adult = $fareValues['adultBaseFare'] * $fareValues['countadultPax']; 
                                          echo number_format($basefares_Adult,2);
                                        ?>  
                                      </td>

                                    </tr>

                                    <tr style="background: #dfe9ff;">

                                      <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                      <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $taxes_Adult = $fareValues['adultTaxFare']; echo number_format($taxes_Adult,2); ?>  * <?php echo $fareValues['countadultPax']; ?></td>

                                      <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $taxes_Adult = $fareValues['adultTaxFare'] * $fareValues['countadultPax']; echo number_format($taxes_Adult,2) ?></td>

                                    </tr>                                                 
                                    <?php if(@$fareValues['countchildPax'] != 0) { ?>
      
                                      <tr style="background: #dfe9ff;">

                                        <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['childBaseFare'],2) ?>  * <?php echo  $fareValues['countchildPax'] ; ?> </td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child = $fareValues['childBaseFare'] * $fareValues['countchildPax'] ; echo number_format($basefares_Child,2); ?> </td>

                                      </tr>
                                      <tr>
                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues['childTaxFare'],2) ?> * <?php echo $fareValues['countchildPax']; ?></td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child =  $fareValues['childTaxFare'] * $fareValues['countchildPax']; 
                                          echo number_format($taxes_Child,2);
                                        ?></td>

                                      </tr>

                                    <?php } ?>                        
                                    <?php if($fareValues['countinfantPax'] != 0) { ?>
                                      <tr>

                                        <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $fareValues['infantBaseFare']; echo number_format($fareValues['infantBaseFare'],2);?> * <?php echo $fareValues['countinfantPax']; ?> </td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantBaseFare'],2) * $fareValues['countinfantPax']; ?> </td>

                                      </tr>
                                      <tr>

                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues['infantTaxFare'],2); ?> * <?php echo $fareValues['countinfantPax']; ?></td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant = $fareValues['infantTaxFare'] * $fareValues['countinfantPax']; echo number_format($taxes_Infant,2); ?></td>

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
                        <div id="tab3" class="tab">
                          <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                            <li>
                              <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;">
                            </li>&nbsp;
                            <li>
                              <h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?>  (<?php echo $flightValue['flghtCode'] ?>-<?php echo $flightValue['flghtNumber']; ?>)</h6>
                            </li>
                          </ul>
                          <table>
                            <tbody>
                              <tr>
                                <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                <td style="border: 1px solid #e0e0e0;">Cabin</td>
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
                          <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                            <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                            <li><h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?> </h6></li>
                          </ul>
                          <div class="row">
                            <div class="col-md-6">
                              <p><b>Cancellation Charges</b></p>
                              <table>
                                <tbody>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                  </tr>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">0-2</td>
                                    <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                  </tr>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">2-96</td>
                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>3,450</td>
                                  </tr>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,900</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="col-md-6">
                              <p><b>Reschedule Charges</b></p>
                              <table>
                                <tbody>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">Incredible Vacation Fee</td>
                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>350</td>
                                  </tr>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">0-2</td>
                                    <td style="border: 1px solid #e0e0e0;">Non Refundable</td>
                                  </tr>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">2-96</td>
                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,960</td>
                                  </tr>
                                  <tr>
                                    <td style="border: 1px solid #e0e0e0;">&gt;96</td>
                                    <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i>2,300</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
              </div>
            </td>
          </tr>
          
          <!--------------------------------------- SHOW HIDE TABS ---------------------------------------------->
          
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
          <?php $i++;} ?>
        </tbody>
      </table>
    </div>
  </div>