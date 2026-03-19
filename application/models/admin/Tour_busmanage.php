<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_busmanage extends CI_Model
    {
  	 
		  function tour_bus() // from inventary not in use
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
			
			   function tour_itinerary_bus($id)
			      {
			        				$this->db->select('ItenaryDay, ItineraryTitle,ItenaryDay,category_id,city_id') 	
											->from('usc_touritinerary')
											->where('TourId', $id)
											->where('IsBus', 'Y')
											->order_by('ItenaryDay','asc');
								$query = $this->db->get();
								 //echo $this->db->last_query();
								return $query->result_array();
								
								
							 	 $this->db->close();
			       }   
		    //--------------------------------------------------------------------------------------------------
			       
			public function tour_bus_delete($id)
				 {
										  
						$this->db->where('TourId', $id);
						$this->db->delete('usc_toursbusesinfoinfo');
						$sql = $this->db->last_query();
							// $this->db->close();
					  
							
				 }			   
		
		   //------------------------------------edit view-----------------------------------------------------		
	       
		    function tour_bus_edit($id)  // not in use 
			   {
			           
					$this->db->select('*') 		  
							 ->where('TourId', $id)
							 ->order_by('SNo', 'asc');
					$query = $this->db->get('usc_toursbusesinfoinfo');
					return $query->result_array();
					$this->db->close();
					
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function tour_bus_edit_data($data,$id)
			  {
			  			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->update('usc_tourgeneralinfo',$data);
						$this->db->close();
			  } 
			  
			  
           
		   public function tour_bus_add($data)
			  {
			    
				 if($this->db->insert('usc_toursbusesinfoinfo', $data))
					 {
					   return $this->db->insert_id();
					 }
					else
					 {
					   return 0;
					 } 
		       } 
		//-----------------------------------------------------------------------------------   	
		
	
		
		   
		 				 
			 		  			 	
	   		 	 
			 
   }
?>