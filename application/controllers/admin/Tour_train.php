<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_train extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 


// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
    
	      $this->load->model("admin/Tour_trainmanage")  ;
		  if($this->input->post('flag')=='yes') 
		     {
		
			        	$TourId=$this->input->post('TourId');
			            $this->Tour_trainmanage->tour_train_delete($TourId);
						
						$TrainName=$this->input->post('TrainName');
						$TrainNumber=$this->input->post('TrainNumber');
						$PlaceFrom=$this->input->post('PlaceFrom');
						$PlaceTo=$this->input->post('PlaceTo');
		                $OtherDeatils=$this->input->post('OtherDeatils');
						$ItenaryDay=$this->input->post('ItenaryDay');
					    for($ii=0;$ii<count($TrainName);$ii++)
						   {
						            $data=array();
									$data['TrainName']=$TrainName[$ii];
						   			$data['TrainNumber']=$TrainNumber[$ii];
									$data['PlaceFrom']=$PlaceFrom[$ii];
									$data['PlaceTo']=$PlaceTo[$ii];
								    $data['OtherDeatils']=$OtherDeatils[$ii];
									$data['TrainDay']=$ItenaryDay[$ii];
									$data['TourId']=$TourId;
									$this->Tour_trainmanage->tour_train_add($data);
						   }
							
							 if($this->input->post('smt_enter')!='')
								      {
									     $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								         redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_bus/edit?TourId='.$TourId));
									  } 		
									  
					 }
				   else
					 {
		  			   
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['itinerary_night']=$this->Tour_trainmanage->tour_itinerary_train($TourId);
						$data['train_detail']=$this->Tour_trainmanage->tour_train_edit($TourId);
						$this->load->view('admin/tour_train_add',$data);
					    
			   }	
   }  

	  
	
 }

?>
