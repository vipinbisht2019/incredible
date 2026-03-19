<!doctype html>
<html lang="en">
<head>
<title>Tours Itinerary Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tours Transfer Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/tour_generalinfo/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">
                
                 <div class="col-md-12 col-xs-12" style="margin-top: 23px;">
                 
                   <div class="panel panel-default text-center">
                    <div class="panel-heading" style="padding-top: 8px; padding-bottom: 0px;">
                
                    <p>	Create Tour Package in 8 simple steps! </p>
                
                    </div>
                 
                    
                  </div>
                    
                    <div class="stepwizard">
                      <div class="stepwizard-row">
                    <div class="stepwizard-step col-md-1">
                        <a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">1</button></a>
                        <p>General<br> Info</p>
                    </div>
            
                    <div class="stepwizard-step col-md-1">
                     <a href="<?php echo base_url('admin/tour_pricedestination/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >2</button></a>
                        <p>Destination Info</p>
                    </div>
            
                    <div class="stepwizard-step col-md-1">
                   <a href="<?php echo base_url('admin/tour_inclusionexclusion/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >3</button></a>
                        <p>Inclusion<br>Exclusion</p>
                    </div>
            
                    <div class="stepwizard-step col-md-1">
                   <a href="<?php echo base_url('admin/tour_itinerary/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >4</button></a>
                        <p>Itinerary</p>
                    </div>
                    
                      <div class="stepwizard-step col-md-1">
                 <a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >5</button></a>
                        <p>Hotel</p>
                    </div>
                    
                    <div class="stepwizard-step col-md-1">
                    <a href="<?php echo base_url('admin/tour_sightseeing/edit?TourId='.$TourId); ?>"> <button type="button" class="btn btn-primary btn-circle" >6</button></a>
                        <p>Sightseeings</p>
                    </div>
                    
                    <div class="stepwizard-step col-md-1">
                  <a href="<?php echo base_url('admin/tour_transfers/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">7</button></a>
                        <p>Transfers</p>
                    </div>
                    
        <div class="stepwizard-step col-md-1">
          <a href="<?php echo base_url('admin/tour_flight/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle">8</button></a>
                <p>Flight</p>
            </div>
            
                <div class="stepwizard-step col-md-1">
          <a href="<?php echo base_url('admin/tour_train/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle">9</button></a>
                <p>Train</p>
            </div>
            
               <div class="stepwizard-step col-md-1">
              <a href="<?php echo base_url('admin/tour_bus/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle">10</button></a>
                <p>Bus</p>
            </div>
            
          <div class="stepwizard-step col-md-1">
          <a href="<?php echo base_url('admin/tour_costing/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle">11</button></a>
                <p>Costing</p>
            </div>
            
                       <div class="stepwizard-step col-md-1">
                 <a href="<?php echo base_url('admin/tour_termscondition/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >12</button></a>
                        <p>Term <br>Conditions</p>
                      </div> 
                </div>
                </div>
                    
                </div>

<!-- Html ##################################################### -->
           <div class="col-md-12 col-xs-12 margin_top">
<?php
					// echo"<pre>";
					  // print_r($transfer_detail);
					// echo"</pre>";
 // ------------------------------ admin form open ---------------------------------
			$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
			echo form_open_multipart('admin/tour_transfers/edit', $attributes);
							
			  //$NoofDay=$tour_no_day[0]['NoofDay'];
			  $i=0;
			  foreach($itinerary_day as $val)
						  {		
							     ?>

		                

		                		 <div class="col-md-12 padding_opx">
		                			
		                			   <div class="col-md-12 form-group padding_opx">
                                          <div class="panel panel-default">
                                             <div class="panel-heading" style="padding-top: 5px;">Day <?php echo $day=$val['ItenaryDay']; ?> : <?php echo $val['city_id']; ?>/<?php echo $val['category_id']; ?>   </div>
                                                <div class="panel-body">
                                            
                             
                                          <!-- *************************************************Hotel***************************************************** -->    
                                          <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span>Transfer Title</span></label>
                                                              <div class="col-md-5 form-group padding_opx">
																   <?php
		        $data = array('name' => 'TransferName[]', 'id' => 'TransferName', 'value'=>$transfer_detail[$i]['TransferName'], 'placeholder' => 'Transfer Title', 'class'=>"form-control margin_bottom");
                                                                  echo form_input($data);
                                        ?>	
                                       
                                                              </div>
                                                       </div> 
                                                     <!-- *************************************************Hotel***************************************************** -->    
                                          <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> Image  </span></label>
                                                              <div class="col-md-5 form-group padding_opx">
																 
                                                                  <?php
                                                                        $data = array('name'  => "SmallImage[]",  'class'=>"form-control margin_bottom");
                                                                        echo form_upload($data);
                                                                  ?>	
                                            
                                       
                                                              </div>
                                                       </div>  
                                                       
                                                       
                                         
                                <div class="col-md-12 padding_opx" style="margin-bottom: 10px;">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Current Image</span></label>
		                			    <div class="col-md-5 form-group padding_opx">
                                    
								            <?php
											  if($transfer_detail[$i]['Images']!='') { ?>
                                               <img src="<?php echo base_url('uploads/tourimage/'.$transfer_detail[$i]['Images']) ?>" width="200px"> <br>
											  <?php } else { ?>
                                               Image does not exist
                                              <?php }
											  
											  
											  $data = array("Images[]"  => $transfer_detail[$i]['Images']);
									          echo form_hidden($data);
											  
											   ?>
                                      
                                      </div>
		                		  </div>                                               
                                                       
                                        <!-- *********************************************Hotel********************************************************* -->        
                                           <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> Description </span></label>
                                                              <div class="col-md-5 form-group padding_opx">
                                                              <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'Description[]', 'id' => 'Description', 'value'=>$transfer_detail[0]['Description'],    'placeholder' => 'Description ', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
                                       
                                                              </div>
                                                       </div>             
                                                       
                                        
                             

                                             </div>
                                          </div>
                                      </div>
		                		  </div>
                                
                             <?php
							                    $data = array("ItenaryDay[]"  => $day);
										        echo form_hidden($data);
										 $i++;		
							        	
							             } 
							  ?>   
                                
                                  
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx"> 

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										
										$data = array('TourId'  => $TourId);
										echo form_hidden($data);
										
									//  echo $TourId;
                                        //-------------------------------------------------------------------------------------------------------------------			
                                        $data = array('name'  => 'smt_enter', 'value' => 'Save',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
										
										 $data = array('name'  => 'smt_enter_nxt', 'value' => 'Save & Next',   'class'=>"btn btn-primary");
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