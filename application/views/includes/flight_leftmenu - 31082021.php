<!-- <?php //echo '<pre>'; print_r($flightList);?> -->
<div id="sidebar" class="col-lg-3">
    <aside class="detail-sidebar sidebar-wrapper">
        <div class="sidebar-item">
            <div class="detail-title">
            <h3>Departure</h3>
            </div>
            <div class="sidebar-content">
                <div class="row">
                    <div class="col-md-6">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter active">
                            <input type="checkbox"  class="dep2" name="depatureId" onclick="getPage();" value="0,1,2,3,4,5,6,7,8,9,10:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black">Before 11am</span>
                            </span>
                        </label>
                        <!--<p class="filter-p">Before 11am</p>-->
                    </div>
                    <div class="col-md-6">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter ">
                            <input type="checkbox" class="dep2"  name="depatureId" onclick="getPage();" value="11,12,13,14,15,16,16:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black">11am - 5pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">11am - 5pm</p>-->
                    </div>
                    <div class="col-md-6">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter ">
                            <input type="checkbox" class="dep2"  name="depatureId" onclick="getPage();" value="17,18,19,20,20:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black">5pm - 9pm</span>
                            </span>
                        </label>
                      <!--  <p class="filter-p">5pm - 9pm</p>-->
                    </div>
                    <div class="col-md-6">
                        <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter ">
                            <input type="checkbox" class="dep2"  name="depatureId" onclick="getPage();" value="21,22,23:59">
                            <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                                <span class="black">After 9pm</span>
                            </span>
                        </label>
                       <!-- <p class="filter-p">After 9pm</p>-->
                    </div>
                </div>
            </div>
            <!-- <div class="detail-title">
            <h3>Return</h3>
            </div>
            <div class="sidebar-content">
            <div class="row">
                <div class="col-md-6">
                <p class="filter-p">Before 11am</p>
                </div>
                <div class="col-md-6">
                <p class="filter-p">11am - 5pm</p>
                </div>
                <div class="col-md-6">
                <p class="filter-p">5pm - 9pm</p>
                </div>
                <div class="col-md-6">
                <p class="filter-p">After 9pm</p>
                </div>
            </div>
            </div> -->
            <div class="detail-title">
            <h3>Stops</h3>
            </div>
            <div class="sidebar-content">
            <div class="row">
                <div class="col-md-6">
                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter ">
                        <input type="checkbox" class="dep2" name="stops" onclick="getPage();" value="0">
                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                            <span class="black">Direct</span>
                        </span>
                    </label>
                    <!--<p class="filter-p">Direct</p>-->
                </div>
                <div class="col-md-6">
                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter ">
                        <input type="checkbox" class="dep2" name="stops" onclick="getPage();" value="1">
                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                            <span class="black">1 Stop</span>
                        </span>
                    </label>
                    <!--<p class="filter-p">1 Stop</p>-->
                </div>
                <div class="col-md-6">
                    <label class="filter-p dep1 flexCol alignItemsCenter justifyCenter ">
                        <input type="checkbox" class="dep2" name="stops" onclick="getPage();" value="2">
                        <span class="dep3 font11 dF alignItemsCenter justifyCenter">
                            <span class="black">2+ Stops</span>
                        </span>
                    </label>
                    <!--<p class="filter-p">2+ Stops</p>-->
                </div>
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
                <h3>Price</h3>
            </div>
            <div id="slider" onclick="getPage();"></div>
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
            <form>
                <?php foreach ($flightList as $key => $flightValue) { ?>
                
                <div class="checkbox">
                    <label>
                    <input type="checkbox" onclick="getPage();" name="airline" value="<?php echo $flightValue['flghtCode'] ; ?>"><img src="<?php echo base_url('uploads/flights/');?><?php echo $flightValue['flghtCode'] ; ?>.png" style="width: 9%;padding-right: 2px;"> <?php echo $flightValue['flghtName'] ; ?>
                    </label>
                </div>

                <?php } ?>
                
            
            </form>
            </div>
        </div>              
    </aside>
</div>