<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_costing extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 

// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
    
	      $this->load->model("admin/Tour_costingmanage")  ;
		  if($this->input->post('flag')=='yes') 
		      {
			      	    $TourId=$this->input->post('TourId');
			           
	                           				/*	
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
									$this->Tour_costingmanage->tour_bus_add($data);
						   }
							
							 if($this->input->post('smt_enter')!='')
								      {
									     $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								         redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_costing/edit?TourId='.$TourId));
									  } */
					   
					   redirect(base_url('admin/tour_termscondition/edit?TourId='.$TourId));  		
									  
					 }
				   else
					 {
		  			   
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
					  //1. ------------------------------------Select Hotel To Add Price-----------------------------------------------------		  
					       $data['hotels']=$this->Tour_costingmanage->tour_hotel_select($TourId);
					  //2. ------------------------------------Select Sightseeing To Add Price-----------------------------------------------
						   $data['sightseeings']=$this->Tour_costingmanage->tour_sightseeing_select($TourId);
					  //3. ------------------------------------Select Sightseeing To Add Price-----------------------------------------------	 
					       $data['transfer']=$this->Tour_costingmanage->tour_transfer_select($TourId);
				     //4.------------------------------------Select transfer To Add Price----------------------------------------------------	 
					       $data['flight']=$this->Tour_costingmanage->tour_flight_select($TourId);  
				     //5.------------------------------------Select train To Add Price-----------------------------------------------------	 
					       $data['trains']=$this->Tour_costingmanage->tour_train_select($TourId); 
				     //6.------------------------------------Select Bus To Add Price-----------------------------------------------------	
					       $data['buses']=$this->Tour_costingmanage->tour_bus_select($TourId); 	
					 //7.------------------------------------Select Guid To Add Price-----------------------------------------------------	
					       $data['guides']=$this->Tour_costingmanage->tour_guide_select($TourId); 	
						//----------------------- load view ----------------------------------------------------------------------------------------   
						   $this->load->view('admin/tour_costing_add',$data);				   			    			  		   
			   }	
   }  

	  
	
 }

?>
