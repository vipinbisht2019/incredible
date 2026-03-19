<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php  echo $welcome_text[0]['meta_title']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $welcome_text[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $welcome_text[0]['meta_keyword']; ?>">

    <?php include('includes/css.php'); ?>
    <style>
      .btn-form1-submit{ background: #244082;  }
      .btn-form1-submit:hover {
      background: #e41d37;}
      .center{
        width: auto;
          margin: 10px auto;
          display: flex;
        }
        .plus-minus-btn{ 
          display: inline-block;
          padding: 6px 12px;
          margin-bottom: 0;
          font-size: 14px!important;
          font-weight: normal;
          line-height: 1.428571;
          text-align: center;
          white-space: nowrap;
          vertical-align: middle;
          cursor: pointer;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
          background-image: none;
          border: 1px solid #cccccc;
          border-radius: 4px;
          height: 34px; 
        }
        .economy-select{ 
          font-size: 14px!important;
          font-family: 'Poppins',sans-serif!important;
          font-weight: 300;
          background-color: #fff;
          border: 1px solid #eceaea;
          border-radius: 0px;
          padding: 5px 25px 10px 7px;
          width: 100%;
          color: #444444;
          height: auto;
          margin-bottom: 0px;
          box-shadow: none; 
        }
        .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group {
          margin-right: -1px;
          border-top-left-radius: 15px;
          border-bottom-left-radius: 15px;
          border: none;
    background: #fff;
      }
      .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
        margin-left: -1px;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
        border: none;
    background: #fff;
    }
    .traveller-count{ border:solid 1px #ddd; padding:10px; display:none;position: absolute;background: #fff;right: 0px;z-index: 1;box-shadow: rgb(0 0 0 / 16%) 0px 2px 14px 0px; }


    @media screen and (min-device-width: 481px) and (max-device-width: 768px) { 
        .traveller-count{ width: 100%; }
    }

    @media only screen and (max-device-width: 480px) {
        .traveller-count{ width: 100%;left: 7px; }
    }
    .form1 label{ color: #ff0000;font-weight: 400;font-size: 12px; }
    </style>
    <!-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all"> -->
  </head>
  <body class="front">

    <div id="main">
      <?php include('includes/header.php'); ?>
      <div id="slider_wrapper">
        <div class="container">
          <div id="slider_inner">
            <div class="">
              <div id="slider">
                <div class="">
                  <div class="carousel-box">
                    <div class="inner">
                      <div class="carousel main">
                        <ul>
                          <?php foreach ($sliders as $key => $value){?>
                          <li>
                            
                              <!--<img src="<?php //echo base_url();?>uploads/sliders/<?php //echo $value['Image']?>" alt="Snow" style="width:100%;">-->
                              <div class="slider">
                                <div class="slider_inner">
                                  <!--<h1 style="color: #ee7c50;/*color: rgb(255, 134, 87);*/text-shadow: rgb(103, 56, 34) 1px 1px 2px;opacity: 1;font-size: 50px;margin-top: -14%;animation-name: FadeInUp;font-family: 'Hind Siliguri', sans-serif;/*font-family: 'Nunito', sans-serif;*//*color: white;background-color: rgba(255, 134, 87,.3);*/"><?php echo $value['SmallDesc'];?><br></h1>-->
                                  <div class="txt1"><span><?php echo $value['Heading'];?></span></div>
                                  <div class="txt2"><span><?php echo $value['BigDesc'];?></span></div>
                                  <div class="txt3"><span><?php echo $value['SmallDesc'];?></span></div>
                                </div>
                              </div>
                           
                          </li>
                          <?php } ?>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slider_pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="front_tabs">
        <div class="">
          <div class="tabs_wrapper tabs1_wrapper">
            <div class="tabs tabs1">
              <div class="tabs_tabs tabs1_tabs">
                  <ul>
                    <li class="active flights"><a href="#tabs-1">Flights</a></li>
                    <li class="hotels"><a href="#tabs-2">Hotels</a></li>
                    <li class="cars"><a href="#tabs-3">Cars</a></li>
                    <li class="cruises"><a href="#tabs-4">Cruises</a></li>
                    <li class="irctc"><a href="#tabs-5" style="padding: 13px 30px 14px 20px;"><i class="fa fa-train" aria-hidden="true" style="padding-right: 18px;font-size: 21px;"></i>IRCTC</a></li>
                  </ul>
              </div>
              <div class="tabs_content tabs1_content">
                <div id="tabs-1">
                  <div class="tabs" style="box-shadow: none;background: #fafafa">
                    <ul class="tab-links">
                        <li class="active"><a href="#tab1"> One Way</a></li>
                        <li><a href="#tab2"> Round trip</a></li>
                        <li><a href="#tab3"> Multi City</a></li>
                    </ul>
                    
                    <div class="tab-content">
                      <div id="tab1" class="tab active" onclick="disableBtn()">
                        <form name="searchflight" id="searchflight"  method="post" action="<?php echo base_url('flights'); ?>" class="form1">
                          <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-2 col-md-2 pad-col" style="display: flex;">
                              <div class="select1_wrapper">  
                                <div class="select1_inner input-container">
                                  <i class="fa fa-plane icon" style="background: #fff;border: 1px solid #ececec;border-right: none;"></i>
                                  <input type="text" name="departure" id="search_departure" placeholder ="Departure" minlength="3" class="inpt-tab" style="border-left: none;">
                                  
                                  <span id="search_list"></span>
                                </div>
                                  <input type="hidden" name="bookingType" id="bookingType" value="O">
                              </div>
                                <button type="button" style="background: transparent;border: none;" onclick = "exchangeCity();"><i class="fa fa-exchange exchnge-arw" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-sm-2 col-md-2 pad-col">
                              <div class="select1_wrapper">
                                <!-- <label>To </label> -->
                                <div class="select1_inner input-container">
                                  <i class="fa fa-plane icon" style="background: #fff;border: 1px solid #ececec;border-right: none;"></i>
                                <input type="text" name="destination" id="search_destination" placeholder ="Destination" class="inpt-tab" style="border-left: none;">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-2 col-md-2 pad-col">
                            <div class="input1_wrapper">
                              <!-- <label>Departure </label> -->
                              <div class="input1_inner">
                                <input type="text" class="input inpt-tab" name="departure_date" id="departure_date"  placeholder="Departure">
                              </div>
                            </div>
                          </div>
                         <!-- <div class="col-sm-2 col-md-2 pad-col">
                            <div class="input1_wrapper">
                              <div class="input1_inner">
                                <input type="text" class="input inpt-tab" name="return_date" id="return_date"  placeholder="Return">
                              </div>
                            </div>
                          </div>-->
                          <div class="col-sm-3 col-md-3 pad-col" style="padding-left: 0px;">
                              <!-- <label for="text">Passenger & Class</label> -->
                            <input type="text" name="passenger" id="passenger" value="1 Traveller(s), Economy" id="bt"  onclick="toggle(this)" class="trvl-cnt" readonly>
                            <div class="traveller-count" id="cont">
                              <div>
                                <div class="center">
                                  <div class="row" style="display: grid;padding: 0px;margin-right: 5px;">
                                    <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Adult<span style="color: #969696;font-size: 10px;">(12+ yrs)</span>
                                      </p>
                                    </div><br>
                                    <div class="col-md-6" style="margin-top: -30px;">
                                      <div class="input-group pasnger-inpt">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-default btn-number plus-minus-btn" disabled="disabled" data-type="minus" data-field="adultPax" style="height: 25px;line-height: 15px;">
                                            <span class="glyphicon glyphicon-minus"></span>
                                          </button>
                                        </span>
                                        <input type="text" name="adultPax" id="adultPax" class="form-control input-number" value="1" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px;">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="adultPax" style="height: 25px;line-height: 15px;">
                                              <span class="glyphicon glyphicon-plus"></span>
                                          </button>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                      <div class="row" style="display: grid;padding: 0px;margin-right: 5px;">
                                        <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Child<span style="color: #969696;font-size: 10px;">(2-12 yrs)</span>
                                        </p>
                                      </div><br>
                                      <div class="col-md-6" style="margin-top: -30px;">
                                        <div class="input-group pasnger-inpt">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="childPax" style="height: 25px;line-height: 15px;">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="childPax" id="childPax" class="form-control input-number" value="0" min="0" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="childPax" style="height: 25px;line-height: 15px;">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row" style="display: grid;padding: 0px;margin-right: 5px;">
                                        <div class="col-md-6" style="width: 100%;">
                                    <p style="font-weight: 500;font-size: 12px;">Infant<span style="color: #969696;font-size: 10px;">(below 2 yrs)</span>
                                        </p>
                                      </div><br>
                                      <div class="col-md-6" style="margin-top: -30px;">
                                        <div class="input-group pasnger-inpt">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="infantPax" style="height: 25px;line-height: 15px;">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="infantPax" id="infantPax" class="form-control input-number" value="0" min="0" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height:25px;">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="infantPax" style="height: 25px;line-height: 15px;">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                      </div></div>
                                  </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div>
                                          <label><span class="label-span">Travel Class:</span></label>
                                          <div>
                                            <select class="economy-select" name="travelClass" id="travelClass">
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
                                        <button  type="button" name="updateTraveller" id="updateTraveller" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;border-radius: 5px;margin-top: 27px;margin-bottom: 0;height: 35px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right;font-size: 14px;">DONE</button>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>                    
                              <div class="col-sm-2 col-md-2">
                                <div class="button1_wrapper">
                                  <button type="submit" name="searchFlight" id="searchFlight" value="yes" class="btn-default btn-form1-submit" >Search</button>
                                </div>
                              </div>
                            </div>
                            <div>
                              <input type="checkbox" name="directFlight" id="directFlight"> <span style="font-size: 14px;color: #807e7e;padding-right: 15px;">Direct Flight</span>
                              <!-- <input type="hidden" name="directFlight" id="directFlight"> -->
                              <input type="checkbox" name="creditShell" id="creditShell"> <span style="font-size: 14px;color: #807e7e;padding-right: 15px;">Connecting Flights</span>
                              <!-- <input type="hidden" name="creditShells" id="creditShells" value="false"> -->
                            </div>
                          </form>
                          </div>
                   
                          <div id="tab2" class="tab" onclick="undisableBtn()">
                          <form name="searchflight1" id="searchflight1"  method="post" action="<?php echo base_url('flights'); ?>" class="form1">
                            <div class="row" style="margin-bottom: 15px;">
                              <div class="col-sm-2 col-md-2 pad-col" style="display: flex;">
                                <div class="select1_wrapper">  
                                  <div class="select1_inner">
                                    <input type="text" name="departure" id="search_departure1" placeholder ="Departure" minlength="3" style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width: 100%">
                                  </div>
                                    <input type="hidden" name="bookingType" id="bookingType" value="R">
                                </div>
                                  <button type="button" style="background: transparent;border: none;" onclick = "exchangeCity1();"><i class="fa fa-exchange exchnge-arw" aria-hidden="true"></i></button>
                              </div>
                              <div class="col-sm-2 col-md-2 pad-col">
                                <div class="select1_wrapper">
                                  <!-- <label>To </label> -->
                                  <div class="select1_inner">
                                  <input type="text" name="destination" id="search_destination1" placeholder ="Destination"  style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width:100%;">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-2 col-md-2 pad-col">
                              <div class="input1_wrapper">
                                <!-- <label>Departure </label> -->
                                <div class="input1_inner">
                                  <input type="text" class="input" name="departure_date" id="departure_date1"  placeholder="Departure">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-2 col-md-2 pad-col">
                              <div class="input1_wrapper">
                                <div class="input1_inner">
                                  <input type="text" class="input" name="return_date" id="return_date1"  placeholder="Return">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-2 col-md-2" style="padding-left: 0px;">
                                <!-- <label for="text">Passenger & Class</label> -->
                              <input type="text" name="passenger" id="passenger1" value="1 Traveller(s), Economy" id="bt"  onclick="toggle1(this)" style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;" readonly>
                              <div class="traveller-count" id="cont1">
                                <div>
                                  <div class="center">
                                    <div class="row" style="display: grid;padding: 0px;margin-right: 5px;">
                                      <div class="col-md-6" style="width: 100%;">
                                        <p style="font-weight: 500;font-size: 12px;">Adult<span style="color: #969696;font-size: 10px;">(12+ yrs)</span>
                                        </p>
                                      </div><br>
                                      <div class="col-md-6" style="margin-top: -30px;">
                                        <div class="input-group pasnger-inpt">
                                          <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number plus-minus-btn" disabled="disabled" data-type="minus" data-field="adultPax1" style="height: 25px;line-height: 15px;">
                                              <span class="glyphicon glyphicon-minus"></span>
                                            </button>
                                          </span>
                                          <input type="text" name="adultPax" id="adultPax1" class="form-control input-number" value="1" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px;">
                                          <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="adultPax" style="height: 25px;line-height: 15px;">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                        <div class="row" style="display: grid;padding: 0px;margin-right: 5px;">
                                          <div class="col-md-6" style="width: 100%;">
                                        <p style="font-weight: 500;font-size: 12px;">Child<span style="color: #969696;font-size: 10px;">(2-12 yrs)</span>
                                          </p>
                                        </div><br>
                                        <div class="col-md-6" style="margin-top: -30px;">
                                          <div class="input-group pasnger-inpt">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="childPax" style="height: 25px;line-height: 15px;">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                  </button>
                                              </span>
                                              <input type="text" name="childPax" id="childPax1" class="form-control input-number" value="0" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="childPax" style="height: 25px;line-height: 15px;">
                                                      <span class="glyphicon glyphicon-plus"></span>
                                                  </button>
                                              </span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row" style="display: grid;padding: 0px;margin-right: 5px;">
                                          <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Infant<span style="color: #969696;font-size: 10px;">(below 2 yrs)</span>
                                          </p>
                                        </div><br>
                                        <div class="col-md-6" style="margin-top: -30px;">
                                          <div class="input-group pasnger-inpt">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="infantPax" style="height: 25px;line-height: 15px;">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                  </button>
                                              </span>
                                              <input type="text" name="infantPax" id="infantPax1" class="form-control input-number" value="0" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px;">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="infantPax" style="height: 25px;line-height: 15px;">
                                                      <span class="glyphicon glyphicon-plus"></span>
                                                  </button>
                                              </span>
                                          </div>
                                        </div></div>
                                    </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div>
                                            <label><span class="label-span">Travel Class:</span></label>
                                            <div>
                                              <select class="economy-select" name="travelClass" id="travelClass1">
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
                                          <button  type="button" name="updateTraveller" id="updateTraveller1" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;border-radius: 5px;margin-top: 27px;margin-bottom: 0;height: 35px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right;font-size: 14px;">DONE</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>                    
                                <div class="col-sm-2 col-md-2">
                                  <div class="button1_wrapper">
                                    <button type="submit" name="searchFlight1" id="searchFlight1" value="yes" class="btn-default btn-form1-submit" >Search</button>
                                  </div>
                                </div>
                              </div>
                            <div>
                              <input type="checkbox" name="directFlight" id="directFlight1"> <span style="font-size: 14px;color: #807e7e;padding-right: 15px;">Direct Flight</span>
                              <!-- <input type="hidden" name="directFlights" id="directFlights" value="false"> -->
                              <input type="checkbox" name="creditShell" id="creditShell1"> <span style="font-size: 14px;color: #807e7e;padding-right: 15px;">Connecting Flights</span>
                              <!-- <input type="hidden" name="creditShells" id="creditShells" value="false"> -->
                            </div>
                          </form>                        
                          </div>
                   
                          <div id="tab3" class="tab">
                          <form name="searchflight2" id="searchflight2"  method="post" action="<?php echo base_url('flights'); ?>" class="form1">
                          <div class="row" style="margin-bottom: 15px;">
                              <div class="col-sm-2 col-md-2 pad-col" style="display: flex;">
                                <div class="select1_wrapper">  
                                  <!--<label>From </label>-->
                                  <div class="select1_inner">
                                    <input type="text" name="departure" id="search_departure2" placeholder ="From" minlength="3" style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width: 100%">
                                    <input type="hidden" name="bookingType" id="bookingType" value="M">
                                  </div>
                                </div>
                                <!-- <i class="fa fa-exchange exchnge-arw" aria-hidden="true" style="top: 5px;"></i> -->
                              </div>
                              <div class="col-sm-2 col-md-2 pad-col">
                                <div class="select1_wrapper">
                                  <!--<label>To </label>-->
                                  <div class="select1_inner">
                                  <input type="text" name="destination" id="search_destination2" placeholder ="Destination"  style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width:100%;">
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-3 col-md-3 pad-col">
                                <div class="input1_wrapper">
                                  <!--<label>Departure </label>-->
                                  <div class="input1_inner">
                                    <input type="text" class="input" name="departure_date" id="departure_date2" placeholder="Departure">
                                  </div>
                                </div>
                              </div>
                              <!--<div class="col-sm-2 col-md-2">
                                <div class="input1_wrapper">
                                  <label>Return </label>
                                  <div class="input1_inner">
                                    <input type="date" class="input" name="return_date" id="return_date"  placehoder="Return">
                                  </div>
                                </div>
                              </div>-->


                              <div class="col-sm-3 col-md-3 pad-col" style="padding-left: 0px;">
                                <!--<label for="text">Passenger & Class</label>-->
                                <input type="text" name="passenger" id="passenger2" value="1 Traveller(s), Economy" id="bt"  onclick="toggle2(this)" style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width: 100%;">
                                <div class="traveller-count" id="cont2">
                                <div>

                                    <div class="center">
                                      <div class="row" style="display: grid;padding: 0px;">
                                        <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Adult<span style="color: #969696;font-size: 10px;">(12+ yrs)</span>
                                        </p>
                                      </div><br>
                                      <div class="col-md-6" style="margin-top: -30px;">
                                      <div class="input-group pasnger-inpt">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn" disabled="disabled" data-type="minus" data-field="adultPax" style="height: 25px;line-height: 15px;">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="adultPax" id="adultPax2" class="form-control input-number" value="1" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px;">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="adultPax" style="height: 25px;line-height: 15px;">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div></div></div>
                                      <div class="row" style="display: grid;padding: 0px;">
                                        <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Child<span style="color: #969696;font-size: 10px;">(2-12 yrs)</span>
                                        </p>
                                      </div><br>
                                      <div class="col-md-6" style="margin-top: -30px;">
                                        <div class="input-group pasnger-inpt">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="childPax" style="height: 25px;line-height: 15px;">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="childPax" id="childPax2" class="form-control input-number" value="0" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px;">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="childPax" style="height: 25px;line-height: 15px;">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row" style="display: grid;padding: 0px;">
                                        <div class="col-md-6" style="width: 100%;">
                                    <p style="font-weight: 500;font-size: 12px;">Infant<span style="color: #969696;font-size: 10px;">(below 2 yrs)</span>
                                        </p>
                                      </div><br>
                                      <div class="col-md-6" style="margin-top: -30px;">
                                        <div class="input-group pasnger-inpt">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn"  data-type="minus" data-field="infantPax" style="height: 25px;line-height: 15px;">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="infantPax" id="infantPax2" class="form-control input-number" value="0" min="1" max="9" style="padding: 6px;width: 40px;background: #fff;box-shadow: none;border: none;height: 25px;">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number plus-minus-btn" data-type="plus" data-field="infantPax" style="height: 25px;line-height: 15px;" >
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                      </div></div>
                                  </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div>
                                          <label><span class="label-span">Travel Class:</span></label>
                                          <div>
                                            <select class="economy-select" name="travelClass" id="travelClass2">
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
                                        <button  type="button" name="updateTraveller" id="updateTraveller2" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;border-radius: 5px;margin-top: 27px;margin-bottom: 0;height: 35px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right;font-size: 14px;">DONE</button>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>                    
                              <div class="col-sm-2 col-md-2">
                                <div class="button1_wrapper">
                                  <button type="submit" name="searchFlight2" id="searchFlight2" value="yes" class="btn-default btn-form1-submit">Search</button>
                                </div>
                              </div>
                            </div>
                            <div class="row after-add-more" style="margin-top: 20px;margin-bottom: 15px;">
                              <div class="col-sm-2 col-md-2 pad-col" style="display: flex;">
                                <div class="select1_wrapper">  
                                  <!--<label>From </label>-->
                                  <div class="select1_inner">
                                    <input type="text" name="departure" id="search_departure3" placeholder ="From" minlength="3" style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width: 100%">
                                  </div>
                                </div>
                                <!-- <i class="fa fa-exchange exchnge-arw" aria-hidden="true" style="top: 5px;"></i> -->
                              </div>
                              <div class="col-sm-2 col-md-2 pad-col">
                                <div class="select1_wrapper">
                                  <!--<label>To </label>-->
                                  <div class="select1_inner">
                                  <input type="text" name="destination" id="search_destination3" placeholder ="Destination"  style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width:100%;">
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-3 col-md-3 pad-col">
                                <div class="input1_wrapper">
                                  <!--<label>Departure </label>-->
                                  <div class="input1_inner">
                                    <input type="text" class="input" name="return_date" id="return_date2" placeholder="Departure">
                                  </div>
                                </div>
                              </div>
                             
                               <div class="col-sm-3 col-md-3">
                                 
                                  <button type="button" class="add-cities add-more"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Upto 4 Cities</button>
                                 <a href="javascript:(0);" style="text-decoration:none;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Reset</a>
                               </div>              
                             
                            </div>
                            
                          
                          </form>
                       
                      </div>

                  </div>
                </div></div>
                <div id="tabs-2">
                  
                  <form action="javascript:;" class="form1">
                    <ul style="display: flex;padding-left: 0px;list-style: none;">
                    <li style="color: #444;"><input type="radio" name="oneway" id="oneway" style="height: 18px;width: 20px;"> <span style="position: relative;bottom: 5px;">India</span></li>&nbsp;&nbsp;
                    <li style="color: #444;"><input type="radio" name="oneway" id="returnway" style="height: 18px;width: 20px;"> <span style="position: relative;bottom: 5px;">International</span></li>
                  </ul>
                    <div class="row">
                      <div class="col-sm-4 col-md-4">
                        <div class="select1_wrapper">
                         <!-- <label><span class="label-span">City or Hotel Name:</span></label>-->
                          <div class="select1_inner input-container" style="background: #fff; border: 1px solid #ebebeb;">
                            <i class="fa fa-map-marker icon"></i>
                            <select class="select2 select" style="width: 100%">
                              <option value="1" disabled selected>Search by City</option>
                              <option value="2">Lorem ipsum dolor sit amet</option>
                              <option value="3">Duis autem vel eum</option>
                              <option value="4">Ut wisi enim ad minim veniam</option>
                              <option value="5">Nam liber tempor cum</option>
                              <option value="6">At vero eos et accusam et</option>
                              <option value="7">Consetetur sadipscing elitr</option>
                              <option value="8">Sed diam nonumy</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2" style="padding: 0px;">
                        <div class="input1_wrapper">
                          <!--<label><span class="label-span">Check-In:</span></label>-->
                          <div class="input1_inner">
                            <input type="text" name="start-date" id="start-date" placeholder="Start date" style="border-radius: 6px;border: #3658a9;width: 100%;"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2" style="padding: 0px;">
                        <div class="input1_wrapper">
                          <!--<label><span class="label-span">Check-Out:</span></label>-->
                          <div class="input1_inner">
                            <input type="text" name="end-date" id="end-date" placeholder="End date" style="border-radius: 6px;border: #3658a9;width: 100%;"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <!--<label><span class="label-span">Adult:</span></label>-->
                          <input type="text" name="passenger" id="passenger" value="2 Guests in  Room" id="bt"  onclick="toggle3(this)" class="trvl-cnt" readonly>
                            <div class="traveller-count" id="cont">
                              <div>
                                <div class="center">
                                  <div class="row" style="display: grid;padding: 5px;">
                                    <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Rooms<span style="color: #969696;font-size: 10px;">(Max 8)</span>
                                      </p>
                                    </div><br>
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
                                  <div class="row" style="display: grid;padding: 5px;">
                                    <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Adults<span style="color: #969696;font-size: 10px;">(12+ yr)</span>
                                        </p>
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
                                  <div class="row" style="display: grid;padding: 5px;">
                                    <div class="col-md-6" style="width: 100%;">
                                      <p style="font-weight: 500;font-size: 12px;">Children<span style="color: #969696;font-size: 10px;">(0-12 yr)</span>
                                      </p>
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
                                 
                                </div>
                                <div class="col-md-6">
                                  <div>
                                    <button type="button" name="updateTraveller" id="updateTraveller" value="done" style="background: #f37638;border: 1px solid #f37638;padding: 10px 32px;color: #fff;font-weight: 500;border-radius: 5px;margin-top: 26px;margin-bottom: 0;height: 38px;line-height: 10px;font-family: 'Poppins',sans-serif;font-weight: 600;float: right">DONE</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="button1_wrapper">
                          <button type="submit" class="btn-default btn-form1-submit">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div id="tabs-3">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Country:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Please Select</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">City:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Please Select</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Location:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Please Select</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label><span class="label-span">Pick up Date:</span></label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label><span class="label-span">Drop off Date:</span></label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>


                      <div class="col-sm-4 col-md-2">
                        <div class="button1_wrapper">
                          <button type="submit" class="btn-default btn-form1-submit">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div id="tabs-4">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Sail To:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">All destinations</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Sail From:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">All ports</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label><span class="label-span">Start Date:</span></label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="From any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label><span class="label-span">End of Date:</span></label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="To any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Cruise Ship:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">All Ships</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="button1_wrapper">
                          <button type="submit" class="btn-default btn-form1-submit">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div id="tabs-5">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Sail To:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">All destinations</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Sail From:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">All ports</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label><span class="label-span">Start Date:</span></label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="From any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label><span class="label-span">End of Date:</span></label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="To any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label><span class="label-span">Cruise Ship:</span></label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">All Ships</option>
                              <option value="2">Alaska</option>
                              <option value="3">Bahamas</option>
                              <option value="4">Bermuda</option>
                              <option value="5">Canada</option>
                              <option value="6">Caribbean</option>
                              <option value="7">Europe</option>
                              <option value="8">Hawaii</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="button1_wrapper">
                          <button type="submit" class="btn-default btn-form1-submit">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="why1">
        <div class="container">
          <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">Why Us</h2>
          <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="200">Reasons why are we loved by the corporates for hassle free executions</div>
          <br><br>
          <div class="row">
            <div class="col-sm-3">
              <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="200">
                <div class="thumbnail clearfix">
                  <a href="#">
                    <figure class="">
                      <img src="<?php echo base_url('assets/images/experience.png')?>" alt="" class="img1 img-responsive">
                      <img src="<?php echo base_url('assets/images/experience-hover.png')?>" alt="" class="img2 img-responsive">
                    </figure>
                    <div class="caption">
                      <div class="txt1">Experience & Expertise</div>
                      <div class="txt2">Years of experience, seasoned professionals and expertise,  are ready to bring you memorable experiences</div>
                      <div class="txt3">Read More</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="300">
                <div class="thumbnail clearfix">
                  <a href="#">
                    <figure class="">
                      <img src="<?php echo base_url('assets/images/netwrk.png')?>" alt="" class="img1 img-responsive">
                      <img src="<?php echo base_url('assets/images/netwrk-hover.png')?>" alt="" class="img2 img-responsive">
                    </figure>
                    <div class="caption">
                      <div class="txt1">Robust Network</div>
                      <div class="txt2">A trustworthy robust network that enables us to bring to you curated experiences and journerys</div>
                      <div class="txt3">Read More</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="400">
                <div class="thumbnail clearfix">
                  <a href="#">
                    <figure class="">
                      <img src="<?php echo base_url('assets/images/cost.png')?>" alt="" class="img1 img-responsive">
                      <img src="<?php echo base_url('assets/images/cost-hover.png')?>" alt="" class="img2 img-responsive">
                    </figure>
                    <div class="caption">
                      <div class="txt1">Cost Effective</div>
                      <div class="txt2">We keep in mind the limitations of budgets and bring about affordable itineraries keeping in line with them</div>
                      <div class="txt3">Read More</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="500">
                <div class="thumbnail clearfix">
                  <a href="#">
                    <figure class="">
                      <img src="<?php echo base_url('assets/images/transparent.png')?>" alt="" class="img1 img-responsive">
                      <img src="<?php echo base_url('assets/images/transparent-hover.png')?>" alt="" class="img2 img-responsive">
                    </figure>
                    <div class="caption">
                      <div class="txt1">Dependable</div>
                      <div class="txt2">Dependable services that are not laden with any hidden or accidental expenses or charges </div>
                      <div class="txt3">Read More</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="amazing-tours">
        <div class="container">
            <div class="section-title text-center">
                <h2>Popular Destinations</h2>
                <p>Some handpicked destinations curated just for you for that "<em>Incredible</em>" experience</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="<?php echo base_url('assets/images/at2.jpg')?>" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Italy</a></h3>
                            <span>The colosseum</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="<?php echo base_url('assets/images/at1.jpg')?>" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Brazil</a></h3>
                            <span>The colosseum</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="<?php echo base_url('assets/images/at3.jpg')?>" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Venezuela</a></h3>
                            <span>The colosseum</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="<?php echo base_url('assets/images/at1.jpg')?>" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Kenya</a></h3>
                            <span>The colosseum</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="<?php echo base_url('assets/images/at3.jpg')?>" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Greece</a></h3>
                            <span>The colosseum</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="<?php echo base_url('assets/images/at2.jpg')?>" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Iceland</a></h3>
                            <span>The colosseum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-packages">
        <div class="">
            <div class="section-title text-center">
                <h2>Past Work</h2>
                <p>Bringing to you a very few highlights of our work done for clients</p>
            </div>
            <div class="row p-lr1">
              <div class="col-md-3 mt--20 p-lr">
                <div class="container" style="width: 100%;padding: 0px;">
                  <img src="https://pegasusevents.in/wp-content/uploads/2017/06/Multiples-Annual-Investor-Conference-555x555.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <div class="text">
                      <h4>Royal Wedding jaipur</h4>
                      <ul>
                        <li><b>Pax - </b>700</li>
                        <li><b>Venue - </b>Udaipur Lake Palace</li>
                        <li><b>Flights from - </b>USA / UK / HKG / DE</li>
                        <li><b>Highlight - </b>Transported Each Family or if Individual by an SUV all VIP guests were provided High-end Luxury Sedans / SUV such as BMW 7 series, Mercedes 350 onward etc </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mt--20 p-lr">
                <div class="container" style="width: 100%;padding: 0px;">
                <img src="https://pegasusevents.in/wp-content/uploads/2017/06/Multiples-Annual-Investor-Conference-555x555.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">
                    <h4>Royal Wedding jaipur</h4>
                    <ul>
                      <li><b>Pax - </b>700</li>
                      <li><b>Venue - </b>Udaipur Lake Palace</li>
                      <li><b>Flights from - </b>USA / UK / HKG / DE</li>
                      <li><b>Highlight - </b>Transported Each Family or if Individual by an SUV all VIP guests were provided High-end Luxury Sedans / SUV such as BMW 7 series, Mercedes 350 onward etc </li>
                    </ul>
                  </div>
                </div>
              </div></div>
              <div class="col-md-3 mt--20 p-lr">
                <div class="container" style="width: 100%;padding: 0px;">
                <img src="https://pegasusevents.in/wp-content/uploads/2017/06/Multiples-Annual-Investor-Conference-555x555.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">
                    <h4>Royal Wedding jaipur</h4>
                    <ul>
                      <li><b>Pax - </b>700</li>
                      <li><b>Venue - </b>Udaipur Lake Palace</li>
                      <li><b>Flights from - </b>USA / UK / HKG / DE</li>
                      <li><b>Highlight - </b>Transported Each Family or if Individual by an SUV all VIP guests were provided High-end Luxury Sedans / SUV such as BMW 7 series, Mercedes 350 onward etc </li>
                    </ul>
                  </div>
                </div>
              </div></div>
              <div class="col-md-3 mt--20 p-lr">
                <div class="container" style="width: 100%;padding: 0px;">
                <img src="https://pegasusevents.in/wp-content/uploads/2017/06/Multiples-Annual-Investor-Conference-555x555.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">
                    <h4>Royal Wedding jaipur</h4>
                    <ul>
                      <li><b>Pax - </b>700</li>
                      <li><b>Venue - </b>Udaipur Lake Palace</li>
                      <li><b>Flights from - </b>USA / UK / HKG / DE</li>
                      <li><b>Highlight - </b>Transported Each Family or if Individual by an SUV all VIP guests were provided High-end Luxury Sedans / SUV such as BMW 7 series, Mercedes 350 onward etc </li>
                    </ul>
                  </div>
                </div>
              </div></div>
            </div>
        </div>
    </section>

    <section class="popular-packages">
      <div class="container">
        <div class="section-title text-center">
            <h2>Customise Packages</h2>
            <p>Fixed departures and customized travel booking for groups, families and individuals</p>
        </div>
        <div class="row slider-button">
          <div class="col-lg-6">
            <div class="package-item box-item">
              <div class="package-image">
                  <img src="<?php echo base_url('assets/images/package1.jpg')?>" alt="Image">
                  <p class="package-days"><i class="fa fa-clock-o"></i> 5 days</p>
              </div>
              <div class="package-content">
                <h4>Surfing Goa, India</h4>
                <div class="package-price">
                    <div class="deal-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                    <p><span><i class="fa fa-inr"></i>659</span> / PER </p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="package-info">
                    <a href="<?php echo base_url('home/tour_detail');?>" class="btn-blue btn-red btn-style-1">View more details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="package-item box-item">
              <div class="package-image">
                <img src="<?php echo base_url('assets/images/package2.jpg')?>" alt="Image">
                <p class="package-days"><i class="fa fa-clock-o"></i> 5 days</p>
              </div>
              <div class="package-content">
                <h4>Hot Air Ballooning</h4>
                <div class="package-price">
                  <div class="deal-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                  </div>
                    <p><span><i class="fa fa-inr"></i>659</span> / PER </p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="package-info">
                    <a href="<?php echo base_url('home/tour_detail');?>" class="btn-blue btn-red btn-style-1">View more details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="package-item box-item">
              <div class="package-image">
                <img src="<?php echo base_url('assets/images/package3.jpg')?>" alt="Image">
                <p class="package-days"><i class="fa fa-clock-o"></i> 5 days</p>
              </div>
              <div class="package-content">
                <h4>Lake Tohoe Advanture</h4>
                <div class="package-price">
                  <div class="deal-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                  </div>
                  <p><span><i class="fa fa-inr"></i>659</span> / PER </p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="package-info">
                  <a href="<?php echo base_url('home/tour_detail');?>" class="btn-blue btn-red btn-style-1">View more details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="package-item box-item">
              <div class="package-image">
                <img src="<?php echo base_url('assets/images/package1.jpg')?>" alt="Image">
                <p class="package-days"><i class="fa fa-clock-o"></i> 5 days</p>
              </div>
              <div class="package-content">
                <h4>Surfing at Goa, India</h4>
                <div class="package-price">
                  <div class="deal-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                  </div>
                  <p><span><i class="fa fa-inr"></i>659</span> / PER </p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="package-info">
                    <a href="<?php echo base_url('home/tour_detail');?>" class="btn-blue btn-red btn-style-1">View more details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div id="partners">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-2 col-xs-6">
            <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="100">
              <div class="thumbnail clearfix">
                <a href="#">
                  <figure>
                    <img src="<?php echo base_url('assets/images/partner11.jpg')?>" alt="" class="img1 img-responsive">
                    <img src="<?php echo base_url('assets/images/partner11_hover.jpg')?>" alt="" class="img2 img-responsive">
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6">
            <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="200">
              <div class="thumbnail clearfix">
                <a href="#">
                  <figure>
                    <img src="<?php echo base_url('assets/images/partner22.jpg')?>" alt="" class="img1 img-responsive">
                    <img src="<?php echo base_url('assets/images/partner22_hover.jpg')?>" alt="" class="img2 img-responsive">
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6">
            <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="300">
              <div class="thumbnail clearfix">
                <a href="#">
                  <figure>
                    <img src="<?php echo base_url('assets/images/partner33.jpg')?>" alt="" class="img1 img-responsive">
                    <img src="<?php echo base_url('assets/images/partner33_hover.jpg')?>" alt="" class="img2 img-responsive">
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6">
            <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="400">
              <div class="thumbnail clearfix">
                <a href="#">
                  <figure>
                    <img src="<?php echo base_url('assets/images/partner44.jpg')?>" alt="" class="img1 img-responsive">
                    <img src="<?php echo base_url('assets/images/partner44_hover.jpg')?>" alt="" class="img2 img-responsive">
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6">
            <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="500">
              <div class="thumbnail clearfix">
                <a href="#">
                  <figure>
                    <img src="<?php echo base_url('assets/images/partner11.jpg')?>" alt="" class="img1 img-responsive">
                    <img src="<?php echo base_url('assets/images/partner11_hover.jpg')?>" alt="" class="img2 img-responsive">
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-2 col-xs-6">
            <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="600">
              <div class="thumbnail clearfix">
                <a href="#">
                  <figure>
                    <img src="<?php echo base_url('assets/images/partner22.jpg')?>" alt="" class="img1 img-responsive">
                    <img src="<?php echo base_url('assets/images/partner22_hover.jpg')?>" alt="" class="img2 img-responsive">
                  </figure>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <?php include('includes/footer.php'); ?>
    <?php include('includes/js.php'); ?>
    </div>
  
    <!-- jQuery UI -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <script type='text/javascript'>
        $(document).ready(function() { 

          $( "#search_departure" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_departure').val(ui.item.label); // display the selected text
              $('#search_departure').val(ui.item.value); 
              return false;
            }
          });

          $( "#search_departure1" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_departure1').val(ui.item.label); // display the selected text
              $('#search_departure1').val(ui.item.value); // save selected id to input
              return false;
            }
          });
          $( "#search_departure2" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_departure2').val(ui.item.label); // display the selected text
              $('#search_departure2').val(ui.item.value); // save selected id to input
              return false;
            }
          });

          $( "#search_departure3" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_departure3').val(ui.item.label); // display the selected text
              $('#search_departure3').val(ui.item.value); // save selected id to input
              return false;
            }
          });


          $( "#search_destination" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_destination').val(ui.item.label); // display the selected text
              $('#search_destination').val(ui.item.value); // save selected id to input
              return false;
            }
          });

          $( "#search_destination1" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_destination1').val(ui.item.label); // display the selected text
              $('#search_destination1').val(ui.item.value); // save selected id to input
              return false;
            }
          });


          $( "#search_destination2" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_destination2').val(ui.item.label); // display the selected text
              $('#search_destination2').val(ui.item.value); // save selected id to input
              $('#search_departure3').val(ui.item.label);
              $('#search_departure3').val(ui.item.value);
              return false;
            }
          });

          $( "#search_destination3" ).autocomplete({
            source: function( request, response ) {
              // Fetch data
              $.ajax({
                url: "<?php echo base_url('welcome/getCityBySearch')?>",
                type: 'post',
                dataType: "json",
                data: {
                  search: request.term
                },
                success: function( data ) {
                  console.log(data);
                 
                  response( data );
                }
              });
            },
            select: function (event, ui) {
              $('#search_destination3').val(ui.item.label); // display the selected text
              $('#search_destination3').val(ui.item.value); // save selected id to input
              return false;
            }
          });
        

          $("#updateTraveller").on("click",function(){ 

            var adultPax = $("#adultPax").val();
            var childPax = $("#childPax").val();
            var infantPax = $("#infantPax").val();
            var travelClass = $("#travelClass").val();

            var totalPax = parseInt(adultPax)+parseInt(childPax)+parseInt(infantPax);          

            var finalPassenger = totalPax + ' ' + 'Traveller(s),' +  travelClass; 
            
            $('#passenger').val(finalPassenger);

            var cont = document.getElementById('cont');
            cont.style.display = 'none';
          });

          $("#updateTraveller1").on("click",function(){ 

            var adultPax1 = $("#adultPax1").val();
            var childPax1 = $("#childPax1").val();
            var infantPax1 = $("#infantPax1").val();
            var travelClass1 = $("#travelClass1").val();

            var totalPax1 = parseInt(adultPax1)+parseInt(childPax1)+parseInt(infantPax1);          

            var finalPassenger1 = totalPax1 + ' ' + 'Traveller(s),' +  travelClass1; 

            $('#passenger1').val(finalPassenger1);

            var cont1 = document.getElementById('cont1');
            cont1.style.display = 'none';

          });

          $("#updateTraveller2").on("click",function(){ 

            var adultPax2 = $("#adultPax2").val();
            var childPax2 = $("#childPax2").val();
            var infantPax2 = $("#infantPax2").val();
            var travelClass2 = $("#travelClass2").val();

            var totalPax2 = parseInt(adultPax2)+parseInt(childPax2)+parseInt(infantPax2);          

            var finalPassenger2 = totalPax2 + ' ' + 'Traveller(s),' +  travelClass2; 

            $('#passenger2').val(finalPassenger2);

            var cont2 = document.getElementById('cont2');
            cont2.style.display = 'none';

            });

          $("#searchFlight").on("click", function(){

           
              if($('#directFlight').not(':checked').length){

                  var df = "false";
                var directFlight = df;
                $("#directFlight").val(directFlight);
               // alert(directFlight);
               //$("#friend_name").val(res.user_fname);
              
              }else{
              //  alert('Checked')
                var df = "true";
                var directFlight = df;
                $('#directFlight').val(directFlight);
              } 
              if($('#creditShell').not(':checked').length){

                var cs = "false";
                var creditShell = cs;

                }else{
                //  alert('Checked')
                var cs = "true";
                var creditShell = cs;
              } 


            var searchDeparture = $("#search_departure").val();
            var searchDestination = $("#search_destination").val();
            var departureDate = $("#departure_date").val();
            var returnDate = $("#return_date").val();
            //alert(departureDate);
            var passenger = $("#passenger").val();
            var travelClass = $("#travelClass").val();
            var adultPax = $("#adultPax").val();
            var childPax = $("#childPax").val();
            var infantPax = $("#infantPax").val();
            var bookingType = $("#bookingType").val();
           // var directFlight = $("#directFlight").val();
           // alert(directFlight); 
          //  var creditShell = $("#creditShell").val();  
                     
         //     alert(directFlight);
            
            var paxinfo = {'ADULT':adultPax,'CHILD':childPax,'INFANT':infantPax };
            var deartureCity = {'code':searchDeparture};
            var destinationCity = {'code':searchDestination};

            var routeInfos = [];
             routeInfos =[{'fromCityOrAirport':deartureCity, 'toCityOrAirport':destinationCity,'travelDate':departureDate}];
            var searchModifiers = {'isDirectFlight':directFlight, 'isConnectingFlight': creditShell};


            $.ajax({
                url: "<?php echo base_url('flights')?>",
                type: 'post',
                dataType: "json",
                data: {'cabinClass':travelClass,'paxInfo':paxinfo,'routeInfos':routeInfos,'searchModifiers':searchModifiers },
                success: function( data ) {
                  var res = JSON.parse(data);
                  
                  console.log(res.status.success);
                  if(res.status.success == 'true'){

                    

                  }else{



                  }
                 
                 // response( data );
                }
              });
          });
          
        });

    </script>
    <script>
  $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        //alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
