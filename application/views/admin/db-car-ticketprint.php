<!doctype html>
<html lang="en">
  <head>
	<title>Tour Car Ticket Print</title>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Car Ticket Detail </b></h3>
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


                    <div class="col-md-12 col-xs-12" >
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
                              </div>


<div class="col-lg-12 col-xs-12">

    <div class="col-lg-6">

    <div class="panel panel-default">

       <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-user-o"></i> Traveller infomation </h5> </div>

       <div class="panel-body">

        <table class="table">
         
         <tbody>
            
            <tr>
               <td class="font_16px" style="border-top: 0px;"> <i class="fa fa-user-o"></i>  Name : </td>
               <td class="font_16px" style="border-top: 0px;"> <?php echo $carsbooking_details[0]['Name']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i> Email : </td>
               <td class="font_16px"><?php echo $carsbooking_details[0]['Email']; ?></td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-phone"></i> Phone no : </td>
               <td class="font_16px"> <?php echo $carsbooking_details[0]['PhoneNo']; ?> </td>
            </tr>

               <tr>
               <td class="font_16px"> <i class="fa fa-map"></i> Pickup Address  :   </td>
               <td class="font_16px"> <?php echo $carsbooking_details[0]['Address']; ?>  </td>
            </tr>



         </tbody> 


        </table>


       </div>
      
    </div>
  
  </div>

    <div class="col-lg-6">

    <div class="panel panel-default">

       <div class="panel-heading"> <h5 style="font-size: 18px; margin: 0px;"> <i class="fa fa-inr"></i> Fare </h5> </div>

       <div class="panel-body">

        <table class="table">
         
         <tbody>
            
            <tr>
               <td class="font_16px" style="border-top: 0px;">    Fare  : </td>
               <td class="font_16px" style="border-top: 0px;"> <i class="fa fa-inr"></i>  <?php echo $TotalPrice=$carsbooking_details[0]['TotalPrice']; ?>  </td>
            </tr>

            <tr>
               <td class="font_16px">  GST (5%) : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i>     <?php echo $TotalGST=$carsbooking_details[0]['TotalGST']; ?>  </td>
            </tr>

            <tr>
               <td class="font_16px">  Total Cost  : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i>  <?php echo $totalprice=$TotalPrice+$TotalGST; ?>  </td>
            </tr>
            
                     <td class="font_16px">&nbsp;  </td>
               <td class="font_16px">&nbsp; </td>
            </tr>

         </tbody> 


        </table>


       </div>
      
    </div>
  
  </div>
  
</div>
  


