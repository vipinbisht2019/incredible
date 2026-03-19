<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_generalinfo extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Tour_generalinfomanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/tour_generalinfo/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Tour_generalinfomanage->get_tatal();
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
	            $offset=$this->uri->segment(3);
				
		       $data['getShortITIInfo']=$this->Tour_generalinfomanage->getShortITIInfoViewList();
		       $this->load->view('admin/tour_generalinfo_view',$data);
	 	  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
  	if($this->input->post('flag')=='yes') 
		   {
				//print_r($_POST); die;
		      // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('ItineraryPrepared', 'ItineraryPrepared', 'required');
				$this->form_validation->set_rules('ItineraryTitle', 'ItineraryTitle', 'required');
				
				
			 	if($this->form_validation->run() == true) 
		             {
						   	$this->load->model('admin/Tour_generalinfomanage');
							$data=$_POST;
							$data1 = array();
			
							$toDate = $this->input->post('TourStartDate');
							$fromDate = $this->input->post('TourEndDate');
							 
							$toDate1 = date('Y-m-d', strtotime($toDate));
							$fromDate2 = date('Y-m-d', strtotime($fromDate));				 
							
							@array_push($data['TourStartDate'] = $toDate1);
							@array_push($data['TourEndDate'] = $fromDate2);
							
							unset($data['flag']);
							unset($data['ContactName']);
							unset($data['ContactMobile']);
							unset($data['ContactEmail']);
							unset($data['smt_enter']); 
							unset($data['smt_enter_nxt']);
							
							
							$tour_id=$this->Tour_generalinfomanage->generalinfo_add($data);
							
							if($tour_id['lastid']>0)
							 {
							     //--------------------Add Contact Details---------------------------------------------------//
								 
								 $ContactName=$this->input->post('ContactName');
								 $ContactMobile=$this->input->post('ContactMobile');
								 $ContactEmail=$this->input->post('ContactEmail');
								 
								 error_reporting(0);
								 
								 array_push(@$data1['ContactName']=@$ContactName,'');
								 array_push(@$data1['ContactMobile']=@$ContactMobile,'');
								 array_push(@$data1['ContactEmail']=@$ContactEmail,''); 
								 
								
								 if(count($data1) > 0)
								     { 
								      
									   $this->Tour_generalinfomanage->short_iti_contact($data1,$tour_id['lastid'],'no');  
									 } 
								 
								  
							       $this->session->set_flashdata('Short ITI', 'Records added successfully');
								   if($this->input->post('smt_enter')!='')
								      {
								       redirect(base_url('admin/leads/opration?id='.$tour_id['leadId']));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_itinerary/edit?TourId='.$tour_id['lastid']));   
									  } 
							 }
						
					   }
					 else
					   {
					   
							$this->load->model('admin/Tour_generalinfomanage');
							$id=$this->input->get('id');
							$data['id']=$id;
							//$data['tour_category_dropdown']=$this->Tour_generalinfomanage->category_dropdown();
							error_reporting(0);
							$data['lead_info'] = $this->Tour_generalinfomanage->getLeadInfo();
							$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
							$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
							$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
							$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
							$this->load->view('admin/tour_generalinfo_add',$data);
					   }  			
				
		     }
		   else
		     {   
			 			
						$this->load->model('admin/Tour_generalinfomanage');
						$id=$this->input->get('id');
						$data['id']=$id;
						error_reporting(0);
						$data['lead_info'] = $this->Tour_generalinfomanage->getLeadInfo($id);
						$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
						$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
						$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
						$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
						$this->load->view('admin/tour_generalinfo_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Tour_generalinfomanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
						//print_r($_POST); die;			 
			 
			         	$id=$this->input->post('id');
						$this->load->library('form_validation');
						$this->form_validation->set_rules('ItineraryPrepared', 'ItineraryPrepared', 'required');
						$this->form_validation->set_rules('ItineraryTitle', 'ItineraryTitle', 'required');
						
			
					if($this->form_validation->run() == true) 
					  {
				  
						 $data=$_POST;
						 $data1 = array();
						 
						 $toDate = $this->input->post('TourStartDate');
						 $fromDate = $this->input->post('TourEndDate');
						 
						$toDate1 = date('Y-m-d', strtotime($toDate));
						$fromDate2 = date('Y-m-d', strtotime($fromDate));				 
						
						@array_push($data['TourStartDate'] = $toDate1);
						@array_push($data['TourEndDate'] = $fromDate2);
						
						//print_r($data); die;
						unset($data['flag']);
						unset($data['id']);
						unset($data['smt_enter']);
						unset($data['smt_enter_nxt']);
						unset($data['ContactName']);
						unset($data['ContactMobile']);
						unset($data['ContactEmail']);
				
						              	 
									
						 
						 $tour_id = $this->Tour_generalinfomanage->generalinfo_edit_data($data,$id);
						//print_r($tour_id);die;
						  //---------------------associate bus type ---------------------------------------------------
							if($tour_id['query']>0)
							{
							     //--------------------Add Contact Details---------------------------------------------------//
								 
								 $ContactName=$this->input->post('ContactName');
								 $ContactMobile=$this->input->post('ContactMobile');
								 $ContactEmail=$this->input->post('ContactEmail');
								 
								 error_reporting(0);
								 
								 array_push(@$data1['ContactName']=@$ContactName,'');
								 array_push(@$data1['ContactMobile']=@$ContactMobile,'');
								 array_push(@$data1['ContactEmail']=@$ContactEmail,''); 
								 
								
								if(count($data1) > 0)
								{ 
								
								$this->Tour_generalinfomanage->short_iti_contact($data1,$tour_id['query'],'yes');  
								} 
						 
						 
						     	if($this->input->post('smt_enter')!='')
								{
								$this->session->set_flashdata('Short ITI', 'Records updated successfully');
								redirect(base_url('admin/leads/opration?id='.$tour_id['leadId']));
								} 
								else
								{
									redirect(base_url('admin/tour_itinerary/edit?TourId='.$id));   
								} 
							}
					  }
					 else
					  {
							$id=$this->input->post('id');
							$data['edit_generalinfo']=$this->Tour_generalinfomanage->generalinfo_edit($id);
							//$data['tour_category_dropdown']=$this->Tour_generalinfomanage->category_dropdown();
							$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
							$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
							$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
							$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
							$data['edit_busestype']=$this->Tour_generalinfomanage->generalinfo_busestype_edit($id);
							$data['edit_bigimages']=$this->Tour_generalinfomanage->generalinfo_bigimages_edit($id);
							$data['edit_vehicletype']=$this->Tour_generalinfomanage->generalinfo_vehicletype_edit($id);
							$this->load->view('admin/tour_generalinfo_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		            $id=$this->input->get('id');
					$data['edit_generalinfo']=$this->Tour_generalinfomanage->getGeneralInfoShotITIById($id);
					//$data['tour_category_dropdown']=$this->Tour_generalinfomanage->category_dropdown();
					$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
					$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
					$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
					$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
					$data['edit_busestype']=$this->Tour_generalinfomanage->generalinfo_busestype_edit($id);
					$data['edit_bigimages']=$this->Tour_generalinfomanage->generalinfo_bigimages_edit($id);
					$data['edit_vehicletype']=$this->Tour_generalinfomanage->generalinfo_vehicletype_edit($id);
				    $this->load->view('admin/tour_generalinfo_modify',$data);
				
		
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
	  	    error_reporting(0);
			$this->load->model('admin/Tour_generalinfomanage');
			$id=$this->input->get('id');
           // check tour associte with  
			$LeadArr=$this->Tour_generalinfomanage->check_lead_tour($id);
			$delete_sussess=$this->Tour_generalinfomanage->generalinfo_delete($id)  ; 
		   if($LeadArr[0]['LeadId'] > 0)	
		     {
		     	 $this->session->set_flashdata('leads', 'Tour deleted successfully from lead.');
				 redirect(base_url('admin/leads/opration?id='.$LeadArr[0]['LeadId']));
		     }	
		     else
		     {			
			   $this->session->set_flashdata('generalinfo', 'Records deleted successfully');
		       redirect(base_url('admin/tour_generalinfo/view'));
		     }	
	        
	  } 

// ------------------------------- Delete  funnctin to delete more images ------------------------------		 
	public function moreimagesdelete()
	  {
			$this->load->model('admin/Tour_generalinfomanage');
			$id=$this->input->get('id');
			$iid=$this->input->get('iid');
			
			$image_path = './uploads/tourimage/';
		
			 $imagename_arr=$this->Tour_generalinfomanage->generalinfo_more_image($iid);
			 $imagename=$imagename_arr['0']['ImageName'];
			 
			    // delete file, if exists...
			 $filename = $image_path . $imagename; 
			 if(file_exists($filename))
				 {
					unlink($filename);
				 }
		

			
			//$delete_sussess=$this->Tour_generalinfomanage->generalinfo_delete($_REQUEST['id'])  ; 
		  	 $delete_sussess=1;
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('generalinfo', 'Image deleted successfully');
		       redirect(base_url('admin/tour_generalinfo/edit?id='.$id));
		     }	
	        
	  } 
// ------------------------------- Delete  funnctin to delete main images ------------------------------	  
	  	  
	  
	  public function mainimagesdelete()
	  {
			$this->load->model('admin/Tour_generalinfomanage');
			$id=$this->input->get('id');
			$image_path = './uploads/tourimage/';
		
			 $imagename_arr=$this->Tour_generalinfomanage->generalinfo_main_image($id);
			 $imagename=$imagename_arr['0']['Image'];
			 // delete file, if exists...
			 $filename = $image_path . $imagename; 
		
			 if(file_exists($filename))
				 {
					unlink($filename);
				 }
				 
			//-----------------------------set null vlaaue ------------------------------------	 				
			   $data['Image']='';
			   $imagename_arr=$this->Tour_generalinfomanage->generalinfo_edit_data($data,$id);
			  
			  
	
		    //$delete_sussess=$this->Tour_generalinfomanage->generalinfo_delete($_REQUEST['id'])  ; 
		  	 $delete_sussess=1;
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('generalinfo', 'Image deleted successfully');
		       redirect(base_url('admin/tour_generalinfo/edit?id='.$id));
		     }	
	        
	  } 
	  
	// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	// ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		
		    
       public function bulk_action()
	     {
		     
		       // ------------------------------- Bulk Action  delete  ------------------------------		  	 
				if($this->input->post('Delete')=='Delete')
				    {
					   //----------------------------------------------   
					     $delete_id=$this->input->post('bb');
						 if(count($delete_id)>0)
						  {
						        $id_str=implode(",",$delete_id);
								$this->load->model('admin/Tour_generalinfomanage');
								$delete_sussess=$this->Tour_generalinfomanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('generalinfo', 'Records deleted successfully');
									   redirect(base_url('admin/generalinfo/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('generalinfo', 'Nothing to delete');
									   redirect(base_url('admin/tour_generalinfo/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Tour_generalinfomanage');
								$data['Status']='N';
								$delete_sussess=$this->Tour_generalinfomanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('generalinfo', 'Records deactivate successfully');
									   redirect(base_url('admin/tour_generalinfo/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('generalinfo', 'Nothing to activate');
									   redirect(base_url('admin/tour_generalinfo/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Tour_generalinfomanage');
								$data['Status']='Y';
								$delete_sussess=$this->Tour_generalinfomanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('generalinfo', 'Records activated successfully');
									   redirect(base_url('admin/tour_generalinfo/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('generalinfo', 'Nothing to activate');
									   redirect(base_url('admin/tour_generalinfo/view'));
						   }			 
					}
				
			
		 }

		 public function  modify(){

			$this->load->model('admin/Tour_generalinfomanage');

				$id=$this->input->get('id');
			
				$tour_id = $this->Tour_generalinfomanage->getGeneralInfoData($id);
				if($tour_id['lastid']>0)
				{
					redirect(base_url('admin/leads/opration?id='.$tour_id['leadId']));
				}
		}
 }

?>
