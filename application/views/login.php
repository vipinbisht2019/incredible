<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login/ Register - Incredible Vacations</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php // echo $login[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php // echo $login[0]['meta_keyword']; ?>">
    <?php include('includes/css.php'); ?>
    <style>
      section:nth-child(odd) {
      background: #f5f5f5;
  }
  .form-control{ border: 1px solid #eceaea;padding: 10px 25px;height: 40px;font-size: 13px;border-radius: 0px; }
  </style>
  </head>
  <body class="front">
    <div id="main">
      <?php include('includes/header.php'); ?>
        <section class="login">
          <div class="container">
            <div class="row">
			
              <div class="col-lg-6">
                <div class="login-form">
                  <form name="loginForm" action="<?php echo base_url('login/action'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-title">
                          <h2>Login</h2>
                          <p>Register if you don't have an account.</p>
                        </div>
						
						<?php
                            if($error = $this->session->flashdata('login_failed')){  ?>                                    
                            <div class="alert alert-danger alert-dismissable">
                                <?php echo $error; ?>
                            </div>
                        <?php  }  ?>
						
						
                      </div>
                      <div class="form-group col-lg-12">
                        <label>Username</label>
            <input type="email" class="form-control" id="Name1" name="user_email"  value="<?php echo set_value("user_email"); ?>" placeholder="Enter username or email id">
						  <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('user_email'); ?></span>
                                      
                      </div>
                      <div class="form-group col-lg-12">
                        <label>Password</label>
            <input type="password" class="form-control" id="email1" name="user_passwd" value="<?php echo set_value("user_passwd"); ?>" placeholder="Enter correct password">
						 <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('user_passwd'); ?></span>
                      </div>
                    <!--  <div class="col-lg-12">
                        <div class="checkbox-outer">
                            <input type="checkbox" name="remember" value="yes"> Remember Me?
                        </div>
                      </div> -->
                      <div class="col-lg-12">
                        <div class="comment-btn">
							<input type="hidden" name="flag" value="yes">
							<input type="submit" class="btn-blue btn-red" name="submit" value="Login">
                        <!--    <a href="#" class="btn-blue btn-red">Login</a> -->
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="login-accounts">
                          <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                          <h3>Login using</h3>
                          <div class="login-accounts-btn">
                            <a class="btn-blue" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a class="btn-blue btn-google" href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a>                              
                            <a class="btn-blue btn-twit" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
			  
			  
              <div class="col-lg-6">
						<?php  if($errors = $this->session->flashdata('registered')){  ?>                                    
                            <div class="alert alert-success alert-dismissable">
                                <?php  echo $errors; ?>
                            </div>
                        <?php  }  ?>
                <div class="login-form">
				
                  <form name="form2" action="<?php echo base_url('login/user_register'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-title">
                          <h2>Register</h2>
                          <p>Enter your details to be a member.</p>
                        </div>
                      </div>
                      <div class="form-group col-lg-12">
                        <label>Name:</label>
                        <input type="text" class="form-control" id="Name" name="user_name" value="<?php echo set_value('user_name'); ?>" placeholder="Enter full name" />
						 <span style="text-align:left; color:#FF0000;font-size:12px;"><?php echo form_error('user_name'); ?></span>
                      </div>
                      <div class="form-group col-lg-12">
                        <label>Email:</label>
                        <input type="email" class="form-control" id="email" name="user_email" value="<?php echo set_value('user_email'); ?>" placeholder="abc@xyz.com" />
						 <span style="text-align:left; color:#FF0000;font-size:12px;"><?php echo form_error('user_email'); ?></span>
                      </div>
                      <div class="form-group col-lg-12">
                        <label>Phone Number:</label>
                        <input type="text" class="form-control" id="phone" name="user_phone" value="<?php echo set_value('user_phone'); ?>" placeholder="Enter Pone"  maxlength="10" minlength="10" />
						 <span style="text-align:left; color:#FF0000;font-size:12px;"><?php echo form_error('user_phone'); ?></span>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Select Password :</label>
                    <input type="password" class="form-control" id="txtPassword" name="user_passwd" value="<?php echo set_value('user_passwd'); ?>" placeholder="Enter Password" />
					<span style="text-align:left; color:#FF0000;font-size:12px;"><?php echo form_error('user_passwd'); ?></span>
                      </div>
                      <div class="form-group col-xs-6 col-left-padding">
                        <label>Confirm Password :</label>
                        <input type="password" class="form-control" id="txtConfirmPassword" value="<?php echo set_value('confirm_passwd'); ?>" placeholder="Re-enter Password" />
						<span style="text-align:left; color:#FF0000;font-size:12px;"><?php// echo form_error('confirm_passwd'); ?></span>
						<div class="registrationFormAlert" id="divCheckPasswordMatch1"></div>
                      </div>
                    <!--  <div class="col-lg-12">
                        <div class="checkbox-outer">
                          <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms and conditions.</a>
                        </div>
                      </div> -->
                      <div class="col-lg-12">
                        <div class="comment-btn">
						
							<input type="hidden" name="flag" value="registered">
						<input type="submit" class="btn-blue btn-red" name="smt_enter" value="Register Now">
                    <!--      <a href="#" class="btn-blue btn-red">Register Now</a> -->
                        </div>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </section>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function() {
    $("#txtConfirmPassword").keyup(function() {
        var password = $("#txtPassword").val();
        $("#divCheckPasswordMatch1").html(password == $(this).val() ? "Passwords matched" : "<span style='color:red'>Passwords do not match!</span>");
    });

});
</script>		
        <?php include('includes/footer.php'); ?>
        <?php include('includes/js.php'); ?>
      </div>
    </body>
</html>