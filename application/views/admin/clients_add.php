<!doctype html>
<html lang="en">
<head>
<title>Clients Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>

<script>
$(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore1").click(function(){
        if($('body').find('.fieldGroup1').length < maxGroup){
            var fieldHTML = '<div  class=" col-md-12 form-group fieldGroup1">'+$(".fieldGroup1Copy").html()+'</div>';
            $('body').find('.fieldGroup1:last').after(fieldHTML);
        }else{
            alert('Maximum ' + maxGroup + ' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup1").remove();
    });
});
</script>



<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
	 selector: "#content1,#content2",
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Clients Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/clients/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom"> Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

			 
                               
                                   

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('clients')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                          
						  // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/clients/add', $attributes);
							     ?>
                                 
                                  <h2 style="margin-bottom: 0px;color: #00aaff;font-size: 18px;font-weight: 600;">Basic Details </h2>
                                  <div style="background: #00aaff70;width: 100%;margin-top: 5px;height: 1px; margin-bottom:10px;"></div>  
                                    

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> First Name  * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('FirstName'); ?></span>
                                       <?php
									      // ------------------------------ Name form open ---------------------------------
               $data = array('name'  => 'FirstName',  'value'=>set_value('FirstName'), 'placeholder' => 'FirstName', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Last Name  * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('LastName'); ?></span>
                                       <?php
									      // ------------------------------ Name form open ---------------------------------
               $data = array('name'  => 'LastName',  'value'=>set_value('LastName'), 'placeholder' => 'Last Name', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                               
                                  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Email Address  *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('EMailAddress'); ?></span>
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'EMailAddress', 'id' => 'EMailAddress', 'value'=>set_value('EMailAddress'), 'placeholder' => 'EMail Address', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                
                                
                                 
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Password  *</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Password'); ?></span>
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Password', 'id' => 'Password', 'value'=>set_value('Password'), 'placeholder' => 'Password', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Contact Number  *</span></label>
		                			     <div class="col-md-3 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ContactNumber'); ?></span>
                                       <?php
			    // ------------------------------------------------ EmailAddress form open -----------------------------------
                $data = array('name'  => 'ContactNumber', 'id' => 'ContactNumber', 'value'=>set_value('ContactNumber'), 'placeholder' => 'Contact Number', 'class'=>"form-control margin_bottom");
                echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                               
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Gender  *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Gender'); ?></span>
                                       <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
										    	'M'   => 'Male',
											    'F'   => 'Female',
												'T'   => 'Other',
											
											);
											
										 $selected=	set_value('Gender');						
										 echo form_dropdown('Gender', $options, $selected ,'class="form-control margin_bottom"');
                                    ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Profile Photo  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                    
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Website', 'class'=>"form-control margin_bottom");
                       echo form_upload($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Facebook ID  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
              
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'FacebookID', 'id' => 'FacebookID', 'value'=>set_value('FacebookID'), 'placeholder' => 'Facebook ID', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Instagram ID  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('InstagramID'); ?></span>
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'InstagramID', 'id' => 'InstagramID', 'value'=>set_value('InstagramID'), 'placeholder' => 'InstagramID', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Twitter ID  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                   
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'TwitterID', 'id' => 'TwitterID', 'value'=>set_value('TwitterID'), 'placeholder' => 'TwitterID', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Relationship  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Relationship'); ?></span>
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Relationship', 'id' => 'Relationship', 'value'=>set_value('Relationship'), 'placeholder' => 'Relationship', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                 
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Profession  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Profession'); ?></span>
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Profession', 'id' => 'Profession', 'value'=>set_value('Profession'), 'placeholder' => 'Profession', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> City of Living  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CityofLiving'); ?></span>
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'CityofLiving', 'id' => 'CityofLiving', 'value'=>set_value('CityofLiving'), 'placeholder' => 'City of Living', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                         <h2 style="margin-bottom: 0px;margin-top: 55px;color: #00aaff;font-size: 18px;font-weight: 600;">Passport Details </h2>
                         <div style="background: #00aaff70;width: 100%;margin-top: 5px;height: 1px; margin-bottom:10px;"></div>   
                         
                          <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Passport Number </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'PassportNumber', 'id' => 'PassportNumber', 'value'=>set_value('PassportNumber'), 'placeholder' => 'Passport Number', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                               
                                  
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Passport Expiry Date </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'PassportExpiryDate', 'id' => 'datepicker1', 'value'=>set_value('PassportExpiryDate'), 'placeholder' => 'Passport Expiry Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Nationality </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Nationality', 'id' => 'Nationality', 'value'=>set_value('Nationality'), 'placeholder' => 'Nationality', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Married </span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Married', 'id' => 'Married', 'value'=>set_value('Married'), 'placeholder' => 'Married', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                 
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Date of Birth </span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'DateofBirth', 'id' => 'datepicker2', 'value'=>set_value('DateofBirth'), 'placeholder' => 'Date of Birth', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Anniversary Date</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'AnniversaryDate', 'id' => 'datepicker3', 'value'=>set_value('AnniversaryDate'), 'placeholder' => 'Anniversary Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                              <h2 style="margin-bottom: 0px;margin-top: 55px;color: #00aaff;font-size: 18px;font-weight: 600;">Preferences </h2>
                                 <div style="background: #00aaff70;width: 100%;margin-top: 5px;height: 1px; margin-bottom:10px;"></div>  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Meal Preference</span></label>
		                			   <div class="col-md-8 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'MealPreference', 'id' => 'MealPreference', 'value'=>set_value('MealPreference'), 'placeholder' => 'Meal Preference', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Seating Preference</span></label>
		                			   <div class="col-md-8 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'SeatingPreference', 'id' => 'SeatingPreference', 'value'=>set_value('SeatingPreference'), 'placeholder' => 'Seating Preference', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                
                                
                                  <h2 style="margin-bottom: 0px;color: #00aaff;font-size: 18px;font-weight: 600;">Special Arrangements </h2>
                                 <div style="background: #00aaff70;width: 100%;margin-top: 5px;height: 1px; margin-bottom:10px;"></div>         
                              
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Medical Requirement</span></label>
		                			   <div class="col-md-8 form-group padding_opx">
                                       
         <?php
				 // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'MedicalRequirement', 'id' => 'content1', 'value'=>set_value('MedicalRequirement'), 'placeholder' => 'Medical Requirement', 'class'=>"form-control margin_bottom");
                       echo form_textarea($data);
                                        ?>
                                         <p>&nbsp;</p>
                                      </div>
		                		  </div>
                                
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Special Service Requirement</span></label>
		                			   <div class="col-md-8 form-group padding_opx">
                                       
                                       <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'SpecialServiceRequirement', 'id' => 'content2', 'value'=>set_value('SpecialServiceRequirement'), 'placeholder' => 'Special Service Requirementt', 'class'=>"form-control margin_bottom");
                       echo form_textarea($data);
                                        ?>
                                         <p>&nbsp;</p>
                                      </div>
		                		  </div> 
                                  
                   <h2 style="margin-bottom: 0px;margin-top: 55px;color: #00aaff;font-size: 18px;font-weight: 600;">Documents (Visa Copy / Insurance / Tax / Passport Copy / Any Other Document) </h2>
                     <div style="background: #00aaff70;width: 100%;margin-top: 5px;height: 1px; margin-bottom:10px;"></div>       
                                  
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>   </span></label>
                                        
                                        <div class="col-md-5 form-group padding_opx">
                                         <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'DocumentName[]', 'id' => 'DocumentName', 'value'=>set_value('Married'), 'placeholder' => 'Document Name...', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                        </div>
		                			    <div class="col-md-3 form-group padding_opx">
                                          
                                          <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                      </div>
                                      
                                       <div class="col-md-1 "> 
                                         <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                                       </div>
		                		</div>
                                
                           <!-- ***************************** appending fields ************************************** -->              
                       
                           <div class="row">
                                 <div class="col-lg-12  fieldGroup">
                                  
                                  </div>
                            </div>
                              
                       <!-- ***************************** appending fields ************************************** -->  
                       
                       
                                
                                       
                     <h2 style="margin-bottom: 0px;margin-top: 55px;color: #00aaff;font-size: 18px;font-weight: 600;">Travel Wishlist </h2>
                     <div style="background: #00aaff70;width: 100%;margin-top: 5px;height: 1px; margin-bottom:10px;"></div>       
                     
                     <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>   </span></label>
                                        
                                        <div class="col-md-5 form-group padding_opx">
                                        <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'TourLocation[]', 'id' => 'TourLocation', 'value'=>set_value('Married'), 'placeholder' => 'Tour Location...', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                        </div>
		                			  
                                       <div class="col-md-3 form-group padding_opx">
                                         <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Planningduring[]', 'id' => 'Planningduring', 'value'=>set_value('Married'), 'placeholder' => 'Planning during - Month & Year..', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                      
                                       <div class="col-md-1 "> 
                                         <a href="javascript:void(0)" class="btn btn-success addMore1"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                                       </div>
		                		</div>
                                
                           <!-- ***************************** appending fields ************************************** -->              
                       
                           <div class="row">
                                 <div class="col-lg-12  fieldGroup1">
                                  
                                  </div>
                            </div>
                              
                       <!-- ***************************** appending fields ************************************** -->  

                     
                     
                     
                     
                                
                                 
                                  
                                
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> Status </label>
		                			<div class="col-md-2 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											(
										    	'Y'   => 'Active',
											    'N'   => 'Inactive',
											
											);
											
										 $selected=	set_value('Status');						
										 echo form_dropdown('Status', $options, $selected ,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>   
                                                        
                  
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
                                           $data = array('flag'  => 'yes');
                                           echo form_hidden($data);
										 
										   $AddedDate=date('Y-m-d');
										   $data = array('AddedDate'  => 'yes');
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

                               <div class="col-md-12 fieldGroupCopy" style="display: none;">
		                			<div class="col-md-2 text-left padding_opx">
		                				<span>    </span></div>
                                        
                                         <div class="col-md-5 form-group padding_opx">
                                         <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'DocumentName[]', 'id' => 'DocumentName', 'value'=>set_value('Married'), 'placeholder' => 'Document Name...', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                        </div>
		                			  
                                       <div class="col-md-3 form-group padding_opx">
                                         <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                                            echo form_upload($data);
                                          ?>
                                        
                                        
                                      </div>
                                       <div class="col-md-1 "> 
                          <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                    </div>
	          	</div>
  <!-- ******************************************************************************************************************************************** -->  
  
                   <div class="col-md-12 fieldGroup1Copy" style="display: none;">
		                			<div class="col-md-2 text-left padding_opx">
		                				<span>    </span></div>
                                        
                                         <div class="col-md-5 form-group padding_opx">
                                         <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'TourLocation[]', 'id' => 'TourLocation', 'value'=>set_value('Married'), 'placeholder' => 'Tour Location...', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                        </div>
		                			  
                                       <div class="col-md-3 form-group padding_opx">
                                         <?php
									      // ------------------------------ EmailAddress form open ---------------------------------
               $data = array('name'  => 'Planningduring[]', 'id' => 'Planningduring', 'value'=>set_value('Married'), 'placeholder' => 'Planning during - Month & Year..', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                        
                                        
                                      </div>
                                       <div class="col-md-1 "> 
                          <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
                    </div>
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
	

</body>
</html>