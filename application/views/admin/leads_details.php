<!doctype html>
<html lang="en">
<head>
<title> Leads Details View </title>
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
function associate_lead_tour(str)
  {
     jQuery.ajax({
			url:'<?php echo base_url('admin/leads/tourpackage') ?>',
			data:'catid=' + str ,
			type:'POST',
			success:function(data){ $('#tours').html(data);}
			
		});
  }
</script>


<style type="text/css">
    
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #000;
    cursor: default;
    /* background-color: #000; */
    border-top: 2px solid #00b5ff;
    border-left: 1px solid #00b5ff40;
    border-right: 1px solid #00b5ff40;
}
.nav-tabs>li>a{
  margin-right: 2px;
  color: black;
  line-height: 1.42857143;
  border: 1px solid #d6cfcf8c;
  border-radius: 4px 4px 0 0;
}
.nav-tabs {
border-bottom: 1px solid transparent; 
}
.headi{
  margin: 15px 0px;
  font-size: 28px;
  color: black;
  letter-spacing: 2px;
}
.formi{
  font-size: 14px;
}
.bg-blue{
  padding: 3px 9px;
  background: #00b5ff;
  color: white;
  border: 2px solid #00b5ff;margin-bottom: 10px;
}
.bg-blue:hover{
  background: white;
  color: #00b5ff;
  transition: .3s ease;
}
.boxi{
  margin-bottom: 20px;
  background: #dfdfdf8f;
  padding: 10px;
  border-radius: 5px;
  color: black;
}

