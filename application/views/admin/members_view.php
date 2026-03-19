<!doctype html>
<html lang="en">
 <head>
	<title>Members view</title>
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
							<h3 class="panel-title title_h3"> <strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>  Members View</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                             <a href="<?php echo base_url('admin/members/import'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">  Members Import</a>&nbsp;<a href="<?php echo base_url('admin/members/add'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom"> Add Members </a>
                            </div>
					</div>
				</div>
      

			<div class="panel">
		
                  
				<div class="panel-body" style="width: 100%; overflow-x: scroll;">
                
                      <div class="col-md-12 col-xs-12 members">  <?php
                                    if($error = $this->session->flashdata('members')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									 
									 //  echo"<pre>"; 
									//  print_r($members);
									   //echo"</pre>"; 
                                    ?>
                                    </div>
                
					<table class="table table-bordered table_margin_top">
						<thead>
							<tr>
                                <th>SN.</th>
                                <th>Company Name </th>
                                 <th>Membership No. </th>
                                   <th nowrap>Representative Name </th>
                                <th>Email Id </th>
                                <th>Phone  </th>
                                <th>Address  </th>
                                <th>City  </th>
                                <th>Zip  </th>
                                <th>State   </th>
                                <th>Status    </th>
                                <th>Action</th>
							</tr>
						</thead>
                        
						<tbody> 
                      
                 <?php 
					foreach($members as $val) 
					   {
					   // var $css;  
						@$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                            
                            	<td><?php echo $val['user_id'] ?></td>
                                <td><?php  echo $val['CompanyName'] ?></td>
			
                                <td><?php  echo $val['MembershipNo'] ?> </td>
                                <td><?php  echo $val['RepresentativeName'] ?> </td>
                                <td><?php echo $val['user_email'] ?></td>
								<td><?php  echo $val['user_phone'] ?></td>
                                <td><?php echo $val['user_address1'] ?></td>
                                <td><?php echo $val['user_city'] ?></td>
                                <td><?php echo $val['user_state'] ?></td>
                                <td><?php echo $val['user_zip'] ?></td>
                                <td><?php if($val['user_isactive']=='Y') echo"Active"; else echo"Inactive";  ?></td>
                                
							
                                
								  <td nowrap> 
                                  
                                  
            <a href="<?php  echo base_url('admin/bills/add')."?id=".$val['user_id'];  ?>"> <img src="<?php echo base_url('assets/admin/images/add-icon.jpg'); ?>" alt="Add Payment" ></a>|            <a href="<?php  echo base_url('admin/members/edit')."?id=".$val['user_id'];  ?>"><img src="<?php echo base_url('assets/admin/images/icon-edit.gif') ?>" alt="Edit"></a> | 
            <a onClick="return confirm('Are you sure you want to delete?');" href="<?php  echo base_url('admin/members/delete')."?id=".$val['user_id'] ?>"><img src="<?php echo base_url('assets/admin/images/icon-delete.gif') ?>"  alt="Delete"></a>
                                       
                                     
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