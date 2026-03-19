<!doctype html>
<html lang="en">
  <head>
	<title>Agents Add</title>
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
		<div class="main-content">
			<div class="container-fluid">
			   <div class="col-md-12">

              	<div class="panel-heading col-md-12 col-xs-12  padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Agents Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/agents/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>   

			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('agents')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
							
							      // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/agents/add', $attributes);
							     ?>
                                 
                                 
               
                                 

                           
                            <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Company Name * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CompanyName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'CompanyName', 'id' => 'user_fname', 'value' =>set_value('CompanyName'),  'placeholder' => 'Company Name', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                               
                            <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Membership No. * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('MembershipNo'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'MembershipNo', 'id' => 'user_fname', 'value' =>set_value('MembershipNo'),  'placeholder' => 'Membership No.', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div> 
                                
                                
                                
                                

		                

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Contact Person Name * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ContactPerson'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'ContactPerson', 'id' => 'user_fname', 'value' =>set_value('ContactPerson'),  'placeholder' => 'Contact Person Name', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                   
                                
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Email Address * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('user_email'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'user_email', 'id' => 'user_email', 'value' =>set_value('user_email'), 'placeholder' => 'Email Address', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Username * </span></label>
                                  
		                			   <div class="col-md-5 form-group padding_opx">
                                               <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('user_loginid'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'user_loginid', 'id' => 'user_loginid','value' =>set_value('user_loginid'),  'placeholder' => 'Login Id', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Password *</label>
		                			<div class="col-md-5 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('adm_password'); ?></span>
                                   <?php
								     // ------------------------------ Password form open ---------------------------------
                                        $password_data = array('name'  => 'user_passwd', 'id' => 'user_passwd','value' =>set_value('user_passwd'),  'placeholder' => 'Password ', 'class'=>"form-control margin_bottom");
                                        echo form_password($password_data);
                                    ?>
		                		  </div>
                               </div>
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Confirm Password *</label>
		                			<div class="col-md-5 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('conpwd'); ?></span>
                                   <?php
								     // ------------------------------ Confirm Password form open ---------------------------------
                                      $cpassword_data = array('name'  => 'conpwd', 'id' => 'conpwd', 'value' =>set_value('conpwd'),  'placeholder' => 'Confirm Password ', 'class'=>"form-control margin_bottom");
                                        echo form_password($cpassword_data);
                                    ?>
		                		  </div>
                               </div>
                               
                                
                                
                                

                               
                               
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Address </label>
		                			<div class="col-md-7 form-group padding_opx">
                                    
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'user_address1', 'id' => 'user_address1','value' =>set_value('user_address1'),  'placeholder' => 'Address ', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
		                		  </div>
                               </div>   
                              
                              
             
                               
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Phone Number: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'user_phone', 'id' => 'user_phone',  'value' =>set_value('user_phone'), 'placeholder' => 'Phone Number', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
		                		</div>
                             
                             
                             <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>GST No.: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'GSTNo', 'id' => 'GSTNo',  'value' =>set_value('GSTNo'), 'placeholder' => 'GST Number', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>PAN No.: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'PANNo', 'id' => 'PANNo',  'value' =>set_value('PANNo'), 'placeholder' => 'PAN Number', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
		                		</div>
                             
                             
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>City: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'user_city', 'id' => 'user_city', 'value' =>set_value('user_city'),  'placeholder' => 'City', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>State: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'user_state', 'id' => 'user_state', 'value' =>set_value('user_state'),  'placeholder' => 'State', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Zipcode: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'user_zip', 'id' => 'user_zip', 'value' =>set_value('user_zip'),  'placeholder' => 'Zipcode', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Country: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'user_country', 'id' => 'user_country',  'value' =>set_value('user_country'), 'placeholder' => 'Country', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                
                                
                             
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Agents Commission * </label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CommissionId'); ?></span>
                                   <?php
								
											unset($options);									
									        $options['']='Select Commission';
											foreach($agent_commission as $val)
										       {
												   $options[$val['CommissionId']] = $val['CommissionTitle'];
											   }		
											 $selected=set_value('CommissionId');	
										     echo form_dropdown('CommissionId', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>  
                               
                      
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Access Permission </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                        
                                          <?php
									         foreach($agent_permission as $fp_val)
											     {
														
											    ?>
                                                    <div class="col-md-6 form-group padding_opx">
                                                   <?php 
													$data = array
														(
															'name'          => 'AgentPermission[]',
															'value'         => $fp_val['PermisionId'] ,
															'id'            => 'AgentPermission',
															'style'         => 'margin:10px'
														);
														
														echo form_checkbox($data);
														echo $fp_val['PermisionName'] 
													  ?>
                                                        </div>
                                            <?php } ?>  
                                            
                                            <p>&nbsp;</p>      
                                          
                                      </div>
		                		</div>                            
                             
                               
                  
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Status </label>
		                			<div class="col-md-2 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
										    	'Y'         => 'Active',
											    'N'           => 'Inactive',
											
											);
											$selected=set_value('user_isactive');							
											echo form_dropdown('user_isactive', $options, $selected,'class="form-control margin_bottom"');
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