<div class="col-lg-12 col-xs-12">
  
  <div class="col-lg-6 col-xs-12">
     
     <div class="panel panel-default">
       <div class="panel-heading">
         <i class="fa fa-map"> </i>  Pickup
       </div>
       <div class="panel-body">
         
        <table class="table">
           <tbody>
               <tr>
                  <td>Type :  </td>
                    <td>  <?php if ($carsbooking_details[0]['PickUpType']=='T') { echo 'Train'; } ?>
                          <?php if ($carsbooking_details[0]['PickUpType']=='F') { echo 'Flight'; } ?>
                          <?php if ($carsbooking_details[0]['PickUpType']=='R') { echo 'Residential'; } ?> 
                     </td>
               </tr>
               <tr>
                  <td> City : </td>
                  <td> <?php echo $carsbooking_details[0]['PickUpCity']; ?>  </td>
               </tr>
         
         <?php 
         if ($carsbooking_details[0]['PickUpType']=='T') {
       
          ?>  
                <tr>
                  <td> Train No :  </td>
                  <td> <?php echo $carsbooking_details[0]['PickupTrainNo']; ?>  </td>
               </tr>

                <tr>
                  <td> Railways Station  :  </td>
                  <td> <?php echo $carsbooking_details[0]['PickupRailwayStation']; ?>  </td>
               </tr>

          <?php } ?> 


                   <?php 
         if ($carsbooking_details[0]['PickUpType']=='F') {
       
          ?>  
                <tr>
                  <td> Flight No :  </td>
                  <td> <?php echo $carsbooking_details[0]['PickupFlightNo']; ?>  </td>
               </tr>



          <?php } ?> 


                             <?php 
         if ($carsbooking_details[0]['PickUpType']=='R') {
       
          ?>  
                <tr>
                  <td> Pickup City :  </td>
                  <td> <?php echo $carsbooking_details[0]['PickUpCity']; ?>  </td>
               </tr>

                <tr>
                  <td> Address :  </td>
                  <td> <?php echo $carsbooking_details[0]['PickupAddress']; ?>  </td>
               </tr>



          <?php } ?> 





           </tbody>
        </table>
       </div>
       
     </div>

  </div>


    <div class="col-lg-6 col-xs-12">
     
     <div class="panel panel-default">
       <div class="panel-heading">
         <i class="fa fa-map-marker">  </i> Drop   
       </div>
       <div class="panel-body">

        <table class="table">
           <tbody>
               <tr>
                  <td>Type :  </td>
                    <td>
                          <?php if ($carsbooking_details[0]['DropUpType']=='T') { echo 'Train'; } ?>
                          <?php if ($carsbooking_details[0]['DropUpType']=='F') { echo 'Flight'; } ?>
                          <?php if ($carsbooking_details[0]['DropUpType']=='R') { echo 'Residential'; } ?> 
                          
                     </td>
               </tr>
         
         
         <?php 
         if ($carsbooking_details[0]['DropUpType']=='T') {
       
          ?>  


               <tr>
                  <td> Drop City :  </td>
                  <td> <?php echo $carsbooking_details[0]['DropUpCity']; ?>  </td>
               </tr>


                <tr>
                  <td> Train No :  </td>
                  <td> <?php echo $carsbooking_details[0]['DropUpTrainNo']; ?>  </td>
               </tr>

                <tr>
                  <td> Railways Station  :  </td>
                  <td> <?php echo $carsbooking_details[0]['DropUpRailwayStation']; ?>  </td>
               </tr>

          <?php } ?> 


                   <?php 
         if ($carsbooking_details[0]['DropUpType']=='F') {
       
          ?>  

            <tr>
                  <td> Drop City :  </td>
                  <td> <?php echo $carsbooking_details[0]['DropUpCity']; ?>  </td>
               </tr>
                <tr>
                  <td> Flight No :  </td>
                  <td> <?php echo $carsbooking_details[0]['DropFlightNo']; ?>  </td>
               </tr>



          <?php } ?> 


                             <?php 
         if ($carsbooking_details[0]['PickUpType']=='R') {
       
          ?>  
                <tr>
                  <td> Dropcity City :  </td>
                  <td> <?php echo $carsbooking_details[0]['DropUpCity']; ?>  </td>
               </tr>

                <tr>
                  <td> Address :  </td>
                  <td> <?php echo $carsbooking_details[0]['DropUpupAddress']; ?>  </td>
               </tr>



          <?php } ?> 





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

   <h5 style="margin: 0px; font-size: 18px;"> <i class="fa fa-ticket"></i>  Booking Overviews </h5>

   </div>

    <div class="panel-body">

  <table id="Mytable">
    
    <tbody>
       
       <tr>
           
           <th class="font_16px" style="width: 10%;">    </th>
            <th class="font_16px" style="width: 10%;"> Booking No.  </th>
           <th class="font_16px" style="width: 10%;"> Pickup Date   </th>
           <th class="font_16px" style="width: 10%;"> Pickup Time   </th>
           <th class="font_16px" style="width: 10%;"> Dropoff Date    </th>
           <th class="font_16px" style="width: 10%;"> Dropoff Time   </th>
           <th class="font_16px" style="width: 10%;"> Trip  </th>

        </tr>


       <tr>
          <td class="font_16px"> <?php echo $carsbooking_details[0]['CarName']; ?> <br> <img src="<?php echo base_url('uploads/car/'.$carsbooking_details[0]['SmallImage']) ?>" style="width: 100px;">  </td>
          
             <td class="font_16px"> <?php echo $carsbooking_details[0]['BookingRefrenceNo']; ?>     </td>

          <td class="font_16px">  <?php echo date("d-M-Y", strtotime($carsbooking_details[0]['PickupDate'])); ?>  </td>

          <td class="font_16px"> <?php echo $carsbooking_details[0]['PickupTime']; ?>     </td>

          <td class="font_16px"> <?php echo date("d-M-Y", strtotime($carsbooking_details[0]['DropoffDate'])); ?>  </td>

          <td class="font_16px"> <?php echo $carsbooking_details[0]['DropoffTime']; ?>     </td>

          <td class="font_16px">   <?php 
                                           if($carsbooking_details[0]['TripType']==1) { echo"Out Station Trips"; } 
										   if($carsbooking_details[0]['TripType']==2) { echo"In Station Trips"; } 
										   if($carsbooking_details[0]['TripType']==3) { echo"Airport Transfer"; } 
                     ?>  </td>


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


