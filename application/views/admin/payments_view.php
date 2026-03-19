<!doctype html>
<html lang="en">
 <head>
	<title>Customers Payments View</title>
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
					<div class="col-md-12 col-xs-12 padding_opx ">

						<div class="col-md-6 padding_opx">
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Customers Payments View</strong></h3>
							<p></p>
						</div>
						  <div class="col-md-6 padding_opx">
                           
						 </div>
					</div>
				</div>


			<div class="panel">

                  
				<div class="panel-body">
                 
<!--                  <div class="col-md-12 col-xs-12 col-lg-12 padding_opx margin_bottom">

                 	<div class="col-md-3" style="padding-left: 0px;">
                  <form class="navbar-form form-inline" style="padding:10px 0px 10px 0px;">
                  	<div class="col-md-12 col-xs-12 padding_opx margin_bottom">

			
                        <div class="input-group col-lg-12">
						<input type="text" value="" class="form-control" placeholder="Company name..">
				 	
				 	</div>

				 </div>
				</form>
                 	</div>

                	<div class="col-md-3">
                  <form class="navbar-form form-inline" style="padding:10px 0px 10px 0px;">
                  	<div class="col-md-12 col-xs-12 padding_opx">


                        <div class="input-group col-lg-12">
						<input type="text" value="" class="form-control" placeholder="Member ship no..">
				
				 	</div>

				 </div>
				</form>
                 	</div>





             	<div class="col-md-3" style="padding-left:  0px;">
                  <form class="navbar-form form-inline" style="padding:10px 0px 10px 0px;">
                  	<div class="col-md-12 col-xs-12 padding_opx">

				 	
                        <div class="input-group col-lg-12">
						<input type="text" value="" class="form-control" placeholder="Mobile no..">
	
				 	</div>
		
				 </div>
				</form>
                 	</div>

              	<div class="col-md-3" style="padding-left: 0px;">
                  <form class="navbar-form form-inline" style="padding:10px 0px 10px 0px;">
                  	<div class="col-md-12 col-xs-12 padding_opx">


                        <div class="col-lg-12">

				 	<button type="button" class="btn btn-primary"> <i class="fa fa-search"></i> </button>
				 	</div>

				 </div>
				</form>
                 	</div>


                 </div> -->
                      
                
					<table class="table table-bordered table_margin_top " >
						<thead>
							<tr>
             
                                <th> Name  </th>
                                <th> Email  </th>
                                <th> Phone No </th>
                                <th> City </th>
                                <th> State  </th>
                                <th> Address </th>
                                <th> Amount </th>
                                 <!-- <th> Payment Date  </th> -->
                                <th> Payment Status  </th> 
                                 
                     
							</tr>
						</thead>
                        
						<tbody> 
                      
                 <?php 
					foreach($payments_list as $val) 
					   {
					   // var $css;
						@$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                            
              
                                    <td> <p> <?php echo $val['Name']; ?></p> </td>
                                    <td> <p> <?php echo $val['Email']; ?></p> </td>
                                    <td> <p> <?php echo $val['PhoneNo']; ?></p> </td>
                                    <td><?php echo $val['City'] ?></td>
                                    <td><?php echo $val['State'] ?></td>
                                    <td><?php echo $val['Address'] ?></td>
                                    <td><?php echo $val['Amount'] ?></td>
                                    <!-- <td><?php echo $val['PaymentDate'] ?></td> -->
                                    <td nowrap> 

                                    <?php 
                                     
                                     if ($val['IsPaid']=='Y') {
                                     	 echo "Sucess";
                                     }


                                     ?>


                                </td> 
															 
							</tr>
                            
					<?php } ?>		
                            
							
                            
						</tbody>
					</table>
                        <?php     echo $this->pagination->create_links();  ?>  
				</div>
			</div>
			<!-- END BASIC TABLE  -->

		</div>
					<!-- END OVERVIEW -->



				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		
        
		<div class="clearfix"></div>
		
         <?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>