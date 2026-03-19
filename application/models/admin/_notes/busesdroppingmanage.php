<?php 
   /**
 
   */
   class Busesdroppingmanage extends CI_Model
   {
      

	  //-----------------------------------------add------------------------------------------------			 
			function busesdropping_add($data)
			 {
			  // Inserting in Table(usc_buses_dropping) of Database(usc)
			  
				 if($this->db->insert('usc_buses_dropping', $data))
					 {
					   return 1;
					 }
					else
					 {
					   return 1;
					 } 
			 } 	 
       //------------------------------------view-----------------------------------------------------		
	       
		    function busesdropping_view($limit,$offset)
			 {
			   // Updateing in Table(usc_buses_dropping) of Database(usc)
								
					$this->db->from('usc_buses_dropping as sboard')
				            ->join("usc_buses_city as city", "sboard.CityId = city.CityId")
						    ->limit($limit,$offset)
			    	        ->order_by("sboard.DroppingId", "desc");
				    $query = $this->db->get();
                   return $query->result_array();
                  $this->db->close();
				
			 } 
		  //------------------------------------Get toatal record in table for paging-----------------------------------------------------	  
		    function get_tatal()
			 {
			   // Updateing in Table(usc_flash) of Database(usc)
			    
				   $query = $this->db->get('usc_buses_dropping');
				   return $query->num_rows();
                   $this->db->close();
				
			 }  	 
			 
	      //------------------------------------Delete-----------------------------------------------------		
	       
		    function busesdropping_delete($id)
			 {
			   // Deleteing in Table(usc_buses_dropping) of Database(usc)
			    			  
					$this->db->where('DroppingId ', $id);
					$this->db->delete('usc_buses_dropping');
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
	       
		    function busesdropping_edit($id)
			   {
			      // Deleteing in Table(usc_buses_dropping) of Database(usc)
			    			  
						$this->db->where('DroppingId ', $id);
						$query = $this->db->get('usc_buses_dropping');
						return $query->result_array();
						$this->db->close();
					
						
			  } 		 
	   
	     //------------------------------------edit date-----------------------------------------------------		
	       
		    function busesdropping_edit_data($data,$id)
			  {
			     // Deleteing in Table(usc_buses_dropping) of Database(usc)
			    			  
						$this->db->where('DroppingId ', $id);
						$query = $this->db->update('usc_buses_dropping',$data);
						$this->db->close();
			  } 
			  
			  
			  
			  
			  // ----------------------------------------- deleting multiple  recoderd -------------------------------		  
		 function admin_delete_bulk($id)
			 {
			   // Deleteing in Table(usc_buses_dropping) of Database(usc)
			    			  
					$this->db->where_in('DroppingId ', $id);
					$this->db->delete('usc_buses_dropping');
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
			   // Deleteing in Table(usc_buses_dropping) of Database(usc)
			    			  
					$this->db->where_in('DroppingId', $id1);
					$query = $this->db->update('usc_buses_dropping',$data);
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
			   // Deleteing in Table(usc_buses_dropping) of Database(usc)
			    			  
					$this->db->where_in('DroppingId ', $id1);
					$query = $this->db->update('usc_buses_dropping',$data);
			
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

	         function check_duplicate($DroppingPointName)
			      {
			   								
						$q = $this->db->where(['DroppingPointName' => $DroppingPointName])
								->get('usc_buses_dropping');
											
						if ($q->num_rows()) {
						  return 0 ;
							
						 } else {
						
							 return 1;
						}
			   }
			   
        	//-------------------------------------------------  Dropdown ---------------------------------------------------------	   	
		
		   public function dropdown_city()
		      {
			     $this->db->select('CityId,CityName')
				          ->where('Status','Y');
					$query=$this->db->get('usc_buses_city');
					return $query->result_array();
					$this->db->close();
					  
			  
			  }	   	
			 			   		  		 				 
			 		  			 	
	   		 	 
			 
   }
?>