<!doctype html>
<html lang="en">
  <head>
	<title>Tour Booking Details</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#answer",
	
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Booking Detail </b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/toursbooking/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>


			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">

                   	<!-- DB Tour Cancels Start ########################################-->

                  
                      


<div class="col-lg-12 col-xs-12">

  <div class="col-lg-6">

    <div class="panel panel-default">

       <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-bus"></i> Tours </h5> </div>

       <div class="panel-body">
         <h5 class="font_16px"> <?php echo $toursbooking_details[0]['TourName']; ?> </h5>

         <p class="font_16px"> <?php if($toursbooking_details[0]['NoofNight'] > 0) { echo $toursbooking_details[0]['NoofNight']." Night / "; } if($toursbooking_details[0]['NoofDay']>0) { echo $toursbooking_details[0]['NoofDay']." Day"; } ?>  <!-- Single Day tours --></p>

         <p class="font_16px"> <i class="fa fa-clock-o"></i> Departure Time : <?php echo $toursbooking_details[0]['DepartureTime']; ?>  &nbsp; <i class="fa fa-clock-o"></i> Arrival Time : <?php echo $toursbooking_details[0]['ArivalTime']; ?>    </p>

         <p class="font_16px"> Place Covered:   <?php echo $toursbooking_details[0]['TourTitle']; ?> </p>
          <p class="font_16px">&nbsp;</p>
       </div>
      
    </div>
  
  </div>

    <div class="col-lg-6">

    <div class="panel panel-default">

       <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-user-o"></i> Traveller infomation </h5> </div>

       <div class="panel-body">

        <table class="table">
         
         <tbody>
            
            <tr>
               <td class="font_16px" style="border-top: 0px;"> <i class="fa fa-user-o"></i>  Name : </td>
               <td class="font_16px" style="border-top: 0px;"> <?php echo $toursbooking_details[0]['Name']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i> Email : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['Email']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-phone"></i> Phone no : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['PhoneNo']; ?> &nbsp;/&nbsp; <?php echo $toursbooking_details[0]['AltPhoneNo']; ?></td>
            </tr>
            
                  <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i>  Address : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['Address']; ?> </td>
            </tr>

         </tbody> 


        </table>


 
       </div>
      
    </div>
  
  </div>
  
</div>



<div class="col-lg-12 col-xs-12">
                           <div class="col-lg-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                 <h5 style="margin: 0px; font-size:18px;"> Total Fare :   <i class="fa fa-inr"></i> <?php echo $cancellation_amount['RefundAmount']+$cancellation_amount['CancellationCharges']; ?> </h5> 
                                </div>
                            </div>
                   </div>
              </div>
                             
                             
                       <div class="col-lg-12 col-xs-12">
                           <div class="col-lg-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                 <h5 style="margin: 0px; font-size:18px;"> Cancellation Charges :  <i class="fa fa-inr"></i> <?php echo $cancellation_amount['CancellationCharges']; ?> </h5> 
                                </div>
                            </div>
                   </div>
              </div>
                        
                          <div class="col-lg-12 col-xs-12">
                           <div class="col-lg-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                 <h5 style="margin: 0px; font-size:18px;"> Refund Amount:  <i class="fa fa-inr"></i> <?php echo $cancellation_amount['RefundAmount'] ?> </h5> 
                                </div>
                            </div>
                   </div>
              </div>

<?php          
        $attributes = array('name'=>'form1', 'id' => 'form1');
      echo form_open_multipart('admin/toursbooking/toursbookingcancle', $attributes);
  
                                        $data = array('BookingStatus'  =>  $cancellation_amount['BookingStatus']);
                                        echo form_hidden($data);
                        $data = array('AgentCommission'  => 0);
                                        echo form_hidden($data);
                    $data = array('CancellationCharges'  => $cancellation_amount['CancellationCharges']);
                                        echo form_hidden($data);
                    $data = array('RefundAmount'  => $cancellation_amount['RefundAmount']);
                                        echo form_hidden($data);
                    $data = array('CancellationDateTime'  => $cancellation_amount['CancellationDateTime']);
                                        echo form_hidden($data);
                    $data = array('BookingId'  => $toursbooking_details[0]['BookingId']);
                                        echo form_hidden($data);
              
                    
                      $data = array('flag'  => 'yes');
                                        echo form_hidden($data);
      
      ?>


<!-- Modal ################################# ####################################### -->

<button  type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left: 30px;">Confirm</button>

<div class="col-md-12 col-xs-12">
</div>


               <?php  echo form_close();  ?>





             



                    


                    <!-- DB Tour Details End ########################################### -->
      
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