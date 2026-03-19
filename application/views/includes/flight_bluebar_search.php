<div class="bluebar">      
  <form class="form-inline flight-flex" name="searchflight" id="searchflight"  method="post" action="<?php echo base_url('flights'); ?>">
    <div class="container">
      <ul>

        <li>
          <input type="radio" name="bookingType" value="O"   id="oneway"  <?php if($bookingType == 'O'){ echo "checked" ; } ?> > 
            <span>One Way</span>
        </li>&nbsp;&nbsp;

        <li>
          <input type="radio"name="bookingType" value="R"  id="returnway" <?php if($bookingType == 'R'){ echo "checked" ; } ?> > 
          <span>Round Trip</span>
        </li>&nbsp;&nbsp;

        <li>
          <input type="radio"name="bookingType" value="M"  id="returnway" <?php if($bookingType == 'M'){ echo "checked" ; } ?> > 
          <span>Multi City</span>
        </li>

      </ul>

      <div class="form-group" style="padding: 5px;">
        <label for="text" class="flight-label">From</label><br>
        <input type="text" class="form-control" name="departure" id="search_departure" value="<?php echo $departure; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
      </div>
      
      <div class="form-group" style="position: relative;top: 15px;flex: 0;">
        <svg xmlns="http://www.w3.org/2000/svg" onclick="exchangeCity();" width="14" height="14" fill="#ffffff" class="round-arrow-icon__RoundArrowIcon-sc-1768vww-0 cvXHzb"><path fill="#FFF" d="M10.656 6.46l3.14 3.172a.71.71 0 010 .997l-3.14 3.173a.692.692 0 01-.978-.009.71.71 0 01-.008-.988l1.65-1.669a.178.178 0 00.036-.19.174.174 0 00-.16-.109H7.28a.701.701 0 01-.698-.705c0-.389.313-.705.698-.705h3.918c.07 0 .134-.043.161-.108a.178.178 0 00-.038-.193l-1.65-1.67a.71.71 0 01.008-.988.692.692 0 01.978-.008zM3.344 7.54L.204 4.368a.71.71 0 010-.997L3.344.198a.692.692 0 01.978.009.71.71 0 01.008.988L2.68 2.864a.178.178 0 00-.036.19c.027.065.09.108.16.109H6.72c.385 0 .698.315.698.705a.702.702 0 01-.698.705H2.803a.174.174 0 00-.161.108.178.178 0 00.038.193l1.65 1.67a.71.71 0 01-.008.988.692.692 0 01-.978.008z"></path></svg>
      </div>
      
      <div class="form-group" style="padding: 5px;">
        <label for="text" class="flight-label">To</label><br>
        <input type="text" class="form-control" name="destination" id="search_destination"  value="<?php echo $destination; ?>" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
      </div>
      <div class="form-group" style="padding: 5px;">
        <?php  $departureDate = date("d M y",strtotime($departureDate)); ?>
        <label for="date" class="flight-label">Departure Date</label><br>
        <input type="text" class="form-control" name="departure_date" id="departure_date" value="<?php echo $departureDate; ?>"  style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;">
      </div>
      <div class="form-group" style="padding: 5px;">
      <?php $returnDate = date("d M y",strtotime(@$returnDate)); ?>
        <label for="date" class="flight-label">Return Date</label><br>
        <input type="text" class="form-control" name="return_date" id="return_date" value="<?php if($bookingType=='R') {  echo @$returnDate; } ?>" onClick="exchangeDate();" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;" >
      </div>
      <div class="form-group" style="padding: 5px;">
        <label for="text" class="flight-label">Passenger & Class</label><br>
        <?php $totalPax = $adultPax + @$childPax + @$infantPax; ?>
        <input type="text" name="passenger" id="passenger" value="<?php echo $totalPax;?> Traveller(s), <?php echo $travelClass; ?>" id="bt" onclick="toggle(this)" style="border-radius: 6px;background: #3658a9;border: #3658a9;width: auto;color: #fff;" readonly>
        <div class="traveller-count" id="cont">
          <div>
            <div class="center">
              <div class="row" style="display: grid;padding: 0px;">
                <div class="col-md-6" style="width: 100%;">
                  <p style="font-weight: 500;font-size: 12px;">Adult<span style="color: #969696;font-size: 10px;">(12+ yrs)</span>
                    </p>
                </div>
                <br>
                <div class="col-md-6" style="margin-top: -30px;">
                  <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number plus-minus-btn" disabled="disabled" data-type="minus" data-field="adultPax">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="adultPax" id="adultPax" class="form-control input-number" value="1" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                    <span class="input-group-btn">
                        <button type="button"  class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="adultPax">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row" style="display: grid;padding: 0px;">
                <div class="col-md-6" style="width: 100%;">
                  <p style="font-weight: 500;font-size: 12px;">Child<span style="color: #969696;font-size: 10px;">(2-12 yrs)</span></p>
                </div><br>
                <div class="col-md-6" style="margin-top: -30px;">
                  <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="childPax">
                          <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="childPax" id="childPax" class="form-control input-number" value="0" min="0" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="childPax">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row" style="display: grid;padding: 0px;">
                <div class="col-md-6" style="width: 100%;">
                  <p style="font-weight: 500;font-size: 12px;">Infant<span style="color: #969696;font-size: 10px;">(below 2 yrs)</span></p>
                </div><br>
                <div class="col-md-6" style="margin-top: -30px;">
                  <div class="input-group" style="box-shadow: rgb(0 0 0 / 13%) 0px 1px 4px 0px;padding: 2px;border-radius: 25px;">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="infantPax">
                        <span class="glyphicon glyphicon-minus"></span>
                      </button>
                    </span>
                    <input type="text" name="infantPax" id="infantPax" class="form-control input-number" value="0" min="0" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="infantPax">
                          <span class="glyphicon glyphicon-plus"></span>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div>
                <label>Travel Class:</label>
                <div>
                  <select class="economy-select" name="travelClass" id="travelClass" style="color: #444;">
                    <option value="ECONOMY" selected>Economy</option>
                    <option value="BUSINESS">Business</option>
                    <option value="FIRST">First Class</option>
                    <option value="PREMIUM_ECONOMY">Premium Economy</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div>
                <button type = "button"  name="updateTraveller" id="updateTraveller" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 26px;margin-bottom: 0;height: 38px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right">DONE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" name="searchFlight" id="searchFlight" value="yes" class="btn btn-default bluebar-btn">Update Search</button>
    </div>
  </form>
</div>