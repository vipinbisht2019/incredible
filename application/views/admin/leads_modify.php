<!doctype html>
<html lang="en">
<head>
<title>Leads Modify</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#Description",
		
    theme: "modern",
    width: 680,
    height: 300,
    link_list: [
        {title: 'My page 1', value: 'http://www.tinymce.com'},
        {title: 'My page 2', value: 'http://www.tecrail.com'}
    ],
	
	
    plugins: [
         "code advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
   ],
   
    relative_urls: false,
	convert_urls: false,
	remove_script_host : false,
    browser_spellcheck : true ,
    filemanager_title:"Responsive Filemanager",
    external_filemanager_path:"<?php echo base_url('assets/filemanager/'); ?>",
    external_plugins: { "filemanager" : "<?php echo base_url('assets/filemanager/plugin.min.js') ?>"},
    codemirror: {
    indentOnInit: true, // Whether or not to indent code on init.   codemirror qrcode flickr picasa easyColorPicker
    path: '<?php echo base_url()  ?>assets/tinymce'
  },
  
   image_advtab: false,
   toolbar1: "code | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview code  | youtube | qrcode | flickr | picasa | forecolor backcolor | easyColorPicker"
 });





jQuery(document).ready(function ($) {
      $('.iframe-btn').fancybox({
			  'width'	: 880,
			  'height'	: 570,
			  'type'	: 'iframe',
			  'autoScale'   : false
      });
      
 
			//
			// Handles message from ResponsiveFilemanager
			//
			function OnMessage(e){
			  var event = e.originalEvent;
			   // Make sure the sender of the event is trusted
			   if(event.data.sender === 'responsivefilemanager'){
			      if(event.data.field_id){
			      	var fieldID=event.data.field_id;
			      	var url=event.data.url;
							$('#'+fieldID).val(url).trigger('change');
							$.fancybox.close();

							// Delete handler of the message from ResponsiveFilemanager
							$(window).off('message', OnMessage);
			      }
			   }
			}

		  // Handler for a message from ResponsiveFilemanager
			$('.iframe-btn').on('click',function(){
			  $(window).on('message', OnMessage);
			});


      
      $('#download-button').on('click', function() {
	    ga('send', 'event', 'button', 'click', 'download-buttons');      
      });
      $('.toggle').click(function(){
	    var _this=$(this);
	    $('#'+_this.data('ref')).toggle(200);
	    var i=_this.find('i');
	    if (i.hasClass('icon-plus')) {
		  i.removeClass('icon-plus');
		  i.addClass('icon-minus');
	    }else{
		  i.removeClass('icon-minus');
		  i.addClass('icon-plus');
	    }
      });
});



function open_popup(url)
  {
        alert(url);
        var w = 880;
        var h = 570;
        var l = Math.floor((screen.width-w)/2);
        var t = Math.floor((screen.height-h)/2);
        var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}

