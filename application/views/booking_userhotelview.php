<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php // echo $visa[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php // echo $visa[0]['meta_keyword']; ?>">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <?php include('includes/css.php'); ?>
	
<!----------------------------Start new css---------------------------------->		
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css" type="text/css'); ?>">
<!----------------------------End new css------------------------------------>

  </head>
  	<body class="not-front page-about">
    	<div id="main">
      		<?php include('includes/header.php'); ?>
			<div class="breadcrumbs1_wrapper">
				<div class="container">
				<div class="breadcrumbs1"><a href="<?php echo base_url(); ?>userhome">Home</a><span>/</span>Booking</div>
				</div>
			</div>
			<div id="content" style="background-color: #f6f5f5;">
          		<div class="container">
    				<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
            				<?php include"includes/userleft.php"; ?>
        				</div>
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="col-xs-12 col-md-12 col-xs-12 padding_opx">           
                				<div class="col-md-12 col-xs-12">  <?php
                                    if($error = $this->session->flashdata('cancle')){  ?>                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>                                    
                                    <?php  } ?>
                                </div>
								<div class="panel">
									<div class="panel-heading hidden-xs hidden-sm"> <h3 style="font-size:20px;margin-top:0px;margin-bottom:0px;padding:5px;font-size: 18px;text-transform: capitalize;"> Hotel Booking View </h3>
								</div>
								<div class="panel-heading col-xs-12 padding_0px_mobile hidden-lg hidden-md">
									<div class="col-xs-12 col-md-12 padding_0px_mobile">										
										<div class="col-xs-4" style="padding: 10px 0px;">
												<?php include"includes/userleft.php"; ?>       
										</div>
										<div class="col-xs-8" style="padding: 10px 4px; margin-top: 6px;">
											<h3 class="text-right"> Welcome   </h3>      
										</div>
									</div>
								</div>
								<div class="panel-body overflow_x_scroll">
									<table class="table">
										<tr>					
											<th> Booking Date </th>
											<th> Booking Id </th>
											<th> Email </th>
											<th> Contact </th>
											<th> Total Amount </th>
											<th> Status </th>
										</tr>

										<?php foreach ($bookingHotelList as $key => $bookHotelValue) { ?>
				
											<tr>
												<td>
													<?php 
														$date_created1 = $bookHotelValue['created_on'];  									
														$date_created2 = new DateTime($date_created1);
														echo $date_created2->format('d M Y'); 
													?>
												</td>
												<td>
													<a href="<?php echo base_url('booking/details?bookingId='.$bookHotelValue['booking_id']);?>" style="text-decoration:none; color : #0079b1">
														<?php  echo $bookHotelValue['booking_id'];  	?>
													</a>
												</td>
												<td><?php echo $bookHotelValue['emails']; ?></td>
												<td><?php echo $bookHotelValue['contacts']; ?></td>
												<td><?php echo $bookHotelValue['total_amount']; ?></td>					
												<td><?php echo $bookHotelValue['status']; ?></td>
											</tr>

										<?php } ?>
									</table>
								</div>
							</div>   
        				</div>
                      
                      <div class="col-lg-12 col-xs-12" style="padding:0px; text-align:right;"></div>  
                  
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