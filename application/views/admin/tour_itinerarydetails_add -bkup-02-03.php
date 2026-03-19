<!doctype html>
<html lang="en">
<head>
<title>Tour Itinerary Details Add</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ; ?>
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

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Tour Itinerary Details Add</b></h3>
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
                        <p>Operational Itinerary</p>
                    </div>
                    
                    <div class="stepwizard-step col-md-1">
                   		<a href="<?php echo base_url('admin/tour_itinerary/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">3</button></a>
                        <p>Itinerary Detail</p>
                    </div>
                    
                    <div class="stepwizard-step col-md-1">
                   		<a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >4</button></a>
                        <p>Hotel</p>
                    </div>
                    
                    <div class="stepwizard-step col-md-1">
                        <a href="<?php echo base_url('admin/tour_transport/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >5</button></a>
                        <p>Transport</p>
                    </div>
                                            
                   <div class="stepwizard-step col-md-1">
                        <a href="<?php echo base_url('admin/tour_driverhotel/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >6</button></a>
                        <p>Driver Hotel</p>
                    </div>
                    <div class="stepwizard-step col-md-1">
       					<a href="<?php echo base_url('admin/tour_sightseeing/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >7</button></a>
                        <p>Sight Seeing</p>
               		</div>
                    <div class="stepwizard-step col-md-1">
                        <a href="<?php echo base_url('admin/tour_meals/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >8</button></a>
                            <p>Meals</p>
                    </div> 
                                            
                    <div class="stepwizard-step col-md-1">
                        <a href="<?php echo base_url('admin/tour_totalcost/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >9</button></a>
                            <p>Total Cost </p>
                    </div> 
                                            
                    <div class="stepwizard-step col-md-1">
                        <a href="<?php echo base_url('admin/tour_inclusionexclusion/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle">10</button></a>
                        <p>Inclusion<br>Exclusion</p>
                    </div>
                                                
                                              
                                            
                                           
