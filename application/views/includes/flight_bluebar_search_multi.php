<style>
    .panel{
        background-color: #3658a900;
    }
    .panel-title{
        padding: 0px;
        color: #fff;
        font-size: 12px;
        font-family: 'Poppins',sans-serif;
        font-weight: 300;
        border-radius: 6px;
    }
    .panel-title a{
        text-decoration:none;
    }
    .panel-title a:hover{
        color:#fff
    }
    .panel-title span{
        font-size: 11px;
        text-transform: capitalize;
        color: #ababab;
        width: auto;
        bottom: 0px!important;
    }
    .panel-default > .panel-heading {
        color: #333;
        background-color: #3658a9;
        border-color: #ddd0;
        border-radius: 6px;
    }
    .panel-group .panel {
        border-radius: 6px;
    }
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ddd0;    padding: 0px;
    }
    .btn:hover {
        color: #a9a9a9;
        text-decoration: none;
        transition: 0.3s ease-in-out;
    }
</style>

<div class="bluebar">      
  <form class="form-inline flight-flex" name="searchflight" id="searchflight" method="post" action="http://59.144.168.44/2020/projects/incredible/flights" novalidate="novalidate">
    <div class="container">
        <ul>

            <li>
            <input type="radio" name="bookingType" value="O" id="oneway"> 
                <span>One Way</span>
            </li>&nbsp;&nbsp;

            <li>
            <input type="radio" name="bookingType" value="R" id="returnway"> 
            <span>Round Trip</span>
            </li>&nbsp;&nbsp;

            <li>
            <input type="radio" name="bookingType" value="M" id="returnway" checked=""> 
            <span>Multi City</span>
            </li>

        </ul>

        <ul style="display: flex">

        

    
            <li style="flex: 3;">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="padding:5px">
                    <label for="text" class="flight-label">From</label><br>   
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#city" aria-expanded="false" aria-controls="city">
                                Delhi To Indore <span>Via Gorakhpur</span>
                                </a>
                            </h4>

                        </div>
                        <div id="city" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">

                                <form role="form" action="/wohoo" method="POST">

                                    <form class="form-horizontal">
                                        <fieldset>

                                            <!-- Text input-->
                                            <div id="items" class="form-group">
                                                <div style="display: flex;align-items: end;">
                                                    <div class="form-group" style="padding: 5px;">
                                                        <label for="text" class="flight-label">From</label><br>
                                                        <input type="text" class="form-control ui-autocomplete-input valid ui-autocomplete-loading" name="departure" id="search_departure" value="Delhi(DEL)" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;" autocomplete="off" aria-required="true" aria-invalid="false">
                                                    </div>
                                            
                                                    <div class="form-group" style="position: relative;top: -10px;flex: 0;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" onclick="exchangeCity();" width="14" height="14" fill="#ffffff" class="round-arrow-icon__RoundArrowIcon-sc-1768vww-0 cvXHzb"><path fill="#FFF" d="M10.656 6.46l3.14 3.172a.71.71 0 010 .997l-3.14 3.173a.692.692 0 01-.978-.009.71.71 0 01-.008-.988l1.65-1.669a.178.178 0 00.036-.19.174.174 0 00-.16-.109H7.28a.701.701 0 01-.698-.705c0-.389.313-.705.698-.705h3.918c.07 0 .134-.043.161-.108a.178.178 0 00-.038-.193l-1.65-1.67a.71.71 0 01.008-.988.692.692 0 01.978-.008zM3.344 7.54L.204 4.368a.71.71 0 010-.997L3.344.198a.692.692 0 01.978.009.71.71 0 01.008.988L2.68 2.864a.178.178 0 00-.036.19c.027.065.09.108.16.109H6.72c.385 0 .698.315.698.705a.702.702 0 01-.698.705H2.803a.174.174 0 00-.161.108.178.178 0 00.038.193l1.65 1.67a.71.71 0 01-.008.988.692.692 0 01-.978.008z"></path></svg>
                                                    </div>
                                                
                                                    <div class="form-group" style="padding: 5px;">
                                                        <label for="text" class="flight-label">To</label><br>
                                                        <input type="text" class="form-control ui-autocomplete-input" name="destination" id="search_destination" value="Mumbai(BOM)" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;" autocomplete="off">
                                                    </div>
                                                    <div class="form-group" style="padding: 5px;">
                                                                <label for="date" class="flight-label">Departure Date</label><br>
                                                        <input type="text" class="form-control hasDatepicker" name="departure_date" id="departure_date" value="03 Feb 22" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;">
                                                    </div>
                                                    <div class="form-group" style="padding: 5px;">
                                                            <label for="date" class="flight-label">Return Date</label><br>
                                                        <input type="text" class="form-control hasDatepicker" name="return_date" id="return_date" value="" onclick="exchangeDate();" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;">
                                                    </div>
                                                    <span class="delete btn button-white uppercase" style="display: none;"><i class="fa fa-close"></i></span>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>


                                    <span id="add" class="btn add-more button-yellow uppercase" type="button">+ Add City</span> 
                                    <!-- <div class="multi-field-wrapper">
                                        <div class="multi-fields">
                                            <div class="multi-field">
                                                <div>
                                                    <div class="form-group" style="padding: 5px;">
                                                        <label for="text" class="flight-label">From</label><br>
                                                        <input type="text" class="form-control ui-autocomplete-input valid ui-autocomplete-loading" name="departure" id="search_departure" value="Delhi(DEL)" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;" autocomplete="off" aria-required="true" aria-invalid="false">
                                                    </div>
                                            
                                                    <div class="form-group" style="position: relative;top: 15px;flex: 0;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" onclick="exchangeCity();" width="14" height="14" fill="#ffffff" class="round-arrow-icon__RoundArrowIcon-sc-1768vww-0 cvXHzb"><path fill="#FFF" d="M10.656 6.46l3.14 3.172a.71.71 0 010 .997l-3.14 3.173a.692.692 0 01-.978-.009.71.71 0 01-.008-.988l1.65-1.669a.178.178 0 00.036-.19.174.174 0 00-.16-.109H7.28a.701.701 0 01-.698-.705c0-.389.313-.705.698-.705h3.918c.07 0 .134-.043.161-.108a.178.178 0 00-.038-.193l-1.65-1.67a.71.71 0 01.008-.988.692.692 0 01.978-.008zM3.344 7.54L.204 4.368a.71.71 0 010-.997L3.344.198a.692.692 0 01.978.009.71.71 0 01.008.988L2.68 2.864a.178.178 0 00-.036.19c.027.065.09.108.16.109H6.72c.385 0 .698.315.698.705a.702.702 0 01-.698.705H2.803a.174.174 0 00-.161.108.178.178 0 00.038.193l1.65 1.67a.71.71 0 01-.008.988.692.692 0 01-.978.008z"></path></svg>
                                                    </div>
                                                
                                                    <div class="form-group" style="padding: 5px;">
                                                        <label for="text" class="flight-label">To</label><br>
                                                        <input type="text" class="form-control ui-autocomplete-input" name="destination" id="search_destination" value="Mumbai(BOM)" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;" autocomplete="off">
                                                    </div>
                                                    <div class="form-group" style="padding: 5px;">
                                                                <label for="date" class="flight-label">Departure Date</label><br>
                                                        <input type="text" class="form-control hasDatepicker" name="departure_date" id="departure_date" value="03 Feb 22" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;">
                                                    </div>
                                                    <div class="form-group" style="padding: 5px;">
                                                            <label for="date" class="flight-label">Return Date</label><br>
                                                        <input type="text" class="form-control hasDatepicker" name="return_date" id="return_date" value="" onclick="exchangeDate();" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;">
                                                    </div>
                                                </div>
                                                <button type="button" class="remove-field">Remove</button>
                                            </div>
                                        
                                    </div>
                                    <span type="button" class="add-field">Add field</span> -->
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li style="flex: 1;max-width: fit-content;">
                <div class="form-group" style="padding: 5px;">
                    <label for="text" class="flight-label">Passenger &amp; Class</label><br>
                            <input type="text" name="passenger" id="passenger" value="1 Traveller(s), ECONOMY" onclick="toggle(this)" style="border-radius: 6px;background: #3658a9;border: #3658a9;width: auto;color: #fff;height: 40px;" readonly="">
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
                                    <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="adultPax">
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
                                    <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="minus" data-field="childPax">
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
                                <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="minus" data-field="infantPax">
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
                                <option value="ECONOMY" selected="">Economy</option>
                                <option value="BUSINESS">Business</option>
                                <option value="FIRST">First Class</option>
                                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                            </select>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div>
                            <button type="button" name="updateTraveller" id="updateTraveller" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 26px;margin-bottom: 0;height: 38px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right">DONE</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </li>
            <li>    
                <button type="submit" name="searchFlight" id="searchFlight" value="yes" class="btn btn-default bluebar-btn" style="top: 35px;">Update Search</button>
            </li>
        </ul>
    </div>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script id="rendered-js">
    $(document).ready(function () {
    $(".delete").hide();
    //when the Add Field button is clicked
    $("#add").click(function (e) {
        $(".delete").fadeIn("1500");
        //Append a new row of code to the "#items" div
        $("#items").append('<div class="next-referral col-12" style="display: flex;align-items: end;"><div><div class="form-group" style="padding: 5px;"><label for="text" class="flight-label">From</label><br><input type="text" class="form-control ui-autocomplete-input valid ui-autocomplete-loading" name="departure" id="search_departure" value="aa" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;" autocomplete="off" aria-required="true" aria-invalid="false"></div><div class="form-group" style="position: relative;top: -10px;flex: 0;"><svg xmlns="http://www.w3.org/2000/svg" onclick="exchangeCity();" width="14" height="14" fill="#ffffff" class="round-arrow-icon__RoundArrowIcon-sc-1768vww-0 cvXHzb"><path fill="#FFF" d="M10.656 6.46l3.14 3.172a.71.71 0 010 .997l-3.14 3.173a.692.692 0 01-.978-.009.71.71 0 01-.008-.988l1.65-1.669a.178.178 0 00.036-.19.174.174 0 00-.16-.109H7.28a.701.701 0 01-.698-.705c0-.389.313-.705.698-.705h3.918c.07 0 .134-.043.161-.108a.178.178 0 00-.038-.193l-1.65-1.67a.71.71 0 01.008-.988.692.692 0 01.978-.008zM3.344 7.54L.204 4.368a.71.71 0 010-.997L3.344.198a.692.692 0 01.978.009.71.71 0 01.008.988L2.68 2.864a.178.178 0 00-.036.19c.027.065.09.108.16.109H6.72c.385 0 .698.315.698.705a.702.702 0 01-.698.705H2.803a.174.174 0 00-.161.108.178.178 0 00.038.193l1.65 1.67a.71.71 0 01-.008.988.692.692 0 01-.978.008z"></path></svg></div><div class="form-group" style="padding: 5px;"><label for="text" class="flight-label">To</label><br><input type="text" class="form-control ui-autocomplete-input" name="destination" id="search_destination" value="bb" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;" autocomplete="off"></div><div class="form-group" style="padding: 5px;"><label for="date" class="flight-label">Departure Date</label><br><input type="text" class="form-control hasDatepicker" name="departure_date" id="departure_date" value="" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;"></div><div class="form-group" style="padding: 5px;"><label for="date" class="flight-label">Return Date</label><br><input type="text" class="form-control hasDatepicker" name="return_date" id="return_date" value="" onclick="exchangeDate();" style="border-radius: 6px;background: #3658a9;border: #3658a9;color: #fff;height: 40px;"></div></div><span class="delete btn button-white uppercase" style="display: none;"><i class="fa fa-close"></i></span></div>');

    });
    $("body").on("click", ".delete", function (e) {
        $(".next-referral").last().remove();
    });
    });
    //# sourceURL=pen.js
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script id="rendered-js">
$('.multi-field-wrapper').each(function () {
  var $wrapper = $('.multi-fields', this);
  $(".add-field", $(this)).click(function (e) {
    $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
  });
  $('.multi-field .remove-field', $wrapper).click(function () {
    if ($('.multi-field', $wrapper).length > 1)
    $(this).parent('.multi-field').remove();
  });
});
//# sourceURL=pen.js
    </script> -->

