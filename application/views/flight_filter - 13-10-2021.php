<?php  

  if(count($completeResult) == 0){

      echo "No Flights Available!";


      }else{ ?>
              <div class="flight-table">
                <table>
                  <thead>
                    <tr>
                      <th>Airlines</th>
                      <th>Departure</th>
                      <th>Duration</th>
                      <th>Arrival</th>
                      <th>Price</th>
                      <th></th>
                    </tr>    
                  </thead>
                  <tbody>
                  <?php 
				  
                      
                    // if(count($completeResult) == 0){

                    //     echo "No Flights Available!";


                    // }else{
                        error_reporting(0);
                   //   echo '<pre>'; print_r(($flightList)); die;
                     // $totalOneWayFlights = count($completeResult);

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

                          // arrival time 
                          $arrivalTime = date("H:i",strtotime($flightValue['arrivalTime']));

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

                          $grossTotal = $flightValue['totalFare']; 

                          $uniqueFlightId = $flightValue['flightId'];
                          //echo $uniqueFlightId; die; 


                          // taxes and fares 

                          // $adultTaxes = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['TAF'];
                          // $adultbase = $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['fC']['BF'];



                       // echo   '<pre>'; print_r($completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['fC']['TF']); die;

                    ?>


                            <tr>
                              <td class="text-center"><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" alt=""></td>
                                <td>
                                  <h6><?php echo $flightValue['flghtName'] ?> <?php echo $flightValue['flghtCode'] ?> - <?php echo $flightValue['flghtNumber']; ?> (<?php echo $st; ?>)</h6>
                                  <p><?php echo $flightValue['departureAirportCode']  ?>  <?php echo $flightValue['departureCity']  ?> , <?php echo $flightValue['departureCountry'] ?></p>
                                  <h6><p> <?php echo $departureTime; ?></p></h6>
                                </td>
                                <td>
                                  <h6><?php echo $hours."h ".$min."m" ; ?></h6>
                                </td>
                                <td>
                                  
                                <P><?php echo $flightValue['arrivalAirportCode']  ?>  <?php echo $flightValue['arrivalCity'] ?>, <?php echo $flightValue['arrivalCountry'] ?></P>
                                <h6> <?php echo $arrivalTime; ?></h6>
                                 
                                </td>
                                <?php //if($bookingType == 'O'){ ?>
                                <td>
                                  <h6><strong class="color-red-3"><?php echo $grossTotal; ?></strong></h6>
                                </td>
                                <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/details/")?><?php echo $uniqueFlightId; ?>">BOOK</a></button></td>
                                <?php //}else{?>
                                <!-- <td>
                                 
                                  <h6><strong class="color-red-3"><?php //echo $grossTotal; ?></strong> <input type="radio" name="choose-price" id="selectFlight" value= "<?php //echo $uniqueFlightId; ?>" style="height: 16px;width: 20px;" onclick="getFlight('<?php //echo $uniqueFlightId; ?>,<?php //echo $bookingType; ?>');"></h6>
                                </td> -->
                                <?php //} ?>
                            </tr>
                            <tr>
                              <td class="content" colspan="6">
                                <div id="show-more<?php echo $i; ?>" style="display: block;"><a href="javascript:void(0)">Flight Details</a></div>
                                <div id="show-more-content<?php echo $i; ?>" style="display: none;">
                                  <div id="show-less<?php echo $i; ?>" style="display: none;"><a href="javascript:void(0)">Flight Details</a></div>
                                  <section>
                                    <div class="tabs">
                                      <ul class="tab-links">
                                          <li class="active"><a href="#tab1"> Flight Information</a></li>
                                          <li><a href="#tab2"> Fare Details</a></li>
                                          <li><a href="#tab3"> Baggage Rules</a></li>
                                          <li><a href="#tab4"> Cancellation Rules</a></li>
                                      </ul>
                                     
                                        <div class="tab-content">
                                          <div id="tab1" class="tab active">
                                            <table>
                                              <tbody><tr>
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
                                            </tbody></table>
                                          </div>
                                     
                                            <div id="tab2" class="tab">
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Base Fare(<?php echo count($flightValue['adultBaseFare']); ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $flightValue['adultBaseFare']; ?> </td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Taxes and Fees( <?php echo count($flightValue['adultBaseFare']); ?> Adult )</td>
                                                  <td style="border: 1px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php //echo $adultTaxes; ?></td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;"><b>Total Fare( <?php echo count($flightValue['adultBaseFare']); ?> Adult )</b></td>
                                                  <td style="border: 1px solid #e0e0e0;"><b><i class="fa fa-inr"></i> <?php //echo $adultCount; ?></b></td>
                                                </tr>
                                              </tbody></table>
                                            </div>
                                     
                                            <div id="tab3" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;"><?php echo $flightValue['departureAirportCode']  ?>  - <?php echo $flightValue['arrivalAirportCode']  ?>  (<?php echo $flightValue['flghtCode'] ?>-<?php echo $flightValue['flghtNumber']; ?>)</h6></li>
                                              </ul>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Adult</td>
                                                  <td style="border: 1px solid #e0e0e0;"><?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['bI']['iB']; ?> (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> <?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['ADULT']['bI']['cB']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <?php //error_reporting(0); if($completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['bI']['iB'] != ''){ ?>
                                            <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Child</td>
                                                  <td style="border: 1px solid #e0e0e0;"><?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['bI']['iB']; ?> (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> <?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['CHILD']['bI']['cB']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                              </table>
                                              <?php //}if($completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['iB'] != ''){ ?>
                                              <table>
                                                <tbody><tr>
                                                  <td style="border: 1px solid #e0e0e0;">Baggage Type</td>
                                                  <td style="border: 1px solid #e0e0e0;">Check-In</td>
                                                  <td style="border: 1px solid #e0e0e0;">Cabin</td>
                                                </tr>
                                                <tr>
                                                  <td style="border: 1px solid #e0e0e0;">Infant</td>
                                                  <td style="border: 1px solid #e0e0e0;"><?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['iB']; ?> (1 piece only)</td>
                                                  <td style="border: 1px solid #e0e0e0;"> <?php //echo $completeResult[$i]['totalPriceList'][$j]['fd']['INFANT']['bI']['cB']; ?> (1 piece only)</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <?php //} ?>
                                              <p>* * Only 1 check-in baggage allowed per passenger. You can buy excess baggage as allowed by the airline, however you might have to pay additional charges at airport.</p>
                                            </div>
                                     
                                            <div id="tab4" class="tab">
                                              <ul style="display: flex;width: 100%;padding-top: 10px;padding-bottom: 10px;">
                                                <li><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 27px;"></li>&nbsp;
                                                <li><h6 style="line-height:25px;"><?php //echo $completeResult[$i]['sI'][$j]['da']['code']  ?>  - <?php //echo $completeResult[$i]['sI'][$j]['aa']['code']  ?> </h6></li>
                                              </ul>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p><b>Cancellation Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
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
                                                  </tbody></table>
                                                </div>
                                                <div class="col-md-6">
                                                  <p><b>Reschedule Charges</b></p>
                                                  <table>
                                                    <tbody><tr>
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
                                                  </tbody></table>
                                                </div>
                                              </div>
                                            </div>

                                        </div>

                                    </div>

                                    </section>
                                  
                                  
                                  </div>
                              </td>
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
            