<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  City extends MY_controller {
// ------------------------------------ check valid users ------------------------------------------------------------------- roomtype
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Citymanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/city/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Citymanage->get_tatal();
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
				
		   $data['city']=$this->Citymanage->city_view($config['per_page'] , $offset);
		   
		   $this->load->view('admin/city_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {

		 
	   if($this->input->post('flag')=='yes') 
		    {
		      
		   
		       // -------------------------- form vaildation ---------------------------------------
		                $this->load->library('form_validation');
						
						$this->form_validation->set_rules('city_name', 'city_name', 'required');
						
					
				if($this->form_validation->run() == true) 
		             {
					 
					// print_r($_POST); die;
						   $this->load->model('admin/Citymanage');
							$data=$_POST;
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Citymanage->city_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('City', 'Records added successfully');
								redirect(base_url('admin/city/view'));
							 }
						
					   }
					 else
					   { 
					 
					       $this->load->model('admin/Citymanage');						 
					        $this->load->view('admin/city_add',$data);
					   }  			
				
		     }
		   else
		     {
			             $this->load->model('admin/Citymanage');
						 $data['country_list']=$this->Citymanage->country_list();
						 $data['state_list']=$this->Citymanage->state_list();
					     $this->load->view('admin/city_add',$data);
						   
		     }	
		 
	}
	
// ------------------------------- Edit  funnctin edit record  ------------------------------
// ------------------------------- Edit  funnctin edit record  ------------------------------
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Citymanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
			        $id=$this->input->post('id');
					$this->form_validation->set_rules('city_name', 'city_name', 'required');
					if($this->form_validation->run() == true) 
					  {
				  
						                 $data=$_POST;
						 		
							
									 unset($data['flag']);
									 unset($data['smt_enter']);
									 unset($data['id']);
									 $this->Citymanage->city_edit_data($data,$id);
									 $this->session->set_flashdata('City', 'Records updated successfully.');
									 redirect(base_url('admin/city/view'));
					  }
					 else
					  {
						   $data['edit_city']=$this->Citymanage->city_edit($id);
						    $data['country_list']=$this->Citymanage->country_list();
						 $data['state_list']=$this->Citymanage->state_list();
						   $this->load->view('admin/city_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_city']=$this->Citymanage->city_edit($id);
				 $data['country_list']=$this->Citymanage->country_list();
				$data['state_list']=$this->Citymanage->state_list(); 
			     $this->load->view('admin/city_modify',$data);
	        
		     }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Citymanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Citymanage->city_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('City', 'Records deleted successfully');
		       redirect(base_url('admin/city/view'));
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
								$this->load->model('admin/Citymanage');
								$delete_sussess=$this->Citymanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('city', 'Records deleted successfully');
									   redirect(base_url('admin/city/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('city', 'Nothing to delete');
									   redirect(base_url('admin/city/view'));
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
								$this->load->model('admin/Citymanage');
								$data['Status']='N';
								$delete_sussess=$this->Citymanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('City', 'Records deactivate successfully');
									   redirect(base_url('admin/city/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('City', 'Nothing to activate');
									   redirect(base_url('admin/city/view'));
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
								$this->load->model('admin/Citymanage');
								$data['Status']='Y';
								$delete_sussess=$this->Citymanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('city', 'Records activated successfully');
									   redirect(base_url('admin/city/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('city', 'Nothing to activate');
									   redirect(base_url('admin/city/view'));
						   }			 
					}
		
		  }
		  
			 public function getStateList(){
			 	
				 	$this->load->model('admin/Citymanage');
					$data['state_list']=$this->Citymanage->getStateList();
			 		$this->load->view('admin/get_state_view',$data);
			 }
			 
		
	  
	  
}

?>
