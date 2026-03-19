<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_sightseeing extends MY_controller {

  function __construct()
  { 
	   parent::__construct(); 
	   $this->valid_user(); 
  
  } 

	 
	 
public function edit()
   {
    
	      $this->load->model("admin/Tour_sightseeingmanage");
		  if($this->input->post('flag')=='yes') 
		     {
							
			
			        	$TourId=$this->input->post('TourId');
			            $this->Tour_hotelsmanage->tour_hotels_delete($TourId);
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
									   
									 
						            $this->Tour_hotelsmanage->tour_hotels_add($data);
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
						$data['itinerary_night']=$this->Tour_sightseeingmanage->tour_itinerary_hotel($TourId);
						$data['hotel_list']=$this->Tour_sightseeingmanage->hotel_list($data);
						$data['roomtypelist']=$this->Tour_sightseeingmanage->roomtypelist();
						$data['roomratetypelist']=$this->Tour_sightseeingmanage->roomratetypelist();
						$data['taxtypelist']=$this->Tour_sightseeingmanage->taxtypelist();
						$data['tourtaxlist']=$this->Tour_sightseeingmanage->tourtaxlist();
						
						/*------------------------MY WOrk-------------------------------*/
						$data['getItineraryCities']=$this->Tour_sightseeingmanage->getIteneraryCity($TourId);
						$data['getTourGeneralInfo']=$this->Tour_sightseeingmanage->getTourGeneralInfo($TourId);
						$data['getSightSeeingDetail']=$this->Tour_sightseeingmanage->getSightSeeingDetail($TourId);
						$this->load->view('admin/tour_sightseeing_add',$data);
					   
			   		}	
   }  
   
  	
	public function submitSightSeeing(){
	
		//print_r($_POST); die;
	
		 $this->load->model("admin/Tour_sightseeingmanage");
		
		$TourId=$this->input->post('tour_id');
		$this->Tour_sightseeingmanage->tour_sight_delete($TourId[0]);
		$sightSeeing=$this->input->post('sight_seeing');
		$sightSeeingTime=$this->input->post('sight_seeing_time');
		$adultPrice=$this->input->post('adult_price');
		$childPrice=$this->input->post('child_price');
		$vendor=$this->input->post('vendor');
		$cityName=$this->input->post('city_name');
		$checkInDay=$this->input->post('checkinday');
		$dateOfDay=$this->input->post('dateofday');
			
		for($i=0;$i<count($sightSeeing);$i++){
		
				$data = array();
			
				$data['TourID'] = $TourId[$i];
				$data['sight_name'] = $sightSeeing[$i];
				$data['sight_time'] = $sightSeeingTime[$i];
				$data['adult_price'] = $adultPrice[$i];
				$data['child_price'] = $childPrice[$i];
				$data['vendor_name'] = $vendor[$i];	
				$data['city_name'] = $cityName[$i];
				$data['sight_day'] = $checkInDay[$i];
				$data['sight_date'] = $dateOfDay[$i];	
				
				//print_r($data); die;
				
				$this->Tour_sightseeingmanage->submitSightSeeing($data);
				//print_r($data);
			
		}
			
			if($this->input->post('smt_enter')!='')
			  {
				 $this->session->set_flashdata('Sightseeing', 'Records updated successfully');
				 redirect(base_url('admin/tour_sightseeing/edit?TourId='.$TourId[0]));
			  } 
			  else
			  {
				 redirect(base_url('admin/tour_meals/edit?TourId='.$TourId[0]));
			  }
		
	}
	
	  
	
 }

?>
