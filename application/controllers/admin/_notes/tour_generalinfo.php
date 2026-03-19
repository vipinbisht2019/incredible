<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_generalinfo extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		      $this->load->model('admin/Tour_generalinfomanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/tour_generalinfo/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Tour_generalinfomanage->get_tatal();
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
				
		   $data['generalinfo']=$this->Tour_generalinfomanage->generalinfo_view($config['per_page'] , $offset);
		   $this->load->view('admin/tour_generalinfo_view',$data);
		   
		   
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
public function add()
  {
	    //echo"------------".$this->input->post('flag');
    if($this->input->post('flag')=='yes') 
		   {
					//echo"<pre>";
					 // print_r($_POST);
					//echo"</pre>";
					//die();
		      // -------------------------- form vaildation ---------------------------------------
		        $this->load->library('form_validation');
				$this->form_validation->set_rules('TourName', 'name', 'required');
				$this->form_validation->set_rules('TourTitle', 'title', 'required');
				$this->form_validation->set_rules('TourCatId', 'category', 'required');
				$this->form_validation->set_rules('TheamsId', 'theam', 'required');
				$this->form_validation->set_rules('TourDescription', 'description', 'required');
			  if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Tour_generalinfomanage');
							$data=$_POST;
							$data_2=array();
							$data_1=array();
							
			 //------------------------------------ check file select or not and upload ------------
						//------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/tourimage/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['Image']=$uploadfile1,$uploadfile1);
															}
														  else
														   {
														       @array_push($data_2[$i-1]['ImageName']=$uploadfile1,$uploadfile1);
														   } 	   
													 } 
											 }
									   }	
				//------------------------------------ END Upload ---------------------------------------------------  
							
									unset($data['flag']);
									unset($data['smt_enter']); 
									unset($data['smt_enter_nxt']);
									unset($data['TypeId']);
									unset($data['VehicleId']);
							
							$tour_id=$this->Tour_generalinfomanage->generalinfo_add($data);
							if($tour_id>0)
							 {
							     //---------------------associate bus type --------------------------------------------------- 
								     $data_1=$this->input->post('TypeId');
								
								 if(count($data_1) > 0)
								     { 
								       $this->Tour_generalinfomanage->generalinfo_busestype_assoc($data_1,$tour_id,'no');  
									 } 
								 //---------------------associate more images ---------------------------------------------------   
																
								 if(count($data_2) > 0)
								  {
								    $this->Tour_generalinfomanage->generalinfo_images_add($data_2,$tour_id);
								  }
								  
								//---------------------associate vehicle type ------------------------------------------------
								 $data_3=$this->input->post('VehicleId');
								 if(count($data_3) > 0)
								     { 
								       $this->Tour_generalinfomanage->generalinfo_vehicle_assoc($data_3,$tour_id,'no');  
									 } 
								 //---------------------associate bus type ---------------------------------------------------   
								  
								  	
								  
							       $this->session->set_flashdata('generalinfo', 'Records added successfully');
								   if($this->input->post('smt_enter')!='')
								      {
								       redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_pricedestination/edit?TourId='.$tour_id));   
									  } 
							 }
						
					   }
					 else
					   {
					   
							$this->load->model('admin/Tour_generalinfomanage');
							$data['tour_category_dropdown']=$this->Tour_generalinfomanage->category_dropdown();
							$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
							$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
							$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
							$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
							$this->load->view('admin/tour_generalinfo_add',$data);
					   }  			
				
		     }
		   else
		     {   
						$this->load->model('admin/Tour_generalinfomanage');
						$data['tour_category_dropdown']=$this->Tour_generalinfomanage->category_dropdown();
						$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
						$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
						$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
						$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
						$this->load->view('admin/tour_generalinfo_add',$data);
						   
		     }	
		 
	}
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
	       $this->load->model("admin/Tour_generalinfomanage")  ;
		    
	       if($this->input->post('flag')=='yes') 
		     {
			         $id=$this->input->post('id');
						$this->load->library('form_validation');
						$this->form_validation->set_rules('TourName', 'name', 'required');
						$this->form_validation->set_rules('TourTitle', 'title', 'required');
						$this->form_validation->set_rules('TourCatId', 'category', 'required');
						$this->form_validation->set_rules('TheamsId', 'theam', 'required');
						$this->form_validation->set_rules('TourDescription', 'description', 'required');
			
					if($this->form_validation->run() == true) 
					  {
				  
						 $data=$_POST;
//------------------------------------ check file select or not and upload ------------
						//------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/tourimage/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
												
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['Image']=$uploadfile1,$uploadfile1);
															}
														  else
														   {
														       @array_push($data_2[$i-1]['ImageName']=$uploadfile1,$uploadfile1);
														   } 	   
													 } 
											 }
									   }	
				//------------------------------------ END Upload ---------------------------------------------------
             	 
									 unset($data['flag']);
									 unset($data['id']);
									 unset($data['smt_enter']);
									 unset($data['smt_enter_nxt']);
									 unset($data['TypeId']);
									 unset($data['VehicleId']);
						 
						 $this->Tour_generalinfomanage->generalinfo_edit_data($data,$id);
						 
						  //---------------------associate bus type ---------------------------------------------------
						     	$data_1=$this->input->post('TypeId');
								 if(count($data_1) > 0)
								     { 
								       $this->Tour_generalinfomanage->generalinfo_busestype_assoc($data_1,$id,'yes');  
									 } 
									else
									 {
									     $data_1=array(0);
										 $this->Tour_generalinfomanage->generalinfo_busestype_assoc($data_1,$id,'yes');  
									 } 
					           //---------------------associate vehicle type ------------------------------------------------
								 $data_3=$this->input->post('VehicleId');
								 if(count($data_3) > 0)
								     { 
								       $this->Tour_generalinfomanage->generalinfo_vehicle_assoc($data_3,$id,'yes');  
									 } 
								
								
								 if(count($data_2) > 0)
								  {
								    $this->Tour_generalinfomanage->generalinfo_images_add($data_2,$id);
								  }	
						 
						 
						     if($this->input->post('smt_enter')!='')
								      {
									    $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								        redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_pricedestination/edit?TourId='.$id));   
									  } 
					  }
					 else
					  {
							$id=$this->input->post('id');
							$data['edit_generalinfo']=$this->Tour_generalinfomanage->generalinfo_edit($id);
							$data['tour_category_dropdown']=$this->Tour_generalinfomanage->category_dropdown();
							$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
							$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
							$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
							$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
							$data['edit_busestype']=$this->Tour_generalinfomanage->generalinfo_busestype_edit($id);
							$data['edit_bigimages']=$this->Tour_generalinfomanage->generalinfo_bigimages_edit($id);
							$data['edit_vehicletype']=$this->Tour_generalinfomanage->generalinfo_vehicletype_edit($id);
							$this->load->view('admin/tour_generalinfo_modify',$data);
					  } 	  
					  
		     }
	      else
		    {
		  
		            $id=$this->input->get('id');
					$data['edit_generalinfo']=$this->Tour_generalinfomanage->generalinfo_edit($id);
					$data['tour_category_dropdown']=$this->Tour_generalinfomanage->category_dropdown();
					$data['tour_theams_dropdown']=$this->Tour_generalinfomanage->theams_dropdown();
					$data['tour_bustype_dropdown']=$this->Tour_generalinfomanage->dropdown_busestype();
					$data['tour_frequency_dropdown']=$this->Tour_generalinfomanage->frequency_dropdown();
					$data['tour_vehicletype_dropdown']=$this->Tour_generalinfomanage->vehicletype_dropdown();
					$data['edit_busestype']=$this->Tour_generalinfomanage->generalinfo_busestype_edit($id);
					$data['edit_bigimages']=$this->Tour_generalinfomanage->generalinfo_bigimages_edit($id);
					$data['edit_vehicletype']=$this->Tour_generalinfomanage->generalinfo_vehicletype_edit($id);
				    $this->load->view('admin/tour_generalinfo_modify',$data);
				
		
		  }	
   }  
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
			$this->load->model('admin/Tour_generalinfomanage');
			$id=$this->input->get('id');
			$delete_sussess=$this->Tour_generalinfomanage->generalinfo_delete($id)  ; 
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('generalinfo', 'Records deleted successfully');
		       redirect(base_url('admin/tour_generalinfo/view'));
		     }	
	        
	  } 

