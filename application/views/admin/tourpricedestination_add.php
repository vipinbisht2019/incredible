<!doctype html>
<html lang="en">
<head>
<title>Tours Price Destination Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#Description",
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
							<h3 class="panel-title title_h3"><b><i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Tours Price & Destination add/Edit </b></h3>
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

	<p>	Create Tour Package in 7 simple steps! </p>

	</div>
 
    
  </div>
	
    <div class="stepwizard">
      <div class="stepwizard-row">

        <div class="stepwizard-step col-md-1">
            <a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-primary btn-circle">1</button></a>
            <p>General <br> Info</p>
        </div>

        <div class="stepwizard-step col-md-1">
         <a href="<?php echo base_url('admin/tour_pricedestination/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">2</button></a>
            <p>Destination Info</p>
        </div>

        <div class="stepwizard-step col-md-1">
       <a href="<?php echo base_url('admin/tour_inclusionexclusion/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle">3</button></a>
            <p>Inclusion<br>Exclusion</p>
        </div>

        <div class="stepwizard-step col-md-1">
       <a href="<?php echo base_url('admin/tour_itinerary/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle" >4</button></a>
            <p>Itinerary</p>
        </div>
        
          <div class="stepwizard-step col-md-1">
     <a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle" >5</button></a>
            <p>Hotel</p>
        </div>
        
        <!--<div class="stepwizard-step col-md-1">
        <a href="<?php //echo base_url('admin/tour_sightseeing/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"> <button type="button" class="btn btn-default btn-circle">6</button></a>
            <p>Sightseeings</p>
        </div>
        
         <div class="stepwizard-step col-md-1">
             <a href="<?php //echo base_url('admin/tour_transfers/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle">7</button></a>
                <p>Transfers</p>
            </div>
            
           <div class="stepwizard-step col-md-1">
          <a href="<?php //echo base_url('admin/tour_flight/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle">8</button></a>
                <p>Flight</p>
            </div>
            
                <div class="stepwizard-step col-md-1">
          <a href="<?php //echo base_url('admin/tour_train/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle">9</button></a>
                <p>Train</p>
            </div>
            
               <div class="stepwizard-step col-md-1">
              <a href="<?php //echo base_url('admin/tour_bus/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle">10</button></a>
                <p>Bus</p>
            </div>
            
               <div class="stepwizard-step col-md-1">
          <a href="<?php //echo base_url('admin/tour_costing/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle">11</button></a>
                <p>Costing</p>
            </div>
     
           <div class="stepwizard-step col-md-1">
     <a href="<?php //echo base_url('admin/tour_termscondition/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button" class="btn btn-default btn-circle" >12</button></a>
            <p>Term <br>Conditions</p>
          </div> -->
           <div class="stepwizard-step col-md-1">
        	<a href="<?php echo base_url('admin/tour_infodetail/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button"  class="btn btn-default btn-circle">6</button></a>
                <p>Tour Info Detail</p>
         </div>
          <div class="stepwizard-step col-md-1">
        	<a href="<?php echo base_url('admin/Tour_quotedetial/edit?TourId='.$edit_pricedestination[0]['TourId']); ?>"><button type="button"  class="btn btn-default btn-circle">7</button></a>
                <p>Tour Quotes Detail</p>
         </div>
    </div>
</div>
	
