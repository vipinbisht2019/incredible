<!doctype html>
<html lang="en">
<head>
<title>Employee Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#Overview",
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Employee Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/employee/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('employee')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									  
									 
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/employee/add', $attributes);
							     ?>
                                 
                                 
                           <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> First Name * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('FirstName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'FirstName', 'id' => 'FirstName', 'value'=>set_value('FirstName'), 'placeholder' => 'First Name', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Last Name * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('LastName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'LastName', 'id' => 'LastName', 'value'=>set_value('LastName'), 'placeholder' => 'Last Name', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Employee Designation </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('EmployeeDesignation'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'EmployeeDesignation', 'id' => 'EmployeeDesignation', 'value'=>set_value('EmployeeDesignation'), 'placeholder' => 'Employee Designation', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                      
                                 
                                 
                                 
                          <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Undar Employee </label>
		                			<div class="col-md-5 form-group padding_opx">
                                   <?php
								
											unset($options);									
									        $options['']='Select Employee';
											foreach($employee as $val)
										       {
												    $options[$val['EmployeeID']] = $val['FirstName']." ".$val['LastName'];
												    $subArr=@$val['sub'];
												    if(count($subArr) > 0)
													 {
													    foreach($subArr as $sval)
													     $options[$sval['EmployeeID']] = "|___".$sval['FirstName']." ".$sval['LastName'];
													 }
											   }		
											 $selected=set_value('SubEmployee');	
										     echo form_dropdown('SubEmployee', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>    
                               
                               
                               
                               
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Email-Id	 * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('EmailID'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                $data = array('name'  => 'EmailID', 'id' => 'EmailID', 'value'=>set_value('EmailID'), 'placeholder' => 'EmailID', 'class'=>"form-control margin_bottom");
                echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Mobile No * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('PhoneNO'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'PhoneNO', 'id' => 'PhoneNO', 'value'=>set_value('PhoneNO'), 'placeholder' => 'Last Name', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>     
                                
                                
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> User Name* </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('UserName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'UserName', 'id' => 'UserName', 'value'=>set_value('UserName'), 'placeholder' => 'User Name', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>                  
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Password* </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Password'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'Password', 'id' => 'Password', 'value'=>set_value('Password'), 'placeholder' => 'Password', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		</div>              

		                

                             <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Address </label>
		                			<div class="col-md-8 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Description'); ?></span>
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'Address', 'id' => 'Address','value'=>set_value('Address') ,  'placeholder' => 'Address', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div>  
                               
                               
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Country  </span></label>
	                			  <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Country'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                       $data = array('name'  => 'Country', 'id' => 'Country', 'value'=>set_value('Country'), 'placeholder' => 'Country', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                  </div>
		                		</div> 
                                
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
	                				<span> State  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('State'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'State', 'id' => 'State', 'value'=>set_value('State'), 'placeholder' => 'State', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		</div>   
		                		 
                                
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
	                				<span> City  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('City'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'City', 'id' => 'City', 'value'=>set_value('City'), 'placeholder' => 'City', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		</div>  
                                
                                
                                
                                
                                 
                                
                                
                                
                                
                                 
                               
                               
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Photo </span></label>
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
										    	
												   'Y' => 'Active',
											       'N' => 'Inactive',
											
										      );
											
											$selected=set_value('Status');							
											echo form_dropdown('Status', $options, $selected,'class="form-control margin_bottom"');
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
                                
						          <?php   // ------------------------------ admin form open ---------------------------------
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