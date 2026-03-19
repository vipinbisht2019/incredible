<!doctype html>
<html lang="en">
<head>
<title>Buses Fare Add</title>
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



function open_popup(url){
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Buses Fare Add</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/busesroutesdetails/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('busesroutfare')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                          
							
							          // ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/busesroutfare/add', $attributes);
							     ?>

		                

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span><b>Ticket Type Adult - fare</b></span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        
                                        <p>&nbsp;</p>
                                      </div>
		                		  </div>
                                  
                                  
                                   <div class="col-md-12 padding_opx top-margin">
		                			  <?php									
									     // echo"<pre>";
										      // print_r($route_cities_column); FareDiscount
										  // echo"</pre>";
                                       ?>
                       <table class="table table-bordered">
                                       	  

                                       	
                       <?php
					             //------------ Fare type adult =1 child=2 ----------------------
					                    $data = array('FareTypeId'  => 1);
                                        echo form_hidden($data);
					             //--------------- Bus Route ID -------------------------------------
					                    $data = array('RoutesId'  => $route_cities_column[0]['RoutesId']);
                                        echo form_hidden($data);
								//--------------- Bus Type ID -------------------------------------
										$data = array('BusesRoutsId'  => $route_cities_column[0]['BusesRoutsId']);
                                        echo form_hidden($data);
					   
					           $k=0;
					    for($i=0;$i<count($route_cities_rows);$i++) { ?>  
                                       	   	  <tr>
                                              
                                                <?php if($i>0) { ?>
                                       	   	  	   <td><?php echo $route_cities_rows[$k]['CityName'] ?></td>
                                       	   	  	<?php $k++; } else { ?>
                                                   <td>&nbsp;</td>
												<?php 
												   }
											     for($j=1;$j<count($route_cities_column);$j++) 
											        {
													   if($i==0)
													     {
												        ?>        
                                                          <td><?php echo $route_cities_column[$j]['CityName'] ?></td>
                                       	   	             <?php 
														 }
														else
														 {
														     $from_city_id=$route_cities_rows[$k-1]['CityId'];  $from_time_id= $route_cities_rows[$k-1]['TimeId']; 
															 $to_city_id=$route_cities_column[$j]['CityId'];    $to_time_id=$route_cities_column[$j]['TimeId'];
															 
														    if($from_city_id!=$to_city_id && $to_time_id > $from_time_id)
															  {
																	//--------------- From City Id-------------------------------------
																	$data = array("FromCityId[$k][$j]"  => $from_city_id);
																	echo form_hidden($data);
																	//--------------- To City Id-------------------------------------
																	$data = array("ToCityId[$k][$j]"  => $to_city_id);
																	echo form_hidden($data);
																	
																	
														   ?>
                                                                   
                                                              <td> 
                           <?php                                   
                                $data = array('name'  => "TotalFare[$k][$j]", 'id' => 'GSTNo',  'value' =>'', 'placeholder' => 'Seat Fare In INR', 'class'=>"form-control margin_bottom");
                                echo form_input($data);
								
								?><br>
                                
                                    <?php                                   
                                $data = array('name'  => "TotalSleeperFare[$k][$j]", 'id' => 'TotalSleeperFare',  'value' =>'', 'placeholder' => 'Sleeper Fare In INR', 'class'=>"form-control margin_bottom");
                                echo form_input($data);
								
								?>
                                                                
                                                                </td>
                                       	   	             
                                                           <?php
														     }
															else
															 {
															    echo"<td>&nbsp;</td>"; 
															 } 
														 } 
												    } 
													?>	
                                       	   	  </tr>
                              <?php } ?>
                                       	   	  <!--<tr>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  </tr>
                                       	   	  <tr>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  	 <td>Two</td>
                                       	   	  </tr>-->
                                       	  
                                       </table>
                                      
                                      
                                      
		                		   </div>
                                
                               <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Back Seat Discount( In %)  </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                     
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'FareDiscount', 'id' => 'FareDiscount', 'value' =>set_value('FareDiscount'),  'placeholder' => 'Fare Discount For Back Seats', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
		                		</div>
                                
                                <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Please Enter Seat No. </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                     
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'SeatNo_Discount', 'id' => 'SeatNo_Discount', 'value' =>set_value('SeatNo_Discount'),  'placeholder' => 'Please Enter Seat Number Comma (,) Seperated ', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                        <br>
                                        <i  style="color:#FF0000">Please Enter Seat Number Comma (,) Seperated </i>
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