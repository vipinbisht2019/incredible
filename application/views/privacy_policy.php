<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Privacy Policy</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $privacy[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $privacy[0]['meta_keyword']; ?>">
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
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Privacy Policy</div>
                </div>
            </div>

            <?php //print_r($about);
                echo $privacy[0]['page_description'];
            ?>

    
            <?php include('includes/footer.php'); ?>
            <?php include('includes/js.php'); ?>
        </div>
    </body>
</html>