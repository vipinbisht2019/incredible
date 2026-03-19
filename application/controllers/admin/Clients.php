<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Clientsmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/clients/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Clientsmanage->get_tatal();
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
				$data['clients']=$this->Clientsmanage->clients_view($config['per_page'] , $offset);
			    $this->load->view('admin/clients_view',$data);
		 
	  }
//-------------------------------------------------------------------------------------------------------------------------------------------	  
	public function search()
	  {
				$this->load->model('admin/Clientsmanage');
				$TypeId=$this->input->post('TypeId');
				$SerachOption=$this->input->post('SerachOption');
				$Keyword=$this->input->post('Keyword');
				
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/clients/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Clientsmanage->get_tatal_search($TypeId, $SerachOption, $Keyword);
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
				
			    $data['clients']=$this->Clientsmanage->clients_view_search($config['per_page'],$offset, $TypeId, $SerachOption, $Keyword);
			    $this->load->view('admin/clients_view',$data);
		 
	  }
  
	  
//------------------------------------------------------- Add funnctin add record  -----------------------------------------------------------	
 public function add() // search
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ----------------------------------------------------------------------------------- 
		            $this->load->library('form_validation');
		
					$this->form_validation->set_rules('FirstName', 'first name', 'required');
					$this->form_validation->set_rules('LastName', 'last name', 'required');
					$this->form_validation->set_rules('EMailAddress', 'email address.', 'trim|required|valid_email');
					$this->form_validation->set_rules('Password', 'password', 'required');
					$this->form_validation->set_rules('ContactNumber', 'contact number', 'required');
				    $this->form_validation->set_rules('Gender', 'gender', 'required');
		
					
			    if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Clientsmanage');
							$data=$_POST;
							//------------------------------------ END Upload ---------------------------------------------------
							
							unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['smt_enter']);
							unset($data['DocumentName']);
							unset($data['TourLocation']);
							unset($data['Planningduring']);
							$insert=$this->Clientsmanage->clients_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('clients', 'Records added successfully');
								redirect(base_url('admin/clients/view'));
							 }
						
					   }
					 else
					   { 
					        $this->load->model("admin/Clientsmanage") ; 
							$data['clientsdropdown']=1;
					        $this->load->view('admin/clients_add',$data);
					   }  			
				
		     }
		   else
		     {
			          
					        $this->load->model("admin/Clientsmanage") ; 
			                $data['clientsdropdown']=1;
		                    $this->load->view('admin/clients_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Clientsmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('FirstName', 'first name', 'required');
					$this->form_validation->set_rules('LastName', 'last name', 'required');
					$this->form_validation->set_rules('EMailAddress', 'email address.', 'trim|required|valid_email');
					$this->form_validation->set_rules('Password', 'password', 'required');
					$this->form_validation->set_rules('ContactNumber', 'contact number', 'required');
				    $this->form_validation->set_rules('Gender', 'gender', 'required');
				    $id=$this->input->post('id');
			        if($this->form_validation->run() == true) 
					  {
				          
								$data=$_POST;
								unset($data['flag']);
								unset($data['smt_enter']);
								unset($data['id']);
								unset($data['DateofBirth']);
								unset($data['AnniversaryDate']);
								unset($data['PassportExpiryDate']);
								unset($data['DocumentName']);
						     	unset($data['TourLocation']);
							    unset($data['Planningduring']);
							  $birthDateArr=explode("-",$this->input->post('DateofBirth')); 
						      $birthDateStr=$birthDateArr['2']."-".$birthDateArr['1']."-".$birthDateArr['0'];
						      $AnnivDateArr=explode("-",$this->input->post('AnniversaryDate'));    
					    	  $AnnivDateArrStr=$AnnivDateArr['2']."-".$AnnivDateArr['1']."-".$AnnivDateArr['0'];
							  $PassportExpiryDateArr=explode("-",$this->input->post('PassportExpiryDate'));    
					    	  $PassportExpiryDateArrStr=$PassportExpiryDateArr['2']."-".$PassportExpiryDateArr['1']."-".$PassportExpiryDateArr['0'];
							  
							  $data['DateofBirth']=$birthDateStr;
							  $data['AnniversaryDate']=$AnnivDateArrStr;
							  $data['PassportExpiryDate']=$PassportExpiryDateArrStr;
							  
						 
							 $this->Clientsmanage->clients_edit_data($data,$id);
							 $this->session->set_flashdata('clients', 'Records updated successfully');
							 redirect(base_url('admin/clients/view'));
					  }
					 else
					  {
						  $data['edit_clients']=$this->Clientsmanage->clients_edit($id);
						  $this->load->view('admin/clients_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_clients']=$this->Clientsmanage->clients_edit($id);
			     $this->load->view('admin/clients_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Clientsmanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Clientsmanage->clients_delete($id)  ; 
		    if($delete_sussess==1)	
		     {			
			    $this->session->set_flashdata('clients', 'Records deleted successfully');
		        redirect(base_url('admin/clients/view'));
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
						        
								$this->load->model('admin/Clientsmanage');
								foreach($delete_id as $id_str)
								 {
								   $delete_sussess=$this->Clientsmanage->admin_delete_bulk($delete_id);
								 }
								 $this->session->set_flashdata('clients', 'Records deleted successfully');
								 redirect(base_url('admin/clients/view'));
							}
						  else
						    {
								   $this->session->set_flashdata('clients', 'Nothing to delete');
								   redirect(base_url('admin/clients/view'));
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
								$this->load->model('admin/Clientsmanage');
								$data['Status']='N';
								$delete_sussess=$this->Clientsmanage->admin_deactivate_bulk($id,$data);
											
									   $this->session->set_flashdata('clients', 'Records deactivate successfully');
									   redirect(base_url('admin/clients/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('clients', 'Nothing to activate');
									   redirect(base_url('admin/clients/view'));
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
								$this->load->model('admin/Clientsmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Clientsmanage->admin_activate_bulk($id,$data);
											
									   $this->session->set_flashdata('clients', 'Records activated successfully');
									   redirect(base_url('admin/clients/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('clients', 'Nothing to activate');
									   redirect(base_url('admin/clients/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
