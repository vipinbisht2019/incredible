<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_hotels extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
    
	      $this->load->model("admin/Tour_hotelsmanage")  ;
		  if($this->input->post('flag')=='yes') 
		     {
		
			        	$TourId=$this->input->post('TourId');
			            $this->Tour_hotelsmanage->tour_hotels_delete($TourId);
			
				  
				        $HotelId=$this->input->post('HotelId');
						$Description=$this->input->post('Description');
						$ItenaryDay=$this->input->post('ItenaryDay');
						$AccommodationType=$this->input->post('AccommodationType');
					
						for($ii=0;$ii<count($HotelId);$ii++)
						   {
						       $data=array();
						   
									$data['HotelId']=$HotelId[$ii];
									$data['Description']=$Description[$ii];
									$data['SetNumber']=$ItenaryDay[$ii];
									$data['TourId']=$TourId;
									$data['AccommodationType']=$AccommodationType[$ii];
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
					//	$data['tour_hotels']=$this->Tour_hotelsmanage->tour_hotel($TourId);
						$data['itinerary_night']=$this->Tour_hotelsmanage->tour_itinerary_hotel($TourId);
						$data['hotel_detail']=$this->Tour_hotelsmanage->tour_hotel_edit($TourId);
						$this->load->view('admin/tour_hotels_add',$data);
					    //echo"---------------------------- hotel add -----------------------------------------------------";
			   }	
   }  

	  
	
 }

?>
