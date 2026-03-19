<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Thank You</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $thankyou[0]['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $thankyou[0]['meta_keyword']; ?>">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

        <?php include('includes/css.php'); ?>
        <link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">
        <style>
            .f-payment {
                background: #fbfbfb;
                border: 1px solid #f1f1f1;
                width: 100%;
                display: block;
                color: #d81e47;
                padding: 15px 20px 15px 20px;
            }
        </style>
    </head>
    <body class="not-front page-post">
        <div id="main">
            <?php include('includes/header.php'); ?>
            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Pages<span>/</span>Hotels</div>
                </div>
            </div>
            <section class="flight-destinations">
                <div class="container">
                    <div class="row">
                        <div id="content" class="col-lg-8">
                            <div class="booking-confirmed booking-outer">
                                <div class="confirmation-title">
                                    <div class="form-title form-title-1">
                                        <h2>Congratulations your booking has been confirmed</h2>
                                    </div>
                                    <p>A confirmation email has been sent to your provided email address.</p>
                                    <div class="payment-info detail">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="confirmation-details detail">
                                                    <h3>Booking Details</h3>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="title">Booking ID</td>
                                                                <td class="b-id">51AE8</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Name</td>
                                                                <td>Meghan Traitor</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Email</td>
                                                                <td>abc@xyz.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Phone Number</td>
                                                                <td>XXXX-XXXXXX</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Gender</td>
                                                                <td>Male</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Nationality</td>
                                                                <td>Malay</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Arrival Date</td>
                                                                <td>13 August 2019</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">Departure Date</td>
                                                                <td>21 August 2019</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="title">No of Tickets</td>
                                                                <td>7</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="make-payment">
                                    <div class="form-title form-title-1">
                                        <h3>Payment</h3>
                                    </div>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="#" class="f-payment">Payment is made by Credit Card Via Paypal.</a>
                                </div>

                                <div class="make-payment">
                                    <div class="form-title form-title-1">
                                        <h3>Booking Detail</h3>
                                    </div>
                                    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="#" class="f-payment">https://www.yatra.com/flight-details/?=f4acb19f-9542-4a5c-b8ee</a>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar" class="col-lg-4">
                            <aside class="detail-sidebar sidebar-wrapper">
                                <div class="sidebar-item">
                                    <div class="detail-title">
                                        <h3>Popular Flights</h3>
                                    </div>
                                    <div class="sidebar-content sidebar-slider">
                                        <div class="sidebar-package">
                                            <div class="sidebar-package-image">
                                                <img src="<?php echo base_url('assets/images/flight/plane1.jpg')?>" alt="Images">
                                            </div>
                                            <div class="destination-content">
                                                <h6>ONE WAY FLIGHTS</h6>
                                                <h3><a href="tour-detail.html">CHEAP FLIGHTS TO PARIS</a></h3>
                                                <p class="package-days">BOOK NOW AND <span>SAVE 30%</span></p>
                                                <div class="deal-rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <div class="tour-price">
                                                    <span class="tour-tail">$1,200</span>
                                                    <span class="tour-head">Per Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-package">
                                            <div class="sidebar-package-image">
                                                <img src="<?php echo base_url('assets/images/flight/plane2.jpg')?>" alt="Images">
                                            </div>
                                            <div class="destination-content">
                                                <h6>ONE WAY FLIGHTS</h6>
                                                <h3><a href="tour-detail.html">FLIGHTS TO MONACO</a></h3>
                                                <p class="package-days">BOOK NOW AND <span>SAVE 30%</span></p>
                                                <div class="deal-rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <div class="tour-price">
                                                    <span class="tour-tail">$800</span>
                                                    <span class="tour-head">Per Person</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                        </div>
                    </div>
                </div>
            </section>
            <?php include('includes/footer.php'); ?>
            <?php include('includes/js.php'); ?>
        </div>
    </body>
</html>