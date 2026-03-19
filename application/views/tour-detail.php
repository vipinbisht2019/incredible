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
<!--<style>
    section.destination-padding{
  padding-bottom: 50px;
}
.destinations .category-box{
  margin-bottom: 20px;
}
.destination-item{
  overflow: hidden;
  position: relative;
  margin-bottom: 30px;
  transition: all ease-in-out 0.3s;
  border: 1px solid #f1f1f1;
  box-shadow: 1px 1px 20px #cccccc67;
  background: #fff;
}
.item-margin-zero{
  margin-bottom: 0;
}
.destination-item:hover{
  transform: translateY(-3px);
}
.destination-image{
  position: relative;
  overflow: hidden;
}
.destination-image img{
  transition: all ease-in-out 3s;
}
.destination-icon{
  position: absolute;
  left: 40%;
  height: 45px;
  width: 45px;
  border: 2px solid #fff;
  text-align: center;
  top: -40%;
  border-radius: 50%;
  transition: all ease-in-out 0.3s;
  z-index: 2;
}
.destination-content{
  padding: 15px 0;
  text-align: center;
}
.destination-content h3{
  margin-bottom: 0px;
}
.destination-content p{
  margin-bottom: 0px;
}
.destination-content .deal-rating{
  margin: 5px 0 5px 0;
}
.destination-4-col{
  text-align: center;
}
.destination-4-col .deal-rating{
  display: block;
  float: none;
  margin: 5px 0 5px;
}
.destination-overlay{
  position: absolute;
  background: linear-gradient(45deg, #ff89e9 0%,#05abe0 100%);
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all ease-in-out 0.3s;
}
.destination-item:hover .destination-overlay{
  opacity: 0.5;
}
.destination-item:hover img{
  transform: scale(1.1);
}
.destination-icon:hover{
  background: #005294;
}
.destination-icon:hover i{
  transform: rotate(360deg);
}
.destination-content span.bold{
  font-size: 20px;
  color: #e41d37;
}
.destination-btn{
  position: absolute;
  top: 50%;
  left: 50%;
  opacity: 0;
  transition: all ease-in-out 0.3s;
}
.destination-item:hover .destination-btn{
  opacity: 1;
  transform: translate(-50%,-50%);
}
.destination-4-col .destination-btn{
  width: 60%;
}

/* ====================== */
/*  Detail page */
/* ====================== */
.detail-info-content{
  margin-bottom: 20px;
}
.detail-info span.bold{
  font-size: 40px;
  color: #e41d37;
}
.detail-info-content .deal-rating{
  margin: 0px
}
.detail-info-content p.detail-info-price{
  display: inline-block;
  float: right;
  margin: 0;
}
.detail-info-content h2{
  margin-bottom: 0px;
  display: inline-block;
  text-transform: uppercase;
  font-size: 28px;
}
.detail-info-content table{
  margin-bottom: 21px;
}
.detail-title{
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}
.detail-title h3,
.detail-title h4{
   display: inline-block;
  margin: 0;
  padding-right: 20px;
  border: 1px solid #f1f1f1;
  padding: 8px 16px;
  background: #fbfbfb;
}
.sidebar-item .detail-title h3{
  padding: 5px 15px;
}
.sidebar-item-dark .detail-title h3{
  background: #005294;
  color: #fff;
  border: none;
}
.detail-title:after{
  position: absolute;
  top: 51%;
  content: '';
  background: #f1f1f1;
  height: 1px;
  width: 100%;
}
.detail-box{
  margin-bottom: 30px;
}
.detail-box:last-child{
  margin: 0;
}
.description-content {
  border: 1px solid #f1f1f1;
  padding: 15px;
}
.description-content p:last-child{
  margin-bottom: 0;
}
.detail table{
  width: 100%;
  margin-top: 10px;
}
.detail table td{
  padding: 10px;
}
td.title{
  font-weight: 500;
}
.detail table tr{
  margin-bottom: 10px;
  border: 1px solid #f1f1f1;
}
.detail table tr:last-child{
  margin-bottom: 0;
}
.detail table td ul li{
  margin-bottom: 5px;
  width: 49%;
  display: inline-block;
}
.detail table td ul li:last-child{
  margin-bottom: 0;
}
.detail table td i{
  width: 20px;
  color: #005294;
}
.detail table tr:nth-child(even){
  background: #fbfbfb;
}
td.excludes ul li i{
  color: #e41d37; 
}
.timeline{
  position: relative;
}
.timeline li {
  position: relative;
  margin-bottom: 30px;
  background: #fff;
  padding: 0px 15px 15px 110px;
  border: 1px solid #f1f1f1;
  list-style: none;
}
.flag-wrapper {
  margin-bottom: 10px;
  margin-top: 15px;
}
.flag{
  font-size: 18px;
  color: #333;
  font-weight: 600;
  transition : all ease-in-out 0.3s;
}
.day-wrapper {
  position: absolute;
  height: 100%;
  width: 60px;
  background: #f1f1f1;
  left: 0;
  z-index: 1;
  text-align: center;
  transition: all ease-in-out 0.3s;
  top: 0;
}
.timeline li:hover .day-wrapper{
  background: #e41d37;
}
.timeline li:hover .flag{
  color: #e41d37;
}
.day-wrapper span {
  color: #005294;
  font-weight: 600;
  font-size: 32px;
  line-height: 2;
  background: #fff;
  width: 100%;
  display: inline-block;
}
.desc p:last-child{
  margin-bottom: 0;
}
.map-frame{
  background: #ffff;
  padding: 15px 15px 10px;
  border: 1px solid #f1f1f1;
}
.map-frame iframe{
  height: 350px;
  width: 100%;
  frameborder: 0;
}
/*
sidebar*/
#sidebar-sticky{
  margin-bottom: 70px;
}
.detail-tabs #sidebar-sticky{
  margin-bottom: 0;
}

