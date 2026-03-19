<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Customers View</title>
									<!-- new css -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap2.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/main2.css'); ?>" type="text/css">
<?php
  include('includes/css.php')
?>
<style>
.fa-4x {
    font-size: 4em;
}
.panel {
    box-shadow: none;
    border: 1px solid rgba(0,0,0,0.1);
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.panel-heading {
    background-color: #ffffff;
    border-bottom: 2px solid #e41d37;
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.panel-heading h3 {
    font-size: 16px;
}

.panel-body {
    padding: 12px;
    padding-top: 0;
}

.user_left ul li {
    padding: 14px;
    border-bottom: 1px solid #eee;
}

.user_left ul{
    list-style: none;padding-left: 0px;
}

.user_left ul li a {
    text-decoration: none;
    font-size: 14px;
    color: #555555;
}

label {
    font-weight: 500;
}


</style>
</head>

<body class="">
	<div class="site-wrapper">
	<?php
  include('includes/header.php')
  ?>

            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="<?php echo base_url(); ?>userhome">Home</a><span>/</span>Profile View</div>
                </div>
            </div>

  
            <!--<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb">
                                <a href="<?php echo base_url('userhome') ?>"><i class="icon-home"></i> Home </a>
                                <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                                <span class="current"> Profile View </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            <div id="content" style="background-color: #f6f5f5;">


           <div class="container padding_top_padding_bottom">

    <div class="row">


        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
            <?php include"includes/userleft.php"; ?>
        </div>

        <?php //echo "<pre>"; print_r($profile_details);?>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
           
           <div class="col-xs-12 col-md-12 col-xs-12 padding_opx">

             <div class="panel">
                <div class="panel-heading hidden-xs hidden-sm"> <h3> Welcome : <?php echo $profile_details[0]['user_fname']; ?> <?php //echo $profile_details[0]['user_lname']; ?>  </h3>
         </div>

     
                
                <div class="panel-heading col-xs-12 padding_0px_mobile hidden-lg hidden-md">

                  <div class="col-xs-12 col-md-12 padding_0px_mobile">
                     
                       <div class="col-xs-4" style="padding: 10px 0px;">
                                <?php include"includes/userleft.php"; ?>       
                     </div>

                     <div class="col-xs-8" style="padding: 10px 4px; margin-top: 6px;">
                       <h3 class="text-right"> Welcome : <?php echo $profile_details[0]['user_fname']; ?> <?php //echo $profile_details[0]['user_lname']; ?>  </h3>      
                     </div>

                  </div>

                </div>
 
         <div class="panel-body">
        
     
                 <table class="table">
                      
             

                      <tbody>
                       
                        <tr>
                               <td style="border-top: 0px;"> Company Name  : </td>

                               <td style="border-top: 0px;"> <?php echo $profile_details[0]['CompanyName'] ?>  </td>
                              
                           </tr>
                      
                          
                           <tr>
                               <td > Contact Person Name  : </td>

                               <td > <?php echo $profile_details[0]['user_fname'] ?>  <?php echo $profile_details[0]['user_lname'] ?> </td>
                              
                           </tr>

                           
                           <tr>
                               <td> Contact Person Mobile No : </td>
                               <td> <?php echo $profile_details[0]['user_phone'] ?>  </td>
                           </tr>

                         <tr>
                               <td> Email Id : </td>
                               <td> <?php echo $profile_details[0]['user_email'] ?>  </td>
         
                           </tr>

                           <tr>
                               <td> Address-1 : </td>

                               <td> <?php echo $profile_details[0]['user_address1'] ?>  </td>
                           
                           </tr>
                           
                           <tr>
                               <td> Address-2 : </td>

                               <td> <?php echo $profile_details[0]['user_address2'] ?>  </td>
                          </tr>
                          
                            <tr>
                               <td> Nearest Seaport : </td>

                               <td> <?php echo $profile_details[0]['NearestSeaport'] ?>  </td>
                          </tr>
                          
                          
                            <tr>
                               <td> Nearest Airport : </td>

                               <td> <?php echo $profile_details[0]['NearestAirport'] ?>  </td>
                          </tr>
                          
                          
                            <tr>
                               <td> Landmarks 1: </td>

                               <td> <?php echo $profile_details[0]['LandmarksA'] ?>  </td>
                          </tr>
                          
                            <tr>
                               <td> Landmarks 2: </td>

                               <td> <?php echo $profile_details[0]['LandmarksB'] ?>  </td>
                          </tr>



                           <tr>
                               <td> City : </td> 

                               <td> <?php echo $profile_details[0]['user_city'] ?>  </td>
                           </tr>
                       
                           

                           <tr>
                               <td> State : </td>
                               <td> <?php echo $state[0]['StatesName'] ?>  </td>
                           </tr>

                           <tr>
                               <td> Country : </td>
                               <td> <?php echo $country[0]['country'] ?>    </td>
                       
                           </tr>

                           <tr>
                               <td> Zip Code : </td>
                               <td> <?php echo $profile_details[0]['user_zip'] ?>  </td>
                           </tr>


                      

                      </tbody>



                 </table>

                 <a href="<?php echo base_url('profile/edit'); ?>" class="btn btn-primary" style="background-color: #e59d43;margin-left: 5px;"> <i class="fa fa-edit"></i> Edit Profile </a>
                              

                             
                               
                               
                                  
                                
                         
                      
                           
                  </div>
             </div>   
                      </div>
                  
                        </div>
                </div> 
             </div>
                </div>

 <?php
  include('includes/footer.php')
  ?>
    
</div>
<?php
  include('includes/js.php')
?>
</body>
</html>