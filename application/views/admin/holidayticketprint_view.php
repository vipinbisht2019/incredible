<!doctype html>
<html lang="en">
  <head>
	<title>Holiday Tours Deatils</title>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Holiday Tours Deatils</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/holidaybooking/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>
                
                
                

                


			<div class="panel">
			
				<div class="panel-body">
                  <div class="col-md-12 col-xs-12 margin_top">
                  
                       <?php if($AgentId > 0) { ?>
                        <div class="col-md-12 col-xs-12" >
                           <div class="col-md-12 col-xs-12" style="border: 1px ;">
                             <div class="panel panel-default">
                               <div class="panel-heading">
                               <?php echo $agent_info[0]['CompanyName'];  ?>
                                 </div>
                                 <div class="panel-body">
                                  <div class="col-md-4">
                                  <?php if($agent_info[0]['AgentLogo']) { ?>
                               	       <img style="width: 100%;padding: 20px;" src="<?php echo base_url('uploads/agents/'.$agent_info[0]['AgentLogo']); ?>">
                                       <?php } else {  echo"<span>".$agent_info[0]['CompanyName'].'</span>'; }  ?>
	    	                        </div>
                                <div class="col-md-3">
                               	   </div>
                                     <div class="col-md-5 text-right">

                               	    	<small> <b>Need help with your trip?</b> </small>

                               	    	<h6> <i class="fa fa-phone"></i> <?php echo $agent_info[0]['user_phone'] ?></h6>
                                        <h6> <i class="fa fa-envelope-o"></i> <?php echo $agent_info[0]['user_email'] ?></h6>
                                  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                <?php } else { 
                
                               include('ticket_header.php');
                 } ?>
               
                      
                  

                      <!-- Html ####################################################################################################################### -->
                             <div class="col-lg-12 col-xs-12">
                            
                              <div class="col-lg-6">
                            
                                <div class="panel panel-default">
                            
                                   <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-bus"></i> Tours </h5> </div>
                            
                                   <div class="panel-body">
                                     <h5 class="font_16px"> <?php echo $toursbooking_details[0]['TourName']; ?> </h5>
                            
                                     <p class="font_16px"> <?php if($toursbooking_details[0]['NoofNight'] > 0) { echo $toursbooking_details[0]['NoofNight']." Night / "; } if($toursbooking_details[0]['NoofDay']>0) { echo $toursbooking_details[0]['NoofDay']." Day"; } ?>  <!-- Single Day tours --></p>
                            
                                     <p class="font_16px"> <i class="fa fa-clock-o"></i> Departure Time : <?php echo $toursbooking_details[0]['DepartureTime']; ?>  &nbsp; <i class="fa fa-clock-o"></i> Arrival Time : <?php echo $toursbooking_details[0]['ArrivalTime']; ?>    </p>
                            
                                     <p class="font_16px">Place Covered:  <?php echo $toursbooking_details[0]['TourTitle']; ?> </p>
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
               <td class="font_16px"> <i class="fa fa-phone"></i> Phone No. : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['PhoneNo']; ?> &nbsp;/&nbsp; <?php echo $toursbooking_details[0]['AltPhoneNo']; ?> </td>
            </tr>
            
              <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i>  Address : </td>
               <td class="font_16px"> <?php echo $toursbooking_details[0]['Address']; ?> </td>
            </tr>
                            
                                     </tbody> 
                            
                            
                                    </table>
                            
                            
                             <!--         <h5 class="font_16px">Agra - Mathura - Vrindavan Tour</h5>
                            
                                     <p class="font_16px">Single Day tours</p>
                            
                                     <p class="font_16px"> <i class="fa fa-clock-o"></i> Arrival Time : 6.00 Am  &nbsp; <i class="fa fa-clock-o"></i> Departure Time : 11.30 Pm  </p>
                            
                                     <p class="font_16px"> Palace covered:  Agra, Mathura, Vrindavan</p> -->
                                   </div>
                                  
                                </div>
                              
                              </div>
                              
                            </div>
                            
                            
                            <div class="col-lg-12 col-xs-12">

   <div class="col-lg-12 col-xs-12">
  
  <div class="panel panel-default">
   
   <div class="panel-heading">

   <h5 style="margin: 0px; font-size: 18px;"> <i class="fa fa-ticket"></i>  Booking Overviews </h5>

   </div>

    <div class="panel-body">

  <table class="table">
    
    <tbody>
       
       <tr>
            <th class="font_16px" style="width: 10%;border-top: 0px;"> Booking Refrence No.</th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Tour Name  </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Vehicle </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Total Traveller  </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Journey Date   </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Return Date  </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Boarding Address  </th>
       </tr>


       <tr>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['BookingRefrenceNo']; ?>  </td>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['TourName']; ?>  </td>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['VehicleId']; ?>   </td>
          <td class="font_16px">  <?php echo $toursbooking_details[0]['PaxId']; ?>    </td>
          <td class="font_16px"> <?php //echo   $yrdata= strtotime('DepartureDate');
          $yrdata = $toursbooking_details[0]['DepartureDate'];  echo date('d-M-Y', strtotime($yrdata));   ?>   </td>
          <td class="font_16px"> <?php //echo   $yrdata= strtotime('DepartureDate');
          $yrdata = $toursbooking_details[0]['DepartureDate'];     echo date('d-M-Y', strtotime($yrdata. ' + '.$toursbooking_details[0]['NoofNight'].' days'));  ?>   </td>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['Address']; ?>  </td>
      </tr> 

    </tbody>

  </table>


  </div>

