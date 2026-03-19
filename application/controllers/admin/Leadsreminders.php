<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leadsreminders extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	   {
		        $this->load->model('admin/Leadsremindersmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/leadsreminders/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Leadsremindersmanage->get_tatal();
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
			
			    $data['leadsreminders']=$this->Leadsremindersmanage->leadsreminders_view($config['per_page'] , $offset);
				$data['employee']=$this->Leadsremindersmanage->get_employee_dropdown();
		        $this->load->view('admin/leadsreminders_view',$data);
		 
		   
		  
	  }
	  
// ----------------------------------------------------------------- filter data according to employee ------------------------------------------------------------
	public function search()
	   {
		        $this->load->model('admin/Leadsremindersmanage');
				$empid=$this->input->post('Employee');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/leadsreminders/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Leadsremindersmanage->get_tatal_search($empid);
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
			
			    $data['leadsreminders']=$this->Leadsremindersmanage->leadsreminders_view_search($config['per_page'] , $offset, $empid);
				$data['employee']=$this->Leadsremindersmanage->get_employee_dropdown();
		        $this->load->view('admin/leadsreminders_view',$data);
		 
		   
		  
	  }
	  
// ------------------------------- Add funnctin add record  ------------------------------	    
public function add()
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('Title', 'title', 'required');
				$this->form_validation->set_rules('EmployeeId', 'assign to', 'required');
				$this->form_validation->set_rules('DueDateTime', 'date time', 'required');
				$this->form_validation->set_rules('Description', 'description', 'required');
				$this->load->model('admin/Leadsremindersmanage');
				if($this->form_validation->run() == true) 
		             {
						   
							$data=$_POST;
						    //------------------------------------ END Upload ---------------------------------------------------
						    unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Leadsremindersmanage->leadsreminders_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('leadsreminders', 'Records added successfully');
								redirect(base_url('admin/leadsreminders/view'));
							 }
						
					   }
					 else
					   {
					      $data['employee']=$this->Leadsremindersmanage->get_employee_dropdown();
					      $this->load->view('admin/leadsreminders_add',$data);
					   }  			
				
		     }
		   else
		     {
			               $this->load->model('admin/Leadsremindersmanage');
			               $data['employee']=$this->Leadsremindersmanage->get_employee_dropdown(); 
						  
		                   $this->load->view('admin/leadsreminders_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Leadsremindersmanage")  ;
		   if($this->input->post('flag')=='yes') 
		      {
					$this->load->library('form_validation');
		            $this->form_validation->set_rules('Title', 'title', 'required');
				    $this->form_validation->set_rules('EmployeeId', 'assign to', 'required');
				    $this->form_validation->set_rules('DueDateTime', 'date time', 'required');
				    $this->form_validation->set_rules('Description', 'description', 'required');
					$id=$this->input->post('id');
			     if($this->form_validation->run() == true) 
					  {
				  
						 $data=$_POST;
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Leadsremindersmanage->leadsreminders_edit_data($data,$id);
						 $this->session->set_flashdata('leadsreminders', 'Records updated successfully');
						 redirect(base_url('admin/leadsreminders/view'));
					  }
					 else
					  {
						  $data['edit_leadsreminders']=$this->Leadsremindersmanage->leadsreminders_edit($id);
						  $data['employee']=$this->Leadsremindersmanage->get_employee_dropdown(); 
						  $this->load->view('admin/leadsreminders_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_leadsreminders']=$this->Leadsremindersmanage->leadsreminders_edit($id);
				 $data['employee']=$this->Leadsremindersmanage->get_employee_dropdown(); 
			     $this->load->view('admin/leadsreminders_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Leadsremindersmanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Leadsremindersmanage->leadsreminders_delete($id)  ; 
		   if($delete_sussess==1)	
		     {			
			    $this->session->set_flashdata('leadsreminders', 'Records deleted successfully');
		        redirect(base_url('admin/leadsreminders/view'));
		     }	
	        
	  }  
	  
	  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------		  
	  	 // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------	
		 	  
     public function bulk_action()
	     {
		     
		  
 // ------------------------------------------------------------------ Bulk Action  Open   -------------------------------------------------------	 
				 if($this->input->post('Open')=='Open')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Leadsremindersmanage');
								$data['Status']='O';
								$delete_sussess=$this->Leadsremindersmanage->admin_deactivate_bulk($id,$data);
											
									   $this->session->set_flashdata('leadsreminders', ' Reminders open successfully');
									   redirect(base_url('admin/leadsreminders/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('leadsreminders', 'Nothing to open');
									   redirect(base_url('admin/leadsreminders/view'));
						   }			 
					}
 // --------------------------------------------------------------- Bulk Action Close  ---------------------------------------------------------			
				if($this->input->post('Close')=='Close')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        echo $id_str=implode(",",$id);
								$this->load->model('admin/Leadsremindersmanage');
								$data['Status']='C';
								$delete_sussess=$this->Leadsremindersmanage->admin_activate_bulk($id,$data);
											
									   $this->session->set_flashdata('leadsreminders', ' Reminders closed successfully');
									   redirect(base_url('admin/leadsreminders/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('leadsreminders', 'Nothing to close');
									   redirect(base_url('admin/leadsreminders/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
