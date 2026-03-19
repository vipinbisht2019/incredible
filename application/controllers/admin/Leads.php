<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Leads extends MY_controller {
// ------------------------------------ check valid users ------------------------------------------------------------------- leads
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		       $this->load->model('admin/Leadsmanage');
		   
		       /* $this->load->library('pagination');
				$config['base_url'] = base_url('admin/leads/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Leadsmanage->get_tatal();
			//---------------------------- optional parameters of paging  ---------------------------------------------------	
				$config['full_tag_open'] = '<ul class="pagination pull-right">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = 'First';
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';
				$config['last_link'] = 'Last';
                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
				$config['next_link'] = 'Next &gt;';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['prev_link'] = '&lt; Prev';
				$config['prev_tag_open'] = '<li>';
				$config['prev_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
				$this->pagination->initialize($config); 
	            $offset=$this->uri->segment(4);*/
				
		       // $data['leads']=$this->Leadsmanage->leads_view($config['per_page'] , $offset);
			    $data['leads']=$this->Leadsmanage->leads_view();
				$data['employee']=$this->Leadsmanage->get_employee_dropdown();  
			    $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown();  
				$data['lead_status']=$this->Leadsmanage->get_lead_status();
				$data['getFileNoList']=$this->Leadsmanage->getFileNoList();
				 
			    $this->load->view('admin/leads_view',$data);
		}
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function search()
	  {
		         $this->load->model('admin/Leadsmanage');
			//---------------------------------------- get posted parameter -----------------------------------------------
				 $Employee=$this->input->post('Employee');
				 $LeadStatus=$this->input->post('LeadStatus');
				 $TravelDate=$this->input->post('TravelDate');
				 $SerachOption=$this->input->post('SerachOption');
				 $Keyword=$this->input->post('Keyword');
		    //---------------------------------------------------------------------------------------------------------------
				 $this->load->library('pagination');
				 $config['base_url'] = base_url('admin/leads/view');
				 $config['per_page'] = 100; 
				 $config['total_rows'] =$this->Leadsmanage->get_tatal_search($Employee,$LeadStatus,$TravelDate, $SerachOption,$Keyword);
			//---------------------------- optional parameters of paging  ---------------------------------------------------	
				$config['full_tag_open'] = '<ul class="pagination pull-right">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = 'First';
				$config['first_tag_open'] = '<li>';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = 'Last';
				$config['last_tag_open'] = '<li>';
				$config['last_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['next_link'] = 'Next &gt;';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['prev_link'] = '&lt; Prev';
				$config['prev_tag_open'] = '<li>';
				$config['prev_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li class="active"><a href="#">';
				$config['cur_tag_close'] = '</a></li>';
				$this->pagination->initialize($config); 
				$offset=$this->uri->segment(4);
				
				$data['leads']=$this->Leadsmanage->leads_view_search($config['per_page'], $offset, $Employee, $LeadStatus, $TravelDate, $SerachOption, $Keyword);
				$data['employee']=$this->Leadsmanage->get_employee_dropdown();  
				$data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown();  
				$data['lead_status']=$this->Leadsmanage->get_lead_status(); 
				$this->load->view('admin/leads_view',$data);
		 
		   
		  
	  }
	  
	  
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
		 
	  if($this->input->post('flag')=='yes') 
		   {
		   
		   			//echo '<pre>';print_r($_POST); die;
					
		               $this->load->model('admin/Leadsmanage');
		       // -------------------------- form vaildation ---------------------------------------
		                $this->load->library('form_validation');
						$this->form_validation->set_rules('Name', 'name', 'required');
						$this->form_validation->set_rules('Email', 'email', 'required|valid_email');
					    $this->form_validation->set_rules('ContactNumber', 'contact number.', 'required');
						$this->form_validation->set_rules('TravelDate', 'travel date', 'required');
						$this->form_validation->set_rules('LeadType', 'lead type', 'required');
						$this->form_validation->set_rules('LeadSourseId', 'lead source', 'required');
						//$this->form_validation->set_rules('fit', 'fit', 'min_length[1]|max_length[2]');
				
				  if($this->form_validation->run() == true) 
		              {
						  
						      $data=$this->input->post();
						//------------------------------------ check file select or not and upload --------------------------
						//------------------------------------ END Upload ---------------------------------------------------  
							  unset($data['flag']);
							  unset($data['smt_enter']);
							  unset($data['TravelDate']);
							 
						//------------------------------------------change date formate-------------------------------------------------------  
							 
							  $travelDateArr=explode("-",$this->input->post('TravelDate'));    
					    	  $travelDateArrStr=$travelDateArr['2']."-".$travelDateArr['1']."-".$travelDateArr['0'];
	//-------------------------------------------------------------------------------------------------
							
							  $data['TravelDate']=$travelDateArrStr;
							  
	 //--------------------------------- add leads data --------------------------------------------------
							  $insert=$this->Leadsmanage->leads_add($data);
							  //print_r($insert); die;if($tour_id['lastid']>0)
							  if($insert['lastid'] > 0)
								  {
								  	
									$this->session->set_flashdata('leads', 'Records added successfully');
									redirect(base_url('admin/leads/view'));
								  }
						
					    }
					  else
					    {  
						 
						  $this->load->model('admin/Leadsmanage');  // 
						  $data['leads_category']=$this->Leadsmanage->get_category_dropdown();  
						  $data['leads_leadsource']=$this->Leadsmanage->get_leadsource_dropdown(); 
						  $data['leads_mealplan']=$this->Leadsmanage->get_mealplan_dropdown(); 
						  $data['leads_flight']=$this->Leadsmanage->get_flight_dropdown(); 
						  $data['leads_employee']=$this->Leadsmanage->get_employee_dropdown(); 
						  $data['country_list']=$this->Leadsmanage->country_list();
						  $data['state_list']=$this->Leadsmanage->state_list();
						  $data['city_list']=$this->Leadsmanage->city_list();
						  $data['assignUserList']=$this->Leadsmanage->assignUserList();
						  $this->load->view('admin/leads_add',$data);
					    }  			
				
		     }
		    else
		      {
			                $this->load->model('admin/Leadsmanage');
			                $data['leads_category']=$this->Leadsmanage->get_category_dropdown();  
						    $data['leads_leadsource']=$this->Leadsmanage->get_leadsource_dropdown(); 
						    $data['leads_mealplan']=$this->Leadsmanage->get_mealplan_dropdown(); 
						    $data['leads_flight']=$this->Leadsmanage->get_flight_dropdown(); 
						    $data['leads_employee']=$this->Leadsmanage->get_employee_dropdown(); 
							$data['country_list']=$this->Leadsmanage->country_list();
							$data['state_list']=$this->Leadsmanage->state_list();
							$data['city_list']=$this->Leadsmanage->city_list();
							$data['assignUserList']=$this->Leadsmanage->assignUserList();
						    $this->load->view('admin/leads_add',$data);
			   }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  hoteltypeId 
public function edit()
   {
   
   
	       $this->load->model("admin/Leadsmanage");
		   if($this->input->post('flag')=='yes') 
		     {
					    $this->load->library('form_validation');
						$this->form_validation->set_rules('Name', 'name', 'required');
						$this->form_validation->set_rules('Email', 'email', 'required|valid_email');
					    $this->form_validation->set_rules('ContactNumber', 'contact number.', 'required');
						$this->form_validation->set_rules('TravelDate', 'travel date', 'required');
						$this->form_validation->set_rules('LeadType', 'lead type', 'required');
						$this->form_validation->set_rules('LeadSourseId', 'lead source', 'required');
						$id=$this->input->post('id');
					 // $EmailID=$this->input->post('EmailID');  && $is_duplicate==1 && $is_duplicate_eamil==1
					 // $is_duplicate_eamil=$this->Leadsmanage->check_duplicate_edit('EmailID', $EmailID,$id);
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$this->input->post();
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 unset($data['TravelDate']);
						//------------------------------------------change date formate-------------------------------------------------------  
						
							  $travelDateArr=explode("-",$this->input->post('TravelDate'));    
					    	  $travelDateArrStr=$travelDateArr['2']."-".$travelDateArr['1']."-".$travelDateArr['0'];
					   //-------------------------------------------------------------------------------------------------
							
							  $data['TravelDate']=$travelDateArrStr;
							  $Edit=$this->Leadsmanage->leads_edit_data($data,$id);
						      $this->session->set_flashdata('leads', 'Records updated successfully');
						      redirect(base_url('admin/leads/view'));
					  }
					 else
					  {
					        
					        $data['edit_leads']=$this->Leadsmanage->leads_edit($id); 
							$data['leads_category']=$this->Leadsmanage->get_category_dropdown();  
							$data['leads_leadsource']=$this->Leadsmanage->get_leadsource_dropdown(); 
							$data['leads_mealplan']=$this->Leadsmanage->get_mealplan_dropdown(); 
							$data['leads_flight']=$this->Leadsmanage->get_flight_dropdown(); 
							$data['leads_employee']=$this->Leadsmanage->get_employee_dropdown(); 
							$data['country_list']=$this->Leadsmanage->country_list();
							$data['state_list']=$this->Leadsmanage->state_list();
							$data['city_list']=$this->Leadsmanage->city_list();
							$data['assignUserList']=$this->Leadsmanage->assignUserList();
						    $this->load->view('admin/leads_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
							$id=$this->input->get('id');
							$data['edit_leads']=$this->Leadsmanage->leads_edit($id); 
							$data['leads_category']=$this->Leadsmanage->get_category_dropdown();  
							$data['leads_leadsource']=$this->Leadsmanage->get_leadsource_dropdown(); 
							$data['leads_mealplan']=$this->Leadsmanage->get_mealplan_dropdown(); 
							$data['leads_flight']=$this->Leadsmanage->get_flight_dropdown(); 
							$data['leads_employee']=$this->Leadsmanage->get_employee_dropdown(); 
							$data['country_list']=$this->Leadsmanage->country_list();
							$data['state_list']=$this->Leadsmanage->state_list();
							$data['city_list']=$this->Leadsmanage->city_list();
							$data['assignUserList']=$this->Leadsmanage->assignUserList();
							$this->load->view('admin/leads_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------	
		 	  
   public function bulk_action()
	     {
		    					
											   
						   $this->load->library('form_validation');
						   $this->form_validation->set_rules('Employee', 'employee', 'required');
					   //-------------------------------------------------------------------------------
					     if(($this->input->post('Asign')=='Assign Leads') && ($this->form_validation->run() == true))
						     {
									//print_r($_POST); die;
										$LeadArr=$this->input->post('bb');
										$EmployeeID=$this->input->post('Employee');
										$AssignDate=date('Y-m-d H:i:s');
						       			$this->load->model('admin/Leadsmanage');
									 	foreach($LeadArr as $leadid)
										  {
												$data['LeadID']=$leadid;
												$data['EmployeeID']=$EmployeeID;
												$data['AssignDate']=$AssignDate;
												$data['UpdatebyEmployee']='N';
												if($this->Leadsmanage->check_lead_assined('LeadID', $leadid)==1)
													{
													  $delete_sussess=$this->Leadsmanage->leads_assign($data);
													} 
										  }	
										
										$this->session->set_flashdata('leads', 'Records assigned successfully');
									    redirect(base_url('admin/leads/view'));
									
									 
							}
						  else
						    {
						               $this->session->set_flashdata('leads', 'Please select employee to assign lead');
									   redirect(base_url('admin/leads/view'));
						    }			 
				
		
		  }

		  //  ------------ delete lead's assocteted tours -------------------------------------

		  public function deletetour($leadId,$TourId)
		     {

		     }
		  
//----------------------------------------  View deatil and oparation ------------------------------------------ 	  
//----------------------------------------  View deatil and oparation ------------------------------------------ 	  
//----------------------------------------  View deatil and oparation ------------------------------------------ 	  
//----------------------------------------  View deatil and oparation ------------------------------------------ 	  
//----------------------------------------  View deatil and oparation ------------------------------------------	
  /**
	*
	*  Lead deatils 
	*
   */
  
		      public function opration()
			     {
			     	     error_reporting(0);					 
						 if($this->input->post('flag')=='yes') 
							 {

								// print_r($_POST); die;
									 $this->load->model('admin/Leadsmanage');
									 $id=$this->input->post('id');
									// -------------------------- form vaildation ---------------------------------------
									$this->load->library('form_validation');
									$this->form_validation->set_rules('followup_status_id', 'lead status', 'required');
									$this->form_validation->set_rules('FollowUpDate', 'follow up date', 'required');
									$this->form_validation->set_rules('Description', 'description', 'required');
									if($this->form_validation->run() == true) 
										 {
													 $data=$this->input->post();
												   //------------------------------------ check file select or not and upload --------------------------
												   //------------------------------------ END Upload ---------------------------------------------------  
													  unset($data['flag']);
													  unset($data['smt_enter']);
													  unset($data['DateTime']);
													  unset($data['followup_status_id']);
													  unset($data['id']);
											
												    //------------------------------------------change date formate-------------------------------------------------------  
												       $DateTime=$this->input->post('FollowUpDate');
													   $TimeArr=explode(" ",$DateTime); 
													   $DateTimeArr=explode("-",$TimeArr[0]); 
													   $FollowUpDateStr=$DateTimeArr['2']."-".$DateTimeArr['1']."-".$DateTimeArr['0']." ".$TimeArr[1];
													//--------------------------------------------------------------------------------------------------------------------
													   $data['FollowUpDate']=$FollowUpDateStr; 
													   $data['DateTime']=date('Y-m-d H:i:s'); 
													   $data['LeadID']=$id;
													   $data['StatusId']=$this->input->post('followup_status_id');
												   //--------------------------------- add leads data -------------------------------------------------------------------
												       $insert=$this->Leadsmanage->leads_followup_add($data);
												    //----------------------------------- update lead status / stage -----------------------------------------------------
												       $data_update['LeadStatusID']=$this->input->post('followup_status_id');
													   $data_update['FollowUpDate']=$FollowUpDateStr;
													//--------------------------------------------------------------------------------------------------------------------  
													   $this->Leadsmanage->leads_edit_data($data_update,$id);
													   
													  
												   if($insert > 0)
													   {
														 $this->session->set_flashdata('leads', 'Follow-Up added successfully');
														 redirect(base_url('admin/leads/opration?id='.$id));
													   }   
										 }
										else
										 { 
										     	$data['id']=$_POST;
												$this->load->model('admin/Leadsmanage');
												$data['lead']=$this->Leadsmanage->get_lead_details($id); 
												$CategoryId=$data['lead'][0]['TravelTypeId'];
												$data['TravelType']=$this->Leadsmanage->get_category($CategoryId); 
												$LeadSourseId=$data['lead'][0]['LeadSourseId'];
												$data['LeadSourse']=$this->Leadsmanage->get_leadsource($LeadSourseId); 
												$MealPlanId=$data['lead'][0]['MealPlanId'];
												$data['MealPlan']=$this->Leadsmanage->get_mealplan($MealPlanId); 
												$FlightStatusId=$data['lead'][0]['FlightStatusId'];
												$data['FlightStatus']=$this->Leadsmanage->get_flight($FlightStatusId); 
												$LeadStatusID=$data['lead'][0]['LeadStatusID'];
												$data['LeadStatus']=$this->Leadsmanage->get_leadstatus($LeadStatusID); 
												$data['Assign']=$this->Leadsmanage->get_assined_employee($id); 
												$data['AssignEmpId']=$this->Leadsmanage->get_asignemp_id($id);
												//-------------------------- lead status ---------------------------------------------------
												//----------------------------follow up ----------------------------------------------------
								                   $data['followups']=$this->Leadsmanage->get_lead_followup_log($id)  ;
						                        //----------------------------------meatings -----------------------------------------------  
							                       $data['meetings']=$this->Leadsmanage->get_meeting($id);  
								                   $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
												//-----------------------------------send --------------------------------------------------  
												   $data['tourscategory']=$this->Leadsmanage->get_tours_category_dropdown(); 
												   $this->load->view('admin/leads_details',$data); // get_tours_category_dropdown()
										 } 
													   
							 
							 }
						   else
							 {
								   $id=$this->input->get('id');
								   $data['id']=$_POST;
								   $this->load->model('admin/Leadsmanage');
								   $data['lead']=$this->Leadsmanage->get_lead_details($id); 
								   $CategoryId=$data['lead'][0]['TravelTypeId'];
								   $data['TravelType']=$this->Leadsmanage->get_category($CategoryId); 
								   $LeadSourseId=$data['lead'][0]['LeadSourseId'];
								   $data['LeadSourse']=$this->Leadsmanage->get_leadsource($LeadSourseId); 
								   $MealPlanId=$data['lead'][0]['MealPlanId'];
								   $data['MealPlan']=$this->Leadsmanage->get_mealplan($MealPlanId); 
								   $FlightStatusId=$data['lead'][0]['FlightStatusId'];
								   $data['FlightStatus']=$this->Leadsmanage->get_flight($FlightStatusId); 
								   $LeadStatusID=$data['lead'][0]['LeadStatusID'];
								   $data['LeadStatus']=$this->Leadsmanage->get_leadstatus($LeadStatusID); 
								   $data['Assign']=$this->Leadsmanage->get_assined_employee($id); 
								   $data['AssignEmpId']=$this->Leadsmanage->get_asignemp_id($id); 
							 //-------------------------- lead status ---------------------------------------------------
								   $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
							 //----------------------------follow up ----------------------------------------------------
								   $data['followups']=$this->Leadsmanage->get_lead_followup_log($id)  ;
							 //----------------------------------meatings -----------------------------------------------  
							      $data['meetings']=$this->Leadsmanage->get_meeting($id); 
								  $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
							 //-------------------- send --------------------------------------------------  
								  $data['tourscategory']=$this->Leadsmanage->get_tours_category_dropdown(); 
						     // check any tour is associted or not 	
						          $data['assciated']=$this->Leadsmanage->check_lead_tour($id);	   
								   $this->load->view('admin/leads_details',$data);


							  } 	 
			     }
		  
		  
		  //-------------------------------------------------------- leads meatings ---------------------------------------------------------------------------
		  //-------------------------------------------------------- leads meatings ---------------------------------------------------------------------------  
		  //-------------------------------------------------------- leads meatings ---------------------------------------------------------------------------
		  
			 public function meating()
	            {
				
				           
						 if($this->input->post('flag')=='yes') 
							 {
									 $this->load->model('admin/Leadsmanage');
									 $id=$this->input->post('id');
									// -------------------------- form vaildation ---------------------------------------
									$this->load->library('form_validation');
									$this->form_validation->set_rules('MeetingVenue', 'meeting venue', 'required');
									$this->form_validation->set_rules('MeetingDateTime', 'meeting date & time', 'required');
									$this->form_validation->set_rules('MeetingNotes', 'meeting notes', 'required');
									if($this->form_validation->run() == true) 
										 {
													 $data=$this->input->post();
												   //------------------------------------ check file select or not and upload --------------------------
												   //------------------------------------ END Upload ---------------------------------------------------  
													  unset($data['flag']);
													  unset($data['smt_enter']);
													  unset($data['id']);
											
												    //------------------------------------------change date formate-------------------------------------------------------  
												       $MeetingDateTime=$this->input->post('MeetingDateTime');
													   $TimeArr=explode(" ",$MeetingDateTime); 
													   $DateTimeArr=explode("-",$TimeArr[0]); 
													   $MeetingDateStr=$DateTimeArr['2']."-".$DateTimeArr['1']."-".$DateTimeArr['0']." ".$TimeArr[1];
													//--------------------------------------------------------------------------------------------------------------------
													   $data['MeetingDateTime']=$MeetingDateStr; 
													   $data['AddedDate']=date('Y-m-d H:i:s'); 
												   //--------------------------------- add leads data -------------------------------------------------------------------
												       $insert=$this->Leadsmanage->set_meeting($data);
												  
													   
													  
												   if($insert > 0)
													   {
														 $this->session->set_flashdata('leads', 'Meeting added successfully');
														 redirect(base_url('admin/leads/opration?id='.$id));
													   }   
										 }
										else
										 { 
										     	$data['id']=$_POST;
												$this->load->model('admin/Leadsmanage');
												$data['lead']=$this->Leadsmanage->get_lead_details($id); 
												$CategoryId=$data['lead'][0]['TravelTypeId'];
												$data['TravelType']=$this->Leadsmanage->get_category($CategoryId); 
												$LeadSourseId=$data['lead'][0]['LeadSourseId'];
												$data['LeadSourse']=$this->Leadsmanage->get_leadsource($LeadSourseId); 
												$MealPlanId=$data['lead'][0]['MealPlanId'];
												$data['MealPlan']=$this->Leadsmanage->get_mealplan($MealPlanId); 
												$FlightStatusId=$data['lead'][0]['FlightStatusId'];
												$data['FlightStatus']=$this->Leadsmanage->get_flight($FlightStatusId); 
												$LeadStatusID=$data['lead'][0]['LeadStatusID'];
												$data['LeadStatus']=$this->Leadsmanage->get_leadstatus($LeadStatusID); 
												$data['Assign']=$this->Leadsmanage->get_assined_employee($id); 
												$data['AssignEmpId']=$this->Leadsmanage->get_asignemp_id($id);
												//-------------------------- lead status ---------------------------------------------------
								                 $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown();
											    //----------------------------------meatings -----------------------------------------------  
							                      $data['meetings']=$this->Leadsmanage->get_meeting($id);  
												  $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
												//-----------------------------------send --------------------------------------------------  
								                  $data['tourscategory']=$this->Leadsmanage->get_tours_category_dropdown(); 
								                   // check any tour is associted or not 	
						                         $data['assciated']=$this->Leadsmanage->check_lead_tour($id);	  
												  $this->load->view('admin/leads_details',$data);
										 } 
													   
							 
							 }
						   else
							 {
								   $id=$this->input->get('id');
								   $data['id']=$_POST;
								   $this->load->model('admin/Leadsmanage');
								   $data['lead']=$this->Leadsmanage->get_lead_details($id); 
								   $CategoryId=$data['lead'][0]['TravelTypeId'];
								   $data['TravelType']=$this->Leadsmanage->get_category($CategoryId); 
								   $LeadSourseId=$data['lead'][0]['LeadSourseId'];
								   $data['LeadSourse']=$this->Leadsmanage->get_leadsource($LeadSourseId); 
								   $MealPlanId=$data['lead'][0]['MealPlanId'];
								   $data['MealPlan']=$this->Leadsmanage->get_mealplan($MealPlanId); 
								   $FlightStatusId=$data['lead'][0]['FlightStatusId'];
								   $data['FlightStatus']=$this->Leadsmanage->get_flight($FlightStatusId); 
								   $LeadStatusID=$data['lead'][0]['LeadStatusID'];
								   $data['LeadStatus']=$this->Leadsmanage->get_leadstatus($LeadStatusID); 
								   $data['Assign']=$this->Leadsmanage->get_assined_employee($id); 
								   $data['AssignEmpId']=$this->Leadsmanage->get_asignemp_id($id); 
							 //-------------------------- lead status ---------------------------------------------------
								   $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
							 //----------------------------follow up ----------------------------------------------------
								   $data['followups']=$this->Leadsmanage->get_lead_followup_log($id)  ;
							 //----------------------------------meatings -----------------------------------------------  
							       $data['meetings']=$this->Leadsmanage->get_meeting($id);  
								   $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
							 //-----------------------------------send --------------------------------------------------  
								   $data['tourscategory']=$this->Leadsmanage->get_tours_category_dropdown(); 
								    // check any tour is associted or not 	
						          $data['assciated']=$this->Leadsmanage->check_lead_tour($id);	
								   $this->load->view('admin/leads_details',$data);
							  } 
				
				}
		         
				 
		    //---------------------- leads meatings ------------------------------
		    //---------------------- leads meatings ------------------------------  
		    //---------------------  leads meatings ------------------------------
			 public function quotation()
	            {
				    
				     if($this->input->post('flag')=='yes') 
							 {
							     	 $this->load->model('admin/Leadtoursmanage');
									 $id=$this->input->post('id');
							   // -------------------------- form vaildation ---------------------------------------
									$this->load->library('form_validation');
									$this->form_validation->set_rules('TourCategoriesId', 'tour category', 'required');
									$this->form_validation->set_rules('TourId', 'tour', 'required');
									if($this->form_validation->run() == true) 
										 {
													 $data=$this->input->post();
													 $LeadId=$this->input->post('LeadId');
													 $TourId=$this->input->post('TourId');
			// 1. ----------------------------- update tours general info ---------------------------------------	 
								  $data_general_info=$this->Leadtoursmanage->tourgeneral_select_info($TourId); 
							      $data_general_info[0]['LeadId']=$LeadId;
								  unset($data_general_info[0]['TourId']);
								    //--insert general info 

                                $LTourId=$this->Leadtoursmanage->tourgeneral_insert_info($data_general_info[0]); 
                                   // images select
								  $data_image=$this->Leadtoursmanage->tour_select_images($TourId);
                                    //insert images
								 $images=$this->Leadtoursmanage->tours_images_add($data_image ,$LTourId);
                                   $LTourId=80;
								  

          // 2. -----------------------------  update price and destination ---------------------------------- 	
								 $data_location=$this->Leadtoursmanage->tours_location_select($TourId);  
                                  // insert locations
							   $locations=$this->Leadtoursmanage->tours_location_insert($data_location,$LTourId); 
                                   
												  
		// 3. ----------------------------- inclusion & exclusion ----------------------------------
								 $data_inclusion=$this->Leadtoursmanage->inclusion_select($TourId);   
								 $data_exclusion=$this->Leadtoursmanage->exclusion_select($TourId);	 
								   // insert inclusion // insert exclusion
               $inex=$this->Leadtoursmanage->inc_exc_insert_data($data_inclusion,$data_exclusion,$data,$LTourId);
              
                     
                                          
		 // 4. -----------------------------  Itinerary ---------------------------------------------- 
								 $data_itinerary=$this->Leadtoursmanage->tour_itinerary_select($TourId);	
								 //-- insert itenary
						$insert_itinerary=$this->Leadtoursmanage->tour_itinerary_insert($data_itinerary, $LTourId);
								  
								  
     	// 5. -----------------------------  Hotel ----------------------------------------
			                     $data_hotel=$this->Leadtoursmanage->tour_hotel_select($TourId);	 
			                     // insert hotel
								$insert_hotel=$this->Leadtoursmanage->tour_hotels_insert($data_hotel,$LTourId);

		// 6. -----------------------------  Sightseeings ---------------------------------
			                    $data_sightseeing=$this->Leadtoursmanage->tour_sightseeing_select($TourId);	
			                    // insert data
			            $insert_sightseeing=$this->Leadtoursmanage->tour_sight_insert($data_sightseeing, $LTourId);
			                        
  	  // 7. -----------------------------  Transfers -------------------------------------------	 
								$data_transfer=$this->Leadtoursmanage->tour_transfer_select($TourId);
                            // --- insert transfer
						 $insert_transfer=$this->Leadtoursmanage->tour_transfer_insert($data_transfer, $LTourId);
       // 8. -----------------------------  Flight ----------------------------------------------	 
								$data_flight=$this->Leadtoursmanage->tour_flight_select($TourId);	
							// insert flight 
						$insert_flight = $this->Leadtoursmanage->tour_flight_insert($data_flight, $LTourId);
							  	

		   // 9. ------------------------------- Train -----------------------------------------------	
								 $data_train=$this->Leadtoursmanage->tour_train_select($TourId);
						// ------- insert train data
						   $insrt_train=$this->Leadtoursmanage->tour_train_insert($data_train, $LTourId);
						       		
			// 10. ------------------------------- Bus ---------------------------------------------------------	
								$data_bus=$this->Leadtoursmanage->tour_bus_select($TourId);
                             // insert bus data   
						      $insert_bus=$this->Leadtoursmanage->tour_bus_insert($data_bus, $LTourId);	

			// 11. --------------- Costing ------------------------------------------------------------
												
											   
			// 12. ------------------------------- Cansllation Policy ------------------------------------------
								 $data_polc=$this->Leadtoursmanage->get_tour_cancellationpolicy($TourId);
								 $data_term=$this->Leadtoursmanage->get_tour_termconditions($TourId);
							// insert data
			   $insert_term=$this->Leadtoursmanage->terms_polc_insert_data($data_term, $data_polc, $LTourId);	

			         // die("--------insert_term---");  

					//----------------------- END Upload ---------------------------------------------------  
													  unset($data['flag']);
													  unset($data['smt_enter']);
													  unset($data['id']);
				 //-------------------- add leads data  ---------------------------------------------------
												  // $insert=$this->Leadsmanage->set_meeting($data);
									          $this->session->set_flashdata('leads', 'Tour Assciated  successfully');
											  redirect(base_url('admin/leads/opration?id='.$id));
													    
										 }
										else
										 { 
										     	    $id=$this->input->post('id');
												    $data['id']=$_POST;
												    $this->load->model('admin/Leadsmanage');
													$data['lead']=$this->Leadsmanage->get_lead_details($id); 
													$CategoryId=$data['lead'][0]['TravelTypeId'];
													$data['TravelType']=$this->Leadsmanage->get_category($CategoryId); 
													$LeadSourseId=$data['lead'][0]['LeadSourseId'];
													$data['LeadSourse']=$this->Leadsmanage->get_leadsource($LeadSourseId); 
													$MealPlanId=$data['lead'][0]['MealPlanId'];
													$data['MealPlan']=$this->Leadsmanage->get_mealplan($MealPlanId); 
													$FlightStatusId=$data['lead'][0]['FlightStatusId'];
													$data['FlightStatus']=$this->Leadsmanage->get_flight($FlightStatusId); 
													$LeadStatusID=$data['lead'][0]['LeadStatusID'];
													$data['LeadStatus']=$this->Leadsmanage->get_leadstatus($LeadStatusID); 
													$data['Assign']=$this->Leadsmanage->get_assined_employee($id); 
													$data['AssignEmpId']=$this->Leadsmanage->get_asignemp_id($id); 
													//-------------------------- lead status ---------------------------------------------------
													$data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
													//----------------------------follow up ----------------------------------------------------
													$data['followups']=$this->Leadsmanage->get_lead_followup_log($id)  ;
													//----------------------------------meatings -----------------------------------------------  
													$data['meetings']=$this->Leadsmanage->get_meeting($id);  
													$data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
													//-----------------------------------send --------------------------------------------------  
													$data['tourscategory']=$this->Leadsmanage->get_tours_category_dropdown(); 
													$data['leads_tours']=$this->Leadsmanage->get_leads_tours_dropdown();
													 // check any tour is associted or not 	
						                           $data['assciated']=$this->Leadsmanage->check_lead_tour($id);	
													$this->load->view('admin/leads_details',$data);
										 } 
							  }
						    else
							  {
							       //die("--------------------------------------------");
								   $id=$this->input->post('id');
								   $data['id']=$_POST;
								   $this->load->model('admin/Leadsmanage');
								   $data['lead']=$this->Leadsmanage->get_lead_details($id); 
								   $CategoryId=$data['lead'][0]['TravelTypeId'];
								   $data['TravelType']=$this->Leadsmanage->get_category($CategoryId); 
								   $LeadSourseId=$data['lead'][0]['LeadSourseId'];
								   $data['LeadSourse']=$this->Leadsmanage->get_leadsource($LeadSourseId); 
								   $MealPlanId=$data['lead'][0]['MealPlanId'];
								   $data['MealPlan']=$this->Leadsmanage->get_mealplan($MealPlanId); 
								   $FlightStatusId=$data['lead'][0]['FlightStatusId'];
								   $data['FlightStatus']=$this->Leadsmanage->get_flight($FlightStatusId); 
								   $LeadStatusID=$data['lead'][0]['LeadStatusID'];
								   $data['LeadStatus']=$this->Leadsmanage->get_leadstatus($LeadStatusID); 
								   $data['Assign']=$this->Leadsmanage->get_assined_employee($id); 
								   $data['AssignEmpId']=$this->Leadsmanage->get_asignemp_id($id); 
							 //-------------------------- lead status ---------------------------------------------------
								   $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
							 //----------------------------follow up ----------------------------------------------------
								   $data['followups']=$this->Leadsmanage->get_lead_followup_log($id)  ;
							 //----------------------------------meatings -----------------------------------------------  
							       $data['meetings']=$this->Leadsmanage->get_meeting($id);  
								   $data['leadstatus']=$this->Leadsmanage->get_leadstatus_dropdown(); 
							 //-----------------------------------send --------------------------------------------------  
								   $data['tourscategory']=$this->Leadsmanage->get_tours_category_dropdown(); 
								   $data['leads_tours']=$this->Leadsmanage->get_leads_tours_dropdown();
								    // check any tour is associted or not 	
						          $data['assciated']=$this->Leadsmanage->check_lead_tour($id);	
								   $this->load->view('admin/leads_details',$data);
							  } 
				
				}
    //------------------ Select Tour Pakage According to Category ---------------------  
		   public function tourpackage()
			  {
			      $this->load->model('admin/Leadsmanage');
				  $catid=$this->input->post('catid');
				  $data['catid']=$catid;
				  $data['leads_tours']=$this->Leadsmanage->get_leads_tours_dropdown();
				  $this->load->view('admin/leads_tours',$data);
			 
			  }    
	  
			// public function countryadd(){

			// 	print_r($_POST);

			// }
	  
}

?>
