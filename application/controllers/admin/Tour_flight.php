<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_flight extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
    
	      $this->load->model("admin/Tour_flightmanage")  ;
		  if($this->input->post('flag')=='yes') 
		     {
		
			        	$TourId=$this->input->post('TourId');
			            $this->Tour_flightmanage->tour_flight_delete($TourId);
						$AirlineName=$this->input->post('AirlineName');
						$FromCity=$this->input->post('FromCity');
						$ToCity=$this->input->post('ToCity');
						$DepartureTime=$this->input->post('DepartureTime');
						$ArivalTime=$this->input->post('ArivalTime');
						$NoOfStops=$this->input->post('NoOfStops');
						$Description=$this->input->post('Description');
						$ItenaryDay=$this->input->post('ItenaryDay');
					    for($ii=0;$ii<count($AirlineName);$ii++)
						   {
						            $data=array();
									$data['AirlineName']=$AirlineName[$ii];
						   			$data['FromCity']=$FromCity[$ii];
									$data['ToCity']=$ToCity[$ii];
									$data['DepartureTime']=$DepartureTime[$ii];
									$data['ArivalTime']=$ArivalTime[$ii];
									$data['NoOfStops']=$NoOfStops[$ii];
									$data['Description']=$Description[$ii];
									$data['ForDay']=$ItenaryDay[$ii];
									$data['TourId']=$TourId;
									 $this->Tour_flightmanage->tour_flight_add($data);
						   }
							
							 if($this->input->post('smt_enter')!='')
								      {
									     $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								         redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_train/edit?TourId='.$TourId));
									  } 		
									  
					 }
				   else
					 {
		  			   
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['itinerary_night']=$this->Tour_flightmanage->tour_itinerary_flight($TourId);
						$data['flight_detail']=$this->Tour_flightmanage->tour_flight_edit($TourId);
						$data['airlines']=$this->Tour_flightmanage->airline_dropdown($TourId);
					    $this->load->view('admin/tour_flight_add',$data);
					    
			   }	
   }  

	  
	
 }

?>
