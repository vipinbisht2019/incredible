<?php error_reporting(0);?>
<!doctype html>
<html lang="en">
<head>
<title>Tour General Info Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
    $(document).ready(function(){
        //group add limit
        var maxGroup = 10;
        
        //add more fields group
        $(".addMore").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div  class=" col-md-12 form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });
        
         $(".addMoreDept").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div  class=" col-md-12 form-group fieldGroup">'+$(".fieldGroupDept").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });
        
        //remove fields group
        $("body").on("click",".remove",function(){ 
            $(this).parents(".fieldGroup").remove();
        });
    });
    </script>
	<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
	<script type="text/javascript">
    tinymce.init({
        selector: "#TourDescription,#TourInfo",
          formats: {
        alignleft: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'left'},
        aligncenter: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'center'},
        alignright: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'right'},
        alignjustify: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'full'},
        bold: {inline : 'span', 'classes' : 'bold'},
        italic: {inline : 'span', 'classes' : 'italic'},
        underline: {inline : 'span', 'classes' : 'underline', exact : true},
        strikethrough: {inline : 'del'},
        forecolor: {inline : 'span', classes : 'forecolor', styles : {color : '%value'}},
        hilitecolor: {inline : 'span', classes : 'hilitecolor', styles : {backgroundColor : '%value'}},
        custom_format: {block : 'h1', attributes : {title : 'Header'}, styles : {color : 'red'}}
      },
    
        
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
          
                function OnMessage(e){
                  var event = e.originalEvent;
                   
                   if(event.data.sender === 'responsivefilemanager'){
                      if(event.data.field_id){
                        var fieldID=event.data.field_id;
                        var url=event.data.url;
                                $('#'+fieldID).val(url).trigger('change');
                                $.fancybox.close();
                                $(window).off('message', OnMessage);
                      }
                   }
                }
    
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
                            <h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Tour General Info Add</b></h3>
                        </div>
                        <div class="col-md-6 padding_opx">
                                  <a href="<?php echo base_url('admin/leads/opration')."?id=".$lead_info['LeadID'];  ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
                        </div>
                    </div>
                 </div>
                <div class="panel">
                	<div class="panel-body">
						<div class="col-md-12 col-xs-12" style="margin-top: 23px;">
                        	<div class="panel panel-default text-center">
                                <div class="panel-heading" style="padding-top: 8px; padding-bottom: 0px;">                            
                                	<p>	Create Tour Package in 10 simple steps! </p>                            
                                </div> 
    						</div>
	
    						<div class="stepwizard">
      							<div class="stepwizard-row">
                                
                                	<div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-primary btn-circle" disabled="disabled">1</button>
                                        <p>General Info ITI</p>
                                    </div>    
									
                                    <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">2</button>
                                        <p>Short Itinerary</p>
                                    </div>
                                    
                                    <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
                                        <p>Operational Itinerary<br>Details</p>
                                    </div>
        
                                    <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">4</button>
                                        <p>Hotel</p>
                                    </div>
                                    
                                    <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">5</button>
                                        <p>Transport</p>
                                    </div>
                                    
                                    <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">6</button>
                                        <p>Driver Hotel</p>
                                    </div>
                                    
                                     <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">7</button>
                                        <p>Sight Seeing</p>
                                    </div>
                                    
                                    <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">8</button>
                                        <p>Meals</p>
                                    </div> 
                                    
                                    <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">9</button>
                                        <p>Total Cost</p>
                                    </div>       
                                   
                                     <div class="stepwizard-step col-md-1">
                                        <button type="button" class="btn btn-default btn-circle" disabled="disabled">10</button>
                                        <p>Inclusion<br>Exclusion</p>
                                    </div>
                                     
                                </div>
							</div>	
						</div>
