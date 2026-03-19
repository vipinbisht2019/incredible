<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statichome extends MY_controller 
 {
     
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
	            $this->load->model('admin/Staticmanage');
			 	
				$this->load->library('pagination');
				$config['base_url'] = base_url('admin/statichome/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Staticmanage->get_tatal();
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
		   
		   $data['staticlist']=$this->Staticmanage->static_view($config['per_page'] , $offset);
		   $this->load->view('admin/static_home_view', $data);
		  
		     
	  }


// ------------------------------- Edit  funnctin edit record  ------------------------------	 header_image      
public function edit()
   {
	       $this->load->model("admin/Staticmanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
			      
			 
					$this->load->library('form_validation');
					$this->form_validation->set_rules('page_name', 'page name', 'required');
					$this->form_validation->set_rules('PageTitle', 'page title', 'required');
					$this->form_validation->set_rules('page_description', 'page description', 'required');
					 $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
						 $data=$_POST;
						 
						   //---------------------- check file select or not and upload ------------
									if($_FILES['header_image']['name'] != '')
									{
										 $config['upload_path'] = './uploads/menu/';
										 $config['allowed_types'] = 'gif|jpg|png|jpeg';
										 $this->load->library('upload', $config);
										 $field_name = "header_image";
										
										if($this->upload->do_upload($field_name))
										 {
											  $uploaddata = array('upload_data' => $this->upload->data());
											  $uploadfile1=$uploaddata['upload_data']['file_name'];
											  @array_push($data['header_image']=$uploadfile1,$uploadfile1);
										 } 
									}
									//------------------------------------ END Upload ------------------------
						 
						 
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Staticmanage->static_edit_data($data,$id);
						 
						 $this->session->set_flashdata('static', 'Static page content updated successfully');
						 redirect(base_url('admin/statichome/view'));
					  }
					 else
					  {
						    $data['edit_static_home']=$this->Staticmanage->static_edit($id);
			                $this->load->view('admin/static_home_modify',$data);
					  } 	  
					  
		     }
	      else
		     {
		          $id=$this->input->get('id');
			     $data['edit_static_home']=$this->Staticmanage->static_edit($id);
			     $this->load->view('admin/static_home_modify',$data);
	         }	
   }    

	
	
 }

?>
