<!doctype html>
<html lang="en">
 <head>
	<title>Customers Bill View</title>
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Customers Bill View</strong></h3>
							<p></p>
						</div>
						 <div class="col-md-6 padding_opx">
                            <a href="<?php echo base_url('admin/bills/import'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom"> Import </a>
                            </div>
					</div>
				</div>


			<div class="panel">

                  
				<div class="panel-body">
                 
                 <div class="col-md-12 col-xs-12">


                 </div>
                      
                      
                       <div class="col-md-12 col-xs-12">  <?php
                                    if($error = $this->session->flashdata('bills')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php  } ?>
                                    </div>
                
					<table class="table table-bordered table_margin_top ">
						<thead>
							<tr>
                             
                                <th> Company Name  </th>
                                <th> Membership No.  </th>
                                <th> Representative Name </th>
                                <th>Financial Year </th>
                                <th>Annual Sub Amount  </th>
                                <th>CGST</th>
                                <th>SGST </th>
                                  <th>Total Amount </th>
                                 <th>Arrear </th>
                                 <th>Advance  </th>
                                 <th>Total Outstanding Dues  </th>
                                
                               
                                 
                     
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
                            
                                  
                                    <td> <p> <?php echo $val['CompanyName']; ?></p> </td>
                                    <td> <p> <?php echo $val['MembershipNo']; ?></p> </td>
                                    <td> <p> <?php echo $val['RepresentativeName']; ?></p> </td>
                                    <td><?php //echo $val['financialYear'] ?> Year: 2018 - 19</td>
                                    <td><?php echo $val['AnnualSubAmount'] ?></td>
                                    <td><?php echo $val['CGST'] ?></td>
                                    <td><?php echo $val['SGST'] ?></td>
                                    
                                    <td><?php echo $val['TotalAmount'] ?></td>
                                      <td nowrap><?php echo $val['Arrear'] ?></td> 
                                        <td nowrap><?php echo $val['Advance'] ?></td> 
                                        <td nowrap><?php echo $val['TotalOutstandingDues'] ?></td> 
                                  
															 
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