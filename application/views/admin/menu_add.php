<!doctype html>
<html lang="en">
  <head>
	<title>Menu Add</title>
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

                   <div class="panel-heading col-md-12 col-xs-12 panel-heading_1">
					 <div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Menu Add</b></h3>
						</div>

						      <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/menu/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
							   <br>
						</div>
					</div>
				</div>

			<div class="panel">
				
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error1 = $this->session->flashdata('menu')){  ?>
                                    
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
										echo form_open_multipart('admin/menu/add', $attributes);
							     ?>

		                

		                		<div class="col-md-12 padding_opx ">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Menu Name * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('MenuName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                               $data = array('name'  => 'MenuName', 'id' => 'MenuName', 'value' =>set_value('MenuName'),  'placeholder' => 'Menu Title', 'class'=>"form-control margin_bottom");
                                echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> Parent Page </label>
		                			<div class="col-md-5 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
										
											   $options[]='Under Main Menu';
											   foreach($parent1 as $pmenu)
											    {
												  $options[$pmenu['MenuID']] = $pmenu['MenuName'];
												}
											
											 $selected=set_value('ParentID');							
											 echo form_dropdown('ParentID', $options, $selected ,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>
                               
                               
                               
                               	<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>  Slug  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('MenuTitle'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'MenuTitle', 'id' => 'MenuTitle', 'value' =>set_value('MenuTitle'),  'placeholder' => 'Slugs', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div> 
                                
                                 
                                
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Page Header Image  </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'Image',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Menu Icon Image  </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'menu_image',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Menu Description </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      
                                             $data = array('name'  => 'menu_description', 'id' => 'menu_description', 'value' =>set_value('menu_description'),    'placeholder' => 'Menu Description', 'class'=>"form-control margin_bottom");
                                            echo form_textarea($data);
                                          ?>
                                      </div>
		                		</div>
                                
                                
                                 
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> Associate Page </label>
		                			<div class="col-md-5 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											  unset($options);									
									           $options[]='Select Page';
											   foreach($page_assoc as $pages)
											    {
												  $options[$pages['PageName']] = $pages['PageName'];
												}		
											 $selected=set_value('AssociatedId');								
											echo form_dropdown('AssociatedId', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Target </label>
		                			<div class="col-md-5 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
													'_self'    => '_self',
													'_blank'    => '_blank',
													'_parent'    => '_parent',
													'_top'    => '_top',
											
											);
																		
											echo form_dropdown('Target', $options, '','class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>
                               
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">View on Menu </label>
		                			<div class="col-md-5 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
													''    => 'Select',
													'Y'    => 'Yes',
													'N'    => 'No',
											
											);
												$selected='Yes';						
											echo form_dropdown('view', $options, $selected, 'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>
                               
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">View on Footer</label>
		                			<div class="col-md-5 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
													'N'    => 'No',
													'Y'    => 'Yes',
																							
											);
																		
											echo form_dropdown('IsInFooter', $options, '','class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>
                                
                                
                 
                              
              
                               
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Sort Order: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'Ordering', 'id' => 'SortOrder', 'value' =>set_value('Ordering'),    'placeholder' => 'Sort Order', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                          ?>
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
																		
											echo form_dropdown('IsActive', $options, '','class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>   
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-2 form-group padding_opx">

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