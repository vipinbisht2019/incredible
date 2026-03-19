<?php 
   /**
 
   */
   class Gallarymanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function gallary_add($data)
			 {
			  // Inserting in Table(usc_gallery) of Database(usc)
			  
				 if($this->db->insert('usc_gallery', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function gallary_view($limit,$offset)
			 {
			   // Updateing in Table(usc_gallery) of Database(usc)
			   
			   
			       $this->db->from('usc_gallery as gal',$limit,$offset)
				            ->join("usc_hoteles as hotel", "gal.HotelId = hotel.HotelId",'left')
			    	        ->order_by("gal.HotelId", "desc");
			    
				   $query = $this->db->get();
                   return $query->result_array();
                  $this->db->close();
				
			 } 
			 
		 //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_gallery) of Database(usc)
			    
				   $query = $this->db->get('usc_gallery');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 	 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function gallary_delete($id)
			 {
			   // Deleteing in Table(usc_gallery) of Database(usc)
			    			  
					$this->db->where('gallery_id', $id);
					$this->db->delete('usc_gallery');
					 if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }  
						
			 } 		 
			 
		  //------------------------------------edit view-----------------------------------------------------		
	       
		    function gallary_edit($id)
			   {
			      // Deleteing in Table(usc_gallery) of Database(usc)
			    			  
						$this->db->where('gallery_id', $id);
						$query = $this->db->get('usc_gallery');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function gallary_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_gallery) of Database(usc)
			    			  
						$this->db->where('gallery_id', $id);
						$query = $this->db->update('usc_gallery',$data);
						$this->db->close();
			  } 
	    
		  
		 //------------------------------------edit date-----------------------------------------------------		
	       
		    function gallary_hotel()
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
		
		########################################################################################################################################
		################################################  Bulk Action activate, deactivate and delete ##########################################
		#########################################################################################################################################  	
		
		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_gallery) of Database(usc)
			    			  
					$this->db->where_in('gallery_id', $id);
					$this->db->delete('usc_gallery');
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		
			 
			
		// ----------------------------------------- activate multiple  recoderd -------------------------------		  
		 function admin_activate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_gallery) of Database(usc)
			    			  
					$this->db->where_in('gallery_id', $id1);
					$query = $this->db->update('usc_gallery',$data);
					
					
					
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		 
			 
	// ----------------------------------------- deactivate multiple  recoderd -------------------------------		  
		 function admin_deactivate_bulk($id1,$data)
			 {
			   // Deleteing in Table(usc_gallery) of Database(usc)
			    			  
					$this->db->where_in('gallery_id', $id1);
					$query = $this->db->update('usc_gallery',$data);
					
					
					
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 } 		 				 	 	
	   		 	 		  		 	
	   		 	 
			 
   }
   

?>
