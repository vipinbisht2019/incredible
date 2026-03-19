<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_itinerary extends MY_controller {
// ------------------------------------ check valid users -------------------------------------------------------------------
    function __construct()
	  { 
           parent::__construct(); 
           $this->valid_user(); 
      
      } 
	  
	 
// ---------------------------------- Edit  funnctin edit record  ------------------------------		  
public function edit()
   {

	       $this->load->model("admin/Tour_itinerarymanage")  ;
		   if($this->input->post('flag')=='yes') 
		     {
			
			//echo '<pre>';	print_r($_POST); die;
				 error_reporting(0);
						$TourId=$this->input->post('TourId');
						$this->Tour_itinerarymanage->tour_itinerary_delete($TourId);
						$category_id=$this->input->post('countryid');
						$city_id=$this->input->post('cityid');
						$stateid=$this->input->post('stateid');
						$scountryid=$this->input->post('scountryid');
						$scityid=$this->input->post('scityid');
						$sstateid=$this->input->post('sstateid');
						$Description=$this->input->post('Description');
						$ItenaryDay=$this->input->post('ItenaryDay');
						$ActivityDay=$this->input->post('ActivityDay');
						$sightseeingId=$this->input->post('sightseeing');
						//$OverNightCity=$this->input->post('OverNightCity');
						$ItenaryDate=$this->input->post('ItenaryDate');
						$ItenaryDow=$this->input->post('ItenaryDow');			
						$IsBreakfast=$this->input->post('Breakfast');
						$IsDinner=$this->input->post('Dinner');
						$IsLunch=$this->input->post('IsLunch');
						//$IsTea=$this->input->post('IsTea');
						$IsSnacks=$this->input->post('IsSnacks');
					
					
			
					  for($ii=0;$ii<count($ItenaryDay);$ii++)
						   {
						        $data=array();
								
								
							    $data['countryid']=$category_id[$ii];
								$data['cityid']=$city_id[$ii];
								$data['stateid']=$stateid[$ii];
								$data['scountryid']=$scountryid[$ii];
								$data['scityid']=$scityid[$ii];
								$data['sstateid']=$sstateid[$ii];
								$data['sightseeingId']=$sightseeingId[$ii];
								$data['Description']=$Description[$ii];
								$data['TourId']=$TourId;
								$data['ItenaryDay']=$ItenaryDay[$ii];
								$data['ActivityDay']=$ActivityDay[$ii];
								//$data['OverNightCity']=$OverNightCity[$ii];								
								$data['ItenaryDow']=$ItenaryDow[$ii];
								$data['ItenaryDate']=$ItenaryDate[$ii];
								
								
				 
					/*   if($IsTea[$ii]!='')		
								$data['IsTea']=$IsTea[$ii];
						     else
						   		$data['IsTea']='N';			
			*/
					   if($IsLunch[$ii]!='')		
								$data['IsLunch']=$IsLunch[$ii];
						     else
						   		$data['IsLunch']='N';
				   
					     if($IsBreakfast[$ii]!='')		
								$data['IsBreakfast']=$IsBreakfast[$ii];
						     else
						   		$data['IsBreakfast']='N';				
			
					   if($IsDinner[$ii]!='')		
								$data['IsDinner']=$IsDinner[$ii];
						      else
						   		$data['IsDinner']='N';	
								
						if($IsSnacks[$ii]!='')		
								$data['IsSnacks']=$IsSnacks[$ii];
							  else
								$data['IsSnacks']='N';	
								
							
												
	
									$this->Tour_itinerarymanage->tour_itinerary_add($data);
									
									
							}
							
							if($this->input->post('smt_enter')!='')
							{
							$this->session->set_flashdata('Itinerary', 'Records updated successfully');
							redirect(base_url('admin/tour_itinerary/edit?TourId='.$TourId));
							} 
							else
							{
							redirect(base_url('admin/tour_itinerarydetails/edit?TourId='.$TourId));
							} 	
						
					        
				  
					  
		     }
	       else
		     {
		  
		 
						$TourId=$this->input->get('TourId');
						$data['TourId']=$TourId;
						$data['tour_no_day']=$this->Tour_itinerarymanage->tour_get_day($TourId);
						$data['getDates'] = $this->Tour_itinerarymanage->getDates($TourId);
						$data['itinerary_details']=$this->Tour_itinerarymanage->tour_itinerary_edit($TourId);
						$data['country_list']=$this->Tour_itinerarymanage->country_list();
						$data['state_list']=$this->Tour_itinerarymanage->state_list();
						$data['city_list']=$this->Tour_itinerarymanage->city_list();
						$data['sightseeing_list']=$this->Tour_itinerarymanage->sightseeing_list();
						$this->load->view('admin/tour_itinerary_add',$data);
				
	        
		    }	
   }  
   
  	 public function getStateList(){
			 	
				 	$this->load->model('admin/Tour_itinerarymanage');
					$data['state_list']=$this->Tour_itinerarymanage->getStateList();
			 		$this->load->view('admin/get_state_view',$data);
			 }
			 
	  public function getCityList(){
		
			$this->load->model('admin/Tour_itinerarymanage');
			$data['city_list']=$this->Tour_itinerarymanage->getCityList();
			$this->load->view('admin/get_city_view',$data);
	 }
	 public function getSightSeeingList(){
	 	
			$this->load->model('admin/Tour_itinerarymanage');
			$data['sightSeeingList']=$this->Tour_itinerarymanage->getSightSeeingList();
			$this->load->view('admin/get_sightseeing_view',$data);
			
	 }
	 
	 public function getSightSeeingDescription(){
	 
	 		$this->load->model('admin/Tour_itinerarymanage');
			$data['sightSeeingDesp']=$this->Tour_itinerarymanage->getSightSeeingDescription();
			$this->load->view('admin/get_sightseeingdes_view',$data);
	 
	 }
	 
	 public function getStayLocation(){
	 	
			$this->load->model('admin/Tour_itinerarymanage');
			$data['sightSeeingDesp']=$this->Tour_itinerarymanage->getSightSeeingDescription();
			$this->load->view('admin/get_sightseeingdes_view',$data);
	 	
	 }
	 
	/*--------------------------- Start Stay Locations ------------------------------*/
	 public function getSStateList(){
			 	
			$this->load->model('admin/Tour_itinerarymanage');
			$data['sstate_list']=$this->Tour_itinerarymanage->getSStateList();
			$this->load->view('admin/get_state_view',$data);
	 }
			 
	  public function getSCityList(){
		
			$this->load->model('admin/Tour_itinerarymanage');
			$data['scity_list']=$this->Tour_itinerarymanage->getSCityList();
			$this->load->view('admin/get_city_view',$data);
	 }
	 /*--------------------------- Start Stay Locations ------------------------------*/

	  
	
 }

?>
