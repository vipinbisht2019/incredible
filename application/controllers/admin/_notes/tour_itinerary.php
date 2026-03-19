<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_itinerary extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {

	       $this->load->model("admin/Tour_itinerarymanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
						$TourId=$this->input->post('TourId');
						$this->Tour_itinerarymanage->tour_itinerary_delete($TourId);
						$ItineraryTitle=$this->input->post('ItineraryTitle');
						$category_id=$this->input->post('category_id');
						$city_id=$this->input->post('city_id');
						$Description=$this->input->post('Description');
						$ItenaryDay=$this->input->post('ItenaryDay');
						$IsNightStay=$this->input->post('IsNightStay');
						$IsBreakfast=$this->input->post('Breakfast');
						$IsDinner=$this->input->post('Dinner');
						$Image=$this->input->post('Image');
			
					  for($ii=0;$ii<count($ItineraryTitle);$ii++)
						   {
						        $data=array();
						        $data['ItineraryTitle']=$ItineraryTitle[$ii];
							    $data['category_id']=$category_id[$ii];
								$data['city_id']=$city_id[$ii];
								$data['Description']=$Description[$ii];
								$data['TourId']=$TourId;
								$data['ItenaryDay']=$ItenaryDay[$ii];
						if($IsNightStay[$ii]!='')		
								$data['IsNightStay']=$IsNightStay[$ii];
						     else
						   		$data['IsNightStay']='N';
					 //---------------Breakfast----------------------  
					   if($IsBreakfast[$ii]!='')		
								$data['IsBreakfast']=$IsBreakfast[$ii];
						     else
						   		$data['IsBreakfast']='N';
					//---------------Dinner----------------------  
					   if($IsDinner[$ii]!='')		
								$data['IsDinner']=$IsDinner[$ii];
						     else
						   		$data['IsDinner']='N';						
								
						// 	
							
							    $totalImageToUpload=$_FILES['SmallImage']['name'][$ii];
							
							 for($i=0;$i<count($totalImageToUpload);$i++)
								      {
									//------------------------------------ check file select or not and upload ------------
										if($_FILES['SmallImage']['name'][$ii][$i]!= '')
											{
												$config['upload_path'] = './uploads/tourimage/';
												$config['allowed_types'] = 'gif|jpg|png|jpeg';
												$this->load->library('upload', $config);
													$_FILES['userfile']['name']     = $_FILES['SmallImage']['name'][$ii][$i];
													$_FILES['userfile']['type']     = $_FILES['SmallImage']['type'][$ii][$i];
													$_FILES['userfile']['tmp_name'] = $_FILES['SmallImage']['tmp_name'][$ii][$i];
													$_FILES['userfile']['error']    = $_FILES['SmallImage']['error'][$ii][$i];
													$_FILES['userfile']['size']     = $_FILES['SmallImage']['size'][$ii][$i];
												
												
												$field_name = "userfile";
												if($this->upload->do_upload($field_name))
													 {
														  $uploaddata = array('upload_data' => $this->upload->data());
														  $uploadfile1=$uploaddata['upload_data']['file_name'];
														  if($i==0)
														    {
														      @array_push($data['Image1']=$uploadfile1,$uploadfile1);
															}
														  else
														    {
														       @array_push($data['Image2']=$uploadfile1,$uploadfile1);
														    } 	   
													 } 
											 }
											else
											 {
											         $uploadfile1=$Image[$ii][$i];
													 if($uploadfile1!='')
													     {
											   
															  if($i==0)
																	{
																	  @array_push($data['Image1']=$uploadfile1,$uploadfile1);
																	}
																  else
																	{
																	   @array_push($data['Image2']=$uploadfile1,$uploadfile1);
																	} 
														 }				   
											 
											 } 
											 
									//------------------------------------ END Upload ---------------------------------------------------
									    }
							
									$this->Tour_itinerarymanage->tour_itinerary_add($data);
									
									//redirect(base_url('admin/locations/view'));
							}
							
							 if($this->input->post('smt_enter')!='')
								      {
									   $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								       redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									    redirect(base_url('admin/tour_hotels/edit?TourId='.$TourId));
									  } 	
						
					        
				  
					  
		     }
	       else
		     {
		  
		 
			    // $data['edit_locations']=$this->Tour_itinerarymanage->locations_edit($_REQUEST['id']);  tour_itinerary_edit($id)
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['tour_no_day']=$this->Tour_itinerarymanage->tour_get_day($TourId);
						$data['itinerary_details']=$this->Tour_itinerarymanage->tour_itinerary_edit($TourId);
						$this->load->view('admin/tour_itinerary_add',$data);
				
	        
		    }	
   }  

	  
	
 }

?>
