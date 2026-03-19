<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sponsors extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		   $this->load->model('admin/Sponsorsmanager');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/sponsor/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Sponsorsmanager->get_tatal();
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
		   
		    echo"sponser";
		   $data['sponsor']=$this->Sponsorsmanager->sponsor_view($config['per_page'],$offset);
		   $this->load->view('admin/sponsor_view',$data);
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		 		   
				$config['upload_path'] = './uploads/sponsor/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
				$field_name = "photo";
				
		  // -------------------------- form vaildation ---------------------------------------	   
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('name', 'sponsor name', 'required');
				if($this->form_validation->run() == true &&  $this->upload->do_upload($field_name)) 
		             {
					       $uploaddata = array('upload_data' => $this->upload->data());
						   $uploadfile1=$uploaddata['upload_data']['file_name'];
						   
						    $this->load->model('admin/Sponsorsmanager');
							$data=$_POST;
							@array_push($data['photo']=$uploadfile1,$uploadfile1);
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Sponsorsmanager->sponsor_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('sponsor', 'Records added successfully');
								redirect(base_url('admin/sponsors/view'));
							 }
						
					   }
					 else
					   {
					        $error = array('error' => $this->upload->display_errors());
					   		               		   
					         $this->load->view('admin/sponsor_add',$error);
					   }  			
				
		     }
		   else
		     {
			         
		                   $this->load->view('admin/sponsor_add');
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Sponsorsmanager")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
			      $uploadcheck='';
			 		$this->load->library('form_validation');
				   $this->form_validation->set_rules('name', 'sponsor name', 'required');
					if($this->form_validation->run() == true) 
					  {
				  		 $data=$_POST;
						 
						 
						    //------------------------------------ check file select or not and upload ------------
						 if($_FILES['photo']['name'] != '')
						   {
								$config['upload_path'] = './uploads/sponsor/';
								$config['allowed_types'] = 'gif|jpg|png|jpeg';
								$this->load->library('upload', $config);
								$field_name = "photo";
						        
								  if($this->upload->do_upload($field_name))
								     {
									      $uploaddata = array('upload_data' => $this->upload->data());
						                  $uploadfile1=$uploaddata['upload_data']['file_name'];
									      @array_push($data['photo']=$uploadfile1,$uploadfile1);
						         	 } 
						     }
						 
			      //------------------------------------ END Upload ---------------------------------------------------
						 
						 
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Sponsorsmanager->sponsor_edit_data($data,$_REQUEST['id']);
						 $this->session->set_flashdata('sponsor', 'Records updated successfully');
						 redirect(base_url('admin/sponsors/view'));
					  }
					 else
					  {  
					       $error = array('error' => $this->upload->display_errors());
						   $data['edit_sponsor']=$this->Sponsorsmanager->sponsor_edit($_REQUEST['id']);
						   $this->load->view('admin/sponsor_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		 
			     $data['edit_sponsor']=$this->Sponsorsmanager->sponsor_edit($_REQUEST['id']);
			     $this->load->view('admin/sponsor_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Sponsorsmanager');
			$delete_sussess=$this->Sponsorsmanager->sponsor_delete($_REQUEST['id'])  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('sponsor', 'Records deleted successfully');
		       redirect(base_url('admin/sponsors/view'));
		     }	
	        
	  }  
	  
}

?>
