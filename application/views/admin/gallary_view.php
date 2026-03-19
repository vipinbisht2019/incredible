<!doctype html>
<html lang="en">
 <head>
	<title>Ready For Adventure Manager View</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <?php include('top.inc.php') ?>
      <script language="JavaScript">
// Function to Select / DeSelect all the CheckBoxes........
// Function to Select / DeSelect all the CheckBoxes........
function checkall(objForm){
	len = objForm.elements.length;
	var i=0;
	for( i=0 ; i<len ; i++) {
		if (objForm.elements[i].type=='checkbox') {
			objForm.elements[i].checked=objForm.check_all.checked;
		}
	}
}

/////////////////////////////////////////////////
// Javascript Function Check that atlease one Checkbox is checked to delete..If no then alert with (Nothing to Delete) and If yes then (Are you sure you want to Delete) and then return true / false........
function confdel()
  {
			var fl = 0;
			for(i = 0; i < (document.form1.elements.length); i++)
			{
				if((document.form1.elements[i].type=="checkbox") && (document.form1.elements[i].checked==true))
				{
					fl = 1;
					break;
				}
			}
			if(fl == 1)
			{
				if(confirm("Are you sure you want to delete?"))
				{
					fl = 1;
				}
				else
				{
					fl = 0;
				}
			}
			else
			{
				alert("Nothing to delete.");
				fl = 0;
			}
			if(fl == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Ready For Adventure Manager View</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                            <a href="<?php echo base_url('admin/gallary/add'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom"> Add Ready For Adventure</a>
                            <br>
						 </div>
					</div>
				</div>


			<div class="panel">
			
                  
				<div class="panel-body">
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('gallary')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
									 
									   // echo"<pre>"; 
									   // print_r($facilities);
									   //echo"</pre>"; 
                                    ?>
                                    </div>
                                    
                 <?php                         
						$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
						echo form_open_multipart('admin/gallary/bulk_action', $attributes); 
					?>            
                
					<table class="table table-bordered table_margin_top">
						<thead>
							<tr>
                                <th>SN.</th>
                                <th>Gallery  </th>
                                <th>Main Photo</th>
                              <!--  <th>Hotel</th>-->
                               <!-- <th>View Image </th>-->
                                <th>Status </th>
                                <th>&nbsp;</th>
                                <th><?php	$js = 'onClick="checkall(this.form)"'; echo form_checkbox('check_all', '1', false, $js); ?></th>
							</tr>
						</thead>
                        
						<tbody> 
                      
                 <?php 
					foreach($gallary as $val) 
					   {
					   // var $css;
						       @$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                            
                            	<td><?php echo $val['gallery_id'] ?></td>
								<td><?php echo $val['ptitle'] ?></td>
                                 <th><?php if($val['photo']!='') { ?> <img src="<?php echo base_url('uploads/gallary/'.$val['photo']) ?>" width="200px"><?php } ?></th>
                                 
                                <?php /*?> <td><?php echo $val['HotelName'] ?></td><?php */?>
						       <!-- <td>-->
                               <!-- <a href="<?php //echo base_url('admin/gallary_images/view')."?id=".$val['gallery_id'];  ?>">View Image</a>|
                                <a href="<?php //echo base_url('admin/gallary_images/add')."?id=".$val['gallery_id'];  ?>">Add Image</a>-->
                                
                                
                                <!--</td>-->
								<td><?php if($val['Status']=='Y'){echo "Inactive";}else{ echo "Active"; } ?></td>
							
                                
								  <td> 
                                  
                                  
                                  
            <a href="<?php echo base_url('admin/gallary/edit')."?id=".$val['gallery_id'];  ?>"><img src="<?php echo base_url('assets/admin/images/icon-edit.gif') ?>" alt="Edit"></a> | 
            <a onClick="return confirm('Are you sure you want to delete?');" href="<?php  echo base_url('admin/gallary/delete')."?id=".$val['gallery_id'] ?>"><img src="<?php echo base_url('assets/admin/images/icon-delete.gif') ?>"  alt="Delete"></a>
                                       
                                     
                                  </td>
                                  
                                  
                                  <td> 
                                  <?php
									  
                                            $data = array('name'  => 'bb[]', 'id' => 'bb[]',   'value' =>$val['gallery_id'],  'checked'=> false, 'class'=>" margin_bottom" );
                                            echo form_checkbox($data);
                                          ?></td>
                                  
							</tr>
                            
					<?php } ?>		
                            
							
                            
						</tbody>
					</table>
                  
  <div class="col-lg-12 col-xs-12" style="padding:0px;">      
     <?php 
					
			$data = array('name'  => 'Activate', 'value' => 'Activate',  'style' => 'padding:1px 17px !important;', 'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data);
			
			$data = array('name'  => 'Deactivate', 'value' => 'Deactivate', 'style' => 'padding:1px 17px !important;' ,   'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data);
			
			$js = 'onClick="return confdel()"'; 
			
			$data = array('name'  => 'Delete', 'value' => 'Delete', 'style' => 'padding:1px 17px !important;',   'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data,'',$js);
			// ------------------------------ admin form open     confdel() ---------------------------------
			echo form_close(); 
			
		 ?>
   </div>  
                    
                    <div class="col-lg-12 col-xs-12" style="padding:0px;">    
                        <?php     echo $this->pagination->create_links();  ?>  
                       </div> 
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