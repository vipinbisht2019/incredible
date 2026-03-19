<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_bus extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 

// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
    
	      $this->load->model("admin/Tour_busmanage")  ;
		  if($this->input->post('flag')=='yes') 
		      {
			      	    $TourId=$this->input->post('TourId');
			            $this->Tour_busmanage->tour_bus_delete($TourId);
						$BusName=$this->input->post('BusName');
						$PlaceFrom=$this->input->post('PlaceFrom');
						$PlaceTo=$this->input->post('PlaceTo');
		                $OtherDeatils=$this->input->post('OtherDeatils');
						$ItenaryDay=$this->input->post('ItenaryDay');
						 
					    for($ii=0;$ii<count($BusName);$ii++)
						   {
						            $data=array();
									$data['BusName']=$BusName[$ii];
						   			$data['PlaceFrom']=$PlaceFrom[$ii];
									$data['PlaceTo']=$PlaceTo[$ii];
								    $data['OtherDeatils']=$OtherDeatils[$ii];
									$data['BusDay']=$ItenaryDay[$ii];
									$data['TourId']=$TourId;
									$this->Tour_busmanage->tour_bus_add($data);
						   }
							
							 if($this->input->post('smt_enter')!='')
								      {
									     $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								         redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_costing/edit?TourId='.$TourId));
									  } 		
									  
					 }
				   else
					 {
		  			   
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['itinerary_night']=$this->Tour_busmanage->tour_itinerary_bus($TourId);
						$data['bus_detail']=$this->Tour_busmanage->tour_bus_edit($TourId);
						$this->load->view('admin/tour_bus_add',$data);
					    
			   }	
   }  

	  
	
 }

?>
