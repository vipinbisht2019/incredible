<div id="flightSelectionBhanu">
  <div class="flight-head scnd-stcky" style="padding-bottom: 0px;"> 
    <div class="bottom-selectright">
      <!-----------------------------------------------FIrst Flight ------------------------------------------->
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResult[0]['flghtCode']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResult[0]['flghtName']; ?>
            <span class="bottom-gridcode"><?php echo $completeResult[0]['flghtCode']; ?> - <?php echo $completeResult[0]['flghtNumber']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResult[0]['departureTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResult[0]['departureAirportCode']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
              <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResult[0]['arrivalTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResult[0]['arrivalAirportCode']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($completeResult[0]['pricelist'][0]['totalFare'],2); ?></h5>
        </div>
      </div>
      <!-----------------------------------------------Second Flight ------------------------------------------->
      <?php if(count($completeResultReturn) > 0){ ?>
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn[0]['flghtCode']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultReturn[0]['flghtName']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultReturn[0]['flghtCode']; ?> - <?php echo $completeResultReturn[0]['flghtNumber']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResultReturn[0]['departureTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultReturn[0]['departureAirportCode']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
            <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultReturn[0]['arrivalTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultReturn[0]['arrivalAirportCode']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultReturn[0]['pricelists'][0]['totalFare'],2); ?></h5>
        </div>
      </div>
      <?php } ?>
      <!-----------------------------------------------Third Flight ------------------------------------------->
      <?php if(count($completeResultthird) > 0){ ?>
        <div class="asp-first">
          <div class="col-sm-4 no-padding">
            <span class="col-sm-4 ars-listair no-padding">
              <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultthird[0]['flghtCode']; ?>.png">
            </span>
            <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultthird[0]['flghtName']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultthird[0]['flghtCode']; ?> - <?php echo $completeResultthird[0]['flghtNumber']; ?></span>
            </span>
          </div>
          <div class="col-sm-5 no-padding">
            <ul class="ars-list">
              <li>
                <p><?php echo $depatureTime = date("H:i",strtotime($completeResultthird[0]['departureTime'])); ?></p> 
                <span class="graycolor"><?php echo $completeResultthird[0]['departureAirportCode']; ?></span>
              </li>
              <li>
                <span class="arrow-selectbottom"></span>
              </li>
              <li>
                <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultthird[0]['arrivalTime'])); ?></p> 
                <span class="graycolor"><?php echo $completeResultthird[0]['arrivalAirportCode']; ?></span>
              </li>
            </ul>
          </div>
          <div class="col-sm-3 no-padding">
            <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultthird[0]['pricelists'][0]['totalFare'],2); ?></h5>
          </div>
        </div>
      <?php } ?>
      <!-----------------------------------------------Fourth Flight ------------------------------------------->
      <?php if(count($completeResultforth) > 0){ ?>
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultforth[0]['flghtCode']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultforth[0]['flghtName']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultforth[0]['flghtCode']; ?> - <?php echo $completeResultforth[0]['flghtNumber']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResultforth[0]['departureTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultforth[0]['departureAirportCode']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
                <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultforth[0]['arrivalTime'])); ?></p> 
                <span class="graycolor"><?php echo $completeResultforth[0]['arrivalAirportCode']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultforth[0]['pricelist'][0]['totalFare'],2); ?></h5>
        </div>
      </div>
      <?php } ?>
      <?php if(count($completeResultfifth) > 0){ ?>
      <!-----------------------------------------------Fifth Flight ------------------------------------------->
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultfifth[0]['flghtCode']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultfifth[0]['flghtName']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultfifth[0]['flghtCode']; ?> - <?php echo $completeResultfifth[0]['flghtNumber']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResultfifth[0]['departureTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultfifth[0]['departureAirportCode']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
            <p><?php echo $arrivalTime = date("H:i",strtotime($completeResultfifth[0]['departureTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultfifth[0]['departureAirportCode']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultfifth[0]['pricelist'][0]['totalFare'],2); ?></h5>
        </div>
      </div>

      <?php } ?>
      <?php if(count($completeResultsixth) > 0){ ?>
      <!-----------------------------------------------Sixth Flight ------------------------------------------->
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultsixth[0]['flghtCode']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultsixth[0]['flghtName']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultsixth[0]['flghtCode']; ?> - <?php echo $completeResultsixth[0]['flghtNumber']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResultsixth[0]['departureTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultsixth[0]['departureAirportCode']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
            <p><?php echo $arrivalTime = date("H:i",strtotime($completeResultsixth[0]['departureTime'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultsixth[0]['departureAirportCode']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($completeResultsixth[0]['pricelist'][0]['totalFare'],2); ?></h5>
        </div>
      </div>
      <?php } ?>
    </div>

    <div class="row" style="display: flex;overflow-x: hidden;">    
      <div class="col-md-12">
        <div class="row" style="display: flex;align-items: center;height: 47px;">
          <div class="col-md-6" style="padding-right: 0;">
            <table>
              <tbody>
                <tr style="background:#282828">
                  
                  <td style="border: none;padding: 0px 5px;"><h3 style="margin-top: 0px;margin-bottom: 0;padding-bottom: 0;text-align: right;font-weight:600;color:#fff;padding-top: 0px;"><i class="fa fa-inr"></i>
                  <?php 

                    if(count($completeResultReturn) > 0 || count($completeResultthird) > 0 || count($completeResultforth) > 0 || count($completeResultfifth) > 0 || count($completeResultsixth) > 0 ){

                      $totaFare = $completeResultsixth[0]['pricelist'][0]['totalFare'] + $completeResultfifth[0]['pricelist'][0]['totalFare'] + $completeResultforth[0]['pricelist'][0]['totalFare'] + $completeResultthird[0]['pricelists'][0]['totalFare'] + $completeResultReturn[0]['pricelists'][0]['totalFare'] + $completeResult[0]['pricelist'][0]['totalFare']; echo number_format($totaFare,2); 

                    }

                  ?></h3>
                    
                </td>

                  
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-5" style="padding-left: 0;">
            <table>
              <tbody>
                <tr style="background:#282828">
                  <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsmultiway/")?><?php echo  $completeResult[0]['pricelist'][0]['flightId']; ?>/<?php echo  $completeResultReturn[0]['pricelists'][0]['flightId']; ?>/<?php echo  $completeResultthird[0]['pricelists'][0]['flightId']; ?>/<?php echo  $completeResultforth[0]['pricelist'][0]['flightId']; ?>/<?php echo  $completeResultfifth[0]['pricelist'][0]['flightId']; ?>/<?php echo  $completeResultsixth[0]['pricelist'][0]['flightId']; ?>" style="color: #fff">BOOk</a></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>