</script>

 <script type="text/javascript">
          $(document).ready(function(){
             if (jQuery) {  
               // jQuery is loaded  
               alert("Yeah!");
             } else {
               // jQuery is not loaded
               alert("Doesn't Work");
             }
          });
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Leads Modify</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/leads/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						    </div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

			<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('leads')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									  
									 
							          // ------------------------------ admin form open ---------------------------------
									  $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
									  echo form_open_multipart('admin/leads/edit', $attributes);
							     ?>
                                 
                            <label><h2>Company Info</h2></label>
                           <div class="col-md-12 padding_opx">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span> Company Name  * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Name'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               							$data = array('name'  => 'Name', 'id' => 'Name','value'=>$edit_leads[0]['Name'], 'placeholder' => 'Company Name', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span> Company E-Mail ID * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Email'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'Email', 'id' => 'Email', 'value'=>$edit_leads[0]['Email'], 'placeholder' => 'Company EMail', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                	
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span>Company Contact No * </span></label>
                                          <div class="col-md-2 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CompanyCode'); ?></span>
                                       <?php
									   
									  
											unset($options);									
											$options['']='Tel code'; 
											foreach($country_list as $country)
											{
												$options[$country['phon_code']] = $country['country'].' ( '.$country['phon_code'].')';
												
											}	
											$selected = $edit_leads[0]['code'];	
											echo form_dropdown('code', $options,$selected,'class="form-control margin_bottom"');
										
										
         
                                        ?>
                                         
                                      </div>
		                			   <div class="col-md-3 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ContactNumber'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'ContactNumber', 'id' => 'ContactNumber', 'value'=>$edit_leads[0]['ContactNumber'], 'placeholder' => 'Company Contact Number', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>

								<div class="col-md-12 padding_opx">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span>Branch Name </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('branch_name'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'branch_name', 'id' => 'branch_name', 'value'=>$edit_leads[0]['branch_name'], 'placeholder' => 'Branch Name', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div></div>

								<label class="col-md-12 col-xs-12"><h2>Contact Person Info</h2></label>
								<div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span> Contact Name</span></label>
		                			   <div class="col-md-5 padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('contact_name'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'contact_name', 'id' => 'contact_name', 'value'=>$edit_leads[0]['contact_name'], 'placeholder' => 'Contact Name', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>

								<div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span>Contact Number </span></label>
										<div class="col-md-2 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CompanyCode'); ?></span>
                                       <?php
									   
									  
											unset($options);									
											$options['']='Tel code'; 
											foreach($country_list as $country)
											{
												$options[$country['phon_code']] = $country['country'].' ( '.$country['phon_code'].')';
												
											}	
											$selected = $edit_leads[0]['con_phon_code'];	
											echo form_dropdown('con_phon_code', $options,$selected,'class="form-control margin_bottom"');
										
										
         
                                        ?>
                                         
                                      </div>
		                			   <div class="col-md-3 padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('contact_number'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
              							 $data = array('name'  => 'contact_number', 'id' => 'contact_number', 'value'=>$edit_leads[0]['contact_number'], 'placeholder' => ' Contact Number', 'class'=>"form-control margin_bottom");
                						 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>

								<div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span> Contact Email </span></label>
		                			   <div class="col-md-5 padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('contact_email'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'contact_email', 'id' => 'contact_email', 'value'=>$edit_leads[0]['contact_email'], 'placeholder' => 'Contact Email', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div></div>
								
							

							   <div class="panel-body">
								<label class="col-md-12 col-xs-12"><h2>Address Info</h2></label> 
                       			

								

								 
                               
                                <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span> Country  </span></label>
	                			  <div class="col-md-5 form-group padding_opx">
                                      <select name="Country" id="Country" onChange="getState()"; style="width: 100%;box-shadow: 0px 1px 2px 0 rgb(0 0 0 / 10%);border-radius: 2px;border-color: #eaeaea;padding: 6px 12px;background: #fcfcfc;">
                                            <option value="">Country</option>
                                            <?php 
                                            	foreach($country_list as $country){ ?>
                                              		<option value="<?php echo $country['countryid'];?>"<?php if($edit_leads[0]['Country'] == $country['countryid']){ echo "selected" ; }?>><?php echo $country['country'];?></option>
											  <?php }?>
                                          </select>
                                  </div>
								  
		                		</div> 
                                
                                
                                 <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">
	                				<span> State  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                           <select name="State" id="stateid"  onChange="getCity();" style="width: 100%;box-shadow: 0px 1px 2px 0 rgb(0 0 0 / 10%);border-radius: 2px;border-color: #eaeaea;padding: 6px 12px;background: #fcfcfc;">
                                                <option value="">State</option>
                                                <?php foreach($state_list as $state){ ?>
                                                  <option value="<?php echo $state['StatesID'];?>"<?php if($edit_leads[0]['State'] == $state['StatesID']){ echo "selected" ; }?>><?php echo $state['StatesName'];?></option>
                                                <?php }?>
                                          </select>
                                      </div>
		                		</div>   
		                		 
                                
                                
                                 <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">
	                				<span> City  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('City'); ?></span>
                                       <select name="City" id="cityid" style="width: 100%;box-shadow: 0px 1px 2px 0 rgb(0 0 0 / 10%);border-radius: 2px;border-color: #eaeaea;padding: 6px 12px;background: #fcfcfc;">
                                            <option value="">City</option>
                                            <?php foreach($city_list as $city){ ?>
                                              <option value="<?php echo $city['cityid']?>"<?php if($edit_leads[0]['City'] == $city['cityid']){ echo "selected" ; }?>><?php echo $city['city_name']?></option>
                                            <?php }?>
                                      </select>
                                      </div>
		                		</div>  

								<div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">Address 1</label>
		                			<div class="col-md-5 padding_opx">
                                  
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
             						$data = array('name'  => 'Address', 'id' => 'Address','value'=>$edit_leads[0]['Address'] ,  'placeholder' => 'Address 1', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
                                    ?>
                                   
		                		  </div>
                               	</div>  

								<div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">Address 2</label>
		                			<div class="col-md-5 padding_opx">
                                  
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
             							$data = array('name'  => 'Address_second', 'id' => 'Address_second','value'=>$edit_leads[0]['Address_second'] ,  'placeholder' => 'Address 2', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
                                    ?>
                                   
		                		  </div>
                               	</div> 
                                
                                <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">Zip Code</label>
		                			<div class="col-md-5 padding_opx">
                                  
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
             							$data = array('name'  => 'zip_code', 'id' => 'zip_code','value'=>$edit_leads[0]['zip_code'] ,  'placeholder' => 'Zip Code', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
                                    ?>
                                   
		                		  	</div>
                               	</div> 
                                
                                	<div class="panel-body">
									<label class="col-md-12 col-xs-12"><h2>Passenger Info</h2></label>
									<div class="col-md-12 col-xs-12">
		                				<label class="col-md-3 text-left padding_opx">
		                					<span>FIT(Individual)</span></label>
		                			   		<div class="col-md-5 padding_opx">
                                        		<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('fit'); ?></span>
                                       				<?php
									      			// ------------------------------ Login Id form open ---------------------------------
              											 $data = array('name'  => 'fit', 'id' => 'fit', 'value'=>$edit_leads[0]['fit'], 'placeholder' => 'FIT', 'class'=>"form-control margin_bottom");
               			 							 echo form_input($data);
                                        			?>
                                      		</div>
		                			</div>

									<div class="col-md-12 col-xs-12">
		                				<label class="col-md-3 text-left padding_opx">
		                					<span>GIT(Group)</span></label>
		                			   		<div class="col-md-5 padding_opx">
                                        		<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('git'); ?></span>
												   <?php
                                                            // ------------------------------ Login Id form open ---------------------------------
                                                           $data = array('name'  => 'git', 'id' => 'git', 'value'=>$edit_leads[0]['git'], 'placeholder' => 'GIT', 'class'=>"form-control margin_bottom");
                                                             echo form_input($data);
                                                    ?>
                                      		</div>
		                			</div>
                                </div>
                                
                                
								<div class="panel-body">
								 <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">
		                				<span>Travel Date </span></label>
		                			   <div class="col-md-5 padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TravelDate'); ?></span>
									   <?php
                                          // ------------------------------ Login Id form open ---------------------------------
                                        $data = array('name'  => 'TravelDate', 'id' => 'datepicker3', 'value'=>$edit_leads[0]['TravelDate'], 'placeholder' => 'Travel Date', 'class'=>"form-control margin_bottom");
                                        echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                           
                             	  <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">Lead Type *</label>
		                			  <div class="col-md-5 padding_opx"> 
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('LeadType'); ?></span>
									   <?php
                                    
                                                
                                            unset($options);									
                                            $options['']='Lead Type';
                                            $options['B2C']='B2C';
                                            $options['B2B']='B2B';
                                            
                                            $selected = $edit_leads[0]['LeadType'];	
                                            echo form_dropdown('LeadType', $options,$selected,'class="form-control margin_bottom"');
                                        ?>
		                		 	 </div>
                              	 </div>     
                               
                               
                                 
                               <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">Lead Source *</label>
		                			<div class="col-md-5 padding_opx">
                                       <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('LeadSourseId'); ?></span>
                                   <?php
								
											unset($options);									
											$options['']='Select Lead Source'; 
											foreach($leads_leadsource as $sval)
											{
													$options[$sval['Id']] = $sval['Title'];
													
											}
											$selected = $edit_leads[0]['LeadSourseId'];	
											echo form_dropdown('LeadSourseId', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>  
                             </div>
								
                                
                                 <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">More Details</label>
		                			<div class="col-md-8 form-group padding_opx">
                                  
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
             						$data = array('name'  => 'Note', 'id' => 'Description','value'=>$edit_leads[0]['Note'] ,  'placeholder' => 'Note', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div>  
                               
                               <div class="col-md-12 col-xs-12">
		                			<label class="col-md-3 text-left padding_opx">Assign To</label>
		                			<div class="col-md-5 form-group padding_opx">
                                  
                                    <?php
								   

										unset($options);									
										$options['']='Select Assign To'; 
										foreach($assignUserList as $sval)
										{
											$options[$sval['EmployeeID']] = $sval['FirstName'];
											
										}	
										$selected = $edit_leads[0]['assign_to'];	
										echo form_dropdown('assign_to', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
                                   
		                		  	</div>
                               	</div>
                                                                                   
                                  
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-3 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
									    $data = array('LeadStatusID'  => 2);
                                        echo form_hidden($data);
                                            
										$data = array('id'  => $edit_leads[0]['LeadID'] );
										echo form_hidden($data);
										
                                         $data = array('flag'  => 'yes');
                                         echo form_hidden($data);
										
										 $AddedDate=date('Y-m-d');
										 $data = array('AddedDate'  => $AddedDate);
                                         echo form_hidden($data);
										
										
										
                                        //-------------------------------------------------------------------------------------------------------------------			
                                        $data = array('name'  => 'smt_enter', 'value' => 'Submit',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
                                    ?>
                                    
                            </div>
                            </div>
                                
						          <?php   // ------------------------------ admin form open ---------------------------------
							                   echo form_close(); 
							       ?>
						</div>

<!-- ############################################################## HTML ##################################################  -->
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
     
  
 
		
        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
    
    
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
	
	$(function() {
		$( "#datepicker3" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
		   minDate: 0,
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	
</script>

<script>
		function getState(){
			
			var countryId= document.getElementById("Country").value;
			 jQuery.ajax
				({
				  type: "POST",
				  url: "<?php echo base_url();?>admin/tour_itinerary/getStateList",
				  data: { "countryId": countryId },
				  success: function (data) {
					$('#stateid').html(data);
					
				  }
				});
		
		}
		function getCity(){
			
			var stateid= document.getElementById("stateid").value;
			 jQuery.ajax
				({
				  type: "POST",
				  url: "<?php echo base_url();?>admin/tour_itinerary/getCityList",
				  data: { "stateid": stateid },
				  success: function (data) {
					$('#cityid').html(data);
					
				  }
				});
		
		}

		document.getElementById('fit').onchange = function () {

			if(this.value != '') {
				document.getElementById("git").disabled = true;
			}else{

				document.getElementById("git").disabled = false;
			}
			}
			document.getElementById('git').onchange = function () {

			if(this.value != ''){

				document.getElementById("fit").disabled = true;

			}else{

				document.getElementById("fit").disabled = false;

			}
		}
</script>

	

</body>
</html>