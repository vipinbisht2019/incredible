<?php 
   /**
 
   */
   class Inclusionmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function inclusion_add($data)
			 {
			  // Inserting in Table(usc_tourinclusions) of Database(usc)
			  
				 if($this->db->insert('usc_tourinclusions', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function inclusion_view($limit,$offset)
			 {
			   // Updateing in Table(usc_tourinclusions) of Database(usc)
			    	$this->db->order_by("TourInclusionsId ", "desc");
				   $query = $this->db->get('usc_tourinclusions',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_tourinclusions');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function inclusion_delete($id)
			 {
			   // Deleteing in Table(usc_tourinclusions) of Database(usc)
			    			  
					$this->db->where('TourInclusionsId ', $id);
					$this->db->delete('usc_tourinclusions');
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
	       
		    function inclusion_edit($id)
			   {
			      // Deleteing in Table(usc_tourinclusions) of Database(usc)
			    			  
						$this->db->where('TourInclusionsId ', $id);
						$query = $this->db->get('usc_tourinclusions');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function inclusion_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_tourinclusions) of Database(usc)
			    			  
						$this->db->where('TourInclusionsId ', $id);
						$query = $this->db->update('usc_tourinclusions',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_tourinclusions) of Database(usc)
			    			  
					$this->db->where_in('TourInclusionsId ', $id);
					$this->db->delete('usc_tourinclusions');
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
			   // Deleteing in Table(usc_tourinclusions) of Database(usc)
			    			  
					$this->db->where_in('TourInclusionsId', $id1);
					$query = $this->db->update('usc_tourinclusions',$data);
				/*	
					echo $this->db->last_query();
					die();
					*/
					
					
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
			   // Deleteing in Table(usc_tourinclusions) of Database(usc)
			    			  
					$this->db->where_in('TourInclusionsId ', $id1);
					$query = $this->db->update('usc_tourinclusions',$data);
			
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