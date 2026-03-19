<?php 
   /**
 
   */
   class Busesfaretypemanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busesfaretype_add($data)
			 {
			  // Inserting in Table(usc_buses_faretype) of Database(usc)
			  
				 if($this->db->insert('usc_buses_faretype', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 0;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busesfaretype_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_faretype) of Database(usc)
								
					$this->db->from('usc_buses_faretype')
						     ->limit($limit,$offset)
				             ->order_by("FareTypeId", "desc");
				    $query = $this->db->get();
                    return $query->result_array();
                    $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_faretype');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busesfaretype_delete($id)
			 {
			   // Deleteing in Table(usc_buses_faretype) of Database(usc)
			    			  
					$this->db->where('FareTypeId ', $id);
					$this->db->delete('usc_buses_faretype');
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
	       
		    function busesfaretype_edit($id)
			   {
			      // Deleteing in Table(usc_buses_faretype) of Database(usc)
			    			  
						$this->db->where('FareTypeId ', $id);
						$query = $this->db->get('usc_buses_faretype');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busesfaretype_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_faretype) of Database(usc)
			    			  
						$this->db->where('FareTypeId ', $id);
						$query = $this->db->update('usc_buses_faretype',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_faretype) of Database(usc)
			    			  
					$this->db->where_in('FareTypeId ', $id);
					$this->db->delete('usc_buses_faretype');
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
			   // Deleteing in Table(usc_buses_faretype) of Database(usc)
			    			  
					$this->db->where_in('FareTypeId', $id1);
					$query = $this->db->update('usc_buses_faretype',$data);
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
			   // Deleteing in Table(usc_buses_faretype) of Database(usc)
			    			  
					$this->db->where_in('FareTypeId ', $id1);
					$query = $this->db->update('usc_buses_faretype',$data);
			
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

	         function check_duplicate($FareTypeName)
			      {
			   								
						$q = $this->db->where(['FareTypeName' => $FareTypeName])
								->get('usc_buses_faretype');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
			   

			 			   		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>