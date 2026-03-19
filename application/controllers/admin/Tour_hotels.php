<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_hotels extends MY_controller {

  function __construct()
  { 
	   parent::__construct(); 
	   $this->valid_user(); 
  
  } 
	  
	 public function getWeekDays(){
	 		
			
	 		 $this->load->model("admin/Tour_hotelsmanage");
			
			$data['weekdays']=$this->Tour_hotelsmanage->getWeekDays();
			$this->load->view('admin/tour_hotel_week',$data);
	
	   }
	   
		public function getWeekDaysOut(){
 
		 $this->load->model("admin/Tour_hotelsmanage");
		
		$data['weekdays']=$this->Tour_hotelsmanage->getWeekDaysOut();
		$this->load->view('admin/tour_hotel_weekcheckout',$data);

  	 }
	 
	 public function getDBLTotal(){
	 
	  	$this->load->model("admin/Tour_hotelsmanage");
		
		$data['get_total']=$this->Tour_hotelsmanage->getDBLTotal();
		$this->load->view('admin/get_total_view',$data);
	 
	 }
	 
	 public function getTwnTotal(){
	 
	 	$this->load->model("admin/Tour_hotelsmanage");
		
		$data['getTwnTotal']=$this->Tour_hotelsmanage->getTWNTotal();
		$this->load->view('admin/get_twntotal_view',$data);
	 }
	 public function getTrpTotal(){
	 
	 	$this->load->model("admin/Tour_hotelsmanage");
		
		$data['getTrpTotal']=$this->Tour_hotelsmanage->getTrpTotal();
		$this->load->view('admin/get_trptotal_view',$data);
	 }
	 public function getQudTotal(){
	 
	 	$this->load->model("admin/Tour_hotelsmanage");
		
		$data['getQudTotal']=$this->Tour_hotelsmanage->getQudTotal();
		$this->load->view('admin/get_qudtotal_view',$data);
	 }
	 public function getTAXDBL(){
	 
	 	$this->load->model("admin/Tour_hotelsmanage");
		
		$dblValue =$this->input->post('dbl');
		$twnValue =$this->input->post('twn');
		$trpValue =$this->input->post('trp');
		$qudValue =$this->input->post('qud');
	
	
		
		if($dblValue!=0 || $dblValue!=''){
		
			
			$data['getTAXDBL']=$this->Tour_hotelsmanage->getTAXDBL();
			$data['getDBLPPTotal']=$this->Tour_hotelsmanage->getTAXDBLPP($data);	
			
			$this->load->view('admin/get_taxtotal_view',$data);
		}
		if($twnValue!=0 || $twnValue!=''){
	
			$data['getTAXTWN']=$this->Tour_hotelsmanage->getTAXDBL();
			$data['getTWNPPTotal']=$this->Tour_hotelsmanage->getTAXTWNPP($data);
			$this->load->view('admin/get_taxtotal_view',$data);
		}
		if($trpValue!=0 || $trpValue!=''){
	
			$data['getTAXTRP']=$this->Tour_hotelsmanage->getTAXDBL();
			$data['getTRPPPTotal']=$this->Tour_hotelsmanage->getTAXTRPPP($data);
			$this->load->view('admin/get_taxtotal_view',$data);
		}
		if($qudValue!=0 || $qudValue!=''){
	
			$data['getTAXQUD']=$this->Tour_hotelsmanage->getTAXDBL();
			$data['getQUDPPTotal']=$this->Tour_hotelsmanage->getTAXQUDPP($data);
			$this->load->view('admin/get_taxtotal_view',$data);
		}
		
		
	 }
	 public function getTAXTwn(){
	 
	 	$this->load->model("admin/Tour_hotelsmanage");
		
		$data['getTAXTwn']=$this->Tour_hotelsmanage->getTAXTwn();
		$this->load->view('admin/get_taxtwntotal_view',$data);
	 
	 }
	 
	 public function getFinal(){
	 
	 	$bfPP =$this->input->post('bfPP');
		$bfD =$this->input->post('bfD');
		$bfT =$this->input->post('bfT');
		$bfQ =$this->input->post('bfQ');
		$portPP =$this->input->post('portPP');
	 
	 	
		$this->load->view('admin/get_taxtwntotal_view',$data);
	 
	 }
	 
	 public function submitHotel(){
	 	
		///print_r($_POST); 
		
		$this->load->model("admin/Tour_hotelsmanage");
		
		
		$TourId=$this->input->post('tour_id');
		$this->Tour_hotelsmanage->tour_hotels_delete($TourId[0]);
		$dbl =$this->input->post('dbl');
		$twn =$this->input->post('twn');
		$trp =$this->input->post('trp');
		$qud =$this->input->post('qud');
		$one =$this->input->post('one');
		$two =$this->input->post('two');
		$three =$this->input->post('three');
		$ct =$this->input->post('ct');
		$rf =$this->input->post('rf');
		$five =$this->input->post('five');
		$bf_pp =$this->input->post('bf_pp');
		$bf_d =$this->input->post('bf_d');
		$bf_t =$this->input->post('bf_t');
		$bf_q =$this->input->post('bf_q');
		$port_pp =$this->input->post('port_pp');
		$hotelName =$this->input->post('hotel_name');
		$roomType =$this->input->post('roomtype');
		$vendorName =$this->input->post('vendor');
		
		$noofnights=$this->input->post('noofnights');
		
		for($i=0;$i<count($hotelName);$i++){	
		
			$data =array();
			$data['hotelId'] = $hotelName[$i];
			$data['tourId'] = $TourId[$i];
			$data['roomType'] = $roomType[$i];
			$data['vendorName'] = $vendorName[$i];
			$data['dbl'] = $dbl[$i];
			$data['twn'] = $twn[$i];
			$data['trp'] = $trp[$i];
			$data['qud'] = $qud[$i];
			$data['one'] = $one[$i];
			$data['two'] = $two[$i];
			$data['three'] = $three[$i];
			$data['ct'] = $ct[$i];
			$data['rf'] = $rf[$i];	
			$data['five'] = $five[$i];
			$data['bf_pp'] = $bf_pp[$i];
			$data['bf_d'] = $bf_d[$i];
			$data['bf_t'] = $bf_t[$i];
			$data['bf_q'] = $bf_q[$i];
			$data['port_pp'] = $port_pp[$i];
			$data['noofnights'] = $noofnights[$i];
			
			$total_dbl[$i] = ($noofnights[$i] * $dbl[$i]);
			//echo $total_dbl; die;
			$data['total_dbl'] = $total_dbl[$i];
			$total_twn[$i] = ($noofnights[$i] * $twn[$i]);
			$data['total_twn'] = $total_twn[$i];
			$total_trp[$i] = ($noofnights[$i] * $trp[$i]);
			$data['total_trp'] = $total_trp[$i];
			$total_qud[$i] = ($noofnights[$i] * $qud[$i]);
			$data['total_qud'] = $total_qud[$i];
			
		
			$one_tax_amount_dbl[$i] =floatval(($total_dbl[$i]) * ($one[$i]) / 100);		
			
		 	$two_tax_amount_dbl[$i] = floatval(($total_dbl[$i]) * ($two[$i]) / 100);
			$three_tax_amount_dbl[$i] = floatval(($total_dbl[$i]) * ($three[$i]) / 100);
			$total_tax_amount_dbl[$i] = $total_dbl[$i] + number_format($one_tax_amount_dbl[$i],2) + number_format($two_tax_amount_dbl[$i],2) + number_format($three_tax_amount_dbl[$i],2) + $ct[$i] + $rf[$i] + $five[$i];
		
			$one_tax_amount_twn[$i] = floatval(($total_twn[$i]) * ($one[$i]) / 100);
			$two_tax_amount_twn[$i] = floatval(($total_twn[$i]) * ($two[$i]) / 100);
			$three_tax_amount_twn[$i] = floatval(($total_twn[$i]) * ($three[$i]) / 100);
			
			$total_tax_amount_twn[$i] = $total_twn[$i] +  number_format($one_tax_amount_twn[$i],2) + number_format($two_tax_amount_twn[$i],2) + number_format($three_tax_amount_twn[$i],2) + $ct[$i] + $rf[$i] + $five[$i];
			
			
			$one_tax_amount_trp[$i] = floatval(($total_trp[$i]) * ($one[$i]) / 100);
			$two_tax_amount_trp[$i] = floatval(($total_trp[$i]) * ($two[$i]) / 100);
			$three_tax_amount_trp[$i] = floatval(($total_trp[$i]) * ($three[$i]) / 100);
			
			$total_tax_amount_trp[$i] = $total_trp[$i] + number_format($one_tax_amount_trp[$i],2) + number_format($two_tax_amount_trp[$i],2) + number_format($three_tax_amount_trp[$i],2) + $ct[$i] + $rf[$i] + $five[$i];
		
			
			$one_tax_amount_qud[$i] = floatval(($total_qud[$i]) * ($one[$i]) / 100);
			$two_tax_amount_qud[$i] = floatval(($total_qud[$i]) * ($two[$i]) / 100);
			$three_tax_amount_qud[$i] = floatval(($total_qud[$i]) * ($three[$i]) / 100);
			
			$total_tax_amount_qud[$i] = $total_qud[$i] + number_format($one_tax_amount_qud[$i],2) + number_format($two_tax_amount_qud[$i],2) + number_format($three_tax_amount_qud[$i],2) + $ct[$i] + $rf[$i] + $five[$i];
			
			$data['total_tax_amount_dbl'] = $total_tax_amount_dbl[$i];
			$data['total_tax_amount_twn'] = $total_tax_amount_twn[$i];
			$data['total_tax_amount_trp'] = $total_tax_amount_trp[$i];
			$data['total_tax_amount_qud'] = $total_tax_amount_qud[$i];
			
			$dblTotal[$i] = floatval(($total_tax_amount_dbl[$i]) /2) ;
			$twnTotal[$i] = floatval(($total_tax_amount_twn[$i]) /2) ;
			$trpTotal[$i] = floatval(($total_tax_amount_trp[$i]) /3) ;
			$qudTotal[$i] = floatval(($total_tax_amount_qud[$i]) /4) ;
			
			
			$data['dbl_pp'] = $dblTotal[$i];
			$data['twn_pp'] = $twnTotal[$i];
			$data['trp_pp'] = $trpTotal[$i];
			$data['qud_pp'] = $qudTotal[$i];
			
			$data['sglFinalTotal'] = number_format($total_tax_amount_dbl[$i],2) + $bf_pp[$i] + $port_pp[$i];
			$data['dblFinalTotal'] = number_format($dblTotal[$i],2) + $bf_pp[$i] + $port_pp[$i];
			$data['twnFinalTotal'] = number_format($twnTotal[$i],2) + $bf_d[$i] + $port_pp[$i];
			$data['trpFinaltotal'] = number_format($trpTotal[$i],2) + $bf_t[$i] + $port_pp[$i];
			$data['qudFinalTotal'] = number_format($qudTotal[$i],2) + $bf_q[$i] + $port_pp[$i];
			
			$data['hotelDetails']=$this->Tour_hotelsmanage->submitHotel($data);
			
			//$this->load->view('admin/tour_hotels_add',$data);
	 	}
		
		if($this->input->post('smt_enter')!='')
		  {
			 $this->session->set_flashdata('generalinfo', 'Records updated successfully');
			 redirect(base_url('admin/tour_hotels/edit?TourId='.$TourId[0]));
		  } 
		  else
		  {
			 redirect(base_url('admin/tour_transport/edit?TourId='.$TourId[0]));
		  }
	 }
	 
	 
public function edit()
   {
    
	      $this->load->model("admin/Tour_hotelsmanage");
		  if($this->input->post('flag')=='yes') 
		     {
					//print_r($_post);		 die;
			
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
								 redirect(base_url('admin//tour_hotels/edit?TourId='.$TourId));
							  } 
							 else
							  {
								 redirect(base_url('admin/tour_transport/edit?TourId='.$TourId));
							  }
									  
							
									  
					 }
				   else
					 {
		  			   
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['itinerary_night']=$this->Tour_hotelsmanage->tour_itinerary_hotel($TourId);
						$data['hotel_list']=$this->Tour_hotelsmanage->hotel_list($data);
						$data['roomtypelist']=$this->Tour_hotelsmanage->roomtypelist();
						$data['roomratetypelist']=$this->Tour_hotelsmanage->roomratetypelist();
						$data['taxtypelist']=$this->Tour_hotelsmanage->taxtypelist();
						$data['tourtaxlist']=$this->Tour_hotelsmanage->tourtaxlist();
						//$data['hotel_detail']=$this->Tour_hotelsmanage->tour_hotel_edit($TourId);
						/*------------------------MY WOrk-------------------------------*/
						$data['getItineraryCities']=$this->Tour_hotelsmanage->getIteneraryCity($TourId);
						$data['getTourGeneralInfo']=$this->Tour_hotelsmanage->getTourGeneralInfo($TourId);
						$data['hotel_detail']=$this->Tour_hotelsmanage->tour_hotel_edit($TourId);
						$this->load->view('admin/tour_hotels_add',$data);
					   
			   		}	
   }  
   
  

	  
	
 }

?>
