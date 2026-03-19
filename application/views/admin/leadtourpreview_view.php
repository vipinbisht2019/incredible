<!doctype html>
<html lang="en">
 <head>
	<title>Leads Tour Preview</title>
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Quotation Preview</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                          <a href="<?php echo base_url('admin/leads/opration?id='.$lid) ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom"> << Back </a>
                        </div>
					</div>
				</div>


			<div class="panel">
		
                  
				<div class="panel-body">
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('leadsource')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?=$error ?>
                                      </div>
                                    
                                    <?php        
                                      }

                               //   print_r($lead_info); 
                                   ?>
                                    </div>

                                     

             <!-- **************************** Preview Code Start **************************************** -->
             <!-- **************************** Preview Code Start **************************************** -->
   <?php
	     // ------------------------------ Login Id form open ---------------------------------
                            
					 $attributes = array('class' => '', 'name'=>'form1', 'id' => 'form1');
					 echo form_open_multipart('admin/leadstourspreview/send', $attributes); 
					    ?>    
         
                   <div class="row">

                            <div class="col-md-12 padding_opx">
		                	   	<label class="col-md-2 text-left padding_opx">
		                			<span><strong> Customer Name : </strong></span></label>
                                        
		                			   <div class="col-md-4 form-group padding_opx">
                                        <?php echo $lead_info[0]['Name']; ?>
                                      </div>

                                    <label class="col-md-2 text-left padding_opx">
		                			<span> <strong>Customer E-Mail : </strong></span></label>
                                        
		                			   <div class="col-md-4 form-group padding_opx">
                                        <?php echo $lead_info[0]['Email']; ?>
                                      </div>
		                	</div>  


		                	<div class="col-md-12 padding_opx">
		                	   	<label class="col-md-2 text-left padding_opx">
		                			<span><strong> Subject </strong></span></label>
                                        
		                			   <div class="col-md-8 form-group padding_opx">
		                			   	 <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Subject'); ?></span>
                                        <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'Subject',  'value' =>"Package - ".$data_general_info[0]['TourName'],  'placeholder' => 'Subject', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
                             </div>  

                             <div class="col-md-12 padding_opx">
		                	   	<label class="col-md-2 text-left padding_opx">
		                			<span><strong> CC Emails  </strong></span></label>
                                        
		                			   <div class="col-md-6 form-group padding_opx">
		                			   	 <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('CCEmail'); ?></span>
                                        <?php
									      // ------------------------------ Login Id form open ---------------------------------
                                            $data = array('name'  => 'CCEmail',  'value' =>set_value('CCEmail'),  'placeholder' => 'CC Emails', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
                                      <div class="col-md-4 form-group padding_opx">
                                        <small><i style="color: red">&nbsp;&nbsp; (Emails shhould be comma seperated)</i></small>
                                      </div>
                             </div>    
                               


                    <div class="col-md-12 padding_opx">
                      <label class="col-md-12 text-left padding_opx"><strong> Mail Content  </strong></label>	
                   </div> 	

                   <div class="col-md-12 padding_opx">
                   	 <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('MailContent'); ?></span>

		               <?php
					      // ------------------------------ Login Id form open ---------------------------------
	                        $data = array('name'  => 'MailContent',  'value' =>set_value('MailContent'),  'placeholder' => 'Mail Content', 'class'=>"form-control margin_bottom");
	                        echo form_textarea($data);
	                    ?>
                      
                   </div> 

                      <div class="col-md-12 padding_opx">
                          <div class="text-center">
                             <button type="submit" name="smt_enter" class="btn bg-blue">Send Quotation</button>
                           </div>
                      </div> 	


             </div>
                    <?php 
                              // 

                                         echo  form_hidden('flag', 'yes');
                                         echo form_hidden('TourId', $tid);
                                         echo form_hidden('LeadId', $lid);
                                         echo form_hidden('SendDate', date('Y-m-d'));


                                         	

                                          
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
             <!-- **************************** Preview Code Start **************************************** -->
             <!-- **************************** Preview Code Start **************************************** -->

                   <div class="row">   
                     <table class="table table-bordered table_margin_top">
						<thead>
							  <tr>
                                    <th>ID</th>
                                    <th>Subject  </th>
                                    <th>Emails  </th>
                                    <th>Date </th>
                                    <th>Email Content</th>
                                  
                                   
							   </tr>
						</thead>
                        
						<tbody>   
                      
                 <?php 
				        $i=1;
					foreach($quotation_log as $val) 
					   {
					      
						 @$css = ($css=='trOdd')?'success':'trOdd';
					       ?>   
							<tr class="<?php echo $css; ?>">
                                <td><?php echo $val['LogId'] ?></td>
								<td><?php echo $val['Subject'] ?></td>
                                <td><?php echo $val['CCEmail'] ?></td>
                                <td><?php echo date('d-M-Y',strtotime($val['SendDate'])) ?></td>
                                <td><?php echo $val['MailContent'] ?></td>
                                
						   
                            
                    </tr>
               
              
                 
                        
                        
                        
                            
					<?php $i++; } ?>		
                            
							
                            
						</tbody>
					</table>
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