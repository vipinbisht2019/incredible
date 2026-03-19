<?php 
   /**
 
   */
   class Regionsmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function regions_add($data)
			 {
			  // Inserting in Table(usc_regions) of Database(usc)
			  
				 if($this->db->insert('usc_regions', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function regions_view($limit,$offset)
			 {
			   // Updateing in Table(usc_regions) of Database(usc)
			    	$this->db->order_by("RId", "desc");
				   $query = $this->db->get('usc_regions',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_regions');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function regions_delete($id)
			 {
			   // Deleteing in Table(usc_regions) of Database(usc)
			    			  
					$this->db->where('RId', $id);
					$this->db->delete('usc_regions');
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
	       
		    function regions_edit($id)
			   {
			      // Deleteing in Table(usc_regions) of Database(usc)
			    			  
						$this->db->where('RId', $id);
						$query = $this->db->get('usc_regions');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function regions_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_regions) of Database(usc)
			    			  
						$this->db->where('RId', $id);
						$query = $this->db->update('usc_regions',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_regions) of Database(usc)
			    			  
					$this->db->where_in('RId', $id);
					$this->db->delete('usc_regions');
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
			   // Deleteing in Table(usc_regions) of Database(usc)
			    			  
					$this->db->where_in('RId', $id1);
					$query = $this->db->update('usc_regions',$data);
					
					
					
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
			   // Deleteing in Table(usc_regions) of Database(usc)
			    			  
					$this->db->where_in('RId', $id1);
					$query = $this->db->update('usc_regions',$data);
					
					
					
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