<script>
    function toggle(ele) {
      var cont = document.getElementById('cont');
      if (cont.style.display == 'block') {
          cont.style.display = 'none';

          document.getElementById(ele.id).value = '1 Traveller(s), Economy';
      }
      else {
          cont.style.display = 'block';
          document.getElementById(ele.id).value = '1 Traveller(s), Economy';
      }
    }

    function toggle1(ele1) {
      var cont1 = document.getElementById('cont1');
      if (cont1.style.display == 'block') {
          cont1.style.display = 'none';

          document.getElementById(ele1.id).value = '1 Traveller(s), Economy';
      }
      else {
          cont1.style.display = 'block';
          document.getElementById(ele1.id).value = '1 Traveller(s), Economy';
      }
    }

    function toggle2(ele2) {
      var cont2 = document.getElementById('cont2');
      if (cont2.style.display == 'block') {
          cont2.style.display = 'none';

          document.getElementById(ele2.id).value = '1 Traveller(s), Economy';
      }
      else {
          cont2.style.display = 'block';
          document.getElementById(ele1.id).value = '1 Traveller(s), Economy';
      }
    }
</script>
<script>
  $(document).ready(function() {
    $('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');
 
        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
        
        
    });
});
</script>

<script>
function disableBtn() {
  document.getElementById("return_date").disabled = true;
}

