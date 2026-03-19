<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallary_images extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
public function view()
	  {
	       $id=$this->input->get('id');
		   $this->load->model('admin/Gallary_imagemanager');
		   $data['gallary_image']=$this->Gallary_imagemanager->gallary_image_view($id);
		   $data['gallary_name']=$this->Gallary_imagemanager->get_gallary_name($id);
		    $data['id'] = $id;
		   
	   	   $this->load->view('admin/gallary_images_view',$data);
		   
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {

	 if($this->input->post('flag')=='yes') 
		   {
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('photo_name', 'image title', 'required');
		      //------------------------------------------------------------------------------------
			      
						$config['upload_path'] = './uploads/gallary/';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$field_name = "pitchure";		
				
				
				if($this->form_validation->run() == true &&  $this->upload->do_upload($field_name)) 
		              {
					        
							$uploaddata = array('upload_data' => $this->upload->data());
						    $uploadfile1=$uploaddata['upload_data']['file_name'];
							$id=$_POST['id'];
					  
						    $this->load->model('admin/Gallary_imagemanager');
							$data=$_POST;
							@array_push($data['pitchure']=$uploadfile1,$uploadfile1);
							unset($data['flag']);
							unset($data['smt_enter']);
						    unset($data['id']);
							$insert=$this->Gallary_imagemanager->gallary_image_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('gallary_image', 'Records added successfully');
								redirect(base_url('admin/gallary_images/view?id='.$id));
							 }
						
					   }
					 else
					   {
					           $error = array('error' => $this->upload->display_errors());
								
					          $this->load->model('admin/Gallary_imagemanager');
						  	  $data['gallary_name']=$this->Gallary_imagemanager->get_gallary_name($id);
							  $data['id'] = $id;
							  $data['error']=$error;
					          $this->load->view('admin/gallary_images_add?id='.$id,$data);
					   }  			
				
		     }
		   else
		     {
			      $id=$this->input->get('id');
			      $this->load->model('admin/Gallary_imagemanager');
				  $data['gallary_name']=$this->Gallary_imagemanager->get_gallary_name($id);
				   $data['id'] = $id;
			 	  $this->load->view('admin/gallary_images_add',$data);
			 }	
		 
	}

// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			 $this->load->model('admin/Gallary_imagemanager');
			 $image_id=$this->input->get('image_id');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Gallary_imagemanager->gallary_image_delete($image_id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('gallary_image', 'Records deleted successfully');
		       redirect(base_url('admin/gallary_images/view?id='.$id));
		     }	
	        
	  }  
	  
}

?>
