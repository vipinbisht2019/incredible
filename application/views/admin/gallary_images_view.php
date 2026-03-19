<!doctype html>
<html lang="en">
 <head>
	<title>Gallary Images view</title>
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Gallary Images View</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                            <a href="<?php echo base_url('admin/gallary_images/add?id='.$id); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Add Images Gallary</a>
						 </div>
					</div>
				 </div>


			<div class="panel">
	
                  
				<div class="panel-body">
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('gallary_image')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									 
									   //echo"<pre>"; 
									    //print_r($gallary_name);
									 // echo"</pre>"; 
                                    ?>
                                    </div>
                
					<table class="table table-bordered table_margin_top">
						<thead>
						    	<tr>
                                 <th> SN.</th>
                                 <th> Photo</th>
                                 <th> Gallary Title</th>
                                 <th>&nbsp;</th>
							  </tr>
                              
						</thead>
                        
						<tbody> 
                      
                 <?php 
					foreach($gallary_image as $val) 
					   {
					 
						       @$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                            
                            	<td><?php echo $val['photo_id'] ?></td>
								<td>
                                
                                <?php if($val['pitchure']!='') { ?> <img src="<?php echo base_url('uploads/gallary/'.$val['pitchure']) ?>" width="200px"><?php } ?>
                                </td>
                                
                            <td><?php echo $gallary_name[0]['ptitle'] ?></td>      
                                  
         <td>                         
           <a onClick="return confirm('Are you sure you want to delete?');" href="<?php  echo base_url('admin/gallary_images/delete')."?image_id=".$val['photo_id'].'&id='.$id ?>"><img src="<?php echo base_url('assets/admin/images/icon-delete.gif') ?>"  alt="Delete"></a>
                                       
                                     
                                  </td>
							</tr>
                            
					<?php } ?>		
                            
							
                            
						</tbody>
					</table>
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