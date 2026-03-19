<!doctype html>
<html lang="en">
<head>
<title>Tours Date Add</title>
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
					<div class="col-md-12 col-xs-12 padding_opx">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Tours Date Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/regions/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                           <?php
                                   // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/tour_tourdate/add', $attributes);
							     ?>

		                

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Tour Title </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                          <?php echo $TourName[0]['TourName']; ?>
                                       
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Departure Time</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                      
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourtime', 'id' => 'timepicker1', 'value'=>set_value('tourtime'), 'placeholder' => 'Departure Time', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                
                                
                                <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-1</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                      
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker1', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-1', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-2</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                      
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker2', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-2', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-3</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                        
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker3', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-3', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-4</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                        
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker4', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-4', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-5</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                      
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker5', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-5', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-6</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker6', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-6', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-7</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker7', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-7', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-8</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker8', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-8', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-9</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker9', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-9', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-10</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker10', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-10', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-11</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker11', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-11', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-12</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker12', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-12', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-13</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker13', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-13', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-14</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker14', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-14', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-15</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker15', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-15', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-16</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker16', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-16', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-17</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker17', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-17', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-18</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker18', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-18', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-19</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker19', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-19', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-20</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker20', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-20', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-21</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker21', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-21', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-22</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker22', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-22', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-23</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker23', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-23', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-24</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker24', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-24', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-25</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker25', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-25', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-26</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker26', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-26', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-27</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker27', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-27', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-28</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker28', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-28', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-29</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker29', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-29', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-30</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker30', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-30', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Date-31</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'tourdate[]', 'id' => 'datepicker31', 'value'=>set_value('tourdate'), 'placeholder' => 'Date-31', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                
                                
                                
                                 <div class="col-md-12 padding_opx margin_top">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
									
									     echo $TourName[0]['TourName']; 
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										//-------------------------------------------------------------------------------------------------------------------
										$data = array('TourId'  => $TourName[0]['TourId'] );
										echo form_hidden($data);
                                        //-------------------------------------------------------------------------------------------------------------------			
                                        $data = array('name'  => 'smt_enter', 'value' => 'Save',   'class'=>"btn btn-primary");
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
     
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-timepicker-addon.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-timepicker-addon.js"></script>
<script>
	$(function() {
	$('#datepicker').datepicker('setDate', new Date());
		$( "#datepicker1" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	$(function() {
		$( "#datepicker2" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker3" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker4" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker5" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	
	$(function() {
		$( "#datepicker6" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker7" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker8" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker9" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	$(function() {
		$( "#datepicker10" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker11" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker12" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker13" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		
		$(function() {
		$( "#datepicker14" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker15" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
			$(function() {
		$( "#datepicker16" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	$(function() {
		$( "#datepicker17" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker18" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
			$(function() {
		$( "#datepicker19" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker20" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker21" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker22" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker23" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker24" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
			$(function() {
		$( "#datepicker25" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	
		$(function() {
		$( "#datepicker26" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker27" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker28" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker29" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker30" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
		$(function() {
		$( "#datepicker31" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	
	$(function() {
		$( "#timepicker1" ).timepicker({
			timeFormat: 'HH:mm ',
		});
	});
	
		
</script>

		
        
		<div class="clearfix"></div>
		<?php //include('footer.inc.php') ?>	
	</div>
	

</body>
</html>