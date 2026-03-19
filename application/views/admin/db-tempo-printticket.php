<!doctype html>
<html lang="en">
  <head>
	<title>Temppo Booking Details</title>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Temppo Booking Detail </b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/temppobooking/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>


			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
     <div class="db-2-main-com db-2-main-com-table">
                     
                     
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
               <td class="font_16px" style="border-top: 0px;"> <?php echo $tempo_details[0]['Name']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i> Email : </td>
               <td class="font_16px"> <?php echo $tempo_details[0]['Email']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-phone"></i> Phone no : </td>
               <td class="font_16px"><?php echo $tempo_details[0]['PhoneNo']; ?> </td>
            </tr>

               <tr>
               <td class="font_16px"> <i class="fa fa-map"></i> Pickup Address / Time :   </td>
               <td class="font_16px"><?php echo $tempo_details[0]['Address']; ?> /  <?php echo $tempo_details[0]['PickupTime']; ?></td>
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
               <td class="font_16px" style="border-top: 0px;"><i class="fa fa-inr"></i>  <?php echo $TotalPrice=$tempo_details[0]['TotalPrice']; ?>  </td>
            </tr>

            <tr>
               <td class="font_16px">  GST (5%) : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $TotalGST=$tempo_details[0]['TotalGST']; ?> </td>
            </tr>
            
             <tr>
               <td class="font_16px">  DA : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $DrivingCharges=(int) $tempo_details[0]['DrivingCharges']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px">  Total Cost  : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $gtotal=$TotalPrice+$TotalGST+$DrivingCharges; ?> </td>
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
                    <td>  <?php if ($tempo_details[0]['PickUpType']=='T') { echo 'Train'; } ?>
                          <?php if ($tempo_details[0]['PickUpType']=='F') { echo 'Flight'; } ?>
                          <?php if ($tempo_details[0]['PickUpType']=='R') { echo 'Residential'; } ?> 
                     </td>
               </tr>
               <tr>
                  <td> City : </td>
                  <td> <?php echo $tempo_details[0]['PickUpCity']; ?>  </td>
               </tr>
         
         <?php 
         if ($tempo_details[0]['PickUpType']=='T') {
       
          ?>  
                <tr>
                  <td> Train No :  </td>
                  <td> <?php echo $tempo_details[0]['PickupTrainNo']; ?>  </td>
               </tr>

                <tr>
                  <td> Railways Station  :  </td>
                  <td> <?php echo $tempo_details[0]['PickupRailwayStation']; ?>  </td>
               </tr>

          <?php } ?> 


                   <?php 
         if ($tempo_details[0]['PickUpType']=='F') {
       
          ?>  
                <tr>
                  <td> Flight No :  </td>
                  <td> <?php echo $tempo_details[0]['PickupFlightNo']; ?>  </td>
               </tr>



          <?php } ?> 


                             <?php 
         if ($tempo_details[0]['PickUpType']=='R') {
       
          ?>  
                <tr>
                  <td> Pickup City :  </td>
                  <td> <?php echo $tempo_details[0]['PickUpCity']; ?>  </td>
               </tr>

                <tr>
                  <td> Address :  </td>
                  <td> <?php echo $tempo_details[0]['PickupAddress']; ?>  </td>
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
                    <td>  <?php if ($tempo_details[0]['DropUpType']=='T') { echo 'Train'; } ?>
                          <?php if ($tempo_details[0]['DropUpType']=='F') { echo 'Flight'; } ?>
                          <?php if ($tempo_details[0]['DropUpType']=='R') { echo 'Residential'; } ?> 
                     </td>
               </tr>
         
         
         <?php 
         if ($tempo_details[0]['DropUpType']=='T') {
       
          ?>  


               <tr>
                  <td> Drop City :  </td>
                  <td> <?php echo $tempo_details[0]['DropUpCity']; ?>  </td>
               </tr>


                <tr>
                  <td> Train No :  </td>
                  <td> <?php echo $tempo_details[0]['DropUpTrainNo']; ?>  </td>
               </tr>

                <tr>
                  <td> Railways Station  :  </td>
                  <td> <?php echo $tempo_details[0]['DropUpRailwayStation']; ?>  </td>
               </tr>

          <?php } ?> 


                   <?php 
         if ($tempo_details[0]['DropUpType']=='F') {
       
          ?>  

            <tr>
                  <td> Drop City :  </td>
                  <td> <?php echo $tempo_details[0]['DropUpCity']; ?>  </td>
               </tr>
                <tr>
                  <td> Flight No :  </td>
                  <td> <?php echo $tempo_details[0]['DropFlightNo']; ?>  </td>
               </tr>



          <?php } ?> 


                             <?php 
         if ($tempo_details[0]['PickUpType']=='R') {
       
          ?>  
                <tr>
                  <td> Dropcity City :  </td>
                  <td> <?php echo $tempo_details[0]['DropUpCity']; ?>  </td>
               </tr>

                <tr>
                  <td> Address :  </td>
                  <td> <?php echo $tempo_details[0]['DropUpupAddress']; ?>  </td>
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
           <th class="font_16px" style="width: 10%;">  B.R.No.  </th>
           <th class="font_16px" style="width: 10%;">  Name  </th>
           <th class="font_16px" style="width: 10%;"> Pick-up Date   </th>
           <th class="font_16px" style="width: 10%;"> Pickup Time   </th>
           <th class="font_16px" style="width: 10%;"> Drop-off Date    </th>
           <th class="font_16px" style="width: 10%;"> Trip  </th>
       </tr>


        <tr>
           <td class="font_16px"><img src="<?php echo base_url('uploads/temppo/'.$tempo_details[0]['SmallImage']); ?>" style="width: 200px;"> </td>
             <td class="font_16px"><?php echo $tempo_details[0]['BookingRefrenceNo']; ?>  </td>
           <td class="font_16px"><?php echo $tempo_details[0]['TemppoTravellarName']; ?>  </td>
           <td class="font_16px"><?php echo date("d-M-Y",strtotime($tempo_details[0]['PickupDate'])); ?>  </td>
           <td class="font_16px"><?php echo $tempo_details[0]['PickupTime']; ?>    </td>
           <td class="font_16px"><?php echo date("d-M-Y",strtotime($tempo_details[0]['DropoffDate'])); ?>   </td>
           <td class="font_16px"><?php 
                         if($tempo_details[0]['TripType']==1) { echo"Out Station Trip"; } 
                       if($tempo_details[0]['TripType']==2) { echo"Local Trip"; } 
                       if($tempo_details[0]['TripType']==3) { echo"Airport Transfer"; } 
                    ?>  </td>
        </tr> 

    </tbody>
</table>




  </div>

   <div class="col-lg-12 col-xs-12" style="margin-top: 20px;padding: 0px;">
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" style="margin-left: 30px;">Print Ticket</button>
                     
                </div>

</div>

</div>





</div>





          </div>





          


<!-- Tour Details End ########################################### -->
      
						</div>





      <div class="col-md-12 col-xs-12">
    


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content col-md-12 col-xs-12 printable">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ticket Print</h4>
      </div>
          <div class="modal-body col-md-12 col-xs-12">
       
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
               <td class="font_16px" style="border-top: 0px;"> <?php echo $tempo_details[0]['Name']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-envelope"></i> Email : </td>
               <td class="font_16px"> <?php echo $tempo_details[0]['Email']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px"> <i class="fa fa-phone"></i> Phone no : </td>
               <td class="font_16px"><?php echo $tempo_details[0]['PhoneNo']; ?> </td>
            </tr>

               <tr>
               <td class="font_16px"> <i class="fa fa-map"></i> Pickup Address / Time :   </td>
               <td class="font_16px"><?php echo $tempo_details[0]['Address']; ?> /  <?php echo $tempo_details[0]['PickupTime']; ?></td>
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
               <td class="font_16px" style="border-top: 0px;"><i class="fa fa-inr"></i>  <?php echo $TotalPrice=$tempo_details[0]['TotalPrice']; ?>  </td>
            </tr>

            <tr>
               <td class="font_16px">  GST (5%) : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $TotalGST=$tempo_details[0]['TotalGST']; ?> </td>
            </tr>
            
             <tr>
               <td class="font_16px">  DA : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $DrivingCharges=(int) $tempo_details[0]['DrivingCharges']; ?> </td>
            </tr>

            <tr>
               <td class="font_16px">  Total Cost  : </td>
               <td class="font_16px"> <i class="fa fa-inr"></i> <?php echo $gtotal=$TotalPrice+$TotalGST+$DrivingCharges; ?> </td>
            </tr>

         </tbody> 


        </table>


       </div>
      
    </div>
  
  </div>
  
</div>



<!-- <div class="col-md-12 col-sm-12 col-lg-12">
<div class="panel" style="border: 1px solid #f5f5f5;">
<div class="panel-body">
<p>   Gujarat Enviro Protection & Infrastructure Ltd (GEPIL) is the first private sector company promoted by Luthra Group in the year 1999 to plan, design and develop environment infrastructure projects in India...</p>
<a class="donate-btn hvr-shutter-out-horizontal" href="http://www.gepil.in/" target="_blank" rel="noopener">View</a>

</div>
</div>
</div> -->



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
           <th class="font_16px" style="width: 10%;">  B.R.No.  </th>
           <th class="font_16px" style="width: 10%;">  Name  </th>
           <th class="font_16px" style="width: 10%;"> Pick-up Date   </th>
           <th class="font_16px" style="width: 10%;"> Pickup Time   </th>
           <th class="font_16px" style="width: 10%;"> Drop-off Date    </th>
           <th class="font_16px" style="width: 10%;"> Trip  </th>
       </tr>


        <tr>
           <td class="font_16px"><img src="<?php echo base_url('uploads/temppo/'.$tempo_details[0]['SmallImage']); ?>" style="width: 200px;"> </td>
             <td class="font_16px"><?php echo $tempo_details[0]['BookingRefrenceNo']; ?>  </td>
           <td class="font_16px"><?php echo $tempo_details[0]['TemppoTravellarName']; ?>  </td>
           <td class="font_16px"><?php echo date("d-M-Y",strtotime($tempo_details[0]['PickupDate'])); ?>  </td>
           <td class="font_16px"><?php echo $tempo_details[0]['PickupTime']; ?>    </td>
           <td class="font_16px"><?php echo date("d-M-Y",strtotime($tempo_details[0]['DropoffDate'])); ?>   </td>
           <td class="font_16px"><?php 
                         if($tempo_details[0]['TripType']==1) { echo"Out Station Trip"; } 
                       if($tempo_details[0]['TripType']==2) { echo"Local Trip"; } 
                       if($tempo_details[0]['TripType']==3) { echo"Airport Transfer"; } 
                    ?>  </td>
        </tr> 

    </tbody>
</table>




  </div>

   <div class="col-lg-12 col-xs-12" style="margin-top: 20px;padding: 0px;">
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" style="margin-left: 30px;">Print Ticket</button>
                     
                </div>

</div>

</div>





</div>

 





    </div>
  </div> 
 </div>
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