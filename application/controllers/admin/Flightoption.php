<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flightoption extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Flightoptionmanage');
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/flightoption/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Flightoptionmanage->get_tatal();
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
				
		       $data['flightoption']=$this->Flightoptionmanage->flightoption_view($config['per_page'] , $offset);
		       $this->load->view('admin/flightoption_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
		 
	if($this->input->post('flag')=='yes') 
		   {
		      // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('Title', 'title', 'required');
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Flightoptionmanage');
							$data=$_POST;
							//------------------------------------ END Upload ---------------------------------------------------
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Flightoptionmanage->flightoption_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('flightoption', 'Records added successfully');
								redirect(base_url('admin/flightoption/view'));
							 }
						
					   }
					 else
					   {
					      $this->load->view('admin/flightoption_add');
					   }  			
				
		     }
		   else
		     {
			         
		                   $this->load->view('admin/flightoption_add');
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Flightoptionmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('Title', 'title', 'required');
					$id=$this->input->post('id');
			
					if($this->form_validation->run() == true) 
					  {
				  
						 $data=$_POST;
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Flightoptionmanage->flightoption_edit_data($data,$id);
						 $this->session->set_flashdata('flightoption', 'Records updated successfully');
						 redirect(base_url('admin/flightoption/view'));
					  }
					 else
					  {
						  $data['edit_flightoption']=$this->Flightoptionmanage->flightoption_edit($id);
						  $this->load->view('admin/flightoption_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_flightoption']=$this->Flightoptionmanage->flightoption_edit($id);
			     $this->load->view('admin/flightoption_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Flightoptionmanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Flightoptionmanage->flightoption_delete($id)  ; 
		   if($delete_sussess==1)	
		     {			
			    $this->session->set_flashdata('flightoption', 'Records deleted successfully');
		        redirect(base_url('admin/flightoption/view'));
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
						        
								$this->load->model('admin/Flightoptionmanage');
								foreach($delete_id as $id_str)
								 {
								   $delete_sussess=$this->Flightoptionmanage->admin_delete_bulk($delete_id);
								 }
								 $this->session->set_flashdata('flightoption', 'Records deleted successfully');
								 redirect(base_url('admin/flightoption/view'));
							}
						  else
						    {
								   $this->session->set_flashdata('flightoption', 'Nothing to delete');
								   redirect(base_url('admin/flightoption/view'));
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
								$this->load->model('admin/Flightoptionmanage');
								$data['Status']='N';
								$delete_sussess=$this->Flightoptionmanage->admin_deactivate_bulk($id,$data);
											
									   $this->session->set_flashdata('flightoption', 'Records deactivate successfully');
									   redirect(base_url('admin/flightoption/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('flightoption', 'Nothing to activate');
									   redirect(base_url('admin/flightoption/view'));
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
								$this->load->model('admin/Flightoptionmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Flightoptionmanage->admin_activate_bulk($id,$data);
											
									   $this->session->set_flashdata('flightoption', 'Records activated successfully');
									   redirect(base_url('admin/flightoption/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('flightoption', 'Nothing to activate');
									   redirect(base_url('admin/flightoption/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