</style>


 
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
									<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>  <?php echo $lead[0]['Name']; ?></strong></h3>
								</div>
                                <div class="col-md-6 padding_opx">
                                    <a href="<?php echo base_url('admin/leads/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return</a>
                                </div>
							</div>
						</div>
                		<div class="panel" style="padding-top: 50px;">
		       				<div class="panel-body">
               					<div class="col-lg-12 col-xs-12" style="padding-top: 10px;"></div>
                                	<div class="container">
                                    	<div class="container">
                                        	
                                               <div class="col-md-12 col-xs-12 margin_top"> 
											   		<?php
                                                   		if($error = $this->session->flashdata('leads')){  ?>
                                                         <div class="alert alert-danger alert-dismissable">
                                                              <?=$error ?>
                                                          </div>
                                                    <?php  }  ?>
                            					</div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#home">Details</a></li>
                                                    <li><a data-toggle="tab" href="#menu1">Follow-Up History</a></li>
                                                   <!-- <li><a data-toggle="tab" href="#menu2">Send Quotation</a></li>-->
                                                    <li><a data-toggle="tab" href="#menu3">Fix Meeting</a></li>
                                                    
                                              	</ul>
                                                  <?php //echo '<pre>'; print_r($lead);?>
                                                <div class="tab-content">
            										<div id="home" class="tab-pane fade in active" style="padding: 10px;">
                                                      <div class="row">
                                                            <div class="col-md-8">
                                                                <!--<h4><span style="font-weight:700">Packages Info : </span></h4>-->
                                                            </div>
                                                               <div class="col-md-4">
                                                                <a href="<?php echo base_url('admin/leads/edit')."?id=".$lead[0]['LeadID'];  ?>"><button type="button" name="smt_send" class="btn bg-blue" style="float: left;">Edit Info</button></a>
                                                                </div>
                                                           </div>
                                                    <!-- <div class="row">
                                                      <div class="col-md-12">
                                                     <a href="<?php echo base_url('admin/leads/edit')."?id=".$lead[0]['LeadID'];  ?>"><button type="button" name="smt_send" class="btn bg-blue" style="float: left;">Edit Info</button></a>
                                                   </div></div>-->
                                                   <?php //print_r($lead);?>
                                                    	<div class="row" style="margin-top: 10px;margin-bottom: 5px;">
                  											<div class="col-md-6">
                      											<div class="row" style="margin-top:30px;">
                        											<div class="col-md-4 col-sm-12 col-xs-12">
                                                                    <h4 class="formi"><strong>File No : </strong></h4>
                                                                    	<h4 class="formi"><strong>Enquiry Date : </strong></h4> 
                                                                        <h4 class="formi"><strong>Company Name : </strong></h4>
                                                                        <h4 class="formi"><strong>Branch Name : </strong></h4>
                                                                        <h4 class="formi"><strong>Company E-Mail : </strong></h4>
                                                                        <h4 class="formi"><strong>Company Contact No :  </strong></h4>
                                                                        <h4 class="formi"><strong>Contact Name :  </strong></h4>
                                                                        <h4 class="formi"><strong>Contact E-Mail :  </strong></h4>
                                                                        <h4 class="formi"><strong>Contact Number :  </strong></h4>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                                                    <h4 class="formi"><strong><?php echo $lead[0]['FileNo'];?><strong></h4>
                                                                    
                                                                    	<h4 class="formi"> 
                                                                        	
																				<?php if($lead[0]['AddedDate']!='0000-00-00') { 
																					echo date('d-m-Y',strtotime($lead[0]['AddedDate'])); } else echo"N/A"; ?>  
                                                                           
                                                                        </h4>
                                                                        <h4 class="formi"><?php echo $lead[0]['Name'];?></h4>
                                                                        <h4 class="formi"><?php if($lead[0]['branch_name'] !=''){echo $lead[0]['branch_name'];}else{

                                                                            echo "Not Available";
                                                                        }?></h4> 
                                                                    	 
                                                                    	<h4 class="formi"><?php echo $lead[0]['Email'];?></h4>
                                                                    	<h4 class="formi"><?php echo $lead[0]['code']; ?> <?php echo $lead[0]['ContactNumber'];?></h4>
                                                                        <h4 class="formi"><?php echo $lead[0]['contact_name'];?></h4> 
                                                                    	<h4 class="formi"><?php echo $lead[0]['contact_email'];?></h4>
                                                                    	<h4 class="formi"><?php echo $lead[0]['con_phon_code']; ?>  <?php echo $lead[0]['contact_number']; ?></h4>
                                                                    </div>
                      											</div>
                  											</div>
                                                            <div class="col-md-6">
                                                            	<div class="row">
                                                                    <div class="col-md-4">
                                                                        <h4 class="formi"><strong>Lead Status  : </strong></h4>
                                                                        <h4 class="formi"><strong>Lead Type :  </strong></h4>
                                                                        <h4 class="formi"><strong>Lead Source : </strong></h4>
                                                                        <h4 class="formi"><strong>Lead Assign To : </strong></h4> 
                                                                        <?php if($lead[0]['fit'] > 0){?>                         
                                                                        <h4 class="formi"><strong>FIT (Individual): </strong></h4>
                                                                        <?php } if($lead[0]['git'] > 0){ ?>                          
                                                                        <h4 class="formi"><strong>GIT (Group): </strong></h4>  
                                                                        <?php } ?>       
                                                                        <h4 class="formi"><strong>Address 1: </strong></h4> 
                                                                        <h4 class="formi"><strong>Address 2: </strong></h4>  
                                                                        <h4 class="formi"><strong>City: </strong></h4>    
                                                                        <h4 class="formi"><strong>State: </strong></h4>      
                                                                        <h4 class="formi"><strong>Country: </strong></h4>  
                                                                        <h4 class="formi"><strong>Zip Code: </strong></h4>                
                                                                    </div>  
                        											<div class="col-md-8"> 
                                                                    	<h4 class="formi"><?php echo $LeadStatus[0]['Title']; ?></h4>
                                                                        <h4 class="formi"><?php echo $lead[0]['LeadType']; ?></h4>
                            											<h4 class="formi"><?php echo $LeadSourse[0]['Title']; ?></h4>
                            											<h4 class="formi"> 
                                                                        	
																				<?php if($Assign[0]['FirstName'] !=''){ echo $Assign[0]['FirstName'];}else{echo "Not Available";} ?> 
																				<?php echo $Assign[0]['LastName']; ?>
                                                                            
                                                                        </h4>
                                                                        <?php if($lead[0]['fit'] > 0){?>
                                                                        <h4 class="formi"><?php echo $lead[0]['fit']; ?> Pax</h4>
                                                                        <?php } if($lead[0]['git'] > 0){ ?>
                                                                        <h4 class="formi"><?php echo $lead[0]['git']; ?> Pax</h4>
                                                                        <?php } ?>  
                                                                        <h4 class="formi"><?php echo $lead[0]['Address']; ?></h4> 
                                                                        <h4 class="formi"><?php echo $lead[0]['Address_second']; ?></h4> 
                                                                        <h4 class="formi"><?php if($lead[0]['cityNameList']['city_name'] !=''){echo $lead[0]['cityNameList']['city_name']; }else{ echo "Not Available"; }?></h4> 
                                                                        <h4 class="formi"><?php echo $lead[0]['stateNameList']['StatesName']; ?></h4> 
                                                                        <h4 class="formi"><?php echo $lead[0]['countryNameList']['country']; ?></h4> 
                                                                        <h4 class="formi"><?php echo $lead[0]['zip_code']; ?></h4> 

                                                                     </div>
                                                                 </div>
                  											</div>
                										</div>
                                                        <hr>
                                                        <h4><strong>More Details : </strong></h4>
                                                        <p><?php echo $lead[0]['Note']; ?></p>                                                      
                                                       
                                                        <hr>
                                                        
                                                       
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h4><span style="font-weight:700">Packages Info : </span></h4>
                                                            </div>
                                                               <div class="col-md-4">
                                                                <a href="<?php echo base_url('admin/tour_generalinfo/add?id='.$lead[0]['LeadID']); ?>">
                                                                        <button type="button" name="smt_send" class="btn bg-blue" style="float: left;">New Package</button>
                                                                </a>
                                                                </div>
                                                           </div>
                                                          <?php if(count($assciated) > 0){ ?>
                                                       	<table class="table table-bordered table_margin_top">
                                                            <thead>
                                                                <tr>
                                                                	
                                                                    <th>Itinerary</th>
                                                                    <th>Itinerary Date</th>
                                                                    <th>Prepared For</th>
                                                                    <th>Title</th>
                                                                    <th>Duration</th>
                                                                    <th>Total Pax</th>
                                                                    <th>Status </th>
                                                                    <th>Action</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php 
                                                            $i=1;
                                                            foreach($assciated as $key => $associatedValue){ ?>
                                                                <tr>
                                                                    <td><a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$associatedValue['id']); ?>">Option - <?php echo $i;?></a></td>
                                                                    <td><?php echo date('d-m-Y', strtotime($associatedValue['FileDate']));?></td>
                                                                    <td><?php echo $lead[0]['Name'];?></td>
                                                                    <td><?php echo $associatedValue['ItineraryTitle'];?></td>
                                                                    <td><?php echo $associatedValue['Nights'] ?> N/<?php echo $associatedValue['Days'] ?> D</td>
                                                                    <td><?php echo $fullPax =  $associatedValue['PayingPax'] + $associatedValue['FreePax'];?></td>
                                                                    <td><?php if($associatedValue['Status']=='Y') echo"Active"; else echo"Inactive"; ?></td>
                                                                    <td>
                                                                    <a href="<?php echo base_url('admin/tour_generalinfo/edit')."?id=".$associatedValue['id'];  ?>"><img src="<?php echo base_url('assets/admin/images/icon-edit.gif') ?>" alt="Edit"></a>
                                                                   
                                                                    <a href="<?php echo base_url('admin/tour_generalinfo/modify')."?id=".$associatedValue['id'];  ?>"><img src="<?php echo base_url('assets/admin/images/clone-icon.png') ?>" alt="Edit"></a>
                                                                    </td>
                                                                </tr>
																		
																<?php $i++; } ?>
																
																
                                                           	</tbody>
                                                        </table>
                                                        <?php
                                                        		}else{  ?>
                                                                
                                                                		<p class="alert alert-danger alert-dismissable">Sorry No record found.</p>
                                                                		
                                                                <?php } ?>
                                                        <hr>
             								</div>
                                            <div id="menu1" class="tab-pane fade" style="padding: 10px;">
                                            	<h4>Followup History</h4>
                                                <?php //print_r($followups);?>
													<?php //if(count($followups) > 0) { ?>   
             											<table class="table table-bordered table_margin_top">
                                                            <thead>
                                                                <tr>
                                                                    <th>Follow up </th>
                                                                    <th>Action </th>
                                                                    <th>Added On </th>
                                                                    <th>Added By </th>
                                                                    <th>Note</th>
                                                                </tr>
                                                            </thead>
                                                   			<tbody> 
																<?php foreach($followups as $fval) { ?>
                                                                        <tr class="<?php echo $css; ?>">
                                                                            <td>
                                                                                <?php if($fval['FollowUpDate']!='0000-00-00 00:00:00') 
                                                                                        {  
                                                                                            echo date('d-M-Y / H:s A', strtotime($fval['FollowUpDate']));
                                                                                        } 
                                                                                ?>
                                                                            </td>
                                                                            <td><?php echo $fval['Title'] ?></td>
                                                                            <td><?php echo date('d-M-Y / H:s A', strtotime($fval['DateTime'])) ?></td>
                                                                            <td><?php if($fval['SubmittedBy']=='A'){  ?> 
                                                                            <span style="color:#FF0000"> *</span> <?php } echo $fval['SubmittedName']; ?></td>
                                                                            <td><?php echo $fval['Description'] ?></td> 
                                                                        </tr>
                                                                <?php } ?>    
                        									</tbody>
                 									</table>
                                                    
                                                     <h4>Update Followup</h4>
                                                        <!--<p>TIPS Record your customer interaction and set next customer follow-up date & time regularly. You can view follow-up history in above "Follow-up History" tab.</p>-->

														<?php 	$attributes = array('class' => '', 'name'=>'form1', 'id' => 'form1');
                                                                echo form_open_multipart('admin/leads/opration', $attributes); ?>    
                                                                
                                                        <div class="row">
                   											<div class="col-md-6">
                                                            	<div class="form-group">
                    												<label>Change Stage <span class="text-danger">*</span> </label>
                     												<span style="text-align:left; color:#FF0000; font-size:12px;";>
																		<?php echo form_error('followup_status_id'); ?>
                                                                    </span>
                          											<select name="followup_status_id" class="form-control">
                               											<option value="">Select Stage</option>
                               											<?php foreach($leadstatus as $lsvalue) { ?>   
                                   											<option value="<?php echo $lsvalue['Id']; ?>"><?php echo $lsvalue['Title']; ?></option>
                                										<?php } ?>  
                             										</select>
                                                               </div>
                                                            </div>
                                                         <div class="col-md-6">
                                                         	<div class="form-group">
                    											<label>Next Follow-Up Date &amp; Time <span class="text-danger">*</span> </label>
                    											<span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('FollowUpDate'); ?></span>
                    											<input type="text" name="FollowUpDate" id="datepicker3" placeholder="Next Follow-Up Date & Time" value="<?php echo set_value('FollowUpDate'); ?>" class="form-control">
                    										</div>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <div class="form-group">
                                                             <label>Follow-up Comment</label>
                                                                 <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Description'); ?></span>
                                                                <textarea name="Description"  cols="109" class="form-control" placeholder="Follow-up Comment"><?php echo set_value('Description'); ?></textarea>
                                                            </div>
                  										</div>
                                                        <div class="col-md-12" style="margin-top:15px;">
                                                          <div class="text-center">
                                                             <button type="submit" name="smt_enter" class="btn bg-blue">Update</button>
                                                          </div>
                                                        </div>
                                                   </div>
               <?php //print_r($_SESSION); ?>
													<?php 
                                                                
                                                         $LeadID=$lead[0]['LeadID']; 
                                                         $data = array('id'  => $LeadID);
                                                         echo form_hidden($data);
                                                         $data = array('flag'  => 'yes');
                                                         echo form_hidden($data);
                                                         $data = array('LeadID'  => $LeadID);
                                                         echo form_hidden($data);
                                                         $data = array('SubmittedBy'  => 'A');
                                                         echo form_hidden($data);
                                                         $EmloyeeId=$AssignEmpId[0]['EmployeeID'];  // lead assign employee
                                                         $data = array('AssignTo'  => $EmloyeeId);
                                                         echo form_hidden($data);
                                                         $SubmittedById=$name = $this->session->user_id;
                                                         $data = array('SubmittedById'  => $SubmittedById);
                                                         echo form_hidden($data);
                                                         $data = array('ActionFollowup'  => '0');
                                                         echo form_hidden($data);
                                                         $data = array('IsActive'  => 'Y');
                                                         echo form_hidden($data);
                                                         echo form_close(); 
                                                  ?>   
												 <?php //} else { ?> 
                                                      
                                                           <!-- <p class="alert alert-danger alert-dismissable">Sorry No record found.</p> -->
                                                     
                                                 <?php  //} ?>
                                            </div>
                                            <div id="menu2" class="tab-pane fade" style="padding: 10px;">
                                            	<?php 	$attributes = array('class' => '', 'name'=>'form1', 'id' => 'form1');
														echo form_open_multipart('admin/leads/quotation', $attributes);
														if ($assciated[0]['id']==''){ ?>    
											</div>
                                            				<!--<a href="<?php echo base_url('admin/tour_generalinfo/add'); ?>">
                                                            	<button type="button" name="smt_send" class="btn bg-blue">Create Itinerary</button>
                                                            </a>-->
													<?php } elseif ($assciated[0]['TourId']> 0) {  ?>
                                                    	
                                                        <div class="row">
                  											<div class="col-md-4"><b>Tour Title</b></div>
                                                                <div class="col-md-4"><?php echo $assciated[0]['TourName']; ?></div>
                                                                    <div class="col-md-4">
                                                                      <?php echo $assciated[0]['Nights']; ?>  Nights
                                                                      <?php echo $assciated[0]['Days']; ?>  Days
                                                                    </div>
                                                                </div>
                                                                <div class="row">&nbsp;</div>
                                                                	<a href="<?php echo base_url('admin/leadstourspreview/preview?tid='.$assciated[0]['TourId'].'&lid='.$assciated[0]['LeadId']); ?>">
                                                                    	<button type="button" name="smt_send" class="btn bg-blue">Preview Quotation</button>
                                                                    </a>  
                       
                          											<a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$assciated[0]['TourId']); ?>">
                                                                    	<button type="button" name="smt_send" class="btn bg-blue">Edit</button>
                                                                    </a>
                                                                    
                                                                    <a href="<?php echo base_url('admin/tour_generalinfo/delete?id='.$assciated[0]['TourId']); ?>">
                                                                    	<button type="button" name="smt_send" class="btn bg-blue">Delete</button>
                                                                    </a>
																	
													<?php   } ?> 

																	<?php
                                                                     $LeadID=$lead[0]['LeadID']; 
                                                                     $data = array('id'  => $LeadID);
                                                                     echo form_hidden($data);
                                                                     $data = array('LeadId'  => $LeadID);
                                                                     echo form_hidden($data);
                                                                    
                                                                     $data = array('flag'  => 'yes');
                                                                     echo form_hidden($data);
                                                                    
                                                                     $EmloyeeId=$AssignEmpId[0]['EmployeeID'];  // lead assign employee
                                                                     $data = array('AssignTo'  => $EmloyeeId);
                                                                     echo form_hidden($data);
                                                                    
                                                                     $SubmittedById=$name = $this->session->user_id;
                                                                     $data = array('AddedBy'  => $SubmittedById);
                                                                     echo form_hidden($data);
                                                                     
                                                                     $data = array('UserRole'  => 'A');
                                                                     echo form_hidden($data);
                                                       
                                                                    echo form_close(); 
                                                                    ?>
            												</div>
                                                            <div id="menu3" class="tab-pane fade" style="padding: 10px;">
                                                            	<h4>Meetings </h4>
                                                                	<table class="table table-bordered ">
                                                                        <thead>
                                                                            	<tr>
                                                                                    <th>Date/Time </th>
                                                                                    <th>Vanue </th>
                                                                                    <th>Note </th>
                                                                            	</tr>
                                                                        </thead>
																		<?php foreach($meetings as $mval){ ?>
                                                                              <tr>
                                                                              	<td>
																					<?php 
                                                                                        if($mval['MeetingDateTime']!='0000-00-00 00:00:00') {
                                                                                            echo date('d-M-Y / H:s A', strtotime($mval['MeetingDateTime'])); 
                                                                                        } 
                                                                                    ?>
                                                                                </td> 
                                                                                <td><?php echo $mval['MeetingVenue'] ?></td> 
                                                                                <td><?php echo $mval['MeetingNotes'] ?></td> 
                                                                             </tr>
                                                                             <?php } ?>
                                                                      </table>  
                  													<?php                         
																		 $attributes = array('class' => '', 'name'=>'form1', 'id' => 'form1');
																		 echo form_open_multipart('admin/leads/meating', $attributes); 
					   												?>    
               														<hr>
              														<h4>Fix Meeting</h4>
                                                                    <div class="row">
                                                                    	<div class="col-md-6">
                                                                            <div class="form-group">
                                                                            	<label>Date/Time</label>
                                                                                <span style="text-align:left; color:#FF0000; font-size:12px;";>
                                                                                	<?php echo form_error('MeetingDateTime'); ?>
                                                                                 </span>
                                                                               <input type="text" id="datepicker4" name="MeetingDateTime" placeholder="Time" class="form-control" value="<?php echo set_value('MeetingDateTime'); ?>">
                                                                             </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                  															<div class="form-group">
                    															<label>Venue Details</label>
                        															<span style="text-align:left; color:#FF0000; font-size:12px;";>
																						<?php echo form_error('MeetingVenue'); ?>
                                                                                    </span>
                        															<input type="text" name="MeetingVenue" placeholder="Venue Details" class="form-control"  value="<?php echo set_value('MeetingVenue'); ?>">
                  															</div>
                														</div>
                                                                        <div class="col-md-12">
                                                                        	<div class="form-group">
                                                                            	<label>Notes</label>
                                                                             		<span style="text-align:left; color:#FF0000; font-size:12px;";>
																						<?php echo form_error('MeetingNotes'); ?>
                                                                                     </span>
                                                                                    <textarea name="MeetingNotes" class="form-control" placeholder="Notes">
																						<?php echo set_value('MeetingNotes'); ?>
                                                                                    </textarea>
                                                                          	</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                        	<div class="form-group">
                                                                            	<!--<div class="form-check">
                      																<input type="checkbox" name="IsSendMeeting" value="1" class="form-check-input" >
                                                                                    <label class="form-check-label" for="is_send_meeting">
                                                                                         Send Meeting confirmation email to customer ?
                                                                                    </label>
                    															</div>-->
                  															</div>
                                                                            <div class="text-center">
                                                                            	<button type="submit" class="btn bg-blue">Submit</button>
                  															</div>
                                                                       </div>
                                                                  </div>
                                                               		<?php 	 
  
																		 $LeadID=$lead[0]['LeadID']; 
																		 $data = array('id'  => $LeadID);
																		 echo form_hidden($data);
																		 
																	
																		 $data = array('LeadId'  => $LeadID);
																		 echo form_hidden($data);
																		
																		 $data = array('flag'  => 'yes');
																		 echo form_hidden($data);
																		
																		 $EmloyeeId=$AssignEmpId[0]['EmployeeID'];  // lead assign employee
																		 $data = array('AssignTo'  => $EmloyeeId);
																		 echo form_hidden($data);
																		
																		 $SubmittedById=$name = $this->session->user_id;
																		 $data = array('AddedBy'  => $SubmittedById);
																		 echo form_hidden($data);
																		 
																		 $data = array('UserRole'  => 'A');
																		 echo form_hidden($data);
																		
																		echo form_close(); 
              														?>

            												</div>
                                                       </div>
                                                  </div>
                                            </div>
                                        	<br><br><br><br>
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
    
<link rel="stylesheet" href="https://travelhousedelhi.com/assets/css/jquery-ui-timepicker-addon.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://travelhousedelhi.com/assets/css/jquery-ui-timepicker-addon.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://travelhousedelhi.com/assets/js/jquery-ui-timepicker-addon.js"></script>

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
	
	$(function() {
	$('#datetimepicker').datetimepicker('setDate', new Date());
		$( "#datepicker3" ).datetimepicker({
			dateFormat: "dd-mm-yy",
			timeFormat: 'HH:mm:ss',
			//showOn: "both",
           // buttonImage: "images/calendar.gif",
			changeMonth: true,
            changeYear: true,
            buttonImageOnly: true
		});
	});
	
   
   $(function() {
	$('#datetimepicker').datetimepicker('setDate', new Date());
		$( "#datepicker4" ).datetimepicker({
			dateFormat: "dd-mm-yy",
			timeFormat: 'HH:mm:ss',
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