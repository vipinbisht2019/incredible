<!-- <div id="flightSelectionBhanu"> -->
<?php //echo "<pre>"; print_r($completeResult); die; 

  error_reporting(0);
  //echo "<pre>"; print_r($_SESSION); die;

    $adultCount = $_SESSION['adult_user'];
    $childCount = $_SESSION['child_user'];
    $infantCount = $_SESSION['infant_user'];

    $totalAdultFare = $completeResult['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultCount;
    $totalChildFare = @$completeResult['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childCount;
    $totalInfantFare = @$completeResult['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantCount;

    $totalFareResult = $totalAdultFare + @$totalChildFare + @$totalInfantFare; 

    $totalAdultFare1 = $completeResultReturn['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultCount;
    $totalChildFare1 = @$completeResultReturn['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childCount;
    $totalInfantFare1 = @$completeResultReturn['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantCount;

    $totalFareResultReturn = $totalAdultFare1 + @$totalChildFare1 + @$totalInfantFare1; 

    $totalAdultFare2 = $completeResultthird['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultCount;
    $totalChildFare2 = @$completeResultthird['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childCount;
    $totalInfantFare2 = @$completeResultthird['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantCount;

    $totalFareResultthird = $totalAdultFare2 + @$totalChildFare2 + @$totalInfantFare2; 

    $totalAdultFare3 = $completeResultforth['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultCount;
    $totalChildFare3 = @$completeResultforth['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childCount;
    $totalInfantFare3 = @$completeResultforth['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantCount;

    $totalFareResultforth = $totalAdultFare3 + @$totalChildFare3 + @$totalInfantFare3;
    
    $totalAdultFare4 = $completeResultfifth['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultCount;
    $totalChildFare4 = @$completeResultfifth['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childCount;
    $totalInfantFare4 = @$completeResultfifth['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantCount;

    $totalFareResultfifth = $totalAdultFare2 + @$totalChildFare2 + @$totalInfantFare2; 

    $totalAdultFare5 = $completeResultsixth['totalPriceList'][0]['fd']['ADULT']['fC']['TF'] * $adultCount;
    $totalChildFare5 = @$completeResultsixth['totalPriceList'][0]['fd']['CHILD']['fC']['TF'] * $childCount;
    $totalInfantFare5 = @$completeResultsixth['totalPriceList'][0]['fd']['INFANT']['fC']['TF'] * $infantCount;

    $totalFareResultsixth = $totalAdultFare5 + @$totalChildFare5 + @$totalInfantFare5;
?>
  <div class="flight-head scnd-stcky" style="padding-bottom: 0px;"> 
    <div class="bottom-selectright">
      <!-----------------------------------------------FIrst Flight ------------------------------------------->
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResult['sI'][0]['fD']['aI']['code']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResult['sI'][0]['fD']['aI']['name']; ?>
            <span class="bottom-gridcode"><?php echo $completeResult['sI'][0]['fD']['aI']['code']; ?> - <?php echo $completeResult['sI'][0]['fD']['fN']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResult['sI'][0]['dt'])); ?></p> 
              <span class="graycolor"><?php echo $completeResult['sI'][0]['da']['code']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
              <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResult['sI'][0]['at'])); ?></p> 
              <span class="graycolor"><?php echo $completeResult['sI'][0]['aa']['code']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($totalFareResult,2); ?></h5>
        </div>
      </div>
      <!-----------------------------------------------Second Flight ------------------------------------------->
      <?php if(count($completeResultReturn) > 0){ ?>
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultReturn['sI'][0]['fD']['aI']['code']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultReturn['sI'][0]['fD']['aI']['name']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultReturn['sI'][0]['fD']['aI']['code']; ?> - <?php echo $completeResultReturn['sI'][0]['fD']['fN']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResultReturn['sI'][0]['dt'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultReturn['sI'][0]['da']['code']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
            <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultReturn['sI'][0]['at'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultReturn['sI'][0]['aa']['code']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($totalFareResultReturn,2); ?></h5>
        </div>
      </div>
      <?php } ?>
      <!-----------------------------------------------Third Flight ------------------------------------------->
      <?php if(count($completeResultthird) > 0){ ?>
        <div class="asp-first">
          <div class="col-sm-4 no-padding">
            <span class="col-sm-4 ars-listair no-padding">
              <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultthird['sI'][0]['fD']['aI']['code']; ?>.png">
            </span>
            <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultthird['sI'][0]['fD']['aI']['name']; ?>
              <span class="bottom-gridcode"><?php echo $completeResultthird['sI'][0]['fD']['aI']['code']; ?> - <?php echo $completeResultthird['sI'][0]['fD']['fN']; ?></span>
            </span>
          </div>
          <div class="col-sm-5 no-padding">
            <ul class="ars-list">
              <li>
                <p><?php echo $depatureTime = date("H:i",strtotime($completeResultthird['sI'][0]['dt'])); ?></p> 
                <span class="graycolor"><?php echo $completeResultthird['sI'][0]['da']['code']; ?></span>
              </li>
              <li>
                <span class="arrow-selectbottom"></span>
              </li>
              <li>
              <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultthird['sI'][0]['at'])); ?></p> 
                <span class="graycolor"><?php echo $completeResultthird['sI'][0]['aa']['code']; ?></span>
              </li>
            </ul>
          </div>
          <div class="col-sm-3 no-padding">
            <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($totalFareResultthird,2); ?></h5>
          </div>
        </div>
      <?php } ?>
      <!-----------------------------------------------Fourth Flight ------------------------------------------->
      <?php if(count($completeResultforth) > 0){ ?>
        <div class="asp-first">
          <div class="col-sm-4 no-padding">
            <span class="col-sm-4 ars-listair no-padding">
              <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultforth['sI'][0]['fD']['aI']['code']; ?>.png">
            </span>
            <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultforth['sI'][0]['fD']['aI']['name']; ?>
              <span class="bottom-gridcode"><?php echo $completeResultforth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $completeResultforth['sI'][0]['fD']['fN']; ?></span>
            </span>
          </div>
          <div class="col-sm-5 no-padding">
            <ul class="ars-list">
              <li>
                <p><?php echo $depatureTime = date("H:i",strtotime($completeResultforth['sI'][0]['dt'])); ?></p> 
                <span class="graycolor"><?php echo $completeResultforth['sI'][0]['da']['code']; ?></span>
              </li>
              <li>
                <span class="arrow-selectbottom"></span>
              </li>
              <li>
              <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultforth['sI'][0]['at'])); ?></p> 
                <span class="graycolor"><?php echo $completeResultforth['sI'][0]['aa']['code']; ?></span>
              </li>
            </ul>
          </div>
          <div class="col-sm-3 no-padding">
            <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($totalFareResultforth,2); ?></h5>
          </div>
        </div>
      <?php } ?>
      <?php if(count($completeResultfifth) > 0){ ?>
      <!-----------------------------------------------Fifth Flight ------------------------------------------->
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultfifth['sI'][0]['fD']['aI']['code']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultfifth['sI'][0]['fD']['aI']['name']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultfifth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $completeResultfifth['sI'][0]['fD']['fN']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResultfifth['sI'][0]['dt'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultfifth['sI'][0]['da']['code']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
            <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultfifth['sI'][0]['at'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultfifth['sI'][0]['aa']['code']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($totalFareResultfifth,2); ?></h5>
        </div>
      </div>

      <?php } ?>
      <?php if(count($completeResultsixth) > 0){ ?>
      <!-----------------------------------------------Sixth Flight ------------------------------------------->
      <div class="asp-first">
        <div class="col-sm-4 no-padding">
          <span class="col-sm-4 ars-listair no-padding">
            <img class="selectionBox-flightLogo" src="<?php echo base_url('uploads/flights/'); ?><?php echo $completeResultsixth['sI'][0]['fD']['aI']['code']; ?>.png">
          </span>
          <span class="col-sm-8 no-padding asp-totalam select-flightsname"><?php echo $completeResultsixth['sI'][0]['fD']['aI']['name']; ?>
            <span class="bottom-gridcode"><?php echo $completeResultsixth['sI'][0]['fD']['aI']['code']; ?> - <?php echo $completeResultsixth['sI'][0]['fD']['fN']; ?></span>
          </span>
        </div>
        <div class="col-sm-5 no-padding">
          <ul class="ars-list">
            <li>
              <p><?php echo $depatureTime = date("H:i",strtotime($completeResultsixth['sI'][0]['dt'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultsixth['sI'][0]['da']['code']; ?></span>
            </li>
            <li>
              <span class="arrow-selectbottom"></span>
            </li>
            <li>
            <p> <?php echo $arrivalTime = date("H:i",strtotime($completeResultsixth['sI'][0]['at'])); ?></p> 
              <span class="graycolor"><?php echo $completeResultsixth['sI'][0]['aa']['code']; ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-3 no-padding">
          <h5 class="whitecolor"><i class="fa fa-inr"></i>  <?php echo number_format($totalFareResultsixth,2); ?></h5>
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

                      $totaFare = $totalFareResult + $totalFareResultReturn + $totalFareResultthird + $totalFareResultforth + $totalFareResultfifth + $totalFareResultsixth; echo number_format($totaFare,2); 

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
                  <td style="border: none;padding: 0px 5px;"><button style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 0px;margin-bottom: 0;height: 35px;line-height: 10px;"><a href ="<?php echo base_url("flights/detailsmultiway/")?><?php echo  $completeResult['totalPriceList'][0]['id']; ?>/<?php echo  $completeResultReturn['totalPriceList'][0]['id']; ?>/<?php echo  $completeResultthird['totalPriceList'][0]['id']; ?>/<?php echo  $completeResultforth['totalPriceList'][0]['id']; ?>/<?php echo  $completeResultfifth['totalPriceList'][0]['id']; ?>/<?php echo  $completeResultsixth['totalPriceList'][0]['id']; ?>" style="color: #fff">BOOK</a></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->