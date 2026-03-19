<!doctype html>
<html lang="en">
  <head>
	<title>Change Password</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <?php include('top.inc.php') ?>
  </head>
<body>
	<div id="wrapper">
          <?php include('header.inc.php') ?>	
          <?php include('left.inc.php') ?>	
     
          
          <div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="col-md-12">

			<!-- BASIC TABLE -->

		      <div class="panel-heading col-md-12 col-xs-12 padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b>Change Password</b></h3>
							<p></p>
						</div>

						     <div class="col-md-6 padding_opx">
								
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">
                
                      

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
								  
								   
                                    if($error = $this->session->flashdata('change')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                                    ?>
                   
                               <?php
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open('admin/password/change', $attributes);
							     ?>
                                 
                                 
                            <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> UserName * </span></label>
                                        
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000;font-size:12px;";><?php echo form_error('adm_login_id'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'adm_login_id', 'id' => 'adm_login_id', 'value'=>$username[0]['adm_login_id'] , 'placeholder' => 'UserName', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>   

		                

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Password * </span></label>
                                  
		                			   <div class="col-md-5 form-group padding_opx">
                                               <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('adm_password'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'adm_password', 'id' => 'adm_password',  'placeholder' => 'Password', 'class'=>"form-control margin_bottom");
                                            echo form_password($data);
                                        ?>
                                      </div>
		                		</div>
                                

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">New Password *</label>
		                			<div class="col-md-5 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('adm_password_new'); ?></span>
                                   <?php
								     // ------------------------------ Password form open ---------------------------------
                   $password_data = array('name'  => 'adm_password_new', 'id' => 'adm_password_new',  'placeholder' => 'New Password ', 'class'=>"form-control margin_bottom");
                    echo form_password($password_data);
                                    ?>
		                		  </div>
                               </div>
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Re-Type New Password *</label>
		                			<div class="col-md-5 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('adm_conpwd_new'); ?></span>
                                   <?php
								     // ------------------------------ Confirm Password form open ---------------------------------
                                      $cpassword_data = array('name'  => 'adm_conpwd_new', 'id' => 'adm_conpwd_new',  'placeholder' => 'Confirm Password ', 'class'=>"form-control margin_bottom");
                                        echo form_password($cpassword_data);
                                    ?>
		                		  </div>
                               </div>
                               
                               
                             
                              <div class="col-md-12 padding_opx">
	                			<label class="col-md-2 text-left padding_opx"></label>
		                			<div class="col-md-5 form-group padding_opx">

		                			
                                    
                                    <?php
													
											$data = array('flag'  => 'yes');
											echo form_hidden($data);
								//-------------------------------------------------------------------------------------------------------------------			
											$data = array('name'  => 'smt_enter', 'value' => 'Submit',   'class'=>"btn btn-primary");
											echo form_submit($data);
                                    ?>
                                    
		                		</div>
		                		</div>
                                
						       <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
						</div>

<!--Html ##################################################  -->
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
     
     
		
        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>