<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogposting extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view(){
		        $this->load->model('admin/Blogpostingmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/blogposting/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Blogpostingmanage->get_tatal();
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
				
		   $data['blogposting']=$this->Blogpostingmanage->blogposting_view($config['per_page'] , $offset);
		   $this->load->view('admin/blogposting_view',$data);
		 
		   
		  
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
				$this->form_validation->set_rules('Title', 'Title name', 'required');
				$this->form_validation->set_rules('BlogCatID', 'Category name', 'required');
				 $this->load->model('admin/blogpostingmanage');
				 // $sourceCity=$this->input->post('sourceCity');
				if($this->form_validation->run() == true) 
		             {

						   $this->load->model('admin/Blogpostingmanage');
							$data=$_POST;
							
						// Images One ---------------------------------- 

									 if($_FILES['Photo_Thumb']['name'] != '')
									{
										$config['upload_path'] = './uploads/blog/';
										$config['allowed_types'] = 'gif|jpg|png|jpeg';
										$this->load->library('upload', $config);
										$field_name = "Photo_Thumb";
										if($this->upload->do_upload($field_name))
											 {
												  $uploaddata = array('upload_data' => $this->upload->data());
												  $uploadfile1=$uploaddata['upload_data']['file_name'];
												  @array_push($data['Photo_Thumb']=$uploadfile1,$uploadfile1);
											 } 
									 }


									 // Images 2 



											 if($_FILES['Photo']['name'] != '')
									{
										$config['upload_path'] = './uploads/blog/';
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
							


							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Blogpostingmanage->blogposting_add($data);
							if($insert==1)
							{
								$this->session->set_flashdata('blogposting', 'Records added successfully');
								redirect(base_url('admin/blogposting/view'));
							 }
						
					   }
					 else
					   {


							  $this->load->model('admin/Blogpostingmanage');
                              $data['Blog_category_dropdown']=$this->Blogpostingmanage->category_dropdown();
						      $this->load->view('admin/blogposting_add',$data);
					   }  			
				
		     }
		   else
		     {
		     		$this->load->model('admin/Blogpostingmanage');
					$data['Blog_category_dropdown']=$this->Blogpostingmanage->category_dropdown();
                   $this->load->view('admin/blogposting_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/blogpostingmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('Title', 'Title name', 'required');
				    $this->form_validation->set_rules('BlogCatID', 'Category name', 'required');
			       $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
							 $data=$_POST;
        
        	// Images One ---------------------------------- 

									 if($_FILES['Photo_Thumb']['name'] != '')
									{
										$config['upload_path'] = './uploads/blog/';
										$config['allowed_types'] = 'gif|jpg|png|jpeg';
										$this->load->library('upload', $config);
										$field_name = "Photo_Thumb";
										if($this->upload->do_upload($field_name))
											 {
												  $uploaddata = array('upload_data' => $this->upload->data());
												  $uploadfile1=$uploaddata['upload_data']['file_name'];
												  @array_push($data['Photo_Thumb']=$uploadfile1,$uploadfile1);
											 } 
									 }


									 // Images 2 



											 if($_FILES['Photo']['name'] != '')
									{
										$config['upload_path'] = './uploads/blog/';
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




							 unset($data['flag']);
							 unset($data['smt_enter']);
							 unset($data['id']);
							 
							 $this->blogpostingmanage->blogposting_edit_data($data,$id);
							 
							 $this->session->set_flashdata('blogposting', 'Records updated successfully');
							 redirect(base_url('admin/blogposting/view'));
						 
					  }
					 else
					  {    $this->load->model('admin/Blogpostingmanage');
						    $data['edit_blogposting']=$this->blogpostingmanage->blogposting_edit($id);

                              $data['Blog_category_dropdown']=$this->Blogpostingmanage->category_dropdown();
						    $this->load->view('admin/blogposting_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		         $this->load->model('admin/Blogpostingmanage');
		         $id=$this->input->get('id');
			     $data['edit_blogposting']=$this->blogpostingmanage->blogposting_edit($id);
                 $data['Blog_category_dropdown']=$this->Blogpostingmanage->category_dropdown();
			     $this->load->view('admin/blogposting_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/blogpostingmanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->blogpostingmanage->blogposting_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('blogposting', 'Records deleted successfully');
		       redirect(base_url('admin/blogposting/view'));
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
								$this->load->model('admin/Blogpostingmanage');
								$delete_sussess=$this->Blogpostingmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('blogposting', 'Records deleted successfully');
									   redirect(base_url('admin/blogposting/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('blogposting', 'Nothing to delete');
									   redirect(base_url('admin/blogposting/view'));
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
								$this->load->model('admin/Blogpostingmanage');
								$data['Status']='N';
								$delete_sussess=$this->Blogpostingmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('blogposting', 'Records deactivate successfully');
									   redirect(base_url('admin/blogposting/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('blogposting', 'Nothing to activate');
									   redirect(base_url('admin/blogposting/view'));
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
								$this->load->model('admin/Blogpostingmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Blogpostingmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('blogposting', 'Records activated successfully');
									   redirect(base_url('admin/blogposting/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('blogposting', 'Nothing to activate');
									   redirect(base_url('admin/blogposting/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
