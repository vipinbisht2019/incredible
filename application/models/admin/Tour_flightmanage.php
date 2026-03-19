<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_flightmanage extends CI_Model
    {
  	 
		  function tour_flight() // from inventary
			  {
				  // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName
						$this->db->select('HotelName, HotelId') 	
									->from('usc_hoteles')
									->where('Status', 'Y')
									->order_by('HotelName');
						$query = $this->db->get();
						return $query->result_array();
				        // echo $this->db->last_query();
						$this->db->close();
			  }  
			  
			//---------------------------------- Get itinary ---------------------------  tour_itinerary_add ------------------------
			
			   function tour_itinerary_flight($id)
			      {
			           // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName  TourId
								$this->db->select('ItenaryDay, ItineraryTitle,ItenaryDay,category_id,city_id') 	
											->from('usc_touritinerary')
											->where('TourId', $id)
											->where('IsFlight', 'Y')
											->order_by('ItenaryDay','asc');
								$query = $this->db->get();
								 //echo $this->db->last_query();
								return $query->result_array();
								
								
							 	 $this->db->close();
			       }   
		    //--------------------------------------------------------------------------------------------------
			       
			public function tour_flight_delete($id)
				 {
					 // Deleteing in Table(usc_hoteles) of Database(usc)
								  
						$this->db->where('TourId', $id);
						$this->db->delete('usc_toursflight');
						$sql = $this->db->last_query();
							// $this->db->close();
					  
							
				 }			   
		
		   //------------------------------------edit view-----------------------------------------------------		
	       
		    function tour_flight_edit($id)
			   {
			             // Deleteing in Table(usc_locations) of Database(usc)
					$this->db->select('*') 		  
							 ->where('TourId', $id)
							 ->order_by('ForDay', 'asc');
					$query = $this->db->get('usc_toursflight');
					return $query->result_array();
					$this->db->close();
					
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function tour_flight_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->update('usc_tourgeneralinfo',$data);
						$this->db->close();
			  } 
			  
			  
           
		   public function tour_flight_add($data)
			  {
			     // Inserting in Table(usc_hoteles) of Database(usc)
				 if($this->db->insert('usc_toursflight', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 
		//-----------------------------------------------------------------------------------   	
		
		  function airline_dropdown() // from inventary
			  {
					   $this->db->select('*') 	
							->from('usc_toursairlines')
							->where('Status', 'Y')
							->order_by('AirlinesName');
					$query = $this->db->get();
					return $query->result_array();
					$this->db->close();
			  }  
		
		   
		 				 
			 		  			 	
	   		 	 
			 
   }
?>