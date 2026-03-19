<!doctype html>
<html lang="en">
<head>
<title>Buses Type Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function get_seatmap(mapid)
     {
		jQuery.ajax({
				url:'<?php echo base_url(); ?>admin/busestype/seatmap',
				data:'mapid=' + mapid,
				type:'POST',
				success:function(data){ $('#map_replace').html(data);}
		   });
		// alert(mapid);
	 }
</script>
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
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Buses Type Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/busestype/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('busestype')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                          
				
						  // ------------------------------ admin form open ---------------------------------
							$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
							echo form_open_multipart('admin/busestype/add', $attributes);
										
										//echo"<pre>";
										 //print_r($dropdown_bustype);
										//echo"</pre>";
							     ?>
                                 
                                 
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Category * </label>
		                			<div class="col-md-3 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CarCategoriesId'); ?></span>
                                   <?php
								
											unset($options);									
									        $options['']='Select Category';
											foreach($dropdown_category as $val)
										       {
												   $options[$val['CatId']] = $val['CategoryName'];
											   }		
											 $selected=set_value('CatId');	
										     echo form_dropdown('CatId', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>           
                                 

		                

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Name </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TypeTitle'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'TypeTitle', 'id' => 'TypeTitle', 'value'=>set_value('TypeTitle'), 'placeholder' => 'Name', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                               
                               <?php /*?>
		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Number Of Seats *</span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('NumberOfSeats'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'NumberOfSeats', 'id' => 'NumberOfSeats', 'value'=>set_value('NumberOfSeats'), 'placeholder' => 'Number Of Seats', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>  
                                  <?php */?>
                                  
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Select Seats Map </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                       
                                       <select name="MapId" class="form-control margin_bottom" onChange="get_seatmap(this.value)">
                                         <option value="">Select Map Type</option>
                                     <?php 
										      foreach($dropdown_bustype as $val)
										        {
										          ?>
                                         
                                               <option value="<?php echo $val['MapId']; ?>"><?php echo $val['SeatingTitle']."  -- Seats [".$val['TotalSeats']."]" ?></option>
                                               <?php } ?>
                                       
                                       </select>
                                        
                                       
                                      </div>
		                		  </div>  
                           <!-- *********************************************************Seat Map***************************************************************** -->     
                           
                                 <div id="map_replace" style="margin-top:10px;"> 
                               
                                     
                                  
                                   </div>    
                          <!-- ************************************************************************************************************************** -->          
                                   <div class="col-md-12 padding_opx" style="margin-top:10px;">
		                			<label class="col-md-2 text-left padding_opx">Amenties </label>
		                			<div class="col-md-8 form-group padding_opx">
                                         <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                            <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                     <?php
										       	         $i=0;
											  /* foreach($edit_exclusion as $in_val)
											     {
												   
												   $exclusion[$i]=$in_val['ExclusionID'];
												   
												   $i++;
												 }*/
										  
											   foreach($dropdown_ammenties as $val) { ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													//'checked'     => TRUE,
                                                     
											 if(in_array($val['AmentiesId'],$exclusion))  
											      {
											        $data = array('name' => 'Amenties[]', 'id' => 'exclusion', 'value' => $val['AmentiesId'],'checked' => TRUE);
												  }
												else
												 {
												      $data = array('name' => 'Amenties[]', 'id' => 'exclusion', 'value' => $val['AmentiesId']);
												 }   
														 
                                                     echo form_checkbox($data);
													 echo $val['AmentiesName']; ?></div>
                                               
                                                <?php } ?> 
                                             </div>
                                          
                                       </div>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div> 
                               
                               
                                            
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Term Condition </label>
		                			<div class="col-md-8 form-group padding_opx">
                                         <div style="height:200px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                            <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                        <?php
										       	         $i=0;
											  /* foreach($edit_exclusion as $in_val)
											     {
												   
												   $exclusion[$i]=$in_val['ExclusionID']; 
												   
												   $i++;
												 }*/
										  
											   foreach($dropdown_termscondition as $val) { ?>
                                                    <div class="col-md-12 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													//'checked'     => TRUE,
                                                     
											 if(in_array($val['TermsconditionID'],$exclusion))  
											      {
											        $data = array('name' => 'Termscondition[]', 'id' => 'exclusion', 'value' => $val['TermsconditionID'],'checked' => TRUE);
												  }
												else
												 {
												      $data = array('name' => 'Termscondition[]', 'id' => 'exclusion', 'value' => $val['TermsconditionID']);
												 }   
														 
                                                     echo form_checkbox($data);
													 echo $val['Title']; ?></div>
                                               
                                                <?php } ?>   
                                             </div>
                                          
                                       </div>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div> 
                               
                               
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Cancellation Policies</label>
		                			<div class="col-md-8 form-group padding_opx">
                                         <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                            <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                         <?php
										       	         $i=0;
											 /*  foreach($edit_exclusion as $in_val)
											     {
												   
												   $exclusion[$i]=$in_val['ExclusionID'];
												   
												   $i++;
												 }*/
										  
											   foreach($dropdown_cansllationcharge as $val) { ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													//'checked'     => TRUE,
                                                     
											 if(in_array($val['CancellationID'],$exclusion))  
											      {
											        $data = array('name' => 'Cancellation[]', 'id' => 'exclusion', 'value' => $val['CancellationID'],'checked' => TRUE);
												  }
												else
												 {
												      $data = array('name' => 'Cancellation[]', 'id' => 'exclusion', 'value' => $val['CancellationID']);
												 }   
														 
                                                     echo form_checkbox($data);
													 echo $val['CancellationTime'];  echo"&nbsp;deducted amount &nbsp;".$val['DetectAmount']; ?> %  </div>
                                               
                                                <?php } ?> 
                                             </div>
                                          
                                       </div>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div> 
                   
                                
                             
                             <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Short Description </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TypeTitle'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
 $data = array('name'  => 'ShortDescription', 'id' => 'ShortDescription', 'value'=>set_value('ShortDescription'), 'placeholder' => 'Short Description', 'class'=>"form-control margin_bottom");
      echo form_input($data);
                                        ?>
                                      </div>
		                		  </div> 
                               
                            
                            
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Photo-1 (900 X 410) </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                  
                                   <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                      </div>
		                		  </div>    
                                  
                                  
                                      <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Photo-2 (900 X 410) </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                  
                                   <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                      </div>
		                		  </div>    
                                  
                                      <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Photo-3 (900 X 410) </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                  
                                   <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                      </div>
		                		  </div>  
                                  
                                       
                            

                               
                  
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> Status </label>
		                			<div class="col-md-2 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
										    	'Y'  => 'Active',
											    'N'  => 'Inactive',
											
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