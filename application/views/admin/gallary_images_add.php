<!doctype html>
<html lang="en">
  <head>
	<title>Gallary Images Add</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <?php include('top.inc.php') ?>
  </head>
<body>
	<div id="wrapper">
          <?php include('header.inc.php') ?>	
          <?php include('left.inc.php');  ?>	
     
       <div class="main">
		<div class="main-content">
			<div class="container-fluid">
			   <div class="col-md-12">

				<div class="panel-heading col-md-12 col-xs-12 padding_opx panel-heading_1">
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Gallary Images Add</b></h3>
						</div>

						      <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/gallary_images/view?id='.$id); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
							   <br>
						</div>
					</div>
				</div>

			<div class="panel">


				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error1 = $this->session->flashdata('gallary_image')){  ?>
                                    
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
                          
					  							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/gallary_images/add', $attributes);
							     ?>
                                 
                                 
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Under Gallary * </span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                        
                                           <?php
										               $myid=$id;
													// ------------------------------ Login Id form open ---------------------------------
													   echo $gallary_name[0]['ptitle'];
													   $data = array('gallery_id'  => $myid);
													   echo form_hidden($data);
													   
													   $data = array('id'  => $myid);
													   echo form_hidden($data);
									
                                            ?>
                                      </div>
		                		</div>

		                

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Image Title * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('photo_name'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                    $data = array('name'  => 'photo_name', 'id' => 'photo_name', 'value' =>set_value('photo_name'),  'placeholder' => 'Image Title', 'class'=>"form-control margin_bottom");
                      echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Select Images (1200 * 800px)</span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                         <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('pitchure'); ?></span>
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'pitchure',  'class'=>"form-control margin_bottom");
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