aside.detail-sidebar.sidebar-wrapper{
  position: sticky;
  top: 0;
}

.sidebar-item{
  border: 1px solid #f1f1f1;
  box-shadow: 0px 0px 20px #cccccc57;
  margin-bottom: 30px;
  padding: 15px;
}
.sidebar-item-dark{
  background: #333;
}
.sidebar-item-dark .detail-title h4{
  color: #fff;
  background: #333;
}
.sidebar-content li:last-child{
  margin-bottom: 0;
}
.sidebar-item .detail-title{
  margin-bottom: 15px;
}
.tour-details ul li span{
  color: #e41d37;
  font-weight: 600;
}
.att-item{
  margin-bottom: 15px;
  border: 1px dashed #e9e9e9;
  padding-bottom: 15px;
  padding: 15px 15px;
  position: relative;
  overflow: hidden;
  padding-right: 28%;
}
.att-image{
  float: left;
  width: 20%;
}
.att-content{
  padding-left: 30px;
  width: 80%; 
  float:right;
}
.att-content-left{
  width: 100%;
  display: inline-block;
}
.att-content-right{
  text-align: right;
  background: #fbfbfb;
  padding: 40px 15px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  border-left: 1px dashed #f1f1f1;
}
.att-content-left ul li{
  line-height: 1.5;
  font-size: 14px;
  width: 49%;
  display: inline-block;
}
.att-content-left ul li i{
  width: 20px;
  color: #005294;
}
.att-content-right span.bold{
  color: #e41d37;
  font-size: 20px;
}
.col-left-padding{
  padding-left: 0;
}
.comment-item{
  display: flex;
  border: 1px solid #f1f1f1;
  padding: 20px;
  margin-bottom: 30px;
}
.comment-image {
  flex: 0 1 75px;
  padding: 0 20px 0 0;
}
.detail-content .comment-image{
  padding: 0;
}
.comment-item:last-child{
  margin-bottom: 0;
}
.comment-image{
  text-align: center;
}
.comment-image img{
  overflow: hidden;
  border-radius: 50%;
  width: 75px;
  height: 75px;
}
.comment-reply .comment-image img{
  height: 50px;
  width: 50px;
}
.comment-image h4{
  margin: 10px 0 0 0;
}
.comment-desc{
  margin-bottom: 20px;
}
.comment-reply .comment-desc{
  margin-bottom: 0;
}
.comment-desc h4{
  display: inline-block;
}
.comment-desc p{
  margin: 0;
}
span.comment-date{
  display: block;
  font-size: 12px;
  margin-bottom: 7px;
}
.comment-image a.btn-blue{
  font-size: 12px;
  padding: 5px 15px;
}
.comment-desc .deal-rating{
  display: inline-block;
  margin: 0 0 15px 0;
}
span.travel-date{
  float: right;
  font-size: 12px;
}
span.bold{
  font-weight: 500;
}
.comment-btn{
  margin-top: 10px;
}
.comments-form textarea,
.comments-form input{
  background: #fff;
}
.sidebar-slider .slick-prev{
  left: 0;
}
.sidebar-slider .slick-next{
  right: 0;
}
.event-list li{
  border-bottom: 1px dashed #eee;
  padding-bottom: 10px;
  margin-bottom: 10px;
}
.event-list li:last-child{
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.event-list li a{
  color: #555;
}
.event-list li a:hover{
  color: #0D74BA;
}
.comment-reply{
  background: #fff;
  margin-bottom: 10px;
}

@media(max-width: 640px){
  .detail-content .comment-image{padding-bottom: 10px;}
}
textarea {
    resize: vertical;
    height: 200px!important;
}
input[type=text], input[type=email], input[type=number], input[type=search], input[type=password], input[type=tel], input[type=date], textarea, select, .form-control {
    font-size: 14px;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    background-color: #fff;
    border: 1px solid #eceaea;
    border-radius: 0px;
    padding: 10px 25px;
    width: 100%;
    color: #444444;
    height: auto;
    margin-bottom: 0px;
    box-shadow: none;
}
#content{ padding-top:0px; }
ul, ol{ padding-left:0px; }
</style>-->
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
                                <h2>Everest Base Camp</h2>
                                <p class="detail-info-price"><span class="bold">$659</span></p>
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
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider1.jpg" alt="in_th_030_01_sm">
                                    </li>
                                    <!-- 2nd Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="1">
                                        <!-- 2nd Indicator Image -->
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider2.jpg" alt="in_th_030_02_sm">
                                    </li>
                                    <!-- 3rd Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="2">
                                        <!-- 3rd Indicator Image -->
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider3.jpg" alt="in_th_030_03_sm">
                                    </li>
                                    <li data-target="#in_th_030" data-slide-to="3">
                                        <!-- 3rd Indicator Image -->
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider4.jpg" alt="in_th_030_03_sm">
                                    </li>
                                </ol> <!-- /Indicators -->
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->
                                    <div class="item active" style="transition-duration: 2000ms;">
                                        <!-- Slide Background -->
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider1.jpg" alt="in_th_030_01">                                        
                                    </div>
                                    <!-- End of Slide -->
                                    <!-- Second Slide -->
                                    <div class="item" style="transition-duration: 2000ms;">
                                        <!-- Slide Background -->
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider2.jpg" alt="in_th_030_02">
                                    </div>
                                    <!-- End of Slide -->
                                    <!-- Third Slide -->
                                    <div class="item" style="transition-duration: 2000ms;">
                                        <!-- Slide Background -->
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider3.jpg" alt="in_th_030_03">
                                    </div>
                                    <!-- End of Slide -->
                                    <div class="item" style="transition-duration: 2000ms;">
                                        <!-- Slide Background -->
                                        <img src="http://htmldesigntemplates.com/html/yatra/bootstrap4/images/detailslider4.jpg" alt="in_th_030_03">
                                    </div>
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Description</h3>
                            </div>
                            <div class="description-content">
                                <p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>
                                <table>
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
                                </table>
                            </div>
                        </div>
                        <div class="location-map detail-box">
                            <div class="detail-title">
                                <h3>Location Map</h3>
                            </div>
                            <div class="map-frame">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28185.510535377554!2d86.90746548742861!3d27.98811904127681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e854a215bd9ebd%3A0x576dcf806abbab2!2z4KS44KSX4KSw4KSu4KS-4KSl4KS-!5e0!3m2!1sne!2snp!4v1544516755007" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="detail-timeline detail-box">
                            <div class="detail-title">
                                <h3>Tour Timeline</h3>
                            </div>
                            <div class="timeline-content">
                                <ul class="timeline">
                                    <!-- Item 1 -->
                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>1</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 1 - 2 : Flights to Kathmandu.</span>
                                            </div>
                                            <div class="desc">
                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item 2 -->
                                    <li>
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
                                    </li>
                                    <!-- Item 3 -->
                                    <li>
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
                                    </li>
                                    <!-- Item 4 -->
                                    <li>
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
                                    </li>
                                    <li>
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-attractions detail-box">
                            <div class="detail-title">
                                <h3>Hotels and Availabilities</h3>
                            </div>
                            <div class="top-attraction-content">
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="images/bucket1.jpg" alt="Images">
                                    </div>
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
                                </div>
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="images/bucket2.jpg" alt="Images">
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
                                        <img src="images/bucket3.jpg" alt="Images">
                                    </div>
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
                                </div>
                            </div>
                        </div>
                        <div class="comments detail-box">
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
                        </div>
                        <div class="comments-form detail-box">
                            <div class="detail-title">
                                <h3>Add Your Comment</h3>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="textarea form-group col-lg-12">
                                        <label for="Name">Your Comment:</label>
                                        <textarea></textarea>
                                    </div>
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
                            <div class="sidebar-content sidebar-slider slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="">Previous</button>
                                <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1760px; transform: translate3d(-352px, 0px, 0px);" role="listbox"><div class="sidebar-package slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 352px;" tabindex="-1">
                                    <div class="sidebar-package-image">
                                        <img src="images/detailslider3.jpg" alt="Images">
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
                                        <img src="images/detailslider1.jpg" alt="Images">
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
                                        <img src="images/detailslider2.jpg" alt="Images">
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
                                        <img src="images/detailslider3.jpg" alt="Images">
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
                                        <img src="images/detailslider1.jpg" alt="Images">
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
                                
                                
                            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="">Next</button></div>
                        </div>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.</p>
                                <p><i class="flaticon-phone-call"></i> (012)-345-6789</p>
                                <p><i class="flaticon-mail"></i> tourntravel@testmail.com</p>
                            </div>
                        </div>
                    </aside>
                </div><div id="sidebar-sticky" class="col-lg-4 jquery-stickit-spacer" style="visibility: hidden !important; display: none !important;"></div>
            </div>
        </div>
    </section>

<?php include('includes/footer.php'); ?>

</div>
<?php include('includes/js.php'); ?>
</body>

</html>