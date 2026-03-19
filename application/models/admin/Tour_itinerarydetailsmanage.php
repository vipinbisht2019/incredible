<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
   /**
 
   */
 class Tour_itinerarydetailsmanage extends CI_Model
    {
      
    //------------------------------------edit view-----------------------------------------------------		
			public function tour_get_day($id)
			   {
				  // Deleteing in Table(usc_locations) of Database(usc)
						$this->db->select('Days,FileDate,TourStartDate,TourEndDate') 	  
								 ->where('id', $id);
						$query = $this->db->get('usc_short_iti');
						return $query->result_array();
						$this->db->close();
					
						
			  } 
			  
			   public function getDates($id){
			 
			 		$this->db->select('id,Days,FileDate,TourStartDate,TourEndDate') 	  
								 ->where('id', $id);
						$query = $this->db->get('usc_short_iti')->result_array();
							
							
							foreach($query as $key => $dates){
							
								
								
								$startDate = $dates['TourStartDate']; 
								$endDate =  $dates['TourEndDate']; 
								  
								$array = array(); 
								$array1 = array(); 
								  
								 $this->db->select('ITI.cityid,ITI.TourId,ITI.ID,ct.city_name')
								 ->from('usc_touritinerary as ITI')
								 ->join('usc_city as ct','ITI.cityid = ct.cityid','left')
								 ->where('ITI.TourId', $dates['id']);
								$array1 = $this->db->get()->result_array();
								
								  
								$Variable1 = strtotime($startDate); 
								$Variable2 = strtotime($endDate); 

								for ($currentDate = $Variable1; $currentDate <= $Variable2;  
																$currentDate += (86400)) { 
																	  
									$Store = date('Y-m-d', $currentDate); 
									$array[] = $Store; 
								} 	
								
						
						} 	
						
						
				return array('dates' => $array,'cityList' => $array1);
			 	
			 } 
		
			 public function sightseeinglist(){
			 
			
				$this->db->select('sightseeing.sid,sightseeing.title,sightseeing.cityid,ct.city_name');
				$this->db->from('usc_sightseeing as sightseeing');
				$this->db->join('usc_city as ct','ct.cityid = sightseeing.cityid');				
				$query = $this->db->get()->result_array();
				
				return $query;
				$this->db->close();
			 
			 }
			 
			 public function tour_itinerarydetails_add($data){
			 	
				if($this->db->insert('usc_toursightseeings_info',$data)){
				
					return $this->db->insert_id();
				}else{
				
					return 0;
				}
			 
			 }
			 public function tour_itinerarydetails_moreadd($data){
			 	
				if($this->db->insert('usc_toursightseeings_moreinfo',$data)){
				
					return $this->db->insert_id();
				}else{
				
					return 0;
				}
			 
			 }
			 
			 public function tour_itinerarydetail_delete($tourId){
			 
			 	
				
				
				$this->db->where('TourId',$tourId);
			 	$query = $this->db->delete('usc_toursightseeings_info');
				
				
				
				$this->db->where('TourId',$tourId);
			 	$query = $this->db->delete('usc_toursightseeings_moreinfo');
			 	
			 }
			 
			 public function tour_itinerary_detail($tourId){
			 	
				$this->db->select("*")  
						 ->where('TourId', $tourId);
					
				$query = $this->db->get('usc_toursightseeings_info')->result_array();

				foreach ($query as $key => $sightMoreValue) {

					$this->db->select("*")  
						 ->where('s_info_id', $sightMoreValue['id'])
						 ->where('itineraryDays', $sightMoreValue['ItenaryDay']);
					
					$query[$key]['sightMoreValue'] = $this->db->get('usc_toursightseeings_moreinfo')->result_array();

				}

				return $query;
				$this->db->close();
			 
			 }
			 
 
			 
   }
?>