</div>
            
        </div>
		<div class="col-md-12 col-xs-12 margin_top">
			<?php
 
				$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
				echo form_open_multipart('admin/Tour_itinerarydetails/edit', $attributes);
			
			 	$NoofDay = $tour_no_day[0]['Days'];
				
				$startDate = $tour_no_day[0]['TourStartDate'];
				
			  	$endDate = $tour_no_day[0]['TourEndDate'];
				
			
				$from_date = new DateTime($startDate);
				$to_date = new DateTime($endDate);
				
				$i=0;
					foreach($getDates as $key => $dateValue){		
					
              ?>
              <div class="col-md-12 padding_opx">
                <div class="col-md-12 form-group padding_opx">
                  <div class="panel panel-default">
                    <div class="row" style="background:#f5f5f5; margin-left:0px ; margin-right:0 px; width:100%">
                      <div class="col-md-4">
                        <div class="panel-heading" style="padding-top: 5px;">Day <?php echo $day=$i+1; ?></div>
                      </div>
                     <div class="col-md-4">DOW - <?php echo date("l", strtotime($dateValue));?></div>
                      <div class="col-md-4">Date - <?php echo date('d-M-Y',strtotime($dateValue)); ?></div>
                    </div>
                    <div class="panel-body">
                      <div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                      	<div class="row">
                        	<div class="form-group col-md-12 col-xs-12" style="margin-bottom: 10px;">
                                <label class="col-md-2 text-left padding_opx">
                                	<span>Location</span>
                                </label>
                                <div class="col-md-5 form-group padding_opx"><?php  echo "Los Angeles"; ?></div> 
                           	</div>
                            <div class="col-md-2 form-group padding_2px">
                              	 <?php 
										  $data = array('name'  => 'Time[]', 'id' => 'Time', 'type' => 'time' ,'value'=>$itinerary_details[$i]['Time'], 'placeholder' => 'Time', 'class'=>"form-control margin_bottom");
										  echo form_input($data);
								?>
                            </div>
                          
                             <div class="col-md-2 form-group padding_2px">
                              	
                                <select name="sightSeeing[]" id="sightSeeing">
                                    	<option value="">Select SightSeeing</option>
                                        <?php foreach($sightseeinglist as $key => $sightseeingValue){ ?>
                                        <option value="<?php  echo $sightseeingValue['title']; ?>" <?php if($itinerary_details[$i]['sightSeeing'] == $sightseeingValue['title']){echo "selected";}?>><?php  echo $sightseeingValue['title']; ?></option>
                                      <?php } ?>
                                    	
                                  </select>
                            </div>
                             <div class="col-md-2 form-group padding_2px">
                              	
                                
                                  <select name="meal[]" id="meal">
                                    	<option value="">Select Meal</option>
                                        <option value="B" <?php if($itinerary_details[$i]['meal'] == 'B'){echo "selected";}?>>Breakfast</option>
                                        <option value="L" <?php if($itinerary_details[$i]['meal'] == 'L'){echo "selected";}?>>Lunch</option>
                                        <option value="D" <?php if($itinerary_details[$i]['meal'] == 'D'){echo "selected";}?>>Dinner</option>
                                    	
                                  </select>
                            </div>
                            <div class="col-md-2 form-group padding_2px">
                              	 <?php
										  $data = array('name'  => 'Description[]', 'id' => 'Description', 'value'=>$itinerary_details[$i]['Description'], 'placeholder' => 'Description', 'class'=>"form-control margin_bottom");
										  echo form_input($data);
								?>
                            </div>
                            <div class="col-md-1 form-group padding_0px">
                              <buton id="myBtn">
                                <a href="javascript:void(0)" onClick="addSightSeeing(<?php echo $i; ?>);" class="btn btn-success addMoreDept"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                              </buton>
                            </div>
                           
                        </div>     
                         <div class="sight<?php echo $i;?>">
                            </div>
                      </div>
                      
                       <script>
							
							function addSightSeeing(id){
								 
								 var wrapper = $(".sight"+id);
												
									$(wrapper).append('<div><input type="time" name="Time[]" placeholder="Time"/><select name="sightSeeing[]" id="sightSeeing"><option value="">Select SightSeeing</option><?php foreach($sightseeinglist as $key => $sightseeingValue){?><option value="<?php  echo $sightseeingValue['title']; ?>" <?php if($itinerary_details[$i]['sightSeeing'] == $sightseeingValue['title']){echo "selected";}?>><?php  echo $sightseeingValue['title']; ?></option><?php } ?></select><select name="meal[]" id="meal"><option value="">Select Meal</option><option value="B">Breakfast</option><option value="L">Lunch</option><option value="D">Dinner</option></select><input type="text" name="Description[]" placeholder="Description"/><input type="hidden" name="ItenaryDay[]" value ="<?php echo $itinerary_details[$i]['ItenaryDay']; ?>"><a href="#" class="delete">Delete</a></div>');
									
									$(wrapper).on("click",".delete", function(e){
										e.preventDefault(); $(this).parent('div').remove(); x--;
									})
								 
							}
						</script>
                           
              </div>
          </div>
                                  
                                  
                                
                             <?php
							        	$data = array("ItenaryDay[$i]"  => $day);
										echo form_hidden($data);
							 $i++; } ?>   
                                
                                  
                    
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
		function getState(id){
			
			var countryId= document.getElementById("countryid"+id).value;
			 jQuery.ajax
				({
				  type: "POST",
				  url: "<?php echo base_url();?>admin/tour_itinerary/getStateList",
				  data: { "countryId": countryId },
				  success: function (data) {
					$('#stateid'+id).html(data);
					
				  }
				});
		
		}
		function getCity(id){
			
			var stateid= document.getElementById("stateid"+id).value;
			 jQuery.ajax
				({
				  type: "POST",
				  url: "<?php echo base_url();?>admin/tour_itinerary/getCityList",
				  data: { "stateid": stateid },
				  success: function (data) {
					$('#cityid'+id).html(data);
					
				  }
				});
		
		}
		
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">   
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	
		function getStayDays(){
		
			
			var startDate = document.getElementById("StartDate").value;		
			var endDate = document.getElementById("EndDate").value;
			
			var date1 = new Date(startDate);
			var date2 = new Date(endDate);
			var timeDiff = Math.abs(date2.getTime() - date1.getTime());
			var numberOfNights = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
			
			
			$('#stay_days').text(numberOfNights);
		
		}
	
	</script>

  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>