<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Change Password</title>	
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
          <div class="breadcrumbs1"><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span>Change Password</div>
        </div>
      </div>
  <!--<br><br><br><br><br><br>

            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb">
                                <a href="#"><i class="icon-home"></i> Home</a>
                                <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                                <span class="current">Dashboard</span>
                                <h2 class="entry-title"> Post Complaint </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
  <?php //echo "<pre>"; print_r($username);  die; ?>
            <div id="content" style="background-color: #f6f5f5;">

           <div class="container padding_top_padding_bottom">

    <div class="row">


        <div class="col-lg-3 col-md-3 hidden-xs hidden-sm col-sm-12 col-xs-12">
            <?php include"includes/userleft.php"; ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
           
           <div class="col-xs-12 col-md-12 col-xs-12 padding_opx">

       <div class="panel">
          <div class="panel-heading hidden-xs hidden-sm"> <h3> Welcome : <?php echo $username[0]['user_name']; ?> <?php //echo $username[0]['user_lname']; ?>  </h3>
         </div>         
                    
                <div class="panel-heading col-xs-12 padding_0px_mobile hidden-lg hidden-md">

                  <div class="col-xs-12 col-md-12 padding_0px_mobile">
                     
                       <div class="col-xs-4" style="padding: 10px 0px;">
                                <?php include"includes/userleft.php"; ?>       
                     </div>

                     <div class="col-xs-8" style="padding: 10px 4px; margin-top: 6px;">
                       <h3 class="text-right"> Welcome : <?php echo $username[0]['user_name']; ?> <?php //echo $username[0]['user_lname']; ?>  </h3>      
                     </div>

                  </div>

                </div>
 
         <div class="panel-body">
          <div class="panel col-xs-12 margin_top_mob padding_0px_mobile">
                
          <div class="panel-heading" style="padding: 0px;">  <h3> <i class="fa fa-info-circle"></i> Make the desired change to your account Information </h3> </div>
 
          <div class="panel-body">

              <?php
				  if($error = $this->session->flashdata('change'))
				        {  ?>
                                 <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                        <?php        
                         }
                                
					 // ------------------------------ admin form open ---------------------------------
						$attributes = array('name'=>'form1', 'id' => 'form1');
					    echo form_open('changepassword/change', $attributes);
				 ?>      
         
        <?php //echo print_r($username); die; ?>



                <div class="form-group col-md-12 col-xs-12 padding_0px_mobile">
                    <label class="col-md-3"> Login-ID / Email <span style="color: red;"> * </span>     </label> 
                    <div class="col-md-9">
                    
                          <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('adm_login_id'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'adm_login_id', 'id' => 'adm_login_id', 'value'=>$username[0]['id'] , 'placeholder' => 'UserName', 'class'=>"form-control");
                                            echo form_input($data);
                                        ?>
        
                    </div>
                </div>

                <div class="form-group col-md-12 col-xs-12 padding_0px_mobile">
                    <label class="col-md-3"> Old Password <span style="color: red;"> * </span>     </label> 
                    <div class="col-md-9">
                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('adm_password'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'adm_password', 'id' => 'adm_password',  'placeholder' => 'Password', 'class'=>"form-control margin_bottom");
                                            echo form_password($data);
                                        ?>
                    </div>
                </div>

                <div class="form-group col-md-12 col-xs-12 padding_0px_mobile">
                    <label class="col-md-3"> New Password <span style="color: red;"> * </span>     </label> 
                    <div class="col-md-9">
                         <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('adm_password_new'); ?></span>
                                   <?php
								     // ------------------------------ Password form open ---------------------------------
                   $password_data = array('name'  => 'adm_password_new', 'id' => 'adm_password_new',  'placeholder' => 'New Password ', 'class'=>"form-control margin_bottom");
                    echo form_password($password_data);
                                    ?>
                    </div>
                </div>

                     <div class="form-group col-md-12 col-xs-12 padding_0px_mobile">
                    <label class="col-md-3"> Re-type Password  <span style="color: red;"> * </span>     </label> 
                    <div class="col-md-9">
                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('adm_conpwd_new'); ?></span>
                        <?php
								     // ------------------------------ Confirm Password form open ---------------------------------
                     $cpassword_data = array('name'  => 'adm_conpwd_new', 'id' => 'adm_conpwd_new',  'placeholder' => 'Confirm Password ', 'class'=>"form-control margin_bottom");
                                        echo form_password($cpassword_data);
                                    ?>
                    </div>
                </div>

                  <div class="form-group col-md-12 col-xs-12 padding_0px_mobile">
                    <label class="col-md-3"> &nbsp;     </label> 
                    <div class="col-md-9">
                          <?php
													
											$data = array('flag'  => 'yes');
											echo form_hidden($data);
								//-------------------------------------------------------------------------------------------------------------------			
											$data = array('name'  => 'smt_enter', 'value' => 'Submit',   'class'=>"btn btn-common");
											echo form_submit($data);
                                    ?>
                    </div>
                </div>

             
                <div class="form-group col-md-12 col-xs-12">
                    
                </div>
              <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>

          </div>
        </div>

<!--  -->                                                
           
                  </div>
             </div>   
                      </div>
                  
                        </div>
                </div>  <!-- row end -->
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