<!doctype html>
<html lang="en">
 <head>
	<title>FAQ View</title>
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> FAQ View</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                            <a href="<?php echo base_url('admin/faq/add'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom"> Add FAQ </a>
						 </div>
					</div>
				</div>


			<div class="panel">
		
                  
				<div class="panel-body">
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('faq')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									 
									   // echo"<pre>"; 
									   // print_r($faq);
									   //echo"</pre>"; 
                                    ?>
                                    </div>
                
					<table class="table table-bordered table_margin_top">
						<thead>
							<tr>
                                <th>SN.</th>
                                <th>Questions </th>
                                <th>Answers </th>
                                <th>Sort Order</th>
                                <th>Status </th>
                                <th></th>
							</tr>
						</thead>
                        
						<tbody> 
                      
                 <?php 
					foreach($faq as $val) 
					   {
					   // var $css;
						@$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                            
                            	<td><?php echo $val['faq_id'] ?></td>
								<td><?php echo $val['question'] ?></td>
                                <td><?php echo $val['answer'] ?></td>
								<td><?php echo $val['sortorder'] ?></td>
								<td><?php if($val['Status']=='Y') echo"Active"; else echo"Inactive";  ?></td>
							
                                
								  <td nowrap> 
                                  
                                  
                                  
            <a href="<?php echo base_url('admin/faq/edit')."?id=".$val['faq_id'];  ?>"><img src="<?php echo base_url('assets/admin/images/icon-edit.gif') ?>" alt="Edit"></a> | 
            <a onClick="return confirm('Are you sure you want to delete?');" href="<?php  echo base_url('admin/faq/delete')."?id=".$val['faq_id'] ?>"><img src="<?php echo base_url('assets/admin/images/icon-delete.gif') ?>"  alt="Delete"></a>
                                       
                                     
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