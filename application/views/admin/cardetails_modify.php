<!doctype html>
<html lang="en">
<head>
<title>Car Details Modify</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#Discription, #BookingInfo",
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
							<h3 class="panel-title title_h3"><b><i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Car Details Modify</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/cardetails/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>
         

			<div class="panel">

				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('cardetails')){  ?>
                                    
                                        <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                        </div>
                                    
                                    <?php        
                                      }
                          
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/cardetails/edit', $attributes);
							     ?>
                                 
                              
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Category * </label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CarCategoriesId'); ?></span>
                                   <?php
								
											unset($options);									
									        $options['']='Select Category';
											foreach($dropdown_category as $val)
										       {
												   $options[$val['carTourCategoriesId']] = $val['carTourCategoriesName'];
											   }		
											 $selected=$edit_cardetails[0]['CarCategoriesId'];	
										     echo form_dropdown('CarCategoriesId', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>           
                                      

		                

		                		<div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Car Title  * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CarName'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'CarName', 'id' => 'CarName', 'value' =>$edit_cardetails[0]['CarName'], 'placeholder' => 'Car Title', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Manufacturer * </label>
		                			<div class="col-md-5 form-group padding_opx">
                                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CarManufacturerId'); ?></span>
                                   <?php
								
											unset($options);									
									        $options['']='Select Manufacturer';
											foreach($dropdown_manufacturer as $val)
										       {
												   $options[$val['carmanufacturerId']] = $val['carmanufacturerName'];
											   }		
											 $selected=$edit_cardetails[0]['CarManufacturerId'];	
										     echo form_dropdown('CarManufacturerId', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div>   
                               
                               
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Select Class </label>
		                			<div class="col-md-2 form-group padding_opx">
                                     
                                   <?php
								
											unset($options);									
									        $options['']='Select Class';
											foreach($dropdown_class as $val)
										       {
												   $options[$val['carclassId']] = $val['carclassName'];
											   }		
											 $selected=$edit_cardetails[0]['ClassId'];	
										     echo form_dropdown('ClassId', $options,$selected,'class="form-control margin_bottom"');
                                    ?>
		                		  </div>
                               </div> 
                               
                               
                                       
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Body Style*</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('BodyStyle'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'BodyStyle', 'id' => 'BodyStyle', 'value'=>$edit_cardetails[0]['BodyStyle'], 'placeholder' => 'Body Style', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>   
                                  
                             
                                   
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Seating *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Seating'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'Seating', 'id' => 'Seating', 'value'=>$edit_cardetails[0]['Seating'], 'placeholder' => 'Seating', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>   
                                  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Luggage *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Luggage'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'Luggage', 'id' => 'Luggage', 'value'=>$edit_cardetails[0]['Luggage'], 'placeholder' => 'Luggage', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>  
                                  
                                  
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> 
		                				<span>Rates *</span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Fare'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'Fare', 'id' => 'Fare', 'value'=>$edit_cardetails[0]['Fare'], 'placeholder' => 'Fare', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                      
                                      
                                      <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px; ";><?php echo form_error('TimeLimit'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'TimeLimit', 'id' => 'TimeLimit', 'value'=>$edit_cardetails[0]['TimeLimit'], 'placeholder' => 'Time Limit In Hours', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                      
                                      <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('DistanceLimit'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'DistanceLimit', 'id' => 'DistanceLimit', 'value'=>$edit_cardetails[0]['DistanceLimit'], 'placeholder' => 'Distance Limit in KM', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                      
                                      <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('WithinCity'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'WithinCity', 'id' => 'WithinCity', 'value'=>$edit_cardetails[0]['WithinCity'], 'placeholder' => 'Within City', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                      
		                		  </div>  
                                  
                                  
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Extra Mileage <small>(Per KM)</small>*</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ExtraMileage'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'ExtraMileage', 'id' => 'ExtraMileage', 'value'=>$edit_cardetails[0]['ExtraMileage'], 'placeholder' => 'Extra Mileage', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Extra Hours <small>(Per Hours)</small>*</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ExtraHours'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'ExtraHours', 'id' => 'ExtraHours', 'value'=>$edit_cardetails[0]['ExtraHours'], 'placeholder' => 'Extra Hours', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>    
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Out Station <small>(Per KM)</small></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                       
                                       <?php
									 
               $data = array('name'  => 'OutStation', 'id' => 'OutStation', 'value'=>$edit_cardetails[0]['OutStation'], 'placeholder' => 'Out Station', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> 
		                				<span>Distance Limit<small>(Per Day)</small> *</span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('DistanceLimitOutation'); ?></span>
                                       <?php
									 
             $data = array('name'  => 'DistanceLimitOutation', 'id' => 'DistanceLimitOutation', 'value'=>$edit_cardetails[0]['DistanceLimitOutation'], 'placeholder' => 'Minimum Distance Limit', 'class'=>"form-control margin_bottom");
                       echo form_input($data); 
                                        ?>
                                      </div>
                                  </div>  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> 
		                				<span>Extra Hours Driving Charges   <small>(Per Hour)</small>*</span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('DrivingChargesOutation'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'DrivingChargesOutation', 'id' => 'DrivingChargesOutation', 'value'=>$edit_cardetails[0]['DrivingChargesOutation'], 'placeholder' => 'Driving Charges', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                  </div>  
                                  
                                        
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Airport Transfers</span></label>
		                			   
                                       <div class="col-md-2 form-group padding_opx">
                                     
                                       <?php
									 
               $data = array('name'  => 'AirportTransfers', 'id' => 'AirportTransfers', 'value'=>$edit_cardetails[0]['AirportTransfers'], 'placeholder' => 'Airport Transfers Charges', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                         <div class="col-md-1 form-group padding_opx"><center>+</center></div>
                                      
                                       <div class="col-md-2 form-group padding_opx">
                                     
                                       <?php
									 
               $data = array('name'  => 'ParkingCharges', 'id' => 'ParkingCharges', 'value'=>$edit_cardetails[0]['ParkingCharges'], 'placeholder' => 'Parking Charges', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>        
                                  
                                  
                                  
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Description </label>
		                			<div class="col-md-5 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Description'); ?></span>
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'Discription', 'id' => 'Discription', 'value'=>$edit_cardetails[0]['Discription'],  'placeholder' => 'Discription', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div>  
                               
                               
                               
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Booking Info </label>
		                			<div class="col-md-5 form-group padding_opx">
                                     <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('BookingInfo'); ?></span>
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'BookingInfo', 'id' => 'BookingInfo', 'value'=>$edit_cardetails[0]['BookingInfo'],  'placeholder' => 'Booking Info', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div>  
                               
                                                                    
                         <?php foreach($commission_type as $cval) { ?>   
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx"> 
		                				<span><?php echo $cval['CommissionTitle'] ?> </span></label>
		                			   <div class="col-md-4 form-group padding_opx">
                                       
                                       <?php
									   
									     $data = array('commission_id[]'  => $cval['CommissionId']);
                                         echo form_hidden($data);
									 
               $data = array('name'  => 'CommissionPrice[]', 'id' => 'CommissionPrice', 'value'=>$commission_type_edit[$cval['CommissionId']], 'placeholder' => $cval['CommissionTitle'].' Agents Commission', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                  </div> 
                        <?php } ?>
                        
                        
                        
                            <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Services/Features </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                             <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                             
                                             <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                              <?php
											  
											 // car_feature_edit  car_termsconditions_edit 
											
																		 
											   foreach($dropdown_car_feature as $val) { ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													//'checked'     => TRUE,
													
                                                     
											 if(in_array($val['FeatureId'],$car_feature_edit))  
											      {
											        $data = array('name' => 'FeatureId[]', 'id' => 'inclusion', 'value' => $val['FeatureId'],'checked' => TRUE);
												  }
												else
												  {
												      $data = array('name' => 'FeatureId[]', 'id' => 'inclusion', 'value' => $val['FeatureId']);
												  }   
														 
                                                     echo form_checkbox($data);
													 echo $val['FeatureName']; ?></div>
                                               
                                                <?php } ?>    
                                                 
                                                
                                             </div>
                                 
                                            </div>
                                     <p>&nbsp;</p>
                                      </div>
		                		  </div>
                               



                 <div class="col-md-12 padding_opx">
                          <label class="col-md-2 text-left padding_opx">
                            <span> Terms & conditions </span></label>
                             <div class="col-md-5 form-group padding_opx">
                                             <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                             
                                             <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                              <?php
                      
                                     
                         foreach($dropdown_car_termsconditions as $val) { ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
                          //'checked'     => TRUE,
                          
                                                     
                       if(in_array($val['TermsconditionID'],$car_termsconditions_edit))  
                            {
                              $data = array('name' => 'TermsconditionID[]', 'id' => 'inclusion', 'value' => $val['TermsconditionID'],'checked' => TRUE);
                          }
                        else
                          {
                              $data = array('name' => 'TermsconditionID[]', 'id' => 'inclusion', 'value' => $val['TermsconditionID']);
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
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Smaller Image (585 X 383) </span></label>
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
		                				<span> Current Image (585 X 383)  </span></label>
		                			      <div class="col-md-5 form-group padding_opx">
                                    
								             <?php
											  if($edit_cardetails[0]['SmallImage']!='') { ?>
                                               <img src="<?php echo base_url('uploads/car/'.$edit_cardetails[0]['SmallImage']) ?>"  class="margin_bottom"  width="200px"> <br>
											  <?php } else { ?>
                                               Image does not exist
                                              <?php } ?>
                                     </div>
		                		  </div>
                                   
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Bigger Image (900 X 410) </span></label>
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
		                				<span> Current Image (900 X 410)  </span></label>
		                			      <div class="col-md-5 form-group padding_opx">
                                    
								             <?php
											  if($edit_cardetails[0]['BigImage']!='') { ?>
                                               <img src="<?php echo base_url('uploads/car/'.$edit_cardetails[0]['BigImage']) ?>"  class="margin_bottom"  width="200px"> <br>
											  <?php } else { ?>
                                               Image does not exist
                                              <?php } ?>
                                     </div>
		                		  </div>
                                        
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Interior Image-1 (900 X 410) </span></label>
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
		                				<span> Current Image (900 X 410)  </span></label>
		                			      <div class="col-md-5 form-group padding_opx">
                                    
								             <?php
											  if($edit_cardetails[0]['InteriorImage1']!='') { ?>
                                               <img src="<?php echo base_url('uploads/car/'.$edit_cardetails[0]['InteriorImage1']) ?>"  class="margin_bottom"  width="200px"> <br>
											  <?php } else { ?>
                                               Image does not exist
                                              <?php } ?>
                                     </div>
		                		  </div>
                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Interior Image-2 (900 X 410) </span></label>
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
		                				<span> Current Image (900 X 410) </span></label>
		                			      <div class="col-md-5 form-group padding_opx">
                                    
								             <?php
											  if($edit_cardetails[0]['InteriorImage2']!='') { ?>
                                               <img src="<?php echo base_url('uploads/car/'.$edit_cardetails[0]['InteriorImage2']) ?>"  class="margin_bottom"  width="200px"> <br>
											  <?php } else { ?>
                                               Image does not exist
                                              <?php } ?>
                                     </div>
		                		  </div>
                                  
                                  
                                  
                                  
                                    <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>You Tube Link  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                      
                                       <?php
									 
               $data = array('name'  => 'YouTubeLink', 'id' => 'YouTubeLink', 'value'=>$edit_cardetails[0]['YouTubeLink'], 'placeholder' => '', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>  
                                
                                          
                              
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Current Video  </span></label>
		                			      <div class="col-md-5 form-group padding_opx">
                          
                          <?php if($edit_cardetails[0]['YouTubeLink']!='') { ?>                   
                               <iframe width="100%" height="415" src="<?php echo $edit_cardetails[0]['YouTubeLink'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<?php } else { ?>	  
                               Video does not exist
                            <?php } ?>          
                                     </div>
		                		  </div>
                                
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Total Cars Available  *</span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TotalUinit'); ?></span>
                                       <?php
									 
               $data = array('name'  => 'TotalUinit', 'id' => 'TotalUinit', 'value'=>$edit_cardetails[0]['TotalUinit'], 'placeholder' => '', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>            
                              
                           <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Meta Ttle </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                      
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'meta_title', 'id' => 'meta_title', 'value'=>$edit_cardetails[0]['meta_title']  , 'placeholder' => '', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Meta Description: </label>
		                			<div class="col-md-5 form-group padding_opx">
                 
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
           $data = array('name'  => 'meta_description', 'id' => 'meta_description', 'value'=>$edit_cardetails[0]['meta_description'] ,  'placeholder' => ' ', 'class'=>"form-control margin_bottom");
            echo form_input($data);
                                    ?>
		                		  </div>
                               </div>   
                               
                               
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Meta Keyword: </label>
		                			<div class="col-md-5 form-group padding_opx">
                          
                                    <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'meta_keyword', 'id' => 'meta_keyword', 'value'=>$edit_cardetails[0]['meta_keyword']  ,  'placeholder' => '', 'class'=>"form-control margin_bottom");
                                         echo form_input($data);
                                    ?>
		                		  </div>
                               </div>   
                                     
                                
                    
                              
                               
                               
                                
                           <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Sort Order </span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                      
                                       <?php
								
                                            $data = array('name'  => 'SortOrder', 'id' => 'SortOrder', 'value'=>$edit_cardetails[0]['SortOrder']  , 'placeholder' => '', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
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
										//-------------------------------------------------------------------------------------------------------------------
										$data = array('id'  => $edit_cardetails[0]['CarId'] );
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