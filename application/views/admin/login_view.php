<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>WELCOME TO STOP & SHOP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/linearicons/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/main.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/demo.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/admin/img/apple-icon.png">
	<link rel="icon" type="<?php echo base_url('assets/admin/image/logo.png') ?>" sizes="96x96" href="<?php echo base_url('img/logo.png') ?>">
</head>
<body>
	
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header"> <!-- style="width: 100%;"-->
								<div class="logo text-center"><!--<img  src="<?php //echo base_url('assets/admin/imgg/logo.png') ?>">--></div>
								<p class="lead">Administrator Login</p>
							</div>
                            
									 <?php
                                    if($error = $this->session->flashdata('login_failed')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                  
                                      </div>
                                    
                                    <?php        
                                      }
                                    ?>
                            
                            
					           <?php
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small', 'name'=>'login', 'id' => 'login');
										echo form_open('admin/login/action', $attributes);
							     ?>

								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">User Name</label>
                                    <span style="text-align:left; color:#FF0000; font-size:12px;";>  <?php echo form_error('username_admin'); ?></span>
                                    <?php
                                        $data = array('name'  => 'username_admin', 'id' => 'username',  'placeholder' => 'Login Id', 'class'=>"form-control",   'maxlength'     => '100');
                                        echo form_input($data);
                                    ?>
                                   
								</div>
                                

								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
                                      <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('password_admin'); ?></span>
                                    <?php
                                        $data = array('name'  => 'password_admin', 'id' => 'username', 'class'=>"form-control",   'maxlength' => '100');
                                        echo form_password($data);
                                    ?>
                               	</div>
                                

								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
                                    <?php
                                        $data = array('name'  => 'username');
                                        echo form_checkbox($data);
                                    ?>
                                   		<span>Remember me</span>
									</label>
								</div>
                                
                                  <?php
                                        $data = array('name'  => 'smt_enter', 'value' => 'LOGIN',   'class'=>"btn btn-primary btn-lg btn-blockl");
                                        echo form_submit($data);
                                    ?>
                                
								<div class="bottom">
									<span class="helper-text"><!--<i class="fa fa-lock"></i>--> <a href="#"><!--Forgot password?--></a></span>
								</div>
							       <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading" align="center">Welcome to Stop & Shop Admin</h1>
						
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
 </body>
</html>