<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Incredible Vacations</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">

    <?php include('includes/css.php'); ?>
    <style>
      .btn-form1-submit{ background: #244082;  }
      .btn-form1-submit:hover {
      background: #e41d37;}
    </style>
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
                          <li>
                            <div class="slider">
                              <div class="slider_inner">
                                <div class="txt1"><span>7 - Day Tour</span></div>
                                <div class="txt2"><span>AMAZING CARIBBEAN</span></div>
                                <div class="txt3"><span>Lorem ipsum dolor eleifend option congue nihil imperdiet doming id quod.</span></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="slider">
                              <div class="slider_inner">
                                <div class="txt1"><span>Hello World !</span></div>
                                <div class="txt2"><span>Memorable Experiences</span></div>
                                <div class="txt3"><span>Bringing to you curated experiences from world over with our seasoned expertise</span></div>
                              </div>
                            </div>
                          </li>
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
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Flying from:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">City or Airport</option>
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
                          <label>To:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">City or Airport</option>
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
                          <label>Departing:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Returning:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-1">
                        <div class="select1_wrapper">
                          <label>Adult:</label>
                          <div class="select1_inner">
                            <select class="select2 select select3" style="width: 100%">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-1">
                        <div class="select1_wrapper">
                          <label>Child:</label>
                          <div class="select1_inner">
                            <select class="select2 select select3" style="width: 100%">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
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
                <div id="tabs-2">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-4">
                        <div class="select1_wrapper">
                          <label>City or Hotel Name:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Enter a destination or hotel name</option>
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
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Check-In:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Check-Out:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Adult:</label>
                          <div class="select1_inner">
                            <select class="select2 select" style="width: 100%">
                              <option value="1">Room  for  1  adult</option>
                              <option value="2">Room  for  2  adult</option>
                              <option value="3">Room  for  3  adult</option>
                              <option value="4">Room  for  4  adult</option>
                              <option value="5">Room  for  5  adult</option>
                              <option value="6">Room  for  6  adult</option>
                              <option value="7">Room  for  7  adult</option>
                              <option value="8">Room  for  8  adult</option>
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
                <div id="tabs-3">
                  <form action="javascript:;" class="form1">
                    <div class="row">
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Country:</label>
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
                          <label>City:</label>
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
                          <label>Location:</label>
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
                          <label>Pick up Date:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>Drop off Date:</label>
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
                          <label>Sail To:</label>
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
                          <label>Sail From:</label>
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
                          <label>Start Date:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="From any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>End of Date:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="To any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Cruise Ship:</label>
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
                          <label>Sail To:</label>
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
                          <label>Sail From:</label>
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
                          <label>Start Date:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="From any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="input1_wrapper">
                          <label>End of Date:</label>
                          <div class="input1_inner">
                            <input type="text" class="input datepicker" value="To any month">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 col-md-2">
                        <div class="select1_wrapper">
                          <label>Cruise Ship:</label>
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
                      <img src="assets/images/experience.png" alt="" class="img1 img-responsive">
                      <img src="assets/images/experience-hover.png" alt="" class="img2 img-responsive">
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
                      <img src="assets/images/netwrk.png" alt="" class="img1 img-responsive">
                      <img src="assets/images/netwrk-hover.png" alt="" class="img2 img-responsive">
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
                      <img src="assets/images/cost.png" alt="" class="img1 img-responsive">
                      <img src="assets/images/cost-hover.png" alt="" class="img2 img-responsive">
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
                      <img src="assets/images/transparent.png" alt="" class="img1 img-responsive">
                      <img src="assets/images/transparent-hover.png" alt="" class="img2 img-responsive">
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
                            <img src="assets/images/at2.jpg" alt="Image">
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
                            <img src="assets/images/at1.jpg" alt="Image">
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
                            <img src="assets/images/at3.jpg" alt="Image">
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
                            <img src="assets/images/at1.jpg" alt="Image">
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
                            <img src="assets/images/at3.jpg" alt="Image">
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
                            <img src="assets/images/at2.jpg" alt="Image">
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
                  <img src="assets/images/package1.jpg" alt="Image">
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
                    <p><span>$659</span> / PER </p>
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
                <img src="assets/images/package2.jpg" alt="Image">
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
                    <p><span>$659</span> / PER </p>
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
                <img src="assets/images/package3.jpg" alt="Image">
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
                  <p><span>$659</span> / PER </p>
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
                <img src="assets/images/package1.jpg" alt="Image">
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
                  <p><span>$659</span> / PER </p>
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
                    <img src="assets/images/partner11.jpg" alt="" class="img1 img-responsive">
                    <img src="assets/images/partner11_hover.jpg" alt="" class="img2 img-responsive">
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
                    <img src="assets/images/partner22.jpg" alt="" class="img1 img-responsive">
                    <img src="assets/images/partner22_hover.jpg" alt="" class="img2 img-responsive">
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
                    <img src="assets/images/partner33.jpg" alt="" class="img1 img-responsive">
                    <img src="assets/images/partner33_hover.jpg" alt="" class="img2 img-responsive">
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
                    <img src="assets/images/partner44.jpg" alt="" class="img1 img-responsive">
                    <img src="assets/images/partner44_hover.jpg" alt="" class="img2 img-responsive">
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
                    <img src="assets/images/partner11.jpg" alt="" class="img1 img-responsive">
                    <img src="assets/images/partner11_hover.jpg" alt="" class="img2 img-responsive">
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
                    <img src="assets/images/partner22.jpg" alt="" class="img1 img-responsive">
                    <img src="assets/images/partner22_hover.jpg" alt="" class="img2 img-responsive">
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
  </body>
</html>