// ------------------------------- Delete  funnctin to delete more images ------------------------------		 
	public function moreimagesdelete()
	  {
			$this->load->model('admin/Tour_generalinfomanage');
			$id=$this->input->get('id');
			$iid=$this->input->get('iid');
			
			$image_path = './uploads/tourimage/';
		
			 $imagename_arr=$this->Tour_generalinfomanage->generalinfo_more_image($iid);
			 $imagename=$imagename_arr['0']['ImageName'];
			 
			    // delete file, if exists...
			 $filename = $image_path . $imagename; 
			 if(file_exists($filename))
				 {
					unlink($filename);
				 }
		

			
			//$delete_sussess=$this->Tour_generalinfomanage->generalinfo_delete($_REQUEST['id'])  ; 
		  	 $delete_sussess=1;
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('generalinfo', 'Image deleted successfully');
		       redirect(base_url('admin/tour_generalinfo/edit?id='.$id));
		     }	
	        
	  } 
// ------------------------------- Delete  funnctin to delete main images ------------------------------	  
	  	  
	  
	  public function mainimagesdelete()
	  {
			$this->load->model('admin/Tour_generalinfomanage');
			$id=$this->input->get('id');
			$image_path = './uploads/tourimage/';
		
			 $imagename_arr=$this->Tour_generalinfomanage->generalinfo_main_image($id);
			 $imagename=$imagename_arr['0']['Image'];
			 // delete file, if exists...
			 $filename = $image_path . $imagename; 
		
			 if(file_exists($filename))
				 {
					unlink($filename);
				 }
				 
			//-----------------------------set null vlaaue ------------------------------------	 				
			   $data['Image']='';
			   $imagename_arr=$this->Tour_generalinfomanage->generalinfo_edit_data($data,$id);
			  
			  
	
		    //$delete_sussess=$this->Tour_generalinfomanage->generalinfo_delete($_REQUEST['id'])  ; 
		  	 $delete_sussess=1;
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('generalinfo', 'Image deleted successfully');
		       redirect(base_url('admin/tour_generalinfo/edit?id='.$id));
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
								$this->load->model('admin/Tour_generalinfomanage');
								$delete_sussess=$this->Tour_generalinfomanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('generalinfo', 'Records deleted successfully');
									   redirect(base_url('admin/generalinfo/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('generalinfo', 'Nothing to delete');
									   redirect(base_url('admin/tour_generalinfo/view'));
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
								$this->load->model('admin/Tour_generalinfomanage');
								$data['Status']='N';
								$delete_sussess=$this->Tour_generalinfomanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('generalinfo', 'Records deactivate successfully');
									   redirect(base_url('admin/tour_generalinfo/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('generalinfo', 'Nothing to activate');
									   redirect(base_url('admin/tour_generalinfo/view'));
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
								$this->load->model('admin/Tour_generalinfomanage');
								$data['Status']='Y';
								$delete_sussess=$this->Tour_generalinfomanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('generalinfo', 'Records activated successfully');
									   redirect(base_url('admin/tour_generalinfo/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('generalinfo', 'Nothing to activate');
									   redirect(base_url('admin/tour_generalinfo/view'));
						   }			 
					}
				
			
		 }
 }

?>