</div>

</div>

<div class="col-lg-12">
  
    <div class="panel panel-default">
   
   <div class="panel-heading">
   <h5 style="margin: 0px; font-size: 18px;"> <i class="fa fa-inr"></i>Fare</h5>
   </div>

    <div class="panel-body">


  <table class="table">
    <tbody>
      <tr>
       
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Fare </th>
          <th class="font_16px" style="width: 10%;border-top: 0px;"> GST  </th>
   
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Totals Fare  </th>
      </tr>


       <tr>
        
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $totalfare=$toursbooking_details[0]['TotalFare']; ?>    </td>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $totalgst=$toursbooking_details[0]['TotalGST']; ?>  </td>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $garndtotal = $totalfare+$totalgst;  ?>   </td>
       </tr> 

    </tbody>

  </table>

    </div>
   </div>   
 </div> 
   
               <div class="col-lg-12 col-xs-12">
                   <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" style="margin-left: 30px;">Print Ticket</button>
               </div> 
 
</div>
                            
                            
                            
      
                      </div>
                  <!--Html ####################################################################################################################### -->
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
     
     
		
        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
    

<!-- Modal -->


<!-- Tickets Print Css Start ################################### -->


<style type="text/css">
  
  @media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
   visibility:visible;
  }
}




</style>



<!-- End ##################### -->


