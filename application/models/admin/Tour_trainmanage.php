<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
 class Tour_trainmanage extends CI_Model
    {
  	 
		  function tour_train() // from inventary
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
			
			   function tour_itinerary_train($id)
			      {
			           // Deleteing in Table(usc_hotelsroomtype) of Database(usc) HotelName  TourId
								$this->db->select('ItenaryDay, ItineraryTitle,ItenaryDay,category_id,city_id') 	
											->from('usc_touritinerary')
											->where('TourId', $id)
											->where('IsTrain', 'Y')
											->order_by('ItenaryDay','asc');
								$query = $this->db->get();
								 //echo $this->db->last_query();
								return $query->result_array();
								
								
							 	 $this->db->close();
			       }   
		    //--------------------------------------------------------------------------------------------------
			       
			public function tour_train_delete($id)
				 {
					 // Deleteing in Table(usc_hoteles) of Database(usc)
								  
						$this->db->where('TourId', $id);
						$this->db->delete('usc_tourstrains');
						$sql = $this->db->last_query();
							// $this->db->close();
					  
							
				 }			   
		
		   //------------------------------------edit view-----------------------------------------------------		
	       
		    function tour_train_edit($id)
			   {
			             // Deleteing in Table(usc_locations) of Database(usc)
					$this->db->select('*') 		  
							 ->where('TourId', $id)
							 ->order_by('TrainDay', 'asc');
					$query = $this->db->get('usc_tourstrains');
					return $query->result_array();
					$this->db->close();
					
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function tour_train_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('TourId', $id);
						$query = $this->db->update('usc_tourgeneralinfo',$data);
						$this->db->close();
			  } 
			  
			  
           
		   public function tour_train_add($data)
			  {
			    
				 if($this->db->insert('usc_tourstrains', $data))
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