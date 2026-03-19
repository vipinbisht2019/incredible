<?php //echo '<pre>'; print_r($destiDetails); die;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tour Detail</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<?php include('includes/css.php'); ?>
<link href="<?php echo base_url('assets/css/tour-detail.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/plugin.css')?>" rel="stylesheet">

<style>
  .destination-content {
    padding: 15px 15px;
    text-align: left;
}
.destination-content h3{ text-align: left; }
</style>

</head>
<body class="not-front page-about">

<div id="main">

<?php include('includes/header.php'); ?>

<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span>VISA</div>
  </div>
</div>


<section class="main-content detail">
        <div class="container">
            <div class="row" style="position: relative;">
                <div id="content" class="col-lg-8">
                    <div class="detail-content content-wrapper">   
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">
                                <h2><?php echo $destiDetails['tourGenInfo']['TourName'];?></h2>
                                <p class="detail-info-price"><span class="bold">Rs. <?php echo $destiDetails['tourGenInfo']['tour_price'];?></span></p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->
                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <!-- 1st Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="0" class="active">
                                        <!-- 1st Indicator Image -->
                                        <img src="http://122.176.21.183/2020/projects/stopnshop/uploads/tourimage/<?php echo $destiDetails['tourGenInfo']['Image'];?>" alt="in_th_030_01_sm">
                                    </li>
                                    <!-- 2nd Indicator -->
                                    <?php foreach ($destiDetails['tourImages'] as $key => $tourImageValue) { ?>
                                      
                                        <li data-target="#in_th_030" data-slide-to="1">
                                            <img src="http://122.176.21.183/2020/projects/stopnshop/uploads/tourimage/<?php echo $tourImageValue['ImageName'];?>" alt="in_th_030_02_sm">
                                        </li>

                                    <?php } ?>
                                    <!-- 3rd Indicator -->
                                    <!-- <li data-target="#in_th_030" data-slide-to="2">
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider3.jpg" alt="in_th_030_03_sm">
                                    </li>
                                    <li data-target="#in_th_030" data-slide-to="3">
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider4.jpg" alt="in_th_030_03_sm">
                                    </li> -->
                                </ol> <!-- /Indicators -->
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->
                                    <div class="item active" style="transition-duration: 2000ms;">
                                        <!-- Slide Background -->
                                        <img src="http://122.176.21.183/2020/projects/stopnshop/uploads/tourimage/<?php echo $destiDetails['tourGenInfo']['Image'];?>">                                        
                                    </div>
                                    <!-- End of Slide -->
                                    <!-- Second Slide -->
                                    <?php foreach ($destiDetails['tourImages'] as $key => $tourImageValue) { ?>
                                    <div class="item" style="transition-duration: 2000ms;">
                                        <img src="http://122.176.21.183/2020/projects/stopnshop/uploads/tourimage/<?php echo $tourImageValue['ImageName'];?>" alt="in_th_030_02">
                                    </div>
                                    <?php } ?>
                                    <!-- End of Slide -->
                                    <!-- Third Slide -->
                                    <!-- <div class="item" style="transition-duration: 2000ms;">
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider3.jpg" alt="in_th_030_03">
                                    </div> -->
                                    <!-- End of Slide -->
                                    <!-- <div class="item" style="transition-duration: 2000ms;">
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider4.jpg" alt="in_th_030_03">
                                    </div> -->
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Description</h3>
                            </div>
                            <div class="description-content">
                                    <?php echo $destiDetails['tourGenInfo']['TourDescription'];?>
                                <!-- <table>
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="title">Departure</td>
                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> San Francisco International Airport</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Departure Time</td>
                                            <td><i class="fa fa-clock-o" aria-hidden="true"></i> Please arrive by 10:20 AM for a prompt departure at 10:50 AM</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Maximum travellers</td>
                                            <td><i class="fa fa-user" aria-hidden="true"></i> 23</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Languages</td>
                                            <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> English, Thai, Malayt</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Includes</td>
                                            <td>
                                                <ul>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Airfare</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Transportation</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Professional Guide</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="title">Excludes</td>
                                            <td class="excludes">
                                                <ul>
                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Departure Taxes</li>
                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Entry Fees</li>
                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Insurance</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="title">Popular Places</td>
                                            <td>
                                                <ul>
                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                        <div class="location-map detail-box">
                            <div class="detail-title">
                                <h3>Location Map</h3>
                            </div>
                            <div class="map-frame">
                                <iframe src="<?php echo  $destiDetails['tourGenInfo']['googlemap']; ?>" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="detail-timeline detail-box">
                            <div class="detail-title">
                                <h3>Tour Timeline</h3>
                            </div>
                            <div class="timeline-content">
                                <ul class="timeline">
                                    <!-- Item 1 -->
                                <?php foreach ($destiDetails['tourIternityInfo'] as $key => $itenearyValue) { ?>
                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span><?php echo $itenearyValue['ItenaryDay']; ?></span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day <?php echo $itenearyValue['ItenaryDay']; ?> : <?php echo $itenearyValue['ItineraryTitle']; ?>.</span>
                                            </div>
                                            <div class="desc">
                                            <?php echo $itenearyValue['Description']; ?>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                    <!-- Item 2 -->
                                    <!-- <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>3</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 3 : Arrive Kathmandu</span>
                                            </div>
                                            <div class="desc">
                                                <p>Arrive in Kathmandu and relax while enjoying the color and energy of Nepal’s capital city. Duffels of personal climbing gear and high-altitude clothing will be collected for the cargo flights to Lukla and will be waiting for you at Base Camp. </p>
                                            </div>
                                        </div>
                                    </li> -->
                                    <!-- Item 3 -->
                                    <!-- <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>4</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 4 - 5 : Enjoy Kathmandu</span>
                                            </div>
                                            <div class="desc">
                                                <p>Enjoy Kathmandu with a city tour and attend any governmental and media affairs involving team members.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>
                                            </div>
                                        </div>
                                    </li> -->
                                    <!-- Item 4 -->
                                    <!-- <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>6</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 6 : Fly to Lukla</span>
                                            </div>
                                            <div class="desc">
                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>
                                            </div>
                                        </div>
                                    </li> -->
                                    <!-- <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>7</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 7 - 15 : Trek to Base Camp</span>
                                            </div>
                                            <div class="desc">
                                                <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. Additional acclimatization days are scheduled at Namche (11,400ft/3,475m) and Pheriche (14,000ft/4,267m).</p>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="top-attractions detail-box">
                            <div class="detail-title">
                                <h3>Hotels and Availabilities</h3>
                            </div>
                            <div class="top-attraction-content">
                            <?php foreach ($destiDetails['tourHotelInfo'] as $key => $hotelValue) { ?>
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="http://122.176.21.183/2020/projects/stopnshop/uploads/tourimage/<?php echo $hotelValue['Image'] ?>" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4><?php echo $hotelValue['HotelsName']?></h4>
                                            <!-- <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Wifi</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Parking</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Swimming Pool</li>
                                            </ul> -->
                                        </div>
                                        <!-- <div class="att-content-right">
                                            <p>Starting from <span class="bold">Rs. 1500</span></p>
                                            <p>1 night / 3 person</p>
                                        </div> -->
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="<?php //echo base_url('assets/images/bucket2.jpg')?>" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Phulay Bay Resort</h4>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Wifi</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Parking</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Swimming Pool</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Daily Housekeeping</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Restaurant Bar and Lounge</li>
                                            </ul>
                                        </div>
                                        <div class="att-content-right">
                                            <p>Starting from <span class="bold">Rs. 1500</span></p>
                                            <p>1 night / 3 person</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="<?php //echo base_url('assets/images/bucket3.jpg')?>" alt="Images">
                                    </div>/
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Phulay Bay Resort</h4>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Wifi</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Parking</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Swimming Pool</li>
                                            </ul>
                                        </div>
                                        <div class="att-content-right">
                                            <p>Starting from <span class="bold">Rs. 1500</span></p>
                                            <p>1 night / 3 person</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!--<div class="comments detail-box">
                            <div class="detail-title">
                                <h3>Comments</h3>
                            </div>
                            <div class="comment-content">
                                <div class="comment-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="comment-image">
                                                <img src="images/comment.jpg" alt="Images">
                                                <h4><a href="#">Peter Parker</a></h4>
                                                <span class="comment-date">(18 Dec 2018)</span>
                                                <a class="btn-blue btn-red" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            <div class="comment-desc">
                                                <span class="travel-date"> Travelled On : 25 March 2018</span>
                                                <div class="deal-rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                            </div>
                                            <div class="comment-item comment-reply">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4">
                                                        <div class="comment-image">
                                                            <img src="images/comment.jpg" alt="Images">
                                                            <h4><a href="#">Peter Parker</a></h4>
                                                            <span class="comment-date">(18 Dec 2018)</span>
                                                            <a class="btn-blue btn-red" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8">
                                                        <div class="comment-desc">
                                                            <span class="travel-date"> Travelled On : 25 March 2018</span>
                                                            <div class="deal-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star-o"></span>
                                                                <span class="fa fa-star-o"></span>
                                                            </div>
                                                            <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                                        </div>
                                                    </div>
                                                </div>     
                                            </div>
                                            <div class="comment-item comment-reply">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4">
                                                        <div class="comment-image">
                                                            <img src="images/comment.jpg" alt="Images">
                                                            <h4><a href="#">Peter Parker</a></h4>
                                                            <span class="comment-date">(18 Dec 2018)</span>
                                                            <a class="btn-blue btn-red" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8">
                                                        <div class="comment-desc">
                                                            <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                                        </div>
                                                    </div>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        </div>-->
                        <div class="comments-form detail-box">
                            <div class="detail-title">
                                <h3>Add Your Comment</h3>
                            </div>
                            <form>
                                <div class="row">
                                    
                                    <div class="form-group col-lg-6">
                                        <label for="Name">Name:</label>
                                        <input type="email" class="form-control" id="Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="website">Website:</label>
                                        <input type="email" class="form-control" id="website">
                                    </div>
                                    <div class="textarea form-group col-lg-12">
                                        <label for="Name">Your Comment:</label>
                                        <textarea></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="comment-btn">
                                            <a href="#" class="btn-blue btn-red">Submit Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="sidebar-sticky" class="col-lg-4" style="will-change: transform; transform: translateZ(0px);">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item sidebar-item-dark">
                            <div class="detail-title">
                                <h3>Book this tour</h3>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="Name1" placeholder="Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" id="email1" placeholder="Email">
                                    </div>
                                    <div class="form-group col-lg-6 col-left-padding">
                                        <input type="number" class="form-control" id="phnumber1" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                    <div class="form-group col-lg-6 col-left-padding">
                                        <input type="number" class="form-control" id="phnumber">
                                    </div>
                                    <div class="textarea col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="comment-btn">
                                            <a href="#" class="btn-blue btn-red">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-item">
                            <div class="detail-title">
                                <h3>Popular Packages</h3>
                            </div>

                            <div class="col-lg-12">
                            <div class="destination-item">
                                <div class="destination-image">
                                    <img src="<?php echo base_url('assets/images/destination1.jpg')?>" alt="Image">
                                    <!--<div class="destination-overlay"></div>
                                    <div class="destination-btn">
                                        <a href="#" class="btn-blue btn-red">Book Now</a>
                                    </div>-->
                                </div>
                                <div class="destination-content">
                                    <h3><a href="<?php echo base_url('destination/details/tour_detail')?>">Bahamas Carribean Cruises</a></h3>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                    <a href="#" class="btn-blue btn-red" tabindex="-1">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="destination-item">
                                <div class="destination-image">
                                    <img src="<?php echo base_url('assets/images/destination1.jpg')?>" alt="Image">
                                    <!--<div class="destination-overlay"></div>
                                    <div class="destination-btn">
                                        <a href="#" class="btn-blue btn-red">Book Now</a>
                                    </div>-->
                                </div>
                                <div class="destination-content">
                                    <h3><a href="<?php echo base_url('destination/details/tour_detail')?>">Bahamas Carribean Cruises</a></h3>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                    <a href="#" class="btn-blue btn-red" tabindex="-1">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="destination-item">
                                <div class="destination-image">
                                    <img src="<?php echo base_url('assets/images/destination1.jpg')?>" alt="Image">
                                    <!--<div class="destination-overlay"></div>
                                    <div class="destination-btn">
                                        <a href="#" class="btn-blue btn-red">Book Now</a>
                                    </div>-->
                                </div>
                                <div class="destination-content">
                                    <h3><a href="<?php echo base_url('destination/details/tour_detail')?>">Bahamas Carribean Cruises</a></h3>
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                    <a href="#" class="btn-blue btn-red" tabindex="-1">Book Now</a>
                                </div>
                            </div>
                        </div>

                            <!--<div class="sidebar-content sidebar-slider slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="">Previous</button>
                                <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1760px; transform: translate3d(-352px, 0px, 0px);" role="listbox"><div class="sidebar-package slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 352px;" tabindex="-1">
                                    <div class="sidebar-package-image">
                                        <img src="<?php echo base_url('assets/images/detailslider3.jpg')?>" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="tour-detail.html" tabindex="-1">Royal Caribbean Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                        <a href="#" class="btn-blue btn-red" tabindex="-1">Book Now</a>
                                    </div>
                                </div><div class="sidebar-package slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 352px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                    <div class="sidebar-package-image">
                                        <img src="<?php echo base_url('assets/images/detailslider1.jpg')?>" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="tour-detail.html" tabindex="0">Royal Caribbean Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                        <a href="#" class="btn-blue btn-red" tabindex="0">Book Now</a>
                                    </div>
                                </div><div class="sidebar-package slick-slide" data-slick-index="1" aria-hidden="true" style="width: 352px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                    <div class="sidebar-package-image">
                                        <img src="<?php echo base_url('assets/images/detailslider2.jpg')?>" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="tour-detail.html" tabindex="-1">Bahamas Royal Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                        <a href="#" class="btn-blue btn-red" tabindex="-1">Book Now</a>
                                    </div>
                                </div><div class="sidebar-package slick-slide" data-slick-index="2" aria-hidden="true" style="width: 352px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                    <div class="sidebar-package-image">
                                        <img src="<?php echo base_url('assets/images/detailslider3.jpg')?>" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="tour-detail.html" tabindex="-1">Royal Caribbean Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                        <a href="#" class="btn-blue btn-red" tabindex="-1">Book Now</a>
                                    </div>
                                </div><div class="sidebar-package slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 352px;" tabindex="-1">
                                    <div class="sidebar-package-image">
                                        <img src="<?php echo base_url('assets/images/detailslider1.jpg')?>" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="tour-detail.html" tabindex="-1">Royal Caribbean Cruises</a></h4>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                        <p><i class="flaticon-time"></i> 5 days starts from <span class="bold">$659</span> </p>
                                        <a href="#" class="btn-blue btn-red" tabindex="-1">Book Now</a>
                                    </div>
                                </div></div></div>
                                
                                
                            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="">Next</button></div>-->
                        </div>
                        <!--<div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.</p>
                                <p><i class="flaticon-phone-call"></i> (012)-345-6789</p>
                                <p><i class="flaticon-mail"></i> tourntravel@testmail.com</p>
                            </div>
                        </div>-->
                    </aside>
                </div><div id="sidebar-sticky" class="col-lg-4 jquery-stickit-spacer" style="visibility: hidden !important; display: none !important;"></div>
            </div>
        </div>
    </section>

<?php include('includes/footer.php'); ?>

</div>
<?php include('includes/js.php'); ?>
<script src="<?php echo base_url('assets/js/plugin.js');?>"></script>
</body>

</html>