function undisableBtn() {
  document.getElementById("return_date").disabled = false;
}
</script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script>
  $(document).ready(function() {

    var max_fields_limit = 3;

    var x = 1;

    $("body").on("click",".add-more",function(){ 

      if(x < max_fields_limit){
        x++;
        var html = $(".after-add-more").first().clone();      
      
          $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
      
      
        $(".after-add-more").last().after(html);
      }
     
       
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more").remove();
    });
});


// $(document).ready(function() {

//   var max_fields_limit  = 4;
//   var fieldHTML = '';
//   fieldHTML +=  '<div class="row after-add-more" style="margin-top: 20px;margin-bottom: 15px;">';
//   fieldHTML += '<div class="col-sm-2 col-md-2 pad-col" style="display: flex;">';
//   fieldHTML += '<div class="select1_wrapper">';  
//   fieldHTML += '<div class="select1_inner">';
//   fieldHTML += '<input type="text" name="departure" id="search_departure3" placeholder ="From" minlength="3" style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width: 100%">';
//   fieldHTML += '</div>';
//   fieldHTML += '</div>';
//   fieldHTML += '</div>';
//   fieldHTML += '<div class="col-sm-2 col-md-2 pad-col">';
//   fieldHTML += '<div class="select1_wrapper">';
//   fieldHTML += '<div class="select1_inner">';
//   fieldHTML += '<input type="text" name="destination" id="search_destination3" placeholder ="Destination"  style="font-size: 13px;line-height: 20px;padding: 7px 20px 7px 15px;color: #c2c2c2;border: 1px solid #ececec;width:100%;">';
//   fieldHTML +=  '</div>';
//   fieldHTML +=  '</div>';
//   fieldHTML +=  '</div>';
//   fieldHTML +=  '<div class="col-sm-3 col-md-3 pad-col">';
//   fieldHTML +=  '<div class="input1_wrapper">';
//   fieldHTML +=  '<div class="input1_inner">';
//   fieldHTML +=  '<input type="text" class="input" name="return_date" id="return_date2" placeholder="Departure">';
//   fieldHTML +=  '</div>';
//   fieldHTML +=  '</div>';
//   fieldHTML +=  '</div>';                             
//   fieldHTML += '<div class="col-sm-3 col-md-3">';
//   fieldHTML += '<a href="#" class="remove_field" style="margin-left:10px;">Remove</a>';
//   fieldHTML += '</div>';              
//   fieldHTML += '</div>';
//   var x=1;
//   $('.add-more').click(function(e){ 
//     e.preventDefault();
//     if(x < max_fields_limit){
//       x++;
//       $('.after-add-more').append(fieldHTML);
//     }
      
       
//     });

