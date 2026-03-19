<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
   /**
 
   */
 class Tour_itinerarymanage extends CI_Model
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
			 
			 		$this->db->select('Days,FileDate,TourStartDate,TourEndDate') 	  
								 ->where('id', $id);
						$query = $this->db->get('usc_short_iti')->result_array();
						
							foreach($query as $key => $dates){
								
								$startDate = $dates['TourStartDate']; 
								$endDate =  $dates['TourEndDate']; 
								  
								// Declare an empty array 
								$array = array(); 
								  
								// Use strtotime function 
								$Variable1 = strtotime($startDate); 
								$Variable2 = strtotime($endDate); 
								  
								// Use for loop to store dates into array 
								// 86400 sec = 24 hrs = 60*60*24 = 1 day 
								for ($currentDate = $Variable1; $currentDate <= $Variable2;  
																$currentDate += (86400)) { 
																	  
									$Store = date('Y-m-d', $currentDate); 
									$array[] = $Store; 
								} 	
								
						
						} 	
				return $array;
			 	
			 } 
			 
		  // first delete all atenary data then then insertt 
			public function tour_itinerary_delete($id)
				 {
					 // Deleteing in Table(usc_hoteles) of Database(usc)
								  
						$this->db->where('TourId', $id);
						$this->db->delete('usc_touritinerary');
						$sql = $this->db->last_query();
							// $this->db->close();
					  
							
				 }	
		
		  public function tour_itinerary_add($data)
			  {
			
				 if($this->db->insert('usc_touritinerary', $data))
					{
					return $this->db->insert_id();
					}
				else
					{
					return 0;
					} 
		       } 		 		  
		
	  
	  //------------------------------------edit view-----------------------------------------------------		
	       
		    public function tour_itinerary_edit($id)
			    {
			      // Deleteing in Table(usc_locations) of Database(usc)
			    		$this->db->select("*")  
						         ->where('TourId', $id)
						         ->order_by('ItenaryDay');
						$query = $this->db->get('usc_touritinerary');
						return $query->result_array();
						$this->db->close();
				 }
				 
			public function country_list(){
			
						$this->db->select("*")  
						         ->order_by('country');
						$query = $this->db->get('usc_country');
						return $query->result_array();
						$this->db->close();
			
			} 
			
			public function state_list(){
			
						$this->db->select("*")  
						         ->order_by('StatesName');
						$query = $this->db->get('nuttyshoppers_states');
						return $query->result_array();
						$this->db->close();
			
			} 
			
			public function city_list(){
			
					/*	$this->db->select('stateid')
						    ->where('TourId',$id)
						$query = $this->db->get('usc_touritinerary');
						 $query->result_array();
							*/
			
						$this->db->select("*")  
						         ->order_by('city_name');
						$query = $this->db->get('usc_city');
						return $query->result_array();
						$this->db->close();
						
						
						/*$this->db->select('stateid')
						    ->where('TourId',$id);
						$query = $this->db->get('usc_touritinerary')->result_array();
						$cityList = array();
						foreach($query as $key => $val){
							
							$this->db->select("*")  
								->where('stateid',$val['stateid'])
						        ->order_by('city_name');
							$cityList = $this->db->get('usc_city')->result_array();
						}
							*/
			
			} 
			
			 public function getStateList(){
			 
			 	$countryid = $this->input->post('countryId');
			 	
				$this->db->select('*')
				 ->from('nuttyshoppers_states')
				 ->where('countryid',$countryid);
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
				
			 }
			 
			 public function getCityList(){
			 
			 	$stateid = $this->input->post('stateid');
			 	
				$this->db->select('*')
				 ->from('usc_city')
				 ->where('stateid',$stateid);
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
			 }
			 
			 public function getSightSeeingList(){
			 
			 	$cityid = $this->input->post('cityid');
				$this->db->select('*')
				 ->from('usc_sightseeing')
				 ->where('cityid',$cityid);
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
			 
			 }
			 
			  public function sightseeing_list(){
			 
			 	
				$this->db->select('*')
				 ->from('usc_sightseeing')
				 ->where('status','Y');
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
			 
			 }
			 
			 public function getSightSeeingDescription(){
			 
			 	$sid = $this->input->post('sid');
				$this->db->select('*')
				 ->from('usc_sightseeing')
				 ->where('sid',$sid);
				$query = $this->db->get();
				return $query->row_array();
				$this->db->close();
				
			 }
			 
			 
			  public function getSStateList(){
			 
			 	$countryid = $this->input->post('scountryId');
			 	
				$this->db->select('*')
				 ->from('nuttyshoppers_states')
				 ->where('countryid',$countryid);
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
				
			 }
			 
			 public function getSCityList(){
			 
			 	$stateid = $this->input->post('sstateid');
			 	//print_r($stateid); die;
				$this->db->select('*')
				 ->from('usc_city')
				 ->where('stateid',$stateid);
				$query = $this->db->get();
				return $query->result_array();
				$this->db->close();
			 }
 
			 
   }
?>