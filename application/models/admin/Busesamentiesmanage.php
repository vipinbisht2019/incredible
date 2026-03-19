<?php 
   /**
 
   */
   class Busesamentiesmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busesamenties_add($data)
			 {
			  // Inserting in Table(usc_buses_amenties) of Database(usc)
			  
				 if($this->db->insert('usc_buses_amenties', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busesamenties_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_amenties) of Database(usc)
			    	$this->db->order_by("AmentiesId", "desc");
				   $query = $this->db->get('usc_buses_amenties',$limit,$offset);
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_amenties');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busesamenties_delete($id)
			 {
			   // Deleteing in Table(usc_buses_amenties) of Database(usc)
			    			  
					$this->db->where('AmentiesId', $id);
					$this->db->delete('usc_buses_amenties');
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
	       
		    function busesamenties_edit($id)
			   {
			      // Deleteing in Table(usc_buses_amenties) of Database(usc)  ASD C
			    			  
						$this->db->where('AmentiesId', $id);
						$query = $this->db->get('usc_buses_amenties');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busesamenties_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_amenties) of Database(usc)
			    			  
						$this->db->where('AmentiesId', $id);
						$query = $this->db->update('usc_buses_amenties',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_amenties) of Database(usc)
			    			  
					$this->db->where_in('AmentiesId', $id);
					$this->db->delete('usc_buses_amenties');
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
			   // Deleteing in Table(usc_buses_amenties) of Database(usc)
			    			  
					$this->db->where_in('AmentiesId', $id1);
					$query = $this->db->update('usc_buses_amenties',$data);
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
			   // Deleteing in Table(usc_buses_amenties) of Database(usc)
			    			  
					$this->db->where_in('AmentiesId', $id1);
					$query = $this->db->update('usc_buses_amenties',$data);
			
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

	         function check_duplicate($AmentiesName)
			      {
			   								
						$q = $this->db->where(['AmentiesName' => $AmentiesName])
								->get('usc_buses_amenties');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>