</div>

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
						 <?php
                              // ------------------------------ admin form open ---------------------------------
                                $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
                                echo form_open_multipart('admin/tour_pricedestination/edit', $attributes);
								
								//echo"<pre>";
							//print_r($edit_pricedestination);
                           // echo"</pre>";
                         ?>

                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Regions * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('RId'); ?></span>
                                       <?php
									             unset($options);									
									             $options['']='Select Regions';
												 foreach($tour_resion_dropdown as $val)
										          {
												     $options[$val['RId']] = $val['RegionsName'];
											      }	
											//-----------------------------------------------------------------------------------------------
											    $selected=$edit_pricedestination[0]['RId'];							
											    echo form_dropdown('RId', $options, $selected,'class="form-control margin_bottom"');
                                     ?>
                                 
                                      </div>
		                		</div>
                                
                                
                                <?php /*?> <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Location * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('locationsId'); ?></span>
                                       <?php
									        unset($options);									
									        $options['']='Select Locations';

										    foreach($tour_location_dropdown as $val)
										       {
												   $options[$val['locationsId']] = $val['locationsName'];
											   }	
												
											$selected=$edit_pricedestination[0]['locationsId'];							
											echo form_dropdown('locationsId', $options, $selected,'class="form-control margin_bottom"');
                                     ?>
                                     
                                     
                                 
                                      </div>
		                		</div><?php
								
								          echo"<pre>"; 
											     print_r($tours_location);
											   echo"</pre>";   */
								
								?>
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Location</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                             <div style="height:250px;width:700px;overflow:scroll;border:1px solid #7F9DB9;">
                                             
                                             <div class="col-md-12 padding_opx"  style="margin-left:5px;">
                                              <?php
										         $i=0;
											   foreach($tours_location as $loc_val)
											     {
												   
												   $locationsId[$i]=$loc_val['locationsId'];
												   
												   $i++;
												 }
											
											 
											   foreach($tour_location_dropdown as $val) { 
											   	
												//print_r($val);
											   
											   ?>
                                                    <div class="col-md-6 form-group padding_opx" style="margin-top:10px; ">
                                     <?php
										
                                                     
											 if(in_array($val['locationsId'],$locationsId))  
											      {
											        $data = array('name' => 'locationsId[]', 'id' => 'locationsId', 'value' => $val['locationsId'],'checked' => TRUE);
												  }
												else
												  {
												      $data = array('name' => 'locationsId[]', 'id' => 'locationsId', 'value' => $val['locationsId']);
												  }   
														 
                                                     echo form_checkbox($data);
													 echo $val['locationsName']; ?></div>
                                               
                                                <?php } ?>    
                                                 
                                                
                                             </div>
                                 
                                            </div>
                                            <p>&nbsp;</p>
                                  
                                      </div>
		                		  </div>
                            
                           
                
                  <!-- ************************************ Price Time ****************************************** -->     
                            
                                 <div class="col-md-12 padding_opx ">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Price Type * </span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('PriceType'); ?></span>
                                       <?php
										$options = array
											(
										    	'4' => 'Per Person',
											    '3' => 'Per Package',
											
											);
												
											$selected=$edit_pricedestination[0]['PriceType'];							
											echo form_dropdown('PriceType', $options, $selected,'class="form-control margin_bottom"');
                                     ?>
                                 
                                      </div>
		                		</div>
                                  
                <!-- ************************************ Price for multple days toures  ****************************************** -->   
                <!-- ************************************ Price for multple days toures  ****************************************** -->                
                <!-- ************************************ Departure Time ****************************************** -->    
                                 <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Departure Time *</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('DepartureTime'); ?></span>
                                       <?php
               $data = array('name'  => 'DepartureTime', 'id' => 'DepartureTime', 'value'=>$edit_pricedestination[0]['DepartureTime'], 'placeholder' => 'Departure Time', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>  
                           <!-- ************************************ Arrival Time ****************************************** -->    
                                 <div class="col-md-12 padding_opx ">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Arrival Time *</span></label>
		                			   <div class="col-md-3 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('ArrivalTime'); ?></span>
                                       <?php
									     
               $data = array('name'  => 'ArrivalTime', 'id' => 'ArrivalTime', 'value'=>$edit_pricedestination[0]['ArrivalTime'], 'placeholder' => 'Arrival Time', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>          
                                    
                             
                             <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                			   <span> Frequency   </span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                          
                                               <?php
														if($edit_pricedestination[0]['TourFrequencyId']==1)
														echo"Daily";
														if($edit_pricedestination[0]['TourFrequencyId']==2)
														echo"Weekly";
														if($edit_pricedestination[0]['TourFrequencyId']==3)
														echo"Monthly"  ;
														
														$data = array('TourFrequencyId'  => $edit_pricedestination[0]['TourFrequencyId']);
														echo form_hidden($data);
									            ?>
                                       </div>
                                 </div>       
                                      
                   <?php
						
				    if($edit_pricedestination[0]['TourFrequencyId']==1 || $edit_pricedestination[0]['TourFrequencyId']==2)
						   {
							 ?>      
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                			   <span></span></label>
                                   
		                			                  <div class="col-md-1 form-group padding_opx">
															 <?php
															
															if($edit_pricedestination[0]['day1']==1)
															  { $data = array('name' => 'day1','checked'=>true, 'id'=> 'IsView', 'value'       => 1); }
															 else
															  { $data = array('name' => 'day1', 'id'=> 'IsView', 'value'       => 1); }  
                                                                echo form_checkbox($data);
                                                             ?>
                                                             Monday
                                                       </div>
                                                       
                                                        <div class="col-md-1 form-group padding_opx">
                                                         <?php 
														 if($edit_pricedestination[0]['day2']==2)
															  { $data = array('name'        => 'day2', 'checked'=>true,  'id'=> 'day2', 'value' => 2); }
													        else
															  { $data = array('name' => 'day2', 'id'=> 'day2', 'value' => 2); }  		  
                                                                echo form_checkbox($data);
                                                             ?>
                                                             Tuesday
                                                       </div>
                                                       
                                                        <div class="col-md-2 form-group padding_opx">
                                                              <?php 
															  if($edit_pricedestination[0]['day3']==3)
															  { $data = array('name'        => 'day3', 'checked'=>true,  'id'=> 'day3', 'value' => 3); }
													        else
															  {	$data = array('name'        => 'day3', 'id'=> 'IsView', 'value'       => 3); }
                                                                echo form_checkbox($data);
                                                             ?>
                                                             Wednesday
                                                       </div>
                                                       
                                                        <div class="col-md-1 form-group padding_opx">
                                                          <?php
												
															  if($edit_pricedestination[0]['day4']==4)
															  { $data = array('name'  => 'day4', 'checked'=>true,  'id'=> 'day4', 'value' => 4); }
													         else
															  { $data = array('name' => 'day4', 'id'=> 'IsView', 'value' => 4); }
                                                                echo form_checkbox($data);
                                                             ?>
                                                             Thursday
                                                       </div>
                                                       
                                                       <div class="col-md-1 form-group padding_opx">
                                                       <?php 
													     if($edit_pricedestination[0]['day5']==5)
															  { $data = array('name'        => 'day5', 'checked'=>true,  'id'=> 'IsView', 'value'       => 5); }
															else
															  { $data = array('name'        => 'day5', 'id'=> 'IsView', 'value'       => 5);}  
                                                                echo form_checkbox($data);
                                                             ?>
                                                             Friday
                                                       </div>
                                                       
                                                        <div class="col-md-2 form-group padding_opx">
                                                           <?php 
														       if($edit_pricedestination[0]['day6']==6)
															     { $data = array('name'        => 'day6', 'checked'=>true,  'id' => 'IsView', 'value'=> 6); }
																else
																  { $data = array('name'        => 'day6', 'id' => 'IsView', 'value'       => 6); }
                                                                echo form_checkbox($data);
                                                             ?>
                                                             Saturday
                                                       </div>
                                                       
                                                        <div class="col-md-1 form-group padding_opx">
                                                            <?php 
															 if($edit_pricedestination[0]['day7']==7)
															     { $data = array('name'        => 'day7','checked'=>true,  'id' => 'IsView', 'value'       => 7); }
																else
																 { $data = array('name'        => 'day7', 'id' => 'IsView', 'value'       => 7); } 
                                                                echo form_checkbox($data);
                                                             ?>
                                                             Sunday
                                                       </div>
                                                  
                                      </div>   
                            <?php  }
							 if($edit_pricedestination[0]['TourFrequencyId']==3)
							   {
							     ?>   
                                 
                                  <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Month Date </span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        
                                       <?php
									   $edit_pricedestination[0]['StartDate'];
               $data = array('name'  => 'MonthDate', 'id' => 'datepicker5', 'value'=>'', 'placeholder' => 'Month Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                              
                              
                               <?php } ?> 
                          
                                
                                
                              <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Tour Date <br>( <i><small>Start/End Date</small></i> )*</span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('StartDate'); ?></span>
                                       <?php
									
									   	$startDateArr=explode("-",$edit_pricedestination[0]['StartDate']); 
						                $startDateStr=$startDateArr['2']."-".$startDateArr['1']."-".$startDateArr['0'];
										
               $data = array('name'  => 'StartDate', 'id' => 'datepicker1', 'value'=>$startDateStr, 'placeholder' => 'Start Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
                                      
                                      
                                      
                                      <div class="col-md-2 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('EndDate'); ?></span>
                                       <?php
								
									  $EndDateArr=explode("-",$edit_pricedestination[0]['EndDate']);    
					    	$EndDateArrStr=$EndDateArr['2']."-".$EndDateArr['1']."-".$EndDateArr['0'];
									  
               $data = array('name'  => 'EndDate', 'id' => 'datepicker2', 'value'=>$EndDateArrStr, 'placeholder' => 'End Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>  
                                  
                                  
                                 <div class="col-md-12 padding_opx margin_top">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Tour Seasonal Time   <br> ( <i><small>Start/End Date</small></i> )</span></label>
		                			   <div class="col-md-2 form-group padding_opx">
                                       
                                       <?php
									   
									  
									   $SeasonalStartDateArr=explode("-",$edit_pricedestination[0]['SeasonalStartDate']);
						  $SeasonalStartDateStr=$SeasonalStartDateArr['2']."-".$SeasonalStartDateArr['1']."-".$SeasonalStartDateArr['0'];
									   
		               $data = array('name'  => 'SeasonalStartDate', 'id' => 'datepicker3', 'value'=>$SeasonalStartDateStr, 'placeholder' => 'Season Star tDate', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?> 
                                      </div>
                                      
                                      <div class="col-md-2 form-group padding_opx">
                                 
                                       <?php
									
									  $SeasonalEndDateArr=explode("-",$edit_pricedestination[0]['SeasonalEndDate']);
						             $SeasonalEndDateStr=$SeasonalEndDateArr['2']."-".$SeasonalEndDateArr['1']."-".$SeasonalEndDateArr['0'];
									  
			 $data = array('name'  => 'SeasonalEndDate', 'id' => 'datepicker4', 'value'=>$SeasonalEndDateStr, 'placeholder' => 'Season End Date', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?> 
                                      </div>
                                      
		                		  </div>    
                                  
                           
                                  
                                <?php /*?> <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Country</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('DestinationCountry'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'DestinationCountry', 'id' => 'DestinationCountry', 'value'=>$edit_pricedestination[0]['DestinationCountry'], 'placeholder' => 'Country', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>   
                                  
                                   
                                 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>City</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('DestinationCity'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
               $data = array('name'  => 'DestinationCity', 'id' => 'DestinationCity', 'value'=>$edit_pricedestination[0]['DestinationCity'], 'placeholder' => 'City', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>  <?php */?>
                                  
                                   
                                
                                
                    
                               <div class="col-md-12 padding_opx margin_top">
                                 <label class="col-md-2 text-left padding_opx"></label>
                                  <div class="col-md-5 form-group padding_opx">

									<?php
                                            
                                        $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
										//-------------------------------------------------------------------------------------------------------------------
										$data = array('TourId'  => $edit_pricedestination[0]['TourId'] );
										echo form_hidden($data);
										//---------------------------------------------------------------------------------------------------------------------
										$data = array('TourType'  => $TourType);
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

<!--Html ################################################## Malik@2015  -->
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
</script>


        
	
	

</body>
</html>