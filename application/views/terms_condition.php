<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Terms & Condition</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $terms[0]['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $terms[0]['meta_keyword']; ?>">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

        <?php include('includes/css.php'); ?>
          <style>
            .about-page-left {
                margin-top: 5px;
            }
          </style>
    </head>
    <body class="not-front page-post">
        <div id="main">
            <?php include('includes/header.php'); ?>
            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Terms & Conditions</div>
                </div>
            </div>

            <?php //print_r($about);
                echo $terms[0]['page_description'];
            ?>

            <!--<div id="why1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-page-left">
                                <h3>TERMS OF SERVICE</h3>
                                <p><b>Click on the links below for details :</b></p>
                                <ul>
                                    <li><h5>FLIGHT TICKETS</h5></li>
                                    <li><h5>CHARTER</h5></li>
                                    <li><h5>HOTELS</h5></li>
                                    <li><h5>BUS</h5></li>
                                    <li><h5>CABS</h5></li>
                                    <li><h5>TRAIN</h5></li>
                                    <li><h5>ACTIVITIES AND OTHER SERVICES</h5></li>
                                    <li><h5>VISA SERVICES</h5></li>
                                    <li><h5>OUTBOUND AND DOMESTIC TOURS</h5></li>
                                    <li><h5>Self-Drive Cabs</h5></li>
                                </ul>

                                <h4>FLIGHT TICKETS</h4>
                                <p><b>TERMS OF THE AIRLINES</b></p>
                                <p>The airline tickets available through the Website are subject to the terms & conditions of the concerned airline, including but not limited to cancellation and refund policies.</p>
                                <p>The airline tickets available through the Website are subject to the terms & conditions of the concerned airline, including but not limited to cancellation and refund policies.</p>
                                <p>Airlines retain the right to reschedule flight times, route, change or cancel flights or itineraries independent of and without prior intimation to SNS/IVI. As a facilitator SNS/IVI has no control or authority over the logistics of the airlines and therefore is not liable for any loss, direct or incidental, that a User(s) may incur due to such change or cancellation of a flight.</p>
                                <p>Different tickets on the same airline may carry different restrictions or include different services and price.</p>
                                <p>The baggage allowance on given fare is as per the terms decided by the airline, and SNS/IVI has no role to play in the same. Some of the fares shown in the booking flow are "hand baggage fares" which do not entitle the User(s) for free check in baggage and therefore the User(s) will be required to pay separately for check in baggage. The prices for adding check-in baggage to a booking may vary from airline to airline. The User(s) is advised to contact the airlines for detailed costs.</p>

                                <p><b>CODE SHARE</b></p>
                                <p>Some airlines enter into "code share" agreements with other Airlines. This means that on certain routes, the airline carrier selling or marketing the flight ticker does not fly its own aircraft to that destination. Instead, it contracts or partners with another airline to fly to that destination. The partner airline is listed as "operated by" in the booking flow.</p>
                                <p>If your flight is a code share, it will be disclosed to you in the booking process and prior to payment.</p>
                                <p>SNS/IVI will disclose any such code-share arrangements to the User(s), only when the ticketing airline discloses it to SNS/IVI in the first place.</p>

                                <p><b>PRICING</b></p>
                                <p>The total price displayed on the Website on the payment page usually includes base fare, applicable government taxes and convenience fee. User(s)s are required to pay the entire amount prior to the confirmation of their booking(s). In the event the User(s) does not pay the entire amount, SNS/IVI reserves its right to cancel the booking. User(s) agrees to pay all statutory taxes, surcharges and fees, as applicable on the date of travel.</p>
                                <p>To avail infant fares, the age of the child must be under 24 months throughout the entire itinerary. This includes both onward and return journeys. If the infant is 24 months or above on the return journey, User(s) will be required to make a separate booking using a child fare. Any infants or children must be accompanied by an adult as per the terms of the airlines.</p>

                                <p><b>TRAVEL DOCUMENTS</b></p>
                                <p>It shall be the sole responsibility of the User(s) to ensure they are in possession of valid travel documents such as identity proof, passport, visa (including transit visa) etc. to undertake the travel. User(s) agrees that in case of inability to travel for not carrying valid travel documents, SNS/IVI shall in no way be held liable.</p>
                                <p>User(s) understands that the information (if any) provided by SNS/IVI regarding the travel documents is only advisory in nature and can't be considered conclusive. The User(s) shall ensure checking the requirements of travel with the respective airlines of the respective jurisdictions the User(s) may transit through or choose to visit.</p>

                                <p><b>CHECK-IN TERMS</b></p>
                                <p>User(s) should check with the airlines directly regarding the check-in timings. Usually, check-in begins 2 hours before departure for domestic flights, and 3 to 4 hours before departure for international flights.</p>
                                <p>It is advisable for User(s) to check-in online 24 to 48 hours before the departure of flight as per the terms of concerned Airline.</p>
                                <p>User(s) should carry valid identification proofs, passport, age proofs as may be required to prove the identity, nationality and age of the passengers travelling on a ticket, including infants.</p>

                                <p><b>USE OF FLIGHT SEGMENTS</b></p>
                                <p>In the event User(s) does not embark on the onward journey, the entire PNR pertaining to that booking shall be automatically cancelled by the airline. In such a scenario SNS/IVI has no control in the said process nor will be obligated to provide alternate bookings to the User(s). The cancellation penalty in such an event shall be as per the applicable airline rules.</p>

                                <p><b>CHANGES TO EXISTING BOOKING</b></p>
                                <p>Any changes that are made to any existing booking shall be subject to certain charges levied by the respective airline, apart from the service fee charged by SNS/IVI.</p>

                                <p>The User(s) shall be obligated to pay applicable charges in the event of any alteration or modification to an existing booking. However, depending on the airline's policy and fare class, charges for changes or modifications to existing bookings may vary.</p>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <?php include('includes/footer.php'); ?>
            <?php include('includes/js.php'); ?>
        </div>
    </body>
</html>