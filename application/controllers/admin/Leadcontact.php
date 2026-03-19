<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leadcontact extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Leadcontactmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/leadcontact/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Leadcontactmanage->get_tatal();
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
				
		       $data['leadcontact']=$this->Leadcontactmanage->leadcontact_view($config['per_page'] , $offset);
		       $this->load->view('admin/leadcontact_view',$data);
		 
	  }
//------------------------------------------------------- Add funnctin add record  -----------------------------------------------------------	
 public function add()
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ----------------------------------------------------------------------------------- 
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('GroupId', 'group', 'required');
				$this->form_validation->set_rules('Name', 'name', 'required');
				$this->form_validation->set_rules('MobileNo', 'mobile no.', 'required');
				$this->form_validation->set_rules('EmailAddress', 'email address.', 'required');
			    $this->form_validation->set_rules('CityId', 'city', 'required');
				$this->form_validation->set_rules('CountryId', 'country', 'required');
			    if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Leadcontactmanage');
							$data=$_POST;
							//------------------------------------ END Upload ---------------------------------------------------
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Leadcontactmanage->leadcontact_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('leadcontact', 'Records added successfully');
								redirect(base_url('admin/leadcontact/view'));
							 }
						
					   }
					 else
					   { 
					        $this->load->model("admin/Leadcontactmanage") ; 
							$data['groupdropdown']=$this->Leadcontactmanage->get_group_dropdown();
					        $this->load->view('admin/leadcontact_add',$data);
					   }  			
				
		     }
		   else
		     {
			          
					        $this->load->model("admin/Leadcontactmanage") ; 
			                $data['groupdropdown']=$this->Leadcontactmanage->get_group_dropdown();
		                    $this->load->view('admin/leadcontact_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Leadcontactmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('GroupId', 'group', 'required');
					$this->form_validation->set_rules('Name', 'name', 'required');
					$this->form_validation->set_rules('MobileNo', 'mobile no.', 'required');
					$this->form_validation->set_rules('EmailAddress', 'email address.', 'required');
					$this->form_validation->set_rules('CityId', 'city', 'required');
					$this->form_validation->set_rules('CountryId', 'country', 'required');
               	    $id=$this->input->post('id');
			        if($this->form_validation->run() == true) 
					  {
				          
						 $data=$_POST;
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Leadcontactmanage->leadcontact_edit_data($data,$id);
						 $this->session->set_flashdata('leadcontact', 'Records updated successfully');
						 redirect(base_url('admin/leadcontact/view'));
					  }
					 else
					  {
						  $data['edit_leadcontact']=$this->Leadcontactmanage->leadcontact_edit($id);
						  $data['groupdropdown']=$this->Leadcontactmanage->get_group_dropdown();
						
						  $this->load->view('admin/leadcontact_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_leadcontact']=$this->Leadcontactmanage->leadcontact_edit($id);
				 $data['groupdropdown']=$this->Leadcontactmanage->get_group_dropdown();
			     $this->load->view('admin/leadcontact_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Leadcontactmanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Leadcontactmanage->leadcontact_delete($id)  ; 
		   if($delete_sussess==1)	
		     {			
			    $this->session->set_flashdata('leadcontact', 'Records deleted successfully');
		        redirect(base_url('admin/leadcontact/view'));
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
						        
								$this->load->model('admin/Leadcontactmanage');
								foreach($delete_id as $id_str)
								 {
								   $delete_sussess=$this->Leadcontactmanage->admin_delete_bulk($delete_id);
								 }
								 $this->session->set_flashdata('leadcontact', 'Records deleted successfully');
								 redirect(base_url('admin/leadcontact/view'));
							}
						  else
						    {
								   $this->session->set_flashdata('leadcontact', 'Nothing to delete');
								   redirect(base_url('admin/leadcontact/view'));
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
								$this->load->model('admin/Leadcontactmanage');
								$data['Status']='N';
								$delete_sussess=$this->Leadcontactmanage->admin_deactivate_bulk($id,$data);
											
									   $this->session->set_flashdata('leadcontact', 'Records deactivate successfully');
									   redirect(base_url('admin/leadcontact/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('leadcontact', 'Nothing to activate');
									   redirect(base_url('admin/leadcontact/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        echo $id_str=implode(",",$id);
								$this->load->model('admin/Leadcontactmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Leadcontactmanage->admin_activate_bulk($id,$data);
											
									   $this->session->set_flashdata('leadcontact', 'Records activated successfully');
									   redirect(base_url('admin/leadcontact/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('leadcontact', 'Nothing to activate');
									   redirect(base_url('admin/leadcontact/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
