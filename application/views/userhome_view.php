<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Userhome</title>
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
          <div class="breadcrumbs1"><a href="<?php echo base_url(); ?>userhome">Home</a><span>/</span>Dashboard</div>
        </div>
      </div>
	  
	<!-- <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb">
                                <a href="<?php echo base_url('userhome') ?>"><i class="icon-home"></i> Home</a>
                                <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                                <span class="current"> Dashboard</span>
                                <h2 class="entry-title"> Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
	-->

            <div id="content" style="background-color: #f6f5f5;">
            <div class="container">

    <div class="row">

    <div class="col-lg-3 col-md-3 hidden-xs hidden-sm col-sm-12 col-xs-12">
            <?php include("includes/userleft.php"); ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
           
           <div class="col-xs-12 col-md-12 col-xs-12 padding_opx">

			<div class="panel">
                <div class="panel-heading hidden-xs hidden-sm"> <h3> Welcome : <?php  echo $this->session->userdata('user_email'); ?> </h3>
				</div>

     
                
                <div class="panel-heading col-xs-12 padding_0px_mobile hidden-lg hidden-md">

                  <div class="col-xs-12 col-md-12 padding_0px_mobile">
                     
                       <div class="col-xs-4" style="padding: 10px 0px;">
                                <?php include"includes/userleft.php"; ?>       
                     </div>

                     <div class="col-xs-8" style="padding: 10px 4px; margin-top: 6px;">
                       <h3 class="text-right"> Welcome : <?php echo $this->session->userdata('user_email'); ?> <?php // echo $username[0]['user_lname']; ?>  </h3>      
                     </div>

                  </div>

                </div>

 

 
							<div class="panel-body">    
                
								  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xs-6 padding_0px_mobile">
								<!--
                                   <div class="font-icon-detail">
                                      <i class="fa fa-shopping-basket fa-4x" aria-hidden="true"></i>
                                       <p class="icons_font"> <a href="<?php //echo base_url('userorder/view'); ?>"> View Orders </a> </p>
                                    </div> -->
									
									<div class="font-icon-detail">
                                      <i class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
                                       <p class="icons_font"> <a href="<?php echo base_url('booking'); ?>"> View Booking </a> </p>
                                    </div>
									
                                  
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xs-6 padding_0px_mobile">
                                    <div class="font-icon-detail">
                                       <i class="fa fa-picture-o fa-3x" aria-hidden="true"></i>
                                       <p class="icons_font"> <a href="<?php echo base_url('profile'); ?>"> Profile </a> </p>
                                   
                                    </div>
                                   </div>
                               
                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xs-6 padding_0px_mobile">
                                    <div class="font-icon-detail">
                                       <i class="fa fa-edit fa-3x" aria-hidden="true"></i>
                                       <p class="icons_font"> <a href="<?php echo base_url('changepassword'); ?>"> Change Password </a> </p>
                                     </div>
                                  </div>
                                  
                                <!--
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xs-6 padding_0px_mobile">
                                    <div class="font-icon-detail">
                                      <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                      <p class="icons_font"> <a href="<?php //echo base_url('complaint/view'); ?>">Complaint Management  </a> </p>
                                    </div>
                                  </div> 
								  
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xs-6 padding_0px_mobile">
                                  <div class="font-icon-detail">
                                       <i class="fa fa-heart fa-4x" aria-hidden="true"></i>
                                       <p class="icons_font"> <a href="<?php //echo base_url('wishlist'); ?>"> Wishlist </a> </p>
                                  </div>

                                  </div> -->

                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xs-6 padding_0px_mobile">
                                    <div class="font-icon-detail">
                                      <i class="fa fa-sign-out fa-3x" aria-hidden="true"></i>
                                      <p class="icons_font"> <a href="<?php echo base_url('login/logout'); ?>">Logout</a> </p>
                                    </div>                                
                                  </div>
                           
							</div>
             </div>   
                      </div>
                  
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