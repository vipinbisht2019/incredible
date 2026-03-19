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
								$this->db->select('NoofDay') 	  
								         ->where('TourId', $id);
								$query = $this->db->get('usc_tourgeneralinfo');
								return $query->result_array();
								$this->db->close();
							
								
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
			     // Inserting in Table(usc_hoteles) of Database(usc)
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
 
			 
   }
?>