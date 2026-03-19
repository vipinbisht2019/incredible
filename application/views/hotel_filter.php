<?php //print_r($hotelList);?>
<div class="col-sm-9">
            <div style="position:sticky;top:123px;z-index: 2;background: #fff;">
              <span style="font-weight: 500;font-size: 14px;padding-top: 5px;padding-bottom: 5px;margin:15px;margin-top:30px;margin-bottom:30px;"> Found <?php echo count($hotelList); ?> hotels for <?php echo $cityName; ?></span>
                <ul style="list-style:none;display: flex;padding-top:2px;padding-bottom: 2px;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">
                  <li style="flex:1;font-size:12px;">Sort By</li>
                  <li style="flex:1;font-size:12px;" >Rating <i class="fa fa-caret-down" id="rotate" aria-hidden="true"></i></li>
                  <li style="flex:1;font-size:12px;">Preffered <i class="fa fa-caret-down" id="rotate1" aria-hidden="true"></i></li>
                  <li style="flex:1;font-size:12px;">Price <i class="fa fa-caret-down" id="rotate2" aria-hidden="true"></i></li>
                </ul>
            </div>
            <div class="row">
            <?php 

                  foreach($hotelList as $key => $hotelValue){ 
                  
                ?>
                <div class="col-sm-12"> 
                  <section class="popular-packages package-inner pad-bottom-80">
                    <div class="">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="room-main">
                            <div class="room-item mar-bottom-30">
                              <div class="row">
                                <div class="col-lg-3">
                              
                                  <div class="row2Wrap">

                                  
                                    <div class="slider" id="slider3">
                                      <div style="background-image:url(<?php echo $hotelValue['hotelImage']; ?>)">
                                    
                                      </div>
                                    
                                      <i class="left" class="arrows" style="z-index:2; position:absolute;display: none;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
                                      <i class="right" class="arrows" style="z-index:2; position:absolute;display: none;">
                                        <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
                                      </i>
                                    
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-9">
                                  <div class="room-content">
                                    
                                    <div class="row">
                                      <div class="col-md-12">
                                      <div class="col-md-8" style="padding: 0px;">
                                        <h3><a href="#"><?php echo $hotelValue['hotelName']; ?></a></h3>
                                    <div class="deal-rating" style="margin-bottom: 0px;">
                                      <?php 
                                      $star = $hotelValue['hotelRating'];
                                      
                                      $total_star = 5;
                                      $rest_star = $total_star - $star;
                                      
                                      for($ii=0;$ii<$star;$ii++)
                                      {
                                      ?>
                                      <span class="fa fa-star checked"></span>
                                        
                                      <?php } ?>
                                      
                                    <?php   for($jj=0;$jj<$rest_star;$jj++)
                                      {
                                      ?>
                                      <span class="fa fa-star-o"></span>
                                        
                                      <?php } ?>
                    
                    
        
                                    </div>
                                    <div class="HotelCardstyles__LocationNameWrapper-sc-1s80tyk-2 qrDUo"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1.3rem" height="1.3rem" margin="0 0.2rem 0 0" fill="#2274E0" class="HappyMapPointerIcon-sc-8ontf-0 kWMSiB">
                                      <path d="M11.052 12.15h.099C16 12.566 16 13.576 16 14.01 16 15.806 10.455 16 8 16s-8-.194-8-1.991c0-.434 0-1.444 4.822-1.856a.67.67 0 01.703.615.672.672 0 01-.59.727c-.836.063-1.668.18-2.49.35a.167.167 0 00-.13.165c0 .078.053.147.13.164 1.83.355 3.692.516 5.555.479a26.425 26.425 0 005.556-.479.168.168 0 00.13-.164.168.168 0 00-.13-.165 19.59 19.59 0 00-2.517-.352.672.672 0 01-.609-.728.669.669 0 01.72-.614zM7.852 0c2.7 0 4.889 2.213 4.889 4.943 0 2.185-3.027 7.207-4.329 9.266a.663.663 0 01-1.12 0C5.99 12.15 2.963 7.128 2.963 4.943 2.963 2.213 5.152 0 7.852 0zm0 2.354c-1.284 0-2.326 1.053-2.326 2.352 0 1.3 1.042 2.352 2.327 2.352 1.284 0 2.326-1.053 2.326-2.352 0-1.3-1.042-2.352-2.326-2.352z">
                                      </path>
                                      </svg>
                                      <span class="PersuasionHoverTextstyles__WrapperDiv-sc-1c06rw1-13 csdwmX">
                                        <span type="customLocation" class="PersuasionHoverTextstyles__HoverTargetWrapperDiv-sc-1c06rw1-2 cnDklP">
                                          <div color="#2274E0" type="customLocation" class="PersuasionHoverTextstyles__TextWrapperSpan-sc-1c06rw1-14 eokYuJ"><span><?php echo $hotelValue['hotelAddress']; ?>, <?php echo $hotelValue['hotelCityName']; ?>, <?php echo $hotelValue['hotelCountryName']; ?> </span></div>
                                        </span>
                                      </span>
                                    </div>
                                
                                  </div>
                                    
                                
                                <div class="col-md-4">
                                  <div class="fw-btns">
                                
                                    <div class="tooltip-container">
                                      <div class="fw-price">
                                    
                                          <p><b>Starts From</b></p>
                                          <p> 
                                          
                                            <span style="font-size: 20px;"><i class="fa fa-inr"></i><?php echo $hotelValue['totalPrice']; ?></span>
                                          </p>
                                          <ul class="price-value-holder txt-ar full srp-pah-theme ng-scope" style="width:100%;margin-bottom: 0px;">
                                            <li><span class="price-night fs-11 ng-binding" style="font-weight: 500;"><?php echo $hotelValue['mealInfo']; ?></span></li>
                                          </ul>
                                          <p style="margin-bottom: 5px;"><?php echo $nights; ?> Night (s)</p>
                                      </div>
                                    
                                
                                    
                                    <a href="<?php echo base_url('hotels/booking_hotels/')?><?php echo $hotelValue['hotelId']; ?>" class="btn btn-red btn-clr" tabindex="0" target="_blank">Select Room</a>
                                  </div>
                                </div>
                              </div></div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <?php } ?>
               
              
              </div>


              <!-- <div class="pager_wrapper">
                <ul class="pager clearfix">
                  <li class="prev"><a href="#">Previous</a></li>
                  <li class="li"><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li class="li"><a href="#">3</a></li>
                  <li class="li"><a href="#">4</a></li>
                  <li class="li"><a href="#">5</a></li>
                  <li class="li"><a href="#">6</a></li>
                  <li class="li"><a href="#">7</a></li>
                  <li class="li"><a href="#">8</a></li>
                  <li class="li"><a href="#">9</a></li>
                  <li class="li"><a href="#">10</a></li>
                  <li class="next"><a href="#">Next</a></li>
                </ul>
              </div> -->
            </div>
          </div>