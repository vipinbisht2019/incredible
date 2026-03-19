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

</style>
<div id="sidebar" class="col-lg-3">
    <aside class="detail-sidebar sidebar-wrapper">

        <div class="sidebar-item" style="height: 135px;">
            <div class="detail-title">
                <h3>Price</h3>                
            </div>  
        
            
            <input type="hidden" id="hidden_minimum_price" value="1" />
            <input type="hidden" id="hidden_maximum_price" value="<?php echo $returnMaximumPrice; ?>" />
                <p id="price_show"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($returnMaximumPrice); ?> </span></p>
                    <div id="price_range"></div> 
                    
        </div>

        <div class="sidebar-item">
            <div class="detail-title">
            <h3>Departure Stops</h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="directst">
                            <input type="checkbox" class="dep2" name="stops" id="directstop" onclick="getPage();" value="0">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="directstt">0</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">Direct</p>-->
                    </div>
                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="onest">
                            <input type="checkbox" class="dep2" name="stops" id="onestop" onclick="getPage();" value="1">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="onestt">1</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">1 Stop</p>-->
                    </div>
                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="twost">
                            <input type="checkbox" class="dep2" name="stops" id="twostop" onclick="getPage();" value="2">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="twostt">2</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">2+ Stops</p>-->
                    </div>

                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="threest">
                            <input type="checkbox" class="dep2" name="stops" id="threestop" onclick="getPage();" value="2">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="threestt">3+</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">2+ Stops</p>-->
                    </div>
                </div>
            </div>
            <div class="detail-title">
            <h3>Return Stops</h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="redirectst">
                            <input type="checkbox" class="dep2" name="restops" id="redirectstop" onclick="getPage1();" value="0">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="redirectstt">0</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">Direct</p>-->
                    </div>
                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="reonest">
                            <input type="checkbox" class="dep2" name="restops" id="reonestop" onclick="getPage1();" value="1">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="reonestt">1</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">1 Stop</p>-->
                    </div>
                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="retwost">
                            <input type="checkbox" class="dep2" name="restops" id="retwostop" onclick="getPage1();" value="2">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="retwostt">2</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">2+ Stops</p>-->
                    </div>

                    <div class="col-md-3">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="rethreest">
                            <input type="checkbox" class="dep2" name="stops" id="rethreestop" onclick="getPage();" value="2">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="rethreestt">3+</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">2+ Stops</p>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-item" style="height: 135px;">
            <div class="detail-title">
                <h3>Return Price</h3>				  
            </div>	
        
			
			<input type="hidden" id="hidden_reminimum_price" value="1" />
            <input type="hidden" id="hidden_remaximum_price" value="<?php echo $returnMaximumPrice; ?>" />
				<p id="price_showw"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php echo number_format($returnMaximumPrice); ?>  </span></p>
                    <div id="price_rangee"></div> 
					
        </div>

        <div class="sidebar-item">
            <div class="detail-title">
            <h3>Departure From <?php  echo preg_replace("/\([^)]+\)/","",$departure); ?></h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
                    
					
					<div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="before111" >
                            <input type="checkbox"  class="dep2" name="depatureId" id="departbefore11" onclick="getPage(this);" value="0,1,2,3,4,5:59" >
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black"  id="before1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">Before 11am</p>-->
                    </div>
                    <div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after111">
                            <input type="checkbox" class="dep2"  name="depatureId" id="after11" onclick="getPage(this);" value="6,7,8,9,10,11:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="after1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">11am - 5pm</p>-->
                    </div>
                    <div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after55">
                            <input type="checkbox" class="dep2"  name="depatureId" id="departafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="after555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">5pm - 9pm</p>-->
                    </div>
                    <div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="after99">
                            <input type="checkbox" class="dep2"  name="depatureId" id="after9" onclick="getPage();" value="18,19,20,21,22,23:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="after999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                            </span>
                        </label>
                       <!-- <p class="filter-p">After 9pm</p>-->
                    </div>
					
					
                </div>
            </div>
            <div class="detail-title">
            <h3>Arrival To <?php  echo preg_replace("/\([^)]+\)/","",$destination); ?></h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
    			
    				
    					<div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="retbefore111">
                                <input type="checkbox"  class="dep2" name="returnId" id="retbefore11" onclick="getPage();" value="0,1,2,3,4,5:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="retbefore1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                </span>
                            </label>
                            <!--<p class="filter-p">Before 11am</p>-->
                        </div>
                        <div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="retafter111">
                                <input type="checkbox" class="dep2"  name="returnId" id="retafter11" onclick="getPage();" value="7,8,9,10,11:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="reafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                </span>
                            </label>
                          <!--  <p class="filter-p">11am - 5pm</p>-->
                        </div>
                        <div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="reafter55">
                                <input type="checkbox" class="dep2"  name="returnId" id="reafter5" onclick="getPage();" value="12,13,14,15,16,17:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="reafter555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                </span>
                            </label>
                          <!--  <p class="filter-p">5pm - 9pm</p>-->
                        </div>
                        <div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="reafter99"> 
                                <input type="checkbox" class="dep2"  name="returnId"  id="reafter9" onclick="getPage();" value="18,19,20,21,22,23:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="reafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                </span>
                            </label>
                           <!-- <p class="filter-p">After 9pm</p>-->
                        </div>
    					
    				
    				
    				
                </div>
            </div>
            
        </div>

        <div class="sidebar-item">
            <div class="detail-title">
            <h3>Departure From <?php  echo preg_replace("/\([^)]+\)/","",$destination); ?></h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
                    
					
					<div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="rbefore111" >
                            <input type="checkbox"  class="dep2" name="rdepatureId" id="returnbefore11" onclick="getPage1(this);" value="0,1,2,3,4,5:59" >
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black"  id="rbefore1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">Before 11am</p>-->
                    </div>
                    <div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="rafter111">
                            <input type="checkbox" class="dep2"  name="rdepatureId" id="rafter11" onclick="getPage1(this);" value="6,7,8,9,10,11:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="rafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">11am - 5pm</p>-->
                    </div>
                    <div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="rafter55">
                            <input type="checkbox" class="dep2"  name="rdepatureId" id="rafter5" onclick="getPage1();" value="12,13,14,15,16,17:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="rafter555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">5pm - 9pm</p>-->
                    </div>
                    <div class="col-md-3" style="padding: 5px;">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="rafter99">
                            <input type="checkbox" class="dep2"  name="rdepatureId" id="rafter9" onclick="getPage1();" value="18,19,20,21,22,23:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black" id="rafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                            </span>
                        </label>
                       <!-- <p class="filter-p">After 9pm</p>-->
                    </div>
					
					
                </div>
            </div>
            <div class="detail-title">
            <h3>Arrival To <?php  echo preg_replace("/\([^)]+\)/","",$departure); ?></h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
    			
    				
    					<div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter" id="retabefore111">
                                <input type="checkbox"  class="dep2" name="rreturnId" id="retabefore11" onclick="getPage1();" value="0,1,2,3,4,5:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="retabefore1111"><img src="<?php echo base_url("assets/images/morning_inactive-1.png")?>" style="width: 60%;"> Before 6am</span>
                                </span>
                            </label>
                            <!--<p class="filter-p">Before 11am</p>-->
                        </div>
                        <div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="retaafter111">
                                <input type="checkbox" class="dep2"  name="rreturnId" id="retaafter11" onclick="getPage1();" value="7,8,9,10,11:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="reaafter1111"><img src="<?php echo base_url("assets/images/noon_inactive-1.png")?>" style="width: 60%;"> 6am - 12pm</span>
                                </span>
                            </label>
                          <!--  <p class="filter-p">11am - 5pm</p>-->
                        </div>
                        <div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="reaafter55">
                                <input type="checkbox" class="dep2"  name="rreturnId" id="reaafter5" onclick="getPage1();" value="12,13,14,15,16,17:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="reaafter555"><img src="<?php echo base_url("assets/images/evening_inactive-1.png")?>" style="width: 60%;"> 12pm - 6pm</span>
                                </span>
                            </label>
                          <!--  <p class="filter-p">5pm - 9pm</p>-->
                        </div>
                        <div class="col-md-3" style="padding: 5px;">
                            <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter " id="reaafter99"> 
                                <input type="checkbox" class="dep2"  name="rreturnId"  id="reaafter9" onclick="getPage1();" value="18,19,20,21,22,23:59">
                                <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                    <span class="black" id="reaafter999"><img src="<?php echo base_url("assets/images/night_inactive-1.png")?>" style="width: 60%;"> After 6pm</span>
                                </span>
                            </label>
                           <!-- <p class="filter-p">After 9pm</p>-->
                        </div>
    					
    				
    				
    				
                </div>
            </div>
            
        </div>
        

        <!-- <div class="sidebar-item" style="height: 135px;">
            <div class="detail-title">
                <h3>Return Price</h3>				  
            </div>	
        
			
			<input type="hidden" id="hidden_reminimum_price" value="1" />
            <input type="hidden" id="hidden_remaximum_price" value="<?php //echo $returnMaximumPrice; ?>" />
				<p id="price_showw"><span class="fa fa-rupee"> 0 </span> - <span class="fa fa-rupee"> <?php //echo number_format($returnMaximumPrice); ?>  </span></p>
                    <div id="price_rangee"></div> 
					
        </div> -->

        <div class="sidebar-item">
            <div class="detail-title">
            <h3>Departure Airlines</h3>
            </div>
            <div class="sidebar-content">
        
                <?php foreach ($flightList as $key => $flightValue) { ?>
                
                <div class="mealBasis__filter" style="display: flex;align-items: center;">
                    <span class="mealBasis__value"> 
                        <img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue['flightName'] ; ?>
                    </span>
                    <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                        <!-- <span class="airline__total-price">?1,625.70 &nbsp;</span> -->
                        <span class="checkmark">
                        <input type="checkbox" name="airline" onclick="getPage();" class="checkmark__input" value="<?php echo $flightValue['flightCode'] ; ?>">
                        <label for="airline" class="checkmark__label"> </label>
                        </span>
                    </span>
                </div>

                <?php } ?>
                


            <!--<form>
                <?php foreach ($flightList as $key => $flightValue) { ?>
                
                <div class="checkbox">
                    <label>
                    <input type="checkbox" onclick="getPage();" name="airline" value="<?php //echo $flightValue['flightCode'] ; ?>"><img src="<?php //echo base_url('uploads/flights/');?><?php //echo $flightValue['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php //echo $flightValue['flightName'] ; ?>
                    </label>
                </div>

                <?php } ?>
                
            
            </form>-->


            </div>
        </div> 
        
        <div class="sidebar-item">
            <div class="detail-title">
            <h3>Return Airlines</h3>
            </div>
            <div class="sidebar-content">
           
                <?php foreach ($returnFlightList as $key => $returnflightValue) { ?>
                
                <div class="mealBasis__filter" style="display: flex;align-items: center;">
                    <span class="mealBasis__value"> 
                        <img src="<?php echo base_url('uploads/flights/');?><?php echo $returnflightValue['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $returnflightValue['flightName'] ; ?>
                    </span>
                    <span class="starrating__check" style="display: flex;align-items: center;line-height: 10px;">
                        <!-- <span class="airline__total-price">?1,625.70 &nbsp;</span> -->
                        <span class="checkmark">
                        <input type="checkbox" name="airline_return" onclick="getPage1();" class="checkmark__input" value="<?php echo $returnflightValue['flightCode'] ; ?>">
                        <label for="airline" class="checkmark__label"> </label>
                        </span>
                    </span>
                </div>

                <?php } ?>
                
            


            <!--<form>
                <?php foreach ($returnFlightList as $key => $returnflightValue) { ?>
                
                <div class="checkbox">
                    <label>
                    <input type="checkbox" onclick="getPage1();" name="airline_return" value="<?php //echo $returnflightValue['flightCode'] ; ?>"><img src="<?php //echo base_url('uploads/flights/');?><?php //echo $returnflightValue['flightCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php //echo $returnflightValue['flightName'] ; ?>
                    </label>
                </div>

                <?php } ?>
                
            
            </form>-->


            </div>
        </div> 
    </aside>
</div>