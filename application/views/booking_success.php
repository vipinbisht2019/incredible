<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking Hotel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $hotel_success[0]['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $hotel_success[0]['meta_keyword']; ?>">
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
                <div class="container booking-success">
                    <div class="row">
                        <div class="col-md-6 col-centered">
                            <div class="paddinger"></div>
                            <h3 class="text-center"><span>Thank you</span>,<br> Your booking is Complete!</h3>
                            <p class="text-center border-bottom">Your confirmation number is: <span>233WEr3455</span></p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aenean luctus lectus ac libero faucibus, eget feugiat nulla ornare.
                                Duis ut pellentesque massa.
                                Aenean fringilla mauris leo, quis ornare est blandit ut.
                            </p>
                            <div class="paddinger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('includes/footer.php'); ?>
            <?php include('includes/js.php'); ?>
        </div>
    </body>
</html>