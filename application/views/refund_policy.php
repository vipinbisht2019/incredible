<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Refund Policy</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $refund[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $refund[0]['meta_keyword']; ?>">
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
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Refund Policy</div>
                </div>
            </div>

            <?php //print_r($about);
                echo $refund[0]['page_description'];
            ?>

            <!-- <div id="why1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-page-left">
                                <h3>Refund Policy</h3>
                                <p>Service(s) booked by the User(s) through SNS/IVI are subject to the applicable cancellation policy as set out on the booking page or as communicated to the User(s).</p>
                                <ul style="list-style:none">
                                    <li>a)  For No Show:
                                        <ul>
                                            <li>a.  In case of No Show, no refunds may be due except under exceptional conditions. User(s) shall be required to make requests along with required information/documents for any valid and applicable refunds, as per the defined policies of the supplier of respective services, within 15 days from the date of travel in case of air, rail, cab, bus, cruise, attraction tickets etc. and/or the date of check-in for hotel bookings and/or for any other services. No refund would be payable for any requests made after the expiry of 15 days of date of travel and or check-in as aforementioned and all unclaimed amounts for such No Show shall accordingly be deemed to have been forfeited.</li>
                                        </ul>
                                    </li>
                                    <li>b)  For Non Unutilized Services:
                                        <ul>
                                            <li>a.  In case of unutilized services, User(s) shall be required to make requests along with required information/documents for any valid and applicable refunds, as per the defined policies of the supplier of respective services, within 30 days from the date of travel in case of air, rail, cab, bus, cruise, attraction tickets etc. and/or the date of check-in for hotel bookings and/or for any other services. No refund would be payable for any requests made after the expiry of 30 days of date of travel and or check-in as aforementioned and all unclaimed amounts for such Unutilized Services shall accordingly be deemed to have been forfeited.</li>
                                        </ul>
                                    </li>
                                    <li>c)  The request for refund either for No Show or Unutilized Services shall be processed as per the rules specified by the respective service providers within 15-20 working days from the date of this request. If User(s) request for refund falls within the parameters of refund policies of the respective service providers, then the same shall be submitted to them for processing the refund. Refund will be due to User(s) only if the respective service provider accepts and refunds the amount to SNS/IVI. Within 30 days of receipt of such refund from the service provider, we shall refund the amount via
                                        <ul>
                                            <li>i.  The credit card used for payment for the respective service</li>
                                            <li>ii. Cheque (check) when the payments were made by the User(s) using any other platform of payment other than (i.) above.</li>
                                        </ul>
                                    </li>
                                    <li>d)  If, SNS/IVI, upon User(s) consent makes the refund to any mode other than to the original source of User(s) payment mode, and it suffers any claims, damages, costs, loss or expense as a consequence thereof, User(s) shall be liable to indemnify, hold harmless and make good SNS/IVI to the fullest extent. Further SNS/IVI shall not be liable for any loss sustained by User(s) arising out of provisioning of the wrong details to SNS/IVI for the purpose of refunds
                                    </li>
                                </ul>
                                <p>Please note convenience fee charged at the time of booking and for processing refunds will not be refundable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <?php include('includes/footer.php'); ?>
            <?php include('includes/js.php'); ?>
        </div>
    </body>
</html>