//     $('.after-add-more').on("click",".remove_field", function(e){ //user click on remove text links
//         e.preventDefault(); $(this).parent('div').remove(); x--;
//     })
// });

// exchange cities 

function exchangeCity(){
  
    var pickup = $('#search_departure').val();
    $('#search_departure').val($('#search_destination').val());
    $('#search_destination').val(pickup);
  
}

function exchangeCity1(){

//alert("hi");
var pickup1 = $('#search_departure1').val();
$('#search_departure1').val($('#search_destination1').val());
$('#search_destination1').val(pickup1);

}

$(document).ready(function () {
  
  $('#departure_date').datepicker({ 

    minDate: 0,
    dateFormat: "dd-mm-yy",
    beforeShow: function() {
      $(this).datepicker('option', 'maxDate', $('#return_date').val());
    }

  });

  $('#return_date').datepicker({

    defaultDate: "+1D",
    dateFormat: "dd-mm-yy",
    beforeShow: function() {
      $(this).datepicker('option', 'minDate', $('#departure_date').val());
      if ($('#departure_date').val() === '') $(this).datepicker('option', 'minDate', 0);                             
    }
  });

  $('#departure_date1').datepicker({ 

      minDate: 0,
      dateFormat: "dd-mm-yy",
      beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#return_date1').val());
      }
  });

  $('#return_date1').datepicker(
  {
          defaultDate: "+1D",
          dateFormat: "dd-mm-yy",
          beforeShow: function() {
          $(this).datepicker('option', 'minDate', $('#departure_date1').val());
  if ($('#departure_date1').val() === '') $(this).datepicker('option', 'minDate', 0);                             
      }
    });


    $('#departure_date2').datepicker({ 

      minDate: 0,
      dateFormat: "dd-mm-yy",
      beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#return_date2').val());
      }
      });

      $('#return_date2').datepicker(
      {
          defaultDate: "+1D",
          dateFormat: "dd-mm-yy",
          beforeShow: function() {
          $(this).datepicker('option', 'minDate', $('#departure_date2').val());
      if ($('#departure_date2').val() === '') $(this).datepicker('option', 'minDate', 0);                             
      }
      });

  });

  $('#directFlight').click(function() {

    var df = $('#directFlight').prop('checked');
    if(df == true){

      $("#directFlight").val(df);

    }else{

      $("#directFlight").val(df);

    }

  });

  $('#creditShell').click(function() {

   var cs =  $('#creditShell').prop('checked');
   if(cs == true){

    $("#creditShell").val(cs);

    }else{

    $("#creditShell").val(cs);

    }

  });

  $('#directFlight1').click(function() {

    var df1 = $('#directFlight1').prop('checked');
    if(df1 == true){

      $("#directFlight1").val(df1);

    }else{

      $("#directFlight1").val(df1);

    }

    });

    $('#creditShell1').click(function() {

    var cs1 =  $('#creditShell1').prop('checked');
    if(cs1 == true){

    $("#creditShell1").val(cs1);

    }else{

    $("#creditShell1").val(cs1);

    }

    });


  $(function() {
        $("form[name='searchflight']").validate({
         // $('#myTextarea').prop('required',true);

    
      rules: {
       
          departure: {

          required : true,
          minlength: 3

          },      
          destination: {

          required: true,
          minlength: 3       
           
          },
          
          departure_date: {

            required: true,

          }
        
        },
    
      messages: {
        departure:{ 
        required : "Please enter Origin",
        minlength : "Origin should be 3 Letters. "
        },
        destination: {
        required: "Please enter destination",
        minlength : "Destination should be 3 Letters. "
        },
        departure_date: {

        required: "Please select departure date."

        },
      },
      
      submitHandler: function(form) {
        form.submit();
      }
    
   });
  });

  
