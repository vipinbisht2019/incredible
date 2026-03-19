<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		       $this->load->model('admin/Featuremanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/feature/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Featuremanage->get_tatal();
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
				
		   $data['feature']=$this->Featuremanage->feature_view($config['per_page'] , $offset);
		   $this->load->view('admin/feature_view',$data);
		 
		   
		  
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
				$this->form_validation->set_rules('TourFeatureName', 'feature title', 'required');
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Featuremanage');
							$data=$_POST;
							
								//------------------------------------ check file select or not and upload ------------
										 if($_FILES['Photo']['name'] != '')
											{
												$config['upload_path'] = './uploads/tour/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												$field_name = "Photo";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  @array_push($data['Photo']=$uploadfile1,$uploadfile1);
													 } 
											 }
								//------------------------------------ END Upload ---------------------------------------------------
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Featuremanage->feature_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('feature', 'Records added successfully');
								redirect(base_url('admin/feature/view'));
							 }
						
					   }
					 else
					   {
					      $this->load->view('admin/feature_add');
					   }  			
				
		     }
		   else
		     {
			         
		                   $this->load->view('admin/feature_add');
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Featuremanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('TourFeatureName', 'feature title', 'required');
							$id=$this->input->post('id');
			
					if($this->form_validation->run() == true) 
					  {
				  
						 $data=$_POST;
						 		//------------------------------------ check file select or not and upload ------------
										 if($_FILES['Photo']['name'] != '')
											{
												$config['upload_path'] = './uploads/tour/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												$field_name = "Photo";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  @array_push($data['Photo']=$uploadfile1,$uploadfile1);
													 } 
											 }
								//------------------------------------ END Upload ---------------------------------------------------
						 
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Featuremanage->feature_edit_data($data,$id);
						 
						 $this->session->set_flashdata('feature', 'Records updated successfully');
						 redirect(base_url('admin/feature/view'));
					  }
					 else
					  {
						  $data['edit_feature']=$this->Featuremanage->feature_edit($id);
						  $this->load->view('admin/feature_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		         		$id=$this->input->get('id');
			     $data['edit_feature']=$this->Featuremanage->feature_edit($id);
			     $this->load->view('admin/feature_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Featuremanage');
					$id=$this->input->get('id');
			$delete_sussess=$this->Featuremanage->feature_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('feature', 'Records deleted successfully');
		       redirect(base_url('admin/feature/view'));
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
								$this->load->model('admin/Featuremanage');
								$delete_sussess=$this->Featuremanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('feature', 'Records deleted successfully');
									   redirect(base_url('admin/feature/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('feature', 'Nothing to delete');
									   redirect(base_url('admin/feature/view'));
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
								$this->load->model('admin/Featuremanage');
								$data['Status']='N';
								$delete_sussess=$this->Featuremanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('feature', 'Records deactivate successfully');
									   redirect(base_url('admin/feature/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('feature', 'Nothing to activate');
									   redirect(base_url('admin/feature/view'));
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
								$this->load->model('admin/Featuremanage');
								$data['Status']='Y';
								$delete_sussess=$this->Featuremanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('feature', 'Records activated successfully');
									   redirect(base_url('admin/feature/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('feature', 'Nothing to activate');
									   redirect(base_url('admin/feature/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
