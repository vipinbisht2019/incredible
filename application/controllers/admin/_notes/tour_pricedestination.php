<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_pricedestination extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	
// ------------------------------- Edit  funnctin edit record  ------------------------------	
// ------------------------------- Edit  funnctin edit record  ------------------------------	
// ------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {
   
	       $this->load->model("admin/Tour_pricedestinationmanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
			      
		
	                $this->load->library('form_validation');
					$this->form_validation->set_rules('RId', 'resion', 'required');
					$this->form_validation->set_rules('locationsId', 'location', 'required');
					$this->form_validation->set_rules('DepartureTime', 'departure time', 'required');
					$this->form_validation->set_rules('ArrivalTime', 'arrival time', 'required');
				    $this->form_validation->set_rules('StartDate', 'start date', 'required');
					$this->form_validation->set_rules('EndDate', 'end date', 'required');
				
				   $TourId_1=$this->input->post('TourId');
				   if($this->form_validation->run() == true) 
					  {
						   error_reporting(0);
							 
						    $data=$_POST;
					        unset($data['flag']);
							unset($data['smt_enter']);
							unset($data['smt_enter_nxt']);
							unset($data['TourId']);
							unset($data['StartDate']);
							unset($data['EndDate']);
							unset($data['SeasonalStartDate']);
							unset($data['SeasonalEndDate']);
							unset($data['day1']);
							unset($data['day2']);
							unset($data['day3']);
							unset($data['day4']);
							unset($data['day5']);
							unset($data['day6']);
							unset($data['day7']);
					  
				         
						  if($this->input->post('day1')=='') { $data['day1']=0; } else { $data['day1']=$this->input->post('day1');}
						  if($this->input->post('day2')=='') { $data['day2']=0; }else { $data['day2']=$this->input->post('day2');}
						  if($this->input->post('day3')=='') { $data['day3']=0; }else { $data['day3']=$this->input->post('day3');}
						  if($this->input->post('day4')=='') { $data['day4']=0; }else { $data['day4']=$this->input->post('day4');}
						  if($this->input->post('day5')=='') { $data['day5']=0; }else { $data['day5']=$this->input->post('day5');}
						  if($this->input->post('day6')=='') { $data['day6']=0; }else { $data['day6']=$this->input->post('day6');}
						  if($this->input->post('day7')=='') { $data['day7']=0; }else { $data['day7']=$this->input->post('day7');}
						  
						  
		
						  
					 //-------------------------------------------------------------------------------------------------------------------------------		
						$startDateArr=explode("-",$this->input->post('StartDate')); 
						   $startDateStr=$startDateArr['2']."-".$startDateArr['1']."-".$startDateArr['0'];
						$EndDateArr=explode("-",$this->input->post('EndDate'));    
					    	$EndDateArrStr=$EndDateArr['2']."-".$EndDateArr['1']."-".$EndDateArr['0'];
						$SeasonalStartDateArr=explode("-",$this->input->post('SeasonalStartDate'));
						  $SeasonalStartDateStr=$SeasonalStartDateArr['2']."-".$SeasonalStartDateArr['1']."-".$SeasonalStartDateArr['0'];
						$SeasonalEndDateArr=explode("-",$this->input->post('SeasonalEndDate'));
						  $SeasonalEndDateStr=$SeasonalEndDateArr['2']."-".$SeasonalEndDateArr['1']."-".$SeasonalEndDateArr['0'];
			 
						      
						 
						 $data['StartDate']=$startDateStr;
						 $data['EndDate']=$EndDateArrStr;
						 $data['SeasonalStartDate']=$SeasonalStartDateStr;
						 $data['SeasonalEndDate']=$SeasonalEndDateStr;
						 
					 //---------------------------Fare related data data---------------------------
						   $Data_Buses=$this->input->post('BusesTypeId');
						   $Data_NormalFare=$this->input->post('NormalFare'); 
						   $Data_SeasonalFare=$this->input->post('SeasonalFare'); 
						   if($this->input->post('TotalNight') > 0 && $this->input->post('TourType')=='T') 
						    {
						      $Data_acomndation=$this->input->post('FareTypeId'); 
							  $this->Tour_pricedestinationmanage->buses_fare_insert($Data_Buses, $Data_acomndation, $Data_NormalFare, $Data_SeasonalFare, $TourId_1);
						    }
						  elseif($this->input->post('TotalNight') == 0 && $this->input->post('TourType')=='T')
						    {
						        $this->Tour_pricedestinationmanage->buses_fare_insert_singleday($Data_Buses, $Data_NormalFare, $Data_SeasonalFare, $TourId_1);
						    }	
						 elseif($this->input->post('TourType')=='H')
						   {
						
								
								$Data_VihicleId=$this->input->post('VihicleId');	
								$Data_PaxId=$this->input->post('PaxId');	
								$Data_VehicleFareTypeId=$this->input->post('VehicleFareTypeId');
								$Data_NormalFare=$this->input->post('Fare');
							    $this->Tour_pricedestinationmanage->vehicle_fare_insert_vehicle($Data_VihicleId, $Data_PaxId, $Data_VehicleFareTypeId,$Data_NormalFare,$TourId_1);
						   }		
					      
						//---------------------------Fare related data data---------------------------   
						 
			
						 
				// echo"<pre>";
				// print_r($data);  
			    // echo"</pre>";
						 
				     //--------------------------- unset tour additional details ---------------------------------------------------------------------------
								unset($data['BusesTypeId']);
								unset($data['FareTypeId']);
								unset($data['NormalFare']);
								unset($data['SeasonalFare']);
								unset($data['day']);  
							 //-------------------------------------------------------------------------------------------------------------------------
								unset($data['VihicleId']);  
								unset($data['PaxId']); 
								unset($data['VehicleFareTypeId']); 
								unset($data['Fare']);
				     //---------------------------------------------------------------------------------------------------------------------------------------	
						  $this->Tour_pricedestinationmanage->pricedestination_edit_data($data, $TourId_1);
						  
				
						  
						  if($this->input->post('smt_enter')!='')
								      {
									    $this->session->set_flashdata('generalinfo', 'Records updated successfully');
								        redirect(base_url('admin/tour_generalinfo/view'));
									  } 
									 else
									  {
									     redirect(base_url('admin/tour_inclusionexclusion/edit?TourId='.$TourId_1));   
									  } 

					   }
					 else
					  {   
							$TourId=$this->input->get('TourId');
							$data['edit_pricedestination']=$this->Tour_pricedestinationmanage->pricedestination_edit($TourId);
							$IsSingleDay=$data['edit_pricedestination'][0]['TotalNight'];
							$TourType=$data['edit_pricedestination'][0]['TourType'];
							//-----------------------------------------------------------------------------------------------------------  
							$data['tour_resion_dropdown']=$this->Tour_pricedestinationmanage->resion_dropdown();
							$data['tour_location_dropdown']=$this->Tour_pricedestinationmanage->location_dropdown();
							$data['tour_buses_associated']=$this->Tour_pricedestinationmanage->get_busestype($TourId);
							$data['tour_accomadtion_faretype']=$this->Tour_pricedestinationmanage->get_accomadtion_faretype();
							$data['TourType']=$TourType;
							if($IsSingleDay==0 && $TourType=='T')
							{ 
							   $data['tour_fare']=$this->Tour_pricedestinationmanage->buses_fare_edit_singleday($TourId);
							}
							elseif($IsSingleDay==1 && $TourType=='T')
							{
							    $data['tour_fare']=$this->Tour_pricedestinationmanage->buses_fare_edit_multipleday($TourId);
							
							} 
							if($TourType=='H')
							{       
							   $data['tour_vehicle_faretype']=$this->Tour_pricedestinationmanage->get_vehicle_faretype();
							   $data['tour_vehicle_associated']=$this->Tour_pricedestinationmanage->get_vehicle_type($TourId); 
							   $data['tour_vehicle_fare']=$this->Tour_pricedestinationmanage->vehicle_fare_edit_vehicle($TourId);
							}	 
						$this->load->view('admin/tourpricedestination_add',$data);					  } 	  
					  
		     }
	      else
		    {
		         $TourId=$this->input->get('TourId');
		 	     $data['edit_pricedestination']=$this->Tour_pricedestinationmanage->pricedestination_edit($TourId);
				 $IsSingleDay=$data['edit_pricedestination'][0]['TotalNight'];
				 $TourType=$data['edit_pricedestination'][0]['TourType'];
				 
				   
			//-----------------------------------------------------------------------------------------------------------  
				 $data['tour_resion_dropdown']=$this->Tour_pricedestinationmanage->resion_dropdown();
				 $data['tour_location_dropdown']=$this->Tour_pricedestinationmanage->location_dropdown();
				 $data['tour_buses_associated']=$this->Tour_pricedestinationmanage->get_busestype($TourId);
				 $data['tour_accomadtion_faretype']=$this->Tour_pricedestinationmanage->get_accomadtion_faretype();
				 $data['TourType']=$TourType;
				 if($IsSingleDay==0 && $TourType=='T')
				  { 
				    $data['tour_fare']=$this->Tour_pricedestinationmanage->buses_fare_edit_singleday($TourId);
				  }
				 elseif($IsSingleDay==1 && $TourType=='T')
				  {
				       $data['tour_fare']=$this->Tour_pricedestinationmanage->buses_fare_edit_multipleday($TourId);
				     
				  } 
				if($TourType=='H')
				  {       
					$data['tour_vehicle_faretype']=$this->Tour_pricedestinationmanage->get_vehicle_faretype();
					$data['tour_vehicle_associated']=$this->Tour_pricedestinationmanage->get_vehicle_type($TourId); 
					$data['tour_vehicle_fare']=$this->Tour_pricedestinationmanage->vehicle_fare_edit_vehicle($TourId);
				  }	 
					 
				    $this->load->view('admin/tourpricedestination_add',$data);
	      }	
    }  
}

?>
