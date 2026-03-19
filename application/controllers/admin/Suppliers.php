<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Suppliersmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/suppliers/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Suppliersmanage->get_tatal();
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
				
		         $data['suppliers']=$this->Suppliersmanage->suppliers_view($config['per_page'] , $offset);
			   	 $data['suppliersdropdown']=$this->Suppliersmanage->get_suppliers_dropdown();
				 $data['leadstatus']=$this->Suppliersmanage->get_lead_status();
				 
				 
		        $this->load->view('admin/suppliers_view',$data);
		 
	  }
//-------------------------------------------------------------------------------------------------------------------------------------------	  
	public function search()
	  {
				$this->load->model('admin/Suppliersmanage');
				$TypeId=$this->input->post('TypeId');
				$SerachOption=$this->input->post('SerachOption');
				$Keyword=$this->input->post('Keyword');
				
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/suppliers/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Suppliersmanage->get_tatal_search($TypeId, $SerachOption, $Keyword);
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
				
			   $data['suppliers']=$this->Suppliersmanage->suppliers_view_search($config['per_page'],$offset, $TypeId, $SerachOption, $Keyword);
			   $data['suppliersdropdown']=$this->Suppliersmanage->get_suppliers_dropdown();
			    $data['leadstatus']=$this->Suppliersmanage->get_lead_status();
				
			   $this->load->view('admin/suppliers_view',$data);
		 
	  }
  
	  
//------------------------------------------------------- Add funnctin add record  -----------------------------------------------------------	
 public function add() // search
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ----------------------------------------------------------------------------------- 
		            $this->load->library('form_validation');
				    $this->form_validation->set_rules('TypeId', 'type', 'required');
					$this->form_validation->set_rules('ContactPersonName', 'contact person name', 'required');
					$this->form_validation->set_rules('CompanyName', 'company name.', 'required');
					$this->form_validation->set_rules('EmailID', 'email address.', 'trim|required|valid_email');
					$this->form_validation->set_rules('ContactNumber', 'contact number', 'required');
					$this->form_validation->set_rules('Country', 'country', 'required');
					$this->form_validation->set_rules('City', 'city', 'required');
					
			    if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Suppliersmanage');
							$data=$_POST;
							//------------------------------------ END Upload ---------------------------------------------------
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Suppliersmanage->suppliers_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('suppliers', 'Records added successfully');
								redirect(base_url('admin/suppliers/view'));
							 }
						
					   }
					 else
					   { 
					        $this->load->model("admin/Suppliersmanage") ; 
							$data['suppliersdropdown']=$this->Suppliersmanage->get_suppliers_dropdown();
					        $this->load->view('admin/suppliers_add',$data);
					   }  			
				
		     }
		   else
		     {
			          
					        $this->load->model("admin/Suppliersmanage") ; 
			                $data['suppliersdropdown']=$this->Suppliersmanage->get_suppliers_dropdown();
		                    $this->load->view('admin/suppliers_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Suppliersmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('TypeId', 'type', 'required');
					$this->form_validation->set_rules('ContactPersonName', 'contact person name', 'required');
					$this->form_validation->set_rules('CompanyName', 'company name.', 'required');
					$this->form_validation->set_rules('EmailID', 'email address.', 'trim|required|valid_email');
					$this->form_validation->set_rules('ContactNumber', 'contact number', 'required');
					$this->form_validation->set_rules('Country', 'country', 'required');
					$this->form_validation->set_rules('City', 'city', 'required');
					
					
               	    $id=$this->input->post('id');
			        if($this->form_validation->run() == true) 
					  {
				          
						 $data=$_POST;
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Suppliersmanage->suppliers_edit_data($data,$id);
						 $this->session->set_flashdata('suppliers', 'Records updated successfully');
						 redirect(base_url('admin/suppliers/view'));
					  }
					 else
					  {
						  $data['edit_suppliers']=$this->Suppliersmanage->suppliers_edit($id);
						  $data['suppliersdropdown']=$this->Suppliersmanage->get_suppliers_dropdown();
						
						  $this->load->view('admin/suppliers_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_suppliers']=$this->Suppliersmanage->suppliers_edit($id);
				 $data['suppliersdropdown']=$this->Suppliersmanage->get_suppliers_dropdown();
			     $this->load->view('admin/suppliers_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Suppliersmanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Suppliersmanage->suppliers_delete($id)  ; 
		   if($delete_sussess==1)	
		     {			
			    $this->session->set_flashdata('suppliers', 'Records deleted successfully');
		        redirect(base_url('admin/suppliers/view'));
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
						        
								$this->load->model('admin/Suppliersmanage');
								foreach($delete_id as $id_str)
								 {
								   $delete_sussess=$this->Suppliersmanage->admin_delete_bulk($delete_id);
								 }
								 $this->session->set_flashdata('suppliers', 'Records deleted successfully');
								 redirect(base_url('admin/suppliers/view'));
							}
						  else
						    {
								   $this->session->set_flashdata('suppliers', 'Nothing to delete');
								   redirect(base_url('admin/suppliers/view'));
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
								$this->load->model('admin/Suppliersmanage');
								$data['Status']='N';
								$delete_sussess=$this->Suppliersmanage->admin_deactivate_bulk($id,$data);
											
									   $this->session->set_flashdata('suppliers', 'Records deactivate successfully');
									   redirect(base_url('admin/suppliers/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('suppliers', 'Nothing to activate');
									   redirect(base_url('admin/suppliers/view'));
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
								$this->load->model('admin/Suppliersmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Suppliersmanage->admin_activate_bulk($id,$data);
											
									   $this->session->set_flashdata('suppliers', 'Records activated successfully');
									   redirect(base_url('admin/suppliers/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('suppliers', 'Nothing to activate');
									   redirect(base_url('admin/suppliers/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
