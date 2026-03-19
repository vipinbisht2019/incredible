<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carfeature extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		       $this->load->model('admin/Carfeaturemanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/carfeature/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Carfeaturemanage->get_tatal();
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
				
		   $data['carfeature']=$this->Carfeaturemanage->carfeature_view($config['per_page'] , $offset);
		   $this->load->view('admin/carfeature_view',$data);
		 
		   
		  
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
				$this->form_validation->set_rules('FeatureName', 'feature', 'required');
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Carfeaturemanage');
							$data=$_POST;
							
								
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Carfeaturemanage->carfeature_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('carfeature', 'Records added successfully');
								redirect(base_url('admin/carfeature/view'));
							 }
						
					   }
					 else
					   {
					      $this->load->view('admin/carfeature_add');
					   }  			
				
		     }
		   else
		     {
			         
		                   $this->load->view('admin/carfeature_add');
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Carfeaturemanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('FeatureName', 'feature', 'required');
			       $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 $this->Carfeaturemanage->carfeature_edit_data($data,$id);
							 
							 $this->session->set_flashdata('carfeature', 'Records updated successfully');
							 redirect(base_url('admin/carfeature/view'));
						 
					  }
					 else
					  {
						    $data['edit_carfeature']=$this->Carfeaturemanage->carfeature_edit($id);
						    $this->load->view('admin/carfeature_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		         $id=$this->input->get('id');
			     $data['edit_carfeature']=$this->Carfeaturemanage->carfeature_edit($id);
			     $this->load->view('admin/carfeature_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Carfeaturemanage');
			  $id=$this->input->get('id');
			$delete_sussess=$this->Carfeaturemanage->carfeature_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('carfeature', 'Records deleted successfully');
		       redirect(base_url('admin/carfeature/view'));
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
								$this->load->model('admin/Carfeaturemanage');
								$delete_sussess=$this->Carfeaturemanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('carfeature', 'Records deleted successfully');
									   redirect(base_url('admin/carfeature/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('carfeature', 'Nothing to delete');
									   redirect(base_url('admin/carfeature/view'));
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
								$this->load->model('admin/Carfeaturemanage');
								$data['Status']='N';
								$delete_sussess=$this->Carfeaturemanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('carfeature', 'Records deactivate successfully');
									   redirect(base_url('admin/carfeature/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('carfeature', 'Nothing to activate');
									   redirect(base_url('admin/carfeature/view'));
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
								$this->load->model('admin/Carfeaturemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Carfeaturemanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('carfeature', 'Records activated successfully');
									   redirect(base_url('admin/carfeature/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('carfeature', 'Nothing to activate');
									   redirect(base_url('admin/carfeature/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
