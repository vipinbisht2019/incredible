<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sightseeing extends MY_controller {
// ------------------------------------ check valid users ------------------------------------------------------------------- hoteles
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		   $this->load->model('admin/Sightseeingmanage');
		   $data['sightseeinglist']=$this->Sightseeingmanage->sightseeing_view();
		   $this->load->view('admin/sightseeing_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
	public function add()
  	{
  		if($this->input->post('flag')=='yes') 
		{
		   
		    // -------------------------- form vaildation ---------------------------------------//
		                $this->load->library('form_validation');
						$this->form_validation->set_rules('title', 'title', 'required');
						$this->form_validation->set_rules('cityid', 'city', 'required');
						$this->form_validation->set_rules('stateid', 'state', 'required');
						$this->form_validation->set_rules('countryid', 'country', 'required');
			// -------------------------- form vaildation ---------------------------------------//
				
			if($this->form_validation->run() == true){
			   	
				$this->load->model('admin/Sightseeingmanage');
				$data=$_POST;
				
					if($_FILES['SmallImage']['name']!= '')
					{
						$config['upload_path'] = './uploads/sightseeing/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						
							$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'];
							$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'];
							$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'];
							$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'];
							$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'];
						
						
						$field_name = "userfile";
						if($this->upload->do_upload($field_name))
						 {
							  $uploaddata = array('upload_data' => $this->upload->data());
							  $uploadfile1=$uploaddata['upload_data']['file_name'];
							  @array_push($data['SmallImage']=$uploadfile1,$uploadfile1);
								
								 
						 } 
					 }
				  
						
					    //------------------------------------ END Upload ---------------------------------------------------
							  unset($data['flag']);
							  unset($data['smt_enter']);
						//--------------------------------- add hotel data ----------------------------------------------
							  $insert=$this->Sightseeingmanage->sightseeing_add($data);
						
						         
							
							if($insert > 0)
							 {
								$this->session->set_flashdata('Sightseeing', 'Records added successfully');
								redirect(base_url('admin/sightseeing/view'));
							 }
						
					   }
					 else
					   { 
					      
						  $this->load->model('admin/Sightseeingmanage');
					      $this->load->view('admin/sightseeing_add',$data);
					   }  			
				
		     }
		    else
		      {
					$this->load->model('admin/Sightseeingmanage');
					$data['country_list']=$this->Sightseeingmanage->country_list();
					$this->load->view('admin/sightseeing_add',$data);
			   }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  hoteltypeId 
	public function edit()
	   {
	       $this->load->model("admin/Sightseeingmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					    $this->load->library('form_validation');
						$this->form_validation->set_rules('title', 'Title', 'required');
						$this->form_validation->set_rules('City', 'city', 'required');
						$this->form_validation->set_rules('State', 'state', 'required');
						$this->form_validation->set_rules('Country', 'country', 'required');
						$id=$this->input->post('id');
						 
					if($this->form_validation->run() == true) 
					  {
				  
						$data=$_POST;
					
						if($_FILES['SmallImage']['name']!= '')
							{
							
									$config['upload_path'] = './uploads/sightseeing/';
									$config['allowed_types'] = 'gif|jpg|png|jpeg';
									$this->load->library('upload', $config);
									
									$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'];
									$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'];
									$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'];
									$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'];
									$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'];
								
								
								$field_name = "userfile";
								if($this->upload->do_upload($field_name))
									 {
										  $uploaddata = array('upload_data' => $this->upload->data());
										  $uploadfile1=$uploaddata['upload_data']['file_name'];
										  if($i==0)
											{
											  @array_push($data['SmallImage']=$uploadfile1,$uploadfile1);
											}
										  
									   } 
							   }
						  
								
								
								unset($data['flag']);
								unset($data['smt_enter']);
								
								$HotelEdit=$this->Sightseeingmanage->sightseeing_edit_data($data,$id);
						  
				
				           //------------------------ first delete hotel facilities then insert again -------------------------------
						 
				
						 $this->session->set_flashdata('Sightseeing', 'Records updated successfully');
						 redirect(base_url('admin/sightseeing/view'));
					  }
					 else
					  {
						    $data['edit_sightseeing']=$this->Sightseeingmanage->edit_sightseeing($id); 
						    $this->load->view('admin/sightseeing_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
			       $id=$this->input->get('id');
		  	      $data['edit_sightseeing']=$this->Sightseeingmanage->edit_sightseeing($id); 
				  $this->load->view('admin/sightseeing_modify',$data);
	         }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Sightseeingmanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Sightseeingmanage->hoteles_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('sightseeing', 'Records deleted successfully');
		       redirect(base_url('admin/sightseeing/view'));
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
								$this->load->model('admin/Hotelesmanage');
								$delete_sussess=$this->Hotelesmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('hoteles', 'Records deleted successfully');
									   redirect(base_url('admin/hoteles/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('hoteles', 'Nothing to delete');
									   redirect(base_url('admin/hoteles/view'));
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
								$this->load->model('admin/Hotelesmanage');
								$data['Status']='N';
								$delete_sussess=$this->Hotelesmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('hoteles', 'Records deactivate successfully');
									   redirect(base_url('admin/hoteles/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('hoteles', 'Nothing to activate');
									   redirect(base_url('admin/hoteles/view'));
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
								$this->load->model('admin/Hotelesmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Hotelesmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('hoteles', 'Records activated successfully');
									   redirect(base_url('admin/hoteles/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('hoteles', 'Nothing to activate');
									   redirect(base_url('admin/hoteles/view'));
						   }			 
					}
		
		  }
		  
		   public function getStateList(){
			 	
				 	$this->load->model('admin/Citymanage');
					$data['state_list']=$this->Citymanage->getStateList();
			 		$this->load->view('admin/get_state_view',$data);
			 }
			 
			  public function getCityList(){
			 	
				 	$this->load->model('admin/Citymanage');
					$data['city_list']=$this->Citymanage->getCityList();
			 		$this->load->view('admin/get_city_view',$data);
			 }
	  
	  
}

?>
