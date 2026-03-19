<!doctype html>
<html lang="en">
<head>
<title>Tour Inclusion / Exclusion Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php');  ?>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>  Tour Inclusion / Exclusion Add</b></h3>
						</div>

						    <!-- <div class="col-md-6 padding_opx">
								  <a href="<?php //echo base_url('admin/tour_generalinfo/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>-->
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
                                    <a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">1</button></a>
                                    <p>General Info ITI</p>
                                </div>                   
                                          
            
                                            <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_itinerary/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >2</button></a>
                                                <p>Short Itinerary</p>
                                            </div>
                    						
                                             <div class="stepwizard-step col-md-1">
                                                 <a href="<?php echo base_url('admin/tour_itinerarydetails/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">3</button></a>
                                                <p>Operational Itinerary Detail</p>
                                            </div>
                                            <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >4</button></a>
                                                <p>Hotel</p>
                                            </div>
                                            
                                            
                                              <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_transport/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >5</button></a>
                                                <p>Transport</p>
                                            </div>
                                            
                                              <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_driverhotel/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >6</button></a>
                                                <p>Driver Hotel</p>
                                            </div>
                                            
                                               <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_sightseeing/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >7</button></a>
                                                <p>Sight Seeing</p>
                                            </div>
                                            <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_meals/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >8</button></a>
                                                    <p>Meals</p>
                                            </div> 
                                            
                                             <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_totalcost/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >9</button></a>
                                                    <p>Total Cost </p>
                                            </div> 
                                            
                                            <div class="stepwizard-step col-md-1">
                                               <a href="<?php echo base_url('admin/tour_inclusionexclusion/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">10</button></a>
                                                    <p>Inclusion<br>Exclusion</p>
                                                </div>                                            
                                           
</div>
	
</div>

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                    <?php
                             // ------------------------------ admin form open ---------------------------------
                            $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
                            echo form_open_multipart('admin/tour_inclusionexclusion/edit', $attributes);
							
						/*	echo"<pre>";
							  print_r($edit_note);
							echo"</pre>";*/
                     ?>

		                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Tour Inclusion </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                             <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                             
                                             <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                              <?php
											
										         $i=0;
											   foreach($edit_inclusion as $in_val)
											     {
												   
												   $inclusion[$i]=$in_val['InclusionID'];
												   
												   $i++;
												 }
											
											 
											   foreach($inclusion_exclusion as $val) { ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													//'checked'     => TRUE,
													
                                                     
											 if(in_array($val['TourInclusionsId'],$inclusion))  
											      {
											        $data = array('name' => 'inclusion[]', 'id' => 'inclusion', 'value' => $val['TourInclusionsId'],'checked' => TRUE);
												  }
												else
												 {
												      $data = array('name' => 'inclusion[]', 'id' => 'inclusion', 'value' => $val['TourInclusionsId']);
												 }   
														 
                                                     echo form_checkbox($data);
													 echo $val['TourInclusionsName']; ?></div>
                                               
                                                <?php } ?>    
                                                 
                                                
                                             </div>
                                 
                                            </div>
                                            <p>&nbsp;</p>
                                  
                                      </div>
		                		  </div>
                                  
                                    <!-- *********************************************Note********************************************************* -->        
                                           <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> Inclusion Note (<small>If any</small>) </span></label>
                                                              <div class="col-md-9 form-group padding_opx">
                                                              <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'InclusionNote', 'id' => 'content1', 'value'=>$edit_note[0]['InclusionNote'],    'placeholder' => 'Inclusion Note ', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
                                       
                                                              </div>
                                                       </div>             
                                                       
                                
                                 <p>&nbsp;</p>
                                 <p>&nbsp;</p>
                                
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">Tour Exclusion </label>
		                			<div class="col-md-8 form-group padding_opx">
                                        
                                         <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                            <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                          <?php
										       	         $i=0;
											   foreach($edit_exclusion as $in_val)
											     {
												   
												   $exclusion[$i]=$in_val['ExclusionID'];
												   
												   $i++;
												 }
										  
											   foreach($inclusion_exclusion as $val) { ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                                    <?php
													//'checked'     => TRUE,
                                                     
											 if(in_array($val['TourInclusionsId'],$exclusion))  
											      {
											        $data = array('name' => 'exclusion[]', 'id' => 'exclusion', 'value' => $val['TourInclusionsId'],'checked' => TRUE);
												  }
												else
												 {
												      $data = array('name' => 'exclusion[]', 'id' => 'exclusion', 'value' => $val['TourInclusionsId']);
												 }   
														 
                                                     echo form_checkbox($data);
													 echo $val['TourInclusionsName']; ?></div>
                                               
                                                <?php } ?>    
                                             </div>
                                          
                                       </div>
                                    <p>&nbsp;</p>
		                		  </div>
                               </div>  
                               
                               
                                 <!-- *********************************************Note********************************************************* -->        
                                           <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                                          <label class="col-md-2 text-left padding_opx">
                                                            <span> Exclusion Note (<small>If any</small>) </span></label>
                                                              <div class="col-md-9 form-group padding_opx">
                                                              <?php
								     // ------------------------------ adm address no Password form open ---------------------------------
                                        $data = array('name'  => 'ExclusionNote', 'id' => 'content2', 'value'=>$edit_note[0]['ExclusionNote'],    'placeholder' => 'Exclusion Note ', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                                    ?>
                                       
                                                              </div>
                                                       </div>             
                               
                               
                               
                    
                               <div class="col-md-12 padding_opx">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										
											$data = array('TourId'  => $TourId);
										echo form_hidden($data);
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