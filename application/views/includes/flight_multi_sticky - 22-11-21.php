<div id="flightSelectionBhanu">
  <div class="flight-head scnd-stcky">                
    <div class="row" style="display: flex;overflow-x: hidden;">
      <div class="col-md-10">
        <div class="row" style="display: flex;overflow-x: scroll;">
          <div class="col-md-6">
            <table>
              <tbody style="border-right: 1px solid #e6e6e6;">
                <?php  $i=0; ?>
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;">

                    <ul>
                      <li><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResult[0]['flghtCode']; ?>.png"></li>
                      <li style="color:#fff;"><?php echo $completeResult[0]['flghtName']; ?></li>
                      <li style="color:#fff;"><?php echo $completeResult[0]['flghtCode']; ?> - <?php echo $completeResult[0]['flghtNumber']; ?></li>
                    </ul>

                    <!--<img src="<?php //echo base_url('uploads/flights/'); ?><?php //echo $completeResult[0]['flghtCode']; ?>.png"><?php //echo $completeResult[0]['flghtCode']; ?><?php //echo $completeResult[0]['flghtName']; ?><?php //echo $completeResult[0]['flghtNumber']; ?>-->
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;color:#fff;"><?php echo  $departureDate = date("D,d M",strtotime($completeResult[0]['departureTime']));?></p>
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResult[0]['departureAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo $depatureTime = date("H:i",strtotime($completeResult[0]['departureTime'])); ?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="font-size: 13px;color: #fff;margin-bottom: 0;">  
                      <?php 

                        $minutes = $completeResult[0]['duration'];
                        $hours = floor($minutes / 60);
                        $min = $minutes - ($hours * 60); 
                        echo $hours."h ".$min."m" ;

                      ?>
                      <br>
                      <?php 

                        $stop = $completeResult[0]['noOfStops'];
                        if($stop == 0){

                          $st= 'Non-Stop';

                        }else{

                          $st= $stop. ' Stops';

                        }
                
                        echo $st;
                      ?>
                    </p>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResult[0]['arrivalAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo $depatureTime = date("H:i",strtotime($completeResult[0]['arrivalTime'])); ?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                  <h6 style="font-size: 20px;margin-bottom: 5px;color:#fff;"><i class="fa fa-inr"></i>  <?php echo number_format($completeResult[0]['pricelist'][0]['totalFare'],2); ?> </h6>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table>
              <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;">

                    <ul>
                      <li><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn[0]['flghtCode']; ?>.png"></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtName']; ?></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtCode']; ?> - <?php echo $completeResultReturn[0]['flghtNumber']; ?></li>
                    </ul>


                    <!--<img src="<?php //echo base_url('uploads/flights/'); ?><?php //echo $completeResultReturn[0]['flghtCode']; ?>.png">-->
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;color:#fff;"><?php echo  $arrivalDate = date("D,d M",strtotime($completeResultReturn[0]['departureTime']));?></p>
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['departureAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['departureTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #fff;margin-bottom: 0;">
                    <?php  $minutes = $completeResultReturn[0]['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60); 
                          
                          echo $hours."h ".$min."m" ;

                          ?><br><?php $stop = $completeResultReturn[0]['noOfStops'];
                          if($stop == 0){

                          $st1 = 'Non-Stop';

                          }else{

                          $st1 = $stop. ' Stops';

                          } 
                          echo $st1;
                
                    ?> </p>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['arrivalAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['arrivalTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                  <h6 style="font-size: 20px;margin-bottom: 5px;color:#fff;"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultReturn[0]['pricelists'][0]['totalFare'],2); ?> </h6>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
          <table>
              <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;">

                    <ul>
                      <li><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn[0]['flghtCode']; ?>.png"></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtName']; ?></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtCode']; ?> - <?php echo $completeResultReturn[0]['flghtNumber']; ?></li>
                    </ul>


                    <!--<img src="<?php //echo base_url('uploads/flights/'); ?><?php //echo $completeResultReturn[0]['flghtCode']; ?>.png">-->
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;color:#fff;"><?php echo  $arrivalDate = date("D,d M",strtotime($completeResultReturn[0]['departureTime']));?></p>
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['departureAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['departureTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #fff;margin-bottom: 0;">
                    <?php  $minutes = $completeResultReturn[0]['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60); 
                          
                          echo $hours."h ".$min."m" ;

                          ?><br><?php $stop = $completeResultReturn[0]['noOfStops'];
                          if($stop == 0){

                          $st1 = 'Non-Stop';

                          }else{

                          $st1 = $stop. ' Stops';

                          } 
                          echo $st1;
                
                    ?> </p>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['arrivalAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['arrivalTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                  <h6 style="font-size: 20px;margin-bottom: 5px;color:#fff;"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultReturn[0]['pricelists'][0]['totalFare'],2); ?> </h6>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
          <table>
              <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;">

                    <ul>
                      <li><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn[0]['flghtCode']; ?>.png"></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtName']; ?></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtCode']; ?> - <?php echo $completeResultReturn[0]['flghtNumber']; ?></li>
                    </ul>


                    <!--<img src="<?php //echo base_url('uploads/flights/'); ?><?php //echo $completeResultReturn[0]['flghtCode']; ?>.png">-->
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;color:#fff;"><?php echo  $arrivalDate = date("D,d M",strtotime($completeResultReturn[0]['departureTime']));?></p>
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['departureAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['departureTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #fff;margin-bottom: 0;">
                    <?php  $minutes = $completeResultReturn[0]['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60); 
                          
                          echo $hours."h ".$min."m" ;

                          ?><br><?php $stop = $completeResultReturn[0]['noOfStops'];
                          if($stop == 0){

                          $st1 = 'Non-Stop';

                          }else{

                          $st1 = $stop. ' Stops';

                          } 
                          echo $st1;
                
                    ?> </p>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['arrivalAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['arrivalTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                  <h6 style="font-size: 20px;margin-bottom: 5px;color:#fff;"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultReturn[0]['pricelists'][0]['totalFare'],2); ?> </h6>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
          <table>
              <tbody style="border-right:  1px dashed rgb(194, 194, 194);">
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;">

                    <ul>
                      <li><img src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn[0]['flghtCode']; ?>.png"></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtName']; ?></li>
                      <li style="color:#fff;"><?php echo $completeResultReturn[0]['flghtCode']; ?> - <?php echo $completeResultReturn[0]['flghtNumber']; ?></li>
                    </ul>


                    <!--<img src="<?php //echo base_url('uploads/flights/'); ?><?php //echo $completeResultReturn[0]['flghtCode']; ?>.png">-->
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="font-size: 11px;font-weight: 500;margin-bottom: 0;color:#fff;"><?php echo  $arrivalDate = date("D,d M",strtotime($completeResultReturn[0]['departureTime']));?></p>
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['departureAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['departureTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;"><p style="font-size: 13px;color: #fff;margin-bottom: 0;">
                    <?php  $minutes = $completeResultReturn[0]['duration'];
                          $hours = floor($minutes / 60);
                          $min = $minutes - ($hours * 60); 
                          
                          echo $hours."h ".$min."m" ;

                          ?><br><?php $stop = $completeResultReturn[0]['noOfStops'];
                          if($stop == 0){

                          $st1 = 'Non-Stop';

                          }else{

                          $st1 = $stop. ' Stops';

                          } 
                          echo $st1;
                
                    ?> </p>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                    <p style="margin-bottom: 3px;color:#fff;"><?php echo $completeResultReturn[0]['arrivalAirportCode']; ?></p>
                    <h6 style="font-size: 15px;margin-bottom: 5px;color:#fff;"><?php echo  $arrivalDate = date("H:i",strtotime($completeResultReturn[0]['arrivalTime']));?></h6>
                  </td>
                  <td style="border: none;padding: 0px 5px;">
                  <h6 style="font-size: 20px;margin-bottom: 5px;color:#fff;"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultReturn[0]['pricelists'][0]['totalFare'],2); ?> </h6>
                </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="row" style="display: flex;align-items: center;height: 65px;">
          <div class="col-md-6" style="padding-right: 0;">
            <table>
              <tbody>
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;"><h3 style="margin-top: 0px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600;color:#fff;"><i class="fa fa-inr"></i><?php $totaFare = $completeResultReturn[0]['pricelists'][0]['totalFare'] + $completeResult[0]['pricelist'][0]['totalFare']; echo number_format($totaFare,2); ?></h3></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-5" style="padding-left: 0;">
            <table>
              <tbody>
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 10px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsreturn/")?><?php echo  $completeResult[0]['pricelist'][0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['pricelists'][0]['flightId']; ?>" style="color: #fff">BOOK</a></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button class="d-btn" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-bottom: 0;height: 35px;line-height: 10px;position: fixed;bottom: 0px;width: 90%;"><a href ="<?php echo base_url("flights/detailsreturn/")?><?php echo  $completeResult[0]['pricelist'][0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['pricelists'][0]['flightId']; ?>" style="color: #fff">BOOK for <i class="fa fa-inr"></i> <?php  $totaFare = $completeResultReturn[0]['pricelists'][0]['totalFare'] + $completeResult[0]['pricelist'][0]['totalFare']; echo number_format($totaFare,2); ?></a></button>
</div>