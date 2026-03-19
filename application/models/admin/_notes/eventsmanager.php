<?php 
   /**
 
   */
   class Eventsmanager extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function events_add($data)
			 {
			  // Inserting in Table(usc_events) of Database(usc)
			  
				 if($this->db->insert('usc_events', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function events_view($limit,$offset)
			 {
			   // Updateing in Table(usc_events) of Database(usc)
			    
				   $query = $this->db->get('usc_events',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		 
		 //------------------------------------Get toatal record in table for paging-----------------------------------------------------		
	       
		    function get_tatal()
			 {
			   // Updateing in Table(usc_events) of Database(usc)
			    
				   $query = $this->db->get('usc_events');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  
			 		 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function events_delete($id)
			 {
			   // Deleteing in Table(usc_events) of Database(usc)
			    			  
					$this->db->where('event_id', $id);
					$this->db->delete('usc_events');
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
	       
		    function events_edit($id)
			   {
			      // Deleteing in Table(usc_events) of Database(usc)
			    			  
						$this->db->where('event_id', $id);
						$query = $this->db->get('usc_events');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function events_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_events) of Database(usc)
			    			  
						$this->db->where('event_id', $id);
						$query = $this->db->update('usc_events',$data);
						$this->db->close();
			  } 
		
		########################################################################################################################################
		################################################  Bulk Action activate, deactivate and delete ##########################################
		#########################################################################################################################################  	
		
		// ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_events) of Database(usc)
			    			  
					$this->db->where_in('event_id', $id);
					$this->db->delete('usc_events');
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
			   // Deleteing in Table(usc_events) of Database(usc)
			    			  
					$this->db->where_in('event_id', $id1);
					$query = $this->db->update('usc_events',$data);
					
					
					
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
			   // Deleteing in Table(usc_events) of Database(usc)
			    			  
					$this->db->where_in('event_id', $id1);
					$query = $this->db->update('usc_events',$data);
					
					
					
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