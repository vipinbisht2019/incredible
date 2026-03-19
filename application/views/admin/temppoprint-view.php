<!doctype html>
<html lang="en">
  <head>
	<title>Ticket Details</title>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Car Ticket Print </b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/carbooking/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>


			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">

                   	<!-- Tour Details Start ########################################-->

              <div class="col-md-12 col-xs-12" style="border: 1px solid #eee; padding:4px;">
                                   
                                   <div class="col-md-12 col-xs-12" style="border: 1px dotted;">

                                    <div class="col-md-4">

                                     <img style="width: 100%;padding: 20px;" src="<?php echo base_url('assets/img/logo.png'); ?>">
        
                                    </div>

                                    <div class="col-md-3">
                                      
                                    </div>

                                    <div class="col-md-5 text-right">

                                      <small> <b>Need help with your trip?</b> </small>

                                      <h6> <i class="fa fa-phone"></i> +91-9311181111, 9811181111, 9911181111</h6>

                                      <h6> <i class="fa fa-phone"></i> 011-26136611 </h6>

                                      <h6> <i class="fa fa-envelope-o"></i> info@travelhousedelhi.com </h6>


                                      
                                    </div>

                              
                              <table class="table more">


                                <tbody>
                                  
                                  <tr>
               <style type="text/css">
                    
                    .more tbody td {
                      border-top: none !important;
                      padding: 15px !important;
                    }

               </style>                     
                                    <td> Kanpur </td>

                                    <td> New Delhi <small> <b> Sunday, December 15, 2018 </b></small></td>

                                    <td> &nbsp; </td>

                                                <td> <small class="pull-right"> Ticket no: TFD853379589 </small> </td>


                                  </tr>


                                                <tr>
                                                
                                                <td> Astha Travel <br> <small> <b> Volvo Coach </b> </small> </td>

                                                <td> 2:30PM <br> <small> <b> Reporting time </b> </small></td>

                                                <td> 01:30PM <br> <small> <b> Departure time </b> </small> </td>

                                                <td class="pull-right"> 20,22 <br> <small> <b> Seat number </b> </small> </td>


                                          </tr>


                                              <tr>
                                                
                                                <td> Boardings point details  </td>

                                                <td> Iffeco Chowk <br> <small> <b> Location </b> </small></td>

                                                <td> Palam Vihar <br> <small> <b> Landmark </b> </small> </td>

                                                <td class="pull-right"> Alambagh Bus Station </td>


                                             </tr>

                                            <tr>
                                                
                                                <td> Laxmi Kant <br> <small> <b> Seat no. 20 </b> </small>  </td>

                                                <td> Tinku Kumar <br> <small> <b> Seat no. 22 </b> </small></td>

                                                <td> &nbsp; </td>

                                                <td class="pull-right"> &nbsp; </td>


                                             </tr>





                                                <tr>
                                               <td>&nbsp;</td>
                                               <td>&nbsp;</td> 
                                               <td>&nbsp;</td>

                                                <td class="pull-right"> <h3 class="pull-right"> <small style="font-size: 12px;"> <b> Total Fare: </b> &nbsp;  </small>  <b> <i class="fa fa-inr"></i> 980 </b></h3> 
                                                      <small class="pull-right">(Inclusive of Rs.100 Convenience Fee)</small>
                                                 </td>


                                             </tr>




                                </tbody>


                                
                              </table>


                              <div class="col-md-12 col-xs-12" style="padding: 0px;">

                                    <h5 class="text-center">Terms Conditions</h5>

                                 <div class="col-md-6" style="padding-left: 0px;">
                                     
                                     <ol>
                                           <li style="font-size: 12px; text-align: justify;"> It does not operate busservices of its own. In order to provide a comprehensive choice ofbus operators, departure times and prices to customers, it has tiedup with many bus operators. redBus's advice to customers is tochoose bus operators they are aware of and whose service theyare comfortable with</li>

                                           <li style="font-size: 12px; text-align: justify;"> The departure time mentioned on the ticket are only tentativetimings. However the bus will not leave the source before the timethat is mentioned on the ticket</li>
                                     </ol>

                                 </div>   

                                 <div class="col-md-6" style="padding-right: 0px;">

                                          <ol>
                                           <li style="font-size: 12px; text-align: justify;"> It does not operate busservices of its own. In order to provide a comprehensive choice ofbus operators, departure times and prices to customers, it has tiedup with many bus operators. redBus's advice to customers is tochoose bus operators they are aware of and whose service theyare comfortable with</li>

                                           <li style="font-size: 12px; text-align: justify;"> The departure time mentioned on the ticket are only tentativetimings. However the bus will not leave the source before the timethat is mentioned on the ticket</li>
                                     </ol>
                                       
                                 </div>   
                                    
                              </div>


                               




                                </div>

                               </div>




                    <!-- Tour Details End ########################################### -->
      
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