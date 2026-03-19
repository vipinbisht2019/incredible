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
        <?php //echo '<pre>';  print_r($completeResultReturn); die;
          $ii=0;
          foreach($completeResultReturn  as $key => $flightValue1) { 
        
            $minutes = $flightValue1['duration'];
            $hours = floor($minutes / 60);
            $min = $minutes - ($hours * 60);

            $departureTime = date("H:i",strtotime($flightValue1['departureTime'])); 
            $arrivalTime = date("H:i",strtotime($flightValue1['arrivalTime']));

            $stop = $flightValue1['noOfStops'];

            if($stop == 0){

              $st= 'Non-Stop';

            }else{

              $st= $stop. ' Stops';

            }

            // $grossTotal = $flightValue1['totalFare'];

            // $uniqueFlightIds = $flightValue1['flightId'];

        ?>
        <tr>
          <td class="text-center">
            <ul style="list-style: none;padding-left: 0px;display:flex;align-items: center;">
              <li>
                <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" alt="">
              </li>
              <li style="font-size:13px;font-weight:600;text-align: left;left: 10px;position: relative;"><?php echo $flightValue1['flghtName'] ?>
                <br><span style="font-size:11px;font-weight:400;"><?php echo $flightValue1['flghtCode']; ?> - <?php echo $flightValue1['flghtNumber']; ?> </span>
              </li>
            </ul>
          </td>
          <td>
            <h6 style="font-size: 18px;color: #363636;font-weight: 600;"> <?php echo $departureTime; ?></h6>
            <p><?php echo $flightValue1['departureCity']; ?></p>
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
            <p style="text-align: center;"><?php echo $flightValue1['arrivalCity']; ?></p>
          </td>
          <td>
            <ul>
              <?php  $fp1 = 0; foreach ($flightValue1['pricelists'] as $key => $fareList1) { 
                
                if($fareList1['fareIdentifier']!='CORPORATE'){ 
                
                ?>
                
                <li>
                  <div style="display: flex;align-items: center;margin-bottom: 5px;">
                    <input type = "hidden" name="flightsIds" id="flightsIds" value="<?php echo $fareList1['flightId']; ?>" <?php if($fareList1['flightId'] == $completeResultReturn[0]['pricelists'][0]['flightId']){ echo "checked"; } ?> >
                    <input type="radio" name="fav_languages" id="pricecheck<?php echo $fp1; ?>" value="<?php echo $fareList1['flightId'] ; ?>"  style="width: 18px;height: 18px;margin-top: 0px;" <?php if($fareList1['flightId'] == $completeResultReturn[0]['pricelists'][0]['flightId']){ echo "checked"; } ?> onclick="getFlightSelectionBhanu1('<?php echo $fareList1['flightId'] ; ?>');getFlightSelectList1('<?php echo $fareList1['flightId'] ; ?>','<?php echo $flightValue1['flightName'] ; ?>','<?php echo $flightValue1['flghtCode'] ; ?>','<?php echo $flightValue1['departureAirportCode'] ; ?>','<?php echo $flightValue1['arrivalAirportCode'] ; ?>','<?php echo $flightValue1['departureTime'] ; ?>','<?php echo $flightValue1['arrivalTime'] ; ?>','<?php echo $flightValue1['duration'] ; ?>','<?php echo $flightValue1['noOfStops'] ; ?>','<?php echo $fareList1['totalFare'] ; ?>');getlightDetails('<?php echo $fareList1['flightId'] ; ?>');getFlightDetails('<?php echo $fareList1['flightId'] ; ?>','<?php echo $fareList1['totalFare'] ; ?>','<?php echo $fareList1['adultBaseFare'] ; ?>','<?php echo $fareList1['adultTaxFare'] ; ?>','<?php echo $fareList1['countadultPax'] ; ?>','<?php echo @$fareList1['childBaseFare'] ; ?>','<?php echo @$fareList1['childTaxFare'] ; ?>','<?php echo @$fareList1['countchildPax'] ; ?>','<?php echo @$fareList1['infantBaseFare'] ; ?>','<?php echo @$fareList1['infantTaxFare'] ; ?>','<?php echo @$fareList1['countinfantPax'] ; ?>'); getFlightBaggageInfo('<?php echo $fareList1['adultCheckInBaggage']; ?>','<?php echo $fareList1['childCheckInBaggage']; ?>','<?php echo $fareList1['adultCabinBaggage'];?>','<?php echo $fareList1['childCabinBaggage'];?>','<?php echo $fareList1['infantCabinBaggage'];?>','<?php echo $fareList1['flightId'];?>','<?php echo $flightValue1['departureAirportCode']  ?>','<?php echo $flightValue1['arrivalAirportCode']; ?>'); getFlightFareRules('<?php echo $fareList1['flightId']; ?>','<?php echo $flightValue1['departureAirportCode']  ?>','<?php echo $flightValue1['arrivalAirportCode']; ?>'); " >&nbsp;&nbsp;
                    <label for="vehicle1" style="margin-bottom: 0px;line-height: 15px;font-size: 16px;font-weight: 600;color: #444;"> <i class="fa fa-inr"></i> <?php echo number_format($fareList1['totalFare'],2); ?></label>

                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <?php  if($fareList1['fareIdentifier'] == 'LITE' || $fareList1['fareIdentifier'] == 'SALE'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: green;background: #c0f1c0;"><?php  echo "SNS PRO"; ?></span><?php }else if($fareList1['fareIdentifier'] == 'PUBLISHED'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #002880;background: #cbd2e1;"><?php  echo "SNS Saver"; ?></span><?php } else if($fareList1['fareIdentifier'] == 'FLEXI_PLUS' || $fareList1['fareIdentifier'] ==  'PREMIUM_FLEX' ){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #a55319;background: #e5d9cf;"><?php  echo "SNS Flexi"; ?></span><?php }else if($fareList1['fareIdentifier'] == 'SPECIAL_RETURN'){ ?> <span class="label label-warning ars-flightlabel ars-refunsleft" style="color: #b1941e;background: #fff5cf;"><?php  echo "SNS Return"; ?></span><?php } else{  echo $fareList1['fareIdentifier']; }  ?>
                        <div class="atls-holder">
                          <span class="ars-refunsleft ars-lastre">
                              <?php 
                                if($fareList1['adultcabinClassFare'] !=''){
                                    //echo ucwords($fareList['adultcabinClassFare']);  
                                    echo ucfirst(strtolower($fareList1['adultcabinClassFare']));
                                  } 
                              ?>
                              <?php if($fareList1['mealAdult']!= ''){ echo $fareList1['mealAdult']; } ?>
                                <?php if($fareList1['adultrefund'] =='1'){ echo 'Refundable';  }else if($fareList1['adultrefund'] == '0'){ echo 'Non Refundable'; }else if($fareList1['adultrefund'] == '2'){ echo 'Partial Refundable'; } ?>
                            <span class="cursor-pointer"></span>
                          </span>
                        </div>
                    </div>
                  </div>
                </li>
              <?php $fp1++; } }?>
            </ul>
          </td>
        </tr> 
        <tr>
          <td class="content" colspan="6">
            <div id="show-mores<?php echo $ii; ?>" style="display: block;"><a href="javascript:void(0)">View Details</a></div>
            <div id="show-mores-content<?php echo $ii; ?>" style="display: none;">
              <div id="show-lesses<?php echo $ii; ?>" style="display: none;"><a href="javascript:void(0)">Hide Details</a></div>
              <section>
                <div class="tabsr">
                  <ul class="tabr-links">
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
                              <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" alt="">
                            </td>
                            <td style="text-align: right;">
                              <h6 style="display: block;"><?php echo $flightValue1['flghtName'] ?> <?php echo $flightValue1['flghtCode'] ?> - <?php echo $flightValue1['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                              <p class="content-p"><?php echo $flightValue1['departureAirportName']  ?> , <?php echo $flightValue1['departureCountry']  ?></p>
                              <h6 style="display: block;"><p> <?php echo $departureTime; ?></p></h6>
                            </td>
                            <td>
                              <div class="flight-detailstyles__BackgroundLn-sc-1i6unua-6 iGruED dF justifyBetween alignItemsCenter backgroundLn"><div class="flight-detailstyles__Oval2-sc-1i6unua-7 dHNyva"></div><span class="padL10 padR10 whiteBg font20"><?php echo $hours."h ".$min."m" ; ?></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2rem" height="2rem" class="Flight__FlightIcon-sc-1w228os-0 fWhqRy"><path d="M31.95 16.262c-.012 0-.012 0 0 0-.337.762-2.238 1.3-2.238 1.3l-8.137-.012-8.863 12.925-2.088-.15 4.063-10.875-.225-1.95-9.588-.025L.499 22.05l-.5.063 1.438-5.663-.475-.375-.113-.088.125-.1.475-.363L.024 9.849l.5.063 4.338 4.6h9.6l.225-1.95-4.025-10.887 2.088-.15 8.825 12.963 8.137.012s2.713.762 2.238 1.763z"></path></svg></div>
                              <p style="text-align:center;">Flight Duration</p>
                            </td>
                            <td>
                              <h6><?php echo $flightValue1['arrivalAirportCode']  ?> , <?php echo $flightValue1['arrivalCountry']  ?><b> <?php echo $arrivalTime; ?> </b></h6>
                              <p class="content-p"> <?php echo $flightValue1['arrivalAirportName']  ?> , <?php echo $flightValue1['arrivalCountry']  ?></p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>                                      
                    <div id="tab2" class="tab">
                      <table>
                      <tbody>                                                
                        <?php foreach ($flightValue1['pricelists'] as $key => $fareValues1) { 

                                if($flightValue1['pricelists'][0]['flightId'] == $fareValues1['flightId'] ){  ?> 
                          
                                  <tr style="background: #dfe9ff;">
          
                                    <td style="border: 0px solid #e0e0e0;">Base Price</td>
                                    
                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['adultBaseFare'],2); ?> * <?php echo $fareValues1['countadultPax']; ?> </td>

                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_Adult1 = $fareValues1['adultBaseFare'] * $fareValues1['countadultPax'];
                                    echo number_format($basefares_Adult1,2);
                                    ?> </td>

                                  </tr>

                                  <tr style="background: #dfe9ff;">

                                    <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues1['adultTaxFare'],2);?>  * <?php echo $fareValues1['countadultPax']; ?></td>

                                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $taxschild1 = $fareValues1['adultTaxFare'] * $fareValues1['countadultPax'];

                                    echo number_format($taxschild1,2);
                                      ?></td>

                                  </tr>
                          
                                  <?php 
                                  
                                      if(@$fareValues['countchildPax'] != 0) { ?>

                                          <tr style="background: #dfe9ff;">

                                            <td style="border: 0px solid #e0e0e0;">Base Price</td>

                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['childBaseFare'],2); ?>  * <?php echo  $fareValues1['countchildPax'] ; ?> </td>

                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_Child1 = $fareValues1['childBaseFare'] * $fareValues1['countchildPax'] ; 
                                            echo number_format($basefares_Child1,2);
                                            ?> </td>

                                          </tr>
                                          <tr>
                                            <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($fareValues1['childTaxFare'],2); ?> * <?php echo $fareValues1['countchildPax']; ?></td>

                                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child1 =  $fareValues1['childTaxFare'] * $fareValues1['countchildPax']; 
                                            echo number_format($taxes_Child1,2);
                                            ?></td>

                                          </tr>

                                      <?php } ?>

                                      <?php if($fareValues1['countinfantPax'] != 0) { ?>
                                      
                                      <tr>

                                        <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['infantBaseFare'],2);?> * <?php echo $fareValues1['countinfantPax']; ?> </td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($fareValues1['infantBaseFare'],2) * $fareValues['countinfantPax']; ?> </td>

                                      </tr>
                                      <tr>

                                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_foramt($fareValues1['infantTaxFare'],2); ?> * <?php echo $fareValues1['countinfantPax']; ?></td>

                                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $taxes_Infant1 = $fareValues1['infantTaxFare'] * $fareValues1['countinfantPax'];
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
                    <div id="tab3" class="tab">
                      <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                        <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                        <li><h6 style="line-height:25px;"><?php echo $flightValue1['departureAirportCode']  ?>  - <?php echo $flightValue1['arrivalAirportCode']  ?>  (<?php echo $flightValue1['flghtCode'] ?>-<?php echo $flightValue1['flghtNumber']; ?>)</h6></li>
                      </ul>
                      <table>
                        <tbody>
                          <tr>
                            <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                            <td style="border: 1px solid #e0e0e0;">Check-In</td>
                            <td style="border: 1px solid #e0e0e0;">Cabin</td>
                          </tr>
                          <?php foreach ($flightValue1['pricelists'] as $key => $baggageInfos) {  
                                  
                                  if($flightValue1['pricelists'][0]['flightId'] == $baggageInfos['flightId'] ){   
                                ?>
                                  
                                    <tr style="background:#dfe9ff;height:40px;">

                                      <td style="border: 0px solid #e0e0e0;"><?php echo $flightValue1['departureAirportCode']  ?>  - <?php echo $flightValue1['arrivalAirportCode']  ?></td>

                                      <td style="border: 0px solid #e0e0e0;">Adult: <?php echo @$baggageInfos['adultCheckInBaggage']; ?><?php if(@$baggageInfos['childCheckInBaggage']!=''){?> , Child :   <?php echo @$baggageInfos['childCheckInBaggage']; }?> <?php if(@$baggageInfos['infantCheckInBaggage']!=''){ ?>, Infant :   <?php echo @$baggageInfos['infantCheckInBaggage']; }?></td>

                                      <td style="border: 0px solid #e0e0e0;">Adult :  <?php echo @$baggageInfos['adultCabinBaggage']; ?> <?php if($baggageInfos['childCabinBaggage'] != ''){ ?>, Child :  <?php echo @$baggageInfo['childCabinBaggage']; } ?> <?php if($baggageInfos['infantCabinBaggage'] != ''){ ?>, Infant :  <?php echo @$baggageInfos['infantCabinBaggage']; } ?></td>

                                    </tr> 
                          <?php } } ?>
                        </tbody>
                      </table>
                    </div>
                    <div id="tab4" class="tab">
                      <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                        <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue1['flghtCode']; ?>.png" style="width: 27px;"></li>&nbsp;
                        <li><h6 style="line-height:25px;"><?php echo $flightValue1['departureAirportCode']; ?>-<?php echo $flightValue1['arrivalAirportCode']; ?> </h6></li>
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

        <!----------------------------------------- ---->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
              $('#show-mores-content<?php echo $ii; ?>').hide();

            $('#show-mores<?php echo $ii; ?>').click(function(){
              $('#show-mores-content<?php echo $ii; ?>').show(300);
              $('#show-lesses<?php echo $ii; ?>').show();
              $('#show-mores<?php echo $ii; ?>').hide();
            });

            $('#show-lesses<?php echo $ii; ?>').click(function(){
              $('#show-mores-content<?php echo $ii; ?>').hide(150);
              $('#show-mores<?php echo $ii; ?>').show();
              $(this).hide();
            });
          });
        </script>
        <script>
            $(document).ready(function() {
              $('.tabsr .tabr-links a').on('click', function(e)  {
                  var currentAttrValue = $(this).attr('href');
          
                  // Show/Hide Tabs
                  $('.tabsr ' + currentAttrValue).fadeIn(400).siblings().hide();
                  // Change/remove current tab to active
                  $(this).parent('li').addClass('active').siblings().removeClass('active');
          
                  e.preventDefault();
                  
                  
              });
            });
        </script>
      <?php  $ii++;} ?>
      </tbody>
    </table>
  </div>
</div>