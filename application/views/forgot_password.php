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
            .row {
            margin-right: -15px;
            margin-left: -15px;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
          }
          .form-control{ border: 1px solid #eceaea;padding: 10px 25px;height: 40px;font-size: 13px;border-radius: 0px; }
        </style>
    </head>
    <body class="front">
        <div id="main">
            <?php include('includes/header.php'); ?>
            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Forgot Password</div>
                </div>
            </div>
            <!-- Forgot Password -->
            <div class="forgot-password">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="fp-content">
                                <p>Please provide your email address. Click in the provided link to retrieve you account.</p>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label>Enter Email Address</label>
                                            <input type="email" class="form-control" id="Name" placeholder="Enter username or email id">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="comment-btn">
                                                <a href="#" class="btn-blue btn-red">Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Forgot Password Ends -->
        <?php include('includes/footer.php'); ?>
        <?php include('includes/js.php'); ?>
        </div>
    </body>
</html>