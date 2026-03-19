<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Hotel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $search_hotels[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $search_hotels[0]['meta_keyword']; ?>">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <?php include('includes/css.php'); ?>
</head>
    <body class="not-front page-post">

        <div id="main">
            <?php include('includes/header.php'); ?>
            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Pages<span>/</span>Hotels</div>
                </div>
            </div>
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="sidebar-block">
                                <form action="javascript:void(0);">
                                    <div class="col-sm-12 no-padding">
                                        <div class="input1_wrapper">
                                            <label>City:</label>
                                            <div class="input2_inner">
                                                <input type="text" class="input" value="Prague">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label>Check-In:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="16/07/2014">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label>Check-Out:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="26/07/2014">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label class="col-md-6" style="padding-left:0;padding-top:12px;">Rooms:</label>
                                            <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                                <input type="text" class="input" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input2_wrapper">
                                            <label class="col-md-6" style="padding-left:0;padding-top:12px;">Adults:</label>
                                            <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                                <input type="text" class="form-control" value="2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-12 no-padding margin-top">
                                        <div class="input1_wrapper">
                                            <label class="col-md-6" style="padding-left:0;padding-top:12px;">Children:</label>
                                            <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                                <input type="text" class="input" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;"></label>
                                    <div class="no-padding margin-top col-md-6 text-right" style="margin-top:30px;">
                                        <button class="btn btn-default btn-cf-submit" style="width:100%;">SEARCH</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <div class="star_rating_wrapper">
                                <div class="title">Star Rating</div>
                                <div class="content">
                                    <div class="star_rating">
                                        <form>
                                            <div>
                                                <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1" type="checkbox" checked>
                                                <label for="checkbox-1" class="checkbox1-custom-label"><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="assets/images/star1.png" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><span>5 Stars</span></label>
                                            </div>
                                            <div>
                                                <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2" type="checkbox">
                                                <label for="checkbox-2" class="checkbox1-custom-label"><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><span>4 Stars</span></label>
                                            </div>
                                            <div>
                                                <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3" type="checkbox" checked>
                                                <label for="checkbox-3" class="checkbox1-custom-label"><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><span>3 Stars</span></label>
                                            </div>
                                            <div>
                                                <input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox">
                                                <label for="checkbox-4" class="checkbox1-custom-label"><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><span>2 Stars</span></label>
                                            </div>
                                            <div>
                                                <input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox">
                                                <label for="checkbox-5" class="checkbox1-custom-label"><img src="<?php echo base_url('assets/images/star1.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><img src="assets/images/star2.png" alt=""><img src="<?php echo base_url('assets/images/star2.png')?>" alt=""><span>1 Stars</span></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="margin-top"></div>
                            <div class="sm_slider sm_slider1">
                                <a class="sm_slider_prev" href="#"></a>
                                <a class="sm_slider_next" href="#"></a>
                                <div class="">
                                    <div class="carousel-box">
                                        <div class="inner">
                                            <div class="carousel main">
                                                <ul>
                                                    <li>
                                                        <div class="sm_slider_inner">
                                                            <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
                                                            <div class="txt2">George Smith</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sm_slider_inner">
                                                            <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
                                                            <div class="txt2">Adam Parker</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <form action="javascript:;" class="form3 clearfix">
                                <div class="select1_wrapper txt">
                                    <label>Sort by:</label>
                                </div>
                                <div class="select1_wrapper sel2">
                                    <div class="select1_inner">
                                        <select class="select2 select" style="width: 100%">
                                            <option value="1">Name</option>
                                            <option value="2">Name2</option>
                                            <option value="2">Name3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="select1_wrapper sel2">
                                    <div class="select1_inner">
                                        <select class="select2 select" style="width: 100%">
                                            <option value="1">Price (low)</option>
                                            <option value="2">Price2</option>
                                            <option value="2">Price3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="select1_wrapper sel2">
                                    <div class="select1_inner">
                                        <select class="select2 select" style="width: 100%">
                                            <option value="1">Stars</option>
                                            <option value="2">Raiting2</option>
                                            <option value="2">Raiting3</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels01.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Normandy Hotel <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Normandy Hotel</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$250.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels02.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Hotel West-End <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Hotel West-End</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$349.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels03.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Chambiges Elysees <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Chambiges Elysees</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$360.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hl1"></div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels04.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Hamilton Hotel <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Hamilton Hotel</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$75.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels05.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Central Grand Hotel <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Central Grand Hotel</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$65.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels06.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Ambasador Premium <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Ambasador Premium</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$35.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hl1"></div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels07.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Grand Plaza <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Grand Plaza</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$450.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels08.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Grand Iberia <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Grand Iberia</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$255.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb5">
                                        <div class="thumbnail clearfix">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images/hotels09.jpg')?>" alt="" class="img-responsive">
                                                <div class="over">
                                                    <div class="v1">Westminster Hotel <span>6.9 Review score</span></div>
                                                    <div class="v2">Twin / Double Room</div>
                                                </div>
                                            </figure>
                                            <div class="caption">
                                                <div class="txt1">Westminster Hotel</div>
                                                <div class="txt2">Twin / Double Room</div>
                                                <div class="txt3 clearfix">
                                                    <div class="left_side">
                                                        <div class="price">$275.00</div>
                                                        <div class="stars2">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt="">
                                                            <img src="<?php echo base_url('assets/images/star1.png')?>" alt=""> 
                                                        </div>
                                                    </div>
                                                    <div class="right_side"><a href="booking-hotel.html" class="btn-default btn1">Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pager_wrapper">
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