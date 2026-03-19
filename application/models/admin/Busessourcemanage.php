<?php 
   /**
 
   */
   class Busessourcemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busessource_add($data)
			 {
			  // Inserting in Table(usc_buses_source) of Database(usc)
			  
				 if($this->db->insert('usc_buses_source', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busessource_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_source) of Database(usc)
			    	$this->db->order_by("sourceId ", "desc");
				   $query = $this->db->get('usc_buses_source',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_source');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busessource_delete($id)
			 {
			   // Deleteing in Table(usc_buses_source) of Database(usc)
			    			  
					$this->db->where('sourceId ', $id);
					$this->db->delete('usc_buses_source');
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
	       
		    function busessource_edit($id)
			   {
			      // Deleteing in Table(usc_buses_source) of Database(usc)
			    			  
						$this->db->where('sourceId ', $id);
						$query = $this->db->get('usc_buses_source');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busessource_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_source) of Database(usc)
			    			  
						$this->db->where('sourceId ', $id);
						$query = $this->db->update('usc_buses_source',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_source) of Database(usc)
			    			  
					$this->db->where_in('sourceId ', $id);
					$this->db->delete('usc_buses_source');
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
			   // Deleteing in Table(usc_buses_source) of Database(usc)
			    			  
					$this->db->where_in('sourceId', $id1);
					$query = $this->db->update('usc_buses_source',$data);
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
			   // Deleteing in Table(usc_buses_source) of Database(usc)
			    			  
					$this->db->where_in('sourceId ', $id1);
					$query = $this->db->update('usc_buses_source',$data);
			
				    if($this->db->affected_rows())	
						  {
							 return 1;
						  }
						else
						 {
							  return 0;
						 }
						
			 }

   // Dublicate Check #####################################################################

	         function check_duplicate($sourceCity)
			      {
			   								
						$q = $this->db->where(['sourceCity' => $sourceCity])
								->get('usc_buses_source');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>