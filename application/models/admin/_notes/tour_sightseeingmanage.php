<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Tour_sightseeingmanage extends CI_Model
   {

		public function tour_itinerary_sight($id)
			      {
			           // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName  TourId
								$this->db->select('ItenaryDay, ItineraryTitle,ItenaryDay,category_id,city_id') 	
											->from('usc_touritinerary')
											->where('TourId', $id)
											->order_by('ItenaryDay');
															
								$query = $this->db->get();
								 //echo $this->db->last_query();
								return $query->result_array();
								$this->db->close();
			       }   
		   
		
 //------------------------------------edit view-----------------------------------------------------		
	       
	 public  function tour_sightseeing_edit($id)
			   {
			      // Deleteing in Table(usc_locations) of Database(usc)
			    		$this->db->select('SightName, SetNumber, Description,Images') 		  
						         ->where('TourId', $id)
								 ->order_by('SetNumber');
						$query = $this->db->get('usc_toursight');
						return $query->result_array();
						$this->db->close();
					
			  } 		 
	   
 //--------------------------------------------first delete ------------------------------------------------------
			       
			public function tour_itinerary_delete($id)
				 {
					 // Deleteing in Table(usc_hoteles) of Database(usc)
								  
						$this->db->where('TourID', $id);
						$this->db->delete('usc_toursight');
						$sql = $this->db->last_query();
							// $this->db->close();
					  
							
				 }	
			  
 //---------------------------------------------Then insert-----------------------------------------------------
		   public function tour_itinerary_add($data)
			  {
			     // Inserting in Table(usc_hoteles) of Database(usc)
				 if($this->db->insert('usc_toursight', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 	
 		 	 
    }
?>