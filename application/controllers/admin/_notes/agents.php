<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agents extends MY_controller {
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
		        $this->load->model('admin/Agentsmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/agents/view');
				$config['per_page'] = 20; 
				$config['total_rows'] =$this->Agentsmanage->get_tatal();
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
		   
		     $data['agents']=$this->Agentsmanage->agents_view($config['per_page'] , $offset);
		     $this->load->view('admin/agents_view',$data);
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
    
		 
	if($this->input->post('flag')=='yes') 
		   {
	
		      
		       // -------------------------- form vaildation --------------------------------------- 
		        $this->load->library('form_validation');
			
				$this->form_validation->set_rules('ContactPerson', 'contact person name', 'required');
				$this->form_validation->set_rules('CompanyName', 'company name', 'required');
			    $this->form_validation->set_rules('MembershipNo', 'membership no.', 'required');	
				$this->form_validation->set_rules('user_email', 'email address', 'required|valid_email');
				$this->form_validation->set_rules('user_loginid', 'username', 'required');
				$this->form_validation->set_rules('user_passwd', 'password', 'required');
				$this->form_validation->set_rules('conpwd', 'confirm password', 'required');
				$this->form_validation->set_rules('CommissionId', 'Commission', 'required');
				
				 $this->load->model('admin/Agentsmanage');
				 $user_loginid=$this->input->post('user_loginid');
				
				if($this->form_validation->run() == true && $this->Agentsmanage->check_duplicate($user_loginid)) 
		             {
					 
						   
							$data=$_POST;
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['conpwd']);
							unset($data['AgentPermission']);
							$insert_id=$this->Agentsmanage->agents_add($data);
							if($insert_id>1)
							 {
							    $data_1=$this->input->post('AgentPermission');
								$this->Agentsmanage->agents_permission_add($data_1,$insert_id);
							  
								$this->session->set_flashdata('agents', 'Records added successfully');
								redirect(base_url('admin/agents/view'));
							 }
						
					   }
					 else
					   {
					         if(!$this->Agentsmanage->check_duplicate($user_loginid))
							   {
							       $this->session->set_flashdata('agents', 'Username allready exists.Please choose another username');
							   }
					   
					        $this->load->model('admin/Agentsmanage');
							$data['agent_commission']=$this->Agentsmanage->get_commission();
							$data['agent_permission']=$this->Agentsmanage->get_permission();
							$this->load->view('admin/agents_add',$data);
					   }  			
				
		     }
		   else
		     {
			               $this->load->model('admin/Agentsmanage');
						   
						   $data['agent_commission']=$this->Agentsmanage->get_commission();
						   $data['agent_permission']=$this->Agentsmanage->get_permission();
					       $this->load->view('admin/agents_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Agentsmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('ContactPerson', 'contact person name', 'required');
					$this->form_validation->set_rules('CompanyName', 'company name', 'required');
					$this->form_validation->set_rules('MembershipNo', 'membership no.', 'required');
					$this->form_validation->set_rules('user_email', 'email address', 'required|valid_email');
					$this->form_validation->set_rules('user_loginid', 'username', 'required');
					$this->form_validation->set_rules('user_passwd', 'password', 'required');
					$this->form_validation->set_rules('conpwd', 'confirm password', 'required');
					$this->form_validation->set_rules('CommissionId', 'Commission', 'required');
					
					 $user_loginid=$this->input->post('user_loginid');
					 $id=$this->input->post('id');
					
					if($this->form_validation->run() == true && $this->Agentsmanage->check_duplicate_edit($user_loginid,$id)) 
					  {
				  
						 $data=$_POST;
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 unset($data['conpwd']);
						 unset($data['AgentPermission']);
						 $this->Agentsmanage->agents_edit_data($data,$id);
						 
						        $data_1=$this->input->post('AgentPermission');
								$this->Agentsmanage->agents_permission_add($data_1,$id);
						 
						 $this->session->set_flashdata('agents', 'Records updated successfully');
						 redirect(base_url('admin/agents/view'));
					  }
					 else
					  {
					         if(!$this->Agentsmanage->check_duplicate_edit($user_loginid,$id))
							   {
							       $this->session->set_flashdata('agents', 'Username allready exists.Please choose another username');
							   }
					  
						    $data['edit_agents']=$this->Agentsmanage->agents_edit($id);
							$data['edit_permission']=$this->Agentsmanage->agents_permission_edit($id);
							$data['agent_commission']=$this->Agentsmanage->get_commission();
							$data['agent_permission']=$this->Agentsmanage->get_permission();
						    $this->load->view('admin/agents_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		             $id=$this->input->get('id');
					$data['edit_agents']=$this->Agentsmanage->agents_edit($id);
					$data['edit_permission']=$this->Agentsmanage->agents_permission_edit($id);
					$data['agent_commission']=$this->Agentsmanage->get_commission();
					$data['agent_permission']=$this->Agentsmanage->get_permission();
				    $this->load->view('admin/agents_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Agentsmanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Agentsmanage->agents_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('agents', 'Records deleted successfully');
		       redirect(base_url('admin/agents/view'));
		     }	
	        
	  }
 

	    
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
								$this->load->model('admin/Agentsmanage');
								$delete_sussess=$this->Agentsmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('agents', 'Records deleted successfully');
									   redirect(base_url('admin/agents/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('agents', 'Nothing to delete');
									   redirect(base_url('admin/agents/view'));
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
								$this->load->model('admin/Agentsmanage');
								$data['user_isactive']='N';
								$delete_sussess=$this->Agentsmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('agents', 'Records deactivate successfully');
									   redirect(base_url('admin/agents/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('agents', 'Nothing to activate');
									   redirect(base_url('admin/agents/view'));
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
								$this->load->model('admin/Agentsmanage');
								$data['user_isactive']='Y';
								$delete_sussess=$this->Agentsmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('agents', 'Records activated successfully');
									   redirect(base_url('admin/agents/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('agents', 'Nothing to activate');
									   redirect(base_url('admin/agents/view'));
						   }			 
					}
				
			
		 }
	  
	  
	  
}

?>