<!-- Tour Details End ########################################### -->


<!-- Ticket Print Modal ############################################ -->

  
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



<!-- ********************************************************************* Modal *************************************************************************** -->


<style type="text/css">
  tr td span {
    font-size: 14px;
}
</style>


<div id="printThis">
<div class="col-md-12 col-xs-12">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
     <div class="modal-content col-md-12 col-xs-12">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ticket No. <?php echo $toursbooking_details[0]['BookingRefrenceNo']; ?></h4>
          </div>
     

<div style="width:100%;" >
  <div class="table1" style="float: left;width: 50%;">
    <table class="table" style=" width: 100%;max-width: 100%;">
   <tbody>
     <tr>
       <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="<?php base_url() ?>assets/img/logo.png" style="width: 100%;"></td>
     </tr>
     <tr>
<!--         <td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: none;text-align: center;"> <small> Fleet Owner & Travel Agents </small></td> -->
     </tr>
   </tbody>
 </table>
  </div>
 <div class="table2" style="float: right;width: 48%;margin-top: 0%;text-align: right;">
  <table class="table" style="margin-bottom: 0px;">
    <tbody>
       <tr>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;padding: 0px;"> <small> Shop no.3 Block B-1 G/F Main Road Massodpur Mkt. </small> </td>
      </tr>
      <tr>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
        <td style="line-height: 1.42857143;vertical-align: top;border-top: none;padding: 0px;"><small>Vasant Kunj, New Delhi - 110070</small> </td>
      </tr>
       
   
     <tr>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;    padding: 11px 0px 0px 0px;"><small>Mobile : +91-9311181111</small></td>
     </tr>
     <tr>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none; padding: 0px;"><small>Phone : 011-26136611,26138811,26137711</small></td>
     </tr>
     <tr>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;"></td>
       <td style="line-height: 1.42857143;vertical-align: top;border-top: none;padding: 0px;"><small>GST No : 07AAIFT3303P1ZW</small></td>
     </tr>
    </tbody>
  </table>
  
   
 </div>
     
</div>

