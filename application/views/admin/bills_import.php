<!doctype html>
<html lang="en">
  <head>
	<title>Members Bill Import</title>
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

                   <div class="panel-heading col-md-12 col-xs-12 padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx ">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Bill Import</strong></h3>
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
                                    if($error1 = $this->session->flashdata('import')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error1 ?>
                                          
                                      </div>
                                    
                                    <?php        
                                      }
									  
						//echo"<pre>";	
							//print_r($page_assoc);
						//echo"</pre>";				  
									  
						//-------------------------------------------------------------------------------------------------
						   if(isset($error)) 
						     {
						   ?>
						      <div class="alert alert-danger alert-dismissable">
                                          <?  echo $error; ?>
                                          
                                      </div>
                          <?php  
						  }          			  
                    
												
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/bills/import', $attributes);
							     ?>

		                                                
                
                               
                               
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> Select Financial Year  </label>
		                			<div class="col-md-5 form-group padding_opx">
                                      <span class="margin_bottom" style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('financialYear'); ?></span>
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
										
											   $options['']='Select Financial Year';
											   foreach($f_year as $fyear)
											    {
												  $options[$fyear['FID']] = $fyear['FinancialYear'];
												}
											
											 $selected=set_value('financialYear');							
											 echo form_dropdown('financialYear', $options, $selected ,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>
                               
                               
        
                                
                                 
                                
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>File  </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <span class="margin_bottom" style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('csv_file'); ?></span>
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'csv_file',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
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