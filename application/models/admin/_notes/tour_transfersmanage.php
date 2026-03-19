<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   /**
 
   */
class Tour_transfersmanage extends CI_Model
   {

		public function tour_itinerary_transfer($id)
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
	       
	 public  function tour_transfer_edit($id)
			   {
			      // Deleteing in Table(usc_locations) of Database(usc)
			    		$this->db->select('TransferName, SetNumber, Description,Images,VehicleName') 		  
						         ->where('TourID', $id)
								 ->order_by('SetNumber');
						$query = $this->db->get('usc_tourtransfer');
						return $query->result_array();
						$this->db->close();
					
			  } 		 
	   
 //--------------------------------------------first delete ------------------------------------------------------
			       
			public function tour_transfer_delete($id)
				 {
					 // Deleteing in Table(usc_hoteles) of Database(usc)
								  
						$this->db->where('TourID', $id);
						$this->db->delete('usc_tourtransfer');
						$sql = $this->db->last_query();
							// $this->db->close();
					  
							
				 }	
			  
 //---------------------------------------------Then insert-----------------------------------------------------
		   public function tour_transfer_add($data)
			  {
			     // Inserting in Table(usc_hoteles) of Database(usc)
				 if($this->db->insert('usc_tourtransfer', $data))
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