<?php //print_r($lead_info);?>
                   		<div class="col-md-12 col-xs-12 margin_top">                   
                                  <?php
                                    if($error = $this->session->flashdata('locations')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?php echo $error ?>
                                      </div>
                                    
                                    <?php        
                                      }                          
						 
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/tour_generalinfo/add', $attributes);
							     ?>
		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Itinerary Prepared For *</span></label>
		                			   <div class="col-md-5 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ItineraryPrepared'); ?></span>
										 	<select name="ItineraryPrepared" id="ItineraryPrepared">
                                            	<option value="">Select Itinerary Prepared</option>
                                            	<option value="self">Self</option>
                                              <option value="others" selected>Others</option>
                                            </select>
                                      </div>
		                		  </div>
                                  
                          <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Company Name</span></label>
		                			   <div class="col-md-5 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('companyname'); ?></span>
										   <?php
										   
                                             $data = array('name'  => 'ItineraryTitle', 'id' => 'ItineraryTitle', 'placeholder' => 'Company Name', 'Title','value' => $lead_info['Name'], 'class'=>"form-control margin_bottom");
                                             echo form_input($data);
											 
                                            ?>
                                      </div>
		                		  </div>                      

                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Itinerary Title*</span></label>
		                			   <div class="col-md-5 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ItineraryTitle'); ?></span>
										   <?php
										   
                                             $data = array('name'  => 'ItineraryTitle', 'id' => 'ItineraryTitle', 'placeholder' => 'Itinerary Title','value'=>set_value('ItineraryTitle'),  'class'=>"form-control margin_bottom");
                                             echo form_input($data);
											 
                                            ?>
                                      </div>
		                		  </div>                              
                                 
		               
                                  
                                  <div class="col-md-12 padding_opx">
                                    <label class="col-md-2 text-left padding_opx">
                                        <span>Tour Start/End Date</span></label>
                                       <div class="col-md-2 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TourStartDate'); ?></span>
                                       <?php
                                    
                                       $dt = date("d-m-Y", strtotime($lead_info['TravelDate']));
                                        $data = array('name'  => 'TourStartDate', 'id' => 'TourStartDate', 'value'=> $dt, 'placeholder' => 'Tour Start Date', 'class'=>"form-control margin_bottom");
                                        echo form_input($data);
                                        ?>
                                      </div>
                                      
                                      <div class="col-md-2 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TourEndDate'); ?></span>
                                       <?php
                                
                                        $data = array('name'  => 'TourEndDate', 'id' => 'TourEndDate', 'value'=>set_value('TourEndDate'), 'placeholder' => 'Tour End Date','class'=>"form-control margin_bottom");
                                        echo form_input($data);
                                        ?>
                                    </div>
                                 </div>     
                                                              
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Duration of Itinerary</span></label>
		                			   <div class="col-md-2 form-group padding_1px">
                                            <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Nights'); ?></span>
                                              <label>Nights</label>
                                           <?php
                                              
                                                $data = array('name'  => 'Nights', 'type'  => 'number', 'id' => 'Nights', 'value'=>set_value('Nights'),  'min'=> 0, 'class'=>"form-control margin_bottom");
                                                echo form_input($data);
                                            ?>
                                            
                                      </div>
                                      <div class="col-md-2 form-group padding_1px">
                                            <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Days'); ?></span>
                                              <label>Days</label>
                                           <?php
                                              
                                                $data = array('name'  => 'Days', 'type'  => 'number', 'id' => 'Days', 'value'=>set_value('Days'),'min'=> 0, 'class'=>"form-control margin_bottom");
                                                echo form_input($data);
                                            ?>
                                            
                                      </div>
		                		  </div>
                                  
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Minimun No of Full Paying Pax / Free Pax</span></label>
		                			   <div class="col-md-2 form-group padding_1px">
                                            <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('PayingPax'); ?></span>
                                              <label>Paying Pax</label>
                                           <?php
                                             
                                                $data = array('name'  => 'PayingPax', 'type'  => 'number', 'id' => 'PayingPax', 'value'=>set_value('PayingPax'), 'min'=> 0, 'class'=>"form-control margin_bottom");
                                                echo form_input($data);
                                            ?>
                                      </div>
                                       <div class="col-md-2 form-group padding_1px">
                                            <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('FreePax'); ?></span>
                                              <label>Free Pax</label>
                                           <?php
                                             
                                                $data = array('name'  => 'FreePax', 'type'  => 'number', 'id' => 'FreePax', 'value'=>set_value('FreePax'), 'min'=> 0, 'class'=>"form-control margin_bottom");
                                                echo form_input($data);
                                            ?>
                                      </div>
                                      
                                      <div class="col-md-2 form-group padding_1px">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('totalpax'); ?></span>
                                         <label>Total Pax</label>
                                       <?php
                                
											$data = array('name'  => 'totalpax', 'type' => 'number', 'id' => 'totalpax', 'value'=>set_value('totalpax'),  'min' => '0' ,  'placeholder' => 'Total Pax','readonly' => 'readonly', 'class'=>"form-control margin_bottom");
											echo form_input($data);
                                        ?>
                                    </div>
		                		  </div>
                                  <?php //print_r($lead_info); ?>
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Contact Info</span></label>
		                			   <div class="col-md-3 form-group padding_1px">
                                            <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ContactName'); ?></span>
                                           <?php
                                              
                                                $data = array('name'  => 'ContactName[]',  'id' => 'ContactName', 'value'=> $lead_info['contact_name'], 'placeholder' => 'Contact Name', 'class'=>"form-control margin_bottom");
                                                echo form_input($data);
                                            ?>
                                      </div>
                                      <div class="col-md-3 form-group padding_1px">
                                            <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ContactMobile'); ?></span>
                                           <?php
                                              
                                                $data = array('name'  => 'ContactMobile[]', 'id' => 'ContactMobile', 'value'=> $lead_info['con_phon_code'] .''.$lead_info['contact_number'], 'placeholder' => 'Contact Mobile', 'class'=>"form-control margin_bottom");
                                                echo form_input($data);
                                            ?>
                                      </div>
                                      
                                      <div class="col-md-3 form-group padding_1px">
                                            <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ContactEmail'); ?></span>
                                           <?php
                                              
                                                $data = array('name'  => 'ContactEmail[]', 'id' => 'ContactEmail', 'value'=>$lead_info['contact_email'], 'placeholder' => 'Contact Email', 'class'=>"form-control margin_bottom");
                                                echo form_input($data);
                                            ?>
                                      </div>
                                      
                                       <!-- <div class="col-md-1 form-group padding_1px">
                                            
                                      		<a href="javascript:void(0)" class="btn btn-success addMoreDept"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                                      </div> -->
		                		  </div>                               
                          
                  
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> Status </label>
		                			<div class="col-md-2 form-group padding_1px">
                                   <?php
								   
											$options = array
											(
										    	'Y' => 'Active',
											    'N' => 'Inactive',
											
											);
																		
											echo form_dropdown('Status', $options, '','class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>   
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_1px">

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										
										$FileDate=date('Y-m-d');
										 $data = array('FileDate'  => $FileDate);
                                         echo form_hidden($data);
										 
									
										 $data = array('LeadId'  => $id);
                                         echo form_hidden($data);
                                       		
                                        $data = array('name'  => 'smt_enter', 'value' => 'Save',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
										
										$data = array('name'  => 'smt_enter_nxt', 'value' => 'Save & Next',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
                                    ?>
                                    
                            </div>
                            </div>
                                
						       <?php 
							       
							               echo form_close(); 
							       ?>
						</div>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
</div>
<script>
	function getClientName(){
	
		alert("hi");
	
	}
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script>
	  		$( function() {
	   			$( "#TourStartDate" ).datepicker({
				
            dateFormat: "dd-mm-yy",
            minDate: 0,
            changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
	   			});
	  		});

        
        $( function() {
	   			$( "#TourEndDate" ).datepicker({
			
				dateFormat: "dd-mm-yy",
         	 	minDate: ($('#TourStartDate').val()),       	
				changeMonth: true,
				changeYear: true,
				buttonImageOnly: true
			
			
	   			});
	  		});
      
	  	</script>
        
    <script>
			$(document).ready(function() {
				  
				$( "#TourStartDate,#TourEndDate" ).datepicker({
				
				dateFormat: 'dd-mm-yy',							
				changeMonth: true,
				changeYear: true,
				firstDay: 1,
				
				   
				})
				
				$( "#TourStartDate" ).datepicker({ dateFormat: 'dd-mm-yy' });
				$( "#TourEndDate" ).datepicker({ dateFormat: 'dd-mm-yy' });
				
				/*$('#TourStartDate').change(function(){
					
					var start = $('#TourStartDate').datepicker('getDate');
					var end   = $('#TourEndDate').datepicker('getDate');
					
				
				});*/
				
				
				$('#TourEndDate').change(function(){
				
					var start = $('#TourStartDate').datepicker('getDate');
					var end   = $('#TourEndDate').datepicker('getDate');
					
				
				if (start<end) {
					  	var nights   = (end - start)/1000/60/60/24;
						var days = nights+1;
					 	 $('#Days').val(days);
					 	 $('#Nights').val(nights);
				}
				else {
				  alert ("You cant come back before tour start date!");
				  //$('#TourStartDate').val("");
				  $('#TourEndDate').val("");
					$('#Days').val("");
					$('#Nights').val("");
				}
				
				}); //end change function
				});
				
				
				
				$('#PayingPax').change(function() {
			
					var freePax =  $('#FreePax').val();
					var payingPax =  $('#PayingPax').val();
					
					
					var totalPax = parseInt(freePax) + parseInt(payingPax);
					
						
					 $('#totalpax').val(totalPax); 
						
				});
				
				$('#FreePax').change(function() {
					
					var freePax =  $('#FreePax').val();
					var payingPax =  $('#PayingPax').val();
					
					
					var totalPax = parseInt(freePax) + parseInt(payingPax);
					
						
					 $('#totalpax').val(totalPax); 
						
					});
				
		</script>
</body>
</html>