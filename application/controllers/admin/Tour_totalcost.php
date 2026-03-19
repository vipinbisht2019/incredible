<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_totalcost extends MY_controller {

  function __construct()
  { 
	   parent::__construct(); 
	   $this->valid_user(); 
  
  } 

	 
	 
public function edit()
   {
    
	      $this->load->model("admin/Tour_totalcostmanage");
		  if($this->input->post('flag')=='yes') 
		     {
							
			
			        	$TourId=$this->input->post('TourId');
			            $this->Tour_totalcostmanage->tour_hotels_delete($TourId);
			            $HotelId=$this->input->post('HotelId');						
						$ItenaryDay=$this->input->post('ItenaryDay');
						$checkindate=$this->input->post('checkindate');
						$checkoutdate=$this->input->post('checkoutdate');
						$RoomId=$this->input->post('RoomId');
						$room_rate_type=$this->input->post('room_rate_type');
						$room_rate_price=$this->input->post('room_rate_price');
						$taxid=$this->input->post('taxid');
						$tax_type_per=$this->input->post('tax_type_per');
						$tax=$this->input->post('tax');
						
						
												
					    for($ii=0;$ii<count($HotelId);$ii++)
						   {
						   		
						            $data=array();
									$data['HotelId']=$HotelId[$ii];								
									$data['SetNumber']=$ItenaryDay[$ii];
									$data['TourId']=$TourId;
									$data['checkindate']=$checkindate[$ii];								
									$data['checkoutdate']=$checkoutdate[$ii];
									$data['room_type']=$RoomId[$ii];								
									$data['room_rate_type']=$room_rate_type[$ii];
									$data['tax_type']=$taxid[$ii];
									$data['TourId']=$TourId;
									
									
									 $diff = $checkoutdate[$ii] - $checkindate[$ii]; 
											
									
									
									
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
									   
									 
						            $this->Tour_totalcostmanage->tour_hotels_add($data);
						   }
							
							 if($this->input->post('smt_enter')!='')
							  {
								 $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								 redirect(base_url('admin/tour_generalinfo/view'));
							  } 
							 else
							  {
								 redirect(base_url('admin/tour_sightseeing/edit?TourId='.$TourId));
							  }
									  
							
									  
					 }
				   else
					 {
		  			   
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						/*$data['itinerary_night']=$this->Tour_totalcostmanage->tour_itinerary_hotel($TourId);
						$data['hotel_list']=$this->Tour_totalcostmanage->hotel_list($data);
						$data['roomtypelist']=$this->Tour_totalcostmanage->roomtypelist();
						$data['roomratetypelist']=$this->Tour_totalcostmanage->roomratetypelist();
						$data['taxtypelist']=$this->Tour_totalcostmanage->taxtypelist();
						$data['tourtaxlist']=$this->Tour_totalcostmanage->tourtaxlist();
						$data['hotel_detail']=$this->Tour_totalcostmanage->tour_hotel_edit($TourId);						
						$data['getItineraryCities']=$this->Tour_totalcostmanage->getIteneraryCity($TourId);
						$data['getTourGeneralInfo']=$this->Tour_totalcostmanage->getTourGeneralInfo($TourId);
						$data['getMealsDetail']=$this->Tour_totalcostmanage->getMealsDetail($TourId);*/
						
						
						/***********************************Total Cost****************************************/
						
						
						$data['totalCost'] = $this->Tour_totalcostmanage->getTotalCost($TourId);
						$data['getTourGeneralInfo']=$this->Tour_totalcostmanage->getTourGeneralInfo($TourId);
						
						
						$this->load->view('admin/tour_totalcost_add',$data);
					   
			   		}	
   }  
   
  
	
 }

?>
