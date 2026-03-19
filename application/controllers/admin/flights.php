<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends MY_controller {
// ------------------------------------ check valid users ------------------------------------------------------------------- hoteles
    function __construct()
	   { 
           parent::__construct(); 
           $this->valid_user(); 
       } 
// ------------------------------- View funnctin load listing page while clicking on management ------------------------------
	public function view()
	  {
		
		       $this->load->model('admin/Flightsmanage');
		   
		        $this->load->library('pagination');
				$config['base_url'] = base_url('admin/flights/view');
				$config['per_page'] = 50; 
				$config['total_rows'] =$this->Flightsmanage->get_tatal();
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
				
		   $data['hoteles']=$this->Flightsmanage->flights_view($config['per_page'] , $offset);
		   $this->load->view('admin/flights_view',$data);
		 
		   
		  
	  }
// ------------------------------- Add funnctin add record  ------------------------------	
/*  public function add()
  {
	    //echo"------------".$this->input->post('flag');
		// die();
		 
	if($this->input->post('flag')=='yes') 
		   {
		   
		       // -------------------------- form vaildation ---------------------------------------
		                $this->load->library('form_validation');
						$this->form_validation->set_rules('hoteltypeId', 'hotel type', 'required');
						$this->form_validation->set_rules('HotelName', 'hotel', 'required');
						$this->form_validation->set_rules('Locality', 'loactaion', 'required');
						$this->form_validation->set_rules('cityid', 'cityid', 'required');
						$this->form_validation->set_rules('stateid', 'stateid', 'required');
						$this->form_validation->set_rules('countryid', 'countryid', 'required');
				
				if($this->form_validation->run() == true) 
		             {
						   $this->load->model('admin/Hotelesmanage');
							$data=$_POST;
							$data_1=$data['HotelFacilities'];
							
							
							
				
						//------------------------------------ check file select or not and upload ------------
						 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							 {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
												$config['upload_path'] = './uploads/hotel/';
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
														      @array_push($data['SmallImage']=$uploadfile1,$uploadfile1);
															}
														  else
														   {
														       @array_push($data['BigImage']=$uploadfile1,$uploadfile1);
														   } 	   
													 } 
											 }
									   }	
					
						
					    //------------------------------------ END Upload ---------------------------------------------------
							  unset($data['flag']);
							  unset($data['smt_enter']);
							  unset($data['HotelFacilities']);
						//--------------------------------- add hotel data ----------------------------------------------
							  $insert=$this->Hotelesmanage->hoteles_add($data);
						//--------------------------------- add hotel faclity data ----------------------------------------------
						      $insert_1=$this->Hotelesmanage->hoteles_facilities_add($data_1,$insert);
						         
							
							if($insert > 0)
							 {
								$this->session->set_flashdata('hoteles', 'Records added successfully');
								redirect(base_url('admin/hoteles/view'));
							 }
						
					   }
					 else
					   { 
					      
						  $this->load->model('admin/Hotelesmanage');
			              $data['hotel_facilities']=$this->Hotelesmanage->hotelfacilities();
						  $data['hoteltype']=$this->Hotelesmanage->hotel_type(); 
					      $this->load->view('admin/hoteles_add',$data);
					   }  			
				
		     }
		    else
		      {
			               $this->load->model('admin/Hotelesmanage');
			                $data['hotel_facilities']=$this->Hotelesmanage->hotelfacilities();
						    $data['hoteltype']=$this->Hotelesmanage->hotel_type();
						 	$data['country_list']=$this->Hotelesmanage->country_list();
							//$data['state_list']=$this->Hotelesmanage->state_list();
		                   $this->load->view('admin/hoteles_add',$data);
			   }	
		 
	} */

// ------------------------------- Edit  funnctin edit record  ------------------------------		  flighttypeId 
/*	public function edit()
   {
   
   
	       $this->load->model("admin/Flightsmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
					    $this->load->library('form_validation');
						$this->form_validation->set_rules('hoteltypeId', 'hotel type', 'required');
						$this->form_validation->set_rules('HotelName', 'hotel', 'required');
						$this->form_validation->set_rules('Locality', 'loactaion', 'required');
						$this->form_validation->set_rules('City', 'city', 'required');
						$this->form_validation->set_rules('State', 'state', 'required');
						$this->form_validation->set_rules('Country', 'country', 'required');
						 $id=$this->input->post('id');
					if($this->form_validation->run() == true) 
					  {
				  
						    $data=$_POST;
							
					
						  //------------------------------------ check file select or not and upload ------------
							 for($i = 0; $i <  count($_FILES['SmallImage']['name']); $i++) 
							      {
										if($_FILES['SmallImage']['name'][$i]!= '')
											{
											
													$config['upload_path'] = './uploads/hotel/';
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
														      @array_push($data['SmallImage']=$uploadfile1,$uploadfile1);
															}
														  else
														   {
														       @array_push($data['BigImage']=$uploadfile1,$uploadfile1);
														   } 	   
													   } 
											   }
									    }	
					
                         //------------------------------------ END Upload --------------------------------------------------- 
						 
								$data_HotelFacilities=$data['HotelFacilities'];
								$id=$data['id'];
								 //------------------------ first delete hotel facilities then insert again -------------------------------
						        $this->Hotelesmanage->hoteles_facilities_delete($id);	 
						        $this->Hotelesmanage->hoteles_facilities_add($data_HotelFacilities,$id);	
								
								unset($data['flag']);
								unset($data['smt_enter']);
								unset($data['HotelFacilities']);
								unset($data['id']);
								  
								
								$HotelEdit=$this->Hotelesmanage->hoteles_edit_data($data,$id);
						  
				
				           //------------------------ first delete hotel facilities then insert again -------------------------------
						 
				
						 $this->session->set_flashdata('hoteles', 'Records updated successfully');
						 redirect(base_url('admin/hoteles/view'));
					  }
					 else
					  {
						    $data['edit_hoteles']=$this->Hotelesmanage->hoteles_edit($id);
						    $data['hotel_facilities']=$this->Hotelesmanage->hotelfacilities();
				            $data['edit_hotel_facilities']=$this->Hotelesmanage->hoteles_facility_edit($id);
							$data['hoteltype']=$this->Hotelesmanage->hotel_type(); 
						    $this->load->view('admin/hoteles_modify',$data);
					  } 	  
					  
		     }
	       else
		     {
			       $id=$this->input->get('id');
		  	      $data['edit_hoteles']=$this->Hotelesmanage->hoteles_edit($id); 
				  $data['hotel_facilities']=$this->Hotelesmanage->hotelfacilities();
				  $data['edit_hotel_facilities']=$this->Hotelesmanage->hoteles_facility_edit($id);
		          $data['hoteltype']=$this->Hotelesmanage->hotel_type(); 
				  $this->load->view('admin/hoteles_modify',$data);
	         }	
   }  */
   
   
// ------------------------------- Delete  funnctin to Delete record  ------------------------------		 
	public function delete()
	  {
		  
			$this->load->model('admin/Flightsmanage');
			 $id=$this->input->get('id');
		//	$delete_sussess=$this->Flightsmanage->flights_delete($id)  ;
			$delete_sussess=1;		
		
		    if($delete_sussess==1)	
		     {			
			   $this->session->set_flashdata('flights', 'Records deleted successfully');
		       redirect(base_url('admin/flights/view'));
		     }	
	        
	  }  
	  
	  
	     // ------------------------------- Bulk Action activate, deactivate and delete  ------------------------------	
		 	  
 /*  public function bulk_action()
	     {
		     
		       // ------------------------------- Bulk Action  delete  ------------------------------		  	 
				if($this->input->post('Delete')=='Delete')
				    {
					   //----------------------------------------------   
					     $delete_id=$this->input->post('bb');
						 if(count($delete_id)>0)
						  {
						        $id_str=implode(",",$delete_id);
								$this->load->model('admin/Flightsmanage');
								$delete_sussess=$this->Flightsmanage->admin_delete_bulk($id_str);
								if($delete_sussess==1)	
									 {			
									   $this->session->set_flashdata('flights', 'Records deleted successfully');
									   redirect(base_url('admin/flights/view'));
									 }	
							}
						  else
						   {
						               $this->session->set_flashdata('flights', 'Nothing to delete');
									   redirect(base_url('admin/flights/view'));
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
								$this->load->model('admin/Flightsmanage');
								$data['Status']='N';
								$delete_sussess=$this->Flightsmanage->admin_deactivate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('flights', 'Records deactivate successfully');
									   redirect(base_url('admin/flights/view'));
									
							}
						  else
						   {
						               $this->session->set_flashdata('flights', 'Nothing to activate');
									   redirect(base_url('admin/flights/view'));
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
								$this->load->model('admin/Flightsmanage');
								$data['Status']='Y';
								$delete_sussess=$this->Flightsmanage->admin_activate_bulk($id_str,$data);
											
									   $this->session->set_flashdata('flights', 'Records activated successfully');
									   redirect(base_url('admin/flights/view'));
									
									 
							}
						  else
						   {
						               $this->session->set_flashdata('flights', 'Nothing to activate');
									   redirect(base_url('admin/flights/view'));
						   }			 
					}
		
		  }
		  
		  */
		  
		  
	/* 		public function getStateList()
			{
			 	
				 	$this->load->model('admin/Citymanage');
					$data['state_list']=$this->Citymanage->getStateList();
			 		$this->load->view('admin/get_state_view',$data);
			}
			 
			public function getCityList()
			{
			 	
				 	$this->load->model('admin/Citymanage');
					$data['city_list']=$this->Citymanage->getCityList();
			 		$this->load->view('admin/get_city_view',$data);
			}
	*/
	  
	  
}

?>