<!-- Tickets Prints ################################################# -->




 <div id="printThis">

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content col-md-12 col-xs-12 printable">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ticket Print</h4>
      </div>
      
       <!-- *********************************************************************************************************************************** -->
      
                            <div class="panel">
			
				<div class="panel-body">
                  <div class="col-md-12 col-xs-12 margin_top" style="padding: 0px;">
                  
                       <?php if($AgentId > 0) { ?>
                        <div class="col-md-12 col-xs-12" style="padding: 0px;">
                           <div class="col-md-12 col-xs-12" style="border: 1px; padding: 0px;">
                             <div class="panel panel-default">
                               <div class="panel-heading">
                               <?php echo $agent_info[0]['CompanyName'];  ?>
                                 </div>
                                 <div class="panel-body">
                                  <div class="col-md-4">
                                  <?php if($agent_info[0]['AgentLogo']) { ?>
                               	       <img style="width: 100%;padding: 20px;" src="<?php echo base_url('uploads/agents/'.$agent_info[0]['AgentLogo']); ?>">
                                       <?php } else {  echo"<span>".$agent_info[0]['CompanyName'].'</span>'; }  ?>
	    	                        </div>
                                <div class="col-md-3">
                               	   </div>
                                     <div class="col-md-5 text-right">

                               	    	<small> <b>Need help with your trip?</b> </small>

                               	    	<h6> <i class="fa fa-phone"></i> <?php echo $agent_info[0]['user_phone'] ?></h6>
                                        <h6> <i class="fa fa-envelope-o"></i> <?php echo $agent_info[0]['user_email'] ?></h6>
                                  </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                <?php } else { 
                
                               include('ticket_header.php');
                 } ?>
               
                      
                  

                      <!-- Html ####################################################################################################################### -->
                             <div class="col-lg-12 col-xs-12" style="padding: 0px;">
                            
                              <div style="width: 50%;float: left;">
                            
                                <div class="panel panel-default">
                            
                                   <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-bus"></i> Tours </h5> </div>
                            
                                   <div class="panel-body">
                                     <h5 class="font_16px"> <?php echo $toursbooking_details[0]['TourName']; ?> </h5>
                            
                                     <p class="font_16px"> <?php if($toursbooking_details[0]['NoofNight'] > 0) { echo $toursbooking_details[0]['NoofNight']." Night / "; } if($toursbooking_details[0]['NoofDay']>0) { echo $toursbooking_details[0]['NoofDay']." Day"; } ?>  <!-- Single Day tours --></p>
                            
                                     <p class="font_16px"> <i class="fa fa-clock-o"></i> Departure Time : <?php echo $toursbooking_details[0]['DepartureTime']; ?>  &nbsp; <i class="fa fa-clock-o"></i> Arrival Time : <?php echo $toursbooking_details[0]['ArrivalTime']; ?>    </p>
                            
                                     <p class="font_16px"> Palace covered:  <?php echo $toursbooking_details[0]['TourTitle']; ?> </p>
                                   </div>
                                  
                                </div>
                              
                              </div>
                            
                                <div style="width: 49%; float: right;">
                            
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
                                           <td class="font_16px"> <?php echo $toursbooking_details[0]['PhoneNo']; ?> </td>
                                        </tr>
                            
                                     </tbody> 
                            
                            
                                    </table>
                            
                
                                   </div>
                                  
                                </div>
                              
                              </div>
                              
                            </div>
                            
                            
                            <div class="col-lg-12 col-xs-12" style="padding: 0px;">

   <div class="col-lg-12 col-xs-12" style="padding: 0px;">
  
  <div class="panel panel-default">
   
   <div class="panel-heading">

   <h5 style="margin: 0px; font-size: 18px;"> <i class="fa fa-ticket"></i>  Booking Overviews </h5>

   </div>

    <div class="panel-body">

  <table class="table">
    
    <tbody>
       
       <tr>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Booking Refrence No.</th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Tour Name  </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Vehicle </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Total Traveller  </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Journey Date   </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Return Date  </th>
           <th class="font_16px" style="width: 10%;border-top: 0px;"> Boarding Address  </th>
       </tr>


       <tr>
           <td class="font_16px"> <?php echo $toursbooking_details[0]['BookingRefrenceNo']; ?>  </td>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['TourName']; ?>  </td>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['VehicleId']; ?>   </td>
          <td class="font_16px">  <?php echo $toursbooking_details[0]['PaxId']; ?>    </td>
          <td class="font_16px"> <?php //echo   $yrdata= strtotime('DepartureDate');
          $yrdata = $toursbooking_details[0]['DepartureDate'];  echo date('d-M-Y', strtotime($yrdata));   ?>   </td>
          <td class="font_16px"> <?php //echo   $yrdata= strtotime('DepartureDate');
          $yrdata = $toursbooking_details[0]['DepartureDate'];     echo date('d-M-Y', strtotime($yrdata. ' + '.$toursbooking_details[0]['NoofNight'].' days'));  ?>   </td>
          <td class="font_16px"> <?php echo $toursbooking_details[0]['Address']; ?>  </td>
      </tr> 

    </tbody>

  </table>


  </div>

</div>

</div>

<div class="col-lg-12" style="padding: 0px;">
  
    <div class="panel panel-default">
   
   <div class="panel-heading">
   <h5 style="margin: 0px; font-size: 18px;"> <i class="fa fa-inr"></i>Fare</h5>
   </div>

    <div class="panel-body">


  <table class="table">
    <tbody>
      <tr>
       
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Fare </th>
          <th class="font_16px" style="width: 10%;border-top: 0px;"> GST  </th>
   
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Totals Fare  </th>
      </tr>


       <tr>
        
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $totalfare=$toursbooking_details[0]['TotalFare']; ?>    </td>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $totalgst=$toursbooking_details[0]['TotalGST']; ?>  </td>
          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $garndtotal = $totalfare+$totalgst;  ?>   </td>
       </tr> 

    </tbody>

  </table>

    </div>
   </div>   
 </div> 
   
 
</div>
                            
                            
                            
      
                      </div>
                  <!--Html ####################################################################################################################### -->
				</div>
			</div>
      
      
      <!-- ************************************************************************************************************************************* -->
           <div class="modal-footer">
         <button id="btnPrint" class="btn btn-default" style="float: left;"> Print</button>
         <button type="button" class="btn btn-default" style="float: right;" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>

<!-- Ticket Print #end ################################################################################################################### -->


<!-- Ticket Print Js ############## #end ########### -->

<script type="text/javascript">
  
  document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("printThis"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}

</script>


<!-- Ticket Print Js End ########################### -->

</body>
</html>