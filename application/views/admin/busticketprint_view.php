<!doctype html>
<html lang="en">
  <head>
	<title> Car Cancel Details </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>

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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Bus Ticket Detail </b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/busbooking/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>


			<div class="panel">
			
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">

           
                               <div class="col-md-12 col-xs-12" style="border: 1px solid #eee; padding:4px;">
                                 <div class="col-md-12 col-xs-12" style="border: 1px dotted;">


                          
                     <?php if($AgentId > 0) { ?>
                        <div class="col-md-12 col-xs-12" style="padding: 0px;">
                           <div class="col-md-12 col-xs-12" style="padding: 0px;">
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

                              
                              <table class="table">


                                <tbody>
                                  
                                  <tr>
                                    
                                    <td><?php echo $busbooking_deatils[0]['fromcity'] ?>  </td>

                                    <td> <?php echo $busbooking_deatils[0]['tocity'] ?>  </td>

                                    <td>&nbsp;  </td>

                                                <td> <small class="pull-right"> Ticket no: <?php echo $busbooking_deatils[0]['BookingRefrenceNo'] ?>  </small> </td>


                                  </tr>


                                                <tr>
                                                
                                                <td> <?php echo $busbooking_deatils[0]['TypeTitle'] ?>  <br> <small> <b> <?php echo $busbooking_deatils[0]['CategoryName'] ?>  </b> </small> </td>

                                                <td> <small> <b>  <?php echo date("d-M-Y", strtotime($busbooking_deatils[0]['DepartureDate'])); ?>  </b></small></td>

                                                <td>&nbsp; </td>

                                                <td class="pull-right"> <?php echo $busbooking_deatils[0]['SeatNo'] ?>  <br> <small> <b> Seat number </b> </small> </td>


                                          </tr>


                                              <tr>
                                                
                                                <td> Boardings Point </td>

                                                <td> <b> <?php echo $busbooking_deatils[0]['boardingpoint'] ?></b></td>

                                                <td> Dropping Point </td>

                                                <td class="pull-right"><b> <?php echo $busbooking_deatils[0]['droppingpoint'] ?></b> </td>


                                             </tr>

                                            <tr>
                                                
                                                <td>   <?php echo $busbooking_deatils[0]['Name'] ?><br> <small> <b><?php echo $busbooking_deatils[0]['Email'] ?></b> </small>  </td>

                                                <td>&nbsp;  </td>

                                                <td>&nbsp;  </td>

                                                <td class="pull-right">&nbsp;  </td>


                                             </tr>





                                                <tr>
                                               <td>&nbsp;</td>
                                               <td>&nbsp;</td> 
                                               <td>&nbsp;</td>

                                                <td class="pull-right"> <h3 class="pull-right"> <small style="font-size: 12px;"> <b> Total Fare: </b> &nbsp;  </small>  <b>
                                                 <i class="fa fa-inr"></i> <?php echo $busbooking_deatils[0]['TotalFare'] ?> </b></h3> 
                                                     
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