<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php // echo $visa[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php // echo $visa[0]['meta_keyword']; ?>">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <?php include('includes/css.php'); ?>
	
<!----------------------------Start new css---------------------------------->		
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css" type="text/css'); ?>">
<!----------------------------End new css------------------------------------>

  </head>
  <body class="not-front page-about">
    <div id="main">
      <?php include('includes/header.php'); ?>
      <div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="<?php echo base_url(); ?>userhome">Home</a><span>/</span>Booking</div>
        </div>
      </div>
	  
	<!-- <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb">
                                <a href="<?php echo base_url('userhome') ?>"><i class="icon-home"></i> Home</a>
                                <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                                <span class="current"> Dashboard</span>
                                <h2 class="entry-title"> Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
	-->

     <div id="content" style="background-color: #f6f5f5;">
          <div class="container padding_top_padding_bottom">

    <div class="row">


        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
            <?php include"includes/userleft.php"; ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
           
           <div class="col-xs-12 col-md-12 col-xs-12 padding_opx">
           
                <div class="col-md-12 col-xs-12">  <?php
                                    if($error = $this->session->flashdata('cancle')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php  } ?>
                                    </div>



         <div class="panel">
                <div class="panel-heading hidden-xs hidden-sm"> <h3> Welcome : <?php  echo $this->session->userdata('user_id'); ?> </h3>
         </div>

     
                
                <div class="panel-heading col-xs-12 padding_0px_mobile hidden-lg hidden-md">

                  <div class="col-xs-12 col-md-12 padding_0px_mobile">
                     
                       <div class="col-xs-4" style="padding: 10px 0px;">
                                <?php include"includes/userleft.php"; ?>       
                     </div>

                     <div class="col-xs-8" style="padding: 10px 4px; margin-top: 6px;">
                       <h3 class="text-right"> Welcome : <?php // echo $username[0]['user_fname']; ?> <?php // echo $username[0]['user_lname']; ?>  </h3>      
                     </div>

                  </div>

                </div>    
 
         <div class="panel-body overflow_x_scroll" style="overflow-x:scroll;">
        
     
                 <table class="table">
                      
                      <thead>
                           <tr>
                                <th> No. </th>
                                <th> PNR No.</th>														
                                <th> Booking Date </th>
								<th> Travel Date </th>
                                <th> Travel Return Date </th>		
                                <th> Departure City </th>
                                <th> Departure Return City </th>
                                <th> Arrival City </th>
                                <th> Arrival Return City </th>
                                <th> Departure Date </th>
                                <th> Departure Return Date </th>
                                <th> Arrival Date </th>
                                <th> Arrival Return Date </th>                                
                                <th> Booking Status </th>								
                                <th> Action  </th>
                           </tr>
                      </thead>

                      <tbody>
                      
         <?php 
		 //  print_r($booking_details);
		 
		   $i=1;
		   foreach($booking_details as $user_booking)
		          { ?>
                           <tr>
								<td><?php echo $i; ; ?></td>
								<td><?php echo ''; ?></td> 
								<td><?php $date_created1 = $user_booking['date_created'];  										
										  $date_created2 = new DateTime($date_created1);
										  echo $date_created2->format('d-m-Y'); ?> </td>							
								<td><?php $travel_date1 = $user_booking['travel_date'];  										
										  $travel_dates2 = new DateTime($travel_date1);
										  echo $travel_dates2->format('d-m-Y'); ?> </td>
								<td><?php $travel_date_return1 = $user_booking['travel_date_return'];  										
										  $travel_date_return2 = new DateTime($travel_date_return1);
										  echo $travel_date_return2->format('d-m-Y'); ?> </td>
								<td><?php echo $user_booking['departure_city']; ?> </td>
								<td><?php echo $user_booking['departure_city_return']; ?> </td>
								<td><?php echo $user_booking['arrival_city'];;?></td>
								<td><?php echo $user_booking['arrival_city_return']; ?> </td>
								<td><?php $departure_date1 = $user_booking['departure_date'];  										
										  $departure_date2 = new DateTime($departure_date1);
										  echo $departure_date2->format('d-m-Y'); ?> </td>										  
								<td><?php $departure_date_return1 = $user_booking['departure_date_return']; 						
										  $departure_date_return2 = new DateTime($departure_date_return1);
										  echo $departure_date_return2->format('d-m-Y'); ?> </td>
								<td><?php $arrival_date1 = $user_booking['arrival_date'];  										
										  $arrival_date2 = new DateTime($arrival_date1);
										  echo $arrival_date2->format('d-m-Y'); ?> </td>								
								<td><?php $arrival_date_return1 = $user_booking['departure_date'];  										
										  $arrival_date_return2 = new DateTime($arrival_date_return1);
										  echo $arrival_date_return2->format('d-m-Y'); ?> </td>
										  
								<td><?php if($user_booking['booking_status']==1) { echo "Confirm"; } 
											elseif($user_booking['booking_status']==2) { echo "Unpaid"; }
											else { echo "Cancel"; }  ?> </td>
											
                                <td><a title="Delete" href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td>
                                <!--  <td> 
                                 <?php
                                 //   if($oval['order_status']=='N' || $oval['order_status']=='A')   //N= Proccesing A=approved 
								   //   {
								     ?> 
                                        <a title="Cancle" href="<?php // echo base_url('userorder/cancle/'.$oval['order_id']); ?>" class="btn btn-danger"> <i class="fa fa-ban"></i> </a>
                                    <?php
								   //   }
									// else
								//	  {
									    ?>
									     <a  title="Cancle" href="#" class="btn btn-danger disabled" style="opacity:.5;"> <i class="fa fa-ban"></i> </a>
                                        <?php
									//  } 
								  ?>      
             &nbsp;<a title="Invoice" data-toggle="modal" data-target="#myModal<?php // echo $i; ?>" href="#" class="btn btn-info"> <i class="fa fa-files-o"></i> </a> 
             &nbsp;<a title="View Details" href="<?php // echo base_url('userorder/orderdetails/'.$oval['order_id']); ?>" class="btn btn-success"> <i class="fa fa-eye"></i> </a>  &nbsp;
             &nbsp;<a title="Track Order" href="<?php // echo base_url('userorder/trackorder/'.$oval['order_id']); ?>" class="btn btn-success"> <i class="fa fa-truck"></i> </a> 
                                 
                                 </td> -->
                           </tr>
                           
                           
                       <tr><td colspan="5">        
<!-- ********************************************** Modal ************************************************************** -->
                        <div id="myModal<?php // echo $i; ?>" class="modal fade" role="dialog">
                          <div class="modal-dialog" style="width:1000px;">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Invoice</h4>
                              </div>
                              <div class="modal-body">
                                     
                                     <div class="jumbotron" style="background-color: #f7f7f7;">
	<div class="container" style="border: 2px solid #eee;">
		<div class="col-lg-12" style="border-bottom: 2px solid #eee;">
			<div class="col-lg-4">
				<h4>Bill From</h4>
				<p>Tajmahal Collections <br>
				   18/160-B, Fatehabad road, Opposite R. K. Hospital<br>
                   Agra-282001 <br>U.P , India<br>
				   Mob: +91-8650184840<br>
				  
                       

				 </p>
			</div>
		    <div class="col-lg-4">
				
			</div>
		   <div class="col-lg-4 text-right">
				<img src="../assets/img/logo taj.png" style="width: 181px;margin-top: 26px;">
			</div>
		</div>
        
        
            
            <div class="col-lg-12">
			<div class="col-lg-4">
				<h4>Bill To</h4>
				<p>
                        <?php
						  
						//        echo $oval['CompanyName']."<br>";
						//		echo $oval['order_shipping_first_name'].$oval['order_shipping_last_name']."<br>";
						//		echo $oval['order_shipping_address1'].$oval['order_shipping_address2']."<br>";
						//		echo $oval['order_shipping_city']."<br>";
						//		echo $oval['order_shipping_state']."-".$oval['order_shipping_postal_code']."<br>";
						//		echo "Phone-".$oval['order_shipping_phone'];
								
		
		                ?>

				 </p>
			</div>
		    <div class="col-lg-4">
				
			</div>
		   <div class="col-lg-4">
				<table class="table">
					<tbody>
						<tr>
							<td><p> Invoice </p></td>
							<td> <p>INV-<?php // echo $oval['order_id']; ?> </p></td>
						</tr>
						<tr>
							<td><p>Invoice Date </p></td>
							<td> <p>  <?php // echo date("d-M-Y", strtotime($oval['order_date'])); ?></p></td>  
						</tr>

						<tr style="background-color: #eee;">
							<td><p> Amount Due </p></td>
							<td> <p> INR. <?php // echo $oval['TotalAmount']; ?></p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>


<div class="col-lg-12">
        	 <table class="table">
        	 	 <thead>
        	 	 	<tr style="background-color: #eee;">
        	 	 		<th>Item</th>
                        
        	 	 		<th>Unit Price</th>
        	 	 		<th>Quantity</th>
        	 	 		<th>Line Total</th>
        	 	 	</tr>
        	 	 </thead>
        	 	 <tbody>
<?php 
 //  $itemArr=$oval['ITEMS'];
// foreach($itemArr as $result)
//	{
	  //          $GST=18;
	//		$GSTdiv=100+$GST;
			?>     
        	 	 	<tr>
        	 	 		<td><?php // echo $result['ProductName'];?></td>
                        <td>
							<?php 
                          		//	$TotalUnitPrice=$result['Price'];
								//	$ProductUnitGST=$TotalUnitPrice*$GST/$GSTdiv;
								//	$ProductUnitGST=round($ProductUnitGST, 2);
								//	echo"INR ".$productUnitCost=$TotalUnitPrice-$ProductUnitGST;
                            ?>          
                         </td>
        	 	 		 <td><?php // echo $result['order_qty'];?></td>
        	 	 		 <td>
                               INR 
									<?php 
                                    
											//	$TotalPrice=$result['Price']*$result['order_qty'];
											//	$ProductGST=$TotalPrice*$GST/$GSTdiv;
											//	$ProductGST=round($ProductGST, 2);
											//	$totalGST=$totalGST+$ProductGST;
											//    echo $productCost=$TotalPrice-$ProductGST;
											//	$SubToatl=$SubToatl+$productCost;
											//	$CodCharge=$result['CODCharges']*$result['order_qty'];
							                //	$TotalCodCharge_1=$TotalCodCharge_1+$CodCharge;
                                   ?>
                        
                        </td>
        	 	 	</tr>
 <?php
                          // shiping and discount
						  
						//	$total=$total+($result['Price']*$result['order_qty']);
						//	$ship=$result['ShippingCharge'];//*$result['order_qty'];
						//	$Totalship=$ship+$Totalship;
						//	$TotalDiscount=0;//$TotalDiscount+$result['Discount'];
  
  //  }
 ?>                   
                    
                    <tr style="background-color: #eee;">
                            
                            <td colspan="2">&nbsp;</td>
                           
							<td><p> Subtotal </p></td>
							<td> <p> INR  <?php // echo $SubToatl; ?> </p></td>
						</tr>
						<tr>
                            
                            <td colspan="2">&nbsp;</td>
                           
							<td><p> GST </p></td>
							<td> <p> INR <?php // echo $totalGST; ?></p></td>
						</tr>
                        
                         <td colspan="2">&nbsp;</td>
                            
							<td><p> Total Price </p></td>
							<td> <p> INR <?php // $totalprice=$SubToatl+$totalGST; echo number_format($totalprice, 2); ?></p></td>
						</tr>
                        
                        <tr>
                            
                            <td colspan="2">&nbsp;</td>
                          
							<td><p> Shipping Cost </p></td>
							<td> <p> INR <?php // echo number_format($Totalship, 2);; ?></p></td>
						</tr>
                       
                       <?php // if($TotalCodCharge_1>0) { ?>    
                         <tr>
                            
                            <td colspan="2">&nbsp;</td>
                          
							<td><p>  COD Charge </p></td>
							<td> <p> INR <?php // echo $TotalCodCharge_1; ?>.00</p></td>
						</tr>
                       <?php // } ?> 
                        
                        

						<tr style="background-color: #eee;">
                        
                            <td colspan="2">&nbsp;</td>
                           
							<td><p> Total Amount </p></td>
							<td> <p> INR  <?php // echo  number_format($SubToatl+$Totalship+$totalGST+$TotalCodCharge_1-$TotalDiscount, 2);; ?></p></td>
						</tr>
        	 	 </tbody>
        	 </table>
  
			<!--<div class="col-lg-4">
				<h4>Notes / Memo</h4>
				<p>	For Shipping 30 days Money Back </p>
			</div>-->
		  
		
				<table class="table">
					<tbody>
						
					</tbody>
				</table>
			
		</div>
        




	</div>
</div>
                                   
                                   
                                   
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>  
                        </td></tr>     
<!-- ********************************************** Modal ************************************************************** -->
                  <?php   $i++; } ?>
                 
                           

                      </tbody>
                  </table>
                              
  
                            
                 
                         
                      
                           
                  </div>
             </div>   
        </div>
                      
                      <div class="col-lg-12 col-xs-12" style="padding:0px; text-align:right;">   
                        <?php  //   echo $this->pagination->create_links();  ?>  
                      </div>  
                  
                   </div>
                </div> 
             </div>
                </div>
              





	 
	  
	  </div>  
	  
	  
      <?php include('includes/footer.php'); ?>
      <?php include('includes/js.php'); ?>
    </div>
  </body>
</html>