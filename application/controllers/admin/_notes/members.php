<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
	        // $this->output->enable_profiler(TRUE);
		       $this->load->model('admin/Membersmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/members/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Membersmanage->get_tatal();
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
		   
		   $data['members']=$this->Membersmanage->members_view($config['per_page'] , $offset);
		   $this->load->view('admin/members_view',$data);
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		      
		       // -------------------------- form vaildation --------------------------------------- 
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('ResionId', 'resion', 'required');
				$this->form_validation->set_rules('RepresentativeName', 'representative name', 'required');
				$this->form_validation->set_rules('CompanyName', 'company name', 'required');
			    $this->form_validation->set_rules('MembershipNo', 'membership no.', 'required');	
				$this->form_validation->set_rules('user_email', 'email address', 'required|valid_email');
				$this->form_validation->set_rules('user_loginid', 'username', 'required');
				$this->form_validation->set_rules('user_passwd', 'password', 'required');
				$this->form_validation->set_rules('conpwd', 'confirm password', 'required');
				 $this->load->model('admin/Membersmanage');
				 $user_loginid=$this->input->post('user_loginid');
				
				if($this->form_validation->run() == true && $this->Membersmanage->check_duplicate($user_loginid)) 
		             {
						   
							$data=$_POST;
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['conpwd']);
							$insert=$this->Membersmanage->members_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('members', 'Records added successfully');
								redirect(base_url('admin/members/view'));
							 }
						
					   }
					 else
					   {
					         if(!$this->Membersmanage->check_duplicate($user_loginid))
							   {
							       $this->session->set_flashdata('members', 'Username allready exists.Please choose another username');
							   }
					   
					       $this->load->model('admin/Membersmanage');
			               $data['regions']=  $this->Membersmanage->regions_dropdown_data();
					       $this->load->view('admin/members_add',$data);
					   }  			
				
		     }
		   else
		     {
			               $this->load->model('admin/Membersmanage');
			               $data['regions']=  $this->Membersmanage->regions_dropdown_data();
					       $this->load->view('admin/members_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Membersmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('RepresentativeName', 'representative name', 'required');
					$this->form_validation->set_rules('CompanyName', 'company name', 'required');
					$this->form_validation->set_rules('MembershipNo', 'membership no.', 'required');
					$this->form_validation->set_rules('user_email', 'email address', 'required|valid_email');
					$this->form_validation->set_rules('user_loginid', 'username', 'required');
					$this->form_validation->set_rules('user_passwd', 'password', 'required');
					$this->form_validation->set_rules('conpwd', 'confirm password', 'required');
					
					 $user_loginid=$this->input->post('user_loginid');
					 $id=$this->input->post('id');
					
					if($this->form_validation->run() == true && $this->Membersmanage->check_duplicate_edit($user_loginid,$id)) 
					  {
				  
						 $data=$_POST;
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 unset($data['conpwd']);
						 $this->Membersmanage->members_edit_data($data,$_REQUEST['id']);
						 
						 $this->session->set_flashdata('members', 'Records updated successfully');
						 redirect(base_url('admin/members/view'));
					  }
					 else
					  {
					         if(!$this->Membersmanage->check_duplicate_edit($user_loginid,$id))
							   {
							       $this->session->set_flashdata('members', 'Username allready exists.Please choose another username');
							   }
					  
						  $data['edit_members']=$this->Membersmanage->members_edit($_REQUEST['id']);
						  $data['regions']=  $this->Membersmanage->regions_dropdown_data();
						  $this->load->view('admin/members_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		 
			     $data['edit_members']=$this->Membersmanage->members_edit($_REQUEST['id']);
				 $data['regions']=  $this->Membersmanage->regions_dropdown_data();
			     $this->load->view('admin/members_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Membersmanage');
			$delete_sussess=$this->Membersmanage->members_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('members', 'Records deleted successfully');
		       redirect(base_url('admin/members/view'));
		     }	
	        
	  }  
	  
 // ------------------------------- Import members  ------------------------------		
 
 
          public function import()
		      {
		       
			   	  if($this->input->post('flag')=='yes')   
				      {
					  
					      // -------------------------- form vaildation ---------------------------------------
								$this->load->library('form_validation');
								$this->form_validation->set_rules('RId', 'regions', 'required');
					            if($this->form_validation->run() == true) 
									  {
										    $RId=$this->input->post('RId');
											$this->load->model('admin/Membersmanage'); 
											$aa= $this->Membersmanage->uploadData($RId);
											
											  if($aa['success']=='success')
											     {
												    $this->session->set_flashdata('members', 'Records imported successfully');
											      	redirect(base_url('admin/members/view'));
												 }
										 }
									   else
									     {
												$this->load->model('admin/Membersmanage');
												$data['regions']= $this->Membersmanage->regions_dropdown_data();
												$this->load->view('admin/members_import',$data);
										 }	 
					  
					  
					  }
					 else
					  { 
		   			  
						  $this->load->model('admin/Membersmanage');
						  $data['regions']= $this->Membersmanage->regions_dropdown_data();
						  $this->load->view('admin/members_import',$data);
					  }	 
					  
					
			  
		  
		  }	  
  
	  
	  
	  
}

?>
