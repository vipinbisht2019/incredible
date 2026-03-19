<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Employee extends MY_controller {
// ------------------------------------ check valid users ------------------------------------------------------------------- employee
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		       $this->load->model('admin/Employeemanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/employee/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Employeemanage->get_tatal();
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
				
		   $data['employee']=$this->Employeemanage->employee_view($config['per_page'] , $offset);
		   $this->load->view('admin/employee_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
		 
	  if($this->input->post('flag')=='yes') 
		   {
		               $this->load->model('admin/Employeemanage');
		       // -------------------------- form vaildation ---------------------------------------
		                $this->load->library('form_validation');
						$this->form_validation->set_rules('FirstName', 'first name', 'required');
						$this->form_validation->set_rules('LastName', 'last name', 'required');
						$this->form_validation->set_rules('EmailID', 'email', 'required|valid_email');
						$this->form_validation->set_rules('PhoneNO', 'phone no.', 'required');
						$this->form_validation->set_rules('UserName', 'user name', 'required');
						$this->form_validation->set_rules('Password', 'password', 'required');
				
				      $UserName=$this->input->post('UserName');
					  $is_duplicate=$this->Employeemanage->check_duplicate('UserName', $UserName);
					  $EmailID=$this->input->post('EmailID');
					  $is_duplicate_eamil=$this->Employeemanage->check_duplicate('EmailID', $EmailID);
					  
					  
				
				  if($this->form_validation->run() == true && $is_duplicate==1 && $is_duplicate_eamil==1) 
		              {
						  
						   $data=$_POST;
						 //------------------------------------ check file select or not and upload ------------
						   for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/employee/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
											
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['Photo']=$uploadfile1,$uploadfile1);
															}
														  
													 } 
											 }
									   }	
					
						
					    //------------------------------------ END Upload ---------------------------------------------------
							  unset($data['flag']);
							  unset($data['smt_enter']);
						
						//--------------------------------- add hotel data ----------------------------------------------
							  $insert=$this->Employeemanage->employee_add($data);
						//--------------------------------- add hotel faclity data ----------------------------------------------
						  					         
							
							if($insert > 0)
							 {
								$this->session->set_flashdata('employee', 'Records added successfully');
								redirect(base_url('admin/employee/view'));
							 }
						
					    }
					  else
					    {  
						  $this->load->model('admin/Employeemanage');
						    if($is_duplicate==0)
							  {
							     $this->session->set_flashdata('employee', 'Login-Id is already exist. Please enter other login-id ');
							  }
							   if($is_duplicate_eamil==0)
							  {
							     $this->session->set_flashdata('employee', 'Email is already exist. Please enter other email');
							  }
							  
							
						  
			              $data['employee']=$this->Employeemanage->employee_dropdown(); 
					      $this->load->view('admin/employee_add',$data);
					    }  			
				
		     }
		    else
		      {
			               $this->load->model('admin/Employeemanage');
			               $data['employee']=$this->Employeemanage->employee_dropdown(); 
						   $this->load->view('admin/employee_add',$data);
			   }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  hoteltypeId 
public function edit()
   {
   
   
	       $this->load->model("admin/Employeemanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					    $this->load->library('form_validation');
						$this->form_validation->set_rules('FirstName', 'first name', 'required');
						$this->form_validation->set_rules('LastName', 'last name', 'required');
						$this->form_validation->set_rules('EmailID', 'email', 'required|valid_email');
						$this->form_validation->set_rules('PhoneNO', 'phone no.', 'required');
						$this->form_validation->set_rules('UserName', 'user name', 'required');
						$this->form_validation->set_rules('Password', 'password', 'required');
						$id=$this->input->post('id');
						
					  $UserName=$this->input->post('UserName');
					  $is_duplicate=$this->Employeemanage->check_duplicate_edit('UserName', $UserName,$id);
					  $EmailID=$this->input->post('EmailID');
					  $is_duplicate_eamil=$this->Employeemanage->check_duplicate_edit('EmailID', $EmailID,$id);
						
						
					if($this->form_validation->run() == true && $is_duplicate==1 && $is_duplicate_eamil==1) 
					  {
				  
						    $data=$_POST;
							
					
						  //------------------------------------ check file select or not and upload ------------
							 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							      {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
											
													$config['upload_path'] = './uploads/employee/';
													$config['allowed_types'] = 'gif|jpg|png|jpeg';
													$this->load->library('upload', $config);
													
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['Photo']=$uploadfile1,$uploadfile1);
															}
														   
													   } 
											   }
									    }	
					
                         //------------------------------------ END Upload --------------------------------------------------- 
						 
								
								$id=$data['id'];
								 //------------------------ first delete hotel facilities then insert again -------------------------------
						    	
								
								unset($data['flag']);
								unset($data['smt_enter']);
								unset($data['id']);
								  
								
								$HotelEdit=$this->Employeemanage->employee_edit_data($data,$id);
						  
				
				           //------------------------ first delete hotel facilities then insert again -------------------------------
						 
				
						 $this->session->set_flashdata('employee', 'Records updated successfully');
						 redirect(base_url('admin/employee/view'));
					  }
					 else
					  {
					         if($is_duplicate==0)
							  {
							     $this->session->set_flashdata('employee', 'Login-Id is already exist. Please enter other login-id ');
							  }
							   if($is_duplicate_eamil==0)
							  {
							     $this->session->set_flashdata('employee', 'Email is already exist. Please enter other email');
							  }
						    $data['edit_employee']=$this->Employeemanage->employee_edit($id);
					        $data['employee']=$this->Employeemanage->employee_dropdown(); 
						    $this->load->view('admin/employee_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
			       $id=$this->input->get('id');
		  	       $data['edit_employee']=$this->Employeemanage->employee_edit($id); 
				    $data['employee']=$this->Employeemanage->employee_dropdown(); 
				   $this->load->view('admin/employee_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Employeemanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Employeemanage->employee_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('employee', 'Records deleted successfully');
		       redirect(base_url('admin/employee/view'));
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
						        
								$this->load->model('admin/Employeemanage');
								$delete_sussess=$this->Employeemanage->admin_delete_bulk($delete_id);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('employee', 'Records deleted successfully');
									   redirect(base_url('admin/employee/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('employee', 'Nothing to delete');
									   redirect(base_url('admin/employee/view'));
						   }			 
					   
					}
				  // ------------------------------- Bulk Action  deactivate   ------------------------------	 
				 if($this->input->post('Deactivate')=='Deactivate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						       
								$this->load->model('admin/Employeemanage');
								$data['Status']='N';
								$delete_sussess=$this->Employeemanage->admin_deactivate_bulk($id,$data);
											
									   $this->session->set_flashdata('employee', 'Records deactivate successfully');
									   redirect(base_url('admin/employee/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('employee', 'Nothing to activate');
									   redirect(base_url('admin/employee/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						       
								$this->load->model('admin/Employeemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Employeemanage->admin_activate_bulk($id,$data);
											
									   $this->session->set_flashdata('employee', 'Records activated successfully');
									   redirect(base_url('admin/employee/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('employee', 'Nothing to activate');
									   redirect(base_url('admin/employee/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
