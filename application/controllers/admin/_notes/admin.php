<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_controller
{
// ------------------------------------ check valid users -------------------------------------------------------------------
function __construct()
 { 
   parent::__construct(); 
   $this->valid_user(); 

 } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
public function view()
  {
	   $this->load->model('admin/Adminmanage');
	   
	            $this->load->library('pagination');
				$config['base_url'] = base_url('admin/admin/view');
				$config['per_page'] = 30; 
				$config['total_rows'] =$this->Adminmanage->get_tatal();
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
	   
	   
	   $data['admin']=$this->Adminmanage->admin_view($config['per_page'] , $offset);
	   $this->load->view('admin/admin_view',$data);
  }
// ------------------------------- Add funnctin add record  -----------------------------------------------------------------	
public function add()
  {
	 
		if($this->input->post('flag')=='yes') 
		   {
			   // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('adm_name', 'admin name', 'required');
				$this->form_validation->set_rules('adm_login_id', 'login-id', 'required');
				$this->form_validation->set_rules('adm_password', 'password', 'required');
				$this->form_validation->set_rules('adm_conpwd', 'Confirm password', 'required');
				$this->form_validation->set_rules('adm_email', 'Email', 'trim|required|valid_email');
			    $this->form_validation->set_rules('adm_phone', 'contact no', 'required');
				  
		         if($this->form_validation->run() == true) 
		             {
		      
						 $adm_login_id=$this->input->post('adm_login_id');	
						 $this->load->model('admin/Adminmanage');
						 $DuolicateError=$this->Adminmanage->check_duplicate($adm_login_id);
						 if($DuolicateError==1)
							{
									$data=$_POST;
									unset($data['flag']);
									unset($data['smt_enter']);
									$insert=$this->Adminmanage->admin_add($data);
									if($insert==1)
									 {
									     $this->session->set_flashdata('admin_added', 'Records added successfully');
									     redirect(base_url('admin/admin/view'));
									  }
							}
						  else
							{
								  $this->session->set_flashdata('admin_add_failed', 'Username allready exists.Please choose another username');
								  $this->load->view('admin/admin_add');
							}	
					  }	
					 else
		              {
		                 $this->load->view('admin/admin_add');
		              }	
					
				
		     }
		   else
		     {
		         $this->load->view('admin/admin_add');
		     }	 
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	           
			   // load model to edit record  
				 $this->load->model("admin/Adminmanage")  ;
		    
				   if($this->input->post('flag')=='yes')  // this code execute when submit button press
					{
					        $id=$this->input->post('id');
							// -------------------------- form vaildation ---------------------------------------
							$this->load->library('form_validation');
							$this->form_validation->set_rules('adm_name', 'admin name', 'required');
							$this->form_validation->set_rules('adm_login_id', 'login-id', 'required');
							$this->form_validation->set_rules('adm_password', 'password', 'required');
							$this->form_validation->set_rules('adm_conpwd', 'Confirm password', 'required');
							$this->form_validation->set_rules('adm_email', 'Email', 'trim|required|valid_email');
							$this->form_validation->set_rules('adm_phone', 'contact no', 'required');
							
							$username_admin=$adm_login_id=$this->input->post('adm_login_id');
							$id=$adm_login_id=$this->input->post('id');
														
						if($this->form_validation->run() == true && $this->Adminmanage->check_duplicate_edit($username_admin,$id)) 
							{
						
								$data=$_POST;
								unset($data['flag']);
								unset($data['smt_enter']);
								unset($data['id']);
								$this->Adminmanage->admin_edit_data($data,$id);
								$this->session->set_flashdata('admin_added', 'Records updated successfully');
								redirect(base_url('admin/admin/view'));
							}
						  else
						    {  
							   if($this->Adminmanage->check_duplicate_edit($username_admin,$id)==0)
							      {
								    $this->session->set_flashdata('admin_add_failed', 'Username allready exists.Please choose another username');
								  }
							     $data['edit_admin']=$this->Adminmanage->admin_edit($id);
							     $this->load->view('admin/admin_modify',$data);  
							}		
							
					}
				  else // this code execute when click edit button 
				   {
				  
				       $id=$this->input->get('id');
					  $data['edit_admin']=$this->Adminmanage->admin_edit($id);
					  $this->load->view('admin/admin_modify',$data);
					  
				   }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
public function delete()
	  {
			$this->load->model('admin/Adminmanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Adminmanage->admin_delete($id)  ; 
		
			if($delete_sussess==1)	
			 {			
			   $this->session->set_flashdata('admin_added', 'Records deleted successfully');
			   redirect(base_url('admin/admin/view'));
			 }	
			
	  }  

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
								$this->load->model('admin/Adminmanage');
								$delete_sussess=$this->Adminmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('admin_added', 'Records deleted successfully');
									   redirect(base_url('admin/admin/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('admin_added', 'Nothing to delete');
									   redirect(base_url('admin/admin/view'));
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
								$this->load->model('admin/Adminmanage');
								$data['adm_status']='Inactive';
								$delete_sussess=$this->Adminmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('admin_added', 'Records deactivate successfully');
									   redirect(base_url('admin/admin/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('admin_added', 'Nothing to activate');
									   redirect(base_url('admin/admin/view'));
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
								$this->load->model('admin/Adminmanage');
								$data['adm_status']='Active';
								$delete_sussess=$this->Adminmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('admin_added', 'Records activated successfully');
									   redirect(base_url('admin/admin/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('admin_added', 'Nothing to activate');
									   redirect(base_url('admin/admin/view'));
						   }			 
					}
				
			
		 }
	  
}

?>
