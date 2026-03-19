<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_costingmanage extends CI_Model
    {
  	 
	   //1. ------------------------------------Select Hotel To Add Price-----------------------------------------------------		  
		    function tour_hotel_select($id)
			   {
			       		    $this->db->select('*') 		  
								 ->where('TourId', $id)
								 ->order_by('SetNumber');
						$query = $this->db->get('usc_tourhotels');
						// echo $this->db->last_query();
						return $query->result_array();
						$this->db->close();
			   } 	
	  //2. ------------------------------------Select Sightseeing To Add Price-----------------------------------------------------	
	       public  function tour_sightseeing_select($id)
			   {
			   
			     	
								       
			                            $this->db->select('SightName, SetNumber, Description,Images') 		  
												 ->where('TourId', $id)
												 ->order_by('SetNumber' , 'asc');
										 $query = $this->db->get('usc_toursight');
										return $query->result_array();
							 
								 $this->db->close();
					
			  } 		 
	//3. ------------------------------------Select Sightseeing To Add Price-----------------------------------------------------	   	
		 public  function tour_transfer_select($id)
			   {
		
			    		$this->db->select('TransferName, SetNumber, Description,Images,VehicleName') 		  
						         ->where('TourID', $id)
								 ->order_by('SetNumber');
						$query = $this->db->get('usc_tourtransfer');
						return $query->result_array();
						$this->db->close();
					
			  } 	
			  
	  //4.------------------------------------Select transfer To Add Price-----------------------------------------------------	 		
	      function tour_flight_select($id)
			   {
	
					$this->db->select('*') 		  
							 ->where('TourId', $id)
							 ->order_by('ForDay', 'asc');
					$query = $this->db->get('usc_toursflight');
					return $query->result_array();
					$this->db->close();
					
			  } 	
	 //5.------------------------------------Select train To Add Price-----------------------------------------------------	 			  
		function tour_train_select($id)
			   {
			
					$this->db->select('*') 		  
							 ->where('TourId', $id)
							 ->order_by('TrainDay', 'asc');
					$query = $this->db->get('usc_tourstrains');
					return $query->result_array();
					$this->db->close();
					
			  } 		 
    
	//6.------------------------------------Select Bus To Add Price-----------------------------------------------------				
		  function tour_bus_select($id)  
			   {
			           
					$this->db->select('*') 		  
							 ->where('TourId', $id)
							 ->order_by('SNo', 'asc');
					$query = $this->db->get('usc_toursbusesinfoinfo');
					return $query->result_array();
					$this->db->close();
					
			   } 		 
			   
	//7.------------------------------------Select Guid To Add Price-----------------------------------------------------				
		    function tour_guide_select($id)
			      {
			               $this->db->select('ItenaryDay, ItineraryTitle,ItenaryDay,category_id,city_id') 	
									->from('usc_touritinerary')
									->where('TourId', $id)
									->where('IsGuide', 'Y')
									->order_by('ItenaryDay','asc');
						$query = $this->db->get();
						return $query->result_array();
						$this->db->close();
			       }   
 
			 		  			 	
	   		 	 
			 
   }
?>