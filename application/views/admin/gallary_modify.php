<!doctype html>
<html lang="en">
  <head>
	<title>Gallary Modify</title>
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

                <div class="panel-heading col-md-12 padding_opx col-xs-12 panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Gallary Modify</b></h3>
						</div>

						      <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/gallary/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>
             

			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error1 = $this->session->flashdata('gallary')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error1 ?>
                                          
                                      </div>
                                    
                                    <?php        
                                      }
									  
						//-------------------------------------------------------------------------------------------------
						   if(isset($error)) 
						     {
						   ?>
						      <div class="alert alert-danger alert-dismissable">
                                          <?  echo $error; ?>
                                          
                                      </div>
                          <?php  
						  }          			  
                          
					
								   // echo"<pre>";
									 // print_r($edit_gallary);
									 // echo"</pre>";  
								
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/gallary/edit', $attributes);
							     ?>
                                 
                               <?php /*?>  
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Hotel * </label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('HotelId'); ?></span>
                                   <?php
								
											unset($options);									
									        $options['']='Select Hotel';
											foreach($gallary_hotel as $val)
										       {
												   $options[$val['HotelId']] = $val['HotelName'];
											   }		
											 $selected=$edit_gallary[0]['HotelId'];
										     echo form_dropdown('HotelId', $options, $selected, 'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>              <?php */?>    

		                

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Gallery Title * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ptitle'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'ptitle', 'id' => 'ptitle', 'value' =>$edit_gallary[0]['ptitle'],  'placeholder' => 'Gallery Title', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Main Photo (800px * 500px) </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'photo',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Current Image  </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                    
								             <?php
											  if($edit_gallary[0]['photo']!='') { ?>
                                               <img src="<?php echo base_url('uploads/gallary/'.$edit_gallary[0]['photo']) ?>" width="200px"> <br>
											  <?php } else { ?>
                                               Image does not exist
                                              <?php } ?>
                                      
                                      </div>
		                		  </div>
                                

                               
                               
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Description </label>
		                			<div class="col-md-8 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('description'); ?></span>
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'description', 'id' => 'description', 'value'=>$edit_gallary[0]['description'],    'placeholder' => 'Description ', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
		                		  </div>
                               </div>   
                              
                              
             
                               
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Sort Order: </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'SortOrder', 'id' => 'SortOrder', 'value' =>$edit_gallary[0]['SortOrder'],    'placeholder' => 'Sort Order', 'class'=>"form-control margin_bottom");
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
																		
											echo form_dropdown('Status', $options, '','class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>   
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										
										    $data = array('id'  => $edit_gallary[0]['gallery_id'] );
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