<!doctype html>
<html lang="en">
 <head>
	<title>Page Content view</title>
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
							<h3 class="panel-title title_h3"><strong>  <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Static Page List</strong></h3>
							<p></p>
						</div>
						 <div class="col-md-6 padding_opx">
						 </div>
					</div>
				</div>


			<div class="panel">
		
                  
				<div class="panel-body">
           
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('static')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									 
									   //echo"<pre>"; 
									  // print_r($staticlist);
									  // echo"</pre>"; 
                                    ?>
                                    </div>
                
					<table class="table table-bordered table_margin_top ">
						<thead>
							<tr>
                                <th>SN.</th>
                                <th>Page Name</th>
                                <th>&nbsp;</th>
							</tr>
						</thead>
                        
						<tbody> 
                      
                 <?php 
					foreach($staticlist as $val) 
					   {
					   // var $css;
						@$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                            
                            	<td><?php echo $val['page_id'] ?></td>
								<td><?php echo $val['page_name'] ?></td>
								
                                
								  <td> 
                                  
                                  
                                  
            <a href="<?php echo base_url('admin/statichome/edit')."?id=".$val['page_id'];  ?>"><img src="<?php echo base_url('assets/admin/images/icon-edit.gif') ?>" alt="Edit"></a> 
         
                                       
                                     
                                  </td>
							</tr>
                            
					<?php } ?>		
                            
							
                            
						</tbody>
					</table>
                    
                    
         <?php     echo $this->pagination->create_links();  ?>  
               
              
                            <!-- <ul  class="pagination pull-right">
                                 <li><a href="#">1</a></li>
                                 <li class="active"><a href="#">2</a></li>
                                 <li><a href="#">3</a></li>
                                 <li><a href="#">4</a></li>
                                 <li><a href="#">5</a></li>
                              </ul
        -->

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