<div style="width:100%;">
  <h2></h2>
  <p></p>            
  <table class="table" style="margin-bottom: 0px;">
    <thead>
      <tr>
        <th ><?php echo date("d-M-Y", strtotime($carsbooking_details[0]['BookingDate'])); ?></th>
        <th >&nbsp;</th>
        <th >Ticket No. <?php echo $carsbooking_details[0]['BookingRefrenceNo']; ?> </th>
        
      </tr>
    </thead>
    <tbody>


      <tr>

        <td >Pickup Date & Time :  <?php echo date("d-M-Y", strtotime($carsbooking_details[0]['PickupDate'])); ?>, <?php echo $carsbooking_details[0]['PickupTime']; ?>  </td>
         <td>&nbsp;</td>
          <td ><span > Drop  Date & Time </span>: <span> <?php echo date("d-M-Y", strtotime($carsbooking_details[0]['DropoffDate'])); ?>,<?php echo $carsbooking_details[0]['DropoffTime']; ?>  </span></td>
       
      </tr>

  



        <tr>
        <td>
         <b style="color: red;"> <i class="fa fa-map"></i>  Pickup   </b> </td>
        <td>&nbsp;</td>
        <td><b style="color: red;"> <i class="fa fa-map-marker"></i> Drop <b></td>
        
      </tr>

          <tr>
        <td>
      <span> Type </span>:<span> 
      <?php if ($carsbooking_details[0]['PickUpType']=='T') { echo 'Train'; } ?>
      <?php if ($carsbooking_details[0]['PickUpType']=='F') { echo 'Flight'; } ?>
      <?php if ($carsbooking_details[0]['PickUpType']=='R') { echo 'Residential'; } ?> 
      </span> </td>
        <td>&nbsp;</td>
        <td><span> Type <span>: <span>

          <?php if ($carsbooking_details[0]['DropUpType']=='T') { echo 'Train'; } ?>
                          <?php if ($carsbooking_details[0]['DropUpType']=='F') { echo 'Flight'; } ?>
                          <?php if ($carsbooking_details[0]['DropUpType']=='R') { echo 'Residential'; } ?> 

           </span></td>
        
      </tr>

     <tr>
        <td> <span> City </span>:<span> <?php echo $carsbooking_details[0]['PickUpCity']; ?> </span> </td>          
          <td>&nbsp;  </td>
          <td> Drop City : <?php echo $carsbooking_details[0]['DropUpCity']; ?>  </td>
   </tr>

  
    <tr>
   <td>
   <?php 
   if ($carsbooking_details[0]['PickUpType']=='T')
   {
                 ?>      
   Train No :  <?php echo $carsbooking_details[0]['PickupTrainNo']; ?>,  Railways Station  : <?php echo $carsbooking_details[0]['PickupRailwayStation']; ?> 
   <?php } ?>

    <?php 
  if ($carsbooking_details[0]['PickUpType']=='F') {
          ?>  
               
    Flight No : <?php echo $carsbooking_details[0]['PickupFlightNo']; ?> 
                  
          <?php } ?> 
    <?php 
         if ($carsbooking_details[0]['PickUpType']=='R') {
          ?>            
     Address : <?php echo $carsbooking_details[0]['PickupAddress']; ?> 
                
     <?php } ?> 

   </td>
      
       <td>&nbsp;</td>


        <td>
          <?php   if ($carsbooking_details[0]['DropUpType']=='T') {
       
               ?>  
                 Train No : <?php echo $carsbooking_details[0]['DropUpTrainNo']; ?> , Railways Station  : <?php echo $carsbooking_details[0]['DropUpRailwayStation']; ?>             
          <?php } ?> 
      
                       <?php 
         if ($carsbooking_details[0]['DropUpType']=='F') {
       
          ?>  
           Flight No : <?php echo $carsbooking_details[0]['DropFlightNo']; ?> 
                
          <?php } ?> 

        <?php 
         if ($carsbooking_details[0]['PickUpType']=='R') {
       
          ?>  
                  Address : <?php echo $carsbooking_details[0]['DropUpupAddress']; ?> 
        
        <?php } ?>

        </td>
        
      </tr>


         <tr>
        <td> <b style="color: red;"> <i class="fa fa-info-circle"></i> Personal </span>:&nbsp;<span> Information </b> </td>
        <td >&nbsp;</td>
        <td><b> Trip :  <?php 
                         if($carsbooking_details[0]['TripType']==1) { echo"Out Station Trips"; } 
                       if($carsbooking_details[0]['TripType']==2) { echo"Normal Trips"; } 
                       if($carsbooking_details[0]['TripType']==3) { echo"Airport Transfer"; } 
                     ?>  
            </b></td>
        
      </tr>

      <tr>
        <td>
          <span>Name </span>:&nbsp;<span> <?php echo $carsbooking_details[0]['Name']; ?> </span> </td>
        <td >&nbsp;</td>
        <td><span> Mobile No <span>:&nbsp; <span> <?php echo $carsbooking_details[0]['PhoneNo']; ?> /  <?php echo $carsbooking_details[0]['AltPhoneNo']; ?>  </span></td>
        
      </tr>
      <tr>
        <td>
          <span>Address </span>:&nbsp; <span>  <?php echo $carsbooking_details[0]['Address']; ?> </span></td>
        <td>&nbsp;</td>
        <td><span> Vechile hired </span>:&nbsp; <span> <?php echo $carsbooking_details[0]['CarName']; ?> </span></td>
        
      </tr>

      <tr>


        <td><span>Message </span>: &nbsp; <?php echo $carsbooking_details[0]['BookingNote']; ?></td>
        <td>&nbsp;</td>  

            <td>
          <span>For Ticket Support </span>:&nbsp; <span>+91-9311181111</span></td>    
      </tr>



    
    </tbody>
  </table>

  <table class="table" style="margin-bottom: 0px;">
    <tbody>
      <tr>
     
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Booking Amount </th>
          

          <th class="font_16px" style="width: 10%;border-top: 0px;"> GST  </th>

          
          <th class="font_16px" style="width: 10%;border-top: 0px;"> Total Paid Amount  </th>
      </tr>


       <tr>
       
       
          <td class="font_16px"> <i class="fa fa-inr"></i>  <?php echo $TotalPrice=$carsbooking_details[0]['TotalPrice']; ?>   </td>
           

          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $TotalGST=$carsbooking_details[0]['TotalGST']; ?>  </td>
          

          <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $totalprice=$TotalPrice+$TotalGST; ?>   </td>
       </tr> 

    </tbody>

  </table>

    

      
      <div style="width: 40%;float: left;">

        <p><b> Trip :  <?php 
                         if($carsbooking_details[0]['TripType']==1) { echo"Out Station Trips"; } 
                       if($carsbooking_details[0]['TripType']==2) { echo"Normal Trips"; } 
                       if($carsbooking_details[0]['TripType']==3) { echo"Airport Transfer"; } 
                     ?>  
            </b></p>

                <?php if($carsbooking_details[0]['TripType']==2) { ?>
                    
                       <p> <?php echo $carsbooking_details[0]['TimeLimit'] ?> Hrs & <?php echo $carsbooking_details['DistanceLimit'] ?> Km : <i class="fa fa-inr"></i> <?php echo $carsbooking_details[0]['Fare'] ?>/- </p>
                     
                        <p>  Extra Km :  <?php echo $carsbooking_details[0]['ExtraMileage'] ?> Per Kem </p>

                      <p> Extra Hrs : <?php echo $carsbooking_details[0]['ExtraHours'] ?>/- </p>
                        
                  
                        <p> Driver (After 8 PM) : <?php echo $carsbooking_details[0]['DrivingChargesOutation'] ?>/- </p>  
                        
                        <p>  Parking & Tollfare : As Per Actual </p>
                       
                    
                  <?php 
            } 
          if($carsbooking_details[0]['TripType']==1) 
            { 
          ?> 
                  
                    

                        <p>   OutStation Trips @ :  <?php echo $carsbooking_details[0]['OutStation'] ?> Per Kem </p>

                        <p>  Minimum Distance : <?php echo $carsbooking_details[0]['DistanceLimitOutation'] ?> km per day  </p>
     
                        <p> Driver : <?php echo $carsbooking_details[0]['DrivingChargesOutation'] ?>/-   </td>  
                      
                        <p> State Tax, Toll-Fare & Parking : As Per Actual  </p>

                                      
                  <?php 
             }
        if($carsbooking_details[0]['TripType']==3)  
           { 
            ?>

                                <p>  Airport Transfers : <?php echo $carsbooking_details[0]['AirportTransfers'] ?>/-  </p>  
                                            
            
                                <p>  Parking & Tollfare : As Per Actual </p>
                              
                                                     
                  
                  <?php
            }
          ?>
       
</div>

<div style="width: 60%;float: right;">
<p><strong>Terms & Conditions</strong></p>
  <ul style="font-size: 12px;">

  <?php 
  
  foreach ($carrental_termscondition_print as $termcondition) {
  
  

  ?>

      <li style="list-style: disc;"> <?php echo $termcondition['Title']; ?> .</li>

<?php } ?>

  </ul>
  <p style="text-align: center;font-size: 13px">Copy Right 2018-19,All Right Reserved By <span style="border-bottom: 1px solid gray">Travel House Delhi</span></p>
</div>
</div>


      <div class="modal-footer col-xs-12 col-md-12">
         <button type="button" id="btnPrint" class="btn btn-default" style="float: left;"> Print</button>
         <button type="button" class="btn btn-default" style="float: right;" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
</div>
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
     
     
		
        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>