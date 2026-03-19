<div class="col-sm-3">
    <aside class="detail-sidebar sidebar-wrapper">
        <div class="sidebar-item">

            <div class="sidebar-content">
                <div class="inputWithIcon">
                <input type="text" name="hotel_name" id="hotel_name" onkeyup="getHotelList();" placeholder="Search by Hotel name">
                <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
               
                </div>
                <div class="inputWithIcon">
                <input type="text" name="locName" id="locName" onkeyup="getLocation();" placeholder="Search by Location">
                <i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>

        </div>

        <div class="sidebar-item">
            <div class="detail-title">
                <h3>Price</h3>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-range"></div>
                    </div>
                </div>
                <div class="row slider-labels">
                    <div class="col-xs-4 caption">
                        <strong style="font-size:14px;font-weight:500;"></strong> <span class="fa fa-rupee"  id="slider-range-value1">0</span>
                    </div>
                    <div class="col-xs-4 text-right caption">
                        <strong style="font-size:14px;font-weight:500;"></strong> <span class="fa fa-rupee" id="slider-range-value2">50000</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form>
                            <input type="hidden"  id="hotel_minimum_price" value="0">
                            <input type="hidden" id="hotel_maximum_price" value="50000">
                        </form>
                    </div>
                </div>
            </div>


            <div class="sidebar-content content" style="padding-top: 0;padding-left: 0;">
                <p>
                    <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:500;padding: 0!important;margin: 0!important;height: auto;">
                </p>                
                <div id="slider-ranges" style="width: 150px; margin: 0 auto;"></div>            
            </div>

        </div>

        <div class="sidebar-item">
            <div class="detail-title">
                <h3>Star Rating</h3>
            </div>
            <div class="sidebar-content">
                <p class="starrating">
                <span>
                   
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span class="starrating__value"> </span>
                <span class="starrating__check" style="right:5px;">
                    <span class="checkmark">
                    <input type="checkbox" id="five_rating" name="rating" onclick="getPage();"  class="checkmark__input" value="5"><label for="five_rating" class="checkmark__label"> </label>
                    </span>
                </span>
                </p>
                <p class="starrating">
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span class="starrating__value"> </span>
                <span class="starrating__check" style="right:5px;">
                    <span class="checkmark">
                    <input type="checkbox" id="four_rating"  name="rating" onclick="getPage();"  class="checkmark__input" value="4"><label for="four_rating" class="checkmark__label"> </label>
                    </span>
                </span>
                </p>
                <p class="starrating">
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span class="starrating__value"> </span>
                <span class="starrating__check" style="right:5px;">
                    <span class="checkmark">
                    <input type="checkbox" id="three_routing"  name="rating" onclick="getPage();"  class="checkmark__input" value="3"><label for="three_routing" class="checkmark__label"> </label>
                    </span>
                </span>
                </p>
                <p class="starrating">
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span>
                <span class="starrating__value"> </span>
                <span class="starrating__check" style="right:5px;">
                    <span class="checkmark">
                    <input type="checkbox" id="5_id"  name="rating" onclick="getPage();"  class="checkmark__input" value="2" disabled=""><label for="5_id" class="checkmark__label"> </label>
                    </span>
                </span>
                </p>
                <p class="starrating">
                <span>
                    <img src="<?php echo base_url("assets/images/star.png")?>" class="fill-star" style="width: 15px; margin-right: 2px;">
                </span>
                <span class="starrating__value"> </span>
                <span class="starrating__check" style="right:5px;">
                    <span class="checkmark">
                    <input type="checkbox" id="5_id"   class="checkmark__input" value="1" disabled=""><label for="5_id" class="checkmark__label"> </label>
                    </span>
                </span>
                </p>
                <p class="starrating">
                <span style="font-size:12px;">No Rating</span>
                <span class="starrating__value"> </span>
                <span class="starrating__check" style="right:5px;">
                    <span class="checkmark">
                    <input type="checkbox" id="0_id"  class="checkmark__input" disabled="" value="0"><label for="0_id" class="checkmark__label"> </label>
                    </span>
                </span>
                </p>
                <p class="starrating">
                <span style="font-size:12px;">Special Category</span>
                <span class="starrating__value"> </span>
                <span class="starrating__check" style="right:5px;">
                    <span class="checkmark">
                    <input type="checkbox" id="sc_id" name="sc" class="checkmark__input" value="sc"><label for="sc_id" class="checkmark__label"> </label>
                    </span>
                </span>
                </p>
            
            </div>
        </div>

        <div class="sidebar-item">
            <div class="detail-title">
                <h3>Meal Basis</h3>
            </div>
            <div class="sidebar-content">
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Room Only (1214)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="room_only" name="meals"  onclick="getPage();"  class="checkmark__input" value="ROOM ONLY">
                    <label for="room only" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Breakfast (890)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="breakfast" name="meals"  onclick="getPage();"  class="checkmark__input" value="BREAKFAST">
                    <label for="room only" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Half Board (90)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="half_board" name="meals"  onclick="getPage();"  class="checkmark__input" value="HALF BOARD">
                    <label for="room only" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Full Board (50)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="full_board" name="meals"  onclick="getPage();"  class="checkmark__input" value="FULL BOARD">
                    <label for="room only" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> All Meals (11)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="all_meals" name="meals"  onclick="getPage();"  class="checkmark__input" value="All Meals">
                    <label for="room only" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                
            </div>
        </div>

        <div class="sidebar-item">
            <div class="detail-title">
                <h3>Property Type</h3>
            </div>
            <div class="sidebar-content">
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Hotel (1336)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="hotel" name="property" onclick="getPage();" class="checkmark__input" value="HOTEL">
                    <label for="hotel" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Hostel (11)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="hostel" name="property" onclick="getPage();" class="checkmark__input" value="HOSTEL">
                    <label for="hostel" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Guest House (1)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="guest_house" name="property" onclick="getPage();" class="checkmark__input" value="GUESTHOUSE">
                    <label for="guest_house" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Villa (18)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="villa" name="property" onclick="getPage();" class="checkmark__input" value="VILLA">
                    <label for="villa" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Homestay (3)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="homestay" name="property" onclick="getPage();" class="checkmark__input" value="HOMESTAY">
                    <label for="homestay" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Resort (11)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="resort" name="property" onclick="getPage();" class="checkmark__input" value="RESORT">
                    <label for="resort" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
                <div class="mealBasis__filter">
                <span class="mealBasis__value"> Appartments (5)</span>
                <span class="starrating__check">
                    <span class="checkmark">
                    <input type="checkbox" id="appartments" name="property" onclick="getPage();" class="checkmark__input" value="APPARTMENTS">
                    <label for="appartments" class="checkmark__label"> </label>
                    </span>
                </span>
                </div>
            
            </div>
        </div>        
    </aside>
</div>

