<!doctype html>
<html lang="en">
<head>
<title> Leads View</title>
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
// Javascript Function Check that atlease one Checkbox is checked to delete..If no then alert with (Nothing to Delete) and 
//If yes then (Are you sure you want to Delete) and then return true / false........
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
				if(confirm("Are you sure you want to assign?"))
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
				alert("Nothing to assign.");
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function viewdeatils(pos, str)
  {
        var aa = 'detail' + pos;
	  alert(aa);
		jQuery.ajax({
			url:'<?php echo base_url('admin/leads/details') ?>',
			data:'leadid=' + str ,
			type:'POST',
			success:function(data){ $('#detail' + pos).html(data);}
			
		});
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Leads View</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                            <a href="<?php echo base_url('admin/leads/add'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Add Leads </a>
                            
						 </div>
					</div>
				</div>


			<div class="panel">
		       <div class="panel-body">
               <div class="col-lg-12 col-xs-12" style="padding-top: 10px;"></div>
               
                   <div class="col-lg-12 col-xs-12" style="border: 1px solid #eee; padding-top: 18px;">

     <?php 
			$attributes = array('name'=>'form1', 'id' => 'form1');
			echo form_open_multipart(base_url('admin/leads/search'), $attributes);
	          ?>
                   <div class="col-lg-4 col-xs-12">
                            <div class="form-group">
                                <?php
								
											unset($options);									
									        $options['']='By Employee';
											foreach($employee as $val)
										       {
												    $options[$val['EmployeeID']] = $val['FirstName']." ".$val['LastName'];
												    $subArr=@$val['sub'];
												    if(count($subArr) > 0)
													 {
													    foreach($subArr as $sval)
														  {
														     $subsubArr=@$sval['subsub'];
													         $options[$sval['EmployeeID']] = "|___".$sval['FirstName']." ".$sval['LastName'];
															    foreach($subsubArr as $ssval) 
					                                               {
																     $options[$ssval['EmployeeID']] = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|___".$ssval['FirstName']." ".$ssval['LastName'];
																   }
														  }	
													 }
											   }		
											 $selected=set_value('Employee');	
										     echo form_dropdown('Employee', $options,$selected,'class="form-control margin_bottom"');
                                    ?>   
                          </div>
                        </div>
              
              
              
                    <div class="col-lg-4 col-xs-12">
                            <div class="form-group">
                                   <?php
								   	        unset($options);									
									        $options['']='By Lead Status';
											foreach($leadstatus as $val)
										       {
												    $options[$val['Id']] = $val['Title'];
											   }		
											 $selected=set_value('LeadStatus');	
										     echo form_dropdown('LeadStatus', $options,$selected,'class="form-control margin_bottom"');
                                    ?>   
                              
                          </div>
                        </div>
              
              
                      <div class="col-lg-4 col-xs-12">
                            <div class="form-group">
                   <input type="text" name="TravelDate" class="form-control" readonly value="<?php echo set_value('TravelDate') ?>" id="datepicker1" placeholder="Travel Date">
                            </div>
                        </div>
                         <div class="col-lg-4 col-xs-12">
                            <div class="form-group">
                   <input type="text" name="FileDate" class="form-control" readonly value="<?php echo set_value('FileDate') ?>" id="datepicker2" placeholder="Inquiry Date">
                            </div>
                        </div>
                        
        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                               <?php
								   	        unset($options);									
									        $options['']='Search By';
											$options['N'] = 'Name';
											$options['E'] = 'Email';
											$options['P'] = 'Phone';
													
											 $selected=set_value('SerachOption');	
										     echo form_dropdown('SerachOption', $options,$selected,'class="form-control margin_bottom"');
                                    ?>   
                                 
                          </div>
                        </div>
                        
                       <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                               <input type="text" name="Keyword" class="form-control"  value="<?php echo set_value('Keyword') ?>"  placeholder="Keyword" style="height: 37px;">
                            </div>
                        </div>
                        
                         <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                              <?php
								   	        unset($options);									
									        $options['']='By File No';
											foreach($getFileNoList as $val)
											   {
													$options[$val['FileNo']] = $val['FileNo'];
											   }		
											 $selected=set_value('FileNo');	
										     echo form_dropdown('FileNo', $options,$selected,'class="form-control margin_bottom"');
                                    ?>   
                            </div>
                        </div>
                        
                      
                        
                        
                        <div class="col-lg-3 col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Search <i class="fa fa-search"></i> </button>
                            </div>
                        </div>
                              <?php   
						      	    $data = array('flag'  => 'yes');
									echo form_hidden($data);
									echo form_close(); 
						       ?>
				
		     	</div>
               
											    
						
	<!--  ****************************************************************** Leads status *******************************************************  -->	
    <!--  ****************************************************************** Leads status *******************************************************  -->				
		   <div>
				<div class="row">
					
                   <?php foreach($lead_status as $sval) { ?>
                        <div class="col-md-2" style="margin-top: 20px;">
                            <div class="lboxi">
                 <h4 style="font-size:16px; margin:0px;"><span class="lnr lnr-user"></span> <span style="font-size: 22px;"> <?php echo $sval['totalrecords']; ?> </span> </h4>
                                <h4 style="font-size:16px; margin:0px;"><?php echo $sval['Title']; ?></h4>
                            </div>
                        </div>
                    <?php } ?>
			
                    
				</div>
			</div>

	<!--  ****************************************************************** Leads status *******************************************************  -->	
    <!--  ****************************************************************** Leads status *******************************************************  -->								
					


               
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                               if($error = $this->session->flashdata('leads')){  ?>
                                     <div class="alert alert-danger alert-dismissable">
                                          <?=$error ?>
                                      </div>
                                <?php  }  ?>
                      </div>
                  <?php                         
						  $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
						  echo form_open_multipart('admin/leads/bulk_action', $attributes); 
					?>                                
                
					<table class="table table-bordered table_margin_top" style="width: 100%">
						<thead>
							  <tr>
                                    <th>ID</th>
                                    <th>Customer Name </th>
                                    <th>Travel Date</th>
                                    <th>Lead Status </th>
                                    <th>Next Followup </th>
                                    <!--<th>Assign To</th>-->
                                    <th>Lead Info</th>
                                    <th><?php	$js = 'onClick="checkall(this.form)"'; echo form_checkbox('check_all', '1', false, $js); ?></th>
							   </tr>
						</thead>
                        
						<tbody>   
                      
                 <?php 
				 	//print_r($leads);
				        $i=1;
					foreach($leads as $val) 
					   {
					      
						 @$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                                <td><?php echo $val['LeadID'] ?></td>
								<td><?php echo $val['Name'] ?></td>
                                <td><?php echo date('d-M-Y',strtotime($val['TravelDate'])); ?></td>
                                <td><?php echo $val['Title'] ?></td>
                                <!--<td><?php //echo $val['Title'] ?></td>-->
                                <td><?php if($val['FollowUpDate']=='0000-00-00 00:00:00') echo"NA"; else echo date('d-M-Y / H:s A', strtotime($val['FollowUpDate'])); ?></td>
						   
                            <td> 
                                  
                                  
       <!-- <a href="<?php// echo base_url('admin/leads/edit')."?id=".$val['LeadID'];  ?>"><img src="<?php //echo base_url('assets/admin/images/icon-edit.gif') ?>" alt="Edit"></a> | -->
        
       <a href="<?php echo base_url('admin/leads/opration')."?id=".$val['LeadID'];  ?>"><img src="<?php echo base_url('assets/admin/images/modify-icon.jpg') ?>" alt="View"></a> 
      
     <!--  <a onClick="viewdeatils(<?php echo $i; ?>, <?php echo $val['LeadID']; ?>)" href="javascript:void(0)"><img src="<?php echo base_url('assets/admin/images/modify-icon.jpg') ?>" alt="View"></a>-->
    
          

                  
                      </td>
                     <td> 
                          <?php
						              
								   // ------------------------------ Login Id form open ---------------------------------
                                     $data = array('name'  => 'bb[]', 'id' => 'bb[]',   'value' =>$val['LeadID'],  'checked'=> false, 'class'=>" margin_bottom" );
                                     echo form_checkbox($data);
                              ?></td>
                        </tr>
               
               
               <!-- <tr height="0"  style="mso-line-height-rule: exactly; line-height:0px;border-collapse: collapse;"><td colspan="8" id="detail<?php echo $i; ?>"></td></tr>  -->       
                 
                        
                        
                        
                            
					<?php $i++; } ?>		
                            
							
                            
						</tbody>
					</table>
                    
                        
<div class="col-lg-4 col-xs-4" style="padding:0px;">  &nbsp; </div>					     
   <div class="col-lg-6 col-xs-6" style="padding:0px;">   
 
  <?php
								
											unset($options);									
									        $options['']='Select Employee';
											foreach($employee as $val)
										       {
												    $options[$val['EmployeeID']] = $val['FirstName']." ".$val['LastName'];
												    $subArr=@$val['sub'];
												    if(count($subArr) > 0)
													 {
													    foreach($subArr as $sval)
														  {
														     $subsubArr=@$sval['subsub'];
													         $options[$sval['EmployeeID']] = "|___".$sval['FirstName']." ".$sval['LastName'];
															    foreach($subsubArr as $ssval) 
					                                               {
																     $options[$ssval['EmployeeID']] = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|___".$ssval['FirstName']." ".$ssval['LastName'];
																   }
														  }	
													 }
											   }		
											 $selected=set_value('Employee');	
										     echo form_dropdown('Employee', $options,$selected,'class="form-control margin_bottom"');
                                    ?>   
                                     </div> 
                                    <div class="col-lg-2 col-xs-2" style="padding:0px;">   
       <?php 
					
			
			
			$js = 'onClick="return confdel()"'; 
			
			$data = array('name'  => 'Asign', 'value' => 'Assign Leads', 'style' => 'padding:7px 17px !important; margin:0px;',   'class'=>"btn btn-primary btn-primary1 pull-right margin_bottom");
			echo form_submit($data,'',$js);
			// ------------------------------ admin form open     confdel() ---------------------------------
			echo form_close(); 
		 ?>
   </div> 
     <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
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
    
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
	$(function() {
	$('#datepicker').datepicker('setDate', new Date());
		$( "#datepicker1" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
	$(function() {
		$( "#datepicker2" ).datepicker({
			dateFormat: "dd-mm-yy",
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});

		
</script>
	

</body>
</html>