<?php 
   /**
 
   */
 class Locationsmanage extends CI_Model
    {
      

	  //-----------------------------------------add------------------------------------------------			 
			function locations_add($data)
			 {
			  // Inserting in Table(usc_locations) of Database(usc)
			  
				 if($this->db->insert('usc_locations', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function locations_view($limit,$offset)
			 {
			   // Updateing in Table(usc_locations) of Database(usc)
			    	$this->db->order_by("locationsId", "desc");
				   $query = $this->db->get('usc_locations',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_locations');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function locations_delete($id)
			 {
			   // Deleteing in Table(usc_locations) of Database(usc)
			    			  
					$this->db->where('locationsId', $id);
					$this->db->delete('usc_locations');
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
	       
		    function locations_edit($id)
			   {
			      // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('locationsId', $id);
						$query = $this->db->get('usc_locations');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function locations_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_locations) of Database(usc)
			    			  
						$this->db->where('locationsId', $id);
						$query = $this->db->update('usc_locations',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_locations) of Database(usc)
			    			  
					$this->db->where_in('locationsId', $id);
					$this->db->delete('usc_locations');
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
			   // Deleteing in Table(usc_locations) of Database(usc)
			    			  
					$this->db->where_in('locationsId', $id1);
					$query = $this->db->update('usc_locations',$data);
					
					
					
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
			   // Deleteing in Table(usc_locations) of Database(usc)
			    			  
					$this->db->where_in('locationsId', $id1);
					$query = $this->db->update('usc_locations',$data);
					
					
					
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