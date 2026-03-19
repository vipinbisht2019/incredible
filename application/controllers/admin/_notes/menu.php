<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Menumaager');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/menu/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Menumaager->get_tatal();
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
		   
		   
		   $data['menu']=$this->Menumaager->menu_view($config['per_page'] , $offset);
		
		   
		   $this->load->view('admin/menu_view',$data);
		  
		  //echo"menu view classs-----------------------";
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
     
	 
	 
	   		 
	if($this->input->post('flag')=='yes') 
		   {
		   
		       // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('MenuName', 'menu name', 'required');
				$this->form_validation->set_rules('MenuTitle', 'page title', 'required');
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Menumaager');
							$data=$_POST;
									
								//---------------------- check file select or not and upload ------------
											 if($_FILES['Image']['name'] != '')
											   {
													$config['upload_path'] = './uploads/menu/';
													$config['allowed_types'] = 'gif|jpg|png|jpeg';
													$this->load->library('upload', $config);
													$field_name = "Image";
													
													  if($this->upload->do_upload($field_name))
														 {
															  $uploaddata = array('upload_data' => $this->upload->data());
															  $uploadfile1=$uploaddata['upload_data']['file_name'];
															  @array_push($data['Image']=$uploadfile1,$uploadfile1);
														 } 
												 }
								//------------------------------------ END Upload ------------------------
									
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Menumaager->menu_add($data);
							
							if($insert>0)
							 {
							    $data1['menu_id']=$insert;
								$data1['page_name']=$this->input->post('MenuName'); 
								$data1['PageTitle']=$this->input->post('MenuName');
								$data1['page_description']='Coming Soon';
								
							    $insert1=$this->Menumaager->menu_staticpage_add($data1);
							     
							 
								$this->session->set_flashdata('menu', 'Records added successfully');
								redirect(base_url('admin/menu/view'));
							 }
						
					   }
					 else
					   {
					       $this->load->model('admin/Menumaager');
				       	   $data['parent1']=$this->Menumaager->menu_dropdown_data();
						   $data['page_assoc']=$this->Menumaager->menu_pages_data();
					       $this->load->view('admin/menu_add', $data);
					   }  			
				
		     }
		   else
		     {
			                $this->load->model('admin/Menumaager');
				            $data['parent1']=$this->Menumaager->menu_dropdown_data();
						    $data['page_assoc']=$this->Menumaager->menu_pages_data();
						    $this->load->view('admin/menu_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Menumaager")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
			         $id=$this->input->post('id');
					$this->load->library('form_validation');
					$this->form_validation->set_rules('MenuName', 'menu name', 'required');
			     	$this->form_validation->set_rules('MenuTitle', 'page title', 'required');
					if($this->form_validation->run() == true) 
					  {
				  
						 $data=$_POST;
						 
									//---------------------- check file select or not and upload ------------
									if($_FILES['Image']['name'] != '')
									{
										 $config['upload_path'] = './uploads/menu/';
										 $config['allowed_types'] = 'gif|jpg|png|jpeg';
										 $this->load->library('upload', $config);
										 $field_name = "Image";
										
										if($this->upload->do_upload($field_name))
										 {
											  $uploaddata = array('upload_data' => $this->upload->data());
											  $uploadfile1=$uploaddata['upload_data']['file_name'];
											  @array_push($data['Image']=$uploadfile1,$uploadfile1);
										 } 
									}
									//------------------------------------ END Upload ------------------------
						 
						 
						 unset($data['flag']);
						 unset($data['smt_enter']);
						 unset($data['id']);
						 $this->Menumaager->menu_edit_data($data,$id);
						 
						 $this->session->set_flashdata('menu', 'Records updated successfully');
						 redirect(base_url('admin/menu/view'));
					  }
					 else
					  {
					     
						  $data['edit_menu']=$this->Menumaager->menu_edit($id);
						  $data['parent1']=$this->Menumaager->menu_dropdown_data();
						  $data['page_assoc']=$this->Menumaager->menu_pages_data();
						  $this->load->view('admin/menu_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		           $id=$this->input->get('id');
		 
			     $data['edit_menu']=$this->Menumaager->menu_edit($id);
				 $data['parent1']=$this->Menumaager->menu_dropdown_data();
				 $data['page_assoc']=$this->Menumaager->menu_pages_data();
			     $this->load->view('admin/menu_modify',$data);
	        
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Menumaager');
			  $id=$this->input->get('id');
			$delete_sussess=$this->Menumaager->menu_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('menu', 'Records deleted successfully');
		       redirect(base_url('admin/menu/view'));
		     }	
	        
	  }  
  
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
								$this->load->model('admin/Menumaager');
								$delete_sussess=$this->Menumaager->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('admin_added', 'Records deleted successfully');
									   redirect(base_url('admin/menu/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('menu', 'Nothing to delete');
									   redirect(base_url('admin/menu/view'));
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
								$this->load->model('admin/Menumaager');
								$data['IsActive']='N';
								$delete_sussess=$this->Menumaager->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('menu', 'Records deactivate successfully');
									   redirect(base_url('admin/menu/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('menu', 'Nothing to activate');
									   redirect(base_url('admin/menu/view'));
						   }			 
					}
			  // ------------------------------- Bulk Action activate  ------------------------------			
				if($this->input->post('Activate')=='Activate')
				    {
					   //-------------------------------------------------------------------------------
					     $id=$this->input->post('bb');
						 if(count($id)>0)
						  {
						        $id_str=implode(",",$id);
								$this->load->model('admin/Menumaager');
								$data['IsActive']='Y';
								$delete_sussess=$this->Menumaager->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('menu', 'Records activated successfully');
									   redirect(base_url('admin/menu/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('menu', 'Nothing to activate');
									   redirect(base_url('admin/menu/view'));
						   }			 
					}
				
			
		 }	  
	  
	  
	  
}

?>
