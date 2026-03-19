<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  State extends MY_controller {
// ------------------------------------ check valid users ------------------------------------------------------------------- roomtype
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Statemanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/state/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Statemanage->get_tatal();
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
				
		  $data['state']=$this->Statemanage->state_view($config['per_page'] , $offset);
		   $this->load->view('admin/state_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
		
		
		 
	   if($this->input->post('flag')=='yes') 
		    {
		      
		   //print_r($_POST); die;
		       // -------------------------- form vaildation ---------------------------------------
		                $this->load->library('form_validation');
						
						$this->form_validation->set_rules('StatesName', 'StatesName', 'required');
						
					
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Statemanage');
							$data=$_POST;
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Statemanage->state_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('State', 'Records added successfully');
								redirect(base_url('admin/state/view'));
							 }
						
					   }
					 else
					   { 
					 
					       $this->load->model('admin/Statemanage');
						   //$data['satte']=$this->Statemanage->roomtype_hotel(); 
						 
					        $this->load->view('admin/state_add',$data);
					   }  			
				
		     }
		   else
		     {
			             $this->load->model('admin/Statemanage');
						 //$data['state']=$this->Statemanage->roomtype_hotel(); 
						 $data['country_list']=$this->Statemanage->country_list();
					     $this->load->view('admin/state_add',$data);
						   
		     }	
		 
	}
	
// ------------------------------- Edit  funnctin edit record  ------------------------------
// ------------------------------- Edit  funnctin edit record  ------------------------------
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Statemanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('StatesName', 'StatesName', 'required');
					
			        $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
						$data=$_POST;						 
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Statemanage->state_edit_data($data,$id);
						 $this->session->set_flashdata('State', 'Records updated successfully.');
						 redirect(base_url('admin/state/view'));
					  }
					 else
					  {
						   $data['edit_state']=$this->Statemanage->state_edit($id);
						   $data['country_list']=$this->Statemanage->country_list();
						   $this->load->view('admin/state_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_state']=$this->Statemanage->state_edit($id);
				 $data['country_list']=$this->Statemanage->country_list();
			     $this->load->view('admin/state_modify',$data);
	        
		     }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Statemanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Statemanage->state_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('State', 'Records deleted successfully');
		       redirect(base_url('admin/state/view'));
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
								$this->load->model('admin/Statemanage');
								$delete_sussess=$this->Statemanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('State', 'Records deleted successfully');
									   redirect(base_url('admin/state/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('State', 'Nothing to delete');
									   redirect(base_url('admin/state/view'));
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
								$this->load->model('admin/Statemanage');
								$data['Status']='N';
								$delete_sussess=$this->Statemanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('State', 'Records deactivate successfully');
									   redirect(base_url('admin/state/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('state', 'Nothing to activate');
									   redirect(base_url('admin/state/view'));
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
								$this->load->model('admin/Statemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Statemanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('State', 'Records activated successfully');
									   redirect(base_url('admin/state/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('State', 'Nothing to activate');
									   redirect(base_url('admin/state/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