</script>
<script>
  var start_date = null, end_date = null;
var timestamp_start_date = null, timestamp_end_date = null;
var $input_start_date = null, $input_end_date = null;

function getDateClass(date, start, end){
  if(end != null && start != null){
    if(date > start && date < end)
      return [ true, "sejour", "Séjour" ];
  }
  
  if(date == start)
    return [ true, "start", "Début de votre séjour" ];
  if(date == end)
    return [ true, "end", "Fin de votre séjour" ];
  
  return false;
}

function datepicker_draw_nb_nights(){
  var $datepicker = jQuery("#ui-datepicker-div");
  setTimeout(function(){
    if(start_date != null && end_date != null){
      var $qty_days_stay = jQuery("<div />", { class: "ui-datepicker-stay-duration" });
      var qty_nights_stay = get_days_difference(timestamp_start_date, timestamp_end_date);
      $qty_days_stay.text(qty_nights_stay + " nights stay");
      $qty_days_stay.appendTo($datepicker);
    }
  });
}

var options_start_date = {
  showAnim: false,
  constrainInput: true,
    numberOfMonths: 2,
  showOtherMonths: true,
  beforeShow: function(input, datepicker){
    datepicker_draw_nb_nights();
  },
  beforeShowDay: function(date){
    // 0: published
    // 1: class
    // 2: tooltip
    var timestamp_date = date.getTime();
    var result = getDateClass(timestamp_date, timestamp_start_date, timestamp_end_date);
    if(result != false)
      return result;
    
    return [true, "", ""];
    // return [ true, "chocolate", "Chocolate! " ];
  },
  onSelect: function(date_string, datepicker){
    // this => input
    start_date = $input_start_date.datepicker("getDate");
    timestamp_start_date = start_date.getTime();
  },
  onClose: function(){
    if(end_date != null){
      if(timestamp_start_date >= timestamp_end_date || end_date == null){
        $input_end_date.datepicker("setDate", null);
        end_date = null;
        timestamp_end_date = null;
        $input_end_date.datepicker("show");
        return;
      }
    }
    if(start_date != null && end_date == null)
      $input_end_date.datepicker("show");
  }
};
var options_end_date = {
  showAnim: false,
  constrainInput: true,
    numberOfMonths: 2,
  showOtherMonths: true,
  beforeShow: function(input, datepicker){
    datepicker_draw_nb_nights();
  },
  beforeShowDay: function(date){
    var timestamp_date = date.getTime();
    var result = getDateClass(timestamp_date, timestamp_start_date, timestamp_end_date);
    if(result != false)
      return result;
    
    return [ true, "", "Chocolate !" ];
  },
  onSelect: function(date_string, datepicker){
    // this => input
    end_date = $input_end_date.datepicker("getDate");
    timestamp_end_date = end_date.getTime();
  },
  onClose: function(){
    if(end_date == null)
      return;
    
    if(timestamp_end_date <= timestamp_start_date || start_date == null){
      $input_start_date.datepicker("setDate", null);
      start_date = null;
      timestamp_start_date = null;
      $input_start_date.datepicker("show");
    }
  }
};

$input_start_date = jQuery("#start-date");
$input_end_date = jQuery("#end-date");

$input_start_date.datepicker(options_start_date);
$input_end_date.datepicker(options_end_date);

function get_days_difference(start_date, end_date){
  return Math.floor(end_date - start_date) / (1000*60*60*24);
}
</script>
  </body>
</html>