<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Roomtype extends MY_controller {
// ------------------------------------ check valid users ------------------------------------------------------------------- roomtype
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		        $this->load->model('admin/Roomtypemanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/roomtype/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Roomtypemanage->get_tatal();
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
				
		   $data['roomtype']=$this->Roomtypemanage->roomtype_view($config['per_page'] , $offset);
		   $this->load->view('admin/roomtype_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {

		 
	   if($this->input->post('flag')=='yes') 
		    {
		      
		   
		       // -------------------------- form vaildation ---------------------------------------
		                $this->load->library('form_validation');
						
						$this->form_validation->set_rules('RoomTitle', 'room type', 'required');
						//$this->form_validation->set_rules('HotelId', 'hotel', 'required');
					
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Roomtypemanage');
							$data=$_POST;
				
								//------------------------------------ check file select or not and upload -------------------------
								
									/*	 if($_FILES['Photo']['name']!= '')
											{
												$config['upload_path'] = './uploads/hotel/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												$field_name = "Photo";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  @array_push($data['Photo']=$uploadfile1,$uploadfile1);
													 } 
											 }*/
											 
								//------------------------------------ END Upload ---------------------------------------------------
							
							unset($data['flag']);
							unset($data['smt_enter']);
							$insert=$this->Roomtypemanage->roomtype_add($data);
							if($insert==1)
							 {
								$this->session->set_flashdata('roomtype', 'Records added successfully');
								redirect(base_url('admin/roomtype/view'));
							 }
						
					   }
					 else
					   { 
					 
					       $this->load->model('admin/Roomtypemanage');
						   $data['hotels']=$this->Roomtypemanage->roomtype_hotel(); 
						 
					        $this->load->view('admin/roomtype_add',$data);
					   }  			
				
		     }
		   else
		     {
			             $this->load->model('admin/Roomtypemanage');
						 $data['hotels']=$this->Roomtypemanage->roomtype_hotel(); 
						 
					     $this->load->view('admin/roomtype_add',$data);
						   
		     }	
		 
	}
	
// ------------------------------- Edit  funnctin edit record  ------------------------------
// ------------------------------- Edit  funnctin edit record  ------------------------------
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Roomtypemanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
					$this->load->library('form_validation');
					$this->form_validation->set_rules('RoomTitle', 'room type ', 'required');
					//$this->form_validation->set_rules('HotelId', 'hotel', 'required');
			        $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
						                 $data=$_POST;
						 		
								//------------------------------------ check file select or not and upload ------------------------
										/* if($_FILES['Photo']['name']!= '')
											{
												$config['upload_path'] = './uploads/hotel/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												$field_name = "Photo";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  @array_push($data['Photo']=$uploadfile1,$uploadfile1);
													 } 
											 }*/
								//------------------------------------ END Upload ---------------------------------------------------
						 
									 unset($data['flag']);
									 unset($data['smt_enter']);
									 unset($data['id']);
									 $this->Roomtypemanage->roomtype_edit_data($data,$id);
									 $this->session->set_flashdata('roomtype', 'Records updated successfully.');
									 redirect(base_url('admin/roomtype/view'));
					  }
					 else
					  {
						   $data['edit_roomtype']=$this->Roomtypemanage->roomtype_edit($id);
						   $data['hotels']=$this->Roomtypemanage->roomtype_hotel(); 
						   $this->load->view('admin/roomtype_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
		  
		         $id=$this->input->get('id');
			     $data['edit_roomtype']=$this->Roomtypemanage->roomtype_edit($id);
			     $data['hotels']=$this->Roomtypemanage->roomtype_hotel(); 
			     $this->load->view('admin/roomtype_modify',$data);
	        
		     }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Roomtypemanage');
			 $id=$this->input->get('id');
			$delete_sussess=$this->Roomtypemanage->roomtype_delete($id)  ; 
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('roomtype', 'Records deleted successfully');
		       redirect(base_url('admin/roomtype/view'));
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
								$this->load->model('admin/Roomtypemanage');
								$delete_sussess=$this->Roomtypemanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('roomtype', 'Records deleted successfully');
									   redirect(base_url('admin/roomtype/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('roomtype', 'Nothing to delete');
									   redirect(base_url('admin/roomtype/view'));
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
								$this->load->model('admin/Roomtypemanage');
								$data['Status']='N';
								$delete_sussess=$this->Roomtypemanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('roomtype', 'Records deactivate successfully');
									   redirect(base_url('admin/roomtype/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('roomtype', 'Nothing to activate');
									   redirect(base_url('admin/roomtype/view'));
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
								$this->load->model('admin/Roomtypemanage');
								$data['Status']='Y';
								$delete_sussess=$this->Roomtypemanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('roomtype', 'Records activated successfully');
									   redirect(base_url('admin/roomtype/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('roomtype', 'Nothing to activate');
									   redirect(base_url('admin/roomtype/view'));
						   }			 
					}
		
		  }
	  
	  
}

?>
