<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_driverhotel extends MY_controller {

  function __construct()
  { 
	   parent::__construct(); 
	   $this->valid_user(); 
  
  } 

	 
	 
public function edit()
   {
    
	      $this->load->model("admin/Tour_driverhotelmanage");
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
								 redirect(base_url('admin/lead/view'));
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
						$data['itinerary_night']=$this->Tour_driverhotelmanage->tour_itinerary_hotel($TourId);
						$data['hotel_list']=$this->Tour_driverhotelmanage->hotel_list($data);
						$data['roomtypelist']=$this->Tour_driverhotelmanage->roomtypelist();
						$data['roomratetypelist']=$this->Tour_driverhotelmanage->roomratetypelist();
						$data['taxtypelist']=$this->Tour_driverhotelmanage->taxtypelist();
						$data['tourtaxlist']=$this->Tour_driverhotelmanage->tourtaxlist();
						$data['hotel_detail']=$this->Tour_driverhotelmanage->tour_hotel_edit($TourId);
						/*------------------------MY WOrk-------------------------------*/
						$data['getItineraryCities']=$this->Tour_driverhotelmanage->getIteneraryCity($TourId);
						$data['getTourGeneralInfo']=$this->Tour_driverhotelmanage->getTourGeneralInfo($TourId);
						$this->load->view('admin/tour_driverhotel_add',$data);
					   
			   		}	
   }  
   
  
	public function submitDriverHotel(){	
		
		$this->load->model("admin/Tour_driverhotelmanage");		
		
		//print_r($_POST); die;
		
		$tour_id =$this->input->post('tour_id');
		$this->Tour_driverhotelmanage->tour_driverhotels_delete($tour_id[0]);
		$hotelid =$this->input->post('hotel_name');
		$roomRate =$this->input->post('room_rate');
		$taxOne =$this->input->post('tax_one');
		$taxTwo =$this->input->post('tax_two');
		$taxThree =$this->input->post('tax_three');
		$taxFour =$this->input->post('tax_four');
		$taxFive =$this->input->post('tax_five');
		$taxSix =$this->input->post('tax_six');
		$bfD =$this->input->post('bf_d');
		$portage =$this->input->post('portage');
		$vendorName =$this->input->post('vendor');
		$noofnights =$this->input->post('noofnights');

		for($i=0;$i<count($hotelid);$i++){

			$data = array();

			$data['tourId'] = $tour_id[$i];
			$data['hotelId'] = $hotelid[$i];
			$data['room_rate'] = $roomRate[$i];
			$data['tax_one'] = $taxOne[$i];
			$data['tax_two'] = $taxTwo[$i];
			$data['tax_three'] = $taxThree[$i];
			$data['tax_four'] = $taxFour[$i];
			$data['tax_five'] = $taxFive[$i];
			$data['tax_six'] = $taxSix[$i];
			$data['bf_d'] = $bfD[$i];
			$data['portage'] = $portage[$i];
			$data['vendor_name'] = $vendorName[$i];
			

			$total[$i] = ($noofnights[$i] * $roomRate[$i]);
			$data['total'] =$total[$i];
			
			$one_tax_amount[$i] =floatval(($total[$i]) * ($taxOne[$i]) / 100);
			$two_tax_amount[$i] =floatval(($total[$i]) * ($taxTwo[$i]) / 100);
			$three_tax_amount[$i] =floatval(($total[$i]) * ($taxThree[$i]) / 100);

			$taxTotal[$i] = $total[$i] + $one_tax_amount[$i] + $two_tax_amount[$i] + $three_tax_amount[$i] + $taxFour[$i] + $taxFive[$i] + $taxSix[$i]; 

			$data['tax_total'] = $taxTotal[$i] ;

			$pp[$i] =  floatval(($taxTotal[$i])/2);

			$data['pp'] = $pp[$i];

			$driverTotal = $taxTotal[$i] + $bfD[$i] + $portage[$i];

			$data['total_pp'] = $driverTotal;
			//
			$data['driverHotelDetails']=$this->Tour_driverhotelmanage->submitDriverHotel($data);
		}
		

		if($this->input->post('smt_enter')!='')
		  {
			 $this->session->set_flashdata('generalinfo', 'Records updated successfully');
			 redirect(base_url('admin/tour_driverhotel/edit?TourId='.$tour_id[0]));
		  } 
		  else
		  {
			 redirect(base_url('admin/tour_sightseeing/edit?TourId='.$tour_id[0]));
		  }
		
		
		
		//$this->load->view('admin/tour_transport_add',$data);
		
		
	}
	  
	
 }

?>
