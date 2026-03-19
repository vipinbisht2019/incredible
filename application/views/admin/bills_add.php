<!doctype html>
<html lang="en">
<head>
<title>Members Bill Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 <?php include('top.inc.php') ?>

     
  </head>
<body>
	<div id="wrapper">
          <?php include('header.inc.php') ?>	
          <?php include('left.inc.php') ;
		  
		   
		  ?>	
          
     
       <div class="main">
		<div class="main-content">
			<div class="container-fluid">
			   <div class="col-md-12">

		   <div class="panel-heading col-md-12 col-xs-12 padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Members Bill Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/bills/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                            <?php
                                    if($error = $this->session->flashdata('regions')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                           // print_r($c_info);
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/bills/add', $attributes);
							     ?>

		            <!--  ************************************* company name ****************************************************** -->    

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Company Name </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span class="margin_bottom" style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('RegionsName'); ?></span>
                                           
                                        <?php   
										     echo $companyName=@$c_info[0]['CompanyName'];
											 echo"&nbsp;&nbsp; / &nbsp;&nbsp;";
											 echo $companyName=@$c_info[0]['MembershipNo'];
										 
									     if(set_value('user_id')=='') $u_id=$_REQUEST['id']; else $u_id=set_value('user_id');
										 
                                            $data = array('user_id'  => @$u_id);
											echo form_hidden($data);
											
											$currentdate=date('Y-m-d');
											
											 $data = array('PaymentDate'  => @$currentdate);
											echo form_hidden($data);
											
											?><br>
                                           
                                           
                                      </div>
		                		</div>
                                
                       <!--  ************************************* Annual Sub. for Year****************************************************** -->               
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Annual Sub. for Year *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('AnnualSubAmount'); ?></span>
                                       <?php
								
               $data = array('name'  => 'AnnualSubAmount', 'id' => 'AnnualSubAmount', 'value'=>set_value('AnnualSubAmount'), 'placeholder' => 'Annual Sub. for Year', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                           
                            <!--  ************************************* CGST****************************************************** -->    
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> CGST *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CGST'); ?></span>
                                       <?php
								
                       $data = array('name'  => 'CGST', 'id' => 'CGST', 'value'=>set_value('CGST'), 'placeholder' => 'CGST', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                       
									    ?>
                                      </div>
		                		</div>
                           <!--  ************************************* SGST ****************************************************** -->             
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> SGST * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('SGST'); ?></span>
                                       <?php
								
						$data = array('name'  => 'SGST', 'id' => 'SGST', 'value'=>set_value('SGST'), 'placeholder' => 'SGST', 'class'=>"form-control margin_bottom");
						echo form_input($data);
					   
                                        ?>
                                      </div>
		                		</div>
                                
                     <!--  ************************************* SGST ****************************************************** -->             
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Total Amount * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TotalAmount'); ?></span>
              <?php
								
			     $data = array('name'  => 'TotalAmount', 'id' => 'TotalAmount', 'value'=>set_value('TotalAmount'), 'placeholder' => 'Total Amount', 'class'=>"form-control margin_bottom");
				 echo form_input($data);
					   
              ?>
                                      </div>
		                		</div>   
                                
                      <!--  ************************************* Arrear ****************************************************** -->          
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Arrear </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                      
            <?php
								
						$data = array('name'  => 'Arrear', 'id' => 'Arrear', 'value'=>set_value('Arrear'), 'placeholder' => 'Arrear', 'class'=>"form-control margin_bottom");
						echo form_input($data);
					   
               ?>
                                      </div>
		                		</div>   
                     
                      <!--  ************************************* Advance ****************************************************** -->             
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Advance </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                      
          <?php
								
						$data = array('name'  => 'Advance', 'id' => 'Advance', 'value'=>set_value('Advance'), 'placeholder' => 'Advance', 'class'=>"form-control margin_bottom");
						echo form_input($data);
					   
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