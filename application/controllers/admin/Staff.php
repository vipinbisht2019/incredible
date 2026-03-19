<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		   $this->load->model('admin/Staffmanage');
		    
			    $this->load->library('pagination');
				$config['base_url'] = base_url('admin/staff/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Staffmanage->get_tatal();
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
		   
		   
		   $data['staff_view']=$this->Staffmanage->staff_view($config['per_page'] , $offset);
		   $this->load->view('admin/staff_view', $data);
		 
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		       	$config['upload_path'] = './uploads/staff/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				$field_name = "member_photo";
		   
		       // -------------------------- form vaildation --------------------------------------- 
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('category_id', 'member category', 'required');
				$this->form_validation->set_rules('member_name', 'name', 'required');
				$this->form_validation->set_rules('member_designation', 'designation', 'required');
				if($this->form_validation->run() == true &&  $this->upload->do_upload($field_name)) 
		             { 
					       $uploaddata = array('upload_data' => $this->upload->data());
						   $uploadfile1=$uploaddata['upload_data']['file_name'];
						   
					  
						   $this->load->model('admin/Staffmanage');
							$data=$_POST;
							@array_push($data['member_photo']=$uploadfile1,$uploadfile1);
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Staffmanage->staff_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('staff', 'Records added successfully');
								redirect(base_url('admin/staff/view'));
							 }
						
					   }
					 else
					   {
					       $error_1 = array('error_1' => $this->upload->display_errors()); 
					       $this->load->view('admin/staff_add',$error_1);
					   }  			
				
		     }
		   else
		      {
			        $this->load->view('admin/staff_add');
			  }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Staffmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('member_name', 'name', 'required');
				    $this->form_validation->set_rules('member_designation', 'designation', 'required');
					if($this->form_validation->run() == true) 
					  {
				  
						       $data=$_POST;
						  //------------------------------------ check file select or not and upload ------------
								 if($_FILES['member_photo']['name'] != '')
									{
										$config['upload_path'] = './uploads/staff/';
										$config['allowed_types'] = 'gif|jpg|png|jpeg';
										$this->load->library('upload', $config);
										$field_name = "member_photo";
										if($this->upload->do_upload($field_name))
											 {
												  $uploaddata = array('upload_data' => $this->upload->data());
												  $uploadfile1=$uploaddata['upload_data']['file_name'];
												  @array_push($data['member_photo']=$uploadfile1,$uploadfile1);
											 } 
									 }
						//------------------------------------ END Upload ---------------------------------------------------
						 
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Staffmanage->staff_edit_data($data,$_REQUEST['id']);
						 
						 $this->session->set_flashdata('staff', 'Records updated successfully');
						 redirect(base_url('admin/staff/view'));
					  }
					 else
					  {
						  $data['edit_staff']=$this->Staffmanage->staff_edit($_REQUEST['id']);
						  $this->load->view('admin/staff_modify',$data);
					  } 	  
					  
		     }
	       else
		    {
		  	     $data['edit_staff']=$this->Staffmanage->staff_edit($_REQUEST['id']);
			     $this->load->view('admin/staff_modify',$data);
	        }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Staffmanage');
			$delete_sussess=$this->Staffmanage->staff_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('staff', 'Records deleted successfully');
		       redirect(base_url('admin/staff/view'));
		     }	
	        
	  }  
  
// ---------------------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
// ---------------------------------------------- Bulk Action activate, deactivate and delete  ------------------------------	
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
								$this->load->model('admin/Staffmanage');
								$delete_sussess=$this->Staffmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('staff', 'Records deleted successfully');
									   redirect(base_url('admin/staff/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('staff', 'Nothing to delete');
									   redirect(base_url('admin/staff/view'));
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
								$this->load->model('admin/Staffmanage');
								$data['Status']='N';
								$delete_sussess=$this->Staffmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('staff', 'Records deactivate successfully');
									   redirect(base_url('admin/staff/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('staff', 'Nothing to activate');
									   redirect(base_url('admin/staff/view'));
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
								$this->load->model('admin/Staffmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Staffmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('staff', 'Records activated successfully');
									   redirect(base_url('admin/staff/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('staff', 'Nothing to activate');
									   redirect(base_url('admin/staff/view'));
						   }			 
					}
				
			
		 }	  
	  
	  
}

?>
