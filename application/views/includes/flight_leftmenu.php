<?php error_reporting(0);?>
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
        font-weight: 400;
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
<a href="#overlay" id="open-overlay"><i class="fa fa-filter"></i></a>


   <div id="overlay">
        <a href="#" class="close">&times;</a> 
<!-- <?php //echo '<pre>'; print_r($maximumPrice);?> -->
<div id="sidebar" class="col-lg-3">
    
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
                    <!--<p class="filter-p">2+ Stops</p>-->
                </div>
                <div class="col-md-3"></div>
            </div>
            </div>
            <!-- <div class="detail-title">
            <h3>Return Stops</h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
                    <div class="col-md-6">
                    <p class="filter-p">Direct</p>
                    </div>
                    <div class="col-md-6">
                    <p class="filter-p">1 Stop</p>
                    </div>
                    <div class="col-md-6">
                    <p class="filter-p">2+ Stops</p>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="sidebar-item" style="height: 135px;">
            <div class="detail-title">
                <h3>Departure <?php  echo preg_replace("/\([^)]+\)/","",$departure); ?></h3>
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
                        <!--<p class="filter-p">Before 11am</p>-->
                    </div>
                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                            <input type="checkbox" class="dep2"  name="depatureId"   id="after11" onclick="getPage();" value="6,7,8,9,10,     11:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">11am - 5pm</p>-->
                    </div>
                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                            <input type="checkbox" class="dep2"  name="depatureId" id="after5" onclick="getPage();" value="12,13,14,15,16,17:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">5pm - 9pm</p>-->
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
                <h3>Arrival <?php  echo preg_replace("/\([^)]+\)/","",$destination); ?></h3>
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
                       <!-- <p class="filter-p">Before 11am</p> -->
                    </div>
                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter111">
                            <input type="checkbox" class="dep2"  name="arrivalId"   id="aafter11" onclick="getPage();" value="6,7,8,9,10, 11:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="aafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                            </span>
                        </label>
                       <!-- <p class="filter-p">11am - 5pm</p> -->
                    </div>
                    <div class="col-md-3 col-xs-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="aafter555">
                            <input type="checkbox" class="dep2"  name="arrivalId" id="aafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="aafter5555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                            </span>
                        </label>
                       <!-- <p class="filter-p">5pm - 9pm</p> -->
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

        
        

     <!--   <div class="sidebar-item" style="height: 150px;">
            <div class="detail-title">
                <h3>Onword Duration</h3>
            </div>
            <section class="range-slider" id="facet-price-range-slider">
                <input name="range-1" value="0" min="0" max="1250" step="1" type="range" style="border: none;">
                <input name="range-2" value="1250" min="0" max="1250" step="1" type="range" style="border: none;">
            </section>
        </div> -->
        <div class="sidebar-item">
            <div class="detail-title">
            <h3>Preferred Airlines</h3>
            </div>
            <div class="sidebar-content">

                <?php foreach (@$flightList as $key => $flightValue) { ?>

                <div class="mealBasis__filter" style="display: flex;align-items: center;">
                    <span class="mealBasis__value"> 
                        <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue['flightName'] ; ?>
                    </span>
                    <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                        <!-- <span class="airline__total-price">₹1,625.70 &nbsp;</span> -->
                        <span class="checkmark">
                        <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue['flightCode'] ; ?>">
                        <label for="airline" class="checkmark__label"> </label>
                        </span>
                    </span>
                </div>

                 <?php } ?>

            <!--<form>
                <?php //foreach ($flightList as $key => $flightValue) { ?>
                
                <div class="checkbox">
                    <label>
                    <input type="checkbox" onclick="getPage();" name="airline" value="<?php //echo $flightValue['flghtCode'] ; ?>"><img src="<?php //echo base_url('uploads/flights/');?><?php //echo $flightValue['flghtCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php //echo $flightValue['flghtName'] ; ?>
                    </label>
                </div>

                <?php //} ?>
                
            
            </form>-->
            </div>
        </div>              
    </aside>
</div>

    
    
</div>
<div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->